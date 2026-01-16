<html>
  <head>
<title>modification de donn�es en PHP :: partie2</title>

<meta name=viewport content="width=device-width, initial-scale=1">
</head>

<body>
<?php $niv=$_GET['niv']; ?>

<?php $annee=$_GET['annee']; ?>
<?php $annee=$annee; ?>
<?php $annee2=($annee.''."_2"); ?> 



<?php $id=$_POST['id']; ?>

<?php require ("../../phases_finales/fonctions_phases_finales.php");?>

<?php echo $niv; ?>
<form name="insertion" action="<?php echo $niv ;?>3.php" method="POST">
  <b><font size="4"> 
  <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "Lavelan1969&"); 
mysql_select_db("onepip-france-db1"); 
?>
  </font></b> <b><font size="4"> 
  <?php
  
 
  $requete = mysql_query( "SELECT id ,A4001, A4002, A4003, A4004 ,A4005, A4006, A4007, A4008,
  									  A2001, A2002, A2003, A2004,
    					   			  A1001, A1002 FROM bdpf$annee2
									  WHERE  id = ".$id ) ;
 

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
      <td colspan="4" height="32"><b><font size="4" face="Arial, Helvetica, sans-serif">Quarts 
        de Finale 
        <?php echo $division; ?>
        ( 
        <?php echo $id; ?>
        ) </font></b></td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif">1</font></td>
      <td width="214"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA4001; ?>
        </font></td>
      <td width="6"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="236"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA4002; ?>
        </font></td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="214" bgcolor="#CCCCCC"> <font face="Arial, Helvetica, sans-serif"> 
        GA 
        <input type="text" name="A4001" value="<?php echo($result->A4001) ;?>" size="3">
        - Aller( 
        <?php	echo $A4001; ?>
        ) </font></td>
      <td width="6" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="236" bgcolor="#CCCCCC"> <font face="Arial, Helvetica, sans-serif"> 
        GA 
        <input type="text" name="A4002" value="<?php echo($result->A4002) ;?>" size="3">
        - Aller( 
        <?php	echo $A4001; ?>
        ) </font></td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="214" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif">Pts 
        <input type="text" name="A32017" value="<?php echo($result2->A3201) ;?>" size="2">
        </font></td>
      <td width="6" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="236" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif">Pts 
        <input type="text" name="A32018" value="<?php echo($result2->A3201) ;?>" size="2">
        </font></td>
    </tr>
    <tr align="center"> 
      <td><font face="Arial, Helvetica, sans-serif">2</font></td>
      <td width="214"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA4003; ?>
        </font></td>
      <td width="6"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="236"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA4004; ?>
        </font></td>
    </tr>
    <tr align="center"> 
      <td>&nbsp;</td>
      <td width="214"> <font face="Arial, Helvetica, sans-serif"> GA 
        <input type="text" name="A4003" value="<?php echo($result->A4003) ;?>" size="3">
        - Aller( 
        <?php	echo $A4001; ?>
        ) </font></td>
      <td width="6"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="236"> <font face="Arial, Helvetica, sans-serif"> GA 
        <input type="text" name="A4004" value="<?php echo($result->A4004) ;?>" size="3">
        - Aller( 
        <?php	echo $A4001; ?>
        ) </font></td>
    </tr>
    <tr align="center"> 
      <td>&nbsp;</td>
      <td width="214"><font face="Arial, Helvetica, sans-serif">Pts 
        <input type="text" name="A32015" value="<?php echo($result2->A3201) ;?>" size="2">
        </font></td>
      <td width="6">&nbsp;</td>
      <td width="236"><font face="Arial, Helvetica, sans-serif">Pts 
        <input type="text" name="A32016" value="<?php echo($result2->A3201) ;?>" size="2">
        </font></td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td><font face="Arial, Helvetica, sans-serif">3</font></td>
      <td width="214"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA4005; ?>
        </font></td>
      <td width="6"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="236"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA4006; ?>
        </font></td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="214" bgcolor="#CCCCCC"> <font face="Arial, Helvetica, sans-serif"> 
        GA 
        <input type="text" name="A4005" value="<?php echo($result->A4005) ;?>" size="3">
        - Aller( 
        <?php	echo $A4001; ?>
        ) </font></td>
      <td width="6" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="236" bgcolor="#CCCCCC"> <font face="Arial, Helvetica, sans-serif"> 
        GA 
        <input type="text" name="A4006" value="<?php echo($result->A4006) ;?>" size="3">
        - Aller( 
        <?php	echo $A4001; ?>
        ) </font></td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="214" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif">Pts 
        <input type="text" name="A32013" value="<?php echo($result2->A3201) ;?>" size="2">
        </font></td>
      <td width="6" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="236" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif">Pts 
        <input type="text" name="A32014" value="<?php echo($result2->A3201) ;?>" size="2">
        </font></td>
    </tr>
    <tr align="center"> 
      <td><font face="Arial, Helvetica, sans-serif">4</font></td>
      <td width="214"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA4007; ?>
        </font></td>
      <td width="6"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="236"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA4008; ?>
        </font></td>
    </tr>
    <tr align="center"> 
      <td>&nbsp;</td>
      <td> <font face="Arial, Helvetica, sans-serif"> GA 
        <input type="text" name="A4007" value="<?php echo($result->A4007) ;?>" size="3">
        - Aller( 
        <?php	echo $A4001; ?>
        ) </font></td>
      <td><font face="Arial, Helvetica, sans-serif"></font></td>
      <td> <font face="Arial, Helvetica, sans-serif"> GA 
        <input type="text" name="A4008" value="<?php echo($result->A4008) ;?>" size="3">
        - Aller( 
        <?php	echo $A4001; ?>
        ) </font></td>
    </tr>
    <tr align="center"> 
      <td>&nbsp;</td>
      <td><font face="Arial, Helvetica, sans-serif">Pts 
        <input type="text" name="A3201" value="<?php echo($result2->A3201) ;?>" size="2">
        </font></td>
      <td>&nbsp;</td>
      <td><font face="Arial, Helvetica, sans-serif">Pts 
        <input type="text" name="A32012" value="<?php echo($result2->A3201) ;?>" size="2">
        </font></td>
    </tr>
    <tr align="center" bgcolor="#FF0000"> 
      <td colspan="4"><font face="Arial, Helvetica, sans-serif"><b>DEMI FINALE</b></font></td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td><font face="Arial, Helvetica, sans-serif">1</font></td>
      <td width="214"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA2001; ?>
        </font></td>
      <td width="6"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="236"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA2002; ?>
        </font></td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td>&nbsp;</td>
      <td width="214"> <font face="Arial, Helvetica, sans-serif"> GA 
        <input type="text" name="A2001" value="<?php echo($result->A2001) ;?>" size="3">
        - Aller( 
        <?php	echo $A2001; ?>
        ) </font></td>
      <td width="6"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="236"> <font face="Arial, Helvetica, sans-serif"> GA 
        <input type="text" name="A2002" value="<?php echo($result->A2002) ;?>" size="3">
        - Aller( 
        <?php	echo $A2001; ?>
        ) </font></td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td>&nbsp;</td>
      <td width="214"><font face="Arial, Helvetica, sans-serif">Pts 
        <input type="text" name="A32019" value="<?php echo($result2->A3201) ;?>" size="2">
        </font></td>
      <td width="6">&nbsp;</td>
      <td width="236"><font face="Arial, Helvetica, sans-serif">Pts 
        <input type="text" name="A320110" value="<?php echo($result2->A3201) ;?>" size="2">
        </font></td>
    </tr>
    <tr align="center"> 
      <td><font face="Arial, Helvetica, sans-serif">2</font></td>
      <td width="214"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA2003; ?>
        </font></td>
      <td width="6"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="236"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA2004; ?>
        </font></td>
    </tr>
    <tr align="center"> 
      <td>&nbsp;</td>
      <td> <font face="Arial, Helvetica, sans-serif"> GA 
        <input type="text" name="A2003" value="<?php echo($result->A2003) ;?>" size="3">
        - Aller( 
        <?php	echo $A2001; ?>
        ) </font></td>
      <td><font face="Arial, Helvetica, sans-serif"></font></td>
      <td> <font face="Arial, Helvetica, sans-serif"> GA 
        <input type="text" name="A2004" value="<?php echo($result->A2004) ;?>" size="3">
        - Aller( 
        <?php	echo $A2001; ?>
        ) </font></td>
    </tr>
    <tr align="center"> 
      <td>&nbsp;</td>
      <td><font face="Arial, Helvetica, sans-serif">Pts 
        <input type="text" name="A320111" value="<?php echo($result2->A3201) ;?>" size="2">
        </font></td>
      <td>&nbsp;</td>
      <td><font face="Arial, Helvetica, sans-serif">Pts 
        <input type="text" name="A320112" value="<?php echo($result2->A3201) ;?>" size="2">
        </font></td>
    </tr>
    <tr align="center" bgcolor="#FF0000"> 
      <td colspan="4"><font face="Arial, Helvetica, sans-serif"><b>FINALE</b></font></td>
    </tr>
    <tr align="center"> 
      <td rowspan="2"><font face="Arial, Helvetica, sans-serif">1</font></td>
      <td width="214"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1001; ?>
        </font></td>
      <td width="6"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="236"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1002; ?>
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="214"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A1001" value="<?php echo($result->A1001) ;?>" size="3">
        </font></td>
      <td width="6"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="236"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A1002" value="<?php echo($result->A1002) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center" valign="top" bgcolor="#FF0000"> 
      <td colspan="4"> 
        <input type="submit" value="modifier" name="submit">
      </td>
    </tr>
  </table>
</form>

<p>&nbsp;</p>
