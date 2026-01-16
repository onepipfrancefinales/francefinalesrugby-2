<?php
// J'ai choisi le mot de passe "kangourou"
if (isset($_POST['mot_de_passe'])) // Si la variable existe
{
    // On se crée une variable $mot_de_passe avec le mot de passe entré
    $mot_de_passe = $_POST['mot_de_passe'];
}
else // La variable n'existe pas encore
{
    $mot_de_passe = ""; // On crée une variable $mot_de_passe vide
}
if ($mot_de_passe == "kangou") // Si le mot de passe est bon
{
// On affiche la page cachée.
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
    <head>
<script language="JavaScript">
<!--
function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);
// -->
</script>
<h2>Voici les codes d'accès :</h2>
        
<h3>&nbsp;</h3>
        
        <hr />
<p>&nbsp;</p>
        
<p>&nbsp; </p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
<?php
}
else // le mot de passe n'est pas bon
{
// On affiche la zone de texte pour rentrer le mot de passe.
?>
    <body>

<form action="page_liste_compet.php?equipe=<?php echo $equipe ; ?>&id_equipe=<?php echo $id_equipe; ?>&comite=<?php echo $comite ; ?>" method="post">
<p>
<input type="text" name="mot_de_passe" /> <input type="submit" value="Valider" />
</p>
</form>
    </body>
</html>
<?php
} // Fin du else
// Fin du code :)
?>