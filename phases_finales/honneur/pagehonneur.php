<?php
$variable_1 = $_GET['variable_1']; 
$annee=$variable_1;
$annee2=$annee.''."_2";
$id = 170; 

//include ("../fonctionsListeEquipes.php");
require ('../fonctions_phases_finales.php');
?>




<html>
<head>
<title>Championnat de France Honneur <?php echo $annee;?></title>
<link rel="stylesheet" type="text/css" href="../2.css">
<meta name="description"
content="tous les champions de france de rugby, ffr,FFR, presentation de tous les clubs de rugby francais, Champions des differents comit�s territoriaux, Tous les championnats de rugby, f�d�rale 2, f�d�rale 3, f�d�rale 1, top 14.">
<meta name="keywords"
content="Brennus,Comite Midi Pyrenees de Rugby,ffr,FFR,Comite territoriaux de rugby,Stade toulousain,Bourgogne,FanceFinalesRugby,Rugby,championnat de france de rugby,Fran�aise,honneur,promotion honneur,Sport,Ballon,Ovale,">
<meta name="classification" content="Sport,Rugby">
<meta name="resource-type" content="document">
<meta name="copyright" content="Comite Midi Pyrenees de Rugby">
<meta name="author" content="Equipe Onepip">
<meta name="robots" content="All">
<title>Honneur</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">



</head>


<body>


<?php 
if ($annee>=2015)
	{
    include("../hautindex2015.php");
    
    } 
else
	{
	include("../hautindex.php");
	}	
?>	
<br/><br/>
<?php   include("bandeau_honneur.php"); ?>



<?php
if ($annee==2018)
	{
    include("170.php");
    }
elseif ($annee==2017)
	{
    include("170.php");
    }
elseif ($annee==2016)
	{
    include("170.php");
    }
elseif ($annee==2015)
	{
    include("170.php");
    }
elseif ($annee==2014)
	{
    include("honneur_2014.php");
    }
elseif ($annee==2013)	
    {
    include("honneur_2013.php");
    }
elseif ($annee==2012)
	{
    include("honneur_2012.php");
    }
elseif ($annee==2011)
    {
    include("honneur_2011.php");
	}
elseif ($annee==2010)
    {
    include("honneur_2010.php");
	}
elseif ($annee==2009)
    {
    include("honneur_2009.php");
	}
else
    {
    include("honneur_clubs.php");
    }
?>
	</body>
</html>
