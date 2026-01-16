<?php
include("../../saison.php");
require '../../fichierConfig.php';
if (isset($_GET['choix'])) $choix = $_GET['choix'];
if (isset($_GET['mode'])) $mode  = $_GET['mode'];else $mode= "";
?>
<!DOCTYPE html PUBLIC>
<html lang="fr">

<head>
  <meta name="description"
    content="Le site non officiel du Comit� Midi Pyr�n�es de rugby : Histoire, clubs, calendrier des matches, comp�titions, r�sultats, la Coupe du Monde � Toulouse, jeux, les liens vers les sites officiels, news, interviews, French teams, competitions, history, organisations and institutions, Rugby world Cup in Toulouse, games and links to other official sites.">
  <meta name="keywords"
    content="comité Bourgogne,Comite Midi Pyrenees de Rugby,Comite Midi Pyrenees Rugby,Stade toulousain,Colomiers,FFR,Rugby,Federation,Fran�aise,Rugbyman,Rugbymen,Sport,Ballon,Ovale,">
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

  <title>Tous les Champions de FRANCE <?php echo $annee; ?></title>
</head>


<?php
if ($mode != "smart") {
  echo "<body>";
  echo "<table class=\"width1250 marginAuto\">";
} else {
  echo "<body class=\"backgroundWhite\">";
  echo "<table class=\"width100PC\">";
}
?>
<tr>
  <td colspan="3">
    <?php if ($mode != "smart") {
      include("../../images/page_image_al.php");
      echo "</td>";
      echo "</tr>";
      echo "<tr>";
      echo "<td colspan=\"3\">";
      include("../../01ligne.php");
      echo "</td>";
      echo "</tr>";
      echo "<tr>";
      echo "<td class=\"colonneDroiteGauche backgroundBlue\" valign=\"top\">";
      include("../../01gauche.php");
      echo "</td>";
      echo "<td class=\"colonneCentrale backgroundWhite\">";
    } else {

      echo "<table class=\"width98PC\" border=\"1\">";
      echo "<tr> ";
      echo "<td class =\"h22 width5PC\"><a href=\"../accueil2.php\"><img src=\"../../images/smart/flecheGauche.jpg\" width=\"27\" height=\"20\" alt=\"fléche retour\"></a></td>";
      echo "<td class =\"h22 width95PC\">France Finales Rugby</td>";
      echo "</tr>";
      echo "<tr>";
      echo "<td colspan=\"2\" class =\"h12\">Tout sur le rugby</td>";
      echo "</tr>";
      echo "</table>";
    }

    ?>



    <h1 class="center colorRed styleArial">Série YouTube : VDR <br><span class="size3 styleArial">( Vie De Rugbyman )</span> </h1>
    
    
   <br>   <div class="size4 styleArial" width="50%">
            Suivez le parcours des équipes I et II du club de L'Isle en Dodon engagées en championnat régionale 1 (Ligue Occitanie ).
            Cette série vous permet de vous immerger dans ce club de village en assistant aux entrainements, aux différentes rencontres, aux causeries d'avant et d'après matchs, aux scéances de motivations etc ...
      mais également de faire connaissance avec les joueurs, les coachs et toutes les personnes présentes autour de ce club.</div><br>
   
<hr>

<?php 
/*
include '../video/serieVDR/J18.php' ;
include '../video/serieVDR/J17.php' ;
include '../video/serieVDR/J16.php' ;
include '../video/serieVDR/J15.php' ;
include '../video/serieVDR/J14.php' ;
include '../video/serieVDR/J13.php' ; 


*/

echo  "<div class=\"bold center siz4 styleArial\">";
echo "Prochaine journée : ";echo "<br>";
echo "Dimanche 18 Janvier 2026";
echo "</div>";
echo "<br>";echo "<br>";echo "<br>";echo "<br>";

include '../video/serieVDR/J12.php' ; 



include '../video/serieVDR/J11.php' ;
/* 
include '../video/serieVDR/J10.php' ; 
*/
include '../video/serieVDR/J9.php' ;
include '../video/serieVDR/J8.php' ;
include '../video/serieVDR/J7.php' ;
include '../video/serieVDR/J6.php' ;
include '../video/serieVDR/J5.php' ;
include '../video/serieVDR/J4.php' ;
include '../video/serieVDR/J3.php' ; 
include '../video/serieVDR/J2.php' ; 
include '../video/serieVDR/J1.php' ; 
echo "<br>";echo "<br>";echo "<br>";
?>

      <?php if ($mode != "smart") {
      ?>
      </td>

  <td class="colonneDroiteGauche backgroundBlue" valign="top">
    <?php
        if ($mode != "smart") {
          include("../../00droite.php");
        } ?>
  </td>
</tr>
<?php
      }
?>

</table>

</body>

<?php require "../footer.php"; ?>

</html>