<?php

$numero = isset($_REQUEST['numero']) ? $_REQUEST['numero'] : NULL;

if (empty($numero))
{
	$requete = "SELECT MAX(phpl_journees.numero)
			FROM phpl_journees, phpl_matchs
			WHERE phpl_journees.id = phpl_matchs.id_journee
			AND buts_dom IS NOT NULL
			AND phpl_journees.id_champ = '$champ'";
	$resultats = mysql_query($requete);

	while ($row = mysql_fetch_array($resultats))
	{
		$numero = $row[0];
	}

	if ($numero == '') { $numero = 1; }
}

if (empty($numero)) {$numero = 1;}

if ($action2 == 1)
{
	reset($date_reelle);
	reset($butd);
	reset($butv);
	reset($matchs_id);

	while (list($cle, $val_date_reelle) = each($date_reelle) AND list($cle, $val_butd) = each($butd) AND list($cle, $val_butv) = each($butv) AND list($cle, $val_matchs_id) = each($matchs_id))
	{
		$date_us = format_date_us($val_date_reelle);

		if (!(($val_butd == '') OR ($val_butv == '')))
		{
			$requete = "UPDATE phpl_matchs SET phpl_matchs.buts_dom='$val_butd', phpl_matchs.buts_ext='$val_butv', phpl_matchs.date_reelle='$date_us' WHERE phpl_matchs.id='$val_matchs_id'";

			$requete4 = "SELECT pts_prono_exact, pts_prono_participation FROM phpl_gr_championnats WHERE id_champ='$champ'";
			$resultats4 = mysql_query($requete4) or die (mysql_error());

			while ($row4 = mysql_fetch_array($resultats4))
			{
				$pts_prono_exact         = $row4[0];
				$pts_prono_participation = $row4[1];
				$points_prono_exact      = $pts_prono_exact + $pts_prono_participation;
			}

			$requete2   = "SELECT pronostic, id_membre FROM phpl_pronostics WHERE id_match='$val_matchs_id'";
			$resultats2 = mysql_query($requete2) or die (mysql_error());

			while ($row2=mysql_fetch_array($resultats2))
			{
				if ($val_butd > $val_butv and $row2[0] == 1)
				{
					$query3 = "UPDATE phpl_pronostics SET points='$points_prono_exact', participation='1' WHERE id_membre='$row2[1]' AND id_match='$val_matchs_id'";
				}
				elseif ($val_butd == $val_butv and $row2[0] == 'N')
				{
					$query3 = "UPDATE phpl_pronostics SET points='$points_prono_exact', participation='1' WHERE id_membre='$row2[1]' AND id_match='$val_matchs_id'";
				}
				elseif ($val_butd < $val_butv and $row2[0] == 2)
				{
					$query3 = "UPDATE phpl_pronostics SET points='$points_prono_exact', participation='1' WHERE id_membre='$row2[1]' AND id_match='$val_matchs_id'";
				}
				else
				{
					$query3 = "UPDATE phpl_pronostics SET points='$pts_prono_participation', participation='1' WHERE id_membre='$row2[1]' AND id_match='$val_matchs_id'";
				}

				mysql_query($query3) or die (mysql_error());
			}
		}
		elseif (($val_butv == '') or ($val_butd == ''))
		{
			$requete = "UPDATE phpl_matchs SET phpl_matchs.buts_dom=NULL, phpl_matchs.buts_ext=NULL, phpl_matchs.date_reelle='$date_us' WHERE phpl_matchs.id='$val_matchs_id'";
			$requete2 = "SELECT pronostic, id_membre FROM phpl_pronostics WHERE id_match='$val_matchs_id'";
			$resultats2=mysql_query($requete2) or die (mysql_error());

			while ($row2 = mysql_fetch_array($resultats2))
			{ 
				mysql_query("UPDATE phpl_pronostics SET points = '0', participation='0' WHERE id_membre='$row2[1]' AND id_match='$val_matchs_id'") or die (mysql_error());
			} 
		}

		mysql_query($requete);
	}     

	echo InfoReqSql('InfUpdGrp', 0, 'highlight', 'info', 'Pensez � g�n�rer vos <a href="index.php?page=groupes_championnats">pronostics</a>.');
	echo InfoReqSql('InfUpd', 1, 'highlight', 'check', ADMIN_RESULT_CREA1);

	include('generer.php');
}

journees($champ, $numero, $action, $annee);

