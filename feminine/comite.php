
<html>
<head>

<?php $sigle = $_GET['variable_1'];?>
<link type= "text/css" href="../league.css"/>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

</head>
<body link="#000000" text="#000000" vlink="#000000" alink="#000000" bgcolor="#FFFFFF">

<?php
echo "<br/>";

// On fait une boucle pour lister tout ce que contient la table :
?>
<?php
require ("connection.php") ;
 ?>

<?php

$reponse = mysql_query("SELECT * FROM bdcomite WHERE sigle='$sigle' "); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
<h1><strong> <?php echo "Comité"?> <?php echo $donnees['nom'];?> </strong></h1>


<?php 

{print("<img src=\"http://francefinalesrugby.franceserv.com/images/comites/$sigle.jpg\" border=\"0\" target=_top>");}
?>

<?php
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<strong> Président : </strong>";echo $donnees['president'];
echo "<br/>";
echo "<br/>";
echo "<strong> Adresse :</strong>";
echo $donnees['batiment'];
echo "<br/>";
echo $donnees['adresse'];echo "<br/>";
echo $donnees['CP'];echo $donnees['ville'];
echo "<br/>";


 ?>
<div align="left"><font color="#000000" size="3"><b> Contacts</b></font>
<p align="center">
<?php echo "<strong> Tél :  </strong>";?> <?php echo $donnees['tel'];echo "<br/>";?>   
<?php echo "<br/>";?>
<?php echo "<strong> Fax :  </strong>";?> <?php echo $donnees['fax'];?> <?php echo "<br/>";?>
<?php echo "<strong> Mél :  </strong>";?> <?php echo $donnees['contact'];?>
<?php
 
 }
mysql_close(); // Déconnexion de MySQL
?>
</div>
<?php
echo "<br/>";
echo "<strong> Site Internet :</strong>";


?>
<?php
require ("connection.php") ;
 ?>

<?php

$query = "SELECT bdcomite.nom, sigle, site, contact FROM bdcomite WHERE bdcomite.sigle='$sigle'";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))

   {
				  
				   echo "  </b> <a href=\"$row[2]\" target=_blank >$row[2]</a>";
        echo "<br>";
		 echo "  </b> <a href=\"$row[3]\">$row[3]</a>";
        echo "<br>";
 	?>
<?php
 
 }

mysql_close(); // Déconnexion de MySQL
?>
<?php
require ("connection.php") ;
 ?>

<?php

$reponse = mysql_query("SELECT * FROM bdcomite WHERE sigle='$sigle' "); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
<?php

echo "<br/>";
echo "<br/>";

echo "----------------------------------------------------------";
echo"<br/>";

?>
<p align="center"> 
  <script type="text/javascript" charset="utf-8" src="http://www.gambling-affiliation.com/cpm/v=v3AjTp6ol4eEUSmc1.6opOmqa91ubcDMxzlhaHRcOBU_&s="></script>
</p>
<div align="left"><h2><B> Présentation du comité :</B></h2></div>
<?php
echo "Le comité se compose  des départements suivants ";echo $donnees['nbre_dep'] ;;echo"<br/>"; echo $donnees['dep1'] ;echo"<br/>"; echo $donnees['dep2'];echo"<br/>";echo $donnees['dep3'] ;echo"<br/>"; echo $donnees['dep4'];echo"<br/>";echo $donnees['dep5'] ;echo"<br/>"; echo $donnees['dep6'];echo $donnees['dep7'] ; echo $donnees['dep8'];echo $donnees['dep9'] ; echo $donnees['dep10'];echo $donnees['dep11'] ; echo $donnees['dep12'];

echo"<br/>";
echo "----------------------------------------------------------";
echo"<br/>";
?>
<div align="left"> <B>Quelques chiffres :</B></div>



<?php


echo "<strong> Nbre de club : </strong>";echo $donnees['nbre_club'];
echo "<br/>";echo "<br/>";
echo "<strong> Effectif senior : </strong>";echo $donnees['nbre_senior'];echo "<br/>";
echo "<strong> Effectif Féminine : </strong>";echo $donnees['nbre_feminine'];echo "<br/>";
echo "<strong> Effectif Jeune : </strong>";echo $donnees['nbre_jeune'];echo "<br/>";
echo "<strong> Effectif dirigeant : </strong>";echo $donnees['nbre_dirigeant'];echo "<br/>";
echo "<br/>";
}
?>
<?php
echo "----------------------------------------------------------";
echo"<br/>";

?>
<?php
 


mysql_close(); // Déconnexion de MySQL
?>
<div align="center"><font color="#000000" size="5"><b><br>
  <br>
  Palmar&egrave;s </b></font>du comit&eacute; <br>
  <?php
require ("connection.php") ;
 ?>
  <?php

$reponse = mysql_query("SELECT * FROM bdequipe1 WHERE comite1='$sigle'and titre='Champion' and  championnat='de France' order by saison DESC limit 0,10"); // Requête SQL
echo"<br/>";
 // On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ ?>
  <?php echo $donnees['saison']; ?>
  Champion 
  <?php echo $donnees['championnat'];  ?>
  <?php echo $donnees['division'];  ?>
  : <strong> 
  <?php echo $donnees['champion']; ?>
  </strong> 
  <?php
 echo "<br/>";
 }
mysql_close(); // Déconnexion de MySQL
?>
  <?php   echo "<br/>"; ?>
</div>
<p>&nbsp;</p>
<div align="left"></div>

 <p><font color="#000000" size="5"><b>Clubs du comit&eacute;</b></font></p>
<p><font color="#000000" link="#000000" vlink="#000000" alink="#000000"> 
  <?php
require ("connection.php") ;
 ?>
  <?php

$query = "SELECT bdsaisons.id, bdclubs.nom_1, bdclubs.url, bdclubs.logo, bdclubs.url FROM bdsaisons, bdclubs WHERE bdsaisons.code_bdsaison=bdclubs.code and bdsaisons.siglecomite='$sigle' ";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {                 
                   
                 
				  echo "<img src=\"$row[4]\">";
				   echo "  </b> <a href=\"$row[3]\">$row[1]</a>";
        echo "<br>";
		
		?>
  </font> <font color="#000000"> 
  <?php
 
 }
mysql_close(); // Déconnexion de MySQL
?>
  </font> </p>
 
<p align="left">&nbsp;
<p align="center">&nbsp; 
<table width="460" height="10" cellspacing="0" cellpadding="0" border="1" bordercolor="#000000">
  <tr> 
    <td bgcolor="#006699" align="center" valign="top" height="10">&nbsp; </td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
