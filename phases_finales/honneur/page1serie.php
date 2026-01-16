<?php $annee=$_GET['variable_1'];?>
<html>
<head>
<title>Championnat de France 1re Série <?php echo $annee;?></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body bgcolor="#EAECEB" text="#000000">


<?php

	 include("../hautindex.php");
	
?>
	
<?php  
   include("bandeau_1serie.php");
?>

	<?php
if  ($annee== 2015)
   {
   include("1serie_2015.php");
   }
elseif  ($annee== 2014)
   {
   include("1serie_2014.php");
   }
elseif  ($annee== 2013)
   {
   include("1serie_2013.php");
   }
elseif  ($annee== 2012)
   {
   include("1serie_2012.php");
   }
elseif ($annee== 2011)
   {
   include("1serie_2011.php");
    }
 elseif ($annee== 2010)
   {
   include("1serie_2010.php");
   }
 elseif ($annee== 2009)
   {
   include("1serie2.php");
   }
 elseif ($annee== 2008)
   {
   include("1serie2.php");
   }
 elseif ($annee== 2007)
   {
   include("1serie2.php");
   }
 elseif ($annee== 2006)
   {
   include("1serie2.php");
   }
 
 else
	{
	include("1serie22.php");
	}
?>