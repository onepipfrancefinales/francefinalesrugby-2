<?php
$variable_1 = $_GET['variable_1']; 
$annee=$variable_1;
$annee2=$annee.''."_2";
$id = 365; 

//include ("../fonctionsListeEquipes.php");
require ("../fonctions_phases_finales.php");
?>



<html>
<head>
<title>Championnat de France Cadets Pierre Gaudermen <?php echo $annee;?></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="../2.css">
</head>

<body bgcolor="#EAECEB" text="#000000">

<?php
    
if ($annee>=2015)
	{
    include("../hautindex2015.php");
    } 
else
	 include("../hautindex.php");
	?>

	<br/><br/>
	 <?php
    
   include("bandeau_gaudermen.php");
    ?>
	<?php
	
	if ($annee == 2018)
	{
	include("gaudermen_2018.php");
	
 }
	
	
	elseif ($annee == 2017)
	{
	include("365.php");
	
 }
	
	
	elseif ($annee == 2016)
	{
	include("365.php");
	
 }
	
	
	elseif ($annee == 2015)
	{
	include("365.php");
	//include("gaudermen_2015.php");
 }
	
	
	elseif ($annee == 2014)
	{
	include("gaudermen_2014.php");
 }
	
	
	elseif ($annee == 2013)
	{
	include("gaudermen_2013.php");
 }
	
	
elseif ($annee == 2012)
	{
	include("gaudermen.php");
 }
   else
    {
   include("gaudermen_clubs.php");
   }
   
    ?>
	</body>
</html>