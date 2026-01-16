<?php $annee=$_GET['variable_1'];?>
<html>
<head>
<title>Championnat de France Fédérale 3 <?php echo $annee;?></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

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
	 
<?php  include("bandeau_federale3.php");  ?>
	 
<?php
if ($annee == 2018)	
    	{
   	//	include("federale3_clubs.php");
   		include("160.php");
   	}  
 
  elseif ($annee == 2017)	
    	{
   		include("160_2017.php");
   		}  
 elseif ($annee == 2016)	
    	{
   		include("160.php");
   		}   
	
elseif ($annee == 2015)	
    	{
   		include("federale3_2015.php");
   		}	
elseif ($annee == 2014)	
    	{
   		include("federale3_2014.php");
   		}
elseif ($annee == 2013)
	    {
   		include("federale3_2013.php");
   		}
elseif ($annee == 2012)	
	 	{
   		include("federale3_2012.php");
   		}
elseif ($annee == 2011)
		 {
		include("federale3_2011.php");
		}
elseif ($annee == 2010)
		 {
		include("federale3_2010.php");
		}
elseif ($annee == 2009)
	 	{
		include("federale3_2.php");
		}
	
	
	else
	 {
	include("federale3_clubs.php");
	}
	
	
    ?>
	</body>
</html>