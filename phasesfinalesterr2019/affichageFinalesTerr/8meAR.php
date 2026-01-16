<?php
$bdcomiteClub = $comite.''."_clubs";

require ("../../connect/connexion6.php") ;
require ("../../phasesfinalesterr2019/fonctionspfterrESDL2019.php");
huitiemeAR2019($comite, $division, $annee, $bdd);
traitementScores (1601, 1632, $bdd);
traitementScores (8001, 8016, $bdd);
traitementScores (4001, 4008, $bdd);
traitementScores (2001, 2004, $bdd);
traitementScores (1001, 1002, $bdd);
afficheLieux ($division, $annee, $comite, $bdd);
champion ($comite, $clubA1001, $clubA1002, $A1001, $A1002, $bdd);
afficheDivisionChampionLigue($division,$annee);
?><head>

<link rel="stylesheet" type="text/css" href="../../phasesfinalesterr2019/qualification/qualification.css">
<link rel="stylesheet" type="text/css" href="../champTerr.css">

</head>



<table  border="0" align="left" height="500" cellspacing="0" width="91">
  <tr> 
    <td width="200"></td>
    <td width="38"></td>
    <td width="40"></td>
    <td width="40"></td>
    <td width="200"></td>
    <td width="119"></td>
    <td width="26"></td>
    <td width="200"></td>
    <td width="38"></td>
    <td width="84"></td>
    <td width="200"></td>
    <td width="38"></td>
    <td width="26"></td>
    <td rowspan="26" bgcolor="#000000"></td>
    <td height="166" valign="top" rowspan="28"> 

    </td>
  </tr>
  <tr> 
    <td width="200"><div class="affichageTitre" >8me de finale AR </div></td>
    <td width="38"></td>
    <td width="40"></td>
    <td width="40"></td>
    <td width="200"><div class="affichageTitre" >Quarts de finale</div></td>
    <td width="119"></td>
    <td width="26"></td>
    <td width="200"><div class="affichageTitre" >Demi finale</div></td>
    <td width="38"></td>
    <td width="84"></td>
    <td width="200"><div class="affichageTitre" >Finale</div></td>
    <td width="38"></td>
    <td width="26"></td>
  </tr>
  <tr> 
    <td width="200" height="13">&nbsp;</td>
    <td width="38" height="18">&nbsp;</td>
    <td width="40" height="18">&nbsp;</td>
    <td width="40"></td>
    <td width="200"></td>
    <td width="119"></td>
    <td width="26"></td>
    <td width="200"></td>
    <td width="38"></td>
    <td width="84"></td>
    <td width="200"></td>
    <td width="38"></td>
    <td width="26"></td>
  </tr>
  <tr> 
    <td width="200" height="13">&nbsp;</td>
    <td width="38" height="18"><div class="affichagePts" >Pts</div></td>
    <td width="40" height="18"><div class="affichageGA" > GA</div></td>
    <td width="40"></td>
    <td width="200"></td>
    <td width="119"></td>
    <td width="26"></td>
    <td width="200"></td>
    <td width="38"></td>
    <td width="84"></td>
    <td width="200"></td>
    <td width="38"></td>
    <td width="26"></td>
  </tr>
  <tr> 
    <td width="200" height="13"><div class="affichageEquipe"><?php echo $clubA8001; ?></div></td>
    <td width="38" height="18"><div class="affichagePts" ><?php echo $Pts8001; ?></div></td>
    <td width="40" height="18"><div class="affichageGA" ><?php echo $GA1601; ?></div></td>
    <td width="40" height="18">&nbsp;</td>
    <td width="200" height="18"> <font size="2" face="Arial, Helvetica, sans-serif"><b><i><strong><?php	 echo $L4001; ?></strong></i></b></font> </td>
    <td width="119" height="18">&nbsp;</td>
    <td width="26" height="18">&nbsp;</td>
    <td width="200" height="18" align="left">&nbsp;</td>
    <td width="38" height="18">&nbsp;</td>
    <td width="84" height="18">&nbsp;</td>
    <td width="200" height="18">&nbsp;</td>
    <td width="38" height="18">&nbsp;</td>
    <td width="26" height="18">&nbsp;</td>
  </tr>
  <tr> 
    <td width="200"><div class="affichageEquipe" ><?php echo $clubA8002; ?></div></td>
    <td width="38"><div class="affichagePts" ><?php	 echo $Pts8002; ?></div></td>
    <td width="40"><div class="affichageGA" ><?php echo $GA1602; ?></div></td>
    <td width="40">&nbsp;</td>
    <td width="200"><div class="affichageEquipe" ><?php echo $clubA4001; ?></div></td>
    <td width="119"><div class="affichageGA" ><?php echo $A4001; ?></div></td>
    <td width="26"></td>
    <td width="200"></td>
    <td width="38"></td>
    <td width="84"></td>
    <td width="200"></td>
    <td width="38"></td>
    <td width="26"></td>
  </tr>
  <tr> 
    <td width="200"></td>
    <td width="38"></td>
    <td width="40"></td>
    <td width="40"></td>
    <td width="200" height="15"><div class="affichageEquipe" ><?php echo $clubA4002;  ?></div></td>
    <td width="119" height="15"><div class="affichageGA" ><?php echo $A4002;  ?></div></td>
    <td width="26"></td>
    <td width="200"></td>
    <td width="38"></td>
    <td width="84"></td>
    <td width="200"></td>
    <td width="38"></td>
    <td width="26"></td>
  </tr>
  <tr> 
    <td width="200"><div class="affichageEquipe" ><?php echo $clubA8003; ?></div></td>
    <td width="38"><div class="affichagePts" ><?php echo $Pts8003; ?></div></td>
    <td width="40"><div class="affichageGA" ><?php echo $GA1603; ?></div></td>
    <td width="40"></td>
    <td width="200"></td>
    <td width="119"></td>
    <td width="26"></td>
    <td width="200" align="left"><font size="2" face="Arial, Helvetica, sans-serif"><b><i><strong><?php echo $L2001; ?></strong></i></b></font> </td>
    <td width="38"></td>
    <td width="84"></td>
    <td width="200"></td>
    <td width="38"></td>
    <td width="26">&nbsp;</td>
  </tr>
  <tr> 
    <td width="200"> 
      <div class="affichageEquipe" ><?php echo $clubA8004; ?></div></td>
    <td width="38"><div class="affichagePts" ><?php echo $Pts8004; ?></div></td>
    <td width="40"><div class="affichageGA" ><?php echo $GA1604; ?></div></td>
    <td width="40">&nbsp;</td>
    <td width="200"></td>
    <td width="119">&nbsp;</td>
    <td width="26">&nbsp;</td>
    <td width="200"><div class="affichageEquipe" ><?php echo $clubA2001; ?></div></td>
    <td width="38"><div class="affichageGA" ><?php echo $A2001; ?></div></td>
    <td width="84"></td>
    <td width="200"></td>
    <td width="38"></td>
    <td width="26"></td>
  </tr>
  <tr> 
    <td width="200"></td>
    <td width="38"></td>
    <td width="40"></td>
    <td width="40"></td>
    <td width="200" height="22">&nbsp;</td>
    <td width="119" height="22">&nbsp;</td>
    <td width="26" height="22">&nbsp;</td>
    <td width="200" align="left" height="22"><div class="affichageEquipe" ><?php echo $clubA2002; ?></div></td>
    <td width="38" height="22"><div class="affichageGA" ><?php echo $A2002; ?></div></td>
    <td width="84"></td>
    <td width="200"></td>
    <td width="38"></td>
    <td width="26"></td>
  </tr>
  <tr> 
    <td width="200" height="22"><div class="affichageEquipe" ><?php echo $clubA8005; ?></div></td>
    <td width="38" height="22"><div class="affichagePts" ><?php echo $Pts8005; ?></div></td>
    <td width="40" height="22"><div class="affichageGA" ><?php echo $GA1605; ?></div></td>
    <td width="40" height="22">&nbsp;</td>
    <td width="200" height="22"><font size="2" face="Arial, Helvetica, sans-serif"><b><i><strong><?php	 echo $L4003; ?></strong></i></b></font></td>
    <td width="119"></td>
    <td width="26"></td>
    <td width="200"></td>
    <td width="38"></td>
    <td width="84"></td>
    <td width="200"></td>
    <td width="38"></td>
    <td width="26"></td>
  </tr>
  <tr> 
    <td width="200" height="22"><div class="affichageEquipe" ><?php echo $clubA8006; ?></div></td>
    <td width="38" height="22"><div class="affichagePts" ><?php echo $Pts8006; ?></div></td>
    <td width="40" height="22"><div class="affichageGA" ><?php echo $GA1606; ?></div></td>
    <td width="40" height="22">&nbsp;</td>
    <td width="200" height="22"><div class="affichageEquipe" ><?php echo $clubA4003;  ?></div></td>
    <td width="119" height="22"><div class="affichageGA" ><?php echo $A4003;  ?></div></td>
    <td width="26"></td>
    <td width="200"></td>
    <td width="38"></td>
    <td width="84"></td>
    <td width="200"></td>
    <td width="38"></td>
    <td width="26"></td>
  </tr>
  <tr> 
    <td width="200"></td>
    <td width="38"></td>
    <td width="40"></td>
    <td width="40"></td>
    <td width="200"> 
      <div class="affichageEquipe" > 
        <?php 	echo $clubA4004;  ?>
      </div>
    </td>
    <td width="119"> 
      <div class="affichageGA" > 
        <?php 	echo $A4004;  ?>
      </div>
    </td>
    <td width="26"></td>
    <td width="200"></td>
    <td width="38"></td>
    <td width="84"></td>
    <td width="200"><font size="2" face="Arial, Helvetica, sans-serif"><b><i><strong> 
      <?php // echo $finale; ?>
      </strong></i></b></font> </td>
    <td width="38"> </td>
    <td width="26">&nbsp;</td>
  </tr>
  <tr> 
    <td width="200"><div class="affichageEquipe" ><?php echo $clubA8007; ?></div></td>
    <td width="38"><div class="affichagePts" ><?php echo $Pts8007; ?></div></td>
    <td width="40"><div class="affichageGA" ><?php echo $GA1607; ?></div></td>
    <td width="40"></td>
    <td width="200"></td>
    <td width="119"></td>
    <td width="26"></td>
    <td width="200"></td>
    <td width="38"></td>
    <td width="84"></td>
    <td width="200"><div class="affichageEquipe" ><?php echo $clubA1001;?></div></td>
    <td width="38"><div class="affichageGA" ><?php echo $A1001;?></div></td>
    <td width="26"></td>
  </tr>
  <tr> 
    <td width="200"><div class="affichageEquipe" ><?php echo $clubA8008; ?> </td>
    <td width="38"><div class="affichagePts" ><?php echo $Pts8008; ?></div></td>
    <td width="40"><div class="affichageGA" ><?php echo $GA1608; ?></div></td>
    <td width="40"></td>
    <td width="200"></td>
    <td width="119"></td>
    <td width="26"></td>
    <td width="200"></td>
    <td width="38"></td>
    <td width="84"></td>
    <td width="200"><div class="affichageEquipe" ><?php echo $clubA1002;  ?></div></td>
    <td width="38"><div class="affichageGA" ><?php echo $A1002;  ?></div></td>
    <td width="26"></td>
  </tr>
  <tr> 
    <td width="200"></td>
    <td width="38"></td>
    <td width="40"></td>
    <td width="40"></td>
    <td width="200"></td>
    <td width="119"></td>
    <td width="26"></td>
    <td width="200"></td>
    <td width="38"></td>
    <td width="84"></td>
    <td width="200"></td>
    <td width="38"></td>
    <td width="26"></td>
  </tr>
  <tr valign="top"> 
    <td width="200">&nbsp;</td>
    <td width="38">&nbsp;</td>
    <td width="40">&nbsp;</td>
    <td width="40"></td>
    <td width="200"></td>
    <td width="119"></td>
    <td width="26"></td>
    <td width="200"></td>
    <td width="38"></td>
    <td width="84"></td>
    <td width="200"></td>
    <td width="38"></td>
    <td width="26"></td>
  </tr>
  <tr valign="top"> 
    <td width="200"><div class="affichageEquipe" ><?php echo $clubA8009; ?></div></td>
    <td width="38"><div class="affichagePts" ><?php echo $Pts8009; ?> </div></td>
    <td width="40"><div class="affichageGA" ><?php echo $GA1609; ?> </div></td>
    <td width="40"></td>
    <td width="200"></td>
    <td width="119"></td>
    <td width="26"></td>
    <td width="200"></td>
    <td width="38"></td>
    <td width="84"></td>
    <td colspan="2"><font face="Arial, Helvetica, sans-serif" size="3"><b>Champion <i><strong><?php echo $division; ?></strong></i></b></font></td>
    <td width="26"></td>
  </tr>
  <tr valign="top"> 
    <td width="200"><div class="affichageEquipe" ><?php echo $clubA8010; ?></div></td>
    <td width="38"><div class="affichagePts" ><?php echo $Pts8010; ?></div></td>
    <td width="40"><div class="affichageGA" ><?php echo $GA1610; ?></div></td>
    <td width="40"></td>
    <td width="200" height="6"><font size="2" face="Arial, Helvetica, sans-serif"><b><i><strong><?php echo $L4005; ?></strong></i></b><strong> </strong> </font></td>
    <td width="119"></td>
    <td width="26"></td>
    <td width="200"></td>
    <td width="38"></td>
    <td width="84"></td>
    <td colspan="2"></td>
    <td width="26"></td>
  </tr>
  <tr> 
    <td width="200"></td>
    <td width="38"></td>
    <td width="40"></td>
    <td width="40"></td>
    <td width="200"><div class="affichageEquipe" ><?php echo $clubA4005;?></td>
    <td width="119"><div class="affichageGA" ><?php echo $A4005;  ?></td>
    <td width="26"></td>
    <td width="200"></td>
    <td width="38"></td>
    <td width="84"></td>
    <td colspan="2" rowspan="4"><div align="center"><img src="<?php echo $champLogo;  ?>" border="0" height="100" width="100"></div></td>
    <td width="26"></td>
  </tr>
  <tr> 
    <td width="200"><div class="affichageEquipe" ><?php echo $clubA8011; ?></div></td>
    <td width="38"><div class="affichagePts" ><?php echo $Pts8011; ?></div></td>
    <td width="40"><div class="affichageGA" ><?php echo $GA1611; ?></div></td>
    <td width="40" height="20">&nbsp;</td>
    <td width="200"><div class="affichageEquipe" ><?php echo $clubA4006; ?><div></td>
    <td width="119"><div class="affichageGA" ><?php echo $A4006; ?></div></td>
    <td width="26"></td>
    <td width="200"></td>
    <td width="38"></td>
    <td width="84"></td>
    <td width="26"></td>
  </tr>
  <tr> 
    <td width="200"><div class="affichageEquipe"><?php echo $clubA8012; ?></div></td>
    <td width="38"><div class="affichagePts"><?php echo $Pts8012; ?></div></td>
    <td width="40"><div class="affichageGA"><?php echo $GA1612; ?></div></td>
    <td width="40"></td>
    <td width="200"></td>
    <td width="119"></td>
    <td width="26"></td>
    <td width="200" align="left" height="18"><font size="2" face="Arial, Helvetica, sans-serif"><b><i><strong><?php echo $L2003; ?></strong></i></b></font></td>
    <td width="38" height="18">&nbsp;</td>
    <td height="18" width="84"><div align="center"> </div></td>
    <td width="26"></td>
  </tr>
  <tr> 
    <td width="200"></td>
    <td width="38"></td>
    <td width="40"></td>
    <td width="40"></td>
    <td width="200"></td>
    <td width="119"></td>
    <td width="26"></td>
    <td width="200"><div class="affichageEquipe" ><?php echo $clubA2003; ?></div></td>
    <td width="38"><div class="affichageGA" ><?php echo $A2003; ?></div> </td>
    <td width="84"></td>
    <td width="26"></td>
  </tr>
  <tr> 
    <td width="200"><div class="affichageEquipe" ><?php echo $clubA8013; ?></div></td>
    <td width="38"><div class="affichagePts" ><?php echo $Pts8013; ?></div></td>
    <td width="40"><div class="affichageGA" ><?php echo $GA1613; ?></div></td>
    <td width="40"></td>
    <td width="200"></td>
    <td width="119"></td>
    <td width="26"></td>
    <td width="200"><div class="affichageEquipe" ><?php echo $clubA2004; ?></div></td>
    <td width="38"><div class="affichageGA" ><?php echo $A2004; ?></div></td>
    <td width="84"></td>
    <td colspan="2" rowspan="2"> <div align="center"><b><font color="#000000" size="5" face="Arial, Helvetica, sans-serif"><?php // echo $champion;   ?></font></b></div></td>
    <td width="26"></td>
  </tr>
  <tr> 
    <td width="200"><div class="affichageEquipe" ><?php echo $clubA8014; ?></div></td>
    <td width="38"><div class="affichagePts" ><?php echo $Pts8014; ?></div></td>
    <td width="40"><div class="affichageGA" ><?php echo $GA1614; ?></div></td>
    <td width="40"> 
    <td width="200"> <strong><font size="2" face="Arial, Helvetica, sans-serif"><b><i><strong><?php echo $L4007; ?></strong></i></b></font> </strong></td>
    <td width="119"></td>
    <td width="26"></td>
    <td width="200"></td>
    <td width="38"></td>
    <td width="84"></td>
    <td width="26"></td>
  </tr>
  <tr> 
    <td width="200"></td>
    <td width="38"></td>
    <td width="40"></td>
    <td width="40"></td>
    <td width="200"><div class="affichageEquipe" ><?php echo $clubA4007; ?></div></td>
    <td width="119"><div class="affichageGA" ><?php echo $A4007;  ?></div> </td>
    <td width="26"></td>
    <td width="200"></td>
    <td width="38"></td>
    <td width="84"></td>
    <td width="200"></td>
    <td width="38"></td>
    <td width="26"></td>
  </tr>
  <tr> 
    <td width="200"><div class="affichageEquipe" ><?php echo $clubA8015; ?></div></td>
    <td width="38"><div class="affichagePts" ><?php echo $Pts8015; ?></div></td>
    <td width="40"><div class="affichageGA" ><?php echo $GA1615; ?></div></td>
    <td width="40" height="20">&nbsp;</td>
    <td width="200"><div class="affichageEquipe" ><?php echo $clubA4008; ?></div></td>
    <td width="119"><div class="affichageGA" ><?php echo $A4008; ?></div></td>
    <td width="26"></td>
    <td width="200"></td>
    <td width="38"></td>
    <td width="84"></td>
    <td width="200"></td>
    <td width="38"></td>
    <td width="26"></td>
    <td width="8"></td>
  </tr>
  <tr> 
    <td width="200"><div class="affichageEquipe" ><?php echo $clubA8016; ?></div></td>
    <td width="38"><div class="affichagePts" ><?php echo $Pts8016; ?></div></td>
    <td width="40"><div class="affichageGA" ><?php echo $GA1616; ?></div></td>
    <td width="40"></td>
    <td width="200"></td>
    <td width="119"></td>
    <td width="26"></td>
    <td width="200"></td>
    <td width="38"></td>
    <td width="84"></td>
    <td width="200"></td>
    <td width="38"></td>
    <td width="26"></td>
    <td width="8"></td>
  </tr>
  <tr> 
    <td colspan="15">&nbsp;</td>
  </tr>
  <tr bgcolor="#FFCC66"><td colspan="15">&nbsp; </td>
  </tr>
  <tr> 
    <td colspan="15" height="22"><div align="center"><?php require("../../pub/pub1.php"); ?></div></td>
  </tr>
</table>
