<?php
$sigle = $_REQUEST['variable_1'];
$mode = $_REQUEST['mode'];
require("../saison.php");
require 'fonctions.php';

require '../fonctions.php';
require '../connect/connexion1.php';
nomComite($sigle, 0, $bdd);
rechercheInfosComites($sigle, $bdd);
nomLigueParSigleLigue($sigleLigue, $bdd);
?>


<!DOCTYPE html PUBLIC>
<html lang="fr">

<head>
	<link rel="canonical" href="https://francefinalesrugby.fr/consultation/page_comite.php/" />
	<meta charset="utf-8" />
	<meta name="description" content="Tout sur le comité territorial <?php echo $nomComite; ?> : Présentation du comité (Bureau; adresse; contact mel; contact site officiel du comit�); les effectifs; les palmar�s nationaux; les palmar�s territoriaux et l'ensemble des clubs composant le comit� avec un lien pour acc�der aux diff�rents clubs.">
	<meta name="keywords" content="comité Bourgogne,Comite Midi Pyrenees de Rugby,Comite Midi Pyrenees Rugby,Stade toulousain,Colomiers,FFR,Rugby,Federation,Fran�aise,Rugbyman,Rugbymen,Sport,Ballon,Ovale,">
	<meta name="classification" content="Sport,Rugby">
	<meta name="resource-type" content="document">
	<meta name="copyright" content="Comite Midi Pyrenees de Rugby">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="author" content="Equipe Onepip">
	<meta name="robots" content="All">
	<link type="text/css" rel="stylesheet" href="../ligne1.css" />
	<link type="text/css" rel="stylesheet" href="../smart/10.css">
	<link type="text/css" rel="stylesheet" href="lienNoir.css" />
	<link type="text/css" rel="stylesheet" href="../formulaireDG.css">

	<title>Comité de rugby <?php echo $nomComite; ?> </title>
</head>

<body class="backgroundBlack">;
	<table width="1250" align="center">
		<tr>
			<td colspan="3" height="74"> <?php include("../images/page_image_al.php");  ?> </td>
		</tr>
		<tr>
			<td colspan="3"><?php include("../01ligne.php"); ?></td>
		</tr>
		<tr>
			<td class="colonne">
				<?php include("../01gauche.php");  ?>
			</td>
			<td class="centreDePage">
				<?php include("comite.php");?>
			</td>
			<td class="colonne">
				<?php include("../00droite.php");  ?>
			</td>
		</tr>
	</table>
</body>
<footer>
	<?php	include("../resultats/piedDePage.php");	?>
</footer>

</html>