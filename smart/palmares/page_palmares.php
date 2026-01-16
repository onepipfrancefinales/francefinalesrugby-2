<?php
$smart = true;
//remplacemant de la variable $rang par $division
//$rang = $_GET['division'];
if (isset($_GET['division'])) $division = $_GET['division'];
else $division = "170";
require '../../saison.php';
require '../../connect/connexion1.php';
require '../../palmares/fonctionsPalmares.php';
//require 'fonctions.php';
//nomDivision($rang, $bdd);
//nomDivisionMax($rang, $bdd);

if ($division < 100) {
	$titre = " Coupes Européennes";
} elseif ($division < 230) {
	$table = "bdequipe1";
	$titre = "Champions de France";
} elseif ($division < 280) {
	$table = "bdequipe2";
	$titre = "Champions de France";
} elseif ($division < 310) {
	$table = "bdfem";
	$titre = "Championnes de France";
} elseif ($division < 380) {
	$table = "bdjeunes";
	$titre = "Champions de France";
} elseif ($division < 510) {
		$table = "bdchallenges";
		$titre = "Challenge";
}


$reponse = $bdd->query("SELECT division
						FROM bddivisions 
						WHERE id ='$division' and cle >'100000' ");
while ($donnees =  $reponse->fetch()) {
	$nomDivision = $donnees['division'];
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="description" content="tous les champions de france de rugby, ffr,FFR, presentation de tous les clubs de rugby francais, Champions des differents comit�s territoriaux, Tous les championnats de rugby, f�d�rale 2, f�d�rale 3, f�d�rale 1, top 14.">
	<meta name="keywords" content="Brennus,Comite Midi Pyrenees de Rugby,ffr,FFR,Comite territoriaux de rugby,Stade toulousain,Bourgogne,FanceFinalesRugby,Rugby,championnat de france de rugby,Fran�aise,honneur,promotion honneur,Sport,Ballon,Ovale,">
	<meta name="classification" content="Sport,Rugby">
	<meta name="resource-type" content="document">
	<meta name="copyright" content="Comite Midi Pyrenees de Rugby">
	<meta name="author" content="Equipe Onepip">
	<meta name="robots" content="All">
	<title> <?php echo "Champions de France " . $nomDivision; ?></title>
	<link type="text/css" rel="stylesheet" href="../10.css">
	<link rel="stylesheet" type="text/css" href="../menu_smart2.css">

	<link type="text/css" rel="stylesheet" href="paramTiroir.css">
	<link rel="stylesheet" type="text/css" href="../../palmares/palmares.css">
	<link rel="stylesheet" type="text/css" href="../../ligne1.css">
	<meta name=viewport content="width=device-width, initial-scale=1">
</head>

<body class="backgroundWhite">

	<div class="fixed-header backgroundWhite">
		<div class="container">

			<table class="width98PC borderColorBlack borderWidth1">
				<tr class="borderColorBlack borderWidth1">
					<td width="5%" class="h22" height="20"><a href="../sommaire.php"><img src="../../images/smart/flecheGauche.jpg" width="27" height="20"></a></td>
					<td width="95%" class="h22" height="20"> France Finales Rugby </td>
				</tr>
				<tr>
					<td colspan="2" class="h12"><?php echo $titre . "<br />" . $nomDivision; ?></td>
				</tr>
			</table>

			<?php if ($division > 100) {
				include("menuPalmares.php");
			}
			?>
			<br>

		</div>
	</div>

	<div class="container ">
		<?php if ($division > 100) {
		?>
			<div style="margin-top : 225px">
				<p>.</p>
			</div>
			<?php
			
					chgmntNomDivision($division, $table, $bdd, $smart);
		    	//chgmntNomDivisionligne($division, $table, $bdd, $smart);
		
		} else {

			?>
			<div style="margin-top : 100px">
				<p>.</p>
			</div>

			<?php
			if ($division == 10) {
			?>
				<h1 class="bold center"> Champions Cup </h1>
				<div class="center"> <img src="/palmares/images/champion_cup.jpg" alt="champion cup" width="178" height="228"></div>
				<br>

				<?php championsEurope(11, $bdd);  ?>
				<h1 class="bold center"> H Cup </h1>
				<br>

				<div class="center"> <img src="/palmares/images/hcup.jpg" alt="H cup" width="180" height="231"></div>
				<br>
			<?php championsEurope(10, $bdd);
			} else {
			?>
				<h1 class="bold center"> Challenge Cup </h1>
				<div class="center"><img src="/palmares/images/challenge_cup.jpg" width="178" height="228"></div>
				<br>

				<?php championsEurope(21, $bdd); ?>
				<h1 class="bold center"> Amlin Cup <BR /></h1>
				<div class="center"> <img src="/palmares/images/amlincup.jpg" width="179" height="248"></div><br>
		<?php championsEurope(20, $bdd);
			}
		}
		?>
	</div>
	<?php require("../bas.php"); ?>
</body>

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