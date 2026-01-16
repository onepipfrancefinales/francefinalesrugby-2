<?php 
if (isset($_POST['saison'])) $annee = $_POST['saison']; else $annee = "2024";
var_dump($annee);
echo "annee : ".$annee;
require '../fonctionsPalmares.php';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
<link rel="canonical" href="https://francefinalesrugby.fr/palmares/palmNational/pageannee.php">
  <meta name="description" content="Tous les Champions de France <?php echo $annee; ?> de rugby à XV. Compétitions pro; compétitions fédérales; compétitions territoriales; Compétitions féminines; compétitions juniors et cadets">
  <meta name="keywords" content="Federation,Française,Rugbyman,Rugbymen,Sport,Ballon,Ovale,">
  <meta name="classification" content="Sport,Rugby">
  <meta name="resource-type" content="document">
  <meta name="copyright" content="Comite Midi Pyrenees de Rugby">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="author" content="Equipe Onepip">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="All">
  <title>Champions de FRANCE <?php echo $annee; ?> de rugby</title>
 	<link type="text/css" rel="stylesheet" href="palmares.css">
	<link type="text/css" rel="stylesheet" href="../../ligne1.css">
	<link type="text/css" rel="stylesheet" href="../../formulaireDG.css">
</head>

<body>
  <table class="marginAuto width1250">
    <tr>
      <td colspan="3">
        <?php include("../../images/page_image_al.php");  ?>
      </td>
    </tr>
    <tr>
      <td colspan="3">
        <?php include("../../01ligne.php");   ?>
      </td>
    </tr>
    <tr>
      <td class="colonne">
        <?php include("../../01gauche.php");  ?>
      </td>
      <td class="centreDePage"> <br>
        <br>
        <br>
        <div id="titre"> Champions de France <?php echo $annee; ?></div>
        <br>
        <br>
        <table class="marginAuto">
          <tr>
            <td>
              <h2 id="lienfinale"> <?php echo "<a href=pagefinaleannee.php?variable_1=" . $annee . ">Consulter les finales (oppositions et scores)</a> "; ?></h2>
            </td>
          </tr>
        </table>
        <br> <br> <br>
        <?php include("annee.php");  ?>
      </td>
      <td class="colonne">
        <?php include("../../00droite.php");    ?>
      </td>
    </tr>
  </table>
  <table class="marginAuto backgroundBlanc">
    <tr>
      <td><?php include("../../comitebas.php"); ?></td>
    </tr>
    <tr>
      <td>
        <?php  //include("../../pub/pub1.php");    
        ?>
      </td>
    </tr>
  </table>
</body>
<footer>
<?php include("../../bas.php"); ?>
</footer>
</html>