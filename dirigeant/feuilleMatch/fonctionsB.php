<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body bgcolor="#FFFFFF" text="#000000">


<?php //Numero de licence
//function licence ($joueur, $bdcomite, $equipe)
//{

//$reponse = mysql_query("SELECT nom, position_terrain, type_licence FROM $bdcomite WHERE nom='$joueur' and club='$equipe'  "); // Requête SQL
//while ($donnees = mysql_fetch_array($reponse) )
//	{ 
// 	$licencejoueur211= $donnees['position_terrain']; 
// 	}
//echo $licencejoueur211;
//}
?>



<?php


function couleurBO1 ($joueur1, $bdcomite, $equipeB)
{
global $orangeB1;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence FROM $bdcomite WHERE nom='$joueur' and (type_licence='O' or type_licence='OT') and club='$equipeB'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	
	}
if ($type_licencejoueur211=='O' or $type_licencejoueur211== 'OT')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$orangeB1=1;

}
else
echo"";
}
?>
<?php
function couleurBO2 ($joueur, $bdcomite, $equipeB)
{
global $orangeB2;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and (type_licence='O' or type_licence='OT') and club='$equipeB'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	
	}
if ($type_licencejoueur211=='O' or $type_licencejoueur211== 'OT' )
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$orangeB2=1;

}
else
echo"";
}
?>
<?php
function couleurBO3 ($joueur, $bdcomite, $equipeB)
{
global $orangeB3;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and (type_licence='O' or type_licence='OT') and club='$equipeB'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	 
	}
if ($type_licencejoueur211=='O' or $type_licencejoueur211== 'OT' )
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$orangeB3=1;

}
else
echo"";
}
?>

<?php
function couleurBO4 ($joueur, $bdcomite, $equipeB)
{
global $orangeB4;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and (type_licence='O' or type_licence='OT') and club='$equipeB'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 

	}
if ($type_licencejoueur211=='O' or $type_licencejoueur211== 'OT')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$orangeB4=1;

}
else
echo"";
}
?>
<?php
function couleurBO5 ($joueur, $bdcomite, $equipeB)
{
global $orangeB5;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and (type_licence='O' or type_licence='OT') and club='$equipeB'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	 
	}
if ($type_licencejoueur211=='O' or $type_licencejoueur211== 'OT' )
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$orangeB5=1;

}
else
echo"";
}
?>
<?php
function couleurBO6 ($joueur, $bdcomite, $equipeB)
{
global $orangeB6;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and (type_licence='O' or type_licence='OT') and club='$equipeB'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
 
	}
if ($type_licencejoueur211=='O' or $type_licencejoueur211== 'OT')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$orangeB6=1;

}
else
echo"";
}
?>
<?php
function couleurBO7 ($joueur, $bdcomite, $equipeB)
{
global $orangeB7;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and (type_licence='O' or type_licence='OT') and club='$equipeB'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 

	}
if ($type_licencejoueur211=='O' or $type_licencejoueur211== 'OT')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$orangeB7=1;

}
else
echo"";
}
?>
<?php
function couleurBO8 ($joueur, $bdcomite, $equipeB)
{
global $orangeB8;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and (type_licence='O' or type_licence='OT') and club='$equipeB'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	
	}
if ($type_licencejoueur211=='O' or $type_licencejoueur211== 'OT')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$orangeB8=1;

}
else
echo"";
}
?>
<?php
function couleurBO9 ($joueur, $bdcomite, $equipeB)
{
global $orangeB9;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and (type_licence='O' or type_licence='OT') and club='$equipeB'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
 
	}
if ($type_licencejoueur211=='O' or $type_licencejoueur211== 'OT')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$orangeB9=1;

}
else
echo"";
}
?>
<?php
function couleurBO10 ($joueur, $bdcomite, $equipeB)
{
global $orangeB10;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and (type_licence='O' or type_licence='OT') and club='$equipeB'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	$photo2=$donnees['photo']; 
	}
if ($type_licencejoueur211=='O' or $type_licencejoueur211== 'OT')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$orangeB10=1;

}
else
echo"";
}
?>
<?php
function couleurBO11 ($joueur, $bdcomite, $equipeB)
{
global $orangeB11;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and (type_licence='O' or type_licence='OT') and club='$equipeB'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 

	}
