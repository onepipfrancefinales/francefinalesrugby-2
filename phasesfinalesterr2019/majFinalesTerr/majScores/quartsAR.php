<html>
  <head>
<title>modification de données en PHP :: partie2</title>

<meta name=viewport content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../../maj.css">
</head>

<body>
<?php $page="score"; 
 $division=$_GET['division']; 
 $comite=$_GET['comite']; 

 $annee=$_GET['annee']; 
 $type=$_GET['type'];

require '../../../connect/connexion6.php';
require ("../../fonctionspfterrESDL2019.php");   
quartsDemiAR2019 ($comite, $division, $annee, $bdd) ;
//traitementScores (1601,1616, $bdd);
//traitementScores (8001,8016, $bdd);

?>
<form name="insertion" action="saisieScore2.php?division=<?php echo $division ;?>&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>&comite=<?php echo $comite ;?>" method="POST">
  
<input type="hidden" name="division" value="<?php echo($division) ;?>">

<header>
 <h1>QUARTS DE FINALE  <?php echo $division; ?> (  <?php echo $id; ?>  )    <?php echo $annee; ?>
      </h1> 
    </header>  
	   
	<p class="texte">  QUARTS DE FINALE AR</p>
    
	<h3>Aller 1</h3>	
		<h2> <?php	echo $clubA4001; ?></h2>
        <h2> <?php	echo $clubA4002; ?></h2>
      <h4></h4>    
		<input type="text" name="A8001" value="<?php echo $A8001 ;?>" size="3" placeholder="Points terrain">
        <input type="text" name="A8002" value="<?php echo $A8002 ;?>" size="3"placeholder="Points terrain">
      <h4></h4>  
        <input type="text" name="A1601" value="<?php echo $A1601 ;?>" size="3" placeholder="Goal Average">
        <input type="text" name="A1602" value="<?php echo $A1602 ;?>" size="3" placeholder="Goal Average"> 
	<h3>Aller 2</h3>	
	     	<h2> <?php echo $clubA4003; ?></h2>
		  	<h2> <?php echo $clubA4004; ?></h2>
       <h4></h4>     
          	<input type="text" name="A8003" value="<?php echo $A8003 ;?>" size="3" placeholder="Points terrain">
        	<input type="text" name="A8004" value="<?php echo $A8004 ;?>" size="3" placeholder="Points terrain">
       <h4></h4> 
       	 	<input type="text" name="A1603" value="<?php echo $A1603 ;?>" size="3" placeholder="Goal Average">
        	<input type="text" name="A1604" value="<?php echo $A1604 ;?>" size="3" placeholder="Goal Average">
	<h3>Aller 3</h3>      
       		<h2> <?php	echo $clubA4005; ?></h2>
        	<h2><?php	echo $clubA4006; ?></h2>
         <h4></h4> 	
			<input type="text" name="A8005" value="<?php echo $A8005 ;?>" size="3" placeholder="Points terrain">
        	<input type="text" name="A8006" value="<?php echo $A8006 ;?>" size="3" placeholder="Points terrain">
        <h4></h4> 
        	<input type="text" name="A1605" value="<?php echo $A1605 ;?>" size="3" placeholder="Goal Average">	
        	<input type="text" name="A1606" value="<?php echo $A1606 ;?>" size="3" placeholder="Goal Average">  
	<h3>Aller 4</h3>     
	  		 <h2> <?php	echo $clubA4007; ?></h2>
        	<h2><?php	echo $clubA4008; ?></h2>
        <h4></h4> 
			<input type="text" name="A8007" value="<?php echo $A8007 ;?>" size="3" placeholder="Points terrain">
	        <input type="text" name="A8008" value="<?php echo $A8008 ;?>" size="3" placeholder="Points terrain">
        <h4></h4> 
        	<input type="text" name="A1607" value="<?php echo $A1607 ;?>" size="3" placeholder="Goal Average">
	        <input type="text" name="A1608" value="<?php echo $A1608 ;?>" size="3" placeholder="Goal Average">


<hr />  
<br />	
	  
<h3>Retour 1</h3>	  
       		<h2>  <?php	echo $clubA4002; ?></h2>
        	<h2>  <?php	echo $clubA4001; ?></h2> 
     <h4></h4>     	
			<input type="text" name="R8010" value="<?php echo $R8010 ;?>" size="3" placeholder="Points terrain">		
    	    <input type="text" name="R8009" value="<?php echo $R8009 ;?>" size="3" placeholder="Points terrain">
	<h4></h4> 
	        <input type="text" name="R1610" value="<?php echo $R1610 ;?>" size="3" placeholder="Goal Average">
      		<input type="text" name="R1609" value="<?php echo $R1609 ;?>" size="3" placeholder="Goal Average">
