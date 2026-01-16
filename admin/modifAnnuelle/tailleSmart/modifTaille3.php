<?php 
$comite=$_GET['comite'];
$T171=$_POST['T171'];
$T181=$_POST['T181'];
$T191=$_POST['T191'];
$T201=$_POST['T201'];
$T211=$_POST['T211'];
$T221=$_POST['T221'];
$T271=$_POST['T271'];
$T9181=$_POST['T9181'];
$T9191=$_POST['T9191'];
$T9201=$_POST['T9201'];

$T172=$_POST['T172'];
$T182=$_POST['T182'];
$T192=$_POST['T192'];
$T202=$_POST['T202'];
$T212=$_POST['T212'];
$T222=$_POST['T222'];
$T272=$_POST['T272'];
$T9182=$_POST['T9182'];
$T9192=$_POST['T9192'];
$T9202=$_POST['T9202'];

$T173=$_POST['T173'];
$T273=$_POST['T273'];



?>
<!DOCTYPE html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body>
<?php
mysql_connect("sql.franceserv.fr", "onepip-france", "Lavelan1969&"); 
mysql_select_db("onepip-france-db2"); 
?>
<?php
mysql_query("UPDATE tailleSmart
			SET T171='$T171', T181='$T181', T191='$T191', T201='$T201', T211='$T211', T221='$T221',
				T271='$2171', T9181='$T9181', T9191='$T9191', T9201='$T9201', T211='$T211', T221='$T221',
				T172='$T172', T182='$T182', T192='$T192', T202='$T202', T212='$T212', T222='$T222',
				T272='$T272', T9182='$T9182', T9192='$T9192', T9202='$T9202', T212='$T212', T222='$T222',
				T173='$T173', 
				T273='$T273'

			WHERE comite ='$comite' "); 
?>
<?php
   mysql_close();?>
<p><b><font color="#000000" size="4" face="Arial, Helvetica, sans-serif">Gestion 
  du smartphone</font></b></p>
<p><a href="modifTaille.php">retour page precedente</a></p>
