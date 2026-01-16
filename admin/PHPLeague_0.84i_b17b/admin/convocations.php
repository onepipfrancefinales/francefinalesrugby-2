<h2><?php echo MENU_CONVOCATIONS; ?></h2>

<?php

//----------------------------------------------------------------------------------------
//----------------------------------------------------------------------------------------
//---------------------------------adresse de votre site----------------------------------
//-----------------------------ex:http:votresite.fr/phpleague-----------------------------
//----------------------------------------------------------------------------------------
//----------------------------------------------------------------------------------------

$site="http://petitjo.86.free.fr/PhpLeague";

$button=null;

$page            = isset($_REQUEST['page']) ? $_REQUEST['page'] : NULL;
$champ           = isset($_REQUEST['champ']) ? $_REQUEST['champ'] : NULL;
$action          = isset($_REQUEST['action']) ? $_REQUEST['action'] : NULL;
$club            = isset($_REQUEST['club']) ? $_REQUEST['club'] : NULL;
$equipe          = isset($_REQUEST['equipe']) ? $_REQUEST['equipe'] : NULL;
$bloque          = isset($_REQUEST['bloque']) ? $_REQUEST['bloque'] : NULL;
$id_match        = isset($_REQUEST['id_match']) ? $_REQUEST['id_match'] : NULL;
$id_convocation  = isset($_POST['id_convocation']) ? $_POST['id_convocation'] : NULL;

$quia            = isset($_REQUEST['quia']) ? $_REQUEST['quia'] : NULL;
$annul           = isset($_REQUEST['annul']) ? $_REQUEST['annul'] : NULL;

$old_id_match    = isset($_POST['old_id_match']) ? $_POST['old_id_match'] : NULL;
$effectif        = isset($_POST['effectif']) ? $_POST['effectif'] : Array();
$heure           = isset($_POST['heure']) ? $_POST['heure'] : NULL;
$lieux           = isset($_POST['lieux']) ? $_POST['lieux'] : NULL;
$accompagnateurs = isset($_POST['accompagnateurs']) ? $_POST['accompagnateurs'] : NULL;
$noma            = isset($_POST['noma']) ? $_POST['noma'] : NULL;
$prenoma         = isset($_POST['prenoma']) ? $_POST['prenoma'] : Array();
$pseudoa         = isset($_POST['pseudoa']) ? $_POST['pseudoa'] : NULL;
$expediteur      = isset($_POST['expediteur']) ? $_POST['expediteur'] : NULL;
$dateok          = isset($_POST['dateok']) ? $_POST['dateok'] : NULL;
$club_ext        = isset($_POST['club_ext']) ? $_POST['club_ext'] : NULL;
$club_dom        = isset($_POST['club_dom']) ? $_POST['club_dom'] : NULL;


echo InfoReqSql('Info', 0, 'error', 'alert', 'En cours de correction. Désolé de la gène occasionnée.');


