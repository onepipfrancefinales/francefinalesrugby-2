





<?php

//************************************************************
//************************************************************
//************************************************************;
//************************************************************
//************************************************************
//************* promotion HONNEUR*******
//****************************************************
// Récupération des 4 premiers de la poule 1(171)
//             Nbre de pts + nom du club
//***************************************************

//triClasspromotionHonneur


$poule1='181';
$poule2='182';
$poule3='183';
$poule4='184';
//$poule5='175';

require ("../connect/connexion2.php");
$tabEquipe = array();
$tabPoints =array();
$requete = "	select NOM, POINTS
						from phpab_clmnt_cache
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

?>


<?php
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
						from phpab_clmnt_cache
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
 

?>


<?php
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
$conn = mysqli_connect("127.0.0.1", "root", "", "onepip-france-db2");
$tabEquipe = array();
$tabPoints =array();
$requete = "	select NOM, POINTS
						from phpab_clmnt_cache
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

?>
<br/><br/>
<?php
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
						from phpab_clmnt_cache
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

?>

<?php
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
						from phpab_clmnt_cache
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
?>
<?php


/*

//$monArray= array($PTS2P1 , $PTS2P2, $PTS2P3 , $PTS2P4, $PTS2P5);
//$monArray= array($A2P1=>$PTS2P1 , $A2P2=>$PTS2P2, $A2P3=>$PTS2P3 , $A2P4=>$PTS2P4, $A2P5=>$PTS2P5);
*/

//Création d'un tableau avec tous les Premiers de poule
$monArray= array($A1P1 , $A1P2, $A1P3 , $A1P4);
print_r($monArray);

echo '<br>';
// tri du tableau
arsort($monArray);
print_r($monArray);
echo '<br>';

//Récupération des éléments du tableau un à un
//dabs un tableau chaque fois différents

$sousTableau1=array_slice($monArray,0,1);
$sousTableau2=array_slice($monArray,1,1);
$sousTableau3=array_slice($monArray,2,1);
$sousTableau4=array_slice($monArray,3,1);
//$sousTableau5=array_slice($monArray,4,1); 



echo "<br />";
$club1 = substr($sousTableau1[0],2,15).' '."(".''.substr($sousTableau1[0],0,2).''.")";
$club2 = substr($sousTableau2[0],2,15).' '."(".''.substr($sousTableau2[0],0,2).''.")";
$club3 = substr($sousTableau3[0],2,15).' '."(".''.substr($sousTableau3[0],0,2).''.")";
$club4 = substr($sousTableau4[0],2,15).' '."(".''.substr($sousTableau4[0],0,2).''.")";;
//$club5 = substr($sousTableau5[0],2,15).' '."(".''.substr($sousTableau5[0],0,2).''.")";

?>


<?php


//Création d'un tableau avec tous les second de poule
$monArray= array($A2P1 , $A2P2, $A2P3 , $A2P4);
print_r($monArray);


// tri du tableau
arsort($monArray);
print_r($monArray);
echo '<br>';

//Récupération des éléments du tableau un à un
//dabs un tableau chaque fois différents

$sousTableau5=array_slice($monArray,0,1);
$sousTableau6=array_slice($monArray,1,1);
$sousTableau7=array_slice($monArray,2,1);
$sousTableau8=array_slice($monArray,3,1);
//$sousTableau10=array_slice($monArray,4,1); 



echo "<br />";
$club5 = substr($sousTableau5[0],2,20).' '."(".''.substr($sousTableau5[0],0,2).''.")";
$club6 = substr($sousTableau6[0],2,20).' '."(".''.substr($sousTableau6[0],0,2).''.")";
$club7 = substr($sousTableau7[0],2,20).' '."(".''.substr($sousTableau7[0],0,2).''.")";
$club8 = substr($sousTableau8[0],2,20).' '."(".''.substr($sousTableau8[0],0,2).''.")";;
//$club10 = substr($sousTableau10[0],2,20).' '."(".''.substr($sousTableau10[0],0,2).''.")";

?>


<?php


//Création d'un tableau avec tous les troisieme de poule
$monArray= array($A3P1 , $A3P2, $A3P3 , $A3P4);
print_r($monArray);


// tri du tableau
arsort($monArray);
print_r($monArray);
echo '<br>';

//Récupération des éléments du tableau un à un
//dabs un tableau chaque fois différents

$sousTableau9= array_slice($monArray,0,1);
$sousTableau10= array_slice($monArray,1,1);
$sousTableau11= array_slice($monArray,2,1);
$sousTableau12= array_slice($monArray,3,1);
//$sousTableau15=array_slice($monArray,4,1); 



echo "<br />";
$club9= substr($sousTableau9[0],2,20).' '."(".''.substr($sousTableau9[0],0,2).''.")";
$club10 = substr($sousTableau10[0],2,20).' '."(".''.substr($sousTableau10[0],0,2).''.")";
$club11 = substr($sousTableau11[0],2,20).' '."(".''.substr($sousTableau11[0],0,2).''.")";
$club12 = substr($sousTableau12[0],2,20).' '."(".''.substr($sousTableau12[0],0,2).''.")";;
//$club15 = substr($sousTableau15[0],2,20).' '."(".''.substr($sousTableau15[0],0,2).''.")";

?>



<?php


//Création d'un tableau avec tous les quatrième de poule
$monArray= array($A4P1 , $A4P2, $A4P3 , $A4P4);
print_r($monArray);


// tri du tableau
arsort($monArray);
print_r($monArray);
echo '<br>';

//Récupération des éléments du tableau un à un
//dabs un tableau chaque fois différents

$sousTableau13=array_slice($monArray,0,1);
$sousTableau14=array_slice($monArray,1,1);
$sousTableau15=array_slice($monArray,2,1);
$sousTableau16=array_slice($monArray,3,1);
//$sousTableau20=array_slice($monArray,4,1); 



echo "<br />";
$club13 = substr($sousTableau13[0],2,20).' '."(".''.substr($sousTableau13[0],0,2).''.")";
$club14 = substr($sousTableau14[0],2,20).' '."(".''.substr($sousTableau14[0],0,2).''.")";
$club15 = substr($sousTableau15[0],2,20).' '."(".''.substr($sousTableau15[0],0,2).''.")";
$club16 = substr($sousTableau16[0],2,20).' '."(".''.substr($sousTableau16[0],0,2).''.")";;
//$club20 = substr($sousTableau20[0],2,20).' '."(".''.substr($sousTableau20[0],0,2).''.")";

?>









<?php

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
;


?>










