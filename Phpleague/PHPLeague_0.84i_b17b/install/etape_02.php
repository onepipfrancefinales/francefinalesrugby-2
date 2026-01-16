<?php

// Test Fichiers
if (file_exists('../config.php')) { $FILE_CONF = CHECK_OK; }
else							  { $FILE_CONF = CHECK_NO; }
if (file_exists('../data_connect.php')) { $FILE_DCNX = CHECK_OK; }
else									{ $FILE_DCNX = CHECK_NO; }

// Test Fonctions
if (function_exists('imagecreate')) { $FUNC_IMG = CHECK_OK; }
else								{ $FUNC_IMG = CHECK_NO; }
if (function_exists('imagecreatetruecolor')) { $FUNC_IMGTRUE = CHECK_OK; }
else										 { $FUNC_IMGTRUE = CHECK_NO; }
if (function_exists('imageantialias')) { $FUNC_IMGALIA = CHECK_OK; }
else								   { $FUNC_IMGALIA = CHECK_NO; }

?>

	<table class="Large100P ui-widget ui-widget-content">
		<thead>
			<tr class="ui-widget-header">
				<th class="Large80P TxtLeft"><?php echo utf8_encode(FICHIER); ?></th>
				<th class="Large20P TxtLeft"><?php echo utf8_encode(ETAT); ?></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>config.php</td>
				<td><?php echo utf8_encode($FILE_CONF); ?></td>
			</tr>
			<tr>
				<td>data_connect.php</td>
				<td><?php echo utf8_encode($FILE_DCNX); ?></td>
			</tr>
		</tbody>
	</table>

	<table class="Large100P ui-widget ui-widget-content">
		<thead>
			<tr class="ui-widget-header">
				<th class="Large80P TxtLeft"><?php echo utf8_encode(FONCTION); ?></th>
				<th class="Large20P TxtLeft"><?php echo utf8_encode(ETAT); ?></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>imagecreate()</td>
				<td><?php echo utf8_encode($FUNC_IMG); ?></td>
			</tr>
			<tr>
				<td>imagecreatetruecolor()</td>
				<td><?php echo utf8_encode($FUNC_IMGTRUE); ?></td>
			</tr>
			<tr>
				<td>imageantialias()</td>
				<td><?php echo utf8_encode($FUNC_IMGALIA); ?></td>
			</tr>
		</tbody>
	</table>

	<form method="post" action="" id="formEtape2">
		<div class="back FloatLeft">
			<a href="javascript:history.back();"><?php echo utf8_encode('&#060;&#060; '.PASS_BACK.' 2'); ?></a>
		</div>
		<div class="FloatRight">
			<input type="hidden" name="lang" value="<?php echo $LANG; ?>" />
			<input type="hidden" name="etape" value="etape3" />
			<input type="submit" value="<?php echo utf8_encode(PASS_NEXT.' 3 &#062;&#062;'); ?>" />
		</div>
	</form>