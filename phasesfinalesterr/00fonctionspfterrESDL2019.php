<?php
//***********************************************************************/
//      																*/
//			Affichage de la division dans le bandeau					*/
//											                         	*/
//***********************************************************************/

function affichage2019($division)
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
	echo "2me S&eacute;rie 2me S&eacute;rie 2me S&eacute;rie 2me S&eacute;rie 2me S&eacute;rie 2me S&eacute;rie 2me S&eacute;rie 2me S&eacute;rie 2me S&eacute;rie 2me S&eacute;rie 2me S&eacute;rie ";

elseif ($division == 210)
	echo "3me S&eacute;rie 3me S&eacute;rie 3me S&eacute;rie 3me S&eacute;rie 3me S&eacute;rie 3me S&eacute;rie 3me S&eacute;rie 3me S&eacute;rie 3me S&eacute;rie 3me S&eacute;rie 3me S&eacute;rie ";

elseif ($division == 220)
	echo "4me S&eacute;rie 4me S&eacute;rie 4me S&eacute;rie 4me S&eacute;rie 4me S&eacute;rie 4me S&eacute;rie 4me S&eacute;rie 4me S&eacute;rie 4me S&eacute;rie 4me S&eacute;rie 4me S&eacute;rie ";	

elseif ($division == 270)
	echo "R&eacute;serve R&eacute;serve R&eacute;serve R&eacute;serve R&eacute;serve R&eacute;serve R&eacute;serve R&eacute;serve R&eacute;serve R&eacute;serve R&eacute;serve R&eacute;serve R&eacute;serve R&eacute;serve ";
elseif ($division == 9180)
	echo "R&eacute;serve Promotion R&eacute;serve Promotion R&eacute;serve Promotion R&eacute;serve Promotion R&eacute;serve Promotion R&eacute;serve Promotion ";		
elseif ($division == 9190)
	echo "R&eacute;serve 1re S&eacute;rie R&eacute;serve 1re S&eacute;rie R&eacute;serve 1re S&eacute;rie R&eacute;serve 1re S&eacute;rie R&eacute;serve 1re S&eacute;rie R&eacute;serve 1re S&eacute;rie ";
elseif ($division == 9200)
	echo "R&eacute;serve 2me S&eacute;rie R&eacute;serve 2me S&eacute;rie R&eacute;serve 2me S&eacute;rie R&eacute;serve 2me S&eacute;rie R&eacute;serve 2me S&eacute;rie R&eacute;serve 2me S&eacute;rie R&eacute;serve";
elseif ($division == 9210)
	echo "R&eacute;serve 3me S&eacute;rie R&eacute;serve 3me S&eacute;rie R&eacute;serve 3me S&eacute;rie R&eacute;serve 3me S&eacute;rie R&eacute;serve 3me S&eacute;rie R&eacute;serve 3me S&eacute;rie R&eacute;serve ";
elseif ($division == 9220)
	echo "R&eacute;serve 4me S&eacute;rie R&eacute;serve 4me S&eacute;rie R&eacute;serve 4me S&eacute;rie R&eacute;serve 4me S&eacute;rie R&eacute;serve 4me S&eacute;rie R&eacute;serve 4me S&eacute;rie R&eacute;serve  ";

}

?>


<?php

//***********************************************************************/
//SOMMAIRE																*/
//				Champion (premier de poule )            			    */
//				Finale 													*/
//				Demi finale												*/
//				Demi finale aller-retour								*/
//				Quarts	(ligne 822)                                     */
//		        huitième (ligne 1256)                                    */
//              huitième  + Barrages                                     */
//				Seizieme (ligne 1850)                                    */
//***********************************************************************/


//***** Récupération des variables *******************************



if (isset ($_GET['division'])) $division = $_GET['division']; else $division='-';
if (isset ($_GET['comite'])) $comite = $_GET['comite']; else $comite='-';
if (isset ($_GET['annee'])) $annee = $_GET['annee']; else $annee='-';
if (isset ($_GET['type'])) $type = $_GET['type']; else $type='-';
if (isset ($_GET['id'])) $id = $_GET['id']; else $id='-';


?>

<?php
  require ('../../connect/connection2.php');
  $bdcomiteClub="php".''.$comite.''."_clubs";
  $bdcomite_pfterr ="php".''.$comite.''."_pfterr";

//function championDirect ($bdcomiteClub, $division, $annee, $bdcomiteAnnee)
//{


//global $championDirect;
//global $logoDirect;

//-------------initialisation des variables----------------



//$requete = "SELECT  $bdcomiteClub.nom, $bdcomiteClub.url_logo, $bdcomiteAnnee.clubA1001
//			FROM $bdcomiteClub
//		INNER JOIN $bdcomiteAnnee ON $bdcomiteAnnee.clubA1001=$bdcomiteClub.id
//			WHERE  $bdcomiteAnnee.division=$division and $bdcomiteAnnee.annee=$annee"; 
//				$result = mysql_query($requete) ;
//					while ($row = mysql_fetch_array($result) )
//						{ 
//						$championDirect = $row[0];
//						$logoDirect = $row[1];
//						
//						}

//}
?>
<?php
//***************** Affichage du logo du champion ********************
function logo2019 ($bdcomiteClub, $champion)

