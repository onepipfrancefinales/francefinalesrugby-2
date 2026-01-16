<?php $annee=$_GET['variable_1'];?>

<html>
<head>
<title>Championnat des Pyr&egrave;n&egrave;es 4me S&egrave;rie</title>
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
	include("4serie2018.php");
	}	 
	 
	 
elseif ($annee == 2017)
	{
	include("220_4serie.php");
	}
   
elseif ($annee == 2016)
	{
	include("220_4serie.php");
	}

elseif ($annee == 2015)
	{
	include("220_4serie.php");
	}
elseif ($annee == 2014)
	{
	include("220_4serie.php");
	}
 elseif ($annee == 2013)
	{
	include("4serie2013.php");
	}
else	if ($annee == 2012)
	{
	include("4serie2012.php");
	}
 else
   {
   include("220_4serieR.php");
   }
    ?>