<?php 
if (isset ($_GET['annee'])) $annee = $_GET['annee']; else $annee='Erreur, pas de variable Annee'; 
if (isset ($_GET['division'])) $division = $_GET['division']; else $division='Erreur, pas de variable Division'; 
if (isset ($_GET['comite'])) $comite = $_GET['comite']; else $comite='Erreur, pas de variable Comite'; 
if (isset ($_GET['page'])) $page = $_GET['page']; else $page='-'; 
if (isset ($type)) $type = $type; else $type='Erreur, pas de variable Type'; 
if (isset ($somme)) $somme = $somme; else $somme='Erreur, pas de variable Somme'; 

$table_pfterr=$comite.''."_pfterr_e";
$bdcomite_pfterr=$comite.''."_pfterr_e";


//*****************************************************************
//******  Récupération des noms des comites et des ligues *********
//*****************************************************************

	require ("../../connect/connexion5.php") ; 
	$reponse = mysql_query("SELECT nomLigue
						FROM comite
						WHERE comite = '$comite'");
		while ($donnees = mysql_fetch_array($reponse))
			{$ligueNom=$donnees['nomLigue'];}
								
	$reponse = mysql_query("SELECT nom as nomComite
						FROM comite
						WHERE comite = '$comite' and id < 30");
		while ($donnees = mysql_fetch_array($reponse))
			{$comiteNom=$donnees['nomComite'];}								
				
//*******************************************
//******   Choix de la base de données  *****
//*******************************************

require ("../../connect/connexion6.php") ; 

//******************************************************
//*************  Traitement des phases finales  ********
//******************************************************

//*************   Honneur Promotion 1ère série  ********
if ($page=="HPHS1")
   {
	$reponse = mysql_query("SELECT sum(type) AS sommeHPHS1
							FROM $table_pfterr
							WHERE division < 200 and annee >='$annee' ");
								while ($donnees = mysql_fetch_array($reponse))
								 {
								 $somme=$donnees['sommeHPHS1'];
								 }
	}
	
//*************      2me 3me 4me série           *******
elseif ($page=="S2S3S4")
	{
	$reponse = mysql_query("SELECT sum(type) AS sommeS2S3S4
							FROM $table_pfterr
							WHERE division > 190 and division < 230 and annee >='$annee'");
								while ($donnees = mysql_fetch_array($reponse))
									{
									$somme=$donnees['sommeS2S3S4'];
									}
		}

//*************            Réserves              *******
elseif ($page=="RRPHR1")
	{
	$reponse = mysql_query("SELECT sum(type) AS sommeRRPHR1
							FROM $table_pfterr
							WHERE division > 220 and annee >='$annee'	");
									while ($donnees = mysql_fetch_array($reponse))
									{
									$somme=$donnees['sommeRRPHR1'];
									}	
	}
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
include ("bandeauNavigation.php");
if ($somme<10)
	{
 	 if ($somme==3)
		{ include("finale.php");}
	 elseif ($somme==6)
		{ include ("demi.php");}
	 elseif ($somme==9)
		{ include ("demiAR.php");}
	 else
		{include ("demiMixte.php");}	
	}
else
	{	
	 $requete = "SELECT type
				FROM $table_pfterr
				WHERE division = $division and annee >='$annee'";
						
	 $res = $connect->query($requete);
	 while ($data = mysqli_fetch_array($res))
			{$type=$data['type'];}
		
	 if (isset ($type)) $type = $type; else $type='-';
		
	 $somme=$type;
	
	 if ($somme==14 )
		{include ("quart.php");}
	 elseif ($somme==15)
		{include ("quartDemiAR.php");}
	 elseif ($somme==16)
		{include ("16me.php");}
	 elseif ($somme==17)
		{include ("barrage8me.php");}
	 elseif ($somme==18)
		{include ("8me.php");}
	}
	?>
  </body>
</html> 