<?php
###################################################
#          PHProg : Publication d'albums photos sur Internet
#          ---------------------------------------------------------------------------
#                    /fonction/resize.func.php
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
function resize($file_url,$new_width,$new_height) {
	
	//type
	list($width, $height, $type) = getimagesize($file_url);
	
	if ($type==1) {
		//header ("Content-type: image/gif");
		$img=imagecreatefromgif($file_url);
	}
	
	if ($type==2) {
		//header ("Content-type: image/jpeg");
		$img=imagecreatefromjpeg($file_url);
	}
	
	if ($type==3) {
		//header ("Content-type: image/png");
		$img=imagecreatefrompng($file_url);
	}
	
	//calcul dim
	if ($new_height==0) {
		$proportions=$height/$width;
		$new_height=$new_width*$proportions;
	}
	if ($new_width==0) {
		$proportions=$height/$width;
		$new_width=$new_height/$proportions;
	}
	
	//redimension img	
		$img2 = imagecreatetruecolor($new_width, $new_height);
		imagecopyresampled($img2, $img, 0, 0, 0, 0, $new_width, $new_height, $width, $height);

	switch ($type) {
		case 1:
		   $img_ok=ImageGif ($img2,$file_url);
		   if ($img_ok) {return TRUE;}
		   else {return FALSE;}
		   break;
		case 2:
		   $img_ok=ImageJPEG ($img2,$file_url);
		   if ($img_ok) {return TRUE;}
		   else {return FALSE;}
		   break;
		case 3:
		   $img_ok=ImagePNG ($img2,$file_url);
		   if ($img_ok) {return TRUE;}
		   else {return FALSE;}
		   break;
		
	}
	
}
?> 