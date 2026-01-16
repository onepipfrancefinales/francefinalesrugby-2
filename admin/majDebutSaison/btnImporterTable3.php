<?php
echo $ligue;
?>

<form action="MAJBonus.php?ligue=<?php echo $ligue;?>" method="POST" enctype="multipart/form-data">
  <div align="center">
	<input type="file" name="fichier" required />
    <input type="submit" value="T&eacute;l&eacute;chargement" name="submit" />
    <br>
  </div>
</form>