if (NbrRecord('id', 'phpl_championnats') > 0)
{
	if ($action == 'create')
	{
		insertConvocation($heure, $lieux, $accompagnateurs, $id_match, $equipe, $effectif, $noma, $prenoma, $pseudoa, $expediteur, $dateok, $club_ext, $club_dom, $site, $champ);
	}
	elseif ($action == 'update')
	{
		updateConvocation($id_convocation, $heure, $lieux, $accompagnateurs, $id_match, $equipe, $effectif, $noma, $prenoma, $pseudoa, $expediteur, $dateok, $club_ext, $club_dom, $site, $champ);
	}

if (empty($champ))
{
	echo '		<div class="Cadre">'."\n";
	echo champ_choix($champ);
	echo '		<div style="clear: both;"></div></div>'."\n";
}

if (!empty($champ))
{
	if (empty($club))
	{
		echo '		<div class="Cadre">'."\n";
		echo champ_choix($champ);
		echo club_choix($champ);
		echo '		</div>'."\n";
	}

	if (!empty($club))
	{

?>

	<div class="Cadre">
		<label>Saison</label>
		<?php echo champ_choix2($champ, $club); ?>
		<label>Choix de la journ&eacute;e</label>
		<?php echo match_by_club($champ, $id_match, $club); ?>
	</div>

<?php

		if (!isset($equipe))
		{
			$equipe = getEquipe($club, $champ);
		}	
  
		if (!$bloque == 1)
		{
			$requete = "SELECT MIN(phpl_matchs.id) 
						FROM phpl_journees, phpl_matchs
						WHERE phpl_journees.id=phpl_matchs.id_journee 
						AND phpl_matchs.buts_dom is NULL 
						AND phpl_journees.id_champ='$champ'
						AND (phpl_matchs.id_equipe_ext='$equipe' OR phpl_matchs.id_equipe_dom='$equipe')";
			$resultats = mysql_query($requete);

			while ($row = mysql_fetch_array($resultats))
			{
				$id_match = $row[0];
			}
		}

		$requeted = "SELECT cldom.nom as cldom, clext.nom as clext, phpl_journees.date_prevue, date_reelle              
					FROM phpl_equipes as dom, phpl_equipes as ext, phpl_matchs, phpl_journees, phpl_clubs as cldom, phpl_clubs as clext
					WHERE phpl_matchs.id_equipe_dom=dom.id
					AND phpl_matchs.id_equipe_ext=ext.id
					AND phpl_matchs.id='$id_match'
					AND dom.id_club=cldom.id
					AND ext.id_club=clext.id
					AND phpl_matchs.id_journee=phpl_journees.id";               
		$resultatsd = mysql_query($requeted);

		while ($rowd = mysql_fetch_array($resultatsd))
		{
			$club_dom    = $rowd[0]; 
			$club_ext    = $rowd[1];
			$date_prevu  = $rowd[2];
			$date_reelle = $rowd[3];

			if (empty($date_reelle) OR $date_reelle == '0000-00-00 00:00:00')
			{
				$jour   = substr($rowd[2], 8, 2);
				$mois   = substr($rowd[2], 5, 2);
				$annee  = substr($rowd[2], 0, 4);
				$dateok = $jour.'/'.$mois.'/'.$annee;
			}
			else
			{
				$jour   = substr($rowd[3], 8, 2);
				$mois   = substr($rowd[3], 5, 2);
				$annee  = substr($rowd[3], 0, 4);
				$dateok = $jour.'/'.$mois.'/'.$annee;
			}
		}

		$requetec = "SELECT mail, pseudo, nom, prenom
					FROM phpl_membres
					WHERE admin='1'
					AND pseudo='petitjo86'";               
		$resultatsc = mysql_query($requetec);

		while ($rowc = mysql_fetch_array($resultatsc))
		{
			$expediteur = $rowc[0]; 
			$pseudoa    = $rowc[1];
			$noma       = $rowc[2]; 
			$prenoma    = $rowc[3];
		}

		$nbav = 0;

		$requetec2 = "SELECT phpl_convoques.id
					FROM phpl_convoques, phpl_convocation
					WHERE phpl_convocation.id=phpl_convoques.id_convocation
					AND phpl_convoques.transmis='0'";               
		$resultatsc2 = mysql_query($requetec2);

		while ($rowc2 = mysql_fetch_array($resultatsc2))
		{
			$nbav++;
		}

		if ($nbav > 0)
		{
			$id_equipeup = $equipe;

			$requetec3 = "SELECT phpl_convoques.id_effectif,phpl_convocation.id,phpl_convocation.accompagnateurs,phpl_convocation.id_match,phpl_convocation.heure,phpl_convocation.lieux,phpl_convoques.id
          FROM phpl_convoques,phpl_convocation
          WHERE phpl_convoques.id_convocation=phpl_convocation.id
          and phpl_convoques.transmis='0'
          order by phpl_convoques.id desc";               

			$resultatsc3 = mysql_query($requetec3) or die (mysql_error());

			while ($rowc3 = mysql_fetch_array($resultatsc3))
			{
				$id_effectif    = $rowc3[0];
				$id             = $rowc3[1];
				$accompagnateur = $rowc3[2];
				$id_matchup     = $rowc3[3];
				$heure          = $rowc3[4];
				$lieux          = $rowc3[5];

				echo maila($id_effectif, $id, $accompagnateur, $id_matchup, $heure, $lieux, $club_dom, $club_ext, $dateok, $expediteur, $pseudoa, $quia, $site, $id_equipeup, $champ, $annul);
			}

			$nbav2 = 0;

			$requetec4 = "SELECT phpl_convoques.id
						FROM phpl_convoques,phpl_convocation
						WHERE phpl_convocation.id=phpl_convoques.id_convocation
						AND phpl_convoques.transmis='0'";               
			$resultatsc4 = mysql_query($requetec4) or die (mysql_error());

			while ($rowc4 = mysql_fetch_array($resultatsc4))
			{
				$nbav2++;
			}

			if ($nbav2 == 1) { $S = ''; } else { $S = 's'; }

			echo InfoReqSql('InfSendMail', 0, 'error', 'alert', $nbav2.' mail'.$S.' non envoy&eacute;'.$S);
		}
		//--------------

		$convoc = getConvocation($id_match, $equipe); 

		if ($convoc['id'] != '')
		{
			$action = 'update';
		}	
		else
		{
			$action = 'create';
		}

?>

<form method="post" action="">
	<fieldset>
		<legend>Rendez-vous</legend>
		<table class="Large100P ui-widget ui-widget-content">
			<thead>
				<tr class="ui-widget-header">
					<th>Heure</th>
					<th>Lieu</th>
					<th>Accompagnateur(s)</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><input type="text" name="heure" value="<?php echo $convoc['heure']; ?>" /></td>
					<td><input type="text" name="lieux" value="<?php echo $convoc['lieux']; ?>" /></td>
					<td colspan="3"><textarea name="accompagnateurs"><?php echo $convoc['accompagnateurs']; ?></textarea></td>
				</tr>
			</tbody>
		</table>
	</fieldset>
	<fieldset>
		<legend>S&eacute;lection des joueurs</legend>
		<table class="Large100P ui-widget ui-widget-content">
<?php
		effectif($club, $champ, $convoc['convoques']);

		if (NBR_EFFECTIF > 0)
		{

?>
			<tfoot>
				<tr class="ui-widget-footer">
					<td colspan="4">
						<input type="hidden" name="page" value="convocations" />
						<input type="hidden" name="action" value="<?php echo $action; ?>" />
						<input type="hidden" name="champ" value="<?php echo $champ; ?>" />
						<input type="hidden" name="saison" value="<?php echo $saison; ?>" />
						<input type="hidden" name="noma" value="<?php echo $noma; ?>" />
						<input type="hidden" name="prenoma" value="<?php echo $prenoma; ?>" />
						<input type="hidden" name="pseudoa" value="<?php echo $pseudoa; ?>" />
						<input type="hidden" name="expediteur" value="<?php echo $expediteur; ?>" />
						<input type="hidden" name="dateok" value="<?php echo $dateok; ?>" />
						<input type="hidden" name="club_ext" value="<?php echo $club_ext; ?>" />
						<input type="hidden" name="club_dom" value="<?php echo $club_dom; ?>" />
						<input type="hidden" name="club" value="<?php echo $club; ?>" />
						<input type="hidden" name="equipe" value="<?php echo $equipe; ?>" />
						<input type="hidden" name="old_id_match" value="<?php echo $id_match; ?>" />
						<input type="hidden" name="site" value="<?php echo $site; ?>" />
						<input type="hidden" name="id_convocation" value="<?php echo $convoc['id']; ?>" />
						<input type="submit" value="<?php echo ENVOI; ?>" />
					</td>
				</tr>
			</tfoot>
<?php

		}

?>
		</table>
	</fieldset>
</form>

<?php

	}
}

}
else
{
	echo InfoReqSql('InfoNbrChamp', 0, 'highlight', 'info', 'Aucun championnat dans la base.');
}

?>