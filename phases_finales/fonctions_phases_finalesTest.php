<?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); 
mysql_select_db("onepip-france-db1"); 
?>

 


<?php
$tabNom = array();
for ($i=1; $i<10; $i++)
	 	{
		$equipeCode="bdpf".''.$annee.''.".E0".''.$i;
			$query = "	SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, $equipeCode
						FROM bdclubs, bdpf$annee 
						WHERE bdclubs.code=$equipeCode and bdpf$annee.id=$id "; 
			$result = mysql_query($query) or die(mysql_error());
			while ($row = mysql_fetch_array($result) )
				{ 
				$nom = $row[1];
				$nom16 = substr($nom,0,18);
				$tabNom[] =$nom16.' '.$row[2];
				}
	
		}	
$clubA3201=$tabNom[0];
$clubA3202=$tabNom[1];
$clubA3203=$tabNom[2];
$clubA3204=$tabNom[3];
$clubA3205=$tabNom[4];
$clubA3206=$tabNom[5];
$clubA3207=$tabNom[6];
$clubA3208=$tabNom[7];
$clubA3209=$tabNom[8];
?>

<?php
$tabNom2 = array();
for ($i=11; $i<65; $i++)
	 	{
		$equipeCode="bdpf".''.$annee.''.".E".''.$i;
			$query = "	SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, $equipeCode
						FROM bdclubs, bdpf$annee 
						WHERE bdclubs.code=$equipeCode and bdpf$annee.id=$id "; 
			$result = mysql_query($query) or die(mysql_error());
			while ($row = mysql_fetch_array($result) )
				{ 
				$nom = $row[1];
				$nom16 = substr($nom,0,18);
				$tabNom2[] =$nom16.' '.$row[2];
				}
	
		}	
$clubA3210=$tabNom2[0];
$clubA3211=$tabNom2[1];
$clubA3212=$tabNom2[2];
$clubA3213=$tabNom2[3];
$clubA3214=$tabNom2[4];
$clubA3215=$tabNom2[5];
$clubA3216=$tabNom2[6];
$clubA3217=$tabNom2[7];
$clubA3218=$tabNom2[8];
$clubA3219=$tabNom2[9];

$clubA3220=$tabNom2[10];
$clubA3221=$tabNom2[11];
$clubA3222=$tabNom2[12];
$clubA3223=$tabNom2[13];
$clubA3224=$tabNom2[14];
$clubA3225=$tabNom2[15];
$clubA3226=$tabNom2[16];
$clubA3227=$tabNom2[17];
$clubA3228=$tabNom2[18];
$clubA3229=$tabNom2[19];

$clubA3230=$tabNom2[20];
$clubA3231=$tabNom2[21];
$clubA3232=$tabNom2[22];
$clubA3233=$tabNom2[23];
$clubA3234=$tabNom2[24];
$clubA3235=$tabNom2[25];
$clubA3236=$tabNom2[26];
$clubA3237=$tabNom2[27];
$clubA3238=$tabNom2[28];
$clubA3239=$tabNom2[29];

$clubA3240=$tabNom2[30];
$clubA3241=$tabNom2[31];
$clubA3242=$tabNom2[32];
$clubA3243=$tabNom2[33];
$clubA3244=$tabNom2[34];
$clubA3245=$tabNom2[35];
$clubA3246=$tabNom2[36];
$clubA3247=$tabNom2[37];
$clubA3248=$tabNom2[38];
$clubA3249=$tabNom2[39];

$clubA3250=$tabNom2[40];
$clubA3251=$tabNom2[41];
$clubA3252=$tabNom2[42];
$clubA3253=$tabNom2[43];
$clubA3254=$tabNom2[44];
$clubA3255=$tabNom2[45];
$clubA3256=$tabNom2[46];
$clubA3257=$tabNom2[47];
$clubA3258=$tabNom2[48];
$clubA3259=$tabNom2[49];

$clubA3260=$tabNom2[50];
$clubA3261=$tabNom2[51];
$clubA3262=$tabNom2[52];
$clubA3263=$tabNom2[53];
$clubA3264=$tabNom2[54];

?>


