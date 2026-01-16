<?php $annee=$_GET['variable_1'];?>
<html>
<head>
<title>Championnat de France Top 14<?php echo $annee;?> </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="../2.css">
</head>

<body bgcolor="#EAECEB" text="#000000">
</body>
</html>
<?php
    // On inclut le haut de la page
if ($annee==2015)
	{
    include("../hautindex2015.php");
    } 
else
	 include("../hautindex.php");
	?>
	 <?php
    // On inclut le haut de la page
   include("bandeau_top14.php");
    ?>
	
	
	<?php
	if ($annee==2016 )
	{
	include("110.php");
	} 
	elseif ($annee==2015 )
	{
	include("110.php");
	}
	
	elseif ($annee==2014 )
	{
	include("110.php");
	}
	
elseif ($annee==2013 )
	{
	include("110.php");
	}
	
	elseif ($annee==2012 )
	{
	include("110.php");
	}
   elseif ($annee==2011 )
	{
	include("110.php");
	}
	elseif ($annee==2010 )
	{
	include("110.php");
	}
	elseif ($annee==2009 )
	{
	include("top14_2009.php");
	}
	elseif ($annee==2008 )
	{
	include("top14_2008.php");
	}
	elseif ($annee==2007 )
	{
	include("top14_2007.php");
	}
	elseif ($annee==2006 )
	{
	include("top14_2006.php");
	}
	elseif ($annee==2005 )
	{
	include("top14_2005.php");
	}
	elseif ($annee==2004 )
	{
	include("top14_2004.php");
	}
	
	elseif ($annee==2003 )
	{
	include("top14_2003.php");
	}
	
	elseif ($annee==2002 )
	{
	include("top14_2002.php");
	}
	elseif ($annee==2001 )
	{
	include("top14_2001.php");
	}
	
	elseif ($annee==2000 )
	{
	include("top14_2000.php");
	}
	elseif ($annee==1999 )
	{
	include("top14_1999.php");
	}
	
	elseif ($annee==1998 )
	{
	include("top14_1998.php");
	}
	
	
	
	
	else
	{
	include("top14_20CSS.php");
	}
  ?>