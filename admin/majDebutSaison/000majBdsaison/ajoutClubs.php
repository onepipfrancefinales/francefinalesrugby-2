<h1 align="center">Mise à jour de la table bdSaison</h1>
<br/><br/>

<?php
//récuperation des variables
if (isset ($_GET['annee'])) $annee = $_GET['annee']; else $annee = "2022";
if (isset ($_GET['colonne'])) $colonne = $_GET['colonne']; else $colonne = "inconnu";
if (isset ($_GET['division'])) $division = $_GET['division']; else $division = "inconnu";
if (isset ($_POST['fichier'])) ; else $test = "erreur";
echo "division : ".$division; echo "<br/>";
echo "annee : ".$annee; echo "<br/>";
echo "colonne : ".$colonne; echo "<br/>";
echo "test : ".$test; echo "<br/>";


if ($colonne != "en_cours")
$colonneDate=$colonne.$annee;
else
$colonneDate=$colonne;

echo "colonne date : ".$colonneDate;echo "<br/>";
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
echo "<br/>";
echo"---------------------------------------------";
echo "<br/>";
echo"---------------------------------------------";
echo "<br/>";
// ****** Connexion à la base ******

//echo "bdd utilisée : ".$ligue;echo "<br/>";
require '../../connect/connexion1.php';


$tableMatch = "bdsaisons";


echo "<br />";
echo "Insertion dans la table : ".$tableMatch."<br />";  
echo "info à inserer : ".$division."<br />"; ;

//**********************************************//
//**********************************************// 
//           Etude de la première ligne
//**********************************************//
//**********************************************//
// lecture de la première ligne

echo "<br>";
echo "********************    Première ligne du fichier     *************************";echo "<br>";
echo "<br>";


$fp = fopen("$cheminn$fichier", "r");
$ligne1 = fgets($fp);

$liste = explode( $caratereSeparation,$ligne1);
$id = $liste[0];



// affichage de la 1re ligne
echo "1 -- ".$id; echo "<br />";
echo "<br/>";

$idReduit = substr($id, 2, 5);
echo "1 -- ".$idReduit; echo "<br />";

//insertion en table
$bdd->exec("UPDATE $tableMatch
				SET $colonneDate = '$division'   
				WHERE id = '$idReduit'");	
	

//************************************************************	
	//************************************************************				
	// Enregistrement des autres lignes dans la table
	//************************************************************
	//************************************************************
echo "<br>";
echo "***********    lecture des lignes suivantes du fichier     ********* ";echo "<br>";
$i=2;
while (!feof($fp))
{	
	$ligne = fgets($fp,4096); 
	$liste = explode( $caratereSeparation,$ligne);  
		    
	if (isset($liste[0])) $id = $liste[0]; 

  
    if ($id > 0)
    {	   		

    echo $i." -- ".$id;echo "<br/>";
    $idReduit = substr($id, 2, 5);

    $bdd->exec("UPDATE $tableMatch
				SET $colonneDate = '$division'   
				WHERE id = '$idReduit'");	

    $i =$i+1;
   } 
}
?>
