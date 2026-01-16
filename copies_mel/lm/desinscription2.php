<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body bgcolor="#FFFFFF" text="#000000">
<?php

$adresse = $_POST['champion'];

?>
<?php
// To
$to = 'onepip-france@franceserv.com';
 
// Subject
$subject = $_POST['champion'];
 
// Message
$msg = ' comite AB';


// Function mail()
mail($to, $subject, $msg);


 
?>

<p><b><font size="5">Désinscription réussie</font></b></p>
<table width="494" border="0">
  <tr> 
    <td colspan="3"> 
      <div align="center"><a href="http://francefinalesrugby.fr"><font size="6">Retour 
        aux résutats et aux classements </font></a> </div>
      <div align="center"></div>
    </td>
  </tr>
  <tr> 
    <td rowspan="3">&nbsp; </td>
    <td width="240"> 
      <div align="center">
        <?php
    // On inclut le haut de la page
 //   include("../../pub_carre.php");
    ?>
      </div>
    </td>
    <td rowspan="3">&nbsp; </td>
  </tr>
  <tr> 
    <td width="240"> 
      <div align="center"> </div>
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
