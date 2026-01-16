<?php 
if (isset($_GET['texte'] )) $texte=$_GET['texte'];else $texte ="";
if (isset($requete )) $requete=$requete;else $requete ="";
echo $texte;
 
require ("choixTable.php"); 
require ("choixComite.php"); 
require ("choixRequete.php"); 

//if (table == "reinit")
//	{
	
//	}
//else
//	{
/*	if ($requete == "consulter")
	 	require ("consulter.php");
	elseif ($requete == "ajouter")
	 	require ("ajouter.php");
	elseif ($requete == "modifier")
	 	require ("modifier.php");
	elseif ($requete == "rechercher")
	 	require ("rechercher.php");
	elseif ($requete == "vider")
	 	require ("vider.php");
*/
//	} 

?>

