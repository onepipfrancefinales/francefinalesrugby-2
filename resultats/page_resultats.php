<?php 
require '../saison.php';
require '../consultation/fonctions.php';
require '../connect/connexion1.php';
require 'constantes.php';


//tabNbreClubs();
//echo $sigleLigue;


$tabTrigrammeLigue =   array("ARA" , "BFC", "BRE", "CVL", "COR", "GES", "HDF", "IDF", "NOR", "NAQ", "OCC", "PCA", "PDL" );
$tabLigue =   array(10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 22, 21);
$tabDivision = array(110, 120, 130, 135, 140, 150, 160, 170, 180, 190);
$tabNomDivision = array ("TOP14", "PROD2", "NAT1", "NAT2", "FED1", "FED2", "FED3",  "REG1", "REG2", "REG3");

foreach ($tabLigue as $idLigue) {

  if ($idLigue == 10)
    $sigleLigue = "ARA";
  elseif ($idLigue == 11)
    $sigleLigue = "BRE";
  elseif ($idLigue == 12)
    $sigleLigue = "BFC";
  elseif ($idLigue == 13)
    $sigleLigue = "CVL";
  elseif ($idLigue == 14)
    $sigleLigue = "COR";
  elseif ($idLigue == 15)
    $sigleLigue = "GES";
  elseif ($idLigue == 16)
    $sigleLigue = "HDF";
  elseif ($idLigue == 17)
    $sigleLigue = "IDF";
  elseif ($idLigue == 18)
    $sigleLigue = "NOR";
  elseif ($idLigue == 19)
    $sigleLigue = "NAQ";
  elseif ($idLigue == 20)
    $sigleLigue = "OCC";
  elseif ($idLigue == 21)
    $sigleLigue = "PDL";
  elseif ($idLigue == 22)
    $sigleLigue = "PCA";

structureLigue($idLigue, $bdd); ${$sigleLigue."110"} = $d110;
                                ${$sigleLigue."120"} = $d120; 
                                ${$sigleLigue."130"} = $d130;
                                ${$sigleLigue."135"} = $d135;
                                ${$sigleLigue."140"} = $d140; 
                                ${$sigleLigue."150"} = $d150;
                                ${$sigleLigue."160"} = $d160;
                                ${$sigleLigue."170"} = $d170;
                                ${$sigleLigue."180"} = $d180; 
                                ${$sigleLigue."190"} = $d190;

                             
}


// totaux par ligues

foreach ($tabTrigrammeLigue as $trigrammeLigue) {

${"totaux".$trigrammeLigue} = ${$trigrammeLigue."110"} + ${$trigrammeLigue."120"} + ${$trigrammeLigue."130"} + ${$trigrammeLigue."135"} + ${$trigrammeLigue."140"} 
                            + ${$trigrammeLigue."150"} + ${$trigrammeLigue."160"} + ${$trigrammeLigue."170"} + ${$trigrammeLigue."180"} + ${$trigrammeLigue."190"};

}


$TOP14 = $ARA110 + $BFC110 + $BRE110 + $CVL110 + $COR110 + $GES110 + $HDF110 + $IDF110 + $NOR110 + $NAQ110 + $OCC110 + $PDL110 + $PCA110;
$PROD2 = $ARA120 + $BFC120 + $BRE120 + $CVL120 + $COR120 + $GES120 + $HDF120 + $IDF120 + $NOR120 + $NAQ120 + $OCC120 + $PDL120 + $PCA120;
$NAT1  = $ARA130 + $BFC130 + $BRE130 + $CVL130 + $COR130 + $GES130 + $HDF130 + $IDF130 + $NOR130 + $NAQ130 + $OCC130 + $PDL130 + $PCA130;
$NAT2  = $ARA135 + $BFC135 + $BRE135 + $CVL135 + $COR135 + $GES135 + $HDF135 + $IDF135 + $NOR135 + $NAQ135 + $OCC135 + $PDL135 + $PCA135;

