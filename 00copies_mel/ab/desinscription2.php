<html>
<head>
<title>Untitled Document</title>
<meta charset="utf-8" >
</head>

<body bgcolor="#FFFFFF" text="#000000">
<?php $adresse = $_POST['champion']; ?>
<?php
// To
$to = 'onepip-france@franceserv.com';
// Message
$msg = 'Je souhaite étre retiré de votre liste de diffusion'.$_POST['champion']; 


// Subject
$subject = "Retirer de la liste de diffusion";
//$subject = $_POST['champion'];
// Function mail()
mail($to, $subject, $msg);


 if (mail($to, $subject, $msg)) {  
    echo "Désincription réussie  ";
    //.$objet.  
   // " pour //$sto."; 
	echo $msg;
  } 
  else { 
    echo "Echec de l'envoi du mail".$objet."."; 
  } 
?>
<table width="494" border="0">
  <tr> 
    <td colspan="3"> 
      <div align="center"><a href="https://francefinalesrugby.fr/resultats/page_resultats.php"><font size="4">--Retour 
        aux résutats et aux classements </font></a> </div>
      <div align="center"></div>
    </td>
  </tr>
</table>
</body>
</html>
