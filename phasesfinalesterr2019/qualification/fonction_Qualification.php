<?php


function classementParPoints5poules($comite, $division)

{
  if (isset ($poule1)) $poule1 = $poule1; $poule1 = "Variable poule1 non déclarée";
  if (isset ($poule2)) $poule2 = $poule2; $poule2 = "Variable poule1 non déclarée";
  if (isset ($poule3)) $poule3 = $poule3; $poule3 = "Variable poule1 non déclarée";
  if (isset ($poule4)) $poule4 = $poule4; $poule4 = "Variable poule1 non déclarée";
  if (isset ($poule5)) $poule5 = $poule5; $poule5 = "Variable poule1 non déclarée";
		
	$comite_clmnt_cache ="php".''.$comite.''."_clmnt_cache";		


	global $club1;global $club2;global $club3;global $club4;global $club5;
	global $club6;global $club7;global $club8;global $club9;global $club10;
	global $club11;global $club12;global $club13;global $club14;global $club15;
	global $club16;global $club17;global $club18;global $club19;global $club20;
	global $club21;
	global $club22;global $club23;global $club24;global $club25;global $club26;
	global $club27;global $club28;global $club29;global $club30;global $club31;
	global $club32;	global $club33;	global $club34;	global $club35;	
	
	
		if ($division == 170)
		{
			$poule1='171';
			$poule2='172';
			$poule3='173';
			$poule4='174';
			$poule5='175';
		}
	
	
	elseif ($division == 180)
		{
			$poule1='181';
			$poule2='182';
			$poule3='183';
			$poule4='184';
			$poule5='185';
		}
	
	
	elseif ($division == 190)
		{
			$poule1='191';
			$poule2='192';
			$poule3='193';
			$poule4='194';
			$poule5='195';
		}
	
	
	elseif ($division == 200)
		{
			$poule1='201';
			$poule2='202';
			$poule3='203';
			$poule4='204';
			$poule5='205';
		}
	elseif ($division == 210)
		{
			$poule1='211';
			$poule2='212';
			$poule3='213';
			$poule4='214';
			$poule5='215';
		}
	
	
	elseif ($division == 220)
		{
			$poule1='221';
			$poule2='222';
			$poule3='223';
			$poule4='224';
			$poule5='225';
		}
	
	
	elseif ($division == 270)
		{
			$poule1='271';
			$poule2='272';
			$poule3='273';
			$poule4='274';
			$poule5='275';
		}
	
	
	elseif ($division == 9180)
		{
			$poule1='9181';
			$poule2='9182';
			$poule3='9183';
			$poule4='9184';
			$poule5='9185';
		}
	elseif ($division == 9190)
		{
			$poule1='9191';
			$poule2='9192';
			$poule3='9193';
			$poule4='9194';
		}
	elseif ($division == 9200)
		{
			$poule1='9201';
			$poule2='9202';
			$poule3='9203';
			$poule4='9204';
			$poule5='9205';

		}
	
require ("../../connect1/connexion6.php");
$tabEquipe = array();
$tabPoints =array();
$tabNbreJoue =array();
$requete = $bdd-> query( "	select NOM, POINTS, JOUES
						from $comite_clmnt_cache
						where ID_CHAMP=$poule1
						ORDER BY POINTS desc limit 0,7");

					//$result = $requete->mysql_query($requete) ;
					while ($row = $requete->fetch_array())
							{
							$tabEquipe1[] = $row[0];
					 		$tabPoints1[] = $row[1];
							$tabNbreJoue1[] = $row[2];
							}

if ($poule1 == 171)
	{
	$pointsPere10=(($tabPoints1[0]/$tabNbreJoue1[0])*($tabNbreJoue1[0]+2));
	$pointsPere11=(($tabPoints1[1]/$tabNbreJoue1[1])*($tabNbreJoue1[1]+2));
	$pointsPere12=(($tabPoints1[2]/$tabNbreJoue1[2])*($tabNbreJoue1[2]+2));
	$pointsPere13=(($tabPoints1[3]/$tabNbreJoue1[3])*($tabNbreJoue1[3]+2));
	$pointsPere14=(($tabPoints1[4]/$tabNbreJoue1[4])*($tabNbreJoue1[4]+2));
	$pointsPere15=(($tabPoints1[5]/$tabNbreJoue1[5])*($tabNbreJoue1[5]+2));
	$pointsPere16=(($tabPoints1[6]/$tabNbreJoue1[6])*($tabNbreJoue1[6]+2));


	$A1P1 = round($pointsPere10).' '.$tabEquipe1[0];	
	$A2P1 = round($pointsPere11).' '.$tabEquipe1[1];	
	$A3P1 = round($pointsPere12).' '.$tabEquipe1[2];	
	$A4P1 = round($pointsPere13).' '.$tabEquipe1[3]; 	
	$A5P1 = round($pointsPere14).' '.$tabEquipe1[4]; 
	$A6P1 = round($pointsPere15).' '.$tabEquipe1[5]; 	
	$A7P1 = round($pointsPere16).' '.$tabEquipe1[6];
	
	
	
	
/*	
	$A1P1 = round($pointsPere10).' '.$tabEquipe1[0];	
	$A2P1 = round($pointsPere11).' '.$tabEquipe1[1];	
	$A3P1 = round($pointsPere12).' '.$tabEquipe1[2];	
	$A4P1 = round($pointsPere13).' '.$tabEquipe1[3]; 	
	$A5P1 = round($pointsPere14).' '.$tabEquipe1[4]; 
	$A6P1 = round($pointsPere15).' '.$tabEquipe1[5]; 	
	$A7P1 = round($pointsPere16).' '.$tabEquipe1[6]; 
*/
	}
elseif ($poule1 == 271)
	{
	$pointsPere10=(($tabPoints1[0]/$tabNbreJoue1[0])*($tabNbreJoue1[0]+4));
	$pointsPere11=(($tabPoints1[1]/$tabNbreJoue1[1])*($tabNbreJoue1[1]+4));
	$pointsPere12=(($tabPoints1[2]/$tabNbreJoue1[2])*($tabNbreJoue1[2]+4));
	$pointsPere13=(($tabPoints1[3]/$tabNbreJoue1[3])*($tabNbreJoue1[3]+4));
	$pointsPere14=(($tabPoints1[4]/$tabNbreJoue1[4])*($tabNbreJoue1[4]+4));
	$pointsPere15=(($tabPoints1[5]/$tabNbreJoue1[5])*($tabNbreJoue1[5]+4));
	$pointsPere16=(($tabPoints1[6]/$tabNbreJoue1[6])*($tabNbreJoue1[6]+4));


	$A1P1 = round($pointsPere10).' '.$tabEquipe1[0];	
	$A2P1 = round($pointsPere11).' '.$tabEquipe1[1];	
	$A3P1 = round($pointsPere12).' '.$tabEquipe1[2];	
	$A4P1 = round($pointsPere13).' '.$tabEquipe1[3]; 	
	$A5P1 = round($pointsPere14).' '.$tabEquipe1[4]; 
	$A6P1 = round($pointsPere15).' '.$tabEquipe1[5]; 	
	$A7P1 = round($pointsPere16).' '.$tabEquipe1[6]; 



	}

 
/*
if (isset ($tabEquipe2[0])) $tabEquipes1[0] = $tabEquipes1[0]; 
if (isset ($tabPoints2[0])) $clubA1001 = $tabPoints2[0];
if (isset ($tabEquipe2[1])) $clubA1001 = $tabEquipes2[1]; 
if (isset ($tabPoints2[1])) $clubA1001 = $tabPoints2[1];
if (isset ($tabEquipe2[2])) $clubA1001 = $tabEquipes2[2]; 
if (isset ($tabPoints2[2])) $clubA1001 = $tabPoints2[2];
if (isset ($tabEquipe2[3])) $clubA1001 = $tabEquipes2[3]; 
if (isset ($tabPoints2[3])) $clubA1001 = $tabPoints2[3];
*/
//****************************************************
// Récupération des 7 premiers de la poule 1(172)
//             Nbre de pts + nom du club
//***************************************************
$tabEquipe = array();
$tabPoints =array();
$tabNbreJoue =array();
$requete = $bdd->query("	select NOM, POINTS, JOUES
						from $comite_clmnt_cache
						where ID_CHAMP=$poule2
						ORDER BY POINTS desc limit 0,7");
			
				//	$result = mysql_query($requete) ;
					while ($row = $requete->fetch_array())
							{
							$tabEquipe2[] = $row[0];
					 		$tabPoints2[] = $row[1];	
							$tabNbreJoue2[] = $row[2];
							}	
	if ($poule2==172)
	{
		$pointsPere20=(($tabPoints2[0]/$tabNbreJoue2[0])*($tabNbreJoue2[0]+2));
		$pointsPere21=(($tabPoints2[1]/$tabNbreJoue2[1])*($tabNbreJoue2[1]+2));
		$pointsPere22=(($tabPoints2[2]/$tabNbreJoue2[2])*($tabNbreJoue2[2]+2));
		$pointsPere23=(($tabPoints2[3]/$tabNbreJoue2[3])*($tabNbreJoue2[3]+2));
		$pointsPere24=(($tabPoints2[4]/$tabNbreJoue2[4])*($tabNbreJoue2[4]+2));
		$pointsPere25=(($tabPoints2[5]/$tabNbreJoue2[5])*($tabNbreJoue2[5]+2));
		$pointsPere26=(($tabPoints2[6]/$tabNbreJoue2[6])*($tabNbreJoue2[6]+2));


		$A1P2 = round($pointsPere20).' '.$tabEquipe2[0];				
		$A2P2 = round($pointsPere21).' '.$tabEquipe2[1];	
		$A3P2 = round($pointsPere22).' '.$tabEquipe2[2]; 
		$A4P2 = round($pointsPere23).' '.$tabEquipe2[3];
		$A5P2 = round($pointsPere24).' '.$tabEquipe2[4]; 
		$A6P2 = round($pointsPere25).' '.$tabEquipe2[5]; 	
		$A7P2 = round($pointsPere26).' '.$tabEquipe2[6];
	}
	elseif ($poule2==272)
	{
		$pointsPere20=(($tabPoints2[0]/$tabNbreJoue2[0])*($tabNbreJoue2[0]+4));
		$pointsPere21=(($tabPoints2[1]/$tabNbreJoue2[1])*($tabNbreJoue2[1]+4));
		$pointsPere22=(($tabPoints2[2]/$tabNbreJoue2[2])*($tabNbreJoue2[2]+4));
		$pointsPere23=(($tabPoints2[3]/$tabNbreJoue2[3])*($tabNbreJoue2[3]+4));
		$pointsPere24=(($tabPoints2[4]/$tabNbreJoue2[4])*($tabNbreJoue2[4]+4));
		$pointsPere25=(($tabPoints2[5]/$tabNbreJoue2[5])*($tabNbreJoue2[5]+4));
		$pointsPere26=(($tabPoints2[6]/$tabNbreJoue2[6])*($tabNbreJoue2[6]+4));


		$A1P2 = round($pointsPere20).' '.$tabEquipe2[0];				
		$A2P2 = round($pointsPere21).' '.$tabEquipe2[1];	
		$A3P2 = round($pointsPere22).' '.$tabEquipe2[2]; 
		$A4P2 = round($pointsPere23).' '.$tabEquipe2[3];
		$A5P2 = round($pointsPere24).' '.$tabEquipe2[4]; 
		$A6P2 = round($pointsPere25).' '.$tabEquipe2[5]; 	
		$A7P2 = round($pointsPere26).' '.$tabEquipe2[6];	
	}

//****************************************************
// Récupération des 4 premiers de la poule 1(173)
//             Nbre de pts + nom du club
//***************************************************
/*
if (isset ($tabEquipe3[0])) $clubA1001 = $tabEquipes3[0]; 
if (isset ($tabPoints3[0])) $clubA1001 = $tabPoints3[0];
if (isset ($tabEquipe3[1])) $clubA1001 = $tabEquipes3[1]; 
if (isset ($tabPoints3[1])) $clubA1001 = $tabPoints3[1];
if (isset ($tabEquipe3[2])) $clubA1001 = $tabEquipes3[2]; 
if (isset ($tabPoints3[2])) $clubA1001 = $tabPoints3[2];
if (isset ($tabEquipe3[3])) $clubA1001 = $tabEquipes3[3]; 
if (isset ($tabPoints3[3])) $clubA1001 = $tabPoints3[3];
*/
//require ("../../connect/connexion2.php");
$tabEquipe = array();
$tabPoints =array();
$requete = $bdd->query("	select NOM, POINTS
						from $comite_clmnt_cache
						where ID_CHAMP=$poule3
						ORDER BY POINTS desc limit 0,7");
			
		//$res= $conn ->query ($requete);
		//while ($data = mysqli_fetch_array ($res))
					//$result = mysql_query($requete) ;
					while ($row = $requete->fetch_array())
							{
							$tabEquipe3[] = $row['NOM'];
					 		$tabPoints3[] = $row['POINTS'];	
							}


$A1P3 = $tabPoints3[0].' '.$tabEquipe3[0];			
$A2P3 = $tabPoints3[1].' '.$tabEquipe3[1];
$A3P3=  $tabPoints3[2].' '.$tabEquipe3[2];
$A4P3 = $tabPoints3[3].' '.$tabEquipe3[3]; 
$A5P3 = $tabPoints3[4].' '.$tabEquipe3[4]; 
$A6P3 = $tabPoints3[5].' '.$tabEquipe3[5]; 	
$A7P3 = $tabPoints3[6].' '.$tabEquipe3[6];


//****************************************************
// Récupération des 4 premiers de la poule 1(174)
//             Nbre de pts + nom du club
//***************************************************
/*
if (isset ($tabEquipe4[0])) $clubA1001 = $tabEquipes4[0]; 
if (isset ($tabPoints4[0])) $clubA1001 = $tabPoints4[0];
if (isset ($tabEquipe4[1])) $clubA1001 = $tabEquipes4[1]; 
if (isset ($tabPoints4[1])) $clubA1001 = $tabPoints4[1];
if (isset ($tabEquipe4[2])) $clubA1001 = $tabEquipes4[2]; 
if (isset ($tabPoints4[2])) $clubA1001 = $tabPoints4[2];
if (isset ($tabEquipe4[3])) $clubA1001 = $tabEquipes4[3]; 
if (isset ($tabPoints4[3])) $clubA1001 = $tabPoints4[3];

$conn = mysqli_connect("127.0.0.1", "root", "", "onepip-france-db2");
*/

$tabEquipe = array();
$tabPoints =array();
$requete =$bdd->query( "	select NOM, POINTS
						from $comite_clmnt_cache
						where ID_CHAMP=$poule4
						ORDER BY POINTS desc limit 0,7");
			
					$result = mysql_query($requete) ;
					while ($row = $requte->fetch_array())
							{
							$tabEquipe4[] = $row['NOM'];
					 		$tabPoints4[] = $row['POINTS'];	
							}


$A1P4 = $tabPoints4[0].' '.$tabEquipe4[0];					
$A2P4 = $tabPoints4[1].' '.$tabEquipe4[1];
$A3P4=  $tabPoints4[2].' '.$tabEquipe4[2];	
$A4P4 = $tabPoints4[3].' '.$tabEquipe4[3];
$A5P4 = $tabPoints4[4].' '.$tabEquipe4[4]; 
$A6P4 = $tabPoints4[5].' '.$tabEquipe4[5]; 	
$A7P4 = $tabPoints4[6].' '.$tabEquipe4[6]; 
 

/*
if (isset ($tabEquipe5[0])) $clubA1001 = $tabEquipes5[0]; 
if (isset ($tabPoints5[0])) $clubA1001 = $tabPoints5[0];
if (isset ($tabEquipe5[1])) $clubA1001 = $tabEquipes5[1]; 
if (isset ($tabPoints5[1])) $clubA1001 = $tabPoints5[1];
if (isset ($tabEquipe5[2])) $clubA1001 = $tabEquipes5[2]; 
if (isset ($tabPoints5[2])) $clubA1001 = $tabPoints5[2];
if (isset ($tabEquipe5[3])) $clubA1001 = $tabEquipes5[3]; 
if (isset ($tabPoints5[3])) $clubA1001 = $tabPoints5[3];

$conn = mysqli_connect("127.0.0.1", "root", "", "onepip-france-db2");
*/
$tabEquipe = array();
$tabPoints =array();
$requete = $bdd->query("	select NOM, POINTS
						from $comite_clmnt_cache
						where ID_CHAMP=$poule5
						ORDER BY POINTS desc limit 0,7");
			
		//$result = mysql_query($requete) ;
					while ($row = $requete->fetch_array())
							{
							$tabEquipe5[] = $row['NOM'];
					 		$tabPoints5[] = $row['POINTS'];	
							}

$A1P5 = $tabPoints5[0].' '.$tabEquipe5[0];					
$A2P5 = $tabPoints5[1].' '.$tabEquipe5[1];
$A3P5=  $tabPoints5[2].' '.$tabEquipe5[2];
$A4P5 = $tabPoints5[3].' '.$tabEquipe5[3];
$A5P5 = $tabPoints5[4].' '.$tabEquipe5[4]; 
$A6P5 = $tabPoints5[5].' '.$tabEquipe5[5]; 	
$A7P5 = $tabPoints5[6].' '.$tabEquipe5[6];
 
//$monArray= array($PTS2P1 , $PTS2P2, $PTS2P3 , $PTS2P4, $PTS2P5);
//$monArray= array($A2P1=>$PTS2P1 , $A2P2=>$PTS2P2, $A2P3=>$PTS2P3 , $A2P4=>$PTS2P4, $A2P5=>$PTS2P5);


//Création d'un tableau avec tous les Premiers de poule
$monArray= array($A1P1 , $A1P2, $A1P3 , $A1P4, $A1P5);
//print_r($monArray);

//echo '<br>';
// tri du tableau
arsort($monArray);
//print_r($monArray);
//echo '<br>';

//Récupération des éléments du tableau un à un
//dans un tableau chaque fois différents

$sousTableau1=array_slice($monArray,0,1);
$sousTableau2=array_slice($monArray,1,1);
$sousTableau3=array_slice($monArray,2,1);
$sousTableau4=array_slice($monArray,3,1);
$sousTableau5=array_slice($monArray,4,1); 



$club1 = substr($sousTableau1[0],2,18).' '."(".''.substr($sousTableau1[0],0,2).''.")";
$club2 = substr($sousTableau2[0],2,18).' '."(".''.substr($sousTableau2[0],0,2).''.")";
$club3 = substr($sousTableau3[0],2,18).' '."(".''.substr($sousTableau3[0],0,2).''.")";
$club4 = substr($sousTableau4[0],2,18).' '."(".''.substr($sousTableau4[0],0,2).''.")";
$club5 = substr($sousTableau5[0],2,18).' '."(".''.substr($sousTableau5[0],0,2).''.")";




//Création d'un tableau avec tous les second de poule
$monArray= array($A2P1 , $A2P2, $A2P3 , $A2P4 , $A2P5);
//print_r($monArray);


// tri du tableau
arsort($monArray);
//print_r($monArray);
//echo '<br>';

//Récupération des éléments du tableau un à un
//dabs un tableau chaque fois différents

$sousTableau6=array_slice($monArray,0,1);
$sousTableau7=array_slice($monArray,1,1);
$sousTableau8=array_slice($monArray,2,1);
$sousTableau9=array_slice($monArray,3,1);
$sousTableau10=array_slice($monArray,4,1); 


$club6 = substr($sousTableau6[0],2,20).' '."(".''.substr($sousTableau6[0],0,2).''.")";
$club7 = substr($sousTableau7[0],2,20).' '."(".''.substr($sousTableau7[0],0,2).''.")";
$club8 = substr($sousTableau8[0],2,20).' '."(".''.substr($sousTableau8[0],0,2).''.")";
$club9 = substr($sousTableau9[0],2,20).' '."(".''.substr($sousTableau9[0],0,2).''.")";
$club10 = substr($sousTableau10[0],2,20).' '."(".''.substr($sousTableau10[0],0,2).''.")";




//Création d'un tableau avec tous les troisieme de poule
$monArray= array($A3P1 , $A3P2, $A3P3 , $A3P4 , $A3P5);
//print_r($monArray);


// tri du tableau
arsort($monArray);
//print_r($monArray);
//echo '<br>';

//Récupération des éléments du tableau un à un
//dabs un tableau chaque fois différents

$sousTableau11= array_slice($monArray,0,1);
$sousTableau12= array_slice($monArray,1,1);
$sousTableau13= array_slice($monArray,2,1);
$sousTableau14= array_slice($monArray,3,1);
$sousTableau15= array_slice($monArray,4,1); 



$club11 = substr($sousTableau11[0],2,20).' '."(".''.substr($sousTableau11[0],0,2).''.")";
$club12 = substr($sousTableau12[0],2,20).' '."(".''.substr($sousTableau12[0],0,2).''.")";
$club13 = substr($sousTableau13[0],2,20).' '."(".''.substr($sousTableau13[0],0,2).''.")";
$club14 = substr($sousTableau14[0],2,20).' '."(".''.substr($sousTableau14[0],0,2).''.")";
$club15 = substr($sousTableau15[0],2,20).' '."(".''.substr($sousTableau15[0],0,2).''.")";




//Création d'un tableau avec tous les quatrième de poule
$monArray= array($A4P1 , $A4P2, $A4P3 , $A4P4 , $A4P5);
//print_r($monArray);


// tri du tableau
arsort($monArray);
//print_r($monArray);
//echo '<br>';

//Récupération des éléments du tableau un à un
//dabs un tableau chaque fois différents

$sousTableau16=array_slice($monArray,0,1);
$sousTableau17=array_slice($monArray,1,1);
$sousTableau18=array_slice($monArray,2,1);
$sousTableau19=array_slice($monArray,3,1);
$sousTableau20=array_slice($monArray,4,1); 




$club16 = substr($sousTableau16[0],2,20).' '."(".''.substr($sousTableau16[0],0,2).''.")";
$club17 = substr($sousTableau17[0],2,20).' '."(".''.substr($sousTableau17[0],0,2).''.")";
$club18 = substr($sousTableau18[0],2,20).' '."(".''.substr($sousTableau18[0],0,2).''.")";
$club19 = substr($sousTableau19[0],2,20).' '."(".''.substr($sousTableau19[0],0,2).''.")";
$club20 = substr($sousTableau20[0],2,20).' '."(".''.substr($sousTableau20[0],0,2).''.")";





//Création d'un tableau avec tous les 5ME de poule
$monArray= array($A5P1 , $A5P2, $A5P3 , $A5P4 , $A5P5);
//print_r($monArray);


// tri du tableau
arsort($monArray);
//print_r($monArray);
//echo '<br>';

//Récupération des éléments du tableau un à un
//dabs un tableau chaque fois différents

$sousTableau21=array_slice($monArray,0,1);
$sousTableau22=array_slice($monArray,1,1);
$sousTableau23=array_slice($monArray,2,1);
$sousTableau24=array_slice($monArray,3,1);
$sousTableau25=array_slice($monArray,4,1); 




$club21 = substr($sousTableau21[0],2,20).' '."(".''.substr($sousTableau21[0],0,2).''.")";
$club22 = substr($sousTableau22[0],2,20).' '."(".''.substr($sousTableau22[0],0,2).''.")";
$club23 = substr($sousTableau23[0],2,20).' '."(".''.substr($sousTableau23[0],0,2).''.")";
$club24 = substr($sousTableau24[0],2,20).' '."(".''.substr($sousTableau24[0],0,2).''.")";
$club25 = substr($sousTableau25[0],2,20).' '."(".''.substr($sousTableau25[0],0,2).''.")";


//Création d'un tableau avec tous les 6ME de poule


	if ($division ==270)
	{
		if ($A6P1 > $A6P2)
		{
			$club29 = $A6P1;
			$club30 = $A6P2;
			$club30 = substr($club30,2,20).' '."(".''.substr($club30,0,2).''.")";
		}
		else
		{
			$club29 = $A6P2;
			$club30 = $A6P1;
			$club30 = substr($club30,2,20).' '."(".''.substr($club30,0,2).''.")";
		}



		$monArray= array( $club29, $A6P3 , $A6P4 , $A6P5);
		//print_r($monArray);


		// tri du tableau
		arsort($monArray);
		//print_r($monArray);
		//echo '<br>';

		//Récupération des éléments du tableau un à un
		//dabs un tableau chaque fois différents

		$sousTableau26=array_slice($monArray,0,1);
		$sousTableau27=array_slice($monArray,1,1);
		$sousTableau28=array_slice($monArray,2,1);
		$sousTableau29=array_slice($monArray,3,1);
		//$sousTableau30=array_slice($monArray,4,1); 




		$club26 = substr($sousTableau26[0],2,20).' '."(".''.substr($sousTableau26[0],0,2).''.")";
		$club27 = substr($sousTableau27[0],2,20).' '."(".''.substr($sousTableau27[0],0,2).''.")";
		$club28 = substr($sousTableau28[0],2,20).' '."(".''.substr($sousTableau28[0],0,2).''.")";
		$club29 = substr($sousTableau29[0],2,20).' '."(".''.substr($sousTableau29[0],0,2).''.")";
		/*
			if ($A6P1 > $A6P2)
			{
			$club29 = substr($A6P1,2,20).' '."(".''.substr($A6P1,0,2).''.")";
			$club30 = substr($A6P2,2,20).' '."(".''.substr($A6P2,0,2).''.")";
			}
			else
			{
			$club29 = substr($A6P2,2,20).' '."(".''.substr($A6P2,0,2).''.")";
			$club30 = substr($A6P1,2,20).' '."(".''.substr($A6P1,0,2).''.")";
			}
		*/	
	}
	else
	{

		$monArray= array($A6P1 , $A6P2, $A6P3 , $A6P4 , $A6P5);
		//print_r($monArray);


		// tri du tableau
		arsort($monArray);
		//print_r($monArray);
		//echo '<br>';

		//Récupération des éléments du tableau un à un
		//dabs un tableau chaque fois différents

		$sousTableau26=array_slice($monArray,0,1);
		$sousTableau27=array_slice($monArray,1,1);
		$sousTableau28=array_slice($monArray,2,1);
		$sousTableau29=array_slice($monArray,3,1);
		$sousTableau30=array_slice($monArray,4,1); 




		$club26 = substr($sousTableau26[0],2,20).' '."(".''.substr($sousTableau26[0],0,2).''.")";
		$club27 = substr($sousTableau27[0],2,20).' '."(".''.substr($sousTableau27[0],0,2).''.")";
		$club28 = substr($sousTableau28[0],2,20).' '."(".''.substr($sousTableau28[0],0,2).''.")";
		$club29 = substr($sousTableau29[0],2,20).' '."(".''.substr($sousTableau29[0],0,2).''.")";
		$club30 = substr($sousTableau30[0],2,20).' '."(".''.substr($sousTableau30[0],0,2).''.")";
	}


	//Création d'un tableau avec tous les 7ME de poule
	$monArray= array( $A7P3 , $A7P4 , $A7P5);
	//print_r($monArray);


	// tri du tableau
	arsort($monArray);
	//print_r($monArray);
	//echo '<br>';

	//Récupération des éléments du tableau un à un
	//dabs un tableau chaque fois différents

	$sousTableau31=array_slice($monArray,0,1);
	$sousTableau32=array_slice($monArray,1,1);
	$sousTableau33=array_slice($monArray,2,1);
	$sousTableau34=array_slice($monArray,3,1);
	$sousTableau35=array_slice($monArray,4,1); 



	if ($division == 270)
		{
			$monArray= array(  $A7P3 , $A7P4 , $A7P5);
			//$A7P1
			//$A7P2
			//print_r($monArray);


			// tri du tableau
			arsort($monArray);
			//print_r($monArray);
			//echo '<br>';

			//Récupération des éléments du tableau un à un
			//dabs un tableau chaque fois différents

		


			$sousTableau31=array_slice($monArray,0,1);
			$sousTableau32=array_slice($monArray,1,1);
			$sousTableau33=array_slice($monArray,2,1);
			//$sousTableau34=array_slice($monArray,3,1);
			//$sousTableau35=array_slice($monArray,4,1); 

	 

			$club31 = substr($sousTableau31[0],2,20).' '."(".''.substr($sousTableau31[0],0,2).''.")";
			$club32 = substr($sousTableau32[0],2,20).' '."(".''.substr($sousTableau32[0],0,2).''.")";
			$club33 = substr($sousTableau33[0],2,20).' '."(".''.substr($sousTableau33[0],0,2).''.")";
			//$club34 = substr($sousTableau34[0],2,20).' '."(".''.substr($sousTableau34[0],0,2).''.")";
			//$club35 = substr($sousTableau35[0],2,20).' '."(".''.substr($sousTableau35[0],0,2).''.")";
			$club34 = substr($A7P1,2,20).' '."(".''.substr($A7P1,0,2).''.")";
			$club35 = substr($A7P2,2,20).' '."(".''.substr($A7P2,0,2).''.")";

		}
	else
		{
	
	
			$monArray= array(  $A7P1, $A7P2, $A7P3 , $A7P4 , $A7P5);

			arsort($monArray);

			$sousTableau31=array_slice($monArray,0,1);
			$sousTableau32=array_slice($monArray,1,1);
			$sousTableau33=array_slice($monArray,2,1);
			$sousTableau34=array_slice($monArray,3,1);
			$sousTableau35=array_slice($monArray,4,1); 

		

			$club31 = substr($sousTableau31[0],2,20).' '."(".''.substr($sousTableau31[0],0,2).''.")";
			$club32 = substr($sousTableau32[0],2,20).' '."(".''.substr($sousTableau32[0],0,2).''.")";
			$club33 = substr($sousTableau33[0],2,20).' '."(".''.substr($sousTableau33[0],0,2).''.")";
			$club34 = substr($sousTableau34[0],2,20).' '."(".''.substr($sousTableau34[0],0,2).''.")";
			$club35 = substr($sousTableau35[0],2,20).' '."(".''.substr($sousTableau35[0],0,2).''.")";
		}


}
?>
<?php

function classementParPoints4poules($comite, $division)

{
require ("../../connect/connexion6.php");	
$comite_clmnt_cache ="php".''.$comite.''."_clmnt_cache";	
	
	
global $club1;global $club2;global $club3;global $club4;global $club5;
global $club6;global $club7;global $club8;global $club9;global $club10;
global $club11;global $club12;global $club13;global $club14;global $club15;
global $club16;global $club17;global $club18;global $club19;global $club20;global $club21;
global $club22;global $club23;global $club24;global $club25;global $club26;
global $club27;global $club28;global $club29;global $club30;global $club31;
global $club32;	global $club33;	global $club34;	global $club35;	
	
	
	if ($division == 170)
		{
		$poule1='171';
		$poule2='172';
		$poule3='173';
		$poule4='174';
		}
	
	
	elseif ($division == 180)
		{
		$poule1='181';
		$poule2='182';
		$poule3='183';
		$poule4='184';
		}

	elseif ($division == 190)
		{
		$poule1='191';
		$poule2='192';
		$poule3='193';
		$poule4='194';
		}
	
	
	elseif ($division == 200)
		{
		$poule1='201';
		$poule2='202';
		$poule3='203';
		$poule4='204';
		}
	
	elseif ($division == 210)
		{
		$poule1='211';
		$poule2='212';
		$poule3='213';
		$poule4='214';
		}
	
	
	elseif ($division == 220)
		{
		$poule1='221';
		$poule2='222';
		$poule3='223';
		$poule4='224';
		}

	elseif ($division == 270)
		{
		$poule1='271';
		$poule2='272';
		$poule3='273';
		$poule4='274';
		
		}
	
	
	elseif ($division == 9180)
		{
		$poule1='9181';
		$poule2='9182';
		$poule3='9183';
		$poule4='9184';
		}
	elseif ($division == 9190)
		{
		$poule1='9191';
		$poule2='9192';
		$poule3='9193';
		$poule4='9194';
		}
	elseif ($division == 9200)
		{
		$poule1='9201';
		$poule2='9202';
		$poule3='9203';
		$poule4='9204';
		}
		
	
	
require ("../../connect/connexion6.php");
$tabEquipe = array();
$tabPoints =array();
$tabJoue=array();


	$requete = $bdd-query("	select NOM, POINTS, JOUES
						from $comite_clmnt_cache
						where ID_CHAMP=$poule1
						ORDER BY POINTS desc limit 0,7");

					//$result = mysql_query($requete) ;
					while ($row = $requte->fetch_array())
							{
							$tabEquipe1[] = $row[0];
					 		$tabPoints1[] = $row[1];	
							$tabJoue1[]= $row[2];
							}
	
	$A1P1 = $tabPoints1[0].' '.$tabEquipe1[0]; 				
	$A2P1 = $tabPoints1[1].' '.$tabEquipe1[1];	
	$A3P1 = $tabPoints1[2].' '.$tabEquipe1[2];	
	$A4P1 = $tabPoints1[3].' '.$tabEquipe1[3]; 	
	$A5P1 = $tabPoints1[4].' '.$tabEquipe1[4]; 
	$A6P1 = $tabPoints1[5].' '.$tabEquipe1[5]; 	
	$A7P1 = $tabPoints1[6].' '.$tabEquipe1[6]; 
	

 
/*
if (isset ($tabEquipe2[0])) $tabEquipes1[0] = $tabEquipes1[0]; 
if (isset ($tabPoints2[0])) $clubA1001 = $tabPoints2[0];
if (isset ($tabEquipe2[1])) $clubA1001 = $tabEquipes2[1]; 
if (isset ($tabPoints2[1])) $clubA1001 = $tabPoints2[1];
if (isset ($tabEquipe2[2])) $clubA1001 = $tabEquipes2[2]; 
if (isset ($tabPoints2[2])) $clubA1001 = $tabPoints2[2];
if (isset ($tabEquipe2[3])) $clubA1001 = $tabEquipes2[3]; 
if (isset ($tabPoints2[3])) $clubA1001 = $tabPoints2[3];
*/
//****************************************************
// Récupération des 7 premiers de la poule 1(172)
//             Nbre de pts + nom du club
//***************************************************
$tabEquipe = array();
$tabPoints =array();
$tabNbreJoue=array();
$requete = $bdd->query( "	select NOM, POINTS, JOUES
						from $comite_clmnt_cache
						where ID_CHAMP=$poule2
						ORDER BY POINTS desc limit 0,7");
			
					//$result = mysql_query($requete) ;
					while ($row = $requete->fetch_array())
							{
							$tabEquipe2[] = $row[0];
					 		$tabPoints2[] = $row[1];	
							$tabNbreJoue2[]= $row[2];
							}	

if ($poule2 == 182)
	//poule composée de 8 equipes contre 10 pour les autres poules
	{
	 $pointsPere20=(($tabPoints2[0]/$tabNbreJoue2[0])*($tabNbreJoue2[0]+4));
	 $pointsPere21=(($tabPoints2[1]/$tabNbreJoue2[1])*($tabNbreJoue2[1]+4));
	 $pointsPere22=(($tabPoints2[2]/$tabNbreJoue2[2])*($tabNbreJoue2[2]+4));
	 $pointsPere23=(($tabPoints2[3]/$tabNbreJoue2[3])*($tabNbreJoue2[3]+4));
	 $pointsPere24=(($tabPoints2[4]/$tabNbreJoue2[4])*($tabNbreJoue2[4]+4));
	 $pointsPere25=(($tabPoints2[5]/$tabNbreJoue2[5])*($tabNbreJoue2[5]+4));
	 //$pointsPere26=(($tabPoints2[6]/$tabNbreJoue2[6])*($tabNbreJoue2[6]+2));


	 //echo $pointsPere0;echo "<br />";
	 //echo $pointsPere1;echo "<br />";
	 //echo $pointsPere2;echo "<br />";
	 //echo $pointsPere3;echo "<br />";


	 $A1P2 = round($pointsPere20).' '.$tabEquipe2[0];	
	 $A2P2 = round($pointsPere22).' '.$tabEquipe2[1];	
	 $A3P2 = round($pointsPere22).' '.$tabEquipe2[2];	
	 $A4P2 = round($pointsPere23).' '.$tabEquipe2[3]; 	
	 $A5P2 = round($pointsPere24).' '.$tabEquipe2[4]; 
	 $A6P2 = round($pointsPere25).' '.$tabEquipe2[5];
	}


elseif ($poule2 == 202)
	{
	 $pointsPere20=(($tabPoints2[0]/$tabNbreJoue2[0])*($tabNbreJoue2[0]+2));
	 $pointsPere21=(($tabPoints2[1]/$tabNbreJoue2[1])*($tabNbreJoue2[1]+2));
	 $pointsPere22=(($tabPoints2[2]/$tabNbreJoue2[2])*($tabNbreJoue2[2]+2));
	 $pointsPere23=(($tabPoints2[3]/$tabNbreJoue2[3])*($tabNbreJoue2[3]+2));
	 $pointsPere24=(($tabPoints2[4]/$tabNbreJoue2[4])*($tabNbreJoue2[4]+2));
	 $pointsPere25=(($tabPoints2[5]/$tabNbreJoue2[5])*($tabNbreJoue2[5]+2));
	 //$pointsPere26=(($tabPoints2[6]/$tabNbreJoue2[6])*($tabNbreJoue2[6]+2));


	 //echo $pointsPere0;echo "<br />";
	 //echo $pointsPere1;echo "<br />";
	 //echo $pointsPere2;echo "<br />";
	 //echo $pointsPere3;echo "<br />";


	 $A1P2 = round($pointsPere20).' '.$tabEquipe2[0];	
	 $A2P2 = round($pointsPere22).' '.$tabEquipe2[1];	
	 $A3P2 = round($pointsPere22).' '.$tabEquipe2[2];	
	 $A4P2 = round($pointsPere23).' '.$tabEquipe2[3]; 	
	 $A5P2 = round($pointsPere24).' '.$tabEquipe2[4]; 
	 $A6P2 = round($pointsPere25).' '.$tabEquipe2[5]; 	
     //	 $A7P2 = round($pointsPere26).' '.$tabEquipe2[6]; 
	}
	else
	{
	 $A1P2 = $tabPoints2[0].' '.$tabEquipe2[0];				
	 $A2P2 = $tabPoints2[1].' '.$tabEquipe2[1];	
	 $A3P2 = $tabPoints2[2].' '.$tabEquipe2[2]; 
	 $A4P2 = $tabPoints2[3].' '.$tabEquipe2[3];
	 $A5P2 = $tabPoints2[4].' '.$tabEquipe2[4]; 
	 $A6P2 = $tabPoints2[5].' '.$tabEquipe2[5]; 	
	 $A7P2 = $tabPoints2[6].' '.$tabEquipe2[6];
	}

//****************************************************
// Récupération des 4 premiers de la poule 1(173)
//             Nbre de pts + nom du club
//***************************************************
/*
if (isset ($tabEquipe3[0])) $clubA1001 = $tabEquipes3[0]; 
if (isset ($tabPoints3[0])) $clubA1001 = $tabPoints3[0];
if (isset ($tabEquipe3[1])) $clubA1001 = $tabEquipes3[1]; 
if (isset ($tabPoints3[1])) $clubA1001 = $tabPoints3[1];
if (isset ($tabEquipe3[2])) $clubA1001 = $tabEquipes3[2]; 
if (isset ($tabPoints3[2])) $clubA1001 = $tabPoints3[2];
if (isset ($tabEquipe3[3])) $clubA1001 = $tabEquipes3[3]; 
if (isset ($tabPoints3[3])) $clubA1001 = $tabPoints3[3];
*/
//require ("../../connect/connexion2.php");
$tabEquipe = array();
$tabPoints =array();
$tabJoue=array();

if ($poule3 ==193)
	{
	 $requete =$bdd->$query( "	select NOM, POINTS, JOUES
						from $comite_clmnt_cache
						where ID_CHAMP=$poule3
						ORDER BY POINTS desc limit 1,8");
			
		//$res= $conn ->query ($requete);
		//while ($data = mysqli_fetch_array ($res))
				//	$result = mysql_query($requete) ;
					while ($row = $requete->fetch_array())
							{
							$tabEquipe3[] = $row['NOM'];
					 		$tabPoints3[] = $row['POINTS'];	
							$tabJoue3[]= $row[2];
							}


	 $A1P3 = $tabPoints3[0].' '.$tabEquipe3[0];			
	 $A2P3 = $tabPoints3[1].' '.$tabEquipe3[1];
	 $A3P3=  $tabPoints3[2].' '.$tabEquipe3[2];
	 $A4P3 = $tabPoints3[3].' '.$tabEquipe3[3]; 
	 $A5P3 = $tabPoints3[4].' '.$tabEquipe3[4]; 
	 $A6P3 = $tabPoints3[5].' '.$tabEquipe3[5]; 	
	 $A7P3 = $tabPoints3[6].' '.$tabEquipe3[6];	
	}
else
	{
	$requete = $bdd->query("SELECT NOM, POINTS, JOUES
							FROM $comite_clmnt_cache
							WHERE ID_CHAMP=$poule3
							ORDER BY POINTS desc limit 0,7");
			
		//$res= $conn ->query ($requete);
		//while ($data = mysqli_fetch_array ($res))
				//	$result = mysql_query($requete) ;
					while ($row =$requete->fetch_array())
							{
							$tabEquipe3[] = $row['NOM'];
					 		$tabPoints3[] = $row['POINTS'];	
							$tabJoue3[]= $row[2];
							}


	 $A1P3 = $tabPoints3[0].' '.$tabEquipe3[0];			
	 $A2P3 = $tabPoints3[1].' '.$tabEquipe3[1];
	 $A3P3=  $tabPoints3[2].' '.$tabEquipe3[2];
	 $A4P3 = $tabPoints3[3].' '.$tabEquipe3[3]; 
	 $A5P3 = $tabPoints3[4].' '.$tabEquipe3[4]; 
	 $A6P3 = $tabPoints3[5].' '.$tabEquipe3[5]; 	
	 $A7P3 = $tabPoints3[6].' '.$tabEquipe3[6];
	}

//****************************************************
// Récupération des 4 premiers de la poule 1(174)
//             Nbre de pts + nom du club
//***************************************************
/*
if (isset ($tabEquipe4[0])) $clubA1001 = $tabEquipes4[0]; 
if (isset ($tabPoints4[0])) $clubA1001 = $tabPoints4[0];
if (isset ($tabEquipe4[1])) $clubA1001 = $tabEquipes4[1]; 
if (isset ($tabPoints4[1])) $clubA1001 = $tabPoints4[1];
if (isset ($tabEquipe4[2])) $clubA1001 = $tabEquipes4[2]; 
if (isset ($tabPoints4[2])) $clubA1001 = $tabPoints4[2];
if (isset ($tabEquipe4[3])) $clubA1001 = $tabEquipes4[3]; 
if (isset ($tabPoints4[3])) $clubA1001 = $tabPoints4[3];

$conn = mysqli_connect("127.0.0.1", "root", "", "onepip-france-db2");
*/

$tabEquipe = array();
$tabPoints =array();
$tabNbreJoue=array();
$requete = $bdd->query("select NOM, POINTS, JOUES
						from '$comite_clmnt_cache'
						where ID_CHAMP='$poule4'
						ORDER BY POINTS desc limit 0,7");
			
				//	$result = mysql_query($requete) ;
					while ($row = $requete->fetch_array())
							{
							$tabEquipe4[] = $row['NOM'];
					 		$tabPoints4[] = $row['POINTS'];	
							$tabNbreJoue4[]= $row[2];
							}

if ($poule4 == 194) 
	{
	 $pointsPere40=(($tabPoints4[0]/$tabNbreJoue4[0])*($tabNbreJoue4[0]+2));
	 $pointsPere41=(($tabPoints4[1]/$tabNbreJoue4[1])*($tabNbreJoue4[1]+2));
	 $pointsPere42=(($tabPoints4[2]/$tabNbreJoue4[2])*($tabNbreJoue4[2]+2));
	 $pointsPere43=(($tabPoints4[3]/$tabNbreJoue4[3])*($tabNbreJoue4[3]+2));
	 $pointsPere44=(($tabPoints4[4]/$tabNbreJoue4[4])*($tabNbreJoue4[4]+2));
	 $pointsPere45=(($tabPoints4[5]/$tabNbreJoue4[5])*($tabNbreJoue4[5]+2));
	 $pointsPere46=(($tabPoints4[6]/$tabNbreJoue4[6])*($tabNbreJoue4[6]+2));

	 $A1P4 = round($pointsPere40).' '.$tabEquipe4[0];	
	 $A2P4 = round($pointsPere41).' '.$tabEquipe4[1];	
	 $A3P4 = round($pointsPere42).' '.$tabEquipe4[2];	
	 $A4P4 = round($pointsPere43).' '.$tabEquipe4[3]; 	
	 $A5P4 = round($pointsPere44).' '.$tabEquipe4[4]; 
	 $A6P4 = round($pointsPere45).' '.$tabEquipe4[5]; 	
	 $A7P4 = round($pointsPere46).' '.$tabEquipe4[6]; 
	
	}
else
	{
	 $A1P4 = $tabPoints4[0].' '.$tabEquipe4[0];					
	 $A2P4 = $tabPoints4[1].' '.$tabEquipe4[1];
	 $A3P4=  $tabPoints4[2].' '.$tabEquipe4[2];	
	 $A4P4 = $tabPoints4[3].' '.$tabEquipe4[3];
	 $A5P4 = $tabPoints4[4].' '.$tabEquipe4[4]; 
	 $A6P4 = $tabPoints4[5].' '.$tabEquipe4[5]; 	
	 $A7P4 = $tabPoints4[6].' '.$tabEquipe4[6]; 
	}

/*
if (isset ($tabEquipe5[0])) $clubA1001 = $tabEquipes5[0]; 
if (isset ($tabPoints5[0])) $clubA1001 = $tabPoints5[0];
if (isset ($tabEquipe5[1])) $clubA1001 = $tabEquipes5[1]; 
if (isset ($tabPoints5[1])) $clubA1001 = $tabPoints5[1];
if (isset ($tabEquipe5[2])) $clubA1001 = $tabEquipes5[2]; 
if (isset ($tabPoints5[2])) $clubA1001 = $tabPoints5[2];
if (isset ($tabEquipe5[3])) $clubA1001 = $tabEquipes5[3]; 
if (isset ($tabPoints5[3])) $clubA1001 = $tabPoints5[3];

$conn = mysqli_connect("127.0.0.1", "root", "", "onepip-france-db2");
*/





//$monArray= array($PTS2P1 , $PTS2P2, $PTS2P3 , $PTS2P4, $PTS2P5);
//$monArray= array($A2P1=>$PTS2P1 , $A2P2=>$PTS2P2, $A2P3=>$PTS2P3 , $A2P4=>$PTS2P4, $A2P5=>$PTS2P5);


//Création d'un tableau avec tous les Premiers de poule
$monArray= array($A1P1 , $A1P2, $A1P3 , $A1P4);
//print_r($monArray);

//echo '<br>';
// tri du tableau
arsort($monArray);
//print_r($monArray);
//echo '<br>';

//Récupération des éléments du tableau un à un
//dabs un tableau chaque fois différents

$sousTableau1=array_slice($monArray,0,1);
$sousTableau2=array_slice($monArray,1,1);
$sousTableau3=array_slice($monArray,2,1);
$sousTableau4=array_slice($monArray,3,1);
 



$club1 = substr($sousTableau1[0],2,20).' '."(".''.substr($sousTableau1[0],0,2).''.")";
$club2 = substr($sousTableau2[0],2,20).' '."(".''.substr($sousTableau2[0],0,2).''.")";
$club3 = substr($sousTableau3[0],2,20).' '."(".''.substr($sousTableau3[0],0,2).''.")";
$club4 = substr($sousTableau4[0],2,20).' '."(".''.substr($sousTableau4[0],0,2).''.")";


?>


<?php


//Création d'un tableau avec tous les second de poule
$monArray= array($A2P1 , $A2P2, $A2P3 , $A2P4 );
//print_r($monArray);


// tri du tableau
arsort($monArray);
//print_r($monArray);
//echo '<br>';

//Récupération des éléments du tableau un à un
//dabs un tableau chaque fois différents

$sousTableau5=array_slice($monArray,0,1);
$sousTableau6=array_slice($monArray,1,1);
$sousTableau7=array_slice($monArray,2,1);
$sousTableau8=array_slice($monArray,3,1);
 


$club5 = substr($sousTableau5[0],2,20).' '."(".''.substr($sousTableau5[0],0,2).''.")";
$club6 = substr($sousTableau6[0],2,20).' '."(".''.substr($sousTableau6[0],0,2).''.")";
$club7 = substr($sousTableau7[0],2,20).' '."(".''.substr($sousTableau7[0],0,2).''.")";
$club8 = substr($sousTableau8[0],2,20).' '."(".''.substr($sousTableau8[0],0,2).''.")";





//Création d'un tableau avec tous les troisieme de poule
$monArray= array($A3P1 , $A3P2, $A3P3 , $A3P4 );
//print_r($monArray);


// tri du tableau
arsort($monArray);
//print_r($monArray);
//echo '<br>';

//Récupération des éléments du tableau un à un
//dabs un tableau chaque fois différents

$sousTableau9= array_slice($monArray,0,1);
$sousTableau10= array_slice($monArray,1,1);
$sousTableau11= array_slice($monArray,2,1);
$sousTableau12= array_slice($monArray,3,1);
 



$club9 = substr($sousTableau9[0],2,20).' '."(".''.substr($sousTableau9[0],0,2).''.")";
$club10 = substr($sousTableau10[0],2,20).' '."(".''.substr($sousTableau10[0],0,2).''.")";
$club11 = substr($sousTableau11[0],2,20).' '."(".''.substr($sousTableau11[0],0,2).''.")";
$club12 = substr($sousTableau12[0],2,20).' '."(".''.substr($sousTableau12[0],0,2).''.")";





//Création d'un tableau avec tous les quatrième de poule
$monArray= array($A4P1 , $A4P2, $A4P3 , $A4P4 );
//print_r($monArray);


// tri du tableau
arsort($monArray);
//print_r($monArray);
//echo '<br>';

//Récupération des éléments du tableau un à un
//dabs un tableau chaque fois différents

$sousTableau13=array_slice($monArray,0,1);
$sousTableau14=array_slice($monArray,1,1);
$sousTableau15=array_slice($monArray,2,1);
$sousTableau16=array_slice($monArray,3,1);





$club13 = substr($sousTableau13[0],2,20).' '."(".''.substr($sousTableau13[0],0,2).''.")";
$club14 = substr($sousTableau14[0],2,20).' '."(".''.substr($sousTableau14[0],0,2).''.")";
$club15 = substr($sousTableau15[0],2,20).' '."(".''.substr($sousTableau15[0],0,2).''.")";
$club16 = substr($sousTableau16[0],2,20).' '."(".''.substr($sousTableau15[0],0,2).''.")";





//Création d'un tableau avec tous les 5ME de poule
$monArray= array($A5P1 , $A5P2, $A5P3 , $A5P4 );
//print_r($monArray);


// tri du tableau
arsort($monArray);
//print_r($monArray);
//echo '<br>';

//Récupération des éléments du tableau un à un
//dabs un tableau chaque fois différents

$sousTableau17=array_slice($monArray,0,1);
$sousTableau18=array_slice($monArray,1,1);
$sousTableau19=array_slice($monArray,2,1);
$sousTableau20=array_slice($monArray,3,1);





$club17 = substr($sousTableau17[0],2,20).' '."(".''.substr($sousTableau17[0],0,2).''.")";
$club18 = substr($sousTableau18[0],2,20).' '."(".''.substr($sousTableau18[0],0,2).''.")";
$club19 = substr($sousTableau19[0],2,20).' '."(".''.substr($sousTableau19[0],0,2).''.")";
$club20 = substr($sousTableau20[0],2,20).' '."(".''.substr($sousTableau20[0],0,2).''.")";



//Création d'un tableau avec tous les 6ME de poule
$monArray= array($A6P1 , $A6P2, $A6P3 , $A6P4 );
//print_r($monArray);


// tri du tableau
arsort($monArray);
//print_r($monArray);
//echo '<br>';

//Récupération des éléments du tableau un à un
//dabs un tableau chaque fois différents

$sousTableau21=array_slice($monArray,0,1);
$sousTableau22=array_slice($monArray,1,1);
$sousTableau23=array_slice($monArray,2,1);
$sousTableau24=array_slice($monArray,3,1);
 




$club21 = substr($sousTableau21[0],2,20).' '."(".''.substr($sousTableau21[0],0,2).''.")";
$club22 = substr($sousTableau22[0],2,20).' '."(".''.substr($sousTableau22[0],0,2).''.")";
$club23 = substr($sousTableau23[0],2,20).' '."(".''.substr($sousTableau23[0],0,2).''.")";
$club24 = substr($sousTableau24[0],2,20).' '."(".''.substr($sousTableau24[0],0,2).''.")";




//Création d'un tableau avec tous les 7ME de poule
$monArray= array($A7P1 ,  $A7P2 , $A7P3 , $A7P4 );
//print_r($monArray);


// tri du tableau
arsort($monArray);
//print_r($monArray);
//echo '<br>';

//Récupération des éléments du tableau un à un
//dabs un tableau chaque fois différents

$sousTableau25=array_slice($monArray,0,1);
$sousTableau26=array_slice($monArray,1,1);
$sousTableau27=array_slice($monArray,2,1);
$sousTableau28=array_slice($monArray,3,1);





$club25 = substr($sousTableau25[0],2,20).' '."(".''.substr($sousTableau25[0],0,2).''.")";
$club26 = substr($sousTableau26[0],2,20).' '."(".''.substr($sousTableau26[0],0,2).''.")";
$club27 = substr($sousTableau27[0],2,20).' '."(".''.substr($sousTableau27[0],0,2).''.")";
$club28 = substr($sousTableau28[0],2,20).' '."(".''.substr($sousTableau28[0],0,2).''.")";


?>








<?php
/*
echo "<br />";
echo $club1;echo "<br />";
echo $club2;echo "<br />";
echo $club3;echo "<br />";
echo $club4;echo "<br />";
echo $club5;echo "<br />";
echo "<br />";
echo "<br />";

echo $club6;echo "<br />";
echo $club7;echo "<br />";
echo $club8;echo "<br />";
echo $club9;echo "<br />";
echo $club10;echo "<br />";

echo "<br />";
echo "<br />";


echo $club11;echo "<br />";
echo $club12;echo "<br />";
echo $club13;echo "<br />";
echo $club14;echo "<br />";
echo $club15;echo "<br />";

echo "<br />";
echo "<br />";



echo $club16;echo "<br />";
echo $club17;echo "<br />";
echo $club18;echo "<br />";
echo $club19;echo "<br />";
echo $club20;echo "<br />";
echo "<br />";
echo "<br />";



echo $club21;echo "<br />";
echo $club22;echo "<br />";
echo $club23;echo "<br />";
echo $club24;echo "<br />";
echo $club25;echo "<br />";
echo "<br />";
echo "<br />";



echo $club26;echo "<br />";
echo $club27;echo "<br />";
echo $club28;echo "<br />";
echo $club29;echo "<br />";
echo $club30;echo "<br />";
echo "<br />";
echo "<br />";



echo $club31;echo "<br />";
echo $club32;echo "<br />";
echo $club33;echo "<br />";
echo $club34;echo "<br />";
echo $club35;echo "<br />";


*/
}
?>



<?php


function classementParPoule ($comite, $division)

{
require ("../../connect1/connexion2.php");   
  if (isset ($poule1)) $poule1 = $poule1; $poule1 = "Variable poule1 non déclarée";
  if (isset ($poule2)) $poule2 = $poule2; $poule2 = "Variable poule1 non déclarée";
  if (isset ($poule3)) $poule3 = $poule3; $poule3 = "Variable poule1 non déclarée";
  if (isset ($poule4)) $poule4 = $poule4; $poule4 = "Variable poule1 non déclarée";
  if (isset ($poule5)) $poule5 = $poule5; $poule5 = "Variable poule1 non déclarée";
	
	$comite_clmnt_cache ="php".''.$comite.''."_clmnt_cache";
	
	if ($division == 170)
		{
		$poule1='171';
		$poule2='172';
		$poule3='173';
		$poule4='174';
		$poule5='175';
		}
	
	
	elseif ($division == 180)
		{
		$poule1='181';
		$poule2='182';
		$poule3='183';
		$poule4='184';
		$poule5='185';
		}
	elseif ($division == 190)
		{
		$poule1='191';
		$poule2='192';
		$poule3='193';
		$poule4='194';
		$poule5='195';
		}
	elseif ($division == 200)
		{
		$poule1='201';
		$poule2='202';
		$poule3='203';
		$poule4='204';
		$poule5='205';
		}
		
	elseif ($division == 210)
		{
		$poule1='211';
		$poule2='212';
		$poule3='213';
		$poule4='214';
		$poule5='215';
		}

	elseif ($division == 220)
		{
		$poule1='221';
		$poule2='222';
		$poule3='223';
		$poule4='224';
		$poule5='225';
		
		}
	elseif ($division == 270)
		{
		$poule1='271';
		$poule2='272';
		$poule3='273';
		$poule4='274';
		$poule5='275';
		}	
		
	elseif ($division == 9180)
		{
		$poule1='9181';
		$poule2='9182';
		$poule3='9183';
		$poule4='9184';
		$poule5='9185';
		}	
	elseif ($division == 9190)
		{
		$poule1='9191';
		$poule2='9192';
		$poule3='9193';
		$poule4='9194';
		$poule5='9195';
		
		}


	global $clubA1P1; global $clubA2P1;global $clubA3P1; global $clubA4P1;

	
	//echo $comite_clmnt_cache;
	
	
	$tabEquipe = array();
	$tabPoints =array();
	$requete = $bdd->query("	select NOM, POINTS
						from $comite_clmnt_cache
						where ID_CHAMP=$poule1
						ORDER BY POINTS desc limit 0,7");
			
				//	$result = mysql_query($requete) ;
					while ($row =$requete->fetch_array())
							{
							$tabEquipe1[] = $row[0];
					 		$tabPoints1[] = $row[1];	
							}	


	$clubA1P1 = $tabEquipe1[0].' ('.$tabPoints1[0].")";				
	$clubA2P1 = $tabEquipe1[1].' ('.$tabPoints1[1].")";	
	$clubA3P1 = $tabEquipe1[2].' ('.$tabPoints1[2].")"; 
	$clubA4P1 = $tabEquipe1[3].' ('.$tabPoints1[3].")";
	$clubA5P1 = $tabEquipe1[4].' ('.$tabPoints1[4].")"; 
	$clubA6P1 = $tabEquipe1[5].' ('.$tabPoints1[5].")";	
	$clubA7P1 = $tabEquipe1[6].' ('.$tabPoints1[6].")";	
	
	//Poule 2	

	global $clubA1P2; global $clubA2P2;global $clubA3P2; global $clubA4P2;

	$tabEquipe = array();
	$tabPoints =array();
	$requete =$bdd->query( "	select NOM, POINTS
						from $comite_clmnt_cache
						where ID_CHAMP=$poule2
						ORDER BY POINTS desc limit 0,7");
			
				//	$result = mysql_query($requete) ;
					while ($row = $requete->fetch_array())
							{
							$tabEquipe2[] = $row[0];
					 		$tabPoints2[] = $row[1];	
							}	


	$clubA1P2 = $tabEquipe2[0].' ('.$tabPoints2[0].")";				
	$clubA2P2 = $tabEquipe2[1].' ('.$tabPoints2[1].")";	
	$clubA3P2 = $tabEquipe2[2].' ('.$tabPoints2[2].")"; 
	$clubA4P2 = $tabEquipe2[3].' ('.$tabPoints2[3].")";
	$clubA5P2 = $tabEquipe2[4].' ('.$tabPoints2[4].")"; 
	$clubA6P2 = $tabEquipe2[5].' ('.$tabPoints2[5].")";	
	$clubA7P2 = $tabEquipe2[6].' ('.$tabPoints2[6].")";	


	//Poule 3	

	global $clubA1P3; global $clubA2P3;global $clubA3P3; global $clubA4P3;

	$tabEquipe = array();
	$tabPoints =array();
	$requete = $bdd->query("	select NOM, POINTS
						from $comite_clmnt_cache
						where ID_CHAMP=$poule3
						ORDER BY POINTS desc limit 0,7");
			
					//$result = mysql_query($requete) ;
					while ($row = $requete->fetch_array())
							{
							$tabEquipe3[] = $row[0];
					 		$tabPoints3[] = $row[1];	
							}	


	$clubA1P3 = $tabEquipe3[0].' ('.$tabPoints3[0].")";				
	$clubA2P3 = $tabEquipe3[1].' ('.$tabPoints3[1].")";	
	$clubA3P3 = $tabEquipe3[2].' ('.$tabPoints3[2].")"; 
	$clubA4P3 = $tabEquipe3[3].' ('.$tabPoints3[3].")";
	$clubA5P3 = $tabEquipe3[4].' ('.$tabPoints3[4].")"; 
	$clubA6P3 = $tabEquipe3[5].' ('.$tabPoints3[5].")";	
	$clubA7P3 = $tabEquipe3[6].' ('.$tabPoints3[6].")";	



	//Poule 4

	global $clubA1P4; global $clubA2P4;global $clubA3P4; global $clubA4P4;

	$tabEquipe = array();
	$tabPoints =array();
	$requete = $bdd->query("	select NOM, POINTS
						from $comite_clmnt_cache
						where ID_CHAMP=$poule4
						ORDER BY POINTS desc limit 0,7");
			
					//$result = mysql_query($requete) ;
					while ($row = $requete->fetch_array())
							{
							$tabEquipe4[] = $row[0];
					 		$tabPoints4[] = $row[1];	
							}	


	$clubA1P4 = $tabEquipe4[0].' ('.$tabPoints4[0].")";				
	$clubA2P4 = $tabEquipe4[1].' ('.$tabPoints4[1].")";	
	$clubA3P4 = $tabEquipe4[2].' ('.$tabPoints4[2].")"; 
	$clubA4P4 = $tabEquipe4[3].' ('.$tabPoints4[3].")";
	$clubA5P4 = $tabEquipe4[4].' ('.$tabPoints4[4].")"; 
	$clubA6P4 = $tabEquipe4[5].' ('.$tabPoints4[5].")";	
	$clubA7P4 = $tabEquipe4[6].' ('.$tabPoints4[6].")";	



	//Poule 5
/*
	global $clubA1P5; global $clubA2P5;global $clubA3P5; global $clubA4P5;

	$tabEquipe = array();
	$tabPoints =array();
	$requete = "	select NOM, POINTS
						from phpca_clmnt_cache
						where ID_CHAMP=175
						ORDER BY POINTS desc limit 0,7";
			
					$result = mysql_query($requete) ;
					while ($row = mysql_fetch_array($result))
							{
							$tabEquipe4[] = $row[0];
					 		$tabPoints4[] = $row[1];	
							}	


	$clubA1P4 = $tabEquipe5[0].' ('.$tabPoints5[0].")";				
	$clubA2P4 = $tabEquipe5[1].' ('.$tabPoints5[1].")";	
	$clubA3P4 = $tabEquipe5[2].' ('.$tabPoints5[2].")"; 
	$clubA4P4 = $tabEquipe5[3].' ('.$tabPoints5[3].")";
	$clubA5P4 = $tabEquipe5[4].' ('.$tabPoints5[4].")"; 
	$clubA6P4 = $tabEquipe5[5].' ('.$tabPoints5[5].")";	
	$clubA7P4 = $tabEquipe5[6].' ('.$tabPoints5[6].")";	
*/	
}

?>

<?php
function classementParPoints8poules($comite, $division)

{
  if (isset ($poule1)) $poule1 = $poule1; $poule1 = "Variable poule1 non déclarée";
  if (isset ($poule2)) $poule2 = $poule2; $poule2 = "Variable poule1 non déclarée";
  if (isset ($poule3)) $poule3 = $poule3; $poule3 = "Variable poule1 non déclarée";
  if (isset ($poule4)) $poule4 = $poule4; $poule4 = "Variable poule1 non déclarée";
  if (isset ($poule5)) $poule5 = $poule5; $poule5 = "Variable poule1 non déclarée";
  if (isset ($poule6)) $poule6 = $poule6; $poule6 = "Variable poule1 non déclarée";
  if (isset ($poule7)) $poule7 = $poule7; $poule7 = "Variable poule1 non déclarée";
  if (isset ($poule8)) $poule8 = $poule8; $poule8 = "Variable poule1 non déclarée";
		
$comite_clmnt_cache ="php".''.$comite.''."_clmnt_cache";		


  	


global $club1;global $club2;global $club3;global $club4;global $club5;
global $club6;global $club7;global $club8;global $club9;global $club10;
global $club11;global $club12;global $club13;global $club14;global $club15;
global $club16;global $club17;global $club18;global $club19;global $club20;global $club21;
global $club22;global $club23;global $club24;global $club25;global $club26;
global $club27;global $club28;global $club29;global $club30;global $club31;
global $club32;	global $club33;	global $club34;	global $club35;	
global $club36;	global $club37;	global $club38;	global $club39;	
global $club40;	global $club41;	global $club42;	global $club43;
global $club44;	global $club45;	global $club46;	global $club47;global $club48;
	
	if	 ($division == 210 or $division==220)
		{
		$poule1='211';
		$poule2='212';
		$poule3='213';
		$poule4='214';
		$poule5='215';
		$poule6='216';
		$poule7='217';
		$poule8='218';

		}
	
	
//require ("../../connect/connexion2.php");
$tabEquipe = array();
$tabPoints =array();
$tabNbreJoue =array();
$requete =$bdd->query( "	select NOM, POINTS, JOUES
						from $comite_clmnt_cache
						where ID_CHAMP=$poule1
						ORDER BY POINTS desc limit 0,7");

					//$result = mysql_query($requete) ;
					while ($row = $requete->fetch_array())
							{
							$tabEquipe1[] = $row[0];
					 		$tabPoints1[] = $row[1];
							$tabNbreJoue1[] = $row[2];							
							}

$A1P1 = $tabPoints1[0].' '.$tabEquipe1[0]; 				
$A2P1 = $tabPoints1[1].' '.$tabEquipe1[1];	
$A3P1 = $tabPoints1[2].' '.$tabEquipe1[2];	
$A4P1 = $tabPoints1[3].' '.$tabEquipe1[3]; 	
$A5P1 = $tabPoints1[4].' '.$tabEquipe1[4]; 
$A6P1 = $tabPoints1[5].' '.$tabEquipe1[5]; 	
$A7P1 = $tabPoints1[6].' '.$tabEquipe1[6]; 


 
//****************************************************
// Récupération des 7 premiers de la poule 1(172)
//             Nbre de pts + nom du club
//***************************************************
$tabEquipe = array();
$tabPoints = array();
$tabNbreJoue = array();
$requete = $bdd->query("	select NOM, POINTS, JOUES
						from $comite_clmnt_cache
						where ID_CHAMP=$poule2
						ORDER BY POINTS desc limit 0,7");
			
				//	$result = mysql_query($requete) ;
					while ($row = $requete->fetch_array())
							{
							$tabEquipe2[] = $row[0];
					 		$tabPoints2[] = $row[1];	
							$tabNbreJoue2[] = $row[2];
							}	
							
							
$pointsPere20=(($tabPoints2[0]/$tabNbreJoue2[0])*($tabNbreJoue2[0]+4));
$pointsPere21=(($tabPoints2[1]/$tabNbreJoue2[1])*($tabNbreJoue2[1]+4));
$pointsPere22=(($tabPoints2[2]/$tabNbreJoue2[2])*($tabNbreJoue2[2]+4));
$pointsPere23=(($tabPoints2[3]/$tabNbreJoue2[3])*($tabNbreJoue2[3]+4));
$pointsPere24=(($tabPoints2[4]/$tabNbreJoue2[4])*($tabNbreJoue2[4]+4));
$pointsPere25=(($tabPoints2[5]/$tabNbreJoue2[5])*($tabNbreJoue2[5]+4));
$pointsPere26=(($tabPoints2[6]/$tabNbreJoue2[6])*($tabNbreJoue2[6]+4));


$A1P2 = round($pointsPere20).' '.$tabEquipe2[0];	
$A2P2 = round($pointsPere21).' '.$tabEquipe2[1];	
$A3P2 = round($pointsPere22).' '.$tabEquipe2[2];	
$A4P2 = round($pointsPere23).' '.$tabEquipe2[3]; 	
$A5P2 = round($pointsPere24).' '.$tabEquipe2[4]; 
$A6P2 = round($pointsPere25).' '.$tabEquipe2[5]; 	
$A7P2 = round($pointsPere26).' '.$tabEquipe2[6]; 							
							


//$A1P2 = $tabPoints2[0].' '.$tabEquipe2[0];				
//$A2P2 = $tabPoints2[1].' '.$tabEquipe2[1];	
//$A3P2 = $tabPoints2[2].' '.$tabEquipe2[2]; 
//$A4P2 = $tabPoints2[3].' '.$tabEquipe2[3];
//$A5P2 = $tabPoints2[4].' '.$tabEquipe2[4]; 
//$A6P2 = $tabPoints2[5].' '.$tabEquipe2[5]; 	
//$A7P2 = $tabPoints2[6].' '.$tabEquipe2[6];


//****************************************************
// Récupération des 4 premiers de la poule 1(173)
//             Nbre de pts + nom du club
//***************************************************
/*
if (isset ($tabEquipe3[0])) $clubA1001 = $tabEquipes3[0]; 
if (isset ($tabPoints3[0])) $clubA1001 = $tabPoints3[0];
if (isset ($tabEquipe3[1])) $clubA1001 = $tabEquipes3[1]; 
if (isset ($tabPoints3[1])) $clubA1001 = $tabPoints3[1];
if (isset ($tabEquipe3[2])) $clubA1001 = $tabEquipes3[2]; 
if (isset ($tabPoints3[2])) $clubA1001 = $tabPoints3[2];
if (isset ($tabEquipe3[3])) $clubA1001 = $tabEquipes3[3]; 
if (isset ($tabPoints3[3])) $clubA1001 = $tabPoints3[3];
*/
//require ("../../connect/connexion2.php");
$tabEquipe = array();
$tabPoints =array();
$tabNbreJoue =array();
$requete = $bdd->query( "	select NOM, POINTS, JOUES
						from $comite_clmnt_cache
						where ID_CHAMP=$poule3
						ORDER BY POINTS desc limit 0,7");
			
		//$res= $conn ->query ($requete);
		//while ($data = mysqli_fetch_array ($res))
				//	$result = mysql_query($requete) ;
					while ($row = $requete->fetch_array())
							{
							$tabEquipe3[] = $row['NOM'];
					 		$tabPoints3[] = $row['POINTS'];	
							$tabNbreJoue3[] = $row[2];
							}


	


$A1P3 = $tabPoints3[0].' '.$tabEquipe3[0];			
$A2P3 = $tabPoints3[1].' '.$tabEquipe3[1];
$A3P3=  $tabPoints3[2].' '.$tabEquipe3[2];
$A4P3 = $tabPoints3[3].' '.$tabEquipe3[3]; 
$A5P3 = $tabPoints3[4].' '.$tabEquipe3[4]; 
$A6P3 = $tabPoints3[5].' '.$tabEquipe3[5]; 	
$A7P3 = $tabPoints3[6].' '.$tabEquipe3[6];


//****************************************************
// Récupération des 4 premiers de la poule 1(174)
//             Nbre de pts + nom du club
//***************************************************
/*
if (isset ($tabEquipe4[0])) $clubA1001 = $tabEquipes4[0]; 
if (isset ($tabPoints4[0])) $clubA1001 = $tabPoints4[0];
if (isset ($tabEquipe4[1])) $clubA1001 = $tabEquipes4[1]; 
if (isset ($tabPoints4[1])) $clubA1001 = $tabPoints4[1];
if (isset ($tabEquipe4[2])) $clubA1001 = $tabEquipes4[2]; 
if (isset ($tabPoints4[2])) $clubA1001 = $tabPoints4[2];
if (isset ($tabEquipe4[3])) $clubA1001 = $tabEquipes4[3]; 
if (isset ($tabPoints4[3])) $clubA1001 = $tabPoints4[3];

$conn = mysqli_connect("127.0.0.1", "root", "", "onepip-france-db2");
*/

$tabEquipe = array();
$tabPoints =array();
$tabNbreJoue =array();
$requete =$bdd->query( "	select NOM, POINTS, JOUES
						from $comite_clmnt_cache
						where ID_CHAMP=$poule4
						ORDER BY POINTS desc limit 0,7");
			
					//$result = mysql_query($requete) ;
					while ($row = $requte->fetch_array())
							{
							$tabEquipe4[] = $row['NOM'];
					 		$tabPoints4[] = $row['POINTS'];	
							$tabNbreJoue4[] = $row[2];	
							}

$pointsPere40=(($tabPoints4[0]/$tabNbreJoue4[0])*($tabNbreJoue4[0]+2));
$pointsPere41=(($tabPoints4[1]/$tabNbreJoue4[1])*($tabNbreJoue4[1]+2));
$pointsPere42=(($tabPoints4[2]/$tabNbreJoue4[2])*($tabNbreJoue4[2]+2));
$pointsPere43=(($tabPoints4[3]/$tabNbreJoue4[3])*($tabNbreJoue4[3]+2));
$pointsPere44=(($tabPoints4[4]/$tabNbreJoue4[4])*($tabNbreJoue4[4]+2));
$pointsPere45=(($tabPoints4[5]/$tabNbreJoue4[5])*($tabNbreJoue4[5]+2));
$pointsPere46=(($tabPoints4[6]/$tabNbreJoue4[6])*($tabNbreJoue4[6]+2));


$A1P4 = round($pointsPere40).' '.$tabEquipe4[0];	
$A2P4 = round($pointsPere41).' '.$tabEquipe4[1];	
$A3P4 = round($pointsPere42).' '.$tabEquipe4[2];	
$A4P4 = round($pointsPere43).' '.$tabEquipe4[3]; 	
$A5P4 = round($pointsPere44).' '.$tabEquipe4[4]; 
$A6P4 = round($pointsPere45).' '.$tabEquipe4[5]; 	
$A7P4 = round($pointsPere46).' '.$tabEquipe4[6]; 



/*
$A1P4 = $tabPoints4[0].' '.$tabEquipe4[0];					
$A2P4 = $tabPoints4[1].' '.$tabEquipe4[1];
$A3P4=  $tabPoints4[2].' '.$tabEquipe4[2];	
$A4P4 = $tabPoints4[3].' '.$tabEquipe4[3];
$A5P4 = $tabPoints4[4].' '.$tabEquipe4[4]; 
$A6P4 = $tabPoints4[5].' '.$tabEquipe4[5]; 	
$A7P4 = $tabPoints4[6].' '.$tabEquipe4[6]; 
*/ 

/*
if (isset ($tabEquipe6[0])) $clubA1001 = $tabEquipes6[0]; 
if (isset ($tabPoints6[0])) $clubA1001 = $tabPoints6[0];
if (isset ($tabEquipe6[1])) $clubA1001 = $tabEquipes6[1]; 
if (isset ($tabPoints6[1])) $clubA1001 = $tabPoints6[1];
if (isset ($tabEquipe6[2])) $clubA1001 = $tabEquipes6[2]; 
if (isset ($tabPoints6[2])) $clubA1001 = $tabPoints6[2];
if (isset ($tabEquipe6[3])) $clubA1001 = $tabEquipes6[3]; 
if (isset ($tabPoints6[3])) $clubA1001 = $tabPoints6[3];

$conn = mysqli_connect("127.0.0.1", "root", "", "onepip-france-db2");
*/
//****************************************************
// Récupération des 4 premiers de la poule 6(174)
//             Nbre de pts + nom du club
//***************************************************

$tabEquipe = array();
$tabPoints =array();
$tabNbreJoue =array();
$requete =$bdd->query( "	select NOM, POINTS, JOUES
						from $comite_clmnt_cache
						where ID_CHAMP=$poule5
						ORDER BY POINTS desc limit 0,7");
			
	//	$result = mysql_query($requete) ;
					while ($row = $requete->fetch_array())
							{
							$tabEquipe5[] = $row['NOM'];
					 		$tabPoints5[] = $row['POINTS'];	
							$tabNbreJoue5[] = $row[2];
							}


$pointsPere50=(($tabPoints5[0]/$tabNbreJoue5[0])*($tabNbreJoue5[0]+4));
$pointsPere51=(($tabPoints5[1]/$tabNbreJoue5[1])*($tabNbreJoue5[1]+4));
$pointsPere52=(($tabPoints5[2]/$tabNbreJoue5[2])*($tabNbreJoue5[2]+4));
$pointsPere53=(($tabPoints5[3]/$tabNbreJoue5[3])*($tabNbreJoue5[3]+4));
$pointsPere54=(($tabPoints5[4]/$tabNbreJoue5[4])*($tabNbreJoue5[4]+4));
$pointsPere55=(($tabPoints5[5]/$tabNbreJoue5[5])*($tabNbreJoue5[5]+4));
$pointsPere56=(($tabPoints5[6]/$tabNbreJoue5[6])*($tabNbreJoue5[6]+4));


$A1P5 = round($pointsPere50).' '.$tabEquipe5[0];	
$A2P5 = round($pointsPere51).' '.$tabEquipe5[1];	
$A3P5 = round($pointsPere52).' '.$tabEquipe5[2];	
$A4P5 = round($pointsPere53).' '.$tabEquipe5[3]; 	
$A5P5 = round($pointsPere54).' '.$tabEquipe5[4]; 
$A6P5 = round($pointsPere55).' '.$tabEquipe5[5]; 	
$A7P5 = round($pointsPere56).' '.$tabEquipe5[6]; 


/*
$A1P5 = $tabPoints5[0].' '.$tabEquipe5[0];					
$A2P5 = $tabPoints5[1].' '.$tabEquipe5[1];
$A3P5=  $tabPoints5[2].' '.$tabEquipe5[2];
$A4P5 = $tabPoints5[3].' '.$tabEquipe5[3];
$A5P5 = $tabPoints5[4].' '.$tabEquipe5[4]; 
$A6P5 = $tabPoints5[5].' '.$tabEquipe5[5]; 	
$A7P5 = $tabPoints5[6].' '.$tabEquipe5[6];
*/

//****************************************************
// Récupération des 4 premiers de la poule 1(174)
//             Nbre de pts + nom du club
//***************************************************
$tabEquipe = array();
$tabPoints =array();
$tabNbreJoue =array();
$requete = $bdd->query("	select NOM, POINTS, JOUES
						from $comite_clmnt_cache
						where ID_CHAMP=$poule6
						ORDER BY POINTS desc limit 0,7");
			
		//$result = mysql_query($requete) ;
					while ($row = $requete->fetch_array())
							{
							$tabEquipe6[] = $row['NOM'];
					 		$tabPoints6[] = $row['POINTS'];	
							$tabNbreJoue6[] = $row[2];	
							}
							
$pointsPere60=(($tabPoints6[0]/$tabNbreJoue6[0])*($tabNbreJoue6[0]+2));
$pointsPere61=(($tabPoints6[1]/$tabNbreJoue6[1])*($tabNbreJoue6[1]+2));
$pointsPere62=(($tabPoints6[2]/$tabNbreJoue6[2])*($tabNbreJoue6[2]+2));
$pointsPere63=(($tabPoints6[3]/$tabNbreJoue6[3])*($tabNbreJoue6[3]+2));
$pointsPere64=(($tabPoints6[4]/$tabNbreJoue6[4])*($tabNbreJoue6[4]+2));
$pointsPere65=(($tabPoints6[5]/$tabNbreJoue6[5])*($tabNbreJoue6[5]+2));
//$pointsPere66=(($tabPoints6[6]/$tabNbreJoue6[6])*($tabNbreJoue6[6]+2));


$A1P6 = round($pointsPere60).' '.$tabEquipe6[0];	
$A2P6 = round($pointsPere61).' '.$tabEquipe6[1];	
$A3P6 = round($pointsPere62).' '.$tabEquipe6[2];	
$A4P6 = round($pointsPere63).' '.$tabEquipe6[3]; 	
$A5P6 = round($pointsPere64).' '.$tabEquipe6[4]; 
$A6P6 = round($pointsPere65).' '.$tabEquipe6[5]; 	
$A7P6 = round($pointsPere66).' '.$tabEquipe6[6]; 							
							
/*
$A1P6 = $tabPoints6[0].' '.$tabEquipe6[0];					
$A2P6 = $tabPoints6[1].' '.$tabEquipe6[1];
$A3P6=  $tabPoints6[2].' '.$tabEquipe6[2];
$A4P6 = $tabPoints6[3].' '.$tabEquipe6[3];
$A5P6 = $tabPoints6[4].' '.$tabEquipe6[4]; 
$A6P6 = $tabPoints6[5].' '.$tabEquipe6[5]; 	
$A7P6 = $tabPoints6[6].' '.$tabEquipe6[6];
*/
//****************************************************
// Récupération des 4 premiers de la poule 7(174)
//             Nbre de pts + nom du club
//***************************************************
$tabEquipe = array();
$tabPoints =array();
$tabNbreJoue =array();
$requete = $bdd->query("	select NOM, POINTS, JOUES
						from $comite_clmnt_cache
						where ID_CHAMP=$poule7
						ORDER BY POINTS desc limit 0,7");
			
	//	$result = mysql_query($requete) ;
					while ($row = $requete->fetch_array())
							{
							$tabEquipe7[] = $row['NOM'];
					 		$tabPoints7[] = $row['POINTS'];	
							$tabNbreJoue7[] = $row[2];
							}
							
$pointsPere70=(($tabPoints7[0]/$tabNbreJoue7[0])*($tabNbreJoue7[0]+4));
$pointsPere71=(($tabPoints7[1]/$tabNbreJoue7[1])*($tabNbreJoue7[1]+4));
$pointsPere72=(($tabPoints7[2]/$tabNbreJoue7[2])*($tabNbreJoue7[2]+4));
$pointsPere73=(($tabPoints7[3]/$tabNbreJoue7[3])*($tabNbreJoue7[3]+4));
$pointsPere74=(($tabPoints7[4]/$tabNbreJoue7[4])*($tabNbreJoue7[4]+4));
$pointsPere75=(($tabPoints7[5]/$tabNbreJoue7[5])*($tabNbreJoue7[5]+4));
$pointsPere76=(($tabPoints7[6]/$tabNbreJoue7[6])*($tabNbreJoue7[6]+4));


$A1P7 = round($pointsPere70).' '.$tabEquipe7[0];	
$A2P7 = round($pointsPere71).' '.$tabEquipe7[1];	
$A3P7 = round($pointsPere72).' '.$tabEquipe7[2];	
$A4P7 = round($pointsPere73).' '.$tabEquipe7[3]; 	
$A5P7 = round($pointsPere74).' '.$tabEquipe7[4]; 
$A6P7 = round($pointsPere75).' '.$tabEquipe7[5]; 	
$A7P7 = round($pointsPere76).' '.$tabEquipe7[6]; 							
							
							
/*							

$A1P7 = $tabPoints7[0].' '.$tabEquipe7[0];					
$A2P7 = $tabPoints7[1].' '.$tabEquipe7[1];
$A3P7=  $tabPoints7[2].' '.$tabEquipe7[2];
$A4P7 = $tabPoints7[3].' '.$tabEquipe7[3];
$A5P7 = $tabPoints7[4].' '.$tabEquipe7[4]; 
$A6P7 = $tabPoints7[5].' '.$tabEquipe7[5]; 	
$A7P7 = $tabPoints7[6].' '.$tabEquipe7[6];
 */
//$monArray= array($PTS2P1 , $PTS2P2, $PTS2P3 , $PTS2P4, $PTS2P6);
//$monArray= array($A2P1=>$PTS2P1 , $A2P2=>$PTS2P2, $A2P3=>$PTS2P3 , $A2P4=>$PTS2P4, $A2P6=>$PTS2P6);


//****************************************************
// Récupération des 4 premiers de la poule 8
//             Nbre de pts + nom du club
//***************************************************
$tabEquipe = array();
$tabPoints =array();
$tabNbreJoue =array();
$requete = $bdd->query("	select NOM, POINTS, JOUES
						from $comite_clmnt_cache
						where ID_CHAMP=$poule8
						ORDER BY POINTS desc limit 0,7");
			
		//$result = mysql_query($requete) ;
					while ($row = $requete->fetch_array())
							{
							$tabEquipe8[] = $row['NOM'];
					 		$tabPoints8[] = $row['POINTS'];	
							$tabNbreJoue8[] = $row[2];	
							}

$pointsPere80=(($tabPoints8[0]/$tabNbreJoue8[0])*($tabNbreJoue8[0]+4));
$pointsPere81=(($tabPoints8[1]/$tabNbreJoue8[1])*($tabNbreJoue8[1]+4));
$pointsPere82=(($tabPoints8[2]/$tabNbreJoue8[2])*($tabNbreJoue8[2]+4));
$pointsPere83=(($tabPoints8[3]/$tabNbreJoue8[3])*($tabNbreJoue8[3]+4));
$pointsPere84=(($tabPoints8[4]/$tabNbreJoue8[4])*($tabNbreJoue8[4]+4));
$pointsPere85=(($tabPoints8[5]/$tabNbreJoue8[5])*($tabNbreJoue8[5]+4));
$pointsPere86=(($tabPoints8[6]/$tabNbreJoue8[6])*($tabNbreJoue8[6]+4));


$A1P8 = round($pointsPere80).' '.$tabEquipe8[0];	
$A2P8 = round($pointsPere81).' '.$tabEquipe8[1];	
$A3P8 = round($pointsPere82).' '.$tabEquipe8[2];	
$A4P8 = round($pointsPere83).' '.$tabEquipe8[3]; 	
$A5P8 = round($pointsPere84).' '.$tabEquipe8[4]; 
$A6P8 = round($pointsPere85).' '.$tabEquipe8[5]; 	
$A7P8 = round($pointsPere86).' '.$tabEquipe8[6]; 

/*
$A1P8 = $tabPoints8[0].' '.$tabEquipe8[0];					
$A2P8 = $tabPoints8[1].' '.$tabEquipe8[1];
$A3P8=  $tabPoints8[2].' '.$tabEquipe8[2];
$A4P8 = $tabPoints8[3].' '.$tabEquipe8[3];
$A5P8 = $tabPoints8[4].' '.$tabEquipe8[4]; 
$A6P8 = $tabPoints8[5].' '.$tabEquipe8[5]; 	
$A7P8 = $tabPoints8[6].' '.$tabEquipe8[6];

*/


//******************************************************************
//******************************************************************
//******************************************************************
//Création d'un tableau avec tous les Premiers de poule
$monArray= array($A1P1 , $A1P2, $A1P3 , $A1P4, $A1P5, $A1P6 , $A1P7, $A1P8);
//print_r($monArray);

//echo '<br>';
// tri du tableau
arsort($monArray);
//print_r($monArray);
//echo '<br>';

//Récupération des éléments du tableau un à un
//dans un tableau chaque fois différents

$sousTableau1=array_slice($monArray,0,1);
$sousTableau2=array_slice($monArray,1,1);
$sousTableau3=array_slice($monArray,2,1);
$sousTableau4=array_slice($monArray,3,1);
$sousTableau5=array_slice($monArray,4,1); 
$sousTableau6=array_slice($monArray,5,1); 
$sousTableau7=array_slice($monArray,6,1); 
$sousTableau8=array_slice($monArray,7,1); 



$club1 = substr($sousTableau1[0],2,20).' '."(".''.substr($sousTableau1[0],0,2).''.")";
$club2 = substr($sousTableau2[0],2,20).' '."(".''.substr($sousTableau2[0],0,2).''.")";
$club3 = substr($sousTableau3[0],2,20).' '."(".''.substr($sousTableau3[0],0,2).''.")";
$club4 = substr($sousTableau4[0],2,20).' '."(".''.substr($sousTableau4[0],0,2).''.")";
$club5 = substr($sousTableau5[0],2,20).' '."(".''.substr($sousTableau5[0],0,2).''.")";
$club6 = substr($sousTableau6[0],2,20).' '."(".''.substr($sousTableau6[0],0,2).''.")";
$club7 = substr($sousTableau7[0],2,20).' '."(".''.substr($sousTableau7[0],0,2).''.")";
$club8 = substr($sousTableau8[0],2,20).' '."(".''.substr($sousTableau8[0],0,2).''.")";



//Création d'un tableau avec tous les second de poule
$monArray= array($A2P1 , $A2P2, $A2P3 , $A2P4 , $A2P5,  $A2P6 , $A2P7 , $A2P8);
//print_r($monArray);


// tri du tableau
arsort($monArray);
//print_r($monArray);
//echo '<br>';

//Récupération des éléments du tableau un à un
//dabs un tableau chaque fois différents

$sousTableau9=array_slice($monArray,0,1);
$sousTableau10=array_slice($monArray,1,1);
$sousTableau11=array_slice($monArray,2,1);
$sousTableau12=array_slice($monArray,3,1);
$sousTableau13=array_slice($monArray,4,1); 
$sousTableau14=array_slice($monArray,5,1); 
$sousTableau15=array_slice($monArray,6,1); 
$sousTableau16=array_slice($monArray,7,1); 

$club9 = substr($sousTableau9[0],2,20).' '."(".''.substr($sousTableau9[0],0,2).''.")";
$club10 = substr($sousTableau10[0],2,20).' '."(".''.substr($sousTableau10[0],0,2).''.")";
$club11 = substr($sousTableau11[0],2,20).' '."(".''.substr($sousTableau11[0],0,2).''.")";
$club12 = substr($sousTableau12[0],2,20).' '."(".''.substr($sousTableau12[0],0,2).''.")";
$club13 = substr($sousTableau13[0],2,20).' '."(".''.substr($sousTableau13[0],0,2).''.")";
$club14 = substr($sousTableau14[0],2,20).' '."(".''.substr($sousTableau14[0],0,2).''.")";
$club15 = substr($sousTableau15[0],2,20).' '."(".''.substr($sousTableau15[0],0,2).''.")";
$club16 = substr($sousTableau16[0],2,20).' '."(".''.substr($sousTableau16[0],0,2).''.")";



//Création d'un tableau avec tous les troisieme de poule
$monArray= array($A3P1 , $A3P2, $A3P3 , $A3P4 , $A3P5, $A3P6 , $A3P7 , $A3P8);
//print_r($monArray);


// tri du tableau
arsort($monArray);
//print_r($monArray);
//echo '<br>';

//Récupération des éléments du tableau un à un
//dabs un tableau chaque fois différents

$sousTableau17= array_slice($monArray,0,1);
$sousTableau18= array_slice($monArray,1,1);
$sousTableau19= array_slice($monArray,2,1);
$sousTableau20= array_slice($monArray,3,1);
$sousTableau21= array_slice($monArray,4,1); 
$sousTableau22= array_slice($monArray,5,1);
$sousTableau23= array_slice($monArray,6,1);
$sousTableau24= array_slice($monArray,7,1);




$club17 = substr($sousTableau17[0],2,20).' '."(".''.substr($sousTableau17[0],0,2).''.")";
$club18 = substr($sousTableau18[0],2,20).' '."(".''.substr($sousTableau18[0],0,2).''.")";
$club19 = substr($sousTableau19[0],2,20).' '."(".''.substr($sousTableau19[0],0,2).''.")";
$club20 = substr($sousTableau20[0],2,20).' '."(".''.substr($sousTableau20[0],0,2).''.")";
$club21 = substr($sousTableau21[0],2,20).' '."(".''.substr($sousTableau21[0],0,2).''.")";
$club22 = substr($sousTableau22[0],2,20).' '."(".''.substr($sousTableau22[0],0,2).''.")";
$club23 = substr($sousTableau23[0],2,20).' '."(".''.substr($sousTableau23[0],0,2).''.")";
$club24 = substr($sousTableau24[0],2,20).' '."(".''.substr($sousTableau24[0],0,2).''.")";


//********************************************************

//Création d'un tableau avec tous les quatrième de poule
$monArray= array($A4P1 , $A4P2, $A4P3 , $A4P4 , $A4P5, $A4P6 , $A4P7 , $A4P8);
//print_r($monArray);


// tri du tableau
arsort($monArray);
//print_r($monArray);
//echo '<br>';

//Récupération des éléments du tableau un à un
//dabs un tableau chaque fois différents

$sousTableau25=array_slice($monArray,0,1);
$sousTableau26=array_slice($monArray,1,1);
$sousTableau27=array_slice($monArray,2,1);
$sousTableau28=array_slice($monArray,3,1);
$sousTableau29=array_slice($monArray,4,1); 
$sousTableau30=array_slice($monArray,5,1); 
$sousTableau31=array_slice($monArray,6,1); 
$sousTableau32=array_slice($monArray,7,1);




$club25 = substr($sousTableau25[0],2,20).' '."(".''.substr($sousTableau25[0],0,2).''.")";
$club26 = substr($sousTableau26[0],2,20).' '."(".''.substr($sousTableau26[0],0,2).''.")";
$club27 = substr($sousTableau27[0],2,20).' '."(".''.substr($sousTableau27[0],0,2).''.")";
$club28 = substr($sousTableau28[0],2,20).' '."(".''.substr($sousTableau28[0],0,2).''.")";
$club29 = substr($sousTableau29[0],2,20).' '."(".''.substr($sousTableau29[0],0,2).''.")";
$club30 = substr($sousTableau30[0],2,20).' '."(".''.substr($sousTableau30[0],0,2).''.")";
$club31 = substr($sousTableau31[0],2,20).' '."(".''.substr($sousTableau31[0],0,2).''.")";
$club32 = substr($sousTableau32[0],2,20).' '."(".''.substr($sousTableau32[0],0,2).''.")";


//Création d'un tableau avec tous les 6ME de poule
$monArray= array($A5P1 , $A5P2, $A5P3 , $A5P4 , $A5P5, $A5P6 , $A5P7 , $A5P8);
//print_r($monArray);


// tri du tableau
arsort($monArray);
//print_r($monArray);
//echo '<br>';

//Récupération des éléments du tableau un à un
//dabs un tableau chaque fois différents

$sousTableau33=array_slice($monArray,0,1);
$sousTableau34=array_slice($monArray,1,1);
$sousTableau35=array_slice($monArray,2,1);
$sousTableau36=array_slice($monArray,3,1);
$sousTableau37=array_slice($monArray,4,1); 
$sousTableau38=array_slice($monArray,5,1);
$sousTableau39=array_slice($monArray,6,1);
$sousTableau40=array_slice($monArray,7,1);



$club33 = substr($sousTableau33[0],2,20).' '."(".''.substr($sousTableau33[0],0,2).''.")";
$club34 = substr($sousTableau34[0],2,20).' '."(".''.substr($sousTableau34[0],0,2).''.")";
$club35 = substr($sousTableau35[0],2,20).' '."(".''.substr($sousTableau35[0],0,2).''.")";
$club36 = substr($sousTableau36[0],2,20).' '."(".''.substr($sousTableau36[0],0,2).''.")";
$club37 = substr($sousTableau37[0],2,20).' '."(".''.substr($sousTableau37[0],0,2).''.")";
$club38 = substr($sousTableau38[0],2,20).' '."(".''.substr($sousTableau38[0],0,2).''.")";
$club39 = substr($sousTableau39[0],2,20).' '."(".''.substr($sousTableau39[0],0,2).''.")";
$club40 = substr($sousTableau40[0],2,20).' '."(".''.substr($sousTableau40[0],0,2).''.")";

//Création d'un tableau avec tous les 6ME de poule
$monArray= array($A6P1 , $A6P2, $A6P3 , $A6P4 , $A6P5, $A6P6 , $A6P7 , $A6P8);
//print_r($monArray);


// tri du tableau
arsort($monArray);
//print_r($monArray);
//echo '<br>';

//Récupération des éléments du tableau un à un
//dabs un tableau chaque fois différents

$sousTableau41=array_slice($monArray,0,1);
$sousTableau42=array_slice($monArray,1,1);
$sousTableau43=array_slice($monArray,2,1);
$sousTableau44=array_slice($monArray,3,1);
$sousTableau45=array_slice($monArray,4,1); 
$sousTableau46=array_slice($monArray,5,1);
$sousTableau47=array_slice($monArray,6,1);
$sousTableau48=array_slice($monArray,7,1);



$club41 = substr($sousTableau41[0],2,20).' '."(".''.substr($sousTableau41[0],0,2).''.")";
$club42 = substr($sousTableau42[0],2,20).' '."(".''.substr($sousTableau42[0],0,2).''.")";
$club43 = substr($sousTableau43[0],2,20).' '."(".''.substr($sousTableau43[0],0,2).''.")";
$club44 = substr($sousTableau44[0],2,20).' '."(".''.substr($sousTableau44[0],0,2).''.")";
$club45 = substr($sousTableau45[0],2,20).' '."(".''.substr($sousTableau45[0],0,2).''.")";
$club46 = substr($sousTableau46[0],2,20).' '."(".''.substr($sousTableau46[0],0,2).''.")";
$club47 = substr($sousTableau47[0],2,20).' '."(".''.substr($sousTableau47[0],0,2).''.")";
$club48 = substr($sousTableau48[0],2,20).' '."(".''.substr($sousTableau48[0],0,2).''.")";

}
?>