$REQ1 = mysql_query('SELECT phpl_clubs.nom, CLEXT.nom, phpl_matchs.buts_dom, phpl_matchs.buts_ext, phpl_matchs.id, phpl_matchs.date_reelle
            FROM phpl_clubs, phpl_clubs AS CLEXT, phpl_matchs, phpl_journees, phpl_equipes, phpl_equipes AS EXT
            WHERE phpl_clubs.id=phpl_equipes.id_club
                  AND CLEXT.id=EXT.id_club
                  AND phpl_equipes.id=phpl_matchs.id_equipe_dom
                  AND EXT.id=phpl_matchs.id_equipe_ext
                  AND phpl_matchs.id_journee=phpl_journees.id
                  AND phpl_journees.numero='.$numero.'
                  AND phpl_journees.id_champ='.$champ.'
                  AND CLEXT.nom!="exempte"
                  AND phpl_clubs.nom!="exempte"
                  ORDER BY phpl_matchs.date_reelle ASC');

$NBR1 = mysql_num_rows($REQ1);

if ($NBR1 > 0)
{
	echo '	<form method="post" action="">
		<table class="Large50P ui-widget ui-widget-content">
			<tbody>'."\n";

	$i = 0;

	while ($row = mysql_fetch_array($REQ1))
	{
		if (($i%2) == 0) { $class = 'ligne1'; } else { $class = 'ligne2'; }

		if (empty($row[5])) { $DATE = ''; } else { $DATE = format_date_fr($row[5]); }

		echo '				<tr class="'.$class.'">
					<td class="TxtRight Large30P">'.stripslashes($row[0]).'</td>
					<td class="TxtCenter"><input type="text" name="butd[]" value="'.$row[2].'" size="3" maxlength="3" class="TxtCenter" /></td>
					<td class="TxtCenter"><input type="text" name="butv[]" value="'.$row[3].'" size="3" maxlength="3" class="TxtCenter" /></td>
					<td class="TxtLeft Large30P">'.stripslashes($row[1]).'</td>
					<td class="TxtLeft">
						<input type="text" name="date_reelle[]" value="'.$DATE.'" size="15" class="TxtCenter crdateheure" />
						<input type="hidden" name="matchs_id[]" value="'.$row[4].'" />
					</td>
				</tr>'."\n";

		$matchs_id[] = $row[4];

		$i++;
	}
	mysql_free_result($REQ1);

	$requete3 = "SELECT
					phpl_clubs.nom,
					CLEXT.nom,
					phpl_matchs.buts_dom,
					phpl_matchs.buts_ext,
					phpl_matchs.id,
					phpl_matchs.date_reelle
				FROM
					phpl_clubs,
					phpl_clubs AS CLEXT,
					phpl_matchs,
					phpl_journees,
					phpl_equipes,
					phpl_equipes AS EXT
				WHERE phpl_clubs.id=phpl_equipes.id_club
				AND CLEXT.id=EXT.id_club
				AND phpl_equipes.id=phpl_matchs.id_equipe_dom
				AND EXT.id=phpl_matchs.id_equipe_ext
				AND phpl_matchs.id_journee=phpl_journees.id
				AND phpl_journees.numero='$numero'
				AND phpl_journees.id_champ='$champ'
				AND (CLEXT.nom='exempte' OR phpl_clubs.nom='exempte')";
	$resultats3 = mysql_query($requete3);

	while ($row3 = mysql_fetch_array($resultats3))
	{
		$row3[0] = stripslashes($row3[0]);
		$row3[1] = stripslashes($row3[1]);

		if (($i%2) == 0) { $class = 'ligne1'; } else { $class = 'ligne2'; }

		if ($row3[0] == 'exempte')
		{
			echo '<tr><td colspan="5" class="'.$class.'">'.ADMIN_RESULTS_1.' : '.$row3[1].'</td></tr>';
		}
		if ($row3[1] == 'exempte')
		{
			echo '<tr><td colspan="5" class="'.$class.'">'.ADMIN_RESULTS_1.' : '.$row3[0].'</td></tr>';
		}
	}
	mysql_free_result($resultats3);

	$numero = $numero + 1;

	echo '			</tbody>
			<tfoot>
				<tr class="ui-widget-footer">
					<td>&nbsp;</td>
					<td colspan="2" class="TxtCenter">
						<input type="hidden" name="page" value="championnat" />
						<input type="hidden" name="champ" value="'.$champ.'" />
						<input type="hidden" name="annee" value="'.$annee.'" />
						<input type="hidden" name="numero" value="'.$numero.'" />
						<input type="hidden" name="action" value="resultats" />
						<input type="hidden" name="action2" value="1" />
						<input type="submit" value="'.ENVOI.'" />
					</td>
					<td colspan="2">&nbsp;</td>
				</tr>
			</tfoot>
		</table>
	</form>'."\n\n";
}
else
{
	echo InfoReqSql('Info', 0, 'highlight', 'alert', 'Aucun matchs renseignés pour cette journée. Allez dans la rubrique [ <a href="index.php?page=championnat&amp;action=matchs&amp;champ='.$champ.'&amp;annee='.$annee.'&amp;numero='.$numero.'">Matchs</a> ]');
}

?>