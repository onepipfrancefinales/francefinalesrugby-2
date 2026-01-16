<?php

// Menu
$CALENDRIER = isset($_REQUEST['calendrier']) ? $_REQUEST['calendrier'] : NULL;
$CLASSEMENT = isset($_REQUEST['classement']) ? $_REQUEST['classement'] : NULL;
$CLUB       = isset($_REQUEST['club'])       ? $_REQUEST['club']       : NULL;
$BUTEUR     = isset($_REQUEST['buteur'])     ? $_REQUEST['buteur']     : NULL;
$CJ         = isset($_REQUEST['cj'])         ? $_REQUEST['cj']         : NULL;
$CR         = isset($_REQUEST['cr'])         ? $_REQUEST['cr']         : NULL;
$STAT       = isset($_REQUEST['stat'])       ? $_REQUEST['stat']       : NULL;

// Calendrier
$EXP_PDF = isset($_REQUEST['exppdf']) ? $_REQUEST['exppdf'] : NULL;
$EXP_XLS = isset($_REQUEST['expxsl']) ? $_REQUEST['expxsl'] : NULL;

// Classement
$AFF_CLUB_LOGO = isset($_REQUEST['clublogo']) ? $_REQUEST['clublogo'] : NULL;

?>

<script type="text/javascript">
	$(function() {
		$('#tabsconsult').tabs({
			selected: parseInt($.cookie('phpl_tabconsult')) || 0,
			show: function(e, ui) {
				var tab_id = ui.index; $.cookie('phpl_tabconsult', tab_id, { expires: 1 });
			}
		});
	});
</script>

<h2><?php echo utf8_encode(MENU_CONSULT); ?></h2>

<?php echo InfoReqSql('Info', 0, 'error', 'alert', 'En cours de développement. Aucune requêtes MySQL.'); ?>