if ($type_licencejoueur211=='O' or $type_licencejoueur211== 'OT' )
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$orangeB11=1;

}
else
echo"";
}
?>
<?php
function couleurBO12 ($joueur, $bdcomite, $equipeB)
{
global $orangeB12;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and (type_licence='O' or type_licence='OT') and club='$equipeB'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	
	}
if ($type_licencejoueur211=='O' or $type_licencejoueur211== 'OT')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$orangeB12=1;

}
else
echo"";
}
?>
<?php
function couleurBO13 ($joueur, $bdcomite, $equipeB)
{
global $orangeB13;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and (type_licence='O' or type_licence='OT') and club='$equipeB'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	$photo2=$donnees['photo']; 
	}
if ($type_licencejoueur211=='O' or $type_licencejoueur211== 'OT')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$orangeB13=1;

}
else
echo"";
}
?>
<?php
function couleurBO14 ($joueur, $bdcomite, $equipeB)
{
global $orangeB14;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and (type_licence='O' or type_licence='OT') and club='$equipeB'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	 
	}
if ($type_licencejoueur211=='O' or $type_licencejoueur211== 'OT' )
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$orangeB14=1;

}
else
echo"";
}
?>
<?php
function couleurBO15 ($joueur, $bdcomite, $equipeB)
{
global $orangeB15;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and (type_licence='O' or type_licence='OT') and club='$equipeB'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 

	}
if ($type_licencejoueur211=='O' or $type_licencejoueur211== 'OT' )
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$orangeB15=1;

}
else
echo"";
}
?>
<?php
function couleurBO16 ($joueur, $bdcomite, $equipeB)
{
global $orangeB16;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence FROM $bdcomite WHERE nom='$joueur' and (type_licence='O' or type_licence='OT') and club='$equipeB'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	
	}
if ($type_licencejoueur211=='O' or $type_licencejoueur211== 'OT' )
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$orangeB16=1;

}
else
echo"";
}
?>
<?php
function couleurBO17 ($joueur, $bdcomite, $equipeB)
{
global $orangeB17;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence FROM $bdcomite WHERE nom='$joueur' and (type_licence='O' or type_licence='OT') and club='$equipeB'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
 
	}
if ($type_licencejoueur211=='O' or $type_licencejoueur211== 'OT')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$orangeB17=1;

}
else
echo"";
}
?>
<?php
function couleurBO18 ($joueur, $bdcomite, $equipeB)
{
global $orangeB18;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and (type_licence='O' or type_licence='OT') and club='$equipeB'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	$photo2=$donnees['photo']; 
	}
if ($type_licencejoueur211=='O' or $type_licencejoueur211== 'OT')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$orangeB18=1;

}
else
echo"";
}
?>
<?php
function couleurBO19 ($joueur, $bdcomite, $equipeB)
{
global $orangeB19;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and (type_licence='O' or type_licence='OT') and club='$equipeB'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	$photo2=$donnees['photo']; 
	}
if ($type_licencejoueur211=='O' or $type_licencejoueur211== 'OT')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$orangeB19=1;

}
else
echo"";
}
?>
<?php
function couleurBO20 ($joueur, $bdcomite, $equipeB)
{
global $orangeB20;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and (type_licence='O' or type_licence='OT') and club='$equipeB'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	$photo2=$donnees['photo']; 
	}
if ($type_licencejoueur211=='O' or $type_licencejoueur211== 'OT')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$orangeB20=1;

}
else
echo"";
}
?>
<?php
function couleurBO21 ($joueur, $bdcomite, $equipeB)
{
global $orangeB21;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and (type_licence='O' or type_licence='OT') and club='$equipeB'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	 
	}
if ($type_licencejoueur211=='O' or $type_licencejoueur211== 'OT')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$orangeB21=1;

}
else
echo"";
}
?>
<?php
function couleurBO22 ($joueur, $bdcomite, $equipeB)
{
global $orangeB22;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and (type_licence='O' or type_licence='OT') and club='$equipeB'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	
	}
if ($type_licencejoueur211=='O' or $type_licencejoueur211== 'OT')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$orangeB22=1;

}
else
echo"";
}
?>
<?php
function couleurBO23 ($joueur, $bdcomite, $equipeB)
{
global $orangeB23;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence FROM $bdcomite WHERE nom='$joueur' and (type_licence='O' or type_licence='OT') and club='$equipeB'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	
	}
