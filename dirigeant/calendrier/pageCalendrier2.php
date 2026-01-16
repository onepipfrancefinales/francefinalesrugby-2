<?php

if (isset($_POST['idFfr'])) $idFfr = $_POST['idFfr'];
else $idFfr = "5321J";

if (isset($division)) $division = $division;
else $division = "";
if (isset($nomLigue)) $nomLigue = $nomLigue;
else $nomLigue = "";
if (isset($sigle)) $sigle = $sigle;
else $sigle = "";
if (isset($bddComite)) $bddComite = $bddComite;
else $bddComite = "";
if (isset($titre)) $titre = $titre;
else $titre = "";
if (isset($championnat)) $championnat = $championnat;
else $championnat = "";
if (isset($equipeR)) $equipeR = $equipeR;
else $equipeR = "";


require("../../saison.php");
require '../../fonctions.php';
require 'fonctionsDonnees.php';

require '../../connect/connexion1.php';
infosclub($idFfr, $bdd);



//echo $idFfr;;echo "<br />";
$equipe = $id;
//echo $equipe;echo "<br />";
//echo $nomChampion;echo "<br />";

require '../../connect/connexion6.php';
recherchePresenceEquipe($equipe, $bdd);
divisionEtPoule($divisionChiffre, $bddComite, $equipe, $bdd);
NbreDeJournee($bddComite, $equipe, $divisionChiffre, $bdd);
calendrier($equipe, $bddComite, $divisionChiffre, $nbreJourneeMax, $bdd);


?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <link type="text/css" rel="stylesheet" href="../../ligne1.css">
  <link type="text/css" rel="stylesheet" href="../../formulaireDG.css">
  <link type="text/css" rel="stylesheet" href="../../resultats/resultat.css">
  <link type="text/css" rel="stylesheet" href="../../lienNoir.css">
  <title>Championnats Territoriaux comit&eacute; <?php echo $comiteNom; ?></title>
  <meta name="description" content=" R&eacute;sulats des comp&eacute;titions territoriales du comit&eacute; Armagnac Bigorre. Calendriers, r&eacute;sultats et statistiques de l'honneur � la 4me S&eacute;rie, &eacute;quipes II comprises. Egalement disponible les phases finales territoriales des ann&eacute;es pr&eacute;c&eacute;dentes et les palmares territoriaux des diff&eacute;erentes divisions du comit&eacute;. ">
  <meta name="classification" content="Sport,Rugby">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="resource-type" content="document">
  <meta name="copyright" content="Comite Midi Pyrenees de Rugby">
  <meta name="author" content="Equipe Onepip">
  <meta name="robots" content="All">
</head>

