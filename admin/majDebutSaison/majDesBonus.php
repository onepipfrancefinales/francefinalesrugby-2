<?php
//récuperation des variables
require 'testmethodebonus.php';	
if (isset ($_GET['bddComitePlusId'])) $bddComitePlusId = $_GET['bddComitePlusId']; else $bddComitePlusId = "";
echo "bddComitePlusId : ".$bddComitePlusId;
$ligue000000 = substr($bddComitePlusId,-2);
$ligue =substr($bddComitePlusId,0,5);
echo "<br/>";
$champ = substr($bddComitePlusId,-6);echo "<br/>";
echo "champ : ".$champ;
if ($ligue == "phppr")
	$ligue = "phppro";
elseif ($ligue == "phpid")
	$ligue = "phpidf";
elseif ($ligue == "phpfe")
	$ligue = "phpfed3NE";
else
	$ligue = $ligue;

if (isset ($_GET['base'])) $base = $_GET['base']; else $base = "";
if (isset ($_POST['fichier'])) $test = $_POST['fichier']; else $test = "erreur";

$base = "matchs";
echo "<br />";
echo "Ligue : ".$ligue;echo "<br />";
echo "Base : ".$base;echo "<br />";
$dest = '/admin/majDebutSaison/fichiers/';
echo "chemin de stockage : ".$dest;
echo "<br/>";

$cheminn=dirname(__FILE__)."/fichiers/";
echo "chemin dirname : ".$cheminn;
echo "<br/>";

echo "chemin absolu du fichier : ".$cheminn;
echo "<br/>";
//echo "nom du fichier : ".['fichier']['name'];echo "<br/>";
//echo "taille du fichier : ".$_FILES['fichier']['size'];echo "<br/>";
//echo "nom du fichier(basemane) :".basename($_FILES['fichier']['name']);
echo "<br/>";
$fichier=$_FILES['fichier']['name'];
$fichierChemin = $_FILES['fichier']['tmp_name'];


//**********   Recherche du  caractère de séparation  **********************
 
//$fichierA = fopen("$cheminn", 'r+');
//Recuperation de la 1re ligne du fichier
//$fichierLigne = fgets($fichierA, 4096); 


//recherche des caractere de séparation

$caratereSeparation =",";
$chemin_fichier = $_SERVER["DOCUMENT_ROOT"].$dest;
echo "<br/>";

//************************************
//echo $_FILES['fichier'];


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

echo "bdd utilisée : ".$ligue;echo "<br/>";
require '../../connect/connexion6.php';

$tableMatch = $ligue."_matchs";
$tableEquipes = $ligue."_equipes";
 				
//----------------------------------------------

echo "Premiere ligne du fichier : ";echo "<br />";

//echo $id1.' - '.$id_equipe_dom1.' -  '.$id_equipe_ext1.'  - '.$dateDuJour1.'  - '.$id_journee1.' -  '.$buts_dom1.' -  '.$buts_ext1."<br />";


 
//**************************************************
//               Traitement des bonus
//**************************************************
//--------------------------------------------


//****************************************

//**********************************************//
//**********************************************// 
//           Etude de la première ligne
//**********************************************//
//**********************************************//
// lecture de la première ligne
$fp = fopen("$cheminn$fichier", "r");
$ligne1 = fgets($fp);

$liste = explode( $caratereSeparation,$ligne1);
$idEquipe = $liste[0]; 
$ttBonus = $liste[1]; 
//$ptsTerrain = $liste[2];
//$bonusOff = $liste[3]; 
//$bonusDef = $liste[4]; 
//$ptsAdmin = $liste[5]; 
//$forfait = $liste[6];



//******* traitements des bonus    ******	
	
//Mise à jour de la première ligne dans la table

$bdd->exec("UPDATE $tableEquipes
				SET penalite='penalite'  
				WHERE id ='$idEquipe'");	

// affichage de la 1re ligne
echo $idEquipe.' - '.$ttBonus;echo "<br />";


echo "lignes suivantes : ";echo "<br>";
$compteur_int = 0;
while (!feof($fp))
{	
	$ligne = fgets($fp,4096); 
	$liste = explode( $caratereSeparation,$ligne);  
		    
	if (isset($liste[0])) $idEquipe = $liste[0]; 
	if (isset($liste[1]))$ttBonus = $liste[1]; 
	//if (isset($liste[2]))$ptsTerrain = $liste[2];
	//if (isset($liste[3]))$bonusOff = $liste[3]; 
	//if (isset($liste[4]))$bonusDef = $liste[4];
	//if (isset($liste[5]))$ptsAdmin = $liste[5]; 
	//if (isset($liste[6]))$forfait = $liste[6];
   
  
/*
if ($id > 0)
{	   		
*/



	
	$bdd->exec("UPDATE $tableEquipes
				SET penalite='$ttBonus'  
				WHERE id ='$idEquipe'");	
/*	 
	if ( $buts_dom + $buts_ext == 0)
	{
		$bdd->exec("UPDATE $tableMatch
				SET id_equipe_dom='$id_equipe_dom',  id_equipe_ext='$id_equipe_ext', date_reelle ='$date_reelle', id_journee='$id_journee', buts_dom = NULL, buts_ext = NULL 
				WHERE id ='$id'");
	}
	*/
	 
// affichage des  la 1re lignes suivantes

/*
if( is_numeric($idEquipe)){
echo $idEquipe.' - '.$ttBonus; echo "<br>";}
*/

   
    $compteur_int = $compteur_int + 1 ;
 }
echo "<br />";echo "<br />";
echo "nombre de lignes traitées : ".$compteur_int;			
echo "<br />"; 
 
//echo "debut de journee".$journeeDebut;echo "<br />";
//global $champRecup;
$champRecup=$champ;
echo "champRecup : ".$champRecup;echo "<br />";
echo "ligue : ".$ligue;echo "<br />";

require "../../Phpleague/$ligue/admin/genererSansIhm.php";
require '../majScores/bas.php';



?>
