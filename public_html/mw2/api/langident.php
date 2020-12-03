<?php

require_once('../utilities.php');
require_once('../apiutilities.php');

$tokens = json_decode(getAPIParameter('tokens'));
$debug = isset($_GET['debug']);

header("Content-Type: application/json");

$tokenData = array_map(function($s) { return pg_escape_string($s); }, array_slice($tokens, 0, 7));

$langQuery = sprintf('SELECT lookup_types(ARRAY[\'%s\']) as paths', implode('\',\'', $tokenData));

if ($debug) {
	header("Content-Type: text/plain");
	die($langQuery);
}

if (!$langRes = executeQuery($langQuery)) die('Query error');

$paths = json_decode(pg_fetch_assoc($langRes)['paths'], true);

if (!count($paths)) {
	die('Language could not be identified.');
}

$highestScorePath = array_reduce($paths, function($highest, $path) {
	return ($highest['score'] < $path['score']) ? $path : $highest;
}, $paths[0]);

echo json_encode(array('lang' => $highestScorePath['lang']));

?>