if ($type_licencejoueur211=='O' or $type_licencejoueur211== 'OT')
	{
	{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
	$orangeB23=1;
	
	}
else
	{
	echo "";
	}	
}
?>
<?php
function couleurBBJ1 ($joueur, $bdcomite, $equipeB)
{
global $blajauneB1;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence FROM $bdcomite WHERE nom='$joueur' and (type_licence='BJ' or type_licence='BJT') and club='$equipeB'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	}
if ($type_licencejoueur211=='BJ' or $type_licencejoueur211== 'BJT')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$blajauneB1=1;

}
else
echo"";
}
?>
<?php
function couleurBBJ2 ($joueur, $bdcomite, $equipeB)
{
global $blajauneB2;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence FROM $bdcomite WHERE nom='$joueur' and (type_licence='BJ' or type_licence='BJT') and club='$equipeB'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	
	}
if ($type_licencejoueur211=='BJ' or $type_licencejoueur211== 'BJT' )
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$blajauneB2=1;
}
else
echo"";
}
?>
<?php
function couleurBBJ3 ($joueur, $bdcomite, $equipeB)
{
global $blajauneB3;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence FROM $bdcomite WHERE nom='$joueur' and (type_licence='BJ' or type_licence='BJT') and club='$equipeB'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	 
	}
if ($type_licencejoueur211=='BJ' or $type_licencejoueur211== 'BJT')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$blajauneB3=1;

}
else
echo"";
}
?>
<?php
function couleurBBJ4 ($joueur, $bdcomite, $equipeB)
{
global $blajauneB4;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and (type_licence='BJ' or type_licence='BJT') and club='$equipeB'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	
	}
if ($type_licencejoueur211=='BJ' or $type_licencejoueur211== 'BJT')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$blajauneB4=1;

}
else
echo"";
}
?>
<?php
function couleurBBJ5 ($joueur, $bdcomite, $equipeB)
{
global $blajauneB5;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence FROM $bdcomite WHERE nom='$joueur' and (type_licence='BJ' or type_licence='BJT') and club='$equipeB'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	}
if ($type_licencejoueur211=='BJ' or $type_licencejoueur211== 'BJT')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$blajauneB5=1;

}
else
echo"";
}
?>
<?php
function couleurBBJ6 ($joueur, $bdcomite, $equipeB)
{
global $blajauneB6;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence FROM $bdcomite WHERE nom='$joueur' and (type_licence='BJ' or type_licence='BJT') and club='$equipeB'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence'];  
	}
if ($type_licencejoueur211=='BJ' or $type_licencejoueur211== 'BJT')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$blajauneB6=1;

}
else
echo"";
}
?>
<?php
function couleurBBJ7 ($joueur, $bdcomite, $equipeB)
{
global $blajauneB7;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and (type_licence='BJ' or type_licence='BJT') and club='$equipeB'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence'];  
	}
if ($type_licencejoueur211=='BJ' or $type_licencejoueur211== 'BJT')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$blajauneB7=1;

}
else
echo"";
}
?>
<?php
function couleurBBJ8 ($joueur, $bdcomite, $equipeB)
{
global $blajauneB8;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence FROM $bdcomite WHERE nom='$joueur' and (type_licence='BJ' or type_licence='BJT') and club='$equipeB'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence'];  
	}
if ($type_licencejoueur211=='BJ' or $type_licencejoueur211== 'BJT')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$blajauneB8=1;

}
else
echo"";
}
?>
<?php
function couleurBBJ9 ($joueur, $bdcomite, $equipeB)
{
global $blajauneB9;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence FROM $bdcomite WHERE nom='$joueur' and (type_licence='BJ' or type_licence='BJT') and club='$equipeB'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	}
if ($type_licencejoueur211=='BJ' or $type_licencejoueur211== 'BJT' )
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$blajauneB9=1;

}
else
echo"";
}
?>
<?php
function couleurBBJ10 ($joueur, $bdcomite, $equipeB)
{
global $blajauneB10;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and (type_licence='BJ' or type_licence='BJT') and club='$equipeB'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	
	}
