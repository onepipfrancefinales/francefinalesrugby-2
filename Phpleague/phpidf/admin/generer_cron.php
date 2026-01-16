<?php
// Creation des graphique et pronos par la tache cron, remplacer les n° de champ et gr_champ...
$_GET['page']="championnat";
$_GET['action']="generer";
$_GET['champ']="72";
include ("index.php");
$_GET['page']="groupes_championnats";
$_GET['action']="generer";
$_GET['gr_champ']="72";
include ("index.php");
?>
