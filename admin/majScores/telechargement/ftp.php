<?php
define('CONFIG_SERVER',   '127.0.0.1');  // Adresse du serveur FTP
define('CONFIG_USERNAME', 'root');  // Nom d'utilisateur
define('CONFIG_PASSWORD', '');  // Mot de passe
//define('CONFIG_TIMEOUT',  5);      // D�lai de connexion, en secondes


//define('CONFIG_SERVER',   'ftp.franceserv.fr');  // Adresse du serveur FTP
//define('CONFIG_USERNAME', 'onepip-france');  // Nom d'utilisateur
//define('CONFIG_PASSWORD', 'Lavelan1969&');  // Mot de passe
define('CONFIG_TIMEOUT',  5);      // D�lai de connexion, en secondes

	
if(! empty($_FILES['fichier']) && $_FILES['fichier']['error'] == UPLOAD_ERR_OK && is_uploaded_file($_FILES['fichier']['tmp_name']))
	
{
 
  $file = $_FILES['fichier']['tmp_name'];   // Le fichier t�l�vers�
	
  $dest = 'admin/majScores/telechargement/journees/' . $_FILES['fichier']['name']; // Sa destination
	  
  $conn_id = ftp_connect(CONFIG_SERVER);   // Cr�ation de la connexion au serveur FTP

  if(empty($conn_id))
  {
    echo "Le fichier t&eacute;l&eacute;vers&eacute; : ".$file; echo "<br/>";
	echo "Sa destination : ".$dest; echo "<br/>";
	echo '�chec de la connexion � ' . CONFIG_SERVER;
  }
  else
  {
    // D�finition du d�lai de connexion
    ftp_set_option($conn_id, FTP_TIMEOUT_SEC, CONFIG_TIMEOUT);

    echo 'Connect� au serveur FTP.<br/>';
	if ($fonction==1)
	$fichierATraite = substr($dest,81);
	else
	$fichierATraite = substr($dest,84);
	
	echo $fichierATraite;echo "<br/>";
	echo "Le fichier t�l�vers� : ".$file; echo "<br/>";
	echo "Sa destination : ".$dest; echo "<br/>";echo "<br/>";
    
    // Identification avec le nom d'utilisateur et le mot de passe
    $login_result = ftp_login($conn_id, CONFIG_USERNAME, CONFIG_PASSWORD);
	ftp_pasv($conn_id, true);
 /*  
   if(!$login_result)
    {	
      echo '�chec d\'identification � ' . CONFIG_SERVER;
    }
   
   else
    {

      // Tentative de chargement sur le serveur FTP
      
	  if(ftp_put($conn_id, $dest, $file, FTP_BINARY))
	  //if(ftp_put($conn_id, $dest, $file, FTP_ASCII))
		  
		echo "Le fichier a &eacute;t&eacute;  envoy&eacute; avec succès";
      else  
        echo "Probl�me lors de l'envoi du fichier";
    }
	*/
    // Fermeture de la connexion
    ftp_close($conn_id);
  }
}
echo "<br />";
echo "ftp ok";
?>