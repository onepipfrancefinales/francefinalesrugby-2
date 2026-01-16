<?php
session_start();
//$message = "Arr&ecirc;t des compétitions &agrave; l'occasion de la 6me journée du 01 Novembre";
//require '../connect/connexion2.php';

include "../saison.php";
include "../fichierConfig.php";
require '../connect/connexion6.php';
include "fonctions.php";
require 'constantes.php';
require '../Phpleague/phpca/consult/fonctions_matchs.php';
require '../Phpleague/phpca/lang/lang_fr.php';
$champLigue = 19;
$sigleLigue = "(NAQ)";
$bddComite = "ca";
$comite = "phpca";
$CMT = "CA";
$cmt = "ca";
$comiteNom = "Cote d'Argent"; ?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9177538664500260" crossorigin="anonymous"></script>
  <link rel="canonical" href="https://francefinalesrugby.fr/resultats/page_naq_reg1.php/">
  <meta charset="utf-8">
  <link type="text/css" rel="stylesheet" href="../Phpleague/phpca/league.css">
  <link type="text/css" rel="stylesheet" href="../formulaireDG.css">
  <link type="text/css" rel="stylesheet" href="resultat.css">
  <link type="text/css" rel="stylesheet" href="../ligne1.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $champReg; ?> Nouvelle Aquitaine</title>
  <meta name="description" content=" Résulats des compétitions territoriales du comité Armagnac Bigorre. Calendriers, résultats et statistiques de l'honneur � la 4me Série, équipes II comprises. Egalement disponible les phases finales territoriales des années précédentes et les palmares territoriaux des difféerentes divisions du comité. ">
  <meta name="classification" content="Sport,Rugby">
  <meta name="resource-type" content="document">
  <meta name="copyright" content="Comite Midi Pyrenees de Rugby">
  <meta name="author" content="Equipe Onepip">
  <meta name="robots" content="All">
  <script>
    function ouvrirPopup(page, nom, options) {
      window.open(page, nom, options);
    }
  </script>

  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9177538664500260" crossorigin="anonymous"></script>

</head>

<body>

  <table class="table">

    <tr>
      <td colspan="3">
        <img src="../images/banniere_haut/(<?php echo $CMT; ?>).jpg" alt="" height="150" width="1250">
      </td>
    </tr>
    <tr>
      <td colspan="3">
        <?php include "../01ligne.php"; ?>
      </td>
    </tr>
    <tr>
      <td colspan="3">

      </td>
    </tr>
    <tr valign="middle">
      <td class="colonneDroiteGauche">
        <?php include "../01gauche.php"; ?>
      </td>
      <td class="colonneCentrale center">
        <h1> Compétitions Régionales</h1>
        <h2 class="titre"><?php echo $ligueNAQ; ?></h2>
        <h2 class="commentaire">La ligue Nouvelle Aquitaine est née de la fusion des comité;s territoriaux<br>
          du Béarn, de Basque Landes, de Côte d'Argent, du Limousin, <br>
          du périgord Agénais et du comité; Poitou Charente en 2018.</h2>
        <br>
        <?php
        include 'liensDivers.php';
        include 'sommaires.php';

        echo " <hr>" . "<hr>";

        $lien = $_GET['lien'];

        if ($lien == 17) {
          $tableauCompetition = $tableauNAQ1;
        } else if ($lien == 18) {
          $tableauCompetition = $tableauNAQ2;
        } else if ($lien == 19) {
          $tableauCompetition = $tableauNAQ3;
        }


        foreach ($tableauCompetition as $champ) {

          if ($lien == 17) {
            $competition =  $REG1;
            $champ2 = $champ + 100;
            $nomSerie = "(Ex honneur/ promotion honneur)";
          } else if ($lien == 18) {
            $competition =  $REG2;
            $champ2 = $champ + 9000;
            $nomSerie = "(Ex 1re/ 2me série)";
          } else if ($lien == 19) {
            $competition =  $REG3;
            $champ2 = 0;
            $nomSerie = "(Ex 3me/ 4me série)";
          }
          echo "  <br>" . "<br>";
          echo "<h5>" .  $competition . " - " . "Poule " . substr($champ, -1);
          echo "<br>"; ?>

          <span class="size2"><?php echo $nomSerie; ?> </span>
          <?php
          echo "</h5>";
          echo  "<br>" . "<br>" . "<br>";
          affichage($champ, $champ2, $comite, $bdd);
          journeesReportees($comite, $champ, $bdd);
          perequation($comite, $champ, $bdd);
          echo "<br>" . "<br>";
        };

        if ($lien == 18) {
          echo " <hr>" . "<hr>";
          echo "<h2> Réserve Régionale 2 (suite...)</h2>";
          echo "<h5>" .  "Poule 7" . "</h5>";
          affichage(199187, 0, $comite, $bdd);
          echo "  <br>" . "<br>";
          echo "<h5>"  . "Poule 8" . "</h5>";
          affichage(199188, 0, $comite, $bdd);
          //  journeesReportees($comite, $champ, $bdd);
          //  perequation($comite, $champ, $bdd);

        } else if ($lien == 19) {


          echo " <hr>" . "<hr>";
          echo "<h1>. Promotion Régionale 3 </h1>";


          foreach ($tableauPromoNAQ3 as $champ) {


            $competition =  "Promotion" . ' ' . $REG3;
            $champ2 = 0;
            $nomSerie = "(Ex 3me/ 4me série)";

            echo "  <br>" . "<br>";
            echo "<h5>" .  $competition . " - " . "Poule " . (substr($champ, -1)) ;
            echo "<br>"; ?>

            <span class="size2"><?php echo $nomSerie; ?> </span>
        <?php
            echo "</h5>";
            echo  "<br>" . "<br>" . "<br>";
            affichage($champ, $champ2, $comite, $bdd);
            journeesReportees($comite, $champ, $bdd);
            perequation($comite, $champ, $bdd);
            echo "<br>" . "<br>";
          };
        }

        include "liensDiversBas.php";
        ?>


      </td>
      <td class="colonneDroiteGauche">
        <?php include("../00droite.php"); ?>
      </td>
    </tr>

  </table>
</body>
<footer>
  <?php include("../footer.php"); ?>
</footer>
<div id="135743-6"><script src="//ads.themoneytizer.com/s/gen.js?type=6"></script>
<script src="//ads.themoneytizer.com/s/requestform.js?siteId=135743&formatId=6"></script>
</div>
</html>