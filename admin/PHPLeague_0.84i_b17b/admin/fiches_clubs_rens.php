<?php

$page    = isset($_REQUEST['page'])    ? $_REQUEST['page']    : NULL;
$action  = isset($_REQUEST['action'])  ? $_REQUEST['action']  : NULL;
$actionc = isset($_REQUEST['actionc']) ? $_REQUEST['actionc'] : NULL;
$ga      = isset($_REQUEST['ga'])      ? $_REQUEST['ga']      : NULL;
$go      = isset($_REQUEST['go'])      ? $_REQUEST['go']      : NULL;
$id      = isset($_REQUEST['id'])      ? $_REQUEST['id']      : NULL;
$data    = isset($_REQUEST['data'])    ? $_REQUEST['data']    : NULL;
$rens    = isset($_REQUEST['rens'])    ? $_REQUEST['rens']    : NULL;
$nom     = isset($_REQUEST['nom'])     ? $_REQUEST['nom']     : NULL;
$url     = isset($_REQUEST['url'])     ? $_REQUEST['url']     : NULL;
$classe  = isset($_REQUEST['classe'])  ? $_REQUEST['classe']  : NULL;
$rang    = isset($_REQUEST['rang'])    ? $_REQUEST['rang']    : NULL;

switch($go)
{
	case 'supprens':
		mysql_query("DELETE FROM phpl_rens WHERE id='$rens'");
		mysql_query("DELETE FROM phpl_donnee WHERE id_rens='$rens'");

		echo InfoReqSql('InfRensSupp01', 1, 'highlight', 'check', ADMIN_RENS_SUPP2);
	continue;

	case 'crerens':
		if (empty($rens))
		{
			echo InfoReqSql('InfRens01', 0, 'highlight', 'alert', 'Champ vide. Impossible de créer le renseignement.');
		}
		else
		{
			$REQ1 = mysql_query('INSERT INTO phpl_rens (nom) VALUES ("'.trim(addslashes($rens)).'")');
			$UID1 = mysql_insert_id();
			$REQ2 = mysql_query('SELECT id FROM phpl_clubs');

			while ($ROW2 = mysql_fetch_array($REQ2))
			{
				mysql_query("INSERT INTO phpl_donnee (id_clubs, id_rens) VALUES ('$ROW2[0]', '$UID1')");
			}
			mysql_free_result($REQ2);

			echo InfoReqSql('InfRens01', 1, 'highlight', 'check', ADMIN_CLUB_CREA2);
		}
	continue;
}

if ($actionc == 2)
{
	reset($url);
	reset($nom);
	reset($id);

	while (list($cle, $val) = each($url) AND list($cle, $val2) = each($nom) AND list($cle, $val3) = each($id))
	{
		$rens_nom = addslashes($val2);

		mysql_query("UPDATE phpl_rens SET url='$val', nom='$rens_nom' WHERE id='$val3'");
	}

	echo InfoReqSql('InfRensMaj01', 1, 'highlight', 'check', ADMIN_CLASSE_2);
}

switch($ga)
{
	case 'supprens':
		reset ($data);

		while (list($key, $val) = each($data))

		mysql_query("UPDATE phpl_rens SET id_classe='0' WHERE phpl_rens.id='$val'");

		echo InfoReqSql('InfRensSupp', 1, 'highlight', 'check', ADMIN_RENS_SUPP2);
	continue;

	case 'crerens':
		reset($classe);

		while (list($val, $value) = each($classe))

		mysql_query("UPDATE phpl_rens SET id_classe='$value' WHERE id='$rens'");

		echo InfoReqSql('InfRensCrea', 1, 'highlight', 'check', ADMIN_CLUB_CREA2);
	continue;
}

if ($actionc == 1)
{
	reset($rang);
	reset($id);

	while (list($cle, $val) = each($rang) AND list($cle, $val2) = each($id))
	{
		mysql_query("UPDATE phpl_rens SET rang='$val' WHERE id='$val2'");
	}

	echo InfoReqSql('InfRensMaj02', 1, 'highlight', 'check', ADMIN_CLASSE_2);
}

$REQ_COUNT_1 = mysql_query('SELECT id FROM phpl_rens');
$NBR_COUNT_1 = mysql_num_rows($REQ_COUNT_1);

