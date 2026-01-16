

<?php
//***********************************************************************/
//SOMMAIRE																*/
//				Champion (premier de poule )        					 */
//				Finale 													*/
//				Demi finale												*/
//				Demi finale aller-retour								*/
//				Quarts	(ligne 822)                                     */
//***********************************************************************/

function championDirect ($bdcomiteClub, $division, $annee, $bdcomiteAnnee)
{


global $championDirect;
global $logoDirect;

//-------------initialisation des variables----------------



$requete = "SELECT  $bdcomiteClub.nom, $bdcomiteClub.url_logo, $bdcomiteAnnee.clubA1001
			FROM $bdcomiteClub
			INNER JOIN $bdcomiteAnnee ON $bdcomiteAnnee.clubA1001=$bdcomiteClub.id
			WHERE  $bdcomiteAnnee.division=$division and $bdcomiteAnnee.annee=$annee"; 
				$result = mysql_query($requete) ;
					while ($row = mysql_fetch_array($result) )
						{ 
						$championDirect = $row[0];
						$logoDirect = $row[1];
						
						}

}
?>






<?php //*****************************************************************/
//																		*/
//----------------Finale : equipes et logos------------------			*/
//																		*/
//***********************************************************************/

function finaleA ($bdcomiteClub, $division, $annee, $bdcomiteAnnee)
 {


global $clubA;
global $logoA;
global $clubB1001;
//-------------initialisation des variables----------------
$clubA="-";


$requete = "SELECT  $bdcomiteClub.nom, $bdcomiteClub.url_logo, $bdcomiteAnnee.clubA1001
			FROM $bdcomiteClub
			INNER JOIN $bdcomiteAnnee ON $bdcomiteAnnee.clubA1001=$bdcomiteClub.id
			WHERE  $bdcomiteAnnee.division=$division and $bdcomiteAnnee.annee=$annee"; 
$result = mysql_query($requete) ;
 	while ($row = mysql_fetch_array($result) )
		{ 
		$clubA = $row[0];
		$logoA = $row[1];
		$sigle = $row[2];
		}
$nom1001 = substr($clubA,0,20);
$logo1001=$logoA;
$clubB1001 = ($nom1001.' '.$sigle);
}
?>

<?php
function finaleB ($bdcomiteClub, $division, $annee, $bdcomiteAnnee)
 {
 

 
global $clubB;
global $logoB;

//-------------initialisation des variables----------------
 $clubB="-";

$requete = "SELECT  $bdcomiteClub.nom, $bdcomiteClub.url_logo, $bdcomiteAnnee.clubA1002
			FROM $bdcomiteClub
			INNER JOIN $bdcomiteAnnee ON $bdcomiteAnnee.clubA1002=$bdcomiteClub.id
			WHERE  $bdcomiteAnnee.division=$division and $bdcomiteAnnee.annee=$annee" ; 
$result = mysql_query($requete) ;
 	while ($row = mysql_fetch_array($result) )
		{ 
		$clubB = $row[0];
		$logoB = $row[1];
		}
}
?>
 
 
 
<?php
//----------------Finale : les résultats------------------ 

function score ( $division, $annee, $bdcomiteAnnee)
 {
global $scoreA;
global $scoreB;
global $champion;
global $logo;
global $clubB;
global $logoB;
global $clubA;
global $logoA;

$requete = "SELECT  A1001,A1002
			FROM $bdcomiteAnnee
			WHERE  division=$division and annee=$annee"; 
$result = mysql_query($requete) ;
 	while ($row = mysql_fetch_array($result) )
		{ 
		$score1 = $row[0];
		$score2 = $row[1];
		}

$scoreA=$score1;
$scoreB=$score2;

$tiret="-";

	if ($scoreA + $scoreB > 0)
			{
			$scoreA=$scoreA;
		  // $clubA=$clubA; 
		   $scoreB=$scoreB;
		  // $clubB=$clubB; 
		   
			   if ($scoreA>$scoreB)
					{
					$logo=$logoA;
					$champion=$clubA;
					}
			   else
				   {
				   $logo=$logoB;
				   $champion=$clubB;
				   }
			
			
			}
	else
		   { 
		   $scoreA=$tiret;
			$scoreB=$tiret;
			$champion="";
			$logo="";
		   
		   }
	   
	


}

?> 


<?php
//***********************************************************************/
//																		*/
//---------------Demi  Finale : equipes et logos------------------		*/
//																		*/
//***********************************************************************/

function demiFinaleA ($bdcomiteClub, $division, $annee, $bdcomiteAnnee)
 	{
		global $clubA;
		global $logoA;
		
//-------------initialisation des variables----------------
$finaliste1="";  $finaliste2="";  $clubA="-";


		$requete = "SELECT  $bdcomiteClub.nom, $bdcomiteClub.url_logo, $bdcomiteAnnee.clubA2001
					FROM $bdcomiteClub
					INNER JOIN $bdcomiteAnnee ON $bdcomiteAnnee.clubA2001=$bdcomiteClub.id
					WHERE  $bdcomiteAnnee.division=$division and $bdcomiteAnnee.annee=$annee"; 
							$result = mysql_query($requete) ;
								while ($row = mysql_fetch_array($result) )
									{ 
									$clubA = $row[0];
									$logoA = $row[1];
									}
									
									
	}
?>

