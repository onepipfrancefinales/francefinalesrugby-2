<?php
//if (isset ($_GET['equipe'])) $club = $_GET['equipe']; else $club = "";
if (isset ($_GET['ligue'])) $ligue = $_GET['ligue']; else $ligue = "";
//if (isset ($_GET['fonction'])) $fonction = $_GET['fonction']; else $fonction = "";
//if (isset ($_GET['connect'])) $connect = $_GET['connect']; else $connect = "";
//if (isset ($_POST['fichier'])) $fichier=$_POST['fichier'];
echo "Ligue : ".$ligue;
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
      <?php// include "../adminLicences/sommaire.php"; ?>
    </td>
    <td width="61%"> 
      <?php include "ftp.php"; ?>
	  <hr/>
      <?php include "upload.php"; ?>
      <br>
       </td>
  </tr>
</table>
<br>
<br>
<?php require 'validationDesModifs.php';?>
<br>
<br>
<?php require '../../bas.php';?>
</body>
</html>
