<html>
  <head>
<title>16me</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name=viewport content="width=device-width, initial-scale=1">
<link type="text/css" rel="stylesheet" href="Mef.css"/>
</head>
<body>
<?php 

$annee=$_GET['annee'];
$champ=$_GET['champ']; 
$id=$champ;

echo $annee; 
echo $id; 
 


require ("../../../phasesFinales/fonctionListeEquipes.php");	
require ("../../../phasesFinales/fonctionScores.php");
 
?>
<?php

if ($AR==1)
{
?>
<form name="insertion" action="transfertScores.php?annee=<?php echo $annee;?>&champ=<?php echo $champ; ?>&type=16&AR=<?php echo $AR; ?>" method="POST">
  <b><font size="4"> 
  <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "Lavelan1969&"); 
mysql_select_db("onepip-france-db1"); 
?>
  </font></b> <b><font size="4"> 
  <?php
  
 
  $requete = mysql_query( "	SELECT id ,A1601, A1602, A1603, A1604 ,A1605, A1606, A1607, A1608, A1609, A1610, A1611, A1612, A1613, A1614, A1615, A1616,
  									   A1617, A1618, A1619, A1620 ,A1621, A1622, A1623, A1624, A1625, A1626, A1627, A1628, A1629, A1630, A1631, A1632 
							FROM bdpfScoresA 
							WHERE  division = $champ AND annee=$annee" ) ;
 

  if( $result = mysql_fetch_object( $requete ) )
  {
  
 }
mysql_close(); 
?>
  </font></b> 
  <input type="hidden" name="id" value="<?php echo($id) ;?>">
  <table border="0" cellspacing="0" cellpadding="10" width="100%">
    <tr align="center"> 
      <td colspan="4"> </td>
    </tr>
    <tr align="center" bgcolor="#FF0000">
      <td colspan="4" height="32"><b><font size="4" face="Arial, Helvetica, sans-serif">
        <?php echo $nomDivision; ?>
        </font></b></td>
    </tr>
    <tr align="center" bgcolor="#FF0000"> 
      <td colspan="4" height="32"><b><font size="4" face="Arial, Helvetica, sans-serif">16me 
        de Finale ( 
        <?php echo $id; ?>
        ) 
        <?php echo $annee; ?>
        </font></b></td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td rowspan="2"><font face="Arial, Helvetica, sans-serif">1</font></td>
      <td width="223"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1601; ?>
        </font></td>
      <td width="6"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="240"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1602; ?>
        </font></td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="223"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A1601" value="<?php echo($result->A1601) ;?>" size="3">
        </font></td>
      <td width="6"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="240"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A1602" value="<?php echo($result->A1602) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center"> 
      <td rowspan="2"><font face="Arial, Helvetica, sans-serif">2</font></td>
      <td width="223"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1603; ?>
        </font></td>
      <td width="6"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="240"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1604; ?>
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="223"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A1603" value="<?php echo($result->A1603) ;?>" size="3">
        </font></td>
      <td width="6"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="240"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A1604" value="<?php echo($result->A1604) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td rowspan="2"><font face="Arial, Helvetica, sans-serif">3</font></td>
      <td width="223"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1605; ?>
        </font></td>
      <td width="6"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="240"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1606; ?>
        </font></td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="223"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A1605" value="<?php echo($result->A1605) ;?>" size="3">
        </font></td>
      <td width="6"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="240"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A1606" value="<?php echo($result->A1606) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center"> 
      <td rowspan="2"><font face="Arial, Helvetica, sans-serif">4</font></td>
      <td width="223"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1607; ?>
        </font></td>
      <td width="6"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="200"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1608; ?>
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="200"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A1607" value="<?php echo($result->A1607) ;?>" size="3">
        </font></td>
      <td width="6"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="240"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A1608" value="<?php echo($result->A1608) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td rowspan="2"><font face="Arial, Helvetica, sans-serif">5</font></td>
      <td width="223"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1609; ?>
        </font></td>
      <td width="6"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="240"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1610; ?>
        </font></td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="223"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A1609" value="<?php echo($result->A1609) ;?>" size="3">
        </font></td>
      <td width="6"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="240"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A1610" value="<?php echo($result->A1610) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center"> 
      <td rowspan="2"><font face="Arial, Helvetica, sans-serif">6</font></td>
      <td width="223"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1611; ?>
        </font></td>
      <td width="6"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="240"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1612; ?>
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="223"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A1611" value="<?php echo($result->A1611) ;?>" size="3">
        </font></td>
      <td width="6"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="240"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A1612" value="<?php echo($result->A1612) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td rowspan="2"><font face="Arial, Helvetica, sans-serif">7</font></td>
      <td width="223"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1613; ?>
        </font></td>
      <td width="6"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="240"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1614; ?>
        </font></td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="223"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A1613" value="<?php echo($result->A1613) ;?>" size="3">
        </font></td>
      <td width="6"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="240"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A1614" value="<?php echo($result->A1614) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center"> 
      <td rowspan="2"><font face="Arial, Helvetica, sans-serif">8</font></td>
      <td width="223"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1615; ?>
        </font></td>
      <td width="6"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="240"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1616; ?>
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="223"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A1615" value="<?php echo($result->A1615) ;?>" size="3">
        </font></td>
      <td width="6"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="240"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A1616" value="<?php echo($result->A1616) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td rowspan="2"><font face="Arial, Helvetica, sans-serif">9</font></td>
      <td width="223"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1617; ?>
        </font></td>
      <td width="6"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="240"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1618; ?>
        </font></td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="223"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A1617" value="<?php echo($result->A1617) ;?>" size="3">
        </font></td>
      <td width="6"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="240"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A1618" value="<?php echo($result->A1618) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center"> 
      <td rowspan="2"><font face="Arial, Helvetica, sans-serif">10</font></td>
      <td width="223"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1619; ?>
        </font></td>
      <td width="6"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="240"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1620; ?>
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="223"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A1619" value="<?php echo($result->A1619) ;?>" size="3">
        </font></td>
      <td width="6"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="240"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A1620" value="<?php echo($result->A1620) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td rowspan="2"><font face="Arial, Helvetica, sans-serif">11</font></td>
      <td width="223"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1621; ?>
        </font></td>
      <td width="6"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="240"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1622; ?>
        </font></td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="223"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A1621" value="<?php echo($result->A1621) ;?>" size="3">
        </font></td>
      <td width="6"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="240"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A1622" value="<?php echo($result->A1622) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center"> 
      <td rowspan="2"><font face="Arial, Helvetica, sans-serif">12</font></td>
      <td width="223"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1623; ?>
        </font></td>
      <td width="6"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="240"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1624; ?>
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="223"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A1623" value="<?php echo($result->A1623) ;?>" size="3">
        </font></td>
      <td width="6"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="240"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A1624" value="<?php echo($result->A1624) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td rowspan="2"><font face="Arial, Helvetica, sans-serif">13</font></td>
      <td width="223"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1625; ?>
        </font></td>
      <td width="6"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="240"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1626; ?>
        </font></td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="223"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A1625" value="<?php echo($result->A1625) ;?>" size="3">
        </font></td>
      <td width="6"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="240"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A1626" value="<?php echo($result->A1626) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center"> 
      <td rowspan="2"><font face="Arial, Helvetica, sans-serif">14</font></td>
      <td width="223"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1627; ?>
        </font></td>
      <td width="6"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="240"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1628; ?>
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="223"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A1627" value="<?php echo($result->A1627) ;?>" size="3">
        </font></td>
      <td width="6"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="240"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A1628" value="<?php echo($result->A1628) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td rowspan="2"><font face="Arial, Helvetica, sans-serif">15</font></td>
      <td width="223" valign="bottom"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1629; ?>
        </font></td>
      <td width="6" valign="bottom"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="240" valign="bottom"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1630; ?>
        </font></td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="223"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A1629" value="<?php echo($result->A1629) ;?>" size="3">
        </font></td>
      <td width="6"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="240"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A1630" value="<?php echo($result->A1630) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center"> 
      <td rowspan="2"><font face="Arial, Helvetica, sans-serif">16</font></td>
      <td width="223"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1631; ?>
        </font></td>
      <td width="6"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="240"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1632; ?>
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="223"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A1631" value="<?php echo($result->A1631) ;?>" size="3">
        </font></td>
      <td width="6"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="240"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A1632" value="<?php echo($result->A1632) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="16">&nbsp;</td>
      <td width="223">&nbsp;</td>
      <td width="6">&nbsp;</td>
      <td width="240">&nbsp;</td>
    </tr>
    <tr align="center" valign="top" bgcolor="#FF0000"> 
      <td colspan="4"> 
        <input type="submit" value="modifier" name="submit">
      </td>
    </tr>
    <tr align="center" valign="top" bgcolor="#00FFFF"> 
      <td colspan="4"><a href="sadmin2.php" target="_top"><b><font face="Arial, Helvetica, sans-serif">Retour 
        &agrave; l'accueil</font></b></a></td>
    </tr>
  </table>
</form>

<?php
	}
	
