<?php $annee=$_GET['variable_1'];?>
<html>
<head>
<title>Championnat de France Fédérale 2 <?php echo $annee;?></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="../2.css">
</head>
<?php $annee=$_GET['variable_1'];?>
<body bgcolor="#EAECEB" text="#000000">
</body>
</html>
<?php
    // On inclut le haut de la page
if ($annee>=2015)
	{
    include("../hautindex2015.php");
    } 
else
	 include("../hautindex.php");
	?>
	 <?php
    // On inclut le haut de la page
   include("bandeau_federale2.php");
    ?>
	 <?php
if ($annee == 2016)
   {
   include("150.php");
 
    }	 
	 
	 
	 
elseif ($annee == 2015)
   {
   include("150.php");
  // include("federale2_2015.php");
    }
 elseif ($annee == 2014)
   {
   include("federale2_2014.php");
   }
elseif ($annee == 2013)
   {
   include("federale2_2013.php");
   }
elseif($annee == 2012)
   {
   include("federale2_2012.php");
   }
elseif ($annee == 2011)
    {
   include("federale2_2011.php");
   }
elseif ($annee == 2010)
    {
   include("federale2_2010.php");
   }
elseif ($annee == 2009)
    {
   include("federale2_2009.php");
   }
else
    {
   include("federale2_clubs.php");
   }
   
   
    ?>