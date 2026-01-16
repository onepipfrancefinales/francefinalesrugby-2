<?php $annee=$_GET['variable_1'];?>
<html>
<head>
<title>Championnat de France Reichel <?php echo $annee;?></title>
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
    
   include("bandeau_reichel.php");
    ?>
	  <?php
    // On inclut le haut de la page
   if ($annee == 2015)
	{
	include("reichel_2015.php");
	}
   
   
   
   elseif ($annee == 2014)
	{
	include("reichel_2014.php");
	}
	
	elseif ($annee == 2013)
	{
	include("reichel_2013.php");
	}
	elseif ($annee == 2012)
	{
	include("reichel_2012.php");
	}
   elseif ($annee == 2011)
      {
   include("reichel.php");
   }
   elseif ($annee == 2010)
      {
   include("reichel.php");
   }
    elseif ($annee == 2009)
      {
   include("reichel_2009.php");
   }
    elseif ($annee == 2008)
      {
   include("reichel_2008.php");
   }
    elseif ($annee == 2007)
      {
   include("reichel.php");
   }
    elseif ($annee == 2006)
      {
   include("reichel.php");
   }
   else
      {
   include("reichel.php");
   }
    ?>