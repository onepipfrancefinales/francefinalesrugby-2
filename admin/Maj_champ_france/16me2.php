<html>
  <head>
<title>modification de donn�es en PHP :: partie2</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name=viewport content="width=device-width, initial-scale=1">
</head>
<body>
<p> 
  <?php $niv=$_GET['niv']; ?>
  <?php $id=$_POST['id']; ?>
 <?php echo $id; ?>-
<?php echo $niv; ?>-

<?php $annee=$_GET['annee']; 
echo $annee;
?>

<?php// $annee=2017; ?>
<?php $annee2=($annee.''."_2"); ?> 


  <?php
require ("../../phases_finales/fonctions_phases_finales.php");
?>
</p>

<form name="insertion" action="<?php echo $niv ;?>3.php?annee=<?php echo $annee; ?>&niv=<?php echo $niv; ?>" method="POST">
  <b><font size="4"> 
  <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "Lavelan1969&"); 
mysql_select_db("onepip-france-db1"); 
?>
  </font></b> <b><font size="4"> 
  <?php
  
 
  $requete = mysql_query( "SELECT id ,A1601, A1602, A1603, A1604 ,A1605, A1606, A1607, A1608, A1609, A1610, A1611, A1612, A1613, A1614, A1615, A1616,
  									  A1617, A1618, A1619, A1620 ,A1621, A1622, A1623, A1624, A1625, A1626, A1627, A1628, A1629, A1630, A1631, A1632 
									  FROM bdpf$annee2 WHERE  id = ".$id ) ;
 

  if( $result = mysql_fetch_object( $requete ) )
  {
  ?>
  <?php
 }
mysql_close(); // D�connexion de MySQL
?>
  </font></b> 
  <input type="hidden" name="id" value="<?php echo($id) ;?>">
  <table border="0" cellspacing="0" cellpadding="10" width="100%">
    <tr align="center"> 
      <td colspan="4"> </td>
    </tr>
    <tr align="center" bgcolor="#FF0000"> 
      <td colspan="4" height="32"><b><font size="4" face="Arial, Helvetica, sans-serif">16me 
        de Finale 
        <?php echo $division; ?>
        ( 
        <?php echo $id; ?>
        ) 
        <?php echo $annee; ?>
        </font></b></td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td rowspan="2"><font face="Arial, Helvetica, sans-serif">1</font></td>
      <td width="223"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1601; ?>
        </font></td>
      <td width="6"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="240"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1602; ?>
        </font></td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="223"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A1601" value="<?php echo($result->A1601) ;?>" size="3">
        </font></td>
      <td width="6"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="240"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A1602" value="<?php echo($result->A1602) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center"> 
      <td rowspan="2"><font face="Arial, Helvetica, sans-serif">2</font></td>
      <td width="223"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1603; ?>
        </font></td>
      <td width="6"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="240"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1604; ?>
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="223"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A1603" value="<?php echo($result->A1603) ;?>" size="3">
        </font></td>
      <td width="6"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="240"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A1604" value="<?php echo($result->A1604) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td rowspan="2"><font face="Arial, Helvetica, sans-serif">3</font></td>
      <td width="223"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1605; ?>
        </font></td>
      <td width="6"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="240"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1606; ?>
        </font></td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="223"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A1605" value="<?php echo($result->A1605) ;?>" size="3">
        </font></td>
      <td width="6"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="240"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A1606" value="<?php echo($result->A1606) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center"> 
      <td rowspan="2"><font face="Arial, Helvetica, sans-serif">4</font></td>
      <td width="223"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1607; ?>
        </font></td>
      <td width="6"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="200"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1608; ?>
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="200"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A1607" value="<?php echo($result->A1607) ;?>" size="3">
        </font></td>
      <td width="6"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="240"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A1608" value="<?php echo($result->A1608) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td rowspan="2"><font face="Arial, Helvetica, sans-serif">5</font></td>
      <td width="223"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1609; ?>
        </font></td>
      <td width="6"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="240"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1610; ?>
        </font></td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="223"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A1609" value="<?php echo($result->A1609) ;?>" size="3">
        </font></td>
      <td width="6"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="240"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A1610" value="<?php echo($result->A1610) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center"> 
      <td rowspan="2"><font face="Arial, Helvetica, sans-serif">6</font></td>
      <td width="223"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1611; ?>
        </font></td>
      <td width="6"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="240"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1612; ?>
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="223"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A1611" value="<?php echo($result->A1611) ;?>" size="3">
        </font></td>
      <td width="6"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="240"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A1612" value="<?php echo($result->A1612) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td rowspan="2"><font face="Arial, Helvetica, sans-serif">7</font></td>
      <td width="223"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1613; ?>
        </font></td>
      <td width="6"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="240"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1614; ?>
        </font></td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="223"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A1613" value="<?php echo($result->A1613) ;?>" size="3">
        </font></td>
      <td width="6"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="240"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A1614" value="<?php echo($result->A1614) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center"> 
      <td rowspan="2"><font face="Arial, Helvetica, sans-serif">8</font></td>
      <td width="223"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1615; ?>
        </font></td>
      <td width="6"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="240"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1616; ?>
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="223"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A1615" value="<?php echo($result->A1615) ;?>" size="3">
        </font></td>
      <td width="6"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="240"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A1616" value="<?php echo($result->A1616) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td rowspan="2"><font face="Arial, Helvetica, sans-serif">9</font></td>
      <td width="223"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1617; ?>
        </font></td>
      <td width="6"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="240"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1618; ?>
        </font></td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="223"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A1617" value="<?php echo($result->A1617) ;?>" size="3">
        </font></td>
      <td width="6"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="240"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A1618" value="<?php echo($result->A1618) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center"> 
      <td rowspan="2"><font face="Arial, Helvetica, sans-serif">10</font></td>
      <td width="223"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1619; ?>
        </font></td>
      <td width="6"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="240"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1620; ?>
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="223"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A1619" value="<?php echo($result->A1619) ;?>" size="3">
        </font></td>
      <td width="6"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="240"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A1620" value="<?php echo($result->A1620) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td rowspan="2"><font face="Arial, Helvetica, sans-serif">11</font></td>
      <td width="223"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1621; ?>
        </font></td>
      <td width="6"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="240"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1622; ?>
        </font></td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="223"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A1621" value="<?php echo($result->A1621) ;?>" size="3">
        </font></td>
      <td width="6"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="240"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A1622" value="<?php echo($result->A1622) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center"> 
      <td rowspan="2"><font face="Arial, Helvetica, sans-serif">12</font></td>
      <td width="223"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1623; ?>
        </font></td>
      <td width="6"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="240"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1624; ?>
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="223"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A1623" value="<?php echo($result->A1623) ;?>" size="3">
        </font></td>
      <td width="6"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="240"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A1624" value="<?php echo($result->A1624) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td rowspan="2"><font face="Arial, Helvetica, sans-serif">13</font></td>
      <td width="223"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1625; ?>
        </font></td>
      <td width="6"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="240"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1626; ?>
        </font></td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="223"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A1625" value="<?php echo($result->A1625) ;?>" size="3">
        </font></td>
      <td width="6"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="240"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A1626" value="<?php echo($result->A1626) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center"> 
      <td rowspan="2"><font face="Arial, Helvetica, sans-serif">14</font></td>
      <td width="223"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1627; ?>
        </font></td>
      <td width="6"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="240"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1628; ?>
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="223"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A1627" value="<?php echo($result->A1627) ;?>" size="3">
        </font></td>
      <td width="6"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="240"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A1628" value="<?php echo($result->A1628) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td rowspan="2"><font face="Arial, Helvetica, sans-serif">15</font></td>
      <td width="223" valign="bottom"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1629; ?>
        </font></td>
      <td width="6" valign="bottom"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="240" valign="bottom"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1630; ?>
        </font></td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="223"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A1629" value="<?php echo($result->A1629) ;?>" size="3">
        </font></td>
      <td width="6"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="240"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A1630" value="<?php echo($result->A1630) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center"> 
      <td rowspan="2"><font face="Arial, Helvetica, sans-serif">16</font></td>
      <td width="223"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1631; ?>
        </font></td>
      <td width="6"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="240"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1632; ?>
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="223"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A1631" value="<?php echo($result->A1631) ;?>" size="3">
        </font></td>
      <td width="6"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="240"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A1632" value="<?php echo($result->A1632) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="16">&nbsp;</td>
      <td width="223">&nbsp;</td>
      <td width="6">&nbsp;</td>
      <td width="240">&nbsp;</td>
    </tr>
    <tr align="center" valign="top" bgcolor="#FF0000"> 
      <td colspan="4"> 
        <input type="submit" value="modifier" name="submit">
      </td>
    </tr>
    <tr align="center" valign="top" bgcolor="#00FFFF"> 
      <td colspan="4"><a href="http://francefinalesrugby.franceserv.com/admin/sadmin2.php" target="_top"><b><font face="Arial, Helvetica, sans-serif">Retour 
        &agrave; l'accueil</font></b></a></td>
    </tr>
  </table>
</form>

<p>&nbsp;</p>
