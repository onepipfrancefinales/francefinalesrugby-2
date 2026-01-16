




<html>
<head>
<title>Championnat de France Cadets Alamercery <?php echo $annee;?></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="../../2.css">
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
       include("bandeau_alamercery.php");
    ?>
	
	 
	 
	 
	 
<?php
if ($annee == 2018)
	{
	//include("360.php");
	include("alamercery_2018.php");
	}
elseif ($annee == 2017)
	{
	include("360.php");
	}
elseif ($annee == 2016)
	{
	include("360.php");
	}
elseif ($annee == 2015)
	{
	include("360.php");
	//include("alamercery_2015.php");
	}
elseif ($annee == 2014)
	{
	include("alamercery_2014.php");
	}
elseif ($annee == 2013)
	{
	include("alamercery_2013.php");
	}
elseif ($annee == 2012)
	{
	include("alamercery_2012.php");
	}
else
    {
   include("alamercery_clubs.php");
    }
?>
<?php  require ("../bas.php");?>
</body>
</html>