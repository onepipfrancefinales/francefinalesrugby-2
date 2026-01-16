<?php
 require '../../phases_finales2019/affichagePhasesFinales/fichierQualifies.php';
if ($annee == 2025) {
  echo "<hr>";
  echo "<br>";
  echo "<table class=\"borderNone\">";
    echo "<tr>";
  if ($division == 170 || $division == 175) {
?>
    
        <td class="equipe5_50PC"> <a href="pagePhaseFinale.php?division=170&annee=<?php echo $annee; ?>">Régionale 1</td>
        <td class="coin6_50PC"> <a href="pagePhaseFinale.php?division=175&annee=<?php echo $annee; ?>">Promotion Reg 1</td>
  <?php
  } else if ($division == 180 || $division == 185) {
  ?>
    
        <td class="equipe5_50PC"> <a href="pagePhaseFinale.php?division=180&annee=<?php echo $annee; ?>">Régionale 2</td>
        <td class="coin6_50PC"> <a href="pagePhaseFinale.php?division=185&annee=<?php echo $annee; ?>">Promotion Reg 2</td>
  <?php
  } else if ($division == 190 || $division == 195) {
  ?>
    
        <td class="equipe5_50PC"> <a href="pagePhaseFinale.php?division=190&annee=<?php echo $annee; ?>">Régionale 3</td>
        <td class="coin6_50PC"> <a href="pagePhaseFinale.php?division=195&annee=<?php echo $annee; ?>">Promotion Reg 3</td>
<?php
  }
  echo "</tr>";


  echo "</table>";
}


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

<br>
<table class="borderDouble width90PC marginAuto">
  <tr>
    <td class="titre"> 32me de finale<br>
      <div class="pf_lieux"><?php echo $D32ME; ?></div>
    </td>
  </tr>
</table>
<p class="size4">
<?php
if ($division == 170 and $annee == 2025) 
  echo "Les équipes en rouges évolueront la saison prochaine en fédérale 3. Les 2 meilleurs parcours
 parmi les équipes de couleur noire gagneront le droit d'évoluer en Fédérale 3 la saison prochaine. ";