<?php
function demiFinaleB ($bdcomiteClub, $division, $annee, $bdcomiteAnnee)
 	{
		global $clubB;
		global $logoB;
		
//-------------initialisation des variables----------------
$clubB="-";


		$requete = "SELECT  $bdcomiteClub.nom, $bdcomiteClub.url_logo, $bdcomiteAnnee.clubA2002
					FROM $bdcomiteClub
					INNER JOIN $bdcomiteAnnee ON $bdcomiteAnnee.clubA2002=$bdcomiteClub.id
					WHERE  $bdcomiteAnnee.division=$division and $bdcomiteAnnee.annee=$annee"; 
						$result = mysql_query($requete) ;
						while ($row = mysql_fetch_array($result) )
							{ 
							$clubB = $row[0];
							$logoB = $row[1];
							}
	}
?>

<?php
function demiFinaleC ($bdcomiteClub, $division, $annee, $bdcomiteAnnee)
 	{
		global $clubC;
		global $logoC;
		
//-------------initialisation des variables----------------
$clubC="-";


		$requete = "SELECT  $bdcomiteClub.nom, $bdcomiteClub.url_logo, $bdcomiteAnnee.clubA2003
			FROM $bdcomiteClub
			INNER JOIN $bdcomiteAnnee ON $bdcomiteAnnee.clubA2003=$bdcomiteClub.id
			WHERE  $bdcomiteAnnee.division=$division and $bdcomiteAnnee.annee=$annee"; 
		$result = mysql_query($requete) ;
				while ($row = mysql_fetch_array($result) )
					{ 
					$clubC = $row[0];
					$logoC = $row[1];
					}

	}
?>

<?php
function demiFinaleD ($bdcomiteClub, $division, $annee, $bdcomiteAnnee)
 	{
		global $clubD;
		global $logoD;

//-------------initialisation des variables----------------
$clubD="-";


		$requete = "SELECT  $bdcomiteClub.nom, $bdcomiteClub.url_logo, $bdcomiteAnnee.clubA2004
			FROM $bdcomiteClub
			INNER JOIN $bdcomiteAnnee ON $bdcomiteAnnee.clubA2004=$bdcomiteClub.id
			WHERE  $bdcomiteAnnee.division=$division and $bdcomiteAnnee.annee=$annee"; 
		$result = mysql_query($requete) ;
				while ($row = mysql_fetch_array($result) )
					{ 
					$clubD = $row[0];
					$logoD = $row[1];
					}

	}
?>

<?php
//----------------Demi finale : les résultats------------------ 

function scoreDemi ( $division, $annee, $bdcomiteAnnee)
 {


 // Selection de l'équipe clubA 

	global $clubA;
	global $logoA;

		
 
 
// Selection de l'équipe clubB 

 global $clubB;
global $logoB;
		
	
 
 // Selection de l'équipe clubC
 
 global $clubC;
		global $logoC;
		

 
 // Selection de l'équipe clubD
 
 global $clubD;
		global $logoD;


 
global $scoreA;
global $scoreB;
global $scoreC;
global $scoreD;

global $A1001;
global $A1002;

global $finaliste1;
global $finaliste2;

global $champion;
global $logo;

global $logof1;
global $logof2;

global $demiChampLogo;

$demiChampLogo= "";
$champion="";

$requete = "SELECT  A2001,A2002,A2003,A2004, A1001, A1002
			FROM $bdcomiteAnnee
			WHERE  division=$division and $bdcomiteAnnee.annee=$annee"; 
$result = mysql_query($requete) ;
 	while ($row = mysql_fetch_array($result) )
		{ 
		$score1 = $row[0];
		$score2 = $row[1];
		$score3 = $row[2];
		$score4 = $row[3];
		$score5 = $row[4];
		$score6 = $row[5];
		}

$scoreA=$score1;
$scoreB=$score2;
$scoreC=$score3;
$scoreD=$score4;

$A1001=$score5;
$A1002=$score6;


$tiret="-";	
//recuperation des scores A et B
if (($scoreA==NULL) OR ($scoreA + $scoreB == 0)) 
	{
	$scoreA=$tiret; 
	$scoreB=$tiret; 
	$A1001=$tiret;
	} 
//Affichage de la qualification d'office de l'équipe A
elseif($scoreA==99 AND $scoreB==0)
	{
	$scoreA="Q";
	$scoreB="-";
	}
//Affichage de la qualification d'office de l'équipe B	
elseif($scoreA==0 AND $scoreB==99)
	{
	$scoreA="-";
	$scoreB="Q";
	}	
else 
	{ 
	$scoreA=$scoreA; 
	$scoreB=$scoreB; 
	$A1001=$A1001;
	}	

//recuperation des scores D et C

if (($scoreC==NULL) OR ($scoreC + $scoreD == 0)) 
	{
	$scoreC=$tiret; 
	$scoreD=$tiret; 
	$A1002=$tiret;
	} 
//Affichage de la qualification d'office de l'équipe C
elseif($scoreC==99 AND $scoreD==0)
	{
	$scoreC="Q";
	$scoreD="-";
	}
//Affichage de la qualification d'office de l'équipe D
elseif($scoreC==0 AND $scoreD==99)
	{
	$scoreC="-";
	$scoreD="Q";
	}
else 
	{
	 $scoreC=$scoreC; 
	 $scoreD=$scoreD; 
	 $A1002=$A1002;
	}
		
// Qualification du 1er finaliste

if ($score1+$score2>0)
	{
	if ($score1>$score2)
		{
		$finaliste1=$clubA;
		$logof1=$logoA;
		}
	else
		{
		$finaliste1=$clubB;
		$logof1=$logoB;
		}
	}
else
	{
	$finaliste1=$tiret;
	}
		
// Qualification du 2me finaliste



if ($score3+$score4>0 )
	{
	if( $score3>$score4)
		{
		$finaliste2=$clubC;
		$logof2=$logoC;
		}
	else
		{
		$finaliste2=$clubD;
		$logof2=$logoD;
		}
	}
else
	{
	$finaliste2=$tiret;
	}
	
// Détermination du champion

if (($A1001+$A1002)>0)

		if ($A1001>$A1002)
			{
			$champion=$finaliste1;
			$demiChampLogo=$logof1;
			}
		else
			{
			$champion=$finaliste2;
			$demiChampLogo=$logof2;
			}
else				
	{
	$A1001="-";
	$A1002="-";
	}
		
					 
}	
  ?>




