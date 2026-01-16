<?php $annee=$_GET['variable_1'];?>
<html>
<head>
<title>Championnat de France de Promotion Honneur <?php echo $annee;?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

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
   include("bandeau_promotion.php");
    ?>
<?php	

if ($annee == 2015)
	{
	include("180.php");
	}

elseif ($annee == 2014)
	{
	include("promotion_2014.php");
	}
elseif ($annee== 2013)
   {
   include("promotion_2013.php");
   }
      
elseif ($annee== 2012)
   {
   include("promotion_2012.php");
   }
   elseif ($annee== 2011)
   {
   include("promotion_2011.php");
   }
   elseif ($annee== 2010)
   {
   include("promotion_2010.php");
   }
   else
    {
   include("promotion_clubs.php");
   }
   
    ?>