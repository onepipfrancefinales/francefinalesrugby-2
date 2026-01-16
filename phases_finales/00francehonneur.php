<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body bgcolor="#FFFFFF" text="#000000">

<?php
require ("../../connection.php") ;
 ?>



<?php //E01
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf2015.E01 FROM bdclubs, bdpf2015 WHERE bdclubs.code=bdpf2015.E01 and bdpf2015.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);	
$clubA3201 = ($nom20.' '.$sigle);
?>
<?php //E02
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf2015.E02 FROM bdclubs, bdpf2015 WHERE bdclubs.code=bdpf2015.E02 and bdpf2015.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3202 = ($nom20.' '.$sigle);
?>

<?php //E03
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf2015.E03 FROM bdclubs, bdpf2015 WHERE bdclubs.code=bdpf2015.E03 and bdpf2015.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3203 = ($nom20.' '.$sigle);
?>

<?php //E04
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf2015.E04 FROM bdclubs, bdpf2015 WHERE bdclubs.code=bdpf2015.E04 and bdpf2015.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3204 = ($nom20.' '.$sigle);
?>

<?php //E05
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf2015.E05 FROM bdclubs, bdpf2015 WHERE bdclubs.code=bdpf2015.E05 and bdpf2015.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3205 = ($nom20.' '.$sigle);
?>

<?php //E06
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf2015.E06 FROM bdclubs, bdpf2015 WHERE bdclubs.code=bdpf2015.E06 and bdpf2015.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3206 = ($nom20.' '.$sigle);
?>

<?php //E07
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf2015.E07 FROM bdclubs, bdpf2015 WHERE bdclubs.code=bdpf2015.E07 and bdpf2015.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3207 = ($nom20.' '.$sigle);
?>

<?php //E08
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf2015.E08 FROM bdclubs, bdpf2015 WHERE bdclubs.code=bdpf2015.E08 and bdpf2015.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3208 = ($nom20.' '.$sigle);
?>


<?php //E09
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf2015.E09 FROM bdclubs, bdpf2015 WHERE bdclubs.code=bdpf2015.E09 and bdpf2015.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3209 = ($nom20.' '.$sigle);
?>

<?php //E10
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf2015.E10 FROM bdclubs, bdpf2015 WHERE bdclubs.code=bdpf2015.E10 and bdpf2015.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3210 = ($nom20.' '.$sigle);
?>

<?php //E11
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf2015.E11 FROM bdclubs, bdpf2015 WHERE bdclubs.code=bdpf2015.E11 and bdpf2015.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3211 = ($nom20.' '.$sigle);
?>

<?php //E12
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf2015.E12 FROM bdclubs, bdpf2015 WHERE bdclubs.code=bdpf2015.E12 and bdpf2015.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3212 = ($nom20.' '.$sigle);
?>


<?php //E13
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf2015.E13 FROM bdclubs, bdpf2015 WHERE bdclubs.code=bdpf2015.E13 and bdpf2015.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3213 = ($nom20.' '.$sigle);
?>

<?php //E14
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf2015.E14 FROM bdclubs, bdpf2015 WHERE bdclubs.code=bdpf2015.E14 and bdpf2015.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3214 = ($nom20.' '.$sigle);
?>

<?php //E15
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf2015.E15 FROM bdclubs, bdpf2015 WHERE bdclubs.code=bdpf2015.E15 and bdpf2015.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3215 = ($nom20.' '.$sigle);
?>

<?php //E16
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf2015.E16 FROM bdclubs, bdpf2015 WHERE bdclubs.code=bdpf2015.E16 and bdpf2015.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
	$nom20 = substr($nom,0,20);		
$clubA3216 = ($nom20.' '.$sigle);
?>


<?php //E17
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf2015.E17 FROM bdclubs, bdpf2015 WHERE bdclubs.code=bdpf2015.E17 and bdpf2015.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
	$nom20 = substr($nom,0,20);		
$clubA3217 = ($nom20.' '.$sigle);
?>

<?php //E18
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf2015.E18 FROM bdclubs, bdpf2015 WHERE bdclubs.code=bdpf2015.E18 and bdpf2015.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
	$nom20 = substr($nom,0,20);		
