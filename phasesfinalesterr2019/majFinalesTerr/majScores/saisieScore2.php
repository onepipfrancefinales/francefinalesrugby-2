<html>
<head>
<title>modification de données en PHP :: partie2</title>
<meta name=viewport content="width=device-width, initial-scale=1">
</head>
<p> 

<?php // ******************   Récupération des variables   ***************** 
 
$type=$_GET['type']; 
$annee=$_GET['annee']; 
$comite=$_GET['comite'];
$division=$_GET['division'];
  
// ***************** Test des variables récupérées ****************
   echo "Comite : ".$comite; echo "<br />";
   echo "Type : ".$type;echo "<br />";
   echo "Annee : ".$annee;echo "<br />";
   echo "Division : ".$division; echo "<br />";
   



require ("../../fonctionspfterrESDL2019.php");  
require ("../../../connect/connexion6.php");
$phpbd_pfterr="php".$comite.''."_pfterr_r";
 
 
 echo $phpbd_pfterr."<br />";


 
 // -------Finale -------------------- 
 //r�cup�ration des valeurs des champs:
 if ($type == 1)
 	{
  	$A1001 = $_POST['A1001'];  
	$A1002 = $_POST['A1002'];
	echo $A1001."<br />";
	echo $A1002."<br />";
	}
// ------- Demi Finale -------------------- 	
	
elseif ($type == 2)
	{
	$A2001 = $_POST['A2001'];  
	$A2002 = $_POST['A2002'];
	$A2003 = $_POST['A2003'];
	$A2004 = $_POST['A2004'];
	echo $A2001;
	echo $A2002;
	echo $A2003;
	echo $A2004;
	}
	
// ------- Demi (AR) Finale -------------------- 		
elseif ($type == 3)		
	{
	
	//**Phase ALLER (Pts )**
	$A2001 = $_POST['A2001']; if ($A2001 =="-")	$A2001 = 0;
	$A2002 = $_POST['A2002']; if ($A2002 =="-")	$A2002 = 0;
	$A2003 = $_POST['A2003']; if ($A2003 =="-")	$A2003 = 0; 
	$A2004 = $_POST['A2004']; if ($A2004 =="-")	$A2004 = 0;
	
	$A4001 = $_POST['A4001']; if ($A4001 =="-")	$A4001 = 0;    
	$A4002 = $_POST['A4002']; if ($A4002 =="-")	$A4002 = 0;
	$A4003 = $_POST['A4003']; if ($A4003 =="-")	$A4003 = 0;
	$A4004 = $_POST['A4004']; if ($A4004 =="-")	$A4004 = 0;
	
	//**Phase RETOUR ( GA)**

	$R2001 = $_POST['R2001']; if ($R2001 =="-")	$R2001 = 0;
	$R2002 = $_POST['R2002']; if ($R2002 =="-")	$R2002 = 0;
	$R2003 = $_POST['R2003']; if ($R2003 =="-")	$R2003 = 0; 
	$R2004 = $_POST['R2004']; if ($R2004 =="-")	$R2004 = 0;
	
	$R4001 = $_POST['R4001']; if ($R4001 =="-")	$R4001 = 0;    
	$R4002 = $_POST['R4002']; if ($R4002 =="-")	$R4002 = 0;
	$R4003 = $_POST['R4003']; if ($R4003 =="-")	$R4003 = 0;
	$R4004 = $_POST['R4004']; if ($R4004 =="-")	$R4004 = 0;
	  
	
	//** Finale **
	
	
	$A1001 = $_POST['A1001']; if ($A1001 =="-")	$A1001 = 0; 
	$A1002 = $_POST['A1002']; if ($A1002 =="-")	$A1002 = 0; 
	
	echo "aaaa".$A1001.$A1002;
	}

// -------  Quart Demi Finale -------------------- 			
elseif ($type == 14)		
	{
if (isset($_POST['A4001'])) $A4001 = $_POST['A4001']; else  $A4001 = 0;
if (isset($_POST['A4002'])) $A4002 = $_POST['A4002']; else  $A4002 = 0;
if (isset($_POST['A4003'])) $A4003 = $_POST['A4003']; else  $A4003 = 0;
if (isset($_POST['A4004'])) $A4004 = $_POST['A4004']; else  $A4004 = 0;
if (isset($_POST['A4005'])) $A4005 = $_POST['A4005']; else  $A4005 = 0;
if (isset($_POST['A4006'])) $A4006 = $_POST['A4006']; else  $A4006 = 0;
if (isset($_POST['A4007'])) $A4007 = $_POST['A4007']; else  $A4007 = 0;
if (isset($_POST['A4008'])) $A4008 = $_POST['A4008']; else  $A4008 = 0; 
	 

if (isset($_POST['A2001'])) $A2001 = $_POST['A2001']; else  $A2001 = 0;
if (isset($_POST['A2002']))	$A2002 = $_POST['A2002']; else  $A2002 = 0;
if (isset($_POST['A2003']))	$A2003 = $_POST['A2003']; else  $A2003 = 0;
if (isset($_POST['A2004']))	$A2004 = $_POST['A2004']; else  $A2004 = 0;
	
if (isset($_POST['A1001']))	$A1001 = $_POST['A1001']; else  $A1001 = 0;
if (isset($_POST['A1002']))	$A1002 = $_POST['A1002']; else  $A1002 = 0;
	
	}
