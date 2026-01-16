<?php
###################################################
#          PHProg : Publication d'albums photos sur Internet
#          ---------------------------------------------------------------------------
#                     /login2.php
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
session_start();

//récup form
$login_name=$_POST['user'];
$login_password=$_POST['password'];

require_once('fonction/lire_fichier.php');

$data=lire_fichier('user.php');
$nb=count($data);
for ($i=0;$i<$nb;$i++) {
	$ligne=explode('|',$data[$i]);
	}

if ($login_name==$ligne[0] and md5($login_password)==$ligne[1]) {
	$_SESSION['name']=$ligne[0];
	header('location: index.php');
	}
else {
	header('location: index.php?id=3&e=1');
}
?>