$clubA3218 = ($nom20.' '.$sigle);
?>

<?php //E19
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf2015.E19 FROM bdclubs, bdpf2015 WHERE bdclubs.code=bdpf2015.E19 and bdpf2015.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
	$nom20 = substr($nom,0,18);		
$clubA3219 = ($nom20.' '.$sigle);
?>

<?php //E20
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf2015.E20 FROM bdclubs, bdpf2015 WHERE bdclubs.code=bdpf2015.E20 and bdpf2015.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,18);		
$clubA3220 = ($nom20.' '.$sigle);
?>

<?php //E21
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf2015.E21 FROM bdclubs, bdpf2015 WHERE bdclubs.code=bdpf2015.E21 and bdpf2015.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
	$nom20 = substr($nom,0,20);		
$clubA3221 = ($nom20.' '.$sigle);
?>

<?php //E22
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf2015.E22 FROM bdclubs, bdpf2015 WHERE bdclubs.code=bdpf2015.E22 and bdpf2015.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
	$nom20 = substr($nom,0,20);		
$clubA3222 = ($nom20.' '.$sigle);
?>

<?php //E23
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf2015.E23 FROM bdclubs, bdpf2015 WHERE bdclubs.code=bdpf2015.E23 and bdpf2015.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3223 = ($nom20.' '.$sigle);
?>

<?php //E24
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf2015.E24 FROM bdclubs, bdpf2015 WHERE bdclubs.code=bdpf2015.E24 and bdpf2015.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
	$nom20 = substr($nom,0,20);		
$clubA3224 = ($nom20.' '.$sigle);
?>


<?php //E25
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf2015.E25 FROM bdclubs, bdpf2015 WHERE bdclubs.code=bdpf2015.E25 and bdpf2015.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3225 = ($nom20.' '.$sigle);
?>

<?php //E26
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf2015.E26 FROM bdclubs, bdpf2015 WHERE bdclubs.code=bdpf2015.E26 and bdpf2015.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3226 = ($nom20.' '.$sigle);
?>

<?php //E27
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf2015.E27 FROM bdclubs, bdpf2015 WHERE bdclubs.code=bdpf2015.E27 and bdpf2015.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3227 = ($nom20.' '.$sigle);
?>

<?php //E28
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf2015.E28 FROM bdclubs, bdpf2015 WHERE bdclubs.code=bdpf2015.E28 and bdpf2015.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3228= ($nom20.' '.$sigle);
?>

<?php //E29
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf2015.E29 FROM bdclubs, bdpf2015 WHERE bdclubs.code=bdpf2015.E29 and bdpf2015.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3229 = ($nom20.' '.$sigle);
?>

<?php //E30
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf2015.E30 FROM bdclubs, bdpf2015 WHERE bdclubs.code=bdpf2015.E30 and bdpf2015.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3230 = ($nom20.' '.$sigle);
?>

<?php //E31
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf2015.E31 FROM bdclubs, bdpf2015 WHERE bdclubs.code=bdpf2015.E31 and bdpf2015.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3231 = ($nom20.' '.$sigle);
?>

<?php //E32
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf2015.E32 FROM bdclubs, bdpf2015 WHERE bdclubs.code=bdpf2015.E32 and bdpf2015.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3232 = ($nom20.' '.$sigle);
?>

<?php //E33
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf2015.E33 FROM bdclubs, bdpf2015 WHERE bdclubs.code=bdpf2015.E33 and bdpf2015.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3233 = ($nom20.' '.$sigle);
?>

<?php //E34
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf2015.E34 FROM bdclubs, bdpf2015 WHERE bdclubs.code=bdpf2015.E34 and bdpf2015.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3234 = ($nom20.' '.$sigle);
?>

<?php //E35
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf2015.E35 FROM bdclubs, bdpf2015 WHERE bdclubs.code=bdpf2015.E35 and bdpf2015.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3235 = ($nom20.' '.$sigle);
?>

