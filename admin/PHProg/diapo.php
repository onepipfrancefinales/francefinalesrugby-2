<?php
###################################################
#          PHProg : Publication d'albums photos sur Internet
#          ---------------------------------------------------------------------------
#                     /diapo.php
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
if (isset($_GET['i']) and isset($_GET['album'])) {
	$i=$_GET['i'];
	$album=$_GET['album'];
	
	if (!function_exists ("liste_photos")) {
		include('fonction/liste_photos.func.php');
		}
	
	if ($photo=liste_photos($dossier,$album)) {
		
		$nb=count($photo);

	}

}
?>
<table cellpadding=0 cellspacing=0 class=tablo width=100%>
	<tr>
		<td class="tablo-titre"><span class="texte-titre"><?php echo $photo[$i]; ?></span></td>
	</tr>
	<tr style="height:100%;">
		<td align="center">
		<?php
		list($photo_width, $photo_height) = getimagesize("$dossier/$album/$photo[$i]");
		echo "<script>document.write(\"<img src=".rawurlencode($dossier)."/".rawurlencode($album)."/".rawurlencode($photo[$i]);
		if ($photo_width<=$photo_height) {echo " style='height:\"+(screen.height-320)+\";'>\")</script>";}
		else {echo " style='width:\"+(screen.width-400)+\";'>\")</script>";}
		?>
		</td>
	</tr>
	<tr>
		<td align="center">
		<table cellspacing="0" cellpadding="1" class="tablo" width="300">
			<tr>
				<td align="left" class="tablo-titre"><a class="lien-titre" href="?id=5&album=<?php echo $album; ?>&i=<?php if ($i>0) {echo $i-1;} else {echo $i;} ?>"><?php echo text_précédente; ?></a></td>
				<td align="center" width="100%"><span class=texte>
				<?php
				$ph=$i+1;
				echo "Photo ".$ph." / ".$nb;
				?>
				</span></td>
				<td align="right" class="tablo-titre"><a class="lien-titre" href="?id=5&album=<?php echo $album; ?>&i=<?php if ($i<$nb-1) {echo $i+1;} else {echo $i;} ?>"><?php echo text_suivante; ?></a></td>
			</tr>
		</table>
		</td>
	</tr>
</table>