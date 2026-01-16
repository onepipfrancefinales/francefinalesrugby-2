<?php
$anneemoins = $annee - 1;
$anneeplus = $annee + 1;
$division = $_GET['division'];

if ($division == 110)
  $adr = "top14/pagetop14";
elseif ($division == 120)
  $adr = "prod2/pageprod2";


elseif ($division == 140)
  $adr = "federale1/pagefederale1";
elseif ($division == 150)
  $adr = "federale2/pagefederale2";
elseif ($division == 160)
  $adr = "federale3/pagefederale";
elseif ($division == 170)
  $adr = "honneur/pagehonneur";
elseif ($division == 180)
  $adr = "promotion/pagepromotion";
elseif ($division == 190)
  $adr = "1serie/page1serie";
elseif ($division == 200)
  $adr = "2serie/page2serie";
elseif ($division == 210)
  $adr = "3serie/page3serie";
elseif ($division == 220)
  $adr = "4serie/page4serie";

/* championnats réserves */
elseif ($division == 230)
  $adr = "top14/pagetop14";
elseif ($division == 240)
  $adr = "nationaleb/pagenationaleb";
elseif ($division == 250)
  $adr = "federaleb/pagefederaleb";
elseif ($division == 260)
  $adr = "excellenceb/pageexcellenceb";
elseif ($division == 270)
  $adr = "reserve/pagereserve";


/* Championnats jeunes*/
elseif ($division == 320)
  $adr = "belascain/pagebelascain";
elseif ($division == 325)
  $adr = "crabos/pagecrabos";
elseif ($division == 330)
  $adr = "balandrade/pagebalandrade";
elseif ($division == 340)
  $adr = "phliponeau/pagephliponeau";
elseif ($division == 365)
  $adr = "gaudermen/pagegaudermen";
elseif ($division == 360)
  $adr = "alamercery/pagealamercery";
elseif ($division == 370)
  $adr = "teuliere/pageteuliere";

if ($division == 170 and $annee < 2023) $nomDivision  = "Honneur";
if ($division == 180 and $annee < 2023) $nomDivision  = "Promotion";
if ($division == 190 and $annee < 2023) $nomDivision  = "1re Série";

?>

<table class="marginAuto width100PC">
  <tr class="backgroundBlue">
    <td colspan="13" class="size5 colorOrange"><b><?php echo "Championnat de France" . ' ' . $annee . '' . " : $nomDivision"; ?></b></td>
  </tr>
  <tr>
    <td colspan="4"></td>
    <td colspan="2" class="colorBlack size2 width4PC"><?php echo "( " . '' . $anneemoins . '' . " )"; ?></td>
    <td class="colorRed width19PC marginAuto">
      <?php


      // Traitement de la borne mini
      if ($division == 175) $division = 170;
      if ($division == 185) $division = 180;
      if ($division == 195) $division = 190;
      if ($division == 9180) $division = 270;



      if ($anneemoins >= '2019') {
      ?>
        <a href="/phases_finales2019/affichagePhasesFinales/pagePhaseFinale.php?annee=<?php echo $anneemoins; ?>&division=<?php echo $division; ?>" target="_top">
          <span class="colorRed size7"><b>&lt;&lt;</b> </span></a>
      <?php
      } else {
      ?>
        <a href="../../phases_finales/<?php echo $adr; ?>.php?division=<?php echo $division; ?>&variable_1=<?php echo $anneemoins; ?>" target="_top">
          <span class="colorRed size7"><b>&lt;&lt;</b> </span></a>
      <?php
      }
      ?>
      <span class="colorEAECEB">---------- </span>
      <?php


      //traitement de la borne max
      if ($anneeplus >= '2019') {
      ?>
        <a href="/phases_finales2019/affichagePhasesFinales/pagePhaseFinale.php?annee=<?php echo $anneeplus; ?>&division=<?php echo $division; ?>" target="_top">
         
        <?php if ($annee < 2026) { ?>
        <span class="colorRed size7"><b>&gt;&gt;</b> </span></a>

      <?php
        }
      } else {
      ?>
        <a href="../../phases_finales/<?php echo $adr; ?>.php?variable_1=<?php echo $anneeplus; ?>" target="_top">
          <span class="colorRed size7"><b>&gt;&gt;</b> </span></a>
      <?php
      }
      ?>
    </td>
    
    
   
      <td colspan="2" class="colorBlack size2 width4PC"><?php if ($annee < 2026)
         { echo "( " . '' . $anneeplus . '' . " )" ; }  ?></td>
    <td colspan="4"></td>
  </tr> <tr> 
    <td  height  ="1" colspan="13" class = "backgroundOrange" ></td>
  </tr>
</table>