<?php
$club = $_POST['club'];
$id = $_POST['id'];
$nom_complet = $_POST['nom_complet'];
$type = $_POST['type'];
$comite = $_POST['comite'];
$saison = $_POST['saison'];

echo $club ;echo $id ;echo $nom_complet; echo $type; echo $comite ;
echo "<br/>";
echo "<br/>";
?>


<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body bgcolor="#FFFFFF" text="#000000">
<b><font size="3" face="Arial, Helvetica, sans-serif">Insertion des nouveaus �l�ments 
dans la base <font size="4">bdclubs</font></font></b> 
<?php
echo "<br/>";
mysql_connect("sql.franceserv.fr", "onepip-france", "Lavelan1969&"); // Connexion � MySQL
mysql_select_db("onepip-france-db1"); // S�lection de la base onepip
?>
<?php
$club = $_POST['club'];
$id = $_POST['id'];
$nom_complet = $_POST['nom_complet'];
$gif=".gif";

$logo='http://francefinalesrugby.franceserv.com/pageclub00.php?champion=';
$logofem='http://francefinalesrugby.franceserv.com/feminine/pageclub00.php?champion=';
$t25='http://francefinalesrugby.franceserv.com/images/blasons25_25/';
$t100='http://francefinalesrugby.franceserv.com/images/blasons100_100/';
$t200='http://francefinalesrugby.franceserv.com/images/blasons200_200/';

$uuu=$logo.$id;
$vvv=$logofem.$id;
$www=$t25.$id.".gif";
$xxx=$t100.$id.".gif";
$yyy=$t200.$id.".gif";

 
?>
<?php 
if ($comite=="Alpes")
	{
	$comite_mini="(AP)";
	}
elseif ($comite=="Auvergne")
	{
	$comite_mini="(AU)";
	}
elseif ($comite=="Alsace Lorraine")
	{
	$comite_mini="(AL)";
	}
elseif ($comite=="Armagnac Bigorre")
	{
	$comite_mini="(AB)";
	}
elseif ($comite=="Bearn")
	{
	$comite_mini="(BE)";
	}
	elseif ($comite=="Bourgogne")
	{
	$comite_mini="(BG)";
	}
elseif ($comite=="Bretagne")
	{
	$comite_mini="(BR)";
	}
elseif ($comite=="Cote d Azur")
	{
$comite_mini="(CAZ)";
	}
	
elseif ($comite=="Centre")
	{
	$comite_mini="(CE)";
	}
elseif ($comite=="Cote Basque Landes")
	{
	$comite_mini="(CBL)";
	}
elseif ($comite=="Drome Ardeche")
	{
	$comite_mini="(DA)";
	}
elseif ($comite=="Flandres")
	{
	$comite_mini="(FL)";
	}	
elseif ($comite=="Ile de France")
	{
	$comite_mini="(IDF)";
	}	
elseif ($comite=="Languedoc")
	{
	$comite_mini="(LD)";
	}	
elseif ($comite=="Limousin")
	{
	$comite_mini="(LM)";
	}	
elseif ($comite=="Cote d Argent")
	{
	$comite_mini="(CA)";
	}	
elseif ($comite=="Lyonnais")
	{
	$comite_mini="(LY)";
	}
elseif ($comite=="Pyrenees")
	{
	$comite_mini="(MPY)";
	}	
elseif ($comite=="Normandie")
	{
	$comite_mini="(N)";
	}	
elseif ($comite=="Pays de Loire")
	{
	$comite_mini="(PL)";
	}	
elseif ($comite=="Perigord Agenais")
	{
	$comite_mini="(PA)";
	}	
elseif ($comite=="Poitou Charente")
	{
	$comite_mini="(PCH)";
	}	
	
elseif ($comite=="Provence")
	{
	$comite_mini="(PR)";
	}		
else 
	{
	$comite_mini="(PC)";
	}
?>
<?php 
echo $comite ;
echo $comite_mini ;
echo $yyy ;
echo "<br/>";
echo "<br/>";
?>
<?php 
//*****************************     bdclubs   *************************************

$club=("INSERT INTO bdclubs
		VALUES('$id','$club','','','','','','$type','$nom_complet','$comite_mini','$comite','$id','$uuu','$vvv','$www','$xxx','$yyy')");
	
		mysql_query($club);
	?>
<b> <font face="Arial, Helvetica, sans-serif"> 
<?php mysql_close(); // D�connexion de MySQL ?>
<font size="3">Insertion des nouveaus �l�ments dans la base bdsaison</font></font></b> 
<?php
echo "<br/>";
mysql_connect("sql.franceserv.fr", "onepip-france", "Lavelan1969&"); // Connexion � MySQL
mysql_select_db("onepip-france-db1"); // S�lection de la base onepip
?>
<?php
$club = $_POST['club'];
$id = $_POST['id'];
$nom_complet = $_POST['nom_complet'];
$type = $_POST['type'];
$comite = $_POST['comite'];
$saison = $_POST['saison'];

echo $club ;echo $id ;echo $nom_complet; echo $type; echo $saison;

?>
<?php 
//*****************************     bdsaisons   *************************************
echo "<br/>";echo "<br/>";
$saison=("INSERT INTO bdsaisons
		VALUES('$id','$club','$id','$comite_mini','1','$type','$nom_complet','','','','','','','','','','$saison','','','','','','','','','')");
		mysql_query($saison);

?>
<b> <font face="Arial, Helvetica, sans-serif"> 
<?php mysql_close(); // D�connexion de MySQL ?>
<font size="3">Insertion des nouveaus �l�ments dans la base <font size="4">infosclub</font></font></font></b> 
<?php
echo "<br/>";
mysql_connect("sql.franceserv.fr", "onepip-france", "Lavelan1969&"); // Connexion � MySQL
mysql_select_db("onepip-france-db1"); // S�lection de la base onepip
?>
<?php
$club = $_POST['club'];
$id = $_POST['id'];
$nom_complet = $_POST['nom_complet'];
$type = $_POST['type'];
$comite = $_POST['comite'];
$saison = $_POST['saison'];

echo $club ;echo $id ;echo $nom_complet; echo $type; echo $comite ;echo $saison;

?>
<?php
//*****************************     infosclub   *************************************
echo "<br/>";echo "<br/>";
$infos=("INSERT INTO infosclub
		VALUES('$id','$club','$nom_complet','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')");
		mysql_query($infos);

?>
<?php mysql_close(); // D�connexion de MySQL ?>
<a href="saisie_nouveau_club.php" target="_top">Retour vers le formulaire de saisie 
</a> </html>