
<?php if (isset ($_POST['annee'])) $annee = $_POST['annee']; else $annee='-'; ?>

<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link type="text/css" rel="stylesheet" href="../../ligne1.css">
<meta name=viewport content="width=device-width, initial-scale=1">

</head>

<body bgcolor="#FFFFFF" text="#000000">
<table width="463" border="0">
  <tr> 
    <td height="25" colspan="4" class="bold center colorRed styleArial size5 colorBlack"> 
 Mise à jour phase finales territoriales
    
    </td>
  </tr>
  <tr> 
    <td height="25" colspan="4"> 
      <hr />
      <hr />
    </td>
  </tr>
  <tr> 
    <td height="25" width="40" class="size6 center styleArial bold colorWhite backgroundBlack"> 1 </td>
    <td height="25" colspan="3" valign="middle" align="center"><b><font face="Arial, Helvetica, sans-serif" size="5" color="#FF0000"><?php // $annee=$_POST['annee']; 
//******** changement de date ********
$annee=2025;
echo $annee; ?></font></b></td>
  </tr>
  <tr> 
    <td colspan="4" height="9"> <hr /></td>
  </tr>
  <tr> 
    <td colspan="4" align="center"></td>
  </tr>
  <tr> 
    <td width="40" bgcolor="#000000" align="center"><font size="6" color="#FFFFFF"><b><font face="Arial, Helvetica, sans-serif">2</font></b></font></td>
    <td width="179" align="right"><b><font size="4" color="#FF0000">sélectionner </font></b></td>
    <td colspan="2" width="230"></td>
  </tr>
  <tr> 
    <td colspan="4" class="center size5 bold">Saisie format des phases finales</td>
   </tr>
  <tr> 
   <td colspan="4" align="center"><font size="4"><a href="saisieCodeFFR.php?annee=<?php echo $annee; ?>">Saisie</a></font></td>
   </tr>
   <tr> 
    <td height="12" colspan="2"></td>
    <td height="12" colspan="2" width="230"></td>
  </tr>
   <tr>
    <td colspan="2" class="center size5 bold">Saisie des résulats</td>
    <td colspan="2" width="230" class="center size5 bold">Saisie des clubs</td>
  </tr>
  <tr> 
    <td colspan="2" align="center"></td>
    <td colspan="2" width="230"></td>
  </tr>
  <tr> 
    <td colspan="2" align="center"><font size="4"><a href="majScores/saisieScore.php?page=score&annee=<?php echo $annee; ?>">Finale</a></font></td>
    <td colspan="2" width="230" align="center"><a href="majEquipes/saisieEquipe.php?page=saisieEquipes&annee=<?php echo $annee; ?>&type=0"><font size="4">Saisie</font></a></td>
  </tr>
  <tr> 
    <td height="12" colspan="2">&nbsp;</td>
    <td height="12" colspan="2" width="230">&nbsp;</td>
  </tr>
  <tr bgcolor="#99FFFF"> 
    <td colspan="4" align="center"><font size="5"><b>Saisie lieux et dates</b></font></td>
  </tr>
  <tr>
    <td colspan="4" align="center"><a href="majLieux/saisieLieux.php?page=saisieEquipes&annee=<?php echo $annee; ?>&type=0"><font size="4">Saisie</font></a></td>
  </tr>
  <tr> 
    <td colspan="4">&nbsp;</td>
  </tr>
  <tr> 
    <td bgcolor="#FF0000" colspan="2">&nbsp;</td>
    <td bgcolor="#FF0000" colspan="2" width="230">&nbsp;</td>
  </tr>
  <tr> 
    <td colspan="4">&nbsp;</td>
  </tr>
  <tr> 
    <td colspan="4" align="center"><a href="../../admin/majDebutSaison/pageAjouterJournee.php">Retour interface administration</a></td>
  </tr>
    </table>
  </body>
</html>
