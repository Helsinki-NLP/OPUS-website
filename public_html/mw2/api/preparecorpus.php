<?php

require_once('../utilities.php');
require_once('../apiutilities.php');

header("Content-Type: application/json");

$fwQuery = 'SELECT keep_me_warm() as s';

if (!$fwRes = executeQuery($fwQuery)) die('Query error');

$rows = safePgFetchAll($fwRes);

echo json_encode(array(
	'success' => true,
	's' => $rows[0]['s']
));

?>
