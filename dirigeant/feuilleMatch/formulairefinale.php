<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
  <?php $php=$_GET['php']; ?>
  <?php $connect=$_GET['connect']; ?>
  <?php $id_equipe=$_GET['id_equipe']; ?>
  <?php $equipe=$_GET['equipe']; ?>
   <?php $comite=$_GET['comite']; ?>
 
 
 <?php $connect=$_GET['connect']; ?><?php echo $connect; ?>
  <?php $bdfeuilleA=$_GET['bdfeuilleA']; ?><?php echo $bdfeuilleA; ?>
  <?php $bdfeuilleB=$_GET['bdfeuilleB']; ?><?php echo $bdfeuilleB; ?>
<body bgcolor="#FFFFFF" text="#000000">
<div align="left"><font size="6" face="Arial, Helvetica, sans-serif"><b>Formulaire 
  &agrave; compl&egrave;ter pour cr&eacute;er une rencontre </b><b></b></font> 
</div>
<form method="post" action="formulairefinale2.php?comite=<?php echo $comite;?>&php=<?php echo $php;?>&connect=<?php echo $connect;?>&id_equipe=<?php echo $id_equipe;?>&equipe=<?php echo $equipe;?>&bdfeuilleA=<?php echo $bdfeuilleA;?>&bdfeuilleB=<?php echo $bdfeuilleB;?>">
  <p> Equipe A 
    <input type="text" name="equipeA">
    (Code FFR du club)</p>
  <p>Equipe B 
    <input type="text" name="equipeB">
    (Code FFR du club)</p>
  <p>Championnat 
    <input type="text" name="championnat">
  </p>
  <p>Division
    <input type="text" name="division">
  </p>
  <p>Date
    <input type="text" name="date">
  </p>
  <p>Nom du Stade 
    <input type="text" name="terrain">
    Ville 
    <input type="text" name="ville">
  </p>
  <p> <input type="submit" value="Valider" name="submit322" /></p>
</form>
</body>
</html>
