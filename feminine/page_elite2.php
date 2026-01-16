<?php 
include("../saison.php");
require'../connect/connexion6.php';
include("../resultats/fonctions2.php");
require '../Phpleague/phppro/consult/fonctions_matchs.php';
require '../Phpleague/phppro/lang/lang_fr.php';
$comite="phppro";
$CMT="FEM"; 
$cmt="fem";
?> 
 
<!DOCTYPE html>   
<head>
<meta name="description"
content="Résulats de toutes les compétitions Professionnelles. Calendriers, résultats et statistiques de l'honneur à la 4me Série, équipes II comprises. Egalement disponible les phases finales territoriales des années précédentes et les palmarès territoriaux des differentes divisions du comité.">
<meta name="keywords"
content="comité Bourgogne,Comite Midi Pyrenees de Rugby,Comite Midi Pyrenees Rugby,Stade toulousain,Colomiers,FFR,Rugby,Federation,Française,Rugbyman,Rugbymen,Sport,Ballon,Ovale,">
<meta name="classification" content="Sport,Rugby">
<meta name="resource-type" content="document">
<meta name="copyright" content="Comite Midi Pyrenees de Rugby">
<meta name="author" content="Equipe Onepip">
<meta name="robots" content="All">
<link type="text/css" rel="stylesheet" href="../Phpleague/phppro/league.css"/>
  <link type="text/css" rel="stylesheet" href="../formulaireDG.css">
   <link type="text/css" rel="stylesheet" href="../ligne1.css">
<link type="text/css" rel="stylesheet" href="../../resultats/resultat.css"/>
<title>Championnat de France F&eacute;minin Elite</title>
<script language="JavaScript">
<!--
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->
</script>
<body>
<div align="center">
  <table width="1250" height="639">
    <tr valign="middle" align="center" > 
      <td colspan="3" height="157"><img src="../../images/stade3.jpg" width="1250" height="150"></td>
    </tr>
    <tr valign="middle" align="center" bgcolor="#000000"> 
      <td height="26" colspan="3"><?php    include("ligne_fem.php");?></td>
    </tr>
    <tr valign="middle" align="center" bgcolor="#000000">
		<td width="225" height="1267" bgcolor="#996699" align="center" valign="top"><br> <br> <?php  include("01gauche_fem.php");  ?></td>
        <td align="center" border color="#000000" bgcolor="#ffffff" width="650" height="1259" valign="top">      
        <div align="center"><br />
        <h1>Championnats de France F&eacute;minin<h1>
        <h2 class ="titre">Elite 2</h2>
          
        
		  <?php 
		  require '../resultats/liensDivers.php';
		  require '../resultats/sommaires.php'; 
		  echo "<hr />"."<hr />";
		
		echo "<h5> Elite 2 - Challenge Armelle Auclair</h5><br>";
		affichage(880285, 0, $comite, $bdd); 
		// journeesReportees($comite, $champ, $bdd);  
		
		echo "<hr />"."<hr />";
		require '../resultats/sommaires.php'; 
         require '../resultats/liensDivers.php';
		   
		 
 ?>
		
          
          
          <?php// include("../pub/pub_carre.php"); ?>
        </div>
      </td>
      <td height="1267" bgcolor="#996699" width="225" valign="top"><p><?php include("00droite_fem.php");  ?></p></td>
    </tr>
    <tr > 
      <th bgcolor="#FFFFFF" colspan="3" valign="top" height="30"> 
        <div align="center"> 
          <table width="1250" border="1" >
            <tr> 
              <td><?php include("resultatsbas_fem.php"); ?> </td>
            </tr>
            <tr>
              <td><?php include("../pub/pub1.php"); ?></td>
            </tr>
            <tr> 
              <td><?php include("../bas.php"); ?></td>
            </tr>
          </table> 
        </div>
        </th>
       </tr>
     </table>
    </div>
  </body>
</html>
