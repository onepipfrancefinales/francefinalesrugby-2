<?php
if (isset($_GET['comite'])) $comite = $_GET['comite'];
if (isset($_GET['champLigue'])) $champLigue = $_GET['champLigue'];else $champLigue=0;
if (isset($_GET['division'])) $division = $_GET['division'];else $division=0;

?>


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
  <meta name="robots" content="All">
  <meta charset="utf-8">

  <link type="text/css" rel="stylesheet" href="../lienNoir.css">
  <link type="text/css" rel="stylesheet" href="../formulaireDG.css">
  <link type="text/css" rel="stylesheet" href="../resultats/resultat.css">
  <link type="text/css" rel="stylesheet" href="/Phpleague/phpab/league.css">
  <link type="text/css" rel="stylesheet" href="../ligne1.css">
  <title>Page pronostics </title>
  <script>
    function ouvrirPopup(page, nom, options) {
      window.open(page, nom, options);
    }
  </script>
</head>

<body>
  <table class="table">
    <tr>
      <td colspan="3" height="74">
        <?php include("../images/page_image_al.php"); ?>
      </td>
    </tr>
    <tr>
      <td colspan="3">
        <?php include("../01ligne.php"); ?>
    </tr>
    <tr>
      <td class="colonneDroiteGauche ">
        <?php include("../01gauche.php"); ?>
      </td>
      <td class="colonneCentrale ">
        <?php 
  
        include("pronos.php"); ?>
      </td>
      <td class="colonneDroiteGauche">
        <?php include("../00droite.php"); ?>
      </td>
    </tr>
  </table>
  <table class="marginAuto">

 
  <tr>
 
<td class="colonneForum"></td>

<!--
<td class="center"> 
  <iframe width="1000" height="1000" src="https://francefinalesprono.forumactif.com/" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </td>
<td class="colonneForum"></td>
  -->
</tr>
  

  </table>
    
    <footer>
    <?php include("../resultats/piedDePage.php"); ?>
  </footer>
</body>

</html>

<style>
.colonneForum {
	background-color: #006699;
	width: 123px;
	vertical-align: top;

}

</style>