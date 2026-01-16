<table class="Large50P ui-widget ui-widget-content">
	<thead>
		<tr class="ui-widget-header">
			<th><?php echo ADMIN_COHERENCE_TITRE; ?></th>
		</tr>
	</thead>
	<tbody>
<?php

if ($coherence == 1)
{
	// CHECK SUM DU CHAMPIONNAT
	//select sum equipes
	$query     = "SELECT SUM(id) FROM phpl_equipes WHERE id_champ='$champ'";
	$check_sum = mysql_fetch_array($result = mysql_query($query));
	$sumsum    = $check_sum[0];

	echo '		<tr>
			<td>CHEKSUM = '.$sumsum.'</td>
		</tr>'."\n";
	
	$x = 1;
	$nb_journees = (nb_equipes($champ) * 2) - 2;

	while($x <= $nb_journees)
	{
		//select sum des matchs dom et matchs ext
		$query ="SELECT SUM(phpl_matchs.id_equipe_dom), SUM(phpl_matchs.id_equipe_ext) FROM phpl_matchs, phpl_journees WHERE phpl_matchs.id_journee=phpl_journees.id AND phpl_journees.id_champ='$champ' AND phpl_journees.numero='$x' ";
		$result = mysql_query($query);
		$sum    = mysql_fetch_array($result);

		$sum_day = $sum[0] + $sum[1];

		echo '		<tr>
			<td>MATCH_SUM = '.$sum_day.' ';

		$query = "SELECT COUNT(DISTINCT phpl_matchs.id_equipe_dom), COUNT(DISTINCT phpl_matchs.id_equipe_ext) FROM phpl_matchs, phpl_journees WHERE phpl_matchs.id_journee=phpl_journees.id AND phpl_journees.id_champ='$champ' AND phpl_journees.numero='$x'";
		$result = mysql_query($query);

		while($row = mysql_fetch_array($result))
		{
			//si la sum des matchs dom = la sum des matchs ext et  nombre de match /2 affiche OK
			if ($row[0] == $row[1] AND $row[0] == (nb_equipes($champ) / 2) AND ($sum[0] + $sum[1] == $sumsum))
			{		
				echo ADMIN_COHERENCE_MSG2.' '.$x.' '.ADMIN_COHERENCE_MSG3.'</td>
		</tr>'."\n";

				$incoherent = 0;
			}
			else 
			{
				echo ADMIN_COHERENCE_MSG2.' '.$x.' '.ADMIN_COHERENCE_MSG4.'</td>
		</tr>'."\n";

				$incoherent = 1;
			}
		}

		$x++;
	}

	// select sum des matchs dom et matchs ext
	$query = "SELECT SUM(phpl_matchs.id_equipe_dom), SUM(phpl_matchs.id_equipe_ext) FROM phpl_matchs, phpl_journees WHERE phpl_matchs.id_journee=phpl_journees.id AND phpl_journees.id_champ='$champ'";
	$result = mysql_query($query);
	$sum    = mysql_fetch_array($result);
	$sumsum = $sum[0];

	$query = "SELECT SUM(phpl_matchs.id_equipe_dom), SUM(phpl_matchs.id_equipe_ext) FROM phpl_matchs, phpl_journees WHERE  phpl_journees.id_champ='$champ' AND phpl_matchs.id_journee=phpl_journees.id ";
	$result = mysql_query($query);

	while($row = mysql_fetch_array($result))
	{
		// si la sum des matchs dom = la sum des matchs ext et la somme des 2 nombre de match dom *2 affiche OK
		if ($row[0] == $row[1] AND ($sumsum * 2) == ($row[0] + $row[1]) AND !$incoherent == 1)
		{
		echo ADMIN_COHERENCE_MSG5;
		echo "<br />"; 
		}
		// si la  sum des matchs dom = pas la sum des matchs ext et pas la somme des 2 nombre de match dom *2 affiche erreur
		else
		{
			echo '<tr><td class="Alerte">CHECKSUM = '.$sumsum.' &bull; ALLER = '.$row[0].' &bull; RETOUR = '.$row[1].'<br />'.ADMIN_COHERENCE_MSG6.'</td></tr>'."\n";
		}
	}

		//affiche le nombre de match dom et ext
		$query = mysql_query('SELECT phpl_matchs.id_equipe_dom AS DOM, COUNT(*) AS ct
							FROM phpl_matchs, phpl_journees
							WHERE phpl_journees.id_champ='.$champ.'
							AND phpl_matchs.id_journee=phpl_journees.id
							GROUP BY DOM');

		while($row = mysql_fetch_array($query))
		{
			if ($row[1] <> $nb_journees / 2) 
			{
				echo '<tr><td>'.stripslashes(utf8_decode(nom_club($row[0]).' joue '.$row[1].' fois à domicile ?')).'</td></tr>'."\n";
			}
		}
		mysql_free_result($query);

		$query = mysql_query('SELECT phpl_matchs.id_equipe_ext AS DOM, COUNT(*) AS ct
							FROM phpl_matchs, phpl_journees
							WHERE phpl_journees.id_champ='.$champ.'
							AND phpl_matchs.id_journee=phpl_journees.id
							GROUP BY DOM');

		while($row = mysql_fetch_array($query))
		{
			if ($row[1] <> $nb_journees / 2)
			{
				echo '<tr><td>'.stripslashes(utf8_decode(nom_club($row[0]).' joue '.$row[1].' fois à l\'extérieur ?')).'</td></tr>'."\n";
			}
		}
		mysql_free_result($query);
	}
	else 
	{
		echo '		<tr>
			<td><a href="?page=championnat&action=matchs&champ='.$champ.'&coherence=1&annee='.$annee.'">'.ADMIN_COHERENCE_MSG7.'</a></td>
		</tr>'."\n";
	}

?>
	</tbody>
</table>