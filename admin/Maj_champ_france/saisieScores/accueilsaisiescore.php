<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name=viewport content="width=device-width, initial-scale=1">
<script language="JavaScript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>
</head>
<?php
 

$champ=$_GET['champ']; 
$annee=$_GET['annee'];
$type=$_GET['type'];
$AR=$_GET['AR'];


echo $type;


$annee='2018';

$adresse="http://francefinalesrugby.franceserv.com/admin/Maj_champ_france/saisieScores/accueilsaisiescore.php"
?>

<br>
<table width="62%" border="0" height="66">
  <tr bgcolor="#FFFFFF"> 
    <td colspan="2" valign="top" height="18"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif" color="#FF0000" size="4"></font></div>
    </td>
  </tr>
  <tr bgcolor="#006699"> 
    <td width="17%" valign="middle" height="24" bgcolor="#000000"> 
      <div align="center"><b><font color="#FFFFFF" size="3" face="Arial, Helvetica, sans-serif"> 
        Saison</font></b></div>
    </td>
    <td width="83%" valign="middle" height="24"> 
      <div align="center"><font color="#FFFFFF" size="4"><b><font size="5" face="Arial, Helvetica, sans-serif"> 
        <?php echo $annee;?>
        </font></b></font></div>
    </td>
  </tr>
  <tr bgcolor="#006699"> 
    <td width="17%" valign="middle" height="5" bgcolor="#000000"> 
      <div align="center"><b><font color="#FFFFFF" size="3" face="Arial, Helvetica, sans-serif">Divisions</font></b></div>
    </td>
    <td width="83%" valign="middle" height="5"> 
      <div align="center"><br>
        <select name="select2" onChange="MM_jumpMenu('parent',this,0)" size="1">
          <option selected>Choix division</option>
          <option value="<?php echo $adresse;?>?champ=110"><b>Top 14</b></option>
          <option value="<?php echo $adresse;?>?champ=120"><b>Pro D2</b></option>
          <option value="<?php echo $adresse;?>?champ=130"><b>F&eacute;d&eacute;rale 
          1</b></option>
          <option value="<?php echo $adresse;?>?champ=140"><b>F&eacute;d&eacute;rale 
          1 J.Prat</b></option>
          <option value="<?php echo $adresse;?>?champ=150"><b>F&eacute;d&eacute;rale 
          2</b></option>
          <option value="<?php echo $adresse;?>?champ=160"><b>F&eacute;d&eacute;rale 
          3</b></option>
          <option value="<?php echo $adresse;?>?champ=170"><b>Honneur</b></option>
          <option value="<?php echo $adresse;?>?champ=180"><b>Promotion</b></option>
          <option value="<?php echo $adresse;?>?champ=190"><b>1re s&eacute;rie</b></option>
          <option value="<?php echo $adresse;?>?champ=200"><b>2me s&eacute;rie</b></option>
          <option value="<?php echo $adresse;?>?champ=210"><b>3me s&eacute;rie</b></option>
          <option value="<?php echo $adresse;?>?champ=220"><b>4me s&eacute;rie</b></option>
       	  <option value=""><b>----------------</b></option>
		  <option value=""><b>F&eacute;minines</b></option>
	   	  <option value=""><b>----------------</b></option>
	   	  <option value="<?php echo $adresse;?>?champ=280"><b>Elite 1 - Top 8</b></option>
	      <option value="<?php echo $adresse;?>?champ=285"><b>Elite 2</b></option>
	      <option value="<?php echo $adresse;?>?champ=290"><b>F&eacute;d&eacute;rale 1</b></option>
	      <option value="<?php echo $adresse;?>?champ=295"><b>F&eacute;d&eacute;rale 2</b></option>
	  	 <option value=""><b>----------------</b></option>
		<option value=""><b>R&eacute;serves</b></option>
	   	  <option value=""><b>----------------</b></option>
	   	  <option value="<?php echo $adresse;?>?champ=240"><b>Espoir F&eacute;d 1</b></option>
		  <option value="<?php echo $adresse;?>?champ=250"><b>F&eacute;d&eacute;rale B</b></option>
	      <option value="<?php echo $adresse;?>?champ=260"><b>Excellence  B</b></option>
	      <option value="<?php echo $adresse;?>?champ=270"><b>R&eacute;serve</b></option>
	   
	    </select>
        <br>
      </div>
    </td>
  </tr>
  <tr bgcolor="#006699" valign="middle"> 
    <td height="11" width="17%" bgcolor="#000000"> 
      <div align="center"><b><font color="#FFFFFF" size="3" face="Arial, Helvetica, sans-serif">Types</font></b></div>
    </td>
    <td height="11" width="83%" valign="middle"> 
      <div align="center"><b><font face="Arial, Helvetica, sans-serif" color="#FFFFFF"><br>
        <select name="select" onChange="MM_jumpMenu('parent',this,0)" size="1">
          <option selected>Choix phases finales</option>
          <option value="<?php echo $adresse;?>?champ=<?php echo $champ; ?>&annee=<?php echo $annee; ?>&type=32">32me 
          de finale </option>
          <option value="<?php echo $adresse;?>?champ=<?php echo $champ; ?>&annee=<?php echo $annee; ?>&type=16">16me 
          de finale </option>
          <option value="<?php echo $adresse;?>?champ=<?php echo $champ; ?>&annee=<?php echo $annee; ?>&type=8">8me 
          de finale </option>
          <option value="<?php echo $adresse;?>?champ=<?php echo $champ; ?>&annee=<?php echo $annee; ?>&type=4">Quarts 
          de finale </option>
          <option value="<?php echo $adresse;?>?champ=<?php echo $champ; ?>&annee=<?php echo $annee; ?>&type=2">Demi 
          finales </option>
          <option value="<?php echo $adresse;?>?champ=<?php echo $champ; ?>&annee=<?php echo $annee; ?>&type=1">Finale 
          </option>
        </select>
        <br>
        </font></b></div>
    </td>
  </tr>
  <tr> 
    <td valign="top" height="20" bgcolor="#000000">
      <div align="center"><font color="#FFFFFF"><b><font face="Arial, Helvetica, sans-serif"><br>
        Aller / Retour</font></b></font></div>
    </td>
    <td valign="top" height="20" bgcolor="#006699"> <b><font face="Arial, Helvetica, sans-serif" color="#FFFFFF">
      <div align="center"><br>
        <select name="select3" onChange="MM_jumpMenu('parent',this,0)" size="1">
          <option selected>Aller / Retour</option>
          <option value="<?php echo $adresse;?>?champ=<?php echo $champ; ?>&annee=<?php echo $annee; ?>&type=<?php echo $type; ?>&AR=1">Aller simple</option>
          <option value="<?php echo $adresse;?>?champ=<?php echo $champ; ?>&annee=<?php echo $annee; ?>&type=<?php echo $type; ?>&AR=2">Aller Retour</option>
     
        </select>
        <br>
      </div>
      </font></b> </td>
  </tr>
  <tr> 
    <td valign="top" height="25" width="17%"> 
      <div align="center"><b>Ann&eacute;e</b></div>
    </td>
    <td width="83%" valign="top" height="25" bgcolor="#000000"> 
      <div align="center"><font color="#FF0000"><b><font size="5" face="Arial, Helvetica, sans-serif"> 
        <?php echo $annee; ?>
        </font></b></font></div>
    </td>
  </tr>
  <tr> 
    <td valign="top" height="13" width="17%"> 
      <div align="center">Division</div>
    </td>
    <td width="83%" valign="top" height="13" bgcolor="#0099FF"> 
      <div align="center"> 
        <?php echo $champ; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td valign="top" height="13" width="17%">
      <div align="center">Type</div>
    </td>
    <td width="83%" valign="top" height="13" bgcolor="#0099FF"> 
      <div align="center"> 
        <?php echo $type;?>
      </div>
    </td>
  </tr>
  <tr> 
    <td valign="top" height="13" width="17%"> 
      <div align="center"></div>
    </td>
    <td width="83%" valign="top" height="13" bgcolor="#0099FF"> 
      <div align="center"> 
        <?php echo $AR;?>
      </div>
    </td>
  </tr>
</table>
<br>
<p>&nbsp; Qualification d'office (forfait, sanction, autres) Saisir (pts=99 et 
  score=99)pour le qualifier 0 pour l'autre<br>
  <?php 
if ($type==32)
	require ("32me.php");
elseif ($type==16)
	require ("16me.php");
elseif ($type==8)
	require ("8me.php");
elseif ($type==4)
	require ("quarts.php");
elseif ( $type==2)
	require ("demi.php");
elseif ($type==1)
	require ("finale.php");
else
	echo "il faut selectionner un type  de finale";
?>
  
<p>&nbsp;
<p><a href="../saisieClubs/accueilsaisieclub.php">Retour saisie clubs</a>
</body>
</html>
