<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body >
<?php
require '../../connect/connexion1.php';
//mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); 
//mysql_select_db("onepip-france-db1"); 
?>

 

<?php 
//$annee=2018;
$bdannee="bdpf".''.$annee;
$bdannee_2="bdpf".''.$annee.''."_2";

if ($id==140)
$division="Fédérale 1";
elseif ($id==150)
$division="Fédérale 2";
elseif ($id==160)
$division="Fédérale 3";


else
$division="Bug !!";
?>
<?php //E01

//$reponse = $bdd->query("	SELECT bdclubs.id, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E00 
//			FROM bdclubs, bdpf$annee 
//			WHERE substr(bdclubs.id,-5)=bdpf$annee.E00 and bdpf$annee.id=$id "); 
//					$result = mysql_query($query) or die(mysql_error());
//					while ($row = $reponse->fetch() )
//	{ 
//	$nom = $row[1];
//	$sigle = $row[2];
//	}
//$nom20 = substr($nom,0,20);	
//$clubA3200 = ($nom20.' '.$sigle);
?>








<?php //E01

$reponse = $bdd->query("	SELECT bdclubs.id, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E01 
			FROM bdclubs, bdpf$annee 
			WHERE substr(bdclubs.id,-5)=bdpf$annee.E01 and bdpf$annee.id=$id "); 
					//$result = mysql_query($query) or die(mysql_error());
					while ($row = $reponse->fetch() )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);	
$clubA3201 = ($nom20.' '.$sigle);
?>
<?php //E02
$reponse = $bdd->query("SELECT bdclubs.id, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E02 FROM bdclubs, bdpf$annee WHERE substr(bdclubs.id,-5)=bdpf$annee.E02 and bdpf$annee.id=$id "); // Requête SQL
 //$result = mysql_query($query) ;
 	while ($row = $reponse->fetch() )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3202 = ($nom20.' '.$sigle);
?>

<?php //E03
$reponse = $bdd->query("SELECT bdclubs.id, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E03 FROM bdclubs, bdpf$annee WHERE substr(bdclubs.id,-5)=bdpf$annee.E03 and bdpf$annee.id=$id"); // Requête SQL
// $result = mysql_query($requete) ;
 	while ($row = $reponse->fetch() )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3203 = ($nom20.' '.$sigle);
?>

<?php //E04
$reponse = $bdd->query("SELECT bdclubs.id, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E04 FROM bdclubs, bdpf$annee WHERE substr(bdclubs.id,-5)=bdpf$annee.E04 and bdpf$annee.id=$id "); // Requête SQL
 ////////$result = mysql_query($query) ;
 	while ($row = $reponse->fetch() )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3204 = ($nom20.' '.$sigle);
?>

<?php //E05
$reponse = $bdd->query("SELECT bdclubs.id, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E05 FROM bdclubs, bdpf$annee WHERE substr(bdclubs.id,-5)=bdpf$annee.E05 and bdpf$annee.id=$id "); // Requête SQL
 //$result = mysql_query($query) ;
 	while ($row = $reponse->fetch() )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3205 = ($nom20.' '.$sigle);
?>

<?php //E06
$reponse = $bdd->query("SELECT bdclubs.id, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E06 FROM bdclubs, bdpf$annee WHERE substr(bdclubs.id,-5)=bdpf$annee.E06 and bdpf$annee.id=$id "); // Requête SQL
 //$result = mysql_query($query) ;
 	while ($row = $reponse->fetch() )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3206 = ($nom20.' '.$sigle);
?>

<?php //E07
$reponse = $bdd->query("SELECT bdclubs.id, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E07 FROM bdclubs, bdpf$annee WHERE substr(bdclubs.id,-5)=bdpf$annee.E07 and bdpf$annee.id=$id "); // Requête SQL
 //$result = mysql_query($query) ;
 	while ($row = $reponse->fetch() )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3207 = ($nom20.' '.$sigle);
?>

<?php //E08
$reponse = $bdd->query("SELECT bdclubs.id, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E08 FROM bdclubs, bdpf$annee WHERE substr(bdclubs.id,-5)=bdpf$annee.E08 and bdpf$annee.id=$id "); // Requête SQL
 //$result = mysql_query($query) ;
 	while ($row = $reponse->fetch() )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3208 = ($nom20.' '.$sigle);
?>


<?php //E09
$reponse = $bdd->query("SELECT bdclubs.id, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E09 FROM bdclubs, bdpf$annee WHERE substr(bdclubs.id,-5)=bdpf$annee.E09 and bdpf$annee.id=$id "); // Requête SQL
 //$result = mysql_query($query) ;
 	while ($row = $reponse->fetch() )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3209 = ($nom20.' '.$sigle);
?>

<?php //E10
$reponse = $bdd->query("SELECT bdclubs.id, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E10 FROM bdclubs, bdpf$annee WHERE substr(bdclubs.id,-5)=bdpf$annee.E10 and bdpf$annee.id=$id "); // Requête SQL
 //$result = mysql_query($query) ;
 	while ($row = $reponse->fetch() )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3210 = ($nom20.' '.$sigle);
?>

<?php //E11
$reponse = $bdd->query("SELECT bdclubs.id, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E11 FROM bdclubs, bdpf$annee WHERE substr(bdclubs.id,-5)=bdpf$annee.E11 and bdpf$annee.id=$id "); // Requête SQL
 //$result = mysql_query($query) ;
 	while ($row = $reponse->fetch() )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3211 = ($nom20.' '.$sigle);
?>

<?php //E12
$reponse = $bdd->query("SELECT bdclubs.id, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E12 FROM bdclubs, bdpf$annee WHERE substr(bdclubs.id,-5)=bdpf$annee.E12 and bdpf$annee.id=$id "); // Requête SQL
 //$result = mysql_query($query) ;
 	while ($row = $reponse->fetch() )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3212 = ($nom20.' '.$sigle);
?>


<?php //E13
$reponse = $bdd->query("SELECT bdclubs.id, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E13 FROM bdclubs, bdpf$annee WHERE substr(bdclubs.id,-5)=bdpf$annee.E13 and bdpf$annee.id=$id "); // Requête SQL
 //$result = mysql_query($query) ;
 	while ($row = $reponse->fetch() )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3213 = ($nom20.' '.$sigle);
?>

<?php //E14
$reponse = $bdd->query("SELECT bdclubs.id, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E14 FROM bdclubs, bdpf$annee WHERE substr(bdclubs.id,-5)=bdpf$annee.E14 and bdpf$annee.id=$id "); // Requête SQL
 //$result = mysql_query($query) ;
 	while ($row = $reponse->fetch() )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3214 = ($nom20.' '.$sigle);
?>

<?php //E15
$reponse = $bdd->query("SELECT bdclubs.id, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E15 FROM bdclubs, bdpf$annee WHERE substr(bdclubs.id,-5)=bdpf$annee.E15 and bdpf$annee.id=$id "); // Requête SQL
 //$result = mysql_query($query) ;
 	while ($row = $reponse->fetch() )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3215 = ($nom20.' '.$sigle);
?>

