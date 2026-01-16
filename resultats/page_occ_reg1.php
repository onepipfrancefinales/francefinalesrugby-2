<?php
session_start();

include("../saison.php");
include("../fichierConfig.php");
require '../connect/connexion6.php';
include("fonctions.php");
require "constantes.php";
require '../Phpleague/phpab/consult/fonctions_matchs.php';
require '../Phpleague/phpab/lang/lang_fr.php';

$idLigue = 20;
$champLigue = $idLigue;
$sigleLigue = "(OCC)";
$comite = "phpab";
$AB = "AB";
$cmt = "ab";
$CMT = "AB";
$comiteNom = "Occitanie"; ?>


<!DOCTYPE html>
<html lang="fr">

<head>
  <meta name="google-adsense-account" content="ca-pub-9177538664500260">
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9177538664500260" crossorigin="anonymous"></script>
  <link rel="canonical" href="https://francefinalesrugby.fr/resultats/page_occ_reg1.php">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width">
  <link type="text/css" rel="stylesheet" href="../Phpleague/phpab/league.css">
  <link type="text/css" rel="stylesheet" href="../formulaireDG.css">
  <link type="text/css" rel="stylesheet" href="resultat.css">
  <link type="text/css" rel="stylesheet" href="../ligne1.css">
  <title>
    <?php echo $champReg; ?> Occitanie
  </title>
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
  <!--
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9177538664500260"
     crossorigin="anonymous"></script>
  -->
</head>

<body>
  <table class="table">
    <tr>
      <td colspan="3">
        <?php include "../images/page_image_al.php" ; ?>
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
    <tr>
      <!-- Colonne de gauche -->
      <td class="colonneDroiteGauche">
        <?php include "../01gauche.php"; ?>
      </td>

      <!-- Colonne centrale -->
      <td class="colonneCentrale center">
        <h1> Compétitions Régionales</h1>
        <h2 class="titre">Ligue Occitanie</h2>
        <h2 class="commentaire">La ligue Occitanie est née de la fusion des comités territoriaux<br>
          du Languedoc, de l'Armagnac Bigorre, du pays Catalan et du comité<br>
          Midi Pyrénées en janvier 2018.</h2>
        <br>

        <?php
        include "liensDivers.php";
        include "sommaires.php";

        $lien = $_GET['lien'];
        
        if ($lien == 17) { $tableauCompetition = $tableauOCC1; }
        else if ($lien == 18) { $tableauCompetition = $tableauOCC2; }
        else if ($lien == 19) { $tableauCompetition = $tableauOCC3; }
        
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
        
      
          echo "<h5>" .  $competition . " - " . "Poule " . substr($champ, -1);
          echo "<br>"; ?>

          <span class="size2"> <?php  echo $nomSerie; ?> </span>
        <?php
          echo "</h5>";
          echo  "<br>" . "<br>" . "<br>";
          affichage($champ, $champ2, $comite, $bdd);
          journeesReportees($comite, $champ, $bdd);
          perequation($comite, $champ, $bdd);
       
        };


        include "liensDiversBas.php";
        ?>

      </td>
      <!-- Colonne de droite -->
      <td class="colonneDroiteGauche">
        <?php include "../00droite.php"; ?>
      </td>
    </tr>
  </table>

  <footer>
    <?php include "../footer.php" ; ?>
  </footer>
</body>
<div id="135743-6">
  <script src="//ads.themoneytizer.com/s/gen.js?type=6">
</script><script src="//ads.themoneytizer.com/s/requestform.js?siteId=135743&formatId=6"></script>
</div>
</html>