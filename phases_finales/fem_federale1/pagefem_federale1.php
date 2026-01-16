<?php $annee=$_GET['variable_1'];?>
<html>
<head>
<title>Championnat de France Féminines Fédérale 1 <?php echo $annee;?></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="../2.css">
</head>

<body bgcolor="#EAECEB" text="#000000">

 <?php
   
if ($annee==2015)
	{
    include("../hautindex2015.php");
    } 
else
	 include("../hautindex.php");
	?>
	 <?php
   
   include("bandeau_fem_federale1.php");
    ?>
	  <?php
if ($annee == 2018)
	{
	include("fem_federale1_2018.php");
		
	// 290 fonctionne
	// include("290.php");
	}	   	  
	  
	  
elseif ($annee == 2017)
	{
include("fem_federale1_2017.php");
		
	// 290 fonctionne
	// include("290.php");
	}	      
elseif ($annee == 2016)
	{
	include("fem_federale1_2016.php");
	}
elseif ($annee == 2015)
	{
	include("fem_federale1_2015.php");
	}
else
    {
   include("fem_federale1_clubs.php");
    }
   
    ?>
	
	<?php  require ("../bas.php");?>
	</body>
</html>