<html>
<head>
<title>Championnat de France 1re S&egrave;rie</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body bgcolor="#EAECEB" text="#000000">

 
   
<?php $annee=$_GET['variable_1'];?>	
   
   <?php
    include("hautindex.htm");
    ?>
	
	 <?php
   if ($annee > 2018)
    
	include("180_promotionR.php");
	else
	include("180_promotion.php");
    ?>
	
	</body>
</html>