<?php //E36
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf2015.E36 FROM bdclubs, bdpf2015 WHERE bdclubs.code=bdpf2015.E36 and bdpf2015.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3236 = ($nom20.' '.$sigle);
?>

<?php //E37
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf2015.E37 FROM bdclubs, bdpf2015 WHERE bdclubs.code=bdpf2015.E37 and bdpf2015.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
	$nom20 = substr($nom,0,20);		
$clubA3237 = ($nom20.' '.$sigle);
?>

<?php //E38
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf2015.E38 FROM bdclubs, bdpf2015 WHERE bdclubs.code=bdpf2015.E38 and bdpf2015.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3238 = ($nom20.' '.$sigle);
?>

<?php //E39
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf2015.E39 FROM bdclubs, bdpf2015 WHERE bdclubs.code=bdpf2015.E39 and bdpf2015.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3239 = ($nom20.' '.$sigle);
?>

<?php //E40
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf2015.E40 FROM bdclubs, bdpf2015 WHERE bdclubs.code=bdpf2015.E40 and bdpf2015.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,17);		
$clubA3240 = ($nom20.' '.$sigle);
?>

<?php //E41
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf2015.E41 FROM bdclubs, bdpf2015 WHERE bdclubs.code=bdpf2015.E41 and bdpf2015.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3241 = ($nom20.' '.$sigle);
?>

<?php //E42
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf2015.E42 FROM bdclubs, bdpf2015 WHERE bdclubs.code=bdpf2015.E42 and bdpf2015.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3242 = ($nom20.' '.$sigle);
?>

<?php //E43
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf2015.E43 FROM bdclubs, bdpf2015 WHERE bdclubs.code=bdpf2015.E43 and bdpf2015.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3243 = ($nom20.' '.$sigle);
?>

<?php //E44
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf2015.E44 FROM bdclubs, bdpf2015 WHERE bdclubs.code=bdpf2015.E44 and bdpf2015.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3244 = ($nom20.' '.$sigle);
?>


<?php //E45
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf2015.E45 FROM bdclubs, bdpf2015 WHERE bdclubs.code=bdpf2015.E45 and bdpf2015.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3245 = ($nom20.' '.$sigle);
?>

<?php //E46
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf2015.E46 FROM bdclubs, bdpf2015 WHERE bdclubs.code=bdpf2015.E46 and bdpf2015.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3246 = ($nom20.' '.$sigle);
?>

<?php //E47
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf2015.E47 FROM bdclubs, bdpf2015 WHERE bdclubs.code=bdpf2015.E47 and bdpf2015.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3247 = ($nom20.' '.$sigle);
?>

<?php //E48
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf2015.E48 FROM bdclubs, bdpf2015 WHERE bdclubs.code=bdpf2015.E48 and bdpf2015.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3248 = ($nom20.' '.$sigle);
?>

<?php //E49
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf2015.E49 FROM bdclubs, bdpf2015 WHERE bdclubs.code=bdpf2015.E49 and bdpf2015.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3249 = ($nom20.' '.$sigle);
?>

<?php //E50
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf2015.E50 FROM bdclubs, bdpf2015 WHERE bdclubs.code=bdpf2015.E50 and bdpf2015.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3250 = ($nom20.' '.$sigle);
?>

<?php //E51
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf2015.E51 FROM bdclubs, bdpf2015 WHERE bdclubs.code=bdpf2015.E51 and bdpf2015.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3251 = ($nom20.' '.$sigle);
?>

<?php //E52
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf2015.E52 FROM bdclubs, bdpf2015 WHERE bdclubs.code=bdpf2015.E52 and bdpf2015.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3252 = ($nom20.' '.$sigle);
?>

<?php //E53
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf2015.E53 FROM bdclubs, bdpf2015 WHERE bdclubs.code=bdpf2015.E53 and bdpf2015.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3253 = ($nom20.' '.$sigle);
?>

<?php //E54
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf2015.E54 FROM bdclubs, bdpf2015 WHERE bdclubs.code=bdpf2015.E54 and bdpf2015.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3254 = ($nom20.' '.$sigle);
?>