// -------  QuartAR DemiAR Finale -------------------- 			
elseif ($type == 15)		
	{
		
//QUARTS
	//PTS ALLER	
if (isset($_POST['A8001'])) $A8001 = $_POST['A8001']; else  $A8001 = 0;
if (isset($_POST['A8002'])) $A8002 = $_POST['A8002']; else  $A8002 = 0;
if (isset($_POST['A8003'])) $A8003 = $_POST['A8003']; else  $A8003 = 0;
if (isset($_POST['A8004'])) $A8004 = $_POST['A8004']; else  $A8004 = 0;
if (isset($_POST['A8005'])) $A8005 = $_POST['A8005']; else  $A8005 = 0;
if (isset($_POST['A8006'])) $A8006 = $_POST['A8006']; else  $A8006 = 0;
if (isset($_POST['A8007'])) $A8007 = $_POST['A8007']; else  $A8007 = 0;
if (isset($_POST['A8008'])) $A8008 = $_POST['A8008']; else  $A8008 = 0; 
	 //PTS RETOUR
if (isset($_POST['R8009'])) $R8009 = $_POST['R8009']; else  $R8009 = 0;
if (isset($_POST['R8010'])) $R8010 = $_POST['R8010']; else  $R8010 = 0;
if (isset($_POST['R8011'])) $R8011 = $_POST['R8011']; else  $R8003 = 0;
if (isset($_POST['R8012'])) $R8012 = $_POST['R8012']; else  $R8012 = 0;
if (isset($_POST['R8013'])) $R8013 = $_POST['R8013']; else  $R8013 = 0;
if (isset($_POST['R8014'])) $R8014 = $_POST['R8014']; else  $R8014 = 0;
if (isset($_POST['R8015'])) $R8015 = $_POST['R8015']; else  $R8015 = 0;
if (isset($_POST['R8016'])) $R8016 = $_POST['R8016']; else  $R8016 = 0; 

	//GA ALLER
if (isset($_POST['A1601'])) $A1601 = $_POST['A1601']; else  $A1601 = 0;
if (isset($_POST['A1602'])) $A1602 = $_POST['A1602']; else  $A1602 = 0;
if (isset($_POST['A1603'])) $A1603 = $_POST['A1603']; else  $A1603 = 0;
if (isset($_POST['A1604'])) $A1604 = $_POST['A1604']; else  $A1604 = 0;
if (isset($_POST['A1605'])) $A1605 = $_POST['A1605']; else  $A1605 = 0;
if (isset($_POST['A1606'])) $A1606 = $_POST['A1606']; else  $A1606 = 0;
if (isset($_POST['A1607'])) $A1607 = $_POST['A1607']; else  $A1607 = 0;
if (isset($_POST['A1608'])) $A1608 = $_POST['A1608']; else  $A1608 = 0; 
	//GA RETOUR	 
if (isset($_POST['R1609'])) $R1609 = $_POST['R1609']; else  $R1609 = 0;
if (isset($_POST['R1610'])) $R1610 = $_POST['R1610']; else  $R1610 = 0;
if (isset($_POST['R1611'])) $R1611 = $_POST['R1611']; else  $R1603 = 0;
if (isset($_POST['R1612'])) $R1612 = $_POST['R1612']; else  $R1612 = 0;
if (isset($_POST['R1613'])) $R1613 = $_POST['R1613']; else  $R1613 = 0;
if (isset($_POST['R1614'])) $R1614 = $_POST['R1614']; else  $R1614 = 0;
if (isset($_POST['R1615'])) $R1615 = $_POST['R1615']; else  $R1615 = 0;
if (isset($_POST['R1616'])) $R1616 = $_POST['R1616']; else  $R1616 = 0; 


//DEMI
	//PTS ALLER
if (isset($_POST['A2001'])) $A2001 = $_POST['A2001']; else  $A2001 = 0;
if (isset($_POST['A2002']))	$A2002 = $_POST['A2002']; else  $A2002 = 0;
if (isset($_POST['A2003']))	$A2003 = $_POST['A2003']; else  $A2003 = 0;
if (isset($_POST['A2004']))	$A2004 = $_POST['A2004']; else  $A2004 = 0;
	//PTS RETOUR
if (isset($_POST['R2001'])) $R2001 = $_POST['R2001']; else  $R2001 = 0;
if (isset($_POST['R2002']))	$R2002 = $_POST['R2002']; else  $R2002 = 0;
if (isset($_POST['R2003']))	$R2003 = $_POST['R2003']; else  $R2003 = 0;
if (isset($_POST['R2004']))	$R2004 = $_POST['R2004']; else  $R2004 = 0;

	//GA ALLER
if (isset($_POST['A4001'])) $A4001 = $_POST['A4001']; else  $A4001 = 0;
if (isset($_POST['A4002']))	$A4002 = $_POST['A4002']; else  $A4002 = 0;
if (isset($_POST['A4003']))	$A4003 = $_POST['A4003']; else  $A4003 = 0;
if (isset($_POST['A4004']))	$A4004 = $_POST['A4004']; else  $A4004 = 0;
	//GA RETOUR
if (isset($_POST['R4001'])) $R4001 = $_POST['R4001']; else  $R4001 = 0;
if (isset($_POST['R4002']))	$R4002 = $_POST['R4002']; else  $R4002 = 0;
if (isset($_POST['R4003']))	$R4003 = $_POST['R4003']; else  $R4003 = 0;
if (isset($_POST['R4004']))	$R4004 = $_POST['R4004']; else  $R4004 = 0;


//FINALE
if (isset($_POST['A1001']))	$A1001 = $_POST['A1001']; else  $A1001 = 0;
if (isset($_POST['A1002']))	$A1002 = $_POST['A1002']; else  $A1002 = 0;
	
	}

