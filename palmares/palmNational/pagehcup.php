<!DOCTYPE html>
<html lang="fr">

<head>
  <link rel="canonical" href="https://francefinalesrugby.fr/palmares/palmNational/pagehcup.php">
  <meta name="description" content="Palmarès de la coupe d'Europe de rugby.">
  <meta name="keywords" content="Coupe d'europe de rugby, H Cup, Champions Cup">
  <meta name="classification" content="Sport,Rugby">
  <meta name="resource-type" content="document">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="copyright" content="Comite Midi Pyrenees de Rugby">
  <meta name="author" content="Equipe Onepip">
  <meta name="robots" content="All">
  <title>Palmarès de la Champions Cup</title>
  <link type="text/css" rel="stylesheet" href="palmares.css">
  <link type="text/css" rel="stylesheet" href="../../formulaireDG.css">
  <link type="text/css" rel="stylesheet" href="../../ligne1.css">
</head>

<body>
  <table class="marginAuto">
    <tr>
      <td colspan="3">
        <?php include("../../images/page_image_al.php");   ?>
      </td>
    </tr>
    <tr>
      <td colspan="3">
        <?php include("../../01ligne.php");  ?>
      </td>
    </tr>
    <tr>
      <td class="colonne">
        <?php include("../../01gauche.php");  ?>
      </td>
      <td class="centreDePage">
        <p class="bold size7"> Compétitions Européennes</p>
        <h1 class="bold"> Champions Cup </h1>

        <img src="../images/champion_cup.jpg" alt="champion cup" width="178" height="228">

        <br><br>
        <?php
        require '../../connect/connexion1.php';
        require '../fonctionsPalmares.php';
        championsEurope(11, $bdd);
        ?>
        <h1 class="bold"> H Cup </h1>";
        <br>
        <img src="../images/hcup.jpg" alt="H cup" width="180" height="231">
        <?php championsEurope(10, $bdd);  ?>
      </td>
      <td class="colonne">
        <?php include("../../00droite.php");  ?>
      </td>
    </tr>
  </table>
</body>

<footer>
  <div class="marginAuto">
    <?php include("../../comitebas.php"); ?>
    <br>
    <?php include("../../bas.php");  ?>
  </div>
</footer>

</html>