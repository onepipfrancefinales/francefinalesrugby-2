<?php
// Récupération du nom du club

require ("../../connect/connexion1.php");

global $nom; global $nomAncienComite; global $nomLigue;

$reponse = $bdd->query("SELECT sigle, comite, ligue
						FROM bdclubs 
						WHERE id=$equipe OR id=$equipe - 90000000"); 
							while ($row = $reponse->fetch() )
							{ 
							 $nom= $row[0];
							 $nomAncienComite = $row[1];
							 $ligue=$row[2];
							}
							
$reponse = $bdd->query("SELECT nom
						FROM bdligue
						WHERE id=$ligue"); 
							while ($row = $reponse->fetch() )
							{ 
							 $nomLigue= $row[0];
							}
							
/*
//Résultats des saisons précédentes
$equipeComite = substr($equipe,-5);

$saisonMoins1= $saison-1;
$saisonMoins2= $saison-2;
$saisonMoins3= $saison-3;
$saisonMoins4= $saison-4;
$saisonMoins5= $saison-5;
$saisonMoins6= $saison-6;
$saisonMoins7= $saison-7;

global $terrMoins1; global $terrMoins2; global $terrMoins3; global $terrMoins4; global $terrMoins5; global $terrMoins6; global $terrMoins7;
global $franceMoins1; global $franceMoins2; global $franceMoins3; global $franceMoins4; global $franceMoins5;global $franceMoins6; global $franceMoins7;
$reponse = $bdd->query("SELECT id, terr_$saisonMoins1, terr_$saisonMoins2, terr_$saisonMoins3, terr_$saisonMoins4, terr_$saisonMoins5, terr_$saisonMoins6, terr_$saisonMoins7,
								 france_$saisonMoins1, france_$saisonMoins2, france_$saisonMoins3, france_$saisonMoins4, france_$saisonMoins5, france_$saisonMoins6, france_$saisonMoins7
			FROM bdsaisons 
			WHERE id=$equipeComite"); 
						while ($row = $reponse->fetch() )
							{                 
							 $terrMoins1= $row[1];
							 $terrMoins2=  $row[2];
							 $terrMoins3=  $row[3];
							 $terrMoins4=  $row[4]; 
							 $terrMoins5=  $row[5];
							 $terrMoins6=  $row[6]; 
							 $terrMoins7=  $row[7];
							 
							 $franceMoins1 =  $row[8];
							 $franceMoins2 =  $row[9];
							 $franceMoins3 =  $row[10];
							 $franceMoins4 =  $row[11];
							 $franceMoins5 =  $row[12];
							 $franceMoins6 =  $row[13];
							 $franceMoins7 =  $row[14];
							 
								}		
 $reponse->closeCursor();

*/
//Récupération du nom de la ligue
require ("../../connect/connexion5.php");
global $nomComite;
$reponse = $bdd->query("SELECT nom
						FROM comite 
						WHERE phpcomite='$comite'"); 
							while ($row = $reponse->fetch() )
							{ 
							 $nomComite= $row[0];
							}
							
 $reponse->closeCursor(); 


// Choix de la base de données
if ( $comite == "phppro" OR $comite == "phpf1" OR $comite == "phpfed2" OR $comite == "phpfed3NE" OR $comite == "phpfed3GS"  )
	require ("../../connect/connexion3.php"); 

else
	require ("../../connect/connexion2.php"); 



//Recherche du nombre de victoires, de nul, de defaite

global $pointsMarques; global $pointsPris; global $joues;						
global $matchDomicile; global $victoireDomicile ; global $defaiteDomicile; global $nulDomicile;				
global $matchExterieur; global $victoireExterieur; global $defaiteExterieur; global $nulExterieur ;

$bd_clmnt_cache = $comite.''."_clmnt_cache";
$bd_divisions = $comite.''."_divisions";
$bd_equipes = $comite.''."_equipes";

if (isset ($joues)) $joues=$joues; else $joues = 0;
if (isset ($matchDomicile)) $matchDomicile=$matchDomicile; else $matchDomicile = 0;
if (isset ($victoireDomicile)) $victoireDomicile=$victoireDomicile; else $victoireDomicile = 0;
if (isset ($defaiteDomicile)) $defaiteDomicile=$defaiteDomicile; else $defaiteDomicile = 0;
if (isset ($nulDomicile)) $nulDomicile=$nulDomicile; else $nulDomicile = 0;

if (isset ($matchExterieur)) $matchExterieur=$matchExterieur; else $matchExterieur = 0;
if (isset ($defaiteExterieur)) $defaiteExterieur=$defaiteExterieur; else $defaiteExterieur = 0;
if (isset ($victoireExterieur)) $victoireExterieur=$victoireExterieur; else $victoireExterieur = 0;
if (isset ($nulExterieur)) $nulExterieur=$nulExterieur; else $nulExterieur = 0;

$reponse = $bdd->query("SELECT BUTSPOUR,BUTSCONTRE,JOUES,DOMJOUES,DOMG,DOMP,DOMN,EXTJOUES,EXTG,EXTP,EXTN
						FROM $bd_clmnt_cache 
						WHERE ID_EQUIPE='$equipe'"); 
							while ($row = $reponse->fetch() )
							{ 
							 $pointsMarques= $row[0];
							 $pointsPris= $row[1];
							 $joues = $row[2];
							
							$matchDomicile = $row[3];
							$victoireDomicile  = $row[4];
							$defaiteDomicile  = $row[5];
							$nulDomicile  = $row[6];
							
							$matchExterieur = $row[7];
							$victoireExterieur  = $row[8];
							$defaiteExterieur  = $row[9];
							$nulExterieur  = $row[10];
							}
					


// Nom de la division
global $division;							
$reponse = $bdd->query("SELECT nom
						FROM $bd_divisions
						WHERE id='$champ'"); 
							while ($donnees = $reponse->fetch() )
							{ 
							 $division= $donnees['nom'];
							}	

// Recherche du nombre d'equipe, calcul des hauteurs des tableaux (classement, calendrier)
global $nbreEquipes;
global $heightClassement;
global $heightCalendrier;
$reponse = $bdd->query("SELECT count(id) 
						FROM $bd_equipes
						WHERE id_champ='$champ'"); 
				
							while ($row = $reponse->fetch() )
							{ 
							  $nbreEquipes= $row[0];
							}

 
 $heightClassement=($nbreEquipes*20)+25;
 $heightCalendrier=((($nbreEquipes*25)/2)+25)*((($nbreEquipes*2)-2)/2);
							
 $reponse->closeCursor();  

?>