
<?php
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
<table class="borderDouble width90PC marginAuto">
  <tr> 
    <td class="titre">Demi finale<br>
   <div class="pf_lieux"><?php echo $D2ME; ?></div></td>
  </tr>
</table>
<br>
<table  class="borderNone width90PC marginAuto">
  <tr> 
    <td colspan="2"></td>
  </tr>
  <tr> 
    <td class=<?php echo $cssEquipe; ?>><?php echo $clubA2001;?></td>
    <td class=<?php echo $cssScore; ?>><?php echo $A2001;?></td>
  </tr>
  <tr> 
    <td class=<?php echo $cssEquipe; ?>><?php echo $clubA2002;?></td>
    <td class=<?php echo $cssScore; ?>><?php echo $A2002;?></td>
  </tr>
  <tr> 
    <td colspan="2" ></td>
  </tr>
  <tr> 
    <td class=<?php echo $cssEquipe2; ?>><?php echo $clubA2003;?></td>
    <td class=<?php echo $cssScore2; ?>><?php echo $A2003;?></td>
  </tr>
  <tr> 
    <td class=<?php echo $cssEquipe2; ?>><?php echo $clubA2004;?></td>
    <td class=<?php echo $cssScore2; ?>><?php echo $A2004;?></td>
  </tr>
  <tr> 
    <td colspan="2" ></td>
  </tr>
</table>
<br>
