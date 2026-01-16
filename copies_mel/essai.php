<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body bgcolor="#FFFFFF" text="#000000">
<?php
 
	$destinataire = "onepip-france@franceserv.com";
	$objet = $_POST["newletter"];   
	$corps_mail = $_POST["Je souhaite recevoir la newsletter"];  
  if (mail($destinataire, $objet, $corps_mail)) {  
    echo "envoi réussi du mail : ".$objet.  
    " à $destinataire."; 
  } 
  else { 
    echo "Echec de l'envoi du mail".$objet."."; 
  } 
 
?>
</body>
</html>
