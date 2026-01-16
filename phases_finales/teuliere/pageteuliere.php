<?php $annee=$_GET['variable_1'];?>
<html>
<head>
<title>Championnat de France Teuliere <?php echo $annee;?></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link type="text/css" rel="stylesheet"  href="../../2.css">
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

	<br/><br/>
	 <?php
   
   include("bandeau_teuliere.php");
    ?>
	<?php
if ($annee == 2018)
	{
	include("370-2018.php");
	}	
	
elseif ($annee == 2017)
	{
	include("370_2017.php");
	}	
	
elseif ($annee == 2016)
	{
	include("370.php");
	}
	
	
		elseif ($annee == 2015)
	{
	include("teuliere_2015.php");
	}		
elseif ($annee == 2014)
	{
	include("teuliere_2014.php");
	}
elseif ($annee == 2013)
	{
	include("teuliere_2013.php");
	}
	
		
elseif ($annee == 2012)
	{
	include("teuliere_2012.php");
	}
  
   else
    {
   include("teuliere.php");
   }
   
    ?>