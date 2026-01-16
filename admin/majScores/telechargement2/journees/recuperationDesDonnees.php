
<?php 
if (isset ($_GET['type'])) $type = $_GET['type']; else $type='-';
if (isset ($_GET['comite'])) $ligueComite = $_GET['comite']; else $ligueComite = "";
if (isset ($_POST['fichier'])) $fichier=$_POST['fichier'];
if (isset ($_POST['fichier2'])) $fichier2=$_POST['fichier2'];
$nomFichier=$_FILES['fichier']['name'];
echo "nom du fichier : ".$nomFichier;echo "<br/>";
$nomFichier = substr($nomFichier,0,4);
echo $nomFichier;echo "<br/>";

if ($nomFichier == "FED1")
{
	$comite = "phpf1";
	$borne1 =140;
}
elseif ($nomFichier == "FED2")
{
$comite = "phpfed2";
	$borne1 =150;
}
elseif($nomFichier == "FED3")
{
	$comite = "phpfed3NE";
	$borne1 =160;
}
elseif ($nomFichier == "FED4")
{
	$comite = "phpfed3GS";
	$borne1 =160;
}
elseif($nomFichier == "FED5")
{
	//$comite = "phpf1";
	//$borne1 =140;
}
elseif($nomFichier == "FED6")
{
	$comite = "phpfed2";
	$borne1 =250;
}
elseif ($nomFichier == "FED7")
{
	$comite = "phpfed3NE";
	$borne1 =260;
}
elseif($nomFichier == "FED8")
{
	$comite = "phpfed3GS";
	$borne1 =260;
}
$type = $_GET['type'] ;
//$comite= $_POST['comite'] ; 
//$borne1 =$_POST['borne1'];
$borne2 =$_POST['borne2'];
//$fichier = $_POST['fichier'];
//echo "fichier : ".$fichier.' '."<br />";;
echo "Modification par : ".' '.$type.' '."<br />";
echo "Comit&eacute; : ".' '.$comite.' '."<br />";
echo "Division : ".' '.$borne1.' '."<br />";
echo "Journ&eacute;e &agrave; supprimer : ".''.$borne2.' '."<br />";

//*****************************************
//****** choix de la base de donn�es ******
//*****************************************

if ($comite=="phpf1" or $comite=="phpfed2" or $comite=="phpfed3NE" or $comite=="phpfed3GS" or $comite=="phpfem")
	{
	require ("../../connect1/connection3.php");
	}
else	
	{
	require ("../../connect1/connection2.php");
	}

$comiteMatchs=$comite.''."_matchs";
$comiteMatchsSAUV = $comiteMatchs.''."SAUV";

//******************************************
//***** Suppression de la s�lection ********
//******************************************

