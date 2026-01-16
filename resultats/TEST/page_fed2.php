<?php 
$message = "";
require '../connect/connexion3.php';
include("fonctions.php");
include("../saison.php");
require '../Phpleague/phpfed2/consult/fonctions_matchs.php';
require '../Phpleague/phpfed2/lang/lang_fr.php';
$division = 150;
$comite="phpfed2"; 
$CMT="fed2"; 
$cmt="fed2";
$comiteNom="Fédérale 2 - Fédérale B";
?> 

<!DOCTYPE html>       
<html>
<head>
 <link type="text/css" rel="stylesheet" href="../Phpleague/phpfed2/league.css"/>
  <link type="text/css" rel="stylesheet" href="../formulaireDG.css">
  <link type="text/css" rel="stylesheet" href="resultat.css">
  <link type="text/css" rel="stylesheet" href="../ligne1.css">
<title>Championnats de France <?php echo $comiteNom;?></title>
<meta name="description" content=" Résulats des compétitions territoriales du comité Armagnac Bigorre. Calendriers, résultats et statistiques de l'honneur � la 4meée;rieée;quipes II comprises. Egalement disponible les phases finales territoriales des aée;es éeée;dentes et les palmares territoriaux des diée;erentes divisions du comée;. ">
<meta name="classification" content="Sport,Rugby">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> 
<meta name="resource-type" content="document">
<meta name="copyright" content="Comite Midi Pyrenees de Rugby">
<meta name="author" content="Equipe Onepip">
<meta name="robots" content="All">
</head>

