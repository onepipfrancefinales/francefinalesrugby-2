<?php
//*******************  Nom de la compétition  ********************************

				
			require ("../../connect1/connection5.php");
//			mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); 
//			mysql_select_db("onepip-france_db5"); 
			
				$reponse = $bdd->query("	SELECT division
											FROM divisions
											WHERE id = $champ	");
				while ($donnees = $reponse->fetch())
							{
							$nomDivision = $donnees['division'];
							}
echo "xxxxx : ".$nomDivision;				
//mysql_close();	  
?>    




<?php
//************************* type de phase finale  ***************************

//mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); 
//mysql_select_db("onepip-france-db1"); 

require ("../../connect1/connection1.php");

$reponse = $bdd->query("SELECT type, annee
						FROM bdpfClubs
						WHERE id=$champ AND annee=$annee"); 
			//$result = mysql_query($query) or die(mysql_error());
			while ($row = $reponse->fetch() )
				{ 
				$type = $row[0];
				$annee = $row[1];
				}




//******************  Définition des équipes  ************************************

$tabEquipe = array();
for ($i=101; $i<165; $i++)
	 	{
			$equipeCode="bdpfClubs".''.".E".''.$i;
			
			$reponse = $bdd->query("SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, $equipeCode
						FROM bdclubs, bdpfClubs
						WHERE bdclubs.code=$equipeCode and bdpfClubs.id=$id "); 
			//$result = mysql_query($query) or die(mysql_error());
			while ($row = $reponse->fetch())
				{ 
				$nom = $row[1];
				$nom16 = substr($nom,0,16);
				$tabEquipe[] =$nom16.' '.$row[2];
				}
	
		}
//mysql_close();

		
// *****   Demi de finale  ****************		
if ($type==2)
	{	
	$clubA2001 = $tabEquipe[0];
	$clubA2002 = $tabEquipe[1];
	$clubA2003 = $tabEquipe[2];
	$clubA2004 = $tabEquipe[3];
	}

// *****   Quarts de finale  ****************		
elseif ($type==4)
	{	
	$clubA4001 = $tabEquipe[0];
	$clubA4002 = $tabEquipe[1];
	$clubA4003 = $tabEquipe[2];
	$clubA4004 = $tabEquipe[3];
	$clubA4005 = $tabEquipe[4];
	$clubA4006 = $tabEquipe[5];
	$clubA4007 = $tabEquipe[6];
	$clubA4008 = $tabEquipe[7];
	}

// *****   Huitième de finale  ****************		

elseif ($type==8)
	{	
	$clubA8001 = $tabEquipe[0];
	$clubA8002 = $tabEquipe[1];
	$clubA8003 = $tabEquipe[2];
	$clubA8004 = $tabEquipe[3];
	$clubA8005 = $tabEquipe[4];
	$clubA8006 = $tabEquipe[5];
	$clubA8007 = $tabEquipe[6];
	$clubA8008 = $tabEquipe[7];
	
	$clubA8009 = $tabEquipe[8];
	$clubA8010 = $tabEquipe[9];
	$clubA8011 = $tabEquipe[10];
	$clubA8012 = $tabEquipe[11];
	$clubA8013 = $tabEquipe[12];
	$clubA8014 = $tabEquipe[13];
	$clubA8015 = $tabEquipe[14];
	$clubA8016 = $tabEquipe[15];
	}


// *****   Seizième de finale  ****************		

elseif ($type==16)
	{	
	$clubA1601 = $tabEquipe[0];
	$clubA1602 = $tabEquipe[1];
	$clubA1603 = $tabEquipe[2];
	$clubA1604 = $tabEquipe[3];
	$clubA1605 = $tabEquipe[4];
	$clubA1606 = $tabEquipe[5];
	$clubA1607 = $tabEquipe[6];
	$clubA1608 = $tabEquipe[7];
	
	$clubA1609 = $tabEquipe[8];
	$clubA1610 = $tabEquipe[9];
	$clubA1611 = $tabEquipe[10];
	$clubA1612 = $tabEquipe[11];
	$clubA1613 = $tabEquipe[12];
	$clubA1614 = $tabEquipe[13];
	$clubA1615 = $tabEquipe[14];
	$clubA1616 = $tabEquipe[15];
	
	$clubA1617 = $tabEquipe[16];
	$clubA1618 = $tabEquipe[17];
	$clubA1619 = $tabEquipe[18];
	$clubA1620 = $tabEquipe[19];
	$clubA1621 = $tabEquipe[20];
	$clubA1622 = $tabEquipe[21];
	$clubA1623 = $tabEquipe[22];
	$clubA1624 = $tabEquipe[23];
	
	$clubA1625 = $tabEquipe[24];
	$clubA1626 = $tabEquipe[25];
	$clubA1627 = $tabEquipe[26];
	$clubA1628 = $tabEquipe[27];
	$clubA1629 = $tabEquipe[28];
	$clubA1630 = $tabEquipe[29];
	$clubA1631 = $tabEquipe[30];
	$clubA1632 = $tabEquipe[31];
	}


// *****   Trente deuxième de finale  ****************		

elseif ($type==32)
	{	
	$clubA3201 = $tabEquipe[0];
	$clubA3202 = $tabEquipe[1];
	$clubA3203 = $tabEquipe[2];
	$clubA3204 = $tabEquipe[3];
	$clubA3205 = $tabEquipe[4];
	$clubA3206 = $tabEquipe[5];
	$clubA3207 = $tabEquipe[6];
	$clubA3208 = $tabEquipe[7];
	
	$clubA3209 = $tabEquipe[8];
	$clubA3210 = $tabEquipe[9];
	$clubA3211 = $tabEquipe[10];
	$clubA3212 = $tabEquipe[11];
	$clubA3213 = $tabEquipe[12];
	$clubA3214 = $tabEquipe[13];
	$clubA3215 = $tabEquipe[14];
	$clubA3216 = $tabEquipe[15];
	
	$clubA3217 = $tabEquipe[16];
	$clubA3218 = $tabEquipe[17];
	$clubA3219 = $tabEquipe[18];
	$clubA3220 = $tabEquipe[19];
	$clubA3221 = $tabEquipe[20];
	$clubA3222 = $tabEquipe[21];
	$clubA3223 = $tabEquipe[22];
	$clubA3224 = $tabEquipe[23];
	
	$clubA3225 = $tabEquipe[24];
	$clubA3226 = $tabEquipe[25];
	$clubA3227 = $tabEquipe[26];
	$clubA3228 = $tabEquipe[27];
	$clubA3229 = $tabEquipe[28];
	$clubA3230 = $tabEquipe[29];
	$clubA3231 = $tabEquipe[30];
	$clubA3232 = $tabEquipe[31];
	
	$clubA3233 = $tabEquipe[32];
	$clubA3234 = $tabEquipe[33];
	$clubA3235 = $tabEquipe[34];
	$clubA3236 = $tabEquipe[35];
	$clubA3237 = $tabEquipe[36];
	$clubA3238 = $tabEquipe[37];
	$clubA3239 = $tabEquipe[38];
	$clubA3240 = $tabEquipe[39];
	
	$clubA3241 = $tabEquipe[40];
	$clubA3242 = $tabEquipe[41];
	$clubA3243 = $tabEquipe[42];
	$clubA3244 = $tabEquipe[43];
	$clubA3245 = $tabEquipe[44];
	$clubA3246 = $tabEquipe[45];
	$clubA3247 = $tabEquipe[46];
	$clubA3248 = $tabEquipe[47];
	
	$clubA3249 = $tabEquipe[48];
	$clubA3250 = $tabEquipe[49];
	$clubA3251 = $tabEquipe[50];
	$clubA3252 = $tabEquipe[51];
	$clubA3253 = $tabEquipe[52];
	$clubA3254 = $tabEquipe[53];
	$clubA3255 = $tabEquipe[54];
	$clubA3256 = $tabEquipe[55];
	
	$clubA3257 = $tabEquipe[56];
	$clubA3258 = $tabEquipe[57];
	$clubA3259 = $tabEquipe[58];
	$clubA3260 = $tabEquipe[59];
	$clubA3261 = $tabEquipe[60];
	$clubA3262 = $tabEquipe[61];
	$clubA3263 = $tabEquipe[62];
	$clubA3264 = $tabEquipe[63];
	}
?>

