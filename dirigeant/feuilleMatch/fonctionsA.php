<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body bgcolor="#FFFFFF" text="#000000">






<?php


function couleurAO1 ($joueur, $bdcomite, $equipeA)
{
global $orangeA1;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence FROM $bdcomite WHERE nom='$joueur' and (type_licence='O' or type_licence='OT') and club='$equipeA'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	
	}
if ($type_licencejoueur211=='O' or $type_licencejoueur211== 'OT')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$orangeA1=1;

}
else
echo"";
}
?>
<?php
function couleurAO2 ($joueur, $bdcomite, $equipeA)
{
global $orangeA2;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and (type_licence='O' or type_licence='OT') and club='$equipeA'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	
	}
if ($type_licencejoueur211=='O' or $type_licencejoueur211== 'OT' )
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$orangeA2=1;

}
else
echo"";
}
?>
<?php
function couleurAO3 ($joueur, $bdcomite, $equipeA)
{
global $orangeA3;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and (type_licence='O' or type_licence='OT') and club='$equipeA'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	 
	}
if ($type_licencejoueur211=='O' or $type_licencejoueur211== 'OT' )
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$orangeA3=1;

}
else
echo"";
}
?>

<?php
function couleurAO4 ($joueur, $bdcomite, $equipeA)
{
global $orangeA4;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and (type_licence='O' or type_licence='OT') and club='$equipeA'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 

	}
if ($type_licencejoueur211=='O' or $type_licencejoueur211== 'OT')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$orangeA4=1;

}
else
echo"";
}
?>
<?php
function couleurAO5 ($joueur, $bdcomite, $equipeA)
{
global $orangeA5;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and (type_licence='O' or type_licence='OT') and club='$equipeA'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	 
	}
if ($type_licencejoueur211=='O' or $type_licencejoueur211== 'OT' )
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$orangeA5=1;

}
else
echo"";
}
?>
<?php
function couleurAO6 ($joueur, $bdcomite, $equipeA)
{
global $orangeA6;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and (type_licence='O' or type_licence='OT') and club='$equipeA'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
 
	}
if ($type_licencejoueur211=='O' or $type_licencejoueur211== 'OT')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$orangeA6=1;

}
else
echo"";
}
?>
<?php
function couleurAO7 ($joueur, $bdcomite, $equipeA)
{
global $orangeA7;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and (type_licence='O' or type_licence='OT') and club='$equipeA'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 

	}
if ($type_licencejoueur211=='O' or $type_licencejoueur211== 'OT')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$orangeA7=1;

}
else
echo"";
}
?>
<?php
function couleurAO8 ($joueur, $bdcomite, $equipeA)
{
global $orangeA8;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and (type_licence='O' or type_licence='OT') and club='$equipeA'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	
	}
if ($type_licencejoueur211=='O' or $type_licencejoueur211== 'OT')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$orangeA8=1;

}
else
echo"";
}
?>
<?php
function couleurAO9 ($joueur, $bdcomite, $equipeA)
{
global $orangeA9;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and (type_licence='O' or type_licence='OT') and club='$equipeA'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
 
	}
if ($type_licencejoueur211=='O' or $type_licencejoueur211== 'OT')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$orangeA9=1;

}
else
echo"";
}
?>
<?php
function couleurAO10 ($joueur, $bdcomite, $equipeA)
{
global $orangeA10;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and (type_licence='O' or type_licence='OT') and club='$equipeA'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	$photo2=$donnees['photo']; 
	}
if ($type_licencejoueur211=='O' or $type_licencejoueur211== 'OT')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$orangeA10=1;

}
else
echo"";
}
?>
<?php
function couleurAO11 ($joueur, $bdcomite, $equipeA)
{
global $orangeA11;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and (type_licence='O' or type_licence='OT') and club='$equipeA'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 

	}
if ($type_licencejoueur211=='O' or $type_licencejoueur211== 'OT' )
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$orangeA11=1;

}
else
echo"";
}
?>
<?php
function couleurAO12 ($joueur, $bdcomite, $equipeA)
{
global $orangeA12;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and (type_licence='O' or type_licence='OT') and club='$equipeA'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	
	}
