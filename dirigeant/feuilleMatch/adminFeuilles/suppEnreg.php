<?php 
$connect = $_GET['connect'];
$equipe = $_GET['equipe'];
$id_equipe = $_GET['id_equipe'];
$comite = $_GET['comite'];
$code_match = $_GET['code_match'];

//echo $connect;
//echo $equipe;
//echo $comite;
//echo $code_match;
//echo $id_equipe;

// Suppression d'une ligne

require ("../../../$connect.php");
$bdfeuilleA = "php".''.$comite.''."_feuilleA";
$bdfeuilleB = "php".''.$comite.''."_feuilleB";

$queryA = mysql_query ("	DELETE FROM $bdfeuilleA
						WHERE id = $code_match");

			$requete = mysql_query( $queryA);
			
$queryB = mysql_query ("	DELETE FROM $bdfeuilleB
						WHERE id = $code_match");

			$requete = mysql_query( $queryB);			
			
			
?>			
			

<meta http-equiv="refresh" content="0;URL=http://francefinalesrugby.franceserv.com/admin/feuilleMatch/connexion/page_liste_compet1.php?comite=<?php echo $comite; ?>&connect=<?php echo $connect; ?>&equipe=<?php echo $equipe; ?>&id_equipe=<?php echo $id_equipe; ?>">
