
<br/><br/>


<?php 
if (isset ($_GET['annee'])) $annee = $_GET['annee']; else $annee = "2022";
if (isset ($_GET['colonne'])) $colonne = $_GET['colonne']; else $colonne = "inconnu";
if (isset ($_GET['division'])) $division = $_GET['division']; else $division = "inconnu";
echo "division choisie : ".$division; echo "<br/>";
echo "année choisie : ".$annee; echo "<br/>";
echo "colonne choisie : ".$colonne; echo "<br/>";
?>
<form action="ajoutClubs.php?division=<?php echo $division;?>&colonne=<?php echo $colonne;?>&annee=<?php echo $annee;?>" method="POST" enctype="multipart/form-data">
  <div align="center">
	
  <input type="file" name="fichier" required />
    <input type="submit" value="T&eacute;l&eacute;chargement" name="submit" />
    <br>
  </div>
</form>




