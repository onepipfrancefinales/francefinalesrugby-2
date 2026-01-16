<?php
echo "Ligue : ".$ligue;echo "<br />";
echo "Base : ".$base;echo "<br />";
echo "Division : ".$division;echo "<br />";
echo "Table : ".$table;echo "<br />";
// ****** Connexion à la base ******

require '../../connect/connexion6.php';

//******************************************************
//*                                                    *
//****** vidage de la table equipes             ********
//*                                                    *
//******************************************************
if ($base=="division")
{
	if($table=="equipes")
	{
	$table = $ligue."_equipes";
	 // vidage de la table
	 $bdd->exec("DELETE FROM $table WHERE id_champ = $division");
	 echo "table vidée: ".$table." division : ".$division ;echo "<br/>";
	}
	elseif ($table=="journees")
	{
		$table = $ligue."_journees";
	 // vidage de la table
	 $bdd->exec("DELETE FROM $table WHERE id_champ = $division");
	 echo "table vidée: ".$table." division : ".$division ;echo "<br/>";
	}
	elseif ($table=="matchs")
	{
		$table = $ligue."_matchs";
		$debutJournee = $division*100+1;
		$finJournee = $division*100+22;
		echo $debutJournee;echo "-";
		echo $finJournee;
		$bdd->exec("DELETE FROM $table WHERE id_journee between ($division*100+1) and ($division*100+22) ");
	 echo "table vidée: ".$table." division : ".$division ;echo "<br/>";
		
		
		echo "matchs";
	}
}


if ($base == "toutes")
{	
$table1=$ligue."_equipes";
$table2=$ligue."_journees";
$table3=$ligue."_matchs";

$bdd->exec("DELETE FROM $table1");
$bdd->exec("DELETE FROM $table2"); 
$bdd->exec("DELETE FROM $table3"); 

echo "table equipe vidée"."<br/>";
echo "table journées vidée"."<br/>";
echo "table matchs vidée"."<br/>";

}

if ($base == "toutes_clmnt")
{	
$table1=$ligue."_clmnt_cache";
$table2=$ligue."_clmnt_graph";
$table3=$ligue."_clmnt_pronos";

$bdd->exec("DELETE FROM $table1");
$bdd->exec("DELETE FROM $table2"); 
$bdd->exec("DELETE FROM $table3"); 

echo "table equipe vidée"."<br/>";
echo "table _clmnt_graph vidée"."<br/>";
echo "table _clmnt_pronos vidée"."<br/>";



}


elseif ($base == "equipes")
	{ 
	 $table = $ligue."_equipes";
	 // vidage de la table
	 $bdd->exec("DELETE FROM $table");
	 echo "table vidée: ".$table;echo "<br/>"; 	 
	}
	
//******************************************************
//*                                                    *
//****** vidage de la table journees            ********
//*                                                    *
//******************************************************	
			
if ($base == "journees")
		{ 
		$table = $ligue."_journees";
		
		// vidage de la table journees
		$bdd->exec("DELETE FROM $table "); 
		echo "table vidée: ".$table;echo "<br/>"; 				
		}
		

//******************************************************
//*                                                    *
//****** vidage de la table matchs 				 *********
//*                                                    *
//******************************************************

if ($base == "matchs")
		{ 
	
		$table = $ligue."_matchs";
		
		// vidage de la table matchs
		$bdd->exec("DELETE FROM $table  "); 
				
		echo "table vidée: ".$table;echo "<br/>"; 
		} 
		
        
  
?>
