<?php
if ($smart == true) {
?>

  <br>

  <h1 class="size6 colorRed">
    <?php echo $nomLong; ?> </h1>
  <h1 class="size5 colorBlack"><?php echo "Ligue" . ' ' . $nomLigue; ?></h1>
  <h2 class="size2"><?php echo "( Ex comité" . ' ' . $nomComite . '' . " )"; ?> </h2>
  <div class="center">
    <?php {
      print("<img src=\"/../images/blasons200_200/$code.gif\" >");
    } ?>
  </div>
  <br>
  <br>
<?php
} else {
?>
  <div class="colorWhite"><?php echo $id_equipe; ?></div>

  <h1 class="colorRed"> <?php echo $nomLong; ?> </h1>
  <br>
  <h1 class="colorBlack"> <?php echo "Ligue" . ' ' . $nomLigue; ?></h1>
  <h2 class="size4 bold"> <?php echo "( Ex comité" . ' ' . $nomComite . '' . " )"; ?></h2>
  <div class="center">
  <?php {
    print("<img src=\"/../images/blasons200_200/$code.gif\" >");
  }

  echo "<br>";
  echo "<br>";
}



if ($smart == true)   $width = "100%";
else  $width = "90%";
  ?>
  </div>

  <table class="marginAuto borderWidth1 borderColorBlack" width="<?php echo $width; ?>">
    <tr>
      <td class="titreGauche" colspan="2" width="30%">Identification FFR : </td>
      <td class="saisie" width="70%"><?php echo $idFfr; ?> </td>
    </tr>


    <?php
    if ($fusion == true) {
      if ($smart == true) {
        $URL = "/smart/ficheClubs/pageFicheClubs.php?champion=";
      } else {
        $URL = "/consultation/pageclub00.php?champion=";
      }
    ?>
      <tr>
        <td class="titreGauche" colspan="2" width="30%">Fusion en : </td>
        <td class="saisieGras" width="70%"> <?php echo $anneeFusion; ?></td>
      </tr>
      <tr>
        <td class="titreGauche" colspan="2" width="30%">entre les clubs suivants : </td>
        <td style="font-size: 18px;font-family: arial;font-weight: Bold;" width="70%"> <?php echo "<a  href=/.$URL" . substr($fusion1, -5) . "&nouveauClub=" . $id_equipe . ">$clubFusion1</a> "; ?></td>
      </tr>
      <tr>
        <td class="titreGauche" colspan="2" width="30%"> </td>
        <td style="font-size: 18px;font-family: arial;font-weight: Bold;" width="70%"><?php echo "<a href=/.$URL" . substr($fusion2, -5) . "&nouveauClub=" . $id_equipe . ">$clubFusion2</a> "; ?></td>
      </tr>
      <tr>
        <td class="titreGauche" colspan="2" width="30%"> </td>
        <td style="font-size: 18px;font-family: arial;font-weight: Bold;" width="70%"><?php echo "<a href=/.$URL" . substr($fusion3, -5) . "&nouveauClub=" . $id_equipe . ">$clubFusion3</a> "; ?></td>
      </tr>
      <tr>
        <td class="titreGauche" colspan="2" width="30%"> </td>
        <td style="font-size: 18px;font-family: arial;font-weight: Bold;" width="70%"><?php echo "<a href=/.$URL" . substr($fusion4, -5) . "&nouveauClub=" . $id_equipe . ">$clubFusion4</a> "; ?></td>
      </tr>
    <?php
    } else {
    ?>
      <tr>
        <td class="titreGauche" colspan="2" width="30%">Création du club : </td>
        <td class="saisieGras" width="70%"> <?php echo $dateCreation; ?></td>
      </tr>

    <?php
    }
    ?>

  </table>
  <br>
  <table class="marginAuto borderWidth1 borderColorBlack" width="<?php echo $width; ?>">
    <tr>
      <td class="titre" colspan="2" width="100%"> Bureau </td>
    </tr>
    <tr>
      <td class="titreGauche" width="30%">Président(s) : </td>
      <td class="saisieGras" width="70%"><?php echo $president; ?> </td>
    </tr>
    <tr>
      <td class="titreGauche" width="30%">Vice Président(s) : </td>
      <td class="saisieGras" width="70%"><?php echo $vicePresident; ?> </td>
    </tr>
    <tr>
      <td class="titreGauche"> Trésorier : </td>
      <td class="saisieGras"> <?php echo $tresorier; ?> </td>
    </tr>
    <tr>
      <td class="titreGauche"> Secrétaire : </td>
      <td class="saisieGras"><?php echo $secretaire; ?></td>
    </tr>
    <tr>
      <td class="titreGauche"> Contact : </td>
      <td class="saisie"> <?php echo $contact; ?></td>
    </tr>
  </table>
  <br>
  <table class="marginAuto borderWidth1" width="<?php echo $width; ?>">
    <tr>
      <td class="titre" colspan="2" width="70%">Siège</td>
    </tr>
    <tr>
      <td class="saisieGras" colspan="2"> <?php echo $siege; ?></td>
    </tr>
    <tr>
      <td class="saisie" colspan="2"><?php echo $adresse; ?> </td>
    </tr>
    <tr>
      <td class="saisie" colspan="2"><?php echo $cp; ?> <?php echo $ville; ?></td>
    </tr>
    <tr>
      <td class="titreGauche" width="30%"> Tél : </td>
      <td class="saisie" width="70%"> <?php echo $tel; ?></td>
    </tr>
  </table>
  <br>
  <table class="marginAuto borderWidth1" width="<?php echo $width; ?>">
    <tr>

    </tr>
    <tr>
      <td class="titre" colspan="2"> Stade </td>
    </tr>
    <tr>
      <td class="saisieGras" colspan="2"> <?php echo $nomStade; ?></td>
    </tr>
    <tr>
      <td class="saisie" colspan="2"> <?php echo $adresseStade; ?></td>
    </tr>
    <tr>
      <td class="saisie" colspan="2"> <?php echo $cpStade; ?> <?php echo $villeStade; ?> </td>
    </tr>
    <tr>
      <td class="titreGauche" width="20%"> Tèl : </td>
      <td class="saisie" width="80%"> <?php echo $telStade; ?> </td>
    </tr>
    <tr>
      <td class="titreGauche">capacité : </td>
      <td class="saisie"> <?php echo $capacite; ?> </td>
    </tr>
  </table>
  <br>
  <table class="marginAuto borderWidth1" width="<?php echo $width; ?>">
    <tr>
      <td class="titre" colspan="3"> Contact </td>
    </tr>
    <tr>
      <td class="titreGauche" width="25%"> Site Internet : </td>
      <td class="saisieGras" colspan="2"><a href=" http://<?php echo $site; ?>" target="_blank"> <?php echo $site; ?> </a></td>
    </tr>
    <tr>
      <td class="titreGauche">Courriel : </td>
      <td class="saisieGras" colspan="2"> <a href="mailto:<?php echo $donnees['A1616']; ?>" oldref=""><?php echo $courriel; ?> </a> </td>
    </tr>
    <tr>
      <td class="titreGauche"> Correspondant : </td>
      <td class="saisieGras" colspan="2"> <?php echo $correspondant; ?> </td>
    </tr>
    <tr>
      <td colspan="3">

      </td>
    </tr>
    <tr>
      <td class="titreGauche"> Sigle :</td>
      <td class="saisie" colspan="2"> <?php echo $sigle; ?> </td>
    </tr>
    <tr>
      <td class="titreGauche"> couleurs :</td>
      <td class="saisie" colspan="2"><?php echo $couleurs; ?></td>
    </tr>
    <tr>
      <td colspan="3">&nbsp; </td>
    </tr>
  </table>
  <br>
  <table width="<?php echo $width; ?>" class="marginAuto borderWidth1">
    <tr>
      <td class="titre" colspan="2">Section féminine : </td>
    </tr>
    <tr>
      <td class="titreGauche" width="25%"> Nom/ Entente : </td>
      <td class="saisie" width="75%"><?php echo $nomEntente; ?></td>
    </tr>
    <tr>
      <td class="titreGauche"> Niveau :</td>
      <td class="saisie"><?php echo $niveau; ?> </td>
    </tr>
  </table>
  <br>

  <?php changementNom($id_equipe, $width, $bdd);  ?>


  <br>
  <table class="marginAuto borderWidth1" width="<?php echo $width; ?>">
    <tr>
      <td class="titre"> Autres dates importantes </td>
    </tr>
    <tr>
      <td class="info"><?php echo $info1; ?> </td>
    </tr>
    <tr>
      <td class="info"><?php echo $info2; ?></td>
    </tr>
    <tr>
      <td class="info"><?php echo $info3; ?> </td>
    </tr>
    <tr>
      <td class="info"><?php echo $info4; ?></td>
    </tr>
    <tr>
      <td class="info"> <?php echo $info5; ?> </td>
    </tr>
  </table>
  <br>
  <?php
  if ($smart != 1) {
  ?>
    <table class="marginAuto borderWidth1" width="80%">
      <tr>
        <td colspan="6" class="backgroundRed borderColorBlack">
          <div class="center backgroundRed  bold colorWhite">
            <?php echo "<a class=\"colorWhite\" href=/mise_a_jour/infosclub/mdp.php?idClub=$code target=_top>Modifier la fiche du club</a> "; ?>
          </div>
        </td>
      </tr>
    </table>
  <?php
  }
  else
  {

    ?>
    <table class="marginAuto borderWidth1" width="80%">
      <tr>
        <td colspan="6" class="backgroundRed borderColorBlack">
          <div class="center backgroundRed  bold colorWhite">
            <?php echo "<a class=\"colorWhite\" href=../ficheClubs/mdp.php?idClub=$code target=_top>Modifier la fiche du club</a> "; ?>
          </div>
        </td>
      </tr>
    </table>
  <?php


  }
  ?>
  <br>


  <hr width="70%" style="color:red; height:1px ">

  <?php

  if ($smart == 1)
    echo "<h1 class=\"size5\">Palmarès</h1>";
  else
    echo "<h1>Palmarès</h1>";


  //if (isset ($_GET['smart']))$smart = $_GET['smart'];else $smart=0;
  //echo "smart".$smart;
  if ($smart == 1)
    require("../../connect/connexion1.php");
  else
    require("../connect/connexion1.php");

  //****************     Palmares européens      *******************************
  $table = "bdeurope";
  nbreTitreEU($id_equipe, $bdd);
  if ($nombreTitreEU > 0) {
    if ($smart == true)
      echo "<h2 class=\"size4\"> Titres Européens </h2>";
    else

      echo "<h2> Titres Européens </h2>";
  } ?>
  <div id="palmares" class="center">
    <?php palmaresEU($id_equipe, $bdd);  ?>
  </div>

  <?php
  //****************     Palmares équipes Unes      *******************************
  $table = "bdequipe1";
  $categorie = "A";
  nbreTitre($nomChampion, $id_equipe, $table, $categorie, $bdd);
  $nbreTitreChampion = $nombreTitre;

  nbreTitre($clubNom1, $id_equipe,$table, $categorie, $bdd);
  $nbreTitreFusion1 = $nombreTitre;

  nbreTitre($clubNom2, $id_equipe, $table, $categorie, $bdd);
  $nbreTitreFusion2 = $nombreTitre;

  nbreTitre($clubNom3, $id_equipe, $table, $categorie, $bdd);
  $nbreTitreFusion3 = $nombreTitre;

  nbreTitre($clubNom4, $id_equipe, $table, $categorie, $bdd);
  $nbreTitreFusion4 = $nombreTitre;



  if ($nbreTitreChampion > 0 or $nbreTitreFusion1 > 0 or $nbreTitreFusion2 > 0 or $nbreTitreFusion3 > 0 or $nbreTitreFusion4 > 0) {
    if ($smart == true)
      echo "<h2 class=\"size4\"> Equipe Une </h2>";
    else {
    ?>
    <div id="palmares" class="center">
    <?php  echo "<h2> Equipe Une </h2>";  ?>
      </div>
      <?php
  } 
 } ?>
  <div id="palmares" class="center">
    <?php
    palmares($nomChampion, $table, $categorie, $bdd);
    fusionDeClubsEquipe1($nouveauClub, $nouveauClub, $bdd); ?>
  </div>

  <?php
  //****************     Palmares équipes II      *******************************
  $table = "bdequipe2";
  $categorie = "B";
  nbreTitre($nomChampion, $id_equipe, $table, $categorie, $bdd);
  $nbreTitreChampion = $nombreTitre;

  nbreTitre($clubNom1, $id_equipe,$table, $categorie, $bdd);
  $nbreTitreFusion1 = $nombreTitre;

  nbreTitre($clubNom2, $id_equipe,$table, $categorie, $bdd);
  $nbreTitreFusion2 = $nombreTitre;

  nbreTitre($clubNom3, $id_equipe,$table, $categorie, $bdd);
  $nbreTitreFusion3 = $nombreTitre;

  nbreTitre($clubNom4, $id_equipe,$table, $categorie, $bdd);
  $nbreTitreFusion4 = $nombreTitre;

  if ($nbreTitreChampion > 0 or $nbreTitreFusion1 > 0 or $nbreTitreFusion2 > 0 or $nbreTitreFusion3 > 0 or $nbreTitreFusion4 > 0) {
    if ($smart == true)
      echo "<h2 class=\"size4\"> Equipe II </h2>";
    else
      echo "<h2> Equipe II </h2>";
  } ?>
  <div id="palmares" class="center">
    <?php palmares($nomChampion, $table, $categorie, $bdd); ?>
    <?php fusionDeClubsEquipe2($nouveauClub, $nouveauClub, $bdd); ?>
  </div>

  <?php
  //****************     Palmares challenges      *******************************
  $table = "bdchallenges";
  $categorie = "C";
  nbreTitre($nomChampion, $id_equipe, $table, $categorie, $bdd);
  $nbreTitreChampion = $nombreTitre;

  nbreTitre($clubNom1, $id_equipe, $table, $categorie, $bdd);
  $nbreTitreFusion1 = $nombreTitre;

  nbreTitre($clubNom2, $id_equipe, $table, $categorie, $bdd);
  $nbreTitreFusion2 = $nombreTitre;

  nbreTitre($clubNom3, $id_equipe, $table, $categorie, $bdd);
  $nbreTitreFusion3 = $nombreTitre;

  nbreTitre($clubNom4, $id_equipe, $table, $categorie, $bdd);
  $nbreTitreFusion4 = $nombreTitre;

  if ($nbreTitreChampion > 0 or $nbreTitreFusion1 > 0 or $nbreTitreFusion2 > 0 or $nbreTitreFusion3 > 0 or $nbreTitreFusion4 > 0) {
    if ($smart == true)
      echo "<h2 class=\"size4\"> Challenges Nationaux </h2>";
    else
      echo "<h2> Challenges Nationaux </h2>";
  } ?>
  <div id="palmares" class="center">
    <?php palmares($nomChampion, $table, $categorie, $bdd); ?>
  </div>

  <?php
  //****************     Palmares Reichels & Juniors      *******************************
  $table = "bdjeunes";
  $categorie = "D";
   nbreTitre($nomChampion, $id_equipe, $table, $categorie, $bdd);
  $nbreTitreChampion = $nombreTitre;

  nbreTitre($clubNom1, $id_equipe, $table, $categorie, $bdd);
  $nbreTitreFusion1 = $nombreTitre;

  nbreTitre($clubNom2, $id_equipe, $table, $categorie, $bdd);
  $nbreTitreFusion2 = $nombreTitre;

  nbreTitre($clubNom3, $id_equipe, $table, $categorie, $bdd);
  $nbreTitreFusion3 = $nombreTitre;

  nbreTitre($clubNom4, $id_equipe, $table, $categorie, $bdd);
  $nbreTitreFusion4 = $nombreTitre;

  if ($nbreTitreChampion > 0 or $nbreTitreFusion1 > 0 or $nbreTitreFusion2 > 0 or $nbreTitreFusion3 > 0 or $nbreTitreFusion4 > 0) {
    if ($smart == true)
      echo "<h2 class=\"size4\"> Reichels & Juniors </h2>";
    else
      echo "<h2> Reichels & Juniors </h2>";
  } ?>
  <div id="palmares" class="center">
  <?php palmaresParClub($nomChampion, $id_equipe, $table, $categorie, $bdd);  ?>
    <?php // palmares($nomChampion, $table, $categorie, $bdd); ?>
    <?php fusionDeClubsJeunes($nouveauClub, $nouveauClub, $bdd); ?>
  </div>

  <?php
  //****************     Palmares cadets      *******************************
  $table = "bdjeunes";
  $categorie = "E";
 nbreTitre($nomChampion, $id_equipe, $table, $categorie, $bdd);
  $nbreTitreChampion = $nombreTitre;

  nbreTitre($clubNom1, $id_equipe, $table, $categorie, $bdd);
  $nbreTitreFusion1 = $nombreTitre;

  nbreTitre($clubNom2, $id_equipe, $table, $categorie, $bdd);
  $nbreTitreFusion2 = $nombreTitre;

  nbreTitre($clubNom3, $id_equipe, $table, $categorie, $bdd);
  $nbreTitreFusion3 = $nombreTitre;

  nbreTitre($clubNom4, $id_equipe, $table, $categorie, $bdd);
  $nbreTitreFusion4 = $nombreTitre;

  if ($nbreTitreChampion > 0 or $nbreTitreFusion1 > 0 or $nbreTitreFusion2 > 0 or $nbreTitreFusion3 > 0 or $nbreTitreFusion4 > 0) {
    if ($smart == true)
      echo "<h2 class=\"size4\"> Cadets </h2>";
    else
      echo "<h2> Cadets </h2>";
  } ?>
  <div id="palmares" class="center">
    <?php palmaresParClub($nomChampion, $id_equipe, $table, $categorie, $bdd);  ?>
  </div>
  <br><br>

  <div id="palmares" class="center">
  
    <?php 
    $table = "bdjeunesligne";
    palmaresParClubLigne($nomChampion, $id_equipe, $table, $categorie, $bdd);  ?>
  </div>

  <br>
  <?php //fusionDeClubs ($nouveauClub, $nouveauClub, $bdd);
  ?>
  <br>
  <hr width="70%" style="color:red; height:1px ">





  <!--Saison N -->
  <?php



