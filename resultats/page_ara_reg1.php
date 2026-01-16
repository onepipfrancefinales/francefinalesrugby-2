<?php
session_start();
include("../saison.php");
include("../fichierConfig.php");
require '../connect/connexion6.php';
include("fonctions.php");
require 'constantes.php';
require '../Phpleague/phpau/consult/fonctions_matchs.php';
require '../Phpleague/phpau/lang/lang_fr.php';
$comite = "phpau";
$CMT = "AU";
$cmt = "au";
$cmt2 = "ara";
$comiteNom = "du lyonnais";
$champLigue = 10;
$sigleLigue = "(ARA)";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
<link rel= "canonical" href= "https://francefinalesrugby.fr/resultats/page_ara_reg1.php" >

  <link type="text/css" rel="stylesheet" href="../Phpleague/phpau/league.css" >
  <link type="text/css" rel="stylesheet" href="../formulaireDG.css">
  <link type="text/css" rel="stylesheet" href="resultat.css">
  <link type="text/css" rel="stylesheet" href="../ligne1.css">
  <title><?php echo $champReg; ?> Auvergne Rhône ALpes  </title>
  <meta name="description"
    content=" Ligue AURA de rugby, Résulats des compétitions régionales de rugby, comité des Alpes, comité Drôme Ardèche, comité Auvergne, comité du Lyonnais. ">
  <meta name="classification" content="Sport,Rugby">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="resource-type" content="document">
  <meta name="copyright" content="Comite Midi Pyrenees de Rugby">
  <meta name="author" content="Equipe Onepip">
  <meta name="robots" content="All">
  <script >
    function ouvrirPopup(page, nom, options) {
      window.open(page, nom, options);
    }
  </script>
  
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9177538664500260"
     crossorigin="anonymous"></script>
  
</head>

<body>
  <table class="table">
    <tr>
      <td colspan="3"> <img src="../images/banniere_haut/(<?php echo $CMT; ?>).jpg"  alt="" height="150" width="1250" alt="banniere entete"></td>
    </tr>
    <tr>
      <td colspan="3">
        <div>
          <?php include("../01ligne.php"); ?>
        </div>
      </td>
    </tr>
    <tr>
      <!-- Colonne de gauche -->
      <td class="colonneDroiteGauche">
          <?php include("../01gauche.php"); ?>
      </td>

      <!-- Colonne centrale -->
      <td class="colonneCentrale">
         <br>
          <h1>Compétitions Régionales</h1>
          <h2 class="titre">Ligue Auvergne Rhône Alpes</h2>
          <h2 class="commentaire">La ligue Auvergne Rhône Alpes est née de la fusion des comités
            territoriaux<br>
            de l'Auvergne, du Lyonnais, des Alpes et du comité<br>
            Drôme Ardèche en janvier 2018.</h2>
          <?php
          include("liensDivers.php");
          include("sommaires.php");

          echo "<hr>" . " <hr>";

       
          
          //require("comPerso.php");
        
           $lien = $_GET['lien'];
        
          if ($lien == 17) { $tableauCompetition = $tableauARA1; }
          else if ($lien == 18) { $tableauCompetition = $tableauARA2; }
          else if ($lien == 19) { $tableauCompetition = $tableauARA3; }
          
          foreach ($tableauCompetition as $champ) {

            if ($lien == 17) {
              $competition =  $REG1;
              $champ2 = $champ + 100;
             $nomSerie = "(Ex honneur/ promotion honneur)";
            }
            else if ($lien == 18) {
              $competition =  $REG2;
              $champ2 = $champ + 9000;
              $nomSerie = "(Ex 1re/ 2me série)";
            }
            else if ($lien == 19) {
              $competition =  $REG3;
              $champ2 = 0;
              $nomSerie = "(Ex 3me/ 4me série)";
            }
          
            echo "  <br>" . "<br>";
            echo "<h5>" .  $competition . " - " . "Poule " . substr($champ, -1);
            echo "<br>"; ?>
  
            <span class="size2"> <?php  echo $nomSerie; ?> </span>
          <?php
            echo "</h5>";
            echo  "<br>" . "<br>" . "<br>";
            affichage($champ, $champ2, $comite, $bdd);
            journeesReportees($comite, $champ, $bdd);
            perequation($comite, $champ, $bdd);
            echo "<br>" . "<br>";
          };


          include"liensDiversBas.php";
          ?>
      </td>

      <!-- Colonne de droite -->
      <td class="colonneDroiteGauche">
          <?php include("../00droite.php"); ?>
      </td>
    </tr>
  </table>
  <footer>
   <?php include("../footer.php"); ?>
  </footer>
</body>
<div id="135743-6"><script src="//ads.themoneytizer.com/s/gen.js?type=6"></script>
<script src="//ads.themoneytizer.com/s/requestform.js?siteId=135743&formatId=6"></script>
</div>
</html>