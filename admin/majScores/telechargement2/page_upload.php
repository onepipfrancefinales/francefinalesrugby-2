<?php
if (isset ($_GET['equipe'])) $club = $_GET['equipe']; else $club = "";
if (isset ($_GET['comite'])) $ligueComite = $_GET['comite']; else $ligueComite = "";
if (isset ($_GET['fonction'])) $fonction = $_GET['fonction']; else $fonction = "";
if (isset ($_GET['connect'])) $connect = $_GET['connect']; else $connect = "";
if (isset ($_POST['fichier'])) $fichier=$_POST['fichier'];
if (isset ($_POST['fichier2'])) $fichier2=$_POST['fichier2'];
echo "Ligue : ".$ligueComite;
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
      <?php //include "../adminLicences/sommaire.php"; ?>
    </td>
    <td width="61%"> 
      <hr/>
	 <?php 
	   echo "---ftp---";echo "<br />";
	  include "ftp.php"; 
	   echo "---fin ftp---";echo "<br />";?>
	  <hr/>
      <?php
	   echo "---upload---";echo "<br />";
	  include "upload.php"; 
	   echo "---fin upload---";echo "<br />";
	  ?>
       <hr/>
	  <?php 
	  echo "---upload2---";echo "<br />";
	  include "upload2.php"; 
	  echo "---fin upload2---";echo "<br />";?>
	  <hr>
	   
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
