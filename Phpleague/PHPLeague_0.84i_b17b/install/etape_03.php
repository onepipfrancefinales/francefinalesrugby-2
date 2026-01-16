<?php

$REP1 = explode('/', $_SERVER['SCRIPT_NAME']);
$REP2 = '';

for ($i=1; $i<count($REP1) - 2; $i++)
{
	if ($i == 1)
	{
		$REP2 = $REP2.$REP1[$i];
	}
	else
	{
		$REP2 = $REP2.'/'.$REP1[$i];
	}
}

?>

	<script type="text/javascript">
		$(document).ready(function() {
			$('#aide01').hide();
			$('#aide02').hide();
			$('#aide03').hide();
			$('#aide04').hide();
			$('#action2').change(function(){
				if($(this).val()=='majv08x' || $(this).val()=='majv083')
				{
					$('#aide01').show();
					$('#aide02').show();
					$('#aide03').show();
					$('#aide04').show();
					$('#dialog01').dialog({ autoOpen: false, show: 'blind', hide: 'blind' });
					$('#aide01').click(function() { $('#dialog01').dialog('open'); return false; });
					$('#dialog02').dialog({ autoOpen: false, show: 'blind', hide: 'blind' });
					$('#aide02').click(function() { $('#dialog02').dialog('open'); return false; });
					$('#dialog03').dialog({ autoOpen: false, show: 'blind', hide: 'blind' });
					$('#aide03').click(function() { $('#dialog03').dialog('open'); return false; });
					$('#dialog04').dialog({ autoOpen: false, show: 'blind', hide: 'blind' });
					$('#aide04').click(function() { $('#dialog04').dialog('open'); return false; });
				}
				else
				{
					$('#aide01').hide();
					$('#aide02').hide();
					$('#aide03').hide();
					$('#aide04').hide();
				}
			});
		});
	</script>

	<div id="Info01" class="ui-state-error ui-corner-all" style="margin: 0 0 10px 0; padding: 5px;"> 
		<span class="ui-icon ui-icon-alert" style="float: left; margin-right: .3em;"></span>
		<span style="font-size: 0.8em"><?php echo utf8_encode(INFO); ?></span>
	</div>

	<form method="post" action="" id="formEtape3">
		<table class="Large100P ui-widget ui-widget-content">
			<thead>
				<tr class="ui-widget-header">
					<th colspan="3" class="TxtLeft"><?php echo utf8_encode(INSTALL); ?></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td class="Large30P"><label for="action2"><?php echo utf8_encode(TYPE_INST); ?></label></td>
					<td class="Large10P">&nbsp;</td>
					<td class="Large60P">
						<select size="1" name="action2" id="action2">
							<option value="install" selected="selected"><?php echo utf8_encode(TYPE_INST_NORMALE); ?></option>
							<option value="majv08x"><?php echo utf8_encode(TYPE_INST_MAJ); ?> 0.80 &amp; 0.81</option>
							<option value="majv071"><?php echo utf8_encode(TYPE_INST_MAJ); ?> 0.71</option>
						</select>
					</td>
				</tr>
			</tbody>
		</table>

		<table class="Large100P ui-widget ui-widget-content">
			<thead>
				<tr class="ui-widget-header">
					<th colspan="3" class="TxtLeft"><?php echo utf8_encode(CNX_BDD); ?></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td class="Large30P"><label for="hostname"><?php echo utf8_encode(HOST_NAME); ?></label></td>
					<td class="Large10P">&nbsp;</td>
					<td class="Large60P"><input type="text" name="hostname" id="hostname" value="<?php echo $hostname; ?>" class="text ui-widget-content ui-corner-all Large98P" /></td>
				</tr>
				<tr>
					<td><label for="database"><?php echo utf8_encode(DATABASE); ?></label></td>
					<td>&nbsp;</td>
					<td><input type="text" name="database" id="database" value="<?php echo $database; ?>" class="text ui-widget-content ui-corner-all Large98P" /></td>
				</tr>
				<tr>
					<td><label for="login"><?php echo utf8_encode(USER); ?></label></td>
					<td>&nbsp;</td>
					<td><input type="text" name="login" id="login" value="<?php echo $login; ?>" class="text ui-widget-content ui-corner-all Large98P" /></td>
				</tr>
				<tr>
					<td><label for="password"><?php echo utf8_encode(PASSWORD); ?></label></td>
					<td>&nbsp;</td>
					<td><input type="password" name="password" id="password" value="<?php echo $password; ?>" class="text ui-widget-content ui-corner-all Large98P" /></td>
				</tr>
			</tbody>
		</table>

		<table class="Large100P ui-widget ui-widget-content">
			<thead>
				<tr class="ui-widget-header">
					<th colspan="3" class="TxtLeft"><?php echo utf8_encode(SITE_INFO); ?></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td class="Large30P"><label for="nom_site"><?php echo utf8_encode(TITRE_SITE); ?></label></td>
					<td class="Large10P TxtRight"><button id="aide01" class="aide">?</button></td>
					<td class="Large60P"><input type="text" name="nom_site" id="nom_site" maxlength="60" value="<?php echo $nom_site; ?>" class="text ui-widget-content ui-corner-all Large98P" /></td>
				</tr>
				<tr>
					<td><label for="url_site"><?php echo utf8_encode(URL_SITE); ?></label></td>
					<td>&nbsp;</td>
					<td><input type="text" name="url_site" id="url_site" value="http://<?php echo $_SERVER['HTTP_HOST']; ?>" maxlength="120" class="text ui-widget-content ui-corner-all Large98P" /></td>
				</tr>
				<tr>
					<td><label for="repertoire_script"><?php echo utf8_encode(REP_SCRIPT); ?></label></td>
					<td>&nbsp;</td>
					<td><input type="text" name="repertoire_script" id="repertoire_script" value="http://<?php echo $_SERVER['HTTP_HOST'].'/'.$REP2.'/'; ?>" maxlength="120" class="text ui-widget-content ui-corner-all Large98P" /></td>
				</tr>
			</tbody>
		</table>

		<table class="Large100P ui-widget ui-widget-content">
			<thead>
				<tr class="ui-widget-header">
					<th colspan="3" class="TxtLeft"><?php echo utf8_encode(ADMIN_INFO); ?></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td class="Large30P"><label for="pseudo"><?php echo utf8_encode(USER); ?></label></td>
					<td class="Large10P TxtRight"><button id="aide02" class="aide">?</button></td>
					<td class="Large60P"><input type="text" name="pseudo" id="pseudo" maxlength="50" value="<?php echo $pseudo; ?>" class="text ui-widget-content ui-corner-all Large98P" /></td>
				</tr>
				<tr>
					<td><label for="mot_de_pass"><?php echo utf8_encode(PASSWORD); ?></label></td>
					<td class="TxtRight"><button id="aide03" class="aide">?</button></td>
					<td><input type="password" name="mot_de_pass" id="mot_de_pass" maxlength="50" value="<?php echo $mot_de_pass; ?>" class="text ui-widget-content ui-corner-all Large98P" /></td>
				</tr>
				<tr>
					<td><label for="mail"><?php echo utf8_encode(EMAIL); ?></label></td>
					<td class="TxtRight"><button id="aide04" class="aide">?</button></td>
					<td><input type="text" name="mail" id="mail" maxlength="75" value="<?php echo $mail; ?>" class="text ui-widget-content ui-corner-all Large98P" /></td>
				</tr>
			</tbody>
		</table>

		<div class="back FloatLeft">
			<a href="javascript:history.back();"><?php echo utf8_encode('&#060;&#060; '.PASS_BACK.' 3'); ?></a>
		</div>
		<div class="FloatRight">
			<input type="hidden" name="lang" value="<?php echo $LANG; ?>" />
			<input type="hidden" name="etape" value="etape4" />
			<input type="submit" value="<?php echo utf8_encode(PASS_NEXT.' 4 &#062;&#062;'); ?>" />			
		</div>

		<div id="dialog01" title="<?php echo utf8_encode(TITRE_SITE); ?>" style="display: none;">
			<p><?php echo utf8_encode(TITRE_SITE_INFO); ?></p>
		</div>

		<div id="dialog02" title="<?php echo utf8_encode(USER); ?>" style="display: none;">
			<p><?php echo utf8_encode(ADMIN_INFO_USER); ?></p>
		</div>

		<div id="dialog03" title="<?php echo utf8_encode(PASSWORD); ?>" style="display: none;">
			<p><?php echo utf8_encode(ADMIN_INFO_PASSWORD); ?></p>
		</div>

		<div id="dialog04" title="<?php echo utf8_encode(EMAIL); ?>" style="display: none;">
			<p><?php echo utf8_encode(EMAIL_INFO); ?></p>
		</div>
	</form>