if ($type_licencejoueur211=='O' or $type_licencejoueur211== 'OT')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$orangeA12=1;

}
else
echo"";
}
?>
<?php
function couleurAO13 ($joueur, $bdcomite, $equipeA)
{
global $orangeA13;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and (type_licence='O' or type_licence='OT') and club='$equipeA'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	$photo2=$donnees['photo']; 
	}
if ($type_licencejoueur211=='O' or $type_licencejoueur211== 'OT')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$orangeA13=1;

}
else
echo"";
}
?>
<?php
function couleurAO14 ($joueur, $bdcomite, $equipeA)
{
global $orangeA14;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and (type_licence='O' or type_licence='OT') and club='$equipeA'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	 
	}
if ($type_licencejoueur211=='O' or $type_licencejoueur211== 'OT' )
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$orangeA14=1;

}
else
echo"";
}
?>
<?php
function couleurAO15 ($joueur, $bdcomite, $equipeA)
{
global $orangeA15;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and (type_licence='O' or type_licence='OT') and club='$equipeA'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 

	}
if ($type_licencejoueur211=='O' or $type_licencejoueur211== 'OT' )
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$orangeA15=1;

}
else
echo"";
}
?>
<?php
function couleurAO16 ($joueur, $bdcomite, $equipeA)
{
global $orangeA16;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence FROM $bdcomite WHERE nom='$joueur' and (type_licence='O' or type_licence='OT') and club='$equipeA'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	
	}
if ($type_licencejoueur211=='O' or $type_licencejoueur211== 'OT' )
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$orangeA16=1;

}
else
echo"";
}
?>
<?php
function couleurAO17 ($joueur, $bdcomite, $equipeA)
{
global $orangeA17;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence FROM $bdcomite WHERE nom='$joueur' and (type_licence='O' or type_licence='OT') and club='$equipeA'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
 
	}
if ($type_licencejoueur211=='O' or $type_licencejoueur211== 'OT')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$orangeA17=1;

}
else
echo"";
}
?>
<?php
function couleurAO18 ($joueur, $bdcomite, $equipeA)
{
global $orangeA18;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and (type_licence='O' or type_licence='OT') and club='$equipeA'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	$photo2=$donnees['photo']; 
	}
if ($type_licencejoueur211=='O' or $type_licencejoueur211== 'OT')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$orangeA18=1;

}
else
echo"";
}
?>
<?php
function couleurAO19 ($joueur, $bdcomite, $equipeA)
{
global $orangeA19;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and (type_licence='O' or type_licence='OT') and club='$equipeA'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	$photo2=$donnees['photo']; 
	}
if ($type_licencejoueur211=='O' or $type_licencejoueur211== 'OT')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$orangeA19=1;

}
else
echo"";
}
?>
<?php
function couleurAO20 ($joueur, $bdcomite, $equipeA)
{
global $orangeA20;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and (type_licence='O' or type_licence='OT') and club='$equipeA'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	$photo2=$donnees['photo']; 
	}
if ($type_licencejoueur211=='O' or $type_licencejoueur211== 'OT')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$orangeA20=1;

}
else
echo"";
}
?>
<?php
function couleurAO21 ($joueur, $bdcomite, $equipeA)
{
global $orangeA21;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and (type_licence='O' or type_licence='OT') and club='$equipeA'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	 
	}
if ($type_licencejoueur211=='O' or $type_licencejoueur211== 'OT')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$orangeA21=1;

}
else
echo"";
}
?>
<?php
function couleurAO22 ($joueur, $bdcomite, $equipeA)
{
global $orangeA22;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and (type_licence='O' or type_licence='OT') and club='$equipeA'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	
	}
if ($type_licencejoueur211=='O' or $type_licencejoueur211== 'OT')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$orangeA22=1;

}
else
echo"";
}
?>
<?php
function couleurAO23 ($joueur, $bdcomite, $equipeA)
{
global $orangeA23;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence FROM $bdcomite WHERE nom='$joueur' and (type_licence='O' or type_licence='OT') and club='$equipeA'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	
	}
