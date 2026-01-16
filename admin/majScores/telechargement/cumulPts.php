 <?php  

//******************************************************************************
echo "****************************"."<br/>";
require ("../../../connect1/connection2.php") ;
$tabLigue = array ('ca','ab','au');
foreach($tabLigue as $ligue)
{
echo "<br />";	
$php_clmnt_cache = "php".$ligue."_clmnt_cache";
	$tabDivision = array (171,172,173,174,181,182,183,184);
	foreach($tabDivision as $division)
	{

	$reponse = $bdd->query("SELECT SUM(POINTS)  
						FROM $php_clmnt_cache
						where ID_CHAMP = $division");
						while ($row = $reponse->fetch() )
										{ 
										$sum = $row[0];
										//$penalite =$row[2];
										//$division =$row[1];
	


										echo $ligue.$division." : ".$sum;echo "<br />";
										}
	}
}

echo "****************************"."<br/>";


$ligue = "idf";
echo $ligue;echo "<br />";	
$php_clmnt_cache = "php".$ligue."_clmnt_cache";
	$tabDivision = array (171,172,181,182,191,192,201,202,211,271,272);
	foreach($tabDivision as $division)
	{
	$reponse = $bdd->query("SELECT SUM(POINTS)  
						FROM $php_clmnt_cache
						where ID_CHAMP = $division");
						while ($row = $reponse->fetch() )
										{ 
										$sum = $row[0];
										//$penalite =$row[2];
										//$division =$row[1];
	


										echo $division." : ".$sum;echo "<br />";
										}
	}

echo "****************************"."<br/>";

$tabLigue = array ('pr','br','bg','fl' );
foreach($tabLigue as $ligue)
{

//$ligue = "pr";
echo $ligue;echo "<br />";	
$php_clmnt_cache = "php".$ligue."_clmnt_cache";
	$tabDivision = array (171,181,191,201,211,221,271,9181);
	foreach($tabDivision as $division)
	{
	$reponse = $bdd->query("SELECT SUM(POINTS)  
						FROM $php_clmnt_cache
						where ID_CHAMP = $division");
						while ($row = $reponse->fetch() )
										{ 
										$sum = $row[0];
										//$penalite =$row[2];
										//$division =$row[1];
	
										if ($sum>0)
											{
											echo $division." : ".$sum;
											echo "<br />";
											}
										}
	}		
}	

echo "****************************"."<br/>";
require ("../../../connect1/connection3.php") ;

$ligue= 'f1';
echo $ligue;
echo "<br/>";
$php_clmnt_cache = "php".$ligue."_clmnt_cache";
	$tabDivision = array (141,142,143,144);
	$tabPoints = array();
	
	
	foreach($tabDivision as $division)
	{

	$reponse = $bdd->query("SELECT SUM(POINTS),id_champ 
						FROM $php_clmnt_cache
						where ID_CHAMP = $division");
						while ($row = $reponse->fetch() )
										{ 
										$tabPoints[] = $row[0];
										$tabDivision[] =$row[1];
										}
	}
	for ($i=0; $i<4; $i++) 
	{
	${"persofed".$tabDivision[$i]} = $tabPoints[$i]."<br/>";
	}
echo $persofed141;
echo $persofed142;
echo $persofed143;	
echo $persofed144;


echo "****************************"."<br/>";

$ligue= 'fed2';
echo $ligue;
echo "<br/>";	
$php_clmnt_cache = "php".$ligue."_clmnt_cache";
	$tabDivision = array (151,152,153,154,155,156,157,158);
	$tabPoints = array();
	
	foreach($tabDivision as $division)
	{

	$reponse = $bdd->query("SELECT SUM(POINTS),id_champ  
						FROM $php_clmnt_cache
						where ID_CHAMP = $division");
						while ($row = $reponse->fetch() )
										{ 
										$tabPoints[] = $row[0];
										$tabDivision[] =$row[1];
										}
	}
for ($i=0; $i<8; $i++) 
	{
	
	${"persofed".$tabDivision[$i]} = $tabDivision[$i].'-'.$tabPoints[$i]."<br/>";
	}
echo $persofed151;
echo $persofed152;
echo $persofed153;	
echo $persofed154;
echo $persofed155;
echo $persofed156;
echo $persofed157;	
echo $persofed158;	
	

echo "****************************"."<br/>";

$tabLigue = array ('fed3NE','fed3GS');

foreach($tabLigue as $ligue)
{	
echo $ligue;
echo "<br/>";
$php_clmnt_cache = "php".$ligue."_clmnt_cache";
	$tabDivision = array (161,162,163,164,165,166,167);
	foreach($tabDivision as $division)
	{

	$reponse = $bdd->query("SELECT SUM(POINTS), id_champ  
						FROM $php_clmnt_cache
						where ID_CHAMP = $division");
						while ($row = $reponse->fetch() )
										{ 
										$sum = $row[0];
										//$penalite =$row[2];
										//$division =$row[1];
	


										echo $division." : ".$sum;echo "<br />";
										}
	}
	echo "****************************"."<br/>";
}


echo "EQUIPES RESERVES";echo "<br/>";
echo "****************************"."<br/>";

$ligue= 'fed2';
echo $ligue;
echo "<br/>";	
$php_clmnt_cache = "php".$ligue."_clmnt_cache";
	$tabDivision = array (251,252,253,254,255,256,257,258);
	foreach($tabDivision as $division)
	{

	$reponse = $bdd->query("SELECT SUM(POINTS)  
						FROM $php_clmnt_cache
						where ID_CHAMP = $division");
						while ($row = $reponse->fetch() )
										{ 
										$sum = $row[0];
										//$penalite =$row[2];
										//$division =$row[1];
	


										echo $division." : ".$sum;echo "<br />";
										}
	}


echo "****************************"."<br/>";

$tabLigue = array ('fed3NE','fed3GS');

foreach($tabLigue as $ligue)
{	
echo $ligue;
echo "<br/>";
$php_clmnt_cache = "php".$ligue."_clmnt_cache";
	$tabDivision = array (261,262,263,264,265,266,267);
	foreach($tabDivision as $division)
	{

	$reponse = $bdd->query("SELECT SUM(POINTS)  
						FROM $php_clmnt_cache
						where ID_CHAMP = $division");
						while ($row = $reponse->fetch() )
										{ 
										$sum = $row[0];
										//$penalite =$row[2];
										//$division =$row[1];
	


										echo $division." : ".$sum;echo "<br />";
										}
	}

echo "****************************"."<br/>";
}

echo "****************************"."<br/>";

//******************************************************************************

//Permet la récupération de tous les N° des poules de la ligue
/*
$tabDivision = array();
$reponse = $bdd->query("SELECT id_division 
						FROM $php_championnats
						WHERE id_saison ='2010'");
						while ($row = $reponse->fetch() )
										{ 
										$tabDivision[] = $row[0]."0".$journee;
	


echo  $tabDivision."<br/>";
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
*/	
  ?>

