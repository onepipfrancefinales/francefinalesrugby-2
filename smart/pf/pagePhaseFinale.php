 <?php
	if (isset($_GET['annee'])) $annee = $_GET['annee'];	else $annee = 2025;
	if (isset($_GET['division'])) $division = $_GET['division'];	else $division = 170;
	if (isset($_GET['divFem'])) $divFem = $_GET['divFem'];	else $divFem = "fed1";

	require("../../phases_finales2019/fonctionsChampFrance2019.php");
	require '../../connect/connexion5.php';
	nomDivision($division);

	require '../../connect/connexion1.php';

	date2019($division, $annee, $bdd);

	$reponse = $bdd->query("	
	SELECT type 
	FROM bdpffrance 
	WHERE id='$division' ");

	while ($row = $reponse->fetch()) {
		$type = $row[0];
	}
	?>
 <!DOCTYPE html>
 <html lang="fr">

 <head>
 	<title>Championnat de France <?php echo $annee . ' ' . $nomDivision; ?></title>
 	<link rel="canonical" href="https://francefinalesrugby.fr/smart/pf/pagePhaseFinale.php?division=<?php echo $division; ?>&annee=<?php echo $annee; ?>">
 	<meta name="description" content="Phase finale <?php echo $annee; ?> du championnat de France <?php echo $nomDivision; ?>">

 	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 	<!--<link rel="stylesheet" type="text/css" href="../2.css">-->
 	<link rel="stylesheet" type="text/css" href="AA2.css">
 	<link type="text/css" rel="stylesheet" href="../10.css">
 	<link type="text/css" rel="stylesheet" href="paramTiroir.css">
 	<link type="text/css" rel="stylesheet" href="../../ligne1.css">
 	<meta name=viewport content="width=device-width, initial-scale=1">
		<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9177538664500260" crossorigin="anonymous"></script>
 </head>

 <body class="backgroundEAECEB colorBlack">
 	<div class="fixed-header">
 		<div class="container">
 			<?php
				include 'entete.php';
				include 'liensdiv.php';
				echo "<br>";
				?>
 		</div>
 	</div>

 	<!-- fin entete figée -->

 	<div class="container">
 		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
 		<?php
			//***************** tableaux de présentation   ***********************
			$tabDivisions = array(1700, 1800);
			if (in_array($division, $tabDivisions) and $annee == 2025) {
				trenteDeuxieme2019($division, $annee, $bdd);
				require 'equipesEngagees.php';
			}
			//***************** Feminines Elites    ***********************
			elseif ($division == 280 || $division == 285) {
				trenteDeuxieme2019($division, $annee, $bdd);
				if ($divFem == "femElite1" || $divFem == "femElite2") {
			?>
 				<br><br>
 				<table class="borderNone">
 					<tr>
 						<td class="coin9"> <a href="pagePhaseFinale.php?divFem=femElite1&division=280&annee=<?php echo $annee; ?>">Elite 1</td>
 						<td class="coin9"> <a href="pagePhaseFinale.php?divFem=femElite2&division=285&annee=<?php echo $annee; ?>">Elite 2</td>
 					</tr>
 				</table>
 			<?php
				}

				if ($divFem == "femElite1") {
					echo "<h1 class=\"center  styleArial\" style=\"margin-top: 0px;\">Féminines Elite 1 </h1>";
				} else if ($divFem == "femElite2") {
					echo "<h1 class=\"center  styleArial\" style=\"margin-top: 0px;\">Féminines Elite 2 </h1>";
				}
				require "tableauxPhasesFinales.php";
			}

			//***************** Feminines Fédérales    ***********************
			elseif ($division == 290 || $division == 295) {

				trenteDeuxieme2019($division, $annee, $bdd);
				if ($divFem == "femFed1" || $divFem == "femFed2") {

				?>
 				<br><br>
 				<table class="borderNone">
 					<tr>
 						<td class="coin9"> <a href="pagePhaseFinale.php?divFem=femFed1&division=290&annee=<?php echo $annee; ?>">Fédérale 1</td>
 						<td class="coin9"> <a href="pagePhaseFinale.php?divFem=femFed2&division=295&annee=<?php echo $annee; ?>">Fédérale 2</td>
 					</tr>
 				</table>
 		<?php
				}
				if ($divFem == "femFed1") {
					echo "<h1 class=\"center  styleArial\" style=\"margin-top: 0px;\">Féminines Fédérale 1 </h1>";
				} else if ($divFem == "femFed2") {
					echo "<h1 class=\"center  styleArial\" style=\"margin-top: 0px;\">Féminines Fédérale 2 </h1>";
				}
				include "tableauxPhasesFinales.php";
			} else if (substr($type, 0, 1) == '8') {

				//**************  Exceptions type débute par 8 *************************	
				trenteDeuxieme2019($division, $annee, $bdd);

				if ($division == '110')
					require '8110_top14.php';

				elseif ($division == '120')
					require '8120_prod2.php';

				elseif ($division == '130') 
					require '8130_nationale1.php';

				 elseif ($division == '135') {
				
					require '8135_nationale2.php';
				 }

			}
			// *************    insertion de barrages   ********************************
			else {
				if (rechercheBarrages($division, $annee, $bdd))
					require "barrages.php";

			// ***************   phases réguliéres   ********************************

				trenteDeuxieme2019($division, $annee, $bdd);


				traitementScores(3201, 3264);
				traitementScores(1601, 1632);
				traitementScores(8001, 8016);
				traitementScores(4001, 4008);
				traitementScores(2001, 2004);

				if ((substr($type, 0, 1) == '9' or substr($type, 0, 1) == '7') and strlen($division) == '3' or $division == "9180") {

					require "tableauxPhasesFinales.php";
				}
				if ($division == '135')
				require require '8135_nationale2.php';
			}
			require '../bas.php';

			?>
 	</div>
 </body>

 </html>