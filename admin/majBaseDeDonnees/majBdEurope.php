<!DOCTYPE html>
<html lang="fr">
<head>
	<meta name="description" content="Palmarès des champions de france par divisions et pas années">
	<meta name="keywords" content="Presentation de la competititon et de tous les champions de France 1re Serie. Palmares complet de la 1re Serie.">
	<meta name="classification" content="Sport,Rugby">
	<meta name="resource-type" content="document">
	<meta name="copyright" content="Comite Midi Pyrenees de Rugby">
	<meta name="author" content="Equipe Onepip">
	<meta name="viewport" content="width=device-width">
	<meta name="robots" content="All">
	<title>Maj table bdeurope </title>
	<link type="text/css" rel="stylesheet" href="../admin.css">

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<script language="JavaScript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>
</head>

<body> 
<p class="size5 style">Mise à jour de la table bdeurope</p>
  <hr>
<form name="form1" method="POST" action="ecritureMajBdEurope.php">
  <p></p>
  <p class=" style size4 ">saison : 
    <input type="text" name="annee" required="true">
</p>
<p class= "size4 style">Compétition : 
    <select name="division" size="1">
    <option value="Champion Cup">Champion Cup</option>
    <option value="Challenge Cup">Challenge Cup</option>
	</select>
   </p>
	 
   <hr>
	<p class=" style size4 ">
	Vainqueur : <input type="text" name="equipe1">  
	pays : 
    <select name="pays1" size="1">
	<option value="(AFS)">Afrique du sud</option>
    <option value="(ANG)">Angleterre</option>
	<option value="(ECO)">Ecossse</option>
	<option value="(FR)">France</option>
    <option value="(IRL)">Irlande</option>
	<option value="(ITA)">Italie</option>
	<option value="(PDG)">Pays de Galles</option>
	</select>
  
	score :   <input type="text" name="score1" required="true">
    </p>
	
	
	<p class=" style size4 ">
	Finaliste : <input type="text" name="equipe2" required="true"> 
	pays : 
    <select name="pays2" size="1">
	<option value="(AFS)">Afrique du sud</option>
    <option value="(ANG)">Angleterre</option>
	<option value="(ECO)">Ecossse</option>
	<option value="(FR)">France</option>
    <option value="(IRL)">Irlande</option>
	<option value="(ITA)">Italie</option>
	<option value="(PDG)">Pays de Galles</option>
	</select>
	score : <input type="text" name="score2" required="true">
    </p>
	<hr>
	<p class=" style size4 ">Ville d'accueil de la finale : 
    <input type="text" name="lieu">
   </p>
	<p class=" style size4 ">Nombre de spectateur : 
    <input type="text" name="public" >
   </p>




<?php
/*
	echo "<br/>";
			echo " Enregistrement de la finale dans la table bdequipeI ";
			echo "<br/>";

			echo "<br/>";
			echo $id1 . ';' . $annee . ';' . $ivision . ';' . "Vainqueur" . ';' . $equipe1 . ';' . $pays1 . ';' . $equipe2 . ';'.  $pays2  . $score1 . ';' . $score2 . ';' . $lieu . ';' . $public . ';' . "1" . ';' . "EU";
			echo "<br />";
			echo $id2 . ';' . $annee . ';' . $division . ';' . "Finaliste" . ';' . $equipe2 . ';' . $nomEquipeVice . ';' . $nomEquipeVice . ';' . ';' . ';' . '(' . $ligue2 . ")" . ';' . $score1 . ';' . $score2 . ';' . $titreNational . ';' . substr($division, -3) . ';' . substr($division, -3) . ';' . "A";

			$bdd->exec("INSERT INTO  bdeurope
			VALUES ( '$id1', '$annee', '$division', 'Vainqueur', '$equipe1', '$pays1', '$equipe2',
			'$pays2', '$score1', '$score2', '$lieu', '$public' ,'1', 'EU'),
			
			( '$id1', '$annee', '$division', 'Finaliste', '$equipe2', '$pays2', '-',
			'-', '$score1', '$score2', '$lieu', '$public' ,'1', 'EU')
			 ");
			 */

?>

 
 
  <p>
    <input type="submit" name="Submit" value="Valider">
  </p>
</form>
</body>
</html>