<?php
session_start();
if (isset($_GET['idLigue'])) $idLigue = $_GET['idLigue'];
if (isset($_GET['comite'])) $comite = $_GET['comite'];
if (isset($_GET['annee'])) $annee = $_GET['annee'];
if (isset($_GET['page'])) $page = $_GET['page'];else $page= "accueil";
if (isset($_GET['mode'])) $mode = $_GET['mode'];
if (isset($_GET['type'])) $type  = $_GET['type'];
if (isset($_GET['sommaire'])) $sommaire = $_GET['sommaire'];
if (isset($_GET['lettre'])) $lettre = $_GET['lettre'];
if (isset($_GET['chanson'])) $chanson = $_GET['chanson'];
if (isset($_GET['pays'])) $pays = $_GET['pays'];
if (isset($_GET['pronos'])) $pronos = $_GET['pronos'];
if (isset($_GET['variable_1'])) $sigle = $_GET['variable_1'];
if (isset($_GET['variableLettre'])) $variableLettre = $_GET['variableLettre'];
if (isset($_GET['suiviLigue'])) $suiviLigue = $_GET['suiviLigue'];

require '../connect/connexion1.php';
require '../saison.php';
require '../consultation/fonctions.php';
require '../fonctions.php';
//require '../fonctionsPalmares.php';

require '../resultats/constantes.php';
//ligues
rechercheInfosLigues($idLigue, $bdd);
//comites
nomComite($sigle, 0, $bdd);
rechercheInfosComites($sigle, $bdd);
nomLigueParSigleLigue($sigleLigue, $bdd);
?>
<script >

function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//--> //0new2
</script>
<html>
<head>
  <meta name="description"
    content="Tout sur le comité territorial <?php echo $titre; ?> : Présentation du comité (Bureau; adresse; contact mel; contact site officiel du comit�); les effectifs; les palmar�s nationaux; les palmar�s territoriaux et l'ensemble des clubs composant le comit� avec un lien pour acc�der aux diff�rents clubs.">
  <meta name="keywords"
    content="comité Bourgogne,Comite Midi Pyrenees de Rugby,Comite Midi Pyrenees Rugby,Stade toulousain,Colomiers,FFR,Rugby,Federation,Fran�aise,Rugbyman,Rugbymen,Sport,Ballon,Ovale,">
  <meta name="classification" content="Sport,Rugby">
  <meta name="resource-type" content="document">
  <meta name="copyright" content="Comite Midi Pyrenees de Rugby">
  <meta name="author" content="Equipe Onepip">
  <meta name="viewport" content="width=device-width">
  <meta name="robots" content="All">
  <link type="text/css" rel="stylesheet" href="../consultation/lienNoir.css">
  <link type="text/css" rel="stylesheet" href="../ligne1.css">
  <link type="text/css" rel="stylesheet" href="../formulaireDG.css">
  <link type="text/css" rel="stylesheet" href="../dossiers/dossiers.css">
  <link type="text/css" rel="stylesheet" href="../smart/10.css">
  <title>Accueil dossiers </title>
</head>

<body class= "backgroundWhite">

      <div class= "backgroundWhite">
      <?php include 'smartHeader.php'; ?>  
      <br>  
      <?php  require 'smartBody.php'; ?>
    </div>
   
</body>
<?php include 'smartFooter.php'; ?>
</html>

<style>
  .bge3640c {
    background-color: #e3640c;
  }

  .bgCCCCCC {
    background-color: #CCCCCC;
  }

  .bgFF0000 {
    background-color: #FF0000;
  }

  .bgFF6666 {
    background-color: #FF6666;
  }

  .bgFF9999 {
    background-color: #FF9999;
  }

  .bgFF9966 {
    background-color: #FF9966;
  }

  .bgFF9900 {
    background-color: #FF9900;
  }

  .bgFFFF00 {
    background-color: #FFFF66;
  }

  .bg3300FF {
    background-color: #3300FF;
  }

  .bg3399CC {
    background-color: #3399CC;
  }

  .bgCCFF00 {
    background-color: #CCFF00;
  }

  .bg00FF66 {
    background-color: #00FF66;
  }

  .bg33FF99 {
    background-color: #33FF99;
  }

  .bg66CC66 {
    background-color: #66CC66;
  }

  .bg669900 {
    background-color: #669900;
  }

  .mb-10 {
    margin-bottom: 20px
  }
</style>




