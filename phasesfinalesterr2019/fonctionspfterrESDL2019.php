<?php




//***********************************************************************/
//SOMMAIRE																*/
//				Champion (premier de poule )            			    */
//				Traitement scores
//				Finale 													*/
//				Demi finale												*/
//				Demi finale aller-retour								*/
//				Quarts	(ligne 822)                                     */
//		        huitième (ligne 850)                                    */
//              huitième  + Barrages 									*/
//				huitième Aller-Retour                                    */
//				Seizieme (ligne 1850)                                    */
//***********************************************************************/



//***********************************************************************/
//      																*/
//			Affichage de la division dans le bandeau					*/
//											                         	*/
//***********************************************************************/


function affichage2019($division, $bdd)
{
if ($division == 170)
	echo "- Honneur -";
elseif ($division == 180)
	echo "- Promotion honneur -";
elseif ($division == 190)
	echo "- 1re Série -";
elseif ($division == 200)
	echo "- 2me Série -";
elseif ($division == 210)
	echo "- 3me Série -";
elseif ($division == 220)
	echo "- 4me Série -";
elseif ($division == 270)
	echo "- Réserve honneur -";
elseif ($division == 9180)	
	echo "- Réserve promotion honneur -";
elseif ($division == 9190)
	echo "- Réserve Série -";
elseif ($division == 9200)
	echo "- Réserve 2me Série -";
else
	echo "Réserve 4me Série  ";
}


