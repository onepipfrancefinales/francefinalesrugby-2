
<?php
$login=strtoupper($_POST['login']);
$pwd=strtoupper($_POST['login']);
$champ2=$_GET['champ2'];
//echo $champ2;echo "<br />";
echo "Traitement de la demande.";
//echo "<hr />";
//echo $login;
//echo $pwd;
//echo "champ : ".$champ2;echo "<br />";
//$login=strtoupper($login);
//$pwd=strtoupper($pwd);

$login = substr($login,-5,6);
//echo "login : ".$login;echo "<br />";
$pwd = substr($pwd,-5,5);
//echo "pwd : ".$pwd;echo "<br />";
/*
echo "Identifiant de l'&eacute;quipe non reconnu";echo "<br />";
echo "Contacter l'administrateur par m&eacute;l ou SMS, en lui indiquant l'&eacute;quipe non reconnue.";echo "<br />";
echo "contact SMS : 06.82.24.70.57.";echo "<br />";
echo "courriel : francefinalesrugby.free.fr ";echo "<br />";
*/
//$test=substr($login,0,4).''.strtoupper(substr($login,4,1));
//echo $test;




require '../../connect/connexion5.php';
if (isset($login_valide)) $login_valide=$login_valide;
if (isset($pwd_valide)) $pwd_valide=$pwd_valide;
$reponse = $bdd->query("SELECT nom ,mdp
						FROM personnel
						WHERE nom='$login' and mdp='$pwd' "); 
								while ($donnees = $reponse->fetch() )
								{ 
								$login_valide= $donnees['nom'];	
								$pwd_valide= $donnees['mdp'];
								
								}
echo "<hr/>";								
echo $login_valide;echo "<br />";
echo $pwd_valide;	echo "<br />";							
//mysql_close(); ?>
<?php
// On définit un login et un mot de passe de base pour tester notre exemple. 
//Cependant, vous pouvez très bien interroger votre base de données afin de savoir si le visiteur 
//qui se connecte est bien membre de votre site
//$login_valide = $loginA;
//$pwd_valide = $pwdA;


//$login_valide = "moi";
//$pwd_valide = "lemien";

// on teste si nos variables sont définies

	//if (isset($_POST['login']) && isset($_POST['pwd'])) 
	if (isset($login) && isset($pwd)) 	
	{
	// on vérifie les informations du formulaire, 
	//à savoir si le pseudo saisi est bien un pseudo autorisé, de même pour le mot de passe
	
		//if ($login_valide == $_POST['login'] && $pwd_valide == $_POST['pwd'])
		if ($login_valide == $login && $pwd_valide == $pwd)
		{
			// dans ce cas, tout est ok, on peut démarrer notre session
			// on la démarre :)
			
				session_start ();
			// on enregistre les paramètres de notre visiteur comme variables de session ($login et $pwd) 
			//(notez bien que l'on utilise pas le $ pour enregistrer ces variables)
				
				//$_SESSION['login'] = $_POST['login'];
				//$_SESSION['pwd'] = $_POST['pwd'];
				
				$_SESSION['login'] = $login;
				$_SESSION['pwd'] = $pwd;
		
			// on redirige notre visiteur vers une page de notre section membre
			
		//	header ('location: page_membre.php');
	//	echo "etape1";
		?>
		
<meta http-equiv="refresh" content="0;URL=page_membre.php?champ2=<?php echo $champ2;?>">


<?php		
		}
			else 
			{
			// Le visiteur n'a pas été reconnu comme étant membre de notre site. 
			//	On utilise alors un petit javascript lui signalant ce fait
				
				echo '<body onLoad="alert(\'Membre non reconnu...\')">';
				
			// puis on le redirige vers la page d'accueil
				
				//echo '<meta http-equiv="refresh" content="0;URL=index.php">';
			}
	}
else 
	{
	echo 'Les variables du formulaire ne sont pas déclarées.';
	}
?>


