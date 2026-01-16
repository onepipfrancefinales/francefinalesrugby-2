<html>
  <head>
<title>modification de donn�es en PHP :: partie2</title>

<meta name=viewport content="width=device-width, initial-scale=1">
</head>

<body>

<?php $niv=$_GET['niv']; ?>
<?php $id2=120; ?>
<?php $id=150; ?>
<?php echo $id; ?>
<?php echo $niv; ?>

<?php $annee=$_GET['annee']; ?>
<?php $annee=2018; ?>




<?php $annee2 ="bdpf".''.$annee.''."_2";  ?>
<?php echo $annee; ?>
<?php echo $annee2; ?>

<?php require ("../../phases_finales/fonctions_phases_finalesAR.php");?>
<form name="insertion" action="<?php echo $niv ;?>8me3AR.php" method="POST">
  <b><font size="4"> 
  <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "Lavelan1969&"); 
mysql_select_db("onepip-france-db1"); 
?>
  </font></b> <b><font size="4"> 
 
  <?php 
  $requete2 = mysql_query( "SELECT id ,A3233, A3234, A3235, A3236, A3237, A3238, A3239, A3240,
									   A3241, A3242, A3243, A3244, A3245, A3246, A3247, A3248
 								   	   FROM bdpf2018 WHERE  id = ".$id2 ) ;
 

  	if( $result2 = mysql_fetch_object( $requete2 ) )
  	{
 
 }

?>
  
 
  <?php
  $requete = mysql_query( "SELECT id, A8001, A8002, A8003, A8004 ,A8005, A8006, A8007, A8008,
  									  A8009, A8010, A8011, A8012, A8013, A8014, A8015, A8016 
									  FROM bdpf2018_2 WHERE  id = ".$id ) ;
 

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
        <?php	echo $clubA8001; ?>
        </font></td>
      <td width="6" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="236" bgcolor="#CCCCCC"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA8002; ?>
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
        <input type="text" name="pts2A3233" value="<?php echo($result2->pts2A3233) ;?>" size="2">
        </font></td>
      <td width="6" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="236" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif">Pts 
        <input type="text" name="pts2A3234" value="<?php echo($result2->pts2A3234) ;?>" size="2">
        </font></td>
    </tr>
    <tr align="center"> 
      <td><font face="Arial, Helvetica, sans-serif">2</font></td>
      <td width="214"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA8003; ?>
        </font></td>
      <td width="6"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="236"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA8004; ?>
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
        <input type="text" name="pts2A3235" value="<?php echo($result2->pts2A3235) ;?>" size="2">
        </font></td>
      <td width="6">&nbsp;</td>
      <td width="236"><font face="Arial, Helvetica, sans-serif">Pts 
        <input type="text" name="A3236" value="<?php echo($result2->A3236) ;?>" size="2">
        </font></td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif">3</font></td>
      <td width="214" bgcolor="#CCCCCC"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA8005; ?>
        </font></td>
      <td width="6" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="236" bgcolor="#CCCCCC"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA8006; ?>
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
        <input type="text" name="pts2A3237" value="<?php echo($result2->pts2A3237) ;?>" size="2">
        </font></td>
      <td width="6" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="236" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif">Pts 
        <input type="text" name="pts2A3238" value="<?php echo($result2->pts2A3238) ;?>" size="2">
        </font></td>
    </tr>
    <tr align="center"> 
      <td><font face="Arial, Helvetica, sans-serif">4</font></td>
      <td width="214"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA8007; ?>
        </font></td>
      <td width="6"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="236"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA8008; ?>
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
        <input type="text" name="pts2A3239" value="<?php echo($result2->pts2A3239) ;?>" size="2">
        </font></td>
      <td width="6">&nbsp;</td>
      <td width="236"><font face="Arial, Helvetica, sans-serif">Pts 
        <input type="text" name="pts2A3240" value="<?php echo($result2->pts2A3240) ;?>" size="2">
        </font></td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif">5</font></td>
      <td width="214" bgcolor="#CCCCCC"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA8009; ?>
        </font></td>
      <td width="6" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="236" bgcolor="#CCCCCC"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA8010; ?>
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
        <input type="text" name="A3241" value="<?php echo($result2->A3241) ;?>" size="2">
        </font></td>
      <td width="6" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="236" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif">Pts 
        <input type="text" name="pts2A3242" value="<?php echo($result2->pts2A3242) ;?>" size="2">
        </font></td>
    </tr>
    <tr align="center"> 
      <td><font face="Arial, Helvetica, sans-serif">6</font></td>
      <td width="214"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA8011; ?>
        </font></td>
      <td width="6"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="236"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA8012; ?>
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
        <input type="text" name="pts2A3243" value="<?php echo($result2->pts2A3243) ;?>" size="2">
        </font></td>
      <td width="6">&nbsp;</td>
      <td width="236"><font face="Arial, Helvetica, sans-serif">Pts 
        <input type="text" name="pts2A3244" value="<?php echo($result2->pts2A3244) ;?>" size="2">
        </font></td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif">7</font></td>
      <td width="214" bgcolor="#CCCCCC"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA8013; ?>
        </font></td>
      <td width="6" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="236" bgcolor="#CCCCCC"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA8014; ?>
        </font></td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="214" bgcolor="#CCCCCC"> <font face="Arial, Helvetica, sans-serif"> 
        GA 
        <input type="text" name="A8013" value="<?php echo($result->A8013) ;?>" size="3">
        - Aller( 
        <?php	echo $A8013; ?>
        ) </font></td>
      <td width="6" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="236" bgcolor="#CCCCCC"> <font face="Arial, Helvetica, sans-serif"> 
        GA 
        <input type="text" name="A8014" value="<?php echo($result->A8014) ;?>" size="3">
        - Aller( 
        <?php	echo $A8014; ?>
        ) </font></td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="214" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif">Pts 
        <input type="text" name="pts2A3245" value="<?php echo($result2->pts2A3245) ;?>" size="2">
        </font></td>
      <td width="6" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="236" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif">Pts 
        <input type="text" name="pts2A3246" value="<?php echo($result2->pts2A3246) ;?>" size="2">
        </font></td>
    </tr>
    <tr align="center"> 
      <td><font face="Arial, Helvetica, sans-serif">8</font></td>
      <td width="214"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA8015; ?>
        </font></td>
      <td width="6"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="236"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA8016; ?>
        </font></td>
    </tr>
    <tr align="center"> 
      <td>&nbsp;</td>
      <td width="214"> <font face="Arial, Helvetica, sans-serif"> GA
        <input type="text" name="A8015" value="<?php echo($result->A8015) ;?>" size="3">
        - Aller( 
        <?php	echo $A8015; ?>
        ) </font></td>
      <td width="6"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="236"> <font face="Arial, Helvetica, sans-serif"> GA
        <input type="text" name="A8016" value="<?php echo($result->A8016) ;?>" size="3">
        - Aller( 
        <?php	echo $A8016; ?>
        ) </font></td>
    </tr>
    <tr align="center"> 
      <td>&nbsp;</td>
      <td width="214"><font face="Arial, Helvetica, sans-serif">Pts 
        <input type="text" name="pts2A3247" value="<?php echo($result2->pts2A3247) ;?>" size="2">
        </font></td>
      <td width="6">&nbsp;</td>
      <td width="236"><font face="Arial, Helvetica, sans-serif">Pts 
        <input type="text" name="pts2A3248" value="<?php echo($result2->pts2A3248) ;?>" size="2">
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