if ($type_licencejoueur211=='O' or $type_licencejoueur211== 'OT')
	{
	{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
	$orangeA23=1;
	
	}
else
	{
	echo "";
	}	
}
?>
<?php
function couleurABJ1 ($joueur, $bdcomite, $equipeA)
{
global $blajauneA1;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence FROM $bdcomite WHERE nom='$joueur' and (type_licence='BJ' or type_licence='BJT') and club='$equipeA'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	}
if ($type_licencejoueur211=='BJ' or $type_licencejoueur211== 'BJT')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$blajauneA1=1;

}
else
echo"";
}
?>
<?php
function couleurABJ2 ($joueur, $bdcomite, $equipeA)
{
global $blajauneA2;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence FROM $bdcomite WHERE nom='$joueur' and (type_licence='BJ' or type_licence='BJT') and club='$equipeA'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	
	}
if ($type_licencejoueur211=='BJ' or $type_licencejoueur211== 'BJT' )
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$blajauneA2=1;
}
else
echo"";
}
?>
<?php
function couleurABJ3 ($joueur, $bdcomite, $equipeA)
{
global $blajauneA3;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence FROM $bdcomite WHERE nom='$joueur' and (type_licence='BJ' or type_licence='BJT') and club='$equipeA'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	 
	}
if ($type_licencejoueur211=='BJ' or $type_licencejoueur211== 'BJT')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$blajauneA3=1;

}
else
echo"";
}
?>
<?php
function couleurABJ4 ($joueur, $bdcomite, $equipeA)
{
global $blajauneA4;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and (type_licence='BJ' or type_licence='BJT') and club='$equipeA'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	
	}
if ($type_licencejoueur211=='BJ' or $type_licencejoueur211== 'BJT')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$blajauneA4=1;

}
else
echo"";
}
?>
<?php
function couleurABJ5 ($joueur, $bdcomite, $equipeA)
{
global $blajauneA5;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence FROM $bdcomite WHERE nom='$joueur' and (type_licence='BJ' or type_licence='BJT') and club='$equipeA'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	}
if ($type_licencejoueur211=='BJ' or $type_licencejoueur211== 'BJT')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$blajauneA5=1;

}
else
echo"";
}
?>
<?php
function couleurABJ6 ($joueur, $bdcomite, $equipeA)
{
global $blajauneA6;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence FROM $bdcomite WHERE nom='$joueur' and (type_licence='BJ' or type_licence='BJT') and club='$equipeA'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence'];  
	}
if ($type_licencejoueur211=='BJ' or $type_licencejoueur211== 'BJT')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$blajauneA6=1;

}
else
echo"";
}
?>
<?php
function couleurABJ7 ($joueur, $bdcomite, $equipeA)
{
global $blajauneA7;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and (type_licence='BJ' or type_licence='BJT') and club='$equipeA'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence'];  
	}
if ($type_licencejoueur211=='BJ' or $type_licencejoueur211== 'BJT')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$blajauneA7=1;

}
else
echo"";
}
?>
<?php
function couleurABJ8 ($joueur, $bdcomite, $equipeA)
{
global $blajauneA8;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence FROM $bdcomite WHERE nom='$joueur' and (type_licence='BJ' or type_licence='BJT') and club='$equipeA'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence'];  
	}
if ($type_licencejoueur211=='BJ' or $type_licencejoueur211== 'BJT')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$blajauneA8=1;

}
else
echo"";
}
?>
<?php
function couleurABJ9 ($joueur, $bdcomite, $equipeA)
{
global $blajauneA9;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence FROM $bdcomite WHERE nom='$joueur' and (type_licence='BJ' or type_licence='BJT') and club='$equipeA'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	}
if ($type_licencejoueur211=='BJ' or $type_licencejoueur211== 'BJT' )
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$blajauneA9=1;

}
else
echo"";
}
?>
<?php
function couleurABJ10 ($joueur, $bdcomite, $equipeA)
{
global $blajauneA10;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and (type_licence='BJ' or type_licence='BJT') and club='$equipeA'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	
	}
