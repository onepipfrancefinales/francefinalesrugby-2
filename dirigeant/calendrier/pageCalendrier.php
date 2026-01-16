<?php 
//if (isset($_POST['idFfr'])) $idFfr = $_POST['idFfr'];else $idFfr ="";
if (isset($_GET['idEquipe'])) $idEquipe = $_GET['idEquipe'];else $idEquipe ="2029076";
if (isset($_GET['comite'])) $bddComite = $_GET['comite']; else $bddComite ="fed3NE";
if (isset($_GET['champ'])) $champ = $_GET['champ'];else $champ = "992161";

require ("../../saison.php"); 
require '../../fonctions.php';
require 'fonctionsDonnees.php';

$chaine =$idEquipe;

require '../../connect/connexion1.php';

infosclub($chaine, $bdd);


//echo $idEquipe;echo "<br />";
//echo $idFfr;echo "<br />";
	
if (isset( $division)) $division= $division; else $division="";
if (isset( $nomLigue)) $nomLigue= $nomLigue; else $nomLigue="";
if (isset( $sigle)) $sigle= $sigle; else $sigle="";
if (isset( $bddComite)) $bddComite= $bddComite; else $bddComite="";
if (isset( $titre)) $titre= $titre; else $titre="";
if (isset( $championnat)) $championnat= $championnat; else $championnat="";
if (isset( $equipeR)) $equipeR = $equipeR; else $equipeR="";



//echo "idFfr : ".$idFfr;echo "<br />";echo "<br />";
if (strlen($idFfr)<5)
$id_equipe="5157F";
else 
$id_equipe =$idFfr;

identiteClub($id_equipe, $bdd);
//echo "------".$id_equipe."--------";echo "<br / >";
//palmaresEquipes ($id_equipe, $bdd);		

//echo "sigleComite :".$sigleComite;echo "<br />";
//echo "equipe : ".$equipe; echo "<br / >";
//echo "comite :".$comite;  echo "<br / >";

require '../../connect/connexion6.php';

divisionEtPoule($champ, $bddComite, $equipe, $bdd);
NbreDeJournee ($bddComite, $equipe, $divisionChiffre, $bdd);
calendrier ($equipe, $bddComite, $divisionChiffre, $nbreJourneeMax, $bdd);
					
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <link type="text/css" rel="stylesheet" href="../../ligne1.css">
  <link type="text/css" rel="stylesheet" href="../../formulaireDG.css">
  <link type="text/css" rel="stylesheet" href="../../resultats/resultat.css">
  <link type="text/css" rel="stylesheet" href="../../lienNoir.css">
  <title>Championnats Territoriaux comité; <?php echo $comiteNom;?></title>
  <meta name="description" content=" Résulats des compétitions territoriales du comité Armagnac Bigorre. Calendriers, résultats et statistiques de l'honneur � la 4me S&eacute;rie, &eacute;quipes II comprises. Egalement disponible les phases finales territoriales des ann&eacute;es pr&eacute;c&eacute;dentes et les palmares territoriaux des diff&eacute;erentes divisions du comit&eacute;. ">
  <meta name="classification" content="Sport,Rugby">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="resource-type" content="document">
  <meta name="copyright" content="Comite Midi Pyrenees de Rugby">
  <meta name="author" content="Equipe Onepip">
  <meta name="robots" content="All">
</head>
<body>



