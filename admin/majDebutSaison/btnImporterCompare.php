<?php
echo "recuperer : ".$bddComitePlusId;
?>

<form action="verifPtsFFR.php?bddComitePlusId=<?php echo $bddComitePlusId;?>" method="POST" enctype="multipart/form-data">
  <div align="center">
	<input type="file" name="fichier" required />
    <input type="submit" value="T&eacute;l&eacute;chargement" name="submit" />
    <br>
  </div>
</form>