<?php //E16
$reponse = $bdd->query("SELECT bdclubs.id, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E16 FROM bdclubs, bdpf$annee WHERE substr(bdclubs.id,-5)=bdpf$annee.E16 and bdpf$annee.id=$id "); // Requête SQL
 //$result = mysql_query($query) ;
 	while ($row = $reponse->fetch() )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
	$nom20 = substr($nom,0,20);		
$clubA3216 = ($nom20.' '.$sigle);
?>


<?php //E17
$reponse = $bdd->query("SELECT bdclubs.id, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E17 FROM bdclubs, bdpf$annee WHERE substr(bdclubs.id,-5)=bdpf$annee.E17 and bdpf$annee.id=$id "); // Requête SQL
 //$result = mysql_query($query) ;
 	while ($row = $reponse->fetch() )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
	$nom20 = substr($nom,0,20);		
$clubA3217 = ($nom20.' '.$sigle);
?>

<?php //E18
$reponse = $bdd->query("SELECT bdclubs.id, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E18 FROM bdclubs, bdpf$annee WHERE substr(bdclubs.id,-5)=bdpf$annee.E18 and bdpf$annee.id=$id "); // Requête SQL
 //$result = mysql_query($query) ;
 	while ($row = $reponse->fetch() )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
	$nom20 = substr($nom,0,20);		
$clubA3218 = ($nom20.' '.$sigle);
?>

<?php //E19
$reponse = $bdd->query("SELECT bdclubs.id, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E19 FROM bdclubs, bdpf$annee WHERE substr(bdclubs.id,-5)=bdpf$annee.E19 and bdpf$annee.id=$id "); // Requête SQL
 //$result = mysql_query($query) ;
 	while ($row = $reponse->fetch() )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
	$nom20 = substr($nom,0,18);		
$clubA3219 = ($nom20.' '.$sigle);
?>

<?php //E20
$reponse = $bdd->query("SELECT bdclubs.id, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E20 FROM bdclubs, bdpf$annee WHERE substr(bdclubs.id,-5)=bdpf$annee.E20 and bdpf$annee.id=$id "); // Requête SQL
 //$result = mysql_query($query) ;
 	while ($row = $reponse->fetch() )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,18);		
$clubA3220 = ($nom20.' '.$sigle);
?>

<?php //E21
$reponse = $bdd->query("SELECT bdclubs.id, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E21 FROM bdclubs, bdpf$annee WHERE substr(bdclubs.id,-5)=bdpf$annee.E21 and bdpf$annee.id=$id "); // Requête SQL
 //$result = mysql_query($query) ;
 	while ($row = $reponse->fetch() )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
	$nom20 = substr($nom,0,20);		
$clubA3221 = ($nom20.' '.$sigle);
?>

<?php //E22
$reponse = $bdd->query("SELECT bdclubs.id, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E22 FROM bdclubs, bdpf$annee WHERE substr(bdclubs.id,-5)=bdpf$annee.E22 and bdpf$annee.id=$id "); // Requête SQL
 //$result = mysql_query($query) ;
 	while ($row = $reponse->fetch() )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
	$nom20 = substr($nom,0,20);		
$clubA3222 = ($nom20.' '.$sigle);
?>

<?php //E23
$reponse = $bdd->query("SELECT bdclubs.id, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E23 FROM bdclubs, bdpf$annee WHERE substr(bdclubs.id,-5)=bdpf$annee.E23 and bdpf$annee.id=$id "); // Requête SQL
 //$result = mysql_query($query) ;
 	while ($row = $reponse->fetch() )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3223 = ($nom20.' '.$sigle);
?>

<?php //E24
$reponse = $bdd->query("SELECT bdclubs.id, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E24 FROM bdclubs, bdpf$annee WHERE substr(bdclubs.id,-5)=bdpf$annee.E24 and bdpf$annee.id=$id "); // Requête SQL
 //$result = mysql_query($query) ;
 	while ($row = $reponse->fetch() )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
	$nom20 = substr($nom,0,20);		
$clubA3224 = ($nom20.' '.$sigle);
?>


<?php //E25
$reponse = $bdd->query("SELECT bdclubs.id, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E25 FROM bdclubs, bdpf$annee WHERE substr(bdclubs.id,-5)=bdpf$annee.E25 and bdpf$annee.id=$id "); // Requête SQL
 //$result = mysql_query($query) ;
 	while ($row = $reponse->fetch() )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3225 = ($nom20.' '.$sigle);
?>

<?php //E26
$reponse = $bdd->query("SELECT bdclubs.id, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E26 FROM bdclubs, bdpf$annee WHERE substr(bdclubs.id,-5)=bdpf$annee.E26 and bdpf$annee.id=$id "); // Requête SQL
 //$result = mysql_query($query) ;
 	while ($row = $reponse->fetch() )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3226 = ($nom20.' '.$sigle);
?>

<?php //E27
$reponse = $bdd->query("SELECT bdclubs.id, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E27 FROM bdclubs, bdpf$annee WHERE substr(bdclubs.id,-5)=bdpf$annee.E27 and bdpf$annee.id=$id "); // Requête SQL
 //$result = mysql_query($query) ;
 	while ($row = $reponse->fetch() )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3227 = ($nom20.' '.$sigle);
?>

<?php //E28
$reponse = $bdd->query("SELECT bdclubs.id, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E28 FROM bdclubs, bdpf$annee WHERE substr(bdclubs.id,-5)=bdpf$annee.E28 and bdpf$annee.id=$id "); // Requête SQL
 //$result = mysql_query($query) ;
 	while ($row = $reponse->fetch() )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3228= ($nom20.' '.$sigle);
?>

<?php //E29
$reponse = $bdd->query("SELECT bdclubs.id, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E29 FROM bdclubs, bdpf$annee WHERE substr(bdclubs.id,-5)=bdpf$annee.E29 and bdpf$annee.id=$id "); // Requête SQL
 //$result = mysql_query($query) ;
 	while ($row = $reponse->fetch() )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3229 = ($nom20.' '.$sigle);
?>

<?php //E30
$reponse = $bdd->query("SELECT bdclubs.id, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E30 FROM bdclubs, bdpf$annee WHERE substr(bdclubs.id,-5)=bdpf$annee.E30 and bdpf$annee.id=$id "); // Requête SQL
 //$result = mysql_query($query) ;
 	while ($row = $reponse->fetch() )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3230 = ($nom20.' '.$sigle);
?>

<?php //E31
$reponse = $bdd->query("SELECT bdclubs.id, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E31 FROM bdclubs, bdpf$annee WHERE substr(bdclubs.id,-5)=bdpf$annee.E31 and bdpf$annee.id=$id "); // Requête SQL
 //$result = mysql_query($query) ;
 	while ($row = $reponse->fetch() )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3231 = ($nom20.' '.$sigle);
?>

<?php //E32
$reponse = $bdd->query("SELECT bdclubs.id, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E32 FROM bdclubs, bdpf$annee WHERE substr(bdclubs.id,-5)=bdpf$annee.E32 and bdpf$annee.id=$id "); // Requête SQL
 //$result = mysql_query($query) ;
 	while ($row = $reponse->fetch() )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3232 = ($nom20.' '.$sigle);
