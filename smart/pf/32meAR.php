<?php
//require ("../../phases_finales2019/fonctionsChampFrance2019.php");  
require '../../connect/connexion5.php';
nomDivision($division);

require '../../connect/connexion1.php';

trenteDeuxieme2019 (160, $annee, $bdd);
date2019($division, $annee, $bdd);
//championDeFrance ( $clubA1001, $clubA1002, $A1001, $A1002, $bdd);

?>


<table class="borderDouble width90PC marginAuto">
  <tr> 
    <td class="titre">32me de finale A/R <br>
    <div class="pf_lieux"><?php echo $D32ME; ?></div></td>
  </tr>
</table>
<table class="borderNone width90PC marginAuto">
  <tr> 
    <td colspan="3"></td>
    
  </tr>
  <tr> 
    <td></td>
    <td class="pts">Pts</td>
    <td class="Ga">GA</td>
  </tr>
  <tr> 
    <td class="coin4"><?php echo $clubA3201;?></td>
    <td class="quartsPts"><?php echo $A3201Pts;?></td>
    <td class="coin4pts"><?php echo $A3201;?></td>
  </tr>
  <tr> 
    <td class="coin4"><?php echo $clubA3202;?></td>
    <td class="quartsPts"><?php echo $A3202Pts;?></td>
    <td class="coin4pts"><?php echo $A3202;?></td>
  </tr>
  <tr> 
    <td class="coin5"><?php echo $clubA3203;?></td>
    <td class="quarts2pts"><?php echo $A3203Pts;?></td>
    <td class="coin5pts"><?php echo $A3203;?></td>
  </tr>
  <tr> 
    <td class="coin5"><?php echo $clubA3204;?></td>
    <td class="quarts2pts"><?php echo $A3204Pts;?></td>
    <td class="coin5pts"><?php echo $A3204;?></td>
  </tr>
  <tr> 
    <td class="coin4"><?php echo $clubA3205;?></td>
    <td class="quartsPts"><?php echo $A3205Pts;?></td>
    <td class="coin4pts"><?php echo $A3205;?></td>
  </tr>
  <tr> 
    <td class="coin4"><?php echo $clubA3206;?></td>
    <td class="quartsPts"><?php echo $A3206Pts;?></td>
    <td class="coin4pts"><?php echo $A3206;?></td>
  </tr>
  <tr> 
    <td class="coin5"><?php echo $clubA3207?></td>
    <td class="quarts2pts"><?php echo $A3207Pts;?></td>
    <td class="coin5pts"><?php echo $A3207;?></td>
  </tr>
  <tr> 
    <td class="coin5"><?php echo $clubA3208;?></td>
    <td class="quarts2pts"><?php echo $A3208Pts;?></td>
    <td class="coin5pts"><?php echo $A3208;?></td>
  </tr>
  <tr> 
    <td class="coin4"><?php echo $clubA3209;?></td>
    <td class="quartsPts"><?php echo $A3209Pts;?></td>
    <td class="coin4pts"><?php echo $A3209;?></td>
  </tr>
  <tr> 
    <td class="coin4"><?php echo $clubA3210;?></td>
    <td class="quartsPts"><?php echo $A3210Pts;?></td>
    <td class="coin4pts"><?php echo $A3210;?></td>
  </tr>
  <tr> 
    <td class="coin5"><?php echo $clubA3211;?></td>
    <td class="quarts2pts"><?php echo $A3211Pts;?></td>
    <td class="coin5pts"><?php echo $A3211;?></td>
  </tr>
  <tr> 
    <td class="coin5"><?php echo $clubA3212;?></td>
    <td class="quarts2pts"><?php echo $A3212Pts;?></td>
    <td class="coin5pts"><?php echo $A3212;?></td>
  </tr>
  <tr> 
    <td class="coin4"><?php echo $clubA3213;?></td>
    <td class="quartsPts"><?php echo $A3213Pts;?></td>
    <td class="coin4pts"><?php echo $A3213;?></td>
  </tr>
  <tr> 
    <td class="coin4"><?php echo $clubA3214;?></td>
    <td class="quartsPts"><?php echo $A3214Pts;?></td>
    <td class="coin4pts"><?php echo $A3214;?></td>
  </tr>
  <tr> 
    <td class="coin5"><?php echo $clubA3215;?></td>
    <td class="quarts2pts"><?php echo $A3215Pts;?></td>
    <td class="coin5pts"><?php echo $A3215;?></td>
  </tr>
  <tr> 
    <td class="coin5"><?php echo $clubA3216;?></td>
    <td class="quarts2pts"><?php echo $A3216Pts;?></td>
    <td class="coin5pts"><?php echo $A3216;?></td>
  </tr>
