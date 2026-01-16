<?php
//récuperation des variables
if (isset ($_GET['ligue'])) $ligue = $_GET['ligue']; else $ligue = "";
if (isset ($_GET['base'])) $base = $_GET['base']; else $base = "";
if (isset ($_POST['fichier'])) $test = $_POST['fichier']; else $test = "erreur";

//$ligue = "phpf1";
$base = "matchs";
//$fichier = "enregJournee.csv";

echo "Ligue : ".$ligue;echo "<br />";
echo "Base : ".$base;echo "<br />";
echo "test : ".$test;echo "<br />";

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
//$fichier = $fichierA;
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
echo  "xxxxxx".$chemin_fichier;


//************************************

echo "<br/>";
//echo $_FILES['fichier'];
echo "<br/>";

//ici

//$taille_maxi = 100000;
//$taille = filesize($_FILES['fichier']['tmp_name']);
//$extensions = array('.doc', '.ods', '.csv', '.txt');
//$extension = strrchr($_FILES['fichier']['name'], '.'); 

//echo "????? : ".$cheminn.$fichier;
if(!isset($erreur)) //S'il n'y a pas d'erreur, on upload
{
    //On formate le nom du fichier ici...
    // $fichier = strtr($fichier, 
    //      'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ', 
    //      'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
    // $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);

	echo "<br/>";
	var_dump($_FILES['fichier']['tmp_name']) ;echo "<br/>";
	var_dump($fichier) ;echo "<br/>";
	var_dump($dest) ;echo "<br/>";
	
	 if(move_uploaded_file($_FILES['fichier']['tmp_name'], $cheminn.$fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
     {
			echo 'Upload effectu&eacute; avec succ&egrave;s !';
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
// ****** Connexion à la base ******


require '../../connect/connexion6.php';

$fp = fopen("$cheminn$fichier", "r");	
//******************************************************
//*                                                    *
//****** Traitement du fichier *** matchs.csv  *********
//*                                                    *
//******************************************************

$tableMatch = $ligue."_matchs";
$tableEquipe = $ligue."_equipes";
// lecture de la première ligne
$ligne1 = fgets($fp);
 
//Etude de la première ligne
$liste = explode( $caratereSeparation,$ligne1);
$id = $liste[0]; 
$id_equipe_dom = $liste[1]; 
$id_equipe_ext = $liste[2];
$date_reelle = $liste[3]; 
$id_journee = $liste[4]; 
$buts_dom = $liste[5]; 
$buts_ext = $liste[6]; 

$journeeDebut = $id_journee;
$journeeFin = $journeeDebut + 22;
echo "journeeDebut : ".$journeeDebut;
echo "<br />";
echo "journeeFin : ".$journeeFin;
echo "<br />";
				
// vidage de la table
//$bdd->exec("DELETE FROM $table  "); 
				
//enregistrement de la première ligne dans la table
if (is_numeric($buts_dom) + is_numeric($buts_ext) > 0)
	{
	 if ($id_equipe_dom > 0	and $id_equipe_ext > 0 )
		 $bdd->exec("INSERT INTO $tableMatch
					 VALUES ('$id' , '$id_equipe_dom', '$id_equipe_ext', '$date_reelle','$id_journee' , '$buts_dom', '$buts_ext')"); 
		
		 //traitement des points bonus défensif
		$bonus = '8';	
		 if ($buts_dom > $buts_ext and (($buts_dom - $buts_ext) < $bonus))
		{
		 $id = $id_equipe_ext;
		 $id_champ = substr($id_journee,0,-2);
		 $id_club = $id_equipe_ext;
		 $penalite = 1;
		 echo $id.' '.$id_champ.' '.$id_club.' '.$penalite;echo "<br />";
		 $bdd->exec("update $tableEquipe
		 			 set id='$id' ,id_champ='$id_champ', id_club='$id_club', penalite = '$penalite'"); 
		}
 	}
	 else
	{		
	 
	 $bdd->exec("INSERT INTO $tableMatch
					VALUES ('$id' , '$id_equipe_dom', '$id_equipe_ext', '$date_reelle','$id_journee' , NULL, NULL)"); 
	}				
				
// Enregistrement des autres lignes dans la table
while (!feof($fp)) 
{ 
	$ligne = fgets($fp,4096); 
	$liste = explode( $caratereSeparation,$ligne);  
		    
	$id = $liste[0]; 
	$id_equipe_dom = $liste[1]; 
	$id_equipe_ext = $liste[2];
	$date_reelle = $liste[3]; 
	$id_journee = $liste[4];
	$buts_dom = $liste[5]; 
	$buts_ext = $liste[6];
   	
	$bdd->exec("DELETE FROM $tableMatch WHERE id=$id "); 
			
			
	if (is_numeric($buts_dom) + is_numeric($buts_ext) > 0)
	{
	
	$bdd->exec("INSERT INTO $tableMatch
				VALUES ('$id' , '$id_equipe_dom', '$id_equipe_ext', '$date_reelle','$id_journee' , '$buts_dom', '$buts_ext')"); 
								
			//traitement des points bonus défensif
		
		$bonus = '8';	
		if ($buts_dom > $buts_ext and (($buts_dom - $buts_ext) < $bonus))
		{
		 
		 $id = $id_equipe_ext;
		 $id_champ = substr($id_journee,0,-2);
		 $id_club = $id_equipe_ext;
		 $penaliteDeLaJournee = 1;
		 
		 $requete=$bdd->query("
				SELECT penalite
				FROM $tableEquipe 
				WHERE 	id= '$id' AND id_champ = '$id_champ'");
		 while ($row = $requete->fetch() )
				{ 
				$penalite = $row[0];
				}
		 
		 $penalite = $penalite + $penaliteDeLaJournee;
		 
		 echo $tableEquipe; echo "<br />";
		 echo $id.' '.$id_champ.' '.$id_club.' '.$penalite;echo "<br />";
		 
		 $bdd->exec("DELETE FROM $tableEquipe WHERE id=$id ");
		 $bdd->exec("INSERT INTO $tableEquipe
				 	 VALUES ('$id' ,'$id_champ', '$id_club', '$penalite')"); 
		
		}			
	}		
	else
	{		
			
	$bdd->exec("INSERT INTO $tableMatch
	VALUES ('$id' , '$id_equipe_dom', '$id_equipe_ext', '$date_reelle','$id_journee' , NULL, NULL)"); 			
			
	}
}
			
 	 
 //echo "table : ".$table;//echo "<br/>";        
 require '../majScores/bas.php';


?>
