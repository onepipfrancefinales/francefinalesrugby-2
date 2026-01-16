
<?php
require('../../connect/connexion6.php');


$tabDivisions =array('110', '120', '130', '135', '140', '150');
foreach ($tabDivisions as $division)
{

    listeEquipesReg($division, 20 , 'phppro', $bdd);
//listeEquipesPro($division, 10, $bdd);
}

$tabDivisions =array('171', '181', '191');
foreach ($tabDivisions as $division)
{

    listeEquipesReg($division, 20 , 'phpab', $bdd);
//listeEquipesPro($division, 10, $bdd);
}
/*
function listeEquipesPro($division, $ligue ,$bdd)
{

$minLigue = $ligue * 100000;
$maxLigue = ($ligue + 1 ) * 100000;

$minDivision = 990000 + $division;
$maxDivision = $minDivision + 8;

$tabEquipes = array();
$tabChamps = array();
 
$reponse = $bdd->query("SELECT phppro_clubs.nom, phppro_equipes.id_champ 
						FROM phppro_equipes, phppro_clubs
						WHERE phppro_equipes.id_club BETWEEN '$minLigue' AND '$maxLigue'  
                        AND phppro_clubs.id = phppro_equipes.id_club
						AND phppro_equipes.id_champ BETWEEN '$minDivision' AND '$maxDivision' 
						");
 
	while ($row =  $reponse->fetch()) {
		$tabEquipes[] = $row[0];
		$tabChamps[] = $row[1];
	}

	foreach ($tabEquipes as $equipe){
        echo $equipe."<br>";
    } 
}


function listeEquipesFed3($division, $ligue ,$bdd)
{

$minLigue = $ligue * 100000;
$maxLigue = ($ligue + 1 ) * 100000;

$minDivision = 990000 + $division;
$maxDivision = $minDivision + 8;

$tabEquipes = array();
$tabChamps = array();
 
$reponse = $bdd->query("SELECT phppro_clubs.nom, phppro_equipes.id_champ 
						FROM phppro_equipes, phppro_clubs
						WHERE phppro_equipes.id_club BETWEEN '$minLigue' AND '$maxLigue'  
                        AND phppro_clubs.id = phppro_equipes.id_club
						AND phppro_equipes.id_champ BETWEEN '$minDivision' AND '$maxDivision' 
						");
 
	while ($row =  $reponse->fetch()) {
		$tabEquipes[] = $row[0];
		$tabChamps[] = $row[1];
	}

	foreach ($tabEquipes as $equipe){
        echo $equipe."<br>";
    } 
}

*/

function listeEquipesReg($division, $ligue , $base, $bdd)
{

$minLigue = $ligue * 100000;
$maxLigue = ($ligue + 1 ) * 100000;

if ($base == "phppro") {
$minDivision = 990000 + $division;
$maxDivision = $minDivision + 8;
}
else
{
$minDivision = ($ligue * 10000) + $division;
$maxDivision = $minDivision + 8;

}

//$base = "phppro";
$tableClubs = $base."_clubs" ;
$tableClubsId = $base."_clubs.id";
$tableClubsNom = $base."_clubs.nom";

$tableEquipes = $base."_equipes";
$tableEquipesIdClub = $base."_equipes.id_club";
$tableEquipesIdChamp = $base."_equipes.id_champ";

$tabEquipes = array();
$tabChamps = array();
 
$reponse = $bdd->query("SELECT $tableClubsNom, $tableEquipesIdChamp
						FROM $tableEquipes, $tableClubs
						WHERE $tableEquipesIdClub BETWEEN '$minLigue' AND '$maxLigue'  
                        AND $tableClubsId = $tableEquipesIdClub
						AND $tableEquipesIdChamp BETWEEN '$minDivision' AND '$maxDivision' 
						");
 
	while ($row =  $reponse->fetch()) {
		$tabEquipes[] = $row[0];
		$tabChamps[] = $row[1];
	}

	foreach ($tabEquipes as $equipe){
        echo $equipe."<br>";
    } 
}
?>