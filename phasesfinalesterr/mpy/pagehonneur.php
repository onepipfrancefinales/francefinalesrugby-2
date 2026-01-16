<?php $annee=$_GET['variable_1'];?>
<html>
<head>
<title>Championnat des Pyr&egrave;n&egrave;es Honneur</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body bgcolor="#EAECEB" text="#000000">
</body>
</html>
 <?php
    
	
    include("hautindex.htm");
    ?>
	
	 <?php
if ($annee == 2018)
	{
	include("170.php");
	}
elseif ($annee == 2017)
	{
	include("170-2017.php");
	}
elseif ($annee == 2016)
	{
	include("170.php");
	}	
	
elseif ($annee == 2015)
	{
	include("honneur2015.php");
	}
elseif ($annee == 2014)
	{
	include("honneur2014.php");
	}
elseif ($annee == 2013)
	{
	include("honneur2013.php");
	}
elseif ($annee == 2012)
	{
	include("honneur2012.php");
	}
else
   {
   //include("honneur2010.php");
   include("170_honneur.php");
   }
  
  
  
    ?>