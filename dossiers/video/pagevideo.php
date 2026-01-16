<?php 
include("../../saison.php");
if (isset($_GET['choix'])) $choix = $_GET['choix']; 
if (isset($_GET['mode'])) $mode  = $_GET['mode'];
?>
<!DOCTYPE html PUBLIC>
<html lang="fr">

<head>
  <meta name="description"
    content="Le site non officiel du Comit� Midi Pyr�n�es de rugby : Histoire, clubs, calendrier des matches, comp�titions, r�sultats, la Coupe du Monde � Toulouse, jeux, les liens vers les sites officiels, news, interviews, French teams, competitions, history, organisations and institutions, Rugby world Cup in Toulouse, games and links to other official sites.">
  <meta name="keywords"
    content="comit� Bourgogne,Comite Midi Pyrenees de Rugby,Comite Midi Pyrenees Rugby,Stade toulousain,Colomiers,FFR,Rugby,Federation,Fran�aise,Rugbyman,Rugbymen,Sport,Ballon,Ovale,">
  <meta name="classification" content="Sport,Rugby">
  <meta name="resource-type" content="document">
  <meta name="copyright" content="Comite Midi Pyrenees de Rugby">
  <meta name="author" content="Equipe Onepip">
  <meta name="robots" content="All">
 



  <link type="text/css" rel="stylesheet" href="../../ligne1.css" />
    <link type="text/css" rel="stylesheet" href="../../lienNoir.css" />
    <link type="text/css" rel="stylesheet" href="../../formulaireDG.css">
    <link type="text/css" rel="stylesheet" href="../dossiers.css">
    <link type="text/css" rel="stylesheet" href="../../smart/10.css">

  <title>Tous les Champions de FRANCE <?php echo $annee; ?></title>
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

      

<h1 class="center colorRed styleArial">Quelques vidéos </h1>
      <h3 class="center styleArial"> - Série : Quand tu joues au rugby amateur - </h3>
      <hr>
      <?php 


//  include("rugbyAmateur/V1.php"); 
include("rugbyAmateur/V2.php");
include("rugbyAmateur/V3.php");
include("rugbyAmateur/V4.php");
include("rugbyAmateur/V5.php");
include("rugbyAmateur/V6.php");
include("rugbyAmateur/V7.php");
include("rugbyAmateur/V8.php"); ?> 

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