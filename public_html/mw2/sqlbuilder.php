<?php

function getSQLQuery($parsedQuery, $options, $language, $limit) {
	$defaults = array(
		'options' => array()
	);
	
	$options = array_merge($defaults['options'], $options);
	# $limit = (is_numeric($limit) and $limit <= 100000) ? $limit : 1000;
	#$limit = ($allhits === 'true') ? 100000 : 1000;
	$limit = (array_key_exists('all_hits', $options) and $options['all_hits'] == 'true') ? 100000 : 1000;
	return getStatement($parsedQuery, $options, $language, $limit);
}

function getVectorQuery($str) {
	return preg_replace_callback_array(
		array(
			'/[^*\s>]+/' => function($matches) { return '\'\'' . $matches[0] . '\'\''; }, // escape tokens with ''...''
			'/ /' => function($matches) { return ' & '; }, // space separated tokens means ' & '
			'/([^>*])([*>]+)([^>*])/' => function($matches) { return $matches[1] . ' <' . (substr_count($matches[2], '*') + 1) . '> ' . $matches[3]; }
		), $str);
}

function getListReplace($str, $v, $list) {
	return array_map(function($ix) use ($v, $str) {
		return str_replace($v, $ix, $str);
	}, $list);
}

function transform_hitstokenlist2($tokens) {
	return join(
		getListReplace('t%i', '%i', array_keys($tokens)),
		','
	);
}

function transform_hitstokenlist1($tokens) {
	return join(
		getListReplace('t%i.token_id t%i', '%i', array_keys($tokens)),
		','
	);
}

function transform_hitsvektor($tokens, $options) {
	$query = $options['query'];
	$vecQuery = getVectorQuery($query);

	return $vecQuery;
}

function transform_hitstoken($tokens, $options) {
	$joinStatement = <<<'TOKENJOIN'
		JOIN
		(
			SELECT *
			FROM token
			LEFT JOIN %tokenstr% USING (%tokenfieldid%)
			WHERE val = E'%i'
		) t%t% ON t%t%.sentence_id = vec.sentence_id %posclause%
TOKENJOIN;

	$joinStatements = getListReplace($joinStatement, '%i', $tokens);
	$tokenstr = transform_tokenstr($tokens, $options);

	$tokenPosInformation = explode(' ', str_replace(array('*>', '>', ), array('*', ' >'), $options['query']));

	return join(
		array_map(function($joinStatement) use ($tokenstr) {
			return str_replace('%tokenstr%', $tokenstr, $joinStatement);
		}, array_map(function($ix) use ($joinStatements, $tokenPosInformation, $options) {
				$addPosClause = $tokenPosInformation[$ix]{0} === '>';
				$placeholders = array();
				preg_match('/^\>([*]*)/', $tokenPosInformation[$ix], $placeholders);
				$countPlaceholders = count($placeholders) == 2 ? strlen($placeholders[1]) : 0;

				return str_replace(
					array(
						'%t%',
						'%posclause%'
					),
					array(
						$ix,
						($addPosClause ? 'AND t' . $ix . '.' . ($options['content_words_only'] ? 'content_no' : 'token_id' ) . ' = t' . ($ix - 1) . '.' . ($options['content_words_only'] ? 'content_no' : 'token_id' ) . ' + ' . ($countPlaceholders + 1) : '')
					), $joinStatements[$ix]);
			 }, array_keys($tokens))
		),
	"\n");
}

function transform_metadatafilter($tokens, $options) {
	if (isset($options['metadata'])) {
		$mdPrefix = <<<'METADATAPREFIX'
		JOIN text_attr USING (text_id)
		WHERE
METADATAPREFIX;
		$mdConditions = array_map(function($field) use ($options) {
			return 'meta->>\'' . pg_escape_string($field) . '\' = \'' . pg_escape_string($options['metadata'][$field]) . '\'';
		}, array_keys($options['metadata']));
		
		if (count($mdConditions)) {
			return $mdPrefix . ' ' . join(' AND ', $mdConditions);
		}

		return '';
	}
}

function transform_transsourcetokenarray($tokens) {
	return join(
		getListReplace('t%i', '%i', array_keys($tokens)),
		','
	);
}

function transform_transsourcetokenset($tokens) {
	return join(
		getListReplace('t%i', '%i', array_keys($tokens)),
		','
	);
}

function transform_vector($tokens, $options) {
	return $options['content_words_only'] ? 'content_vectors' : 'full_vectors';
}

function transform_vectorfield($tokens, $options) {
	return $options['token_lemma'] ? 'vec_lemma' : 'vec_type';
}

function transform_tokenstr($tokens, $options) {
	return $options['token_lemma'] ? 'lemmastr' : 'typestr';
}

function transform_tokenfieldid($tokens, $options) {
	return $options['token_lemma'] ? 'lemma_id' : 'type_id';
}

