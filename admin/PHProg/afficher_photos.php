<?php
###################################################
#          PHProg : Publication d'albums photos sur Internet
#          ---------------------------------------------------------------------------
#                     /afficher_photos.php
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
<div align="center">
<?php
echo "<table cellpadding=0 cellspacing=0 class=tablo width=100%>
<tr>
	<td class=tablo-titre><span class=texte-titre>$album</span></td>";
if (test_admin()) {
	echo " 
	<td class=tablo-titre><span class=texte-titre><a class=\"lien-titre\" href=\"?id=12&album=$album\">Ajouter une photo</a></span></td>
</tr><tr height=\"100%\"><td colspan=2>";
}
else {
	echo "
</tr><tr height=\"100%\"><td>";
}


include('fonction/liste_photos.func.php');

if ($photo=liste_photos($dossier,$album)) {
	
	$nb=count($photo);
	
	//mini exist
	$mini_exist=1;
	
	for ($k=0;$k<$nb;$k++) {
		if (!file_exists($dossier."/".$album."/miniatures/".$photo[$k])) {
			$mini_exist=0;
			break;
		}
	}
	
	//afficher les photos
	if ($mini_exist) {	
		
		for ($i=0;$i<$nb;$i++) {
			list($photo_width, $photo_height) = getimagesize("$dossier/$album/$photo[$i]");
			$photo_size=round(filesize("$dossier/$album/$photo[$i]")/1000)." ko";
			$photo_name=explode('.',$photo[$i]);
			
			//<a href=# onClick=\"javascript:window.open('photo_cadre.php?album=$album&i=$i&nb=$nb','','chanelmode,scrollbars');return(false)\"><img border=0 src=\"".rawurlencode($dossier)."/".rawurlencode($album)."/miniatures/".rawurlencode($photo[$i])."\"></a>
			if (test_admin()) {$dim_height=$dim_mini+40;}
			else {$dim_height=$dim_mini+20;}
			echo "
			<div style=\"float:left;margin-top:10px;margin-left:5;margin-right:5;width:".$dim_mini."px;height:".$dim_height."px\" class=\"texte-photo\">
				<div align=center>
				<a href=\"?id=5&i=".$i."&album=".$album."\"><img title=\"$photo_name[0]\n$photo_width x $photo_height\n$photo_size\" border=0 src=\"".rawurlencode($dossier)."/".rawurlencode($album)."/miniatures/".rawurlencode($photo[$i])."\"></a>
				</div>
				<div align=center>
				$photo_name[0]
				</div>";
				if (test_admin()) {
					echo "
				<div align=center style=\"margin-top:5px;\">
				<a href=\"?id=16&album=$album&i=$i\"><img border=0 src=\"images/rename.gif\" title=\"Renommer\"></a> <a href=\"?id=18&album=$album&i=$i\"><img border=0 src=\"images/resize.gif\" title=\"Redimensionner\"></a> ";
					if (function_exists('imagerotate')) {
						echo "<a href=\"?id=20&album=$album&i=$i\"><img border=0 src=\"images/rotate.png\" title=\"Retourner\"></a> ";
						}
					echo "<a href=\"?id=14&album=$album&i=$i\"><img border=0 src=\"images/suppr.gif\" title=\"Supprimer\"></a>
					</div>";
				}
			echo "</div>";
		}
	}
	else {
		echo text_mini_non;
		include('miniature.php');
	}
}
else {
	echo "<div align=center>".text_album_vide."</div>";
}
echo "</td></tr></table>";
?>
</div>