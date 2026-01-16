<?php

require('../config.php');
require('../function_admin.php');

ouverture();

$action       = isset($_POST['action'])       ? $_POST['action']       : NULL;
$recordsArray = isset($_POST['recordsArray']) ? $_POST['recordsArray'] : NULL;

if ($action == 'update')
{
	$NBR = 1;

	foreach ($recordsArray as $classeID)
	{
		$REQ = @mysql_query('UPDATE phpl_classe SET rang='.$NBR.' WHERE id='.$classeID);

		$NBR = $NBR + 1;

		if ($REQ)
		{
			$EFFECT = 1;
			$TYPE   = 'highlight';
			$ICON   = 'check';
			$TEXT   = ADMIN_CLASSE_2.' [ '.$classeID.' ]';
		}
		else
		{
			$EFFECT = 0;
			$TYPE   = 'error';
			$ICON   = 'alert';
			$TEXT   = GestErreur('Erreur', $REQ);
		}
	}

	echo InfoReqSql('InfMoveClass', $EFFECT, $TYPE, $ICON, utf8_encode($TEXT));
}

?>