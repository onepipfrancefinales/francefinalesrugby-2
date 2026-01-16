<?php
session_start ();

if (isset($_SESSION['login']) && isset($_SESSION['pwd']) && isset($_SESSION['id'])) {
?>
<?php 
echo $_SESSION['login'];echo "<br />";
echo $_SESSION['pwd'];echo "<br />";
echo $_SESSION['id'];echo "<br />";
$id =$_SESSION['id'];echo "<br />";

echo $id;echo "<br />";

if (isset ($_POST['identifiant'])) $identifiant =$_POST['identifiant']; 
if (isset ($_POST['ancMdp'])) $ancMdp =$_POST['ancMdp']; 
if (isset ($_POST['newMdp'])) $newMdp =$_POST['newMdp']; 


echo $identifiant;echo "<br />";
echo $ancMdp;echo "<br />";
echo $newMdp;echo "<br />";

// *****   vérification des données saisies

if ($_POST['identifiant']==$_SESSION['login'] && $_POST['ancMdp']==$_SESSION['pwd'])

		{
		echo "données ok";
		require '../../../connect/connexion1.php';
		
		$req = $bdd->prepare("	UPDATE personnel
								SET mdp =:mdp
								WHERE id =:id");
								
		$req->execute(array(   'mdp' => $newMdp,
							   'id' => $id
									))
									
			or die(print_r($req->errorInfo()));			  
		
		
		//header ("location: ../../../dirigeant/feuilleMatch/connexion/page_FM.php");
		}
//si ok 
//saisie du nouveau mot de passe dans la table
//deconnexion

else
	echo "données incorrecte";
		header ("location: modifMDP.php");





?>

<?php
}

?>