<?php
//***********************************************************************/
//																		*/
//---------------Demi  Finale AR : equipes et logos------------------	*/
//																		*/
//***********************************************************************/

function demiFinaleAAR ($bdcomiteClub, $division, $annee, $bdcomiteAnnee)
 	{
		
		
		
		global $clubA;
		global $logoA;
		global $clubB2001;
		
//-------------initialisation des variables----------------
$clubA="-";


		$requete = "SELECT  $bdcomiteClub.nom, $bdcomiteClub.url_logo, $bdcomiteAnnee.clubA2001
			FROM $bdcomiteClub
			INNER JOIN $bdcomiteAnnee ON $bdcomiteAnnee.clubA2001=$bdcomiteClub.id
			WHERE  $bdcomiteAnnee.division=$division and $bdcomiteAnnee.annee=$annee"; 
		$result = mysql_query($requete) ;
				while ($row = mysql_fetch_array($result) )
					{ 
					$clubA = $row[0];
					$logoA = $row[1];
					$sigle = $row[2];
					}
$nom2001 = substr($nom,0,20);					
$clubB2001 = ($nom2001.' '.$sigle);
	}
	


?>

<?php
function demiFinaleBAR ($bdcomiteClub, $division, $annee, $bdcomiteAnnee)
 	{



		global $clubB;
		global $logoB;
		
//-------------initialisation des variables----------------
$clubB="-";

		$requete = "SELECT  $bdcomiteClub.nom, $bdcomiteClub.url_logo, $bdcomiteAnnee.clubA2002
			FROM $bdcomiteClub
			INNER JOIN $bdcomiteAnnee ON $bdcomiteAnnee.clubA2002=$bdcomiteClub.id
			WHERE  $bdcomiteAnnee.division=$division and $bdcomiteAnnee.annee=$annee"; 
		$result = mysql_query($requete) ;
				while ($row = mysql_fetch_array($result) )
					{ 
					$clubB = $row[0];
					$logoB = $row[1];
					}

	}
	
//;
	
?>

<?php
function demiFinaleCAR ($bdcomiteClub, $division, $annee, $bdcomiteAnnee)
 	{
	
	
		global $clubC;
		global $logoC;
		
//-------------initialisation des variables----------------
$clubC="-";

		$requete = "SELECT  $bdcomiteClub.nom, $bdcomiteClub.url_logo, $bdcomiteAnnee.clubA2003
			FROM $bdcomiteClub
			INNER JOIN $bdcomiteAnnee ON $bdcomiteAnnee.clubA2003=$bdcomiteClub.id
			WHERE  $bdcomiteAnnee.division=$division and $bdcomiteAnnee.annee=$annee"; 
		$result = mysql_query($requete) ;
				while ($row = mysql_fetch_array($result) )
					{ 
					$clubC = $row[0];
					$logoC = $row[1];
					}

	}
	
	
?>

<?php
function demiFinaleDAR ($bdcomiteClub, $division, $annee, $bdcomiteAnnee)
 	{
	
	
		global $clubD;
		global $logoD;
		
//-------------initialisation des variables----------------
$clubD="-";


		$requete = "SELECT  $bdcomiteClub.nom, $bdcomiteClub.url_logo, $bdcomiteAnnee.clubA2004
			FROM $bdcomiteClub
			INNER JOIN $bdcomiteAnnee ON $bdcomiteAnnee.clubA2004=$bdcomiteClub.id
			WHERE  $bdcomiteAnnee.division=$division and $bdcomiteAnnee.annee=$annee"; 
		$result = mysql_query($requete) ;
				while ($row = mysql_fetch_array($result) )
					{ 
					$clubD = $row[0];
					$logoD = $row[1];
					}

	}
	
	
	
?>

<?php
//----------------Demi finale AR: les résultats------------------ 

