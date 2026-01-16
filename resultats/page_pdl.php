<?php 
session_start ();
include("../saison.php");
include("../fichierConfig.php");
require '../connect/connexion6.php';
require '../Phpleague/phppl/consult/fonctions_matchs.php';
require '../Phpleague/phppl/lang/lang_fr.php';

include("fonctions.php");
require "constantes.php";
$champLigue=21;
$sigleLigue="(PDL)";
$cmt="pl";
$comite="phppl";
$CMT="PL";
$comiteNom="Pays de Loire";?>
 
<!DOCTYPE html>
<html lang="fr">
<head>
<link rel= "canonical" href= "https://francefinalesrugby.fr/resultats/page_pdl.php/" />
<meta charset="utf-8" />
  <link type="text/css" rel="stylesheet" href="../Phpleague/phppl/league.css"/>
  <link type="text/css" rel="stylesheet" href="../formulaireDG.css">
  <link type="text/css" rel="stylesheet" href="resultat.css">
  <link type="text/css" rel="stylesheet" href="../ligne1.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ligue de rugby Pays de la Loire : Résultats et classsements</title>
  <meta name="description"
 content=" Ligue de rugby Pays de  la Loire , résultats, classements, phases finales et palmarès des compétitions régionales. ">
  <meta name="classification" content="Sport,Rugby">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="resource-type" content="document">
  <meta name="copyright" content="Comite Midi Pyrenees de Rugby">
  <meta name="author" content="Equipe France Finales Rugby">
  <meta name="robots" content="All">
   
</script>
<!--

<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9177538664500260"
     crossorigin="anonymous"></script>
-->
</head>
<body>
<table class="table">
    <tr>
      <td colspan="3"><img src="../images/banniere_haut/(<?php echo $CMT;?>).jpg" alt="" height="150" width="1250"></td>
    </tr>
    <tr>
      <td colspan="3"><?php include("../01ligne.php"); ?></td>
    </tr>
    <tr class="backgroundColorWhite" >
      <td colspan="3">
        <?php //include("../pub/pub_displayHorizontal.php");?>
      </td>
    </tr>
    <tr>
	  <!-- Colonne de gauche --> 
      <td class="colonneDroiteGauche">
        <?php include("../01gauche.php");?> 
    </td>
      
	  <!-- Colonne centrale --> 
	  <td class="colonneCentrale center"> 
          <h1> Compétitions Régionales</h1>
          <h2 class="titre">Ligue Pays de la Loire</h2>
          <h2 class="commentaire">Le comité territorial Pays de la Loire est devenu<br>
            la ligue Pays de la Loire en 2018.</h2>
			<br>
          		 
<?php 
	include("liensDivers.php");  
    include("sommaires.php");  
         
    echo "<hr>"."<hr>";

    $tableauCompetition = $tableauPDL;

    foreach ($tableauCompetition as $champ) {
    
      // echo $champ;
      $idCompetition = substr($champ, -3, 2);
      // echo $idCompetition;
      if ($idCompetition == 17) {
      $competition =  $REG1;
      $champ2 = $champ + 100;
      $nomSerie = "(Ex honneur/ promotion honneur)";
      } else if ($idCompetition == 18) {
      $competition =  $REG2;
      //$champ2 = $champ + 9000;
      $champ2 = 0;
      $nomSerie = "(Ex 1re/ 2me série)";
      } else if ($idCompetition == 19) {
      $competition =  $REG3;
      $champ2 = 0;
      $nomSerie = "(Ex 3me/ 4me série)";
      }
    
      echo "  <br>" . "<br>";
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

   
  include "liensDiversBas.php";
  
  ?>
    
  </td>
      <td class="colonneDroiteGauche">
        <?php include("../00droite.php"); ?> 
      </td>
    </tr>
    
</table>




 <footer> 
  <?php include("piedDePage.php"); ?>
 </footer>
</body>
</html>
