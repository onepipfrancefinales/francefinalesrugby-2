<html>
 <head>
<title>modification de donn�es en PHP :: partie2</title>
<meta name=viewport content="width=device-width, initial-scale=1">
</head>
<body>
<p> 
  <?php $niv=$_GET['niv']; ?>
  <?php $id=150; ?>
  <?php $id2=120; ?>
 
<?php $annee=$_GET['annee']; ?>
<?php $annee=2018; ?>




<?php $annee2 ="bdpf".''.$annee.''."_2";  ?> 
  <?php
//require ("../../phases_finales/fonctions_phases_finales.php");
require ("../../phases_finales/fonctions_phases_finalesAR.php");
?>
</p>

<form name="insertion" action="16me3AR.php?annee=<?php $annee; ?>" method="POST">
  <b><font size="4"> 
  <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "Lavelan1969&"); 
mysql_select_db("onepip-france-db1"); 
?>
  </font></b> <b><font size="4"> 
   <?php 
  $requete2 = mysql_query( "SELECT id ,A3201, A3202, A3203, A3204, A3205, A3206, A3207, A3208,
									   A3209, A3210, A3211, A3212, A3213, A3214, A3215, A3216,
 								   	   A3217, A3218, A3219, A3220, A3221, A3222, A3223, A3224,
 									   A3225, A3226, A3227, A3228, A3229, A3230, A3231, A3232
									  FROM bdpf$annee WHERE  id = ".$id2 ) ;
 

  	if( $result2 = mysql_fetch_object( $requete2 ) )
  	{
 
 }

?>
   
 
 
  <?php 
  $requete = mysql_query( "SELECT id ,A1601, A1602, A1603, A1604 ,A1605, A1606, A1607, A1608, A1609, A1610, A1611, A1612, A1613, A1614, A1615, A1616,
  									  A1617, A1618, A1619, A1620 ,A1621, A1622, A1623, A1624, A1625, A1626, A1627, A1628, A1629, A1630, A1631, A1632 
									  FROM $annee2 WHERE  id = ".$id ) ;
 

  	if( $result = mysql_fetch_object( $requete ) )
  	{
 
 }
mysql_close(); // D�connexion de MySQL
?>
  </font></b> 
<input type="hidden" name2="id2" value2="<?php echo($id2) ;?>">
  <input type="hidden" name="id" value="<?php echo($id) ;?>">
  <table border="0" cellspacing="0" cellpadding="10" width="100%">
    <tr align="center"> 
      <td colspan="4"> </td>
    </tr>
    <tr align="center"> 
      <td colspan="4" height="32" bgcolor="#FF0000"><b><font size="4" face="Arial, Helvetica, sans-serif">16me 
        de Finale 
        <?php echo $division; ?>
        ( 
        <?php echo $id; ?>
        - 
        <?php echo $id2; ?>
        ) 
        <?php echo $annee; ?>
        </font></b></td>
    </tr>
    <tr align="center"> 
      <td width="47" bgcolor="#CCCCCC"><b><font face="Arial, Helvetica, sans-serif">1</font></b></td>
      <td width="171" bgcolor="#CCCCCC"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1601; ?>
        </font></td>
      <td width="5" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="179" bgcolor="#CCCCCC"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1602; ?>
        </font></td>
    </tr>
    <tr align="center"> 
      <td height="20" width="47" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="171" height="20" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif"> 
        GA 
        <input type="text" name="A1601" value="<?php echo($result->A1601) ;?>" size="3">
        -Aller( 
        <?php	echo $A1601; ?>
        ) <br>
        Pts 
        <input type="text" name="A3201" value="<?php echo($result2->A3201) ;?>" size="2">
        </font></td>
      <td width="5" height="20" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="179" height="20" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif"> 
        GA 
        <input type="text" name="A1602" value="<?php echo($result->A1602) ;?>" size="3">
        -Aller( 
        <?php	echo $A1602; ?>
        ) <br>
        Pts 
        <input type="text" name="A3202" value="<?php echo($result2->A3202) ;?>" size="2">
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="47"><b><font face="Arial, Helvetica, sans-serif">2</font></b></td>
      <td width="171"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1603; ?>
        </font></td>
      <td width="5"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="179"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1604; ?>
        </font></td>
    </tr>
    <tr align="center"> 
      <td height="20" width="47"><b>Alle</b></td>
      <td width="171"><font face="Arial, Helvetica, sans-serif"> GA 
        <input type="text" name="A1603" value="<?php echo($result->A1603) ;?>" size="3">
        -Aller( 
        <?php	echo $A1603; ?>
        ) <br>
        Pts 
        <input type="text" name="A3203" value="<?php echo($result2->A3203) ;?>" size="2">
        </font></td>
      <td width="5">&nbsp;</td>
      <td width="179"><font face="Arial, Helvetica, sans-serif"> GA 
        <input type="text" name="A1604" value="<?php echo($result->A1604) ;?>" size="3">
        -Aller( 
        <?php	echo $A1604; ?>
        ) <br>
        Pts 
        <input type="text" name="A3204" value="<?php echo($result2->A3204) ;?>" size="2">
        </font></td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC" width="47"><b><font face="Arial, Helvetica, sans-serif">3</font></b></td>
      <td width="171" bgcolor="#CCCCCC"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1605; ?>
        </font></td>
      <td width="5" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="179" bgcolor="#CCCCCC"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1606; ?>
        </font></td>
    </tr>
    <tr align="center"> 
      <td height="20" width="47" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="171" bgcolor="#CCCCCC"> <font face="Arial, Helvetica, sans-serif"> 
        GA 
        <input type="text" name="A1605" value="<?php echo($result->A1605) ;?>" size="3">
        -Aller( 
        <?php	echo $A1605; ?>
        ) <br>
        Pts 
        <input type="text" name="A3205" value="<?php echo($result2->A3205) ;?>" size="2">
        </font></td>
      <td width="5" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="179" bgcolor="#CCCCCC"> <font face="Arial, Helvetica, sans-serif"> 
        GA 
        <input type="text" name="A1606" value="<?php echo($result->A1606) ;?>" size="3">
        -Aller( 
        <?php	echo $A1606; ?>
        ) <br>
        Pts 
        <input type="text" name="A3206" value="<?php echo($result2->A3206) ;?>" size="2">
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="47"><b><font face="Arial, Helvetica, sans-serif">4</font></b></td>
      <td width="171"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1607; ?>
        </font></td>
      <td width="5"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="179"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1608; ?>
        </font></td>
    </tr>
    <tr align="center"> 
      <td height="20" width="47">&nbsp;</td>
      <td width="171"> <font face="Arial, Helvetica, sans-serif"> GA 
        <input type="text" name="A1607" value="<?php echo($result->A1607) ;?>" size="3">
        -Aller( 
        <?php	echo $A1607; ?>
        ) <br>
        Pts 
        <input type="text" name="A3207" value="<?php echo($result2->A3207) ;?>" size="2">
        </font></td>
      <td width="5"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="179"> <font face="Arial, Helvetica, sans-serif"> GA 
        <input type="text" name="A1608" value="<?php echo($result->A1608) ;?>" size="3">
        -Aller( 
        <?php	echo $A1608; ?>
        ) <br>
        Pts 
        <input type="text" name="A3208" value="<?php echo($result2->A3208) ;?>" size="2">
        </font></td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC" width="47"><b><font face="Arial, Helvetica, sans-serif">5</font></b></td>
      <td width="171" bgcolor="#CCCCCC"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1609; ?>
        </font></td>
      <td width="5" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="179" bgcolor="#CCCCCC"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1610; ?>
        </font></td>
    </tr>
    <tr align="center"> 
      <td height="20" width="47" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="171" bgcolor="#CCCCCC"> <font face="Arial, Helvetica, sans-serif"> 
        GA 
        <input type="text" name="A1609" value="<?php echo($result->A1609) ;?>" size="3">
        -Aller( 
        <?php	echo $A1609; ?>
        ) <br>
        Pts 
        <input type="text" name="A3209" value="<?php echo($result2->A3209) ;?>" size="2">
        </font></td>
      <td width="5" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="179" bgcolor="#CCCCCC"> <font face="Arial, Helvetica, sans-serif"> 
        GA 
        <input type="text" name="A1610" value="<?php echo($result->A1610) ;?>" size="3">
        -Aller( 
        <?php	echo $A1610; ?>
        ) <br>
        Pts 
        <input type="text" name="A3210" value="<?php echo($result2->A3210) ;?>" size="2">
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="47"><b><font face="Arial, Helvetica, sans-serif">6</font></b></td>
      <td width="171"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1611; ?>
        </font></td>
      <td width="5"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="179"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1612; ?>
        </font></td>
    </tr>
    <tr align="center"> 
      <td height="20" width="47">&nbsp;</td>
      <td width="171"> <font face="Arial, Helvetica, sans-serif"> GA 
        <input type="text" name="A1611" value="<?php echo($result->A1611) ;?>" size="3">
        -Aller( 
        <?php	echo $A1611; ?>
        ) <br>
        Pts 
        <input type="text" name="A3211" value="<?php echo($result2->A3211) ;?>" size="2">
        </font></td>
      <td width="5"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="179"> <font face="Arial, Helvetica, sans-serif"> GA 
        <input type="text" name="A1612" value="<?php echo($result->A1612) ;?>" size="3">
        -Aller( 
        <?php	echo $A1612; ?>
        ) <br>
        Pts 
        <input type="text" name="A3212" value="<?php echo($result2->A3212) ;?>" size="2">
        </font></td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC" width="47"><b><font face="Arial, Helvetica, sans-serif">7</font></b></td>
      <td width="171" bgcolor="#CCCCCC"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1613; ?>
        </font></td>
      <td width="5" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="179" bgcolor="#CCCCCC"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1614; ?>
        </font></td>
    </tr>
    <tr align="center"> 
      <td height="20" width="47" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="171" bgcolor="#CCCCCC"> <font face="Arial, Helvetica, sans-serif"> 
        GA 
        <input type="text" name="A1613" value="<?php echo($result->A1613) ;?>" size="3">
        -Aller( 
        <?php	echo $A1613; ?>
        ) <br>
        Pts 
        <input type="text" name="A3213" value="<?php echo($result2->A3213) ;?>" size="2">
        </font></td>
      <td width="5" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="179" bgcolor="#CCCCCC"> <font face="Arial, Helvetica, sans-serif"> 
        GA 
        <input type="text" name="A1614" value="<?php echo($result->A1614) ;?>" size="3">
        -Aller( 
        <?php	echo $A1614; ?>
        ) <br>
        Pts 
        <input type="text" name="A3214" value="<?php echo($result2->A3214) ;?>" size="2">
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="47"><b><font face="Arial, Helvetica, sans-serif">8</font></b></td>
      <td width="171"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1615; ?>
        </font></td>
      <td width="5"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="179"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1616; ?>
        </font></td>
    </tr>
    <tr align="center"> 
      <td height="20" width="47">&nbsp;</td>
      <td width="171"> <font face="Arial, Helvetica, sans-serif"> GA 
        <input type="text" name="A1615" value="<?php echo($result->A1615) ;?>" size="3">
        -Aller( 
        <?php	echo $A1615; ?>
        ) <br>
        Pts 
        <input type="text" name="A3215" value="<?php echo($result2->A3215) ;?>" size="2">
        </font></td>
      <td width="5"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="179"> <font face="Arial, Helvetica, sans-serif"> GA 
        <input type="text" name="A1616" value="<?php echo($result->A1616) ;?>" size="3">
        -Aller( 
        <?php	echo $A1616; ?>
        ) <br>
        Pts 
        <input type="text" name="A3216" value="<?php echo($result2->A3216) ;?>" size="2">
        </font></td>
    </tr>
    <tr align="center"> 
      <td rowspan="2" width="47" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif">9</font></td>
      <td width="171" bgcolor="#CCCCCC"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1617; ?>
        </font></td>
      <td width="5" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="179" bgcolor="#CCCCCC"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1618; ?>
        </font></td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="171" height="42"> <font face="Arial, Helvetica, sans-serif"> 
        GA 
        <input type="text" name="A1617" value="<?php echo($result->A1617) ;?>" size="3">
        -Aller( 
        <?php	echo $A1617; ?>
        ) <br>
        Pts 
        <input type="text" name="A3217" value="<?php echo($result2->A3217) ;?>" size="2">
        </font></td>
      <td width="5" height="42"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="179" height="42"> 
        <p><font face="Arial, Helvetica, sans-serif">GA 
          <input type="text" name="A1618" value="<?php echo($result->A1618) ;?>" size="3">
          -Aller( 
          <?php	echo $A1618; ?>
          ) <br>
          Pts 
          <input type="text" name="A3218" value="<?php echo($result2->A3218) ;?>" size="2">
          </font></p>
        </td>
    </tr>
    <tr align="center"> 
      <td rowspan="2" width="47"><font face="Arial, Helvetica, sans-serif">10</font></td>
      <td width="171"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1619; ?>
        </font></td>
      <td width="5"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="179"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1620; ?>
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="171"> <font face="Arial, Helvetica, sans-serif"> GA 
        <input type="text" name="A1619" value="<?php echo($result->A1619) ;?>" size="3">
        -Aller( 
        <?php	echo $A1619; ?>
        ) <br>
        Pts 
        <input type="text" name="A3219" value="<?php echo($result2->A3219) ;?>" size="2">
        </font></td>
      <td width="5"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="179"> <font face="Arial, Helvetica, sans-serif"> GA 
        <input type="text" name="A1620" value="<?php echo($result->A1620) ;?>" size="3">
        -Aller( 
        <?php	echo $A1620; ?>
        ) <br>
        Pts 
        <input type="text" name="A3220" value="<?php echo($result2->A3220) ;?>" size="2">
        </font></td>
    </tr>
    <tr align="center"> 
      <td rowspan="2" width="47" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif">11</font></td>
      <td width="171" bgcolor="#CCCCCC"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1621; ?>
        </font></td>
      <td width="5" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="179" bgcolor="#CCCCCC"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1622; ?>
        </font></td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="171"> <font face="Arial, Helvetica, sans-serif"> GA 
        <input type="text" name="A1621" value="<?php echo($result->A1621) ;?>" size="3">
        -Aller( 
        <?php	echo $A1621; ?>
        ) <br>
        Pts 
        <input type="text" name="A3221" value="<?php echo($result2->A3221) ;?>" size="2">
        <br>
        </font></td>
      <td width="5"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="179"> <font face="Arial, Helvetica, sans-serif"> GA 
        <input type="text" name="A1622" value="<?php echo($result->A1622) ;?>" size="3">
        -Aller( 
        <?php	echo $A1622; ?>
        ) <br>
        Pts 
        <input type="text" name="A3222" value="<?php echo($result2->A3222) ;?>" size="2">
        </font></td>
    </tr>
    <tr align="center"> 
      <td rowspan="2" width="47"><font face="Arial, Helvetica, sans-serif">12</font></td>
      <td width="171"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1623; ?>
        </font></td>
      <td width="5"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="179"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1624; ?>
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="171"> <font face="Arial, Helvetica, sans-serif"> GA 
        <input type="text" name="A1623" value="<?php echo($result->A1623) ;?>" size="3">
        -Aller( 
        <?php	echo $A1623; ?>
        ) <br>
        Pts 
        <input type="text" name="A3223" value="<?php echo($result2->A3223) ;?>" size="2">
        </font></td>
      <td width="5"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="179"><font face="Arial, Helvetica, sans-serif"> GA 
        <input type="text" name="A1624" value="<?php echo($result->A1624) ;?>" size="3">
        -Aller( 
        <?php	echo $A1624; ?>
        ) <br>
        Pts 
        <input type="text" name="A3224" value="<?php echo($result2->A3224) ;?>" size="2">
        </font></td>
    </tr>
    <tr align="center"> 
      <td rowspan="2" width="47" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif">13</font></td>
      <td width="171" bgcolor="#CCCCCC"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1625; ?>
        </font></td>
      <td width="5" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="179" bgcolor="#CCCCCC"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1626; ?>
        </font></td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="171"> <font face="Arial, Helvetica, sans-serif"> GA 
        <input type="text" name="A1625" value="<?php echo($result->A1625) ;?>" size="3">
        -Aller( 
        <?php	echo $A1625; ?>
        ) <br>
        Pts 
        <input type="text" name="A3225" value="<?php echo($result2->A3225) ;?>" size="2">
        <br>
        </font></td>
      <td width="5"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="179"> <font face="Arial, Helvetica, sans-serif"> GA 
        <input type="text" name="A1626" value="<?php echo($result->A1626) ;?>" size="3">
        -Aller( 
        <?php	echo $A1626; ?>
        ) <br>
        Pts 
        <input type="text" name="A3226" value="<?php echo($result2->A3226) ;?>" size="2">
        </font></td>
    </tr>
    <tr align="center"> 
      <td rowspan="2" width="47"><font face="Arial, Helvetica, sans-serif">14</font></td>
      <td width="171"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1627; ?>
        </font></td>
      <td width="5"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="179"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1628; ?>
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="171"> <font face="Arial, Helvetica, sans-serif"> GA 
        <input type="text" name="A1627" value="<?php echo($result->A1627) ;?>" size="3">
        -Aller( 
        <?php	echo $A1627; ?>
        ) <br>
        Pts 
        <input type="text" name="A3227" value="<?php echo($result2->A3227) ;?>" size="2">
        <br>
        </font></td>
      <td width="5"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="179"> <font face="Arial, Helvetica, sans-serif"> GA 
        <input type="text" name="A1628" value="<?php echo($result->A1628) ;?>" size="3">
        -Aller( 
        <?php	echo $A1628; ?>
        ) <br>
        Pts 
        <input type="text" name="A3228" value="<?php echo($result2->A3228) ;?>" size="2">
        </font></td>
    </tr>
    <tr align="center"> 
      <td rowspan="2" width="47" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif">15</font></td>
      <td width="171" valign="bottom" bgcolor="#CCCCCC"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1629; ?>
        </font></td>
      <td width="5" valign="bottom" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="179" valign="bottom" bgcolor="#CCCCCC"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1630; ?>
        </font></td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="171"> <font face="Arial, Helvetica, sans-serif"> GA 
        <input type="text" name="A1629" value="<?php echo($result->A1629) ;?>" size="3">
        -Aller( 
        <?php	echo $A1629; ?>
        ) <br>
        Pts 
        <input type="text" name="A3229" value="<?php echo($result2->A3229) ;?>" size="2">
        </font></td>
      <td width="5"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="179"> <font face="Arial, Helvetica, sans-serif"> GA 
        <input type="text" name="A1630" value="<?php echo($result->A1630) ;?>" size="3">
        -Aller( 
        <?php	echo $A1630; ?>
        ) <br>
        Pts 
        <input type="text" name="A3230" value="<?php echo($result2->A3230) ;?>" size="2">
        </font></td>
    </tr>
    <tr align="center"> 
      <td rowspan="2" width="47"><font face="Arial, Helvetica, sans-serif">16</font></td>
      <td width="171"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1631; ?>
        </font></td>
      <td width="5"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="179"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1632; ?>
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="171"> <font face="Arial, Helvetica, sans-serif"> GA 
        <input type="text" name="A1631" value="<?php echo($result->A1631) ;?>" size="3">
        -Aller( 
        <?php	echo $A1631; ?>
        ) <br>
        Pts 
        <input type="text" name="A3231" value="<?php echo($result2->A3231) ;?>" size="2">
        </font></td>
      <td width="5"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="179"> <font face="Arial, Helvetica, sans-serif"> GA 
        <input type="text" name="A1632" value="<?php echo($result->A1632) ;?>" size="3">
        -Aller( 
        <?php	echo $A1632; ?>
        ) <br>
        Pts 
        <input type="text" name="A3232" value="<?php echo($result2->A3232) ;?>" size="2">
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="47">&nbsp;</td>
      <td width="171">&nbsp;</td>
      <td width="5">&nbsp;</td>
      <td width="179">&nbsp;</td>
    </tr>
    <tr align="center" valign="top"> 
      <td colspan="4" bgcolor="#FF0000"> 
        <input type="submit" value="modifier" name="submit">
      </td>
    </tr>
  </table>
</form>

<p>&nbsp;</p>
