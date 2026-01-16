<?php

require('../config.php');
require('../function_admin.php');

$CHOIX = isset($_GET['chx']) ? $_GET['chx'] : NULL;

?>
<script type="text/javascript" src="./scripts/jquery-upload.js"></script>
<script type="text/javascript">
	$(document).ready(function() {

	$('span', '.Upload').button({
		icons: {
			primary: 'ui-icon-image'
		},
		text: true
	});
});
</script>
<?php

$URL_UPLOAD  = 'gest_photos_upload_valide.php';

switch($CHOIX)
{
	// Arbitres
	case '1';
		$DIV_BOUTTON  = 'DivArbitres';
		$DIV_GALLERIE = 'GalArbitres';
		$DOSSIER      = '../'.REP_IMG.'arbitres';

		UploadFiles($DIV_BOUTTON, $DIV_GALLERIE, $URL_UPLOAD, $DOSSIER, 'arbitres');

		echo '	<div id="'.$DIV_BOUTTON.'" class="Upload">
		<span>Télécharger une image<span>
		<span class="Etat"></span>
	</div>
	<div style="clear: both;"></div>

	<div class="UploadAct Large45P">
		<ul class="files_list"></ul>
		<div style="clear: both;"></div>
	</div>
	<div id="'.$DIV_GALLERIE.'" class="Gallerie">
		<span class="loader"><img src="images/loader_12.gif" /> Chargement en cours...</span>
	</div>
	<div style="clear: both;"></div>'."\n";

	break;

	// Joueurs
	case '2';
		$DIV_BOUTTON  = 'DivJoueurs';
		$DIV_GALLERIE = 'GalJoueurs';
		$DOSSIER      = '../'.REP_IMG.'joueurs';

		UploadFiles($DIV_BOUTTON, $DIV_GALLERIE, $URL_UPLOAD, $DOSSIER, 'joueurs');

		echo '	<div id="'.$DIV_BOUTTON.'" class="Upload">
		<span>Télécharger une image<span>
		<span class="Etat"></span>
	</div>
	<div style="clear: both;"></div>

	<div class="UploadAct Large45P">
		<ul class="files_list"></ul>
		<div style="clear: both;"></div>
	</div>
	<div id="'.$DIV_GALLERIE.'" class="Gallerie">
		<span class="loader"><img src="images/loader_12.gif" /> Chargement en cours...</span>
	</div>
	<div style="clear: both;"></div>'."\n";

	break;

	// INFO_MODULES
	case '3';
	break;
	// INFO_ENVIRONMENT
	case '4';
	break;
	// INFO_VARIABLES
	case '5';
	break;
	//default:  'Pas de valeur'; break;
}

?>