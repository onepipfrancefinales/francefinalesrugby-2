<?php
function bonusDefensif($idEquipe, $id_journee, $ligue, $bdd)
{
	echo $test;
	$tableMatch = $ligue."_matchs";
	$tableEquipe = $ligue."_equipes";
	$tableEquipesresultat = $ligue."_equipesresultat";
	$id = $id_equipe_ext;
	$journee = "J".substr($id_journee,-2);
	$bonusDefensifDeLaJournee = 1;
	echo $id; echo "<br>";
	echo $journee	; echo "<br>";
	



	//récupération  des bonus déjà acquis dans la table equipes
	 $requete=$bdd->query("
			SELECT penalite
			FROM $tableEquipe 
			WHERE 	id= '$id'");
	 
	 while ($row = $requete->fetch())
			{ 
			$BonusDejaAcquis = $row[0];
			}
	
	 //somme des bonus déjà acquis plus le bonus de la journée
	 $totalBonus = $BonusDejaAcquis + $bonusDefensifDeLaJournee; echo "<br>";
	 
	 // Mise à jour des tables ( equipes, equipesresultats)
	 $bdd->exec("UPDATE $tableEquipe
				 SET	penalite ='$totalBonus'
				 WHERE  id = '$id'");
	 
	 $bdd->exec("UPDATE $tableEquipesresultat
				SET $journee ='$bonusDefensifDeLaJournee'
				WHERE id =$id ");
	 
	 // ajouter la somme des bonus defensifs
}

function bonusOffensif($idEquipe, $journee,$bdd)
{
	
//récupération  des données dans la table equipes
	 $requete=$bdd->query("
			SELECT penalite
			FROM $tableEquipe 
			WHERE 	id= '$id' AND id_champ = '$id_champ'");
	 
	 while ($row = $requete->fetch())
			{ 
			$BonusDejaAcquis = $row[0];
			}
			
	 //somme des bonus déjà acquis plus le bonus de la journée
	 $totalBonus = $BonusDejaAcquis + $bonusDefensifDeLaJournee;
		 
	 // Mise à jour des tables ( equipes, equipesresultats)
	 $bdd->exec("DELETE FROM $tableEquipe WHERE id=$id ");
	 $bdd->exec("INSERT INTO $tableEquipe
				 	 VALUES ('$id' ,'$id_champ', '$id_club', '$totalBonus')"); 
	
	$bdd->exec("update $tableEquipesresultat
				set $journee ='1'
				where id =$id ");	
	
}


?>