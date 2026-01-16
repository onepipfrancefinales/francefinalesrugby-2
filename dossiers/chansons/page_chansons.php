<?php 
include("../../saison.php");
if (isset($_GET['mode'])) $mode  = $_GET['mode'];
if (isset($_GET['chanson'])) $chanson = $_GET['chanson'];?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <link rel="canonical" href="https://francefinalesrugby.fr/dossiers/lexique/page_chansons.php/">
  <meta charset="utf-8">
  <meta name="description"
    content="Tout sur le comité territorial <?php echo $titre; ?> : Pr�sentation du comit� (Bureau; adresse; contact mel; contact site officiel du comit�); 
    les effectifs; les palmar�s nationaux; les palmar�s territoriaux et l'ensemble des clubs composant le comit� avec un lien pour acc�der aux diff�rents clubs.">
  <meta name="keywords"
    content="comité Bourgogne,Comite Midi Pyrenees de Rugby,Comite Midi Pyrenees Rugby,Stade toulousain,Colomiers,FFR,Rugby,Federation,Fran�aise,Rugbyman,Rugbymen,Sport,Ballon,Ovale,">
  <meta name="classification" content="Sport,Rugby">
  <meta name="resource-type" content="document">
  <meta name="copyright" content="Comite Midi Pyrenees de Rugby">
  <meta name="author" content="Equipe Onepip">
  <meta name="robots" content="All">
  <title>Chansons paillardes </title>
  <link type="text/css" rel="stylesheet" href="../../ligne1.css" />
    <link type="text/css" rel="stylesheet" href="../../lienNoir.css" />
    <link type="text/css" rel="stylesheet" href="../../formulaireDG.css">
    <link type="text/css" rel="stylesheet" href="../dossiers.css">
    <link type="text/css" rel="stylesheet" href="../../smart/10.css">

</head>

<?php
  if ($mode != "smart") {
    echo "<body>";
   echo "<table class=\"marginAuto width1250\">";

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
        
        
        
        
       <?php require 'chansons.php' ?> 
        
        

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