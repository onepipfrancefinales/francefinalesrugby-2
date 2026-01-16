<?php

$page   = isset($_REQUEST['page'])   ? $_REQUEST['page']   : NULL;
$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : NULL;
$go     = isset($_REQUEST['go'])     ? $_REQUEST['go']     : NULL;
$data   = isset($_REQUEST['data'])   ? $_REQUEST['data']   : NULL;

switch($go)
{
	case 'suppclasse';
		$nb_classe = nb_classe($data);

		if ($nb_classe == 0)
		{
			$REQ = @mysql_query("DELETE FROM phpl_classe WHERE id='$data'");

			if ($REQ)
			{
				echo InfoReqSql('InfSuppClass', 1, 'highlight', 'check', ADMIN_CLUB_SUPP2);
			}
			else
			{
				echo InfoReqSql('InfSuppClass', 0, 'error', 'alert', GestErreur(ADMIN_PARAM_CREA2, $REQ));
			}
		}
		else
		{
			echo InfoReqSql('InfSuppClass', 0, 'highlight', 'alert', ADMIN_CLASSE_3.' '.$nb_classe.' '.ADMIN_CLASSE_4);
		}
	continue;

	case 'creclasse';
		$data1 = addslashes($data);

		$REQ = @mysql_query("INSERT INTO phpl_classe (nom) VALUES ('$data1')");

		if ($REQ)
		{
			echo InfoReqSql('InfCreaClass', 1, 'highlight', 'check', ADMIN_CLUB_CREA2);
		}
		else
		{
			echo InfoReqSql('InfCreaClass', 0, 'error', 'alert', GestErreur(ADMIN_PARAM_CREA2, $REQ));
		}
	continue;
}

$REQ1 = mysql_query('SELECT id, nom FROM phpl_classe ORDER BY nom ASC');
$NBR1 = mysql_num_rows($REQ1);

$REQ2 = mysql_query('SELECT id, nom, rang FROM phpl_classe ORDER BY rang ASC');
$NBR2 = mysql_num_rows($REQ2);

?>

<script type="text/javascript">
	$(function() {
		$('#tabsficheclubclass').tabs({
			selected: parseInt($.cookie('phpl_tabsficheclubclass')) || 0,
			show: function(e, ui) {
				var tab_id = ui.index; $.cookie('phpl_tabsficheclubclass', tab_id, { expires: 1 });
			}
		});
	});
</script>

<div id="tabsficheclubclass">
	<ul>
		<li><a href="#tabsficheclubclass-1">Gestion</a></li>
<?php

if ($NBR2 != 0)
{

?>
		<li><a href="#tabsficheclubclass-2"><?php echo ADMIN_RENS_9; ?></a></li>
<?php

}

?>
	</ul>

	<div id="tabsficheclubclass-1">
		<form method="post" action="" id="formClassCrea">
			<table class="Large50P ui-widget ui-widget-content">
				<thead>
					<tr class="ui-widget-header">
						<th colspan="3"><?php echo ADMIN_RENS_7; ?></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="Large33P"><?php echo ADMIN_CLASSE_NOM; ?></td>
						<td class="Large33P"><input type="text" name="data" maxlength="255" class="required" /></td>
						<td class="Large33P TxtRight">
							<input type="hidden" name="page" value="fiches_clubs" />
							<input type="hidden" name="action" value="classes" />
							<input type="hidden" name="go" value="creclasse" />
							<input type="submit" value="<?php echo ADMIN_RENS_7; ?>" />
						</td>
					</tr>
				</tbody>
			</table>
		</form>

<?php

if ($NBR1 != 0)
{
	$VAL1 = '<option value="">&nbsp;</option>'."\n";

	while($ROW1 = mysql_fetch_array($REQ1))
	{
		$VAL1.= '								<option value="'.$ROW1['id'].'">'.stripslashes($ROW1['nom']).'</option>'."\n";
	}

?>
		<form method="post" action="" id="formClassSupp">
			<table class="Large50P ui-widget ui-widget-content">
				<thead>
					<tr class="ui-widget-header">
						<th colspan="3"><?php echo ADMIN_RENS_8; ?></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="Large33P"><?php echo ADMIN_CLASSE_SUPP1; ?></td>
						<td class="Large33P">
							<select name="data" class="required">
								<?php echo $VAL1; ?>	
							</select>
						</td>
						<td class="Large33P TxtRight">
							<input type="hidden" name="page" value="fiches_clubs" />
							<input type="hidden" name="action" value="classes" />
							<input type="hidden" name="go" value="suppclasse" />
							<input type="submit" value="<?php echo ADMIN_RENS_8; ?>" />
						</td>
					</tr>
				</tbody>
			</table>
		</form>
<?php

}
mysql_free_result($REQ1);

?>
	</div>

<?php

if ($NBR2 != 0)
{
	$VAL2 = ''."\n";

	while($ROW2 = mysql_fetch_array($REQ2))
	{
		$VAL2.= '				<li id="recordsArray_'.$ROW2['id'].'" class="ui-state-default"><span class="handle ui-icon ui-icon-arrowthick-2-n-s"></span>'.stripslashes($ROW2['nom']).'</li>'."\n";

	}

?>
	<script type="text/javascript">
		$(function() {
			$("#sortable").sortable({
				opacity: 0.6,
				cursor: 'move',
				placeholder: 'ui-state-highlight',
				update: function(){
					var order = $(this).sortable("serialize") + '&action=update';
					$.post("fiches_clubs_classe_update.php", order, function(theResponse){
						$("#info").html(theResponse);
					});
				}
			});
			$("#sortable").disableSelection();
		});
	</script>

	<div id="tabsficheclubclass-2">

		<div id="info"></div>

		<div id="contentLeft">
			<ul id="sortable">
				<?php echo $VAL2; ?>
			</ul>
		</div>
	</div>
<?php

}
mysql_free_result($REQ2);

?>

</div>