<?php // ----32me----------------------
$query = "SELECT id, A3201, A3202, A3203, A3204, A3205, A3206, A3207, A3208, A3209, A3210, A3211, A3212, A3213, A3214, A3215, A3216,
 	                 A3217, A3218, A3219, A3220, A3221, A3222, A3223, A3224, A3225, A3226, A3227, A3228, A3229, A3230, A3231, A3232,
                     A3233, A3234, A3235, A3236, A3237, A3238, A3239, A3240, A3241, A3242, A3243, A3244, A3245, A3246, A3247, A3248, 
					 A3249, A3250, A3251, A3252, A3253, A3254, A3255, A3256, A3257, A3258, A3259, A3260, A3261, A3262, A3263, A3264 
					 FROM  bdpf$annee WHERE id=$id "; 
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$A3201 = $row[1];
	$A3202 = $row[2];
	$A3203 = $row[3];
	$A3204 = $row[4];
	$A3205 = $row[5];
	$A3206 = $row[6];
	$A3207 = $row[7];
	$A3208 = $row[8];
	$A3209 = $row[9];
	$A3210 = $row[10];
	$A3211 = $row[11];
	$A3212 = $row[12];
	$A3213 = $row[13];
	$A3214 = $row[14];
	$A3215 = $row[15];
	$A3216 = $row[16];
	$A3217 = $row[17];
	$A3218 = $row[18];
	$A3219 = $row[19];
	$A3220 = $row[20];
	$A3221 = $row[21];
	$A3222 = $row[22];
	$A3223 = $row[23];
	$A3224 = $row[24];
	$A3225 = $row[25];
	$A3226 = $row[26];
	$A3227 = $row[27];
	$A3228 = $row[28];
	$A3229 = $row[29];
	$A3230 = $row[30];
	$A3231 = $row[31];
	$A3232 = $row[32];
	
	$A3233 = $row[33];
	$A3234 = $row[34];
	$A3235 = $row[35];
	$A3236 = $row[36];
	$A3237 = $row[37];
	$A3238 = $row[38];
	$A3239 = $row[39];
	$A3240 = $row[40];
	$A3241 = $row[41];
	$A3242 = $row[42];
	$A3243 = $row[43];
	$A3244 = $row[44];
	$A3245 = $row[45];
	$A3246 = $row[46];
	$A3247 = $row[47];
	$A3248 = $row[48];
	$A3249 = $row[49];
	$A3250 = $row[50];
	$A3251 = $row[51];
	$A3252 = $row[52];
	$A3253 = $row[53];
	$A3254 = $row[54];
	$A3255 = $row[55];
	$A3256 = $row[56];
	$A3257 = $row[57];
	$A3258 = $row[58];
	$A3259 = $row[59];
	$A3260 = $row[60];
	$A3261 = $row[61];
	$A3262 = $row[62];
	$A3263 = $row[63];
	$A3264 = $row[64];
	}
 
?>


<?php // ----16me----------------------
$query = "SELECT id, A1601, A1602, A1603, A1604, A1605, A1606, A1607, A1608, A1609, A1610, A1611, A1612, A1613, A1614, A1615, A1616, 
					 A1617, A1618, A1619, A1620, A1621, A1622, A1623, A1624, A1625, A1626, A1627, A1628, A1629, A1630, A1631, A1632 
					 FROM bdpf$annee2 WHERE id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$A1601 = $row[1];
	$A1602 = $row[2];
	$A1603 = $row[3];
	$A1604 = $row[4];
	$A1605 = $row[5];
	$A1606 = $row[6];
	$A1607 = $row[7];
	$A1608 = $row[8];
	$A1609 = $row[9];
	$A1610 = $row[10];
	$A1611 = $row[11];
	$A1612 = $row[12];
	$A1613 = $row[13];
	$A1614 = $row[14];
	$A1615 = $row[15];
	$A1616 = $row[16];
	
	$A1617 = $row[17];
	$A1618 = $row[18];
	$A1619 = $row[19];
	$A1620 = $row[20];
	$A1621 = $row[21];
	$A1622 = $row[22];
	$A1623 = $row[23];
	$A1624 = $row[24];
	$A1625 = $row[25];
	$A1626 = $row[26];
	$A1627 = $row[27];
	$A1628 = $row[28];
	$A1629 = $row[29];
	$A1630 = $row[30];
	$A1631 = $row[31];
	$A1632 = $row[32];
	
	
	
	}
 
