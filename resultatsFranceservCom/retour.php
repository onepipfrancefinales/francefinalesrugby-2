<?php 
$codeEquipe=$_GET['E'];
$comite=$_GET['C'];
$bddComite=$_GET['bddC'];
$journee=$_GET['J'];
$maxJournee=$_GET['JMAX'];
/*
echo $codeEquipe;echo "<br />";
echo $comite;echo "<br />";
echo $bddComite;echo "<br />";
echo $journee;echo "<br />";
echo $maxJournee;echo "<br />";
*/
//****	Valeur de SMS
//****	2 Phase ALLER championnat jusqu'270				****
//****  6 Phase ALLER championnat a partir de 9180		****
//****	8 Phase RETOUR championnat jusqu'270			****
//****	9 Phase RETOUR championnat à partir de 9180	****
//$SMS=8;
?>
<!DOCTYPE HTML>
<html lang="fr">
	<head>
		<title>Mise à jour - Phase RETOUR</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	</head>
<body>

<meta http-equiv="refresh" content="0;URL=../smart/majScores/saisie.php?comite=<?php echo $comite; ?>&bddComite=<?php echo $bddComite; ?>&journee=<?php echo $journee; ?>&maxJournee=<?php echo $maxJournee; ?>&codeEquipe=<?php echo $codeEquipe; ?>">

</body>
</html>