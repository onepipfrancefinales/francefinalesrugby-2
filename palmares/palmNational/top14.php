
 <div align="center"> </div>
<p>&nbsp; </p>
<h1><font color="#000000">Champions 
  de France</font></h1>
<br/>
<br/>
<p> 
  <?php
require ("../../connect/connexion1.php") ;
 ?>
  <font face="Arial, Helvetica, sans-serif" size="4"><b> <font size="5" color="#000000">Champions 
  de France TOP 14</font></b></font><font color="#000000"><br/>
  (14 Clubs) </font><br/>
  <br/>
  <?php

$reponse = $bdd->query("SELECT * 
						FROM bdequipe1 
						WHERE rang2='110'and titre='champion'
						ORDER BY saison DESC"); 


while ($donnees = $reponse->fetch())
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
<font face="Arial, Helvetica, sans-serif" size="4"><b> <font size="5" color="#000000">Champions 
de France TOP 16</font></b></font><font color="#000000"><br/>
(16 Clubs) </font><br/>
  <br/>
  <?php
 $reponse = $bdd->query("	SELECT * 
 							FROM bdequipe1 
 							WHERE rang2='119'and titre='champion'
 							ORDER BY saison DESC"); 
while ($donnees = $reponse->fetch())
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
<font face="Arial, Helvetica, sans-serif" size="4"><b> <font size="5" color="#000000">Champions 
de France Elite 1</font></b></font><font color="#000000"><br/>
( Clubs) </font><br/>
  <br/>
  <?php
$reponse = $bdd->query("SELECT * FROM bdequipe1 WHERE rang2='118'and titre='champion'ORDER BY saison DESC"); 
while ($donnees = $reponse->fetch())
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
<font face="Arial, Helvetica, sans-serif" size="4"><b> <font size="5" color="#000000">Champions 
de France Groupe A1</font></b></font><font color="#000000"><br/>
( Clubs) </font><br/>
  <br/>
  <?php 
$reponse = $bdd->query("SELECT * FROM bdequipe1 WHERE rang2='117'and titre='champion'ORDER BY saison DESC"); // Requête SQL
while ($donnees = $reponse->fetch())
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
<font face="Arial, Helvetica, sans-serif" size="4"><b> <font size="5" color="#000000">Champions 
de France Groupe A</font></b></font><font color="#000000"><br/>
( Clubs) </font><br/>
  <br/>
  <?php 
$reponse = $bdd->query("SELECT * FROM bdequipe1 WHERE rang2='116'and titre='champion'ORDER BY saison DESC"); // Requête SQL
while ($donnees = $reponse->fetch())
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
<font face="Arial, Helvetica, sans-serif" size="4"><b> <font size="5" color="#000000">Champions 
de France 1re Division </font></b></font><font color="#000000"><br/>
( Clubs) </font><br/>
  <br/>
  <?php
$reponse = $bdd->query("SELECT * FROM bdequipe1 WHERE rang2='114'and titre='champion'ORDER BY saison DESC"); // Requête SQL
while ($donnees = $reponse->fetch())
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
<font face="Arial, Helvetica, sans-serif" size="4"><b> <font size="5" color="#000000">Champions 
de France 1re S&eacute;rie</font></b></font><font color="#000000"><br/>
( Clubs) </font><br/>
  <br/>
  <?php
$reponse = $bdd->query("SELECT * FROM bdequipe1 WHERE championnat='de France' and rang2='111'and titre='champion'ORDER BY saison DESC"); // Requête SQL
while ($donnees = $reponse->fetch())
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
  <br>
  <br>
  <br>
<?php include("../../pub/pub_carre.php"); ?>