// -------  hiutieme de Finale -------------------- 			
elseif ($type == 18)		
	{
	$A8001 = $_POST['A8001'];  
	$A8002 = $_POST['A8002'];
	$A8003 = $_POST['A8003'];
	$A8004 = $_POST['A8004'];
	$A8005 = $_POST['A8005'];  
	$A8006 = $_POST['A8006'];
	$A8007 = $_POST['A8007'];
	$A8008 = $_POST['A8008'];
	
	$A8009 = $_POST['A8009'];  
	$A8010 = $_POST['A8010'];
	$A8011 = $_POST['A8011'];
	$A8012 = $_POST['A8012'];
	$A8013 = $_POST['A8013'];  
	$A8014 = $_POST['A8014'];
	$A8015 = $_POST['A8015'];
	$A8016 = $_POST['A8016'];

	$A4001 = $_POST['A4001'];  
	$A4002 = $_POST['A4002'];
	$A4003 = $_POST['A4003'];
	$A4004 = $_POST['A4004'];
	$A4005 = $_POST['A4005'];  
	$A4006 = $_POST['A4006'];
	$A4007 = $_POST['A4007'];
	$A4008 = $_POST['A4008'];
	
	$A2001 = $_POST['A2001'];  
	$A2002 = $_POST['A2002'];
	$A2003 = $_POST['A2003'];
	$A2004 = $_POST['A2004'];
	
	$A1001 = $_POST['A1001'];
	$A1002 = $_POST['A1002'];
	
	}
	
	
// -------  huitieme de Finale + Barrages (8 �quipes)-------------------- 			
elseif ($type == 17)		
	{
	$R1601 = $_POST['R1601'];  
	$R1602 = $_POST['R1602'];
	$R1603 = $_POST['R1603'];
	$R1604 = $_POST['R1604'];
	$R1605 = $_POST['R1605'];  
	$R1606 = $_POST['R1606'];
	$R1607 = $_POST['R1607'];
	$R1608 = $_POST['R1608'];
	
	$R8001 = $_POST['R8001'];  
	$R8002 = $_POST['R8002'];
	$R8003 = $_POST['R8003'];
	$R8004 = $_POST['R8004'];
	$R8005 = $_POST['R8005'];  
	$R8006 = $_POST['R8006'];
	$R8007 = $_POST['R8007'];
	$R8008 = $_POST['R8008'];
	
	$R8009 = $_POST['R8009'];  
	$R8010 = $_POST['R8010'];
	$R8011 = $_POST['R8011'];
	$R8012 = $_POST['R8012'];
	$R8013 = $_POST['R8013'];  
	$R8014 = $_POST['R8014'];
	$R8015 = $_POST['R8015'];
	$R8016 = $_POST['R8016'];

	$A4001 = $_POST['A4001'];  
	$A4002 = $_POST['A4002'];
	$A4003 = $_POST['A4003'];
	$A4004 = $_POST['A4004'];
	$A4005 = $_POST['A4005'];  
	$A4006 = $_POST['A4006'];
	$A4007 = $_POST['A4007'];
	$A4008 = $_POST['A4008'];
	echo $A4001; echo "aa".$A4002;
	$A2001 = $_POST['A2001'];  
	$A2002 = $_POST['A2002'];
	$A2003 = $_POST['A2003'];
	$A2004 = $_POST['A2004'];
	
	$A1001 = $_POST['A1001'];
	$A1002 = $_POST['A1002'];
	
	}
	
	
