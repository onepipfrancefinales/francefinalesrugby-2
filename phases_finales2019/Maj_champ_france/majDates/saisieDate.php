<html>

<head>
  <title>Untitled Document</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <link rel="stylesheet" type="text/css" href="maj.css">
  <link rel="stylesheet" type="text/css" href="../../../ligne1.css">
</head>
<?php
$page = "dates";

if (isset($_GET['comite'])) $comite = $_GET['comite'];
else $comite = '-';
if (isset($_GET['division'])) $division = $_GET['division'];
else $division = '-';
if (isset($_GET['type'])) $type = $_GET['type'];
else $type = '-';
if (isset($_GET['annee'])) $annee = $_GET['annee'];
else $annee = '-';
if (isset($_GET['prefixe'])) $prefixe = $_GET['prefixe'];
else $prefixe = '-';

require '../../../connect/connexion1.php';
require("../../../phases_finales2019/fonctionsChampFrance2019.php");
date2019($division, $annee, $bdd);

echo "type (../saisieEquipe.php): " . $type;
echo "<br>";

?>

<body>
  <table width="452">
    <tr>
      <td colspan="2" class="center size5 bold styleArial">Maj Champ de France <?php echo $annee; ?></td>
    </tr>
    <tr class="backgroundWhite">
      <td colspan="2" class="center styleArial size4 colorRed bold">Saisie des dates</td>
    </tr>
    <tr>
      <td width="37" class="backgroundBlack center size6 styleArial bold colorWhite">1</td>
      <td width="303" class="backgroundBlue"><?php include "../choixDivision.php"; ?></td>
    </tr>
  </table>
  <table width="354" class="borderNone" height="66">
    <tr class="backgroundBlue">
      <td colspan="2" height="11">&nbsp;</td>
    </tr>
    <tr>
      <td height="22" width="26%"></td>
      <td width="74%" height="-4" class="background0099FF"></td>
    </tr>
    <tr>
      <td height="17" width="26%" class="center">Base</td>
      <td width="74%" height="17" class="background0099FF center"></td>
    </tr>
    <tr>
      <td height="23" width="26%" class="center">Année</td>
      <td width="74%" height="23" class="backgroundBlack center bold size5 colorWhite"><?php echo $annee; ?></td>
    </tr>
    <tr>
      <td height="13" width="26%" class="center">Division</td>
      <td width="74%" height="13" class="background0099FF center"><?php echo $division; ?></td>
    </tr>
    <tr>
      <td height="13" width="26%"></td>
      <td width="74%" height="13" class="background0099FF"></td>
    </tr>
  </table>

  <?php
  $anneeMoins1 = $annee - 1;
 echo "<h2>". "Saison : " . $anneeMoins1 . " - " . $annee."</h2>";
 

  if (isset($_GET['comite'])) $comite = $_GET['comite'];
  else $comite = '-';
  if (isset($_GET['division'])) $division = $_GET['division'];
  else $division = '-';
  if (isset($_GET['type'])) $type = $_GET['type'];
  else $type = '-';
  if (isset($_GET['annee'])) $annee = $_GET['annee'];
  else $annee = '-';
  if (isset($_GET['page'])) $page = $_GET['page'];
  else $page = "-";

  echo $page;
  ?>
  <form name="insertion" action="validFormulaire.php?division=<?php echo $division; ?>&annee=<?php echo $annee; ?>&page=dates" method="POST">

    <div class="size3 styleArial bold">Barrage
      <input type="text" size="30" name="D0ME" value="<?php echo $D0ME; ?>">
    </div>
    <br>
    <div class="size3 styleArial bold">64me
      <input type="text" size="30" name="D64ME" value="<?php echo $D64ME; ?>">
    </div>
    <br>
    <div class="size3 styleArial bold">32me
      <input type="text" name="D32ME" value="<?php echo $D32ME; ?>">
    </div>
    <br>
    <div class="size3 styleArial bold">16me
      <input type="text" name="D16ME" value="<?php echo $D16ME; ?>">
    </div>
    <br>
    <div class="size3 styleArial bold">8me
      <input type="text" name="D8ME" value="<?php echo $D8ME; ?>">
    </div>
    <br>
    <div class="size3 styleArial bold">Quarts
      <input type="text" name="D4ME" value="<?php echo $D4ME; ?>">
    </div>
    <br>
    <div class="size3 styleArial bold">Demi
      <input type="text" name="D2ME" value="<?php echo $D2ME; ?>">
    </div>
    <br>
    <div class="size3 styleArial bold">Finale
      <input type="text" name="D1ME" value="<?php echo $D1ME; ?>">
    </div>
    <br>
    </p>
    <p>
      <input type="submit" value="modifier" name="submit">
    </p>
  </form>
  <p><a href="../accueilMAJ.php?annee=<?php echo $annee; ?>">retour page accueil</a> </p>