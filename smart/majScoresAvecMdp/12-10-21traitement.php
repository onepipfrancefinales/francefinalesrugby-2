<?php
//récupération des valeurs des champs:
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
// *******    Données de la journée récupèrer a partir du formulaire  *********
//********                                                            *********
//*****************************************************************************
require ("../../connect/connexion6.php"); 
echo "*********************************";echo "<br />";
echo "***** Donnees de la journee *****";echo "<br />";
echo "*********************************";echo "<br />";
echo "<br />";
echo "journee : ".$journee;echo "<br />";
echo "bddComite : ".$bddComite;echo "<br />";
echo "comite : ".$comite;echo "<br />";
echo "<br />";

echo "***** codeEquipe1 *****";echo "<br />";
echo "codeEquipe1 : ".$codeEquipe1;echo "<br />";
echo "bonusDefEquipe1DeLaJournee :".$bonusDefEquipe1DeLaJournee;echo "<br />";
echo "bonusOffEquipe1DeLaJournee :".$bonusOffEquipe1DeLaJournee;echo "<br />";
echo "score1 :".$score1;echo "<br />";
echo "<br />";

echo "***** codeEquipe2 *****";echo "<br />";
echo "codeEquipe2 : ".$codeEquipe2;echo "<br />";
echo "bonusDefEquipe2DeLaJournee :".$bonusDefEquipe2DeLaJournee;echo "<br />";
echo "bonusOffEquipe2DeLaJournee :".$bonusOffEquipe2DeLaJournee;echo "<br />"; 
echo "score2 :".$score2;echo "<br />";
echo "<br />";echo "<br />";



//************************************************************************************
//********                                                                   *********
// *******    Données recupèrees dans les table equipes et equipesresultats  *********
//********                                                                   *********
//************************************************************************************

echo "***********************************************";echo "<br />";
echo "***** donnees recuperees dans les tables *****";echo "<br />";
echo "***********************************************";echo "<br />";

//construction des variables
$phpcomite= "php".''.$bddComite;
$phpcomite_equipes = "php".''.$bddComite.''."_equipes";
$phpcomite_matchs  = "php".''.$bddComite.''."_matchs";
$phpcomite_equipesResultat = "php".''.$bddComite.''."_equipesresultat"; 
/*bonus de la journee*/
	$jour = substr("$journee",-2);
	$J="J".''.$jour; 

//1-Bonus deja acquis (table equipes)

