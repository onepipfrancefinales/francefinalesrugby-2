<?php

$SELECTED = ' selected="selected"';
$CHECKED  = ' checked="checked"';

if ($action3 == 2)
{
	$requete      = "SELECT id FROM phpl_gr_championnats WHERE id='$gr_champ'";
	$resultats    = mysql_query($requete);
	$row          = mysql_fetch_array($resultats);
	$nb_resultats = mysql_num_rows($resultats);

	if ($nb_resultats > 0)
	{
		mysql_query("UPDATE phpl_gr_championnats SET pts_prono_exact='$pts_prono_exact', pts_prono_participation='$pts_prono_participation', id_master='$id_master', tps_avant_prono='$tps_avant_prono', activ_prono='$activ_prono' WHERE id='$gr_champ'");
	}
	else
	{
		$requete = "INSERT INTO phpl_gr_championnats (id_champ, pts_prono_exact, pts_prono_participation, id_master, tps_avant_prono) VALUES ('$champ', '$pts_prono_exact', '$pts_prono_participation', '$id_master', '$tps_avant_prono')";
		$resultats = mysql_query($requete);
	}
}

if ($action3 == 'creer' AND $champ)
{
	$requete = "SELECT * FROM phpl_gr_championnats WHERE id='$gr_champ'";
	$result  = mysql_query($requete);
	$row     = mysql_fetch_array($result);

	$nom                     = isset($row['nom'])                     ? $row['nom']                     : NULL;
	$activ_prono             = isset($row['activ_prono'])             ? $row['activ_prono']             : NULL;
	$pts_prono_exact         = isset($row['pts_prono_exact'])         ? $row['pts_prono_exact']         : NULL;
	$pts_prono_participation = isset($row['pts_prono_participation']) ? $row['pts_prono_participation'] : NULL;
	$id_master               = isset($row['id_master'])               ? $row['id_master']               : NULL;
	$tps_avant_prono         = isset($row['tps_avant_prono'])         ? $row['tps_avant_prono']         : NULL;

	if (isset($row["nom"])){$nom_gr_champ = $row["nom"];} else {$nom_gr_champ=0;}
	if (isset($row["activ_prono"])){$activ_prono = $row["activ_prono"];} else {$activ_prono=0;}
	if (isset($row["pts_prono_exact"])){$pts_prono_exact = $row["pts_prono_exact"];} else {$pts_prono_exact=0;}
	if (isset($row["pts_prono_participation"])){$pts_prono_participation = $row["pts_prono_participation"];} else {$pts_prono_participation=0;}
	if (isset($row["id_master"])){$id_master = $row["id_master"];} else {$id_master=0;}
	if (isset($row["tps_avant_prono"])){$tps_avant_prono = $row["tps_avant_prono"];} else {$tps_avant_prono=0;}

	mysql_query("DELETE FROM phpl_gr_championnats WHERE id = '$gr_champ'");

	reset($champ);

	while (list($cle, $val) = each($champ))
	{
		mysql_query("INSERT INTO phpl_gr_championnats (id, nom, id_champ, activ_prono, pts_prono_exact, pts_prono_participation, id_master, tps_avant_prono) VALUES ('$gr_champ', '$nom_gr_champ', $val, $activ_prono, $pts_prono_exact, $pts_prono_participation, $id_master, $tps_avant_prono)");
	}
}


// Paramètres Pronostics
$REQ1 = mysql_query('SELECT * FROM phpl_gr_championnats WHERE id='.$gr_champ);
$ROW1 = mysql_fetch_array($REQ1);

mysql_free_result($REQ1);

if ($ROW1['activ_prono'] == 1)
{
	$CHECK1 = $CHECKED;
	$CHECK2 = '';
}
elseif ($ROW1['activ_prono'] == 0)
{
	$CHECK1 = '';
	$CHECK2 = $CHECKED;
}
else
{
	$CHECK1 = $CHECKED;
	$CHECK2 = '';
}

//
$OPT2 = '<option value=""></option>'."\n";
$REQ2 = mysql_query('SELECT pseudo, id FROM phpl_membres ORDER BY pseudo ASC');

while ($ROW2 = mysql_fetch_array($REQ2))
{
	if ($ROW2['id'] == $ROW1['id_master'])
	{
		$SEL = $SELECTED;
	}
	else
	{
		$SEL = '';
	}

	$OPT2.= '<option value="'.$ROW2['id'].'"'.$SEL.'>'.$ROW2['pseudo'].'</option>'."\n";
}
mysql_free_result($REQ2);

?>

