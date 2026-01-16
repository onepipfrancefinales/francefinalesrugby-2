


<?php
include("../../saison.php");
if (isset($_GET['mode'])) $mode  = $_GET['mode'];
?>
<!DOCTYPE html>
<html lang="fr">

<head>
<meta charset="UTF-8">
  <meta name="description"
    content="Le site non officiel du Comit� Midi Pyr�n�es de rugby : Histoire, clubs, calendrier des matches, comp�titions, r�sultats, la Coupe du Monde � Toulouse, jeux, les liens vers les sites officiels, news, interviews, French teams, competitions, history, organisations and institutions, Rugby world Cup in Toulouse, games and links to other official sites.">
  <meta name="keywords"
    content="comit� Bourgogne,Comite Midi Pyrenees de Rugby,Comite Midi Pyrenees Rugby,Stade toulousain,Colomiers,FFR,Rugby,Federation,Fran�aise,Rugbyman,Rugbymen,Sport,Ballon,Ovale,">
  <meta name="classification" content="Sport,Rugby">
  <meta name="resource-type" content="document">
  <meta name="copyright" content="Comite Midi Pyrenees de Rugby">
  <meta name="author" content="Equipe Onepip">
  <meta name="robots" content="All">
  <link type="text/css" rel="stylesheet" href="../../ligne1.css" />
  <link type="text/css" rel="stylesheet" href="../../lienNoir.css" />
  <link type="text/css" rel="stylesheet" href="../../formulaireDG.css">
  <link type="text/css" rel="stylesheet" href="../dossiers.css">
  <link type="text/css" rel="stylesheet" href="../../smart/10.css">
  <title>Suivi du champ de France 2025</title>
</head>

<body>
  <table class="marginAuto width1250">
    <tr>
      <td colspan="3">
        <?php include("../../images/page_image_al.php"); ?>
      </td>
    </tr>
    <tr>
      <td colspan="3">
        <?php include("../../01ligne.php"); ?>
      </td>
    </tr>
    <tr>

      <td class="colonneDroiteGauche backgroundBlue">
        <?php include("../../01gauche.php"); ?>
      </td>
      <td class="colonneCentrale backgroundWhite">
             <hr>
     
     
          
     
     
     
             <?php require '../../admin/analyseSaison/suiviSaison2.php'; ?>
      </td>
      <td class="colonneDroiteGauche backgroundBlue">
        <?php include("../../00droite.php"); ?>
      </td>
    </tr>
  </table>
</body>

<?php require "../footer.php"; ?>

</html>