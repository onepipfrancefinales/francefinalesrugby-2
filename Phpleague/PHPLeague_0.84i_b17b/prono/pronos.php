<?php

if (VerifSession($user_pseudo, $user_mdp) == 1)
{

?>

<script type="text/javascript">
	var PL  = new InitTab(64);
	var ChN = 'N';
	var Ch1 = '1';
	var Ch2 = '2';

	ImgN  = new Image(10, 14); ImgN.src  = '<?php echo '../'.REP_IMG_PRONO; ?>afficheN.gif';
	Img1  = new Image(10, 14); Img1.src  = '<?php echo '../'.REP_IMG_PRONO; ?>affiche1.gif';
	Img2  = new Image(10, 14); Img2.src  = '<?php echo '../'.REP_IMG_PRONO; ?>affiche2.gif';
	ImgNR = new Image(10, 14); ImgNR.src = '<?php echo '../'.REP_IMG_PRONO; ?>affiche_selection.gif';
	Img1R = new Image(10, 14); Img1R.src = '<?php echo '../'.REP_IMG_PRONO; ?>affiche_selection.gif';
	Img2R = new Image(10, 14); Img2R.src = '<?php echo '../'.REP_IMG_PRONO; ?>affiche_selection.gif';

	function Change(match, res) {
		if (res == 1) {
			eval('document.matchid.m'+match+'_0.src = ImgN.src');
			eval('document.matchid.m'+match+'_1.src = Img1R.src');
			eval('document.matchid.m'+match+'_2.src = Img2.src');
			eval('PL['+match+']=Ch1;');
		} else if (res == 2) {
			eval('document.matchid.m'+match+'_0.src = ImgN.src');
			eval('document.matchid.m'+match+'_1.src = Img1.src');
			eval('document.matchid.m'+match+'_2.src = Img2R.src');
			eval('PL['+match+']=Ch2;');
		} else {
			eval('document.matchid.m'+match+'_0.src = ImgNR.src');
			eval('document.matchid.m'+match+'_1.src = Img1.src');
			eval('document.matchid.m'+match+'_2.src = Img2.src');
			eval('PL['+match+']=ChN;');
		}
	}

	function InitTab(length) {
		this.length = length;
		for(i=1; i<=length; i++) {
			this[i] = '';
		}
		return this;
	}

	function ValideGrille(tot) {
		for (i=1; i<=tot; i++) {
			if (PL[i] != '') {
				if (PL[i] != 'undefined') {
					eval('document.matchid.r_'+i+'.value=PL['+i+'];');
				}
				else { eval('document.matchid.r_'+i+'.value=undefined;'); }
			}
			else { eval('document.matchid.r_'+i+'.value=undefined;'); }
		}
		document.matchid.submit();
		return;
	}
</script>

<script type="text/javascript">function CountLimit(periods){if($.countdown.periodsToSeconds(periods)==3600){$(this).addClass('LimitColor');}}</script>

<?php

	$debut = isset($_REQUEST['debut']) ? $_REQUEST['debut'] : NULL;

	//$j = 10;
	if     ($gr_champ == 1) { $j = 10; }
	elseif ($gr_champ == 2) { $j = 8; }
	elseif ($gr_champ == 3) { $j = 7; }
	else					{ $j = 6; }

	if (empty($debut) OR $debut == 0)
	{
		$debut = 0;
		$apres = 1;
	}

	$nb_matchs = $j;
	$fin       = $debut + $nb_matchs;

	if ($action == 'reset')
	{
		$date_actuelle = time();
		$fin           = $debut + $nb_matchs;

		$requete = "SELECT tps_avant_prono FROM phpl_gr_championnats WHERE id='$gr_champ'";
		$resultat = mysql_query($requete);

		while ($row = mysql_fetch_array($resultat))
		{
			$temps_avant_prono = $row['tps_avant_prono'];
		}

		$requete = "SELECT id FROM phpl_membres WHERE id_prono='$user_id'";
		$resultat = mysql_query($requete);

		while ($row = mysql_fetch_array($resultat))
		{
			$id = $row['id'];
		}

		$requete = "SELECT phpl_matchs.id
          FROM phpl_clubs, phpl_clubs as CLEXT, phpl_matchs, phpl_journees, phpl_equipes, phpl_equipes as EXT, phpl_gr_championnats
          WHERE phpl_clubs.id=phpl_equipes.id_club
          AND CLEXT.id=EXT.id_club
          AND phpl_equipes.id=phpl_matchs.id_equipe_dom
          AND EXT.id=phpl_matchs.id_equipe_ext
          AND phpl_matchs.id_journee=phpl_journees.id
          AND phpl_journees.id_champ=phpl_gr_championnats.id_champ
          AND phpl_gr_championnats.id='$gr_champ'
          AND phpl_matchs.buts_dom is null
          AND phpl_matchs.buts_ext is null
          ORDER by phpl_matchs.date_reelle, phpl_clubs.nom
          LIMIT $debut, $fin ";

		$resultat=mysql_query($requete) or die ("probleme " .mysql_error());

		while ($row = mysql_fetch_array($resultat))
		{
			$requete1  = "SELECT phpl_matchs.date_reelle FROM phpl_matchs WHERE phpl_matchs.id='$row[0]'";
			$resultat1 = mysql_query($requete1);

			while ($row1 = mysql_fetch_array($resultat1))
			{
				$date_relle = $row1[0];
			}

			$date_match_timestamp = format_date_timestamp($date_relle);

			if ($date_actuelle<($date_match_timestamp+$temps_avant_prono*60))
			{
				mysql_query("UPDATE phpl_pronostics SET pronostic='0' WHERE id_match='$row[0]' AND id_membre='$id'");
			}

			mysql_query("DELETE FROM phpl_pronostics WHERE pronostic='0'");
		}
	}

	if ($action == 'valid_pronos')
	{
		for($i=1; $i<=$_REQUEST['nb_fiche']; $i++)
		{   
			$nom_f_prono = "r_$i";
			$nom_id_match = "id_match_$i";

			if ($_REQUEST[$nom_f_prono])  { $f_prono[$i]  = $_REQUEST[$nom_f_prono]; }
			if ($_REQUEST[$nom_id_match]) { $id_match[$i] = $_REQUEST[$nom_id_match]; }

			$requete  = "SELECT phpl_matchs.date_reelle FROM phpl_matchs WHERE phpl_matchs.id='$id_match[$i]'";
			$resultat = mysql_query($requete);

			while ($row = mysql_fetch_array($resultat))
			{      
				$date_relle = $row[0];
			}

			$requete  = "SELECT tps_avant_prono FROM phpl_gr_championnats WHERE id='$gr_champ'";
			$resultat = mysql_query($requete);

			while ($row = mysql_fetch_array($resultat))
			{
				$temps_avant_prono = $row[0];
			}

			$date_match_timestamp = format_date_timestamp($date_relle);
			$date_actuelle        = time();

			if ($f_prono[$i] !== 'undefined')
			{
				mysql_query("DELETE FROM phpl_pronostics WHERE pronostic=' '");

				$requete = "SELECT * FROM phpl_matchs, phpl_pronostics, phpl_membres WHERE phpl_membres.id_prono='$user_id'
							AND phpl_membres.id=phpl_pronostics.id_membre
							AND phpl_pronostics.id_match=phpl_matchs.id
							AND phpl_pronostics.id_match='$id_match[$i]'";

				$resultat = mysql_query($requete);
				$nb_prono = mysql_num_rows($resultat);

				$requete  = "SELECT id FROM phpl_membres WHERE id_prono='$user_id'";
				$resultat = mysql_query($requete);

				while ($row= mysql_fetch_array($resultat))
				{
					$id = $row['id'];
				}

				if ($nb_prono == 1)
				{
					if ($date_actuelle < ($date_match_timestamp + $temps_avant_prono * 60))
					{
						mysql_query("UPDATE phpl_pronostics SET pronostic='$f_prono[$i]' WHERE phpl_pronostics.id_membre='$id' AND phpl_pronostics.id_match='$id_match[$i]'");
					}
				}

				if ($nb_prono == 0)
				{
					if ($date_actuelle < ($date_match_timestamp + $temps_avant_prono * 60))
					{
						mysql_query("INSERT INTO phpl_pronostics (id_membre, pronostic, id_match, id_champ) VALUES ('$id','$f_prono[$i]','$id_match[$i]', '$gr_champ')");
					}
				}
				elseif ($nb_prono!= 1 AND $nb_prono != 0)
				{
					echo '<p>Oups !!!</p>';
				}
			}
		}

		echo '
		<p class="TxtCenter">'.FormatText(PRONO_GRILLE_CONFIRME).'</p>
		<p class="TxtCenter">
			&#060;&#060; <a href="index.php?page=pronos&amp;gr_champ='.$gr_champ.'&amp;debut='.$debut.'">'.FormatText(RETOUR).'</a>&nbsp;
			<a href="index.php?page=pronos&amp;debut='.$fin.'&amp;gr_champ='.$gr_champ.'">'.FormatText(PRONO_GRILLE_PROCHAINE).'</a> &#062;&#062;
		</p>'."\n\n";
	}
	elseif ($action !== 'valid_pronos')
	{
		if ($debut == 0)
		{
			$prec = 'index.php?page=derniers_pronos&amp;gr_champ='.$gr_champ;
		}
		else
		{
			$debut1 = $debut - $nb_matchs;
			$prec   = 'index.php?page=pronos&amp;debut='.$debut1.'&amp;gr_champ='.$gr_champ;
		}

?>
<table class="Large100P">
	<tr>
		<td class="TxtCenter">
			<< <a href="<?php echo $prec; ?>"><?php echo FormatText(PRONO_GRILLE_PRECEDENT); ?></a>&nbsp;
			<a href="index.php?page=pronos&amp;debut=<?php print $fin; ?>&amp;gr_champ=<?php echo $gr_champ;?>"><?php echo FormatText(PRONO_GRILLE_SUIVANT); ?></a> >>
		</td>
	</tr>
</table>

<form method="post" action="index.php?page=pronos&amp;gr_champ=<?php echo $gr_champ;?>" name="matchid" id="matchid">
	<table class="Large100P">
		<thead>
			<tr>
				<th><?php echo FormatText(ADMIN_COHERENCE_MSG2); ?></th>
				<th><?php echo FormatText(DATE); ?></th>
				<th>&nbsp;</th>
				<th><?php echo FormatText(PRONO_GRILLE_PRONO); ?></th>
				<th>&nbsp;</th>
				<th><?php echo FormatText(PRONO_GRILLE_TEMPS); ?></th>
			</tr>
		</thead>
		<tbody>
<?php

		$i = 0;
		$x = 0;

		$REQ = mysql_query('SELECT phpl_clubs.nom, CLEXT.nom, phpl_matchs.id, phpl_matchs.date_reelle, phpl_journees.numero
				FROM phpl_clubs, phpl_clubs AS CLEXT, phpl_matchs, phpl_journees, phpl_equipes, phpl_equipes AS EXT, phpl_gr_championnats
				WHERE phpl_clubs.id=phpl_equipes.id_club
				AND CLEXT.id=EXT.id_club
				AND phpl_equipes.id=phpl_matchs.id_equipe_dom
				AND EXT.id=phpl_matchs.id_equipe_ext
				AND phpl_matchs.id_journee=phpl_journees.id
				AND phpl_journees.id_champ=phpl_gr_championnats.id_champ
				AND phpl_gr_championnats.id='.$gr_champ.'
				AND phpl_matchs.buts_dom is null
				AND phpl_matchs.buts_ext is null
				AND phpl_clubs.nom!="exempte"
				AND CLEXT.nom!="exempte"
				ORDER BY phpl_matchs.date_reelle ASC, phpl_clubs.nom ASC
				LIMIT '.$debut.', '.$fin);

		$NBR = mysql_num_rows($REQ);

		if ($NBR == 0)
		{
			echo '<tr><td colspan="6" class="TxtCenter">'.FormatText('Journ�e inexistante').'</td></tr>';
		}
		else
		{
			while ($row = mysql_fetch_array($REQ) AND $i < $nb_matchs)
			{
				$clubs_nom  = stripslashes($row[0]);
				$clubs_nom1 = stripslashes($row[1]);

				$requete2 = "SELECT pronostic
					FROM phpl_pronostics, phpl_membres
					WHERE phpl_pronostics.id_match='$row[2]'
					AND phpl_membres.id=phpl_pronostics.id_membre
					AND phpl_membres.id_prono='$user_id'";

				$resultat2 = mysql_query($requete2);
				$nb_pronos = mysql_num_rows($resultat2);

			if ($nb_pronos == 0)
			{
				$prono = '0';
			}
			else
        	{
				while ($row2 = mysql_fetch_array($resultat2))
				{
					$prono = $row2['pronostic'];

					if ($row2['pronostic'] == '')
					{
						$prono = '0';
					}
				}
			}

			$requete2  = "SELECT tps_avant_prono FROM phpl_gr_championnats WHERE id='$gr_champ'";
			$resultat2 = mysql_query($requete2);

			while ($row2 = mysql_fetch_array($resultat2))
			{
				$temps_avantmatch = $row2['tps_avant_prono'];
			}

			$date_match_timestamp = format_date_timestamp($row[3]);
			$date_actuelle        = time();
			$ecart_secondes       = $date_match_timestamp - $date_actuelle;
			$ecart_heures         = floor($ecart_secondes / (60 * 60)) - $temps_avantmatch;
			$ecart_minutes        = floor($ecart_secondes / 60) - $temps_avantmatch * 60;
			$ecart_jours          = floor($ecart_secondes / (60 * 60 * 24) - $temps_avantmatch / 60);
			$date                 = format_date_fr($row[3]);

			$TPS = $ecart_secondes - ($temps_avantmatch * 3600);

			if ($TPS <= 0)
			{
				$VAL        = '<span class="LimitColor">'.FormatText(PRONO_GRILLE_EXPIRE).'</span>';
				$INIT_COUNT = '';
			}
			else
			{
				$VAL        = '';
				$INIT_COUNT = '<script type="text/javascript">$(function(){$(\'#count'.$i.'\').countdown({until:\'+'.$TPS.'s\',onTick:CountLimit,layout:\'{dn} {dl} {hnn}{sep}{mnn}{sep}{snn} {desc}\',description:\'\',expiryText:\'<div class="expire">'.FormatText(PRONO_GRILLE_EXPIRE).'</div>\'});});</script>';
			}

			echo '		<tr>
			<td class="TxtCenter">'.$row[4].'</td>
			<td class="TxtCenter">'.$date.'</td>
			<td class="TxtRight">'.stripslashes($clubs_nom).'</td>
			<td class="TxtCenter">'.$INIT_COUNT."\n";

			if ($ecart_heures >= 0)
			{
				$x++;

				$CH_IMG_1  = Image('../'.REP_IMG_PRONO, CHX_IMG_1, '', '', '', 'm'.$x.'_1');
				$CH_IMG_2  = Image('../'.REP_IMG_PRONO, CHX_IMG_2, '', '', '', 'm'.$x.'_2');
				$CH_IMG_N  = Image('../'.REP_IMG_PRONO, CHX_IMG_N, '', '', '', 'm'.$x.'_0');
				$CH_IMG_B1 = Image('../'.REP_IMG_PRONO, CHX_IMG_B, '', '', '', 'm'.$x.'_1');
				$CH_IMG_B2 = Image('../'.REP_IMG_PRONO, CHX_IMG_B, '', '', '', 'm'.$x.'_2');
				$CH_IMG_B0 = Image('../'.REP_IMG_PRONO, CHX_IMG_B, '', '', '', 'm'.$x.'_0');

				echo '				<input type="hidden" name="id_match_'.$x.'" value="'.$row[2].'" />
				<input type="hidden" name="r_'.$x.'" value="1" />'."\n";

				if ($prono == '0')
				{
?>
             <a href="javascript:Change(<?php echo $x; ?>, 1);"><?php echo $CH_IMG_1; ?></a>
             <a href="javascript:Change(<?php echo $x; ?>, 0);"><?php echo $CH_IMG_N; ?></a>
             <a href="javascript:Change(<?php echo $x; ?>, 2);"><?php echo $CH_IMG_2; ?></a>
<?php
				}

				if ($prono == 1)
				{
?>
             <a href="javascript:Change(<?php echo $x; ?>, 1);"><?php echo $CH_IMG_B1; ?></a>
             <a href="javascript:Change(<?php echo $x; ?>, 0);"><?php echo $CH_IMG_N; ?></a>
             <a href="javascript:Change(<?php echo $x; ?>, 2);"><?php echo $CH_IMG_2; ?></a>
<?php
				}

				if ($prono == 'N')
				{
?>    
             <a href="javascript:Change(<?php echo $x; ?>, 1);"><?php echo $CH_IMG_1; ?></a>
             <a href="javascript:Change(<?php echo $x; ?>, 0);"><?php echo $CH_IMG_B0; ?></a>
             <a href="javascript:Change(<?php echo $x; ?>, 2);"><?php echo $CH_IMG_2; ?></a>
<?php
				}

				if ($prono == 2)
				{
?>
             <a href="javascript:Change(<?php echo $x; ?>, 1);"><?php echo $CH_IMG_1; ?></a>
             <a href="javascript:Change(<?php echo $x; ?>, 0);"><?php echo $CH_IMG_N; ?></a>
             <a href="javascript:Change(<?php echo $x; ?>, 2);"><?php echo $CH_IMG_B2; ?></a>
<?php
				}

			}
			else
			{
				if ($prono == 1)   { echo IMG_B.' '.IMG_N.' '.IMG_2; }
				if ($prono == 'N') { echo IMG_1.' '.IMG_B.' '.IMG_2; }
				if ($prono == 2)   { echo IMG_1.' '.IMG_N.' '.IMG_B; }
				if ($prono == '0') { echo IMG_1.' '.IMG_N.' '.IMG_2; }
			}

				echo '			</td>
			<td>'.stripslashes($clubs_nom1).'</td>
			<td class="TxtCenter Bold"><div id="count'.$i.'">'.$VAL.'</div></td>
	   	</tr>'."\n";

				$i++;
			}
		}
?>
		</tbody>
<?php

		if ($NBR > 0)
		{

?>
		<tfoot>
			<tr>
				<td colspan="6" class="TxtCenter">
					<input type="hidden" name="action" value="valid_pronos" />
					<input type="hidden" name="nb_fiche" value="<?php echo $x; ?>" />
					<input type="hidden" name="debut" value="<?php echo $debut; ?>" />
					[ <a href="index.php?page=pronos&amp;action=reset&amp;debut=<?php echo $debut; ?>&amp;gr_champ=<?php echo $gr_champ; ?>"><?php echo FormatText('Annuler'); ?></a> ]
					[ <a href="javascript: ValideGrille(<?php echo $x; ?>);"><?php echo FormatText('Valider'); ?></a> ]
				</td>
			</tr>
		</tfoot>
<?php

		}

?>
	</table>
</form>

<?php

	}
}

?>