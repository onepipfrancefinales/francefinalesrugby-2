<?php $annee=$_GET['variable_1'];?>
<html>
<head>
<title>Championnat de France Juniors Balandrade <?php echo $annee;?></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

</head>

<body bgcolor="#EAECEB" text="#000000">
<?php
    




if ($annee==2015)
	{
    include("../hautindex2015.php");
    } 
else
	 include("../hautindex.php");
	?>
	<br/><br/>
	 <?php
    
   include("bandeau_balandrade.php");
    ?>
	
	<?php
if ($annee == 2018)
	{
	include("330_2018.php");
 	}	
	
	
	
	
	elseif ($annee == 2017)
	{
	include("330_2017.php");
 	}
	
	
	elseif ($annee == 2016)
	{
	include("balandrade_2016.php");
 	}
	
	
	elseif ($annee == 2015)
	{
	include("balandrade_2015.php");
 }
		
	elseif ($annee == 2014)
	{
	include("balandrade_2014.php");
 }
	elseif ($annee == 2013)
	{
	include("balandrade_2013.php");
 }
		
elseif ($annee == 2012)
	{
	include("balandrade_2012.php");
 }
   else
    {
   include("balandrade.php");
   }
   
    ?>
	</body>
	</html>