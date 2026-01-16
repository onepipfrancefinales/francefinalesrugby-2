<?php
$bdcomiteClub = $comite.''."_clubs";
require ("../../connect/connexion6.php") ;
require ("../../phasesfinalesterr2019/fonctionspfterrESDL2019.php");
seizieme2019($comite, $division, $annee, $bdd);
afficheLieux ($division, $annee, $comite, $bdd);
traitementScores (1601,1632, $bdd);
traitementScores (8001,8016, $bdd);
traitementScores (4001,4008, $bdd);
traitementScores (2001,2004, $bdd);
champion ($comite, $clubA1001, $clubA1002, $A1001, $A1002, $bdd);
//afficheDivisionChampion($division);
afficheDivisionChampionLigue($division,$annee);
?><head>
<link rel="stylesheet" type="text/css" href="../../phasesfinalesterr2019/qualification/qualification.css">
<link rel="stylesheet" type="text/css" href="../champTerr.css">

</head>

<table width="1500" border="0" height="500" cellspacing="0">
  <tr> 
    <td height="25" colspan="16"> </td>
  </tr>
  <tr> 
    <td colspan="4"> 
      <div align="center"><b><font face="Arial, Helvetica, sans-serif" color="#000000" size="2"> 
        <?php //if ($division==270)echo "Oppositions g&eacute;ographiques pour les 16me et 8me de finale";?>
        </font></b></div>
    </td>
    <td width="43"></td>
    <td width="22"></td>
    <td width="207"></td>
    <td width="32"></td>
    <td width="19"></td>
    <td width="190"></td>
    <td width="46"></td>
    <td width="18"></td>
    <td width="216"></td>
    <td width="23"></td>
    <td width="32"></td>
    <td rowspan="37" height="271" valign="top"><?php require("../../pub/pub6.php");?></td>
  </tr>
  <tr> 
    <td width="166"><div class="affichageTitre">16me de finale</div></td>
    <td width="47"></td>
    <td width="58"></td>
    <td width="202"><div class="affichageTitre">8me de finale</div></td>
    <td width="43"></td>
    <td width="22"></td>
    <td width="207"><div class="affichageTitre">Quarts de finale</div></td>
    <td width="32"></td>
    <td width="19"></td>
    <td width="190"><div class="affichageTitre">Demi finale</div></td>
    <td width="46"></td>
    <td width="18"></td>
    <td width="216"><div class="affichageTitre">Finale</div></td>
    <td width="23"></td>
    <td width="32"></td>
  </tr>
  <tr> 
    <td width="166"><div align="center"><font size="2" face="Arial, Helvetica, sans-serif"><b><i><strong><?php  echo $D1600;?></strong></i></b></font></div></td>
    <td width="47"></td>
    <td width="58"></td>
    <td width="202"><div align="center"><font size="2" face="Arial, Helvetica, sans-serif"><b><i><strong><?php  echo $D8000;?></strong></i></b></font></div></td>
    <td width="43"></td>
    <td width="22"></td>
    <td width="207"><div align="center"><font size="2" face="Arial, Helvetica, sans-serif"><b><i><strong><?php  echo $D4000;?></strong></i></b></font></div></td>
    <td width="32"></td>
    <td width="19"></td>
    <td width="190"><div align="center"><font size="2" face="Arial, Helvetica, sans-serif"><b><i><strong><?php  echo $D2000;?></strong></i></b></font></div></td>
    <td width="46"></td>
    <td width="18"></td>
    <td width="216"><div align="center"><font size="2" face="Arial, Helvetica, sans-serif"><b><i><strong><?php  echo $D1000;?></strong></i></b></font></div></td>
    <td width="23"></td>
    <td width="32"></td>
  </tr>
  <tr> 
    <td width="166"></td>
    <td width="47"></td>
    <td width="58"></td>
    <td width="202"></td>
    <td width="43"></td>
    <td width="22"></td>
    <td width="207"></td>
    <td width="32"></td>
    <td width="19"></td>
    <td width="190"></td>
    <td width="46"></td>
    <td width="18"></td>
    <td width="216"></td>
    <td width="23"></td>
    <td width="32"></td>
  </tr>
  <tr> 
    <td width="166"><div class="affichageEquipe"><?php echo $clubA1601;?></div></td>
    <td width="47"><div class="affichageGA"><?php echo $A1601;?></div></td>
    <td rowspan="4" height="38"><img src="../../images/accolade.png" width="8" height="55"></td>
    <td width="202"></td>
    <td width="43"></td>
    <td width="22"></td>
    <td width="207"></td>
    <td width="32"></td>
    <td width="19"></td>
    <td width="190"><div align="center"></div></td>
    <td width="46"></td>
    <td width="18"></td>
    <td width="216"></td>
    <td width="23"></td>
    <td width="32"></td>
  </tr>
  <tr> 
    <td width="166"><div class="affichageEquipe"><?php echo $clubA1602;?></div></td>
    <td width="47"><div class="affichageGA"><?php echo $A1602;?></div></td>
    <td width="202"><div class="affichageEquipe"><?php echo $clubA8001;?></div></td>
    <td width="43"><div class="affichageGA"><?php echo $A8001;?></div></td>
    <td rowspan="6" width="22"><img src="../../images/accolade.png" width="10" height="95"></td>
    <td colspan="4"><div align="center"><b></b></div></td>
    <td width="46"></td>
    <td width="18"></td>
    <td width="216"></td>
    <td width="23"></td>
    <td width="32"></td>
  </tr>
  <tr> 
    <td width="166"><div class="affichageEquipe"><?php	echo $clubA1603;?></div></td>
    <td width="47"><div class="affichageGA"><?php echo $A1603;?></div></td>
    <td width="202"><div class="affichageEquipe"><?php	echo $clubA8002;?></div></td>
    <td width="43"><div class="affichageGA"><?php echo $A8002;?></div></td>
    <td width="207"><font size="2" face="Arial, Helvetica, sans-serif"><b><i><strong><?php  echo $L4001;?></strong></i></b></font></td>
    <td width="32"></td>
    <td width="19"></td>
    <td width="190"></td>
    <td width="46"></td>
    <td width="18"></td>
    <td width="216"></td>
    <td width="23"></td>
    <td width="32"></td>
  </tr>
  <tr> 
    <td width="166"><div class="affichageEquipe"><?php	echo $clubA1604;?></div></td>
    <td width="47"><div class="affichageGA"><?php echo $A1604;?></div></td>
    <td width="202"></td>
    <td width="43"></td>
    <td width="207"><div class="affichageEquipe"><?php	echo $clubA4001;?></div></td>
    <td width="32"><div class="affichageGA"><?php echo $A4001;?></div></td>
    <td rowspan="10" height="45" width="19"><img src="../../images/accolade.png" width="12" height="158"></td>
    <td width="190"></td>
    <td width="46"></td>
    <td width="18"></td>
    <td width="216"></td>
    <td width="23"></td>
    <td width="32"></td>
  </tr>
  <tr> 
    <td width="166"><div class="coin5"><?php echo $clubA1605;?></div></td>
    <td width="47"><div class="coin5"><?php	echo $A1605;?></div></td>
    <td rowspan="4"><img src="../../images/accolade.png" width="8" height="62"></td>
    <td width="202"></td>
    <td width="43"></td>
    <td width="207"><div class="affichageEquipe"><?php echo $clubA4002;?></div></td>
    <td width="32"><div class="affichageGA"><?php echo $A4002;?></div></td>
    <td width="190"></td>
    <td width="46"></td>
    <td width="18"></td>
    <td width="216"></td>
    <td width="23"></td>
    <td width="32"></td>
  </tr>
  <tr> 
    <td width="166"><div class="coin5"><?php echo $clubA1606;?></div></td>
    <td width="47"><div class="coin5"><?php	echo $A1606;?></div></td>
    <td width="202"><div class="affichageEquipe"><?php echo $clubA8003;?></div></td>
    <td width="43"><div class="affichageGA"><?php echo $A8003;?></div></td>
    <td width="207"></td>
    <td width="32"></td>
    <td width="190"></td>
    <td width="46"></td>
    <td width="18"></td>
    <td width="216"></td>
    <td width="23"></td>
    <td width="32"></td>
  </tr>
  <tr> 
    <td width="166"><div class="coin5"><?php echo $clubA1607;?></div></td>
    <td width="47"><div class="coin5"><?php echo $A1607;?></div></td>
    <td width="202"><div class="affichageEquipe"><?php echo $clubA8004;?></div></td>
    <td width="43"><div class="affichageGA"><?php echo $A8004;?></div></td>
    <td width="207"></td>
    <td width="32"></td>
    <td width="190"><font size="2" face="Arial, Helvetica, sans-serif"><b><i><strong><?php  echo $L2001;?></strong></i></b></font></td>
    <td width="46"></td>
    <td width="18"></td>
    <td width="216"></td>
    <td width="23"></td>
    <td width="32"></td>
  </tr>
  <tr> 
    <td width="166"><div class="coin5"><?php echo $clubA1608;?></div></td>
    <td width="47"><div class="coin5"><?php echo $A1608;?></div></td>
    <td width="202"></td>
    <td width="43"></td>
    <td width="22"></td>
    <td width="207"></td>
    <td width="32"></td>
    <td width="190"><div class="affichageEquipe"><?php echo $clubA2001;?></div></td>
    <td width="46"><div class="affichageGA"><?php echo $A2001;?></div></td>
    <td rowspan="18" width="18"><img src="../../images/accolade.png" width="8" height="253"></td>
    <td width="216"></td>
    <td width="23"></td>
    <td width="32"></td>
  </tr>
  <tr> 
    <td width="166"><div class="affichageEquipe"><?php echo $clubA1609;?></div></td>
    <td width="47"><div class="affichageGA"><?php echo $A1609;?></div></td>
    <td rowspan="4"><img src="../../images/accolade.png" width="9" height="59"></td>
    <td width="202"></td>
    <td width="43"></td>
    <td width="22"></td>
    <td width="207"></td>
    <td width="32"></td>
    <td width="190"><div class="affichageEquipe"><?php echo $clubA2002;?></div></td>
    <td width="46"><div class="affichageGA"><?php echo $A2002;?></div></td>
    <td width="216"></td>
    <td width="23"></td>
    <td width="32"></td>
  </tr>
  <tr> 
    <td width="166"><div class="affichageEquipe"><?php echo $clubA1610;?></div></td>
    <td width="47"><div class="affichageGA"><?php echo $A1610;?></div></td>
    <td width="202"><div class="affichageEquipe"><?php echo $clubA8005;?></div></td>
    <td width="43"><div class="affichageGA"><?php echo $A8005;?></div></td>
    <td rowspan="6" width="22"><img src="../../images/accolade.png" width="9" height="71"></td>
    <td width="207"></td>
    <td width="32"></td>
    <td width="190"></td>
    <td width="46"></td>
    <td width="216"></td>
    <td width="23"></td>
    <td width="32"></td>
  </tr>
  <tr> 
    <td width="166"><div class="affichageEquipe"><?php echo $clubA1611;?></div></td>
    <td width="47"><div class="affichageGA"><?php echo $A1611;?></div></td>
    <td width="202"><div class="affichageEquipe"><?php echo $clubA8006;?></div></td>
    <td width="43"><div class="affichageGA"><?php echo $A8006;?></div></td>
    <td width="207"><font size="2" face="Arial, Helvetica, sans-serif"><b><i><strong><?php echo $L4003;?></strong></i></b></font></td>
    <td width="32"></td>
    <td width="190"></td>
    <td width="46"></td>
    <td width="216"></td>
    <td width="23"></td>
    <td width="32"></td>
  </tr>
  <tr> 
    <td width="166"><div class="affichageEquipe"><?php echo $clubA1612;?></div></td>
    <td width="47"><div class="affichageGA"><?php echo $A1612;?></div></td>
    <td width="202"> </td>
    <td width="43"> </td>
    <td width="207"><div class="affichageEquipe"><?php echo $clubA4003;?></div></td>
    <td width="32"><div class="affichageGA"><?php echo $A4003;?></div></td>
    <td width="190"></td>
    <td width="46"></td>
    <td width="216"></td>
    <td width="23"></td>
    <td width="32"></td>
  </tr>
  <tr> 
    <td width="166"><div class="coin5"><?php echo $clubA1613;?></div></td>
    <td width="47"><div class="coin5"><?php echo $A1613;?></div></td>
    <td rowspan="4"><img src="../../images/accolade.png" width="8" height="58"></td>
    <td width="202"></td>
    <td width="43"></td>
    <td width="207"><div class="affichageEquipe"><?php echo $clubA4004;?></div></td>
    <td width="32"><div class="affichageGA"><?php echo $A4004;?></div></td>
    <td width="190"></td>
    <td width="46"></td>
    <td width="216"></td>
    <td width="23"></td>
    <td width="32"></td>
  </tr>
  <tr> 
    <td width="166"><div class="coin5"><?php echo $clubA1614;?></div></td>
    <td width="47"><div class="coin5"><?php echo $A1614;?></div></td>
    <td width="202"><div class="affichageEquipe"><?php echo $clubA8007;?></div></td>
    <td width="43"><div class="affichageGA"><?php echo $A8007;?></div></td>
    <td width="207"></td>
    <td width="32"></td>
    <td width="19"></td>
    <td width="190"></td>
    <td width="46"></td>
    <td width="216"><font size="2" face="Arial, Helvetica, sans-serif"><b><i><strong><?php echo $L1001;?></strong></i></b></font></td>
    <td width="23"></td>
    <td width="32"></td>
  </tr>
  <tr> 
    <td width="166"><div class="coin5"><?php echo $clubA1615;?></div></td>
    <td width="47"><div class="coin5"><?php echo $A1615;?></div></td>
    <td width="202"><div class="affichageEquipe"><?php echo $clubA8008;?></div></td>
    <td width="43"><div class="affichageGA"><?php echo $A8008;?></div></td>
    <td width="207"></td>
    <td width="32"></td>
    <td  width="19">></td>
    <td  width="190"></td>
    <td width="46"></td>
    <td width="216"><div class="affichageEquipe"><?php echo $clubA1001;?></div></td>
    <td width="23"><div class="affichageGA"><?php echo $A1001;?></div></td>
    <td width="32"></td>
  </tr>
  <tr> 
    <td width="166"><div class="coin5"><?php echo $clubA1616;?></div></td>
	<td width="47"><div class="coin5"><?php echo $A1616;?></div></td>
    <td width="202"></td>
    <td width="43"></td>
    <td width="22"></td>
    <td width="207"></td>
    <td width="32"></td>
    <td  width="19"></td>
    <td  width="190"></td>
    <td width="46"></td>
    <td width="216"><div class="affichageEquipe"><?php echo $clubA1002;?></div></td>
    <td width="23"><div class="affichageGA"><?php echo $A1002;?></div></td>
    <td width="32"></td>
  </tr>
  <tr> 
    <td width="166"><div class="affichageEquipe"><?php echo $clubA1617;?></div></td>
    <td width="47"><div class="affichageGA"><?php echo $A1617;?></div></td>
    <td rowspan="4"><img src="../../images/accolade.png" width="8" height="56"></td>
    <td width="202"></td>
    <td width="43"></td>
    <td width="22"></td>
    <td width="207"></td>
    <td width="32"></td>
    <td height="8"></td>
    <td height="8"></td>
    <td width="46"></td>
    <td width="216"></td>
    <td width="23"></td>
    <td width="32"></td>
  </tr>
  <tr> 
    <td width="166"><div class="affichageEquipe"><?php echo $clubA1618;?></div></td>
    <td width="47"><div class="affichageGA"><?php echo $A1618;?></div></td>
    <td width="202"><div class="affichageEquipe"><?php echo $clubA8009;?></div></td>
    <td width="43"><div class="affichageGA"><?php echo $A8009;?></div></td>
    <td rowspan="6" width="22"><img src="../../images/accolade.png" width="8" height="97"></td>
    <td width="207"></td>
    <td width="32"></td>
    <td  width="19"></td>
    <td  width="190"></td>
    <td width="46"></td>
    <td height="17" rowspan="4"><div align="center"><font size="5"><b><strong><b><strong><font size="2" face="Arial, Helvetica, sans-serif"><b><i><strong><img src="<?php echo $champLogo;  ?>" width="100" height="100"></strong></i></b></font></strong></b></font></div></td>
    <td ></td>
    <td ></td>
  </tr>
  <tr> 
    <td width="166"><div class="affichageEquipe"><?php echo $clubA1619;?></div></td>
    <td width="47"><div class="affichageGA"><?php echo $A1619;?></div></td>
    <td width="202"><div class="affichageEquipe"><?php echo $clubA8010;?></div></td>
    <td width="43"><div class="affichageGA"><?php echo $A8010;?></div></td>
    <td width="207"><font size="2" face="Arial, Helvetica, sans-serif"><b><i><strong><?php echo $L4005;?></strong></i></b></font></td>
    <td width="32"></td>
    <td width="19"></td>
    <td width="190"></td>
    <td width="46"></td>
    <td ></td>
    <td ></td>
  </tr>
  <tr> 
    <td width="166"><div class="affichageEquipe"><?php echo $clubA1620;?></div></td>
    <td width="47"><div class="affichageGA"><?php echo $A1620;?></div></td>
    <td width="202"> </td>
    <td width="43"> </td>
    <td width="207"><div class="affichageEquipe"><?php echo $clubA4005;?></div></td>
    <td width="32"><div class="affichageGA"><?php echo $A4005;?></div></td>
    <td rowspan="10" width="19"><img src="../../images/accolade.png" width="8" height="128"></td>
    <td width="190"></td>
    <td width="46"></td>
    <td ></td>
    <td ></td>
  </tr>
  <tr> 
    <td width="166" height="17"><div class="coin5"><?php echo $clubA1621;?></div></td>
    <td width="47" height="17"><div class="coin5"><?php echo $A1621;?></div></td>
    <td rowspan="4" height="28"><img src="../../images/accolade.png" width="8" height="54"></td>
    <td width="202" height="17"></td>
    <td width="43" height="17"></td>
    <td width="207" height="17"><div class="affichageEquipe"><?php	echo $clubA4006;?></div></td>
    <td width="32" height="17"><div class="affichageGA"><?php echo $A4006;?></div></td>
    <td width="190" height="17"> </td>
    <td width="46" height="17"></td>
    <td></td>
    <td></td>
  </tr>
  <tr> 
    <td width="166"><div class="coin5"><?php echo $clubA1622;?></div></td>
    <td width="47"><div class="coin5"><?php echo $A1622;?></div></td>
    <td width="202"><div class="affichageEquipe"><?php echo $clubA8011;?></div></td>
    <td width="43"><div class="affichageGA"><?php echo $A8011;?></div></td>
    <td width="207"></td>
    <td width="32"></td>
    <td width="190"></td>
    <td width="46"></td>
    <td height="8" rowspan="3"><div align="center"><b><font size="5" face="Arial, Helvetica, sans-serif"><b><i><strong><?php echo $champion;?></strong></i></b></font></b></div></td>
    <td ></td>
    <td ></td>
  </tr>
  <tr> 
    <td width="166"><div class="coin5"><?php echo $clubA1623;?></div></td>
    <td width="47"><div class="coin5"><?php	echo $A1623;?></div></td>
    <td width="202"><div class="affichageEquipe"><?php echo $clubA8012;?></div></td>
    <td width="43"><div class="affichageGA"><?php echo $A8012;?></div></td>
    <td width="207"></td>
    <td width="32"></td>
    <td width="190"><font size="2" face="Arial, Helvetica, sans-serif"><b><i><strong><?php  echo $L2003;?></strong></i></b></font></td>
    <td width="46"></td>
    <td ></td>
    <td ></td>
  </tr>
  <tr> 
    <td width="166"><div class="coin5"><?php echo $clubA1624;?> </div></td>
    <td width="47"><div class="coin5"><?php echo $A1624;?></div></td>
    <td width="202"></td>
    <td width="43"></td>
    <td width="22"></td>
    <td width="207"></td>
    <td width="32"></td>
    <td width="190"><div class="affichageEquipe"><?php echo $clubA2003;?></div></td>
    <td width="46"><div class="affichageGA"><?php echo $A2003;?></div></td>
    <td ></td>
    <td ></td>
  </tr>
  <tr> 
    <td width="166"><div class="affichageEquipe"><?php echo $clubA1625;?></div></td>
    <td width="47"><div class="affichageGA"><?php echo $A1625;?></div></td>
    <td rowspan="4"><img src="../../images/accolade.png" width="8" height="54"></td>
    <td width="202"></td>
    <td width="43"></td>
    <td width="22"></td>
    <td width="207"></td>
    <td width="32"></td>
    <td width="190"><div class="affichageEquipe"><?php echo $clubA2004;?></div></td>
    <td width="46"><div class="affichageGA"><?php echo $A2004;?></div></td>
    <td width="216"></td>
    <td width="23"></td>
    <td width="32"></td>
  </tr>
  <tr> 
    <td width="166"><div class="affichageEquipe"><?php echo $clubA1626;?></div></td>
    <td width="47"><div class="affichageGA"><?php echo $A1626;?></div></td>
    <td width="202"><div class="affichageEquipe"><?php echo $clubA8013;?></div></td>
    <td width="43"><div class="affichageGA"><?php echo $A8013;?></div></td>
    <td rowspan="6" width="22"><img src="../../images/accolade.png" width="9" height="80"></td>
    <td width="207"></td>
    <td width="32"></td>
    <td width="190"></td>
    <td width="46"></td>
    <td width="18"></td>
    <td width="216"></td>
    <td width="23"></td>
    <td width="32"></td>
  </tr>
  <tr> 
    <td width="166"><div class="affichageEquipe"><?php echo $clubA1627;?></div></td>
    <td width="47"><div class="affichageGA"><?php echo $A1627;?></div></td>
    <td width="202"><div class="affichageEquipe"><?php echo $clubA8014;?></div></td>
    <td width="43"><div class="affichageGA"><?php echo $A8014;?></div></td>
    <td width="207"><font size="2" face="Arial, Helvetica, sans-serif"><b><i><strong><?php  echo $L4007;?></strong></i></b></font></td><td width="32"></td>
    <td width="190"></td>
    <td width="46"></td>
    <td width="18"></td>
    <td width="216"></td>
    <td width="23"></td>
    <td width="32"></td>
  </tr>
  <tr> 
    <td width="166"><div class="affichageEquipe"><?php echo $clubA1628;?></div></td>
    <td width="47"><div class="affichageGA"><?php echo $A1628;?></div></td>
    <td width="202"> </td>
    <td width="43"> </td>
    <td width="207"><div class="affichageEquipe"><?php echo $clubA4007;?></div></td>
    <td width="32"><div class="affichageGA"><?php echo $A4007;?></div></td>
    <td width="190"></td>
    <td width="46"></td>
    <td width="18"></td>
    <td width="216"></td>
    <td width="23"></td>
    <td width="32"></td>
  </tr>
  <tr> 
    <td width="166"><div class="coin5"><?php echo $clubA1629;?></div></td>
    <td width="47"><div class="coin5"><?php echo $A1629;?></div></td>
    <td rowspan="4"><img src="../../images/accolade.png" width="8" height="54"></td>
    <td width="202"></td>
    <td width="43"></td>
    <td width="207"><div class="affichageEquipe"><?php echo $clubA4008;?></div></td>
    <td width="32"><div class="affichageGA"><?php echo $A4008;?></div></td>
    <td width="190"></td>
    <td width="46"> </td>
    <td width="18"></td>
    <td width="216"></td>
    <td width="23"></td>
    <td width="32"></td>
  </tr>
  <tr> 
    <td width="166"><div class="coin5"><?php echo $clubA1630;?></div></td>
    <td width="47"><div class="coin5"><?php echo $A1630;?></div></td>
    <td width="202"><div class="affichageEquipe"><?php echo $clubA8015;	 ?></div></td>
    <td width="43"><div class="affichageGA"><?php echo $A8015;?></div></td>
    <td width="207"></td>
    <td width="32"></td>
    <td width="19"></td>
    <td width="190"></td>
    <td width="46"></td>
    <td width="18"></td>
    <td width="216"></td>
    <td width="23"></td>
    <td width="32"></td>
  </tr>
  <tr> 
    <td width="166"><div class="coin5"><?php echo $clubA1631;?></div></td>
    <td width="47"><div class="coin5"><?php echo $A1631;?></div></td>
    <td width="202"><div class="affichageEquipe"><?php echo $clubA8016;?></div></td>
    <td width="43"><div class="affichageGA"><?php echo $A8016;?></div></td>
    <td width="207"></td>
    <td width="32"></td>
    <td width="19"></td>
    <td width="190"></td>
    <td width="46"></td>
    <td width="18"></td>
    <td width="216"></td>
    <td width="23"></td>
    <td width="32"></td>
  </tr>
  <tr> 
    <td width="166"><div class="coin5"><?php echo $clubA1632;?></div></td>
    <td width="47"><div class="coin5"><?php	echo $A1632;?></div> </td>
    <td width="202"></td>
    <td width="43"></td>
    <td width="22"></td>
    <td width="207"></td>
    <td width="32"></td>
    <td width="19"></td>
    <td width="190"></td>
    <td width="46"></td>
    <td width="18"></td>
    <td width="216"></td>
    <td width="23"></td>
    <td width="32"></td>
  </tr>
  <tr> 
    <td width="166"></td>
    <td width="47"></td>
    <td width="58"></td>
    <td width="202"></td>
    <td width="43"></td>
    <td width="22"></td>
    <td width="207"></td>
    <td width="32"></td>
    <td width="19"></td>
    <td width="190"></td>
    <td width="46"></td>
    <td width="18"></td>
    <td width="216"></td>
    <td width="23"></td>
    <td width="32"></td>
  </tr>
  <tr> 
    <td colspan="16" bgcolor="#FFCC66"></td>
  </tr>
  <tr> 
    <td colspan="16"><div align="center"><?php include("../../pub/pub1.php");?></div></td>
  </tr>
</table>
