<?php


//récuperation des variables

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




$tableClmntCache = 	$ligue."_clmnt_cache";
//$tableMatch = $ligue."_matchs";
//$tableEquipes = $ligue."_equipes";
 				
if ( $champ == 990141)
{$debut = 990141; $fin = 990144;}
elseif ( $champ == 990151)
{$debut = 990151; $fin = 990158;}
elseif ( $champ == 991161)
{$debut = 991161; $fin = 991169;}
elseif ( $champ == 992161)
{$debut = 992161; $fin = 992169;}
elseif ( $champ == 990241)
{$debut = 990241; $fin = 990244;}
elseif ( $champ == 990251)
{$debut = 990251; $fin = 990258;}
elseif ( $champ == 991261)
{$debut = 991261; $fin = 991269;}
elseif ( $champ == 992261)
{$debut = 992261; $fin = 992269;}
//-- ARA --
elseif ( $champ == 100171)
{$debut = 100171; $fin = 100184;}
elseif ( $champ == 100191)
{$debut = 100191; $fin = 100197;}
elseif ( $champ == 100211)
{$debut = 100211; $fin = 100217;}
elseif ( $champ == 100271)
{$debut = 100271; $fin = 109184;}
//-- OCC --
elseif ( $champ == 200171)
{$debut = 200171; $fin = 200184;}
elseif ( $champ == 200191)
{$debut = 200191; $fin = 200204;}
elseif ( $champ == 200211)
{$debut = 200211; $fin = 200217;}
elseif ( $champ == 200271)
{$debut = 200271; $fin = 209194;}
//-- NAQ --
elseif ( $champ == 190171)
{$debut = 190171; $fin = 190184;}
elseif ( $champ == 190191)
{$debut = 190191; $fin = 190196;}
elseif ( $champ == 190211)
{$debut = 190211; $fin = 190216;}
elseif ( $champ == 190271)
{$debut = 190271; $fin = 199184;}
//-- IDF --
elseif ( $champ == 170171)
{$debut = 170171; $fin = 170204;}

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
$ptsTerrain = $liste[2];
//$bonusOff = $liste[3]; 
//$bonusDef = $liste[4]; 
//$ptsAdmin = $liste[5]; 
//$forfait = $liste[6];



//******* traitements des bonus    ******	
	
//Mise à jour de la première ligne dans la table

// affichage de la 1re ligne
?>
<table>
  <tr>
   <td><?php echo $idEquipe; ?></td>
   <td><?php echo $ptsTerrain; ?></td>
  </tr>
</table>
<?php
//Mise à jour des autres lignes

$nom = array();
$points = array();

 $requete=$bdd->query("
			SELECT nom,points
			FROM $tableClmntCache
			WHERE 	id_champ between '$debut' and '$fin'
			ORDER BY id_champ ASC , points DESC
			");
	 
	 while ($row = $requete->fetch())
			{ 
			$nom[] = $row[0];
			$points[] = $row[1];
			}


 


echo "lignes suivantes : ";echo "<br>";
$compteur_int = 0;
$i=0;
$y=0;
//while ($i < 53  )
while (!feof($fp))
{	
	
	$ligne = fgets($fp,4096); 
	$liste = explode( $caratereSeparation,$ligne);  
		    
	if (isset($liste[0]))$idEquipe = $liste[0]; 
	if (isset($liste[1]))$ttBonus = $liste[1]; 
	if (isset($liste[2]))$ptsTerrain = $liste[2];
//	if (isset($liste[3]))$bonusOff = $liste[3]; 
//	if (isset($liste[4]))$bonusDef = $liste[4];
//	if (isset($liste[5]))$ptsAdmin = $liste[5]; 
//	if (isset($liste[6]))$forfait = $liste[6];
 if (  $idEquipe > 0 )
 {
?>
<table  border color="#000000">
 <tr>
   <td width="100" align="center"><?php echo $idEquipe; ?></td>
   <td width="100" align="center"><?php echo $ptsTerrain; ?></td>
   <td width="200" align="center"><?php echo $nom[$i]; ?></td>
   <td width="100" align="center"><?php echo $points[$i]; ?></td>
   <td width="100" align="center"><?php echo $points[$i]-$ptsTerrain; ?></td>
 </tr>
</table>
 <?php
 $i=$i+1;
 
 }
 else
 {
	
?>

<table  border color="#000000">
 <tr>
   <td width="100" bgcolor="#0099CC" align="center">--</td>
   <td width="100" bgcolor="#0099CC" align="center">--</td>
   <td width="200" bgcolor="#0099CC" align="center">--</td>
   <td width="100" bgcolor="#0099CC" align="center">--</td>
   <td width="100" bgcolor="#0099CC" align="center">--</td>
 </tr>
</table>
	<?php
	$y=$y+1;
	echo $y;
	//echo $i;
 }
	
  $compteur_int = $compteur_int + 1 ;
}
echo "<br />";
echo "nombre de lignes i : ".$i;
echo "<br />";echo "<br />";
echo "nombre de lignes traitées : ".$compteur_int;			
echo "<br />"; 
 
require '../majScores/bas.php';

?>