function getStatement($query, $options, $language, $limit) {
	$hooks = array(
		'hitstokenlist2',
		'hitstokenlist1',
		'hitsvektor',
		'hitstoken',
		'metadatafilter',
		'transsourcetokenarray',
		'transsourcetokenset',
		'vector',
		'vectorfield',
		'tokenstr',
		'tokenfieldid',
	);

	$tokens = array_map(function($str) { return pg_escape_string($str); }, $query['tokens']);
	$options = array_merge($options, array('query' => $query['query']));

	$tokenedGetTransform = function($hook) use ($tokens, $options) {
		return call_user_func('transform_' . $hook, $tokens, $options);
	};

	$placeholders = getListReplace('%%i%', '%i', $hooks);
	$values = array_map($tokenedGetTransform, $hooks);

	$placeholders[] = '%language%';
	$values[] = pg_escape_string($language);

	$placeholders[] = '%hitlimit%';
	$values[] = $limit;

	$statement = <<<'STATEMENT'
WITH hits AS
(
	SELECT
		%hitstokenlist2%,
		source_sentence_id,
		row_number() OVER () = %hitlimit%+1 AS last_hit
	FROM (
		SELECT
			%hitstokenlist1%,
			vec.sentence_id source_sentence_id
		FROM
		(
			SELECT sentence_id, text_id
			FROM %vector%
			JOIN sentence_attr USING (sentence_id)
			WHERE %vectorfield% @@ E'%hitsvektor%'::tsquery
			AND sentence_attr.lang = '%language%'
		) vec
%hitstoken%
%metadatafilter%
		LIMIT %hitlimit%+1
	) filtered
),
trans_list AS
(
	SELECT
		source_target.source_sentence_id,
		source_target.source_token_ids,
		sentence_attr1.sent_length source_sent_length,
		sentence_attr2.lang target_lang,
		source_target.target_sentence_id,
		source_target.target_token_ids,
		sentence_attr2.sent_length target_sent_length,
		source_target.cluster_lemmas,
		dense_rank() OVER (ORDER BY sentence_attr2.lang, cluster_lemmas) cluster_id
	FROM
	(
		SELECT
			source_sentence_id,
			source_token_ids,
			target_sentence_id,
			array_agg(target_token_id ORDER BY target_token_id) target_token_ids,
			array_agg(target_%tokenstr% ORDER BY target_token_id) cluster_lemmas
		FROM
		(
			SELECT DISTINCT
				hits.source_sentence_id,
				ARRAY[%transsourcetokenarray%] source_token_ids,
				token.sentence_id target_sentence_id,
				wtarget target_token_id,
				val target_%tokenstr%
			FROM hits
			-- trans/source_token_set >>>
			JOIN word_align ON wsource IN (%transsourcetokenset%)
			-- <<<
			LEFT JOIN token ON token.token_id = wtarget
			LEFT JOIN lemmastr USING (lemma_id)
			WHERE NOT last_hit
		) x
		GROUP BY source_sentence_id, source_token_ids, target_sentence_id
		HAVING count(DISTINCT target_sentence_id) = 1
	) source_target
	JOIN sentence_attr sentence_attr1 ON sentence_attr1.sentence_id = source_sentence_id
	JOIN sentence_attr sentence_attr2 ON sentence_attr2.sentence_id = target_sentence_id
),
stats AS
(
	SELECT
		jsonb_agg(obj) stat_obj
	FROM
	(
		SELECT
			jsonb_build_object(target_lang, jsonb_agg(jsonb_build_object(
				'id', cluster_id, -- unique identifier for a translation equivalent
				'c', cluster_count, -- number of examples for this particular translation variant
				'l', to_json(cluster_lemmas) -- ordered list of lemmas
			) ORDER BY cluster_count DESC)) obj
		FROM
		(
			SELECT
				target_lang,
				cluster_id,
				cluster_lemmas,
				count(*) cluster_count
			FROM trans_list
			GROUP BY target_lang, cluster_id, cluster_lemmas
		) x
		GROUP BY target_lang
	) x
),
example_list AS
(
	SELECT
		jsonb_agg(jsonb_build_object(
			'cluster', cluster_id_obj, -- cluster ids indexed by language
			'examples', obj -- example list (best ones first)
		) ORDER BY min_cluster_rank ASC) example_obj
	FROM
	(
		SELECT
			cluster_id_obj,
			jsonb_agg(jsonb_build_object(
				'rank', cluster_rank, -- global cluster rank
				'source', to_jsonb(source_token_ids), -- list of source token ids
				'target', target_token_ids_obj -- lists of target token ids indexed by language
			) ORDER BY cluster_rank ASC) obj,
			min(cluster_rank) min_cluster_rank
		FROM
		(
			SELECT
				row_number() OVER (ORDER BY pow(source_sent_length, 2) + sum(pow(target_sent_length - avg_len, 2))
					/ (1 + count(*))) cluster_rank,
				source_token_ids,
				jsonb_object_agg(target_lang, cluster_id) cluster_id_obj,
				jsonb_object_agg(target_lang, to_jsonb(target_token_ids)) target_token_ids_obj
			FROM
			(
				SELECT
					source_token_ids,
					source_sent_length,
					target_token_ids,
					cluster_id,
					target_lang,
					target_sent_length,
					(source_sent_length + sum(target_sent_length) OVER (PARTITION BY source_sentence_id))
						/ (1 + count(*) OVER (PARTITION BY source_sentence_id)) avg_len
				FROM trans_list
			) x
			GROUP BY source_token_ids, source_sent_length, avg_len
		) x
		GROUP BY cluster_id_obj
	) x
)
SELECT
	jsonb_build_object(
		'stats', stat_obj, -- translation equivalents figures for each language
		'example', example_obj, -- example lists for each occuring combination of translation equivalents
		'limithit', (SELECT bool_or(last_hit) FROM hits)
	) obj
FROM stats, example_list
STATEMENT;

	return str_replace(
		$placeholders,
		$values,
		$statement
	);
}

?>
