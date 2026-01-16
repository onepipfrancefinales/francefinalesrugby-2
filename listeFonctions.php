


//consultation/fonctions.php

function testPresence () 
function rechercheFusion ($equipe, $bdd) 
function rechercheParNomDeVille($chaine, $bdd)
function changementNom($id_equipe, $width, $bdd)
function fusionDeClubs2($equipe, $bdd)
function fusionDeClubs($equipe, $nouveauClub, $bdd)
function fusionDeClubsEquipe1($equipe, $nouveauClub, $bdd)
function fusionDeClubsEquipe2($equipe, $nouveauClub, $bdd)
function fusionDeClubsJeunes($equipe, $nouveauClub, $bdd)
function consultationEvolutionClub($equipe, $bdd)
function clubEnfant($id_equipe, $bdd) 
function clubsParLigueEnEntente($idLigue, $type, $var1, $bdd)
function clubsParLigue($idLigue, $type, $var1,$mode, $bdd)
function clubsParComite($sigle, $type, $var1, $mode, $bdd)
function rechercheInfosDesClubs($chaine)
function nbreClubsComite($bdd)
function rechercheInfosComites($sigle, $bdd)
function rechercheInfosLigues($idLigue, $bdd)
function nomLigueParSigleLigue($sigleLigue, $bdd)
function structureLigue($idLigue, $bdd)
function cssColonne($trigrammeLigue)
function  tabNbreClubs()

//dossiers/brennus/fonctions.php

function tousLesChampions($bdd)
function participation($bdd)
function titresConsecutifs2($equipe, $nbre, $bdd)
function titresConsecutifs3($equipe, $nbre, $bdd)
function titresConsecutifs4($equipe, $nbre, $bdd)


//dossiers/brennus/fonctionsBrennus.php

function transformerDonnee($donnee, $bdd)
function champFrance($bdd)
function nomStade($id, $bdd)
function nbreEdition($bdd)
function villes($bdd)
function countStadesParVille($nomVille2, $bdd)
function stadesParVille($nomVille2,$countStadesParVille, $bdd)
function finalesParVille($nomVille, $bdd)
function stades($bdd)//liste des stades
function countSaisonsStade($idStade, $bdd)
function listeSaisonsStade($idStade, $countSaisonStade, $bdd)
function test($bdd) 


 

//phases_finales2019/fonctionsChampFrance2019.php

function suiviDuTraitement($division, $requete)
function traitementScores ($debut, $fin)
function constructionTableau($nombreEquipe, $division, $annee)
function date2019($division, $annee, $bdd)
function nomDivision($division)
function championDeFrance ( $clubA1001, $clubA1002, $A1001, $A1002, $bdd)
function accessMatch($division, $annee, $bdd)
function barragesEquipes($typeBarrage, $divisionBarrage, $annee, $bdd)
function barragesScores($typeBarrage, $divisionBarrage, $annee, $bdd)
function rechercheBarrages($division, $annee, $bdd)
function trenteDeuxieme2019 ($division, $annee, $bdd)


// phasesfinalesterr2019/majEquipes/majFinalesTer/fonctions.php

function verifClubsPresents($comite ,$debut ,$fin, $bdd)

// phasesfinalesterr2019/qualification/fonctions_Qualification.php

function classementParPoints5poules($comite, $division)
function classementParPoints4poules($comite, $division)
function classementParPoule ($comite, $division)
function classementParPoints8poules($comite, $division)

// phasesfinalesterr2019/qualification/fonctions_Qualification2.php

function classementParPoints8poules($comite, $division)


// phasesfinalesterr2019/qualification/fonctions_Qualification3.php

function classementParPoints5poules($comite, $division)



// phasesfinalesterr2019/fonctionspfterr2019.php



// phasesfinalesterr2019/fonctionpfterrESDL2019.php

function affichage2019($division, $bdd)
function nomDivision($division, $bdd)
function traitementScores ($debut, $fin, $bdd)//Traiter les scores particuliers
function afficheLieux ($division, $annee, $comite, $bdd)
function afficheDivisionChampion($division)
function afficheDivisionChampionLigue($division, $annee)
function champion ($comite, $clubA1001, $clubA1002, $A1001, $A1002, $bdd)
function finale2019 ($comite, $division, $annee, $bdd)
function demi2019($comite, $division, $annee, $bdd)
function demiAR2019 ($comite, $division, $annee, $bdd)
function quartsDemiAR2019 ($comite, $division, $annee, $bdd)
function quartsAR2019 ($comite, $division, $annee, $bdd)
function quarts2019 ($comite, $division, $annee, $bdd)
function quartsPlusBarrages2019 ($comite, $division, $annee, $bdd)
function huitieme2019($comite, $division, $annee, $bdd)
function huitiemeAR2019 ($comite, $division, $annee, $bdd)
function huitiemeEtBarrages2019($comite, $division, $annee, $bdd)
function seizieme2019 ($comite, $division, $annee, $bdd)
function choixBdd ($comite)
function traitementHuitieme ($debut, $fin )




//resultats/fonctions.php

