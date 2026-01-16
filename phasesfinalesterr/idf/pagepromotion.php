<?php $annee=$_GET['variable_1'];?>
<html>
<head>
<title>Champions Ile de France <?php echo $annee;?></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body bgcolor="#EAECEB" text="#000000"></body>
</html> 
<?php $test == $_GET['$test'];?>
<?php
    include("hautindex.htm");
	 ?>

<?php
if ($annee ==2016)
	{
	include("170dem.php");
	}
	elseif ($annee > 2015)
	{
	include("promotion20XX.php");
	}
elseif ($annee == 2015)
	{
	 include("promotion2015.php");
	}
elseif ($annee == 2014)
	{
	    include("promotion2014.php");
	}	
	else 
	{
     include("honneur.php");
    }	
	
 ?>
