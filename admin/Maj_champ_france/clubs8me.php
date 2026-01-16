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

<form name="insertion" action="clubs8me2.php?annee=<?php echo $annee; ?>" method="POST">
  <b><font size="4"> 
  <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "Lavelan1969&"); 
mysql_select_db("onepip-france-db1"); 
?>
  </font></b> <b><font size="4"> 
  
  
  <?php
  
 
  $requete = mysql_query( "SELECT id ,E01, E05, E09, E13, E17, E21, E25, E29,
  									  E33, E37, E41, E45, E49, E53, E57, E61 FROM bdpf$annee  WHERE  id = ".$id ) ;

  if( $result = mysql_fetch_object( $requete ) )
  {
  ?>
  <?php
 }
mysql_close(); // D�connexion de MySQL
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
        <?php	echo $clubA8001; ?>
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
        <?php	echo $clubA8002; ?>
        </font> </td>
      <td width="94"> 
        <div align="center"> 
          <input type="text" name="E05" value="<?php echo($result->E05) ;?>" size="3">
        </div>
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="72"><font face="Arial, Helvetica, sans-serif">3</font></td>
      <td width="314"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA8003; ?>
        </font> </td>
      <td width="94"> 
        <div align="center"> 
          <input type="text" name="E09" value="<?php echo($result->E09) ;?>" size="3">
        </div>
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="72"><font face="Arial, Helvetica, sans-serif">4</font></td>
      <td width="314"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA8004; ?>
        </font> </td>
      <td width="94"> 
        <div align="center"> 
          <input type="text" name="E13" value="<?php echo($result->E13) ;?>" size="3">
        </div>
      </td>
    </tr>
    <tr align="center"> 
      <td width="72"><font face="Arial, Helvetica, sans-serif">5</font></td>
      <td width="314"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA8005; ?>
        </font> </td>
      <td width="94"> 
        <div align="center"> 
          <input type="text" name="E17" value="<?php echo($result->E17) ;?>" size="3">
        </div>
      </td>
    </tr>
    <tr align="center"> 
      <td width="72"><font face="Arial, Helvetica, sans-serif">6</font></td>
      <td width="314"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA8006; ?>
        </font> </td>
      <td width="94"> 
        <div align="center"> 
          <input type="text" name="E21" value="<?php echo($result->E21) ;?>" size="3">
        </div>
      </td>
    </tr>
    <tr align="center"> 
      <td width="72"><font face="Arial, Helvetica, sans-serif">7</font></td>
      <td width="314"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA8007; ?>
        </font> </td>
      <td width="94"> 
        <div align="center"> 
          <input type="text" name="E25" value="<?php echo($result->E25) ;?>" size="3">
        </div>
      </td>
    </tr>
    <tr align="center"> 
      <td width="72"><font face="Arial, Helvetica, sans-serif">8</font></td>
      <td width="314"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA8008; ?>
        </font> </td>
      <td width="94"> 
        <div align="center"> 
          <input type="text" name="E29" value="<?php echo($result->E29) ;?>" size="3">
        </div>
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="72"><font face="Arial, Helvetica, sans-serif">9</font></td>
      <td width="314"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA8009; ?>
        </font> </td>
      <td width="94"> 
        <input type="text" name="E33" value="<?php echo($result->E33) ;?>" size="3">
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="72"><font face="Arial, Helvetica, sans-serif">10</font></td>
      <td width="314"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA8010; ?>
        </font> </td>
      <td width="94"> 
        <input type="text" name="E37" value="<?php echo($result->E37) ;?>" size="3">
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="72"><font face="Arial, Helvetica, sans-serif">11</font></td>
      <td width="314"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA8011; ?>
        </font> </td>
      <td width="94"> 
        <input type="text" name="E41" value="<?php echo($result->E41) ;?>" size="3">
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="72"><font face="Arial, Helvetica, sans-serif">12</font></td>
      <td width="314"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA8012; ?>
        </font> </td>
      <td width="94"> 
        <input type="text" name="E45" value="<?php echo($result->E45) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="72"><font face="Arial, Helvetica, sans-serif">13</font></td>
      <td width="314"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA8013; ?>
        </font> </td>
      <td width="94"> 
        <input type="text" name="E49" value="<?php echo($result->E49) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="72"><font face="Arial, Helvetica, sans-serif">14</font></td>
      <td width="314"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA8014; ?>
        </font> </td>
      <td width="94"> 
        <input type="text" name="E53" value="<?php echo($result->E53) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="72"><font face="Arial, Helvetica, sans-serif">15</font></td>
      <td width="314"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA8015; ?>
        </font> </td>
      <td width="94"> 
        <input type="text" name="E57" value="<?php echo($result->E57) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="72"><font face="Arial, Helvetica, sans-serif">16</font></td>
      <td width="314"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA8016; ?>
        </font> </td>
      <td width="94"> 
        <input type="text" name="E61" value="<?php echo($result->E61) ;?>" size="3">
      </td>
    </tr>
    <tr align="center" valign="top" bgcolor="#FF0000"> 
      <td width="72" valign="middle">&nbsp;</td>
      <td colspan="2"> 
        <input type="submit" value="modifier" name="submit">
      </td>
    </tr>
    <tr align="center" valign="top" bgcolor="#00FFFF"> 
      <td colspan="3" valign="middle"><a href="http://francefinalesrugby.franceserv.com/admin/sadmin2.php" target="_top"><b><font face="Arial, Helvetica, sans-serif">Retour 
        &agrave; l'accueil</font></b></a></td>
    </tr>
  </table>
</form>

<p>&nbsp;</p>
