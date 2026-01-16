<?php 
$annee=$_GET['variable_1'];
$comite=$_GET['comite'];
$division=$_GET['division'];
$page=$_GET['page'];
echo $page;
echo $comite;
echo $annee;

$table_pfterr="php".''.$comite.''."_pfterr";
$bdcomite_pfterr=$comite.''."_pfterr";
echo $table_pfterr;

require ("../../connect/connection5.php") ; 
$reponse = mysql_query("SELECT nom as nomcomplet
						FROM comite
						WHERE comite = '$comite'	");
				while ($donnees = mysql_fetch_array($reponse))
							{
							$comiteNom=$donnees['nomcomplet'];
							}
				
echo $comiteNom;
echo $division;
mysql_close(); 
?>

<?php	require ("../../connect/choixDeLaBase.php") ; ?>
<?php


	
if ($page=="HPHS1")
	{
		if ($comite=="mpy")
				{
						include ("hautindexPage.php");
					echo test;
					
						$reponse = mysql_query ("SELECT type
												 FROM phpmpy_pfterr
												 WHERE  division=180");
							
							while ($donnees = mysql_fetch_array ($reponse)) 
								{
								$type=$donnees['type'];
								echo $type;
								}
							
								$type=13;
								echo $type;
								//********   Quarts Demi Finale  *******
									if ($type==14)
										{
								//		$division??????;
										include ("quarts.php");
										}
										
								//********   Quarts(AR) Demi(AR) Finale  *******	
									elseif ($type==15)
										{
								//		$division??????;
										include ("quartDemiAR.php");
										}
								
								//********   Barrage(8 barragistes) Quarts demi finale *******		
									elseif ($type==13)
										{
									//	$division??????;
										include ("barrages8Quarts.php");
										}
										
								//********   Barrage(12 barragistes) Quarts demi finale *******		
									elseif ($type==16)
										{
									//	$division??????;
										include ("barrages12Quarts.php");
										}
								
								//********  huitiemes Quarts demi finale *******			
									elseif ($type==17)
										{
								//		$division??????;
										include ("barrages8Quarts.php");
										}
							
				}

		else
				{
			$reponse = mysql_query("SELECT sum(type) AS sommeHPHS1
									FROM $table_pfterr
									WHERE division < 200 and annee='$annee' ");
								while ($donnees = mysql_fetch_array($reponse))
								{
								$somme=$donnees['sommeHPHS1'];
								}
				}
		}
		elseif ($page=="S2S3S4")
		{
		$reponse = mysql_query("SELECT sum(type) AS sommeS2S3S4
								FROM $table_pfterr
								WHERE division > 190 and division < 230 and annee='$annee'");
						while ($donnees = mysql_fetch_array($reponse))
						{
						$somme=$donnees['sommeS2S3S4'];
						}
		}
	elseif ($page=="RRPHR1")
		{
		$reponse = mysql_query("SELECT sum(type) AS sommeRRPHR1
								FROM $table_pfterr
								WHERE division > 220 and annee='$annee'	");
						while ($donnees = mysql_fetch_array($reponse))
						{
						$somme=$donnees['sommeRRPHR1'];
						}
		}
			
echo $somme;
echo "fin";
mysql_close();
?>

<!DOCTYPE html>
<html>
<head>
<title>Champions <?php echo $comiteNom; echo $annee;?></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="../champTerr.css">
<meta name="description"
content="tous les champions de france de rugby, ffr,FFR, presentation de tous les clubs de rugby francais, 
Champions des differents comites territoriaux, Tous les championnats de rugby, federale 2, federale 3, federale 1, top 14.">
<meta name="keywords"
content="Brennus,Comite Midi Pyrenees de Rugby,ffr,FFR,Comite territoriaux de rugby,Stade toulousain,Bourgogne,FanceFinalesRugby,
Rugby,championnat de france de rugby,Francaise,honneur,promotion honneur,Sport,Ballon,Ovale,">
<meta name="classification" content="Sport,Rugby">
<meta name="resource-type" content="document">
<meta name="copyright" content="Comite Midi Pyrenees de Rugby">
<meta name="author" content="Equipe Onepip">
<meta name="robots" content="All">
</head>

<body>



<?php
 	if ($somme==3)
	{
	include("hautindex.php");
	include("finale.php");
//	echo "finale";
	}
elseif ($somme==6)
	{
	include("hautindex.php");
	include ("demi.php");
//	echo "demi";
	}
elseif ($somme==9)
	{
	include("hautindex.php");
	include ("demiAR.php");
//	echo "demiAR";
	}


else
	{
	include("hautindex.php");
//	include ("demiMixte2.php");
	include ("demiMixte.php");
//	echo "demiMixte2";
	}
?>

	</body>
</html> 