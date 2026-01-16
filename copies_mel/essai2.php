<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body bgcolor="#FFFFFF" text="#000000">
<?php
// To
$to = 'onepip-france@franceserv.com';
 
// Subject
$subject = 'Developpez.com - Test Mail';
 
// Messagee 
$msg = 'Je souhaite recevoir les classements des compétitions du comité';
 
// Function mail()
mail($to, $subject, $msg);
?>
</body>
</html>
