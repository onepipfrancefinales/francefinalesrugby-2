<?php
 traitementScores (4001, 4008);
$cssEquipe = "equipe4";
$cssScore = "coin4GA";
$cssEquipe2 = "equipe5";
$cssScore2 = "coin5GA";


if ($division == 175 || $division == 185 || $division == 195) {
  $cssEquipe = "coin6";
  $cssScore = "coin6pts";
  $cssEquipe2 = "coin7";
  $cssScore2 = "coin7pts";
}
?>
<table class="borderDouble width90PC marginAuto" >
  <tr> 
    <td class="titre">Quarts de finale <br>
    <div class="pf_lieux"><?php echo $D4ME; ?></div>
    </td>
  </tr>
</table>
<br>
<table class="width90PC marginAuto borderNone" >
  <tr> 
    <td colspan="2"></td>
  </tr>
  <tr> 
    <td class=<?php echo $cssEquipe; ?>><?php echo $clubA4001;?></td>
    <td class=<?php echo $cssScore; ?>><?php echo $A4001;?></td>
  </tr>
  <tr> 
    <td class=<?php echo $cssEquipe; ?>><?php echo $clubA4002;?></td>
    <td class=<?php echo $cssScore; ?>><?php echo $A4002;?></td>
  </tr>
  <tr> 
    <td class=<?php echo $cssEquipe2; ?>><?php echo $clubA4003;?></td>
    <td class=<?php echo $cssScore2; ?>><?php echo $A4003;?></td>
  </tr>
  <tr> 
    <td class=<?php echo $cssEquipe2; ?>><?php echo $clubA4004;?></td>
    <td class=<?php echo $cssScore2; ?>><?php echo $A4004;?></td>
  </tr>
  <tr> 
    <td class=<?php echo $cssEquipe; ?>><?php echo $clubA4005;?></td>
    <td class=<?php echo $cssScore; ?>><?php echo $A4005;?></td>
  </tr>
  <tr> 
    <td class=<?php echo $cssEquipe; ?>><?php echo $clubA4006;?></td>
    <td class=<?php echo $cssScore; ?>><?php echo $A4006;?></td>
  </tr>
  <tr> 
    <td class=<?php echo $cssEquipe2; ?>><?php echo $clubA4007;?></td>
    <td class=<?php echo $cssScore2; ?>><?php echo $A4007;?></td>
  </tr>
  <tr> 
    <td class=<?php echo $cssEquipe2; ?>><?php echo $clubA4008;?></td>
    <td class=<?php echo $cssScore2; ?>><?php echo $A4008;?></td>
  </tr>
  <tr> 
    <td colspan="2" class="height25"></td>
  </tr>
</table>
<p class=" marginAuto"><?php include ("../../pub/pub20.php");?></p>
