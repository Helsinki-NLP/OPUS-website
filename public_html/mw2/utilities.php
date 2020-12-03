<?php

function getVar($name, $arr, $default=false) {
	return isset($arr[$name]) && !empty($arr[$name]) ?
		$arr[$name] : $default;
}

function pluck($key, $array) {
	return array_map(function($item) use ($key) {
		return $item[$key];
	}, $array);
}

function flatten($arg) {
	return is_array($arg) ? array_reduce($arg, function ($c, $a) { return array_merge($c, flatten($a)); },[]) : [$arg];
}

function getOppositeCase($str) {
	$chr = mb_substr($str, 0, 1, "UTF-8");
	$lower = mb_strtolower($chr, "UTF-8");
	if ($lower != $chr) {
		return $lower . mb_substr($str, 1, NULL, "UTF-8");
	}
	else {
		return mb_strtoupper($chr, "UTF-8") . mb_substr($str, 1, NULL, "UTF-8");
	}
}

function safePgFetchAll($res) {
	// like pg_fetch_all
	// but returns an empty array instead of FALSE if there's an error

	$rows = pg_fetch_all($res);

	if (!$rows) {
		return array();
	}
	else {
		return $rows;
	}
}

if (!function_exists('preg_replace_callback_array')) {
	// from http://php.net/manual/de/function.preg-replace-callback-array.php#118563
	function preg_replace_callback_array(array $patterns_and_callbacks, $subject, $limit=-1, &$count=NULL) {
			$count = 0;
			foreach ($patterns_and_callbacks as $pattern => &$callback) {
					$subject = preg_replace_callback($pattern, $callback, $subject, $limit, $partial_count);
					$count += $partial_count;
			}
			return preg_last_error() == PREG_NO_ERROR ? $subject : NULL;
	}
}

?>