function scoreDemiAR ( $division, $annee, $bdcomiteAnnee)
{
	global $clubA;
	global $logoA;
	global $clubB;
	global $logoB;
	global $clubC;
	global $logoC;
	global $clubD;
	global $logoD;
	
	global $ptsA;
	global $ptsB;
	global $ptsC;
	global $ptsD;
	
	global $scoreA;
	global $scoreB;
	global $scoreC;
	global $scoreD;

	global $finaliste1;
	global $finaliste2;
	global $champion;
	global $demiChampLogo;
	
	$finaliste1="-";
	$finaliste2="-";
	
	global $A1001;
	global $A1002;

	$demiChampLogo="";
	$champion="";


	$requete = "SELECT  A2001, A2002, A2003, A2004,
						A4001, A4002, A4003, A4004,
						R2001, R2002, R2003, R2004,
						R4001, R4002, R4003, R4004,
						A1001, A1002
				FROM $bdcomiteAnnee
				WHERE  division=$division and $bdcomiteAnnee.annee=$annee"; 
	$result = mysql_query($requete) ;
		while ($row = mysql_fetch_array($result) )
			{ 
			
// Résultats matchs ALLER			
			$score1 = $row[0];
			$score2 = $row[1];
			$score3 = $row[2];
			$score4 = $row[3];
			
			$score5 = $row[4];
			$score6 = $row[5];
			$score7 = $row[6];
			$score8 = $row[7];
			
// Résultats matchs RETOUR			
			
			$score9 = $row[8];
			$score10 = $row[9];
			$score11 = $row[10];
			$score12 = $row[11];
			
			$score13 = $row[12];
			$score14 = $row[13];
			$score15 = $row[14];
			$score16 = $row[15];
			
			
// Résultats matchs FINALE
			
			
			$score17 = $row[16];
			$score18 = $row[17];
			}
	
	$ptsA=$score1 + $score9;
	$ptsB=$score2 + $score10;
	$ptsC=$score3 + $score11;
	$ptsD=$score4 + $score12;
	
	$scoreA=$score5 + $score13;
	$scoreB=$score6 + $score14;
	$scoreC=$score7 + $score15;
	$scoreD=$score8 + $score16;
	
	$A1001=$score17;
	$A1002=$score18;
	
	$tiret="-";
			
	if(($ptsA+$ptsB)<1)
		{
		$ptsA="-";
		$scoreA="-";
		$ptsB="-";
		$scoreB="-";
		}
// Cas d'un qualifié d'office	
	elseif ($score5==99 AND $score1==99)
			{
			$ptsA="Q";
			$scoreA="Q";
			$ptsB="-";
			$scoreB="-";
			}
			else
			{
			$ptsA=$ptsA;
			$scoreA=$scoreA;
			$ptsB=$ptsB;
			$scoreB=$scoreB;
			}
	
	if(($scoreC+$scoreD)<1)
		{
		$ptsC="-";
		$scoreC="-";
		$ptsD="-";
		$scoreD="-";
		}
	else
		{
		$ptsC=$ptsC;
		$scoreC=$scoreC;
		$ptsD=$ptsD;
		$scoreD=$scoreD;
		}
	
	
// Finaliste 1	
// Cas d'un qualifié d'office
	if ($score5==99 AND $score1==99)
		{
		$finaliste1=$clubA;
		$logo_demi1=$logoA;
		}

	elseif ($ptsA+$ptsB>6)
		{
			if ($ptsA > $ptsB or ($ptsA==$ptsB and $scoreA>$scoreB))
				{
				$finaliste1=$clubA;
				$logo_demi1=$logoA;
				}
			else
				{
				$finaliste1=$clubB;
				$logo_demi1=$logoB;
				}
		
		}
	else
		{
		
		$finaliste1= "-";
		$finaliste2= "-";	
		$A1001="-";
		$A1002="-";
		}

	
	
	
	
	
	
	if ($ptsC+$ptsD>6)
			{
			if ($ptsC>$ptsD or ($ptsC==$ptsD and $scoreC>$scoreD))
				{
				$finaliste2=$clubC;
				$logo_demi2=$logoC;
				}
			else
				{
				$finaliste2=$clubD;
				$logo_demi2=$logoD;
				}
		
			}
		else
			{
			$finaliste2= "-";	
			}



	if (($A1001+$A1002)>0 )
		{
		$A1001=$A1001;
		$A1002=$A1002;
			if ($A1001>$A1002)
				{
				$champion=$finaliste1;
				$demiChampLogo=$logo_demi1;
				}
			else
				{
				$champion=$finaliste2;
				$demiChampLogo=$logo_demi2;
				}
		
		}
	else
		{
		$A1001="-";
		$A1002="-";
		}


	
}

?> 
	  
 <?php
//***********************************************************************/
//																		*/
//---------------Quarts de Finale : equipes et logos------------------	*/
//																		*/
//***********************************************************************/

function quartFinaleA ($bdcomiteClub, $division, $annee, $bdcomiteAnnee)
		{
		global $clubA;
		global $logoA;
		
//-------------initialisation des variables----------------
$finaliste1="";  $finaliste2="";  $clubA="-";


		$requete = "SELECT  $bdcomiteClub.nom, $bdcomiteClub.url_logo, $bdcomiteAnnee.clubA4001
					FROM $bdcomiteClub
					INNER JOIN $bdcomiteAnnee ON $bdcomiteAnnee.clubA4001=$bdcomiteClub.id
					WHERE  $bdcomiteAnnee.division=$division and $bdcomiteAnnee.annee=$annee"; 
							$result = mysql_query($requete) ;
								while ($row = mysql_fetch_array($result) )
									{ 
									$clubA = $row[0];
									$logoA = $row[1];
									}
									
									
		}
?>

<?php
function quartFinaleB ($bdcomiteClub, $division, $annee, $bdcomiteAnnee)
 	{
		global $clubB;
		global $logoB;
		
//-------------initialisation des variables----------------
$clubB="-";


		$requete = "SELECT  $bdcomiteClub.nom, $bdcomiteClub.url_logo, $bdcomiteAnnee.clubA4002
					FROM $bdcomiteClub
					INNER JOIN $bdcomiteAnnee ON $bdcomiteAnnee.clubA4002=$bdcomiteClub.id
					WHERE  $bdcomiteAnnee.division=$division and $bdcomiteAnnee.annee=$annee"; 
						$result = mysql_query($requete) ;
						while ($row = mysql_fetch_array($result) )
							{ 
							$clubB = $row[0];
							$logoB = $row[1];
							}
	}
