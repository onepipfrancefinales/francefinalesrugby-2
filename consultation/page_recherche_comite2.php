<?php
require("../connect/connexion1.php");
$mode = $_REQUEST['mode'];
//if (isset ($chaine)) $chaine=$chaine; else $chaine ="";
if (isset($_REQUEST['variableLettre'])) $chaine = $_REQUEST['variableLettre']; else $chaine ="";
if (isset($_REQUEST['variable_1'])) $variable_1 = $_REQUEST['variable_1'];else $variable_1="";

$reponse = $bdd->query("SELECT * 
						FROM bdclubs 
						WHERE nom_1='$chaine'or nom_2='$chaine'or sigle='$chaine' or nom_3='$chaine' or nom_4='$chaine'");
while ($donnees = $reponse->fetch()) {

  $coordonnees = array(
    "$chaine" => $donnees['nom_1']
  );

  foreach ($coordonnees as $cle => $element) {
    '' . $cle . ' vaut ' . $element . '<br />';
  }
  $coordonnees = array(
    "$chaine" => $donnees['code']
  );

  foreach ($coordonnees as $cle1 => $element1) {
    '' . $cle1 . ' vaut ' . $element1 . '<br />';
  }
  $id = $element1;
}

$reponse = $bdd->query("SELECT * 
						FROM bdclubs 
						WHERE nom_1='$chaine'or nom_2='$chaine'or sigle='$chaine' or nom_3='$chaine' or nom_4='$chaine'"); 
while ($donnees = $reponse->fetch()) {
  $titre = $donnees['sigle'];
}
?>

<!DOCTYPE html PUBLIC>
<html lang="fr">

<head>
  <title>Tous les clubs du comité <?php echo $sigle; ?></title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content=" <?php echo $titre; ?> : Présentation du club (Bureau; Siège; Stade; Contacts); les grandes du dates du club; les palmar�s; les r�sultats du clubs au cours des derni�res saisons et un album photos d�di� au club. ">
  <meta name="keywords" content="comité Bourgogne,Comite Midi Pyrenees de Rugby,Comite Midi Pyrenees Rugby,Stade toulousain,Colomiers,FFR,Rugby,Federation,Fran�aise,Rugbyman,Rugbymen,Sport,Ballon,Ovale,">
  <meta name="classification" content="Sport,Rugby">
  <meta name="resource-type" content="document">
  <meta name="copyright" content="Comite Midi Pyrenees de Rugby">
  <meta name="author" content="Equipe Onepip">
  <meta name="robots" content="All">
  <link type="text/css" rel="stylesheet" href="../ligne1.css">
  <link type="text/css" rel="stylesheet" href="../smart/10.css">
  <link type="text/css" rel="stylesheet" href="../lienNoir.css">
  <link type="text/css" rel="stylesheet" href="../formulaireDG.css">
  <link type="text/css" rel="stylesheet" href="resultat.css">
</head>

<body class="backgroundBlack">";
  <table width="1250" class="marginAuto">
    <tr>
      <td colspan="3" height="74">
        <?php include("../images/page_image_al.php");  ?>
      </td>
    </tr>
    <tr>
    <tr>
      <td colspan="3">
        <?php include("../01ligne.php");  ?>
      </td>
    </tr>
    <tr>
      <td class="colonne">
        <?php include("../01gauche.php"); ?>
      </td>
      <td class="centreDePage">
        <?php include("logoclubs2.php"); ?>
      </td>
      <td class="colonne">
        <?php include("../00droite.php"); ?>
      </td>
    </tr>
  </table>
  <footer>
    <?php include("../resultats/piedDePage.php");  ?>
  </footer>

</html>