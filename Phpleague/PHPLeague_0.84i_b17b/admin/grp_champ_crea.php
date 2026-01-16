<script type="text/javascript">
$(function() {
	$('#formGrpCrea').validate();
});
</script>

<form method="post" action="" id="formGrpCrea">
	<table class="Large50P ui-widget ui-widget-content">
		<thead>
			<tr class="ui-widget-header">
				<th colspan="3"><?php echo ADMIN_CHAMP_CREER_3; ?></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><?php echo ADMIN_GR_CHAMP_CREER_1; ?></td>
				<td class="TxtCenter"><input type="texte" name="nom_group" size="30" maxlength="50" class="required" /></td>
				<td class="TxtRight">
					<input type="hidden" name="page" value="groupes_championnats" />
					<input type="hidden" name="action" value="creer" />
					<input type="hidden" name="action2" value="creer" />
					<input type="submit" value="<?php echo ADMIN_CHAMP_CREER_3; ?>" />
				</td>
			</tr>
		</tbody>
	</table>
</form>