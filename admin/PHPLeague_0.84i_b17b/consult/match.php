<?php

$champ    = isset($_REQUEST['champ'])    ? $_REQUEST['champ']    : NULL;
$id_match = isset($_REQUEST['id_match']) ? $_REQUEST['id_match'] : NULL;

define('MOD', 'consult');

require('../config.php') ;
require('../function_consult.php');

include('../header_min.php');

if (!$id_match)
{
	echo '<h4>'.FormatText('Choisir un match').'</h4>'."\n\n";
}
else
{
	ouverture();

	if ($AGENT == 'iphone')
	{
		echo '	<div id="topbar">
		<div id="leftnav">
			<a href="javascript:history.back();">Retour</a>
		</div>
		<div id="title">
			<h1>'.FormatText('Info. match').'</h1>
		</div>
	</div>'."\n\n";
	}

	$IMG_BUT  = '<img src="../'.REP_IMG.'but.gif" alt="" title="" />';
	$IMG_REMP = '<img src="../'.REP_IMG.'change.gif" alt="" title="" />';
	$IMG_CJ   = '<img src="../'.REP_IMG.'cj.gif" alt="" title="" />';
	$IMG_CR   = '<img src="../'.REP_IMG.'cr.gif" alt="" title="" />';

	$REQ1 = mysql_query('SELECT cldom.nom AS cldom, clext.nom AS clext, '.TBL_JOURNEES.'.numero, '.TBL_MATCHS.'.date_reelle, '.TBL_MATCHS.'.buts_dom, '.TBL_MATCHS.'.buts_ext, '.TBL_MATCHS.'.date_reelle, cldom.url_logo AS logo_dom, clext.url_logo AS logo_ext
						 FROM '.TBL_CLUBS.' AS cldom, '.TBL_CLUBS.' AS clext, '.TBL_EQUIPES.' AS dom, '.TBL_EQUIPES.' AS ext, '.TBL_MATCHS.', '.TBL_JOURNEES.'
						 WHERE '.TBL_MATCHS.'.id='.$id_match.'
						 AND '.TBL_MATCHS.'.id_equipe_dom=dom.id
						 AND '.TBL_MATCHS.'.id_equipe_ext=ext.id
						 AND dom.id_club=cldom.id
						 AND ext.id_club=clext.id
						 AND '.TBL_MATCHS.'.id_journee='.TBL_JOURNEES.'.id');
	$row = mysql_fetch_array($REQ1);

	mysql_free_result($REQ1);

	$requete1 = mysql_query('SELECT nom, prenom, phpl_joueurs.id AS id_joueur
             FROM phpl_joueurs, phpl_effectif, phpl_buteurs, '.TBL_EQUIPES.', '.TBL_MATCHS.'
             WHERE phpl_joueurs.id=phpl_effectif.id_joueur
             AND phpl_effectif.id=phpl_buteurs.id_effectif
             AND phpl_buteurs.id_match='.$id_match.'
             AND '.TBL_MATCHS.'.id_equipe_dom = '.TBL_EQUIPES.'.id
             AND '.TBL_EQUIPES.'.id=phpl_effectif.id_equipe
             AND '.TBL_MATCHS.'.id=phpl_buteurs.id_match');

	$requete2 = mysql_query('SELECT nom, prenom, phpl_joueurs.id AS id_joueur
             FROM phpl_joueurs, phpl_effectif, phpl_buteurs, '.TBL_EQUIPES.', '.TBL_MATCHS.'
             WHERE phpl_joueurs.id=phpl_effectif.id_joueur
             AND phpl_effectif.id=phpl_buteurs.id_effectif
             AND phpl_buteurs.id_match='.$id_match.'
             AND '.TBL_MATCHS.'.id_equipe_ext = '.TBL_EQUIPES.'.id
             AND '.TBL_EQUIPES.'.id=phpl_effectif.id_equipe
             AND '.TBL_MATCHS.'.id=phpl_buteurs.id_match');

	$i = 0;

	while ($row1 = mysql_fetch_array($requete1))
	{
		if ($i == 0)
		{
			$buteur_dom = '<a href="'.URL_JOUEUR.'?id_joueur='.$row1[2].'">'.stripslashes($row1[0].' '.$row1[1]).'</a>'.$IMG_BUT.'<br />'."\n";
		}
		else
		{
			$buteur_dom = $buteur_dom.'<a href="'.URL_JOUEUR.'?id_joueur='.$row1[2].'">'.stripslashes($row1[0].' '.$row1[1]).'</a>'.$IMG_BUT.'<br />'."\n";
		}

		$i++;
	}

	$i = 0;

	while ($row2 = mysql_fetch_array($requete2))
	{
		if ($i == 0)
		{
			$buteur_ext = $IMG_BUT.'<a href="'.URL_JOUEUR.'?id_joueur='.$row2[2].'">'.stripslashes($row2[0].' '.$row2[1]).'</a><br />'."\n";
		}
		else
		{
			$buteur_ext = $buteur_ext.$IMG_BUT.'<a href="'.URL_JOUEUR.'?id_joueur='.$row2[2].'">'.stripslashes($row2[0].' '.$row2[1]).'</a><br />'."\n";
		}

		$i++;
	}

	$requete12 = "SELECT nom, prenom, phpl_joueurs.id AS id_joueur, phpl_compo.tps
				  FROM phpl_joueurs, phpl_effectif, phpl_compo, phpl_equipes, phpl_matchs
				  WHERE	phpl_joueurs.id=phpl_effectif.id_joueur
				  AND phpl_effectif.id=phpl_compo.id_effectif
				  AND phpl_compo.id_match='$id_match'
				  AND phpl_matchs.id_equipe_dom = phpl_equipes.id
				  AND phpl_equipes.id=phpl_effectif.id_equipe
				  AND phpl_matchs.id=phpl_compo.id_match
				  AND phpl_compo.matchs='1'";
	$resultats12 = mysql_query($requete12);

	$requete22 = "SELECT nom, prenom, phpl_joueurs.id AS id_joueur, phpl_compo.tps
				  FROM phpl_joueurs, phpl_effectif, phpl_compo, phpl_equipes, phpl_matchs
				  WHERE phpl_joueurs.id=phpl_effectif.id_joueur
				  AND phpl_effectif.id=phpl_compo.id_effectif
				  AND phpl_compo.id_match='$id_match'
				  AND phpl_matchs.id_equipe_ext = phpl_equipes.id
				  AND phpl_equipes.id=phpl_effectif.id_equipe
				  AND phpl_matchs.id=phpl_compo.id_match
				  AND phpl_compo.matchs='1'";
	$resultats22 = mysql_query($requete22);

	$i = 0;
	$compo_dom = '';

	while ($row1 = mysql_fetch_array($resultats12))
	{
		if ($row1[3] == 0)
		{
			if ($i == 0)
			{
				$compo_dom = '<a href="'.URL_JOUEUR.'?id_joueur='.$row1[2].'">'.stripslashes($row1[0].' '.$row1[1]).'</a><br />'."\n";
			}
			else
			{
				$compo_dom = $compo_dom.'<a href="'.URL_JOUEUR.'?id_joueur='.$row1[2].'">'.stripslashes($row1[0].' '.$row1[1]).'</a><br />'."\n";
			}
		}
		else
		{
			if ($i == 0)
			{
				$compo_dom = '<a href="'.URL_JOUEUR.'?id_joueur='.$row1[2].'">'.stripslashes($row1[0].' '.$row1[1]).'</a> (<b>'.$row1[3].'&#039;</b>)<br />'."\n";
			}
			else
			{
				$compo_dom = $compo_dom.'<a href="'.URL_JOUEUR.'?id_joueur='.$row1[2].'">'.stripslashes($row1[0].' '.$row1[1]).'</a> (<b>'.$row1[3].'&#039;</b>)<br />'."\n";
			}
		}
		$i++;
	}

	$i = 0;

	while ($row2 = mysql_fetch_array($resultats22))
	{
		if ($row2[3] == 0)
		{
			if ($i == 0)
			{
				$compo_ext = '<a href="'.URL_JOUEUR.'?id_joueur='.$row2[2].'">'.stripslashes($row2[0].' '.$row2[1]).'</a><br />'."\n";
			}
			else
			{
				$compo_ext = $compo_ext.'<a href="'.URL_JOUEUR.'?id_joueur='.$row1[2].'">'.stripslashes($row2[0].' '.$row2[1]).'</a><br />'."\n";
			}
		}
		else
		{
			if ($i == 0)
			{
				$compo_ext = '(<b>'.$row2[3].'&#039;</b>) <a href="'.URL_JOUEUR.'?id_joueur='.$row2[2].'">'.stripslashes($row2[0].' '.$row2[1]).'</a><br />'."\n";
			}
			else
			{
				$compo_ext = $compo_ext.'(<b>'.$row2[3].'&#039;</b>) <a href="'.URL_JOUEUR.'?id_joueur='.$row2[2].'">'.stripslashes($row2[0].' '.$row2[1]).'</a><br />'."\n";
			}
		}
		$i++;
	}

	$requete100 = "SELECT nom, prenom, phpl_joueurs.id as id_joueur, phpl_compo.tps
					FROM phpl_joueurs, phpl_effectif, phpl_compo, phpl_equipes, phpl_matchs
					WHERE phpl_joueurs.id=phpl_effectif.id_joueur
					AND phpl_effectif.id=phpl_compo.id_effectif
					AND phpl_compo.id_match='$id_match'
					AND phpl_matchs.id_equipe_dom = phpl_equipes.id
					AND phpl_equipes.id=phpl_effectif.id_equipe
					AND phpl_matchs.id=phpl_compo.id_match
					AND phpl_compo.remp='1'";
	$resultats100 = mysql_query($requete100);

	$requete200 = "SELECT nom, prenom, phpl_joueurs.id as id_joueur, phpl_compo.tps
					FROM phpl_joueurs, phpl_effectif, phpl_compo, phpl_equipes, phpl_matchs
					WHERE phpl_joueurs.id=phpl_effectif.id_joueur
					AND phpl_effectif.id=phpl_compo.id_effectif
					AND phpl_compo.id_match='$id_match'
					AND phpl_matchs.id_equipe_ext = phpl_equipes.id
					AND phpl_equipes.id=phpl_effectif.id_equipe
					AND phpl_matchs.id=phpl_compo.id_match
					AND phpl_compo.remp='1'";
	$resultats200 = mysql_query($requete200);

	$i = 0;

	while ($row1 = mysql_fetch_array($resultats100))
	{
		if ($row1[3] == 0)
		{
			if ($i == 0)
			{
				$compo2_dom = '<a href="'.URL_JOUEUR.'?id_joueur='.$row1[2].'">'.stripslashes($row1[0].' '.$row1[1]).'</a>'.$IMG_REMP.'<br />'."\n";
			}
			else
			{
				$compo2_dom = $compo2_dom.'<a href="'.URL_JOUEUR.'?id_joueur='.$row1[2].'">'.stripslashes($row1[0].' '.$row1[1]).'</a>'.$IMG_REMP.'<br />'."\n";
			}
		}
		else
		{
			if ($i == 0)
			{
				$compo2_dom = '<a href="'.URL_JOUEUR.'?id_joueur='.$row1[2].'">'.stripslashes($row1[0].' '.$row1[1]).'</a> (<b>'.$row1[3].'&#039;</b>) '.$IMG_REMP.'<br />'."\n";
			}
			else
			{
				$compo2_dom = $compo2_dom.'<a href="'.URL_JOUEUR.'?id_joueur='.$row1[2].'">'.stripslashes($row1[0].' '.$row1[1]).'</a> (<b>'.$row1[3].'&#039;</b>) '.$IMG_REMP.'<br />'."\n";
			}
		}
		$i++;
	}

	$i = 0;

	while ($row2 = mysql_fetch_array($resultats200))
	{
		if ($row2[3] == 0)
		{
			if ($i == 0)
			{
				$compo2_ext = $IMG_REMP.' <a href="'.URL_JOUEUR.'?id_joueur='.$row2[2].'">'.stripslashes($row2[0].' '.$row2[1]).'</a><br />'."\n";
			}
			else
			{
				$compo2_ext = $compo2_ext.$IMG_REMP.' <a href="'.URL_JOUEUR.'?id_joueur='.$row2[2].'">'.stripslashes($row2[0].' '.$row2[1]).'</a><br />'."\n";
			}
		}
		else
		{
			if ($i == 0)
			{
				$compo2_ext = $IMG_REMP.' (<b>'.$row2[3].'&#039;</b>) <a href="'.URL_JOUEUR.'?id_joueur='.$row2[2].'">'.stripslashes($row2[0].' '.$row2[1]).'</a><br />'."\n";
			}
			else
			{
				$compo2_ext = $compo2_ext.$IMG_REMP.' (<b>'.$row2[3].'&#039;</b>) <a href="'.URL_JOUEUR.'?id_joueur='.$row2[2].'">'.stripslashes($row2[0].' '.$row2[1]).'</a><br />'."\n";
			}
		}
		$i++;
	}

	$requete101 = "SELECT nom, prenom, phpl_joueurs.id AS id_joueur
				   FROM phpl_joueurs, phpl_effectif, phpl_compoCJ, phpl_equipes, phpl_matchs
				   WHERE phpl_joueurs.id=phpl_effectif.id_joueur
				   AND phpl_effectif.id=phpl_compoCJ.id_effectif
				   AND phpl_compoCJ.id_match='$id_match'
				   AND phpl_matchs.id_equipe_dom = phpl_equipes.id
				   AND phpl_equipes.id=phpl_effectif.id_equipe
				   AND phpl_matchs.id=phpl_compoCJ.id_match";
	$resultats101 = mysql_query($requete101);

	$requete201 = "SELECT nom, prenom, phpl_joueurs.id as id_joueur
				   FROM phpl_joueurs, phpl_effectif, phpl_compoCJ, phpl_equipes, phpl_matchs
				   WHERE phpl_joueurs.id=phpl_effectif.id_joueur
				   AND phpl_effectif.id=phpl_compoCJ.id_effectif
				   AND phpl_compoCJ.id_match='$id_match'
				   AND phpl_matchs.id_equipe_ext = phpl_equipes.id
				   AND phpl_equipes.id=phpl_effectif.id_equipe
				   AND phpl_matchs.id=phpl_compoCJ.id_match";
	$resultats201 = mysql_query($requete201);

	$i = 0;

	while ($row1 = mysql_fetch_array($resultats101))
	{
		if ($i == 0)
		{
			$compoCJ_dom = '<a href="'.URL_JOUEUR.'?id_joueur='.$row1[2].'">'.stripslashes($row1[0].' '.$row1[1]).'</a> '.$IMG_CJ.'<br />'."\n";
		}
		else
		{
			$compoCJ_dom = $compoCJ_dom.'<a href="'.URL_JOUEUR.'?id_joueur='.$row1[2].'">'.stripslashes($row1[0].' '.$row1[1]).'</a> '.$IMG_CJ.'<br />'."\n";
		}
		$i++;
	}

	$i = 0;

	while ($row2 = mysql_fetch_array($resultats201))
	{
    	if ($i == 0)
		{
			$compoCJ_ext = $IMG_CJ.'<a href="'.URL_JOUEUR.'?id_joueur='.$row2[2].'">'.stripslashes($row2[0].' '.$row2[1]).'</a><br />'."\n";
		}
    	else
		{
			$compoCJ_ext = $compoCJ_ext.$IMG_CJ.'<a href="'.URL_JOUEUR.'?id_joueur='.$row2[2].'">'.stripslashes($row2[0].' '.$row2[1]).'</a><br />'."\n";
		}

		$i++;
	}

	$requete102 = "SELECT nom, prenom, phpl_joueurs.id AS id_joueur
				   FROM phpl_joueurs, phpl_effectif, phpl_compoCR, phpl_equipes, phpl_matchs
				   WHERE phpl_joueurs.id=phpl_effectif.id_joueur
				   AND phpl_effectif.id=phpl_compoCR.id_effectif
				   AND phpl_compoCR.id_match='$id_match'
				   AND phpl_matchs.id_equipe_dom = phpl_equipes.id
				   AND phpl_equipes.id=phpl_effectif.id_equipe
				   AND phpl_matchs.id=phpl_compoCR.id_match";
	$resultats102 = mysql_query($requete102);

	$requete202 = "SELECT nom, prenom, phpl_joueurs.id AS id_joueur
				   FROM phpl_joueurs, phpl_effectif, phpl_compoCR, phpl_equipes, phpl_matchs
				   WHERE phpl_joueurs.id=phpl_effectif.id_joueur
				   AND phpl_effectif.id=phpl_compoCR.id_effectif
				   AND phpl_compoCR.id_match='$id_match'
				   AND phpl_matchs.id_equipe_ext = phpl_equipes.id
				   AND phpl_equipes.id=phpl_effectif.id_equipe
				   AND phpl_matchs.id=phpl_compoCR.id_match";
	$resultats202 = mysql_query($requete202);

	$i = 0;
	while ($row1 = mysql_fetch_array($resultats102))
	{
		if ($i == 0)
		{
			$compoCR_dom = '<a href="'.URL_JOUEUR.'?id_joueur='.$row1[2].'">'.stripslashes($row1[0].' '.$row1[1]).'</a> '.$IMG_CR.'<br />'."\n";
		}
		else
		{
			$compoCR_dom = $compoCR_dom.'<a href="'.URL_JOUEUR.'?id_joueur='.$row1[2].'">'.stripslashes($row1[0].' '.$row1[1]).'</a> '.$IMG_CR.'<br />'."\n";
		}

		$i++;
	}

	$i = 0;
	while ($row2 = mysql_fetch_array($resultats202))
	{
		if ($i == 0)
		{
			$compoCR_ext = $IMG_CR.'<a href="'.URL_JOUEUR.'?id_joueur='.$row2[2].'">'.stripslashes($row2[0].' '.$row2[1]).'</a><br />'."\n";
		}
		else
		{
			$compoCR_ext = $compoCR_ext.$IMG_CR.'<a href="'.URL_JOUEUR.'?id_joueur='.$row2[2].'">'.stripslashes($row2[0].' '.$row2[1]).'</a><br />'."\n";
		}

		$i++;
	}

	if (!empty($row['logo_dom']) AND file_exists('../'.REP_IMG_CLUB_MEDIUM.$row['logo_dom']))
	{
		$IMG_DOM = Image('../'.REP_IMG_CLUB_MEDIUM, $row['logo_dom'], '', $row[0], 'LoadImg');
	}
	else
	{
		$IMG_DOM = '&nbsp;';
	}

	if (!empty($row['logo_ext']) AND file_exists('../'.REP_IMG_CLUB_MEDIUM.$row['logo_ext']))
	{
		$IMG_EXT = Image('../'.REP_IMG_CLUB_MEDIUM, $row['logo_ext'], '', $row[1], 'LoadImg');
	}
	else
	{
		$IMG_EXT = '&nbsp;';
	}

	if ($row[4] == '' AND $row[5] == '')
	{
		$SCORE = '&nbsp;';
	}
	else
	{
		$SCORE = $row[4].' - '.$row[5];
	}

	$id_joueur_dom = $row1[2];
	$id_joueur_ext = $row2[2];

	$minute = substr($row[6], 14, 2);
	$heure  = substr($row[6], 11, 2);
	$jour   = substr($row[6], 8, 2);
	$mois   = substr($row[6], 5, 2);
	$annee  = substr($row[6], 0, 4);
	$t      = mktime($heure, $minute, 0, $mois, $jour, $annee);
	$date   = FormatText(ucfirst(strftime('%A %d %B %Y - %Hh%M', $t)));

	if (!isset($buteur_ext))  { $buteur_ext  = ''; }
	if (!isset($buteur_dom))  { $buteur_dom  = ''; }
	if (!isset($compo_ext))   { $compo_ext   = ''; }
	if (!isset($compo_dom))   { $compo_dom   = ''; }
	if (!isset($compo2_ext))  { $compo2_ext  = ''; }
	if (!isset($compo2_dom))  { $compo2_dom  = ''; }
	if (!isset($compoCJ_ext)) { $compoCJ_ext = ''; }
	if (!isset($compoCJ_dom)) { $compoCJ_dom = ''; }
	if (!isset($compoCR_ext)) { $compoCR_ext = ''; }
	if (!isset($compoCR_dom)) { $compoCR_dom = ''; }

?>

<table class="TblCenter Large100P TxtCenter">
	<thead>
		<tr>
			<th colspan="3"><?php echo $date;?></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="ScoreClub Large40P"><?php echo $IMG_DOM; ?></td>
			<td rowspan="2" class="Score"><?php echo $SCORE; ?></td>
			<td class="ScoreClub Large40P"><?php echo $IMG_EXT; ?></td>
		</tr>
		<tr>
			<td class="ScoreClub Large40P"><?php echo stripslashes($row[0]); ?></td>
			<td class="ScoreClub Large40P"><?php echo stripslashes($row[1]); ?></td>
		</tr>
		<tr class="SousTitre">
			<td colspan="3"><?php echo FormatText('Buteur(s)'); ?></td>
		</tr>
		<tr>
			<td class="TxtRight"><?php echo $buteur_dom; ?></td>
			<td>&nbsp;</td>
			<td class="TxtLeft"><?php echo $buteur_ext; ?></td>
		</tr>
		<tr class="SousTitre">
			<td colspan="3"><?php echo FormatText('Titulaire(s)'); ?></td>
		</tr>
		<tr>
			<td class="TxtRight"><?php echo $compo_dom; ?></td>
			<td>&nbsp;</td>
			<td class="TxtLeft"><?php echo $compo_ext; ?></td>
		</tr>
		<tr class="SousTitre">
			<td colspan="3"><?php echo FormatText('Remplaçant(s)'); ?></td>
		</tr>
		<tr>
			<td class="TxtRight"><?php echo $compo2_dom; ?></td>
			<td>&nbsp;</td>
			<td class="TxtLeft"><?php echo $compo2_ext; ?></td>
		</tr>
		<tr class="SousTitre">
			<td colspan="3"><?php echo FormatText('Avertissement(s)'); ?></td>
		</tr>
		<tr>
			<td class="TxtRight"><?php echo $compoCJ_dom; ?></td>
			<td>&nbsp;</td>
			<td class="TxtLeft"><?php echo $compoCJ_ext; ?></td>
		</tr>
		<tr class="SousTitre">
			<td colspan="3"><?php echo FormatText('Expulsion(s)'); ?></td>
		</tr>
		<tr>
			<td class="TxtRight"><?php echo $compoCR_dom; ?></td>
			<td>&nbsp;</td>
			<td class="TxtLeft"><?php echo $compoCR_ext; ?></td>
		</tr>
	</tbody>
</table>

<?php

}

include('../footer.php');

?>