<?php

if (isset($_GET['table']))$table = $_GET['table']; else $table ="";
 if (isset($_POST['comite'])) $comite = $_POST['comite']; else $comite="Non defini  ";

$tableAConsulter = $comite.'_'.$table;
echo $tableAConsulter;
?>
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body bgcolor="#FFFFFF" text="#000000">


<p>&nbsp; </p>
<table width="75%" border="0">
  <tr> 
    <td width="16%"> 
      <div align="center"> </div>
    </td>
    <td width="19%"> 
      <div align="center">
        <input type="submit" onClick=window.location.href='ajouter.php?tableAConsulter=<?php echo $tableAConsulter; ?>' name="ajouter22" value="Ajouter">
      </div>
    </td>
    <td width="20%"> 
      <div align="center"> 
        <input type="submit" onClick=window.location.href='modifier.php?tableAConsulter=<?php echo $tableAConsulter; ?>' name="ajouter2" value="Modifier">
      </div>
    </td>
    <td width="24%"> 
      <div align="center"> 
        <input type="submit" onClick=window.location.href='consulter.php?tableAConsulter=<?php echo $tableAConsulter; ?>' name="consulter" value="Consulter">
      </div>
    </td>
    <td width="21%" bgcolor="#FF0000"> 
      <div align="center"> 
        <input type="submit" onClick=window.location.href='vider.php?tableAConsulter=<?php echo $tableAConsulter; ?>' name="vider2" value="Vider">
      </div>
    </td>
  </tr>
</table>
</body>
</html>
