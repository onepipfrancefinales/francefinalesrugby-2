<?php



//***** Récupération des variables *******************************



if (isset ($_GET['division'])) $division = $_GET['division']; else $division='-';
//if (isset ($_GET['comite'])) $comite = $_GET['comite']; else $comite='-';
if (isset ($_GET['annee'])) $annee = $_GET['annee']; else $annee='-';
if (isset ($_GET['type'])) $type = $_GET['type']; else $type='-';
if (isset ($_GET['id'])) $id = $_GET['id']; else $id='-';


?>



 <?php
//***********************************************************************
//***********************************************************************
//**                                                                   **
//**    ----------    TRENTE DEUXIEME DE FINALE         ------------   **
//**																   **
//***********************************************************************
//*********************************************************************** 



 
function trenteDeuxieme2019 ($division, $annee)

{
		
if (isset ($type)) $type=$type; else $type = "non type defini";
if (isset ($type2)) $type=$type2; else $type2 = "non type2 defini";
if (isset ($prefixe)) $prefixe = $prefixe; else $prefixe = "variable prefixe non defini";



$bdpfAnnee = "bdpf".$annee;
$bdpfAnnee_2 = "bdpf".$annee."_2";
//echo $bdpfAnnee;


require '../../connect/connection1.php';
$requete = "SELECT type
			FROM $bdpfAnnee
			WHERE 	id=$division 		";
					$result = mysql_query($requete) ;
					while ($row = mysql_fetch_array($result) )
						{ 
						$type = $row[0];
						}
						
					
						
																	
//echo $type;
//echo substr($type,3,2);
//$type = substr($type,0,3);


//$type = substr($type,3,2);
//echo "test"." ".$type;

//trente-deuxième
 if (substr($type,0,3)==932 or substr($type,0,3) ==964)
	{
	$prefixe = "clubA";
	$prefChiffre = 3200;
	//echo $prefixe.$prefChiffre ;
	}
//seizième
elseif(substr($type,3,2)== 16 or substr($type,3,2)== 32)
	{
	$prefixe = "clubA160";
	//echo $prefixe;
	}
//huitième
elseif (substr($type,5,2)== 08 or substr($type,5,2)== 16)
	{
	$prefixe = "ClubA800";
	
	}
//quarts	
elseif (substr($type,7,2)== 08 or substr($type,7,2)== 16)
	{
	$prefixe = "clubA400";
	}
	
	/*
elseif ($type==2me)

	$prefixe = "ClubA200";

elseif ($type==me)

	$prefixe = "clubA100";

*/
	
//************************         Equipes de E01 à E10  **********************
	
	$debut =1;
	$fin=10;

	$tabNomEquipes = array();
	$tabNomLigue = array();	
   

	
	global $equipes;
	for ($i=$debut ; $i< $fin; $i++)
	{	 
		global ${"clubA320".($i)};
		
		$nom=${"clubA320".($i)};
		$equipes = "E0".$i;
		// echo  $equipes; 
		$reponse = mysql_query( "	SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, $bdpfAnnee.$equipes 
					FROM bdclubs, $bdpfAnnee 
					WHERE bdclubs.code=$bdpfAnnee.$equipes and $bdpfAnnee.id=$division "); 
								while ($row = mysql_fetch_array($reponse) )
									{ 
									$tabNomEquipes[] = $row[1];
									$tabNomLigue[] = $row[2];
									}
	
	}
		
		for ($i=$debut ; $i< $fin; $i++)
			{
			${"clubA320".($i)} = $tabNomEquipes[$i-$debut];
			//echo ${"clubA320".($i)};
			}	
		
	

	//*******************    Equipes de E10 à E65   **************************************
	
	$debut =10;
	$fin=65;

	$tabNomEquipes = array();	
    
	global $equipes;
	for ($i=$debut ; $i< $fin; $i++)
	{	 
		global ${"clubA32".($i)};
		$equipes = "E".$i;
		// echo  $equipes; 
		
	$reponse = mysql_query( "	SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, $bdpfAnnee.$equipes 
								FROM bdclubs, $bdpfAnnee 
								WHERE bdclubs.code=$bdpfAnnee.$equipes and $bdpfAnnee.id=$division "); 
										while ($row = mysql_fetch_array($reponse) )
											{ 
											$tabNomEquipes[] = $row[1];
											}
	}
		for ($i=$debut ; $i< $fin; $i++)
				{
				${"clubA32".($i)} = $tabNomEquipes[$i-$debut];
				
				//echo ${"clubA32".($i)};
				
				}
	
	
	
	

//********************* Trente deuxième de finale***************************************

///trente-deuxième de finale
	$debut =3201;
	$fin=3265;

	
	$tabScores = array();
	for ($i=$debut ; $i< $fin; $i++)
	{	 
   
	 global ${"A".($i)};
	// echo ${"A".($i)};
	 $scores = "A".''.$i;
	
	 $reponse = mysql_query( "SELECT $scores
								FROM $bdpfAnnee
								WHERE  id='$division'"); 
									while ($row = mysql_fetch_array($reponse))
										{ 
										 $tabScores[] = $row[0];
										}
												
	
	 if (isset ($tabScores[$i-$debut])) ${"A".($i)} = $tabScores[$i-$debut]; else ${"A".($i)}='-'; 
	
	
	
	}
	
	
	
	
//***********************         seizième de finale **********************
	$debut =1601;
	$fin=1633;

	
	
	$tabScores = array();
	for ($i=$debut ; $i< $fin; $i++)
	{	 
 //equipes des 16me
	global ${"clubA".($i)};
	



//Scores des 16me
	 global ${"A".($i)};
	 $scores = "A".''.$i;
	//echo $scores;
	
	 $reponse = mysql_query( "SELECT $scores
								FROM $bdpfAnnee_2
								WHERE  id='$division'"); 
							while ($row = mysql_fetch_array($reponse))
								{ 
								 $tabScores[] = $row[0];
								}
												

	 if (isset ($tabScores[$i-$debut])) ${"A".($i)} = $tabScores[$i-$debut]; else ${"A".($i)}='-'; 
	
	

	}


//******************         huitième de finale  **************************
	$debut =8001;
	$fin=8017;


	$tabScores = array();
	for ($i=$debut ; $i< $fin; $i++)
	{	 
 //equipes des 8me
	global ${"clubA".($i)}; 

//equipes des 8me	
	 global ${"A".($i)};
	 $scores = "A".''.$i;
	
	 $reponse = mysql_query( "SELECT $scores
								FROM $bdpfAnnee_2
								WHERE  id='$division'"); 
							while ($row = mysql_fetch_array($reponse))
								{ 
								 $tabScores[] = $row[0];
								}
												
	
	 if (isset ($tabScores[$i-$debut])) ${"A".($i)} = $tabScores[$i-$debut]; else ${"A".($i)}='-'; 
	
	

	}
	
//*********************       Quarts de finale   ************************************
	$debut =4001;
	$fin=4009;
	
	
	$tabScores = array();
	for ($i=$debut ; $i< $fin; $i++)
	{	 
 //equipes des Quarts
	global ${"clubA".($i)}; 
  
	 
// Scores des quarts	 
	 global ${"A".($i)};
	 $scores = "A".''.$i;
	//echo $Scores;
	 $reponse = mysql_query( "SELECT $scores
								FROM $bdpfAnnee_2
								WHERE  id='$division'"); 
							while ($row = mysql_fetch_array($reponse))
								{ 
								 $tabScores[] = $row[0];
								}
												
	
	 if (isset ($tabScores[$i-$debut])) ${"A".($i)} = $tabScores[$i-$debut]; else ${"A".($i)}='-'; 

	}
	
//*************************   Demi finale    ************************
	$debut =2001;
	$fin=2005;

	$tabScores = array();
	for ($i=$debut ; $i< $fin; $i++)
	{	 
   
//equipes des demi finale
	global ${"clubA".($i)}; 
   
   
//scores des demi finale   
	 global ${"A".($i)};
	 $scores = "A".''.$i;
	
	 $reponse = mysql_query( "SELECT $scores
								FROM $bdpfAnnee_2
								WHERE  id='$division'"); 
							while ($row = mysql_fetch_array($reponse))
								{ 
								 $tabScores[] = $row[0];
								}
												
	
	 if (isset ($tabScores[$i-$debut])) ${"A".($i)} = $tabScores[$i-$debut]; else ${"A".($i)}='-'; 

	}
	
//*************************   Finale    ************************
	
	global $clubA1001; global $clubA1002;
	
	global $A1001; global $A1002;
	
	 $reponse = mysql_query( "SELECT A1001,A1002
								FROM $bdpfAnnee_2
								WHERE  id='$division'"); 
							while ($row = mysql_fetch_array($reponse))
								{ 
								 $A1001 = $row[0];
								 $A1002 = $row[1];
								}
	
	
//****** traitement résultats 16me de finale  *********	
 //-------16me de finale -------

 
	if ($A3201+$A3202>0) if ($A3201>$A3202) $clubA1601= $clubA3201;	else	$clubA1601= $clubA3202; else $clubA1601="-";
	if ($A3203+$A3204>0) if ($A3203>$A3204)	$clubA1602= $clubA3203;	else	$clubA1602= $clubA3204; else $clubA1602="-";
	if ($A3205+$A3206>0) if ($A3205>$A3206)	$clubA1603= $clubA3205;	else	$clubA1603= $clubA3206; else $clubA1603="-";
	if ($A3207+$A3208>0) if ($A3207>$A3208)	$clubA1604= $clubA3207;	else	$clubA1604= $clubA3208; else $clubA1604="-";
	
	if ($A3209+$A3210>0) if ($A3209>$A3210)	$clubA1605= $clubA3209;	else	$clubA1605= $clubA3210; else $clubA1605="-";
	if ($A3211+$A3212>0) if ($A3211>$A3212)	$clubA1606= $clubA3211;	else	$clubA1606= $clubA3212; else $clubA1606="-";
	if ($A3213+$A3214>0) if ($A3213>$A3214)	$clubA1607= $clubA3213;	else	$clubA1607= $clubA3214; else $clubA1607="-";
	if ($A3215+$A3216>0) if ($A3215>$A3216)	$clubA1608= $clubA3215;	else	$clubA1608= $clubA3216; else $clubA1608="-";
 
	if ($A3217+$A3218>0) if ($A3217>$A3218) $clubA1609= $clubA3217;	else	$clubA1609= $clubA3218; else $clubA1609="-";
	if ($A3219+$A3220>0) if ($A3219>$A3220)	$clubA1610= $clubA3219;	else	$clubA1610= $clubA3220; else $clubA1610="-";
    if ($A3221+$A3222>0) if ($A3221>$A3222)	$clubA1611= $clubA3221;	else	$clubA1611= $clubA3222; else $clubA1611="-";
	if ($A3223+$A3224>0) if ($A3223>$A3224)	$clubA1612= $clubA3223;	else	$clubA1612= $clubA3224; else $clubA1612="-";
	  	  
	if ($A3225+$A3226>0) if ($A3225>$A3226)	$clubA1613= $clubA3225;	else	$clubA1613= $clubA3226; else $clubA1613="-";
	if ($A3227+$A3228>0) if ($A3227>$A3228)	$clubA1614= $clubA3227;	else	$clubA1614= $clubA3228; else $clubA1614="-";
	if ($A3229+$A3230>0) if ($A3229>$A3230)	$clubA1615= $clubA3229;	else	$clubA1615= $clubA3230; else $clubA1615="-";
	if ($A3231+$A3232>0) if ($A3231>$A3232)	$clubA1616= $clubA3231;	else	$clubA1616= $clubA3232; else $clubA1616="-";

  	  
	if ($A3233+$A3234>0) if ($A3233>$A3234)	$clubA1617= $clubA3233;	else	$clubA1617= $clubA3234; else $clubA1617="-";
	if ($A3235+$A3236>0) if ($A3235>$A3236)	$clubA1618= $clubA3235;	else	$clubA1618= $clubA3236; else $clubA1618="-";
	if ($A3237+$A3238>0) if ($A3237>$A3238)	$clubA1619= $clubA3237;	else	$clubA1619= $clubA3238; else $clubA1619="-";
	if ($A3239+$A3240>0) if ($A3239>$A3240)	$clubA1620= $clubA3239;	else	$clubA1620= $clubA3240; else $clubA1620="-";

	if ($A3241+$A3242>0) if ($A3241>$A3242)	$clubA1621= $clubA3241;	else	$clubA1621= $clubA3242; else $clubA1621="-";
	if ($A3243+$A3244>0) if ($A3243>$A3244)	$clubA1622= $clubA3243;	else	$clubA1622= $clubA3244; else $clubA1622="-";
	if ($A3245+$A3246>0) if ($A3245>$A3246)	$clubA1623= $clubA3245;	else	$clubA1623= $clubA3246; else $clubA1623="-";
	if ($A3247+$A3248>0) if ($A3247>$A3248)	$clubA1624= $clubA3247;	else	$clubA1624= $clubA3248; else $clubA1624="-";

	if ($A3249+$A3250>0) if ($A3249>$A3250)	$clubA1625= $clubA3249;	else	$clubA1625= $clubA3250; else $clubA1625="-";
	if ($A3251+$A3252>0) if ($A3251>$A3252)	$clubA1626= $clubA3251;	else	$clubA1626= $clubA3252; else $clubA1626="-";
	if ($A3253+$A3254>0) if ($A3253>$A3254)	$clubA1627= $clubA3253;	else	$clubA1627= $clubA3254; else $clubA1627="-";
	if ($A3255+$A3256>0) if ($A3255>$A3256)	$clubA1628= $clubA3255;	else	$clubA1628= $clubA3256; else $clubA1628="-";

	if ($A3257+$A3258>0) if ($A3257>$A3258)	$clubA1629= $clubA3257;	else	$clubA1629= $clubA3258; else $clubA1629="-";
	if ($A3259+$A3260>0) if ($A3259>$A3260)	$clubA1630= $clubA3259;	else	$clubA1630= $clubA3260; else $clubA1630="-";
	if ($A3261+$A3262>0) if ($A3261>$A3262)	$clubA1631= $clubA3261;	else	$clubA1631= $clubA3262; else $clubA1631="-";
 if ($A3263+$A3264>0) if ($A3263>$A3264)	$clubA1632= $clubA3263;	else	$clubA1632= $clubA3264; else $clubA1632="-";	

	
if ($A1601+$A1602 > 0)	{if ($A1601>$A1602)	{$clubA8001=$clubA1601;	} else	{$clubA8001=$clubA1602;	}}	else {	$A1601="-";	$A1602="-";	$quart1="-";}
if ($A1603+$A1604 > 0)	{if ($A1603>$A1604)	{$clubA8002=$clubA1603;	} else  {$clubA8002=$clubA1604; }}  else {  $A1603="-";	$A1604="-";	$quart1="-";}
if ($A1605+$A1606 > 0)	{if ($A1605>$A1606)	{$clubA8003=$clubA1605;	} else  {$clubA8003=$clubA1606; }}  else {  $A1605="-";	$A1606="-";	$quart1="-";}
if ($A1607+$A1608 > 0)	{if ($A1607>$A1608)	{$clubA8004=$clubA1607;	} else  {$clubA8004=$clubA1608; }}  else {  $A1607="-";	$A1608="-";	$quart1="-";}
if ($A1609+$A1610 > 0)	{if ($A1609>$A1610)	{$clubA8005=$clubA1609;	} else  {$clubA8005=$clubA1610; }}  else {  $A1609="-";	$A1610="-";	$quart1="-";}
if ($A1611+$A1612 > 0)	{if ($A1611>$A1612)	{$clubA8006=$clubA1611;	} else  {$clubA8006=$clubA1612; }}  else {  $A1611="-";	$A1612="-";	$quart1="-";}
if ($A1613+$A1614 > 0)	{if ($A1613>$A1614)	{$clubA8007=$clubA1613;	} else  {$clubA8007=$clubA1614; }}  else {  $A1613="-";	$A1614="-";	$quart1="-";}
if ($A1615+$A1616 > 0)	{if ($A1615>$A1616)	{$clubA8008=$clubA1615;	} else  {$clubA8008=$clubA1616; }}  else {  $A1615="-";	$A1616="-";	$quart1="-";}
if ($A1617+$A1618 > 0)	{if ($A1617>$A1618)	{$clubA8009=$clubA1617;	} else  {$clubA8009=$clubA1618; }}  else {  $A1617="-";	$A1618="-";	$quart1="-";}
if ($A1619+$A1620 > 0)	{if ($A1619>$A1620)	{$clubA8010=$clubA1619;	} else  {$clubA8010=$clubA1620; }}  else {  $A1619="-";	$A1620="-";	$quart1="-";}
if ($A1621+$A1622 > 0)	{if ($A1621>$A1622)	{$clubA8011=$clubA1621;	} else  {$clubA8011=$clubA1622; }}  else {  $A1621="-";	$A1622="-";	$quart1="-";}
if ($A1623+$A1624 > 0)	{if ($A1623>$A1624)	{$clubA8012=$clubA1623;	} else  {$clubA8012=$clubA1624; }}  else {  $A1623="-";	$A1624="-";	$quart1="-";}
if ($A1625+$A1626 > 0)	{if ($A1625>$A1626)	{$clubA8013=$clubA1625;	} else  {$clubA8013=$clubA1626; }}  else {  $A1625="-";	$A1626="-";	$quart1="-";}
if ($A1627+$A1628 > 0)	{if ($A1627>$A1628)	{$clubA8014=$clubA1627;	} else  {$clubA8014=$clubA1628; }}  else {  $A1627="-";	$A1628="-";	$quart1="-";}			
if ($A1629+$A1630 > 0)	{if ($A1629>$A1629)	{$clubA8015=$clubA1629;	} else  {$clubA8015=$clubA1630; }}  else {  $A1629="-";	$A1630="-";	$quart1="-";}			
if ($A1631+$A1632 > 0)	{if ($A1631>$A1632)	{$clubA8016=$clubA1631;	} else  {$clubA8016=$clubA1632; }}  else {  $A1631="-";	$A1632="-";	$quart1="-";}			
				
				
if ($A8001+$A8002 > 0)	{if ($A8001>$A8002)	{$clubA4001=$clubA8001;	} else	{$clubA4001=$clubA8002;	}}	else{	$A8001="-";	$A8002="-";	$quart1="-";}
if ($A8003+$A8004 > 0)	{if ($A8003>$A8004)	{$clubA4002=$clubA8003;	} else	{$clubA4002=$clubA8004;	}}	else{	$A8003="-";	$A8004="-";	$quart1="-";}
if ($A8005+$A8006 > 0)	{if ($A8005>$A8006)	{$clubA4003=$clubA8005;	} else	{$clubA4003=$clubA8006;	}}	else{	$A8005="-";	$A8006="-";	$quart1="-";}
if ($A8007+$A8008 > 0)	{if ($A8007>$A8008)	{$clubA4004=$clubA8007;	} else	{$clubA4004=$clubA8008;	}}	else{	$A8007="-";	$A8008="-";	$quart1="-";}
if ($A8009+$A8010 > 0)	{if ($A8009>$A8010)	{$clubA4005=$clubA8009;	} else	{$clubA4005=$clubA8010;	}}	else{	$A8009="-";	$A8010="-";	$quart1="-";}
if ($A8011+$A8012 > 0)	{if ($A8011>$A8012)	{$clubA4006=$clubA8011;	} else	{$clubA4006=$clubA8012;	}}	else{	$A8011="-";	$A8012="-";	$quart1="-";}
if ($A8013+$A8014 > 0)	{if ($A8013>$A8014)	{$clubA4007=$clubA8013;	} else	{$clubA4007=$clubA8014;	}}	else{	$A8013="-";	$A8014="-";	$quart1="-";}
if ($A8015+$A8016 > 0)	{if ($A8015>$A8016)	{$clubA4008=$clubA8015;	} else	{$clubA4008=$clubA8016;	}}	else{	$A8015="-";	$A8016="-";	$quart1="-";}

if ($A4001+$A4002 > 0)	{if ($A4001>$A4002)	{$clubA2001=$clubA4001;	} else	{$clubA2001=$clubA4002;	}}	else{	$A4001="-";	$A4002="-";	$quart1="-";}
if ($A4003+$A4004 > 0)	{if ($A4003>$A4004)	{$clubA2002=$clubA4003;	} else	{$clubA2002=$clubA4004;	}}	else{	$A4003="-";	$A4004="-";	$quart1="-";}
if ($A4005+$A4006 > 0)	{if ($A4005>$A4006)	{$clubA2003=$clubA4005;	} else	{$clubA2003=$clubA4006;	}}	else{	$A4005="-";	$A4006="-";	$quart1="-";}
if ($A4007+$A4008 > 0)	{if ($A4007>$A4008)	{$clubA2004=$clubA4007;	} else	{$clubA2004=$clubA4008;	}}	else{	$A4007="-";	$A4008="-";	$quart1="-";}

if ($A2001+$A2002 > 0)	{if ($A2001>$A2002)	{$clubA1001=$clubA2001;	} else	{$clubA1001=$clubA2002;	}}	else{	$A2001="-";	$A2002="-";	$quart1="-";}
if ($A2003+$A2004 > 0)	{if ($A2003>$A2004)	{$clubA1002=$clubA2003;	} else	{$clubA1002=$clubA2004;	}}	else{	$A2003="-";	$A2004="-";	$quart1="-";}

if ($A1001+$A1002 > 0)	{if ($A2001>$A2002)	{$clubA1001=$clubA2001;	} else	{$clubA1001=$clubA2002;	}}	else{	$A2001="-";	$A2002="-";	$quart1="-";}	

				
}

 ?>
 
 

