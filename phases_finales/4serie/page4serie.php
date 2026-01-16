<?php
$variable_1 = $_GET['variable_1']; 
$annee=$variable_1;
$annee2=$annee.''."_2";
$id = 220; 
?>
<?php
//mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion � MySQL
//mysql_select_db("onepip-france_db5"); // S�lection de la base onepip
require '../../connect/connexion5.php';
$reponse = $bdd->query(" 	SELECT division
							FROM divisions
							WHERE id=$id ");
			
			//$result=mysql_query($query);
			while ($row=$reponse->fetch())
				{
				$nomDivision=$row[0];
				}
?>
<?php
//include ("../fonctionsListeEquipes.php");
require ("../fonctions_phases_finales.php");

?>







<html>
<head>
<title>Championnat de France de 4me S�rie <?php echo $annee;?></title>
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

   <br/><br/>
	 <?php
    // On inclut le haut de la page
   include("bandeau_4serie.php");
    ?>
	<?php
if  ($annee== 2018)
   {
   include("220.php");
   }	
	
	
elseif  ($annee== 2017)
   {
   include("220.php");
   }
elseif  ($annee== 2016)
   {
   include("220.php");
   }	
elseif  ($annee== 2015)
   {
   include("220.php");
   }
elseif  ($annee== 2014)
   {
   include("4serie_2014.php");
   }
elseif  ($annee== 2013)
   {
   include("4serie_2013.php");
   }
elseif  ($annee== 2012)
   {
   include("4serie_2012.php");
   }
elseif ($annee== 2011)
   {
   include("4serie_2011.php");
    }
elseif ($annee== 2010)
   {
   include("4serie_2010.php");
   }
elseif ($annee== 2009)
   {
   include("4serie_2009.php");
    }
elseif ($annee== 2008)
   {
   include("4serie_2008.php");
   }
elseif ($annee== 2007)
   {
   include("4serie.php");
   }
elseif ($annee== 2006)
   {
   include("4serie.php");
   }
else
	{
	include("4serie_clubs.php");
	}
	
    ?>
	
<?php  require ("../bas.php");?>	
	</body>
</html>