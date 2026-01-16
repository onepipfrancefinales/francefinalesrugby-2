<?php
session_start ();
include("../saison.php");
include("../fichierConfig.php");
require '../connect/connexion6.php';
require '../Phpleague/phpidf/consult/fonctions_matchs.php';
require '../Phpleague/phpidf/lang/lang_fr.php';
include("fonctions.php");
require "constantes.php";
$champLigue=18;
$sigleLigue="(NOR)";
$comite="phpidf";
$CMT="N";
$cmt="n";
$comiteNom="Normandie";?>

<!DOCTYPE html PUBLIC>
<html lang="fr">
<head>
<link rel= "canonical" href= "https://francefinalesrugby.fr/resultats/page_nor.php/" />
<meta charset="utf-8" />
 <link type="text/css" rel="stylesheet" href="../Phpleague/phpidf/league.css"/>
  <link type="text/css" rel="stylesheet" href="../formulaireDG.css">
  <link type="text/css" rel="stylesheet" href="resultat.css">
  <link type="text/css" rel="stylesheet" href="../ligne1.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ligue de rugby Normandie : Résultats et classements</title>
  <meta name="description"
 content="Ligue de rugby Normandie, résultats, classements, phases finales et palmarès des compétitions régionales. ">
  <meta name="classification" content="Sport,Rugby">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="resource-type" content="document">
  <meta name="copyright" content="Comite Midi Pyrenees de Rugby">
  <meta name="author" content="Equipe France Finales Rugby">
  <meta name="robots" content="All">
  
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9177538664500260"
     crossorigin="anonymous"></script>

</head>

<body>
<table class="table">
     <tr>
      <td colspan="3"> <img src="../images/banniere_haut/(<?php echo $CMT;?>).jpg" alt="" height="150" width="1250"></td>
    </tr>
    <tr>
      <td colspan="3"><?php include("../01ligne.php"); ?> </td>
    </tr>
    
    <tr>
      <!-- Colonne de gauche --> 
	  <td class="colonneDroiteGauche">
       <?php include("../01gauche.php");?> 
       </td>
     
	<!-- Colonne centrale --> 
	 <td class="colonneCentrale center">
          <h1> Compétitions Régionales</h1> 
          <h2 class="titre">Ligue de Normandie </h2>
          <h2 class="commentaire">Le comité territorial de Normandie est devenu<br>
            la ligue de Normandie en 2018.</h2>
		  <br>
<?php 
	include("liensDivers.php"); 
    include("sommaires.php");

    echo "<hr />"." <hr />";

    $tableauCompetition = $tableauNOR;

    foreach ($tableauCompetition as $champ) {


      $idCompetition = substr($champ, -3, 2);

      if ($idCompetition == 17) {
        $competition =  $REG1;
        $champ2 = $champ + 100;
        $nomSerie = "(Ex honneur/ promotion honneur)";
      } else if ($idCompetition == 18) {
        $competition =  $REG2;
        $champ2 = $champ + 9000;
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
	  /*        
	echo "<h5><a name=\"R1\"></a>".$REG1."<br/>
	<font face=\"Arial, Helvetica, sans-serif\" size=\"2\">".$EXHPH ."</font></h5>";		
  $champ = 180171; $champ2 = 180271;
	affichage($champ, $champ2, $comite, $bdd);  
	journeesReportees($comite, $champ, $bdd);
	perequation($comite, $champ, $bdd);
	
	//include("comPerso2.php"); 

	//require '../pub/pub_displayH_550.php';
      
  echo "<h5><a name=\"R2\"></a>".$REG2."<br />
	<font size=\"2\" face=\"Arial, Helvetica, sans-serif\">".$EXS1S2." </font> <br><br></h5>";	
	$champ = 180181; $champ2 = 189181;
	affichage($champ, $champ2, $comite, $bdd);  
	journeesReportees($comite, $champ, $bdd);
	perequation($comite, $champ, $bdd);
	
  echo "<h5><a name=\"R3\"></a>".$REG3." - ".$P1."<br />
	<font size=\"2\" face=\"Arial, Helvetica, sans-serif\">".$EXS1S2." </font> <br><br></h5>";	
  $champ = 180191; $champ2 = 0;
	affichage($champ, $champ2, $comite, $bdd);  
	journeesReportees($comite, $champ, $bdd);
	perequation($comite, $champ, $bdd);
	
	echo "<h5><a name=\"R3\"></a>".$REG3." - ".$P2."<br />
	<font size=\"2\" face=\"Arial, Helvetica, sans-serif\">".$EXS3S4." </font> <br><br></h5>";	
  $champ = 180192; $champ2 = 0;
	affichage($champ, $champ2, $comite, $bdd);  
	journeesReportees($comite, $champ, $bdd);
	perequation($comite, $champ, $bdd);
	*/
  include "liensDiversBas.php";
?>
          
  
      </td>
      <td class="colonneDroiteGauche"> 
        <p><?php include("../00droite.php"); ?> </p>
      </td>
    </tr>
   
</table>
<?php include("piedDePage.php"); ?>
<footer> 

 </footer>
</body>
</html>
