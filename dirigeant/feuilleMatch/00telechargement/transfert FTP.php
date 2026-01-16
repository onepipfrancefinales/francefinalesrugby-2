Il faut respecter les spécifications de sécurité attribuées au rôles de chaque protocole voyons ne divergez pas. 
Rendez à Cesar ce qui revient à Cesar.
 On ne doit pas tolérer l'écriture d'une ressource dans une destination HTTP. 
 Vous programmez pour le coté Serveur, le script doit donc écrire soit dans un chemin local au serveur ou rediriger la ressource via FTP où le gestionnaire FTP a déja préparé un nid d'accueil bien protégé.
 Voici un exemple de upload orienté FTP:

https://forum.phpfrance.com/php-debutant/failed-open-stream-http-wrapper-does-not-support-writeab-t4076.html


 <?php 
//subitFile : bouton submit du formulaire d'upload
//fichier_transféré :  nom de la zone file du formulaire d'upload
if (!isset($_POST["submitFile"]) || !is_uploaded_file($_FILES["fichier_transféré"]["tmp_name"])) exit();

$ftp_server='xxx.xxx.xxx.xxx'; 
$ftp_user_name='utilisateur'; 
$ftp_user_pass='mot de passe'; 
//ftproot : point d'entrée prévu pour l'utlisateur (dossier par défaut)
//mes fichiers : un dossier existant pour accueillir des upload
$destination_file="ftproot/mes fichiers/".$_FILES['fichier_transféré']['name']; 
$source_file=$_FILES['fichier_transféré']['tmp_name']; 

// Mise en place d'une connexion basique 
$conn_id = ftp_connect($ftp_server); 

// Identification avec un nom d'utilisateur et un mot de passe 
echo "<br>Tentative de connexion au serveur $ftp_server pour l'utilisateur $ftp_user_name"; 
$login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass); 

// Vérification de la connexion 
if ((!$conn_id) || (!$login_result)) {
        echo "<br>La connexion FTP a échoué !"; 
        exit(); 
    } else { 
        echo "<br>Connexion effectuée..."; 
    } 

// Chargement d'un fichier 
//le script fait un put au nom de l'utilisateur connecté 
//ce dernier doit avoir le droit d'écriture dans la destination
echo "<br>Chargement de $source_file vers $ftp_server en tant que $destination_file"; 
$upload = ftp_put($conn_id, $destination_file, $source_file, FTP_BINARY); 

// Vérification du status du chargement 
if (!$upload) { 
        echo "<br>Le chargement FTP a échoué!"; 
    } else { 
        echo "<br>Le chargement FTP a réussi!";         
    } 
  
// Fermeture du flux FTP 
ftp_quit($conn_id);               
?> 

