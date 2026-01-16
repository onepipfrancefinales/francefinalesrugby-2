

<?php
function nomChampionnat ($codeEquipe, $journee, $bddComite, $bdd)
{

$phpcomite_divisions = "php".$bddComite."_divisions";

if (isset($nomChampionnat)) $nomChampionnat = $nomChampionnat; else $nomChampionnat ="";
global $nomChampionnat;


if (strlen($codeEquipe)==7)
$codeChampionnat = substr($journee,0,6);
else 
$codeChampionnat = substr($journee,0,7); 

 $reponse =$bdd->query( "SELECT nom
			FROM $phpcomite_divisions 
			WHERE id='$codeChampionnat'");  
			
 while ($row = $reponse->fetch() )
	{ 
	 $nomChampionnat = $row[0]; 
	}
			
}


function affichageEquipeUne($journee, $codeEquipe, $bddComite, $bdd){
	
 $phpcomite_matchs = "php".$bddComite."_matchs";
 $phpcomite_clubs = "php".$bddComite."_clubs";
 $codeEquipeDebut = substr ($codeEquipe,0,4);
 $codeEquipeFin= 501;
 
 global $codeEquipe1,  $codeEquipe2, $dateBrute, $equipe1, $equipe2 ;	
	
 if (isset($codeEquipe1)) $codeEquipe1 = $codeEquipe1;else  $codeEquipe1 = $codeEquipe;
 if (isset($codeEquipe2)) $codeEquipe2 = $codeEquipe2; else $codeEquipe2 = $codeEquipeDebut.$codeEquipeFin;
 
 // Code des equipes
 $reponse =$bdd->query( "
		  SELECT id_equipe_dom,  id_equipe_ext, buts_dom, buts_ext, date_reelle 
		  FROM $phpcomite_matchs 
		  WHERE id_journee='$journee'
		  AND (id_equipe_dom='$codeEquipe' or id_equipe_ext='$codeEquipe')"); 

 while ($row = $reponse->fetch() )
	{ 
	 $codeEquipe1 = $row[0]; 
	 $codeEquipe2 = $row[1]; 
	 $dateBrute = $row[4];
	} 
					
				
 
 
 // Nom litéral des équipes (domicile)		 
 $reponse =$bdd->query("	
		   SELECT nom
		   FROM  $phpcomite_clubs
		   WHERE id='$codeEquipe1'"); 
			
 while ($row = $reponse->fetch() )
	{ 
	 $equipe1= $row[0]; 
	}
	
 // Nom litéral des équipe (exterieure)			
 $reponse =$bdd->query("	
		  SELECT nom
		  FROM  $phpcomite_clubs
		  WHERE id='$codeEquipe2'");  
		
 while ($row = $reponse->fetch() )
	{ 
	 $equipe2= $row[0]; 
	}
}

function affichageEquipeDeux($journee, $codeEquipe, $bddComite, $bdd){

 $phpcomite_matchs = "php".$bddComite."_matchs";
 $phpcomite_clubs = "php".$bddComite."_clubs";
 $codeEquipeDebut = substr ($codeEquipe,0,5);
 $codeEquipeFin= 501; // Exempt => codeEquipeDebut.501
 
 global $codeEquipe1,  $codeEquipe2, $dateBrute, $equipe1, $equipe2 ;	

 if (isset($codeReserveEquipe1)) $codeReserveEquipe1 = $codeReserveEquipe1; else  $codeReserveEquipe1 = $codeEquipe;
 if (isset($codeReserveEquipe2)) $codeReserveEquipe2 = $codeReserveEquipe2;  else $codeReserveEquipe2 = $codeEquipeDebut.$codeEquipeFin;
 
 $reponse =$bdd->query( "SELECT id_equipe_dom,  id_equipe_ext, buts_dom, buts_ext, date_reelle 
			FROM $phpcomite_matchs 
			WHERE id_journee='$journee' 
			AND (id_equipe_dom='$codeEquipe' or id_equipe_ext='$codeEquipe')"); 
 
 while ($row = $reponse->fetch() )
	{ 
	 $codeReserveEquipe1 = $row[0]; 
	 $codeReserveEquipe2 = $row[1]; 
	 $dateBrute = $row[4];	
	} 
	
 $codeEquipe1=$codeReserveEquipe1-90000000;
 $codeEquipe2=$codeReserveEquipe2-90000000;
										
 // Nom équipe (domicile)
 if (isset($equipe1)) $equipe1 = $equipe1;		
 
 $reponse =$bdd->query( "
		 SELECT nom
		 FROM  $phpcomite_clubs
		 WHERE id='$codeEquipe1 '"); 
			 
 while ($row = $reponse->fetch() )
	{ 
	 $equipe1= $row[0]; 
	}
				
 // Nom équipe (exterieure)	
 $reponse =$bdd->query( "	
		  SELECT nom
		  FROM  $phpcomite_clubs
		  WHERE id='$codeEquipe2'"); 
			 
 while ($row = $reponse->fetch() )
	{ 
	$equipe2= $row[0]; 
	}
}
?>