<?php

if(isset($_GET['dept'])) $dept= $_GET['dept'];else $dept = 0;


echo "N° département : ".$dept;echo "<br>";
require ("../connect/connexion1.php") ;
$tabClubs = array (1933033,1933065);



foreach ($tabClubs as $club) {
echo $club;echo "<br>";
//UPDATE bdclubs-Sauv SET dept='$dept' WHERE id= '$club'


  $bdd->exec("UPDATE bdclubsSauv SET dept ='$dept' WHERE id = '$club'");

echo $club;echo "<br>";
}





//





?>