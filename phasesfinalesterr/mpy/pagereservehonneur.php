<?php $annee=$_GET['variable_1'];?>
<html>
<head>
<title>Championnat des Pyr&egrave;n&egrave;es R&egrave;serve</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body bgcolor="#EAECEB" text="#000000">
</body>
</html>
 <?php
    // On inclut le haut de la page
	
    include("hautindex.htm");
    ?>
	
	  <?php
    // On inclut le haut de la page
	
if ($annee == 2018)
	{
	include("270_reserve.php");
	}  
	
	
  
elseif ($annee == 2017)
	{
	include("270_reserve.php");
	}  
  
    
elseif ($annee == 2016)
	{
	include("reservehonneur2016.php");
	}	
elseif ($annee == 2015)
	{
	include("reservehonneur2015.php");
	}	
	
elseif ($annee == 2014)
	{
	include("reservehonneur2014.php");
	}	
elseif ($annee == 2013)
	{
	include("reservehonneur2013.php");
	}	
elseif ($annee == 2012)
	{
	include("reservehonneur2012.php");
	}
 elseif ($annee = 2015)
   {
   include("reservehonneur20XX.php");
   }
else 
	{
	include("reservehonneur.php");
	}
    ?>