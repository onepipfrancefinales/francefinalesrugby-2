<?php

$champ = isset($_REQUEST['champ']) ? $_REQUEST['champ'] : NULL;

define('MOD', 'consult');

require('../config.php');

if ($ACT_CLASSEMENT == 1)
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
			<h1>'.FormatText(CONSULT_CLASSEMENT).'</h1>
		</div>
	</div>'."\n\n";
	}
	else
	{
		echo '	<h1>'.FormatText(CONSULT_CLASSEMENT).'</h1>'."\n\n";
	}

	if (empty($champ))
	{
		demande_champ($champ);
	}
	else
	{
		demande_champ($champ);

		$nb_equipe   = nb_equipes($champ);
		$nb_journees = ($nb_equipe * 2) - 2;
		$SELECT      = ' selected="selected"';
		$GENERAL     = FormatText(GENERAL);
		$DOMICILE    = FormatText(DOMICILE);
		$EXTERIEUR   = FormatText(EXTERIEUR);
		$ATTAQUE     = FormatText(ATTAQUE);
		$DEFENSE     = FormatText(DEFENSE);
		$GOALDIFF    = FormatText(GOALDIFF);

		$debut = isset($_REQUEST['debut']) ? $_REQUEST['debut'] : 1;
		$fin   = isset($_REQUEST['fin'])   ? $_REQUEST['fin']   : $nb_journees;
		$type  = isset($_REQUEST['type'])  ? $_REQUEST['type']  : $GENERAL;

		if ($type == $GENERAL OR empty($type)) { $SEL01 = $SELECT; } else { $SEL01 = ''; }
		if ($type == $DOMICILE)  { $SEL02 = $SELECT; } else { $SEL02 = ''; }
		if ($type == $EXTERIEUR) { $SEL03 = $SELECT; } else { $SEL03 = ''; }
		if ($type == $ATTAQUE)   { $SEL04 = $SELECT; } else { $SEL04 = ''; }
		if ($type == $DEFENSE)   { $SEL05 = $SELECT; } else { $SEL05 = ''; }
		if ($type == $GOALDIFF)  { $SEL06 = $SELECT; } else { $SEL06 = ''; }

		if ($nb_journees > 1)
		{
?>
	<form method="post" action="" class="TblCenter TxtCenter">
		<p>
		<label for="type"><?php echo FormatText(CONSULT_CLMNT_MSG1); ?></label>
		<select name="type" id="type">
			<option value="<?php echo $GENERAL; ?>"<?php echo $SEL01; ?>><?php echo $GENERAL; ?></option>
			<option value="<?php echo $DOMICILE; ?>"<?php echo $SEL02; ?>><?php echo $DOMICILE; ?></option>
			<option value="<?php echo $EXTERIEUR; ?>"<?php echo $SEL03; ?>><?php echo $EXTERIEUR; ?></option>
			<option value="<?php echo $ATTAQUE; ?>"<?php echo $SEL04; ?>><?php echo $ATTAQUE; ?></option>
			<option value="<?php echo $DEFENSE; ?>"<?php echo $SEL05; ?>><?php echo $DEFENSE; ?></option>
			<option value="<?php echo $GOALDIFF; ?>"<?php echo $SEL06; ?>><?php echo $GOALDIFF; ?></option>
		</select>
		<label for="debut"><?php echo FormatText(CONSULT_CLMNT_MSG2); ?></label>
		<select name="debut" id="debut">
<?php

		for($d=1; $d<=$nb_journees; $d++)
		{
			if ($d == $debut)
			{
				echo '			<option value="'.$debut.'" selected="selected">'.$debut.'</option>';
			}
			else
			{
				echo '			<option value="'.$d.'">'.$d.'</option>';
			}
		}

		echo '		</select>
		<label for="fin">'.FormatText(CONSULT_CLMNT_MSG3).'</label>
		<select name="fin" id="fin">'."\n";

		for($f=1; $f<=$nb_journees; $f++)
		{
			if ($f == $fin)
			{
				echo '			<option value="'.$fin.'" selected="selected">'.$fin.'</option>';
			}
			else
			{
				echo '			<option value="'.$f.'">'.$f.'</option>';
			}
		}

		echo "</select><input type=\"hidden\" name=\"champ\" value=\"$champ\" />\n";
		echo '<input type="submit" value="'.FormatText(ENVOI).'" /></p></form>'."\n\n";

		$REQ1 = mysql_query('SELECT phpl_divisions.nom, phpl_saisons.annee, (phpl_saisons.annee)+1
							FROM phpl_championnats, phpl_divisions, phpl_saisons
							WHERE phpl_championnats.id='.$champ.'
							AND phpl_divisions.id=phpl_championnats.id_division
							AND phpl_saisons.id=phpl_championnats.id_saison');
		$ROW1 = mysql_fetch_array($REQ1);
				mysql_free_result($REQ1);

		echo '<h4>'.stripslashes($ROW1[0]).' '.$ROW1[1].'/'.$ROW1[2].'</h4>'."\n\n";

		$class = 0;
		$lien  = 'oui';

		if (isset($type))
		{
		// RAPPEL DES PARAMETRES du CHAMPIONNAT
		$result = mysql_query('SELECT accession, barrage, estimation, relegation, id_equipe_fetiche, fiches_clubs
                         FROM '.TBL_PARAMETRES.'
                         WHERE id_champ='.$champ);
		$row = mysql_fetch_array($result);

		$accession         = $row['accession'];
		$barrage           = $row['barrage'] + $accession;
		$estimation        = $row['estimation'];
		$fiches_clubs      = $row['fiches_clubs'];
		$id_equipe_fetiche = $row['id_equipe_fetiche'];

		$requete = "SELECT phpl_equipes.id FROM phpl_equipes, phpl_clubs
                  WHERE phpl_clubs.id=phpl_equipes.id_club
                  AND id_champ='$champ'
                  AND phpl_clubs.nom='exempte'";
		$resultats = mysql_query($requete);
		$exempte   = mysql_num_rows($resultats);

		if ($exempte == 1) { $relegation = $nb_equipe - $row['relegation'] - 1; }
		else			   { $relegation = $nb_equipe - $row['relegation']; }

		switch($type)
		{
			// Classement GENERAL
			case $GENERAL;
			{
				$legende = CONSULT_CLMNT_MSG4.' '.$debut.CONSULT_CLMNT_MSG5.$fin;

				if ($debut == 1 AND $fin == $nb_journees)
				{
					$requete = "SELECT DISTINCT * FROM phpl_clmnt_cache WHERE ID_CHAMP='$champ' ORDER BY POINTS DESC, DIFF DESC, BUTSPOUR DESC, BUTSCONTRE ASC, NOM";

					progression($legende, $type, $accession, $barrage, $relegation, $champ, $requete, $lien, $id_equipe_fetiche);

					$query = "SELECT max(phpl_journees.numero) FROM phpl_journees, phpl_matchs WHERE phpl_journees.id=phpl_matchs.id_journee AND buts_dom IS NOT NULL AND phpl_journees.id_champ='$champ'";
					$result = mysql_query($query);

					while ($row = mysql_fetch_array($result))
					{
						$numero = $row[0];
					}

					if (!empty($numero))
					{
						aff_journee($champ, $numero, CONSULT_CLMNT_MSG6, 0, $fiches_clubs, $id_equipe_fetiche);
					}

					if ($numero < $nb_journees)
					{
						aff_journee($champ, $numero + 1, CONSULT_CLMNT_MSG62, 0, $fiches_clubs, $id_equipe_fetiche);
					}

					if ($estimation == 1 AND $numero >= 4 AND $numero < $nb_journees)
					{
						aff_journee($champ, $numero + 1, CONSULT_CLMNT_MSG8, 1, $fiches_clubs, $id_equipe_fetiche);
					}
				}
				else
				{
					$requete = "SELECT DISTINCT * FROM phpl_clmnt WHERE ID_CHAMP='$champ' ORDER BY POINTS DESC, DIFF DESC, BUTSPOUR DESC, BUTSCONTRE ASC, NOM";

					@db_clmnt($champ, $debut, $fin, 0);

					clmnt($legende, $type, $accession, $barrage, $relegation, $champ, $requete, $lien, $id_equipe_fetiche);
				}
			}
			break;

			// Classement DOMICILE
			case $DOMICILE;
			{
				if ($debut == 1 AND $fin == $nb_journees)
				{
					$requete = "SELECT NOM, DOMPOINTS, DOMJOUES, DOMG,  DOMN, DOMP, DOMBUTSPOUR, DOMBUTSCONTRE, DOMDIFF, ID_EQUIPE  FROM phpl_clmnt_cache WHERE ID_CHAMP='$champ' ORDER BY DOMPOINTS DESC, DOMDIFF DESC";
				}
				else
				{
					$requete = "SELECT NOM, DOMPOINTS, DOMJOUES, DOMG, DOMN, DOMP, DOMBUTSPOUR, DOMBUTSCONTRE, DOMDIFF, ID_EQUIPE FROM phpl_clmnt WHERE ID_CHAMP='$champ' ORDER BY DOMPOINTS DESC, DOMDIFF DESC";

					@db_clmnt($champ, $debut, $fin, 0);
				}

				$legende = CONSULT_CLMNT_MSG10.' '.$debut.CONSULT_CLMNT_MSG5.$fin;

				clmnt($legende, $type, $accession, $barrage, $relegation, $champ, $requete, $lien, $id_equipe_fetiche);
			}
			break;

			// Classement ATTAQUE
			case $ATTAQUE;
			{
				if ($debut == 1 AND $fin == $nb_journees)
				{
					$requete = "SELECT * FROM phpl_clmnt_cache WHERE ID_CHAMP='$champ' ORDER BY BUTSPOUR DESC, DIFF DESC";
				}
				else
				{
					$requete = "SELECT * FROM phpl_clmnt WHERE ID_CHAMP='$champ' ORDER BY BUTSPOUR DESC, DIFF DESC";

					@db_clmnt($champ, $debut, $fin, 0);
				}

				$legende = CONSULT_CLMNT_MSG11.' '.$debut.CONSULT_CLMNT_MSG5.$fin;

				clmnt($legende, $type, $accession, $barrage, $relegation, $champ, $requete, $lien, $id_equipe_fetiche);
			}
			break;

			// Classement DEFENSE
			case $DEFENSE;
			{
				if ($debut == 1 AND $fin == $nb_journees)
				{
					$requete = "SELECT * FROM phpl_clmnt_cache WHERE ID_CHAMP='$champ' ORDER BY BUTSCONTRE ASC, DIFF DESC";
				}
				else
				{
					$requete = "SELECT * FROM phpl_clmnt WHERE ID_CHAMP='$champ' ORDER BY BUTSCONTRE ASC, DIFF DESC";

					@db_clmnt($champ, $debut, $fin, 0);
				}

				$legende = CONSULT_CLMNT_MSG12.' '.$debut.CONSULT_CLMNT_MSG5.$fin;

				clmnt($legende, $type, $accession, $barrage, $relegation, $champ, $requete, $lien, $id_equipe_fetiche);
			}
			break;

			// Classement DIFFERENCE DE BUT
			case $GOALDIFF;
			{
				if ($debut == 1 AND $fin == $nb_journees)
				{
					$requete = "SELECT * FROM phpl_clmnt_cache WHERE id_champ='$champ' ORDER BY DIFF DESC, BUTSPOUR DESC, BUTSCONTRE ASC";
				}
				else
				{
					$requete = "SELECT * FROM phpl_clmnt WHERE id_champ='$champ' ORDER BY DIFF DESC, BUTSPOUR DESC, BUTSCONTRE ASC";
					@db_clmnt($champ, $debut, $fin, 0);
				}

				$legende = CONSULT_CLMNT_MSG13.' '.$debut.CONSULT_CLMNT_MSG5.$fin;

				clmnt($legende, $type, $accession, $barrage, $relegation, $champ, $requete, $lien, $id_equipe_fetiche);
			}
			break;

			// Classement EXTERIEUR
			case $EXTERIEUR;
			{
				if ($debut == 1 AND $fin == $nb_journees)
				{
					$requete = "SELECT NOM, EXTPOINTS, EXTJOUES, EXTG, EXTN, EXTP, EXTBUTSPOUR, EXTBUTSCONTRE, EXTDIFF, ID_EQUIPE FROM phpl_clmnt_cache WHERE ID_CHAMP='$champ' ORDER BY EXTPOINTS DESC, EXTDIFF DESC";
				}
				else
				{
					$requete = "SELECT NOM, EXTPOINTS, EXTJOUES, EXTG, EXTN, EXTP, EXTBUTSPOUR, EXTBUTSCONTRE, EXTDIFF, ID_EQUIPE  FROM phpl_clmnt WHERE ID_CHAMP='$champ' ORDER BY EXTPOINTS DESC, EXTDIFF DESC";

					@db_clmnt($champ, $debut, $fin, 0);
				}

				$legende = CONSULT_CLMNT_MSG14.' '.$debut.CONSULT_CLMNT_MSG5.$fin;

				clmnt($legende, $type, $accession, $barrage, $relegation, $champ, $requete, $lien, $id_equipe_fetiche);
			}
			break;
			}
		}
	}
	else
	{

?>
	<table class="TblCenter Large400">
		<thead>
			<tr>
				<th><?php echo FormatText('Information'); ?></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td class="TxtCenter"><?php echo FormatText('[ Aucune journée ]'); ?></td>
			</tr>
		</tbody>
	</table>

<?php

	}
}

	include('../footer.php');
}
else
{
	header('location: index.php');
}

?>