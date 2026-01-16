<?php 
$annee=$_GET['variable_1'];
$champ = $_GET['champ']; 
$id = 140; 
$annee =2017; 
$annee2 ="bdpf".''.$annee.''."_2"; 
?>


<html>
<head>
<title>Championnat de France Féderale 1 et Trophée Jean Prat <?php echo $annee;?></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="../2.css">
<meta name="description"
content="tous les champions de france de rugby, ffr,FFR, presentation de tous les clubs de rugby francais, Champions des differents comités territoriaux, Tous les championnats de rugby, fédérale 2, fédérale 3, fédérale 1, top 14.">
<meta name="keywords"
content="Brennus,Comite Midi Pyrenees de Rugby,ffr,FFR,Comite territoriaux de rugby,Stade toulousain,Bourgogne,FanceFinalesRugby,Rugby,championnat de france de rugby,Française,honneur,promotion honneur,Sport,Ballon,Ovale,">
<meta name="classification" content="Sport,Rugby">
<meta name="resource-type" content="document">
<meta name="copyright" content="Comite Midi Pyrenees de Rugby">
<meta name="author" content="Equipe Onepip">
<meta name="robots" content="All">
</head>



<?php

//mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); 
//mysql_select_db("onepip-france_db5"); 

require '../../connect/connexion5.php';

$result =$bdd->query( " 	SELECT division
			FROM divisions
			WHERE id=$id ");
			
			//$result=mysql_query($query);
			while ($row=$result->fetch())
				{
				$nomDivision=$row[0];
				}



require ("../fonctions_phases_finalesAR.php");
?>

<html>
<head>
<title>Championnat de France Féderale 1 et Trophée Jean Prat <?php echo $annee;?></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="../2.css">
<meta name="description"
content="tous les champions de france de rugby, ffr,FFR, presentation de tous les clubs de rugby francais, Champions des differents comités territoriaux, Tous les championnats de rugby, fédérale 2, fédérale 3, fédérale 1, top 14.">
<meta name="keywords"
content="Brennus,Comite Midi Pyrenees de Rugby,ffr,FFR,Comite territoriaux de rugby,Stade toulousain,Bourgogne,FanceFinalesRugby,Rugby,championnat de france de rugby,Française,honneur,promotion honneur,Sport,Ballon,Ovale,">
<meta name="classification" content="Sport,Rugby">
<meta name="resource-type" content="document">
<meta name="copyright" content="Comite Midi Pyrenees de Rugby">
<meta name="author" content="Equipe Onepip">
<meta name="robots" content="All">
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
	 
 <?php   include("bandeau_federale1.php");   ?>
	 

	 
	  <?php 
	  
	   if ($annee==2018)
	{
	include("140-2018.php");
	}  
	  
	  
	  elseif ($annee==2017)
	{
//include("140-2017.php");
include("140_2017.php");
//	include("140.php");
	}
	  
	  
	  elseif ($annee==2016)
	{
	include("140.php");
	}
	  
elseif ($annee==2015)
	{
	include("federale1_2015.php");
	}	
elseif ($annee==2014)
	{
	include("federale1_2014.php");
	}
elseif($annee==2013)
	{
	include("federale1_2013.php");
	}
elseif($annee==2012)
	{
	include("federale1_2012.php");
	}
elseif($annee==2011)
	{
	include("federale1_2011.php");
	}
	
elseif ($annee==2010)
	{
	include("federale1_2010.php");
	}
elseif ($annee==2009)
	{
	include("federale1_2.php");
	}
elseif ($annee==2008)
	{
	include("federale1_2.php");
	}
else
   {
	include("federale1_clubs.php");
	}
?>
	
<?php include("../bas.php"); ?>
</body>
</html>	
	
	 
	
	