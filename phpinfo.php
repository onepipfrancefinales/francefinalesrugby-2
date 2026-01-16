<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
// Afficher les erreurs à l'écran
ini_set('display_errors', 1);
// Nom du fichier log
ini_set('error_log', 'errors.txt');
// Enregistrer les erreurs dans un fichier log
ini_set('log_errors', 1);
// Afficher les erreurs et les avertissements
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_STRICT );
?>

<?php
phpinfo();
?>

