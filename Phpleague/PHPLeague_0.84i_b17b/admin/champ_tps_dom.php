<?php

if (empty($numero))
{
	$requete = "SELECT MAX(phpl_journees.numero) 
			FROM phpl_journees, phpl_matchs 
			WHERE phpl_journees.id=phpl_matchs.id_journee
			AND buts_dom IS NOT NULL
			AND phpl_journees.id_champ='$champ'";

	$resultats = mysql_query($requete);

	while ($row = mysql_fetch_array($resultats))
	{
		$numero = $row[0];
	}

	if ($numero == '') { $numero = 1; }
}

if ($action3 == 2)
{
	foreach ($_REQUEST['id22'] AS $id => $id22) 
	{
		$tps = ($_REQUEST['tps'][$id]);

		$REQ = @mysql_query('UPDATE phpl_compo SET tps='.$tps.' WHERE id='.$id22);
	}

	if ($REQ)
	{
		echo InfoReqSql('InfUpdTps', 1, 'highlight', 'check', ADMIN_TPS_MAJ1);
	}
	else
	{
		echo InfoReqSql('InfUpdTps', 0, 'error', 'alert', GestErreur(ADMIN_TPS_MAJ3, $REQ));
	}
}

journees($champ, $numero, 'tps', $annee);

?>
<form method="post" action="">
	<table class="Large100P ui-widget ui-widget-content">
		<thead>
			<tr class="ui-widget-header">
				<th class="Large20P TxtRight"><?php echo DOMICILE; ?></th>
				<th class="Large25P"><?php echo COMPTPS; ?></th>
				<th class="Large10P">&nbsp;</th>
				<th class="Large25P"><?php echo COMPTPS; ?></th>
				<th class="Large20P TxtLeft"><?php echo EXTERIEUR; ?></th>
			</tr>
		</thead>
		<tbody>
<?php

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

$result_menu = mysql_query($query_menu);
 
$e = 0;

while($row_menu = mysql_fetch_array($result_menu)) 
{
	$query3 = "SELECT phpl_joueurs.nom, phpl_joueurs.prenom, phpl_compo.id, phpl_compo.id_effectif, phpl_compo.tps, phpl_compo.matchs, phpl_compo.remp
			FROM phpl_compo, phpl_joueurs, phpl_effectif
			WHERE phpl_effectif.id_joueur=phpl_joueurs.id
			AND phpl_effectif.id=phpl_compo.id_effectif
			AND phpl_effectif.id_equipe='$row_menu[5]'
			AND phpl_compo.id_match='$id_match'
			ORDER BY phpl_compo.remp ASC, phpl_joueurs.nom ASC, phpl_joueurs.prenom ASC";

	$result3     = mysql_query($query3);
	$nb_buteurs  = mysql_num_rows($result3);
	$row_menu[0] = stripslashes($row_menu[0]);
	//$id = stripslashes($row3[2]);
	//$id2 = stripslashes($row3[1]);

	if (($e%2) == 0) { $class = 'ligne1'; } else { $class = 'ligne2'; }

	echo '			<tr class="'.$class.'">
				<td class="TxtRight">'.$row_menu[0].'</td>
				<td class="TxtRight">'."\n";

	$i = 0;

	while ($row3 = mysql_fetch_array($result3))
	{
		$joueurs_nom    = stripslashes($row3[0]);
		$joueurs_prenom = stripslashes($row3[1]);
		$tps            = stripslashes($row3[4]);

		echo "<input type=\"hidden\" name=\"id22[$i]\" value=\"$row3[2]\" />";

		if ($row3[5] == 1)
		{
			echo "<label for=\"tps[$i]\"><strong>$joueurs_nom $joueurs_prenom [ T ]</strong></label>&nbsp;<input type=\"text\" name=\"tps[$i]\" id=\"tps[$i]\" size=\"1\" maxlength=\"3\" value=\"$tps\" style=\"float: right;\" class=\"TxtCenter\" /><br /><div style=\"clear: both; margin-bottom: 3px;\"></div>";
		}
		else
		{
			echo "<label for=\"tps[$i]\">$joueurs_nom $joueurs_prenom [ R ]</label>&nbsp;<input type=\"text\" name=\"tps[$i]\" id=\"tps[$i]\" size=\"1\" maxlength=\"3\" value=\"$tps\" style=\"float: right;\" class=\"TxtCenter\" /><br /><div style=\"clear: both; margin-bottom: 3px;\"></div>";
		}

		$i++;
	}

	echo '</td>';			   
	echo "<td class=\"TxtCenter\">$row_menu[2] - $row_menu[3]</td>";
	echo "<td>";
 
	$query3 = "SELECT phpl_joueurs.nom, phpl_joueurs.prenom, phpl_compo.id, phpl_compo.id_effectif, phpl_compo.tps, phpl_compo.matchs
			FROM phpl_compo, phpl_joueurs, phpl_effectif
			WHERE phpl_effectif.id_joueur=phpl_joueurs.id
			AND phpl_effectif.id=phpl_compo.id_effectif
			AND phpl_effectif.id_equipe=$row_menu[6]
			AND phpl_compo.id_match=$id_match
			ORDER BY phpl_compo.remp ASC, phpl_joueurs.nom ASC, phpl_joueurs.prenom ASC";
          //AND phpl_compo.id_match=$row_menu[4]";
	$result3 = mysql_query($query3);

	$y = 0;

	while ($row3 = mysql_fetch_array($result3))
	{
		$joueurs_nom    = stripslashes($row3[0]);
		$joueurs_prenom = stripslashes($row3[1]);
		$tps            = stripslashes($row3[4]);  

		if ($row3[5] == 1)
		{
			echo "<input type=\"text\" name=\"tpsext[$y]\" id=\"tpsext[$y]\" size=\"1\" value=\"$tps\" style=\"float: left;\" class=\"TxtCenter\" disabled=\"disabled\" />&nbsp;<label for=\"tpsext[$y]\"><strong>[ T ] $joueurs_nom $joueurs_prenom</strong></label><br /><div style=\"clear: both; margin-bottom: 3px;\"></div>";
		}
		else
		{
			echo "<input type=\"text\" name=\"tpsext[$y]\" id=\"tpsext[$y]\" size=\"1\" value=\"$tps\" style=\"float: left;\" class=\"TxtCenter\" disabled=\"disabled\" />&nbsp;<label for=\"tpsext[$y]\">[ R ] $joueurs_nom $joueurs_prenom</label><br /><div style=\"clear: both; margin-bottom: 3px;\"></div>";
		}		

		$y++;
	}

	echo  "<td>$row_menu[1]";

	$e++;
}

//$query2    = "SELECT id FROM phpl_matchs WHERE id_journee='$numero'";
//$result2   = mysql_query($query2);
$nb_matchs = nb_matchs($numero, $champ);
//$numero12  = $numero + 1;

echo '				</td>
			</tr>
		</tbody>
		<tfoot>
			<tr>
				<td colspan="5" class="TxtCenter">
					<input type="hidden" name="page" value="championnat" />
					<input type="hidden" name="champ" value="'.$champ.'" />
					<input type="hidden" name="annee" value="'.$annee.'" />
					<input type="hidden" name="action3" value="2" />
					<input type="hidden" name="id_journee" value="'.$id_journee.'" />
					<input type="hidden" name="numero" value="'.$numero.'" />
					<input type="hidden" name="journee_suivante" value="1" />
					<input type="hidden" name="nb_matchs" value="'.$nb_matchs.'" />
					<input type="submit" value="'.ENVOI.'" />
				</td>
			</tr>
		</tfoot>
	</table>
</form>'."\n\n";

?>