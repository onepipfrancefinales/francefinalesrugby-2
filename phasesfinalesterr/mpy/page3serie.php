<?php $annee=$_GET['variable_1'];?>
<html>
<head>
<title>Championnat de France 1re S&egrave;rie</title>
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
 
  if ($annee > 2018)
	{
	include("210_3serieR.php");
	}
 
 elseif ($annee == 2015)
	{
	include("3serie2015.php");
	}	
else    
    {
	include("210_3serie.php");
    }
	
	?>