?>
</p>
<table class="borderNone width90PC marginAuto">
  <tr>
    <td colspan="2"></td>
  </tr>
  <tr>
    <td class=<?php echo $cssEquipe; ?>><?php if ($qualif3201 == true){;?>
      <span style = color:red><?php  echo $clubA3201 ;?></span><?php }  else {
      echo $clubA3201; } ?>  </td>
    <td class=<?php echo $cssScore; ?>><?php echo $A3201; ?></td>
  </tr>
  <tr>
    <td class=<?php echo $cssEquipe; ?>><?php echo $clubA3202; ?></td>
    <td class=<?php echo $cssScore; ?>><?php echo $A3202; ?></td>
  </tr>
  <tr>
    <td class=<?php echo $cssEquipe2; ?>><?php if ($qualif3203 == true){;?>
      <span style = color:red><?php  echo $clubA3203 ;?></span><?php }  else {
      echo $clubA3203; } ?> </td>
    <td class=<?php echo $cssScore2; ?>><?php echo $A3203; ?></td>
  </tr>
  <tr>
    <td class=<?php echo $cssEquipe2; ?>><?php echo $clubA3204; ?></td>
    <td class=<?php echo $cssScore2; ?>><?php echo $A3204; ?></td>
  </tr>
  <tr>
    <td class=<?php echo $cssEquipe; ?>><?php if ($qualif3205 == true){;?>
      <span style = color:red><?php  echo $clubA3205 ;?></span><?php }  else {
      echo $clubA3205; } ?> </td>
    <td class=<?php echo $cssScore; ?>><?php echo $A3205; ?></td>
  </tr>
  <tr>
    <td class=<?php echo $cssEquipe; ?>><?php echo $clubA3206; ?></td>
    <td class=<?php echo $cssScore; ?>><?php echo $A3206; ?></td>
  </tr>
  <tr>
    <td class=<?php echo $cssEquipe2; ?>><?php if ($qualif3207 == true){;?>
      <span style = color:red><?php  echo $clubA3207 ;?></span><?php }  else {
      echo $clubA3207; } ?> </td>
    <td class=<?php echo $cssScore2; ?>><?php echo $A3207; ?></td>
  </tr>
  <tr>
    <td class=<?php echo $cssEquipe2; ?>><?php echo $clubA3208; ?></td>
    <td class=<?php echo $cssScore2; ?>><?php echo $A3208; ?></td>
  </tr>
  <tr>
    <td colspan="2" class="height25"></td>
  </tr>
  <tr>
    <td class=<?php echo $cssEquipe; ?>><?php if ($qualif3209 == true){;?>
      <span style = color:red><?php  echo $clubA3209 ;?></span><?php }  else {
      echo $clubA3209; } ?> </td>
    <td class=<?php echo $cssScore; ?>><?php echo $A3209; ?></td>
  </tr>
  <tr>
    <td class=<?php echo $cssEquipe; ?>><?php if ($qualif3210 == true){;?>
      <span style = color:red><?php  echo $clubA3210 ;?></span><?php }  else {
      echo $clubA3210; } ?></td>
    <td class=<?php echo $cssScore; ?>><?php echo $A3210; ?></td>
  </tr>
  <tr>
    <td class=<?php echo $cssEquipe2; ?>><?php if ($qualif3211 == true){;?>
      <span style = color:red><?php  echo $clubA3211 ;?></span><?php }  else {
      echo $clubA3211; } ?></td>
    <td class=<?php echo $cssScore2; ?>><?php echo $A3211; ?></td>
  </tr>
  <tr>
    <td class=<?php echo $cssEquipe2; ?>><?php echo $clubA3212; ?></td>
    <td class=<?php echo $cssScore2; ?>><?php echo $A3212; ?></td>
  </tr>
  <tr>
    <td class=<?php echo $cssEquipe; ?>><?php if ($qualif3213 == true){;?>
      <span style = color:red><?php  echo $clubA3213 ;?></span><?php }  else {
      echo $clubA3213; } ?></td>
    <td class=<?php echo $cssScore; ?>><?php echo $A3213; ?></td>
  </tr>
  <tr>
    <td class=<?php echo $cssEquipe; ?>><?php echo $clubA3214; ?></td>
    <td class=<?php echo $cssScore; ?>><?php echo $A3214; ?></td>
  </tr>
  <tr>
    <td class=<?php echo $cssEquipe2; ?>><?php if ($qualif3215 == true){;?>
      <span style = color:red><?php  echo $clubA3215 ;?></span><?php }  else {
      echo $clubA3215; } ?></td>
    <td class=<?php echo $cssScore2; ?>><?php echo $A3215; ?></td>
  </tr>
  <tr>
    <td class=<?php echo $cssEquipe2; ?>><?php echo $clubA3216; ?></td>
    <td class=<?php echo $cssScore2; ?>><?php echo $A3216; ?></td>
  </tr>
  <tr>
    <td colspan="2" class="height25"></td>
  </tr>
  <tr>
    <td class=<?php echo $cssEquipe; ?>><?php if ($qualif3217 == true){;?>
      <span style = color:red><?php  echo $clubA3217 ;?></span><?php }  else {
      echo $clubA3217; } ?></td>
    <td class=<?php echo $cssScore; ?>><?php echo $A3217; ?></td>
  </tr>
  <tr>
    <td class=<?php echo $cssEquipe; ?>><?php echo $clubA3218; ?></td>
    <td class=<?php echo $cssScore; ?>><?php echo $A3218; ?></td>
  </tr>
  <tr>
    <td class=<?php echo $cssEquipe2; ?>><?php if ($qualif3219 == true){;?>
      <span style = color:red><?php  echo $clubA3219 ;?></span><?php }  else {
      echo $clubA3219; } ?></td>
    <td class=<?php echo $cssScore2; ?>><?php echo $A3219; ?></td>
  </tr>
  <tr>
    <td class=<?php echo $cssEquipe2; ?>><?php if ($qualif3220 == true){;?>
      <span style = color:red><?php  echo $clubA3220 ;?></span><?php }  else {
      echo $clubA3220; } ?></td>
    <td class=<?php echo $cssScore2; ?>><?php echo $A3220; ?></td>
  </tr>
  <tr>
    <td class=<?php echo $cssEquipe; ?>><?php if ($qualif3221 == true){;?>
      <span style = color:red><?php  echo $clubA3221 ;?></span><?php }  else {
      echo $clubA3221; } ?></td>
    <td class=<?php echo $cssScore; ?>><?php echo $A3221; ?></td>
  </tr>
  <tr>
    <td class=<?php echo $cssEquipe; ?>><?php echo $clubA3222; ?></td>
    <td class=<?php echo $cssScore; ?>><?php echo $A3222; ?></td>
  </tr>
  <tr>
    <td class=<?php echo $cssEquipe2; ?>><?php if ($qualif3223 == true){;?>
      <span style = color:red><?php  echo $clubA3223 ;?></span><?php }  else {
      echo $clubA3223; } ?></td>
    <td class=<?php echo $cssScore2; ?>><?php echo $A3223; ?></td>
  </tr>
  <tr>
    <td class=<?php echo $cssEquipe2; ?>><?php echo $clubA3224; ?></td>
    <td class=<?php echo $cssScore2; ?>><?php echo $A3224; ?></td>
  </tr>
  <tr>
    <td colspan="2" class="height25"></td>
  </tr>
  <tr>
    <td class=<?php echo $cssEquipe; ?>><?php if ($qualif3225 == true){;?>
      <span style = color:red><?php  echo $clubA3225 ;?></span><?php }  else {
      echo $clubA3225; } ?></td>
    <td class=<?php echo $cssScore; ?>><?php echo $A3225; ?></td>
  </tr>
  <tr>
    <td class=<?php echo $cssEquipe; ?>><?php echo $clubA3226; ?></td>
    <td class=<?php echo $cssScore; ?>><?php echo $A3226; ?></td>
  </tr>
  <tr>
    <td class=<?php echo $cssEquipe2; ?>><?php if ($qualif3227 == true){;?>
      <span style = color:red><?php  echo $clubA3227 ;?></span><?php }  else {
      echo $clubA3227; } ?></td>
    <td class=<?php echo $cssScore2; ?>><?php echo $A3227; ?></td>
  </tr>
  <tr>
    <td class=<?php echo $cssEquipe2; ?>><?php echo $clubA3228; ?></td>
    <td class=<?php echo $cssScore2; ?>><?php echo $A3228; ?></td>
  </tr>
  <tr>
    <td class=<?php echo $cssEquipe; ?>><?php if ($qualif3229 == true){;?>
      <span style = color:red><?php  echo $clubA3229 ;?></span><?php }  else {
      echo $clubA3229; } ?></td>
    <td class=<?php echo $cssScore; ?>><?php echo $A3229; ?></td>
  </tr>
  <tr>
    <td class=<?php echo $cssEquipe; ?>><?php echo $clubA3230; ?></td>
    <td class=<?php echo $cssScore; ?>><?php echo $A3230; ?></td>
  </tr>
  <tr>
    <td class=<?php echo $cssEquipe2; ?>><?php if ($qualif3231 == true){;?>
      <span style = color:red><?php  echo $clubA3231 ;?></span><?php }  else {
      echo $clubA3231; } ?></td>
    <td class=<?php echo $cssScore2; ?>><?php echo $A3231; ?></td>
  </tr>
  <tr>
    <td class=<?php echo $cssEquipe2; ?>><?php echo $clubA3232; ?></td>
    <td class=<?php echo $cssScore2; ?>><?php echo $A3232; ?></td>
  </tr>
  <tr>
    <td colspan="2" class="height25"></td>
  </tr>
  <tr>

    <td class=<?php echo $cssEquipe; ?>><?php if ($qualif3233 == true){;?>
      <span style = color:red><?php  echo $clubA3233 ;?></span><?php }  else {
      echo $clubA3233; } ?></td>
    <td class=<?php echo $cssScore; ?>><?php echo $A3233; ?></td>
  </tr>
  <tr>
    <td class=<?php echo $cssEquipe; ?>><?php echo $clubA3234; ?></td>
    <td class=<?php echo $cssScore; ?>><?php echo $A3234; ?></td>
  </tr>
  <tr>
    <td class=<?php echo $cssEquipe2; ?>><?php if ($qualif3235 == true){;?>
      <span style = color:red><?php  echo $clubA3235 ;?></span><?php }  else {
      echo $clubA3235; } ?></td>
    <td class=<?php echo $cssScore2; ?>><?php echo $A3235; ?></td>
  </tr>
  <tr>
    <td class=<?php echo $cssEquipe2; ?>><?php echo $clubA3236; ?></td>
    <td class=<?php echo $cssScore2; ?>><?php echo $A3236; ?></td>
  </tr>
  <tr>
    <td class=<?php echo $cssEquipe; ?>><?php if ($qualif3237 == true){;?>
      <span style = color:red><?php  echo $clubA3237 ;?></span><?php }  else {
      echo $clubA3237; } ?></td>
    <td class=<?php echo $cssScore; ?>><?php echo $A3237; ?></td>
  </tr>
  <tr>
    <td class=<?php echo $cssEquipe; ?>><?php echo $clubA3238; ?></td>
    <td class=<?php echo $cssScore; ?>><?php echo $A3238; ?></td>
  </tr>
  <tr>
    <td class=<?php echo $cssEquipe2; ?>><?php if ($qualif3239 == true){;?>
      <span style = color:red><?php  echo $clubA3239 ;?></span><?php }  else {
      echo $clubA3239; } ?></td>
    <td class=<?php echo $cssScore2; ?>><?php echo $A3239; ?></td>
  </tr>
  <tr>
    <td class=<?php echo $cssEquipe2; ?>><?php echo $clubA3240; ?></td>
    <td class=<?php echo $cssScore2; ?>><?php echo $A3240; ?></td>
  </tr>
  <tr>
    <td colspan="2" class="height25"></td>
  </tr>
  <tr>
    <td class=<?php echo $cssEquipe; ?>><?php if ($qualif3241 == true){;?>
      <span style = color:red><?php  echo $clubA3241 ;?></span><?php }  else {
      echo $clubA3241; } ?></td>
    <td class=<?php echo $cssScore; ?>><?php echo $A3241; ?></td>
  </tr>
  <tr>
    <td class=<?php echo $cssEquipe; ?>><?php echo $clubA3242; ?></td>
    <td class=<?php echo $cssScore; ?>><?php echo $A3242; ?></td>
  </tr>
  <tr>
    <td class=<?php echo $cssEquipe2; ?>><?php if ($qualif3243 == true){;?>
      <span style = color:red><?php  echo $clubA3243 ;?></span><?php }  else {
      echo $clubA3243; } ?></td>
    <td class=<?php echo $cssScore2; ?>><?php echo $A3243; ?></td>
  </tr>
  <tr>
    <td class=<?php echo $cssEquipe2; ?>><?php echo $clubA3244; ?></td>
    <td class=<?php echo $cssScore2; ?>><?php echo $A3244; ?></td>
  </tr>
  <tr>
    <td class=<?php echo $cssEquipe; ?>><?php if ($qualif3245 == true){;?>
      <span style = color:red><?php  echo $clubA3245 ;?></span><?php }  else {
      echo $clubA3245; } ?></td>
    <td class=<?php echo $cssScore; ?>><?php echo $A3245; ?></td>
  </tr>
  <tr>
    <td class=<?php echo $cssEquipe; ?>><?php echo $clubA3246; ?></td>
    <td class=<?php echo $cssScore; ?>><?php echo $A3246; ?></td>
  </tr>
  <tr>
    <td class=<?php echo $cssEquipe2; ?>><?php if ($qualif3247 == true){;?>
      <span style = color:red><?php  echo $clubA3247 ;?></span><?php }  else {
      echo $clubA3247; } ?></td>
    <td class=<?php echo $cssScore2; ?>><?php echo $A3247; ?></td>
  </tr>
  <tr>
    <td class=<?php echo $cssEquipe2; ?>><?php echo $clubA3248; ?></td>
    <td class=<?php echo $cssScore2; ?>><?php echo $A3248; ?></td>
  </tr>
