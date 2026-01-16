<?php
if (isset($_GET['division'])) $division = $_GET['division']; else $division = '+';
if (isset($nomDivision)); else $nomDivision = '*';
if (isset($base)); else $base = '-';

require '../fonctionsPalmares.php';
require("../../connect/connexion1.php");
/*
if ($division < 230) {
	$base = "bdequipe1";
	$titre = "Champions de France";
} elseif ($division < 280) {
	$base = "bdequipe2";
	$titre = "Champions de France";
} elseif ($division < 310) {
	$base = "bdfem";
	$titre = "Championnes de France";
} elseif ($division < 380) {
	$base = "bdjeunes";
	$titre = "Champions de France";
} elseif ($division < 500) {
	$base = "bdchallenges";
	$titre = "Challenge de ";
}


$reponse = $bdd->query("SELECT division
						FROM bddivisions 
						WHERE id ='$division' and annee != '2023' ");
while ($donnees =  $reponse->fetch()) {
	$nomDivision = $donnees['division'];
}

*/
if ($division < 230) {
	$table = "bdequipe1";
	$titre = "Champions de France";
} elseif ($division < 280) {
	$table = "bdequipe2ligne";
	$titre = "Champions de France";
} elseif ($division < 310) {
	$table = "bdfem";
	$titre = "Championnes de France";
} elseif ($division < 380) {
	$table = "bdjeunesligne";
	$titre = "Champions de France";
} elseif ($division < 500) {
	$table = "bdchallengesligne";
	$titre = "Challenge de ";
} elseif ($division == 500) {
	$table = "bdequipe1";
	$titre = "Champion de France ";
}

$reponse = $bdd->query("SELECT division
						FROM bddivisions 
						WHERE id='$division'
						ORDER BY cle DESC ");
while ($donnees =  $reponse->fetch()) {
	$nomDivision = $donnees['division'];
}

?>
<!DOCTYPE html>
<html lang="fr">

<head>
	<link rel="canonical" href="https://francefinalesrugby.fr/palmares/palmNational/pagePalmares.php?division=<?php echo $division; ?>">
	<meta name="description" content="Palmarès des champions de france de rugby par divisions et par années">
	<meta name="classification" content="Sport,Rugby">
	<meta name="resource-type" content="document">
	<meta name="copyright" content="Comite Midi Pyrenees de Rugby">
	<meta name="author" content="Equipe France Finales Rugby">
	<meta name="viewport" content="width=device-width">
	<meta name="robots" content="All">
	<title>Champions de FRANCE <?php echo $nomDivision; ?></title>
	<link type="text/css" rel="stylesheet" href="palmares.css">
	<link type="text/css" rel="stylesheet" href="../../ligne1.css">
	<link type="text/css" rel="stylesheet" href="../../formulaireDG.css">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body>
	<table class="marginAuto">
		<tr>
			<td colspan="3">
				<?php
				if ($division == 110) {	?>
					<img src="../../images/brennusGrand.jpg" alt="bouclier de brennus" width="1250" height="150">
				<?php } else {
					include("../../images/page_image_al.php");
				} ?>
			</td>
		</tr>
		<tr>
			<td colspan="3">
				<?php include("../../01ligne.php");  ?>
			</td>
		</tr>
		<tr>
			<td class="colonne">
				<?php include("../../01gauche.php"); ?>
			</td>
			<td class="centreDePage">
				<?php
/*
				if ($division == 110)
					require("top14.php");
				else {
					// A partir de la saison 2023
					require("palmaresLigues2023.php");
					// De la saison 2019 à la saison 2022
					require("palmaresLigues.php");
					echo "<hr />";
					echo "<i>" . "Saison 2018-2019 : Réformes Territoriales"."<sup>"."Q"."</sup>";
					echo "<br>";
					echo "Les 27 comités territoriaux métropolitains sont transformés en 13 ligues régionales,
							identiques aux nouvelles régions administratives françaises." . "</i>";
					echo "<br>" . "<hr>";
					// Saison antérieure à la saiaon 2019
					*/

					chgmntNomDivisionligne($division, $table, $bdd, false);
					//require("palmaresTest.php");
			/*		
				}
			*/
				?>
			</td>
			<td class="colonne">
				<?php include("../../00droite.php"); ?>
			</td>
		</tr>
	</table>

</body>
<footer> 
	<?php include("../../footer.php");  ?>
</footer>

</html>

<style>
	.infobulle {
		position: relative;
		/* les .infobulle deviennent référents */
		cursor: help;
	}

	/* on génère un élément :after lors du survol et du focus :*/

	.infobulle:hover::after,
	.infobulle:focus::after {
		content: attr(aria-label);
		/* on affiche aria-label */
		position: absolute;
		/*top: -3.4em;*/
		left: 70%;
		transform: translate(0px, 0px);
		/* on centre horizontalement  */
		z-index: 0;
		/* pour s'afficher au dessus des éléments en position relative */
		/* white-space: nowrap;  /* on interdit le retour à la ligne */
		border-color: black;
		border-style: solid;
		border-width: 1px;
		background: #5ec1ff;
		text-align: left;
	}
</style>