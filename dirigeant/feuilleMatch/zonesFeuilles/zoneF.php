<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
</head>
 
 <body>
  <?php
   require ("../../../$connect.php")
//mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); 
//mysql_select_db("onepip-france-db1"); 
?>
<?php mysql_query ("SET NAMES UTF8"); ?>
<?php 
$requete="SELECT date, terrain, ville, division, poule FROM $bdfeuilleA where id='$code_match'";
$result = mysql_query($requete);
while ($row = mysql_fetch_array($result) )
{
$date=$row[0];
$terrain=$row[1];
$ville=$row[2];
$division=$row[3];
$evenement=$row[4];
}

?>
<table width="900" border="1" height="72" bordercolor="#000000" cellspacing="0">
  <tr> 
    <td width="367" rowspan="3"> 
      <div align="center"><b><font face="Arial, Helvetica, sans-serif" size="6">
        <?php echo $evenement;?>
        </font></b></div>
    </td>
    <td width="171" height="32" valign="top"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif">Date de la<br>
        rencontre </font></div>
    </td>
    <td width="206" height="32"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif">Terrain</font></div>
    </td>
    <td width="138" height="32" valign="middle"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif">Division</font></div>
    </td>
  </tr>
  <tr> 
    <td rowspan="2" height="76" width="171"> 
      <div align="center"><b><font face="Arial, Helvetica, sans-serif" size="4"> 
        <?php echo $date;?>
        </font></b></div>
    </td>
    <td width="206" height="16"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif" size="4"> 
        <?php echo $terrain;?>
        </font></div>
    </td>
    <td rowspan="2" height="76" width="138"> 
      <div align="center"><b><font face="Arial, Helvetica, sans-serif" size="5"> 
        <?php
		 
		  echo $division; 
		  ?>
        </font></b></div>
    </td>
  </tr>
  <tr> 
    <td width="206" height="2"> 
      <div align="center"><b><font face="Arial, Helvetica, sans-serif" size="4"> 
        <?php echo $ville;?>
        </font></b></div>
    </td>
  </tr>
</table>
<img src="entetedessous.bmp" width="900" height="55"> 
<?php
	require ("../../../$connect.php")	
	  
		  
//mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion à MySQL
//mysql_select_db("onepip-france-db1"); // Sélection de la base onepip
?>
<?php

 $sql = "UPDATE bdfeuilleA
            SET  date='$date',organisateur='$organisateur',tel='$tel',division='$code_div',poule='$poule'
		    WHERE id = $id " ;
 
  //exécution de la requête SQL:
  $requete = mysql_query( $sql )   ;
 
?>
</body>
</html>
