<?php
session_start();
if (isset($_GET['comite'])) $comite = $_GET['comite'];
//echo "comite : ".$comite;
require '../../saison.php';
require '../../consultation/fonctions.php';
require '../../connect/connexion1.php';
require '../../resultats/constantes.php';
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
  <meta name="viewport" content="width=device-width">
  <meta name="robots" content="All">

  <link type="text/css" rel="stylesheet" href="../../ligne1.css" />
    <link type="text/css" rel="stylesheet" href="../../formulaireDG.css">
    <link type="text/css" rel="stylesheet" href="../dossiers.css">
    <link type="text/css" rel="stylesheet" href="../../smart/10.css">
    <title>Accueil dossiers </title>
</head>

<body>

      <div class= "backgroundWhite">
      <table width="100%" border="1">
        <tr>
            <td class="h22">France Finales Rugby</td>
        </tr>
        <tr>
            <td class="h12">Tous sur le rugby</td>
        </tr>
    </table>
        <?php // include "actualites2.php"; ?>
      </div>
   
</body>

<?php
include("../../smart/bas.php");
?>
</footer>

</html>