</table>

<p class="marginAuto"><?php	require "../../pub/pub20.php";?></p>

<table class="borderNone width90PC marginAuto">
  <tr> 
    <td class="coin4"><?php echo $clubA3217;?></td>
    <td class="quartsPts"><?php echo $A3217Pts;?></td>
    <td class="coin4pts"><?php echo $A3217;?></td>
  </tr>
  <tr> 
    <td class="coin4"><?php echo $clubA3218;?></td>
    <td class="quartsPts"><?php echo $A3218Pts;?></td>
    <td class="coin4pts"><?php echo $A3218;?></td>
  </tr>
  <tr> 
    <td class="coin5"><?php echo $clubA3219;?></td>
    <td class="quarts2pts"><?php echo $A3219Pts;?></td>
    <td class="coin5pts"><?php echo $A3219;?></td>
  </tr>
  <tr> 
    <td class="coin5"><?php echo $clubA3220;?></td>
    <td class="quarts2pts"><?php echo $A3220Pts;?></td>
    <td class="coin5pts"><?php echo $A3220;?></td>
  </tr>
  <tr> 
    <td class="coin4"><?php echo $clubA3221;?></td>
    <td class="quartsPts"><?php echo $A3221Pts;?></td>
    <td class="coin4pts"><?php echo $A3221;?></td>
  </tr>
  <tr> 
    <td class="coin4"><?php echo $clubA3222;?></td>
    <td class="quartsPts"><?php echo $A3222Pts;?></td>
    <td class="coin4pts"><?php echo $A3222;?></td>
  </tr>
  <tr> 
    <td class="coin5"><?php echo $clubA3223;?></td>
    <td class="quarts2pts"><?php echo $A3223Pts;?></td>
    <td class="coin5pts"><?php echo $A3223;?></td>
  </tr>
  <tr> 
    <td class="coin5"><?php echo $clubA3224;?></td>
    <td class="quarts2pts"><?php echo $A3224Pts;?></td>
    <td class="coin5pts"><?php echo $A3224;?></td>
  </tr>
  <tr> 
    <td class="coin4"><?php echo $clubA3225;?></td>
    <td class="quartsPts"><?php echo $A3225Pts;?></td>
    <td class="coin4pts"><?php echo $A3225;?> </td>
  </tr>
  <tr> 
    <td class="coin4"><?php echo $clubA3226;?></td>
    <td class="quartsPts"><?php echo $A3226Pts;?></td>
    <td class="coin4pts"><?php echo $A3226;?></td>
  </tr>
  <tr> 
    <td class="coin5"><?php echo $clubA3227;?></td>
    <td class="quarts2pts"><?php echo $A3227Pts;?></td>
    <td class="coin5pts"><?php echo $A3227;?></td>
  </tr>
  <tr> 
    <td class="coin5"><?php echo $clubA3228;?></td>
    <td class="quarts2pts"><?php echo $A3228Pts;?></td>
    <td class="coin5pts"><?php echo $A3228;?></td>
  </tr>
  <tr> 
    <td class="coin4"><?php echo $clubA3229;?> </td>
    <td class="quartsPts"><?php echo $A3229Pts;?></td>
    <td class="coin4pts"><?php echo $A3229;?></td>
  </tr>
  <tr> 
    <td class="coin4"><?php echo $clubA3230;?></td>
    <td class="quartsPts"><?php echo $A3230Pts;?></td>
    <td class="coin4pts"><?php echo $A3230;?></td>
  </tr>
  <tr> 
	<td class="coin5"><?php echo $clubA3231;?></td>
	<td class="quarts2pts"><?php echo $A3231Pts;?></td>
    <td class="coin5pts"><?php echo $A3231;?></td>
  </tr>
  <tr> 
    <td class="coin5"><?php echo $clubA3232;?></td>
    <td class="quarts2pts"><?php echo $A3232Pts;?></td>
    <td class="coin5pts"><?php echo $A3232;?></td>
  </tr>
