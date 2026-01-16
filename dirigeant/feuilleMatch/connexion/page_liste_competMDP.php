<!DOCTYPE html>        
<html>
<head>


<meta name="description"
content="tous les champions de france de rugby, presentation de tous les clubs de rugby francais, Champions des differents comités territoriaux, Tous les championnats de rugby, fédérale 2, fédérale 3, fédérale 1, top 14.">
<meta name="keywords"
content="Brennus,Comite Midi Pyrenees de Rugby,Comite territoriaux de rugby,Stade toulousain,Bourgogne,FanceFinalesRugby,Rugby,championnat de france de rugby,Française,honneur,promotion honneur,Sport,Ballon,Ovale,">
<meta name="classification" content="Sport,Rugby">
<meta name="resource-type" content="document">
<meta name="copyright" content="Comite Midi Pyrenees de Rugby">
<meta name="author" content="Equipe Onepip">
<meta name="robots" content="All">
<title>France Finales Rugby</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">



</head>

<?php

if (isset ($_GET['connect'])) $connect = $_GET['connect']; else $connect = "non declare";
if (isset ($_GET['equipe'])) $equipe = $_GET['equipe']; else $equipe = "non declare";
if (isset ($_GET['type'])) $type = $_GET['type']; else $type = "non declare";
if (isset ($_GET['comite'])) $comite = $_GET['comite']; else $comite = "non declare";

?>

<?php


if (isset($_POST['login']) && isset($_POST['MDP']))
 {
	
	$login=$_POST['login'];
	$mdp=$_POST['MDP'];
	require ("../../../connect/connexion1.php");

	$reponse = $bdd->query("SELECT nom ,mdp, id
							FROM personnel
							WHERE nom='$login' and mdp='$mdp' "); 
								while ($donnees = $reponse->fetch() )
									{ 
									$login_valide= $donnees['nom'];	
									$pwd_valide= $donnees['mdp'];
									$id_valide= $donnees['id'];
									}
	
	
	
	
	
	
	// on vérifie les informations du formulaire, à savoir si le pseudo saisi est bien un pseudo autorisé, de même pour le mot de passe
	if ( $login_valide == $_POST['login'] && $pwd_valide == $_POST['MDP'])
	
	{
		// dans ce cas, tout est ok, on peut démarrer notre session

		// on la démarre :)
		session_start ();
		
		// on enregistre les paramètres de notre visiteur comme variables de session ($login et $pwd) (notez bien que lon utilise pas le $ pour enregistrer ces variables)
	
		$_SESSION["login"] = $_POST["login"];
		$_SESSION["pwd"] = $_POST["MDP"];
		$_SESSION["id"] = $id_valide ;
		// on redirige notre visiteur vers une page de notre section membre
		header ("location: page_liste_compet1.php?id_equipe=$login_valide&connect=$connect&comite=$comite&equipe=$equipe&type=$type");
	}
	else 
	{
		
		// Le visiteur na pas été reconnu comme étant membre de notre site. On utilise alors un petit javascript lui signalant ce fait
		echo '<body onLoad="alert(\"Pseudo ou mot de passe non reconnu...\')">';
		// puis on le redirige vers la page daccueil
		echo '<meta http-equiv="refresh" content="0;URL=page_liste_competErreur.php">';
	}
}
else
 {
	echo "Les variables du formulaire ne sont pas déclarées.";
}

?>