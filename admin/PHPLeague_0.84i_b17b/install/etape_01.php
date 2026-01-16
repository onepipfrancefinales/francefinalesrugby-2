<?php

$SELECT = ' selected="selected"';

if ($LANG == 'fr') { $SEL01 = $SELECT; } else { $SEL01 = ''; }
if ($LANG == 'en') { $SEL02 = $SELECT; } else { $SEL02 = ''; }
if ($LANG == 'de') { $SEL03 = $SELECT; } else { $SEL03 = ''; }
if ($LANG == 'it') { $SEL04 = $SELECT; } else { $SEL04 = ''; }
if ($LANG == 'nl') { $SEL05 = $SELECT; } else { $SEL05 = ''; }
if (empty($LANG))  { $SEL01 = $SELECT; } else { $SEL01 = ''; }

?>
	<form method="post" action="" id="formEtape1">
		<table class="Large100P ui-widget ui-widget-content">
			<thead>
				<tr class="ui-widget-header">
					<th colspan="3"><?php echo utf8_encode(LANG_INFO); ?></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td class="Large30P"><label for="lang"><?php echo utf8_encode(LANG_CHOIX); ?></label></td>
					<td class="Large10P">&nbsp;</td>
					<td class="Large60P">
						<select name="lang" id="lang" onchange="javascript:document.location.href=('?lang='+this.value);">
							<option value="fr"<?php echo $SEL01; ?>><?php echo utf8_encode(LANG_FR); ?></option>
							<option value="en"<?php echo $SEL02; ?>><?php echo utf8_encode(LANG_EN); ?></option>
							<option value="de"<?php echo $SEL03; ?>><?php echo utf8_encode(LANG_DE); ?></option>
							<option value="it"<?php echo $SEL04; ?>><?php echo utf8_encode(LANG_IT); ?></option>
							<option value="nl"<?php echo $SEL05; ?>><?php echo utf8_encode(LANG_NL); ?></option>
						</select>
					</td>
				</tr>
			</tbody>
		</table>

		<div class="FloatRight">
			<input type="hidden" name="etape" value="etape2" />
			<input type="submit" value="<?php echo utf8_encode(PASS_NEXT.' 2 &#062;&#062;'); ?>" />
		</div>
	</form>