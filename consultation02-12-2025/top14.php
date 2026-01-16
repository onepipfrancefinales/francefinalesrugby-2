
 <div align="center"> </div>
<p>&nbsp; </p>
<p align="center"><b><font size="7" face="Arial, Helvetica, sans-serif">Champions 
  de France</font></b></p><br/><br/>
<p> 
  <?php
require ("../connect/connection1.php") ;
 ?>
  <font face="Arial, Helvetica, sans-serif" size="4"><b> <font size="5">Champions 
  de France TOP 14</font></b></font><br/>
  (14 Clubs) <br/>
  <br/>
  <?php

$reponse = mysql_query("SELECT * 
						FROM bdequipe1 
						WHERE rang2='110'and titre='champion'
						ORDER BY saison DESC"); 

// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
  <h4>
  <?php echo $donnees['saison']; ?>
  : 
  <?php echo $donnees['champion'];  ?>
  <?php echo $donnees['comite1']; ?>
  </h4>
  <?php
 }
 ?>
  <br/>
  <br/>
  <font face="Arial, Helvetica, sans-serif" size="4"><b> <font size="5">Champions 
  de France TOP 16</font></b></font><br/>
  (16 Clubs) <br/>
  <br/>
  <?php
 $reponse = mysql_query("SELECT * FROM bdequipe1 WHERE rang2='119'and titre='champion'ORDER BY saison DESC"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
  <h4>
  <?php echo $donnees['saison']; ?>
  : 
  <?php echo $donnees['champion'];  ?>
  <?php echo $donnees['comite1']; ?>
 </h4>
  <?php
 }
 ?>
  <br/>
  <br/>
  <font face="Arial, Helvetica, sans-serif" size="4"><b> <font size="5">Champions 
  de France Elite 1</font></b></font><br/>
  ( Clubs) <br/>
  <br/>
  <?php
$reponse = mysql_query("SELECT * FROM bdequipe1 WHERE rang2='118'and titre='champion'ORDER BY saison DESC"); // Requête SQL
 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
  <h4>
  <?php echo $donnees['saison']; ?>
  : 
  <?php echo $donnees['champion'];  ?>
  <?php echo $donnees['comite1']; ?>
  </h4>
  <?php
 }
 ?>
  <br/>
  <br/>
  <font face="Arial, Helvetica, sans-serif" size="4"><b> <font size="5">Champions 
  de France Groupe A1</font></b></font><br/>
  ( Clubs) <br/>
  <br/>
  <?php 
$reponse = mysql_query("SELECT * FROM bdequipe1 WHERE rang2='117'and titre='champion'ORDER BY saison DESC"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
  <h4>
  <?php echo $donnees['saison']; ?>
  : 
  <?php echo $donnees['champion'];  ?>
  <?php echo $donnees['comite1']; ?>
	</h4>
  <?php
 }
 ?>
  <br/>
  <br/>
  <font face="Arial, Helvetica, sans-serif" size="4"><b> <font size="5">Champions 
  de France Groupe A</font></b></font><br/>
  ( Clubs) <br/>
  <br/>
  <?php 
$reponse = mysql_query("SELECT * FROM bdequipe1 WHERE rang2='116'and titre='champion'ORDER BY saison DESC"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
  <h4> 
  <?php echo $donnees['saison']; ?>
  : 
  <?php echo $donnees['champion'];  ?>
  <?php echo $donnees['comite1']; ?>
  </h4>
  <?php
 }
 ?>
  <br/>
  <br/>
  <font face="Arial, Helvetica, sans-serif" size="4"><b> <font size="5">Champions 
  de France 1re Division </font></b></font><br/>
  ( Clubs) <br/>
  <br/>
  <?php
$reponse = mysql_query("SELECT * FROM bdequipe1 WHERE rang2='114'and titre='champion'ORDER BY saison DESC"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
  <h4>
  <?php echo $donnees['saison']; ?>
  : 
  <?php echo $donnees['champion'];  ?>
  <?php echo $donnees['comite1']; ?>
 </h4>
  <?php
 }
 ?>
  <br/>
  <br/>
  <font face="Arial, Helvetica, sans-serif" size="4"><b> <font size="5">Champions 
  de France 1re Série</font></b></font><br/>
  ( Clubs) <br/>
  <br/>
  <?php
$reponse = mysql_query("SELECT * FROM bdequipe1 WHERE championnat='de France' and rang2='111'and titre='champion'ORDER BY saison DESC"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
  <h4>
  <?php echo $donnees['saison']; ?>
  : 
  <?php echo $donnees['champion'];  ?>
  <?php echo $donnees['comite1']; ?>
  </h4>
  <?php
 }
mysql_close(); // Déconnexion de MySQL
?>
  <br>
  <br>
  <br>
  <?php include("../pub/pub_carre.php"); ?>
</p>
