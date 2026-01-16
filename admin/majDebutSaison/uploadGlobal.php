<?php
//r�cuperation des variables
if (isset ($_GET['ligue'])) $ligue = $_GET['ligue']; else $ligue = "";
if (isset ($_GET['base'])) $base = $_GET['base']; else $base = "";

echo "Choix de la Ligue : ".$ligue;echo "<br />";
echo "Base : ".$base;echo "<br />";

//echo "test : ".$fichier;
// chemin du dossier de destination
//$dest = '/admin/majDebutSaison/fichiers/equipes.csv';
$dest = '/admin/majDebutSaison/fichiers/';

//$dest=$dossier;
echo "chemin de stockage : ".$dest;
echo "<br/>";
$cheminn=dirname(__FILE__)."/fichiers/";
echo "<br/>";
echo "<br/>";
echo "Chemin absolu du fichier : ".$cheminn;
echo "<br/>";
//echo "nom du fichier : ".['fichier']['name'];echo "<br/>";
//echo "taille du fichier : ".$_FILES['fichier']['size'];echo "<br/>";
//echo "nom du fichier(basemane) :".basename($_FILES['fichier']['name']);
echo "<br/>";
$_FILES['fichier']['name']="equipes.csv";
$fichier=$_FILES['fichier']['name'];
echo "nomFichier :".$fichier;
$fichierChemin = $_FILES['fichier']['tmp_name'];
$chemin_fichier ="C:\Program Files (x86)\EasyPHP-Devserver-17\eds-www\admin\majDebutSaison/fichiers/equipes.csv";


//**********   Recherche du  caract�re de s�paration  **********************

//$fichierA = fopen($Chemin2, 'r+');

//Recuperation de la 1re ligne du fichier
//$fichierLigne = fgets($fichierA, 4096); 


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
//$taille = filesize($_FILES['fichier']['tmp_name']);
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
//	var_dump($_FILES['fichier']['tmp_name']) ;echo "<br/>";
	var_dump($fichier) ;echo "<br/>";
	var_dump($dest) ;echo "<br/>";
	
	 if(move_uploaded_file("equipes.csv","/admin/majDebutSaison/fichiers/")) //Si la fonction renvoie TRUE, c'est que �a a fonctionn�...
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


require '../../connect/connexion6.php';

