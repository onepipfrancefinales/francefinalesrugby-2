<?php $annee=$_GET['variable_1'];?>
<html>
<head>
<title>Championnat de France Nationale B <?php echo $annee;?></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="../2.css">
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
   include("bandeau_nationaleb.php");
    ?>
	<?php
	
if ($annee == 2018)
	{
	include("espoirFed1.php");
	}	
	
	
elseif ($annee >= 2016)
	{
	include("240.php");
	}
elseif ($annee == 2015)
	{
	include("240.php");
	}
elseif ($annee == 2014)
	{
	include("nationaleb_2014.php");
	}
elseif ($annee == 2013)
	{
	include("nationaleb_2013.php");
	}
elseif ($annee == 2012)
	{
	include("nationaleb_2012.php");
	}
elseif ($annee == 2011)
     {
     include("nationaleb_2011.php");
     }
elseif ($annee == 2010)
     {
     include("nationaleb_2010.php");
     }
elseif ($annee == 2009)
     {
     include("nationaleb_2009.php");
     }   
else
    {
    include("nationaleb_clubs.php");
    }
   
    ?>