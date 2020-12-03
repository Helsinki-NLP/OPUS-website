<?php

require_once('../utilities.php');
require_once('../confighelper.php');
require_once('../apiutilities.php');

$config = getConfig();

$ids = array_keys($config['corpora']);

$corpora = array_map(function($corpus, $corpusId) use ($config) {
	$corpusOnline = false;
	$corpusData = array();

	$corpusQuery = 'SELECT obj FROM stats';
	$res = executeQuery($corpusQuery, array(), $corpusId);

	if ($res) {
		$corpusData = safePgFetchAll($res);
		$corpusData = count($corpusData) ? json_decode($corpusData[0]['obj'], true) : array();
		$corpusOnline = true;
	}

	$metadata = array_key_exists('metadata', $corpus) ? $corpus['metadata'] : array();
	$metadata = array_combine(array_keys($metadata), array_map(function($item, $id) use ($corpusId) {
		if (!array_key_exists('filter', $item)) {
			return $item;
		}

		$mdValues = array();
		// TODO: provide distinct attributes in materialized view (faster) + auto index all attributes
		$metadataValueQuery = 'SELECT DISTINCT meta->>\'' . $id . '\' AS value'
			. ' FROM text_attr'
			. ' WHERE meta->>\'' . $id . '\' IS NOT NULL'
			. ' ORDER BY value';
		$mdValueRes = executeQuery($metadataValueQuery, array(), $corpusId);

		if ($mdValueRes) {
			$rows = safePgFetchAll($mdValueRes);
			$mdValues = pluck('value', $rows);
		}

		$item['values'] = $mdValues;

		return $item;
	}, $metadata, array_keys($metadata)));

	return array(
		'id' => $corpusId,
		'name' => $corpus['name'],
		'description' => array_key_exists('description', $corpus) ? $corpus['description'] : '',
		'link' => array_key_exists('link', $corpus) ? $corpus['link'] : '',
		'stats' => $corpusData,
		'online' => $corpusOnline,
		'logo' => isset($corpus['logo']) ? $corpus['logo'] : false,
		'default' => ($corpusId === $config['defaultCorpus']),
		'metadata' => $metadata
	);
} , $config['corpora'], $ids);

$res = json_encode($corpora);
header("Content-Type: application/json");
header("Content-Length: " . strlen($res));
echo $res;

?>