</table>



<table class="borderNone width90PC marginAuto">
  <tr>
    <td class=<?php echo $cssEquipe; ?>><?php if ($qualif349 == true){;?>
      <span style = color:red><?php  echo $clubA3249 ;?></span><?php }  else {
      echo $clubA3249; } ?></td>
    <td class=<?php echo $cssScore; ?>><?php echo $A3249; ?></td>
  </tr>
  <tr>
    <td class=<?php echo $cssEquipe; ?>><?php echo $clubA3250; ?></td>
    <td class=<?php echo $cssScore; ?>><?php echo $A3250; ?></td>
  </tr>
  <tr>
    <td class=<?php echo $cssEquipe2; ?>><?php if ($qualif3251 == true){;?>
      <span style = color:red><?php  echo $clubA3251 ;?></span><?php }  else {
      echo $clubA3251; } ?></td>
    <td class=<?php echo $cssScore2; ?>><?php echo $A3251; ?></td>
  </tr>
  <tr>
    <td class=<?php echo $cssEquipe2; ?>><?php echo $clubA3252; ?></td>
    <td class=<?php echo $cssScore2; ?>><?php echo $A3252; ?></td>
  </tr>
  <tr>
    <td class=<?php echo $cssEquipe; ?>><?php if ($qualif3253 == true){;?>
      <span style = color:red><?php  echo $clubA3253 ;?></span><?php }  else {
      echo $clubA3253; } ?></td>
    <td class=<?php echo $cssScore; ?>><?php echo $A3253; ?></td>
  </tr>
  <tr>
    <td class=<?php echo $cssEquipe; ?>><?php echo $clubA3254; ?></td>
    <td class=<?php echo $cssScore; ?>><?php echo $A3254; ?></td>
  </tr>
  <tr>
    <td class=<?php echo $cssEquipe2; ?>><?php if ($qualif3255 == true){;?>
      <span style = color:red><?php  echo $clubA3255 ;?></span><?php }  else {
      echo $clubA3255; } ?></td>
    <td class=<?php echo $cssScore2; ?>><?php echo $A3255; ?></td>
  </tr>
  <tr>
    <td class=<?php echo $cssEquipe2; ?>><?php echo $clubA3256; ?></td>
    <td class=<?php echo $cssScore2; ?>><?php echo $A3256; ?></td>
  </tr>
  <tr>
    <td colspan="2" class="height25"></td>
  </tr>
  <tr>
    <td class=<?php echo $cssEquipe; ?>><?php if ($qualif3257 == true){;?>
      <span style = color:red><?php  echo $clubA3257 ;?></span><?php }  else {
      echo $clubA3257; } ?></td>
    <td class=<?php echo $cssScore; ?>><?php echo $A3257; ?></td>
  </tr>
  <tr>
    <td class=<?php echo $cssEquipe; ?>><?php echo $clubA3258; ?></td>
    <td class=<?php echo $cssScore; ?>><?php echo $A3258; ?></td>
  </tr>
  <tr>
    <td class=<?php echo $cssEquipe2; ?>><?php if ($qualif3259 == true){;?>
      <span style = color:red><?php  echo $clubA3259 ;?></span><?php }  else {
      echo $clubA3259; } ?></td>
    <td class=<?php echo $cssScore2; ?>><?php echo $A3259; ?></td>
  </tr>
  <tr>
    <td class=<?php echo $cssEquipe2; ?>><?php echo $clubA3260; ?></td>
    <td class=<?php echo $cssScore2; ?>><?php echo $A3260; ?></td>
  </tr>
  <tr>
    <td class=<?php echo $cssEquipe; ?>><?php if ($qualif3261 == true){;?>
      <span style = color:red><?php  echo $clubA3261 ;?></span><?php }  else {
      echo $clubA3261; } ?></td>
    <td class=<?php echo $cssScore; ?>><?php echo $A3261; ?></td>
  </tr>
  <tr>
    <td class=<?php echo $cssEquipe; ?>><?php echo $clubA3262; ?></td>
    <td class=<?php echo $cssScore; ?>><?php echo $A3262; ?></td>
  </tr>
  <tr>
    <td class=<?php echo $cssEquipe2; ?>><?php if ($qualif3263 == true){;?>
      <span style = color:red><?php  echo $clubA3263 ;?></span><?php }  else {
      echo $clubA3263; } ?></td>
    <td class=<?php echo $cssScore2; ?>><?php echo $A3263; ?></td>
  </tr>
  <tr>
    <td class=<?php echo $cssEquipe2; ?>><?php echo $clubA3264; ?></td>
    <td class=<?php echo $cssScore2; ?>><?php echo $A3264; ?></td>
  </tr>
</table>
<br>