<html>
  <head>
<title>modification de donn�es en PHP :: partie2</title>

<meta name=viewport content="width=device-width, initial-scale=1">
</head>

<body>

<?php

$champ=$_GET['champ']; 
$annee=$_GET['annee']; 
$champ=$id;
echo $id; 
echo $annee; 

require ("../../../phasesFinales/fonctionListeEquipes.php");	
require ("../../../phasesFinales/fonctionScores.php");


?>
<?php

if ($AR==1)
{
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
      <td colspan="4" bgcolor="#FF0000"><font face="Arial, Helvetica, sans-serif"><b>DEMI 
        DE FINALE<font size="4" face="Arial, Helvetica, sans-serif"> 
        <?php echo $division; ?>
        ( 
        <?php echo $id; ?>
        ) 
        <?php echo $annee; ?>
        </font></b></font></td>
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
	
//***************************************************************	
//******************  tableau aller retour   ********************
//***************************************************************

else
	{
	?>
	
	<form name="insertion" action="transfertScores.php?annee=<?php echo $annee;?>&champ=<?php echo $champ; ?>&type=1&AR=<?php echo $AR; ?>" method="POST">
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
		  $PtsA = $id + 500;
		  $requetePTSA = mysql_query( "	SELECT id ,	A4001, A4002, A4003, A4004 ,A4005, A4006, A4007, A4008
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
      <td colspan="4" height="32" bgcolor="#FF0000"><b><font size="4" face="Arial, Helvetica, sans-serif"> 
        <?php echo $nomDivision; ?>
        </font></b></td>
    </tr>
    <tr align="center"> 
      <td colspan="4" height="32" bgcolor="#FF0000"><b><font size="4" face="Arial, Helvetica, sans-serif"> 
        Finale Aller Retour ( 
        <?php echo $champ; ?>
        ) 
        <?php echo $annee; ?>
        </font></b> </td>
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
      </td>
    </tr>
    <tr align="center" valign="top"> 
      <td colspan="4" bgcolor="#00FFFF"><a href="accueilsaisiescore.php" target="_top"><b>Retour 
        &agrave; l'accueil</b></a></td>
    </tr>
  </table>  

		</form>

<?php
	}	
?>
	