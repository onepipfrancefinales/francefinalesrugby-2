<?php
if (isset($_GET['bddComite'])) $bddComite = $_GET['bddComite'];
if (isset($_GET['champ'])) $champ = $_GET['champ'];
if (isset($_GET['comite'])) $comite = $_GET['comite'];
if (isset($_GET['seniors'])) $seniors = $_GET['seniors']; else $seniors = "equipeUne";

if (substr($champ, 3, 1) != 9)
$rang = substr($champ, 3, 2) * 10;
else
$rang = substr($champ, 3, 4);

$comitePlus = "(" . '' . $comite . '' . ")";

require("../../saison.php");
require 'fonctions.php';
require '../../connect/connexion1.php';


if ($seniors == "equipeUne")
  $bdEquipe = "bdequipe1";
else {
  $bdEquipe = "bdequipe2";
}

infosComite($champ, $bdd);
nomDivision($rang, $bdd);
infosLigue($codeLigue, $bdd);
palmaresLigue($bdEquipe, $sigleLigue, $comitePlus, $rang, $bdd);
?>

<!DOCTYPE html>
<html lang="fr">
  <meta name="description"
    content="tous les champions de france de rugby, ffr,FFR, presentation de tous les clubs de rugby francais, Champions des differents comit�s territoriaux, Tous les championnats de rugby, f�d�rale 2, f�d�rale 3, f�d�rale 1, top 14.">
  <meta name="keywords"
    content="Brennus,Comite Midi Pyrenees de Rugby,ffr,FFR,Comite territoriaux de rugby,Stade toulousain,Bourgogne,FanceFinalesRugby,Rugby,championnat de france de rugby,Fran�aise,honneur,promotion honneur,Sport,Ballon,Ovale,">
  <meta name="classification" content="Sport,Rugby">
  <meta name="resource-type" content="document">
  <meta name="copyright" content="Comite Midi Pyrenees de Rugby">
  <meta name="author" content="Equipe Onepip">
  <meta name="robots" content="All">
  <title><?php echo "Palmarès Régionaux " . "-" . "Ligue " . $nomCompletLigue; ?> </title>
  <link type="text/css" rel="stylesheet" href="../10.css">
  <?php if ($bddComite == "au" or $bddComite == "ca" or $bddComite == "ab") {
  ?>
    <link type="text/css" rel="stylesheet" href="paramTiroir2.css">
  <?php
  } else {
  ?>
    <link type="text/css" rel="stylesheet" href="paramTiroir.css">
  <?php
  }
  ?>

  <link rel="stylesheet" type="text/css" href="../menu_smart2.css">
  <link type="text/css" rel="stylesheet" href="../../ligne1.css" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name=viewport content="width=device-width, initial-scale=1">
</head>