if ($type_licencejoueur211=='BJ' or $type_licencejoueur211== 'BJT')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$blajauneB10=1;

}
else
echo"";
}
?>
<?php
function couleurBBJ11 ($joueur, $bdcomite, $equipeB)
{
global $blajauneB11;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and (type_licence='BJ' or type_licence='BJT') and club='$equipeB'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence'];  
	}
if ($type_licencejoueur211=='BJ' or $type_licencejoueur211== 'BJT')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$blajauneB11=1;

}
else
echo"";
}
?>
<?php
function couleurBBJ12 ($joueur, $bdcomite, $equipeB)
{
global $blajauneB12;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and (type_licence='BJ' or type_licence='BJT') and club='$equipeB'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	
	}
if ($type_licencejoueur211=='BJ' or $type_licencejoueur211== 'BJT' )
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$blajauneB12=1;

}
else
echo"";
}
?>
<?php
function couleurBBJ13 ($joueur, $bdcomite, $equipeB)
{
global $blajauneB13;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and (type_licence='BJ' or type_licence='BJT') and club='$equipeB'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	}
if ($type_licencejoueur211=='BJ' or $type_licencejoueur211== 'BJT')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$blajauneB13=1;

}
else
echo"";
}
?>
<?php
function couleurBBJ14 ($joueur, $bdcomite, $equipeB)
{
global $blajauneB14;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and (type_licence='BJ' or type_licence='BJT') and club='$equipeB'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	 
	}
if ($type_licencejoueur211=='BJ' or $type_licencejoueur211== 'BJT')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$blajauneB14=1;

}
else
echo"";
}
?>
<?php
function couleurBBJ15 ($joueur, $bdcomite, $equipeB)
{
global $blajauneB15;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and (type_licence='BJ' or type_licence='BJT') and club='$equipeB'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	 
	}
if ($type_licencejoueur211=='BJ' or $type_licencejoueur211== 'BJT')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$blajauneB15=1;

}
else
echo"";
}
?>
<?php
function couleurBBJ16 ($joueur, $bdcomite, $equipeB)
{
global $blajauneB16;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and (type_licence='BJ' or type_licence='BJT') and club='$equipeB'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	
	}
if ($type_licencejoueur211=='BJ' or $type_licencejoueur211== 'BJT' )
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$blajauneB16=1;

}
else
echo"";
}
?>
<?php
function couleurBBJ17 ($joueur, $bdcomite, $equipeB)
{
global $blajauneB17;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence FROM $bdcomite WHERE nom='$joueur' and (type_licence='BJ' or type_licence='BJT') and club='$equipeB'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 

	}
if ($type_licencejoueur211=='BJ' or $type_licencejoueur211== 'BJT' )
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$blajauneB17=1;

}
else
echo"";
}
?>
<?php
function couleurBBJ18 ($joueur, $bdcomite, $equipeB)
{
global $blajauneB18;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and (type_licence='BJ' or type_licence='BJT') and club='$equipeB'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	 
	}
if ($type_licencejoueur211=='BJ' or $type_licencejoueur211== 'BJT')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$blajauneB18=1;

}
else
echo"";
}
?>
<?php
function couleurBBJ19 ($joueur, $bdcomite, $equipeB)
{
global $blajauneB19;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and (type_licence='BJ' or type_licence='BJT') and club='$equipeB'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 

	}
if ($type_licencejoueur211=='BJ' or $type_licencejoueur211== 'BJT' )
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$blajauneB19=1;

}
else
echo"";
}
?>
<?php
function couleurBBJ20 ($joueur, $bdcomite, $equipeB)
{
global $blajauneB20;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence FROM $bdcomite WHERE nom='$joueur' and (type_licence='BJ' or type_licence='BJT') and club='$equipeB'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 

	}
if ($type_licencejoueur211=='BJ' or $type_licencejoueur211== 'BJT')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$blajauneB20=1;

}
else
echo"";
}
?>
<?php
function couleurBBJ21 ($joueur, $bdcomite, $equipeB)
{
global $blajauneB21;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence FROM $bdcomite WHERE nom='$joueur' and (type_licence='BJ' or type_licence='BJT') and club='$equipeB'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	
	}
