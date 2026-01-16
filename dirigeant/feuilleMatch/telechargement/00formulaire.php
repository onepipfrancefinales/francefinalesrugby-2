<form action="page_upload.php?equipe=<?php echo $equipe;?>&connect=<?php echo $connect;?>&comite=<?php echo $comite;?>" method="POST" enctype="multipart/form-data">
    <input type="file" name="fichier" />
    <input type="submit" value="Téléverser" />
</form>