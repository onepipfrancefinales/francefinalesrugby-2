
<?php
function traitementScores ($debut, $fin)
{
	for ($i= $debut; $i <= $fin ; $i++)
	{
	global ${"A".($i)};
	global ${"clubA".($i)};
	//if (isset (${"A".($i)})) ${"A".($i)}=${"A".($i)};${"A".($i)}='-';
	
	//Qualifi� d'office
	
	
	if (${"A".($i)} == '999')	{${"A".($i)}="Q"; }
	if (${"A".($i)} == '222')   {${"A".($i)}="-"; }	
	//if (${"A".($i)} == '222')   {${"clubA".($i)}="-"; }	
	//if (${"A".($i)} == '-')     {${"clubA".($i+1)}="-"; }
	
	
	// non affichage d'un �quipe
	/*
	if ($clubA2001 == '99999'  or $clubA2001 == '-')   
		$clubA2002 = "-";
	if ($clubA2003 == '99999'  or $clubA2003 == '-')   
		$clubA2004 = "-";
	
	if ($clubA1001 == '99999'  or $clubA1001 == '-')   
		$clubA1002 = "-";
	
	*/
	
	
		
	//forfait , disqualification, qualif au Tab
	
	if (${"A".($i)} == '555' )  {${"A".($i)}="Tab"; }
	if (${"A".($i)} == '666' )  {${"A".($i)}="DQ"; }
	if (${"A".($i)} == '777' )  {${"A".($i)}="F"; }
	if (${"A".($i)} == '888')	{${"A".($i)}="25"; }
	}
}

