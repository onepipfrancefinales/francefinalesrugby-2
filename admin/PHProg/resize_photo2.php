<?php
###################################################
#          PHProg : Publication d'albums photos sur Internet
#          ---------------------------------------------------------------------------
#                     /resize_photo2.php
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
		<td class=tablo-titre><span class=texte-titre>Redimensionner photo</span></td>
	</tr>
	<tr>
		<td align="center">
		<?php
		include('fonction/liste_photos.func.php');
		$photo=liste_photos($dossier,$album);
		$i=$_GET['i'];
		
		$new_width=$_POST['new_width'];
		$new_height=$_POST['new_height'];
		
		echo "<img border=0 src=\"".rawurlencode($dossier)."/".rawurlencode($album)."/miniatures/".rawurlencode($photo[$i])."\"><br>";
		
		if (!empty($new_width) | !empty($new_width)) {
			include('fonction/resize.func.php');
			if (resize("$dossier/$album/$photo[$i]",$new_width,$new_height)) {
				echo "La photo a été redimensionnée";
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
		}
		else {echo "Vous n'avez pas entré les nouvelles dimmenssions.";}
		echo "<br><a class=lien href=\"?id=1&album=$album\">Retour</a>";
		?> 
		</td>
	</tr>
</table>