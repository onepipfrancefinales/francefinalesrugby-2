<?php
//renommerId($codeLigue, $journeeTraitee, $debutPoule, $finPoule)
$ligue = "phpfed3ne";
$tableMatch = $ligue."_matchs";
$journeeTraitee = "06";
$codeLigue = "99";
$debutPoule = "017";
$finPoule = "018";

$debutPouleTraite = ($codeLigue * "1000000") + ("$debutPoule"*"1000") + "101" ;
$finPouleTraite = ($codeLigue * "1000000") + ("$finPoule"*"1000") + "922";
echo $debutPouleTraite;echo "<br>";
echo $finPouleTraite;echo "<br>";

//****************************************
//*******lecture de la table Matchs ******	
//****************************************

require '../../connect/connexion6.php';

if (isset($id_equipe_domBdd)) $id_equipe_domBdd=$id_equipe_domBdd;else $id_equipe_domBdd =NULL;
if (isset($id_equipe_ExtBdd)) $id_equipe_ExtBdd=$id_equipe_ExtBdd;else $id_equipe_ExtBdd =NULL;
if (isset($id_journeeBdd)) $id_journeeBdd=$id_journeeBdd;else $id_journeeBdd =0;
if (isset($buts_domBdd)) $buts_domBdd=$buts_domBdd;else $buts_domBdd =0;
if (isset($buts_extBdd)) $buts_extBdd=$buts_extBdd;else $buts_extBdd =0;

$idBdd = array ();
$id_equipe_domBdd = array ();
$id_equipe_extBdd  = array ();
$id_journeeBdd = array ();
$buts_domBdd = array ();
$buts_extBdd = array ();
 
//Nbre de lignes 
$requete = $bdd->query("SELECT COUNT(id)
						FROM $tableMatch
						WHERE id_journee like '06'
						and id_journee between '99116101' and '99116122'
						and id_journee between '99216101' and '99216122'
						");

$row = $requete->fetch();
$nbreLignes = $row[0];	
echo "<br />";
echo "nbreLignes :".$nbreLignes;
echo "<br />";
echo "<br />";

$reponse = $bdd->query("	
				SELECT id, id_equipe_dom, id_equipe_ext, id_journee, buts_dom, buts_ext
				FROM $tableMatch
				WHERE id_journee like '06'
						and id_journee between '99116101' and '99116122'
						and id_journee between '99216101' and '99216122'
				order by id
				 "); 
										
	 while ($row = $reponse->fetch() )
		{ 
		 $idBdd[] = $row[0];
		 $id_equipe_domBdd[] = $row[1];
		 $id_equipe_extBdd[] = $row[2];
		 $id_journeeBdd[] = $row[3];
		 $buts_domBdd[] = $row[4];
		 $buts_extBdd[] = $row[5];
		}
//echo "************ lecture de le base de données ***************";	
$cpte = 0;
$cpte2 = 0;
for ($i=0; $i<=$nbreLignes-1;$i++)
{

$bdd->exec("UPDATE $tableMatch
				SET id = '$i'   
				WHERE id_equipe_dom = '$id_equipe_domBdd[$i]' AND id_equipe_ext = '$id_equipe_extBdd[$i]'");	
	
echo  $i. " ".  $id_equipe_domBdd[$i]. " ".  $id_equipe_extBdd[$i]. " ".  $id_journeeBdd[$i]. " ".  $buts_domBdd[$i]. "-".  $buts_extBdd[$i]."<br>";	
$cpte = $cpte+1;
	



/*	
echo  "id : " .$idBdd."<br>";
echo  "id_equipe_domBdd : ".$id_equipe_domBdd."<br>";
echo  "id_equipe_ExtBdd : ".$id_equipe_extBdd."<br>"; 
echo  "id_journee : ".$id_journeeBdd."<br>";
echo  "buts_domBdd : ".$buts_domBdd."<br>";
echo  "buts_ExtBdd : ".$buts_extBdd."<br>";
*/
}
echo "<br/>";
echo "Nbre de lignes lues: ".$cpte;echo "<br/>";

//echo "************ fin lecture de le base de données ***************"; 
//******************************************************************************************


?>