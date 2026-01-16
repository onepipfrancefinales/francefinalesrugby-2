<html>
  <head>
<title>modification de donn�es en PHP :: partie2</title>

<meta name=viewport content="width=device-width, initial-scale=1">
</head>

<body>

<?php
$annee=$_GET['annee']; 
$champ=$_GET['champ'];
$type=$_GET['type'];
$AR=$_GET['AR'];
;
$id=$champ;

require ("../../../phasesFinales/fonctionListeEquipes.php");	
require ("../../../phasesFinales/fonctionScores.php");


?>
<form name="insertion" action="transfertScores.php?champ=<?php echo $champ; ?>&annee=<?php echo $annee; ?>&type=4&AR=<?php echo $AR; ?>" method="POST">
  <b><font size="4"> 
  
  </font></b> <b><font size="4"> 
  <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "Lavelan1969&"); 
mysql_select_db("onepip-france-db1"); 
?>
 
  <?php
											
			$requete = mysql_query( "SELECT id , A4001, A4002, A4003, A4004,
												 A4005, A4006, A4007, A4008,
												 A2001, A2002, A2003, A2004,
												 A1001, A1002
    					   			  FROM bdpfScoresA
									  WHERE  id = $id and annee=$annee") ;			
												
 
  if( $result = mysql_fetch_object( $requete ) )
  {
  ?>
  <?php
 }
mysql_close(); 
?>
  </font></b> 
  <input type="hidden" name="division" value="<?php echo($division) ;?>">
  <font face="Arial, Helvetica, sans-serif"> </font> 
  <table border="0" cellspacing="0" cellpadding="10" width="400">
    <tr align="center"> 
      <td colspan="4"> </td>
    </tr>
    <tr align="center">
      <td colspan="4" bgcolor="#FF0000"><font face="Arial, Helvetica, sans-serif"><b><font size="4" face="Arial, Helvetica, sans-serif"> 
        <?php echo $nomDivision; ?>
        </font></b></font></td>
    </tr>
    <tr align="center"> 
      <td colspan="4" bgcolor="#FF0000"><font face="Arial, Helvetica, sans-serif"><b>QUARTS 
        DE FINALE<font size="4" face="Arial, Helvetica, sans-serif"> 
        <?php echo $division; ?>
        ( 
        <?php echo $id; ?>
        ) 
        <?php echo $annee; ?>
        </font></b></font></td>
    </tr>
    <tr align="center"> 
      <td width="10">1</td>
      <td width="167"> 
        <p><font face="Arial, Helvetica, sans-serif"> 
          <?php	echo $clubA4001; ?>
          </font></p>
        <p><font face="Arial, Helvetica, sans-serif"> 
          <input type="text" name="A4001" value="<?php echo($result->A4001) ;?>" size="3">
          </font></p>
      </td>
      <td width="5">&nbsp;</td>
      <td width="138"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA4002; ?>
        <br>
        <br>
        <input type="text" name="A4002" value="<?php echo($result->A4002) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="10">2</td>
      <td width="167"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA4003; ?>
        <br>
        <br>
        <input type="text" name="A4003" value="<?php echo($result->A4003) ;?>" size="3">
        </font></td>
      <td width="5">&nbsp;</td>
      <td width="138"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA4004; ?>
        <br>
        <br>
        <input type="text" name="A4004" value="<?php echo($result->A4004) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="10">3</td>
      <td width="167"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA4005; ?>
        <br>
        <br>
        <input type="text" name="A4005" value="<?php echo($result->A4005) ;?>" size="3">
        </font></td>
      <td width="5"><font face="Arial, Helvetica, sans-serif"> </font></td>
      <td width="138"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA4006; ?>
        <br>
        <br>
        <input type="text" name="A4006" value="<?php echo($result->A4006) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="10">4</td>
      <td width="167"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA4007; ?>
        <br>
        <br>
        <input type="text" name="A4007" value="<?php echo($result->A4007) ;?>" size="3">
        </font></td>
      <td width="5">&nbsp;</td>
      <td width="138"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA4008; ?>
        <br>
        <br>
        <input type="text" name="A4008" value="<?php echo($result->A4008) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center" bgcolor="#CCCC00"> 
      <td colspan="4"><font face="Arial, Helvetica, sans-serif"><b>DEMI FINALE</b></font></td>
    </tr>
    <tr align="center"> 
      <td width="10"><font face="Arial, Helvetica, sans-serif">1</font></td>
      <td width="167"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA2001; ?>
        <br>
        <br>
        <input type="text" name="A2001" value="<?php echo($result->A2001) ;?>" size="3">
        </font></td>
      <td width="5"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="138"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA2002; ?>
        <br>
        <br>
        <input type="text" name="A2002" value="<?php echo($result->A2002) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="10"><font face="Arial, Helvetica, sans-serif">2</font></td>
      <td width="167"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA2003; ?>
        <br>
        <br>
        <input type="text" name="A2003" value="<?php echo($result->A2003) ;?>" size="3">
        </font></td>
      <td width="5"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="138"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA2004; ?>
        <br>
        <br>
        <input type="text" name="A2004" value="<?php echo($result->A2004) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center" valign="top" bgcolor="#FF9900"> 
      <td colspan="4"><font face="Arial, Helvetica, sans-serif"><b>FINALE</b></font></td>
    </tr>
    <tr align="center" valign="top"> 
      <td valign="middle">1</td>
      <td><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1001; ?>
        <br>
        <br>
        <input type="text" name="A1001" value="<?php echo($result->A1001) ;?>" size="3">
        </font></td>
      <td>&nbsp;</td>
      <td><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1002; ?>
        <br>
        <br>
        <input type="text" name="A1002" value="<?php echo($result->A1002) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center" valign="top" bgcolor="#FF9900"> 
      <td colspan="4"> 
        <input type="submit" value="modifier" name="submit">
      </td>
    </tr>
    <tr align="center" valign="top"> 
      <td colspan="4"><a href="../../../phasesfinalesterr/majFinalesTerr/accueilMAJ.php"><b>Retour 
        accueil</b></a></td>
    </tr>
  </table>
</form>



<p>&nbsp;</p>
</body>
</html>