<body >
<div align="center">
 <table width="1250"  >
  <tr  > 
   <td colspan="3" > <img src="../images/stade3.jpg" width="1250" height="150"></td>
  </tr>
  
  <tr >
   <td colspan="3" > 
          <?php  include("../01ligne.php"); ?>
   </td>
  </tr>
  
  <tr valign="middle" bgcolor="#FFFFFF"  > 
   <td colspan="3">
    <?php// include("../pub/pub_displayHorizontal.php"); ?>
	</td>
  </tr>
    <tr valign="middle" > 
      <td width="225"  bgcolor="#006699"  valign="top" height="1797"  > 
        <p>  <?php  include("../01gauche.php");?>   </p>       
      </td>
      <td bgcolor="#ffffff"  width="650"  bordercolor="#000000" height="1797" valign="top" > 
        <div align="center"><br />
          <h1>CHAMPIONNAT DE FRANCE</h1>
          <h2 class="titre">Fédérale 2 - Fédérale B</h2>
          <br />
		  <?php require 'liensDiversFed.php';
				include 'sommaireFed2.php';  
			?> 
		 <hr /> <hr />
          
          <?php// require("comPerso.php"); ?>
          
          <h5> <a name="1"></a>Poule 1 </h5>
          <?php 
		  $champ = 990151;
		  AffichageLogos($champ, $comite, false, $bdd)?>
         
          <table width="700" >
            <tr valign="top" > 
              <td > 
                <h3>Equipe I </h3>
                  <?php aff_journee($champ, $bdd);
		clmnt($champ, false, $bdd);
		aff_journeeSupp($champ,  $bdd); ?>           
              </td>
              <td > 
                <h3>Equipe II</h3>
                  <?php $champ=990251 ; 
		aff_journee($champ, $bdd);
		clmnt($champ, false, $bdd);
		aff_journeeSupp($champ,  $bdd); ?>
              </td>
            </tr>
          </table>     
		  <font color="#000000"> 
          <?php  //journeesReporteesCovid($comite, 151, $bdd);  ?>
           <p class="ressource"> <?php echo $message;  ?></p>
          <?php include("../pub/pub_displayHorizontal.php"); ?>
          </font> 
        
		<h5><a name="2"></a>Poule 2 </h5>
            <?php $champ = 990152; AffichageLogos($champ, $comite, false, $bdd)?>
               
          <table width="700" >
            <tr valign="top" > 
              <td > 
                <h3>Equipe I </h3>
                <?php
				aff_journee($champ, $bdd);
		clmnt($champ, false, $bdd);
		aff_journeeSupp($champ,  $bdd); 
			    ?>
              </td>
              <td > 
                <h3>Equipe II</h3>
                <?php $champ=990252 ; aff_journee($champ, $bdd);
		clmnt($champ, false, $bdd);
		aff_journeeSupp($champ,  $bdd); ?>
              </td>
            </tr>
          </table>
		  
           <?php // journeesReporteesCovid($comite, 152, $bdd );  ?>
          <p class="ressource"> <?php echo $message;  ?></p>
		  <!--
          <table width="376" border="1" bordercolor="#000000">
			<tr>
              <td height="141"> <a href="carteFederale2.htm"  onclick="open('carteFederale2.htm', 'Popup', 'scrollbars=1,resizable=1,height=810,width=680'); return false;" ><img src="../images/federale2.gif" width="132" height="142" border="0"></a></td>
              <td height="141"><b><font face="Arial, Helvetica, sans-serif" size="4"> <a href="carteFederale2.htm"  onclick="open('carteFederale2.htm', 'Popup', 'scrollbars=1,resizable=1,height=810,width=680'); return false;" ><font color="#000000">Car</font><font color="#000000">tographie 
                des clubs de Fédérale 2<br>
                (Saison 2019-2020)</font></a></font></b></td>
            </tr>
          </table>
		 --->
          <h5><a name="3"></a>Poule 3</h5>
           
            <?php $champ = 990153;AffichageLogos($champ, $comite, false, $bdd)?>
            
           
          <table width="700" >
            <tr valign="top" > 
              <td > 
                <h3>Equipe I </h3>
                <?php aff_journee($champ, $bdd);
		clmnt($champ, false, $bdd);
		aff_journeeSupp($champ,  $bdd); ?>
              </td>
              <td > 
                <h3>Equipe II</h3>
                <?php $champ=990253 ;  aff_journee($champ, $bdd);
		clmnt($champ, false, $bdd);
		aff_journeeSupp($champ,  $bdd); ?>
              </td>
            </tr>
          </table>  
           <?php  //journeesReporteesCovid($comite, 153, $bdd);  ?>
          <p class="ressource"> <?php echo $message;  ?></p>
         <?php include("../pub/pub_displayHorizontal.php"); ?>
          
		  <h5><a name="4"></a>Poule 4 </h5>
           
            <?php $champ = 990154; AffichageLogos($champ, $comite, false, $bdd)?>
          
          <table width="700" >
            <tr valign="top" > 
              <td > 
                <h3>Equipe I </h3>
                <?php aff_journee($champ, $bdd);
		clmnt($champ, false, $bdd);
		aff_journeeSupp($champ,  $bdd); ?>
              </td>
              <td > 
                <h3>Equipe II</h3>
                <?php $champ=990254 ; aff_journee($champ, $bdd);
		clmnt($champ, false, $bdd);
		aff_journeeSupp($champ,  $bdd); ?>
              </td>
            </tr>
          </table> 
          
		  <?php // journeesReporteesCovid($comite, 154, $bdd);  ?>
           <p class="ressource"> <?php echo $message;  ?></p>
          <?php  // include("../pub/pub4.php"); 
					include("comPerso2.php"); 
		  ?>
          <h5><a name="5"></a>Poule 5 </h5>
           
            <?php $champ = 990155;AffichageLogos($champ, $comite, false, $bdd)?>
            
          <table width="700" >
            <tr valign="top" > 
              <td > 
                <h3>Equipe I </h3>
                <?php aff_journee($champ, $bdd);
		clmnt($champ, false, $bdd);
		aff_journeeSupp($champ,  $bdd); ?>
              </td>
              <td > 
                <h3>Equipe II</h3>
                <?php $champ=990255 ;  aff_journee($champ, $bdd);
		clmnt($champ, false, $bdd);
		aff_journeeSupp($champ,  $bdd); ?>
              </td>
            </tr>
          </table> 
         
		  <?php//  journeesReporteesCovid($comite, 155, $bdd);  ?>
           <p class="ressource"> <?php echo $message;  ?></p>
		   
         <?php include("../pub/pub_displayHorizontal.php"); ?>
          <h5><a name="6"></a>Poule 6 </h5>
            
            <?php $champ = 990156; AffichageLogos($champ, $comite, false, $bdd)?>
           
          <table width="700" >
            <tr valign="top" > 
              <td > 
                <h3>Equipe I </h3>
                <?php aff_journee($champ, $bdd);
		clmnt($champ, false, $bdd);
		aff_journeeSupp($champ,  $bdd); ?>
              </td>
              <td > 
                <h3>Equipe II</h3>
                <?php 
				 $champ=990256 ; aff_journee($champ, $bdd);
		clmnt($champ, false, $bdd);
		aff_journeeSupp($champ,  $bdd);  ?>
              </td>
            </tr>
          </table>
          
          <br>
           <?php//  journeesReporteesCovid($comite, 156, $bdd);  ?>
          <p class="ressource"> <?php echo $message;  ?></p>
         
		 <h5><a name="7"></a>Poule 7</h5>     
            
			<?php $champ = 990157; AffichageLogos($champ, $comite, false, $bdd)?>
           
          <table width="700" >
            <tr valign="top" > 
              <td height="30" > 
                <h3>Equipe I </h3>
                <?php
				 aff_journee($champ, $bdd);
				clmnt($champ, false, $bdd);
				aff_journeeSupp($champ,  $bdd);?>
              </td>
              <td height="30" > 
                <h3>Equipe II</h3>
                <?php  $champ=990257 ; aff_journee($champ, $bdd);
		clmnt($champ, false, $bdd);
		aff_journeeSupp($champ,  $bdd);
				 ?>
              </td>
            </tr>
          </table>
		  
		
           <?php // journeesReporteesCovid($comite, 157, $bdd);  ?>
          <p class="ressource"> <?php echo $message;  ?></p>
         
		 
          <h5><a name="8"></a>Poule 8 </h5>
		
          	<?php 
			$champ = 990158;AffichageLogos($champ, $comite, false, $bdd)?>
          
          <table width="700" >
            <tr valign="top" > 
              <td > 
                <h3>Equipe I </h3>
                <?php
			    aff_journee($champ, $bdd);
		clmnt($champ, false, $bdd);
		aff_journeeSupp($champ,  $bdd);  ?>
              </td>
              <td > 
                <h3>Equipe II</h3>
                <?php $champ=990258 ; aff_journee($champ, $bdd);
		clmnt($champ, false, $bdd);
		aff_journeeSupp($champ,  $bdd);
				?>
              </td>
            </tr>
          </table>
		  
		  
          <?php  //journeesReporteesCovid($comite, 158, $bdd);  ?>
          <p class="ressource"> <?php echo $message;  ?></p>
          <?php
		  
		 //  include("comPerso2.php"); 
		  ?>
          <hr /><hr />
           <?php 
		   
			include 'sommaireFed2.php';
			require 'liensDiversFed.php';
			include("../pub/pub_displayCarre.php"); 
		   ?>     	
        </div>
      </td>
      <td bgcolor="#006699" width="225" valign="top" align="center" height="1797">  
          <?php  include("../00droite.php"); ?>
      </td>
    </tr>
    
  </table>
<?php include("piedDePage.php"); ?>
		<footer>
   <div id="9129-5"><script src="//ads.themoneytizer.com/s/gen.js?type=5">
    </script><script src="//ads.themoneytizer.com/s/requestform.js?siteId=9129&formatId=5" >
    </script>
   </div>
  </footer>
 </body>
</html>