//******************************************************
//*                                                    *
//****** Traitement du fichier *** equipes.csv  ********
//*                                                    *
//******************************************************
$cheminn2 ="C:\Program Files (x86)\EasyPHP-Devserver-17\eds-www\admin\majDebutSaison/fichiers/equipes.csv";
$fichier ="equipes.csv";
$ligue = "phpca";
$fp = fopen("$cheminn2", "r"); 
$base ="equipes";
if ($base == "equipes")
	{ 
	 $table = $ligue."_equipes";
	 // lecture de la premi�re ligne
	 $ligne1 = fgets($fp);
 
	 //Etude de la premi�re ligne
	 $liste = explode( $caratereSeparation,$ligne1);
	 $id = $liste[0]; 
	 $id_champ = $liste[1]; 
	 $id_club = $liste[2]; 
	 $penalite = $liste[3];
	 
	// echo $id; echo $caratereSeparation;
	// echo $id_champ;echo $caratereSeparation; 
	// echo $id_club; echo $caratereSeparation;
	// echo $penalite;echo "<br/>"; 
	 
	 // vidage de la table
	 // $bdd->exec("DELETE FROM $table"); 
				
	 //enregistrement de la premi�re ligne deans la table
	 if ($penalite>0)
	 {
	 $bdd->exec("INSERT INTO $table (id, id_champ, id_club, penalite)
				VALUES ('$id' , '$id_champ', '$id_club', '$penalite')");
	 }
	 else
	 {
	  $bdd->exec("INSERT INTO $table (id, id_champ, id_club, penalite)
				  VALUES ('$id' , '$id_champ', '$id_club', '$penalite')"); 
	 }			
	 // Enregistrement des autres lignes dans la table
	 while (!feof($fp)) 
		{ 
		 $ligne = fgets($fp,4096); 
		 $liste = explode( $caratereSeparation,$ligne);  
		    
		 $id = $liste[0]; 
		 $id_champ = $liste[1]; 
		 $id_club = $liste[2]; 
		 $penalite = $liste[3];
       
		 if ($penalite>0)
			{
				
		//	echo $id; echo $caratereSeparation;
		//	echo $id_champ;echo $caratereSeparation; 
		//	echo $id_club; echo $caratereSeparation;
		//	echo $penalite;echo "<br/>"; 		
				
			$bdd->exec("INSERT INTO $table (id, id_champ, id_club, penalite)
						VALUES ('$id', '$id_champ', '$id_club', '$penalite')");
			}
		 else
			{
			 if ($id > 0)
				{
					
			//	echo $id; echo $caratereSeparation;
			//	echo $id_champ;echo $caratereSeparation; 
			//	echo $id_club; echo $caratereSeparation;
			//	echo $penalite;echo "<br/>";

				
				$bdd->exec("INSERT INTO $table (id, id_champ, id_club, penalite)
						VALUES ('$id', '$id_champ', '$id_club', NULL)");  
				}
			}		
		}
	}
	
//******************************************************
//*                                                    *
//****** Traitement du fichier *** journees.csv  ********
//*                                                    *
//******************************************************	
			
if ($base == "journees")
		{ 
		$table = $ligue."_journees";
		// lecture de la premi�re ligne
		$ligne1 = fgets($fp);
 
		//Etude de la premi�re ligne
		$liste = explode( $caratereSeparation,$ligne1);
				$numero = $liste[0]; 
				$date_prevue = $liste[1]; 
				$id = $liste[2]; 
				$id_champ = $liste[3];

		// vidage de la table
		//$bdd->exec("DELETE FROM $table "); 
				
		//enregistrement de la premi�re ligne deans la table
		$bdd->exec("INSERT INTO $table
				  VALUES ('$numero' , '$date_prevue', '$id', '$id_champ')"); 
				 
		// Enregistrement des autreslignes dansla table
		while (!feof($fp)) 
			{ 
				$ligne = fgets($fp,4096); 
				$liste = explode( $caratereSeparation,$ligne);  
		    
				$numero = $liste[0]; 
				$date_prevue = $liste[1]; 
				$id = $liste[2]; 
				$id_champ = $liste[3];
       
				if ($id_champ > 0)
				{
				
		//		echo $numero; echo $caratereSeparation;
		//		echo $date_prevue;echo $caratereSeparation; 
		//		echo $id; echo $caratereSeparation;
		//		echo $id_champ;echo "<br/>"; 	
				
				$bdd->exec("INSERT INTO $table
				    VALUES ('$numero' , '$date_prevue', '$id', '$id_champ')"); 	 
				}
			
			}			
		}
		
//******************************************************
//*                                                    *
//****** Traitement du fichier *** matchs.csv  *********
//*                                                    *
//******************************************************

if ($base == "matchs")
		{ 
	//$journeeDebut = $id_champ * 100;
	//$journeeFin = $journeeDebut + 22;
	//echo "journeeDebut : ".$journeeDebut;
	//echo "<br />";
		$table = $ligue."_matchs";
		// lecture de la premi�re ligne
		$ligne1 = fgets($fp);
		echo "ligne : ".count($ligne1);
		
		//Etude de la premi�re ligne
		$liste = explode( $caratereSeparation,$ligne1);
				$id = $liste[0]; 
				$id_equipe_dom = $liste[1]; 
				$id_equipe_ext = $liste[2];
				$date_reelle = $liste[3]; 
				$id_journee = $liste[4]; 
				$buts_dom = $liste[5]; 
				$buts_ext = $liste[6]; 
				
	
	echo "nombre de colonnes : ".count($liste);echo "<br />";
	$journeeDebut = $id_journee;
	$journeeFin = $journeeDebut + 22;
	//echo "journeeDebut : ".$journeeDebut;
	//echo "<br />";
	//echo "journeeFin : ".$journeeFin;
	//echo "<br />";
				
		// vidage de la table
		//$bdd->exec("DELETE FROM $table  "); 
				
		//enregistrement de la premi�re ligne deans la table
		if (is_numeric($buts_dom) + is_numeric($buts_ext) > 0)
		{
		$bdd->exec("INSERT INTO $table
					VALUES ('$id' , '$id_equipe_dom', '$id_equipe_ext', '$date_reelle','$id_journee' , '$buts_dom', '$buts_ext')"); 
		}
		else
		{
//echo "test presence";			
		$bdd->exec("INSERT INTO $table
					VALUES ('$id' , '$id_equipe_dom', '$id_equipe_ext', '$date_reelle','$id_journee' , NULL, NULL)"); 
		}				
	
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
       
				//echo $id; echo $caratereSeparation;
				//echo $id_equipe_dom;echo $caratereSeparation; 
				//echo $id_equipe_ext; echo $caratereSeparation;
				//echo $date_reelle; echo $caratereSeparation; 	
				//echo $id_journee; echo $caratereSeparation;
				//echo $buts_dom; echo $caratereSeparation;
				//echo $buts_ext; echo "<br/>";
	
			$bdd->exec("DELETE FROM $table WHERE id=$id "); 
			
			
			if (is_numeric($buts_dom) + is_numeric($buts_ext) > 0)
				{
			//	echo $id; echo $caratereSeparation;
			//	echo $id_equipe_dom;echo $caratereSeparation; 
			//	echo $id_equipe_ext; echo $caratereSeparation;
			//	echo $date_reelle; echo $caratereSeparation; 	
			//	echo $id_journee; echo $caratereSeparation;
			//	echo $buts_dom; echo $caratereSeparation;
			//	echo $buts_ext; echo "<br/>";
				
				$bdd->exec("INSERT INTO $table
				VALUES ('$id' , '$id_equipe_dom', '$id_equipe_ext', '$date_reelle','$id_journee' , '$buts_dom', '$buts_ext')"); 
				}		
			else
				{
					
			//	echo "test presence2";echo "<br/>";
			//		echo $id; echo $caratereSeparation;
			//		echo $id_equipe_dom;echo $caratereSeparation; 
			//		echo $id_equipe_ext; echo $caratereSeparation;
			//		echo $date_reelle; echo $caratereSeparation; 	
			//		echo $id_journee; echo $caratereSeparation;
			//		echo $buts_dom; echo $caratereSeparation;
			//		echo $buts_ext; echo "<br/>";
										
					$bdd->exec("INSERT INTO $table
					VALUES ('$id' , '$id_equipe_dom', '$id_equipe_ext', '$date_reelle','$id_journee' , NULL, NULL)"); 
					
				}
			}
		} 	 
 echo "table : ".$table;echo "<br/>";        
  
?>
