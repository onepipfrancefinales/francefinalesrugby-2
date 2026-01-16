<?php 
include("../saison.php");
require '../connect/connexion6.php';
include("../resultats/fonctions2.php");
require '../Phpleague/phppro/consult/fonctions_matchs.php';
require '../Phpleague/phppro/lang/lang_fr.php';
$comite="phppro"; 
$CMT="FEM";
$cmt="fem"; 
?>

  
<!DOCTYPE html PUBLIC>
<html lang="fr">
<head>
<meta name="description"
content="R�sultats du championnnant de France de F�d�rale 2 et en F�d�rale B :  Calendriers, r�sultats et statistiques des �quipes �voluant en F�d�rale 2 et F�d�rale B. Egalement disponible les toutes les  phases finales du championnat de France F�d�rale 2 (depuis  2003), ainsi que les palmar�s complets de ces 2 cat�gories.">
<meta name="keywords"
content="comit� Bourgogne,Comite Midi Pyrenees de Rugby,Comite Midi Pyrenees Rugby,Stade toulousain,Colomiers,FFR,Rugby,Federation,Fran�aise,Rugbyman,Rugbymen,Sport,Ballon,Ovale,">
<meta name="classification" content="Sport,Rugby">
<meta name="resource-type" content="document">
<meta name="copyright" content="Comite Midi Pyrenees de Rugby">
<meta name="author" content="Equipe Onepip">
<meta name="robots" content="All">
<link type="text/css" rel="stylesheet" href="../Phpleague/phppro/league.css"/>
  <link type="text/css" rel="stylesheet" href="../formulaireDG.css">
   <link type="text/css" rel="stylesheet" href="../ligne1.css">
<link type="text/css" rel="stylesheet" href="../../resultats/resultat.css"/>
<title>Championnat de France Fédérale Féminines </title>

</head>

<body>

  <table class="table" >
    <tr> 
      <td colspan="3" > 
        <img src="../images/stade3.jpg" width="1250" height="150">
      </td>
    </tr>
    <tr> 
      <td  colspan="3">
        <?php include "ligne_fem.php";?>
      </td>
    </tr>
    <tr > 
      <!-- Colonne de gauche -->
      <td class="colonneDroiteGaucheFem">
        <?php include("01gauche_fem.php");   ?>
      </td>
      <td class="colonneCentrale"> 
 
        <h1>Championnats de France Féminin<h1>
        <h2 class ="titre">Fédérale 1</h2>
          <?php 
		require '../resultats/liensDivers.php';
		require '../resultats/sommaires.php'; 
		?>
  <script language="JavaScript">
   function ouvrirPopup(page,nom,options) {
  window.open(page,nom,options);
}
</script>
 <br>

 <!--
 <table align ="center"  width="500">
 <tr> 
   <td>
<h4 class="bulleReglement">
 <a href="javascript:ouvrirPopup('../resultats/reglements2022_2023.php?cmt=<?php echo $cmt; ?>','','top=10, right=10,resizable=no, directories=no, statut=no, location=no, width=580, height=600, menubar=no')">Modalit&eacutes de qualification de la saison 2022-2023</a>

 </h4> 

  <h4 class="bulleReparGeo">
  <a href="javascript:ouvrirPopup('../resultats/cartographie/carteFemFed1_2022_2023.html','sdfsdfsdfs','top=10, right=10,resizable=no, directories=no, statut=no, location=no, width=530, height=600, menubar=no')">R&eacutepartition g&eacuteographique des clubs de F&eacuted&eacuterale 1</a>
 </h4> 	 
     </td>
	</tr> 
 </table> 

-->
  <?php  
		
		
		
		echo "<br />"."<hr />"."<hr />";
          
		echo "<h5> - Poule 1- </h5><br>";
		affichage(880291, 0, $comite, $bdd); 
		// journeesReportees($comite, $champ, $bdd);  
		  
        echo " <br>"."<br>";
         
		echo "<h5> - Poule 2- </h5><br>";
		affichage(880292, 0, $comite, $bdd); 
		// journeesReportees($comite, $champ, $bdd); 
		
		include("../pub/pub4.php"); 
        
		echo "<h5> - Poule 3- </h5><br>";
		affichage(880293, 0, $comite, $bdd); 
		// journeesReportees($comite, $champ, $bdd);  
		 

		echo "<h5> - Poule 4- </h5><br>";
		affichage(880294, 0, $comite, $bdd); 
		// journeesReportees($comite, $champ, $bdd); 
       
        echo "<hr />"."<hr />";
		require '../resultats/sommaires.php'; 
        require '../resultats/liensDivers.php';
          
        ?>
    
	  </td>	
    <!-- Colonne de droite -->
    <td class="colonneDroiteGaucheFem">
        <?php include "00droite_fem.php";  ?>
        <br><br><br><br>
      </td>
    </tr>
    <tr >
	

       
	
            <tr> 
              <td><?php //include "resultatsbas_fem.php";?></td>
            </tr>
            <tr>
              <td><?php //include "../pub/pub1.php";?></td>
            </tr>
            <tr> 
              <td><?php   // include "../bas.php";?></td>
            </tr>
  
   
    
    </tr>
   </table>
   <footer>
    <?php include "../footer.php"; ?>
  </footer>
</body>
</html>