if ($type_licencejoueur211=='BJ' or $type_licencejoueur211== 'BJT' )
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$blajauneB21=1;

}
else
echo"";
}
?>
<?php
function couleurBBJ22 ($joueur, $bdcomite, $equipeB)
{
global $blajauneB22;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence FROM $bdcomite WHERE nom='$joueur' and (type_licence='BJ' or type_licence='BJT') and club='$equipeB'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	
	}
if ($type_licencejoueur211=='BJ' or $type_licencejoueur211== 'BJT')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$blajauneB22=1;

}
else
echo"";
}
?>
<?php
function couleurBBJ23 ($joueur, $bdcomite, $equipeB)
{
global $blajauneB23;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence FROM $bdcomite WHERE nom='$joueur'  and (type_licence='BJ' or type_licence='BJT') and club='$equipeB'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	}
if ($type_licencejoueur211=='BJ' or $type_licencejoueur211== 'BJT')
	{
	{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
	$blajauneB23=1;
	
	}
else
	{
	echo "";
	}	
}
?>

<?php
function couleurBB1 ($joueur, $bdcomite, $equipeB)
{
global $blancheB1;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence FROM $bdcomite WHERE nom='$joueur' and type_licence='B' and club='$equipeB'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	
	}
if ($type_licencejoueur211=='B' )
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$blancheB1=1;

}
else
echo"";
}
?>
<?php
function couleurBB2 ($joueur, $bdcomite, $equipeB)
{
global $blancheB2;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence FROM $bdcomite WHERE nom='$joueur' and type_licence='B' and club='$equipeB'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	 
	}
if ($type_licencejoueur211=='B')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$blancheB2=1;

}
else
echo"";
}
?>
<?php
function couleurBB3 ($joueur, $bdcomite, $equipeB)
{
global $blancheB3;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence FROM $bdcomite WHERE nom='$joueur' and type_licence='B' and club='$equipeB'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	
	}
if ($type_licencejoueur211=='B')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$blancheB3=1;

}
else
echo"";
}
?>
<?php
function couleurBB4 ($joueur, $bdcomite, $equipeB)
{
global $blancheB4;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence FROM $bdcomite WHERE nom='$joueur' and type_licence='B' and club='$equipeB'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	
	}
if ($type_licencejoueur211=='B')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$blancheB4=1;

}
else
echo"";
}
?>
<?php
function couleurBB5 ($joueur, $bdcomite, $equipeB)
{
global $blancheB5;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence FROM $bdcomite WHERE nom='$joueur' and type_licence='B' and club='$equipeB'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	
	}
if ($type_licencejoueur211=='B')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$blancheB5=1;

}
else
echo"";
}
?>
<?php
function couleurBB6 ($joueur, $bdcomite, $equipeB)
{
global $blancheB6;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and type_licence='B' and club='$equipeB'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	
	}
if ($type_licencejoueur211=='B')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$blancheB6=1;

}
else
echo"";
}
?>
<?php
function couleurBB7 ($joueur, $bdcomite, $equipeB)
{
global $blancheB7;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence FROM $bdcomite WHERE nom='$joueur' and type_licence='B' and club='$equipeB'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	
	}
if ($type_licencejoueur211=='B')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$blancheB7=1;

}
else
echo"";
}
?>
<?php
function couleurBB8 ($joueur, $bdcomite, $equipeB)
{
global $blancheB8;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence FROM $bdcomite WHERE nom='$joueur' and type_licence='B' and club='$equipeB'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	
	}
if ($type_licencejoueur211=='B')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$blancheB8=1;

}
else
echo"";
}
?>
<?php
function couleurBB9 ($joueur, $bdcomite, $equipeB)
{
global $blancheB9;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence FROM $bdcomite WHERE nom='$joueur' and type_licence='B' and club='$equipeB'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	
	}
if ($type_licencejoueur211=='B' )
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$blancheB9=1;

}
else
echo"";
}
?>
<?php
function couleurBB10 ($joueur, $bdcomite, $equipeB)
{
global $blancheB10;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence FROM $bdcomite WHERE nom='$joueur' and type_licence='B' and club='$equipeB'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	
	}
if ($type_licencejoueur211=='B' )
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$blancheB10=1;

}
else
echo"";
}
?>
<?php
function couleurBB11 ($joueur, $bdcomite, $equipeB)
{
global $blancheB11;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence FROM $bdcomite WHERE nom='$joueur' and type_licence='B' and club='$equipeB'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	 
	}
