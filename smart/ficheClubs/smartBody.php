 <!---- Corps de la page ---->

 <?php
  switch ($page) {
    case "actualites":
      require '../dossiers/actualites/actualites.php';
      break;
    case "champions":
      require '../dossiers/champions/champions.php';
      break;
    case "palmaresRegions":
      require 'palmares/regions.php';
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
case "recherche":
  require 'ficheClubs/pageFicheClubs.php';
  break;


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