<?php
require("../saison.php");
require 'fonctions.php';
require '../fonctions.php';
$idLigue = $_REQUEST['idLigue'];
$mode = $_REQUEST['mode'];
require("../connect/connexion1.php");
rechercheInfosLigues($idLigue, $bdd);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
	<link rel="canonical" href="https://francefinalesrugby.fr/consultation/page_ligue.php" >
	<meta name="description" content="Tout sur la ligue régionale <?php echo $nomLigue; ?> : Présentation du comité (Bureau; adresse; contact mel; contact site officiel du comit�); les effectifs; les palmar�s nationaux; les palmar�s territoriaux et l'ensemble des clubs composant le comit� avec un lien pour acc�der aux diff�rents clubs.">
	<meta name="classification" content="Sport,Rugby">
	<meta name="resource-type" content="document">
	<meta name="copyright" content="Comite Midi Pyrenees de Rugby">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="author" content="Equipe France Finales Rugby">
	<meta name="robots" content="All">
	<link type="text/css" rel="stylesheet" href="../formulaireDG.css">
	<link type="text/css" rel="stylesheet" href="../ligne1.css" >
	<link type="text/css" rel="stylesheet" href="lienNoir.css" >
	<link type="text/css" rel="stylesheet" href="pglogo.css" >
	<title>Présentation de la ligue de rugby <?php echo $nomLigue; ?> </title>
</head>

<body>
	<table class="marginAuto width1250" >
		<tr >
			<td colspan="3" height="74">
				<?php include("../images/page_image_al.php"); ?>
			</td>
		</tr>
		<tr>
			<td colspan="3">
				<?php include("../01ligne.php");  ?>
			</td>
		</tr>
		<tr >
			<td class="colonne"  >
				<?php include("../01gauche.php");  ?>
			</td>
			<td class = "centreDePage">
				
			
			
			
			<?php //include("ligue.php"); ?>
			<?php include("ligueTest.php"); ?>
		
		
			</td>
			<td class="colonne"  >
				<?php include("../00droite.php");  ?>
			</td>
		</tr>
	</table>
	<?php include("../resultats/piedDePage.php"); ?>
</body>

<footer>

</footer>
</html>