?>

<?php //E33
$reponse = $bdd->query("SELECT bdclubs.id, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E33 FROM bdclubs, bdpf$annee WHERE substr(bdclubs.id,-5)=bdpf$annee.E33 and bdpf$annee.id=$id "); // Requête SQL
 //$result = mysql_query($query) ;
 	while ($row = $reponse->fetch() )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3233 = ($nom20.' '.$sigle);
?>

<?php //E34
$reponse = $bdd->query("SELECT bdclubs.id, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E34 FROM bdclubs, bdpf$annee WHERE substr(bdclubs.id,-5)=bdpf$annee.E34 and bdpf$annee.id=$id "); // Requête SQL
 //$result = mysql_query($query) ;
 	while ($row = $reponse->fetch() )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3234 = ($nom20.' '.$sigle);
?>

<?php //E35
$reponse = $bdd->query("SELECT bdclubs.id, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E35 FROM bdclubs, bdpf$annee WHERE substr(bdclubs.id,-5)=bdpf$annee.E35 and bdpf$annee.id=$id "); // Requête SQL
 //$result = mysql_query($query) ;
 	while ($row = $reponse->fetch() )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3235 = ($nom20.' '.$sigle);
?>

<?php //E36
$reponse = $bdd->query("SELECT bdclubs.id, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E36 FROM bdclubs, bdpf$annee WHERE substr(bdclubs.id,-5)=bdpf$annee.E36 and bdpf$annee.id=$id "); // Requête SQL
 //$result = mysql_query($query) ;
 	while ($row = $reponse->fetch() )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3236 = ($nom20.' '.$sigle);
?>

<?php //E37
$reponse = $bdd->query("SELECT bdclubs.id, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E37 FROM bdclubs, bdpf$annee WHERE substr(bdclubs.id,-5)=bdpf$annee.E37 and bdpf$annee.id=$id "); // Requête SQL
 //$result = mysql_query($query) ;
 	while ($row = $reponse->fetch() )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
	$nom20 = substr($nom,0,20);		
$clubA3237 = ($nom20.' '.$sigle);
?>

<?php //E38
$reponse = $bdd->query("SELECT bdclubs.id, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E38 FROM bdclubs, bdpf$annee WHERE substr(bdclubs.id,-5)=bdpf$annee.E38 and bdpf$annee.id=$id "); // Requête SQL
 //$result = mysql_query($query) ;
 	while ($row = $reponse->fetch() )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3238 = ($nom20.' '.$sigle);
?>

<?php //E39
$reponse = $bdd->query("SELECT bdclubs.id, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E39 FROM bdclubs, bdpf$annee WHERE substr(bdclubs.id,-5)=bdpf$annee.E39 and bdpf$annee.id=$id "); // Requête SQL
 //$result = mysql_query($query) ;
 	while ($row = $reponse->fetch() )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3239 = ($nom20.' '.$sigle);
?>

<?php //E40
$reponse = $bdd->query("SELECT bdclubs.id, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E40 FROM bdclubs, bdpf$annee WHERE substr(bdclubs.id,-5)=bdpf$annee.E40 and bdpf$annee.id=$id "); // Requête SQL
 //$result = mysql_query($query) ;
 	while ($row = $reponse->fetch() )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,17);		
$clubA3240 = ($nom20.' '.$sigle);
?>

<?php //E41
$reponse = $bdd->query("SELECT bdclubs.id, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E41 FROM bdclubs, bdpf$annee WHERE substr(bdclubs.id,-5)=bdpf$annee.E41 and bdpf$annee.id=$id "); // Requête SQL
 //$result = mysql_query($query) ;
 	while ($row = $reponse->fetch() )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3241 = ($nom20.' '.$sigle);
?>

<?php //E42
$reponse = $bdd->query("SELECT bdclubs.id, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E42 FROM bdclubs, bdpf$annee WHERE substr(bdclubs.id,-5)=bdpf$annee.E42 and bdpf$annee.id=$id "); // Requête SQL
 //$result = mysql_query($query) ;
 	while ($row = $reponse->fetch() )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3242 = ($nom20.' '.$sigle);
?>

<?php //E43
$reponse = $bdd->query("SELECT bdclubs.id, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E43 FROM bdclubs, bdpf$annee WHERE substr(bdclubs.id,-5)=bdpf$annee.E43 and bdpf$annee.id=$id "); // Requête SQL
 //$result = mysql_query($query) ;
 	while ($row = $reponse->fetch() )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3243 = ($nom20.' '.$sigle);
?>

<?php //E44
$reponse = $bdd->query("SELECT bdclubs.id, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E44 FROM bdclubs, bdpf$annee WHERE substr(bdclubs.id,-5)=bdpf$annee.E44 and bdpf$annee.id=$id "); // Requête SQL
 //$result = mysql_query($query) ;
 	while ($row = $reponse->fetch() )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3244 = ($nom20.' '.$sigle);
?>


<?php //E45
$reponse = $bdd->query("SELECT bdclubs.id, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E45 FROM bdclubs, bdpf$annee WHERE substr(bdclubs.id,-5)=bdpf$annee.E45 and bdpf$annee.id=$id "); // Requête SQL
 //$result = mysql_query($query) ;
 	while ($row = $reponse->fetch() )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3245 = ($nom20.' '.$sigle);
?>

<?php //E46
$reponse = $bdd->query("SELECT bdclubs.id, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E46 FROM bdclubs, bdpf$annee WHERE substr(bdclubs.id,-5)=bdpf$annee.E46 and bdpf$annee.id=$id "); // Requête SQL
 //$result = mysql_query($query) ;
 	while ($row = $reponse->fetch() )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3246 = ($nom20.' '.$sigle);
?>

<?php //E47
$reponse = $bdd->query("SELECT bdclubs.id, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E47 FROM bdclubs, bdpf$annee WHERE substr(bdclubs.id,-5)=bdpf$annee.E47 and bdpf$annee.id=$id "); // Requête SQL
 //$result = mysql_query($query) ;
 	while ($row = $reponse->fetch() )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3247 = ($nom20.' '.$sigle);
?>

<?php //E48
$reponse = $bdd->query("SELECT bdclubs.id, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E48 FROM bdclubs, bdpf$annee WHERE substr(bdclubs.id,-5)=bdpf$annee.E48 and bdpf$annee.id=$id "); // Requête SQL
 //$result = mysql_query($query) ;
 	while ($row = $reponse->fetch() )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3248 = ($nom20.' '.$sigle);
?>

<?php //E49
$reponse = $bdd->query("SELECT bdclubs.id, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E49 FROM bdclubs, bdpf$annee WHERE substr(bdclubs.id,-5)=bdpf$annee.E49 and bdpf$annee.id=$id "); // Requête SQL
 //$result = mysql_query($query) ;
 	while ($row = $reponse->fetch() )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3249 = ($nom20.' '.$sigle);
?>

<?php //E50
$reponse = $bdd->query("SELECT bdclubs.id, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E50 FROM bdclubs, bdpf$annee WHERE substr(bdclubs.id,-5)=bdpf$annee.E50 and bdpf$annee.id=$id "); // Requête SQL
 //$result = mysql_query($query) ;
 	while ($row = $reponse->fetch() )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3250 = ($nom20.' '.$sigle);