if ($type_licencejoueur211=='BJ' or $type_licencejoueur211== 'BJT')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$blajauneA10=1;

}
else
echo"";
}
?>
<?php
function couleurABJ11 ($joueur, $bdcomite, $equipeA)
{
global $blajauneA11;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and (type_licence='BJ' or type_licence='BJT') and club='$equipeA'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence'];  
	}
if ($type_licencejoueur211=='BJ' or $type_licencejoueur211== 'BJT')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$blajauneA11=1;

}
else
echo"";
}
?>
<?php
function couleurABJ12 ($joueur, $bdcomite, $equipeA)
{
global $blajauneA12;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and (type_licence='BJ' or type_licence='BJT') and club='$equipeA'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	
	}
if ($type_licencejoueur211=='BJ' or $type_licencejoueur211== 'BJT' )
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$blajauneA12=1;

}
else
echo"";
}
?>
<?php
function couleurABJ13 ($joueur, $bdcomite, $equipeA)
{
global $blajauneA13;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and (type_licence='BJ' or type_licence='BJT') and club='$equipeA'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	}
if ($type_licencejoueur211=='BJ' or $type_licencejoueur211== 'BJT')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$blajauneA13=1;

}
else
echo"";
}
?>
<?php
function couleurABJ14 ($joueur, $bdcomite, $equipeA)
{
global $blajauneA14;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and (type_licence='BJ' or type_licence='BJT') and club='$equipeA'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	 
	}
if ($type_licencejoueur211=='BJ' or $type_licencejoueur211== 'BJT')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$blajauneA14=1;

}
else
echo"";
}
?>
<?php
function couleurABJ15 ($joueur, $bdcomite, $equipeA)
{
global $blajauneA15;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and (type_licence='BJ' or type_licence='BJT') and club='$equipeA'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	 
	}
if ($type_licencejoueur211=='BJ' or $type_licencejoueur211== 'BJT')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$blajauneA15=1;

}
else
echo"";
}
?>
<?php
function couleurABJ16 ($joueur, $bdcomite, $equipeA)
{
global $blajauneA16;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and (type_licence='BJ' or type_licence='BJT') and club='$equipeA'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	
	}
if ($type_licencejoueur211=='BJ' or $type_licencejoueur211== 'BJT' )
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$blajauneA16=1;

}
else
echo"";
}
?>
<?php
function couleurABJ17 ($joueur, $bdcomite, $equipeA)
{
global $blajauneA17;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence FROM $bdcomite WHERE nom='$joueur' and (type_licence='BJ' or type_licence='BJT') and club='$equipeA'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 

	}
if ($type_licencejoueur211=='BJ' or $type_licencejoueur211== 'BJT' )
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$blajauneA17=1;

}
else
echo"";
}
?>
<?php
function couleurABJ18 ($joueur, $bdcomite, $equipeA)
{
global $blajauneA18;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and (type_licence='BJ' or type_licence='BJT') and club='$equipeA'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	 
	}
if ($type_licencejoueur211=='BJ' or $type_licencejoueur211== 'BJT')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$blajauneA18=1;

}
else
echo"";
}
?>
<?php
function couleurABJ19 ($joueur, $bdcomite, $equipeA)
{
global $blajauneA19;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and (type_licence='BJ' or type_licence='BJT') and club='$equipeA'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 

	}
if ($type_licencejoueur211=='BJ' or $type_licencejoueur211== 'BJT' )
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$blajauneA19=1;

}
else
echo"";
}
?>
<?php
function couleurABJ20 ($joueur, $bdcomite, $equipeA)
{
global $blajauneA20;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence FROM $bdcomite WHERE nom='$joueur' and (type_licence='BJ' or type_licence='BJT') and club='$equipeA'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 

	}
if ($type_licencejoueur211=='BJ' or $type_licencejoueur211== 'BJT')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$blajauneA20=1;

}
else
echo"";
}
?>
<?php
function couleurABJ21 ($joueur, $bdcomite, $equipeA)
{
global $blajauneA21;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence FROM $bdcomite WHERE nom='$joueur' and (type_licence='BJ' or type_licence='BJT') and club='$equipeA'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	
	}
