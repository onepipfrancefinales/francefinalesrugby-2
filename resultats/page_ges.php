
<!DOCTYPE html PUBLIC>       
<html lang="fr">
<head>
<link rel= "canonical" href= "https://francefinalesrugby.fr/resultats/page_ges.php/" />
<meta charset="utf-8" />
  <link type="text/css" rel="stylesheet" href="../Phpleague/phpidf/league.css"/>
  <link type="text/css" rel="stylesheet" href="../formulaireDG.css">
  <link type="text/css" rel="stylesheet" href="resultat.css">
  <link type="text/css" rel="stylesheet" href="../ligne1.css">
<title>Ligue de rugby Grand Est : Résultats et classements</title>
<meta name="description" content=" Ligue de rugby Grand Est, résultats, classements, phases finales et palmarès des compétitions régionales.">
<meta name="classification" content="Sport,Rugby">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> 
<meta name="resource-type" content="document">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="copyright" content="Comite Midi Pyrenees de Rugby">
<meta name="author" content="Equipe France Finales Rugby">
<meta name="robots" content="All">
  <script language="JavaScript">
   function ouvrirPopup(page,nom,options) {
  window.open(page,nom,options);
}
</script>
<!--
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9177538664500260"
     crossorigin="anonymous"></script>
-->
</head>

<?php
session_start ();
include("../saison.php");
include("../fichierConfig.php");
require '../connect/connexion6.php';
require '../Phpleague/phpidf/consult/fonctions_matchs.php';
require '../Phpleague/phpidf/lang/lang_fr.php';
include("fonctions.php");
require 'constantes.php';
$champLigue=15;
$sigleLigue="(GES)";
$comite="phpidf";
$CMT="AL";
$cmt="al"; 
$comiteNom="Alsace Lorraine";?> 


<body >
  <table class="table">
    <tr  > 
      <td colspan="3" >
        <img src="../images/banniere_haut/(<?php echo $CMT;?>).jpg" alt="" width="1250" height="150"></td>
    </tr>
    <tr >
      <td colspan="3" >
        <?php include("../01ligne.php"); ?></td>
    </tr>
    <td colspan="3">
        <?php include("../pub/pub_displayHorizontal.php"); ?>
      </td>
    <tr> 
	  <!-- Colonne de gauche --> 
      <td class="colonneDroiteGauche">
        <?php  include("../01gauche.php");?>
      </td>
     
	 <!-- Colonne centrale --> 
	 <td class="colonneCentrale center" > 
         
          <h1> Compétitions Régionales</h1>
          <h2 class="titre">Ligue du Grand Est </h2>
          <h2 class="commentaire">La ligue Grand Est est née de la fusion des<br>
            comités territoriaux Lorraine et Alsace.<br></h2>
<?php 
	include("liensDivers.php");  
    include("sommaires.php");
         
	echo "<hr />"." <hr />";
          
  $tableauCompetition = $tableauGES;

  foreach ($tableauCompetition as $champ) {

    // echo $champ;
    $idCompetition = substr($champ, -3, 2);
    // echo $idCompetition;
    if ($idCompetition == 17) {
      $competition =  $REG1;
      $champ2 = $champ + 100;
     // $champ2 = 0;
      $nomSerie = "(Ex honneur/ promotion honneur)";
    } else if ($idCompetition == 18) {
      $competition =  $REG2;
      $champ2 = $champ + 9000;
    //  $champ2 = 0;
      $nomSerie = "(Ex 1re/ 2me série)";
    } else if ($idCompetition == 19) {
      $competition =  $REG3;
      $champ2 = 0;
      $nomSerie = "(Ex 3me/ 4me série)";
    }

    echo "  <br>" . "<br>";
    echo "<h5>" .  $competition . " - " . "Poule " . substr($champ, -1);
    echo "<br>"; ?>

    <span class="size2"> <?php echo $nomSerie; ?> </span>
  <?php


    echo "</h5>";
    echo  "<br>" . "<br>" . "<br>";
    affichage($champ, $champ2, $comite, $bdd);
    journeesReportees($comite, $champ, $bdd);
    perequation($comite, $champ, $bdd);
    echo "<br>" . "<br>";
  }
	
  include "liensDiversBas.php";

	?>
        </div>
      </td>
	  
      <td class="colonneDroiteGauche"> 
        <p><?php include("../00droite.php"); ?> </p>
      </td>
    </tr>
  </table>
		<footer>
		<?php include("piedDePage.php"); ?>	
		</footer>
	</body>
</html>
