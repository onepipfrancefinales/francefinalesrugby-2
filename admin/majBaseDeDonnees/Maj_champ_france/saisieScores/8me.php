<html>
  <head>
<title>modification de donn�es en PHP :: partie2</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name=viewport content="width=device-width, initial-scale=1">
</head>

<body>


<?php 

$champ=$_GET['champ']; 
$annee=$_GET['annee']; 
echo $champ;
echo $annee; 



require ("../../../phasesFinales/fonctionListeEquipes.php");	
require ("../../../phasesFinales/fonctionScores.php");

?>
<?php

if ($AR==2)
{
?>
	<form name="insertion" action="transfertScores.php?annee=<?php echo $annee;?>&champ=<?php echo $champ; ?>&type=8&AR=<?php echo $AR; ?>" method="POST">
			  <b><font size="4"> 
			  <?php
			mysql_connect("sql.franceserv.fr", "onepip-france", "Lavelan1969&"); 
			mysql_select_db("onepip-france-db1"); 
			?>
			  </font></b> <b><font size="4"> 
	 <?php
			  
		// ***********  R�cup�ration des scores des matchs ALLER  ***************************	 
		
		$requeteAGA = mysql_query( "	SELECT id ,	A8001, A8002, A8003, A8004 ,A8005, A8006, A8007, A8008,
													A8009, A8010, A8011, A8012, A8013, A8014, A8015, A8016
													
											FROM bdpfScoresA 
											WHERE  division = $champ AND annee=$annee ") ;
			 
			
			  if( $resultAGA = mysql_fetch_object( $requeteAGA ) )
				{
					
				}
			  
	// *************************************************************************************  
	// ***********   R�cup�ration des scores des matchs RETOUR   ***************************	 
		
		$requeteRGA = mysql_query( "	SELECT id ,	R8001, R8002, R8003, R8004 ,R8005, R8006, R8007, R8008,
													R8009, R8010, R8011, R8012, R8013, R8014, R8015, R8016
													
												 
											FROM bdpfScoresR 
											WHERE  division = $champ AND annee = $annee ") ;
			 
			
			  if( $resultRGA = mysql_fetch_object( $requeteRGA ) )
				{
					
				}
			  
			  
		// R�cup�ration des points terrain des matchs ALLER
			  $PtsA = $champ + 500;
			  $requetePTSA = mysql_query( "SELECT id ,	A8001, A8002, A8003, A8004 ,A8005, A8006, A8007, A8008,
														A8009, A8010, A8011, A8012, A8013, A8014, A8015, A8016
														
										FROM bdpfScoresA 
										WHERE  division = $PtsA and annee=$annee " ) ;
			 
			
			  if( $resultPTSA = mysql_fetch_object( $requetePTSA ) )
					{
					}
					
				 
			  
		// R�cup�ration des points terrain des matchs RETOUR
			  $PtsR = $champ + 500;
			  $requetePTSR = mysql_query( "SELECT id ,	R8001, R8002, R8003, R8004 ,R8005, R8006, R8007, R8008,
														R8009, R8010, R8011, R8012, R8013, R8014, R8015, R8016
							
													
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
		<tr align="center" bgcolor="#FFFFFF"> 
		  <td colspan="4" height="32"><b><font size="4" face="Arial, Helvetica, sans-serif"> 
			<?php echo $nomDivision; ?>
			</font></b></td>
		</tr>
		<tr align="center"> 
		  
      <td colspan="4" height="32" bgcolor="#FF0000"><b><font size="4" face="Arial, Helvetica, sans-serif">8me 
        de Finale AR( 
        <?php echo $id; ?>
        ) 
        <?php echo $annee; ?>
        </font></b> </td>
		</tr>
		<tr align="center"> 
		  <td bgcolor="#CCCCCC">1</td>
		  <td width="200" bgcolor="#CCCCCC"> 
			<?php	echo $clubA8001; ?>
		  </td>
		  <td width="25" bgcolor="#CCCCCC">-</td>
		  <td width="192" bgcolor="#CCCCCC"> 
			<?php	echo $clubA8002; ?>
		  </td>
		</tr>
		<tr align="center"> 
		  <td bgcolor="#CCCCCC"></td>
		  <td width="200" bgcolor="#CCCCCC"> GA 
			<input type="text" name="A8001" value="<?php echo($resultAGA->A8001) ;?>" size="3">
		  </td>
		  <td width="25" bgcolor="#CCCCCC"></td>
		  <td width="192" bgcolor="#CCCCCC"> GA 
			<input type="text" name="A8002" value="<?php echo($resultAGA->A8002) ;?>" size="3">
		  </td>
		</tr>
		<tr align="center"> 
		  <td bgcolor="#CCCCCC">&nbsp;</td>
		  <td width="200" bgcolor="#CCCCCC"> Pts 
			<input type="text" name="PTSA8001" value="<?php echo($resultPTSA->A8001) ;?>" size="2">
			<br>
		  </td>
		  <td width="25" bgcolor="#CCCCCC"></td>
		  <td width="192" bgcolor="#CCCCCC"> Pts 
			<input type="text" name="PTSA8002" value="<?php echo($resultPTSA->A8002) ;?>" size="2">
		  </td>
		</tr>
		<tr align="center"> 
		  <td bgcolor="#CCCCCC"></td>
		  <td width="192" bgcolor="#CCCCCC"> 
			<?php	echo $clubA8002; ?>
		  </td>
		  <td width="25" bgcolor="#CCCCCC"></td>
		  <td width="200" bgcolor="#CCCCCC"> 
			<?php	echo $clubA8001; ?>
		  </td>
		</tr>
		<tr align="center"> 
		  <td bgcolor="#CCCCCC"></td>
		  <td width="192" bgcolor="#CCCCCC"> GA 
			<input type="text" name="R8002" value="<?php echo($resultRGA->R8002) ;?>" size="3">
		  </td>
		  <td width="25" bgcolor="#CCCCCC"></td>
		  <td width="200" bgcolor="#CCCCCC"> GA 
			<input type="text" name="R8001" value="<?php echo($resultRGA->R8001) ;?>" size="3">
		  </td>
		</tr>
		<tr align="center"> 
		  <td bgcolor="#CCCCCC"></td>
		  <td width="192" bgcolor="#CCCCCC"> Pts 
			<input type="text" name="PTSR8002" value="<?php echo($resultPTSR->R8002) ;?>" size="2">
		  </td>
		  <td width="25" bgcolor="#CCCCCC"></td>
		  <td width="200" bgcolor="#CCCCCC"> Pts 
			<input type="text" name="PTSR8001" value="<?php echo($resultPTSR->R8001) ;?>" size="2">
			<br>
		  </td>
		</tr>
		<tr align="center"> 
		  <td width="24">2</td>
		  <td width="200"> 
			<?php	echo $clubA8003; ?>
		  </td>
		  <td width="25">-</td>
		  <td width="192"> 
			<?php	echo $clubA8004; ?>
		  </td>
		</tr>
		<tr align="center"> 
		  <td width="24"></td>
		  <td width="200"> GA 
			<input type="text" name="A8003" value="<?php echo($resultAGA->A8003) ;?>" size="3">
		  </td>
		  <td width="25"></td>
		  <td width="192"> GA 
			<input type="text" name="A8004" value="<?php echo($resultAGA->A8004) ;?>" size="3">
		  </td>
		</tr>
		<tr align="center"> 
		  <td width="24"></td>
		  <td width="200">Pts 
			<input type="text" name="PTSA8003" value="<?php echo($resultPTSA->A8003) ;?>" size="2">
		  </td>
		  <td width="25"></td>
		  <td width="192"> Pts 
			<input type="text" name="PTSA8004" value="<?php echo($resultPTSA->A8004) ;?>" size="2">
		  </td>
		</tr>
		<tr align="center"> 
		  <td width="24"></td>
		  <td width="192"> 
			<?php	echo $clubA8004; ?>
		  </td>
		  <td width="25"></td>
		  <td width="200"> 
			<?php	echo $clubA8003; ?>
		  </td>
		</tr>
		<tr align="center"> 
		  <td width="24"></td>
		  <td width="192"> GA 
			<input type="text" name="R8004" value="<?php echo($resultRGA->R8004) ;?>" size="3">
			- </td>
		  <td width="25"></td>
		  <td width="200"> GA 
			<input type="text" name="R8003" value="<?php echo($resultRGA->R8003) ;?>" size="3">
			- </td>
		</tr>
		<tr align="center"> 
		  <td width="24"></td>
		  <td width="192"> Pts 
			<input type="text" name="PTSR8004" value="<?php echo($resultPTSR->R8004) ;?>" size="2">
		  </td>
		  <td width="25"></td>
		  <td width="200">Pts 
			<input type="text" name="PTSR8003" value="<?php echo($resultPTSR->R8003) ;?>" size="2">
		  </td>
		</tr>
		<tr align="center"> 
		  <td bgcolor="#CCCCCC">3</td>
		  <td width="200" bgcolor="#CCCCCC"> 
			<?php	echo $clubA8005; ?>
		  </td>
		  <td width="25" bgcolor="#CCCCCC">-</td>
		  <td width="192" bgcolor="#CCCCCC"> 
			<?php	echo $clubA8006; ?>
		  </td>
		</tr>
		<tr align="center" bgcolor="#CCCCCC"> 
		  <td bgcolor="#CCCCCC"></td>
		  <td width="200" height="51"> GA 
			<input type="text" name="A8005" value="<?php echo($resultAGA->A8005) ;?>" size="3">
		  </td>
		  <td width="25" height="51"></td>
		  <td width="192" height="51"> GA 
			<input type="text" name="A8006" value="<?php echo($resultAGA->A8006) ;?>" size="3">
		  </td>
		</tr>
		<tr align="center" bgcolor="#CCCCCC"> 
		  <td bgcolor="#CCCCCC"></td>
		  <td width="200" height="51"> Pts 
			<input type="text" name="PTSA8005" value="<?php echo($resultPTSA->A8005) ;?>" size="2">
		  </td>
		  <td width="25" height="51"></td>
		  <td width="192" height="51"> Pts 
			<input type="text" name="PTSA8006" value="<?php echo($resultPTSA->A8006) ;?>" size="2">
		  </td>
		</tr>
		<tr align="center" bgcolor="#CCCCCC"> 
		  <td bgcolor="#CCCCCC"></td>
		  <td width="192"> 
			<?php	echo $clubA8006; ?>
		  </td>
		  <td width="25" height="51"></td>
		  <td width="200"> 
			<?php	echo $clubA8005; ?>
		  </td>
		</tr>
		<tr align="center" bgcolor="#CCCCCC"> 
		  <td bgcolor="#CCCCCC">&nbsp;</td>
		  <td width="192" height="51"> GA 
			<input type="text" name="R8006" value="<?php echo($resultRGA->R8006) ;?>" size="3">
		  </td>
		  <td width="25" height="51">&nbsp;</td>
		  <td width="200" height="51"> GA 
			<input type="text" name="R8005" value="<?php echo($resultRGA->R8005) ;?>" size="3">
		  </td>
		</tr>
		<tr align="center" bgcolor="#CCCCCC"> 
		  <td bgcolor="#CCCCCC">&nbsp;</td>
		  <td width="192" height="51"> Pts 
			<input type="text" name="PTSR8006" value="<?php echo($resultPTSR->R8006) ;?>" size="2">
		  </td>
		  <td width="25" height="51">&nbsp;</td>
		  <td width="200" height="51"> Pts 
			<input type="text" name="PTSR8005" value="<?php echo($resultPTSR->R8005) ;?>" size="2">
		  </td>
		</tr>
		<tr align="center"> 
		  <td width="24">4</td>
		  <td width="200"> 
			<?php	echo $clubA8007; ?>
		  </td>
		  <td width="25">-</td>
		  <td width="192"> 
			<?php	echo $clubA8008; ?>
		  </td>
		</tr>
		<tr align="center"> 
		  <td width="24"></td>
		  <td width="200"> GA 
			<input type="text" name="A8007" value="<?php echo($resultAGA->A8007) ;?>" size="3">
		  </td>
		  <td width="25">&nbsp;</td>
		  <td width="192"> GA 
			<input type="text" name="A8008" value="<?php echo($resultAGA->A8008) ;?>" size="3">
		  </td>
		</tr>
		<tr align="center"> 
		  <td width="24"></td>
		  <td width="200"> Pts 
			<input type="text" name="PTSA8007" value="<?php echo($resultPTSA->A8007) ;?>" size="2">
		  </td>
		  <td width="25"></td>
		  <td width="192"> Pts 
			<input type="text" name="PTSA8008" value="<?php echo($resultPTSA->A8008) ;?>" size="2">
		  </td>
		</tr>
		<tr align="center"> 
		  <td width="24"></td>
		  <td width="192"> 
			<?php	echo $clubA8008; ?>
		  </td>
		  <td width="25"></td>
		  <td width="200"> 
			<?php	echo $clubA8007; ?>
		  </td>
		</tr>
		<tr align="center"> 
		  <td width="24"></td>
		  <td width="192"> GA 
			<input type="text" name="R8008" value="<?php echo($resultRGA->R8008) ;?>" size="3">
		  </td>
		  <td width="25"></td>
		  <td width="200"> GA 
			<input type="text" name="R8007" value="<?php echo($resultRGA->R8007) ;?>" size="3">
		  </td>
		</tr>
		<tr align="center"> 
		  <td width="24"></td>
		  <td width="192"> Pts 
			<input type="text" name="PTSR8008" value="<?php echo($resultPTSR->R8008) ;?>" size="2">
		  </td>
		  <td width="25"></td>
		  <td width="200"> Pts 
			<input type="text" name="PTSR8007" value="<?php echo($resultPTSR->R8007) ;?>" size="2">
		  </td>
		</tr>
		<tr align="center"> 
		  <td bgcolor="#CCCCCC">5</td>
		  <td width="200" bgcolor="#CCCCCC"> 
			<?php	echo $clubA8009; ?>
		  </td>
		  <td width="25" bgcolor="#CCCCCC">-</td>
		  <td width="192" bgcolor="#CCCCCC"> 
			<?php	echo $clubA8010; ?>
		  </td>
		</tr>
		<tr align="center" bgcolor="#CCCCCC"> 
		  <td bgcolor="#CCCCCC"></td>
		  <td width="200"> GA 
			<input type="text" name="A8009" value="<?php echo($resultAGA->A8009) ;?>" size="3">
		  </td>
		  <td width="25"></td>
		  <td width="192">GA 
			<input type="text" name="A8010" value="<?php echo($resultAGA->A8010) ;?>" size="3">
		  </td>
		</tr>
		<tr align="center" bgcolor="#CCCCCC"> 
		  <td bgcolor="#CCCCCC"></td>
		  <td width="200"> Pts 
			<input type="text" name="PTSA8009" value="<?php echo($resultPTSA->A8009) ;?>" size="2">
		  </td>
		  <td width="25"></td>
		  <td width="192"> Pts 
			<input type="text" name="PTSA8010" value="<?php echo($resultPTSA->A8010) ;?>" size="2">
		  </td>
		</tr>
		<tr align="center" bgcolor="#CCCCCC"> 
		  <td bgcolor="#CCCCCC"></td>
		  <td width="192"> 
			<?php	echo $clubA8010; ?>
		  </td>
		  <td width="25"></td>
		  <td width="200"> 
			<?php	echo $clubA8009; ?>
		  </td>
		</tr>
		<tr align="center" bgcolor="#CCCCCC"> 
		  <td bgcolor="#CCCCCC"></td>
		  <td width="192"> GA 
			<input type="text" name="R8010" value="<?php echo($resultRGA->R8010) ;?>" size="3">
		  </td>
		  <td width="25">&nbsp;</td>
		  <td width="200"> GA 
			<input type="text" name="R8009" value="<?php echo($resultRGA->R8009) ;?>" size="3">
		  </td>
		</tr>
		<tr align="center" bgcolor="#CCCCCC"> 
		  <td bgcolor="#CCCCCC"></td>
		  <td width="192"> Pts 
			<input type="text" name="PTSR8010" value="<?php echo($resultPTSR->R8010) ;?>" size="2">
		  </td>
		  <td width="25"></td>
		  <td width="200"> Pts 
			<input type="text" name="PTSR8009" value="<?php echo($resultPTSR->R8009) ;?>" size="2">
		  </td>
		</tr>
		<tr align="center"> 
		  <td width="24">6</td>
		  <td width="200"> 
			<?php	echo $clubA8011; ?>
		  </td>
		  <td width="25">-</td>
		  <td width="192"> 
			<?php	echo $clubA8012; ?>
		  </td>
		</tr>
		<tr align="center"> 
		  <td width="24"></td>
		  <td width="200"> GA 
			<input type="text" name="A8011" value="<?php echo($resultAGA->A8011) ;?>" size="3">
		  </td>
		  <td width="25">&nbsp;</td>
		  <td width="192"> GA 
			<input type="text" name="A8012" value="<?php echo($resultAGA->A8012) ;?>" size="3">
		  </td>
		</tr>
		<tr align="center"> 
		  <td width="24">&nbsp;</td>
		  <td width="200">Pts 
			<input type="text" name="PTSA8011" value="<?php echo($resultPTSA->A8011) ;?>" size="2">
		  </td>
		  <td width="25">&nbsp;</td>
		  <td width="192">Pts 
			<input type="text" name="PTSA8012" value="<?php echo($resultPTSA->A8012) ;?>" size="2">
		  </td>
		</tr>
		<tr align="center"> 
		  <td width="24">&nbsp;</td>
		  <td width="192"> 
			<?php	echo $clubA8012; ?>
		  </td>
		  <td width="25">&nbsp;</td>
		  <td width="200"> 
			<?php	echo $clubA8011; ?>
		  </td>
		</tr>
		<tr align="center"> 
		  <td width="24">&nbsp;</td>
		  <td width="192"> GA 
			<input type="text" name="R8012" value="<?php echo($resultRGA->R8012) ;?>" size="3">
		  </td>
		  <td width="25">&nbsp;</td>
		  <td width="200"> GA 
			<input type="text" name="R8011" value="<?php echo($resultRGA->R8011) ;?>" size="3">
		  </td>
		</tr>
		<tr align="center"> 
		  <td width="24">&nbsp;</td>
		  <td width="192">Pts 
			<input type="text" name="PTSR8012" value="<?php echo($resultPTSR->R8012) ;?>" size="2">
		  </td>
		  <td width="25">&nbsp;</td>
		  <td width="200">Pts 
			<input type="text" name="PTSR8011" value="<?php echo($resultPTSR->R8011) ;?>" size="2">
		  </td>
		</tr>
		<tr align="center"> 
		  <td rowspan="2" bgcolor="#CCCCCC">7</td>
		  <td width="200" bgcolor="#CCCCCC"> 
			<?php	echo $clubA8013; ?>
		  </td>
		  <td width="25" bgcolor="#CCCCCC">-</td>
		  <td width="192" bgcolor="#CCCCCC"> 
			<?php	echo $clubA8014; ?>
		  </td>
		</tr>
		<tr align="center" bgcolor="#CCCCCC"> 
		  <td width="200"> GA 
			<input type="text" name="A8013" value="<?php echo($resultAGA->A8013) ;?>" size="3">
		  </td>
		  <td width="25">&nbsp;</td>
		  <td width="192"> GA 
			<input type="text" name="A8014" value="<?php echo($resultAGA->A8014) ;?>" size="3">
		  </td>
		</tr>
		<tr align="center"> 
		  <td bgcolor="#CCCCCC">&nbsp;</td>
		  <td width="200" bgcolor="#CCCCCC">Pts 
			<input type="text" name="PTSA8013" value="<?php echo($resultPTSA->A8013) ;?>" size="2">
		  </td>
		  <td width="25" bgcolor="#CCCCCC">&nbsp;</td>
		  <td width="192" bgcolor="#CCCCCC">Pts 
			<input type="text" name="PTSA8014" value="<?php echo($resultPTSA->A8014) ;?>" size="2">
		  </td>
		</tr>
		<tr align="center"> 
		  <td bgcolor="#CCCCCC">&nbsp;</td>
		  <td width="192" bgcolor="#CCCCCC"> 
			<?php	echo $clubA8014; ?>
		  </td>
		  <td width="25" bgcolor="#CCCCCC">&nbsp;</td>
		  <td width="200" bgcolor="#CCCCCC"> 
			<?php	echo $clubA8013; ?>
		  </td>
		</tr>
		<tr align="center"> 
		  <td bgcolor="#CCCCCC">&nbsp;</td>
		  <td width="192" bgcolor="#CCCCCC"> GA 
			<input type="text" name="R8014" value="<?php echo($resultRGA->R8014) ;?>" size="3">
		  </td>
		  <td width="25" bgcolor="#CCCCCC">&nbsp;</td>
		  <td width="200" bgcolor="#CCCCCC"> GA 
			<input type="text" name="R8013" value="<?php echo($resultRGA->R8013) ;?>" size="3">
		  </td>
		</tr>
		<tr align="center"> 
		  <td bgcolor="#CCCCCC">&nbsp;</td>
		  <td width="192" bgcolor="#CCCCCC">Pts 
			<input type="text" name="PTSR8014" value="<?php echo($resultPTSR->R8014) ;?>" size="2">
		  </td>
		  <td width="25" bgcolor="#CCCCCC">&nbsp;</td>
		  <td width="200" bgcolor="#CCCCCC">Pts 
			<input type="text" name="PTSR8013" value="<?php echo($resultPTSR->R8013) ;?>" size="2">
		  </td>
		</tr>
		<tr align="center"> 
		  <td width="24">8</td>
		  <td width="200"> 
			<?php	echo $clubA8015; ?>
		  </td>
		  <td width="25">-</td>
		  <td width="192"> 
			<?php	echo $clubA8016; ?>
		  </td>
		</tr>
		<tr align="center"> 
		  <td width="24">&nbsp;</td>
		  <td width="200"> GA 
			<input type="text" name="A8015" value="<?php echo($resultAGA->A8015) ;?>" size="3">
		  </td>
		  <td width="25">&nbsp;</td>
		  <td width="192"> GA 
			<input type="text" name="A8016" value="<?php echo($resultAGA->A8016) ;?>" size="3">
		  </td>
		</tr>
		<tr align="center"> 
		  <td width="24">&nbsp;</td>
		  <td width="200">Pts 
			<input type="text" name="PTSA8015" value="<?php echo($resultPTSA->A8015) ;?>" size="2">
		  </td>
		  <td width="25">&nbsp;</td>
		  <td width="192">Pts 
			<input type="text" name="PTSA8016" value="<?php echo($resultPTSA->A8016) ;?>" size="2">
		  </td>
		</tr>
		<tr align="center"> 
		  <td width="24">&nbsp;</td>
		  <td width="192"> 
			<?php	echo $clubA8016; ?>
		  </td>
		  <td width="25">&nbsp;</td>
		  <td width="200"> 
			<?php	echo $clubA8015; ?>
		  </td>
		</tr>
		<tr align="center"> 
		  <td width="24">&nbsp;</td>
		  <td width="192"> GA 
			<input type="text" name="R8016" value="<?php echo($resultRGA->R8016) ;?>" size="3">
		  </td>
		  <td width="25">&nbsp;</td>
		  <td width="200"> GA 
			<input type="text" name="R8015" value="<?php echo($resultRGA->R8015) ;?>" size="3">
		  </td>
		</tr>
		<tr align="center"> 
		  <td width="24">&nbsp;</td>
		  <td width="192">Pts 
			<input type="text" name="PTSR8016" value="<?php echo($resultPTSR->R8016) ;?>" size="2">
		  </td>
		  <td width="25">&nbsp;</td>
		  <td width="200">Pts 
			<input type="text" name="PTSR8015" value="<?php echo($resultPTSR->R8015) ;?>" size="2">
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



else
{
?>

	<form name="insertion" action="transfertScores.php?annee=<?php echo $annee; ?>&champ=<?php echo $champ; ?>&type=8&AR=<?php echo $AR; ?>" method="POST">
	  <b><font size="4"> 
	  <?php
	mysql_connect("sql.franceserv.fr", "onepip-france", "Lavelan1969&"); 
	mysql_select_db("onepip-france-db1"); 
	?>
	  </font></b> <b><font size="4"> 
	  <?php
	  
	 
	  $requete = mysql_query( "SELECT id, A8001, A8002, A8003, A8004 ,A8005, A8006, A8007, A8008,
										  A8009, A8010, A8011, A8012, A8013, A8014, A8015, A8016 
								FROM bdpfScoresA 
								WHERE  division = $champ AND annee = $annee" ) ;
	 
	
	  if( $result = mysql_fetch_object( $requete ) )
		{
		}
	mysql_close(); // D�connexion de MySQL
	?>
	  </font></b> 
	  <input type="hidden" name="id" value="<?php echo($id) ;?>">
	  
  <table border="0" cellspacing="0" cellpadding="10" width="100%">
    <tr align="center"> 
      <td colspan="4"> </td>
    </tr>
    <tr align="center" bgcolor="#FFFFFF"> 
      <td colspan="4" height="32"><b><font size="4" face="Arial, Helvetica, sans-serif"> 
        <?php echo $nomDivision; ?>
        </font></b></td>
    </tr>
    <tr align="center"> 
      <td colspan="4" height="32" bgcolor="#FF0000"> <b><font size="4" face="Arial, Helvetica, sans-serif">8me 
        de Finale ( 
        <?php echo $champ; ?>
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

<?php
	}
	
?>


	
	