//***************************************************************	
//******************  tableau aller retour   ********************
//***************************************************************

else
	{
	?>
	
	<form name="insertion" action="transfertScores.php?annee=<?php echo $annee;?>&champ=<?php echo $champ; ?>&type=16&AR=<?php echo $AR; ?>" method="POST">
		  <b><font size="4"> 
		  <?php
		mysql_connect("sql.franceserv.fr", "onepip-france", "Lavelan1969&"); 
		mysql_select_db("onepip-france-db1"); 
		?>
		  </font></b> <b><font size="4"> 
 <?php
		  
	// ***********  R�cup�ration des scores des matchs ALLER  ***************************	 
	
	$requeteAGA = mysql_query( "	SELECT id ,	A1601, A1602, A1603, A1604 ,A1605, A1606, A1607, A1608,
												A1609, A1610, A1611, A1612, A1613, A1614, A1615, A1616,
												A1617, A1618, A1619, A1620 ,A1621, A1622, A1623, A1624,
												A1625, A1626, A1627, A1628, A1629, A1630, A1631, A1632 
											 
										FROM bdpfScoresA 
										WHERE  division = $champ AND annee=$annee ") ;
		 
		
		  if( $resultAGA = mysql_fetch_object( $requeteAGA ) )
		  	{
				
		  	}
		  
// *************************************************************************************  
// ***********   R�cup�ration des scores des matchs RETOUR   ***************************	 
	
	$requeteRGA = mysql_query( "	SELECT id ,	R1601, R1602, R1603, R1604 ,R1605, R1606, R1607, R1608,
												R1609, R1610, R1611, R1612, R1613, R1614, R1615, R1616,
												R1617, R1618, R1619, R1620 ,R1621, R1622, R1623, R1624,
												R1625, R1626, R1627, R1628, R1629, R1630, R1631, R1632 
											 
										FROM bdpfScoresR 
										WHERE  division= $champ AND annee = $annee ") ;
		 
		
		  if( $resultRGA = mysql_fetch_object( $requeteRGA ) )
		  	{
				
		  	}
		  
		  
	// R�cup�ration des points terrain des matchs ALLER
		  $PtsA = $champ + 500;
		  $requetePTSA = mysql_query( "SELECT id ,	A1601, A1602, A1603, A1604 ,A1605, A1606, A1607, A1608,
													A1609, A1610, A1611, A1612, A1613, A1614, A1615, A1616,
													A1617, A1618, A1619, A1620 ,A1621, A1622, A1623, A1624,
													A1625, A1626, A1627, A1628, A1629, A1630, A1631, A1632 
											   
									FROM bdpfScoresA 
									WHERE  division = $PtsA and annee=$annee " ) ;
		 
		
		  if( $resultPTSA = mysql_fetch_object( $requetePTSA ) )
		 	 	{
		 		}
				
			 
		  
	// R�cup�ration des points terrain des matchs RETOUR
		  $PtsR = $champ + 500;
		  $requetePTSR = mysql_query( "SELECT id ,	R1601, R1602, R1603, R1604 ,R1605, R1606, R1607, R1608,
													R1609, R1610, R1611, R1612, R1613, R1614, R1615, R1616,
													R1617, R1618, R1619, R1620 ,R1621, R1622, R1623, R1624,
													R1625, R1626, R1627, R1628, R1629, R1630, R1631, R1632
											    
									FROM bdpfScoresR 
									WHERE  division = $PtsR and annee=$annee " ) ;
		 
		
		  if( $resultPTSR = mysql_fetch_object( $requetePTSR ) )
		 	 	{
		 		}	
				
				
		mysql_close(); // D�connexion de MySQL
		?>
		  </font></b> 
		   
  <table border="0" cellspacing="0" cellpadding="10" width="100%">
    <tr align="center"> 
      <td colspan="4"> </td>
    </tr>
    <tr align="center"> 
      <td colspan="4" height="32" bgcolor="#FF0000"><b><font size="4" face="Arial, Helvetica, sans-serif">16me 
        de Finale 
        <?php echo $division; ?>
        ( 
        <?php echo $id; ?>
        ) </font></b> </td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">1</td>
      <td width="200" bgcolor="#CCCCCC"> 
        <?php	echo $clubA1601; ?>
      </td>
      <td width="25" bgcolor="#CCCCCC">-</td>
      <td width="192" bgcolor="#CCCCCC"> 
        <?php	echo $clubA1602; ?>
      </td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC"></td>
      <td width="200" bgcolor="#CCCCCC"> GA 
        <input type="text" name="A1601" value="<?php echo($resultAGA->A1601) ;?>" size="3">
      </td>
      <td width="25" bgcolor="#CCCCCC"></td>
      <td width="192" bgcolor="#CCCCCC"> GA 
        <input type="text" name="A1602" value="<?php echo($resultAGA->A1602) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="200" bgcolor="#CCCCCC"> Pts 
        <input type="text" name="PTSA1601" value="<?php echo($resultPTSA->A1601) ;?>" size="2">
        <br>
      </td>
      <td width="25" bgcolor="#CCCCCC"></td>
      <td width="192" bgcolor="#CCCCCC"> Pts 
        <input type="text" name="PTSA1602" value="<?php echo($resultPTSA->A1602) ;?>" size="2">
      </td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC"></td>
      <td width="192" bgcolor="#CCCCCC"> 
        <?php	echo $clubA1602; ?>
      </td>
      <td width="25" bgcolor="#CCCCCC"></td>
      <td width="200" bgcolor="#CCCCCC"> 
        <?php	echo $clubA1601; ?>
      </td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC"></td>
      <td width="192" bgcolor="#CCCCCC"> GA 
        <input type="text" name="R1602" value="<?php echo($resultRGA->R1602) ;?>" size="3">
      </td>
      <td width="25" bgcolor="#CCCCCC"></td>
      <td width="200" bgcolor="#CCCCCC"> GA 
        <input type="text" name="R1601" value="<?php echo($resultRGA->R1601) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC"></td>
      <td width="192" bgcolor="#CCCCCC"> Pts 
        <input type="text" name="PTSR1602" value="<?php echo($resultPTSR->R1602) ;?>" size="2">
      </td>
      <td width="25" bgcolor="#CCCCCC"></td>
      <td width="200" bgcolor="#CCCCCC"> Pts 
        <input type="text" name="PTSR1601" value="<?php echo($resultPTSR->R1601) ;?>" size="2">
        <br>
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">2</td>
      <td width="200"> 
        <?php	echo $clubA1603; ?>
      </td>
      <td width="25">-</td>
      <td width="192"> 
        <?php	echo $clubA1604; ?>
      </td>
    </tr>
    <tr align="center"> 
      <td width="24"></td>
      <td width="200"> GA 
        <input type="text" name="A1603" value="<?php echo($resultAGA->A1603) ;?>" size="3">
      </td>
      <td width="25"></td>
      <td width="192"> GA 
        <input type="text" name="A1604" value="<?php echo($resultAGA->A1604) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="24"></td>
      <td width="200">Pts 
        <input type="text" name="PTSA1603" value="<?php echo($resultPTSA->A1603) ;?>" size="2">
      </td>
      <td width="25"></td>
      <td width="192"> Pts 
        <input type="text" name="PTSA1604" value="<?php echo($resultPTSA->A1604) ;?>" size="2">
      </td>
    </tr>
    <tr align="center"> 
      <td width="24"></td>
      <td width="192"> 
        <?php	echo $clubA1604; ?>
      </td>
      <td width="25"></td>
      <td width="200"> 
        <?php	echo $clubA1603; ?>
      </td>
    </tr>
    <tr align="center"> 
      <td width="24"></td>
      <td width="192"> GA 
        <input type="text" name="R1604" value="<?php echo($resultRGA->R1604) ;?>" size="3">
        - </td>
      <td width="25"></td>
      <td width="200"> GA 
        <input type="text" name="R1603" value="<?php echo($resultRGA->R1603) ;?>" size="3">
        - </td>
    </tr>
    <tr align="center"> 
      <td width="24"></td>
      <td width="192"> Pts 
        <input type="text" name="PTSR1604" value="<?php echo($resultPTSR->R1604) ;?>" size="2">
      </td>
      <td width="25"></td>
      <td width="200">Pts 
        <input type="text" name="PTSR1603" value="<?php echo($resultPTSR->R1603) ;?>" size="2">
      </td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">3</td>
      <td width="200" bgcolor="#CCCCCC"> 
        <?php	echo $clubA1605; ?>
      </td>
      <td width="25" bgcolor="#CCCCCC">-</td>
      <td width="192" bgcolor="#CCCCCC"> 
        <?php	echo $clubA1606; ?>
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td bgcolor="#CCCCCC"></td>
      <td width="200" height="51"> GA 
        <input type="text" name="A1605" value="<?php echo($resultAGA->A1605) ;?>" size="3">
      </td>
      <td width="25" height="51"></td>
      <td width="192" height="51"> GA 
        <input type="text" name="A1606" value="<?php echo($resultAGA->A1606) ;?>" size="3">
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td bgcolor="#CCCCCC"></td>
      <td width="200" height="51"> Pts 
        <input type="text" name="PTSA1605" value="<?php echo($resultPTSA->A1605) ;?>" size="2">
      </td>
      <td width="25" height="51"></td>
      <td width="192" height="51"> Pts 
        <input type="text" name="PTSA1606" value="<?php echo($resultPTSA->A1606) ;?>" size="2">
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td bgcolor="#CCCCCC"></td>
      <td width="192"> 
        <?php	echo $clubA1606; ?>
      </td>
      <td width="25" height="51"></td>
      <td width="200"> 
        <?php	echo $clubA1605; ?>
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="192" height="51"> GA 
        <input type="text" name="R1606" value="<?php echo($resultRGA->R1606) ;?>" size="3">
      </td>
      <td width="25" height="51">&nbsp;</td>
      <td width="200" height="51"> GA 
        <input type="text" name="R1605" value="<?php echo($resultRGA->R1605) ;?>" size="3">
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="192" height="51"> Pts 
        <input type="text" name="PTSR1606" value="<?php echo($resultPTSR->R1606) ;?>" size="2">
      </td>
      <td width="25" height="51">&nbsp;</td>
      <td width="200" height="51"> Pts 
        <input type="text" name="PTSR1605" value="<?php echo($resultPTSR->R1605) ;?>" size="2">
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">4</td>
      <td width="200"> 
        <?php	echo $clubA1607; ?>
      </td>
      <td width="25">-</td>
      <td width="192"> 
        <?php	echo $clubA1608; ?>
      </td>
    </tr>
    <tr align="center"> 
      <td width="24"></td>
      <td width="200"> GA 
        <input type="text" name="A1607" value="<?php echo($resultAGA->A1607) ;?>" size="3">
      </td>
      <td width="25">&nbsp;</td>
      <td width="192"> GA 
        <input type="text" name="A1608" value="<?php echo($resultAGA->A1608) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="24"></td>
      <td width="200"> Pts 
        <input type="text" name="PTSA1607" value="<?php echo($resultPTSA->A1607) ;?>" size="2">
      </td>
      <td width="25"></td>
      <td width="192"> Pts 
        <input type="text" name="PTSA1608" value="<?php echo($resultPTSA->A1608) ;?>" size="2">
      </td>
    </tr>
    <tr align="center"> 
      <td width="24"></td>
      <td width="192"> 
        <?php	echo $clubA1608; ?>
      </td>
      <td width="25"></td>
      <td width="200"> 
        <?php	echo $clubA1607; ?>
      </td>
    </tr>
    <tr align="center"> 
      <td width="24"></td>
      <td width="192"> GA 
        <input type="text" name="R1608" value="<?php echo($resultRGA->R1608) ;?>" size="3">
      </td>
      <td width="25"></td>
      <td width="200"> GA 
        <input type="text" name="R1607" value="<?php echo($resultRGA->R1607) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="24"></td>
      <td width="192"> Pts 
        <input type="text" name="PTSR1608" value="<?php echo($resultPTSR->R1608) ;?>" size="2">
      </td>
      <td width="25"></td>
      <td width="200"> Pts 
        <input type="text" name="PTSR1607" value="<?php echo($resultPTSR->R1607) ;?>" size="2">
      </td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">5</td>
      <td width="200" bgcolor="#CCCCCC"> 
        <?php	echo $clubA1609; ?>
      </td>
      <td width="25" bgcolor="#CCCCCC">-</td>
      <td width="192" bgcolor="#CCCCCC"> 
        <?php	echo $clubA1610; ?>
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td bgcolor="#CCCCCC"></td>
      <td width="200"> GA 
        <input type="text" name="A1609" value="<?php echo($resultAGA->A1609) ;?>" size="3">
      </td>
      <td width="25"></td>
      <td width="192">GA 
        <input type="text" name="A1610" value="<?php echo($resultAGA->A1610) ;?>" size="3">
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td bgcolor="#CCCCCC"></td>
      <td width="200"> Pts 
        <input type="text" name="PTSA1609" value="<?php echo($resultPTSA->A1609) ;?>" size="2">
      </td>
      <td width="25"></td>
      <td width="192"> Pts 
        <input type="text" name="PTSA1610" value="<?php echo($resultPTSA->A1610) ;?>" size="2">
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td bgcolor="#CCCCCC"></td>
      <td width="192"> 
        <?php	echo $clubA1610; ?>
      </td>
      <td width="25"></td>
      <td width="200"> 
        <?php	echo $clubA1609; ?>
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td bgcolor="#CCCCCC"></td>
      <td width="192"> GA 
        <input type="text" name="R1610" value="<?php echo($resultRGA->R1610) ;?>" size="3">
      </td>
      <td width="25">&nbsp;</td>
      <td width="200"> GA 
        <input type="text" name="R1609" value="<?php echo($resultRGA->R1609) ;?>" size="3">
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td bgcolor="#CCCCCC"></td>
      <td width="192"> Pts 
        <input type="text" name="PTSR1610" value="<?php echo($resultPTSR->R1610) ;?>" size="2">
      </td>
      <td width="25"></td>
      <td width="200"> Pts 
        <input type="text" name="PTSR1609" value="<?php echo($resultPTSR->R1609) ;?>" size="2">
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">6</td>
      <td width="200"> 
        <?php	echo $clubA1611; ?>
      </td>
      <td width="25">-</td>
      <td width="192"> 
        <?php	echo $clubA1612; ?>
      </td>
    </tr>
    <tr align="center"> 
      <td width="24"></td>
      <td width="200"> GA 
        <input type="text" name="A1611" value="<?php echo($resultAGA->A1611) ;?>" size="3">
      </td>
      <td width="25">&nbsp;</td>
      <td width="192"> GA 
        <input type="text" name="A1612" value="<?php echo($resultAGA->A1612) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="200">Pts 
        <input type="text" name="PTSA1611" value="<?php echo($resultPTSA->A1611) ;?>" size="2">
      </td>
      <td width="25">&nbsp;</td>
      <td width="192">Pts 
        <input type="text" name="PTSA1612" value="<?php echo($resultPTSA->A1612) ;?>" size="2">
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="192"> 
        <?php	echo $clubA1612; ?>
      </td>
      <td width="25">&nbsp;</td>
      <td width="200"> 
        <?php	echo $clubA1611; ?>
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="192"> GA 
        <input type="text" name="R1612" value="<?php echo($resultRGA->R1612) ;?>" size="3">
      </td>
      <td width="25">&nbsp;</td>
      <td width="200"> GA 
        <input type="text" name="R1611" value="<?php echo($resultRGA->R1611) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="192">Pts 
        <input type="text" name="PTSR1612" value="<?php echo($resultPTSR->R1612) ;?>" size="2">
      </td>
      <td width="25">&nbsp;</td>
      <td width="200">Pts 
        <input type="text" name="PTSR1611" value="<?php echo($resultPTSR->R1611) ;?>" size="2">
      </td>
    </tr>
    <tr align="center"> 
      <td rowspan="2" bgcolor="#CCCCCC">7</td>
      <td width="200" bgcolor="#CCCCCC"> 
        <?php	echo $clubA1613; ?>
      </td>
      <td width="25" bgcolor="#CCCCCC">-</td>
      <td width="192" bgcolor="#CCCCCC"> 
        <?php	echo $clubA1614; ?>
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="200"> GA 
        <input type="text" name="A1613" value="<?php echo($resultAGA->A1613) ;?>" size="3">
      </td>
      <td width="25">&nbsp;</td>
      <td width="192"> GA 
        <input type="text" name="A1614" value="<?php echo($resultAGA->A1614) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="200" bgcolor="#CCCCCC">Pts 
        <input type="text" name="PTSA1613" value="<?php echo($resultPTSA->A1613) ;?>" size="2">
      </td>
      <td width="25" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="192" bgcolor="#CCCCCC">Pts 
        <input type="text" name="PTSA1614" value="<?php echo($resultPTSA->A1614) ;?>" size="2">
      </td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="192" bgcolor="#CCCCCC"> 
        <?php	echo $clubA1614; ?>
      </td>
      <td width="25" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="200" bgcolor="#CCCCCC"> 
        <?php	echo $clubA1613; ?>
      </td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="192" bgcolor="#CCCCCC"> GA 
        <input type="text" name="R1614" value="<?php echo($resultRGA->R1614) ;?>" size="3">
      </td>
      <td width="25" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="200" bgcolor="#CCCCCC"> GA 
        <input type="text" name="R1613" value="<?php echo($resultRGA->R1613) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="192" bgcolor="#CCCCCC">Pts 
        <input type="text" name="PTSR1614" value="<?php echo($resultPTSR->R1614) ;?>" size="2">
      </td>
      <td width="25" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="200" bgcolor="#CCCCCC">Pts 
        <input type="text" name="PTSR1613" value="<?php echo($resultPTSR->R1613) ;?>" size="2">
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">8</td>
      <td width="200"> 
        <?php	echo $clubA1615; ?>
      </td>
      <td width="25">-</td>
      <td width="192"> 
        <?php	echo $clubA1616; ?>
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="200"> GA 
        <input type="text" name="A1615" value="<?php echo($resultAGA->A1615) ;?>" size="3">
      </td>
      <td width="25">&nbsp;</td>
      <td width="192"> GA 
        <input type="text" name="A1616" value="<?php echo($resultAGA->A1616) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="200">Pts 
        <input type="text" name="PTSA1615" value="<?php echo($resultPTSA->A1615) ;?>" size="2">
      </td>
      <td width="25">&nbsp;</td>
      <td width="192">Pts 
        <input type="text" name="PTSA1616" value="<?php echo($resultPTSA->A1616) ;?>" size="2">
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="192"> 
        <?php	echo $clubA1616; ?>
      </td>
      <td width="25">&nbsp;</td>
      <td width="200"> 
        <?php	echo $clubA1615; ?>
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="192"> GA 
        <input type="text" name="R1616" value="<?php echo($resultRGA->R1616) ;?>" size="3">
      </td>
      <td width="25">&nbsp;</td>
      <td width="200"> GA 
        <input type="text" name="R1615" value="<?php echo($resultRGA->R1615) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="192">Pts 
        <input type="text" name="PTSR1616" value="<?php echo($resultPTSR->R1616) ;?>" size="2">
      </td>
      <td width="25">&nbsp;</td>
      <td width="200">Pts 
        <input type="text" name="PTSR1615" value="<?php echo($resultPTSR->R1615) ;?>" size="2">
      </td>
    </tr>
    <tr align="center"> 
      <td rowspan="2" bgcolor="#CCCCCC">9</td>
      <td width="200" bgcolor="#CCCCCC"> 
        <?php	echo $clubA1617; ?>
      </td>
      <td width="25" bgcolor="#CCCCCC">-</td>
      <td width="192" bgcolor="#CCCCCC"> 
        <?php	echo $clubA1618; ?>
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="200"> GA 
        <input type="text" name="A1617" value="<?php echo($resultAGA->A1617) ;?>" size="3">
      </td>
      <td width="25">&nbsp;</td>
      <td width="192"> GA 
        <input type="text" name="A1618" value="<?php echo($resultAGA->A1618) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="200" bgcolor="#CCCCCC">Pts 
        <input type="text" name="PTSA1617" value="<?php echo($resultPTSA->A1617) ;?>" size="2">
      </td>
      <td width="25" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="192" bgcolor="#CCCCCC">Pts 
        <input type="text" name="PTSA1618" value="<?php echo($resultPTSA->A1618) ;?>" size="2">
      </td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="192" bgcolor="#CCCCCC"> 
        <?php	echo $clubA1618; ?>
      </td>
      <td width="25" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="200" bgcolor="#CCCCCC"> 
        <?php	echo $clubA1617; ?>
      </td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="192" bgcolor="#CCCCCC"> GA 
        <input type="text" name="R1618" value="<?php echo($resultRGA->R1618) ;?>" size="3">
      </td>
      <td width="25" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="200" bgcolor="#CCCCCC"> GA 
        <input type="text" name="R1617" value="<?php echo($resultRGA->R1617) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="192" bgcolor="#CCCCCC">Pts 
        <input type="text" name="PTSR1618" value="<?php echo($resultPTSR->R1618) ;?>" size="2">
      </td>
      <td width="25" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="200" bgcolor="#CCCCCC">Pts 
        <input type="text" name="PTSR1617" value="<?php echo($resultPTSR->R1617) ;?>" size="2">
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">10</td>
      <td width="200"> 
        <?php	echo $clubA1619; ?>
      </td>
      <td width="25">-</td>
      <td width="192"> 
        <?php	echo $clubA1620; ?>
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="200"> GA 
        <input type="text" name="A1619" value="<?php echo($resultAGA->A1619) ;?>" size="3">
      </td>
      <td width="25">&nbsp;</td>
      <td width="192"> GA 
        <input type="text" name="A1620" value="<?php echo($resultAGA->A1620) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="200">Pts 
        <input type="text" name="PTSA1619" value="<?php echo($resultPTSA->A1619) ;?>" size="2">
      </td>
      <td width="25">&nbsp;</td>
      <td width="192">Pts 
        <input type="text" name="PTSA1620" value="<?php echo($resultPTSA->A1620) ;?>" size="2">
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="192"> 
        <?php	echo $clubA1620; ?>
      </td>
      <td width="25">&nbsp;</td>
      <td width="200"> 
        <?php	echo $clubA1619; ?>
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="192"> GA 
        <input type="text" name="R1620" value="<?php echo($resultRGA->R1620) ;?>" size="3">
      </td>
      <td width="25">&nbsp;</td>
      <td width="200"> GA 
        <input type="text" name="R1619" value="<?php echo($resultRGA->R1619) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="192">Pts 
        <input type="text" name="PTSR1620" value="<?php echo($resultPTSR->R1620) ;?>" size="2">
      </td>
      <td width="25">&nbsp;</td>
      <td width="200">Pts 
        <input type="text" name="PTSR1619" value="<?php echo($resultPTSR->R1619) ;?>" size="2">
      </td>
    </tr>
    <tr align="center"> 
      <td rowspan="2" bgcolor="#CCCCCC">11</td>
      <td width="200" bgcolor="#CCCCCC"> 
        <?php	echo $clubA1621; ?>
      </td>
      <td width="25" bgcolor="#CCCCCC">-</td>
      <td width="192" bgcolor="#CCCCCC"> 
        <?php	echo $clubA1622; ?>
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="200"> GA 
        <input type="text" name="A1621" value="<?php echo($resultAGA->A1621) ;?>" size="3">
      </td>
      <td width="25">&nbsp;</td>
      <td width="192"> GA 
        <input type="text" name="A1622" value="<?php echo($resultAGA->A1622) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="200" bgcolor="#CCCCCC">Pts 
        <input type="text" name="PTSA1621" value="<?php echo($resultPTSA->A1621) ;?>" size="2">
      </td>
      <td width="25" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="192" bgcolor="#CCCCCC">Pts 
        <input type="text" name="PTSA1622" value="<?php echo($resultPTSA->A1622) ;?>" size="2">
      </td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="192" bgcolor="#CCCCCC"> 
        <?php	echo $clubA1622; ?>
      </td>
      <td width="25" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="200" bgcolor="#CCCCCC"> 
        <?php	echo $clubA1621; ?>
      </td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="192" bgcolor="#CCCCCC"> GA 
        <input type="text" name="R1622" value="<?php echo($resultRGA->R1622) ;?>" size="3">
      </td>
      <td width="25" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="200" bgcolor="#CCCCCC"> GA 
        <input type="text" name="R1621" value="<?php echo($resultRGA->R1621) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="192" bgcolor="#CCCCCC">Pts 
        <input type="text" name="PTSR1622" value="<?php echo($resultPTSR->R1622) ;?>" size="2">
      </td>
      <td width="25" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="200" bgcolor="#CCCCCC">Pts 
        <input type="text" name="PTSR1621" value="<?php echo($resultPTSR->R1621) ;?>" size="2">
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">12</td>
      <td width="200"> 
        <?php	echo $clubA1623; ?>
      </td>
      <td width="25">-</td>
      <td width="192"> 
        <?php	echo $clubA1624; ?>
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="200"> GA 
        <input type="text" name="A1623" value="<?php echo($resultAGA->A1623) ;?>" size="3">
      </td>
      <td width="25">&nbsp;</td>
      <td width="192"> GA 
        <input type="text" name="A1624" value="<?php echo($resultAGA->A1624) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="200">Pts 
        <input type="text" name="PTSA1623" value="<?php echo($resultPTSA->A1623) ;?>" size="2">
      </td>
      <td width="25">&nbsp;</td>
      <td width="192">Pts 
        <input type="text" name="PTSA1624" value="<?php echo($resultPTSA->A1624) ;?>" size="2">
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="192"> 
        <?php	echo $clubA1624; ?>
      </td>
      <td width="25">&nbsp;</td>
      <td width="200"> 
        <?php	echo $clubA1623; ?>
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="192"> GA 
        <input type="text" name="R1624" value="<?php echo($resultRGA->R1624) ;?>" size="3">
      </td>
      <td width="25">&nbsp;</td>
      <td width="200"> GA 
        <input type="text" name="R1623" value="<?php echo($resultRGA->R1623) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="192">Pts 
        <input type="text" name="PTSR1624" value="<?php echo($resultPTSR->R1624) ;?>" size="2">
      </td>
      <td width="25">&nbsp;</td>
      <td width="200">Pts 
        <input type="text" name="PTSR1623" value="<?php echo($resultPTSR->R1623) ;?>" size="2">
      </td>
    </tr>
    <tr align="center"> 
      <td rowspan="2" bgcolor="#CCCCCC">13</td>
      <td width="200" bgcolor="#CCCCCC"> 
        <?php	echo $clubA1625; ?>
      </td>
      <td width="25" bgcolor="#CCCCCC">-</td>
      <td width="192" bgcolor="#CCCCCC"> 
        <?php	echo $clubA1626; ?>
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="200"> GA 
        <input type="text" name="A1625" value="<?php echo($resultAGA->A1625) ;?>" size="3">
      </td>
      <td width="25">&nbsp;</td>
      <td width="192"> GA 
        <input type="text" name="A1626" value="<?php echo($resultAGA->A1626) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="200" bgcolor="#CCCCCC">Pts 
        <input type="text" name="PTSA1625" value="<?php echo($resultPTSA->A1625) ;?>" size="2">
      </td>
      <td width="25" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="192" bgcolor="#CCCCCC">Pts 
        <input type="text" name="PTSA1626" value="<?php echo($resultPTSA->A1626) ;?>" size="2">
      </td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="192" bgcolor="#CCCCCC"> 
        <?php	echo $clubA1626; ?>
      </td>
      <td width="25" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="200" bgcolor="#CCCCCC"> 
        <?php	echo $clubA1625; ?>
      </td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="192" bgcolor="#CCCCCC"> GA 
        <input type="text" name="R1626" value="<?php echo($resultRGA->R1626) ;?>" size="3">
      </td>
      <td width="25" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="200" bgcolor="#CCCCCC"> GA 
        <input type="text" name="R1625" value="<?php echo($resultRGA->R1625) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="192" bgcolor="#CCCCCC">Pts 
        <input type="text" name="PTSR1626" value="<?php echo($resultPTSR->R1626) ;?>" size="2">
      </td>
      <td width="25" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="200" bgcolor="#CCCCCC">Pts 
        <input type="text" name="PTSR1625" value="<?php echo($resultPTSR->R1625) ;?>" size="2">
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">14</td>
      <td width="200"> 
        <?php	echo $clubA1627; ?>
      </td>
      <td width="25">-</td>
      <td width="192"> 
        <?php	echo $clubA1628; ?>
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="200"> GA 
        <input type="text" name="A1627" value="<?php echo($resultAGA->A1627) ;?>" size="3">
      </td>
      <td width="25">&nbsp;</td>
      <td width="192"> GA 
        <input type="text" name="A1628" value="<?php echo($resultAGA->A1628) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="200">Pts 
        <input type="text" name="PTSA1627" value="<?php echo($resultPTSA->A1627) ;?>" size="2">
      </td>
      <td width="25">&nbsp;</td>
      <td width="192">Pts 
        <input type="text" name="PTSA1628" value="<?php echo($resultPTSA->A1628) ;?>" size="2">
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="192"> 
        <?php	echo $clubA1628; ?>
      </td>
      <td width="25">&nbsp;</td>
      <td width="200"> 
        <?php	echo $clubA1627; ?>
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="192"> GA 
        <input type="text" name="R1628" value="<?php echo($resultRGA->R1628) ;?>" size="3">
      </td>
      <td width="25">&nbsp;</td>
      <td width="200"> GA 
        <input type="text" name="R1627" value="<?php echo($resultRGA->R1627) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="192">Pts 
        <input type="text" name="PTSR1628" value="<?php echo($resultPTSR->R1628) ;?>" size="2">
      </td>
      <td width="25">&nbsp;</td>
      <td width="200">Pts 
        <input type="text" name="PTSR1627" value="<?php echo($resultPTSR->R1627) ;?>" size="2">
      </td>
    </tr>
    <tr align="center"> 
      <td rowspan="2" bgcolor="#CCCCCC">15</td>
      <td width="200" bgcolor="#CCCCCC"> 
        <?php	echo $clubA1629; ?>
      </td>
      <td width="25" bgcolor="#CCCCCC">-</td>
      <td width="192" bgcolor="#CCCCCC"> 
        <?php	echo $clubA1630; ?>
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="200"> GA 
        <input type="text" name="A1629" value="<?php echo($resultAGA->A1629) ;?>" size="3">
      </td>
      <td width="25">&nbsp;</td>
      <td width="192"> GA 
        <input type="text" name="A1630" value="<?php echo($resultAGA->A1630) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="200" bgcolor="#CCCCCC">Pts 
        <input type="text" name="PTSA1629" value="<?php echo($resultPTSA->A1629) ;?>" size="2">
      </td>
      <td width="25" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="192" bgcolor="#CCCCCC">Pts 
        <input type="text" name="PTSA1630" value="<?php echo($resultPTSA->A1630) ;?>" size="2">
      </td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="192" bgcolor="#CCCCCC"> 
        <?php	echo $clubA1630; ?>
      </td>
      <td width="25" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="200" bgcolor="#CCCCCC"> 
        <?php	echo $clubA1629; ?>
      </td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="192" bgcolor="#CCCCCC"> GA 
        <input type="text" name="R1630" value="<?php echo($resultRGA->R1630) ;?>" size="3">
      </td>
      <td width="25" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="200" bgcolor="#CCCCCC"> GA 
        <input type="text" name="R1629" value="<?php echo($resultRGA->R1629) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="192" bgcolor="#CCCCCC">Pts 
        <input type="text" name="PTSR1630" value="<?php echo($resultPTSR->R1630) ;?>" size="2">
      </td>
      <td width="25" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="200" bgcolor="#CCCCCC">Pts 
        <input type="text" name="PTSR1629" value="<?php echo($resultPTSR->R1629) ;?>" size="2">
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">16</td>
      <td width="200"> 
        <?php	echo $clubA1631; ?>
      </td>
      <td width="25">-</td>
      <td width="192"> 
        <?php	echo $clubA1632; ?>
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="200"> GA 
        <input type="text" name="A1631" value="<?php echo($resultAGA->A1631) ;?>" size="3">
      </td>
      <td width="25">&nbsp;</td>
      <td width="192"> GA 
        <input type="text" name="A1632" value="<?php echo($resultAGA->A1632) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="200">Pts 
        <input type="text" name="PTSA1631" value="<?php echo($resultPTSA->A1631) ;?>" size="2">
      </td>
      <td width="25">&nbsp;</td>
      <td width="192">Pts 
        <input type="text" name="PTSA1632" value="<?php echo($resultPTSA->A1632) ;?>" size="2">
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="192"> 
        <?php	echo $clubA1632; ?>
      </td>
      <td width="25">&nbsp;</td>
      <td width="200"> 
        <?php	echo $clubA1631; ?>
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="192"> GA 
        <input type="text" name="R1632" value="<?php echo($resultRGA->R1632) ;?>" size="3">
      </td>
      <td width="25">&nbsp;</td>
      <td width="200"> GA 
        <input type="text" name="R1631" value="<?php echo($resultRGA->R1631) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="192">Pts 
        <input type="text" name="PTSR1632" value="<?php echo($resultPTSR->R1632) ;?>" size="2">
      </td>
      <td width="25">&nbsp;</td>
      <td width="200">Pts 
        <input type="text" name="PTSR1631" value="<?php echo($resultPTSR->R1631) ;?>" size="2">
      </td>
    </tr>
    <tr align="center" valign="top"> 
      <td colspan="4" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr align="center" valign="top"> 
      <td colspan="4" bgcolor="#FF0000"> 
        <input type="submit" value="modifier" name="submit">
      </td>
    </tr>
    <tr align="center" valign="top" bgcolor="#00FFFF"> 
      <td colspan="4"><a href="accueilsaisiescore.php" target="_top"><b>Retour 
        &agrave; l'accueil</b></a></td>
    </tr>
  </table>  
		</form>
	<?php
	}
?>


<p>&nbsp;</p>
