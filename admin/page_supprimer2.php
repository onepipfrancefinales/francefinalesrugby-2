<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body bgcolor="#FFFFFF" text="#000000">
<p><b><font size="4" face="Arial, Helvetica, sans-serif">Membre supprim�</font></b></p>
<?php $bd2 = $_POST['bd'];?>
<?php $bd1 = "onepip-france-db";?>
<?php $bd=$bd1.$bd2;?>
<?php echo $bd;?>


<?php  $co= "php";?>
<?php  $mi= $_POST['comite'];?>
<?php  $te= "_membres";?>

<?php $comite= $co.$mi.$te;?>
<?php echo $comite;?>


<?php $ID = $_POST['ID'];?>
<?php echo $ID;?>

 <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "Lavelan1969&"); 
mysql_select_db("$bd"); 
?>
  <?php
mysql_query("DELETE FROM $comite WHERE id ='$ID' "); // Requ�te SQL
?>

   <?php
 
mysql_close(); // D�connexion de MySQL
?>