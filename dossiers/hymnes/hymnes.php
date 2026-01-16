<?php
include("../../saison.php");
if (isset($_GET['mode'])) $mode  = $_GET['mode'];
else $mode = "";;
if (isset($_GET['pays'])) $pays  = $_GET['pays'];
/*
echo "page Hymnes";
echo $pays;
echo $mode;
*/
?>

<!DOCTYPE html PUBLIC>
<html lang="fr">

<head>

  <head>
    <link rel="canonical" href="https://francefinalesrugby.fr/dossiers/hymnes/pages_hymnes.php/" />
    <meta charset="utf-8" />
    <meta name="description"
      content="Tout sur le comité territorial  : Présentation du comité (Bureau; adresse; contact mel; contact site officiel du comit�); les effectifs; les palmar�s nationaux; les palmar�s territoriaux et l'ensemble des clubs composant le comit� avec un lien pour acc�der aux diff�rents clubs.">
    <meta name="keywords"
      content="comité Bourgogne,Comite Midi Pyrenees de Rugby,Comite Midi Pyrenees Rugby,Stade toulousain,Colomiers,FFR,Rugby,Federation,Fran�aise,Rugbyman,Rugbymen,Sport,Ballon,Ovale,">
    <meta name="classification" content="Sport,Rugby">
    <meta name="resource-type" content="document">
    <meta name="copyright" content="Comite Midi Pyrenees de Rugby">
    <meta name="author" content="Equipe Onepip">
    <meta name="robots" content="All">
    <title>Hymnes du rugby </title>
    <link type="text/css" rel="stylesheet" href="../../ligne1.css" />
    <link type="text/css" rel="stylesheet" href="../../lienNoir.css" />
    <link type="text/css" rel="stylesheet" href="../../formulaireDG.css">
    <link type="text/css" rel="stylesheet" href="../dossiers.css">
    <link type="text/css" rel="stylesheet" href="../../smart/10.css">
  </head>
  
 
    <body class="backgroundWhite">
  
   
         
         
      
        <p class="colorRed bold size7 styleArial backgroundWhite center">
          Chants et hymnes du rugby <br>
          <hr />
        </p>

        <?php include("somHymnes.php"); ?>
        <a name="paroles"></a>
      
      
         <hr/>
      <?php
        // clubs Français
        if ($pays == "bay")
          require 'paysClubs/bayonne.php';
        elseif ($pays == "tou")
          require 'paysClubs/toulon.php';
        elseif ($pays == "pau")
          require 'paysClubs/pau.php';
        elseif ($pays == "lar")
          require 'paysClubs/laRochelle.php';
        elseif ($pays == "van")
          require 'paysClubs/vannes.php';
        elseif ($pays == "usa")
          require 'paysClubs/usap.php';
        // hémisphère nord
        elseif ($pays == "ita")
          require 'paysClubs/italie.php';
        elseif ($pays == "fra")
          require 'paysClubs/france.php';
        elseif ($pays == "eco")
          require 'paysClubs/ecosse.php';
        elseif ($pays == "irl")
          require 'paysClubs/irlande.php';
        elseif ($pays == "ang")
          require 'paysClubs/angleterre.php';
        elseif ($pays == "pga")
          require 'paysClubs/paysDeGalles.php';
        // hémisphère sud
        elseif ($pays == "nze")
          require 'paysClubs/nouvelleZelande.php';
        elseif ($pays == "asu")
          require 'paysClubs/afriqueDuSud.php';
        elseif ($pays == "aus")
          require 'paysClubs/australie.php';
        elseif ($pays == "arg")
          require 'paysClubs/argentine.php';

        ?>


</body>
       
  
