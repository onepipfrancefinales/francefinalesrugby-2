<?php
//error_reporting(E_ALL);
//$dossier = '127.0.0.1/dirigeant/feuilleMatch/telechargement/upload/';
//$dossier = 'c:/program Files/EasyPHP-Devserver-17/eds-www/dirigeant/feuilleMatch/telechargement/';
$dossier = '/admin/majScores/telechargement/journees/';
//$dossier =$dest;
echo "zzzzz"."<br/>";
//var_dump($fichier) ;
//echo "<br/>";
//echo "dest : ".$dest;
//$dossier = 'c:/upload/';
//echo "chemin dirname : ".dirname(__FILE__);
$cheminn=dirname(__FILE__)."/journees/";
echo "<br/>";
echo $cheminn;
echo "<br/>";
echo "nom du fichier : ".$_FILES['fichier']['name'];echo "<br/>";
echo "taille du fichier : ".$_FILES['fichier']['size'];echo "<br/>";
echo "nom du fichier(basemane) :".basename($_FILES['fichier']['name']);echo "<br/>";

$fichier=$_FILES['fichier']['name'];

$fichierChemin = $_FILES['fichier']['tmp_name'];


//**********   Recherche du  caract�re de s�paration  **********************

$fichierA = fopen($fichierChemin, 'r+');

//Recuperation de la 1re ligne du fichier
$fichierLigne = fgets($fichierA, 4096); 


//recherche des caractere de s�paration

$caratereSeparation =",";

$chemin_fichier = $_SERVER["DOCUMENT_ROOT"].$dest;
echo "<br/>";
echo  "xxxxxx".$chemin_fichier;


//************************************

echo "<br/>";
echo "<br/>";





//ici

$taille_maxi = 100000;
$taille = filesize($_FILES['fichier']['tmp_name']);
$extensions = array('.doc', '.ods', '.csv', '.txt');
$extension = strrchr($_FILES['fichier']['name'], '.'); 


if(!isset($erreur)) //S'il n'y a pas d'erreur, on upload
{
     //On formate le nom du fichier ici...
    // $fichier = strtr($fichier, 
    //      '����������������������������������������������������', 
    //      'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
    // $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);
   
	
	
	echo "<br/>";
	var_dump($_FILES['fichier']['tmp_name']) ;echo "<br/>";
	var_dump($fichier) ;echo "<br/>";
	var_dump($dossier) ;echo "<br/>";
	
	 if(move_uploaded_file($_FILES['fichier']['tmp_name'], $cheminn.$fichier)) //Si la fonction renvoie TRUE, c'est que �a a fonctionn�...
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


// ****** Connection � la base ******
//$connect ="connection2"; 
if ($ligue == "phpf1" or $ligue == "phpfed2" or $ligue == "phpfed3NE" or $ligue == "phpfed3GS" or $ligue == "phpfem")
require '../../../connect/connection3.php';
else
require '../../../connect/connection2.php';


//echo "connection".$connect;

// ***** Traitement du fichier *******;


	$fp = fopen("$cheminn$fichier", "r"); 


   
    while (!feof($fp)) 
    { 
       $ligne = fgets($fp,4096); 

       
       $liste = explode( $caratereSeparation,$ligne);  
    
      
       $id_champ = $liste[0]; 
       $nom_equipe = $liste[1]; 
	   $id = $liste[2]; 
	   $penalite = $liste[3];
	  
	 
	
	   
	   
	   echo $id_champ; echo $caratereSeparation;
	   echo $nom_equipe;echo $caratereSeparation; 
	   echo $id; echo $caratereSeparation;
	   echo $penalite;echo "<br/>"; 
	  
	   
$table = $ligue."_equipes";

	 

		$query = "UPDATE $table SET penalite = $penalite WHERE id =$id"; 
		$result= mysql_query($query); 
	
	  
	  } 
 echo "table : ".$table;echo "<br/>";    
 
       
   
     fclose($fp); 
     MYSQL_CLOSE();  



?>
