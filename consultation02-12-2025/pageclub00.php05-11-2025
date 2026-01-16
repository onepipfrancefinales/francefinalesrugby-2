<?php
require "../saison.php";
require "../fonctions.php";
require "fonctions.php";
if (isset($_REQUEST['champion'])) $chaine = $_REQUEST['champion'];else $chaine = "2029157";
//if (isset($_GET['champion'])) $chaine = $_GET['champion']; else $chaine="2029076";

// remplacementde l'apostrophe
if (stristr($chaine, "'") == true) {
  $chaine2 = str_replace("'", " ", $chaine);
  $chaine = $chaine2;
  echo "<br>";
}

if (isset($_GET['nouveauClub'])) {
  $nouveauClub = $_GET['nouveauClub'];
} else {
  $nouveauClub = 0;
}


//echo "chaine : ".$chaine; echo "<br/>";
//Evaluation de la variable chaine si numérique
if (is_int($chaine)) {

  //   echo " numerique"; echo "<br/>";
  $equipe = substr($chaine, 2, 5);
  $numLigue = substr($chaine, 0, 2);
  $id = substr($chaine, 2, 2);
}


//Evaluation de la variable chaine si textuelle
else {
  // echo " non numerique";echo "<br/>";

  //echo "chaine".$chaine;

  require '../connect/connexion1.php';
  rechercheParNomDeVille($chaine, $bdd);
  infosclub($chaine, $bdd);
  $id_equipe = $id;
  $equipe = $numLigue . $code;
  $id = substr($id, 2, 2);
}

//echo $numLigue;;echo "<br/>";
//echo $equipe;echo "<br/>";
$smart = 0;
//$id = substr($chaine,2,2);
//echo $id;;echo "<br/>";
require '../connect/connexion1.php';

nomComite(0, $id, $bdd);
infosclub($chaine, $bdd);
nomLiguePalm($numLigue, $bdd);
affichageSaisonEnCours($equipe, $bdd);
bdInfosClub($code, $bdd);
saisons($code, $annee, $bdd);


rechercheFusion($equipe, $bdd);

consultationEvolutionClub($equipe, $bdd);
fusionDeClubs2($equipe, $bdd);



//changementNom ($equipe, $width, $bdd);

?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <link rel="canonical" href="https://francefinalesrugby.fr/consultation/pageclub00.php">
  <meta name="description" content="<?php echo $nomLong; ?> (Bureau; Siège; Stade; Contacts; palmarès)">
  <meta name="classification" content="Sport,Rugby">
  <meta name="resource-type" content="document">
  <meta name="copyright" content="Comite Midi Pyrenees de Rugby">
  <meta name="author" content="Equipe France Finales Rugby">
  <meta name="robots" content="All">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <link type="text/css" rel="stylesheet" href="../ligne1.css">
  <link type="text/css" rel="stylesheet" href="pgclub00.css">
  <link type="text/css" rel="stylesheet" href="../lienNoir.css">
  <link type="text/css" rel="stylesheet" href="../formulaireDG.css">
  <title> <?php echo $nomLong; ?> </title>

  <script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-21215219-1']);
    _gaq.push(['_trackPageview']);

    (function() {
      var ga = document.createElement('script');
      ga.type = 'text/javascript';
      ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0];
      s.parentNode.insertBefore(ga, s);
    })();
  </script>
</head>

<body>
  <table width="1250" class="marginAuto">
    <tr>
      <td colspan="3">
        <?php include("../images/page_image_al.php"); ?>
      </td>
    </tr>
    <tr>
      <td colspan="3"><?php include("../01ligne.php"); ?></td>
    </tr>
    <tr>
      <td class="colonne">
        <?php include("../01gauche.php"); ?>
      </td>
      <td class="centreDePage">
        <?php
        if ($nbreDeClub < 2) {

          if ($code > 0) {
            //echo $code;
            include "clubInfos.php";
            include "clubPalmares.php";
            include "clubSaisons.php";
            //   include("00clubs.php");
          } else {
            $photoClub = false;
            include("02clubs.php");
          }
        } else {
          include('modaleRecherche.php');
        }
        ?>
      </td>
      <td class="colonne">
        <?php include("../00droite.php"); ?>
      </td>
    </tr>
  </table>
  <table class="marginAuto" width="1100">
    <tr>
      <?php
      if ($nbreDeClub < 2 and $photoClub == true) {
      ?>
        <td class="backgroundWhite">
          <br> <br>
          <hr color="#FF0000" width="600">
          </hr>
          
        </td>
      <?php
      }
      ?>
    </tr>
    <tr>
      <td>
        <?php include("../bas2.php");   ?>
      </td>
    </tr>
  </table>
</body>
<footer>
</footer>
</html>