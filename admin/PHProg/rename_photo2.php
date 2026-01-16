<?php
###################################################
#          PHProg : Publication d'albums photos sur Internet
#          ---------------------------------------------------------------------------
#                     /rename_photo2.php
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
		<td class=tablo-titre><span class=texte-titre>Renommer photo</span></td>
	</tr>
	<tr>
		<td align="center">
		<?php
		include('fonction/liste_photos.func.php');
		$photo=liste_photos($dossier,$album);
		$i=$_GET['i'];
		$new_name=$_POST['new_name'];
		if (strpos($new_name, ".")===false) {}
		else {
			$new_name=str_replace(".", "_", $new_name);
			echo "Les \".\" sont interdit dans un nom de photo. Ils ont été remplacés par des \"_\".<br>";
		}
		$nb=count($photo);
		for ($k=0;$k<$nb;$k++) {
			$photo_name[$k]=explode('.',$photo[$k]);
		}
		
		
		
		$renommer=1;
		for ($k=0;$k<$nb;$k++) {
			if($photo_name[$k][0]==$new_name) {$renommer=0;}
		}
		
		if($renommer && !empty($new_name)) {
			$name1="$dossier/$album/$photo[$i]";
			$rename="$dossier/$album/$new_name.".$photo_name[$i][1];
			if (rename("$name1","$rename")) {
				echo "<img border=0 src=\"".rawurlencode($dossier)."/".rawurlencode($album)."/miniatures/".rawurlencode($new_name).".".rawurlencode($photo_name[$i][1])."\"><br>";
				echo $new_name.".".$photo_name[$i][1]."<br>";
				echo "Photo renommée.";
			}
			else {
				echo "Erreur";
			}
	
			$name1="$dossier/$album/miniatures/$photo[$i]";
			$rename="$dossier/$album/miniatures/$new_name.".$photo_name[$i][1];
			
			if (rename("$name1","$rename")) {
				echo "<br>Miniatures renommée.";
			}
			else {
				echo "<br>Erreur";
			}
		}
		else {
			if(empty($new_name)) { echo"Vous avez oublié de saisir un nouveau nom.";}
			else {echo "Une photo \"$new_name\" éxiste déjà dans cet album.";}
		}
		
		echo "<br><a class=lien href=\"?id=1&album=$album\">Retour</a>";
		?>
		</td>
	</tr>
</table>