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

if ($action3 == 2)
{
	$a = 0;
	$x = 0;
	$b = 0;

	while ($x < $nb_matchs)
	{
		$y = 0;
		$r = 0;

		if (isset($nbdom[$x]) OR isset($joueursDom[$a]))
		{
			while($nbdom[$x] > $y)
			{
				if (!isset($nbdom[$x]) OR !isset($joueursDom[$a]))
				{
					break;
				}
				else
				{
					if (!isset($nbdom[$x]) == '' AND !isset($nbdom[$x]) == 0 AND !isset($joueursDom[$a]) == 0)
					{
						$REQ1 = @mysql_query('INSERT INTO phpl_compoCJ (id_match, CJ, id_effectif) VALUES ('.$matchs_id[$x].', "1", '.$joueursDom[$a].')');
					}
				}

				$y++;
				$a++;
			}
		}

		if (isset($nbext[$x]) OR isset($joueursExt[$b]))
		{
			while($nbext[$x] > $r)
			{
				if (!isset($nbext[$x]) OR !isset($joueursExt[$b]))
				{
					break;
				}
				else
				{
					if (!isset($nbext[$x]) == '' AND !isset($nbext[$x]) == 0 AND !isset($joueursExt[$b]) == 0)
					{
						$REQ2 = @mysql_query('INSERT INTO phpl_compoCJ (id_match, CJ, id_effectif) VALUES ('.$matchs_id[$x].', "1", '.$joueursExt[$b].')');
					}
				}

				$r++;
				$b++;
			}
		}
		$x++;
	}

	if ($REQ1)
	{
		echo InfoReqSql('InfJoueurDom', 1, 'highlight', 'check', ADMIN_CART_J_DOM_ADD1);
	}
	else
	{
		echo InfoReqSql('InfJoueurDom', 0, 'error', 'alert', GestErreur(ADMIN_CART_J_DOM_ADD3, $REQ1));
	}

	if ($REQ2)
	{
		echo InfoReqSql('InfJoueurExt', 1, 'highlight', 'check', ADMIN_CART_J_EXT_ADD2);
	}
	else
	{
		echo InfoReqSql('InfJoueurExt', 0, 'error', 'alert', GestErreur(ADMIN_CART_J_EXT_ADD4, $REQ2));
	}
}

if ($action4 == 'supp')
{
	$REQ = @mysql_query('DELETE FROM phpl_compoCJ WHERE id='.$id_compoCJ_supp);

	if ($REQ)
	{
		echo InfoReqSql('InfDel', 1, 'highlight', 'check', ADMIN_REMP_DEL1);
	}
	else
	{
		echo InfoReqSql('InfDel', 0, 'error', 'alert', GestErreur(ADMIN_REMP_DEL2, $REQ));
	}
}

journees($champ, $numero, $action, $annee);

$query_menu="SELECT phpl_clubs.nom, CLEXT.nom, phpl_matchs.buts_dom, phpl_matchs.buts_ext, phpl_matchs.id, phpl_equipes.id, EXT.id, date_reelle
         FROM phpl_clubs, phpl_clubs AS CLEXT, phpl_matchs, phpl_journees, phpl_equipes, phpl_equipes AS EXT
         WHERE phpl_clubs.id=phpl_equipes.id_club
         AND CLEXT.id=EXT.id_club
         AND phpl_equipes.id=phpl_matchs.id_equipe_dom
         AND EXT.id=phpl_matchs.id_equipe_ext
         AND phpl_matchs.id_journee=phpl_journees.id
         AND phpl_journees.numero='$numero'
         AND phpl_journees.id_champ='$champ'
         AND CLEXT.nom!='exempte'
         AND phpl_clubs.nom!='exempte'
         ORDER BY date_reelle";
$result_menu=mysql_query($query_menu);
$NBR_MATCH = mysql_num_rows($result_menu);

