

<p>&nbsp;</p>
<div align="center"></div>
<p> 
<?php
require ("connection.php") ;
 ?>


  <?php

 $annee = $_POST['saison'];



$reponse = mysql_query("SELECT * FROM bdequipe1 WHERE saison='$annee' and titre='champion' and championnat='de France'and rang<230 order by rang"); // Requête SQL



 ?>
  <?php
$annee = $_POST['saison'];

?>
  
  <?php

 echo "<p> <strong> Equipes Séniors<BR/></strong></p>"; 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
  <?php echo $donnees['division']; ?>
  : 
  <?php echo $donnees['champion']; ?>
  <?php echo $donnees['comite1']; ?>
  <br/>
  <?php
 }

?>
  <?php

 
$annee = $_POST['saison'];
$reponse = mysql_query("SELECT * FROM bdequipe2 WHERE saison='$annee' and titre='champion' and championnat='de France' and rang<280 and rang>230 order by rang"); // Requête SQL

 echo "<p> <strong> Equipes Réserve <BR/></strong></p>"; 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
  <?php echo $donnees['division']; ?>
  : 
  <?php echo $donnees['champion']; ?>
  <?php echo $donnees['comite1']; ?>
  <br/>
  <?php
 }

?>
  <?php

 
$annee = $_POST['saison'];

$reponse = mysql_query("SELECT * FROM bdfem WHERE saison='$annee'and titre='champion' and categorie='F' order by rang"); // Requête SQL

 echo "<p> <strong> Equipes Féminines <BR/></strong></p>"; 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
  <?php echo $donnees['division']; ?>
  : 
  <?php echo $donnees['champion']; ?>
  <?php echo $donnees['comite1']; ?>
  <br/>
  <?php
 }

?>
  <?php

 
$annee = $_POST['saison'];

$reponse = mysql_query("SELECT * FROM bdjeunes WHERE saison='$annee' and titre='champion' and rang<360 and rang>300 order by rang"); // Requête SQL

 echo "<p> <strong> Reichels & Juniors <BR/></strong></p>"; 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
  <?php echo $donnees['division']; ?>
  : 
  <?php echo $donnees['champion']; ?>
  <?php echo $donnees['comite1']; ?>
  <br/>
  <?php
 }

?>
  <?php

$reponse = mysql_query("SELECT * FROM bdjeunes WHERE saison='$annee' and titre='champion' and rang<380 and rang>=360 and rang2<380 and rang2>=360 order by rang"); // Requête SQL

 echo "<p> <strong> Cadets <BR/></strong></p>"; 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
  <?php echo $donnees['division']; ?>
  : 
  <?php echo $donnees['champion']; ?>
  <?php echo $donnees['comite1']; ?>
  <br/>
  <?php
 }

?>
  <?php
 


$reponse = mysql_query("SELECT * FROM bdchallenges WHERE saison='$annee'and titre='vainqueur' and rang>370 order by rang"); // Requête SQL
 


 echo "<p> <strong> Challenges <BR/></strong></p>"; 

 // On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
  <?php echo $donnees['division']; ?>
  : 
  <?php echo $donnees['champion']; ?>
  <?php echo $donnees['comite1']; ?>
  <br/>
  <?php
 }
mysql_close(); // Déconnexion de MySQL
?>
</p>

</body>
 
</html>



