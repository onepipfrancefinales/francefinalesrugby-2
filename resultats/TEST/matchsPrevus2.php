<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body bgcolor="#FFFFFF" text="#000000">
<?php
require 'fonctionsConsultation.php';
$dateDeLaCompet = $_POST['dateDeLaCompet'];

echo "<h1><b>"."Dimanche ".''.$dateDeLaCompet."</b>"."</h1>";

require ('../../connect/connexion6.php');
	
echo	"<h3><b>"."<hr>".''."Ligue Rh&ocirc;ne Alpes Auvergne"."</b>"."</h3>";
matchsAVenir("au", 10, $dateDeLaCompet, $bdd);

echo	"<h3><b>"."<hr>".''."Ligue Bourgogne Franche Comté"."</b>"."</h3>";
matchsAVenir("pl", 11, $dateDeLaCompet, $bdd);

echo	"<h3><b>"."<hr>".''."Ligue Bretagne;"."</b>"."</h3>";
matchsAVenir("pl", 12 , $dateDeLaCompet, $bdd);

echo	"<h3><b>"."<hr>".''."Ligue Centre Val de Loire"."</b>"."</h3>";
matchsAVenir("pl", 13, $dateDeLaCompet, $bdd);

echo	"<h3><b>"."<hr>".''."Ligue Grand Est"."</b>"."</h3>";
matchsAVenir("idf", 15 , $dateDeLaCompet, $bdd);

echo	"<h3><b>"."<hr>".''."Ligue Hauts de France"."</b>"."</h3>";
matchsAVenir("pl", 16, $dateDeLaCompet, $bdd);

echo	"<h3><b>"."<hr>".''."Ligue Ile de France"."</b>"."</h3>";
matchsAVenir("idf", 17, $dateDeLaCompet, $bdd);

echo	"<h3><b>"."<hr>".''."Ligue Normandie"."</b>"."</h3>";
matchsAVenir("idf", 18, $dateDeLaCompet, $bdd);

echo	"<h3><b>"."<hr>".''."Ligue Nouvelle Aquitaine"."</b>"."</h3>";
matchsAVenir("ca", 19, $dateDeLaCompet, $bdd);

echo	"<h3><b>"."<hr>".''."Ligue Occitanie"."</b>"."</h3>";
matchsAVenir("ab", 20 ,$dateDeLaCompet, $bdd);

echo	"<h3><b>"."<hr>".''."Ligue Pays de la Loire"."</b>"."</h3>";	
matchsAVenir("pl", 21, $dateDeLaCompet, $bdd);

echo	"<h3><b>"."<hr>".''."Ligue Provence Cote d'Azur"."</b>"."</h3>";
matchsAVenir("idf", 22,  $dateDeLaCompet, $bdd);

echo	"<h3><b>"."<hr>".''."Competition Pro"."</b>"."</h3>";
matchsAVenir("pro", 11, $dateDeLaCompet, $bdd);
matchsAVenir("pro", 12, $dateDeLaCompet, $bdd);
matchsAVenir("pro", 13, $dateDeLaCompet, $bdd);
echo	"<h3><b>"."<hr>".''."Competition Federale 1"."</b>"."</h3>";
matchsAVenir("pro",14 , $dateDeLaCompet, $bdd);
matchsAVenir("pro",24 , $dateDeLaCompet, $bdd);

echo	"<h3><b>"."<hr>".''."Competition Federale 2"."</b>"."</h3>";
matchsAVenir("pro", 15, $dateDeLaCompet, $bdd);
matchsAVenir("pro", 25, $dateDeLaCompet, $bdd);

echo	"<h3><b>"."<hr>".''."Competition Federale 3(1 a 7)"."</b>"."</h3>";
matchsAVenir("fed3NE", 16, $dateDeLaCompet, $bdd);
matchsAVenir("fed3NE", 26, $dateDeLaCompet, $bdd);


echo	"<h3><b>"."<hr>".''."Competitions Feminines"."</b>"."</h3>";
matchsAVenir("pro", 28, $dateDeLaCompet, $bdd);
matchsAVenir("pro", 29, $dateDeLaCompet, $bdd);
matchsAVenir("pro", 30, $dateDeLaCompet, $bdd);
 ?>
 

</body>
</html>