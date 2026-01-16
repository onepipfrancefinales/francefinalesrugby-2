<?php
//if ($comite=="mpy" )
//	{
	echo "<hr>";
	
	 $phpmpy_pfterr = "phpmpy_pf".''.$annee;
	 
	echo $phpmpy_pfterr;echo "<br />";
	
	 include ("hautindexPage.php");
						
	 $reponse  = $bdd->query("
				SELECT type
				FROM $phpmpy_pfterr
				WHERE  division=$division");
				
	 while ($row = $reponse->fetch())
					{
					 $type=$row[0];
					}
			//echo "type : ".''.$type;				
			//$type=15;
								
								
								//********   Quarts Demi Finale  *******
									if ($type==14)
										{
										 include ("quarts.php");
										}
										
								//********   Quarts(AR) Demi(AR) Finale  *******	
									elseif ($type==15)
										{
										// include 'menuOccitanie.php';
										 include ("quartDemiAR.php");
										}
								
								//********   Barrage(8 barragistes) Quarts demi finale *******		
									elseif ($type==13)
										{
										 include 'menuOccitanie.php';
										 include ("barrages8Quarts.php");
										}
										
								//********   Barrage(12 barragistes) Quarts demi finale *******		
									elseif ($type==16)
										{
										 include 'menuOccitanie.php';
										 include ("barrages12Quarts.php");
										}
								
								//********  huitiemes Quarts demi finale *******			
									elseif ($type==17)
										{
										 include 'menuOccitanie.php';
										 include ("barrages8Quarts.php");
										}
//	}
?>