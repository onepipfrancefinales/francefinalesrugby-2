<?php $annee=$_GET['variable_1'];?>
<html>
<head>
<title>Championnat de France Espoir <?php echo $annee;?></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="../2.css">
</head>

<body bgcolor="#EAECEB" text="#000000">
</body>
</html>
 <?php
  
if ($annee==2015)
	{
    include("../hautindex2015.php");
    } 
else
	 include("../hautindex.php");
	?>
	 <?php
   
   include("bandeau_espoir.php");
    ?>
	
	 <?php
if ($annee == 2018)
	{
	include("espoir_2018.php");
	} 
elseif ($annee == 2017)
	{
	include("espoir_2017.php");
	}
elseif ($annee == 2016)
	{
	include("espoir_2016.php");
	}
elseif ($annee == 2015)
	{
	include("espoir_2015.php");
	}
elseif ($annee == 2014)
	{
	include("espoir_2014.php");
	}
elseif ($annee == 2013)
	{
	include("espoir_2013.php");
	}
elseif ($annee == 2012)
	{
	include("espoir_2012.php");
	}
else
     {
   include("espoir.php");
   	}
   
    ?>