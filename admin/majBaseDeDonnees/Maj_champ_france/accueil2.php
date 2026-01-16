<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name=viewport content="width=device-width, initial-scale=1">
</head>





<body bgcolor="#FFFFFF" text="#000000">
<p> 
  <?php $niv=$_GET['niv']; ?>
  <?php $id=$_POST['id']; ?>
  <?php $annee=$_GET['annee']; ?>
  <?php echo $annee; ?>
  <br />
  <font size="3" face="Arial, Helvetica, sans-serif"> <b> 
  <?php echo $id; ?>
  Saisie des r�sultats des <br />
  <?php echo $niv; ?>
  de Finale</b></font></p>
<p><b><font face="Arial, Helvetica, sans-serif" size="3"><a href="accueilsaisiescore.php?annee=<?php $annee; ?>">Changer 
  de niveaux</a><br>
  </font></b><font face="Arial, Helvetica, sans-serif" size="2">(32me - 16me - 
  8me</font> -autres)</p>
<p><b><font face="Arial, Helvetica, sans-serif" size="5" color="#FF0000">Choix 
  d'une DIVISION</font></b></p>
<php echo $val2;> 
<form action="http://francefinalesrugby.franceserv.com/admin/Maj_champ_france/<?php echo $niv; ?>2.php?niv=<?php echo $niv; ?>&annee=<?php echo $annee; ?>" method="POST">
  <p>&nbsp;</p>
  <p><font face="Arial, Helvetica, sans-serif">Division </font>
<input type="text" name="id" maxlength="6" />
  </p>
  <p>
    <input type="submit" value="Valider" name="submit322" />
  </p>
        
  </form>
<table width="340" border="0">
  <tr> 
    <td colspan="2"> 
      <div align="center"><b><font size="3" face="Arial, Helvetica, sans-serif">Les 
        Divisions</font></b></div>
    </td>
  </tr>
  <tr> 
    <td width="160" bordercolor="#CCCCCC" bgcolor="#FFFFFF"><font face="Arial, Helvetica, sans-serif">110 
      - Top14</font></td>
    <td width="170"> 
      <div align="left"></div>
    </td>
  </tr>
  <tr> 
    <td width="160" bordercolor="#CCCCCC" bgcolor="#FFFFFF"><font face="Arial, Helvetica, sans-serif">120 
      - Pro D2</font></td>
    <td width="170">&nbsp;</td>
  </tr>
  <tr> 
    <td width="160"><font face="Arial, Helvetica, sans-serif">130 - F&eacute;d&eacute;rale 
      1</font></td>
    <td width="170"><font face="Arial, Helvetica, sans-serif">170 - Honneur </font></td>
  </tr>
  <tr> 
    <td width="160"><font face="Arial, Helvetica, sans-serif">140 - F&eacute;d&eacute;rale 
      1 JP</font></td>
    <td width="170"> 
      <div align="left"><font face="Arial, Helvetica, sans-serif">180 - promotion 
        </font></div>
    </td>
  </tr>
  <tr> 
    <td width="160"><font face="Arial, Helvetica, sans-serif">150 - F&eacute;d&eacute;rale 
      2 </font></td>
    <td width="170"> 
      <div align="left"><font face="Arial, Helvetica, sans-serif">190 - 1re S&eacute;rie</font></div>
    </td>
  </tr>
  <tr> 
    <td width="160"><font face="Arial, Helvetica, sans-serif">160 - F&eacute;d&eacute;rale 
      3 </font></td>
    <td width="170"> 
      <div align="left"><font face="Arial, Helvetica, sans-serif">200 - 2me S&eacute;rie</font></div>
    </td>
  </tr>
  <tr> 
    <td width="160"><font face="Arial, Helvetica, sans-serif"></font></td>
    <td width="170"> 
      <div align="left"><font face="Arial, Helvetica, sans-serif">210- 3me S&eacute;rie</font></div>
    </td>
  </tr>
  <tr> 
    <td width="160"><font face="Arial, Helvetica, sans-serif">230</font></td>
    <td width="170"> 
      <div align="left"><font face="Arial, Helvetica, sans-serif">220 - 4me S&eacute;rie</font></div>
    </td>
  </tr>
  <tr> 
    <td width="160"><font face="Arial, Helvetica, sans-serif">240- Nationale B</font></td>
    <td width="170"> 
      <div align="left"></div>
    </td>
  </tr>
  <tr> 
    <td width="160"><font face="Arial, Helvetica, sans-serif">250 - F&eacute;d&eacute;rale 
      B </font></td>
    <td width="170"> 
      <div align="left"><font face="Arial, Helvetica, sans-serif">320 - B&eacute;lascain</font></div>
    </td>
  </tr>
  <tr> 
    <td width="160"><font face="Arial, Helvetica, sans-serif">260 - Excellence 
      B </font></td>
    <td width="170"> 
      <div align="left"><font face="Arial, Helvetica, sans-serif">325 - Crabos</font></div>
    </td>
  </tr>
  <tr> 
    <td width="160"><font face="Arial, Helvetica, sans-serif">270 - R&eacute;serve</font></td>
    <td width="170"> 
      <div align="left"><font face="Arial, Helvetica, sans-serif">330 - Balandrade</font></div>
    </td>
  </tr>
  <tr> 
    <td width="160">&nbsp;</td>
    <td width="170"><font face="Arial, Helvetica, sans-serif">340 - Phliponeau</font></td>
  </tr>
  <tr> 
    <td width="160"><font face="Arial, Helvetica, sans-serif">280 - Elite 1 - 
      Top8</font></td>
    <td width="170"><font face="Arial, Helvetica, sans-serif">360 - Alamercery</font></td>
  </tr>
  <tr> 
    <td width="160"><font face="Arial, Helvetica, sans-serif">285 - Elite 2</font></td>
    <td width="170"><font face="Arial, Helvetica, sans-serif">365 - Gaudermen</font></td>
  </tr>
  <tr> 
    <td width="160"><font face="Arial, Helvetica, sans-serif">290</font><font face="Arial, Helvetica, sans-serif"> 
      - F&eacute;d&eacute;rale &agrave; XV</font></td>
    <td width="170"><font face="Arial, Helvetica, sans-serif">370 - Teulière</font></td>
  </tr>
  <tr> 
    <td width="160">&nbsp;</td>
    <td width="170">&nbsp;</td>
  </tr>
  <tr> 
    <td width="160">&nbsp;</td>
    <td width="170">&nbsp;</td>
  </tr>
  <tr> 
    <td width="160"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif">990-Barrages 
        H-PH-1</font></div>
    </td>
    <td width="170">&nbsp;</td>
  </tr>
  <tr> 
    <td width="160"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif">995-Barrages 
        2-3-4</font></div>
    </td>
    <td width="170">&nbsp;</td>
  </tr>
  <tr> 
    <td width="160">&nbsp;</td>
    <td width="170">&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