$FED1  = $ARA140 + $BFC140 + $BRE140 + $CVL140 + $COR140 + $GES140 + $HDF140 + $IDF140 + $NOR140 + $NAQ140 + $OCC140 + $PDL140 + $PCA140;
$FED2  = $ARA150 + $BFC150 + $BRE150 + $CVL150 + $COR150 + $GES150 + $HDF150 + $IDF150 + $NOR150 + $NAQ150 + $OCC150 + $PDL150 + $PCA150;
$FED3  = $ARA160 + $BFC160 + $BRE160 + $CVL160 + $COR160 + $GES160 + $HDF160 + $IDF160 + $NOR160 + $NAQ160 + $OCC160 + $PDL160 + $PCA160;

$REG1  = $ARA170 + $BFC170 + $BRE170 + $CVL170 + $COR170 + $GES170 + $HDF170 + $IDF170 + $NOR170 + $NAQ170 + $OCC170 + $PDL170 + $PCA170;
$REG2  = $ARA180 + $BFC180 + $BRE180 + $CVL180 + $COR180 + $GES180 + $HDF180 + $IDF180 + $NOR180 + $NAQ180 + $OCC180 + $PDL180 + $PCA180;
$REG3  = $ARA190 + $BFC190 + $BRE190 + $CVL190 + $COR190 + $GES190 + $HDF190 + $IDF190 + $NOR190 + $NAQ190 + $OCC190 + $PDL190 + $PCA190;

$TT = $TOP14 + $PROD2 + $NAT1 + $NAT2 + $FED1 + $FED2 + $FED3 + $REG1 + $REG2 + $REG3;


?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta name="description" content="Tout sur le comité territorial <?php echo $titre; ?> : Présentation du comité (Bureau; adresse; contact mel; contact site officiel du comité); les effectifs; les palmarès nationaux; les palmares territoriaux et l'ensemble des clubs composant le comité avec un lien pour acceder aux différents clubs.">
  <meta name="keywords" content="comité Bourgogne,Comite Midi Pyrenees de Rugby,Comite Midi Pyrenees Rugby,Stade toulousain,Colomiers,FFR,Rugby,Federation,Francaise,Rugbyman,Rugbymen,Sport,Ballon,Ovale,">
  <meta name="classification" content="Sport,Rugby">
  <meta name="resource-type" content="document">
  <meta name="copyright" content="Comite Midi Pyrenees de Rugby">
  <meta name="viewport" content="width=device-width">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="author" content="Equipe Onepip">
  <meta name="robots" content="All">
  <link type="text/css" rel="stylesheet" href="../formulaireDG.css">
  <link type="text/css" rel="stylesheet" href="../ligne1.css">
  <link type="text/css" rel="stylesheet" href="../lienNoir.css">


  <title>Répartitions par divisions et ligues </title>
</head>


