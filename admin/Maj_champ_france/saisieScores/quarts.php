<html>
  <head>
<title>modification de donn�es en PHP :: partie2</title>

<meta name=viewport content="width=device-width, initial-scale=1">
</head>

<body>

<?php

$champ=$_GET['champ']; 
$annee=$_GET['annee']; 

echo $annee; 

require ("../../../phasesFinales/fonctionListeEquipes.php");	
require ("../../../phasesFinales/fonctionScores.php");


?>
<?php

if ($AR==2)
{

//***************************************************************	
//******************  tableau aller retour   ********************
//***************************************************************

?>

	<form name="insertion" action="transfertScores.php?annee=<?php echo $annee;?>&champ=<?php echo $champ; ?>&type=4&AR=<?php echo $AR; ?>" method="POST">
		  <b><font size="4"> 
		  <?php
		mysql_connect("sql.franceserv.fr", "onepip-france", "Lavelan1969&"); 
		mysql_select_db("onepip-france-db1"); 
		?>
		  </font></b> <b><font size="4"> 
 <?php
		  
	// ***********  R�cup�ration des scores des matchs ALLER  ***************************	 
	
	$requeteAGA = mysql_query( "	SELECT id ,	A4001, A4002, A4003, A4004 ,A4005, A4006, A4007, A4008							 
									FROM bdpfScoresA 
									WHERE  division = $champ AND annee=$annee ") ;
		 
		
		  if( $resultAGA = mysql_fetch_object( $requeteAGA ) )
		  	{
				
		  	}
		  
// *************************************************************************************  
// ***********   R�cup�ration des scores des matchs RETOUR   ***************************	 
	
	$requeteRGA = mysql_query( "	SELECT id ,	R4001, R4002, R4003, R4004 ,R4005, R4006, R4007, R4008
																						
											 
										FROM bdpfScoresR 
										WHERE  division = $champ AND annee = $annee ") ;
		 
		
		  if( $resultRGA = mysql_fetch_object( $requeteRGA ) )
		  	{
				
		  	}
		  
		  
	// R�cup�ration des points terrain des matchs ALLER
		  $PtsA = $champ + 500;
		  $requetePTSA = mysql_query( "SELECT id ,	A4001, A4002, A4003, A4004 ,A4005, A4006, A4007, A4008

									FROM bdpfScoresA 
									WHERE  division = $PtsA and annee=$annee " ) ;
		 
		
		  if( $resultPTSA = mysql_fetch_object( $requetePTSA ) )
		 	 	{
		 		}
				
			 
		  
	// R�cup�ration des points terrain des matchs RETOUR
		  $PtsR = $champ + 500;
		  $requetePTSR = mysql_query( "	SELECT id ,	R4001, R4002, R4003, R4004 ,R4005, R4006, R4007, R4008
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
      <td colspan="4" height="32" bgcolor="#FF0000"><b><font size="4" face="Arial, Helvetica, sans-serif">Quarts 
        Demis Finale Aller Retour 
        <?php echo $division; ?>
        ( 
        <?php echo $id; ?>
        ) </font></b> </td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">1</td>
      <td width="200" bgcolor="#CCCCCC"> 
        <?php	echo $clubA4001; ?>
      </td>
      <td width="25" bgcolor="#CCCCCC">-</td>
      <td width="192" bgcolor="#CCCCCC"> 
        <?php	echo $clubA4002; ?>
      </td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC"></td>
      <td width="200" bgcolor="#CCCCCC"> GA 
        <input type="text" name="A4001" value="<?php echo($resultAGA->A4001) ;?>" size="3">
      </td>
      <td width="25" bgcolor="#CCCCCC"></td>
      <td width="192" bgcolor="#CCCCCC"> GA 
        <input type="text" name="A4002" value="<?php echo($resultAGA->A4002) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="200" bgcolor="#CCCCCC"> Pts 
        <input type="text" name="PTSA4001" value="<?php echo($resultPTSA->A4001) ;?>" size="2">
        <br>
      </td>
      <td width="25" bgcolor="#CCCCCC"></td>
      <td width="192" bgcolor="#CCCCCC"> Pts 
        <input type="text" name="PTSA4002" value="<?php echo($resultPTSA->A4002) ;?>" size="2">
      </td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC"></td>
      <td width="192" bgcolor="#CCCCCC"> 
        <?php	echo $clubA4002; ?>
      </td>
      <td width="25" bgcolor="#CCCCCC"></td>
      <td width="200" bgcolor="#CCCCCC"> 
        <?php	echo $clubA4001; ?>
      </td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC"></td>
      <td width="192" bgcolor="#CCCCCC"> GA 
        <input type="text" name="R4002" value="<?php echo($resultRGA->R4002) ;?>" size="3">
      </td>
      <td width="25" bgcolor="#CCCCCC"></td>
      <td width="200" bgcolor="#CCCCCC"> GA 
        <input type="text" name="R4001" value="<?php echo($resultRGA->R4001) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC"></td>
      <td width="192" bgcolor="#CCCCCC"> Pts 
        <input type="text" name="PTSR4002" value="<?php echo($resultPTSR->R4002) ;?>" size="2">
      </td>
      <td width="25" bgcolor="#CCCCCC"></td>
      <td width="200" bgcolor="#CCCCCC"> Pts 
        <input type="text" name="PTSR4001" value="<?php echo($resultPTSR->R4001) ;?>" size="2">
        <br>
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">2</td>
      <td width="200"> 
        <?php	echo $clubA4003; ?>
      </td>
      <td width="25">-</td>
      <td width="192"> 
        <?php	echo $clubA4004; ?>
      </td>
    </tr>
    <tr align="center"> 
      <td width="24"></td>
      <td width="200"> GA 
        <input type="text" name="A4003" value="<?php echo($resultAGA->A4003) ;?>" size="3">
      </td>
      <td width="25"></td>
      <td width="192"> GA 
        <input type="text" name="A4004" value="<?php echo($resultAGA->A4004) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="24"></td>
      <td width="200">Pts 
        <input type="text" name="PTSA4003" value="<?php echo($resultPTSA->A4003) ;?>" size="2">
      </td>
      <td width="25"></td>
      <td width="192"> Pts 
        <input type="text" name="PTSA4004" value="<?php echo($resultPTSA->A4004) ;?>" size="2">
      </td>
    </tr>
    <tr align="center"> 
      <td width="24"></td>
      <td width="192"> 
        <?php	echo $clubA4004; ?>
      </td>
      <td width="25"></td>
      <td width="200"> 
        <?php	echo $clubA4003; ?>
      </td>
    </tr>
    <tr align="center"> 
      <td width="24"></td>
      <td width="192"> GA 
        <input type="text" name="R4004" value="<?php echo($resultRGA->R4004) ;?>" size="3">
        - </td>
      <td width="25"></td>
      <td width="200"> GA 
        <input type="text" name="R4003" value="<?php echo($resultRGA->R4003) ;?>" size="3">
        - </td>
    </tr>
    <tr align="center"> 
      <td width="24"></td>
      <td width="192"> Pts 
        <input type="text" name="PTSR4004" value="<?php echo($resultPTSR->R4004) ;?>" size="2">
      </td>
      <td width="25"></td>
      <td width="200">Pts 
        <input type="text" name="PTSR4003" value="<?php echo($resultPTSR->R4003) ;?>" size="2">
      </td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">3</td>
      <td width="200" bgcolor="#CCCCCC"> 
        <?php	echo $clubA4005; ?>
      </td>
      <td width="25" bgcolor="#CCCCCC">-</td>
      <td width="192" bgcolor="#CCCCCC"> 
        <?php	echo $clubA4006; ?>
      </td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC"></td>
      <td width="200" height="51" bgcolor="#CCCCCC"> GA 
        <input type="text" name="A4005" value="<?php echo($resultAGA->A4005) ;?>" size="3">
      </td>
      <td width="25" height="51" bgcolor="#CCCCCC"></td>
      <td width="192" height="51" bgcolor="#CCCCCC"> GA 
        <input type="text" name="A4006" value="<?php echo($resultAGA->A4006) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC"></td>
      <td width="200" height="51" bgcolor="#CCCCCC"> Pts 
        <input type="text" name="PTSA4005" value="<?php echo($resultPTSA->A4005) ;?>" size="2">
      </td>
      <td width="25" height="51" bgcolor="#CCCCCC"></td>
      <td width="192" height="51" bgcolor="#CCCCCC"> Pts 
        <input type="text" name="PTSA4006" value="<?php echo($resultPTSA->A4006) ;?>" size="2">
      </td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC"></td>
      <td width="192" bgcolor="#CCCCCC"> 
        <?php	echo $clubA4006; ?>
      </td>
      <td width="25" height="51" bgcolor="#CCCCCC"></td>
      <td width="200" bgcolor="#CCCCCC"> 
        <?php	echo $clubA4005; ?>
      </td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="192" height="51" bgcolor="#CCCCCC"> GA 
        <input type="text" name="R4006" value="<?php echo($resultRGA->R4006) ;?>" size="3">
      </td>
      <td width="25" height="51" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="200" height="51" bgcolor="#CCCCCC"> GA 
        <input type="text" name="R4005" value="<?php echo($resultRGA->R4005) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="192" height="51" bgcolor="#CCCCCC"> Pts 
        <input type="text" name="PTSR4006" value="<?php echo($resultPTSR->R4006) ;?>" size="2">
      </td>
      <td width="25" height="51" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="200" height="51" bgcolor="#CCCCCC"> Pts 
        <input type="text" name="PTSR4005" value="<?php echo($resultPTSR->R4005) ;?>" size="2">
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">4</td>
      <td width="200"> 
        <?php	echo $clubA4007; ?>
      </td>
      <td width="25">-</td>
      <td width="192"> 
        <?php	echo $clubA4008; ?>
      </td>
    </tr>
    <tr align="center"> 
      <td width="24"></td>
      <td width="200"> GA 
        <input type="text" name="A4007" value="<?php echo($resultAGA->A4007) ;?>" size="3">
      </td>
      <td width="25">&nbsp;</td>
      <td width="192"> GA 
        <input type="text" name="A4008" value="<?php echo($resultAGA->A4008) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="24"></td>
      <td width="200"> Pts 
        <input type="text" name="PTSA4007" value="<?php echo($resultPTSA->A4007) ;?>" size="2">
      </td>
      <td width="25"></td>
      <td width="192"> Pts 
        <input type="text" name="PTSA4008" value="<?php echo($resultPTSA->A4008) ;?>" size="2">
      </td>
    </tr>
    <tr align="center"> 
      <td width="24"></td>
      <td width="192"> 
        <?php	echo $clubA4008; ?>
      </td>
      <td width="25"></td>
      <td width="200"> 
        <?php	echo $clubA4007; ?>
      </td>
    </tr>
    <tr align="center"> 
      <td width="24"></td>
      <td width="192"> GA 
        <input type="text" name="R4008" value="<?php echo($resultRGA->R4008) ;?>" size="3">
      </td>
      <td width="25"></td>
      <td width="200"> GA 
        <input type="text" name="R4007" value="<?php echo($resultRGA->R4007) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="24"></td>
      <td width="192"> Pts 
        <input type="text" name="PTSR4008" value="<?php echo($resultPTSR->R4008) ;?>" size="2">
      </td>
      <td width="25"></td>
      <td width="200"> Pts 
        <input type="text" name="PTSR4007" value="<?php echo($resultPTSR->R4007) ;?>" size="2">
      </td>
    </tr>
    <tr align="center"> 
      <td width="24" bgcolor="#99CC00"></td>
      <td width="192" bgcolor="#99CC00">demi</td>
      <td width="25" bgcolor="#99CC00"></td>
      <td width="200" bgcolor="#99CC00">&nbsp;</td>
    </tr>
    <tr align="center"> 
      <td width="10" height="29"><font face="Arial, Helvetica, sans-serif">1</font></td>
      <td width="167" height="29"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA2001; ?>
        </font></td>
      <td width="5" height="29"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="138" height="29"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA2002; ?>
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="10" height="25">&nbsp;</td>
      <td width="167" height="25"> <font face="Arial, Helvetica, sans-serif"> 
        GA 
        <input type="text" name="A2001" value="<?php echo($result->A2001) ;?>" size="3">
        <br>
        </font></td>
      <td width="5" height="25"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="138" height="25"> <font face="Arial, Helvetica, sans-serif"> 
        GA 
        <input type="text" name="A2002" value="<?php echo($result->A2002) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="24"></td>
      <td width="192">Pts
        <input type="text" name="PTSA2001" value="<?php echo($resultPTSA->A2001) ;?>" size="2">
      </td>
      <td width="25"></td>
      <td width="200">Pts
        <input type="text" name="PTSA2002" value="<?php echo($resultPTSA->A2002) ;?>" size="2">
      </td>
    </tr>
    <tr align="center"> 
      <td width="24"></td>
      <td width="192"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA2002; ?>
        </font></td>
      <td width="25"></td>
      <td width="200"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA2001; ?>
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="24"></td>
      <td width="192"><font face="Arial, Helvetica, sans-serif">GA 
        <input type="text" name="R2002" value="<?php echo($result->R2002) ;?>" size="3">
        </font></td>
      <td width="25"></td>
      <td width="200"><font face="Arial, Helvetica, sans-serif">GA 
        <input type="text" name="R2001" value="<?php echo($result->R2001) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="24"></td>
      <td width="192">Pts
        <input type="text" name="PTSR2001" value="<?php echo($resultPTSR->R2001) ;?>" size="2">
      </td>
      <td width="25"></td>
      <td width="200">Pts
        <input type="text" name="PTSR2002" value="<?php echo($resultPTSR->R2002) ;?>" size="2">
      </td>
    </tr>
    <tr align="center"> 
      <td width="24" bgcolor="#999999"><font face="Arial, Helvetica, sans-serif">2</font></td>
      <td width="192" bgcolor="#999999"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA2003; ?>
        </font></td>
      <td width="25" bgcolor="#999999"></td>
      <td width="200" bgcolor="#999999"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA2004; ?>
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="24" bgcolor="#999999"></td>
      <td width="192" bgcolor="#999999"><font face="Arial, Helvetica, sans-serif"> 
        GA 
        <input type="text" name="A20032" value="<?php echo($result->A2003) ;?>" size="3">
        </font></td>
      <td width="25" bgcolor="#999999"></td>
      <td width="200" bgcolor="#999999"><font face="Arial, Helvetica, sans-serif"> 
        GA 
        <input type="text" name="A20042" value="<?php echo($result->A2004) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="24" bgcolor="#999999"></td>
      <td width="192" bgcolor="#999999">Pts
        <input type="text" name="PTSA2003" value="<?php echo($resultPTSA->A2003) ;?>" size="2">
      </td>
      <td width="25" bgcolor="#999999"></td>
      <td width="200" bgcolor="#999999">Pts
        <input type="text" name="PTSA2004" value="<?php echo($resultPTSA->A2004) ;?>" size="2">
      </td>
    </tr>
    <tr align="center"> 
      <td width="24" bgcolor="#999999"></td>
      <td width="192" bgcolor="#999999"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA2004; ?>
        </font></td>
      <td width="25" bgcolor="#999999"></td>
      <td width="200" bgcolor="#999999"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA2003; ?>
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="24" bgcolor="#999999"></td>
      <td width="192" bgcolor="#999999"><font face="Arial, Helvetica, sans-serif">GA 
        <input type="text" name="A2003" value="<?php echo($result->A2003) ;?>" size="3">
        </font></td>
      <td width="25" bgcolor="#999999"></td>
      <td width="200" bgcolor="#999999"><font face="Arial, Helvetica, sans-serif">GA 
        <input type="text" name="A200322" value="<?php echo($result->A2003) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="24" bgcolor="#999999"></td>
      <td width="192" bgcolor="#999999">Pts
        <input type="text" name="PTSR2004" value="<?php echo($resultPTSR->R2004) ;?>" size="2">
      </td>
      <td width="25" bgcolor="#999999"></td>
      <td width="200" bgcolor="#999999">Pts
        <input type="text" name="PTSR2003" value="<?php echo($resultPTSR->R2003) ;?>" size="2">
      </td>
    </tr>
    <tr align="center"> 
      <td width="24" bgcolor="#FFCC00"></td>
      <td width="192" bgcolor="#FFCC00">finale</td>
      <td width="25" bgcolor="#FFCC00"></td>
      <td width="200" bgcolor="#FFCC00">&nbsp;</td>
    </tr>
    <tr align="center"> 
      <td width="24" height="24"></td>
      <td height="24" valign="top"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1001; ?>
        </font></td>
      <td height="24" valign="top">&nbsp;</td>
      <td height="24" valign="top"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1002; ?>
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="24"></td>
      <td width="192"><font face="Arial, Helvetica, sans-serif"> GA 
        <input type="text" name="A10012" value="<?php echo($result->A1001) ;?>" size="3">
        </font></td>
      <td width="25"></td>
      <td width="200"><font face="Arial, Helvetica, sans-serif"> GA 
        <input type="text" name="A10022" value="<?php echo($result->A1002) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="24"></td>
      <td width="192">Pts
        <input type="text" name="PTSA1001" value="<?php echo($resultPTSA->A1001) ;?>" size="2">
      </td>
      <td width="25"></td>
      <td width="200">Pts
        <input type="text" name="PTSA1002" value="<?php echo($resultPTSA->A1002) ;?>" size="2">
      </td>
    </tr>
    <tr align="center"> 
      <td width="24"></td>
      <td width="192"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1002; ?>
        </font></td>
      <td width="25"></td>
      <td width="200"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA1001; ?>
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="24"></td>
      <td width="192"><font face="Arial, Helvetica, sans-serif">GA 
        <input type="text" name="R1002" value="<?php echo($result->R1002) ;?>" size="3">
        </font></td>
      <td width="25"></td>
      <td width="200"><font face="Arial, Helvetica, sans-serif">GA 
        <input type="text" name="R1001" value="<?php echo($result->R1001) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="24"></td>
      <td width="192">Pts
        <input type="text" name="PTSR1002" value="<?php echo($resultPTSR->R1002) ;?>" size="2">
      </td>
      <td width="25"></td>
      <td width="200">Pts 
        <input type="text" name="PTSR1001" value="<?php echo($resultPTSR->R1001) ;?>" size="2">
      </td>
    </tr>
    <tr align="center" valign="top"> 
      <td colspan="4" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr align="center" valign="top"> 
      <td colspan="4" bgcolor="#FF0000"> 
        <input type="submit" value="modifier" name="submit">
        <?php
	}
	


else
	{
	?>
    </tr>
    <tr align="center" valign="top"> 
      <td colspan="4" bgcolor="#00FFFF"><a href="accueilsaisiescore.php" target="_top"><b>Retour 
        &agrave; l'accueil</b></a></td>
    </tr>
  </table>  

		</form>



<form name="insertion" action="transfertScores.php?champ=<?php echo $champ; ?>&annee=<?php echo $annee; ?>&type=4&AR=1" method="POST">
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
										  WHERE  division = $champ and annee=$annee") ;			
													
	 
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


<?php
	}	
?>
	