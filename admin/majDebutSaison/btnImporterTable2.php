<?php
echo "recuperer : ".$bddComitePlusId;
?>

<form action="ajoutJournee.php?bddComitePlusId=<?php echo $bddComitePlusId;?>" method="POST" enctype="multipart/form-data">
  <div align="center">
	<input type="file" name="fichier" required />
    <input type="submit" value="Téléchargement" name="submit" />
    <br>
  </div>
</form>
