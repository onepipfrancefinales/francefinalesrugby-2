<?php
session_start();
include '../saison.php';
include '../fichierConfig.php';
require '../connect/connexion6.php';
require '../Phpleague/phppl/consult/fonctions_matchs.php';
require '../Phpleague/phppl/lang/lang_fr.php';
include 'fonctions.php';
require 'constantes.php';
$champLigue = 16;
$sigleLigue = "(HDF)";
$comite = "phppl";
$CMT = "FL";
$cmt = "fl";
$comiteNom = "des Flandres"; ?>


<!DOCTYPE html PUBLIC>
<html lang="fr">
<head>
  <link rel="canonical" href="https://francefinalesrugby.fr/resultats/page_hdf.php/" />
  <meta charset="utf-8" />
  <link type="text/css" rel="stylesheet" href="../Phpleague/phppl/league.css" />
  <link type="text/css" rel="stylesheet" href="../formulaireDG.css">
  <link type="text/css" rel="stylesheet" href="resultat.css">
  <link type="text/css" rel="stylesheet" href="../ligne1.css">
  <title>Ligue de rugby Hauts de France : Résultats et classements</title>
  <meta name="description" content="Ligue de rugby Hauts de Fance, résultats, classements, phases finales et palmarès des compétitions régionales.">
  <meta name="classification" content="Sport,Rugby">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="resource-type" content="document">
  <meta name="copyright" content="Comite Midi Pyrenees de Rugby">
  <meta name="author" content="Equipe France Finales Rugby">
  <meta name="robots" content="All">
  <script language="JavaScript">
    function ouvrirPopup(page, nom, options) {
      window.open(page, nom, options);
    }
  </script>
  < <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9177538664500260" crossorigin="anonymous">
    </script>

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
        <?php include("../01ligne.php"); ?></td>
    </tr>
    <tr>
      <td colspan="3"></td>
    </tr>
    <tr>
      <!-- Colonne de gauche -->
      <td class="colonneDroiteGauche">
        <?php include("../01gauche.php"); ?>
      </td>

      <!-- Colonne centrale -->
      <td class="colonneCentrale center">
        <h1> Compétitions Régionales</h1>
        <h2 class="titre">Ligue Hauts de France </h2>
        <h2 class="commentaire">Le comité territorial des Flandres est devenu<br>
          la ligue des Hauts de France en 2018.</h2>
        <?php

        include("liensDivers.php");
        include("sommaires.php");

        echo "<hr />" . " <hr />";

        $tableauCompetition = $tableauHDF;

        foreach ($tableauCompetition as $champ) {

          $idCompetition = substr($champ, -3, 2);

          if ($idCompetition == 17) {
            $competition =  $REG1;
            $champ2 = $champ + 100;
            $nomSerie = "(Ex honneur/ promotion honneur)";
          } else if ($idCompetition == 18) {

            if ($champ < 160185)
              {           
            $competition =  $REG2;
            $champ2 = $champ + 9000;
            $nomSerie = "(Ex 1re/ 2me série)";
              }
              else
                 {           
            $competition =  "Promotion Régionale 2";
            $champ2 = 0;
            $nomSerie = "(Ex 1re/ 2me série)";
              }
          
          } else if ($idCompetition == 19) {
            $competition =  $REG3;
            $champ2 = 0;
            $nomSerie = "(Ex 3me/ 4me série)";
          }

          echo "  <br>" . "<br>";
          if ($champ == 160185)
echo "<h5>" .  $competition . " - " . "Poule " . substr($champ, -1)-4;
            else
          echo "<h5>" .  $competition . " - " . "Poule " . substr($champ, -1);
          echo "<br>"; ?>

          <span class="size2"> <?php echo $nomSerie; ?> </span>
        <?php


          echo "</h5>";
          echo  "<br>" . "<br>" . "<br>";
          affichage($champ, $champ2, $comite, $bdd);
          journeesReportees($comite, $champ, $bdd);
          perequation($comite, $champ, $bdd);
          echo "<br>" . "<br>";
        }

        /*
	 echo "<h5> <a name=\"H\"></a>$FED3 <br>
	 <font face=\"Arial, Helvetica, sans-serif\" size=\"2\">( $PHASE_REGIONALE )</font></h5>";
	$champ = 160171; $champ2 = 160271;
	affichage($champ, $champ2, $comite, $bdd);  
	journeesReportees($comite, $champ, $bdd);  
    perequation($comite, $champ, $bdd);
	
	require '../pub/pub_displayH_550.php' ;
    
	
     echo "<h5> <a name=\"R1\"></a>".$REG1." <br>
	 <font face=\"Arial, Helvetica, sans-serif\" size=\"2\">".$EXHPH."</font></h5>";
	$champ = 160171; $champ2 = 160271;
	affichage($champ, $champ2, $comite, $bdd);  
	journeesReportees($comite, $champ, $bdd);  
    perequation($comite, $champ, $bdd);
	
	
    
    echo " <h5><a name=\"R2\"></a></a>".$REG2." <br />
	<font size=\"2\" face=\"Arial, Helvetica, sans-serif\">".$EXS1S2."
            </font> <br><br></h5>";
    $champ = 160181; $champ2 = 169181;
	affichage($champ, $champ2, $comite, $bdd);  
	journeesReportees($comite, $champ, $bdd);  
	perequation($comite, $champ, $bdd);
	
	// include("comPerso2.php"); 
	//require '../pub/pub_displayH_550.php' ;	 
    /*   	   
    <h6> <a href="../pageOutil.php" target="_top">Saississez vous-m&ecirc;me 
    les résultats de votre club<br>
     Consulter les instructions</a> <font size="2">(simple et rapide)</font></h6>
    */

        //require 'cadrePubHorizontal600.php';
        /*     
    echo " <h5><a name=\"R2\"></a></a>".$REG3." - ".$P1."<br />
	<font size=\"2\" face=\"Arial, Helvetica, sans-serif\">".$EXS3S4." 
            </font> <br><br></h5>";	
	$champ = 160191; $champ2 = 0;
	affichage($champ, $champ2, $comite, $bdd);  
	journeesReportees($comite, $champ, $bdd); 
	perequation($comite, $champ, $bdd);
	
  echo " <h5><a name=\"R2\"></a></a>".$REG3." - ".$P1."<br />
	<font size=\"2\" face=\"Arial, Helvetica, sans-serif\">".$EXS3S4."
            </font> <br><br></h5>";	
	$champ = 160192; $champ2 = 0;
	affichage($champ, $champ2, $comite, $bdd);  
	journeesReportees($comite, $champ, $bdd); 
	perequation($comite, $champ, $bdd);
	*/

        // include("comPerso2.php"); 
        ?>
        <hr />
        <hr />
        <div class="lienSommaireBas">
          <?php
          include("sommaires.php");
          include("liensDivers.php");
          ?>
      </td>
      <td class="colonneDroiteGauche">
        <?php include("../00droite.php"); ?> </p>
      </td>
    </tr>
  </table>
  <footer>
    <?php include("piedDePage.php"); ?>
  </footer>
</body>

</html>