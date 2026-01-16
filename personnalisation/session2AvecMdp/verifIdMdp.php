
<?php
$login=strtoupper($_POST['login']);
$pwd=strtoupper($_POST['pwd']);
//$login=strtoupper($login);
//$pwd=strtoupper($pwd);




//$test=substr($login,0,4).''.strtoupper(substr($login,4,1));
//echo $test;

if (isset($login_valide)) $login_valide = $login_valide; else $login_valide = "inconnu";
if (isset($pwd_valide)) $pwd_valide = $pwd_valide; else $pwd_valide = "inconnu";

require '../../connect/connexion5.php';

$reponse = $bdd->query("SELECT nom ,mdp
						FROM personnel
						WHERE nom='$login' and mdp='$pwd' "); 
								while ($donnees = $reponse->fetch() )
								{ 
								$login_valide= $donnees['nom'];	
								$pwd_valide= $donnees['mdp'];
								
								}
								
								
//mysql_close(); ?>
<?php
// On d�finit un login et un mot de passe de base pour tester notre exemple. 
//Cependant, vous pouvez tr�s bien interroger votre base de donn�es afin de savoir si le visiteur 
//qui se connecte est bien membre de votre site
//$login_valide = $loginA;
//$pwd_valide = $pwdA;


//$login_valide = "moi";
//$pwd_valide = "lemien";

// on teste si nos variables sont d�finies

	//if (isset($_POST['login']) && isset($_POST['pwd'])) 
	if (isset($login) && isset($pwd)) 	
	{
	// on v�rifie les informations du formulaire, 
	//� savoir si le pseudo saisi est bien un pseudo autoris�, de m�me pour le mot de passe
	
		//if ($login_valide == $_POST['login'] && $pwd_valide == $_POST['pwd'])
		if ($login_valide == $login && $pwd_valide == $pwd)
		{
			// dans ce cas, tout est ok, on peut d�marrer notre session
			// on la d�marre :)
			
				session_start ();
			// on enregistre les param�tres de notre visiteur comme variables de session ($login et $pwd) 
			//(notez bien que l'on utilise pas le $ pour enregistrer ces variables)
				
				//$_SESSION['login'] = $_POST['login'];
				//$_SESSION['pwd'] = $_POST['pwd'];
				
				$_SESSION['login'] = $login;
				$_SESSION['pwd'] = $pwd;
		
			// on redirige notre visiteur vers une page de notre section membre
				header ('location: page_membre.php');
			}
			else 
			{
			// Le visiteur n'a pas �t� reconnu comme �tant membre de notre site. 
			//	On utilise alors un petit javascript lui signalant ce fait
				
				echo '<body onLoad="alert(\'Membre non reconnu...\')">';
				
			// puis on le redirige vers la page d'accueil
				
				//echo '<meta http-equiv="refresh" content="0;URL=index.php">';
			}
	}
else 
	{
	echo 'Les variables du formulaire ne sont pas d�clar�es.';
	}
?>

<html>
<head>
<title>Mise à jour des résultats</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link type="text/css" rel="stylesheet" href="personnalisation/admin/formulaire.css"/> 
<link type="text/css" rel="stylesheet" href="smart/10.css"> 
<link type="text/css" rel="stylesheet" href="CSS.css">
<link type="text/css" rel="stylesheet" href="/smart/10.css"> 
<meta name=viewport content="width=device-width, initial-scale=1">
</head>

<body>
<table width="100%" border="1">
  <tr> 
    <td class="h22"> France Finales Rugby </td>
  </tr>
  <tr> 
    <td class="h12" height="31"> Mise à jour des résultats</td>
  </tr>
</table>
<p> 
  <?php 
echo "L'identifiant et/ou le mot de passe saisis ne sont pas reconnus "
."<br>"
."Identifiant saisi : ".$login
."<br>"
."Mot de passe saisi : ".$pwd
."<br>";?>
</p>
<p>


Vous pouvez contacter pas SMS le 06.82.24.70.57 pour communiquer<br>
le nom du club et l'identifiant que vous utilisez pour vérifier <br>
leurs précenses dans notre base de données.
</p>



<table width="234" align="center">
  <tbody> 
  <tr> 
    <td> 
      <h3 align="center"><a href="../../personnalisation/session2AvecMdp/index.php"><font face="Arial, Helvetica, sans-serif" size="3">Nouvel essai</font></a></h3> 
    </td>
  </tr>
  </tbody> 
</table>

<br/><br/><br/><br/>
<hr />
<table width="234" align="center">
  <tbody> 
  <tr> 
    <td> 
      <h3 align="center"><a href="../../smart/sommaire.php"><font face="Arial, Helvetica, sans-serif" size="3">Retour 
        à l'appli</font></a></h3> 
    </td>
  </tr>
  </tbody> 
</table>
</body>
</html>
