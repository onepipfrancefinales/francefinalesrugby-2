<?php

if ($champ AND !$confirm == 'ok')
{

?>

<script type="text/javascript">
$(function() {
	$('a', '#GrpSupp').button();
});
</script>

<table id="GrpSupp" class="Large50P ui-widget ui-widget-content">
	<thead>
		<tr class="ui-widget-header">
			<th><?php echo ADMIN_CHAMPIONNATS_SUPP; ?></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="TxtCenter"><?php echo ADMIN_CHAMPIONNATS_SUPP1.' <b>'.affich_champ($champ); ?></b> ?</td>
		</tr>
		<tr>
			<td class="TxtCenter"><a href="?page=championnat&action=supp&champ=<?php echo $champ; ?>&confirm=ok"><?php echo ADMIN_RENS_17; ?></a> <a href="?page=championnat"><?php echo ADMIN_RENS_18; ?></a></td>
		</tr>
	</tbody>
</table>

<?php

}

?>