<?php
$mode = $_GET['mode'];
$sigle = $_GET['variable_1'];
require '../../connect/connexion1.php';
require '../../palmares/fonctionsPalmares.php';

?>

<html>

<head>
  <link rel="canonical" href="https://francefinalesrugby.fr/palmares/palmNational/pagePalmComite.php?variable_1=<?php echo $variable_1; ?>">
  <meta name="description"
    content="Palmarès territoriaux des différents comités (avant 2019) du rugby Français.">
  <meta name="keywords"
    content="comité Bourgogne,Comite des Pyrénées, comité Auvergne, comité Ile de france, comité béarn, comité Drôme Ardèche">
  <meta name="classification" content="Sport,Rugby">
  <meta name="resource-type" content="document">
  <meta name="copyright" content="Comite Midi Pyrenees de Rugby">
  <link type="text/css" rel="stylesheet" href="../../ligne1.css" />
  <link type="text/css" rel="stylesheet" href="../../formulaireDG.css">
  <link type="text/css" rel="stylesheet" href="../lienNoir.css" />
  <link type="text/css" rel="stylesheet" href="../../smart/10.css">
  <link type="text/css" rel="stylesheet" href="palmares.css" />
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="author" content="Equipe Onepip">
  <meta name="robots" content="All">
  <title>Tous les Champions de FRANCE</title>
</head>


<body class="backgroundBlack">

  <table class="marginAuto width1250">
    <tr>
      <td colspan="3">
        <img src="../../images/stade3.jpg" width="1250" height="150">
      </td>
    </tr>
    <tr>
      <td colspan="3">>
        <?php include("../../01ligne.php");    ?>
      </td>
    </tr>
    <tr>
      <td class="colonne">
        <?php include("../../01gauche.php");  ?>
      </td>
      <td class="centreDePage">

        <?php include("palmParComite.php");  ?>
      </td>
      <td class="colonne">
        <?php include("../../00droite.php"); ?>
      </td>
    </tr>
  </table>
</body>
<footer>
  <?php include("../../footer.php"); ?>
</footer>

</html>