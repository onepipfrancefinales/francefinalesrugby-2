<?php 
$page="score"; 

if (isset ($_GET['type'])) $type = $_GET['type']; else $type = "non d�clar�e";
if (isset ($_GET['annee'])) $annee = $_GET['annee']; else $annee = " non d�clar�e";
if (isset ($_GET['division'])) $division = $_GET['division']; else $division = "non d�clar�e";
if (isset ($_GET['phase'])) $phase = $_GET['phase']; else $phase = "non d�clar�e";

$bdpfAnnee = "bdpf".$annee."_2";


if ($phase == '1')
{$debut =1001; $fin = 1003;}
elseif ($phase == '2')
{$debut =2001; $fin = 2005;}
elseif ($phase == '4')
{$debut =4001; $fin = 4009;}
elseif ($phase == '8')
{$debut =8001; $fin = 8017;}
elseif ($phase == '16')
{$debut =1601; $fin = 1633;}
elseif ($phase == '32' or $phase =='64')
{
$debut =3201;$fin = 3265;	
$bdpfAnnee ="bdpf".$annee;}
require "../../../connect/connexion1.php";	
if (substr ($type,1,2) == '32' OR substr ($type,3,2) == '16' OR substr ($type,5,2) == '08' 
OR substr ($type,7,2) == '04' OR substr ($type,9,2) == '21' OR substr ($type,9,2) == '01'
OR substr ($type,9,2) == '02' //  finale 
OR substr ($type,9,2) == '22' //  finale AR
OR substr ($type,9,2) == '04' // demi AR - finale 
OR substr ($type,9,2) == '24')// demi AR - finale AR
{
//***************  Récupération des résultats - Qualification sur une rencontre ****************************
									
$tabScores[]=array();
	
for ($i=$debut; $i<$fin; $i++)
	{
	 $scores="A".$i;
	
	 $reponse = $bdd->query("
			SELECT  $scores
			FROM   $bdpfAnnee
			WHERE  id = $division ");
									
	 while ($row = $reponse->fetch())
		{
		$tabScores[] = $row[0];
		}
	}
}
else
{
 
 //***************  Qualification sur un  match Aller-Retour ****************************
							
 //***************  Récupération des résultats ALLER - Scores ALLER  (Goalverage) *******
	echo "ici aller retour";								
 $tabScoresAller[]=array();
	echo $debut;
for ($i=$debut; $i<$fin; $i++)
	{
		echo "<br/>";
	 $scoresAller="A".$i;
	 echo $scoresAller;
	 echo "<br/>";
	 $reponse = $bdd->query("
			SELECT  $scoresAller
			FROM   $bdpfAnnee
			WHERE  id = '$dividion'");
									
	 while ($row = $reponse->fetch())
		{
		$tabScoresAller[] = $row[0];
		}
	


	 //***************  Récupération des résultats ALLER - Points terrain ALLER  (Pts terrain) *******

	 $division = $division +1;							
	 $tabPtsAller[]=array();
	 
	 $PtsTerrainAller="A".$i;
	 
	 $reponse = $bdd->query("
			SELECT  $PtsTerrainAller
			FROM $bdpfAnnee
			WHERE  id ='$division'" ) ;			
			  					
	 while ($row = $reponse->fetch())
		{
		 $tabPtsAller[] = $row[0];
		}	
	 echo $tabPtsAller[1];echo $tabPtsAller[2];echo $tabPtsAller[3];echo $tabPtsAller[4];

	 //***************  Récupération des résultats RETOUR - Points terrain RETOUR  (Pts terrain)   ****************************
							 
	 $division = $division +1;
	 $tabPtsRetour[]=array();
		 
	 $PtsTerrainRetour="A".$i;	
			
	 $reponse = $bdd->query("
			SELECT  $PtsTerrainRetour
			FROM $bdpfAnnee
			WHERE id = '$division'" ) ;			
		
	 while ($row = $reponse->fetch())
		{
		 $tabPtsRetour[] = $row[0];
		}
	
	 //***************  Récupération des résultats RETOUR - Scores RETOUR  (Goalverage) ****************************

	 $division = $division +1;								
	 $tabScoresRetour[]=array();

	 $PtsScoresRetour="A".$i;	
		
	 $reponse = $bdd->query("
			SELECT  $PtsScoresRetour
    		FROM $bdpfAnnee
			WHERE id = '$division'" ) ;			

	 while ($row = $reponse->fetch())
		{
		 $tabScoresRetour[] = $row[0];
		}	
	}	
}
?>
  