?>

<?php // ----8me-----Quarts----Demi------Finale-------
$query = "	SELECT id, A8001, A8002, A8003, A8004, A8005, A8006, A8007, A8008, A8009, A8010, A8011, A8012, A8013, A8014, A8015, A8016,
					   A4001, A4002, A4003, A4004, A4005, A4006, A4007, A4008,A2001, A2002, A2003, A2004, A1001, A1002 
			FROM bdpf$annee2 
			WHERE id=$id "; 
			
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$A8001 = $row[1];
	$A8002 = $row[2];
	$A8003 = $row[3];
	$A8004 = $row[4];
	$A8005 = $row[5];
	$A8006 = $row[6];
	$A8007 = $row[7];
	$A8008 = $row[8];
	$A8009 = $row[9];
	$A8010 = $row[10];
	$A8011 = $row[11];
	$A8012 = $row[12];
	$A8013 = $row[13];
	$A8014 = $row[14];
	$A8015 = $row[15];
	$A8016 = $row[16];
	
	
	$A4001 = $row[17];
	$A4002 = $row[18];
	$A4003 = $row[19];
	$A4004 = $row[20];
	$A4005 = $row[21];
	$A4006 = $row[22];
	$A4007 = $row[23];
	$A4008 = $row[24];
	
	$A2001 = $row[25];
	$A2002 = $row[26];
	$A2003 = $row[27];
	$A2004 = $row[28];
	
	$A1001 = $row[29];
	$A1002 = $row[30];
	
	
	}
 
?>

<?php	
mysql_close(); // Déconnexion de MySQL
?>

<?php $clubA ="-";?>

<?php //-------16me de finale -------
	    if ($A3201+$A3202>0) if ($A3201>$A3202) $clubA1601= $clubA3201;	else	$clubA1601= $clubA3202; else $clubA1601=$clubA;?>
<?php	if ($A3203+$A3204>0) if ($A3203>$A3204)	$clubA1602= $clubA3203;	else	$clubA1602= $clubA3204; else $clubA1602=$clubA;?>
<?php	if ($A3205+$A3206>0) if ($A3205>$A3206)	$clubA1603= $clubA3205;	else	$clubA1603= $clubA3206; else $clubA1603=$clubA;?>
<?php	if ($A3207+$A3208>0) if ($A3207>$A3208)	$clubA1604= $clubA3207;	else	$clubA1604= $clubA3208; else $clubA1604=$clubA;?>
	
<?php	if ($A3209+$A3210>0) if ($A3209>$A3210)	$clubA1605= $clubA3209;	else	$clubA1605= $clubA3210; else $clubA1605=$clubA;?>
<?php   if ($A3211+$A3212>0) if ($A3211>$A3212)	$clubA1606= $clubA3211;	else	$clubA1606= $clubA3212; else $clubA1606=$clubA;?>
<?php   if ($A3213+$A3214>0) if ($A3213>$A3214)	$clubA1607= $clubA3213;	else	$clubA1607= $clubA3214; else $clubA1607=$clubA;?>
<?php   if ($A3215+$A3216>0) if ($A3215>$A3216)	$clubA1608= $clubA3215;	else	$clubA1608= $clubA3216; else $clubA1608=$clubA;?>
 
<?php	if ($A3217+$A3218>0) if ($A3217>$A3218) $clubA1609= $clubA3217;	else	$clubA1609= $clubA3218; else $clubA1609=$clubA;?>
<?php	if ($A3219+$A3220>0) if ($A3219>$A3220)	$clubA1610= $clubA3219;	else	$clubA1610= $clubA3220; else $clubA1610=$clubA;?>
<?php   if ($A3221+$A3222>0) if ($A3221>$A3222)	$clubA1611= $clubA3221;	else	$clubA1611= $clubA3222; else $clubA1611=$clubA;?>
<?php	if ($A3223+$A3224>0) if ($A3223>$A3224)	$clubA1612= $clubA3223;	else	$clubA1612= $clubA3224; else $clubA1612=$clubA;?>
	  	  
