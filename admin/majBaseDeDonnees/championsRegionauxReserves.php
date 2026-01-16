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
<p>Copier coller les données dans l'éditeur de texte Notepad (48 lignes)
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
else $annee = "2022";

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
	}
	if ($comite == "ca") {
		$ligue = "NAQ";
		$codeLigue = 190000;
		$titreRegional = "Nouvelle Aquitaine";
	}
	if ($comite == "ab") {
		$ligue = "OCC";
		$codeLigue = 200000;
		$titreRegional = "Occitanie";
	}

	//echo "<br/>";echo "<br/>";
	//echo "--------------------".$ligue.' '.$ligue.' '.$ligue.' '.$ligue.' '.$ligue.' '.$ligue.' '.$ligue."------------------------------";

	$phpComite_pfterr_e = "php" . $comite . "_pfterr_e";
	$division270 = $codeLigue + 270;
	$division9180 = $codeLigue + 9180;

	$tabDivision = array($division270, $division9180);


	foreach ($tabDivision as $division) {

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

		if (substr($division, 3, 6) == 270)
			$idDivision =  270;
		else
			$idDivision =  9180;

		require '../../connect/connexion1.php';
		$reponse = $bdd->query("SELECT division
							FROM bddivisions
							WHERE id = $idDivision ");
		while ($row = $reponse->fetch()) {
			$nomDivision = $row[0];
		}
		if ($scoreFinale1 == "-")
			$scoreFinale1 = 0;
		if ($scoreFinale2 == "-")
			$scoreFinale2 = 0;

		$id1 = ($annee * 1000000) + ($codeLigue) + $idDivision;
		$id2 = $id1 + 1;
		$constante = 2;

		echo $id1 . ';' . $annee . ';' . $nomDivision . ';' . "Champion" . ';' . $clubChampion . ';' . $clubChampion . ';' . ';' . '(' . $ligue . ')' . ';' . $clubViceChampion . ';' . '(' . $ligue . ")" . ';' . $scoreFinale1 . ';' . $scoreFinale2 . ';' . $titreRegional . ';' . $idDivision . ';' . $constante . ';' . "B" . ';' . "";
		echo "<br />";
		echo $id2 . ';' . $annee . ';' . $nomDivision . ';' . "Vice champion" . ';' . $clubViceChampion . ';' . $clubViceChampion . ';' . ';' . ';' . ';' . '(' . $ligue . ")" . ';' . $scoreFinale1 . ';' . $scoreFinale2 . ';' . $titreRegional . ';' . $idDivision . ';' . $constante . ';' . "B" . ';' . "";
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
	}
	if ($comite == 12) {
		$ligue = "BRE";
		$codeLigue = 120000;
		$titreRegional = "Bretagne";
	}
	if ($comite == 13) {
		$ligue = "CVL";
		$codeLigue = 130000;
		$titreRegional = "Centre Val de Loire";
	}
	if ($comite == 16) {
		$ligue = "HDF";
		$codeLigue = 160000;
		$titreRegional = "Hauts de France";
	}
	if ($comite == 21) {
		$ligue = "PDL";
		$codeLigue = 210000;
		$titreRegional = "Pays de la Loire";
	}

	//echo "<br/>";echo "<br/>";
	//echo "--------------------".$ligue.' '.$ligue.' '.$ligue.' '.$ligue.' '.$ligue.' '.$ligue.' '.$ligue."------------------------------";
	//echo "<br/>";

	$phpComite_pfterr_e = "phppl_pfterr_e";
	$division270 = $codeLigue + 270;
	$division9180 = $codeLigue + 9180;

	$tabDivision = array($division270, $division9180);

	foreach ($tabDivision as $division) {
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
							WHERE id = substr($division,3,6)  ");
		while ($row = $reponse->fetch()) {
			$nomDivision = $row[0];
		}


		if (substr($division, 3, 6) == 270)
			$idDivision =  270;
		else
			$idDivision =  9180;


		if ($scoreFinale1 == "-")
			$scoreFinale1 = 0;
		if ($scoreFinale2 == "-")
			$scoreFinale2 = 0;

		$id1 = ($annee * 1000000) + ($idLigue * 10000) + $division;
		$id2 = $id1 + 1;
		$constante = 2;

		echo $id1 . ';' . $annee . ';' . $nomDivision . ';' . "Champion" . ';' . $clubChampion . ';' . $clubChampion . ';' . $clubChampion . ';' . '(' . $ligue . ')' . ';' . $clubViceChampion . ';' . '(' . $ligue . ")" . ';' . $scoreFinale1 . ';' . $scoreFinale2 . ';' . $titreRegional . ';' . $idDivision . ';' . $constante . ';' . "B" . ';' . "";
		echo "<br />";
		echo $id2 . ';' . $annee . ';' . $nomDivision . ';' . "Vice champion" . ';' . $clubViceChampion . ';' . $clubViceChampion . ';' . $clubViceChampion . ';' . ';' . ';' . '(' . $ligue . ")" . ';' . $scoreFinale1 . ';' . $scoreFinale2 . ';' . $titreRegional . ';' . $idDivision . ';' . $constante . ';' . "B" . ';' . "";
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
	}
	if ($comite == 17) {
		$ligue = "IDF";
		$codeLigue = 170000;
		$titreRegional = "Ile de France";
	}
	if ($comite == 18) {
		$ligue = "NOR";
		$codeLigue = 180000;
		$titreRegional = "Normandie";
	}
	if ($comite == 22) {
		$ligue = "PCA";
		$codeLigue = 220000;
		$titreRegional = "Provence Alpes Cote d'Azur";
	}


	//echo "<br/>";
	//echo "--------------------" . $ligue . ' ' . $ligue . ' ' . $ligue . ' ' . $ligue . ' ' . $ligue . ' ' . $ligue . ' ' . $ligue . "------------------------------";
	//echo "<br/>";

	$phpComite_pfterr_e = "phpidf_pfterr_e";
	$division270 = $codeLigue + 270;
	$division9180 = $codeLigue + 9180;

	$tabDivision = array($division270, $division9180);


	foreach ($tabDivision as $division) {


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


		






		if (substr($division, 3, 6) == 270)
			$idDivision =  270;
		else
			$idDivision =  9180;

		if ($scoreFinale1 == "-")
			$scoreFinale1 = 0;
		if ($scoreFinale2 == "-")
			$scoreFinale2 = 0;

		$id1 = ($annee * 1000000) + ($idLigue * 10000) + $division;
		$id2 = $id1 + 2;

		echo $id1 . ';' . $annee . ';' . $nomDivision . ';' . "Champion" . ';' . $clubChampion . ';' . $clubChampion . ';' . $clubChampion . ';' . '(' . $ligue . ')' . ';' . $clubViceChampion . ';' . '(' . $ligue . ")" . ';' . $scoreFinale1 . ';' . $scoreFinale2 . ';' . $titreRegional . ';' . $idDivision . ';' . $constante . ';' . "B" . ';' . "";
		echo "<br />";
		echo $id2 . ';' . $annee . ';' . $nomDivision . ';' . "Vice champion" . ';' . $clubViceChampion . ';' . $clubViceChampion . ';' . $clubViceChampion . ';' . ';' . ';' . '(' . $ligue . ")" . ';' . $scoreFinale1 . ';' . $scoreFinale2 . ';' . $titreRegional . ';' . $idDivision . ';' . $constante . ';' . "B" . ';' . "";
		echo "<br />";
	}
}
?>
</html>