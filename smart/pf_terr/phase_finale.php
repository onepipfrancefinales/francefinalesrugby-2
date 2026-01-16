<!DOCTYPE html PUBLIC>
<html lang="fr">
  <head>
  <meta charset="utf-8" />
  <title>Phases finales régionales</title>
 <link rel="stylesheet" type="text/css" href="../pf/AA2.css"> 
 <link rel="stylesheet" type="text/css" href="../10.css">
 <link rel="stylesheet" type="text/css" href="../../ligne1.css">
 <link type="text/css" rel="stylesheet" href="../pf/paramTiroir.css"> 
<meta name="description" content="tous les champions de france de rugby, ffr,FFR, presentation de tous les clubs de rugby francais, Champions des differents comit�s territoriaux, Tous les championnats de rugby, f�d�rale 2, f�d�rale 3, f�d�rale 1, top 14.">
<meta name="keywords" content="Brennus,Comite Midi Pyrenees de Rugby,ffr,FFR,Comite territoriaux de rugby,Stade toulousain,Bourgogne,FanceFinalesRugby,Rugby,championnat de france de rugby,Fran�aise,honneur,promotion honneur,Sport,Ballon,Ovale,">
<meta name="classification" content="Sport,Rugby">
<meta name="resource-type" content="document">
<meta name="copyright" content="Comite Midi Pyrenees de Rugby">
<meta name="author" content="Equipe Onepip">
<meta name="robots" content="All">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name=viewport content="width=device-width, initial-scale=1">
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9177538664500260" crossorigin="anonymous"></script>

</head>
  
<body text="#000000">
<?php
//include("/../../saison.php");

if (isset ($_GET['annee'])) $annee = $_GET['annee']; else $annee='Erreur, pas de variable Annee'; 
if (isset ($_GET['comite'])) $comite = $_GET['comite']; else $comite ='Erreur, pas de variable Comite';
if (isset ($_GET['bddComite'])) $bddComite = $_GET['bddComite']; else $bddComite ='Erreur, pas de variable Comite';
if (isset ($_GET['division'])) $division = $_GET['division']; else $division ='Erreur, pas de variable Division';

$anneeplus = $annee + 1;
$anneemoins = $annee - 1; 
$bdcomite="php".''.$bddComite;

$champ=$division;
require '../fonctions.php';
require ("../../connect/connexion1.php");
nomLigue2($bddComite, $champ, $bdd);

//------------------------------------

//$bdcomite=("php".''.$comite);
//$bdcomiteClub=("php".''.$comite.''."_clubs");
//$bdcomiteAnnee=("php".''.$comite.''."_pf".''.$annee);
$bdcomite_pfterr=("php".''.$bddComite.''."_pfterr_e");
//---------------Récuperation du type dans la base--------------

