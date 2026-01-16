
<?php if (isset ($_GET['annee'])) $annee = $_GET['annee']; else $annee='Saisir une annee dans l\'adresse'; ?>

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
    <td height="25" colspan="4"><hr /><hr /></td>
  </tr>
  <tr> 
    <td height="25" bgcolor="#000000" width="40" align="center"><b><font size="6" color="#FFFFFF" face="Arial, Helvetica, sans-serif">1</font></b></font></td>
    <td height="25" colspan="3" valign="middle" align="center"><b><font face="Arial, Helvetica, sans-serif" size="5" color="#FF0000"><?php echo $annee; ?></font></b></td>
  </tr>
  <tr> 
    <td colspan="4" height="9"><hr /></td>
  </tr>
  <tr> 
    <td colspan="4" align="center"><b><font face="Arial, Helvetica, sans-serif" size="5"></font></b></td>
  </tr>
  <tr> 
    <td width="40" bgcolor="#000000" align="center"><font size="6" color="#FFFFFF"><b><font face="Arial, Helvetica, sans-serif">2</font></b></font></td>
    <td width="179" align="right"><b><font size="4" color="#FF0000"> </font></b></td>
    <td colspan="2" width="230"><b><font size="4" color="#FF0000"> </font></b></td>
  </tr>
 <tr> 
    <td colspan="4" align="center"><b><font size="5">Saisie format du Championnat</font></b></td>
  </tr>
  <tr> 
    <td colspan="4" align="center"><a href="saisieCodeFFR.php?annee=<?php echo $annee;?>"><font size="4">Saisie</font></a></td>
  </tr>
  <tr> 
    <td colspan="2" align="center"></td>
    <td colspan="2" width="230">&nbsp;</td>
  </tr>
 <tr> 
    <td colspan="2" align="center"><font size="5"><b>Saisie des r&eacute;sulats</b></font></td>
    <td colspan="2" width="230" align="center"><font size="5"><b>Saisie des clubs</b></font></td>
  </tr>
  <tr> 
    <td colspan="2" align="center"></td>
    <td colspan="2" width="230">&nbsp;</td>
  </tr>
  <tr> 
    <td colspan="2" align="center"><font size="4"><a href="majScores/accueilsaisiescore.php?annee=<?php echo $annee;?>&page=scores">Finale</a></font></td>
    <td colspan="2" width="230" align="center"><a href="majClubs/saisieEquipe.php?annee=<?php echo $annee;?>&division=110&page=equipes"><font size="4">Saisie</font></a></td>
  </tr>
  <tr> 
    <td height="12" colspan="2">&nbsp;</td>
    <td height="12" colspan="2" width="230">&nbsp;</td>
  </tr>
    <tr>
    <td colspan="4">&nbsp;</td>
  </tr>
  <tr> 
    <td colspan="4" align="center"><b><font size="5">Saisie des dates</font></b></td>
  </tr>
  <tr> 
    <td colspan="4" align="center"><a href="majDates/saisieDate.php?page=dates&annee=<?php echo $annee;?>&division=170"><font size="4">Saisie</font></a></td>
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
    <td colspan="4" align="center"><a href="../../admin/majDebutSaison/pageAjouterJournee.php">Retour page Admin</a></td>
  </tr>
</table>
<p>&nbsp;</p>
	</body>
</html>
