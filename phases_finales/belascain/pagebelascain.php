<?php 
$variable_1 = $_GET['variable_1']; 
$annee=$variable_1;
$annee2=$annee.''."_2";
$id = 320; 


require ("../fonctions_phases_finales.php");

?>

<html>
<head>
<title>Championnat de France Nationale B <?php echo $annee;?></title>
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
<?php  include("bandeau_belascain.php");  ?>
	 
	 
	  <?php
if ($annee == 2018)
	{
	include("320_2018.php");
	}	  
	  
	  
elseif ($annee == 2017)
	{
	include("320_2017.php");
	}
elseif ($annee == 2016)
	{
	include("320.php");
	}
elseif ($annee == 2015)
	{
	include("belascain_2015.php");
	}
  elseif ($annee == 2014)
	{
	include("belascain_2014.php");
	}
   
  elseif ($annee == 2013)
	{
	include("belascain_2013.php");
	}
	elseif ($annee == 2012)
	{
	include("belascain_2012.php");
	}
   elseif ($annee == 2011)
      {
   include("belascain.php");
   }
   elseif ($annee == 2010)
      {
   include("belascain_2010.php");
   }
    elseif ($annee == 2009)
      {
   include("belascain_2009.php");
   }
    elseif ($annee == 2008)
      {
   include("belascain_2008.php");
   }
    elseif ($annee == 2007)
      {
   include("belascain.php");
   }
    elseif ($annee == 2006)
      {
   include("belascain.php");
   }
   else
      {
   include("belascain_clubs.php");
   }
   
    ?>
	</body>
</html>