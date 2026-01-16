<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body bgcolor="#FFFFFF" text="#000000">
<?php
// On démarre la session
	session_start ();

// On détruit les variables de notre session
	session_unset ();

// On détruit notre session
	session_destroy ();

// On redirige le visiteur vers la page d'accueil
	header ('location: index.php');
?>
</body>
</html>
