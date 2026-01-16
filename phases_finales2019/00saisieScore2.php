<html>
<head>
<title>modification de données en PHP :: partie2</title>
<meta name=viewport content="width=device-width, initial-scale=1">
</head>
<p> 

<?php // ******************   Récupération des variables   ***************** ?>
 
 <?php $type=$_GET['type']; ?>
 <?php $annee=$_GET['annee']; ?>

 <?php  $division=$_GET['division'];?>
  
<?php // ***************** Test des variables récupérées ****************
  
   echo $type;echo "<br />";
   echo $annee;echo "<br />";
   echo $division; echo "<br />";
   


?>
	<br>
  <?php 
  
 
$A1001 = $_POST['A1001']; 
//	echo $A1001;
$A1002 = $_POST['A1002']; 
//	echo $A1002;
	
 ?> 
  <br/>
  <br/>
 
<?php



//echo $phpbd_pfterr;
//$A1001 = $_POST['A1001']; 
	//echo $A1001;
//$A1002 = $_POST['A1002']; 
//	echo $A1002;
	

?>
 
 <?php
 
 require ("../../../connect/connection1.php");
  
 // -------Finale -------------------- 
 //récupération des valeurs des champs:
 if ($type == 90000000001)
 	{
  	$A1001 = $_POST['A1001'];  
	$A1002 = $_POST['A1002'];
//	echo $A1001;
//	echo $A1002;
	}
// ------- Demi Finale -------------------- 	
	
elseif ($type == 90000000002)
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
	//**Phase ALLER (Pts - GA)**
	$A2001 = $_POST['A2001'];  $A4001 = $_POST['A4001'];  
	$A2002 = $_POST['A2002'];  $A4002 = $_POST['A4002'];
	$A2003 = $_POST['A2003'];  $A4003 = $_POST['A4003'];
	$A2004 = $_POST['A2004'];  $A4004 = $_POST['A4004'];
	
	//**Phase RETOUR (Pts - GA)**

	$A8001 = $_POST['A8001']; $A1601 = $_POST['A1601'];
	$A8002 = $_POST['A8002']; $A1602 = $_POST['A1602'];
	$A8003 = $_POST['A8003']; $A1603 = $_POST['A1603'];
	$A8004 = $_POST['A8004']; $A1604 = $_POST['A1604'];
	  
	
	//** Finale **
	
	
	$A1001 = $_POST['A1001'];
	$A1002 = $_POST['A1002'];
	
	
	}

// -------  Quart Demi Finale -------------------- 			
elseif ($type == 90000000402)		
	{
	
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

	echo "<br />";
	echo $A4001; echo "<br />";
	echo $A4002; echo "<br />";
	echo $A4003;echo "<br />";
	echo $A4004;echo "<br />";
	echo "<br />";
	
	}


// -------  hiutieme de Finale -------------------- 			
elseif ($type == 90000080402)		
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
	echo $A8001; echo "<br />";
	echo $A8002; echo "<br />"; 
	echo $A8003; echo "<br />";
	echo $A8004; echo "<br />";
	}
	
	
