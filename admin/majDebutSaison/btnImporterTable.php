
<form action="page_upload.php?ligue=<?php echo $ligue;?>&base=<?php echo $base;?>" method="POST" enctype="multipart/form-data">
  <div align="center">
	<input type="file" name="fichier" required />
    <input type="submit" value="T&eacute;l&eacute;chargement" name="submit" />
    <br>
  </div>
</form>
