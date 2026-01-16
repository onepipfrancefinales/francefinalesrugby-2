<?php 
//$message = "Arr&ecirc;t des compétitions &agrave; l'occasion de la 7me journée du 01 Novembre";
require '../connect/connexion3.php';
include("../saison.php");
include("fonctions.php");
require '../Phpleague/phpf1/consult/fonctions_matchs.php';
require '../Phpleague/phpf1/lang/lang_fr.php';
$division = 140;
$comite="phpf1";
$CMT="fed1";
$cmt="f1";
$comiteNom="Fédérale 1 - Espoirs Fédérale 1";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
 <link type="text/css" rel="stylesheet" href="../Phpleague/phpf1/league.css"/>
  <link type="text/css" rel="stylesheet" href="../formulaireDG.css">
  <link type="text/css" rel="stylesheet" href="resultat.css">
  <link type="text/css" rel="stylesheet" href="../ligne1.css">
 <title>Championnat de France <?php echo $comiteNom;?></title>
 <meta name="description"
 content=" Résulats des compétitions territoriales du comité Armagnac Bigorre. Calendriers, résultats et statistiques de l'honneur � la 4me Série, équipes II comprises. Egalement disponible les phases finales territoriales des années précédentes et les palmares territoriaux des difféerentes divisions du comité. ">
 <meta name="classification" content="Sport,Rugby">
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <meta name="resource-type" content="document">
 <meta name="copyright" content="Comite Midi Pyrenees de Rugby">
 <meta name="author" content="Equipe Onepip"><meta name="robots" content="All">
</head>

<body>
 <div align="center"> 
 <table width="1250"> <tbody><tr>
 <td colspan="3"> 
 <img src="../images/stade3.jpg" height="150" width="1250">
 </td> 
 </tr> 
 <tr>
 <td colspan="3"> 
   <div>
     <?php include("../01ligne.php"); ?>
   </div>
</td> 
</tr> 
<tr bgcolor="#ffffff" valign="middle">
 <td colspan="3" height="26">
 <?php include("../pub/pub_displayHorizontal.php");?>
</td>
</tr> 
<tr valign="middle"> <td bgcolor="#006699" valign="top"
 width="225"> <p><?php include("../01gauche.php");?> </p> </td> 
      <td
 bordercolor="#000000" bgcolor="#ffffff" width="650" valign="top"> 
        <div align="center"><br>
           <h1> CHAMPIONNAT DE FRANCE </h1> 
          <h2 class ="titre">Fédérale 1 - Espoir</h2> 
          <br />
		  <?php require 'liensDiversFed.php'?>
          <table align="center" bordercolor="#000000" width="500">
            <tbody>
            <tr> 
              <td class="tab3"bcolspan="2"> 
                <a href="#1">Poule 1 </a> 
              </td>
              <td class="tab3"  colspan="2"> 
                <a href="#2">Poule 2 </a>
              </td>
              <td class="tab3"  colspan="2"> 
                <a href="#3">Poule 3 </a>
              </td>
              <td class="tab3"  colspan="2"> 
                 <a href="#4">Poule 4 </a>
              </td>
            </tr>
            </tbody>
          </table>
<p>

 </p> 
