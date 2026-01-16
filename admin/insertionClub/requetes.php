<?php
//require '../../connect/connexion1.php';

// Insertion dans la table bdclubs
/*
$bdd->exec("INSERT INTO bdclubs(id, nom_1, nom_2, nom_3, nom_4, fusion, idffr, type, sigle, ligue, siglecomite, sigleLigue, comite, code)
			VALUES('$id','$nom','','','','','$idffr','$type','$nomComplet','$ligue','$comite','','','$id')");


// Insertion dans la table bdsaisons 

$bdd->exec("INSERT INTO bdsaisons(id, nom_1, siglecomite, ligue, type)
			VALUES('$id','$nom','$comite','$ligue','$type')");

*/
// Insertion dans la table infosclub
echo "id".$id;
$bdd->exec("INSERT INTO infosclub(id)
			VALUES('$id')");
			
			


echo "<br />";
echo $id; echo "<br />";
echo $nom; echo "<br />";
echo $idffr; echo "<br />";
echo $type; echo "<br />";
echo $nomComplet; echo "<br />";
echo $ligue; echo "<br />";
echo $comite; echo "<br />";
echo "insertion effectuée";			
	
?>


