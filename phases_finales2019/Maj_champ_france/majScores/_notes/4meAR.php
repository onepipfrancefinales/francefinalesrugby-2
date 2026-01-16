<html>
  <head>
<title>modification de donn&eacute; es en PHP :: partie2</title>

<meta name=viewport content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../maj.css">
</head>

<body>

<?php 
$division=$_GET['division']; 
$annee=$_GET['annee']; 
$type=$_GET['type'];
$bdpfAnnee_2 = "bdpf".$annee."_2";

$phase=$_GET['phase'];
?>
<form name="insertion" action="saisieScore2.php?phase=<?php echo $phase; ?>&division=<?php echo $division ;?>&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>&comite=<?php echo $comite ;?>" method="POST">
  
  <?php
/*						
														
//***************  Scores  ALLER   	(Goal Average )****************************
*/												 
			require '../../../connect1/connection1.php';													
												
		$reponse = $bdd->query("SELECT id ,A4001, A4002, A4003, A4004,	A4005, A4006, A4007, A4008	
								FROM $bdpfAnnee_2
								WHERE  id =$division" ) ;	

		while ($donnees = $reponse->fetch() )
			{	  
			 for ($i=1; $i<9; $i++)
				{
				 ${"A400".$i} = $donnees['A400'.$i];
				} 							  
			}						

							 
		$division = $division +1;							
		$reponse = $bdd->query("SELECT id ,A4001 as A4001Pts, A4002  as A4002Pts, A4003  as A4003Pts, A4004  as A4004Pts,
										   A4005 as A4005Pts, A4006  as A4006Pts, A4007  as A4007Pts, A4008 as A4008Pts			
								FROM $bdpfAnnee_2
								WHERE  id ='$division'" ) ;			
		while ($donnees = $reponse->fetch() )
			{	  
			 for ($i=1; $i<9; $i++)
				{
				 ${"A400".$i.'Pts'} = $donnees['A400'.$i.'Pts'];
				} 							  
			}
							  
?>



 <header>
  <input type="hidden" name="division" value="<?php echo($division) ;?>">
   <h1><?php echo "Quarts de finale AR ".'('.$division.')'.$annee; ?></h1>
        
  
 
        
     </header>  
       
<h3>Aller 1</h3>
		
		<h2> <?php	echo $clubA4001; ?></h2>
        <h2> <?php	echo $clubA4002; ?></h2>
      <h4></h4>    
		<input type="text" name="A4001Pts" value="<?php echo $A4001Pts ;?>" size="3" placeholder="Points terrain">
        <input type="text" name="A4002Pts" value="<?php echo $A4002Pts ;?>" size="3"placeholder="Points terrain">
      <h4></h4>  
        <input type="text" name="A4001" value="<?php echo $A4001 ;?>" size="3" placeholder="Goal Average">
        <input type="text" name="A4002" value="<?php echo $A4002 ;?>" size="3" placeholder="Goal Average">
       
    
<h3>Aller 2</h3>	
	     	<h2> <?php echo $clubA4003; ?></h2>
		  	<h2> <?php echo $clubA4004; ?></h2>
       <h4></h4>     
          	<input type="text" name="A4003Pts" value="<?php echo $A4003Pts ;?>" size="3" placeholder="Points terrain">
        	<input type="text" name="A4004Pts" value="<?php echo $A4004Pts ;?>" size="3" placeholder="Points terrain">
       <h4></h4> 
       	 	<input type="text" name="A4003" value="<?php echo $A4003 ;?>" size="3" placeholder="Goal Average">
        	<input type="text" name="A4004" value="<?php echo $A4004 ;?>" size="3" placeholder="Goal Average">
<h3>Aller 3</h3>      
       		<h2> <?php	echo $clubA4005; ?></h2>
        	<h2><?php	echo $clubA4006; ?></h2>
         <h4></h4> 	
			<input type="text" name="A4005Pts" value="<?php echo $A4005Pts ;?>" size="3" placeholder="Points terrain">
        	<input type="text" name="A4006Pts" value="<?php echo $A4006Pts ;?>" size="3" placeholder="Points terrain">
        <h4></h4> 
        	<input type="text" name="A4005" value="<?php echo $A4005 ;?>" size="3" placeholder="Goal Average">	
        	<input type="text" name="A4006" value="<?php echo $A4006 ;?>" size="3" placeholder="Goal Average">
       
 <h3>Aller 4</h3>     
	  		 <h2> <?php	echo $clubA4007; ?></h2>
        	<h2><?php	echo $clubA4008; ?></h2>
        <h4></h4> 
			<input type="text" name="A4007Pts" value="<?php echo $A4007Pts ;?>" size="3" placeholder="Points terrain">
	        <input type="text" name="A4008Pts" value="<?php echo $A4008Pts ;?>" size="3" placeholder="Points terrain">
        <h4></h4> 
        	<input type="text" name="A4007" value="<?php echo$A4007 ;?>" size="3" placeholder="Goal Average">
	        <input type="text" name="A4008" value="<?php echo $A4008 ;?>" size="3" placeholder="Goal Average">
 
 
			 
  <p>&nbsp;</p>

  <hr />  
	
	
<?php	
	
//***************  Scores  RETOUR   	( POINTS TERRAIN)****************************
			
			
			//require '../../../connect1/connection1.php';
			echo $division; echo $annee;									 
			$division = $division +1;									
			$reponse = $bdd->query("SELECT id ,A4001 ,A4002, A4003, A4004,	A4005, A4006, A4007, A4008
				
    					   			  FROM $bdpfAnnee_2
									  WHERE id = '$division'" ) ;

				while ($donnees = $reponse->fetch() )
					{	  
					 for ($i=1; $i<9; $i++)
						{
						 ${"A400".$i} = $donnees['A400'.$i];
						} 							  
					}		
									  

							
		$division = $division +1;								
		$reponse = $bdd->query("SELECT id ,A4001 as R4001Pts ,A4002 as R4002Pts, A4003 as R4003Pts, A4004 as R4004Pts,
												A4005 as R4005Pts, A4006 as R4006Pts, A4007 as R4007Pts, A4008 as R4008Pts
			               
    					   			  FROM $bdpfAnnee_2
									  WHERE id = '$division'" ) ;	

			while ($donnees = $reponse->fetch() )
				{	  
				 for ($i=1; $i<9; $i++)
					{
					 ${"R400".$i.'Pts'} = $donnees['R400'.$i.'Pts'];
					} 							  
				}											  

	
?>	
	
<br />	
	  
<h3>Retour 1</h3>	  
	  
       		<h2>  <?php	echo $clubA4002; ?></h2>
        	<h2>  <?php	echo $clubA4001; ?></h2> 
     <h4></h4>     	
			<input type="text" name="R4002Pts" value="<?php echo $R4002Pts ;?>" size="3" placeholder="Points terrain">		
    	    <input type="text" name="R4001Pts" value="<?php echo $R4001Pts ;?>" size="3" placeholder="Points terrain">
	<h4></h4> 
	        <input type="text" name="R4002" value="<?php echo $R4002 ;?>" size="3" placeholder="Goal Average">
      		<input type="text" name="R4001" value="<?php echo $R4001 ;?>" size="3" placeholder="Goal Average">

<h3>Retour 2</h3>   
       		<h2> <?php	echo $clubA4004; ?></h2>
        	<h2>  <?php	echo $clubA4003; ?></h2>
        <h4></h4> 	
			<input type="text" name="R4004Pts" value="<?php echo $R4004Pts ;?>" size="3" placeholder="Points terrain">
	        <input type="text" name="R4003Pts" value="<?php echo $R4003Pts ;?>" size="3" placeholder="Points terrain">
        <h4></h4> 
        	<input type="text" name="R4004" value="<?php echo $R4004 ;?>" size="3" placeholder="Goal Average">		
       		<input type="text" name="R4003" value="<?php echo $R4003 ;?>" size="3" placeholder="Goal Average">
     
  <h3>Retour 3</h3>
     		<h2>  <?php	echo $clubA4006; ?></h2>
        	<h2>  <?php	echo $clubA4005; ?></h2>
		 <h4></h4> 	
        	<input type="text" name="R4006Pts" value="<?php echo $R4006Pts ;?>" size="3" placeholder="Points terrain">
	        <input type="text" name="R4005Pts" value="<?php echo $R4005Pts ;?>" size="3" placeholder="Points terrain">
        <h4></h4> 
        	<input type="text" name="R4006" value="<?php echo $R4006 ;?>" size="3" placeholder="Goal Average">
	        <input type="text" name="R4005" value="<?php echo $R4005 ;?>" size="3" placeholder="Goal Average">
 
  <h3>Retour 4</h3>     
      		<h2>  <?php	echo $clubA4008; ?></h2>
     		 <h2> <?php	echo $clubA4007; ?></h2>
       <h4></h4> 	
			<input type="text" name="R4008Pts" value="<?php echo $R4008Pts ;?>" size="3" placeholder="Points terrain">	
        	<input type="text" name="R4007Pts" value="<?php echo $R4007Pts ;?>" size="3" placeholder="Points terrain">
        <h4></h4> 	
        	<input type="text" name="R4008" value="<?php echo $R4008 ;?>" size="3" placeholder="Goal Average">
	        <input type="text" name="R4007" value="<?php echo $R4007 ;?>" size="3" placeholder="Goal Average">


  <br>
 
  <article> 
  <h2>&nbsp;</h2>
  </article><article> 
  <h2>&nbsp;</h2>
  </article>
  <h2>&nbsp; </h2>
  <h2>&nbsp;</h2>
      <h4></h4>   
	    
  <footer> 
  <input type="submit" value="modifier" name="submit">
		</footer>
     <a href="../accueilMAJ.php">Retour accueil</a>
</form>



<p>&nbsp;</p>
</body>
</html>
