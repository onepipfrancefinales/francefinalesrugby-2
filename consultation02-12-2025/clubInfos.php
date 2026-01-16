<?php
if ($mode == "smart") {
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
    
      if ($mode == "smart") {
        $URL = "/smart/ficheClubs/pageFicheClubs.php?mode=smart&champion=";
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
      <td class="saisie" colspan="2"><?php echo $adresse2; ?> </td>
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
  if ( $mode != "smart") {

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
            <?php echo "<a class=\"colorWhite\" href=../ficheClubs/mdp.php?idClub=$code&mode=smart target=_top>Modifier la fiche du club</a> "; ?>
          </div>
        </td>
      </tr>
    </table>
  <?php


  }
  ?>
  <br>


  <hr width="70%" style="color:red; height:1px ">

  