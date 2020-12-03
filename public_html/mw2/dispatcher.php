<?php

	$opt_lemma = true;
	$opt_cword = false;
	$force_language = null;
	$corpus = null;

	$qp = preg_split('/\s+/', $_GET['q']);
	foreach ($qp as $i => $qt) {
		if (substr($qt, 0, 1) == '/' ) {
			preg_match('@/([^=]*)(?:=(.*))?@', $qt, $m);
			switch ($m[1]) {
				case 'type':
				case 'types':
				case 'nolemma':
					$opt_lemma = false;
					break;
				case 'cword':
				case 'content':
				case 'content_word':
				case 'content_word_only':
				case 'ignore':
				case 'ignore_fwords':
				case 'ignore_function_words':
				case 'nofunc':
					$opt_cword = true;
					break;
				case 'lang':
					$force_language = $m[2];
					break;
				case 'corpus':
					$corpus = $m[2];
					break;
			}
			unset($qp[$i]);
		}
	}

	$obj = array(
		'queryInput' => implode('@@@', $qp),
		'options' => array(
			'token_lemma' => $opt_lemma,
			'content_words_only' => $opt_cword,
		),
		'searchStarted' => true, // search immediately
	);
	if (!is_null($force_language)) {
		$obj['inputLanguage'] = $force_language;
		$obj['autoDetectInputLanguage'] = false;
	}
	if (!is_null($corpus)) {
		$obj['selectedCorpusId'] = $corpus;
	}

	$s = str_replace('%40%40%40', '%20', urlencode(json_encode($obj)));

	header('location: .#'.$s);

?>