<body>

  <table class="marginAuto" width="1100">
    <tbody>
      <tr>
        <td colspan="3">
          <?php include("../../images/page_image_al.php");  ?>
        </td>
      </tr>
      <tr>
        <td colspan="3">
          <?php include("../../01ligne.php"); ?>
        </td>
      </tr>



      <tr>
        <!-- Colonne centrale -->
        <td class="colonneDroiteGauche">
          <p><?php include("../../01gauche.php"); ?> </p>
        </td>
        <td bgcolor="#ffffff" width="650" valign="top" height="89">

          <?php include("impressionCalendrier0.php"); ?>


          <hr />

          <p>
          <table width="593" border="0" align="center">
            <tr>
              <td width="289" valign="top">
                <br>
                <table width="250" border="1" cellspacing="1">
                  <tr>
                    <td bgcolor="#CCCCCC" class="size5 colorBlack">
                      Palmarès
                    </td>
                  </tr>
                </table>

                <p class="styleArial size2 colorBlack bold">
                  Equipe Fanion
                  <?php
                  //*******  Affichage palmares Equipe Une ********

                  /*
                          require '../../connect/connexion1.php';
                          infosclub($idFfr, $bdd);
                          palmaresEquipes($idFfr, "bdequipe1", $bdd);

                          if ($nbreTitre > 5)
                            $nbreTitreAffiches = 6;
                          else
                            $nbreTitreAffiches = $nbreTitre;

                          for ($i = 0; $i <  $nbreTitreAffiches; $i++) {
                            echo ${"saison" . $i} . ' ' . ${"titre" . $i} . ' ' . ${"championnat" . $i} . ' ' . ${"division" . $i} . "<br />";
                          }
*/
                  ?>

                </p>



                <p class="styleArial size2 colorBlack bold">Equipe II

                  <?php

                  //*******  palmares Equipe II ********
                  /*
                          palmaresEquipes($idFfr, "bdequipe2", $bdd);
                          if ($nbreTitre > 5)
                            $nbreTitreAffiches = 6;
                          else
                            $nbreTitreAffiches = $nbreTitre;


                          for ($i = 0; $i <  $nbreTitreAffiches; $i++) {
                            echo ${"saison" . $i} . ' ' . ${"titre" . $i} . ' ' . ${"championnat" . $i} . ' ' . ${"division" . $i} . "<br />";
                          }
*/
                  ?>

                </p>
              </td>
              <td width="294" valign="middle">




                <table width="250" border="1" height="357" align="center">
                  <tr>

                    <td height="328">
                     
                        <?php
                        echo "<br />"; ?>
                      
                      <p class="center">
                       
                          <?php echo "Ligue régionale"; 
                              echo "<br />" . $nomLigue; ?>
                      
                      </p>

                      <p class="bold size6 center">      
                            <?php echo $sigle; ?>
                      </p>
                      <p class="center">
                          
                            <?php
                            $logo = substr($equipe, -5); {
                              print("<img src=\"/images/blasons200_200/$logo.gif\" >");
                            }
                            ?>
                         
                        </p>
                    
                    </td>
                  </tr>
                </table>

              </td>
            </tr>
            <tr>
              <td width="289">

              </td>
              <td width="294" valign="middle">

              </td>
            </tr>
            <tr>
              <td width="289">

              </td>
              <td width="294" valign="middle">

              </td>
            </tr>
            <tr>
              <td colspan="2">

                <table width="520" border="2" cellspacing="1" align="center">
                  <tr>
                    <td bgcolor="#CCCCCC" align="left" class="styleArial size5 bold">

                      Calendrier
                            <?php echo $saison - 1; ?>
                            -
                            <?php echo $saison; ?>
                         

                    </td>
                  </tr>
                </table>

              </td>
            </tr>
            <tr>
              <td colspan="2">


              </td>
            </tr>
            <tr>

              <td colspan="2" height="48">

                <table width="520" border="1"  cellspacing="0" cellpadding="0" class="marginAuto">
                  <tr valign="top">
                    <td  width="70" >
                      Aller
                    </td>
                    <td height="20" colspan="3"  class="styleArial"><b>
                        <?php echo $divisionNom; ?>
                      </b></td>
                    <td  width="70" >
                     Retour
                    </td>
                  </tr>
                  <tr valign="top">

                    <td width="70" height="21">

                      <font face="Arial, Helvetica, sans-serif" color="#333333">
                        <?php
                        //******** Affichage des Dates aller  ***********

                        for ($i = 1; $i <= ($nbreJourneeMax / 2); $i++) {
                          $moisJour = substr(${"dates" . $i}, 5, -8);
                          $mois = substr($moisJour, 0, 2);
                          $jour = substr($moisJour, 3, 2);

                          echo $dateA = $jour . '/' . $mois . "<br />";
                        }

                        ?>
                      </font>

                    </td>

                    <td width="190" height="21">

                      <font face="Arial, Helvetica, sans-serif" color="#000000">
                        <?php
                        // **********Affichage Equipe Aller ****************

                        for ($i = 1; $i <= ($nbreJourneeMax / 2); $i++) {
                          echo substr(${"nomEquipe" . $i}, 0, 20) . "<br />";
                        }

                        ?>
                      </font>

                    </td>

                    <td width="30" valign="middle" height="21">

                    </td>

                    <td width="190" height="21">

                      <font face="Arial, Helvetica, sans-serif" color="#000000">
                        <?php
                        //******** Affichage Equipes Retour  ***********

                        for ($i = round(($nbreJourneeMax / 2) + 1); $i <= $nbreJourneeMax; $i++) {
                          //echo ${"numEquipe".$i}."<br />";
                          echo substr(${"nomEquipe" . $i}, 0, 20) . "<br />";
                        }

                        ?>
                      </font>

                    </td>

                    <td width="70" height="21">

                      <font face="Arial, Helvetica, sans-serif" color="#000000">
                        <?php
                        // ******* Affichage Dates Retour ***************

                        for ($i =   round(($nbreJourneeMax / 2) + 1); $i <= $nbreJourneeMax; $i++) {
                          $moisJour = substr(${"dates" . $i}, 5, -8);
                          $mois = substr($moisJour, 0, 2);
                          $jour = substr($moisJour, 3, 2);
                          echo $dateA = $jour . '/' . $mois . "<br />";
                        }

                        ?>
                      </font>

                    </td>
                  </tr>
                </table>

              </td>
            </tr>
            <tr>
              <td colspan="2" height="19">
              </td>
            </tr>
            <tr>
              <td colspan="2">
                <div align="center"><a href="impressionCalendrier2verso.php?equipe=<?php echo $equipe; ?>&idFfr=<?php echo $idFfr; ?>&sigle=<?php echo $sigle; ?>&nomLigue=<?php echo $nomLigue; ?>&division=<?php echo $division; ?>&divisionNom=<?php echo $divisionNom; ?>&comite=<?php echo $comite; ?>&divisionChiffre=<?php echo $divisionChiffre; ?>" target="_blank">
                    <font color="#000000">impression verso</font>
                  </a>
                </div>
              </td>
            </tr>
            <tr>
              <td colspan="2">
                <div align="center">
                  <a href="impressionCalendrier2recto.php?equipe=<?php echo $equipe; ?>&idFfr=<?php echo $idFfr; ?>&sigle=<?php echo $sigle; ?>&nomLigue=<?php echo $nomLigue; ?>&division=<?php echo $division; ?>&comite=<?php echo $comite; ?>" target="_blank">
                    <font color="#000000">impression recto</font>
                  </a>
                </div>
              </td>
            </tr>
          </table>


        </td>
        <td class="colonneDroiteGauche">

          <!-- Colonne de droite -->
          <?php include("../../00droite.php"); ?>

        </td>
      </tr>
  </table>

  <footer>
    <?php include("../../footer.php"); ?>
  </footer>
</body>
</html>