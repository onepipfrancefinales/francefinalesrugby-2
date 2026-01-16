<?php

if (isset($_POST['saison']))
    $saison = $_POST['saison']; else $saison = 0;
if (isset($_POST['nomColonne']))
    $nomColonne = $_POST['nomColonne']; else $nomColonne = "erreu";

echo $saison . "<br/>";
echo $nomColonne . "<br/>";


/*
if ($nomColonne == "terr_") {
    $nouvelleColonneTerr = "$nomColonne" . $annee;
    $nouvelleColonneFrance = "france_" . $annee;
} 
else{
    $nouvelleColonneTerr = "terr_".$annee;
    $nouvelleColonneFrance = $nomColonne . $annee;
}
*/

$nouvelleColonneTerr = "terr_".$saison;
$nouvelleColonneFrance = "france_" . $saison;


require '../../connect/connexion1.php';
$bdd->exec("
ALTER TABLE bdsaisons
ADD $nouvelleColonneTerr VARCHAR(100),
ADD $nouvelleColonneFrance VARCHAR(100)");


echo "colonnes créés en fin de table bdsaisons". "<br/>";
echo " --> ".$nouvelleColonneTerr . "<br/>";
echo " --> ".$nouvelleColonneFrance . "<br/>";

?>
<br />
<a href="accueil.php">retour Accueil<br></a>
<br />