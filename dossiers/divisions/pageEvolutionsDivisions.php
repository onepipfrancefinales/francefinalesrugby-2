<?php
if (isset($_GET['mode'])) $mode  = $_GET['mode'];
include("../../saison.php");
$type = $_GET['type'];
require '../../consultation/fonctions.php';
require '../../connect/connexion1.php';
include '../../saison.php';
rechercheParNomDeVille($chaine, $bdd);
//echo "donnee1 : " . $nbreDeClub;
//echo "donnee2 : " . $tabClubs[0];
//echo "donnee2 : " . $tabClubs[1];
//echo "donnee2 : " . $tabClubs[2];
?>

<!DOCTYPE html>
<html lang="fr">

<head>
<title>Evolution des compétitions FFR </title>
  <meta name="description" content="Tout sur le comité territorial <?php echo $titre; ?> : Pr�sentation du comit� (Bureau; adresse; contact mel; contact site officiel du comit�); les effectifs; les palmar�s nationaux; les palmar�s territoriaux et l'ensemble des clubs composant le comit� avec un lien pour acc�der aux diff�rents clubs.">
  <meta name="keywords" content="comité Bourgogne,Comite Midi Pyrenees de Rugby,Comite Midi Pyrenees Rugby,Stade toulousain,Colomiers,FFR,Rugby,Federation,Fran�aise,Rugbyman,Rugbymen,Sport,Ballon,Ovale,">
  <meta name="classification" content="Sport,Rugby">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="resource-type" content="document">
  <meta name="copyright" content="Comite Midi Pyrenees de Rugby">
  <meta name="author" content="Equipe Onepip">
  <meta name="robots" content="All">

  <link type="text/css" rel="stylesheet" href="../../ligne1.css" />
    <link type="text/css" rel="stylesheet" href="../../lienNoir.css" />
    <link type="text/css" rel="stylesheet" href="../../formulaireDG.css">
    <link type="text/css" rel="stylesheet" href="../dossiers.css">
    <link type="text/css" rel="stylesheet" href="../../smart/10.css">
  

</head>

<?php
  if ($mode != "smart") {
    echo "<body>";
   echo "<table class=\"width1250 marginAuto\">";

  } else {
    echo "<body class=\"backgroundWhite\">";
    echo "<table class=\"width100PC\">";
  }
  ?>
    <tr>
      <td colspan="3">
        <?php if ($mode != "smart") {
          include("../../images/page_image_al.php");
          echo "</td>";
          echo "</tr>";
          echo "<tr>";
          echo "<td colspan=\"3\">";
          include("../../01ligne.php");
          echo "</td>";
          echo "</tr>";
          echo "<tr>";
          echo "<td class=\"colonneDroiteGauche backgroundBlue\" valign=\"top\">";
          include("../../01gauche.php");
          echo "</td>";
          echo "<td class=\"colonneCentrale backgroundWhite\">";
        } else {

          echo "<table class=\"width98PC\" border=\"1\">";
          echo "<tr> ";
          echo "<td class =\"h22 width5PC\"><a href=\"../accueil2.php\"><img src=\"../../images/smart/flecheGauche.jpg\" width=\"27\" height=\"20\" alt=\"fléche retour\"></a></td>";
          echo "<td class =\"h22 width95PC\">France Finales Rugby</td>";
          echo "</tr>";
          echo "<tr>";
          echo "<td colspan=\"2\" class =\"h12\">Tout sur le rugby</td>";
          echo "</tr>";
          echo "</table>";
        }

        ?>

      

        <?php
require 'evolutionsDivisions.php';


/*
        include "sommaireDiv.php";

        if ($type == "seniors1")
          include "evolDivSeniors1.php";
        else if ($type == "feminines")
          include "evolDivFeminines.php";
        else if ($type == "jeunes")
          include "evolDivJeunes.php";
        else if ($type == "espoirs")
          include "evolDivEspoirs.php";
        else if ($type == "seniors2")
          include "evolDivSeniors2.php";
     */
          ?>
      </td>

      <!-- Colonne de droite -->
      <?php if ($mode != "smart") {
        ?>
      </td>

      <td class="colonneDroiteGauche backgroundBlue" valign="top">
        <?php
          if ($mode != "smart") {
            include("../../00droite.php");
          } ?>
      </td>
    </tr>
  <?php
        }
  ?>
  </table>
</body>
<?php require "../footer.php" ;?>

</html>

<style>
  .bge3640c {
    background-color: #e3640c;
  }

  .bgCCCCCC {
    background-color: #CCCCCC;
  }

  .bgFF0000 {
    background-color: #FF0000;
  }

  .bgFF6666 {
    background-color: #FF6666;
  }

  .bgFF9999 {
    background-color: #FF9999;
  }

  .bgFF9966 {
    background-color: #FF9966;
  }

  .bgFF9900 {
    background-color: #FF9900;
  }

  .bgFFFF00 {
    background-color: #FFFF66;
  }

  .bg3300FF {
    background-color: #3300FF;
  }

  .bg3399CC {
    background-color: #3399CC;
  }

  .bgCCFF00 {
    background-color: #CCFF00;
  }

  .bg00FF66 {
    background-color: #00FF66;
  }

  .bg33FF99 {
    background-color: #33FF99;
  }

  .bg66CC66 {
    background-color: #66CC66;
  }

  .bg669900 {
    background-color: #669900;
  }

  .mb-10 {
    margin-bottom: 20px
  }
</style>