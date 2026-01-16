<?php
/*
function ouverture()
{
global $idconnect;
try
{
	$idconnect = new PDO('mysql:host=localhost;dbname=onepip-france-db3;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

}
*/


function ouverture()
{
global $idconnect;

require("data_connect.php");
$idconnect=@mysqli_connect($hostname,$login,$password,$database);	
 	
return($idconnect);
return($phpabEAGUE_RACINE);
}
include("data_connect.php");
include("../lang/lang_".$lang.".php");


?>

<?php
/*
global $idconnect;
function ouverture()
{
require("data_connect.php");

try
{
   $idconnect = new PDO('mysql:host=127.0.0.1; dbname=onepip-france-db3; charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

return($idconnect);
return($PHPLEAGUE_RACINE);


}
include("data_connect.php");
include("../lang/lang_fr.php");

*/
?>