function listePoule($champ, $bddComite, $bdd)
function maj($champ, $smart, $comite, $bdd)
function affichage($champ, $champ2, $comite, $bdd)
function affichageFacebook($champ, $comite, $bdd)
function clmntbdpl($champ, $smart, $bdd)
function affichageTitreCompet($date, $champ, $ligue, $comite, $bdd)
function affichageOppositionsPro($page, $date, $champ, $ligue, $comite, $bdd)
function affichageOppositionsLigueNE($page, $date, $champ, $ligue, $comite, $bdd)
function affichageOppositionsLigueBFC($page, $date, $champ, $ligue, $comite, $bdd)
function messages($champ)
function evolutionResultats($equipe, $comite, $champ, $bdd)
function evolutionResultatsSmart($equipe, $comite, $champ, $bdd)
function journeesReportees($comite, $champ, $bdd)
function perequation($comite, $champ, $bdd)
function AffichageLogos($champ, $comite, $smart, $bdd)
function meilleureAttaque($phpComite, $champ, $bdd)
function meilleureDefense($phpComite, $champ, $bdd)
function nomDivision($phpComite, $champ, $bdd)
function nombreEquipe($phpComite, $champ, $bdd)
function nomClub($equipe, $bdd)
function nomLigue($equipe, $bdd)
function affichage5Saisons($debutSaison, $equipe, $champ, $phpComite, $bdd)
function traitementDesScores($equipe, $phpComite, $bdd)


//resultats/fonctions2.php

function affichage($champ, $champ2, $comite, $bdd)
function messages($champ)
function evolutionResultats ($equipe, $comite, $champ, $bdd)
function evolutionResultatsSmart ($equipe, $comite, $champ, $bdd)
function journeesReportees($comite, $champ, $bdd)
function journeesReporteesCovid($comite, $champ, $bdd)
function AffichageLogos($champ, $comite, $smart, $bdd)// affichage des logos
function AffichageLogosSmart($id, $comite)//affichage des logos smart 
function meilleureAttaque ($phpComite, $champ, $bdd)// Affichage de l'equipe et moyenne de la Meilleure attaque
function meilleureDefense ($phpComite, $champ, $bdd)// Affichage de l'equipe et moyenne de la meilleure défense	
function nomDivision($phpComite, $champ, $bdd)//  nom de la division
function nombreEquipe($phpComite, $champ, $bdd)//   Recherche du nombre de clubs dans la poule pour un compétition données
function nomClub($equipe, $bdd)//   Affichage du nom du club
function nomLigue($equipe, $bdd)//  Affichage du nom de la ligue
function affichage5Saisons($saison, $equipe,$champ,$phpComite, $bdd)//   Affichage des 5 dernières saison (régional + France)
function traitementDesScores($equipe, $phpComite, $bdd)// Traitement des scores (nbre de victoires , meilleure défense, meilleure attaque etc..)


//resultats/fonctionsResultatsDelaJourneeUniquement.php

function meilleurQuatrieme($comite, $bdd)
function listePoule ($champ, $bddComite, $bdd)
function maj($champ, $smart, $comite, $bdd)
function affichage($champ, $champ2, $comite, $bdd)
function affichageFacebook($champ, $comite, $bdd)
function clmntbdpl($champ,$smart, $bdd)
function affichageTitreCompet($date, $champ, $ligue, $comite, $bdd)
function affichageOppositionsPro($page, $date, $champ, $ligue, $comite, $bdd)
function affichageOppositionsLigueNE($page, $date, $champ, $ligue, $comite, $bdd)
function affichageOppositionsLigueBFC($page, $date, $champ, $ligue, $comite, $bdd)
function messages($champ)
function evolutionResultats ($equipe, $comite, $champ, $bdd)
function evolutionResultatsSmart ($equipe, $comite, $champ, $bdd)
function journeesReportees($comite, $champ, $bdd)
function perequation($comite, $champ, $bdd)
function AffichageLogos($champ, $comite, $smart, $bdd)// affichage des logos
function AffichageLogosSmart($id, $comite)//affichage des logos smart 
function meilleureAttaque ($phpComite, $champ, $bdd)// Affichage de l'equipe et moyenne de la Meilleure attaque
function meilleureDefense ($phpComite, $champ, $bdd)// Affichage de l'equipe et moyenne de la meilleure défense	
function nomDivision($phpComite, $champ, $bdd)//  nom de la division
function nombreEquipe($phpComite, $champ, $bdd)//   Recherche du nombre de clubs dans la poule pour un compétition données
function nomClub($equipe, $bdd)//   Affichage du nom du club
function nomLigue($equipe, $bdd)//  Affichage du nom de la ligue
function affichage5Saisons($saison, $equipe,$champ,$phpComite, $bdd)//   Affichage des 5 dernières saison (régional + France)
function traitementDesScores($equipe, $phpComite, $bdd)// Traitement des scores (nbre de victoires , meilleure défense, meilleure attaque etc..)
	

//resultats/00fonctionTaille.php


//fonctions

function appartientA($bddComite, $idEquipe,  $bdd)
function affichageSaisonEnCours($equipe, $bdd)
function rechercheClubParId($idRecherche, $bdd)
function infosclub($chaine, $bdd)
function nomLiguePalm($numLigue, $bdd)
function nomComite($sigle, $id, $bdd)
function bdInfosClub($code, $bdd)
function saisons($code, $annee, $bdd)
function nbreTitre($nomChampion,  $id_equipe, $table, $categorie, $bdd)
function palmares($nomChampion, $table, $categorie, $bdd)
function palmaresParClub($nomChampion, $id_equipe, $table, $categorie, $bdd)
function palmaresParClubLigne($nomChampion, $id_equipe, $table, $categorie, $bdd)
function nbreTitreEU($nomChampion, $bdd)
function palmaresEU($id_equipe, $bdd)




	