<?php //E55
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf2015.E55 FROM bdclubs, bdpf2015 WHERE bdclubs.code=bdpf2015.E55 and bdpf2015.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3255 = ($nom20.' '.$sigle);
?>

<?php //E56
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf2015.E56 FROM bdclubs, bdpf2015 WHERE bdclubs.code=bdpf2015.E56 and bdpf2015.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3256 = ($nom20.' '.$sigle);
?>

<?php //E57
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf2015.E57 FROM bdclubs, bdpf2015 WHERE bdclubs.code=bdpf2015.E57 and bdpf2015.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3257 = ($nom20.' '.$sigle);
?>

<?php //E58
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf2015.E58 FROM bdclubs, bdpf2015 WHERE bdclubs.code=bdpf2015.E58 and bdpf2015.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3258 = ($nom20.' '.$sigle);
?>

<?php //E59
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf2015.E59 FROM bdclubs, bdpf2015 WHERE bdclubs.code=bdpf2015.E59 and bdpf2015.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3259 = ($nom20.' '.$sigle);
?>

<?php //E60
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf2015.E60 FROM bdclubs, bdpf2015 WHERE bdclubs.code=bdpf2015.E60 and bdpf2015.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3260 = ($nom20.' '.$sigle);
?>

<?php //E61
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf2015.E61 FROM bdclubs, bdpf2015 WHERE bdclubs.code=bdpf2015.E61 and bdpf2015.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3261 = ($nom20.' '.$sigle);
?>

<?php //E62
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf2015.E62 FROM bdclubs, bdpf2015 WHERE bdclubs.code=bdpf2015.E62 and bdpf2015.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3262 = ($nom20.' '.$sigle);
?>

<?php //E63
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf2015.E63 FROM bdclubs, bdpf2015 WHERE bdclubs.code=bdpf2015.E63 and bdpf2015.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3263 = ($nom20.' '.$sigle);
?>

<?php //E64
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf2015.E64 FROM bdclubs, bdpf2015 WHERE bdclubs.code=bdpf2015.E64 and bdpf2015.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3264 = ($nom20.' '.$sigle);
?>


<?php // ----32me----------------------
$query = "SELECT id, A3201, A3202, A3203, A3204, A3205, A3206, A3207, A3208, A3209, A3210, A3211, A3212, A3213, A3214, A3215, A3216, A3217, A3218, A3219, A3220, A3221, A3222, A3223, A3224, A3225, A3226, A3227, A3228, A3229, A3230, A3231, A3232, A3233, A3234, A3235, A3236, A3237, A3238, A3239, A3240, A3241, A3242, A3243, A3244, A3245, A3246, A3247, A3248, A3249, A3250, A3251, A3252, A3253, A3254, A3255, A3256, A3257, A3258, A3259, A3260, A3261, A3262, A3263, A3264 FROM  bdpf2015 WHERE id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$A3201 = $row[1];
	$A3202 = $row[2];
	$A3203 = $row[3];
	$A3204 = $row[4];
	$A3205 = $row[5];
	$A3206 = $row[6];
	$A3207 = $row[7];
	$A3208 = $row[8];
	$A3209 = $row[9];
	$A3210 = $row[10];
	$A3211 = $row[11];
	$A3212 = $row[12];
	$A3213 = $row[13];
	$A3214 = $row[14];
	$A3215 = $row[15];
	$A3216 = $row[16];
	$A3217 = $row[17];
	$A3218 = $row[18];
	$A3219 = $row[19];
	$A3220 = $row[20];
	$A3221 = $row[21];
	$A3222 = $row[22];
	$A3223 = $row[23];
	$A3224 = $row[24];
	$A3225 = $row[25];
	$A3226 = $row[26];
	$A3227 = $row[27];
	$A3228 = $row[28];
	$A3229 = $row[29];
	$A3230 = $row[30];
	$A3231 = $row[31];
	$A3232 = $row[32];
	
	$A3233 = $row[33];
	$A3234 = $row[34];
	$A3235 = $row[35];
	$A3236 = $row[36];
	$A3237 = $row[37];
	$A3238 = $row[38];
	$A3239 = $row[39];
	$A3240 = $row[40];
	$A3241 = $row[41];
	$A3242 = $row[42];
	$A3243 = $row[43];
	$A3244 = $row[44];
	$A3245 = $row[45];
	$A3246 = $row[46];
	$A3247 = $row[47];
	$A3248 = $row[48];
	$A3249 = $row[49];
	$A3250 = $row[50];
	$A3251 = $row[51];
	$A3252 = $row[52];
	$A3253 = $row[53];
	$A3254 = $row[54];
	$A3255 = $row[55];
	$A3256 = $row[56];
	$A3257 = $row[57];
	$A3258 = $row[58];
	$A3259 = $row[59];
	$A3260 = $row[60];
	$A3261 = $row[61];
	$A3262 = $row[62];
	$A3263 = $row[63];
	$A3264 = $row[64];
	}
 
