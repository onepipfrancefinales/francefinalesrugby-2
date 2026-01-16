<?php
###################################################
#          PHProg : Publication d'albums photos sur Internet
#          ---------------------------------------------------------------------------
#                     /fonction/date_fr.func.php
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
function date_fr() {
	$date_jour=date('w');
	$date_mois=date('n');
	switch ($date_jour) {
		case 0:
			$jour= "Dimanche";
			break;
		case 1:
			$jour= "Lundi";
			break;
		case 2:
			$jour= "Mardi";
			break;
		case 3:
			$jour= "Mercredi";
			break;
		case 4:
			$jour= "Jeudi";
			break;
		case 5:
			$jour= "Vendredi";
			break;
		case 6:
			$jour= "Samedi";
			break;
		}
	switch ($date_mois) {
		case 1:
			$mois= "Janvier";
			break;
		case 2:
			$mois= "Février";
			break;
		case 3:
			$mois= "Mars";
			break;
		case 4:
			$mois= "Avril";
			break;
		case 5:
			$mois= "Mai";
			break;
		case 6:
			$mois= "Juin";
			break;
		case 7:
			$mois= "Juillet";
			break;
		case 8:
			$mois= "Août";
			break;
		case 9:
			$mois= "Septembre";
			break;
		case 10:
			$mois= "Octobre";
			break;
		case 11:
			$mois= "Novembre";
			break;
		case 12:
			$mois= "Décembre";
			break;
		}
	return ($jour." ".date('d')." ".$mois." ".date('Y'));
	}
?>