?>

<?php
function quartFinaleC ($bdcomiteClub, $division, $annee, $bdcomiteAnnee)
 	{
		global $clubC;
		global $logoC;
		
//-------------initialisation des variables----------------
$clubC="-";


		$requete = "SELECT  $bdcomiteClub.nom, $bdcomiteClub.url_logo, $bdcomiteAnnee.clubA4003
			FROM $bdcomiteClub
			INNER JOIN $bdcomiteAnnee ON $bdcomiteAnnee.clubA4003=$bdcomiteClub.id
			WHERE  $bdcomiteAnnee.division=$division and $bdcomiteAnnee.annee=$annee"; 
		$result = mysql_query($requete) ;
				while ($row = mysql_fetch_array($result) )
					{ 
					$clubC = $row[0];
					$logoC = $row[1];
					}

	}
?>

<?php
function quartFinaleD ($bdcomiteClub, $division, $annee, $bdcomiteAnnee)
 	{
		global $clubD;
		global $logoD;

//-------------initialisation des variables----------------
$clubD="-";


		$requete = "SELECT  $bdcomiteClub.nom, $bdcomiteClub.url_logo, $bdcomiteAnnee.clubA4004
			FROM $bdcomiteClub
			INNER JOIN $bdcomiteAnnee ON $bdcomiteAnnee.clubA4004=$bdcomiteClub.id
			WHERE  $bdcomiteAnnee.division=$division and $bdcomiteAnnee.annee=$annee"; 
		$result = mysql_query($requete) ;
				while ($row = mysql_fetch_array($result) )
					{ 
					$clubD = $row[0];
					$logoD = $row[1];
					}

	}
	
function quartFinaleE ($bdcomiteClub, $division, $annee, $bdcomiteAnnee)
 	{
		global $clubE;
		global $logoE;
		
//-------------initialisation des variables----------------
$finaliste1="";  $finaliste2="";  $clubE="-";


		$requete = "SELECT  $bdcomiteClub.nom, $bdcomiteClub.url_logo, $bdcomiteAnnee.clubA4005
					FROM $bdcomiteClub
					INNER JOIN $bdcomiteAnnee ON $bdcomiteAnnee.clubA4005=$bdcomiteClub.id
					WHERE  $bdcomiteAnnee.division=$division and $bdcomiteAnnee.annee=$annee"; 
							$result = mysql_query($requete) ;
								while ($row = mysql_fetch_array($result) )
									{ 
									$clubE = $row[0];
									$logoE = $row[1];
									}
	}
?>

<?php
function quartFinaleF ($bdcomiteClub, $division, $annee, $bdcomiteAnnee)
 	{
		global $clubF;
		global $logoF;
		
//-------------initialisation des variables----------------
$clubB="-";


		$requete = "SELECT  $bdcomiteClub.nom, $bdcomiteClub.url_logo, $bdcomiteAnnee.clubA4006
					FROM $bdcomiteClub
					INNER JOIN $bdcomiteAnnee ON $bdcomiteAnnee.clubA4006=$bdcomiteClub.id
					WHERE  $bdcomiteAnnee.division=$division and $bdcomiteAnnee.annee=$annee"; 
						$result = mysql_query($requete) ;
						while ($row = mysql_fetch_array($result) )
							{ 
							$clubF = $row[0];
							$logoF = $row[1];
							}
	}
?>

<?php
function quartFinaleG ($bdcomiteClub, $division, $annee, $bdcomiteAnnee)
 	{
		global $clubG;
		global $logoG;
		
//-------------initialisation des variables----------------
$clubG="-";


		$requete = "SELECT  $bdcomiteClub.nom, $bdcomiteClub.url_logo, $bdcomiteAnnee.clubA4007
			FROM $bdcomiteClub
			INNER JOIN $bdcomiteAnnee ON $bdcomiteAnnee.clubA4007=$bdcomiteClub.id
			WHERE  $bdcomiteAnnee.division=$division and $bdcomiteAnnee.annee=$annee"; 
		$result = mysql_query($requete) ;
				while ($row = mysql_fetch_array($result) )
					{ 
					$clubG = $row[0];
					$logoG = $row[1];
					}

	}
?>

<?php
function quartFinaleH ($bdcomiteClub, $division, $annee, $bdcomiteAnnee)
 	{
		global $clubH;
		global $logoH;

//-------------initialisation des variables----------------
$clubH="-";


		$requete = "SELECT  $bdcomiteClub.nom, $bdcomiteClub.url_logo, $bdcomiteAnnee.clubA4008
			FROM $bdcomiteClub
			INNER JOIN $bdcomiteAnnee ON $bdcomiteAnnee.clubA4008=$bdcomiteClub.id
			WHERE  $bdcomiteAnnee.division=$division and $bdcomiteAnnee.annee=$annee"; 
		$result = mysql_query($requete) ;
				while ($row = mysql_fetch_array($result) )
					{ 
					$clubH = $row[0];
					$logoH = $row[1];
					}

	}	





?>

<?php

//----------------Quarts Demi finale : les résultats------------------ 

