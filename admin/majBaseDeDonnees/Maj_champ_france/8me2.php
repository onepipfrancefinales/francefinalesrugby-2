<html>
  <head>
<title>modification de donn�es en PHP :: partie2</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name=viewport content="width=device-width, initial-scale=1">
</head>

<body>

<?php $niv=$_GET['niv']; ?>
<?php $id=$_POST['id']; ?>
<?php $annee=$_GET['annee']; ?>

<?php echo $id; ?> - 
<?php echo $niv; ?> - 
<?php echo $annee; ?>


<?php $annee2=($annee.''."_2"); ?> 

<?php echo $annee; ?>


<?php require ("../../phases_finales/fonctions_phases_finales.php");?>
<form name="insertion" action="<?php echo $niv ;?>3.php?annee=<?php echo $annee; ?>&niv=<?php echo $niv; ?>" method="POST">
  <b><font size="4"> 
  <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "Lavelan1969&"); 
mysql_select_db("onepip-france-db1"); 
?>
  </font></b> <b><font size="4"> 
  <?php
  
 
  $requete = mysql_query( "SELECT id, A8001, A8002, A8003, A8004 ,A8005, A8006, A8007, A8008,
  									  A8009, A8010, A8011, A8012, A8013, A8014, A8015, A8016 FROM bdpf$annee2 WHERE  id = ".$id ) ;
 

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
    <tr align="center"> 
      <td colspan="4" height="32" bgcolor="#FF0000"> <b><font size="4" face="Arial, Helvetica, sans-serif">8me 
        de Finale 
        <?php echo $division; ?>
        ( 
        <?php echo $id; ?>
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
        <input type="text" name="A8001" value="<?php echo($result->A8001) ;?>" size="3">
        </font></td>
      <td width="6" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="236" bgcolor="#CCCCCC"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A8002" value="<?php echo($result->A8002) ;?>" size="3">
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
      <td width="214"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A8003" value="<?php echo($result->A8003) ;?>" size="3">
        </font></td>
      <td width="6"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="236"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A8004" value="<?php echo($result->A8004) ;?>" size="3">
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
        <input type="text" name="A8005" value="<?php echo($result->A8005) ;?>" size="3">
        </font></td>
      <td width="6" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="236" bgcolor="#CCCCCC"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A8006" value="<?php echo($result->A8006) ;?>" size="3">
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
      <td width="214"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A8007" value="<?php echo($result->A8007) ;?>" size="3">
        </font></td>
      <td width="6"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="236"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A8008" value="<?php echo($result->A8008) ;?>" size="3">
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
        <input type="text" name="A8009" value="<?php echo($result->A8009) ;?>" size="3">
        </font></td>
      <td width="6" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="236" bgcolor="#CCCCCC"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A8010" value="<?php echo($result->A8010) ;?>" size="3">
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
      <td width="214"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A8011" value="<?php echo($result->A8011) ;?>" size="3">
        </font></td>
      <td width="6"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="236"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A8012" value="<?php echo($result->A8012) ;?>" size="3">
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
        <input type="text" name="A8013" value="<?php echo($result->A8013) ;?>" size="3">
        </font></td>
      <td width="6" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="236" bgcolor="#CCCCCC"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A8014" value="<?php echo($result->A8014) ;?>" size="3">
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
      <td width="214"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A8015" value="<?php echo($result->A8015) ;?>" size="3">
        </font></td>
      <td width="6"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="236"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A8016" value="<?php echo($result->A8016) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center" valign="top"> 
      <td colspan="4" bgcolor="#FF0000"> 
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
