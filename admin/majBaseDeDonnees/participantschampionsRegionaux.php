<a href="accueil.php">retour Accueil<br></a>
<br>
<h1 text-align="center">Mise à jour des tables bdSaison / bdequipe1 / bdequipe2</h1>
<br />
<?php

$tabLigue = array();
echo "Ligue(s) sélectionnée(s) : ";

if (isset($_POST['selection'])) {
	if (!empty($_POST['tabLigue'])) {
		foreach ($_POST['tabLigue'] as $ligue) {

			echo $ligue . "<br/>";
		}
	}
}
$annee =  $_GET['annee'];
echo "Année sélectionée : " . $annee;
echo  "<br/>";

require '../../connect/connexion6.php';
require("../../phasesfinalesterr2019/fonctionspfterrESDL2019.php");

////if (isset($type));
//else
//	$type = 0;
//$annee = '2022';

//$tabLigue  = //
//$tabLigue  = array('CVL', 'OCC', 'PDL');	
//$tabLigue  = array('BRE');
//$tabLigue  = array('OCC');	



$annee > 2022 ? $divisionMax =200 : $divisionMax =230;

echo "divisionMax :".$divisionMax;

if (isset($_POST['selection'])) {
	if (!empty($_POST['tabLigue'])) {
		foreach ($_POST['tabLigue'] as $ligue) {

			for ($division1 = 170; $division1 < $divisionMax ; $division1 = $division1 + 10) {
				if ($ligue == "ARA") {
					$division = 10 * 10000 + $division1;
					$comite = "au";
					$nomLigue = "ARA";
				} elseif ($ligue == 'NAQ') {
					$division = 19 * 10000 + $division1;
					$comite = "ca";
					$nomLigue = "NAQ";
				} elseif ($ligue == 'OCC') {
					$division = 20 * 10000 + $division1;
					$comite = "ab";
					$nomLigue = "OCC";
				} elseif ($ligue == 'BFC') {
					$division = 11 * 10000 + $division1;
					$comite = "pl";
					$nomLigue = "BFC";
				} elseif ($ligue == 'BRE') {
					$division = 12 * 10000 + $division1;
					$comite = "pl";
					$nomLigue = "BRE";
				} elseif ($ligue == 'CVL') {
					$division = 13 * 10000 + $division1;
					$comite = "pl";
					$nomLigue = "CVL";
				} elseif ($ligue == 'HDF') {
					$division = 16 * 10000 + $division1;
					$comite = "pl";
					$nomLigue = "HDF";
				} elseif ($ligue == 'PDL') {
					$division = 21 * 10000 + $division1;
					$comite = "pl";
					$nomLigue = "PDL";
				} elseif ($ligue == 'GES') {
					$division = 15 * 10000 + $division1;
					$comite = "idf";
					$nomLigue = "GES";
				} elseif ($ligue == 'IDF') {
					$division = 17 * 10000 + $division1;
					$comite = "idf";
					$nomLigue = "IDF";
				} elseif ($ligue == 'NOR') {
					$division = 18 * 10000 + $division1;
					$comite = "idf";
					$nomLigue = "NOR";
				} elseif ($ligue == 'PCA') {
					$division = 22 * 10000 + $division1;
					$comite = "idf";
					$nomLigue = "PCA";
				}

				$div = substr($division, -3);
				$terr_annee = "terr_" . $annee;



				if ($annee > 2022) {
					if ($div == 170)
						$nomDivision = "Régionale 1";
					elseif ($div == 180)
						$nomDivision = "Régionale 2";
					elseif ($div == 190)
						$nomDivision = "Régionale 3";
				} else {
					if ($div == 170)
						$nomDivision = "Honneur";
					elseif ($div == 180)
						$nomDivision = "Promotion";
					elseif ($div == 190)
						$nomDivision = "1re série";
					elseif ($div == 200)
						$nomDivision = "2me série";
					elseif ($div == 210)
						$nomDivision = "3me série";
					elseif ($div == 220)
						$nomDivision = "4me série";
				}

				echo "<br>";echo "<br>";
				echo "nom division : ".$nomDivision; echo "<br>";
				echo "nom ligue : ".$nomLigue; echo "<br>";
				echo "nom comite : ".$comite; echo "<br>";

				$champ = "Champion " . $nomDivision . ' ligue ' . $nomLigue;
				$vice = "Vice champion " . $nomDivision . ' ligue ' . $nomLigue;
				$f2me = "Demi finaliste champ. " . $nomDivision . ' ligue ' . $nomLigue;
				$f4me = "Quart de finale champ. " . $nomDivision . ' ligue ' . $nomLigue;
				$f8me = "8me de finale champ. " . $nomDivision . ' ligue ' . $nomLigue;
				$f16me = "16me de finale champ. " . $nomDivision . ' ligue ' . $nomLigue;

				$id1 = ($annee * 1000000) + $division;
				$id2 = $id1 + 1;
				$constante = 1;

				//Recherche du type de phase finale
				$phpComite_pfterr_e = "php" . $comite . "_pfterr_e";
				//echo $phpComite_pfterr_e; echo "<br/>";

				require '../../connect/connexion6.php';
				$reponse = $bdd->query(" SELECT type
					FROM $phpComite_pfterr_e
					WHERE division = $division and annee = $annee");
				while ($row = $reponse->fetch()) {
					$type = $row[0];
				}

				echo "type : ".$type; echo "<br>";

         ?>

				<font color="#FF0000" size="5"><b>
						<?php
						echo "<br/>";
						echo "-------     " . $ligue . ' - ' . $division . ' ' . "-----------" . '' . "<br/>";
						echo "type : " . $type . ' -- ' . $phpComite_pfterr_e . "<br/>";

						?>
					</b></font>

      <?php

				if ($type == 16 or $type == 17) {
					seizieme2019($comite, $division, $annee, $bdd);
					traitementFinale($clubA1001, $clubA1002, $A1001, $A1002, $terr_annee, $champ, $vice, $bdd);
					traitementDemies($clubA1001, $clubA1002, $clubA2001, $clubA2002, $clubA2003, $clubA2004, $terr_annee, $f2me, $bdd);
					traitementQuarts($clubA2001, $clubA2002, $clubA2003, $clubA2004,$clubA4001, $clubA4002, $clubA4003, $clubA4004, $clubA4005, $clubA4006, $clubA4007, $clubA4008, $terr_annee, $f4me, $bdd);
					traitementHuitiemes($clubA4001, $clubA4002, $clubA4003, $clubA4004, $clubA4005, $clubA4006, $clubA4007, $clubA4008,$clubA8001, $clubA8002, $clubA8003, $clubA8004, $clubA8005, $clubA8006, $clubA8007, $clubA8008,
					$clubA8009, $clubA8010, $clubA8011, $clubA8012, $clubA8013, $clubA8014, $clubA8015, $clubA8016, $terr_annee, $f8me, $bdd);
			
					
					
					$tabEquipesIdSeiziemes = array();
	 $tabEquipesSeiziemes	 = array($clubA1601, $clubA1602, $clubA1603, $clubA1604, $clubA1605, $clubA1606, $clubA1607, $clubA1608,
	 $clubA1609, $clubA1610, $clubA1611, $clubA1612, $clubA1613, $clubA1614, $clubA1615, $clubA1616,$clubA1617, $clubA1618, $clubA1619, $clubA1620, $clubA1621, $clubA1622, $clubA1623, $clubA1624,
	 $clubA1625, $clubA1626, $clubA1627, $clubA1628, $clubA1629, $clubA1630, $clubA1631, $clubA1632);

	

	 foreach ($tabEquipesSeiziemes as $nomEquipe) {
		
		require '../../connect/connexion1.php';
		$reponse = $bdd->query(" SELECT id
					FROM bdclubs
					WHERE nom_1 = '$nomEquipe' ");
		while ($row = $reponse->fetch()) {
			$tabEquipesIdSeiziemes[] = $row[0];
		}
	 };
					
					
					echo "<h2>" . $f16me . "</h2>";

					if ($clubA8001 ==  $clubA1601) {
						echo $tabEquipesIdSeiziemes[1] . '  ' . $clubA1602 . '  ' . $f16me . "<br/>";
						$idReduit = substr($tabEquipesIdSeiziemes[1], -5);
						$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f16me'	WHERE id = '$idReduit'");
					} else {
						echo $tabEquipesIdSeiziemes[0] . '  ' . $clubA1601 . '  ' . $f16me . "<br/>";
						$idReduit = substr($tabEquipesIdSeiziemes[0], -5);
						$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f16me'	WHERE id = '$idReduit'");
					}
					//******************************** */
					if ($clubA8002 ==  $clubA1603) {
						echo $tabEquipesIdSeiziemes[3] . '  ' . $clubA1604 . '  ' . $f16me . "<br/>";
						$idReduit = substr($tabEquipesIdSeiziemes[3], -5);
						$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f16me'	WHERE id = '$idReduit'");
					} else {
						echo $tabEquipesIdSeiziemes[2] . '  ' . $clubA1603 . ' ' . $f16me . "<br/>";
						$idReduit = substr($tabEquipesIdSeiziemes[2], -5);
						$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f16me'	WHERE id = '$idReduit'");
					}
					//******************************** */
					if ($clubA8003 ==  $clubA1605) {
						echo $tabEquipesIdSeiziemes[5] . '  ' . $clubA1606 . ' ' . $f16me . "<br/>";
						$idReduit = substr($tabEquipesIdSeiziemes[5], -5);
						$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f16me'	WHERE id = '$idReduit'");
					} else {
						echo $tabEquipesIdSeiziemes[4] . '  ' . $clubA1605 . ' ' . $f16me . "<br/>";
						$idReduit = substr($tabEquipesIdSeiziemes[4], -5);
						$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f16me'	WHERE id = '$idReduit'");
					}
					//******************************** */
					if ($clubA8004 ==  $clubA1607) {
						echo $tabEquipesIdSeiziemes[7] . '  ' . $clubA1608 . '  ' . $f16me . "<br/>";
						$idReduit = substr($tabEquipesIdSeiziemes[7], -5);
						$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f16me'	WHERE id = '$idReduit'");
					} else {
						echo $tabEquipesIdSeiziemes[6] . '  ' . $clubA1607 . ' ' . $f16me . "<br/>";
						$idReduit = substr($tabEquipesIdSeiziemes[6], -5);
						$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f16me'	WHERE id = '$idReduit'");
					}
					//******************************** */
					if ($clubA8005 ==  $clubA1609) {
						echo $tabEquipesIdSeiziemes[9] . '  ' . $clubA1610 . '  ' . $f16me . "<br/>";
						$idReduit = substr($tabEquipesIdSeiziemes[9], -5);
						$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f16me'	WHERE id = '$idReduit'");
					} else {
						echo $tabEquipesIdSeiziemes[8] . '  ' . $clubA1609 . ' ' . $f16me . "<br/>";
						$idReduit = substr($tabEquipesIdSeiziemes[8], -5);
						$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f16me'	WHERE id = '$idReduit'");
					}
					//******************************** */
					if ($clubA8006 ==  $clubA1611) {
						echo $tabEquipesIdSeiziemes[11] . '  ' . $clubA1612 . ' ' . $f16me . "<br/>";
						$idReduit = substr($tabEquipesIdSeiziemes[11], -5);
						$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f16me'	WHERE id = '$idReduit'");
					} else {
						echo $tabEquipesIdSeiziemes[10] . '  ' . $clubA1611 . ' ' . $f16me . "<br/>";
						$idReduit = substr($tabEquipesIdSeiziemes[10], -5);
						$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f16me'	WHERE id = '$idReduit'");
					}

					//******************************** */
					if ($clubA8007 ==  $clubA1613) {
						echo $tabEquipesIdSeiziemes[13] . '  ' . $clubA1614 . '  ' . $f16me . "<br/>";
						$idReduit = substr($tabEquipesIdSeiziemes[13], -5);
						$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f16me'	WHERE id = '$idReduit'");
					} else {
						echo $$tabEquipesIdSeiziemes[12] . '  ' . $clubA1613 . ' ' . $f16me . "<br/>";
						$idReduit = substr($tabEquipesIdSeiziemes[12], -5);
						$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f16me'	WHERE id = '$idReduit'");
					}
					//******************************** */
					if ($clubA8008 ==  $clubA1615) {
						echo $tabEquipesIdSeiziemes[15] . '  ' . $clubA1616 . '  ' . $f16me . "<br/>";
						$idReduit = substr($tabEquipesIdSeiziemes[15], -5);
						$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f16me'	WHERE id = '$idReduit'");
					} else {
						echo $tabEquipesIdSeiziemes[14] . '  ' . $clubA1615 . ' ' . $f16me . "<br/>";
						$idReduit = substr($tabEquipesIdSeiziemes[14], -5);
						$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f16me'	WHERE id = '$idReduit'");
					}
					//******************************** */
					if ($clubA8009 ==  $clubA1617) {
						echo $tabEquipesIdSeiziemes[17] . '  ' . $clubA1618 . '  ' . $f16me . "<br/>";
						$idReduit = substr($tabEquipesIdSeiziemes[17], -5);
						$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f16me'	WHERE id = '$idReduit'");
					} else {
						echo $tabEquipesIdSeiziemes[16] . '  ' . $clubA1617 . ' ' . $f16me . "<br/>";
						$idReduit = substr($tabEquipesIdSeiziemes[16], -5);
						$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f16me'	WHERE id = '$idReduit'");
					}
					//******************************** */
					if ($clubA8010 ==  $clubA1619) {
						echo $tabEquipesIdSeiziemes[19] . '  ' . $clubA1620 . ' ' . $f16me . "<br/>";
						$idReduit = substr($tabEquipesIdSeiziemes[19], -5);
						$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f16me'	WHERE id = '$idReduit'");
					} else {
						echo $tabEquipesIdSeiziemes[18] . '  ' . $clubA1619 . '  ' . $f16me . "<br/>";
						$idReduit = substr($tabEquipesIdSeiziemes[18], -5);
						$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f16me'	WHERE id = '$idReduit'");
					}
					//******************************** */
					if ($clubA8011 ==  $clubA1621) {
						echo $tabEquipesIdSeiziemes[21] . '  ' . $clubA1622 . '  ' . $f16me . "<br/>";
						$idReduit = substr($tabEquipesIdSeiziemes[21], -5);
						$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f16me'	WHERE id = '$idReduit'");
					} else {
						echo $tabEquipesIdSeiziemes[20] . '  ' . $clubA1621 . ' ' . $f16me . "<br/>";
						$idReduit = substr($tabEquipesIdSeiziemes[20], -5);
						$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f16me'	WHERE id = '$idReduit'");
					}
					//******************************** */
					if ($clubA8012 ==  $clubA1623) {
						echo $tabEquipesIdSeiziemes[23] . '  ' . $clubA1624 . ' ' . $f16me . "<br/>";
						$idReduit = substr($tabEquipesIdSeiziemes[23], -5);
						$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f16me'	WHERE id = '$idReduit'");
					} else {
						echo $tabEquipesIdSeiziemes[22] . '  ' . $clubA1623 . ' ' . $f16me . "<br/>";
						$idReduit = substr($tabEquipesIdSeiziemes[22], -5);
						$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f16me'	WHERE id = '$idReduit'");
					}
					//******************************** */
					if ($clubA8013 ==  $clubA1625) {
						echo $tabEquipesIdSeiziemes[25] . '  ' . $clubA1626 . '  ' . $f16me . "<br/>";
						$idReduit = substr($tabEquipesIdSeiziemes[25], -5);
						$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f16me'	WHERE id = '$idReduit'");
					} else {
						echo $tabEquipesIdSeiziemes[24] . '  ' . $clubA1625 . ' ' . $f16me . "<br/>";
						$idReduit = substr($tabEquipesIdSeiziemes[24], -5);
						$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f16me'	WHERE id = '$idReduit'");
					}
					//******************************** */
					if ($clubA8014 ==  $clubA1628) {
						echo $tabEquipesIdSeiziemes[27] . '  ' . $clubA1628 . '  ' . $f16me . "<br/>";
						$idReduit = substr($tabEquipesIdSeiziemes[27], -5);
						$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f16me'	WHERE id = '$idReduit'");
					} else {
						echo $tabEquipesIdSeiziemes[26] . '  ' . $clubA1627 . ' ' . $f16me . "<br/>";
						$idReduit = substr($tabEquipesIdSeiziemes[26], -5);
						$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f16me'	WHERE id = '$idReduit'");
					}
					//******************************** */
					if ($clubA8015 ==  $clubA1629) {
						echo $tabEquipesIdSeiziemes[29] . '  ' . $clubA1630 . '  ' . $f16me . "<br/>";
						$idReduit = substr($tabEquipesIdSeiziemes[29], -5);
						$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f16me'	WHERE id = '$idReduit'");
					} else {
						echo $tabEquipesIdSeiziemes[28] . '  ' . $clubA1629 . ' ' . $f16me . "<br/>";
						$idReduit = substr($tabEquipesIdSeiziemes[28], -5);
						$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f16me'	WHERE id = '$idReduit'");
					}
					//******************************** */
					if ($clubA8016 ==  $clubA1631) {
						echo $tabEquipesIdSeiziemes[31] . ' - ' . $clubA1632 . '  ' . $f16me . "<br/>";
						$idReduit = substr($tabEquipesIdSeiziemes[31], -5);
						$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f16me'	WHERE id = '$idReduit'");
					} else {
						echo $tabEquipesIdSeiziemes[30] . '  ' . $clubA1631 . '  ' . $f16me . "<br/>";
						$idReduit = substr($tabEquipesIdSeiziemes[30], -5);
						$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f16me'	WHERE id = '$idReduit'");
					}
				} elseif ($type == 18 or $type == 19) {
					huitieme2019($comite, $division, $annee, $bdd);
					traitementFinale($clubA1001, $clubA1002, $A1001, $A1002, $terr_annee, $champ, $vice, $bdd);
					traitementDemies($clubA1001, $clubA1002, $clubA2001, $clubA2002, $clubA2003, $clubA2004, $terr_annee, $f2me, $bdd);
					traitementQuarts($clubA2001, $clubA2002, $clubA2003, $clubA2004,$clubA4001, $clubA4002, $clubA4003, $clubA4004, $clubA4005, $clubA4006, $clubA4007, $clubA4008, $terr_annee, $f4me, $bdd);
					traitementHuitiemes($clubA4001, $clubA4002, $clubA4003, $clubA4004, $clubA4005, $clubA4006, $clubA4007, $clubA4008,$clubA8001, $clubA8002, $clubA8003, $clubA8004, $clubA8005, $clubA8006, $clubA8007, $clubA8008,
					$clubA8009, $clubA8010, $clubA8011, $clubA8012, $clubA8013, $clubA8014, $clubA8015, $clubA8016, $terr_annee, $f8me, $bdd);
				} elseif ($type == 14) {
					quarts2019($comite, $division, $annee, $bdd);
					traitementQuarts($clubA2001, $clubA2002, $clubA2003, $clubA2004,$clubA4001, $clubA4002, $clubA4003, $clubA4004, $clubA4005, $clubA4006, $clubA4007, $clubA4008, $terr_annee, $f4me, $bdd);
					traitementDemies($clubA1001, $clubA1002, $clubA2001, $clubA2002, $clubA2003, $clubA2004, $terr_annee, $f2me, $bdd);
			    	traitementFinale($clubA1001, $clubA1002, $A1001, $A1002, $terr_annee, $champ, $vice, $bdd);
				} 
				elseif ($type == 20) {
					quartsAR2019($comite, $division, $annee, $bdd);
					traitementQuarts($clubA2001, $clubA2002, $clubA2003, $clubA2004,$clubA4001, $clubA4002, $clubA4003, $clubA4004, $clubA4005, $clubA4006, $clubA4007, $clubA4008, $terr_annee, $f4me, $bdd);
			    	traitementDemies($clubA1001, $clubA1002, $clubA2001, $clubA2002, $clubA2003, $clubA2004, $terr_annee, $f2me, $bdd);
					traitementFinale($clubA1001, $clubA1002, $A1001, $A1002, $terr_annee, $champ, $vice, $bdd);
					
				} 
				elseif ($type == 15 ) {
					quartsDemiAR2019($comite, $division, $annee, $bdd);
					traitementFinale($clubA1001, $clubA1002, $A1001, $A1002, $terr_annee, $champ, $vice, $bdd);
					traitementDemies($clubA1001, $clubA1002, $clubA2001, $clubA2002, $clubA2003, $clubA2004, $terr_annee, $f2me, $bdd);
					traitementQuarts($clubA2001, $clubA2002, $clubA2003, $clubA2004,$clubA4001, $clubA4002, $clubA4003, $clubA4004, $clubA4005, $clubA4006, $clubA4007, $clubA4008, $terr_annee, $f4me, $bdd);
				
				} elseif ($type == 2 or $type == 3 or $type== 12) {
					demi2019($comite, $division, $annee, $bdd);
					traitementFinale($clubA1001, $clubA1002, $A1001, $A1002, $terr_annee, $champ, $vice, $bdd);
					traitementDemies($clubA1001, $clubA1002, $clubA2001, $clubA2002, $clubA2003, $clubA2004, $terr_annee, $f2me, $bdd);
					
				} elseif ($type == 1) {
					finale2019($comite, $division, $annee, $bdd);
					traitementFinale($clubA1001, $clubA1002, $A1001, $A1002, $terr_annee, $champ, $vice, $bdd);
	
				} else {
					echo "traitement impossible";
				}
			}
		}
	}
}
function traitementHuitiemes($clubA4001, $clubA4002, $clubA4003, $clubA4004,$clubA4005, $clubA4006, $clubA4007, $clubA4008, $clubA8001, $clubA8002, $clubA8003, $clubA8004, $clubA8005, $clubA8006, $clubA8007, $clubA8008,
$clubA8009, $clubA8010, $clubA8011, $clubA8012, $clubA8013, $clubA8014, $clubA8015, $clubA8016, $terr_annee, $f8me, $bdd)
{


	echo "<h2>" . $f8me . "</h2>";


	$tabEquipesIdHuitiemes = array();
	$tabEquipesHuitiemes	 = array($clubA8001, $clubA8002, $clubA8003, $clubA8004, $clubA8005, $clubA8006, $clubA8007, $clubA8008,
	$clubA8009, $clubA8010, $clubA8011, $clubA8012, $clubA8013, $clubA8014, $clubA8015, $clubA8016);

	

	foreach ($tabEquipesHuitiemes as $nomEquipe) {
		
		require '../../connect/connexion1.php';
		$reponse = $bdd->query(" SELECT id
					FROM bdclubs
					WHERE nom_1 = '$nomEquipe' ");
		while ($row = $reponse->fetch()) {
			$tabEquipesIdHuitiemes[] = $row[0];
		}
	};


// 1er huitième
					if ($clubA4001 == $clubA8001) {
						echo $tabEquipesIdHuitiemes[1] . ' - ' . $clubA8002 . '  ' . $f8me . "<br/>";
						$idReduit = substr($tabEquipesIdHuitiemes[1], -5);
						$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f8me'	WHERE id = '$idReduit'");
					} else {
						echo $tabEquipesIdHuitiemes[0] . ' - ' . $clubA8001 . '  ' . $f8me . "<br/>";
						$idReduit = substr($tabEquipesIdHuitiemes[0], -5);
						$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f8me'	WHERE id = '$idReduit'");
					}
// 2me huitième
					if ($clubA4002 ==  $clubA8003) {
						echo $tabEquipesIdHuitiemes[3] . ' - ' . $clubA8004 . '  ' . $f8me . "<br/>";
						$idReduit = substr($tabEquipesIdHuitiemes[3], -5);
						$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f8me'	WHERE id = '$idReduit'");
					} else {
						echo $tabEquipesIdHuitiemes[2] . ' - ' . $clubA8003 . '  ' . $f8me . "<br/>";
						$idReduit = substr($tabEquipesIdHuitiemes[2], -5);
						$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f8me'	WHERE id = '$idReduit'");
					}
// 3me huitième
					if ($clubA4003 ==  $clubA8005) {
						echo $tabEquipesIdHuitiemes[5] . ' - ' . $clubA8006 . '  ' . $f8me . "<br/>";
						$idReduit = substr($tabEquipesIdHuitiemes[5], -5);
						$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f8me'	WHERE id = '$idReduit'");
					} else {
						echo $tabEquipesIdHuitiemes[4] . ' - ' . $clubA8005 . '  ' . $f8me . "<br/>";
						$idReduit = substr($tabEquipesIdHuitiemes[4], -5);
						$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f8me'	WHERE id = '$idReduit'");
					}
// 4me huitième
					if ($clubA4004 ==  $clubA8007) {
						echo $tabEquipesIdHuitiemes[7] . ' - ' . $clubA8008 . '  ' . $f8me . "<br/>";
						$idReduit = substr($tabEquipesIdHuitiemes[7], -5);
						$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f8me'	WHERE id = '$idReduit'");
					} else {
						echo $tabEquipesIdHuitiemes[6] . ' - ' . $clubA8007 . '  ' . $f8me . "<br/>";
						$idReduit = substr($tabEquipesIdHuitiemes[6], -5);
						$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f8me'	WHERE id = '$idReduit'");
					}
// 5me huitième
					if ($clubA4005 ==  $clubA8009) {
						echo $tabEquipesIdHuitiemes[9] . ' - ' . $clubA8010 . '  ' . $f8me . "<br/>";
						$idReduit = substr($tabEquipesIdHuitiemes[9], -5);
						$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f8me'	WHERE id = '$idReduit'");
					} else {
						echo $tabEquipesIdHuitiemes[8] . ' - ' . $clubA8009 . '  ' . $f8me . "<br/>";
						$idReduit = substr($tabEquipesIdHuitiemes[8], -5);
						$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f8me'	WHERE id = '$idReduit'");
					}
// 6me huitième
					if ($clubA4006 ==  $clubA8011) {
						echo $tabEquipesIdHuitiemes[11] . ' - ' . $clubA8012 . '  ' . $f8me . "<br/>";
						$idReduit = substr($tabEquipesIdHuitiemes[11], -5);
						$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f8me'	WHERE id = '$idReduit'");
					} else {
						echo $tabEquipesIdHuitiemes[10] . ' - ' . $clubA8011 . '  ' . $f8me . "<br/>";
						$idReduit = substr($tabEquipesIdHuitiemes[10], -5);
						$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f8me'	WHERE id = '$idReduit'");
					}
// 7me huitième
					if ($clubA4007 ==  $clubA8013) {
						echo $tabEquipesIdHuitiemes[13] . ' - ' . $clubA8014 . '  ' . $f8me . "<br/>";
						$idReduit = substr($tabEquipesIdHuitiemes[13], -5);
						$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f8me'	WHERE id = '$idReduit'");
					} else {
						echo $tabEquipesIdHuitiemes[12]. ' - ' . $clubA8013 . '  ' . $f8me . "<br/>";
						$idReduit = substr($tabEquipesIdHuitiemes[12], -5);
						$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f8me'	WHERE id = '$idReduit'");
					}
// 8me huitième
					if ($clubA4008 ==  $clubA8015) {
						echo $tabEquipesIdHuitiemes[15] . ' - ' . $clubA8016 . '  ' . $f8me . "<br/>";
						$idReduit = substr($tabEquipesIdHuitiemes[15], -5);
						$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f8me'	WHERE id = '$idReduit'");
					} else {
						echo $tabEquipesIdHuitiemes[14] . ' - ' . $clubA8015 . '  ' . $f8me . "<br/>";
						$idReduit = substr($tabEquipesIdHuitiemes[14], -5);
						$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f8me'	WHERE id = '$idReduit'");
					}
	
}

function traitementQuarts($clubA2001, $clubA2002, $clubA2003, $clubA2004, $clubA4001, $clubA4002, $clubA4003, $clubA4004, $clubA4005, $clubA4006, $clubA4007, $clubA4008, $terr_annee, $f4me, $bdd)
{

/*
	echo $clubA2001;echo "<br>";
	echo $clubA2002;echo "<br>";
	echo $clubA2003;echo "<br>";
	echo $clubA2004;echo "<br>";
*/	
	$tabEquipesIdQuart = array();
	$tabEquipesQuarts	 = array($clubA4001, $clubA4002, $clubA4003, $clubA4004, $clubA4005, $clubA4006, $clubA4007, $clubA4008);

	echo "<h2>" . $f4me . "</h2>";

	foreach ($tabEquipesQuarts as $nomEquipe) {
		//echo $nomEquipe; echo "<br>";
		
		require '../../connect/connexion1.php';
		$reponse = $bdd->query(" SELECT id
					FROM bdclubs
					WHERE nom_1 = '$nomEquipe' ");
		while ($row = $reponse->fetch()) {
			$tabEquipesIdQuart[] = $row[0];
		}
	};
	/*
	echo $tabEquipesIdQuart[0].'-'.$clubA4001;echo "<br>";
	echo $tabEquipesIdQuart[1].'-'.$clubA4002;echo "<br>";
	echo $tabEquipesIdQuart[2].'-'.$clubA4003;echo "<br>";
	echo $tabEquipesIdQuart[3].'-'.$clubA4004;echo "<br>";
	echo $tabEquipesIdQuart[4].'-'.$clubA4005;echo "<br>";
	echo $tabEquipesIdQuart[5].'-'.$clubA4006;echo "<br>";
	echo $tabEquipesIdQuart[6].'-'.$clubA4007;echo "<br>";
	echo $tabEquipesIdQuart[7].'-'.$clubA4008;echo "<br>";
*/
// 1er quart
// echo "(1)".$clubA2001 ."==". $clubA4001.' ' .$clubA4002. "<br/>";
	if ($clubA2001 == $clubA4001) {
		echo $tabEquipesIdQuart[1] . ' - ' . $clubA4002 . '  ' . $f4me . "<br/>";
		$idReduit = substr($tabEquipesIdQuart[1], -5);
		$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f4me'	WHERE id = '$idReduit'");
	} else {
		echo $tabEquipesIdQuart[0] . '- ' . $clubA4001 . '  ' . $f4me . "<br/>";
		$idReduit = substr($tabEquipesIdQuart[0], -5);
		$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f4me'	WHERE id = '$idReduit'");
	}
// 2me quart
//echo "(2)".$clubA2002 ."==". $clubA4002.' ' .$clubA4004. "<br/>";
	if ($clubA2002 == $clubA4003) {
		echo $tabEquipesIdQuart[3] . ' - ' . $clubA4004 . '  ' . $f4me . "<br/>";
		$idReduit = substr($tabEquipesIdQuart[3], -5);
		$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f4me'	WHERE id = '$idReduit'");
	} else {
		echo $tabEquipesIdQuart[2] . '- ' . $clubA4003 . '  ' . $f4me . "<br/>";
		$idReduit = substr($tabEquipesIdQuart[2], -5);
		$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f4me'	WHERE id = '$idReduit'");
	}
// 3me quart
	if ($clubA2003 == $clubA4005) {
		echo $tabEquipesIdQuart[5] . ' - ' . $clubA4006 . '  ' . $f4me . "<br/>";
		$idReduit = substr($tabEquipesIdQuart[5], -5);
		$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f4me'	WHERE id = '$idReduit'");
	} else {
		echo $tabEquipesIdQuart[4] . '- ' . $clubA4005 . '  ' . $f4me . "<br/>";
		$idReduit = substr($tabEquipesIdQuart[4], -5);
		$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f4me'	WHERE id = '$idReduit'");
	}
// 4me quart
	if ($clubA2004 == $clubA4007) {
		echo $tabEquipesIdQuart[7] . ' - ' . $clubA4008 . '  ' . $f4me . "<br/>";
		$idReduit = substr($tabEquipesIdQuart[7], -5);
		$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f4me'	WHERE id = '$idReduit'");
	} else {
		echo $tabEquipesIdQuart[6] . '- ' . $clubA4007 . '  ' . $f4me . "<br/>";
		$idReduit = substr($tabEquipesIdQuart[6], -5);
		$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f4me'	WHERE id = '$idReduit'");
	}
}

function traitementDemies($clubA1001, $clubA1002, $clubA2001, $clubA2002, $clubA2003, $clubA2004, $terr_annee, $f2me, $bdd)
{
	$tabEquipesIdDemi = array();
	$tabEquipesDemi = array($clubA2001, $clubA2002, $clubA2003, $clubA2004);


	echo "<h2>" . $f2me . "</h2>";

	foreach ($tabEquipesDemi as $nomEquipe) {
		require '../../connect/connexion1.php';
		$reponse = $bdd->query(" SELECT id
	FROM bdclubs
	WHERE nom_1 = '$nomEquipe' ");
		while ($row = $reponse->fetch()) {
			$tabEquipesIdDemi[] = $row[0];
		}
	};

	if ($clubA1001 == $clubA2001) {
		echo $tabEquipesIdDemi[1] . ' - ' . $clubA2002 . '  ' . $f2me . "<br/>";
		$idReduit = substr($tabEquipesIdDemi[1], -5);
		$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f2me'	WHERE id = '$idReduit'");
	} else {
		echo $tabEquipesIdDemi[0] . ' - ' . $clubA2001 . '  ' . $f2me . "<br/>";
		$idReduit = substr($tabEquipesIdDemi[0], -5);
		$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f2me'	WHERE id = '$idReduit'");
	}

	if ($clubA1002 == $clubA2003) {
		echo $tabEquipesIdDemi[3] . ' - ' . $clubA2004 . '  ' . $f2me . "<br/>";
		$idReduit = substr($tabEquipesIdDemi[3], -5);
		$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f2me'	WHERE id = '$idReduit'");
	} else {
		echo $tabEquipesIdDemi[2] . ' - ' . $clubA2003 . '  ' . $f2me . "<br/>";
		$idReduit = substr($tabEquipesIdDemi[2], -5);
		$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f2me'	WHERE id = '$idReduit'");
	}
}

function traitementFinale($clubA1001, $clubA1002, $A1001, $A1002, $terr_annee, $champ, $vice, $bdd)
{

	//echo $clubA1001 . ' : ' . $A1001 . "<br/>";
	//echo $clubA1002 . ' : ' . $A1002 . "<br/>";
	$tabEquipesId = array();
	$tabEquipes = array($clubA1001, $clubA1002);

	foreach ($tabEquipes as $nomEquipe) {
		require '../../connect/connexion1.php';
		$reponse = $bdd->query(" SELECT id
	FROM bdclubs
	WHERE nom_1 = '$nomEquipe' ");
		while ($row = $reponse->fetch()) {
			$tabEquipesId[] = $row[0];
		}
	};

	//echo $clubA1001 . ' : ' . $A1001 . "<br/>";
	//echo $clubA1002 . ' : ' . $A1002 . "<br/>";

	if ($A1001 < $A1002) {
		echo "test1";
		echo "<h2>" . $vice . "</h2>";
		echo $tabEquipesId[1] . ' - ' . $clubA1001 . ' ' . $vice . "<br/>";
		$idReduit = substr($tabEquipesId[1], -5);
		$bdd->exec("UPDATE bdsaisons SET  $terr_annee = '$vice'	WHERE id = '$idReduit'");
		
		echo "<h2>" . $champ . "</h2>";
		echo $tabEquipesId[0] . ' - ' . $clubA1002 . ' ' . $champ  . "<br/>";
		$idReduit = substr($tabEquipesId[0], -5);
		$bdd->exec("UPDATE bdsaisons SET $terr_annee = '$champ'	WHERE id = '$idReduit'");

		
	} else {
		echo "<h2>" . $vice . "</h2>";
		echo $tabEquipesId[1] . ' - ' . $clubA1002 . ' ' . $vice . "<br/>";
		$idReduit = substr($tabEquipesId[1], -5);
		$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$vice'	WHERE id = '$idReduit'");
		
		echo "<h2>" . $champ . "</h2>";
		echo $tabEquipesId[0] . ' - ' . $clubA1001 . ' ' . $champ . "<br/>";
		$idReduit = substr($tabEquipesId[0], -5);
		$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$champ'	WHERE id = '$idReduit'");

		
	}
}
?>
