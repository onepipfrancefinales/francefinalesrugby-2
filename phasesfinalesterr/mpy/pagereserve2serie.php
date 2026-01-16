<?php $annee=$_GET['variable_1'];?>
<html>
<head>
<title>Championnat des Pyr&egrave;n&egrave;es 2me S&egrave;rie R&egrave;serve<?php echo $annee;?></title>

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
	  
if ($annee == 2018)
	{
	include("9200_2serie_2018.php");
	}	  
	  
   
elseif ($annee == 2017)
	{
	include("9200_2serie.php");
	}	  
	  
	  
	  
   
elseif ($annee == 2016)
	{
	include("9200_2serie.php");
	}	
	
	
	
elseif ($annee == 2015)
	{
	include("reserve2serie2015.php");
	}
elseif ($annee == 2014)
	{
	include("reserve2serie2014.php");
	}
elseif ($annee == 2013)
	{
	include("reserve2serie2013.php");
	}
elseif ($annee == 2012)
	{
	include("reserve2serie2012.php");
	}
else
   {
   include("9200_2serieR.php");
   }
    ?>