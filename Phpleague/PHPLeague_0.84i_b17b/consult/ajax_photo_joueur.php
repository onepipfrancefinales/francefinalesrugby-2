<?php

$id_joueur = isset($_REQUEST['id_joueur']) ? $_REQUEST['id_joueur'] : NULL;

if (!empty($id_joueur))
{
	require('../config.php') ;
	require('../function_consult.php');

	ouverture();

	$REQ = mysql_query('SELECT '.TBL_JOUEURS.'.photo
						FROM '.TBL_CLUBS.', '.TBL_JOUEURS.', '.TBL_EFFECTIF.', '.TBL_EQUIPES.'
						WHERE '.TBL_EFFECTIF.'.id_equipe='.TBL_EQUIPES.'.id
						AND '.TBL_EFFECTIF.'.id_joueur='.TBL_JOUEURS.'.id
						AND '.TBL_EQUIPES.'.id_club='.TBL_CLUBS.'.id
						AND '.TBL_JOUEURS.'.id='.$id_joueur);
	$ROW = mysql_fetch_array($REQ);

	if (!empty($ROW['photo']) AND file_exists('../'.REP_IMG_JOUEUR.$ROW['photo']))
	{
		echo Image('../'.REP_IMG_JOUEUR, $ROW['photo'], '', '', '');
	}
	else
	{
		echo Image('../'.REP_IMG_JOUEUR, IMG_NO_JOUEUR, '', '', '');
	}

	mysql_free_result($REQ);

	mysql_close();
}

?>