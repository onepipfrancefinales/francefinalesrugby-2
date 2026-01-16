<?php 
if (isset ($_GET['division'])) $division = $_GET['division']; else $division='Erreur, pas de variable Division'; 
if (isset ($_GET['comite'])) $comite = $_GET['comite']; else $comite='Erreur, pas de variable Comite'; 
if (isset ($_GET['page'])) $page = $_GET['page']; else $page='-'; 
if (isset ($type)) $type = $type; else $type='Erreur, pas de variable Type'; 
if (isset ($somme)) $somme = $somme; else $somme='Erreur, pas de variable Somme'; 

require '../../connect/connexion1.php' ;
require '../../fonctions.php';
$id = 0;
$sigle = "(".$comite.")";

nomComite ($sigle, $id, $bdd);

if (isset ($_GET['annee'])) $annee = $_GET['annee']; else $annee='Erreur, pas de variable Annee';

?>

<!DOCTYPE html>
<html>
<head>
<title>Finales territoriales <?php echo $annee; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="../../ligne1.css">
<link rel="stylesheet" type="text/css" href="../champTerr.css">
<link rel="stylesheet" type="text/css" href="../qualification.css">
<meta name="description"
content="tous les champions de france de rugby, ffr,FFR, presentation de tous les clubs de rugby francais, 
Champions des differents comites territoriaux, Tous les championnats de rugby, federale 2, federale 3, federale 1, top 14.">
<meta name="keywords"
content="Brennus,Comite Midi Pyrenees de Rugby,ffr,FFR,Comite territoriaux de rugby,Stade toulousain,Bourgogne,FanceFinalesRugby,
Rugby,championnat de france de rugby,Francaise,honneur,promotion honneur,Sport,Ballon,Ovale,">
<meta name="classification" content="Sport,Rugby">
<meta name="resource-type" content="document">
<meta name="copyright" content="Comite Midi Pyrenees de Rugby">
<meta name="author" content="Equipe Onepip">
<meta name="robots" content="All">
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9177538664500260" crossorigin="anonymous"></script>

</head>

<?php 
//*****************************************************
//**** Récupération des noms des comites et des ligues*
//*****************************************************
require ("../../connect/connexion5.php") ; 
if ($comite == "bg" or $comite == "br" or $comite == "ce" or $comite == "fl" or $comite == "pl")
{$bddComite = "pl";
	if ($comite == "bg") $codeLigue ="110000";
	elseif ($comite == "br") $codeLigue ="120000";
	elseif ($comite == "ce") $codeLigue ="130000";
	elseif ($comite == "fl") $codeLigue ="160000";
	elseif ($comite == "pl") $codeLigue ="210000";
}
elseif ($comite == "al" or $comite == "idf" or $comite == "n" or $comite == "pr")
{$bddComite = "idf";
	if ($comite == "al") $codeLigue ="150000";
	elseif ($comite == "idf") $codeLigue ="170000";
	elseif ($comite == "n") $codeLigue ="180000";
	elseif ($comite == "pr") $codeLigue ="220000";
}
elseif ($comite == "au"){$bddComite = "au"; $codeLigue ="100000";}
elseif ($comite == "ab"){$bddComite = "ab"; $codeLigue ="200000";}	
elseif ($comite == "ca"){$bddComite = "ca"; $codeLigue ="190000";}	
	
