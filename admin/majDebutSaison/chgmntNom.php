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
<p class="size5 style">Mise à jour de la table bdchange_nom</p>
  <hr>
<form name="form1" method="POST" action="ecritureMajBdEurope.php">
  <p></p>
  <p class=" style size4 ">id : 
    <input type="text" name="annee" required="true">
</p>
<p class=" style size4 ">id_equipe : 
    <input type="text" name="annee" required="true">
</p>
<p class=" style size4 ">idFFR : 
    <input type="text" name="annee" required="true">
</p>
<p class=" style size4 ">logo : 
    <input type="text" name="annee" required="true">
</p>
<p class=" style size4 ">année : 
    <input type="text" name="annee" required="true">
</p>
<p class=" style size4 ">nom : 
    <input type="text" name="annee" required="true">
</p>

	 
   <hr>
	
	
	





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
<footer></footer>
</html>