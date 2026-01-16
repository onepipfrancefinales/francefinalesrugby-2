<?php

$id_buteur_supp = isset($_REQUEST['id_buteur_supp']) ? $_REQUEST['id_buteur_supp'] : NULL;

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

if ($action3 == 2)
{
	$a = 0;
	$b = 0;
	$x = 0;

	while ($x < $nb_matchs)
	{
		$r = 0;
		$y = 0;

		while ($nbdom[$x] > $y)
		{
			if (!empty($nbdom[$x]) AND !($nbdom[$x] == 0) AND !($joueursDom[$a] == 0))
			{
				$REQ1 = @mysql_query('INSERT INTO phpl_buteurs (id_match, buts, id_effectif) VALUES ('.$matchs_id[$x].', "1", '.$joueursDom[$a].')');
			}

			$a++;
			$y++;
		}

		while ($nbext[$x] > $r)
		{
			if (!empty($nbext[$x]) AND !($nbext[$x] == 0) AND !($joueursExt[$b] == 0))
			{
				$REQ2 = @mysql_query('INSERT INTO phpl_buteurs (id_match, buts, id_effectif) VALUES ('.$matchs_id[$x].', "1", '.$joueursExt[$b].')');
			}

			$b++;
			$r++;
		}

		$x++;
	}
}

if ($action4 == 'supp')
{
	$REQ = @mysql_query('DELETE FROM phpl_buteurs WHERE id='.$id_buteur_supp);

	if ($REQ)
	{
		echo InfoReqSql('InfDel', 1, 'highlight', 'check', ADMIN_TIT_DEL1);
	}
	else
	{
		echo InfoReqSql('InfDel', 0, 'error', 'alert', GestErreur(ADMIN_TIT_DEL2, $REQ));
	}
}

journees($champ, $numero, $action, $annee);

