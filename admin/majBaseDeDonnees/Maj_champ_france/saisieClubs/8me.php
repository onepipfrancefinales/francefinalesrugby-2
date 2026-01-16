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
  
 
  $requete = mysql_query( "SELECT id ,	E101, E102, E103, E104, E105, E106, E107, E108,
  										E109, E110, E111, E112, E113, E114, E115, E116
  										
						  FROM bdpfClubs 
						  WHERE  division = $champ AND annee = $annee ") ;

  if( $result = mysql_fetch_object( $requete ) )
  {
  ?>
  <?php
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
      <td colspan="3" height="32"><font color="#FF0000"><b><font size="5" face="Arial, Helvetica, sans-serif"> 
        </font><font color="#FF0000"><b><font size="5" face="Arial, Helvetica, sans-serif">
        <?php echo $nomDivision; ?>
        </font></b></font></b></font></td>
    </tr>
    <tr align="center"> 
      <td colspan="3" height="32"><font color="#FF0000"><b><font size="5" face="Arial, Helvetica, sans-serif"> 
        </font><font size="5" face="Arial, Helvetica, sans-serif"> <font color="#000000"> 
        ( 
        <?php echo $id; ?>
        )</font></font></b></font> <font color="#FF0000"><b><font size="5" face="Arial, Helvetica, sans-serif"><font color="#000000"> 
        <?php echo $annee; ?>
        </font></font></b></font></td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="82">1</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA8001; ?>
        </font></td>
      <td width="131"> 
        <div align="center"> 
          <input type="text" name="clubA8001" value="<?php echo($result->E101) ;?>" size="3">
        </div>
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="82">2</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA8002; ?>
        </font> </td>
      <td width="131"> 
        <div align="center"> 
          <input type="text" name="clubA8002" value="<?php echo($result->E102) ;?>" size="3">
        </div>
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="82">3</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA8003; ?>
        </font> </td>
      <td width="131"> 
        <div align="center"> 
          <input type="text" name="clubA8003" value="<?php echo($result->E103) ;?>" size="3">
        </div>
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="82">4</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA8004; ?>
        </font> </td>
      <td width="131"> 
        <div align="center"> 
          <input type="text" name="clubA8004" value="<?php echo($result->E104) ;?>" size="3">
        </div>
      </td>
    </tr>
    <tr align="center"> 
      <td width="82">5</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA8005; ?>
        </font> </td>
      <td width="131"> 
        <div align="center"> 
          <input type="text" name="clubA8005" value="<?php echo($result->E105) ;?>" size="3">
        </div>
      </td>
    </tr>
    <tr align="center"> 
      <td width="82">6</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA8006; ?>
        </font> </td>
      <td width="131"> 
        <div align="center"> 
          <input type="text" name="clubA8006" value="<?php echo($result->E106) ;?>" size="3">
        </div>
      </td>
    </tr>
    <tr align="center"> 
      <td width="82">7</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA8007; ?>
        </font> </td>
      <td width="131"> 
        <div align="center"> 
          <input type="text" name="clubA8007" value="<?php echo($result->E107) ;?>" size="3">
        </div>
      </td>
    </tr>
    <tr align="center"> 
      <td width="82">8</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA8008; ?>
        </font> </td>
      <td width="131"> 
        <div align="center"> 
          <input type="text" name="clubA8008" value="<?php echo($result->E108) ;?>" size="3">
        </div>
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="82">9</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA8009; ?>
        </font> </td>
      <td width="131"> 
        <input type="text" name="clubA8009" value="<?php echo($result->E109) ;?>" size="3">
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="82">10</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA8010; ?>
        </font> </td>
      <td width="131"> 
        <input type="text" name="clubA8010" value="<?php echo($result->E110) ;?>" size="3">
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="82">11</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA8011; ?>
        </font> </td>
      <td width="131"> 
        <input type="text" name="clubA8011" value="<?php echo($result->E111) ;?>" size="3">
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="82">12</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA8012; ?>
        </font> </td>
      <td width="131"> 
        <input type="text" name="clubA8012" value="<?php echo($result->E112) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="82">13</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA8013; ?>
        </font> </td>
      <td width="131"> 
        <input type="text" name="clubA8013" value="<?php echo($result->E113) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="82">14</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA8014; ?>
        </font> </td>
      <td width="131"> 
        <input type="text" name="clubA8014" value="<?php echo($result->E114) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="82">15</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA8015; ?>
        </font> </td>
      <td width="131"> 
        <input type="text" name="clubA8015" value="<?php echo($result->E115) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="82">16</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA8016; ?>
        </font> </td>
      <td width="131"> 
        <input type="text" name="clubA8016" value="<?php echo($result->E116) ;?>" size="3">
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