if ($type_licencejoueur211=='B' )
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$blancheB11=1;

}
else
echo"";
}
?>
<?php
function couleurBB12 ($joueur, $bdcomite, $equipeB)
{
global $blancheB12;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence  FROM $bdcomite WHERE nom='$joueur' and type_licence='B' and club='$equipeB'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	 
	}
if ($type_licencejoueur211=='B' )
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$blancheB12=1;

}
else
echo"";
}
?>
<?php
function couleurBB13 ($joueur, $bdcomite, $equipeB)
{
global $blancheB13;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence FROM $bdcomite WHERE nom='$joueur' and type_licence='B' and club='$equipeB'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	 
	}
if ($type_licencejoueur211=='B')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$blancheB13=1;
}
else
echo"";
}
?>
<?php
function couleurBB14 ($joueur, $bdcomite, $equipeB)
{
global $blancheB14;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence FROM $bdcomite WHERE nom='$joueur' and type_licence='B' and club='$equipeB'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
		}
if ($type_licencejoueur211=='B')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$blancheB14=1;

}
else
echo"";
}
?>
<?php
function couleurBB15 ($joueur, $bdcomite, $equipeB)
{
global $blancheB15;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and type_licence='B' and club='$equipeB'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	
	}
if ($type_licencejoueur211=='B')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$blancheB15=1;

}
else
echo"";
}
?>
<?php
function couleurBB16 ($joueur, $bdcomite, $equipeB)
{
global $blancheB16;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and type_licence='B' and club='$equipeB'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	}
if ($type_licencejoueur211=='B' )
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$blancheB16=1;

}
else
echo"";
}
?>
<?php
function couleurBB17 ($joueur, $bdcomite, $equipeB)
{
global $blancheB17;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and type_licence='B' and club='$equipeB'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	$photo2=$donnees['photo']; 
	}
if ($type_licencejoueur211=='B')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$blancheB17=1;
}
else
echo"";
}
?>
<?php
function couleurBB18 ($joueur, $bdcomite, $equipeB)
{
global $blancheB18;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and type_licence='B' and club='$equipeB'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	}
if ($type_licencejoueur211=='B')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$blancheB18=1;
}
else
echo"";
}
?>
<?php
function couleurBB19 ($joueur, $bdcomite, $equipeB)
{
global $blancheB19;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and type_licence='B' and club='$equipeB'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	}
if ($type_licencejoueur211=='B')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$blancheB19=1;
}
else
echo"";
}
?>
<?php
function couleurBB20 ($joueur, $bdcomite, $equipeB)
{
global $blancheB20;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and type_licence='B' and club='$equipeB'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	}
if ($type_licencejoueur211=='B')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$blancheB20=1;
}
else
echo"";
}
?>
<?php
function couleurBB21 ($joueur, $bdcomite, $equipeB)
{
global $blancheB21;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and type_licence='B' and club='$equipeB'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	 
	}
if ($type_licencejoueur211=='B' )
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$blancheB21=1;

}
else
echo"";
}
?>
<?php
function couleurBB22 ($joueur, $bdcomite, $equipeB)
{
global $blancheB22;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and type_licence='B' and club='$equipeB'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	 
	}
