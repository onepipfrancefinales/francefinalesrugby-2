<?php
function WriteCsv() {
// configuration de la base de données base de données
$host = 'localhost';
$user = 'monLogin';
$pass = 'monPass';
$db = 'maBD';
$nom_fichier = 'export';

//format du CSV
$csv_terminated = "\n";
$csv_separator = ";";
$csv_enclosed = '"';
$csv_escaped = "\\";

// requête MySQL
$sql_query = "SELECT * FROM table_contenant_les_donnees";

// connexion à la base de données
$link = mysql_connect($host, $user, $pass) or die("Je ne peux me connecter." . mysql_error());
mysql_select_db($db) or die("Je ne peux me connecter.");

// exécute la commande
$result = mysql_query($sql_query);
$fields_cnt = mysql_num_fields($result);

$schema_insert = '';

for ($i = 0; $i < $fields_cnt; $i++)
{
    $l = $csv_enclosed . str_replace($csv_enclosed, $csv_escaped . $csv_enclosed,
stripslashes(mysql_field_name($result, $i))) . $csv_enclosed;
    $schema_insert .= $l;
    $schema_insert .= $csv_separator;
} // fin for

$out = trim(substr($schema_insert, 0, -1));
$out .= $csv_terminated;

// Format des données
while ($row = mysql_fetch_array($result))
{
    $schema_insert = '';
    for ($j = 0; $j < $fields_cnt; $j++)
    {
if ($row[$j] == '0' || $row[$j] != '')
{

    if ($csv_enclosed == '')
    {
$schema_insert .= $row[$j];
    } else
    {
$schema_insert .= $csv_enclosed .
    str_replace($csv_enclosed, $csv_escaped . $csv_enclosed, $row[$j]) . $csv_enclosed;
    }
} else
{
    $schema_insert .= '';
}

if ($j < $fields_cnt - 1)
{
    $schema_insert .= $csv_separator;
}
    } // fin for

    $out .= $schema_insert;
    $out .= $csv_terminated;
} // fin while

// Envoie au fureteur pour le téléchargement
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Content-Length: " . strlen($out));
header("Content-type: text/x-csv");
header("Content-Disposition: attachment; filename=" . $nom_fichier);
echo $out;
exit;
}
?>