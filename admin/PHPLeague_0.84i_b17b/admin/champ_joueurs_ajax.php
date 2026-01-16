<?php

$STRING = isset($_REQUEST['term']) ? $_REQUEST['term'] : NULL;

require('../config.php');
require('../function_admin.php');

if ($STRING)
{
	if (strlen($STRING) > 0)
	{
		if (!function_exists('json_encode') OR version_compare(PHP_VERSION, '5.2.0', '<'))
		{
			include('./scripts/json.php');

			$JSON = new Services_JSON();
		}

		ouverture();

		mysql_query("SET NAMES 'utf8'");

		$REQ = mysql_query('SELECT id, nom, prenom FROM phpl_joueurs WHERE nom LIKE "%'.$STRING.'%"
							  UNION
							  SELECT id, nom, prenom FROM phpl_joueurs WHERE prenom LIKE "%'.$STRING.'%"
							  ORDER BY nom ASC, prenom ASC
							  LIMIT 0, 10');
		if ($REQ)
		{
			$RETURN_ARRAY = array();

			while ($ROW = mysql_fetch_array($REQ, MYSQL_ASSOC))
			{
				$ROW_ARRAY['id']    = $ROW['id'];
				$ROW_ARRAY['value'] = trim($ROW['nom'].' '.$ROW['prenom']);

				array_push($RETURN_ARRAY, $ROW_ARRAY);
			}

			if (!function_exists('json_encode') OR version_compare(PHP_VERSION, '5.2.0', '<'))
			{
				echo $JSON->encode($RETURN_ARRAY);
			}
			else
			{
				echo json_encode($RETURN_ARRAY);
			}
		}
		else
		{
			echo 'ERREUR';
		}
	}

	mysql_free_result($REQ);
}

?>