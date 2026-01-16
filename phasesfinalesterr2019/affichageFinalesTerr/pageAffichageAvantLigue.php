<?php 
if (isset ($_GET['variable_1'])) $annee = $_GET['variable_1']; else $annee='-'; 
if (isset ($_GET['page'])) $page = $_GET['page']; else $page='-'; 
if (isset ($_GET['comite'])) $comite = $_GET['comite']; else $comite='-';
if (isset ($_GET['division'])) $division = $_GET['division']; else $division='-';

if (isset ($somme)) $somme = $somme; else $somme='-'; 

//$comite=$_GET['comite'];
//$division=$_GET['division'];





//echo $page;
//echo $comite;
//echo $annee;


$table_pfterr="php".''.$comite.''."_pfterr";
$bdcomite_pfterr=$comite.''."_pfterr";
//echo $table_pfterr;


//*****************************************************************
//******  Récupération des noms des comites et des ligues *********
//*****************************************************************

require ("../../connect/connexion5.php") ; 
$reponse = mysql_query("SELECT nomLigue
						FROM comite
						WHERE comite = '$comite'	");
							while ($donnees = mysql_fetch_array($reponse))
								{							
								$ligueNom=$donnees['nomLigue'];
								}
								
$reponse = mysql_query("SELECT nom as nomComite
						FROM comite
						WHERE comite = '$comite' and id < 30");
							while ($donnees = mysql_fetch_array($reponse))
								{							
								$comiteNom=$donnees['nomComite'];
								}								
				
//echo $comiteNom;
//echo $ligueNom;
mysql_close(); 
?>

<?php
//*******************************************
//******   Choix de la base de données  *****
//*******************************************

require ("../../connect/connexion2.php") ; 




//******************************************************
//*************  Traitement des phases finales  ********
//*************   Honneur Promotion 1ère série  ********
//******************************************************


if ($page=="HPHS1")
	{
		
		
		//******** Traitement comite MPY *******
		
		if ($comite=="mpy" )
				{
				include ("hautindexPage.php");
						
				$reponse = mysql_query ("SELECT type
										 FROM phpmpy_pfterr
										 WHERE  division='$division'");
							while ($donnees = mysql_fetch_array ($reponse)) 
								{
								$type=$donnees['type'];
								}
							
								$type=13;
								
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
				
				//******** Traitement autre comités que MPY *******
				
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
		
//******************************************************
//*************  Traitement des phases finales  ********		
//*************      2me 3me 4me série           *******
//******************************************************

		
if ($page=="S2S3S4")

		{
		if ($comite=="mpy" )
				{
				include ("hautindexPage.php");
						
				$reponse = mysql_query ("SELECT type
										 FROM phpmpy_pfterr
										 WHERE  division='$division'");
							while ($donnees = mysql_fetch_array ($reponse)) 
								{
								$type=$donnees['type'];
								}
							
								$type=13;
								
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
		$reponse = mysql_query("SELECT sum(type) AS sommeS2S3S4
								FROM $table_pfterr
								WHERE division > 190 and division < 230 and annee='$annee'");
						while ($donnees = mysql_fetch_array($reponse))
						{
						$somme=$donnees['sommeS2S3S4'];
						}
		}
	}	
		


//******************************************************
//*************  Traitement des phases finales  ********		
//*************            Réserves              *******
//******************************************************


		
	if ($page=="RRPHR1")
	{
		if ($comite=="mpy" )
				{
				include ("hautindexPage.php");
						
				$reponse = mysql_query ("SELECT type
										 FROM phpmpy_pfterr
										 WHERE  division='$division'");
							while ($donnees = mysql_fetch_array ($reponse)) 
								{
								$type=$donnees['type'];
								}
							
								$type=13;
								
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
		$reponse = mysql_query("SELECT sum(type) AS sommeRRPHR1
								FROM $table_pfterr
								WHERE division > 220 and annee='$annee'	");
						while ($donnees = mysql_fetch_array($reponse))
						{
						$somme=$donnees['sommeRRPHR1'];
						}
		}
	}
			
//echo $somme;
//echo "fin";
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

include("hautindex.php");


 if ($somme==3)
	{
	include("finale.php");
	}
elseif ($somme==6)
	{
	include ("demi.php");
	}
elseif ($somme==9)
	{
	include ("demiAR.php");
	}
elseif ($somme==14 OR $somme==28 OR $somme==42)
	{
	include ("quart.php");
	}
else
	{
	include ("demiMixte.php");
	}
?>

	</body>
</html> 