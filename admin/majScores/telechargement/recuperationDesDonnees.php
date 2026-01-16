


<?php 
if (isset ($_GET['type'])) $type = $_GET['type']; else $type='-';

//$type = $_GET['type'] ;
$comite= $_POST['comite'] ; 
//$borne1 =$_POST['borne1'];
//$borne2 =$_POST['borne2'];
//echo "Modification par : ".' '.$type.' '."<br />";
echo "Comit&eacute; : ".' '.$comite.' '."<br />";
//echo "Division : ".' '.$borne1.' '."<br />";
//echo "Journ&eacute;e &agrave; supprimer : ".''.$borne2.' '."<br />";




//*****************************************
//****** choix de la base de données ******
//*****************************************

if ($comite=="phpf1" or $comite=="phpfed2" or $comite=="phpfed3NE" or $comite=="phpfed3GS" or $comite=="phpfem")
	{
	require ("../../../connect/connection3.php");
	}
else	
	{
	require ("../../../connect/connection2.php");
	}


$comiteMatchs=$comite.''."_matchs";
$comiteMatchsSAUV = $comiteMatchs.''."SAUV";



//******************************************
//***** Suppression de la sélection ********
//******************************************
/*
if ($type == "journee")
{
$comiteMatchs=$comite.''."_matchs";
	for ($i=0; $i<9 ; $i ++)
	  {
		$journee = (($borne1 + $i)*100) + $borne2;
		echo $journee;echo "<br />";

		$sql =" DELETE FROM $comiteMatchs
				WHERE id_journee = $journee";

		$requete = mysql_query( $sql ) ;
	  }
}
else
{		
		$sql =" DELETE FROM $comiteMatchs
				WHERE id_journee BETWEEN $borne1 AND $borne2";
$requete = mysql_query( $sql ) ;


}
*/
//*******************************************************
//******** Création et Sauvegarde de la table ***********
//*******************************************************

/*
//Création

//$sql2="	CREATE TABLE $comiteMatchsSAUV 
//		LIKE $comiteMatchs";
//$requete = mysql_query( $sql2 ) ;
		
		//insertion des données
$sql3="	INSERT INTO $comiteMatchsSAUV
		SELECT *
		FROM $comiteMatchs";
$requete = mysql_query( $sql3 ) ;


mysql_close(); 
*/

//***************************************************
//************* Mise à jours des classements ********
//***************************************************



//require 'formulaire1.htm';
?>


