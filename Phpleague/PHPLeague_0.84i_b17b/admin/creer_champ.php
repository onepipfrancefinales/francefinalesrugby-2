<?php

$NBR_SAISON   = NbrRecord('id', 'phpl_saisons');
$NBR_DIVISION = NbrRecord('id', 'phpl_divisions');

?>
<script type="text/javascript">
	$(function() {
		$('#tabscrchamp').tabs({
			selected: parseInt($.cookie('phpl_tabscrchamp')) || 0,
			show: function(e, ui) {
				var tab_id = ui.index; $.cookie('phpl_tabscrchamp', tab_id, { expires: 1 });
			}
		});

		$('#dialog01').dialog({ autoOpen: false, show: 'blind', hide: 'blind' });
		$('#aide01').click(function() { $('#dialog01').dialog('open'); return false; });
		$('#dialog02').dialog({ autoOpen: false, show: 'blind', hide: 'blind' });
		$('#aide02').click(function() { $('#dialog02').dialog('open'); return false; });
		$('#dialog03').dialog({ autoOpen: false, show: 'blind', hide: 'blind' });
		$('#aide03').click(function() { $('#dialog03').dialog('open'); return false; });
		$('#dialog04').dialog({ autoOpen: false, show: 'blind', hide: 'blind' });
		$('#aide04').click(function() { $('#dialog04').dialog('open'); return false; });
		$('#dialog05').dialog({ autoOpen: false, show: 'blind', hide: 'blind' });
		$('#aide05').click(function() { $('#dialog05').dialog('open'); return false; });
	});
</script>

<div id="tabscrchamp">
	<ul>
		<li><a href="#tabscrchamp-1"><?php echo ADMIN_CHAMP_CREER_3; ?></a></li>
		<?php if ($NBR_SAISON > 0 AND $NBR_DIVISION > 0) { ?>
		<li><a href="#tabscrchamp-2"><?php echo ADMIN_CHAMPIONNATS_CREA2; ?></a></li>
		<?php } if ($NBR_SAISON > 0 OR $NBR_DIVISION > 0) { ?>
		<li><a href="#tabscrchamp-3"><?php echo ADMIN_RENS_8; ?></a></li>
		<?php } ?>
	</ul>

	<div id="tabscrchamp-1">
		<form method="post" action="">
			<table class="Large50P">
				<tbody>
					<tr>
						<td class="Large33P"><label><?php echo ADMIN_CHAMP_CREER_4; ?></label></td>
						<td class="Large33P"><input type="texte" name="saison" size="4" maxlength="4" /></td>
						<td class="Large33P TxtRight">
							<input type="hidden" name="page" value="championnat" />
							<input type="hidden" name="action" value="creer" />
							<input type="hidden" name="action2" value="creer" />
							<input type="submit" value="<?php echo ADMIN_CHAMP_CREER_3; ?>" />
							<button id="aide01" class="aide">Aide</button>
						</td>
					</tr>
				</tbody>
			</table>
		</form>

		<div id="dialog01" title="Création de la saison">
			<p>Entrer la 1ère année de la saison.</p>
		</div>

		<form method="post" action="">
			<table class="Large50P">
				<tbody>
					<tr>
						<td class="Large33P"><label><?php echo ADMIN_CHAMP_CREER_2; ?></label></td>
						<td class="Large33P"><input type="texte" name="division" /></td>
						<td class="Large33P TxtRight">
							<input type="hidden" name="page" value="championnat" />
							<input type="hidden" name="action" value="creer" />
							<input type="hidden" name="action2" value="creer" />
							<input type="submit" value="<?php echo ADMIN_CHAMP_CREER_3; ?>" />
							<button id="aide02" class="aide">Aide</button>
						</td>
					</tr>
				</tbody>
			</table>
		</form>

		<div id="dialog02" title="Création de la division">
			<p>Entrer le nom de la division.</p>
		</div>
	</div>

	<?php if ($NBR_SAISON > 0 AND $NBR_DIVISION > 0) { ?>
	<div id="tabscrchamp-2">
		<form method="post" action="">
			<table class="Large50P">
				<tbody>
					<tr>
						<td class="Large33P"><label><?php echo ADMIN_JOURNEES_MSG3.'</label> '; saisons_menu(); ?></td>
						<td class="Large33P"><label><?php echo ADMIN_CHAMP_CREER_2.'</label> '; divisions_menu(); ?></td>
						<td class="Large33P TxtRight">
							<input type="hidden" name="page" value="championnat" />
							<input type="hidden" name="action" value="creer" />
							<input type="hidden" name="action3" value="creer" />
							<input type="submit" value="<?php echo ADMIN_CHAMP_CREER_3; ?>" />
							<button id="aide03" class="aide">Aide</button>
						</td>
					</tr>
				</tbody>
			</table>
		</form>

		<div id="dialog03" title="Création du championnat">
			<p>Sélectionner une saison et une division.</p>
			<p><b>/!\</b> Pour créer un championnat il faut d'abord créer une saison et une division.</p>
		</div>
	</div>
	<?php } ?>

	<?php if ($NBR_SAISON > 0 OR $NBR_DIVISION > 0) { ?>
	<div id="tabscrchamp-3">
		<?php if ($NBR_SAISON > 0) { ?>
		<form method="post" action="">
			<table class="Large50P">
				<tbody>
					<tr>
						<td class="Large33P"><label><?php echo ADMIN_JOURNEES_MSG3; ?></label></td>
						<td class="Large33P"><?php saisons_menu(); ?></td>
						<td class="Large33P TxtRight">
							<input type="hidden" name="page" value="championnat" />
							<input type="hidden" name="action" value="creer" />
							<input type="hidden" name="action2" value="supp" />
							<input type="submit" value="<?php echo ADMIN_RENS_8; ?>" />
							<button id="aide04" class="aide">Aide</button>
						</td>
					</tr>
				</tbody>
			</table>
		</form>

		<div id="dialog04" title="Suppression d'une saison">
			<p>Si vous supprimez une saison utilisée dans un championnat, ce dernier ne fonctionnera plus ! Soyez donc très vigilant lors de la suppression.</p>
		</div>
		<?php } ?>

		<?php if ($NBR_DIVISION > 0) { ?>
		<form method="post" action="">
			<table class="Large50P">
				<tbody>
					<tr>
						<td class="Large33P"><label><?php echo ADMIN_CHAMP_CREER_2; ?></label></td>
						<td class="Large33P"><?php divisions_menu(); ?></td>
						<td class="Large33P TxtRight">
							<input type="hidden" name="page" value="championnat" />
							<input type="hidden" name="action" value="creer" />
							<input type="hidden" name="action2" value="supp" />
							<input type="submit" value="<?php echo ADMIN_RENS_8; ?>" />
							<button id="aide05" class="aide">Aide</button>
						</td>
					</tr>
				</tbody>
			</table>
		</form>

		<div id="dialog05" title="Suppression d'un division">
			<p>Si vous supprimez une division utilisée dans un championnat, ce dernier ne fonctionnera plus ! Soyez donc très vigilant lors de la suppression.</p>
		</div>
		<?php } ?>
	</div>
	<?php } ?>
</div>