if ($statut > 0)
{  fusionDeClubs2($statut, $bdd);

?>
  <div class="size3 styleArial center">
  <?php
  echo "<br>";
  echo "Fusion en " . $anneeFusion . " avec le(s) club(s) de " . "<br>";

  if ($equipe == $fusion1) {
    echo $clubFusion2 . "<br>" . $clubFusion3 . "<br>" . $clubFusion4;
  } elseif ($equipe == $fusion2) {
    echo $clubFusion1 . "<br>" . $clubFusion3 . "<br>" . $clubFusion4;
  } elseif ($equipe == $fusion3) {
    echo $clubFusion2 . "<br>" . $clubFusion3 . "<br>" . $clubFusion4;
  }  elseif ($equipe == $fusion4) {
    echo $clubFusion1 . "<br>" . $clubFusion2 . "<br>" . $clubFusion3;
  }

  echo "<br>";
  echo "pour donner naissance au club" . "<br>";
  echo "<br>";

  if ($smart == 1) {
    $URL = "/smart/ficheClubs/pageFicheClubs.php?champion=";
  } else {
    $URL = "/consultation/pageclub00.php?champion=";
  }


  ?>
</div>
<div id="saisonEnCours" class="colorBlack"> <a class="colorBlack" href=<?php echo $URL . substr($statut, -5); ?>><?php echo $nouveauNomClub; ?></a> </div><br>


<?php




}

 else if ($nouveauClub != 0 && ($nouveauClub != $fusion1 || $nouveauClub != $fusion2 || $nouveauClub != $fusion3 || $nouveauClub != $fusion4 )) {
  ?>
    <div class="size3 styleArial center">
      <?php
      echo "<br>";
      echo "Fusion en " . $anneeFusion . " avec le(s) club(s) de " . "<br>";

      if ($equipe == $fusion1) {
        echo $clubFusion2 . "<br>" . $clubFusion3 . "<br>" . $clubFusion4;
      } elseif ($equipe == $fusion2) {
        echo $clubFusion1 . "<br>" . $clubFusion3 . "<br>" . $clubFusion4;
      } elseif ($equipe == $fusion3) {
        echo $clubFusion2 . "<br>" . $clubFusion3 . "<br>" . $clubFusion4;
      }  elseif ($equipe == $fusion4) {
        echo $clubFusion1 . "<br>" . $clubFusion2 . "<br>" . $clubFusion3;
      }

      echo "<br>";
      echo "pour donner naissance au club" . "<br>";
      echo "<br>";

      if ($smart == 1) {
        $URL = "/smart/ficheClubs/pageFicheClubs.php?champion=";
      } else {
        $URL = "/consultation/pageclub00.php?champion=";
      }


      ?>
    </div>
    <div id="saisonEnCours" class="colorBlack"> <a class="colorBlack" href=<?php echo $URL . substr($nouveauClub, -5); ?>><?php echo $nouveauNomClub; ?></a> </div><br>



  <?php
  } else {
    if ($smart == 1)
      echo "<h1 class=\"size4\">" . "Saison " . $debutSaison . '  - ' . $finSaison . "</h1>";
    else
      echo "<h1>" . "Saison " . $debutSaison . ' - ' . $finSaison . "</h1>";

  ?>

    <div id="saisonEnCours">
      <?php
      if ($saisonEnCoursChiffre > 0)  echo "- " . $saisonEnCours . " -";
      else echo "-";
      ?>
    </div>
    <br>
  <?php
  }
  ?>
  <hr width="70%" style="color:red; height:1px ">


  <?php

  if ($smart == 1)
    echo "<h1 class=\"size4\">Saisons précédentes</h1>";
  else
    echo "<h1>Saisons précédentes</h1>";
  ?>

  <table width="<?php echo $width; ?>" class="borderSpacing marginAuto">


    <?php



    $min = 1;
    $max = 15;

    if ($fusion == true) {
      $max = $finSaison - $anneeFusion;
    }
    if ($statut > 0) $nouveauClub = $statut;
   if ($nouveauClub != 0 && ($nouveauClub != $fusion1 || $nouveauClub != $fusion2 || $nouveauClub != $fusion3)) {
      $min = $finSaison - $anneeFusion;
    }

    if ($nouveauClub != 0 && ($nouveauClub != $fusion1 || $nouveauClub != $fusion2 || $nouveauClub != $fusion3)) {
      $min = $finSaison - $anneeFusion;
    }

    for ($i = $min; $i < $max; $i = $i + 2) {
    ?>
      <tr>
        <td class="saisonImpaire" width="20%"> Saison </td>
        <td class="saisonImpaireNG" width="80%"> <?php $saisonRetro = $finSaison - $i;
                                                  echo ${"terr" . $saisonRetro}; ?> </td>
      </tr>
      <tr>
        <?php

        $debut = ($debutSaison - $i);
        $fin = $finSaison - $i;
        if ($smart == true)
          echo   " <td class=\"saisonImpaire\"> $debut  $fin</td>";
        else
          echo  " <td class=\"saisonImpaire\">$debut - $fin</td>";
        ?>
        <td class="saisonImpaireNG"> <?php echo ${"france" . $saisonRetro}; ?>
        </td>
      </tr>
      <tr>
        <td class="saisonImpaire">&nbsp;</td>
        <td class="saisonImpaireNG">&nbsp;</td>
      </tr>

      <!--Saison N-2 -->
      <tr>
        <td class="saisonPaire center"> Saison </td>
        <td class="saisonPaireNG"> <?php $saisonRetro = $finSaison - ($i + 1);
                                    echo ${"terr" . $saisonRetro}; ?> </td>
      </tr>
      <tr>
        <?php

        $debut = $debutSaison - ($i + 1);
        $fin = $finSaison - ($i + 1);
        if ($smart == true)
          echo  "<td class=\"saisonPaire center\"> $debut $fin </td>";
        else
          echo "<td class=\"saisonPaire\"> $debut - $fin </td>";
        ?>
        <td class="saisonPaireNG"> <?php echo ${"france" . $saisonRetro}; ?> </td>
      </tr>
      <tr>
        <td class="saisonPaire">&nbsp;</td>
        <td class="saisonPaireNG">&nbsp;</td>
      </tr>

    <?php

    }
    ?>
  </table>
  <br><br><br>
  </html>