</table>

<p class="marginAuto"><?php	require "../../pub/pub20.php";?></p>

<table class="borderNone width90PC marginAuto">
  <tr> 
    <td class="coin4"><?php echo $clubA3233;?></td>
    <td class="quartsPts"><?php echo $A3233Pts;?></td>
    <td class="coin4pts"><?php echo $A3233;?></td>
  </tr>
  <tr> 
	<td class="coin4"><?php echo $clubA3234;?></td>
    <td class="quartsPts"><?php echo $A3234Pts;?></td>
    <td class="coin4pts"><?php echo $A3234;?></td>
  </tr>
  <tr> 
    <td class="coin5"><?php echo $clubA3235;?></td>
    <td class="quarts2pts"><?php echo $A3235Pts;?></td>
    <td class="coin5pts"><?php echo $A3235;?></td>
  </tr>
  <tr> 
    <td class="coin5"><?php echo $clubA3236;?></td>
    <td class="quarts2pts"><?php echo $A3236Pts;?></td>
    <td class="coin5pts"><?php echo $A3236;?></td>
  </tr>
  <tr> 
    <td class="coin4"><?php echo $clubA3237;?></td>
    <td class="quartsPts"><?php echo $A3237Pts;?></td>
    <td class="coin4pts"><?php echo $A3237;?></td>
  </tr>
  <tr> 
    <td class="coin4"><?php echo $clubA3238;?></td>
    <td class="quartsPts"><?php echo $A3238Pts;?></td>
    <td class="coin4pts"><?php echo $A3238;?></td>
  </tr>
  <tr> 
    <td class="coin5"><?php echo $clubA3239;?></td>
    <td class="quarts2pts"><?php echo $A3239Pts;?></td>
    <td class="coin5pts"><?php echo $A3239;?></td>
  </tr>
  <tr> 
    <td class="coin5"><?php echo $clubA3240;?></td>
    <td class="quarts2pts"><?php echo $A3240Pts;?></td>
    <td class="coin5pts"><?php echo $A3240;?></td>
  </tr>
  <tr> 
    <td class="coin4"><?php echo $clubA3241;?></td>
    <td class="quartsPts"><?php echo $A3241Pts;?></td>
    <td class="coin4pts"><?php echo $A3241;?></td>
  </tr>
  <tr> 
    <td class="coin4"><?php echo $clubA3242;?></td>
    <td class="quartsPts"><?php echo $A3242Pts;?></td>
    <td class="coin4pts"><?php echo $A3242;?></td>
  </tr>
  <tr> 
    <td class="coin5"><?php echo $clubA3243;?></td>
    <td class="quarts2pts"><?php echo $A3243Pts;?></td>
    <td class="coin5pts"><?php echo $A3243;?></td>
  </tr>
  <tr> 
    <td class="coin5"><?php echo $clubA3244;?></td>
    <td class="quarts2pts"><?php echo $A3244Pts;?></td>
    <td class="coin5pts"><?php echo $A3244;?></td>
  </tr>
  <tr> 
    <td class="coin4"><?php echo $clubA3245;?></td>
    <td class="quartsPts"><?php echo $A3245Pts;?></td>
    <td class="coin4pts"><?php echo $A3245;?></td>
  </tr>
  <tr> 
    <td class="coin4"><?php echo $clubA3246;?></td>
    <td class="quartsPts"><?php echo $A3246Pts;?></td>
    <td class="coin4pts"><?php echo $A3246;?></td>
  </tr>
  <tr> 
    <td class="coin5"><?php echo $clubA3247;?></td>
    <td class="quarts2pts"><?php echo $A3247Pts;?></td>
    <td class="coin5pts"><?php echo $A3247;?></td>
  </tr>
  <tr> 
    <td class="coin5"><?php echo $clubA3248;?></td>
    <td class="quarts2pts"><?php echo $A3248Pts;?></td>
    <td class="coin5pts"><?php echo $A3248;?></td>
  </tr>
