 <!---- Corps de la page ---->

 <?php
  switch ($page) {
    case "actualites2":
      require '../admin/analyseSaison/suiviSaison.php';
      break;
    case "actualites":
      require '../dossiers/actualites/actualites.php';
      break;
    case "champions":
      require '../dossiers/champions/champions.php';
      break;
    case "palmaresRegions":
      require '../palmares/palmNational/palmParLigue.php';
      break;
    /* Ligue*/
    case "pronos":
      require 'pronos/sommairePronos.php';
      break;
    case "sommairePalmaresRegions":
      require 'palmares/regions.php';
      break;
    case "pfRegionales":
      require 'pf_terr/regions.php';
      break;
    case "palmaresParComite":
      require '../palmares/palmNational/palmParComite.php';
      break;
    case "brennus":
      require '../dossiers/brennus/accueil.php';
      break;
    case "divisions":
      require '../dossiers/divisions/evolutionsDivisions.php';
      break;
    case "scores":
      require '../dossiers/scores/evolutionScores.php';
      break;
    case "lexique": {
        require '../dossiers/lexique/sommaire.php';
        require '../dossiers/lexique/lexique.php';
      }
      break;
    case "hymnes":
      require '../dossiers/hymnes/somHymnes.php';
      break;
    case "serieVDR": {
/*
        include '../dossiers/video/serieVDR/J18.php';
        include '../dossiers/video/serieVDR/J17.php';
        include '../dossiers/video/serieVDR/J16.php';
        include '../dossiers/video/serieVDR/J15.php';
        include '../dossiers/video/serieVDR/J14.php';
        include '../dossiers/video/serieVDR/J13.php';
        include '../dossiers/video/serieVDR/J12.php';
        include '../dossiers/video/serieVDR/J11.php';
        include '../dossiers/video/serieVDR/J10.php';
 */       
        include '../dossiers/video/serieVDR/J9.php';
        include '../dossiers/video/serieVDR/J8.php';
        include '../dossiers/video/serieVDR/J7.php';
        include '../dossiers/video/serieVDR/J6.php';
        include '../dossiers/video/serieVDR/J5.php';
        include '../dossiers/video/serieVDR/J4.php';
        include '../dossiers/video/serieVDR/J3.php';
        include '../dossiers/video/serieVDR/J2.php';
        include '../dossiers/video/serieVDR/J1.php';
        
        echo "<br>";echo "<br>";echo "<br>";
      }
      break;
    case "videos": {
        include "../dossiers/video/rugbyAmateur/V2.php";
        include "../dossiers/video/rugbyAmateur/V3.php";
        include "../dossiers/video/rugbyAmateur/V4.php";
        include "../dossiers/video/rugbyAmateur/V5.php";
        include "../dossiers/video/rugbyAmateur/V6.php";
        include "../dossiers/video/rugbyAmateur/V7.php";
        include "../dossiers/video/rugbyAmateur/V8.php";
      }
      break;
    case "chansons":
      require '../dossiers/chansons/chansons.php';
      break;
    // recherche
    case "ligues":
      require '../consultation/ligueTest.php';
      break;
    case "comites":
      require '../consultation/comite.php';
      break;
    case "lettres":
      require '../consultation/logoclubs2.php';

      break;
  }
  ?>