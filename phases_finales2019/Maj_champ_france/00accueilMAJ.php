
<?php if (isset ($_POST['annee'])) $annee = $_POST['annee']; else $annee='-'; ?>

<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<meta name=viewport content="width=device-width, initial-scale=1">

</head>

<body bgcolor="#FFFFFF" text="#000000">
<table width="463" border="0">
  <tr> 
    <td height="25" colspan="4"> 
      <div align="center"><b><font face="Arial, Helvetica, sans-serif" size="5"><font color="#FF0000"> 
        </font>Mise &agrave; jour Champ de France<font color="#FF0000"> </font></font></b></div>
    </td>
  </tr>
  <tr> 
    <td height="25" colspan="4"> 
      <hr />
      <hr />
    </td>
  </tr>
  <tr> 
    <td height="25" bgcolor="#000000" width="40"> 
      <div align="center"><font size="5"><b><font size="6" color="#FFFFFF" face="Arial, Helvetica, sans-serif">1</font></b></font> 
      </div>
    </td>
    <td height="25" colspan="3" valign="middle">
<div align="center"></div>
      <div align="center"><b><font face="Arial, Helvetica, sans-serif" size="5"><font color="#FF0000"> 
<?php
// $annee=$_POST['annee']; 
//******** changement de date ********
$annee=2019;
echo $annee; ?>
        </font></font></b> </div>
    </td>
  </tr>
  <tr> 
    <td colspan="4" height="9"> 
      <hr />
    </td>
  </tr>
  <tr> 
    <td colspan="4"> 
      <div align="center"><b><font face="Arial, Helvetica, sans-serif" size="5"></font></b></div>
    </td>
  </tr>
  <tr> 
    <td width="40" bgcolor="#000000"> 
      <div align="center"><font size="6" color="#FFFFFF"><b><font face="Arial, Helvetica, sans-serif">2</font></b></font></div>
    </td>
    <td width="179"> 
      <div align="right"><b><font size="4" color="#FF0000">s&eacute;lectionner 
        </font></b></div>
    </td>
    <td colspan="2" width="230"><b><font size="4" color="#FF0000"> </font></b></td>
  </tr>
  <tr> 
    <td colspan="2"> 
      <div align="center"><font size="5"><b>Saisie des r&eacute;sulats</b></font></div>
    </td>
    <td colspan="2" width="230"> 
      <div align="center"><font size="5"><b>Saisie des clubs</b></font></div>
    </td>
  </tr>
  <tr> 
    <td colspan="2"> 
      <div align="center"></div>
    </td>
    <td colspan="2" width="230">&nbsp;</td>
  </tr>
  <tr> 
    <td colspan="2"> 
      <div align="center"><font size="4"><a href="majScores/accueilsaisiescore.php?annee=2019">Finale</a></font></div>
    </td>
    <td colspan="2" width="230"> 
      <div align="center"><a href="majClubs/saisieEquipe.php?annee=2019&division=170"><font size="4">Saisie</font></a></div>
    </td>
  </tr>
  <tr> 
    <td height="12" colspan="2">&nbsp;</td>
    <td height="12" colspan="2" width="230">&nbsp;</td>
  </tr>
  <tr> 
    <td colspan="4">&nbsp;</td>
  </tr>
  <tr> 
    <td bgcolor="#0000FF" colspan="2">&nbsp;</td>
    <td bgcolor="#0000FF" colspan="2" width="230">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4">&nbsp;</td>
  </tr>
  <tr> 
    <td colspan="4">
      <div align="center"><a href="../admin/mdp.php">Retour</a></div>
    </td>
  </tr>
</table>
<p>&nbsp;</p>
	</body>
</html>
