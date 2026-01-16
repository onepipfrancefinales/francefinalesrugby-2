<?php
require '../../saison.php';
if (isset($_GET['idLigue'])) $idLigue = $_GET['idLigue'];
else $idLigue = 0;
if (isset($_GET['sigleLigue'])) $sigleLigue = $_GET['sigleLigue'];
else $sigleLigue = 0;
require("../../connect/connexion1.php");
require '../fonctionsPalmares.php';
$sigleLigue = substr($sigleLigue, -4, 3);
nomLigue($idLigue, $sigleLigue, $bdd);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <link rel="canonical" href="https://francefinalesrugby.fr/palmares/palmTerritorial/tableauPalmReg.php?sigleLigue=<?php echo $$sigleLigue; ?>">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <link rel="preconnect" href="tableauPalmReg.php" />
  <link type="text/css" rel="stylesheet" href="../../ligne1.css">
  <link type="text/css" rel="stylesheet" href="palmaresTerr.css">
  <title> Champions Régionaux <?php echo $nomLigue; ?></title>
  <meta name="viewport" content="width=device-width">
  <meta name="description" content="Palmarès des ligues régionales">
  <meta name="keywords" content="Presentation de la competititon et de tous les champions de France 1re Serie. Palmares complet de la 1re Serie.">
  <meta name="classification" content="Sport,Rugby">
  <meta name="resource-type" content="document">
  <meta name="copyright" content="Comite Midi Pyrenees de Rugby">
  <meta name="author" content="Equipe Onepip">
  <meta name="robots" content="All">
</head>


