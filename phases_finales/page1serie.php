<?php
$variable_1 = $_GET['variable_1']; 
$annee=$variable_1;
$annee2=$annee.''."_2";
$id = 190; 


mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion à MySQL
mysql_select_db("onepip-france_db5"); // Sélection de la base onepip

$query = " 	SELECT division
			FROM divisions
			WHERE id=$id ";
			
			$result=mysql_query($query);
			while ($row=mysql_fetch_array($result))
				{
				$nomDivision=$row[0];
				}

include ("../fonctionsListeEquipes.php");
require ("../fonctions_phases_finalesTest.php"); 
?>


<html>
<head>
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
<title>1re S&eacute;rie</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<script language="JavaScript">
<!--
function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);
// -->
</script>
</head>

<body bgcolor="#EAECEB" text="#000000">
<?php 
if ($annee>=2015)
	include("../hautindex2015.php");
else
	include("../hautindex.php");
  
   include("bandeau_1serie.php");

if  ($annee== 2017)
   {
   include("190.php");
   }	
	
elseif  ($annee== 2016)
   {
   include("190.php");
   }
	
elseif  ($annee== 2015)
   {
   include("190.php");
   }
elseif  ($annee== 2014)
   {
   include("1serie_2014.php");
   }
elseif  ($annee== 2013)
   {
   include("1serie_2013.php");
   }
elseif  ($annee== 2012)
   {
   include("1serie_2012.php");
   }
elseif ($annee== 2011)
   {
   include("1serie_2011.php");
    }
 elseif ($annee== 2010)
   {
   include("1serie_2010.php");
   }
 elseif ($annee== 2009)
   {
   include("1serie2.php");
   }
 elseif ($annee== 2008)
   {
   include("1serie2.php");
   }
 elseif ($annee== 2007)
   {
   include("1serie2.php");
   }
 elseif ($annee== 2006)
   {
   include("1serie2.php");
   }
 
 else
	{
	include("1serie_clubs.php");
	}
?>
<?php  require ("../bas.php");?>
 
</body>
</html>