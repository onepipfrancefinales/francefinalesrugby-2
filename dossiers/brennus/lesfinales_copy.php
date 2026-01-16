<?php
require "../../connect/connexion1.php";
$pattern = "/[0-9]{7}/i";
?>

 

<table width="1000" class="marginAuto " border="1">

  <tr bgcolor="#0099FF" bordercolor="#000000">
    <td colspan="8" height="88" class="center size7 bold colorWhite styleCursive">Les finales</td>
  </tr>
  <tr class="backgroundWhite" bordercolor="#000000">
    <td colspan="8" height="40">
    </td>
  </tr>
  <tr class="center bold styleCursive size3 colorWhite backgroundBlack">
    <td> Saisons </td>
    <td> Editions </td>
    <td> Dates</td>
    <td> Champions</td>
    <td> Finalistes</td>
    <td> Scores</td>
    <?php if ($mode != "smart") { ?>
    <td> Stades - Villes </td>
    <td> Affluences </td>
    <?php } ?>
  </tr>
  <?php
// absence de championnat :  2020,1942,1941,1940,1919,1918,1917,1916,1915
$tabAnnee = array(2020, 1942, 1941, 1940, 1919, 1918, 1917, 1916, 1915);
 

for ($i = 0; $i < $nbreLigne - 1; $i++) {
    if (in_array($saison[$i], $tabAnnee)) {
  ?>
      <tr class="background666666 colorWhite">
        <td><?php echo $saison[$i]; ?> </td>

        <td colspan="7" class="center"> <?php echo $champion[$i]; ?> </td>
      </tr>
    <?php
    }
    // poule unique : 1896,1897,1898
    else if ($saison[$i] == '1896' or $saison[$i] == '1897' or $saison[$i] == '1898') {
      if ($saison[$i] % 2 == 0)
        echo "<tr class=\"backgroundCCCCCC\">";
      else
        echo "<tr class=\"backgroundWhite\">";
    ?>
      <td><?php echo $saison[$i]; ?> </td>
      <td><?php echo $edition[$i]; ?> </td>
      <td> <?php echo $dateMatch[$i]; ?> </td>
      <td class="center"> <?php echo $champion[$i] . ' ' . $comite1[$i]; ?> </td>
      <td colspan="4"> <?php echo "Poule unique"; ?> </td>
      </tr>
    <?php
    } else {
      
      if ($saison[$i] % 2 == 0){
        echo "<tr class=\"backgroundCCCCCC\">"; 
      }
      else
        echo "<tr class=\"backgroundWhite\">";
    ?>
      <td><?php echo $saison[$i]; ?> </td>
      <td><?php echo $edition[$i]; ?> </td>
      <td> <?php echo $dateMatch[$i]; ?> </td>
      <td class="center"> <?php if (preg_match($pattern, $champion[$i]) == 1) { transformerDonnee($champion[$i],$bdd);  $champion[$i]= $nom;}     echo $champion[$i] . ' ' . $comite1[$i]; ?> </td>
      <td> <?php                if (preg_match($pattern, $finaliste[$i]) == 1) { transformerDonnee($finaliste[$i],$bdd);  $finaliste[$i]= $nom;}  echo $finaliste[$i] . ' ' . $comite2[$i]; ?> </td>
      <td class="center"> <?php echo $score1[$i] . ' - ' . $score2[$i] . $scoreplus[$i]; ?> </td>
      <?php if ($mode != "smart") { ?>
      <td> <?php nomStade($stade[$i], $bdd); echo "<br>" . $ville[$i]; ?> </td>
      <td> <?php echo number_format($public[$i],0,'',' '); ?> </td>
      <?php } ?>
      </tr>
  <?php
    }
  }
  ?>
</table>
