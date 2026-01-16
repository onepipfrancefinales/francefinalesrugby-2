<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name=viewport content="width=device-width, initial-scale=1">

</head>

<?php
$page="saisieScores";
if (isset ($_GET['comite'])) $comite = $_GET['comite']; else $comite='-';
if (isset ($_GET['codeLigue'])) $codeLigue = $_GET['codeLigue']; else $codeLigue='-';
if (isset ($_GET['division'])) $division = $_GET['division']; else $division='-';
if (isset ($_GET['type'])) $type = $_GET['type']; else $type='-';
if (isset ($_GET['barrage'])) $barrage = $_GET['barrage']; else $barrage='-';
 $page="saisieScores"; ?>

<?php if (isset($_GET['annee'])) $annee=$_GET['annee']; ?>

<br>
<table width="62%" border="0" height="658">
  <tr bgcolor="#FFFFFF"> 
    <td colspan="2" valign="top" height="18"><div align="center"><font face="Arial, Helvetica, sans-serif" color="#FF0000" size="4"><b>Saisie des scores</b></font></div></td>
  </tr>
  <tr bgcolor="#006699"> 
    <td width="17%" valign="top" height="18" bgcolor="#000000" align="center"><font color="#FFFFFF" size="6" face="Arial, Helvetica, sans-serif"><b>3</b></font></td>
    <td width="83%" valign="middle" height="18"><?php include ("../choixComite.php");?></td>
  </tr>
  <tr bgcolor="#006699"> 
    <td width="17%" valign="top" height="5" bgcolor="#000000" align="center"><font color="#FFFFFF" size="6" face="Arial, Helvetica, sans-serif"><b>4</b></font></td>
    <td width="83%" valign="middle" height="5"><?php include ("../choixDivision.php");?></td>
  </tr>
  <tr bgcolor="#006699"> 
    <td valign="top" height="11" width="17%" bgcolor="#000000"><div align="center"><font color="#FFFFFF" size="6" face="Arial, Helvetica, sans-serif"><b>5</b></font></div></td>
    <td valign="middle" height="11" width="83%"><b><font face="Arial, Helvetica, sans-serif" color="#FFFFFF"><?php include ("../choixType.php");?></font></b></td>
  </tr>
  <tr bgcolor="#006699"> 
    <td valign="top" height="11" width="17%" bgcolor="#000000"><div align="center"><font color="#FFFFFF" size="6" face="Arial, Helvetica, sans-serif"><b>5</b></font></div></td>
    <td valign="middle" height="11" width="83%"><b><font face="Arial, Helvetica, sans-serif" color="#FFFFFF"><?php include ("../choixBarrage.php");?></font></b></td>
  </tr>
  <tr> 
    <td colspan="2" valign="top" height="20" bgcolor="#006699"> </td>
  </tr>
  <tr> 
    <td valign="top" height="18" width="17%" align="center">Base</td>
    <td width="83%" valign="top" height="18" bgcolor="#0099FF"></td>
  </tr>
  <tr> 
    <td valign="top" height="25" width="17%" align="center">Année</td>
    <td width="83%" valign="top" height="25" bgcolor="#000000" align="center"><b><font color="#FF0000" size="5" face="Arial, Helvetica, sans-serif"><?php echo $annee; ?></font></b></td>
  </tr>
  <tr> 
    <td valign="top" height="21" width="17%" align="center">Comité</td>
    <td width="83%" valign="top" height="21" bgcolor="#0099FF" align="center"><?php echo $comite;?></td>
  </tr>
  <tr> 
    <td valign="top" height="13" width="17%"><div align="center">Division</div></td>
    <td width="83%" valign="top" height="13" bgcolor="#0099FF" align="center"><?php echo $division; ?></td>
  </tr>
  <tr> 
    <td valign="top" height="13" width="17%"><div align="center">Type</div></td>
    <td width="83%" valign="top" height="13" bgcolor="#0099FF"><div align="center"><?php echo $type;?></div></td>
  </tr>
  <tr> 
    <td valign="top" height="13" width="17%"><div align="center">Barrage</div></td>
    <td width="83%" valign="top" height="13" bgcolor="#0099FF"><div align="center"><?php echo $barrage;?></div></td>
  </tr>
  <tr> 
    <td valign="top" height="13" colspan="2" bgcolor="#000000"></td>
  </tr>
  <tr> 
    <td valign="top" height="252" colspan="2"> 
      <div align="center"> 
        <p><b><font face="Arial, Helvetica, sans-serif">**Qualification d'office**<br>
          </font></b><font face="Arial, Helvetica, sans-serif">Affichage 'Q', 
          saisir '999'<br>
         
							Affichage '-' , saisir '333'</font><font face="Arial, Helvetica, sans-serif"></font><b><font face="Arial, Helvetica, sans-serif"><br>
          </font></b>		 Affichage '-' , saisir '222'</font><font face="Arial, Helvetica, sans-serif"></font><b><font face="Arial, Helvetica, sans-serif"><br>
          </font></b></p>
        <p><b><font face="Arial, Helvetica, sans-serif">**Tir aux but:**<br>
          </font></b><font face="Arial, Helvetica, sans-serif">Affichage 'Tab', 
          saisir '555'</font></p>
        <p><b><font face="Arial, Helvetica, sans-serif">**Disqualification**<br>
          </font></b><font face="Arial, Helvetica, sans-serif">Affichage 'DQ,' 
          saisir '666'</font></p>
        <p><font face="Arial, Helvetica, sans-serif"><b>**Forfait **<br>
          </b>affichage 'F', saisir '777'<br>
          affichage '25', saisir '888'</font></p>
        </div>
    </td>
  </tr>
  <tr bgcolor="#000000"> 
    <td valign="top" height="13" colspan="2"></td>
  </tr>
</table>
<p>
  <?php 
$bdcomiteClub = "php".$comite."_clubs";
echo $bdcomiteClub; echo "<br />";
echo $type; echo "<br />";
//require ("../../fonctionspfterrESDL2019.php");  

  
if ($type==1)
	require ("finale.php");
elseif ($type==2)
	require ("demi.php");
elseif ($type==3)
	require ("demiAR.php");
elseif ($type==14)
	require("quarts.php");
elseif ( $type==15)
	require ("quartsAR.php");
elseif ($type==13)
	require ("quarts8barrages.php");
elseif ($type==18)
	require ("8me.php");
elseif ($type==17)
	require ("8meBarrages.php");
elseif ($type==16)
	require ("16me.php");
elseif ($type==19)
	require ("8meAR.php");		
else
	echo "il faut selectionner un type  de finale";
?>
<br/ >
<a href="../../majFinalesTerr/accueilMAJ.php">Retour accueil</a>
</body>
</html>