// Nom de la ligue
$reponse = $bdd->query("
		   SELECT nomLigue
		   FROM comite
		   WHERE comite = '$comite'	");

while ($donnees = $reponse->fetch())
		{							
		 $ligueNom=$donnees['nomLigue'];
		}
		
// nom du comité							
$reponse = $bdd->query("
		   SELECT nom as nomComite
		   FROM comite
		   WHERE comite = '$comite' 
		   AND id < 30");
			
while ($donnees = $reponse->fetch())
		{							
		 $comiteNom=$donnees['nomComite'];
		}
		
//Rechercher saison la plus ancienne
//echo "annee1 : ".$annee;echo "<br />";
//echo "comite : ".$comite;echo "<br />";
if ($annee	> 2018)	
{	
	//echo "annee superieur a 2018"; echo "<br/>";
	require ("../../connect/connexion6.php");
	if ($comite == "au" OR $comite == "ap" OR $comite == "ly" OR $comite == "da")
	{$bddComite = "au";$codeLigue =100000;}
	elseif ($comite == "be" OR $comite == "cbl" OR $comite == "ca" OR $comite == "lm" OR $comite == "pa" OR $comite == "pch")
	{$bddComite = "ca";$codeLigue =190000;}
	elseif ($comite == "ld" OR $comite == "ab" OR $comite == "mpy" OR $comite == "pc")
	{$bddComite = "ab";$codeLigue =200000;}

	$php_pfterr = "php".$bddComite."_pfterr_e";
}
else
{
	//echo "annee inferieur a 2018"; echo "<br/>";
require ("../../connect/connexion2.php");
$php_pfterr = "php".$comite."_pfterr";
$codeLigue = 0;
$bddComite = $comite;
}				
//$php_pfterr = "php".$bddComite."_pfterr_e";
//echo "$php_pfterr : ".$php_pfterr;	echo "<br />";
//echo "bddComite111 : ".$bddComite; echo "<br />";
if ($comite != "mpy")
{
$reponse = $bdd->query("
		   SELECT MIN(annee)
		   FROM $php_pfterr
		   WHERE division = '$codeLigue' + 170 ");	
		   
$saisonMin=$reponse->fetch();
//echo "Min - saison : ".$saisonMin[0];echo "<br />";
}

if ($annee < $saisonMin[0])
    {
	// bandeau avec les liens des différentes divisions
	 include("hautindex.php");
	 // affichage double flèches
	 include("bandeauNavigation.php");
	 // affichage du nom de la compétition et de l'année
	 include("bandeauNavigation2.php");
	 //include("/phasesFinalesTerr2019/affichageFinalesTerr/infos.php");
	 include("infos.php");
    }

elseif ($annee < 2019 )
	{
	//echo "test1";
	 //****************************************************************
	 // traitement des phases finales de Honneur Promotion 1�re s�rie**
	 //****************************************************************
	 $table_pfterr="php".''.$comite.''."_pfterr";

	 if ($page=="HPHS1")
		{
		 if ($comite=="mpy" )
			{
			 require 'phaseFinalesMPY.php';	
			}
		 else
			{	
			 $reponse  = $bdd->query("
					SELECT sum(type) AS sommeHPHS1
					FROM $table_pfterr
					WHERE division < 200 
					AND annee=$annee ");
					
			 while ($donnees = $reponse->fetch())
					{
					$somme=$donnees['sommeHPHS1'];
					}
			 require 'phasesFinalesAutres.php';
			}
		}   
	 //************************************************************		
	 //**   traitement des phases finales de 2me 3me 4me série   **
	 //************************************************************

	 elseif ($page=="S2S3S4")
		{
		 if ($comite=="mpy" )
			{ require 'phaseFinalesMPY.php';}
		 else
			{
			 $reponse  = $bdd->query("
					SELECT sum(type) AS sommeS2S3S4
					FROM $table_pfterr
					WHERE division > 190 
					AND division < 230 
					AND annee='$annee'");
		     
			 while ($donnees = $reponse->fetch() )
					{ $somme=$donnees['sommeS2S3S4'];}
	
			 require 'phasesFinalesAutres.php';
			}
		}	
		
	 //************************************************************		
	 //**   traitement des phases finales de Réserve             **
	 //************************************************************
		
	 elseif ($page=="RRPHR1")
		{
		 if ($comite=="mpy" )
			{
			 require 'phaseFinalesMPY.php';	
			}
		 else
			{
			 $reponse = $bdd->query("
						SELECT sum(type) AS sommeRRPHR1
						FROM $table_pfterr
						WHERE division > 220 
						AND annee='$annee'	");
						
			 while ($donnees =$reponse ->fetch() )
				{ $somme=$donnees['sommeRRPHR1'];}
		
			 require 'phasesFinalesAutres.php';
			}
		}	
	}
//****************************************	
//                                       *	
//********** apres 2019*******************
//                                       *
//****************************************	
else	
    {  
	 //****** Prise en compte du changement des nom des comit�s
	//echo "test2019"; echo "<br />";
	//echo "codeLigue : ".$codeLigue; echo "<br />";
	//echo "page : ".$page; echo "<br />";
	 if ($comite == "mpy" OR $comite == "ld" OR $comite == "pc")
	 $bddComite = "ab";
	 elseif ($comite== "ap" OR $comite == "da" OR $comite == "ly")
	 $bddComite = "au";
	 elseif ($comite== "be" OR $comite == "cbl" OR $comite == "lm" OR $comite == "pch" OR $comite == "pa")
	 $bddComite = "ca";
	 elseif ($comite== "bg" OR $comite == "br" OR $comite == "ce" OR $comite == "fl" OR $comite == "pl" ) 
	 $bddComite="pl";
	 elseif ($comite== "al" OR $comite == "idf" OR $comite == "n" OR $comite == "pr" ) 
	 $bddComite="idf";
		require ("../../connect/connexion6.php");
	 $table_pfterr = "php".''.$bddComite.''."_pfterr_e";
	//echo "table_pfterr : ".$table_pfterr;echo "<br />";					
	 //******************************************************
	 //*************  Traitement des phases finales  ********
	 //******************************************************

	 //*************  Récupération du type de phase finale pour l'Honneur Promotion 1�re s�rie  ********
	 
	 if ($page == "HPHS1")
	 {
		$debut = $codeLigue + 170 ;
		$fin = $codeLigue + 190;
		$reponse = $bdd->query("
					SELECT SUM(type) AS sommeHPHS1
					FROM $table_pfterr
					WHERE division between $debut and $fin
					AND annee='$annee' ");

		 while ($donnees = $reponse->fetch())
			{ $somme=$donnees['sommeHPHS1'];}
		}
	
	 //*************   Récupération du type de phase finale pour les 2me 3me 4me série           *******
	 elseif ($page=="S2S3S4")
		{
		
		$debut = $codeLigue + 200 ;
		$fin = $codeLigue + 220;
		$reponse = $bdd->query("
					SELECT SUM(type) AS sommeS2S3S4
					FROM $table_pfterr
					WHERE division between $debut and $fin
					AND annee='$annee' ");		
					
		 while ($donnees = $reponse->fetch())
			{ $somme=$donnees['sommeS2S3S4'];}		
		//echo "somme : ".$somme;
		}

	 //*************    Récupération du type de phase finale pour les Réserves              *******
	 elseif ($page=="RRPHR1")
		{

		$debut1 = $codeLigue + 260 ; $fin1 = $codeLigue + 280;
	
		 $reponse  = $bdd->query("
				SELECT SUM(type) AS sommeRRPHR1A
					FROM $table_pfterr
					WHERE division between $debut1 and $fin1  
					AND annee='$annee' "); 
				
		 while ($donnees = $reponse->fetch())
			{ $somme1=$donnees['sommeRRPHR1A'];}		
		

		
		 $debut2 = $codeLigue + 9170;	$fin2 = $codeLigue + 9190;
		 $reponse  = $bdd->query("
				SELECT SUM(type) AS sommeRRPHR1B
					FROM $table_pfterr
					WHERE division between $debut2 and $fin2 
					AND annee='$annee' "); 
				
		 while ($donnees = $reponse->fetch())
			{ $somme2=$donnees['sommeRRPHR1B'];}	
			
			
$somme = $somme1+$somme2;

		}




		 //*************    Récupération du type de phase finale pour les féminines              *******
		elseif ($page=="FEM") {

			$debut = $codeLigue + 295 ;
			$fin = $codeLigue + 310;	
			 $reponse  = $bdd->query("
					SELECT SUM(type) AS sommeFEM
						FROM $table_pfterr
						WHERE division between $debut and $fin
						AND annee='$annee' ");
					
			 while ($donnees = $reponse->fetch())
				{ $somme=$donnees['sommeFEM'];}	


		}
	//echo "somme : ".$somme;	echo "<br />";		
		 //**********************************************	
		 // affichage du haut de la page
		 //**********************************************
		
		 include("hautindex.php");
		 include("bandeauNavigation.php");
		 //include("../../phasesfinalesterr2019/affichageFinalesTerr/hautindex.php");
		 //include("../../phasesfinalesterr2019/affichageFinalesTerr/bandeauNavigation.php");
		
		 //	if ($comite == "ab" or $comite == "ld" OR $comite == "mpy" OR $comite == "pc")
		 if ($comite == "ab")
			{ require ("menuOccitanie.php");}
		 elseif ($comite == "au" )
			{
			 //	elseif ($comite == "au" or $comite == "ap" OR $comite == "da" OR $comite == "ly")
			 require ("menuAuvergneRhoneAlpes.php");
			}
		 elseif ($comite == "ca")
			{
			 //	elseif ($comite == "be" or $comite == "cbl" OR $comite == "ca" OR $comite == "lm" OR $comite == "pch" OR $comite == "pa")
			 require ("menuNouvelleAquitaine.php");
			}
				
		// Affichage du bandeauNavigation2
		
		if ($somme > 10)
		// affichage de la division
		include("bandeauNavigation2_2019.php");
		else
		include("bandeauNavigation2.php");
		
		
		// Affichage d'un tableau de phase finale
		if ($somme < 10)
	
		{
		
			if ($somme == 2 or $somme == 3){ 
				include("../../phasesfinalesterr2019/affichageFinalesTerr/finale.php");}
			elseif ( $somme == 4 or $somme == 6){ 
				include ("../../phasesfinalesterr2019/affichageFinalesTerr/demi.php");}
			elseif ($somme == 9){
				 include ("../../phasesfinalesterr2019/affichageFinalesTerr/demiAR.php");}
			else
				{ include ("../../phasesfinalesterr2019/affichageFinalesTerr/demiMixte.php");}	
		}
		else
		{	
			
	     require ('../../connect/connexion6.php');		
		// echo "test3 ";echo "<br/>";
		 if ($comite == "ab" or $comite == "ld" OR $comite == "mpy" OR $comite == "pc")
		  {$comite = "ab";}
		 elseif ($comite == "au" or $comite == "ap" OR $comite == "da" OR $comite == "ly")
		  {$comite = "au";}
		 elseif ($comite == "be" or $comite == "cbl" OR $comite == "ca" OR $comite == "lm" OR $comite == "pch" OR $comite == "pa")		
		  {$comite = "ca";}
		 elseif ($comite=="bg" or $comite=="bg" or  $comite=="bg" or $comite=="bg" or $comite=="bg")
		 {$comite = "pl";}
		 elseif ($comite=="al" or $comite=="idf" or  $comite=="n" or $comite=="pca")
		 {$comite = "idf";}
		 else
		 {$comite = $comite;}
		$division = substr($division,-4)+$codeLigue;
		//echo "division : ".$division; echo "<br/>";
	     $table_pfterr = "php".''.$bddComite.''."_pfterr_e";
	//	echo "table_pfterr : ".$table_pfterr;echo "<br/>";
		 if (isset ($type)) $type = $type; else $type='-';		
    	 $requete = $bdd->query("
				    SELECT type
				    FROM $table_pfterr
				    WHERE division = $division 
				    AND annee='$annee'");
	
		 while ($donnees = $requete->fetch())
			{ $somme=$donnees['type'];	}
	//echo "<br />";echo "somme 2 : ".$somme;echo "<br />";
	//echo $division;

				if ($somme == 12 or $somme == 11)
				{ include ("../../phasesfinalesterr2019/affichageFinalesTerr/fauxQuarts.php");}
			elseif ($somme == 14)
				{ include ("../../phasesfinalesterr2019/affichageFinalesTerr/quart.php");}
			elseif ($somme == 20)
				{ include ("../../phasesfinalesterr2019/affichageFinalesTerr/quartAR.php");}
			elseif ($somme==15)
				{ include ("../../phasesfinalesterr2019/affichageFinalesTerr/quartDemiAR.php");}
			elseif ($somme == 16)
				{ include ("../../phasesfinalesterr2019/affichageFinalesTerr/16me.php");}
			elseif ($somme == 17)
				{ include ("../../phasesfinalesterr2019/affichageFinalesTerr/barrage8me.php");}
			elseif ($somme == 18)
				{ include ("../../phasesfinalesterr2019/affichageFinalesTerr/8me.php");}
			elseif ($somme == 19)
				{ include ("../../phasesfinalesterr2019/affichageFinalesTerr/8meAR.php");}		
		}
	}
?>	
</html> 