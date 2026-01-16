<!DOCTYPE html PUBLIC>
<html lang="fr">

<head>

	<meta charset="utf-8" />

</head>
<hr>
<p><b>Récupèration des données</b></p>
<p>Saisir dans l'adresse (après php) l'année souhaitée <br>
	Exemple : ......championsRegionaux.php?annee=2022 <br>
</p>
<p><b>Traitement du fichier générer</b></p>
<p>Copier coller les données dans l'éditeur de texte Notepad (72 lignes)
<br> Encoder les données en UTF8 et enregistrer au format nomDuFichier.csv.
<br> Modifier le caractère de séparation : remplacer , par ; .
</p>
<hr>
<br>
<a href="accueil.php">retour Accueil </a>

<?php
echo "<br/>";
echo "<br/>";
if (isset($_GET['annee'])) $annee = $_GET['annee'];
else $annee = "?annee=2022";

//**************************************************************
//
//						Ligues ARA - NAQ - OCC
//
//**************************************************************
require '../../connect/connexion6.php';
require("../../phasesfinalesterr2019/fonctionspfterrESDL2019.php");

$comite2  = array('au',  'ca',  'ab');
foreach ($comite2 as $comite) {
	if ($comite == "au") {
		$ligue = "ARA";
		$codeLigue = 100000;
		$titreRegional = "Auvergne Rhone Alpes";
	} elseif ($comite == "ca") {
		$ligue = "NAQ";
		$codeLigue = 190000;
		$titreRegional = "Nouvelle Aquitaine";
	} elseif ($comite == "ab") {
		$ligue = "OCC";
		$codeLigue = 200000;
		$titreRegional = "Occitanie";
	}


	//echo "--------------------".$ligue.' '.$ligue.' '.$ligue.' '.$ligue.' '.$ligue.' '.$ligue.' '.$ligue."------------------------------";

	$phpComite_pfterr_e = "php" . $comite . "_pfterr_e";

	for ($division = $codeLigue + 170; $division < $codeLigue + 200; $division =  $division + 10) {
		require '../../connect/connexion6.php';
		$reponse = $bdd->query("  	SELECT type
								FROM $phpComite_pfterr_e
								WHERE division = '$division' and annee = $annee ");
		while ($row = $reponse->fetch()) {
			$type = $row[0];
		}

		if ($type == 1)
			finale2019($comite, $division, $annee, $bdd);
		elseif ($type == 2 or $type == 3)
			demi2019($comite, $division, $annee, $bdd);
		elseif ($type == 14)
			quarts2019($comite, $division, $annee, $bdd);
		elseif ($type == 18 or $type == 19)
			huitieme2019($comite, $division, $annee, $bdd);
		elseif ($type == 16 or $type == 17)
			seizieme2019($comite, $division, $annee, $bdd);

		if ($A1001 > $A1002) {
			$clubChampion = $clubA1001;
			$clubViceChampion = $clubA1002;
			$scoreFinale1 = $A1001;
			$scoreFinale2 = $A1002;
		} else {
			$clubChampion = $clubA1002;
			$clubViceChampion = $clubA1001;
			$scoreFinale1 = $A1002;
			$scoreFinale2 = $A1001;
		}

		require '../../connect/connexion1.php';
		$reponse = $bdd->query("SELECT division
							FROM bddivisions
							WHERE id = substr($division,3,6) ");
		while ($row = $reponse->fetch()) {
			$nomDivision = $row[0];
		}

		$id1 = ($annee * 1000000) + ($idLigue * 10000) + $division;
		$id2 = $id1 + 1;
		$constante = 1;
		echo $id1 . ';' . $annee . ';' . $nomDivision . ';' . "Champion" . ';' . $clubChampion . ';' . $clubChampion . ';' . ';' . '(' . $ligue . ')' . ';' . $clubViceChampion . ';' . '(' . $ligue . ")" . ';' . $scoreFinale1 . ';' . $scoreFinale2 . ';' . $titreRegional . ';' . substr($division, -3) . ';' . $constante . ';' . "A" . ';' . "XX";
		echo "<br />";
		echo $id2 . ';' . $annee . ';' . $nomDivision . ';' . "Vice champion" . ';' . $clubViceChampion . ';' . $clubViceChampion . ';' . ';' . ';' . ';' . '(' . $ligue . ")" . ';' . $scoreFinale1 . ';' . $scoreFinale2 . ';' . $titreRegional . ';' . substr($division, -3) . ';' . $constante . ';' . "A" . ';' . "XX";
		echo "<br />";
	}
}

//**************************************************************
//
//		 	Ligues BFC - BRE - CVL - HDF - PDL
//
//**************************************************************

$bddComite = "pl";
$comite2  = array(11, 12, 13, 16, 21);
foreach ($comite2 as $comite) {

	if ($comite == 11) {
		$ligue = "BFC";
		$codeLigue = 110000;
		$titreRegional = "Bourgogne Franche Comté";
	} elseif ($comite == 12) {
		$ligue = "BRE";
		$codeLigue = 120000;
		$titreRegional = "Bretagne";
	} elseif ($comite == 13) {
		$ligue = "CVL";
		$codeLigue = 130000;
		$titreRegional = "Centre Val de Loire";
	} elseif ($comite == 16) {
		$ligue = "HDF";
		$codeLigue = 160000;
		$titreRegional = "Hauts de France";
	} elseif ($comite == 21) {
		$ligue = "PDL";
		$codeLigue = 210000;
		$titreRegional = "Pays de la Loire";
	}

	//echo "<br/>";echo "<br/>";
	//echo "--------------------".$ligue.' '.$ligue.' '.$ligue.' '.$ligue.' '.$ligue.' '.$ligue.' '.$ligue."------------------------------";
	//echo "<br/>";

	$phpComite_pfterr_e = "phppl_pfterr_e";

	for ($division = $codeLigue + 170; $division < $codeLigue + 200; $division =  $division + 10) {
		require '../../connect/connexion6.php';
		$reponse = $bdd->query("   	SELECT type
								FROM $phpComite_pfterr_e
								WHERE division = '$division' and annee = $annee ");
		while ($row = $reponse->fetch()) {
			$type = $row[0];
		}

		if ($type == 1)
			finale2019($bddComite, $division, $annee, $bdd);
		elseif ($type == 2 or $type == 3)
			demi2019($bddComite, $division, $annee, $bdd);
		elseif ($type == 14)
			quarts2019($bddComite, $division, $annee, $bdd);
		elseif ($type == 18 or $type == 19)
			huitieme2019($bddComite, $division, $annee, $bdd);
		elseif ($type == 16 or $type == 17)
			seizieme2019($bddComite, $division, $annee, $bdd);

		if ($A1001 > $A1002) {

			$clubChampion = $clubA1001;
			$clubViceChampion = $clubA1002;
			$scoreFinale1 = $A1001;
			$scoreFinale2 = $A1002;
		} else {
			$clubChampion = $clubA1002;
			$clubViceChampion = $clubA1001;
			$scoreFinale1 = $A1002;
			$scoreFinale2 = $A1001;
		}

		require '../../connect/connexion1.php';
		$reponse = $bdd->query("SELECT division
							FROM bddivisions
							WHERE id = substr($division,3,6) ");
		while ($row = $reponse->fetch()) {
			$nomDivision = $row[0];
		}

		if ($scoreFinale1 == "-")
			$scoreFinale1 = 0;
		if ($scoreFinale2 == "-")
			$scoreFinale2 = 0;

		$id1 = ($annee * 1000000) + ($idLigue * 10000) + $division;
		$id2 = $id1 + 1;


		echo $id1 . ';' . $annee . ';' . $nomDivision . ';' . "Champion" . ';' . $clubChampion . ';' . $clubChampion . ';' . ';' . '(' . $ligue . ')' . ';' . $clubViceChampion . ';' . '(' . $ligue . ")" . ';' . $scoreFinale1 . ';' . $scoreFinale2 . ';' . $titreRegional . ';' . substr($division, -3) . ';' . $constante . ';' . "A" . ';' . "XX";
		echo "<br />";
		echo $id2 . ';' . $annee . ';' . $nomDivision . ';' . "Vice champion" . ';' . $clubViceChampion . ';' . $clubViceChampion . ';' . ';' . ';' . ';' . '(' . $ligue . ")" . ';' . $scoreFinale1 . ';' . $scoreFinale2 . ';' . $titreRegional . ';' . substr($division, -3) . ';' . $constante . ';' . "A" . ';' . "XX";
		echo "<br />";
	}
}

//**************************************************************
//
//		 	Ligues GES - IDF - NOR - PCA
//
//**************************************************************

$bddComite = "idf";
$comite2  = array(15, 17, 18, 22);
foreach ($comite2 as $comite) {

	if ($comite == 15) {
		$ligue = "GES";
		$codeLigue = 150000;
		$titreRegional = "Grand Est";
	} elseif ($comite == 17) {
		$ligue = "IDF";
		$codeLigue = 170000;
		$titreRegional = "Ile de France";
	} elseif ($comite == 18) {
		$ligue = "NOR";
		$codeLigue = 180000;
		$titreRegional = "Normandie";
	} elseif ($comite == 22) {
		$ligue = "PCA";
		$codeLigue = 220000;
		$titreRegional = "Provence Alpes Cote d'Azur";
	}

	//echo "<br/>";echo "<br/>";
	//echo "--------------------".$ligue.' '.$ligue.' '.$ligue.' '.$ligue.' '.$ligue.' '.$ligue.' '.$ligue."------------------------------";
	//echo "<br/>";

	$phpComite_pfterr_e = "phpidf_pfterr_e";


	for ($division = $codeLigue + 170; $division < $codeLigue + 200; $division =  $division + 10) {
		require '../../connect/connexion6.php';
		$reponse = $bdd->query("  	SELECT type
								FROM $phpComite_pfterr_e
								WHERE division = '$division' and annee = $annee ");
		while ($row = $reponse->fetch()) {
			$type = $row[0];
		}

		if ($type == 1)
			finale2019($bddComite, $division, $annee, $bdd);
		elseif ($type == 2 or $type == 3)
			demi2019($bddComite, $division, $annee, $bdd);
		elseif ($type == 14)
			quarts2019($bddComite, $division, $annee, $bdd);
		elseif ($type == 18 or $type == 19)
			huitieme2019($bddComite, $division, $annee, $bdd);
		elseif ($type == 16 or $type == 17)
			seizieme2019($bddComite, $division, $annee, $bdd);

		if ($A1001 > $A1002) {
			$clubChampion = $clubA1001;
			$clubViceChampion = $clubA1002;
			$scoreFinale1 = $A1001;
			$scoreFinale2 = $A1002;
		} else {
			$clubChampion = $clubA1002;
			$clubViceChampion = $clubA1001;
			$scoreFinale1 = $A1002;
			$scoreFinale2 = $A1001;
		}

		require '../../connect/connexion1.php';
		$reponse = $bdd->query("SELECT division
							FROM bddivisions
							WHERE id = substr($division,3,6) ");
		while ($row = $reponse->fetch()) {
			$nomDivision = $row[0];
		}

		$id1 = ($annee * 1000000) + ($idLigue * 10000) + $division;
		$id2 = $id1 + 1;



		echo $id1 . ';' . $annee . ';' . $nomDivision . ';' . "Champion" . ';' . $clubChampion . ';' . $clubChampion . ';' . ';' . '(' . $ligue . ')' . ';' . $clubViceChampion . ';' . '(' . $ligue . ")" . ';' . $scoreFinale1 . ';' . $scoreFinale2 . ';' . $titreRegional . ';' . substr($division, -3) . ';' . $constante . ';' . "A" . ';' . "XX";
		echo "<br />";
		echo $id2 . ';' . $annee . ';' . $nomDivision . ';' . "Vice champion" . ';' . $clubViceChampion . ';' . $clubViceChampion . ';' . ';' . ';' . ';' . '(' . $ligue . ")" . ';' . $scoreFinale1 . ';' . $scoreFinale2 . ';' . $titreRegional . ';' . substr($division, -3) . ';' . $constante . ';' . "A" . ';' . "XX";
		echo "<br />";
	}
}


?>

</html>