<script type="text/javascript">
$(function() {
	$('#tabsgrpchamp').tabs({
		cookie: {
			expires: 1
		}
	});

	$('#dialog01').dialog({ autoOpen: false, show: 'blind', hide: 'blind' });
	$('#aide01').click(function() { $('#dialog01').dialog('open'); return false; });
});
</script>

<div id="tabsgrpchamp">
	<ul>
		<li><a href="#tabsgrpchamp-1"><?php echo ADMIN_GR_CHAMP_EDIT; ?></a></li>
		<li><a href="#tabsgrpchamp-2">Edition</a></li>
	</ul>

	<div id="tabsgrpchamp-1">
		<form method="post" action="">
			<table class="Large50P ui-widget ui-widget-content">
				<thead>
					<tr class="ui-widget-header">
						<th colspan="2"><?php echo ADMIN_GR_CHAMP_EDIT_2; ?></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="TxtCenter"><?php champ_menu(); ?></td>
						<td class="TxtRight">
							<input type="hidden" name="page" value="groupes_championnats" />
							<input type="hidden" name="gr_champ" value="<?php echo $gr_champ; ?>" />
							<input type="hidden" name="action" value="editer" />
							<input type="hidden" name="action3" value="creer" />
							<input type="submit" value="<?php echo ADMIN_GR_CHAMP_EDIT_4; ?>" />
							<button id="aide01" class="aide">Aide</button>
						</td>
					</tr>
				</tbody>
			</table>
		</form>

		<div id="dialog01" title="<?php echo GR_LEAGUE; ?>">
			<p><?php echo ADMIN_GR_CHAMP_EDIT_1.' '.affich_gr_champ($gr_champ); ?></p>
			<p><?php echo ADMIN_EQUIPE_3; ?></p>
		</div>

		<table class="Large50P ui-widget ui-widget-content">
			<thead>
				<tr class="ui-widget-header">
					<th><?php echo ADMIN_GR_CHAMP_EDIT_5; ?></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td class="TxtCenter"><?php champ_gr_menu($gr_champ); ?></td>
				</tr>
			</tbody>
		</table>
	</div>

	<div id="tabsgrpchamp-2">
		<form method="post" action="">
			<table class="Large50P ui-widget ui-widget-content">
				<thead>
					<tr class="ui-widget-header">
						<th colspan="2"><?php echo ADMIN_PARAM_MSG13.' '.affich_gr_champ($gr_champ); ?></th>
					</tr>
				</thead>
				<tbody>
					<tr class="ligne1">
						<td><?php echo ADMIN_TAPVERT_MSG5; ?></td>
						<td>
							<div class="radio">
								<input type="radio" value="0" name="activ_prono" id="actnon"<?php echo $CHECK2; ?> /><label for="actnon"><?php echo ADMIN_RENS_18; ?></label>
								<input type="radio" value="1" name="activ_prono" id="actoui"<?php echo $CHECK1; ?> /><label for="actoui"><?php echo ADMIN_RENS_17; ?></label>
							</div>
						</td>
					</tr>
					<tr class="ligne2">
						<td><label><?php echo ADMIN_PARAM_MSG9; ?></label></td>
						<td><input type="text" name="pts_prono_exact" value="<?php echo $ROW1['pts_prono_exact']; ?>" size="2" maxlength="3" class="TxtCenter" /></td>
					</tr>
					<tr class="ligne1">
						<td><label><?php echo ADMIN_PARAM_MSG10; ?></label></td>
						<td><input type="text" name="pts_prono_participation" value="<?php echo $ROW1['pts_prono_participation']; ?>" size="2" maxlength="3" class="TxtCenter" /></td>
					</tr>
					<tr class="ligne2">
						<td><label><?php echo ADMIN_PARAM_MSG11; ?></label></td>
						<td>
							<select name="id_master">
								<?php echo $OPT2; ?>
							</select>
						</td>
					</tr>
					<tr class="ligne1">
						<td><label><?php echo ADMIN_PARAM_MSG12; ?></label></td>
						<td><input type="text" name="tps_avant_prono" value="<?php echo $ROW1['tps_avant_prono']; ?>" size="2" maxlength="3" class="TxtCenter" /></td>
					</tr>
				</tbody>
				<tfoot>
					<tr class="ui-widget-footer">
						<td>&nbsp;</td>
						<td>
							<input type="hidden" name="page" value="groupes_championnats" />
							<input type="hidden" name="gr_champ" value="<?php echo $gr_champ; ?>" />
							<input type="hidden" name="action" value="editer" />
							<input type="hidden" name="action3" value="2" />
							<input type="submit" value="<?php echo ENVOI; ?>" />
						</td>
					</tr>
				</tfoot>
			</table>
		</form>
	</div>
</div>