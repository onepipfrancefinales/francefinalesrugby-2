<?php
###################################################
#          PHProg : Publication d'albums photos sur Internet
#          ---------------------------------------------------------------------------
#                     /fonction/lire_fichier.php
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
function lire_fichier($file_name) {
	//si le fichier exist l'ouvrir
	if ( file_exists("$file_name") ) {
		$handle=fopen("$file_name",'r');
		}
	//sinon FALSE
	else {
		return FALSE;
		}
	
	//lecture du fichier
	$read=fread($handle,filesize ("$file_name"));
	
	//découpage par ligne
	$ligne=explode("\n", $read);
	$nb_lignes=count($ligne);
	$data=array();
	for ($i=1;$i<$nb_lignes-1;$i++) {
		$data[$i-1]=$ligne[$i];
		}
	fclose($handle);
//chaque ligne dans $data[]
return($data);
}
?>