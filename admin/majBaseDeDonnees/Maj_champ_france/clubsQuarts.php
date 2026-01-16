<html>
  <head>
<title>modification de donn�es en PHP :: partie2</title>
<meta name=viewport content="width=device-width, initial-scale=1">
</head>
<body>
<p> 
  <?php //$niv=$_GET['niv']; ?>
  <?php // $id=$_POST['id']; ?>
  <?php //echo $id; ?>
  <?php // echo $niv; ?>
  
  	<?php $id=$_GET['id']; ?>
    <?php $annee=$_GET['annee']; 
	
	echo $annee; echo $id;?>
<?php $annee2=($annee.''."_2"); ?> 
<?php require ("../../phases_finales/fonctions_phases_finales.php");?>
  
</p>

<form name="insertion" action="clubsQuarts2.php?annee=<?php echo $annee; ?>" method="POST">
  <b><font size="4"> 
  <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "Lavelan1969&"); 
mysql_select_db("onepip-france-db1"); 
?>
  </font></b> <b><font size="4"> 
  
  
  <?php
  $requete = mysql_query( "SELECT id ,E01, E02, E03, E04, E05, E06, E07, E08
  						  FROM bdpf$annee  
						  WHERE  id = ".$id ) ;

  if( $result = mysql_fetch_object( $requete ) )
  {
  ?>
  <?php
 }
mysql_close(); // D�connexion de MySQL
?>
<?php
$clubA4001=$clubA3201;
$clubA4002=$clubA3202;
$clubA4003=$clubA3203;
$clubA4004=$clubA3204;
$clubA4005=$clubA3205;
$clubA4006=$clubA3206;
$clubA4007=$clubA3207;
$clubA4008=$clubA3208;
?>

  </font></b> 
  <input type="hidden" name="id" value="<?php echo($id) ;?>">
  <table border="0" cellspacing="2" cellpadding="2" width="500">
    <tr align="center"> 
      <td colspan="3"> </td>
    </tr>
    <tr align="center"> 
      <td colspan="3" height="32"> 
        <div align="center"><font color="#FF0000"><b><font size="7" face="Arial, Helvetica, sans-serif"> 
          <?php echo $division; ?>
          </font><font size="5" face="Arial, Helvetica, sans-serif"> <font color="#000000"> 
          ( </font><font color="#FF0000"><b><font size="5" face="Arial, Helvetica, sans-serif"><font color="#000000"> 
          <?php echo $id; ?>
          </font></font></b></font><font color="#000000">)</font><font color="#FF0000"><b><font size="5" face="Arial, Helvetica, sans-serif"><font color="#000000"> 
          <?php echo $annee; ?>
          </font></font></b></font></font></b></font></div>
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="72"><font face="Arial, Helvetica, sans-serif">1</font></td>
      <td width="314"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA4001; ?>
        </font></td>
      <td width="94"> 
        <div align="center"> 
          <input type="text" name="E01" value="<?php echo($result->E01) ;?>" size="3">
        </div>
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="72"><font face="Arial, Helvetica, sans-serif">2</font></td>
      <td width="314"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA4002; ?>
        </font> </td>
      <td width="94"> 
        <div align="center"> 
          <input type="text" name="E02" value="<?php echo($result->E02) ;?>" size="3">
        </div>
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="72"><font face="Arial, Helvetica, sans-serif">3</font></td>
      <td width="314"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA4003; ?>
        </font> </td>
      <td width="94"> 
        <div align="center"> 
          <input type="text" name="E03" value="<?php echo($result->E03) ;?>" size="3">
        </div>
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="72"><font face="Arial, Helvetica, sans-serif">4</font></td>
      <td width="314"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA4004; ?>
        </font> </td>
      <td width="94"> 
        <div align="center"> 
          <input type="text" name="E04" value="<?php echo($result->E04) ;?>" size="3">
        </div>
      </td>
    </tr>
    <tr align="center"> 
      <td width="72"><font face="Arial, Helvetica, sans-serif">5</font></td>
      <td width="314"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA4005; ?>
        </font> </td>
      <td width="94"> 
        <div align="center"> 
          <input type="text" name="E05" value="<?php echo($result->E05) ;?>" size="3">
        </div>
      </td>
    </tr>
    <tr align="center"> 
      <td width="72"><font face="Arial, Helvetica, sans-serif">6</font></td>
      <td width="314"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA4006; ?>
        </font> </td>
      <td width="94"> 
        <div align="center"> 
          <input type="text" name="E06" value="<?php echo($result->E06) ;?>" size="3">
        </div>
      </td>
    </tr>
    <tr align="center"> 
      <td width="72"><font face="Arial, Helvetica, sans-serif">7</font></td>
      <td width="314"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA4007; ?>
        </font> </td>
      <td width="94"> 
        <div align="center"> 
          <input type="text" name="E07" value="<?php echo($result->E07) ;?>" size="3">
        </div>
      </td>
    </tr>
    <tr align="center"> 
      <td width="72"><font face="Arial, Helvetica, sans-serif">8</font></td>
      <td width="314"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA4008; ?>
        </font> </td>
      <td width="94"> 
        <div align="center"> 
          <input type="text" name="E08" value="<?php echo($result->E08) ;?>" size="3">
        </div>
      </td>
    </tr>
    <tr align="center" valign="top" bgcolor="#FF0000"> 
      <td width="72" valign="middle">&nbsp;</td>
      <td colspan="2"> 
        <input type="submit" value="modifier" name="submit">
      </td>
    </tr>
    <tr align="center" valign="top" bgcolor="#FF0000"> 
      <td colspan="3" valign="middle" bgcolor="#00FFFF"><a href="http://francefinalesrugby.franceserv.com/admin/sadmin2.php" target="_top"><b><font face="Arial, Helvetica, sans-serif">Retour 
        &agrave; l'accueil</font></b></a></td>
    </tr>
  </table>
</form>

<p>&nbsp;</p>
