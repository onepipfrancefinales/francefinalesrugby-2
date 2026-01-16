<?php

// ****** Connection à la base ******

if ($ligueComite == "phpf1" or $ligueComite == "phpfed2" or $ligueComite == "phpfed3NE" or $ligueComite == "phpfed3GS" or $ligueComite == "phpfem")
require '../../../connect1/connection3.php';
else
require '../../../connect1/connection2.php';


// lecture et affichage de la table equipes

//echo "ligueComite : ".$phpComite;echo "<br />";
//echo "jounee : ".$journeeEquipesResultat."<br />";


$phpComite = $ligueComite."_equipes";



// Etat de la table equipes avant modification
echo "<br />";
echo "etat initial";
echo "<br />";echo "<br />";

echo "<br />";
$reponse = $bdd->query ("SELECT id_club, id_champ, penalite
						 FROM $phpComite
						 WHERE id_champ = $poule and id =$equipeId");
						 
						 
						while ($donnees =$reponse->fetch_array())
						{
							echo "id_club:".$donnees['id_club'].",";
							echo "id_champ :".$donnees['id_champ'].",";
							$penalite = $donnees['penalite'];
							echo "penalité :".$penalite;
							echo "<br />";
						}
						
						
						
//Modification de la table Equipes						

$penaliteModifiee = $penalite + 1;
//echo $penalite ." + 1 =".$penaliteModifiee;

//$query = " UPDATE $phpComite
//SET penalite = $penaliteModifiee
//WHERE id = $equipeId";

//$result= mysql_query($query);
	


echo "<br />";						
//Etat de la table equipes après modification

$reponse = $bdd->query ("SELECT id_club, id_champ, penalite
						 FROM $phpComite
						 WHERE id_champ = $poule and id =$equipeId");
						 
						 
						while ($donnees =$reponse->fetch_array())
						{
							echo "id_club:".$donnees['id_club'].",";
							echo "id_champ :".$donnees['id_champ'].",";
							echo "penalite :".$donnees['penalite'];
							echo "<br />";
						}
												


echo "<br />";



