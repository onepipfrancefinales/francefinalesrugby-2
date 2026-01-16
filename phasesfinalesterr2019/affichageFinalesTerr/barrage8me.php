<head>
<link rel="stylesheet" type="text/css" href="/phasesFinalesTerr/champTerr.css">
<link rel="stylesheet" type="text/css" href="../champTerr.css">
<link rel="stylesheet" type="text/css" href="../../phasesFinalesTerr/champTerr.css">
<link rel="stylesheet" type="text/css" href="../../phasesfinalesterr2019/qualification/qualification.css">
</head>


<?php

$bdcomiteClub = $comite.''."_clubs";
require ("../../connect/connexion6.php") ;
require ("../../phasesfinalesterr2019/fonctionspfterrESDL2019.php");
huitiemeEtBarrages2019($comite, $division, $annee, $bdd);
afficheLieux ($division, $annee, $comite, $bdd);
?>

<table width="100%" border="0" align="left" height="500" cellspacing="0">
  <tr> 
    <td width="112" height="13">&nbsp;</td>
    <td width="58" height="13">&nbsp;</td>
    <td width="16" height="13">&nbsp;</td>
    <td width="173" height="13">&nbsp;</td>
    <td width="43" height="13">&nbsp;</td>
    <td width="20" height="13">&nbsp;</td>
    <td width="182" height="13">&nbsp;</td>
    <td width="42" height="13">&nbsp;</td>
    <td width="18" height="13">&nbsp;</td>
    <td width="185" align="left" height="13">&nbsp;</td>
    <td width="36" height="13">&nbsp;</td>
    <td width="34" height="13">&nbsp;</td>
    <td height="13" width="168">&nbsp;</td>
    <td width="32" height="13">&nbsp;</td>
    <td width="63" height="13">&nbsp;</td>
    <td rowspan="35" height="298" bgcolor="#000000" width="6">&nbsp;</td>
    <td rowspan="35" height="298" width="159" valign="top"> 
      <?php  
	
	  	   //include("../../phasesfinalesterr2019/qualification/QHonneur.php");  
	require("../../pub/pub6.php"); 
		    ?>
    </td>
  </tr>
  <tr> 
    <td width="112" height="13"> 
      <div class="affichageTitre" > Barrages</div>
    </td>
    <td width="58" height="13">&nbsp;</td>
    <td width="16" height="13">&nbsp;</td>
    <td width="173" height="13"> 
      <div class="affichageTitre" >8me de finale</div>
    </td>
    <td width="43" height="13">&nbsp;</td>
    <td width="20" height="13">&nbsp;</td>
    <td width="182" height="13"> 
      <div class="affichageTitre" >Quarts de finale</div>
    </td>
    <td width="42" height="13">&nbsp;</td>
    <td width="18" height="13">&nbsp;</td>
    <td width="185" align="left" height="13"> 
      <div class="affichageTitre" >Demi finale</div>
    </td>
    <td width="36" height="13">&nbsp;</td>
    <td width="34" height="13">&nbsp;</td>
    <td height="13" width="168"> 
      <div class="affichageTitre" >Finale</div>
    </td>
    <td width="32" height="13">&nbsp;</td>
    <td width="63" height="13">&nbsp;</td>
  </tr>
  <tr> 
    <td width="112" height="13"> 
      <div align="center"></div>
    </td>
    <td width="58" height="13"> 
      <div align="center"><i></i></div>
    </td>
    <td width="16" height="13"> 
      <div align="center"><i></i></div>
    </td>
    <td width="173" height="13"> 
      <div align="center"><i><strong>
        <?php echo $D8000; ?>
        </strong></i></div>
    </td>
    <td width="43" height="13"> 
      <div align="center"><i></i></div>
    </td>
    <td width="20" height="13"> 
      <div align="center"><i></i></div>
    </td>
    <td width="182" height="13"> 
      <div align="center"><i><strong>
        <?php echo $D4000; ?>
        </strong></i></div>
    </td>
    <td width="42" height="13"> 
      <div align="center"><i></i></div>
    </td>
    <td width="18" height="13"> 
      <div align="center"><i></i></div>
    </td>
    <td width="185" align="left" height="13"> 
      <div align="center"><strong><font size="2" face="Arial, Helvetica, sans-serif"><b><i><strong>
        <?php echo $D2000; ?>
        </strong></i></b></font></strong></div>
    </td>
    <td width="36" height="13"> 
      <div align="center"><i></i></div>
    </td>
    <td width="34" height="13"> 
      <div align="center"><i></i></div>
    </td>
    <td height="13" width="168"> 
      <div align="center"><strong><font size="2" face="Arial, Helvetica, sans-serif"><b><i><strong>
        <?php echo $D1000; ?>
        </strong></i></b></font></strong></div>
    </td>
    <td width="32" height="13">&nbsp;</td>
    <td width="63" height="13">&nbsp;</td>
  </tr>
  <tr> 
    <td width="112" height="13">&nbsp;</td>
    <td width="58" height="13">&nbsp;</td>
    <td width="16" height="13">&nbsp;</td>
    <td width="173" height="13">&nbsp;</td>
    <td width="43" height="13">&nbsp;</td>
    <td width="20" height="13">&nbsp;</td>
    <td width="182" height="13">&nbsp;</td>
    <td width="42" height="13">&nbsp;</td>
    <td width="18" height="13">&nbsp;</td>
    <td width="185" align="left" height="13">&nbsp;</td>
    <td width="36" height="13">&nbsp;</td>
    <td width="34" height="13">&nbsp;</td>
    <td height="13" width="168">&nbsp;</td>
    <td width="32" height="13">&nbsp;</td>
    <td width="63" height="13">&nbsp;</td>
  </tr>
  <tr> 
    <td width="112" height="13"><b><i><font size="2" face="Arial, Helvetica, sans-serif">Terrain 
      du mieux classé</font></i></b></td>
    <td width="58" height="13"><font size="2" face="Arial, Helvetica, sans-serif"></font></td>
    <td width="16" height="13"><font face="Arial, Helvetica, sans-serif"></font></td>
    <td width="173" height="13"><b><i><font size="2" face="Arial, Helvetica, sans-serif">Terrain 
      du mieux classé</font></i></b></td>
    <td width="43" height="13">&nbsp;</td>
    <td width="20" height="13">&nbsp;</td>
    <td width="182" height="13">&nbsp;</td>
    <td width="42" height="13">&nbsp;</td>
    <td width="18" height="13">&nbsp;</td>
    <td width="185" align="left" height="13"> 
      <div align="center"></div>
    </td>
    <td width="36" height="13">&nbsp;</td>
    <td width="34" height="13">&nbsp;</td>
    <td height="13" width="168">&nbsp;</td>
    <td width="32" height="13">&nbsp;</td>
    <td width="63" height="13">&nbsp;</td>
  </tr>
  <tr> 
    <td width="112"> 
      <div class="affichageBarrage" > 
        <?php	echo $clubA1601; ?>
      </div>
    </td>
    <td width="58"> 
      <div class="scoreBarrage" > 
        <?php	echo $A1601; ?>
      </div>
    </td>
    <td width="16">&nbsp;</td>
    <td width="173"> 
      <div class="affichageEquipe" > 
        <?php	echo $clubA8001; ?>
      </div>
    </td>
    <td width="43"> 
      <div class="affichageGA" > 
        <?php	echo $A8001; ?>
      </div>
    </td>
    <td rowspan="6" width="20"><img src="../../images/accolade.png" width="8" height="127"></td>
    <td colspan="4"> 
      <div align="center"><b></b></div>
    </td>
    <td width="36">&nbsp;</td>
    <td width="34">&nbsp;</td>
    <td width="168">&nbsp;</td>
    <td width="32">&nbsp;</td>
    <td width="63">&nbsp;</td>
  </tr>
  <tr> 
    <td width="112" height="16"> 
      <div class="affichageBarrage" > 
        <?php	echo $clubA1602; ?>
      </div>
    </td>
    <td width="58" height="16"> 
      <div class="scoreBarrage" > 
        <?php	echo $A1602; ?>
      </div>
    </td>
    <td width="16" height="16"> </td>
    <td width="173" height="16"> 
      <div class="affichageEquipe" > 
        <?php	echo $clubA8002; ?>
      </div>
    </td>
    <td width="43" height="16"> 
      <div class="affichageGA" > 
        <?php	echo $A8002; ?>
      </div>
    </td>
    <td width="182" height="16"><strong><font size="2" face="Arial, Helvetica, sans-serif"><b><i><strong>
      <?php echo $L4001; ?>
      </strong></i></b></font></strong></td>
    <td width="42" height="16">&nbsp;</td>
    <td width="18" height="16">&nbsp;</td>
    <td width="185" height="16" align="left">&nbsp;</td>
    <td width="36" height="16">&nbsp;</td>
    <td width="34" height="16">&nbsp;</td>
    <td height="16" width="168">&nbsp;</td>
    <td width="32" height="16">&nbsp;</td>
    <td width="63" height="16">&nbsp;</td>
  </tr>
  <tr> 
    <td width="112" height="9"> </td>
    <td width="58" height="9"> </td>
    <td width="16" height="9">&nbsp;</td>
    <td width="173" height="9"> </td>
    <td width="43" height="9"> </td>
    <td width="182" height="9"> 
      <div class="affichageEquipe" > 
        <?php	echo $clubA4001; ?>
      </div>
    </td>
    <td width="42" height="9"> 
      <div class="affichageGA" > 
        <?php	echo $A4001; ?>
      </div>
    </td>
    <td rowspan="10" height="45" width="18"><img src="../../images/accolade.png" width="10" height="207"></td>
    <td width="185" align="left" height="9">&nbsp;</td>
    <td width="36" height="9">&nbsp;</td>
    <td width="34" height="9">&nbsp;</td>
    <td height="9" width="168">&nbsp;</td>
    <td width="32" height="9">&nbsp;</td>
    <td width="63" height="9">&nbsp;</td>
  </tr>
  <tr> 
    <td width="112"> </td>
    <td width="58"> </td>
    <td width="16">&nbsp;</td>
    <td width="173">&nbsp;</td>
    <td width="43">&nbsp;</td>
    <td width="182"> 
      <div class="affichageEquipe" > 
        <?php	echo $clubA4002; ?>
      </div>
    </td>
    <td width="42"> 
      <div class="affichageGA" > 
        <?php	echo $A4002; ?>
      </div>
    </td>
    <td width="185" align="left">&nbsp;</td>
    <td width="36">&nbsp;</td>
    <td width="34">&nbsp;</td>
    <td width="168">&nbsp;</td>
    <td width="32">&nbsp;</td>
    <td width="63">&nbsp;</td>
  </tr>
  <tr> 
    <td width="112" height="24"> </td>
    <td width="58" height="24"> </td>
    <td width="16" height="24">&nbsp;</td>
    <td width="173" height="24"> 
      <div class="affichageEquipe" > 
        <?php	echo $clubA8003; ?>
      </div>
    </td>
    <td width="43" height="24"> 
      <div class="affichageGA" > 
        <?php	echo $A8003; ?>
      </div>
    </td>
    <td width="182" height="24">&nbsp;</td>
    <td width="42" height="24">&nbsp;</td>
    <td width="185" align="left" height="24">&nbsp;</td>
    <td width="36" height="24">&nbsp;</td>
    <td width="34" height="24">&nbsp;</td>
    <td height="24" width="168">&nbsp;</td>
    <td width="32" height="24">&nbsp;</td>
    <td width="63" height="24">&nbsp;</td>
  </tr>
  <tr> 
    <td width="112" height="11"> </td>
    <td width="58" height="11"> </td>
    <td width="16" height="11">&nbsp;</td>
    <td width="173" height="11"> 
      <div class="affichageEquipe" > 
        <?php	echo $clubA8004; ?>
      </div>
    </td>
    <td width="43" height="11"> 
      <div class="affichageGA" > 
        <?php	echo $A8004; ?>
      </div>
    </td>
    <td width="182" height="11">&nbsp;</td>
    <td width="42" height="11">&nbsp;</td>
    <td width="185" height="11" align="left"><strong><font size="2" face="Arial, Helvetica, sans-serif"><b><i><strong>
      <?php echo $L2001; ?>
      </strong></i></b></font></strong></td>
    <td width="36" height="11">&nbsp;</td>
    <td width="34" height="11">&nbsp;</td>
    <td height="11" width="168">&nbsp;</td>
    <td width="32" height="11">&nbsp;</td>
    <td width="63" height="11">&nbsp;</td>
  </tr>
  <tr> 
    <td width="112"> </td>
    <td width="58"> </td>
    <td width="16">&nbsp;</td>
    <td width="173">&nbsp;</td>
    <td width="43">&nbsp;</td>
    <td width="20">&nbsp;</td>
    <td width="182">&nbsp;</td>
    <td width="42">&nbsp;</td>
    <td width="185" align="left"> 
      <div class="affichageEquipe" > 
        <?php	echo $clubA2001; ?>
      </div>
    </td>
    <td width="36"> 
      <div class="affichageGA" > 
        <?php	echo $A2001; ?>
      </div>
    </td>
    <td rowspan="18" width="34"><img src="../../images/accolade.png" width="10" height="383"></td>
    <td width="168">&nbsp;</td>
    <td width="32">&nbsp;</td>
    <td width="63">&nbsp;</td>
  </tr>
  <tr> 
    <td width="112"> </td>
    <td width="58"> </td>
    <td width="16">&nbsp;</td>
    <td width="173">&nbsp;</td>
    <td width="43">&nbsp;</td>
    <td width="20">&nbsp;</td>
    <td width="182">&nbsp;</td>
    <td width="42">&nbsp;</td>
    <td width="185"> 
      <div class="affichageEquipe" > 
        <?php	echo $clubA2002; ?>
      </div>
    </td>
    <td width="36"> 
      <div class="affichageGA" > 
        <?php	echo $A2002; ?>
      </div>
    </td>
    <td width="168">&nbsp;</td>
    <td width="32">&nbsp;</td>
    <td width="63">&nbsp;</td>
  </tr>
  <tr> 
    <td width="112" height="22"> 
      <div class="affichageBarrage" > 
        <?php	echo $clubA1603;?>
      </div>
    </td>
    <td width="58" height="22"> 
      <div class="scoreBarrage" > 
        <?php	echo $A1603; ?>
      </div>
    </td>
    <td width="16" height="22">&nbsp;</td>
    <td width="173" height="22"> 
      <div class="affichageEquipe" > 
        <?php	echo $clubA8005; ?>
      </div>
    </td>
    <td width="43" height="22"> 
      <div class="affichageGA" > 
        <?php	echo $A8005; ?>
      </div>
    </td>
    <td rowspan="6" width="20"><img src="../../images/accolade.png" width="8" height="127"></td>
    <td width="182" height="22">&nbsp;</td>
    <td width="42" height="22">&nbsp;</td>
    <td width="185" align="left" height="22">&nbsp;</td>
    <td width="36" height="22">&nbsp;</td>
    <td height="22" width="168">&nbsp;</td>
    <td width="32" height="22">&nbsp;</td>
    <td width="63" height="22">&nbsp;</td>
  </tr>
  <tr> 
    <td width="112" height="25"> 
      <div class="affichageBarrage" > 
        <?php	echo $clubA1604;?>
      </div>
    </td>
    <td width="58" height="25"> 
      <div class="scoreBarrage" > 
        <?php	echo $A1604; ?>
      </div>
    </td>
    <td width="16" height="25"> </td>
    <td width="173" height="25"> 
      <div class="affichageEquipe" > 
        <?php	echo $clubA8006; ?>
      </div>
    </td>
    <td width="43" height="25"> 
      <div class="affichageGA" > 
        <?php	echo $A8006; ?>
      </div>
    </td>
    <td width="182" height="25"><strong><font size="2" face="Arial, Helvetica, sans-serif"><b><i><strong>
      <?php echo $L4003; ?>
      </strong></i></b></font></strong></td>
    <td width="42" height="25">&nbsp;</td>
    <td width="185" height="25" align="left">&nbsp;</td>
    <td width="36" height="25">&nbsp;</td>
    <td height="25" width="168">&nbsp;</td>
    <td width="32" height="25">&nbsp;</td>
    <td width="63" height="25">&nbsp;</td>
  </tr>
  <tr> 
    <td width="112" height="22"> </td>
    <td width="58" height="22"> </td>
    <td width="16" height="22">&nbsp;</td>
    <td width="173" height="22"> </td>
    <td width="43" height="22"> </td>
    <td width="182" height="22"> 
      <div class="affichageEquipe" > 
        <?php	echo $clubA4003; ?>
      </div>
    </td>
    <td width="42" height="22"> 
      <div class="affichageGA" > 
        <?php	echo $A4003; ?>
      </div>
    </td>
    <td width="185" align="left" height="22">&nbsp;</td>
    <td width="36" height="22">&nbsp;</td>
    <td height="22" width="168">&nbsp;</td>
    <td width="32" height="22">&nbsp;</td>
    <td width="63" height="22">&nbsp;</td>
  </tr>
  <tr> 
    <td width="112"> </td>
    <td width="58"> </td>
    <td width="16">&nbsp;</td>
    <td width="173">&nbsp;</td>
    <td width="43">&nbsp;</td>
    <td width="182"> 
      <div class="affichageEquipe" > 
        <?php	echo $clubA4004; ?>
      </div>
    </td>
    <td width="42"> 
      <div class="affichageGA" > 
        <?php	echo $A4004; ?>
      </div>
    </td>
    <td width="185" align="left">&nbsp;</td>
    <td width="36">&nbsp;</td>
    <td width="168">&nbsp;</td>
    <td width="32">&nbsp;</td>
    <td width="63">&nbsp;</td>
  </tr>
  <tr> 
    <td width="112"> </td>
    <td width="58"> </td>
    <td width="16">&nbsp;</td>
    <td width="173"> 
      <div class="affichageEquipe" > 
        <?php	echo $clubA8007; ?>
      </div>
    </td>
    <td width="43"> 
      <div class="affichageGA" > 
        <?php	echo $A8007; ?>
      </div>
    </td>
    <td width="182">&nbsp;</td>
    <td width="42">&nbsp;</td>
    <td width="18">&nbsp;</td>
    <td width="185" align="left">&nbsp;</td>
    <td width="36">&nbsp;</td>
    <td width="168"><strong><font size="2" face="Arial, Helvetica, sans-serif"><b><i><strong>
      <?php echo $L1001; ?>
      </strong></i></b></font></strong></td>
    <td width="32">&nbsp;</td>
    <td width="63">&nbsp;</td>
  </tr>
  <tr> 
    <td width="112" height="11"> </td>
    <td width="58" height="11"> </td>
    <td width="16" height="11">&nbsp;</td>
    <td width="173" height="11"> 
      <div class="affichageEquipe" > 
        <?php	echo $clubA8008; ?>
      </div>
    </td>
    <td width="43" height="11"> 
      <div class="affichageGA" > 
        <?php	echo $A8008; ?>
      </div>
    </td>
    <td width="182" height="11">&nbsp;</td>
    <td width="42" height="11">&nbsp;</td>
    <td height="4" width="18"> 
      <div align="center"></div>
    </td>
    <td height="4" width="185">&nbsp;</td>
    <td width="36" height="11">&nbsp;</td>
    <td height="11" width="168"> 
      <div class="affichageEquipe" > 
        <?php	echo $clubA1001; ?>
      </div>
    </td>
    <td width="32" height="11"> 
      <div class="affichageGA" > 
        <?php	echo $A1001; ?>
      </div>
    </td>
    <td width="63" height="11">&nbsp;</td>
  </tr>
  <tr> 
    <td width="112" height="20"> </td>
    <td width="58" height="20"> </td>
    <td width="16" height="20">&nbsp;</td>
    <td width="173" height="20">&nbsp;</td>
    <td width="43" height="20">&nbsp;</td>
    <td width="20" height="20">&nbsp;</td>
    <td width="182" height="20">&nbsp;</td>
    <td width="42" height="20">&nbsp;</td>
    <td height="4" width="18">&nbsp;</td>
    <td height="4" width="185">&nbsp;</td>
    <td width="36" height="20">&nbsp;</td>
    <td height="20" width="168"> 
      <div class="affichageEquipe" > 
        <?php	echo $clubA1002; ?>
      </div>
    </td>
    <td width="32" height="20"> 
      <div class="affichageGA" > 
        <?php	echo $A1002; ?>
      </div>
    </td>
    <td width="63" height="20">&nbsp;</td>
  </tr>
  <tr> 
    <td width="112"> </td>
    <td width="58"> </td>
    <td width="16">&nbsp;</td>
    <td width="173">&nbsp;</td>
    <td width="43">&nbsp;</td>
    <td width="20">&nbsp;</td>
    <td width="182">&nbsp;</td>
    <td width="42">&nbsp;</td>
    <td height="8" width="18">&nbsp;</td>
    <td height="8" width="185">&nbsp;</td>
    <td width="36">&nbsp;</td>
    <td width="168">&nbsp;</td>
    <td width="32">&nbsp;</td>
    <td width="63">&nbsp;</td>
  </tr>
  <tr> 
    <td width="112"> 
      <div class="affichageBarrage" > 
        <?php	echo $clubA1605; ?>
      </div>
    </td>
    <td width="58"> 
      <div class="scoreBarrage" > 
        <?php	echo $A1605; ?>
      </div>
    </td>
    <td width="16">&nbsp;</td>
    <td width="173"> 
      <div class="affichageEquipe" > 
        <?php	echo $clubA8009; ?>
      </div>
    </td>
    <td width="43"> 
      <div class="affichageGA" > 
        <?php	echo $A8009; ?>
      </div>
    </td>
    <td rowspan="6" width="20"><img src="../../images/accolade.png" width="8" height="127"></td>
    <td width="182">&nbsp;</td>
    <td width="42">&nbsp;</td>
    <td height="15" width="18">&nbsp;</td>
    <td height="15" width="185">&nbsp;</td>
    <td width="36">&nbsp;</td>
    <td width="168" rowspan="3"> 
      <div align="center"><font size="5"><b><br>
        <strong><font size="2" face="Arial, Helvetica, sans-serif"><b><font color="#FF0000" size="5" face="Arial, Helvetica, sans-serif"><strong><font size="2" face="Arial, Helvetica, sans-serif"><b><i><strong><img src="<?php echo $champLogo;  ?>" ></strong></i></b></font></strong></font><i><strong> 
        </strong></i></b></font></strong> </b></font></div>
    </td>
    <td rowspan="3" width="32">&nbsp;</td>
    <td rowspan="3" width="63">&nbsp;</td>
  </tr>
  <tr> 
    <td width="112" height="25"> 
      <div class="affichageBarrage" > 
        <?php	echo $clubA1606; ?>
      </div>
    </td>
    <td width="58" height="25"> 
      <div class="scoreBarrage" > 
        <?php	echo $A1606; ?>
      </div>
    </td>
    <td width="16" height="25"> </td>
    <td width="173" height="25"> 
      <div class="affichageEquipe" > 
        <?php	echo $clubA8010; ?>
      </div>
    </td>
    <td width="43" height="25"> 
      <div class="affichageGA" > 
        <?php	echo $A8010; ?>
      </div>
    </td>
    <td width="182" height="25"><strong><font size="2" face="Arial, Helvetica, sans-serif"><b><i><strong>
      <?php echo $L4005; ?>
      </strong></i></b></font></strong></td>
    <td width="42" height="25">&nbsp;</td>
    <td width="18" height="25">&nbsp;</td>
    <td width="185" height="25" align="left">&nbsp;</td>
    <td width="36" height="25">&nbsp;</td>
  </tr>
  <tr> 
    <td width="112"> </td>
    <td width="58"> </td>
    <td width="16">&nbsp;</td>
    <td width="173"> </td>
    <td width="43"> </td>
    <td width="182"> 
      <div class="affichageEquipe" > 
        <?php	echo $clubA4005; ?>
      </div>
    </td>
    <td width="42"> 
      <div class="affichageGA" > 
        <?php	echo $A4005; ?>
      </div>
    </td>
    <td rowspan="10" width="18"><img src="../../images/accolade.png" width="10" height="207"></td>
    <td width="185" align="left">&nbsp;</td>
    <td width="36">&nbsp;</td>
  </tr>
  <tr> 
    <td width="112" height="17"> </td>
    <td width="58" height="17"> </td>
    <td width="16" height="17">&nbsp;</td>
    <td width="173" height="17">&nbsp;</td>
    <td width="43" height="17">&nbsp;</td>
    <td width="182" height="17"> 
      <div class="affichageEquipe" > 
        <?php	echo $clubA4006; ?>
      </div>
    </td>
    <td width="42" height="17"> 
      <div class="affichageGA" > 
        <?php	echo $A4006; ?>
      </div>
    </td>
    <td width="185" align="left" height="17">&nbsp; </td>
    <td width="36" height="17">&nbsp;</td>
    <td height="50" rowspan="4" width="168"> 
      <div align="center"><b><font color="#FF0000" size="5" face="Arial, Helvetica, sans-serif"><strong><font size="2" face="Arial, Helvetica, sans-serif"><b><i><strong> 
        </strong></i></b></font></strong> </font><font size="5"><b><strong><font size="5" face="Arial, Helvetica, sans-serif"><b><i><strong> 
        <?php echo $champion; ?>
        </strong></i></b></font></strong></b></font><font color="#FF0000" size="5" face="Arial, Helvetica, sans-serif"> 
        </font></b></div>
    </td>
    <td height="50" rowspan="4" width="32">&nbsp;</td>
    <td height="50" rowspan="4" width="63">&nbsp;</td>
  </tr>
  <tr> 
    <td width="112"> </td>
    <td width="58"> </td>
    <td width="16">&nbsp;</td>
    <td width="173"> 
      <div class="affichageEquipe" > 
        <?php	echo $clubA8011; ?>
      </div>
    </td>
    <td width="43"> 
      <div class="affichageGA" > 
        <?php	echo $A8011; ?>
      </div>
    </td>
    <td width="182">&nbsp;</td>
    <td width="42">&nbsp;</td>
    <td width="185" align="left">&nbsp;</td>
    <td width="36">&nbsp;</td>
  </tr>
  <tr> 
    <td width="112" height="11"> </td>
    <td width="58" height="11"> </td>
    <td width="16" height="11">&nbsp;</td>
    <td width="173" height="11"> 
      <div class="affichageEquipe" > 
        <?php	echo $clubA8012; ?>
      </div>
    </td>
    <td width="43" height="11"> 
      <div class="affichageGA" > 
        <?php	echo $A8012; ?>
      </div>
    </td>
    <td width="182" height="11">&nbsp;</td>
    <td width="42" height="11">&nbsp;</td>
    <td width="185" height="11" align="left"><strong><font size="2" face="Arial, Helvetica, sans-serif"><b><i><strong>
      <?php echo $L2003; ?>
      </strong></i></b></font></strong></td>
    <td width="36" height="11">&nbsp;</td>
  </tr>
  <tr> 
    <td width="112"> </td>
    <td width="58"> </td>
    <td width="16">&nbsp;</td>
    <td width="173">&nbsp;</td>
    <td width="43">&nbsp;</td>
    <td width="20">&nbsp;</td>
    <td width="182">&nbsp;</td>
    <td width="42">&nbsp;</td>
    <td width="185" align="left"> 
      <div class="affichageEquipe" > 
        <?php	echo $clubA2003; ?>
      </div>
    </td>
    <td width="36"> 
      <div class="affichageGA" > 
        <?php	echo $A2003; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="112"> </td>
    <td width="58"> </td>
    <td width="16">&nbsp;</td>
    <td width="173">&nbsp;</td>
    <td width="43">&nbsp;</td>
    <td width="20">&nbsp;</td>
    <td width="182">&nbsp;</td>
    <td width="42">&nbsp;</td>
    <td width="185" align="left"> 
      <div class="affichageEquipe" > 
        <?php	echo $clubA2004; ?>
      </div>
    </td>
    <td width="36"> 
      <div class="affichageGA" > 
        <?php	echo $A2004; ?>
      </div>
    </td>
    <td width="168">&nbsp;</td>
    <td width="32">&nbsp;</td>
    <td width="63">&nbsp;</td>
  </tr>
  <tr> 
    <td width="112"> 
      <div class="affichageBarrage" > 
        <?php	echo $clubA1607; ?>
      </div>
    </td>
    <td width="58"> 
      <div class="scoreBarrage" > 
        <?php	echo $A1607; ?>
      </div>
    </td>
    <td width="16">&nbsp;</td>
    <td width="173"> 
      <div class="affichageEquipe" > 
        <?php	echo $clubA8013; ?>
      </div>
    </td>
    <td width="43"> 
      <div class="affichageGA" > 
        <?php	echo $A8013; ?>
      </div>
    </td>
    <td rowspan="6" width="20"><img src="../../images/accolade.png" width="8" height="127"></td>
    <td width="182">&nbsp;</td>
    <td width="42">&nbsp;</td>
    <td width="185" align="left">&nbsp;</td>
    <td width="36">&nbsp;</td>
    <td width="34">&nbsp;</td>
    <td width="168">&nbsp;</td>
    <td width="32">&nbsp;</td>
    <td width="63">&nbsp;</td>
  </tr>
  <tr> 
    <td width="112" height="25"> 
      <div class="affichageBarrage" > 
        <?php	echo $clubA1608; ?>
      </div>
    </td>
    <td width="58" height="25"> 
      <div class="scoreBarrage" > 
        <?php	echo $A1608; ?>
      </div>
    </td>
    <td width="16" height="25"> </td>
    <td width="173" height="25"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA8014; ?>
      </div>
    </td>
    <td width="43" height="25"> 
      <div class="affichageGA" > 
        <?php	echo $A8014; ?>
      </div>
    </td>
    <td width="182" height="25"><strong><font size="2" face="Arial, Helvetica, sans-serif"><b><i><strong>
      <?php echo $L4007; ?>
      </strong></i></b></font></strong></td>
    <td width="42" height="25">&nbsp;</td>
    <td width="185" height="25" align="left">&nbsp;</td>
    <td width="36" height="25">&nbsp;</td>
    <td width="34" height="25">&nbsp;</td>
    <td height="25" width="168">&nbsp;</td>
    <td width="32" height="25">&nbsp;</td>
    <td width="63" height="25">&nbsp;</td>
  </tr>
  <tr> 
    <td width="112"> </td>
    <td width="58"> </td>
    <td width="16">&nbsp;</td>
    <td width="173"> </td>
    <td width="43"> </td>
    <td width="182"> 
      <div class="affichageEquipe" > 
        <?php	echo $clubA4007; ?>
      </div>
    </td>
    <td width="42"> 
      <div class="affichageGA" > 
        <?php	echo $A4007; ?>
      </div>
    </td>
    <td width="185" align="left">&nbsp;</td>
    <td width="36">&nbsp;</td>
    <td width="34">&nbsp;</td>
    <td width="168">&nbsp;</td>
    <td width="32">&nbsp;</td>
    <td width="63">&nbsp;</td>
  </tr>
  <tr> 
    <td width="112">&nbsp;</td>
    <td width="58">&nbsp;</td>
    <td width="16">&nbsp;</td>
    <td width="173">&nbsp;</td>
    <td width="43">&nbsp;</td>
    <td width="182"> 
      <div class="affichageEquipe" > 
        <?php	echo $clubA4008; ?>
      </div>
    </td>
    <td width="42"> 
      <div class="affichageGA" > 
        <?php	echo $A4008; ?>
      </div>
    </td>
    <td width="185" align="left">&nbsp;</td>
    <td width="36">&nbsp; </td>
    <td width="34">&nbsp;</td>
    <td width="168">&nbsp;</td>
    <td width="32">&nbsp;</td>
    <td width="63">&nbsp;</td>
  </tr>
  <tr> 
    <td width="112"> </td>
    <td width="58"> </td>
    <td width="16">&nbsp;</td>
    <td width="173"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA8015;	 ?>
      </div>
    </td>
    <td width="43"> 
      <div class="affichageGA" > 
        <?php	echo $A8015; ?>
      </div>
    </td>
    <td width="182">&nbsp;</td>
    <td width="42">&nbsp;</td>
    <td width="18">&nbsp;</td>
    <td width="185" align="left">&nbsp;</td>
    <td width="36">&nbsp;</td>
    <td width="34">&nbsp;</td>
    <td width="168">&nbsp;</td>
    <td width="32">&nbsp;</td>
    <td width="63">&nbsp;</td>
  </tr>
  <tr> 
    <td width="112" height="11"> </td>
    <td width="58" height="11"> </td>
    <td width="16" height="11">&nbsp;</td>
    <td width="173" height="11"> 
      <div class="affichageEquipe" > 
        <?php	echo $clubA8016; ?>
      </div>
    </td>
    <td width="43" height="11"> 
      <div class="affichageGA" > 
        <?php	echo $A8016; ?>
      </div>
    </td>
    <td width="182" height="11">&nbsp;</td>
    <td width="42" height="11">&nbsp;</td>
    <td width="18" height="11">&nbsp;</td>
    <td width="185" height="11" align="left">&nbsp;</td>
    <td width="36" height="11">&nbsp;</td>
    <td width="34" height="11">&nbsp;</td>
    <td height="11" width="168">&nbsp;</td>
    <td width="32" height="11">&nbsp;</td>
    <td width="63" height="11">&nbsp;</td>
  </tr>
  <tr> 
    <td width="112"> </td>
    <td width="58"> </td>
    <td width="16">&nbsp;</td>
    <td width="173">&nbsp;</td>
    <td width="43">&nbsp;</td>
    <td width="20">&nbsp;</td>
    <td width="182">&nbsp;</td>
    <td width="42">&nbsp;</td>
    <td width="18">&nbsp;</td>
    <td width="185" align="left">&nbsp;</td>
    <td width="36">&nbsp;</td>
    <td width="34">&nbsp;</td>
    <td width="168">&nbsp;</td>
    <td width="32">&nbsp;</td>
    <td width="63">&nbsp;</td>
    <td width="6">&nbsp;</td>
    <td width="159">&nbsp;</td>
  </tr>
  <tr> 
    <td width="112">&nbsp;</td>
    <td width="58">&nbsp;</td>
    <td width="16">&nbsp;</td>
    <td width="173">&nbsp;</td>
    <td width="43">&nbsp;</td>
    <td width="20">&nbsp;</td>
    <td width="182">&nbsp;</td>
    <td width="42">&nbsp;</td>
    <td width="18">&nbsp;</td>
    <td width="185">&nbsp;</td>
    <td width="36">&nbsp;</td>
    <td width="34">&nbsp;</td>
    <td width="168">&nbsp;</td>
    <td width="32">&nbsp;</td>
    <td width="63">&nbsp;</td>
    <td width="6">&nbsp;</td>
    <td width="159">&nbsp;</td>
  </tr>
  <tr> 
    <td bgcolor="#FFCC66" colspan="17"> 
      <div align="center"></div>
    </td>
  </tr>
  <tr> 
    <td colspan="17"> 
      <div align="center"> 
        <?php require("../../pub/pub1.php"); ?>
      </div>
    </td>
  </tr>
</table>
 ------------------------------------------
 -----------------------------------------
<?php //require 'tabQualifFrance.php';?>
