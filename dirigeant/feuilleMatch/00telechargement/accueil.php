

<p>T&eacute;l&eacute;chargement des licences joueurs</p>
<form method="POST" action="page_upload.php?equipe=<?php echo $equipe; ?>&connect=<?php echo $connect; ?>&comite=<?php echo $comite; ?>&fonction=1" enctype="multipart/form-data">
  <!-- On limite le fichier à 100Ko -->
  <input type="hidden" name="MAX_FILE_SIZE" value="100000">
     Fichier : <input type="file" name="avatar">
  <br>
  <br>
  <input type="submit" name="envoyer" value="Envoyer le fichier">
</form>

<?php 

?>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>T&eacute;l&eacute;chargement des licences dirigeants</p>
<form method="POST" action="page_upload.php?equipe=<?php echo $equipe; ?>&connect=<?php echo $connect; ?>&comite=<?php echo $comite; ?>&fonction=5" enctype="multipart/form-data">
  <!-- On limite le fichier à 100Ko -->
  <input type="hidden" name="MAX_FILE_SIZE" value="100000">
  Fichier :   <input type="file" name="avatar">
  <br>
  <br>
  <input type="submit" name="envoyer2" value="Envoyer le fichier">
</form>
<?php 
if (isset ($_GET['equipe'])) $equipe = $_GET['equipe']; else $equipe = "";
if (isset ($_GET['comite'])) $comiteLigue = $_GET['comite']; else $comiteLigue = "";

echo $equipe;echo "<br / >";
echo $comiteLigue;echo "<br / >";

?>
<p></p>

</body>
</html>
