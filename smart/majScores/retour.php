<?php 
$codeEquipe=$_GET['E'];
$journee=$_GET['J']; 
$comite=$_GET['C'];
//****	Valeur de SMS
//****	2 Phase ALLER championnat jusqu'270				****
//****  6 Phase ALLER championnat a partir de 9180		****
//****	8 Phase RETOUR championnat jusqu'270			****
//****	9 Phase RETOUR championnat à partir de 9180	****
$SMS=8;
?>
<!DOCTYPE HTML>
<html lang="fr">
	<head>
		<title>Mise à jour - Phase RETOUR</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	</head>
<body>

<meta http-equiv="refresh" content="0;URL=http://francefinalesrugby.franceserv.com/smart/majScores/saisie.php?comite=<?php echo $comite; ?>&journee=<?php echo $journee; ?>&codeEquipe=<?php echo $codeEquipe; ?>">


</body>
</html>