{
	global $idChampion;
	
	
	if (isset ($champion)) $champion = $champion; else $champion='-';
	if (isset ($_GET['comite'])) $comite = $_GET['comite']; else $comite='-';
	if (isset ($_GET['annee'])) $annee = $_GET['annee']; else $annee='Pas de variable declarée';
	
	$bdcomiteClub="php".''.$comite.''."_clubs";
	
	
	$requete= mysql_query( " SELECT id
							 FROM $bdcomiteClub
							 WHERE nom='$champion'");
								while($row = mysql_fetch_array($requete))
										{                 	
										$idChampion=$row[0];
										}
											
	//$idChampion =substr ($idChampion,2,5);
	//$idChampion = $idChampion.''.".gif";

	
	
	if ($annee < 2019)
		{
		$idChampion = substr($idChampion,-5,5);
		$idChampion = $idChampion.''.".gif";
		}
	else
		{
		$idChampion = $idChampion;
		$idChampion = $idChampion.''.".gif";	
		}
	
	// echo $idChampion;	
	 echo "<img src=\"/images/blasons100_100/$idChampion\">";
	
}

?>


<?php 
//***********************************************************************/
//																		*/
//    ----------------Finale : equipes et logos------------------   	*/
//																		*/
//***********************************************************************/

function finale2019 ($bdcomiteClub, $division, $annee)
 {
	
	if (isset ($_GET['comite'])) $comite = $_GET['comite']; else $comite='-';
	
	$bdcomiteClub="php".''.$comite.''."_clubs";
	$bdcomite_pfterr ="php".''.$comite.''."_pfterr";
	
	global $clubA1001;global $clubA1002;global $champion;

	for ($i=1001 ; $i<1003; $i++)
		
	{	 
   	 $equipes = "clubA".''.$i;
	
	 $requete = "SELECT  $bdcomiteClub.nom, $bdcomite_pfterr.$equipes
				FROM $bdcomiteClub
				INNER JOIN $bdcomite_pfterr ON $bdcomite_pfterr.$equipes=$bdcomiteClub.id
				WHERE  $bdcomite_pfterr.division=$division and $bdcomite_pfterr.annee=$annee"; 
							$result = mysql_query($requete) ;
							while ($row = mysql_fetch_array($result) )
								{ 
								 $tabEquipes[] = $row[0];
								}

	 if (isset ($tabEquipes[0])) $clubA1001 = $tabEquipes[0]; else $clubA1001='-'; 
	 if (isset ($tabEquipes[1])) $clubA1002 = $tabEquipes[1]; else $clubA1002='-';

	}

	 //*********** Récupération des résultats et traitements *****************************

	global $A2001;global $A2002;global $A2003;global $A2004;

	global $A1001;global $A1002;	
	
	 if (isset ($A1001)) $A1001 = $A1001; else $A1001='-'; 
	 if (isset ($A1002)) $A1002 = $A1002; else $A1002='-';   


// *******   Scores  finale   *******

	$tabScores = array() ;
	
	
	$requete = "SELECT A1001, A1002
				FROM $bdcomite_pfterr
				WHERE  division=$division and annee=$annee"; 
				$result = mysql_query($requete) ;
					while ($row = mysql_fetch_array($result) )
						{ 
						$A1001 = $row[0];
						$A1002 = $row[1];
						}


if ($A1001+$A1002 > 0)	{ if ($A1001>$A1002)	{$champion=$clubA1001;	} else	{$champion=$clubA1002;	}}	else	{ $champion="-";$A1001="-";$A1002="-";}
		 
	


}

?> 


<?php
//***********************************************************************/
//																		*/
//---------------Demi  Finale : equipes et logos------------------		*/
//																		*/
//***********************************************************************/


//*********    saisie des equipes  *************************************


function demi2019 ($bdcomiteClub, $division, $annee)
 {
	
	if (isset ($_GET['comite'])) $comite = $_GET['comite']; else $comite='-';
	
	$bdcomiteClub="php".''.$comite.''."_clubs";
	$bdcomite_pfterr ="php".''.$comite.''."_pfterr";
	
	
		
	global $clubA2001;global $clubA2002;global $clubA2003;global $clubA2004;
	global $clubA1001;global $clubA1002;GLOBAL $champion;

	
	
	for ($i=2001 ; $i<2005; $i++)
		
	{	 
   	 $equipes = "clubA".''.$i;
	
	 $requete = "SELECT  $bdcomiteClub.nom, $bdcomite_pfterr.$equipes
				FROM $bdcomiteClub
				INNER JOIN $bdcomite_pfterr ON $bdcomite_pfterr.$equipes=$bdcomiteClub.id
				WHERE  $bdcomite_pfterr.division=$division and $bdcomite_pfterr.annee=$annee"; 
							$result = mysql_query($requete) ;
							while ($row = mysql_fetch_array($result) )
								{ 
								 $tabEquipes[] = $row[0];
								}

	 if (isset ($tabEquipes[0])) $clubA2001 = $tabEquipes[0]; else $clubA2001='-'; 
	 if (isset ($tabEquipes[1])) $clubA2002 = $tabEquipes[1]; else $clubA2002='-';
	 if (isset ($tabEquipes[2])) $clubA2003 = $tabEquipes[2]; else $clubA2003='-';
	 if (isset ($tabEquipes[3])) $clubA2004 = $tabEquipes[3]; else $clubA2004='-';
	}
	
	//*********** Récupération des résultats et traitements *****************************

	global $A2001;global $A2002;global $A2003;global $A2004;

	global $A1001;global $A1002;	

		
// *******   Scores demi de finale   *******

	$tabScores = array() ;
	for ($i=2001 ; $i<2005; $i++)
	{
	$scores = "A".''.$i;
	
	$requete = "SELECT $scores
				FROM $bdcomite_pfterr
				WHERE  division=$division and annee=$annee"; 
				$result = mysql_query($requete) ;
					while ($row = mysql_fetch_array($result) )
						{ 
						$tabScores[] = $row[0];
						}
 									
	 if (isset ($tabScores[0])) $A2001 = $tabScores[0]; else $A2001='-'; 
	 if (isset ($tabScores[1])) $A2002 = $tabScores[1]; else $A2002='-';
	 if (isset ($tabScores[2])) $A2003 = $tabScores[2]; else $A2003='-';
	 if (isset ($tabScores[3])) $A2004 = $tabScores[3]; else $A2004='-';
	}	

// *******   Scores  finale   *******

	$tabScores = array() ;
	
	
	$requete = "SELECT A1001, A1002
				FROM $bdcomite_pfterr
				WHERE  division=$division and annee=$annee"; 
				$result = mysql_query($requete) ;
					while ($row = mysql_fetch_array($result) )
						{ 
						$A1001 = $row[0];
						$A1002 = $row[1];
						}

if ($A2001+$A2002 > 0)	{	if ($A2001>$A2002)	{$clubA1001=$clubA2001;	} else	{$clubA1001=$clubA2002;	}}	else{	$clubA1001="-"; $A2001="-";	$A2002="-";	$A1001="-";}
if ($A2003+$A2004 > 0)	{	if ($A2003>$A2004)	{$clubA1002=$clubA2003;	} else	{$clubA1002=$clubA2004;	}}	else{	$clubA1002="-"; $A2003="-";	$A2004="-";	$A1002="-";}


if ($A1001+$A1002 > 0)	{ if ($A1001>$A1002)	{$champion=$clubA1001;	} else	{$champion=$clubA1002;	}}	else	{ $champion="-";}

 }	
  ?>




<?php
//***********************************************************************/
//																		*/
//---------------Demi  Finale AR : equipes et logos------------------	*/
//																		*/
//***********************************************************************/

function demiAR2019 ($bdcomiteClub, $division, $annee)
 	{
	
	global $clubA2001;global $clubA2002;global $clubA2003;global $clubA2004;

	global $clubA1001;global $clubA1002;global $champion;	
		
	if (isset ($_GET['comite'])) $comite = $_GET['comite']; else $comite='-';
	
	$bdcomiteClub="php".''.$comite.''."_clubs";
	$bdcomite_pfterr ="php".''.$comite.''."_pfterr";
	
	for ($i=2001 ; $i<2005; $i++)
		
	{	 
   	 $equipes = "clubA".''.$i;
	
	 $requete = "SELECT  $bdcomiteClub.nom, $bdcomite_pfterr.$equipes
				FROM $bdcomiteClub
				INNER JOIN $bdcomite_pfterr ON $bdcomite_pfterr.$equipes=$bdcomiteClub.id
				WHERE  $bdcomite_pfterr.division=$division and $bdcomite_pfterr.annee=$annee"; 
							$result = mysql_query($requete) ;
							while ($row = mysql_fetch_array($result) )
								{ 
								 $tabEquipes[] = $row[0];
								}

	 if (isset ($tabEquipes[0])) $clubA2001 = $tabEquipes[0]; else $clubA2001='-'; 
	 if (isset ($tabEquipes[1])) $clubA2002 = $tabEquipes[1]; else $clubA2002='-';
	 if (isset ($tabEquipes[2])) $clubA2003 = $tabEquipes[2]; else $clubA2003='-';
	 if (isset ($tabEquipes[3])) $clubA2004 = $tabEquipes[3]; else $clubA2004='-';
	}

	
//*********** Récupération des résultats et traitements *****************************
//	ALLER : GA
	global $A4001;global $A4002;global $A4003;global $A4004;
//   Pts
	global $A2001;global $A2002;global $A2003;global $A2004;

//RETOUR : GA
	global $R4001;global $R4002;global $R4003;global $R4004;
//	Pts
	global $R2001;global $R2002;global $R2003;global $R2004;
			
	

	global $A1001;global $A1002;	

		
// *******   Scores demi de finale   *******
// PTS Aller
	$tabScores = array() ;
	for ($i=2001 ; $i<2005; $i++)
	{
	$scores = "A".''.$i;
	
	$requete = "SELECT $scores
				FROM $bdcomite_pfterr
				WHERE  division=$division and annee=$annee"; 
				$result = mysql_query($requete) ;
					while ($row = mysql_fetch_array($result) )
						{ 
						$tabScores[] = $row[0];
						}
 									
	 if (isset ($tabScores[0])) $A2001 = $tabScores[0]; else $A2001='-'; 
	 if (isset ($tabScores[1])) $A2002 = $tabScores[1]; else $A2002='-';
	 if (isset ($tabScores[2])) $A2003 = $tabScores[2]; else $A2003='-';
	 if (isset ($tabScores[3])) $A2004 = $tabScores[3]; else $A2004='-';
	}	
//GA Aller
$tabScores = array() ;
	for ($i=4001 ; $i<4005; $i++)
	{
	$scores = "A".''.$i;
	
	$requete = "SELECT $scores
				FROM $bdcomite_pfterr
				WHERE  division=$division and annee=$annee"; 
				$result = mysql_query($requete) ;
					while ($row = mysql_fetch_array($result) )
						{ 
						$tabScores[] = $row[0];
						}
 									
	 if (isset ($tabScores[0])) $A4001 = $tabScores[0]; else $A4001='-'; 
	 if (isset ($tabScores[1])) $A4002 = $tabScores[1]; else $A4002='-';
	 if (isset ($tabScores[2])) $A4003 = $tabScores[2]; else $A4003='-';
	 if (isset ($tabScores[3])) $A4004 = $tabScores[3]; else $A4004='-';
	}	
	
	
	$tabScores = array() ;
	for ($i=2001 ; $i<2005; $i++)
	{
	$scores = "R".''.$i;
	
	$requete = "SELECT $scores
				FROM $bdcomite_pfterr
				WHERE  division=$division and annee=$annee"; 
				$result = mysql_query($requete) ;
					while ($row = mysql_fetch_array($result) )
						{ 
						$tabScores[] = $row[0];
						}
 									
	 if (isset ($tabScores[0])) $R2001 = $tabScores[0]; else $R2001='-'; 
	 if (isset ($tabScores[1])) $R2002 = $tabScores[1]; else $R2002='-';
	 if (isset ($tabScores[2])) $R2003 = $tabScores[2]; else $R2003='-';
	 if (isset ($tabScores[3])) $R2004 = $tabScores[3]; else $R2004='-';
	}	
	
	
	$tabScores = array() ;
	for ($i=4001 ; $i<4005; $i++)
	{
	$scores = "R".''.$i;
	
	$requete = "SELECT $scores
				FROM $bdcomite_pfterr
				WHERE  division=$division and annee=$annee"; 
				$result = mysql_query($requete) ;
					while ($row = mysql_fetch_array($result) )
						{ 
						$tabScores[] = $row[0];
						}
 									
	 if (isset ($tabScores[0])) $R4001 = $tabScores[0]; else $R4001='-'; 
	 if (isset ($tabScores[1])) $R4002 = $tabScores[1]; else $R4002='-';
	 if (isset ($tabScores[2])) $R4003 = $tabScores[2]; else $R4003='-';
	 if (isset ($tabScores[3])) $R4004 = $tabScores[3]; else $R4004='-';
	}	
	
	
	// *******   Scores  finale   *******

	$tabScores = array() ;
	
	
	$requete = "SELECT A1001, A1002
				FROM $bdcomite_pfterr
				WHERE  division=$division and annee=$annee"; 
				$result = mysql_query($requete) ;
					while ($row = mysql_fetch_array($result) )
						{ 
						$A1001 = $row[0];
						$A1002 = $row[1];
						}
						
global $Pts2001;	
global $Pts2002;
global $Pts2003;
global $Pts2004;

global $GA4001;	
global $GA4002;
global $GA4003;
global $GA4004;						

$Pts2001 = $A2001+$R2001;	
$Pts2002 = $A2002+$R2002;
$Pts2003 = $A2003+$R2003;
$Pts2004 = $A2004+$R2004;

$GA4001 = $A4001+$R4001;	
$GA4002 = $A4002+$R4002;
$GA4003 = $A4003+$R4003;
$GA4004 = $A4004+$R4004;
			
						
						
						
if ($Pts2001+$A2002 > 0)	{	if (($A2001+$R2001)>($A2002+$R2002))	{$clubA1001=$clubA2001;	} else	{$clubA1001=$clubA2002;	}}	else{	$A2001="-";	$A2002="-";	$quart1="-";}
if ($A2003+$A2004 > 0)	{	if ($A2003>$A2004)	{$clubA1002=$clubA2003;	} else	{$clubA1002=$clubA2004;	}}	else{	$A2003="-";	$A2004="-";	$quart1="-";}

if ($A1001+$A1002 > 0)	{ if ($A1001>$A1002)	{$champion=$clubA1001;	} else	{$champion=$clubA1002;	}}	else	{ $champion="-";}

	
		
}

?> 
	  
 <?php
//***********************************************************************/
//																		*/
//---------------Quarts de Finale : ------------------	*/
//																		*/
//***********************************************************************/

function quarts2019 ($bdcomiteClub, $division, $annee)
{
	if (isset ($_GET['comite'])) $comite = $_GET['comite']; else $comite='-';
	
	
	
	$bdcomiteClub=($comite.''."_clubs");
	$bdcomite_pfterr = $comite.''."_pfterr_e";
	$bdcomite_pfterr = $comite.''."_pfterr_r";
	
	global $clubA4001;global $clubA4002;global $clubA4003;global $clubA4004;
	global $clubA4005;global $clubA4006;global $clubA4007;global $clubA4008;

	global $clubA2001;global $clubA2002;global $clubA2003;global $clubA2004;

	global $clubA1001;global $clubA1002;global $champion;
			
	
	$tabEquipes = array();
	
	for ($i=4001 ; $i<4009; $i++)
		
	{	 
   	 $equipes = "clubA".''.$i;
	
	 $requete = "SELECT  $bdcomiteClub.nom, $bdcomite_pfterr.$equipes
				FROM $bdcomite_pfterr
				INNER JOIN $bdcomiteClub ON $bdcomite_pfterr.$equipes=$bdcomiteClub.id
				WHERE  $bdcomite_pfterr.division=$division and $bdcomite_pfterr.annee=$annee"; 
							$result = mysql_query($requete) ;
							while ($row = mysql_fetch_array($result) )
								{ 
								 $tabEquipes[] = $row[0];
								}
echo $bdcomite_pfterr;

	 if (isset ($tabEquipes[0])) $clubA4001 = $tabEquipes[0]; else $clubA4001='-'; 
	 if (isset ($tabEquipes[1])) $clubA4002 = $tabEquipes[1]; else $clubA4002='-';
	 if (isset ($tabEquipes[2])) $clubA4003 = $tabEquipes[2]; else $clubA4003='-';
	 if (isset ($tabEquipes[3])) $clubA4004 = $tabEquipes[3]; else $clubA4004='-';
	
	 if (isset ($tabEquipes[4])) $clubA4005 = $tabEquipes[4]; else $clubA4005='-';
	 if (isset ($tabEquipes[5])) $clubA4006 = $tabEquipes[5]; else $clubA4006='-';
	 if (isset ($tabEquipes[6])) $clubA4007 = $tabEquipes[6]; else $clubA4007='-';
	 if (isset ($tabEquipes[7])) $clubA4008 = $tabEquipes[7]; else $clubA4008='-';


	}
		//***************    Récupération des scores  *************

	global $A4001;global $A4002;global $A4003;global $A4004;
	global $A4005;global $A4006;global $A4007;global $A4008;

	global $A2001;global $A2002;global $A2003;global $A2004;

	global $A1001;global $A1002;	

	$tabScores = array() ;
	for ($i=4001 ; $i<4009; $i++)
	{
	$scores = "A".''.$i;
	
	$requete = "SELECT $scores
				FROM $bdcomite_pfterr
				WHERE  division=$division and annee=$annee"; 
				$result = mysql_query($requete) ;
					while ($row = mysql_fetch_array($result) )
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
	

	
// *******   Scores demi de finale   *******

	$tabScores = array() ;
	for ($i=2001 ; $i<2005; $i++)
	{
	$scores = "A".''.$i;
	
	$requete = "SELECT $scores
				FROM $bdcomite_pfterr
				WHERE  division=$division and annee=$annee"; 
				$result = mysql_query($requete) ;
					while ($row = mysql_fetch_array($result) )
						{ 
						$tabScores[] = $row[0];
						}
 								
									
	if (isset ($tabScores[0])) $A2001 = $tabScores[0]; else $A2001='-'; 
	if (isset ($tabScores[1])) $A2002 = $tabScores[1]; else $A2002='-';
	if (isset ($tabScores[2])) $A2003 = $tabScores[2]; else $A2003='-';
	if (isset ($tabScores[3])) $A2004 = $tabScores[3]; else $A2004='-';
	}	
	


// *******   Scores  finale   *******

	$tabScores = array() ;
	
	
	$requete = "SELECT A1001, A1002
				FROM $bdcomite_pfterr
				WHERE  division=$division and annee=$annee"; 
				$result = mysql_query($requete) ;
					while ($row = mysql_fetch_array($result) )
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

if ($A1001+$A1002 > 0)	{	if ($A2001>$A2002)	{$clubA1001=$clubA2001;	} else	{$clubA1001=$clubA2002;	}}	else{	$A2001="-";	$A2002="-";	$quart1="-";}	

if ($A1001+$A1002 > 0)	{ if ($A1001>$A1002)	{$champion=$clubA1001;	} else	{$champion=$clubA1002;	}}	else	{ $champion="-";}						


}
?>
 <?php
//***********************************************************************/
//																		*/
//---------------Quarts de Finale --- plus Barrages ------------------	*/
//																		*/
//***********************************************************************/

function quartsPlusBarrages2019 ($bdcomiteClub, $division, $annee)
{
	

	global $clubA8001;global $clubA8002;global $clubA8003;global $clubA8004;
	global $clubA8005;global $clubA8006;global $clubA8007;global $clubA8008;
	
	global $clubA4001;global $clubA4002;global $clubA4003;global $clubA4004;
	global $clubA4005;global $clubA4006;global $clubA4007;global $clubA4008;

	global $clubA2001;global $clubA2002;global $clubA2003;global $clubA2004;

	global $clubA1001;global $clubA1002;global $champion;
		
	$tabEquipes = array();
	
	$bdcomite_pfterr = "phpcbl_pfterr_e";
	$bdcomite_pfterr = "phpcbl_pfterr_r";
	
	
	
	
	for ($i=8001 ; $i<8009; $i++)
		
	{	 
   	 $equipes = "clubA".''.$i;
	
	 $requete = "SELECT  $bdcomiteClub.nom, $bdcomite_pfterr.$equipes
				FROM $bdcomiteClub
				INNER JOIN $bdcomite_pfterr ON $bdcomite_pfterr.$equipes=$bdcomiteClub.id
				WHERE  $bdcomite_pfterr.division=$division and $bdcomite_pfterr.annee=$annee"; 
							$result = mysql_query($requete) ;
							while ($row = mysql_fetch_array($result) )
								{ 
								 $tabEquipes[] = $row[0];
								}

	 if (isset ($tabEquipes[0])) $clubA8001 = $tabEquipes[0]; else $clubA8001='-'; 
	 if (isset ($tabEquipes[1])) $clubA8002 = $tabEquipes[1]; else $clubA8002='-';
	 if (isset ($tabEquipes[2])) $clubA8003 = $tabEquipes[2]; else $clubA8003='-';
	 if (isset ($tabEquipes[3])) $clubA8004 = $tabEquipes[3]; else $clubA8004='-';
	
	 if (isset ($tabEquipes[4])) $clubA8005 = $tabEquipes[4]; else $clubA8005='-';
	 if (isset ($tabEquipes[5])) $clubA8006 = $tabEquipes[5]; else $clubA8006='-';
	 if (isset ($tabEquipes[6])) $clubA8007 = $tabEquipes[6]; else $clubA8007='-';
	 if (isset ($tabEquipes[7])) $clubA8008 = $tabEquipes[7]; else $clubA8008='-';
	
	}
	
	
	for ($i=4001 ; $i<4009; $i++)
		
	{	 
   	 $equipes = "clubA".''.$i;
	
	 $requete = "SELECT  $bdcomiteClub.nom, $bdcomite_pfterr.$equipes
				FROM $bdcomiteClub
				INNER JOIN $bdcomite_pfterr ON $bdcomite_pfterr.$equipes=$bdcomiteClub.id
				WHERE  $bdcomite_pfterr.division=$division and $bdcomite_pfterr.annee=$annee"; 
							$result = mysql_query($requete) ;
							while ($row = mysql_fetch_array($result) )
								{ 
								 $tabEquipes[] = $row[0];
								}


	 if (isset ($tabEquipes[0])) $clubA4001 = $tabEquipes[0]; else $clubA4001='-'; 
	 if (isset ($tabEquipes[1])) $clubA4002 = $tabEquipes[1]; else $clubA4002='-';
	 if (isset ($tabEquipes[2])) $clubA4003 = $tabEquipes[2]; else $clubA4003='-';
	 if (isset ($tabEquipes[3])) $clubA4004 = $tabEquipes[3]; else $clubA4004='-';
	
	 if (isset ($tabEquipes[4])) $clubA4005 = $tabEquipes[4]; else $clubA4005='-';
	 if (isset ($tabEquipes[5])) $clubA4006 = $tabEquipes[5]; else $clubA4006='-';
	 if (isset ($tabEquipes[6])) $clubA4007 = $tabEquipes[6]; else $clubA4007='-';
	 if (isset ($tabEquipes[7])) $clubA4008 = $tabEquipes[7]; else $clubA4008='-';


	}


	global $A4001;global $A4002;global $A4003;global $A4004;
	global $A4005;global $A4006;global $A4007;global $A4008;

	global $A2001;global $A2002;global $A2003;global $A2004;

	global $A1001;global $A1002;	

	$tabScores = array() ;
	for ($i=4001 ; $i<4009; $i++)
	{
	$scores = "A".''.$i;
	
	$requete = "SELECT $scores
				FROM $bdcomite_pfterr
				WHERE  division=$division and annee=$annee"; 
				$result = mysql_query($requete) ;
					while ($row = mysql_fetch_array($result) )
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
	

	
// *******   Scores demi de finale   *******

	$tabScores = array() ;
	for ($i=2001 ; $i<2005; $i++)
	{
	$scores = "A".''.$i;
	
	$requete = "SELECT $scores
				FROM $bdcomite_pfterr
				WHERE  division=$division and annee=$annee"; 
				$result = mysql_query($requete) ;
					while ($row = mysql_fetch_array($result) )
						{ 
						$tabScores[] = $row[0];
						}
 								
									
	if (isset ($tabScores[0])) $A2001 = $tabScores[0]; else $A2001='-'; 
	if (isset ($tabScores[1])) $A2002 = $tabScores[1]; else $A2002='-';
	if (isset ($tabScores[2])) $A2003 = $tabScores[2]; else $A2003='-';
	if (isset ($tabScores[3])) $A2004 = $tabScores[3]; else $A2004='-';
	}	
	


// *******   Scores  finale   *******

	$tabScores = array() ;
	
	
	$requete = "SELECT A1001, A1002
				FROM $bdcomite_pfterr
				WHERE  division=$division and annee=$annee"; 
				$result = mysql_query($requete) ;
					while ($row = mysql_fetch_array($result) )
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

if ($A1001+$A1002 > 0)	{	if ($A2001>$A2002)	{$clubA1001=$clubA2001;	} else	{$clubA1001=$clubA2002;	}}	else{	$A2001="-";	$A2002="-";	$quart1="-";}	

if ($A1001+$A1002 > 0)	{ if ($A1001>$A1002)	{$champion=$clubA1001;	} else	{$champion=$clubA1002;	}}	else	{ $champion="-";}						


}
?>


 <?php
 
//*************************************************************** 
//* 															*
//*                    HUITIEME DE FINALE						*
//* 															*
//* 															*
//***************************************************************


 
function huitieme2019 ($bdcomiteClub, $division, $annee)

{
	if (isset ($_GET['comite'])) $comite = $_GET['comite']; else $comite='-';

	$bdcomite_pfterr = $comite.''."_pfterr_e";
	$bdcomite_pfterr = $comite.''."_pfterr_r";
	
	
//*******************    Récupérations des Equipes	**********************************

global $clubA8001;global $clubA8002;global $clubA8003;global $clubA8004;
global $clubA8005;global $clubA8006;global $clubA8007;global $clubA8008;
global $clubA8009;global $clubA8010;global $clubA8011;global $clubA8012;
global $clubA8013;global $clubA8014;global $clubA8015;global $clubA8016;

global $clubA4001;global $clubA4002;global $clubA4003;global $clubA4004;
global $clubA4005;global $clubA4006;global $clubA4007;global $clubA4008;

global $clubA2001;global $clubA2002;global $clubA2003;global $clubA2004;

global $clubA1001;global $clubA1002;global $champion;


	

	$tabEquipes = array();
	
	for ($i=8001 ; $i<8017; $i++)
		
	{	 
   	 $equipes = "clubA".''.$i;
	
	 $requete = "SELECT  $bdcomiteClub.nom, $bdcomite_pfterr.$equipes
				FROM $bdcomiteClub
				INNER JOIN $bdcomite_pfterr ON $bdcomite_pfterr.$equipes=$bdcomiteClub.id
				WHERE  $bdcomite_pfterr.division=$division and $bdcomite_pfterr.annee=$annee"; 
							$result = mysql_query($requete) ;
							while ($row = mysql_fetch_array($result) )
								{ 
								 $tabEquipes[] = $row[0];
								}


	 if (isset ($tabEquipes[0])) $clubA8001 = $tabEquipes[0]; else $clubA8001='-'; 
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

	}
	
	
//*******************    Récupérations des scores	**********************************

global $A8001;global $A8002;global $A8003;global $A8004;
global $A8005;global $A8006;global $A8007;global $A8008;
global $A8009;global $A8010;global $A8011;global $A8012;
global $A8013;global $A8014;global $A8015;global $A8016;

global $A4001;global $A4002;global $A4003;global $A4004;
global $A4005;global $A4006;global $A4007;global $A4008;

global $A2001;global $A2002;global $A2003;global $A2004;

global $A1001;global $A1002;	
	

//***********************************************************************/
//																		*/
//---------------huitièmes de Finale : scores      ------------------	*/
//																		*/
//***********************************************************************/

// *******   Scores huitieme de finale   ******

	$tabScores = array() ;
	for ($i=8001 ; $i<8017; $i++)
	{
	$scores = "A".''.$i;
	
	$requete = "SELECT $scores
				FROM $bdcomite_pfterr
				WHERE  division=$division and annee=$annee"; 
				$result = mysql_query($requete) ;
					while ($row = mysql_fetch_array($result) )
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
    
	if (isset ($tabScores[8])) $A8009 = $tabScores[8]; else $A8009='-'; 
	if (isset ($tabScores[9])) $A8010 = $tabScores[9]; else $A8010='-';
	if (isset ($tabScores[10])) $A8011 = $tabScores[10]; else $A8011='-';
	if (isset ($tabScores[11])) $A8012 = $tabScores[11]; else $A8012='-';
	
	if (isset ($tabScores[12])) $A8013 = $tabScores[12]; else $A8013='-';
	if (isset ($tabScores[13])) $A8014 = $tabScores[13]; else $A8014='-';
	if (isset ($tabScores[14])) $A8015 = $tabScores[14]; else $A8015='-';
	if (isset ($tabScores[15])) $A8016 = $tabScores[15]; else $A8016='-';

	}
	
	
	$tabScores = array() ;
	for ($i=4001 ; $i<4009; $i++)
	{
	$scores = "A".''.$i;
	
	$requete = "SELECT $scores
				FROM $bdcomite_pfterr
				WHERE  division=$division and annee=$annee"; 
				$result = mysql_query($requete) ;
					while ($row = mysql_fetch_array($result) )
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
	

	
// *******   Scores demi de finale   *******

	$tabScores = array() ;
	for ($i=2001 ; $i<2005; $i++)
	{
	$scores = "A".''.$i;
	
	$requete = "SELECT $scores
				FROM $bdcomite_pfterr
				WHERE  division=$division and annee=$annee"; 
				$result = mysql_query($requete) ;
					while ($row = mysql_fetch_array($result) )
						{ 
						$tabScores[] = $row[0];
						}
 								
									
	if (isset ($tabScores[0])) $A2001 = $tabScores[0]; else $A2001='-'; 
	if (isset ($tabScores[1])) $A2002 = $tabScores[1]; else $A2002='-';
	if (isset ($tabScores[2])) $A2003 = $tabScores[2]; else $A2003='-';
	if (isset ($tabScores[3])) $A2004 = $tabScores[3]; else $A2004='-';
	}	
	


// *******   Scores  finale   *******

	$tabScores = array() ;
	
	
	$requete = "SELECT A1001, A1002
				FROM $bdcomite_pfterr
				WHERE  division=$division and annee=$annee"; 
				$result = mysql_query($requete) ;
					while ($row = mysql_fetch_array($result) )
						{ 
						$A1001 = $row[0];
						$A1002 = $row[1];
						}							
	


		
//************************************************************************************
//*******************    Récupérations des Scores	**********************************
//************************************************************************************


// Traitement des résultats des 8me


if ($A8001+$A8002 > 0)	{	if ($A8001>$A8002)	{$clubA4001=$clubA8001;	} else	{$clubA4001=$clubA8002;	}}	else{	$A8001="-";	$A8002="-";	$quart1="-";}
if ($A8003+$A8004 > 0)	{	if ($A8003>$A8004)	{$clubA4002=$clubA8003;	} else	{$clubA4002=$clubA8004;	}}	else{	$A8003="-";	$A8004="-";	$quart1="-";}
if ($A8005+$A8006 > 0)	{	if ($A8005>$A8006)	{$clubA4003=$clubA8005;	} else	{$clubA4003=$clubA8006;	}}	else{	$A8005="-";	$A8006="-";	$quart1="-";}
if ($A8007+$A8008 > 0)	{	if ($A8007>$A8008)	{$clubA4004=$clubA8007;	} else	{$clubA4004=$clubA8008;	}}	else{	$A8007="-";	$A8008="-";	$quart1="-";}
if ($A8009+$A8010 > 0)	{	if ($A8009>$A8010)	{$clubA4005=$clubA8009;	} else	{$clubA4005=$clubA8010;	}}	else{	$A8009="-";	$A8010="-";	$quart1="-";}
if ($A8011+$A8012 > 0)	{	if ($A8011>$A8012)	{$clubA4006=$clubA8011;	} else	{$clubA4006=$clubA8012;	}}	else{	$A8011="-";	$A8012="-";	$quart1="-";}
if ($A8013+$A8014 > 0)	{	if ($A8013>$A8014)	{$clubA4007=$clubA8013;	} else	{$clubA4007=$clubA8014;	}}	else{	$A8013="-";	$A8014="-";	$quart1="-";}
if ($A8015+$A8016 > 0)	{	if ($A8015>$A8016)	{$clubA4008=$clubA8015;	} else	{$clubA4008=$clubA8016;	}}	else{	$A8015="-";	$A8016="-";	$quart1="-";}

if ($A4001+$A4002 > 0)	{	if ($A4001>$A4002)	{$clubA2001=$clubA4001;	} else	{$clubA2001=$clubA4002;	}}	else{	$A4001="-";	$A4002="-";	$quart1="-";}
if ($A4003+$A4004 > 0)	{	if ($A4003>$A4004)	{$clubA2002=$clubA4003;	} else	{$clubA2002=$clubA4004;	}}	else{	$A4003="-";	$A4004="-";	$quart1="-";}
if ($A4005+$A4006 > 0)	{	if ($A4005>$A4006)	{$clubA2003=$clubA4005;	} else	{$clubA2003=$clubA4006;	}}	else{	$A4005="-";	$A4006="-";	$quart1="-";}
if ($A4007+$A4008 > 0)	{	if ($A4007>$A4008)	{$clubA2004=$clubA4007;	} else	{$clubA2004=$clubA4008;	}}	else{	$A4007="-";	$A4008="-";	$quart1="-";}

if ($A2001+$A2002 > 0)	{	if ($A2001>$A2002)	{$clubA1001=$clubA2001;	} else	{$clubA1001=$clubA2002;	}}	else{	$A2001="-";	$A2002="-";	$quart1="-";}
if ($A2003+$A2004 > 0)	{	if ($A2003>$A2004)	{$clubA1002=$clubA2003;	} else	{$clubA1002=$clubA2004;	}}	else{	$A2003="-";	$A2004="-";	$quart1="-";}

if ($A1001+$A1002 > 0)	{	if ($A2001>$A2002)	{$clubA1001=$clubA2001;	} else	{$clubA1001=$clubA2002;	}}	else{	$A2001="-";	$A2002="-";	$quart1="-";}			

if ($A1001+$A1002 > 0)	{ if ($A1001>$A1002)	{$champion=$clubA1001;	} else	{$champion=$clubA1002;	}}	else	{ $champion="-";}

}
 
 ?>
  <?php
 
//*************************************************************** 
//* 															*
//*                    HUITIEME DE FINALE et BARRGES						*
//* 															*
//* 															*
//***************************************************************


 
function huitiemeEtBarrages2019 ($bdcomiteClub, $division, $annee)

{
	
	if (isset ($_GET['comite'])) $comite = $_GET['comite']; else $comite='-';

	$bdcomite_pfterr = $comite.''."_pfterr_e";
	$bdcomite_pfterr = $comite.''."_pfterr_r";
	
	
//*******************    Récupérations des Equipes	**********************************


	global $clubA1601;global $clubA1602;global $clubA1603;global $clubA1604;
	global $clubA1605;global $clubA1606;global $clubA1607;global $clubA1608;

	global $clubA8001;global $clubA8002;global $clubA8003;global $clubA8004;
	global $clubA8005;global $clubA8006;global $clubA8007;global $clubA8008;
	global $clubA8009;global $clubA8010;global $clubA8011;global $clubA8012;
	global $clubA8013;global $clubA8014;global $clubA8015;global $clubA8016;

	global $clubA4001;global $clubA4002;global $clubA4003;global $clubA4004;
	global $clubA4005;global $clubA4006;global $clubA4007;global $clubA4008;

	global $clubA2001;global $clubA2002;global $clubA2003;global $clubA2004;

	global $clubA1001;global $clubA1002;global $champion;


	
//******** Equipes barragisstes (8 equipes) *******	
	
	$tabEquipes = array();
	
	for ($i=1601 ; $i<1609; $i++)
	
	
	{	 
   	 $equipes = "clubA".''.$i;
	
	
     $requete = "SELECT  $bdcomiteClub.nom, $bdcomite_pfterr.$equipes
				FROM $bdcomiteClub
				INNER JOIN $bdcomite_pfterr ON $bdcomite_pfterr.$equipes=$bdcomiteClub.id
				WHERE  $bdcomite_pfterr.division=$division and $bdcomite_pfterr.annee=$annee"; 
							$result = mysql_query($requete) ;
							while ($row = mysql_fetch_array($result) )
								{ 
								 $tabEquipes[] = $row[0];
								}

														
		if (isset ($tabEquipes[0])) $clubA1601 = $tabEquipes[0]; else $clubA1601='-'; 
		if (isset ($tabEquipes[1])) $clubA1602 = $tabEquipes[1]; else $clubA1602='-';
		if (isset ($tabEquipes[2])) $clubA1603 = $tabEquipes[2]; else $clubA1603='-';
		if (isset ($tabEquipes[3])) $clubA1604 = $tabEquipes[3]; else $clubA1604='-';
			
		if (isset ($tabEquipes[4])) $clubA1605 = $tabEquipes[4]; else $clubA1605='-';
		if (isset ($tabEquipes[5])) $clubA1606 = $tabEquipes[5]; else $clubA1606='-';
		if (isset ($tabEquipes[6])) $clubA1607 = $tabEquipes[6]; else $clubA1607='-';
		if (isset ($tabEquipes[7])) $clubA1608 = $tabEquipes[7]; else $clubA1608='-';

	}
	echo $clubA1601;
//******** Equipes qualifiées directement *******		
	
	
	$tabEquipes = array();
	
	for ($i=8001 ; $i<8017; $i++)
		
	{	 
   	 $equipes = "clubA".''.$i;
	
	 $requete = "SELECT  $bdcomiteClub.nom, $bdcomite_pfterr.$equipes
				FROM $bdcomiteClub
				INNER JOIN $bdcomite_pfterr ON $bdcomite_pfterr.$equipes=$bdcomiteClub.id
				WHERE  $bdcomite_pfterr.division=$division and $bdcomite_pfterr.annee=$annee"; 
							$result = mysql_query($requete) ;
							while ($row = mysql_fetch_array($result) )
								{ 
								 $tabEquipes[] = $row[0];
								}


	 if (isset ($tabEquipes[0])) $clubA8001 = $tabEquipes[0]; else $clubA8001='-'; 
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

	}
	
	
//*******************    Récupérations des scores	**********************************



	global $A1601;global $A1602;global $A1603;global $A1604;
	global $A1605;global $A1606;global $A1607;global $A1608;

	global $A8001;global $A8002;global $A8003;global $A8004;
	global $A8005;global $A8006;global $A8007;global $A8008;
	global $A8009;global $A8010;global $A8011;global $A8012;
	global $A8013;global $A8014;global $A8015;global $A8016;

	global $A4001;global $A4002;global $A4003;global $A4004;
	global $A4005;global $A4006;global $A4007;global $A4008;

	global $A2001;global $A2002;global $A2003;global $A2004;

	global $A1001;global $A1002;	
	

//***********************************************************************/
//																		*/
//---------------huitièmes et barrages de Finale : scores      ------------------	*/
//																		*/
//***********************************************************************/


// *******   Scores des barragistes   ******


// *******   Scores huitieme de finale   ******

	$tabScores = array() ;
	for ($i=8001 ; $i<8017; $i++)
	{
	 $scores = "A".''.$i;
	
	 $requete = "SELECT $scores
				FROM $bdcomite_pfterr
				WHERE  division=$division and annee=$annee"; 
				$result = mysql_query($requete) ;
					while ($row = mysql_fetch_array($result) )
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
		
		if (isset ($tabScores[8])) $A8009 = $tabScores[8]; else $A8009='-'; 
		if (isset ($tabScores[9])) $A8010 = $tabScores[9]; else $A8010='-';
		if (isset ($tabScores[10])) $A8011 = $tabScores[10]; else $A8011='-';
		if (isset ($tabScores[11])) $A8012 = $tabScores[11]; else $A8012='-';
		
		if (isset ($tabScores[12])) $A8013 = $tabScores[12]; else $A8013='-';
		if (isset ($tabScores[13])) $A8014 = $tabScores[13]; else $A8014='-';
		if (isset ($tabScores[14])) $A8015 = $tabScores[14]; else $A8015='-';
		if (isset ($tabScores[15])) $A8016 = $tabScores[15]; else $A8016='-';

	}
	
	
	$tabScores = array() ;
	for ($i=4001 ; $i<4009; $i++)
	{
	$scores = "A".''.$i;
	
	$requete = "SELECT $scores
				FROM $bdcomite_pfterr
				WHERE  division=$division and annee=$annee"; 
				$result = mysql_query($requete) ;
					while ($row = mysql_fetch_array($result) )
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
	

	
// *******   Scores demi de finale   *******

	$tabScores = array() ;
	for ($i=2001 ; $i<2005; $i++)
	{
	$scores = "A".''.$i;
	
	$requete = "SELECT $scores
				FROM $bdcomite_pfterr
				WHERE  division=$division and annee=$annee"; 
				$result = mysql_query($requete) ;
					while ($row = mysql_fetch_array($result) )
						{ 
						$tabScores[] = $row[0];
						}
 								
									
	if (isset ($tabScores[0])) $A2001 = $tabScores[0]; else $A2001='-'; 
	if (isset ($tabScores[1])) $A2002 = $tabScores[1]; else $A2002='-';
	if (isset ($tabScores[2])) $A2003 = $tabScores[2]; else $A2003='-';
	if (isset ($tabScores[3])) $A2004 = $tabScores[3]; else $A2004='-';
	}	
	


// *******   Scores  finale   *******

	$tabScores = array() ;
	
	
	$requete = "SELECT A1001, A1002
				FROM $bdcomite_pfterr
				WHERE  division=$division and annee=$annee"; 
				$result = mysql_query($requete) ;
					while ($row = mysql_fetch_array($result) )
						{ 
						$A1001 = $row[0];
						$A1002 = $row[1];
						}							
	


		
//************************************************************************************
//*******************    Récupérations des Scores	**********************************
//************************************************************************************


// Traitement des résultats des barrages et des 8me


//verifier les oppossitions
if ($A1601+$A1602 > 0)	{if ($A1601>$A1602)	{$clubA8001=$clubA1601;	} else	{$clubA8001=$clubA1602;	}}	else {	$A1601="-";	$A1602="-";	$quart1="-";}
if ($A1603+$A1604 > 0)	{if ($A1603>$A1604)	{$clubA8002=$clubA1603;	} else  {$clubA8002=$clubA1604; }}  else {  $A1603="-";	$A1604="-";	$quart1="-";}
if ($A1605+$A1606 > 0)	{if ($A1605>$A1606)	{$clubA8003=$clubA1605;	} else  {$clubA8003=$clubA1606; }}  else {  $A1605="-";	$A1606="-";	$quart1="-";}
if ($A1607+$A1608 > 0)	{if ($A1607>$A1608)	{$clubA8004=$clubA1607;	} else  {$clubA8004=$clubA1608; }}  else {  $A1607="-";	$A1608="-";	$quart1="-";}


if ($A8001+$A8002 > 0)	{	if ($A8001>$A8002)	{$clubA4001=$clubA8001;	} else	{$clubA4001=$clubA8002;	}}	else{	$A8001="-";	$A8002="-";	$quart1="-";}
if ($A8003+$A8004 > 0)	{	if ($A8003>$A8004)	{$clubA4002=$clubA8003;	} else	{$clubA4002=$clubA8004;	}}	else{	$A8003="-";	$A8004="-";	$quart1="-";}
if ($A8005+$A8006 > 0)	{	if ($A8005>$A8006)	{$clubA4003=$clubA8005;	} else	{$clubA4003=$clubA8006;	}}	else{	$A8005="-";	$A8006="-";	$quart1="-";}
if ($A8007+$A8008 > 0)	{	if ($A8007>$A8008)	{$clubA4004=$clubA8007;	} else	{$clubA4004=$clubA8008;	}}	else{	$A8007="-";	$A8008="-";	$quart1="-";}
if ($A8009+$A8010 > 0)	{	if ($A8009>$A8010)	{$clubA4005=$clubA8009;	} else	{$clubA4005=$clubA8010;	}}	else{	$A8009="-";	$A8010="-";	$quart1="-";}
if ($A8011+$A8012 > 0)	{	if ($A8011>$A8012)	{$clubA4006=$clubA8011;	} else	{$clubA4006=$clubA8012;	}}	else{	$A8011="-";	$A8012="-";	$quart1="-";}
if ($A8013+$A8014 > 0)	{	if ($A8013>$A8014)	{$clubA4007=$clubA8013;	} else	{$clubA4007=$clubA8014;	}}	else{	$A8013="-";	$A8014="-";	$quart1="-";}
if ($A8015+$A8016 > 0)	{	if ($A8015>$A8016)	{$clubA4008=$clubA8015;	} else	{$clubA4008=$clubA8016;	}}	else{	$A8015="-";	$A8016="-";	$quart1="-";}

if ($A4001+$A4002 > 0)	{	if ($A4001>$A4002)	{$clubA2001=$clubA4001;	} else	{$clubA2001=$clubA4002;	}}	else{	$A4001="-";	$A4002="-";	$quart1="-";}
if ($A4003+$A4004 > 0)	{	if ($A4003>$A4004)	{$clubA2002=$clubA4003;	} else	{$clubA2002=$clubA4004;	}}	else{	$A4003="-";	$A4004="-";	$quart1="-";}
if ($A4005+$A4006 > 0)	{	if ($A4005>$A4006)	{$clubA2003=$clubA4005;	} else	{$clubA2003=$clubA4006;	}}	else{	$A4005="-";	$A4006="-";	$quart1="-";}
if ($A4007+$A4008 > 0)	{	if ($A4007>$A4008)	{$clubA2004=$clubA4007;	} else	{$clubA2004=$clubA4008;	}}	else{	$A4007="-";	$A4008="-";	$quart1="-";}

if ($A2001+$A2002 > 0)	{	if ($A2001>$A2002)	{$clubA1001=$clubA2001;	} else	{$clubA1001=$clubA2002;	}}	else{	$A2001="-";	$A2002="-";	$quart1="-";}
if ($A2003+$A2004 > 0)	{	if ($A2003>$A2004)	{$clubA1002=$clubA2003;	} else	{$clubA1002=$clubA2004;	}}	else{	$A2003="-";	$A2004="-";	$quart1="-";}

if ($A1001+$A1002 > 0)	{	if ($A2001>$A2002)	{$clubA1001=$clubA2001;	} else	{$clubA1001=$clubA2002;	}}	else{	$A2001="-";	$A2002="-";	$quart1="-";}			


if ($A1001+$A1002 > 0)	{ if ($A1001>$A1002)	{$champion=$clubA1001;	} else	{$champion=$clubA1002;	}}	else	{ $champion="-";}

}
 
 ?>
 
 
  <?php
 
//*************************************************************** 
//* 															*
//*                   SEIZIEME DE FINALE						*
//* 															*
//* 															*
//***************************************************************


 
function seizieme2019 ($bdcomiteClub, $division, $annee)

{
	
if (isset ($_GET['comite'])) $comite = $_GET['comite']; else $comite='-';	
if (isset ($_GET['comite'])) $comite = $_GET['comite']; else $comite='-';

	$bdcomite_pfterr = $comite.''."_pfterr_e";
	$bdcomite_pfterr = $comite.''."_pfterr_r";
	
	
	//*******************    Récupérations des Equipes	**********************************

global $clubA1601;global $clubA1602;global $clubA1603;global $clubA1604;
global $clubA1605;global $clubA1606;global $clubA1607;global $clubA1608;
global $clubA1609;global $clubA1610;global $clubA1611;global $clubA1612;
global $clubA1613;global $clubA1614;global $clubA1615;global $clubA1616;
global $clubA1617;global $clubA1618;global $clubA1619;global $clubA1620;
global $clubA1621;global $clubA1622;global $clubA1623;global $clubA1624;
global $clubA1625;global $clubA1626;global $clubA1627;global $clubA1628;
global $clubA1629;global $clubA1630;global $clubA1631;global $clubA1632;

global $clubA8001;global $clubA8002;global $clubA8003;global $clubA8004;
global $clubA8005;global $clubA8006;global $clubA8007;global $clubA8008;
global $clubA8009;global $clubA8010;global $clubA8011;global $clubA8012;
global $clubA8013;global $clubA8014;global $clubA8015;global $clubA8016;

global $clubA4001;global $clubA4002;global $clubA4003;global $clubA4004;
global $clubA4005;global $clubA4006;global $clubA4007;global $clubA4008;

global $clubA2001;global $clubA2002;global $clubA2003;global $clubA2004;

global $clubA1001;global $clubA1002;global $champion;





	
	$bdcomiteClub = $comite.''."_clubs";
	$tabEquipes = array();
	
	for ($i=1601 ; $i<1633; $i++)

	{	 
   	$equipes = "clubA".''.$i;
	
	
    $requete = "SELECT  $bdcomiteClub.nom, $bdcomite_pfterr.$equipes
				FROM $bdcomiteClub
				INNER JOIN $bdcomite_pfterr ON $bdcomite_pfterr.$equipes=$bdcomiteClub.id
				WHERE  $bdcomite_pfterr.division=$division and $bdcomite_pfterr.annee=$annee"; 
							$result = mysql_query($requete) ;
							while ($row = mysql_fetch_array($result) )
								{ 
								 $tabEquipes[] = $row[0];
								}
																	
if (isset ($tabEquipes[0])) $clubA1601 = $tabEquipes[0]; else $clubA1601='-'; 
if (isset ($tabEquipes[1])) $clubA1602 = $tabEquipes[1]; else $clubA1602='-';
if (isset ($tabEquipes[2])) $clubA1603 = $tabEquipes[2]; else $clubA1603='-';
if (isset ($tabEquipes[3])) $clubA1604 = $tabEquipes[3]; else $clubA1604='-';
	
if (isset ($tabEquipes[4])) $clubA1605 = $tabEquipes[4]; else $clubA1605='-';
if (isset ($tabEquipes[5])) $clubA1606 = $tabEquipes[5]; else $clubA1606='-';
if (isset ($tabEquipes[6])) $clubA1607 = $tabEquipes[6]; else $clubA1607='-';
if (isset ($tabEquipes[7])) $clubA1608 = $tabEquipes[7]; else $clubA1608='-';
    
if (isset ($tabEquipes[8])) $clubA1609 = $tabEquipes[8]; else $clubA1609='-'; 
if (isset ($tabEquipes[9])) $clubA1610 = $tabEquipes[9]; else $clubA1610='-';
if (isset ($tabEquipes[10])) $clubA1611 = $tabEquipes[10]; else $clubA1611='-';
if (isset ($tabEquipes[11])) $clubA1612 = $tabEquipes[11]; else $clubA1612='-';
	
if (isset ($tabEquipes[12])) $clubA1613 = $tabEquipes[12]; else $clubA1613='-';
if (isset ($tabEquipes[13])) $clubA1614 = $tabEquipes[13]; else $clubA1614='-';
if (isset ($tabEquipes[14])) $clubA1615 = $tabEquipes[14]; else $clubA1615='-';
if (isset ($tabEquipes[15])) $clubA1616 = $tabEquipes[15]; else $clubA1616='-';
	
if (isset ($tabEquipes[16])) $clubA1617 = $tabEquipes[16]; else $clubA1617='-'; 
if (isset ($tabEquipes[17])) $clubA1618 = $tabEquipes[17]; else $clubA1618='-';
if (isset ($tabEquipes[18])) $clubA1619 = $tabEquipes[18]; else $clubA1619='-';
if (isset ($tabEquipes[19])) $clubA1620 = $tabEquipes[19]; else $clubA1620='-';
	
if (isset ($tabEquipes[20])) $clubA1621 = $tabEquipes[20]; else $clubA1621='-';
if (isset ($tabEquipes[21])) $clubA1622 = $tabEquipes[21]; else $clubA1622='-';
if (isset ($tabEquipes[22])) $clubA1623 = $tabEquipes[22]; else $clubA1623='-';
if (isset ($tabEquipes[23])) $clubA1624 = $tabEquipes[23]; else $clubA1624='-';
    
if (isset ($tabEquipes[24])) $clubA1625 = $tabEquipes[24]; else $clubA1625='-'; 
if (isset ($tabEquipes[25])) $clubA1626 = $tabEquipes[25]; else $clubA1626='-';
if (isset ($tabEquipes[26])) $clubA1627 = $tabEquipes[26]; else $clubA1627='-';
if (isset ($tabEquipes[27])) $clubA1628 = $tabEquipes[27]; else $clubA1628='-';
	
if (isset ($tabEquipes[28])) $clubA1629 = $tabEquipes[28]; else $clubA1629='-';
if (isset ($tabEquipes[29])) $clubA1630 = $tabEquipes[29]; else $clubA1630='-';
if (isset ($tabEquipes[30])) $clubA1631 = $tabEquipes[30]; else $clubA1631='-';
if (isset ($tabEquipes[31])) $clubA1632 = $tabEquipes[31]; else $clubA1632='-';


	}
	

//***********************************************************************/
//																		*/
//-----------  seizieme de Finale : Traitements des résultats--------	*/
//																		*/
//***********************************************************************/

global $A1601;global $A1602;global $A1603;global $A1604;
global $A1605;global $A1606;global $A1607;global $A1608;
global $A1609;global $A1610;global $A1611;global $A1612;
global $A1613;global $A1614;global $A1615;global $A1616;

global $A1617;global $A1618;global $A1619;global $A1620;
global $A1621;global $A1622;global $A1623;global $A1624;
global $A1625;global $A1626;global $A1627;global $A1628;
global $A1629;global $A1630;global $A1631;global $A1632;
	
global $A8001;global $A8002;global $A8003;global $A8004;
global $A8005;global $A8006;global $A8007;global $A8008;
global $A8009;global $A8010;global $A8011;global $A8012;
global $A8013;global $A8014;global $A8015;global $A8016;

global $A4001;global $A4002;global $A4003;global $A4004;
global $A4005;global $A4006;global $A4007;global $A4008;


global $A2001;global $A2002;global $A2003;global $A2004;

global $A1001;global $A1002;	
	
	// *******   Scores seizieme de finale   ******

	
	
	
	$tabScores = array() ;
	for ($i=1601 ; $i<1633; $i++)
	{
	$scores = "A".''.$i;
		
	$requete = "SELECT $scores
				FROM $bdcomite_pfterr
				WHERE  division=$division and annee=$annee"; 
				$result = mysql_query($requete) ;
					while ($row = mysql_fetch_array($result) )
						{ 
						$tabScores[] = $row[0];
						}
 								

	if (isset ($tabScores[0])) $A1601 = $tabScores[0]; else $A1601='-'; 
	if (isset ($tabScores[1])) $A1602 = $tabScores[1]; else $A1602='-';
	if (isset ($tabScores[2])) $A1603 = $tabScores[2]; else $A1603='-';
	if (isset ($tabScores[3])) $A1604 = $tabScores[3]; else $A1604='-';
	
	if (isset ($tabScores[4])) $A1605 = $tabScores[4]; else $A1605='-';
	if (isset ($tabScores[5])) $A1606 = $tabScores[5]; else $A1606='-';
	if (isset ($tabScores[6])) $A1607 = $tabScores[6]; else $A1607='-';
	if (isset ($tabScores[7])) $A1608 = $tabScores[7]; else $A1608='-';	
    
	if (isset ($tabScores[8])) $A1609 = $tabScores[8]; else $A1609='-'; 
	if (isset ($tabScores[9])) $A1610 = $tabScores[9]; else $A1610='-';
	if (isset ($tabScores[10])) $A1611 = $tabScores[10]; else $A1611='-';
	if (isset ($tabScores[11])) $A1612 = $tabScores[11]; else $A1612='-';
	
	if (isset ($tabScores[12])) $A1613 = $tabScores[12]; else $A1613='-';
	if (isset ($tabScores[13])) $A1614 = $tabScores[13]; else $A1614='-';
	if (isset ($tabScores[14])) $A1615 = $tabScores[14]; else $A1615='-';
	if (isset ($tabScores[15])) $A1616 = $tabScores[15]; else $A1616='-';

	if (isset ($tabScores[16])) $A1617 = $tabScores[16]; else $A1617='-'; 
	if (isset ($tabScores[17])) $A1618 = $tabScores[17]; else $A1618='-';
	if (isset ($tabScores[18])) $A1619 = $tabScores[18]; else $A1619='-';
	if (isset ($tabScores[19])) $A1620 = $tabScores[19]; else $A1620='-';
	
	if (isset ($tabScores[20])) $A1621 = $tabScores[20]; else $A1621='-';
	if (isset ($tabScores[21])) $A1622 = $tabScores[21]; else $A1622='-';
	if (isset ($tabScores[22])) $A1623 = $tabScores[22]; else $A1623='-';
	if (isset ($tabScores[23])) $A1624 = $tabScores[23]; else $A1624='-';	
    
	if (isset ($tabScores[24])) $A1625 = $tabScores[24]; else $A1625='-'; 
	if (isset ($tabScores[25])) $A1626 = $tabScores[25]; else $A1626='-';
	if (isset ($tabScores[26])) $A1627 = $tabScores[26]; else $A1627='-';
	if (isset ($tabScores[27])) $A1628 = $tabScores[27]; else $A1628='-';
	
	if (isset ($tabScores[28])) $A1629 = $tabScores[28]; else $A1629='-';
	if (isset ($tabScores[29])) $A1630 = $tabScores[29]; else $A1630='-';
	if (isset ($tabScores[30])) $A1631 = $tabScores[30]; else $A1631='-';
	if (isset ($tabScores[31])) $A1632 = $tabScores[31]; else $A1632='-';

	
	}


// *******   Scores huitieme de finale   ******

	$tabScores = array() ;
	for ($i=8001 ; $i<8017; $i++)
	{
	$scores = "A".''.$i;
	
	$requete = "SELECT $scores
				FROM $bdcomite_pfterr
				WHERE  division=$division and annee=$annee"; 
				$result = mysql_query($requete) ;
					while ($row = mysql_fetch_array($result) )
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
    
	if (isset ($tabScores[8])) $A8009 = $tabScores[8]; else $A8009='-'; 
	if (isset ($tabScores[9])) $A8010 = $tabScores[9]; else $A8010='-';
	if (isset ($tabScores[10])) $A8011 = $tabScores[10]; else $A8011='-';
	if (isset ($tabScores[11])) $A8012 = $tabScores[11]; else $A8012='-';
	
	if (isset ($tabScores[12])) $A8013 = $tabScores[12]; else $A8013='-';
	if (isset ($tabScores[13])) $A8014 = $tabScores[13]; else $A8014='-';
	if (isset ($tabScores[14])) $A8015 = $tabScores[14]; else $A8015='-';
	if (isset ($tabScores[15])) $A8016 = $tabScores[15]; else $A8016='-';

	}
	
// *******   Scores quarts de finale   *******

	$tabScores = array() ;
	for ($i=4001 ; $i<4009; $i++)
	{
	$scores = "A".''.$i;
	
	$requete = "SELECT $scores
				FROM $bdcomite_pfterr
				WHERE  division=$division and annee=$annee"; 
				$result = mysql_query($requete) ;
					while ($row = mysql_fetch_array($result) )
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
	

	
// *******   Scores demi de finale   *******

	$tabScores = array() ;
	for ($i=2001 ; $i<2005; $i++)
	{
	$scores = "A".''.$i;
	
	$requete = "SELECT $scores
				FROM $bdcomite_pfterr
				WHERE  division=$division and annee=$annee"; 
				$result = mysql_query($requete) ;
					while ($row = mysql_fetch_array($result) )
						{ 
						$tabScores[] = $row[0];
						}
 								
									
	if (isset ($tabScores[0])) $A2001 = $tabScores[0]; else $A2001='-'; 
	if (isset ($tabScores[1])) $A2002 = $tabScores[1]; else $A2002='-';
	if (isset ($tabScores[2])) $A2003 = $tabScores[2]; else $A2003='-';
	if (isset ($tabScores[3])) $A2004 = $tabScores[3]; else $A2004='-';
	}	
	


// *******   Scores  finale   *******

	$tabScores = array() ;
	
	
	$requete = "SELECT A1001, A1002
				FROM $bdcomite_pfterr
				WHERE  division=$division and annee=$annee"; 
				$result = mysql_query($requete) ;
					while ($row = mysql_fetch_array($result) )
						{ 
						$A1001 = $row[0];
						$A1002 = $row[1];
						}							

//****** traitement résultats 16me de finale  *********	
		
if ($A1601+$A1602 > 0)	{if ($A1601>$A1602)	{$clubA8001=$clubA1601;	} else	{$clubA8001=$clubA1602;	}}	else {	$A1601="-";	$A1602="-";	$quart1="-";}
if ($A1603+$A1604 > 0)	{if ($A1603>$A1604)	{$clubA8002=$clubA1603;	} else  {$clubA8002=$clubA1604; }}  else {  $A1603="-";	$A1604="-";	$quart1="-";}
if ($A1605+$A1606 > 0)	{if ($A1605>$A1606)	{$clubA8003=$clubA1605;	} else  {$clubA8003=$clubA1606; }}  else {  $A1605="-";	$A1606="-";	$quart1="-";}
if ($A1607+$A1608 > 0)	{if ($A1607>$A1608)	{$clubA8004=$clubA1607;	} else  {$clubA8004=$clubA1608; }}  else {  $A1607="-";	$A1608="-";	$quart1="-";}
if ($A1609+$A1610 > 0)	{if ($A1609>$A1610)	{$clubA8005=$clubA1609;	} else  {$clubA8005=$clubA1610; }}  else {  $A1609="-";	$A1610="-";	$quart1="-";}
if ($A1611+$A1612 > 0)	{if ($A1611>$A1612)	{$clubA8006=$clubA1611;	} else  {$clubA8006=$clubA1612; }}  else {  $A1611="-";	$A1612="-";	$quart1="-";}
if ($A1613+$A1614 > 0)	{if ($A1613>$A1614)	{$clubA8007=$clubA1613;	} else  {$clubA8007=$clubA1614; }}  else {  $A1613="-";	$A1614="-";	$quart1="-";}
if ($A1615+$A1616 > 0)	{if ($A1615>$A1616)	{$clubA8008=$clubA1615;	} else  {$clubA8008=$clubA1616; }}  else {  $A1615="-";	$A1616="-";	$quart1="-";}
if ($A1617+$A1618 > 0)	{if ($A1617>$A1618)	{$clubA8009=$clubA1617;	} else  {$clubA8009=$clubA1618; }}  else {  $A1617="-";	$A1618="-";	$quart1="-";}
if ($A1619+$A1620 > 0)	{if ($A1619>$A1620)	{$clubA8010=$clubA1619;	} else  {$clubA8010=$clubA1620; }}  else {  $A1619="-";	$A1620="-";	$quart1="-";}
if ($A1621+$A1622 > 0)	{if ($A1621>$A1622)	{$clubA8011=$clubA1621;	} else  {$clubA8011=$clubA1622; }}  else {  $A1621="-";	$A1622="-";	$quart1="-";}
if ($A1623+$A1624 > 0)	{if ($A1623>$A1624)	{$clubA8012=$clubA1623;	} else  {$clubA8012=$clubA1624; }}  else {  $A1623="-";	$A1624="-";	$quart1="-";}
if ($A1625+$A1626 > 0)	{if ($A1625>$A1626)	{$clubA8013=$clubA1625;	} else  {$clubA8013=$clubA1626; }}  else {  $A1625="-";	$A1626="-";	$quart1="-";}
if ($A1627+$A1628 > 0)	{if ($A1627>$A1628)	{$clubA8014=$clubA1627;	} else  {$clubA8014=$clubA1628; }}  else {  $A1627="-";	$A1628="-";	$quart1="-";}			
if ($A1629+$A1630 > 0)	{if ($A1629>$A1629)	{$clubA8015=$clubA1629;	} else  {$clubA8015=$clubA1630; }}  else {  $A1629="-";	$A1630="-";	$quart1="-";}			
if ($A1631+$A1632 > 0)	{if ($A1631>$A1632)	{$clubA8016=$clubA1631;	} else  {$clubA8016=$clubA1632; }}  else {  $A1631="-";	$A1632="-";	$quart1="-";}			
				
				
if ($A8001+$A8002 > 0)	{if ($A8001>$A8002)	{$clubA4001=$clubA8001;	} else	{$clubA4001=$clubA8002;	}}	else{	$A8001="-";	$A8002="-";	$quart1="-";}
if ($A8003+$A8004 > 0)	{if ($A8003>$A8004)	{$clubA4002=$clubA8003;	} else	{$clubA4002=$clubA8004;	}}	else{	$A8003="-";	$A8004="-";	$quart1="-";}
if ($A8005+$A8006 > 0)	{if ($A8005>$A8006)	{$clubA4003=$clubA8005;	} else	{$clubA4003=$clubA8006;	}}	else{	$A8005="-";	$A8006="-";	$quart1="-";}
if ($A8007+$A8008 > 0)	{if ($A8007>$A8008)	{$clubA4004=$clubA8007;	} else	{$clubA4004=$clubA8008;	}}	else{	$A8007="-";	$A8008="-";	$quart1="-";}
if ($A8009+$A8010 > 0)	{if ($A8009>$A8010)	{$clubA4005=$clubA8009;	} else	{$clubA4005=$clubA8010;	}}	else{	$A8009="-";	$A8010="-";	$quart1="-";}
if ($A8011+$A8012 > 0)	{if ($A8011>$A8012)	{$clubA4006=$clubA8011;	} else	{$clubA4006=$clubA8012;	}}	else{	$A8011="-";	$A8012="-";	$quart1="-";}
if ($A8013+$A8014 > 0)	{if ($A8013>$A8014)	{$clubA4007=$clubA8013;	} else	{$clubA4007=$clubA8014;	}}	else{	$A8013="-";	$A8014="-";	$quart1="-";}
if ($A8015+$A8016 > 0)	{if ($A8015>$A8016)	{$clubA4008=$clubA8015;	} else	{$clubA4008=$clubA8016;	}}	else{	$A8015="-";	$A8016="-";	$quart1="-";}

if ($A4001+$A4002 > 0)	{if ($A4001>$A4002)	{$clubA2001=$clubA4001;	} else	{$clubA2001=$clubA4002;	}}	else{	$A4001="-";	$A4002="-";	$quart1="-";}
if ($A4003+$A4004 > 0)	{if ($A4003>$A4004)	{$clubA2002=$clubA4003;	} else	{$clubA2002=$clubA4004;	}}	else{	$A4003="-";	$A4004="-";	$quart1="-";}
if ($A4005+$A4006 > 0)	{if ($A4005>$A4006)	{$clubA2003=$clubA4005;	} else	{$clubA2003=$clubA4006;	}}	else{	$A4005="-";	$A4006="-";	$quart1="-";}
if ($A4007+$A4008 > 0)	{if ($A4007>$A4008)	{$clubA2004=$clubA4007;	} else	{$clubA2004=$clubA4008;	}}	else{	$A4007="-";	$A4008="-";	$quart1="-";}

if ($A2001+$A2002 > 0)	{if ($A2001>$A2002)	{$clubA1001=$clubA2001;	} else	{$clubA1001=$clubA2002;	}}	else{	$A2001="-";	$A2002="-";	$quart1="-";}
if ($A2003+$A2004 > 0)	{if ($A2003>$A2004)	{$clubA1002=$clubA2003;	} else	{$clubA1002=$clubA2004;	}}	else{	$A2003="-";	$A2004="-";	$quart1="-";}

if ($A1001+$A1002 > 0)	{	if ($A2001>$A2002)	{$clubA1001=$clubA2001;	} else	{$clubA1001=$clubA2002;	}}	else{	$A2001="-";	$A2002="-";	$quart1="-";}					
					
if ($A1001+$A1002 > 0)	{ if ($A1001>$A1002)	{$champion=$clubA1001;	} else	{$champion=$clubA1002;	}}	else	{ $champion="-";}

}
 
 ?>
 
 

