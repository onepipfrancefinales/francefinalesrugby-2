<?php

if (VerifSession($user_pseudo, $user_mdp) == 1)
{

?>
<script type="text/javascript">
	function ProgBar(DivBar) {
		$('#' + DivBar).progressBar({
			showText: true,
			boxImage: '../images/progressbar.gif',
			barImage: {
				0: '../images/progressbg_red.gif',
				30: '../images/progressbg_orange.gif',
				50: '../images/progressbg_yellow.gif',
				70: '../images/progressbg_green.gif'
			}
		});
	}

	$(document).ready(function() {
		ProgBar('GeneralReussite');
		ProgBar('MensuelReussite');
		ProgBar('MensuelProgression');
		ProgBar('Mensuel30Reussite');
		ProgBar('Mensuel30Progression');
		ProgBar('HebdoReussite');
		ProgBar('HebdoProgression');
	});
</script>

<?php

// Général
$moyenne_generale = 0;  

$REQ1 = mysql_query('SELECT points, participation, id_prono, pts_prono_participation, pts_prono_exact, AVG(points)
					FROM phpl_clmnt_pronos, phpl_membres, phpl_gr_championnats
					WHERE type="general"
					AND phpl_membres.id=phpl_clmnt_pronos.id_membre
					AND phpl_gr_championnats.id="'.$gr_champ.'"
					AND phpl_clmnt_pronos.id_champ="'.$gr_champ.'"
					AND phpl_membres.id_prono="'.$user_id.'"
					GROUP BY participation
					ORDER BY points DESC, participation DESC, phpl_membres.pseudo');

while ($ROW1 = mysql_fetch_array($REQ1))
{
	if ($user_id == $ROW1['id_prono'] AND $ROW1['participation'] !== 0)
	{
		$moyenne_generale = $ROW1['points'] / $ROW1['participation'];
		$reussite         = $ROW1['points'] / (($ROW1['pts_prono_participation'] + $ROW1['pts_prono_exact']) * $ROW1['participation']) * 100;

		$GENERAL =  '		<tr>
			<td>'.FormatText('Général').'</td>
			<td>'.AfficheClassement($user_id, $gr_champ, 'general').'</td>
			<td>'.$ROW1[0].'</td>
			<td>'.$ROW1[1].'</td>
			<td>'.sprintf('%.2f', $moyenne_generale).'</td>
			<td><span id="GeneralReussite">'.sprintf('%.1f', $reussite).'%</span></td>
			<td>&nbsp;</td>
		</tr>'."\n";
	}
	else
	{
		$GENERAL =  '		<tr>
			<td>'.FormatText('Général').'</td>
			<td>-</td>
			<td>-</td>
			<td>-</td>
			<td>-</td>
			<td>-</td>
			<td>-</td>
		</tr>'."\n";
	}
}
mysql_free_result($REQ1);

// Mensuel en cours
$non_classe = 0;

$REQ2 = mysql_query('SELECT points, participation, id_prono, pts_prono_participation, pts_prono_exact
					FROM phpl_clmnt_pronos, phpl_membres, phpl_gr_championnats
					WHERE type="mensuel_en_cours"
					AND phpl_membres.id=phpl_clmnt_pronos.id_membre
					AND phpl_gr_championnats.id="'.$gr_champ.'"
					AND phpl_clmnt_pronos.id_champ="'.$gr_champ.'"
					AND phpl_membres.id_prono="'.$user_id.'"
					ORDER BY points DESC, participation DESC, phpl_membres.pseudo');

while ($ROW2 = mysql_fetch_array($REQ2))
{
	if ($user_id == $ROW2[2] AND $ROW2[1] !== 0 AND $moyenne_generale !== 0 AND !empty($moyenne_generale))
	{
		$non_classe = 1;

		if (!$ROW2[1] == 0) { $moyenne = $ROW2[0] / $ROW2[1]; }
		else                { $moyenne = 0; }

		$progression = $moyenne / $moyenne_generale * 100;

		if (!(($ROW2[3] + $ROW2[4]) * $ROW2[1]) == 0) { $reussite = $ROW2[0] / (($ROW2[3] + $ROW2[4]) * $ROW2[1]) * 100; }
		else                                          { $reussite = 0; }

		$MENSUEL = '		<tr>
			<td>'.FormatText('Mensuel').'</td>
			<td>'.AfficheClassement($user_id, $gr_champ, 'mensuel_en_cours').'</td>
			<td>'.$ROW2[0].'</td>
			<td>'.$ROW2[1].'</td>
			<td>'.sprintf('%.2f', $moyenne).'</td>
			<td><span id="MensuelReussite">'.sprintf('%.1f', $reussite).'%</span></td>
			<td><span id="MensuelProgression">'.sprintf('%.1f', $progression).'%</span></td>
		</tr>'."\n";
	}
	elseif ($non_classe != 1)
	{
		$MENSUEL = '<tr><td colspan="7">'.FormatText(PRONO_CLASSEMENT_NON_CLASSE).'</td></tr>';

		$non_classe = 1;
	}
	else
	{
		$MENSUEL =  '		<tr>
			<td>'.FormatText('Mensuel').'</td>
			<td>-</td>
			<td>-</td>
			<td>-</td>
			<td>-</td>
			<td>-</td>
			<td>-</td>
		</tr>'."\n";

	}
}
mysql_free_result($REQ2);

// Mensuel 30 derniers jours
$REQ3 = mysql_query('SELECT points, participation, id_prono, pts_prono_participation, pts_prono_exact
					FROM phpl_clmnt_pronos, phpl_membres, phpl_gr_championnats
					WHERE type="mensuel_30_jours"
					AND phpl_membres.id=phpl_clmnt_pronos.id_membre
					AND phpl_gr_championnats.id="'.$gr_champ.'"
					AND phpl_membres.id_prono="'.$user_id.'"
					ORDER BY points DESC, participation DESC, phpl_membres.pseudo');

while ($ROW3 = mysql_fetch_array($REQ3))
{
	if ($user_id == $ROW3[2] AND $ROW3[1] !== 0 AND $moyenne_generale !== 0 AND !empty($moyenne_generale))
	{
		$moyenne     = $ROW3[0] / $ROW3[1];
		$progression = $moyenne / $moyenne_generale * 100;

		if (!(($ROW3[3] + $ROW3[4]) * $ROW3[1]) == 0) { $reussite = $ROW3[0] / (($ROW3[3] + $ROW3[4]) * $ROW3[1]) * 100;}
		else                                          { $reussite = 0; }

		$MENSUEL30 = '		<tr>
			<td>'.FormatText('30 derniers jours').'</td>
			<td>'.AfficheClassement($user_id, $gr_champ, 'mensuel_30_jours').'</td>
			<td>'.$ROW3[0].'</td>
			<td>'.$ROW3[1].'</td>
			<td>'.sprintf('%.2f', $moyenne).'</td>
			<td><span id="Mensuel30Reussite">'.sprintf('%.1f', $reussite).'%</span></td>
			<td><span id="Mensuel30Progression">'.sprintf('%.1f', $progression).'%</span></td>
		</tr>'."\n";
	}
	else
	{
		$MENSUEL30 =  '		<tr>
			<td>'.FormatText('30 derniers jours').'</td>
			<td>-</td>
			<td>-</td>
			<td>-</td>
			<td>-</td>
			<td>-</td>
			<td>-</td>
		</tr>'."\n";

	}
}
mysql_free_result($REQ3);

// Hebdomadaire
$REQ4 = mysql_query('SELECT points, participation, id_prono, pts_prono_participation, pts_prono_exact
					FROM phpl_clmnt_pronos, phpl_membres, phpl_gr_championnats
					WHERE type="hebdo"
					AND phpl_membres.id=phpl_clmnt_pronos.id_membre
					AND phpl_gr_championnats.id="'.$gr_champ.'"
					AND phpl_membres.id_prono="'.$user_id.'"
					ORDER BY points DESC, participation DESC, phpl_membres.pseudo');

while ($row = mysql_fetch_array($REQ4))
{ 
	if ($user_id == $row[2] AND $row[1] !== 0 AND $moyenne_generale !== 0 AND !empty($moyenne_generale))
	{
		if (!$row[1] == 0) { $moyenne = $row[0] / $row[1]; }
		else               { $moyenne = 0; }

		$progression = $moyenne / $moyenne_generale * 100;

		if (!(($row[3] + $row[4]) * $row[1]) == 0) { $reussite = $row[0] / (($row[3] + $row[4]) * $row[1]) * 100;}
		else                                       { $reussite = 0; }

		$HEBDO = '		<tr>
			<td>'.FormatText('Hebdo').'</td>
			<td>'.AfficheClassement($user_id, $gr_champ, 'hebdo').'</td>
			<td>'.$row[0].'</td>
			<td>'.$row[1].'</td>
			<td>'.sprintf('%.2f', $moyenne).'</td>
			<td><span id="HebdoReussite">'.sprintf('%.1f', $reussite).'%</span></td>
			<td><span id="HebdoProgression">'.sprintf('%.1f', $progression).'%</span></td>
		</tr>'."\n";
	}
	else
	{
		$HEBDO =  '		<tr>
			<td>'.FormatText('Hebdo').'</td>
			<td>-</td>
			<td>-</td>
			<td>-</td>
			<td>-</td>
			<td>-</td>
			<td>-</td>
		</tr>'."\n";

	}
}  
mysql_free_result($REQ4);

?>

<table class="Large100P">
	<thead>
		<tr>
			<th><?php echo FormatText('Type'); ?></th>
			<th><?php echo FormatText('Class.'); ?></th>
			<th><?php echo FormatText('Pts'); ?></th>
			<th><?php echo FormatText('Part.'); ?></th>
			<th><?php echo FormatText('Moy.'); ?></th>
			<th><?php echo FormatText(PRONO_RESULTATS_REUSSITE); ?></th>
			<th><?php echo FormatText(PRONO_RESULTATS_PROGR); ?></th>
		</tr>
	</thead>
	<tbody>
<?php echo $GENERAL; ?>
<?php echo $MENSUEL; ?>
<?php echo $MENSUEL30; ?>
<?php echo $HEBDO; ?>
	</tbody>
</table>

<?php

}

?>