<?php	if ($A3225+$A3226>0) if ($A3225>$A3226)	$clubA1613= $clubA3225;	else	$clubA1613= $clubA3226; else $clubA1613=$clubA;?>
<?php	if ($A3227+$A3228>0) if ($A3227>$A3228)	$clubA1614= $clubA3227;	else	$clubA1614= $clubA3228; else $clubA1614=$clubA;?>
<?php	if ($A3229+$A3230>0) if ($A3229>$A3230)	$clubA1615= $clubA3229;	else	$clubA1615= $clubA3230; else $clubA1615=$clubA;?>
<?php	if ($A3231+$A3232>0) if ($A3231>$A3232)	$clubA1616= $clubA3231;	else	$clubA1616= $clubA3232; else $clubA1616=$clubA;?>

  	  
<?php	if ($A3233+$A3234>0) if ($A3233>$A3234)	$clubA1617= $clubA3233;	else	$clubA1617= $clubA3234; else $clubA1617=$clubA;?>
<?php	if ($A3235+$A3236>0) if ($A3235>$A3236)	$clubA1618= $clubA3235;	else	$clubA1618= $clubA3236; else $clubA1618=$clubA;?>
<?php	if ($A3237+$A3238>0) if ($A3237>$A3238)	$clubA1619= $clubA3237;	else	$clubA1619= $clubA3238; else $clubA1619=$clubA;?>
<?php	if ($A3239+$A3240>0) if ($A3239>$A3240)	$clubA1620= $clubA3239;	else	$clubA1620= $clubA3240; else $clubA1620=$clubA;?>

<?php	if ($A3241+$A3242>0) if ($A3241>$A3242)	$clubA1621= $clubA3241;	else	$clubA1621= $clubA3242; else $clubA1621=$clubA;?>
<?php	if ($A3243+$A3244>0) if ($A3243>$A3244)	$clubA1622= $clubA3243;	else	$clubA1622= $clubA3244; else $clubA1622=$clubA;?>
<?php	if ($A3245+$A3246>0) if ($A3245>$A3246)	$clubA1623= $clubA3245;	else	$clubA1623= $clubA3246; else $clubA1623=$clubA;?>
<?php	if ($A3247+$A3248>0) if ($A3247>$A3248)	$clubA1624= $clubA3247;	else	$clubA1624= $clubA3248; else $clubA1624=$clubA;?>

<?php	if ($A3249+$A3250>0) if ($A3249>$A3250)	$clubA1625= $clubA3249;	else	$clubA1625= $clubA3250; else $clubA1625=$clubA;?>
<?php	if ($A3251+$A3252>0) if ($A3251>$A3252)	$clubA1626= $clubA3251;	else	$clubA1626= $clubA3252; else $clubA1626=$clubA;?>
<?php	if ($A3253+$A3254>0) if ($A3253>$A3254)	$clubA1627= $clubA3253;	else	$clubA1627= $clubA3254; else $clubA1627=$clubA;?>
<?php	if ($A3255+$A3256>0) if ($A3255>$A3256)	$clubA1628= $clubA3255;	else	$clubA1628= $clubA3256; else $clubA1628=$clubA;?>

<?php	if ($A3257+$A3258>0) if ($A3257>$A3258)	$clubA1629= $clubA3257;	else	$clubA1629= $clubA3258; else $clubA1629=$clubA;?>
<?php	if ($A3259+$A3260>0) if ($A3259>$A3260)	$clubA1630= $clubA3259;	else	$clubA1630= $clubA3260; else $clubA1630=$clubA;?>
<?php	if ($A3261+$A3262>0) if ($A3261>$A3262)	$clubA1631= $clubA3261;	else	$clubA1631= $clubA3262; else $clubA1631=$clubA;?>
<?php	if ($A3263+$A3264>0) if ($A3263>$A3264)	$clubA1632= $clubA3263;	else	$clubA1632= $clubA3264; else $clubA1632=$clubA;?>	
	
	
	  <?php //--------8me de finale------
	    if ($A1601+$A1602>0)  if ($A1601>$A1602) $clubA8001= $clubA1601;	else	$clubA8001= $clubA1602; else $clubA8001=$clubA;?>
