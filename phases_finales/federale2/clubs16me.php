<html>
  <head>
<title>modification de données en PHP :: partie2</title>
<meta name=viewport content="width=device-width, initial-scale=1">
</head>
<body>
<p> 
  <?php $niv=$_GET['niv']; ?>
  <?php $id=$_GET['id']; ?>
  <?php echo $id; ?>
  <?php  echo $niv; ?>
  <?php $annee=2017; ?>
  <?php $annee2='2017_2';?>
  
  <?php require ("../../phases_finales/fonctions_phases_finales.php");?>
  
</p>

<form name="insertion" action="clubs16me2.php" method="POST">
  <b><font size="4"> 
  <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); 
mysql_select_db("onepip-france-db1"); 
?>
  </font></b> <b><font size="4"> 
  <?php
  
 
  $requete = mysql_query( "SELECT id ,E01, E03, E05, E07, E09, E11, E13, E15, E17, E19, E21, E23, E25, E27, E29, E31,
  									  E33, E35, E37, E39, E41, E43, E45, E47, E49, E51, E53, E55, E57, E59, E61, E63 FROM bdpf$annee  WHERE  id = ".$id ) ;
  if( $result = mysql_fetch_object( $requete ) )
  {
  ?>
  <?php
 }
mysql_close(); // Déconnexion de MySQL
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
          ( 
          <?php echo $id; ?>
          ) </font><font color="#FF0000"><b><font size="5" face="Arial, Helvetica, sans-serif"><font color="#000000">
          <?php echo $annee; ?>
          </font></font></b></font></font></b></font></div>
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="75"><font face="Arial, Helvetica, sans-serif">1</font></td>
      <td width="289"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1601; ?>
        </font></td>
      <td width="116"> 
        <div align="center"> 
          <input type="text" name="E01" value="<?php echo($result->E01) ;?>" size="3">
        </div>
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="75"><font face="Arial, Helvetica, sans-serif">2</font></td>
      <td width="289"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1602; ?>
        </font> </td>
      <td width="116"> 
        <div align="center"> 
          <input type="text" name="E03" value="<?php echo($result->E03) ;?>" size="3">
        </div>
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="75"><font face="Arial, Helvetica, sans-serif">3</font></td>
      <td width="289"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1603; ?>
        </font> </td>
      <td width="116"> 
        <div align="center"> 
          <input type="text" name="E05" value="<?php echo($result->E05) ;?>" size="3">
        </div>
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="75"><font face="Arial, Helvetica, sans-serif">4</font></td>
      <td width="289"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1604; ?>
        </font> </td>
      <td width="116"> 
        <div align="center"> 
          <input type="text" name="E07" value="<?php echo($result->E07) ;?>" size="3">
        </div>
      </td>
    </tr>
    <tr align="center"> 
      <td width="75"><font face="Arial, Helvetica, sans-serif">5</font></td>
      <td width="289"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1605; ?>
        </font> </td>
      <td width="116"> 
        <div align="center"> 
          <input type="text" name="E09" value="<?php echo($result->E09) ;?>" size="3">
        </div>
      </td>
    </tr>
    <tr align="center"> 
      <td width="75"><font face="Arial, Helvetica, sans-serif">6</font></td>
      <td width="289"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1606; ?>
        </font> </td>
      <td width="116"> 
        <div align="center"> 
          <input type="text" name="E11" value="<?php echo($result->E11) ;?>" size="3">
        </div>
      </td>
    </tr>
    <tr align="center"> 
      <td width="75"><font face="Arial, Helvetica, sans-serif">7</font></td>
      <td width="289"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1607; ?>
        </font> </td>
      <td width="116"> 
        <div align="center"> 
          <input type="text" name="E13" value="<?php echo($result->E13) ;?>" size="3">
        </div>
      </td>
    </tr>
    <tr align="center"> 
      <td width="75"><font face="Arial, Helvetica, sans-serif">8</font></td>
      <td width="289"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1608; ?>
        </font> </td>
      <td width="116"> 
        <div align="center"> 
          <input type="text" name="E15" value="<?php echo($result->E15) ;?>" size="3">
        </div>
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="75"><font face="Arial, Helvetica, sans-serif">9</font></td>
      <td width="289"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1609; ?>
        </font> </td>
      <td width="116"> 
        <input type="text" name="E17" value="<?php echo($result->E17) ;?>" size="3">
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="75"><font face="Arial, Helvetica, sans-serif">10</font></td>
      <td width="289"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1610; ?>
        </font> </td>
      <td width="116"> 
        <input type="text" name="E19" value="<?php echo($result->E19) ;?>" size="3">
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="75"><font face="Arial, Helvetica, sans-serif">11</font></td>
      <td width="289"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1611; ?>
        </font> </td>
      <td width="116"> 
        <input type="text" name="E21" value="<?php echo($result->E21) ;?>" size="3">
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="75"><font face="Arial, Helvetica, sans-serif">12</font></td>
      <td width="289"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1612; ?>
        </font> </td>
      <td width="116"> 
        <input type="text" name="E23" value="<?php echo($result->E23) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="75"><font face="Arial, Helvetica, sans-serif">13</font></td>
      <td width="289"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1613; ?>
        </font> </td>
      <td width="116"> 
        <input type="text" name="E25" value="<?php echo($result->E25) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="75"><font face="Arial, Helvetica, sans-serif">14</font></td>
      <td width="289"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1614; ?>
        </font> </td>
      <td width="116"> 
        <input type="text" name="E27" value="<?php echo($result->E27) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="75"><font face="Arial, Helvetica, sans-serif">15</font></td>
      <td width="289"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1615; ?>
        </font> </td>
      <td width="116"> 
        <input type="text" name="E29" value="<?php echo($result->E29) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="75"><font face="Arial, Helvetica, sans-serif">16</font></td>
      <td width="289"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1616; ?>
        </font> </td>
      <td width="116"> 
        <input type="text" name="E31" value="<?php echo($result->E31) ;?>" size="3">
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="75"><font face="Arial, Helvetica, sans-serif">17</font></td>
      <td width="289"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1617; ?>
        </font> </td>
      <td width="116"> 
        <input type="text" name="E33" value="<?php echo($result->E33) ;?>" size="3">
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="75"><font face="Arial, Helvetica, sans-serif">18</font></td>
      <td width="289"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1618; ?>
        </font> </td>
      <td width="116"> 
        <input type="text" name="E35" value="<?php echo($result->E35) ;?>" size="3">
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="75"><font face="Arial, Helvetica, sans-serif">19</font></td>
      <td width="289"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1619; ?>
        </font> </td>
      <td width="116"> 
        <input type="text" name="E37" value="<?php echo($result->E37) ;?>" size="3">
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="75"><font face="Arial, Helvetica, sans-serif">20</font></td>
      <td width="289"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1620; ?>
        </font> </td>
      <td width="116"> 
        <input type="text" name="E39" value="<?php echo($result->E39) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="75"><font face="Arial, Helvetica, sans-serif">21</font></td>
      <td width="289"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1621; ?>
        </font> </td>
      <td width="116"> 
        <input type="text" name="E41" value="<?php echo($result->E41) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="75"><font face="Arial, Helvetica, sans-serif">22</font></td>
      <td width="289"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1622; ?>
        </font> </td>
      <td width="116"> 
        <input type="text" name="E43" value="<?php echo($result->E43) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="75"><font face="Arial, Helvetica, sans-serif">23</font></td>
      <td width="289"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1623; ?>
        </font> </td>
      <td width="116"> 
        <input type="text" name="E45" value="<?php echo($result->E45) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="75"><font face="Arial, Helvetica, sans-serif">24</font></td>
      <td width="289"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1624; ?>
        </font> </td>
      <td width="116"> 
        <input type="text" name="E47" value="<?php echo($result->E47) ;?>" size="3">
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="75"><font face="Arial, Helvetica, sans-serif">25</font></td>
      <td width="289"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1625; ?>
        </font> </td>
      <td width="116"> 
        <input type="text" name="E49" value="<?php echo($result->E49) ;?>" size="3">
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="75"><font face="Arial, Helvetica, sans-serif">26</font></td>
      <td width="289"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1626; ?>
        </font> </td>
      <td width="116"> 
        <input type="text" name="E51" value="<?php echo($result->E51) ;?>" size="3">
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="75"><font face="Arial, Helvetica, sans-serif">27</font></td>
      <td width="289"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1627; ?>
        </font> </td>
      <td width="116"> 
        <input type="text" name="E53" value="<?php echo($result->E53) ;?>" size="3">
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="75"><font face="Arial, Helvetica, sans-serif">28</font></td>
      <td width="289"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1628; ?>
        </font> </td>
      <td width="116"> 
        <input type="text" name="E55" value="<?php echo($result->E55) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="75"><font face="Arial, Helvetica, sans-serif">29</font></td>
      <td width="289"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1629; ?>
        </font> </td>
      <td width="116"> 
        <input type="text" name="E57" value="<?php echo($result->E57) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="75"><font face="Arial, Helvetica, sans-serif">30</font></td>
      <td width="289"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1630; ?>
        </font> </td>
      <td width="116"> 
        <input type="text" name="E59" value="<?php echo($result->E59) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="75"><font face="Arial, Helvetica, sans-serif">31</font></td>
      <td width="289"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1631; ?>
        </font> </td>
      <td width="116"> 
        <input type="text" name="E61" value="<?php echo($result->E61) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="75"><font face="Arial, Helvetica, sans-serif">32</font></td>
      <td width="289"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1632; ?>
        </font> </td>
      <td width="116"> 
        <input type="text" name="E63" value="<?php echo($result->E63) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="75">&nbsp;</td>
      <td width="289">&nbsp;</td>
      <td width="116">&nbsp;</td>
    </tr>
    <tr align="center" valign="top" bgcolor="#FF0000"> 
      <td valign="middle" width="75"><a href="http://francefinalesrugby.franceserv.com/admin/Maj_champ_france/superaccueil.php" target="_top"><b><font face="Arial, Helvetica, sans-serif">Retour 
        </font></b> </a> </td>
      <td colspan="2"> 
        <input type="submit" value="modifier" name="submit">
      </td>
    </tr>
  </table>
</form>

<p>&nbsp;</p>