?>

<?php //E51
$reponse = $bdd->query("SELECT bdclubs.id, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E51 FROM bdclubs, bdpf$annee WHERE substr(bdclubs.id,-5)=bdpf$annee.E51 and bdpf$annee.id=$id "); // Requête SQL
 //$result = mysql_query($query) ;
 	while ($row = $reponse->fetch() )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3251 = ($nom20.' '.$sigle);
?>

<?php //E52
$reponse = $bdd->query("SELECT bdclubs.id, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E52 FROM bdclubs, bdpf$annee WHERE substr(bdclubs.id,-5)=bdpf$annee.E52 and bdpf$annee.id=$id "); // Requête SQL
 //$result = mysql_query($query) ;
 	while ($row = $reponse->fetch() )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3252 = ($nom20.' '.$sigle);
?>

<?php //E53
$reponse = $bdd->query("SELECT bdclubs.id, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E53 FROM bdclubs, bdpf$annee WHERE substr(bdclubs.id,-5)=bdpf$annee.E53 and bdpf$annee.id=$id "); // Requête SQL
 //$result = mysql_query($query) ;
 	while ($row = $reponse->fetch() )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3253 = ($nom20.' '.$sigle);
?>

<?php //E54
$reponse = $bdd->query("SELECT bdclubs.id, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E54 FROM bdclubs, bdpf$annee WHERE substr(bdclubs.id,-5)=bdpf$annee.E54 and bdpf$annee.id=$id "); // Requête SQL
 //$result = mysql_query($query) ;
 	while ($row = $reponse->fetch() )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3254 = ($nom20.' '.$sigle);
?>

<?php //E55
$reponse = $bdd->query("SELECT bdclubs.id, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E55 FROM bdclubs, bdpf$annee WHERE substr(bdclubs.id,-5)=bdpf$annee.E55 and bdpf$annee.id=$id "); // Requête SQL
 //$result = mysql_query($query) ;
 	while ($row = $reponse->fetch() )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3255 = ($nom20.' '.$sigle);
?>

<?php //E56
$reponse = $bdd->query("SELECT bdclubs.id, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E56 FROM bdclubs, bdpf$annee WHERE substr(bdclubs.id,-5)=bdpf$annee.E56 and bdpf$annee.id=$id "); // Requête SQL
 //$result = mysql_query($query) ;
 	while ($row = $reponse->fetch() )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3256 = ($nom20.' '.$sigle);
?>

<?php //E57
$reponse = $bdd->query("SELECT bdclubs.id, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E57 FROM bdclubs, bdpf$annee WHERE substr(bdclubs.id,-5)=bdpf$annee.E57 and bdpf$annee.id=$id "); // Requête SQL
 //$result = mysql_query($query) ;
 	while ($row = $reponse->fetch() )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3257 = ($nom20.' '.$sigle);
?>

<?php //E58
$reponse = $bdd->query("SELECT bdclubs.id, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E58 FROM bdclubs, bdpf$annee WHERE substr(bdclubs.id,-5)=bdpf$annee.E58 and bdpf$annee.id=$id "); // Requête SQL
 //$result = mysql_query($query) ;
 	while ($row = $reponse->fetch() )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3258 = ($nom20.' '.$sigle);
?>

<?php //E59
$reponse = $bdd->query("SELECT bdclubs.id, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E59 FROM bdclubs, bdpf$annee WHERE substr(bdclubs.id,-5)=bdpf$annee.E59 and bdpf$annee.id=$id "); // Requête SQL
 //$result = mysql_query($query) ;
 	while ($row = $reponse->fetch() )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3259 = ($nom20.' '.$sigle);
?>

<?php //E60
$reponse = $bdd->query("SELECT bdclubs.id, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E60 FROM bdclubs, bdpf$annee WHERE substr(bdclubs.id,-5)=bdpf$annee.E60 and bdpf$annee.id=$id "); // Requête SQL
 //$result = mysql_query($query) ;
 	while ($row = $reponse->fetch() )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3260 = ($nom20.' '.$sigle);
?>

<?php //E61
$reponse = $bdd->query("SELECT bdclubs.id, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E61 FROM bdclubs, bdpf$annee WHERE substr(bdclubs.id,-5)=bdpf$annee.E61 and bdpf$annee.id=$id "); // Requête SQL
 //$result = mysql_query($query) ;
 	while ($row = $reponse->fetch() )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3261 = ($nom20.' '.$sigle);
?>

<?php //E62
$reponse = $bdd->query("SELECT bdclubs.id, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E62 FROM bdclubs, bdpf$annee WHERE substr(bdclubs.id,-5)=bdpf$annee.E62 and bdpf$annee.id=$id "); // Requête SQL
 //$result = mysql_query($query) ;
 	while ($row = $reponse->fetch() )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3262 = ($nom20.' '.$sigle);
?>

<?php //E63
$reponse = $bdd->query("SELECT bdclubs.id, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E63 FROM bdclubs, bdpf$annee WHERE substr(bdclubs.id,-5)=bdpf$annee.E63 and bdpf$annee.id=$id "); // Requête SQL
 //$result = mysql_query($query) ;
 	while ($row = $reponse->fetch() )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3263 = ($nom20.' '.$sigle);
?>