function scoreQuarts ( $division, $annee, $bdcomiteAnnee)
 {		
		global $A4001; global $logoA;
		global $A4002; global $logoB;
		global $A4003; global $logoC;
		global $A4004; global $logoD;
		global $A4005; global $logoE;
		global $A4006; global $logoF;
		global $A4007; global $logoG;
		global $A4008; global $logoH;
		
		global $A2001; global $logoDemi1;
		global $A2002; global $logoDemi2;
		global $A2003; global $logoDemi3;
		global $A2004; global $logoDemi4;
		
		global $A1001; global $logoFinale1;
		global $A1002; global $logoFinale2;
		


		$requete = "SELECT  A4001, A4002, A4003, A4004, A4005, A4006, A4007, A4008,
							A2001, A2002, A2003, A2004, A1001, A1002
					FROM $bdcomiteAnnee
					WHERE  division=$division and $bdcomiteAnnee.annee=$annee"; 
		$result = mysql_query($requete) ;
			while ($row = mysql_fetch_array($result) )
				{ 
				$A4001 = $row[0];
				$A4002 = $row[1];
				$A4003 = $row[2];
				$A4004 = $row[3];
				$A4005 = $row[4];
				$A4006 = $row[5];
				$A4007 = $row[6];
				$A4008 = $row[7];
				
				$A2001 = $row[8];
				$A2002 = $row[9];
				$A2003 = $row[10];
				$A2004 = $row[11];
				
				$A1001 = $row[12];
				$A1002 = $row[13];
				
				}


//********** Qualification du 1er demi finaliste  **************************

		
		
		global $clubA;
		global $clubB;
		global $clubC;
		global $clubD;
		global $clubE;
		global $clubF;
		global $clubG;
		global $clubH;
		
		global $demi1;
		global $demi2;
		global $demi3;
		global $demi4;
		
		global $finaliste1;
		global $finaliste2;
		
		global $champion;
		
	if ($A4001+$A4002 > 0)
		{	
			if ($A4001>$A4002)
				{
				$demi1=$clubA;
				$logoDemi1=$logoA;
				}
			else
				{
				$demi1=$clubB;
				$logoDemi1=$logoB;
				}
		}
		else
		{
		$A4001="-";
		$A4002="-";
		$demi1="-";
		}	

//********** Qualification du 2me demi finaliste  ************************



if ( $A4003+$A4004>0 )
	{
	if( $A4003>$A4004)
		{
		$demi2=$clubC;
		$logoDemi2=$logoC;
		}
	else
		{
		$demi2=$clubD;
		$logoDemi2=$logoD;
		}
	}
else
	{
		$A4003="-";
		$A4004="-";
		$demi2="-";
	}
	
//********** Qualification du 2me demi finaliste  **************************

if ($A4005+$A4006>0)
	{
	if ($A4005>$A4006)
		{
		$demi3=$clubE;
		$logoDemi3=$logoE;
		}
	else
		{
		$demi3=$clubF;
		$logoDemi3=$logoF;
		}
	}
else
	{
	$A4005="-";
		$A4006="-";
		$demi3="-";
	}
		
//********** Qualification du 4me demi finaliste  ************************



if ($A4007+$A4008>0 )
	{
	if( $A4007>$A4008)
		{
		$demi4=$clubG;
		$logoDemi4=$logoG;
		}
	else
		{
		$demi4=$clubH;
		$logoDemi4=$logoH;
		}
	}
else
	{
	$A4007="-";
		$A4008="-";
		$demi4="-";
	}	

//************** Qualification du 1er finaliste  ********

if ($A2001+$A2002>0)
	{
	if ($A2001>$A2002)
		{
		$finaliste1=$demi1;
		$logoFinale1=$logoDemi1;
		}
	else
		{
		$finaliste1=$demi2;
		$logoFinale1=$logoDemi2;
		}
	}
else
	{
	$A2001="-";
	$A2002="-";
	$finaliste1="-";
	}
		
//********  Qualification du 2me finaliste  *******



if ($A2003+$A2004>0 )
	{
	if( $A2003>$A2004)
		{
		$finaliste2=$demi3;
		$logoFinale2=$logoDemi3;
		}
	else
		{
		$finaliste2=$demi4;
		$logoFinale2=$logoDemi4;
		}
	}
else
	{
	$A2003="-";
	$A2004="-";
	$finaliste2="-";
	}
	
//********* Détermination du champion  ********

if (($A1001+$A1002)>0)

		if ($A1001>$A1002)
			{
			$champion=$finaliste1;
			$champLogo=$logoFinale1;
			}
		else
			{
			$champion=$finaliste2;
			$champLogo=$logoFinale2;
			}
else				
	{
	$A1001="-";
	$A1002="-";
	}

}
?>
 <?php
