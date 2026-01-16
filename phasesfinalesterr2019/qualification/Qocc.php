
<?php
function honneur($comite)
{

//*************HONNEUR*******
//****************************************************
// Récupération des 4 premiers de la poule 1(171)
//             Nbre de pts + nom du club
//***************************************************

global $club1;global $club2;global $club3;global $club4;global $club5;
global $club6;global $club7;global $club8;global $club9;global $club10;
global $club11;global $club12;global $club13;global $club14;global $club15;
global $club16;global $club17;global $club18;global $club19;global $club20;



$comite_clmnt_cache ="php".''.$comite.''."_clmnt_cache";

$poule1='171';
$poule2='172';
$poule3='173';
$poule4='174';
$poule5='175';

require ("../../connect/connexion2.php");
$tabEquipe = array();
$tabPoints =array();
$requete = "	select NOM, POINTS
						from $comite_clmnt_cache
						where ID_CHAMP=$poule1
						ORDER BY POINTS desc limit 0,4";

					$result = mysql_query($requete) ;
					while ($row = mysql_fetch_array($result))
							{
							$tabEquipe1[] = $row[0];
					 		$tabPoints1[] = $row[1];	
							}
$A1P1 = $tabPoints1[0].' '.$tabEquipe1[0]; 				
$A2P1 = $tabPoints1[1].' '.$tabEquipe1[1];	
$A3P1 = $tabPoints1[2].' '.$tabEquipe1[2];	
$A4P1 = $tabPoints1[3].' '.$tabEquipe1[3]; 	


//****************************************************
// Récupération des 4 premiers de la poule 1(172)
//             Nbre de pts + nom du club
//***************************************************
$tabEquipe = array();
$tabPoints =array();
$requete = "	select NOM, POINTS
						from $comite_clmnt_cache
						where ID_CHAMP=$poule2
						ORDER BY POINTS desc limit 0,4";
			
					$result = mysql_query($requete) ;
					while ($row = mysql_fetch_array($result))
							{
							$tabEquipe2[] = $row[0];
					 		$tabPoints2[] = $row[1];	
							}	


$A1P2 = $tabPoints2[0].' '.$tabEquipe2[0];				
$A2P2 = $tabPoints2[1].' '.$tabEquipe2[1];	
$A3P2 = $tabPoints2[2].' '.$tabEquipe2[2]; 
$A4P2 = $tabPoints2[3].' '.$tabEquipe2[3];
 


//****************************************************
// Récupération des 4 premiers de la poule 1(173)
//             Nbre de pts + nom du club
//***************************************************


$tabEquipe = array();
$tabPoints =array();
$requete = "	select NOM, POINTS
						from $comite_clmnt_cache
						where ID_CHAMP=$poule3
						ORDER BY POINTS desc limit 0,4";
			
		//$res= $conn ->query ($requete);
		//while ($data = mysqli_fetch_array ($res))
					$result = mysql_query($requete) ;
					while ($row = mysql_fetch_array($result))
							{
							$tabEquipe3[] = $row['NOM'];
					 		$tabPoints3[] = $row['POINTS'];	
							}


$A1P3 = $tabPoints3[0].''.$tabEquipe3[0];			
$A2P3 = $tabPoints3[1].''.$tabEquipe3[1];
$A3P3=  $tabPoints3[2].''.$tabEquipe3[2];
$A4P3 = $tabPoints3[3].''.$tabEquipe3[3]; 


//****************************************************
// Récupération des 4 premiers de la poule 1(174)
//             Nbre de pts + nom du club
//***************************************************

$tabEquipe = array();
$tabPoints =array();
$requete = "	select NOM, POINTS
						from $comite_clmnt_cache
						where ID_CHAMP=$poule4
						ORDER BY POINTS desc limit 0,4";
			
					$result = mysql_query($requete) ;
					while ($row = mysql_fetch_array($result))
							{
							$tabEquipe4[] = $row['NOM'];
					 		$tabPoints4[] = $row['POINTS'];	
							}


$A1P4 = $tabPoints4[0].' '.$tabEquipe4[0];					
$A2P4 = $tabPoints4[1].' '.$tabEquipe4[1];
$A3P4=  $tabPoints4[2].' '.$tabEquipe4[2];	
$A4P4 = $tabPoints4[3].' '.$tabEquipe4[3];


$tabEquipe = array();
$tabPoints =array();
$requete = "	select NOM, POINTS
						from $comite_clmnt_cache
						where ID_CHAMP=$poule5
						ORDER BY POINTS desc limit 0,4";
			
		$result = mysql_query($requete) ;
					while ($row = mysql_fetch_array($result))
							{
							$tabEquipe5[] = $row['NOM'];
					 		$tabPoints5[] = $row['POINTS'];	
							}

	

$A1P5 = $tabPoints5[0].' '.$tabEquipe5[0];					
$A2P5 = $tabPoints5[1].' '.$tabEquipe5[1];
$A3P5=  $tabPoints5[2].' '.$tabEquipe5[2];
$A4P5 = $tabPoints5[3].' '.$tabEquipe5[3];






/*
//$monArray= array($PTS2P1 , $PTS2P2, $PTS2P3 , $PTS2P4, $PTS2P5);
//$monArray= array($A2P1=>$PTS2P1 , $A2P2=>$PTS2P2, $A2P3=>$PTS2P3 , $A2P4=>$PTS2P4, $A2P5=>$PTS2P5);
*/

//Création d'un tableau avec tous les Premiers de poule
$monArray= array($A1P1 , $A1P2, $A1P3 , $A1P4, $A1P5);
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
$sousTableau5=array_slice($monArray,4,1); 



//echo "<br />";
$club1 = substr($sousTableau1[0],2,20).' '."(".''.substr($sousTableau1[0],0,2).''.")";
$club2 = substr($sousTableau2[0],2,20).' '."(".''.substr($sousTableau2[0],0,2).''.")";
$club3 = substr($sousTableau3[0],2,20).' '."(".''.substr($sousTableau3[0],0,2).''.")";
$club4 = substr($sousTableau4[0],2,20).' '."(".''.substr($sousTableau4[0],0,2).''.")";;
$club5 = substr($sousTableau5[0],2,20).' '."(".''.substr($sousTableau5[0],0,2).''.")";

?>


<?php


//Création d'un tableau avec tous les second de poule
$monArray= array($A2P1 , $A2P2, $A2P3 , $A2P4, $A2P5);
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



//echo "<br />";
$club6 = substr($sousTableau6[0],2,20).' '."(".''.substr($sousTableau6[0],0,2).''.")";
$club7 = substr($sousTableau7[0],2,20).' '."(".''.substr($sousTableau7[0],0,2).''.")";
$club8 = substr($sousTableau8[0],2,20).' '."(".''.substr($sousTableau8[0],0,2).''.")";
$club9 = substr($sousTableau9[0],2,20).' '."(".''.substr($sousTableau9[0],0,2).''.")";;
$club10 = substr($sousTableau10[0],2,20).' '."(".''.substr($sousTableau10[0],0,2).''.")";




//Création d'un tableau avec tous les troisieme de poule
$monArray= array($A3P1 , $A3P2, $A3P3 , $A3P4, $A3P5);
//print_r($monArray);


// tri du tableau
arsort($monArray);
//print_r($monArray);
//echo '<br>';

//Récupération des éléments du tableau un à un
//dabs un tableau chaque fois différents

$sousTableau11=array_slice($monArray,0,1);
$sousTableau12=array_slice($monArray,1,1);
$sousTableau13=array_slice($monArray,2,1);
$sousTableau14=array_slice($monArray,3,1);
$sousTableau15=array_slice($monArray,4,1); 



//echo "<br />";
$club11= substr($sousTableau11[0],2,20).' '."(".''.substr($sousTableau11[0],0,2).''.")";
$club12 = substr($sousTableau12[0],2,20).' '."(".''.substr($sousTableau12[0],0,2).''.")";
$club13 = substr($sousTableau13[0],2,20).' '."(".''.substr($sousTableau13[0],0,2).''.")";
$club14 = substr($sousTableau14[0],2,20).' '."(".''.substr($sousTableau14[0],0,2).''.")";;
$club15 = substr($sousTableau15[0],2,20).' '."(".''.substr($sousTableau15[0],0,2).''.")";

?>



<?php


//Création d'un tableau avec tous les quatrième de poule
$monArray= array($A4P1 , $A4P2, $A4P3 , $A4P4, $A4P5);
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



//echo "<br />";
$club16 = substr($sousTableau16[0],2,20).' '."(".''.substr($sousTableau16[0],0,2).''.")";
$club17 = substr($sousTableau17[0],2,20).' '."(".''.substr($sousTableau17[0],0,2).''.")";
$club18 = substr($sousTableau18[0],2,20).' '."(".''.substr($sousTableau18[0],0,2).''.")";
$club19 = substr($sousTableau19[0],2,20).' '."(".''.substr($sousTableau19[0],0,2).''.")";;
$club20 = substr($sousTableau20[0],2,20).' '."(".''.substr($sousTableau20[0],0,2).''.")";


/*
// affichage des 20 clubs
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
echo "<br />";

echo "---------------";echo "<br />";
echo "barragistes";echo "<br />";
echo "---------------";echo "<br />";

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
*/
}
?>




