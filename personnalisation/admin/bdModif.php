<?php
$id=1;echo "<br />";
echo $id;

$nom="onepip";echo "<br />";
echo $nom;echo "<br />";

$prenom="tetete";
echo $prenom;

$mdp="mdp";echo "<br />";
echo $mdp;

echo "<br />";

echo $comite;
echo $comite1;echo "<br />";

$division=$codeDivision;
echo $division;
echo $division1;

echo "<br />";
echo $type;
echo $type1;echo "<br />";

$taille=450;
echo $taille;
echo $taille1; echo "<br />";

	$comite2	="NULL";
	$division2	="NULL"; 
	$type2		="NULL";
	$taille2	="NULL";

	$comite3	="NULL";
	$division3	="NULL"; 
	$type3		="NULL";
	$taille3	="NULL";

	$comite4	="NULL";
	$division4	="NULL"; 
	$type4		="NULL";
	$taille4	="NULL";

	$comite5	="NULL";
	$division5	="NULL"; 
	$type5		="NULL";
	$taille5	="NULL";
?>
 
 
<?php
 
//include ("../../connection5.php");
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); 
mysql_select_db("onepip-france_db5"); 
  
$sql = "(	UPDATE personnel
 			SET id='$id',nom='$nom',mdp='$mdp',prenom='$prenom',comite1='$comite1' , division1='$division1' , type1='$type1' , taille1='$taille1',
																comite2='$comite2' , division2='$division2' , type2='$type2' , taille2='$taille2',
																comite3='$comite3' , division3='$division3' , type3='$type3' , taille3='$taille3',
																comite4='$comite4' , division4='$division4' , type4='$type4' , taille4='$taille4',
																comite5='$comite5' , division5='$division5' , type5='$type5' , taille5='$taille5'
			WHERE id=1");	


$requete = mysql_query( $sql )   ;

 
  ?>