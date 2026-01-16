
<?php 
require ("../../connect1/connection2.php"); 
if (isset($_GET['tableAConsulter'])) $tableAConsulter = $_GET['tableAConsulter']; else $tableAConsulter = "  NON FOURNI  ";
if (isset($_POST['reponse'])) $reponse = $_POST['reponse']; else $reponse = "  NON FOURNI  ";
//echo "table &agrave; consulter : ".$tableAConsulter;echo "<br />";
//ECHO "reponse : ".$reponse;

 if  ( $reponse == "Oui")
 	{
 	$bdd->exec("DELETE FROM $tableAConsulter");
 	header ('location: accueil.php?texte="table effac&eacute;e"'); 
	
	} 
	else 
	{
	 $texte = "operation annul&eacute;e"; 			 
	 header ('location: accueil.php?texte="operation annul&eacute;e"');
	} 
	?> 
