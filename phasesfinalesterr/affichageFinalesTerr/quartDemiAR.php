<?php
//require ("../fonctionspfterrESDL.php");
//quarts ($bdcomiteClub, $division, $annee);
require ("../fonctionspfMPY.php");




if (isset ($_GET['variable_1'])) $annee = $_GET['variable_1']; else $variable_1='-'; 
$anneemoins = $annee-1;
$anneeplus = $annee+1;

?>

<head>

<link rel="stylesheet" type="text/css" href="../champTerr.css">

</head>


<body bgcolor="#EAECEB">
<table width="1000" border="0" height="30">
  <tr valign="top" align="center"> 
    <td bgcolor="#EAECEB" height="29" align="left" width="258" valign="middle"> 
      <p align="center"> 
        <?php 	require("../../pub/pub7.php"); ?>
      </p>
    </td>
    <td valign="middle" bgcolor="#EAECEB" height="29" align="left" width="470"> 
      <div align="center"><a href="/phasesfinalesterr/affichageFinalesTerr/pageAffichage.php?page=<?php echo $page; ?>&comite=<?php echo $comite; ?>&division=<?php echo $division; ?>&annee=<?php echo $anneemoins;?>" target="_top"><font size="6" color="#FF0000"><b>&lt;&lt;</b></font></a><font size="5" color="#EAECEB">nnnne</font><font size="5"> 
        </font><a href="/phasesfinalesterr/affichageFinalesTerr/pageAffichage.php?page=<?php echo $page; ?>&comite=<?php echo $comite; ?>&division=<?php echo $division; ?>&annee=<?php echo $anneeplus;?>"target="_top"><font color="#FF0000" size="6"><b>&gt;&gt;</b></font></a></div>
    </td>
    <td width="256" bgcolor="#EAECEB" height="29" align="left" valign="middle"> 
      <div align="center"> 
        <?php 	require("../../pub/pub8.php"); ?>
      </div>
    </td>
  </tr>
  <tr valign="top" align="center"> 
    <td colspan="3" height="31"> 
      <div class="bandeau1"> 
        <?php echo "Phases finales du champ territorial du comit&eacute; Midi Pyr&eacute;n&eacute;es".' '.$annee; ?>
      </div>
    </td>
  </tr>
