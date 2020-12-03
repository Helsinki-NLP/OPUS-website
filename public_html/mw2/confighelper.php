<?php

$configFilePath = __DIR__ . '/config.json';

function getConfig() {
	global $configFilePath;
	static $config;

	if (!isset($config)) {
		$configFile = file_get_contents($configFilePath) or die('Cannot read config file.');
		$config = json_decode($configFile, true) or die('Config file is not valid JSON.');
	}

	return $config;
}

function getDefaultCorpusId() {
	$config = getConfig();

	return (array_key_exists('defaultCorpus', $config) && isValidCorpusId($config['defaultCorpus'])) ?
		$config['defaultCorpus']
		: array_keys($config['corpora'])[0];
}

function isValidCorpusId($corpusId) {
	return array_key_exists($corpusId, getConfig()['corpora']);
}

function getConnectionString($corpusId = NULL) {
	$corpusId = $corpusId === NULL ? getDefaultCorpusId() : $corpusId;
	$options = getConfig()['corpora'][$corpusId]['db'];

	if (!isset($options['connect_timeout'])) {
		$options['connect_timeout'] = 3;
	}

	$connString = implode(' ', array_map(function($key) use ($options) {
			return $key . '=' . $options[$key];
		},
		array_keys(array_filter($options, function($option) { return $option != NULL; }))
	));

	return $connString;
}

?>
