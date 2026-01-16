<html>

<head>
  <title>Untitled Document</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="stylesheet" type="text/css" href="../../ligne1.css">
  <meta name=viewport content="width=device-width, initial-scale=1">
</head>

<?php
$page = "saisieScores";
if (isset($_GET['comite'])) $comite = $_GET['comite'];
else $comite = '-';
if (isset($_GET['codeLigue'])) $codeLigue = $_GET['codeLigue'];
else $codeLigue = '-';
if (isset($_GET['division'])) $division = $_GET['division'];
else $division = '-';
if (isset($_GET['type'])) $type = $_GET['type'];
else $type = '-';

$page = "saisieScores"; ?>

<?php if (isset($_GET['annee'])) $annee = $_GET['annee']; ?>

<br>
<table width="62%" border="0" height="658">
  <tr bgcolor="#FFFFFF">
    <td colspan="2" valign="top" height="18" class="center styleArial size4 bold center colorRed">Saisie des scores </td>
  </tr>
  <tr class="backgroundBlue">
  <td width="17%" valign="top" height="5" class="backgroundWhite center colorWhite size6 styleArial bold"> 3 </td>
    <td width="83%" valign="middle" height="18"><?php include("../choixComite.php"); ?></td>
  </tr>
  <tr class="backgroundBlue">
    <td width="17%" valign="top" height="5" class="backgroundWhite center colorWhite size6 styleArial bold"> 4 </td>
    <td width="83%" valign="middle" height="5"><?php include("../choixDivision.php"); ?></td>
  </tr>
  <tr class="backgroundBlue">
  <td width="17%" valign="top" height="5" class="backgroundWhite center colorWhite size6 styleArial bold"> 5 </td>
    <td valign="middle" height="11" width="83%"><b>
        <font face="Arial, Helvetica, sans-serif" color="#FFFFFF"><?php include("../choixType.php"); ?></font>
      </b></td>
  </tr>
  <tr>
    <td colspan="2" valign="top" height="20" class="backgroundBlue"> </td>
  </tr>
  <tr>
    <td valign="top" height="18" width="17%" vlass="center">Base</td>
    <td width="83%" valign="top" height="18" bgcolor="#0099FF"></td>
  </tr>
  <tr>
    <td valign="top" height="25" width="17%" class="center">Année</td>
    <td width="83%" valign="top" height="25" bgcolor="#000000" align="center"><b>
        <font color="#FF0000" size="5" face="Arial, Helvetica, sans-serif"><?php echo $annee; ?></font>
      </b></td>
  </tr>
  <tr>
    <td valign="top" height="21" width="17%" class="center">Comité</td>
    <td width="83%" valign="top" height="21" bgcolor="#0099FF" align="center"><?php echo $comite; ?></td>
  </tr>
  <tr>
    <td valign="top" height="13" width="17%" class="center">
      Division
    </td>
    <td width="83%" valign="top" height="13" bgcolor="#0099FF" align="center"><?php echo $division; ?></td>
  </tr>
  <tr>
    <td valign="top" height="13" width="17%" class="center">Type</td>
    <td width="83%" valign="top" height="13" class="center" bgcolor="#0099FF"> <?php echo $type; ?> </td>
  </tr>
  <tr>
    <td valign="top" height="13" colspan="2" bgcolor="#000000"></td>
  </tr>
  <tr>
    <td valign="top" height="252" colspan="2">
      <div align="center">
        <p class="styleArial">
            <span class="bold">**Qualification d'officeeee**</span><br>
          
          Affichage 'Q', saisir '999'<br>
            Affichage '-' , saisir '333'<br>
           Affichage '-' , saisir '222'<br>
      
        </p>
        <p class= " styleArial">
            <span class="bold">**Tir aux but:**</span><br>
          
          Affichage 'Tab',
            saisir '555'   </p>
        <p class= " styleArial">
        <span class="bold">  **Disqualification** </span><br>
            
        
        Affichage 'DQ,'
            saisir '666'
        </p>
        <p class="styleArial bold ">
          <span class="bold">**Forfait *</span>*<br>
            affichage 'F', saisir '777'<br>
            affichage '25', saisir '888'
        </p>
      </div>
    </td>
  </tr>
  <tr bgcolor="#000000">
    <td valign="top" height="13" colspan="2"></td>
  </tr>
</table>
<p>
  <?php
  $bdcomiteClub = "php" . $comite . "_clubs";
  echo $bdcomiteClub;
  echo "<br />";
  echo $type;
  echo "<br />";
  //require ("../../fonctionspfterrESDL2019.php");  


  if ($type == 1)
    require("finale.php");
  // demi
  elseif ($type == 2)
    require("demi.php");
  elseif ($type == 3)
    require("demiAR.php");
  // Quarts
  elseif ($type == 14)
    require("quarts.php");
  elseif ($type == 15)
    require("quartsAR.php");
    elseif ($type == 20)
    require("quartsARDemi.php");
  // huitième
  elseif ($type == 13)
    require("quarts8barrages.php");
   elseif ($type == 19)
    require("8meAR.php");
  
  elseif ($type == 18)
    require("8me.php");
  elseif ($type == 17)
    require("8meBarrages.php");
  //seizieme
  elseif ($type == 16)
    require("16me.php");
  else
    echo "il faut selectionner un type  de finale";
  ?>
  <br>
  <a href="../../majFinalesTerr/accueilMAJ.php">Retour accueil</a>
  </body>

</html>