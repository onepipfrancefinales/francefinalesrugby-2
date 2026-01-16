<?php

$debut = isset($_REQUEST['debut']) ? $_REQUEST['debut'] : NULL;

if (VerifSession($user_pseudo, $user_mdp) == 1)
{
	if     ($gr_champ == 1) { $j = 10; }
	elseif ($gr_champ == 2) { $j = 8; }
	elseif ($gr_champ == 3) { $j = 7; }
	else                    { $j = 6; }

	if (empty($debut) OR $debut == 0)
	{
		$debut = 0;
		$apres = 1;
	}

	$nb_matchs = $j; 
	$fin       = $debut + $nb_matchs; 

	if ($debut == 0)
	{
		$suiv = '?page=pronos&amp;gr_champ='.$gr_champ;
	} 
	else
	{
		$debut1 = $debut - $nb_matchs;
		$suiv   = '?page=derniers_pronos&amp;debut='.$debut1.'&amp;gr_champ='.$gr_champ;
	} 

?>

<table class="Large100P">
	<tbody>
		<tr>
			<td class="TxtCenter">
				<< <a href="?page=derniers_pronos&amp;debut=<?php echo $fin.'&amp;gr_champ='.$gr_champ; ?>"><?php echo FormatText(PRONO_GRILLE_PRECEDENT); ?></a>&nbsp;
				<a href="<?php echo $suiv; ?>"><?php echo FormatText(PRONO_GRILLE_SUIVANT); ?></a> >>
			</td>
		</tr>
	</tbody>
</table>

<table class="Large100P">
	<thead>
		<tr>
			<th><?php echo FormatText(ADMIN_COHERENCE_MSG2); ?></th>
			<th><?php echo FormatText(DATE); ?></th>
			<th>&nbsp;</th>
			<th><?php echo FormatText(PRONO_GRILLE_PRONO); ?></th>
			<th>&nbsp;</th>
			<th><?php echo FormatText(PRONO_GRILLE_SCORE); ?></th>
			<th>&nbsp;</th>
			<th><?php echo FormatText(PRONO_CLASSEMENT_POINTS); ?></th>
		</tr>
	</thead>
	<tbody>
<?php
//fin modif


	$query = "SELECT phpl_clubs.nom, CLEXT.nom, phpl_matchs.buts_dom, phpl_matchs.buts_ext, phpl_matchs.id, phpl_matchs.date_reelle, phpl_journees.numero, pts_prono_exact, pts_prono_participation
		FROM phpl_clubs, phpl_clubs AS CLEXT, phpl_matchs, phpl_journees, phpl_equipes, phpl_equipes AS EXT, phpl_gr_championnats
		WHERE phpl_clubs.id=phpl_equipes.id_club
		AND CLEXT.id=EXT.id_club 
		AND phpl_equipes.id=phpl_matchs.id_equipe_dom
		AND EXT.id=phpl_matchs.id_equipe_ext
		AND phpl_matchs.id_journee=phpl_journees.id
		AND phpl_journees.id_champ=phpl_gr_championnats.id_champ
		AND phpl_gr_championnats.id='$gr_champ'
		AND phpl_matchs.buts_dom IS NOT NULL
		AND phpl_matchs.buts_ext IS NOT NULL
		AND phpl_clubs.nom!='exempte'
		AND CLEXT.nom!='exempte'
		ORDER BY phpl_matchs.date_reelle DESC, phpl_clubs.nom DESC
		LIMIT $debut, $fin";

	$i=0;

	$result = mysql_query($query);

	if (mysql_num_rows($result) == 0)
	{
		echo '<tr><td colspan="8" class="TxtCenter">'.FormatText('Journée inexistante').'</td></tr>';
	}

	//while ($row=mysql_fetch_array($result) and $i<10)
	while ($row=mysql_fetch_array($result))
	{
		$clubs_nom  = stripslashes($row[0]);
		$clubs_nom1 = stripslashes($row[1]);
		$query2     = "SELECT pronostic FROM phpl_pronostics, phpl_membres WHERE phpl_pronostics.id_match='$row[4]' AND phpl_membres.id=phpl_pronostics.id_membre AND phpl_membres.id_prono='$user_id'";
		$result2    = mysql_query($query2) or die ("probleme " .mysql_error());
		$nb_pronos  = mysql_num_rows($result2 );

		if ($nb_pronos == '0') { $prono = '0'; }
		{
			while ($row2 = mysql_fetch_array($result2))
			{
				$prono = $row2['0'];

				if ($row2['0'] == '') { $prono = '0'; }
			}
		}

		$date         = format_date_fr($row[5]);
		$pronos_exact = $row['pts_prono_exact'] + $row['pts_prono_participation'];

	if     ($prono == '0')						  { $IMG = '&nbsp;'; $PTS = 0; }
	elseif ($row[2] > $row[3] AND $prono == 1)    { $IMG = IMG_TRUE; $PTS = '<b>'.$pronos_exact.'</b>'; }
	elseif ($row[2] == $row[3] AND $prono == 'N') { $IMG = IMG_TRUE; $PTS = '<b>'.$pronos_exact.'</b>'; }
	elseif ($row[2] < $row[3] AND $prono == 2)    { $IMG = IMG_TRUE; $PTS = '<b>'.$pronos_exact.'</b>'; }
	else										  { $IMG = IMG_FALSE; $PTS = $row['pts_prono_participation']; }

	if ($prono == 1)   { $IMG_PRONO = IMG_B.' '.IMG_N.' '.IMG_2; }
	if ($prono == 'N') { $IMG_PRONO = IMG_1.' '.IMG_B.' '.IMG_2; }
	if ($prono == 2)   { $IMG_PRONO = IMG_1.' '.IMG_N.' '.IMG_B; }
	if ($prono == '0') { $IMG_PRONO = IMG_1.' '.IMG_N.' '.IMG_2; }

		echo '		<tr>
			<td class="TxtCenter">'.$row[6].'</td>
			<td class="TxtCenter">'.$date.'</td>
			<td class="TxtRight">'.$clubs_nom.'</td>
			<td class="TxtCenter">'.$IMG_PRONO.'</td>
			<td>'.$clubs_nom1.'</td>
			<td class="TxtCenter">'.$row[2].' - '.$row[3].'</td>
			<td class="TxtRight">'.$IMG.'</td>
			<td class="TxtCenter">'.$PTS.'</td>
		</tr>'."\n";

  $i++;
}  

?>
	</tbody>
</table>

<?php

}

?>