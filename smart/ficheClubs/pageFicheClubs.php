<?php
require "../../saison.php";
include '../../fichierConfig.php';
require "../../fonctions.php";
require "../../consultation/fonctions.php";
if (isset($_POST['champion'])) $chaine = $_POST['champion'];
if (isset($_GET['champion'])) $chaineChampion = $_GET['champion'];

if (isset($_GET['nouveauClub'])) {
  $nouveauClub = $_GET['nouveauClub'];
} else {
  $nouveauClub = 0;
}

if (isset($_GET['page'])) $page = $_GET['page'];
else $page = "";
if (isset($_GET['mode'])) $mode = $_GET['mode'];
else $mode = "smart";
$smart = 1;
//$nouveauClub = $_GET['nouveauClub'];
if (empty($chaine))

  $chaine = $chaineChampion;


//echo "chaine".$chaine;
// remplacementde l'apostrophe
if (stristr($chaine, "'") == true) {
  $chaine2 = str_replace("'", " ", $chaine);
  $chaine = $chaine2;
  echo "<br>";
}


if (is_int($chaine)) {
  $equipe = substr($chaine, 2, 5);
  $numLigue = substr($chaine, 0, 2);
  $id = substr($chaine, 2, 2);
}
//Evaluation de la variable chaine si textuelle
else {
  require '../../connect/connexion1.php';
  infosclub($chaine, $bdd);

  $id_equipe = $id;
  $equipe = $numLigue . $code;
  $id = substr($id, 2, 2);
}


require '../../connect/connexion1.php';
$code = substr($chaine, -5);

nomComite(0, $id, $bdd);
infosclub($chaine, $bdd);
nomLiguePalm($numLigue, $bdd);
affichageSaisonEnCours($equipe, $bdd);
bdInfosClub($code, $bdd);
saisons($code, $annee, $bdd);

consultationEvolutionClub($equipe, $bdd);
rechercheFusion($equipe, $bdd);

fusionDeClubs2($equipe, $bdd);

rechercheParNomDeVille($chaine, $bdd);



if ($page == "recherche" & !empty($id))
  $titre = $nomLong;
elseif ($page == "comite")
  $titre = $nomLong;

elseif ($page == "ligue")
  $titre = $nomLong;
else
  $titre = "Recheche avancée";
?>

<html>

<head>
  <title><?php echo $nomLong; ?></title>
  <link rel="canonical" href="https://francefinalesrugby.fr/smart/ficheClubs/pageFicheClubs.php?champion=<?php echo $id_equipe; ?>">
  <meta name="description" content="Présentation du club <?php echo $nomLong; ?> (bureau, contact, palmarès, etc...">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <link type="text/css" rel="stylesheet" href="../../ligne1.css">
  <link rel="stylesheet" type="text/css" href="../menu_smart2.css">
  <link type="text/css" rel="stylesheet" href="../10.css">
  <link type="text/css" rel="stylesheet" href="paramTiroir.css">
  <link type="text/css" rel="stylesheet" href="../../consultation/pgclub00.css" />
  <meta name=viewport content="width=device-width, initial-scale=1">
</head>

<body text="#000000">
  <div class="fixed-header">
    <div class="container">
      <table width="98%" class="borderWidth1 borderColorBlack">
        <tr>
          <td width="5%" class="h22" height="20"><a href="javascript:history.go(-1)"><img src="../../images/smart/flecheGauche.jpg" height="20"></a></td>
          <td width="95%" class="h22" height="20"> France Finales Rugby </td>
        </tr>
        <tr>
          <td colspan="2" class="h12" width="100%"><?php echo $titre; ?> </td>
        </tr>
      </table>
    </div>
  </div>
  <div class="container">
    <?php
    if (empty($id))
      require '../../consultation/02clubs.php';
    else if ($nbreDeClub > 1)
      require '../../consultation/modaleRecherche.php';
    else {
      include '../../consultation/clubInfos.php';
      include '../../consultation/clubPalmares.php';
      include '../../consultation/clubSaisons.php';
    }
    require '../smartFooter.php';

    ?>
  </div>
</body>

</html>