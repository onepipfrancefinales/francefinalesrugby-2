<?php
###################################################
#          PHProg : Publication d'albums photos sur Internet
#          ---------------------------------------------------------------------------
#                     /fonction/miniature.func.php
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
function miniature($file_url,$max_dim) {
	
	//dossier
	$decoup=explode('/',$file_url);
	$dossier_dest=$decoup[0]."/".$decoup[1]."/miniatures";
	$destination=$dossier_dest."/".$decoup[2];
	//créer dossier
	if (!file_exists($dossier_dest)) {
		mkdir($dossier_dest);
		}
	
	//type
	list($width, $height, $type) = getimagesize($file_url);
	
	if ($type==1) {
		#header ("Content-type: image/gif");
		$img=imagecreatefromgif($file_url);
		}
	
	if ($type==2) {
		#header ("Content-type: image/jpeg");
		$img=imagecreatefromjpeg($file_url);
		}
	
	if ($type==3) {
		#header ("Content-type: image/png");
		$img=imagecreatefrompng($file_url);
		}
	
	//calcul new dim
	$proportions=$height/$width;
	
	if ($width>=$height) {
		$new_width=$max_dim;
		$new_height=$new_width*$proportions;
		}
	else {
		$new_height=$max_dim;
		$new_width=$new_height/$proportions;
		}
	
		
	//redimension img	
		$img2 = imagecreatetruecolor($new_width, $new_height);
		imagecopyresampled($img2, $img, 0, 0, 0, 0, $new_width, $new_height, $width, $height);

	switch ($type) {
		case 1:
		   $img_ok=ImageGif ($img2,$destination);
		   if ($img_ok) {return TRUE;}
		   else {return FALSE;}
		   break;
		case 2:
		   $img_ok=ImageJPEG ($img2,$destination);
		   if ($img_ok) {return TRUE;}
		   else {return FALSE;}
		   break;
		case 3:
		   $img_ok=ImagePNG ($img2,$destination);
		   if ($img_ok) {return TRUE;}
		   else {return FALSE;}
		   break;
		
		}
	
	}
?> 