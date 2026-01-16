<?php 
session_start ();
include "../saison.php" ;
require '../connect/connexion6.php';
include "fonctions.php" ;
require '../Phpleague/phppro/consult/fonctions_matchs.php';
require '../Phpleague/phppro/lang/lang_fr.php';

$comite="phppro"; 
$CMT="PRO";
$cmt="pro"; 
$comiteNom="";
?> 


<!DOCTYPE html PUBLIC>
<html lang="fr">
<head>
<link rel= "canonical" href= "https://francefinalesrugby.fr/resultats/page_pro.php">
<meta charset="utf-8" />
  <link type="text/css" rel="stylesheet" href="../Phpleague/phppro/league.css">
  <link type="text/css" rel="stylesheet" href="../formulaireDG.css">
  <link type="text/css" rel="stylesheet" href="resultat.css">
  <link type="text/css" rel="stylesheet" href="../ligne1.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta name="description" content="Résulats de toutes les compétitions Professionnelles. Calendriers, résultats et statistiques de l'honneur � la 4me Série, équipes II comprises. Egalement disponible les phases finales territoriales des années précédentes et les palmar�s territoriaux des differentes divisions du comité.">
 <meta name="keywords" content="comité Bourgogne,Comite Midi Pyrenees de Rugby,Comite Midi Pyrenees Rugby,Stade toulousain,Colomiers,FFR,Rugby,Federation,Fran�aise,Rugbyman,Rugbymen,Sport,Ballon,Ovale,">
 <meta name="classification" content="Sport,Rugby">
 <meta name="resource-type" content="document">
 <meta name="copyright" content="Comite Midi Pyrenees de Rugby">
 <meta name="author" content="Equipe Onepip">
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <meta name="robots" content="All">
 <title>Championnat de France Professionnel</title>

 <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9177538664500260"
     crossorigin="anonymous"></script>
	</head>

<body> 
  <table class="table">
    <tr>
     <td colspan="3" height="157"> 
		<img src="../images/boucliers/brennusGrand.jpg" alt="" width="1250" height="150">
	</td>
    </tr>
	<tr>
      <td colspan="3">
		<?php include "../01ligne.php"; ?>
	</td>
    </tr>
	<tr >
      <td colspan="3">
		<?php include "../pub/pub_displayHorizontal.php";?>
	</td>
    </tr>
    
	<tr>
	<!-- Colonne de gauche --> 
      <td class="colonneDroiteGauche">
		<?php include "../01gauche.php";?>
	</td>
      
	  <!-- Colonne centrale --> 
	  <td class="colonneCentrale center">
        <h1>CHAMPIONNATS DE FRANCE</h1>
          <h2 class="titre">Professionnels</h2>
		
		<?php  
		include "liensDivers.php";  
		include "sommaires.php"; 
		echo "<hr>"."<hr>";?>
		
		<br>
	    <br>
        <!--
		<table width="550" border="3" bgcolor="#CCCCCC" align="center">
          <tr> 
              <td height="135" border color="#000000"> 
                <div align="center"><a href="https://play.google.com/store/apps/details?id=com.roro.rjere" target="_top"><img src="../images/images%20GOOGLE%20PLAY2.jpg" width="254" height="83" border="0"></a></div>
                <div align="center"><font face="Arial, Helvetica, sans-serif"><b><font color="#000000">Télécharger 
                  l'appli</font> <font color="#FF0000">France Finales Rugby App</font><br>
                  <font color="#000000">pour consulter résultats et classements</font></b></font></div>
              </td>
            </tr>
        </table>
         --> 
        <p>
        <br>
	<?php
    echo "   <a name=\"1\"></a><h2>Championnat de France Top 14</h2><br> <br>";
	echo "     <img src=\"../images/logos_divisions/top14.jpg\" width=\"151\" height=\"155\"><br>";
	$champ = 990110;
	//$champ2 = 990110;
	affichage($champ, $champ2, $comite, $bdd);
	journeesReportees($comite, $champ, $bdd); 
	perequation($comite, $champ, $bdd);
	
	//require '../pub/pub_displayH_550.php'; 
		  
       
    echo " <a name=\"2\"></a> <h2>Championnat de France Pro D2</h2><br><br>";
	echo " <img src=\"../images/logos_divisions/pro%20d2.jpg\" width=\"150\" height=\"155\"><br>";
	echo " <br>.<br>";
	$champ = 990120;
	//$champ2 = 990120;
	affichage( $champ, $champ2, $comite, $bdd);
	journeesReportees($comite,  $champ, $bdd); 
	perequation($comite, $champ, $bdd);
	
	//include("../pub/pub_displayHorizontal.php"); 
    echo " <img src=\"../images/logos_divisions/nationale1.jpg\" width=\"300\" height=\"80\">";
	echo "<br>";      
    echo " <a name=\"3\"></a><h2> Championnat de France  <br> Nationale 1</h2><br>";
	echo " <br>.<br>";
	$champ = 990130;
	//$champ2 = 990130;
	affichage(990130, $champ2, $comite, $bdd);
    journeesReportees($comite, $champ, $bdd); 
	perequation($comite, $champ, $bdd);
	
	echo " <img src=\"../images/logos_divisions/nationale2.jpg\" width=\"300\" height=\"80\">";
	echo " <a name=\"3\"></a><h2> Championnat de France  <br> Nationale 2 </h2><br>";
	echo " </a><h2> Poule 1 </h2><br>";
	$champ = 990135;
	//$champ2 = 990135;
	affichage($champ, $champ2, $comite, $bdd);
    journeesReportees($comite, $champ, $bdd); 
	perequation($comite, $champ, $bdd);
	
	echo " </a><h2> Poule 2 </h2><br>";
	$champ = 990136;
	//$champ2 = 990136;
	affichage($champ, $champ2, $comite, $bdd);
    journeesReportees($comite, $champ, $bdd); 
	perequation($comite, $champ, $bdd);
	
    echo "<hr>"."<hr>";
	include "sommaires.php" ;
	include "liensDivers.php" ; 
	//require '../pub/pub_displayH_550.php'; ?>
   <br><br> 
   </div>
   </td>
      
	  <!-- Colonne de droite --> 
	  <td class="colonneDroiteGauche">
		<?php include "../00droite.php" ; ?>
	</td>
    </tr>
  </table>
  

  <footer> 
   <?php include "piedDePage.php" ; ?>
  </footer>
 </body>
</html>