if ($type_licencejoueur211=='BJ' or $type_licencejoueur211== 'BJT' )
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$blajauneA21=1;

}
else
echo"";
}
?>
<?php
function couleurABJ22 ($joueur, $bdcomite, $equipeA)
{
global $blajauneA22;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence FROM $bdcomite WHERE nom='$joueur' and (type_licence='BJ' or type_licence='BJT') and club='$equipeA'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	
	}
if ($type_licencejoueur211=='BJ' or $type_licencejoueur211== 'BJT')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$blajauneA22=1;

}
else
echo"";
}
?>
<?php
function couleurABJ23 ($joueur, $bdcomite, $equipeA)
{
global $blajauneA23;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence FROM $bdcomite WHERE nom='$joueur' and (type_licence='BJ' or type_licence='BJT') and club='$equipeA'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	}
if ($type_licencejoueur211=='BJ' or $type_licencejoueur211== 'BJT')
	{
	{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
	$blajauneA23=1;
	
	}
else
	{
	echo "";
	}	
}
?>

<?php
function couleurAB1 ($joueur, $bdcomite, $equipeA)
{
global $blancheA1;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence FROM $bdcomite WHERE nom='$joueur' and type_licence='B' and club='$equipeA'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	
	}
if ($type_licencejoueur211=='B' )
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$blancheA1=1;

}
else
echo"";
}
?>
<?php
function couleurAB2 ($joueur, $bdcomite, $equipeA)
{
global $blancheA2;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence FROM $bdcomite WHERE nom='$joueur' and type_licence='B' and club='$equipeA'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	 
	}
if ($type_licencejoueur211=='B')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$blancheA2=1;

}
else
echo"";
}
?>
<?php
function couleurAB3 ($joueur, $bdcomite, $equipeA)
{
global $blancheA3;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence FROM $bdcomite WHERE nom='$joueur' and type_licence='B' and club='$equipeA'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	
	}
if ($type_licencejoueur211=='B')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$blancheA3=1;

}
else
echo"";
}
?>
<?php
function couleurAB4 ($joueur, $bdcomite, $equipeA)
{
global $blancheA4;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence FROM $bdcomite WHERE nom='$joueur' and type_licence='B' and club='$equipeA'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	
	}
if ($type_licencejoueur211=='B')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$blancheA4=1;

}
else
echo"";
}
?>
<?php
function couleurAB5 ($joueur, $bdcomite, $equipeA)
{
global $blancheA5;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence FROM $bdcomite WHERE nom='$joueur' and type_licence='B' and club='$equipeA'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	
	}
if ($type_licencejoueur211=='B')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$blancheA5=1;

}
else
echo"";
}
?>
<?php
function couleurAB6 ($joueur, $bdcomite, $equipeA)
{
global $blancheA6;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and type_licence='B' and club='$equipeA'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	
	}
if ($type_licencejoueur211=='B')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$blancheA6=1;

}
else
echo"";
}
?>
<?php
function couleurAB7 ($joueur, $bdcomite, $equipeA)
{
global $blancheA7;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence FROM $bdcomite WHERE nom='$joueur' and type_licence='B' and club='$equipeA'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	
	}
if ($type_licencejoueur211=='B')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$blancheA7=1;

}
else
echo"";
}
?>
<?php
function couleurAB8 ($joueur, $bdcomite, $equipeA)
{
global $blancheA8;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence FROM $bdcomite WHERE nom='$joueur' and type_licence='B' and club='$equipeA'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	
	}
if ($type_licencejoueur211=='B')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$blancheA8=1;

}
else
echo"";
}
?>
<?php
function couleurAB9 ($joueur, $bdcomite, $equipeA)
{
global $blancheA9;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence FROM $bdcomite WHERE nom='$joueur' and type_licence='B' and club='$equipeA'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	
	}
