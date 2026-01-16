<?php 
if (isset($_REQUEST['variable_1'])) $annee = $_REQUEST['variable_1'];
$annee = $_GET['variable_1'];
require '../fonctionsPalmares.php';

?>

<!DOCTYPE html>
<html lang="fr">
<link rel="canonical" href="https://francefinalesrugby.fr/palmares/palmNational/pagefinaleannee.php">
<meta name="description" content="Finales et résultats des différents championnats de france de rugby.">
<meta name="keywords" content="Top 14, pro D2, Nationales, fédérales, régionales, féminines, cadets, juniors, etc...">
<meta name="classification" content="Sport,Rugby">
<meta name="resource-type" content="document">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="copyright" content="Comite Midi Pyrenees de Rugby">
<meta name="author" content="Equipe Onepip">
<meta name="robots" content="All">
<link type="text/css" rel="stylesheet" href="palmares.css">
<link type="text/css" rel="stylesheet" href="../../ligne1.css">
<link type="text/css" rel="stylesheet" href="../../formulaireDG.css">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Finales du chapionnat de FRANCE <?php echo $annee; ?></title>

<body>

  <table class="marginAuto">
    <tr>
      <td colspan="3">
        <?php include("../../images/page_image_al.php");  ?>
      </td>
    </tr>
    <tr>
      <td colspan="3">
        <?php include("../../01ligne.php");    ?>
      </td>
    </tr>
    <tr>
      <td class="colonne">
        <?php include("../../01gauche.php");    ?>
      </td>
      <td class="centreDePage">
        <?php include("finaleannee.php");   ?>
      </td>
      <td class="colonne">
        <?php include("../../00droite.php");  ?>
      </td>
    </tr>
  </table>
  <footer>
    <div class="marginAuto">
          <?php include("../../comitebas.php");   ?>
    <br>
          <?php include("../../bas.php");  ?>
    </div>
  </footer>
</body>

</html>