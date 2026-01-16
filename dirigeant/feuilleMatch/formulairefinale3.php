<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body bgcolor="#FFFFFF" text="#000000">
  <?php $php=$_GET['php']; ?>
  <?php $connect=$_GET['connect']; ?>
  <?php $id_equipe=$_GET['id_equipe']; ?>
  <?php $equipe=$_GET['equipe']; ?>
    <?php $comite=$_GET['comite']; ?>

  
  <?php $connect=$_GET['connect']; ?><?php echo $connect; ?>
  <?php $bdfeuilleA=$_GET['bdfeuilleA']; ?><?php echo $bdfeuilleA; ?>
  <?php $bdfeuilleB=$_GET['bdfeuilleB']; ?><?php echo $bdfeuilleB; ?>
  <?php $equipeA=$_GET['equipeA']; ?><?php echo $equipeA; ?>
  <?php $equipeB=$_GET['equipeB']; ?><?php echo $equipeB; ?>
  <?php $date=$_GET['date']; ?><?php echo $date; ?>
  <?php $terrain=$_GET['terrain']; ?><?php echo $terrain; ?>
  <?php $championnat=$_GET['championnat']; ?><?php echo $championnat; ?>
  <?php $division=$_GET['division']; ?><?php echo $division; ?>
 
  
  <?php $ville=$_GET['ville']; ?><?php echo $ville; ?>

<?php
require ("../../$connect.php")
//mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion à MySQL
//mysql_select_db("onepip-france-db1"); // Sélection de la base onepip
?>
<?php 

 $requete=mysql_query("SELECT Max(id) from $bdfeuilleA where id>900  "); // Requête SQL
 $nb=mysql_fetch_array($requete);
$id= "$nb[0]"; 
$numeroid=$id+1;
echo $numeroid;
?>

<?php
// require ("../../$connect.php")
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion à MySQL
mysql_select_db("onepip-france-db1"); // Sélection de la base onepip
?>
<?php
   mysql_query (" INSERT INTO $bdfeuilleA Values ('$numeroid','$equipeA','$equipeB','$date','$terrain','$ville','$division','$championnat','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')");
?>
<?php	
   mysql_query (" INSERT INTO $bdfeuilleB Values ('$numeroid','$equipeA','$equipeB','$date','$terrain','$ville','$division','$championnat','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')");
	?>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>Votre rencontre a &eacute;t&eacute; cr&eacute;&eacute;r, vous pouvez aller 
  faire votre feuille de match </p>
<div align="left">
  <p>&nbsp;</p>
  <p><a href="page_liste_compet1.php?comite=<?php echo $comite;?>&php=<?php echo $php;?>&connect=<?php echo $connect;?>&id_equipe=<?php echo $id_equipe;?>&equipe=<?php echo $equipe;?>&numeroid=<?php echo $numeroid;?>&equipeA=<?php echo $codeA;?>&equipeB=<?php echo $codeB;?>&date=<?php echo $date;?>&terrain=<?php echo $terrain;?>&division=<?php echo $division;?>&ville=<?php echo $ville;?>&championnat=<?php echo $championnat;?>&bdfeuilleA=<?php echo $bdfeuilleA;?>&bdfeuilleB=<?php echo $bdfeuilleB;?>">Confirmer 
    les donn&eacute;es saisies</a></p>
  <p>
</div>

</body>
</html>
