<?php

function ouverture() {
	require('data_connect.php');

	if (($idconnect = @mysql_connect($hostname, $login, $password)) == false)
	{
		$error = 'Impossible de creer une connexion persistante !';

		return(0);
	}

	if (@mysql_select_db($database, $idconnect) == false)
	{
		$error = 'Impossible de selectionner la base !';

		return(0);
	}

	mysql_query('SET NAMES '.CHARSET_MYSQL);

	return($idconnect);
	return($PHPLEAGUE_RACINE);
}


function Image($URL, $IMG, $ALT, $TITLE, $CLASS)
{
	if (file_exists($URL.$IMG))
	{
		list($WIDTH, $HEIGHT) = @getimagesize($URL.$IMG);

		if (empty($CLASS)) { $RCLASS = ''; } else { $RCLASS = ' class="'.$CLASS.'"'; }

		$TMP = '<img src="'.$URL.$IMG.'" width="'.$WIDTH.'" height="'.$HEIGHT.'" alt="'.$ALT.'" title="'.$TITLE.'"'.$RCLASS.' />';
	}
	else
	{
		$TMP = '&nbsp;';
	}

	return $TMP;
}


// Formatage du texte en fonction du codage des caractères
// EN TEST
function FormatText($TEXT)
{
	if (CHARSET_HEADER == 'utf-8')
	{
		$TMP = stripslashes(utf8_encode($TEXT));
	}
	elseif (CHARSET_HEADER == 'ISO-8859-1')
	{
		$TMP = stripslashes(htmlspecialchars_decode($TEXT));
	}
	else
	{
		$TMP = stripslashes(utf8_encode($TEXT));
	}

	return $TMP;
}


// Nombres de journées d'un championnat
function nb_journees($id_champ)
{
	$REQ = mysql_query('SELECT id FROM '.TBL_EQUIPES.' WHERE id_champ='.$id_champ);
	$NBR = mysql_num_rows($REQ);
	$RES = ($NBR * 2) - 2;

	mysql_free_result($REQ);

	return $RES;
}


// Nombres d'équipes dans un championnat
function nb_equipes($id_champ)
{
	$REQ = mysql_query('SELECT id FROM '.TBL_EQUIPES.' WHERE id_champ='.$id_champ);
	$NBR = mysql_num_rows($REQ);

	mysql_free_result($REQ);

	return $NBR;
}


