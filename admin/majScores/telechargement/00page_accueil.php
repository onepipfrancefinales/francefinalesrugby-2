<?php
if (isset ($_GET['equipe'])) $club = $_GET['equipe']; else $club = "";
if (isset ($_GET['comite'])) $ligueComite = $_GET['comite']; else $ligueComite = "";
if (isset ($_GET['fonction'])) $fonction = $_GET['fonction']; else $fonction = "";
if (isset ($_GET['connect'])) $connect = $_GET['connect']; else $connect = "";

//echo $equipe."<br />";
echo $connect."<br />";
//echo $comite."<br />";
echo $fonction."<br />";
?>


<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body bgcolor="#FFFFFF" text="#000000">
<table width="78%" height="36">
  <tr>
    <td width="22%"> 
      <?php include "../adminLicences/sommaire.php"; ?>
    </td>
    <td width="78%">
      <?php include "accueil.php"; ?>
    </td>
  </tr>
</table>
<p>&nbsp;</p>
<p><a href="rechercheCaractere.php">test</a></p>
</body>
</html>
