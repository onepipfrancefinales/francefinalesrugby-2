<?php

$champ     = isset($_REQUEST['champ'])     ? $_REQUEST['champ']     : NULL;
$id_equipe = isset($_REQUEST['id_equipe']) ? $_REQUEST['id_equipe'] : NULL;

define('MOD', 'consult');

require('../config.php') ;
require('../function_consult.php');

include('../header.php');

ouverture();

if (!isset($_REQUEST['champ']))
{
	demande_champ($champ);
}
elseif (!isset($_REQUEST['id_equipe']))
{
	echo '<h4>'.FormatText(DETAILEQ_TITRE).'</h4>'."\n\n";

	demande_equipe($champ);
}
else
{
	$REQ1 = mysql_query('SELECT id FROM '.TBL_EQUIPES.'
						 WHERE id_champ='.$champ.'
						 AND id='.$id_equipe);

	while ($ROW1 = mysql_fetch_array($REQ1))
	{
		$id_equipe = $ROW1['id'];
	}
	mysql_free_result($REQ1);

	$REQ2 = mysql_query('SELECT '.TBL_CLUBS.'.nom
						 FROM '.TBL_CLUBS.', '.TBL_EQUIPES.'
						 WHERE '.TBL_EQUIPES.'.id='.$id_equipe.'
						 AND '.TBL_EQUIPES.'.id_club='.TBL_CLUBS.'.id');

	while ($ROW2 = mysql_fetch_array($REQ2))
	{
		$club = stripslashes($ROW2['nom']);
	}
	mysql_free_result($REQ2);

	$REQ3 = mysql_query('SELECT '.TBL_DIVISIONS.'.nom, '.TBL_SAISONS.'.annee, ('.TBL_SAISONS.'.annee)+1
						 FROM '.TBL_DIVISIONS.', '.TBL_SAISONS.', '.TBL_CHAMPIONNATS.'
						 WHERE '.TBL_CHAMPIONNATS.'.id='.$champ.'
						 AND '.TBL_DIVISIONS.'.id='.TBL_CHAMPIONNATS.'.id_division
						 AND '.TBL_SAISONS.'.id='.TBL_CHAMPIONNATS.'.id_saison');

	while ($ROW3 = mysql_fetch_array($REQ3))
	{
		$TITRE = stripslashes($ROW3[0]).' '.$ROW3[1].'/'.$ROW3[2];
	}
	mysql_free_result($REQ3);

	if ($AGENT == 'iphone')
	{
		echo '	<div id="topbar">
		<div id="leftnav">
			<a href="javascript:history.back();">Retour</a>
		</div>
		<div id="title">
			<h1>'.FormatText($TITRE).'</h1>
		</div>
	</div>'."\n\n";
	}
	else
	{
		echo '<h1>'.FormatText($TITRE).'</h1>'."\n\n";
	}

	$query1 = "SELECT phpl_journees.numero, cldom.nom, clext.nom, phpl_matchs.buts_dom, phpl_matchs.buts_ext, phpl_matchs.date_reelle, phpl_matchs.id
			   FROM phpl_equipes as dom, phpl_equipes as ext, phpl_matchs, phpl_journees, phpl_clubs as cldom, phpl_clubs as clext
			   WHERE phpl_matchs.id_equipe_dom=dom.id
			   AND phpl_matchs.id_equipe_ext=ext.id
			   AND (phpl_matchs.id_equipe_ext='$id_equipe' OR phpl_matchs.id_equipe_dom='$id_equipe')
			   AND phpl_journees.id_champ='$champ'
			   AND dom.id_club=cldom.id
			   AND ext.id_club=clext.id
			   AND phpl_matchs.id_journee=phpl_journees.id
			   ORDER BY phpl_journees.numero";
	$result = mysql_query($query1);

	$color = 0;

	echo '<h4>'.$club.'</h4>

<p class="TxtCenter Bold">[ <span class="victoire">'.FormatText(VICTOIRE).'</span> | <span class="nul">'.FormatText(NUL).'</span> | <span class="defaite">'.FormatText(DEFAITE).'</span> ]</p>

<table class="TblCenter Large500">
	<thead>
		<tr>
			<th class="Large5P">'.FormatText('J').'</th>
			<th class="TxtLeft">'.FormatText(DATE).'</th>
			<th class="TxtLeft">'.FormatText('Heure').'</th>
			<th colspan="3">&nbsp;</th>
		</tr>
	</thead>
	<tbody>'."\n";

	while ($row = mysql_fetch_array($result))
	{
		$row[1] = stripslashes($row[1]);
		$row[2] = stripslashes($row[2]);

		if (($color % 2) == 0) { $CLASS = 'ligne2'; } else { $CLASS = 'ligne1'; }

		$color += 1;

		$minute = substr($row[5], 14, 2); // on récupère la minute
		$heure  = substr($row[5], 11, 2); // on récupère l'heure
		$jour   = substr($row[5], 8, 2);  // on récupère le jour
		$mois   = substr($row[5], 5, 2);  // puis le mois
		$annee  = substr($row[5], 0, 4);  // et l'annee
		$t      = mktime($heure, $minute, 0, $mois, $jour, $annee);

		echo '		<tr class="'.$CLASS.'">
			<td class="Bold">'.$row[0].'</td>
			<td>'.FormatText(ucfirst(strftime('%A %d %B', $t))).'</td>
			<td>'.strftime('%Hh%M', $t).'</td>'."\n";

		if ($row[1] == 'exempte' OR $row[2] == 'exempte')
		{
			echo '			<td>'.FormatText(ADMIN_RESULTS_1).'</td>
			<td colspan="3">&nbsp;</td>'."\n";
		}
		else
		{
			echo '			<td class="TxtRight">';

			if ($row[3] <> '' AND $row[1] == $club)
			{
				if ($row[3] > $row[4])  { echo '<span class="victoire">'; }
				if ($row[3] < $row[4])  { echo '<span class="defaite">'; }
				if ($row[3] == $row[4]) { echo '<span class="nul">'; }

				echo '<b>'; 
			}

			echo stripslashes($row[1]);

			if ($row[3] <> '' AND $row[1] == $club) { echo '</b></span>'; }

			if ($row[3] == '' AND $row[4] == '')
			{
				$VAL = '&nbsp;';
			}
			else
			{
				$VAL = '<a href="'.URL_MATCH.'?id_match='.$row[6].'" class="jQiFrame" title="'.stripslashes($row[1].' - '.$row[2]).'">'.$row[3].' - '.$row[4].'</a>';
			}

			echo '</td>
			<td class="TxtCenter">'.$VAL.'</td>
			<td>';

			if ($row[4] <> '' AND $row[2] == $club)
			{
				if ($row[3] < $row[4])  { echo '<span class="victoire">'; }
				if ($row[3] > $row[4])  { echo '<span class="defaite">'; }
				if ($row[3] == $row[4]) { echo '<span class="nul">'; }

				echo '<b>'; 
			}

			echo stripslashes($row[2]);

			if ($row[4] <> '' AND $row[2] == $club) { echo '</b></span>'; }

			echo '</td>
		</tr>'."\n";
		}
	}

	echo '	</tbody>
</table>'."\n\n";
}

include('../footer.php');

?>