<div id="tabsconsult">
	<ul>
		<li><a href="#tabsconsult-1">Affichage</a></li>
		<li><a href="#tabsconsult-2">Calendrier</a></li>
		<li><a href="#tabsconsult-3">Classement</a></li>
		<li><a href="#tabsconsult-4">Club</a></li>
		<li><a href="#tabsconsult-5">Buteurs</a></li>
	</ul>

	<div id="tabsconsult-1">
		<form method="post" action="" id="formMenu">
			<table class="Large50P">
				<tbody>
					<tr class="ligne1">
						<td><label>Calendrier</label></td>
						<td>
							<div class="radio">
								<input type="radio" name="calendrier" id="calnon" value="0" /><label for="calnon"><?php echo ADMIN_RENS_18; ?></label>
								<input type="radio" name="calendrier" id="caloui" value="1" checked="checked" /><label for="caloui"><?php echo ADMIN_RENS_17; ?></label>
							</div>
						</td>
					</tr>
					<tr class="ligne2">
						<td><label>Classement</label></td>
						<td>
							<div class="radio">
								<input type="radio" name="classement" id="clanon" value="0" /><label for="clanon"><?php echo ADMIN_RENS_18; ?></label>
								<input type="radio" name="classement" id="claoui" value="1" checked="checked" /><label for="claoui"><?php echo ADMIN_RENS_17; ?></label>
							</div>
						</td>
					</tr>
					<tr class="ligne1">
						<td><label>Clubs</label></td>
						<td>
							<div class="radio">
								<input type="radio" name="club" id="clunon" value="0" /><label for="clunon"><?php echo ADMIN_RENS_18; ?></label>
								<input type="radio" name="club" id="cluoui" value="1" checked="checked" /><label for="cluoui"><?php echo ADMIN_RENS_17; ?></label>
							</div>
						</td>
					</tr>
					<tr class="ligne2">
						<td><label>Buteurs</label></td>
						<td>
							<div class="radio">
								<input type="radio" name="buteur" id="butnon" value="0" /><label for="butnon"><?php echo ADMIN_RENS_18; ?></label>
								<input type="radio" name="buteur" id="butoui" value="1" checked="checked" /><label for="butoui"><?php echo ADMIN_RENS_17; ?></label>
							</div>
						</td>
					</tr>
					<tr class="ligne1">
						<td><label>Cartons jaunes</label></td>
						<td>
							<div class="radio">
								<input type="radio" name="cj" id="cjnon" value="0" /><label for="cjnon"><?php echo ADMIN_RENS_18; ?></label>
								<input type="radio" name="cj" id="cjoui" value="1" checked="checked" /><label for="cjoui"><?php echo ADMIN_RENS_17; ?></label>
							</div>
						</td>
					</tr>
					<tr class="ligne2">
						<td><label>Cartons rouges</label></td>
						<td>
							<div class="radio">
								<input type="radio" name="cr" id="crnon" value="0" /><label for="crnon"><?php echo ADMIN_RENS_18; ?></label>
								<input type="radio" name="cr" id="croui" value="1" checked="checked" /><label for="croui"><?php echo ADMIN_RENS_17; ?></label>
							</div>
						</td>
					</tr>
					<tr class="ligne1">
						<td><label>Statistiques</label></td>
						<td>
							<div class="radio">
								<input type="radio" name="stat" id="statnon" value="0" /><label for="statnon"><?php echo ADMIN_RENS_18; ?></label>
								<input type="radio" name="stat" id="statoui" value="1" checked="checked" /><label for="statoui"><?php echo ADMIN_RENS_17; ?></label>
							</div>
						</td>
					</tr>
				</tbody>
				<tfoot>
					<tr class="ui-widget-footer">
						<td>&nbsp;</td>
						<td><input type="submit" value="<?php echo ENVOI; ?>" /></td>
					</tr>
				</tfoot>
			</table>
		</form>
	</div>

	<div id="tabsconsult-2">
		<form method="post" action="" id="formCalendrier">
			<table class="Large50P">
				<tbody>
					<tr class="ligne1">
						<td><label>Exportation PDF</label></td>
						<td>
							<div class="radio">
								<input type="radio" name="exppdf" id="pdfnon" value="0" /><label for="pdfnon"><?php echo ADMIN_RENS_18; ?></label>
								<input type="radio" name="exppdf" id="pdfoui" value="1" checked="checked" /><label for="pdfoui"><?php echo ADMIN_RENS_17; ?></label>
							</div>
						</td>
					</tr>
					<tr class="ligne2">
						<td><label>Exportation XSL</label></td>
						<td>
							<div class="radio">
								<input type="radio" name="expxsl" id="xslnon" value="0" /><label for="xslnon"><?php echo ADMIN_RENS_18; ?></label>
								<input type="radio" name="expxsl" id="xsloui" value="1" checked="checked" /><label for="xsloui"><?php echo ADMIN_RENS_17; ?></label>
							</div>
						</td>
					</tr>
				</tbody>
				<tfoot>
					<tr class="ui-widget-footer">
						<td>&nbsp;</td>
						<td><input type="submit" value="<?php echo ENVOI; ?>" /></td>
					</tr>
				</tfoot>
			</table>
		</form>
	</div>

	<div id="tabsconsult-3">
		<form method="post" action="" id="formClassement">
			<table class="Large50P">
				<tbody>
					<tr class="ligne1">
						<td><label>Afficher logo clubs</label></td>
						<td>
							<div class="radio">
								<input type="radio" name="clublogoc" id="logocnon" value="0" /><label for="logocnon"><?php echo ADMIN_RENS_18; ?></label>
								<input type="radio" name="clublogoc" id="logocoui" value="1" checked="checked" /><label for="logocoui"><?php echo ADMIN_RENS_17; ?></label>
							</div>
						</td>
					</tr>
				</tbody>
				<tfoot>
					<tr class="ui-widget-footer">
						<td>&nbsp;</td>
						<td><input type="submit" value="<?php echo ENVOI; ?>" /></td>
					</tr>
				</tfoot>
			</table>
		</form>
	</div>

	<div id="tabsconsult-4">
		<form method="post" action="" id="formClub">
			<table class="Large50P">
				<tbody>
					<tr class="ligne1">
						<td><label>Afficher le graphique</label></td>
						<td>
							<div class="radio">
								<input type="radio" name="clubgraph" id="graphnon" value="0" /><label for="graphnon"><?php echo ADMIN_RENS_18; ?></label>
								<input type="radio" name="clubgraph" id="graphoui" value="1" checked="checked" /><label for="graphoui"><?php echo ADMIN_RENS_17; ?></label>
							</div>
						</td>
					</tr>
				</tbody>
				<tfoot>
					<tr class="ui-widget-footer">
						<td>&nbsp;</td>
						<td><input type="submit" value="<?php echo ENVOI; ?>" /></td>
					</tr>
				</tfoot>
			</table>
		</form>
	</div>

	<div id="tabsconsult-5">
		<form method="post" action="" id="formButeur">
			<table class="Large50P">
				<tbody>
					<tr class="ligne1">
						<td><label>Afficher logo clubs</label></td>
						<td>
							<div class="radio">
								<input type="radio" name="clublogob" id="logobnon" value="0" /><label for="logobnon"><?php echo ADMIN_RENS_18; ?></label>
								<input type="radio" name="clublogob" id="logoboui" value="1" checked="checked" /><label for="logoboui"><?php echo ADMIN_RENS_17; ?></label>
							</div>
						</td>
					</tr>
				</tbody>
				<tfoot>
					<tr class="ui-widget-footer">
						<td>&nbsp;</td>
						<td><input type="submit" value="<?php echo ENVOI; ?>" /></td>
					</tr>
				</tfoot>
			</table>
		</form>
	</div>
</div>