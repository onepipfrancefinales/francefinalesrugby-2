<?php

$champion = $_GET['id_equipe'];
$equipe=$_GET['id_equipe'];
$id_equipe=$_GET['id_equipe'];
$comite=$_GET['comite'];
$phpComite=$_GET['comite'];
$equipeComite= substr($equipe,-5);
//$comite=substr($phpComite, 3);
$champ = $_GET['champ'];

require ("../../saison.php"); 
//require ('fonctions.php');
require ('../../resultats/fonctions.php');
require "../../Phpleague/".$comite."/consult/fonctions_matchs.php";
require "../../Phpleague/".$comite."/lang/lang_fr.php";
//connection à la base de données
require ("../../connect/connexion1.php");
nomClub($equipe, $bdd);
nomLigue($equipe, $bdd);
affichage5Saisons($finSaison, $equipeComite,$champ,$phpComite, $bdd);

	require ("../../connect/connexion6.php");
traitementDesScores($equipe, $comite, $bdd);
nomDivision($phpComite, $champ, $bdd);
tableauMeilleureAttaqueDefense($phpComite, $champ, $bdd);
//meilleureAttaque ($phpCcomite, $champ, $bdd);
//meilleureDefense ($phpComite, $champ, $bdd);

?>

<!DOCTYPE html>
<html lang="fr">

<head>
 <title>Suivi sportif <?php echo $nom; ?></title>
 <link rel="canonical" href="https://francefinalesrugby.fr/smart/bilan/pagebilan.php?comite=<?php echo $comite;?>&champ=<?php echo $champ;?>&id_equipe=<?php echo $id_equipe;?>" >
 <meta name="description" content="Suivi des performances et des résultats du <?php echo $nom; ?>">
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <link type="text/css" rel="stylesheet" href="../../ligne1.css">
 <link rel="stylesheet" type="text/css" href="../menu_smart2.css"> 
 <link type="text/css" rel="stylesheet" href="../resultats/bilan/bilan.css">
 <link type="text/css" rel="stylesheet" href="../../Phpleague/<?php echo $comite; ?>/league.css">
 <link type="text/css" rel="stylesheet" href="../10.css"> 
 <link type="text/css" rel="stylesheet" href="paramTiroir.css">
 <meta name=viewport content="width=device-width, initial-scale=1">
</head>

<body  class="center">
 <div class="fixed-header">
  <div class="container">
   <table width="95%" class="marginAuto borderWidth1 borderColorBlack">
    <tr> 
      <td width= "5%"class="h22"><a href="javascript:history.go(-1)"><img src="../../images/smart/flecheGauche.jpg" width="27" height="20"></a></td>
	  <td class="h22"> France Finales Rugby </td>
    </tr>
    <tr> 
      <td colspan="2" class=" h12 marginAuto borderWidth1 borderColorBlack"><?php echo $nom; ?> </td>
    </tr>
   </table>
  </div>
 </div>
 <div class="container">
  <br /> <br /> <br />
  <?php require 'bilan.php';?>
  <br>
  <?php require '../bas2.php';
 // include("../../pub/pub_displayCarre.php");?>
 </div>
</body>
</html>
<style>
.titreRouge11{
     font-family: Arial;
font-size: 23px;
     color: #FF0000;
     font-weight: bold;
}

.titreRouge22{
     font-family: Arial;
     font-size: 15px;
     color :#FF0000;
     font-weight: bold;

}
.titreSaison{
     font-family: Arial;
     font-size: 20px;
     color :#000000;
     font-weight: bold;
}

  </style>



