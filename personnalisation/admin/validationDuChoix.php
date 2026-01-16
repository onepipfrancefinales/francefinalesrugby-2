<?php 
session_start ();
echo 'Votre login est '.$_SESSION['login'].' et votre Mdp '.$_SESSION['id'].'.'; 
$id=$_SESSION['id'];
echo '<br />'; 
$reponse=$_GET['reponse'];
$saisirComite=$_GET['comiteA'];
$saisirPoule = $_GET['poule'];

 

// ****** recherche du type et de la taille à insérer en base  *******
if ($saisirComite == "phppro" or $saisirComite == "phpf1" or $saisirComite == "phpfed2" or $saisirComite == "phpfed3NE" or $saisirComite == "phpfed3GS" or $saisirComite == "phpfem")
{	
include ("../../connect1/connection3.php");
}
else
	include ("../../connect1/connection2.php");

echo "saisirComite : ".$saisirComite;echo "<br />";
echo "saisirPoule : ".$saisirPoule;echo "<br />";
$table_equipes = $saisirComite."_equipes";
echo $table_equipes;echo "<br />";

// nbre équipe pour définir la taille de la fenêtre
$resultat = $bdd->query("SELECT COUNT(*)
						 FROM $table_equipes
						 WHERE id_champ = $saisirPoule");
						 
$nb_equipe=$resultat->fetch();
echo $nb_equipe[0]; echo "<br />";						 


if 	($nb_equipe[0]==16)
	$taille = 800;
elseif 	($nb_equipe[0]==14)
	$taille = 500;
elseif 	($nb_equipe[0]==12)
	$taille = 500;
elseif ($nb_equipe[0]==10)
	$taille = 450;
elseif ($nb_equipe[0]==8)
	$taille = 350;
elseif ($nb_equipe[0]==6)
	$taille = 400;
elseif ($nb_equipe[0]==4)
	$taille = 300;
echo "taille : ".$taille;	
echo "<br />";
//	définition du type
	
$resultat = $bdd->query("SELECT COUNT(*)
						 FROM $table_equipes
						 WHERE id_champ = $saisirPoule + 100 
						 OR id_champ = $saisirPoule + 9000");	

$nb_equipeType=$resultat->fetch();
echo $nb_equipeType[0]; echo "<br />";	
if ($nb_equipeType[0]!=0)
	$type = 2;
else
	$type = 1;
	
echo "type : ".$type;	
echo "<br />";	
	
// recherche le numéro d'enregistrement

include ("../../connect1/connection5.php");
$resultat =$bdd->query("SELECT comite1, comite2, comite3, comite4, comite5
						FROM personnel
						WHERE id = $id");
while ($row = $resultat->fetch())
						{ 
						$comite1 = $row[0];
						$comite2 = $row[1]; 	
						$comite3 = $row[2]; 	
						$comite4 = $row[3]; 	
						$comite5 = $row[4]; 	
						} 
	if ($comite1 == null)
		$numEnreg = 1;
	elseif ($comite2 == null)
		$numEnreg = 2;
	elseif ($comite3 == null)
		$numEnreg = 3;
	elseif ($comite4 == null)
		$numEnreg = 4;
	elseif ($comite5 == null)
		$numEnreg = 5;
	else
		echo "Vous ne pouvez plus sélectionner de championnat";


$personnel_comite ="comite".$numEnreg;
$personnel_division ="division".$numEnreg;
$personnel_taille ="taille".$numEnreg;
$personnel_type ="type".$numEnreg;
 
$bdd->exec( "UPDATE personnel 
		SET $personnel_comite='$saisirComite', $personnel_division='$saisirPoule',
			$personnel_type='$type',$personnel_taille='$taille'
		WHERE id='$id' " ); 
																				

header ('location: pageChoix.php?comiteA=&division=&poule=');
?>