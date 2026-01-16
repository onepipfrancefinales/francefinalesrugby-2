<?php
$bdcomiteClub = $comite.''."_clubs";
require ("../../connect/connexion6.php") ;
require ("../../phasesfinalesterr2019/fonctionspfterrESDL2019.php");
//affichage2019($division);
//nomDivision($division);
huitieme2019($comite, $division, $annee, $bdd);
afficheLieux ($division, $annee, $comite, $bdd);
traitementScores (8001,8016, $bdd);
traitementScores (4001,4008, $bdd);
traitementScores (2001,2004, $bdd);
champion ($comite, $clubA1001, $clubA1002, $A1001, $A1002, $bdd);
afficheDivisionChampion($division);
?>
<head>
<link rel="stylesheet" type="text/css" href="../../phasesfinalesterr2019/qualification/qualification.css">
<link rel="stylesheet" type="text/css" href="../champTerr.css">

</head>
<table width="1350" border="0" height="500" cellspacing="0">
  
   <tr>
    <td width="21"></td>
    <td width="200"></td>
    <td width="40"></td>
    <td width="50"></td>
    <td width="200"></td>
    <td width="40"></td>
    <td width="50"></td>
    <td width="200"></td>
    <td width="40"></td>
    <td width="50"></td>
    <td width="200"></td>
    <td width="40"></td>
    <td width="50"></td>
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
    <td rowspan="26" height="284" bgcolor="#000000"></td>
    <td rowspan="28" height="304" width="278"><?php require("../../pub/pub6.php"); ?></td>
  </tr>
  <tr> 
    <td> </td>
    <td colspan="2"><div class="affichageTitre" >8me de finale</div></td>
    <td></td>
    <td colspan="2" ><div class="affichageTitre" >Quarts de finale</div></td>
    <td></td>
    <td colspan="2" ><div class="affichageTitre" >Demi finale</div></td>
    <td></td>
    <td><div class="affichageTitre" >Finale</div></td>
    <td></td>
    <td></td>
  </tr>
  <tr> 
    <td></td>
    <td><div align="center"><font size="2" face="Arial, Helvetica, sans-serif"><b><i><strong><?php echo $D8000; ?></strong></i></b></font></div></td>
    <td></td>
    <td></td>
    <td><div align="center"><font size="2" face="Arial, Helvetica, sans-serif"><b><i><strong><?php echo $D4000; ?></strong></i></b></font></div></td>
    <td></td>
    <td></td>
    <td><div align="center"><font size="2" face="Arial, Helvetica, sans-serif"><b><i><strong><?php echo $D2000; ?></strong></i></b></font></div></td>
    <td></td>
    <td></td>
    <td><div align="center"><font size="2" face="Arial, Helvetica, sans-serif"><b><i><strong><?php echo $D1000; ?></strong></i></b></font></div></td>
    <td></td>
    <td></td>
  </tr>
  <tr> 
    <td></td>
    <td></td>
    <td></td>
    <td rowspan="6" height="33"><img src="../../images/accolade.png" width="8" height="98"></td>
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
    <td><div class="affichageEquipe" ><?php	echo $clubA8001; ?></div></td>
    <td><div class="affichageGA"><?php echo $A8001 ?></div></td>
    <td> <font size="2" face="Arial, Helvetica, sans-serif"><i><?php echo $L4001; ?></i></font></td>
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
    <td><div class="affichageEquipe" ><?php	echo $clubA8002; ?></div></td>
    <td><div class="affichageGA" ><?php echo $A8002; ?></div></td>
    <td><div class="affichageEquipe" ><?php echo $clubA4001; ?></div></td>
    <td><div class="affichageGA" ><?php echo $A4001; ?></div></td>
    <td rowspan="8"><img src="../../images/accolade.png" width="12" height="172"></td>
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
    <td><div class="affichageEquipe" ><?php echo $clubA4002; ?></div></td>
    <td><div class="affichageGA" ><?php echo $A4002;  ?></div></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr> 
    <td></td>
    <td><div class="affichageEquipe" ><?php echo $clubA8003; ?></div></td>
    <td><div class="affichageGA" ><?php echo $A8003; ?></div></td>
    <td></td>
    <td></td>
    <td><?php if ($comite=="au" and $annee > 2021) echo "Champion d'Auvergne";?> <font size="2" face="Arial, Helvetica, sans-serif"><b><i><strong><?php	 echo $L2001; ?></strong></i></b></font> </td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr> 
    <td></td>
    <td><div class="affichageEquipe" ><?php	 echo $clubA8004; ?></div></td>
    <td><div class="affichageGA" ><?php echo $A8004; ?></div></td>
    <td></td>
    <td></td>
    <td><div class="affichageEquipe" ><?php echo $clubA2001; ?></div></td>
    <td><div class="affichageGA" ><?php echo $A2001; ?></div></td>
    <td rowspan="15"><div><img src="../../images/accolade.png" width="9" height="250"></div></td>
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
    <td><div class="affichageEquipe" ><?php echo $clubA2002; ?></div></td>
    <td><div class="affichageGA" ><?php echo $A2002; ?></div></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr> 
    <td></td>
    <td><div class="affichageEquipe" ><?php	 echo $clubA8005; ?></div></td>
    <td><div class="affichageGA" ><?php echo $A8005; ?></div></td>
    <td rowspan="5" height="71"><img src="../../images/accolade.png" width="8" height="98"></td>
    <td><font size="2" face="Arial, Helvetica, sans-serif"><b><i><strong><?php  echo $L4003; ?></strong></i></b></font></td>
    <td> </td>
    <td><?php if ($comite=="au" and $annee > 2021) echo "Champion Lyonnais";?></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr> 
    <td></td>
    <td><div class="affichageEquipe" ><?php echo $clubA8006; ?></div></td>
    <td><div class="affichageGA" ><?php echo $A8006; ?></div></td>
    <td><div class="affichageEquipe" ><?php echo $clubA4003;?></div></td>
    <td><div class="affichageGA" ><?php echo $A4003;  ?></div></td>
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
    <td><div class="affichageEquipe" ><?php echo $clubA4004;?></div></td>
    <td><div class="affichageGA" ><?php 	echo $A4004;  ?></div></td>
    <td></td>
    <td></td>
    <td><font size="2" face="Arial, Helvetica, sans-serif"><b><i><strong><?php	 echo $L1001; ?></strong></i></b></font> </td>
    <td></td>
    <td></td>
  </tr>
  <tr> 
    <td></td>
    <td><div class="affichageEquipe" ><?php echo $clubA8007; ?></div></td>
    <td><div class="affichageGA" ><?php echo $A8007; ?></div></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td><div class="affichageEquipe" ><?php echo $clubA1001;  ?></div></td>
    <td><div class="affichageGA" ><?php echo $A1001; ?></div></td>
    <td></td>
  </tr>
  <tr> 
    <td></td>
    <td><div class="affichageEquipe" ><?php echo $clubA8008; ?></div></td>
    <td><div class="affichageGA" ><?php echo $A8008; ?></div></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td><div class="affichageEquipe" ><?php echo $clubA1002;  ?></div></td>
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
    <td  colspan="2"><div align="center"><font face="Arial, Helvetica, sans-serif" size="3"><b>Champion <i><?php echo $annee; ?></i>  </b></font></div></td>
    <td></td>
  </tr>
   <tr> 
    <td></td>
    <td><div class="affichageEquipe" ><?php echo $clubA8009; ?></div></td>
    <td><div class="affichageGA" ><?php echo $A8009; ?></div></td>
    <td rowspan="5" height="83"><img src="../../images/accolade.png" width="8" height="98"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td colspan="2"><div align="center"><font face="Arial, Helvetica, sans-serif" size="3"><b><i><?php echo $division; ?></i></b></font></div></td>
    <td></td>
  </tr>
  <tr> 
    <td></td>
    <td><div class="affichageEquipe" ><?php echo $clubA8010; ?></div></td>
    <td><div class="affichageGA" ><?php echo $A8010; ?></div></td>
    <td><font size="2" face="Arial, Helvetica, sans-serif"> <b><i><?php  echo $L4005;  ?></i></b></font></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td rowspan="5" valign="middle" colspan="2"><div align="center"><img src="<?php echo $champLogo;  ?>" width="100" height="100"> </div></td>
    <td></td>
  </tr>
  <tr> 
    <td></td>
    <td></td>
    <td></td>
    <td><div class="affichageEquipe" ><?php echo $clubA4005;?></div></td>
    <td><div class="affichageGA" ><?php echo $A4005;  ?></div></td>
    <td rowspan="8" height="83"><img src="../../images/accolade.png" width="12" height="172"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr> 
    <td></td>
    <td><div class="affichageEquipe" ><?php	 echo $clubA8011; ?></div></td>
    <td><div class="affichageGA" ><?php	 echo $A8011; ?></div></td>
    <td><div class="affichageEquipe" ><?php	 echo $clubA4006; ?></div></td>
    <td><div class="affichageGA" ><?php 	echo $A4006; ?></div></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr> 
    <td></td>
    <td><div class="affichageEquipe" ><?php echo $clubA8012; ?></div></td>
    <td><div class="affichageGA" ><?php echo $A8012; ?></div></td>
    <td></td>
    <td></td>
    <td><?php if ($comite=="au" and $annee > 2021) echo "Champion Dr&ocirc;me Ard&egrave;che";?><font size="2" face="Arial, Helvetica, sans-serif"><b><i><strong><?php	 echo $L2003; ?></strong></i></b></font></td>
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
    <td><div class="affichageEquipe" ><?php echo $clubA2003; ?></div></td>
    <td><div class="affichageGA" ><?php echo $A2003; ?></div></td>
    <td></td>
  </tr>
  <tr> 
    <td></td>
    <td><div class="affichageEquipe" ><?php echo $clubA8013; ?> </div></td>
    <td><div class="affichageGA" ><?php echo $A8013; ?></div></td>
    <td rowspan="5" height="59"><img src="../../images/accolade.png" width="8" height="98"></td>
    <td></td>
    <td></td>
    <td><div class="affichageEquipe" ><?php echo $clubA2004; ?></div></td>
    <td><div class="affichageGA" ><?php echo $A2004; ?></div></td>
    <td></td>
	<td colspan ="2"><div align="center"><b><font color="#000000" size="5" face="Arial, Helvetica, sans-serif"><?php  echo $champion;   ?></font></b></div></td>
    <td></td>
	<td></td>
  </tr>
  <tr> 
    <td></td>
    <td><div class="affichageEquipe" ><?php echo $clubA8014; ?></div></td>
    <td><div class="affichageGA" ><?php echo $A8014; ?></div></td>
    <td><font size="2" face="Arial, Helvetica, sans-serif"><b><i><strong><?php  echo $L4007 ?></strong></i></b></font></td>
    <td></td>
    <td><?php if ($comite=="au" and $annee > 2021) echo "Champion des Alpes";?> </td>
    <td>  </td>
    <td></td>
    <td></td>
	<td></td>
    <td></td>
  </tr>
  <tr> 
    <td></td>
    <td></td>
    <td> </td>
    <td><div class="affichageEquipe" ><?php echo $clubA4007; ?></div></td>
    <td><div class="affichageGA" ><?php echo $A4007;  ?></div></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr> 
    <td></td>
    <td><div class="affichageEquipe" ><?php echo $clubA8015; ?></div></td>
    <td><div class="affichageGA" ><?php echo $A8015; ?></div></td>
    <td><div class="affichageEquipe" ><?php echo $clubA4008; ?></div></td>
    <td><div class="affichageGA" ><?php echo $A4008; ?></div></td>
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
    <td><div class="affichageEquipe" ><?php echo $clubA8016; ?></div></td>
    <td><div class="affichageGA" ><?php echo $A8016; ?></div></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td  width="6"></td>
  </tr>
  <tr> 
    <td  colspan="15" ></td>
  </tr>
  <tr> 
    <td  colspan="15" bgcolor="#FFCC66"></td>
  </tr>
  <tr> 
    <td  colspan="15"><div align="center"><?php require("../../pub/pub1.php"); ?></div></td>
  </tr>
</table>
 
<br>

