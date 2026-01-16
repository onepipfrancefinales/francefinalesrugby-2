<?php
session_start();
if (isset($_GET['comite'])) $comite = $_GET['comite'];
//echo "comite : ".$comite;
require '../saison.php';
require '../consultation/fonctions.php';
require '../connect/connexion1.php';
require '../resultats/constantes.php';
?>

<html>
<head>
  <meta name="description"
    content="Tout sur le comit� territorial <?php echo $titre; ?> : Pr�sentation du comit� (Bureau; adresse; contact mel; contact site officiel du comit�); les effectifs; les palmar�s nationaux; les palmar�s territoriaux et l'ensemble des clubs composant le comit� avec un lien pour acc�der aux diff�rents clubs.">
  <meta name="keywords"
    content="comit� Bourgogne,Comite Midi Pyrenees de Rugby,Comite Midi Pyrenees Rugby,Stade toulousain,Colomiers,FFR,Rugby,Federation,Fran�aise,Rugbyman,Rugbymen,Sport,Ballon,Ovale,">
  <meta name="classification" content="Sport,Rugby">
  <meta name="resource-type" content="document">
  <meta name="copyright" content="Comite Midi Pyrenees de Rugby">
  <meta name="author" content="Equipe Onepip">
  <meta name="robots" content="All">

  <link type="text/css" rel="stylesheet" href="../ligneNoir.css" />
  <link type="text/css" rel="stylesheet" href="../formulaireDG.css">
  <link type="text/css" rel="stylesheet" href="../resultats/resultat.css">
  <link type="text/css" rel="stylesheet" href="/Phpleague/phpab/league.css">
  <link type="text/css" rel="stylesheet" href="../ligne1.css">
  <title>Accueil dossiers </title>
</head>

<body>
  <table width="1250" height="639" class="marginAuto">
    <tr>
      <td colspan="3">
        <?php include "../images/page_image_al.php"; ?>
      </td>
    </tr>
    <tr class="center backgroundBlach">
      <td height="26" colspan="3">
        <?php include "../01ligne.php";   ?>
    </tr>

    <tr>
      <td class="colonneDroiteGauche">
        <?php include "../01gauche.php"; ?>
      </td>

      <td class="colonneCentrale">
        <?php include "accueil.php"; ?>
      </td>

      <td class="colonneDroiteGauche">
        <?php include "../00droite.php"; ?>
      </td>
    </tr>
  </table>
</body>

<footer>
  <?php include("../resultats/piedDePage.php"); ?>
</footer>

</html>