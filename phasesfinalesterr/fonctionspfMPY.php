<?php
//***********************************************************************/
//      																*/
//			Affichage de la division dans le bandeau					*/
//											                         	*/
//***********************************************************************/

function affichage($division)
{
if ($division== 170)
//	echo "Honneur Honneur Honneur Honneur Honneur Honneur HonneurHonneur Honneur Honneur Honneur Honneur Honneur Honneur ";
	echo "- Honneur -";
elseif ($division == 180)
//	echo "Promotion honneur Promotion honneur Promotion honneur Promotion honneur Promotion honneur  Promotion honneur  ";
	echo "- Promotion honneur -";
elseif ($division == 190)
//	echo "1re S&eacute;rie 1re S&eacute;rie 1re S&eacute;rie 1re S&eacute;rie 1re S&eacute;rie 1re S&eacute;rie 1re S&eacute;rie 1re S&eacute;rie 1re S&eacute;rie 1re S&eacute;rie 1re S&eacute;rie ";
	echo "- 1re S&eacute;rie -";
elseif ($division == 200)
//	echo "2me S&eacute;rie 2me S&eacute;rie 2me S&eacute;rie 2me S&eacute;rie 2me S&eacute;rie 2me S&eacute;rie 2me S&eacute;rie 2me S&eacute;rie 2me S&eacute;rie 2me S&eacute;rie 2me S&eacute;rie ";
	echo "- 2me S&eacute;rie -";
elseif ($division == 210)
//	echo "3me S&eacute;rie 3me S&eacute;rie 3me S&eacute;rie 3me S&eacute;rie 3me S&eacute;rie 3me S&eacute;rie 3me S&eacute;rie 3me S&eacute;rie 3me S&eacute;rie 3me S&eacute;rie 3me S&eacute;rie ";
	echo "- 3me S&eacute;rie -";
elseif ($division == 220)
//	echo "4me S&eacute;rie 4me S&eacute;rie 4me S&eacute;rie 4me S&eacute;rie 4me S&eacute;rie 4me S&eacute;rie 4me S&eacute;rie 4me S&eacute;rie 4me S&eacute;rie 4me S&eacute;rie 4me S&eacute;rie ";	
	echo "- 4me S&eacute;rie -";
elseif ($division == 270)
//	echo "R&eacute;serve R&eacute;serve R&eacute;serve R&eacute;serve R&eacute;serve R&eacute;serve R&eacute;serve R&eacute;serve R&eacute;serve R&eacute;serve R&eacute;serve R&eacute;serve R&eacute;serve R&eacute;serve ";
	echo "- R&eacute;serve honneur -";
elseif ($division == 9180)
//	echo "R&eacute;serve Promotion R&eacute;serve Promotion R&eacute;serve Promotion R&eacute;serve Promotion R&eacute;serve Promotion R&eacute;serve Promotion ";		
	echo "- R&eacute;serve promotion honneur -";
elseif ($division == 9190)
//	echo "R&eacute;serve 1re S&eacute;rie R&eacute;serve 1re S&eacute;rie R&eacute;serve 1re S&eacute;rie R&eacute;serve 1re S&eacute;rie R&eacute;serve 1re S&eacute;rie R&eacute;serve 1re S&eacute;rie ";
	echo "- R&eacute;serve S&eacute;rie -";
elseif ($division == 9200)
	echo "- R&eacute;serve 2me S&eacute;rie -";
//	echo "R&eacute;serve 2me S&eacute;rie R&eacute;serve 2me S&eacute;rie R&eacute;serve 2me S&eacute;rie R&eacute;serve 2me S&eacute;rie R&eacute;serve 2me S&eacute;rie R&eacute;serve 2me S&eacute;rie R&eacute;serve";
else
		echo "R&eacute;serve 4me S&eacute;rie  ";

}
?>


<?php
//mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); 
//mysql_select_db("onepip-france-db2"); 
function lieux($annee, $bdd)
{
	
	
}



function barragesQuarts($annee, $bdd)

