<?php

$champ    = isset($_REQUEST['champ'])    ? $_REQUEST['champ']    : NULL;
$id_clubs = isset($_REQUEST['id_clubs']) ? $_REQUEST['id_clubs'] : NULL;

define('MOD', 'consult');

require('../config.php') ;

if ($ACT_CLUB == 1)
{
	require('../function_consult.php');

	include('../header.php');

	ouverture();

	if ($AGENT == 'iphone')
	{
		echo '	<div id="topbar">
		<div id="leftnav">
			<a href="index.php"><img src="../themes/iphone/home.png" alt="home" /></a>
		</div>
		<div id="title">
			<h1>'.FormatText('Clubs').'</h1>
		</div>
	</div>'."\n\n";
	}
	else
	{
		echo '	<h1>'.FormatText('Clubs').'</h1>'."\n\n";
	}

	if (empty($champ))
	{
		demande_champ($champ);
	}
	elseif (!isset($_REQUEST['id_clubs']))
	{
		demande_champ($champ);
		demande_club($champ, $id_clubs);
	}
	else
	{

?>

<script type="text/javascript">$(document).ready(function(){$('a.TipsJoueur').cluetip({width:'<?php echo T_PHOTO_JOUEUR; ?>',height:'auto',showTitle:false,dropShadow:true,cluetipClass:'default'});});</script>
<?php

		demande_champ($champ);
		demande_club($champ, $id_clubs);

		$postes = 'Gardien,Défenseur,Milieu,Attaquant';

		$REQ2 = @mysql_query('SELECT url_logo, url_photo FROM '.TBL_CLUBS.' WHERE id='.$id_clubs);
		$ROW2 = @mysql_fetch_array($REQ2);

		mysql_free_result($REQ2);

		if (!empty($ROW2['url_logo']) AND file_exists('../'.REP_IMG_CLUB_LARGE.$ROW2['url_logo']))
		{
			echo '	<h5>'.FormatText('Logo du club').'</h5>
	<div class="TxtCenter">'.Image('../'.REP_IMG_CLUB_LARGE, $ROW2['url_logo'], '', '', 'LoadImg').'</div>'."\n\n";
		}

		if (!empty($ROW2['url_photo']) AND file_exists('../'.REP_IMG_EQUIPE.$ROW2['url_photo']))
		{
			echo '	<h5>'.FormatText('Photo de l\'équipe').'</h5>
	<div class="TxtCenter">'.Image('../'.REP_IMG_EQUIPE, $ROW2['url_photo'], '', '', 'LoadImg').'</div>'."\n\n";
		}

		$REQ3 = @mysql_query('SELECT id FROM '.TBL_CLASSE);
		$NBR3 = @mysql_num_rows($REQ3);

		if ($REQ3 != 0)
		{
			while($ROW3 = mysql_fetch_array($REQ3))
			{
				echo aff_rens($ROW3['id'], $id_clubs);
			}
		}
		mysql_free_result($REQ3);

?>

	<h5><?php echo FormatText('Effectif'); ?></h5>
	<table class="TblCenter Large450">
		<thead>
			<tr>
				<th class="Large5P">&nbsp;</th>
				<th class="TxtLeft"><?php echo FormatText('Joueur'); ?></th>
				<th class="Large5P">&nbsp;</th>
				<th class="Large10P"><?php echo FormatText('T'); ?></th>
				<th class="Large10P"><?php echo FormatText('R'); ?></th>
				<th class="Large10P"><?php echo Image('../'.REP_IMG, 'temps.png', FormatText('Tps'), '', ''); ?></th>
				<th class="Large10P"><?php echo Image('../'.REP_IMG, 'cj.gif', FormatText('CJ'), '', ''); ?></th>
				<th class="Large10P"><?php echo Image('../'.REP_IMG, 'cr.gif', FormatText('CR'), '', ''); ?></th>
				<th class="Large10P"><?php echo Image('../'.REP_IMG, 'but.gif', FormatText('Buts'), '', ''); ?></th>
			</tr>
		</thead>
		<tbody>
<?php

	$REQ4 = mysql_query('SELECT '.TBL_EQUIPES.'.id
						FROM '.TBL_EQUIPES.', '.TBL_CLUBS.'
						WHERE '.TBL_CLUBS.'.id='.$id_clubs.'
						AND id_champ='.$champ.'
						AND '.TBL_CLUBS.'.id='.TBL_EQUIPES.'.id_club');

	$ROW4 = mysql_fetch_array($REQ4);
			mysql_free_result($REQ4);

	$equipe = $ROW4['id'];

	$poste  = explode(',', $postes);
	$nombre = count($poste);
	$i      = 0;
	$color  = 0;

	while ($i < $nombre)
	{
		$REQ5 = "SELECT phpl_joueurs.id AS IdJoueur, phpl_joueurs.nom, phpl_joueurs.prenom, phpl_joueurs.position_terrain, phpl_joueurs.nat, phpl_joueurs.num, phpl_effectif.id AS IdEffectif
					FROM phpl_joueurs, phpl_effectif
					WHERE phpl_joueurs.id = phpl_effectif.id_joueur
					AND phpl_effectif.id_equipe = '$equipe'
					AND position_terrain = '$poste[$i]'";
		$result = mysql_query($REQ5);

		echo '			<tr class="SousTitre">
				<td colspan="9">'.$poste[$i].'</td>
			</tr>'."\n";

		while($row = mysql_fetch_array($result))
		{
			$id_joueur   = $row['IdJoueur'];
			$num         = $row['num'];
			$id_effectif = $row['IdEffectif'];

			$requete2 = "SELECT SUM(phpl_compo.tps)
						FROM phpl_effectif, phpl_compo
						WHERE phpl_effectif.id = phpl_compo.id_effectif
						AND phpl_effectif.id = '$id_effectif'";
			$result2 = mysql_query($requete2);

			while($row2 = mysql_fetch_array($result2))
			{
				$tps = $row2[0];
			}

			$requete2a = "SELECT COUNT(phpl_compo.matchs)
						FROM phpl_effectif, phpl_compo
						WHERE phpl_effectif.id = phpl_compo.id_effectif
						AND phpl_effectif.id = '$id_effectif'";
			$result2a = mysql_query($requete2a);

			while($row2a = mysql_fetch_array($result2a))
			{
				$tit = $row2a[0];
			}

			$requete2b = "SELECT COUNT(phpl_compo.remp)
						FROM phpl_effectif, phpl_compo
						WHERE phpl_effectif.id = phpl_compo.id_effectif
						AND phpl_effectif.id='$id_effectif'
						AND phpl_compo.remp='1'";
			$result2b = mysql_query($requete2b);

			while($row2b = mysql_fetch_array($result2b))
			{
				$remp = $row2b[0];
			}

			$requete2d = "SELECT COUNT(phpl_compoCJ.id)
						FROM phpl_effectif, phpl_compoCJ
						WHERE phpl_effectif.id = phpl_compoCJ.id_effectif
						AND phpl_effectif.id = '$id_effectif'";
			$result2d = mysql_query($requete2d);

			while($row2d = mysql_fetch_array($result2d))
			{
				$cj = $row2d[0];
			}

			$requete2e = "SELECT COUNT(phpl_compoCR.id)
						FROM phpl_effectif, phpl_compoCR
						WHERE phpl_effectif.id = phpl_compoCR.id_effectif
						AND phpl_effectif.id = '$id_effectif'";
			$result2e = mysql_query($requete2e);

			while($row2e = mysql_fetch_array($result2e))
			{
				$cr = $row2e[0];
			}

			$requete2f = "SELECT COUNT(phpl_buteurs.id)
						FROM phpl_effectif, phpl_buteurs
						WHERE phpl_effectif.id = phpl_buteurs.id_effectif
						AND phpl_effectif.id = '$id_effectif'";
			$result2f = mysql_query($requete2f);

			while($row2f = mysql_fetch_array($result2f))
			{
				$but = $row2f[0];
			}

			if (empty($num) OR $num == 0) {	$NUM_MAILLOT = '&nbsp;'; } else { $NUM_MAILLOT = $num; }

			if (empty($tps))  { $tps  = 0; }
			if (empty($tit))  { $tit  = 0; }
			if (empty($remp)) { $remp = 0; }
			if (empty($cj))   { $cj   = 0; }
			if (empty($cr))   { $cr   = 0; }
			if (empty($but))  { $but  = 0; }

			if (($color%2) == 0) { $classe = 'ligne2'; } else { $classe = 'ligne1'; }

?>
			<tr class="<?php echo $classe; ?>">
				<td><?php echo $NUM_MAILLOT; ?></td>
				<td><a href="<?php echo URL_JOUEUR; ?>?id_joueur=<?php echo $id_joueur; ?>" class="jQiFrameJoueur TipsJoueur" rel="ajax_photo_joueur.php?id_joueur=<?php echo $id_joueur; ?>" title=""><?php echo stripslashes($row['nom'].' '.$row['prenom']); ?></a></td>
				<td class="TxtCenter"><?php echo AffDrapeaux($row['nat'], 1); ?></td>
				<td class="TxtCenter"><?php echo $tit; ?></td>
				<td class="TxtCenter"><?php echo $remp; ?></td>
				<td class="TxtCenter"><?php echo $tps; ?></td>
				<td class="TxtCenter"><?php echo $cj; ?></td>
				<td class="TxtCenter"><?php echo $cr; ?></td>
				<td class="TxtCenter"><?php echo $but; ?></td>
			</tr>
<?php

			$tps  = '';
			$tit  = '';
			$remp = '';
			$cj   = '';
			$cr   = '';

			$color++;
		}
		$i++;
	}

?>
		</tbody>
		<tfoot>
			<tr>
				<td colspan="9"><?php echo FormatText('<b>T</b>: Titulaire &bull; <b>R</b>: Rempla<b>T</b>: Titulaire &bull; <b>R</b>: Rempla&ccedil;antant'); ?></td>
			</tr>
		</tfoot>
	</table>

	<h5><?php echo FormatText(CONSULT_CLUB_4); ?></h5>
	<div id="ClubGraph" class="TxtCenter">
		<img src="<?php echo URL_GRAPHIQUE; ?>?equipe=<?php echo $equipe; ?>" alt="" title="" class="LoadImg" />
	</div>

<?php

	}

	include('../footer.php');
}
else
{
	header('location: index.php');
}

?>