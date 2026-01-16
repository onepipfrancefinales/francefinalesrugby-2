<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body bgcolor="#FFFFFF" text="#000000">
<?php

$adresse = $_POST['champion'];
$comite = $_GET['comite'];


?>
<?php
// To
$to = 'francefinalesrugby@free.fr';
 
// Subject
$subject = $_POST['adresse'];
 
// Message
$msg = "comite".' '.$comite;  ;


// Function mail()
mail($to, $subject, $msg);


  
    
?>
<b><font size="5">D&eacute;sinscription r&eacute;ussie</font></b><br>
<br>
<table width="494" border="0">
  <tr> 
    <td colspan="3"> 
      <div align="center"><a href="http://francefinalesrugby.franceserv.com/page_resultats.php"><font size="4">Retour 
        aux résutats et aux classements </font></a> </div>
      <div align="center"></div>
    </td>
  </tr>
  <tr> 
    <td rowspan="3">&nbsp; </td>
    <td width="240"> 
      <div align="center"></div>
    </td>
    <td rowspan="3">&nbsp; </td>
  </tr>
  <tr> 
    <td width="240"> 
      <div align="center"> 
        <?php
    
    include("../../pub_carre.php");
    ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="240"> 
      <div align="center"></div>
    </td>
  </tr>
</table>
<p>&nbsp; </p>


</body>
</html>