?>


<?php // ----16me----------------------
$query = "SELECT id, A1601, A1602, A1603, A1604, A1605, A1606, A1607, A1608, A1609, A1610, A1611, A1612, A1613, A1614, A1615, A1616, 
					 A1617, A1618, A1619, A1620, A1621, A1622, A1623, A1624, A1625, A1626, A1627, A1628, A1629, A1630, A1631, A1632 FROM  bdpf2015_2 WHERE id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$A1601 = $row[1];
	$A1602 = $row[2];
	$A1603 = $row[3];
	$A1604 = $row[4];
	$A1605 = $row[5];
	$A1606 = $row[6];
	$A1607 = $row[7];
	$A1608 = $row[8];
	$A1609 = $row[9];
	$A1610 = $row[10];
	$A1611 = $row[11];
	$A1612 = $row[12];
	$A1613 = $row[13];
	$A1614 = $row[14];
	$A1615 = $row[15];
	$A1616 = $row[16];
	
	$A1617 = $row[17];
	$A1618 = $row[18];
	$A1619 = $row[19];
	$A1620 = $row[20];
	$A1621 = $row[21];
	$A1622 = $row[22];
	$A1623 = $row[23];
	$A1624 = $row[24];
	$A1625 = $row[25];
	$A1626 = $row[26];
	$A1627 = $row[27];
	$A1628 = $row[28];
	$A1629 = $row[29];
	$A1630 = $row[30];
	$A1631 = $row[31];
	$A1632 = $row[32];
	
	
	
	}
 
?>

<?php // ----8me-----Quarts----Demi------Finale-------
$query = "SELECT id, A8001, A8002, A8003, A8004, A8005, A8006, A8007, A8008, A8009, A8010, A8011, A8012, A8013, A8014, A8015, A8016, A4001, A4002, A4003, A4004, A4005, A4006, A4007, A4008,A2001, A2002, A2003, A2004, A1001, A1002 FROM  bdpf2015_2 WHERE id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$A8001 = $row[1];
	$A8002 = $row[2];
	$A8003 = $row[3];
	$A8004 = $row[4];
	$A8005 = $row[5];
	$A8006 = $row[6];
	$A8007 = $row[7];
	$A8008 = $row[8];
	$A8009 = $row[9];
	$A8010 = $row[10];
	$A8011 = $row[11];
	$A8012 = $row[12];
	$A8013 = $row[13];
	$A8014 = $row[14];
	$A8015 = $row[15];
	$A8016 = $row[16];
	
	
	$A4001 = $row[17];
	$A4002 = $row[18];
	$A4003 = $row[19];
	$A4004 = $row[20];
	$A4005 = $row[21];
	$A4006 = $row[22];
	$A4007 = $row[23];
	$A4008 = $row[24];
	
	$A2001 = $row[25];
	$A2002 = $row[26];
	$A2003 = $row[27];
	$A2004 = $row[28];
	
	
	$A1001 = $row[29];
	$A1002 = $row[30];
	
	
	}
 
?>

<?php	
mysql_close(); // Déconnexion de MySQL
?>

<?php $clubA =" ";?>

<?php //-------16me de finale -------
	    if ($A3201+$A3202>0) if ($A3201>$A3202)	$clubA1601= $clubA3201;	else	$clubA1601= $clubA3202; else $clubA1601=$clubA;?>
