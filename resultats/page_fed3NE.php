<?php 
session_start ();
//$message = "Arr&ecirc;t des compétitions &agrave; l'occasion de la 7me journée du 01 Novembre";
//require '../connect/connexion3.php';
include("../saison.php");
include("../fichierConfig.php");
require '../connect/connexion6.php';
include("fonctions.php");
require "constantes.php";
require '../Phpleague/phpfed3NE/consult/fonctions_matchs.php';
require '../Phpleague/phpfed3NE/lang/lang_fr.php';
$comite="phpfed3NE"; 
$CMT="fed3NE"; 
$cmt="fed3NE";
$division = 160; 
$comiteNom="Fédérale 3 - Excellence B";
?> 

<!DOCTYPE html>
<html lang="FR">
<head>
<meta charset="utf-8" />
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9177538664500260"
     crossorigin="anonymous"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<!--
<script async src="https://www.googletagmanager.com/gtag/js?id=G-G7CSSC3EPH"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-G7CSSC3EPH');
</script>
-->
<link rel= "canonical" href= "https://francefinalesrugby.fr/resultats/page_fed3NE.php" >

 <link type="text/css" rel="stylesheet" href="../Phpleague/phpfed3NE/league.css">
  <link type="text/css" rel="stylesheet" href="../formulaireDG.css">
  <link type="text/css" rel="stylesheet" href="resultat.css">
  <link type="text/css" rel="stylesheet" href="../ligne1.css">
  <meta name="viewport" content="width=device-width">
<title>Championnats de France <?php echo $comiteNom;?></title>

<meta name="description" content=" Résulats des compétitions territoriales du comité Armagnac Bigorre. Calendriers, résultats et statistiques de l'honneur � la 4me Série, équipes II comprises. Egalement disponible les phases finales territoriales des années précédentes et les palmares territoriaux des difféerentes divisions du comité. ">
<meta name="classification" content="Sport,Rugby">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
<meta name="resource-type" content="document">
<meta name="copyright" content="Comite Midi Pyrenees de Rugby">
<meta name="author" content="Equipe Onepip">
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

<body >

 <table class="table">
  <tr  > 
    <td colspan="3" > <img src="../images/stade3.jpg" width="1250" height="150" atl="" role="none"></td>
  </tr>  
  <tr >
    <td colspan="3" >
      <?php include("../01ligne.php"); ?></td>
  </tr> 
  
  <tr> 
  <!-- Colonne de gauche --> 
  <td class="colonneGauche"  >
    <?php  include("../01gauche.php");?> </td>
   
   
   <!-- Colonne centrale --> 
  <td  class="colonneCentrale center" > 
        <br />
          <h1> CHAMPIONNAT DE FRANCE </h1>
	 <h2 class="titre">Fédérale 3 - Excellence B  </h2>
     <br>
	 <?php 
	require 'liensDivers.php';
	require 'sommaires.php';
   ?>
  <script >
   function ouvrirPopup(page,nom,options) {
  window.open(page,nom,options);
}
</script>
  <br>
   
  <table class = "infos">
 <tr> 
   <td>
  
	<h4 class="bulleReparGeo">
	 <a href="javascript:ouvrirPopup('cartographie/2023_2024/carteFed3.bmp','','top=10, right=10,resizable=no, directories=no, statut=no, location=no, width=530, height=600, menubar=no')">Répartition géographique des clubs de Fédéerale 3</a>
 
 </h4> 
    <h4 class="bulleReglement">
	 <a href="javascript:ouvrirPopup('reglements2023_2024.php?cmt=<?php echo $cmt; ?>','','top=10, right=10,resizable=no, directories=no, statut=no, location=no, width=580, height=600, menubar=no')">Modalités de qualification de la saison 2023-2024</a>
 </h4>
    </td>
	</tr> 
 </table> 

  <?php       
    echo "<hr>"." <hr>";
    //require("comPerso.php");
       
  
    foreach ($tableauFed3_1 as $champ) {
      echo "  <br>" . "<br>";
      $numPoule = substr($champ, -1);
      echo "<a name=\"$numPoule\"></a>";
      echo "<h5>" . "Poule " . $numPoule;
      echo "<br>"; 
      echo "</h5>";
      echo  "<br>" . "<br>" . "<br>";
      $champReserve = 100;
      $champ2 = $champ + $champReserve;
      affichage($champ, $champ2, $comite, $bdd);
      journeesReportees($comite, $champ, $bdd);
      perequation($comite, $champ, $bdd);
      echo "<br>" . "<br>";
    };
          
    echo "<hr />"." <hr />";?>
   
<table align ="center"  width="500">
  <tr> 
    <td>	<h4 class="bulleReglement">
			<a href="javascript:ouvrirPopup('reglements2023_2024.php?cmt=<?php echo $cmt; ?>','','top=10, right=10,resizable=no, directories=no, statut=no, location=no, width=580, height=600, menubar=no')">Modalités de qualification de la saison 2023-2024</a>
		</h4>
		<h4 class="bulleReparGeo">
			<a href="javascript:ouvrirPopup('cartographie/2023_2024/carteFed3.bmp','','top=10, right=10,resizable=no, directories=no, statut=no, location=no, width=530, height=600, menubar=no')">Répartition géographique des clubs de Fédérale 3</a>
		</h4> 
    </td>
  </tr> 
</table> 

  <br>
   
  <?php 		
	require 'sommaires.php';
	require 'liensDivers.php';
	echo "<br>" . " <br>";
	  ?>          
        
      </td>
	  <!-- Colonne de droite --> 
      <td class = "colonneGauche" >
        <?php  include("../00droite.php"); ?>   </td>
    </tr>
    
      
   </table>
 
  <footer>
  <?php include("../footer.php"); ?>
  </footer>
 </body>
</html>