</table>

<p class="marginAuto "><?php	require "../../pub/pub20.php";?></p>

<table class="borderNone width90PC marginAuto">
  <tr> 
    <td class="coin4"><?php echo $clubA3249;?></td>
    <td class="quartsPts"><?php echo $A3249Pts;?></td>
    <td class="coin4pts"><?php echo $A3249;?></td>
  </tr>
  <tr> 
    <td class="coin4"><?php echo $clubA3250;?></td>
    <td class="quartsPts"><?php echo $A3250Pts;?> </td>
    <td class="coin4pts"><?php echo $A3250;?></td>
  </tr>
  <tr> 
    <td class="coin5"><?php echo $clubA3251;?></td>
    <td class="quarts2pts"><?php echo $A3251Pts;?></td>
    <td class="coin5pts"><?php echo $A3251;?></td>
  </tr>
  <tr> 
    <td class="coin5"><?php echo $clubA3252;?></td>
    <td class="quarts2pts"><?php echo $A3252Pts;?></td>
    <td class="coin5pts"><?php echo $A3252;?></td>
  </tr>
  <tr> 
    <td class="coin4"><?php echo $clubA3253;?></td>
    <td class="quartsPts"><?php echo $A3253Pts;?></td>
    <td class="coin4pts"><?php echo $A3253;?></td>
  </tr>
  <tr> 
    <td class="coin4"><?php echo $clubA3254;?></td>
    <td class="quartsPts"><?php echo $A3254Pts;?></td>
    <td class="coin4pts"><?php echo $A3254;?></td>
  </tr>
  <tr> 
    <td class="coin5"><?php echo $clubA3255;?></td>
    <td class="quarts2pts"><?php echo $A3255Pts;?></td>
    <td class="coin5pts"><?php echo $A3255;?></td>
  </tr>
  <tr> 
    <td class="coin5"><?php echo $clubA3256;?></td>
    <td class="quarts2pts"><?php echo $A3256Pts;?></td>
    <td class="coin5pts"><?php echo $A3256;?></td>
  </tr>
  <tr> 
    <td class="coin4"><?php echo $clubA3257;?></td>
    <td class="quartsPts"><?php echo $A3257Pts;?></td>
    <td class="coin4pts"><?php echo $A3257;?></td>
  </tr>
  <tr> 

    <td class="coin4"><?php echo $clubA3258;?></td>
    <td class="quartsPts"><?php echo $A3258Pts;?></td>
    <td class="coin4pts"><?php echo $A3258;?></td>
  </tr>
  <tr> 
    <td class="coin5"><?php echo $clubA3259;?></td>
    <td class="quarts2pts"><?php echo $A3259Pts;?></td>
    <td class="coin5pts"><?php echo $A3259;?></td>
  </tr>
  <tr> 
    <td class="coin5"><?php echo $clubA3260;?></td>
    <td class="quarts2pts"><?php echo $A3260Pts;?></td>
    <td class="coin5pts"><?php echo $A3260;?></td>
  </tr>
  <tr> 
    <td class="coin4"><?php echo $clubA3261;?></td>
    <td class="quartsPts"><?php echo $A3261Pts;?></td>
    <td class="coin4pts"><?php echo $A3261;?></td>
  </tr>
  <tr> 
    <td class="coin4"><?php echo $clubA3262;?></td>
    <td class="quartsPts"><?php echo $A3262Pts;?></td>
    <td class="coin4pts"><?php echo $A3262;?></td>
  </tr>
  <tr> 
    <td class="coin5"><?php echo $clubA3263;?></td>
    <td class="quarts2pts"><?php echo $A3263Pts;?></td>
    <td class="coin5pts"><?php echo $A3263;?></td>
  </tr>
  <tr> 
    <td class="coin5"><?php echo $clubA3264;?></td>
    <td class="quarts2pts"><?php echo $A3264Pts;?></td>
    <td class="coin5pts"><?php echo $A3264;?></td>
  </tr>
  <tr> 
    <td colspan="3" class="height25"></td>
  </tr>
</table>