if ($type_licencejoueur211=='B' )
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$blancheA9=1;

}
else
echo"";
}
?>
<?php
function couleurAB10 ($joueur, $bdcomite, $equipeA)
{
global $blancheA10;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence FROM $bdcomite WHERE nom='$joueur' and type_licence='B' and club='$equipeA'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	
	}
if ($type_licencejoueur211=='B' )
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$blancheA10=1;

}
else
echo"";
}
?>
<?php
function couleurAB11 ($joueur, $bdcomite, $equipeA)
{
global $blancheA11;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence FROM $bdcomite WHERE nom='$joueur' and type_licence='B' and club='$equipeA'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	 
	}
if ($type_licencejoueur211=='B' )
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$blancheA11=1;

}
else
echo"";
}
?>
<?php
function couleurAB12 ($joueur, $bdcomite, $equipeA)
{
global $blancheA12;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence  FROM $bdcomite WHERE nom='$joueur' and type_licence='B' and club='$equipeA'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	 
	}
if ($type_licencejoueur211=='B' )
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$blancheA12=1;

}
else
echo"";
}
?>
<?php
function couleurAB13 ($joueur, $bdcomite, $equipeA)
{
global $blancheA13;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence FROM $bdcomite WHERE nom='$joueur' and type_licence='B' and club='$equipeA'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	 
	}
if ($type_licencejoueur211=='B')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$blancheA13=1;
}
else
echo"";
}
?>
<?php
function couleurAB14 ($joueur, $bdcomite, $equipeA)
{
global $blancheA14;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence FROM $bdcomite WHERE nom='$joueur' and type_licence='B' and club='$equipeA'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
		}
if ($type_licencejoueur211=='B')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$blancheA14=1;

}
else
echo"";
}
?>
<?php
function couleurAB15 ($joueur, $bdcomite, $equipeA)
{
global $blancheA15;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and type_licence='B' and club='$equipeA'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	
	}
if ($type_licencejoueur211=='B')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$blancheA15=1;

}
else
echo"";
}
?>
<?php
function couleurAB16 ($joueur, $bdcomite, $equipeA)
{
global $blancheA16;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and type_licence='B' and club='$equipeA'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	}
if ($type_licencejoueur211=='B' )
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$blancheA16=1;

}
else
echo"";
}
?>
<?php
function couleurAB17 ($joueur, $bdcomite, $equipeA)
{
global $blancheA17;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and type_licence='B' and club='$equipeA'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	$photo2=$donnees['photo']; 
	}
if ($type_licencejoueur211=='B')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$blancheA17=1;
}
else
echo"";
}
?>
<?php
function couleurAB18 ($joueur, $bdcomite, $equipeA)
{
global $blancheA18;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and type_licence='B' and club='$equipeA'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	}
if ($type_licencejoueur211=='B')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$blancheA18=1;
}
else
echo"";
}
?>
<?php
function couleurAB19 ($joueur, $bdcomite, $equipeA)
{
global $blancheA19;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and type_licence='B' and club='$equipeA'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	}
if ($type_licencejoueur211=='B')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$blancheA19=1;
}
else
echo"";
}
?>
<?php
function couleurAB20 ($joueur, $bdcomite, $equipeA)
{
global $blancheA20;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and type_licence='B' and club='$equipeA'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	}
if ($type_licencejoueur211=='B')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$blancheA20=1;
}
else
echo"";
}
?>
<?php
function couleurAB21 ($joueur, $bdcomite, $equipeA)
{
global $blancheA21;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and type_licence='B' and club='$equipeA'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	 
	}
if ($type_licencejoueur211=='B' )
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$blancheA21=1;

}
else
echo"";
}
?>
<?php
function couleurAB22 ($joueur, $bdcomite, $equipeA)
{
global $blancheA22;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and type_licence='B' and club='$equipeA'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	 
	}
