<?php

$champ = isset($_REQUEST['champ']) ? $_REQUEST['champ'] : NULL;

define('MOD', 'consult');

require('../config.php') ;

if ($ACT_CALENDRIER == 1)
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
			<h1>'.FormatText(CONSULT_CALENDAR).'</h1>
		</div>
	</div>'."\n\n";
	}
	else
	{
		echo '	<h1>'.FormatText(CONSULT_CALENDAR).'</h1>'."\n\n";
	}

	if (empty($champ))
	{
		demande_champ($champ);
	}
	else
	{
		$i         = 0;
		$x         = 2;
		$journee   = 0;
		$color     = 0;
		$nb_equipe = nb_equipes($champ);
		$journee_milieu = nb_journees($champ);

		demande_champ($champ);

		$REQ1 = mysql_query('SELECT phpl_divisions.nom, phpl_saisons.annee, (phpl_saisons.annee)+1
							FROM phpl_championnats, phpl_divisions, phpl_saisons
							WHERE phpl_championnats.id='.$champ.'
							AND phpl_divisions.id=phpl_championnats.id_division
							AND phpl_saisons.id=phpl_championnats.id_saison');
		$ROW1 = mysql_fetch_array($REQ1);

		mysql_free_result($REQ1);

		$REQ2 = mysql_query('SELECT id_equipe_fetiche
							FROM phpl_parametres, phpl_championnats, phpl_divisions, phpl_saisons
							WHERE id_champ='.$champ.'
							AND phpl_championnats.id='.$champ.'
							AND phpl_divisions.id=phpl_championnats.id_division
							AND phpl_saisons.id=phpl_championnats.id_saison');
		$ROW2 = mysql_fetch_array($REQ2);

		mysql_free_result($REQ2);

		$id_equipe_fetiche = $ROW2['id_equipe_fetiche'];

		$REQ3 = mysql_query('SELECT phpl_clubs.nom, CLEXT.nom, phpl_matchs.buts_dom, phpl_matchs.buts_ext, phpl_matchs.id, phpl_matchs.date_reelle
							FROM phpl_clubs, phpl_clubs AS CLEXT, phpl_matchs, phpl_journees, phpl_equipes, phpl_equipes AS EXT
							WHERE phpl_clubs.id=phpl_equipes.id_club
							AND CLEXT.id=EXT.id_club
							AND phpl_equipes.id=phpl_matchs.id_equipe_dom
							AND EXT.id=phpl_matchs.id_equipe_ext
							AND phpl_matchs.id_journee=phpl_journees.id
							AND phpl_journees.id_champ='.$champ.'
							AND (CLEXT.nom="exempte" OR phpl_clubs.nom="exempte")
							ORDER BY phpl_journees.numero ASC');

		while ($ROW3 = mysql_fetch_array($REQ3))
		{
			$ROW3[0]         = stripslashes($ROW3[0]);
			$ROW3[1]         = stripslashes($ROW3[1]);
			$resultats_0[$i] = $ROW3[0];
			$resultats_1[$i] = $ROW3[1];

			$i++;
		}
		mysql_free_result($REQ3);

		$REQ4 = mysql_query('SELECT phpl_journees.numero, phpl_journees.date_prevue, cldom.nom, clext.nom, phpl_matchs.buts_dom, phpl_matchs.buts_ext, dom.id, ext.id
				FROM phpl_journees, phpl_clubs AS cldom, phpl_clubs AS clext, phpl_matchs, phpl_equipes AS dom, phpl_equipes AS ext
				WHERE phpl_journees.id_champ='.$champ.'
				AND phpl_matchs.id_equipe_dom=dom.id
				AND phpl_matchs.id_equipe_ext=ext.id
				AND dom.id_club=cldom.id
				AND ext.id_club=clext.id
				AND phpl_matchs.id_journee=phpl_journees.id
				AND cldom.nom!="exempte"
				AND clext.nom!="exempte"
				ORDER BY phpl_journees.numero ASC');

		while ($row = mysql_fetch_array($REQ4))
		{
		 	$date = preg_replace('/(\d{2,4})-(\d{1,2})-(\d{1,2})/', '\3/\2/\1', $row[1]);

			if ($journee == 0)
			{

?>
<h4><?php echo stripslashes($ROW1[0]).' '.$ROW1[1].'/'.$ROW1[2]; ?></h4>

<table class="TblCenter Large300">
	<thead>
		<tr>
			<th colspan="3"><?php echo FormatText(ADMIN_COHERENCE_MSG2.' '.$row[0].CONSULT_MATCHS_MSG2.$date); ?></th>
		</tr>
	</thead>
	<tbody>
<?php

			}
			elseif (!($journee == $row[0]))
			{
				echo '	</tbody>
</table>'."\n\n";

				if ($journee == $journee_milieu) { echo '</td><td>'; }

?>
<table class="TblCenter Large300">
	<thead>
		<tr>
			<th colspan="3"><?php echo FormatText(ADMIN_COHERENCE_MSG2.' '.$row[0].CONSULT_MATCHS_MSG2.$date); ?></th>
		</tr>
	</thead>
	<tbody>
<?php

				$x = 2;
			}

			if (($color % 2) == 0) { $classe = 'ligne2'; } else { $classe = 'ligne1'; }

			if (empty($id_equipe_fetiche))
			{
				$B_DOM_D = '';
				$B_DOM_F = '';
				$B_VIS_D = '';
				$B_VIS_F = '';
			}
			else
			{
				if ($row[6] == $id_equipe_fetiche) { $B_DOM_D = '<b>'; $B_DOM_F = '</b>'; }	else { $B_DOM_D = ''; $B_DOM_F = ''; }
				if ($row[7] == $id_equipe_fetiche) { $B_VIS_D = '<b>'; $B_VIS_F = '</b>'; }	else { $B_VIS_D = ''; $B_VIS_F = ''; }
			}

?>
		<tr class="<?php echo $classe; ?>">
			<td class="Large40P TxtRight"><?php echo $B_DOM_D.stripslashes($row[2]).$B_DOM_F; ?></td>
			<td class="Large20P TxtCenter"><?php echo $row[4].' - '.$row[5]; ?></td>
			<td class="Large40P TxtLeft"><?php echo $B_VIS_D.stripslashes($row[3]).$B_VIS_F; ?></td>
		</tr>
<?php

			if ($x == ($nb_equipe / 2))
			{
				if (($color % 2) == 0) { $classe = 'ligne2'; } else { $classe = 'ligne1'; }

				if (isset($resultats_0[$i]) AND $resultats_0[$i] == 'exempte')
				{
					echo '		<tr class="'.$classe.'">
			<td colspan="3">'.FormatText(ADMIN_RESULTS_1.' : '.$resultats_1[$i]).'</td>
		</tr>'."\n";
				}

				if (isset($resultats_1[$i]) AND $resultats_1[$i] == 'exempte')
				{
					echo '		<tr class="'.$classe.'">
			<td colspan="3">'.FormatText(ADMIN_RESULTS_1.' : '.$resultats_0[$i]).'</td>
		</tr>'."\n";
				}

				$i++;
			}

			$x++;
			$color++;
			$journee = $row[0];
		}

		echo '	</tbody>
</table>'."\n\n";

	}

	include('../footer.php');
}
else
{
	header('location: index.php');
}

?>