<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body bgcolor="#FFFFFF" text="#000000">
<?php
require 'fonctionsConsultation.php';
$dateDeLaCompet = $_POST['dateDeLaCompet'];

echo "Dimanche ".''.$dateDeLaCompet;

require ('../../connect/connexion6.php');
	
echo	"<hr>".''."Ligue Rh&ocirc;ne Alpes Auvergne";
matchsAVenir("au", 10, $dateDeLaCompet, $bdd);

echo	"<hr>".''."Ligue Bourgogne Franche Comté";
matchsAVenir("pl", 11, $dateDeLaCompet, $bdd);

echo	"<hr>".''."Ligue Bretagne;";
matchsAVenir("pl", 12 , $dateDeLaCompet, $bdd);

echo	"<hr>".''."Ligue Centre Val de Loire";
matchsAVenir("pl", 13, $dateDeLaCompet, $bdd);

echo	"<hr>".''."Ligue Grand Est";
matchsAVenir("idf", 15 , $dateDeLaCompet, $bdd);

echo	"<hr>".''."Ligue Hauts de France";
matchsAVenir("pl", 16, $dateDeLaCompet, $bdd);

echo	"<hr>".''."Ligue Ile de France";
matchsAVenir("idf", 17, $dateDeLaCompet, $bdd);

echo	"<hr>".''."Ligue Normandie";
matchsAVenir("idf", 18, $dateDeLaCompet, $bdd);

echo	"<hr>".''."Ligue Nouvelle Aquitaine";
matchsAVenir("ca", 19, $dateDeLaCompet, $bdd);

echo	"<hr>".''."Ligue Occitanie";	
matchsAVenir("ab", 20 ,$dateDeLaCompet, $bdd);

echo	"<hr>".''."Ligue Pays de la Loire";	
matchsAVenir("pl", 21, $dateDeLaCompet, $bdd);

echo	"<hr>".''."Ligue Provence Cote d'Azur";
matchsAVenir("idf", 22,  $dateDeLaCompet, $bdd);

echo	"<hr>".''."Competition Pro";
//matchsAVenir("pro", 10, $dateDeLaCompet, $bdd);;

echo	"<hr>".''."Competition Federale 1";
matchsAVenir("pro",14 , $dateDeLaCompet, $bdd);
matchsAVenir("pro",24 , $dateDeLaCompet, $bdd);

echo	"<hr>".''."Competition Federale 2";
matchsAVenir("pro", 15, $dateDeLaCompet, $bdd);
matchsAVenir("pro", 25, $dateDeLaCompet, $bdd);

echo	"<hr>".''."Competition Federale 3(1 a 7)";
matchsAVenir("fed3NE", 16, $dateDeLaCompet, $bdd);
matchsAVenir("fed3NE", 26, $dateDeLaCompet, $bdd);


echo	"<hr>".''."Competitions Feminines";
matchsAVenir("pro", 0, $dateDeLaCompet, $bdd);
 ?>
 

</body>
</html>