<head>
<title>modification de donn�es en PHP :: partie2</title>
<meta name=viewport content="width=device-width, initial-scale=1">
</head>
<p> 
  <?php 


$type=$_GET['type'];
$champ=$_GET['champ'];
$annee=$_GET['annee'];

echo $type.' '.$id.' '.$annee;
?>
  <?php
require ("../../../phasesFinales/fonctionListeEquipes.php");
?>
  <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "Lavelan1969&"); 
mysql_select_db("onepip-france-db1"); 
?>
  <?php
if ($type == 32 OR $type == 3216)
	{  
		$clubA3201 = $_POST['clubA3201'];
		$clubA3202 = $_POST['clubA3202'];
		$clubA3203 = $_POST['clubA3203'];
		$clubA3204 = $_POST['clubA3204'];
		
		$clubA3205 = $_POST['clubA3205'];  
		$clubA3206 = $_POST['clubA3206'];
		$clubA3207 = $_POST['clubA3207'];
		$clubA3208 = $_POST['clubA3208'];
		
		$clubA3209 = $_POST['clubA3209'];  
		$clubA3210 = $_POST['clubA3210'];
		$clubA3211 = $_POST['clubA3211'];
		$clubA3212 = $_POST['clubA3212'];
		
		$clubA3213 = $_POST['clubA3213'];  
		$clubA3214 = $_POST['clubA3214'];
		$clubA3215 = $_POST['clubA3215'];
		$clubA3216 = $_POST['clubA3216'];
		
		$clubA3217 = $_POST['clubA3217'];  
		$clubA3218 = $_POST['clubA3218'];
		$clubA3219 = $_POST['clubA3219'];
		$clubA3220 = $_POST['clubA3220'];
		
		$clubA3221 = $_POST['clubA3221'];  
		$clubA3222 = $_POST['clubA3222'];
		$clubA3223 = $_POST['clubA3223'];
		$clubA3224 = $_POST['clubA3224'];
		
		$clubA3225 = $_POST['clubA3225'];  
		$clubA3226 = $_POST['clubA3226'];
		$clubA3227 = $_POST['clubA3227'];
		$clubA3228 = $_POST['clubA3228'];
		
		$clubA3229 = $_POST['clubA3229'];  
		$clubA3230 = $_POST['clubA3230'];
		$clubA3231 = $_POST['clubA3231'];
		$clubA3232 = $_POST['clubA3232'];
		
		$clubA3233 = $_POST['clubA3233'];  
		$clubA3234 = $_POST['clubA3234'];
		$clubA3235 = $_POST['clubA3235'];
		$clubA3236 = $_POST['clubA3236'];
		
		$clubA3237 = $_POST['clubA3237'];  
		$clubA3238 = $_POST['clubA3238'];
		$clubA3239 = $_POST['clubA3239'];
		$clubA3240 = $_POST['clubA3240'];
		
		$clubA3241 = $_POST['clubA3241'];  
		$clubA3242 = $_POST['clubA3242'];
		$clubA3243 = $_POST['clubA3243'];
		$clubA3244 = $_POST['clubA3244'];
		
		$clubA3245 = $_POST['clubA3245'];  
		$clubA3246 = $_POST['clubA3246'];
		$clubA3247 = $_POST['clubA3247'];
		$clubA3248 = $_POST['clubA3248'];
		
		$clubA3249 = $_POST['clubA3249'];  
		$clubA3250 = $_POST['clubA3250'];
		$clubA3251 = $_POST['clubA3251'];
		$clubA3252 = $_POST['clubA3252'];
		
		$clubA3253 = $_POST['clubA3253'];  
		$clubA3254 = $_POST['clubA3254'];
		$clubA3255 = $_POST['clubA3255'];
		$clubA3256 = $_POST['clubA3256'];
		
		$clubA3257 = $_POST['clubA3257'];  
		$clubA3258 = $_POST['clubA3258'];
		$clubA3259 = $_POST['clubA3259'];
		$clubA3260 = $_POST['clubA3260'];
		
		$clubA3261 = $_POST['clubA3261'];  
		$clubA3262 = $_POST['clubA3262'];
		$clubA3263 = $_POST['clubA3263'];
		$clubA3264 = $_POST['clubA3264'];

			//*********************  Nouvelle base  ***************** 
			  
			//************  cr�ation de la requ�te SQL: ***************************

		$sql32me = "	UPDATE bdpfClubs
						SET E101='$clubA3201',E102='$clubA3202',E103='$clubA3203',E104='$clubA3204',E105='$clubA3205',E106='$clubA3206',E107='$clubA3207',E108='$clubA3208',
							E109='$clubA3209',E110='$clubA3210',E111='$clubA3211',E112='$clubA3212',E113='$clubA3213',E114='$clubA3214',E115='$clubA3215',E116='$clubA3216',
							E117='$clubA3217',E118='$clubA3218',E119='$clubA3219',E120='$clubA3220',E121='$clubA3221',E122='$clubA3222',E123='$clubA3223',E124='$clubA3224',
							E125='$clubA3225',E126='$clubA3226',E127='$clubA3227',E128='$clubA3228',E129='$clubA3229',E130='$clubA3230',E131='$clubA3231',E132='$clubA3232',
							E133='$clubA3233',E134='$clubA3234',E135='$clubA3235',E136='$clubA3236',E137='$clubA3237',E138='$clubA3238',E139='$clubA3239',E140='$clubA3240',
							E141='$clubA3241',E142='$clubA3242',E143='$clubA3243',E144='$clubA3244',E145='$clubA3245',E146='$clubA3246',E147='$clubA3247',E148='$clubA3248',
							E149='$clubA3249',E150='$clubA3250',E151='$clubA3251',E152='$clubA3252',E153='$clubA3253',E154='$clubA3254',E155='$clubA3255',E156='$clubA3256',
							E157='$clubA3257',E158='$clubA3258',E159='$clubA3259',E160='$clubA3260',E161='$clubA3261',E162='$clubA3262',E163='$clubA3263',E164='$clubA3264'
						WHERE division = '$champ' AND annee = $annee" ;

		//**********  ex�cution de la requ�te SQL: ****************

		$requete32me = mysql_query( $sql32me)   ;
 
		//*********   affichage des r�sultats, pour savoir si la modification a march&eacute;: ******
  
		if($requete32me)
		  {
			 echo "<br />";
			 echo("La modification 32me a &eacute;t&eacute; correctement effectu&eacute;");
		  }
		else
		  {
			echo("La modification 32me � �chou�") ;
		  }  
	mysql_close(); 
	}

