<?php
session_start();
if (isset($_GET['comite'])) $comite = $_GET['comite'];
if (isset($_GET['page'])) $page = $_GET['page'];
if (isset($_GET['mode'])) $mode = $_GET['mode'];
//echo "comite : ".$comite;
require '../saison.php';
include '../fichierConfig.php';
require '../consultation/fonctions.php';
require '../connect/connexion1.php';
require '../resultats/constantes.php';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta name="description"
    content="Tout sur le comité territorial <?php echo $titre; ?> : Présentation du comité (Bureau; adresse; contact mel; contact site officiel du comit�); les effectifs; les palmar�s nationaux; les palmar�s territoriaux et l'ensemble des clubs composant le comit� avec un lien pour acc�der aux diff�rents clubs.">
  <meta name="keywords"
    content="comité Bourgogne,Comite Midi Pyrenees de Rugby,Comite Midi Pyrenees Rugby,Stade toulousain,Colomiers,FFR,Rugby,Federation,Fran�aise,Rugbyman,Rugbymen,Sport,Ballon,Ovale,">
  <meta name="classification" content="Sport,Rugby">
  <meta name="resource-type" content="document">
  <meta name="copyright" content="Comite Midi Pyrenees de Rugby">
  <meta name="author" content="Equipe Onepip">
  <meta name="viewport" content="width=device-width">
  <meta name="robots" content="All">

  <link type="text/css" rel="stylesheet" href="../../ligne1.css">
  <link type="text/css" rel="stylesheet" href="../../formulaireDG.css">
  <link type="text/css" rel="stylesheet" href="../dossiers.css">
  <link type="text/css" rel="stylesheet" href="../../smart/10.css">
  <title>Accueil dossiers </title>
</head>

<body>

  <div class="backgroundWhite">
    <?php
    include 'smartHeader.php';
    require 'smartAccueil.php';
    require 'smartBody.php'; ?>
  </div>
</body>
<?php include 'smartFooter.php'; ?>

</html>
<style>
  .background003366 {
    background-color: #003366;
  }
</style>