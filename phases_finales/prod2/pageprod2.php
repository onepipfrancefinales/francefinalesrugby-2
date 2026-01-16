<?php $annee=$_GET['variable_1'];?>
<html>
<head>

<title>Championnat de France Pro D2 <?php echo$annee;?> </title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="../2.css">
</head>

<body bgcolor="#EAECEB" text="#000000">

 <?php
    // On inclut le haut de la page
if ($annee==2015)
	{
    include("../hautindex2015.php");
    } 
else
	 include("../hautindex.php");
	?>
	<br/><br/>
 <?php
      include("bandeau_prod2.php");
   ?>
	
	<?php 
	
if  ($annee==2018 )
	{
	include("120-2018.php");
	}	
	
elseif  ($annee==2017 )
	{
	include("120.php");
	}	
	
	
elseif  ($annee==2016 )
	{
	include("prod2_2016.php");
	}	

	
elseif  ($annee==2015 )
	{
	include("prod2_2015.php");
	}
elseif  ($annee==2014 )
	{
	include("prod2_2014.php");
	}
elseif  ($annee==2013 )
	{
	include("prod2_2013.php");
	}
elseif  ($annee==2012 )
	{
	include("prod2_2012.php");
	}
elseif ($annee==2011 )
	{
	include("prod2_2011.php");
	}
elseif ($annee==2010 )
	{
	include("prod2_2010.php");
	}
elseif ($annee==2009 )
	{
	include("prod2_2009.php");
	}
elseif ($annee==2008 )
	{
	include("prod2_2008.php");
	}
elseif ($annee==2007 )
	{
	include("prod2_2007.php");
	}
elseif ($annee==2006 )
	{
	include("prod2_2006.php");
	}
elseif ($annee==2005 )
	{
	include("prod2_2005.php");
	}
elseif ($annee==2004 )
	{
	include("prod2_2004.php");
	}
elseif ($annee==2003 )
	{
	include("prod2_2003.php");
	}
else
	{
	include("prod2_clubs.php");
	}
  ?>
  </body>
</html>