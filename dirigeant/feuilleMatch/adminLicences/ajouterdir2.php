<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body bgcolor="#FFFFFF" text="#000000">
<p>&nbsp;</p>

<p><b><font size="4" face="Arial, Helvetica, sans-serif">Ajout d'un dirigeant</font></b></p>

<?php echo $bdcomite;?>
<?php $nomdir = $_POST['nomdir'];?>
<?php $prenomdir = $_POST['prenomdir'];?>
<?php $licencedir = $_POST['licencedir'];?>
<?php $fonction = $_POST['fonction'];?>
<?php $bdcomite=("php".''.$comite.''."_joueurs");?>

<?php


// **** traitement du Nom ****** 
$nomdir=str_replace(' ','-',$nomdir);
$nomDir = strtoupper ($nomdir);

// **** traitement du Prénom ****** 
$prenomdir=str_replace(' ','-',$prenomdir);
$prenomDir = strtoupper(substr($prenomdir, 0, 1)).strtolower(substr($prenomdir, 1));


// **** traitement du numéro de la licence ******
$annee = substr($licencedir,0,4);
$deux = substr($licencedir,4,2);
$un = substr($licencedir,6,1);
$fin = substr($licencedir,7,6);

//echo $annee;echo "<br />";
//echo $deux;echo "<br />";
//echo $un;echo "<br />";
//echo $fin;echo "<br />";


$licenceDirAffichage = $annee." ".$deux." ".$un." ".$fin;

echo "Nom :".' '.$nomDir;
echo "<br />";
echo "Pr&eacute;nom :".' '.$prenomDir;
echo "<br />";
echo "Num&eacute;ro de licence :".' '.$licenceDirAffichage;
echo "<br />";
echo $licenceDir;
echo "Fonction :".' '.$fonction;
?>




<?php
require("../../../$connect.php")
//mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion à MySQL
//mysql_select_db("onepip-france-db2"); // Sélection de la base onepip
?>

<?php 
$nb=mysql_query("SELECT MAX(id_perso) 
				FROM $bdcomite 
				WHERE club=$equipe AND photo='5' ");

$nb=mysql_fetch_array($nb);
echo "$nb2[0]"; 
?>
<br/>
<?php 
//$a= 1;
$nb3=$nb2[0] + $a;
//echo $nb3;
?>
<br/>
<?php
echo $a;
?>

<?php
mysql_query (" INSERT INTO $bdcomite Values ('$nomDir','$nomDir','$prenomDir','0000-00-00','$licenceDir','$fonction','0','$comite','$equipe','5','$nb3','')");
?>
<?php
 
mysql_close(); 

?>

<p>&nbsp;
<p>&nbsp;

