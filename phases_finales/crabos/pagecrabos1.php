<?php $annee=$_GET['variable_1'];?>
<html>
<head>
<title>Championnat de France Juniors René CRABOS <?php echo $annee;?></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="../2.css">
</head>

<body bgcolor="#EAECEB" text="#000000">
</body>
</html>

<?php
   
if ($annee>=2015)
	{
    include("../hautindex2015.php");
    } 
else
	 include("../hautindex.php");
	?>
	 <?php
    // On inclut le haut de la page
   include("bandeau_crabos.php");
    ?>
	 <?php
    // On inclut le haut de la page
      
	   if ($annee == 2015)
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