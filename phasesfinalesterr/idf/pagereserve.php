<?php 
$annee=$_GET['variable_1'];
$comite="idf";
$comiteNom="Ile de France";


?>

<!DOCTYPE html>
<html>
	<head>
<title>Champions <?php echo $comiteNom; echo $annee;?></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="../champTerr.css">

<meta name="description"
content="tous les champions de france de rugby, ffr,FFR, presentation de tous les clubs de rugby francais, 
Champions des differents comites territoriaux, Tous les championnats de rugby, federale 2, federale 3, federale 1, top 14.">
<meta name="keywords"
content="Brennus,Comite Midi Pyrenees de Rugby,ffr,FFR,Comite territoriaux de rugby,Stade toulousain,Bourgogne,FanceFinalesRugby,
Rugby,championnat de france de rugby,Francaise,honneur,promotion honneur,Sport,Ballon,Ovale,">
<meta name="classification" content="Sport,Rugby">
<meta name="resource-type" content="document">
<meta name="copyright" content="Comite Midi Pyrenees de Rugby">
<meta name="author" content="Equipe Onepip">
<meta name="robots" content="All">
</head>

<body>

<?php    include("hautindex.php");  ?>
<?php
    // On inclut le haut de la page
   
   if ($annee >=2016)
	{
	include("270dem.php");
	}
	elseif ($annee == 2015)
	{
	include("reserve2015.php");
	}
	
	else
	{
	include("reserve.php");
   }
	 ?>
	</body>
</html> 