<?php

//************************************************************
//************************************************************
//************************************************************;
//************************************************************
//************************************************************
//************* promotion HONNEUR à deuxième série*******
//****************************************************
// Récupération des 4 premiers de la poule 1(171)
//             Nbre de pts + nom du club
//***************************************************
function qualifOcc($division, $comite)

{
	
$comite_clmnt_cache ="php".''.$comite.''."_clmnt_cache";	
	
	
global $club1;global $club2;global $club3;global $club4;global $club5;
global $club6;global $club7;global $club8;global $club9;global $club10;
global $club11;global $club12;global $club13;global $club14;global $club15;
global $club16;	
	
	
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
	
require ("../../connect/connexion2.php");
$tabEquipe = array();
$tabPoints =array();
$requete = "	select NOM, POINTS
						from $comite_clmnt_cache
						where ID_CHAMP=$poule1
						ORDER BY POINTS desc limit 0,4";

					$result = mysql_query($requete) ;
					while ($row = mysql_fetch_array($result))
							{
							$tabEquipe1[] = $row[0];
					 		$tabPoints1[] = $row[1];	
							}
$A1P1 = $tabPoints1[0].' '.$tabEquipe1[0]; 				
$A2P1 = $tabPoints1[1].' '.$tabEquipe1[1];	
$A3P1 = $tabPoints1[2].' '.$tabEquipe1[2];	
$A4P1 = $tabPoints1[3].' '.$tabEquipe1[3]; 	


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
// Récupération des 4 premiers de la poule 1(172)
//             Nbre de pts + nom du club
//***************************************************
$tabEquipe = array();
$tabPoints =array();
$requete = "	select NOM, POINTS
						from $comite_clmnt_cache
						where ID_CHAMP=$poule2
						ORDER BY POINTS desc limit 0,4";
			
					$result = mysql_query($requete) ;
					while ($row = mysql_fetch_array($result))
							{
							$tabEquipe2[] = $row[0];
					 		$tabPoints2[] = $row[1];	
							}	


$A1P2 = $tabPoints2[0].' '.$tabEquipe2[0];				
$A2P2 = $tabPoints2[1].' '.$tabEquipe2[1];	
$A3P2 = $tabPoints2[2].' '.$tabEquipe2[2]; 
$A4P2 = $tabPoints2[3].' '.$tabEquipe2[3];
 


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
require ("../../connect/connexion2.php");
$tabEquipe = array();
$tabPoints =array();
$requete = "	select NOM, POINTS
						from $comite_clmnt_cache
						where ID_CHAMP=$poule3
						ORDER BY POINTS desc limit 0,4";
			
		//$res= $conn ->query ($requete);
		//while ($data = mysqli_fetch_array ($res))
					$result = mysql_query($requete) ;
					while ($row = mysql_fetch_array($result))
							{
							$tabEquipe3[] = $row['NOM'];
					 		$tabPoints3[] = $row['POINTS'];	
							}


$A1P3 = $tabPoints3[0].''.$tabEquipe3[0];			
$A2P3 = $tabPoints3[1].''.$tabEquipe3[1];
$A3P3=  $tabPoints3[2].''.$tabEquipe3[2];
$A4P3 = $tabPoints3[3].''.$tabEquipe3[3]; 


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
$requete = "	select NOM, POINTS
						from $comite_clmnt_cache
						where ID_CHAMP=$poule4
						ORDER BY POINTS desc limit 0,4";
			
					$result = mysql_query($requete) ;
					while ($row = mysql_fetch_array($result))
							{
							$tabEquipe4[] = $row['NOM'];
					 		$tabPoints4[] = $row['POINTS'];	
							}


$A1P4 = $tabPoints4[0].' '.$tabEquipe4[0];					
$A2P4 = $tabPoints4[1].' '.$tabEquipe4[1];
$A3P4=  $tabPoints4[2].' '.$tabEquipe4[2];	
$A4P4 = $tabPoints4[3].' '.$tabEquipe4[3];


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
$tabEquipe = array();
$tabPoints =array();
$requete = "	select NOM, POINTS
						from $comite_clmnt_cache
						where ID_CHAMP=$poule5
						ORDER BY POINTS desc limit 0,4";
			
		$result = mysql_query($requete) ;
					while ($row = mysql_fetch_array($result))
							{
							$tabEquipe5[] = $row['NOM'];
					 		$tabPoints5[] = $row['POINTS'];	
							}

	

$A1P5 = $tabPoints5[0].' '.$tabEquipe5[0];					
$A2P5 = $tabPoints5[1].' '.$tabEquipe5[1];
$A3P5=  $tabPoints5[2].' '.$tabEquipe5[2];
$A4P5 = $tabPoints5[3].' '.$tabEquipe5[3];

*/



/*

//$monArray= array($PTS2P1 , $PTS2P2, $PTS2P3 , $PTS2P4, $PTS2P5);
//$monArray= array($A2P1=>$PTS2P1 , $A2P2=>$PTS2P2, $A2P3=>$PTS2P3 , $A2P4=>$PTS2P4, $A2P5=>$PTS2P5);
*/

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
//$sousTableau5=array_slice($monArray,4,1); 



$club1 = substr($sousTableau1[0],2,20).' '."(".''.substr($sousTableau1[0],0,2).''.")";
$club2 = substr($sousTableau2[0],2,20).' '."(".''.substr($sousTableau2[0],0,2).''.")";
$club3 = substr($sousTableau3[0],2,20).' '."(".''.substr($sousTableau3[0],0,2).''.")";
$club4 = substr($sousTableau4[0],2,20).' '."(".''.substr($sousTableau4[0],0,2).''.")";;
//$club5 = substr($sousTableau5[0],2,20).' '."(".''.substr($sousTableau5[0],0,2).''.")";

?>


<?php


//Création d'un tableau avec tous les second de poule
$monArray= array($A2P1 , $A2P2, $A2P3 , $A2P4);
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
//$sousTableau10=array_slice($monArray,4,1); 


$club5 = substr($sousTableau5[0],2,20).' '."(".''.substr($sousTableau5[0],0,2).''.")";
$club6 = substr($sousTableau6[0],2,20).' '."(".''.substr($sousTableau6[0],0,2).''.")";
$club7 = substr($sousTableau7[0],2,20).' '."(".''.substr($sousTableau7[0],0,2).''.")";
$club8 = substr($sousTableau8[0],2,20).' '."(".''.substr($sousTableau8[0],0,2).''.")";;
//$club10 = substr($sousTableau10[0],2,20).' '."(".''.substr($sousTableau10[0],0,2).''.")";

?>


<?php


//Création d'un tableau avec tous les troisieme de poule
$monArray= array($A3P1 , $A3P2, $A3P3 , $A3P4);
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
//$sousTableau15=array_slice($monArray,4,1); 



$club9= substr($sousTableau9[0],2,20).' '."(".''.substr($sousTableau9[0],0,2).''.")";
$club10 = substr($sousTableau10[0],2,20).' '."(".''.substr($sousTableau10[0],0,2).''.")";
$club11 = substr($sousTableau11[0],2,20).' '."(".''.substr($sousTableau11[0],0,2).''.")";
$club12 = substr($sousTableau12[0],2,20).' '."(".''.substr($sousTableau12[0],0,2).''.")";;
//$club15 = substr($sousTableau15[0],2,20).' '."(".''.substr($sousTableau15[0],0,2).''.")";




//Création d'un tableau avec tous les quatrième de poule
$monArray= array($A4P1 , $A4P2, $A4P3 , $A4P4);
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
//$sousTableau20=array_slice($monArray,4,1); 




$club13 = substr($sousTableau13[0],2,20).' '."(".''.substr($sousTableau13[0],0,2).''.")";
$club14 = substr($sousTableau14[0],2,20).' '."(".''.substr($sousTableau14[0],0,2).''.")";
$club15 = substr($sousTableau15[0],2,20).' '."(".''.substr($sousTableau15[0],0,2).''.")";
$club16 = substr($sousTableau16[0],2,20).' '."(".''.substr($sousTableau16[0],0,2).''.")";;
//$club20 = substr($sousTableau20[0],2,20).' '."(".''.substr($sousTableau20[0],0,2).''.")";

?>









<?php
/*
echo "<br />";
echo $club1;echo "<br />";
echo $club2;echo "<br />";
echo $club3;echo "<br />";
echo $club4;echo "<br />";
echo "<br />";
echo "<br />";
echo $club5;echo "<br />";
echo $club6;echo "<br />";
echo $club7;echo "<br />";
echo $club8;echo "<br />";


echo "<br />";
echo "<br />";

echo $club9;echo "<br />";
echo $club10;echo "<br />";
echo $club11;echo "<br />";
echo $club12;echo "<br />";
echo "<br />";
echo "<br />";


echo $club13;echo "<br />";
echo $club14;echo "<br />";
echo $club15;echo "<br />";
echo $club16;echo "<br />";
*/

}
?>