if ($type_licencejoueur211=='B' )
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$blancheA22=1;
}
else
echo"";
}
?>
<?php
function couleurAB23 ($joueur, $bdcomite, $equipeA)
{
global $blancheA23;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and type_licence='B' and club='$equipeA'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	}
if ($type_licencejoueur211=='B')
	{
	{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
	$blancheA23=1;
	}
else
	{
	echo "";
	}	
}
?>
<?php
function couleurAT1 ($joueur, $bdcomite, $equipeA)
{
global $tutoratA1;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and (type_licence='OT' or type_licence='BJT') and club='$equipeA'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	}
if ($type_licencejoueur211=='OT' or $type_licencejoueur211== 'BJT')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$tutoratA1=1;

}
else
echo"";
}
?>
<?php
function couleurAT2 ($joueur, $bdcomite, $equipeA)
{
global $tutoratA2;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and (type_licence='OT' or type_licence='BJT') and club='$equipeA'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	}
if ($type_licencejoueur211=='OT' or $type_licencejoueur211== 'BJT' )
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$tutoratA2=1;
}
else
echo"";
}
?>
<?php
function couleurAT3 ($joueur, $bdcomite, $equipeA)
{
global $tutoratA3;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and (type_licence='OT' or type_licence='BJT') and club='$equipeA'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	 }
if ($type_licencejoueur211=='OT' or $type_licencejoueur211== 'BJT')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$tutoratA3=1;

}
else
echo"";
}
?>
<?php
function couleurAT4 ($joueur, $bdcomite, $equipeA)
{
global $tutoratA4;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and (type_licence='OT' or type_licence='BJT') and club='$equipeA'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	}
if ($type_licencejoueur211=='OT' or $type_licencejoueur211== 'BJT')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$tutoratA4=1;

}
else
echo"";
}
?>
<?php
function couleurAT5 ($joueur, $bdcomite, $equipeA)
{
global $tutoratA5;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and (type_licence='OT' or type_licence='BJT') and club='$equipeA'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	}
if ($type_licencejoueur211=='OT' or $type_licencejoueur211== 'BJT')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$tutoratA5=1;

}
else
echo"";
}
?>
<?php
function couleurAT6 ($joueur, $bdcomite, $equipeA)
{
global $tutoratA6;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and (type_licence='OT' or type_licence='BJT') and club='$equipeA'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	
	}
if ($type_licencejoueur211=='OT' or $type_licencejoueur211== 'BJT')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$tutoratA6=1;

}
else
echo"";
}
?>
<?php
function couleurAT7 ($joueur, $bdcomite, $equipeA)
{
global $tutoratA7;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and (type_licence='OT' or type_licence='BJT') and club='$equipeA'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	}
if ($type_licencejoueur211=='OT' or $type_licencejoueur211== 'BJT')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$tutoratA7=1;
}
else
echo"";
}
?>
<?php
function couleurAT8 ($joueur, $bdcomite, $equipeA)
{
global $tutoratA8;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and (type_licence='OT' or type_licence='BJT') and club='$equipeA'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	}
if ($type_licencejoueur211=='OT' or $type_licencejoueur211== 'BJT')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$tutoratA8=1;
}
else
echo"";
}
?>
<?php
function couleurAT9 ($joueur, $bdcomite, $equipeA)
{
global $tutoratA9;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and (type_licence='OT' or type_licence='BJT') and club='$equipeA'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	}
if ($type_licencejoueur211=='OT' or $type_licencejoueur211== 'BJT')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$tutoratA9=1;

}
else
echo"";
}
?>
<?php
function couleurAT10 ($joueur, $bdcomite, $equipeA)
{
global $tutoratA10;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and (type_licence='OT' or type_licence='BJT') and club='$equipeA'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	 }
if ($type_licencejoueur211=='OT' or $type_licencejoueur211== 'BJT')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$tutoratA10=1;
}
else
echo"";
}
?>
<?php
function couleurAT11 ($joueur, $bdcomite, $equipeA)
{
global $tutoratA11;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and (type_licence='OT' or type_licence='BJT') and club='$equipeA'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	 }
if ($type_licencejoueur211=='OT' or $type_licencejoueur211== 'BJT')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$tutoratA11=1;
}
else
echo"";
}
?>
<?php
function couleurAT12 ($joueur, $bdcomite, $equipeA)
{
global $tutoratA12;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and (type_licence='OT' or type_licence='BJT') and club='$equipeA'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	}
if ($type_licencejoueur211=='OT' or $type_licencejoueur211== 'BJT' )
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$tutoratA12=1;
}
else
echo"";
}
?>
<?php
function couleurAT13 ($joueur, $bdcomite, $equipeA)
{
global $tutoratA13;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and (type_licence='OT' or type_licence='BJT') and club='$equipeA'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	}
if ($type_licencejoueur211=='OT' or $type_licencejoueur211== 'BJT')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$tutoratA13=1;
}
else
echo"";
}
?>
<?php
function couleurAT14 ($joueur, $bdcomite, $equipeA)
{
global $tutoratA14;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and (type_licence='OT' or type_licence='BJT') and club='$equipeA'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	}
if ($type_licencejoueur211=='OT' or $type_licencejoueur211== 'BJT')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$tutoratA14=1;
}
else
echo"";
}
?>
<?php
function couleurAT15 ($joueur, $bdcomite, $equipeA)
{
global $tutoratA15;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and (type_licence='OT' or type_licence='BJT') and club='$equipeA'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	}
if ($type_licencejoueur211=='OT' or $type_licencejoueur211== 'BJT' )
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$tutoratA15=1;
}
else
echo"";
}
?>
<?php
function couleurAT16 ($joueur, $bdcomite, $equipeA)
{
global $tutoratA16;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and (type_licence='OT' or type_licence='BJT') and club='$equipeA'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	 }
if ($type_licencejoueur211=='OT' or $type_licencejoueur211== 'BJT')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$tutoratA16=1;

}
else
echo"";
}
?>
<?php
function couleurAT17 ($joueur, $bdcomite, $equipeA)
{
global $tutoratA17;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and (type_licence='OT' or type_licence='BJT') and club='$equipeA'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	}
if ($type_licencejoueur211=='OT' or $type_licencejoueur211== 'BJT')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$tutoratA17=1;
}
else
echo"";
}
?>
<?php
function couleurAT18 ($joueur, $bdcomite, $equipeA)
{
global $tutoratA18;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and (type_licence='OT' or type_licence='BJT') and club='$equipeA'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	
	}
