<?php

$action_sup = isset($_REQUEST['action_sup']) ? $_REQUEST['action_sup'] : NULL;
$membres_id = isset($_REQUEST['membres_id']) ? $_REQUEST['membres_id'] : NULL;

if ($action_sup == 1) 
{ 
	reset($membres_id); 

	while (list($cle, $val) = each($membres_id)) 
	{ 
		//efface le classement du membre ou des membres
		mysql_query("DELETE FROM phpl_clmnt_pronos WHERE id_membre='$val'") or die ("probleme " .mysql_error()); 
		//efface les pronos du membre ou des membres
		mysql_query("DELETE FROM phpl_pronostics WHERE id_membre='$val'") or die ("probleme " .mysql_error()); 
		//efface le membre ou les membres
		mysql_query("DELETE FROM phpl_membres WHERE id='$val'") or die ("probleme " .mysql_error()); 
	} 
} 


$REQ1 = mysql_query('SELECT * FROM phpl_membres ORDER BY pseudo ASC');
$NBR1 = mysql_num_rows($REQ1);

?>
<h2><?php echo MENU_MEMBRES; ?></h2>


<?php echo InfoReqSql('Info', 0, 'error', 'alert', 'En cours de d�veloppement. D�sol� de la g�ne occasionn�e.'); ?>


<script type="text/javascript">
	$(function() {
		$('#tabsmembre').tabs({
			selected: parseInt($.cookie('phpl_tabsmembre')) || 0,
			show: function(e, ui) {
				var tab_id = ui.index; $.cookie('phpl_tabsmembre', tab_id, { expires: 1 });
			}
		});
	});
</script>

<div id="tabsmembre">
	<ul>
		<li><a href="#tabsmembre-1">Gestion</a></li>
		<li><a href="#tabsmembre-2">Exporter</a></li>
		<li><a href="#tabsmembre-3"><?php echo ADMIN_RENS_8; ?></a></li>
	</ul>

	<div id="tabsmembre-1">
		<table class="Large100P ui-widget ui-widget-content" id="tableMembres">
			<caption class="TxtRight">Nombre de membre : <b><?php echo $NBR1; ?></b></caption>
			<thead>
				<tr class="ui-widget-header">
					<th>ID</th>
					<th class="TxtLeft">Pseudo</th>
					<th class="TxtLeft">Email</th>
					<th class="TxtLeft">Nom</th>
					<th class="TxtLeft">Prénom</th>
					<th class="TxtLeft">Adresse</th>
					<th class="TxtLeft">Code postal</th>
					<th class="TxtLeft">Ville</th>
					<th class="TxtLeft">Tél.</th>
				</tr>
			</thead>
			<tbody>
<?php

$i = 0;

while ($ROW1 = mysql_fetch_array($REQ1))
{
	if (($i%2) == 0) { $CLASS = 'ligne1'; } else { $CLASS = 'ligne2'; }

	if ($ROW1['code_postal'] == 0) { $CP = ''; } else { $CP = $ROW1['code_postal']; }
?>
				<tr class="<?php echo $CLASS; ?>">
					<td><?php echo $ROW1['id'] ?></td>
					<td><?php echo $ROW1['pseudo'] ?></td>
					<td><?php echo $ROW1['mail'] ?></td>
					<td><?php echo $ROW1['nom'] ?></td>
					<td><?php echo $ROW1['prenom'] ?></td>
					<td><?php echo $ROW1['adresse'] ?></td>
					<td><?php echo $CP ?></td>
					<td><?php echo $ROW1['ville'] ?></td>
					<td><?php echo $ROW1['mobile'] ?></td>
				</tr>
<?php

	$i++;
}
mysql_free_result($REQ1);

?>
			</tbody>
		</table>
	</div>

	<div id="tabsmembre-2">
		<textarea rows="20" cols="50">
<?php

$REQ2 = mysql_query('SELECT mail FROM phpl_membres ORDER BY mail ASC');

while ($ROW2 = mysql_fetch_array($REQ2))
{
	print $ROW2['mail'].';';
}
mysql_free_result($REQ2);

?>
		</textarea>
	</div>

<?php

$OPT3 = '';
$REQ3 = mysql_query('SELECT id, pseudo FROM phpl_membres ORDER BY pseudo ASC'); 

while ($ROW3 = mysql_fetch_array($REQ3)) 
{
	$OPT3.= '<option value="'.$ROW3['id'].'">'.stripslashes($ROW3['pseudo']).'</option>'."\n";
}
mysql_free_result($REQ3);


?>
	<div id="tabsmembre-3">
		<form method="post" action="">
			<table class="Large50P ui-widget ui-widget-content">
				<caption class="TxtRight">Nombre de membre : <b><?php echo $NBR1; ?></b></caption>
				<tbody>
					<tr>
						<td class="TxtCenter">
							<select name="membres_id[]" multiple="multiple" size="10" class="Large200M">
								<?php echo $OPT3; ?>
							</select>
						</td>
					</tr>
				</tbody>
				<tfoot>
					<tr class="ui-widget-footer">
						<td class="TxtCenter">
							<input type="hidden" name="page" value="membres" />
							<input type="hidden" name="action_sup" value="1" />
							<input type="submit" value="<?php echo ADMIN_RENS_8; ?>" />
						</td>
				</tfoot>
			</table>
		</form>
	</div>
</div>