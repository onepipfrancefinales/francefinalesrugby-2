<?php
function verifClubsPresents($comite ,$debut ,$fin, $bdd)
{
//$comite= "ab";
//$debut = '8001';
//$fin = '8016';
	
 for ($i = $debut; $i <= $fin; $i++)
 {	
	echo $debut;echo "<br />";
	echo $fin;echo "<br />";
	$bddComite_clubs ="php".$comite."_clubs";
	
	$reponse = $bdd->query("SELECT count(id)
				FROM $bddComite_clubs
				WHERE  id = '${'clubA'.$i}' ");
							
				$row = $reponse->fetch();
				
    $idPresent = $row[0];						
	if ( $idPresent [0] != 1)
	{
	echo "<br />";
	echo "L &eacute;quipe ".${"clubA".$i}." n'est pas pr&eacute;sente dans la table php_clubs"."<br />" ;
	${"clubA".$i} ='99999';
	}
  }
} 
?>