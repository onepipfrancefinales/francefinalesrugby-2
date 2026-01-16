<?php $annee=$_GET['variable_1'];
echo $annee; ?>
<html>
<head>
<title>Championnat de France Fédérale B <?php echo $annee;?></title>
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
	
	
<?php   include("bandeau_federaleb.php");    ?>
	
	
	
	
	 <?php
   
      if ($annee >= 2016)
	{
	
	include("250.php");
	
	}
	
	
	elseif ($annee == 2015)
	{
	
	include("250.php");
	//include("federaleb_2015.php");
	}
	
elseif ($annee == 2014)
	{
	include("federaleb_2014.php");
	}
		
elseif ($annee == 2013)
	{
	include("federaleb_2013.php");
	}
elseif ($annee == 2012)
	{
	include("federaleb_2012.php");
	}
 elseif ($annee == 2011)
    {
   include("federaleb_2011.php");
   }
 elseif ($annee == 2010)
     {
   include("federaleb_2010.php");
   }
    elseif ($annee == 2009)
      {
   include("federaleb_2.php");
   }
 elseif ($annee == 20008)
      {
   include("federaleb_2.php");
   }
else
    {
   include("federaleb_clubs.php");
   }
   
    ?>
	
	</body>
</html>