/*****pour l"equipe1***************/
echo "pour l'equipe1";echo "<br />";

	/*bonus acquis dans la table equipes*/
	$reponse = $bdd->query("SELECT penalite
			FROM $phpcomite_equipes
			WHERE id = $codeEquipe1 "); 				
	while ($row = $reponse->fetch())
		{ 
		$bonusEquipe1TableEquipes = $row[0];					
		}
	echo "<br />";
	
	/*bonus acquis dans la table equipesresultat*/
	$reponse = $bdd->query("SELECT penaliteOff, penaliteDef
			FROM $phpcomite_equipesResultat
			WHERE id = $codeEquipe1 "); 				
	while ($row = $reponse->fetch())
		{ 
		$bonusOffEquipe1TableEquipesResultat = $row[0];					
		$bonusDefEquipe1TableEquipesResultat = $row[1];	
		}
	
	
	echo "Journee : ".$J;echo "<br/>";

	
	
	
	$reponse = $bdd->query( "
			SELECT $J
			FROM $phpcomite_equipesResultat
			WHERE id = $codeEquipe1 
			AND $J = '$J ' "); 		
	while ($row = $reponse->fetch())
		{
		$bonusDeLaJourneeAcquisEquipe1 = $row[0];
		}
		
	echo "recup des bonus deja acquis (table equipes) : ".$bonusEquipe1TableEquipes;echo "<br />";
	echo "recup des bonusOffEquipe1TableEquipesResultat deja acquis (table equipesresultats) : ".$bonusOffEquipe1TableEquipesResultat;echo "<br />";
	echo "recup des bonusDefEquipe1TableEquipesResultat deja acquis (table equipesresultats) : ".$bonusDefEquipe1TableEquipesResultat;echo "<br />";	
	echo "bonusDeLaJourneeAcquisEquipe1 : ".$bonusDeLaJourneeAcquisEquipe1;echo "<br />";
	echo "<br />";
	echo "<br />";
		
/*****pour l"equipe2***************/
	echo "pour l'equipe2";echo "<br />";
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
	
	echo "recup des bonus deja acquis (table equipes) : ".$bonusEquipe2TableEquipes;echo "<br />";
	echo "recup des bonusOffEquipe2TableEquipesResultat deja acquis (table equipesresultats) : ".$bonusOffEquipe2TableEquipesResultat;echo "<br />";
	echo "recup des bonusDefEquipe2TableEquipesResultat deja acquis (table equipesresultats) : ".$bonusDefEquipe2TableEquipesResultat;echo "<br />";
	echo "bonusDeLaJourneeAcquisEquipe2 : ".$bonusDeLaJourneeAcquisEquipe2;echo "<br />";
	echo "<br />";
	echo "<br />";

//*************************************************************************
//********                                                        *********
// *******                      Traitement des données            *********
//********                                                        *********
//**************************************************************************

echo "***********************************************";echo "<br />";
echo "***** Traitement des donnees   *****";echo "<br />";
echo "***********************************************";echo "<br />";


//récupération de l'id à modifier
$reponse = $bdd->query( "SELECT id
						FROM phpfed3ne_matchs
						WHERE id_equipe_dom = '$codeEquipe1' 
						AND id_journee = '$journee' "); 		
	while ($row = $reponse->fetch())
		{
		$id = $row[0];
		}
echo "id : ".$id;echo "<br/>";

 
echo "<br />";
echo "<br />";
//*************************************************************************
//********                                                        *********
// *******                 Modification de tables                 *********
//********                                                        *********
//*************************************************************************
echo "***********************************************";echo "<br />";
echo "*****    Modification de tables            *****";echo "<br />";
echo "***********************************************";echo "<br />";


// ****** Enregistrement des scores 1 et 2 dans la table matchs  ********** 

	  $sql =$bdd->exec( "UPDATE $phpcomite_matchs
          SET buts_dom='$score1', buts_ext='$score2'
          WHERE id='$id' ") ;	  
echo "1- ecriture des resultats dans la table matchs"."<br/>";
echo "score : ".$score1." - ".$score2; echo "<br/>";
// ****** Prise en charge du bonus de la journee pour l'equipe1 **********

if ($bonusDeLaJourneeAcquisEquipe1 == 0 and ($bonusOffEquipe1DeLaJournee + $bonusDefEquipe1DeLaJournee) > 0)
{
	//1 - modification de la table equipes 
	 $sql3=$bdd->exec("UPDATE $phpcomite_equipes
				SET penalite='$bonusEquipe1TableEquipes + $bonusOffEquipe1DeLaJournee + $bonusDefEquipe1DeLaJournee'
				WHERE id='$codeEquipe1' ") ;
	
echo "2- ecriture des bonus dans la table equipes pour l'equipe1"."<br/>";	
$toto=$bonusEquipe1TableEquipes + $bonusOffEquipe1DeLaJournee + $bonusDefEquipe1DeLaJournee;
echo "Totaux bonus equipe 1 : ".$toto."<br/>";

	//2 - modifications de la table equipesresultat 
	

	//2.1 - prise en charge du bonus de la journee
		$sql3=$bdd->exec("UPDATE $phpcomite_equipesResultat
				SET $J = $bonusEquipe1TableEquipes + $bonusOffEquipe1DeLaJournee
				WHERE  $J = '$J '
				AND id='$codeEquipe1' ") ;
	//echo "total bonus de la journée Equipe1 : ".$bonusEquipe1TableEquipes + $bonusOffEquipe1DeLaJournee;
echo "3- ecriture des bonus dans la table equipesresulats pour l'equipe1"."<br/>";
$toto=$bonusEquipe1TableEquipes + $bonusOffEquipe1DeLaJournee + $bonusDefEquipe1DeLaJournee;
echo "3.1-bonus de la journee (J): equipe 1 : ".$toto;
	
	//2.2 - prise en charge du bonus offensif (journée + déjà acquis)
	if ($bonusOffEquipe1DeLaJournee > 0)
	{
		$sql3=$bdd->exec("UPDATE $phpcomite_equipesResultat
				SET penaliteOff = bonusOffEquipe1DeLaJournee+ bonusOffEquipe1TableEquipesResultat
				WHERE id ='$codeEquipe1' ") ;
	
		echo "3.2-bonusOFFTotal  :total bonusOffEquipe1 :".$bonusOffEquipe1DeLaJournee + $bonusOffEquipe1TableEquipesResultat;
		echo "<br/>";
	}
	else
	//prise en charge du bonus defensif (journée + déjà acquis)
	{
		$sql3=$bdd->exec("UPDATE $phpcomite_equipesResultat
				SET penaliteDef = bonusDefEquipe1DeLaJournee + bonusDefEquipe1TableEquipesResultat
				WHERE id='$codeEquipe1' ") ;
		$toto=$bonusDefEquipe1DeLaJournee + $bonusDefEquipe1TableEquipesResultat;
	echo "<br/>";
		echo "3.2-bonusdefTotal  :total bonusOffEquipe1 :".$toto;echo "<br/>";
	}	

}
/* 
	//verification de la présence d'un bonus pour la journée traitée
 echo "phpcomite_equipesResultat : ".$phpcomite_equipesResultat;echo "<br/>";
echo "codeEquipe1 : ".$codeEquipe1;echo "<br/>"; 
 $reponse = $bdd->query( "
 SELECT $J
			FROM $phpcomite_equipesResultat
			WHERE id = $codeEquipe1 
			AND $J = '$J ' "); 		
	while ($row = $reponse->fetch())
		{
		$bonusDeLaJourneeAcquisEquipe1 = $row[0];
		}
  
  echo "bonusDeLaJourneeAcquis : ".$bonusDeLaJourneeAcquis;echo "<br/>";
   $bonusDeLaJourneeEquipe1 = $bonusOffDeLaJourneeEquipe1 + $bonusDefDeLaJourneeEquipe1;
  // $bonusDeLaJourneeEquipe2 = $bonusOffDeLaJourneeEquipe2 + $bonusDefDeLaJourneeEquipe2

// if (is_numeric($bonusOffEquipe1) and is_numeric($bonusDefEquipe1))
//  $sommeBonusEquipe1=$bonusOffEquipe1 + $bonusDefEquipe1;
//  else
//  $sommeBonusEquipe1=0;
/*
echo "si bonusDeLaJourneeAcquis égal à 0 alors";echo "<br/>";
if ($bonusDeLaJourneeAcquisEquipe1 == 0 and $bonusDeLaJOurneeEquipe1>0) 
{
  
  echo "insertion du bonus dans la table resultat et equipesResultat pour l'equipe 1";echo "<br/>";
  
 
  
  $sql2 =$bdd->exec("UPDATE $phpcomite_equipesResultat
          SET penaliteOff='$bonusOffEquipe1'
          WHERE id='$codeEquipe1' 
		  AND $J = '$J '		  ") ;
}
  //$requete = mysql_query( $sql2 )   ;
  
  
  $sql3=$bdd->exec("UPDATE $phpcomite_equipesResultat
				SET penaliteDef='$bonusDefEquipe1'
				WHERE id='$codeEquipe1' ") ;
 
 // $requete = mysql_query( $sql3 )   ;
  if (is_numeric($bonusOffEquipe1) and is_numeric($bonusDefEquipe1))
  $sommeBonusEquipe1=$bonusOffEquipe1 + $bonusDefEquipe1;
  else
  $sommeBonusEquipe1=0;
  
 // conservation de bonus off et def equipe1
  //NON ENCORE TESTE
 //$jour = substr("$journee",-2);
 //$J="J".''.$jour;
 
   //$sql23=$bdd->exec("UPDATE $phpcomite_equipesResultat
	//			SET $J='$sommeBonusEquipe1'
	//			WHERE id='$codeEquipe1' ") ;
 
 // $requete = mysql_query( $sql23)   ;
  
 
  // ****** Modification du bonus de l'équipe 2 **********

  $sql4 = $bdd->exec("UPDATE $phpcomite_equipesResultat
          SET penaliteOff='$bonusOffEquipe2'
          WHERE id='$codeEquipe2' ") ;
 
 // $requete = mysql_query( $sql4 )   ;
  
  
  $sql5=$bdd->exec("UPDATE $phpcomite_equipesResultat
				SET penaliteDef='$bonusDefEquipe2'
				WHERE id='$codeEquipe2' ") ;
 
  //$requete = mysql_query( $sql5 )   ;
  if( is_numeric($bonusOffEquipe2) and is_numeric($bonusDefEquipe2))
   $sommeBonusEquipe2=$bonusOffEquipe2 + $bonusDefEquipe2;
  else
	$sommeBonusEquipe2=0;  
 // conservation de bonus off et def  equipe2
 //NON ENCORE TESTE
 $jour = substr("$journee",-2);
 $J="J".''.$jour;
 
   $sql45=$bdd->exec("UPDATE $phpcomite_equipesResultat
				SET $J=$sommeBonusEquipe2
				WHERE id='$codeEquipe2' ") ;
 
 // $requete = mysql_query( $sql45)   ;
  

  
  //lecture de la table parallele
  $reponse = $bdd->query( "SELECT penaliteOff, penaliteDef
				FROM $phpcomite_equipesResultat
				WHERE id = $codeEquipe1"); 
					// $result = mysql_query($reponse) ;
					// while ($row = mysql_fetch_array($result) )
					while ($row = $reponse->fetch())
							{ 
							$bonusOff1 = $row[0];
							$bonusDef1 = $row[1];
							}
							
	$reponse =$bdd->query( "SELECT penaliteOff, penaliteDef
				FROM $phpcomite_equipesResultat
				WHERE id = $codeEquipe2"); 
					//$result = mysql_query($reponse) ;
					// while ($row = mysql_fetch_array($result) )
					while ($row = $reponse->fetch())	
							{ 
							$bonusOff2 = $row[0];
							$bonusDef2 = $row[1];
							}						
							
							
	if ($bonusOff1 > 0)
		$bonusOffequipe1 = 1;
	else
		$bonusOffequipe1 = 0;
	
	if ($bonusOff2 > 0)
		$bonusOffequipe2 = 1;
	else
		$bonusOffequipe2 = 0;
 
 
 
 $bonusTotalEquipe1 = $bonusOffEquipe1 + $bonusDef1 + $bonusEquipe1BDD;
 $bonusTotalEquipe2 = $bonusOffEquipe2 + $bonusDef2 + $bonusEquipe2BDD;
 
 
  $sql7=$bdd->exec("UPDATE $phpcomite_equipes
				SET penalite='$bonusTotalEquipe1'
				WHERE id='$codeEquipe1' " );
 
  //$requete = mysql_query( $sql7 )   ;
  
   $sql8=$bdd->exec("UPDATE $phpcomite_equipes
				SET penalite='$bonusTotalEquipe2'
				WHERE id='$codeEquipe2' ") ;
 
 // $requete = mysql_query( $sql8 )   ;
 

*/
echo $champ;

?>
 
<!--
 <meta http-equiv="refresh" content="0; URL=/Phpleague/<?php echo "php".$bddComite; ?>/admin/index5.php?page=championnat&action=generer&champ=<?php echo $champ; ?>&bddComite=<?php echo $bddComite; ?>&comite=<?php echo $comite; ?>">
-->

 

 
 
