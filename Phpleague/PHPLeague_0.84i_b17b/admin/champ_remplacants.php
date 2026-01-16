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
	$b = 0;
	$x = 0;

	while ($x < $nb_matchs)
	{
		$r = 0;
		$y = 0;

		if (isset($nbdom[$x]) OR isset($joueursDom[$a]))
		{
			while($nbdom[$x] > $y)
			{
				if (!isset($nbdom[$x]) OR !isset($joueursDom[$a]))
				{
					$REQ1 = '';

					break;
				}
				else
				{
					if (!isset($nbdom[$x]) == '' AND !isset($nbdom[$x]) == 0 AND !isset($joueursDom[$a]) == 0)
					{
						$REQ1 = @mysql_query('INSERT INTO phpl_compo (id_match, remp, id_effectif) VALUES ('.$matchs_id[$x].', "1", '.$joueursDom[$a].')');
					}
				}

				$a++;
				$y++;
			}
		}

		if (isset($nbext[$x]) OR isset($joueursExt[$b]))
		{
			while($nbext[$x] > $r)
			{
				if (!isset($nbext[$x]) OR !isset($joueursExt[$b]))
				{
					$REQ2 = '';

					break;
				}
				else
				{
					if (!isset($nbext[$x]) == '' AND !isset($nbext[$x]) == 0 AND !isset($joueursExt[$b]) == 0)
					{
						$REQ2 = @mysql_query('INSERT INTO phpl_compo (id_match, remp, id_effectif) VALUES ('.$matchs_id[$x].', "1", '.$joueursExt[$b].')');
					}
				}

				$b++;
				$r++;
			}
		}

		$x++;
	}

	if ($REQ1)
	{
		echo InfoReqSql('InfJoueurDom', 1, 'highlight', 'check', ADMIN_REMP_DOM_ADD1);
	}

	if ($REQ2)
	{
		echo InfoReqSql('InfJoueurExt', 1, 'highlight', 'check', ADMIN_REMP_EXT_ADD2);
	}
}

