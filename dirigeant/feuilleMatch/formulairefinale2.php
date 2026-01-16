<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<?php $connect=$_GET['connect']; ?><?php echo $connect; ?>
  <?php $bdfeuilleA=$_GET['bdfeuilleA']; ?><?php echo $bdfeuilleA; ?>
  <?php $bdfeuilleB=$_GET['bdfeuilleB']; ?><?php echo $bdfeuilleB; ?>
<body bgcolor="#FFFFFF" text="#000000">
<p> 
  
  <?php $php=$_GET['php']; ?>
  <?php $connect=$_GET['connect']; ?>
  <?php $id_equipe=$_GET['id_equipe']; ?>
  <?php $equipe=$_GET['equipe']; ?>
    <?php $comite=$_GET['comite']; ?>
  
  
  <?php $equipeA=$_POST['equipeA']; ?>
  <?php $equipeB=$_POST['equipeB']; ?>
  <?php $championnat=$_POST['championnat']; ?>
  <?php $division=$_POST['division']; ?>
  <?php $date=$_POST['date']; ?>
  <?php $terrain=$_POST['terrain']; ?>
  <font size="6" face="Arial, Helvetica, sans-serif"> <b>
  <?php $ville=$_POST['ville']; ?>
  V&eacute;rification des &eacute;l&eacute;ments saisies</b></font></p>
<p>&nbsp;</p>
<p>Equipe A : 
  <?php echo $equipeA; ?>
  <b> 
  <?php
  
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); 
mysql_select_db("onepip-france-db1"); 
?>
  ---- 
  <?php

$query = "SELECT code, nom_1, sigle FROM bdclubs where idffr='$equipeA'";
$result = mysql_query($query) or die (mysql_error());
while ($row = mysql_fetch_array($result) )
{
$codeA= $row[0]; 
$sigleA= $row[2];        
}


echo $sigleA;
?>
  </b></p>
<p>Equipe B: 
  <?php echo $equipeB; ?>
  <b> ----- 
  <?php

$query = "SELECT code, nom_1, sigle FROM bdclubs where idffr='$equipeB'";
$result = mysql_query($query) or die (mysql_error());
while ($row = mysql_fetch_array($result) )
{
$codeB= $row[0];
$sigleB= $row[2];        
}
echo $sigleB;
?>
  </b></p>
<p>Ev&eacute;nement: 
  <?php echo $championnat; ?>
</p>
<p>Division :
  <?php echo $division; ?>
</p>
<p>Date:
  <?php echo $date; ?>
</p>
<p>Stade : 
  <?php echo $terrain; ?>
  Ville : 
  <?php echo $ville; ?>
</p>
<p>&nbsp;</p>
<p><a href="formulairefinale3.php?comite=<?php echo $comite;?>&php=<?php echo $php;?>&connect=<?php echo $connect;?>&id_equipe=<?php echo $id_equipe;?>&equipe=<?php echo $equipe;?>&numeroid=<?php echo $numeroid;?>&equipeA=<?php echo $codeA;?>&equipeB=<?php echo $codeB;?>&date=<?php echo $date;?>&terrain=<?php echo $terrain;?>&division=<?php echo $division;?>&ville=<?php echo $ville;?>&championnat=<?php echo $championnat;?>&bdfeuilleA=<?php echo $bdfeuilleA;?>&bdfeuilleB=<?php echo $bdfeuilleB;?>">Confirmer les donn&eacute;es saisies</a></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