mysql_free_result($REQ_COUNT_1);

if ($NBR_COUNT_1 != 0)
{
	$REQ_COUNT_2 = mysql_query('SELECT id FROM phpl_classe');
	$NBR_COUNT_2 = mysql_num_rows($REQ_COUNT_2);

	mysql_free_result($REQ_COUNT_2);


	// Suppression d'un renseignement
	$TMP1 = '<option value="">&nbsp;</option>'."\n";
	$REQ1 = mysql_query('SELECT id, nom FROM phpl_rens ORDER BY nom ASC');

	while($ROW1 = mysql_fetch_array($REQ1))
	{
		$TMP1.= '<option value="'.$ROW1['id'].'">'.stripslashes($ROW1['nom']).'</option>'."\n";
	}
	mysql_free_result($REQ1);


	// Editer les renseignements
	$TMP2 = '';
	$REQ2 = mysql_query('SELECT id, nom, url FROM phpl_rens ORDER BY nom ASC');

	while($ROW2 = mysql_fetch_array($REQ2))
	{
		$TMP2.= '					<tr>
						<td class="TxtCenter"><input type="text" name="nom[]" value="'.stripslashes($ROW2['nom']).'" size="40" maxlength="50" class="required" /></td>
						<td class="TxtCenter">
							<input type="text" name="url[]" value="'.$ROW2['url'].'" size="40" maxlength="200" />
							<input type="hidden" name="id[]" value="'.$ROW2['id'].' /">
						</td>
					</tr>'."\n";
	}
	mysql_free_result($REQ2);


	// Entrer un renseignement dans une classe
	$TMP3 = '<option value="">&nbsp;</option>'."\n";
	$REQ3 = mysql_query('SELECT id, nom, id_classe FROM phpl_rens ORDER BY nom ASC');

	while($ROW3 = mysql_fetch_array($REQ3))
	{
		$TMP3.= '<option value="'.$ROW3['id'].'">'.stripslashes($ROW3['nom']).'</option>'."\n";
	}
	mysql_free_result($REQ3);

	$TMP4 = '';
	$REQ4 = mysql_query('SELECT id, nom FROM phpl_classe');

	while($ROW4 = mysql_fetch_array($REQ4))
	{
		$TMP4.= '<option value="'.$ROW4['id'].'">'.stripslashes($ROW4['nom']).'</option>'."\n";
	}
	mysql_free_result($REQ4);


	// Enlever un renseignement d'une classe
	$TMP5 = '';
	$REQ5 = mysql_query('SELECT phpl_rens.id, phpl_rens.id_classe, phpl_rens.nom, phpl_classe.id, phpl_classe.nom
					 FROM phpl_rens, phpl_classe
					 WHERE phpl_rens.id_classe=phpl_classe.id
					 ORDER BY phpl_classe.nom ASC, phpl_rens.nom ASC');

	while($ROW5 = mysql_fetch_array($REQ5))
	{
		$TMP5.= '<option value="'.$ROW5[0].'">'.stripslashes($ROW5[2].' '.ADMIN_RENS_6.' '.$ROW5[4]).'</option>'."\n";
	}
	mysql_free_result($REQ5);


	// Quels renseignements ne sont pas classés ?
	$TMP6 = '';
	$REQ6 = mysql_query('SELECT nom FROM phpl_rens WHERE id_classe="0"');
	$NBR6 = mysql_num_rows($REQ6);

	if ($NBR6 == 0)
	{
		$TMP6.= '				<tr>
					<td class="TxtCenter">'.ADMIN_RENS_15.'</td>
				</tr>'."\n";
	}
	else
	{
		while($ROW6 = mysql_fetch_array($REQ6))
		{
			$TMP6.= '				<tr>
					<td>'.stripslashes($ROW6['nom']).'</td>
				</tr>'."\n";
		}
	}
	mysql_free_result($REQ6);


	if ($NBR_COUNT_1 != 0)
	{
		// Ordonner les renseignements
		$TMP7 = '';
		$REQ7 = mysql_query('SELECT id, nom, rang FROM phpl_classe ORDER BY rang ASC');

		while($ROW7 = mysql_fetch_array($REQ7))
		{
			$TMP7.= '		<form method="post" action="">
			<table class="Large50P ui-widget ui-widget-content">
				<thead>
					<tr class="ui-widget-header">
						<th colspan="2">'.$ROW7['nom'].'</th>
					</tr>
				</thead>
				<tbody>'."\n";

			$REQ8 = mysql_query('SELECT id, nom, rang, id_classe FROM phpl_rens WHERE id_classe='.$ROW7['id'].' ORDER BY rang ASC');
			$NBR8 = mysql_num_rows($REQ8);

			if ($NBR8 == 0)
			{
				$TMP7.= '					<tr>
						<td colspan="2" class="TxtCenter">Aucun renseignement pour cette classe</td>
					</tr>'."\n";
			}
			else
			{
				while($ROW8 = mysql_fetch_array($REQ8))
				{
					$TMP7.= '					<tr>
						<td>
							<input type="text" name="rang[]" value="'.$ROW8[2].'" size="2" maxlength="2" />
							<input type="hidden" name="id[]" value="'.$ROW8[0].'" />
						</td>
						<td>'.stripslashes($ROW8[1]).'</td>
					</tr>'."\n";
				}
			}
			mysql_free_result($REQ8);

			$TMP7.= '				</tbody>'."\n";

			if ($NBR8 != 0)
			{
				$TMP7.= '				<tfoot>
					<tr class="ui-widget-footer">
						<td colspan="2">
							<input type="hidden" name="page" value="fiches_clubs" />
							<input type="hidden" name="action" value="rens" />
							<input type="hidden" name="actionc" value="1" />
							<input type="submit" value="'.ENVOI.'" />
						</td>
					</tr>
				</tfoot>'."\n";
			}

			$TMP7.= '			</table>
		</form>'."\n\n";
		}
		mysql_free_result($REQ7);
	}
}

?>

<script type="text/javascript">
	$(function() {
		$('#tabsficheclubrens').tabs({
			selected: parseInt($.cookie('phpl_tabsficheclubrens')) || 0,
			show: function(e, ui) {
				var tab_id = ui.index; $.cookie('phpl_tabsficheclubrens', tab_id, { expires: 1 });
			}
		});
	});
</script>

<div id="tabsficheclubrens">
	<ul>
		<li><a href="#tabsficheclubrens-1">Gestion</a></li>
<?php

if ($NBR_COUNT_1 != 0)
{

?>
		<li><a href="#tabsficheclubrens-2"><?php echo EDITER; ?></a></li>
		<li><a href="#tabsficheclubrens-3"><?php echo ADMIN_RENS_4; ?></a></li>
		<li><a href="#tabsficheclubrens-4"><?php echo ADMIN_RENS_8; ?></a></li>
<?php

	if ($NBR_COUNT_2 != 0)
	{

?>
		<li><a href="#tabsficheclubrens-5"><?php echo ADMIN_RENS_9; ?></a></li>
<?php

	}
}

?>
	</ul>

	<div id="tabsficheclubrens-1">
		<form method="post" action="" id="formRensGestCrea">
			<table class="Large50P ui-widget ui-widget-content">
				<thead>
					<tr class="ui-widget-header">
						<th colspan="3"><?php echo ADMIN_RENS_7; ?></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="Large33P"><label for="rens"><?php echo ADMIN_RENS_NOM; ?></label></td>
						<td class="Large33P"><input type="text" name="rens" id="rens" size="30" maxlength="50" class="required" /></td>
						<td class="Large33P TxtRight">
							<input type="hidden" name="page" value="fiches_clubs" />
							<input type="hidden" name="action" value="rens" />
							<input type="hidden" name="go" value="crerens" />
							<input type="submit" value="<?php echo ADMIN_RENS_7; ?>" />
						</td>
					</tr>
				</tbody>
			</table>
		</form>

<?php

if ($NBR_COUNT_1 != 0)
{

?>
		<form method="post" action="" id="formRensGestSupp">
			<table class="Large50P ui-widget ui-widget-content">
				<thead>
					<tr class="ui-widget-header">
						<th colspan="3"><?php echo ADMIN_RENS_8; ?></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="Large33P"><label><?php echo ADMIN_RENS_SUPP1; ?></label></td>
						<td class="Large33P">
							<select name="rens" class="required">
								<?php echo $TMP1; ?>
							</select>
						</td>
						<td class="Large33P TxtRight">
							<input type="hidden" name="page" value="fiches_clubs" />
							<input type="hidden" name="action" value="rens" />
							<input type="hidden" name="go" value="supprens" />
							<input type="submit" value="<?php echo ADMIN_RENS_8; ?>" />
						</td>
					</tr>
				</tbody>
			</table>
		</form>
<?php

}

?>
	</div>
<?php

if ($NBR_COUNT_1 != 0)
{

?>

	<div id="tabsficheclubrens-2">
		<form method="post" action="" id="formRensEdit">
			<table class="Large50P ui-widget ui-widget-content">
				<thead>
					<tr class="ui-widget-header">
						<th><?php echo ADMIN_RENS_12; ?></th>
						<th><?php echo ADMIN_RENS_13; ?></th>
					</tr>
				</thead>
				<tbody>
					<?php echo $TMP2; ?>
				</tbody>
				<tfoot>
					<tr class="ui-widget-footer">
						<td colspan="2" class="TxtCenter">
							<input type="hidden" name="page" value="fiches_clubs" />
							<input type="hidden" name="action" value="rens" />
							<input type="hidden" name="actionc" value="2" />
							<input type="submit" value="<?php echo ADMIN_RENS_11; ?>" />
						</td>
					</tr>
				</tfoot>
			</table>
		</form>
	</div>

	<div id="tabsficheclubrens-3">
<?php

	if ($NBR_COUNT_2 == 0)
	{
		echo InfoReqSql('InfRensInsert', 0, 'highlight', 'alert', 'Pas de classe. Pour en ajouter une cliquez [ <a href="index.php?page=fiches_clubs&action=classes">ICI</a> ]');
	}
	else
	{

?>
		<form method="post" action="" id="formRensInsert">
			<table class="Large50P ui-widget ui-widget-content">
				<thead>
					<tr class="ui-widget-header">
						<th colspan="4"><?php echo ADMIN_RENS_4; ?></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							<select name="rens" class="required">
								<?php echo $TMP3; ?>
							</select>
						</td>
						<td><?php echo ADMIN_RENS_1; ?></td>
						<td>
							<select name="classe[]" id="required">
								<?php echo $TMP4; ?>
							</select>
						</td>
						<td class="TxtRight">
							<input type="hidden" name="page" value="fiches_clubs" />
							<input type="hidden" name="action" value="rens" />
							<input type="hidden" name="ga" value="crerens" />
							<input type="submit" value="<?php echo ADMIN_RENS_7; ?>" />
						</td>
					</tr>
				</tbody>
			</table>
		</form>
<?php

	}

?>
	</div>

	<div id="tabsficheclubrens-4">
<?php

	if ($NBR_COUNT_2 == 0)
	{
		echo InfoReqSql('InfRensInsert', 0, 'highlight', 'alert', 'Pas de classe. Pour en ajouter une cliquez [ <a href="index.php?page=fiches_clubs&action=classes">ICI</a> ]');
	}
	else
	{

?>
		<form method="post" action="" id="formRensSuppr">
			<table class="Large50P ui-widget ui-widget-content">
				<tbody>
					<tr>
						<td>
							<select name="data[]" multiple="multiple" size="10" class="Large200M required">
								<?php echo $TMP5; ?>
							</select>
						</td>
						<td class="TxtRight">
							<input type="hidden" name="page" value="fiches_clubs" />
							<input type="hidden" name="action" value="rens" />
							<input type="hidden" name="ga" value="supprens" />
							<input type="hidden" name="id" value="<?php echo $id; ?>" />
							<input type="submit" value="<?php echo ADMIN_RENS_8; ?>" />
						</td>
					</tr>
				</tbody>
			</table>
		</form>

<?php

	}

?>
		<table class="Large50P ui-widget ui-widget-content">
			<thead>
				<tr class="ui-widget-header">
					<th><?php echo ADMIN_RENS_14; ?></th>
				</tr>
			</thead>
			<tbody>
				<?php echo $TMP6; ?>
			</tbody>
		</table>
	</div>
<?php

	if ($NBR_COUNT_2 != 0)
	{

?>

	<div id="tabsficheclubrens-5">
		<?php echo $TMP7; ?>
	</div>
<?php

	}
}

?>
</div>
