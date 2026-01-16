<?php
$smart = false;
if (isset($_REQUEST['division'])) $division = $_REQUEST['division'];else $division = '170';
//if (isset($nomDivision));else $nomDivision = '*';
//if (isset($base));else $base = '-';
require '../fonctionsPalmares.php';
require("../../connect/connexion1.php");
/*
if ($division < 224) {
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
*/

$reponse = $bdd->query("SELECT division
						FROM bddivisions 
						WHERE id ='$division' and annee != '2023' ");
while ($donnees =  $reponse->fetch()) {
	$nomDivision = $donnees['division'];
}
	
?>
<!DOCTYPE html>
<html lang="fr">

<head>
	<link rel="canonical" href="https://francefinalesrugby.fr/palmares/palmNational/pagePalmares.php">
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



				// equipe 1
				if ($division < 230) {
				$tabDivisions = array('110', '120', '130', '135', '140', '150', '160', '170','180','190','200','210','220','222');
				$table ="bdequipe1";
				$titre = "Champions de France";
				}
				// equipe 2
				else if ($division > 220 and $division < 280) {
					//230-> Espoirs Elite
					//232 -> Espoirs Nationaux
					//235 -> Espoirs Fédéraux
				$tabDivisions = array('225','230','235', '240','245', '250', '260', '270', '9180');
				$table ="bdequipe2";
				$titre = "Champions de France";
				}
				// féminines
				else if ($division > 270 and $division < 310) {
					$tabDivisions = array( '280', '285', '290', '295', '300');
					$table ="bdfem";
					$titre = "Championnes de France";
					}
				// equipe jeunes
				else if ($division >300 and $division < 380) {
					
					$tabDivisions = array( '310', '320', '325', '330','340','350','360','365','370','375');
					$table ="bdjeunes";
					$titre = "Champions de France";
					}
				//challenges
				else if ($division > 370) {
					$tabDivisions = array( '380','390','400','405','410','420','430','440','450','500');
					$table ="bdchallenges";
					$titre = "Challenge de ";
					}

			//	foreach ($tabDivisions as $div) {
			//		if ($division == $div) {
						chgmntNomDivision($division, $table, $bdd, $smart);
			//		}
			//	}
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