$REQ1 = mysql_query('SELECT phpl_clubs.nom, CLEXT.nom, phpl_matchs.buts_dom, phpl_matchs.buts_ext, phpl_matchs.id, phpl_equipes.id, EXT.id, date_reelle
         FROM phpl_clubs, phpl_clubs AS CLEXT, phpl_matchs, phpl_journees, phpl_equipes, phpl_equipes AS EXT
         WHERE phpl_clubs.id = phpl_equipes.id_club
         AND CLEXT.id = EXT.id_club
         AND phpl_equipes.id = phpl_matchs.id_equipe_dom
         AND EXT.id = phpl_matchs.id_equipe_ext
         AND phpl_matchs.id_journee = phpl_journees.id
         AND phpl_journees.numero='.$numero.'
         AND phpl_journees.id_champ='.$champ.'
         AND CLEXT.nom!="exempte"
         AND phpl_clubs.nom!="exempte"
         ORDER BY date_reelle');

$NBR_MATCH = mysql_num_rows($REQ1);

if ($NBR_MATCH > 0)
{

?>

<form method="post" action="">
<table class="Large100P ui-widget ui-widget-content">
	<thead>
		<tr class="ui-widget-header">
			<th class="Large20P"><?php echo DOMICILE; ?></th>
			<th class="Large20P"><?php echo BUTEUR; ?></th>
			<th class="Large20P">&nbsp;</th>
			<th class="Large20P"><?php echo BUTEUR; ?></th>
			<th class="Large20P"><?php echo EXTERIEUR; ?></th>
		</tr>
	</thead>
	<tbody>
<?php

$e = 0;

while($row_menu = mysql_fetch_array($REQ1))
{
	$query3="SELECT phpl_joueurs.nom, phpl_joueurs.prenom, phpl_buteurs.id
          FROM phpl_buteurs, phpl_joueurs, phpl_effectif
          WHERE phpl_effectif.id_joueur=phpl_joueurs.id
          AND phpl_effectif.id=phpl_buteurs.id_effectif
          AND phpl_effectif.id_equipe=$row_menu[5]
          AND phpl_buteurs.id_match='$row_menu[4]'";
	$result3=mysql_query($query3);

	$nb_buteurs  = mysql_num_rows($result3);
	$row_menu[0] = stripslashes($row_menu[0]);

	if (($e%2) == 0) { $class = 'ligne1'; } else { $class = 'ligne2'; }

	echo '		<tr class="'.$class.'">
			<td class="TxtRight">'.$row_menu[0].'</td>
			<td class="TxtRight">
				<input type="hidden" name="nbdom[]" value="'.$row_menu[2].'" />
				<input type="hidden" name="matchs_id[]" value="'.$row_menu[4].'" />
				<input type="hidden" name="butd[]" value="1" />
				<input type="hidden" name="butv[]" value="1" />
				<input type="hidden" name="nbext[]" value="'.$row_menu[3].'" />'."\n";

	$x = 0;

	while ($x < $row_menu[2])
	{  
		$queryJ = "SELECT phpl_effectif.id, phpl_effectif.id_equipe, phpl_joueurs.nom, phpl_joueurs.prenom
                         FROM phpl_joueurs, phpl_clubs, phpl_equipes, phpl_effectif
                         WHERE phpl_effectif.id_equipe=phpl_equipes.id
                         AND phpl_equipes.id_club=phpl_clubs.id
                         AND phpl_equipes.id=$row_menu[5]
                         AND phpl_joueurs.id=phpl_effectif.id_joueur
                         ORDER BY phpl_joueurs.nom, phpl_joueurs.prenom";
		$resultJ = mysql_query($queryJ);

		if ($x < ($row_menu[2] - $nb_buteurs))
		{
			echo '				<select name="joueursDom[]" class="Large200M">
					<option value="0">&nbsp;</option>'."\n";

			while ($rowJ = mysql_fetch_array($resultJ))
			{
				$joueurs_nom    = stripslashes($rowJ[2]);
				$joueurs_prenom = stripslashes($rowJ[3]);

				echo '					<option value="'.$rowJ[0].'">'.$joueurs_nom.' '.$joueurs_prenom.'</option>'."\n";
			}

			echo '				</select><br />'."\n";
		}
		else
		{
			echo '				<input type="hidden" name="joueursDom[]" value="">'."\n";
		}

		$x++;
	}

	while ($row3 = mysql_fetch_array($result3))
	{
		echo '<div class="DeleteRight"><a href="?page=championnat&action=buteurs&action4=supp&champ='.$champ.'&annee='.$annee.'&numero='.$numero.'&id_buteur_supp='.$row3[2].'" class="Large200M"><span>'.stripslashes($row3[0].' '.$row3[1]).'</span></a></div>'."\n";
	}

	echo '			</td>
			<td class="TxtCenter">'.$row_menu[2].' - '.$row_menu[3].'</td>
			<td class="TxtLeft">'."\n";

	$y = 0;

	while ($y < $row_menu[3])
	{
		$query3="SELECT phpl_joueurs.nom, phpl_joueurs.prenom, phpl_buteurs.id
          FROM phpl_buteurs, phpl_joueurs, phpl_effectif
          WHERE phpl_effectif.id_joueur=phpl_joueurs.id
          AND phpl_effectif.id=phpl_buteurs.id_effectif
          AND phpl_effectif.id_equipe=$row_menu[6]
          AND phpl_buteurs.id_match=$row_menu[4]";
		$result3 = mysql_query($query3);

		$nb_buteurs = mysql_num_rows($result3);

		$queryJ = "SELECT phpl_effectif.id, phpl_effectif.id_equipe, phpl_joueurs.nom, phpl_joueurs.prenom
                  FROM phpl_joueurs, phpl_clubs, phpl_equipes, phpl_effectif
                  WHERE phpl_effectif.id_equipe=phpl_equipes.id
                  AND phpl_equipes.id_club=phpl_clubs.id
                  AND phpl_effectif.id_joueur=phpl_joueurs.id
                  AND phpl_effectif.id_equipe=$row_menu[6] ORDER BY phpl_joueurs.nom ASC, phpl_joueurs.prenom ASC";
		$resultJ = mysql_query($queryJ);

		if ($y < ($row_menu[3] - $nb_buteurs))
		{
			echo '<select name="joueursExt[]" class="Large200M">';
			echo "<option value=\"0\"></option>";

			while ($rowJ = mysql_fetch_array($resultJ))
			{
				$joueurs_nom    = stripslashes($rowJ[2]);
				$joueurs_prenom = stripslashes($rowJ[3]);

				echo "<option value=\"$rowJ[0]\">$joueurs_nom $joueurs_prenom</option>";
			}

			echo "</select><br />";
		}
		else
		{
			echo "<input type=\"hidden\" name=\"joueursExt[]\" value=\"\">";
		}

		$y++;
	}

	while ($row3 = mysql_fetch_array($result3))
	{
		echo '<div class="DeleteLeft"><a href="?page=championnat&action=buteurs&action4=supp&champ='.$champ.'&annee='.$annee.'&numero='.$numero.'&id_buteur_supp='.$row3[2].'" class="Large200M"><span>'.stripslashes($row3[0].' '.$row3[1]).'</span></a></div>'."\n";
	}

	$e++;

	echo '			</td>
			<td class="TxtLeft">'.$row_menu[1].'</td>
		</tr>'."\n";
}

//$query2    = "SELECT phpl_matchs.id FROM phpl_matchs WHERE phpl_matchs.id_journee=$numero";
//$result2   = mysql_query($query2);
$nb_matchs = nb_matchs($numero, $champ);
//$numero    = $numero + 1;

echo '	</tbody>
	<tfoot>
		<tr class="ui-widget-footer">
			<td colspan="5" class="TxtCenter">
				<input type="hidden" name="page" value="championnat" />
				<input type="hidden" name="champ" value="'.$champ.'" />
				<input type="hidden" name="action" value="buteurs" />
				<input type="hidden" name="action3" value="2" />
				<input type="hidden" name="numero" value="'.$numero.'" />
				<input type="hidden" name="journee_suivante" value="1" />
				<input type="hidden" name="nb_matchs" value="'.$nb_matchs.'" />
				<input type="submit" value="'.ENVOI.'">
			</td>
		</tr>
	</tfoot>
</table>
</form>'."\n\n";
}
else
{
	echo InfoReqSql('InfTitMatch', 0, 'highlight', 'alert', 'Aucun matchs renseignés pour cette journée. Allez dans la rubrique [ <a href="index.php?page=championnat&amp;action=matchs&amp;champ='.$champ.'&amp;annee='.$annee.'&amp;numero='.$numero.'">Matchs</a> ]');
}

mysql_free_result($REQ1);

?>