require ("../../connect/connexion6.php") ; 

		$reponse = $bdd->query("SELECT type 
								FROM $bdcomite_pfterr
								WHERE division = $division AND annee = $annee");
		
		while ($row = $reponse->fetch() )
			{                 	
			$type=$row[0];
			}

// recherche de barrage
$divisionAvecBarrage =$division + 7000000;

$reponse = $bdd->query("SELECT type 
								FROM $bdcomite_pfterr
								WHERE division = $divisionAvecBarrage AND annee = $annee");
		
		while ($row = $reponse->fetch() )
			{                 	
			$typeBarrage=$row[0];
			}


//echo  $typeBarrage; echo "<br>";
if (isset ($typeBarrage)) $typeBarrage = $typeBarrage; else $typeBarrage =false; 
//---------------------------------------------------------
//-----------------         Affichage       --------------- 
//---------------------------------------------------------
?>


<div class="fixed-header">
<div class="container">

 <?php
	require '../entete.php';
	require 'pf_terr_liens.php';
	?>
</div>
</div>
<div class="container">
<br><br><br><br><br><br><br><br><br><br>

<?php

//****************    Finale - Finale ********************
	require ("../../connect/connexion6.php") ; 	
	require ("../../phasesfinalesterr2019/fonctionspfterrESDL2019.php");
	require 'infos.php';
//***********************Barrages**************************************
		
		if ($typeBarrage == 18)
		{
			afficheLieux ($divisionAvecBarrage, $annee, $comite, $bdd);
			huitieme2019($comite, $divisionAvecBarrage, $annee, $bdd);
		    require ("barrage8M.php");
		
		}


//************************** */ féminines	***************************************	
	else if (substr($division,3,6) == "295") {

		if ($comite == "bg" || $comite =="al")  {$comite = "au"; $division = 100295;}


		$champ ="295";
		echo  "<h1 class=\"center styleArial\">"."Fédérale 2 - Féminines". "</h1>";

		if ($type==1)
		{			
			finale2019 ($comite, $division, $annee, $bdd);
			champion ($comite, $clubA1001, $clubA1002, $A1001, $A1002, $bdd);
			afficheLieux ($division, $annee, $comite, $bdd);
			require ("test1.php");
		}
		
		
	//***************     Demi finale - Finale ******************
		elseif ($type==2)
		{			
			demi2019 ($comite, $division, $annee, $bdd);
			champion ($comite, $clubA1001, $clubA1002, $A1001, $A1002, $bdd);
			afficheLieux ($division, $annee, $comite, $bdd);
			traitementScores ("2001", "2004", $bdd);
			require ("test2.php");
		}	
	//********** Demi finale Aller Retour - Finale   *************
		elseif($type==3)
		{	
			demiAR2019 ($comite, $division, $annee, $bdd);
			afficheLieux ($division, $annee, $comite, $bdd);

			champion ($comite, $clubA1001, $clubA1002, $A1001, $A1002, $bdd);
			require ("test3.php");		
		}	
		
		
	//*********** Barrages(8 équipes)- Quarts - Demi - Finale   ***
		elseif($type==13)
		{	
			quartsPlusBarrages2019 ($comite, $division, $annee, $bdd);
			champion ($comite, $clubA1001, $clubA1002, $A1001, $A1002, $bdd);
			require ("test13.php");
		}	
	
		//*************    Quarts - Demi - Finale   ********************
		elseif($type==14)
		{	
			quarts2019 ($comite, $division, $annee, $bdd);
			traitementScores (4001, 4008, $bdd);
			afficheLieux ($division, $annee, $comite, $bdd);
			champion ($comite, $clubA1001, $clubA1002, $A1001, $A1002, $bdd);
			require ("test14.php");		
		}	
	
		
	//**************  QuartsAR - DemiAR - Finale   ******************
		elseif($type==15)
		{
			quartsDemiAR2019 ($comite, $division, $annee, $bdd);
			champion ($comite, $clubA1001, $clubA1002, $A1001, $A1002, $bdd);
			afficheLieux ($division, $annee, $comite, $bdd);
			require ("test15.php");
		}	
	//*************Seizieme -  Huitième -Quarts - Demi - Finale   *****
	 
	elseif($type==16)
		{		  
			seizieme2019 ($comite, $division, $annee, $bdd);
			champion ($comite, $clubA1001, $clubA1002, $A1001, $A1002, $bdd);
			afficheLieux ($division, $annee, $comite, $bdd);
			traitementScores (1601, 1632, $bdd);
			require ("test16.php");
		}
		
	// **************Barrages - Huitième -Quarts - Demi - Finale ****
		elseif($type==17)
			{
			huitiemeEtBarrages2019 ($comite, $division, $annee, $bdd);
			afficheLieux ($division, $annee, $comite, $bdd);
			champion ($comite, $clubA1001, $clubA1002, $A1001, $A1002, $bdd);
			require ("test17.php");
			}
	//  ***************** Huitième -Quarts - Demi - Finale  **********
		
	
	elseif($type==18)
			{

			afficheLieux($division, $annee, $comite, $bdd);
			huitieme2019($comite, $division, $annee, $bdd);
			
			champion ($comite, $clubA1001, $clubA1002, $A1001, $A1002, $bdd);
			traitementScores (8001,8016, $bdd);
			traitementScores (4001,4008, $bdd);
			traitementScores (2001,2004, $bdd);
			require ("test18.php");		
		}
	
			
	//  ***************** Huitième AR-Quarts - Demi - Finale  **********
		elseif($type==19)
			{
			afficheLieux ($division, $annee, $comite, $bdd);
			huitiemeAR2019 ($comite, $division, $annee, $bdd);	
			champion ($comite, $clubA1001, $clubA1002, $A1001, $A1002, $bdd);
			require ("test19.php");		
			//require ("test0.php");
			}	
		//************************************************************** */	
			
echo "<br>";echo "<br>";
echo "<hr>";echo "<hr>";
$A2001="";$A2002="";$A2003="";$A2004="";

		$division = $division + 5;
		$champ ="300";
		$nomDivision2 = "Régionale à X - Féminines";

		echo  "<h1 class=\"center styleArial\">". $nomDivision2 . "</h1>";

		$reponse = $bdd->query("SELECT type 
								FROM $bdcomite_pfterr
								WHERE division = $division AND annee = $annee");
		
		while ($row = $reponse->fetch() )
			{                 	
			$type=$row[0];
			}
			


/*
		if ($type==1)
		{			
			finale2019 ($comite, $division, $annee, $bdd);
			champion ($comite, $clubA1001, $clubA1002, $A1001, $A1002, $bdd);
			afficheLieux ($division, $annee, $comite, $bdd);
			require ("test1.php");
		}
		
		
	//***************     Demi finale - Finale ******************
		elseif ($type==2)
		{			
			demi2019 ($comite, $division, $annee, $bdd);
			champion ($comite, $clubA1001, $clubA1002, $A1001, $A1002, $bdd);
			afficheLieux ($division, $annee, $comite, $bdd);
			traitementScores ("2001", "2004", $bdd);
			require ("test2.php");
		}	
	//********** Demi finale Aller Retour - Finale   *************
		elseif($type==3)
		{	
			demiAR2019 ($comite, $division, $annee, $bdd);
			afficheLieux ($division, $annee, $comite, $bdd);
			champion ($comite, $clubA1001, $clubA1002, $A1001, $A1002, $bdd);
			require ("test3.php");		
		}	
		
		
	//*********** Barrages(8 équipes)- Quarts - Demi - Finale   ***
		elseif($type==13)
		{	
			quartsPlusBarrages2019 ($comite, $division, $annee, $bdd);
			champion ($comite, $clubA1001, $clubA1002, $A1001, $A1002, $bdd);
			require ("test13.php");
		}	
	//*************    Quarts - Demi - Finale   ********************
		elseif($type==14)
		{	
			quarts2019 ($comite, $division, $annee, $bdd);
			traitementScores (4001, 4008, $bdd);
			afficheLieux ($division, $annee, $comite, $bdd);
			champion ($comite, $clubA1001, $clubA1002, $A1001, $A1002, $bdd);
			require ("test14.php");		
		}	
	
		
	//**************  QuartsAR - DemiAR - Finale   ******************
		elseif($type==15)
		{
			quartsDemiAR2019 ($comite, $division, $annee, $bdd);
			champion ($comite, $clubA1001, $clubA1002, $A1001, $A1002, $bdd);
			afficheLieux ($division, $annee, $comite, $bdd);
			require ("test15.php");
		}	
	//*************Seizieme -  Huitième -Quarts - Demi - Finale   *****
	 
	elseif($type==16)
		{		  
			seizieme2019 ($comite, $division, $annee, $bdd);
			champion ($comite, $clubA1001, $clubA1002, $A1001, $A1002, $bdd);
			afficheLieux ($division, $annee, $comite, $bdd);
			traitementScores (1601, 1632, $bdd);
			require ("test16.php");
		}
		
	// **************Barrages - Huitième -Quarts - Demi - Finale ****
		elseif($type==17)
			{
			huitiemeEtBarrages2019 ($comite, $division, $annee, $bdd);
			afficheLieux ($division, $annee, $comite, $bdd);
			champion ($comite, $clubA1001, $clubA1002, $A1001, $A1002, $bdd);
			require ("test17.php");
			}
	//  ***************** Huitième -Quarts - Demi - Finale  **********
		
	
	elseif($type==18)
			{
			huitieme2019($comite, $division, $annee, $bdd);
			afficheLieux($division, $annee, $comite, $bdd);
			champion ($comite, $clubA1001, $clubA1002, $A1001, $A1002, $bdd);
			traitementScores (8001,8016, $bdd);
			traitementScores (4001,4008, $bdd);
			traitementScores (2001,2004, $bdd);

			require ("test18.php");		
			}
	
			
	//  ***************** Huitième AR-Quarts - Demi - Finale  **********
		elseif($type==19)
			{
			afficheLieux ($division, $annee, $comite, $bdd);
			huitiemeAR2019 ($comite, $division, $annee, $bdd);	
			champion ($comite, $clubA1001, $clubA1002, $A1001, $A1002, $bdd);
			require ("test19.php");		
		
			}	
	*/
		}	
		
			//************************************************************** */	


/**********************  Séniors ******************************* */

if  (substr($division,3,6) != "295" || substr($division,3,6) != "300")
{
accesFed3($comite, $division, $annee) ;
accesReg1($comite, $division, $annee) ;

//typeTableau($type, $comite, $division, $annee, $bdd);

	
	if ($type==1)
	{			
		finale2019 ($comite, $division, $annee, $bdd);
		champion ($comite, $clubA1001, $clubA1002, $A1001, $A1002, $bdd);
		afficheLieux ($division, $annee, $comite, $bdd);
		require ("test1.php");
	}
	
	
//***************     Demi finale - Finale ******************
    elseif ($type==2)
	{			
		demi2019 ($comite, $division, $annee, $bdd);
		champion ($comite, $clubA1001, $clubA1002, $A1001, $A1002, $bdd);
		afficheLieux ($division, $annee, $comite, $bdd);
		traitementScores ("2001", "2004", $bdd);
		require ("test2.php");
	}	
//********** Demi finale Aller Retour - Finale   *************
    elseif($type==3)
	{	
		demiAR2019 ($comite, $division, $annee, $bdd);
		afficheLieux ($division, $annee, $comite, $bdd);
		champion ($comite, $clubA1001, $clubA1002, $A1001, $A1002, $bdd);
		require ("test3.php");		
	}	
	
	
	elseif($type==12)
		{	
			demi2019 ($comite, $division, $annee, $bdd);
			traitementScores (2001, 2004, $bdd);
			afficheLieux ($division, $annee, $comite, $bdd);
			champion ($comite, $clubA1001, $clubA1002, $A1001, $A1002, $bdd);
			require ("test12.php");		
		}	



//*********** Barrages(8 équipes)- Quarts - Demi - Finale   ***
    elseif($type==13)
	{	
		quartsPlusBarrages2019 ($comite, $division, $annee, $bdd);
		champion ($comite, $clubA1001, $clubA1002, $A1001, $A1002, $bdd);
		require ("test13.php");
	}	
//*************    Quarts - Demi - Finale   ********************
    elseif($type==14)
	{	
		quarts2019 ($comite, $division, $annee, $bdd);
		traitementScores (4001, 4008, $bdd);
		traitementScores (1001, 1002, $bdd);
		afficheLieux ($division, $annee, $comite, $bdd);
		champion ($comite, $clubA1001, $clubA1002, $A1001, $A1002, $bdd);
		require ("test14.php");		
	}	

	elseif($type==20)
	{	
		quartsAR2019 ($comite, $division, $annee, $bdd);
		traitementScores (4001, 4008, $bdd);
		afficheLieux ($division, $annee, $comite, $bdd);
		champion ($comite, $clubA1001, $clubA1002, $A1001, $A1002, $bdd);
		require ("test20.php");		
	}	



	
//**************  QuartsAR - DemiAR - Finale   ******************
    elseif($type==15)
	{
		quartsDemiAR2019 ($comite, $division, $annee, $bdd);
		champion ($comite, $clubA1001, $clubA1002, $A1001, $A1002, $bdd);
		afficheLieux ($division, $annee, $comite, $bdd);
		require ("test15.php");
	}	
//*************Seizieme -  Huitième -Quarts - Demi - Finale   *****
 
elseif($type==16)
	{		  
		seizieme2019 ($comite, $division, $annee, $bdd);
		champion ($comite, $clubA1001, $clubA1002, $A1001, $A1002, $bdd);
		afficheLieux ($division, $annee, $comite, $bdd);
		traitementScores (1601, 1632, $bdd);
		require ("test16.php");
	}
	
// **************Barrages - Huitième -Quarts - Demi - Finale ****
    elseif($type==17)
		{
		huitiemeEtBarrages2019 ($comite, $division, $annee, $bdd);
		afficheLieux ($division, $annee, $comite, $bdd);
		champion ($comite, $clubA1001, $clubA1002, $A1001, $A1002, $bdd);
		require ("test17.php");
		}
//  ***************** Huitième -Quarts - Demi - Finale  **********
	

elseif($type==18)
		{

	
		huitieme2019($comite, $division, $annee, $bdd);
		afficheLieux($division, $annee, $comite, $bdd);
		champion ($comite, $clubA1001, $clubA1002, $A1001, $A1002, $bdd);
	if ($A8001 !="-") {
	traitementScores (8001,8016, $bdd);
		traitementScores (4001,4008, $bdd);
		traitementScores (2001,2004, $bdd);
	}
		require ("test18.php");		
		}

		
//  ***************** Huitième AR-Quarts - Demi - Finale  **********
	elseif($type==19)
		{
		afficheLieux ($division, $annee, $comite, $bdd);
		huitiemeAR2019 ($comite, $division, $annee, $bdd);	
		champion ($comite, $clubA1001, $clubA1002, $A1001, $A1002, $bdd);
		require ("test19.php");		
		//require ("test0.php");
		}		
				
elseif($type==0)
	{
		echo $test;
		require ("test0.php");
	}
	
}
?>	
	</div>
</body>
<?php require ("../smartFooter.php");?>
</html>


<?php 

function typeTableau($type, $comite, $division, $annee, $bdd)  {

	global $clubA1001, $clubA1002, $A1001, $A1002;

	if ($type==1)
	{			
		finale2019 ($comite, $division, $annee, $bdd);
		champion ($comite, $clubA1001, $clubA1002, $A1001, $A1002, $bdd);
		afficheLieux ($division, $annee, $comite, $bdd);
		require ("test1.php");
	}
//***************     Demi finale - Finale ******************
    elseif ($type==2)
	{			
		demi2019 ($comite, $division, $annee, $bdd);
		champion ($comite, $clubA1001, $clubA1002, $A1001, $A1002, $bdd);
		afficheLieux ($division, $annee, $comite, $bdd);
		traitementScores ("2001", "2004", $bdd);
		require ("test2.php");
	}	
//********** Demi finale Aller Retour - Finale   *************
    elseif($type==3)
	{	
		demiAR2019 ($comite, $division, $annee, $bdd);
		afficheLieux ($division, $annee, $comite, $bdd);
		champion ($comite, $clubA1001, $clubA1002, $A1001, $A1002, $bdd);
		require ("test3.php");		
	}	
//*********** Barrages(8 équipes)- Quarts - Demi - Finale   ***
    elseif($type==13)
	{	
		quartsPlusBarrages2019 ($comite, $division, $annee, $bdd);
		champion ($comite, $clubA1001, $clubA1002, $A1001, $A1002, $bdd);
		require ("test13.php");
	}	
//*************    Quarts - Demi - Finale   ********************
    elseif($type==14)
	{	
		quarts2019 ($comite, $division, $annee, $bdd);
		traitementScores (4001, 4008, $bdd);
		afficheLieux ($division, $annee, $comite, $bdd);
		champion ($comite, $clubA1001, $clubA1002, $A1001, $A1002, $bdd);
		require ("test14.php");		
	}	
	elseif($type==20)
	{	
		quartsAR2019 ($comite, $division, $annee, $bdd);
		traitementScores (4001, 4008, $bdd);
		afficheLieux ($division, $annee, $comite, $bdd);
		champion ($comite, $clubA1001, $clubA1002, $A1001, $A1002, $bdd);
		require ("test20.php");		
	}	
//**************  QuartsAR - DemiAR - Finale   ******************
    elseif($type==15)
	{
		quartsDemiAR2019 ($comite, $division, $annee, $bdd);
		champion ($comite, $clubA1001, $clubA1002, $A1001, $A1002, $bdd);
		afficheLieux ($division, $annee, $comite, $bdd);
		require ("test15.php");
	}	
//*************Seizieme -  Huitième -Quarts - Demi - Finale   *****
elseif($type==16)
	{		  
		seizieme2019 ($comite, $division, $annee, $bdd);
		champion ($comite, $clubA1001, $clubA1002, $A1001, $A1002, $bdd);
		afficheLieux ($division, $annee, $comite, $bdd);
		traitementScores (1601, 1632, $bdd);
		require ("test16.php");
	}
// **************Barrages - Huitième -Quarts - Demi - Finale ****
    elseif($type==17)
		{
		huitiemeEtBarrages2019 ($comite, $division, $annee, $bdd);
		afficheLieux ($division, $annee, $comite, $bdd);
		champion ($comite, $clubA1001, $clubA1002, $A1001, $A1002, $bdd);
		require ("test17.php");
		}
//  ***************** Huitième -Quarts - Demi - Finale  **********
elseif($type==18)
		{
		huitieme2019($comite, $division, $annee, $bdd);
		afficheLieux($division, $annee, $comite, $bdd);
		champion ($comite, $clubA1001, $clubA1002, $A1001, $A1002, $bdd);
	if ($A8001 !="-") {
	traitementScores (8001,8016, $bdd);
		traitementScores (4001,4008, $bdd);
		traitementScores (2001,2004, $bdd);
	}
		require ("test18.php");		
		}
//  ***************** Huitième AR-Quarts - Demi - Finale  **********
	elseif($type==19)
		{
		afficheLieux ($division, $annee, $comite, $bdd);
		huitiemeAR2019 ($comite, $division, $annee, $bdd);	
		champion ($comite, $clubA1001, $clubA1002, $A1001, $A1002, $bdd);
		require ("test19.php");		
		//require ("test0.php");
		}					
elseif($type==0)
	{
		echo $test;
		require ("test0.php");
	}





}





?>