<h3>Retour 2</h3>   
       		<h2> <?php	echo $clubA4004; ?></h2>
        	<h2>  <?php	echo $clubA4003; ?></h2>
        <h4></h4> 	
			<input type="text" name="R8012" value="<?php echo $R8012 ;?>" size="3" placeholder="Points terrain">
	        <input type="text" name="R8011" value="<?php echo $R8011 ;?>" size="3" placeholder="Points terrain">
        <h4></h4> 
        	<input type="text" name="R1612" value="<?php echo $R1612 ;?>" size="3" placeholder="Goal Average">		
       		<input type="text" name="R1611" value="<?php echo $R1611 ;?>" size="3" placeholder="Goal Average">
  <h3>Retour 3</h3>
     		<h2>  <?php	echo $clubA4006; ?></h2>
        	<h2>  <?php	echo $clubA4005; ?></h2>
		 <h4></h4> 	
        	<input type="text" name="R8014" value="<?php echo $R8014 ;?>" size="3" placeholder="Points terrain">
	        <input type="text" name="R8013" value="<?php echo $R8013 ;?>" size="3" placeholder="Points terrain">
        <h4></h4> 
        	<input type="text" name="R1614" value="<?php echo $R1614 ;?>" size="3" placeholder="Goal Average">
	        <input type="text" name="R1613" value="<?php echo $R1613 ;?>" size="3" placeholder="Goal Average">
  <h3>Retour 4</h3>     
      		<h2>  <?php	echo $clubA4008; ?></h2>
     		 <h2> <?php	echo $clubA4007; ?></h2>
       <h4></h4> 	
			<input type="text" name="R8016" value="<?php echo $R8016 ;?>" size="3" placeholder="Points terrain">	
        	<input type="text" name="R8015" value="<?php echo $R8015 ;?>" size="3" placeholder="Points terrain">
        <h4></h4> 	
        	<input type="text" name="R1616" value="<?php echo $R1616 ;?>" size="3" placeholder="Goal Average">
	        <input type="text" name="R1615" value="<?php echo $R1615 ;?>" size="3" placeholder="Goal Average">

     
	<p class="texte">  Demi finale AR </p>
  		
	<h3>Aller 1</h3>	
		<h2> <?php	echo $clubA2001; ?></h2>
        <h2> <?php	echo $clubA2002; ?></h2>
      <h4></h4>    
		<input type="text" name="A2001" value="<?php echo($A2001) ;?>" size="3" placeholder="Points terrain">
        <input type="text" name="A2002" value="<?php echo($A2002) ;?>" size="3"placeholder="Points terrain">
      <h4></h4>  
        <input type="text" name="A4001" value="<?php echo($A4001) ;?>" size="3" placeholder="Goal Average">
        <input type="text" name="A4002" value="<?php echo($A4002) ;?>" size="3" placeholder="Goal Average"> 
<h3>Aller 2</h3>	
	     	<h2> <?php echo $clubA2003; ?></h2>
		  	<h2> <?php echo $clubA2004; ?></h2>
       <h4></h4>     
          	<input type="text" name="A2003" value="<?php echo($A2003) ;?>" size="3" placeholder="Points terrain">
        	<input type="text" name="A2004" value="<?php echo($A2004) ;?>" size="3" placeholder="Points terrain">
       <h4></h4> 
       	 	<input type="text" name="A4003" value="<?php echo($A4003) ;?>" size="3" placeholder="Goal Average">
        	<input type="text" name="A4004" value="<?php echo($A4004) ;?>" size="3" placeholder="Goal Average">

<hr />  
<br />	
	  
<h3>Retour 1</h3>	  
       		<h2>  <?php	echo $clubA2002; ?></h2>
        	<h2>  <?php	echo $clubA2001; ?></h2> 
     <h4></h4>     	
			<input type="text" name="R2002" value="<?php echo($R2002) ;?>" size="3" placeholder="Points terrain">		
    	    <input type="text" name="R2001" value="<?php echo($R2001) ;?>" size="3" placeholder="Points terrain">
	<h4></h4> 
	        <input type="text" name="R4002" value="<?php echo($R4002) ;?>" size="3" placeholder="Goal Average">
      		<input type="text" name="R4001" value="<?php echo($R4001) ;?>" size="3" placeholder="Goal Average">
<h3>Retour 2</h3>   
       		<h2> <?php	echo $clubA2004; ?></h2>
        	<h2>  <?php	echo $clubA2003; ?></h2>
        <h4></h4> 	
			<input type="text" name="R2004" value="<?php echo($R2004) ;?>" size="3" placeholder="Points terrain">
	        <input type="text" name="R2003" value="<?php echo($R2003) ;?>" size="3" placeholder="Points terrain">
        <h4></h4> 
        	<input type="text" name="R4004" value="<?php echo ($R4004) ;?>" size="3" placeholder="Goal Average">		
       		<input type="text" name="R4003" value="<?php echo ($R4003) ;?>" size="3" placeholder="Goal Average">
 
  	<p class="texte"> FINALE </p>
  
    <h3>1</h3>
		<h2><?php	echo $clubA1001; ?></h2>
		<h2><?php	echo $clubA1002; ?></h2>
    <h4></h4>
	   	<input type="text" name="A1001" value="<?php echo $A1001 ;?>" size="3">
   		<input type="text" name="A1002" value="<?php echo $A1002 ;?>" size="3">
    <footer> 
        <input type="submit" value="modifier" name="submit">
      </footer> 
     
</form>




</body>
</html>
