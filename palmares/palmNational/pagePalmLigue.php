<?php
$idLigue = $_GET['idLigue'];
$mode=$_GET['mode'];
require '../../connect/connexion1.php';
require '../../consultation/fonctions.php';
require '../../palmares/fonctionsPalmares.php';
rechercheInfosLigues($idLigue, $bdd);
?>
<html>
<head>
<link rel="canonical" href="https://francefinalesrugby.fr/palmares/palmNational/pagePalmLigue.php?idLigue=<?php echo $idLigue; ?>">
  <meta name="description" content="Palmarès régionaux des différentes ligues du rugby Français.">
  <meta name="keywords" content="Ligue de rugby Bretagne, Ligue de rugby Normandie, Ligue de rugby du Grand Est, Ligue de rugby Occitanie, Ligue de rugby Nouvelle Aquitaine, Ligue de rugby Ile de France">
  <meta name="classification" content="Sport,Rugby">
  <meta name="resource-type" content="document">
  <meta name="copyright" content="Comite Midi Pyrenees de Rugby">
  <link type="text/css" rel="stylesheet" href="../../ligne1.css" />
  <link type="text/css" rel="stylesheet" href="../../smart/10.css">
  <link type="text/css" rel="stylesheet" href="../lienNoir.css" />
  <link type="text/css" rel="stylesheet" href="palmares.css" />
  <link type="text/css" rel="stylesheet" href="../../formulaireDG.css">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="author" content="Equipe Onepip">
  <meta name="robots" content="All">
  <title>Présentation de la ligue</title>
</head>
<body class="backgroundBlack">";
  <table class="marginAuto width1250">
    <tr>
      <td colspan="3">
      <?php include("../../images/page_image_al.php");?>
      </td>
      </tr> 
    <tr>
      <td colspan="3">
        <?php include("../../01ligne.php"); ?>
      </td>
    </tr>
    <tr>
      <td class="colonne">
        <?php include("../../01gauche.php"); ?>
      </td>
      <td class="centreDePage">
      <?php
         include("palmParLigue.php"); 
         
         ?>
      </td>
      <td class="colonne">
        <?php include("../../00droite.php"); ?>
      </td>
    </tr>

  </table>

</body>

<footer>

  <?php 

 include ("../../footer.php"); 

?>
   
  </footer>
</html>