<body class="backgroundBlack">

  <table class="borderNone marginAuto width1150">
    <tr>
      <td><?php include("../../images/page_image_al.php"); ?></td>
    </tr>
    <tr>
      <td><?php include("../../01ligne.php");  ?></td>
    </tr>
    <tr class="backgroundWhite height20">
      <td></td>
    </tr>
    <tr>

      <td class="size4 colorWhite">Champions territoriaux (par comité ) avant 2019 :
        <?php
        if ($sigleLigue == "ARA")
          require 'comitesARA.php';
        elseif ($sigleLigue == "OCC")
          require 'comitesOCC.php';
        elseif ($sigleLigue == "NAQ")
          require 'comitesNAQ.php';
        elseif ($sigleLigue == "PCA")
          require 'comitesPCA.php';
        else
          require 'comitesAutres.php';
        ?>
      </td>
    </tr>


  </table>

  <table class="borderNone marginAuto width1250">
    <tr>
      <td class="width225"><img class="borderNone width225 height225" src="/images/ligues/<?php echo $sigleLigue; ?>.jpg" alt="Logo de la ligue"> </td>
      <td class="width800 colorWhite center size7">
        <p>Champions Régionaux<br>de la <strong>ligue<br><?php echo $nomLigue; ?></strong></p>
      </td>
      <td class="width225"><img class="borderNone width225 height225" src="../../images/ligues/<?php echo $sigleLigue; ?>.jpg" alt="Logo de la ligue"></td>
    </tr>
    <tr>
      <td colspan="3" class="height25"></td>
    </tr>
  </table>

  <?php
  if (isset($rang));
  else $rang = "rang inconnu";
  if (isset($comite));
  else $comite = "comite inconnu";
  $comite = "(" . $sigleLigue . ")";
  // echo $comite;
  ?>

  <table class="borderNone width1000 marginAuto">
    <tr>
      <td colspan="4" class="colorWhite styleArial">
        <h2> Equipes premières</h2>
      </td>
      <td></td>
      <td colspan="2" class="colorWhite styleArial">
        <h2> Equipes réserves</h2>
      </td>
    </tr>
    <tr>
      <th class="width34"></th>
      <th class="width200 backgroundCCCCCC styleArial">Régionale 1</th>
      <th class="width200 backgroundCCCCCC styleArial">Régionale 2</th>
      <th class="width200 backgroundCCCCCC styleArial">Régionale 3</th>
      <th class="backgroundBlack width200 borderNone"></th>
      <th class="width200 backgroundCCCCCC styleArial">Rés Rég 1</th>
      <th class="width200 backgroundCCCCCC styleArial">Rés Rég 2</th>
    </tr>
    <tr>
      <td>
        <hr>
      </td>
      <td>
        <hr>
      </td>
      <td>
        <hr>
      </td>
      <td>
        <hr>
      </td>
      <td>

      </td>
      <td>
        <hr>
      </td>
      <td>
        <hr>
      </td>
      <td>
        <hr>
      </td>
    </tr>
    <tr>
      <td class="equipes"><?php $rang = 170;
                          saisonLigues($rang, $comite, $bdd, true); ?></td>
      <td class="equipes"><?php $rang = 170;
                          palmaresLigues($comite, $rang, $bdd, true); ?></td>
      <td class="equipes"><?php $rang = 180;
                          palmaresLigues($comite, $rang, $bdd, true); ?></td>
      <td class="equipes"><?php $rang = 190;
                          palmaresLigues($comite, $rang, $bdd, true); ?></td>
      <td class="equipes"><?php // $rang =200; palmaresLigues($comite, $rang, $bdd, true);
                          ?></td>
      <td class="equipes"><?php $rang = 270;
                          palmaresLigues2($comite, $rang, $bdd, true); ?></td>
      <td class="equipes"><?php $rang = 9180;
                          palmaresLigues2($comite, $rang, $bdd, true); ?></td>

    </tr>
  </table>
  <br><br>
  <table class="borderNone width1000 marginAuto">
    <tr>
      <td class="colorWhite alignLeft">
        <p> Saison 2022-2023 : Réforme des divisions régionales (Passage de 6 à 3 divisions). <br>
          Saison 2018-2019 : Création des ligues (Passage de 26 comités à 13 ligues).</p>
      </td>
    </tr>

  </table>
  <br>
  <p class="center colorWhite size7"><b>Equipes premières</b></p>
  <table class="borderNone width1000 marginAuto">
    <tr>
      <th class="width34"></th>
      <th class="width200 backgroundCCCCCC styleArial">Honneur</th>
      <th class="width200 backgroundCCCCCC styleArial">Promotion<br>honneur</th>
      <th class="width200 backgroundCCCCCC styleArial">1re série</th>
      <th class="width200 backgroundCCCCCC styleArial">2me série</th>
      <th class="width200 backgroundCCCCCC styleArial">3me série</th>
      <th class="width200 backgroundCCCCCC styleArial">4me série</th>
    </tr>
    <tr>
      <td>
        <hr>
      </td>
      <td>
        <hr>
      </td>
      <td>
        <hr>
      </td>
      <td>
        <hr>
      </td>
      <td>
        <hr>
      </td>
      <td>
        <hr>
      </td>
      <td>
        <hr>
      </td>
    </tr>
    <tr>
      <td class="equipes"><?php $rang = 170;
                          saisonLigues($rang, $comite, $bdd, false); ?></td>
      <td class="equipes"><?php $rang = 170;
                          palmaresLigues($comite, $rang, $bdd, false); ?></td>
      <td class="equipes"><?php $rang = 180;
                          palmaresLigues($comite, $rang, $bdd, false); ?></td>
      <td class="equipes"><?php $rang = 190;
                          palmaresLigues($comite, $rang, $bdd, false); ?></td>
      <td class="equipes"><?php $rang = 200;
                          palmaresLigues($comite, $rang, $bdd, false); ?></td>
      <td class="equipes"><?php $rang = 210;
                          palmaresLigues($comite, $rang, $bdd, false); ?></td>
      <td class="equipes"><?php $rang = 220;
                          palmaresLigues($comite, $rang, $bdd, false); ?></td>
    </tr>
  </table>


  <p class="center colorWhite size7"><b>Equipes réserves</b></p>


  <table class="borderNone width1000 marginAuto">
    <tr>
      <th class="width50"> </th>
      <th class="width250 ">Honneur</th>
      <th class="width250">Promotion honneur</th>
      <th class="width250">1re série</th>
      <th class="width250">2me série</th>
    </tr>
    <tr>
      <td class="equipes colorWhite"><?php $rang = 270;
                                      saisonLigues2($rang, $comite, $bdd, false); ?></td>
      <td class="equipes colorWhite"><?php $rang = 270;
                                      palmaresLigues2($comite, $rang, $bdd, false); ?></td>
      <td class="equipes"><?php $rang = 9180;
                          palmaresLigues2($comite, $rang, $bdd, false); ?></td>
      <td class="equipes"><?php $rang = 9190;
                          palmaresLigues2($comite, $rang, $bdd, false); ?></td>
      <td class="equipes"><?php $rang = 9200;
                          palmaresLigues2($comite, $rang, $bdd, false); ?></td>
    </tr>
  </table>
  <p></p>
  <p></p>
  <p></p>

  <table class="borderNone width1250 marginAuto">
    <tr>

      <td> <?php include("../../comitebas.php");  ?></td>
    </tr>
    <tr>
      <td><?php //include("../../pub/pub1.php"); 
          ?></td>
    </tr>
    <tr>
      <td><?php include("../../bas.php"); ?></td>
    </tr>


  </table>
</body>

</html>