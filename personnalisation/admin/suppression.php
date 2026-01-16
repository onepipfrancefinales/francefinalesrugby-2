<?php 
$id = $_GET['id'];
	
include ("../../connect1/connection5.php"); 																				
$bdd->exec("UPDATE personnel 
			SET comite1= null , division1= 0 , type1= 0 , taille1= 0,
				comite2= null , division2= 0 , type2= 0 , taille2= 0,
				comite3= null , division3= 0 , type3= 0 , taille3= 0, 
				comite4= null , division4= 0 , type4= 0 , taille4= 0, 
				comite5= null , division5= 0 , type5= 0 , taille5= 0 
			WHERE id='$id' " ); 
																																						
header ('location: pageChoix.php?comiteA=&poule='); 
?>