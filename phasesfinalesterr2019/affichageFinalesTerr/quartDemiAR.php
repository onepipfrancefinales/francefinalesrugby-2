<?php
$bdcomiteClub = $comite.''."_clubs";
require ("../../connect/connexion6.php") ;
require ("../../phasesfinalesterr2019/fonctionspfterrESDL2019.php");
quartsDemiAR2019($comite, $division, $annee, $bdd);
traitementScores (4001, 4008, $bdd);
traitementScores (2001, 2004, $bdd);
traitementScores (1001, 1002, $bdd);
afficheLieux ($division, $annee, $comite, $bdd);
champion ($comite, $clubA1001, $clubA1002, $A1001, $A1002, $bdd);
afficheDivisionChampion($division);


?><head>
<link rel="stylesheet" type="text/css" href="../champTerr.css">
</head>
 
<table  border="0"  cellspacing="0" width="5">
  <tr> 
    <td colspan="13"></td>
  </tr>
  <tr> 
    <td></td>
    <td colspan="3" ><div class="affichageTitre" >Quarts de finale A/R</div></td>
    <td></td>
    <td></td>
    <td><div class="affichageTitre" >Demi finale A/R</div></td>
    <td></td>
    <td></td>
    <td></td>
    <td><div class="affichageTitre" >Finale</div></td>
    <td></td>
    <td></td>
  </tr>
  <tr>   
    <td colspan="13"></td>
  </tr>
 
  <tr>   
    <td></td>
    <td class="size2 styleArial italic  alignLeft bold"><?php echo $D4000; ?></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="size2 styleArial italic  alignLeft bold"><?php echo $D2000; ?></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="size2 styleArial italic  alignLeft bold"><i><?php echo $D1000; ?></td>
    <td></td>
    <td></td>
  </tr>
  <tr> 
    <td colspan="13" height="8" ></td>
  </tr>
  <tr>   
    <td></td>
    <td></td>
    <td class="bold styleArial">Pts</td>
    <td class="bold styleArial">GA</td>
    <td></td>
    <td></td>
    <td></td>
    <td ></td>
    <td></td>
    <td></td>
    <td></td>
    <td ></td>
    <td></td>
    <td></td>
  </tr>
  <tr> 
    <td width="5"></td>
    <td width="200"><div class="affichageEquipe"><?php echo $clubA4001;?></div></td>
    <td width="38"><div class="affichagePts"><?php echo $pts4001;?></div></td>
    <td width="38"><div class="affichageGA"><?php echo $GA4001;?></div></td>
    <td width="80"></td>
    <td width="80"></td>
    <td colspan="7"></td>
    
  </tr>
  <tr> 
    <td></td>
    <td><div class="affichageEquipe"><?php echo $clubA4002;?></div></td>
    <td><div class="affichagePts"><?php echo $pts4002;?></div></td>
    <td><div class="affichageGA"><?php echo $GA4002;?></div></td>
    <td></td>
    <td ></td>
    <td></td>
    <td class="bold styleArial">Pts</td>
    <td class="bold styleArial">GA</td>
    <td ></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr> 
    <td colspan="6"></td>
    <td width="200"><div class="affichageEquipe"><?php echo $clubA2001;?></div></td>
    <td width="38"><div class="affichagePts"><?php echo $pts2001;?></div></td>
	<td width="38"><div class="affichageGA"><?php echo $GA2001;?></div></td>
    <td colspan="4"></td>
  </tr>
  <tr> 
    <td colspan="6"></td>
    <td><div class="affichageEquipe" ><?php echo $clubA2002;?></div></td>
    <td><div class="affichagePts" ><?php echo $pts2002;?></div></td>
    <td><div class="affichageGA" ><?php echo $GA2002;?></div></td>
    <td colspan="4"></td>
  </tr>
  <tr> 
    <td></td>
    <td><div class="affichageEquipe" ><?php echo $clubA4003;?></div></td>
    <td><div class="affichagePts" ><?php echo $pts4003;?></div></td>
    <td><div class="affichageGA" ><?php echo $GA4003;?></div></td>
    <td colspan="9"></td>
  </tr>
  <tr> 
    <td></td>
    <td><div class="affichageEquipe" ><?php echo $clubA4004;?></div></td>
    <td><div class="affichagePts" ><?php echo $pts4004;?></div></td>
    <td><div class="affichageGA" ><?php echo $GA4004;?></div></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td width="200"><div class="affichageEquipe" ><?php echo $clubA1001;?></div></td>
    <td width="38"><div class="affichageGA" ><?php echo $A1001;  ?></div></td>
    <td></td>
  </tr>
  <tr> 
    <td colspan="10"></td>
    <td><div class="affichageEquipe" ><?php echo $clubA1002;?></div></td>
    <td><div class="affichageGA" ><?php echo $A1002;  ?></div></td>
    <td></td>
  </tr>
  <tr> 
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td rowspan="4"></td>
    <td rowspan="4" colspan="2"></td>
    <td rowspan="4"></td>
  </tr>
  <tr> 
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
	<td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr> 
    <td></td>
    <td><div class="affichageEquipe" ><?php echo $clubA4005;?></div></td>
    <td><div class="affichagePts" ><?php echo $pts4005;?></div></td>
    <td><div class="affichageGA" ><?php echo $GA4005;?></div></td>
    <td></td>
    <td> </td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr> 
    <td></td>
    <td><div class="affichageEquipe" ><?php echo $clubA4006;?></div></td>
    <td><div class="affichagePts" ><?php echo $pts4006;?></div></td>
    <td><div class="affichageGA" ><?php echo $GA4006;?></div></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr> 
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td><div class="affichageEquipe" ><?php echo $clubA2003;?></div></td>
    <td><div class="affichagePts" ><?php echo $pts2003;?></div></td>
    <td><div class="affichageGA" ><?php echo $GA2003;?></div></td>
    <td rowspan="5"></td>
    <td rowspan="5" colspan="2"></td>
    <td rowspan="5"></td>
  </tr>
  <tr> 
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td><div class="affichageEquipe" ><?php echo $clubA2004;?></div></td>
    <td><div class="affichagePts" ><?php echo $pts2004;?></div></td>
    <td><div class="affichageGA" ><?php echo $GA2004;?></div></td>
  </tr>
  <tr> 
    <td></td>
    <td><div class="affichageEquipe" ><?php echo $clubA4007;?></div></td>
    <td><div class="affichagePts" ><?php echo $pts4007;?></div></td>
    <td><div class="affichageGA" ><?php echo $GA4007;?></div></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr> 
    <td></td>
    <td><div class="affichageEquipe" ><?php echo $clubA4008;?></div></td>
    <td><div class="affichagePts" ><?php echo $pts4008;?></div></td>
    <td><div class="affichageGA" ><?php echo $GA4008;?></div></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>  
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
 
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td height ="18"></td>
  </tr>
   <tr> 
    <td colspan="13"></td>
  </tr>
  <tr bgcolor="#FFCC66">
	<td colspan="13" > </td>
  </tr>

</table>