<body>
  <table class="marginAuto">
    <tr>
      <td colspan="3">
        <?php include("../images/page_image_al.php"); ?>
      </td>
    </tr>
    <tr>
      <td colspan="3">
        <?php include("../01ligne.php");   ?>
      </td>
    </tr>

    <tr>
      <td class="colonne">
        <?php include("../01gauche.php");  ?>
      </td>
      <td class="centreDePage">
        <H1 class="style">RESULTATS & CLASSEMENTS
          <br>
          <?php echo $debutSaison; ?> - <?php echo $finSaison; ?>
        </h1>
        <p>&nbsp;</p>

        <p class="backgroundBlack marginAuto size6 colorWhite width550">
          <b> Compétitions fédérales</b>
        </p>
        <p>&nbsp;</p>

        <p class="terr3  marginAuto">Top 14 - Pro D2 <br>
          <a href="page_pro.php">poule unique (<?php echo ($TOP14 + $PROD2) . " clubs"; ?>)</a>
        </p>
        <br>
        <p class="terr3 marginAuto">Nationale<br>
          <a href="page_pro.php">poule unique (<?php echo $NAT1 . " clubs"; ?>)</a>
        </p>
        <br>
        <p class="terr3 marginAuto">Nationale 2 <br>
          <a href="page_pro.php">2 poules de 12 (<?php echo $NAT2 . " clubs"; ?>)</a>
        </p>
        <br>
        <p class="terr3 marginAuto">Fédérale 1 - Nationale B <br>
          <a href="page_fed1.php">4 poules de 12 (<?php echo $FEDd1 . " clubs"; ?>)</a>
        </p>
        <br>
        <p class="terr3 marginAuto">Fédérale 2 - Fédérale B <br>
          <a href="page_fed2.php">8 poules de 12 (<?php echo $FED2 . " clubs"; ?>)</a>
        </p>
        <br>
        <p class="terr3 marginAuto"> Fédérale 3 - Excellence B <br>
          <a href="page_fed3.php?code=NE">16 poules de 10 (<?php echo $FED3 . " clubs"; ?>)</a>
        </p>
        <br><br>

        <br>
        <br>
        <br>
        <br>

        <p class="backgroundBlack marginAuto size6 colorWhite width550">
          <b>Compétitions féminines </b>
        </p>
        <p>&nbsp;</p>
        <p class="terr4 marginAuto">Elite 1 - Elite 2<br>
          <a href="../feminine/page_elite1.php">(20 clubs)</a>
        </p>
        <br>
        <p class="terr4 marginAuto">Fédérale 1<br>
          <a href="../feminine/page_federale.php">(32 clubs)</a>
        </p>
        <br>
        <br>
     
        <p class="backgroundBlack marginAuto size6 colorWhite width550">
          <b>Compétitions régionales</b>
        </p>
        <p></p>
        <p class="terr2 marginAuto">LIGUE AUVERGNE RHONE ALPES (<?php echo $ARA170 + $ARA180 + $ARA190 . " clubs"; ?>)<br>
          <a href="page_ara_reg1.php?lien=17"> Régionale 1 (<?php if ($ARA170 > 0) echo $ARA170; ?>) - Régionale 2 (<?php if ($ARA180 > 0) echo $ARA180; ?>) - Régionale 3 (<?php if ($ARA190 > 0) echo $ARA190; ?>) </a>
        </p>
        <br>

        <p class="terr2 marginAuto">LIGUE BOURGOGNE et FRANCHE COMTE (<?php echo $BFC170 + $BFC180 + $BFC190 . " clubs"; ?>)<br>
          <a href="page_bfc.php"> Régionale 1 (<?php if ($BFC170 > 0) echo $BFC170; ?>) - Régionale 2 (<?php if ($BFC180 > 0) echo $BFC180; ?>) - Régionale 3 (<?php if ($BFC190 > 0) echo $BFC190; ?>) </a>
        </p>
        <br>
        <p class="terr2 marginAuto">LIGUE BRETAGNE (<?php echo $BRE170 + $BRE180 + $BRE190 . " clubs"; ?>)<br>
          <a href="page_bre.php"> Régionale 1 (<?php if ($dBRE70 > 0) echo $BRE170; ?>) - Régionale 2 (<?php if ($BRE180 > 0) echo $BRE180; ?>) - Régionale 3 (<?php if ($BRE190 > 0) echo $BRE190; ?>) </a>
        </p>
        <br>
        <p class="terr2 marginAuto">LIGUE CENTRE VAL DE LOIRE (<?php echo $CVL170 + $CVL180 + $CVL190 . " clubs"; ?>)<br>
          <a href="page_cvl.php"> Régionale 1 (<?php if ($CVL170 > 0) echo $CVL170; ?>) - Régionale 2 (<?php if ($CVL180 > 0) echo $CVL180; ?>) - Régionale 3 (<?php if ($CVL190 > 0) echo $CVL190; ?>) </a>
        </p>
        <br>
        <p class="terr2 marginAuto">LIGUE CORSE (<?php echo $COR170 + $COR180 + $COR190 . " clubs"; ?>)<br>
          <a href="page_pca.php"> Régionale 1 (<?php if ($COR170 > 0) echo $COR170; ?>) - Régionale 2 (<?php if ($COR180 > 0) echo $COR180; ?>) - Régionale 3 (<?php if ($COR190 > 0) echo $COR190; ?>) </a>
        </p>
        <br>
        <p class="terr2 marginAuto">LIGUE GRAND EST (<?php echo $GES170 + $GES180 + $GES190 . " clubs"; ?>)<br>
          <a href="page_ges.php"> Régionale 1(<?php if ($GES170 > 0) echo $GES170; ?>) - Régionale 2(<?php if ($GES180 > 0) echo $GES180; ?>) - Régionale 3 (<?php if ($GES190 > 0) echo $GES190; ?>) </a>
        </p>
        <br>
        <p class="terr2 marginAuto">LIGUE HAUTS DE FRANCE (<?php echo $d170 + $d180 + $d190 . " clubs"; ?>)<br>

          <a href="page_hdf.php"> Régionale 1 (<?php if ($d170 > 0) echo $d170; ?>) - Régionale 2 (<?php if ($d180 > 0) echo $d180; ?>) - Régionale 3 (<?php if ($d190 > 0) echo $d190; ?>) </a>
        </p>

        <?php require '../pub/pub_displayCarre.php'; ?>
        <br>
        <br>
        <p class="terr2 marginAuto">LIGUE ILE DE FRANCE (<?php echo $IDF170 + $IDF180 + $IDF190 . " clubs"; ?>)<br>
          <a href="page_idf.php"> Régionale 1 (<?php if ($IDF170 > 0) echo $IDF170; ?>) - Régionale 2 (<?php if ($IDF180 > 0) echo $IDF180; ?>) - Régionale 3 (<?php if ($IDF190 > 0) echo $IDF190; ?>) </a>
        </p>
        <br>
        <p class="terr2 marginAuto">LIGUE NORMANDIE (<?php echo $NOR170 + $NOR180 + $NOR190 . " clubs"; ?>)<br>
          <a href="page_nor.php"> Régionale 1 (<?php if ($NOR170 > 0) echo $NOR170; ?>) - Régionale 2(<?php if ($NOR180 > 0) echo $NOR180; ?>) - Régionale 3 (<?php if ($NOR190 > 0) echo $NOR190; ?>) </a>
        </p>
        <br>
        <p class="terr2 marginAuto">LIGUE NOUVELLE AQUITAINE (<?php echo $NAQ170 + $NAQ180 + $NAQ190 . " clubs"; ?>)<br>
          <a href="page_naq_reg1.php?lien=17"> Régionale 1 (<?php if ($NAQ170 > 0) echo $NAQ170; ?>) - Régionale 2 (<?php if ($NAQ180 > 0) echo $NAQ180; ?>) - Régionale 3 (<?php if ($NAQ190 > 0) echo $NAQ190; ?>) </a>
        </p>
        <br>
        <p class="terr2 marginAuto">LIGUE OCCITANIE (<?php echo $OCC170 + $OCC180 + $OCC190 . " clubs"; ?>)<br>
          <a href="page_occ_reg1.php?lien=17"> Régionale 1 (<?php if ($OCC170 > 0) echo $OCC170; ?>) - Régionale 2 (<?php if ($OCC180 > 0) echo $OCC180; ?>) - Régionale 3 (<?php if ($OCC190 > 0) echo $OCC190; ?>) </a>
        </p>
        <br>
        <p class="terr2 marginAuto">LIGUE PAYS DE LA LOIRE (<?php echo $PDL170 + $PDL180 + $PDL190 . " clubs"; ?>)<br>
          <a href="page_pdl.php"> Régionale 1 (<?php if ($PDL170 > 0) echo $PDL170; ?>) - Régionale 2 (<?php if ($PDL180 > 0) echo $PDL180; ?>) - Régionale 3 (<?php if ($PDL190 > 0) echo $PDL190; ?>) </a>
        </p>
        <br>
        <p class="terr2 marginAuto">LIGUE PROVENCE ALPES COTE D'AZUR (<?php echo $PCA170 + $PCA180 + $PCA190 . " clubs"; ?>)<br>
          <a href="page_pca.php"> Régionale 1 (<?php if ($PCA170 > 0) echo $PCA170; ?>) - Régionale 2 (<?php if ($PCA180 > 0) echo $PCA180; ?>) - Régionale 3 (<?php if ($PCA190 > 0) echo $PCA190; ?>) </a>
        </p>

        <br>
        <br>
       
       
    
      
        <br>
        <br>
        <?php  require "tableauEffectifsClubs.php";  ?>
         <br>
         <br>
      </td>
      <td class="colonne">
        <?php include("../00droite.php");  ?>
      </td>
    </tr>
  </table>
  <?php include("../comitebas.php"); ?>
  <?php include("../bas.php"); ?>
</body>
</html>
<style>
  .border {
    border: 1px solid black
  }
  .bold {
    font-weight: bold;
  }
  .backgroundGrey {
    background-color: #BFC9CA;
  }
  .backgroundColonne {
    background-color: #E5E8E8;
  }
  .style {
    font-family: Arial, Helvetica, sans-serif;
  }
</style>