<?php
if (isset($_GET['comite'])) {
	$comite = $_GET['comite'];
}
if (isset($_GET['comite2'])) {
	$comite2 = $_GET['comite2'];
}
if (isset($_GET['champ'])) {
	$champ = $_GET['champ'];
}
if (isset($_GET['bddComite'])) {
	$bddComite = $_GET['bddComite'];
}

require '../resultats/fonctions.php';
require 'fonctions.php';
require "../Phpleague/php" . $bddComite . "/consult/fonctions_matchs.php";
require "../Phpleague/php" . $bddComite . "/lang/lang_fr.php";
require '../fichierConfig.php';


$phpcomite_divisions = "php" . '' . $bddComite . '' . "_divisions";
$id = $champ - 1;
include("../saison.php");

require("../connect/connexion1.php");
division($champ, $bdd);
nomLigue2($bddComite, $champ, $bdd);
?>
<!DOCTYPE html>
<html lang="fr">

<head>

	<title>Résultats et classements <?php echo $ligne1 ." ". $ligne2;?></title>
	<link rel="stylesheet" type="text/css" href="menu_smart2.css">
	<link type="text/css" rel="stylesheet" href="10.css">
	<link type="text/css" rel="stylesheet" href="../ligne1.css">
	<link type="text/css" rel="stylesheet" href="paramTiroir.css">
	<link type="text/css" rel="stylesheet" href="../Phpleague/<?php echo "php" . $bddComite; ?>/league.css">
	<meta name="description" content="Resultat, classement, stats et infos de la poule nom de la poule nom de la competition">
	<meta name="classification" content="Sport,Rugby">
	<meta name="resource-type" content="document">
	<meta name="copyright" content="Comite Midi Pyrenees de Rugby">
	<meta name="author" content="Equipe France Finales Rugby">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="robots" content="All">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9177538664500260" crossorigin="anonymous"></script>
</head>