// -------  huitieme Aller Retour-------------------- 			
elseif ($type == 19)		
	{
//echo "huitieme goal average";echo "<br />";		
//R�cup des r�sultats des rencontres 8me ALLER (Goal average)
	
	$R1601 = $_POST['R1601'];
	$R1602 = $_POST['R1602'];
	$R1603 = $_POST['R1603'];
	$R1604 = $_POST['R1604'];
	$R1605 = $_POST['R1605'];  
	$R1606 = $_POST['R1606'];
	$R1607 = $_POST['R1607'];
	$R1608 = $_POST['R1608'];
	
	$R1609 = $_POST['R1609'];  
	$R1610 = $_POST['R1610'];
	$R1611 = $_POST['R1611'];
	$R1612 = $_POST['R1612'];
	$R1613 = $_POST['R1613'];  
	$R1614 = $_POST['R1614'];
	$R1615 = $_POST['R1615'];
	$R1616 = $_POST['R1616'];
	
	
	for( $i=1601; $i < 1617 ; $i++)
	 {
	// if (isset($_POST['${"A".$i}'])) ${"A".$i} = $_POST['${"A".$i}']; else ${"A".$i} = 'NULL'; 
	// echo ${"A".$i};echo "<br />";
	 }

//R�cup des r�sultats des rencontres 8me ALLER (Points terrain)		

	
	$R8001 = $_POST['R8001'];  
	$R8002 = $_POST['R8002'];
	$R8003 = $_POST['R8003'];
	$R8004 = $_POST['R8004'];
	$R8005 = $_POST['R8005'];  
	$R8006 = $_POST['R8006'];
	$R8007 = $_POST['R8007'];
	$R8008 = $_POST['R8008'];
	
	$R8009 = $_POST['R8009'];  
	$R8010 = $_POST['R8010'];
	$R8011 = $_POST['R8011'];
	$R8012 = $_POST['R8012'];
	$R8013 = $_POST['R8013'];  
	$R8014 = $_POST['R8014'];
	$R8015 = $_POST['R8015'];
	$R8016 = $_POST['R8016'];
	
//	echo "<hr />";
	//echo "huitieme Pts terr	";echo "<br />";
	for( $i=8001; $i < 8017 ; $i++)
	 {
	// if (isset($_POST['${"A".$i}'])) ${"A".$i} = $_POST['${"A".$i}']; else ${"A".$i} = 'NULL'; 
	// echo ${"A".$i};echo "<br />";
	 }
	 
	
	
	
	$A4001 = $_POST['A4001'];  
	$A4002 = $_POST['A4002'];
	$A4003 = $_POST['A4003'];
	$A4004 = $_POST['A4004'];
	$A4005 = $_POST['A4005'];  
	$A4006 = $_POST['A4006'];
	$A4007 = $_POST['A4007'];
	$A4008 = $_POST['A4008'];
	
	//echo "<hr/>";echo "<hr/>";
	//echo "quarts";echo "<br />";
	 for( $i=4001; $i < 4009 ; $i++)
	 {
	// if (isset($_POST['${"A".$i}'])) ${"A".$i} = $_POST['${"A".$i}']; else ${"A".$i} = 'NULL'; 
	// echo ${"A".$i};
	 }
	
	
//	echo "<hr/>";
	
	
	$A2001 = $_POST['A2001'];  
	$A2002 = $_POST['A2002'];
	$A2003 = $_POST['A2003'];
	$A2004 = $_POST['A2004'];
	//echo "demi";echo "<br />"; 
	/*for( $i=2001; $i < 2005 ; $i++)
	 {
	// if (isset($_POST['${"A".$i}'])) ${"A".$i} = $_POST['${"A".$i}']; else ${"A".$i} = 'NULL'; 
	 echo ${"A".$i};
	 }
	*/

//	echo "<hr/>";
	
	
	$A1001 = $_POST['A1001'];
	$A1002 = $_POST['A1002'];
//echo "finale";echo "<br />";

//echo $A1001; echo $A1002;
/*
for( $i=1001; $i < 1003 ; $i++)
	 {
	// if (isset($_POST['${"A".$i}'])) ${"A".$i} = $_POST['${"A".$i}']; else ${"A".$i} = 'NULL'; 
	 echo ${"A".$i};echo "<br />";
	 }
*/	 
//R�cup des r�sultats des rencontres 8me RETOUR (Goal average)
	 

	$R1601 = $_POST['R1601'];
	$R1602 = $_POST['R1602'];
	$R1603 = $_POST['R1603'];
	$R1604 = $_POST['R1604'];
	$R1605 = $_POST['R1605'];  
	$R1606 = $_POST['R1606'];
	$R1607 = $_POST['R1607'];
	$R1608 = $_POST['R1608'];
	
	$R1609 = $_POST['R1609'];  
	$R1610 = $_POST['R1610'];
	$R1611 = $_POST['R1611'];
	$R1612 = $_POST['R1612'];
	$R1613 = $_POST['R1613'];  
	$R1614 = $_POST['R1614'];
	$R1615 = $_POST['R1615'];
	$R1616 = $_POST['R1616'];
	for( $i=1601; $i < 1617 ; $i++)
	 {
	// if (isset($_POST['${"R".$i}'])) ${"R".$i} = $_POST['${"R".$i}']; else ${"R".$i} = 'NULL'; 
	// echo ${"R".$i};echo "<br />";
	}
	
	
	
//R�cup des r�sultats des rencontres 8me ALLER (Points terrain)		


	$R8001 = $_POST['R8001'];  
	$R8002 = $_POST['R8002'];
	$R8003 = $_POST['R8003'];
	$R8004 = $_POST['R8004'];
	$R8005 = $_POST['R8005'];  
	$R8006 = $_POST['R8006'];
	$R8007 = $_POST['R8007'];
	$R8008 = $_POST['R8008'];
	
	$R8009 = $_POST['R8009'];  
	$R8010 = $_POST['R8010'];
	$R8011 = $_POST['R8011'];
	$R8012 = $_POST['R8012'];
	$R8013 = $_POST['R8013'];  
	$R8014 = $_POST['R8014'];
	$R8015 = $_POST['R8015'];
	$R8016 = $_POST['R8016'];
/*	
	 for( $i=8001; $i < 8017 ; $i++)
 {
	// if (isset($_POST['${"R".$i}'])) ${"R".$i} = $_POST['${"R".$i}']; else ${"R".$i} = 'NULL'; 
	 echo ${"R".$i};echo "<br />";
	 }
	 */
}

