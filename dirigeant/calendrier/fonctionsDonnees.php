<?php
//*****************************************************************
//**                  Carte d'identité d'un club                 **
//*****************************************************************
function identiteClub($id_equipe, $bdd)
{

global $equipe, $numeroLigue, $id_ffr, $sigle, $nom1, $nom2, $nom3 , $nom4 ,$ligue, $nomComiteEntier, $sigleComite, $nomLigue, $comite; 

if (isset( $equipe)) $equipe = $equipe; else $equipe="";							//  code Onepip du type 20 29 159
if (isset( $numeroLigue)) $numeroLigue= $numeroLigue; else $numeroLigue="";
if (isset( $nom1)) $nom1= $nom1; else $nom1="";
if (isset( $nom2)) $nom1= $nom2; else $nom2="";
if (isset( $nom3)) $nom1= $nom3; else $nom3="";
if (isset( $nom4)) $nom1= $nom4; else $nom4="";

$reponse = $bdd->query("SELECT id, ligue, idffr, sigle,  nom_1, nom_2, nom_3, nom_4, ligue, comite, siglecomite
							FROM bdclubs 
							WHERE idffr='$id_equipe'"); 
		while ($donnees = $reponse->fetch() )
			{ 
			 $equipe = $donnees['id'];
			 $numeroLigue = $donnees['ligue'];
			// $id_ffr = $donnees['idffr'];
			 $sigle = $donnees['sigle'];
			 $nom1 =  $donnees['nom_1'];
			 $nom2 =  $donnees['nom_2'];
			 $nom3 =  $donnees['nom_3'];
			 $nom4 =  $donnees['nom_4'];
			 $numeroLigue =  $donnees['ligue'];
			 $NomComiteEntier = $donnees['comite'];
			 $sigleComite = $donnees['siglecomite'];
			}
	
	
	
	require ("../../connect/connection5.php");
	$reponse = $bdd->query("SELECT nomLigue, comite
							FROM ligue
							WHERE codeLigue='$numeroLigue'"); 
								while ($donnees = $reponse->fetch() )
									{ 
									$nomLigue = $donnees['nomLigue'];
									$comite = $donnees['comite'];
									}										
}


//***********************************************************************
//**               Recherche la présence d'une équipe                  **
//**			dans un championnat et (donc dans une table)            **
//***********************************************************************
Function recherchePresenceEquipe ($equipe, $bdd)
{


 global $bddComite, $divisionChiffre;
 
	
	 $reponse = $bdd->query("
			 SELECT COUNT(id)
			 FROM phppro_equipes
			 WHERE id='$equipe'"); 
	while ($row = $reponse->fetch() )
		{
		$bddPro=$row[0]; 
		}	
		
		
	 $reponse = $bdd->query("
			 SELECT COUNT(id)
			 FROM phpfed3NE_equipes
			 WHERE id='$equipe'"); 
	while ($row = $reponse->fetch() )
		{
		$bddFedNE=$row[0]; 
		}	
		
	
	
	if 	($bddPro == 1)
		$bddComite = "pro";
	elseif ($bddFedNE == 1)
		$bddComite = "fed3NE";
	elseif (substr($equipe,0,2)==15 OR substr($equipe,0,2)==17  OR substr($equipe,0,2)==18 OR substr($equipe,0,2)==22)
	$bddComite ="idf";
elseif (substr($equipe,0,2)==11 OR substr($equipe,0,2)==12  OR substr($equipe,0,2)==13 OR substr($equipe,0,2)==16 OR substr($equipe,0,2)==21)
	$bddComite ="pl";
elseif (substr($equipe,0,2)==10)
	$bddComite ="au";
elseif (substr($equipe,0,2)==19)
	$bddComite ="ca";
elseif (substr($equipe,0,2)==20)
	$bddComite ="ab";
		
					
	
	$bddComite_equipes = "php".$bddComite."_equipes";
	
	 $reponse = $bdd->query("
			 SELECT id_champ
			 FROM $bddComite_equipes
			 WHERE id='$equipe'"); 
	while ($row = $reponse->fetch() )
		{
		$divisionChiffre=$row[0]; 
		}
}





//*****************************************************************************
//**               Recherche de la division et de la poule de l'equipe       **
//*****************************************************************************

function divisionEtPoule($champ, $bddComite, $equipe, $bdd)
{

global $divisionChiffre, $divisionNom;

$divisionChiffre = $champ;



if (isset( $divisionNom)) $divisionNom= $divisionNom; else $divisionNom="";


if ( $bddComite == 'ab' OR $bddComite == 'ca' OR $bddComite == 'au' OR $bddComite == 'pl' OR $bddComite == 'idf')
{

if (substr($equipe,0,2)==15 OR substr($equipe,0,2)==17  OR substr($equipe,0,2)==18 OR substr($equipe,0,2)==22)
	$bddComite ="idf";
elseif (substr($equipe,0,2)==11 OR substr($equipe,0,2)==12  OR substr($equipe,0,2)==13 OR substr($equipe,0,2)==16 OR substr($equipe,0,2)==21)
	$bddComite ="pl";
elseif (substr($equipe,0,2)==10)
	$bddComite ="au";
elseif (substr($equipe,0,2)==19)
	$bddComite ="ca";
elseif (substr($equipe,0,2)==20)
	$bddComite ="ab";
}
else
$bddComite= $bddComite;



$bdcomite_divisions="php".''.$bddComite.''."_divisions";
 
$reponse = $bdd->query("
		 SELECT nom
		 FROM $bdcomite_divisions 
		 WHERE id='$divisionChiffre'"); 
							
		while ($row = $reponse->fetch())
			{ 
			
			$divisionNom = $row[0];
			}
}


//*************************************************************
//**             Nbre de journée de championnat              **
//*************************************************************
Function NbreDeJournee ($bddComite, $equipe, $divisionChiffre, $bdd)
{
	
global $nbreJourneeMax;

//$comite_journees= "php".$bddComite."_journees";
$comite_matchs= "php".$bddComite."_matchs";
/*
$reponse = $bdd->query("SELECT count(numero)
			FROM $comite_journees
			WHERE id_champ='$divisionChiffre' ");
*/			
$reponse = $bdd->query("SELECT count(id)
			FROM $comite_matchs
			WHERE id_equipe_dom=$equipe OR id_equipe_ext=$equipe");			
			
				while ($row = $reponse->fetch() )
					{
					  $nbreJourneeMax=$row[0]; 
					}				

}

//*************************************************************
//**                       Calendrier                        **
//** 				 Dates et oppositions                    **
//*************************************************************
function calendrier ($equipe, $bddComite, $divisionChiffre, $nbreJourneeMax, $bdd)
{

$comite_matchs = "php".$bddComite."_matchs";
$journeeUn = ($divisionChiffre*100) + 1;
$journeeMax = ($divisionChiffre*100) + $nbreJourneeMax;

$tabNumEquipe = array();
$tabDates = array();
	for ($i= 1; $i<= $nbreJourneeMax; $i++)
	{
	global ${"numEquipe".$i}, ${"dates".$i};
		
	$reponse = $bdd->query("SELECT id_equipe_dom, date_reelle
						FROM $comite_matchs
						WHERE id_equipe_dom=$equipe OR id_equipe_ext=$equipe
						ORDER BY id  ASC ");
							while ($row = $reponse->fetch() )
								{
								$tabNumEquipe[] = $row[0];
								$tabDates[] = $row[1];
								}
	if(isset($tabNumEquipe[$i-1] )) ${"numEquipe".$i}=$tabNumEquipe[$i-1];else ${"numEquipe".$i} ="";
	if(isset($tabDates[$i-1] )) ${"dates".$i}=$tabDates[$i-1]; else ${"dates".$i} ="--";
	}

$tabNomEquipe = array();
	$comite_clubs = "php".$bddComite."_clubs";
		
	for ($i= 1; $i<= $nbreJourneeMax; $i++)
	{
	global ${"nomEquipe".$i};

	$reponse = $bdd->query("SELECT nom
							FROM $comite_clubs
							WHERE  id =  ${"numEquipe".$i} ");
							
							while ($row = $reponse-> fetch())
								{
								$tabNomEquipe[] = $row[0];
								}
	if(isset($tabNomEquipe[$i-1] )) ${"nomEquipe".$i} =  $tabNomEquipe[$i-1]; else ${"nomEquipe".$i} ="**";
	
	}
}





//********************************************************************************
//**                      Palmarès d'une équipe      	    					**
//********************************************************************************

function palmaresEquipes($id_equipe, $table ,$bdd)
{

identiteClub($id_equipe, $bdd);

if (isset($nom1)) $nom1 = $nom1 ; else $nom1 = "";
if (isset($nom2)) $nom2 = $nom2 ; else $nom2 = "";
if (isset($nom3)) $nom3 = $nom3 ; else $nom3 = "";
if (isset($nom4)) $nom4 = $nom4 ; else $nom4 = "";


//*****       Recherche du nombre de titre ************************

Global $nbreTitre, $nom1, $id_equipe;
//$categorie = array(A, B);


$reponse = $bdd->query("SELECT count(saison)
						FROM $table 
						WHERE entente='$nom1'  
						ORDER BY saison "); 
								while ($row = $reponse->fetch() )
									{ 
										$nbreTitre=$row[0];
									}
							

								
//************    Affichage       ********								
$tabSaison = array();
$tabTitre = array();
$tabChampionnat = array ();
$tabDivision = array();									
									
	for ($i=0; $i<	$nbreTitre; $i++)
	{	
	global ${"saison".$i},${"titre".$i},${"championnat".$i},${"division".$i} ;
							
	$reponse = $bdd->query("SELECT saison, titre, championnat, division
						FROM $table 
						WHERE entente='$nom1' 
						ORDER BY saison DESC"); 
								while ($row = $reponse->fetch() )
									{ 
										$tabSaison[]=$row[0];
										$tabTitre[]=$row[1];
										$tabChampionnat[]=$row[2];
										$tabDivision[]=$row[3];								
									}

			if (isset($tabSaison[$i]))	${"saison".$i}	=	$tabSaison[$i]; else 	${"saison".$i}="";		
			if (isset($tabTitre[$i]))	${"titre".$i}	=	$tabTitre[$i]; else 	${"titre".$i}="";	
			if (isset($tabChampionnat[$i]))	${"championnat".$i}	=	$tabChampionnat[$i]; else 	${"championnat".$i}="";	
			if (isset($tabDivision[$i]))	${"division".$i}	=	$tabDivision[$i]; else 	${"division".$i}="";							
	}																		
}
?>