<?php //E64
$reponse = $bdd->query("	SELECT bdclubs.id, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E64 
			FROM bdclubs, bdpf$annee 
			WHERE substr(bdclubs.id,-5)=bdpf$annee.E64 and bdpf$annee.id=$id "); // Requête SQL
 //$result = mysql_query($query) ;
 	while ($row = $reponse->fetch() )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3264 = ($nom20.' '.$sigle);
?>

<?php
// **************Fédérale 1 **************
if ($id==140)
{

$clubA8001=$clubA3201;
$clubA8002=$clubA3202;
$clubA8003=$clubA3203;
$clubA8004=$clubA3204;

$clubA8005=$clubA3205;
$clubA8006=$clubA3206;
$clubA8007=$clubA3207;
$clubA8008=$clubA3208;

$clubA8009=$clubA3209;
$clubA8010=$clubA3210;
$clubA8011=$clubA3211;
$clubA8012=$clubA3212;

$clubA8013=$clubA3213;
$clubA8014=$clubA3214;
$clubA8015=$clubA3215;
$clubA8016=$clubA3216;

$reponse = $bdd->query("SELECT id, A1601, A1602, A1603, A1604, A1605, A1606, A1607, A1608, A1609, A1610, A1611, A1612, A1613, A1614, A1615, A1616, 
					 A1617, A1618, A1619, A1620, A1621, A1622, A1623, A1624, A1625, A1626, A1627, A1628, A1629, A1630, A1631, A1632 
					 FROM $bdannee_2 
					 WHERE id=$id "); // Requête SQL
 //$result = mysql_query($query) ;
 	while ($row = $reponse->fetch() )
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

	$reponse = $bdd->query("		SELECT id, 	A8001, A8002, A8003, A8004, A8005, A8006, A8007, A8008, 
								A8009, A8010, A8011, A8012, A8013, A8014, A8015, A8016,
					 			A4001, A4002, A4003, A4004, A4005, A4006, A4007, A4008,
								A2001, A2002, A2003, A2004, A1001, A1002 
					 FROM $bdannee_2 
					 WHERE id=$id "); // Requête SQL
 	//$result = mysql_query($query) ;
 	while ($row = $reponse->fetch() )
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
	
<?php   if ($A1601+$A1602>6)  if ($A1601>$A1602 or $A8001>$A8002)	$clubA4001= $clubA8001;	else	$clubA4001= $clubA8002;	 else $clubA4001=$clubA;?>
<?php   if ($A1603+$A1604>6)  if ($A1603>$A1604 or $A8003>$A8004)	$clubA4002= $clubA8003;	else	$clubA4002= $clubA8004;	 else $clubA4002=$clubA;?>

<?php   if ($A1605+$A1606>6)  if ($A1605>$A1606 or $A8005>$A8006)	$clubA4003= $clubA8005;	else	$clubA4003= $clubA8006;	 else $clubA4003=$clubA;?>
<?php   if ($A1607+$A1608>6)  if ($A1607>$A1608 or $A8007>$A8008)	$clubA4004= $clubA8007;	else	$clubA4004= $clubA8008;	 else $clubA4004=$clubA;?>

<?php   if ($A1609+$A1610>6)  if ($A1609>$A1610 or $A8009>$A8010)	$clubA4005= $clubA8009;	else	$clubA4005= $clubA8010;	 else $clubA4005=$clubA;?>
<?php   if ($A1611+$A1612>6)  if ($A1611>$A1612 or $A8011>$A8012)	$clubA4006= $clubA8011;	else	$clubA4006= $clubA8012;	 else $clubA4006=$clubA;?>

<?php   if ($A1613+$A1614>6)  if ($A1613>$A1614 or $A8013>$A8014)	$clubA4007= $clubA8013;	else	$clubA4007= $clubA8014;  else $clubA4007=$clubA;?>
<?php   if ($A1615+$A1616>6)  if ($A1615>$A1616 or $A8015>$A8016)	$clubA4008= $clubA8015;	else	$clubA4008= $clubA8016;	 else $clubA4008=$clubA;?>


<?php //------Demi--------
        if ($A1617+$A1618>6)  if ($A1617>$A1618 or $A4001>$A4002)	$clubA2001= $clubA4001;	else	$clubA2001= $clubA4002;  else $clubA2001=$clubA;?>
<?php   if ($A1619+$A1620>6)  if ($A1619>$A1620 or $A4003>$A4004)	$clubA2002= $clubA4003;	else	$clubA2002= $clubA4004;  else $clubA2002=$clubA;?>

<?php   if ($A1621+$A1622>6)  if ($A1621>$A1622 or $A4005>$A4006)	$clubA2003= $clubA4005;	else	$clubA2003= $clubA4006;  else $clubA2003=$clubA;?>								  
<?php   if ($A1623+$A1624>6)  if ($A1623>$A1624 or $A4007>$A4008)	$clubA2004= $clubA4007;	else	$clubA2004= $clubA4008;  else $clubA2004=$clubA;?>								  
								  
								  
 <?php //------finale--------
        if ($A1625+$A1626>6)  if ($A1625>$A1626 or $A2001>$A2002)	$clubA1001= $clubA2001;	else	$clubA1001= $clubA2002;  else $clubA1001=$clubA;?>
<?php   if ($A1627+$A1628>6)  if ($A1627>$A1628 or $A2003>$A2004)	$clubA1002= $clubA2003;	else	$clubA1002= $clubA2004;  else $clubA1002=$clubA;


}
else



{








?>

<?php
$requete2 = $bdd->query("SELECT A3201, A3202, A3203, A3204, A3205, A3206, A3207, A3208,
				    A3209, A3210, A3211, A3212, A3213, A3214, A3215, A3216,
				    A3217, A3218, A3219, A3220, A3221, A3222, A3223, A3224,
				    A3225, A3226, A3227, A3228, A3229, A3230, A3231, A3232,
				  
				    A3233, A3234, A3235, A3236, A3237, A3238, A3239, A3240,
				    A3241, A3242, A3243, A3244, A3245, A3246, A3247, A3248
				 
				 FROM $bdannee WHERE id=120 "); 
// $result2 = mysql_query($requete2);
 	while ($row = $requete2->fetch() )
	{ 
	$pts2A3201 = $row[0];
	$pts2A3202 = $row[1];
	$pts2A3203 = $row[2];
	$pts2A3204 = $row[3];
	$pts2A3205 = $row[4];
	$pts2A3206 = $row[5];
	$pts2A3207 = $row[6];
	$pts2A3208 = $row[7];
	$pts2A3209 = $row[8];
	$pts2A3210 = $row[9];
	$pts2A3211 = $row[10];
	$pts2A3212 = $row[11];
	$pts2A3213 = $row[12];
	$pts2A3214 = $row[13];
	$pts2A3215 = $row[14];
	$pts2A3216 = $row[15];
	$pts2A3217 = $row[16];
	$pts2A3218 = $row[17];
	$pts2A3219 = $row[18];
	$pts2A3220 = $row[19];
	$pts2A3221 = $row[20];
	$pts2A3222 = $row[21];
	$pts2A3223 = $row[22];
	$pts2A3224 = $row[23];
	$pts2A3225 = $row[24];
	$pts2A3226 = $row[25];
	$pts2A3227 = $row[26];
	$pts2A3228 = $row[27];
	$pts2A3229 = $row[28];
	$pts2A3230 = $row[29];
	$pts2A3231 = $row[30];
	$pts2A3232 = $row[31];
	$pts2A3231 = $row[30];
	$pts2A3232 = $row[31];
	
	$pts2A3233 = $row[32];
	$pts2A3234 = $row[33];
	$pts2A3235 = $row[34];
	$pts2A3236 = $row[35];
	$pts2A3237 = $row[36];
	$pts2A3238 = $row[37];
	$pts2A3239 = $row[38];
	$pts2A3240 = $row[39];
	$pts2A3241 = $row[40];
	$pts2A3242 = $row[41];
	$pts2A3243 = $row[42];
	$pts2A3244 = $row[43];
	$pts2A3245 = $row[44];
	$pts2A3246 = $row[45];
	$pts2A3247 = $row[46];
	$pts2A3248 = $row[47];
	
		
		}
		
		
		

?>

<?php
$requete3 = $bdd->query("SELECT A3201, A3202, A3203, A3204, A3205, A3206, A3207, A3208,
				    A3209, A3210, A3211, A3212, A3213, A3214, A3215, A3216,
				    A3217, A3218, A3219, A3220, A3221, A3222, A3223, A3224,
				    A3225, A3226, A3227, A3228, A3229, A3230, A3231, A3232,
				  
				    A3233, A3234, A3235, A3236, A3237, A3238, A3239, A3240,
				    A3241, A3242, A3243, A3244, A3245, A3246, A3247, A3248,
					A3249, A3250, A3251, A3252, A3253, A3254, A3255, A3256,
				    A3257, A3258, A3259, A3260, A3261, A3262, A3263, A3264
					
				 
				 FROM $bdannee WHERE id=130 "); 
 //$result3 = mysql_query($requete3);
 	while ($row = $requete3->fetch() )
	{ 
	$pts3A3201 = $row[0];
	$pts3A3202 = $row[1];
	$pts3A3203 = $row[2];
	$pts3A3204 = $row[3];
	$pts3A3205 = $row[4];
	$pts3A3206 = $row[5];
	$pts3A3207 = $row[6];
	$pts3A3208 = $row[7];
	$pts3A3209 = $row[8];
	$pts3A3210 = $row[9];
	$pts3A3211 = $row[10];
	$pts3A3212 = $row[11];
	$pts3A3213 = $row[12];
	$pts3A3214 = $row[13];
	$pts3A3215 = $row[14];
	$pts3A3216 = $row[15];
	$pts3A3217 = $row[16];
	$pts3A3218 = $row[17];
	$pts3A3219 = $row[18];
	$pts3A3220 = $row[19];
	$pts3A3221 = $row[20];
	$pts3A3222 = $row[21];
	$pts3A3223 = $row[22];
	$pts3A3224 = $row[23];
	$pts3A3225 = $row[24];
	$pts3A3226 = $row[25];
	$pts3A3227 = $row[26];
	$pts3A3228 = $row[27];
	$pts3A3229 = $row[28];
	$pts3A3230 = $row[29];
	$pts3A3231 = $row[30];
	$pts3A3232 = $row[31];
	$pts3A3231 = $row[30];
	$pts3A3232 = $row[31];
	
	$pts3A3233 = $row[32];
	$pts3A3234 = $row[33];
	$pts3A3235 = $row[34];
	$pts3A3236 = $row[35];
	$pts3A3237 = $row[36];
	$pts3A3238 = $row[37];
	$pts3A3239 = $row[38];
	$pts3A3240 = $row[39];
	$pts3A3241 = $row[40];
	$pts3A3242 = $row[41];
	$pts3A3243 = $row[42];
	$pts3A3244 = $row[43];
	$pts3A3245 = $row[44];
	$pts3A3246 = $row[45];
	$pts3A3247 = $row[46];
	$pts3A3248 = $row[47];
	
	$pts3A3249 = $row[48];
	$pts3A3250 = $row[49];
	$pts3A3251 = $row[50];
	$pts3A3252 = $row[51];
	$pts3A3253 = $row[52];
	$pts3A3254 = $row[53];
	$pts3A3255 = $row[54];
	$pts3A3256 = $row[55];
	$pts3A3257 = $row[56];
	$pts3A3258 = $row[57];
	$pts3A3259 = $row[58];
	$pts3A3260 = $row[59];
	$pts3A3261 = $row[60];
	$pts3A3262 = $row[61];
	$pts3A3263 = $row[62];
	$pts3A3264 = $row[63];
//$pts3A3265 = $row[64];
	
		
		}

?>



<?php // ----32me----------------------
$reponse = $bdd->query("SELECT id, A3201, A3202, A3203, A3204, A3205, A3206, A3207, A3208, A3209, A3210, A3211, A3212, A3213, A3214, A3215, A3216,
 	                 A3217, A3218, A3219, A3220, A3221, A3222, A3223, A3224, A3225, A3226, A3227, A3228, A3229, A3230, A3231, A3232,
                     A3233, A3234, A3235, A3236, A3237, A3238, A3239, A3240, A3241, A3242, A3243, A3244, A3245, A3246, A3247, A3248, 
					 A3249, A3250, A3251, A3252, A3253, A3254, A3255, A3256, A3257, A3258, A3259, A3260, A3261, A3262, A3263, A3264 
					 FROM  $bdannee WHERE id=($id) "); // Requête SQL
 //$result = mysql_query($query) ;
 	while ($row = $reponse->fetch() )
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
$reponse = $bdd->query("SELECT id, A1601, A1602, A1603, A1604, A1605, A1606, A1607, A1608, A1609, A1610, A1611, A1612, A1613, A1614, A1615, A1616, 
					 A1617, A1618, A1619, A1620, A1621, A1622, A1623, A1624, A1625, A1626, A1627, A1628, A1629, A1630, A1631, A1632 
					 FROM $bdannee_2 WHERE id=$id "); // Requête SQL
 //$result = mysql_query($query) ;
 	while ($row = $reponse->fetch() )
	{ 
	$ptsA1601 = $row[1];
	$ptsA1602 = $row[2];
	$ptsA1603 = $row[3];
	$ptsA1604 = $row[4];
	$ptsA1605 = $row[5];
	$ptsA1606 = $row[6];
	$ptsA1607 = $row[7];
	$ptsA1608 = $row[8];
	$ptsA1609 = $row[9];
	$ptsA1610 = $row[10];
	$ptsA1611 = $row[11];
	$ptsA1612 = $row[12];
	$ptsA1613 = $row[13];
	$ptsA1614 = $row[14];
	$ptsA1615 = $row[15];
	$ptsA1616 = $row[16];
	
	$ptsA1617 = $row[17];
	$ptsA1618 = $row[18];
	$ptsA1619 = $row[19];
	$ptsA1620 = $row[20];
	$ptsA1621 = $row[21];
	$ptsA1622 = $row[22];
	$ptsA1623 = $row[23];
	$ptsA1624 = $row[24];
	$ptsA1625 = $row[25];
	$ptsA1626 = $row[26];
	$ptsA1627 = $row[27];
	$ptsA1628 = $row[28];
	$ptsA1629 = $row[29];
	$ptsA1630 = $row[30];
	$ptsA1631 = $row[31];
	$ptsA1632 = $row[32];
	
	
	
	}
 
?>
<?php // ----16me----------------------
$reponse = $bdd->query("SELECT id, A1601, A1602, A1603, A1604, A1605, A1606, A1607, A1608, A1609, A1610, A1611, A1612, A1613, A1614, A1615, A1616, 
					 A1617, A1618, A1619, A1620, A1621, A1622, A1623, A1624, A1625, A1626, A1627, A1628, A1629, A1630, A1631, A1632 
					 FROM $bdannee_2 WHERE id= 130 "); // Requête SQL
 //$result = mysql_query($query) ;
 	while ($row = $reponse->fetch() )
	{ 
	$pts3A1601 = $row[1];
	$pts3A1602 = $row[2];
	$pts3A1603 = $row[3];
	$pts3A1604 = $row[4];
	$pts3A1605 = $row[5];
	$pts3A1606 = $row[6];
	$pts3A1607 = $row[7];
	$pts3A1608 = $row[8];
	$pts3A1609 = $row[9];
	$pts3A1610 = $row[10];
	$pts3A1611 = $row[11];
	$pts3A1612 = $row[12];
	$pts3A1613 = $row[13];
	$pts3A1614 = $row[14];
	$pts3A1615 = $row[15];
	$pts3A1616 = $row[16];
	
	$pts3A1617 = $row[17];
	$pts3A1618 = $row[18];
	$pts3A1619 = $row[19];
	$pts3A1620 = $row[20];
	$pts3A1621 = $row[21];
	$pts3A1622 = $row[22];
	$pts3A1623 = $row[23];
	$pts3A1624 = $row[24];
	$pts3A1625 = $row[25];
	$pts3A1626 = $row[26];
	$pts3A1627 = $row[27];
	$pts3A1628 = $row[28];
	$pts3A1629 = $row[29];
	$pts3A1630 = $row[30];
	$pts3A1631 = $row[31];
	$pts3A1632 = $row[32];
	
	
	
	}
 
?>

<?php // ----16me----------------------
$reponse = $bdd->query("SELECT id, A1601, A1602, A1603, A1604, A1605, A1606, A1607, A1608, A1609, A1610, A1611, A1612, A1613, A1614, A1615, A1616, 
					 A1617, A1618, A1619, A1620, A1621, A1622, A1623, A1624, A1625, A1626, A1627, A1628, A1629, A1630, A1631, A1632 
					 FROM $bdannee_2 WHERE id=$id "); // Requête SQL
 //$result = mysql_query($query) ;
 	while ($row = $reponse->fetch() )
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
$reponse = $bdd->query("	SELECT id, A8001, A8002, A8003, A8004, A8005, A8006, A8007, A8008, A8009, A8010, A8011, A8012, A8013, A8014, A8015, A8016,
					 A4001, A4002, A4003, A4004, A4005, A4006, A4007, A4008,A2001, A2002, A2003, A2004, A1001, A1002 
			FROM $bdannee_2 
			WHERE id=$id "); // Requête SQL
 //$result = mysql_query($query) ;
 	while ($row = $reponse->fetch() )
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
//****** 16me de finale
if ($A1601+$A1602==0) {$A1601="-";	$A1602="-";  $pts3A1601="-";	$pts3A1602="-"; }
if ($A1603+$A1604==0) {$A1603="-";	$A1604="-";  $pts3A1603="-";	$pts3A1604="-"; }
if ($A1605+$A1606==0) {$A1605="-";	$A1606="-";  $pts3A1605="-";	$pts3A1606="-"; }
if ($A1607+$A1608==0) {$A1607="-";	$A1608="-";  $pts3A1607="-";	$pts3A1608="-"; }
if ($A1609+$A1610==0) {$A1609="-";	$A1610="-";  $pts3A1609="-";	$pts3A1610="-"; }
if ($A1611+$A1612==0) {$A1611="-";	$A1612="-";  $pts3A1611="-";	$pts3A1612="-"; }
if ($A1613+$A1614==0) {$A1613="-";	$A1614="-";  $pts3A1613="-";	$pts3A1614="-"; }
if ($A1615+$A1616==0) {$A1615="-";	$A1616="-";  $pts3A1615="-";	$pts3A1616="-"; }
if ($A1617+$A1618==0) {$A1617="-";	$A1618="-";  $pts3A1617="-";	$pts3A1618="-"; }
if ($A1619+$A1620==0) {$A1619="-";	$A1620="-";  $pts3A1619="-";	$pts3A1620="-"; }
if ($A1621+$A1622==0) {$A1621="-";	$A1622="-";  $pts3A1621="-";	$pts3A1622="-"; }
if ($A1623+$A1624==0) {$A1623="-";	$A1624="-";  $pts3A1623="-";	$pts3A1624="-"; }
if ($A1625+$A1626==0) {$A1625="-";	$A1626="-";  $pts3A1625="-";	$pts3A1626="-"; }
if ($A1627+$A1628==0) {$A1627="-";	$A1628="-";  $pts3A1627="-";	$pts3A1628="-"; }
if ($A1629+$A1630==0) {$A1629="-";	$A1630="-";  $pts3A1629="-";	$pts3A1630="-"; }
if ($A1631+$A1632==0) {$A1631="-";	$A1632="-";  $pts3A1631="-";	$pts3A1632="-"; }


//****** 8me de finale
if ($A8001+$A8002==0) {$A8001="-";	$A8002="-";  $pts2A3233="-";	$pts2A3234="-"; }
if ($A8003+$A8004==0) {$A8003="-";	$A8004="-";  $pts2A3235="-";	$pts2A3236="-"; }
if ($A8005+$A8006==0) {$A8005="-";	$A8006="-";  $pts2A3237="-";	$pts2A3238="-"; }
if ($A8007+$A8008==0) {$A8007="-";	$A8008="-";  $pts2A3239="-";	$pts2A3240="-"; }
if ($A8001+$A8002==0) {$A8009="-";	$A8010="-";  $pts2A3241="-";	$pts2A3242="-"; }
if ($A8003+$A8004==0) {$A8011="-";	$A8012="-";  $pts2A3243="-";	$pts2A3244="-"; }
if ($A8005+$A8006==0) {$A8013="-";	$A8014="-";  $pts2A3245="-";	$pts2A3246="-"; }
if ($A8007+$A8008==0) {$A8015="-";	$A8016="-";  $pts2A3247="-";	$pts2A3248="-"; }



if ($A4001+$A4002==0) {$A4001="-";	$A4002="-"; }
if ($A4003+$A4004==0) {$A4003="-";	$A4004="-"; }
if ($A4005+$A4006==0) {$A4005="-";	$A4006="-"; }
if ($A4007+$A4008==0) {$A4007="-";	$A4008="-"; }

if ($A2001+$A2002==0) {$A2001="-";	$A2002="-"; }
if ($A2003+$A2004==0) {$A2003="-";	$A2004="-"; }
 
   
   
   
   
?>

 


<?php	
//mysql_close(); 
?>

<?php $clubA ="-";?>





<?php //-------16me de finale -------
	  if ($A3201+$A3202>0) $clubA1601= $clubA3201;  else	$clubA1601= $clubA3202; ?>
<?php if ($A3203+$A3204>0) $clubA1602= $clubA3203;	else	$clubA1602= $clubA3204; ?>
<?php if ($A3205+$A3206>0) $clubA1603= $clubA3205;	else	$clubA1603= $clubA3206; ?>
<?php if ($A3207+$A3208>0) $clubA1604= $clubA3207;	else	$clubA1604= $clubA3208; ?>
	
<?php if ($A3209+$A3210>0) 	$clubA1605= $clubA3209;	else	$clubA1605= $clubA3210; ?>
<?php if ($A3211+$A3212>0) 	$clubA1606= $clubA3211;	else	$clubA1606= $clubA3212; ?>
<?php if ($A3213+$A3214>0) 	$clubA1607= $clubA3213;	else	$clubA1607= $clubA3214; ?>
<?php if ($A3215+$A3216>0)  $clubA1608= $clubA3215;	else	$clubA1608= $clubA3216; ?>
 
<?php if ($A3217+$A3218>0)  $clubA1609= $clubA3217;	else	$clubA1609= $clubA3218; ?>
<?php if ($A3219+$A3220>0)	$clubA1610= $clubA3219;	else	$clubA1610= $clubA3220; ?>
<?php if ($A3221+$A3222>0) 	$clubA1611= $clubA3221;	else	$clubA1611= $clubA3222; ?>
<?php if ($A3223+$A3224>0) 	$clubA1612= $clubA3223;	else	$clubA1612= $clubA3224; ?>
	  	  
<?php if ($A3225+$A3226>0) 	$clubA1613= $clubA3225;	else	$clubA1613= $clubA3226; ?>
<?php if ($A3227+$A3228>0)	$clubA1614= $clubA3227;	else	$clubA1614= $clubA3228; ?>
<?php if ($A3229+$A3230>0) 	$clubA1615= $clubA3229;	else	$clubA1615= $clubA3230; ?>
<?php if ($A3231+$A3232>0) 	$clubA1616= $clubA3231;	else	$clubA1616= $clubA3232; ?>



	  	  
<?php if ($A3233+$A3234>0) 	$clubA1617= $clubA3233;	else	$clubA1617= $clubA3234; ?>
<?php if ($A3235+$A3236>0) 	$clubA1618= $clubA3235;	else	$clubA1618= $clubA3236; ?>
<?php if ($A3237+$A3238>0) 	$clubA1619= $clubA3237;	else	$clubA1619= $clubA3238; ?>
<?php if ($A3239+$A3240>0) 	$clubA1620= $clubA3239;	else	$clubA1620= $clubA3240; ?>

<?php if ($A3241+$A3242>0) 	$clubA1621= $clubA3241;	else	$clubA1621= $clubA3242; ?>
<?php if ($A3243+$A3244>0) 	$clubA1622= $clubA3243;	else	$clubA1622= $clubA3244; ?>
<?php if ($A3245+$A3246>0)	$clubA1623= $clubA3245;	else	$clubA1623= $clubA3246; ?>
<?php if ($A3247+$A3248>0) 	$clubA1624= $clubA3247;	else	$clubA1624= $clubA3248; ?>

<?php if ($A3249+$A3250>0)	$clubA1625= $clubA3249;	else	$clubA1625= $clubA3250; ?>
<?php if ($A3251+$A3252>0) 	$clubA1626= $clubA3251;	else	$clubA1626= $clubA3252; ?>
<?php if ($A3253+$A3254>0) 	$clubA1627= $clubA3253;	else	$clubA1627= $clubA3254; ?>
<?php if ($A3255+$A3256>0) 	$clubA1628= $clubA3255;	else	$clubA1628= $clubA3256; ?>

<?php if ($A3257+$A3258>0) 	$clubA1629= $clubA3257;	else	$clubA1629= $clubA3258; ?>
<?php if ($A3259+$A3260>0) 	$clubA1630= $clubA3259;	else	$clubA1630= $clubA3260; ?>
<?php if ($A3261+$A3262>0) 	$clubA1631= $clubA3261;	else	$clubA1631= $clubA3262; ?>
<?php if ($A3263+$A3264>0) 	$clubA1632= $clubA3263;	else	$clubA1632= $clubA3264; ?>	
	
<?php //--------8me de finale------
 if ($A1601+$A1602>0)  if ($A1601>$A1602) $clubA8001= $clubA1601;	else	$clubA8001= $clubA1602; else $clubA8001=$clubA;
  if ($A1603+$A1604>0)  if ($A1603>$A1604) $clubA8002= $clubA1603;	else	$clubA8002= $clubA1604; else $clubA8002=$clubA;
  if ($A1605+$A1606>0)  if ($A1605>$A1606) $clubA8003= $clubA1605;	else	$clubA8003= $clubA1606;	else $clubA8003=$clubA;
   if ($A1607+$A1608>0)  if ($A1607>$A1608) $clubA8004= $clubA1607;	else	$clubA8004= $clubA1608;	else $clubA8004=$clubA;

  if ($A1609+$A1610>0)  if ($A1609>$A1610) $clubA8005= $clubA1609;	else	$clubA8005= $clubA1610; else $clubA8005=$clubA;
  if ($A1611+$A1612>0)  if ($A1611>$A1612) $clubA8006= $clubA1611;	else	$clubA8006= $clubA1612; else $clubA8006=$clubA;
  if ($A1613+$A1614>0)  if ($A1613>$A1614) $clubA8007= $clubA1613;	else	$clubA8007= $clubA1614;	else $clubA8007=$clubA;
   if ($A1615+$A1616>0)  if ($A1615>$A1616) $clubA8008= $clubA1615;	else	$clubA8008= $clubA1616;	else $clubA8008=$clubA;

   if ($A1617+$A1618>0)  if ($A1617>$A1618) $clubA8009= $clubA1617;	else	$clubA8009= $clubA1618; else $clubA8009=$clubA;
  if ($A1619+$A1620>0)  if ($A1619>$A1620) $clubA8010= $clubA1619;	else	$clubA8010= $clubA1620; else $clubA8010=$clubA;
  if ($A1621+$A1622>0)  if ($A1621>$A1622) $clubA8011= $clubA1621;	else	$clubA8011= $clubA1622;	else $clubA8011=$clubA;
  if ($A1623+$A1624>0)  if ($A1623>$A1624) $clubA8012= $clubA1623;	else	$clubA8012= $clubA1624; else $clubA8012=$clubA;

 if ($A1625+$A1626>0)  if ($A1625>$A1626) $clubA8013= $clubA1625;	else	$clubA8013= $clubA1626; else $clubA8013=$clubA;
  if ($A1627+$A1628>0)  if ($A1627>$A1628) $clubA8014= $clubA1627;	else	$clubA8014= $clubA1628; else $clubA8014=$clubA;
  if ($A1629+$A1630>0)  if ($A1629>$A1630) $clubA8015= $clubA1629;	else	$clubA8015= $clubA1630;	else $clubA8015=$clubA;
  if ($A1631+$A1632>0)  if ($A1631>$A1632) $clubA8016= $clubA1631;	else	$clubA8016= $clubA1632;	else $clubA8016=$clubA;
?>
	 
	 
	 
	 
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
        if ($A4001+$A4002>0)  if ($A4001>$A4002)	$clubA2001= $clubA4001;	else	$clubA2001= $clubA4002;  else $clubA2001=$clubA;?>
<?php   if ($A4003+$A4004>0)  if ($A4003>$A4004)	$clubA2002= $clubA4003;	else	$clubA2002= $clubA4004;  else $clubA2002=$clubA;?>

<?php   if ($A4005+$A4006>0)  if ($A4005>$A4006)	$clubA2003= $clubA4005;	else	$clubA2003= $clubA4006;  else $clubA2003=$clubA;?>								  
<?php   if ($A4007+$A4008>0)  if ($A4007>$A4008)	$clubA2004= $clubA4007;	else	$clubA2004= $clubA4008;  else $clubA2004=$clubA;?>								  
								  
								  
 <?php //------finale--------
        if ($A2001+$A2002>0)  if ($A2001>$A2002)	$clubA1001= $clubA2001;	else	$clubA1001= $clubA2002;  else $clubA1001=$clubA;?>
<?php   if ($A2003+$A2004>0)  if ($A2003>$A2004)	$clubA1002= $clubA2003;	else	$clubA1002= $clubA2004;  else $clubA1002=$clubA;
}

?>
								  
								  