elseif ($type==16 or $type==1608)
	{
  
		$clubA1601 = $_POST['clubA1601'];
		$clubA1602 = $_POST['clubA1602'];
		$clubA1603 = $_POST['clubA1603'];
		$clubA1604 = $_POST['clubA1604'];
		
		$clubA1605 = $_POST['clubA1605'];  
		$clubA1606 = $_POST['clubA1606'];
		$clubA1607 = $_POST['clubA1607'];
		$clubA1608 = $_POST['clubA1608'];
		
		$clubA1609 = $_POST['clubA1609'];  
		$clubA1610 = $_POST['clubA1610'];
		$clubA1611 = $_POST['clubA1611'];
		$clubA1612 = $_POST['clubA1612'];
		
		$clubA1613 = $_POST['clubA1613'];  
		$clubA1614 = $_POST['clubA1614'];
		$clubA1615 = $_POST['clubA1615'];
		$clubA1616 = $_POST['clubA1616'];
		
		$clubA1617 = $_POST['clubA1617'];  
		$clubA1618 = $_POST['clubA1618'];
		$clubA1619 = $_POST['clubA1619'];
		$clubA1620 = $_POST['clubA1620'];
		
		$clubA1621 = $_POST['clubA1621'];  
		$clubA1622 = $_POST['clubA1622'];
		$clubA1623 = $_POST['clubA1623'];
		$clubA1624 = $_POST['clubA1624'];
		
		$clubA1625 = $_POST['clubA1625'];  
		$clubA1626 = $_POST['clubA1626'];
		$clubA1627 = $_POST['clubA1627'];
		$clubA1628 = $_POST['clubA1628'];
		
		$clubA1629 = $_POST['clubA1629'];  
		$clubA1630 = $_POST['clubA1630'];
		$clubA1631 = $_POST['clubA1631'];
		$clubA1632 = $_POST['clubA1632'];
		
		echo $club1629;
 
//cr�ation de la requ�te SQL:
  		$sql16me = "UPDATE bdpfClubs
					SET E101='$clubA1601', E102='$clubA1602', E103='$clubA1603', E104='$clubA1604', E105='$clubA1605', E106='$clubA1606', E107='$clubA1607', E108='$clubA1608',
						E109='$clubA1609', E110='$clubA1610', E111='$clubA1611', E112='$clubA1612', E113='$clubA1613', E114='$clubA1614', E115='$clubA1615', E116='$clubA1616',
						E117='$clubA1617', E118='$clubA1618', E119='$clubA1619', E120='$clubA1620', E121='$clubA1621', E122='$clubA1622', E123='$clubA1623', E124='$clubA1624',
						E125='$clubA1625', E126='$clubA1626', E127='$clubA1627', E128='$clubA1628', E129='$clubA1629', E130='$clubA1630', E131='$clubA1631', E132='$clubA1632'
					WHERE division = '$champ' and annee = $annee" ;
 
  	//ex�cution de la requ�te SQL:
  			$requete16me = mysql_query( $sql16me )   ;
 
  	//affichage des r�sultats, pour savoir si la modification a march�e:
		  if($requete16me)
			  {
				echo("La modification 16me a �t� correctement effectu�e");
			  }
			  else
			  {
				echo("La modification 16me � �chou�") ;
			  }
		mysql_close(); 
	}
