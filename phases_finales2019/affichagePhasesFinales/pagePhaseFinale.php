 <?php
	if (isset($_GET['annee'])) $annee = $_GET['annee'];
	else $annee = 2024;
	if (isset($_GET['division'])) $division = $_GET['division'];
	else $division = 110;

	?>
 <!DOCTYPE html>
 <html lang="fr">

 <head>
 	<link rel="canonical" href="https://francefinalesrugby.fr/phases_finales2019/affichagePhaseFinales/pagePhaseFinale.php?annee=<?php echo $annee; ?>&division=<?php echo $division; ?>">
 	<title>Championnat de France <?php echo $annee; ?></title>
 	<meta name="description" content="">
 	<meta name="keywords" content="Presentation de la competititon et de tous les champions de France 1re Serie. Palmares complet de la 1re Serie.">
 	<meta name="classification" content="Sport,Rugby">
 	<meta name="resource-type" content="document">
 	<meta name="copyright" content="Comite Midi Pyrenees de Rugby">
 	<meta name="author" content="Equipe Onepip">
 	<meta name="robots" content="All">
 	<link rel="stylesheet" type="text/css" href="../../ligne1.css">
 	<link rel="stylesheet" type="text/css" href="2.css">
<!-- 	<link type="text/css" rel="stylesheet" href="../../resultats/sommaire.css">-->

 	<meta name="viewport" content="width=device-width">


 </head>

 <body class="marginAuto colorBlack backgroundEAECEB">
 	<script>
 		function ouvrirPopup(page, nom, options) {
 			window.open(page, nom, options);
 		}
 	</script>
 	<?php
		require '../../phases_finales2019/fonctionsChampFrance2019.php';
		require '../../connect/connexion5.php';

		nomDivision($division);

		require '../../connect/connexion1.php';
		date2019($division, $annee, $bdd);
		trenteDeuxieme2019($division, $annee, $bdd);

		traitementScores(3201, 3264);
		traitementScores(1601, 1632);
		traitementScores(8001, 8016);
		traitementScores(4001, 4008);
		traitementScores(2001, 2004);
		traitementScores(1001, 1002);

		//echo $champion;
		//echo $division;
		//echo "<br/>";
		//echo $type; echo "<br/>";

		if ($annee > 2024)
			require 'hautindex2025.php';
		elseif ($annee > 2022)
			require 'hautindex2023.php';
		elseif ($annee == 2022)
			require 'hautindex2022.php';
		elseif ($annee > 2020)
			require 'hautindex2021.php';
		else
			require 'hautindex.php';


		require 'bandeauNavigation.php';


		if ($annee == 2020 or ($annee == 2021 and $division > 130)) {
			require 'infosCovid.php';
		} else {
			//*******    affichage des équipes engagées en championnat de France    ******/		
			$tabDivisions = array(1700, 1800);
			if (in_array($division, $tabDivisions) and $annee == 2025) {
				require 'equipesEngagees.php';
			} elseif ($annee > 2025) {
				//phase finales après l'année en cours

				require 'finRegionales.php';
			} else {
				//echo $type;	

				if (substr($type, 0, 1) == 6)

					require "commPfParticulieres.php";

				elseif (substr($type, 0, 1) == 8) {

					championDeFrance($clubA1001, $clubA1002, $A1001, $A1002, $bdd);
					//********   Pro TOP 14    *********	

					if ($division == '110')
						require "110_2019.php";

					//********   Pro D2    *********	
					elseif ($division == '120')
						require "120_2019.php";

					//********   Nationale    *********	
					elseif ($division == '130') {
						if ($annee < 2024) {
							require "130_2019.php";
						} else {
							require "130_2024.php";
						}
					}
					//********   Nationale II   *********	
					elseif ($division == '135')
						require "0804AR.php";

					//********   Fed1    *********	
					elseif ($division == '140')
						require "0164AR.php";
				} elseif (substr($type, 0, 1) == '9' or substr($type, 0, 1) == '7') {

					//********    trente deuxième    *********	
					championDeFrance($clubA1001, $clubA1002, $A1001, $A1002, $bdd);
					// traitementScores (3201, 3264);

					if (substr($type, 0, 3) == 932 or substr($type, 0, 3) == 964 or substr($type, 0, 3) == 732 or substr($type, 0, 3) == 764) {
						if (substr($type, 1, 2) == 64) {
							require("3216meAR.php");
						} else {
							require "32me.php";
						}
					}

					//********    seizième    *********
					elseif (substr($type, 3, 2) == 16 or substr($type, 3, 2) == 32) {

						if (substr($type, 3, 2) == 32) {
							require "1608meAR.php";
						} else {
							require "16me.php";
						}
					}
					//********    huitième    *********
					elseif (substr($type, 5, 2) == '08' or substr($type, 5, 2) == '16') {
						//traitementScores (4001, 4008);
						if (substr($type, 5, 4) == 1604)
							require "8meAR.php";
						elseif (substr($type, 5, 6) == 160804)
							require "8meQDAR.php";
						elseif (substr($type, 5, 4) == 1608)
							require "8meQAR.php";
						else
							require "8me.php";
					}
					//********   Quarts   *********		
					elseif (substr($type, 7, 2) == '04' or substr($type, 7, 2) == '08') {
						if (substr($type, 7, 4) == '0164')
							require "0164AR.php";
						else
							require "quarts.php";
					}
					//********   demi   *********			
					elseif (substr($type, 9, 2) == '02' or substr($type, 9, 2) == '22' or substr($type, 9, 2) == '42' or substr($type, 9, 2) == '04') {
						if (substr($type, 9, 2) == '02')
							require "demi.php";
						else
							require "demiAR.php";
					}
					//********   finale   *********			
					elseif (substr($type, 9, 2) == '01') {
						if (substr($type, 9, 2) == '01')
							require "finale.php";
						else
							require "finaleAR.php";
					}
					//********   Suppression d'un championnat   *********			
					elseif (substr($type, 0, 2) == '99') {
						require "plusDeChamp.php";
					}
				}
				if ($division == 135 and $annee == 2025)
					require 'matchAccession.php';
			}

		?>
 </body>
 <footer>
 <?php
		}
		require 'bas.php'; ?>
 </footer>

 </html>