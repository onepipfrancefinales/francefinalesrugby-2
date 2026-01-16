<?php

$TPS_JEUX   = isset($_REQUEST['tpsjeux']) ? $_REQUEST['tpsjeux'] : NULL;
$PTS_BONOFF = isset($_REQUEST['bonoff'])  ? $_REQUEST['bonoff']  : NULL;
$PTS_BONDEF = isset($_REQUEST['bondef'])  ? $_REQUEST['bondef']  : NULL;

if ($action2 == 1)
{
	$REQ = mysql_query('SELECT id_champ FROM phpl_parametres WHERE id_champ='.$champ);
	$ROW = mysql_fetch_array($REQ);
	$NBR = mysql_num_rows($REQ);

	mysql_free_result($REQ);

	if ($NBR > 0)
	{
		$REQ = @mysql_query("UPDATE phpl_parametres
					SET
						pts_victoire='$pts_victoire',
						pts_nul='$pts_nul',
						pts_defaite='$pts_defaite',
						accession='$accession',
						barrage='$barrage',
						relegation='$relegation',
						id_equipe_fetiche='$id_equipe_fetiche',
						fiches_clubs='$fiches_clubs',
						estimation='$estimation'
					WHERE id_champ='$champ'
					");

		if ($REQ)
		{
			echo InfoReqSql('Inf', 1, 'highlight', 'check', ADMIN_PARAM_MAJ1);
		}
		else
		{
			echo InfoReqSql('Inf', 0, 'error', 'alert', GestErreur(ADMIN_PARAM_CREA2, $REQ));
		}
	}
	else
	{
		$REQ = @mysql_query("INSERT INTO phpl_parametres (
						id_champ,
						pts_victoire,
						pts_nul,
						pts_defaite,
						accession,
						barrage,
						relegation,
						id_equipe_fetiche,
						fiches_clubs,
						estimation)
					VALUES (
						'$champ',
						'$pts_victoire',
						'$pts_nul',
						'$pts_defaite',
						'$accession',
						'$barrage',
						'$relegation',
						'$id_equipe_fetiche',
						'$fiches_clubs',
						'$estimation'
					)");

		if ($REQ)
		{
			echo InfoReqSql('Inf', 1, 'highlight', 'check', ADMIN_PARAM_CREA1);
		}
		else
		{
			echo InfoReqSql('Inf', 0, 'error', 'alert', GestErreur(ADMIN_PARAM_CREA2, $REQ));
		}
	}  
}

if ($action2 == 'malusadd')
{
	$x = 0;

	while($x < nb_equipes($champ))
	{
		if (empty($malus[$x])) { $malus[$x] = 0; }

		$REQ1 = @mysql_query('UPDATE phpl_equipes SET penalite='.$malus[$x].' WHERE id='.$id_equipe[$x]);

		$x++;
	}

	if ($REQ1)
	{
		echo InfoReqSql('Inf', 1, 'highlight', 'check', ADMIN_PARAM_CREA1);

		include('generer.php');
	}
	else
	{
		echo InfoReqSql('Inf', 0, 'error', 'alert', GestErreur(ADMIN_PARAM_CREA2, $REQ1));
	}
}

$CHECK = ' checked="checked"';

$REQ1 = mysql_query('SELECT * FROM phpl_parametres WHERE id_champ='.$champ);
$ROW1 = mysql_fetch_array($REQ1);
		mysql_free_result($REQ1);

$FETICHE = $ROW1['id_equipe_fetiche'];
$FICHE   = $ROW1['fiches_clubs'];
$ESTIME  = $ROW1['estimation'];

// Equipe préférée
$EQUIPE_PREF = '				<select name="id_equipe_fetiche">
					<option value="0">&nbsp;</option>'."\n";

$REQ2 = mysql_query('SELECT phpl_clubs.nom, phpl_equipes.id
					FROM phpl_clubs, phpl_equipes
					WHERE phpl_equipes.id_champ='.$champ.'
					AND phpl_clubs.id=phpl_equipes.id_club
					ORDER BY nom ASC');
while ($ROW = mysql_fetch_array($REQ2))
{
	$ID   = $ROW['id'];
	$CLUB = utf8_encode($ROW['nom']);

	if (isset($FETICHE))
	{
		if ($ID == $FETICHE) { $SEL = ' selected="selected"'; } else { $SEL = ''; }

		$EQUIPE_PREF.= '					<option value="'.$ID.'"'.$SEL.'>'.$CLUB.'</option>'."\n";
	}
	else
	{
		$EQUIPE_PREF.= '					<option value="'.$ID.'">'.$CLUB.'</option>'."\n";
	}
}
mysql_free_result($REQ2);

$EQUIPE_PREF.= '				</select>'."\n";

// Activer les fiches clubs
if     ($FICHE == 1) { $CHECK1 = $CHECK; $CHECK2 = ''; }
elseif ($FICHE == 0) { $CHECK1 = '';     $CHECK2 = $CHECK; }
else				 { $CHECK1 = $CHECK; $CHECK2 = ''; }

// Activer estimations dans la page classement ?
if ($ESTIME == 1){ $CHECK3 = $CHECK; $CHECK4 = ''; }
if ($ESTIME == 0){ $CHECK3 = '';     $CHECK4 = $CHECK; }

// Tapis vert
$TPV = '';
$i   = 0;
$REQ = mysql_query('SELECT DISTINCT phpl_clubs.nom, phpl_equipes.id, penalite
					FROM phpl_clubs, phpl_equipes
					WHERE phpl_equipes.id_champ='.$champ.'
					AND phpl_clubs.id=phpl_equipes.id_club
					ORDER BY phpl_clubs.nom ASC');
while ($ROW = mysql_fetch_array($REQ))
{
	if (($i % 2) == 0) { $class = 'ligne1'; } else { $class = 'ligne2'; }

   $TPV.= '		<tr class="'.$class.'">
			<td>'.utf8_encode($ROW['nom']).'</td>
			<td>
				<input type="text" name="malus[]" value="'.$ROW['penalite'].'" size="4" class="TxtCenter" />
				<input type="hidden" name="id_equipe[]" value="'.$ROW['id'].'" />
			</td>
		</tr>'."\n";

	$i++;
}
mysql_free_result($REQ);

?>

<script type="text/javascript">
	$(function() {
		$('#tabsparam').tabs({
			selected: parseInt($.cookie('phpl_tabsparam')) || 0,
			show: function(e, ui) {
				var tab_id = ui.index; $.cookie('phpl_tabsparam', tab_id, { expires: 1 });
			}
		});

		$('#dialog01').dialog({ autoOpen: false, show: 'blind', hide: 'blind' });
		$('#aide01').click(function() { $('#dialog01').dialog('open'); return false; });
	});
</script>

<div id="tabsparam">
	<ul>
		<li><a href="#tabsparam-1"><?php echo ADMIN_PARAM_TITRE; ?></a></li>
		<li><a href="#tabsparam-2"><?php echo ADMIN_TAPVERT_TITRE; ?></a></li>
	</ul>

	<div id="tabsparam-1">
		<form method="post" action="">
			<table class="Large50P ui-widget ui-widget-content">
				<tbody>
					<tr class="ligne1">
						<td><label><?php echo ADMIN_PARAM_MSG2; ?></label></td>
						<td><input type="text" name="pts_victoire" maxlength="3" size="2" value="<?php echo $ROW1['pts_victoire']; ?>" class="TxtCenter" /></td>
					</tr>
					<tr class="ligne2">
						<td><label><?php echo ADMIN_PARAM_MSG3; ?></label></td>
						<td><input type="text" name="pts_nul" maxlength="3" size="2" value="<?php echo $ROW1['pts_nul']; ?>" class="TxtCenter" /></td>
					</tr>
					<tr class="ligne1">
						<td><label><?php echo ADMIN_PARAM_MSG4; ?></label></td>
						<td><input type="text" name="pts_defaite" maxlength="3" size="2" value="<?php echo $ROW1['pts_defaite']; ?>" class="TxtCenter" /></td>
					</tr>
					<tr class="ligne2">
						<td><label><?php echo ADMIN_PARAM_MSG15; ?></label></td>
						<td><input type="text" name="bonoff" maxlength="3" size="2" value="" class="TxtCenter FloatLeft" />&nbsp;(Pour le rugby)</td>
					</tr>
					<tr class="ligne1">
						<td><label><?php echo ADMIN_PARAM_MSG16; ?></label></td>
						<td><input type="text" name="bondef" maxlength="3" size="2" value="" class="TxtCenter FloatLeft" />&nbsp;(Pour le rugby)</td>
					</tr>
					<tr class="ligne2">
						<td><label><?php echo ADMIN_PARAM_MSG5; ?></label></td>
						<td><input type="text" name="accession" maxlength="3" size="2" value="<?php echo $ROW1['accession']; ?>" class="TxtCenter" /></td>
					</tr>
					<tr class="ligne1">
						<td><label><?php echo ADMIN_PARAM_MSG6; ?></label></td>
						<td><input type="text" name="barrage" maxlength="3" size="2" value="<?php echo $ROW1['barrage']; ?>" class="TxtCenter" /></td>
					</tr>
					<tr class="ligne2">
						<td><label><?php echo ADMIN_PARAM_MSG7; ?></label></td>
						<td><input type="text" name="relegation" maxlength="3" size="2" value="<?php echo $ROW1['relegation']; ?>" class="TxtCenter" /></td>
					</tr>
					<tr class="ligne1">
						<td><label><?php echo ADMIN_PARAM_MSG14; ?></label></td>
						<td><input type="text" name="tpsjeux" maxlength="3" size="2" value="" class="TxtCenter FloatLeft" />&nbsp;(en minutes)</td>
					</tr>
					<tr class="ligne2">
						<td><label><?php echo ADMIN_PARAM_MSG8; ?></label></td>
						<td><?php echo $EQUIPE_PREF; ?></td>
					</tr>
					<tr class="ligne1">
						<td><?php echo ADMIN_TAPVERT_MSG4; ?></td>
						<td>
							<div class="radio">
								<input type="radio" name="fiches_clubs" id="actnon" value="0"<?php echo $CHECK2; ?> /><label for="actnon"><?php echo ADMIN_RENS_18; ?></label>
								<input type="radio" name="fiches_clubs" id="actoui" value="1"<?php echo $CHECK1; ?> /><label for="actoui"><?php echo ADMIN_RENS_17; ?></label>
							</div>
						</td>
					</tr>
					<tr class="ligne2">
						<td><?php echo ADMIN_TAPVERT_MSG6; ?></td>
						<td>
							<div class="radio">
								<input type="radio" name="estimation" id="estnon" value="0"<?php echo $CHECK4; ?> /><label for="estnon"><?php echo ADMIN_RENS_18; ?></label>
								<input type="radio" name="estimation" id="estoui" value="1"<?php echo $CHECK3; ?> /><label for="estoui"><?php echo ADMIN_RENS_17; ?></label>
							</div>
						</td>
					</tr>
				</tbody>
				<tfoot>
					<tr class="ui-widget-footer">
						<td>&nbsp;</td>
						<td>
							<input type="hidden" name="page" value="championnat" />
							<input type="hidden" name="champ" value="<?php echo $champ; ?>" />
							<input type="hidden" name="action" value="parametres" />
							<input type="hidden" name="action2" value="1" />
							<input type="submit" value="<?php echo ENVOI; ?>" />
						</td>
					</tr>
				</tfoot>
			</table>
		</form>
	</div>

	<div id="tabsparam-2">
		<form method="post" action="">
			<table class="Large50P ui-widget ui-widget-content">
				<caption><button id="aide01" class="aide FloatRight">Aide</button></caption>
				<thead>
					<tr class="ui-widget-header">
						<th colspan="2"><?php echo ADMIN_TAPVERT_MSG7; ?></th>
					</tr>
				</thead>
				<tbody>
					<?php echo $TPV; ?>
				</tbody>
				<tfoot>
					<tr class="ui-widget-footer">
						<td>&nbsp;</td>
						<td>
							<input type="hidden" name="champ" value="<?php echo $champ; ?>" />
							<input type="hidden" name="page" value="championnat" />
							<input type="hidden" name="action" value="parametres" />
							<input type="hidden" name="action2" value="malusadd" />
							<input type="submit" value="<?php echo ENVOI; ?>" />
						</td>
					</tr>
				</tfoot>
			</table>
		</form>

		<div id="dialog01" title="<?php echo ADMIN_TAPVERT_MSG7; ?>">
			<p><?php echo ADMIN_TAPVERT_MSG1; ?></p>
			<p><?php echo ADMIN_TAPVERT_MSG3; ?></p>
		</div>
	</div>
</div>