elseif ($type==8)
	{
		$clubA8001 = $_POST['clubA8001'];
		$clubA8002 = $_POST['clubA8002'];
		$clubA8003 = $_POST['clubA8003'];
		$clubA8004 = $_POST['clubA8004'];
		
		$clubA8005 = $_POST['clubA8005'];  
		$clubA8006 = $_POST['clubA8006'];
		$clubA8007 = $_POST['clubA8007'];
		$clubA8008 = $_POST['clubA8008'];
		
		$clubA8009 = $_POST['clubA8009'];  
		$clubA8010 = $_POST['clubA8010'];
		$clubA8011 = $_POST['clubA8011'];
		$clubA8012 = $_POST['clubA8012'];
		
		$clubA8013 = $_POST['clubA8013'];  
		$clubA8014 = $_POST['clubA8014'];
		$clubA8015 = $_POST['clubA8015'];
		$clubA8016 = $_POST['clubA8016'];
	
//cr�ation de la requ�te SQL:
  		$sql8me = "	UPDATE bdpfClubs
					SET E101='$clubA8001', E102='$clubA8002', E103='$clubA8003', E104='$clubA8004',
						E105='$clubA8005', E106='$clubA8006', E107='$clubA8007', E108='$clubA8008',
						E109='$clubA8009', E110='$clubA8010', E111='$clubA8011', E112='$clubA8012',
						E113='$clubA8013', E114='$clubA8014', E115='$clubA8015', E116='$clubA8016'
					WHERE division = '$champ'  and annee = $annee " ;
 
  	//ex�cution de la requ�te SQL:
  			$requete8me = mysql_query( $sql8me )   ;
 
  	//affichage des r�sultats, pour savoir si la modification a march�e:
		  if($requete8me)
			  {
				echo("La modification 8me a �t� correctement effectu�e");
			  }
			  else
			  {
				echo("La modification 8me � �chou�") ;
			  }
		mysql_close(); 	
	}

elseif ($type==4)
	{
		$clubA4001 = $_POST['clubA4001'];
		$clubA4002 = $_POST['clubA4002'];
		$clubA4003 = $_POST['clubA4003'];
		$clubA4004 = $_POST['clubA4004'];
		
		$clubA4005 = $_POST['clubA4005'];  
		$clubA4006 = $_POST['clubA4006'];
		$clubA4007 = $_POST['clubA4007'];
		$clubA4008 = $_POST['clubA4008'];
		
		
	
//cr�ation de la requ�te SQL:
  		$sql4me = "	UPDATE bdpfClubs
					SET E101='$clubA4001', E102='$clubA4002', E103='$clubA4003', E104='$clubA4004',
						E105='$clubA4005', E106='$clubA4006', E107='$clubA4007', E108='$clubA4008'
					WHERE division = '$champ' and annee = $annee" ;
 
  	//ex�cution de la requ�te SQL:
  			$requete4me = mysql_query( $sql4me )   ;
 
  	//affichage des r�sultats, pour savoir si la modification a march�e:
		  if($requete4me)
			  {
				echo("La modification 4me a �t� correctement effectu�e");
			  }
			  else
			  {
				echo("La modification 4me � �chou�") ;
			  }
		mysql_close(); 	
	
	
	}
elseif ($type==2)
	{
		$clubA2001 = $_POST['clubA2001'];
		$clubA2002 = $_POST['clubA2002'];
		$clubA2003 = $_POST['clubA2003'];
		$clubA2004 = $_POST['clubA2004'];
		
		
		
	
//cr�ation de la requ�te SQL:
  		$sql2me = "	UPDATE bdpfClubs
					SET E101='$clubA2001', E102='$clubA2002', E103='$clubA2003', E104='$clubA2004'
					WHERE division = '$champ' and annee = $annee" ;
 
  	//ex�cution de la requ�te SQL:
  			$requete2me = mysql_query( $sql2me )   ;
 
  	//affichage des r�sultats, pour savoir si la modification a march�e:
		  if($requete2me)
			  {
				echo("La modification 2me a �t� correctement effectu�e");
			  }
			  else
			  {
				echo("La modification 2me � �chou�") ;
			  }
		mysql_close(); 	
	
	
	
	}	
	elseif ($type==2)
	{
		$clubA1001 = $_POST['clubA1001'];
		$clubA1002 = $_POST['clubA1002'];
			
	
//cr�ation de la requ�te SQL:
  		$sql1me = "	UPDATE bdpfClubs
					SET E101='$clubA1001', E102='$clubA1002'
					WHERE division = '$champ' and annee = $annee" ;
 
  	//ex�cution de la requ�te SQL:
  			$requete1me = mysql_query( $sql1me )   ;
 
  	//affichage des r�sultats, pour savoir si la modification a march�e:
		  if($requete1me)
			  {
				echo("La modification 2me a �t� correctement effectu�e");
			  }
			  else
			  {
				echo("La modification 2me � �chou�") ;
			  }
		mysql_close(); 	
	
	
	
	}	




?>
  <a href=accueilsaisieclub.php?annee=<?php echo $annee; ?> > Retour </a> 
<p>

