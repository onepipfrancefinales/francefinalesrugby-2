
<?php


// Récupération du nom de la division
function nomDivision($division)
{
global $nomDivision;	

require '../../connect/connection5.php';
				
	$reponse = $bdd->query("SELECT division
							FROM divisions
							WHERE id = $division "); 
								while ($row = $reponse->fetch() )
									{ 
									$nomDivision = $row[0];
									}								
}


//*********    Affichage du champion et du logo     **************
function championDeFrance ( $clubA1001, $clubA1002, $A1001, $A1002, $bdd)
{
if (isset ($chamLogo)) $chamLogo = $chamLogo; else $chamLogo='clubs inconnu'; 
if (isset ($idEquipe)) $idEquipe = $idEquipe; else $idEquipe=''; 
if (isset ($championPLusLigue)) $championPLusLigue = $championPLusLigue; else $championPLusLigue=''; 

if (isset($clubA1001)) $clubA1001=$clubA1001; else $clubA1001="";

global $champion, $idEquipe, $nomChampion, $idEquipeCourt ;

if (is_numeric($A1001)+ is_numeric($A1002) > 0)
		{ if ($A1001>$A1002)
			{
				$champion=$clubA1001;
				//$idChampion=$A1001;
			}				
			else	
			{
				$champion=$clubA1002;
				//$idChampion=$A1002;	
			}
		}
$nomChampion= substr($champion,0, -6);

// affichage logo
 $reponse = $bdd->query("SELECT id
						 FROM bdclubs
						 WHERE  nom_1 = '$nomChampion' and type='M'"); 
  
  while ($row = $reponse->fetch())
  { 
   $idEquipe = $row[0];
  }
  $idEquipeCourt=substr($idEquipe ,2,5);
}

//bdd - division - place
function traitement($comite, $division, $place)
{
require '../connect/connexion6.php';	

$phpComite_clmnt_cache="php".$comite."_clmnt_cache";


$reponse = $bdd->query("SELECT NOM, ID_EQUIPE, POINTS, DIFF
							FROM $phpComite_clmnt_cache
							WHERE id_champ ='$division'
							ORDER BY POINTS DESC"); 
								
	
	while ($row = $reponse->fetch() )
		{ 
		$nomEquipe[]= $row[0];
		$idEquipe[]= $row[1];
		$points[]= $row[2];
		$GA[]= $row[3];
		}
	$i = $place- 1;
	echo $place.' ;'.$idEquipe[$i].'; '.$nomEquipe[$i].'; '.$points[$i].'; '.$GA[$i].'; '.$division;echo "<br>";	
}





function recupListeEquipes($bdd)
{


$nomEquipe= array();
$idEquipe= array();


		

	
 
///traitement(990151);
//traitement(990152);
//traitement(990153);
 
}