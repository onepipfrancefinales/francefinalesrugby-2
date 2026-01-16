<?php $annee=$_GET['variable_1'];?>
<html>
<head>
<title>Championnat de France Cadets Pierre Gaudermen <?php echo $annee;?></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

</head>

<body bgcolor="#EAECEB" text="#000000">
</body>
</html>
<?php
    // On inclut le haut de la page
if ($annee>=2015)
	{
    include("../hautindex2015.php");
    } 
else
	 include("../hautindex.php");
	?>
	 <?php
    // On inclut le haut de la page
   include("bandeau_gaudermen.php");
    ?>
	<?php
	if ($annee == 2015)
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