if ($type_licencejoueur211=='B' )
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$blancheB22=1;
}
else
echo"";
}
?>
<?php
function couleurBB23 ($joueur, $bdcomite, $equipeB)
{
global $blancheB23;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and type_licence='B' and club='$equipeB'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	}
if ($type_licencejoueur211=='B')
	{
	{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
	$blancheB23=1;
	}
else
	{
	echo "";
	}	
}
?>
<?php
function couleurBT1 ($joueur, $bdcomite, $equipeB)
{
global $tutoratB1;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and (type_licence='OT' or type_licence='BJT') and club='$equipeB'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	}
if ($type_licencejoueur211=='OT' or $type_licencejoueur211== 'BJT')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$tutoratB1=1;

}
else
echo"";
}
?>
<?php
function couleurBT2 ($joueur, $bdcomite, $equipeB)
{
global $tutoratB2;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and (type_licence='OT' or type_licence='BJT') and club='$equipeB'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	}
if ($type_licencejoueur211=='OT' or $type_licencejoueur211== 'BJT' )
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$tutoratB2=1;
}
else
echo"";
}
?>
<?php
function couleurBT3 ($joueur, $bdcomite, $equipeB)
{
global $tutoratB3;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and (type_licence='OT' or type_licence='BJT') and club='$equipeB'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	 }
if ($type_licencejoueur211=='OT' or $type_licencejoueur211== 'BJT')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$tutoratB3=1;

}
else
echo"";
}
?>
<?php
function couleurBT4 ($joueur, $bdcomite, $equipeB)
{
global $tutoratB4;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and (type_licence='OT' or type_licence='BJT') and club='$equipeB'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	}
if ($type_licencejoueur211=='OT' or $type_licencejoueur211== 'BJT')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$tutoratB4=1;

}
else
echo"";
}
?>
<?php
function couleurBT5 ($joueur, $bdcomite, $equipeB)
{
global $tutoratB5;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and (type_licence='OT' or type_licence='BJT') and club='$equipeB'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	}
if ($type_licencejoueur211=='OT' or $type_licencejoueur211== 'BJT')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$tutoratB5=1;

}
else
echo"";
}
?>
<?php
function couleurBT6 ($joueur, $bdcomite, $equipeB)
{
global $tutoratB6;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and (type_licence='OT' or type_licence='BJT') and club='$equipeB'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	
	}
if ($type_licencejoueur211=='OT' or $type_licencejoueur211== 'BJT')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$tutoratB6=1;

}
else
echo"";
}
?>
<?php
function couleurBT7 ($joueur, $bdcomite, $equipeB)
{
global $tutoratB7;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and (type_licence='OT' or type_licence='BJT') and club='$equipeB'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	}
if ($type_licencejoueur211=='OT' or $type_licencejoueur211== 'BJT')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$tutoratB7=1;
}
else
echo"";
}
?>
<?php
function couleurBT8 ($joueur, $bdcomite, $equipeB)
{
global $tutoratB8;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and (type_licence='OT' or type_licence='BJT') and club='$equipeB'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	}
if ($type_licencejoueur211=='OT' or $type_licencejoueur211== 'BJT')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$tutoratB8=1;
}
else
echo"";
}
?>
<?php
function couleurBT9 ($joueur, $bdcomite, $equipeB)
{
global $tutoratB9;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and (type_licence='OT' or type_licence='BJT') and club='$equipeB'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	}
if ($type_licencejoueur211=='OT' or $type_licencejoueur211== 'BJT')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$tutoratB9=1;

}
else
echo"";
}
?>
<?php
function couleurBT10 ($joueur, $bdcomite, $equipeB)
{
global $tutoratB10;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and (type_licence='OT' or type_licence='BJT') and club='$equipeB'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	 }
if ($type_licencejoueur211=='OT' or $type_licencejoueur211== 'BJT')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$tutoratB10=1;
}
else
echo"";
}
?>
<?php
function couleurBT11 ($joueur, $bdcomite, $equipeB)
{
global $tutoratB11;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and (type_licence='OT' or type_licence='BJT') and club='$equipeB'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	 }
if ($type_licencejoueur211=='OT' or $type_licencejoueur211== 'BJT')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$tutoratB11=1;
}
else
echo"";
}
?>
<?php
function couleurBT12 ($joueur, $bdcomite, $equipeB)
{
global $tutoratB12;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and (type_licence='OT' or type_licence='BJT') and club='$equipeB'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	}
if ($type_licencejoueur211=='OT' or $type_licencejoueur211== 'BJT' )
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$tutoratB12=1;
}
else
echo"";
}
?>
<?php
function couleurBT13 ($joueur, $bdcomite, $equipeB)
{
global $tutoratB13;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and (type_licence='OT' or type_licence='BJT') and club='$equipeB'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	}
if ($type_licencejoueur211=='OT' or $type_licencejoueur211== 'BJT')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$tutoratB13=1;
}
else
echo"";
}
?>
<?php
function couleurBT14 ($joueur, $bdcomite, $equipeB)
{
global $tutoratB14;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and (type_licence='OT' or type_licence='BJT') and club='$equipeB'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	}
if ($type_licencejoueur211=='OT' or $type_licencejoueur211== 'BJT')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$tutoratB14=1;
}
else
echo"";
}
?>
<?php
function couleurBT15 ($joueur, $bdcomite, $equipeB)
{
global $tutoratB15;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and (type_licence='OT' or type_licence='BJT') and club='$equipeB'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	}
if ($type_licencejoueur211=='OT' or $type_licencejoueur211== 'BJT' )
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$tutoratB15=1;
}
else
echo"";
}
?>
<?php
function couleurBT16 ($joueur, $bdcomite, $equipeB)
{
global $tutoratB16;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and (type_licence='OT' or type_licence='BJT') and club='$equipeB'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	 }
if ($type_licencejoueur211=='OT' or $type_licencejoueur211== 'BJT')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$tutoratB16=1;

}
else
echo"";
}
?>
<?php
function couleurBT17 ($joueur, $bdcomite, $equipeB)
{
global $tutoratB17;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and (type_licence='OT' or type_licence='BJT') and club='$equipeB'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	}
if ($type_licencejoueur211=='OT' or $type_licencejoueur211== 'BJT')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$tutoratB17=1;
}
else
echo"";
}
?>
<?php
function couleurBT18 ($joueur, $bdcomite, $equipeB)
{
global $tutoratB18;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and (type_licence='OT' or type_licence='BJT') and club='$equipeB'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	
	}
