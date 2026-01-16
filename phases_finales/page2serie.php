 <?php $annee=$_GET['variable_1'];?>
 <html>
<head>
<title>Championnat de France 2me Série <?php echo $annee;?></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="2.css">
</head>

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
   include("bandeau_2serie.php");
    ?>
	<?php


if  ($annee== 2015)
   {
   include("2serie_2015.php");
   }
elseif  ($annee== 2014)
   {
   include("2serie_2014.php");
   }
elseif  ($annee== 2013)
   {
   include("2serie_2013.php");
   }
elseif  ($annee== 2012)
    {
    include("2serie_2012.php");
    }
elseif ($annee== 2011)
    {
   include("2serie_2011.php");
    }
 elseif ($annee== 2010)
    {
    include("2serie_2010.php");
    }
 elseif ($annee== 2009)
    {
    include("2serie2.php");
    }
 elseif ($annee== 2008)
    {
    include("2serie2.php");
    }
 elseif ($annee== 2007)
    {
    include("2serie2.php");
    }
 elseif ($annee== 2006)
    {
    include("2serie2.php");
    }
 elseif ($annee== 2005)
    {
    include("2serie2.php");
    }
 else
	{
	include("2serie_clubs.php");
	}
?>