// -------  SEIZIEME de Finale -------------------- 			
elseif ($type == 16)		
	{
	$A1601 = $_POST['A1601'];  
	$A1602 = $_POST['A1602'];
	$A1603 = $_POST['A1603'];
	$A1604 = $_POST['A1604'];
	$A1605 = $_POST['A1605'];  
	$A1606 = $_POST['A1606'];
	$A1607 = $_POST['A1607'];
	$A1608 = $_POST['A1608'];
	
	$A1609 = $_POST['A1609'];  
	$A1610 = $_POST['A1610'];
	$A1611 = $_POST['A1611'];
	$A1612 = $_POST['A1612'];
	$A1613 = $_POST['A1613'];  
	$A1614 = $_POST['A1614'];
	$A1615 = $_POST['A1615'];
	$A1616 = $_POST['A1616'];
	
	$A1617 = $_POST['A1617'];  
	$A1618 = $_POST['A1618'];
	$A1619 = $_POST['A1619'];
	$A1620 = $_POST['A1620'];
	$A1621 = $_POST['A1621'];  
	$A1622 = $_POST['A1622'];
	$A1623 = $_POST['A1623'];
	$A1624 = $_POST['A1624'];
	
	$A1625 = $_POST['A1625'];  
	$A1626 = $_POST['A1626'];
	$A1627 = $_POST['A1627'];
	$A1628 = $_POST['A1628'];
	$A1629 = $_POST['A1629'];  
	$A1630 = $_POST['A1630'];
	$A1631 = $_POST['A1631'];
	$A1632 = $_POST['A1632'];
	
	$A8001 = $_POST['A8001'];  
	$A8002 = $_POST['A8002'];
	$A8003 = $_POST['A8003'];
	$A8004 = $_POST['A8004'];
	$A8005 = $_POST['A8005'];  
	$A8006 = $_POST['A8006'];
	$A8007 = $_POST['A8007'];
	$A8008 = $_POST['A8008'];
	
	$A8009 = $_POST['A8009'];  
	$A8010 = $_POST['A8010'];
	$A8011 = $_POST['A8011'];
	$A8012 = $_POST['A8012'];
	$A8013 = $_POST['A8013'];  
	$A8014 = $_POST['A8014'];
	$A8015 = $_POST['A8015'];
	$A8016 = $_POST['A8016'];

	$A4001 = $_POST['A4001'];  
	$A4002 = $_POST['A4002'];
	$A4003 = $_POST['A4003'];
	$A4004 = $_POST['A4004'];
	$A4005 = $_POST['A4005'];  
	$A4006 = $_POST['A4006'];
	$A4007 = $_POST['A4007'];
	$A4008 = $_POST['A4008'];
	
	$A2001 = $_POST['A2001'];  
	$A2002 = $_POST['A2002'];
	$A2003 = $_POST['A2003'];
	$A2004 = $_POST['A2004'];
	
	$A1001 = $_POST['A1001'];
	$A1002 = $_POST['A1002'];
	
	}
if (isset($_POST['A1001'])) $A1001=$_POST['A1001'];
if (isset($_POST['A1002'])) $A1002=$_POST['A1002'];

//***********************************************
//     Fin r�cup�ration des donn�es
//***********************************************
?>


<br /><br />

  <?php
