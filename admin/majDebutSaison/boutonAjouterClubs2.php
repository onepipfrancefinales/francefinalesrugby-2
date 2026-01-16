
<br/><br/>


<?php if (isset ($_GET['info'])) $info = $_GET['info']; else $info = "inconnu";
echo "division choisie : ".$info;
?>
<form action="ajoutClubs.php?info=<?php echo $info; ?>" method="POST" enctype="multipart/form-data">
  <div align="center">
	
  <input type="file" name="fichier" required />
    <input type="submit" value="T&eacute;l&eacute;chargement" name="submit" />
    <br>
  </div>
</form>




