<?php
if (isset ($_GET['equipe'])) $club = $_GET['equipe']; else $club = "";
if (isset ($_GET['comite'])) $comiteLigue = $_GET['comite']; else $comiteLigue = "";
if (isset ($_GET['fonction'])) $fonction = $_GET['fonction']; else $fonction = "";
if (isset ($_GET['connect'])) $connect = $_GET['connect']; else $connect = "";


?>

<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body bgcolor="#FFFFFF" text="#000000">
<table width="15%">
  <tr>
    <td><?php include "../adminLicences/sommaire.php"; ?>;</td>
    <td><?php include "upload.php"; ?></td>
  </tr>
</table>
</body>
</html>
