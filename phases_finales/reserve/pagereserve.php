<?php
$variable_1 = $_GET['variable_1']; 
$annee=$variable_1;
 
?>



<html>
<head>
<title>Championnat de France R�serve � XII <?php echo $annee;?></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="../2.css">
</head>

<body bgcolor="#EAECEB" text="#000000">

 <?php
    // On inclut le haut de la page
if ($annee>=2015)
	{
    include("../hautindex2015.php");
    } 
else
	 include("../hautindex.php");
	?>
<br/><br/>

	 <?php
    
   include("bandeau_reserve.php");
    ?>
	<?php
	
	if ($annee == 2018)
	{
	include("270_2018.php");
	}
	
	elseif ($annee == 2017)
	{
	include("270_2017.php");
	}
	elseif ($annee == 2016)
	{
	include("270.php");
	}
	
	
	elseif ($annee == 2015)
	{
	include("reserve_2015.php");
	}
elseif ($annee == 2014)
	{
	include("reserve_2014.php");
	}
elseif ($annee == 2013)
	{
	include("reserve_2013.php");
	}
elseif ($annee == 2012)
	{
	include("reserve_2012.php");
	}
elseif ($annee == 2011)
   {
   include("reserve_2011.php");
   }
elseif($annee == 2010)
   {
   include("reserve_2010.php");
   }
elseif($annee == 2009)
   {
   include("reserve2.php");
   }
elseif($annee == 2008)
   {
   include("reserve2.php");
   }
else
   {
   include("reserve_clubs.php");
   }
   
   
    ?>
</body>
</html>