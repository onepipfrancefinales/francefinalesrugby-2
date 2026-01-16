<?php
###################################################
#          PHProg : Publication d'albums photos sur Internet
#          ---------------------------------------------------------------------------
#                     /liste_dir.php
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
if ($liste_album) {

	$nb=count($liste_album);
	
	echo "<span class=\"texte\"><table cellpadding=\"0\" cellspacing=\"0\" class=\"tablo\" width=\"100%\">
				<tr>
					<td align=\"left\" class=\"tablo-titre\"><span class=\"texte-titre\">Nom</span></td>";
			if (test_admin()) {
			echo "	<td class=\"tablo-titre\" align=\"center\"><span class=\"texte-titre\"><a class=\"lien-titre\" href=?id=9>Créer un nouvel album</a></span></td>
					<td class=\"tablo-titre\" width=\"120\" align=\"center\"><span class=\"texte-titre\">Nombre de photos</span></td>
					<td class=\"tablo-titre\" width=\"80\" align=\"center\"><span class=\"texte-titre\">Supprimer</span></td>
					</tr>";
			}
			else {
			echo "	<td align=\"left\" class=\"tablo-titre\" width=\"120\"><span class=\"texte-titre\">Nombre de photos</span></td>
				</tr>";
			}
	
	for ($i=0;$i<$nb;$i++) {
		if (!function_exists ("liste_photos")) {
			include('fonction/liste_photos.func.php');
		}

		if ($photo=liste_photos($dossier,$liste_album[$i])) {
			$nb_photo[$i]=count($photo);
		}
		else {
			$nb_photo[$i]=0;
		}
		echo "<tr>";
			if (test_admin()) {
			echo "	<td colspan=2><img border=\"0\" src=\"images/trans.gif\" width=\"2\" height=\"14\" alt=\"\" /><a class=\"lien\" href=\"?id=1&amp;album=$liste_album[$i]\">$liste_album[$i]</a></td>
					<td align=\"center\"><span class=\"texte\">$nb_photo[$i]</span></td>
					<td align=\"center\"><span class=\"texte\"><a href=\"?id=7&amp;album=$liste_album[$i]\"><img border=\"0\" src=\"images/suppr.gif\" alt=\"\" title=\"Supprimer\" /></a></span></td>";
			}
			else {
			echo "	<td align=\"left\"><img border=\"0\" src=\"images/trans.gif\" width=\"2\" height=\"14\" alt=\"\" /><a class=\"lien\" href=\"?id=1&amp;album=$liste_album[$i]\">$liste_album[$i]</a></td>
					<td align=\"center\"><span class=\"texte\">$nb_photo[$i]</span></td>
				</tr>";
			}
	}

	echo "</table></span>";
}
?>
