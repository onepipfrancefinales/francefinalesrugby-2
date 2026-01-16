 <?php  
$journeeJ = "J0".$journee;
$php_equipesResultat = $ligue."_equipesResultat";
$php_clubs = $ligue."_clubs";
$php_matchs = $ligue."_matchs";
$php_championnats= $ligue."_championnats";
		
echo "journee : ".$journee."<br />";
echo $php_matchs."<br />";
echo $php_championnats;
echo "<br />";

$ligueSansPhp = substr($ligue,3,3);
echo $ligueSansPhp;

if (isset ($division)) $division =$division; else $division ="inconnu";


require ("../../../connect1/connection1.php") ;


$reponse = $bdd->query("SELECT id
						FROM bdligue
						WHERE php ='$ligueSansPhp'");
						while ($row = $reponse->fetch() )
										{ 
										$idligue = $row[0];
										}
echo $idligue;
	


if ($ligue == "phpf1" or $ligue == "phpfed2" or $ligue == "phpfed3GS" OR  $ligue == "phpfed3NE" )
require ("../../../connect1/connection3.php") ;
else
require ("../../../connect1/connection2.php") ;





//Permet la récupération de tous les N° des poules de la ligue

$tabDivision = array();
$reponse = $bdd->query("SELECT id_division 
						FROM $php_championnats
						WHERE id_saison ='2010'");
						while ($row = $reponse->fetch() )
										{ 
										$tabDivision[] = $row[0]."0".$journee;
	


//echo  $tabDivision."<br/>";
			}
			
for ($i=0; $i<count($tabDivision) ; $i++) 
{
	//Affichage de la division
	echo  $tabDivision[$i]."<br/>";
	
	if ($ligue == "phpf1" OR $ligue == "phpfed2" OR $ligue == "phpfed3NE" OR $ligue == "phpfed3GS")		
		{
		$debut =990*10000000+$tabDivision[$i]*100+01;
		//echo $debut;
		$fin =  990*10000000+$tabDivision[$i]*100+07;
		//echo $fin;
		}
	else
		{
		$debut = $idligue*100000000+$tabDivision[$i]*100+01;
		//echo $debut;
		$fin =  $idligue*100000000+$tabDivision[$i]*100+06;
		//echo $fin;
		}

	for($j=$debut; $j<$fin; $j++)
	{
	//echo $j;
	//echo "<br />";
	
	if ( $tabDivision[$i] < 26000)
	
	{
	
	$reponse = $bdd->query("SELECT $php_clubs.nom, $php_matchs.id_journee , $php_matchs.buts_dom  ,$php_matchs.buts_ext, $php_matchs.id_equipe_dom,  $php_matchs.id_equipe_ext,  $php_matchs.id
							FROM $php_matchs
							INNER JOIN $php_clubs ON $php_matchs.id_equipe_dom = $php_clubs.id
							WHERE $php_matchs.id=$j order by $php_matchs.id");
									while ($row= $reponse->fetch() )
											{ 
											$equipe1 = $row[0];
											$journeeMatch =$row[1];
											$score1 = $row[2];
											$score2 = $row[3]; 
											$idEquipe1 = $row[4];
											$idMatch = $row[6];
									
											}
											
	$reponse = $bdd->query("SELECT $php_clubs.nom, $php_matchs.id_journee , $php_matchs.buts_dom  ,$php_matchs.buts_ext, $php_matchs.id_equipe_dom,  $php_matchs.id_equipe_ext,  $php_matchs.id
							FROM $php_matchs
							INNER JOIN $php_clubs ON $php_matchs.id_equipe_ext = $php_clubs.id
							WHERE $php_matchs.id=$j order by $php_matchs.id");
									while ($row= $reponse->fetch() )
											{ 
											
											$equipe2 = $row[0];
											$idEquipe2 = $row[5];
											}										
											
	}
	else
	{
		$reponse = $bdd->query("SELECT $php_clubs.nom, $php_matchs.id_journee , $php_matchs.buts_dom  ,$php_matchs.buts_ext, $php_matchs.id_equipe_dom,  $php_matchs.id_equipe_ext,  $php_matchs.id
							FROM $php_matchs
							INNER JOIN $php_clubs ON $php_matchs.id_equipe_dom - 90000000 = $php_clubs.id
							WHERE $php_matchs.id=$j order by $php_matchs.id");
									while ($row= $reponse->fetch() )
											{ 
											$equipe1 = $row[0];
											$journeeMatch =$row[1];
											$score1 = $row[2];
											$score2 = $row[3]; 
											$idEquipe1 = $row[4];
											$idMatch = $row[6];
									
											}
											
	$reponse = $bdd->query("SELECT $php_clubs.nom, $php_matchs.id_journee , $php_matchs.buts_dom  ,$php_matchs.buts_ext, $php_matchs.id_equipe_dom,  $php_matchs.id_equipe_ext,  $php_matchs.id
							FROM $php_matchs
							INNER JOIN $php_clubs ON $php_matchs.id_equipe_ext - 90000000= $php_clubs.id
							WHERE $php_matchs.id=$j order by $php_matchs.id");
									while ($row= $reponse->fetch() )
											{ 
											
											$equipe2 = $row[0];
											$idEquipe2 = $row[5];
											}	
	}


		$resultat = $score1 - $score2;
		//echo $resultat;
		//}
		if( ( $resultat > 15 and $resultat < 25 ) or ( $resultat < -15 and $resultat > -25 ))
			{
			echo $equipe1.' ('.$idEquipe1.') - '.$equipe2.'('.$idEquipe2.') '.$score1.'-'.$score2;
		?>
		<b>
		<?php
			echo "( diff = ".$resultat.")";
				if ($resultat > 0 ) echo " --> ".$equipe1; else echo " --> ".$equipe2;
			echo "<br/>";
		?>
		</b>
		<br/>
		<?php
			}
	
	}
	
	
	}
	
  ?>

