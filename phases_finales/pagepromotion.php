<?php
$variable_1 = $_GET['variable_1']; 
$annee=$variable_1;
$annee2=$annee.''."_2";
$id = 180; 

include ("../fonctionsListeEquipes.php");
require ("../fonctions_phases_finales.php"); 


?>




<html>
<head>
<title>Championnat de France 2me Série <?php echo $annee;?></title>
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
	 
<?php   include("bandeau_promotion.php");    ?>
	
	
<?php	

if ($annee == 2018)
	{
	include("180.php");
	}



elseif ($annee == 2017)
	{
	include("180.php");
	}
elseif ($annee == 2016)
	{
	include("180_2016.php");
	}
elseif ($annee == 2015)
	{
	include("180.php");
	}

elseif ($annee == 2014)
	{
	include("promotion_2014.php");
	}
elseif ($annee== 2013)
   {
   include("promotion_2013.php");
   }     
elseif ($annee== 2012)
   {
   include("promotion_2012.php");
   }
elseif ($annee== 2011)
   {
   include("promotion_2011.php");
   }
elseif ($annee== 2010)
   {
   include("promotion_2010.php");
   }
else
   {
   include("promotion_clubs.php");
   }
   
    ?>
	
	</body>
</html>