<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
 <?php $code_match=$_GET['code_match']; ?><?php echo $code_match; ?>
 <?php $connect=$_GET['connect']; ?><?php echo $connect; ?>
  <?php $bdfeuilleA=$_GET['bdfeuilleA']; ?><?php echo $bdfeuilleA; ?>
  <?php $bdfeuilleB=$_GET['bdfeuilleB']; ?><?php echo $bdfeuilleB; ?>
  <?php $equipe=$_GET['equipe']; ?>
   <?php $equipeA=$_GET['equipeA']; ?>
    <?php $equipeB=$_GET['equipeB']; ?>
    <?php $id_equipe=$_GET['id_equipe']; ?>
	 <?php $php=$_GET['php']; ?>
	 <?php $comite=$_GET['comite']; ?>
<body bgcolor="#FFFFFF" text="#000000">
<div align="left"><font size="6" face="Arial, Helvetica, sans-serif"><b>Formulaire 
  de saisie du r&eacute;sultat de la rencontre</b><b></b></font> </div>
<form method="post" action="formulairesaisiescore2.php?code_match=<?php echo $code_match;?>&comite=<?php echo $comite;?>&php=<?php echo $php;?>&id_equipe=<?php echo $id_equipe;?>&equipe=<?php echo $equipe;?>&connect=<?php echo $connect;?>&bdfeuilleA=<?php echo $bdfeuilleA;?>&bdfeuilleB=<?php echo $bdfeuilleB;?>&equipeA=<?php echo $equipeA;?>&equipeB=<?php echo $equipeB;?>">
  <p>&nbsp; </p>
  <table width="760" border="0">
    <tr> 
      <td colspan="2" bgcolor="#0000FF" height="20"><b><font face="Arial, Helvetica, sans-serif" size="4" color="#FFFFFF">Equipe 
        A : 
        <?php
 require ("../../$connect.php")
//mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion à MySQL
//mysql_select_db("onepip-france-db1"); // Sélection de la base onepip
?>
        <?php

$query = "SELECT code, nom_1, sigle FROM bdclubs where id='$equipeA'";
$result = mysql_query($query) or die (mysql_error());
while ($row = mysql_fetch_array($result) )
{
$codeA= $row[0]; 
$sigleA= $row[2];        
}
echo $sigleA;
?>
        </font></b></td>
      <td width="47" height="20">&nbsp;</td>
      <td colspan="2" bgcolor="#FF0000" height="20"><b><font face="Arial, Helvetica, sans-serif" size="4">Equipe 
        B: 
        <?php
 require ("../../$connect.php")
//mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion à MySQL
//mysql_select_db("onepip-france-db1"); // Sélection de la base onepip
?>
        <?php

$query = "SELECT code, nom_1, sigle FROM bdclubs where id='$equipeB'";
$result = mysql_query($query) or die (mysql_error());
while ($row = mysql_fetch_array($result) )
{
$codeA= $row[0]; 
$sigleA= $row[2];        
}
echo $sigleA;
?>
        </font></b></td>
    </tr>
    <tr> 
      <td width="212" bgcolor="#0000FF"><b><font face="Arial, Helvetica, sans-serif" size="4" color="#FFFFFF">Nbre 
        d'essai</font></b></td>
      <td width="41" bgcolor="#0000FF"> <font color="#FFFFFF"><b><font face="Arial, Helvetica, sans-serif" size="4"> 
        <input type="text" name="essaiA" size="2">
        </font></b></font></td>
      <td width="47">&nbsp;</td>
      <td width="191" bgcolor="#FF0000"><b><font face="Arial, Helvetica, sans-serif" size="4">Nbre 
        d'essai</font></b></td>
      <td width="65" bgcolor="#FF0000"> <font face="Arial, Helvetica, sans-serif" size="4"><b> 
        <input type="text" name="essaiB" size="2">
        </b></font></td>
    </tr>
    <tr> 
      <td width="212" bgcolor="#0000FF"><b><font face="Arial, Helvetica, sans-serif" size="4" color="#FFFFFF">Transformation</font></b></td>
      <td width="41" bgcolor="#0000FF"> <font color="#FFFFFF"><b><font face="Arial, Helvetica, sans-serif" size="4"> 
        <input type="text" name="transfA" size="2">
        </font></b></font></td>
      <td width="47">&nbsp;</td>
      <td width="191" bgcolor="#FF0000"><b><font face="Arial, Helvetica, sans-serif" size="4">Transformation</font></b></td>
      <td width="65" bgcolor="#FF0000"> <font face="Arial, Helvetica, sans-serif" size="4"><b> 
        <input type="text" name="transfB" size="2">
        </b></font></td>
    </tr>
    <tr> 
      <td width="212" bgcolor="#0000FF"><b><font face="Arial, Helvetica, sans-serif" size="4" color="#FFFFFF">P&eacute;nalit&eacute;</font></b></td>
      <td width="41" bgcolor="#0000FF"> <font color="#FFFFFF"><b><font face="Arial, Helvetica, sans-serif" size="4"> 
        <input type="text" name="penaliteA" size="2">
        </font></b></font></td>
      <td width="47">&nbsp;</td>
      <td width="191" bgcolor="#FF0000"><b><font face="Arial, Helvetica, sans-serif" size="4">P&eacute;nalit&eacute;</font></b></td>
      <td width="65" bgcolor="#FF0000"> <font face="Arial, Helvetica, sans-serif" size="4"><b> 
        <input type="text" name="penaliteB" size="2">
        </b></font></td>
    </tr>
    <tr> 
      <td width="212" bgcolor="#0000FF"><b><font face="Arial, Helvetica, sans-serif" size="4" color="#FFFFFF">Drop 
        Goal</font></b></td>
      <td width="41" bgcolor="#0000FF"> <font color="#FFFFFF"><b><font face="Arial, Helvetica, sans-serif" size="4"> 
        <input type="text" name="drop1A" size="2">
        </font></b></font></td>
      <td width="47">&nbsp;</td>
      <td width="191" bgcolor="#FF0000"><b><font face="Arial, Helvetica, sans-serif" size="4">Drop 
        Goal</font></b></td>
      <td width="65" bgcolor="#FF0000"> <font face="Arial, Helvetica, sans-serif" size="4"><b> 
        <input type="text" name="drop1B" size="2">
        </b></font></td>
    </tr>
    <tr> 
      <td width="212">&nbsp;</td>
      <td width="41">&nbsp;</td>
      <td width="47">&nbsp;</td>
      <td width="191">&nbsp;</td>
      <td width="65">&nbsp;</td>
    </tr>
    <tr> 
      <td colspan="5"> 
        <input type="submit" value="Valider" name="submit322" />
      </td>
    </tr>
  </table>
  <p>&nbsp; </p>
  <p>&nbsp; </p>
</form>
</body>
</html>
