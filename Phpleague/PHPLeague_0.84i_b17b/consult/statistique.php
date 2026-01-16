<?php

$champ    = isset($_REQUEST['champ'])    ? $_REQUEST['champ']    : NULL;
$gr_champ = isset($_REQUEST['gr_champ']) ? $_REQUEST['gr_champ'] : NULL;
$complet  = isset($_REQUEST['complet'])  ? $_REQUEST['complet']  : NULL;
$debut    = isset($_REQUEST['debut'])    ? $_REQUEST['debut']    : NULL;
$fin      = isset($_REQUEST['fin'])      ? $_REQUEST['fin']      : NULL;
$type     = isset($_REQUEST['type'])     ? $_REQUEST['type']     : NULL;
$equipe   = isset($_REQUEST['equipe'])   ? $_REQUEST['equipe']   : NULL;

require('../config.php') ;

if ($ACT_STAT == 1)
{
	require('../function_consult.php');
	include('../header.php');

	ouverture();

	if ($AGENT == 'iphone')
	{
		echo '	<div id="topbar">
		<div id="leftnav">
			<a href="index.php"><img src="../themes/iphone/home.png" alt="home" /></a>
		</div>
		<div id="title">
			<h1>'.FormatText('Statistiques').'</h1>
		</div>
	</div>'."\n\n";
	}
	else
	{
		echo '	<h1>'.FormatText('Statistiques').'</h1>'."\n\n";
	}

	if (!isset($_REQUEST['gr_champ']) AND !isset($_REQUEST['champ']))
	{
		demande_champ($champ);
	}

	if (isset($_REQUEST['champ']) OR isset($_REQUEST['gr_champ']))
	{
		demande_champ($champ);

		if (!isset($gr_champ))
		{
			if (!isset($debut)) { $debut = 1; }
			if (!isset($fin))   { $fin   = nb_journees($champ); }
		}

	if (!isset($gr_champ))
	{
		$REQ = mysql_query('SELECT phpl_divisions.nom, phpl_saisons.annee, (phpl_saisons.annee)+1
							FROM phpl_championnats, phpl_divisions, phpl_saisons
							WHERE phpl_championnats.id='.$champ.'
							AND phpl_divisions.id=phpl_championnats.id_division 
							AND phpl_saisons.id=phpl_championnats.id_saison');
		$ROW = mysql_fetch_array($REQ);
			   mysql_free_result($REQ);

		echo '<h4>'.stripslashes($ROW[0]).' '.$ROW[1].'/'.$ROW[2].'</h4>'."\n\n";
	}
	else
	{
		$x = 0;
		$tab_query = '';

		$query = mysql_query('SELECT phpl_divisions.nom, phpl_saisons.annee, (phpl_saisons.annee)+1
							FROM phpl_championnats, phpl_divisions, phpl_saisons
							WHERE phpl_championnats.id IN (');

		$REQ2 = mysql_query('SELECT id_champ, libelle FROM groupe_championnat WHERE id_groupe='.$gr_champ);

		while ($ROW2 = mysql_fetch_array($REQ2)) 
		{
			$x++;

			if ($x != 1) { $tab_query = $tab_query.','; }

			$tab_query = $tab_query.$ROW2[0];
			$nom_gr    = $ROW2[1];
		}

		echo '<h3>'.CONSULT_BUTEUR_MSG3.' '.$nom_gr.'</h3>'.CONSULT_BUTEUR_MSG4;

		$query = $query.$tab_query.')
				AND phpl_divisions.id=phpl_championnats.id_division
				AND phpl_saisons.id=phpl_championnats.id_saison';

		$result = mysql_query($query); 

		while ($row = mysql_fetch_array($result)) 
		{
			echo '<h4>'.stripslashes($row[0]).' '.$row[1].'/'.$row[2].'</h4>'."\n\n";
		}
	}

	if (!isset($gr_champ))
	{
		$REQ = mysql_query('SELECT phpl_parametres.fiches_clubs, phpl_clubs.nom, id_equipe_fetiche, phpl_clubs.id AS IdClub
							FROM phpl_parametres, phpl_clubs, phpl_equipes
							WHERE phpl_parametres.id_champ='.$champ.'
							AND phpl_equipes.id=id_equipe_fetiche
							AND phpl_clubs.id=phpl_equipes.id_club');

		$ROW = mysql_fetch_array($REQ);

		$EquipeFetiche     = stripslashes($ROW['nom']);
		$id_club_fetiche   = $ROW['IdClub'];
		$id_equipe_fetiche = $ROW['id_equipe_fetiche'];
	}
	else
	{
        $x = 0;
		$tab_id_equipe_fetiche = '';
		$id_club_fetiche = '';

		$REQ1 = mysql_query('SELECT id_equipe_fetiche FROM phpl_parametres WHERE id_champ IN ('.$tab_query.')');

		while ($ROW1 = mysql_fetch_array($REQ1))
		{
			$x++;

			if ($x != 1) { $tab_id_equipe_fetiche = $tab_id_equipe_fetiche.','; }

			$tab_id_equipe_fetiche = $tab_id_equipe_fetiche.$ROW1['id_equipe_fetiche'];
		}

		$REQ2 = mysql_query('SELECT id_club FROM phpl_equipes WHERE id IN ('.$tab_id_equipe_fetiche.')');

		while ($ROW2 = mysql_fetch_array($REQ2))
		{
			$x++;

			if ($x != 1) { $id_club_fetiche = $id_club_fetiche.','; }

			$id_club_fetiche = $id_club_fetiche.$ROW2['id_club'];
		}
	}

	if (isset($gr_champ))
	{
		if (!isset($debut)) { $debut = 1;}
		if (!isset($fin))
		{
			$array = explode(',', $tab_query);
			$fin   = 1;

			for ($i=0; $i<sizeof($array); $i++)
			{
				$nb = nb_journees(ereg_replace("'", '', $array[$i]));

				if ($nb > $fin) { $fin = $nb; }
			}
		}
	}

		$TYPE = FormatText(GENERAL);

		//////////////////////////////////////////////
		// Buteur
		//////////////////////////////////////////////
		$LEG1 = CONSULT_BUTEUR_TITRE_1;
		$REQ1 = 'SELECT SUM(phpl_buteurs.buts) AS Total, phpl_joueurs.nom AS NomJoueur, phpl_joueurs.prenom AS PrenomJoueur, phpl_clubs.nom, phpl_clubs.id AS idClub, phpl_joueurs.id AS id_joueur
				FROM phpl_joueurs, phpl_buteurs, phpl_matchs, phpl_journees, phpl_equipes, phpl_clubs, phpl_effectif
				WHERE phpl_joueurs.id=phpl_effectif.id_joueur
				AND phpl_equipes.id=phpl_effectif.id_equipe
				AND phpl_buteurs.id_match=phpl_matchs.id
				AND phpl_journees.id=phpl_matchs.id_journee
				AND phpl_equipes.id_club=phpl_clubs.id
				AND phpl_journees.numero>='.$debut.'
				AND phpl_journees.numero<='.$fin.'
				AND phpl_effectif.id=phpl_buteurs.id_effectif
				AND phpl_effectif.id_equipe=phpl_equipes.id
				AND phpl_journees.id_champ='.$champ.'
				AND (phpl_matchs.id_equipe_dom=phpl_equipes.id OR phpl_matchs.id_equipe_ext=phpl_equipes.id)
				GROUP BY phpl_joueurs.nom, phpl_joueurs.prenom, phpl_joueurs.position_terrain
				ORDER BY Total DESC, phpl_joueurs.nom ASC, phpl_joueurs.prenom ASC
				LIMIT 0, 10';

		Buteur($LEG1, $REQ1, $TYPE, $id_club_fetiche, $champ, $debut, $fin, $equipe, $complet);


		//////////////////////////////////////////////
		// Titulaire
		//////////////////////////////////////////////
		$LEG2 = CONSULT_COMPO_TITRE_1;
		$REQ2 = 'SELECT SUM(phpl_compo.matchs) AS Total, SUM(phpl_compo.tps) AS Totaltps, phpl_joueurs.nom AS NomJoueur, phpl_joueurs.prenom AS PrenomJoueur, phpl_clubs.nom, phpl_clubs.id AS idClub, phpl_joueurs.id AS id_joueur
				FROM phpl_joueurs, phpl_compo, phpl_matchs, phpl_journees, phpl_equipes, phpl_clubs, phpl_effectif
				WHERE phpl_joueurs.id=phpl_effectif.id_joueur
				AND phpl_equipes.id=phpl_effectif.id_equipe
				AND phpl_compo.id_match=phpl_matchs.id
				AND phpl_journees.id=phpl_matchs.id_journee
				AND phpl_equipes.id_club=phpl_clubs.id
				AND phpl_journees.numero>='.$debut.'
				AND phpl_journees.numero<='.$fin.'
				AND phpl_effectif.id=phpl_compo.id_effectif
				AND phpl_effectif.id_equipe=phpl_equipes.id
				AND phpl_journees.id_champ='.$champ.'
				AND (phpl_matchs.id_equipe_dom=phpl_equipes.id OR phpl_matchs.id_equipe_ext=phpl_equipes.id)
				GROUP BY phpl_joueurs.nom, phpl_joueurs.prenom, phpl_joueurs.position_terrain
				ORDER BY Total DESC, Totaltps DESC, phpl_joueurs.nom ASC, phpl_joueurs.prenom ASC
				LIMIT 0, 10';

		compo($LEG2, $REQ2, $TYPE, $id_club_fetiche, $champ, $debut, $fin, $equipe, $complet);


		//////////////////////////////////////////////
		// Remplacement
		//////////////////////////////////////////////
		$LEG3 = CONSULT_COMPO2_TITRE_1;
		$REQ3 = 'SELECT SUM(phpl_compo.remp) AS Total, phpl_joueurs.nom AS NomJoueur, phpl_joueurs.prenom AS PrenomJoueur, phpl_clubs.nom, phpl_clubs.id AS idClub, phpl_joueurs.id AS id_joueur
				FROM phpl_joueurs, phpl_compo, phpl_matchs, phpl_journees, phpl_equipes, phpl_clubs, phpl_effectif
				WHERE phpl_joueurs.id=phpl_effectif.id_joueur
				AND phpl_equipes.id=phpl_effectif.id_equipe
				AND phpl_compo.id_match=phpl_matchs.id
				AND phpl_journees.id=phpl_matchs.id_journee
				AND phpl_equipes.id_club=phpl_clubs.id
				AND phpl_journees.numero>='.$debut.'
				AND phpl_journees.numero<='.$fin.'
				AND phpl_effectif.id=phpl_compo.id_effectif
				AND phpl_effectif.id_equipe=phpl_equipes.id
				AND	phpl_compo.remp="1"
				AND phpl_journees.id_champ='.$champ.'
				AND (phpl_matchs.id_equipe_dom=phpl_equipes.id OR phpl_matchs.id_equipe_ext=phpl_equipes.id)
				GROUP BY phpl_joueurs.nom, phpl_joueurs.prenom, phpl_joueurs.position_terrain
				ORDER BY Total DESC, phpl_joueurs.nom ASC, phpl_joueurs.prenom ASC
				LIMIT 0, 10';

		compo2($LEG3, $REQ3, $TYPE, $id_club_fetiche, $champ, $debut, $fin, $equipe, $complet);


		//////////////////////////////////////////////
		// Cartons jaunes
		//////////////////////////////////////////////
		$LEG4 = CONSULT_CJ_TITRE_1;
		$REQ4 = 'SELECT SUM(phpl_compoCJ.CJ) AS Total, '.TBL_JOUEURS.'.nom AS NomJoueur, '.TBL_JOUEURS.'.prenom AS PrenomJoueur, phpl_clubs.nom, phpl_clubs.id AS idClub, '.TBL_JOUEURS.'.id AS id_joueur
				FROM '.TBL_JOUEURS.', phpl_compoCJ, phpl_matchs, phpl_journees, phpl_equipes, phpl_clubs, phpl_effectif
				WHERE '.TBL_JOUEURS.'.id=phpl_effectif.id_joueur
				AND phpl_equipes.id=phpl_effectif.id_equipe
				AND phpl_compoCJ.id_match=phpl_matchs.id
				AND phpl_journees.id=phpl_matchs.id_journee
				AND phpl_equipes.id_club=phpl_clubs.id
				AND phpl_journees.numero>='.$debut.'
				AND phpl_journees.numero<='.$fin.'
				AND phpl_effectif.id=phpl_compoCJ.id_effectif
				AND phpl_effectif.id_equipe=phpl_equipes.id
				AND phpl_journees.id_champ='.$champ.'
				AND (phpl_matchs.id_equipe_dom=phpl_equipes.id OR phpl_matchs.id_equipe_ext=phpl_equipes.id)
				GROUP BY '.TBL_JOUEURS.'.nom, '.TBL_JOUEURS.'.prenom, '.TBL_JOUEURS.'.position_terrain
				ORDER BY Total DESC, '.TBL_JOUEURS.'.nom ASC, '.TBL_JOUEURS.'.prenom ASC
				LIMIT 0, 10';

		CJ($LEG4, $REQ4, $TYPE, $id_club_fetiche, $champ, $debut, $fin, $equipe, $complet);


		//////////////////////////////////////////////
		// Cartons rouges
		//////////////////////////////////////////////
		$LEG5 = CONSULT_CR_TITRE_1;
		$REQ5 = 'SELECT SUM(phpl_compoCR.CR) AS Total, '.TBL_JOUEURS.'.nom AS NomJoueur, '.TBL_JOUEURS.'.prenom AS PrenomJoueur, phpl_clubs.nom, phpl_clubs.id AS idClub, '.TBL_JOUEURS.'.id AS id_joueur
				FROM '.TBL_JOUEURS.', phpl_compoCR, phpl_matchs, phpl_journees, phpl_equipes, phpl_clubs, phpl_effectif
				WHERE '.TBL_JOUEURS.'.id=phpl_effectif.id_joueur
				AND phpl_equipes.id=phpl_effectif.id_equipe
				AND phpl_compoCR.id_match=phpl_matchs.id
				AND phpl_journees.id=phpl_matchs.id_journee
				AND phpl_equipes.id_club=phpl_clubs.id
				AND phpl_journees.numero>='.$debut.'
				AND phpl_journees.numero<='.$fin.'
				AND phpl_effectif.id=phpl_compoCR.id_effectif
				AND phpl_effectif.id_equipe=phpl_equipes.id
				AND phpl_journees.id_champ='.$champ.'
				AND (phpl_matchs.id_equipe_dom=phpl_equipes.id OR phpl_matchs.id_equipe_ext=phpl_equipes.id)
				GROUP BY '.TBL_JOUEURS.'.nom, '.TBL_JOUEURS.'.prenom, '.TBL_JOUEURS.'.position_terrain
				ORDER BY Total DESC, '.TBL_JOUEURS.'.nom ASC, '.TBL_JOUEURS.'.prenom ASC
				LIMIT 0, 10';

		CR($LEG5, $REQ5, $TYPE, $id_club_fetiche, $champ, $debut, $fin, $equipe, $complet);


		//////////////////////////////////////////////
		// Positions
		//////////////////////////////////////////////
		echo '
		<h5>'.FormatText('Total de position').'</h5>
		<table class="TblCenter Large400">
			<thead>
				<tr>
					<th class="TxtLeft">'.FormatText('Position').'</th>
					<th class="TxtLeft">'.FormatText('Total').'</th>
				</tr>
			</thead>
			<tbody>'."\n";

		$REQ6 = mysql_query('SELECT DISTINCT position_terrain, COUNT(position_terrain)
							FROM '.TBL_JOUEURS.'
							GROUP BY position_terrain
							ORDER BY position_terrain ASC');

		while ($ROW6 = mysql_fetch_array($REQ6))
		{
			if (!empty($ROW6[0]))
			{
				echo '
				<tr>
					<td>'.stripslashes($ROW6[0]).'</td>
					<td>'.$ROW6[1].'</td>
				</tr>'."\n";
			}
		}
		mysql_free_result($REQ6);

		echo '			</tbody>
			<tfoot>
				<tr>
					<td colspan="2">&nbsp;</td>
				</tr>
			</tfoot>
		</table>'."\n\n";
	}

	include('../footer.php');
}
else
{
	header('location: index.php');
}

?>