if ($type == "journee")
{
$comiteMatchs=$comite.''."_matchs";
	for ($i=0; $i<9 ; $i ++)
	  {
		$journee = (($borne1 + $i)*100) + $borne2;
		echo $journee;echo "<br />";

		$bdd->exec("DELETE FROM $comiteMatchs
					WHERE id_journee = $journee");
	  }
}
else
{		
		$bdd->exec(" DELETE FROM $comiteMatchs
				WHERE id_journee BETWEEN $borne1 AND $borne2");
}
//*******************************************************
//******** Cr�ation et Sauvegarde de la table ***********
//*******************************************************
		
		//insertion des donn�es
$bdd->exec("INSERT INTO $comiteMatchsSAUV
			SELECT *
			FROM $comiteMatchs");

//***************************************************
//************* Mise � jours des classements ********
//***************************************************

echo "<br />";

//upload fichier 

$cheminn=dirname(__FILE__)."/journees/";
echo "<br/>";
echo "chemin dirname :".$cheminn;
echo "<br/>";
echo "nom du fichier : ".$_FILES['fichier']['name'];echo "<br/>";
echo "taille du fichier : ".$_FILES['fichier']['size'];echo "<br/>";
echo "nom du fichier(basemane) :".basename($_FILES['fichier']['name']);echo "<br/>";
?>
<pre>
<?php
 print_r($_FILES); 
 ?>
 </pre>
 <?php
$fichier=$_FILES['fichier']['name'];
$fichierChemin = $_FILES['fichier']['tmp_name'];
echo "fichierChemin temporaire :".$fichierChemin;

//**********   Recherche du  caract�re de s�paration  **********************
$fichierA = fopen($fichierChemin, 'r+');

//Recuperation de la 1re ligne du fichier
$fichierLigne = fgets($fichierA, 4096); 

//recherche des caractere de s�paration
$caratereSeparation =",";

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

	echo "<br/>";
	
	 if(move_uploaded_file($_FILES['fichier']['tmp_name'], $cheminn.$fichier)) 
		 //Si la fonction renvoie TRUE, c'est que �a a fonctionn�...
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
 require '../../connect1/connection3.php';


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
	  
	//   echo $id; echo $caratereSeparation;
	//   echo $id_equipe_dom;echo $caratereSeparation; 
	//   echo $id_equipe_ext; echo $caratereSeparation;
	//   echo $date_reelle;echo $caratereSeparation; 
	//  echo $id_journee; echo $caratereSeparation;
	//   echo $buts_dom; echo $caratereSeparation;
	//   echo $buts_ext; echo "<br/>";


// Insertion dans la table _matchs
	 
$table = $comite."_matchs";
if ( is_numeric($buts_dom) +  is_numeric($buts_ext) > 0)
		{
		$bdd->exec("INSERT INTO $table 
					VALUES('$id','$id_equipe_dom','$id_equipe_ext','$date_reelle', '$id_journee','$buts_dom','$buts_ext')"); 
		}
		else
		{
		$bdd->exec("INSERT INTO $table 
					VALUES('$id','$id_equipe_dom','$id_equipe_ext','$date_reelle', '$id_journee',NULL,NULL)"); 
		}		
	} 
 echo "table : ".$table;echo "<br/>";    
 fclose($fp);
 
 echo "---upload2---";
$cheminn=dirname(__FILE__)."/journees/";
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
	
	 if(move_uploaded_file($_FILES['fichier2']['tmp_name'], $cheminn.$fichier))
		 //Si la fonction renvoie TRUE, c'est que �a a fonctionn�...
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
echo "comite :".$comite;
// ****** Connection � la base ******
//$connect ="connection2"; 
if ($ligueComite == "phpf1" or $ligueComite == "phpfed2" or $ligueComite == "phpfed3NE" or $ligueComite == "phpfed3GS" or $ligueComite == "phpfem")
require '../../connect1/connection3.php';
else
require '../../connect1/connection2.php';

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
	 
//******   Verification si un bonus est deja saisi dans la table "Equipesresultat"	 ******* 
	
  if ($ligueComite == "phpf1" or $ligueComite == "phpfed2" or $ligueComite == "phpfed3NE" or $ligueComite == "phpfed3GS" or $ligueComite == "phpfem")
  require '../../connect1/connection3.php';
  else
  require '../../connect1/connection2.php';

  $table = $ligueComite."_equipesResultat";
  
  $reponse = $bdd->query("SELECT $journeeEquipesResultat
						   FROM $table
						   WHERE id =$equipeId");
						while ($row = $reponse->fetch())
							{
							$Bonus0ou1=$row[0];
							}				
		echo "- Bonus0ou1=".$Bonus0ou1;
		echo "<br />";
	
  if ($Bonus0ou1 == 0)
	{		
	$bdd->exec('UPDATE $table 
				SET $journeeEquipesResultat = $bonus
				WHERE id = $equipeId'); 
	
		if ($bonus == 1)
		{
		 //require ('traitementBonus.php');
		 //echo "traitementBonus.php";
		} 
	} 
}
 echo "<br/>"; 	  
 echo "table : ".$table;echo "<br/>";    

     fclose($handle); 
require 'bas.php';
?>