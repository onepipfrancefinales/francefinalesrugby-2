<?php require '../../connect/connexion1.php';

$saison=2069;								  
$type=93216080402;
/*
$tabId = array(110, 120, 130, 135, 140, 150, 160, 170, 180, 190,
								   240, 250, 260, 270,
									280, 285, 290);

*/
require '../../fichierConfig.php';

foreach ($tabId as $id)
{
							 
$idAnnee=$saison*10000+$id;

//ajout des lignes dans la table bdpffrance
$reponse = $bdd->query ("INSERT INTO bdpffrance2023(idAnnee, id, type, saison) 
									  VALUES('$idAnnee','$id', '$type','$saison')");									  

//ajout des lignes dans la table bdpffrance_2								  

$reponse = $bdd->query ("INSERT INTO bdpffrance_22035(idAnnee, id, saison) 
									  VALUES('$idAnnee','$id','$saison')");	



//ajout des lignes dans la table bdpffrance_date								  

$reponse = $bdd->query ("INSERT INTO bdpffrance_date2035(idAnnee, id, saison) 
									  VALUES('$idAnnee','$id','$saison')");										  
							 


echo "Création de la ligne ".''.$id.''."<br />" ;
									  
}
echo "dans les tables bdpffrance, bdpffrance_2 et bdpffrance_date"."<br />";	
echo "avec un millesime ".$saison	;
?>