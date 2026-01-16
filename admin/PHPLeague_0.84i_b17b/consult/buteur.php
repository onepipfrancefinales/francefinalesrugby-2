<?php

$champ    = isset($_REQUEST['champ'])    ? $_REQUEST['champ']    : NULL;
$gr_champ = isset($_REQUEST['gr_champ']) ? $_REQUEST['gr_champ'] : NULL;
$complet  = isset($_REQUEST['complet'])  ? $_REQUEST['complet']  : NULL;
$debut    = isset($_REQUEST['debut'])    ? $_REQUEST['debut']    : NULL;
$fin      = isset($_REQUEST['fin'])      ? $_REQUEST['fin']      : NULL;
$type     = isset($_REQUEST['type'])     ? $_REQUEST['type']     : NULL;
$equipe   = isset($_REQUEST['equipe'])   ? $_REQUEST['equipe']   : NULL;

define('MOD', 'consult');

require('../config.php') ;

if ($ACT_BUTEUR == 1)
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
		<h1>'.FormatText(CONSULT_BUTEUR).'</h1>
	</div>
	</div>'."\n\n";
	}
	else
	{
		echo '	<h1>'.FormatText(CONSULT_BUTEUR).'</h1>'."\n\n";
	}

	if (!isset($_REQUEST['gr_champ']) AND !isset($_REQUEST['champ']))
	{
		demande_champ($champ);
	}

	if (isset($_REQUEST['champ']) OR isset($_REQUEST['gr_champ']) OR isset($_REQUEST['equipe']))
	{
		demande_champ($champ);

		$GENERAL   = FormatText(GENERAL);
		$DOMICILE  = FormatText(DOMICILE);
		$EXTERIEUR = FormatText(EXTERIEUR);
		$SELECTED  = ' selected="selected"';

		if (!isset($type)) { $type = $GENERAL; }

		if (!isset($gr_champ))
		{
			if (!isset($debut)) { $debut = 1; }
			if (!isset($fin))   { $fin   = nb_journees($champ); }

			if ($type == $GENERAL)   { $SEL01 = $SELECTED; } else { $SEL01 = ''; }
			if ($type == $DOMICILE)  { $SEL02 = $SELECTED; } else { $SEL02 = ''; }
			if ($type == $EXTERIEUR) { $SEL03 = $SELECTED; } else { $SEL03 = ''; }

			// Affiche le nombre de journées => DEBUT
			$D = 1;
			$OPT_NBR_JOUR_D = '';

			while ($D <= nb_journees($champ))
			{
				if ($D == $debut) { $SEL = $SELECTED; } else { $SEL = ''; }

				$OPT_NBR_JOUR_D.= '				<option value="'.$D.'"'.$SEL.'>'.$D.'</option>'."\n";

				$D++;
			}

			// Affiche le nombre de journées => FIN
			$F = 1;
			$OPT_NBR_JOUR_F = '';

			while ($F <= nb_journees($champ))
			{
				if ($F == $fin) { $SEL = $SELECTED; } else { $SEL = ''; }

				$OPT_NBR_JOUR_F.= '				<option value="'.$F.'"'.$SEL.'>'.$F.'</option>'."\n";

				$F++;
			}

			// Affiche le nombre de journées => FIN
			$CLUB = '				<option value="">&nbsp;</option>'."\n";

			$REQ1 = mysql_query('SELECT phpl_clubs.nom, phpl_equipes.id
								 FROM phpl_equipes, phpl_clubs
								 WHERE phpl_equipes.id_champ='.$champ.'
								 AND phpl_clubs.id=phpl_equipes.id_club');

			while ($ROW1 = mysql_fetch_array($REQ1))
			{
				if ($ROW1[1] == $equipe) { $SEL = $SELECTED; } else { $SEL = ''; }

				$CLUB.= '				<option value="'.$ROW1[1].'"'.$SEL.'>'.$ROW1[0].'</option>'."\n";
			}
			mysql_free_result($REQ1);

?>
	<form method="post" action="" class="TblCenter TxtCenter">
		<p>
			<label for="type"><?php echo FormatText(CONSULT_BUTEUR_MSG2); ?></label>
			<select name="type" id="type">
				<option value="<?php echo $GENERAL; ?>"<?php echo $SEL01; ?>><?php echo $GENERAL; ?></option>
				<option value="<?php echo $DOMICILE; ?>"<?php echo $SEL02; ?>><?php echo $DOMICILE; ?></option>
				<option value="<?php echo $EXTERIEUR; ?>"<?php echo $SEL03; ?>><?php echo $EXTERIEUR; ?></option>
			</select>
			<label for="debut"><?php echo FormatText(CONSULT_CLMNT_MSG2); ?></label>
			<select name="debut" id="debut">
				<?php echo $OPT_NBR_JOUR_D; ?>
			</select>
			<label for="fin"><?php echo FormatText(CONSULT_CLMNT_MSG3); ?></label>
			<select name="fin" id="fin">
				<?php echo $OPT_NBR_JOUR_F; ?>
			</select>
			<label for="equipe"><?php echo FormatText(ADMIN_JOUEURS_3); ?></label>
			<select name="equipe" id="equipe">
				<?php echo $CLUB; ?>
			</select>
			<input type="hidden" name="champ" value="<?php echo $champ; ?>" />
			<input type="hidden" name="complet" value="<?php echo $complet; ?>" />
			<input type="submit" value="<?php echo FormatText(ENVOI); ?>" />
		</p>
	</form>

<?php

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
			$x         = 0;
			$tab_query = '';

			$query = 'SELECT phpl_divisions.nom, phpl_saisons.annee, (phpl_saisons.annee)+1
					FROM phpl_championnats, phpl_divisions, phpl_saisons
					WHERE phpl_championnats.id IN (';

			$query2 = 'SELECT id_champ, libelle FROM groupe_championnat WHERE id_groupe='.$gr_champ;
			$result2 = mysql_query($query2);

			while ($row2 = mysql_fetch_array($result2))
			{
				$x++;

				if ($x != 1) { $tab_query = $tab_query.','; }

				$tab_query = $tab_query."'$row2[0]'";
				$nom_gr    = $row2[1];
		}

		echo '<h3>'.FormatText(CONSULT_BUTEUR_MSG3).' '.$nom_gr.'</h3>'.FormatText(CONSULT_BUTEUR_MSG4);

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
		// SELECTION DES PARAMETRES
		$result = mysql_query('SELECT fiches_clubs, phpl_clubs.nom, id_equipe_fetiche, phpl_clubs.id
                               FROM phpl_parametres, phpl_clubs, phpl_equipes
                               WHERE phpl_parametres.id_champ='.$champ.'
                               AND phpl_equipes.id=id_equipe_fetiche
                               AND phpl_clubs.id=phpl_equipes.id_club');

         $row=mysql_fetch_array($result);

	$EquipeFetiche=stripslashes($row['nom']);
	$id_club_fetiche=$row['id'];
	$id_equipe_fetiche=$row['id_equipe_fetiche'];
	}
else
	{
	// SELECTION DES PARAMETRES
	$result=(mysql_query("SELECT * FROM phpl_parametres WHERE id_champ IN ($tab_query)"));


        $x=0;
	$tab_id_equipe_fetiche = '';

	while ($row=mysql_fetch_array($result))
	       {
		$x++;
		if ($x!=1) $tab_id_equipe_fetiche = $tab_id_equipe_fetiche . ",";
		$tab_id_equipe_fetiche=$tab_id_equipe_fetiche . "'$row[id_equipe_fetiche]'" ;
	       }


	$result=(mysql_query("SELECT id_club FROM phpl_equipes WHERE id IN ($tab_id_equipe_fetiche)"));
        $x=0;
	$id_club_fetiche = '';

		while ($row = mysql_fetch_array($result))
		{
			$x++;
			if ($x!=1) $id_club_fetiche = $id_club_fetiche.',';
			$id_club_fetiche = $id_club_fetiche.$row['id_club'];
		}
	}

	if (isset($gr_champ))
	{
		if (!isset($type))  { $type  = $GENERAL;}
		if (!isset($debut)) { $debut = 1;}
		if (!isset($fin))
		{
			$array = explode(',', $tab_query);
			$fin   = 1;

			for ($i=0; $i<sizeof($array); $i++)
			{
				$nb = nb_journees(ereg_replace("'", '', $array[$i]));

				if ($nb > $fin) { $fin = $nb ; }
			}
		}
	}

	switch($type)
	{
		// Classement GENERAL
		case $GENERAL;
		{
			$legende = CONSULT_BUTEUR_TITRE_1.' : '.GENERAL.'<br />'.CONSULT_CLMNT_MSG2.' '.$debut.' '.CONSULT_CLMNT_MSG3.' '.$fin;

			$REQ = 'SELECT SUM(phpl_buteurs.buts) AS Total, phpl_joueurs.nom AS NomJoueur, phpl_joueurs.prenom AS PrenomJoueur, phpl_clubs.nom, phpl_clubs.id AS idClub, phpl_joueurs.id AS id_joueur
					FROM phpl_joueurs, phpl_buteurs, phpl_matchs, phpl_journees, phpl_equipes, phpl_clubs, phpl_effectif
					WHERE phpl_joueurs.id = phpl_effectif.id_joueur
					AND phpl_equipes.id = phpl_effectif.id_equipe
					AND phpl_buteurs.id_match = phpl_matchs.id
					AND phpl_journees.id = phpl_matchs.id_journee
					AND phpl_equipes.id_club = phpl_clubs.id
					AND phpl_journees.numero >= '.$debut.'
					AND phpl_journees.numero <= '.$fin.'
					AND phpl_effectif.id = phpl_buteurs.id_effectif
					AND phpl_effectif.id_equipe = phpl_equipes.id';

			if (!isset($gr_champ))
			{
				$REQ = $REQ.' AND phpl_journees.id_champ = '.$champ;
			}
			else
			{
				$REQ = $REQ.' AND phpl_journees.id_champ IN '.$tab_query;
			}

			if (isset($equipe) AND !empty($equipe))
			{
				$REQ = $REQ.' AND phpl_equipes.id = '.$equipe;
			}

			$REQ = $REQ.' AND (phpl_matchs.id_equipe_dom = phpl_equipes.id OR phpl_matchs.id_equipe_ext = phpl_equipes.id)
					GROUP BY phpl_joueurs.nom, phpl_joueurs.prenom, phpl_joueurs.photo, phpl_joueurs.date_naissance, phpl_joueurs.position_terrain
					ORDER BY Total DESC, NomJoueur ASC';

			if (!isset($complet) OR !($complet == 1)) { $REQ = $REQ.' LIMIT 0, 10'; }

			Buteur($legende, $REQ, $type, $id_club_fetiche, $champ, $debut, $fin, $equipe, $complet);
		}
		break;

		// Classement DOMICILE
		case $DOMICILE;
		{
			$legende = CONSULT_BUTEUR_TITRE_1.' : '.DOMICILE.'<br />'.CONSULT_CLMNT_MSG2.' '.$debut.' '.CONSULT_CLMNT_MSG3.' '.$fin;

			$REQ = 'SELECT SUM(phpl_buteurs.buts) AS Total, phpl_joueurs.nom AS NomJoueur, phpl_joueurs.prenom AS PrenomJoueur, phpl_clubs.nom, phpl_clubs.id AS idClub, phpl_joueurs.id AS id_joueur
					FROM phpl_joueurs, phpl_buteurs, phpl_matchs, phpl_journees, phpl_equipes, phpl_clubs, phpl_effectif
					WHERE phpl_joueurs.id = phpl_effectif.id_joueur
					AND phpl_matchs.id_equipe_dom = phpl_equipes.id
					AND phpl_clubs.id = phpl_equipes.id_club
					AND phpl_matchs.id = phpl_buteurs.id_match
					AND phpl_journees.id = phpl_matchs.id_journee
					AND phpl_equipes.id = phpl_effectif.id_equipe
					AND phpl_journees.numero >= '.$debut.'
					AND phpl_journees.numero <= '.$fin.'
					AND phpl_journees.id_champ = '.$champ.'
					AND phpl_effectif.id = phpl_buteurs.id_effectif';

			if (!$gr_champ)
			{
				$REQ = $REQ.' AND phpl_journees.id_champ = '.$champ;
			}
			else
			{
				$REQ = $REQ.' AND phpl_journees.id_champ IN ('.$tab_query.')';
			}

			if ($equipe AND !empty($equipe))
			{
				$REQ = $REQ.' AND phpl_equipes.id = '.$equipe;
			}

			$REQ = $REQ.' GROUP BY phpl_joueurs.nom, phpl_joueurs.prenom, phpl_joueurs.photo, phpl_joueurs.date_naissance, phpl_joueurs.position_terrain
					ORDER BY Total DESC, NomJoueur ASC';

			if (!isset($complet) OR !($complet == 1)) { $REQ = $REQ.' LIMIT 0, 10'; }

			Buteur($legende, $REQ, $type, $id_club_fetiche, $champ, $debut, $fin, $equipe, $complet);
		}
		break;

		// Buteur EXTERIEUR
		case $EXTERIEUR;
		{
			$legende = CONSULT_BUTEUR_TITRE_1.' : '.EXTERIEUR.'<br />'.CONSULT_CLMNT_MSG2.' '.$debut.' '.CONSULT_CLMNT_MSG3.' '.$fin;

			$REQ = 'SELECT SUM(phpl_buteurs.buts) AS Total, phpl_joueurs.nom AS NomJoueur, phpl_joueurs.prenom AS PrenomJoueur, phpl_clubs.nom, phpl_clubs.id AS idClub, phpl_joueurs.id AS id_joueur
					FROM phpl_joueurs, phpl_buteurs, phpl_matchs, phpl_journees, phpl_equipes, phpl_clubs, phpl_effectif
					WHERE phpl_joueurs.id = phpl_effectif.id_joueur
					AND phpl_matchs.id_equipe_ext = phpl_equipes.id
					AND phpl_clubs.id = phpl_equipes.id_club
					AND phpl_matchs.id = phpl_buteurs.id_match
					AND phpl_journees.id = phpl_matchs.id_journee
					AND phpl_equipes.id = phpl_effectif.id_equipe
					AND phpl_journees.numero >= '.$debut.'
					AND phpl_journees.numero <= '.$fin.'
					AND phpl_effectif.id = phpl_buteurs.id_effectif';

			if (!$gr_champ)
			{
				$REQ = $REQ.' AND phpl_journees.id_champ='.$champ;
			}
			else
			{
				$REQ = $REQ.' AND phpl_journees.id_champ IN '.$tab_query;
			}

			if ($equipe AND !empty($equipe))
			{
				$REQ = $REQ.' AND phpl_equipes.id = '.$equipe;
			}

			$REQ = $REQ.' AND phpl_journees.id_champ = '.$champ.'
					GROUP BY phpl_joueurs.nom, phpl_joueurs.prenom, phpl_joueurs.photo, phpl_joueurs.date_naissance, phpl_joueurs.position_terrain
					ORDER BY Total DESC, NomJoueur ASC';

			if (!isset($complet) OR !($complet == 1)) { $REQ = $REQ.' LIMIT 0, 10'; }

			Buteur($legende, $REQ, $type, $id_club_fetiche, $champ, $debut, $fin, $equipe, $complet);
		}
		break;
	}
}

	include('../footer.php');
}
else
{
	header('location: index.php');
}

?>