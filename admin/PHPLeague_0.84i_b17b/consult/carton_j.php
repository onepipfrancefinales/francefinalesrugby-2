<?php

$champ    = isset($_REQUEST['champ'])    ? $_REQUEST['champ']    : NULL;
$gr_champ = isset($_REQUEST['gr_champ']) ? $_REQUEST['gr_champ'] : NULL;
$equipe   = isset($_REQUEST['equipe'])   ? $_REQUEST['equipe']   : NULL;
$complet  = isset($_REQUEST['complet'])  ? $_REQUEST['complet']  : NULL;
$debut    = isset($_REQUEST['debut'])    ? $_REQUEST['debut']    : NULL;
$fin      = isset($_REQUEST['fin'])      ? $_REQUEST['fin']      : NULL;
$type     = isset($_REQUEST['type'])     ? $_REQUEST['type']     : NULL;

define('MOD', 'consult');

require('../config.php') ;

if ($ACT_CJ == 1)
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
		<h1>'.FormatText(CJ).'</h1>
	</div>
	</div>'."\n\n";
	}
	else
	{
		echo '	<h1>'.FormatText(CJ).'</h1>'."\n\n";
	}

	if (!isset($_REQUEST['gr_champ']) AND !isset($_REQUEST['champ']))
	{
		demande_champ($champ);
	}

	if (isset($_REQUEST['champ']) or isset($_REQUEST['gr_champ']) or isset($_REQUEST['equipe']))
	{
		demande_champ($champ);

		$GENERAL     = FormatText(GENERAL);
		$DOMICILE    = FormatText(DOMICILE);
		$EXTERIEUR   = FormatText(EXTERIEUR);
		$SELECTED    = ' selected="selected"';

		if (!isset($type)) { $type = $GENERAL; }

		if ($type == $GENERAL)   { $SEL01 = $SELECTED; } else { $SEL01 = ''; }
		if ($type == $DOMICILE)  { $SEL02 = $SELECTED; } else { $SEL02 = ''; }
		if ($type == $EXTERIEUR) { $SEL03 = $SELECTED; } else { $SEL03 = ''; }

		if (!isset($gr_champ))
		{
			$d = 1;
			$f = 1;

			if (!isset($debut)) { $debut = 1; }
			if (!isset($fin))   { $fin   = nb_journees($champ); }

?>

<script type="text/javascript">$(document).ready(function(){$('a.TipsJoueur').cluetip({width:'<?php echo T_PHOTO_JOUEUR; ?>',height:'auto',showTitle:false,dropShadow:true,cluetipClass:'default'});});</script>
<?php

			echo '	<form method="post" action="" class="TblCenter TxtCenter">
		<p>
		<select name="type">
			<option value="'.$GENERAL.'"'.$SEL01.'>'.$GENERAL.'</option>
			<option value="'.$DOMICILE.'"'.$SEL02.'>'.$DOMICILE.'</option>
			<option value="'.$EXTERIEUR.'"'.$SEL03.'>'.$EXTERIEUR.'</option>
		</select>
		'.FormatText(CONSULT_CLMNT_MSG2).'
		<select name="debut">'."\n";

			while ($d <= nb_journees($champ))
			{
				if ($d == $debut) { $SELD = $SELECTED; } else { $SELD = ''; }

				echo '			<option value="'.$d.'"'.$SELD.'>'.$d.'</option>'."\n";

				$d++;
			}

			echo '
		</select>
		'.FormatText(CONSULT_CLMNT_MSG3).'
		<select name="fin">'."\n";

			while ($f <= nb_journees($champ))
			{
				if ($f == $fin) { $SELF = $SELECTED; } else { $SELF = ''; }

				echo '			<option value="'.$f.'"'.$SELF.'>'.$f.'</option>'."\n";

				$f++;
			}

			echo '		</select>
		'.FormatText(ADMIN_JOUEURS_3).'
		<select name="equipe">
			<option value="">'.FormatText('Toutes les équipes').'</option>'."\n";

			$REQ1 = mysql_query('SELECT phpl_clubs.nom, phpl_equipes.id 
								FROM phpl_equipes, phpl_clubs
								WHERE phpl_equipes.id_champ='.$champ.'
								AND phpl_clubs.id=phpl_equipes.id_club');

			while ($ROW1 = mysql_fetch_array($REQ1))
			{ 
				if ($ROW1[1] == $equipe) { $SEL = $SELECTED; } else { $SEL = ''; }

				echo '			<option value="'.$ROW1[1].'"'.$SEL.'>'.stripslashes($ROW1[0]).'</option>'."\n";
			}
			mysql_free_result($REQ1);

			echo '		</select>
		<input type="hidden" name="champ" value="'.$champ.'" />
		<input type="submit" value="'.FormatText(ENVOI).'" />
		</p>
	</form>'."\n";  
		}

		if (!isset($gr_champ))
		{
			$query = "SELECT phpl_divisions.nom, phpl_saisons.annee, (phpl_saisons.annee)+1
					FROM phpl_championnats, phpl_divisions, phpl_saisons
					WHERE phpl_championnats.id='$champ'
					AND phpl_divisions.id=phpl_championnats.id_division 
					AND phpl_saisons.id=phpl_championnats.id_saison";
			$result = mysql_query($query);

			while ($row = mysql_fetch_array($result))
			{
				echo '<h4>'.stripslashes($row[0]).' '.$row[1].'/'.$row[2].'</h4>';
			}
		}
		else
		{
			$query = "SELECT phpl_divisions.nom, phpl_saisons.annee, (phpl_saisons.annee)+1
					FROM phpl_championnats, phpl_divisions, phpl_saisons
					WHERE phpl_championnats.id IN (";

			$query2 = "SELECT id_champ, libelle FROM groupe_championnat WHERE id_groupe=$gr_champ";
			$result2 = mysql_query($query2);

			$x = 0;
			$tab_query = '';

			while ($row2 = mysql_fetch_array($result2)) 
			{ 
				if ($x != 1) $tab_query = $tab_query . ",";

				$tab_query = $tab_query.$row2[0];
				$nom_gr    = $row2[1];

				$x++;
			}     

			$query = $query.$tab_query.") AND phpl_divisions.id=phpl_championnats.id_division AND phpl_saisons.id=phpl_championnats.id_saison";
			$result = mysql_query($query); 

			echo '<h3>'.FormatText(CONSULT_COMPO_MSG2).' '.$nom_gr.' '.FormatText(CONSULT_COMPO_MSG3).'</h3>';

			while ($row = mysql_fetch_array($result)) 
			{ 
				echo '<h3>'.stripslashes($row[0]).' '.$row[1].'/'.$row[2].'</h3>';
			}
		}

		if (!isset($gr_champ))
		{
			$result = mysql_query("SELECT fiches_clubs, phpl_clubs.nom, id_equipe_fetiche, phpl_clubs.id
                               FROM phpl_parametres, phpl_clubs, phpl_equipes
                               WHERE phpl_parametres.id_champ='$champ'
                               AND phpl_equipes.id=id_equipe_fetiche
                               AND phpl_clubs.id=phpl_equipes.id_club");

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
	$tab_id_equipe_fetiche="";
	
	while ($row=mysql_fetch_array($result))
	       {
		$x++;
		if ($x!=1) $tab_id_equipe_fetiche = $tab_id_equipe_fetiche . ",";
		$tab_id_equipe_fetiche=$tab_id_equipe_fetiche . "'$row[id_equipe_fetiche]'" ;
	       }


	$result=(mysql_query("SELECT id_club FROM phpl_equipes WHERE id IN ($tab_id_equipe_fetiche)"));
        $x=0;
	$id_club_fetiche="";

	while ($row=mysql_fetch_array($result))
	       {
		$x++;
		if ($x!=1) $id_club_fetiche = $id_club_fetiche . ",";
		$id_club_fetiche=$id_club_fetiche . "'$row[id_club]'" ;
	       }
	// $EquipeFetiche=$tab_id_club_fetiche;
	}

if (isset($gr_champ))
{
if (!(isset($type))) {$type=$GENERAL;}
if (!(isset($debut))) {$debut = 1;}
if (!(isset($fin)))
	{
	$array = explode(',', $tab_query);
	// echo "<TD>" . sizeof($array) ;
	$fin=1;
	for ($i=0; $i < sizeof($array); $i++)
	{
		$nb = nb_journees(ereg_replace("'", '', $array[$i]));
		if ($nb > $fin) { $fin=$nb ; }

	}
	}
}

// AFFICHAGE DE TOUS LE CHAMPIONNAT SI L UTILISATEUR Na PAS BORNE
switch($type)
{
case $GENERAL;    // CLASSEMENT GENERAL
        {

//	if (!$gr_champ){
		$legende = GENERAL.' &bull; '.CONSULT_CLMNT_MSG2.' '.$debut.' '.CONSULT_CLMNT_MSG3.' '.$fin;

		$requete = "SELECT Sum(phpl_compoCJ.CJ) AS Total, phpl_joueurs.nom AS NomJoueur, phpl_joueurs.prenom as PrenomJoueur, phpl_clubs.nom, phpl_clubs.id as idClub, phpl_joueurs.id as id_joueur
					FROM phpl_joueurs, phpl_compoCJ, phpl_matchs, phpl_journees, phpl_equipes, phpl_clubs, phpl_effectif
					WHERE phpl_joueurs.id = phpl_effectif.id_joueur
					AND phpl_equipes.id = phpl_effectif.id_equipe
					AND phpl_compoCJ.id_match = phpl_matchs.id
					AND phpl_journees.id = phpl_matchs.id_journee
					AND phpl_equipes.id_club=phpl_clubs.id
					AND phpl_journees.numero>=$debut
					AND phpl_journees.numero<=$fin
					AND phpl_effectif.id=phpl_compoCJ.id_effectif
					AND phpl_effectif.id_equipe=phpl_equipes.id";

		if (!isset($gr_champ))
		{
			$requete = $requete . " AND phpl_journees.id_champ=$champ ";
		}
		else
		{
			$requete = $requete . " AND phpl_journees.id_champ IN ($tab_query) ";
		}

		if (isset($equipe) and $equipe!=='') {$requete = $requete . "AND phpl_equipes.id='$equipe'";}

		$requete = $requete . " AND (phpl_matchs.id_equipe_dom = phpl_equipes.id
					OR phpl_matchs.id_equipe_ext = phpl_equipes.id)
					GROUP BY phpl_joueurs.nom, phpl_joueurs.prenom, phpl_joueurs.photo, phpl_joueurs.date_naissance, phpl_joueurs.position_terrain
					ORDER BY Total DESC, NomJoueur ASC";

		if (!isset($complet) or !($complet == 1)) {$requete = $requete . " LIMIT 0,40";}

		CJ($legende, $requete, $type, $id_club_fetiche, $champ, $debut, $fin, $equipe, $complet);
	}
	break;


case $DOMICILE;
        {

	$legende=CONSULT_CJ_TITRE_1.' : '.DOMICILE.', '.CONSULT_CLMNT_MSG2.$debut.CONSULT_CLMNT_MSG3.$fin;

	$requete = "
		SELECT 	Sum(phpl_compoCJ.CJ) AS Total,
			phpl_joueurs.nom AS NomJoueur,
			phpl_joueurs.prenom as PrenomJoueur,
			phpl_clubs.nom,
			phpl_clubs.id as idClub,
			phpl_joueurs.id as id_joueur

		FROM 	phpl_joueurs, phpl_compoCJ, phpl_matchs, phpl_journees, phpl_equipes, phpl_clubs, phpl_effectif


		WHERE	phpl_joueurs.id = phpl_effectif.id_joueur
			AND phpl_matchs.id_equipe_dom = phpl_equipes.id
			AND phpl_clubs.id = phpl_equipes.id_club
			AND phpl_matchs.id = phpl_compoCJ.id_match
			AND phpl_journees.id = phpl_matchs.id_journee
			AND phpl_equipes.id=phpl_effectif.id_equipe
			AND phpl_journees.numero>=$debut
			AND phpl_journees.numero<=$fin
			AND phpl_journees.id_champ=$champ
			AND phpl_effectif.id=phpl_compoCJ.id_effectif";
			
			if (!$gr_champ) {$requete = $requete . " AND phpl_journees.id_champ=$champ ";} 	else {$requete = $requete . " AND phpl_journees.id_champ IN ($tab_query) ";}


                        if ($equipe and $equipe!=''){ $requete=$requete."AND phpl_equipes.id='$equipe'";}
                        $requete=$requete."

			
	
		GROUP BY
				phpl_joueurs.nom,
				phpl_joueurs.prenom,
				phpl_joueurs.photo,
				phpl_joueurs.date_naissance,
				phpl_joueurs.position_terrain


		ORDER BY Total DESC ,NomJoueur ASC";

if (!isset($complet) or !($complet=="1")) {$requete = $requete . " LIMIT 0,40";}


	CJ($legende, $requete, $type, $id_club_fetiche, $champ, $debut, $fin, $equipe, $complet);
	}
	break;


case $EXTERIEUR;
        {
	$legende=CONSULT_CJ_TITRE_1." : ".EXTERIEUR.", ".CONSULT_CLMNT_MSG2.$debut.CONSULT_CLMNT_MSG3.$fin;
	$requete = "
		SELECT 	Sum(phpl_compoCJ.CJ) AS Total,
			phpl_joueurs.nom AS NomJoueur,
			phpl_joueurs.prenom as PrenomJoueur,
			phpl_clubs.nom,
			phpl_clubs.id as idClub,
			phpl_joueurs.id as id_joueur
			
		FROM 	phpl_joueurs, phpl_compoCJ, phpl_matchs, phpl_journees, phpl_equipes, phpl_clubs, phpl_effectif


		WHERE
			phpl_joueurs.id = phpl_effectif.id_joueur
			AND phpl_matchs.id_equipe_ext = phpl_equipes.id
			AND phpl_clubs.id = phpl_equipes.id_club
			AND phpl_matchs.id = phpl_compoCJ.id_match
			AND phpl_journees.id = phpl_matchs.id_journee
			AND phpl_equipes.id=phpl_effectif.id_equipe
			AND phpl_journees.numero>=$debut
			AND phpl_journees.numero<=$fin
			AND phpl_effectif.id=phpl_compoCJ.id_effectif";
			if (!$gr_champ) {$requete = $requete . " AND phpl_journees.id_champ=$champ ";} 	else {$requete = $requete . " AND phpl_journees.id_champ IN ($tab_query) ";}


                        if ($equipe and $equipe!=''){ $requete=$requete."AND phpl_equipes.id='$equipe'";}
                        $requete=$requete."


			AND phpl_journees.id_champ=$champ


		GROUP BY
				phpl_joueurs.nom,
				phpl_joueurs.prenom,
				phpl_joueurs.photo,
				phpl_joueurs.date_naissance,
				phpl_joueurs.position_terrain


		ORDER BY Total DESC , NomJoueur ASC";

if (!isset($complet) or !($complet=="1")) {$requete = $requete . " LIMIT 0,40";}


	CJ($legende, $requete, $type, $id_club_fetiche, $champ, $debut, $fin, $equipe, $complet);
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