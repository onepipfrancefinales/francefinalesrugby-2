<?php
//récuperation des variables
if (isset ($_GET['ligue'])) $ligueChamp = $_GET['ligue']; else $ligueChamp = "";
if (isset ($_GET['base'])) $base = $_GET['base']; else $base = "";
if (isset ($_POST['fichier'])) $test = $_POST['fichier']; else $test = "erreur";


$ligue = substr($ligueChamp,0,6);
if ($ligue=="phpfed")
$ligue = "phpfed3NE";
else
$ligue = $ligue;


$champ = substr($ligueChamp,-6);


$base = "equipes";


echo "Ligue : ".$ligue;echo "<br />";
echo "champ : ".$champ;echo "<br />";
echo "Base : ".$base;echo "<br />";
$dest = '/admin/majDebutSaison/fichiers/';
echo "chemin de stockage : ".$dest;	

$cheminn=dirname(__FILE__)."/fichiers/";
echo "chemin dirname : ".$cheminn;
echo "<br/>";

echo "chemin absolu du fichier : ".$cheminn;
echo "<br/>";

$fichier=$_FILES['fichier']['name'];
$fichierChemin = $_FILES['fichier']['tmp_name'];


//recherche des caractere de séparation

$caratereSeparation =",";
$chemin_fichier = $_SERVER["DOCUMENT_ROOT"].$dest;
echo "<br/>";

//************************************

echo "????? : ".$cheminn.$fichier;
if(!isset($erreur)) //S'il n'y a pas d'erreur, on upload
{
	echo "<br/>";
	var_dump($_FILES['fichier']['tmp_name']) ;echo "<br/>";
	var_dump($fichier) ;echo "<br/>";
	var_dump($dest) ;echo "<br/>";
	
	 if(move_uploaded_file($_FILES['fichier']['tmp_name'], $cheminn.$fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
     {
			echo 'Upload effectu&eacute; avec succès !';
			echo "<br/>";
			echo "----------------------------";
			echo "<br/>";
	 }
     else //Sinon (la fonction renvoie FALSE).
     {
        echo 'Echec de l\'upload !';echo "<br/>";
     }
}
else
{
     echo $erreur;
}
echo "fichier à exploité : ".$fichier;
echo "<br/>";
echo"---------------------------------------------";
echo "<br/>";
echo"---------------------------------------------";
echo "<br/>";
// ****** Connexion à la base ******

require '../../connect/connexion6.php';

$tableEquipe = $ligue."_equipes";
// ouverture et lecture de la première ligne
$fp = fopen("$cheminn$fichier", "r");
$ligne1 = fgets($fp);

//Etude de la première ligne
$liste = explode( $caratereSeparation,$ligne1);
//$nom = $liste[0]; 
$id_nom = $liste[0]; 
$bonus = $liste[1];


echo $tableEquipe."<br />";  
echo "<br/>";				
//----------------------------------------------
echo $id_nom.' '.$bonus.' '."<br />";
  
// insertion des données dans la table equipes

	 $bdd->exec("UPDATE $tableEquipe
				 SET penalite = $bonus 
					WHERE id = $id_nom    ");

echo "<br />"; 
//Etude des autres lignes

while (!feof($fp))
	{ 
	 $ligne = fgets($fp,4096); 
	 $liste = explode( $caratereSeparation,$ligne);  
		    
	// if (isset ($liste[0]))$nom = $liste[0]; 
	 if (isset ($liste[0])) $id_nom =$liste[0] ; 
	 if (isset ($liste[1]))$bonus = $liste[1];

	// insertion des données dans la table matchs

	 $bdd->exec("UPDATE $tableEquipe
				 SET penalite = $bonus 
					WHERE id = $id_nom    ");



	echo $id_nom.' '.$bonus.' '."<br />";	
	}

$champRecup= $champ;
echo $champRecup;
require "../../Phpleague/$ligue/admin/genererSansIhm.php";
require '../majScores/bas.php';

?>
