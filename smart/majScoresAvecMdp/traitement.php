<?php
//r�cup�ration des valeurs des champs:
if (isset($_GET['bddComite']))$bddComite = $_GET['bddComite']; 
if (isset($_GET['comite']))$comite = $_GET['comite'];  
if (isset($_GET['equipe1'])) $equipe1 = $_GET['equipe1'];
if (isset($_GET['equipe2'])) $equipe2 = $_GET['equipe2'];
if (isset($_GET['codeEquipe'])) $codeEquipe = $_GET['codeEquipe'];
if (isset($_GET['codeEquipe1'])) $codeEquipe1 = $_GET['codeEquipe1'];
if (isset($_GET['codeEquipe2']))$codeEquipe2 = $_GET['codeEquipe2'];
if (isset($_GET['journee']))$journee = $_GET['journee'];
if (isset($_GET['score1']))$score1 = $_GET['score1'];
if (isset($_GET['score2']))$score2 = $_GET['score2'];
if (isset($_GET['bonusDefEquipe1'])) $bonusDefEquipe1DeLaJournee = $_GET['bonusDefEquipe1']; else $bonusDefEquipe1DeLaJournee =0;
if (isset($_GET['bonusDefEquipe2'])) $bonusDefEquipe2DeLaJournee = $_GET['bonusDefEquipe2']; else $bonusDefEquipe2DeLaJournee =0;
if (isset($_GET['bonusOffEquipe1'])) $bonusOffEquipe1DeLaJournee = $_GET['bonusOffEquipe1']; else $bonusOffEquipe1DeLaJournee =0;
if (isset($_GET['bonusOffEquipe2'])) $bonusOffEquipe2DeLaJournee = $_GET['bonusOffEquipe2']; else $bonusOffEquipe2DeLaJournee =0;


if (isset ($bonusEquipe1TableEquipes)) $bonusEquipe1TableEquipes = $bonusEquipe1TableEquipes; else $bonusEquipe1TableEquipes = 0;
if (isset ($bonusEquipe2TableEquipes)) $bonusEquipe2TableEquipes = $bonusEquipe2TableEquipes; else $bonusEquipe2TableEquipes = 0;
if (isset ($bonusDeLaJourneeAcquisEquipe1)) $bonusDeLaJourneeAcquisEquipe1 = $bonusDeLaJourneeAcquisEquipe1; else $bonusDeLaJourneeAcquisEquipe1 =0;
if (isset ($bonusDeLaJourneeAcquisEquipe2)) $bonusDeLaJourneeAcquisEquipe2 = $bonusDeLaJourneeAcquisEquipe2; else $bonusDeLaJourneeAcquisEquipe2 =0;
	
//$bonusEquipe1TableEquipes


$championnat = substr("$journee",0 ,6);
$champ = substr("$journee",0 ,6);
//*****************************************************************************
//********                                                            *********
// *******    Donn�es de la journ�e r�cup�rer a partir du formulaire  *********
//********                                                            *********
//*****************************************************************************
require ("../../connect/connexion6.php"); 

/*
echo "*********************************";echo "<br />";
echo "***** Donnees de la journee *****";echo "<br />";
echo "*********************************";echo "<br />";
echo "<br />";
/*************************************/
//$bddComite = "fed3ne";
/***********************************/
/*
echo "1-journee : ".$journee;echo "<br />";
echo "2-bddComite : ".$bddComite;echo "<br />";
echo "3-comite : ".$comite;echo "<br />";
echo "<br />";

echo "***** codeEquipe1 *****";echo "<br />";
echo "4-codeEquipe1 : ".$codeEquipe1;echo "<br />";
echo "5-bonusDefEquipe1DeLaJournee :".$bonusDefEquipe1DeLaJournee;echo "<br />";
echo "6-bonusOffEquipe1DeLaJournee :".$bonusOffEquipe1DeLaJournee;echo "<br />";
echo "7-score1 :".$score1;echo "<br />";
echo "<br />";

echo "***** codeEquipe2 *****";echo "<br />";
echo "8-codeEquipe2 : ".$codeEquipe2;echo "<br />";
echo "9-bonusDefEquipe2DeLaJournee :".$bonusDefEquipe2DeLaJournee;echo "<br />";
echo "10-bonusOffEquipe2DeLaJournee :".$bonusOffEquipe2DeLaJournee;echo "<br />"; 
echo "11-score2 :".$score2;echo "<br />";
echo "<br />";echo "<br />";
*/
//************************************************************************************
//********                                                                   *********
// *******    Donn�es recup�rees dans les table equipes et equipesresultats  *********
//********                                                                   *********
//************************************************************************************
/*
echo "***********************************************";echo "<br />";
echo "***** donnees recuperees dans les tables *****";echo "<br />";
echo "***********************************************";echo "<br />";
*/
//construction des variables
$phpcomite= "php".''.$bddComite;
//echo "12-phpcomite : ".$phpcomite;echo "<br />";
$phpcomite_equipes = $phpcomite."_equipes";
$phpcomite_matchs  = $phpcomite."_matchs";
$phpcomite_equipesResultat = $phpcomite."_equipesresultat"; 
/*bonus de la journee*/
	$jour = substr("$journee",-2);
	$J="J".''.$jour; 