<div align="center">
<table width="1100">
  <tbody>
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
    
	<tr>
     <!-- Colonne centrale -->
      <td class="colonneDroiteGauche"> 
        <p><?php include("../../01gauche.php");?> </p>
      </td>
      <td class="colonneCentrale"> 
        <div align="center"> 
          <?php include("impressionCalendrier0.php"); ?>
          <p>&nbsp;</p>
		  
		   <hr/>
  
          <p>
          <table width="593" border="0" align="center">
            <tr> 
              <td width="289" valign="top"> 
                <div align="center"><br>
                  <table width="250" border="1"  cellspacing="1">
                    <tr> 
                      <td bgcolor="#CCCCCC" height="29"> 
                        <div align="center"><b><font size="5" color="#000000">Palmar&egrave;s</font></b></div>
                      </td>
                    </tr>
                  </table>
                </div>
                <p align="center"><b><font face="Arial, Helvetica, sans-serif" size="2" color="#000000">Equipe 
                  Fanion</font></b><br>
                  <font face="Times New Roman, Times, serif" size="3"> <font size="2" face="Arial, Helvetica, sans-serif"> 
                  <font color="#000000"> 
                  <?php
            //*******  Affichage palmares Equipe Une ********
          require '../../connect/connexion1.php';
          infosclub($idFfr, $bdd);
          palmaresEquipes ($idFfr, "bdequipe1", $bdd);
          if  ($nbreTitre > 5)
            $nbreTitreAffiches = 6;
          else 
            $nbreTitreAffiches = $nbreTitre;
            for ($i=0; $i<	$nbreTitreAffiches; $i++)
                {
                echo ${"saison".$i}.' '.${"titre".$i}.' '.${"championnat".$i}.' '.${"division".$i}."<br />";
                      }				
            
            ?>
                  </font></font></font></p>
                <p align="center"><b><font face="Arial, Helvetica, sans-serif" size="2" color="#000000">Equipe 
                  II</font></b><br>
				  <font face="Times New Roman, Times, serif" size="3"> <font size="2" face="Arial, Helvetica, sans-serif"> 
                  <font color="#000000"> 
                  <?php
            //*******  palmares Equipe II ********
            
            require '../../connect/connexion1.php';
          palmaresEquipes ($idFfr, "bdequipe2", $bdd);
          if  ($nbreTitre > 5)
          $nbreTitreAffiches = 6;
          else 
          $nbreTitreAffiches = $nbreTitre;
              for ($i=0; $i<	$nbreTitreAffiches; $i++)
                {
                echo ${"saison".$i}.' '.${"titre".$i}.' '.${"championnat".$i}.' '.${"division".$i}."<br />";
                      }
            
            ?>
            </font></font></font></p>
      </td>
      <!-- Colonne de droite -->
        <td class="colonneDroiteGauche"> 
          
        
        
        
        <table width="250" border="1" bordercolor="#000000" height="357" align="center">
            <tr> 
              
                    <td height="328"> <font color="#000000">
                      <?php
		        echo "<br />";?>
                      </font> 
                      <p align="center"> <font color="#000000"> 
                        <?php echo "Ligue r&eacute;gionale";?>
                        <?php echo "<br />".$nomLigue;?>
                        </font></p>
		
                      <p align="center"><strong> <font size="6" color="#000000">
                        <?php echo $sigle; ?>
                        </font></strong> </p>
             <p align="center"><strong><font size="6"> 
                 <?php 
		          $logo = substr ($equipe, -5);
		            {print("<img src=\"/images/blasons200_200/$logo.gif\" >");}
		           ?>
                  </font></strong></p>
                <p align="center"><strong> <font size="6"> </font></strong></p>
              </td>
            </tr>
        </table>



          <div align="center"></div>
          <div align="center"></div>
        </td>
      </tr>
      <tr> 
        <td width="289"> 
          <div align="center"></div>
        </td>
        <td width="294" valign="middle"> 
          <div align="center"></div>
        </td>
      </tr>
      <tr> 
        <td width="289"> 
          <div align="center"></div>
        </td>
        <td width="294" valign="middle"> 
          <div align="center"></div>
        </td>
      </tr>
      <tr> 
        <td colspan="2"> 
          <div align="center"> 
            <table width="520" border="2"  cellspacing="1" align="center">
              <tr> 
                <td bgcolor="#CCCCCC" align="left" height="35"> 
                        <div align="center"><font face="Arial, Helvetica, sans-serif"><b><font size="5" color="#000000">Calendrier 
                          <?php echo $saison-1; ?>
                          - 
                          <?php echo $saison; ?>
                          </font></b></font></div>
                </td>
              </tr>
            </table>
          </div>
        </td>
      </tr>
      <tr> 
        <td colspan="2"> 
          <div >
          </div>
        </td>
      </tr>
      <tr> 
        
      <td colspan="2" height="48"> 
        <div align="center"> 
            <table width="520" border="1" align="center" cellspacing="0" bordercolor="#000000" cellpadding="0">
              <tr valign="top" bordercolor="#000000"> 
                <td height="20" width="70" bgcolor="#FFFFFF"> 
                        <div align="center"><font color="#000000">Aller</font></div>
                </td>
                <td height="20" colspan="3" bgcolor="#FFFFFF"> 
                  
                        <div align="center"><b><font face="Arial, Helvetica, sans-serif" color="#000000">
                          <?php	echo $divisionNom;?>
                          </font></b></div>
                </td>
                <td height="20" width="70" bgcolor="#FFFFFF"> 
                        <div align="center"><font color="#000000">Retour</font></div>
                </td>
              </tr>
              <tr valign="top" bordercolor="#000000"> 
                
              <td width="70" height="21"> 
                        <div align="center"> <font face="Arial, Helvetica, sans-serif" color="#333333">
                          <?php						
