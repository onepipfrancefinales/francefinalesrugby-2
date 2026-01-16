<?php
$id=$_GET['id'];
$i=$_GET['i'];

include ("../../connect1/connection5.php");

if ($i == 1)
	{
	$bdd->exec("UPDATE personnel
				   SET comite1=NULL, division1=0, type1=0, taille1=0 
				   WHERE id='$id'");			   
	}	
elseif ($i == 2)	
	{
	$bdd->exec("	UPDATE personnel
				SET comite2=NULL , division2=0 , type2=0 , taille2=0
				WHERE id='$id'");
	}
elseif ($i == 3)	
	{
	$bdd->exec( "	UPDATE personnel
				SET comite3=NULL , division3=0 , type3=0 , taille3=0
				WHERE id='$id'");
	}
elseif ($i == 4)	
	{
	$bdd->exec("	UPDATE personnel
				SET comite4=NULL , division4=0 , type4=0 , taille4=0
				WHERE id='$id'");
	}
elseif ($i == 5)	
	{
	$bdd->exec( "UPDATE personnel
				SET comite5=NULL , division5=0 , type5=0 , taille5=0
				WHERE id='$id'");
	}
header ('location: pageChoix.php?comiteA=&poule=&comite=&division=');
?>