//1-Bonus deja acquis (table equipes)

/*****pour l"equipe1***************/
//echo "pour l'equipe1";echo "<br />";

	/*bonus acquis dans la table equipes*/
	$reponse = $bdd->query("SELECT penalite
			FROM $phpcomite_equipes
			WHERE id = $codeEquipe1 "); 				
	while ($row = $reponse->fetch())
		{ 
		$bonusEquipe1TableEquipes = $row[0];					
		}
	
	
	/*bonus acquis dans la table equipesresultat*/
	$reponse = $bdd->query("SELECT penaliteOff, penaliteDef
			FROM $phpcomite_equipesResultat
			WHERE id = $codeEquipe1 "); 				
	while ($row = $reponse->fetch())
		{ 
		$bonusOffEquipe1TableEquipesResultat = $row[0];					
		$bonusDefEquipe1TableEquipesResultat = $row[1];	
		}
	
	$reponse = $bdd->query( "
			SELECT $J
			FROM $phpcomite_equipesResultat
			WHERE id = $codeEquipe1  "); 
			
	while ($row = $reponse->fetch())
		{
		$bonusDeLaJourneeAcquisEquipe1 = $row[0];
		}
		
/*		
	echo "13-Journee : ".$J;echo "<br/>";	
	echo "14-recup des bonus deja acquis (table equipes) : ".$bonusEquipe1TableEquipes;echo "<br />";
	echo "15-recup des bonusOffEquipe1TableEquipesResultat deja acquis (table equipesresultats) : ".$bonusOffEquipe1TableEquipesResultat;echo "<br />";
	echo "16-recup des bonusDefEquipe1TableEquipesResultat deja acquis (table equipesresultats) : ".$bonusDefEquipe1TableEquipesResultat;echo "<br />";	
	echo "17-bonusDeLaJourneeAcquisEquipe1 : ".$bonusDeLaJourneeAcquisEquipe1;echo "<br />";
	echo "<br />";
	echo "<br />";
*/		
/*****pour l"equipe2***************/
//	echo "pour l'equipe2";echo "<br />";
	/*bonus acquis dans la table equipes*/
	$reponse = $bdd->query( "SELECT penalite
			FROM $phpcomite_equipes
			WHERE id = $codeEquipe2 "); 		
	while ($row = $reponse->fetch())
		{ 
		$bonusEquipe2TableEquipes = $row[0];					
		}
	
	/*bonus acquis dans la table equipesresultat*/
 
	$reponse = $bdd->query("SELECT penaliteOff, penaliteDef
			FROM $phpcomite_equipesResultat
			WHERE id = $codeEquipe2 "); 				
	while ($row = $reponse->fetch())
		{ 
		$bonusOffEquipe2TableEquipesResultat = $row[0];					
		$bonusDefEquipe2TableEquipesResultat = $row[1];	
		}
	$reponse = $bdd->query( "
			SELECT $J
			FROM $phpcomite_equipesResultat
			WHERE id = $codeEquipe1 
			AND $J = '$J ' "); 		
	while ($row = $reponse->fetch())
		{
		$bonusDeLaJourneeAcquisEquipe2 = $row[0];
		}
/*	
	echo "recup des bonus deja acquis (table equipes) : ".$bonusEquipe2TableEquipes;echo "<br />";
	echo "recup des bonusOffEquipe2TableEquipesResultat deja acquis (table equipesresultats) : ".$bonusOffEquipe2TableEquipesResultat;echo "<br />";
	echo "recup des bonusDefEquipe2TableEquipesResultat deja acquis (table equipesresultats) : ".$bonusDefEquipe2TableEquipesResultat;echo "<br />";
	echo "bonusDeLaJourneeAcquisEquipe2 : ".$bonusDeLaJourneeAcquisEquipe2;echo "<br />";
	echo "<br />";
	echo "<br />";
*/
//*************************************************************************
//********                                                        *********
// *******                      Traitement des donn�es            *********
//********                                                        *********
//**************************************************************************
/*
echo "***********************************************";echo "<br />";
echo "***** Traitement des donnees   *****";echo "<br />";
echo "***********************************************";echo "<br />";
*/

//r�cup�ration de l'id � modifier
/*
$reponse = $bdd->query( "SELECT id
						FROM $phpcomite_matchs
						WHERE id_equipe_dom = '$codeEquipe1' 
						AND id_journee = '$journee' "); 		
	while ($row = $reponse->fetch())
		{
		$id = $row[0];
		}
echo "id : ".$id;echo "<br/>";
*/
// Equipe 1	
	//Bonus d�ja acquis + bonus de la journ�e pour la table equipes
	$eq1TotalBonusTableEquipes=$bonusEquipe1TableEquipes + $bonusOffEquipe1DeLaJournee + $bonusDefEquipe1DeLaJournee;
	//Bonus de la journ�e
	$eq1BonusJourneeTableEquipesResultat = $bonusDefEquipe1DeLaJournee + $bonusOffEquipe1DeLaJournee;
	//Totaux des bonus offesifs
	$eq1TotauxBonusOffensifs = $bonusOffEquipe1DeLaJournee + $bonusOffEquipe1TableEquipesResultat;
	//Totaux des bonus defensifs
	$eq1TotauxBonusDefensifs = $bonusDefEquipe1DeLaJournee + $bonusDefEquipe1TableEquipesResultat;
/*	
	echo $eq1TotalBonusTableEquipes;echo "<br />";
	echo $eq1BonusJourneeTableEquipesResultat;echo "<br />";
	echo "(off)".$eq1TotauxBonusOffensifs;echo "<br />";
	echo "(def)".$eq1TotauxBonusDefensifs;echo "<br />";
*/

// Equipe 2	
	//Bonus d�ja acquis + bonus de la journ�e pour la table equipes
	$eq2TotalBonusTableEquipes=$bonusEquipe2TableEquipes + $bonusOffEquipe2DeLaJournee + $bonusDefEquipe2DeLaJournee;
	//Bonus de la journ�e
	$eq2BonusJourneeTableEquipesResultat = $bonusDefEquipe2DeLaJournee + $bonusOffEquipe2DeLaJournee;
	//Totaux des bonus offesifs
	$eq2TotauxBonusOffensifs = $bonusOffEquipe2DeLaJournee + $bonusOffEquipe2TableEquipesResultat;
	//Totaux des bonus defensifs
	$eq2TotauxBonusDefensifs = $bonusDefEquipe2DeLaJournee + $bonusDefEquipe2TableEquipesResultat;
/*	
	echo $eq2TotalBonusTableEquipes;echo "<br />";
	echo $eq2BonusJourneeTableEquipesResultat;echo "<br />";
	echo "(off)".$eq2TotauxBonusOffensifs;echo "<br />";
	echo "(def)".$eq2TotauxBonusDefensifs;echo "<br />";



echo "<br />";
*/
//*************************************************************************
//********                                                        *********
// *******                 Modification de tables                 *********
//********                                                        *********
//*************************************************************************
/*
echo "***********************************************";echo "<br />";
echo "*****    Modification de tables            *****";echo "<br />";
echo "***********************************************";echo "<br />";
*/

// ****** - 1 - Enregistrement des scores 1 et 2 dans la table matchs  ********** 

	  $sql =$bdd->exec( "UPDATE $phpcomite_matchs
          SET buts_dom='$score1', buts_ext='$score2'
          WHERE id_equipe_dom='$codeEquipe1' and  id_equipe_ext='$codeEquipe2'") ;	  


// ***********     Equipe 1  ***************************************************
// ****** - 2 - Prise en charge du bonus de la journee pour l'equipe1 **********

if ($bonusDeLaJourneeAcquisEquipe1 == 0 and ($bonusOffEquipe1DeLaJournee + $bonusDefEquipe1DeLaJournee) > 0)
{
	
 //** -2.1 - Modifications de la table equipes pour l'equipe1 

	 $sql3=$bdd->exec("UPDATE $phpcomite_equipes
				SET penalite='$eq1TotalBonusTableEquipes'
				WHERE id='$codeEquipe1' ") ;
	
	
 //** - 2.2 - Modifications de la table equipesresultat 
	

	//** - 2.2.1 - Prise en charge du bonus de la journee
		
	$sql3=$bdd->exec("UPDATE $phpcomite_equipesResultat
				SET $J = '$eq1BonusJourneeTableEquipesResultat'
				WHERE id='$codeEquipe1' ") ;

	//** - 2.2.2 - Prise en charge du bonus offensif (journ�e + d�j� acquis)

	if ($bonusOffEquipe1DeLaJournee > 0){
	 
	 $sql3=$bdd->exec("UPDATE $phpcomite_equipesResultat
				SET penaliteOff = '$eq1TotauxBonusOffensifs'
				WHERE id ='$codeEquipe1' ") ;}
	else{
	//** - 2.2.3 Prise en charge du bonus defensif (journ�e + d�j� acquis)
	 $sql3=$bdd->exec("UPDATE $phpcomite_equipesResultat
				SET penaliteDef = '$eq1TotauxBonusDefensifs'
				WHERE id='$codeEquipe1' ") ;}	
}


// ***********     Equipe 2  ***************************************************
// ****** - 2 - Prise en charge du bonus de la journee pour l'equipe1 **********

if ($bonusDeLaJourneeAcquisEquipe2 == 0 and ($bonusOffEquipe2DeLaJournee + $bonusDefEquipe2DeLaJournee) > 0)
{
 //** -2.1 - Modifications de la table equipes pour l'equipe1 

	 $sql3=$bdd->exec("UPDATE $phpcomite_equipes
				SET penalite='$eq2TotalBonusTableEquipes'
				WHERE id='$codeEquipe2' ") ;
	
	
 //** - 2.2 - Modifications de la table equipesresultat 
	

	//** - 2.2.1 - Prise en charge du bonus de la journee
		
	$sql3=$bdd->exec("UPDATE $phpcomite_equipesResultat
				SET $J = '$eq2BonusJourneeTableEquipesResultat'
				WHERE id='$codeEquipe2' ") ;

	//** - 2.2.2 - Prise en charge du bonus offensif (journ�e + d�j� acquis)
	
	if ($bonusOffEquipe2DeLaJournee > 0){
	 
	 $sql3=$bdd->exec("UPDATE $phpcomite_equipesResultat
				SET penaliteOff = $eq2TotauxBonusOffensifs
				WHERE id ='$codeEquipe2' ") ;}
	else{
	//** - 2.2.3 Prise en charge du bonus defensif (journ�e + d�j� acquis)
	 $sql3=$bdd->exec("UPDATE $phpcomite_equipesResultat
				SET penaliteDef = $eq2TotauxBonusDefensifs
				WHERE id='$codeEquipe2' ") ;}	
}


if ($bddComite== 'fed3ne' OR $bddComite=='pro' OR $bddComite== 'fed3NE')
{	
	$champ = substr($journee,0,6);	
}
//echo "<br>";
//echo "bddComite : ".$bddComite;
?>
			
 <meta http-equiv="refresh" content="0; URL=/Phpleague/<?php echo "php".$bddComite; ?>/admin/index5.php?page=championnat&action=generer&champ=<?php echo $champ; ?>&bddComite=<?php echo $bddComite; ?>&comite=<?php echo $comite; ?>">


 

 
 
