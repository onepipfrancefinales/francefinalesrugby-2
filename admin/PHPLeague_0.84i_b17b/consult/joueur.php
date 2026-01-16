<?php

$id_joueur      = isset($_REQUEST['id_joueur'])      ? $_REQUEST['id_joueur']      : NULL;
$annee          = isset($_REQUEST['annee'])          ? $_REQUEST['annee']          : NULL;
$details_buts   = isset($_REQUEST['details_buts'])   ? $_REQUEST['details_buts']   : NULL;
$details_stats  = isset($_REQUEST['details_stats'])  ? $_REQUEST['details_stats']  : NULL;
$details_stats2 = isset($_REQUEST['details_stats2']) ? $_REQUEST['details_stats2'] : NULL;
$details_CJ     = isset($_REQUEST['details_CJ'])     ? $_REQUEST['details_CJ']     : NULL;
$details_CR     = isset($_REQUEST['details_CR'])     ? $_REQUEST['details_CR']     : NULL;

define('MOD', 'consult');

require('../config.php') ;
require('../function_consult.php');

include('../header_min.php');

ouverture();

if ($AGENT == 'iphone')
{
	echo '	<div id="topbar">
		<div id="leftnav">
			<a href="javascript:history.back();">Retour</a>
		</div>
		<div id="title">
			<h1>'.FormatText('Info. joueurs').'</h1>
		</div>
	</div>'."\n\n";
}