if ($type_licencejoueur211=='OT' or $type_licencejoueur211== 'BJT')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$tutoratB18=1;

}
else
echo"";
}
?>
<?php
function couleurBT19 ($joueur, $bdcomite, $equipeB)
{
global $tutoratB19;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and (type_licence='OT' or type_licence='BJT') and club='$equipeB'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	 
	}
if ($type_licencejoueur211=='OT' or $type_licencejoueur211== 'BJT')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$tutoratB19=1;

}
else
echo"";
}
?>
<?php
function couleurBT20 ($joueur, $bdcomite, $equipeB)
{
global $tutoratB20;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and (type_licence='OT' or type_licence='BJT') and club='$equipeB'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	 
	}
if ($type_licencejoueur211=='OT' or $type_licencejoueur211== 'BJT' )
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$tutoratB20=1;

}
else
echo"";
}
?>
<?php
function couleurBT21 ($joueur, $bdcomite, $equipeB)
{
global $tutoratB21;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and (type_licence='OT' or type_licence='BJT') and club='$equipeB'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	 
	}
if ($type_licencejoueur211=='OT' or $type_licencejoueur211== 'BJT' )
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$tutoratB21=1;
;
}
else
echo"";
}
?>
<?php
function couleurBT22 ($joueur, $bdcomite, $equipeB)
{
global $tutoratB22;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence, photo FROM $bdcomite WHERE nom='$joueur' and (type_licence='OT' or type_licence='BJT') and club='$equipeB'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	
	}
if ($type_licencejoueur211=='OT' or $type_licencejoueur211== 'BJT')
{
{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
$tutoratB22=1;
}
else
echo"";
}
?>
<?php
function couleurBT23 ($joueur, $bdcomite, $equipeB)
{
global $tutoratB23;
$reponse = mysql_query("SELECT nom, position_terrain, type_licence FROM $bdcomite WHERE nom='$joueur' and club='$equipeB'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
	{ 
	$type_licencejoueur211= $donnees['type_licence']; 
	}
if ($type_licencejoueur211=='OT' or $type_licencejoueur211== 'BJT')
	{
	{print("<img src=\"http://francefinalesrugby.franceserv.com/admin/feuille_match/croix.gif\" >");}
	$tutoratB23=1;
	
	}
else
	{
	echo "";
	}	
}
?>
<?php //Affiche premiere ligne 

//function premiereligne ($joueur, $bdcomite, $equipe)
//{
//$requete = "SELECT nom, premiereLigne, club FROM $bdcomite WHERE nom='$joueur' and club='$equipe' and premiereLigne>'0'"; // Requête SQL
//$result=mysql_query($requete);
//while ($row = mysql_fetch_array($result) )
//	{ 
//	$premiereLigne= $row[1]; 
	//echo $premiereLigne;
//	}
	
 //  if ($premiereLigne=='1')
//	echo "GTD";
//	else
//	echo $premiereLigne;
	
//}
?>

</body>
</html>
