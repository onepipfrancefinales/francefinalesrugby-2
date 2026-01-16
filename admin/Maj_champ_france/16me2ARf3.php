<html>
 <head>
<title>modification de donn�es en PHP :: partie2</title>
<meta name=viewport content="width=device-width, initial-scale=1">
</head>
<body>
<p> 
  <?php $niv=$_GET['niv']; ?>
  <?php $id=160; ?>
  <?php $id2=130; ?>
 
 <?php echo $id; ?>
<?php echo $niv; ?>

<?php $annee=$_GET['annee']; ?>
<?php $annee=2018; ?>




<?php $annee2 ="bdpf".''.$annee.''."_2";  ?> 
  <?php
//require ("../../phases_finales/fonctions_phases_finales.php");
require ("../../phases_finales/fonctions_phases_finalesAR.php");
?>
</p>

<form name="insertion" action="16me3ARf3.php" method="POST">
  <b><font size="4"> 
  <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "Lavelan1969&"); 
mysql_select_db("onepip-france-db1"); 
?>
  </font></b> <b><font size="4"> 
   <?php 
  $requete2 = mysql_query( "SELECT id ,A1601, A1602, A1603, A1604 ,A1605, A1606, A1607, A1608, A1609, A1610, A1611, A1612, A1613, A1614, A1615, A1616,
  									   A1617, A1618, A1619, A1620 ,A1621, A1622, A1623, A1624, A1625, A1626, A1627, A1628, A1629, A1630, A1631, A1632 
									  FROM $annee2 WHERE  id = ".$id2 ) ;
 

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
<?php if ($pts3A3201+$pts3A3202>6) if ($pts3A3201>$pts3A3202 or $A3201>$A3202)    $clubA1601= $clubA3201; else	$clubA1601= $clubA3202; else $clubA1601=$clubA;?>
      <?php if ($pts3A3203+$pts3A3204>6) if ($pts3A3203>$pts3A3204 or $A3203>$A3204)	$clubA1602= $clubA3203;	else	$clubA1602= $clubA3204; else $clubA1602=$clubA;?>
      <?php if ($pts3A3205+$pts3A3206>6) if ($pts3A3205>$pts3A3206 or $A3205>$A3206)	$clubA1603= $clubA3205;	else	$clubA1603= $clubA3206; else $clubA1603=$clubA;?>
      <?php if ($pts3A3207+$pts3A3208>6) if ($pts3A3207>$pts3A3208 or $A3207>$A3208)	$clubA1604= $clubA3207;	else	$clubA1604= $clubA3208; else $clubA1604=$clubA;?>
      <?php if ($pts3A3209+$pts3A3210>6) if ($pts3A3209>$pts3A3210 or $A3209>$A3210)	$clubA1605= $clubA3209;	else	$clubA1605= $clubA3210; else $clubA1605=$clubA;?>
      <?php if ($pts3A3211+$pts3A3212>6) if ($pts3A3211>$pts3A3212 or $A3211>$A3212)	$clubA1606= $clubA3211;	else	$clubA1606= $clubA3212; else $clubA1606=$clubA;?>
      <?php if ($pts3A3213+$pts3A3214>6) if ($pts3A3213>$pts3A3214 or $A3213>$A3214)	$clubA1607= $clubA3213;	else	$clubA1607= $clubA3214; else $clubA1607=$clubA;?>
      <?php if ($pts3A3215+$pts3A3216>6) if ($pts3A3215>$pts3A3216 or $A3215>$A3216)	$clubA1608= $clubA3215;	else	$clubA1608= $clubA3216; else $clubA1608=$clubA;?>
      <?php if ($pts3A3217+$pts3A3218>6) if ($pts3A3217>$pts3A3218 or $A3217>$A3218)	$clubA1609= $clubA3217;	else	$clubA1609= $clubA3218; else $clubA1609=$clubA;?>
    <?php if ($pts3A3219+$pts3A3220>6) if ($pts3A3219>$pts3A3220 or $A3219>$A3220)	$clubA1610= $clubA3219;	else	$clubA1610= $clubA3220; else $clubA1610=$clubA;?>
      <?php if ($pts3A3221+$pts3A3222>6) if ($pts3A3221>$pts3A3222 or $A3221>$A3222)	$clubA1611= $clubA3221;	else	$clubA1611= $clubA3222; else $clubA1611=$clubA;?>
      <?php if ($pts3A3223+$pts3A3224>6) if ($pts3A3223>$pts3A3224 or $A3223>$A3224)	$clubA1612= $clubA3223;	else	$clubA1612= $clubA3224; else $clubA1612=$clubA;?>
      <?php if ($pts3A3225+$pts3A3226>6) if ($pts3A3225>$pts3A3226 or $A3225>$A3226)	$clubA1613= $clubA3225;	else	$clubA1613= $clubA3226; else $clubA1613=$clubA;?>
      <?php if ($pts3A3227+$pts3A3228>6) if ($pts3A3227>$pts3A3228 or $A3227>$A3228)	$clubA1614= $clubA3227;	else	$clubA1614= $clubA3228; else $clubA1614=$clubA;?>
      <?php if ($pts3A3229+$pts3A3230>6) if ($pts3A3229>$pts3A3230 or $A3229>$A3230)	$clubA1615= $clubA3229;	else	$clubA1615= $clubA3230; else $clubA1615=$clubA;?>
      <?php if ($pts3A3231+$pts3A3232>6) if ($pts3A3231>$pts3A3232 or $A3231>$A3232)	$clubA1616= $clubA3231;	else	$clubA1616= $clubA3232; else $clubA1616=$clubA;?>
      <?php if ($pts3A3233+$pts3A3234>6) if ($pts3A3233>$pts3A3234 or $A3233>$A3234)    $clubA1617= $clubA3233;	else	$clubA1617= $clubA3234; else $clubA1617=$clubA;?>
      <?php if ($pts3A3235+$pts3A3236>6) if ($pts3A3235>$pts3A3236 or $A3235>$A3236)	$clubA1618= $clubA3235;	else	$clubA1618= $clubA3236; else $clubA1618=$clubA;?>
      <?php if ($pts3A3237+$pts3A3238>6) if ($pts3A3237>$pts3A3238 or $A3237>$A3238)	$clubA1619= $clubA3237;	else	$clubA1619= $clubA3238; else $clubA1619=$clubA;?>
      <?php if ($pts3A3239+$pts3A3240>6) if ($pts3A3239>$pts3A3240 or $A3239>$A3240)	$clubA1620= $clubA3239;	else	$clubA1620= $clubA3240; else $clubA1620=$clubA;?>
      <?php if ($pts3A3241+$pts3A3242>6) if ($pts3A3241>$pts3A3242 or $A3241>$A3242)	$clubA1621= $clubA3241;	else	$clubA1621= $clubA3242; else $clubA1621=$clubA;?>
      <?php if ($pts3A3243+$pts3A3244>6) if ($pts3A3243>$pts3A3244 or $A3243>$A3244)	$clubA1622= $clubA3243;	else	$clubA1622= $clubA3244; else $clubA1622=$clubA;?>
      <?php if ($pts3A3245+$pts3A3246>6) if ($pts3A3245>$pts3A3246 or $A3245>$A3246)	$clubA1623= $clubA3245;	else	$clubA1623= $clubA3246; else $clubA1623=$clubA;?>
      <?php if ($pts3A3247+$pts3A3248>6) if ($pts3A3247>$pts3A3248 or $A3247>$A3248)	$clubA1624= $clubA3247;	else	$clubA1624= $clubA3248; else $clubA1624=$clubA;?>
      <?php if ($pts3A3249+$pts3A3250>6) if ($pts3A3249>$pts3A3250 or $A3249>$A3250)    $clubA1625= $clubA3249;	else	$clubA1625= $clubA3250; else $clubA1625=$clubA;?>
      <?php if ($pts3A3251+$pts3A3252>6) if ($pts3A3251>$pts3A3252 or $A3251>$A3252)	$clubA1626= $clubA3251;	else	$clubA1626= $clubA3252; else $clubA1626=$clubA;?>
      <?php if ($pts3A3253+$pts3A3254>6) if ($pts3A3253>$pts3A3254 or $A3253>$A3254)	$clubA1627= $clubA3253;	else	$clubA1627= $clubA3254; else $clubA1627=$clubA;?>
      <?php if ($pts3A3255+$pts3A3256>6) if ($pts3A3255>$pts3A3256 or $A3255>$A3256)	$clubA1628= $clubA3255;	else	$clubA1628= $clubA3256; else $clubA1628=$clubA;?>
      <?php if ($pts3A3257+$pts3A3258>6) if ($pts3A3257>$pts3A3258 or $A3257>$A3258)	$clubA1629= $clubA3257;	else	$clubA1629= $clubA3258; else $clubA1629=$clubA;?>
      <?php if ($pts3A3259+$pts3A3260>6) if ($pts3A3259>$pts3A3260 or $A3259>$A3260)	$clubA1630= $clubA3259;	else	$clubA1630= $clubA3260; else $clubA1630=$clubA;?>
      <?php if ($pts3A3261+$pts3A3262>6) if ($pts3A3261>$pts3A3262 or $A3261>$A3262)	$clubA1631= $clubA3261;	else	$clubA1631= $clubA3262; else $clubA1631=$clubA;?>
      <?php if ($pts3A3263+$pts3A3264>6) if ($pts3A3263>$pts3A3264 or $A3263>$A3264)	$clubA1632= $clubA3263;	else	$clubA1632= $clubA3264; else $clubA1632=$clubA;?>





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
        <input type="text" name="ptsA1601" value="<?php echo($result2->A1601) ;?>" size="2">
        </font></td>
      <td width="5" height="20" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="179" height="20" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif"> 
        GA 
        <input type="text" name="A1602" value="<?php echo($result->A1602) ;?>" size="3">
        -Aller( 
        <?php	echo $A1602; ?>
        ) <br>
        Pts 
        <input type="text" name="ptsA1602" value="<?php echo($result2->A1602) ;?>" size="2">
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
      <td height="20" width="47"><b>Aller</b></td>
      <td width="171"><font face="Arial, Helvetica, sans-serif"> GA 
        <input type="text" name="A1603" value="<?php echo($result->A1603) ;?>" size="3">
        -Aller( 
        <?php	echo $A1603; ?>
        ) <br>
        Pts 
        <input type="text" name="ptsA16032" value="<?php echo($result2->A1603) ;?>" size="2">
        </font></td>
      <td width="5">&nbsp;</td>
      <td width="179"><font face="Arial, Helvetica, sans-serif"> GA 
        <input type="text" name="A1604" value="<?php echo($result->A1604) ;?>" size="3">
        -Aller( 
        <?php	echo $A1604; ?>
        ) <br>
        Pts 
        <input type="text" name="ptsA1604" value="<?php echo($result2->A1604) ;?>" size="2">
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
        <input type="text" name="ptsA1605" value="<?php echo($result2->A1605) ;?>" size="2">
        </font></td>
      <td width="5" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="179" bgcolor="#CCCCCC"> <font face="Arial, Helvetica, sans-serif"> 
        GA 
        <input type="text" name="A1606" value="<?php echo($result->A1606) ;?>" size="3">
        -Aller( 
        <?php	echo $A1606; ?>
        ) <br>
        Pts 
        <input type="text" name="ptsA1606" value="<?php echo($result2->A1606) ;?>" size="2">
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
        <input type="text" name="ptsA1607" value="<?php echo($result2->A1607) ;?>" size="2">
        </font></td>
      <td width="5"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="179"> <font face="Arial, Helvetica, sans-serif"> GA 
        <input type="text" name="A1608" value="<?php echo($result->A1608) ;?>" size="3">
        -Aller( 
        <?php	echo $A1608; ?>
        ) <br>
        Pts 
        <input type="text" name="ptsA1608" value="<?php echo($result2->A1608) ;?>" size="2">
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
        <input type="text" name="ptsA1609" value="<?php echo($result2->A1609) ;?>" size="2">
        </font></td>
      <td width="5" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="179" bgcolor="#CCCCCC"> <font face="Arial, Helvetica, sans-serif"> 
        GA 
        <input type="text" name="A1610" value="<?php echo($result->A1610) ;?>" size="3">
        -Aller( 
        <?php	echo $A1610; ?>
        ) <br>
        Pts 
        <input type="text" name="ptsA1610" value="<?php echo($result2->A1610) ;?>" size="2">
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
        <input type="text" name="ptsA1611" value="<?php echo($result2->A1611) ;?>" size="2">
        </font></td>
      <td width="5"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="179"> <font face="Arial, Helvetica, sans-serif"> GA 
        <input type="text" name="A1612" value="<?php echo($result->A1612) ;?>" size="3">
        -Aller( 
        <?php	echo $A1612; ?>
        ) <br>
        Pts 
        <input type="text" name="ptsA1612" value="<?php echo($result2->A1612) ;?>" size="2">
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
        <input type="text" name="ptsA1613" value="<?php echo($result2->A1613) ;?>" size="2">
        </font></td>
      <td width="5" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="179" bgcolor="#CCCCCC"> <font face="Arial, Helvetica, sans-serif"> 
        GA 
        <input type="text" name="A1614" value="<?php echo($result->A1614) ;?>" size="3">
        -Aller( 
        <?php	echo $A1614; ?>
        ) <br>
        Pts 
        <input type="text" name="ptsA1614" value="<?php echo($result2->A1614) ;?>" size="2">
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
        <input type="text" name="ptsA1615" value="<?php echo($result2->A1615) ;?>" size="2">
        </font></td>
      <td width="5"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="179"> <font face="Arial, Helvetica, sans-serif"> GA 
        <input type="text" name="A1616" value="<?php echo($result->A1616) ;?>" size="3">
        -Aller( 
        <?php	echo $A1616; ?>
        ) <br>
        Pts 
        <input type="text" name="ptsA1616" value="<?php echo($result2->A1616) ;?>" size="2">
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
        <input type="text" name="ptsA1617" value="<?php echo($result2->A1617) ;?>" size="2">
        </font></td>
      <td width="5" height="42"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="179" height="42"> 
        <p><font face="Arial, Helvetica, sans-serif">GA 
          <input type="text" name="A1618" value="<?php echo($result->A1618) ;?>" size="3">
          -Aller( 
          <?php	echo $A1618; ?>
          ) <br>
          Pts 
          <input type="text" name="ptsA1618" value="<?php echo($result2->A1618) ;?>" size="2">
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
        <input type="text" name="ptsA1619" value="<?php echo($result2->A1619) ;?>" size="2">
        </font></td>
      <td width="5"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="179"> <font face="Arial, Helvetica, sans-serif"> GA 
        <input type="text" name="A1620" value="<?php echo($result->A1620) ;?>" size="3">
        -Aller( 
        <?php	echo $A1620; ?>
        ) <br>
        Pts 
        <input type="text" name="ptsA1620" value="<?php echo($result2->A1620) ;?>" size="2">
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
        <input type="text" name="ptsA1621" value="<?php echo($result2->A1621) ;?>" size="2">
        <br>
        </font></td>
      <td width="5"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="179"> <font face="Arial, Helvetica, sans-serif"> GA 
        <input type="text" name="A1622" value="<?php echo($result->A1622) ;?>" size="3">
        -Aller( 
        <?php	echo $A1622; ?>
        ) <br>
        Pts 
        <input type="text" name="ptsA1622" value="<?php echo($result2->A1622) ;?>" size="2">
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
        <input type="text" name="ptsA1623" value="<?php echo($result2->A1623) ;?>" size="2">
        </font></td>
      <td width="5"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="179"><font face="Arial, Helvetica, sans-serif"> GA 
        <input type="text" name="A1624" value="<?php echo($result->A1624) ;?>" size="3">
        -Aller( 
        <?php	echo $A1624; ?>
        ) <br>
        Pts 
        <input type="text" name="ptsA1624" value="<?php echo($result2->A1624) ;?>" size="2">
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
        <input type="text" name="ptsA1625" value="<?php echo($result2->A1625) ;?>" size="2">
        <br>
        </font></td>
      <td width="5"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="179"> <font face="Arial, Helvetica, sans-serif"> GA 
        <input type="text" name="A1626" value="<?php echo($result->A1626) ;?>" size="3">
        -Aller( 
        <?php	echo $A1626; ?>
        ) <br>
        Pts 
        <input type="text" name="ptsA1626" value="<?php echo($result2->A1626) ;?>" size="2">
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
        <input type="text" name="ptsA1627" value="<?php echo($result2->A1627) ;?>" size="2">
        <br>
        </font></td>
      <td width="5"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="179"> <font face="Arial, Helvetica, sans-serif"> GA 
        <input type="text" name="A1628" value="<?php echo($result->A1628) ;?>" size="3">
        -Aller( 
        <?php	echo $A1628; ?>
        ) <br>
        Pts 
        <input type="text" name="ptsA1628" value="<?php echo($result2->A1628) ;?>" size="2">
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
        <input type="text" name="ptsA1629" value="<?php echo($result2->A1629) ;?>" size="2">
        </font></td>
      <td width="5"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="179"> <font face="Arial, Helvetica, sans-serif"> GA 
        <input type="text" name="A1630" value="<?php echo($result->A1630) ;?>" size="3">
        -Aller( 
        <?php	echo $A1630; ?>
        ) <br>
        Pts 
        <input type="text" name="ptsA1630" value="<?php echo($result2->A1630) ;?>" size="2">
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
        <input type="text" name="ptsA1631" value="<?php echo($result2->A1631) ;?>" size="2">
        </font></td>
      <td width="5"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="179"> <font face="Arial, Helvetica, sans-serif"> GA 
        <input type="text" name="A1632" value="<?php echo($result->A1632) ;?>" size="3">
        -Aller( 
        <?php	echo $A1632; ?>
        ) <br>
        Pts 
        <input type="text" name="ptsA1632" value="<?php echo($result2->A1632) ;?>" size="2">
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
