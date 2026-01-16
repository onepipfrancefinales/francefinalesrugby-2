<?php
$equipe=  $_GET['id_equipe']; 
$id_equipe = $equipe;
$phpComite =  $_GET['comite'];
$comite =  $_GET['comite'];
$champ =  $_GET['champ'];
$id_champ =  $_GET['champ'];
//$fonctions_matchs = "../../Phpleague/".$comite."/consult/fonctions_matchs.php";
$lang_fr = "../../Phpleague/".$comite."/lang/lang_fr.php";
//require $fonctions_matchs;
//require $lang_fr;
require "../../Phpleague/".$comite."/consult/fonctions_matchs.php";
require "../../Phpleague/".$comite."/lang/lang_fr.php";
require ("../../saison.php");
require ("../fonctions.php");
require ("../../connect/connexion1.php");


nomClub($equipe, $bdd);
nomLigue($equipe, $bdd);
affichage5Saisons($saison, $equipe,$champ,$phpComite, $bdd);

//connection � la base de donn�es
if ( $phpComite == "phppro" OR $phpComite == "phpf1" OR $phpComite == "phpfed2" OR $phpComite == "phpfed3NE" OR $phpComite == "phpfed3GS")
	require ("../../connect/connexion3.php"); 
elseif ( $phpComite == "phppl")
	require ("../../connect/connexion6.php"); 
else
	require ("../../connect/connexion2.php"); 

nomDivision($phpComite, $champ, $bdd);
meilleureAttaque ($phpComite, $champ, $bdd);
meilleureDefense ($phpComite, $champ, $bdd);
nombreEquipe($phpComite, $champ, $bdd);
traitementDesScores($equipe, $phpComite, $bdd);												
	
?>


<!DOCTYPE html>
<html lang="fr">
<head>

  
  <link type="text/css" rel="stylesheet" href="../../Phpleague/<?php echo $comite; ?>/league.css"/>
  <link type="text/css" rel="stylesheet" href="bilan.css">
  <link type="text/css" rel="stylesheet" href="../../formulaireDG.css">
  <link type="text/css" rel="stylesheet" href="../../ligne1.css">
  <title>Statistiques de <?php echo $nom;?></title>
  <meta name="description"
 content=" Résulats des compétitions territoriales du comité Armagnac Bigorre. Calendriers, résultats et statistiques de l'honneur � la 4me Série, équipes II comprises. Egalement disponible les phases finales territoriales des années précédentes et les palmares territoriaux des difféerentes divisions du comité. ">
  <meta name="classification" content="Sport,Rugby">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="resource-type" content="document">
  <meta name="copyright" content="Comite Midi Pyrenees de Rugby">
  <meta name="author" content="Equipe Onepip">
  <meta name="robots" content="All">
</head>
<body>

<table width="1100" align="center">
    <tr>
      <td colspan="3"> <?php  include("../../images/page_image_al.php");  ?></td>
    </tr>
    <tr>
      <td colspan="3">
      <div><?php include("../../01ligne.php"); ?> </div>
      </td>
    </tr>
    <tr bgcolor="#ffffff" valign="middle">
      <td colspan="3" height="74"> 
        <div align="center"><?php include("../../pub/pub20.php"); ?> </div>
      </td>
    </tr>
    <tr valign="middle">
      <td bgcolor="#006699" valign="top" width="225" height="89"> 
       <?php include("../../01gauche.php");?>
    </td>
    <td bgcolor="#ffffff" width="650" valign="top" height="89"> 
     <div align="center">
	  <?php include("bilan.php"); ?>  
      <?php include("../../pub/pub_carre.php"); ?>
	  </div>
    </td>
    <td align="center" bgcolor="#006699" height="89" valign="top" width="225"> 
        <?php include("../../00droite.php"); ?>
    </td>
  </tr>
  <tr>
    <th colspan="3" bgcolor="#ffffff" height="77" valign="top">
      <table border="1" width="100%">
        <tr>
          <td><?php include("../../comitebas.php"); ?> </td>
        </tr>
        <tr>
          <td><?php include("../../pub/pub1.php"); ?> </td>
        </tr>
        <tr>
         <td> <?php include("../../bas.php"); ?> </td>
        </tr>
      </table>
    </th>
  </tr>
</table>
   <footer> 
    <div id="9129-5">
	 <script src="//ads.themoneytizer.com/s/gen.js?type=5"></script>
	 <script src="//ads.themoneytizer.com/s/requestform.js?siteId=9129&amp;formatId=5">	</script>
    </div>
   </footer>
  </body>
</html>