if ($action4 == 'supp')
{
	$REQ = @mysql_query('DELETE FROM phpl_compo WHERE id='.$id_compo_supp);

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
	$e = 0;

	while($ROW1 = mysql_fetch_array($REQ1)) 
	{
		$CLUB_DOM = stripslashes($ROW1[0]);
		$CLUB_EXT = stripslashes($ROW1[1]);
		$TXT_J    = '<div class="User"><a href="index.php?page=championnat&action=joueurs&champ='.$champ.'&annee='.$annee.'">Ajouter des joueurs</a></div>'."\n";

		// Liste joueurs domicile � supprimer
		$REQ3 = 'SELECT phpl_joueurs.nom, phpl_joueurs.prenom, phpl_compo.id, phpl_joueurs.id
				FROM phpl_joueurs, phpl_compo, phpl_effectif
				WHERE phpl_effectif.id_joueur=phpl_joueurs.id
				AND phpl_effectif.id=phpl_compo.id_effectif
				AND phpl_effectif.id_equipe='.$ROW1[5].'
				AND phpl_compo.id_match='.$ROW1[4].'
				AND	phpl_compo.remp="1"
				ORDER BY phpl_joueurs.nom ASC, phpl_joueurs.prenom ASC';
		$RES3 = mysql_query($REQ3);
		$NBR3 = mysql_num_rows($RES3);

		// Liste joueurs domicile choix
		$REQ4 = 'SELECT phpl_effectif.id, phpl_effectif.id_equipe, phpl_joueurs.nom, phpl_joueurs.prenom, phpl_effectif.id_joueur
				FROM phpl_joueurs, phpl_clubs, phpl_equipes, phpl_effectif
				WHERE phpl_effectif.id_equipe=phpl_equipes.id
				AND phpl_equipes.id_club=phpl_clubs.id
				AND phpl_equipes.id='.$ROW1[5].'
				AND phpl_joueurs.id=phpl_effectif.id_joueur
				ORDER BY phpl_joueurs.nom ASC, phpl_joueurs.prenom ASC';
		$RES4      = mysql_query($REQ4);
		$NBR_J_DOM = mysql_num_rows($RES4);

		// Liste joueurs ext�rieur � supprimer
		$REQ5 = 'SELECT phpl_joueurs.nom, phpl_joueurs.prenom, phpl_compo.id
				FROM phpl_compo, phpl_joueurs, phpl_effectif
				WHERE phpl_effectif.id_joueur=phpl_joueurs.id
				AND phpl_effectif.id=phpl_compo.id_effectif
				AND phpl_effectif.id_equipe='.$ROW1[6].'
				AND phpl_compo.id_match='.$ROW1[4].'
				AND phpl_compo.remp="1"
				ORDER BY phpl_joueurs.nom ASC, phpl_joueurs.prenom ASC';
		$RES5 = mysql_query($REQ5);
		$NBR5 = mysql_num_rows($RES5);

		// Liste joueurs ext�rieur choix
		$REQ6 = 'SELECT phpl_effectif.id, phpl_effectif.id_equipe, phpl_joueurs.nom, phpl_joueurs.prenom, phpl_effectif.id_joueur
				FROM phpl_joueurs, phpl_clubs, phpl_equipes, phpl_effectif
				WHERE phpl_effectif.id_equipe=phpl_equipes.id
				AND phpl_equipes.id_club=phpl_clubs.id
				AND phpl_effectif.id_joueur=phpl_joueurs.id
				AND phpl_effectif.id_equipe='.$ROW1[6].'
				ORDER BY phpl_joueurs.nom ASC, phpl_joueurs.prenom ASC';
		$RES6      = mysql_query($REQ6);
		$NBR_J_EXT = mysql_num_rows($RES6);

		if ($NBR_J_DOM != 0)
		{
			$VAL_DOM = '';
			$TXT_DOM = '';
		}
		else
		{
			$VAL_DOM = ' disabled="disabled" style="display: none;"';
			$TXT_DOM = $TXT_J;
		}

		if ($NBR_J_EXT != 0)
		{
			$VAL_EXT = '';
			$TXT_EXT = '';
		}
		else
		{
			$VAL_EXT = ' disabled="disabled" style="display: none;"';
			$TXT_EXT = $TXT_J;
		}

		if ($NBR_J_DOM != 0 OR $NBR_J_EXT != 0)
		{
			echo '	<form method="post" action="">
		<table class="Large100P ui-widget ui-widget-content">
			<thead>
				<tr class="ui-widget-header">
					<th class="Large20P TxtRight"></th>
					<th class="Large25P TxtRight">'.$CLUB_DOM.'</th>
					<th class="Large10P">'.$ROW1[2].' - '.$ROW1[3].'</th>
					<th class="Large25P TxtLeft">'.$CLUB_EXT.'</th>
					<th class="Large20P TxtLeft"></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td class="TxtRight">
						<input type="hidden" name="matchs_id[]" value="'.$ROW1[4].'" />'."\n";

			$x = 0;

			while ($x < (3 - $NBR3))
			{  
				if ($x < (3 - $NBR3))
				{
					echo '<select name="joueursDom[]"'.$VAL_DOM.' class="Large200M">
							<option value="0">&nbsp;</option>'."\n";

					$RES4 = mysql_query($REQ4);

					while ($ROW4 = mysql_fetch_array($RES4))
					{
						echo '<option value="'.$ROW4[0].'">'.stripslashes($ROW4[2].' '.$ROW4[3]).'</option>'."\n";
					}
					mysql_free_result($RES4);

					echo '</select>'."\n";
				}
				else
				{
					echo '<input type="hidden" name="joueursDom[]" value="" />'."\n";
				}

				$x++;
			}

			echo '					</td>
					<td class="TxtRight">'.$TXT_DOM.''."\n";

			$RES3 = mysql_query($REQ3);

			while ($ROW3 = mysql_fetch_array($RES3))
			{
				echo '<div class="DeleteRight"><a href="?page=championnat&champ='.$champ.'&annee='.$annee.'&action=compo2&action4=supp&id_journee='.$id_journee.'&numero='.$numero.'&id_compo_supp='.$ROW3[2].'" class="Large200M"><span>'.stripslashes($ROW3[0].' '.$ROW3[1]).'</span></a></div>'."\n";
			}
			mysql_free_result($RES3);

			echo '					</td>
					<td class="ligne2">&nbsp;</td>
					<td class="TxtLeft">'.$TXT_EXT.''."\n";

			$RES5 = mysql_query($REQ5);

			while ($ROW5 = mysql_fetch_array($RES5))
			{
				echo '<div class="DeleteLeft"><a href="?page=championnat&champ='.$champ.'&annee='.$annee.'&action=compo2&action4=supp&id_journee='.$id_journee.'&numero='.$numero.'&id_compo_supp='.$ROW5[2].'" class="Large200M"><span>'.stripslashes($ROW5[0].' '.$ROW5[1]).'</span></a></div>'."\n";
			}
			mysql_free_result($RES5);

			echo '					</td>
					<td class="TxtLeft">'."\n";

			$y = 0;

			while ($y < (3 - $NBR5))
			{
				if ($y < (3 - $NBR5))
				{
					echo '						<select name="joueursExt[]"'.$VAL_EXT.' class="Large200M">
							<option value="0">&nbsp;</option>'."\n";

					$RES6 = mysql_query($REQ6);

					while ($ROW6 = mysql_fetch_array($RES6))
					{
						echo '<option value="'.$ROW6[0].'">'.stripslashes($ROW6[2].' '.$ROW6[3]).'</option>'."\n";
					}
					mysql_free_result($RES6);

					echo '</select>'."\n";
				}
				else
				{
					echo '<input type="hidden" name="joueursExt[]" value="" />'."\n";
				}

				$y++;
			}

			echo  '					</td>
				</tr>
			</tbody>
			<tfoot>
				<tr class="ui-widget-footer">
					<td colspan="5" class="TxtCenter">
						<input type="hidden" name="page" value="championnat" />
						<input type="hidden" name="champ" value="'.$champ.'" />
						<input type="hidden" name="annee" value="'.$annee.'" />
						<input type="hidden" name="action" value="compo2" />
						<input type="hidden" name="action3" value="2" />
						<input type="hidden" name="numero" value="'.$numero.'" />
						<input type="hidden" name="journee_suivante" value="1" />
						<input type="hidden" name="nb_matchs" value="'.nb_matchs($numero, $champ).'" />
						<input type="hidden" name="nbdom[]" value="3" />
						<input type="hidden" name="nbext[]" value="3" />
						<input type="submit" value="'.ENVOI.'" />
					</td>
				</tr>
			</tfoot>
		</table>
	</form>'."\n\n";
		}
		else
		{
			echo '		<table class="Large100P ui-widget ui-widget-content">
			<thead>
				<tr class="ui-widget-header">
					<th class="Large45P TxtRight">'.$CLUB_DOM.'</th>
					<th class="Large10P TxtCenter">'.$ROW1[2].' - '.$ROW1[3].'</th>
					<th class="Large45P TxtLeft">'.$CLUB_EXT.'</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td colspan="3" class="TxtCenter">'.$TXT_J.'</td>
				</tr>
			<tbody>
		</table>'."\n";
		}

		$e++;
	}
}
else
{
	echo InfoReqSql('InfTitMatch', 0, 'highlight', 'alert', 'Aucun matchs renseignés pour cette journée. Allez dans la rubrique [ <a href="index.php?page=championnat&amp;action=matchs&amp;champ='.$champ.'&amp;annee='.$annee.'&amp;numero='.$numero.'">Matchs</a> ]');
}

mysql_free_result($REQ1);

?>