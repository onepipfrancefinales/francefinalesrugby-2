<?php $annee=$_GET['variable_1'];?>
<html>
<head>
<title>Championnat de France Fédérale 2 <?php echo $annee;?></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="../2.css">
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
<?php  include("bandeau_federale2.php");
    ?>
	 <?php
if ($annee == 2018)
   {
   include("150_2018.php");
    } 
elseif ($annee == 2017)
   {
   include("150_2017.php");
    } 

elseif ($annee == 2016)
   {
   include("150_2016.php");
    } 
	 	 
	 
elseif ($annee == 2015)
   {
   include("150.php");
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
	</body>
	</html>