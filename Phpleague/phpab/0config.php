<?php
function ouverture()
{
	

//require("data_connect.php");

try
{
	//global $idconnect;
	$idconnect = new PDO('mysql:host=127.0.0.1;dbname=onepip-france-db2', 'root', '');
	//$idconnect = new PDO('mysql:host=localhost;dbname=onepip-france-db2;charset=utf8','root','');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}


//$idconnect=@mysqli_connect($hostname,$login,$password,$database);
//$idconnect=@mysqli_connect('127.0.0.1','root','','onepip-france-db2');
//if(($idconnect=@mysql_connect($hostname,$login,$password,$database))==false){
//$error="Impossible de creer une connexion persistante !";
//return(0);
}
//return($test);
return($idconnect);
return($PHPLEAGUE_RACINE);

//include("data_connect.php");
//include("../lang/lang_fr.php");
//echo $hostname;
//echo $database;
//echo $login;
//echo "password : ".$password;

?>