
<?php 
if (isset ($_GET['type'])) $type = $_GET['type']; else $type='-';

$type = $_GET['type'] ;
$comite= $_POST['comite'] ; 
$borne1 =$_POST['borne1'];
$borne2 =$_POST['borne2'];
echo "Modification par : ".' '.$type.' '."<br />";
echo "Comit&eacute; : ".' '.$comite.' '."<br />";
echo "Division : ".' '.$borne1.' '."<br />";
echo "Journ&eacute;e &agrave; supprimer : ".''.$borne2.' '."<br />";




//*****************************************
//****** choix de la base de données ******
//*****************************************

	require ("../../connect/connexion6.php");
	


$comiteMatchs=$comite.''."_matchs";
$comiteMatchsSAUV = $comiteMatchs.''."SAUV";



//*****************************************************
//***** Suppression de la journée sélectionnée ********
//*****************************************************

if ($type == "journee")
{
$comiteMatchs=$comite.''."_matchs";
	for ($i=0; $i<9 ; $i ++)
	  {
		$journee = (($borne1 + $i)*100) + $borne2;
		echo $journee;echo "<br />";

		$bdd->exec("DELETE FROM $comiteMatchs
					WHERE id_journee = $journee");

		//$requete = mysql_query( $sql ) ;
	  }
}
else
{		
		$bdd->exec(" DELETE FROM $comiteMatchs
				WHERE id_journee BETWEEN $borne1 AND $borne2");
//$requete = mysql_query( $sql ) ;


}

//*******************************************************
//******** Création et Sauvegarde de la table ***********
//*******************************************************


//Création

//$sql2="	CREATE TABLE $comiteMatchsSAUV 
//		LIKE $comiteMatchs";
//$requete = mysql_query( $sql2 ) ;
		
		//insertion des données
//$bdd->exec("INSERT INTO $comiteMatchsSAUV
//			SELECT *
	//		FROM $comiteMatchs");
//$requete = mysql_query( $sql3 ) ;


//mysql_close(); 


//***************************************************
//************* Mise à jours des classements ********
//***************************************************






?>
<br>
<?php require 'bas.php';?>