<?php
//$localHost = true; // connexion en local
$localHost = false;// connexion en ligne

setlocale(LC_TIME, 'fr_FR');
date_default_timezone_set('Europe/Paris');
// date du jour :  journee jour mois annee heures:minutes //exemple : mercredi 15 juin 2022, 08:42


$mois = date('m', time());
$annee = date('Y', time());
/*
echo "mois : " . $mois;
echo "<br/>";
echo "annee : " . $annee;
echo "<br/>";
echo "<br/>";
*/
// Du 1er Aout à Décembre
global $finSaison, $debutSaison;

if (date('m', time()) > 07 and date('m', time()) <= 12) {

    $debutSaison = $annee;
    $finSaison = $annee + 1;
    $datePhasesFinales = $debutSaison;

}
//Du 1er Janvier à fin juillet
else {

    $debutSaison = $annee - 1;
    $finSaison = $annee;
}


$datePhasesFinales=2025;
/*
echo "debutSaison :" . $debutSaison;
echo "<br/>";
echo "finSaison :" . $finSaison;
echo "<br/>";

echo "<br/>";
echo date('d-m-Y', time());
echo "<br/>";
echo date('m', time());
echo date('Y', time());
echo "<br/>";
echo "**************************";
echo "<br/>";
*/
?>