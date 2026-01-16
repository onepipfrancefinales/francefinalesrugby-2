<?php
include("../saison.php");
require("../connect/connexion6.php");
include("../resultats/fonctions2.php");
require '../Phpleague/phppro/consult/fonctions_matchs.php';
require '../Phpleague/phppro/lang/lang_fr.php';
$comite = "phppro";
$CMT = "FEM";
$cmt = "fem";
$division = '280';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
	<meta name="description" content="R�sulats de toutes les comp�titions Professionnelles. Calendriers, r�sultats et statistiques de l'honneur � la 4me S�rie, �quipes II comprises. Egalement disponible les phases finales territoriales des ann�es pr�c�dentes et les palmar�s territoriaux des differentes divisions du comit�.">
	<meta name="keywords" content="comit� Bourgogne,Comite Midi Pyrenees de Rugby,Comite Midi Pyrenees Rugby,Stade toulousain,Colomiers,FFR,Rugby,Federation,Fran�aise,Rugbyman,Rugbymen,Sport,Ballon,Ovale,">
	<meta name="classification" content="Sport,Rugby">
	<meta name="resource-type" content="document">
	<meta name="copyright" content="Comite Midi Pyrenees de Rugby">
	<meta name="author" content="Equipe Onepip">
	<meta name="robots" content="All">
	<link type="text/css" rel="stylesheet" href="../Phpleague/phppro/league.css" />
	<link type="text/css" rel="stylesheet" href="../formulaireDG.css">
	<link type="text/css" rel="stylesheet" href="../ligne1.css">
	<link type="text/css" rel="stylesheet" href="../../resultats/resultat.css" />
	<title>Championnat de France Féminin Elite</title>
</head>

<body>
	<table class="table">
		<tr>
			<td colspan="3">
				<img src="../../images/stade3.jpg" width="1250" height="150">
			</td>
		</tr>
		<tr>
			<td colspan="3">
				<?php include "ligne_fem.php"; ?>
			</td>
		</tr>
		<tr>
			<!-- Colonne de gauche -->
			<td class="colonneDroiteGaucheFem">
				<?php include "01gauche_fem.php";  ?>
			</td>
			<td class="colonneCentrale">
				<h1>Championnats de France <br> Féminins Elites<h1>

						<?php
						require '../resultats/liensDivers.php';
						require '../resultats/sommaires.php';
						echo "<hr />" . "<hr />";
						?>
						<h2 class="titre"><a name="1"></a>Elite 1 </h2>
						<!--	 
	 <table >
 <tr> 
   <td>
   
<h4 class="bulleReglement">

 <a href="javascript:ouvrirPopup('../resultats/reglements2022_2023.php?cmt=880280','','top=10, right=10,resizable=no, directories=no, statut=no, location=no, width=580, height=600, menubar=no')">Modalit&eacutes de qualification de la saison 2022-2023</a>

 </h4> 

  <h4 class="bulleReparGeo">
  <a href="javascript:ouvrirPopup('../resultats/cartographie/carteFemElite1_2022_2023.html','sdfsdfsdfs','top=10, right=10,resizable=no, directories=no, statut=no, location=no, width=530, height=600, menubar=no')">R&eacutepartition g&eacuteographique des clubs Elite 1</a>
 </h4>
  </td>
	</tr> 
 </table>  
-->
						<?php affichage(880281, 0, $comite, $bdd); ?>


						<h2 class="titre"><a name="2"></a>Elite 2 </h2>


						<!--	
		<table align ="center"  width="500">
 <tr> 
   <td>
<h4 class="bulleReglement">

 <a href="javascript:ouvrirPopup('../resultats/reglements2022_2023.php?cmt=880285','','top=10, right=10,resizable=no, directories=no, statut=no, location=no, width=580, height=600, menubar=no')">Modalit&eacutes de qualification de la saison 2022-2023</a>

 </h4> 

  <h4 class="bulleReparGeo">
  <a href="javascript:ouvrirPopup('../resultats/cartographie/carteFemElite2_2022_2023.html','sdfsdfsdfs','top=10, right=10,resizable=no, directories=no, statut=no, location=no, width=530, height=600, menubar=no')">R&eacutepartition g&eacuteographique des clubs Elite 2</a>
 </h4> 	 
  </td>
	</tr> 
 </table> 		
-->
						<?php
						affichage(880285, 0, $comite, $bdd);
						echo "<hr />" . "<hr />";
						require '../resultats/sommaires.php';
						require '../resultats/liensDivers.php';
						?>

			</td>
			<!-- Colonne de droite -->
			<td class="colonneDroiteGaucheFem">
				<?php include("00droite_fem.php");  ?>
				<br><br><br><br>
			</td>
		</tr>
		
	</table>
		<footer>
			<?php include("../footer.php"); ?>
		</footer>
	</body>
</html>