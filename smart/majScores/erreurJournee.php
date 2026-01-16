<?php 
$codeEquipe=$_GET['codeEquipe']; 
$comite=$_GET['comite']; 
$bddComite=$_GET['bddComite']; 
$journee=$_GET['journee'];
$nomChampionnat=$_GET['nomChampionnat'];
$maxJournee= $_GET['maxJournee'];
/*
 echo $journee;
 echo $bddComite;echo "<br/>";
 echo $nomChampionnat;
 */
?>


<!DOCTYPE HTML>
<html lang="fr">
<head>
  <title>Untitled Document</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link type="text/css" rel="stylesheet" href="majScore.css">
</head>

<body>
<table align="center" border="1" width="95%">
  <tbody>
    <tr>
      <td class="h22">France Finales Rugby </td>
    </tr>
    <tr>  
      <td class="h12"> Mise &agrave; jours des résultats <br /> <?php echo $nomChampionnat; ?> </td>
    </tr>
  </tbody>
</table>
		
		
  <p class="equipe"> <br></p>
  <fieldset> 
    <legend > Vous n'avez pas séléctionné la bonne journée	</legend> 
  </fieldset>
  <br><br><br>
  <p class="tab3">
   <a href="saisie1.php?maxJournee=<?php echo $maxJournee; ?>&bddComite=<?php echo $bddComite; ?>&comite=<?php echo $comite; ?>&journee=<?php echo $journee ; ?>&codeEquipe=<?php echo $codeEquipe; ?>">Retour pour modif</a>
  </p>
 </body>
</html>