<?php
// ******  RESERVE oCCITANIE  ***********



function qualifReserveOCC($division, $comite)

{
	
$comite_clmnt_cache ="php".''.$comite.''."_clmnt_cache";	
	
	
global $club1;global $club2;global $club3;global $club4;global $club5;
global $club6;global $club7;global $club8;global $club9;global $club10;
global $club11;global $club12;global $club13;global $club14;global $club15;
global $club16;global $club17;global $club18;global $club19;global $club20;global $club21;
global $club22;global $club23;global $club24;global $club25;global $club26;
global $club27;global $club28;global $club29;global $club30;global $club31;
global $club32;	global $club33;	global $club34;	global $club35;	
	
	
	if ($division == 270)
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
	
require ("../../connect/connexion2.php");
$tabEquipe = array();
$tabPoints =array();
$requete = "	select NOM, POINTS
						from $comite_clmnt_cache
						where ID_CHAMP=$poule1
						ORDER BY POINTS desc limit 0,7";

					$result = mysql_query($requete) ;
					while ($row = mysql_fetch_array($result))
							{
							$tabEquipe1[] = $row[0];
					 		$tabPoints1[] = $row[1];	
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
// Récupération des 4 premiers de la poule 1(172)
//             Nbre de pts + nom du club
//***************************************************
$tabEquipe = array();
$tabPoints =array();
$requete = "	select NOM, POINTS
						from $comite_clmnt_cache
						where ID_CHAMP=$poule2
						ORDER BY POINTS desc limit 0,7";
			
					$result = mysql_query($requete) ;
					while ($row = mysql_fetch_array($result))
							{
							$tabEquipe2[] = $row[0];
					 		$tabPoints2[] = $row[1];	
							}	


$A1P2 = $tabPoints2[0].' '.$tabEquipe2[0];				
$A2P2 = $tabPoints2[1].' '.$tabEquipe2[1];	
$A3P2 = $tabPoints2[2].' '.$tabEquipe2[2]; 
$A4P2 = $tabPoints2[3].' '.$tabEquipe2[3];
$A5P2 = $tabPoints2[4].' '.$tabEquipe2[4]; 
$A6P2 = $tabPoints2[5].' '.$tabEquipe2[5]; 	
$A7P2 = $tabPoints2[6].' '.$tabEquipe2[6];


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
require ("../../connect/connexion2.php");
$tabEquipe = array();
$tabPoints =array();
$requete = "	select NOM, POINTS
						from $comite_clmnt_cache
						where ID_CHAMP=$poule3
						ORDER BY POINTS desc limit 0,7";
			
		//$res= $conn ->query ($requete);
		//while ($data = mysqli_fetch_array ($res))
					$result = mysql_query($requete) ;
					while ($row = mysql_fetch_array($result))
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
$requete = "	select NOM, POINTS
						from $comite_clmnt_cache
						where ID_CHAMP=$poule4
						ORDER BY POINTS desc limit 0,7";
			
					$result = mysql_query($requete) ;
					while ($row = mysql_fetch_array($result))
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
$requete = "	select NOM, POINTS
						from $comite_clmnt_cache
						where ID_CHAMP=$poule5
						ORDER BY POINTS desc limit 0,7";
			
		$result = mysql_query($requete) ;
					while ($row = mysql_fetch_array($result))
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
//dabs un tableau chaque fois différents

$sousTableau1=array_slice($monArray,0,1);
$sousTableau2=array_slice($monArray,1,1);
$sousTableau3=array_slice($monArray,2,1);
$sousTableau4=array_slice($monArray,3,1);
$sousTableau5=array_slice($monArray,4,1); 



$club1 = substr($sousTableau1[0],2,20).' '."(".''.substr($sousTableau1[0],0,2).''.")";
$club2 = substr($sousTableau2[0],2,20).' '."(".''.substr($sousTableau2[0],0,2).''.")";
$club3 = substr($sousTableau3[0],2,20).' '."(".''.substr($sousTableau3[0],0,2).''.")";
$club4 = substr($sousTableau4[0],2,20).' '."(".''.substr($sousTableau4[0],0,2).''.")";
$club5 = substr($sousTableau5[0],2,20).' '."(".''.substr($sousTableau5[0],0,2).''.")";

?>


<?php


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


$club6 = substr($sousTableau6[0],2,20).' '."(".''.substr($sousTableau5[0],0,2).''.")";
$club7 = substr($sousTableau7[0],2,20).' '."(".''.substr($sousTableau6[0],0,2).''.")";
$club8 = substr($sousTableau8[0],2,20).' '."(".''.substr($sousTableau7[0],0,2).''.")";
$club9 = substr($sousTableau9[0],2,20).' '."(".''.substr($sousTableau8[0],0,2).''.")";;
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
$club14 = substr($sousTableau14[0],2,20).' '."(".''.substr($sousTableau14[0],0,2).''.")";;
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
$club19 = substr($sousTableau19[0],2,20).' '."(".''.substr($sousTableau19[0],0,2).''.")";;
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
$club24 = substr($sousTableau24[0],2,20).' '."(".''.substr($sousTableau24[0],0,2).''.")";;
$club25 = substr($sousTableau25[0],2,20).' '."(".''.substr($sousTableau25[0],0,2).''.")";


//Création d'un tableau avec tous les 6ME de poule
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
$club29 = substr($sousTableau29[0],2,20).' '."(".''.substr($sousTableau29[0],0,2).''.")";;
$club30 = substr($sousTableau30[0],2,20).' '."(".''.substr($sousTableau30[0],0,2).''.")";



//Création d'un tableau avec tous les 7ME de poule
$monArray= array($A7P1 , $A7P2, $A7P3 , $A7P4 , $A7P5);
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




$club31 = substr($sousTableau31[0],2,20).' '."(".''.substr($sousTableau31[0],0,2).''.")";
$club32 = substr($sousTableau32[0],2,20).' '."(".''.substr($sousTableau32[0],0,2).''.")";
$club33 = substr($sousTableau33[0],2,20).' '."(".''.substr($sousTableau33[0],0,2).''.")";
$club34 = substr($sousTableau34[0],2,20).' '."(".''.substr($sousTableau34[0],0,2).''.")";;
$club35 = substr($sousTableau35[0],2,20).' '."(".''.substr($sousTableau35[0],0,2).''.")";


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