<?php	if ($A3203+$A3204>0) if ($A3203>$A3204)	$clubA1602= $clubA3203;	else	$clubA1602= $clubA3204; else $clubA1602=$clubA;?>
<?php	if ($A3205+$A3206>0) if ($A3205>$A3206)	$clubA1603= $clubA3205;	else	$clubA1603= $clubA3206; else $clubA1603=$clubA;?>
<?php	if ($A3207+$A3208>0) if ($A3207>$A3208)	$clubA1604= $clubA3207;	else	$clubA1604= $clubA3208; else $clubA1604=$clubA;?>
	
<?php	if ($A3209+$A3210>0) if ($A3209>$A3210)	$clubA1605= $clubA3209;	else	$clubA1605= $clubA3210; else $clubA1605=$clubA;?>
<?php   if ($A3211+$A3212>0) if ($A3211>$A3212)	$clubA1606= $clubA3211;	else	$clubA1606= $clubA3212; else $clubA1606=$clubA;?>
<?php   if ($A3213+$A3214>0) if ($A3213>$A3214)	$clubA1607= $clubA3213;	else	$clubA1607= $clubA3214; else $clubA1607=$clubA;?>
<?php   if ($A3215+$A3216>0) if ($A3215>$A3216)	$clubA1608= $clubA3215;	else	$clubA1608= $clubA3216; else $clubA1608=$clubA;?>
 
<?php	if ($A3217+$A3218>0) if ($A3217>$A3218) $clubA1609= $clubA3217;	else	$clubA1609= $clubA3218; else $clubA1609=$clubA;?>
<?php	if ($A3219+$A3220>0) if ($A3219>$A3220)	$clubA1610= $clubA3219;	else	$clubA1610= $clubA3220; else $clubA1610=$clubA;?>
<?php   if ($A3221+$A3222>0) if ($A3221>$A3222)	$clubA1611= $clubA3221;	else	$clubA1611= $clubA3222; else $clubA1611=$clubA;?>
<?php	if ($A3223+$A3224>0) if ($A3223>$A3224)	$clubA1612= $clubA3223;	else	$clubA1612= $clubA3224; else $clubA1612=$clubA;?>
	  	  
<?php	if ($A3225+$A3226>0) if ($A3225>$A3226)	$clubA1613= $clubA3225;	else	$clubA1613= $clubA3226; else $clubA1613=$clubA;?>
<?php	if ($A3227+$A3228>0) if ($A3227>$A3228)	$clubA1614= $clubA3227;	else	$clubA1614= $clubA3228; else $clubA1614=$clubA;?>
<?php	if ($A3229+$A3230>0) if ($A3229>$A3230)	$clubA1615= $clubA3229;	else	$clubA1615= $clubA3230; else $clubA1615=$clubA;?>
<?php	if ($A3231+$A3232>0) if ($A3231>$A3232)	$clubA1616= $clubA3231;	else	$clubA1616= $clubA3232; else $clubA1616=$clubA;?>



	  	  
<?php	if ($A3233+$A3234>0) if ($A3233>$A3234)	$clubA1617= $clubA3233;	else	$clubA1617= $clubA3234; else $clubA1617=$clubA;?>
<?php	if ($A3235+$A3236>0) if ($A3235>$A3236)	$clubA1618= $clubA3235;	else	$clubA1618= $clubA3236; else $clubA1618=$clubA;?>
<?php	if ($A3237+$A3238>0) if ($A3237>$A3238)	$clubA1619= $clubA3237;	else	$clubA1619= $clubA3238; else $clubA1619=$clubA;?>
<?php	if ($A3239+$A3240>0) if ($A3239>$A3240)	$clubA1620= $clubA3239;	else	$clubA1620= $clubA3240; else $clubA1620=$clubA;?>