<?php   if ($A1603+$A1604>0)  if ($A1603>$A1604) $clubA8002= $clubA1603;	else	$clubA8002= $clubA1604; else $clubA8002=$clubA;?>
<?php   if ($A1605+$A1606>0)  if ($A1605>$A1606) $clubA8003= $clubA1605;	else	$clubA8003= $clubA1606;	else $clubA8003=$clubA;?>
<?php   if ($A1607+$A1608>0)  if ($A1607>$A1608) $clubA8004= $clubA1607;	else	$clubA8004= $clubA1608;	else $clubA8004=$clubA;?>

<?php   if ($A1609+$A1610>0)  if ($A1609>$A1610) $clubA8005= $clubA1609;	else	$clubA8005= $clubA1610; else $clubA8005=$clubA;?>
<?php   if ($A1611+$A1612>0)  if ($A1611>$A1612) $clubA8006= $clubA1611;	else	$clubA8006= $clubA1612; else $clubA8006=$clubA;?>
<?php   if ($A1613+$A1614>0)  if ($A1613>$A1614) $clubA8007= $clubA1613;	else	$clubA8007= $clubA1614;	else $clubA8007=$clubA;?>
<?php   if ($A1615+$A1616>0)  if ($A1615>$A1616) $clubA8008= $clubA1615;	else	$clubA8008= $clubA1616;	else $clubA8008=$clubA;?>

<?php   if ($A1617+$A1618>0)  if ($A1617>$A1618) $clubA8009= $clubA1617;	else	$clubA8009= $clubA1618; else $clubA8009=$clubA;?>
<?php   if ($A1619+$A1620>0)  if ($A1619>$A1620) $clubA8010= $clubA1619;	else	$clubA8010= $clubA1620; else $clubA8010=$clubA;?>
<?php   if ($A1621+$A1622>0)  if ($A1621>$A1622) $clubA8011= $clubA1621;	else	$clubA8011= $clubA1622;	else $clubA8011=$clubA;?>
<?php   if ($A1623+$A1624>0)  if ($A1623>$A1624) $clubA8012= $clubA1623;	else	$clubA8012= $clubA1624; else $clubA8012=$clubA;?>

<?php   if ($A1625+$A1626>0)  if ($A1625>$A1626) $clubA8013= $clubA1625;	else	$clubA8013= $clubA1626; else $clubA8013=$clubA;?>
<?php   if ($A1627+$A1628>0)  if ($A1627>$A1628) $clubA8014= $clubA1627;	else	$clubA8014= $clubA1628; else $clubA8014=$clubA;?>
<?php   if ($A1629+$A1630>0)  if ($A1629>$A1630) $clubA8015= $clubA1629;	else	$clubA8015= $clubA1630;	else $clubA8015=$clubA;?>
<?php   if ($A1631+$A1632>0)  if ($A1631>$A1632) $clubA8016= $clubA1631;	else	$clubA8016= $clubA1632;	else $clubA8016=$clubA;?>

	 
	 
	 
	 
	 <?php //------Quarts--------
	    if ($A8001+$A8002>0)  if ($A8001>$A8002)	$clubA4001= $clubA8001;	else	$clubA4001= $clubA8002;	 else $clubA4001=$clubA;?>
<?php   if ($A8003+$A8004>0)  if ($A8003>$A8004)	$clubA4002= $clubA8003;	else	$clubA4002= $clubA8004;	 else $clubA4002=$clubA;?>

<?php   if ($A8005+$A8006>0)  if ($A8005>$A8006)	$clubA4003= $clubA8005;	else	$clubA4003= $clubA8006;	 else $clubA4003=$clubA;?>
<?php   if ($A8007+$A8008>0)  if ($A8007>$A8008)	$clubA4004= $clubA8007;	else	$clubA4004= $clubA8008;	 else $clubA4004=$clubA;?>

<?php   if ($A8009+$A8010>0)  if ($A8009>$A8010)	$clubA4005= $clubA8009;	else	$clubA4005= $clubA8010;	 else $clubA4005=$clubA;?>
<?php   if ($A8011+$A8012>0)  if ($A8011>$A8012)	$clubA4006= $clubA8011;	else	$clubA4006= $clubA8012;	 else $clubA4006=$clubA;?>

