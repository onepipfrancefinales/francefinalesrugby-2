<?php
$page="score"; 
$division=$_GET['division']; 
$comite=$_GET['comite']; 
$annee=$_GET['annee']; 
$type=$_GET['type'];

require '../../../connect/connexion6.php';
require ("../../fonctionspfterrESDL2019.php"); 
seizieme2019 ($comite, $division, $annee, $bdd)
?>

<html>
  <head>
<title>modification de données en PHP :: partie2</title>
<link rel="stylesheet" type="text/css" href="../../maj.css">
<meta name=viewport content="width=device-width, initial-scale=1">
</head>

<body>
<form name="insertion" action="saisieScore2.php?division=<?php echo $division ;?>&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>&comite=<?php echo $comite ;?>" method="POST">
   
  <input type="hidden" name="division" value="<?php echo($division) ;?>">
    <header>
	<h1>SEIZIEME DE FINALE  <?php echo $division; ?>  (  <?php echo $id; ?>    )  <?php echo $annee; ?></h1>
       
	<h3>1</h3> 
        <h2><?php echo $clubA1601; ?></h2>
        <h2><?php echo $clubA1602; ?></h2>
    <h4></h4>
		<input type="text" name="A1601" value="<?php echo $A1601 ;?>" size="3">
        <input type="text" name="A1602" value="<?php echo $A1602 ;?>" size="3">
     
	<h3>2</h3>   
        <h2><?php echo $clubA1603; ?></h2>
        <h2><?php echo $clubA1604; ?></h2>
	<h4></h4>
		<input type="text" name="A1603" value="<?php echo $A1603 ;?>" size="3">
        <input type="text" name="A1604" value="<?php echo $A1604 ;?>" size="3">
     
	<h3>3</h3>  
        <h2><?php echo $clubA1605; ?></h2>
        <h2><?php echo $clubA1606; ?></h2>
    <h4></h4>
		<input type="text" name="A1605" value="<?php echo $A1605 ;?>" size="3">
        <input type="text" name="A1606" value="<?php echo $A1606 ;?>" size="3">
        
    <h3>4</h3>
	    <h2><?php echo $clubA1607; ?></h2>
        <h2><?php echo $clubA1608; ?></h2>
    <h4></h4>
		<input type="text" name="A1607" value="<?php echo $A1607 ;?>" size="3">
        <input type="text" name="A1608" value="<?php echo $A1608 ;?>" size="3">
        
    <h3>5</h3>  
        <h2><?php echo $clubA1609; ?></h2>
        <h2><?php echo $clubA1610; ?></h2>
    <h4></h4>
		<input type="text" name="A1609" value="<?php echo $A1609 ;?>" size="3">
        <input type="text" name="A1610" value="<?php echo $A1610 ;?>" size="3">
     
	<h3>6</h3>  
        <h2><?php echo $clubA1611; ?></h2>
        <h2><?php echo $clubA1612; ?></h2>
    <h4></h4>
		<input type="text" name="A1611" value="<?php echo $A1611 ;?>" size="3">
        <input type="text" name="A1612" value="<?php echo $A1612 ;?>" size="3">
      
	<h3>7</h3>  
        <h2><?php echo $clubA1613; ?></h2>
        <h2><?php echo $clubA1614; ?></h2>
    <h4></h4>
	    <input type="text" name="A1613" value="<?php echo $A1613 ;?>" size="3">
        <input type="text" name="A1614" value="<?php echo $A1614 ;?>" size="3">
      
	<h3>8</h3> 
        <h2><?php echo $clubA1615; ?></h2>
        <h2><?php echo $clubA1616; ?></h2>
    <h4></h4>
		<input type="text" name="A1615" value="<?php echo $A1615 ;?>" size="3">
        <input type="text" name="A1616" value="<?php echo $A1616 ;?>" size="3">
    
	<h3>9</h3>
         <h2><?php echo $clubA1617; ?></h2>
         <h2><?php echo $clubA1618; ?></h2>
    <h4></h4>
		<input type="text" name="A1617" value="<?php echo $A1617 ;?>" size="3">
        <input type="text" name="A1618" value="<?php echo $A1618 ;?>" size="3">
      
	<h3>10</h3>
        <h2><?php echo $clubA1619; ?></h2>
        <h2><?php echo $clubA1620; ?></h2>
    <h4></h4>
		<input type="text" name="A1619" value="<?php echo $A1619 ;?>" size="3">
        <input type="text" name="A1620" value="<?php echo $A1620 ;?>" size="3">
      
	<h3>11</h3>
        <h2><?php echo $clubA1621; ?></h2>
        <h2><?php echo $clubA1622; ?></h2>
    <h4></h4>
		<input type="text" name="A1621" value="<?php echo $A1621 ;?>" size="3">
        <input type="text" name="A1622" value="<?php echo $A1622 ;?>" size="3">
    
	<h3>12</h3>
        <h2><?php echo $clubA1623; ?></h2>
        <h2><?php echo $clubA1624; ?></h2>
    <h4></h4>
		<input type="text" name="A1623" value="<?php echo $A1623 ;?>" size="3">
		<input type="text" name="A1624" value="<?php echo $A1624 ;?>" size="3">
   
    <h3>13</h3>
		<h2><?php echo $clubA1625; ?></h2>
		<h2><?php echo $clubA1626; ?></h2>
    <h4></h4>
		<input type="text" name="A1625" value="<?php echo $A1625 ;?>" size="3">
		<input type="text" name="A1626" value="<?php echo $A1626 ;?>" size="3">
     
	<h3>14</h3> 
		<h2><?php echo $clubA1627; ?></h2>
		<h2><?php echo $clubA1628; ?></h2>
    <h4></h4>
		<input type="text" name="A1627" value="<?php echo $A1627 ;?>" size="3">
		<input type="text" name="A1628" value="<?php echo $A1628 ;?>" size="3">
   
   <h3>15</h3>
		<h2><?php echo $clubA1629; ?></h2>
        <h2><?php echo $clubA1630; ?></h2>
    <h4></h4>
		<input type="text" name="A1629" value="<?php echo $A1629 ;?>" size="3">
        <input type="text" name="A1630" value="<?php echo $A1630 ;?>" size="3">
   
    <h3>16</h3>
	    <h2><?php echo $clubA1631; ?></h2>
        <h2><?php echo $clubA1632; ?></h2>
    <h4></h4>
		<input type="text" name="A1631" value="<?php echo $A1631;?>" size="3">
        <input type="text" name="A1632" value="<?php echo $A1632;?>" size="3">
      
	<p class="texte">  Huitieme de finale </p>
     
	<h3>1</h3> 
        <h2><?php	echo $clubA8001; ?></h2>
        <h2><?php	echo $clubA8002; ?></h2>
    <h4></h4>
		<input type="text" name="A8001" value="<?php echo $A8001 ;?>" size="3">
         <input type="text" name="A8002" value="<?php echo $A8002 ;?>" size="3">
    
	<h3>2</h3>    
        <h2><?php	echo $clubA8003; ?></h2>
        <h2><?php	echo $clubA8004; ?></h2>
    <h4></h4>
	   	<input type="text" name="A8003" value="<?php echo $A8003 ;?>" size="3">
        <input type="text" name="A8004" value="<?php echo $A8004 ;?>" size="3">
    
	<h3>3</h3>   
        <h2><?php	echo $clubA8005; ?></h2>
        <h2><?php	echo $clubA8006; ?></h2>
    <h4></h4>
		<input type="text" name="A8005" value="<?php echo $A8005 ;?>" size="3">
        <input type="text" name="A8006" value="<?php echo $A8006 ;?>" size="3">
     
	<h3>4</h3>   
        <h2><?php echo $clubA8007; ?></h2>
        <h2><?php echo $clubA8008; ?></h2>
    <h4></h4>
	   	<input type="text" name="A8007" value="<?php echo $A8007;?>" size="3">
        <input type="text" name="A8008" value="<?php echo $A8008 ;?>" size="3">
       
    <h3>5</h3>
        <h2><?php echo $clubA8009; ?></h2>
        <h2><?php echo $clubA8010; ?></h2>
    <h4></h4>
		<input type="text" name="A8009" value="<?php echo $A8009 ;?>" size="3">
        <input type="text" name="A8010" value="<?php echo $A8010 ;?>" size="3">
       
    <h3>6</h3>
        <h2><?php echo $clubA8011; ?></h2>
		<h2><?php echo $clubA8012; ?></h2>
    <h4></h4>
	    <input type="text" name="A8011" value="<?php echo $A8011 ;?>" size="3">
        <input type="text" name="A8012" value="<?php echo $A8012 ;?>" size="3">
       
    <h3>7</h3>
        <h2><?php echo $clubA8013; ?></h2>
        <h2><?php echo $clubA8014; ?></h2>
	<h4></h4>
      	<input type="text" name="A8013" value="<?php echo $A8013 ;?>" size="3">
        <input type="text" name="A8014" value="<?php echo $A8014 ;?>" size="3">
    
	<h3>8</h3> 
       <h2><?php echo $clubA8015; ?></h2>
       <h2><?php echo $clubA8016; ?></h2>
    <h4></h4>
	   	<input type="text" name="A8015" value="<?php echo $A8015 ;?>" size="3">
        <input type="text" name="A8016" value="<?php echo $A8016;?>" size="3">
	  
	<p class="texte">  QUARTS DE FINALE </p>
    
	<h3>1</h3>
        <h2><?php echo $clubA4001; ?></h2>
        <h2><?php echo $clubA4002; ?></h2>
    <h4></h4>
		<input type="text" name="A4001" value="<?php echo $A4001 ;?>" size="3">
        <input type="text" name="A4002" value="<?php echo $A4002 ;?>" size="3">
      
	<h3>2</h3>  
        <h2><?php echo $clubA4003; ?></h2>
        <h2><?php echo $clubA4004; ?></h2>
    <h4></h4> 	
		<input type="text" name="A4003" value="<?php echo $A4003 ;?>" size="3">
        <input type="text" name="A4004" value="<?php echo $A4004 ;?>" size="3">
	   
	<h3>3</h3>
        <h2><?php echo $clubA4005; ?></h2>
        <h2><?php echo $clubA4006; ?></h2>
    <h4></h4>
		<input type="text" name="A4005" value="<?php echo $A4005 ;?>" size="3">
        <input type="text" name="A4006" value="<?php echo $A4006 ;?>" size="3">
      
	<h3>4</h3>
        <h2><?php echo $clubA4007; ?></h2>
		<h2><?php echo $clubA4008; ?></h2>
    <h4></h4>		
		<input type="text" name="A4007" value="<?php echo $A4007 ;?>" size="3">
        <input type="text" name="A4008" value="<?php echo $A4008 ;?>" size="3">       
	    
	<p class="texte"> DEMI FINALE </p>
   
	<h3>1</h3>
	    <h2><?php echo $clubA2001; ?></h2>
        <h2><?php echo $clubA2002; ?></h2>
    <h4></h4>
	    <input type="text" name="A2001" value="<?php echo $A2001 ;?>" size="3">
        <input type="text" name="A2002" value="<?php echo $A2002 ;?>" size="3">
	
	<h3>2</h3>
       	<h2><?php echo $clubA2003; ?></h2>
       	<h2><?php echo $clubA2004; ?></h2>
    <h4></h4>
		<input type="text" name="A2003" value="<?php echo $A2003 ;?>" size="3">
        <input type="text" name="A2004" value="<?php echo $A2004 ;?>" size="3">
	  
	<p class="texte"> FINALE	</p>
    
	<h3>1</h3>
        <h2><?php echo $clubA1001; ?></h2>
        <h2><?php echo $clubA1002; ?></h2>
    <h4></h4>
		<input type="text" name="A1001" value="<?php echo $A1001 ;?>" size="3">
   		<input type="text" name="A1002" value="<?php echo $A1002 ;?>" size="3">
		
	<footer><input type="submit" value="modifier" name="submit"></footer>
	  
    </form>
  </body>
</html>