// -------  huitieme de Finale + Barrages (8 équipes)-------------------- 			
elseif ($type == 17)		
	{
	$A1601 = $_POST['A1601'];  
	$A1602 = $_POST['A1602'];
	$A1603 = $_POST['A1603'];
	$A1604 = $_POST['A1604'];
	$A1605 = $_POST['A1605'];  
	$A1606 = $_POST['A1606'];
	$A1607 = $_POST['A1607'];
	$A1608 = $_POST['A1608'];
	
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
	
	
// -------  huitieme Aller Retour-------------------- 			
elseif ($type == 19)		
	{
		
//Récup des résultats des rencontres 8me ALLER (Goal average)
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
	
	
/*	echo "<br />" ;
	echo $A1601; echo "<br />" ;
	echo $A1602;echo "<br />" ;
	echo $A1603;echo "<br />" ;
	echo $A1604;echo "<br />" ;
	echo $A1605;echo "<br />" ;  
	echo $A1606;echo "<br />" ;
	echo $A1607; echo "<br />" ;
	echo $A1608; echo "<br />" ;
	
	echo $A1609 ;  echo "<br />" ;
	echo $A1610; echo "<br />" ;
	echo $A1611; echo "<br />" ;
	echo $A1612; echo "<br />" ;
	echo $A1613;  echo "<br />" ;
	echo $A1614; echo "<br />" ;
	echo $A1615; echo "<br />" ;
	echo $A1616 ;echo "<br />" ;
*/	
	
//Récup des résultats des rencontres 8me ALLER (Points terrain)		

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
	
	
	
/*	echo "<br />" ;
	echo $A8001; echo "<br />" ;
	echo $A8002;echo "<br />" ;
	echo $A8003;echo "<br />" ;
	echo $A8004;echo "<br />" ;
	echo $A8005;echo "<br />" ;  
	echo $A8006;echo "<br />" ;
	echo $A8007; echo "<br />" ;
	echo $A8008; echo "<br />" ;
	
	echo $A8009 ;  echo "<br />" ;
	echo $A8010; echo "<br />" ;
	echo $A8011; echo "<br />" ;
	echo $A8012; echo "<br />" ;
	echo $A8013;  echo "<br />" ;
	echo $A8014; echo "<br />" ;
	echo $A8015; echo "<br />" ;
	echo $A8016 ;echo "<br />" ;
	
*/	

//Récup des résultats des rencontres 8me RETOUR (Goal average)
	 
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

	echo "<br />" ;
	echo $R1601; echo "<br />" ;
	echo $R1602;echo "<br />" ;
	echo $R1603;echo "<br />" ;
	echo $R1604;echo "<br />" ;
	echo $R1605;echo "<br />" ;  
	echo $R1606;echo "<br />" ;
	echo $R1607; echo "<br />" ;
	echo $R1608; echo "<br />" ;
	
	echo $R1609 ;  echo "<br />" ;
	echo $R1610; echo "<br />" ;
	echo $R1611; echo "<br />" ;
	echo $R1612; echo "<br />" ;
	echo $R1613;  echo "<br />" ;
	echo $R1614; echo "<br />" ;
	echo $R1615; echo "<br />" ;
	echo $R1616 ;echo "<br />" ;
	

//Récup des résultats des rencontres 8me RETOUR (Points terrain)	
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
	
	echo "<br />" ;
	echo $R8001; echo "<br />" ;
	echo $R8002;echo "<br />" ;
	echo $R8003;echo "<br />" ;
	echo $R8004;echo "<br />" ;
	echo $R8005;echo "<br />" ;  
	echo $R8006;echo "<br />" ;
	echo $R8007; echo "<br />" ;
	echo $R8008; echo "<br />" ;
	
	echo $R8009 ;  echo "<br />" ;
	echo $R8010; echo "<br />" ;
	echo $R8011; echo "<br />" ;
	echo $R8012; echo "<br />" ;
	echo $R8013;  echo "<br />" ;
	echo $R8014; echo "<br />" ;
	echo $R8015; echo "<br />" ;
	echo $R8016 ;echo "<br />" ;
	

	
	}	
	
	
	
	
	

// -------  SEIZIEME de Finale -------------------- 			
elseif ($type == 90016080402)		
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

// -------  trente deuxième de Finale -------------------- 			
elseif ($type == 93216080402)		
	{
	for ($i = 3201; $i < 3065 ; $i++)
	{
	${"A".($i)} = $_POST['${"A".($i)}'];
		
	}
	
	
	
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





?>
<br /><br />
  <?php
 
//if (isset ($_POST["division"])) $division=$_POST["division"];else $division= "pas de variable division déclarée"
 // $division = $_POST["division"] ;
 ?>


 <?php

// **********   Finale   ***********
if ($type == 90000000001)
	{ 
	
	echo $division; echo "<br/>";
	echo $A1001; echo "<br/>";
	echo $A1002; echo "<br/>";
    $sql = " UPDATE bdpf2019_2
    	    SET  A1001='$A1001',
				 A1002='$A1002'	
		  	WHERE id = 110 " ;
			
			
			 $requete = mysql_query( $sql )   ;

		  if($requete)
			{
			echo("La modification a été correctement effectuée");
			}
		  else
			{
			echo("La modification à échoué") ;
			}	

	}
	
// ************************ Demi Finale **********************************	

elseif ($type == 90000000002)
	{ 
	$sql = "UPDATE bdpf2019_2
    	    SET   
				 A2001='$A2001',
				 A2002='$A2002',
				 A2003='$A2003',
				 A2004='$A2004',
				 
				 A1001='$A1001',
				 A1002='$A1002'			
		  	WHERE id = '$division' " ;		
		
		
		 $requete = mysql_query( $sql )   ;

		  if($requete)
			{
			echo("La modification a été correctement effectuée");
			}
		  else
			{
			echo("La modification à échoué") ;
			}	
			
	}
	
	
// *********  Demi (AR) Finale ***************	
	
 elseif ($type == 3)
	{ 
	$sql = "UPDATE $phpbd_pfterr
    	    SET  A2001='$A2001',A2002='$A2002',A2003='$A2003',A2004='$A2004',	
		  		 A4001='$A4001',A4002='$A4002',A4003='$A4003',A4004='$A4004',
				 A8001='$A8001',A8002='$A8002',A8003='$A8003',A8004='$A8004',	
		  		 A1601='$A1601',A1602='$A1602',A1603='$A1603',A1604='$A1604',
				 A1001='$A1001',A1002='$A1002'
		  	WHERE division = '$division' and annee='$annee' " ;		

	}
	
	
// ********* Quarts Demi Finale ***************	
	
 elseif ($type == 90000000402)
	{ 
	
	echo "<br />";
	echo $A4001; echo "<br />";
	echo $A4002; echo "<br />";
	echo $A4003;echo "<br />";
	echo $A4004;echo "<br />";
	echo $division;
	echo "<br />";
	
	$sql = "UPDATE bdpf2019_2
    	    SET  A4001='$A4001', A4002='$A4002', A4003='$A4003', A4004='$A4004',
				 A4005='$A4005', A4006='$A4006', A4007='$A4007', A4008='$A4008',
				
				 A2001='$A2001', A2002='$A2002', A2003='$A2003', A2004='$A2004',
				 A1001='$A1001', A1002='$A1002'
		  
		  	WHERE id = '$division' " ;	
			
			
			 $requete = mysql_query( $sql )   ;

		  if($requete)
			{
			echo("La modification a été correctement effectuée");
			}
		  else
			{
			echo("La modification à échoué") ;
			}
			

	
	}
	
	
	
 

  
	
// *********huitieme de Finale ***************	
	
 elseif ($type == 90000080402)
	{ 
	$sql = "UPDATE bdpf2019_2
    	    SET  A8001='$A8001', A8002='$A8002', A8003='$A8003', A8004='$A8004',	
				 A8005='$A8005', A8006='$A8006', A8007='$A8007', A8008='$A8008',	
				 A8009='$A8009', A8010='$A8010', A8011='$A8011', A8012='$A8012',	
				 A8013='$A8013', A8014='$A8014', A8015='$A8015', A8016='$A8016',
				 A4001='$A4001', A4002='$A4002', A4003='$A4003', A4004='$A4004',
				 A4005='$A4005', A4006='$A4006', A4007='$A4007', A4008='$A4008',
				 A2001='$A2001', A2002='$A2002', A2003='$A2003', A2004='$A2004',
				 A1001='$A1001', A1002='$A1002'
		  	WHERE id = '$division' " ;
			
			 $requete = mysql_query( $sql )   ;

		  if($requete)
			{
			echo("La modification a été correctement effectuée");
			}
		  else
			{
			echo("La modification à échoué") ;
			}		
			
	
	}
	
	// *********huitieme de Finale AR***************	
	
 elseif ($type == 19)
	{ 
	echo "zzzz".''.$phpbd_pfterr;
	$sql = "UPDATE $phpbd_pfterr
    	    SET  A1601='$A1601', A1602='$A1602', A1603='$A1603', A1604='$A1604',	
				 A1605='$A1605', A1606='$A1606', A1607='$A1607', A1608='$A1608',
				 A1609='$A1609', A1610='$A1610', A1611='$A1611', A1612='$A1612',	
				 A1613='$A1613', A1614='$A1614', A1615='$A1615', A1616='$A1616',
				 
				 A8001='$A8001', A8002='$A8002', A8003='$A8003', A8004='$A8004',	
				 A8005='$A8005', A8006='$A8006', A8007='$A8007', A8008='$A8008',	
				 A8009='$A8009', A8010='$A8010', A8011='$A8011', A8012='$A8012',	
				 A8013='$A8013', A8014='$A8014', A8015='$A8015', A8016='$A8016',
				
  				 A4001='$A4001', A4002='$A4002', A4003='$A4003', A4004='$A4004',
				 A4005='$A4005', A4006='$A4006', A4007='$A4007', A4008='$A4008',
				
				A2001='$A2001', A2002='$A2002', A2003='$A2003', A2004='$A2004',
				
				A1001='$A1001', A1002='$A1002'
		  	WHERE division = '$division' and annee='$annee' " ;		
			echo $type;
			
//****Points et résultats des rencontres retour***************
	
	$sql = "UPDATE $phpbd_pfterr
    	    SET  A1601='$R1601', A1602='$R1602', A1603='$R1603', A1604='$R1604',	
				 A1605='$R1605', A1606='$R1606', A1607='$R1607', A1608='$R1608',
				 A1609='$R1609', A1610='$R1610', A1611='$R1611', A1612='$R1612',	
				 A1613='$R1613', A1614='$R1614', A1615='$R1615', A1616='$R1616',
				 
				 A8001='$R8001', A8002='$R8002', A8003='$R8003', A8004='$R8004',	
				 A8005='$R8005', A8006='$R8006', A8007='$R8007', A8008='$R8008',	
				 A8009='$R8009', A8010='$R8010', A8011='$R8011', A8012='$R8012',	
				 A8013='$R8013', A8014='$R8014', A8015='$R8015', A8016='$R8016'
				 
		  	WHERE division = '370' and annee='$annee' " ;		
			echo $type;
	
	
	

	
	
	
	}
	
	

	
	// *********huitieme de Finale + Barrages (8 équipes) ***************	
	
 elseif ($type == 17)
	{ 
	$sql = "UPDATE $phpbd_pfterr
    	    SET  A1601='$A1601', A1602='$A1602', A1603='$A1603', A1604='$A1604',	
				 A1605='$A1605', A1606='$A1606', A1607='$A1607', A1608='$A1608',
				 A8001='$A8001', A8002='$A8002', A8003='$A8003', A8004='$A8004',	
				 A8005='$A8005', A8006='$A8006', A8007='$A8007', A8008='$A8008',	
				 A8009='$A8009', A8010='$A8010', A8011='$A8011', A8012='$A8012',	
				 A8013='$A8013', A8014='$A8014', A8015='$A8015', A8016='$A8016',
				 A4001='$A4001', A4002='$A4002', A4003='$A4003', A4004='$A4004',
				 A4005='$A4005', A4006='$A4006', A4007='$A4007', A4008='$A4008',
				 A2001='$A2001', A2002='$A2002', A2003='$A2003', A2004='$A2004',
				 A1001='$A1001', A1002='$A1002'
		  	WHERE division = '$division' and annee='$annee' " ;		
			echo $type;
			
	
	
	}
	
	
	
	
	
	// *********hSEIZIEME de Finale ***************	
	
 elseif ($type == '90016080402')
	{ 
//	echo "aaa".$type;
//	echo $A1601; echo $A1602;
	
	$sql = "UPDATE bdpf2019_2
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
		  	WHERE id = '$division'  " ;		
			
			
			 $requete = mysql_query( $sql )   ;

		  if($requete)
				{
				echo("La modification a été correctement effectuée");
				}
		  else
				{
				echo("La modification à échoué") ;
				}

	}
	
// *********trente deuxième de Finale ***************

 elseif ($type == '93216080402')
	{ 
	$sql = "UPDATE bdpf2019
    	    SET  A3201='$A3201', A3202='$A3202', A3203='$A3203', A3204='$A3204',	
				 A3205='$A3205', A3206='$A3206', A3207='$A3207', A3208='$A3208',	
				 A3209='$A3209', A3210='$A3210', A3211='$A3211', A3212='$A3212',	
				 A3213='$A3213', A3214='$A3214', A3215='$A3215', A3216='$A3216',
				 
				 A3217='$A3217', A3218='$A3218', A3219='$A3219', A3220='$A3220',	
				 A3221='$A3221', A3222='$A3222', A3223='$A3223', A3224='$A3224',	
				 A3225='$A3225', A3226='$A3226', A3227='$A3227', A3228='$A3228',	
				 A3229='$A3229', A3230='$A3230', A3231='$A3231', A3232='$A3232',
	
				 A3233='$A3233', A3234='$A3234', A3235='$A3235', A3236='$A3236',	
				 A3237='$A3237', A3238='$A3238', A3239='$A3239', A3240='$A3240',	
				 A3241='$A3241', A3242='$A3242', A3243='$A3243', A3244='$A3244',	
				 A3245='$A3245', A3246='$A3246', A3247='$A3247', A3248='$A3248',
				 
				 A3249='$A3249', A3250='$A3250', A3251='$A3251', A3252='$A3252',	
				 A3253='$A3253', A3254='$A3254', A3255='$A3255', A3256='$A3256',	
				 A3257='$A3257', A3258='$A3258', A3259='$A3259', A3260='$A3260',	
				 A3261='$A3261', A3262='$A3262', A3263='$A3263', A3264='$A3264',
	
	WHERE id = '$division'  " ;		
			
			
			 $requete = mysql_query( $sql )   ;

		  if($requete)
				{
				echo("La modification a été correctement effectuée");
				}
		  else
				{
				echo("La modification à échoué") ;
				}

	
	
	$sql = "UPDATE bdpf2019_2
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
		  	WHERE id = '$division'  " ;		
			
			
			 $requete = mysql_query( $sql )   ;

		  if($requete)
				{
				echo("La modification a été correctement effectuée");
				}
		  else
				{
				echo("La modification à échoué") ;
				}

	}

//execution de la requete
/*
  $requete = mysql_query( $sql )   ;

  if($requete)
  	{
    echo("La modification a été correctement effectuée");
  	}
  else
  	{
    echo("La modification à échouée") ;
 	}	
	
	


mysql_close(); 
*/
?>

<p></p>
  
<p><a href="../../accueilsaisiescore.php?type=<?php echo $type; ?>&annee=<?php echo $annee; ?>&division=<?php echo $division; ?>">Retour 
  Modification meme comite</a>
<p>&nbsp;
<p>&nbsp; 
<p><a href="../../../accueilMAJ.php?annee=<?php echo $annee; ?>">Retour accueil</a> 
<p>&nbsp;

</html>