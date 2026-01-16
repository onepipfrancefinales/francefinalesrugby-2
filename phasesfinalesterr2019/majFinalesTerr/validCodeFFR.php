bdpf
<?php
if (isset($_POST['type'])) $type = $_POST['type']; else $type ="-";
if (isset($_GET['division'])) $division = $_GET['division']; else $division ="-";
if (isset($_GET['annee'])) $annee = $_GET['annee']; else $annee ="-";
if (isset($_GET['bdpf'])) $bdpf = $_GET['bdpf']; else $bdpf ="-";
require '../../connect/connexion6.php';
echo "Type : ".$type; echo "<br />";
echo "Division : ".$division;echo "<br />";
echo "Annee : ".$annee ;echo "<br />";
echo "bdpf : ".$bdpf ;echo "<br />";
$id = $annee.$division;
		
$requete=$bdd->exec("UPDATE $bdpf
            		SET   type='$type'
					WHERE id = $id ") ;

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
	 				
					
					