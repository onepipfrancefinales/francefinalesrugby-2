<?php

if ($gr_champ AND !$confirm == 'ok')
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
			<th><?php echo ADMIN_GR_CHAMPIONNATS_SUPP; ?></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="TxtCenter"><?php echo ADMIN_GR_CHAMPIONNATS_SUPP1.' <b>'.affich_gr_champ($gr_champ); ?></b> ?</td>
		</tr>
		<tr>
			<td class="TxtCenter"><a href="?page=groupes_championnats&action=supp&gr_champ=<?php print $gr_champ; ?>&confirm=ok"><?php echo ADMIN_RENS_17; ?></a> <a href="?page=groupes_championnats"><?php echo ADMIN_RENS_18; ?></a></td>
		</tr>
	</tbody>
</table>
<?php

}

?>