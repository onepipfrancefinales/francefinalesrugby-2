<?php
session_start();
include("../saison.php");
include("../fichierConfig.php");
require '../connect/connexion6.php';
require '../Phpleague/phppl/consult/fonctions_matchs.php';
require '../Phpleague/phppl/lang/lang_fr.php';
include("fonctions.php");
require "constantes.php";
$champLigue = 12;
$sigleLigue="(BRE)";
$comite = "phppl";
$CMT = "BR";
$cmt = "br";
$comiteNom = "Bretagne";
?>

<!DOCTYPE html PUBLIC>
<html lang="fr">

<head>
  <link rel="canonical" href="https://francefinalesrugby.fr/resultats/page_bre.php/">
  <meta charset="utf-8" />
  <link type="text/css" rel="stylesheet" href="../Phpleague/phppl/league.css">
  <link type="text/css" rel="stylesheet" href="../formulaireDG.css">
  <link type="text/css" rel="stylesheet" href="resultat.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link type="text/css" rel="stylesheet" href="../ligne1.css">
  <title> Ligue de Bretagne - Résultats et classements</title>
  <meta name="description" content="Ligue de rugby Bretagne, résultats, classements, phases finales et palmarès des compétitions régionales. ">
  <meta name="classification" content="Sport,Rugby">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="resource-type" content="document">
  <meta name="copyright" content="Comite Midi Pyrenees de Rugby">
  <meta name="author" content="Equipe France Finales Rugby">
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
        <?php include("../01ligne.php"); ?>
      </td>
    </tr>

    <tr>
      <!-- Colonne de gauche -->
      <td class="colonneDroiteGauche">
        <?php include("../01gauche.php"); ?>
      </td>

      <!-- Colonne centrale -->
      <td class="colonneCentrale">
        <h1>Compétitions Régionales</h1>
        <h2 class="titre">Ligue de Bretagne</h2>
        <h2 class="commentaire"> Le comité territorial de Bretagne est devenu<br>
          la ligue de Bretagne en 2018. </h2>
        <br>

        <?php
        include("liensDivers.php");
        include("sommaires.php");

        echo "<hr>" . " <hr>";

        //require '../pub/pub_displayH_550.php' ;

        foreach ($tableauBRE as $champ) {
          // selection division 
          if (substr($champ, 3, 2) == 17) {
            $competiton = "Régionale 1";
            $nomSerie = "(Ex honneur/ promotion honneur)";
            $champ2 = $champ + 100;
          } else if (substr($champ, 3, 2) == 18) {
            $competiton = "Régionale 2";
            $nomSerie = "(Ex 1re/ 2me série)";
            $champ2 = 0;
          } else if (substr($champ, 3, 2) == 19) {
            $competiton = "Régionale 3";
            $nomSerie = "(Ex 3me/ 4me série)";
            $champ2 = 0;
          };
          //selection equipe II



//Bourgogne Franche Comté
//Bretagne
//Centre Val de Loire
//Hauts De France
//Pays De la Loire






          $numPoule = substr($champ, -1);
          echo "  <br>" . "<br>";
          echo "<h5>" .  $competiton . " - " . "Poule " . $numPoule;
          echo "<br>"; ?>

          <span class="size2"><?php echo $nomSerie; ?> </span>
        <?php
          echo "</h5>";
          echo  "<br>" . "<br>" . "<br>";
         // $champ2 = $champ + $champReserve;
          affichage($champ, $champ2, $comite, $bdd);
          journeesReportees($comite, $champ, $bdd);
          perequation($comite, $champ, $bdd);
          echo "<br>" . "<br>";
        };
        
         include "liensDiversBas.php";
         
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
</html>