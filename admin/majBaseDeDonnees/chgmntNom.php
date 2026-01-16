<?php 
$equipeRecherche = $_POST['equipeRecherche'];
echo $equipeRecherche;
require '../../connect/connexion1.php';
require '../../fonctions.php'; ?>


<!DOCTYPE html>
<html lang="fr">
<head>
	<meta name="description" content="Palmarès des champions de france par divisions et pas années">
	<meta name="keywords" content="Presentation de la competititon et de tous les champions de France 1re Serie. Palmares complet de la 1re Serie.">
	<meta name="classification" content="Sport,Rugby">
	<meta name="resource-type" content="document">
	<meta name="copyright" content="Comite Midi Pyrenees de Rugby">
	<meta name="author" content="Equipe Onepip">
	<meta name="viewport" content="width=device-width">
	<meta name="robots" content="All">
	<title>Maj table bdeurope </title>
	<link type="text/css" rel="stylesheet" href="../admin.css">
	<link type="text/css" rel="stylesheet" href="../../ligne1.css">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<script language="JavaScript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>
</head>

<body> 
<p class="size5 style">Mise à jour de la table bdchange_nom</p>
  <hr>

  <form name="form1" method="POST" action="chgmntNom.php">
<p class=" style size4 ">Equipe recherchée : 
    <input type="text" name="equipeRecherche" required="true">

    <input type="submit" name="Submit" value="Valider">
  </p>
</form>
<?php
rechercheClubParId($equipeRecherche, $bdd);



$tabId = array();
  $tabAnnee = array();
  $tabMessage = array();
  $tabLogo = array();
  global  $tabId, $tabAnnee, $tabMessage,  $tabLogo;
    $requete = $bdd->query("SELECT id,  logo, annee, nom
            FROM bdchange_nom  
            WHERE id_equipe ='$equipeRecherche'
            ORDER BY id ASC");

  while ($row = $requete->fetch()) {
    $tabId[] = $row[0];
    $tabLogo[] = $row[1];
    $tabAnnee[] = $row[2];
    $tabMessage[] = $row[3];
  }


  
?>


Nom club :<?php echo $nomLong; ?><br>
Nom usuel :<?php echo $nomUsuel; ?><br>
Id club :<?php echo $equipeRecherche; ?><br>
Id FFR :<?php echo $idFfr; ?><br>
<br><br>
<table>
  <tr >
    <td style="width:450px" class=" bold">Informations présentes</td>
    <td style="width: 550px" class=" bold">Ajouter une information</td>
  </tr>
  <tr >
    <td style="vertical-align: top; text-align: left">
<?php
for ($i = 0; $i < count($tabAnnee); $i++) {

  echo $tabId[$i].' - '.$tabLogo[$i].' - '.$tabAnnee[$i].' - ' .$tabMessage[$i]."<br>"; 
  
  }
?>
    </td>
    <td style="text-align: left";>



<form name="form1" method="POST" action="ecritureMajBdEurope.php?table=bdchange_nom">
  <p></p>
<?php if ( count($tabAnnee) == 0) {
  ?>
 <p class=" style size4 ">id : 
 <input type="text" name="id" >
 id_equipe + 01
</p>


<?php
}
else
{
  ?>
  <p class=" style size4 ">id : 
    <input type="text" name="id" value="<?php echo max($tabId) + 1; ?>">
    id_equipe + 01
</p>

<?php
}
?>
<p class=" style size4 ">id_equipe : 
    <input type="text" name="id_equipe" value="<?php echo $equipeRecherche; ?>">
</p>


<p class=" style size4 ">idFFR : 
    <input type="text" name="idffr"> 
</p>
<p class=" style size4 ">id du logo : inutile pour le moment
    <input type="text" name="logo" >
</p>
<p class=" style size4 ">année  ou période: 
    <input type="text" name="annee" required="true">
</p>
<p class=" style size4 ">Nouveau Nom : 
    <input type="text" name="nom" required="true">
</p>
<hr>
	
	
	





 
 
  <p>
    <input type="submit" name="Submit" value="Valider">
  </p>
</form>

</td>
  </tr>
</table>

</body>
<footer></footer>
</html>