<?php
function tousLesChampions($bdd)
{
	global $tabSaison, $tabChampion, $nbreEdition, $nbreChampion, $finaleChampion;

	//*******************************************************
	//Nbre d'éditions
	$requete = $bdd->query("SELECT COUNT(*) 
						FROM bdequipe1		
						WHERE titre='Champion' and rang='110'");

	$row = $requete->fetch();
	$nbreEdition = $row[0];

	//affichage de toutes les éditions
	$tabSaison = array();
	$tabChampion = array();
	$requete = $bdd->query("SELECT saison, champion 
						FROM bdequipe1		
						WHERE titre='Champion' and rang='110'");

	while ($row = $requete->fetch()) {
		$tabSaison[] = $row[0];
		$tabChampion[] = $row[1];
	}
}
/*
function participation($bdd)
{	
Global  $nbreChampion, $tabChampionUnique, $nbreParticipation, $nbreVictoire;

//Nbre de champions
$requete = $bdd->query("
		   SELECT count(DISTINCT champion)
		   FROM bdequipe1	
		   WHERE titre='Champion' and rang='110'
		  ");

$row = $requete->fetch();
$nbreChampion = $row[0];

//affichage des paticipations
$tabChampionUnique = array();
$requete = $bdd->query("
		   SELECT distinct champion
		   FROM bdequipe1	
		   WHERE (titre='Champion' or titre='Vice champion') and rang='110'");

while ($row = $requete->fetch())
		{
		 $tabChampionUnique[]=$row[0];
		}
	$nbreParticipation = array();
	for ($i=0; $i< $nbreChampion; $i++)
		{
		
		$requete2 = $bdd->query("
				SELECT count(champion)
				FROM bdequipe1	
				WHERE champion='$tabChampionUnique[$i]' and rang='110'");
		$row = $requete2->fetch();
		
		$nbreParticipation[] =  $row[0];
		}
		
		
//affichage des victoires
$tabChampionUnique2 = array();
$requete = $bdd->query("
		   SELECT distinct champion
		   FROM bdequipe1	
		   WHERE titre='Champion' and rang='110'");

while ($row = $requete->fetch())
		{
		 $tabChampionUnique2[]=$row[0];
		}
	$nbreVictoire = array();
	for ($i=0; $i< $nbreChampion; $i++)
		{
		
		$requete2 = $bdd->query("
				SELECT count(champion)
				FROM bdequipe1	
				WHERE champion='$tabChampionUnique2[$i]' and rang<'180'");
		$row = $requete2->fetch();
		
		$nbreVictoire[] =  $row[0];
		
		//echo $nbreVictoire[$i];echo "<br />";
		}	
		
}
*/
//***************************************************
//***************************************************

function participation($bdd)
{
	global $tabNomEquipe, $tabNbre, $tabNbreTrier, $nbreParticipation, $cpteMonTableau, $monTableau;

	//nombre de participants différents
	$requete = $bdd->query(" SELECT count(distinct champion)
 FROM bdequipe1
 WHERE champion != '-' AND champion != '0' AND champion != '-0' AND champion != '--- --- --- ---'
 AND champion !='Pas de championnat' AND champion != '' AND champion != '----' AND championnat='de France' AND RANG<'225'");

	$row = $requete->fetch();
	$nbreParticipation = $row[0];

	// regroupement du nombre de participation par équipes	
	$tabNomEquipe = array();
	$tabNbre = array();

	$requete = $bdd->query(" SELECT champion, count(*)
 FROM bdequipe1
 WHERE champion != '-' AND champion != '0' AND champion != '-0' AND champion != '--- --- --- ---'
 AND champion != '' AND champion != '----'AND championnat='de France' AND RANG < '225'
 GROUP BY champion");

	while ($row = $requete->fetch()) {
		// echo $row[0].''.$row[1]."<br />";

		$tabNomEquipe[] = $row[0];
		$tabNbre[] = $row[1];
		$tabNbreTrier[] = $row[1];
	}

	//tri a bulle
	for ($i = 0; $i < $nbreParticipation - 1; $i++) {
		for ($j = $nbreParticipation - 2; $j >= $i; $j--) {
			if ($tabNbreTrier[$j + 1] > $tabNbreTrier[$j]) {
				$temp = $tabNbreTrier[$j + 1];
				$tabNbreTrier[$j + 1] = $tabNbreTrier[$j];
				$tabNbreTrier[$j] = $temp;
			}
		}
	}

	// construction d'un nouveau tableau
	$monTableau = array();
	for ($j = 0; $j < $nbreParticipation - 2; $j++) {
		//echo $tabNbreTrier[$j];
		if ($tabNbreTrier[$j] > $tabNbreTrier[$j + 1]) {
			array_push($monTableau, $tabNbreTrier[$j]);
		}
	}
	$cpteMonTableau = count($monTableau);
	//echo $cpteMonTableau;
	for ($y = 0; $y < $cpteMonTableau; $y++) {
		//echo $monTableau[$y];echo "<br/>";
	}
	echo "<br />";
	//echo array_unique(
	//nombre de champions

	global $nbreChampion;

	$requete = $bdd->query(" SELECT count(distinct champion)
 FROM bdequipe1
 WHERE titre = 'Champion' AND champion != '-' AND champion != '0' AND champion != '-0' AND champion != '--- --- --- ---'
 AND champion != '' AND champion != '----' AND championnat='de France' AND RANG < '225'");

	$row = $requete->fetch();
	$nbreChampion = $row[0];

	//echo "nbre de champion : ".$nbreChampion;

	$tabNomEquipe2 = array();
	$tabNbre2 = array();

	$requete = $bdd->query(" SELECT champion, count(*)
 FROM bdequipe1
 WHERE titre = 'Champion' AND champion != '-' AND champion != '0' AND champion != '-0' AND champion != '--- --- --- ---'
 AND champion != '' AND champion != '----'AND championnat='de France' AND RANG < '225'
 GROUP BY champion");

	while ($row = $requete->fetch()) {
		// echo $row[0].''.$row[1]."<br />";

		$tabNomEquipe2[] = $row[0];
		$tabNbre2[] = $row[1];
		//$tabNbreTrier[]=$row[1]; 
	}
}

function titresConsecutifs2($equipe, $nbre, $bdd)
{
	
	if ($equipe != "Pas de championnat") {
	
	$saison = array();
	$requete = $bdd->query(" SELECT saison 
 FROM bdequipe1
 WHERE champion ='$equipe' and titre ='Champion' AND championnat='de France' 
 AND RANG<'225'");

	while ($row = $requete->fetch()) {
		$saison[] = $row[0];
	}
	//Doublé
	for ($i = 0; $i <= $nbre + 3; $i++) {
		if (isset($saison[$i])) $saison[$i] = $saison[$i];
		else $saison[$i] = 0;
	}
	for ($i = 0; $i < $nbre; $i++) {
		if (
			$saison[$i] + 1 != $saison[$i + 1]
			and $saison[$i + 1] + 1 == $saison[$i + 2]
			and $saison[$i + 2] + 1 != $saison[$i + 3]
		) {
			echo $equipe . ' : ' . $saison[$i + 1] . '-' . $saison[$i + 2] . "<br/>";
		}
	}
}
}

function titresConsecutifs3($equipe, $nbre, $bdd)
{
	
	if ($equipe != "Pas de championnat") {
	
	$saison = array();
	$requete = $bdd->query(" SELECT saison 
 FROM bdequipe1
 WHERE champion ='$equipe' and titre ='Champion' AND championnat='de France' 
 AND RANG<'225'");

	while ($row = $requete->fetch()) {
		$saison[] = $row[0];
	}
	//triplé
	for ($i = 0; $i <= $nbre + 1; $i++) {
		if (isset($saison[$i])) $saison[$i] = $saison[$i];
		else $saison[$i] = 0;
	}

	if ($nbre == 3) {
		if (
			$saison[0] > 0 and $saison[1] > 0  and $saison[2] > 0 and
			$saison[0] + 1 == $saison[1] and $saison[1] + 1 == $saison[2]
		) {
			echo $equipe . ' : ' . $saison[0] . '-' . $saison[1] . '-' . $saison[2] . "<br/>";
		}
	}


	for ($i = 0; $i < $nbre; $i++) {
		if (
			$saison[$i] + 1 != $saison[$i + 1]
			and $saison[$i + 1] + 1 == $saison[$i + 2]
			and $saison[$i + 2] + 1 == $saison[$i + 3] and $saison[$i + 3] + 1 != $saison[$i + 4]
		) {
			echo $equipe . ' : ' . $saison[$i + 0] . '-' . $saison[$i + 1] . '-' . $saison[$i + 2] . "<br/>";
		}
	}
}
}


function titresConsecutifs4($equipe, $nbre, $bdd)
{
	if ($equipe != "Pas de championnat") {
	
	$saison = array();
	$requete = $bdd->query(" SELECT saison 
 FROM bdequipe1
 WHERE champion ='$equipe' and titre ='Champion' AND championnat='de France' 
 AND RANG<'225'");

	while ($row = $requete->fetch()) {
		$saison[] = $row[0];
	}
	//quadruplé
	for ($i = 0; $i <= $nbre; $i++) {
		if (isset($saison[$i])) $saison[$i] = $saison[$i];
		else $saison[$i] = 0;
	}
	for ($i = 0; $i < $nbre; $i++) {
		if ($saison[$i] + 1 == $saison[$i + 1] and $saison[$i + 1] + 1 == $saison[$i + 2] and $saison[$i + 2] + 1 == $saison[$i + 3]) {
			echo $equipe . ' : ' . $saison[$i] . '-' . $saison[$i + 1] . '-' . $saison[$i + 2] . '-' . $saison[$i + 3] . "<br/>";
		}
	}
}
}
