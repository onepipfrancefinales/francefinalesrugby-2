<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name=viewport content="width=device-width, initial-scale=1">
</head>

<?php
//$annee=2019;
if (isset ($_GET['comite'])) $comite = $_GET['comite']; else $comite='-';
if (isset ($_GET['codeLigue'])) $codeLigue = $_GET['codeLigue']; else $codeLigue='-';
if (isset ($_GET['division'])) $division = $_GET['division']; else $division='-';
if (isset ($_GET['annee'])) $annee = $_GET['annee']; else $annee='-';
if (isset ($_GET['type'])) $type = $_GET['type']; else $type=1;
echo $division;
$page="saisieLieux";
?>

<br>
<table width="352">
  <tr bgcolor="#FFFFFF">
  <td colspan="2"><div align="center"><font face="Arial, Helvetica, sans-serif" color="#FF0000"><b><font size="4">Saisie des dates</font></b></font></div></td>
  </tr>
  <tr> 
    <td bgcolor="#000000" width="37"><div align="center"><font size="6"><b><font color="#FFFFFF" face="Arial, Helvetica, sans-serif">3</font></b></font></div></td>
    <td width="303" bgcolor="#006699"><?php include ("../choixComite.php");?></td>
  </tr>
  <tr> 
    <td bgcolor="#000000" width="37"><div align="center"><font size="6"><b><font color="#FFFFFF" face="Arial, Helvetica, sans-serif">4</font></b></font></div></td>
    <td width="303" bgcolor="#006699"><?php include ("../choixDivision.php");?></td>
  </tr>
  <tr> 
    <td bgcolor="#000000" width="37"><div align="center"><font size="6"><b><font color="#FFFFFF" face="Arial, Helvetica, sans-serif">5</font></b></font></div></td>
    <td width="303" bgcolor="#006699"><?php include ("../choixType.php");?></td>
  </tr>
</table>
<table width="354" border="0" height="66">
  <tr> 
    <td colspan="2" valign="top" height="11" bgcolor="#006699">&nbsp;</td>
  </tr>
  <tr> 
    <td valign="top" height="22" width="26%"><div align="center"> </div></td>
    <td width="74%" valign="top" height="-4" bgcolor="#FF9933"><div align="left"> </div></td>
  </tr>
  <tr> 
    <td valign="top" height="7" width="26%"><div align="center"><font face="Arial, Helvetica, sans-serif">Ann&eacute;e</font></div></td>
    <td width="74%" valign="top" height="7" bgcolor="#000000"><div align="center"><b><font size="5" color="#FFFFFF"><?php echo $annee; ?></font></b></div></td>
  </tr>
  <tr> 
    <td valign="top" height="10" width="26%"><div align="center"><font face="Arial, Helvetica, sans-serif">Comit&eacute;</font></div></td>
    <td width="74%" valign="top" height="10" bgcolor="#FF9933"><div align="center"><?php echo $comite.' - '; echo $codeLigue?></div></td>
  </tr>
  <tr> 
    <td valign="top" height="13" width="26%"><div align="center"><font face="Arial, Helvetica, sans-serif">Division</font></div></td>
    <td width="74%" valign="top" height="13" bgcolor="#FF9933"><div align="center"><?php echo $division;?></div></td>
  </tr>
  <tr> 
    <td valign="top" height="13" width="26%"><div align="center"><font face="Arial, Helvetica, sans-serif">Type</font></div></td>
    <td width="74%" valign="top" height="13" bgcolor="#FF9933"><div align="center"><?php echo $type; ?></div></td>
  </tr>
  <tr> 
    <td valign="top" height="13" colspan="2" bgcolor="#000000">&nbsp;</td>
  </tr>
  <tr> 
    <td valign="top" height="54" colspan="2"> 
      <div align="center"><b><font face="Arial, Helvetica, sans-serif"><br>
        **Opposition inconnue:**</font></b><font face="Arial, Helvetica, sans-serif"><br>
        Affichage '-' saisir '99999'</font><br>
      </div>
    </td>
  </tr>
  <tr bgcolor="#000000"> 
    <td valign="top" height="13" colspan="2">&nbsp;</td>
  </tr>
</table>
<p>&nbsp;<br>

<?php require 'dateLieux.php'; ?>

</body>	
</html>
