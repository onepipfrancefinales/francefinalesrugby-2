<?php
$bdcomiteClub = $comite.''."_clubs";
require ("../../connect/connexion6.php") ;
require ("../../phasesfinalesterr2019/fonctionspfterrESDL2019.php");
quarts2019($comite, $division, $annee, $bdd);
traitementScores (4001, 4008, $bdd);
traitementScores (2001, 2004, $bdd);
traitementScores (1001, 1002, $bdd);
//afficheLieux ($division, $annee, $comite, $bdd);
champion ($comite, $clubA1001, $clubA1002, $A1001, $A1002, $bdd);
afficheDivisionChampion($division, $annee);
?>
<head>
<link rel="stylesheet" type="text/css" href="../../phasesfinalesterr2019/qualification/qualification.css">
<link rel="stylesheet" type="text/css" href="../champTerr.css">
</head>


<table width="1000" border="0" height="500" cellspacing="0">
  <tr> 
    <td width="44" height="13"></td>
    <td width="185" height="13"></td>
    <td width="27" height="13"></td>
    <td width="24" height="13"></td>
    <td width="32" height="13"></td>
    <td width="81" height="13"></td>
    <td width="201" height="13"></td>
    <td width="28" height="13"></td>
    <td width="33" height="13"></td>
    <td width="47" height="13"></td>
    <td width="213" height="13"></td>
    <td width="40" height="13"></td>
    <td width="19" height="13"></td>
  </tr>
  <tr> 
    <td width="44" height="13"> </td>
    <td colspan="3" height="13"><div class="affichageTitre" >Quarts de finale A/R</div></td>
    <td width="32" height="13"></td>
    <td width="81" height="13"></td>
    <td width="201" height="13"><div class="affichageTitre" >Demi finale A/R</div></td>
    <td width="28" height="13"></td>
    <td width="33" height="13"></td>
    <td width="47" height="13"></td>
    <td width="213" height="13"><div class="affichageTitre" >Finale</div></td>
    <td width="40" height="13"></td>
    <td width="19" height="13"></td>
  </tr>
  <tr> 
    <td width="44" height="26"> </td>
    <td width="185" height="26"> </td>
    <td width="27" height="26"></td>
    <td width="24" height="26"></td>
    <td width="32" height="26"></td>
    <td width="81" height="26"></td>
    <td width="201" height="26"> </td>
    <td width="28" height="26"></td>
    <td width="33" height="26"></td>
    <td width="47" height="26"></td>
    <td width="213" height="26"></td>
    <td width="40" height="26"></td>
    <td width="19" height="26"></td>
  </tr>
  <tr> 
    <td width="44" height="25"></td>
    <td colspan="3" height="25"> <font size="2" face="Arial, Helvetica, sans-serif"><b><i><strong></strong></i></b></font> </td>
    <td width="32" height="25"></td>
    <td width="81" height="25"></td>
    <td width="201" height="25"></td>
    <td width="28" height="25"></td>
    <td width="33" height="25"></td>
    <td width="47" height="25"></td>
    <td width="213" height="25"></td>
    <td width="40" height="25"></td>
    <td width="19" height="25"></td>
  </tr>
  <tr> 
    <td width="44"> </td>
    <td width="185"><div class="affichageGA"><?php echo $clubA4001;?></div></td>
    <td width="27"><div class="affichagePts"><?php echo $A2001;?></div></td>
    <td width="24"><div class="affichageGA"><?php echo $A4001;?></div></td>
    <td width="32"></td>
    <td width="81"></td>
    <td width="201"></td>
    <td width="28"></td>
    <td width="33"></td>
    <td width="47"></td>
    <td width="213"></td>
    <td width="40"></td>
    <td width="19"></td>
  </tr>
  <tr> 
    <td width="44" height="23"> </td>
    <td width="185" height="23"><div class="affichageGA" ><?php echo $clubA4002;?></div></td>
    <td width="27" height="23"><div class="affichagePts"><?php echo $A2002;?></div></td>
    <td width="24" height="23"><div class="affichageGA" ><?php echo $A4002;?></div></td>
    <td width="32" height="23"></td>
    <td width="81" height="23"></td>
    <td colspan="3" height="23"> <font size="2" face="Arial, Helvetica, sans-serif"><b><i><strong></strong></i></b></font> </td>
    <td width="47" height="23"></td>
    <td width="213" height="23"></td>
    <td width="40" height="23"></td>
    <td width="19" height="23"></td>
  </tr>
  <tr> 
    <td width="44" height="17"></td>
    <td width="185" height="17"></td>
    <td width="27" height="17"></td>
    <td width="24" height="17"></td>
    <td width="32" height="17"></td>
    <td width="81" height="17"></td>
    <td width="201" height="17"><div class="affichageGA" ><?php echo $clubA2001;?></div></td>
    <td width="28" height="17"><div class="affichagePts" ><?php echo $A2001;?></div></td>
	<td width="33" height="17"><div class="affichageGA" ><?php echo $A2001;?></div></td>
    <td width="47" height="17"></td>
    <td width="213" height="17"></td>
    <td width="40" height="17"></td>
    <td width="19" height="17"></td>
  </tr>
  <tr> 
    <td width="44"></td>
    <td width="185"></td>
    <td width="27"></td>
    <td width="24"></td>
    <td width="32"></td>
    <td width="81"></td>
    <td width="201"><div class="affichageGA" ><?php echo $clubA2002;?></div></td>
    <td width="28"><div class="affichagePts" ><?php echo $A2002;?></div></td>
    <td width="33"><div class="affichageGA" ><?php echo $A2002;?></div></td>
    <td width="47"></td>
    <td width="213"></td>
    <td width="40"></td>
    <td width="19"></td>
  </tr>
  <tr> 
    <td width="44" height="22"> </td>
    <td width="185" height="22"><div class="affichageGA" ><?php echo $clubA4003;?></div></td>
    <td width="27" height="22"><div class="affichagePts" ><?php echo $A2003;?></td>
    <td width="24" height="22"><div class="affichageGA" ><?php echo $A4003;?></div></td>
    <td width="32" height="22"></td>
    <td width="81" height="22"></td>
    <td width="201" height="22"></td>
    <td width="28" height="22"></td>
    <td width="33" height="22"></td>
    <td width="47" height="22"></td>
    <td colspan="3" height="22"> <font size="2" face="Arial, Helvetica, sans-serif"><b><i><strong> 
      </strong></i></b></font> </td>
  </tr>
  <tr> 
    <td width="44" height="23"> </td>
    <td width="185" height="23"><div class="affichageGA" ><?php echo $clubA4004;?></div></td>
    <td width="27" height="23"><div class="affichagePts" ><?php echo $A2004;?></div></td>
    <td width="24" height="23"><div class="affichageGA" ><?php echo $A4004;?></div></td>
    <td width="32" height="23"></td>
    <td width="81" height="23"></td>
    <td width="201" height="23"></td>
    <td width="28" height="23"></td>
    <td width="33" height="23"></td>
    <td width="47" height="23"></td>
    <td width="213" height="23"><div class="affichageGA" ><?php echo $clubA1001;?></div></td>
    <td width="40" height="23"><div class="affichageGA" ><?php echo $A1001;  ?></div></td>
    <td width="19" height="23"></td>
  </tr>
  <tr> 
    <td width="44" height="11"> </td>
    <td width="185" height="11"></td>
    <td width="27" height="11"></td>
    <td width="24" height="11"></td>
    <td width="32" height="11"></td>
    <td width="81" height="11"></td>
    <td width="201" height="11"></td>
    <td width="28" height="11"></td>
    <td width="33" height="11"></td>
    <td width="47" height="11"></td>
    <td width="213" height="11"><div class="affichageGA" ><?php echo $clubA1002;?></div></td>
    <td width="40" height="11"><div class="affichageGA" ><?php echo $A1002;  ?></div></td>
    <td width="19" height="11"></td>
  </tr>
  <tr> 
    <td width="44" height="12"></td>
    <td width="185" height="12"></td>
    <td width="27" height="12"></td>
    <td width="24" height="12"></td>
    <td width="32" height="12"></td>
    <td width="81" height="12"></td>
    <td width="201" height="12"></td>
    <td width="28" height="12"></td>
    <td width="33" height="12"></td>
    <td rowspan="4" width="47"> 
      <div align="center"><font color="#000000" face="Geneva, Arial, Helvetica, san-serif"size="3"><b><font size="6"> 
        </font></b></font></div>
      <div align="center"></div>
    </td>
    <td rowspan="4" colspan="2"> 
      <div align="center"><font color="#000000" face="Geneva, Arial, Helvetica, san-serif"size="3"><b><font size="6"> 
        </font></b></font></div>
    </td>
    <td rowspan="4" width="19"></td>
  </tr>
  <tr valign="top"> 
    <td width="44" height="6"></td>
    <td width="185" height="6"></td>
    <td width="27" height="6"></td>
    <td width="24" height="6"></td>
    <td width="32" height="6"></td>
    <td width="81" height="6"></td>
    <td width="201" height="6"></td>
    <td width="28" height="6"></td>
    <td width="33" height="6"></td>
  </tr>
  <tr> 
    <td width="44" height="5"> </td>
    <td width="185" height="5"> 
     <div class="affichageGA" ><?php echo $clubA4005;?></div></td>
    <td width="27" height="5"><div class="affichagePts" ><?php echo $A4005;?></div></td>
    <td width="24" height="5"><div class="affichageGA" ><?php echo $A4005;?></div></td>
    <td width="32" height="5"></td>
    <td width="81" height="5"> </td>
    <td width="201" height="5"></td>
    <td width="28" height="5"></td>
    <td width="33" height="5"></td>
  </tr>
  <tr> 
    <td width="44" height="20"> </td>
    <td width="185" height="20"><div class="affichageGA" ><?php echo $clubA4006;?></div></td>
    <td width="27" height="20"><div class="affichagePts" ><?php echo $A4006;?></div></td>
    <td width="24" height="20"><div class="affichageGA" ><?php echo $A4006;?></div></td>
    <td width="32" height="20"> 
      
    </td>
    <td width="81" height="20"> </td>
    <td width="201" height="20"></td>
    <td width="28" height="20"></td>
    <td width="33" height="20"></td>
  </tr>
  <tr> 
    <td width="44"></td>
    <td width="185"></td>
    <td width="27"></td>
    <td width="24"></td>
    <td width="32"></td>
    <td width="81"></td>
    <td width="201"><div class="affichageGA" ><?php echo $clubA2003;?></div></td>
    <td width="28"><div class="affichagePts" ><?php echo $A2003;?></div></td>
    <td width="33"><div class="affichageGA" ><?php echo $A2003;?></div></td>
    <td rowspan="5" width="47"> 
      <div align="center"> </div>
      <div align="center"></div>
    </td>
    <td rowspan="5" colspan="2"> 
      <div align="center"> </div>
      <div align="center"></div>
    </td>
    <td rowspan="5" width="19"></td>
  </tr>
  <tr> 
    <td width="44"></td>
    <td width="185"> </td>
    <td width="27"></td>
    <td width="24"></td>
    <td width="32"></td>
    <td width="81"></td>
    <td width="201"><div class="affichageGA" ><?php echo $clubA2004;?></div></td>
    <td width="28"><div class="affichagePts" ><?php echo $A2004;?></div></td>
    <td width="33"><div class="affichageGA" ><?php echo $A2004;?></div></td>
  </tr>
  <tr> 
    <td width="44"> </td>
    <td width="185"><div class="affichageGA" ><?php echo $clubA4007;?></div></td>
    <td width="27"><div class="affichagePts" ><?php echo $A4007;?></div></td>
    <td width="24"><div class="affichageGA" ><?php echo $A4007;?></div></td>
    <td width="32"></td>
    <td width="81"></td>
    <td width="201"></td>
    <td width="28"></td>
    <td width="33"></td>
  </tr>
  <tr> 
    <td width="44" height="11"> </td>
    <td width="185"><div class="affichageGA" ><?php echo $clubA4008;?></div></td>
    <td width="27"><div class="affichagePts" ><?php echo $A4008;?></div></td>
    <td width="24"><div class="affichageGA" ><?php echo $A4008;?></div></td>
    <td width="32"></td>
    <td width="81"></td>
    <td width="201"></td>
    <td width="28"></td>
    <td width="33"></td>
  </tr>
  <tr> 
    <td width="44"> </td>
    <td width="185"></td>
    <td width="27"></td>
    <td width="24"></td>
    <td width="32"></td>
    <td width="81"></td>
    <td width="201"></td>
    <td width="28"></td>
    <td width="33"></td>
  </tr>
  <tr> 
    <td width="44"></td>
    <td width="185"></td>
    <td width="27"></td>
    <td width="24"></td>
    <td width="32"></td>
    <td width="81"></td>
    <td width="201"></td>
    <td width="28"></td>
    <td width="33"></td>
    <td width="47"></td>
    <td width="213"></td>
    <td width="40"></td>
    <td width="19"></td>
  </tr>
   <tr> 
    <td colspan="15"></td>
  </tr>
  <tr bgcolor="#FFCC66"><td colspan="15"> </td>
  </tr>
  <tr> 
    <td colspan="15" height="22"><div align="center"><?php require("../../pub/pub1.php"); ?></div></td>
  </tr>
</table>
