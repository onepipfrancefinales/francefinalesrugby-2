<html>
<head>
<title>Championnat de France 1re S&egrave;rie</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body bgcolor="#EAECEB" text="#000000">
</body>
</html>
<?php $annee=$_GET['variable_1'];?>

 <?php
    // On inclut le haut de la page
	
    include("hautindex.htm");
    ?>
	  <?php
    // On inclut le haut de la page
if ($annee == 2018)
	{
	include("9190_1serie.php");
	//include("reserve1serie2015.php");
	} 


elseif ($annee == 2017)
	{
	include("9190_1serie.php");
	//include("reserve1serie2015.php");
	}   


elseif ($annee == 2016)
	{
	include("9190_1serie.php");
	//include("reserve1serie2015.php");
	}   

elseif ($annee == 2015)
	{
	include("9190_1serie.php");
	//include("reserve1serie2015.php");
	}   
elseif ($annee == 2014)
	{
	include("9190_1serie.php");
	//include("reserve1serie2014.php");
	}
elseif ($annee == 2013)
		{
	include("reserve1serie2013.php");
	}	
else
    {
    include("9190_1serieR.php");
    }
	 ?>