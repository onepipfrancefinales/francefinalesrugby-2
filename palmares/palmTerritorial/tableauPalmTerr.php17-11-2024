
<?php
require("../../connect/connexion1.php");
require '../fonctionsPalmares.php';
//if (isset($id)) $id = $id; else $id=0;
if (isset($_GET['paramIdComite'])) $id = $_GET['paramIdComite']; else $id = 0;
if (isset($_GET['terr'])) $terr = $_GET['terr']; else $terr ='terr';
$sigle = 0;
nomComite($sigle, $id, $bdd);

$idLigue = 0;
$sigleLigue = substr($appartenanceLigue, -4, 3);

$comite = $sigleComite;
nomLigue($idLigue, $sigleLigue, $bdd)

?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title> Palmarès du comité <?php echo $nomComite; ?></title>
<meta name="description" content="Palmarès régionals du comité <?php echo $nomComite; ?>">
<link rel="canonical" href="https://francefinalesrugby.fr/palmares/palmTerritorial/tableauPalmTerr.php?paramIdComite=<?php echo $id;?>" >
  <link type="text/css" rel="stylesheet" href="../../ligne1.css" >
  <link type="text/css" rel="stylesheet" href="palmaresTerr.css" >
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body class="backgroundBlack">

  <table>
    <tr>
      <td> <?php include("../../images/page_image_al.php"); ?></td>
    </tr>
    <tr>
      <td><?php include("../../01ligne.php");  ?></td>
    </tr>
    <tr class="backgroundWhite height20">
      <td></td>
    </tr>
    <tr>

      <td class="size4 colorWhite">Champions territoriaux (par comité ) avant 2019 :
        <?php
        if ($sigleLigue == "ARA")
          require 'comitesARA.php';
        elseif ($sigleLigue == "OCC")
          require 'comitesOCC.php';
        elseif ($sigleLigue == "NAQ")
          require 'comitesNAQ.php';
        elseif ($sigleLigue == "PCA")
          require 'comitesPCA.php';
          else
          require 'comitesAutres.php';
        ?>
      </td>
    </tr>
  </table>



  <table class="borderNone marginAuto width1250">

    <tr>
      <td class="width225"><img class="borderNone width225 height225" src="../../images/comites/<?php echo $sigleComite; ?>.jpg" alt="Logo du comité"></td>
      <td class="width800 colorWhite center size7">
        <p> Champions territoriaux du<br>
          <b> <?php echo "Comité" . ' ' . $nomComite; ?></b>
        </p>
      </td>
      <td class="width225"><img class="borderNone width225 height225" src="../../images/comites/<?php echo $sigleComite; ?>.jpg" alt="Logo du comité"></td>
    </tr>

  </table>

  <br>
  <br>

  <?php

  if (isset($rang));
  else $rang = "rang inconnu";
  if (isset($comite));
  else $comite = "comite inconnu";



  //$comite =strtolower($sigle);

  ?>
  <table class="borderNone marginAuto width1250">
    <tr class="backgroundWhite">
      <td colspan="7"  class="colorBlack  size4 style">
     <b> Depuis la saison 2018-2019, Le 
              <?php echo "Comité" . ' ' . $nomComite; ?>
            
            <?php
            if ($id == 15 or $id == 24 or $id == 16 or $id == 17 or $id == 11 or $id == 23 or $id == 25 or $id == 30 or $id == 31 or $id == 21 or $id == 34)
              echo "est devenu la ligue";
            else
              echo "a intégré la ligue";
            $debut = 2018;
            $fin = 1999;
            ?>
      
              <?php

              if (isset($nomLigueL));  else $nomLigueL = "-";   echo $nomLigue; ?>
               (
         
      
      <a class="decorationNone " href="tableauPalmReg.php?sigleLigue=<?php echo $appartenanceLigue; ?>"><span class="colorRed size4 style"> Voir palmarès de cette ligue </span></a>
            
         )
        </b>
        
      </td>
    </tr>
    <tr>
      <th class="equipeI width50"></th>
      <th class="equipeI width200">honneur</th>
      <th class="equipeI width200">promotion <br>honneur</th>
      <th class="equipeI width200">1re série</th>
      <th class="equipeI width200">2me série</th>
      <th class="equipeI width200">3me série</th>
      <th class="equipeI width200">4me série</th>
    </tr>
    <tr>
      <td class="equipes "> <?php saison(170, $comite, $bdd, $debut, $fin); ?></td>
      <td class="equipes width200"> <?php palmares($comite, 170, $bdd, $debut, $fin); ?></td>
      <td class="equipes width200"> <?php palmares($comite, 180, $bdd, $debut, $fin); ?></td>
      <td class="equipes width200"> <?php palmares($comite, 190, $bdd, $debut, $fin); ?></td>
      <td class="equipes width200"> <?php palmares($comite, 200, $bdd, $debut, $fin); ?></td>
      <td class="equipes width200"> <?php palmares($comite, 210, $bdd, $debut, $fin); ?></td>
      <td class="equipes width200"> <?php palmares($comite, 220, $bdd, $debut, $fin); ?></td>
    </tr>
  </table>
  <?php
  if ( $id != 28  or $id != 11  or $id != 30 or $id != 20 or $id != 33 or $id != 32 or $id != 26 or $id != 35 or $id != 31)
  { ?> 

<button class="accordion ">Palmarès des saisons 1999 - 1980 <span class="size3">(Cliquer pour ouvrir)</span></button>
<div class="panel">
  <p class="afficheEquipe"><?php  require 'tableauPalmTerr2.php'; ?></p>
</div>

<?php
 }
?>


 <?php

if ( $id == 12  or $id == 19  or $id == 25 or $id == 29)
  { ?> 



<button class="accordion ">Palmarès des saisons 1979 - 1960 <span class="size3">(Cliquer pour ouvrir)</span></button>
<div class="panel">
  <p class="afficheEquipe"><?php  require 'tableauPalmTerr3.php'; ?></p>
</div>

<?php
 }
?>



<button class="accordion">Seniors II : <span class="size3">(Cliquer pour ouvrir)</span></button>
<div class="panel">
  <p class="afficheEquipe"><?php  require 'tableauPalmTerrRes.php'; ?></p></p>
</div>

</body>
<footer>
<?php include("footer.php");?>
</footer>
</html>

<style>
.accordion {
  margin: auto;
  font-family:arial;
  background-color: black;
  color: red;
  cursor: pointer;
  padding: 18px;
  width: 1250px;
  border: none;
  text-align: center;
  outline: none;
  font-size: 23px;
  transition: 0.4s;
}

.active, .accordion:hover {
  background-color: black; 
}

.panel {
  padding: 0 18px;
  display: none;
  background-color: black;
  overflow: hidden;
}
</style>



<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>
