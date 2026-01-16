<?php
require "../../connect/connexion1.php";
require "fonctionsBrennus.php";
champFrance($bdd);
nbreEdition($bdd);
//nomStade(5, $bdd);

//echo "ee".$nomStade;
//villes($bdd);
//stades($bdd);
?>


<!DOCTYPE html>
<html lang="fr">

<head>
  <title>Bouclier de Brennus : Les finales</title>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <link type="text/css" rel="stylesheet" href="../../ligne1.css">
  <link href="https://fonts.cdnfonts.com/css/lucida-handwriting-std" rel="stylesheet">
                
                
</head>

<body text="#000000" class="backgroundBlack" width="1000">
<table width="1000" class="borderWidth1 marginAuto borderColorBlack">
  <tr> 
    <td bgcolor="#FFFFFF"> 
  <?php include "haut.php" ; ?>

  <br>
  <?php
//  include("lesfinales.php");
    include "lesfinales_copy.php"; ?>
    </td>

</tr>
</table>



</body>
<br>
<footer>
  <?php include "piedDePage.php" ; ?>
</footer>
</html>