<?php	if ($A3241+$A3242>0) if ($A3241>$A3242)	$clubA1621= $clubA3241;	else	$clubA1621= $clubA3242; else $clubA1621=$clubA;?>
<?php	if ($A3243+$A3244>0) if ($A3243>$A3244)	$clubA1622= $clubA3243;	else	$clubA1622= $clubA3244; else $clubA1622=$clubA;?>
<?php	if ($A3245+$A3246>0) if ($A3245>$A3246)	$clubA1623= $clubA3245;	else	$clubA1623= $clubA3246; else $clubA1623=$clubA;?>
<?php	if ($A3247+$A3248>0) if ($A3247>$A3248)	$clubA1624= $clubA3247;	else	$clubA1624= $clubA3248; else $clubA1624=$clubA;?>

<?php	if ($A3249+$A3250>0) if ($A3249>$A3250)	$clubA1625= $clubA3249;	else	$clubA1625= $clubA3250; else $clubA1625=$clubA;?>
<?php	if ($A3251+$A3252>0) if ($A3251>$A3252)	$clubA1626= $clubA3251;	else	$clubA1626= $clubA3252; else $clubA1626=$clubA;?>
<?php	if ($A3253+$A3254>0) if ($A3253>$A3254)	$clubA1627= $clubA3253;	else	$clubA1627= $clubA3254; else $clubA1627=$clubA;?>
<?php	if ($A3255+$A3256>0) if ($A3255>$A3256)	$clubA1628= $clubA3255;	else	$clubA1628= $clubA3256; else $clubA1628=$clubA;?>

<?php	if ($A3257+$A3258>0) if ($A3257>$A3258)	$clubA1629= $clubA3257;	else	$clubA1629= $clubA3258; else $clubA1629=$clubA;?>
<?php	if ($A3259+$A3260>0) if ($A3259>$A3260)	$clubA1630= $clubA3259;	else	$clubA1630= $clubA3260; else $clubA1630=$clubA;?>
<?php	if ($A3261+$A3262>0) if ($A3261>$A3262)	$clubA1631= $clubA3261;	else	$clubA1631= $clubA3262; else $clubA1631=$clubA;?>
<?php	if ($A3263+$A3264>0) if ($A3263>$A3264)	$clubA1632= $clubA3263;	else	$clubA1632= $clubA3264; else $clubA1632=$clubA;?>	
	
	
	  <?php //--------8me de finale------
	    if ($A1601+$A1602>0)  if ($A1601>$A1602) $clubA8001= $clubA1601;	else	$clubA8001= $clubA1602; else $clubA8001=$clubA;?>
<?php   if ($A1603+$A1604>0)  if ($A1603>$A1604) $clubA8002= $clubA1603;	else	$clubA8002= $clubA1604; else $clubA8002=$clubA;?>
<?php   if ($A1605+$A1606>0)  if ($A1605>$A1606) $clubA8003= $clubA1605;	else	$clubA8003= $clubA1606;	else $clubA8003=$clubA;?>
<?php   if ($A1607+$A1608>0)  if ($A1607>$A1608) $clubA8004= $clubA1607;	else	$clubA8004= $clubA1608;	else $clubA8004=$clubA;?>

<?php   if ($A1609+$A1610>0)  if ($A1609>$A1610) $clubA8005= $clubA1609;	else	$clubA8005= $clubA1610; else $clubA8005=$clubA;?>
<?php   if ($A1611+$A1612>0)  if ($A1611>$A1612) $clubA8006= $clubA1611;	else	$clubA8006= $clubA1612; else $clubA8006=$clubA;?>
<?php   if ($A1613+$A1614>0)  if ($A1613>$A1614) $clubA8007= $clubA1613;	else	$clubA8007= $clubA1614;	else $clubA8007=$clubA;?>
<?php   if ($A1615+$A1616>0)  if ($A1615>$A1616) $clubA8008= $clubA1615;	else	$clubA8008= $clubA1616;	else $clubA8008=$clubA;?>

<?php   if ($A1617+$A1618>0)  if ($A1617>$A1618) $clubA8009= $clubA1617;	else	$clubA8009= $clubA1618; else $clubA8009=$clubA;?>
<?php   if ($A1619+$A1620>0)  if ($A1619>$A1620) $clubA8010= $clubA1619;	else	$clubA8010= $clubA1620; else $clubA8010=$clubA;?>
<?php   if ($A1621+$A1622>0)  if ($A1621>$A1622) $clubA8011= $clubA1621;	else	$clubA8011= $clubA1622;	else $clubA8011=$clubA;?>
<?php   if ($A1623+$A1624>0)  if ($A1623>$A1624) $clubA8012= $clubA1623;	else	$clubA8012= $clubA1624; else $clubA8012=$clubA;?>

