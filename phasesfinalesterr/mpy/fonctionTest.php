<?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); 
mysql_select_db("onepip-france-db1"); 


$id = 170;
$annee = 2017;
?>




<?php //E01

$query = "	SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E01 
			FROM bdclubs, bdpf$annee 
			WHERE bdclubs.code=bdpf$annee.E01 and bdpf$annee.id=$id "; 
$result = mysql_query($query) or die(mysql_error());
while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);	
$clubA3201 = ($nom20.' '.$sigle);

//E02
$query = "	SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E02 
			FROM bdclubs, bdpf$annee 
			WHERE bdclubs.code=bdpf$annee.E02 and bdpf$annee.id=$id "; 
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3202 = ($nom20.' '.$sigle);


//E03
$requete = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E03 
			FROM bdclubs, bdpf$annee 
			WHERE bdclubs.code=bdpf$annee.E03 and bdpf$annee.id=$id"; 
 $result = mysql_query($requete) ;
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3203 = ($nom20.' '.$sigle);


//E04
$query = "	SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E04 
			FROM bdclubs, bdpf$annee 
			WHERE bdclubs.code=bdpf$annee.E04 and bdpf$annee.id=$id "; 
 $result = mysql_query($query) ;
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3204 = ($nom20.' '.$sigle);


//E05
$query = "	SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E05 
			FROM bdclubs, bdpf$annee 
			WHERE bdclubs.code=bdpf$annee.E05 and bdpf$annee.id=$id "; 

 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3205 = ($nom20.' '.$sigle);
?>

<?php
echo clubA3201;
echo clubA3202;
echo clubA3203;
echo clubA3204;
echo clubA3205;
?>