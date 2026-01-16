<?php
//error_reporting(E_ALL);
//$dossier = '127.0.0.1/dirigeant/feuilleMatch/telechargement/upload/';
//$dossier = 'c:/program Files/EasyPHP-Devserver-17/eds-www/dirigeant/feuilleMatch/telechargement/';
//$dossier = '/admin/majScores/telechargement/journees/';
//$dossier =$dest;
//echo "zzzzz"."<br/>";
//var_dump($fichier) ;
//echo "<br/>";
//echo "dest : ".$dest;
//$dossier = 'c:/upload/';
//echo "chemin dirname : ".dirname(__FILE__);
$cheminn=dirname(__FILE__)."/journees/";
echo "<br/>";
echo "chemin dirname :".$cheminn;
echo "<br/>";
echo "nom du fichier : ".$_FILES['fichier']['name'];echo "<br/>";
echo "taille du fichier : ".$_FILES['fichier']['size'];echo "<br/>";
echo "nom du fichier(basemane) :".basename($_FILES['fichier']['name']);echo "<br/>";

$fichier=$_FILES['fichier']['name'];

$fichierChemin = $_FILES['fichier']['tmp_name'];

echo "fichierChemin temporaire :".$fichierChemin;
//**********   Recherche du  caract�re de s�paration  **********************

$fichierA = fopen($fichierChemin, 'r+');

//Recuperation de la 1re ligne du fichier
$fichierLigne = fgets($fichierA, 4096); 


//recherche des caractere de s�paration

$caratereSeparation =",";
//echo "<br/>";
//echo "dest : ".$dest;
//echo "<br/>";
//$chemin_fichier = $_SERVER["DOCUMENT_ROOT"].$dest;
//echo "<br/>";
//echo  "xxxxxx : ".$chemin_fichier;


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
	//var_dump($_FILES['fichier']['tmp_name']) ;echo "<br/>";
	//var_dump($fichier) ;echo "<br/>";
	//var_dump($dossier) ;echo "<br/>";
	
	 if(move_uploaded_file($_FILES['fichier']['tmp_name'], $cheminn.$fichier)) //Si la fonction renvoie TRUE, c'est que �a a fonctionn�...
     {
          echo 'Upload effectu&eacute; avec succès !';echo "<br/>";
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
if ($ligueComite == "phpf1" or $ligueComite == "phpfed2" or $ligueComite == "phpfed3NE" or $ligueComite == "phpfed3GS" or $ligueComite == "phpfem")
require '../../../connect1/connection3.php';
else
require '../../../connect1/connection2.php';


//echo "connection".$connect;

// ***** Traitement du fichier *******;


	$fp = fopen("$cheminn$fichier", "r"); 


   
    while (!feof($fp)) 
    { 
       $ligne = fgets($fp,4096); 

       
       $liste = explode( $caratereSeparation,$ligne);  
    
      
      if (isset($liste[0])) $id = $liste[0]; 
      if (isset($liste[1])) $id_equipe_dom = $liste[1];else $id_equipe_dom=null;
	  if (isset($liste[2]))  $id_equipe_ext = $liste[2]; else $id_equipe_ext=null;
	  if (isset($liste[3]))  $date_reelle = $liste[3];else $date_reelle=null;
	  if (isset($liste[4]))  $id_journee = $liste[4];else $id_journee=null;
	  if (isset($liste[5])) $buts_dom = $liste[5];else $buts_dom=null;
	  if (isset($liste[6])) $buts_ext = $liste[6];else $buts_ext=null;
	 
	// var_dump($buts_dom);
	   
	//   if(strlen($buts_dom)== 0)
	//   {
	//	   $buts_dom= NULL;
	//	   $buts_ext= NULL;
	//  } 
	 //  echo "id : ".$id; echo $caratereSeparation;
	 //  echo "id_equipe_dom : ".$id_equipe_dom;echo $caratereSeparation; 
	 //  echo "id_equipe_ext : ".$id_equipe_ext; echo $caratereSeparation;
	 //  echo "date_reelle : ".$date_reelle;echo $caratereSeparation; 
	 //  echo "id_journee : ".$id_journee; echo $caratereSeparation;
	 //  echo "buts_dom : ".$buts_dom; echo $caratereSeparation;
	 //  echo "buts_ext : ".$buts_ext; echo "<br/>";
	   
	   
	   echo $id; echo $caratereSeparation;
	   echo $id_equipe_dom;echo $caratereSeparation; 
	   echo $id_equipe_ext; echo $caratereSeparation;
	   echo $date_reelle;echo $caratereSeparation; 
	   echo $id_journee; echo $caratereSeparation;
	   echo $buts_dom; echo $caratereSeparation;
	   echo $buts_ext; echo "<br/>";


$division = substr($id_journee,0,3);	   
$table = $ligueComite."_matchs";
//echo $division;
	 
	// echo $buts_dom +  $buts_ext;
	 if ( is_numeric($buts_dom) +  is_numeric($buts_ext) > 0)
		{
		$bdd->exec("INSERT INTO $table VALUES('$id','$id_equipe_dom','$id_equipe_ext','$date_reelle', '$id_journee','$buts_dom','$buts_ext')"); 
		}
	else
		{	
		$bdd->exec("INSERT INTO $table VALUES('$id','$id_equipe_dom','$id_equipe_ext','$date_reelle', '$id_journee',NULL,NULL)"); 
		}		
	} 
 echo "table : ".$table;echo "<br/>";    
 
       
   
     fclose($fp); 
   //  MYSQL_CLOSE();  



?>
