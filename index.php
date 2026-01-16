<script language="javascript">
  if (screen.width < 800)
    location = "https://francefinalesrugby.fr/smart/sommaire.php";
  //else if (screen.width > 800)     
  //location="https://francefinalesrugby.fr";
  //
</script>


<?php
session_start();

require 'saison.php';
require 'consultation/fonctions.php';
require 'connect/connexion1.php';
require 'resultats/constantes.php';

?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta name="google-adsense-account" content="ca-pub-9177538664500260">
  <title>France Finales Rugby </title>
  <link rel="canonical" href="https://francefinalesrugby.fr ">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <link type="text/css" rel="stylesheet" href="ligne1.css">
  <link type="text/css" rel="stylesheet" href="lienNoir.css">
  <link type="text/css" rel="stylesheet" href="formulaireDG.css">
  <meta name="description" content=" Site dédié aux compétitions de rugby Porfessionnelles, Fédérales et régionales (présentation des clubs, résultats, classements, palmarès, etc... ">
  <meta name="classification" content="Sport,Rugby">
  <meta name="resource-type" content="document">
  <meta name="copyright" content="Comite France Finale">
  <meta name="author" content="Equipe Onepip">
  <meta name="robots" content="All">
  <!-- InMobi Choice. Consent Manager Tag v3.0 (for TCF 2.2) -->
  <script type="text/javascript" async=true>

  </script>
  <!-- End InMobi Choice. Consent Manager Tag v3.0 (for TCF 2.2) -->
</head>
<!-- Google tag (gtag.js) -->

<body>
  <table class="marginAuto">
    <tr>
      <td colspan="3">
        <img src="images/stade3.jpg" alt="france finales rugby" width="1250" height="150">
      </td>
    </tr>
    <tr>
      <td colspan="3">
        <?php include("01ligne.php"); ?>
      </td>
    </tr>
    <tr class="colonne">
      <td colspan="3">
      </td>
    </tr>
    <tr>
      <td class="colonne">
        <?php include("01gauche.php"); ?>
      </td>
      <td class="backgroundBlanc colonneCentrale" style="padding-top:0px">
        <?php require 'dossiers/accueil.php'; ?>
      </td>
      <td class="colonne">
        <?php include("00droite.php"); ?>
      </td>
    </tr>

  </table>

  <footer>
    <?php include("footer.php");  ?>
  </footer>



</html>