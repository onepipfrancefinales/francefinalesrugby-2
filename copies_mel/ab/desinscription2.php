<html>

<head>
  <title>Untitled Document</title>
  <meta charset="utf-8">
</head>

<body bgcolor="#FFFFFF" text="#000000">

  <?php
  if (isset($_POST['adresse'])) $adresse = $_POST['adresse'];
  else $adresse = "aaaaa";
  echo "adresse : " . $adresse;


  
  // To
  $to = 'onepip-france@franceserv.com';
  // Message
  $msg = "Je souhaite étre retiré de votre liste de diffusion $adresse";
  // Subject
  $subject = "Retirer de la liste de diffusion";
  // Function mail()
  mail($to, $subject, $msg);


  if (mail($to, $subject, $msg)) {
    echo "Désincription réussie  ";
  } else {
    echo "Echec de l'envoi du mail" . $objet . ".";
  }
  ?>

  <table width="494" border="0">
    <tr>
      <td colspan="3">
        <div align="center"><a href="https://francefinalesrugby.fr/resultats/page_resultats.php">
            <font size="4">Retour
              aux résutats et aux classements </font>
          </a> </div>
        <div align="center"></div>
      </td>
    </tr>
  </table>
</body>

</html>