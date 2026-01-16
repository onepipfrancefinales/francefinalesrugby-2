<?php
###################################################
#          PHProg : Publication d'albums photos sur Internet
#          ---------------------------------------------------------------------------
#                     /add_photo2.php
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
		<td class=tablo-titre><span class=texte-titre>Ajouter une photo</span></td>
	</tr>
	<tr>
		<td align="center">
		<ul style="list-style-type:none;margin-left:0;">
		<?php 
		$uploaddir = "$dossier/$album/";
		$uploadfile = "$uploaddir". basename($_FILES['photo']['name']);
		$ok=1;
		include('fonction/liste_photos.func.php');
		$photo=liste_photos($dossier,$album);
		$nb=count($photo);
		for($i=0;$i<$nb;$i++) {
			if($photo[$i]==$_FILES['photo']['name']) {
				echo "<li>Une photo \"".$_FILES['photo']['name']."\" éxiste déjà dans cet album.</li>";
				$ok=0;
			}
		}
		
		$type=explode("/",$_FILES['photo']['type']);	
		if ($type[0]!="image") {
			echo "<li>Ce fichier n'est pas une photo.</li>";
			$ok=0;
		}
		if ($ok) {
			if (move_uploaded_file($_FILES['photo']['tmp_name'], "$uploadfile")) {
			   echo "<li>Le fichier est valide, et a été téléchargé 
					   avec succès.</li>";
			} else {
			   echo "<li>Erreur ".$_FILES['photo']['error']." :</li>";
			}
			
			include('fonction/miniature.func.php');
	
			$ok=miniature($dossier."/".$album."/".$_FILES['photo']['name'],$dim_mini);
			if ($ok) {
				echo "
				<li><img border=0 src=\"".rawurlencode($dossier)."/".rawurlencode($album)."/miniatures/".rawurlencode($_FILES['photo']['name'])."\"></li>";
				}
			else {echo "<li>Erreur lors de la création de la miniature.</li> "; }
			
			echo "<li>Nom : ".$_FILES['photo']['name']."</li>
			<li>Type : ".$_FILES['photo']['type']."</li>
			<li>Taille : ".$_FILES['photo']['size']." octets</li>";
		}
		echo "<li><a class=\"lien\" href=\"?id=12&album=$album\">Ajouter une autre photo</a></li>
		<li><a class=lien href=\"?id=1&album=$album\">Retour</a></li>";
		?>
		</ul>
		</td>
	</tr>
</table>