</table>
<table width="1000" border="0" align="left" height="500" cellspacing="0">
  <tr> 
    <td height="13" colspan="13"> 
      <h2> 
        <?php affichage ($division); ?>
      </h2>
    </td>
  </tr>
  <tr> 
    <td width="126" height="13">&nbsp;</td>
    <td width="131" height="13">&nbsp;</td>
    <td width="43" height="13">&nbsp;</td>
    <td width="43" height="13">&nbsp;</td>
    <td width="39" height="13">&nbsp;</td>
    <td width="114" height="13">&nbsp;</td>
    <td width="108" align="left" height="13">&nbsp;</td>
    <td width="36" height="13">&nbsp;</td>
    <td width="32" height="13">&nbsp;</td>
    <td width="158" height="13">&nbsp;</td>
    <td width="126" height="13">&nbsp;</td>
    <td width="42" height="13">&nbsp;</td>
    <td width="357" height="13">&nbsp;</td>
  </tr>
  <tr> 
    <td width="126" height="13"> </td>
    <td colspan="3" height="13"> 
      <div class="affichageTitre" >Quarts de finale A/R</div>
    </td>
    <td width="39" height="13">&nbsp;</td>
    <td width="114" height="13">&nbsp;</td>
    <td colspan="3" align="left" height="13"> 
      <div class="affichageTitre" >Demi finale A/R</div>
    </td>
    <td width="158" height="13">&nbsp;</td>
    <td colspan="2" height="13"> 
      <div class="affichageTitre" >Finale</div>
    </td>
    <td width="357" height="13">&nbsp;</td>
  </tr>
  <tr> 
    <td width="126" height="26"> </td>
    <td width="131" height="26">&nbsp; </td>
    <td width="43" height="26">&nbsp;</td>
    <td width="43" height="26">&nbsp;</td>
    <td width="39" height="26">&nbsp;</td>
    <td width="114" height="26">&nbsp;</td>
    <td width="108" align="left" height="26">&nbsp; </td>
    <td width="36" height="26">&nbsp;</td>
    <td width="32" height="26">&nbsp;</td>
    <td width="158" height="26">&nbsp;</td>
    <td width="126" height="26">&nbsp;</td>
    <td width="42" height="26">&nbsp;</td>
    <td width="357" height="26">&nbsp;</td>
  </tr>
  <tr> 
    <td width="126" height="25">&nbsp;</td>
    <td colspan="3" height="25"> <font size="2" face="Arial, Helvetica, sans-serif"><b><i><strong> 
      </strong></i></b></font> </td>
    <td width="39" height="25">&nbsp;</td>
    <td width="114" height="25">&nbsp;</td>
    <td width="108" height="25" align="left">&nbsp;</td>
    <td width="36" height="25">&nbsp;</td>
    <td width="32" height="25">&nbsp;</td>
    <td width="158" height="25">&nbsp;</td>
    <td width="126" height="25">&nbsp;</td>
    <td width="42" height="25">&nbsp;</td>
    <td width="357" height="25">&nbsp;</td>
  </tr>
  <tr> 
    <td width="126"> </td>
    <td width="131"> 
      <div class="affichageEquipe" > 
        <?php 
		QuartsARdemiAR($annee, $division, $bdd);
		echo $clubA4001;?>
      </div>
    </td>
    <td width="43"> 
      <div class="affichagePts" > 
        <?php echo $A8001;?>
      </div>
    </td>
    <td width="43"> 
      <div class="affichageGA" > 
        <?php echo $A4001;?>
      </div>
    </td>
    <td width="39">&nbsp;</td>
    <td width="114">&nbsp;</td>
    <td width="108" align="left">&nbsp;</td>
    <td width="36">&nbsp;</td>
    <td width="32">&nbsp;</td>
    <td width="158">&nbsp;</td>
    <td width="126">&nbsp;</td>
    <td width="42">&nbsp;</td>
    <td width="357">&nbsp;</td>
  </tr>
  <tr> 
    <td width="126" height="23"> </td>
    <td width="131" height="23"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA4002;?>
      </div>
    </td>
    <td width="43" height="23"> 
      <div class="affichagePts" > 
        <?php echo $A8002;?>
      </div>
    </td>
    <td width="43" height="23"> 
      <div class="affichageGA" > 
        <?php echo $A4002;?>
      </div>
    </td>
    <td width="39" height="23">&nbsp;</td>
    <td width="114" height="23">&nbsp;</td>
    <td colspan="3" align="left" height="23"> <font size="2" face="Arial, Helvetica, sans-serif"><b><i><strong> 
      </strong></i></b></font> </td>
    <td width="158" height="23">&nbsp;</td>
    <td width="126" height="23">&nbsp;</td>
    <td width="42" height="23">&nbsp;</td>
    <td width="357" height="23">&nbsp;</td>
  </tr>
  <tr> 
    <td width="126" height="17">&nbsp;</td>
    <td width="131" height="17">&nbsp;</td>
    <td width="43" height="17">&nbsp;</td>
    <td width="43" height="17">&nbsp;</td>
    <td width="39" height="17">&nbsp;</td>
    <td width="114" height="17">&nbsp;</td>
    <td width="108" align="left" height="17"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA2001;?>
      </div>
    </td>
    <td width="36" height="17"> 
      <div class="affichagePts" > 
        <?php echo $B2001;?>
      </div>
    </td>
    <td width="32" height="17"> 
      <div class="affichageGA" > 
        <?php echo $A2001;?>
      </div>
    </td>
    <td width="158" height="17">&nbsp;</td>
    <td width="126" height="17">&nbsp;</td>
    <td width="42" height="17">&nbsp;</td>
    <td width="357" height="17">&nbsp;</td>
  </tr>
  <tr> 
    <td width="126" height="22">&nbsp;</td>
    <td width="131" height="22">&nbsp;</td>
    <td width="43" height="22">&nbsp;</td>
    <td width="43" height="22">&nbsp;</td>
    <td width="39" height="22">&nbsp;</td>
    <td width="114" height="22">&nbsp;</td>
    <td width="108" height="22"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA2002;?>
      </div>
    </td>
    <td width="36" height="22"> 
      <div class="affichagePts" > 
        <?php echo $B2002;?>
      </div>
    </td>
    <td width="32" height="22"> 
      <div class="affichageGA" > 
        <?php echo $A2001;?>
      </div>
    </td>
    <td width="158" height="22">&nbsp;</td>
    <td width="126" height="22">&nbsp;</td>
    <td width="42" height="22">&nbsp;</td>
    <td width="357" height="22">&nbsp;</td>
  </tr>
  <tr> 
    <td width="126" height="22"> </td>
    <td width="131" height="22"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA4003;?>
      </div>
    </td>
    <td width="43" height="22"> 
      <div class="affichagePts" > 
        <?php echo $A8003;?>
      </div>
    </td>
    <td width="43" height="22"> 
      <div class="affichageGA" > 
        <?php echo $A4003;?>
      </div>
    </td>
    <td width="39" height="22">&nbsp;</td>
    <td width="114" height="22">&nbsp;</td>
    <td width="108" align="left" height="22">&nbsp;</td>
    <td width="36" height="22">&nbsp;</td>
    <td width="32" height="22">&nbsp;</td>
    <td width="158" height="22">&nbsp;</td>
    <td colspan="3" height="22"> <font size="2" face="Arial, Helvetica, sans-serif"><b><i><strong> 
      </strong></i></b></font> </td>
  </tr>
  <tr> 
    <td width="126" height="23"> </td>
    <td width="131" height="23"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA4004;?>
      </div>
    </td>
    <td width="43" height="23"> 
      <div class="affichagePts" > 
        <?php echo $A8004;?>
      </div>
    </td>
    <td width="43" height="23"> 
      <div class="affichageGA" > 
        <?php echo $A4004;?>
      </div>
    </td>
    <td width="39" height="23">&nbsp;</td>
    <td width="114" height="23">&nbsp;</td>
    <td width="108" align="left" height="23">&nbsp;</td>
    <td width="36" height="23">&nbsp;</td>
    <td width="32" height="23">&nbsp;</td>
    <td width="158" height="23">&nbsp;</td>
    <td width="126" height="23"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA1001;?>
      </div>
    </td>
    <td width="42" height="23"> 
      <div class="affichageGA" > 
        <?php echo $A1001;  ?>
      </div>
    </td>
    <td width="357" height="23">&nbsp;</td>
  </tr>
  <tr> 
    <td width="126" height="11"> </td>
    <td width="131" height="11">&nbsp;</td>
    <td width="43" height="11">&nbsp;</td>
    <td width="43" height="11">&nbsp;</td>
    <td width="39" height="11">&nbsp;</td>
    <td width="114" height="11">&nbsp;</td>
    <td width="108" height="11" align="left">&nbsp;</td>
    <td width="36" height="11">&nbsp;</td>
    <td width="32" height="11">&nbsp;</td>
    <td width="158" height="11">&nbsp;</td>
    <td width="126" height="11"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA1002;?>
      </div>
    </td>
    <td width="42" height="11"> 
      <div class="affichageGA" > 
        <?php echo $A1002;  ?>
      </div>
    </td>
    <td width="357" height="11">&nbsp;</td>
  </tr>
  <tr> 
    <td width="126" height="12">&nbsp;</td>
    <td width="131" height="12">&nbsp;</td>
    <td width="43" height="12">&nbsp;</td>
    <td width="43" height="12">&nbsp;</td>
    <td width="39" height="12">&nbsp;</td>
    <td width="114" height="12">&nbsp;</td>
    <td width="108" align="left" height="12">&nbsp;</td>
    <td width="36" height="12">&nbsp;</td>
    <td width="32" height="12">&nbsp;</td>
    <td rowspan="4" width="158"> 
      <div align="center"><font color="#000000" face="Geneva, Arial, Helvetica, san-serif"size="3"><b><font size="6"> 
        </font></b></font></div>
      <div align="center"></div>
    </td>
    <td rowspan="4" colspan="2"> 
      <div align="center"><font color="#000000" face="Geneva, Arial, Helvetica, san-serif"size="3"><b><font size="6"> 
        <?php// logo ($bdcomiteClub, $champion); ?>
        </font></b></font></div>
    </td>
    <td rowspan="4" width="357">&nbsp;</td>
  </tr>
  <tr valign="top"> 
    <td width="126" height="6">&nbsp;</td>
    <td width="131" height="6">&nbsp;</td>
    <td width="43" height="6">&nbsp;</td>
    <td width="43" height="6">&nbsp;</td>
    <td width="39" height="6"> 
      <div align="center"></div>
    </td>
    <td width="114" height="6">&nbsp;</td>
    <td width="108" height="6" align="left">&nbsp;</td>
    <td width="36" height="6">&nbsp;</td>
    <td width="32" height="6">&nbsp;</td>
  </tr>
  <tr> 
    <td width="126" height="5"> </td>
    <td width="131" height="5"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA4005;?>
      </div>
    </td>
    <td width="43" height="5"> 
      <div class="affichagePts" > 
        <?php echo $A8005;?>
      </div>
    </td>
    <td width="43" height="5"> 
      <div class="affichageGA" > 
        <?php echo $A4005;?>
      </div>
    </td>
    <td width="39" height="5"> </td>
    <td width="114" height="5"> </td>
    <td width="108" align="left" height="5">&nbsp;</td>
    <td width="36" height="5">&nbsp;</td>
    <td width="32" height="5">&nbsp;</td>
  </tr>
  <tr> 
    <td width="126" height="20"> </td>
    <td width="131" height="20"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA4006;?>
      </div>
    </td>
    <td width="43" height="20"> 
      <div class="affichagePts" > 
        <?php echo $A8006;?>
      </div>
    </td>
    <td width="43" height="20"> 
      <div class="affichageGA" > 
        <?php echo $A4006;?>
      </div>
    </td>
    <td width="39" height="20"> </td>
    <td width="114" height="20"> </td>
    <td width="108" align="left" height="20">&nbsp;</td>
    <td width="36" height="20">&nbsp;</td>
    <td width="32" height="20">&nbsp;</td>
  </tr>
  <tr> 
    <td width="126">&nbsp;</td>
    <td width="131">&nbsp;</td>
    <td width="43">&nbsp;</td>
    <td width="43">&nbsp;</td>
    <td width="39">&nbsp;</td>
    <td width="114">&nbsp;</td>
    <td width="108" align="left"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA2003;?>
      </div>
    </td>
    <td width="36"> 
      <div class="affichagePts" > 
        <?php echo $B2003;?>
      </div>
    </td>
    <td width="32"> 
      <div class="affichageGA" > 
        <?php echo $A2003;?>
      </div>
    </td>
    <td rowspan="5" width="158"> 
      <div align="center"> </div>
      <div align="center"></div>
    </td>
    <td rowspan="5" colspan="2"> 
      <div align="center"> </div>
      <div align="center"></div>
    </td>
    <td rowspan="5" width="357">&nbsp;</td>
  </tr>
  <tr> 
    <td width="126" height="24">&nbsp;</td>
    <td width="131" height="24">&nbsp; </td>
    <td width="43" height="24">&nbsp;</td>
    <td width="43" height="24">&nbsp;</td>
    <td width="39" height="24">&nbsp;</td>
    <td width="114" height="24">&nbsp;</td>
    <td width="108" align="left" height="24"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA2004;?>
      </div>
    </td>
    <td width="36" height="24"> 
      <div class="affichagePts" > 
        <?php echo $B2004;?>
      </div>
    </td>
    <td width="32" height="24"> 
      <div class="affichageGA" > 
        <?php echo $A2004;?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="126"> </td>
    <td width="131"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA4007;?>
      </div>
    </td>
    <td width="43"> 
      <div class="affichagePts" > 
        <?php echo $A8007;?>
      </div>
    </td>
    <td width="43"> 
      <div class="affichageGA" > 
        <?php echo $A4007;?>
      </div>
    </td>
    <td width="39">&nbsp;</td>
    <td width="114">&nbsp;</td>
    <td width="108" align="left">&nbsp;</td>
    <td width="36">&nbsp;</td>
    <td width="32">&nbsp;</td>
  </tr>
  <tr> 
    <td width="126" height="11"> </td>
    <td width="131"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA4008;?>
      </div>
    </td>
    <td width="43"> 
      <div class="affichagePts" > 
        <?php echo $A8008;?>
      </div>
    </td>
    <td width="43"> 
      <div class="affichageGA" > 
        <?php echo $A4008;?>
      </div>
    </td>
    <td width="39">&nbsp;</td>
    <td width="114">&nbsp;</td>
    <td width="108" align="left">&nbsp;</td>
    <td width="36">&nbsp;</td>
    <td width="32">&nbsp;</td>
  </tr>
  <tr> 
    <td width="126"> </td>
    <td width="131">&nbsp;</td>
    <td width="43">&nbsp;</td>
    <td width="43">&nbsp;</td>
    <td width="39">&nbsp;</td>
    <td width="114">&nbsp;</td>
    <td width="108" align="left">&nbsp;</td>
    <td width="36">&nbsp;</td>
    <td width="32">&nbsp;</td>
  </tr>
  <tr> 
    <td width="126">&nbsp;</td>
    <td width="131">&nbsp;</td>
    <td width="43">&nbsp;</td>
    <td width="43">&nbsp;</td>
    <td width="39">&nbsp;</td>
    <td width="114">&nbsp;</td>
    <td width="108">&nbsp;</td>
    <td width="36">&nbsp;</td>
    <td width="32">&nbsp;</td>
    <td width="158">&nbsp;</td>
    <td width="126">&nbsp;</td>
    <td width="42">&nbsp;</td>
    <td width="357">&nbsp;</td>
  </tr>
  <tr> 
    <td colspan="13"> 
      <hr />
    </td>
  </tr>
  <tr> 
    <td height="22" colspan="13"> 
      <div align="center"> 
        <?php require("../../pub/pub1.php"); ?>
      </div>
    </td>
  </tr>
</table>

