<?php
include("../../saison.php");
if (isset($_GET['sommaire'])) $sommaire = $_GET['sommaire'];
if (isset($_GET['lettre'])) $lettre = $_GET['lettre'];
if (isset($_GET['mode'])) $mode  = $_GET['mode'];
?>
<html>

<head>
  <meta name="description" content="Tout sur le comit� territorial <?php echo $titre; ?> : Pr�sentation du comit� (Bureau; adresse; contact mel; contact site officiel du comit�); les effectifs; les palmar�s nationaux; les palmar�s territoriaux et l'ensemble des clubs composant le comit� avec un lien pour acc�der aux diff�rents clubs.">
  <meta name="keywords" content="comit� Bourgogne,Comite Midi Pyrenees de Rugby,Comite Midi Pyrenees Rugby,Stade toulousain,Colomiers,FFR,Rugby,Federation,Fran�aise,Rugbyman,Rugbymen,Sport,Ballon,Ovale,">
  <meta name="classification" content="Sport,Rugby">
  <meta name="resource-type" content="document">
  <meta name="copyright" content="Comite Midi Pyrenees de Rugby">
  <meta name="author" content="Equipe Onepip">
  <meta name="robots" content="All">
  <title>Dictionnaire du rugby </title>
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

       require 'sommaire.php';
     require  'lexique.php';
     
     ?>
        
        
        
        
        
      <!--  
        <p class="size7 bold styleArial"> Mots et beaux mots </p> <br>
       
     /*
     if ($sommaire == 1) {
          echo "<br/>";
          include "tabDesLettres.php";
          include "appelLettre.php";
        } elseif ($sommaire == 2)
          include("phrases_celebres.htm");
        elseif ($sommaire == 3)
          include "citation.htm";
        elseif ($sommaire == 4)
          include "expr_mediatiques.htm";
          */
        ?>
-->

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
<<?php require "../footer.php" ;?>

</html>