<hr> <hr><?php// require("comPerso.php"); ?>

          <h5><a name="1"></a>Poule 1</h5><br>
          <?php 
		  $champ = 990141; 
		  AffichageLogos($champ, $comite, false, $bdd)?>
          
          <table width="700" >
            <tr > 
              <td > 
                <h3>Equipe I </h3>
                <?php 
		$champ = 990141;		aff_journee($champ, $bdd);
		clmnt($champ, false, $bdd);
		aff_journeeSupp($champ,  $bdd); ?>
              </td>
              <td > 
                <h3>Equipe II</h3>
                <?php $champ=990241 ; aff_journee($champ, $bdd);
		clmnt($champ, false, $bdd);
		aff_journeeSupp($champ,  $bdd); ?>
              </td>
            </tr>
          </table>
		  <?php  //journeesReporteesCovid($comite, 141, $bdd);  ?>
           <p class="ressource"> <?php echo $message;  ?></p>
           
            <?php 

		  
		  // include("comPerso2.php"); 
		  ?>
          <?php include("../pub/pub_displayHorizontal.php");?>
          <h5><a name="2"></a>Poule 2</h5>
          <?php $champ = 990142; AffichageLogos($champ, $comite, false, $bdd)?>
         
          <table width="700" >
            <tr > 
              <td > 
                <h3>Equipe I </h3>
                <?php aff_journee($champ, $bdd);
		clmnt($champ, false, $bdd);
		aff_journeeSupp($champ,  $bdd); ?>
              </td>
              <td > 
                <h3>Equipe II</h3>
                <?php $champ=990242 ; aff_journee($champ, $bdd);
		clmnt($champ, false, $bdd);
		aff_journeeSupp($champ,  $bdd); ?>
              </td>
            </tr>
          </table>
         <?php // journeesReporteesCovid($comite, 142, $bdd);  ?>
           <p class="ressource"> <?php echo $message;  ?></p>
          

          <h5><a name="3"></a>Poule 3</h5>
          <?php $champ = 990143; 
		        AffichageLogos($champ, $comite, false, $bdd)
				?>
        
          <table width="700" >
            <tr > 
              <td > 
                <h3>Equipe I </h3>
                <?php aff_journee($champ, $bdd);
		clmnt($champ, false, $bdd);
		aff_journeeSupp($champ,  $bdd); ?>
              </td>
              <td > 
                <h3>Equipe II</h3>
                <?php $champ=990243 ;aff_journee($champ, $bdd);
		clmnt($champ, false, $bdd);
		aff_journeeSupp($champ,  $bdd); ?>
              </td>
            </tr>
          </table>
        <?php // journeesReporteesCovid($comite, 143, $bdd);  ?>
           <p class="ressource"> <?php echo $message;  ?></p>
 <?php include("../pub/pub_displayHorizontal.php");?>
          <h5><a name="4"></a>Poule 4</h5> 
		  
          <?php $champ = 990144; AffichageLogos($champ, $comite, false, $bdd)?>
        
          <table width="700" >
            <tr > 
              <td > 
                <h3>Equipe I </h3>
                <?php aff_journee($champ, $bdd);
		clmnt($champ, false, $bdd);
		aff_journeeSupp($champ,  $bdd); ?>
              </td>
              <td > 
                <h3>Equipe II</h3>
                <?php $champ=990244 ; aff_journee($champ, $bdd);
		clmnt($champ, false, $bdd);
		aff_journeeSupp($champ,  $bdd); ?>
              </td>
            </tr>
          </table>
          <?php // journeesReporteesCovid($comite, 144, $bdd);  ?>
           <p class="ressource"> <?php echo $message;  ?></p>
           
 
            <?php
		   
		  // include("comPerso2.php"); 
		 
		
		  ?> 
		  <hr><hr>
         
            
        
          <table align="center"
 border color="#000000" width="500">
            <tbody> 
            <tr> 
              <td class="tab3"bcolspan="2"> 
                <a href="#1">Poule 1 </a> 
              </td>
              <td class="tab3"  colspan="2"> 
                <a href="#2">Poule 2 </a>
              </td>
              <td class="tab3"  colspan="2"> 
                <a href="#3">Poule 3 </a>
              </td>
              <td class="tab3"  colspan="2"> 
                 <a href="#4">Poule 4 </a>
              </td>
            </tr>
            </tbody> 
          </table>
          <?php require 'liensDiversFed.php'?>
         <?php include("../pub/pub_displayHorizontal.php");?>

        </div>
		</td> 
		<td  align="center" bgcolor="#006699" height="1819" valign="top" width="225">
<p><?php include("../00droite.php"); ?> </p>
</td>
</tr>


</table>
<?php include("piedDePage.php"); ?> 
<footer> <div id="9129-5"><script
 src="//ads.themoneytizer.com/s/gen.js?type=5">
</script><script
 src="//ads.themoneytizer.com/s/requestform.js?siteId=9129&amp;formatId=5">
</script></div></footer></body></html>