<body>
  <div class="fixed-header backgroundWhite">
    <div class="container ">
    
    <table width="100%" border="1">
        <tr>
          <td width="5%" class="h22" height="20"><a href="../sommaire.php"><img src="../../images/smart/flecheGauche.jpg" width="27" height="20"></a></td>
          <td width="95%" class="h22" height="20"> France Finales Rugby </td>
        </tr>
        <tr>
          <td colspan="2" class="h12"><?php echo "Palmarès Régionaux " . "<br>" . "Ligue " . $nomCompletLigue; ?></td>
        </tr>
      </table>

      <?php
      include 'choixLigueAvecDifferentsComites.php';
      include 'choixSeniors.php';
      include 'menuTerrReg.php'; ?>
    </div>
  </div>
  <!-- fin entete figée-------->

  <div class="container">
    <!-- affichage palmarès ligue -->
    <?php
    if (
      $comite == "au" or $comite == "ly"  or $comite == "da" or $comite == "ap"
      or $comite == "ab"  or $comite == "ld"  or $comite == "mpy" or $comite == "pc"
      or $comite == "be"  or $comite == "cbl" or $comite == "ca"  or $comite == "lm"
      or $comite == "pch" or $comite == "pa"
    ) {
    ?>
      <div style="margin-top:330px"></div>
    <?php
    } else {
    ?>
      <div style="margin-top:300px "></div>
    <?php
    }


    /* affichage titre palmarès (après-2022) -->*/

   // echo "test2 " .; echo "<br>";
   $champ2 = $rang;
   if (substr($champ, 3, 3) < 200 or (substr($champ, 3, 3) > 260 and substr($champ, 3, 3) < 280) or $champ2 > 9000) {
    ?>
      <p class="palm"> <?php echo "Champions " . 'Ligue ' . $nomCompletLigue . ' ' . $division; ?> </p>
    <?php
    }

    //**************  anneeEnCours - 2023  *******************/
    $intervalle1 =  $saisonMax - 2022;
    for ($i = 0; $i < $intervalle1; $i++) {
    ?>
      <p class="palmNoir center" style="margin-top:9px; margin-bottom:9px"><?php echo $tabSaisons[$i] . ' ' . $tabChampions[$i]; ?></p>
    <?php
    }
    ?>

    <br>

    <!-- affichage titre palmarès ligue (2018-2022) 
      //**************  2022 - 2019  *******************/
    -->
    <div class="palm">
      <?php

      switch (substr($champ, 3, 3)) {
        case 170:
          $division = "Honneur";
          break;
        case 180:
          $division = "Promotion honneur";
          break;
        case 190:
          $division = "1re série";
          break;
        case 200:
          $division = "2me série";
          break;
        case 210:
          $division = "3me série";
          break;
        case 220:
          $division = "4me série";
          break;
        case 270:
          $division = "Réserve honneur";
          break;
        case 9180:
          $division = "Réserve Promotion honneur";
          break;
        case 9190:
          $division = "Réserve 1re série";
          break;
        case 9200:
          $division = "Réserve 2me série";
          break;
      }
      
      if (substr($champ, 3, 3) > 190 and substr($champ, 3, 3) < 250) {

        echo "<br>" . "<br>" . "<br>" . "<br>" ;
      }
      ?>
      <span class="colorBlack size3">2023 - Refonte des divisions : Passage de 6 à 3 niveaux de compétitions.<br>
        suppression des 2me, 3me et 4me séries.
      </span>
      <br><br>
      <?php
      echo "Champions " . 'Ligue ' . $nomCompletLigue . ' ' . $division; ?>
    </div>
    <br>
    <?php
    $intervalle2 =  $intervalle1 + 4;
    for ($i = $intervalle1; $i < $intervalle2; $i++) {
    ?>
      <p class="palmNoir center" style="margin-top:9px; margin-bottom:9px"><?php echo $tabSaisons[$i] . ' ' . $tabChampions[$i]; ?></p>
    <?php
    }
    ?>

    <!-- affichage titre palmarès comités
       //**************  2018 - ......  *******************/   -->
    <p class="palm">
      <?php
      switch ($comite) {
        case "ap":
          $nomCompletComite = "des Alpes";
          break;
        case "au":
          $nomCompletComite = "d'Auvergne";
          break;
        case "da":
          $nomCompletComite = "Drôme Ardèche";
          break;
        case "ly":
          $nomCompletComite = "du Lyonnais";
          break;
       
        case "be":
          $nomCompletComite = "du Béarn";
          break;
        case "cbl":
          $nomCompletComite = "Côte Basque Landes";
          break;
        case "ca":
          $nomCompletComite = "Côte d'Argent";
          break;
        case $comite == "lm":
          $nomCompletComite = "du Limousin";
          break;
        case $comite == "pch":
          $nomCompletComite = "Poitou Charente";
          break;
        case $comite == "pa":
          $nomCompletComite = "Périgord Agenais";
          break;
        
        case $comite == "ab":
          $nomCompletComite = "Armagnac Bigorre";
          break;
        case $comite == "ld":
          $nomCompletComite = "Languedoc";
          break;
        case $comite == "mpy":
          $nomCompletComite = "Midi Pyrénées";
          break;
        case $comite == "pc":
          $nomCompletComite = "Pays Catalan";
          break;
      }
      ?>
      <span class="colorBlack size3">2019 - Reformes Administratives : Suppression des 26 comités territoriaux remplacés par 13 ligues calquées sur les 13 regions administratives françaises.</span>
      <br><br>
      <?php echo "Champions " . 'comité ' . $nomCompletComite . ' ' . $division; ?>
    </p>
    <?php
    for ($i = $intervalle2; $i < $saisonCount; $i++) { ?>
      <p class="palmNoir center" style="margin-top:9px; margin-bottom:9px"><?php echo $tabSaisons[$i] . ' ' . $tabChampions[$i]; ?></p>
    <?php
    } ?>
    <br>
    <?php require("../smartFooter.php"); ?>
  </div>
</body>

</html>