<?php   if ($A8013+$A8014>0)  if ($A8013>$A8014)	$clubA4007= $clubA8013;	else	$clubA4007= $clubA8014;  else $clubA4007=$clubA;?>
<?php   if ($A8015+$A8016>0)  if ($A8015>$A8016)	$clubA4008= $clubA8015;	else	$clubA4008= $clubA8016;	 else $clubA4008=$clubA;?>


<?php //------Demi--------
        if ($A4001+$A4002>0)  if ($A4001>$A4002)	$clubA2001= $clubA4001;	else	$clubA2001= $clubA4002;  else $clubA2001=$clubA;?>
<?php   if ($A4003+$A4004>0)  if ($A4003>$A4004)	$clubA2002= $clubA4003;	else	$clubA2002= $clubA4004;  else $clubA2002=$clubA;?>

<?php   if ($A4005+$A4006>0)  if ($A4005>$A4006)	$clubA2003= $clubA4005;	else	$clubA2003= $clubA4006;  else $clubA2003=$clubA;?>								  
<?php   if ($A4007+$A4008>0)  if ($A4007>$A4008)	$clubA2004= $clubA4007;	else	$clubA2004= $clubA4008;  else $clubA2004=$clubA;?>								  
								  
 <?php	//------Finale--------							  
        if ($A2001+$A2002>0)  if ($A2001>$A2002)	$clubA1001= $clubA2001;	else	$clubA1001= $clubA2002;  else $clubA1001=$clubA;?>
<?php   if ($A2003+$A2004>0)  if ($A2003>$A2004)	$clubA1002= $clubA2003;	else	$clubA1002= $clubA2004;  else $clubA1002=$clubA;?>

<?php //------Champion--------
        if ($A1001+$A1002>0)  if ($A1001>$A1002)	$clubA1000= $clubA1001;	else	$clubA1000= $clubA1002;  else $clubA1000=$clubA;?>

								  
<?php
//*************mise à zero des scores**************************
//
//               ****** 32me de finale*********
if ($A3201+$A3202==0) {$A3201="-";	$A3202="-";   }
if ($A3203+$A3204==0) {$A3203="-";	$A3204="-";   }
if ($A3205+$A3206==0) {$A3205="-";	$A3206="-";   }
if ($A3207+$A3208==0) {$A3207="-";	$A3208="-";   }
if ($A3209+$A3210==0) {$A3209="-";	$A3210="-";   }
if ($A3211+$A3212==0) {$A3211="-";	$A3212="-";   }
if ($A3213+$A3214==0) {$A3213="-";	$A3214="-";   }
if ($A3215+$A3216==0) {$A3215="-";	$A3216="-";   }
if ($A3217+$A3218==0) {$A3217="-";	$A3218="-";   }
if ($A3219+$A3220==0) {$A3219="-";	$A3220="-";   }
if ($A3221+$A3222==0) {$A3221="-";	$A3222="-";   }
if ($A3223+$A3224==0) {$A3223="-";	$A3224="-";   }
if ($A3225+$A3226==0) {$A3225="-";	$A3226="-";   }
if ($A3227+$A3228==0) {$A3227="-";	$A3228="-";   }
if ($A3229+$A3230==0) {$A3229="-";	$A3230="-";   }
if ($A3231+$A3232==0) {$A3231="-";	$A3232="-";   }

if ($A3233+$A3234==0) {$A3233="-";	$A3234="-";   }
if ($A3235+$A3236==0) {$A3235="-";	$A3236="-";   }
if ($A3237+$A3238==0) {$A3237="-";	$A3238="-";   }
if ($A3239+$A3240==0) {$A3239="-";	$A3240="-";   }
if ($A3241+$A3242==0) {$A3241="-";	$A3242="-";   }
if ($A3243+$A3244==0) {$A3243="-";	$A3244="-";   }
if ($A3245+$A3246==0) {$A3245="-";	$A3246="-";   }
if ($A3247+$A3248==0) {$A3247="-";	$A3248="-";   }
if ($A3249+$A3250==0) {$A3249="-";	$A3250="-";   }
if ($A3251+$A3252==0) {$A3251="-";	$A3252="-";   }
if ($A3253+$A3254==0) {$A3253="-";	$A3254="-";   }
if ($A3255+$A3256==0) {$A3255="-";	$A3256="-";   }
if ($A3257+$A3258==0) {$A3257="-";	$A3258="-";   }
if ($A3259+$A3260==0) {$A3259="-";	$A3260="-";   }
if ($A3261+$A3262==0) {$A3261="-";	$A3262="-";   }
if ($A3263+$A3264==0) {$A3263="-";	$A3264="-";   }








