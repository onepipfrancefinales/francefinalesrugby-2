<html>
<head>
<title>Championnat des Pyr&egrave;n&egrave;es R&egrave;serve Promotion</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body bgcolor="#EAECEB" text="#000000">
</html>
<?php $annee=$_GET['variable_1'];?>
<?php
    include("hautindex.htm");
    ?>
  
  <?php
 if ($annee == 2018)
	{
	include("9180_promotion.php");  
  	} 
  
  
elseif ($annee == 2017)
	{
	include("9180_promotion.php");  
  	}
elseif ($annee == 2016)
	{
	include("9180_promotion.php");
	}  
elseif ($annee == 2015)
	{
	include("9180_promotion.php");
	}
elseif ($annee == 2014)
	{
	include("9180_promotion.php");
	}
elseif ($annee == 2013)
	{
	include("reservepromotion2013.php");
	}
elseif ($annee == 2012)
   {
   include("reservepromotion2012.php");
   }
 elseif ($annee == 2011)
   {
   include("reservepromotion2011.php");
   }
elseif ($annee == 2010)
   {
   include("reservepromotion2010.php");
   }
elseif ($annee == 2009)
   {
   include("reservepromotion2009.php");
   }
 else
   {
   include("9180_promotionR.php");
   }
	?> 
  
    
	
	
	