if (!$id_joueur)
{
?>
	<form method="post" action="">
		<select name="id_joueur" id="id_joueur">
<?php

	$REQ = mysql_query('SELECT id, nom, prenom FROM '.TBL_JOUEURS.' ORDER BY nom ASC, prenom ASC');

	while($ROW = mysql_fetch_array($REQ))
	{
		echo '			<option value="'.$ROW['id'].'">'.stripslashes($ROW['nom'].' '.$ROW['prenom']).'</option>';
	}
	mysql_free_result($REQ);

?>
		</select>
		<input type="submit" value="<?php echo ENVOI;?>" />
	</form>
<?php
}
else
{
	$IMG_BUT  = '<img src="../'.REP_IMG.'but.gif" alt="" title="" />';
	$IMG_REMP = '<img src="../'.REP_IMG.'up.gif" alt="" title="" />';
	$IMG_CJ   = '<img src="../'.REP_IMG.'cj.gif" alt="" title="" />';
	$IMG_CR   = '<img src="../'.REP_IMG.'cr.gif" alt="" title="" />';

	$REQ = mysql_query('SELECT '.TBL_CLUBS.'.nom AS nom_club, '.TBL_JOUEURS.'.nom AS nom_joueur, '.TBL_JOUEURS.'.prenom, '.TBL_JOUEURS.'.date_naissance, '.TBL_JOUEURS.'.photo, '.TBL_JOUEURS.'.position_terrain, '.TBL_JOUEURS.'.nat, '.TBL_JOUEURS.'.taille, '.TBL_JOUEURS.'.poid, '.TBL_JOUEURS.'.num
						FROM '.TBL_CLUBS.', '.TBL_JOUEURS.', '.TBL_EFFECTIF.', '.TBL_EQUIPES.'
						WHERE '.TBL_EFFECTIF.'.id_equipe='.TBL_EQUIPES.'.id
						AND '.TBL_EFFECTIF.'.id_joueur='.TBL_JOUEURS.'.id
						AND '.TBL_EQUIPES.'.id_club='.TBL_CLUBS.'.id
						AND '.TBL_JOUEURS.'.id='.$id_joueur);
	$ROW = mysql_fetch_array($REQ);
		   mysql_free_result($REQ);

	// Nom et prénom du joueur
	$JOUEUR_NOM    = stripslashes($ROW['nom_joueur']);
	$JOUEUR_PRENOM = stripslashes($ROW['prenom']);

	// Photo du joueur
	if (!empty($ROW['photo']) AND file_exists('../'.REP_IMG_JOUEUR.$ROW['photo']))
	{
		$PHOTO = Image('../'.REP_IMG_JOUEUR, $ROW['photo'], '', $JOUEUR_NOM.' '.$JOUEUR_PRENOM, 'LoadImg');
	}
	else
	{
		$PHOTO = Image('../'.REP_IMG_JOUEUR, IMG_NO_JOUEUR, '', '', 'LoadImg');
	}

	// Date de naissance
	if ($ROW['date_naissance'] == '0000-00-00' OR empty($ROW['date_naissance']))
	{
		$DATE_NAISS = 'nc';
	}
	else
	{
		$NAIS_ANNEE = substr($ROW['date_naissance'], 0, 4);
		$NAIS_MOIS  = substr($ROW['date_naissance'], 5, 2);
		$NAIS_JOURS = substr($ROW['date_naissance'], 8, 2);
		$NAIS_DATE  = $NAIS_JOURS.'/'.$NAIS_MOIS.'/'.$NAIS_ANNEE;
		$ANNEE      = date('Y');
		$MOIS       = date('m');
		$JOUR       = date('d');

		if (($MOIS < $NAIS_MOIS) || (($MOIS == $NAIS_MOIS) && ($JOUR < $NAIS_JOURS)))
		{
			$AJUSTE = -1;
		}
		else
		{
			$AJUSTE = 0;
		}

    	$DATE_NAISS = $NAIS_DATE.' ('.($ANNEE - $NAIS_ANNEE + $AJUSTE).' ans)';
	}

	// Position du terrain
	if (empty($ROW['position_terrain'])) { $POSITION = 'nc'; }
	else								 { $POSITION = $ROW['position_terrain']; }

	// Numéro du maillot
	if ($ROW['num'] > 0) { $NUM_MAILLOT = $ROW['num']; }
	else				 { $NUM_MAILLOT = 'nc'; }

	// Taille
	if ($ROW['taille'] > 0) { $TAILLE = $ROW['taille'].' M'; }
	else					{ $TAILLE = 'nc'; }

	// Poids
	if ($ROW['poid'] > 0) { $POIDS = $ROW['poid'].' Kg'; }
	else				  { $POIDS = 'nc'; }

?>
	<table class="TblCenter Large100P">
		<thead>
			<tr>
				<th colspan="3"><?php echo $JOUEUR_NOM.' '.$JOUEUR_PRENOM; ?></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td rowspan="6" class="TxtCenter"><?php echo $PHOTO; ?></td>
				<td style="height: 21px;"><?php echo FormatText(FICHE_DATE); ?></td>
				<td><?php echo $DATE_NAISS; ?></td>
			</tr>
			<tr>
				<td style="height: 21px;"><?php echo FormatText(ADMIN_JOUEURS_MSG9); ?></td>
				<td><?php echo $POSITION; ?></td>
			</tr>
			<tr>
				<td style="height: 21px;"><?php echo FormatText(FICHE_MAILLOTa); ?></td>
				<td><?php echo $NUM_MAILLOT; ?></td>
			</tr>
			<tr>
				<td style="height: 21px;"><?php echo FormatText(ADMIN_JOUEURS_MSG12); ?></td>
				<td><?php echo AffDrapeaux($ROW['nat'], 2); ?></td>
			</tr>
			<tr>
				<td style="height: 21px;"><?php echo FormatText(FICHE_TAILLE); ?></td>
				<td><?php echo $TAILLE; ?></td>
			</tr>
			<tr>
				<td style="height: 21px;"><?php echo FormatText(FICHE_POID); ?></td>
				<td><?php echo $POIDS; ?></td>
			</tr>
		</tbody>
	</table>

<?php

// stats pour les buts
if (!$details_buts)
{
	$REQ = mysql_query('SELECT '.TBL_CLUBS.'.nom, '.TBL_SAISONS.'.annee, ('.TBL_SAISONS.'.annee)+1, '.TBL_DIVISIONS.'.nom, SUM('.TBL_BUTEURS.'.buts) AS Total, '.TBL_CHAMPIONNATS.'.id AS id_champ, '.TBL_MATCHS.'.date_reelle AS date
						FROM '.TBL_CLUBS.', '.TBL_EFFECTIF.', '.TBL_SAISONS.', '.TBL_DIVISIONS.', '.TBL_CHAMPIONNATS.', '.TBL_BUTEURS.', '.TBL_JOUEURS.', '.TBL_EQUIPES.', '.TBL_MATCHS.'
						WHERE '.TBL_CHAMPIONNATS.'.id_saison='.TBL_SAISONS.'.id
						AND '.TBL_CHAMPIONNATS.'.id_division='.TBL_DIVISIONS.'.id
						AND '.TBL_EQUIPES.'.id_champ='.TBL_CHAMPIONNATS.'.id
						AND '.TBL_EQUIPES.'.id_club='.TBL_CLUBS.'.id
						AND '.TBL_BUTEURS.'.id_effectif='.TBL_EFFECTIF.'.id
						AND '.TBL_EFFECTIF.'.id_joueur='.TBL_JOUEURS.'.id
						AND '.TBL_EFFECTIF.'.id_equipe='.TBL_EQUIPES.'.id
						AND '.TBL_MATCHS.'.id='.TBL_BUTEURS.'.id_match
						AND '.TBL_JOUEURS.'.id='.$id_joueur.'
						GROUP BY id_champ, '.TBL_CLUBS.'.nom
						ORDER BY annee DESC, date DESC');

	if (mysql_num_rows($REQ) > 0)
	{

?>
	<table class="TblCenter Large100P">
		<thead>
			<tr>
				<th colspan="4"><?php echo FormatText(ADMIN_JOUEURS_2); ?></th>
			</tr>
		</thead>
		<tbody>
<?php
		while ($ROW = mysql_fetch_array($REQ))
		{
			if ($lang == 'fr' AND $ROW[4] > 1) { $S = 's'; } else { $S = ''; }

			echo '
			<tr>
				<td class="Large20P">'.stripslashes($ROW[3]).'</td>
				<td class="Large30P">'.$ROW[1].'/'.$ROW[2].'</td>
				<td class="Large30P"><b>'.stripslashes($ROW[0]).'</b></td>
				<td class="Large20P">'.$IMG_BUT.' <a href="'.URL_JOUEUR.'?id_joueur='.$id_joueur.'&amp;annee='.$ROW[1].'&amp;details_buts=1">'.stripslashes($ROW[4]).' '.FormatText(FICHE_BUTS).$S.'</a></td>
			</tr>'."\n";
		}
?>
		</body>
	</table>

<?php

	}
	mysql_free_result($REQ);
}
else
{
	$REQ = mysql_query('SELECT cldom.nom AS cldom, clext.nom AS clext, '.TBL_MATCHS.'.buts_dom, '.TBL_MATCHS.'.buts_ext, date_reelle, dom.id AS eqdom, ext.id AS eqext, '.TBL_JOURNEES.'.numero, '.TBL_CHAMPIONNATS.'.id AS id_champ, '.TBL_DIVISIONS.'.nom, '.TBL_SAISONS.'.annee, ('.TBL_SAISONS.'.annee)+1, '.TBL_MATCHS.'.id AS id_match
				FROM '.TBL_EQUIPES.' AS dom, '.TBL_EQUIPES.' AS ext, '.TBL_MATCHS.', '.TBL_JOURNEES.', '.TBL_CLUBS.' AS cldom, '.TBL_CLUBS.' AS clext, '.TBL_BUTEURS.', '.TBL_EFFECTIF.', '.TBL_CHAMPIONNATS.', '.TBL_DIVISIONS.', '.TBL_SAISONS.'
				WHERE '.TBL_MATCHS.'.id_equipe_dom=dom.id
				AND '.TBL_MATCHS.'.id_equipe_ext=ext.id
				AND dom.id_club=cldom.id
				AND ext.id_club=clext.id
				AND '.TBL_MATCHS.'.id_journee='.TBL_JOURNEES.'.id
				AND '.TBL_BUTEURS.'.id_match='.TBL_MATCHS.'.id
				AND '.TBL_BUTEURS.'.id_effectif='.TBL_EFFECTIF.'.id
				AND '.TBL_EFFECTIF.'.id_joueur='.$id_joueur.'
				AND '.TBL_CHAMPIONNATS.'.id_division='.TBL_DIVISIONS.'.id
				AND '.TBL_CHAMPIONNATS.'.id_saison='.TBL_SAISONS.'.id
				AND '.TBL_CHAMPIONNATS.'.id=ext.id_champ
				AND '.TBL_CHAMPIONNATS.'.id=dom.id_champ
				AND '.TBL_SAISONS.'.annee='.$annee.'
				ORDER BY annee ASC, date_reelle ASC');

	if (mysql_num_rows($REQ) > 0)
	{
		$id_champ = 0;

?>
	<table class="TblCenter Large100P">
		<thead>
			<tr>
				<th colspan="5"><?php echo FormatText(ADMIN_JOUEURS_2); ?></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td colspan="5"><b>Saison <?php echo $annee.'/'.($annee + 1); ?></b></td>
			</tr>
<?php

		while ($ROW = mysql_fetch_array($REQ))
		{
			echo '			<tr>
				<td class="Large20P">'.stripslashes($ROW[9]).'</td>
				<td>'.FormatText(ADMIN_JOURNEES_MSG9).' '.stripslashes($ROW[7]).'</td>
				<td class="TxtRight Large20P">'.stripslashes($ROW[0]).'</td>
				<td class="TxtCenter Large10P"><a href="'.URL_MATCH.'?id_match='.$ROW['id_match'].'">'.$ROW[2].' - '.$ROW[3].'</a></td>
				<td class="Large20P">'.stripslashes($ROW[1]).'</td>
			</tr>'."\n";
		}

?>
		</tbody>
		<tfoot>
			<tr>
				<td colspan="5"><a href="<?php echo URL_JOUEUR; ?>?id_joueur=<?php echo $id_joueur; ?>"><?php echo FormatText('Retour'); ?></a></td>
			</tr>
		</tfoot>
	</table>

<?php

	}
	mysql_free_result($REQ);
}


// stats titularisations
if (!$details_stats)
{
	$REQ = mysql_query('SELECT '.TBL_CLUBS.'.nom, '.TBL_SAISONS.'.annee, ('.TBL_SAISONS.'.annee)+1, '.TBL_DIVISIONS.'.nom, SUM(phpl_compo.matchs) AS Total, '.TBL_CHAMPIONNATS.'.id AS id_champ, '.TBL_MATCHS.'.date_reelle AS date, SUM(phpl_compo.tps) AS Totaltps
				FROM '.TBL_CLUBS.', '.TBL_EFFECTIF.', '.TBL_SAISONS.', '.TBL_DIVISIONS.', '.TBL_CHAMPIONNATS.', phpl_compo, '.TBL_JOUEURS.', '.TBL_EQUIPES.', '.TBL_MATCHS.'
				WHERE '.TBL_CHAMPIONNATS.'.id_saison='.TBL_SAISONS.'.id
				AND '.TBL_CHAMPIONNATS.'.id_division='.TBL_DIVISIONS.'.id
				AND '.TBL_EQUIPES.'.id_champ='.TBL_CHAMPIONNATS.'.id
				AND '.TBL_EQUIPES.'.id_club='.TBL_CLUBS.'.id
				AND phpl_compo.id_effectif='.TBL_EFFECTIF.'.id
				AND '.TBL_EFFECTIF.'.id_joueur='.TBL_JOUEURS.'.id
				AND '.TBL_EFFECTIF.'.id_equipe='.TBL_EQUIPES.'.id
				AND '.TBL_MATCHS.'.id=phpl_compo.id_match
				AND '.TBL_JOUEURS.'.id='.$id_joueur.'
				AND phpl_compo.matchs="1"
				GROUP BY id_champ, '.TBL_CLUBS.'.nom
				ORDER BY annee DESC, date DESC');

	if (mysql_num_rows($REQ) > 0)
	{

?>
	<table class="TblCenter Large100P">
		<thead>
			<tr>
				<th colspan="4"><?php echo FormatText(CONSULT_COMPO_TITRE_1.' &bull; '.COMPTPS); ?></th>
			</tr>
		</thead>
		<tbody>
<?php

		while ($ROW = mysql_fetch_array($REQ))
		{
			if ($lang == 'fr' AND $ROW[7] > 1) { $S = 's'; } else { $S = ''; }

			echo '			<tr>
				<td class="Large20P">'.stripslashes($ROW[3]).'</td>
				<td class="Large30P">'.$ROW[1].'/'.$ROW[2].'</td>
				<td class="Large30P"><b>'.stripslashes($ROW[0]).'</b></td>
				<td class="Large20P"><a href="'.URL_JOUEUR.'?id_joueur='.$id_joueur.'&amp;annee='.$ROW[1].'&amp;details_stats=1">'.stripslashes($ROW[4]).' '.FormatText(FICHE_STATS).$S.'</a>';

			if ($ROW[7] > 0) {	echo '<span style="float: right;">('.stripslashes($ROW[7]).'&#039;)</span>'; }

			echo '</td>
			</tr>'."\n";
		}

?>
		</body>
	</table>

<?php

	}
	mysql_free_result($REQ);
}
else
{
	$REQ = mysql_query('SELECT cldom.nom AS cldom, clext.nom AS clext, '.TBL_MATCHS.'.buts_dom, '.TBL_MATCHS.'.buts_ext, date_reelle, dom.id AS eqdom, ext.id AS eqext, '.TBL_JOURNEES.'.numero, '.TBL_CHAMPIONNATS.'.id AS id_champ, '.TBL_DIVISIONS.'.nom, '.TBL_SAISONS.'.annee, ('.TBL_SAISONS.'.annee)+1, '.TBL_MATCHS.'.id AS id_match, phpl_compo.tps
						FROM '.TBL_EQUIPES.' AS dom, '.TBL_EQUIPES.' AS ext, '.TBL_MATCHS.', '.TBL_JOURNEES.', '.TBL_CLUBS.' AS cldom, '.TBL_CLUBS.' AS clext, phpl_compo, '.TBL_EFFECTIF.', '.TBL_CHAMPIONNATS.', '.TBL_DIVISIONS.', '.TBL_SAISONS.'
						WHERE '.TBL_MATCHS.'.id_equipe_dom=dom.id
						AND '.TBL_MATCHS.'.id_equipe_ext=ext.id
						AND dom.id_club=cldom.id
						AND ext.id_club=clext.id
						AND '.TBL_MATCHS.'.id_journee='.TBL_JOURNEES.'.id
						AND phpl_compo.id_match='.TBL_MATCHS.'.id
						AND phpl_compo.id_effectif='.TBL_EFFECTIF.'.id
						AND '.TBL_EFFECTIF.'.id_joueur='.$id_joueur.'
						AND '.TBL_CHAMPIONNATS.'.id_division='.TBL_DIVISIONS.'.id
						AND '.TBL_CHAMPIONNATS.'.id_saison='.TBL_SAISONS.'.id
						AND '.TBL_CHAMPIONNATS.'.id=ext.id_champ
						AND '.TBL_CHAMPIONNATS.'.id=dom.id_champ
						AND phpl_compo.matchs="1"
						AND '.TBL_SAISONS.'.annee='.$annee.'
						ORDER BY annee ASC, date_reelle ASC');

	if (mysql_num_rows($REQ) > 0)
	{
		$id_champ = 0;

?>
	<table class="TblCenter Large100P">
		<thead>
			<tr>
				<th colspan="5"><?php echo FormatText(CONSULT_COMPO_TITRE_1.' &bull; '.COMPTPS); ?></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td colspan="5"><b>Saison <?php echo $annee.'/'.($annee + 1); ?></b></td>
			</tr>
<?php

	while ($ROW = mysql_fetch_array($REQ))
	{
		echo '
			<tr>
				<td class="Large20P">'.stripslashes($ROW['nom']).'</td>
				<td>'.FormatText(ADMIN_JOURNEES_MSG9).' '.$ROW['numero'].'</td>
				<td class="TxtRight Large20P">'.stripslashes($ROW['cldom']).'</td>
				<td class="TxtCenter Large10P"><a href="'.URL_MATCH.'?id_match='.$ROW['id_match'].'">'.$ROW['buts_dom'].' - '.$ROW['buts_ext'].'</a></td>
				<td class="Large20P">'.stripslashes($ROW['clext']);

		if ($ROW['tps'] > 0)
		{
			echo '<span style="float: right;">(<b>'.$ROW['tps'].'&#039;</b>)</span>';
		}

		echo '</td>
			</tr>'."\n";
	}

?>
		</tbody>
		<tfoot>
			<tr>
				<td colspan="5"><a href="<?php echo URL_JOUEUR; ?>?id_joueur=<?php echo $id_joueur; ?>"><?php echo FormatText('Retour'); ?></a></td>
			</tr>
		</tfoot>
	</table>

<?php
	}
	mysql_free_result($REQ);
}

// stats des entrees en jeu
if (!$details_stats2)
{
	$REQ = mysql_query('SELECT '.TBL_CLUBS.'.nom, '.TBL_SAISONS.'.annee, ('.TBL_SAISONS.'.annee)+1, '.TBL_DIVISIONS.'.nom, SUM('.TBL_TITULAIRE.'.remp) AS Total, '.TBL_CHAMPIONNATS.'.id AS id_champ, '.TBL_MATCHS.'.date_reelle AS date
          FROM '.TBL_CLUBS.', '.TBL_EFFECTIF.', '.TBL_SAISONS.', '.TBL_DIVISIONS.', '.TBL_CHAMPIONNATS.', '.TBL_TITULAIRE.', '.TBL_JOUEURS.', '.TBL_EQUIPES.', '.TBL_MATCHS.'
          WHERE '.TBL_CHAMPIONNATS.'.id_saison='.TBL_SAISONS.'.id
          AND '.TBL_CHAMPIONNATS.'.id_division='.TBL_DIVISIONS.'.id
          AND '.TBL_EQUIPES.'.id_champ='.TBL_CHAMPIONNATS.'.id
          AND '.TBL_EQUIPES.'.id_club='.TBL_CLUBS.'.id
          AND '.TBL_TITULAIRE.'.id_effectif='.TBL_EFFECTIF.'.id
          AND '.TBL_EFFECTIF.'.id_joueur='.TBL_JOUEURS.'.id
          AND '.TBL_EFFECTIF.'.id_equipe='.TBL_EQUIPES.'.id
          AND '.TBL_MATCHS.'.id='.TBL_TITULAIRE.'.id_match
          AND '.TBL_JOUEURS.'.id='.$id_joueur.'
		  AND '.TBL_TITULAIRE.'.remp="1"
          GROUP BY id_champ, '.TBL_CLUBS.'.nom
          ORDER BY annee DESC, date DESC');

	if (mysql_num_rows($REQ) > 0)
	{
?>
	<table class="TblCenter Large100P">
		<thead>
			<tr>
				<th colspan="4"><?php echo FormatText(CONSULT_COMPO2_MSG1); ?></th>
			</tr>
		</thead>
		<tbody>
<?php
		while ($ROW = mysql_fetch_array($REQ))
		{
			if ($lang == 'fr' AND $ROW[4] > 1) { $S = 's'; } else { $S = ''; }

			echo '			<tr>
				<td class="Large20P">'.stripslashes($ROW[3]).'</td>
				<td class="Large30P">'.$ROW[1].'/'.$ROW[2].'</td>
				<td class="Large30P"><b>'.stripslashes($ROW[0]).'</b></td>
				<td class="Large20P">'.$IMG_REMP.' <a href="'.URL_JOUEUR.'?id_joueur='.$id_joueur.'&amp;annee='.$ROW[1].'&amp;details_stats2=1">'.stripslashes($ROW[4]).' '.FormatText(FICHE_STATS2).$S.'</a></td>
			</tr>'."\n";
		}		  

?>
		</tbody>
	</table>
<?php

	}
	mysql_free_result($REQ);
}
else
{
	$REQ = mysql_query('SELECT cldom.nom AS cldom, clext.nom AS clext, '.TBL_MATCHS.'.buts_dom, '.TBL_MATCHS.'.buts_ext, date_reelle, dom.id AS eqdom, ext.id AS eqext, '.TBL_JOURNEES.'.numero, '.TBL_CHAMPIONNATS.'.id AS id_champ, 
  '.TBL_DIVISIONS.'.nom, '.TBL_SAISONS.'.annee, ('.TBL_SAISONS.'.annee)+1, '.TBL_MATCHS.'.id AS id_match, phpl_compo.tps
				FROM '.TBL_EQUIPES.' AS dom, '.TBL_EQUIPES.' AS ext, '.TBL_MATCHS.', '.TBL_JOURNEES.', '.TBL_CLUBS.' AS cldom, '.TBL_CLUBS.' AS clext, phpl_compo, '.TBL_EFFECTIF.', '.TBL_CHAMPIONNATS.', '.TBL_DIVISIONS.', '.TBL_SAISONS.'
				WHERE '.TBL_MATCHS.'.id_equipe_dom=dom.id
				AND '.TBL_MATCHS.'.id_equipe_ext=ext.id
				AND dom.id_club=cldom.id
				AND ext.id_club=clext.id
				AND '.TBL_MATCHS.'.id_journee='.TBL_JOURNEES.'.id
				AND phpl_compo.id_match='.TBL_MATCHS.'.id
				AND phpl_compo.id_effectif='.TBL_EFFECTIF.'.id
				AND '.TBL_EFFECTIF.'.id_joueur='.$id_joueur.'
				AND '.TBL_CHAMPIONNATS.'.id_division='.TBL_DIVISIONS.'.id
				AND '.TBL_CHAMPIONNATS.'.id_saison='.TBL_SAISONS.'.id
				AND '.TBL_CHAMPIONNATS.'.id=ext.id_champ
				AND '.TBL_CHAMPIONNATS.'.id=dom.id_champ
				AND	phpl_compo.remp="1"
				AND '.TBL_SAISONS.'.annee='.$annee.'
				ORDER BY annee ASC, date_reelle ASC');

	if (mysql_num_rows($REQ) > 0)
	{
		$id_champ = 0;
?>
	<table class="TblCenter Large100P">
		<thead>
			<tr>
				<th colspan="5"><?php echo FormatText(CONSULT_COMPO2_MSG1); ?></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td colspan="5"><b>Saison <?php echo $annee.'/'.($annee + 1); ?></b></td>
			</tr>
<?php

		while ($ROW = mysql_fetch_array($REQ))
		{
			echo '			<tr>
				<td class="Large20P">'.$ROW[9].'</td>
				<td>'.FormatText(ADMIN_JOURNEES_MSG9).stripslashes($ROW[7]).'</td>
				<td class="TxtRight Large20P">'.stripslashes($ROW[0]).'</td>
				<td class="TxtCenter Large10P"><a href="'.URL_MATCH.'?id_match='.$ROW['id_match'].'">'.$ROW[2].' - '.$ROW[3].'</a></td>
				<td class="Large20P">'.stripslashes($ROW[1]).'</td>
			</tr>'."\n";
		}

?>
		</tbody>
		<tfoot>
			<tr>
				<td colspan="5"><a href="<?php echo URL_JOUEUR; ?>?id_joueur=<?php echo $id_joueur; ?>"><?php echo FormatText('Retour'); ?></a></td>
			</tr>
		</tfoot>
	</table>

<?php

	}
	mysql_free_result($REQ);
}


// stats des cartons jaunes
if (!$details_CJ)
{
	$REQ = mysql_query('SELECT '.TBL_CLUBS.'.nom, '.TBL_SAISONS.'.annee, ('.TBL_SAISONS.'.annee)+1, '.TBL_DIVISIONS.'.nom, Sum(phpl_compoCJ.CJ) AS Total, '.TBL_CHAMPIONNATS.'.id AS id_champ, '.TBL_MATCHS.'.date_reelle AS date
          FROM '.TBL_CLUBS.', '.TBL_EFFECTIF.', '.TBL_SAISONS.', '.TBL_DIVISIONS.', '.TBL_CHAMPIONNATS.', phpl_compoCJ, '.TBL_JOUEURS.', '.TBL_EQUIPES.', '.TBL_MATCHS.'
          WHERE '.TBL_CHAMPIONNATS.'.id_saison='.TBL_SAISONS.'.id
          AND '.TBL_CHAMPIONNATS.'.id_division='.TBL_DIVISIONS.'.id
          AND '.TBL_EQUIPES.'.id_champ='.TBL_CHAMPIONNATS.'.id
          AND '.TBL_EQUIPES.'.id_club='.TBL_CLUBS.'.id
          AND phpl_compoCJ.id_effectif='.TBL_EFFECTIF.'.id
          AND '.TBL_EFFECTIF.'.id_joueur='.TBL_JOUEURS.'.id
          AND '.TBL_EFFECTIF.'.id_equipe='.TBL_EQUIPES.'.id
          AND '.TBL_MATCHS.'.id=phpl_compoCJ.id_match
          AND '.TBL_JOUEURS.'.id='.$id_joueur.'
          GROUP BY id_champ, '.TBL_CLUBS.'.nom
          ORDER BY annee DESC, date DESC');

	$NBR = mysql_num_rows($REQ);

	if ($NBR > 0)
	{
?>
	<table class="TblCenter Large100P">
		<thead>
			<tr>
				<th colspan="4"><?php echo FormatText(CJ); ?></th>
			</tr>
		</thead>
		<tbody>
<?php
		while ($ROW = mysql_fetch_array($REQ))
		{
			if ($lang == 'fr' AND $ROW[4] > 1) { $S = 's'; } else { $S = ''; }

			echo '			<tr>
				<td class="Large20P">'.stripslashes($ROW[3]).'</td>
				<td class="Large30P">'.$ROW[1].'/'.$ROW[2].'</td>
				<td class="Large30P"><b>'.stripslashes($ROW[0]).'</b></td>
				<td class="Large20P">'.$IMG_CJ.' <a href="'.URL_JOUEUR.'?id_joueur='.$id_joueur.'&amp;annee='.$ROW[1].'&amp;details_CJ=1">'.stripslashes($ROW[4]).' '.FormatText(FICHE_CJ).$S.'</a></td>
			</tr>'."\n";
		}
?>
		</tbody>
	</table>
<?php

	}
	mysql_free_result($REQ);
}
else
{
	$REQ = mysql_query('SELECT cldom.nom AS cldom, clext.nom AS clext, '.TBL_MATCHS.'.buts_dom, '.TBL_MATCHS.'.buts_ext, date_reelle, dom.id AS eqdom, ext.id AS eqext, '.TBL_JOURNEES.'.numero, '.TBL_CHAMPIONNATS.'.id AS id_champ, '.TBL_DIVISIONS.'.nom, '.TBL_SAISONS.'.annee, ('.TBL_SAISONS.'.annee)+1, '.TBL_MATCHS.'.id AS id_match 
				FROM '.TBL_EQUIPES.' AS dom, '.TBL_EQUIPES.' AS ext, '.TBL_MATCHS.', '.TBL_JOURNEES.', '.TBL_CLUBS.' AS cldom, '.TBL_CLUBS.' AS clext, phpl_compoCJ, '.TBL_EFFECTIF.', '.TBL_CHAMPIONNATS.', '.TBL_DIVISIONS.', '.TBL_SAISONS.'
				WHERE '.TBL_MATCHS.'.id_equipe_dom=dom.id
				AND '.TBL_MATCHS.'.id_equipe_ext=ext.id
				AND dom.id_club = cldom.id
				AND ext.id_club = clext.id
				AND '.TBL_MATCHS.'.id_journee='.TBL_JOURNEES.'.id
				AND phpl_compoCJ.id_match='.TBL_MATCHS.'.id
				AND phpl_compoCJ.id_effectif='.TBL_EFFECTIF.'.id
				AND '.TBL_EFFECTIF.'.id_joueur='.$id_joueur.'
				AND '.TBL_CHAMPIONNATS.'.id_division='.TBL_DIVISIONS.'.id
				AND '.TBL_CHAMPIONNATS.'.id_saison='.TBL_SAISONS.'.id
				AND '.TBL_CHAMPIONNATS.'.id=ext.id_champ
				AND '.TBL_CHAMPIONNATS.'.id=dom.id_champ
				AND '.TBL_SAISONS.'.annee='.$annee.'
				ORDER BY annee ASC, date_reelle ASC');

	if (mysql_num_rows($REQ) > 0)
	{
		$id_champ = 0;

?>
	<table class="TblCenter Large100P">
		<thead>
			<tr>
				<th colspan="5"><?php echo FormatText(CJ); ?></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td colspan="5"><b>Saison <?php echo $annee.'/'.($annee + 1); ?></b></td>
			</tr>
<?php

		while ($ROW = mysql_fetch_array($REQ))
		{
			echo '			<tr>
				<td class="Large20P">'.$ROW[9].'</td>
				<td>'.FormatText(ADMIN_JOURNEES_MSG9).stripslashes($ROW[7]).'</td>
				<td class="TxtRight Large20P">'.stripslashes($ROW[0]).'</td>
				<td class="TxtCenter Large10P"><a href="'.URL_MATCH.'?id_match='.$ROW['id_match'].'">'.$ROW[2].' - '.$ROW[3].'</a></td>
				<td class="Large20P">'.stripslashes($ROW[1]).'</td>
			</tr>'."\n";
		}
?>
		</tbody>
		<tfoot>
			<tr>
				<td colspan="5"><a href="<?php echo URL_JOUEUR; ?>?id_joueur=<?php echo $id_joueur; ?>"><?php echo FormatText('Retour'); ?></a></td>
			</tr>
		</tfoot>
	</table>

<?php

	}
	mysql_free_result($REQ);
}

// stats des cartons rouges
if (!$details_CR)
{
	$REQ = mysql_query('SELECT '.TBL_CLUBS.'.nom, '.TBL_SAISONS.'.annee, ('.TBL_SAISONS.'.annee)+1, '.TBL_DIVISIONS.'.nom, SUM(phpl_compoCR.CR) AS Total, '.TBL_CHAMPIONNATS.'.id AS id_champ, '.TBL_MATCHS.'.date_reelle AS date
				FROM '.TBL_CLUBS.', '.TBL_EFFECTIF.', '.TBL_SAISONS.', '.TBL_DIVISIONS.', '.TBL_CHAMPIONNATS.', phpl_compoCR, '.TBL_JOUEURS.', '.TBL_EQUIPES.', '.TBL_MATCHS.'
				WHERE '.TBL_CHAMPIONNATS.'.id_saison='.TBL_SAISONS.'.id
				AND '.TBL_CHAMPIONNATS.'.id_division='.TBL_DIVISIONS.'.id
				AND '.TBL_EQUIPES.'.id_champ='.TBL_CHAMPIONNATS.'.id
				AND '.TBL_EQUIPES.'.id_club='.TBL_CLUBS.'.id
				AND phpl_compoCR.id_effectif='.TBL_EFFECTIF.'.id
				AND '.TBL_EFFECTIF.'.id_joueur='.TBL_JOUEURS.'.id
				AND '.TBL_EFFECTIF.'.id_equipe='.TBL_EQUIPES.'.id
				AND '.TBL_MATCHS.'.id=phpl_compoCR.id_match
				AND '.TBL_JOUEURS.'.id='.$id_joueur.'
				GROUP BY id_champ, '.TBL_CLUBS.'.nom
				ORDER BY annee DESC, date DESC');

	if (mysql_num_rows($REQ) > 0)
	{
?>
	<table class="TblCenter Large100P">
		<thead>
			<tr>
				<th colspan="4"><?php echo FormatText(CR); ?></th>
			</tr>
		</thead>
		<tbody>
<?php

		while ($ROW = mysql_fetch_array($REQ))
		{
			if ($lang == 'fr' AND $ROW[4] > 1) { $S = 's'; } else { $S = ''; }

   			echo '			<tr>
				<td class="Large20P">'.stripslashes($ROW[3]).'</td>
				<td class="Large30P">'.$ROW[1].'/'.$ROW[2].'</td>
				<td class="Large30P"><b>'.stripslashes($ROW[0]).'</b></td>
				<td class="Large20P">'.$IMG_CR.' <a href="'.URL_JOUEUR.'?id_joueur='.$id_joueur.'&amp;annee='.$ROW[1].'&amp;details_CR=1">'.stripslashes($ROW[4]).' '.FormatText(FICHE_CR).$S.'</a></td>
			</tr>'."\n";
		}
?>
		</tbody>
	</table>

<?php

	}
	mysql_free_result($REQ);
}
else
{
	$REQ = mysql_query('SELECT cldom.nom AS cldom, clext.nom AS clext, '.TBL_MATCHS.'.buts_dom, '.TBL_MATCHS.'.buts_ext, date_reelle, dom.id AS eqdom, ext.id AS eqext, '.TBL_JOURNEES.'.numero, '.TBL_CHAMPIONNATS.'.id AS id_champ, '.TBL_DIVISIONS.'.nom, '.TBL_SAISONS.'.annee, ('.TBL_SAISONS.'.annee)+1, '.TBL_MATCHS.'.id AS id_match
				FROM '.TBL_EQUIPES.' AS dom, '.TBL_EQUIPES.' AS ext, '.TBL_MATCHS.', '.TBL_JOURNEES.', '.TBL_CLUBS.' AS cldom, '.TBL_CLUBS.' AS clext, phpl_compoCR, '.TBL_EFFECTIF.', '.TBL_CHAMPIONNATS.', '.TBL_DIVISIONS.', '.TBL_SAISONS.'
				WHERE '.TBL_MATCHS.'.id_equipe_dom=dom.id
				AND '.TBL_MATCHS.'.id_equipe_ext=ext.id
				AND dom.id_club = cldom.id
				AND ext.id_club = clext.id
				AND '.TBL_MATCHS.'.id_journee='.TBL_JOURNEES.'.id
				AND phpl_compoCR.id_match='.TBL_MATCHS.'.id
				AND phpl_compoCR.id_effectif='.TBL_EFFECTIF.'.id
				AND '.TBL_EFFECTIF.'.id_joueur='.$id_joueur.'
				AND '.TBL_CHAMPIONNATS.'.id_division='.TBL_DIVISIONS.'.id
				AND '.TBL_CHAMPIONNATS.'.id_saison='.TBL_SAISONS.'.id
				AND '.TBL_CHAMPIONNATS.'.id=ext.id_champ
				AND '.TBL_CHAMPIONNATS.'.id=dom.id_champ
				AND '.TBL_SAISONS.'.annee='.$annee.'
				ORDER BY annee ASC, date_reelle ASC');

	$NBR = mysql_num_rows($REQ);

	if ($NBR > 0)
	{
		$id_champ = 0;

?>
	<table class="TblCenter Large100P">
		<thead>
			<tr>
				<th colspan="5"><?php echo FormatText(CR); ?></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td colspan="5"><b>Saison <?php echo $annee.'/'.($annee + 1); ?></b></td>
			</tr>
<?php

		while ($ROW = mysql_fetch_array($REQ))
		{
			echo '			<tr>
				<td class="Large20P">'.stripslashes($ROW[9]).'</td>
				<td>'.FormatText(ADMIN_JOURNEES_MSG9).stripslashes($ROW[7]).'</td>
				<td class="TxtRight Large20P">'.stripslashes($ROW[0]).'</td>
				<td class="TxtCenter Large10P"><a href="'.URL_MATCH.'?id_match='.$ROW['id_match'].'">'.$ROW[2].' - '.$ROW[3].'</a></td>
				<td class="Large20P">'.stripslashes($ROW[1]).'</td>
			</tr>'."\n";
		}

?>
		</tbody>
		<tfoot>
			<tr>
				<td colspan="5"><a href="<?php echo URL_JOUEUR; ?>?id_joueur=<?php echo $id_joueur; ?>"><?php echo FormatText('Retour'); ?></a></td>
			</tr>
		</tfoot>
	</table>

<?php

	}
	mysql_free_result($REQ);
	}
}

include('../footer.php');

?>