<?php
###################################################
#          PHProg : Publication d'albums photos sur Internet
#          ---------------------------------------------------------------------------
#                     /liste_albums.php
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
	
	echo "<table cellpadding=0 cellspacing=0 class=\"tablo\" width=199>
			<tr>
				<td colspan=2 class=\"tablo-titre\">
					<a href=\"?id=0\" class=\"lien-titre\">Liste des albums</a></td>
			</tr>";
	
	for($i=0;$i<$nb;$i++) {
		if ($i==$nb-1) {
			echo"<tr><td><img src=\"images/joinbottom.gif\" alt=\"\" />";
			}
		else {
			echo"<tr><td><img src=\"images/join.gif\" alt=\"\" />";
			}
		if (isset($album) and $album==$liste_album[$i]) {
			echo"<img src=\"images/dossier_open.gif\" alt=\"\" /></td>";
			}
		else {
			echo"<img src=\"images/dossier.gif\" alt=\"\" /></td>";
			}
		echo "<td width=100%><img width=3 src=\"images/trans.gif\" alt=\"\" /><a class=\"lien\" href=\"?id=1&album=$liste_album[$i]\">$liste_album[$i]</a></td></tr>";
		}
	echo "<tr style=\"height:100%;\"><td colspan=2></td></tr></table>";
	}
else {
	echo text_liste_album_vide;
	}
?>
