<?php

require_once('utilities.php');
require_once('confighelper.php');


function getAPIParameter($name) {
	$var = getVar($name, $_REQUEST);

	if (!$var) {
		http_response_code(400);
		die('Missing parameter ' . $var);
	}

	return $var;
}

function executeQuery($query, $params = array(), $corpusId = NULL) {
	// if no $corpusId is given, the query parameter 'corpus' is searched
	// if no valid query parameter 'corpus' exists, the default corpus is used
	$config = getConfig();

	if ($corpusId === NULL || !isValidCorpusId($corpusId)) {
		$queryCorpusId = getVar('corpus', $_REQUEST);

		if ($queryCorpusId) {
			if (!isValidCorpusId($queryCorpusId)) {
				die('No known corpus identified by ' . $queryCorpusId);
			}
			else {
				$corpusId = $queryCorpusId;
			}
		}
		else {
			$corpusId = getDefaultCorpusId();
		}
	}

	$corpusConfig = $config['corpora'][$corpusId];
	$dbConn = @pg_connect(getConnectionString($corpusId));

	if (!$dbConn) {
		return false;
	}

	pg_query($dbConn, 'BEGIN');
	
	if (isset($corpusConfig['dbschema'])) {
		pg_query($dbConn, 'SET search_path TO ' . $corpusConfig['dbschema']);
	}

	if (!$res = pg_query_params($dbConn, $query, $params)) {
		die("No result from query: " . $query);
	}

	pg_query($dbConn, 'COMMIT');

	return $res;
}

?>
