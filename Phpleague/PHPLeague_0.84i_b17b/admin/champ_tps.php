<?php

if (empty($numero))
{
	$REQ1 = mysql_query('SELECT MAX(phpl_journees.numero)
						 FROM phpl_journees, phpl_matchs
						 WHERE phpl_journees.id=phpl_matchs.id_journee
						 AND buts_dom IS NOT NULL
						 AND phpl_journees.id_champ='.$champ);

	while ($ROW1 = mysql_fetch_array($REQ1))
	{
		$numero = $ROW1[0];
	}
	mysql_free_result($REQ1);

	if (empty($numero)) { $numero = 1; }
}

if (empty($numero)) { $numero = 1; }

journees($champ, $numero, $action, $annee);

$query_menu = "SELECT phpl_clubs.nom, CLEXT.nom, phpl_matchs.buts_dom, phpl_matchs.buts_ext, phpl_matchs.id, phpl_equipes.id, EXT.id, date_reelle
	FROM phpl_clubs, phpl_clubs as CLEXT, phpl_matchs, phpl_journees, phpl_equipes, phpl_equipes as EXT
	WHERE phpl_clubs.id = phpl_equipes.id_club
	AND CLEXT.id = EXT.id_club
	AND phpl_equipes.id = phpl_matchs.id_equipe_dom
	AND EXT.id = phpl_matchs.id_equipe_ext
	AND phpl_matchs.id_journee = phpl_journees.id
	AND phpl_journees.numero = '$numero'
	AND phpl_journees.id_champ = '$champ'
	AND CLEXT.nom!='exempte'
	AND phpl_clubs.nom!= 'exempte'
	ORDER BY date_reelle";

$result_menu = mysql_query($query_menu) or die (mysql_error());

$NBR1 = mysql_num_rows($result_menu);

if ($NBR1 > 0)
{
	while($row_menu = mysql_fetch_array($result_menu)) 
	{  
		$query3 = "SELECT phpl_joueurs.nom, phpl_joueurs.prenom, phpl_compo.id, phpl_compo.id_effectif, phpl_compo.tps, phpl_compo.matchs, phpl_compo.remp, phpl_compo.id_match
		FROM phpl_compo, phpl_joueurs, phpl_effectif
		WHERE phpl_effectif.id_joueur=phpl_joueurs.id
		AND phpl_effectif.id=phpl_compo.id_effectif
		AND phpl_effectif.id_equipe='$row_menu[5]'
		AND phpl_compo.id_match='$row_menu[4]'
		ORDER BY phpl_compo.remp ASC, phpl_joueurs.nom ASC, phpl_joueurs.prenom ASC";

		$result3     = mysql_query($query3);
		$nb_buteurs  = mysql_num_rows($result3);
		$row_menu[0] = stripslashes($row_menu[0]);
		$id_match    = stripslashes($row_menu[4]);

		if ($nb_buteurs > 0)
		{
			$GEST = '<div class="Temps"><a href="index.php?page=championnat&action=tps_dom&champ='.$champ.'&annee='.$annee.'&id_match='.$id_match.'&numero='.$numero.'"><span>Gestion du temps</span></a></div>'."\n";
		}
		else
		{
			$GEST = '';
		}

?>
	<table class="Large100P ui-widget ui-widget-content">
		<thead>
			<tr class="ui-widget-header">
				<th class="Large20P">&nbsp;</th>
				<th class="Large25P TxtRight"><?php echo $row_menu[0]; ?></th>
				<th class="Large10P"><?php echo $row_menu[2].' - '.$row_menu[3]; ?></th>
				<th class="Large25P TxtLeft"><?php echo $row_menu[1]; ?></th>
				<th class="Large20P">&nbsp;</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td align="right"><?php echo $GEST; ?></td>
				<td align="right">
<?php

	while ($row3 = mysql_fetch_array($result3))
	{
		$JDOM_NOM    = stripslashes($row3[0]);
		$JDOM_PRENOM = stripslashes($row3[1]);
		$tps         = stripslashes($row3[4]);


		if ($row3[5] == 1)
		{
			$B_DEB = '<strong>';
			$B_FIN = '</strong>';
			$ETAT  = 'T';
		}
		else
		{
			$B_DEB = '';
			$B_FIN = '';
			$ETAT  = 'R';
		}

		echo $B_DEB.$JDOM_PRENOM.' '.$JDOM_NOM.' [ '.$ETAT.' &bull; '.$tps.'&#039; ] '.$B_FIN.'<br />'."\n";
	}

			echo '					</td>
					<td class="ligne2">&nbsp;</td>
					<td>'."\n";

			$query3 = "SELECT phpl_joueurs.nom, phpl_joueurs.prenom, phpl_compo.id, phpl_compo.id_effectif, phpl_compo.tps, phpl_compo.matchs
		FROM phpl_compo, phpl_joueurs, phpl_effectif
		WHERE phpl_effectif.id_joueur=phpl_joueurs.id
		AND phpl_effectif.id=phpl_compo.id_effectif
		AND phpl_effectif.id_equipe=$row_menu[6]
		AND phpl_compo.id_match=$row_menu[4]
		ORDER BY phpl_compo.remp ASC, phpl_joueurs.nom ASC, phpl_joueurs.prenom ASC";

	$result3     = mysql_query($query3);
	$nb_buteurs2 = mysql_num_rows($result3);

	if ($nb_buteurs2 > 0)
	{
		$GEST = '<div class="Temps"><a href="index.php?page=championnat&action=tps_ext&champ='.$champ.'&annee='.$annee.'&id_match='.$id_match.'&numero='.$numero.'"><span>Gestion du temps</span></a></div>'."\n";
	}
	else
	{
		$GEST = '';
	}

	while ($row3 = mysql_fetch_array($result3))
	{
		$JEXT_NOM    = stripslashes($row3[0]);
		$JEXT_PRENOM = stripslashes($row3[1]);
		$tps         = stripslashes($row3[4]);

		if ($row3[5] == 1)
		{
			$B_DEB = '<strong>';
			$B_FIN = '</strong>';
			$ETAT  = 'T';
		}
		else
		{
			$B_DEB = '';
			$B_FIN = '';
			$ETAT  = 'R';
		}

		echo $B_DEB.'[ '.$tps.'&#039; &bull; '.$ETAT.' ] '.$JEXT_PRENOM.' '.$JEXT_NOM.$B_FIN.'<br />'."\n";

	}

	echo  '				</td>
				<td>'.$GEST.'</td>
			</tr>
		</tbody>
	</table>'."\n\n";

	}
}
else
{
	echo InfoReqSql('InfTitMatch', 0, 'highlight', 'alert', 'Aucun matchs renseignés pour cette journée. Allez dans la rubrique [ <a href="index.php?page=championnat&amp;action=matchs&amp;champ='.$champ.'&amp;annee='.$annee.'&amp;numero='.$numero.'">Matchs</a> ]');
}

?>