{
//require ("../../connect/connexion2.php");

//-------Sélection des dates et lieux des rencontres-------------------------
//global $barrage;
global $quart1; global $quart2; global $quart3;global $quart4;
global $demi1; global $demi2; global $finale;

	if (isset ($_GET['division'])) $division = $_GET['division']; else $division='-';

$bdcomiteAnnee="phpmpy_pf".$annee;
//echo $bdcomiteAnnee;

$requete =$bdd->query( "SELECT Quart4, Quart3, Quart2, Quart1, Demi1, Demi2, Finale 
				FROM $bdcomiteAnnee 
				WHERE division=$division "); 
	while ($row = $requete->fetch())
			{ 
		 
			$quart4=$row[0];
			$quart3=$row[1];
			$quart2=$row[2];
			$quart1=$row[3];
	    	$demi1=$row[4];
			$demi2=$row[5];
	    	$finale=$row[6]; 
			}


//--------Sélection des équipes --------------------------------
	
	global $clubA8001;global $clubA8002;global $clubA8003;global $clubA8004;
	global $clubA8005;global $clubA8006;global $clubA8007;global $clubA8008;
	
	global $clubA4001;global $clubA4002;global $clubA4003;global $clubA4004;
	global $clubA4005;global $clubA4006;global $clubA4007;global $clubA4008;
	
	global $clubA2001;global $clubA2002;global $clubA2003;global $clubA2004;

	global $clubA1001;global $clubA1002;global $champion;
	
	
	
	global $A8001;global $A8002;global $A8003;global $A8004;
	global $A8005;global $A8006;global $A8007;global $A8008;
	
	
	global $A4001;global $A4002;global $A4003;global $A4004;
	global $A4005;global $A4006;global $A4007;global $A4008;

	global $A2001;global $A2002;global $A2003;global $A2004;

	global $A1001;global $A1002;
	

 if (isset ($clubA8001)) $clubA8001 = $clubA8001; else $clubA8001='-'; 
 if (isset ($tabEquipes[1])) $clubA8002 = $tabEquipes[1]; else $clubA8002='-';
 if (isset ($tabEquipes[2])) $clubA8003 = $tabEquipes[2]; else $clubA8003='-';
 if (isset ($tabEquipes[3])) $clubA8004 = $tabEquipes[3]; else $clubA8004='-';
	
 if (isset ($tabEquipes[4])) $clubA8005 = $tabEquipes[4]; else $clubA8005='-';
 if (isset ($tabEquipes[5])) $clubA8006 = $tabEquipes[5]; else $clubA8006='-';
 if (isset ($tabEquipes[6])) $clubA8007 = $tabEquipes[6]; else $clubA8007='-';
 if (isset ($tabEquipes[7])) $clubA8008 = $tabEquipes[7]; else $clubA8008='-';
		
 if (isset ($tabEquipes[8])) $clubA8009 = $tabEquipes[8]; else $clubA8009='-'; 
 if (isset ($tabEquipes[9])) $clubA8010 = $tabEquipes[9]; else $clubA8010='-';
 if (isset ($tabEquipes[10])) $clubA8011 = $tabEquipes[10]; else $clubA8011='-';
 if (isset ($tabEquipes[11])) $clubA8012 = $tabEquipes[11]; else $clubA8012='-';
	
 if (isset ($tabEquipes[12])) $clubA8013 = $tabEquipes[12]; else $clubA8013='-';
 if (isset ($tabEquipes[13])) $clubA8014 = $tabEquipes[13]; else $clubA8014='-';
 if (isset ($tabEquipes[14])) $clubA8015 = $tabEquipes[14]; else $clubA8015='-';
 if (isset ($tabEquipes[15])) $clubA8016 = $tabEquipes[15]; else $clubA8016='-';
 
 
 
if (isset ($clubA4001)) $clubA4001 = $clubA4001; else $clubA4001='-'; 
if (isset ($clubA4003)) $clubA4003 = $clubA4003; else $clubA4003='-';
if (isset ($clubA4005)) $clubA4005 = $clubA4005; else $clubA4005='-';
if (isset ($clubA4007)) $clubA4007 = $clubA4007; else $clubA4007='-';





//clubA8001
$clubA="-";
//echo "test : ".$bdcomiteAnnee;
$requete =$bdd->query( "SELECT bdclubs.nom_1
			FROM $bdcomiteAnnee
            INNER JOIN bdclubs 
			ON $bdcomiteAnnee.clubA8001=bdclubs.code
			WHERE $bdcomiteAnnee.id='$division' "); 
					//$result = mysql_query($requete) ;
					while ($row = $requete->fetch())
								{ 
								$clubA8001 = $row[0];
								} 


//clubA8002
$requete =$bdd->query ("SELECT bdclubs.nom_1
			FROM $bdcomiteAnnee
            INNER JOIN bdclubs ON $bdcomiteAnnee.clubA8002=bdclubs.code
			WHERE $bdcomiteAnnee.id='$division' "); 
					//$result = mysql_query($requete) ;
					while ($row = $requete->fetch() )
								{ 
								$clubA8002 = $row[0];
								} 
							

//clubA8003

$requete =$bdd->query ("SELECT bdclubs.nom_1
			FROM $bdcomiteAnnee
            INNER JOIN bdclubs ON $bdcomiteAnnee.clubA8003=bdclubs.code
			WHERE $bdcomiteAnnee.id='$division' "); 

 	//$result = mysql_query($requete) ;
					while ($row = $requete->fetch())
				{ 
				$clubA8003 = $row[0];
				} 

//clubA8004
$requete =$bdd->query ("SELECT bdclubs.nom_1
			FROM $bdcomiteAnnee
            INNER JOIN bdclubs ON $bdcomiteAnnee.clubA8004=bdclubs.code
			WHERE $bdcomiteAnnee.id='$division' "); 

 	//$result = mysql_query($requete) ;
					while ($row = $requete->fetch())
				{ 
				$clubA8004 = $row[0];
				} 
				
//clubA8005
$requete =$bdd->query ("SELECT bdclubs.nom_1
			FROM $bdcomiteAnnee
            INNER JOIN bdclubs ON $bdcomiteAnnee.clubA8005=bdclubs.code
			WHERE $bdcomiteAnnee.id='$division' "); 

 	//$result = mysql_query($requete) ;
					while ($row = $requete->fetch())
				{ 
				$clubA8005 = $row[0];
				} 
				
		
//clubA8006
$requete =$bdd->query ("SELECT bdclubs.nom_1
			FROM $bdcomiteAnnee
            INNER JOIN bdclubs ON $bdcomiteAnnee.clubA8006=bdclubs.code
			WHERE $bdcomiteAnnee.id='$division' "); 

 	//$result = mysql_query($requete) ;
					while ($row = $requete->fetch())
				{ 
				$clubA8006 = $row[0];
				} 


//clubA8007
$requete =$bdd->query ("SELECT bdclubs.nom_1
			FROM $bdcomiteAnnee
            INNER JOIN bdclubs ON $bdcomiteAnnee.clubA8007=bdclubs.code
			WHERE $bdcomiteAnnee.id='$division' "); 

 	//$result = mysql_query($requete) ;
					while ($row = $requete->fetch())
				{ 
				$clubA8007 = $row[0];
				}  


//clubA8008
$requete =$bdd->query ("SELECT bdclubs.nom_1
			FROM $bdcomiteAnnee
            INNER JOIN bdclubs ON $bdcomiteAnnee.clubA8008=bdclubs.code
			WHERE $bdcomiteAnnee.id='$division' "); 

 	//$result = mysql_query($requete) ;
					while ($row = $requete->fetch())
				{ 
				$clubA8008 = $row[0];
				} 

?> 

<?php 
// ----Récupération des scores des barrages----------------------

if (isset ($A8001)) $A8001 = $A8001; else $A8001='-'; 
if (isset ($A8002)) $A8002 = $A8002; else $A8002='-'; 
if (isset ($A8003)) $A8003 = $A8003; else $A8003='-'; 
if (isset ($A8004)) $A8004 = $A8004; else $A8004='-'; 

if (isset ($A8005)) $A8005 = $A8005; else $A8005='-'; 
if (isset ($A8006)) $A8006 = $A8006; else $A8006='-'; 
if (isset ($A8007)) $A8007 = $A8007; else $A8007='-'; 
if (isset ($A8008)) $A8008 = $A8008; else $A8008='-'; 


if (isset ($A4001)) $A4001 = $A4001; else $A4001='-'; 
if (isset ($A4002)) $A4002 = $A4002; else $A4002='-'; 
if (isset ($A4003)) $A4003 = $A4003; else $A4003='-'; 
if (isset ($A4004)) $A4004 = $A4004; else $A4004='-'; 

if (isset ($A4005)) $A4005 = $A4005; else $A4005='-'; 
if (isset ($A4006)) $A4006 = $A4006; else $A4006='-'; 
if (isset ($A4007)) $A4007 = $A4007; else $A4007='-'; 
if (isset ($A4008)) $A4008 = $A4008; else $A4008='-'; 

if (isset ($A2001)) $A2001 = $A2001; else $A2001='-'; 
if (isset ($A2002)) $A2002 = $A2002; else $A2002='-'; 
if (isset ($A2003)) $A2003 = $A2003; else $A2003='-'; 
if (isset ($A2004)) $A2004 = $A2004; else $A2004='-';


if (isset ($A1001)) $A1001 = $A1001; else $A1001='-'; 
if (isset ($A1002)) $A1002 = $A1002; else $A1002='-'; 


$query =$bdd->query( "	SELECT id,  A8001, A8002, A8003, A8004, A8005, A8006, A8007, A8008
			FROM  $bdcomiteAnnee
			WHERE id='$division' "); 
 				//$result = mysql_query($query);
 				while ($row = $query->fetch())
					{ 
					$A8001 = $row[1];
					$A8002 = $row[2];
					$A8003 = $row[3];
					$A8004 = $row[4];
					$A8005 = $row[5];
					$A8006 = $row[6];
					$A8007 = $row[7];
					$A8008 = $row[8];
					}
 
 
// ----Récupération des scores des Quarts----------------------

$result =$bdd->query( "	SELECT id,  A4001, A4002,  A4003, A4004, A4005, A4006, A4007 ,A4008
			FROM  $bdcomiteAnnee 
			WHERE id='$division' "); 
// $result = mysql_query($query);
 	while ($row = $result->fetch())
	{ 
	$A4001 = $row[1];
	$A4002 = $row[2];
	$A4003 = $row[3];
	$A4004 = $row[4];
	$A4005 = $row[5];
	$A4006 = $row[6];
	$A4007 = $row[7];
	$A4008 = $row[8];
	}
 
?>

<?php	$clubA="-"; ?>

<?php
//------Barrages------Affichage résultats---------
if (is_numeric($A8001) && is_numeric($A8002))
{
	if (($A8001==NULL) OR ($A8001 + $A8002 == 0)) $A8001="-"; else { $A8001=$A8001; }
}	
	
if (is_numeric($A8001) && is_numeric($A8002))
{	
	if (($A8002==NULL) OR ($A8001 + $A8002 == 0)) $A8002="-"; else { $A8002=$A8002; }
}
if (is_numeric($A8003) && is_numeric($A8004))
{
		if (($A8003==NULL) OR ($A8003 + $A8004 == 0)) $A8003="-"; else { $A8003=$A8003; }
}
if (is_numeric($A8003) && is_numeric($A8004))
{
		if (($A8004==NULL) OR ($A8003 + $A8004 == 0)) $A8004="-"; else { $A8004=$A8004; }
}		
		if ($A8005==99 AND $A8006==0)
			{
				$A8005 = "Q";
				$A8006 = "-";
			}
			
if (is_numeric($A8005) && is_numeric($A8006))
{			
		if (($A8005==NULL) OR ($A8005 + $A8006 == 0)) $A8005="-"; else { $A8005=$A8005; }
}		
if (is_numeric($A8005) && is_numeric($A8006))
{		
		if (($A8006==NULL) OR ($A8005 + $A8006 == 0)) 
			$A8006="-"; 
			else 
			{ 
			$A8006=$A8006; 
			}
}			
if (is_numeric($A8007) && is_numeric($A8008))
{	

	if (($A8007==NULL) OR ($A8007 + $A8008 == 0)) $A8007="-"; else { $A8007=$A8007; }
}
if (is_numeric($A8007) && is_numeric($A8008))
{
		if (($A8008==NULL) OR ($A8007 + $A8008 == 0)) $A8008="-"; else { $A8008=$A8008; }

}
  
if (is_numeric($A8001) && is_numeric($A8002))
{
if ($A8001+$A8002>0){ if ($A8001>$A8002)	{	$clubA4002= $clubA8001; }	else {	$clubA4002= $clubA8002; }} else $clubA4002=$clubA;
}
if (is_numeric($A8003) && is_numeric($A8004))
{
   if ($A8003+$A8004>0){ if ($A8003>$A8004)	{	$clubA4004= $clubA8003;	}	else {	$clubA4004= $clubA8004; }} else $clubA4004=$clubA;
}
if (is_numeric($A8005) && is_numeric($A8006))
{
 if ($A8005+$A8006>0){ if ($A8005>$A8006)	{	$clubA4006= $clubA8005; }	else {	$clubA4006= $clubA8006; }} else $clubA4006=$clubA;
}
if (is_numeric($A8007) && is_numeric($A8008))
{
 if ($A8007+$A8008>0){ if ($A8007>$A8008)	{	$clubA4008= $clubA8007;	}	else {  $clubA4008= $clubA8008; }} else $clubA4008=$clubA;
}
 ?>




 <?php
 //-----------------Séléction des equipes qualifiées en quarts----------------
 
 //clubA4001
$requete =$bdd->query( "SELECT bdclubs.nom_1
			FROM $bdcomiteAnnee
            INNER JOIN bdclubs ON $bdcomiteAnnee.clubA4001=bdclubs.code
			WHERE $bdcomiteAnnee.id='$division' "); 

 	//$result = mysql_query($requete) ;
 	while ($row = $requete->fetch() )
				{ 
				$clubA4001 = $row[0];
				} 
	
//$clubA4001 = substr($clubA,0,20);		
//$logo4001=$logoA;
//$clubA4001 = ($clubA4001.' '.$sigle);
?> 


<?php //clubA4003
$requete =$bdd->query("SELECT bdclubs.nom_1
			FROM $bdcomiteAnnee
            INNER JOIN bdclubs ON $bdcomiteAnnee.clubA4003=bdclubs.code
			WHERE $bdcomiteAnnee.id='$division' "); 

 	//$result = mysql_query($requete) ;
 	while ($row = $requete->fetch() )
				{ 
				$clubA4003 = $row[0];
				} 
				
//$clubA4003 = substr($clubA,0,20);
//$logo4003=$logoA;		
//$clubA4003 = ($clubA4003.' '.$sigle);
?> 

<?php //clubA4005


$requete =$bdd->query("SELECT bdclubs.nom_1
			FROM $bdcomiteAnnee
            INNER JOIN bdclubs ON $bdcomiteAnnee.clubA4005=bdclubs.code
			WHERE $bdcomiteAnnee.id='$division' "); 

 	//$result = mysql_query($requete) ;
 	while ($row = $requete->fetch() )
				{ 
				$clubA4005 = $row[0];
				} 
//$clubA4005 = substr($clubA,0,20);
//$logo4005=$logoA;		
//$clubA4005 = ($clubA4005.' '.$sigle);
?> 

<?php 
//clubA4007
$requete =$bdd->query("SELECT bdclubs.nom_1
			FROM $bdcomiteAnnee
            INNER JOIN bdclubs ON $bdcomiteAnnee.clubA4007=bdclubs.code
			WHERE $bdcomiteAnnee.id='$division' "); 

 	//$result = mysql_query($requete) ;
 	while ($row = $requete->fetch() )
				{ 
				$clubA4007 = $row[0];
				} 
//$clubA4007 = substr($clubA,0,20);
//$logo4007=$logoA;		
//$clubA4007 = ($clubA4007.' '.$sigle);
?> 








<?php 
// --------Récupération des scores des demis et de la finale----------------------
$result =$bdd->query( "	SELECT id,  A2001, A2002,  A2003, A2004 , A1001 , A1002
			FROM  $bdcomiteAnnee
			WHERE id='$division' "); 
			
 //$result = mysql_query($query);
 	while ($row = $result->fetch())
	{ 
	$A2001 = $row[1];
	$A2002 = $row[2];
	$A2003 = $row[3];
	$A2004 = $row[4];
	$A1001 = $row[5];
	$A1002 = $row[6];

}
 
?>




 <?php
 	//------Quarts--------
 
 		if (($A4001==NULL) OR ($A4001 + $A4002 == 0)) $A4001="-"; else { $A4001=$A4001; }

		if (($A4002==NULL) OR ($A4001 + $A4002 == 0)) $A4002="-"; else { $A4002=$A4002; }
		if (($A4003==NULL) OR ($A4003 + $A4004 == 0)) $A4003="-"; else { $A4003=$A4003; }
		if (($A4004==NULL) OR ($A4003 + $A4004 == 0)) $A4004="-"; else { $A4004=$A4004; }
 		if (($A4001==NULL) OR ($A4005 + $A4006 == 0)) $A4005="-"; else { $A4005=$A4005; }
		if (($A4002==NULL) OR ($A4005 + $A4006 == 0)) $A4006="-"; else { $A4006=$A4006; }
		if (($A4003==NULL) OR ($A4007 + $A4008 == 0)) $A4007="-"; else { $A4007=$A4007; }
		if (($A4004==NULL) OR ($A4007 + $A4008 == 0)) $A4008="-"; else { $A4008=$A4008; }
 
?>

 <?php	
 //------Demi-------- 
if ($A4001+$A4002>0) { if ($A4001>$A4002){	$clubA2001= $clubA4001;	}  else{	$clubA2001= $clubA4002;	}  } else{$clubA2001="-";}  
if ($A4003+$A4004>0) { if ($A4003>$A4004){	$clubA2002= $clubA4003; }  else{	$clubA2002= $clubA4004; } 	} else{$clubA2002="-";} 				  
if ($A4005+$A4006>0) { if ($A4005>$A4006){	$clubA2003= $clubA4005; }  else{	$clubA2003= $clubA4006;	} 	} else{$clubA2003="-";} 
if ($A4007+$A4008>0) { if ($A4007>$A4008){	$clubA2004= $clubA4007;	}  else{	$clubA2004= $clubA4008;	}	} else{$clubA2004="-";} 


		if (($A2001==NULL) OR ($A2001 + $A2002 == 0)) $A2001="-"; else { $A2001=$A2001; }
		if (($A2002==NULL) OR ($A2001 + $A2002 == 0)) $A2002="-"; else { $A2002=$A2002; }
		if (($A2003==NULL) OR ($A2003 + $A2004 == 0)) $A2003="-"; else { $A2003=$A2003; }
		if (($A2004==NULL) OR ($A2003 + $A2004 == 0)) $A2004="-"; else { $A2004=$A2004; }
 
 		if (($A1001==NULL) OR ($A1001 + $A1002 == 0)) $A1001="-"; else { $A1001=$A1001; }
		if (($A1002==NULL) OR ($A1001 + $A1002 == 0)) $A1002="-"; else { $A1002=$A1002; }

?>


 <?php
 	//------Finale--------							  
        if ($A2001+$A2002>0)  if ($A2001>$A2002){	$clubA1001= $clubA2001; } else{	$clubA1001= $clubA2002; } else $clubA1001=$clubA;?>
<?php   if ($A2003+$A2004>0)  if ($A2003>$A2004){	$clubA1002= $clubA2003; } else{	$clubA1002= $clubA2004; } else $clubA1002=$clubA;?>





<?php   
//-----------Champion--------
		//if ($A1001+$A1002>0)  
			if ($A1001>$A1002)
					{	
				 	$clubA1000= $clubA1001; 
				 	//$logo1000= $logo1001;
				  	}
			 else
				   {
				   	$clubA1000= $clubA1002; 
				//	$logo1000= $logo1002;
					}  
		//else 
		//	$clubA1000=$clubA;
	
//mysql_close();


}
?>


<?php
//*******************************************************************
//
//				Quarts et demies AR
//
//
//*******************************************************************


function QuartsARdemiAR($annee, $division, $bdd)
{
//echo "<br />";	
//echo $division;echo "<br />";
//echo $annee;echo "<br />";
require ("../../connect/connexion2.php");	
if (isset ($_GET['comite'])) $comite = $_GET['comite']; else $comite='-';

	
	global $clubA4001;global $clubA4002;global $clubA4003;global $clubA4004;
	global $clubA4005;global $clubA4006;global $clubA4007;global $clubA4008;

	global $clubA2001;global $clubA2002;global $clubA2003;global $clubA2004;

	global $clubA1001;global $clubA1002;
		
	$tabEquipes = array();
	
	$bdcomite_pfterr = "phpmpy_pf".$annee;
	$bdcomiteClub = "phpmpy_clubs";
	//echo "bdcomite_pfterr : ".$bdcomite_pfterr;echo "<br />";
	//echo "bdcomiteClub : ".$bdcomiteClub;
	
	for ($i=4001 ; $i<4009; $i++)
		
	{	 
   	 $equipes = "clubA".''.$i;


	$result =$bdd->query("	SELECT  $bdcomiteClub.nom, $bdcomite_pfterr.$equipes
							FROM $bdcomiteClub
							INNER JOIN $bdcomite_pfterr 
							ON $bdcomite_pfterr.$equipes=$bdcomiteClub.id
							WHERE  $bdcomite_pfterr.id=$division 
							AND $bdcomite_pfterr.annee=$annee"); 
							//$result = mysql_query($requete) ;
							while ($row = $result->fetch())
								{ 
								 $tabEquipes[] = $row[0];
								}

/*
$result=$bdd->query("SELECT $equipes
					FROM $bdcomite_pfterr 
					WHERE division = $division");
			while($row = $result->fetch())
				{ 
				 $tabEquipes[] = $row[0];
				}
*/
	 if (isset ($tabEquipes[0])) $clubA4001 = $tabEquipes[0]; else $clubA4001='-'; 
	 if (isset ($tabEquipes[1])) $clubA4002 = $tabEquipes[1]; else $clubA4002='-';
	 if (isset ($tabEquipes[2])) $clubA4003 = $tabEquipes[2]; else $clubA4003='-';
	 if (isset ($tabEquipes[3])) $clubA4004 = $tabEquipes[3]; else $clubA4004='-';
	
	 if (isset ($tabEquipes[4])) $clubA4005 = $tabEquipes[4]; else $clubA4005='-';
	 if (isset ($tabEquipes[5])) $clubA4006 = $tabEquipes[5]; else $clubA4006='-';
	 if (isset ($tabEquipes[6])) $clubA4007 = $tabEquipes[6]; else $clubA4007='-';
	 if (isset ($tabEquipes[7])) $clubA4008 = $tabEquipes[7]; else $clubA4008='-';
	}

	global $A8001;global $A8002;global $A8003;global $A8004;
	global $A8005;global $A8006;global $A8007;global $A8008;

	global $A4001;global $A4002;global $A4003;global $A4004;
	global $A4005;global $A4006;global $A4007;global $A4008;

	global $A2001;global $A2002;global $A2003;global $A2004;
	
	global $B2001;global $B2002;global $B2003;global $B2004;

	global $A1001;global $A1002;	

	$tabScores = array() ;
	for ($i=4001 ; $i<4009; $i++)
	{
	$scores = "A".''.$i;
	
	$requete =$bdd->query( "SELECT $scores
				FROM $bdcomite_pfterr
				WHERE  division=$division 
				AND annee=$annee ");
				//$result = mysql_query($requete) ;
					while ($row = $requete->fetch())
						{ 
						$tabScores[] = $row[0];
						}
								
	if (isset ($tabScores[0])) $A4001 = $tabScores[0]; else $A4001='-'; 
	if (isset ($tabScores[1])) $A4002 = $tabScores[1]; else $A4002='-';
	if (isset ($tabScores[2])) $A4003 = $tabScores[2]; else $A4003='-';
	if (isset ($tabScores[3])) $A4004 = $tabScores[3]; else $A4004='-';

	if (isset ($tabScores[4])) $A4005 = $tabScores[4]; else $A4005='-';
	if (isset ($tabScores[5])) $A4006 = $tabScores[5]; else $A4006='-';
	if (isset ($tabScores[6])) $A4007 = $tabScores[6]; else $A4007='-';
	if (isset ($tabScores[7])) $A4008 = $tabScores[7]; else $A4008='-';	
	}
	

$tabScores = array() ;
	for ($i=8001 ; $i<8009; $i++)
	{
	$scores = "A".''.$i;
	
	$requete =$bdd->query( "SELECT $scores
				FROM $bdcomite_pfterr
				WHERE  division=$division 
				AND annee=$annee ");
				//$result = mysql_query($requete) ;
					while ($row = $requete->fetch())
						{ 
						$tabScores[] = $row[0];
						}
								
	if (isset ($tabScores[0])) $A8001 = $tabScores[0]; else $A8001='-'; 
	if (isset ($tabScores[1])) $A8002 = $tabScores[1]; else $A8002='-';
	if (isset ($tabScores[2])) $A8003 = $tabScores[2]; else $A8003='-';
	if (isset ($tabScores[3])) $A8004 = $tabScores[3]; else $A8004='-';

	if (isset ($tabScores[4])) $A8005 = $tabScores[4]; else $A8005='-';
	if (isset ($tabScores[5])) $A8006 = $tabScores[5]; else $A8006='-';
	if (isset ($tabScores[6])) $A8007 = $tabScores[6]; else $A8007='-';
	if (isset ($tabScores[7])) $A8008 = $tabScores[7]; else $A8008='-';	
	}
	
	
// *******   Scores demi de finale   *******

	$tabScores = array() ;
	for ($i=2001 ; $i<2005; $i++)
	{
	$scores = "A".''.$i;
	
	$requete =$bdd->query( "SELECT $scores
				FROM $bdcomite_pfterr
				WHERE  division=$division 
				AND annee=$annee ");
				//$result = mysql_query($requete) ;
					while ($row = $requete->fetch())
						{ 
						$tabScores[] = $row[0];
						}
 								
									
	if (isset ($tabScores[0])) $A2001 = $tabScores[0]; else $A2001='-'; 
	if (isset ($tabScores[1])) $A2002 = $tabScores[1]; else $A2002='-';
	if (isset ($tabScores[2])) $A2003 = $tabScores[2]; else $A2003='-';
	if (isset ($tabScores[3])) $A2004 = $tabScores[3]; else $A2004='-';
	}	
	

$tabScores = array() ;
	for ($i=2001 ; $i<2005; $i++)
	{
	$scores = "B".''.$i;
	
	$requete =$bdd->query( "SELECT $scores
				FROM $bdcomite_pfterr
				WHERE  division=$division  
				AND annee=$annee");
				//$result = mysql_query($requete) ;
					while ($row = $requete->fetch())
						{ 
						$tabScores[] = $row[0];
						}
 								
									
	if (isset ($tabScores[0])) $B2001 = $tabScores[0]; else $B2001='-'; 
	if (isset ($tabScores[1])) $B2002 = $tabScores[1]; else $B2002='-';
	if (isset ($tabScores[2])) $B2003 = $tabScores[2]; else $B2003='-';
	if (isset ($tabScores[3])) $B2004 = $tabScores[3]; else $B2004='-';
	}	

// *******   Scores  finale   *******

	$tabScores = array() ;
	
	$requete =$bdd->query( "SELECT A1001, A1002
				FROM $bdcomite_pfterr
				WHERE  division=$division 
				AND annee=$annee ");
				//$result = mysql_query($requete) ;
					while ($row = $requete->fetch())
						{ 
						$A1001 = $row[0];
						$A1002 = $row[1];
						}


if ($A4001+$A4002 > 0)	{	if ($A4001>$A4002)	{$clubA2001=$clubA4001;	} else	{$clubA2001=$clubA4002;	}}	else{	$A4001="-";	$A4002="-";	$quart1="-";}
if ($A4003+$A4004 > 0)	{	if ($A4003>$A4004)	{$clubA2002=$clubA4003;	} else	{$clubA2002=$clubA4004;	}}	else{	$A4003="-";	$A4004="-";	$quart1="-";}
if ($A4005+$A4006 > 0)	{	if ($A4005>$A4006)	{$clubA2003=$clubA4005;	} else	{$clubA2003=$clubA4006;	}}	else{	$A4005="-";	$A4006="-";	$quart1="-";}
if ($A4007+$A4008 > 0)	{	if ($A4007>$A4008)	{$clubA2004=$clubA4007;	} else	{$clubA2004=$clubA4008;	}}	else{	$A4007="-";	$A4008="-";	$quart1="-";}

if ($A2001+$A2002 > 0)	{	if ($A2001>$A2002)	{$clubA1001=$clubA2001;	} else	{$clubA1001=$clubA2002;	}}	else{	$A2001="-";	$A2002="-";	$quart1="-";}
if ($A2003+$A2004 > 0)	{	if ($A2003>$A2004)	{$clubA1002=$clubA2003;	} else	{$clubA1002=$clubA2004;	}}	else{	$A2003="-";	$A2004="-";	$quart1="-";}

//if ($A1001+$A1002 > 0)	{	if ($A2001>$A2002)	{$clubA1001=$clubA2001;	} else	{$clubA1001=$clubA2002;	}}	else{	$A2001="-";	$A2002="-";	$quart1="-";}	
}
?>

