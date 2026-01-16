
<?php
if (isset($_POST['type'])) $type = $_POST['type']; else $type ="-";
if (isset($_GET['division'])) $division = $_GET['division']; else $division ="-";
if (isset($_GET['annee'])) $annee = $_GET['annee']; else $annee ="-";
require '../../connect/connexion1.php';
echo "Type : ".$type; echo "<br />";
echo "Division : ".$division;echo "<br />";
echo "Annee : ".$annee ;echo "<br />";
//$bdpfAnnee = "bdpf".$annee;
		
$requete=$bdd->exec("UPDATE bdpffrance
            		SET   type='$type'
					WHERE id = '$division' ") ;

if($requete){
	 echo "<br />";
	 echo("La modification(".$division.") a &eacute;t&eacute; correctement effectu&eacute;e");
	 echo "<br />";
	}
else{
	 echo "<br />";
	 echo("La modification (".$division.") a &eacute;chou&eacute;") ;
	 echo "<br />";
	}
?>

<p><a href="saisieCodeFFR.php?annee=<?php echo $annee; ?>">Autre modif</a> </p>
<p><a href="accueilMAJ.php?annee=<?php echo $annee; ?>">retour page accueil</a> </p>
	 				
					
					