<body 
>
	<div class="fixed-header">
		<div class="container">
			<table class="width98PC borderColorBlack borderWidth1">
				<tr class="borderColorBlack borderWidth1">
					<td class="h22 width5PC"><a href="sommaire.php"><img src="../images/smart/flecheGauche.jpg" width="27" height="20" alt="fléche retour"></a></td>
					<td class="h22 width95PC"> France Finales Rugby </td>
				</tr>
				<tr>
					<td colspan="2" class="h12" >
						
						
					<span class=" borderColorBlack" >
						<?php
						//affichage du type de championnat
						//	et de la division
						//nomLigue2($bddComite, $champ, $bdd);
						?>
						</span>
						<?php
						echo $ligne1 . "<br>" . $ligne2;
						?>
					</td>
				</tr>
			</table>
			<table class="width100PC">
				<tr>
					<td>

						<?php
						echo "<br>";

						$champLigue = substr($champ, 0, 2) * 10;
						$champDiv = substr($champ, -3);

						if ($bddComite == "pro"  or $bddComite == "fed3NE") {
							// Affichage de bandeaux Champ de France et modalités de qualif
							require("lienPhaseFinaleFrance.php");
						} else {
							require("../connect/connexion2.php");
							require("lienPhaseFinale.php");
						}
						?>
					</td>
				</tr>
			</table>
			<?php
			echo "<br>";
			//include("texte_defilant.htm");

			if ($bddComite == "ab" or $bddComite == "au" or $bddComite == "ca")
				require("menus/menuARA.php");
			elseif ($bddComite == "pro" and ($champ == 990140 or $champ == 990240))
				require("menus/menuFed1.php");
			elseif ($bddComite == "pro" and ($champ == 990150 or $champ == 990250))
				require("menus/menuFed2.php");
			elseif ($bddComite == "fed3NE") {
				require("menus/menuFed3.php");

				require("sommaireParticulier.php");
			}
			?>
			<hr>

		</div>
	</div>

	<!-- fin entete figee -------->


	<div class="container">
		<?php

		if ($bddComite == "pro") {
			echo "</br>";
		} elseif ($bddComite == "f1" or $bddComite == "fed2" or $bddComite == "fed3NE") {
			echo "</br>";
		}

		if ($bddComite == "fed3NE" or $bddComite == "pro") {
			echo "<br><br><br></br><br></br><br></br></br><br><br><br>";
		} elseif ($bddComite == "ab" or $bddComite == "au" or $bddComite == "ca") {
			echo "<br><br><br><br><br><br><br><br></br><br><br>";
		} else {
			echo '<br></br><br><br>';
		}


		require("../connect/connexion6.php");

		divisionPlusPoule($bddComite, $champ, $bdd);

		//------- Cas comite PRO fed 1, 2, 3 fem----------

		$nbreChamp = 1;


		if ($bddComite == "pro" or $bddComite == "fed3NE") {
			$phpComite = "php" . $bddComite;
			$finChamp =	$champ + $max;
			//	if (substr($champ,-1)==0)
			//	$champ=$champ+1;

			// Divisions pros (top14, Pro D2, Nationale 1 et 2)
			if ($champ == 990110)
				//	{$tabLigue = array(990110, 990120, 990130, 990135, 990136);}
				$tabLigue = $tableau110;
			// Fédérale 1
			elseif ($champ == 990140) {
				$tabLigue = $tableauFed1;;
			} elseif ($champ == 990240) {
				$tabLigue = $tableauFed1B;
			}

			// Fédérale 2
			elseif ($champ == 990150) {
				$tabLigue = $tableauFed2;
			} elseif ($champ == 990250) {
				$tabLigue = $tableauFed2B;
			}

			// Fédérale 3
			elseif ($champ == 991161 or $champ == 992161) {
				$tabLigue =  $tableauSmartFed3;
			} elseif ($champ == 991261 or $champ == 992261) {
				$tabLigue = $tableauSmartResFed3;
			}

			// Féminines
			elseif ($champ == 880281) {
				$tabLigue = $tableauFem;
			}

			foreach ($tabLigue as $champ) {


				//echo "champ : ".$champ;
				//Traitement du numéro des poules

				$poule = substr($champ, -1);


				//echo "poule 1 ".$poule;
				// traitement des poules de 10 à 20
				$pref = 8;
				$pouleGS = $pref + $poule;

				// définiton de l'ancre -->

				$ancre = substr($champ, -1);
				$pref = 8;
				$ancreGS = $pref + $ancre;

				if ($champ >= 992161 and $champ < 992169) $ancre = intval($ancreGS);
				elseif ($champ >= 992261 and $champ < 992269) $ancre = intval($ancreGS);
				else
					$ancre = substr($champ, -1);

		?>

				<a name="<?php echo $ancre; ?>"></a>

				<table class="width90PC marginAuto" style = "padding-bottom : 10px">
					<tr>
						<td class="titrePlus  ">
							<?php

							if ($champ == 990110) echo "TOP 14";
							elseif ($champ == 990120) echo "Pro D2";
							elseif ($champ == 990130) echo "Nationale";
							elseif ($champ == 990135) echo "Nationale 2 - Poule 1";
							elseif ($champ == 990136) echo "Nationale 2 - Poule 2";
							elseif ($champ == 880281) echo "Elite 1";
							elseif ($champ == 880285) echo "Elite 2";
							elseif ($champ >= 880291 and $champ < 880295) echo "Fédérale 1 - Poule " . substr($champ, -1);
							elseif ($champ >= 992161 and $champ < 992169) echo "Poule " . intval($pouleGS);
							elseif ($champ >= 992261 and $champ < 992269) echo "Poule " . intval($pouleGS);
							else  echo "Poule " . intval($poule); ?>
						</td>
					</tr>
				</table>

				<div class="center">

					<?php
					if ($champ > 990000)
					AffichageLogos($champ, $phpComite, true, $bdd); ?>
				</div>
				<?php
				aff_journee($champ, $bdd);
				maj($champ, true, 'php' . $comite, $bdd);
				clmnt($champ, true, $bdd);
				journeesReportees($phpComite, $champ, $bdd);
				perequation($phpComite, $champ, $bdd); ?>
				<br>
				<table class="width90PC marginAuto ">
					<tr>
						<td class=" size4 colorRed backgroundYellow"><a style="text-decoration:none; color: red" href="calendrier.php?champ=<?php echo $champ; ?>&comite=<?php echo $comite; ?>&bddComite=<?php echo $bddComite; ?>" target="_blank">
								<b>-- Calendrier complet -- </a></td>
					</tr>
				</table>

			<?php aff_journeeSupp($champ,  $bdd);



				echo "<hr>";
				echo "<br>";


				$nbreChamp = $nbreChamp + 1;
			}
		}
		//************************************  
		//------  ligues (ARA, NAQ, OCC)------
		//************************************
		elseif ($bddComite == "au" or $bddComite == "ca" or $bddComite == "ab") {

			//	if (substr($champ, -3) != 1271) {
			$phpComite = "php" . $bddComite;

			if (substr($champ, -1) == 0)
				$champ = $champ + 1;

			if (is_numeric($champ) && is_numeric($max)) {
				// cas d'une division avec 10 poules (saison 2022-2023 ARA R�gionale 3)
				if ($champ == 100191)
					$finChamp = 100201;
				else
					$finChamp = $champ + $max;
			}

			echo "<br>";

			for ($i = $champ; $i < $finChamp; $i++) {
				divisionPlusPoule($bddComite, $champ, $bdd);
			?>

				<table class="width90PC marginAuto" style = "padding-bottom : 10px" >
					<tr>
						<td class="titrePlus"><?php echo $poule; ?></td>
					</tr>
				</table>

				<div class="center">
					<?php AffichageLogos($champ, $phpComite, true, $bdd); ?>
				</div>
				<?php
				aff_journee($champ, $bdd);
				maj($champ, true, 'php' . $comite, $bdd);
				clmnt($champ, true, $bdd);
				journeesReportees($phpComite, $champ, $bdd);
				perequation($phpComite, $champ, $bdd);		?>
				<br>
				<table class="width90PC marginAuto">
					<tr>
						<td class="size4 colorRed backgroundYellow decorationNone"><a style="text-decoration:none; color: red" href="calendrier.php?champ=<?php echo $champ; ?>&bddComite=<?php echo $bddComite; ?>&comite=<?php echo $comite; ?>" target="_blank">
								<b>-- Calendrier complet -- </a></td>
					</tr>
				</table>

			<?php aff_journeeSupp($champ,  $bdd);
				echo "<hr>";
				echo "<br>";
				$champ = $champ + 1;
				$nbreChamp = $nbreChamp + 1;
			}
		} else {

			// Autre Ligues

			listePoule($champ, $bddComite, $bdd);

			foreach ($tabDivisions as $champ) {
				echo "<br>";
				// echo "champ :".$champ;
				//  echo "champ apres else :".$champ;
				require("../connect/connexion6.php");
				divisionPlusPoule($bddComite, $champ, $bdd);
			?>
				<table class="width90PC marginAuto" style = "padding-bottom : 10px">
					<tr>
						<td class="titrePlus"><?php echo $poule; ?></td>
					</tr>
				</table>

				<div class="center">
					<?php AffichageLogos($champ, "php" . $bddComite, true, $bdd); ?></div>
				<?php
				aff_journee($champ, $bdd);
				maj($champ, true, 'php' . $comite, $bdd);
				clmnt($champ, true, $bdd);
				$phpComite = "php" . $bddComite;
				journeesReportees($phpComite, $champ, $bdd);
				perequation($phpComite, $champ, $bdd);
				?>
				
				<table class="width90PC marginAuto">
					<tr>
						<td class="size4 colorRed backgroundYellow"><a style="text-decoration:none; color: red" href="calendrier.php?champ=<?php echo $champ; ?>&bddComite=<?php echo $bddComite; ?>&comite=<?php echo $comite; ?>" target="_blank">
								<b>-- Calendrier complet -- </a></td>
					</tr>
				</table>

				<?php aff_journeeSupp($champ,  $bdd); ?>
				<hr>
				<br>

		<?php
				$nbreChamp = $nbreChamp + 1;
			}
		}
		/*
  <!--
  <a href="prono/prono.php">test</a>
  -->
*/
		echo "<br>";
		include("infos_centre.php");
		echo "<br>" . "<br>";
		require("bas.php");
		echo "<hr>";
		include("../pub/pub_displayCarre.php");
		?>
	</div>
</body>

</html>