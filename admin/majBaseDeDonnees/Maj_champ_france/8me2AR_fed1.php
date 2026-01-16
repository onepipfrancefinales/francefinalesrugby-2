<html>
  <head>
<title>modification de donn�es en PHP :: partie2</title>

<meta name=viewport content="width=device-width, initial-scale=1">
</head>

<body>

<?php $niv=$_GET['niv']; ?>
<?php $id2=120; ?>
<?php $id=140; ?>
<?php echo $id; ?>
<?php echo $niv; ?>

<?php $annee=$_GET['annee']; ?>
<?php $annee=$annee; ?>


<?php $annee2 ="bdpf".''.$annee.''."_2";  ?>
<?php echo $annee; ?>


<?php require ("../../phases_finales/fonctions_phases_finalesAR.php");?>
<form name="insertion" action="<?php echo $niv ;?>8me3AR_fed1.php" method="POST">
  <b><font size="4"> 
  <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "Lavelan1969&"); 
mysql_select_db("onepip-france-db1"); 
?>
  </font></b> <b><font size="4"> 
 
  <?php 
 $requete2 = mysql_query( "SELECT id ,A3233, A3234, A3235, A3236, A3237, A3238, A3239, A3240,
									  A3241, A3242, A3243, A3244, A3245, A3246, A3247, A3248
						   	   FROM bdpf2017 WHERE  id = ".$id2 ) ;


 	if( $result2 = mysql_fetch_object( $requete2 ) )
 	{
 
 }

?>
  
 
  <?php
  $requete = mysql_query( "SELECT id, A8001, A8002, A8003, A8004 ,A8005, A8006, A8007, A8008,
  									  A8009, A8010, A8011, A8012, A8013, A8014, A8015, A8016, 
									  A1601, A1602, A1603, A1604 ,A1605, A1606, A1607, A1608,
									  A1609, A1610, A1611, A1612, A1613, A1614, A1615, A1616
									  FROM bdpf2017_2 WHERE  id = ".$id ) ;
 

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
      <td colspan="4" height="32" bgcolor="#FF0000"> <b><font size="4" face="Arial, Helvetica, sans-serif">8me 
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
      <td bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif">1</font></td>
      <td width="214" bgcolor="#CCCCCC"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3201; ?>
        </font></td>
      <td width="6" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="236" bgcolor="#CCCCCC"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3202; ?>
        </font></td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="214" bgcolor="#CCCCCC"> <font face="Arial, Helvetica, sans-serif"> 
        GA 
        <input type="text" name="A8001" value="<?php echo($result->A8001) ;?>" size="3">
        - Aller( 
        <?php	echo $A8001; ?>
        ) </font></td>
      <td width="6" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="236" bgcolor="#CCCCCC"> <font face="Arial, Helvetica, sans-serif"> 
        GA 
        <input type="text" name="A8002" value="<?php echo($result->A8002) ;?>" size="3">
        - Aller( 
        <?php	echo $A8002; ?>
        ) </font></td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="214" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif">Pts 
        <input type="text" name="essai1601" value="<?php echo($result->A1601) ;?>" size="2">
        </font></td>
      <td width="6" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="236" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif">Pts 
        <input type="text" name="A1602" value="<?php echo($result->A1602) ;?>" size="2">
        </font></td>
    </tr>
    <tr align="center"> 
      <td><font face="Arial, Helvetica, sans-serif">2</font></td>
      <td width="214"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3203; ?>
        </font></td>
      <td width="6"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="236"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3204; ?>
        </font></td>
    </tr>
    <tr align="center"> 
      <td>&nbsp;</td>
      <td width="214"> <font face="Arial, Helvetica, sans-serif"> GA 
        <input type="text" name="A8003" value="<?php echo($result->A8003) ;?>" size="3">
        - Aller( 
        <?php	echo $A8003; ?>
        ) </font></td>
      <td width="6"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="236"> <font face="Arial, Helvetica, sans-serif"> GA 
        <input type="text" name="A8004" value="<?php echo($result->A8004) ;?>" size="3">
        - Aller( 
        <?php	echo $A8004; ?>
        ) </font></td>
    </tr>
    <tr align="center"> 
      <td>&nbsp;</td>
      <td width="214"><font face="Arial, Helvetica, sans-serif">Pts 
        <input type="text" name="A1603" value="<?php echo($result->A1603) ;?>" size="2">
        </font></td>
      <td width="6">&nbsp;</td>
      <td width="236"><font face="Arial, Helvetica, sans-serif">Pts 
        <input type="text" name="A1604" value="<?php echo($result->A1604) ;?>" size="2">
        </font></td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif">3</font></td>
      <td width="214" bgcolor="#CCCCCC"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3205; ?>
        </font></td>
      <td width="6" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="236" bgcolor="#CCCCCC"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3206; ?>
        </font></td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="214" bgcolor="#CCCCCC"> <font face="Arial, Helvetica, sans-serif"> 
        GA 
        <input type="text" name="A8005" value="<?php echo($result->A8005) ;?>" size="3">
        - Aller( 
        <?php	echo $A8005; ?>
        ) </font></td>
      <td width="6" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="236" bgcolor="#CCCCCC"> <font face="Arial, Helvetica, sans-serif"> 
        GA 
        <input type="text" name="A8006" value="<?php echo($result->A8006) ;?>" size="3">
        - Aller( 
        <?php	echo $A8006; ?>
        ) </font></td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="214" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif">Pts 
        <input type="text" name="A1605" value="<?php echo($result->A1605) ;?>" size="2">
        </font></td>
      <td width="6" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="236" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif">Pts 
        <input type="text" name="A1606" value="<?php echo($result->A1606) ;?>" size="2">
        </font></td>
    </tr>
    <tr align="center"> 
      <td><font face="Arial, Helvetica, sans-serif">4</font></td>
      <td width="214"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3207; ?>
        </font></td>
      <td width="6"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="236"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3208; ?>
        </font></td>
    </tr>
    <tr align="center"> 
      <td>&nbsp;</td>
      <td width="214"> <font face="Arial, Helvetica, sans-serif"> GA 
        <input type="text" name="A8007" value="<?php echo($result->A8007) ;?>" size="3">
        - Aller( 
        <?php	echo $A8007; ?>
        ) </font></td>
      <td width="6"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="236"> <font face="Arial, Helvetica, sans-serif"> GA 
        <input type="text" name="A8008" value="<?php echo($result->A8008) ;?>" size="3">
        - Aller( 
        <?php	echo $A8008; ?>
        ) </font></td>
    </tr>
    <tr align="center"> 
      <td>&nbsp;</td>
      <td width="214"><font face="Arial, Helvetica, sans-serif">Pts 
        <input type="text" name="A1607" value="<?php echo($result->A1607) ;?>" size="2">
        </font></td>
      <td width="6">&nbsp;</td>
      <td width="236"><font face="Arial, Helvetica, sans-serif">Pts 
        <input type="text" name="A1608" value="<?php echo($result->A1608) ;?>" size="2">
        </font></td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif">5</font></td>
      <td width="214" bgcolor="#CCCCCC"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3209; ?>
        </font></td>
      <td width="6" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="236" bgcolor="#CCCCCC"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3210; ?>
        </font></td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="214" bgcolor="#CCCCCC"> <font face="Arial, Helvetica, sans-serif"> 
        GA 
        <input type="text" name="A8009" value="<?php echo($result->A8009) ;?>" size="3">
        - Aller( 
        <?php	echo $A8009; ?>
        ) </font></td>
      <td width="6" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="236" bgcolor="#CCCCCC"> <font face="Arial, Helvetica, sans-serif"> 
        GA 
        <input type="text" name="A8010" value="<?php echo($result->A8010) ;?>" size="3">
        - Aller( 
        <?php	echo $A8010; ?>
        ) </font></td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="214" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif">Pts 
        <input type="text" name="A1609" value="<?php echo($result->A1609) ;?>" size="2">
        </font></td>
      <td width="6" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="236" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif">Pts 
        <input type="text" name="A1610" value="<?php echo($result->A1610) ;?>" size="2">
        </font></td>
    </tr>
    <tr align="center"> 
      <td><font face="Arial, Helvetica, sans-serif">6</font></td>
      <td width="214"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3211; ?>
        </font></td>
      <td width="6"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="236"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3212; ?>
        </font></td>
    </tr>
    <tr align="center"> 
      <td>&nbsp;</td>
      <td width="214"> <font face="Arial, Helvetica, sans-serif"> GA 
        <input type="text" name="A8011" value="<?php echo($result->A8011) ;?>" size="3">
        - Aller( 
        <?php	echo $A8011; ?>
        ) </font></td>
      <td width="6"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="236"> <font face="Arial, Helvetica, sans-serif"> GA 
        <input type="text" name="A8012" value="<?php echo($result->A8012) ;?>" size="3">
        - Aller( 
        <?php	echo $A8012; ?>
        ) </font></td>
    </tr>
    <tr align="center"> 
      <td>&nbsp;</td>
      <td width="214"><font face="Arial, Helvetica, sans-serif">Pts 
        <input type="text" name="A1611" value="<?php echo($result->A1611) ;?>" size="2">
        </font></td>
      <td width="6">&nbsp;</td>
      <td width="236"><font face="Arial, Helvetica, sans-serif">Pts 
        <input type="text" name="A1612" value="<?php echo($result->A1612) ;?>" size="2">
        </font></td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif">7</font></td>
      <td width="214" bgcolor="#CCCCCC"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3213; ?>
        </font></td>
      <td width="6" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="236" bgcolor="#CCCCCC"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3214; ?>
        </font></td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="214" bgcolor="#CCCCCC"> <font face="Arial, Helvetica, sans-serif"> 
        GA 
        <input type="text" name="A8013" value="<?php echo($result->A8013) ;?>" size="3">
        - Aller( 
        <?php	echo $A8013; ?>
        ) <br>
        Pts 
        <input type="text" name="A1613" value="<?php echo($result->A1613) ;?>" size="2">
        </font></td>
      <td width="6" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="236" bgcolor="#CCCCCC"> <font face="Arial, Helvetica, sans-serif"> 
        GA 
        <input type="text" name="A8014" value="<?php echo($result->A8014) ;?>" size="3">
        - Aller( 
        <?php	echo $A8014; ?>
        )<br>
        Pts 
        <input type="text" name="A1614" value="<?php echo($result->A1614) ;?>" size="2">
        </font></td>
    </tr>
    <tr align="center"> 
      <td><font face="Arial, Helvetica, sans-serif">8</font></td>
      <td width="214"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3215; ?>
        </font></td>
      <td width="6"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="236"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3216; ?>
        </font></td>
    </tr>
    <tr align="center"> 
      <td>&nbsp;</td>
      <td width="214"> <font face="Arial, Helvetica, sans-serif"> GA 
        <input type="text" name="A8015" value="<?php echo($result->A8015) ;?>" size="3">
        - Aller( 
        <?php	echo $A8015; ?>
        )<br>
        Pts 
        <input type="text" name="A1615" value="<?php echo($result->A1615) ;?>" size="2">
        </font></td>
      <td width="6"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="236"> <font face="Arial, Helvetica, sans-serif"> GA 
        <input type="text" name="A8016" value="<?php echo($result->A8016) ;?>" size="3">
        - Aller( 
        <?php	echo $A8016; ?>
        )<br>
        Pts 
        <input type="text" name="A1616" value="<?php echo($result->A1616) ;?>" size="2">
        </font></td>
    </tr>
    <tr align="center" valign="top"> 
      <td colspan="4" bgcolor="#FF0000"> 
        <input type="submit" value="modifier" name="submit">
      </td>
    </tr>
  </table>
</form>

<p>&nbsp;</p>