//***********************************************************************/
//																		*/
//---------------huitièmes de Finale : scores      ------------------	*/
//																		*/
//***********************************************************************/
function huitieme_scores ($bdcomiteClub, $division, $annee, $bdcomiteAnnee_r)
{
	mysqli_connect("localhost", "root", "" ,"onepip-france-db2");



global $clubA8001;
global $clubA8002;
global $clubA8003;
global $clubA8004;
global $clubA8005;
global $clubA8006;
global $clubA8007;
global $clubA8008;

global $clubA8009;
global $clubA8010;
global $clubA8011;
global $clubA8012;
global $clubA8013;
global $clubA8014;
global $clubA8015;
global $clubA8016;

global $clubA4001;
global $clubA4002;
global $clubA4003;
global $clubA4004;
global $clubA4005;
global $clubA4006;
global $clubA4007;
global $clubA4008;

global $clubA2001;
global $clubA2002;
global $clubA2003;
global $clubA2004;

global $clubA1001;
global $clubA1002;



global $A8001 ;
global $A8002;
global $A8003;
global $A8004;

global $A8005;
global $A8006;
global $A8007;
global $A8008;

global $A8009;
global $A8010;
global $A8011;
global $A8012;

global $A8013;
global $A8014;
global $A8015;
global $A8016 ;



global $A2001 ;
global $A2002;
global $A2003;
global $A2004;

global $A1001;
global $A1002;


		
				
	//*******************    Récupérations des Equipes	**********************************

	$tabEquipes = array();
	for ($i=8001 ; $i<8017; $i++)
	{	 
	$equipes = "clubA".''.$i;

							
	$requete = "SELECT  $bdcomiteClub.nom, $bdcomiteAnnee.$scores , $bdcomiteAnnee.$equipes
				FROM $bdcomiteClub
				INNER JOIN $bdcomiteAnnee ON $bdcomiteAnnee.$equipes=$bdcomiteClub.id
				WHERE  $bdcomiteAnnee.division=$division and $bdcomiteAnnee.annee=$annee"; 
					$result = mysql_query($requete) ;
					while ($row = mysql_fetch_array($result) )
						{ 
						$tabEquipes[] = $row[0];
						}								
																	
									
	$clubA8001 = $tabEquipes[0];
	$clubA8002 = $tabEquipes[1];								
	$clubA8003 = $tabEquipes[2];
	$clubA8004 = $tabEquipes[3];

	$clubA8005 = $tabEquipes[4];
	$clubA8006 = $tabEquipes[5];
	$clubA8007 = $tabEquipes[6];
	$clubA8008 = $tabEquipes[7];

	$clubA8009 = $tabEquipes[8];
	$clubA8010 = $tabEquipes[9];  
	$clubA8011 = $tabEquipes[10];  
	$clubA8012 = $tabEquipes[11];

	$clubA8013 = $tabEquipes[12];
	$clubA8014 = $tabEquipes[13];
	$clubA8015 = $tabEquipes[14];
	$clubA8016 = $tabEquipes[15]; 

	}

	//*******************    Récupérations des Scores	**********************************

	$tabScores = array() ;
	for ($i=8001 ; $i<8017; $i++)
	{
	$scores = "A".''.$i;
	
	$requete = "SELECT $scores
				FROM $bdcomiteAnnee_r
				WHERE  division=$division and annee=$annee"; 
				$result = mysql_query($requete) ;
					while ($row = mysql_fetch_array($result) )
						{ 
						$tabScores[] = $row[0];
						}
 								
									
	$A8001 = $tabScores[0];
	$A8002 = $tabScores[1];
	$A8003 = $tabScores[2];
	$A8004 = $tabScores[3];

	$A8005 = $tabScores[4];
	$A8006 = $tabScores[5];
	$A8007 = $tabScores[6];
	$A8008 = $tabScores[7];

	$A8009 = $tabScores[8];
	$A8010 = $tabScores[9];
	$A8011 = $tabScores[10];
	$A8012 = $tabScores[11];

	$A8013 = $tabScores[12];
	$A8014 = $tabScores[13];
	$A8015 = $tabScores[14];
	$A8016 = $tabScores[15];

	}
	
// *******   Scores quarts de finale   *******

	$tabScores = array() ;
	for ($i=4001 ; $i<8009; $i++)
	{
	$scores = "A".''.$i;
	
	$requete = "SELECT $scores
				FROM $bdcomiteAnnee_r
				WHERE  division=$division and annee=$annee"; 
				$result = mysql_query($requete) ;
					while ($row = mysql_fetch_array($result) )
						{ 
						$tabScores[] = $row[0];
						}
 								
									
	$A4001 = $tabScores[0];
	$A4002 = $tabScores[1];
	$A4003 = $tabScores[2];
	$A4004 = $tabScores[3];

	$A4005 = $tabScores[4];
	$A4006 = $tabScores[5];
	$A4007 = $tabScores[6];
	$A4008 = $tabScores[7];
	}
	
	
// *******   Scores demi de finale   *******

	$tabScores = array() ;
	for ($i=2001 ; $i<2005; $i++)
	{
	$scores = "A".''.$i;
	
	$requete = "SELECT $scores
				FROM $bdcomiteAnnee_r
				WHERE  division=$division and annee=$annee"; 
				$result = mysql_query($requete) ;
					while ($row = mysql_fetch_array($result) )
						{ 
						$tabScores[] = $row[0];
						}
 								
									
	$A2001 = $tabScores[0];
	$A2002 = $tabScores[1];
	$A2003 = $tabScores[2];
	$A2004 = $tabScores[3];
	}	
	
	
	
	
	
	
	
	
	


if ($A8001+$A8002 > 0)
		{	
			if ($A8001>$A8002)
				{
				$clubA4001=$clubA8001;
				}
			else
				{
				$clubA4001=$clubA8002;
		      	}
		}
		else
		{
		$A8001="-";
		$A8002="-";
		$quart1="-";
		}
 
 
 
 if ($A8003+$A8004 > 0)
		{	
			if ($A8003>$A8004)
				{
				$clubA4002=$clubA8003;
				}
			else
				{
				$clubA4002=$clubA8004;
		      	}
		}
		else
		{
		$A8003="-";
		$A8004="-";
		$quart1="-";
		}
 
 
 if ($A8005+$A8006 > 0)
		{	
			if ($A8005>$A8006)
				{
				$clubA4003=$clubA8005;
				}
			else
				{
				$clubA4003=$clubA8006;
		      	}
		}
		else
		{
		$A8005="-";
		$A8006="-";
		$quart1="-";
		}

 
 if ($A8007+$A8008 > 0)
		{	
			if ($A8007>$A8008)
				{
				$clubA4004=$clubA8007;
				}
			else
				{
				$clubA4004=$clubA8008;
		      	}
		}
		else
		{
		$A8007="-";
		$A8008="-";
		$quart1="-";
		}

 
 
 if ($A8009+$A80010 > 0)
		{	
			if ($A8009>$A8010)
				{
				$clubA4005=$clubA8009;
				}
			else
				{
				$clubA4005=$clubA8010;
		      	}
		}
		else
		{
		$A8009="-";
		$A80010="-";
		$quart1="-";
		}

 
 if ($A8011+$A8012 > 0)
		{	
			if ($A8011>$A8012)
				{
				$clubA4006=$clubA8011;
				}
			else
				{
				$clubA4006=$clubA8012;
		      	}
		}
		else
		{
		$A8011="-";
		$A8012="-";
		$quart1="-";
		}

 
 if ($A8013+$A8014 > 0)
		{	
			if ($A8013>$A8014)
				{
				$clubA4007=$clubA8013;
				}
			else
				{
				$clubA4007=$clubA8014;
		      	}
		}
		else
		{
		$A8013="-";
		$A8014="-";
		$quart1="-";
		}

 
 if ($A8015+$A8016 > 0)
		{	
			if ($A8015>$A8016)
				{
				$clubA4008=$clubA8015;
				}
			else
				{
				$clubA4008=$clubA8016;
		      	}
		}
		else
		{
		$A8015="-";
		$A8016="-";
		$quart1="-";
		}






//**************************************************	
//      Equipes qualifiées en quarts de finale	
//**************************************************

global $A4001;
global $A4002;
global $A4003;
global $A4004;

global $A4005;
global $A4006;
global $A4007;
global $A4008;




 
		
		
//**************************************************	
//      Equipes qualifiées en demis de finale	
//**************************************************		



global $A2001;
global $A2002;
global $A2003;
global $A2004;




$tabScores = array() ;
for ($i=2001 ; $i<2005; $i++)
{	 
			
	$scores = "A".''.$i;
	//echo $i;
		
	
	$requete = "SELECT  $bdcomiteAnnee.$scores 
				FROM $bdcomiteAnnee
				WHERE  $bdcomiteAnnee.division=$division and $bdcomiteAnnee.annee=$annee"; 
					$result = mysql_query($requete) ;
					while ($row = mysql_fetch_array($result) )
						{ 
						$tabScores[] = $row[0];
						}

$A2001 = $tabScores[0];
$A2002 = $tabScores[1];
$A2003 = $tabScores[2];
$A2004 = $tabScores[3];		
		


}



 if ($A4001+$A4002 > 0)
		{	
			if ($A4001>$A4002)
				{
				$clubA2001=$clubA4001;
				}
			else
				{
				$clubA2001=$clubA4002;
		      	}
		}
		else
		{
		$A4001="-";
		$A4002="-";
		$quart1="-";
		}
 
 
 
 if ($A4003+$A4004 > 0)
		{	
			if ($A4003>$A4004)
				{
				$clubA2002=$clubA4003;
				}
			else
				{
				$clubA2002=$clubA4004;
		      	}
		}
		else
		{
		$A4003="-";
		$A4004="-";
		$quart1="-";
		}
 
 
 if ($A4005+$A4006 > 0)
		{	
			if ($A4005>$A4006)
				{
				$clubA2003=$clubA4005;
				}
			else
				{
				$clubA2003=$clubA4006;
		      	}
		}
		else
		{
		$A4005="-";
		$A4006="-";
		$quart1="-";
		}

 
 if ($A4007+$A4008 > 0)
		{	
			if ($A4007>$A4008)
				{
				$clubA2004=$clubA4007;
				}
			else
				{
				$clubA2004=$clubA4008;
		      	}
		}
		else
		{
		$A4007="-";
		$A4008="-";
		$quart1="-";
		}



//**************************************************	
//      Equipes qualifiées en finale	
//**************************************************		



global $A1001;
global $A1002;
global $A2003;
global $A2004;




$tabScores = array() ;
for ($i=1001 ; $i<2003; $i++)
{	 
			
	$scores = "A".''.$i;
	
		
	
	$requete = "SELECT  $bdcomiteAnnee.$scores 
				FROM $bdcomiteAnnee
				WHERE  $bdcomiteAnnee.division=$division and $bdcomiteAnnee.annee=$annee"; 
					$result = mysql_query($requete) ;
					while ($row = mysql_fetch_array($result) )
						{ 
						$tabScores[] = $row[0];
						}

$A1001 = $tabScores[0];
$A1002 = $tabScores[1];

}

		
 if ($A2001+$A2002 > 0)
		{	
			if ($A2001>$A2002)
				{
				$clubA1001=$clubA2001;
				}
			else
				{
				$clubA1001=$clubA2002;
		      	}
		}
		else
		{
		$A2001="-";
		$A2002="-";
		$quart1="-";
		}
 
 
 
 if ($A2003+$A2004 > 0)
		{	
			if ($A2003>$A2004)
				{
				$clubA1002=$clubA2003;
				}
			else
				{
				$clubA1002=$clubA2004;
		      	}
		}
		else
		{
		$A2003="-";
		$A2004="-";
		$quart1="-";
		}

		
}
 
 ?>
 
 

