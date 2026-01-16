<?php
$champ = isset($_GET['champ']) ? $_GET['champ'] : NULL;
if ($action=="generer" and $champ){include("generer.php");}
?>