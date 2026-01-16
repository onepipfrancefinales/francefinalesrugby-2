<?php
$idLigue = $_GET['idLigue'];
$mode = $_GET['mode'];
$page = $_GET['page'];


require '../../saison.php';
require '../../consultation/fonctions.php';
require '../../fonctions.php';
require '../../connect/connexion1.php';
rechercheInfosLigues($idLigue, $bdd);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
	<link rel="canonical" href="https://francefinalesrugby.fr/consultation/page_ligue.php">
	<meta name="description" content="Tout sur le comité territorial <?php echo $nomComite; ?> : Présentation du comité (Bureau; adresse; contact mel; contact site officiel du comit�); les effectifs; les palmar�s nationaux; les palmar�s territoriaux et l'ensemble des clubs composant le comit� avec un lien pour acc�der aux diff�rents clubs.">
	<meta name="classification" content="Sport,Rugby">
	<meta name="resource-type" content="document">
	<meta name="copyright" content="Comite Midi Pyrenees de Rugby">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="author" content="Equipe France Finales Rugby">
	<meta name="robots" content="All">
	<link type="text/css" rel="stylesheet" href="pglogo.css">
	<link type="text/css" rel="stylesheet" href="../../ligne1.css">
	<link type="text/css" rel="stylesheet" href="/smart/10.css">
	<title>Ligue de rugby <?php echo $nomLigue; ?> </title>
</head>


<?php
include "../smartHeader.php";

 include "../../consultation/ligue.php";

 include "../../consultation/comite.php";


 include "../smartFooter.php";
?>