<?php
###################################################
#          PHProg : Publication d'albums photos sur Internet
#          ---------------------------------------------------------------------------
#                     /suppr_photo2.php
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
if (!test_admin()) {
	exit();
}
?>
<table cellpadding=0 cellspacing=0 class=tablo width=100%>
	<tr>
		<td class=tablo-titre><span class=texte-titre>Supprimer photo</span></td>
	</tr>
	<tr>
		<td align="center">
		<?php
		include('fonction/liste_photos.func.php');
		$photo=liste_photos($dossier,$album);
		$i=$_GET['i'];
		
		$suppr="$dossier/$album/$photo[$i]";
		if (unlink($suppr)) {
			echo "La photo \"$photo[$i]\" à été supprimée.";
		}
		else {
			echo "Erreur";
		}
		
		$suppr="$dossier/$album/miniatures/$photo[$i]";
		if (unlink($suppr)) {
			echo "<br>La miniature \"$photo[$i]\" à été supprimée.";
		}
		else {
			echo "<br>Erreur";
		}
		echo "<br><a class=lien href=\"?id=1&album=$album\">Retour</a>";
		?>
		</td>
	</tr>
</table>