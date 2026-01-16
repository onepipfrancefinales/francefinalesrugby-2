<?php
function testPresence () 
{

	echo "ok j'arrive";
}

function rechercheFusion ($equipe, $bdd) {
	global $codeFusion;
$reponse = $bdd->query("SELECT fusion
							FROM bdclubs
							WHERE id ='$equipe'");

	$row = $reponse->fetch();
	$codeFusion = $row[0];


	if ($codeFusion != 0)
	{
		echo "codeFusion : ".$codeFusion;
	}

}




function rechercheParNomDeVille($chaine, $bdd)
{
	global $nbreDeClub, $tabClubs, $tabId, $tabType, $tabSaisonEnCoursNom;

	$reponse = $bdd->query("SELECT COUNT(*)
							FROM bdclubs
							WHERE nom_4 ='$chaine'");

	$row = $reponse->fetch();
	$nbreDeClub = $row[0];
	//echo "nombre de clubs : ".$nbreDeClub;

	if ($nbreDeClub > 1) {

		$tabClubs = array();
		$tabId = array();
		$tabType = array();
		$tabSaisonEnCours = array();
		$tabSaisonEnCoursNom = array();

		$reponse = $bdd->query("SELECT bdclubs.sigle, bdclubs.id ,bdclubs.type
							FROM bdclubs
							WHERE bdclubs.nom_4 ='$chaine'
							ORDER BY bdclubs.id  ASC");

		while ($row = $reponse->fetch()) {
			$tabClubs[] = $row[0];
			$tabId[] = $row[1];
			$tabType[] = $row[2];	
		}


		for ($i = 0; $i < $nbreDeClub; $i++) {

		//	echo	$tabClubs[$i].$tabId[$i]. $tabType[$i]."<br>";

			$tabIdReduit[$i] = substr($tabId[$i], 2, 5);
			//echo $tabIdReduit[$i];
			//echo "<br>";

		$reponse2 = $bdd->query("SELECT bdsaisons.en_cours, bddivisions.division
								FROM bdsaisons
								INNER JOIN bddivisions ON bdsaisons.en_cours = bddivisions.id
								WHERE bdsaisons.id ='$tabIdReduit[$i]'
								");
								

			while ($row = $reponse2->fetch()) {
				$tabSaisonEnCours[] = $row[0];
				$tabSaisonEnCoursNom[] = $row[1];
			}
		
		//	echo $tabIdReduit[$i].' - '.$tabSaisonEnCoursNom[$i];
		//	echo "<br>";
		//	echo substr($tabId[$i], 2, 5) . "-" . $tabClubs[$i] . "-" . $tabType[$i] . ' ( ' .$tabSaisonEnCours[$i] . $tabSaisonEnCoursNom[$i] . ' )' . "<br>";
}
		/***
		for ($j = 0; $j <= $nbreDeClub; $j++) {
			echo substr($tabId[$j], 2, 5) . "-" . $tabClubs[$j] . "-" . $tabType[$j] . ' ( ' . $tabSaisonEnCoursNom[$j] . ' )' . "<br>";
		}
			*/
	}
}




function changementNom($id_equipe, $width, $bdd)
{

	//echo "id_equipe".$id_equipe;

	$reponse = $bdd->query("SELECT COUNT(*)
							FROM bdchange_nom 
							WHERE id_equipe = '$id_equipe' 
	
	 ");

	$row = $reponse->fetch();
	$nbreChangement = $row[0];
	//echo "change : ".$nbreChangement;
	$tabChangementDate[] = array();
	$tabChangementNom[] = array();


	if ($nbreChangement > 0) {

		$res = $bdd->query("SELECT annee, nom
	FROM bdchange_nom 
	WHERE id_equipe = '$id_equipe' ORDER BY 'id' DESC
	 ");

		while ($row = $res->fetch()) {
			$chgmntDate[] = $row[0];
			$chgmntNom[] = $row[1];
		}
?>

		<table width="<?php echo $width; ?>" class="marginAuto borderWidth1">
			<tr>
				<td class="titre" colspan="2"> Au fil du temps... </td>
			</tr>

			<?php

			for ($i = 0; $i <= $nbreChangement; $i++) {

			?>
				<tr>
					<td class="saisie"><?php echo $chgmntDate[$i]; ?></td>
					<td class="saisie"><?php echo $chgmntNom[$i]; ?> </td>
				</tr>
			<?php

			}
			echo "</table>";
		}
	}

	function fusionDeClubs2($equipe, $bdd)
	{
		
		global $clubNom1, $clubNom2, $clubNom3, $clubNom4, $clubFusion1, $clubFusion2, $clubFusion3, $clubFusion4, $fusion1, $fusion2, $fusion3, $fusion4, $anneeFusion, $nouveauNomClub;

		$res = $bdd->query("SELECT fusion1, fusion2, fusion3, fusion4, annee, nom
				   FROM bdfusion 
				   WHERE id = '$equipe' 
					");

		while ($row = $res->fetch()) {
			$fusion1 = $row[0];
			$fusion2 = $row[1];
			$fusion3 = $row[2];
			$fusion4 = $row[3];
			$anneeFusion = $row[4];
			$nouveauNomClub = $row[5];
		}

		// bdclubs : Récupèration du nom et sigle

		$res1 = $bdd->query("SELECT sigle, nom_1 , fusion
				   FROM bdclubs 
				   WHERE id = '$fusion1'");

		while ($row = $res1->fetch()) {
			$clubFusion1 = $row[0];
			$clubNom1 = $row[1];
			$statut1 = $row[2];
		}

		$res2 = $bdd->query("SELECT sigle, nom_1 , fusion
				   FROM bdclubs 
				   WHERE id = '$fusion2'");

		while ($row = $res2->fetch()) {
			$clubFusion2 = $row[0];
			$clubNom2 = $row[1];
			$statut2 = $row[2];
		}

		$res3 = $bdd->query("SELECT sigle, nom_1 ,fusion
	FROM bdclubs 
	WHERE id = '$fusion3'");

		while ($row = $res3->fetch()) {
			$clubFusion3 = $row[0];
			$clubNom3 = $row[1];
			$statut3 = $row[2];
		}

		$res4 = $bdd->query("SELECT sigle, nom_1 ,fusion
		FROM bdclubs 
		WHERE id = '$fusion4'");

		while ($row = $res4->fetch()) {
			$clubFusion4 = $row[0];
			$clubNom4 = $row[1];
			$statut4 = $row[2];
		}
	}



	function fusionDeClubs($equipe, $nouveauClub, $bdd)
	{

		global $clubFusion1, $clubFusion2, $clubFusion3, $clubFusion, $fusion1, $fusion2, $fusion3, $fusion4, $anneeFusion, $nouveauNomClub;
		$res = $bdd->query("SELECT fusion1, fusion2, fusion3, fusion4, annee, nom
				   FROM bdfusion
				   WHERE id = '$equipe' 
					");

		while ($row = $res->fetch()) {
			$fusion1 = $row[0];
			$fusion2 = $row[1];
			$fusion3 = $row[2];
			$fusion4 = $row[3];
			$anneeFusion = $row[4];
			$nouveauNomClub = $row[5];
		}

		// bdclubs : Récupèration du nom et sigle, statut
		$nbreClubFusionne = 5;
		for ($p = 1; $p < $nbreClubFusionne; $p++) {

			$fusion =  ${"fusion" . $p};

			$res1 = $bdd->query("SELECT sigle, nom_1 , fusion
				   FROM bdclubs 
				   WHERE id = '$fusion' 
					");

			while ($row = $res1->fetch()) {
				${"clubFusion" . $p} = $row[0];
				${"clubNom" . $p} = $row[1];
				${"statut" . $p} = $row[2];
			}
		}

		// bdequipe1 Récupèration d'un tableau comportant les titres des équipes premières
		$tabPalmEquipe1 = array();
		$tabPalmEquipe2 = array();
		$tabPalmJeunes = array();
		$tabPalmEurope = array();
		$tabPalmChallenge =  array();


		$tabBdd = array('bdequipe1');

		//foreach ($tabBdd as $baseDeDonnees) {

		/************ Equipe 1*************************/
		if ($nouveauClub == 0) {

			$nbreClubFusionne = 5;
			for ($j = 1; $j < $nbreClubFusionne; $j++) {

				$clubNom = ${"clubNom" . $j};
				//echo "test nom".$clubNom;

				$saisonClub = array();
				$titreClub = array();
				$divisionClub = array();
				$championnatClub = array();
				$championClub = array();

				//*-------   nombre de titres    -------*/
				$result4 = $bdd->query("SELECT COUNT(*)
	FROM bdequipe1
	WHERE champion = '$clubNom' AND (titre = 'Champion' OR titre ='Vice champion')
	");

				$row = $result4->fetch();
				${"nbTitreClub" . $j} = $row[0];

				/*-------- liste des titres-----------------*/

				$resClub1 = $bdd->query("SELECT saison, titre, championnat, division, champion
	FROM bdequipe1 
	WHERE  champion ='$clubNom'  AND (titre = 'Champion' OR titre ='Vice champion')
	 ");

				while ($row = $resClub1->fetch()) {
					$saisonClub[] = $row[0];
					$titreClub[] = $row[1];
					$championnatClub[] = $row[2];
					$divisionClub[] = $row[3];
					$championClub[] = $row[4];
				}

				for ($i = 0; $i <= ${"nbTitreClub" . $j}  - 1; $i++) {

					${"saisonClub" . $j}[$i] = $saisonClub[$i];
					${"titreClub" . $j}[$i] = $titreClub[$i];
					${"championnatClub" . $j}[$i] = $championnatClub[$i];
					${"divisionClub" . $j}[$i] = $divisionClub[$i];

					$insererLignes[$i] =  ${"saisonClub" . $j}[$i] . ' ' . ${"titreClub" . $j}[$i] . ' ' . ${"championnatClub" . $j}[$i]  . ' ' . ${"divisionClub" . $j}[$i] . ' ' . "(" . $clubNom . ")";
					array_push($tabPalmEquipe1, $insererLignes[$i]);
				}
			}
		}


		/************ Equipe 2*************************/
		if ($nouveauClub == 0) {

			$nbreClubFusionne = 5;
			for ($j = 1; $j < $nbreClubFusionne; $j++) {

				$clubNom = ${"clubNom" . $j};
				//echo "test nom".$clubNom;

				$saisonClub = array();
				$titreClub = array();
				$divisionClub = array();
				$championnatClub = array();
				$championClub = array();

				//*-------   nombre de titres    -------*/
				$result4 = $bdd->query("SELECT COUNT(*)
FROM bdjeunes
WHERE champion = '$clubNom' AND (titre = 'Champion' OR titre ='Vice champion')
");

				$row = $result4->fetch();
				${"nbTitreClub" . $j} = $row[0];

				/*-------- liste des titres-----------------*/

				$resClub1 = $bdd->query("SELECT saison, titre, championnat, division, champion
FROM bdjeunes
WHERE  champion ='$clubNom'  AND (titre = 'Champion' OR titre ='Vice champion')
");

				while ($row = $resClub1->fetch()) {
					$saisonClub[] = $row[0];
					$titreClub[] = $row[1];
					$championnatClub[] = $row[2];
					$divisionClub[] = $row[3];
					$championClub[] = $row[4];
				}

				for ($i = 0; $i <= ${"nbTitreClub" . $j}  - 1; $i++) {

					${"saisonClub" . $j}[$i] = $saisonClub[$i];
					${"titreClub" . $j}[$i] = $titreClub[$i];
					${"championnatClub" . $j}[$i] = $championnatClub[$i];
					${"divisionClub" . $j}[$i] = $divisionClub[$i];

					$insererLignes[$i] =  ${"saisonClub" . $j}[$i] . ' ' . ${"titreClub" . $j}[$i] . ' ' . ${"championnatClub" . $j}[$i]  . ' ' . ${"divisionClub" . $j}[$i] . ' ' . "(" . $clubNom . ")";
					array_push($tabPalmEquipe2, $insererLignes[$i]);
				}
			}
		}


		//	}
		/************ Equipe 2*************************/


		arsort($tabPalmEquipe1);
		echo "<div id=\"palmares\" class=\"center\">";

		foreach ($tabPalmEquipe1 as $valeur) {
			echo ($valeur . "<br>");
		}
		echo "<div>";



		echo "<br>";
		echo "<br>";

		arsort($tabPalmEquipe2);
		echo "<div id=\"palmares\" class=\"center\">";

		foreach ($tabPalmEquipe2 as $valeur) {
			echo ($valeur . "<br>");
		}
		echo "<div>";
	}

	/************************************************ */

	function fusionDeClubsEquipe1($equipe, $nouveauClub, $bdd)
	{
		global $clubFusion1, $clubFusion2, $clubFusion3, $clubFusion, $fusion1, $fusion2, $fusion3, $fusion4, $anneeFusion, $nouveauNomClub;
		$res = $bdd->query("SELECT fusion1, fusion2, fusion3, fusion4, annee, nom
			   FROM bdfusion
			   WHERE id = '$equipe' 
				");

		while ($row = $res->fetch()) {
			$fusion1 = $row[0];
			$fusion2 = $row[1];
			$fusion3 = $row[2];
			$fusion4 = $row[3];
			$anneeFusion = $row[4];
			$nouveauNomClub = $row[5];
		}

		// bdclubs : Récupèration du nom et sigle, statut
		$nbreClubFusionne = 5;
		for ($p = 1; $p < $nbreClubFusionne; $p++) {

			$fusion =  ${"fusion" . $p};

			$res1 = $bdd->query("SELECT sigle, nom_1 , fusion
			   FROM bdclubs 
			   WHERE id = '$fusion' 
				");

			while ($row = $res1->fetch()) {
				${"clubFusion" . $p} = $row[0];
				${"clubNom" . $p} = $row[1];
				${"statut" . $p} = $row[2];
			}
		}

		// bdequipe1 Récupèration d'un tableau comportant les titres des équipes premières
		$tabPalmEquipe1 = array();

		/************ Equipe 1*************************/
		if ($nouveauClub == 0) {

			$nbreClubFusionne = 5;
			for ($j = 1; $j < $nbreClubFusionne; $j++) {

				$clubNom = ${"clubNom" . $j};

				$saisonClub = array();
				$titreClub = array();
				$divisionClub = array();
				$championnatClub = array();
				$championClub = array();

				//*-------   nombre de titres    -------*/
				$result4 = $bdd->query("SELECT COUNT(*)
FROM bdequipe1
WHERE champion = '$clubNom' AND (titre = 'Champion' OR titre ='Vice champion')
");

				$row = $result4->fetch();
				${"nbTitreClub" . $j} = $row[0];

				/*-------- liste des titres-----------------*/

				$resClub1 = $bdd->query("SELECT saison, titre, championnat, division, champion
FROM bdequipe1 
WHERE  champion ='$clubNom'  AND (titre = 'Champion' OR titre ='Vice champion')
 ");

				while ($row = $resClub1->fetch()) {
					$saisonClub[] = $row[0];
					$titreClub[] = $row[1];
					$championnatClub[] = $row[2];
					$divisionClub[] = $row[3];
					$championClub[] = $row[4];
				}

				for ($i = 0; $i <= ${"nbTitreClub" . $j}  - 1; $i++) {

					${"saisonClub" . $j}[$i] = $saisonClub[$i];
					${"titreClub" . $j}[$i] = $titreClub[$i];
					${"championnatClub" . $j}[$i] = $championnatClub[$i];
					${"divisionClub" . $j}[$i] = $divisionClub[$i];

					$insererLignes[$i] =  ${"saisonClub" . $j}[$i] . ' ' . ${"titreClub" . $j}[$i] . ' ' . ${"championnatClub" . $j}[$i]  . ' ' . ${"divisionClub" . $j}[$i] . ' ' . "(" . $clubNom . ")";
					array_push($tabPalmEquipe1, $insererLignes[$i]);
				}
			}

			arsort($tabPalmEquipe1);
			echo "<div id=\"palmares\" class=\"center\">";

			foreach ($tabPalmEquipe1 as $valeur) {
				echo ($valeur . "<br>");
			}
			echo "<div>";
		}
	}

	function fusionDeClubsEquipe2($equipe, $nouveauClub, $bdd)
	{
		global $clubFusion1, $clubFusion2, $clubFusion3, $clubFusion, $fusion1, $fusion2, $fusion3, $fusion4, $anneeFusion, $nouveauNomClub;
		$res = $bdd->query("SELECT fusion1, fusion2, fusion3, fusion4, annee, nom
			   FROM bdfusion
			   WHERE id = '$equipe' 
				");

		while ($row = $res->fetch()) {
			$fusion1 = $row[0];
			$fusion2 = $row[1];
			$fusion3 = $row[2];
			$fusion4 = $row[3];
			$anneeFusion = $row[4];
			$nouveauNomClub = $row[5];
		}

		// bdclubs : Récupèration du nom et sigle, statut
		$nbreClubFusionne = 5;
		for ($p = 1; $p < $nbreClubFusionne; $p++) {

			$fusion =  ${"fusion" . $p};

			$res1 = $bdd->query("SELECT sigle, nom_1 , fusion
			   FROM bdclubs 
			   WHERE id = '$fusion' 
				");

			while ($row = $res1->fetch()) {
				${"clubFusion" . $p} = $row[0];
				${"clubNom" . $p} = $row[1];
				${"statut" . $p} = $row[2];
			}
		}

		// bdequipe1 Récupèration d'un tableau comportant les titres des équipes premières
		$tabPalmEquipe2 = array();

		/************ Equipe 1*************************/
		if ($nouveauClub == 0) {

			$nbreClubFusionne = 5;
			for ($j = 1; $j < $nbreClubFusionne; $j++) {

				$clubNom = ${"clubNom" . $j};

				$saisonClub = array();
				$titreClub = array();
				$divisionClub = array();
				$championnatClub = array();
				$championClub = array();

				//*-------   nombre de titres    -------*/
				$result4 = $bdd->query("SELECT COUNT(*)
FROM bdequipe2
WHERE champion = '$clubNom' AND (titre = 'Champion' OR titre ='Vice champion')
");

				$row = $result4->fetch();
				${"nbTitreClub" . $j} = $row[0];

				/*-------- liste des titres-----------------*/

				$resClub1 = $bdd->query("SELECT saison, titre, championnat, division, champion
FROM bdequipe2
WHERE  champion ='$clubNom'  AND (titre = 'Champion' OR titre ='Vice champion')
 ");

				while ($row = $resClub1->fetch()) {
					$saisonClub[] = $row[0];
					$titreClub[] = $row[1];
					$championnatClub[] = $row[2];
					$divisionClub[] = $row[3];
					$championClub[] = $row[4];
				}

				for ($i = 0; $i <= ${"nbTitreClub" . $j}  - 1; $i++) {

					${"saisonClub" . $j}[$i] = $saisonClub[$i];
					${"titreClub" . $j}[$i] = $titreClub[$i];
					${"championnatClub" . $j}[$i] = $championnatClub[$i];
					${"divisionClub" . $j}[$i] = $divisionClub[$i];

					$insererLignes[$i] =  ${"saisonClub" . $j}[$i] . ' ' . ${"titreClub" . $j}[$i] . ' ' . ${"championnatClub" . $j}[$i]  . ' ' . ${"divisionClub" . $j}[$i] . ' ' . "(" . $clubNom . ")";
					array_push($tabPalmEquipe2, $insererLignes[$i]);
				}
			}

			arsort($tabPalmEquipe2);
			echo "<div id=\"palmares\" class=\"center\">";

			foreach ($tabPalmEquipe2 as $valeur) {
				echo ($valeur . "<br>");
			}
			echo "<div>";
		}
	}

	function fusionDeClubsJeunes($equipe, $nouveauClub, $bdd)
	{
		global $clubFusion1, $clubFusion2, $clubFusion3, $clubFusion, $fusion1, $fusion2, $fusion3, $fusion4, $anneeFusion, $nouveauNomClub;
		$res = $bdd->query("SELECT fusion1, fusion2, fusion3, fusion4, annee, nom
			   FROM bdfusion
			   WHERE id = '$equipe' 
				");

		while ($row = $res->fetch()) {
			$fusion1 = $row[0];
			$fusion2 = $row[1];
			$fusion3 = $row[2];
			$fusion4 = $row[3];
			$anneeFusion = $row[4];
			$nouveauNomClub = $row[5];
		}

		// bdclubs : Récupèration du nom et sigle, statut
		$nbreClubFusionne = 5;
		for ($p = 1; $p < $nbreClubFusionne; $p++) {

			$fusion =  ${"fusion" . $p};

			$res1 = $bdd->query("SELECT sigle, nom_1 , fusion
			   FROM bdclubs 
			   WHERE id = '$fusion' 
				");

			while ($row = $res1->fetch()) {
				${"clubFusion" . $p} = $row[0];
				${"clubNom" . $p} = $row[1];
				${"statut" . $p} = $row[2];
			}
		}

		// bdequipe1 Récupèration d'un tableau comportant les titres des équipes premières
		$tabPalmJeunes = array();

		/************ Equipe 1*************************/
		if ($nouveauClub == 0) {

			$nbreClubFusionne = 5;
			for ($j = 1; $j < $nbreClubFusionne; $j++) {

				$clubNom = ${"clubNom" . $j};

				$saisonClub = array();
				$titreClub = array();
				$divisionClub = array();
				$championnatClub = array();
				$championClub = array();

				//*-------   nombre de titres    -------*/
				$result4 = $bdd->query("SELECT COUNT(*)
FROM bdjeunes
WHERE champion = '$clubNom' AND (titre = 'Champion' OR titre ='Vice champion')
");

				$row = $result4->fetch();
				${"nbTitreClub" . $j} = $row[0];

				/*-------- liste des titres-----------------*/

				$resClub1 = $bdd->query("SELECT saison, titre, championnat, division, champion
FROM bdjeunes
WHERE  champion ='$clubNom'  AND (titre = 'Champion' OR titre ='Vice champion')
 ");

				while ($row = $resClub1->fetch()) {
					$saisonClub[] = $row[0];
					$titreClub[] = $row[1];
					$championnatClub[] = $row[2];
					$divisionClub[] = $row[3];
					$championClub[] = $row[4];
				}

				for ($i = 0; $i <= ${"nbTitreClub" . $j}  - 1; $i++) {

					${"saisonClub" . $j}[$i] = $saisonClub[$i];
					${"titreClub" . $j}[$i] = $titreClub[$i];
					${"championnatClub" . $j}[$i] = $championnatClub[$i];
					${"divisionClub" . $j}[$i] = $divisionClub[$i];

					$insererLignes[$i] =  ${"saisonClub" . $j}[$i] . ' ' . ${"titreClub" . $j}[$i] . ' ' . ${"championnatClub" . $j}[$i]  . ' ' . ${"divisionClub" . $j}[$i] . ' ' . "(" . $clubNom . ")";
					array_push($tabPalmJeunes, $insererLignes[$i]);
				}
			}

			arsort($tabPalmJeunes);
			echo "<div id=\"palmares\" class=\"center\">";

			foreach ($tabPalmJeunes as $valeur) {
				echo ($valeur . "<br>");
			}
			echo "<div>";
		}
	}


	/*******************************************/

	function consultationEvolutionClub($equipe, $bdd)
	{
		global $fusion;
		$reponse = $bdd->query("SELECT COUNT(*)
	FROM bdfusion
	WHERE id = '$equipe' and fusion1 IS NOT NULL
	");

		$row = $reponse->fetch();
		$presence = $row[0];

		if ($presence > 0) $fusion = true;
		else	$fusion = false;
	}

	/**************************************** */
function clubEnfant($id_equipe, $bdd) {
/*
GLOBAL $clubEnfant ;

$reponse = $bdd->query("
SELECT nom
FROM bdfusion
WHERE id = LIKE '%$id_equipe'");

while ($row = $reponse->fetch()) {
	$clubEnfant = $row[0];
	
}
echo "test :".$clubEnfant;
*/
}

function clubsParLigueEnEntente($idLigue, $type, $var1, $bdd)
	{
		global $nbreEquipe;
		$reponse = $bdd->query("
			 SELECT COUNT(*)
			 FROM bdsaisons, bdclubs
			 WHERE bdsaisons.id = substr(bdclubs.id,-5) 
			 AND bdsaisons.ligue = '$idLigue' 
			 AND bdclubs.type = '$type'
			 AND bdclubs.fusion > 0
			 AND bdsaisons.en_cours = '$var1'
			 ");

		$row = $reponse->fetch();
		$nbreEquipe = $row[0];
		// echo $nbreEquipe;

		// afficher le logo et le nom du club présent dans la division
		if ($nbreEquipe > 0) {
			$tabCodeEquipe = array();
			$tabNomClub = array();
			$tabIdFusion = array();
			$tabNomFusion = array();


			$reponse = $bdd->query("	
			  SELECT bdsaisons.id, bdclubs.nom_1, bdclubs.fusion
			  FROM bdsaisons, bdclubs
			  WHERE bdsaisons.id = substr(bdclubs.id,-5) 
			  AND bdsaisons.ligue = '$idLigue' 
			  AND bdclubs.type = '$type'
			  AND bdclubs.fusion > 0
		      AND bdsaisons.en_cours = '$var1'
			  ");

			while ($row = $reponse->fetch()) {
				$tabCodeEquipe[] = $row[0];
				$tabNomClub[] = $row[1];
				$tabIdFusion[] = $row [2];
			}

			for ($i = 0; $i < $nbreEquipe; $i++) {


				$reponse = $bdd->query("
				SELECT nom_1
				FROM bdclubs
				WHERE id = $tabIdFusion[$i]");
				
				while ($row = $reponse->fetch()) {
					$tabNomFusion[] = $row[0];
					
				}
				echo "<a href=\"pageclub00.php?champion=$tabCodeEquipe[$i]\"><img src=\"../images/blasons200_200/$tabCodeEquipe[$i].gif\" height=\"25\" width=\"25\">";
				echo "<a href=\"pageclub00.php?champion=$tabCodeEquipe[$i]\">$tabNomClub[$i]<i> ($tabNomFusion[$i])</i> </a>";
			
				echo "<br>";
			}
		} else {

			echo "-";
		}
	}



	/********************************************* */
	//Affichage du logo et du nom du club par division, par ligue et par genre 
	function clubsParLigue($idLigue, $type, $var1,$mode, $bdd)
	{
		global $nbreEquipe;
		$reponse = $bdd->query("
			 SELECT COUNT(*)
			 FROM bdsaisons, bdclubs
			 WHERE bdsaisons.id = substr(bdclubs.id,-5) 
			 AND bdsaisons.ligue = '$idLigue' 
			 AND bdclubs.type = '$type'
			 AND bdsaisons.en_cours = '$var1'
			 ");

		$row = $reponse->fetch();
		$nbreEquipe = $row[0];
		// echo $nbreEquipe;

		// afficher le logo et le nom du club présent dans la division
		if ($nbreEquipe > 0) {
			$tabCodeEquipe = array();
			$tabNomClub = array();

			$reponse = $bdd->query("	
			  SELECT bdsaisons.id, bdclubs.nom_1
			  FROM bdsaisons, bdclubs
			  WHERE bdsaisons.id = substr(bdclubs.id,-5) 
			  AND bdsaisons.ligue = '$idLigue' 
			  AND bdclubs.type = '$type'
		      AND bdsaisons.en_cours = '$var1'
			  ");

			while ($row = $reponse->fetch()) {
				$tabCodeEquipe[] = $row[0];
				$tabNomClub[] = $row[1];
			}

			for ($i = 0; $i < $nbreEquipe; $i++) {
				if ($mode != "smart")
				{
				echo "<a href=\"pageclub00.php?champion=$tabCodeEquipe[$i]\"><img src=\"../images/blasons200_200/$tabCodeEquipe[$i].gif\" height=\"25\" width=\"25\">";
				echo "<a href=\"pageclub00.php?champion=$tabCodeEquipe[$i]\">$tabNomClub[$i]</a>";
				}
				else
				{
				echo "<a href=\"ficheClubs/pageFicheClubs.php?mode=$mode&page=ligue&champion=$tabCodeEquipe[$i]\"><img src=\"../images/blasons200_200/$tabCodeEquipe[$i].gif\" height=\"25\" width=\"25\">";
				echo "<a href=\"ficheClubs/pageFicheClubs.php?mode=$mode&page=ligue&champion=$tabCodeEquipe[$i]\">$tabNomClub[$i]</a>";
		//echo "<a href=\"ficheClubs/pageFicheClubs.php?champion=$tabCodeEquipe[$i]\"><img src=\"../images/blasons200_200/$tabCodeEquipe[$i].gif\" height=\"25\" width=\"25\">";
		//echo " " . "<a href=\"ficheClubs/pageFicheClubs.php?champion=$tabCodeEquipe[$i]\">$tabNomClub[$i]</a>";			
	
	}
				//clubEnfant($tabCodeEquipe[$i],$bdd);
				echo "<br>";
			}
		} else {

			echo "-";
		}
	}

	//Affichage du logo et du nom du club par division, par comité et par genre 
	function clubsParComite($sigle, $type, $var1, $mode, $bdd)
	{
		global $nbreEquipe;
		// $terr_annee =("terr_".''.$saison);	
		//recupèrer le nombre d'équipes par division passée en paramètres
		$reponse = $bdd->query("	
						SELECT COUNT(*)
						FROM bdsaisons, bdclubs 
						WHERE bdsaisons.code_bdsaison=substr(bdclubs.id,-5)  
						and bdsaisons.siglecomite='$sigle' 
						AND bdclubs.type = '$type'
						and bdsaisons.en_cours = '$var1' 
						
						 ");

		$row = $reponse->fetch();
		$nbreEquipe = $row[0];
		//echo $nbreEquipe;

		//echo $nbreEquipe;

		// afficher le logo et le nom du club présent dans la division
		if ($nbreEquipe > 0) {
			$tabCodeEquipe = array();
			$tabNomClub = array();

			$reponse = $bdd->query("	
						SELECT bdsaisons.id, bdclubs.nom_1
						FROM bdsaisons, bdclubs 
						WHERE bdsaisons.code_bdsaison=substr(bdclubs.id,-5)  
						and bdsaisons.siglecomite='$sigle' 
						AND bdclubs.type = '$type'
						and bdsaisons.en_cours = '$var1' 
						 ");

			while ($row = $reponse->fetch()) {
				$tabCodeEquipe[] = $row[0];
				$tabNomClub[] = $row[1];
			}

			for ($i = 0; $i < $nbreEquipe; $i++) {
				if ($mode != "smart")
				{echo "<a href=\"pageclub00.php?champion=$tabCodeEquipe[$i]\"><img src=\"../images/blasons200_200/$tabCodeEquipe[$i].gif\" height=\"25\" width=\"25\">";}
				else
				{echo "<a href=\"ficheClubs/pageFicheClubs.php?mode=$mode&page=comite&champion=$tabCodeEquipe[$i]\"><img src=\"../images/blasons200_200/$tabCodeEquipe[$i].gif\" height=\"25\" width=\"25\">";}
			
			?>
				<font face="Times New Roman, Times, serif">
					<?php
						if ($mode != "smart")
					{echo " " . "<a href=\"pageclub00.php?champion=$tabCodeEquipe[$i]\">$tabNomClub[$i]</a>";}
					else
					{echo " " . "<a href=\"ficheClubs/pageFicheClubs.php?mode=$mode&page=comite&champion=$tabCodeEquipe[$i]\">$tabNomClub[$i]</a>";}
					?>
				</font>
			<?php
				echo "<br />";
			}
		} else {
			?>
			<font face="Times New Roman, Times, serif">
				<?php
				//echo "-";
				?>
			</font>
	<?php
		}
	}




	function rechercheInfosDesClubs($chaine)
	{
		global $code;
		global $id;
		global $ligue;

		require("../connect/connexion1.php");
		if ($chaine > 0) {
			echo " numerique";

			$reponse = $bdd->query("SELECT  id, type, code,sigle
				FROM bdclubs  
				WHERE  id='$chaine' OR code='$chaine'  OR idffr='$chaine'  ");
			while ($row = $reponse->fetch()) {
				$code = $row[0];
				$id = $row[0];
				$ligue = $row[1];
			}
			echo $code;
			echo "<br />";
			echo $ligue;
			echo "FIN";
		} else {
			echo "ooooooo" . $chaine;
			echo "non numerique";

			echo "1 :" . $code;
			echo "2 :" . $id;
			echo "3 :" . $ligue;
			$reponse = $bdd->query("SELECT  id, type, code
							FROM bdclubs  
							WHERE  nom_1='$chaine' OR nom_2='$chaine' OR sigle='$chaine' OR nom_3='$chaine' OR nom_4='$chaine' OR idffr='$chaine' ");
			while ($row = $reponse->fetch()) {
				$code = $row[0];
				$id = $row[0];
				$ligue = $row[1];
			}
			echo $code;
			echo "<br />";
			echo $ligue;
			echo "FIN";
		}
	}
	// Dénombrer le nombre de clubs par comité
	function nbreClubsComite($bdd)
	{
		global $nbre;

		$cleComite = array('(al)', '(ab)', '(au)', '(be)', '(bg)', '(ce)', '(c)', '(cbl)', '(ca)', '(caz)', '(da)', '(fl)', '(fc)', '(idf)', '(ld)', '(lm)', '(ly)', '(mpy)', '(n)', '(pl)', '(pa)', '(pch)', '(pr)', '(pc)');
		$nbre = array();
		require("../connect/connexion1.php");
		foreach ($cleComite as $comite) {
			$reponse = $bdd->query("SELECT COUNT(id)
							FROM bdclubs  
							WHERE  siglecomite ='$comite)'");

			$nbre = $reponse->fetch();
		}
	}

	// Récuperer l'ensemble des éléments présents dans la table bdcomite
	function rechercheInfosComites($sigle, $bdd)
	{

		global $dep1, $dep2, $dep3,	$dep4, $dep5, $dep6, $dep7, $dep8,
			$dep9,	$dep10,	$dep11, $dep12, $nbreSeniors, $nbreFeminines,
			$nbreJeunes, $nbreDirigeants, $sigleLigue;

		$reponse = $bdd->query("SELECT * 
						FROM bdcomite 
						WHERE sigle='$sigle' ");

		while ($donnees = $reponse->fetch()) {
			$dep1 = $donnees['dep1'];
			$dep2 = $donnees['dep2'];
			$dep3 = $donnees['dep3'];
			$dep4 = $donnees['dep4'];
			$dep5 = $donnees['dep5'];
			$dep6 = $donnees['dep6'];
			$dep7 = $donnees['dep7'];
			$dep8 = $donnees['dep8'];
			$dep9 = $donnees['dep9'];
			$dep10 = $donnees['dep10'];
			$dep11 = $donnees['dep11'];
			$dep12 = $donnees['dep12'];
			$nbreSeniors = $donnees['nbre_senior'];
			$nbreFeminines = $donnees['nbre_feminine'];
			$nbreJeunes = $donnees['nbre_jeune'];
			$nbreDirigeants = $donnees['nbre_dirigeant'];
			$sigleLigue	= $donnees['sigleLigue'];
		}
	}

	// Récuperer l'ensemble des éléments présents dans la table bdligue
	function rechercheInfosLigues($idLigue, $bdd)
	{



		global $idLigue, $nomLigue, $sigleLigue, $nbreFeminines, $nbreFemininesJeunes,	$nbreSeniors,	$nbreJeunes, $nbreDirigeants,
			$nbreClubs,	$president, $batiment,	$adresse,	$cp, $ville, $site,  $tel, $fax,
			$comite1,	$comite2,	$comite3,	$comite4,	$comite5,	$comite6;

		$reponse = $bdd->query("SELECT *
						FROM bdligue 
						WHERE id='$idLigue' ");
		while ($donnees = $reponse->fetch()) {
			//$idLigue = $donnees[0];
			$nomLigue = $donnees[1];
			$sigleLigue = $donnees[2];
			$nbreFeminines = $donnees[3];
			$nbreFemininesJeunes = $donnees[4];
			$nbreSeniors = $donnees[5];
			$nbreJeunes = $donnees[6];
			$nbreDirigeants = $donnees[7];
			$nbreClubs = $donnees[8];
			$president = $donnees[9];
			$batiment = $donnees[10];
			$adresse = $donnees[11];
			$cp = $donnees[12];
			$ville = $donnees[13];
			$site = $donnees[14];
			$tel = $donnees[15];
			$fax = $donnees[16];
			//$courriel = $donnees[16];
			//$clubs = $donnees[17];
			//$licencies = $donnees[18];
			//$site = $donnees[19];
			$comite1 = $donnees[18];
			$comite2 = $donnees[19];
			$comite3 = $donnees[20];
			$comite4 = $donnees[21];
			$comite5 = $donnees[22];
			$comite6 = $donnees[23];
		}
	}
	// Récupèrer le nom de la ligue à partir du sigle de la ligue(ex : occ)
	function nomLigueParSigleLigue($sigleLigue, $bdd)
	{
		global $NomLigueParSigle;
		$sigleLigue = substr($sigleLigue, 1, 3);

		$reponse = $bdd->query("
			SELECT nom
			FROM bdligue 
			WHERE  sigle= '$sigleLigue'");

		while ($row = $reponse->fetch()) {
			$NomLigueParSigle = $row[0];
		}
	}
	// *********  Récupération des équipes pas ligues et/ou par divisions  ************

	// indiquer le nombre de clubs par divisions avec un id d'une ligue passé en paramétre 
	function structureLigue($idLigue, $bdd)
	{
		global $d110, $d120, $d130, $d135, $d140, $d150, $d160, $d170, $d180, $d190, $d280, $d285, $d290, $d295, $d300;

		$tabDivision = array('110', '120', '130', '135', '140', '150', '160', '170', '180', '190', '280', '285', '290', '295', '300');
		$nbre = array();
		$tabNbre = array();
		foreach ($tabDivision as $division) {
			$reponse = $bdd->query("SELECT COUNT(*)
							FROM bdsaisons 
							WHERE en_cours = '$division'
							AND ligue='$idLigue' ");
			$nbre = $reponse->fetch();
			$tabNbre[] = $nbre[0];
		}
		$d110 = $tabNbre[0];
		$d120 = $tabNbre[1];
		$d130 = $tabNbre[2];
		$d135 = $tabNbre[3];
		$d140 = $tabNbre[4];
		$d150 = $tabNbre[5];
		$d160 = $tabNbre[6];
		$d170 = $tabNbre[7];
		$d180 = $tabNbre[8];
		$d190 = $tabNbre[9];
		$d280 = $tabNbre[10];
		$d285 = $tabNbre[11];
		$d290 = $tabNbre[12];
		$d295 = $tabNbre[13];
		$d300 = $tabNbre[14];
	}

	function cssColonne($trigrammeLigue)
	{
		if (
			$trigrammeLigue == "ARA" or $trigrammeLigue == "BRE" or  $trigrammeLigue == "COR" or   $trigrammeLigue == "HDF" or
			$trigrammeLigue == "NOR" or   $trigrammeLigue == "OCC" or   $trigrammeLigue == "PCA"
		)
			return true;
		else
			return false;
	}


	function  tabNbreClubs()
	{

		$tabTrigrammeLigue =   array("ARA", "BFC", "BRE", "CVL", "COR", "GES", "HDF", "IDF", "NOR", "NAQ", "OCC", "PCA", "PDL");
		$tabLigue =   array(10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 22, 21);
		$tabDivision = array(110, 120, 130, 135, 140, 150, 160, 170, 180, 190);
		$tabNomDivision = array("TOP14", "PROD2", "NAT1", "NAT2", "FED1", "FED2", "FED3",  "REG1", "REG2", "REG3");

		foreach ($tabLigue as $idLigue) {
			global $sigleLigue;
			if ($idLigue == 10)
				$sigleLigue = "ARA";
			elseif ($idLigue == 11)
				$sigleLigue = "BRE";
			elseif ($idLigue == 12)
				$sigleLigue = "BFC";
			elseif ($idLigue == 13)
				$sigleLigue = "CVL";
			elseif ($idLigue == 14)
				$sigleLigue = "COR";
			elseif ($idLigue == 15)
				$sigleLigue = "GES";
			elseif ($idLigue == 16)
				$sigleLigue = "HDF";
			elseif ($idLigue == 17)
				$sigleLigue = "IDF";
			elseif ($idLigue == 18)
				$sigleLigue = "NOR";
			elseif ($idLigue == 19)
				$sigleLigue = "NAQ";
			elseif ($idLigue == 20)
				$sigleLigue = "OCC";
			elseif ($idLigue == 21)
				$sigleLigue = "PDL";
			elseif ($idLigue == 22)
				$sigleLigue = "PCA";
			/*
	structureLigue($idLigue, $bdd); ${$sigleLigue."110"} = $d110;
									${$sigleLigue."120"} = $d120; 
									${$sigleLigue."130"} = $d130;
									${$sigleLigue."135"} = $d135;
									${$sigleLigue."140"} = $d140; 
									${$sigleLigue."150"} = $d150;
									${$sigleLigue."160"} = $d160;
									${$sigleLigue."170"} = $d170;
									${$sigleLigue."180"} = $d180; 
									${$sigleLigue."190"} = $d190;

	*/
		}
	}



	?>