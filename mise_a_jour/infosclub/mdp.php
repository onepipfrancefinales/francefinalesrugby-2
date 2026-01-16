<?php
if (isset($_GET['mode'])) $mode = $_GET['mode'];else $mode ="noSmart";
?>


<!DOCTYPE html PUBLIC>       
<html lang="fr">
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <title>Modification des données du club</title>
 <link type="text/css" rel="stylesheet" href="../../ligne1.css">
 <link type="text/css" rel="stylesheet" href="../../formulaireDG.css">
 <link type="text/css" rel="stylesheet" href="../../resultats/resultat.css">
 <meta name=viewport content="width=device-width, initial-scale=1">
 
</head>


<body>
<table class="table">
    <tr>
      <td colspan="3"> <img src="../../images/banniere_haut/stade10.jpg" height="150" width="1250"></td>
    </tr>
    <tr>
      <td colspan="3"><?php include("../../01ligne.php"); ?></td>
    </tr>
   
    <tr>
	  <!-- Colonne de gauche --> 
      <td class = "colonneDroiteGauche"><p><?php include("../../01gauche.php");?> </p></td>
      
	  <!-- Colonne centrale --> 
	  <td class = "colonneCentrale"> 
       
    <br><br><br><br><br><br><br>
<p align="center"> 
<?php 
$idClub = $_GET['idClub']; 


echo "Mise à jour de la fiche du club  ";
echo "<br>";
//echo $idClub;


echo "Pour valider que vous n'êtes pas un robot,
saississez \"pasUnRobot\" et validez ";
?>
</p>
<form
 action="modif2.php?idClub=<?php echo $idClub."&mode=".$mode; ?>" method="post">
  <p align="center"> 
    <input name="mot_de_passe" type="text" required="required"> <input value="Valider" type="submit" >
  </p>
</form>




<br>
 </td>
      <td class = "colonneDroiteGauche"> 
        <p><?php  include("../../00droite.php"); ?> </p>
      </td>
    </tr>
   
</table>
 </body>
  <footer> 
  <table class="tableauBas">
  <tr class="largueurTab">
    <td><?php include("../../comitebas.php"); ?></td>
  </tr>

  <tr class="largueurTab">
    <td class="ligneBlanche"><?php include("../../bas.php"); ?></td>
  </tr> 
</table>
  </footer>

</html> 