<?php 

$fichier = fopen('fichier.txt', 'r+');

$fichier = fgets($fichier, 4096); 

if (preg_match('#;#', $fichier))
{
echo "Caractere de separation est : ; ";
$caratereSeparation =";";

} 
else 
{
    echo "A match was not found.";
}

//fclose($fichier);
?>