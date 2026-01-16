<html>
  <head>
<title>modification de donn�es en PHP :: partie2</title>
<meta name=viewport content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
<p> 


   <?php
require ("../../../phasesFinales/fonctionListeEquipes.php");
?>
   <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "Lavelan1969&"); 
mysql_select_db("onepip-france-db1"); 
?>
  
</p>

<form name="insertion" action="transfertBD.php?annee=<?php echo $annee;?>&champ=<?php echo $champ;?>&type=<?php echo $type;?>" method="POST">
  <b><font size="4"> 

  </font></b> <b><font size="4"> 
  <?php
  
 
  $requete = mysql_query( "SELECT id ,	E101, E102, E103, E104, E105, E106, E107, E108, E109, E110, E111, E112, E113, E114, E115, E116,
  										E117, E118, E119, E120, E121, E122, E123, E124, E125, E126, E127, E128, E129, E130, E131, E132
					  
						  FROM bdpfClubs 
						  WHERE  division = '$champ' AND annee = $annee ") ;

  if( $result = mysql_fetch_object( $requete ) )
	  {
	   }
mysql_close(); 
?>
  </font></b> 
  <input type="hidden" name="champ" value="<?php echo($champ) ;?>">
  <table border="0" cellspacing="2" cellpadding="2" width="500">
    <tr align="center"> 
      <td colspan="3"> </td>
    </tr>
    <tr align="center">
      <td colspan="3" height="32"><font color="#FF0000"><b><font size="7" face="Arial, Helvetica, sans-serif">
        <?php echo $nomDivision; ?>
        </font></b></font></td>
    </tr>
    <tr align="center" bgcolor="#FF0000"> 
      <td colspan="3" height="32"><font color="#FF0000"><b><font size="7" face="Arial, Helvetica, sans-serif"> 
        </font><font size="5" face="Arial, Helvetica, sans-serif"> <font color="#000000"> 
        ( 
        <?php echo $champ; ?>
        )</font></font></b></font> <font color="#FF0000"><b><font size="5" face="Arial, Helvetica, sans-serif"><font color="#000000"> 
        <?php echo $annee; ?>
        </font></font></b></font></td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="82">1</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1601; ?>
        </font></td>
      <td width="131"> 
        <div align="center"> 
          <input type="text" name="clubA1601" value="<?php echo($result->E101) ;?>" size="3">
        </div>
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="82">2</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1602; ?>
        </font> </td>
      <td width="131"> 
        <div align="center"> 
          <input type="text" name="clubA1602" value="<?php echo($result->E102) ;?>" size="3">
        </div>
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="82">3</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1603; ?>
        </font> </td>
      <td width="131"> 
        <div align="center"> 
          <input type="text" name="clubA1603" value="<?php echo($result->E103) ;?>" size="3">
        </div>
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="82">4</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1604; ?>
        </font> </td>
      <td width="131"> 
        <div align="center"> 
          <input type="text" name="clubA1604" value="<?php echo($result->E104) ;?>" size="3">
        </div>
      </td>
    </tr>
    <tr align="center"> 
      <td width="82">5</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1605; ?>
        </font> </td>
      <td width="131"> 
        <div align="center"> 
          <input type="text" name="clubA1605" value="<?php echo($result->E105) ;?>" size="3">
        </div>
      </td>
    </tr>
    <tr align="center"> 
      <td width="82">6</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1606; ?>
        </font> </td>
      <td width="131"> 
        <div align="center"> 
          <input type="text" name="clubA1606" value="<?php echo($result->E106) ;?>" size="3">
        </div>
      </td>
    </tr>
    <tr align="center"> 
      <td width="82">7</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1607; ?>
        </font> </td>
      <td width="131"> 
        <div align="center"> 
          <input type="text" name="clubA1607" value="<?php echo($result->E107) ;?>" size="3">
        </div>
      </td>
    </tr>
    <tr align="center"> 
      <td width="82">8</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1608; ?>
        </font> </td>
      <td width="131"> 
        <div align="center"> 
          <input type="text" name="clubA1608" value="<?php echo($result->E108) ;?>" size="3">
        </div>
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="82">9</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1609; ?>
        </font> </td>
      <td width="131"> 
        <input type="text" name="clubA1609" value="<?php echo($result->E109) ;?>" size="3">
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="82">10</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1610; ?>
        </font> </td>
      <td width="131"> 
        <input type="text" name="clubA1610" value="<?php echo($result->E110) ;?>" size="3">
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="82">11</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1611; ?>
        </font> </td>
      <td width="131"> 
        <input type="text" name="clubA1611" value="<?php echo($result->E111) ;?>" size="3">
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="82">12</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1612; ?>
        </font> </td>
      <td width="131"> 
        <input type="text" name="clubA1612" value="<?php echo($result->E112) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="82">13</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1613; ?>
        </font> </td>
      <td width="131"> 
        <input type="text" name="clubA1613" value="<?php echo($result->E113) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="82">14</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1614; ?>
        </font> </td>
      <td width="131"> 
        <input type="text" name="clubA1614" value="<?php echo($result->E114) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="82">15</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1615; ?>
        </font> </td>
      <td width="131"> 
        <input type="text" name="clubA1615" value="<?php echo($result->E115) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="82">16</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1616; ?>
        </font> </td>
      <td width="131"> 
        <input type="text" name="clubA1616" value="<?php echo($result->E116) ;?>" size="3">
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="82">17</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1617; ?>
        </font> </td>
      <td width="131"> 
        <input type="text" name="clubA1617" value="<?php echo($result->E117) ;?>" size="3">
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="82">18</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1618; ?>
        </font> </td>
      <td width="131"> 
        <input type="text" name="clubA1618" value="<?php echo($result->E118) ;?>" size="3">
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="82">19</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1619; ?>
        </font> </td>
      <td width="131"> 
        <input type="text" name="clubA1619" value="<?php echo($result->E119) ;?>" size="3">
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="82">20</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1620; ?>
        </font> </td>
      <td width="131"> 
        <input type="text" name="clubA1620" value="<?php echo($result->E120) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="82">21</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1621; ?>
        </font> </td>
      <td width="131"> 
        <input type="text" name="clubA1621" value="<?php echo($result->E121) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="82">22</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1622; ?>
        </font> </td>
      <td width="131"> 
        <input type="text" name="clubA1622" value="<?php echo($result->E122) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="82">23</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1623; ?>
        </font> </td>
      <td width="131"> 
        <input type="text" name="clubA1623" value="<?php echo($result->E123) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="82">24</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1624; ?>
        </font> </td>
      <td width="131"> 
        <input type="text" name="clubA1624" value="<?php echo($result->E124) ;?>" size="3">
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="82">25</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1625; ?>
        </font> </td>
      <td width="131"> 
        <input type="text" name="clubA1625" value="<?php echo($result->E125) ;?>" size="3">
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="82">26</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1626; ?>
        </font> </td>
      <td width="131"> 
        <input type="text" name="clubA1626" value="<?php echo($result->E126) ;?>" size="3">
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="82">27</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1627; ?>
        </font> </td>
      <td width="131"> 
        <input type="text" name="clubA1627" value="<?php echo($result->E127) ;?>" size="3">
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="82">28</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1628; ?>
        </font> </td>
      <td width="131"> 
        <input type="text" name="clubA1628" value="<?php echo($result->E128) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="82">29</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1629; ?>
        </font> </td>
      <td width="131"> 
        <input type="text" name="clubA1629" value="<?php echo($result->E129) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="82">30</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1630; ?>
        </font> </td>
      <td width="131"> 
        <input type="text" name="clubA1630" value="<?php echo($result->E130) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="82">31</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1631; ?>
        </font> </td>
      <td width="131"> 
        <input type="text" name="clubA1631" value="<?php echo($result->E131) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="82">32</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1632; ?>
        </font> </td>
      <td width="131"> 
        <input type="text" name="clubA1632" value="<?php echo($result->E132) ;?>" size="3">
      </td>
    </tr>
    <tr align="center" valign="top" bgcolor="#FF0000"> 
      <td valign="middle" height="36" colspan="3"><a href="http://francefinalesrugby.franceserv.com/admin/Maj_champ_france/superaccueil.php" target="_top"><b></b> 
        </a> 
        <input type="submit" value="modifier" name="submit">
      </td>
    </tr>
    <tr align="center" valign="top" bgcolor="#00FFFF"> 
      <td valign="middle" height="36" colspan="3"><a href="http://francefinalesrugby.franceserv.com/admin/sadmin2.php" target="_top"><b><font face="Arial, Helvetica, sans-serif">Retour 
        &agrave; l'accueil</font></b></a></td>
    </tr>
  </table>
</form>

<p>&nbsp;</p>
