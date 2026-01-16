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
   		include("200_2serieR.php");
  elseif ($annee==2018)
    	include("200_2018.php");
	else
		include("200_2serie.php");
	
    ?>
	</body>
</html>