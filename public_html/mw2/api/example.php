<?php

require_once('../utilities.php');
require_once('../apiutilities.php');

$example = getAPIParameter('example');

header("Content-Type: application/json");

$example = json_decode($example, true);
$sourceIds = array_map(function($id) {
	return intval($id);
}, $example['source']);
$targetIds = flatten(array_map(function($ids) {
	return array_map(function($id) {
		return intval($id); }, $ids);
	}, $example['target']));

$exampleQuery = sprintf('SELECT obj FROM example(ARRAY[%s], ARRAY[%s]) obj', join(',', $sourceIds), join(',', $targetIds));
if (!$exampleRes = executeQuery($exampleQuery)) die('Query error');

$exampleData = safePgFetchAll($exampleRes);
$exampleData = count($exampleData) ? json_decode($exampleData[0]['obj'], true) : array();
$examples = array();

foreach ($exampleData['token'] as $lang => $example) {
	$examples[$lang] = array();

	foreach ($example['l'] as $tokenId => $tokenData) {
		$sentenceId = $tokenData['s'];

		if (!array_key_exists($sentenceId, $examples[$lang])) {
			$examples[$lang][$sentenceId] = array();
		}

		$examples[$lang][$sentenceId][] = array(
			'alignments' => $tokenData['a'],
			'lpad' => $tokenData['b'],
			'sentence_id' => $sentenceId,
			'token_id' => $tokenId,
			'typestr' => $tokenData['f']
		);
	}
}

print json_encode(array(
	'sentences' => $examples,
	'metadata' => $exampleData['meta']
));

?>
