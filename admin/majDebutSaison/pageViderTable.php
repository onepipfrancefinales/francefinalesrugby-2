<?php
if (isset ($_GET['ligue'])) $ligue = $_GET['ligue']; else $ligue = "";
if (isset ($_GET['base'])) $base = $_GET['base']; else $base = "";
if (isset ($_POST['division'])) $division = $_POST['division']; else $division = "";
if (isset ($_GET['table'])) $table = $_GET['table']; else $table = "";
 
echo "Ligue : ".$ligue;echo "<br />";
echo "Base : ".$base;echo "<br />";
echo "Division : ".$division;echo "<br />";
echo "Table : ".$table;echo "<br />";
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
     
    </td>
    <td width="61%"> 
      <?php// include "ftp.php"; ?>
	  <hr/>
      <?php include "viderTable.php"; ?>
      <br>
       </td>
  </tr>
</table>
<br>

<br>
<?php require '../majScores/bas.php';?>
</body>
</html>
