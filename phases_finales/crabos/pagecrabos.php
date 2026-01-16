<?php
$variable_1 = $_GET['variable_1']; 
$annee=$variable_1;
$annee2=$annee.''."_2";
$id = 325; 

require ("../fonctions_phases_finales.php");?>

<html>
<head>
<title>Championnat de France Juniors Ren� CRABOS <?php echo $annee;?></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link type="text/css" rel="stylesheet"  href="../../2.css">
</head>

<body bgcolor="#EAECEB" text="#000000">


<?php
   
if ($annee>=2015)
	{
    include("../hautindex2015.php");
    } 
else
	 include("../hautindex.php");
	?>
<br/><br/>

	 <?php
   
   include("bandeau_crabos.php");
    ?>
	 <?php
	 
	 if ($annee == 2018)
	{
	include("crabos_2018.php");
	}  
    
	elseif ($annee == 2017)
	{
	include("325.php");
	}  
	  
	  
	  elseif ($annee == 2016)
	{
	include("325.php");
	}
	elseif ($annee == 2015)
	{
	include("325.php");
	}
	
	  
	 elseif ($annee == 2014)
	{
	include("crabos_2014.php");
	}
	
	
	
	elseif ($annee == 2013)
	{
	include("crabos_2013.php");
	}
	elseif ($annee == 2012)
	{
	include("crabos_2012.php");
	}
   else
      {
   include("crabos_clubs.php");
   }
   
    ?>
	</body>
</html>
	
	