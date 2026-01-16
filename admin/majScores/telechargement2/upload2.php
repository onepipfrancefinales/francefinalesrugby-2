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
echo "---upload2---";
$cheminn=dirname(__FILE__)."/bonus/";
echo "<br/>";
echo "chemin dirname :".$cheminn;
echo "<br/>";
echo "nom du fichier : ".$_FILES['fichier2']['name'];echo "<br/>";
echo "taille du fichier : ".$_FILES['fichier2']['size'];echo "<br/>";
echo "nom du fichier(basemane) :".basename($_FILES['fichier2']['name']);echo "<br/>";

$fichier=$_FILES['fichier2']['name'];

$fichierChemin = $_FILES['fichier2']['tmp_name'];

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
$taille = filesize($_FILES['fichier2']['tmp_name']);
$extensions = array('.doc', '.ods', '.csv', '.txt');
$extension = strrchr($_FILES['fichier2']['name'], '.'); 


if(!isset($erreur)) //S'il n'y a pas d'erreur, on upload
{
     //On formate le nom du fichier ici...
    // $fichier = strtr($fichier, 
    //      '����������������������������������������������������', 
    //      'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
    // $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);
   
	
	
	echo "<br/>";
	//var_dump($_FILES['fichier2']['tmp_name']) ;echo "<br/>";
	//var_dump($fichier) ;echo "<br/>";
	//var_dump($dossier) ;echo "<br/>";
	
	 if(move_uploaded_file($_FILES['fichier2']['tmp_name'], $cheminn.$fichier)) //Si la fonction renvoie TRUE, c'est que �a a fonctionn�...
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


	$handle = fopen("$cheminn$fichier", "r"); 

	echo "Nbre de ligne : ".count(file("$cheminn$fichier"));
	echo "<br/>"; 
    while (!feof($handle)) 
    { 
       //$ligne = fgets($fp,4096); 
		 $ligne = fgets($handle); 
       
       $liste = explode( $caratereSeparation,$ligne);  
    
      
       if (isset($liste[0])) $poule = $liste[0]; 
       if (isset($liste[1])) $equipeNom = $liste[1]; 
	   if (isset($liste[2])) $equipeId = $liste[2];
	   if (isset($liste[3])) $bonus = $liste[3]; 
	   if (isset($liste[4])) $journee = $liste[4];
	  
	     
	   echo $poule; echo $caratereSeparation;
	   echo $equipeNom;echo $caratereSeparation; 
	   echo $equipeId;echo $caratereSeparation;
	   echo $bonus; echo $caratereSeparation;
	   echo $journee;
	  
	  
	 
	  	$journeeEquipesResultat = "J".$journee;
		//echo $journeeEquipesResultat;
	 
	   
  $table = $ligueComite."_equipesResultat";
  /*
  echo "table :".$table;
  echo "<br/>";
  echo "journeeEquipesResultat : ".$journeeEquipesResultat;
  echo "<br/>";
  echo "equipeId : ".$equipeId;
  echo "<br/>";
  echo "division : ".$division;
  echo "<br/>";

  */
  //******   Verification si un bonus est deja saisi dans la table "Equipesresultat"	 ******* 
	
  if ($ligueComite == "phpf1" or $ligueComite == "phpfed2" or $ligueComite == "phpfed3NE" or $ligueComite == "phpfed3GS" or $ligueComite == "phpfem")
  require '../../../connect1/connection3.php';
  else
  require '../../../connect1/connection2.php';
echo "<br/ >";
//echo "journee equipe resultat :".$journeeEquipesResultat."<br/ >";
//echo "table : ".$table."<br/ >";
//echo "equipe id :".$equipeId."<br/ >";
  $reponse = $bdd->query("SELECT $journeeEquipesResultat
						   FROM $table
						   WHERE id =$equipeId");
						while ($row = mysqli_fetch_array($reponse))
							{
							$Bonus0ou1=$row[0];
							}
							
		echo "- Bonus0ou1=".$Bonus0ou1;
		echo "<br />";
	//	echo "<br />";
	//echo "<br />";
  //	Si aucune saisi, insertion des bonus dans la table
		
  if 	($Bonus0ou1	== 0)
	{		
	  
	
	  
	  
	  $bdd->exec('UPDATE $table 
						SET $journeeEquipesResultat = $bonus
						WHERE id = $equipeId'); 
	// $result= mysql_query($query); 
	 echo "ok";
		if ($bonus == 1)
		{
		 //require ('traitementBonus.php');
		 echo "traitementBonus.php";
		} 
	} 
}
	echo "<br/>"; 	  
 echo "table : ".$table;echo "<br/>";    
 
       
   
     fclose($handle); 
    // MYSQL_CLOSE();  



?>
