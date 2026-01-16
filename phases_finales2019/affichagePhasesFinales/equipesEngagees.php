
<?php if ($division == 190 or $division == 270)
 $date = " 05 mai";
else 
$date = " 11 mai";
if ($division == 170) 
 $color ="yellow";
else
$color = "white";
 
 ?>

<table border="0"  height="500" cellspacing="" align="center">
<td  bgcolor="#FFCC66" align="center" colspan="15" height="2"></td>
</tr>
<tr> 
  <td  align="center" colspan="15" class="bold styleArial size5"><br> Equipes engagées en championnat de France<br><?php echo  $nomDivision;?><br><br></td> 

  </tr>
  <tr> 
  <td  colspan="15" class="bold styleArial size3 alignLeft"><br><?php  if ($division == 170)  {?> En jaune, les équipes qui évolueront en Fédérale 3 la saison prochaine.<br><br><?php } ?></td> 

  </tr>
  <tr> 
  <td  bgcolor="#FFCC66" align="center" colspan="15" height="2"></td>
  </tr>
  <tr> 
    <td width="15"></td>
    <td width="15"></td>
    <td width="20"></td>
    <td width="110"></td>
    <td width="20"></td>
    <td width="20"></td>
    <td width="110"></td>
    <td width="20"></td>
    <td width="20"></td>
    <td width="110"></td>
    <td width="20"></td>
    <td width="20"></td>
    <td width="110"></td>
   <td width="15"></td>
	<td width="15"></td>
  </tr>
  <tr> 
  <td   colspan="15" height="20"></td>
  </tr>
  <tr> 
  <td></td>
  <td></td>
    <td  colspan="2"  class="bold styleArial size4">Ligue Auvergne Rhône Alpes</td>
    <td></td>
 
    <td colspan="2" class="bold styleArial size4">Ligue Nouvelle Aquitaine</td>
    <td></td>
   
    <td  colspan="2"  class="bold styleArial size4">Ligue Occitanie</td>
    <td></td>
    <td  colspan="2"  class="bold styleArial size4">Ligue Bretagne</td>
    
	 <td></td>
   <td></td>
  </tr>
  <tr> 
    <td colpspan="15"></td>
  </tr>
  <tr> 
  <td colpspan="15"></td>
  </tr>
  <tr> 
  <td></td>
  <td></td>
    <td class="coin4pts">1</td>
    <td class="coin4"> <span style = color:<?php echo $color ;?>><?php echo $clubA3201; ?></span></td>
    <td ></td>
    <td class="coin4pts">  1</td>
    <td class="coin4"> <span style = color:<?php echo $color ;?>><?php echo $clubA3231; ?></span></td>
    <td ></td>
    <td class="coin4pts">1</td>
    <td class="coin4"> <span style = color:<?php echo $color ;?>><?php echo $clubA3245; ?></span></td>
    <td ></td>
    <td class="coin4pts">1</td>
    <td class="coin4" > <span style = color:<?php echo $color ;?>><?php echo $clubA3215; ?></span></td>
    <td></td>
	  <td></td>
  </tr>
  <tr>
    
  <td></td>
	  <td></td>
  <td class="coin4pts">2</td>
  <td class="coin4"><?php echo $clubA3202; ?></td>
  <td ></td>
    <td class="coin4pts">2</td>
    <td class="coin4"><?php echo $clubA3232; ?></td>
    <td ></td>
    <td class="coin4pts">2</td>
    <td class="coin4"> <span style = color:<?php echo $color ;?>><?php echo $clubA3246; ?></span></td>
   
    <td ></td>
    <td class="coin4pts">2</td>
    <td class="coin4"><?php echo $clubA3216; ?></td>
    <td></td>
	  <td></td>
  </tr>
  <tr>
  <td></td>
  <td></td>
  <td class="coin4pts">3</td>
  <td class="coin4"> <span style = color:<?php echo $color ;?>><?php echo $clubA3203; ?></span></td>
  <td ></td>
    <td class="coin4pts">3</td>
    <td class="coin4"><?php echo $clubA3233; ?></td>
    <td ></td>
    <td class="coin4pts">3</td>
    <td class="coin4"> <span style = color:<?php echo $color ;?>><?php echo $clubA3247; ?></span></td>
    <td></td>
    <td ></td>
    <td></td>
    <td></td>
	  <td></td>
  </tr>
  <tr>
  <td></td>
  <td></td>
  <td class="coin4pts">4</td>
  <td class="coin4"><?php echo $clubA3204; ?></td>
  <td ></td>
    <td class="coin4pts">4</td>
    <td class="coin4"><?php echo $clubA3234; ?></td>
    <td ></td>
    <td class="coin4pts">4</td>
    <td class="coin4"> <span style = color:<?php echo $color ;?>><?php echo $clubA3248; ?></span></td>
    <td ></td>
    <td></td>
    <td></td>
    <td></td>
	  <td></td>
  </tr>
  <tr> 
  <td></td>
  <td></td>
  <td class="coin4pts">5</td>
  <td class="coin4"><?php echo $clubA3205; ?></td>
  <td ></td>
    <td class="coin4pts">5</td>
    <td class="coin4"> <span style = color:<?php echo $color ;?>><?php echo $clubA3235; ?></span></td>
    <td ></td>
    <td class="coin4pts">5</td>
    <td class="coin4"><?php echo $clubA3249; ?></td>
    <td ></td>
    <td colspan="2"  class="bold styleArial size4">Centre val de Loire</td>
    <td></td>
	  <td></td>
    
  </tr>
  <tr> 
  <td></td>
  <td></td>
  <td class="coin4pts"> 6</td>
  <td class="coin4"> <span style = color:<?php echo $color ;?>><?php echo $clubA3206; ?></span></td>
  <td ></td>
    <td class="coin4pts">6</td>
    <td class="coin4"> <span style = color:<?php echo $color ;?>><?php echo $clubA3236; ?></span></td>
    <td ></td>
    <td class="coin4pts">6</td>
    <td class="coin4"> <span style = color:<?php echo $color ;?>><?php echo $clubA3250; ?></span></td>
   
    <td ></td>
    <td class="coin4pts">1</td>
    <td class="coin4"> <span style = color:<?php echo $color ;?>><?php echo $clubA3217; ?></span></td>
   
    <td></td>
	  <td></td>
    
  </tr>
  <tr> 
  <td></td>
  <td></td>
  <td class="coin4pts">7</td>
  <td class="coin4"> <span style = color:<?php echo $color ;?>><?php echo $clubA3207; ?></span></td>
  <td ></td>
    <td class="coin4pts">7</td>
    <td class="coin4"> <span style = color:<?php echo $color ;?>><?php echo $clubA3237; ?></span></td>
    <td ></td>
    <td class="coin4pts">7</td>
    <td class="coin4"> <span style = color:<?php echo $color ;?>><?php echo $clubA3251; ?></span></td>
   
    <td ></td>
    <td class="coin4pts">2</td>
    <td class="coin4"><?php echo $clubA3218; ?></td>
   
    <td></td>
	  <td></td>
  </tr>
  <tr>
  <td></td>
  <td></td>
  <td class="coin4pts">8</td>
  <td class="coin4"><?php echo $clubA3208; ?></td>
  <td ></td>
    <td class="coin4pts">8</td>
    <td class="coin4"> <span style = color:<?php echo $color ;?>><?php echo $clubA3238; ?></span></td>
    <td ></td>
    <td class="coin4pts">8</td>
    <td class="coin4"><?php echo $clubA3252; ?></td>
   
    <td ></td>
    <td></td>
    <td></td>
   
    <td></td>
	  <td></td>
    
  </tr>
  <td></td>
	  <td></td>
  <tr>
  <td></td>
  <td></td>
  
  <td class="coin4pts">9</td>
  <td class="coin4"><?php echo $clubA3209; ?></td>
  <td ></td>
    <td class="coin4pts">9</td>
    <td class="coin4"> <span style = color:<?php echo $color ;?>><?php echo $clubA3239; ?></span></td>
    <td ></td>
    <td class="coin4pts">9</td>
    <td class="coin4"><?php echo $clubA3253; ?></td>
   
    <td ></td>
    <td></td>
    <td></td>
   
    <td></td>
	  <td></td>
  </tr>
  <tr> 
  <td></td>
  <td></td>
  <td class="coin4pts">10</td>
  <td class="coin4"><?php echo $clubA3210; ?></td>
  <td ></td>
    <td class="coin4pts">10</td>
    <td class="coin4"><?php echo $clubA3240; ?></td>
    <td ></td>
    <td class="coin4pts">10</td>
    <td class="coin4"><?php echo $clubA3254; ?></td>
    <td ></td>

    <td colspan="2"  class="bold styleArial size4">Ligue Grand Est</td>
   
    <td></td>
	  <td></td>
  </tr>
  <tr>
  <td></td>
  <td></td>
  
  <td></td>
  <td></td>

	  <td></td>
    <td class="coin4pts">11</td>
    <td class="coin4"><?php echo $clubA3241; ?></td>
    <td ></td>
    <td class="coin4pts">11</td>
    <td class="coin4"><?php echo $clubA3255; ?></td>
   
    <td ></td>
    <td class="coin4pts">1</td>
    <td class="coin4"><?php echo $clubA3219; ?></td>
   
    <td></td>
	  <td></td>
  </tr>
  <tr>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td ></td>
    <td class="coin4pts">12</td>
    <td class="coin4"><?php echo $clubA3242; ?></td>
    <td ></td>
    <td class="coin4pts">12</td>
    <td class="coin4"><?php echo $clubA3256; ?></td>
   
    <td ></td>
    <td class="coin4pts">2</td>
    <td class="coin4"><?php echo $clubA3220; ?></td>
   
    <td></td>
	  <td></td>
  </tr>
  <tr>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td ></td>
    <td class="coin4pts">13</td>
    <td class="coin4"><?php echo $clubA3243; ?></td>
    <td ></td>
    <td class="coin4pts">13</td>
    <td class="coin4"><?php echo $clubA3257; ?></td>
   
    <td ></td>
    <td ></td>
    <td ></td>
    <td></td>
	  <td></td>
  </tr>
  <tr> 
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td ></td>
    <td class="coin4pts">14</td>
    <td class="coin4"><?php echo $clubA3244; ?></td>
    <td ></td>
    <td class="coin4pts">14</td>
    <td class="coin4"><?php echo $clubA3258; ?></td>
   
    <td ></td>
    <td></td>
    <td></td>
   
    <td></td>
	  <td></td>
 </tr>
  <tr> 
  <td></td>
  <td></td>
  <td ></td>
  <td ></td>
  <td ></td>
    <td></td>
    <td></td>
    <td ></td>
    <td></td>
    <td></td>
   
    <td ></td>
    <td colspan="2"  class="bold styleArial size4">Ligue Hauts de France</td>
    <td></td>
	  <td></td>
  </tr>
  <tr> 
  <td></td>
  <td></td>
  <td colspan="2"  class="bold styleArial size4">Ligue Ile de France </td>
  
  <td ></td>
    <td></td>
    <td></td>
    <td ></td>
    <td ></td>
    <td ></td>
   
    <td ></td>
    <td class="coin4pts">1</td>
    <td class="coin4"><?php echo $clubA3221; ?></td>
   
    <td></td>
	  <td></td>
  </tr>
  <tr> 
  <td></td>
  <td></td>
  <td class="coin4pts">1</td>
  <td class="coin4"> <span style = color:<?php echo $color ;?>><?php echo $clubA3223; ?></span></td>
  <td ></td>
    <td></td>
    <td></td>
    <td ></td>
    <td></td>
    <td></td>
   
    <td ></td>
    <td class="coin4pts">2</td>
    <td class="coin4" > <span style = color:<?php echo $color ;?>><?php echo $clubA3222; ?></span></td>
    <td></td>
	  <td></td>
  </tr>
  <tr> 
  <td></td>
  <td></td>
  <td class="coin4pts">2</td>
  <td class="coin4"><span style = color:<?php echo $color ;?>><?php echo $clubA3224; ?></span></td>
  <td ></td>
    <td Colspan="2"  class="bold styleArial size4">Ligue Bourgogne</td>
    
    <td ></td>
    <td colspan="2"  class="bold styleArial size4">Ligue Provence ACA </td>
    <td ></td>
    <td ></td>
    <td></td>
   
    <td></td>
	  <td></td>
	
  </tr>
  <tr> 
  <td></td>
  <td></td>
  <td class="coin4pts">3</td>
  <td class="coin4"><span style = color:<?php echo $color ;?>> <?php echo $clubA3225; ?></span></td>
  <td ></td>
    <td class="coin4pts">1</td>
    <td class="coin4"> <span style = color:<?php echo $color ;?>><?php echo $clubA3211; ?></span></td>
    <td ></td>
    <td class="coin4pts">1</td>
    <td class="coin4"><span style = color:<?php echo $color ;?>><?php echo $clubA3261; ?></span></td>
   
    <td ></td>
    <td ></td>
    <td></td>
   
    <td></td>
	  <td></td>
  </tr>
  <tr> 
  <td></td>
  <td></td>
  <td class="coin4pts">4</td>
  <td class="coin4"><?php echo $clubA3226; ?></td>
  <td ></td>
    <td class="coin4pts">2</td>
    <td class="coin4"><?php echo $clubA3212; ?></td>
    <td ></td>
    <td class="coin4pts"> 2</td>
    <td class="coin4"2><?php echo $clubA3262; ?></td>
    <td ></td>
    <td colspan="2"  class="bold styleArial size4">Ligue Normandie</td>
    <td></td>
	  <td></td>
 </tr>
  <tr> 
  <td></td>
  <td></td>
  <td class="coin4pts">5</td>
  <td class="coin4"><?php echo $clubA3227; ?></td>
  <td ></td>
    <td class="coin4pts">3</td>
    <td class="coin4"> <span style = color:<?php echo $color ;?>><?php echo $clubA3213; ?></span></td>
    <td ></td>
    <td class="coin4pts">3</td>
    <td class="coin4"><span style = color:<?php echo $color ;?>><?php echo $clubA3263; ?></span></td>
    <td ></td>
    <td class="coin4pts">1</td>
    <td class="coin4"><?php echo $clubA3229; ?></td>
   
    <td></td>
	  <td></td>
  </tr>
  <tr>
  <td></td>
  <td></td> 
  <td class="coin4pts">6</td>
  <td class="coin4"><?php echo $clubA3228; ?></td>
  <td ></td>
    <td class="coin4pts">4</td>
    <td class="coin4"><?php echo $clubA3214; ?></td>
    <td ></td>
    <td class="coin4pts">4</td>
    <td class="coin4"><?php echo $clubA3264; ?></td>
   
    <td ></td>
    <td class="coin4pts">2</td>
    <td class="coin4"> <span style = color:<?php echo $color ;?>><?php echo $clubA3230; ?></span></td>
   
    <td></td>
	  <td></td>
  </tr>
  <tr> 
  <td height="20"></td>
  <td></td>
  <td ></td>
  <td ></td>
  <td ></td>
    <td"></td>
    <td ></td>
    <td ></td>
    <td ></td>
    <td ></td>
   
    <td ></td>
    <td ></td>
    <td ></td>
   
    <td></td>
	  <td></td>
  </tr>
  <tr> 
  <td height="20"></td>
  <td></td>
  <td ></td>
  <td ></td>
  <td ></td>
    <td ></td>
    <td ></td>
    <td ></td>
    <td ></td>
    <td ></td>
   
    <td ></td>
    <td ></td>
    <td ></td>
   
    <td></td>
	  <td></td>
  </tr>
  <tr> 
  <td></td>
  <td></td>
  <td ></td>
  <td ></td>
  <td ></td>
    <td></td>
    <td></td>
    <td ></td>
    <td ></td>
    <td ></td>
   
    <td ></td>
    <td colspan="2"  class="bold styleArial size4">Ligue Pays de Loire</td>
   
   
    <td></td>
	  <td></td>
  </tr>
  <tr> 
  <td></td>
  <td colspan="7" class="bold colorRed size5 styleArial">Les oppositions seront connues à partir du <?php echo $date; ?>.</td>
 
   
    <td ></td>
    <td ></td>
   
    <td ></td>
    <td class="coin4pts">1</td>
    <td class="coin4"> <span style = color:<?php echo $color ;?>><?php echo $clubA3259; ?></span></td>
   
    <td></td>
	  <td></td>
  </tr>
  <tr> 
  <td></td>
  <td></td>
  <td></td>
  <td ></td>
  <td ></td>
    <td ></td>
    <td></td>
    <td ></td>
    <td ></td>
    <td ></td>
   
    <td ></td>
    <td class="coin4pts">2</td>
    <td class="coin4"><?php echo $clubA3260; ?></td>
   
    <td></td>
	  <td></td>
  </tr>
  <tr> 
  <td colspan="15" height="20"></td>
</tr> 
  <tr> 
  <td  bgcolor="#FFCC66" align="center" colspan="15" height="2"></td>
  </tr>
  <tr> 
  <td colspan="15" height="20"></td>
</tr> 
</table>
<style>

.size {
font-size:26px

}
</style>