echo "<hr/>";echo "<hr/>";echo "<hr/>";
// **********   Finale   ***********
echo $type ;echo "<br />";
echo $A1001."<br />";
echo $A1002."<br />";
require ("../../../connect/connexion6.php");
if ($type == 1)
   { 
	$requete =$bdd->exec("UPDATE $phpbd_pfterr
				SET    A1001=$A1001,
					   A1002=$A1002 
				WHERE division = '$division'
				AND annee='$annee'" );

	 if($requete)
		{
		echo("La modification (".$division.") a été correctement effectuée");
		echo "<br />";
		}
	  else
		{
		echo("La modification (".$division.") a échoué") ;
		echo "<br />";
		}
	}
	
// ************************ Demi Finale **********************************	
elseif ($type == 2)
	{
//require ("../../../connect/connection2.php");		
var_dump ($A2001);echo "<br />";
var_dump ($A2002);echo "<br />";
var_dump ($A2003);echo "<br />";
var_dump ($A2004);echo "<br />";
var_dump ($A1001);echo "<br />";
var_dump ($A1002);echo "<br />";
	$A2003  = empty($A2003) ? NULL : $A2003;
	$A2004  = empty($A2004) ? NULL : $A2004;
	//if ($A2003 == "-") $A2003 = null;
	//if ($A2004 == "-") $A2004 = null;
	echo "<br />";
var_dump ($A2001);echo "<br />";
var_dump ($A2002);echo "<br />";		
var_dump ($A2003);echo "<br />";	
var_dump ($A2004);echo "<br />";
var_dump ($A1001);echo "<br />";
var_dump ($A1002);echo "<br />";
//if ($A1001 == "-") $A1001 = 222;
//if ($A1002 == "-") $A1002 = 222;
	
	$requete=$bdd->exec("UPDATE $phpbd_pfterr
    	    SET  A2001='$A2001', A2002='$A2002',
				 A2003='$A2003', A2004='$A2004',
				
  				 A1001='$A1001', A1002='$A1002'	
		  	WHERE division = '$division'
			AND annee='$annee' " );		
			
	
	
	 if($requete)
		{
		echo("La modification (".$division.") a été correctement effectuée");
		echo "<br />";
		}
	  else
		{
		echo("La modification (".$division.") a échoué") ;
		echo "<br />";
		}
	
	
	
			
	}
	
	
// *********  Demi (AR) Finale ***************	
	
 elseif ($type == 3)
	{
echo $A2001; echo $A2002;echo $A2003;echo $A2004;echo "<br />";
echo $A4001; echo $A4002;echo $A4003;echo $A4004;echo "<br />";		

echo $R2001; echo $R2002;echo $R2003;echo $R2004;echo "<br />";
echo $R4001; echo $R4002;echo $R4003;echo $R4004;echo "<br />";	
echo "finale "; echo $A1001; echo $A1002;echo "<br />";	
/*
if ($R2001 == "-") $R2001 = 222;
if ($R2002 == "-") $R2002 = 222;
if ($R2003 == "-") $R2003 = 222;
if ($R2004 == "-") $R2004 = 222;

if ($R4001 == "-") $R4001 = 222;
if ($R4002 == "-") $R4002 = 222;
if ($R4003 == "-") $R4003 = 222;
if ($R4004 == "-") $R4004 = 222;
*/
if ($A1001 == "-") $A1001 = 0;
if ($A1002 == "-") $A1002 = 0;

$requete=$bdd->exec("UPDATE $phpbd_pfterr
    	    SET  A2001='$A2001',A2002='$A2002',A2003='$A2003',A2004='$A2004',	
		  		 A4001='$A4001',A4002='$A4002',A4003='$A4003',A4004='$A4004',
				 
				 R2001='$R2001',R2002='$R2002',R2003='$R2003',R2004='$R2004',	
		  		 R4001='$R4001',R4002='$R4002',R4003='$R4003',R4004='$R4004',
				 
				 A1001='$A1001',A1002='$A1002'
		  	WHERE division = '$division' and annee='$annee' ") ;		

	 if($requete)
		{
		echo("La modification (".$division.") a été correctement effectuée");
		echo "<br />";
		}
	  else
		{
		echo("La modification (".$division.") a échoué") ;
		echo "<br />";
		}

	}
	
	
	// ********* Quarts Demi Finale ***************	
	
 elseif ($type == 14)
	{ 
	
	
	$requete=$bdd->exec("UPDATE $phpbd_pfterr
    	    SET 		 
				 A4001='$A4001', A4002='$A4002', A4003='$A4003', A4004='$A4004',
				 A4005='$A4005', A4006='$A4006', A4007='$A4007', A4008='$A4008',
				 
				 A2001='$A2001', A2002='$A2002', A2003='$A2003', A2004='$A2004',
				

				A1001='$A1001', A1002='$A1002'
		  	WHERE division = '$division' and annee='$annee' " );		
			
  if($requete)
  	{ echo("La modification a �t� correctement effectu�e");}
  else
  	{ echo("La modification � �chou�e") ;}



	echo "<br />";
	echo "4001 : ".$A4001;echo "<br />";
	echo "4002 : ".$A4002;echo "<br />";
	echo "4003 : ".$A4003;echo "<br />";
	echo "4004 : ".$A4004;echo "<br />";
	echo "4005 : ".$A4005;echo "<br />";
	echo "4006 : ".$A4006;echo "<br />";
	echo "4007 : ".$A4007;echo "<br />";
	echo "4008 : ".$A4008;echo "<br />";
	echo "<br />";
	echo "2001 : ".$A2001;echo "<br />";
	echo "2002 : ".$A2002;echo "<br />";
	echo "2003 : ".$A2003;echo "<br />";
	echo "2004 : ".$A2004;echo "<br />";
	echo "<br />";
	echo "1001 : ".$A1001;echo "<br />";
	echo "1002 : ".$A1002;echo "<br />";
	
	if ($A4001=="-") $A4001= 0;
	if ($A4002=="-") $A4002= 0;
	if ($A4003=="-") $A4003= 0;
	if ($A4004=="-") $A4004= 0;
	if ($A4005=="-") $A4005= 0;
	if ($A4006=="-") $A4006= 0;
	if ($A4007=="-") $A4007= 0;
	if ($A4008=="-") $A4008= 0;
	
	if ($A2001=="-") $A2001= 0;
	if ($A2002=="-") $A2002= 0;
	if ($A2003=="-") $A2003= 0;
	if ($A2004=="-") $A2004= 0;

	if ($A1001=="-") $A1001= 0;
	if ($A1002=="-") $A1002= 0;
	
	echo "2001 : ".$A2001;echo "<br />";
	echo "2002 : ".$A2002;echo "<br />";
	echo "2003 : ".$A2003;echo "<br />";
	echo "2004 : ".$A2004;echo "<br />";
	
	echo "1001 : ".$A1001;echo "<br />";
	echo "1002 : ".$A1002;echo "<br />";
	
	echo "division : ".$division;echo "<br />";
	echo "annee : ".$annee;echo "<br />";
	
		//PTS ALLER
	}
// *********Quarts de Finale AR demi AR ***************		
elseif ($type == 15)
	{ 

	$requete=$bdd->exec("UPDATE $phpbd_pfterr
    	    SET  A1601='$A1601', A1602='$A1602', A1603='$A1603', A1604='$A1604',	
				 A1605='$A1605', A1606='$A1606', A1607='$A1607', A1608='$A1608',	
				 A1609='$R1609', A1610='$R1610', A1611='$R1611', A1612='$R1612',	
				 A1613='$R1613', A1614='$R1614', A1615='$R1615', A1616='$R1616',
				 
				 A8001='$A8001', A8002='$A8002', A8003='$A8003', A8004='$A8004',	
				 A8005='$A8005', A8006='$A8006', A8007='$A8007', A8008='$A8008',	
				 A8009='$R8009', A8010='$R8010', A8011='$R8011', A8012='$R8012',	
				 A8013='$R8013', A8014='$R8014', A8015='$R8015', A8016='$R8016',
				 
				 A4001='$A4001', A4002='$A4002', A4003='$A4003', A4004='$A4004',
				 R4001='$R4001', R4002='$R4002', R4003='$R4003', R4004='$R4004',
				 
				 A2001='$A2001', A2002='$A2002', A2003='$A2003', A2004='$A2004',
				 R2001='$R2001', R2002='$R2002', R2003='$R2003', R2004='$R2004',
				

				A1001='$A1001', A1002='$A1002'
		  	WHERE division = '$division' and annee='$annee' " );		
			
  if($requete)
  	{ echo("La modification a �t� correctement effectu�e");}
  else
  	{ echo("La modification � �chou�e") ;}








	}


	// *********SEIZIEME de Finale ***************	
	
 elseif ($type == 16)
	{ 
	
/*	
	if ($R1601=="-") $R1601= 0;
	if ($R1602=="-") $R1602= 0;
	if ($R1603=="-") $R1603= 0;
	if ($R1604=="-") $R1604= 0;
	if ($R1605=="-") $R1605= 0;
	if ($R1606=="-") $R1606= 0;
	if ($R1607=="-") $R1607= 0;
	if ($R1608=="-") $R1608= 0;
	
	if ($R1609=="-") $R1601= 0;
	if ($R1610=="-") $R1602= 0;
	if ($R1611=="-") $R1603= 0;
	if ($R1612=="-") $R1604= 0;
	if ($R1613=="-") $R1605= 0;
	if ($R1614=="-") $R1606= 0;
	if ($R1615=="-") $R1607= 0;
	if ($R1616=="-") $R1608= 0;
	
	*/
	
	
	
	for ($i =1601; $i < 1633; $i++)
		{
			
			if (${"A".($i)}=="-") ${"A".($i)}= 0;	}
	
	for ($i =8001; $i < 8017; $i++)
		{if (${"A".($i)}=="-") ${"A".($i)}= 0;	}
	
	for ($i =4001; $i < 4009; $i++)
		{if (${"A".($i)}=="-") ${"A".($i)}= 0;	}
	
	for ($i =2001; $i < 2005; $i++)
		{if (${"A".($i)}=="-") ${"A".($i)}= 0;	}
	
	/*
	if ($A4001=="-") $A4001= 0;
	if ($A4002=="-") $A4002= 0;
	if ($A4003=="-") $A4003= 0;
	if ($A4004=="-") $A4004= 0;
	if ($A4005=="-") $A4005= 0;
	if ($A4006=="-") $A4006= 0;
	if ($A4007=="-") $A4007= 0;
	if ($A4008=="-") $A4008= 0;
	
	if ($A2001=="-") $A2001= 0;
	if ($A2002=="-") $A2002= 0;
	if ($A2003=="-") $A2003= 0;
	if ($A2004=="-") $A2004= 0;
*/
	if ($A1001=="-") $A1001= 0;
	if ($A1002=="-") $A1002= 0;
	
		
$requete=$bdd->exec("UPDATE $phpbd_pfterr
    	    SET  A1601='$A1601', A1602='$A1602', A1603='$A1603', A1604='$A1604',	
				 A1605='$A1605', A1606='$A1606', A1607='$A1607', A1608='$A1608',	
				 A1609='$A1609', A1610='$A1610', A1611='$A1611', A1612='$A1612',	
				 A1613='$A1613', A1614='$A1614', A1615='$A1615', A1616='$A1616',
				 
				 A1617='$A1617', A1618='$A1618', A1619='$A1619', A1620='$A1620',	
				 A1621='$A1621', A1622='$A1622', A1623='$A1623', A1624='$A1624',	
				 A1625='$A1625', A1626='$A1626', A1627='$A1627', A1628='$A1628',	
				 A1629='$A1629', A1630='$A1630', A1631='$A1631', A1632='$A1632',
			
				 A8001='$A8001', A8002='$A8002', A8003='$A8003', A8004='$A8004',	
				 A8005='$A8005', A8006='$A8006', A8007='$A8007', A8008='$A8008',	
				 A8009='$A8009', A8010='$A8010', A8011='$A8011', A8012='$A8012',	
				 A8013='$A8013', A8014='$A8014', A8015='$A8015', A8016='$A8016',
				 
				 A4001='$A4001', A4002='$A4002', A4003='$A4003', A4004='$A4004',
				 A4005='$A4005', A4006='$A4006', A4007='$A4007', A4008='$A4008',
				 
				 A2001='$A2001', A2002='$A2002', A2003='$A2003', A2004='$A2004',
				 
				 A1001='$A1001', A1002='$A1002'
		  	WHERE division = '$division' and annee='$annee' " );		
			
  if($requete)
  	{ echo("La modification a �t� correctement effectu�e");}
  else
  	{ echo("La modification � �chou�e") ;}	
}	
	// *********huitieme de Finale + Barrages (8 �quipes) ***************	
	
 elseif ($type == 17)
	{ 
$requete=$bdd->exec("UPDATE $phpbd_pfterr
    	    SET  R1601='$R1601', R1602='$R1602', R1603='$R1603', R1604='$R1604',	
				 R1605='$R1605', R1606='$R1606', R1607='$R1607', R1608='$R1608',
				 
				 R8001='$R8001', R8002='$R8002', R8003='$R8003', R8004='$R8004',	
				 R8005='$R8005', R8006='$R8006', R8007='$R8007', R8008='$R8008',	
				 R8009='$R8009', R8010='$R8010', R8011='$R8011', R8012='$R8012',	
				 R8013='$R8013', R8014='$R8014', R8015='$R8015', R8016='$R8016',
				
 				 A4001='$A4001', A4002='$A4002', A4003='$A4003', A4004='$A4004',
				 A4005='$A4005', A4006='$A4006', A4007='$A4007', A4008='$A4008',
				 
				 A2001='$A2001', A2002='$A2002', A2003='$A2003', A2004='$A2004',
				
				 A1001='$A1001', A1002='$A1002'
		  	WHERE division = '$division' and annee='$annee' ") ;		

	  if($requete)
		{
		echo("La modification (".$division.") a été correctement effectuée");
		echo "<br />";
		}
	  else
		{
		echo("La modification (".$division.") a échoué") ;
		echo "<br />";
		}
	}


// *********huitieme de Finale ***************	
	
 elseif ($type == 18)
	{ 

	for ($i =8001; $i <8017; $i++)
		{
		if (${"A".($i)}=="-") ${"A".($i)}= 0;
		}
	
	
	
	if ($A4001=="-") $A4001= 0;
	if ($A4002=="-") $A4002= 0;
	if ($A4003=="-") $A4003= 0;
	if ($A4004=="-") $A4004= 0;
	if ($A4005=="-") $A4005= 0;
	if ($A4006=="-") $A4006= 0;
	if ($A4007=="-") $A4007= 0;
	if ($A4008=="-") $A4008= 0;
	
	if ($A2001=="-") $A2001= 0;
	if ($A2002=="-") $A2002= 0;
	if ($A2003=="-") $A2003= 0;
	if ($A2004=="-") $A2004= 0;

	if ($A1001=="-") $A1001= 0;
	if ($A1002=="-") $A1002= 0;









$requete=$bdd->exec("UPDATE $phpbd_pfterr
    	    SET  A8001='$A8001', A8002='$A8002', A8003='$A8003', A8004='$A8004',	
				 A8005='$A8005', A8006='$A8006', A8007='$A8007', A8008='$A8008',	
				 A8009='$A8009', A8010='$A8010', A8011='$A8011', A8012='$A8012',	
				 A8013='$A8013', A8014='$A8014', A8015='$A8015', A8016='$A8016',
				 
				 A4001='$A4001', A4002='$A4002', A4003='$A4003', A4004='$A4004',
				 A4005='$A4005', A4006='$A4006', A4007='$A4007', A4008='$A4008',
				 
				 A2001='$A2001', A2002='$A2002', A2003='$A2003', A2004='$A2004',
				
				A1001='$A1001', A1002='$A1002'
		  	WHERE division = '$division' and annee='$annee' ") ;		
			
    if($requete)
		{
		echo("La modification (".$division.") a été correctement effectuée");
		echo "<br />";
		}
	  else
		{
		echo("La modification (".$division.") a échoué") ;
		echo "<br />";
		}
	}
	
	
	
	
	
	
	
	
	// *********huitieme de Finale AR***************	
	
 elseif ($type == 19)
	{ 
	echo $phpbd_pfterr;echo "<br />";
	echo $division;echo "<br />";
	echo $annee;echo "<br />";
	
	$requete=$bdd->exec("UPDATE $phpbd_pfterr
    	    SET  R1601='$R1601', R1602='$R1602', R1603='$R1603', R1604='$R1604',
				 R1605='$R1605', R1606='$R1606', R1607='$R1607', R1608='$R1608',
				 R1609='$R1609', R1610='$R1610', R1611='$R1611', R1612='$R1612',	
				 R1613='$R1613', R1614='$R1614', R1615='$R1615', R1616='$R1616',
				
				 R8001='$R8001', R8002='$R8002', R8003='$R8003', R8004='$R8004',	
				 R8005='$R8005', R8006='$R8006', R8007='$R8007', R8008='$R8008',	
				 R8009='$R8009', R8010='$R8010', R8011='$R8011', R8012='$R8012',	
				 R8013='$R8013', R8014='$R8014', R8015='$R8015', R8016='$R8016',
				 
				 A4001='$A4001', A4002='$A4002', A4003='$A4003', A4004='$A4004',
				 A4005='$A4005', A4006='$A4006', A4007='$A4007', A4008='$A4008',
				 
				 A2001='$A2001', A2002='$A2002', A2003='$A2003', A2004='$A2004',
				
				A1001='$A1001', A1002='$A1002'
			
			WHERE division = '$division' and annee='$annee' " );

    if($requete)
		{
		echo("La modification (".$division.") a été correctement effectuée");
		echo "<br />";
		}
	  else
		{
		echo("La modification (".$division.") a échoué") ;
		echo "<br />";
		}
		
//****Points et r�sultats des rencontres retour***************
	$division = $division + 200;
	echo $division; echo "<br />";
	
$requete=$bdd->exec("UPDATE $phpbd_pfterr
    	    SET  R1601='$R1601', R1602='$R1602', R1603='$R1603', R1604='$R1604',	
				 R1605='$R1605', R1606='$R1606', R1607='$R1607', R1608='$R1608',
				 R1609='$R1609', R1610='$R1610', R1611='$R1611', R1612='$R1612',	
				 R1613='$R1613', R1614='$R1614', R1615='$R1615', R1616='$R1616',
	
				 R8001='$R8001', R8002='$R8002', R8003='$R8003', R8004='$R8004',	
				 R8005='$R8005', R8006='$R8006', R8007='$R8007', R8008='$R8008',	
				 R8009='$R8009', R8010='$R8010', R8011='$R8011', R8012='$R8012',	
				 R8013='$R8013', R8014='$R8014', R8015='$R8015', R8016='$R8016'
	 
		  	WHERE division = '$division' and annee='$annee' ") ;	
	  if($requete)
		{
		echo("La modification (".$division.") a été correctement effectuée");
		echo "<br />";
		}
	  else
		{
		echo("La modification (".$division.") a échoué") ;
		echo "<br />";
		}
	
	}
	
	


?>

 
  
<p><a href="saisieScore.php?comite=<?php echo $comite; ?>&type=<?php echo $type; ?>&annee=<?php echo $annee; ?>&division=<?php echo $division; ?>">Retour 
  Modification meme comite</a>
<p>
<p> 
<p><a href="/phasesfinalesterr2019/majFinalesTerr/accueilMAJ.php?annee=<?php echo $annee; ?>">Retour accueil</a> 
<p>

</html>