if ($NBR_MATCH > 0)
{

?>

<form method="post" action="">
	<table class="Large100P ui-widget ui-widget-content">
		<thead>
			<tr class="ui-widget-header">
				<th class="Large20P TxtRight"><?php echo DOMICILE; ?></th>
				<th class="Large25P TxtRight"><?php echo CJ; ?></th>
				<th class="Large10P">&nbsp;</th>
				<th class="Large25P TxtLeft"><?php echo CJ; ?></th>
				<th class="Large20P TxtLeft"><?php echo EXTERIEUR; ?></th>
			</tr>
		</thead>
		<tbody>
<?php

	$e = 0;

	while($row_menu = mysql_fetch_array($result_menu)) 
	{
		$query3 = "SELECT phpl_joueurs.nom, phpl_joueurs.prenom, phpl_compoCJ.id
				FROM phpl_compoCJ, phpl_joueurs, phpl_effectif
				WHERE phpl_effectif.id_joueur=phpl_joueurs.id
				AND phpl_effectif.id=phpl_compoCJ.id_effectif
				AND phpl_effectif.id_equipe=$row_menu[5]
				AND phpl_compoCJ.id_match='$row_menu[4]'";
		$result3 = mysql_query($query3);
		$nb_CJ   = mysql_num_rows($result3);

		$row_menu[0] = stripslashes($row_menu[0]);

		if (($e%2) == 0) { $class = 'ligne1'; } else { $class = 'ligne2'; }

		echo '<tr class="'.$class.'">';
		echo "<td class=\"TxtRight\">$row_menu[0]</td>
			<td class=\"TxtRight\">
				<input type=\"hidden\" name=\"matchs_id[]\" value=\"$row_menu[4]\">
				<input type=\"hidden\" name=\"nbdom[]\" value=\"10\">
				<input type=\"hidden\" name=\"butd[]\" value=\"1\">
				<input type=\"hidden\" name=\"butv[]\" value=\"1\">
				<input type=\"hidden\" name=\"nbext[]\" value=\"10\">";

		$x = 0;

		while ($x < 10)
		{  
			$queryJ = "SELECT phpl_effectif.id, phpl_effectif.id_equipe, phpl_joueurs.nom, phpl_joueurs.prenom
					FROM phpl_joueurs, phpl_clubs, phpl_equipes, phpl_effectif
					WHERE phpl_effectif.id_equipe=phpl_equipes.id
					AND phpl_equipes.id_club=phpl_clubs.id
					AND phpl_equipes.id=$row_menu[5]
					AND phpl_joueurs.id=phpl_effectif.id_joueur
					ORDER BY phpl_joueurs.nom, phpl_joueurs.prenom";
			$resultJ = mysql_query($queryJ);

			if ($x < (10 - $nb_CJ))
			{
				echo "<select name=\"joueursDom[]\" class=\"Large200M\">";
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
				echo "<input type=\"hidden\" name=\"joueursDom[]\" value=\"\">";
			}

			$x++;
		}

		while ($row3 = mysql_fetch_array($result3))
		{
			echo '<div class="DeleteRight"><a href="?page=championnat&champ='.$champ.'&annee='.$annee.'&action=compoCJ&action4=supp&id_journee='.$id_journee.'&numero='.$numero.'&id_compoCJ_supp='.$row3[2].'" class="Large200M"><span>'.stripslashes($row3[0].' '.$row3[1]).'</span></a></div>'."\n";
		}

		echo "</td><td class=\"TxtCenter\">$row_menu[2] - $row_menu[3]</td>";
		echo "<td class=\"TxtLeft\">";

		$y = 0;

		while ($y < 10)
		{
			$query3 = "SELECT phpl_joueurs.nom, phpl_joueurs.prenom, phpl_compoCJ.id
					FROM phpl_compoCJ, phpl_joueurs, phpl_effectif
					WHERE phpl_effectif.id_joueur=phpl_joueurs.id
					AND phpl_effectif.id=phpl_compoCJ.id_effectif
					AND phpl_effectif.id_equipe=$row_menu[6]
					AND phpl_compoCJ.id_match=$row_menu[4]";
			$result3 = mysql_query($query3);
			$nb_CJ   = mysql_num_rows($result3);

			$queryJ = "SELECT phpl_effectif.id, phpl_effectif.id_equipe, phpl_joueurs.nom, phpl_joueurs.prenom
					FROM phpl_joueurs, phpl_clubs, phpl_equipes, phpl_effectif
					WHERE phpl_effectif.id_equipe=phpl_equipes.id
					AND phpl_equipes.id_club=phpl_clubs.id
					AND phpl_effectif.id_joueur=phpl_joueurs.id
					AND phpl_effectif.id_equipe=$row_menu[6]
					ORDER BY phpl_joueurs.nom ASC, phpl_joueurs.prenom ASC";
			$resultJ = mysql_query($queryJ);

			if ($y < (10 - $nb_CJ))
			{
				echo "<select name=\"joueursExt[]\" class=\"Large200M\">";
				echo "<option value=\"0\"></option>";

				while ($rowJ = mysql_fetch_array($resultJ))
				{
					$joueurs_nom = stripslashes($rowJ[2]);
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

		while ($row3=mysql_fetch_array($result3))
		{
			echo '<div class="DeleteLeft"><a href="?page=championnat&champ='.$champ.'&annee='.$annee.'&action=compoCJ&action4=supp&id_journee='.$id_journee.'&numero='.$numero.'&id_compoCJ_supp='.$row3[2].'" class="Large200M"><span>'.stripslashes($row3[0].' '.$row3[1]).'</span></a></div>'."\n";
		}

		echo  "</td><td class=\"TxtLeft\">$row_menu[1]</td></tr>";

		$e++;
	}

	//$query2    = "SELECT phpl_matchs.id FROM phpl_matchs WHERE phpl_matchs.id_journee=$numero";
	//$result2   = mysql_query($query2);
	$nb_matchs = nb_matchs($numero, $champ);
	//$numero    = $numero + 1;

	echo '		</tbody>
		<tfoot>
			<tr class="ui-widget-footer">
				<td colspan="5" class="TxtCenter">
					<input type="hidden" name="page" value="championnat" />
					<input type="hidden" name="champ" value="'.$champ.'" />
					<input type="hidden" name="annee" value="'.$annee.'" />
					<input type="hidden" name="action" value="compoCJ" />
					<input type="hidden" name="action3" value="2" />
					<input type="hidden" name="numero" value="'.$numero.'" />
					<input type="hidden" name="journee_suivante" value="1" />
					<input type="hidden" name="nb_matchs" value="'.$nb_matchs.'" />
					<input type="submit" value="'.ENVOI.'" />
				</td>
			</tr>
		</tfoot>
	</table>
</form>'."\n\n";
}
else
{
	echo InfoReqSql('InfCJMatch', 0, 'highlight', 'alert', 'Aucun matchs renseignés pour cette journée. Allez dans la rubrique [ <a href="index.php?page=championnat&amp;action=matchs&amp;champ='.$champ.'&amp;annee='.$annee.'&amp;numero='.$numero.'">Matchs</a> ]');
}

?>