function aff_journee($champ, $numero, $legende, $proba, $fiches_clubs, $id_equipe_fetiche)
{
	$REQ1 = mysql_query('SELECT cldom.nom AS cldom, clext.nom AS clext, cldom.url_logo AS logodom, clext.url_logo AS logoext, '.TBL_MATCHS.'.buts_dom, '.TBL_MATCHS.'.buts_ext, '.TBL_JOURNEES.'.date_prevue, cldom.id AS cliddom, clext.id AS clidext, date_reelle, dom.id AS eqdom, ext.id AS eqext, '.TBL_MATCHS.'.id AS id_match, '.TBL_JOURNEES.'.numero
						FROM '.TBL_EQUIPES.' AS dom, '.TBL_EQUIPES.' AS ext, '.TBL_MATCHS.', '.TBL_JOURNEES.', '.TBL_CLUBS.' AS cldom, '.TBL_CLUBS.' AS clext
						WHERE '.TBL_MATCHS.'.id_equipe_dom=dom.id
						AND '.TBL_MATCHS.'.id_equipe_ext=ext.id
						AND '.TBL_JOURNEES.'.id_champ='.$champ.'
						AND '.TBL_JOURNEES.'.numero='.$numero.'
						AND dom.id_club=cldom.id
						AND ext.id_club=clext.id
						AND '.TBL_MATCHS.'.id_journee='.TBL_JOURNEES.'.id
						AND cldom.nom!="exempte"
						AND clext.nom!="exempte"
						ORDER BY date_reelle ASC, cldom');

	if (mysql_num_rows($REQ1) > 1)
	{
		echo '	<table class="TblCenter Large400">'."\n";

		$color  = 0;
		$x      = 1;
		$minute = 0;
		$heure  = 0;
		$jour   = 0;
		$mois   = 0;
		$annee  = 0;

		while ($ROW1 = mysql_fetch_array($REQ1))
		{
			$clubs_nom  = stripslashes($ROW1['cldom']);
			$clubs_nom1 = stripslashes($ROW1['clext']);
			$domproba   = $ROW1['buts_dom'];
			$extproba   = $ROW1['buts_ext'];

			if (empty($ROW1['buts_dom']) AND empty($ROW1['buts_ext']) AND $proba == 1 AND $numero >= 4)
			{
				$REQ2  = mysql_query('SELECT DOMBUTSPOUR, DOMG, DOMN, DOMP, DOMBUTSCONTRE
									FROM '.TBL_CLMNT_CACHE.'
									WHERE ID_EQUIPE='.$ROW1['eqdom']);

				while ($ROW2 = mysql_fetch_array($REQ2))
				{
					$dom_buts  = $ROW2['DOMBUTSPOUR'];
					$dom_joues = $ROW2['DOMG'] + $ROW2['DOMN'] + $ROW2['DOMP'];
					$ext_buts  = $ROW2['DOMBUTSCONTRE'];
					$ext_joues = $ROW2['DOMG'] + $ROW2['DOMN'] + $ROW2['DOMP'];
				}
				mysql_free_result($REQ2);

				$REQ3  = mysql_query('SELECT EXTG, EXTN, EXTP, EXTBUTSCONTRE, EXTBUTSPOUR
									FROM '.TBL_CLMNT_CACHE.'
									WHERE ID_EQUIPE='.$ROW1['eqext']);

				while ($ROW3 = mysql_fetch_array($REQ3))
				{
					$dom_joues+= $ROW3['EXTG'] + $ROW3['EXTN'] + $ROW3['EXTP'];
					$ext_joues+= $ROW3['EXTG'] + $ROW3['EXTN'] + $ROW3['EXTP'];
					$dom_buts += $ROW3['EXTBUTSCONTRE'];
					$ext_buts += $ROW3['EXTBUTSPOUR'];
					$dom_buts  = intval($dom_buts / $dom_joues);
					$ext_buts  = intval($ext_buts / $ext_joues);
				}
				mysql_free_result($REQ3);

				$domproba  = '<i>'.$dom_buts.'</i>';
				$extproba  = '<i>'.$ext_buts.'</i>';
				$clmnt_dom = '';
				$clmnt_ext = '';
			}
			else
			{
				$num = $ROW1['numero'] - 1;

				$REQ4 = mysql_query('SELECT classement
									FROM '.TBL_CLMNT_GRAPH.'
                  					WHERE id_equipe="'.$ROW1['eqdom'].'"
                  					AND fin='.$num);
				$ROW4 = mysql_fetch_array($REQ4);
						mysql_free_result($REQ4);

				$REQ5 = mysql_query('SELECT classement
									FROM '.TBL_CLMNT_GRAPH.'
									WHERE id_equipe="'.$ROW1['eqext'].'"
									AND fin='.$num);
				$ROW5 = mysql_fetch_array($REQ5);
						mysql_free_result($REQ5);

				$clmnt_dom = '('.$ROW4['classement'].')';
				$clmnt_ext = '('.$ROW5['classement'].')';

				if ($clmnt_dom == '()') { $clmnt_dom = ''; }
				if ($clmnt_ext == '()') { $clmnt_ext = ''; }
			}

			if ($x == 1)
			{
				echo '		<thead>
			<tr>
				<th colspan="3">'.FormatText($legende.' '.$numero).'</th>
			</tr>
		</thead>
		<tbody>'."\n";
			}

			if ($ROW1['eqdom'] == $id_equipe_fetiche)
			{
				$DebMarqueur1 = '<b>';
				$FinMarqueur1 = '</b>';
			}
			else
			{
				$DebMarqueur1 = '';
				$FinMarqueur1 = '';
			}

			if ($ROW1['eqext'] == $id_equipe_fetiche)
			{
				$DebMarqueur2 = '<b>';
				$FinMarqueur2 = '</b>';
			}
			else
			{
				$DebMarqueur2 = '';
				$FinMarqueur2 = '';
			}

			if (($color%2) == 0) { $classe = 'ligne2'; } else { $classe = 'ligne1'; }

			if (!($annee == substr($ROW1['date_reelle'], 0, 4)) OR !($mois == substr($ROW1['date_reelle'], 5, 2)) OR !($jour == substr($ROW1['date_reelle'], 8, 2)) OR !($heure == substr($ROW1['date_reelle'], 11, 2)) OR !($minute == substr($ROW1['date_reelle'], 14, 2)))
			{
				$minute = substr($ROW1['date_reelle'], 14, 2);
				$heure  = substr($ROW1['date_reelle'], 11, 2);
				$jour   = substr($ROW1['date_reelle'], 8, 2);
				$mois   = substr($ROW1['date_reelle'], 5, 2);
				$annee  = substr($ROW1['date_reelle'], 0, 4);
				$t      = mktime($heure, $minute, 0, $mois, $jour, $annee);

				echo '			<tr class="TxtCenter SousTitre">
				<td colspan="3">'.FormatText(ucfirst(strftime('%A %d %B - %Hh%M', $t))).'</td>
			</tr>'."\n";
			}

			echo '			<tr class="'.$classe.'">'."\n";

			if (AFF_LOGO_CLUB == 1)
			{
				if (empty($ROW1['logodom'])) { $LOGO_DOM = 'no_image.png'; } else { $LOGO_DOM = $ROW1['logodom']; }
				if (empty($ROW1['logoext'])) { $LOGO_EXT = 'no_image.png'; } else { $LOGO_EXT = $ROW1['logoext']; }

				$IMG_DOM = '&nbsp;'.Image('../'.REP_IMG_CLUB_SMALL, $LOGO_DOM, '', '', 'LoadImg');
				$IMG_EXT = Image('../'.REP_IMG_CLUB_SMALL, $LOGO_EXT, '', '', 'LoadImg').'&nbsp;';
			}
			else
			{
				$IMG_DOM = '';
				$IMG_EXT = '';
			}

			if ($domproba == '' AND $extproba == '')
			{
				$RESULTAT = FormatText('voir');
			}
			else
			{
				$RESULTAT = $domproba.' - '.$extproba;
			}

			$activ_prono = 0;

			if ($fiches_clubs == 1 AND $activ_prono == 1)
			{
				echo '				<td class="Large40P TxtRight">'.$clmnt_dom.' <a href="'.URL_CLUB.'?id_clubs='.$ROW1['cliddom'].'&amp;champ='.$champ.'">'.$DebMarqueur1.$clubs_nom.$FinMarqueur1.'</a>'.$IMG_DOM.'</td>
				<td class="Large20P TxtCenter"><a href="'.URL_MATCH.'?id_match='.$ROW1['id_match'].'" class="jQiFrame" title="'.$clubs_nom.' - '.$clubs_nom1.'">'.$RESULTAT.'</a></td>
				<td class="Large40P TxtLeft">'.$IMG_EXT.'<a href="'.URL_CLUB.'?id_clubs='.$ROW1['clidext'].'&amp;champ='.$champ.'">'.$DebMarqueur2.$clubs_nom1.$FinMarqueur2.'</a> '.$clmnt_ext.'</td>'."\n";
			}
			if ($fiches_clubs == 1 AND $activ_prono == 0)
			{
				echo '				<td class="Large40P TxtRight">'.$clmnt_dom.' <a href="'.URL_CLUB.'?id_clubs='.$ROW1['cliddom'].'&amp;champ='.$champ.'">'.$DebMarqueur1.$clubs_nom.$FinMarqueur1.'</a>'.$IMG_DOM.'</td>
				<td class="Large20P TxtCenter"><a href="'.URL_MATCH.'?id_match='.$ROW1['id_match'].'" class="jQiFrame" title="'.$clubs_nom.' - '.$clubs_nom1.'">'.$RESULTAT.'</a></td>
				<td class="Large40P TxtLeft">'.$IMG_EXT.'<a href="'.URL_CLUB.'?id_clubs='.$ROW1['clidext'].'&amp;champ='.$champ.'">'.$DebMarqueur2.$clubs_nom1.$FinMarqueur2.'</a> '.$clmnt_ext.'</td>'."\n";
			}
			elseif (!$fiches_clubs == 1 AND $activ_prono == 1)
			{
				echo '				<td class="Large40P TxtRight">'.$clmnt_dom.' '.$DebMarqueur1.$clubs_nom.$FinMarqueur1.$IMG_DOM.'</td>
				<td class="Large20P TxtCenter"><a href="'.URL_MATCH.'?id_match='.$ROW1['id_match'].'" class="jQiFrame" title="'.$clubs_nom.' - '.$clubs_nom1.'">'.$RESULTAT.'</a></td>
				<td class="Large40P TxtLeft">'.$IMG_EXT.$DebMarqueur2.$clubs_nom1.$FinMarqueur2.' '.$clmnt_ext.'</td>'."\n";
			}
			elseif (!$fiches_clubs == 1 AND $activ_prono == 0)
			{
				echo '				<td class="Large40P TxtRight">'.$clmnt_dom.' '.$DebMarqueur1.$clubs_nom.$FinMarqueur1.$IMG_DOM.'</td>
				<td class="Large20P TxtCenter"><a href="'.URL_MATCH.'?id_match='.$ROW1['id_match'].'" class="jQiFrame" title="'.$clubs_nom.' - '.$clubs_nom1.'">'.$RESULTAT.'</a></td>
				<td class="Large40P TxtLeft">'.$IMG_EXT.$DebMarqueur2.$clubs_nom1.$FinMarqueur2.' '.$clmnt_ext.'</td>'."\n";
			}

			echo '			</tr>'."\n";

			$x++;
			$color++;
		}

		$REQ6 = mysql_query('SELECT '.TBL_CLUBS.'.nom, CLEXT.nom, '.TBL_MATCHS.'.buts_dom, '.TBL_MATCHS.'.buts_ext, '.TBL_MATCHS.'.id, '.TBL_MATCHS.'.date_reelle
							FROM '.TBL_CLUBS.', '.TBL_CLUBS.' AS CLEXT, '.TBL_MATCHS.', '.TBL_JOURNEES.', '.TBL_EQUIPES.', '.TBL_EQUIPES.' AS EXT
							WHERE '.TBL_CLUBS.'.id='.TBL_EQUIPES.'.id_club
							AND CLEXT.id=EXT.id_club
							AND '.TBL_EQUIPES.'.id='.TBL_MATCHS.'.id_equipe_dom
							AND EXT.id='.TBL_MATCHS.'.id_equipe_ext
							AND '.TBL_MATCHS.'.id_journee='.TBL_JOURNEES.'.id
							AND '.TBL_JOURNEES.'.numero='.$numero.'
							AND '.TBL_JOURNEES.'.id_champ='.$champ.'
							AND (CLEXT.nom="exempte" OR '.TBL_CLUBS.'.nom="exempte")');

		if (mysql_num_rows($REQ6) > 0)
		{
			while ($ROW6 = mysql_fetch_array($REQ6))
			{
				if (($color%2) == 0) { $color = 'ligne1'; } else { $color = 'ligne2'; }

				if ($CLUB_DOM == 'exempte')
				{
					echo '<tr class="'.$color.'"><td colspan="3">'.FormatText(ADMIN_RESULTS_1).' : '.$ROW6[0].'</td></tr>'."\n";
				}

				if ($CLUB_EXT == 'exempte')
				{
					echo '<tr class="'.$color.'"><td colspan="3">'.FormatText(ADMIN_RESULTS_1).' : '.$ROW6[1].'</td></tr>'."\n";
				}
			}
		}

		mysql_free_result($REQ6);

		echo '		</tbody>
	</table>'."\n\n";

	}
	mysql_free_result($REQ1);
}


// Rempli la table phpl_clmt
function db_clmnt($champ, $debut, $fin, $cache) {

	if ($cache == 1) { mysql_query('DELETE FROM '.TBL_CLMNT_CACHE.' WHERE ID_CHAMP='.$champ); }
	else			 { mysql_query('DELETE FROM '.TBL_CLMNT); }

	if (!$fin)	 { $fin   = (nb_equipes($champ) * 2) - 2; }
	if (!$debut) { $debut = 1; }

	// Sélection des paramètres
	$REQ1 = mysql_query('SELECT pts_victoire, pts_nul, pts_defaite
						FROM '.TBL_PARAMETRES.'
						WHERE id_champ='.$champ);

	while ($ROW1 = mysql_fetch_array($REQ1))
	{
		$pts_victoire = $ROW1['pts_victoire'];
		$pts_nul      = $ROW1['pts_nul'];
		$pts_defaite  = $ROW1['pts_defaite'];
	}
	mysql_free_result($REQ1);

	// Victoires domicile
	$query = "SELECT dom.id, COUNT(dom.id), phpl_clubs.nom, SUM(buts_dom), SUM(buts_ext)
			FROM phpl_equipes AS dom, phpl_clubs, phpl_matchs, phpl_journees, phpl_championnats
			WHERE dom.id_champ='$champ'
			AND dom.id_club=phpl_clubs.id
			AND dom.id=phpl_matchs.id_equipe_dom
			AND buts_dom > buts_ext
			AND phpl_championnats.id=phpl_journees.id_champ
			AND phpl_journees.id=phpl_matchs.id_journee
			AND phpl_journees.numero>='$debut'
			AND phpl_journees.numero<='$fin'
			GROUP BY phpl_clubs.nom ASC";
	$dom = mysql_query($query);

	while($row = mysql_fetch_array($dom))
	{
		$clmnt[$row[2]]['GDOM'] = $row[1];

		if (!isset($clmnt[$row[2]]['BUTSDOMPOUR'])) {$clmnt[$row[2]]['BUTSDOMPOUR']=$row[3];}
		else{$clmnt[$row[2]]['BUTSDOMPOUR']+=$row[3];}

		if (!isset($clmnt[$row[2]]['BUTSDOMCONTRE'])) {$clmnt[$row[2]]['BUTSDOMCONTRE']=$row[4];}
		else{$clmnt[$row[2]]['BUTSDOMCONTRE']+=$row[4];}
	}

	// Defaites domicile
	$query = "SELECT dom.id, count(dom.id), phpl_clubs.nom, sum(buts_dom), sum(buts_ext)
			FROM phpl_equipes AS dom, phpl_clubs, phpl_matchs, phpl_journees, phpl_championnats
			WHERE dom.id_champ='$champ'
			AND dom.id_club=phpl_clubs.id
			AND dom.id=phpl_matchs.id_equipe_dom
			AND buts_dom < buts_ext
			AND phpl_championnats.id=phpl_journees.id_champ
			AND phpl_journees.id=phpl_matchs.id_journee
			AND phpl_journees.numero>='$debut'
			AND phpl_journees.numero<='$fin'
			GROUP BY phpl_clubs.nom";
	$dom = mysql_query($query);

	while($row = mysql_fetch_array($dom))
	{
		$clmnt[$row[2]]['PDOM'] = $row[1];

		if (!isset($clmnt[$row[2]]['BUTSDOMPOUR'])) {$clmnt[$row[2]]['BUTSDOMPOUR']=$row[3];}
		else{$clmnt[$row[2]]['BUTSDOMPOUR']+=$row[3];}

		if (!isset($clmnt[$row[2]]['BUTSDOMCONTRE'])) {$clmnt[$row[2]]['BUTSDOMCONTRE']=$row[4];}
		else{$clmnt[$row[2]]['BUTSDOMCONTRE']+=$row[4];}
	}

	// Nuls domicile
	$query = "SELECT dom.id, COUNT(dom.id), phpl_clubs.nom, SUM(buts_dom), SUM(buts_ext)
			FROM phpl_equipes AS dom, phpl_clubs, phpl_matchs, phpl_journees, phpl_championnats
			WHERE dom.id_champ='$champ'
			AND dom.id_club=phpl_clubs.id
			AND dom.id=phpl_matchs.id_equipe_dom
			AND buts_dom = buts_ext
			AND buts_dom is not null
			AND buts_ext is not null
			AND phpl_championnats.id=phpl_journees.id_champ
			AND phpl_journees.id=phpl_matchs.id_journee
			AND phpl_journees.numero>='$debut'
			AND phpl_journees.numero<='$fin'
			GROUP BY phpl_clubs.nom";
	$dom = mysql_query($query);

	while($row = mysql_fetch_array($dom))
	{
		$clmnt[$row[2]]['NDOM']=$row[1];

		if (!isset($clmnt[$row[2]]['BUTSDOMPOUR'])) {$clmnt[$row[2]]['BUTSDOMPOUR']=$row[3];}
		else{$clmnt[$row[2]]['BUTSDOMPOUR']+=$row[3];}

		if (!isset($clmnt[$row[2]]['BUTSDOMCONTRE'])) {$clmnt[$row[2]]['BUTSDOMCONTRE']=$row[4];}
		else{$clmnt[$row[2]]['BUTSDOMCONTRE']+=$row[4];}
	}

	// Résultats à domicile
	$query = "SELECT phpl_clubs.nom
			FROM phpl_clubs, phpl_equipes, phpl_championnats
			WHERE phpl_equipes.id_champ=phpl_championnats.id
			AND phpl_championnats.id='$champ'
			AND phpl_equipes.id_club=phpl_clubs.id";
	$result = mysql_query($query);

	// Victoires extèrieur
	$query = "SELECT ext.id, COUNT(ext.id), phpl_clubs.nom, SUM(buts_ext), SUM(buts_dom)
			FROM phpl_equipes AS ext, phpl_clubs, phpl_matchs, phpl_journees, phpl_championnats
			WHERE ext.id_champ='$champ'
			AND ext.id_club=phpl_clubs.id
			AND ext.id=phpl_matchs.id_equipe_ext
			AND buts_ext > buts_dom
			AND phpl_championnats.id=phpl_journees.id_champ
			AND phpl_journees.id=phpl_matchs.id_journee
			AND phpl_journees.numero>='$debut'
			AND phpl_journees.numero<='$fin'
			GROUP BY phpl_clubs.nom";
	$dom = mysql_query($query);

	while($row = mysql_fetch_array($dom))
	{
		$clmnt[$row[2]]['GEXT'] = $row[1];

		if (!isset($clmnt[$row[2]]['BUTSEXTPOUR'])) {$clmnt[$row[2]]['BUTSEXTPOUR']=$row[3];}
		else{$clmnt[$row[2]]['BUTSEXTPOUR']+=$row[3];}

		if (!isset($clmnt[$row[2]]['BUTSEXTCONTRE'])) {$clmnt[$row[2]]['BUTSEXTCONTRE']=$row[4];}
		else{$clmnt[$row[2]]['BUTSEXTCONTRE']+=$row[4];}
	}

	// Défaites extèrieur
	$query = "SELECT ext.id, COUNT(ext.id), phpl_clubs.nom, SUM(buts_ext), SUM(buts_dom)
			FROM phpl_equipes AS ext, phpl_clubs, phpl_matchs, phpl_journees, phpl_championnats
			WHERE ext.id_champ='$champ'
			AND ext.id_club=phpl_clubs.id
			AND ext.id=phpl_matchs.id_equipe_ext
			AND buts_ext < buts_dom
			AND phpl_championnats.id=phpl_journees.id_champ
			AND phpl_journees.id=phpl_matchs.id_journee
			AND phpl_journees.numero>='$debut'
			AND phpl_journees.numero<='$fin'
			GROUP BY phpl_clubs.nom";
	$dom = mysql_query($query);

	while($row = mysql_fetch_array($dom))
	{
		$clmnt[$row[2]]['PEXT']=$row[1];

		if (!isset($clmnt[$row[2]]['BUTSEXTPOUR'])) {$clmnt[$row[2]]['BUTSEXTPOUR']=$row[3];}
		else{$clmnt[$row[2]]['BUTSEXTPOUR']+=$row[3];}

		if (!isset($clmnt[$row[2]]['BUTSEXTCONTRE'])) {$clmnt[$row[2]]['BUTSEXTCONTRE']=$row[4];}
		else{$clmnt[$row[2]]['BUTSEXTCONTRE']+=$row[4];}
	}

	// Nuls exterieur
	$query = "SELECT ext.id, COUNT(ext.id), phpl_clubs.nom, SUM(buts_ext), SUM(buts_dom)
			FROM phpl_equipes AS ext, phpl_clubs, phpl_matchs, phpl_journees, phpl_championnats
			WHERE ext.id_champ='$champ'
			AND ext.id_club=phpl_clubs.id
			AND ext.id=phpl_matchs.id_equipe_ext
			AND buts_ext = buts_dom
			AND buts_dom is not null
			AND buts_ext is not null
			AND phpl_championnats.id=phpl_journees.id_champ
			AND phpl_journees.id=phpl_matchs.id_journee
			AND phpl_journees.numero>='$debut'
			AND phpl_journees.numero<='$fin'
			GROUP BY phpl_clubs.nom";
	$dom = mysql_query($query);

	while($row = mysql_fetch_array($dom))
	{
		$clmnt[$row[2]]['NEXT']=$row[1];

		if (!isset($clmnt[$row[2]]['BUTSEXTPOUR'])) {$clmnt[$row[2]]['BUTSEXTPOUR']=$row[3];}
		else{$clmnt[$row[2]]['BUTSEXTPOUR']+=$row[3];}

		if (!isset($clmnt[$row[2]]['BUTSEXTCONTRE'])) {$clmnt[$row[2]]['BUTSEXTCONTRE']=$row[4];}
		else{$clmnt[$row[2]]['BUTSEXTCONTRE']+=$row[4];}
	}

	// Tableau de classement
	$query = "SELECT phpl_clubs.nom, phpl_equipes.penalite, phpl_equipes.id
			FROM phpl_clubs, phpl_equipes, phpl_championnats
			WHERE phpl_equipes.id_champ=phpl_championnats.id
			AND phpl_championnats.id='$champ'
			AND phpl_equipes.id_club=phpl_clubs.id";
	$result = mysql_query($query);

	if (mysql_num_rows($result) == 0)
	{
		$query = "SELECT phpl_clubs.nom, phpl_equipes.id
				FROM phpl_clubs, phpl_equipes, phpl_championnats
				WHERE phpl_equipes.id_champ=phpl_championnats.id
				AND phpl_championnats.id='$champ'
				AND phpl_equipes.id_club=phpl_clubs.id";
		$result = mysql_query($query);
	}

	while($row = mysql_fetch_array($result))
	{
		$NOM			= $row['nom'];
		$DOMJOUES		= $clmnt[$NOM]['GDOM'] + $clmnt[$NOM]['NDOM'] + $clmnt[$NOM]['PDOM'];
		$EXTJOUES		= $clmnt[$NOM]['GEXT'] + $clmnt[$NOM]['NEXT'] + $clmnt[$NOM]['PEXT'];
		$JOUES			= $EXTJOUES + $DOMJOUES;
		$DOMPOINTS		= ($clmnt[$NOM]['GDOM'] * $pts_victoire) + ($clmnt[$NOM]['NDOM'] * $pts_nul) + ($clmnt[$NOM]['PDOM'] * $pts_defaite);
		$EXTPOINTS		= ($clmnt[$NOM]['GEXT'] * $pts_victoire) + ($clmnt[$NOM]['NEXT'] * $pts_nul) + ($clmnt[$NOM]['PEXT'] * $pts_defaite);
		$POINTS			= $DOMPOINTS + $EXTPOINTS + $row['penalite'];
		$G				= $clmnt[$NOM]['GEXT'] + $clmnt[$NOM]['GDOM'];
		$N				= $clmnt[$NOM]['NEXT'] + $clmnt[$NOM]['NDOM'];
		$P				= $clmnt[$NOM]['PEXT'] + $clmnt[$NOM]['PDOM'];
		$DOMG			= $clmnt[$NOM]['GDOM'];
		$DOMN			= $clmnt[$NOM]['NDOM'];
		$DOMP			= $clmnt[$NOM]['PDOM'];
		$EXTG			= $clmnt[$NOM]['GEXT'];
		$EXTN			= $clmnt[$NOM]['NEXT'];
		$EXTP			= $clmnt[$NOM]['PEXT'];
		$BUTSPOUR		= $clmnt[$NOM]['BUTSEXTPOUR'] + $clmnt[$NOM]['BUTSDOMPOUR'];
		$DOMBUTSPOUR	= $clmnt[$NOM]['BUTSDOMPOUR'];
		$EXTBUTSPOUR	= $clmnt[$NOM]['BUTSEXTPOUR'];
		$BUTSCONTRE		= $clmnt[$NOM]['BUTSEXTCONTRE'] + $clmnt[$NOM]['BUTSDOMCONTRE'];
		$DOMBUTSCONTRE	= $clmnt[$NOM]['BUTSDOMCONTRE'];
		$EXTBUTSCONTRE	= $clmnt[$NOM]['BUTSEXTCONTRE'] ;
		$DIFF			= $BUTSPOUR - $BUTSCONTRE;
		$DOMDIFF		= $DOMBUTSPOUR - $DOMBUTSCONTRE;
		$EXTDIFF		= $EXTBUTSPOUR - $EXTBUTSCONTRE;
		$PEN			= $row['penalite'];
		$NOM			= addslashes($row['nom']);

		$question = 'INSERT INTO ';

		if ($cache == 1) { $question.= 'phpl_clmnt_cache '; } else { $question.= 'phpl_clmnt '; }

		$question.= "SET NOM='$NOM',
          ID_EQUIPE='$row[id]',
          ID_CHAMP='$champ',
          POINTS='$POINTS',
          DOMPOINTS='$DOMPOINTS',
          EXTPOINTS='$EXTPOINTS',
          JOUES= '$JOUES',
          DOMJOUES= '$DOMJOUES',
          EXTJOUES= '$EXTJOUES',
          G='$G',
          DOMG='$DOMG',
          EXTG='$EXTG',
          N='$N',
          DOMN='$DOMN',
          EXTN='$EXTN',
          P='$P',
          DOMP='$DOMP',
          EXTP='$EXTP',
          BUTSPOUR='$BUTSPOUR',
          DOMBUTSPOUR='$DOMBUTSPOUR',
          EXTBUTSPOUR='$EXTBUTSPOUR',
          BUTSCONTRE='$BUTSCONTRE',
          DOMBUTSCONTRE='$DOMBUTSCONTRE',
          EXTBUTSCONTRE='$EXTBUTSCONTRE',
          DIFF='$DIFF',
          DOMDIFF='$DOMDIFF',
          EXTDIFF='$EXTDIFF',
          PEN='$PEN'";
		$result2 = mysql_query($question);
	}

	if ($cache == 1) { $requete = 'DELETE FROM phpl_clmnt_cache WHERE nom="exempte"'; }
	else			 { $requete = 'DELETE FROM phpl_clmnt WHERE nom="exempte"'; }

	$resultat = mysql_query($requete);
}


function clmnt($legende, $type, $accession, $barrage, $relegation, $champ, $requete, $lien, $id_equipe_fetiche)
{
?>
	<h5><?php echo FormatText($legende); ?></h5>

	<table class="TblCenter Large400">
		<thead>
			<tr>
				<th class="Large5P TxtLeft"><?php echo FormatText(CLMNT_POSITION); ?></th>
				<th class="TxtLeft"><?php echo FormatText(CLMNT_EQUIPE); ?></th>
				<th class="Large5P TxtLeft"><?php echo FormatText(CLMNT_POINTS); ?></th>
				<th class="Large5P TxtLeft"><?php echo FormatText(CLMNT_JOUES); ?></th>
				<th class="Large5P TxtLeft"><?php echo FormatText(CLMNT_VICTOIRES); ?></th>
				<th class="Large5P TxtLeft"><?php echo FormatText(CLMNT_NULS); ?></th>
				<th class="Large5P TxtLeft"><?php echo FormatText(CLMNT_DEFAITES); ?></th>
				<th class="Large5P TxtLeft"><?php echo FormatText(CLMNT_BUTSPOUR); ?></th>
				<th class="Large5P TxtLeft"><?php echo FormatText(CLMNT_BUTSCONTRE); ?></th>
				<th class="Large5P TxtLeft"><?php echo FormatText(CLMNT_DIFF); ?></th>
			</tr>
		</thead>
		<tbody>
<?php

	$pl   = 1;
	$REQ1 = mysql_query($requete);

	while ($ROW1 = mysql_fetch_array($REQ1))
	{
		$x = 0;

		if ($ROW1['NOM'] == EXEMPT) { continue; }

		if     ($pl <= $accession AND $type == FormatText(GENERAL)) { $CLASS = 'accession'; }
		elseif ($pl <= $barrage AND $type == FormatText(GENERAL))   { $CLASS = 'barrage'; }
		elseif ($pl > $relegation AND $type == FormatText(GENERAL)) { $CLASS = 'relegation'; }
		elseif (($pl % 2) == 0)										{ $CLASS = 'ligne1'; }
		else														{ $CLASS = 'ligne2'; }

		echo '			<tr class="'.$CLASS.'">
				<td>'.$pl.'</td>'."\n";

		while($x < 9)
		{
			if ($x == 0)
			{
				$EQUIPE = stripslashes($ROW1[$x]);

				if (AFF_LOGO_CLUB == 1)
				{
					$REQ2 = mysql_query('SELECT '.TBL_CLUBS.'.url_logo
					  					FROM '.TBL_EQUIPES.', '.TBL_CLUBS.'
						  				WHERE '.TBL_EQUIPES.'.id='.$ROW1['ID_EQUIPE'].'
						  				AND '.TBL_EQUIPES.'.id_club='.TBL_CLUBS.'.id');

					while ($ROW2 = mysql_fetch_array($REQ2))
					{
						if (empty($ROW2['url_logo'])) { $LOGO = 'no_image.png'; } else { $LOGO = $ROW2['url_logo']; }

						$LOGO_CLUB = Image('../'.REP_IMG_CLUB_SMALL, $LOGO, '', '', 'LoadImg');
					}
					mysql_free_result($REQ2);
				}
				else { $LOGO_CLUB = '&nbsp;'; }

				if ($ROW1['ID_EQUIPE'] == $id_equipe_fetiche) { $BD = '<strong>'; $BF = '</strong>'; }
				else                                          { $BD = ''; $BF = ''; }

				if ($lien == 'non') { $AFF_EQUIPE = $BD.$EQUIPE.$BF; }
				else                { $AFF_EQUIPE = $BD.'<a href="'.URL_RESULTAT.'?champ='.$champ.'&amp;id_equipe='.$ROW1['ID_EQUIPE'].'">'.$EQUIPE.'</a>'.$BF; }

				echo '				<td>'.$LOGO_CLUB.' '.$AFF_EQUIPE.'</td>'."\n";
			}
			else { echo '<td>'.stripslashes($ROW1[$x]).'</td>'; }

			$x++;
		}

		echo '			</tr>'."\n";

		$pl++;
	}
	mysql_free_result($REQ1);

	echo '		</tbody>
	</table>'."\n\n";
}


function progression($legende, $type, $accession, $barrage, $relegation, $champ, $requete, $lien, $id_equipe_fetiche)
{

?>
	<h5><?php echo FormatText($legende); ?></h5>

	<table class="TblCenter Large400">
		<thead>
			<tr>
				<th class="Large5P TxtLeft"><?php echo FormatText(CLMNT_POSITION); ?></th>
				<th class="Large5P TxtLeft">&nbsp;</th>
				<th class="TxtLeft"><?php echo FormatText(CLMNT_EQUIPE); ?></th>
				<th class="Large5P TxtLeft"><?php echo FormatText(CLMNT_POINTS); ?></th>
				<th class="Large5P TxtLeft"><?php echo FormatText(CLMNT_JOUES); ?></th>
				<th class="Large5P TxtLeft"><?php echo FormatText(CLMNT_VICTOIRES); ?></th>
				<th class="Large5P TxtLeft"><?php echo FormatText(CLMNT_NULS); ?></th>
				<th class="Large5P TxtLeft"><?php echo FormatText(CLMNT_DEFAITES); ?></th>
				<th class="Large5P TxtLeft"><?php echo FormatText(CLMNT_BUTSPOUR); ?></th>
				<th class="Large5P TxtLeft"><?php echo FormatText(CLMNT_BUTSCONTRE); ?></th>
				<th class="Large5P TxtLeft"><?php echo FormatText(CLMNT_DIFF); ?></th>
				<th class="Large5P TxtLeft">&nbsp;</th>
			</tr>
		</thead>
		<tbody>
<?php

	$pl   = 1;
	$REQ1 = mysql_query($requete);

	while ($ROW1 = mysql_fetch_array($REQ1))
	{
		$x = 0;

		if ($ROW1['NOM'] == EXEMPT) { continue; }

		if     ($pl <= $accession AND $type == FormatText(GENERAL)) { $CLASS = 'accession'; }
		elseif ($pl <= $barrage AND $type == FormatText(GENERAL))   { $CLASS = 'barrage'; }
		elseif ($pl > $relegation AND $type == FormatText(GENERAL)) { $CLASS = 'relegation'; }
		elseif (($pl % 2) == 0)										{ $CLASS = 'ligne1'; }
		else														{ $CLASS = 'ligne2'; }

		echo '			<tr class="'.$CLASS.'">
				<td>'.$pl.'</td>'."\n";

		while ($x < 9)
		{
			if ($x == 0)
			{
				$EQUIPE = stripslashes($ROW1[$x]);

				$REQ2 = mysql_query('SELECT MAX('.TBL_JOURNEES.'.numero)
						FROM '.TBL_JOURNEES.', '.TBL_MATCHS.'
						WHERE '.TBL_JOURNEES.'.id='.TBL_MATCHS.'.id_journee
						AND buts_dom IS NOT NULL
						AND '.TBL_JOURNEES.'.id_champ='.$champ);

				while ($ROW2 = mysql_fetch_array($REQ2))
				{
					$fin = $ROW2[0];
				}
				mysql_free_result($REQ2);

				$ad = $fin - 1;

				$REQ3 = mysql_query('SELECT classement
						FROM '.TBL_CLMNT_GRAPH.'
						WHERE id_equipe='.$ROW1['ID_EQUIPE'].'
						AND fin="'.$fin.'"');
				$NBR3 = mysql_num_rows($REQ3);

				if ($NBR3 != 0)
				{
					while ($ROW3 = mysql_fetch_array($REQ3))
					{
						$place = $ROW3['classement'];
					}
				}
				else
				{
					$place = 0;
				}
				mysql_free_result($REQ3);

				$REQ4 = mysql_query('SELECT classement
									FROM '.TBL_CLMNT_GRAPH.'
									WHERE id_equipe='.$ROW1['ID_EQUIPE'].'
									AND fin='.$ad);

				while ($ROW4 = mysql_fetch_array($REQ4))
				{
					$adplace = $ROW4['classement'];
				}
				mysql_free_result($REQ4);

				if     (empty($adplace))    { $PROG = ''; }
				elseif ($adplace == 0)      { $PROG = ''; }
				elseif ($adplace < $place)  { $PROG = Image('../'.REP_IMG, 'down.gif', '', '', 'LoadImg').' '; }
				elseif ($adplace > $place)  { $PROG = Image('../'.REP_IMG, 'up.gif', '', '', 'LoadImg').' '; }
				elseif ($adplace == $place) { $PROG = Image('../'.REP_IMG, 'egal.gif', '', '', 'LoadImg').' '; }
				else						{ $PROG = ''; }

				if (AFF_LOGO_CLUB == 1)
				{
					$REQ5 = mysql_query('SELECT '.TBL_CLUBS.'.url_logo
					  					FROM '.TBL_EQUIPES.', '.TBL_CLUBS.'
						  				WHERE '.TBL_EQUIPES.'.id='.$ROW1['ID_EQUIPE'].'
						  				AND '.TBL_EQUIPES.'.id_club='.TBL_CLUBS.'.id');

					while ($ROW5 = mysql_fetch_array($REQ5))
					{
						if (empty($ROW5['url_logo'])) { $LOGO = 'no_image.png'; } else { $LOGO = $ROW5['url_logo']; }

						$LOGO_CLUB = Image('../'.REP_IMG_CLUB_SMALL, $LOGO, '', '', 'LoadImg').' ';
					}
					mysql_free_result($REQ5);
				}
				else { $LOGO_CLUB = '&nbsp;'; }

				if ($ROW1['ID_EQUIPE'] == $id_equipe_fetiche) { $BD = '<strong>'; $BF = '</strong>'; }
				else                                          { $BD = ''; $BF = ''; }

				if ($lien == 'non') { $AFF_EQUIPE = $BD.$EQUIPE.$BF; }
				else                { $AFF_EQUIPE = $BD.'<a href="'.URL_RESULTAT.'?champ='.$champ.'&amp;id_equipe='.$ROW1['ID_EQUIPE'].'">'.$EQUIPE.'</a>'.$BF; }

				echo '				<td>'.$PROG.'</td>
				<td>'.$LOGO_CLUB.' '.$AFF_EQUIPE.'</td>'."\n";
			}
			else { echo '<td>'.stripslashes($ROW1[$x]).'</td>'; }

			$x++;
		}

		echo '				<td><a href="'.URL_GRAPHIQUE.'?equipe='.$ROW1['ID_EQUIPE'].'" class="jQiFrameGraph" title="'.CONSULT_CLUB_4.' de '.$EQUIPE.'">'.Image('../'.REP_IMG, 'graph.png', 'Stats', '', 'LoadImg').'</a></td>
			</tr>'."\n";

		$pl++;
	}
	mysql_free_result($REQ1);

	echo '		</tbody>
	</table>'."\n\n";
}


// Classement des buteurs
function Buteur($legende, $requete, $type, $EquipeFetiche, $champ, $debut, $fin, $equipe, $complet)
{
?>
<h5><?php echo FormatText($legende); ?></h5>

<table class="TblCenter Large400">
	<thead>
		<tr>
			<th class="TxtLeft Large10P"><?php echo FormatText(CLMNT_POSITION); ?></th>
			<th class="TxtLeft Large50P"><?php echo FormatText(MENU_NOM); ?></th>
			<th class="TxtLeft Large30P"><?php echo FormatText(TEAM); ?></th>
			<th class="TxtCenter Large10P"><?php echo Image('../'.REP_IMG, 'but.gif', '', '', ''); ?></th>
		</tr>
	</thead>
	<tbody>
<?php

	$RES = mysql_query($requete);
	$NBR = mysql_num_rows($RES);

	if ($NBR > 0)
	{
		$pl    = 1;
		$total = -1;

		while ($ROW = mysql_fetch_array($RES))
		{
			$FETICHE = 'NON';
			$array   = explode(',', $EquipeFetiche);

			if (sizeof($array) == 1)
			{
				if ($ROW['idClub'] == $array[0]) { $FETICHE = 'OUI'; }
			}
			else
			{
				for ($i=0; $i<sizeof($array); $i++)
				{
					if ($ROW['idClub'] == $array[$i]) { $FETICHE = 'OUI'; }
				}
			}

			if ($FETICHE == 'OUI') { $CLASS = ' class="Bold"'; } else { $CLASS = ''; }

			if ($total > $ROW['Total'] OR $pl == 1) { $NUM = $pl; } else { $NUM = '-'; }

			$BUTEUR = stripslashes($ROW['NomJoueur'].' '.$ROW['PrenomJoueur']);
?>
		<tr<?php echo $CLASS; ?>>
			<td><?php echo $NUM; ?></td>
			<td><a href="<?php echo URL_JOUEUR; ?>?id_joueur=<?php echo $ROW['id_joueur']; ?>" class="jQiFrameJoueur" title="<?php echo $BUTEUR; ?>"><?php echo $BUTEUR; ?></a></td>
			<td><?php echo stripslashes($ROW['nom']); ?></td>
			<td class="TxtCenter"><?php echo $ROW['Total']; ?></td>
		</tr>
<?php

			$total = $ROW['Total'];

			$pl++;
		}
	}
	else
	{
		echo '		<tr>
			<td colspan="4" class="TxtCenter">[ '.FormatText('Aucun buteur').' ]</td>
		</tr>'."\n";
	}

	mysql_free_result($RES);

	if (!isset($complet) == 1)
	{
		$ETAT = '&amp;complet=1';
		$TEXT = FormatText(PRONO_CLASSEMENT_COMPLET);
	}
	else
	{
		$ETAT = '';
		$TEXT = FormatText(PRONO_CLASSEMENT_REDUIT);
	}

	echo '	</tbody>
	<tfoot>
		<tr>
			<td colspan="4">';

	if ($NBR > 0)
	{
		echo '<a href="'.URL_BUTEUR.'?champ='.$champ.'&amp;type='.$type.'&amp;equipe='.$equipe.'&amp;debut='.$debut.'&amp;fin='.$fin.$ETAT.'">'.$TEXT.'</a>';
	}
	else
	{
		echo '&nbsp;';
	}

	echo '</td>
		</tr>
	</tfoot>
</table>'."\n\n";
}


// Classement des titulaires
function compo($legende, $requete, $type, $EquipeFetiche, $champ, $debut, $fin, $equipe, $complet)
{

?>
<h5><?php echo FormatText($legende); ?></h5>

<table class="TblCenter Large400">
	<thead>
		<tr>
			<th class="TxtLeft Large50P"><?php echo FormatText(MENU_NOM); ?></th>
			<th class="TxtLeft Large30P"><?php echo FormatText(TEAM); ?></th>
			<th class="TxtCenter Large10P"><?php echo FormatText('Tit.'); ?></th>
			<th class="TxtRight Large10P"><?php echo Image('../'.REP_IMG, 'temps.png', FormatText('Tps'), FormatText('Tps'), ''); ?></th>
		</tr>
	</thead>
	<tbody>
<?php

	$RES = mysql_query($requete);
	$NBR = mysql_num_rows($RES);

	if ($NBR > 0)
	{
		$pl    = 1;
		$total = -1;

		while ($row = mysql_fetch_array($RES))
		{
			$Test = 'NON';
			$array = explode(',', $EquipeFetiche);

			if (sizeof($array) == 1)
			{
				if ($row['idClub'] == $array[0]) { $Test = 'OUI'; }
			}
			else
			{
				for ($i=0; $i<sizeof($array); $i++)
				{
					if ($row['idClub'] == $array[$i]) { $Test = 'OUI'; }
				}
			}

			if ($Test == 'OUI') { $CLASS = ' class="Bold"'; } else { $CLASS = ''; }

			$TITULAIRE = stripslashes($row['NomJoueur'].' '.$row['PrenomJoueur']);

			echo '		<tr'.$CLASS.'>
			<td><a href="'.URL_JOUEUR.'?id_joueur='.$row['id_joueur'].'" class="jQiFrameJoueur" title="'.$TITULAIRE.'">'.$TITULAIRE.'</a></td>
			<td>'.stripslashes($row['nom']).'</td>
			<td class="TxtCenter">'.$row['Total'].'</td>
			<td class="TxtRight">'.$row['Totaltps'].'&#039;</td>
		</tr>'."\n";

			$total    = $row['Total'];
			$totaltps = $row['Totaltps'];
		}
	}
	else
	{
		echo '		<tr>
			<td colspan="4" class="TxtCenter">[ '.FormatText('Aucun titulaire').' ]</td>
		</tr>'."\n";
	}

	mysql_free_result($RES);

	echo '	</tbody>
	<tfoot>
		<tr>
			<td colspan="4">'."\n";

	if ($NBR > 0)
	{
		echo '<a href="compo.php?champ='.$champ.'&amp;complet=1&amp;type='.$type.'&amp;equipe='.$equipe.'&amp;debut='.$debut.'&amp;fin='.$fin.'">'.FormatText(PRONO_CLASSEMENT_COMPLET).'</a>';
	}
	else
	{
		echo '&nbsp;';
	}

	echo '</td>
		</tr>
	</tfoot>
</table>'."\n\n";
}


// Classement remplaçants
function compo2($legende, $requete, $type, $EquipeFetiche, $champ, $debut, $fin, $equipe, $complet)
{

?>
<h5><?php echo FormatText($legende); ?></h5>

<table class="TblCenter Large400">
	<thead>
		<tr>
			<th class="TxtLeft Large50P"><?php echo FormatText(MENU_NOM); ?></th>
			<th class="TxtLeft Large40P"><?php echo FormatText(TEAM); ?></th>
			<th class="TxtCenter Large10P"><?php echo Image('../'.REP_IMG, 'change.gif', FormatText('Remp'), FormatText('Remp'), ''); ?></th>
		</tr>
	</thead>
	<tbody>
<?php

	$RES = mysql_query($requete);
	$NBR = mysql_num_rows($RES);

	if ($NBR > 0)
	{
		$pl    = 1;
		$total = -1;

		while ($row = mysql_fetch_array($RES))
		{
			$Test  = 'NON';
			$array = explode(',', $EquipeFetiche);

			if (sizeof($array) == 1)
			{
				if ($row['idClub'] == $array[0]) { $Test = 'OUI'; }
			}
			else
			{
				for ($i=0; $i<sizeof($array); $i++)
				{
					if ($row['idClub'] == $array[$i]) { $Test = 'OUI'; }
				}
			}

			if ($Test == 'OUI') { $CLASS = ' class="Bold"'; } else { $CLASS = ''; }

			$JOUEUR = stripslashes($row['NomJoueur'].' '.$row['PrenomJoueur']);

			echo '		<tr'.$CLASS.'>
			<td><a href="'.URL_JOUEUR.'?id_joueur='.$row['id_joueur'].'" class="jQiFrameJoueur" title="'.$JOUEUR.'">'.$JOUEUR.'</a></td>
			<td>'.stripslashes($row['nom']).'</td>
			<td class="TxtCenter">'.$row['Total'].'</td>
		</tr>'."\n";

			$total = $row['Total'];
		}
	}
	else
	{
		echo '		<tr>
			<td colspan="4" class="TxtCenter">[ '.FormatText('Aucun remplaçant').' ]</td>
		</tr>'."\n";
	}

	mysql_free_result($RES);

	echo '	</tbody>
	<tfoot>
		<tr>
			<td colspan="4">';

	if ($NBR > 0)
	{
		echo '<a href="compo2.php?champ='.$champ.'&amp;complet=1&amp;type='.$type.'&amp;equipe='.$equipe.'&amp;debut='.$debut.'&amp;fin='.$fin.'">'.PRONO_CLASSEMENT_COMPLET.'</a>';
	}
	else
	{
		echo '&nbsp;';
	}

	echo '</td>
		</tr>
	</tfoot>
</table>'."\n\n";
}


// Cartons jaunes
function CJ($legende, $requete, $type, $EquipeFetiche, $champ, $debut, $fin, $equipe, $complet)
{

?>
	<h5><?php echo FormatText($legende); ?></h5>

	<table class="TblCenter Large400">
		<thead>
			<tr>
				<th class="TxtLeft Large50P"><?php echo FormatText(MENU_NOM); ?></th>
				<th class="TxtLeft Large40P"><?php echo FormatText(TEAM); ?></th>
				<th class="TxtCenter Large10P"><?php echo Image('../'.REP_IMG, 'cj.gif', FormatText(ADMIN_CJ_2), FormatText(ADMIN_CJ_2), ''); ?></th>
			</tr>
		</thead>
		<tbody>
<?php

	$RES = mysql_query($requete);
	$NBR = mysql_num_rows($RES);

	if ($NBR > 0)
	{
		$pl    = 1;
		$total = -1;

		while ($row = mysql_fetch_array($RES))
		{
		$Test           = 'NON';
		$array          = explode(',', $EquipeFetiche);

		if (sizeof($array) == 1)
		{
			if ($row['idClub'] == $array[0]) { $Test = 'OUI'; }
		}
		else
		{
			for ($i=0; $i<sizeof($array); $i++)
			{
				if ($row['idClub'] == $array[$i]) { $Test = 'OUI'; }
			}
		}

		if ($Test == 'OUI') { $CLASS = ' class="Bold"'; } else { $CLASS = ''; }

?>
		<tr<?php echo $CLASS; ?>>
			<td><a href="<?php echo URL_JOUEUR; ?>?id_joueur=<?php echo $row['id_joueur']; ?>" class="jQiFrameJoueur TipsJoueur" rel="ajax_photo_joueur.php?id_joueur=<?php echo $row['id_joueur']; ?>" title=""><?php echo stripslashes($row['NomJoueur'].' '.$row['PrenomJoueur']); ?></a></td>
			<td><?php echo stripslashes($row['nom']); ?></td>
			<td class="TxtCenter"><?php echo $row['Total']; ?></td>
		</tr>
<?php

			$total = $row['Total'];
		}
	}
	else
	{
		echo '		<tr>
			<td colspan="3" class="TxtCenter">[ '.FormatText('Aucun carton jaune').' ]</td>
		</tr>'."\n";
	}
	mysql_free_result($RES);

?>

	</tbody>
	<tfoot>
		<tr>
			<td colspan="3">
<?php

	if ($NBR > 0)
	{
		if (!isset($complet))
		{
			echo "<a href=\"carton_j.php?champ=$champ&amp;complet=1&amp;type=".$type."&amp;equipe=$equipe&amp;debut=$debut&amp;fin=$fin\">".FormatText(PRONO_CLASSEMENT_COMPLET)."</a>";
		}
	}
	else
	{
		echo '&nbsp;';
	}

	echo '</td>
		</tr>
	</tfoot>
</table>'."\n\n";
}


// Classement cartons rouges
function CR($legende, $requete, $type, $EquipeFetiche, $champ, $debut, $fin, $equipe, $complet)
{

?>
<h5><?php echo FormatText($legende); ?></h5>

<table class="TblCenter Large400">
	<thead>
		<tr>
			<th class="TxtLeft Large50P"><?php echo FormatText(MENU_NOM); ?></th>
			<th class="TxtLeft Large40P"><?php echo FormatText(TEAM); ?></th>
			<th class="TxtCenter Large10P"><?php echo Image('../'.REP_IMG, 'cr.gif', FormatText(ADMIN_COMPO_2), FormatText(ADMIN_COMPO_2), ''); ?></th>
		</tr>
	</thead>
	<tbody>
<?php

	$RES = mysql_query($requete);
	$NBR = mysql_num_rows($RES);

	if ($NBR > 0)
	{
		$pl    = 1;
		$total = -1;

		while ($row=mysql_fetch_array($RES))
      {
        $Test="NON";
      $array = explode(",",$EquipeFetiche);

      if (sizeof($array)==1)
      {
      if ($row['idClub']==$array[0]){$Test="OUI";}
      }

      else
      {
              for ($i=0; $i < sizeof($array); $i++)
              {
              if ($row['idClub'] == $array[$i]){$Test="OUI";}
              }
       }

		if ($Test == 'OUI') { $CLASS = ' class="Bold"'; } else { $CLASS = ''; }

		$JOUEUR = stripslashes($row['NomJoueur'].' '.$row['PrenomJoueur']);
?>
		<tr<?php echo $CLASS; ?>>
			<td><a href="<?php echo URL_JOUEUR; ?>?id_joueur=<?php echo $row['id_joueur']; ?>" class="jQiFrameJoueur" title="<?php echo $JOUEUR; ?>"><?php echo $JOUEUR; ?></a></td>
			<td><?php echo $row['nom']; ?></td>
			<td class="TxtCenter"><?php echo $row['Total']; ?></td>
		</tr>
<?php

       $total=$row["Total"];
}
	}
	else
	{
		echo '		<tr>
			<td colspan="3" class="TxtCenter">[ '.FormatText('Aucun carton rouge').' ]</td>
		</tr>'."\n";
	}

	mysql_free_result($RES);

?>

	</tbody>
	<tfoot>
		<tr>
			<td colspan="3">
<?php

	if ($NBR > 0)
	{
		if (!isset($complet))
		{
			echo "<a href=\"carton_r.php?champ=$champ&amp;complet=1&amp;type=".$type."&amp;equipe=$equipe&amp;debut=$debut&amp;fin=$fin\">".FormatText(PRONO_CLASSEMENT_COMPLET)."</a>";
		}
	}
	else
	{
		echo '&nbsp;';
	}

	echo '</td>
		</tr>
	</tfoot>
</table>'."\n\n";
}


// Affichage renseignements utilisée dans club.php
function aff_rens($id_classe, $id_clubs)
{
	$REQ1 = mysql_query('SELECT '.TBL_DONNEES.'.id, '.TBL_DONNEES.'.nom, id_rens, id_clubs, '.TBL_RENSEIGNEMENTS.'.id, '.TBL_RENSEIGNEMENTS.'.nom, '.TBL_RENSEIGNEMENTS.'.id_classe, '.TBL_CLUBS.'.id, etat, '.TBL_DONNEES.'.url, '.TBL_RENSEIGNEMENTS.'.url
						FROM '.TBL_DONNEES.', '.TBL_RENSEIGNEMENTS.', '.TBL_CLUBS.'
						WHERE id_clubs='.$id_clubs.'
						AND id_clubs='.TBL_CLUBS.'.id
						AND id_rens='.TBL_RENSEIGNEMENTS.'.id
						AND id_classe='.$id_classe.'
						AND etat="1" ORDER BY rang ASC');

	if (mysql_num_rows($REQ1) > 0)
	{
		$REQ2 = mysql_query('SELECT nom FROM '.TBL_CLASSE.' WHERE id='.$id_classe);

		while($ROW2 = mysql_fetch_array($REQ2))
		{
				echo '<h5>'.stripslashes($ROW2['nom']).'</h5>'."\n";
		}
		mysql_free_result($REQ2);

		echo '	<table class="TblCenter Large450">
		<thead>
			<tr>
				<th colspan="2"></th>
			</tr>
		</thead>
		<tbody>'."\n";

		while ($ROW1 = mysql_fetch_array($REQ1))
		{
			if (empty($ROW1[9]) AND empty($ROW1[10]))
			{
				echo '		<tr>
			<td class="Large30P"><b>'.stripslashes($ROW1[5]).'</b></td>
			<td>'.stripslashes($ROW1[1]).'</td>
		</tr>'."\n";
			}
			elseif (empty($ROW1[9]))
			{
				echo '		<tr>
			<td class="Large30P"><b><a href="'.$ROW1[10].'">'.stripslashes($ROW1[5]).'</a></b></td>
			<td>'.stripslashes($ROW1[1]).'</td>
		</tr>'."\n";
			}
			elseif (empty($ROW1[10]))
			{
				echo '		<tr>
			<td class="Large30P"><b>'.stripslashes($ROW1[5]).' :</b></td>
			<td><a href="'.$ROW1[9].'">'.stripslashes($ROW1[1]).'</a></td>
		</tr>'."\n";
			}
			else
			{
				echo '		<tr>
			<td class="Large30P"><b><a href="'.$ROW1[10].'">'.stripslashes($ROW1[5]).'</a></b></td>
			<td><a href="'.$ROW1[9].'">'.stripslashes($ROW1[1]).'</a></td>
		</tr>'."\n";
			}
		}

		echo '		</tbody>
	</table>'."\n\n";
	}
	mysql_free_result($REQ1);
}


function clmntmini($typemini, $accessionmini, $barragemini, $relegationmini, $champmini, $requetemini, $nb_dessusmini, $nb_dessousmini, $lienmini, $PHPLEAGUE_RACINE, $id_equipe_fetiche)
{
	echo '	<table class="Large100P">
		<thead>
			<tr>
				<th class="TxtLeft">'.FormatText(CLMNT_POSITION).'</th>
				<th class="TxtLeft">'.FormatText(CLMNT_EQUIPE).'</th>
				<th class="TxtLeft">'.FormatText(CLMNT_POINTS).'</th>
			</tr>
		</thead>
		<tbody>'."\n";

	$pl  = 1;
	$pl2 = 1;

	$result = mysql_query($requetemini);

	while ($row = mysql_fetch_array($result))
	{
		if ($row['ID_EQUIPE'] == $id_equipe_fetiche)
		{
			$av = $pl2 - $nb_dessusmini;
			$ap = $pl2 + $nb_dessousmini;
		}

		$pl2++;
	}

	$result = mysql_query($requetemini);

	while ($row = mysql_fetch_array($result))
	{
		if ($pl <= $ap AND $pl >= $av)
		{
			if ($row['NOM'] == EXEMPT) { continue; }
			elseif ($pl <= $accessionmini AND $typemini == GENERAL) { echo '<tr class="accession">'; }
			elseif ($pl <= $barragemini AND $typemini == GENERAL)   { echo '</tr><tr class="barrage">'; }
			elseif ($pl > $relegationmini AND $typemini == GENERAL) { echo '</tr><tr class="relegation">'; }
			elseif (($pl % 2) == 0)                                 { echo '<tr class="ligne1">'; }
			else                                                    { echo '<tr class="ligne2">'; }

			echo '<td>';
			echo $pl;

			$pl++;
			$x = 0;

			while ($x < 2) // nb de colones
			{
				echo '<td>';

				if ($x == 0)
				{
					if ($row['ID_EQUIPE'] == $id_equipe_fetiche) { echo '<b>'; }

					if ($lienmini=='non') { echo $row[$x]; }
					else { echo "<a href=\"".$PHPLEAGUE_RACINE."consult/detaileq.php?champ=$champmini&amp;id_equipe=".$row['ID_EQUIPE']."\" target=\"_parent\">$row[$x]</a>"; }

					if ($row['ID_EQUIPE'] == $id_equipe_fetiche) { echo '</b>'; }
				}
				else
				{
					echo $row[$x];
				}

				$x++;
			}
		}
		elseif ($pl > $ap) { $pl++; }
		elseif ($pl < $av) { $pl++; }
	}

	echo '		</tbody>
		<tfoot>
			<tr>
				<td colspan="3" style="font-size:0.6em; text-align: center;">Powered by <a href="http://www.multiastuces.com">PHPLeague</a> v'.VER.'</td>
			</tr>
		</tfoot>
	</table>'."\n\n";
}


function clmnt_barre($legende, $type, $accession, $barrage, $relegation, $champ, $requete, $lien, $id_equipe_fetiche)
{
	$pl     = 1;
	$action = 0;

	echo '	<table class="Large100P">
		<thead>
			<tr>
				<th colspan="11">'.FormatText($legende).'</th>
			</tr>
			<tr>
				<th>'.FormatText(CLMNT_POSITION).'</th>
				<th>'.FormatText(CLMNT_EQUIPE).'</th>
				<th>'.FormatText(CLMNT_POINTS).'</th>
				<th>'.FormatText(CLMNT_JOUES).'</th>
				<th>'.FormatText(CLMNT_VICTOIRES).'</th>
				<th>'.FormatText(CLMNT_NULS).'</th>
				<th>'.FormatText(CLMNT_DEFAITES).'</th>
				<th>'.FormatText(CLMNT_BUTSPOUR).'</th>
				<th>'.FormatText(CLMNT_BUTSCONTRE).'</th>
				<th>'.FormatText(CLMNT_DIFF).'</th>
				<th>&nbsp;</th>
			</tr>
		</thead>
		<tbody>'."\n";

	$result = mysql_query($requete);

	while ($row = mysql_fetch_array($result))
	{
        $x = 0;

		if ($row['NOM'] == EXEMPT) { continue; }

		if ($pl == $accession and $type == GENERAL)  { $action = 1; }
		if ($pl == $relegation and $type == GENERAL) { $action = 1; }
		if ($pl == $barrage and $type == GENERAL)    { $action = 1; }

		if (($pl % 2) == 0) { $CLASS = 'ligne1'; } else { $CLASS = 'ligne2'; }

        echo '			<tr class="'.$CLASS.'">
				<td>'.$pl.'</td>'."\n";

		$pl++;

		while($x < 9)
		{
			echo '				<td>';

			if ($x == 0)
			{
				if ($row['ID_EQUIPE'] == $id_equipe_fetiche) { echo '<b>'; }

				if ($lien == 'non')
				{
					echo stripslashes($row[$x]);
				}
				else
				{
					echo '<a href="detaileq.php?champ='.$champ.'&amp;id_equipe='.$row['ID_EQUIPE'].'">'.stripslashes($row[$x]).'</a>';
				}

				if ($row['ID_EQUIPE'] == $id_equipe_fetiche) { echo '</b>'; }
			}
			else { echo stripslashes($row[$x]); }

			$x++;

			echo '</td>'."\n";
		}

		echo '				<td>';

		if ($type == GENERAL)
		{
			echo '<a href="#" onclick="window.open(\'graph.php?equipe='.$row['ID_EQUIPE'].'\', \'Stats\', \'toolbar=0, location=0, directories=0, status=0, scrollbars=0, resizable=0, copyhistory=0, menuBar=0, width=560, height=520\');return false;"><img src="graph.gif" alt="'.CONSULT_CLUB_4.'"></a>';
		}
		else { echo '&nbsp;'; }

		echo '</td>
			</tr>'."\n";

		if ($action == 0)
		{
			$action = 0;

			echo '			<tr>
				<td colspan="11">&nbsp;</td>
			</tr>'."\n";
		}

		if ($action == 1)
		{
			$action = 0;

			echo '			<tr>
				<td colspan="11"><img src="pix.gif" alt="" title="">&nbsp;</td>
			</tr>'."\n";
		}
	}

	echo '		</tbody>
	</table>'."\n\n";
}


function clmntmini_barre($typemini, $accessionmini, $barragemini, $relegationmini, $champmini, $requetemini, $nb_dessusmini, $nb_dessousmini, $lienmini, $PHPLEAGUE_RACINE, $id_equipe_fetiche)
{
	echo '	<table class="Large100P">
		<thead>
			<tr>
				<th>'.FormatText(CLMNT_POSITION).'</th>
				<th>'.FormatText(CLMNT_EQUIPE).'</th>
				<th>'.FormatText(CLMNT_POINTS).'</th>
			</tr>
		</thead>
		<tbody>'."\n";

	$pl  = 1;
	$pl2 = 1;

	$result = mysql_query($requetemini);

	while ($row = mysql_fetch_array($result))
	{
		if ($row['ID_EQUIPE'] == $id_equipe_fetiche)
		{
			$av = $pl2 - $nb_dessusmini;
			$ap = $pl2 + $nb_dessousmini;
		}

		$pl2++;
	}

	$result = mysql_query($requetemini);

	while ($row = mysql_fetch_array($result))
	{
		if ($pl <= $ap AND $pl >= $av)
		{
			if ($row['NOM'] == EXEMPT) { continue; $action = 0; }
			if ($pl == $accessionmini) { $action = 1; }
			if (($pl%2) == 0)
			{
				echo '<tr class="ligne1">';

				$action = 0;
			}
			else
			{
				echo '<tr class="ligne2">';

				$action = 0;
			}

			if ($pl == $relegationmini) { $action = 1; }
			if ($pl == $barragemini)    { $action = 1; }

			echo '<td>';
			echo $pl;

			$pl++;
			$x = 0;

			while($x < 2) // nb de colonne
			{
				echo '<td>';

				if ($x == 0)
				{
					if ($row['ID_EQUIPE'] == $id_equipe_fetiche) { echo '<b>'; }

					if ($lienmini == 'non')
					{
						echo $row[$x];
					}
					else
					{
						echo "<a href=\"".$PHPLEAGUE_RACINE."consult/detaileq.php?champ=$champmini&amp;id_equipe=".$row['ID_EQUIPE']."\" target=\"_parent\">$row[$x]</a>";
					}

					if ($row['ID_EQUIPE'] == $id_equipe_fetiche) { echo '</b>'; }
				}
				else
				{
					echo $row[$x];
				}

				$x++;
			}

			if ($action == 1 AND $typemini == FormatText(GENERAL))
			{
				echo "				<tr>
					<td bgcolor=\"#000\" colspan=\"3\"><img height=\"2\" src=\"pix.gif\" width=\"1\" alt=\"\"></td>
				</tr>";

				$action = 0;
			}
			elseif ($typemini == FormatText(GENERAL))
			{
				echo "
				<tr>
					<td bgcolor=\"#000\" colspan=\"3\" height=\"1\"></td>
				</tr>";

			$action = 0;
			}
		}
		elseif ($pl > $ap) { $pl++; }
		elseif ($pl < $av) { $pl++; }
	}

	echo '		</tbody>
		<tfoot>
			<tr>
				<td colspan="3" style="font-size:0.6em; text-align: center;">Powered by <a href="http://www.multiastuces.com">PHPLeague</a> v'.VER.'</td>
			</tr>
		</tfoot>
	</table>'."\n\n";
}


function clmntred($typemini, $accessionmini, $barragemini, $relegationmini, $champmini, $requetemini, $lienmini, $PHPLEAGUE_RACINE, $id_equipe_fetiche)
{
	echo '	<table class="Large100P">
		<thead>
			<tr>
				<th class="TxtLeft">'.FormatText(CLMNT_POSITION).'</th>
				<th class="TxtLeft">'.FormatText(CLMNT_EQUIPE).'</th>
				<th class="TxtLeft">'.FormatText(CLMNT_POINTS).'</th>
			</tr>
		</thead>
		<tbody>'."\n";

	$pl  = 1;
	$REQ = mysql_query($requetemini);

	while ($ROW = mysql_fetch_array($REQ))
	{
        $x = 0;

		if     ($ROW['NOM'] == EXEMPT) { continue; }
		if     ($pl <= $accessionmini AND $typemini == GENERAL) { echo '<tr class="accession">'."\n"; }
		elseif ($pl <= $barragemini AND $typemini == GENERAL)   { echo '<tr class="barrage">'."\n"; }
		elseif ($pl > $relegationmini AND $typemini == GENERAL) { echo '<tr class="relegation">'."\n"; }
		elseif (($pl % 2) == 0)                                 { echo '<tr class="ligne1">'."\n"; }
		else													{ echo '<tr class="ligne2">'."\n"; }

		echo '<td>'.$pl.'</td>'."\n";

		while($x < 2)
		{
			echo '<td>';

			if ($x == 0)
			{
				if ($ROW['ID_EQUIPE'] == $id_equipe_fetiche) { echo '<b>'; }

				if ($lienmini == 'non') { echo $ROW[$x]; }
				else
				{
					echo '<a href="'.$PHPLEAGUE_RACINE.'consult/detaileq.php?champ='.$champmini.'&amp;id_equipe='.$ROW['ID_EQUIPE'].'" target="_parent">'.stripslashes($ROW[$x]).'</a>';
				}

				if ($ROW['ID_EQUIPE'] == $id_equipe_fetiche) { echo '</b>'; }
			}
			else { echo stripslashes($ROW[$x]); }

			echo '</td>'."\n";

			$x++;
		}

		echo '</tr>'."\n";

		$pl++;
	}
	mysql_free_result($REQ);

	echo '		</tbody>
		<tfoot>
			<tr>
				<td colspan="3" style="font-size:0.6em; text-align: center;">Powered by <a href="http://www.multiastuces.com">PHPLeague</a> v'.VER.'</td>
			</tr>
		</tfoot>
	</table>'."\n\n";
}


function clmnt_barrered($typemini, $accessionmini, $barragemini, $relegationmini, $champmini, $requetemini, $lienmini, $PHPLEAGUE_RACINE, $id_equipe_fetiche)
{
	echo '	<table class="Large100P">
		<thead>
			<tr>
				<th class="TxtLeft">'.FormatText(CLMNT_POSITION).'</th>
				<th class="TxtLeft">'.FormatText(CLMNT_EQUIPE).'</th>
				<th class="TxtLeft">'.FormatText(CLMNT_POINTS).'</th>
			</tr>
		</thead>
		<tbody>'."\n";

	$pl     = 1;
	$action = 0;
	$result = mysql_query($requetemini);

	while ($row = mysql_fetch_array($result))
	{
		if ($row['NOM'] == EXEMPT) { continue; }
		if ($pl == $accessionmini AND $typemini == GENERAL) { $action = 1; }
		if (($pl%2) == 0)
		{
			echo '<tr class="ligne1">';
		}
		else
		{
			echo '<tr class="ligne2">';
		}

		//if ($pl==($accession+1) and $type==GENERAL){$action=1;} // Si vous souhaitez encadrer le premier non promu
		if ($pl==$relegationmini and $typemini==GENERAL){$action=1;}
		if ($pl==$barragemini and $typemini==GENERAL){$action=1;}

		echo "<td>";

		print $pl;

		$pl++;
		$x=0;

		while ($x < 2)
		{
			echo '<td>';

			if ($x == 0)
			{
				if ($row['ID_EQUIPE'] == $id_equipe_fetiche) { echo '<b>'; }

				if ($lienmini == 'non') { echo $row[$x]; }
				else { echo "<a href=\"".$PHPLEAGUE_RACINE."consult/detaileq.php?champ=$champmini&amp;id_equipe=".$row['ID_EQUIPE']."\" target=\"_parent\">$row[$x]</a>"; }

				if ($row['ID_EQUIPE'] == $id_equipe_fetiche) { echo '</b>'; }
			}
			else { print stripslashes($row[$x]); }

			$x++;
		}

	}

	echo '		</tbody>
		<tfoot>
			<tr>
				<td colspan="3" style="font-size:0.6em; text-align: center;">Powered by <a href="http://www.multiastuces.com">PHPLeague</a> v'.VER.'</td>
			</tr>
		</tfoot>
	</table>'."\n\n";
}


// Choix du championnat
function demande_champ($champ)
{
?>
	<form method="post" action="" class="TblCenter TxtCenter">
		<p>
			<label for="champ" class="Title"><?php echo FormatText(ADMIN_TAPVERT_MSG2); ?></label>
			<select name="champ" id="champ">
				<option value="0">&nbsp;</option>
<?php

	$REQ1 = mysql_query('SELECT id, annee FROM '.TBL_SAISONS.' ORDER BY annee DESC');

	while ($ROW1 = mysql_fetch_array($REQ1))
	{
		echo '				<optgroup label="'.$ROW1['annee'].'/'.($ROW1['annee'] + 1).'">'."\n";

		$REQ2 = mysql_query('SELECT '.TBL_DIVISIONS.'.nom, '.TBL_SAISONS.'.annee, '.TBL_CHAMPIONNATS.'.id
							FROM '.TBL_DIVISIONS.', '.TBL_SAISONS.', '.TBL_CHAMPIONNATS.'
							WHERE '.TBL_SAISONS.'.id='.$ROW1['id'].'
							AND '.TBL_CHAMPIONNATS.'.id_division='.TBL_DIVISIONS.'.id
							AND '.TBL_CHAMPIONNATS.'.id_saison='.TBL_SAISONS.'.id
							ORDER BY '.TBL_SAISONS.'.annee DESC, '.TBL_DIVISIONS.'.nom ASC');

		while ($ROW2 = mysql_fetch_array($REQ2))
		{
			if ($champ == $ROW2[2]) { $SEL = ' selected="selected"'; } else { $SEL = ''; }

			echo '					<option value="'.$ROW2[2].'"'.$SEL.'>'.stripslashes($ROW2[0]).'</option>'."\n";
		}
		mysql_free_result($REQ2);

		echo '				</optgroup>'."\n";
	}
	mysql_free_result($REQ1);

?>
			</select>
			<input type="submit" value="<?php echo FormatText(ENVOI); ?>" />
		</p>
	</form>

<?php

}


// Choix du club
function demande_club($champ, $id_clubs)
{
?>
	<form method="post" action="" class="TblCenter TxtCenter">
		<p>
			<label for="id_clubs"><?php echo FormatText(DETAILEQ_TITRE); ?></label>
			<select name="id_clubs" id="id_clubs">
				<option value="0">&nbsp;</option>
<?php

	$REQ = mysql_query('SELECT phpl_clubs.id, phpl_clubs.nom
						FROM phpl_clubs, phpl_equipes
						WHERE phpl_equipes.id_champ = '.$champ.'
						AND phpl_equipes.id_club = phpl_clubs.id
						ORDER BY nom ASC');

	while ($ROW = mysql_fetch_array($REQ))
	{
		if ($ROW[0] == $id_clubs) { $SEL = ' selected="selected"'; } else { $SEL = ''; }

		echo '				<option value="'.$ROW[0].'"'.$SEL.'>'.$ROW[1].'</option>'."\n";
	}
	mysql_free_result($REQ);

?>
			</select>
			<input type="hidden" name="champ" value="<?php echo $champ; ?>" />
			<input type="submit" value="<?php echo FormatText(ENVOI); ?>" />
		</p>
	</form>

<?php

}


// Choix d'une équipe
function demande_equipe($champ) {

$requete = "SELECT phpl_clubs.nom, id_champ, phpl_equipes.id
              FROM phpl_clubs, phpl_equipes
              WHERE phpl_equipes.id_champ='$champ'
			  and phpl_clubs.id=phpl_equipes.id_club
              ORDER BY nom";
$resultat = mysql_query($requete);

echo "<form method=\"get\" action=\"\">";

echo "<select name=\"id_equipe\">";
echo "<option value=\"0\"> </option>";

      while($row = mysql_fetch_array($resultat))
      {
      $row[0] = stripslashes($row[0]);
      $a=$row[1]+1;
      echo (" <option value=\"$row[2]\">$row[0]");
      echo ("</option>\n");
      }
echo "</select>";
$button=ENVOI;
echo "<input type=\"hidden\" name=\"champ\" value=\"$champ\">";
echo "<input type=\"submit\" value=\"$button\">";
echo "</form>";
}


function match_by_club($champ, $id_match2, $id_match, $id_equipe) {
	$requete = "SELECT j.numero, j.date_prevue, m.date_reelle, id_equipe_dom, id_equipe_ext, cdom.nom, cext.nom,m.id ";
	$requete.=" FROM phpl_journees j, phpl_matchs m, phpl_equipes e, phpl_equipes dom, phpl_clubs cdom, phpl_equipes ext, phpl_clubs cext,phpl_convocation ";
  $requete.=" WHERE m.id_journee = j.id ";
  $requete.=" AND ( ";
  $requete.=" id_equipe_dom = e.id ";
  $requete.=" OR id_equipe_ext = e.id ";
  $requete.=" ) ";
  $requete.=" AND j.id_champ =$champ ";
  $requete.=" AND e.id =$id_equipe ";
  $requete.=" AND e.id_champ =$champ ";
  $requete.=" AND dom.id_champ =$champ ";
  $requete.=" AND ext.id_champ =$champ ";
  $requete.=" AND dom.id = id_equipe_dom ";
  $requete.=" AND id_equipe_ext = ext.id ";
  $requete.=" AND ext.id_club = cext.id ";
  $requete.=" AND dom.id_club = cdom.id ";
  $requete.=" AND phpl_convocation.id_match = m.id ";
  $requete.=" ORDER BY ifnull( m.date_reelle, j.date_prevue ) ASC ";

	$resultats=mysql_query($requete);

	echo "<select name=\"id_match\" onchange=\"javascript:document.location.href=('?champ=$champ&id_equipe=$id_equipe&bloque=1&id_match='+this.value);\" class=\"inputbox\">";

	while ($row = mysql_fetch_array($resultats))
	{
		$date_prevu  = $row[1];
		$date_reelle = $row[2];

		if (($date_reelle == '') OR ($date_reelle == '0000-00-00 00:00:00'))
		{
			$jour  = substr($row[1], 8, 2);
			$mois  = substr($row[1], 5, 2);
			$annee = substr($row[1], 0, 4);

			$dateok = $jour.'/'.$mois.'/'.$annee;
		}
		else
		{
			$jour  = substr($row[2], 8, 2);
			$mois  = substr($row[2], 5, 2);
			$annee = substr($row[2], 0, 4);

			$dateok = $jour.'/'.$mois.'/'.$annee;
		}

		echo "<option ";

		if (($id_match2==$row[7]) or ($id_match==$row[7]))
		{
			echo " selected=\"selected\" ";
		}

		echo ("value=\"$row[7]\"> $dateok &nbsp;&nbsp; $row[5] - $row[6] &nbsp;\n");
		echo ("</option>\n");
	}

	echo ("</select>\n");
}


function choix_equipes($champ)
{
	echo "
	<h1>".FormatText(CONSULT_DUEL)."</h1>
	<h5>".FormatText(DUEL_MSG1)."</h5>

	<form method=\"get\" action=\"\">
		<table>
			<thead>
				<tr>
					<th>".FormatText(DOMICILE)."</th>
					<th>".FormatText(EXTERIEUR)."</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>";

	$result = mysql_query("SELECT phpl_clubs.nom FROM phpl_clubs, phpl_equipes WHERE phpl_equipes.id_champ='$champ' AND phpl_clubs.id=phpl_equipes.id_club AND phpl_clubs.nom!='exempte' ORDER BY nom");

	while($row = mysql_fetch_array($result))
	{
		echo "$row[0]<input type=\"radio\" value=\"$row[0]\" name=\"IdEqDom\" /><br />";
	}

	echo "</td>
					<td>";

	$result = mysql_query("select phpl_clubs.nom from phpl_clubs, phpl_equipes WHERE phpl_equipes.id_champ='$champ' AND phpl_clubs.id=phpl_equipes.id_club AND phpl_clubs.nom!='exempte' ORDER BY nom");

	while($row = mysql_fetch_array($result))
	{
		$row[0] = FormatText($row[0]);

		echo "<input type=\"radio\" value=\"$row[0]\" name=\"IdEqExt\">$row[0]<br />";
	}

	echo "</td>
				</tr>
				<tr>
					<td colspan=\"2\">
						<input type=\"hidden\" name=\"champ\" value=\"$champ\">
						<input type=\"submit\" value=\"".FormatText(ENVOI)."\">
					</td>
				</tr>
			</tbody>
		</table>
	</form>";
}


// Afiche le dernière journée ou journée suivante
function DayLastNext($champ, $TITRE, $NBR = 0)
{
	$REQ1 = mysql_query('SELECT id_equipe_fetiche
						FROM '.TBL_PARAMETRES.'
						WHERE id_champ='.$champ);
	$ROW1 = mysql_fetch_array($REQ1);
	mysql_free_result($REQ1);

	$EQ_FETICHE = $ROW1['id_equipe_fetiche'];

	if (!empty($EQ_FETICHE))
	{
		$REQ2 = mysql_query('SELECT '.TBL_DIVISIONS.'.nom
							FROM '.TBL_DIVISIONS.', '.TBL_CHAMPIONNATS.'
							WHERE id_division='.TBL_DIVISIONS.'.id');
		$ROW2 = mysql_fetch_array($REQ2);
		mysql_free_result($REQ2);

		$REQ3 = mysql_query('SELECT MAX('.TBL_JOURNEES.'.numero)
							FROM '.TBL_JOURNEES.', '.TBL_MATCHS.'
							WHERE '.TBL_JOURNEES.'.id='.TBL_MATCHS.'.id_journee
							AND buts_dom IS NOT NULL
							AND '.TBL_JOURNEES.'.id_champ='.$champ.'
							AND (id_equipe_ext='.$EQ_FETICHE.' OR id_equipe_dom='.$EQ_FETICHE.')');

		while ($ROW3 = mysql_fetch_array($REQ3))
		{
			$NUMERO = $ROW3[0] + $NBR;

			$REQ4 = mysql_query('SELECT logodom.url_logo AS logodom, logoext.url_logo AS logoext, logodom.nom AS domnom, logoext.nom AS extnom, '.TBL_MATCHS.'.buts_dom AS dombut, '.TBL_MATCHS.'.buts_ext AS extbut, '.TBL_JOURNEES.'.date_prevue AS datematch, logodom.id AS logoiddom, logoext.id AS logoidext
								FROM '.TBL_EQUIPES.' AS dom, '.TBL_EQUIPES.' AS ext, '.TBL_MATCHS.', '.TBL_JOURNEES.', '.TBL_CLUBS.' AS logodom, '.TBL_CLUBS.' AS logoext
								WHERE '.TBL_MATCHS.'.id_equipe_dom=dom.id
								AND '.TBL_MATCHS.'.id_equipe_ext=ext.id
								AND '.TBL_JOURNEES.'.id_champ='.$champ.'
								AND '.TBL_JOURNEES.'.numero='.$NUMERO.'
								AND dom.id_club=logodom.id
								AND ext.id_club=logoext.id
								AND '.TBL_MATCHS.'.id_journee='.TBL_JOURNEES.'.id
								AND ('.TBL_MATCHS.'.id_equipe_ext='.$EQ_FETICHE.'
								OR '.TBL_MATCHS.'.id_equipe_dom='.$EQ_FETICHE.')');

			while ($ROW4 = mysql_fetch_array($REQ4))
			{
		 		$DATE = preg_replace('/(\d{2,4})-(\d{1,2})-(\d{1,2})/', '\3/\2/\1', $ROW4['datematch']);

				if     ($NUMERO == 1) { $EXT_NUM = CONSULT_NB1_F;}
				elseif ($NUMERO >= 2) { $EXT_NUM = CONSULT_NB2;}
				else                  { $EXT_NUM = CONSULT_NBX;}

				if (!empty($ROW4['logodom']) AND file_exists('../'.REP_IMG_CLUB_MEDIUM.$ROW4['logodom']))
				{
					$IMG_DOM = Image('../'.REP_IMG_CLUB_MEDIUM, $ROW4['logodom'], '', '', 'LoadImg');
				}
				else
				{
					$IMG_DOM = '&nbsp;';
				}

				if (!empty($ROW4['logoext']) AND file_exists('../'.REP_IMG_CLUB_MEDIUM.$ROW4['logoext']))
				{
					$IMG_EXT = Image('../'.REP_IMG_CLUB_MEDIUM, $ROW4['logoext'], '', '', 'LoadImg');
				}
				else
				{
					$IMG_EXT = '&nbsp;';
				}

				$BUT_DOM = $ROW4['dombut'];
				$BUT_EXT = $ROW4['extbut'];
				$DOM_NOM = stripslashes($ROW4['domnom']);
				$EXT_NOM = stripslashes($ROW4['extnom']);
			}
			mysql_free_result($REQ4);
		}
		mysql_free_result($REQ3);

		if (empty($NBR) OR $NBR < 0) { $SEP = '-'; } else { $SEP = 'VS'; }

?>

	<h4><?php echo FormatText($TITRE); ?></h4>

	<table class="TblCenter Large400 TxtCenter">
		<thead>
			<tr>
				<th colspan="3"><?php echo FormatText($NUMERO.$EXT_NUM.' '.CONSULT_JOURNEE_DE).' '.$ROW2['nom'].' - '.$DATE; ?></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td class="ScoreClub Large40P"><?php echo $IMG_DOM; ?></td>
				<td rowspan="2" class="Score"><?php echo $BUT_DOM.' '.$SEP.' '.$BUT_EXT; ?></td>
				<td class="ScoreClub Large40P"><?php echo $IMG_EXT; ?></td>
			</tr>
			<tr>
				<td class="ScoreClub Large40P"><?php echo $DOM_NOM; ?></td>
				<td class="ScoreClub Large40P"><?php echo $EXT_NOM; ?></td>
			</tr>
		</tbody>
	</table>

<?php

	}
}


function Anniversaire($TITRE, $VAL_WHERE)
{
	$TMP = '<table class="TblCenter Large400">
	<thead>
		<tr>
			<th colspan="3">'.FormatText($TITRE).'</th>
		</tr>
	</thead>
	<tbody>'."\n";

	$REQ = mysql_query('SELECT id, prenom, nom, DATE_FORMAT(date_naissance, "%d/%m/%Y") AS DateNaiss
						FROM phpl_joueurs
						WHERE date_naissance LIKE '.$VAL_WHERE.'
						ORDER BY CONCAT(SUBSTRING(date_naissance, 7, 4), SUBSTRING(date_naissance, 4, 2), SUBSTRING(date_naissance, 1, 2)) ASC, prenom ASC, nom ASC');

	if (mysql_num_rows($REQ) > 0)
	{
		while ($ROW = mysql_fetch_array($REQ))
		{
			$AGE = date('Y') - (substr($ROW['DateNaiss'], 6, 4));

			$TMP.= '		<tr>
			<td class="Large50P"><a href="'.URL_JOUEUR.'?id_joueur='.$ROW['id'].'" class="jQiFrameJoueur TipsJoueur" rel="ajax_photo_joueur.php?id_joueur='.$ROW['id'].'">'.$ROW['prenom'].' '.$ROW['nom'].'</a></td>
			<td class="Large25P">'.$AGE.' ans</td>
			<td class="Large25P TxtCenter">'.$ROW['DateNaiss'].'</td>
		</tr>'."\n";
		}
	}
	else
	{
		$TMP.= '		<tr>
			<td colspan="3" class="TxtCenter">'.FormatText('Aucun anniversaire').'</td>
		</tr>'."\n";
	}

	mysql_free_result($REQ);

	$TMP.= '	</tbody>
</table>'."\n\n";

	return $TMP;
}


////////////////////////////////////////////////////////////
function AffDrapeaux($NATION, $TYPE)
{
	global $lang;

	if (empty($NATION))
	{
		echo '&nbsp';
	}
	else
	{
		$FILE = dirname(__FILE__).'/'.REP_BASES.'country_'.$lang.'.csv';

		if (is_readable($FILE))
		{
			$OPEN = @fopen($FILE, 'r');

			while (($VAL = @fgetcsv($OPEN, 1024, ';')) !== FALSE)
			{
				if ($TYPE == 2) { $NOM = ' '.trim($VAL[1]); } else { $NOM = ''; }

				if ($NATION === strtolower($VAL[0]))
				{
					echo Image('../'.REP_IMG_DRAPEAU, strtolower($VAL[0]).'.'.EXT_DRAPEAUX, '', '', '').$NOM;
				}
			}

			@fclose($OPEN);
		}
	}
}

////////////////////////////////////////////////////////////
function UpdateCheck($host, $directory, $filename)
{
	$FICHIER = @fopen($host.'/'.$directory.'/'.$filename, 'r');

	if (is_readable($FICHIER))
	{
		while (($DATA = @fgetcsv($FICHIER, 1024, ';')) !== FALSE)
		{
			$VER = $DATA[0];
			$URL = $DATA[1];
		}

		$TMP = '<a href="'.$URL.'">'.$VER.'</a>';

		@fclose($FICHIER);
	}
	else
	{
		$TMP = 'Erreur : '.$host.'/'.$directory.'/'.$filename;
	}

	return $TMP;
}

?>