//               ****** 16me de finale*********
if ($A1601+$A1602==0) {$A1601="-";	$A1602="-";  $pts3A1601="-";	$pts3A1602="-"; }
if ($A1603+$A1604==0) {$A1603="-";	$A1604="-";  $pts3A1603="-";	$pts3A1604="-"; }
if ($A1605+$A1606==0) {$A1605="-";	$A1606="-";  $pts3A1605="-";	$pts3A1606="-"; }
if ($A1607+$A1608==0) {$A1607="-";	$A1608="-";  $pts3A1607="-";	$pts3A1608="-"; }
if ($A1609+$A1610==0) {$A1609="-";	$A1610="-";  $pts3A1609="-";	$pts3A1610="-"; }
if ($A1611+$A1612==0) {$A1611="-";	$A1612="-";  $pts3A1611="-";	$pts3A1612="-"; }
if ($A1613+$A1614==0) {$A1613="-";	$A1614="-";  $pts3A1613="-";	$pts3A1614="-"; }
if ($A1615+$A1616==0) {$A1615="-";	$A1616="-";  $pts3A1615="-";	$pts3A1616="-"; }
if ($A1617+$A1618==0) {$A1617="-";	$A1618="-";  $pts3A1617="-";	$pts3A1618="-"; }
if ($A1619+$A1620==0) {$A1619="-";	$A1620="-";  $pts3A1619="-";	$pts3A1620="-"; }
if ($A1621+$A1622==0) {$A1621="-";	$A1622="-";  $pts3A1621="-";	$pts3A1622="-"; }
if ($A1623+$A1624==0) {$A1623="-";	$A1624="-";  $pts3A1623="-";	$pts3A1624="-"; }
if ($A1625+$A1626==0) {$A1625="-";	$A1626="-";  $pts3A1625="-";	$pts3A1626="-"; }
if ($A1627+$A1628==0) {$A1627="-";	$A1628="-";  $pts3A1627="-";	$pts3A1628="-"; }
if ($A1629+$A1630==0) {$A1629="-";	$A1630="-";  $pts3A1629="-";	$pts3A1630="-"; }
if ($A1631+$A1632==0) {$A1631="-";	$A1632="-";  $pts3A1631="-";	$pts3A1632="-"; }


//****** 8me de finale
if ($A8001+$A8002==0) {$A8001="-";	$A8002="-";  $pts2A3233="-";	$pts2A3234="-"; }
if ($A8003+$A8004==0) {$A8003="-";	$A8004="-";  $pts2A3235="-";	$pts2A3236="-"; }
if ($A8005+$A8006==0) {$A8005="-";	$A8006="-";  $pts2A3237="-";	$pts2A3238="-"; }
if ($A8007+$A8008==0) {$A8007="-";	$A8008="-";  $pts2A3239="-";	$pts2A3240="-"; }
if ($A8001+$A8002==0) {$A8009="-";	$A8010="-";  $pts2A3241="-";	$pts2A3242="-"; }
if ($A8003+$A8004==0) {$A8011="-";	$A8012="-";  $pts2A3243="-";	$pts2A3244="-"; }
if ($A8005+$A8006==0) {$A8013="-";	$A8014="-";  $pts2A3245="-";	$pts2A3246="-"; }
if ($A8007+$A8008==0) {$A8015="-";	$A8016="-";  $pts2A3247="-";	$pts2A3248="-"; }



if ($A4001+$A4002==0) {$A4001="-";	$A4002="-"; }
if ($A4003+$A4004==0) {$A4003="-";	$A4004="-"; }
if ($A4005+$A4006==0) {$A4005="-";	$A4006="-"; }
if ($A4007+$A4008==0) {$A4007="-";	$A4008="-"; }

if ($A2001+$A2002==0) {$A2001="-";	$A2002="-"; }
if ($A2003+$A2004==0) {$A2003="-";	$A2004="-"; }
 
   
   
   
   
?>