function nomDivision($division, $bdd)
{
global $nomDivision;	

//mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion � MySQL
//mysql_select_db("onepip-france_db5"); // S�lection de la base onepip
			
	$reponse = $bdd->query( "SELECT division
							FROM divisions
							WHERE id=$division "); 
		while ($row = $reponse->fetch())
			{ $nomDivision = $row[0];	}											
}




//Traiter les scores particuliers
function traitementScores ($debut, $fin, $bdd)
{

	for ($i= $debut; $i <= $fin ; $i++)
	{
	global ${"A".($i)};
	global ${"clubA".($i)};
	global ${"A".($i)};

//Qualifié d'office
	
	if (${"A".($i)} == '999')	{${"A".($i)}="Q"; }
	if (${"A".($i)} == '222')   {${"A".($i)}="-"; }	
	if (${"A".($i)} == '333')   {${"A".($i)}="-"; }
	
	//Forfait , disqualification, qualif aux TAB
	
	if (${"A".($i)} == '555' )  {${"A".($i)}="Tab"; }
	if (${"A".($i)} == '666' )  {${"A".($i)}="DQ"; }
	if (${"A".($i)} == '777' )  {${"A".($i)}="F"; }
	if (${"A".($i)} == '888')	{${"A".($i)}="25"; }
	
	//if (${"A".($i)} == '111')   {${"clubA".($i)}="-"; }	
	//if (${"A".($i)} == '-')     {${"clubA".($i+1)}="-"; }
	
// Non affichage d'une équipe
	if (isset ($id8001)) $id8001=$id8001;else $id8001='';
	if (isset ($id8002)) $id8002=$id8002;else $id8002='';
	
	if (isset ($clubA8001)) $clubA8001=$clubA8001;else $clubA8001='';
	if (isset ($clubA8002)) $clubA8002=$clubA8002;else $clubA8002='';
	
	
	if (isset ($clubA2001)) $clubA2001=$clubA2001;else $clubA2001='';
	if (isset ($clubA2002)) $clubA2002=$clubA2002;else $clubA2002='';
	if (isset ($clubA2003)) $clubA2003=$clubA2003;else $clubA2003='';
	if (isset ($clubA2004)) $clubA2004=$clubA2004;else $clubA2004='';
	
	if (isset ($clubA1001)) $clubA1001=$clubA1001;else $clubA1001='';
	if (isset ($clubA1002)) $clubA1002=$clubA1002;else $clubA1002='';
	
	 if (($clubA2001 != '99999'  or $clubA2001 != '-')   and  ( ${"A".($i)} == '999' or ${"A".($i)} == 'Q'))   
	{ $clubA2001 = $clubA2001; }
	
	if (($clubA2001 != '99999'  or $clubA2001 != '-')   and   ($clubA2002 == '99999'  or $clubA2002 == '-') )   
	{ $clubA1001 = $clubA2001; $clubA2001='-';}
	if (($clubA2003 != '99999'  or $clubA2003 != '-')   and   ($clubA2004 == '99999'  or $clubA2004 == '-') )   
	{ $clubA1002 = $clubA2003; $clubA2003 = '-';}
	
	if ($clubA1001 == '99999' or $clubA1001 == '- ')   
		$clubA1002 = "-";
	}
	
	if (isset ($clubA8001)) $clubA8001=$clubA8001;else $clubA8001='';
	if (isset ($clubA8002)) $clubA8002=$clubA8002;else $clubA8002='';
	if (isset ($clubA8003)) $clubA8003=$clubA8003;else $clubA8003='';
	if (isset ($clubA8004)) $clubA8004=$clubA8004;else $clubA8004='';
	if (isset ($clubA8005)) $clubA8005=$clubA8005;else $clubA8005='';
	if (isset ($clubA8006)) $clubA8006=$clubA8006;else $clubA8006='';
	if (isset ($clubA8007)) $clubA8007=$clubA8007;else $clubA8007='';
	if (isset ($clubA8008)) $clubA8008=$clubA8008;else $clubA8008='';
	if (isset ($clubA8009)) $clubA8009=$clubA8009;else $clubA8009='';
	if (isset ($clubA8010)) $clubA8010=$clubA8010;else $clubA8010='';
	
	if (isset ($clubA8011)) $clubA8011=$clubA8011;else $clubA8011='';
	if (isset ($clubA8012)) $clubA8012=$clubA8012;else $clubA8012='';
	if (isset ($clubA8013)) $clubA8013=$clubA8013;else $clubA8013='';
	if (isset ($clubA8014)) $clubA8014=$clubA8014;else $clubA8014='';
	if (isset ($clubA8015)) $clubA8015=$clubA8015;else $clubA8015='';
	if (isset ($clubA8016)) $clubA8016=$clubA8016;else $clubA8016='';


	if ($clubA8001 != "-" and $clubA8002 == "-")   { $clubA8001='-';}
	
	if ($clubA8003 != "-" and $clubA8004 == "-")   { $clubA8003='-';}
	
	if ($clubA8005 != "-" and $clubA8006 == "-")   { $clubA8005='-';}
	if ($clubA8007 != "-" and $clubA8008 == "-")   { $clubA8007='-';}
	
	if ($clubA8009 != "-" and $clubA8010 == "-")   { $clubA8009='-';}
	if ($clubA8011 != "-" and $clubA8012 == "-")   { $clubA8011='-';}
	if ($clubA8013 != "-" and $clubA8014 == "-")   { $clubA8013='-';}
	if ($clubA8015 != "-" and $clubA8016 == "-")   { $clubA8015='-';}
}


// ******* Affichage des lieux de rencontres ********************


function afficheLieux ($division, $annee, $comite, $bdd)
{

 if ($comite == "al" or $comite == "n" or $comite == "pr" or $comite == "idf")
			$bddComite = "idf";
	 elseif ($comite == "bg" or $comite == "br" or $comite == "ce" or $comite == "fl" or $comite == "ce" or $comite == "pl")
			$bddComite = "pl";	
	 else 
			$bddComite = $comite;
 
	 
	 $bddComite_pfterr_ld = "php".$bddComite.''."_pfterr_ld";


global $L1001; global $L2001 ; global $L2003 ;
global $L4001; global $L4003 ; global $L4005; global $L4007;
global $L8001; global $L8003 ; global $L8005; global $L8007;
global $L8009; global $L8011 ; global $L8013; global $L8015;


global $D1600; global $D8000; global $D4000 ; global $D2000; global $D1000;

 if (isset ($L8001)) $L8001 = $L8001; else $L8001=''; 
 if (isset ($L8003)) $L8003 = $L8003; else $L8003=''; 
 if (isset ($L8005)) $L8005 = $L8005; else $L8005=''; 	
 if (isset ($L8007)) $L8007 = $L8007; else $L8007=''; 
 if (isset ($L8009)) $L8009 = $L8009; else $L8009=''; 
 if (isset ($L8011)) $L8011 = $L8011; else $L8011=''; 
 if (isset ($L8013)) $L8013 = $L8013; else $L8013=''; 	
 if (isset ($L8015)) $L8015 = $L8015; else $L8015=''; 

	
 if (isset ($L4001)) $L4001 = $L4001; else $L4001=''; 
 if (isset ($L4003)) $L4003 = $L4003; else $L4003=''; 
 if (isset ($L4005)) $L4005 = $L4005; else $L4005=''; 	
 if (isset ($L4007)) $L4007 = $L4007; else $L4007=''; 
 
 if (isset ($L2001)) $L2001 = $L2001; else $L2001=''; 
 if (isset ($L2003)) $L2003 = $L2003; else $L2003='';

 if (isset ($L1001)) $L1001 = $L1001; else $L1001='';  
 
 if (isset ($D1600)) $D1600 = $D1600; else $D1600=''; 
 if (isset ($D8000)) $D8000 = $D8000; else $D8000=''; 
 if (isset ($D4000)) $D4000 = $D4000; else $D4000=''; 
 if (isset ($D2000)) $D2000 = $D2000; else $D2000=''; 	
 if (isset ($D1000)) $D1000 = $D1000; else $D1000=''; 


$reponse = $bdd->query("SELECT  L8001,  L8003, L8005, L8007,
								L8009,  L8011, L8013, L8015,
								L4001,  L4003, L4005, L4007,
								L2001,  L2003, L1001,
								D1600, D8000, D4000, D2000, D1000
						FROM $bddComite_pfterr_ld
						WHERE  division='$division' and annee='$annee' "); 
						
					while ($row = $reponse->fetch() )
						{ 
						$L8001 = $row[0];	$L8003 = $row[1];	$L8005 = $row[2];	$L8007 = $row[3];
						$L8009 = $row[4];	$L8011 = $row[5];	$L8013 = $row[6];	$L8015 = $row[7];
						$L4001 = $row[8];	$L4003 = $row[9];	$L4005 = $row[10];	$L4007 = $row[11];
						$L2001 = $row[12];	$L2003 = $row[13];	$L1001 = $row[14];	
												
					$D1600 = $row[15];		$D8000 = $row[16];	$D4000 = $row[17];	$D2000 = $row[18];	$D1000 = $row[19];
						}

}
/*

function division($champ, $bdd)
{

global $nomDivision;

$reponse = $bdd->query(" SELECT division
			FROM bddivisions
			WHERE id = $champ ");
				while ($row = $reponse->fetch() )
							{                             
							$nomDivision=$row[0];
							}	
}			
*/

function afficheDivisionChampion($division)
{
	
GLOBAL $division;
	
if (substr($division,-4)=='0170')
		$division = "Honneur";
elseif(substr($division,-4)=='0180')
	$division = "Promotion honneur";
elseif(substr($division,-4)=='0190')
	$division = "1re série";
elseif(substr($division,-4)=='0200')
	$division = "2me série";
elseif(substr($division,-4)=='0210')
	$division = "3me série";
elseif(substr($division,-4)=='0220')
	$division = "4me série";
elseif(substr($division,-4)=='0270')
	$division = "Réserve honneur";
elseif(substr($division,-4)=='9180')
	$division = "Réserve promotion honneur";
elseif(substr($division,-4)=='9190')
	$division = "Réserve  1re série";	
}
function afficheDivisionChampionLigue($division, $annee)
{
	
GLOBAL $division;
	
if (substr($division,-4)=='0170'){
	if ($annee < 2023)	{$division = "Honneur"; } else {$division = "Régionale 1"; }}
elseif(substr($division,-4)=='0180') {
	if ($annee < 2023) {$division = "Promotion honneur";} else {$division = "Régionale 2"; }}
elseif(substr($division,-4)=='0190') { 
	if ($annee < 2023) {$division = "1re série";} else {$division = "Régionale 3"; }}
elseif(substr($division,-4)=='0200')
	$division = "2me série";
elseif(substr($division,-4)=='0210')
	$division = "3me série";
elseif(substr($division,-4)=='0220')
	$division = "4me série";
elseif(substr($division,-4)=='0270') {
	if ($annee < 2023) { $division = "Réserve honneur";} else { $division = "Réserve régionale 1"; }}
elseif(substr($division,-4)=='9180') {
	if ($annee < 2023) { $division = "Réserve promotion honneur" ;}else {$division = "Réserve régionale 2"; }}
elseif(substr($division,-4)=='9190')
	$division = "Réserve  1re série";	
}

function champion ($comite, $clubA1001, $clubA1002, $A1001, $A1002, $bdd)
{
global $champion, $champLogo;


if ($clubA1001 =="-" and $clubA1002 == "-" and  $A1001 == "-" and $A1002 == "-")	
	{
	$champion="-";
	$champLogo = "/images/blasons200_200/99999.gif";
	}
elseif (  ($A1001 == "-" and $A1002 == "-") OR  ($A1001 == "222" and $A1002 == "222"))	
	{
	$champion="-";
	$champLogo = "/images/blasons200_200/99999.gif";
	}		
else
	{	
	 if (isset($chamLogo)) $chamLogo = $chamLogo; else $chamLogo='clubs inconnu'; 
	 if (isset($idEquipe)) $idEquipe = $idEquipe; else $idEquipe=''; 
	 if (isset($champion)) $champion = $champion; else $champion="-";

	 //Affichage du nom de l'équipe championne
	 if ($A1001>$A1002) {$champion=$clubA1001;} else {$champion=$clubA1002;}
		
	 //Affichage du logo de l'équipe championne
	 
	 if ($comite == "al" or $comite == "n" or $comite == "pr" or $comite == "idf")
			$bddComite = "idf";
	 elseif ($comite == "bg" or $comite == "br" or $comite == "ce" or $comite == "fl" or $comite == "ce" or $comite == "pl")
			$bddComite = "pl";	
	 else 
			$bddComite = $comite;
 
	 $bddcomite_clubs =  "php".$bddComite."_clubs";
	 $reponse = $bdd->query("SELECT  id
							FROM $bddcomite_clubs
							WHERE  nom = '$champion'
							 ORDER BY id DESC"); 
									while ($row = $reponse->fetch() )
											{ 
											$idEquipe = $row[0];
											}
//echo $idEquipe;
	 if ($idEquipe > 0)
		{
		 if (strlen($idEquipe)==5)
				$idEquipe = $idEquipe;
		 else	
				$idEquipe = substr($idEquipe,2,5);
				$idEquipeGif = $idEquipe.".gif";
				$champLogo = "/images/blasons200_200/".$idEquipeGif;
		}
	 else
		{
		$champLogo = "/images/blasons200_200/99999.gif";
		}
	}
}


//***** R�cup�ration des variables *******************************

if (isset ($_GET['division'])) $division = $_GET['division']; else $division='-';
//if (isset ($_GET['comite'])) $comite = $_GET['comite']; else $comite='-';
if (isset ($_GET['annee'])) $annee = $_GET['annee']; else $annee='-';
if (isset ($_GET['id'])) $id = $_GET['id']; else $id='-';


/*
function championDirect ($comite, $division, $annee, $bdd)
{
global $championDirect;
global $logoDirect;

//-------------initialisation des variables----------------


$reponse = $bdd->query("SELECT  $bdcomiteClub.nom, $bdcomiteClub.url_logo, $bdcomiteAnnee.clubA1001
			FROM $bdcomiteClub
			INNER JOIN $bdcomiteAnnee ON $bdcomiteAnnee.clubA1001=$bdcomiteClub.id
			WHERE  $bdcomiteAnnee.division=$division and $bdcomiteAnnee.annee=$annee"); 
				while ($row = $reponse->fetch() )
						{ 
						$championDirect = $row[0];
						$logoDirect = $row[1];
						}
}
*/

//***********************************************************************
//***********************************************************************
//**                                                                   **
//**    ----------               Finale  :            ------------     **
//**																   **
//***********************************************************************
//*********************************************************************** 

function finale2019 ($comite, $division, $annee, $bdd)
 {

	global $bdcomite_pfterr_e, $bdcomite_pfterr_r, $bdcomiteClub;


	choixBdd($comite);

	
	global $clubA1001, $clubA1002, $clubA1001Id, $clubA1002Id;
	
	$tabEquipesF = array() ;
	$tabEquipesId = array() ;
	
	for ($i=1001 ; $i<1003; $i++)
	  {	 
   	   $equipes = "clubA".$i;
	
	   $reponse = $bdd->query(
				"SELECT  $bdcomiteClub.nom, $bdcomite_pfterr_e.$equipes, $bdcomiteClub.id
				 FROM $bdcomiteClub
				 INNER JOIN $bdcomite_pfterr_e ON $bdcomite_pfterr_e.$equipes=$bdcomiteClub.id
				 WHERE  $bdcomite_pfterr_e.division=$division 
				 AND $bdcomite_pfterr_e.annee=$annee"); 
							while ($row = $reponse->fetch() )
								{ 
								 $tabEquipesF[] = $row[0];
								 $tabEquipesId[] = $row[2];
								}
	  }
	   if (isset ($tabEquipesF[0])) $clubA1001 = $tabEquipesF[0]; else $clubA1001='-'; 
	   if (isset ($tabEquipesF[1])) $clubA1002 = $tabEquipesF[1]; else $clubA1002='-';
	   if (isset ($tabEquipesId[0])) $clubA1001Id = $tabEquipesId[0]; else $clubA1001Id='-'; 
	   if (isset ($tabEquipesId[1])) $clubA1002Id = $tabEquipesId[1]; else $clubA1002Id='-';	
//*********** R�cup�ration des r�sultats et traitements *****************************

	global $A1001, $A1002, $champion;	
	
	if (isset ($A1001)) $A1001 = $A1001; else $A1001='-'; 
	if (isset ($A1002)) $A1002 = $A1002; else $A1002='-';
	
// *******   Scores  finale   *******

	$tabScores = array() ;
	
	$reponse = $bdd->query("SELECT A1001, A1002
				FROM $bdcomite_pfterr_r
				WHERE  division=$division and annee=$annee"); 
				while ($row = $reponse->fetch() )
						{ 
						$A1001 = $row[0];
						$A1002 = $row[1];
						}

	if (is_numeric($A1001) + is_numeric($A1002) == 0)
			{
			$A1001="-";	
			$A1002="-";	
			}						
}

//***********************************************************************
//***********************************************************************
//**                                                                   **
//**    ----------           Demi  Finale  :            ------------   **
//**																   **
//***********************************************************************
//*********************************************************************** 


//*********    saisie des equipes  *************************************


function demi2019($comite, $division, $annee, $bdd)
 {
	
	global $bdcomite_pfterr_e, $bdcomite_pfterr_r, $bdcomiteClub;


choixBdd($comite);
		
	global $clubA2001, $clubA2002, $clubA2003, $clubA2004,
	$clubA1001, $clubA1002, $champion,
	$id2001, $id2002, $id2003, $id2004;
	
	$debut =2001;
	$fin=2005;
	
	for ($i=2001 ; $i<2005; $i++)
		
	{	 
   	 $equipes = "clubA".''.$i;
	
	 $reponse = $bdd->query("SELECT  $bdcomiteClub.nom, $bdcomite_pfterr_e.$equipes, $bdcomiteClub.id
				FROM $bdcomiteClub
				INNER JOIN $bdcomite_pfterr_e ON $bdcomite_pfterr_e.$equipes=$bdcomiteClub.id
				WHERE  $bdcomite_pfterr_e.division=$division and $bdcomite_pfterr_e.annee=$annee"); 
							while ($row = $reponse->fetch() )
								{ 
								 $tabEquipes[] = $row[0];
								 $tabId[] = $row[2];
								}

	 // if (isset ($tabEquipes[0])) $clubA2001 = $tabEquipes[0]; else $clubA2001='-'; 
	 // if (isset ($tabEquipes[1])) $clubA2002 = $tabEquipes[1]; else $clubA2002='-';
	 // if (isset ($tabEquipes[2])) $clubA2003 = $tabEquipes[2]; else $clubA2003='-';
	 // if (isset ($tabEquipes[3])) $clubA2004 = $tabEquipes[3]; else $clubA2004='-';
	 if (isset ($tabEquipes[$i-$debut])) ${"clubA".($i)} = $tabEquipes[$i-$debut]; else ${"clubA".($i)}='-';
	 if (isset ($tabId[$i-$debut])) ${"id".($i)} = $tabId[$i-$debut]; else ${"id".($i)}='-';
	}
	
	//*********** R�cup�ration des r�sultats et traitements *****************************

	global $A2001;global $A2002;global $A2003;global $A2004;

	
// *******   Scores demi de finale   *******

	$tabScores = array() ;
	for ($i=2001 ; $i<2005; $i++)
	{
	$scores = "A".''.$i;
	
	$reponse = $bdd->query("SELECT $scores
				FROM $bdcomite_pfterr_r
				WHERE  division=$division and annee=$annee"); 
				while ($row = $reponse->fetch() )
						{ $tabScores[] = $row[0];}
 									
	 if (isset ($tabScores[0])) $A2001 = $tabScores[0];// else $A2001='aaa'; 
	 if (isset ($tabScores[1])) $A2002 = $tabScores[1];// else $A2002='aaa';
	 if (isset ($tabScores[2])) $A2003 = $tabScores[2];// else $A2003='aaa';
	 if (isset ($tabScores[3])) $A2004 = $tabScores[3];// else $A2004='aaa';
	}

// *******   Scores  finale   *******
	global $A1001;global $A1002;
	$tabScores = array() ;
	
	
	$reponse = $bdd->query("SELECT A1001, A1002
				FROM $bdcomite_pfterr_r
				WHERE  division=$division and annee=$annee"); 
				while ($row = $reponse->fetch() )
						{ 
						$A1001 = $row[0];
						$A1002 = $row[1];
						}
				
												

if (is_numeric($A2001) + is_numeric($A2002) > 0)	
	{	if ($A2001>$A2002)	{$clubA1001=$clubA2001;	} 
	else	
	{$clubA1001=$clubA2002;	}}
else {	$A2001="-";	$A2002="-";$clubA1001="-";	}

if (is_numeric($A2003) + is_numeric($A2004) > 0)	
{	if ($A2003>$A2004)	{$clubA1002=$clubA2003;	} else	{$clubA1002=$clubA2004;	}}	else{	$A2003="-";	$A2004="-";$clubA1002="-";	}

if ($A1001 + $A1002 == 0)	{$A1001="-";	$A1002="-";	}	


//champion ($comite, $clubA1001, $clubA1002, $A1001, $A1002, $bdd);		
//traitementScores (2001,2004, $bdd);
//traitementScores (1001,1002, $bdd);
 }	


//***********************************************************************
//***********************************************************************
//**                                                                   **
//**    ----------           Demi  Finale AR :          ------------   **
//**																   **
//***********************************************************************
//*********************************************************************** 



function demiAR2019 ($comite, $division, $annee, $bdd)
 	{

		global $bdcomite_pfterr_e, $bdcomite_pfterr_r, $bdcomiteClub;


		choixBdd($comite);	


	
	global 	$clubA2001, $clubA2002, $clubA2003, $clubA2004,
			$clubA1001, $clubA1002, $champion;	
		
	for ($i=2001 ; $i<2005; $i++)	
	{	 
   	 $equipes = "clubA".''.$i;
	 $reponse = $bdd->query("SELECT  $bdcomiteClub.nom, $bdcomite_pfterr_e.$equipes,  $bdcomiteClub.id
				FROM $bdcomiteClub
				INNER JOIN $bdcomite_pfterr_e 
				ON $bdcomite_pfterr_e.$equipes=$bdcomiteClub.id
				WHERE  $bdcomite_pfterr_e.division=$division 
				AND $bdcomite_pfterr_e.annee=$annee"); 
							while ($row = $reponse->fetch() )
								{  $tabEquipes[] = $row[0];	}
	} 
	 if (isset ($tabEquipes[0])) $clubA2001 = $tabEquipes[0]; else $clubA2001='-'; 
	 if (isset ($tabEquipes[1])) $clubA2002 = $tabEquipes[1]; else $clubA2002='-';
	 if (isset ($tabEquipes[2])) $clubA2003 = $tabEquipes[2]; else $clubA2003='-';
	 if (isset ($tabEquipes[3])) $clubA2004 = $tabEquipes[3]; else $clubA2004='-';

	
//*********** R�cup�ration des r�sultats et traitements *****************************
//ALLER  : Pts
	global $A2001, $A2002, $A2003, $A2004;
//ALLER		GA
	global $A4001, $A4002, $A4003, $A4004;
//RETOUR	Pts
	global  $R2001, $R2002, $R2003,$R2004;
//RETOUR	GA
	global $R4001, $R4002, $R4003, $R4004;
// Totaux Pts (Aller Pts + Retour Pts)
	GLOBAL $Pts2001, $Pts2002, $Pts2003, $Pts2004;
// Totaux GA (Aller GA + Retour GA)
	GLOBAL $GA4001, $GA4002, $GA4003, $GA4004;	

// Finale	
	GLOBAL $A1001, $A1002;	
	
// *******   Scores demi de finale   *******

	$tabScores = array() ;
	for ($i=2001 ; $i<2005; $i++)
	{
	$scores = "A".''.$i;
	$reponse = $bdd->query("SELECT $scores
				FROM $bdcomite_pfterr_r
				WHERE  division=$division and annee=$annee"); 
				while ($row = $reponse->fetch() )
						{ $tabScores[] = $row[0];}
	}
	
	 if (isset ($tabScores[0])) $A2001 = $tabScores[0]; else $A2001= 0;
	 if (isset ($tabScores[1])) $A2002 = $tabScores[1]; else $A2002= 0;
	 if (isset ($tabScores[2])) $A2003 = $tabScores[2]; else $A2003= 0;
	 if (isset ($tabScores[3])) $A2004 = $tabScores[3]; else $A2004= 0;

//echo "Pts aller :".$A2001;echo $A2002;echo $A2003;echo $A2004;echo "<br/>";

	$tabScores2 = array() ;
	for ($i=4001 ; $i<4005; $i++)
	{
	 $scores = "A".''.$i;
	 $reponse = $bdd->query("SELECT $scores
				FROM $bdcomite_pfterr_r
				WHERE  division=$division and annee=$annee"); 
				while ($row = $reponse->fetch() )
						{$tabScores2[] = $row[0];}	
	}				
	 if (isset ($tabScores2[0])) $A4001 = $tabScores2[0]; else $A4001= 0; 
	 if (isset ($tabScores2[1])) $A4002 = $tabScores2[1]; else $A4002= 0;
	 if (isset ($tabScores2[2])) $A4003 = $tabScores2[2]; else $A4003= 0;
	 if (isset ($tabScores2[3])) $A4004 = $tabScores2[3]; else $A4004= 0;

//echo "GA Aller :".$A4001;echo $A4002;echo $A4003;echo $A4004;echo "<br/>";		
	
	$tabScores3 = array() ;
	for ($i=2001 ; $i< 2005; $i++)
	{
	 $scores = "R".''.$i;
	 $reponse = $bdd->query("SELECT $scores
				FROM $bdcomite_pfterr_r
				WHERE  division=$division and annee=$annee"); 
				while ($row = $reponse->fetch() )
						{ $tabScores3[] = $row[0];}
 	}								
	 if (isset ($tabScores3[0])) $R2001 = $tabScores3[0]; else $R2001= 0;
	 if (isset ($tabScores3[1])) $R2002 = $tabScores3[1]; else $R2002= 0;
	 if (isset ($tabScores3[2])) $R2003 = $tabScores3[2]; else $R2003= 0;
	 if (isset ($tabScores3[3])) $R2004 = $tabScores3[3]; else $R2004= 0;
		
//echo "Pts retour :".$R2001;echo $R2002;echo $R2003;echo $R2004;echo "<br/>";	

	
	$tabScores4 = array() ;
	for ($i=4001 ; $i<4005; $i++)
	{
	 $scores = "R".''.$i;
	 $reponse = $bdd->query("SELECT $scores
				FROM $bdcomite_pfterr_r
				WHERE  division=$division and annee=$annee"); 
				while ($row = $reponse->fetch() )
						{ 
						$tabScores4[] = $row[0];
						}
 	}								
	 if (isset ($tabScores4[0])) $R4001 = $tabScores4[0]; else $R4001= 0; 
	 if (isset ($tabScores4[1])) $R4002 = $tabScores4[1]; else $R4002= 0;
	 if (isset ($tabScores4[2])) $R4003 = $tabScores4[2]; else $R4003= 0;
	 if (isset ($tabScores4[3])) $R4004 = $tabScores4[3]; else $R4004= 0;
		
//echo "GA retour :".$R4001;echo $R4002;echo $R4003;echo $R4004;echo "<br/>";
	
	// *******   Scores  finale   *******

	$tabScores = array() ;
	$reponse = $bdd->query("SELECT A1001, A1002
				FROM $bdcomite_pfterr_r
				WHERE  division=$division and annee=$annee"); 
				while ($row = $reponse->fetch() )
						{ 
						$A1001 = $row[0];
						$A1002 = $row[1];
						}
														
$Pts2001 = $A2001 + $R2001; $Pts2002 = $A2002 + $R2002; 
$GA4001 = $A4001 + $R4001; $GA4002 = $A4002 + $R4002; 
$Pts2003 = $A2003 + $R2003; $Pts2004 = $A2004 + $R2004;
$GA4003 = $A4003 + $R4003; $GA4004 = $A4004 + $R4004;

/*
echo "PTS AR1 : ".$Pts2001;echo "<br/>";
echo "GA AR1 : ".$GA4001;echo "<br/>";
echo "PTS AR2 : ".$Pts2002;echo "<br/>";
echo "GA AR2 : ".$GA4002;echo "<br/>";
echo "PTS AR3 : ".$Pts2003;echo "<br/>";
echo "GA AR3 : ".$GA4003;echo "<br/>";
echo "PTS AR4 : ".$Pts2004;echo "<br/>";
echo "GA AR4 : ".$GA4004;echo "<br/>";
*/

			
if ($Pts2001 + $Pts2002 == 0)
	{	$Pts2001="-"; $Pts2002="-"; $GA4001="-"; $GA4002="-";}	
if ($Pts2003 + $Pts2004 == 0)
	{	$Pts2003="-"; $Pts2004="-"; $GA4003="-"; $GA4004="-";}						

//$test = $Pts2001+$Pts2002;
//echo $test;echo "<br/>";
//if ( $test = $Pts2001+$Pts2002 > 6) $clubA1001 = $clubA2001;
//echo $clubA1001;echo "<br/>";

if (is_numeric($Pts2001) && is_numeric($Pts2002) )
{
	if ($Pts2001 + $Pts2002 > 6)	
		{
		if ($Pts2001 > $Pts2002 OR ($Pts2001 == $Pts2002 and $GA4001 > $GA4002) )
			{$clubA1001 = $clubA2001;	} 	
		else	
			{$clubA1001 = $clubA2002; }
		}
	else
	{ $clubA1001="-";}	
}


if (is_numeric($Pts2003) && is_numeric($Pts2004) )
{
	if ($Pts2003 + $Pts2004 > 6)
		{
		if ($Pts2003 > $Pts2004 OR ($Pts2003 == $Pts2004 and $GA4003 > $GA4004) )
			{$clubA1002=$clubA2003;	}	
		else	
			{$clubA1002=$clubA2004;}
		}
	else
	{ $clubA1002="-";	}
}				

if ($A1001 + $A1002 == 0) {	$A1001="-";	$A1002="-";	}	
	
traitementScores (2001,2004, $bdd);
traitementScores (1001,1002, $bdd);		
champion ($comite, $clubA1001, $clubA1002, $A1001, $A1002, $bdd);
}


//**************** *******************************************************
//***********************************************************************
//**                                                                   **
//**         ---------------Quarts et demi  Finale AR : ------------------	   **
//**																   **
//***********************************************************************
//***********************************************************************

function quartsDemiAR2019 ($comite, $division, $annee, $bdd)
{
	
	global $bdcomite_pfterr_e, $bdcomite_pfterr_r, $bdcomiteClub;


choixBdd($comite);
	
	
//*********************************************************************
//*****  Traitement des Equipes et des résultats des quarts de finale ********
//*******************************************************************
	
	$tabEquipes = array();
	$tabScores = array() ;
	
	$debut =4001;
	$fin=4009;

	for ($i=$debut; $i<$fin; $i++)
	{
	 //	******  Equipes  *******
	 global ${"clubA".($i)};
	 global ${"id".($i)};
	$equipes = "clubA".''.$i;
	;
	$reponse = $bdd->query("SELECT  $bdcomiteClub.nom, $bdcomite_pfterr_e.$equipes, $bdcomiteClub.id
				FROM $bdcomiteClub
				INNER JOIN $bdcomite_pfterr_e ON $bdcomite_pfterr_e.$equipes=$bdcomiteClub.id
				WHERE  $bdcomite_pfterr_e.division=$division and $bdcomite_pfterr_e.annee=$annee"); 
							while ($row = $reponse->fetch() )
								{ 
								 $tabEquipes[] = $row[0];
								 $tabId[] = $row[2];
								}
		
	if (isset ($tabEquipes[$i-$debut])) ${"clubA".($i)} = $tabEquipes[$i-$debut]; else ${"clubA".($i)}='-'; 							
	if (isset ($tabId[$i-$debut])) ${"id".($i)} = $tabId[$i-$debut]; else ${"id".($i)}='-';
	}

	for ($i=0; $i<8; $i++)
	{
		
	//echo $tabEquipes[$i];
	//echo $tabId[$i];	
	}
	// *******************************
	// ********   SCORES    **********
	


for ($i=4001; $i<4009; $i++) { global ${"pts".($i)};}
for ($i=4001; $i<4009; $i++) { global ${"GA".($i)};}

for ($i=1601; $i<1617; $i++) {global ${"A".($i)}, ${"R".($i)};}
for ($i=8001; $i<8017; $i++) {global ${"A".($i)}, ${"R".($i)};}
	
	
	// Scores Pts Aller
	 $tabScores = array() ;
	
	$debut =8001;
	$fin=8009;

	for ($i=$debut; $i<$fin; $i++)
	{ 
	
	 $scores = "A".''.$i;
	 $reponse = $bdd->query("SELECT $scores
				FROM $bdcomite_pfterr_r
				WHERE  division=$division and annee=$annee"); 
				while ($row = $reponse->fetch() )
						{ 
						$tabScores[] = $row[0];
						}
 	 if (isset ($tabScores[$i-$debut])) ${"A".($i)} = $tabScores[$i-$debut]; else ${"A".($i)}='-'; 
	}
/*	
	echo "Pts ALLER"."<br />";
	for ($i=0; $i < 8; $i++)
	{	
		echo $i.'--'.$tabScores[$i];
		echo "<br />";}
*/
	
	// Scores GA Aller

	$tabScores = array() ;
	
	$debut =1601;
	$fin=1609;

	for ($i=$debut; $i<$fin; $i++)
	{
	// global ${"A".($i)};
	 $scores = "A".''.$i;
	 $reponse = $bdd->query("SELECT $scores
				FROM $bdcomite_pfterr_r
				WHERE  division=$division and annee=$annee"); 
				while ($row = $reponse->fetch() )
						{ 
						$tabScores[] = $row[0];
						}
 	 if (isset ($tabScores[$i-$debut])) ${"A".($i)} = $tabScores[$i-$debut]; else ${"A".($i)}='-'; 
	}
/*	
	echo "GA ALLER"."<br />";
	for ($i=0; $i<8; $i++)
	{echo $i.'**'.$tabScores[$i];
		echo "<br />";}
	*/
	
	// Scores Pts retour


	$tabScores = array() ;
	
	
	$debut =8009;
	$fin=8017;
	

	for ($i=$debut; $i<$fin; $i++)
	{
	
	 
	 $scores = "A".''.$i;
	 $reponse = $bdd->query("SELECT $scores
				FROM $bdcomite_pfterr_r
				WHERE  division=$division and annee=$annee"); 
				while ($row = $reponse->fetch() )
						{ 
						$tabScores[] = $row[0];
						}
 	 if (isset ($tabScores[$i-$debut])) ${"R".($i)} = $tabScores[$i-$debut]; else ${"R".($i)}="-"; 
	}
/*
	echo "Pts RETOUR"."<br />";
	for ($i=0; $i<8; $i++)
	{echo $i.'**'.$tabScores[$i];
		
echo "<br />";}
*/
	

// Scores GA retour
Global $scores;
	$tabScores = array() ;
	
	$debut =1609;
	$fin=1617;

	for ($i=$debut; $i<$fin; $i++)
	{
	 $scores = "A".''.$i;
	 $reponse = $bdd->query("SELECT $scores
				FROM $bdcomite_pfterr_r
				WHERE  division=$division and annee=$annee"); 
				while ($row = $reponse->fetch() )
						{ 
						$tabScores[] = $row[0];
						}
 	 if (isset ($tabScores[$i-$debut])) ${"R".($i)} = $tabScores[$i-$debut]; else ${"R".($i)}="-"; 
	
	
	}
	/*
	echo "GA RETOUR"."<br />";
	for ($i=0; $i<8; $i++)
	{echo $i.'**'.$tabScores[$i];
		echo "<br />";}
*/

//*********************************************************************
//*****  Traitement des Equipes et des résultats des demi finale ********
//*******************************************************************

	$tabEquipes = array();
	$tabScores = array() ;
	
	$debut =2001;
	$fin=2005;

	for ($i=$debut; $i<$fin; $i++)
	{
	 //	Equipes
	 global ${"clubA".($i)};
   	 $equipes = "clubA".''.$i;

	if (isset ($tabEquipes[$i-$debut])) ${"clubA".($i)} = $tabEquipes[$i-$debut]; else ${"clubA".($i)}='-'; 							
	}
											
	$tabScores = array() ;
	
	$debut =2001;
	$fin=2005;

	for ($i=$debut; $i<$fin; $i++)
	{
	
	// Scores pts aller
	 global ${"A".($i)};
	 $scores = "A".''.$i;
	
	$reponse = $bdd->query("SELECT $scores
				FROM $bdcomite_pfterr_r
				WHERE  division=$division and annee=$annee"); 
				while ($row = $reponse->fetch() )
						{ 
						$tabScores[] = $row[0];
						}
 	 if (isset ($tabScores[$i-$debut])) ${"A".($i)} = $tabScores[$i-$debut]; else ${"A".($i)}='-'; 
	}


$tabScores = array() ;
	
	$debut =4001;
	$fin=4005;

	for ($i=$debut; $i<$fin; $i++)
	{
	
	// Scores GA aller
	 global ${"A".($i)};
	 $scores = "A".''.$i;
	
	$reponse = $bdd->query("SELECT $scores
				FROM $bdcomite_pfterr_r
				WHERE  division=$division and annee=$annee"); 
				while ($row = $reponse->fetch() )
						{ 
						$tabScores[] = $row[0];
						}
 	 if (isset ($tabScores[$i-$debut])) ${"A".($i)} = $tabScores[$i-$debut]; else ${"A".($i)}='-'; 

	}

	
//*********  DEMI RETOUR   ********


$tabScores = array() ;
	
	$debut =2001;
	$fin=2005;

	for ($i=$debut; $i<$fin; $i++)
	{
	
	// Scores pts Retour
	 global ${"R".($i)};
	 $scores = "R".''.$i;
	
	$reponse = $bdd->query("SELECT $scores
				FROM $bdcomite_pfterr_r
				WHERE  division=$division and annee=$annee"); 
				while ($row = $reponse->fetch() )
						{ 
						$tabScores[] = $row[0];
						}
 	 if (isset ($tabScores[$i-$debut])) ${"R".($i)} = $tabScores[$i-$debut]; else ${"R".($i)}='-'; 

	//echo ${"R".($i)}; echo "<br>";
	}
echo "<br>";

$tabScores = array() ;
	
	$debut =4001;
	$fin=4005;

	for ($i=$debut; $i<$fin; $i++)
	{
	
	// Scores GA Retour
	 global ${"R".($i)};
	 $scores = "R".''.$i;
	
	$reponse = $bdd->query("SELECT $scores
				FROM $bdcomite_pfterr_r
				WHERE  division=$division and annee=$annee"); 
				while ($row = $reponse->fetch() )
						{ 
						$tabScores[] = $row[0];
						}
 	 if (isset ($tabScores[$i-$debut])) ${"R".($i)} = $tabScores[$i-$debut]; else ${"R".($i)}='-'; 

	}
//echo "<br>";global $GA2003,$pts2003,$pts2004,$GA2004;
for ($i=2001; $i<2005; $i++) {global ${"pts".($i)};}
for ($i=2001; $i<2005; $i++) {global ${"GA".($i)};}


for ($i=2001; $i<2005; $i++) {global ${"A".($i)};}
for ($i=2001; $i<2005; $i++) {global ${"R".($i)};}



/************************ DEMI FINALE ***************************** */
/*

echo "<br>";
echo $A2001; echo "<br>";
echo $R2001; echo "<br>";
echo "<br>";

echo "*******************************";echo "<br>";
echo "A1 : ".$A2001; echo "<br>";
echo "A2 : ".$A2002; echo "<br>";
echo "A3 : ".$A2003; echo "<br>";
echo "A4 : ".$A2004; echo "<br>";
echo "*******************************";
echo "*******************************";echo "<br>";
echo "R1 : ".$R2001; echo "<br>";
echo "R2 : ".$R2002; echo "<br>";
echo "R3 : ".$R2003; echo "<br>";
echo "R4 : ".$R2004; echo "<br>";
echo "*******************************";


if ($A2001 != "-") {$pts2001 = $R2001; } else {$pts2001=0;}
if ($A2002 != "-") {$pts2002 = $R2002; } else {$pts2002=0;}
if ($A2003 != "-") {$pts2003 = $R2003; } else {$pts2003=0;}
if ($A2004 != "-") {$pts2004 = $R2004; } else {$pts2004=0;}

if ($R2001 != "-") {$pts2001 = $R2001; } else {$pts2001=0;}
if ($R2002 != "-") {$pts2002 = $R2002; } else {$pts2002=0;}
if ($R2003 != "-") {$pts2003 = $R2003; } else {$pts2003=0;}
if ($R2004 != "-") {$pts2004 = $R2004; } else {$pts2004=0;}


echo "*******************************";echo "<br>";
echo  "PTS1 : ".$pts2001; echo "<br>";
echo  "PTS2 : ".$pts2002; echo "<br>";
echo  "PTS3 : ".$pts2003; echo "<br>";
echo  "PTS4 : ".$pts2004; echo "<br>";
echo "*******************************";



echo "<br>";



echo "retour";
echo "<br>";

echo "*******************************";echo "<br>";
echo "A1 : ".$A4001; echo "<br>";
echo "A2 : ".$A4002; echo "<br>";
echo "A3 : ".$A4003; echo "<br>";
echo "A4 : ".$A4004; echo "<br>";
echo "*******************************";
echo "*******************************";echo "<br>";
echo "R1 : ".$R4001; echo "<br>";
echo "R2 : ".$R4002; echo "<br>";
echo "R3 : ".$R4003; echo "<br>";
echo "R4 : ".$R4004; echo "<br>";
echo "*******************************";


if ($A4001 != "-") {$GA2001 = $R4001 + $A4001; } else {$GA2001= 0 ;}
if ($A4002 != "-") {$GA2002 = $R4002 + $A4002; } else {$GA2002= 0 ;}
if ($A4003 != "-") {$GA2003 = $R4003 + $A4003; } else {$GA2003= 0; }
if ($A4004 != "-") {$GA2004 = $R4004 + $A4004; } else {$GA2004= 0 ;}

echo "*******************************";echo "<br>";
echo  "GA1 : ".$GA2001; echo "<br>";
echo  "GA2 : ".$GA2002; echo "<br>";
echo  "GA3 : ".$GA2003; echo "<br>";
echo  "GA4 : ".$GA2004; echo "<br>";
echo "*******************************";





echo "<br>";
*/

/*
if (is_numeric($A2001) and  is_numeric($R2001))	{$pts2001 = $A2001 + $R2001;}
			elseif (is_numeric($A2001))	{$pts2001 = $A2001; }
			else {$pts2001 = "-";}

*/



for ($i=4001; $i<4005; $i++) {global ${"A".($i)};}
for ($i=4001; $i<4005; $i++) {global ${"R".($i)};}



/******************QUARTS DE FINALE ******************************/

/*

echo "<br>";





echo "PTS"."<br>";

echo "*******************************";
echo "<br>";
echo "A1 : ".$A8001; echo "<br>";
echo "A2 : ".$A8002; echo "<br>";
echo "A3 : ".$A8003; echo "<br>";
echo "A4 : ".$A8004; echo "<br>";
echo "A5 : ".$A8005; echo "<br>";
echo "A6 : ".$A8006; echo "<br>";
echo "A7 : ".$A8007; echo "<br>";
echo "A8 : ".$A8008; echo "<br>";
echo "*******************************";
echo "*******************************";
echo "<br>";
echo "R1 : ".$R8009; echo "<br>";
echo "R2 : ".$R8010; echo "<br>";
echo "R3 : ".$R8011; echo "<br>";
echo "R4 : ".$R8012; echo "<br>";
echo "R5 : ".$R8013; echo "<br>";
echo "R6 : ".$R8014; echo "<br>";
echo "R7 : ".$R8015; echo "<br>";
echo "R8 : ".$R8016; echo "<br>";
echo "*******************************";
*/

if ($A8001 != "-") {$pts4001 = $A8001; } else {$pts4001=0;}
if ($A8002 != "-") {$pts4002 = $A8002; } else {$pts4002=0;}
if ($A8003 != "-") {$pts4003 = $A8003; } else {$pts4003=0;}
if ($A8004 != "-") {$pts4004 = $A8004; } else {$pts4004=0;}
if ($A8005 != "-") {$pts4005 = $A8005; } else {$pts4005=0;}
if ($A8005 != "-") {$pts4006 = $A8006; } else {$pts4006=0;}
if ($A8007 != "-") {$pts4007 = $A8007; } else {$pts4007=0;}
if ($A8008 != "-") {$pts4008 = $A8008; } else {$pts4008=0;}


if ($R8009 != "-") {$pts4001 = $R8009 + $A8001; } else {$pts4001=$pts4001;}
if ($R8010 != "-") {$pts4002 = $R8010 + $A8002; } else {$pts4002=$pts4002;}
if ($R8011 != "-") {$pts4003 = $R8011 + $A8003; } else {$pts4003=$pts4003;}
if ($R8012 != "-") {$pts4004 = $R8012 + $A8004; } else {$pts4004=$pts4004;}
if ($R8013 != "-") {$pts4005 = $R8013 + $A8005; } else {$pts4005=$pts4005;}
if ($R8014 != "-") {$pts4006 = $R8014 + $A8006; } else {$pts4006=$pts4006;}
if ($R8015 != "-") {$pts4007 = $R8015 + $A8007; } else {$pts4007=$pts4007;}
if ($R8016 != "-") {$pts4008 = $R8016 + $A8008; } else {$pts4008=$pts4008;}

/*
echo "*******************************";echo "<br>";
echo  "PTS1 : ".$pts4001; echo "<br>";
echo  "PTS2 : ".$pts4002; echo "<br>";
echo  "PTS3 : ".$pts4003; echo "<br>";
echo  "PTS4 : ".$pts4004; echo "<br>";
echo  "PTS5 : ".$pts4005; echo "<br>";
echo  "PTS6 : ".$pts4006; echo "<br>";
echo  "PTS7 : ".$pts4007; echo "<br>";
echo  "PTS8 : ".$pts4008; echo "<br>";

echo "*******************************";

echo "<br>";
echo "GA";
echo "<br>";

echo "*******************************";
echo "<br>";
echo "A1 : ".$A1601; echo "<br>";
echo "A2 : ".$A1602; echo "<br>";
echo "A3 : ".$A1603; echo "<br>";
echo "A4 : ".$A1604; echo "<br>";
echo "A5 : ".$A1605; echo "<br>";
echo "A6 : ".$A1606; echo "<br>";
echo "A7 : ".$A1607; echo "<br>";
echo "A8 : ".$A1608; echo "<br>";
echo "*******************************";
echo "*******************************";
echo "<br>";
echo "R1 : ".$R1609; echo "<br>";
echo "R2 : ".$R1610; echo "<br>";
echo "R3 : ".$R1611; echo "<br>";
echo "R4 : ".$R1612; echo "<br>";
echo "R5 : ".$R1613; echo "<br>";
echo "R6 : ".$R1614; echo "<br>";
echo "R7 : ".$R1615; echo "<br>";
echo "R8 : ".$R1616; echo "<br>";
echo "*******************************";
*/
if ($A1601 != "-") {$GA4001 = $A1601; } else {$GA4001= 0;}
if ($A1602 != "-") {$GA4002 = $A1602; } else {$GA4002= 0;}
if ($A1603 != "-") {$GA4003 = $A1603; } else {$GA4003= 0;}
if ($A1604 != "-") {$GA4004 = $A1604; } else {$GA4004= 0;}
if ($A1605 != "-") {$GA4005 = $A1605; } else {$GA4005= 0;}
if ($A1606 != "-") {$GA4006 = $A1606; } else {$GA4006= 0;}
if ($A1607 != "-") {$GA4007 = $A1607; } else {$GA4007= 0;}
if ($A1608 != "-") {$GA4008 = $A1608; } else {$GA4008= 0;}


if ($R1609 != "-") {$GA4001 = $R1609 + $A1601; } else {$GA4001= $GA4001;}
if ($R1610 != "-") {$GA4002 = $R1610 + $A1602; } else {$GA4002= $GA4002;}
if ($R1611 != "-") {$GA4003 = $R1611 + $A1603; } else {$GA4003= $GA4003;}
if ($R1612 != "-") {$GA4004 = $R1612 + $A1604; } else {$GA4004= $GA4004;}
if ($R1613 != "-") {$GA4005 = $R1613 + $A1605; } else {$GA4005= $GA4005;}
if ($R1614 != "-") {$GA4006 = $R1614 + $A1606; } else {$GA4006= $GA4006;}
if ($R1615 != "-") {$GA4007 = $R1615 + $A1607; } else {$GA4007= $GA4007;}
if ($R1616 != "-") {$GA4008 = $R1616 + $A1608; } else {$GA4008= $GA4008;}

/*
echo "*******************************";
echo "<br>";
echo  "GA1 : ".$GA4001; echo "<br>";
echo  "GA2 : ".$GA4002; echo "<br>";
echo  "GA3 : ".$GA4003; echo "<br>";
echo  "GA4 : ".$GA4004; echo "<br>";
echo  "GA5 : ".$GA4005; echo "<br>";
echo  "GA6 : ".$GA4006; echo "<br>";
echo  "GA7 : ".$GA4007; echo "<br>";
echo  "GA8 : ".$GA4008; echo "<br>";
echo "*******************************";
echo "<br>";

*/

//**********************************************************************
//*****  Traitement des Equipes et des résultats des demi finale ********
//*********************************************************************

global $A1001, $A1002;
global $clubA1001, $clubA1002;
	$tabScores = array() ;
	
	if (isset($A1001)) $A1001=$A1001; else $A1001="-";
	if (isset($A1002)) $A1002=$A1002; else $A1002="-";
	
	$reponse = $bdd->query("SELECT A1001, A1002
				FROM $bdcomite_pfterr_r
				WHERE  division=$division and annee=$annee"); 
				while ($row = $reponse->fetch() )
						{ 
						$A1001 = $row[0];
						$A1002 = $row[1];
						}


// Quarts
if ($pts4001 + $pts4002 > 6){ 	  if ($pts4001 > $pts4002 or ($pts4001 == $pts4002 and $GA4001 > $GA4002)){	$clubA2001=$clubA4001;}	else {$clubA2001=$clubA4002;};	} else if ($pts4001 + $pts4002 > 0 and $pts4001 + $pts4002 < 6) {  $pts4001=$pts4001; $pts4002=$pts4002; $GA4001=$GA4001; $GA4002=$GA4002;} else {	$pts4001="-";$pts4002="-";$GA4001="-";$GA4002="-"; }
if ($pts4003 + $pts4004 > 6){ 	  if ($pts4003 > $pts4004 or ($pts4003 == $pts4004 and $GA4003 > $GA4004)){	$clubA2002=$clubA4003;}	else {$clubA2002=$clubA4004;};	} else if ($pts4003 + $pts4004 > 0 and $pts4003 + $pts4004 < 6) {  $pts4003=$pts4003; $pts4004=$pts4004; $GA4003=$GA4003; $GA4004=$GA4004;} else {	$pts4003="-";$pts4004="-";$GA4003="-";$GA4004="-"; }
if ($pts4005 + $pts4006 > 6){ 	  if ($pts4005 > $pts4006 or ($pts4005 == $pts4006 and $GA4005 > $GA4006)){	$clubA2003=$clubA4005;}	else {$clubA2003=$clubA4006;};	} else if ($pts4005 + $pts4006 > 0 and $pts4005 + $pts4006 < 6) {  $pts4005=$pts4005; $pts4006=$pts4006; $GA4005=$GA4005; $GA4006=$GA4006;} else {	$pts4005="-";$pts4006="-";$GA4005="-";$GA4006="-"; }
if ($pts4007 + $pts4008 > 6){ 	  if ($pts4007 > $pts4008 or ($pts4007 == $pts4008 and $GA4007 > $GA4008)){	$clubA2004=$clubA4007;}	else {$clubA2004=$clubA4008;};	} else if ($pts4007 + $pts4008 > 0 and $pts4007 + $pts4008 < 6) {  $pts4007=$pts4007; $pts4008=$pts4008; $GA4007=$GA4007; $GA4008=$GA4008;} else {	$pts4007="-";$pts4008="-";$GA4007="-";$GA4008="-"; }





/*
if ($pts4003 + $pts4004 > 6){	if ($pts4003 > $pts4004 or ($pts4003 == $pts4004 and $GA4003 > $GA4004)){$clubA2002=$clubA4003;}else {$clubA2002=$clubA4004;};	}	else { $GA4003="-"; $pts4003 ="-";$GA4004="-"; $pts4004 ="-";}
if ($pts4005 + $pts4006 > 6){	if ($pts4005 > $pts4006 or ($pts4005 == $pts4006 and $GA4005 > $GA4006)){$clubA2003=$clubA4005;}else {$clubA2003=$clubA4006;};	}	else { $GA4005="-"; $pts4005 ="-";$GA4006="-"; $pts4006 ="-";}
if ($pts4007 + $pts4008 > 6){	if ($pts4007 > $pts4008 or ($pts4007 == $pts4008 and $GA4007 > $GA4008)){$clubA2004=$clubA4007;}else {$clubA2004=$clubA4008;};	}	else { $GA4007="-"; $pts4007 ="-";$GA4008="-"; $pts4008 ="-";}
*/







// demi
	if ($pts2001 + $pts2002 > 6){if ($pts2001 > $pts2002 or ($pts2001 == $pts2002 and $GA2001 > $GA2002)) 
			{$clubA1001=$clubA2001;} else {$clubA1001=$clubA2002;};}		
else { $GA2001="-"; $pts2001 ="-"; $GA2002="-"; $pts2002 ="-";$clubA1001="-";$A1001="-";}


	if ($pts2003 + $pts2004 > 6){	
		if ($pts2003 > $pts2004 or ($pts2003 == $pts2004 and $GA2003 > $GA2004))
		{$clubA1002=$clubA2003;} else {$clubA1002=$clubA2004;};	}
		else { $GA2003="-"; $pts2003 ="-"; $GA2004="-"; $pts2004 ="-";$clubA1002="-";$A1002="-";}

//Finale

//if ($A1001 + $A1002 > 0){	if ($A1001 > $A1002)	{$champion =  $clubA1001;	} else	{$champion  =$clubA1002;	}} else{ $A1001="-";	$A1002="-";}



}



//**************** *******************************************************
//***********************************************************************
//**                                                                   **
//**         ---------------Quarts AR et demi  Finale  : ------------------	   **
//**																   **
//***********************************************************************
//***********************************************************************

function quartsAR2019 ($comite, $division, $annee, $bdd)
{
	
	global $bdcomite_pfterr_e, $bdcomite_pfterr_r, $bdcomiteClub;


choixBdd($comite);
	
	
//*********************************************************************
//*****  Traitement des Equipes et des résultats des quarts de finale ********
//*******************************************************************
	
	$tabEquipes = array();
	$tabScores = array() ;
	
	$debut =4001;
	$fin=4009;

	for ($i=$debut; $i<$fin; $i++)
	{
	 //	******  Equipes  *******
	 global ${"clubA".($i)};
	 global ${"id".($i)};
	$equipes = "clubA".''.$i;
	;
	$reponse = $bdd->query("SELECT  $bdcomiteClub.nom, $bdcomite_pfterr_e.$equipes, $bdcomiteClub.id
				FROM $bdcomiteClub
				INNER JOIN $bdcomite_pfterr_e ON $bdcomite_pfterr_e.$equipes=$bdcomiteClub.id
				WHERE  $bdcomite_pfterr_e.division=$division and $bdcomite_pfterr_e.annee=$annee"); 
							while ($row = $reponse->fetch() )
								{ 
								 $tabEquipes[] = $row[0];
								 $tabId[] = $row[2];
								}
		
	if (isset ($tabEquipes[$i-$debut])) ${"clubA".($i)} = $tabEquipes[$i-$debut]; else ${"clubA".($i)}='-'; 							
	if (isset ($tabId[$i-$debut])) ${"id".($i)} = $tabId[$i-$debut]; else ${"id".($i)}='-';
	}

	for ($i=0; $i<8; $i++)
	{
		
	//echo $tabEquipes[$i];
	//echo $tabId[$i];	
	}
	// *******************************
	// ********   SCORES    **********
	


for ($i=4001; $i<4009; $i++) { global ${"pts".($i)};}
for ($i=4001; $i<4009; $i++) { global ${"GA".($i)};}

for ($i=1601; $i<1617; $i++) {global ${"A".($i)}, ${"R".($i)};}
for ($i=8001; $i<8017; $i++) {global ${"A".($i)}, ${"R".($i)};}
	
	
	// Scores Pts Aller
	 $tabScores = array() ;
	
	$debut = 8001;
	$fin= 8009;

	for ($i=$debut; $i<$fin; $i++)
	{ 
	
	 $scores = "A".''.$i;
	 $reponse = $bdd->query("SELECT $scores
				FROM $bdcomite_pfterr_r
				WHERE  division=$division and annee=$annee"); 
				while ($row = $reponse->fetch() )
						{ 
						$tabScores[] = $row[0];
						}
 	 if (isset ($tabScores[$i-$debut])) ${"A".($i)} = $tabScores[$i-$debut]; else ${"A".($i)}='-'; 
	}





/*	
	echo "Pts ALLER"."<br />";
	for ($i=0; $i < 8; $i++)
	{	
		echo $i.'--'.$tabScores[$i];
		echo "<br />";}
*/
	
	// Scores GA Aller

	$tabScores = array() ;
	
	$debut =1601;
	$fin=1609;

	for ($i=$debut; $i<$fin; $i++)
	{
	// global ${"A".($i)};
	 $scores = "A".''.$i;
	 $reponse = $bdd->query("SELECT $scores
				FROM $bdcomite_pfterr_r
				WHERE  division=$division and annee=$annee"); 
				while ($row = $reponse->fetch() )
						{ 
						$tabScores[] = $row[0];
						}
 	 if (isset ($tabScores[$i-$debut])) ${"A".($i)} = $tabScores[$i-$debut]; else ${"A".($i)}='-'; 
	}
/*	
	echo "GA ALLER"."<br />";
	for ($i=0; $i<8; $i++)
	{echo $i.'**'.$tabScores[$i];
		echo "<br />";}
	*/
	
	// Scores Pts retour


	$tabScores = array() ;
	
	
	$debut =8009;
	$fin=8017;
	

	for ($i=$debut; $i<$fin; $i++)
	{
	
	 
	 $scores = "A".''.$i;
	 $reponse = $bdd->query("SELECT $scores
				FROM $bdcomite_pfterr_r
				WHERE  division=$division and annee=$annee"); 
				while ($row = $reponse->fetch() )
						{ 
						$tabScores[] = $row[0];
						}
 	 if (isset ($tabScores[$i-$debut])) ${"R".($i)} = $tabScores[$i-$debut]; else ${"R".($i)}="-"; 
	}
/*
	echo "Pts RETOUR"."<br />";
	for ($i=0; $i<8; $i++)
	{echo $i.'**'.$tabScores[$i];
		
echo "<br />";}
*/
	

// Scores GA retour
Global $scores;
	$tabScores = array() ;
	
	$debut =1609;
	$fin=1617;

	for ($i=$debut; $i<$fin; $i++)
	{
	 $scores = "A".''.$i;
	 $reponse = $bdd->query("SELECT $scores
				FROM $bdcomite_pfterr_r
				WHERE  division=$division and annee=$annee"); 
				while ($row = $reponse->fetch() )
						{ 
						$tabScores[] = $row[0];
						}
 	 if (isset ($tabScores[$i-$debut])) ${"R".($i)} = $tabScores[$i-$debut]; else ${"R".($i)}="-"; 
	
	
	}
	/*
	echo "GA RETOUR"."<br />";
	for ($i=0; $i<8; $i++)
	{echo $i.'**'.$tabScores[$i];
		echo "<br />";}
*/

//*********************************************************************
//*****  Traitement des Equipes et des résultats des demi finale ********
//*******************************************************************

	$tabEquipes = array();
	$tabScores = array() ;
	
	$debut =2001;
	$fin=2005;

	global $A1001, $A1002;
global $clubA1001, $clubA1002;

	for ($i=$debut; $i<$fin; $i++)
	{
	 //	Equipes
	 global ${"clubA".($i)};
   	 $equipes = "clubA".''.$i;

	if (isset ($tabEquipes[$i-$debut])) ${"clubA".($i)} = $tabEquipes[$i-$debut]; else ${"clubA".($i)}='-'; 							
	}
											
	$tabScores = array() ;
	
	$debut =2001;
	$fin=2005;

	for ($i=$debut; $i<$fin; $i++)
	{
	
	// Scores pts aller
	 global ${"A".($i)};
	 $scores = "A".''.$i;
	
	$reponse = $bdd->query("SELECT $scores
				FROM $bdcomite_pfterr_r
				WHERE  division=$division and annee=$annee"); 
				while ($row = $reponse->fetch() )
						{ 
						$tabScores[] = $row[0];
						}
 	 if (isset ($tabScores[$i-$debut])) ${"A".($i)} = $tabScores[$i-$debut]; else ${"A".($i)}='-'; 
	}

/*
$tabScores = array() ;
	
	$debut =4001;
	$fin=4005;

	for ($i=$debut; $i<$fin; $i++)
	{
	
	// Scores GA aller
	 global ${"A".($i)};
	 $scores = "A".''.$i;
	
	$reponse = $bdd->query("SELECT $scores
				FROM $bdcomite_pfterr_r
				WHERE  division=$division and annee=$annee"); 
				while ($row = $reponse->fetch() )
						{ 
						$tabScores[] = $row[0];
						}
 	 if (isset ($tabScores[$i-$debut])) ${"A".($i)} = $tabScores[$i-$debut]; else ${"A".($i)}='-'; 

	}
*/
	
//*********  DEMI RETOUR   ********
/*

$tabScores = array() ;
	
	$debut =2001;
	$fin=2005;

	for ($i=$debut; $i<$fin; $i++)
	{
	
	// Scores pts Retour
	 global ${"R".($i)};
	 $scores = "R".''.$i;
	
	$reponse = $bdd->query("SELECT $scores
				FROM $bdcomite_pfterr_r
				WHERE  division=$division and annee=$annee"); 
				while ($row = $reponse->fetch() )
						{ 
						$tabScores[] = $row[0];
						}
 	 if (isset ($tabScores[$i-$debut])) ${"R".($i)} = $tabScores[$i-$debut]; else ${"R".($i)}='-'; 

	//echo ${"R".($i)}; echo "<br>";
	}
echo "<br>";

$tabScores = array() ;
	
	$debut =4001;
	$fin=4005;

	for ($i=$debut; $i<$fin; $i++)
	{
	
	// Scores GA Retour
	 global ${"R".($i)};
	 $scores = "R".''.$i;
	
	$reponse = $bdd->query("SELECT $scores
				FROM $bdcomite_pfterr_r
				WHERE  division=$division and annee=$annee"); 
				while ($row = $reponse->fetch() )
						{ 
						$tabScores[] = $row[0];
						}
 	 if (isset ($tabScores[$i-$debut])) ${"R".($i)} = $tabScores[$i-$debut]; else ${"R".($i)}='-'; 

	}

	*/
//echo "<br>";global $GA2003,$pts2003,$pts2004,$GA2004;
for ($i=2001; $i<2005; $i++) {global ${"pts".($i)};}
for ($i=2001; $i<2005; $i++) {global ${"GA".($i)};}


for ($i=2001; $i<2005; $i++) {global ${"A".($i)};}
for ($i=2001; $i<2005; $i++) {global ${"R".($i)};}



/************************ DEMI FINALE ***************************** */
/*

echo "<br>";
echo $A2001; echo "<br>";
echo $R2001; echo "<br>";
echo "<br>";

echo "*******************************";echo "<br>";
echo "A1 : ".$A2001; echo "<br>";
echo "A2 : ".$A2002; echo "<br>";
echo "A3 : ".$A2003; echo "<br>";
echo "A4 : ".$A2004; echo "<br>";
echo "*******************************";
echo "*******************************";echo "<br>";
echo "R1 : ".$R2001; echo "<br>";
echo "R2 : ".$R2002; echo "<br>";
echo "R3 : ".$R2003; echo "<br>";
echo "R4 : ".$R2004; echo "<br>";
echo "*******************************";
*/

if ($A2001 != "-") {$A2001 = $A2001; } else {$A2001=0;}
if ($A2002 != "-") {$A2002 = $A2002; } else {$A2002=0;}
if ($A2003 != "-") {$A2003 = $A2003; } else {$A2003=0;}
if ($A2004 != "-") {$A2004 = $A2004; } else {$A2004=0;}
/*
if ($R2001 != "-") {$pts2001 = $R2001; } else {$pts2001=0;}
if ($R2002 != "-") {$pts2002 = $R2002; } else {$pts2002=0;}
if ($R2003 != "-") {$pts2003 = $R2003; } else {$pts2003=0;}
if ($R2004 != "-") {$pts2004 = $R2004; } else {$pts2004=0;}
/*

echo "*******************************";echo "<br>";
echo  "PTS1 : ".$pts2001; echo "<br>";
echo  "PTS2 : ".$pts2002; echo "<br>";
echo  "PTS3 : ".$pts2003; echo "<br>";
echo  "PTS4 : ".$pts2004; echo "<br>";
echo "*******************************";



echo "<br>";



echo "retour";
echo "<br>";

echo "*******************************";echo "<br>";
echo "A1 : ".$A4001; echo "<br>";
echo "A2 : ".$A4002; echo "<br>";
echo "A3 : ".$A4003; echo "<br>";
echo "A4 : ".$A4004; echo "<br>";
echo "*******************************";
echo "*******************************";echo "<br>";
echo "R1 : ".$R4001; echo "<br>";
echo "R2 : ".$R4002; echo "<br>";
echo "R3 : ".$R4003; echo "<br>";
echo "R4 : ".$R4004; echo "<br>";
echo "*******************************";
*/

if ($A4001 != "-") {$GA2001 = $R4001 + $A4001; } else {$GA2001= 0 ;}
if ($A4002 != "-") {$GA2002 = $R4002 + $A4002; } else {$GA2002= 0 ;}
if ($A4003 != "-") {$GA2003 = $R4003 + $A4003; } else {$GA2003= 0; }
if ($A4004 != "-") {$GA2004 = $R4004 + $A4004; } else {$GA2004= 0 ;}
/*
echo "*******************************";echo "<br>";
echo  "GA1 : ".$GA2001; echo "<br>";
echo  "GA2 : ".$GA2002; echo "<br>";
echo  "GA3 : ".$GA2003; echo "<br>";
echo  "GA4 : ".$GA2004; echo "<br>";
echo "*******************************";





echo "<br>";
*/

/*
if (is_numeric($A2001) and  is_numeric($R2001))	{$pts2001 = $A2001 + $R2001;}
			elseif (is_numeric($A2001))	{$pts2001 = $A2001; }
			else {$pts2001 = "-";}

*/



for ($i=4001; $i<4005; $i++) {global ${"A".($i)};}
for ($i=4001; $i<4005; $i++) {global ${"R".($i)};}



/******************QUARTS DE FINALE ******************************/

/*

echo "<br>";





echo "PTS"."<br>";

echo "*******************************";
echo "<br>";
echo "A1 : ".$A8001; echo "<br>";
echo "A2 : ".$A8002; echo "<br>";
echo "A3 : ".$A8003; echo "<br>";
echo "A4 : ".$A8004; echo "<br>";
echo "A5 : ".$A8005; echo "<br>";
echo "A6 : ".$A8006; echo "<br>";
echo "A7 : ".$A8007; echo "<br>";
echo "A8 : ".$A8008; echo "<br>";
echo "*******************************";
echo "*******************************";
echo "<br>";
echo "R1 : ".$R8009; echo "<br>";
echo "R2 : ".$R8010; echo "<br>";
echo "R3 : ".$R8011; echo "<br>";
echo "R4 : ".$R8012; echo "<br>";
echo "R5 : ".$R8013; echo "<br>";
echo "R6 : ".$R8014; echo "<br>";
echo "R7 : ".$R8015; echo "<br>";
echo "R8 : ".$R8016; echo "<br>";
echo "*******************************";
*/

if ($A8001 != "-") {$pts4001 = $A8001; } else {$pts4001=0;}
if ($A8002 != "-") {$pts4002 = $A8002; } else {$pts4002=0;}
if ($A8003 != "-") {$pts4003 = $A8003; } else {$pts4003=0;}
if ($A8004 != "-") {$pts4004 = $A8004; } else {$pts4004=0;}
if ($A8005 != "-") {$pts4005 = $A8005; } else {$pts4005=0;}
if ($A8005 != "-") {$pts4006 = $A8006; } else {$pts4006=0;}
if ($A8007 != "-") {$pts4007 = $A8007; } else {$pts4007=0;}
if ($A8008 != "-") {$pts4008 = $A8008; } else {$pts4008=0;}


if ($R8009 != "-") {$pts4001 = $R8009 + $A8001; } else {$pts4001=$pts4001;}
if ($R8010 != "-") {$pts4002 = $R8010 + $A8002; } else {$pts4002=$pts4002;}
if ($R8011 != "-") {$pts4003 = $R8011 + $A8003; } else {$pts4003=$pts4003;}
if ($R8012 != "-") {$pts4004 = $R8012 + $A8004; } else {$pts4004=$pts4004;}
if ($R8013 != "-") {$pts4005 = $R8013 + $A8005; } else {$pts4005=$pts4005;}
if ($R8014 != "-") {$pts4006 = $R8014 + $A8006; } else {$pts4006=$pts4006;}
if ($R8015 != "-") {$pts4007 = $R8015 + $A8007; } else {$pts4007=$pts4007;}
if ($R8016 != "-") {$pts4008 = $R8016 + $A8008; } else {$pts4008=$pts4008;}

/*
echo "*******************************";echo "<br>";
echo  "PTS1 : ".$pts4001; echo "<br>";
echo  "PTS2 : ".$pts4002; echo "<br>";
echo  "PTS3 : ".$pts4003; echo "<br>";
echo  "PTS4 : ".$pts4004; echo "<br>";
echo  "PTS5 : ".$pts4005; echo "<br>";
echo  "PTS6 : ".$pts4006; echo "<br>";
echo  "PTS7 : ".$pts4007; echo "<br>";
echo  "PTS8 : ".$pts4008; echo "<br>";

echo "*******************************";

echo "<br>";
echo "GA";
echo "<br>";

echo "*******************************";
echo "<br>";
echo "A1 : ".$A1601; echo "<br>";
echo "A2 : ".$A1602; echo "<br>";
echo "A3 : ".$A1603; echo "<br>";
echo "A4 : ".$A1604; echo "<br>";
echo "A5 : ".$A1605; echo "<br>";
echo "A6 : ".$A1606; echo "<br>";
echo "A7 : ".$A1607; echo "<br>";
echo "A8 : ".$A1608; echo "<br>";
echo "*******************************";
echo "*******************************";
echo "<br>";
echo "R1 : ".$R1609; echo "<br>";
echo "R2 : ".$R1610; echo "<br>";
echo "R3 : ".$R1611; echo "<br>";
echo "R4 : ".$R1612; echo "<br>";
echo "R5 : ".$R1613; echo "<br>";
echo "R6 : ".$R1614; echo "<br>";
echo "R7 : ".$R1615; echo "<br>";
echo "R8 : ".$R1616; echo "<br>";
echo "*******************************";
*/

if ($A1601 != "-") {$GA4001 = $A1601; } else {$GA4001= 0;}
if ($A1602 != "-") {$GA4002 = $A1602; } else {$GA4002= 0;}
if ($A1603 != "-") {$GA4003 = $A1603; } else {$GA4003= 0;}
if ($A1604 != "-") {$GA4004 = $A1604; } else {$GA4004= 0;}
if ($A1605 != "-") {$GA4005 = $A1605; } else {$GA4005= 0;}
if ($A1606 != "-") {$GA4006 = $A1606; } else {$GA4006= 0;}
if ($A1607 != "-") {$GA4007 = $A1607; } else {$GA4007= 0;}
if ($A1608 != "-") {$GA4008 = $A1608; } else {$GA4008= 0;}


if ($R1609 != "-") {$GA4001 = $R1609 + $A1601; } else {$GA4001= $GA4001;}
if ($R1610 != "-") {$GA4002 = $R1610 + $A1602; } else {$GA4002= $GA4002;}
if ($R1611 != "-") {$GA4003 = $R1611 + $A1603; } else {$GA4003= $GA4003;}
if ($R1612 != "-") {$GA4004 = $R1612 + $A1604; } else {$GA4004= $GA4004;}
if ($R1613 != "-") {$GA4005 = $R1613 + $A1605; } else {$GA4005= $GA4005;}
if ($R1614 != "-") {$GA4006 = $R1614 + $A1606; } else {$GA4006= $GA4006;}
if ($R1615 != "-") {$GA4007 = $R1615 + $A1607; } else {$GA4007= $GA4007;}
if ($R1616 != "-") {$GA4008 = $R1616 + $A1608; } else {$GA4008= $GA4008;}

/*
echo "*******************************";
echo "<br>";
echo  "GA1 : ".$GA4001; echo "<br>";
echo  "GA2 : ".$GA4002; echo "<br>";
echo  "GA3 : ".$GA4003; echo "<br>";
echo  "GA4 : ".$GA4004; echo "<br>";
echo  "GA5 : ".$GA4005; echo "<br>";
echo  "GA6 : ".$GA4006; echo "<br>";
echo  "GA7 : ".$GA4007; echo "<br>";
echo  "GA8 : ".$GA4008; echo "<br>";
echo "*******************************";
echo "<br>";

*/

//**********************************************************************
//*****  Traitement des Equipes et des résultats des demi finale ********
//*********************************************************************

global $A1001, $A1002;
global $clubA1001, $clubA1002;
	$tabScores = array() ;
	
	if (isset($A1001)) $A1001=$A1001; else $A1001="-";
	if (isset($A1002)) $A1002=$A1002; else $A1002="-";
	
	$reponse = $bdd->query("SELECT A1001, A1002
				FROM $bdcomite_pfterr_r
				WHERE  division=$division and annee=$annee"); 
				while ($row = $reponse->fetch() )
						{ 
						$A1001 = $row[0];
						$A1002 = $row[1];
						}


// Quarts
if ($pts4001 + $pts4002 > 6){ 	  if ($pts4001 > $pts4002 or ($pts4001 == $pts4002 and $GA4001 > $GA4002)){	$clubA2001=$clubA4001;}	else {$clubA2001=$clubA4002;};	} else if ($pts4001 + $pts4002 > 0 and $pts4001 + $pts4002 < 6) {  $pts4001=$pts4001; $pts4002=$pts4002; $GA4001=$GA4001; $GA4002=$GA4002;} else {	$pts4001="-";$pts4002="-";$GA4001="-";$GA4002="-"; }
if ($pts4003 + $pts4004 > 6){ 	  if ($pts4003 > $pts4004 or ($pts4003 == $pts4004 and $GA4003 > $GA4004)){	$clubA2002=$clubA4003;}	else {$clubA2002=$clubA4004;};	} else if ($pts4003 + $pts4004 > 0 and $pts4003 + $pts4004 < 6) {  $pts4003=$pts4003; $pts4004=$pts4004; $GA4003=$GA4003; $GA4004=$GA4004;} else {	$pts4003="-";$pts4004="-";$GA4003="-";$GA4004="-"; }
if ($pts4005 + $pts4006 > 6){ 	  if ($pts4005 > $pts4006 or ($pts4005 == $pts4006 and $GA4005 > $GA4006)){	$clubA2003=$clubA4005;}	else {$clubA2003=$clubA4006;};	} else if ($pts4005 + $pts4006 > 0 and $pts4005 + $pts4006 < 6) {  $pts4005=$pts4005; $pts4006=$pts4006; $GA4005=$GA4005; $GA4006=$GA4006;} else {	$pts4005="-";$pts4006="-";$GA4005="-";$GA4006="-"; }
if ($pts4007 + $pts4008 > 6){ 	  if ($pts4007 > $pts4008 or ($pts4007 == $pts4008 and $GA4007 > $GA4008)){	$clubA2004=$clubA4007;}	else {$clubA2004=$clubA4008;};	} else if ($pts4007 + $pts4008 > 0 and $pts4007 + $pts4008 < 6) {  $pts4007=$pts4007; $pts4008=$pts4008; $GA4007=$GA4007; $GA4008=$GA4008;} else {	$pts4007="-";$pts4008="-";$GA4007="-";$GA4008="-"; }



// demi


if (is_numeric($A2001) and is_numeric($A2002)){	
	if ($A2001 + $A2002 > 0){	if ($A2001 > $A2002)	{$clubA1001 = $clubA2001;	} else	{$clubA1001 = $clubA2002;	}} else{ $A2001="-";	$A2002="-"; $clubA1001="-";}
}
	if (is_numeric($A2003) and is_numeric($A2004)){	
	if ($A2003 + $A2004 > 0){	if ($A2003 > $A2004)	{$clubA1002 = $clubA2003;	} else	{$clubA1002 = $clubA2004;	}} else{ $A2003="-";	$A2004="-"; $clubA1002="-";}

}
	/*
echo $A2001; echo "<br>";
echo $A2002; echo "<br>";
echo $A2003; echo "<br>";
echo $A2004; echo "<br>";
echo $clubA1001; echo "<br>";
echo $clubA1002; echo "<br>";	
*/

	
//Finale	
	if (is_numeric($A1001) and is_numeric($A1002)){
if ($A1001 + $A1002 > 0){	if ($A1001 > $A1002)	{$champion =  $clubA1001;	} else	{$champion  = $clubA1002;	}} else{ $A1001="-";	$A1002="-";}
	}
	else
	{ $A1001="-";	$A1002="-";}
}


//**************** *******************************************************
//***********************************************************************
//**                                                                   **
//**         ---------------Quarts de Finale : ------------------	   **
//**																   **
//***********************************************************************
//***********************************************************************

function quarts2019 ($comite, $division, $annee, $bdd)
{
	
	global $bdcomite_pfterr_e, $bdcomite_pfterr_r, $bdcomiteClub;


choixBdd($comite);
	
//*********************************************************************
//*****  Traitement des Equipes et des résultats des quarts de finale ********
//*******************************************************************
	
	$tabEquipes = array();
	$tabScores = array() ;
	
	$debut =4001;
	$fin=4009;

	for ($i=$debut; $i<$fin; $i++)
	{
	 //	Equipes
	 global ${"clubA".($i)};
	 global ${"id".($i)};
	$equipes = "clubA".''.$i;
	
	$reponse = $bdd->query("SELECT  $bdcomiteClub.nom, $bdcomite_pfterr_e.$equipes, $bdcomiteClub.id
				FROM $bdcomiteClub
				INNER JOIN $bdcomite_pfterr_e ON $bdcomite_pfterr_e.$equipes=$bdcomiteClub.id
				WHERE  $bdcomite_pfterr_e.division=$division and $bdcomite_pfterr_e.annee=$annee"); 
							while ($row = $reponse->fetch() )
								{ 
								 $tabEquipes[] = $row[0];
								 $tabId[] = $row[2];
								}
		
	if (isset ($tabEquipes[$i-$debut])) ${"clubA".($i)} = $tabEquipes[$i-$debut]; else ${"clubA".($i)}='-'; 							
	if (isset ($tabId[$i-$debut])) ${"id".($i)} = $tabId[$i-$debut]; else ${"id".($i)}='-';
										
	// Scores
	 global ${"A".($i)};
	 $scores = "A".''.$i;
	 $reponse = $bdd->query("SELECT $scores
				FROM $bdcomite_pfterr_r
				WHERE  division=$division and annee=$annee"); 
				while ($row = $reponse->fetch() )
						{ 
						$tabScores[] = $row[0];
						}
 	 if (isset ($tabScores[$i-$debut])) ${"A".($i)} = $tabScores[$i-$debut]; else ${"A".($i)}='-'; 
	}
	
	/*for ($i = 0; $i < 8; $i++){
	//echo  $tabId[$i].$tabEquipes[$i]; echo "<br />";
	//echo  $tabScores[$i]; echo "<br />";
	}
	*/
	
//echo "<br />";
//*********************************************************************
//*****  Traitement des Equipes et des résultats des demi finale ********
//*******************************************************************
	
	$tabEquipes = array();
	$tabScores = array() ;
	
	$debut =2001;
	$fin=2005;

	for ($i=$debut; $i<$fin; $i++)
	{
	 //	Equipes
	 global ${"clubA".($i)};
   	 $equipes = "clubA".''.$i;
		
	if (isset ($tabEquipes[$i-$debut])) ${"clubA".($i)} = $tabEquipes[$i-$debut]; else ${"clubA".($i)}='-'; 							
	
											
	// Scores
	 global ${"A".($i)};
	 $scores = "A".''.$i;
	
	$reponse = $bdd->query("SELECT $scores
				FROM $bdcomite_pfterr_r
				WHERE  division=$division and annee=$annee"); 
				while ($row = $reponse->fetch() )
						{ 
						$tabScores[] = $row[0];
						}
 	 if (isset ($tabScores[$i-$debut])) ${"A".($i)} = $tabScores[$i-$debut]; else ${"A".($i)}='0'; 

	}	

//**********************************************************************
//*****  Traitement des Equipes et des résultats des demi finale ********
//*********************************************************************

global $A1001, $A1002;
global $clubA1001, $clubA1002;
	$tabScores = array() ;
	
	if (isset($A1001)) $A1001=$A1001; else $A1001="-";
	if (isset($A1002)) $A1002=$A1002; else $A1002="-";
	
	$reponse = $bdd->query("SELECT A1001, A1002
				FROM $bdcomite_pfterr_r
				WHERE  division=$division and annee=$annee"); 
				while ($row = $reponse->fetch() )
						{ 
						$A1001 = $row[0];
						$A1002 = $row[1];
						}
if (is_numeric($A4001) and is_numeric($A4002)){
if ($A4001 + $A4002 > 0){	if ($A4001>$A4002)	{$clubA2001=$clubA4001;	} else	{$clubA2001=$clubA4002;	}}else{ $A4001="-";	$A4002="-"; $clubA2001="-";}
}
if (is_numeric($A4003) and is_numeric($A4004)){
if ($A4003 + $A4004 > 0){	if ($A4003>$A4004)	{$clubA2002=$clubA4003;	} else	{$clubA2002=$clubA4004;	}}else{ $A4003="-";	$A4004="-"; $clubA2002="-";}
}

if (is_numeric($A4005) and is_numeric($A4006)){
if ($A4005 + $A4006 > 0){	if ($A4005>$A4006)	{$clubA2003=$clubA4005;	} else	{$clubA2003=$clubA4006;	}}else{ $A4005="-";	$A4006="-"; $clubA2003="-";}
}

if (is_numeric($A4007) and is_numeric($A4008)){
if ($A4007 + $A4008 > 0){	if ($A4007>$A4008)	{$clubA2004=$clubA4007;	} else	{$clubA2004=$clubA4008;	}}else{ $A4007="-";	$A4008="-"; $clubA2004="-";}
}

if (is_numeric($A2001) and is_numeric($A2002)){
if ($A2001 + $A2002 > 0){	if ($A2001 > $A2002)	{$clubA1001 = $clubA2001;	} else	{$clubA1001 = $clubA2002;	}} else{ $A2001="-";	$A2002="-"; $clubA1001="-";}
}
if (is_numeric($A2003) and is_numeric($A2004)){
if ($A2003 + $A2004 > 0){	if ($A2003 > $A2004)	{$clubA1002 = $clubA2003;	} else	{$clubA1002 = $clubA2004;	}} else{ $A2003="-";	$A2004="-"; $clubA1002="-";}
}
if (is_numeric($A1001) and is_numeric($A1002)){
if ($A1001 + $A1002 > 0){	if ($A1001 > $A1002)	{$champion =  $clubA1001;	} else	{$champion  =$clubA1002;	}} else{ $A1001="-";	$A1002="-";}
}


//if (is_numeric($A2001) + is_numeric($A2002) > 0){if ($A2001 > $A2002)	{$clubA1001 = $clubA2001;} 	else	{$clubA1001 = $clubA2002;}	}	else	{ $clubA1001="-"; 	}
//if (is_numeric($A2003) + is_numeric($A2004) > 0){if ($A2003 > $A2004)	{$clubA1002 = $clubA2003;} 	else	{$clubA1002 = $clubA2004;}	}	else	{ $clubA1002="-"; 	}
					
}







//***********************************************************************
//***********************************************************************
//**                                                                   **
//**    ----------Quarts de Finale Plus Barrages: -----------------	   **
//**																   **
//***********************************************************************
//*********************************************************************** 
 
 
function quartsPlusBarrages2019 ($comite, $division, $annee, $bdd)
{


	global $bdcomite_pfterr_e, $bdcomite_pfterr_r, $bdcomiteClub;


	choixBdd($comite);	

//*********************************************************************
//*****  Traitement des Equipes et des r�sultats des barrages ********
//*******************************************************************
	

	$tabEquipes = array();
	$tabScores = array() ;
	
	$debut =8001;
	$fin=8009;

	for ($i=$debut; $i<$fin; $i++)
	{

	 //	Equipes
	 global ${"clubA".($i)};
   	 $equipes = "clubA".''.$i;
	
	 $reponse = $bdd->query("SELECT  $bdcomiteClub.nom, $bdcomite_pfterr_e.$equipes
				FROM $bdcomiteClub
				INNER JOIN $bdcomite_pfterr_e ON $bdcomite_pfterr_e.$equipes=$bdcomiteClub.id
				WHERE  $bdcomite_pfterr_e.division=$division and $bdcomite_pfterr_e.annee=$annee"); 
							while ($row = $reponse->fetch() )
								{  $tabEquipes[] = $row[0];	}
		
	 if (isset ($tabEquipes[$i-$debut])) ${"clubA".($i)} = $tabEquipes[$i-$debut]; else ${"clubA".($i)}='-'; 							
	
											
	 // Scores
	 global ${"A".($i)};
	 $scores = "A".''.$i;
	
	  $reponse = $bdd->query("SELECT $scores
				FROM $bdcomite_pfterr_r
				WHERE  division=$division and annee=$annee"); 
				while ($row = $reponse->fetch() )
						{ $tabScores[] = $row[0];}
					
 	 if (isset ($tabScores[$i-$debut])) ${"A".($i)} = $tabScores[$i-$debut]; else ${"A".($i)}='-'; 
	}	
	
//*********************************************************************
//*****  Traitement des Equipes et des r�sultats des quarts de finale ********
//*******************************************************************
	
	$tabEquipes = array();
	$tabScores = array() ;
	
	$debut =4001;
	$fin=4009;

	for ($i=$debut; $i<$fin; $i++)
	{

	 //	Equipes
	 global ${"clubA".($i)};
   	 $equipes = "clubA".''.$i;
	
	 $reponse = $bdd->query("SELECT  $bdcomiteClub.nom, $bdcomite_pfterr_e.$equipes
				FROM $bdcomiteClub
				INNER JOIN $bdcomite_pfterr_e ON $bdcomite_pfterr_e.$equipes=$bdcomiteClub.id
				WHERE  $bdcomite_pfterr_e.division=$division and $bdcomite_pfterr_e.annee=$annee"); 
							while ($row = $reponse->fetch() )
								{  $tabEquipes[] = $row[0];	}
		
	 if (isset ($tabEquipes[$i-$debut])) ${"clubA".($i)} = $tabEquipes[$i-$debut]; else ${"clubA".($i)}='-'; 							
											
	 // Scores
	 global ${"A".($i)};
	 $scores = "A".''.$i;
	
	 $reponse = $bdd->query("SELECT $scores
				FROM $bdcomite_pfterr_r
				WHERE  division=$division and annee=$annee"); 
				while ($row = $reponse->fetch() )
						{ $tabScores[] = $row[0];}
					
 	 if (isset ($tabScores[$i-$debut])) ${"A".($i)} = $tabScores[$i-$debut]; else ${"A".($i)}='-'; 

	}	
	
//**********************************************************************										
//*****  Traitement des �quipes et des r�sultats des Demi finale********											
//**********************************************************************

	$tabScores = array() ;
	
	for ($i=2001; $i<2005; $i++)
	{
	
	 //Equipes
	 global ${"clubA".($i)};
	 if (isset (${"clubA".($i)})) ${"clubA".($i)} = ${"clubA".($i)}; else ${"clubA".($i)}='-'; 	
	
	//Scores 
     global ${"A".($i)};
	 $scores = "A".''.$i;											

	 $reponse = $bdd->query("SELECT $scores
				FROM $bdcomite_pfterr_r
				WHERE  division=$division and annee=$annee"); 
				while ($row = $reponse->fetch() )
						{ $tabScores[] = $row[0];}

	 if (isset ($tabScores[$i-2001])) ${"A".($i)} = $tabScores[$i-2001]; else ${"A".($i)}='-'; 										
	} 

//**********************************************************************										
//*****  Traitement des �quipes et des r�sultats des Demi finale********											
//**********************************************************************	


	global $clubA1001, $clubA1002, $A1001, $A1002;
	if (isset( $clubA1001)) $clubA1001 = $clubA1001 ; else $clubA1001 ="-";
	if (isset( $clubA1002)) $clubA1002 = $clubA1002 ; else $clubA1002 ="-";
	
	
	

	$tabScores = array() ;
	
	
	 $reponse = $bdd->query("SELECT A1001, A1002
				FROM $bdcomite_pfterr_r
				WHERE  division=$division and annee=$annee"); 
				while ($row = $reponse->fetch() )
						{ 
						$A1001 = $row[0];
						$A1002 = $row[1];
						}
	if (isset ($A1001)) $A1001 = $A1001 ; else $A1001 ="-";
	if (isset( $A1002)) $A1002 = $A1002 ; else $A1002 ="-";

if (is_numeric($A4001)+is_numeric($A4002) > 0)	{	if ($A4001>$A4002)	{$clubA2001=$clubA4001;	} else	{$clubA2001=$clubA4002;	}}	else{	$A4001="-";	$A4002="-";	$quart1="-";}
if (is_numeric($A4003)+is_numeric($A4004) > 0)	{	if ($A4003>$A4004)	{$clubA2002=$clubA4003;	} else	{$clubA2002=$clubA4004;	}}	else{	$A4003="-";	$A4004="-";	$quart1="-";}
if (is_numeric($A4005)+is_numeric($A4006) > 0)	{	if ($A4005>$A4006)	{$clubA2003=$clubA4005;	} else	{$clubA2003=$clubA4006;	}}	else{	$A4005="-";	$A4006="-";	$quart1="-";}
if (is_numeric($A4007)+is_numeric($A4008) > 0)	{	if ($A4007>$A4008)	{$clubA2004=$clubA4007;	} else	{$clubA2004=$clubA4008;	}}	else{	$A4007="-";	$A4008="-";	$quart1="-";}

if (is_numeric($A2001)+is_numeric($A2002) > 0)	{	if ($A2001>$A2002)	{$clubA1001=$clubA2001;	} else	{$clubA1001=$clubA2002;	}}	else{	$A2001="-";	$A2002="-";	$quart1="-";}
if (is_numeric($A2003)+is_numeric($A2004) > 0)	{	if ($A2003>$A2004)	{$clubA1002=$clubA2003;	} else	{$clubA1002=$clubA2004;	}}	else{	$A2003="-";	$A2004="-";	$quart1="-";}

if (is_numeric($A1001)+is_numeric($A1002) > 0)	{	if ($A2001>$A2002)	{$clubA1001=$clubA2001;	} else	{$clubA1001=$clubA2002;	}}	else{	$A2001="-";	$A2002="-";	$quart1="-";}	

						
//champion ($comite, $clubA1001, $clubA1002, $A1001, $A1002, $bdd);

}





//***********************************************************************
//***********************************************************************
//**                                                                   **
//**    ----------      HUITIEME DE FINALE:    -----------------	   **
//**																   **
//***********************************************************************
//*********************************************************************** 
 
 
function huitieme2019($comite, $division, $annee, $bdd)
{

global $bdcomite_pfterr_e, $bdcomite_pfterr_r, $bdcomiteClub;


choixBdd($comite);

//*********************************************************************
//*****  Traitement des Equipes et des résultats des huitièmes ********
//*********************************************************************
	
// huitièmes de finale
$debut = 8001;$fin = 8017;
for ($i=$debut; $i<$fin; $i++) 	{global ${"clubA".$i}, ${"A".$i};}
traitementHuitieme(8001, 8017);


/*
	$tabEquipes = array();
	$tabScores = array() ;
	$tabId = array() ;
	$debut =8001;
	$fin=8017;

	for ($i=$debut; $i<$fin; $i++)
	{
	 //	Equipes
	 global ${"clubA".($i)};
	 global ${"id".($i)};
   	 $equipes = "clubA".''.$i;
	 
	 $reponse = $bdd->query("SELECT  $bdcomiteClub.nom, $bdcomite_pfterr_e.$equipes, $bdcomiteClub.id
				FROM $bdcomiteClub
				INNER JOIN $bdcomite_pfterr_e 
				ON $bdcomite_pfterr_e.$equipes=$bdcomiteClub.id
				WHERE  $bdcomite_pfterr_e.division=$division 
				AND $bdcomite_pfterr_e.annee=$annee"); 
							while ($row = $reponse->fetch() )
								{ 
								 $tabEquipes[] = $row[0];
								 $tabId[] = $row[2];
								}
		
	 if (isset ($tabEquipes[$i-$debut])) ${"clubA".($i)} = $tabEquipes[$i-$debut]; else ${"clubA".($i)}='-'; 	
	 if (isset ($tabId[$i-$debut])) ${"id".($i)} = $tabId[$i-$debut]; else ${"id".($i)}='-';

	 // Scores

*/
	
/*
	$debut =8001;
	$fin=8017;
	for ($i=$debut; $i<$fin; $i++)
	{
	 global ${"A".($i)};
	 $scores = "A".''.$i;

	 $reponse = $bdd->query("SELECT $scores
				FROM $bdcomite_pfterr_r
				WHERE  division = $division and annee = $annee"); 
				while ($row = $reponse->fetch() )
						{ $tabScores[] = $row[0];}
					
 	 if (isset ($tabScores[$i-$debut])) ${"A".($i)} = $tabScores[$i-$debut]; else ${"A".($i)}='-'; 
	}	
*/
	traitementScores ($debut,$fin, $bdd);
	
//***************************************************										
//*****  Traitement des résultats des quarts ********											
//***************************************************	

	//$tabScores = array() ;
	
	$debut = 4001;$fin= 4009;
	for ($i=$debut; $i<$fin; $i++) {global ${"clubA".$i}, ${"A".$i};}
	traitementHuitieme (4001, 4009);

	/*
	for ($i=$debut; $i<$fin; $i++)
	{	
	 //Equipes
	 global ${"clubA".($i)};
	 global ${"id".($i)};
	 if (isset (${"clubA".($i)})) ${"clubA".($i)} = ${"clubA".($i)}; else ${"clubA".($i)}='-'; 	
	
	 //Scores
	 $debut =4001;
	$fin=4009;
	 

     global ${"A".($i)};
	 
	 $scores = "A".''.$i;									
											
	 $reponse = $bdd->query("SELECT $scores
				FROM $bdcomite_pfterr_r
				WHERE  division=$division and annee=$annee"); 
				while ($row = $reponse->fetch() )
						{ $tabScores[] = $row[0];	}										
											
	 if (isset ($tabScores[$i-$debut])) ${"A".($i)} = $tabScores[$i-$debut]; else ${"A".($i)}='-'; 
											
	}											
	*/							
//**********************************************************************										
//*****  Traitement des équipes et des résultats des Demi finale********											
//**********************************************************************


	$debut = 2001;$fin = 2005;
	for ($i=$debut; $i<$fin; $i++) {global ${"clubA".$i}, ${"A".$i};}
	traitementHuitieme ($debut, $fin);

	global $clubA4001, $clubA4002;


/*
	$tabScores = array() ;
	
	
	
	 //Equipes
	 global ${"clubA".($i)};
	 global ${"id".($i)};
	 if (isset (${"clubA".($i)})) ${"clubA".($i)} = ${"clubA".($i)}; else ${"clubA".($i)}='-'; 	
	*/
	
for ($i=2001; $i<2005; $i++)
	{
	 //Scores 
     global ${"A".($i)};
	 $scores = "A".''.$i;											


	 $reponse = $bdd->query("SELECT $scores
				FROM $bdcomite_pfterr_r
				WHERE  division = $division and annee = $annee"); 
				while ($row = $reponse->fetch() )
						{ $tabScores[] = $row[0];}
  
   if (isset ($tabScores[$i-$debut])) ${"A".($i)} = $tabScores[$i-$debut]; else ${"A".($i)}='-'; 
	// if (isset ($tabScores[$i-$debut])) ${"A".($i)} = $tabScores[$i-$debut]; else ${"A".($i)}='-'; 									
	} 
	 	 
//**********************************************************************										
//*****  Traitement des équipes et des résultats dea la finale********											
//**********************************************************************	 
	 
	 global $clubA1001; global $clubA1002;										
	

	if (isset($clubA1001)) $clubA1001 = $clubA1001; else $clubA1001='-'; 
	if (isset($clubA1002)) $clubA1002 = $clubA1002; else $clubA1002='-';
	
	 global $A1001;global $A1002;	
	 
	 $tabScores = array() ;
	
	  $reponse = $bdd->query("SELECT A1001, A1002
				FROM $bdcomite_pfterr_r
				WHERE  division=$division and annee=$annee"); 
				while ($row = $reponse->fetch() )
						{ 
						$A1001 = $row[0];
						$A1002 = $row[1];
						}	

	if (isset($A1001)) $A1001 = $A1001; else $A1001='-'; 
    if (isset($A1002)) $A1002 = $A1002; else $A1002='-'; 				

//************************************************************************************
//*******************    Récupérations des Scores	**********************************
//************************************************************************************


if (is_numeric($A8001) && is_numeric($A8001))
{if ($A8001 + $A8002 > 0) { if ($A8001>$A8002)	{$clubA4001=$clubA8001;	} else	{$clubA4001=$clubA8002; }}	else{ $A8001="-"; $A8002="-"; $clubA4001="-";}}
if (is_numeric($A8003) && is_numeric($A8004))
{if ($A8003 + $A8004 > 0) { if ($A8003>$A8004)	{$clubA4002=$clubA8003;	} else	{$clubA4002=$clubA8004;	}}	else{ $A8003="-"; $A8004="-"; $clubA4002="-";}}
if (is_numeric($A8005) && is_numeric($A8006))
{if ($A8005 + $A8006 > 0) { if ($A8005>$A8006)	{$clubA4003=$clubA8005;	} else	{$clubA4003=$clubA8006;	}}	else{ $A8005="-"; $A8006="-"; $clubA4003="-";}}
if (is_numeric($A8007) && is_numeric($A8008))
{if ($A8007 + $A8008 > 0) { if ($A8007>$A8008)	{$clubA4004=$clubA8007;	} else	{$clubA4004=$clubA8008;	}}	else{ $A8007="-"; $A8008="-"; $clubA4004="-";}}
if (is_numeric($A8009) && is_numeric($A8010))
{if ($A8009 + $A8010 > 0) { if ($A8009>$A8010)	{$clubA4005=$clubA8009; } else	{$clubA4005=$clubA8010;	}}	else{ $A8009="-"; $A8010="-"; $clubA4005="-";}}
if (is_numeric($A8011) && is_numeric($A8012))
{if ($A8011 + $A8012 > 0) { if ($A8011>$A8012)	{$clubA4006=$clubA8011;	} else	{$clubA4006=$clubA8012;	}}	else{ $A8011="-"; $A8012="-"; $clubA4006="-";}}
if (is_numeric($A8013) && is_numeric($A8014))
{if ($A8013 + $A8014 > 0) { if ($A8013>$A8014)	{$clubA4007=$clubA8013;	} else	{$clubA4007=$clubA8014;	}}	else{ $A8013="-"; $A8014="-"; $clubA4007="-";}}
if (is_numeric($A8015) && is_numeric($A8016))
{if ($A8015 + $A8016 > 0) { if ($A8015>$A8016)	{$clubA4008=$clubA8015;	} else	{$clubA4008=$clubA8016;	}}	else{ $A8015="-"; $A8016="-"; $clubA4008="-";}}


if (is_numeric($A4001) && is_numeric($A4001))
{if ($A4001 + $A4002 > 0) {	if ($A4001>$A4002)	{$clubA2001=$clubA4001;	} else	{$clubA2001=$clubA4002;	}}	else{ $A4001="-"; $A4002="-"; $clubA2001="-";}}
if (is_numeric($A4003) && is_numeric($A4004))
{if ($A4003 + $A4004 > 0) {	if ($A4003>$A4004)	{$clubA2002=$clubA4003;	} else	{$clubA2002=$clubA4004;	}}	else{ $A4003="-"; $A4004="-"; $clubA2002="-";}}
if (is_numeric($A4005) && is_numeric($A4006))
{if ($A4005 + $A4006 > 0) {	if ($A4005>$A4006)	{$clubA2003=$clubA4005;	} else	{$clubA2003=$clubA4006; }}	else{ $A4005="-"; $A4006="-"; $clubA2003="-";}}
if (is_numeric($A4007) && is_numeric($A4008))
{if ($A4007 + $A4008 > 0) {	if ($A4007>$A4008)	{$clubA2004=$clubA4007;	} else	{$clubA2004=$clubA4008;	}}	else{ $A4007="-"; $A4008="-"; $clubA2004="-";}}

if (is_numeric($A2001) && is_numeric($A2002))
{if ($A2001 + $A2002 > 0) {	if ($A2001>$A2002)	{$clubA1001=$clubA2001;	} else	{$clubA1001=$clubA2002;	}}	else{ $A2001="-"; $A2002="-"; $clubA1001="-";}}
if (is_numeric($A2003) && is_numeric($A2004))
{if ($A2003 + $A2004 > 0) {	if ($A2003>$A2004)	{$clubA1002=$clubA2003;	} else	{$clubA1002=$clubA2004; }}	else{ $A2003="-"; $A2004="-"; $clubA1002="-";}}

if (is_numeric($A1001) && is_numeric($A1002))
{if ($A1001 + $A1002 == 0) {$A1001 ="-";  $A1002 ="-";}}	


}

//***********************************************************************
//***********************************************************************
//**                                                                   **
//**    ----------      HUITIEME DE FINALE Aller Retour:   -------	   **
//**																   **
//***********************************************************************
//*********************************************************************** 
 
function huitiemeAR2019 ($comite, $division, $annee, $bdd)
{

	if ($comite == "al" or $comite == "n" or $comite == "pr" or $comite == "idf")
		$bddComite = "idf";
	
	elseif ($comite == "bg" or $comite == "br" or $comite == "ce" or $comite == "fl" or $comite == "ce" or $comite == "pl")
		$bddComite = "pl";	
	else 
		$bddComite = $comite;

	$bdcomite_pfterr_e = "php".''.$bddComite.''."_pfterr_e";
	$bdcomite_pfterr_r = "php".''.$bddComite.''."_pfterr_r";
	$bdcomiteClub = "php".''.$bddComite.''."_clubs";
		
//************************************************************************
//*****  Traitement des Equipes et des résultats des 8me de finale********
//************************************************************************

	$tabEquipes = array();
	$tabScores = array() ;
	$tabScores2 = array() ;
	$tabScores3 = array() ;
	$tabScores4 = array() ;
	
	$debut=8001;
	$fin=8017; 
	
	for ($i=$debut; $i<$fin; $i++)
	{
	global ${"clubA".($i)};// Equipes
	global ${"Pts".($i)}; // Points terrain
   	$equipes = "clubA".''.$i;
	
	$reponse = $bdd->query("
				SELECT  $bdcomiteClub.nom, $bdcomite_pfterr_e.$equipes
				FROM $bdcomiteClub
				INNER JOIN $bdcomite_pfterr_e ON $bdcomite_pfterr_e.$equipes=$bdcomiteClub.id
				WHERE  $bdcomite_pfterr_e.division=$division and $bdcomite_pfterr_e.annee=$annee"); 
							
				while ($row = $reponse->fetch() )
					{ $tabEquipes[] = $row[0];}
									
	if (isset ($tabEquipes[$i-$debut])) ${"clubA".($i)} = $tabEquipes[$i-$debut]; else ${"clubA".($i)}='-'; 							
	
	//echo "Equipes : ".${"clubA".($i)};

	
	// Scores ALLER (Pts terrain)
	global ${"A".($i)};
	$scores = "A".''.$i;
	$division4 = $division + 200;
	 
	$reponse = $bdd->query("SELECT $scores
				FROM $bdcomite_pfterr_r
				WHERE  division=$division and annee=$annee"); 
			
				while ($row = $reponse->fetch() )
						{ $tabScores[] = $row[0];}
					
 	if (isset ($tabScores[$i-$debut])) ${"A".($i)} = $tabScores[$i-$debut]; else ${"A".($i)}='0'; 
	
	//echo ${"A".($i)};
	 

	 // Scores RETOUR (Pts terrain)
	
	global ${"R".($i)};
	$scores = "A".''.$i;
	
	$reponse = $bdd->query("SELECT $scores
				FROM $bdcomite_pfterr_r
				WHERE  division=$division4 and annee=$annee"); 
				
				while ($row = $reponse->fetch() )
						{ $tabScores2[] = $row[0];}
					
 	 if (isset ($tabScores2[$i-$debut])) ${"R".($i)} = $tabScores2[$i-$debut]; else ${"R".($i)}='0'; 
	// echo ${"R".($i)};
	
	}	

// // Scores ALLER (Goalverage)	

	$tabEquipes = array();
	$tabScores = array() ;
	
	$debut=1601;
	$fin=1617; 
	
	for ($i=$debut; $i<$fin; $i++)
	{
	 global ${"A".($i)}; 
	 global ${"GA".($i)};// somme du goal average 
	 $scores = "A".''.$i;
	 $reponse = $bdd->query("SELECT $scores
				FROM $bdcomite_pfterr_r
				WHERE  division=$division and annee=$annee"); 
				while ($row = $reponse->fetch() )
						{ $tabScores3[] = $row[0];}
			
	 if (isset ($tabScores3[$i-$debut])) ${"A".($i)} = $tabScores3[$i-$debut]; else ${"A".($i)}='0'; 						
		//  echo ${"A".($i)};
	 
	 
	 // Scores RETOUR (Goalverage)
	 
	 global ${"R".($i)};
	 $scores = "A".''.$i;
	
	 $reponse = $bdd->query("SELECT $scores
				FROM $bdcomite_pfterr_r
				WHERE  division='$division4' and annee=$annee"); 
				while ($row = $reponse->fetch() )
						{ $tabScores4[] = $row[0];}
					
 	 if (isset ($tabScores4[$i-$debut])) ${"R".($i)} = $tabScores4[$i-$debut]; else ${"R".($i)}='0'; 
	  //echo ${"R".($i)};
	}	

//***************************************************										
//*****  Traitement des résultats des quarts ********											
//***************************************************	

	$tabScores = array() ;
	
	for ($i=4001; $i<4009; $i++)
	{
	
	 //Equipes
	 global ${"clubA".($i)};
	 if (isset (${"clubA".($i)})) ${"clubA".($i)} = ${"clubA".($i)}; else ${"clubA".($i)}='-'; 	
	
	 //Scores 
     global ${"A".($i)};
	 $scores = "A".''.$i;									
											
	 $reponse = $bdd->query("SELECT $scores
				FROM $bdcomite_pfterr_r
				WHERE  division=$division and annee=$annee"); 
				while ($row = $reponse->fetch() )
						{ $tabScores[] = $row[0];}										
											
	 if (isset ($tabScores[$i-4001])) ${"A".($i)} = $tabScores[$i-4001]; else ${"A".($i)}='-'; 										
	}											
											
// //**********************************************************************										
// //*****  Traitement des équipes et des résultats des Demi finale********											
// //**********************************************************************

	$tabScores = array() ;
	
	for ($i=2001; $i<2005; $i++)
	{
	
	 //Equipes
	 global ${"clubA".($i)};
	 if (isset (${"clubA".($i)})) ${"clubA".($i)} = ${"clubA".($i)}; else ${"clubA".($i)}='-'; 	
	
	//Scores 
     global ${"A".($i)};
	 $scores = "A".''.$i;											

	 $reponse = $bdd->query("SELECT $scores
				FROM $bdcomite_pfterr_r
				WHERE  division=$division and annee=$annee"); 
				while ($row = $reponse->fetch() )
						{ $tabScores[] = $row[0];}

	 if (isset ($tabScores[$i-2001])) ${"A".($i)} = $tabScores[$i-2001]; else ${"A".($i)}='-'; 
											
	} 
	 
	 
// //**********************************************************************										
// //*****  Traitement des équipes et des résultats de la finale********											
// //**********************************************************************	 
	 
	 global $clubA1001;global $clubA1002;										
	 if (isset ($clubA1001)) $clubA1001 = $clubA1001; else $clubA1001='-'; 
	 if (isset ($clubA1002)) $clubA1002 = $clubA1002; else $clubA1002='-';
	
	 global $A1001;global $A1002;	
	 if (isset ($A1001)) $A1001 = $A1001; else $A1001='-'; 
     if (isset ($A1002)) $A1002 = $A1002; else $A1002='-'; 

	 $tabScores = array() ;
	
	  $reponse = $bdd->query("SELECT A1001, A1002
				FROM $bdcomite_pfterr_r
				WHERE  division=$division and annee=$annee"); 
				while ($row = $reponse->fetch() )
						{ 
						$A1001 = $row[0];
						$A1002 = $row[1];
						}		
	
		
// //************************************************************************************
// //*******************    Récupérations des Scores	**********************************
// //************************************************************************************


// // Traitement des résultats des 8me
for ($i=8001; $i<8017; $i++) {

	
	${"Pts".$i} = ${"A".$i} + ${"R".$i};
	//${"Pts".$i} = ${"A".$i};

}

for ($i=1601; $i<1617; $i++) {
//	${"GA".$i} = ${"A".$i};

	${"GA".$i} = ${"A".$i} + ${"R".$i};

}

if ($Pts8001+$Pts8002 > 0)	{if ($Pts8001>$Pts8002)	{$clubA4002=$clubA8001;	} else	{$club4002=$clubA8002;	}}	else {	$Pts8001="-";	$Pts8002="-";	$quart1="-";}
if ($Pts8003+$Pts8004 > 0)	{if ($Pts8001>$Pts8002)	{$clubA4002=$clubA8001;	} else	{$club4002=$clubA8002;	}}	else {	$Pts8003="-";	$Pts8004="-";	$quart1="-";}
if ($Pts8005+$Pts8006 > 0)	{if ($Pts8001>$Pts8002)	{$clubA4002=$clubA8001;	} else	{$club4002=$clubA8002;	}}	else {	$Pts8005="-";	$Pts8006="-";	$quart1="-";}
if ($Pts8007+$Pts8008 > 0)	{if ($Pts8001>$Pts8002)	{$clubA4002=$clubA8001;	} else	{$club4002=$clubA8002;	}}	else {	$Pts8007="-";	$Pts8008="-";	$quart1="-";}

if ($Pts8009+$Pts8010 > 0)	{if ($Pts8001>$Pts8002)	{$clubA4002=$clubA8001;	} else	{$club4002=$clubA8002;	}}	else {	$Pts8009="-";	$Pts8010="-";	$quart1="-";}
if ($Pts8011+$Pts8012 > 0)	{if ($Pts8001>$Pts8002)	{$clubA4002=$clubA8001;	} else	{$club4002=$clubA8002;	}}	else {	$Pts8011="-";	$Pts8012="-";	$quart1="-";}
if ($Pts8013+$Pts8014 > 0)	{if ($Pts8001>$Pts8002)	{$clubA4002=$clubA8001;	} else	{$club4002=$clubA8002;	}}	else {	$Pts8013="-";	$Pts8014="-";	$quart1="-";}
if ($Pts8015+$Pts8016 > 0)	{if ($Pts8001>$Pts8002)	{$clubA4002=$clubA8001;	} else	{$club4002=$clubA8002;	}}	else {	$Pts8015="-";	$Pts8016="-";	$quart1="-";}


if ($GA1601+$GA1602 > 0)	{if ($Pts1601>$Pts1602)	{$clubA4002=$clubA1601;	} else	{$club4002=$clubA1602;	}}	else {	$GA1601="-";	$GA1602="-";	$quart1="-";}
if ($GA1603+$GA1604 > 0)	{if ($Pts1601>$Pts1602)	{$clubA4002=$clubA1601;	} else	{$club4002=$clubA1602;	}}	else {	$GA1603="-";	$GA1604="-";	$quart1="-";}
if ($GA1605+$GA1606 > 0)	{if ($Pts1601>$Pts1602)	{$clubA4002=$clubA1601;	} else	{$club4002=$clubA1602;	}}	else {	$GA1605="-";	$GA1606="-";	$quart1="-";}
if ($GA1607+$GA1608 > 0)	{if ($Pts1601>$Pts1602)	{$clubA4002=$clubA1601;	} else	{$club4002=$clubA1602;	}}	else {	$GA1607="-";	$GA1608="-";	$quart1="-";}

if ($GA1609+$GA1610 > 0)	{if ($Pts1601>$Pts1602)	{$clubA4002=$clubA1601;	} else	{$club4002=$clubA1602;	}}	else {	$GA1609="-";	$GA1610="-";	$quart1="-";}
if ($GA1611+$GA1612 > 0)	{if ($Pts1601>$Pts1602)	{$clubA4002=$clubA1601;	} else	{$club4002=$clubA1602;	}}	else {	$GA1611="-";	$GA1612="-";	$quart1="-";}
if ($GA1613+$GA1614 > 0)	{if ($Pts1601>$Pts1602)	{$clubA4002=$clubA1601;	} else	{$club4002=$clubA1602;	}}	else {	$GA1613="-";	$GA1614="-";	$quart1="-";}
if ($GA1615+$GA1616 > 0)	{if ($Pts1601>$Pts1602)	{$clubA4002=$clubA1601;	} else	{$club4002=$clubA1602;	}}	else {	$GA1615="-";	$GA1616="-";	$quart1="-";}









/*

if (is_numeric($A1603)+is_numeric($A1604) > 0)	{if ($A1603>$A1604)	{$clubA1606=$clubA1603;	} else  {$clubA8006=$clubA1604; }}  else {  $A1603="-";	$A1604="-";	$quart1="-";}
if (is_numeric($A1605)+is_numeric($A1606) > 0)	{if ($A1605>$A1606)	{$clubA8010=$clubA1605;	} else  {$clubA8010=$clubA1606; }}  else {  $A1605="-";	$A1606="-";	$quart1="-";}
if (is_numeric($A1607)+is_numeric($A1608) > 0)	{if ($A1607>$A1608)	{$clubA8014=$clubA1607;	} else  {$clubA8014=$clubA1608; }}  else {  $A1607="-";	$A1608="-";	$quart1="-";}
*/

/*
if (is_numeric($A8001) and is_numeric($R8001)){$AR8001 = $A8001 + $R8001;}else{$AR8001 = $A8001;}
if (is_numeric($A8002) and is_numeric($R8002)){$A8R002 = $A8002 + $R8002;}else{$AR8002 = $A8002;}
if (is_numeric($A8003) and is_numeric($R8003)){$A8R003 = $A8003 + $R8003;}else{$AR8003 = $A8003;}
if (is_numeric($A8004) and is_numeric($R8004)){$A8R004 = $A8004 + $R8004;}else{$AR8004 = $A8004;}
if (is_numeric($A8005) and is_numeric($R8005)){$A8R005 = $A8005 + $R8005;}else{$AR8005 = $A8005;}
if (is_numeric($A8006) and is_numeric($R8006)){$A8R006 = $A8006 + $R8006;}else{$AR8006 = $A8006;}
if (is_numeric($A8007) and is_numeric($R8007)){$A8R007 = $A8007 + $R8007;}else{$AR8007 = $A8007;}
if (is_numeric($A8008) and is_numeric($R8008)){$A8R008 = $A8008 + $R8008;}else{$AR8008 = $A8008;}

if (is_numeric($A8009) and is_numeric($R8009)){$A8009 = $A8009 + $R8009;}
if (is_numeric($A8010) and is_numeric($R8010)){$A8010 = $A8010 + $R8010;}
if (is_numeric($A8011) and is_numeric($R8011)){$A8011 = $A8011 + $R8011;}
if (is_numeric($A8012) and is_numeric($R8012)){$A8012 = $A8012 + $R8012;}
if (is_numeric($A8013) and is_numeric($R8013)){$A8013 = $A8013 + $R8013;}
if (is_numeric($A8014) and is_numeric($R8014)){$A8014 = $A8014 + $R8014;}
if (is_numeric($A8015) and is_numeric($R8015)){$A8015 = $A8015 + $R8015;}
if (is_numeric($A8016) and is_numeric($R8016)){$A8016 = $A8016 + $R8016;}

if (is_numeric($A1601) and is_numeric($R1601)){$A1601 = $A1601 + $R1601;} else {$A1601 = $A1601;}
if (is_numeric($A1602) and is_numeric($R1602)){$A1602 = $A1602 + $R1602;} else {$A1602 = $A1602;}
if (is_numeric($A1603) and is_numeric($R1603)){$A1603 = $A1603 + $R1603;} else {$A1603 = $A1603;}
if (is_numeric($A1604) and is_numeric($R1604)){$A1604 = $A1604 + $R1604;} else {$A1604 = $A1604;}
if (is_numeric($A1605) and is_numeric($R1605)){$A1605 = $A1605 + $R1605;} else {$A1605 = $A1605;}
if (is_numeric($A1606) and is_numeric($R1606)){$A1606 = $A1606 + $R1606;} else {$A1606 = $A1606;}
if (is_numeric($A1607) and is_numeric($R1607)){$A1607 = $A1607 + $R1607;} else {$A1607 = $A1607;}
if (is_numeric($A1608) and is_numeric($R1608)){$A1608 = $A1608 + $R1608;} else {$A1608 = $A1608;}

if (is_numeric($A1609) and is_numeric($R1609)){$A1609 = $A1609 + $R1609;} else {$A1609 = $A1609;}
if (is_numeric($A1610) and is_numeric($R1610)){$A1610 = $A1610 + $R1610;} else {$A1610 = $A1610;}
if (is_numeric($A1611) and is_numeric($R1611)){$A1611 = $A1611 + $R1611;} else {$A1611 = $A1611;}
if (is_numeric($A1612) and is_numeric($R1612)){$A1612 = $A1612 + $R1612;} else {$A1612 = $A1612;}
if (is_numeric($A1613) and is_numeric($R1613)){$A1613 = $A1613 + $R1613;} else {$A1613 = $A1613;}
if (is_numeric($A1614) and is_numeric($R1614)){$A1614 = $A1614 + $R1614;} else {$A1614 = $A1614;}
if (is_numeric($A1615) and is_numeric($R1615)){$A1615 = $A1615 + $R1615;} else {$A1615 = $A1615;}
if (is_numeric($A1616) and is_numeric($R1616)){$A1616 = $A1616 + $R1616;} else {$A1616 = $A1616;}


if (is_numeric($Pts8001)+ is_numeric($Pts8002) == 0)	{$Pts8001 = "-"; $Pts8002 = "-"; $A1601 = "-" ;$A1602 = "-";	}	
if (is_numeric($Pts8003)+ is_numeric($Pts8004) == 0)	{$Pts8003 = "-"; $Pts8004 = "-"; $A1603 = "-" ;$A1604 = "-";	}	
if (is_numeric($Pts8005)+ is_numeric($Pts8006) == 0)	{$Pts8005 = "-"; $Pts8006 = "-"; $A1605 = "-" ;$A1606 = "-";	}	
if (is_numeric($Pts8007)+ is_numeric($Pts8008) == 0)	{$Pts8007 = "-"; $Pts8008 = "-"; $A1607 = "-" ;$A1608 = "-";	}
if (is_numeric($Pts8009)+ is_numeric($Pts8010) == 0)	{$Pts8009 = "-"; $Pts8010 = "-"; $A1609 = "-" ;$A1610 = "-";	}	
if (is_numeric($Pts8011)+ is_numeric($Pts8012) == 0)	{$Pts8011 = "-"; $Pts8012 = "-"; $A1611 = "-" ;$A1612 = "-";	}	
if (is_numeric($Pts8013)+ is_numeric($Pts8014) == 0)	{$Pts8013 = "-"; $Pts8014 = "-"; $A1613 = "-" ;$A1614 = "-";	}	
if (is_numeric($Pts8015)+ is_numeric($Pts8016) == 0)	{$Pts8015 = "-"; $Pts8016 = "-"; $A1615 = "-" ;$A1616 = "-";	}	
*/
/*
if ($Pts8001+$Pts8002 == 0){$Pts8001="-"; $Pts8002="-"; $GA1601="-"; $GA1602="-";}else{if ($Pts8001+$Pts8002 > 6) {if($Pts8001>$Pts8002 or ($Pts8001 == $Pts8002 and $GA1601 > $GA1602))	{$clubA4001=$clubA8001;	}else{$clubA4001=$clubA8002;	}}	else {$clubA4001="-";}}
if ($Pts8003+$Pts8004 == 0){$Pts8003="-"; $Pts8004="-"; $GA1603="-"; $GA1604="-";}else{if ($Pts8003+$Pts8004 > 6) {if($Pts8003>$Pts8004 or ($Pts8003 == $Pts8004 and $GA1603 > $GA1604))	{$clubA4002=$clubA8003;	}else{$clubA4002=$clubA8004;	}}	else {$clubA4002="-";}}
if ($Pts8005+$Pts8006 == 0){$Pts8005="-"; $Pts8006="-"; $GA1605="-"; $GA1606="-";}else{if ($Pts8005+$Pts8006 > 6) {if($Pts8005>$Pts8006 or ($Pts8005 == $Pts8006 and $GA1605 > $GA1606))	{$clubA4003=$clubA8005;	}else{$clubA4003=$clubA8006;	}}	else {$clubA4003="-";}}
if ($Pts8007+$Pts8008 == 0){$Pts8007="-"; $Pts8008="-"; $GA1607="-"; $GA1608="-";}else{if ($Pts8007+$Pts8008 > 6) {if($Pts8007>$Pts8008 or ($Pts8007 == $Pts8008 and $GA1607 > $GA1608))	{$clubA4004=$clubA8007;	}else{$clubA4004=$clubA8008;	}}	else {$clubA4004="-";}}

if ($Pts8009+$Pts8010 == 0){$Pts8009="-"; $Pts8010="-"; $GA1609="-"; $GA1610="-";}else{if ($Pts8009+$Pts8010 > 6) {if($Pts8009>$Pts8010 or ($Pts8009 == $Pts8010 and $GA1609 > $GA1610))	{$clubA4005=$clubA8009;	}else{$clubA4005=$clubA8010;	}}	else {$clubA4005="-";}}
if ($Pts8011+$Pts8012 == 0){$Pts8011="-"; $Pts8012="-"; $GA1611="-"; $GA1612="-";}else{if ($Pts8011+$Pts8012 > 6) {if($Pts8011>$Pts8012 or ($Pts8011 == $Pts8012 and $GA1611 > $GA1612))	{$clubA4006=$clubA8011;	}else{$clubA4006=$clubA8012;	}}	else {$clubA4006="-";}}
if ($Pts8013+$Pts8014 == 0){$Pts8013="-"; $Pts8014="-"; $GA1613="-"; $GA1614="-";}else{if ($Pts8013+$Pts8014 > 6) {if($Pts8013>$Pts8014 or ($Pts8013 == $Pts8014 and $GA1613 > $GA1614))	{$clubA4007=$clubA8013;	}else{$clubA4007=$clubA8014;	}}	else {$clubA4007="-";}}
if ($Pts8015+$Pts8016 == 0){$Pts8015="-"; $Pts8016="-"; $GA1615="-"; $GA1616="-";}else{if ($Pts8015+$Pts8016 > 6) {if($Pts8015>$Pts8016 or ($Pts8015 == $Pts8016 and $GA1615 > $GA1616))	{$clubA4008=$clubA8015;	}else{$clubA4008=$clubA8016;	}}	else {$clubA4008="-";}}



if ($Pts8003+$Pts8004 == 0){
if ($Pts8003+$Pts8004 > 6)	{	if ($Pts8003>$Pts8004 or ($Pts8003 == $Pts8004 and $GA1603 > $GA1604))	{$clubA4002=$clubA8003;	} else	{$clubA4002=$clubA8004;	}}}	
if ($Pts8005+$Pts8006 == 0){
if ($Pts8005+$Pts8006 > 6)	{	if ($Pts8005>$Pts8006 or ($Pts8005 == $Pts8006 and $GA1605 > $GA1606))	{$clubA4003=$clubA8005;	} else	{$clubA4003=$clubA8006;	}}}	
if ($Pts8007+$Pts8008 == 0){
if ($Pts8007+$Pts8008 > 6)	{	if ($Pts8007>$Pts8008 or ($Pts8007 == $Pts8008 and $GA1607 > $GA1608))	{$clubA4004=$clubA8007;	} else	{$clubA4004=$clubA8008;	}}}	
if ($Pts8009+$Pts8010 == 0){
if ($Pts8009+$Pts8010 > 6)	{	if ($Pts8009>$Pts8010 or ($Pts8009 == $Pts8010 and $GA1609 > $GA1610))	{$clubA4005=$clubA8009;	} else	{$clubA4005=$clubA8010;	}}}	
if ($Pts8011+$Pts8012 = 0){
if ($Pts8011+$Pts8012 > 6)	{	if ($Pts8011>$Pts8012 or ($Pts8011 == $Pts8012 and $GA1611 > $GA1612))	{$clubA4006=$clubA8011;	} else	{$clubA4006=$clubA8012;	}}}	
if ($Pts8013+$Pts8014 == 0){
if ($Pts8013+$Pts8014 > 6)	{	if ($Pts8013>$Pts8014 or ($Pts8013 == $Pts8014 and $GA1613 > $GA1614))	{$clubA4007=$clubA8013;	} else	{$clubA4007=$clubA8014;	}}}	
if ($Pts8015+$Pts8016 == 0){
if ($Pts8015+$Pts8016 > 6)	{	if ($Pts8015>$Pts8016 or ($Pts8015 == $Pts8016 and $GA1615 > $GA1616))	{$clubA4008=$clubA8015;	} else	{$clubA4008=$clubA8016;	}}}	
*/
/*
if ($A4001 + $A4002 > 0)	{if ( $A4001>$A4002){$clubA2001=$clubA4001;	}	else	{$clubA2001=$clubA4002;	}}else{	$A4001="-"; $A4002="-";}
if ($A4003 + $A4004 > 0)	{if ($A4003>$A4004)	{$clubA2002=$clubA4003;	} else	{$clubA2002=$clubA4004;	}}	else{	$A4003="-"; $A4004="-";}
if ($A4005 + $A4006 > 0)	{if ($A4005>$A4006)	{$clubA2003=$clubA4005;	} else	{$clubA2003=$clubA4006;	}}	else{	$A4005="-"; $A4006="-";}
if ($A4007 + $A4008 > 0)	{if ($A4007>$A4008)	{$clubA2004=$clubA4007;	} else	{$clubA2004=$clubA4008;	}}	else{	$A4007="-"; $A4008="-";}
*/
//if ($A2001+$A2002 > 0)	{if ($A2001>$A2002)	{$clubA1001=$clubA2001;	} else	{$clubA1001=$clubA2002;	}}	else{	$A2001="-"; $A2002="-";}
//if ($A2003+$A2004 > 0)	{if ($A2003>$A2004)	{$clubA1002=$clubA2003;	} else	{$clubA1002=$clubA2004;	}}	else{	$A2003="-"; $A2004="-";}

//if ($A1001+$A1002 > 0)	{if ($A2001>$A2002)	{$clubA1001=$clubA2001;	} else	{$clubA1001=$clubA2002;	}}	else{	$A1001="-";	$A1002="-";	}			

//****** traitement résultats 8me de finale  *********	
for ($i= 8001, $j = 8002, $k= 4001; $i<8016, $j <8017, $k< 4009; $i=$i+2, $j=$j+2, $k++)	
{if (is_numeric(${"A".$i})+is_numeric(${"A".$j}) > 0) {if (${"A".$i}>${"A".$j})	{${"clubA".$k}=${"clubA".$i};	} else {${"clubA".$k}=${"clubA".$j};	}}	else {	${"A".$i}="-";	${"A".$j}="-";	${"clubA".$k}="-";}}	


//****** traitement résultats 4me de finale  *********	
for ($i= 4001, $j = 4002, $k= 2001; $i<4008, $j <4009, $k< 2005; $i=$i+2, $j=$j+2, $k++)	
{if (is_numeric(${"A".$i})+is_numeric(${"A".$j}) > 0) {if (${"A".$i}>${"A".$j})	{${"clubA".$k}=${"clubA".$i};	} else {${"clubA".$k}=${"clubA".$j};	}}	else {	${"A".$i}="-";	${"A".$j}="-";	${"clubA".$k}="-";}}	

//****** traitement résultats demi finale  *********	
if (is_numeric($A2001)+is_numeric($A2002) > 0)	{if ($A2001>$A2002)	{$clubA1001=$clubA2001;	} else	{$clubA1001=$clubA2002;	}}	else{	$A2001="-";	$A2002="-";	$clubA1001="-";}
if (is_numeric($A2003)+is_numeric($A2004) > 0)	{if ($A2003>$A2004)	{$clubA1002=$clubA2003;	} else	{$clubA1002=$clubA2004;	}}	else{	$A2003="-";	$A2004="-";	$clubA1002="-";}

//****** traitement résultats finale  *********
if (is_numeric($A1001)+is_numeric($A1002) > 0)	{if ($A2001>$A2002)	{$clubA1001=$clubA2001;	} else	{$clubA1001=$clubA2002;	}}	else{	$A1001="-";	$A1002="-"; 	$quart1="-";}																		
}
 
//***********************************************************************
//***********************************************************************
//**                                                                   **
//**    ----------      HUITIEME DE FINALE et Barrages  ------------   **
//**																   **
//***********************************************************************
//*********************************************************************** 

function huitiemeEtBarrages2019($comite, $division, $annee, $bdd)
{
	
	if ($comite == "al" or $comite == "n" or $comite == "pr" or $comite == "idf")
		$bddComite = "idf";
	elseif ($comite == "bg" or $comite == "br" or $comite == "ce" or $comite == "fl" or $comite == "ce" or $comite == "pl")
		$bddComite = "pl";	
	else 
		$bddComite = $comite;
		
//echo $bddComite; echo "<br />";

	$bdcomite_pfterr_e = "php".''.$bddComite.''."_pfterr_e";
	$bdcomite_pfterr_r = "php".''.$bddComite.''."_pfterr_r";
	$bdcomiteClub = "php".''.$bddComite.''."_clubs";
//	$division = $codeLigue + substr($division,-4);	
//echo $division;echo "<br />";	
//echo $bdcomite_pfterr_e;echo "<br />";
//*********************************************************************
//*****  Traitement des Equipes et des r�sultats des Barrages ********
//*********************************************************************
	$tabEquipes = array();
	$tabScores = array() ;

	$debut=1601;
	$fin=1617; 
	
	for ($i=$debut; $i<$fin; $i++)
	{
	 //	Equipes
	 global ${"clubA".($i)};
	 global ${"id".$i};
   	 $equipes = "clubA".''.$i;
	 	
	 $reponse = $bdd->query("SELECT  $bdcomiteClub.nom, $bdcomite_pfterr_e.$equipes, $bdcomiteClub.id
						FROM $bdcomiteClub
						INNER JOIN $bdcomite_pfterr_e ON $bdcomite_pfterr_e.$equipes=$bdcomiteClub.id
						WHERE  $bdcomite_pfterr_e.division=$division and $bdcomite_pfterr_e.annee=$annee"); 
								while ($row = $reponse->fetch() )
									{ 
									 $tabEquipes[] = $row[0];
									 $tabId[] = $row[2];
									}
		
	if (isset ($tabEquipes[$i-$debut])) ${"clubA".($i)} = $tabEquipes[$i-$debut]; else ${"clubA".($i)}='-'; 							
	if (isset ($tabId[$i-$debut])) ${"id".($i)} = $tabId[$i-$debut]; else ${"id".($i)}='-';
										
	// Scores
	 global ${"A".($i)};
	 $scores = "A".''.$i;
	
	  $reponse = $bdd->query("SELECT $scores
				FROM $bdcomite_pfterr_r
				WHERE  division=$division and annee=$annee"); 
				while ($row = $reponse->fetch() )
						{ 
						$tabScores[] = $row[0];
						
						}
 	 if (isset ($tabScores[$i-$debut])) ${"A".($i)} = $tabScores[$i-$debut]; else ${"A".($i)}='-'; 
	}	
	
//************************************************************************
//*****  Traitement des Equipes et des r�sultats des 8me de finale********
//************************************************************************
	$tabEquipes2 = array();
	$tabScores = array() ;
	$tabId2 = array();
	
	$debut=8001;
	$fin=8017; 
	
	for ($i=$debut; $i<$fin; $i++)
	{
	 //	Equipes
	 global ${"clubA".($i)};
	 global ${"id".$i};
   	 $equipes = "clubA".''.$i;
	
	 $reponse = $bdd->query("SELECT  $bdcomiteClub.nom, $bdcomite_pfterr_e.$equipes,$bdcomiteClub.id
				FROM $bdcomiteClub
				INNER JOIN $bdcomite_pfterr_e ON $bdcomite_pfterr_e.$equipes=$bdcomiteClub.id
				WHERE  $bdcomite_pfterr_e.division=$division and $bdcomite_pfterr_e.annee=$annee"); 
							while ($row = $reponse->fetch() )
								{ 
								 $tabEquipes2[] = $row[0];
								 $tabId2[] = $row[2];
								}
		
	 if (isset ($tabEquipes2[$i-$debut])) ${"clubA".($i)} = $tabEquipes2[$i-$debut]; else ${"clubA".($i)}='-'; 							
	 if (isset ($tabId2[$i-$debut])) ${"id".($i)} = $tabId2[$i-$debut]; else ${"id".($i)}='-';

	 global ${"A".($i)};
	 $scores = "A".''.$i;
	
	  $reponse = $bdd->query("SELECT $scores
				FROM $bdcomite_pfterr_r
				WHERE  division=$division and annee=$annee"); 
				while ($row = $reponse->fetch() )
						{$tabScores[] = $row[0];}
					
 	 if (isset ($tabScores[$i-$debut])) ${"A".($i)} = $tabScores[$i-$debut]; else ${"A".($i)}='-'; 
	}	
	
	
//************************************************************************
//*****  Traitement des Equipes et des r�sultats des quarts de finale********
//************************************************************************
	$tabEquipes = array();
	$tabScores = array() ;

	$debut=4001;
	$fin=4009; 
	
	for ($i=$debut; $i<$fin; $i++)
	{

	 //	Equipes
	 global ${"clubA".($i)};
   			
	if (isset (${"clubA".($i)})) ${"clubA".($i)} = ${"clubA".($i)}; else ${"clubA".($i)}='-'; 							
	
											
	// Scores
	 global ${"A".($i)};
	 $scores = "A".''.$i;
	
	 $reponse = $bdd->query("SELECT $scores
				FROM $bdcomite_pfterr_r
				WHERE  division=$division and annee=$annee"); 
				while ($row = $reponse->fetch() )
						{ $tabScores[] = $row[0];}
					
 	 if (isset ($tabScores[$i-$debut])) ${"A".($i)} = $tabScores[$i-$debut]; else ${"A".($i)}='-'; 
	}	
	
//************************************************************************
//*****  Traitement des Equipes et des r�sultats des demi finale********
//************************************************************************
	$tabEquipes = array();
	$tabScores = array() ;

	$debut=2001;
	$fin=2005; 
	
	for ($i=$debut; $i<$fin; $i++)
	{

	 //	Equipes
	 global ${"clubA".($i)};
   			
	 if (isset (${"clubA".($i)})) ${"clubA".($i)} = ${"clubA".($i)}; else ${"clubA".($i)}='-'; 							
											
	// Scores
	 global ${"A".($i)};
	 $scores = "A".''.$i;
	
	  $reponse = $bdd->query("SELECT $scores
				FROM $bdcomite_pfterr_r
				WHERE  division=$division and annee=$annee"); 
				while ($row = $reponse->fetch() )
						{ $tabScores[] = $row[0];}
					
 	 if (isset ($tabScores[$i-$debut])) ${"A".($i)} = $tabScores[$i-$debut]; else ${"A".($i)}='-'; 
	}	
	
//************************************************************************
//*****  Traitement des Equipes et des r�sultats de la finale     ********
//************************************************************************	

	 global $clubA1001;global $clubA1002;
	 
	 if (isset ($clubA1001)) $clubA1001 = $clubA1001; else $clubA1001='-'; 
	 if (isset ($clubA1002)) $clubA1002 = $clubA1002; else $clubA1002='-';
	
	 global $A1001;global $A1002;	

	 $tabScores = array() ;
	
	 $reponse = $bdd->query("SELECT A1001, A1002
				FROM $bdcomite_pfterr_r
				WHERE  division=$division and annee=$annee"); 
				while ($row = $reponse->fetch() )
						{ 
						$A1001 = $row[0];
						$A1002 = $row[1];
						}							
		
//************************************************************************************
//*******************    Récupérations des Scores	**********************************
//************************************************************************************


// Traitement des résultats des barrages et des 8me

if (is_numeric($A1601)+is_numeric($A1602) > 0)	{if ($A1601>$A1602)	{$clubA8002=$clubA1601;	} else	{$clubA8002=$clubA1602;	}}	else {	$A1601="-";	$A1602="-";	$quart1="-";}
if (is_numeric($A1603)+is_numeric($A1604) > 0)	{if ($A1603>$A1604)	{$clubA8006=$clubA1603;	} else  {$clubA8006=$clubA1604; }}  else {  $A1603="-";	$A1604="-";	$quart1="-";}
if (is_numeric($A1605)+is_numeric($A1606) > 0)	{if ($A1605>$A1606)	{$clubA8010=$clubA1605;	} else  {$clubA8010=$clubA1606; }}  else {  $A1605="-";	$A1606="-";	$quart1="-";}
if (is_numeric($A1607)+is_numeric($A1608) > 0)	{if ($A1607>$A1608)	{$clubA8014=$clubA1607;	} else  {$clubA8014=$clubA1608; }}  else {  $A1607="-";	$A1608="-";	$quart1="-";}

//****** traitement résultats 8me de finale  *********	
for ($i= 8001, $j = 8002, $k= 4001; $i<8016, $j <8017, $k< 4009; $i=$i+2, $j=$j+2, $k++)	
{if (is_numeric(${"A".$i})+is_numeric(${"A".$j}) > 0) {if (${"A".$i}>${"A".$j})	{${"clubA".$k}=${"clubA".$i};	} else {${"clubA".$k}=${"clubA".$j};	}}	else {	${"A".$i}="-";	${"A".$j}="-";	${"clubA".$k}="-";}}	

//****** traitement résultats quarts de finale  *********	
for ($i= 4001, $j = 4002, $k= 2001; $i<4008, $j <4009, $k< 2005; $i=$i+2, $j=$j+2, $k++)	
{if (is_numeric(${"A".$i})+is_numeric(${"A".$j}) > 0) {if (${"A".$i}>${"A".$j})	{${"clubA".$k}=${"clubA".$i};	} else {${"clubA".$k}=${"clubA".$j};	}}	else {	${"A".$i}="-";	${"A".$j}="-";	${"clubA".$k}="-";}}	

//****** traitement résultats demi finale  *********	
if (is_numeric($A2001)+is_numeric($A2002) > 0)	{if ($A2001>$A2002)	{$clubA1001=$clubA2001;	} else	{$clubA1001=$clubA2002;	}}	else{	$A2001="-";	$A2002="-";	$clubA1001="-";}
if (is_numeric($A2003)+is_numeric($A2004) > 0)	{if ($A2003>$A2004)	{$clubA1002=$clubA2003;	} else	{$clubA1002=$clubA2004;	}}	else{	$A2003="-";	$A2004="-";	$clubA1002="-";}

//****** traitement résultats finale  *********
if (is_numeric($A1001)+is_numeric($A1002) > 0)	{if ($A2001>$A2002)	{$clubA1001=$clubA2001;	} else	{$clubA1001=$clubA2002;	}}	else{	$A1001="-";	$A1002="-"; 	$quart1="-";}																		
}

//***********************************************************************
//***********************************************************************
//**                                                                   **
//**    ----------           SEIZIEME DE FINALE         ------------   **
//**																   **
//***********************************************************************
//*********************************************************************** 

function seizieme2019 ($comite, $division, $annee, $bdd)
{			
if ($comite == "al" or $comite == "n" or $comite == "pr" or $comite == "idf")
		$bddComite = "idf";
	elseif ($comite == "bg" or $comite == "br" or $comite == "ce" or $comite == "fl" or $comite == "ce" or $comite == "pl")
		$bddComite = "pl";	
	else 
		$bddComite = $comite;

	$bdcomite_pfterr_e = "php".''.$bddComite.''."_pfterr_e";
	$bdcomite_pfterr_r = "php".''.$bddComite.''."_pfterr_r";
	$bdcomiteClub = "php".''.$bddComite.''."_clubs";
	
//***************************************************************************************	 
//           Traitements des équipes et des résultats des 16me de finale	 
//***************************************************************************************

	$tabEquipes = array();
	$tabScores = array();
	$debut = 1601;
	$fin = 1633;

	 for ($i=1601; $i<1633; $i++)
	{

	 //Equipes
	 global ${"clubA".($i)};
	 global ${"id".$i};
		 
  	 $equipes = "clubA".''.$i;	
     $reponse = $bdd->query("SELECT  $bdcomiteClub.nom, $bdcomite_pfterr_e.$equipes, $bdcomiteClub.id
				FROM $bdcomiteClub
				INNER JOIN $bdcomite_pfterr_e ON $bdcomite_pfterr_e.$equipes=$bdcomiteClub.id
				WHERE  $bdcomite_pfterr_e.division = $division and $bdcomite_pfterr_e.annee = $annee"); 
							while ($row = $reponse->fetch() )
								{ 
								 $tabEquipes[] = $row[0];
								 $tabId[] = $row[2];
								}
																	
	 if (isset ($tabEquipes[$i-1601])) ${"clubA".($i)} = $tabEquipes[$i-1601]; else ${"clubA".($i)}='-'; 
	 if (isset ($tabId[$i-$debut])) ${"id".($i)} = $tabId[$i-$debut]; else ${"id".($i)}='-';
							
	//Scores
	global ${"A".($i)};

	$scores = "A".''.$i;
		
	 $reponse = $bdd->query("SELECT $scores
				FROM $bdcomite_pfterr_r
				WHERE  division=$division and annee=$annee"); 
				while ($row = $reponse->fetch() )
						{ 
						$tabScores[] = $row[0];
						}
 
	//if (isset ($tabScores[$i-1601])) ${"A".($i)} = $tabScores[$i-1601]; else ${"A".($i)}='-'; 
	if (isset ($tabScores[$i-$debut])) ${"A".($i)} = $tabScores[$i-$debut]; else ${"A".($i)}='-'; 
	}

//***************************************************************************************	 
//           Traitements des équipes et des résultats des 8me de finale	 
//***************************************************************************************

	$tabEquipes = array();
	$tabScores = array();
	
	 //Choix de l'intervalle
	$debut = 8001;
	$fin= 8017; 
	
	 for ($i=$debut; $i<$fin; $i++)
	{

	 //Equipes
	 global ${"clubA".($i)};
	 global ${"id".$i};																
	 if (isset (${"clubA".($i)})) ${"clubA".($i)} = ${"clubA".($i)}; else ${"clubA".($i)}='-'; 
	
	//Scores
	global ${"A".($i)};

	$scores = "A".''.$i;
		
	 $reponse = $bdd->query("SELECT $scores
				FROM $bdcomite_pfterr_r
				WHERE  division= $division and annee= $annee"); 
				while ($row = $reponse->fetch() )
						{ 
						$tabScores[] = $row[0];
						
						}
 								
	if (isset ($tabScores[$i-$debut])) ${"A".($i)} = $tabScores[$i-$debut]; else ${"A".($i)}='-'; 
	if (isset ($tabId[$i-$debut])) ${"id".($i)} = $tabId[$i-$debut]; else ${"id".($i)}='-';
	}

//***************************************************************************************	 
//           Traitements des equipes et des résultats des quarts de finale	 
//***************************************************************************************

	$tabEquipes = array();
	$tabScores = array();
	
	 //Choix de l'intervalle
	$debut = 4001;
	$fin= 4009; 
	
	 for ($i=$debut; $i<$fin; $i++)
	{
	 //Equipes
	 global ${"clubA".($i)};	
     global ${"id".$i};	
	 if (isset (${"clubA".($i)})) ${"clubA".($i)} = ${"clubA".($i)}; else ${"clubA".($i)}='-'; 
	
	//Scores
	 global ${"A".($i)};

	 $scores = "A".''.$i;
		
	 $reponse = $bdd->query("SELECT $scores
				FROM $bdcomite_pfterr_r
				WHERE  division=$division and annee=$annee"); 
				while ($row = $reponse->fetch() )
						{ 
						$tabScores[] = $row[0];
						}
 								
	 if (isset ($tabScores[$i-$debut])) ${"A".($i)} = $tabScores[$i-$debut]; else ${"A".($i)}='-'; 
	 //if (isset ($tabId[$i-$debut])) ${"id".($i)} = $tabId[$i-$debut]; else ${"id".($i)}='-';
	}
	
	
//***************************************************************************************	 
//           Traitements des equipes et des résultats des demi finale	 
//***************************************************************************************

	$tabEquipes = array();
	$tabScores = array();
	
	 //Choix de l'intervalle
	$debut = 2001;
	$fin= 2005; 
	
	 for ($i=$debut; $i<$fin; $i++)
	{
	 //Equipes
	 global ${"clubA".($i)};
	 global ${"id".($i)};
	 if (isset (${"clubA".($i)})) ${"clubA".($i)} = ${"clubA".($i)}; else ${"clubA".($i)}='-'; 
	
	//Scores
	global ${"A".($i)};

	$scores = "A".''.$i;
		
	 $reponse = $bdd->query("SELECT $scores
				FROM $bdcomite_pfterr_r
				WHERE  division=$division and annee=$annee"); 
				while ($row = $reponse->fetch() )
						{ 
						$tabScores[] = $row[0];
						}
 							
	if (isset ($tabScores[$i-$debut])) ${"A".($i)} = $tabScores[$i-$debut]; else ${"A".($i)}='-'; 
	//if (isset ($tabId[$i-$debut])) ${"id".($i)} = $tabId[$i-$debut]; else ${"id".($i)}='-';
	}	
	
//***************************************************************************************	 
//           Traitements des équipes et des résultats de la finale	 
//***************************************************************************************

	global $clubA1001;global $clubA1002;

	 if (isset ($clubA1001)) $clubA1001 = $clubA1001; else $clubA1001='-'; 
	 if (isset ($clubA1002)) $clubA1002 = $clubA1002; else $clubA1002='-';
	
	 global $A1001;global $A1002;	
	
	$tabScores = array() ;
	
	 $reponse = $bdd->query("SELECT A1001, A1002
				FROM $bdcomite_pfterr_r
				WHERE  division=$division and annee=$annee"); 
				while ($row = $reponse->fetch() )
						{ 
						$A1001 = $row[0];
						$A1002 = $row[1];
						}							

//****** traitement résultats 16me de finale  *********	
/*
if ($A1601 + $A1602 > 0)	{if ($A1601>$A1602) {$clubA8001 = $clubA1601;	} else	{$clubA8001=$clubA1602;	}}  else{	$A1601="-"; $A1602="-";}
if ($A1603 + $A1604 > 0)	{if ($A1603>$A1604)	{$clubA8002 = $clubA1603;	} else	{$clubA8002=$clubA1604;	}}	else{	$A1603="-"; $A1604="-";}
if ($A1605 + $A1606 > 0)	{if ($A1605>$A1606)	{$clubA8003 = $clubA1605;	} else	{$clubA8003=$clubA1606;	}}	else{	$A1605="-"; $A1606="-";}
if ($A1607 + $A1608 > 0)	{if ($A1607>$A1608)	{$clubA8004 = $clubA1607;	} else	{$clubA8004=$clubA1608;	}}	else{	$A1607="-"; $A1608="-";}

if ($A1609 + $A1610 > 0)	{if ($A1609>$A1610) {$clubA8005 = $clubA1609;	} else	{$clubA8005=$clubA1602;	}}  else{	$A1601="-"; $A1602="-";}
if ($A1611 + $A1612 > 0)	{if ($A1611>$A1612)	{$clubA8006 = $clubA1611;	} else	{$clubA8006=$clubA1604;	}}	else{	$A1603="-"; $A1604="-";}
if ($A1613 + $A1614 > 0)	{if ($A1613>$A1614)	{$clubA8007 = $clubA1613;	} else	{$clubA8007$clubA1606;	}}	else{	$A1605="-"; $A1606="-";}
if ($A1615 + $A1616 > 0)	{if ($A1615>$A1616)	{$clubA8008 = $clubA1615;	} else	{$clubA8008=$clubA1608;	}}	else{	$A1607="-"; $A1608="-";}

if ($A1617 + $A1618 > 0)	{if ($A1617>$A1618) {$clubA8009 = $clubA1617;	} else	{$clubA8009=$clubA1602;	}}  else{	$A1601="-"; $A1602="-";}
if ($A1619 + $A1620 > 0)	{if ($A1619>$A1620)	{$clubA8010 = $clubA1619;	} else	{$clubA8010=$clubA1604;	}}	else{	$A1603="-"; $A1604="-";}
if ($A1621 + $A1622 > 0)	{if ($A1621>$A1622)	{$clubA8011 = $clubA1621;	} else	{$clubA8011=$clubA1606;	}}	else{	$A1605="-"; $A1606="-";}
if ($A1623 + $A1624 > 0)	{if ($A1623>$A1624)	{$clubA8012 = $clubA1623;	} else	{$clubA8012=$clubA1608;	}}	else{	$A1607="-"; $A1608="-";}

if ($A1625 + $A1626 > 0)	{if ($A1625>$A1626) {$clubA8013 = $clubA1625;	} else	{$clubA8013=$clubA1602;	}}  else{	$A1601="-"; $A1602="-";}
if ($A1627 + $A1628 > 0)	{if ($A1627>$A1628)	{$clubA8014 = $clubA1627;	} else	{$clubA8014=$clubA1604;	}}	else{	$A1603="-"; $A1604="-";}
if ($A1629 + $A1630 > 0)	{if ($A1629>$A1630)	{$clubA8015 = $clubA1629;	} else	{$clubA8015=$clubA1606;	}}	else{	$A1605="-"; $A1606="-";}
if ($A1631 + $A1632 > 0)	{if ($A1631>$A1632)	{$clubA8016 = $clubA1631;	} else	{$clubA8016=$clubA1608;	}}	else{	$A1607="-"; $A1608="-";}
*/

 if ((int)$A1601+(int)$A1602 > 0) {if ($A1601>$A1602)	{$clubA8001=$clubA1601;	} else  {$clubA8001=$clubA1602; }}  else {	$A1601="-";	$A1602="-";	$clubA8001="-";}
if ((int)$A1603+(int)$A1604 > 0)	{if ($A1603>$A1604)	{$clubA8002=$clubA1603;	} else  {$clubA8002=$clubA1604; }}  else {  $A1603="-";	$A1604="-";	$clubA8002="-";}
if ((int)$A1605+(int)$A1606 > 0)	{if ($A1605>$A1606)	{$clubA8003=$clubA1605;	} else  {$clubA8003=$clubA1606; }}  else {  $A1605="-";	$A1606="-";	$clubA8003="-";}
 if ((int)$A1607+(int)$A1608 > 0)	{if ($A1607>$A1608)	{$clubA8004=$clubA1607;	} else  {$clubA8004=$clubA1608; }}  else {  $A1607="-";	$A1608="-";	$clubA8004="-";}
 if ((int)$A1609+(int)$A1610 > 0)	{if ($A1609>$A1610)	{$clubA8005=$clubA1609;	} else  {$clubA8005=$clubA1610; }}  else {  $A1609="-";	$A1610="-";	$clubA8005="-";}
				 if ((int)$A1611+(int)$A1612 > 0)	{if ($A1611>$A1612)	{$clubA8006=$clubA1611;	} else  {$clubA8006=$clubA1612; }}  else {  $A1611="-";	$A1612="-";	$clubA8006="-";}
				 if ((int)$A1613+(int)$A1614 > 0)	{if ($A1613>$A1614)	{$clubA8007=$clubA1613;	} else  {$clubA8007=$clubA1614; }}  else {  $A1613="-";	$A1614="-";	$clubA8007="-";}
				 if ((int)$A1615+(int)$A1616 > 0)	{if ($A1615>$A1616)	{$clubA8008=$clubA1615;	} else  {$clubA8008=$clubA1616; }}  else {  $A1615="-";	$A1616="-";	$clubA8008="-";}
				 if ((int)$A1617+(int)$A1618 > 0)	{if ($A1617>$A1618)	{$clubA8009=$clubA1617;	} else  {$clubA8009=$clubA1618; }}  else {  $A1617="-";	$A1618="-";	$clubA8009="-";}
				 if ((int)$A1619+(int)$A1620 > 0)	{if ($A1619>$A1620)	{$clubA8010=$clubA1619;	} else  {$clubA8010=$clubA1620; }}  else {  $A1619="-";	$A1620="-";	$clubA8010="-";}
				 if ((int)$A1621+(int)$A1622 > 0)	{if ($A1621>$A1622)	{$clubA8011=$clubA1621;	} else  {$clubA8011=$clubA1622; }}  else {  $A1621="-";	$A1622="-";	$clubA8011="-";}
				 if ((int)$A1623+(int)$A1624 > 0)	{if ($A1623>$A1624)	{$clubA8012=$clubA1623;	} else  {$clubA8012=$clubA1624; }}  else {  $A1623="-";	$A1624="-";	$clubA8012="-";}
				 if ((int)$A1625+(int)$A1626 > 0)	{if ($A1625>$A1626)	{$clubA8013=$clubA1625;	} else  {$clubA8013=$clubA1626; }}  else {  $A1625="-";	$A1626="-";	$clubA8013="-";}
				 if ((int)$A1627+(int)$A1628 > 0)	{if ($A1627>$A1628)	{$clubA8014=$clubA1627;	} else  {$clubA8014=$clubA1628; }}  else {  $A1627="-";	$A1628="-";	$clubA8014="-";}			
				 if ((int)$A1629+(int)$A1630 > 0)	{if ($A1629>$A1630)	{$clubA8015=$clubA1629;	} else  {$clubA8015=$clubA1630; }}  else {  $A1629="-";	$A1630="-";	$clubA8015="-";}			
				 if ((int)$A1631+(int)$A1632 > 0)	{if ($A1631>$A1632)	{$clubA8016=$clubA1631;	} else  {$clubA8016=$clubA1632; }}  else {  $A1631="-";	$A1632="-";	$clubA8016="-";}			
			


 if ((int)$A8001+(int)$A8002 > 0)	{if ($A8001>$A8002)	{$clubA4001=$clubA8001;	} else	{$clubA4001=$clubA8002;	}}	else{	$A8001="-";	$A8002="-";	$clubA4001="-";}
					 if ((int)$A8003+(int)$A8004 > 0)	{if ($A8003>$A8004)	{$clubA4002=$clubA8003;	} else	{$clubA4002=$clubA8004;	}}	else{	$A8003="-";	$A8004="-";	$clubA4002="-";}
					 if ((int)$A8005+(int)$A8006 > 0)	{if ($A8005>$A8006)	{$clubA4003=$clubA8005;	} else	{$clubA4003=$clubA8006;	}}	else{	$A8005="-";	$A8006="-";	$clubA4003="-";}
					 if ((int)$A8007+(int)$A8008 > 0)	{if ($A8007>$A8008)	{$clubA4004=$clubA8007;	} else	{$clubA4004=$clubA8008;	}}	else{	$A8007="-";	$A8008="-";	$clubA4004="-";}
					 if ((int)$A8009+(int)$A8010 > 0)	{if ($A8009>$A8010)	{$clubA4005=$clubA8009;	} else	{$clubA4005=$clubA8010;	}}	else{	$A8009="-";	$A8010="-";	$clubA4005="-";}
					 if ((int)$A8011+(int)$A8012 > 0)	{if ($A8011>$A8012)	{$clubA4006=$clubA8011;	} else	{$clubA4006=$clubA8012;	}}	else{	$A8011="-";	$A8012="-";	$clubA4006="-";}
					 if ((int)$A8013+(int)$A8014 > 0)	{if ($A8013>$A8014)	{$clubA4007=$clubA8013;	} else	{$clubA4007=$clubA8014;	}}	else{	$A8013="-";	$A8014="-";	$clubA4007="-";}
					 if ((int)$A8015+(int)$A8016 > 0)	{if ($A8015>$A8016)	{$clubA4008=$clubA8015;	} else	{$clubA4008=$clubA8016;	}}	else{	$A8015="-";	$A8016="-";	$clubA4008="-";}
					

 if ((int)$A4001+(int)$A4002 > 0)	{if ($A4001>$A4002)	{$clubA2001=$clubA4001;	} else	{$clubA2001=$clubA4002;	}}	else{	$A4001="-";	$A4002="-";	$clubA2001="-";}
						 if ((int)$A4003+(int)$A4004 > 0)	{if ($A4003>$A4004)	{$clubA2002=$clubA4003;	} else	{$clubA2002=$clubA4004;	}}	else{	$A4003="-";	$A4004="-";	$clubA2002="-";}
						 if ((int)$A4005+(int)$A4006 > 0)	{if ($A4005>$A4006)	{$clubA2003=$clubA4005;	} else	{$clubA2003=$clubA4006;	}}	else{	$A4005="-";	$A4006="-";	$clubA2003="-";}
						 if ((int)$A4007+(int)$A4008 > 0)	{if ($A4007>$A4008)	{$clubA2004=$clubA4007;	} else	{$clubA2004=$clubA4008;	}}	else{	$A4007="-";	$A4008="-";	$clubA2004="-";}
						

if ((int)$A2001+(int)$A2002 > 0)	{if ($A2001>$A2002)	{$clubA1001=$clubA2001;	} else	{$clubA1001=$clubA2002;	}}	else{	$A2001="-";	$A2002="-";	$clubA1001="-";}
							if ((int)$A2003+(int)$A2004 > 0)	{if ($A2003>$A2004)	{$clubA1002=$clubA2003;	} else	{$clubA1002=$clubA2004;	}}	else{	$A2003="-";	$A2004="-";	$clubA1002="-";}
						
					
						//finale
						 if ((int)$A1001+(int)$A1002 > 0)	{if ($A2001>$A2002)	{$clubA1001=$clubA2001;	} else	{$clubA1001=$clubA2002;	}}	else{	$A1001="-";	$A1002="-";}




/*
for ($i= 1601, $j = 1602, $k= 8001; $i<1632, $j <1633, $k< 8017; $i=$i+2, $j=$j+2, $k++)	
{if (is_numeric(${"A".$i})+is_numeric(${"A".$j}) > 0) {if (${"A".$i}>${"A".$j})	{${"clubA".$k}=${"clubA".$i};	} else {${"clubA".$k}=${"clubA".$j};	}}	else {	${"A".$i}="-";	${"A".$j}="-";	${"clubA".$k}="-";}}	

//****** traitement résultats 8me de finale  *********	
for ($i= 8001, $j = 8002, $k= 4001; $i<8016, $j <8017, $k< 4009; $i=$i+2, $j=$j+2, $k++)	
{if (is_numeric(${"A".$i})+is_numeric(${"A".$j}) > 0) {if (${"A".$i}>${"A".$j})	{${"clubA".$k}=${"clubA".$i};	} else {${"clubA".$k}=${"clubA".$j};	}}	else {	${"A".$i}="-";	${"A".$j}="-";	${"clubA".$k}="-";}}	

//****** traitement résultats 4me de finale  *********	
for ($i= 4001, $j = 4002, $k= 2001; $i<4008, $j <4009, $k< 2005; $i=$i+2, $j=$j+2, $k++)	
{if (is_numeric(${"A".$i})+is_numeric(${"A".$j}) > 0) {if (${"A".$i}>${"A".$j})	{${"clubA".$k}=${"clubA".$i};	} else {${"clubA".$k}=${"clubA".$j};	}}	else {	${"A".$i}="-";	${"A".$j}="-";	${"clubA".$k}="-";}}	

//****** traitement résultats demi finale  *********	
if (is_numeric($A2001)+is_numeric($A2002) > 0)	{if ($A2001>$A2002)	{$clubA1001=$clubA2001;	} else	{$clubA1001=$clubA2002;	}}	else{	$A2001="-";	$A2002="-";	$clubA1001="-";}
if (is_numeric($A2003)+is_numeric($A2004) > 0)	{if ($A2003>$A2004)	{$clubA1002=$clubA2003;	} else	{$clubA1002=$clubA2004;	}}	else{	$A2003="-";	$A2004="-";	$clubA1002="-";}

//****** traitement résultats finale  *********
if (is_numeric($A1001)+is_numeric($A1002) > 0)	{if ($A2001>$A2002)	{$clubA1001=$clubA2001;	} else	{$clubA1001=$clubA2002;	}}	else{	$A1001="-";	$A1002="-"; 	$quart1="-";}																		
*/
}



function choixBdd ($comite)
{
	global $bdcomite_pfterr_e, $bdcomite_pfterr_r, $bdcomiteClub;
	
	if ($comite == "al" or $comite == "n" or $comite == "pr" or $comite == "idf")
	$bddComite = "idf";
elseif ($comite == "bg" or $comite == "br" or $comite == "ce" or $comite == "fl" or $comite == "ce" or $comite == "pl")
	$bddComite = "pl";	
else 
	$bddComite = $comite;

$bdcomite_pfterr_e = "php".''.$bddComite.''."_pfterr_e";
$bdcomite_pfterr_r = "php".''.$bddComite.''."_pfterr_r";
$bdcomiteClub = "php".''.$bddComite.''."_clubs";
}




function traitementHuitieme ($debut, $fin )
{
global $bdcomite_pfterr_r, $bdcomite_pfterr_e, $bdcomiteClub, $division, $comite,  $annee, $bdd;

for ($i=$debut; $i<$fin; $i++)	{global ${"clubA".$i}, ${"A".$i};}

	$tabEquipes = array();
	$tabScores = array() ;
	$tabId = array() ;

	for ($i=$debut; $i<$fin; $i++)
	{
	 //	Equipes
	 global ${"clubA".($i)};
	 global ${"id".($i)};
   	 $equipes = "clubA".''.$i;
	 
	 $reponse = $bdd->query("SELECT  $bdcomiteClub.nom, $bdcomite_pfterr_e.$equipes, $bdcomiteClub.id
				FROM $bdcomiteClub
				INNER JOIN $bdcomite_pfterr_e 
				ON $bdcomite_pfterr_e.$equipes=$bdcomiteClub.id
				WHERE  $bdcomite_pfterr_e.division=$division 
				AND $bdcomite_pfterr_e.annee=$annee"); 
							while ($row = $reponse->fetch() )
								{ 
								 $tabEquipes[] = $row[0];
								 $tabId[] = $row[2];
								}
	 if (isset ($tabEquipes[$i-$debut])) ${"clubA".($i)} = $tabEquipes[$i-$debut]; else ${"clubA".($i)}='-'; 	
	 if (isset ($tabId[$i-$debut])) ${"id".($i)} = $tabId[$i-$debut]; else ${"id".($i)}='-';
								
	 // Scores
	 global ${"A".($i)};
	 $scores = "A".''.$i;

	 $reponse = $bdd->query("SELECT $scores
				FROM $bdcomite_pfterr_r
				WHERE  division = $division and annee=$annee"); 
				while ($row = $reponse->fetch() )
						{ $tabScores[] = $row[0];}		
 	 if (isset ($tabScores[$i-$debut])) ${"A".($i)} = $tabScores[$i-$debut]; else ${"A".($i)}='-'; 
	
	//echo  ${"A".($i)};echo "<br>";
	}
/*
global $clubA4001, $clubA4002;
	if ($annee != 2025) {
		echo "<br>";
		echo "oppo1 :" .$clubA8001.$clubA8002;echo "<br>";
		echo "oppo1 :" .$A8001.$A8002;echo "<br>";
		echo "<br>";
		var_dump($A8001);var_dump($A8002);echo "<br>";
		//if (is_numeric($A8001) && is_numeric($A8001))echo "<br>";
	//	{
			if ($A8001 + $A8002 > 0) {
				
				echo "test1";
				if ($A8001 > $A8002)	{
					echo "test11";echo "<br>";
					echo $clubA8001;echo "<br>";

					$clubA4001 = $clubA8001;
					echo $clubA4001;echo "<br>";
	
				} else	{
					echo "test2";
					$clubA4001=$clubA8002; }}	else{ 
						echo "test3";
						$A8001="-"; $A8002="-"; $clubA4001="-";}
		//}
		echo "<br>";
		if (is_numeric($A8003) && is_numeric($A8004))
		{if ($A8003 + $A8004 > 0) { if ($A8003>$A8004)	{$clubA4002=$clubA8003;	} else	{$clubA4002=$clubA8004;	}}	else{ $A8003="-"; $A8004="-"; $clubA4002="-";}}
		if (is_numeric($A8005) && is_numeric($A8006))
		{if ($A8005 + $A8006 > 0) { if ($A8005>$A8006)	{$clubA4003=$clubA8005;	} else	{$clubA4003=$clubA8006;	}}	else{ $A8005="-"; $A8006="-"; $clubA4003="-";}}
		if (is_numeric($A8007) && is_numeric($A8008))
		{if ($A8007 + $A8008 > 0) { if ($A8007>$A8008)	{$clubA4004=$clubA8007;	} else	{$clubA4004=$clubA8008;	}}	else{ $A8007="-"; $A8008="-"; $clubA4004="-";}}
		if (is_numeric($A8009) && is_numeric($A8010))
		{if ($A8009 + $A8010 > 0) { if ($A8009>$A8010)	{$clubA4005=$clubA8009; } else	{$clubA4005=$clubA8010;	}}	else{ $A8009="-"; $A8010="-"; $clubA4005="-";}}
		if (is_numeric($A8011) && is_numeric($A8012))
		{if ($A8011 + $A8012 > 0) { if ($A8011>$A8012)	{$clubA4006=$clubA8011;	} else	{$clubA4006=$clubA8012;	}}	else{ $A8011="-"; $A8012="-"; $clubA4006="-";}}
		if (is_numeric($A8013) && is_numeric($A8014))
		{if ($A8013 + $A8014 > 0) { if ($A8013>$A8014)	{$clubA4007=$clubA8013;	} else	{$clubA4007=$clubA8014;	}}	else{ $A8013="-"; $A8014="-"; $clubA4007="-";}}
		if (is_numeric($A8015) && is_numeric($A8016))
		{if ($A8015 + $A8016 > 0) { if ($A8015>$A8016)	{$clubA4008=$clubA8015;	} else	{$clubA4008=$clubA8016;	}}	else{ $A8015="-"; $A8016="-"; $clubA4008="-";}}
		
		
		if (is_numeric($A4001) && is_numeric($A4001))
		{if ($A4001 + $A4002 > 0) {	if ($A4001>$A4002)	{$clubA2001=$clubA4001;	} else	{$clubA2001=$clubA4002;	}}	else{ $A4001="-"; $A4002="-"; $clubA2001="-";}}
		if (is_numeric($A4003) && is_numeric($A4004))
		{if ($A4003 + $A4004 > 0) {	if ($A4003>$A4004)	{$clubA2002=$clubA4003;	} else	{$clubA2002=$clubA4004;	}}	else{ $A4003="-"; $A4004="-"; $clubA2002="-";}}
		if (is_numeric($A4005) && is_numeric($A4006))
		{if ($A4005 + $A4006 > 0) {	if ($A4005>$A4006)	{$clubA2003=$clubA4005;	} else	{$clubA2003=$clubA4006; }}	else{ $A4005="-"; $A4006="-"; $clubA2003="-";}}
		if (is_numeric($A4007) && is_numeric($A4008))
		{if ($A4007 + $A4008 > 0) {	if ($A4007>$A4008)	{$clubA2004=$clubA4007;	} else	{$clubA2004=$clubA4008;	}}	else{ $A4007="-"; $A4008="-"; $clubA2004="-";}}
		
		if (is_numeric($A2001) && is_numeric($A2002))
		{if ($A2001 + $A2002 > 0) {	if ($A2001>$A2002)	{$clubA1001=$clubA2001;	} else	{$clubA1001=$clubA2002;	}}	else{ $A2001="-"; $A2002="-"; $clubA1001="-";}}
		if (is_numeric($A2003) && is_numeric($A2004))
		{if ($A2003 + $A2004 > 0) {	if ($A2003>$A2004)	{$clubA1002=$clubA2003;	} else	{$clubA1002=$clubA2004; }}	else{ $A2003="-"; $A2004="-"; $clubA1002="-";}}
		
		if (is_numeric($A1001) && is_numeric($A1002))
		{if ($A1001 + $A1002 == 0) {$A1001 ="-";  $A1002 ="-";}}	
		
		}
	*/ 	
}
?>