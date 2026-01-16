<b><font color="#FF0000" size="5">Ajout d'une journ&eacute;e</font></b> 
<hr/>
<b>1/ V&eacute;rification de la ligue choisie</b><br>
<br>
<?php
if (isset($_POST['comite'])) $comite = $_POST['comite'];
echo "Ligue choisie : ".$comite;
?>
<br>
<br>
<a href="choixComite.php">Modifier choix Ligue </a><br>
<hr/>
<b>2/S&eacute;lection du fichier (caractère de s&eacute;paration la virgule)</b> 
<p>&nbsp;</p>
<p> 
  <?php require 'formulaire1.htm';?>
  <br>
  <br>
  <br>
  <hr/>
  <?php require '../../bas.php';?>
<p>&nbsp;</p>
</body>
</html>
