<html>
  <head>
<title></title>
<meta name=viewport content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
<p> 
<?php 

$champ=$_GET['champ']; 
$annee=$_GET['annee']; 

//if ($annee N'EXISTE PAS )
 

mysql_connect("sql.franceserv.fr", "onepip-france", "Lavelan1969&"); 
mysql_select_db("onepip-france-db1"); 

$reponse = mysql_query ("	SELECT type
							FROM bdpfClubs
							WHERE division = $champ and annee = $annee	");
				while ($donnees = mysql_fetch_array ($reponse))
							{
							$typeEntier = $donnees['type'];
							
							echo $typeEntier;
							}
							
mysql_close();							

if (strlen("$typeEntier")==12)
	require ("32me.php");
elseif (strlen("$typeEntier")==10)
	require ("16me.php");
elseif (strlen("$typeEntier")==7 or strlen("$typeEntier")==8)
	require ("8me.php");
elseif (strlen("$typeEntier")==5)
	require ("quarts.php");
elseif (strlen("$typeEntier")==3)
	require ("demies.php");
elseif (strlen("$typeEntier")==1)
	require ("finale.php");
 
?> 


</p>

