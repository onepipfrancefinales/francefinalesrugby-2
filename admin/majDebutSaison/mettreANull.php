 <?php
require '../../connect/connexion1.php';
 $bdd->exec("UPDATE bdsaisons
				SET en_cours = NULL ");




 echo "colonne en_cours de la table bdsaisons mise à NULL";
?>
<br>
<a href="/admin/majDebutSaison/pageAjouterJournee.php">retour Accueil<br></a>
<br>