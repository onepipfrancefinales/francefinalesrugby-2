<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body bgcolor="#FFFFFF" text="#000000">
<p><b><font size="4" face="Arial, Helvetica, sans-serif">Membre modifi&eacute;</font></b></p>
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

<?php $admin = $_POST['admin'];?>
<?php echo $admin;?>


 <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "Lavelan1969&"); 
mysql_select_db("$bd"); 
?>
  <?php
mysql_query("UPDATE $comite SET admin ='$admin' WHERE  id ='$ID' "); // Requ�te SQL
?>

   <?php
 
mysql_close(); // D�connexion de MySQL

?>


<?php
mysql_connect("sql.franceserv.fr", "onepip-france", "Lavelan1969&"); // Connexion � MySQL
mysql_select_db("$bd"); // S�lection de la base onepip
?>
  <?php
$reponse = mysql_query("SELECT id, pseudo, mot_de_passe,nom,pays,admin FROM $comite WHERE id ='$ID' ORDER BY id DESC"); // Requ�te SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
</p>
<p><font face="Arial, Helvetica, sans-serif"><font size="3"> 
  <?php echo $donnees['id'].' '.$donnees['pseudo'].' '.$donnees['mot_de_passe'].' '.$donnees['mail'].''.$donnees['nom'].''.$donnees['pays'].''.$donnees['admin']; ?>
  </font></font> <br/>
<p>   <?php
 }
mysql_close(); // D�connexion de MySQL
?>