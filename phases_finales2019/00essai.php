<?php
//*****************************************************************************
//************************         Equipes de E01 à E09  **********************
//*****************************************************************************	
//$debut =1;
//$fin=9;

$tabNomEquipes1 = array();
$tabNomComite1 = array();
$tabNomLigue = array();
$tabNomLigue1 = array();
$tabId = array();
 	
global $equipes, $tabNomEquipes1,$tabNomComite1, $tabNomLigue1, $tabId;	

for ($i=$debutEquipes1 ; $i<= $finEquipes1; $i++)
	{		
	 global ${$prefixeEquipes1.($i)};
	 global ${$prefixeEquipes1B.($i)};
	 global ${"codeId".$i};
	 global ${"nomLigue320".$i};//3201 
	//	global  $tabNomEquipes1[$i-1];	 
	 $equipes = "E0".$i;
	  							
	 $reponse = $bdd->query("	
				SELECT bdclubs.id, bdclubs.nom_1, bdclubs.sigleComite, bdclubs.ligue 
				FROM bdclubs, bdpffrance
				WHERE bdclubs.id=bdpffrance.$equipes 
				AND bdpffrance.id= '$division' AND bdpffrance.saison = '$annee'"); 
										
	 while ($row = $reponse->fetch() )
		{ 
		 $tabId[] = $row[0];
		 $tabNomEquipes1[] = $row[1];
		 $tabNomComite1[] = $row[2];
		 $tabNomLigue[] = $row[3];
		}	
	}

for ($i=$debutEquipes1; $i < $finEquipes1; $i++)
	{	   
	 for ($j=0; $j< $tabDesEquipes1; $j++)
		{
		 if (isset($tabNomLigue[$j])) $tabNomLigue[$j]=$tabNomLigue[$j]; else $tabNomLigue[$j]="-";
		 $reponse = $bdd->query("	
					SELECT sigle 
					FROM bdligue 
					WHERE id='$tabNomLigue[$j]'"); 
										
		 while ($row = $reponse->fetch())
			{  $tabNomLigue1[] = $row[0];}	
		}
	 //echo $i;
	  echo $tabNomEquipes1[4];
	 //echo $tabNomLigue[$i-1];
	 //echo $tabNomLigue1[$i-1];
	 
	
	 if ($annee > 2018)
		{ ${$prefixeEquipes1.($i)} = $tabNomEquipes1[$i-1].' '."".$tabNomLigue1[$i-1]."";}
		else
		{ ${$prefixeEquipes1.($i)} = $tabNomEquipes1[$i-1].' '.$tabNomComite1[$i-1];	}	
	
	}
?>	