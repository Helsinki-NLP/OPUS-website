<?php

$debug = isset($_GET['debug']);
$lasttime = microtime(true);
function tick($str) {
	global $lasttime, $debug;

	if ($debug) {
		$newtime = microtime(TRUE);
		print_r('-- '.$str . ":\t" . number_format($newtime - $lasttime, 5) . "s\n");
		$lasttime = $newtime;
	}
}

tick('init script');

require_once('../utilities.php');
require_once('../apiutilities.php');
require_once('../sqlbuilder.php');

$query = getAPIParameter('query');
$language = getAPIParameter('lang');
$options = getAPIParameter('options');
$limit = getAPIParameter('hitlimit');


function formatQuery($str) {
	$query = str_replace(array(' > ', '> ', ' >'), '>', preg_replace('/^\s+|\s+$|\s+(?=\s)/', '', $str));
	$tokens = explode(' ', preg_replace(array('/[*>]+/'), array(' '), $query));

	return array('tokens' => $tokens, 'query' => $query);
}

tick('boot mlw2');



$limit = (is_numeric($limit) and $limit <= 100000) ? $limit : 1000;
$searchQuery = getSQLQuery(formatQuery($query), json_decode($options, true), $language, $limit);

tick('build query');

if(!$res = executeQuery($searchQuery)) die('Query error!');

tick('exec query');

$row = pg_fetch_assoc($res);

tick ('get result');

if ($debug) {
	header("Content-Type: text/plain");
	die("\n".$searchQuery);
}

header("Content-Type: application/json");

echo $row['obj'];

?>
