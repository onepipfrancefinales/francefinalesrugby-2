<?php
if (isset ($_GET['equipe'])) $club = $_GET['equipe']; else $club = "";
if (isset ($_GET['comite'])) $ligueComite = $_GET['comite']; else $ligueComite = "";
if (isset ($_GET['fonction'])) $fonction = $_GET['fonction']; else $fonction = "";
if (isset ($_GET['connect'])) $connect = $_GET['connect']; else $connect = "";
if (isset ($_POST['fichier'])) $fichierATraite = $_POST['fichier']; else $fichierATraite = "non envoye";




//$fichierATraite="C:\upload\fichier.txt";

echo "PAGE";
echo "club :".$club."<br />";
echo "connect :".$connect."<br />";
echo "ligueComite :".$ligueComite."<br />";
echo "fichier :".$fichierATraite."<br />";
echo "fonction :".$fonction."<br />";

?>

<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body bgcolor="#FFFFFF" text="#000000">
<table width="43%" height="39">
  <tr>
    <td width="200">
      <?php include "../adminLicences/sommaire.php"; ?>
      ;</td>
    <td width="61%"> 
      <?php //include "ftp.php"; ?>
      <?php include "upload.php"; ?>
	  
	  Vous pouvez vérifiez, en cliquant sur les boutons
effectif complet ou Informations licence 
    </td>
  </tr>
</table>
</body>
</html>
