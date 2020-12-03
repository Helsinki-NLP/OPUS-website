<?php

require_once('../utilities.php');
require_once('../apiutilities.php');

$tokens = json_decode(getAPIParameter('tokens'));
$lang = getAPIParameter('lang');
$debug = isset($_GET['debug']);

header("Content-Type: application/json");

$searchSpace = array_map(function($s) { return pg_escape_string($s); }, array_slice($tokens, 0, 7));

$lemmaQuery = sprintf('SELECT lookup_types(ARRAY[\'%s\']) as paths', implode('\',\'', $searchSpace));

if ($debug) {
	header("Content-Type: text/plain");
	die($lemmaQuery);
}

if (!$lemmaRes = executeQuery($lemmaQuery)) die('Query error');

$paths = pg_fetch_assoc($lemmaRes)['paths'];

$langPaths = $paths == NULL ? array() : array_filter(json_decode($paths, true), function($path) use ($lang) {
	return ($path['lang'] == $lang);
});

if (!count($langPaths)) {
	die('Could not find lemmas for tokens in chosen language.');

}

$highestScorePath = array_reduce($langPaths, function($highest, $path) {
	return ($highest['score'] < $path['score']) ? $path : $highest;
}, $langPaths[0]);

$typesLemmaMap = array_combine($highestScorePath['types'], array_map(function($lemma) { return array('lemma' => $lemma); }, $highestScorePath['lemmas']));

echo json_encode($typesLemmaMap);

?>
