<html>
  <head>
<title>modification de données en PHP :: partie2</title>
<meta name=viewport content="width=device-width, initial-scale=1">
</head>
<?php $page="score"; ?>
<?php $division=$_GET['division']; ?>
<?php $comite=$_GET['comite']; ?>
<?php $annee=$_GET['annee']; ?>
<?php $type=$_GET['type'];?>
<?php //require ("../fonctions_phases_finales.php");  ?>
<?php //require ("../fonctionspfterr.php");  ?>


<body>
<form name="insertion" action="saisieScore2.php?division=<?php echo $division ;?>&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>&comite=<?php echo $comite ;?>" method="POST">
  <b><font size="4"> 
  
  
  
  </font></b> <b><font size="4"> 
 <?php
require ("../../fonctionspfterrESDL2019.php"); 
 quartsPlusBarrages2019 ($comite, $division, $annee);
// require ("../../connect/connection2.php");
 $phpbd_pfterr_e="php".''.$comite.''."_pfterr_e"; 
 $phpbd_pfterr_r="php".''.$comite.''."_pfterr_r";
 $phpcomite_clubs ="php".''.$comite.''."_clubs";
 echo $phpbd_pfterr_e;
  $reponse = mysql_query( " SELECT 	clubA8001, clubA8002, clubA8003, clubA8004,
  									clubA8005, clubA8006, clubA8007, clubA8008,
									clubA4001, clubA4003, clubA4005, clubA4007
    					     FROM $phpbd_pfterr_e
							 WHERE  annee=$annee AND division =$division" ) ;
 										 while ($donnees = mysql_fetch_array($reponse) )
												{ 		
												$clubA8001 = $donnees['clubA8001']; 	
												$clubA8002 = $donnees['clubA8002']; 
												$clubA8003 = $donnees['clubA8003']; 
												$clubA8004 = $donnees['clubA8004']; 
												$clubA8005 = $donnees['clubA8005']; 
												$clubA8006 = $donnees['clubA8006']; 
												$clubA8007 = $donnees['clubA8007']; 
												$clubA8008 = $donnees['clubA8008']; 
												
												$clubA4001 = $donnees['clubA4001']; 
												$clubA4003 = $donnees['clubA4003']; 
												$clubA4005 = $donnees['clubA4005']; 
												$clubA4007 = $donnees['clubA4007']; 
												
												}
												echo $clubA8001.''. $clubA8002;
				
						$reponse = mysql_query( " SELECT nom
    					  FROM $phpcomite_clubs
						  WHERE  id=$clubA8001 " ) ;
 								while ($donnees = mysql_fetch_array($reponse) )
										{ 		
										$clubA8001 = $donnees['nom']; 	
										}
										
						$reponse = mysql_query( " SELECT nom
    					  FROM $phpcomite_clubs
						  WHERE  id=$clubA8002 " ) ;
 								while ($donnees = mysql_fetch_array($reponse) )
										{ 		
										$clubA8002 = $donnees['nom']; 	
										}
										
					 $reponse = mysql_query( " SELECT nom
    					  FROM $phpcomite_clubs
						  WHERE  id=$clubA8003 " ) ;
 								while ($donnees = mysql_fetch_array($reponse) )
										{ 		
										$clubA8003 = $donnees['nom']; 	
										}
										
					$reponse = mysql_query( " SELECT nom
    					  FROM $phpcomite_clubs
						  WHERE  id=$clubA8004 " ) ;
 								while ($donnees = mysql_fetch_array($reponse) )
										{ 		
										$clubA8004 = $donnees['nom']; 	
										}
										
					$reponse = mysql_query( " SELECT nom
    					  FROM $phpcomite_clubs
						  WHERE  id=$clubA8005 " ) ;
 								while ($donnees = mysql_fetch_array($reponse) )
										{ 		
										$clubA8005 = $donnees['nom']; 	
										}
										
					$reponse = mysql_query( " SELECT nom
    					  FROM $phpcomite_clubs
						  WHERE  id=$clubA8006 " ) ;
 								while ($donnees = mysql_fetch_array($reponse) )
										{ 		
										$clubA8006 = $donnees['nom']; 	
										}
										
					$reponse = mysql_query( " SELECT nom
    					  FROM $phpcomite_clubs
						  WHERE  id=$clubA8007 " ) ;
 								while ($donnees = mysql_fetch_array($reponse) )
										{ 		
										$clubA8007 = $donnees['nom']; 	
										}
										
					$reponse = mysql_query( " SELECT nom
    					  FROM $phpcomite_clubs
						  WHERE  id=$clubA8008 " ) ;
 								while ($donnees = mysql_fetch_array($reponse) )
										{ 		
										$clubA8008 = $donnees['nom']; 
											
										}				
  
					$reponse = mysql_query( " SELECT nom
    					  FROM $phpcomite_clubs
						  WHERE  id=$clubA4001 " ) ;
 								while ($donnees = mysql_fetch_array($reponse) )
										{ 		
										$clubA4001 = $donnees['nom']; 	
										}
										
					
										
					$reponse = mysql_query( " SELECT nom
    					  FROM $phpcomite_clubs
						  WHERE  id=$clubA4003 " ) ;
 								while ($donnees = mysql_fetch_array($reponse) )
										{ 		
										$clubA4003 = $donnees['nom']; 	
										}
										
					$reponse = mysql_query( " SELECT nom
    					  FROM $phpcomite_clubs
						  WHERE  id=$clubA4005 " ) ;
 								while ($donnees = mysql_fetch_array($reponse) )
										{ 		
										$clubA4005 = $donnees['nom']; 	
										}															
					$reponse = mysql_query( " SELECT nom
    					  FROM $phpcomite_clubs
						  WHERE  id=$clubA4007 " ) ;
 								while ($donnees = mysql_fetch_array($reponse) )
										{ 		
										$clubA4007 = $donnees['nom']; 	
										}						



//***************  Scores  ****************************							
												
												
												
			$requete = mysql_query( "SELECT division , 	A8001, A8002, A8003, A8004,
														A8005, A8006, A8007, A8008,
														A4001, A4002, A4003, A4004,
														A4005, A4006, A4007, A4008,
													    A2001, A2002, A2003, A2004,
														A1001, A1002

									  FROM $phpbd_pfterr_r
									  WHERE  annee=$annee AND division =$division" ) ;			
												
 

  if( $result = mysql_fetch_object( $requete ) )
  {
  ?>
  <?php
 }
mysql_close(); // Déconnexion de MySQL
?>
  </font></b> 
  <input type="hidden" name="division" value="<?php echo($division) ;?>">
  <table border="0" cellspacing="0" cellpadding="10" width="400">
    <tr align="center"> 
      <td colspan="4"> </td>
    </tr>
    <tr align="center"> 
      <td colspan="4" bgcolor="#FF0000"><font face="Arial, Helvetica, sans-serif"><b>BARRAGES<font size="4" face="Arial, Helvetica, sans-serif"> 
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
          <?php	echo $clubA8001; ?>
          </font></p>
        <p><font face="Arial, Helvetica, sans-serif"> 
          <input type="text" name="A8001" value="<?php echo($result->A8001) ;?>" size="3">
          </font></p>
      </td>
      <td width="5">&nbsp;</td>
      <td width="138"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA8002; ?>
        <br>
        <br>
        <input type="text" name="A8002" value="<?php echo($result->A8002) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="10">2</td>
      <td width="167"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA8003; ?>
        <br>
        <br>
        <input type="text" name="A8003" value="<?php echo($result->A8003) ;?>" size="3">
        </font></td>
      <td width="5">&nbsp;</td>
      <td width="138"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA8004; ?>
        <br>
        <br>
        <input type="text" name="A8004" value="<?php echo($result->A8004) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="10">3</td>
      <td width="167"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA8005; ?>
        <br>
        <br>
        <input type="text" name="A8005" value="<?php echo($result->A8005) ;?>" size="3">
        </font></td>
      <td width="5"><font face="Arial, Helvetica, sans-serif"> </font></td>
      <td width="138"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA8006; ?>
        <br>
        <br>
        <input type="text" name="A8006" value="<?php echo($result->A8006) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="10">4</td>
      <td width="167"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA8007; ?>
        <br>
        <br>
        <input type="text" name="A8007" value="<?php echo($result->A8007) ;?>" size="3">
        </font></td>
      <td width="5">&nbsp;</td>
      <td width="138"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA8008; ?>
        <br>
        <br>
        <input type="text" name="A8008" value="<?php echo($result->A8008) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="10">5</td>
      <td width="167"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA8007; ?>
        <br>
        8009 &agrave; d&eacute;finir<br>
        <input type="text" name="A80072" value="<?php echo($result->A8007) ;?>" size="3">
        </font></td>
      <td width="5">&nbsp;</td>
      <td width="138"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA8007; ?>
        <br>
        8010 &agrave; d&eacute;finir<br>
        <input type="text" name="A80073" value="<?php echo($result->A8007) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="10">6</td>
      <td width="167"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA8007; ?>
        <br>
        8011&agrave; d&eacute;finir 
        <input type="text" name="A80075" value="<?php echo($result->A8007) ;?>" size="3">
        </font></td>
      <td width="5">&nbsp;</td>
      <td width="138"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA8007; ?>
        <br>
        8012&agrave; d&eacute;finir<br>
        <input type="text" name="A80074" value="<?php echo($result->A8007) ;?>" size="3">
        </font></td>
    </tr>
    <tr align="center" bgcolor="#00CCFF"> 
      <td width="10">&nbsp;</td>
      <td width="167"><b><font face="Arial, Helvetica, sans-serif">QUARTS</font></b></td>
      <td width="5">&nbsp;</td>
      <td width="138">&nbsp;</td>
    </tr>
    <tr align="center"> 
      <td width="10">1</td>
      <td width="167"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA4001; ?>
        <br>
        <br>
        <input type="text" name="A4001" value="<?php echo($result->A4001) ;?>" size="3">
        </font></td>
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
      <td width="5">&nbsp;</td>
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
      <td width="10">&nbsp;</td>
      <td width="167"><font face="Arial, Helvetica, sans-serif"><b>DEMI</b></font></td>
      <td width="5">&nbsp;</td>
      <td width="138">&nbsp;</td>
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
      <td colspan="4"></td>
    </tr>
  </table>
</form>



<p>&nbsp;</p>
</body>
</html>
