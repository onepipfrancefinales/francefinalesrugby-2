<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<?php 


if (isset ($_GET['comite'])) $comite = $_GET['comite'];					else $comite = "Variable code comite d&eacute;clar&eacute;e";
if (isset ($_GET['equipe'])) $equipe = $_GET['equipe'];					else $equipe= "Variable equipe non d&eacute;clar&eacute;e";
if (isset ($_GET['connect'])) $connect = $_GET['connect'];				else $connect= "Variable connect non d&eacute;clar&eacute;e";

if (isset ($_POST['nomdir'])) $nomDir = $_POST['nomdir']; else $nomDir = "-";
if (isset ( $_POST['prenomdir'])) $prenomDir = $_POST['prenomdir'];else  $prenomDir = "-";
if (isset ($_POST['licencedir'])) $licenceDir = $_POST['licencedir'];else $licenceDir = "0";
if (isset ($_POST['fonction'])) $typeLicenceEnvoie = $_POST['fonction'];else $typeLicenceEnvoie = "-";
?>



<table width="100%" border="0">
  <tr>
    <td valign="top" width="200"> 
      <?php include "sommaire.php"; ?>
    </td>
    <td valign="top" width="83%"> 
    

<p><b><font size="4" face="Arial, Helvetica, sans-serif">Ajout d'un dirigeant</font></b></p>

<?php

 





// **** traitement du Nom ****** 
$nomDir=str_replace(' ','-',$nomDir);
$nomDir = strtoupper ($nomDir);

// **** traitement du Prénom ****** 
$prenomDir=str_replace(' ','-',$prenomDir);
$prenomDir = strtoupper(substr($prenomDir, 0, 1)).strtolower(substr($prenomDir, 1));


// **** traitement du numéro de la licence ******
$annee = substr($licenceDir,0,4);
$deux = substr($licenceDir,4,2);
$un = substr($licenceDir,6,1);
$fin = substr($licenceDir,7,6);




//echo $annee;echo "<br />";
//echo $deux;echo "<br />";
//echo $un;echo "<br />";
//echo $fin;echo "<br />";


$licenceDirAffichage = $annee." ".$deux." ".$un." ".$fin;

//echo "Nom :".' '.$nomDir;
//echo "<br />";
//echo "Pr&eacute;nom :".' '.$prenomDir;
//echo "<br />";
//echo "Num&eacute;ro de licence :".' '.$licenceDirAffichage;
//echo "<br />";
//echo $licenceDir;
//echo "Fonction :".' '.$fonction;
?>




<?php
//require("../../../$connect.php")
//mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion à MySQL
//mysql_select_db("onepip-france-db2"); // Sélection de la base onepip

//$nb=mysql_query("SELECT MAX(id_perso) 
//				FROM $bdcomite 
//				WHERE club=$equipe AND photo='5' ");

//$nb=mysql_fetch_array($nb);
//echo "$nb2[0]"; 
//
//echo "<br/>";

//$a= 1;
//$nb3=$nb2[0] + $a;
//echo $nb3;

//echo $a;
/*
try
{
	$bdd = new mysqli(host=localhost;dbname=onepip-france-db2;charset=utf8', 'root', '');

}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
*/
//**************************************************
//**************************************************
/*
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "onepip-france-db2";

$conn = new mysqli($servername, $username, $password, $dbname);
 
  if ($conn->connect_error)
  {
    die("Connection failed: " . $conn->connect_error);
} 

$sql =" INSERT INTO phpab_joueurs (nom,    nom_cache, 	prenom,	date_naissance, position_terrain, 	type_licence, 	premiereLigne, comite,	club,	photo, 	id_perso) 
						VALUES    ('AAAA','AAA','AAAA','0000-00-00','121321311','med','0','AB','2029076','5','100')";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 
$conn->close(); 
*/
//******************************************************
//*******************************************************

require   "../../../connect/connexion6.php";

require '../fonctions.php';



//echo "effectif : ".$effectifReel;
//$nom = $nomDir";
//$nom_cache = "test";
//$prenom = "aaaa";
$date_naissance = '2019';
//licence = "19961414523";

if ($typeLicenceEnvoie == "-")

$type_licence = "DIR";
else 
$type_licence = $typeLicenceEnvoie;



$premiereLigne = "";
//$comite = "ab";
$fonction= '5';
//$club = '2029076';
//echo "effectif reel : ".$idJoueurMax;

calculEffectifDirigeant ($comite, $equipe, $bdd);

echo $effectifDirigeant;
$id_perso = $id_persoMax+1 ;

//$equipe1000 = $equipe * 1000;
$id = $effectifDirigeant + 1 ;



echo $nomDir.' '.$prenomDir;
echo "<br />";
echo "Num&eacute;ro de licence :".' '.$licenceDir;
echo "<br />";

if ($connect == "connection2")
{
	$bdd = new mysqli("localhost", "root","" , "onepip-france-db2");
 
	//if ($bdd->connect_error)
	//	{
	//	die("Connection failed: " . $bdd->connect_error);
	//	}

$phpComite_joueurs = "php".$comite."_joueurs";
$sql =" INSERT INTO $phpComite_joueurs (nom,    nom_cache, 	prenom,	date_naissance, licence, 	type_licence, 	premiereLigne, comite,	club,fonction, 	id_perso,id) 
						VALUES    ('$nomDir','$nomDir','$prenomDir','$date_naissance','$licenceDir','$type_licence','0','1','$equipe','$fonction','$id_perso','$id')";


if ($bdd->query($sql) === TRUE) {
	echo "<br />";
    echo "Nouvelle licence cr&eacute;&eacute;e avec succ&egrave;s";
} else {
    echo "Error: " . $sql . "<br>" . $bdd->error;
}
 
$bdd->close(); 



	
}
else
{

$bdd = new mysqli("localhost", "root","" , "onepip-france-db3");
 
  //if ($bdd->connect_error)
//	{
 //   die("Connection failed: " . $bdd->connect_error);
//	} 

$phpComite_joueurs = "php".$comite."_joueurs";
$sql =" INSERT INTO $phpComite_joueurs (nom,    nom_cache, 	prenom,	date_naissance, licence, 	type_licence, 	premiereLigne, comite,	club,fonction, 	id_perso,id) 
						VALUES    ('$nomDir','$nomDir','$prenomDir','$date_naissance','$licenceDir','$type_licence','0','1','$equipe','$fonction','$id_perso','$id')";


if ($bdd->query($sql) === TRUE) {
	echo "<br />";
    echo "Nouvelle licence cr&eacute;&eacute;e avec succ&egrave;s";
} else {
    echo "Error: " . $sql . "<br>" . $bdd->error;
}
 
$bdd->close(); 


}	




?>

<p>&nbsp;
<p>&nbsp;


    </td>
  </tr>
</table>