<?php   if ($A1625+$A1626>0)  if ($A1625>$A1626) $clubA8013= $clubA1625;	else	$clubA8013= $clubA1626; else $clubA8013=$clubA;?>
<?php   if ($A1627+$A1628>0)  if ($A1627>$A1628) $clubA8014= $clubA1627;	else	$clubA8014= $clubA1628; else $clubA8014=$clubA;?>
<?php   if ($A1629+$A1630>0)  if ($A1629>$A1630) $clubA8015= $clubA1629;	else	$clubA8015= $clubA1630;	else $clubA8015=$clubA;?>
<?php   if ($A1631+$A1632>0)  if ($A1631>$A1632) $clubA8016= $clubA1631;	else	$clubA8016= $clubA1632;	else $clubA8016=$clubA;?>

	 
	 
	 
	 
	 <?php //------Quarts--------
	    if ($A8001+$A8002>0)  if ($A8001>$A8002)	$clubA4001= $clubA8001;	else	$clubA4001= $clubA8002;	 else $clubA4001=$clubA;?>
<?php   if ($A8003+$A8004>0)  if ($A8003>$A8004)	$clubA4002= $clubA8003;	else	$clubA4002= $clubA8004;	 else $clubA4002=$clubA;?>

<?php   if ($A8005+$A8006>0)  if ($A8005>$A8006)	$clubA4003= $clubA8005;	else	$clubA4003= $clubA8006;	 else $clubA4003=$clubA;?>
<?php   if ($A8007+$A8008>0)  if ($A8007>$A8008)	$clubA4004= $clubA8007;	else	$clubA4004= $clubA8008;	 else $clubA4004=$clubA;?>

<?php   if ($A8009+$A8010>0)  if ($A8009>$A8010)	$clubA4005= $clubA8009;	else	$clubA4005= $clubA8010;	 else $clubA4005=$clubA;?>
<?php   if ($A8011+$A8012>0)  if ($A8011>$A8012)	$clubA4006= $clubA8011;	else	$clubA4006= $clubA8012;	 else $clubA4006=$clubA;?>

<?php   if ($A8013+$A8014>0)  if ($A8013>$A8014)	$clubA4007= $clubA8013;	else	$clubA4007= $clubA8014;  else $clubA4007=$clubA;?>
<?php   if ($A8015+$A8016>0)  if ($A8015>$A8016)	$clubA4008= $clubA8015;	else	$clubA4008= $clubA8016;	 else $clubA4008=$clubA;?>


<?php //------Demi--------
        if ($A4001+$A4002>0)  if ($A4001>$A4002)	$clubA2001= $clubA4001;	else	$clubA2001= $clubA4002;  else $clubA201=$clubA;?>
<?php   if ($A4003+$A4004>0)  if ($A4003>$A4004)	$clubA2002= $clubA4003;	else	$clubA2002= $clubA4004;  else $clubA2002=$clubA;?>

<?php   if ($A4005+$A4006>0)  if ($A4005>$A4006)	$clubA2003= $clubA4005;	else	$clubA2003= $clubA4006;  else $clubA2003=$clubA;?>								  
<?php   if ($A4007+$A4008>0)  if ($A4007>$A4008)	$clubA2004= $clubA4007;	else	$clubA2004= $clubA4008;  else $clubA2004=$clubA;?>								  
								  
								  
 <?php //------finale--------
        if ($A2001+$A2002>0)  if ($A2001>$A2002)	$clubA1001= $clubA2001;	else	$clubA1001= $clubA2002;  else $clubA1001=$clubA;?>
<?php   if ($A2003+$A2004>0)  if ($A2003>$A2004)	$clubA1002= $clubA2003;	else	$clubA1002= $clubA2004;  else $clubA1002=$clubA;?>
								  
								  