//******** Affichage des Dates aller  ***********
 for ($i= 1; $i<= ($nbreJourneeMax/2); $i++)
 	{
	$moisJour = substr(${"dates".$i},5,-8);
	$mois = substr($moisJour,0,2);
	$jour = substr($moisJour,3,2);
	
	echo $dateA = $jour.'/'.$mois."<br />";
 	} 
 ?>
                          </font> </div>
                      </td>
                
              <td width="190" height="21"> 
                        <div align="center"><font face="Arial, Helvetica, sans-serif" color="#000000">
<?php
// **********Affichage Equipe Aller ****************

 for ($i= 1; $i<= ($nbreJourneeMax/2); $i++)
		{
		echo substr(${"nomEquipe".$i},0,20)."<br />";
		} 
 ?>
                          </font></div>
                </td>
                
              <td width="30" valign="middle" height="21"> 
                <div align="center"></div>
                </td>
                
              <td width="190" height="21"> 
                        <div align="center"><font face="Arial, Helvetica, sans-serif" color="#000000">
                          <?php				
  //******** Affichage Equipes Retour  ***********
 for ($i= round(($nbreJourneeMax/2)+1); $i<= $nbreJourneeMax; $i++)
 	{
	//echo ${"numEquipe".$i}."<br />";
	echo substr(${"nomEquipe".$i},0,20)."<br />";
 	}
	
	 ?>
                          </font> </div>
                </td>
                
              <td width="70" height="21"> 
                        <div align="center"><font face="Arial, Helvetica, sans-serif" color="#000000">
                          <?php				
// ******* Affichage Dates Retour ***************

 for ($i =   round(($nbreJourneeMax/2)+1); $i<= $nbreJourneeMax; $i++)
 {
	$moisJour = substr(${"dates".$i},5,-8);
	$mois = substr($moisJour,0,2);
	$jour = substr($moisJour,3,2);
	echo $dateA = $jour.'/'.$mois."<br />";
 } 
 
 ?>
                          </font></div>
                </td>
              </tr>
            </table>
        </div>
        </td>
      </tr>
      <tr> 
        <td colspan="2" height="19">        
        </td>
      </tr>
      <tr> 
      <td colspan="2"> 
        <div align="center"><a href="impressionCalendrier2verso.php?equipe=<?php echo $equipe; ?>&idFfr=<?php echo $idFfr; ?>&sigle=<?php echo $sigle; ?>&nomLigue=<?php echo $nomLigue; ?>&division=<?php echo $division; ?>&divisionNom=<?php echo $divisionNom; ?>&comite=<?php echo $comite; ?>&divisionChiffre=<?php echo $divisionChiffre; ?>" target="_blank"><font color="#000000">impression verso</font></a>
		</div>
      </td>
      </tr>
      <tr> 
        <td colspan="2"> 
          <div align="center">
			<a href="impressionCalendrier2recto.php?equipe=<?php echo $equipe; ?>&idFfr=<?php echo $idFfr; ?>&sigle=<?php echo $sigle; ?>&nomLigue=<?php echo $nomLigue; ?>&division=<?php echo $division; ?>&comite=<?php echo $comite; ?>" target="_blank"><font color="#000000">impression recto</font></a>
		  </div>
        </td>
      </tr>
    </table>
          <p> 
            <?php include("../../pub/pub_carre.php"); ?>
          </p>
        </div>
      </td>
      <td align="center" bgcolor="#006699" height="89" valign="top" width="225"> 
        <p>
		 <?php include("../../00droite.php"); ?> 
		</p>
      </td>
    </tr>
  
</table>
</div>
<footer>
  
</footer>

</body>
</html>
