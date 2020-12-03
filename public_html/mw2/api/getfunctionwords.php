<?php

require_once('../utilities.php');
require_once('../apiutilities.php');

$tokens = json_decode(getAPIParameter('tokens'));

header("Content-Type: application/json");

$tokenData = array_map(function($s) { return pg_escape_string($s); }, array_unique($tokens));

$fwQuery = sprintf(<<<EOQ
SELECT typestr.val as typestr, sum(dist.c) as cumc, dist.is_content_word as cw FROM dist
JOIN typestr ON typestr.type_id = dist.type_id
WHERE typestr.val IN ('%s')
GROUP BY typestr.val, dist.is_content_word
ORDER BY cumc DESC
LIMIT %d
EOQ
	, implode("','", $tokenData), count($tokenData));

if (!$fwRes = executeQuery($fwQuery)) die('Query error');

$rows = safePgFetchAll($fwRes);

$fwData = array_values(array_map(function($row) { return $row['typestr']; }, array_filter($rows, function($row) { return $row['cw'] == 'f'; })));

echo json_encode($fwData);

?>
