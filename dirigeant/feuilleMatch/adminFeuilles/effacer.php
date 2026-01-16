<?php
$id_equipe = $_GET['id_equipe'];
$equipeA = $_GET['equipeA'];
$equipeB = $_GET['equipeB'];

$connect = $_GET['connect'];
$comite = $_GET['comite'];
$code_match = $_GET['code_match'];



echo $connect;
echo $comite;
echo $code_match;

?>

<?php
$comite_feuilleA = "php".''.$comite.''."_feuilleA";
$comite_feuilleB = "php".''.$comite.''."_feuilleB";

if ($equipe == $equipeA)
	$bdfeuilleAB=$comite_feuilleA;
else
	$bdfeuilleAB=$comite_feuilleB;
?>



<?php
require ("../../../$connect.php");

$query = mysql_query ("	UPDATE $bdfeuilleAB
						SET N1='0', N2='0', N3='0', N4='0', N5='0'
						WHERE id = '$code_match' ");
			$requete = mysql_query( $query )   ;
mysql_close(); 
?>

<meta http-equiv="refresh" content="0;URL=http://francefinalesrugby.franceserv.com/admin/feuilleMatch/zonesFeuilles/page_feuillematch.php?comite=<?php echo $comite; ?>&connect=<?php echo $connect; ?>&equipe=<?php echo $equipe; ?>&equipeA=<?php echo $equipeA; ?>&equipeB=<?php echo $equipeB; ?>&id_equipe=<?php echo $id_equipe; ?>">
