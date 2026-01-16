<?php
###################################################
#          PHProg : Publication d'albums photos sur Internet
#          ---------------------------------------------------------------------------
#                     /fonction/page_url.func.php
#          --------------------------------------
#          Copyright © 2005-2006 LECOINTRE Adrien
#          --------------------------------------
#          Site Internet : http://www.phprog.com/
#          e-mail : adrien.lecointre@phprog.com
#          ---------------------------------------------------------------------------
#          Ce fichier est une partie de PHProg.
#          PHProg est un programme libre, vous pouvez le redistribuer
#          et/ou le modifier selon les termes de la Licence Publique Générale
#          GNU publiée par la Free Software Foundation version 2.
#          PHProg est distribué car potentiellement utile, mais
#          SANS AUCUNE GARANTIE, ni explicite ni implicite, y compris les
#          garanties de commercialisation ou d'adaptation dans un but spécifique.
#          Reportez-vous à la Licence Publique Générale GNU version 2 pour plus de
#          détails.
#          Licence Publique Générale GNU version 2 disponible sous /docs/licence/
###################################################
?>
<?php
function page_url($id) {
	switch ($id) {
		case 0:
			return ("liste_dir.php");
			break;
		case 1:
		   return ("afficher_photos.php");
		   break;
		case 2:
		   return ("install.php");
		   break;
		case 3:
			return ("login.php");
			break;
		case 4:
			return ("install2.php");
			break;
		case 5:
			return ("diapo.php");
			break;
		case 6:
			return ("_____________");
			break;
		case 7:
			return ("suppr_album.php");
			break;
		case 8:
			return ("suppr_album2.php");
			break;
		case 9:
			return ("nouvel_album.php");
			break;
		case 10:
			return ("nouvel_album2.php");
			break;
		case 11:
			return ("logout.php");
			break;
		case 12:
			return ("add_photo.php");
			break;
		case 13:
			return ("add_photo2.php");
			break;
		case 14:
			return ("suppr_photo.php");
			break;
		case 15:
			return ("suppr_photo2.php");
			break;
		case 16:
			return ("rename_photo.php");
			break;
		case 17:
			return ("rename_photo2.php");
			break;
		case 18:
			return ("resize_photo.php");
			break;
		case 19:
			return ("resize_photo2.php");
			break;
		case 20:
			return ("rotate_photo.php");
			break;
		case 21:
			return ("rotate_photo2.php");
			break;
		case 22:
			return ("resizeall_photo.php");
			break;
		case 23:
			return ("resizeall_photo2.php");
			break;
		case 24:
			return ("gest_photo.php");
			break;
		case 25:
			return ("gest_photo2.php");
			break;
	}
}
?>