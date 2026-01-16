<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<?php $responsable= $_POST['responsable'];?>
<body bgcolor="#FFFFFF" text="#000000">
<table width="900" border="1" cellspacing="0" cellpadding="0">
  <tr bordercolor="#000000"> 
    <td colspan="4"> 
      <div align="center"><b><font face="Arial, Helvetica, sans-serif">VISAS DES 
        REDACTION DE LA FEUILLE DE MATCH AVANT LE COUP D'ENVOI</font></b></div>
    </td>
  </tr>
  <tr valign="middle" bordercolor="#000000"> 
    <td width="167" height="24"><font face="Arial, Helvetica, sans-serif" size="2">Nom:<b> 
      <?php
require ("../../../connect/connexion1.php")		  
//mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion à MySQL
//mysql_select_db("onepip-france-db1"); // Sélection de la base onepip
?>
      <?php $bdcomite=("php".''.$comite.''."_joueurs");?>
      <?php $bdfeuilleA=("php".''.$comite.''."_feuilleA");?>
      <?php $bdfeuilleB=("php".''.$comite.''."_feuilleB");?>
      <?php
$query = "SELECT responsable FROM $bdfeuilleA where id='$code_match'";
$result = mysql_query($query);
while ($row = mysql_fetch_array($result) )
			{
  			$responsableA=$row[0];
  
           }
  if ($responsableA!==0)
		  echo $responsableA;
		   else
		     echo "";
		   
?>
      </b></font></td>
    <td width="197" height="24"><font face="Arial, Helvetica, sans-serif" size="2">Pr&eacute;nom 
      : 
      <?php

$query = "SELECT nom, prenom, position_terrain FROM $bdcomite where nom='$responsableA' and club='$equipeA'and photo='3'";
$result = mysql_query($query);
while ($row = mysql_fetch_array($result) )
{ 
  $prenomresponsableA=$row[1];
  echo $prenomresponsableA;
           }		   
?>
      </font></td>
    <td width="182" height="24"><font face="Arial, Helvetica, sans-serif" size="2">Nom 
      :<b> 
      <?php

$query = "SELECT responsable FROM $bdfeuilleB where id='$code_match'";
$result = mysql_query($query);
while ($row = mysql_fetch_array($result) )
{
   $responsableB=$row[0];
  
           }
		   if ($responsableB!==0)
		  echo $responsableB;
		   else
		     echo "";
		   
?>
      </b></font></td>
    <td width="219" height="24"><font face="Arial, Helvetica, sans-serif" size="2">Pr&eacute;nom 
      : 
      <?php

$query = "SELECT nom, prenom, position_terrain FROM $bdcomite where nom='$responsableB' and club='$equipeB'and photo='3'";
$result = mysql_query($query);
while ($row = mysql_fetch_array($result) )
{ 
  $prenomresponsableB=$row[1];
  echo $prenomresponsableB;
           }		   
?>
      </font></td>
  </tr>
  <tr valign="middle" bordercolor="#000000"> 
    <td colspan="2" height="29"><font face="Arial, Helvetica, sans-serif" size="2">N&deg;licence 
      : 
      <?php

$query = "SELECT nom, position_terrain FROM $bdcomite where nom='$responsableA'and club='$equipeA'and photo='3'";
$result = mysql_query($query);
while ($row = mysql_fetch_array($result) )
{ 
  $licenceresponsableA=$row[1];
  echo $licenceresponsableA;
           }		   
?>
      </font></td>
    <td colspan="2" height="29"><font face="Arial, Helvetica, sans-serif" size="2">N&deg;licence 
      : 
      <?php

$query = "SELECT nom, position_terrain FROM $bdcomite where nom='$responsableB' and club='$equipeB'and photo='3'";
$result = mysql_query($query);
while ($row = mysql_fetch_array($result) )
{ 
  $licenceresponsableB=$row[1];
  echo $licenceresponsableB;
           }		   
?>
      </font></td>
  </tr>
</table>
</body>
</html>