if ($type_licencejoueur211=='OT' or $type_licencejoueur211== 'BJT')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$tutoratA18=1;

}
else
echo"";
}
?>
<?php
function couleurAT19 ($joueur, $bdcomite, $equipeA)
{
global $tutoratA19;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and (type_licence='OT' or type_licence='BJT') and club='$equipeA'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	 
	}
if ($type_licencejoueur211=='OT' or $type_licencejoueur211== 'BJT')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$tutoratA19=1;

}
else
echo"";
}
?>
<?php
function couleurAT20 ($joueur, $bdcomite, $equipeA)
{
global $tutoratA20;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and (type_licence='OT' or type_licence='BJT') and club='$equipeA'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	 
	}
if ($type_licencejoueur211=='OT' or $type_licencejoueur211== 'BJT' )
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$tutoratA20=1;

}
else
echo"";
}
?>
<?php
function couleurAT21 ($joueur, $bdcomite, $equipeA)
{
global $tutoratA21;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and (type_licence='OT' or type_licence='BJT') and club='$equipeA'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	 
	}
if ($type_licencejoueur211=='OT' or $type_licencejoueur211== 'BJT' )
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$tutoratA21=1;
;
}
else
echo"";
}
?>
<?php
function couleurAT22 ($joueur, $bdcomite, $equipeA)
{
global $tutoratA22;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and (type_licence='OT' or type_licence='BJT') and club='$equipeA'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	
	}
if ($type_licencejoueur211=='OT' or $type_licencejoueur211== 'BJT')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$tutoratA22=1;
}
else
echo"";
}
?>
<?php
function couleurAT23 ($joueur, $bdcomite, $equipeA)
{
global $tutoratA23;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence FROM $bdcomite WHERE nom='$joueur' and club='$equipeA'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	}
if ($type_licencejoueur211=='OT' or $type_licencejoueur211== 'BJT')
	{
	{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
	$tutoratA23=1;
	
	}
else
	{
	echo "";
	}	
}
?>


</body>
</html>
