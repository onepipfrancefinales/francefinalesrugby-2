<!DOCTYPE html PUBLIC>
<html lang="fr">
<?php
session_start();
include("../saison.php");
include("../fichierConfig.php");
require '../connect/connexion6.php';
include("fonctions.php");

require '../Phpleague/phppro/consult/fonctions_matchs.php';
require '../Phpleague/phppro/lang/lang_fr.php';
$division = 150;
$comite = "phppro";
$CMT = "fed2";
$cmt = "fed2";
$comiteNom = "Fédérale 2 - Fédérale B";
?>


<head>
  <link rel="canonical" href="https://francefinalesrugby.fr/resultats/page_fed2.php/">
  <meta charset="utf-8" />
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9177538664500260" crossorigin="anonymous"></script>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <!--
<script async src="https://www.googletagmanager.com/gtag/js?id=G-G7CSSC3EPH"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-G7CSSC3EPH');
</script>
-->
  <meta charset="utf-8" />
  <link type="text/css" rel="stylesheet" href="../Phpleague/phppro/league.css">
  <link type="text/css" rel="stylesheet" href="../formulaireDG.css">
  <link type="text/css" rel="stylesheet" href="resultat.css">
  <link type="text/css" rel="stylesheet" href="../ligne1.css">
  <title>Championnats de France <?php echo $comiteNom; ?></title>
  <meta name="description" content=" Résulats des compétitions territoriales du comité Armagnac Bigorre. Calendriers, résultats et statistiques de l'honneur � la 4me Série, équipes II comprises. Egalement disponible les phases finales territoriales des années précédentes et les palmares territoriaux des difféerentes divisions du comité. ">
  <meta name="classification" content="Sport,Rugby">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="resource-type" content="document">
  <meta name="copyright" content="Comite Midi Pyrenees de Rugby">
  <meta name="author" content="Equipe Onepip">
  <meta name="robots" content="All">
  <script language="JavaScript">
    function ouvrirPopup(page, nom, options) {
      window.open(page, nom, options);
    }
  </script>
  <!--
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9177538664500260"
     crossorigin="anonymous"></script>

-->
</head>

<body>
  <table class="table">
    <tr>
      <td colspan="3"> <img src="../images/stade3.jpg" alt="" width="1250" height="150"></td>
    </tr>
    <tr>
      <td colspan="3"><?php include("../01ligne.php"); ?></td>
    </tr>
   
    <tr>
      <!-- Colonne de gauche -->
      <td class="colonneDroiteGauche">
        <p><?php include("../01gauche.php"); ?> </p>
      </td>

      <!-- Colonne centrale -->
      <td class="colonneCentrale">
          <h1>CHAMPIONNAT DE FRANCE</h1>
          <h2 class="titre">Fédérale 2 - Fédérale B</h2>
          <br>
          <?php
          require 'liensDivers.php';
          include 'sommaires.php';  ?>
          <script >
            function ouvrirPopup(page, nom, options) {
              window.open(page, nom, options);
            }
          </script>
          <br >

        

          <?php
  include 'presentationSaison.php';
          echo "<hr>" . " <hr>";

          // require("comPerso.php"); 


          foreach ($tableauFed2 as $champ) {
            echo "  <br>" . "<br>";
            $numPoule = substr($champ, -1);
            echo "<a name=\"$numPoule\"></a>";
            echo "<h5>" . "Poule " . $numPoule;
            echo "<br>"; 
  

            echo "</h5>";
            echo  "<br>" . "<br>" . "<br>";
            $champReserve = 100;
            $champ2 = $champ + $champReserve;
            affichage($champ, $champ2, $comite, $bdd);
            journeesReportees($comite, $champ, $bdd);
            perequation($comite, $champ, $bdd);
            echo "<br>" . "<br>";
          };

          echo "<hr />" . " <hr />"; 
  include 'presentationSaison.php';?>
          

          <br />
          <div style = "padding-bottom:50px">
          <?php
          include 'sommaires.php';
          include 'liensDivers.php';
         
          //require '../pub/pub_displayCarre.php' ;
          ?>
       </div>
      </td>
      <!-- Colonne de droite -->
      <td class="colonneDroiteGauche">
        <?php include("../00droite.php"); ?></td>
    </tr>

  </table>
 
  <footer>
  <?php include("../footer.php"); ?>
  </footer>
</body>

</html>