<html>
	<head>
	<title>Championnat de France 1re S&egrave;rie</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	</head>
	
<body bgcolor="#EAECEB" text="#000000">
<?php $annee=$_GET['variable_1'];?>

<?php    include("hautindex.htm");  ?>

<?php
if ($annee==2018)
	
		include("190_1serie.php");

    
if ($annee==2017)
	
		include("190_1serie.php");
elseif ($annee==2016)
		include("190_1serie2016.php");
elseif($annee<2016)
			include("190_1serie.php");
	//include("1serie2010.php");
else
   	include("190_1serieR.php");
	 ?>
	</body>
</html>