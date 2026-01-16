<?php

define('CONFIG_SERVER',   '127.0.0.1');  // Adresse du serveur FTP
define('CONFIG_USERNAME', 'root');  // Nom d'utilisateur
define('CONFIG_PASSWORD', '');  // Mot de passe
define('CONFIG_TIMEOUT',  5);      // Délai de connexion, en secondes

	
if(! empty($_FILES['fichier']) && $_FILES['fichier']['error'] == UPLOAD_ERR_OK && is_uploaded_file($_FILES['fichier']['tmp_name']))
	
{
 
  $file = $_FILES['fichier']['tmp_name'];   // Le fichier téléversé
	if ($fonction == 1)
	$dest = '127.0.0.1/dirigeant/feuilleMatch/telechargement/joueurs/' . $_FILES['fichier']['name']; // Sa destination
	else
	$dest = '/127.0.0.1/dirigeant/feuilleMatch/telechargement/dirigeants/' . $_FILES['fichier']['name']; // Sa destination  
  $conn_id = ftp_connect(CONFIG_SERVER);   // Création de la connexion au serveur FTP

  if(empty($conn_id))
  {
    // echo "Le fichier téléversé : ".$file; echo "<br/>";
	//echo "Sa destination : ".$dest; echo "<br/>";
	echo 'Échec de la connexion à ' . CONFIG_SERVER;
  }
  else
  {
    // Définition du délai de connexion
    ftp_set_option($conn_id, FTP_TIMEOUT_SEC, CONFIG_TIMEOUT);

    echo 'Connecté au serveur FTP.<br/>';
	if ($fonction==1)
	$fichierATraite = substr($dest,81);
	else
	$fichierATraite = substr($dest,84);
	
	echo $fichierATraite;echo "<br/>";
	echo "Le fichier téléversé : ".$file; echo "<br/>";
	echo "Sa destination : ".$dest; echo "<br/>";echo "<br/>";
    
    // Identification avec le nom d'utilisateur et le mot de passe
    $login_result = ftp_login($conn_id, CONFIG_USERNAME, CONFIG_PASSWORD);
	ftp_pasv($conn_id, true);
    if(!$login_result)
    {	
      echo 'Échec d\'identification à ' . CONFIG_SERVER;
    }
    else
    {

      // Tentative de chargement sur le serveur FTP
      
	  if(ftp_put($conn_id, $dest, $file, FTP_BINARY))
	  //if(ftp_put($conn_id, $dest, $file, FTP_ASCII))
		  
		echo "Le fichier a &eacute;t&eacute;  envoy&eacute; avec succ&egrave;s";
      else  
        echo "Problème lors de l'envoi du fichier";
    }
    // Fermeture de la connexion
    ftp_close($conn_id);
  }
}