//Affichage des dates des phases finales
function date2019($division, $annee, $bdd)
{

$bdpfannee_date = "bdpf".$annee."_date";
//echo $bdpfannee_date;
global $D64ME; global $D32ME; global $D16ME; global $D8ME; global $D4ME;  global $D2ME; global $D1ME; global $D0ME;


$reponse = $bdd->query("	SELECT *
						FROM $bdpfannee_date
						WHERE id= $division	");
								while ($row = $reponse->fetch() )
									{ 
									$D64ME = $row[2];
									$D32ME = $row[3];
									$D16ME = $row[4];
									$D8ME = $row[5];
									$D4ME = $row[6];
									$D2ME = $row[7];
									$D1ME = $row[8];
									$D0ME = $row[9];
									}		
}

// R�cup�ration du nom de la division
function nomDivision($division)
{
global $nomDivision;	

//mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion � MySQL
//mysql_select_db("onepip-france_db5"); // S�lection de la base onepip
	
require '../../connect1/connection5.php';
				
	$reponse = $bdd->query("SELECT division
							FROM divisions
							WHERE id=$division "); 
								while ($row = $reponse->fetch() )
									{ 
									$nomDivision = $row[0];
									}								
}


?>

<?php

//Affichage du champion et du logo
function championDeFrance ( $clubA1001, $clubA1002, $A1001, $A1002, $bdd)
{
if (isset ($chamLogo)) $chamLogo = $chamLogo; else $chamLogo='clubs inconnu'; 
if (isset ($idEquipe)) $idEquipe = $idEquipe; else $idEquipe=''; 
if (isset ($championPLusLigue)) $championPLusLigue = $championPLusLigue; else $championPLusLigue=''; 


global $champion,$champLogo;

if ((int)$A1001+(int)$A1002 > 0)
		{ if ($A1001>$A1002)
			{
				$championPLusLigue=$clubA1001;	
			}				
			else	
			{
				$championPLusLigue=$clubA1002;		
			}
		}

$longueurMax = strlen($championPLusLigue);
//echo $longueurMax;
$champion = substr($championPLusLigue,0,$longueurMax-6);

echo $champion;
//$champion= substr($championPLusLigue);

// affichage logo

 $reponse = $bdd->query("SELECT  id
						FROM bdclubs2019
						WHERE  nom_1 = '$champion'"); 
								while ($row = $reponse->fetch() )
										{ 
										$idEquipe = $row[0];
										}

if ($idEquipe > 0)
	{
		if (strlen($idEquipe)==5)
			$idEquipe = $idEquipe;
		  else	
	        $idEquipe = substr($idEquipe,2,5);
		
			$idEquipeGif = $idEquipe.".gif";
			$champLogo = "/images/blasons100_100/".$idEquipeGif;
	}
	else
	{
	$champLogo = "/images/blasons100_100/99999.gif";
	}
//	echo $champLogo;
}



//***********************************************************************
//***********************************************************************
//**                                                                   **
//**    ----------    TRENTE DEUXIEME DE FINALE         ------------   **
//**																   **
//***********************************************************************
//*********************************************************************** 



 
function trenteDeuxieme2019 ($division, $annee, $bdd)

{
		
if (isset ($type)) $type=$type; else $type = "non type defini";
if (isset ($type2)) $type=$type2; else $type2 = "non type2 defini";
if (isset ($prefixe)) $prefixe = $prefixe; else $prefixe = "variable prefixe non defini";
if (isset ($prefChiffre1)) $prefChiffre1 = $prefChiffre1; else $prefChiffre1 = "variable prefChiffre1 non defini";
if (isset ($prefChiffre2)) $prefChiffre2 = $prefChiffre2; else $prefChiffre2 = "variable prefChiffre2 non defini";
if (isset ($debutEquipes1)) $debutEquipes1 = $debutEquipes1; else $debutEquipes1 = "variable debutEquipes1 non defini";
if (isset ($finEquipes1)) $finEquipes1 = $finEquipes1; else $finEquipes1 = "variable finEquipes1 non defini";
if (isset ($debutEquipes2)) $debutEquipes2 = $debutEquipes2; else $debutEquipes2 = "variable debutEquipes2 non defini";
if (isset ($finEquipes2)) $finEquipes2 = $finEquipes2; else $finEquipes2 = "variable finEquipes2 non defini";

global $type;
global $prefixe;

$bdpfAnnee = "bdpf".$annee;
$bdpfAnnee_2 = "bdpf".$annee."_2";
//echo $bdpfAnnee;

//mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion � MySQL
//mysql_select_db("onepip-france-db1"); // S�lection de la base onepip

//mysql_connect("127.0.0.1", "root", ""); 
//mysql_select_db("onepip-france-db1"); 
//require '../../connect/connection1.php';

//echo "base : ".$bdpfAnnee;
$reponse = $bdd->query("SELECT type
						FROM $bdpfAnnee
						WHERE 	id = $division 		");
					
						while ($row = $reponse->fetch() )
							{ 
							$type = $row[0];
							}
											
															
				$prefTexte = "clubA";
	
//********    trente-deuxi�me    ************

 if (substr($type,0,3)=='932' or substr($type,0,3) == '964')
	{
	$prefTexte = "clubA";
	$prefTexte2 = "clubAB";
	$prefChiffre1 = '320';
	$prefChiffre2 = '32';
	
	
	$debutEquipes1 = '1';
	$finEquipes1 = '10';
	
	$debutEquipes2 ='10';
	$finEquipes2 = '64';
	
	$debutScores ='1';
	$finScores= '64';
	
	
	}
//**********    seizi�me  ************************
elseif(substr($type,3,2)== 16 or substr($type,3,2)== 32)
	{
	$prefTexte = "clubA";
	$prefTexte2 = "clubAB";
	$prefChiffre1 = '160';
	$prefChiffre2 = '16';

	
	$debutEquipes1 = '1';
	$finEquipes1 = '10';
	
	$debutEquipes2 ='10';
	$finEquipes2 = '32';
	
	$debutScores ="";
	$finScores= "";
	}
//*******       huiti�me   ************************

elseif (substr($type,5,2)== '08' or substr($type,5,2)== '16')
	{
	$prefTexte = "clubA";
	$prefTexte2 = "clubAB";
	$prefChiffre1 = '800';
	$prefChiffre2 = '80';
	
	$debutEquipes1 = '1';
	$finEquipes1 = '10';
	
	$debutEquipes2 = '10';
	$finEquipes2 =  '16';
	
	$debutScores ="";
	$finScores= "";
	}
//*****       quarts	      *******

elseif (substr($type,7,2)== '04' or substr($type,7,2)== '08')
	{
	$prefTexte = "clubA";
	$prefTexte2 = "clubAB";
	$prefChiffre1 = '400';
	$prefChiffre2 = '40';
	
	$debutEquipes1 = '1';
	$finEquipes1 = '9';
	
	$debutEquipes2 ='1';
	$finEquipes2 = '0';
	
	$debutScores ="";
	$finScores= "";
	
	}
	
//*****      demi	      *******	
elseif (substr($type,9,2)== '02' or substr($type,9,2)== '04')

	{
	$prefTexte = "clubA";
	$prefTexte2 = "clubAB";
	$prefChiffre1 = '200';
	$prefChiffre2 = '20';
	
	$debutEquipes1 = '1';
	$finEquipes1 = '5';
	
	$debutEquipes2 ="1";
	$finEquipes2 = "0";
	
	$debutScores ="0";
	$finScores= "0";
	
	}	
	
	
	
//*****       finale	      *******	
elseif (substr($type,9,2)== '01' or substr($type,9,2)== '11')

	{
	$prefTexte = "clubA";
	$prefTexte2 = "clubAB";
	$prefChiffre1 = '100';
	$prefChiffre2 = '10';
	
	$debutEquipes1 = '1';
	$finEquipes1 = '2';
	
	$debutEquipes2 ="1";
	$finEquipes2 = "0";
	
	$debutScores ="0";
	$finScores= "0";
	
	}
	
//*****       suppression d'un championnat	      *******	
elseif (substr($type,0,2)== '99' )

	{
	$prefTexte = "clubA";
	$prefTexte2 = "clubAB";
	$prefChiffre1 = '100';
	$prefChiffre2 = '10';
	
	$debutEquipes1 = '1';
	$finEquipes1 = '2';
	
	$debutEquipes2 ="1";
	$finEquipes2 = "0";
	
	$debutScores ="0";
	$finScores= "0";
	
	}	
	
else 
	{
	echo "données insuffisantes";
	}

echo "<br>";
	

$prefixeEquipes1 = $prefTexte.$prefChiffre1;
$prefixeEquipes2 = $prefTexte.$prefChiffre2;

$prefixeEquipes1B = $prefTexte2.$prefChiffre1;
$prefixeEquipes2B = $prefTexte2.$prefChiffre2;

//*****************************************************************************
//************************         Equipes de E01 à E09  **********************
//*****************************************************************************	
	//$debut =1;
	//$fin=9;

	$tabNomEquipes1 = array();
	$tabNomLigue1 = array();
	$tabId = array();
 	
	global $equipes;
	global $tabNomEquipes1;
	global $tabNomLigue1;
	global $tabId;
	//echo $type;
	for ($i=$debutEquipes1 ; $i< $finEquipes1; $i++)
	{	 
		global ${$prefixeEquipes1.($i)};
		global ${$prefixeEquipes1B.($i)};
		global ${"codeId".$i};
		global ${"nomLigue320".$i};
		
		$equipes = "E0".$i;
		echo  $equipes; 
								
		$reponse = $bdd->query("	SELECT bdclubs.id, bdclubs.nom_1, bdclubs.sigleComite, $bdpfAnnee.$equipes 
									FROM bdclubs, $bdpfAnnee 
									WHERE bdclubs.id=$bdpfAnnee.$equipes and $bdpfAnnee.id=$division "); 
										while ($row = $reponse->fetch() )
											{ 
											$tabId[] = $row[0];
											$tabNomEquipes1[] = $row[1];
											$tabNomLigue1[] = $row[2];
											}									
											
											
									
	}


		for ($i=$debutEquipes1 ; $i < $finEquipes1; $i++)
			{		
					
			//$tabNomEquipes1[$i-1] = $tabNomEquipes1[$i-1].' '.$tabNomLigue1[$i-1];	
			//${$prefixeEquipes1.($i)} = $tabNomEquipes1[$i-1];
			//${"codeId".$i} = $tabId[$i-1];
			//${"nomLigue320".$i} = $tabNomLigue1[$i-1];
			
			
			${$prefixeEquipes1.($i)} = $tabNomEquipes1[$i-1].' '.$tabNomLigue1[$i-1];	
			
			
			${$prefixeEquipes1B.($i)} = $tabNomEquipes1[$i-1];
			}	
			

//************************************************************************************
//*******************    Equipes de E10 à E65   **************************************
//************************************************************************************	
	
	//$prefixeEquipes2 = substr($prefixeEquipes,0,7);
	
	//$debut =10;
	//$fin=65;
	$tabId = array();
	$tabNomEquipes2 = array();
	$tabNomLigue2 = array();	
	global $equipes;
	for ($i=$debutEquipes2 ; $i<= $finEquipes2; $i++)
	{	 
		global ${$prefixeEquipes2.($i)};
		global ${$prefixeEquipes2B.($i)};
		global ${"codeId".$i};
		$equipes = "E".$i;
		
		
	$reponse = $bdd->query("	SELECT bdclubs.id, bdclubs.nom_1, bdclubs.sigleComite, $bdpfAnnee.$equipes 
								FROM bdclubs, $bdpfAnnee 
								WHERE bdclubs.id=$bdpfAnnee.$equipes and $bdpfAnnee.id=$division "); 
										while ($row = $reponse->fetch() )
											{ 
											$tabId[] = $row[0];
											$tabNomEquipes2[] = $row[1];
											$tabNomLigue2[] = $row[2];
											}
												
												
	}
		for ($i=$debutEquipes2 ; $i<= $finEquipes2; $i++)
				{
					
				
				${"codeId".$i} = $tabId[$i-10];
				${"nomLigue".$i} = $tabNomLigue2[$i-10];
				${$prefixeEquipes2.($i)} =$tabNomEquipes2[$i-$debutEquipes2].' '.$tabNomLigue2[$i-$debutEquipes2];
				${$prefixeEquipes2B.($i)} =$tabNomEquipes2[$i-$debutEquipes2];
			
				}
	
	//echo 	$tabNomEquipes2[3] ;
//********************* Trente deuxi�me de finale***************************************




///trente-deuxi�me de finale
	$divisionAPts = $division + '1';
	$divisionRGA  = $division + '2';
	$divisionRPts = $division + '3';

	
	$debut =3201;
	$fin=3265;

	
	$tabScoresA32 = array();
	$tabScores2 = array();
	$tabScores3 = array();
	$tabScores4 = array();
	//GA aller
	for ($i=$debut ; $i< $fin; $i++)
	{	 
   
	 global ${"A".($i)};
	 $scores = "A".''.$i;
	
	 $reponse = $bdd->query("SELECT $scores
								FROM $bdpfAnnee
								WHERE  id='$division'"); 
									while ($row = $reponse->fetch() )
										{ 
										 $tabScoresA32[] = $row[0];
										}
												
	 if (isset ($tabScoresA32[$i-$debut])) ${"A".($i)} = $tabScoresA32[$i-$debut]; else ${"A".($i)}='B';   
	}

//******************************************************************************************************	
//********************* Trente deuxi�me de finale  ALLER/RETOUR  ***************************************
//******************************************************************************************************

//GA Aller : juste au dessus

	
//PTS aller
	for ($i=$debut ; $i< $fin; $i++)
	{	

	global ${"A".($i)."Pts"};
	 $scores = "A".''.$i;
	//echo ${"A".($i)."Pts"};
	$reponse = $bdd->query("SELECT $scores
								FROM $bdpfAnnee
								WHERE  id='$divisionAPts'"); 
									while ($row = $reponse->fetch() )
										{ 
										 $tabScores32[] = $row[0];
										}
												
	
	 if (isset ($tabScores32[$i-$debut])) ${"A".($i)."Pts"} = $tabScores32[$i-$debut]; else ${"A".($i)."Pts"}='-'; 


	}
//***********************   GA retour   *************************************************
	for ($i=$debut ; $i< $fin; $i++)
	{	

	global ${"R".($i)};
	 $scores = "A".''.$i;

	$reponse = $bdd->query("SELECT $scores
								FROM $bdpfAnnee
								WHERE  id='$divisionRGA'"); 
									while ($donnees = $reponse->fetch() )
										{ 
										 $tabScores3[] = $row[0];
										}
												
	
	 if (isset ($tabScores3[$i-$debut])) ${"R".($i)} = $tabScores3[$i-$debut]; else ${"R".($i)}='-'; 


	}


//***********************************     PTS retour          ************************************************
	for ($i=$debut ; $i< $fin; $i++)
	{	

	global ${"R".($i)."Pts"};
	 $scores = "A".''.$i;
	//echo ${"R".($i)."Pts"};
	 $reponse = $bdd->query("SELECT $scores
								FROM $bdpfAnnee
								WHERE  id='$divisionRPts'"); 
									while ($row = $reponse->fetch() )
										{ 
										 $tabScores4[] = $row[0];
										}
	 if (isset ($tabScores4[$i-$debut])) ${"R".($i)."Pts"} = $tabScores4[$i-$debut]; else ${"R".($i)."Pts"}='-'; 


	}

	for ($i=$debut ; $i< $fin; $i++)
	{
	
	${"A".($i)} = (int)${"A".($i)} + (int)${"R".($i)};
	${"A".($i)."Pts"} = (int)${"A".($i)."Pts"} + (int)${"R".($i)."Pts"};
	}	
	

//****************************************************************************	
//***********************         seizième de finale    **********************
//****************************************************************************




	$divisionAPts = $division + '1';
	$divisionRGA  = $division + '2';
	$divisionRPts = $division + '3';

	$debut =1601;
	$fin=1632;


	$tabScores = array();
	$tabScores2 = array();
	$tabScores3 = array();
	$tabScores4 = array();
	
	for ($i=$debut ; $i<= $fin; $i++)
	{	 
 //equipes des 16me
	
	global ${"clubA".($i)};

//Scores des 16me
	 global ${"A".($i)};
	 $scores = "A".''.$i;
	//echo $scores;
	
	 $reponse = $bdd->query("	SELECT $scores
								FROM $bdpfAnnee_2
								WHERE  id='$division'"); 
							while ($row = $reponse->fetch() )
								{ 
								 $tabScores[] = $row[0];
								}

	 if (isset ($tabScores[$i-$debut])) ${"A".($i)} = $tabScores[$i-$debut]; else ${"A".($i)}='-'; 

	 }
	 
	 
//PTS Aller

for ($i=$debut ; $i<= $fin; $i++)
	{	

	global ${"A".($i)."Pts"};
	 $scores = "A".''.$i;
//	echo ${"A".($i)."Pts"};
	 $reponse = $bdd->query("SELECT $scores
								FROM $bdpfAnnee_2
								WHERE  id='$divisionAPts'"); 
									while ($row = $reponse->fetch() )
										{ 
										 $tabScores2[] = $row[0];
										}
	 if (isset ($tabScores2[$i-$debut])) ${"A".($i)."Pts"} = $tabScores2[$i-$debut]; else ${"A".($i)."Pts"}='-'; 


	}



//GA Retour

	$tabScores = array();
	for ($i=$debut ; $i<= $fin; $i++)
	{	 
 //equipes des 16me
	global ${"clubA".($i)};
	global ${"clubAB".($i)};
//Scores des 16me
	 global ${"R".($i)};
	 $scores = "A".''.$i;
	//echo $scores;
	
	$reponse = $bdd->query("	SELECT $scores
								FROM $bdpfAnnee_2
								WHERE  id='$divisionRGA'"); 
							while ($row = $reponse->fetch() )
								{ 
								 $tabScores3[] = $row[0];
								}

	 if (isset ($tabScores3[$i-$debut])) ${"R".($i)} = $tabScores3[$i-$debut]; else ${"R".($i)}='-'; 

	 }


// PTS Aller

for ($i=$debut ; $i<= $fin; $i++)
	{	

	global ${"R".($i)."Pts"};
	 $scores = "A".''.$i;
//	echo ${"R".($i)."Pts"};
	$reponse = $bdd->query("	SELECT $scores
								FROM $bdpfAnnee_2
								WHERE  id='$divisionRPts'"); 
									while ($row = $reponse->fetch() )
										{ 
										 $tabScores3[] = $row[0];
										}
	 if (isset ($tabScores3[$i-$debut])) ${"R".($i)."Pts"} = $tabScores3[$i-$debut]; else ${"R".($i)."Pts"}='-'; 


	}

	 for ($i=$debut ; $i<= $fin; $i++)
	{
	${"A".($i)} = (int)${"A".($i)} + (int)${"R".($i)};
	${"A".($i)."Pts"} = (int)${"A".($i)."Pts"} + (int)${"R".($i)."Pts"};
	}

//*************************************************************************
//******************         huitième de finale  **************************
//*************************************************************************
	
	$divisionAPts = $division + '1';
	$divisionRGA  = $division + '2';
	$divisionRPts = $division + '3';
	
	
	$debut =8001;
	$fin=8016;


	$tabScores = array();
	$tabScores2 = array();
	$tabScores3 = array();
	$tabScores4 = array();
	for ($i=$debut ; $i<= $fin; $i++)
	{	 
 //equipes des 8me
	global ${"clubA".($i)}; 
	global ${"clubAB".($i)};

	 global ${"A".($i)};
	 $scores = "A".''.$i;
	
	 $reponse = $bdd->query("	SELECT $scores
								FROM $bdpfAnnee_2
								WHERE  id='$division'"); 
							while ($row = $reponse->fetch() )
								{ 
								 $tabScores[] = $row[0];
								}
												
	
	 if (isset ($tabScores[$i-$debut])) ${"A".($i)} = $tabScores[$i-$debut]; else ${"A".($i)}='-'; 
	
	

	}
	
	
//**********************    huitième de finale	AR *********************************
	
//PTS Aller

for ($i=$debut ; $i<= $fin; $i++)
	{	

	global ${"A".($i)."Pts"};
	 $scores = "A".''.$i;
	//echo ${"A".($i)."Pts"};
	 $reponse = $bdd->query("	SELECT $scores
								FROM $bdpfAnnee_2
								WHERE  id='$divisionAPts'"); 
									while ($row = $reponse->fetch() )
										{ 
										 $tabScores2[] = $row[0];
										}
	 if (isset ($tabScores2[$i-$debut])) ${"A".($i)."Pts"} = $tabScores2[$i-$debut]; else ${"A".($i)."Pts"}='-'; 


	}
	
//*****GA retour	
	
$tabScores = array();
	for ($i=$debut ; $i<= $fin; $i++)
	{	 
 

	
	 global ${"R".($i)};
	 $scores = "A".''.$i;
	
	 $reponse = $bdd->query("	SELECT $scores
								FROM $bdpfAnnee_2
								WHERE  id='$divisionRGA'"); 
							while ($row = $reponse->fetch() )
								{ 
								 $tabScores2[] = $row[0];
								}
												
	
	 if (isset ($tabScores2[$i-$debut])) ${"R".($i)} = $tabScores2[$i-$debut]; else ${"R".($i)}='-'; 
	
	

	}
	

	
	//PTS retour

for ($i=$debut ; $i<= $fin; $i++)
	{	

	global ${"R".($i)."Pts"};
	 $scores = "A".''.$i;
//	echo ${"R".($i)."Pts"};
	$reponse = $bdd->query("	SELECT $scores
								FROM $bdpfAnnee_2
								WHERE  id='$divisionRPts'"); 
									while ($row = $reponse->fetch() )
										{ 
										 $tabScores3[] = $row[0];
										}
	 if (isset ($tabScores3[$i-$debut])) ${"R".($i)."Pts"} = $tabScores3[$i-$debut]; else ${"R".($i)."Pts"}='-'; 


	}


 for ($i=$debut ; $i<= $fin; $i++)
	{
	${"A".($i)} = (int)${"A".($i)} + (int)${"R".($i)};
	${"A".($i)."Pts"} = (int)${"A".($i)."Pts"} + (int)${"R".($i)."Pts"};
	}
	 
	
	
	
	
//*********************       Quarts de finale   ************************************
	
	
	$divisionAPts = $division + '1';
	$divisionRGA  = $division + '2';
	$divisionRPts = $division + '3';
	
	
	$debut =4001;
	$fin=4008;
	
	
	$tabScores = array();
	$tabScores2 = array();
	$tabScores3 = array();
	$tabScores4 = array();
	
	for ($i=$debut ; $i<= $fin; $i++)
	{	 
 //equipes des Quarts
	global ${"clubA".($i)}; 
  	global ${"clubAB".($i)};
	 
// Scores des quarts	 
	 global ${"A".($i)};
	 $scores = "A".''.$i;
	//echo $Scores;
	 $reponse = $bdd->query("	SELECT $scores
								FROM $bdpfAnnee_2
								WHERE  id='$division'"); 
							while ($row = $reponse->fetch() )
								{ 
								 $tabScores[] = $row[0];
								}
												
	
	 if (isset ($tabScores[$i-$debut])) ${"A".($i)} = $tabScores[$i-$debut]; else ${"A".($i)}='-'; 

	}
	
	
//**********************    Quarts de finale	AR *********************************
	
//PTS Aller

for ($i=$debut ; $i<= $fin; $i++)
	{	

	global ${"A".($i)."Pts"};
	 $scores = "A".''.$i;
	//echo ${"A".($i)."Pts"};
	$reponse = $bdd->query("	SELECT $scores
								FROM $bdpfAnnee_2
								WHERE  id='$divisionAPts'"); 
									while ($row = $reponse->fetch() )
										{ 
										 $tabScores1[] = $row[0];
										}
	 if (isset ($tabScores1[$i-$debut])) ${"A".($i)."Pts"} = $tabScores1[$i-$debut]; else ${"A".($i)."Pts"}='-'; 


	}	
	
	
	
	
	
	
//GA Retour	
	for ($i=$debut ; $i<= $fin; $i++)
	{	 
 
	 global ${"R".($i)};
	 $scores = "A".''.$i;
	
	 $reponse = $bdd->query("	SELECT $scores
								FROM $bdpfAnnee_2
								WHERE  id='$divisionRGA'"); 
							while ($row = $reponse->fetch() )
								{ 
								 $tabScores2[] = $row[0];
								}
												
	
	 if (isset ($tabScores2[$i-$debut])) ${"R".($i)} = $tabScores2[$i-$debut]; else ${"R".($i)}='-'; 

	}
	
	
	
//PTS Aller

for ($i=$debut ; $i<= $fin; $i++)
	{	

	global ${"R".($i)."Pts"};
	 $scores = "A".''.$i;
//	echo ${"R".($i)."Pts"};
	$reponse = $bdd->query("	SELECT $scores
								FROM $bdpfAnnee_2
								WHERE  id='$divisionRPts'"); 
									while ($row = $reponse->fetch() )
										{ 
										 $tabScores3[] = $row[0];
										}
	 if (isset ($tabScores3[$i-$debut])) ${"R".($i)."Pts"} = $tabScores3[$i-$debut]; else ${"R".($i)."Pts"}='-'; 


	}		
	

	for ($i=$debut ; $i<= $fin; $i++)
	{
	${"A".($i)} = (int)${"A".($i)} + (int)${"R".($i)};
	${"A".($i)."Pts"} = (int)${"A".($i)."Pts"} + (int)${"R".($i)."Pts"};
	}
	 
///*********************************************************************
//*************************   Demi finale    ***************************
//**********************************************************************

	
	$divisionAPts = $division + '1';
	$divisionRGA  = $division + '2';
	$divisionRPts = $division + '3';
	

	$debut =2001;
	$fin=2004;

	$tabScores = array();
	$tabScores1 = array();
	$tabScores2 = array();
	$tabScores3 = array();
	for ($i=$debut ; $i<= $fin; $i++)
	{	 
   
//equipes des demi finale
	global ${"clubA".($i)}; 
    global ${"clubAB".($i)}; 
   
//scores des demi finale   
	 global ${"A".($i)};
	 $scores = "A".''.$i;
	//echo ${"A".($i)};
	 $reponse = $bdd->query("	SELECT $scores
								FROM $bdpfAnnee_2
								WHERE  id='$division'"); 
							while ($row = $reponse->fetch() )
								{ 
								 $tabScores[] = $row[0];
								}
												
	
	 if (isset ($tabScores[$i-$debut])) ${"A".($i)} = $tabScores[$i-$debut]; else ${"A".($i)}='-'; 

	}
	
	
	
//**********************    Demi finale	AR *********************************
	
//PTS Aller

for ($i=$debut ; $i<= $fin; $i++)
	{	

	global ${"A".($i)."Pts"};
	 $scores = "A".''.$i;
//	echo ${"A".($i)."Pts"};
	 $reponse = $bdd->query("	SELECT $scores
								FROM $bdpfAnnee_2
								WHERE  id='$divisionAPts'"); 
									while ($row = $reponse->fetch() )
										{ 
										 $tabScores1[] = $row[0];
										}
	 if (isset ($tabScores1[$i-$debut])) ${"A".($i)."Pts"} = $tabScores1[$i-$debut]; else ${"A".($i)."Pts"}='-'; 


	}		
	

//******************    GA Retour *******************************

		for ($i=$debut ; $i<= $fin; $i++)
	{	 
   
//equipes des demi finale
//	global ${"clubA".($i)}; 
   
   
//scores des demi finale   
	 global ${"R".($i)};
	// $scores = "A".''.$i;
	
	$reponse = $bdd->query("	SELECT $scores
								FROM $bdpfAnnee_2
								WHERE  id='$divisionRGA'"); 
							while ($row = $reponse->fetch() )
								{ 
								 $tabScores2[] = $row[0];
								}
												
	
	 if (isset ($tabScores2[$i-$debut])) ${"R".($i)} = $tabScores2[$i-$debut]; else ${"R".($i)}='-'; 

	}
	
//*****************************  PTS retour***************************

for ($i=$debut ; $i<= $fin; $i++)
	{	

	global ${"R".($i)."Pts"};
	// $scores = "A".''.$i;
//	echo ${"R".($i)."Pts"};
	$reponse = $bdd->query("	SELECT $scores
								FROM $bdpfAnnee_2
								WHERE  id='$divisionRPts'"); 
									while ($row = $reponse->fetch() )
										{ 
										 $tabScores3[] = $row[0];
										}
	 if (isset ($tabScores3[$i-$debut])) ${"R".($i)."Pts"} = $tabScores3[$i-$debut]; else ${"R".($i)."Pts"}='-'; 


	}			

// traitement des r�sultats	
	for ($i=$debut ; $i<= $fin; $i++)
	{
	${"A".($i)} = (int)${"A".($i)} + (int)${"R".($i)};
//	echo ${"A".($i)};
	${"A".($i)."Pts"} = (int)${"A".($i)."Pts"} + (int)${"R".($i)."Pts"};
		
	//echo ${"A".($i)."Pts"};
	}
	
	
	
	
//*************************   Finale    ************************
	
	global $clubA1001; global $clubA1002;
	global $clubAB1001; global $clubAB1002;
	global $A1001; global $A1002;
	
	$reponse = $bdd->query("	SELECT A1001,A1002
								FROM $bdpfAnnee_2
								WHERE  id='$division'"); 
							while ($row = $reponse->fetch() )
								{ 
								 $A1001 = $row[0];
								 $A1002 = $row[1];
								}
	
	
//-------32me de finale -------
 //-------------Goal Average-----
 
	if ($A3201 + $A3202 == 0) {$A3201 ="-"; $A3202 = "-";}
	if ($A3203 + $A3204 == 0) {$A3203 ="-"; $A3204 = "-";}
	if ($A3205 + $A3206 == 0) {$A3205 ="-"; $A3206 = "-";}
	if ($A3207 + $A3208 == 0) {$A3207 ="-"; $A3208 = "-";}
	if ($A3209 + $A3210 == 0) {$A3209 ="-"; $A3210 = "-";}
	if ($A3211 + $A3212 == 0) {$A3211 ="-"; $A3212 = "-";}
	if ($A3213 + $A3214 == 0) {$A3213 ="-"; $A3214 = "-";}
	if ($A3215 + $A3216 == 0) {$A3215 ="-"; $A3216 = "-";}
	if ($A3217 + $A3218 == 0) {$A3217 ="-"; $A3218 = "-";}
	if ($A3219 + $A3220 == 0) {$A3219 ="-"; $A3220 = "-";}
	if ($A3221 + $A3222 == 0) {$A3221 ="-"; $A3222 = "-";}
	if ($A3223 + $A3224 == 0) {$A3223 ="-"; $A3224 = "-";}
	if ($A3225 + $A3226 == 0) {$A3225 ="-"; $A3226 = "-";}
	if ($A3227 + $A3228 == 0) {$A3227 ="-"; $A3228 = "-";}
	if ($A3229 + $A3230 == 0) {$A3229 ="-"; $A3230 = "-";}
	if ($A3231 + $A3232 == 0) {$A3231 ="-"; $A3232 = "-";}
	
	if ($A3233 + $A3234 == 0) {$A3233 ="-"; $A3234 = "-";}
	if ($A3235 + $A3236 == 0) {$A3235 ="-"; $A3236 = "-";}
	if ($A3237 + $A3238 == 0) {$A3237 ="-"; $A3238 = "-";}
	if ($A3239 + $A3240 == 0) {$A3239 ="-"; $A3240 = "-";}
	if ($A3241 + $A3242 == 0) {$A3241 ="-"; $A3242 = "-";}
	if ($A3243 + $A3244 == 0) {$A3243 ="-"; $A3244 = "-";}
	if ($A3245 + $A3246 == 0) {$A3245 ="-"; $A3246 = "-";}
	if ($A3247 + $A3248 == 0) {$A3247 ="-"; $A3248 = "-";}
	if ($A3249 + $A3250 == 0) {$A3249 ="-"; $A3250 = "-";}
	if ($A3251 + $A3252 == 0) {$A3251 ="-"; $A3252 = "-";}
	if ($A3253 + $A3254 == 0) {$A3253 ="-"; $A3254 = "-";}
	if ($A3255 + $A3256 == 0) {$A3255 ="-"; $A3256 = "-";}
	if ($A3257 + $A3258 == 0) {$A3257 ="-"; $A3258 = "-";}
	if ($A3259 + $A3260 == 0) {$A3259 ="-"; $A3260 = "-";}
	if ($A3261 + $A3262 == 0) {$A3261 ="-"; $A3262 = "-";}
	if ($A3263 + $A3264 == 0) {$A3263 ="-"; $A3262 = "-";}
	
	
	//-------------Points terrain  -----
	
	if ($A3201Pts + $A3202Pts == 0) {$A3201Pts ="-"; $A3202Pts = "-";}
	if ($A3203Pts + $A3204Pts == 0) {$A3203Pts ="-"; $A3204Pts = "-";}
	if ($A3205Pts + $A3206Pts == 0) {$A3205Pts ="-"; $A3206Pts = "-";}
	if ($A3207Pts + $A3208Pts == 0) {$A3207Pts ="-"; $A3208Pts = "-";}
	if ($A3209Pts + $A3210Pts == 0) {$A3209Pts ="-"; $A3210Pts = "-";}
	if ($A3211Pts + $A3212Pts == 0) {$A3211Pts ="-"; $A3212Pts = "-";}
	if ($A3213Pts + $A3214Pts == 0) {$A3213Pts ="-"; $A3214Pts = "-";}
	if ($A3215Pts + $A3216Pts == 0) {$A3215Pts ="-"; $A3216Pts = "-";}
	if ($A3217Pts + $A3218Pts == 0) {$A3217Pts ="-"; $A3218Pts = "-";}
	if ($A3219Pts + $A3220Pts == 0) {$A3219Pts ="-"; $A3220Pts = "-";}
	if ($A3221Pts + $A3222Pts == 0) {$A3221Pts ="-"; $A3222Pts = "-";}
	if ($A3223Pts + $A3224Pts == 0) {$A3223Pts ="-"; $A3224Pts = "-";}
	if ($A3225Pts + $A3226Pts == 0) {$A3225Pts ="-"; $A3226Pts = "-";}
	if ($A3227Pts + $A3228Pts == 0) {$A3227Pts ="-"; $A3228Pts = "-";}
	if ($A3229Pts + $A3230Pts == 0) {$A3229Pts ="-"; $A3230Pts = "-";}
	if ($A3231Pts + $A3232Pts == 0) {$A3231Pts ="-"; $A3232Pts = "-";}
	
	if ($A3233Pts + $A3234Pts == 0) {$A3233Pts ="-"; $A3234Pts = "-";}
	if ($A3235Pts + $A3236Pts == 0) {$A3235Pts ="-"; $A3236Pts = "-";}
	if ($A3237Pts + $A3238Pts == 0) {$A3237Pts ="-"; $A3238Pts = "-";}
	if ($A3239Pts + $A3240Pts == 0) {$A3239Pts ="-"; $A3240Pts = "-";}
	if ($A3241Pts + $A3242Pts == 0) {$A3241Pts ="-"; $A3242Pts = "-";}
	if ($A3243Pts + $A3244Pts == 0) {$A3243Pts ="-"; $A3244Pts = "-";}
	if ($A3245Pts + $A3246Pts == 0) {$A3245Pts ="-"; $A3246Pts = "-";}
	if ($A3247Pts + $A3248Pts == 0) {$A3247Pts ="-"; $A3248Pts = "-";}
	if ($A3249Pts + $A3250Pts == 0) {$A3249Pts ="-"; $A3250Pts = "-";}
	if ($A3251Pts + $A3252Pts == 0) {$A3251Pts ="-"; $A3252Pts = "-";}
	if ($A3253Pts + $A3254Pts == 0) {$A3253Pts ="-"; $A3254Pts = "-";}
	if ($A3255Pts + $A3256Pts == 0) {$A3255Pts ="-"; $A3256Pts = "-";}
	if ($A3257Pts + $A3258Pts == 0) {$A3257Pts ="-"; $A3258Pts = "-";}
	if ($A3259Pts + $A3260Pts == 0) {$A3259Pts ="-"; $A3260Pts = "-";}
	if ($A3261Pts + $A3262Pts == 0) {$A3261Pts ="-"; $A3262Pts = "-";}
	if ($A3263Pts + $A3264Pts == 0) {$A3263Pts ="-"; $A3262Pts = "-";}
 
 
 
 
 
 
 //-------16me de finale -------
	//-------------Goal Average-----
	
	if ($A1601 + $A1602 == 0) {$A1601 ="-"; $A1602 = "-";}
	if ($A1603 + $A1604 == 0) {$A1603 ="-"; $A1604 = "-";}
	if ($A1605 + $A1606 == 0) {$A1605 ="-"; $A1606 = "-";}
	if ($A1607 + $A1608 == 0) {$A1607 ="-"; $A1608 = "-";}
	if ($A1609 + $A1610 == 0) {$A1609 ="-"; $A1610 = "-";}
	if ($A1611 + $A1612 == 0) {$A1611 ="-"; $A1612 = "-";}
	if ($A1613 + $A1614 == 0) {$A1613 ="-"; $A1614 = "-";}
	if ($A1615 + $A1616 == 0) {$A1615 ="-"; $A1616 = "-";}
	if ($A1617 + $A1618 == 0) {$A1617 ="-"; $A1618 = "-";}
	if ($A1619 + $A1620 == 0) {$A1619 ="-"; $A1620 = "-";}
	if ($A1621 + $A1622 == 0) {$A1621 ="-"; $A1622 = "-";}
	if ($A1623 + $A1624 == 0) {$A1623 ="-"; $A1624 = "-";}
	if ($A1625 + $A1626 == 0) {$A1625 ="-"; $A1626 = "-";}
	if ($A1627 + $A1628 == 0) {$A1627 ="-"; $A1628 = "-";}
	if ($A1629 + $A1630 == 0) {$A1629 ="-"; $A1630 = "-";}
	if ($A1631 + $A1632 == 0) {$A1631 ="-"; $A1632 = "-";}
	
	//-------------Points terrain  -----
	
	if ($A1601Pts + $A1602Pts == 0) {$A1601Pts ="-"; $A1602Pts = "-";}
	if ($A1603Pts + $A1604Pts == 0) {$A1603Pts ="-"; $A1604Pts = "-";}
	if ($A1605Pts + $A1606Pts == 0) {$A1605Pts ="-"; $A1606Pts = "-";}
	if ($A1607Pts + $A1608Pts == 0) {$A1607Pts ="-"; $A1608Pts = "-";}
	if ($A1609Pts + $A1610Pts == 0) {$A1609Pts ="-"; $A1610Pts = "-";}
	if ($A1611Pts + $A1612Pts == 0) {$A1611Pts ="-"; $A1612Pts = "-";}
	if ($A1613Pts + $A1614Pts == 0) {$A1613Pts ="-"; $A1614Pts = "-";}
	if ($A1615Pts + $A1616Pts == 0) {$A1615Pts ="-"; $A1616Pts = "-";}
	if ($A1617Pts + $A1618Pts == 0) {$A1617Pts ="-"; $A1618Pts = "-";}
	if ($A1619Pts + $A1620Pts == 0) {$A1619Pts ="-"; $A1620Pts = "-";}
	if ($A1621Pts + $A1622Pts == 0) {$A1621Pts ="-"; $A1622Pts = "-";}
	if ($A1623Pts + $A1624Pts == 0) {$A1623Pts ="-"; $A1624Pts = "-";}
	if ($A1625Pts + $A1626Pts == 0) {$A1625Pts ="-"; $A1626Pts = "-";}
	if ($A1627Pts + $A1628Pts == 0) {$A1627Pts ="-"; $A1628Pts = "-";}
	if ($A1629Pts + $A1630Pts == 0) {$A1629Pts ="-"; $A1630Pts = "-";}
	if ($A1631Pts + $A1632Pts == 0) {$A1631Pts ="-"; $A1632Pts = "-";}
	
	

 //-------8me de finale -------
			//-------------Goal Average ET Points terrain-----		

	if ($A8001 + $A8002 == 0) {$A8001 ="-"; $A8002 = "-"; $A8001Pts ="-"; $A8002Pts = "-";}
	if ($A8003 + $A8004 == 0) {$A8003 ="-"; $A8004 = "-"; $A8003Pts ="-"; $A8004Pts = "-";}
	if ($A8005 + $A8006 == 0) {$A8005 ="-"; $A8006 = "-"; $A8005Pts ="-"; $A8006Pts = "-";}
	if ($A8007 + $A8008 == 0) {$A8007 ="-"; $A8008 = "-"; $A8007Pts ="-"; $A8008Pts = "-";}
	if ($A8009 + $A8010 == 0) {$A8009 ="-"; $A8010 = "-"; $A8009Pts ="-"; $A8010Pts = "-";}
	if ($A8011 + $A8012 == 0) {$A8011 ="-"; $A8012 = "-"; $A8011Pts ="-"; $A8012Pts = "-";}
	if ($A8013 + $A8014 == 0) {$A8013 ="-"; $A8014 = "-"; $A8013Pts ="-"; $A8014Pts = "-";}
	if ($A8015 + $A8016 == 0) {$A8015 ="-"; $A8016 = "-"; $A8015Pts ="-"; $A8016Pts = "-";}
	
	

	
	
	if ($A4001 + $A4002 == 0) {$A4001 ="-"; $A4002 = "-"; $A4001 ="-"; $A4002Pts = "-";}
	if ($A4003 + $A4004 == 0) {$A4003 ="-"; $A4004 = "-"; $A4003 ="-"; $A4004Pts = "-";}
	if ($A4005 + $A4006 == 0) {$A4005 ="-"; $A4006 = "-"; $A4005 ="-"; $A4006Pts = "-";}
	if ($A4007 + $A4008 == 0) {$A4007 ="-"; $A4008 = "-"; $A4007 ="-"; $A4008Pts = "-";}
	
	
	if ($A2001 + $A2002 == 0) {$A2001 ="-"; $A2002 = "-"; $A2001Pts ="-"; $A2002Pts = "-";}
	if ($A2003 + $A2004 == 0) {$A2003 ="-"; $A2004 = "-"; $A2003Pts ="-"; $A2004Pts = "-";}
	
	if ($A1001 + $A1002 == 0) {$A1001 ="-"; $A1002 = "-"; }
	
	 
	 
	 
	 //if ($type > '93200000000')
	 
	 
	 // 32me de finale
	 if (substr($type,1,2) >= '32')
		{
			if (substr($type,1,2) >= '64')
			{

				if ((int)$A3201Pts+(int)$A3202Pts>6) {if ($A3201Pts > $A3202Pts or ($A3201Pts == $A3202Pts and $A3201>$A3202)) {$clubA1601= $clubA3201;} else {$clubA1601= $clubA3202;}} else {$clubA1601="-";}	
				if ((int)$A3203Pts+(int)$A3204Pts>6) {if ($A3203Pts > $A3204Pts or ($A3203Pts == $A3204Pts and $A3203>$A3204)) {$clubA1602= $clubA3203;} else {$clubA1602= $clubA3204;}} else {$clubA1602="-";}
				if ((int)$A3205Pts+(int)$A3206Pts>6) {if ($A3205Pts > $A3206Pts or ($A3205Pts == $A3206Pts and $A3205>$A3206)) {$clubA1603= $clubA3205;} else	{$clubA1603= $clubA3206;}} else {$clubA1603="-";}
				if ((int)$A3207Pts+(int)$A3208Pts>6) {if ($A3207Pts > $A3208Pts or ($A3207Pts == $A3208Pts and $A3207>$A3208)) {$clubA1604= $clubA3207;} else	{$clubA1604= $clubA3208;}} else {$clubA1604="-";}
			
				if ((int)$A3209Pts+$A3210Pts>6) {if ($A3209Pts > $A3210Pts or ($A3209Pts == $A3210Pts and $A3209>$A3210)) {$clubA1605= $clubA3209;} else {$clubA1605= $clubA3210;}} else {$clubA1605="-";}	
				if ((int)$A3211Pts+$A3212Pts>6) {if ($A3211Pts > $A3212Pts or ($A3211Pts == $A3212Pts and $A3211>$A3212)) {$clubA1606= $clubA3211;} else {$clubA1606= $clubA3212;}} else {$clubA1606="-";}
				if ((int)$A3213Pts+$A3214Pts>6) {if ($A3213Pts > $A3214Pts or ($A3213Pts == $A3214Pts and $A3213>$A3214)) {$clubA1607= $clubA3213;} else	{$clubA1607= $clubA3214;}} else {$clubA1607="-";}
				if ((int)$A3215Pts+$A3216Pts>6) {if ($A3215Pts > $A3216Pts or ($A3215Pts == $A3216Pts and $A3215>$A3216)) {$clubA1608= $clubA3215;} else	{$clubA1608= $clubA3216;}} else {$clubA1608="-";}
			
				if ((int)$A3217Pts+(int)$A3218Pts>6) {if ($A3217Pts > $A3218Pts or ($A3217Pts == $A3218Pts and $A3217>$A3218)) {$clubA1609= $clubA3217;} else {$clubA1609= $clubA3218;}} else {$clubA1609="-";}	
				if ((int)$A3219Pts+(int)$A3220Pts>6) {if ($A3219Pts > $A3220Pts or ($A3219Pts == $A3220Pts and $A3219>$A3220)) {$clubA1610= $clubA3219;} else {$clubA1610= $clubA3220;}} else {$clubA1610="-";}
				if ((int)$A3221Pts+(int)$A3222Pts>6) {if ($A3221Pts > $A3222Pts or ($A3221Pts == $A3222Pts and $A3221>$A3222)) {$clubA1611= $clubA3221;} else	{$clubA1611= $clubA3222;}} else {$clubA1611="-";}
				if ((int)$A3223Pts+(int)$A3224Pts>6) {if ($A3223Pts > $A3224Pts or ($A3223Pts == $A3224Pts and $A3223>$A3224)) {$clubA1612= $clubA3223;} else	{$clubA1612= $clubA3224;}} else {$clubA1612="-";}
			
				if ((int)$A3225Pts+(int)$A3226Pts>6) {if ($A3225Pts > $A3226Pts or ($A3225Pts == $A3226Pts and $A3225>$A3226)) {$clubA1613= $clubA3225;} else {$clubA1613= $clubA3226;}} else {$clubA1613="-";}	
				if ((int)$A3227Pts+(int)$A3228Pts>6) {if ($A3227Pts > $A3228Pts or ($A3227Pts == $A3228Pts and $A3227>$A3228)) {$clubA1614= $clubA3227;} else {$clubA1614= $clubA3228;}} else {$clubA1614="-";}
				if ((int)$A3229Pts+(int)$A3230Pts>6) {if ($A3229Pts > $A3230Pts or ($A3229Pts == $A3230Pts and $A3229>$A3230)) {$clubA1615= $clubA3229;} else	{$clubA1615= $clubA3230;}} else {$clubA1615="-";}
				if ((int)$A3231Pts+(int)$A3232Pts>6) {if ($A3231Pts > $A3232Pts or ($A3231Pts == $A3232Pts and $A3231>$A3232)) {$clubA1616= $clubA3231;} else	{$clubA1616= $clubA3232;}} else {$clubA1616="-";}
			
				if ((int)$A3233Pts+(int)$A3234Pts>6) {if ($A3232Pts > $A3234Pts or ($A3233Pts == $A3234Pts and $A3233>$A3234)) {$clubA1617= $clubA3233;} else {$clubA1617= $clubA3234;}} else {$clubA1617="-";}	
				if ((int)$A3235Pts+(int)$A3236Pts>6) {if ($A3235Pts > $A3236Pts or ($A3235Pts == $A3236Pts and $A3235>$A3236)) {$clubA1618= $clubA3235;} else {$clubA1618= $clubA3236;}} else {$clubA1618="-";}
				if ((int)$A3237Pts+(int)$A3238Pts>6) {if ($A3237Pts > $A3238Pts or ($A3237Pts == $A3238Pts and $A3237>$A3238)) {$clubA1619= $clubA3237;} else	{$clubA1619= $clubA3238;}} else {$clubA1619="-";}
				if ((int)$A3239Pts+(int)$A3240Pts>6) {if ($A3239Pts > $A3240Pts or ($A3239Pts == $A3240Pts and $A3239>$A3240)) {$clubA1620= $clubA3239;} else	{$clubA1620= $clubA3240;}} else {$clubA1620="-";}
		
				if ((int)$A3241Pts+(int)$A3242Pts>6) {if ($A3241Pts > $A3242Pts or ($A3241Pts == $A3242Pts and $A3241>$A3242)) {$clubA1621= $clubA3241;} else {$clubA1621= $clubA3242;}} else {$clubA1621="-";}	
				if ((int)$A3243Pts+(int)$A3244Pts>6) {if ($A3243Pts > $A3244Pts or ($A3243Pts == $A3244Pts and $A3243>$A3244)) {$clubA1622= $clubA3243;} else {$clubA1622= $clubA3244;}} else {$clubA1622="-";}
				if ((int)$A3245Pts+(int)$A3246Pts>6) {if ($A3245Pts > $A3246Pts or ($A3245Pts == $A3246Pts and $A3245>$A3246)) {$clubA1623= $clubA3245;} else	{$clubA1623= $clubA3246;}} else {$clubA1623="-";}
				if ((int)$A3247Pts+(int)$A3248Pts>6) {if ($A3247Pts > $A3248Pts or ($A3247Pts == $A3248Pts and $A3247>$A3248)) {$clubA1624= $clubA3247;} else	{$clubA1624= $clubA3248;}} else {$clubA1624="-";}
			
				if ((int)$A3249Pts+(int)$A3250Pts>6) {if ($A3249Pts > $A3250Pts or ($A3249Pts == $A3250Pts and $A3249>$A3250)) {$clubA1625= $clubA3249;} else {$clubA1625= $clubA3250;}} else {$clubA1625="-";}	
				if ((int)$A3251Pts+(int)$A3252Pts>6) {if ($A3251Pts > $A3252Pts or ($A3251Pts == $A3252Pts and $A3251>$A3252)) {$clubA1626= $clubA3251;} else {$clubA1626= $clubA3252;}} else {$clubA1626="-";}
				if ((int)$A3253Pts+(int)$A3254Pts>6) {if ($A3253Pts > $A3254Pts or ($A3253Pts == $A3254Pts and $A3253>$A3254)) {$clubA1627= $clubA3253;} else	{$clubA1627= $clubA3254;}} else {$clubA1627="-";}
				if ((int)$A3255Pts+(int)$A3256Pts>6) {if ($A3255Pts > $A3256Pts or ($A3255Pts == $A3256Pts and $A3255>$A3256)) {$clubA1628= $clubA3255;} else	{$clubA1628= $clubA3256;}} else {$clubA1628="-";}
			
				if ((int)$A3257Pts+(int)$A3258Pts>6) {if ($A3257Pts > $A3258Pts or ($A3257Pts == $A3258Pts and $A3257>$A3258)) {$clubA1629= $clubA3257;} else {$clubA1629= $clubA3258;}} else {$clubA1629="-";}	
				if ((int)$A3259Pts+(int)$A3260Pts>6) {if ($A3259Pts > $A3260Pts or ($A3259Pts == $A3260Pts and $A3259>$A3260)) {$clubA1630= $clubA3259;} else {$clubA1630= $clubA3260;}} else {$clubA1630="-";}
				if ((int)$A3261Pts+(int)$A3262Pts>6) {if ($A3261Pts > $A3262Pts or ($A3261Pts == $A3262Pts and $A3261>$A3262)) {$clubA1631= $clubA3261;} else	{$clubA1631= $clubA3262;}} else {$clubA1631="-";}
				if ((int)$A3263Pts+(int)$A3264Pts>6) {if ($A3253Pts > $A3264Pts or ($A3263Pts == $A3264Pts and $A3263>$A3264)) {$clubA1632= $clubA3263;} else	{$clubA1632= $clubA3264;}} else {$clubA1632="-";}
			
			
			}
			else
			{
			 if ((int)$A3201+(int)$A3202>0) if ($A3201>$A3202) 	$clubA1601= $clubA3201;	else	$clubA1601= $clubA3202; else $clubA1601="-";
			 if ((int)$A3203+(int)$A3204>0) if ($A3203>$A3204)	$clubA1602= $clubA3203;	else	$clubA1602= $clubA3204; else $clubA1602="-";
			 if ((int)$A3205+(int)$A3206>0) if ($A3205>$A3206)	$clubA1603= $clubA3205;	else	$clubA1603= $clubA3206; else $clubA1603="-";
			 if ((int)$A3207+(int)$A3208>0) if ($A3207>$A3208)	$clubA1604= $clubA3207;	else	$clubA1604= $clubA3208; else $clubA1604="-";

			 if ((int)$A3209+(int)$A3210>0) if ($A3209>$A3210)	$clubA1605= $clubA3209;	else	$clubA1605= $clubA3210; else $clubA1605="-";
			 if ((int)$A3211+(int)$A3212>0) if ($A3211>$A3212)	$clubA1606= $clubA3211;	else	$clubA1606= $clubA3212; else $clubA1606="-";
			 if ((int)$A3213+(int)$A3214>0) if ($A3213>$A3214)	$clubA1607= $clubA3213;	else	$clubA1607= $clubA3214; else $clubA1607="-";
			 if ((int)$A3215+(int)$A3216>0) if ($A3215>$A3216)	$clubA1608= $clubA3215;	else	$clubA1608= $clubA3216; else $clubA1608="-";
		 
			 if ((int)$A3217+(int)$A3218>0) if ($A3217>$A3218) 	$clubA1609= $clubA3217;	else	$clubA1609= $clubA3218; else $clubA1609="-";
			 if ((int)$A3219+(int)$A3220>0) if ($A3219>$A3220)	$clubA1610= $clubA3219;	else	$clubA1610= $clubA3220; else $clubA1610="-";
			 if ((int)$A3221+(int)$A3222>0) if ($A3221>$A3222)	$clubA1611= $clubA3221;	else	$clubA1611= $clubA3222; else $clubA1611="-";
			 if ((int)$A3223+(int)$A3224>0) if ($A3223>$A3224)	$clubA1612= $clubA3223;	else	$clubA1612= $clubA3224; else $clubA1612="-";
				  
			 if ((int)$A3225+(int)$A3226>0) if ($A3225>$A3226)	$clubA1613= $clubA3225;	else	$clubA1613= $clubA3226; else $clubA1613="-";
			 if ((int)$A3227+(int)$A3228>0) if ($A3227>$A3228)	$clubA1614= $clubA3227;	else	$clubA1614= $clubA3228; else $clubA1614="-";
			 if ((int)$A3229+(int)$A3230>0) if ($A3229>$A3230)	$clubA1615= $clubA3229;	else	$clubA1615= $clubA3230; else $clubA1615="-";
			 if ((int)$A3231+(int)$A3232>0) if ($A3231>$A3232)	$clubA1616= $clubA3231;	else	$clubA1616= $clubA3232; else $clubA1616="-";

			  
			 if ((int)$A3233+(int)$A3234>0) if ($A3233>$A3234)	$clubA1617= $clubA3233;	else	$clubA1617= $clubA3234; else $clubA1617="-";
			 if ((int)$A3235+(int)$A3236>0) if ($A3235>$A3236)	$clubA1618= $clubA3235;	else	$clubA1618= $clubA3236; else $clubA1618="-";
			 if ((int)$A3237+(int)$A3238>0) if ($A3237>$A3238)	$clubA1619= $clubA3237;	else	$clubA1619= $clubA3238; else $clubA1619="-";
			 if ((int)$A3239+(int)$A3240>0) if ($A3239>$A3240)	$clubA1620= $clubA3239;	else	$clubA1620= $clubA3240; else $clubA1620="-";

			 if ((int)$A3241+(int)$A3242>0) if ($A3241>$A3242)	$clubA1621= $clubA3241;	else	$clubA1621= $clubA3242; else $clubA1621="-";
			 if ((int)$A3243+(int)$A3244>0) if ($A3243>$A3244)	$clubA1622= $clubA3243;	else	$clubA1622= $clubA3244; else $clubA1622="-";
			 if ((int)$A3245+(int)$A3246>0) if ($A3245>$A3246)	$clubA1623= $clubA3245;	else	$clubA1623= $clubA3246; else $clubA1623="-";
			 if ((int)$A3247+(int)$A3248>0) if ($A3247>$A3248)	$clubA1624= $clubA3247;	else	$clubA1624= $clubA3248; else $clubA1624="-";

			 if ((int)$A3249+(int)$A3250>0) if ($A3249>$A3250)	$clubA1625= $clubA3249;	else	$clubA1625= $clubA3250; else $clubA1625="-";
			 if ((int)$A3251+(int)$A3252>0) if ($A3251>$A3252)	$clubA1626= $clubA3251;	else	$clubA1626= $clubA3252; else $clubA1626="-";
			 if ((int)$A3253+(int)$A3254>0) if ($A3253>$A3254)	$clubA1627= $clubA3253;	else	$clubA1627= $clubA3254; else $clubA1627="-";
			 if ((int)$A3255+(int)$A3256>0) if ($A3255>$A3256)	$clubA1628= $clubA3255;	else	$clubA1628= $clubA3256; else $clubA1628="-";

			 if ((int)$A3257+(int)$A3258>0) if ($A3257>$A3258)	$clubA1629= $clubA3257;	else	$clubA1629= $clubA3258; else $clubA1629="-";
			 if ((int)$A3259+(int)$A3260>0) if ($A3259>$A3260)	$clubA1630= $clubA3259;	else	$clubA1630= $clubA3260; else $clubA1630="-";
			 if ((int)$A3261+(int)$A3262>0) if ($A3261>$A3262)	$clubA1631= $clubA3261;	else	$clubA1631= $clubA3262; else $clubA1631="-";
			 if ((int)$A3263+(int)$A3264>0) if ($A3263>$A3264)	$clubA1632= $clubA3263;	else	$clubA1632= $clubA3264; else $clubA1632="-";	
			
			}
		}	
		 //16me de finale
		
		 if (substr($type,3,2) >= '16')
			{
			
				if (substr($type,3,2) >= '32')
				{

					if ((int)$A1601Pts+(int)$A1602Pts>6) {if ($A1601Pts > $A1602Pts or ($A1601Pts == $A1602Pts and $A1601>$A1602)) {$clubA8001= $clubA1601;} else {$clubA8001= $clubA1602;}} else {$clubA8001="-";}	
					if ((int)$A1603Pts+(int)$A1604Pts>6) {if ($A1603Pts > $A1604Pts or ($A1603Pts == $A1604Pts and $A1603>$A1604)) {$clubA8002= $clubA1603;} else {$clubA8002= $clubA1604;}} else {$clubA8002="-";}
					if ((int)$A1605Pts+(int)$A1606Pts>6) {if ($A1605Pts > $A1606Pts or ($A1605Pts == $A1606Pts and $A1605>$A1606)) {$clubA8003= $clubA1605;} else	{$clubA8003= $clubA1606;}} else {$clubA8003="-";}
					if ((int)$A1607Pts+(int)$A1608Pts>6) {if ($A1607Pts > $A1608Pts or ($A1607Pts == $A1608Pts and $A1607>$A1608)) {$clubA8004= $clubA1607;} else	{$clubA8004= $clubA1608;}} else {$clubA8004="-";}
				
					if ((int)$A1609Pts+(int)$A1610Pts>6) {if ($A1609Pts > $A1610Pts or ($A1609Pts == $A1610Pts and $A1609>$A1610)) {$clubA8005= $clubA1609;} else {$clubA8005= $clubA1610;}} else {$clubA8005="-";}	
					if ((int)$A1611Pts+(int)$A1612Pts>6) {if ($A1611Pts > $A1612Pts or ($A1611Pts == $A1612Pts and $A1611>$A1612)) {$clubA8006= $clubA1611;} else {$clubA8006= $clubA1612;}} else {$clubA8006="-";}
					if ((int)$A1613Pts+(int)$A1614Pts>6) {if ($A1613Pts > $A1614Pts or ($A1613Pts == $A1614Pts and $A1613>$A1614)) {$clubA8007= $clubA1613;} else	{$clubA8007= $clubA1614;}} else {$clubA8007="-";}
					if ((int)$A1615Pts+(int)$A1616Pts>6) {if ($A1615Pts > $A1616Pts or ($A1615Pts == $A1616Pts and $A1615>$A1616)) {$clubA8008= $clubA1615;} else	{$clubA8008= $clubA1616;}} else {$clubA8008="-";}
				
					if ((int)$A1617Pts+(int)$A1618Pts>6) {if ($A1617Pts > $A1618Pts or ($A1617Pts == $A1618Pts and $A1617>$A1618)) {$clubA8009= $clubA1617;} else {$clubA8009= $clubA1618;}} else {$clubA8009="-";}	
					if ((int)$A1619Pts+(int)$A1620Pts>6) {if ($A1619Pts > $A1620Pts or ($A1619Pts == $A1620Pts and $A1619>$A1620)) {$clubA8010= $clubA1619;} else {$clubA8010= $clubA1620;}} else {$clubA8010="-";}
					if ((int)$A1621Pts+(int)$A1622Pts>6) 
					{
						if ($A1621Pts > $A1622Pts or ($A1621Pts == $A1622Pts and $A1621>$A1622)) 
						{$clubA8011= $clubA1621;} 
						else	
						{$clubA8011= $clubA1622;}
					} 
					else 
					{
					$clubA8011="-";
					}
					if ((int)$A1623Pts+(int)$A1624Pts>6) {if ($A1623Pts > $A1624Pts or ($A1623Pts == $A1624Pts and $A1623>$A1624)) {$clubA8012= $clubA1623;} else	{$clubA8012= $clubA1624;}} else {$clubA8012="-";}
			
				
					if ((int)$A1625Pts+(int)$A1626Pts>6) {if ($A1625Pts > $A1626Pts or ($A1625Pts == $A1626Pts and $A1625>$A1626)) {$clubA8013= $clubA1625;} else {$clubA8013= $clubA1626;}} else {$clubA8013="-";}	
					if ((int)$A1627Pts+(int)$A1628Pts>6) {if ($A1627Pts > $A1628Pts or ($A1627Pts == $A1628Pts and $A1627>$A1628)) {$clubA8014= $clubA1627;} else {$clubA8014= $clubA1628;}} else {$clubA8014="-";}
					if ((int)$A1629Pts+(int)$A1630Pts>6) {if ($A1629Pts > $A1630Pts or ($A1629Pts == $A1630Pts and $A1629>$A1630)) {$clubA8015= $clubA1629;} else	{$clubA8015= $clubA1630;}} else {$clubA8015="-";}
					if ((int)$A1631Pts+(int)$A1632Pts>6) {if ($A1631Pts > $A1632Pts or ($A1631Pts == $A1632Pts and $A1631>$A1632)) {$clubA8016= $clubA1631;} else	{$clubA8016= $clubA1632;}} else {$clubA8016="-";}
				
				
				}
				else
				{

				 if ((int)$A1601+(int)$A1602 > 0) {if ($A1601>$A1602)	{$clubA8001=$clubA1601;	} else  {$clubA8001=$clubA1602;	}}  else {	$A1601="-";	$A1602="-";	$clubA8001="-";}
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
				}	
			}
			 // 8me de finale
		if (substr($type,5,2) >= '08')
			{
				
				if (substr($type,5,2) == '16')
				{

				if ((int)$A8001Pts+(int)$A8002Pts>6) {if ($A8001Pts > $A8002Pts or ($A8001Pts == $A8002Pts and $A8001>$A8002)) {$clubA4001= $clubA8001;} else {$clubA4001= $clubA8002;}} else {$clubA4001="-";}	
				if ((int)$A8003Pts+(int)$A8004Pts>6) {if ($A8003Pts > $A8004Pts or ($A8003Pts == $A8004Pts and $A8003>$A8004)) {$clubA4002= $clubA8003;} else {$clubA4002= $clubA8004;}} else {$clubA4002="-";}
				if ((int)$A8005Pts+(int)$A8006Pts>6) {if ($A8005Pts > $A8006Pts or ($A8005Pts == $A8006Pts and $A8005>$A8006)) {$clubA4003= $clubA8005;} else	{$clubA4003= $clubA8006;}} else {$clubA4003="-";}
				if ((int)$A8007Pts+(int)$A8008Pts>6) {if ($A8007Pts > $A8008Pts or ($A8007Pts == $A8008Pts and $A8007>$A8008)) {$clubA4004= $clubA8007;} else	{$clubA4004= $clubA8008;}} else {$clubA4004="-";}
				
				if ((int)$A8009Pts+(int)$A8010Pts>6) {if ($A8009Pts > $A8010Pts or ($A8009Pts == $A8010Pts and $A8009>$A8010)) {$clubA4005= $clubA8009;} else {$clubA4005= $clubA8010;}} else {$clubA4005="-";}	
				if ((int)$A8011Pts+(int)$A8012Pts>6) {if ($A8011Pts > $A8012Pts or ($A8011Pts == $A8012Pts and $A8011>$A8012)) {$clubA4006= $clubA8011;} else {$clubA4006= $clubA8012;}} else {$clubA4006="-";}
				if ((int)$A8013Pts+(int)$A8014Pts>6) {if ($A8013Pts > $A8014Pts or ($A8013Pts == $A8014Pts and $A8013>$A8014)) {$clubA4007= $clubA8013;} else	{$clubA4007= $clubA8014;}} else {$clubA4007="-";}
				if ((int)$A8015Pts+(int)$A8016Pts>6) {if ($A8015Pts > $A8016Pts or ($A8015Pts == $A8016Pts and $A8015>$A8016)) {$clubA4008= $clubA8015;} else	{$clubA4008= $clubA8016;}} else {$clubA4008="-";}
				
				}
				else
				{				

					 if ((int)$A8001+(int)$A8002 > 0)	{if ($A8001>$A8002)	{$clubA4001=$clubA8001;	} else	{$clubA4001=$clubA8002;	}}	else{	$A8001="-";	$A8002="-";	$clubA4001="-";}
					 if ((int)$A8003+(int)$A8004 > 0)	{if ($A8003>$A8004)	{$clubA4002=$clubA8003;	} else	{$clubA4002=$clubA8004;	}}	else{	$A8003="-";	$A8004="-";	$clubA4002="-";}
					 if ((int)$A8005+(int)$A8006 > 0)	{if ($A8005>$A8006)	{$clubA4003=$clubA8005;	} else	{$clubA4003=$clubA8006;	}}	else{	$A8005="-";	$A8006="-";	$clubA4003="-";}
					 if ((int)$A8007+(int)$A8008 > 0)	{if ($A8007>$A8008)	{$clubA4004=$clubA8007;	} else	{$clubA4004=$clubA8008;	}}	else{	$A8007="-";	$A8008="-";	$clubA4004="-";}
					 if ((int)$A8009+(int)$A8010 > 0)	{if ($A8009>$A8010)	{$clubA4005=$clubA8009;	} else	{$clubA4005=$clubA8010;	}}	else{	$A8009="-";	$A8010="-";	$clubA4005="-";}
					 if ((int)$A8011+(int)$A8012 > 0)	{if ($A8011>$A8012)	{$clubA4006=$clubA8011;	} else	{$clubA4006=$clubA8012;	}}	else{	$A8011="-";	$A8012="-";	$clubA4006="-";}
					 if ((int)$A8013+(int)$A8014 > 0)	{if ($A8013>$A8014)	{$clubA4007=$clubA8013;	} else	{$clubA4007=$clubA8014;	}}	else{	$A8013="-";	$A8014="-";	$clubA4007="-";}
					 if ((int)$A8015+(int)$A8016 > 0)	{if ($A8015>$A8016)	{$clubA4008=$clubA8015;	} else	{$clubA4008=$clubA8016;	}}	else{	$A8015="-";	$A8016="-";	$clubA4008="-";}
					}
				}	
					// Quarts de finale
					if (substr($type,7,2) >= '04')
					{
					 
						if (substr($type,7,2) == '08')
						{

						if ((int)$A4001Pts+(int)$A4002Pts>6) {if ($A4001Pts > $A4002Pts or ($A4001Pts == $A4002Pts and $A4001>$A4002)) {$clubA2001= $clubA4001;} else {$clubA2001= $clubA4002;}} else {$clubA2001="-"; }	
						if ((int)$A4003Pts+(int)$A4004Pts>6) {if ($A4003Pts > $A4004Pts or ($A4003Pts == $A4004Pts and $A4003>$A4004)) {$clubA2002= $clubA4003;} else {$clubA2002= $clubA4004;}} else {$clubA2002="-";}
						if ((int)$A4005Pts+(int)$A4006Pts>6) {if ($A4005Pts > $A4006Pts or ($A4005Pts == $A4006Pts and $A4005>$A4006)) {$clubA2003= $clubA4005;} else	{$clubA2003= $clubA4006;}} else {$clubA2003="-";}
						if ((int)$A4007Pts+(int)$A4008Pts>6) {if ($A4007Pts > $A4008Pts or ($A4007Pts == $A4008Pts and $A4007>$A4008)) {$clubA2004= $clubA4007;} else	{$clubA2004= $clubA4008;}} else {$clubA2004="-";}
						
					
						}
						else
						{			

						 if ((int)$A4001+(int)$A4002 > 0)	{if ($A4001>$A4002)	{$clubA2001=$clubA4001;	} else	{$clubA2001=$clubA4002;	}}	else{	$A4001="-";	$A4002="-";	$clubA2001="-";}
						 if ((int)$A4003+(int)$A4004 > 0)	{if ($A4003>$A4004)	{$clubA2002=$clubA4003;	} else	{$clubA2002=$clubA4004;	}}	else{	$A4003="-";	$A4004="-";	$clubA2002="-";}
						 if ((int)$A4005+(int)$A4006 > 0)	{if ($A4005>$A4006)	{$clubA2003=$clubA4005;	} else	{$clubA2003=$clubA4006;	}}	else{	$A4005="-";	$A4006="-";	$clubA2003="-";}
						 if ((int)$A4007+(int)$A4008 > 0)	{if ($A4007>$A4008)	{$clubA2004=$clubA4007;	} else	{$clubA2004=$clubA4008;	}}	else{	$A4007="-";	$A4008="-";	$clubA2004="-";}
						
						
						
						}	
						
					}




						// Demi finale
						if (substr($type,9,2) >= '02')
						{
							if (substr($type,9,2) == '04')
							{

							if ((int)$A2001Pts+(int)$A2002Pts>6) {if ($A2001Pts > $A2002Pts or ($A2001Pts == $A2002Pts and $A2001>$A2002)) {$clubA1001= $clubA2001;} else {$clubA1001= $clubA2002;}} else {$clubA1001="-";}	
							if ((int)$A2003Pts+(int)$A2004Pts>6)
								{
									if ($A2003Pts > $A2004Pts or ($A2003Pts == $A2004Pts and $A2003>$A2004))
									{
										$clubA1002= $clubA2003;
									} 
									else 
									{
									$clubA1002= $clubA2004;
									}
								} 
								else {
								$clubA1002="-";
								}
												
							}
							else
							{			
							
							if ((int)$A2001+(int)$A2002 > 0)	{if ($A2001>$A2002)	{$clubA1001=$clubA2001;	} else	{$clubA1001=$clubA2002;	}}	else{	$A2001="-";	$A2002="-";	$clubA1001="-";}
							if ((int)$A2003+(int)$A2004 > 0)	{if ($A2003>$A2004)	{$clubA1002=$clubA2003;	} else	{$clubA1002=$clubA2004;	}}	else{	$A2003="-";	$A2004="-";	$clubA1002="-";}
							}
						}	
						
						//finale
						 if ((int)$A1001+(int)$A1002 > 0)	{if ($A2001>$A2002)	{$clubA1001=$clubA2001;	} else	{$clubA1001=$clubA2002;	}}	else{	$A1001="-";	$A1002="-";}	
						
						
		
traitementScores (3201, 3264);	
date2019($division, $annee, $bdd);



 // 32me de finale
	 if (substr($type,1,2) >= '32')
		{
			if (substr($type,1,2) >= '64')
			{

				if ((int)$A3201Pts+(int)$A3202Pts>6) {if ($A3201Pts > $A3202Pts or ($A3201Pts == $A3202Pts and $A3201>$A3202)) {$clubAB1601= $clubAB3201;} else {$clubAB1601= $clubAB3202;}} else {$clubAB1601="-";}	
				if ((int)$A3203Pts+(int)$A3204Pts>6) {if ($A3203Pts > $A3204Pts or ($A3203Pts == $A3204Pts and $A3203>$A3204)) {$clubAB1602= $clubAB3203;} else {$clubAB1602= $clubAB3204;}} else {$clubAB1602="-";}
				if ((int)$A3205Pts+(int)$A3206Pts>6) {if ($A3205Pts > $A3206Pts or ($A3205Pts == $A3206Pts and $A3205>$A3206)) {$clubAB1603= $clubAB3205;} else	{$clubAB1603= $clubAB3206;}} else {$clubAB1603="-";}
				if ((int)$A3207Pts+(int)$A3208Pts>6) {if ($A3207Pts > $A3208Pts or ($A3207Pts == $A3208Pts and $A3207>$A3208)) {$clubAB1604= $clubAB3207;} else	{$clubAB1604= $clubAB3208;}} else {$clubAB1604="-";}
			
				if ((int)$A3209Pts+(int)$A3210Pts>6) {if ($A3209Pts > $A3210Pts or ($A3209Pts == $A3210Pts and $A3209>$A3210)) {$clubAB1605= $clubAB3209;} else {$clubAB1605= $clubAB3210;}} else {$clubAB1605="-";}	
				if ((int)$A3211Pts+(int)$A3212Pts>6) {if ($A3211Pts > $A3212Pts or ($A3211Pts == $A3212Pts and $A3211>$A3212)) {$clubAB1606= $clubAB3211;} else {$clubAB1606= $clubAB3212;}} else {$clubAB1606="-";}
				if ((int)$A3213Pts+(int)$A3214Pts>6) {if ($A3213Pts > $A3214Pts or ($A3213Pts == $A3214Pts and $A3213>$A3214)) {$clubAB1607= $clubAB3213;} else	{$clubAB1607= $clubAB3214;}} else {$clubAB1607="-";}
				if ((int)$A3215Pts+(int)$A3216Pts>6) {if ($A3215Pts > $A3216Pts or ($A3215Pts == $A3216Pts and $A3215>$A3216)) {$clubAB1608= $clubAB3215;} else	{$clubAB1608= $clubAB3216;}} else {$clubAB1608="-";}
			
				if ((int)$A3217Pts+(int)$A3218Pts>6) {if ($A3217Pts > $A3218Pts or ($A3217Pts == $A3218Pts and $A3217>$A3218)) {$clubAB1609= $clubAB3217;} else {$clubAB1609= $clubAB3218;}} else {$clubAB1609="-";}	
				if ((int)$A3219Pts+(int)$A3220Pts>6) {if ($A3219Pts > $A3220Pts or ($A3219Pts == $A3220Pts and $A3219>$A3220)) {$clubAB1610= $clubAB3219;} else {$clubAB1610= $clubAB3220;}} else {$clubAB1610="-";}
				if ((int)$A3221Pts+(int)$A3222Pts>6) {if ($A3221Pts > $A3222Pts or ($A3221Pts == $A3222Pts and $A3221>$A3222)) {$clubAB1611= $clubAB3221;} else	{$clubAB1611= $clubAB3222;}} else {$clubAB1611="-";}
				if ((int)$A3223Pts+(int)$A3224Pts>6) {if ($A3223Pts > $A3224Pts or ($A3223Pts == $A3224Pts and $A3223>$A3224)) {$clubAB1612= $clubAB3223;} else	{$clubAB1612= $clubAB3224;}} else {$clubAB1612="-";}
			
				if ((int)$A3225Pts+(int)$A3226Pts>6) {if ($A3225Pts > $A3226Pts or ($A3225Pts == $A3226Pts and $A3225>$A3226)) {$clubAB1613= $clubAB3225;} else {$clubAB1613= $clubAB3226;}} else {$clubAB1613="-";}	
				if ((int)$A3227Pts+(int)$A3228Pts>6) {if ($A3227Pts > $A3228Pts or ($A3227Pts == $A3228Pts and $A3227>$A3228)) {$clubAB1614= $clubAB3227;} else {$clubAB1614= $clubAB3228;}} else {$clubAB1614="-";}
				if ((int)$A3229Pts+(int)$A3230Pts>6) {if ($A3229Pts > $A3230Pts or ($A3229Pts == $A3230Pts and $A3229>$A3230)) {$clubAB1615= $clubAB3229;} else	{$clubAB1615= $clubAB3230;}} else {$clubAB1615="-";}
				if ((int)$A3231Pts+(int)$A3232Pts>6) {if ($A3231Pts > $A3232Pts or ($A3231Pts == $A3232Pts and $A3231>$A3232)) {$clubAB1616= $clubAB3231;} else	{$clubAB1616= $clubAB3232;}} else {$clubAB1616="-";}
			
				if ((int)$A3233Pts+(int)$A3234Pts>6) {if ($A3232Pts > $A3234Pts or ($A3233Pts == $A3234Pts and $A3233>$A3234)) {$clubAB1617= $clubAB3233;} else {$clubAB1617= $clubAB3234;}} else {$clubAB1617="-";}	
				if ((int)$A3235Pts+(int)$A3236Pts>6) {if ($A3235Pts > $A3236Pts or ($A3235Pts == $A3236Pts and $A3235>$A3236)) {$clubAB1618= $clubAB3235;} else {$clubAB1618= $clubAB3236;}} else {$clubAB1618="-";}
				if ((int)$A3237Pts+(int)$A3238Pts>6) {if ($A3237Pts > $A3238Pts or ($A3237Pts == $A3238Pts and $A3237>$A3238)) {$clubAB1619= $clubAB3237;} else	{$clubAB1619= $clubAB3238;}} else {$clubAB1619="-";}
				if ((int)$A3239Pts+(int)$A3240Pts>6) {if ($A3239Pts > $A3240Pts or ($A3239Pts == $A3240Pts and $A3239>$A3240)) {$clubAB1620= $clubAB3239;} else	{$clubAB1620= $clubAB3240;}} else {$clubAB1620="-";}
		
				if ((int)$A3241Pts+(int)$A3242Pts>6) {if ($A3241Pts > $A3242Pts or ($A3241Pts == $A3242Pts and $A3241>$A3242)) {$clubAB1621= $clubAB3241;} else {$clubAB1621= $clubAB3242;}} else {$clubAB1621="-";}	
				if ((int)$A3243Pts+(int)$A3244Pts>6) {if ($A3243Pts > $A3244Pts or ($A3243Pts == $A3244Pts and $A3243>$A3244)) {$clubAB1622= $clubAB3243;} else {$clubAB1622= $clubAB3244;}} else {$clubAB1622="-";}
				if ((int)$A3245Pts+(int)$A3246Pts>6) {if ($A3245Pts > $A3246Pts or ($A3245Pts == $A3246Pts and $A3245>$A3246)) {$clubAB1623= $clubAB3245;} else	{$clubAB1623= $clubAB3246;}} else {$clubAB1623="-";}
				if ((int)$A3247Pts+(int)$A3248Pts>6) {if ($A3247Pts > $A3248Pts or ($A3247Pts == $A3248Pts and $A3247>$A3248)) {$clubAB1624= $clubAB3247;} else	{$clubAB1624= $clubAB3248;}} else {$clubAB1624="-";}
			
				if ((int)$A3249Pts+(int)$A3250Pts>6) {if ($A3249Pts > $A3250Pts or ($A3249Pts == $A3250Pts and $A3249>$A3250)) {$clubAB1625= $clubAB3249;} else {$clubAB1625= $clubAB3250;}} else {$clubAB1625="-";}	
				if ((int)$A3251Pts+(int)$A3252Pts>6) {if ($A3251Pts > $A3252Pts or ($A3251Pts == $A3252Pts and $A3251>$A3252)) {$clubAB1626= $clubAB3251;} else {$clubAB1626= $clubAB3252;}} else {$clubAB1626="-";}
				if ((int)$A3253Pts+(int)$A3254Pts>6) {if ($A3253Pts > $A3254Pts or ($A3253Pts == $A3254Pts and $A3253>$A3254)) {$clubAB1627= $clubAB3253;} else	{$clubAB1627= $clubAB3254;}} else {$clubAB1627="-";}
				if ((int)$A3255Pts+(int)$A3256Pts>6) {if ($A3255Pts > $A3256Pts or ($A3255Pts == $A3256Pts and $A3255>$A3256)) {$clubAB1628= $clubAB3255;} else	{$clubAB1628= $clubAB3256;}} else {$clubAB1628="-";}
			
				if ((int)$A3257Pts+(int)$A3258Pts>6) {if ($A3257Pts > $A3258Pts or ($A3257Pts == $A3258Pts and $A3257>$A3258)) {$clubAB1629= $clubAB3257;} else {$clubAB1629= $clubAB3258;}} else {$clubAB1629="-";}	
				if ((int)$A3259Pts+(int)$A3260Pts>6) {if ($A3259Pts > $A3260Pts or ($A3259Pts == $A3260Pts and $A3259>$A3260)) {$clubAB1630= $clubAB3259;} else {$clubAB1630= $clubAB3260;}} else {$clubAB1630="-";}
				if ((int)$A3261Pts+(int)$A3262Pts>6) {if ($A3261Pts > $A3262Pts or ($A3261Pts == $A3262Pts and $A3261>$A3262)) {$clubAB1631= $clubAB3261;} else	{$clubAB1631= $clubAB3262;}} else {$clubAB1631="-";}
				if ((int)$A3263Pts+(int)$A3264Pts>6) {if ($A3253Pts > $A3264Pts or ($A3263Pts == $A3264Pts and $A3263>$A3264)) {$clubAB1632= $clubAB3263;} else	{$clubAB1632= $clubAB3264;}} else {$clubAB1632="-";}
			
			
			}
			else
			{
			 if ((int)$A3201+(int)$A3202>0) if ($A3201>$A3202) 	$clubAB1601= $clubAB3201;	else	$clubAB1601= $clubAB3202; else $clubAB1601="-";
			 if ((int)$A3203+(int)$A3204>0) if ($A3203>$A3204)	$clubAB1602= $clubAB3203;	else	$clubAB1602= $clubAB3204; else $clubAB1602="-";
			 if ((int)$A3205+(int)$A3206>0) if ($A3205>$A3206)	$clubAB1603= $clubAB3205;	else	$clubAB1603= $clubAB3206; else $clubAB1603="-";
			 if ((int)$A3207+(int)$A3208>0) if ($A3207>$A3208)	$clubAB1604= $clubAB3207;	else	$clubAB1604= $clubAB3208; else $clubAB1604="-";

			 if ((int)$A3209+(int)$A3210>0) if ($A3209>$A3210)	$clubAB1605= $clubAB3209;	else	$clubAB1605= $clubAB3210; else $clubAB1605="-";
			 if ((int)$A3211+(int)$A3212>0) if ($A3211>$A3212)	$clubAB1606= $clubAB3211;	else	$clubAB1606= $clubAB3212; else $clubAB1606="-";
			 if ((int)$A3213+(int)$A3214>0) if ($A3213>$A3214)	$clubAB1607= $clubAB3213;	else	$clubAB1607= $clubAB3214; else $clubAB1607="-";
			 if ((int)$A3215+(int)$A3216>0) if ($A3215>$A3216)	$clubAB1608= $clubAB3215;	else	$clubAB1608= $clubAB3216; else $clubAB1608="-";
		 
			 if ((int)$A3217+(int)$A3218>0) if ($A3217>$A3218) 	$clubAB1609= $clubAB3217;	else	$clubAB1609= $clubAB3218; else $clubAB1609="-";
			 if ((int)$A3219+(int)$A3220>0) if ($A3219>$A3220)	$clubAB1610= $clubAB3219;	else	$clubAB1610= $clubAB3220; else $clubAB1610="-";
			 if ((int)$A3221+(int)$A3222>0) if ($A3221>$A3222)	$clubAB1611= $clubAB3221;	else	$clubAB1611= $clubAB3222; else $clubAB1611="-";
			 if ((int)$A3223+(int)$A3224>0) if ($A3223>$A3224)	$clubAB1612= $clubAB3223;	else	$clubAB1612= $clubAB3224; else $clubAB1612="-";
				  
			 if ((int)$A3225+(int)$A3226>0) if ($A3225>$A3226)	$clubAB1613= $clubAB3225;	else	$clubAB1613= $clubAB3226; else $clubAB1613="-";
			 if ((int)$A3227+(int)$A3228>0) if ($A3227>$A3228)	$clubAB1614= $clubAB3227;	else	$clubAB1614= $clubAB3228; else $clubAB1614="-";
			 if ((int)$A3229+(int)$A3230>0) if ($A3229>$A3230)	$clubAB1615= $clubAB3229;	else	$clubAB1615= $clubAB3230; else $clubAB1615="-";
			 if ((int)$A3231+(int)$A3232>0) if ($A3231>$A3232)	$clubAB1616= $clubAB3231;	else	$clubAB1616= $clubAB3232; else $clubAB1616="-";

			  
			 if ((int)$A3233+(int)$A3234>0) if ($A3233>$A3234)	$clubAB1617= $clubAB3233;	else	$clubAB1617= $clubAB3234; else $clubAB1617="-";
			 if ((int)$A3235+(int)$A3236>0) if ($A3235>$A3236)	$clubAB1618= $clubAB3235;	else	$clubAB1618= $clubAB3236; else $clubAB1618="-";
			 if ((int)$A3237+(int)$A3238>0) if ($A3237>$A3238)	$clubAB1619= $clubAB3237;	else	$clubAB1619= $clubAB3238; else $clubAB1619="-";
			 if ((int)$A3239+(int)$A3240>0) if ($A3239>$A3240)	$clubAB1620= $clubAB3239;	else	$clubAB1620= $clubAB3240; else $clubAB1620="-";

			 if ((int)$A3241+(int)$A3242>0) if ($A3241>$A3242)	$clubAB1621= $clubAB3241;	else	$clubAB1621= $clubAB3242; else $clubAB1621="-";
			 if ((int)$A3243+(int)$A3244>0) if ($A3243>$A3244)	$clubAB1622= $clubAB3243;	else	$clubAB1622= $clubAB3244; else $clubAB1622="-";
			 if ((int)$A3245+(int)$A3246>0) if ($A3245>$A3246)	$clubAB1623= $clubAB3245;	else	$clubAB1623= $clubAB3246; else $clubAB1623="-";
			 if ((int)$A3247+(int)$A3248>0) if ($A3247>$A3248)	$clubAB1624= $clubAB3247;	else	$clubAB1624= $clubAB3248; else $clubAB1624="-";

			 if ((int)$A3249+(int)$A3250>0) if ($A3249>$A3250)	$clubAB1625= $clubAB3249;	else	$clubAB1625= $clubAB3250; else $clubAB1625="-";
			 if ((int)$A3251+(int)$A3252>0) if ($A3251>$A3252)	$clubAB1626= $clubAB3251;	else	$clubAB1626= $clubAB3252; else $clubAB1626="-";
			 if ((int)$A3253+(int)$A3254>0) if ($A3253>$A3254)	$clubAB1627= $clubAB3253;	else	$clubAB1627= $clubAB3254; else $clubAB1627="-";
			 if ((int)$A3255+(int)$A3256>0) if ($A3255>$A3256)	$clubAB1628= $clubAB3255;	else	$clubAB1628= $clubAB3256; else $clubAB1628="-";

			 if ((int)$A3257+(int)$A3258>0) if ($A3257>$A3258)	$clubAB1629= $clubAB3257;	else	$clubAB1629= $clubAB3258; else $clubAB1629="-";
			 if ((int)$A3259+(int)$A3260>0) if ($A3259>$A3260)	$clubAB1630= $clubAB3259;	else	$clubAB1630= $clubAB3260; else $clubAB1630="-";
			 if ((int)$A3261+(int)$A3262>0) if ($A3261>$A3262)	$clubAB1631= $clubAB3261;	else	$clubAB1631= $clubAB3262; else $clubAB1631="-";
			 if ((int)$A3263+(int)$A3264>0) if ($A3263>$A3264)	$clubAB1632= $clubAB3263;	else	$clubAB1632= $clubAB3264; else $clubAB1632="-";	
			
			}
		}	
		 //16me de finale
		
		 if (substr($type,3,2) >= '16')
			{
			
				if (substr($type,3,2) >= '32')
				{

					if ((int)$A1601Pts+(int)$A1602Pts>6) {if ($A1601Pts > $A1602Pts or ($A1601Pts == $A1602Pts and $A1601>$A1602)) {$clubAB8001= $clubAB1601;} else {$clubAB8001= $clubAB1602;}} else {$clubAB8001="-";}	
					if ((int)$A1603Pts+(int)$A1604Pts>6) {if ($A1603Pts > $A1604Pts or ($A1603Pts == $A1604Pts and $A1603>$A1604)) {$clubAB8002= $clubAB1603;} else {$clubAB8002= $clubAB1604;}} else {$clubAB8002="-";}
					if ((int)$A1605Pts+(int)$A1606Pts>6) {if ($A1605Pts > $A1606Pts or ($A1605Pts == $A1606Pts and $A1605>$A1606)) {$clubAB8003= $clubAB1605;} else	{$clubAB8003= $clubAB1606;}} else {$clubAB8003="-";}
					if ((int)$A1607Pts+(int)$A1608Pts>6) {if ($A1607Pts > $A1608Pts or ($A1607Pts == $A1608Pts and $A1607>$A1608)) {$clubAB8004= $clubAB1607;} else	{$clubAB8004= $clubAB1608;}} else {$clubAB8004="-";}
				
					if ((int)$A1609Pts+(int)$A1610Pts>6) {if ($A1609Pts > $A1610Pts or ($A1609Pts == $A1610Pts and $A1609>$A1610)) {$clubAB8005= $clubAB1609;} else {$clubAB8005= $clubAB1610;}} else {$clubAB8005="-";}	
					if ((int)$A1611Pts+(int)$A1612Pts>6) {if ($A1611Pts > $A1612Pts or ($A1611Pts == $A1612Pts and $A1611>$A1612)) {$clubAB8006= $clubAB1611;} else {$clubAB8006= $clubAB1612;}} else {$clubAB8006="-";}
					if ((int)$A1613Pts+(int)$A1614Pts>6) {if ($A1613Pts > $A1614Pts or ($A1613Pts == $A1614Pts and $A1613>$A1614)) {$clubAB8007= $clubAB1613;} else	{$clubAB8007= $clubAB1614;}} else {$clubAB8007="-";}
					if ((int)$A1615Pts+(int)$A1616Pts>6) {if ($A1615Pts > $A1616Pts or ($A1615Pts == $A1616Pts and $A1615>$A1616)) {$clubAB8008= $clubAB1615;} else	{$clubAB8008= $clubAB1616;}} else {$clubAB8008="-";}
				
					if ((int)$A1617Pts+(int)$A1618Pts>6) {if ($A1617Pts > $A1618Pts or ($A1617Pts == $A1618Pts and $A1617>$A1618)) {$clubAB8009= $clubAB1617;} else {$clubAB8009= $clubAB1618;}} else {$clubAB8009="-";}	
					if ((int)$A1619Pts+(int)$A1620Pts>6) {if ($A1619Pts > $A1620Pts or ($A1619Pts == $A1620Pts and $A1619>$A1620)) {$clubAB8010= $clubAB1619;} else {$clubAB8010= $clubAB1620;}} else {$clubAB8010="-";}
					if ((int)$A1621Pts+(int)$A1622Pts>6) 
					{
						if ($A1621Pts > $A1622Pts or ($A1621Pts == $A1622Pts and $A1621>$A1622)) 
						{$clubAB8011= $clubAB1621;} 
						else	
						{$clubAB8011= $clubAB1622;}
					} 
					else 
					{
					$clubAB8011="-";
					}
					if ((int)$A1623Pts+(int)$A1624Pts>6) {if ($A1623Pts > $A1624Pts or ($A1623Pts == $A1624Pts and $A1623>$A1624)) {$clubAB8012= $clubAB1623;} else	{$clubAB8012= $clubAB1624;}} else {$clubAB8012="-";}
			
				
					if ((int)$A1625Pts+(int)$A1626Pts>6) {if ($A1625Pts > $A1626Pts or ($A1625Pts == $A1626Pts and $A1625>$A1626)) {$clubAB8013= $clubAB1625;} else {$clubAB8013= $clubAB1626;}} else {$clubAB8013="-";}	
					if ((int)$A1627Pts+(int)$A1628Pts>6) {if ($A1627Pts > $A1628Pts or ($A1627Pts == $A1628Pts and $A1627>$A1628)) {$clubAB8014= $clubAB1627;} else {$clubAB8014= $clubAB1628;}} else {$clubAB8014="-";}
					if ((int)$A1629Pts+(int)$A1630Pts>6) {if ($A1629Pts > $A1630Pts or ($A1629Pts == $A1630Pts and $A1629>$A1630)) {$clubAB8015= $clubAB1629;} else	{$clubAB8015= $clubAB1630;}} else {$clubAB8015="-";}
					if ((int)$A1631Pts+(int)$A1632Pts>6) {if ($A1631Pts > $A1632Pts or ($A1631Pts == $A1632Pts and $A1631>$A1632)) {$clubAB8016= $clubAB1631;} else	{$clubAB8016= $clubAB1632;}} else {$clubAB8016="-";}
				
				
				}
				else
				{

				 if ((int)$A1601+(int)$A1602 > 0) {if ($A1601>$A1602)	{$clubAB8001=$clubAB1601;	} else  {$clubAB8001=$clubAB1602; }}  else {	$A1601="-";	$A1602="-";	$clubAB8001="-";}
				 if ((int)$A1603+(int)$A1604 > 0)	{if ($A1603>$A1604)	{$clubAB8002=$clubAB1603;	} else  {$clubAB8002=$clubAB1604; }}  else {  $A1603="-";	$A1604="-";	$clubAB8002="-";}
				 if ((int)$A1605+(int)$A1606 > 0)	{if ($A1605>$A1606)	{$clubAB8003=$clubAB1605;	} else  {$clubAB8003=$clubAB1606; }}  else {  $A1605="-";	$A1606="-";	$clubAB8003="-";}
				 if ((int)$A1607+(int)$A1608 > 0)	{if ($A1607>$A1608)	{$clubAB8004=$clubAB1607;	} else  {$clubAB8004=$clubAB1608; }}  else {  $A1607="-";	$A1608="-";	$clubAB8004="-";}
				 if ((int)$A1609+(int)$A1610 > 0)	{if ($A1609>$A1610)	{$clubAB8005=$clubAB1609;	} else  {$clubAB8005=$clubAB1610; }}  else {  $A1609="-";	$A1610="-";	$clubAB8005="-";}
				 if ((int)$A1611+(int)$A1612 > 0)	{if ($A1611>$A1612)	{$clubAB8006=$clubAB1611;	} else  {$clubAB8006=$clubAB1612; }}  else {  $A1611="-";	$A1612="-";	$clubAB8006="-";}
				 if ((int)$A1613+(int)$A1614 > 0)	{if ($A1613>$A1614)	{$clubAB8007=$clubAB1613;	} else  {$clubAB8007=$clubAB1614; }}  else {  $A1613="-";	$A1614="-";	$clubAB8007="-";}
				 if ((int)$A1615+(int)$A1616 > 0)	{if ($A1615>$A1616)	{$clubAB8008=$clubAB1615;	} else  {$clubAB8008=$clubAB1616; }}  else {  $A1615="-";	$A1616="-";	$clubAB8008="-";}
				 if ((int)$A1617+(int)$A1618 > 0)	{if ($A1617>$A1618)	{$clubAB8009=$clubAB1617;	} else  {$clubAB8009=$clubAB1618; }}  else {  $A1617="-";	$A1618="-";	$clubAB8009="-";}
				 if ((int)$A1619+(int)$A1620 > 0)	{if ($A1619>$A1620)	{$clubAB8010=$clubAB1619;	} else  {$clubAB8010=$clubAB1620; }}  else {  $A1619="-";	$A1620="-";	$clubAB8010="-";}
				 if ((int)$A1621+(int)$A1622 > 0)	{if ($A1621>$A1622)	{$clubAB8011=$clubAB1621;	} else  {$clubAB8011=$clubAB1622; }}  else {  $A1621="-";	$A1622="-";	$clubAB8011="-";}
				 if ((int)$A1623+(int)$A1624 > 0)	{if ($A1623>$A1624)	{$clubAB8012=$clubAB1623;	} else  {$clubAB8012=$clubAB1624; }}  else {  $A1623="-";	$A1624="-";	$clubAB8012="-";}
				 if ((int)$A1625+(int)$A1626 > 0)	{if ($A1625>$A1626)	{$clubAB8013=$clubAB1625;	} else  {$clubAB8013=$clubAB1626; }}  else {  $A1625="-";	$A1626="-";	$clubAB8013="-";}
				 if ((int)$A1627+(int)$A1628 > 0)	{if ($A1627>$A1628)	{$clubAB8014=$clubAB1627;	} else  {$clubAB8014=$clubAB1628; }}  else {  $A1627="-";	$A1628="-";	$clubAB8014="-";}			
				 if ((int)$A1629+(int)$A1630 > 0)	{if ($A1629>$A1630)	{$clubAB8015=$clubAB1629;	} else  {$clubAB8015=$clubAB1630; }}  else {  $A1629="-";	$A1630="-";	$clubAB8015="-";}			
				 if ((int)$A1631+(int)$A1632 > 0)	{if ($A1631>$A1632)	{$clubAB8016=$clubAB1631;	} else  {$clubAB8016=$clubAB1632; }}  else {  $A1631="-";	$A1632="-";	$clubAB8016="-";}			
				}	
			}
			 // 8me de finale
		if (substr($type,5,2) >= '08')
			{
				
				if (substr($type,5,2) == '16')
				{

				if ((int)$A8001Pts+(int)$A8002Pts>6) {if ($A8001Pts > $A8002Pts or ($A8001Pts == $A8002Pts and $A8001>$A8002)) {$clubAB4001= $clubAB8001;} else {$clubAB4001= $clubAB8002;}} else {$clubAB4001="-";}	
				if ((int)$A8003Pts+(int)$A8004Pts>6) {if ($A8003Pts > $A8004Pts or ($A8003Pts == $A8004Pts and $A8003>$A8004)) {$clubAB4002= $clubAB8003;} else {$clubAB4002= $clubAB8004;}} else {$clubAB4002="-";}
				if ((int)$A8005Pts+(int)$A8006Pts>6) {if ($A8005Pts > $A8006Pts or ($A8005Pts == $A8006Pts and $A8005>$A8006)) {$clubAB4003= $clubAB8005;} else {$clubAB4003= $clubAB8006;}} else {$clubAB4003="-";}
				if ((int)$A8007Pts+(int)$A8008Pts>6) {if ($A8007Pts > $A8008Pts or ($A8007Pts == $A8008Pts and $A8007>$A8008)) {$clubAB4004= $clubAB8007;} else {$clubAB4004= $clubAB8008;}} else {$clubAB4004="-";}
				
				if ((int)$A8009Pts+(int)$A8010Pts>6) {if ($A8009Pts > $A8010Pts or ($A8009Pts == $A8010Pts and $A8009>$A8010)) {$clubAB4005= $clubAB8009;} else {$clubAB4005= $clubAB8010;}} else {$clubAB4005="-";}	
				if ((int)$A8011Pts+(int)$A8012Pts>6) {if ($A8011Pts > $A8012Pts or ($A8011Pts == $A8012Pts and $A8011>$A8012)) {$clubAB4006= $clubAB8011;} else {$clubAB4006= $clubAB8012;}} else {$clubAB4006="-";}
				if ((int)$A8013Pts+(int)$A8014Pts>6) {if ($A8013Pts > $A8014Pts or ($A8013Pts == $A8014Pts and $A8013>$A8014)) {$clubAB4007= $clubAB8013;} else {$clubAB4007= $clubAB8014;}} else {$clubAB4007="-";}
				if ((int)$A8015Pts+(int)$A8016Pts>6) {if ($A8015Pts > $A8016Pts or ($A8015Pts == $A8016Pts and $A8015>$A8016)) {$clubAB4008= $clubAB8015;} else {$clubAB4008= $clubAB8016;}} else {$clubAB4008="-";}
				
				}
				else
				{				

					 if ((int)$A8001+(int)$A8002 > 0)	{if ($A8001>$A8002)	{$clubAB4001=$clubAB8001;	} else	{$clubAB4001=$clubAB8002;	}}	else{	$A8001="-";	$A8002="-";	$clubAB4001="-";}
					 if ((int)$A8003+(int)$A8004 > 0)	{if ($A8003>$A8004)	{$clubAB4002=$clubAB8003;	} else	{$clubAB4002=$clubAB8004;	}}	else{	$A8003="-";	$A8004="-";	$clubAB4002="-";}
					 if ((int)$A8005+(int)$A8006 > 0)	{if ($A8005>$A8006)	{$clubAB4003=$clubAB8005;	} else	{$clubAB4003=$clubAB8006;	}}	else{	$A8005="-";	$A8006="-";	$clubAB4003="-";}
					 if ((int)$A8007+(int)$A8008 > 0)	{if ($A8007>$A8008)	{$clubAB4004=$clubAB8007;	} else	{$clubAB4004=$clubAB8008;	}}	else{	$A8007="-";	$A8008="-";	$clubAB4004="-";}
					 if ((int)$A8009+(int)$A8010 > 0)	{if ($A8009>$A8010)	{$clubAB4005=$clubAB8009;	} else	{$clubAB4005=$clubAB8010;	}}	else{	$A8009="-";	$A8010="-";	$clubAB4005="-";}
					 if ((int)$A8011+(int)$A8012 > 0)	{if ($A8011>$A8012)	{$clubAB4006=$clubAB8011;	} else	{$clubAB4006=$clubAB8012;	}}	else{	$A8011="-";	$A8012="-";	$clubAB4006="-";}
					 if ((int)$A8013+(int)$A8014 > 0)	{if ($A8013>$A8014)	{$clubAB4007=$clubAB8013;	} else	{$clubAB4007=$clubAB8014;	}}	else{	$A8013="-";	$A8014="-";	$clubAB4007="-";}
					 if ((int)$A8015+(int)$A8016 > 0)	{if ($A8015>$A8016)	{$clubAB4008=$clubAB8015;	} else	{$clubAB4008=$clubAB8016;	}}	else{	$A8015="-";	$A8016="-";	$clubAB4008="-";}
					}
				}	
					// Quarts de finale
					if (substr($type,7,2) >= '04')
					{
					 
						if (substr($type,7,2) == '08')
						{

						if ((int)$A4001Pts+(int)$A4002Pts>6) {if ($A4001Pts > $A4002Pts or ($A4001Pts == $A4002Pts and $A4001>$A4002)) {$clubAB2001= $clubAB4001;} else {$clubAB2001= $clubAB4002;}} else {$clubAB2001="-"; }	
						if ((int)$A4003Pts+(int)$A4004Pts>6) {if ($A4003Pts > $A4004Pts or ($A4003Pts == $A4004Pts and $A4003>$A4004)) {$clubAB2002= $clubAB4003;} else {$clubAB2002= $clubAB4004;}} else {$clubAB2002="-";}
						if ((int)$A4005Pts+(int)$A4006Pts>6) {if ($A4005Pts > $A4006Pts or ($A4005Pts == $A4006Pts and $A4005>$A4006)) {$clubAB2003= $clubAB4005;} else	{$clubAB2003= $clubAB4006;}} else {$clubAB2003="-";}
						if ((int)$A4007Pts+(int)$A4008Pts>6) {if ($A4007Pts > $A4008Pts or ($A4007Pts == $A4008Pts and $A4007>$A4008)) {$clubAB2004= $clubAB4007;} else	{$clubAB2004= $clubAB4008;}} else {$clubAB2004="-";}
						
					
						}
						else
						{			

						 if ((int)$A4001+(int)$A4002 > 0)	{if ($A4001>$A4002)	{$clubAB2001=$clubAB4001;	} else	{$clubAB2001=$clubAB4002;	}}	else{	$A4001="-";	$A4002="-";	$clubAB2001="-";}
						 if ((int)$A4003+(int)$A4004 > 0)	{if ($A4003>$A4004)	{$clubAB2002=$clubAB4003;	} else	{$clubAB2002=$clubAB4004;	}}	else{	$A4003="-";	$A4004="-";	$clubAB2002="-";}
						 if ((int)$A4005+(int)$A4006 > 0)	{if ($A4005>$A4006)	{$clubAB2003=$clubAB4005;	} else	{$clubAB2003=$clubAB4006;	}}	else{	$A4005="-";	$A4006="-";	$clubAB2003="-";}
						 if ((int)$A4007+(int)$A4008 > 0)	{if ($A4007>$A4008)	{$clubAB2004=$clubAB4007;	} else	{$clubAB2004=$clubAB4008;	}}	else{	$A4007="-";	$A4008="-";	$clubAB2004="-";}
						
						
						
						}	
						
					}




						// Demi finale
						if (substr($type,9,2) >= '02')
						{
							if (substr($type,9,2) == '04')
							{

							if ((int)$A2001Pts+(int)$A2002Pts>6) {if ($A2001Pts > $A2002Pts or ($A2001Pts == $A2002Pts and $A2001>$A2002)) {$clubAB1001= $clubAB2001;} else {$clubAB1001= $clubAB2002;}} else {$clubAB1001="-";}	
							if ((int)$A2003Pts+(int)$A2004Pts>6)
								{
									if ($A2003Pts > $A2004Pts or ($A2003Pts == $A2004Pts and $A2003>$A2004))
									{
										$clubAB1002= $clubAB2003;
									} 
									else 
									{
									$clubAB1002= $clubAB2004;
									}
								} 
								else {
								$clubAB1002="-";
								}
												
							}
							else
							{			
							
							if ((int)$A2001+(int)$A2002 > 0)	{if ($A2001>$A2002)	{$clubAB1001=$clubAB2001;	} else	{$clubAB1001=$clubAB2002;	}}	else{	$A2001="-";	$A2002="-";	$clubAB1001="-";}
							if ((int)$A2003+(int)$A2004 > 0)	{if ($A2003>$A2004)	{$clubAB1002=$clubAB2003;	} else	{$clubAB1002=$clubAB2004;	}}	else{	$A2003="-";	$A2004="-";	$clubAB1002="-";}
							}
						}	
						
						//finale
						 if ((int)$A1001+(int)$A1002 > 0)	{if ($A2001>$A2002)	{$clubAB1001=$clubAB2001;	} else	{$clubAB1001=$clubAB2002;	}}	else{	$A1001="-";	$A1002="-";}



//championDeFrance ( $clubA1001, $clubA1002, $A1001, $A1002, $bdd);




//mysql_close();				
}

 ?>
 
 

