<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<meta name=viewport content="width=device-width, initial-scale=1">

</head>

<body bgcolor="#FFFFFF" text="#000000">
<?php $annee=$_POST['annee']; ?>
<table width="463" border="0">
  <tr> 
    <td height="12" colspan="3"> 
      <div align="center"> 
        <?php
include ("choixSaison.php");
?>
      </div>
    </td>
    <td height="12" width="80" bgcolor="#000000"> 
      <div align="center"><font size="5"><b><font size="6" color="#FFFFFF" face="Arial, Helvetica, sans-serif">1</font></b></font></div>
    </td>
  </tr>
  <tr> 
    <td colspan="4" height="9" bgcolor="#000000"><font size="1">11</font></td>
  </tr>
  <tr> 
    <td colspan="4"> 
      <div align="center"><b><font face="Arial, Helvetica, sans-serif" size="5">Mise 
        a jour phase finales territoriales<font color="#FF0000"> <font color="#000000">:</font><br>
        <?php
echo $annee;
?>
        </font></font></b></div>
    </td>
  </tr>
  <tr> 
    <td width="36" bgcolor="#000000"> 
      <div align="center"><font size="6" color="#FFFFFF"><b><font face="Arial, Helvetica, sans-serif">2</font></b></font></div>
    </td>
    <td width="204"> 
      <div align="right"><b><font size="4" color="#FF0000">s&eacute;lectionner 
        une </font></b></div>
    </td>
    <td colspan="2"><b><font size="4" color="#FF0000"> saisie</font></b></td>
  </tr>
  <tr> 
    <td colspan="2" height="48"> 
      <div align="center"><font size="5"><b>Saisie des r&eacute;sulats</b></font></div>
    </td>
    <td colspan="2" height="48"> 
      <div align="center"><font size="5"><b>Saisie des clubs</b></font></div>
    </td>
  </tr>
  <tr> 
    <td bgcolor="#FF0000" colspan="2"> 
      <div align="center"><font color="#FFFFFF"><b><font size="5" face="Arial, Helvetica, sans-serif">Midi 
        Pyr&eacute;n&eacute;es</font></b></font></div>
    </td>
    <td bgcolor="#FF0000" colspan="2"> 
      <div align="center"><font size="5" face="Arial, Helvetica, sans-serif" color="#FFFFFF"><b>uniquement</b></font></div>
    </td>
  </tr>
  <tr> 
    <td colspan="2"> 
      <div align="center"><font size="4"><a href="MajPhaseFinaleTerr55.php?type=55&annee=<?php echo $annee; ?>">Quarts 
        AR</a></font></div>
    </td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr> 
    <td colspan="2"> 
      <div align="center"><font size="4"><a href="MajPhaseFinaleTerr66.php?type=66&annee=<?php echo $annee; ?>">DemiAR</a></font></div>
    </td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr> 
    <td colspan="2"> 
      <div align="center"><font size="4"><a href="MajPhaseFinaleTerr4.php?type=4&annee=<?php echo $annee; ?>">Barrages 
        (4)</a></font></div>
    </td>
    <td colspan="2"> 
      <div align="center"></div>
    </td>
  </tr>
  <tr> 
    <td colspan="2"> 
      <div align="center"><font size="4"><a href="MajPhaseFinaleTerr5.php?type=5&annee=<?php echo $annee; ?>">Quarts 
        (5)</a></font></div>
    </td>
    <td colspan="2"> 
      <div align="center"><a href="SaisieEquipePhaseFinaleTerrMPY.php?var=mpy&type=&annee=<?php echo $annee; ?>"><font size="4">SaisieMPY</font></a></div>
    </td>
  </tr>
  <tr> 
    <td colspan="2"> 
      <div align="center"><font size="4"><a href="MajPhaseFinaleTerr6.php?type=6&annee=<?php echo $annee; ?>">Demi 
        (6)</a></font></div>
    </td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr> 
    <td colspan="2"> 
      <div align="center"><font size="4"><a href="MajPhaseFinaleTerr7.php?type=7&annee=<?php echo $annee; ?>">Finale 
        (7)</a></font></div>
    </td>
    <td colspan="2">&nbsp;</td>
  </tr>
</table>
<p><a href="../admin/mdp.php">Retour</a></p>
	</body>
</html>
