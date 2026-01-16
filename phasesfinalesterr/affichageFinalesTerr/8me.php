<?php
require ("../fonctionspfterrESDL.php");
huitieme($bdcomiteClub, $division, $annee, $bdcomiteAnnee_e ,$bdcomiteAnnee_r);


$anneemoins = $annee-1;
$anneeplus = $annee+1;
?>


<body bgcolor="#EAECEB">
<table width="1000" border="0" align="left" height="500" cellspacing="0">
  <tr> 
    <td height="13" bgcolor="#FFCC66" colspan="12"> 
      <div align="center"><i><b> 
        <?php affichage($division); ?>
        </b></i></div>
    </td>
  </tr>
  <tr> 
    <td width="160" height="13">&nbsp;</td>
    <td width="30" height="18">&nbsp;</td>
    <td width="32" height="18">&nbsp;</td>
    <td width="160" height="18">&nbsp;</td>
    <td width="30" height="18">&nbsp;</td>
    <td width="21" height="18">&nbsp;</td>
    <td width="160" height="18" align="left">&nbsp;</td>
    <td width="30" height="18">&nbsp;</td>
    <td width="22" height="18">&nbsp;</td>
    <td width="160" height="18">&nbsp;</td>
    <td width="30" height="18">&nbsp;</td>
    <td width="21" height="18">&nbsp;</td>
  </tr>
  <tr> 
    <td width="160" height="13">   
      <div id="coin5" >8me de finale</div>
    </td>
    <td width="30" height="18">&nbsp;</td>
    <td width="32" height="18">&nbsp;</td>
    <td width="160" height="18">   
      <div id="coin5" >Quarts de finale</div>
    </td>
    <td width="30" height="18">&nbsp;</td>
    <td width="21" height="18">&nbsp;</td>
    <td width="160" height="18" align="left">   
      <div id="coin5" >Demi finale</div>
    </td>
    <td width="30" height="18">&nbsp;</td>
    <td width="22" height="18">&nbsp;</td>
    <td width="160" height="18">   
      <div id="coin5" >Finale</div>
    </td>
    <td width="30" height="18">&nbsp;</td>
    <td width="21" height="18">&nbsp;</td>
  </tr>
  <tr> 
    <td width="160" height="13">&nbsp;</td>
    <td width="30" height="18">&nbsp;</td>
    <td width="32" height="18">&nbsp;</td>
    <td width="160" height="18">&nbsp;</td>
    <td width="30" height="18">&nbsp;</td>
    <td width="21" height="18">&nbsp;</td>
    <td width="160" height="18" align="left">&nbsp;</td>
    <td width="30" height="18">&nbsp;</td>
    <td width="22" height="18">&nbsp;</td>
    <td width="160" height="18">&nbsp;</td>
    <td width="30" height="18">&nbsp;</td>
    <td width="21" height="18">&nbsp;</td>
  </tr>
  <tr> 
    <td width="160" height="13"> 
      <div id="quarts" > 
        <?php	 echo $clubA8001; ?>
      </div>
    </td>
    <td width="30" height="18"> 
      <div id="quarts" > 
        <?php echo $A8004; ?>
      </div>
    </td>
    <td width="32" height="18">&nbsp;</td>
    <td width="160" height="18"> <font size="2" face="Arial, Helvetica, sans-serif"><b><i> 
      <strong> 
      <?php//	 echo $quart1; ?>
      </strong></i></b></font> </td>
    <td width="30" height="18">&nbsp;</td>
    <td width="21" height="18">&nbsp;</td>
    <td width="160" height="18" align="left">&nbsp;</td>
    <td width="30" height="18">&nbsp;</td>
    <td width="22" height="18">&nbsp;</td>
    <td width="160" height="18">&nbsp;</td>
    <td width="30" height="18">&nbsp;</td>
    <td width="21" height="18">&nbsp;</td>
  </tr>
  <tr> 
    <td width="160"> 
      <div id="quarts" > 
        <?php	 echo $clubA8002; ?>
      </div>
    </td>
    <td width="30"> 
      <div id="quarts" > 
        <?php	 echo $A8002; ?>
      </div>
    </td>
    <td width="32">&nbsp;</td>
    <td width="160"> 
      <div id="quarts" > 
        <?php echo $clubA4001; ?>
      </div>
    </td>
    <td width="30"> 
      <div id="quarts" > 
        <?php 	echo $A4001; ?>
      </div>
    </td>
    <td width="21">&nbsp;</td>
    <td width="160" align="left">&nbsp;</td>
    <td width="30">&nbsp;</td>
    <td width="22">&nbsp;</td>
    <td width="160">&nbsp;</td>
    <td width="30">&nbsp;</td>
    <td width="21">&nbsp;</td>
  </tr>
  <tr> 
    <td width="160" height="15"></td>
    <td width="30" height="15"></td>
    <td width="32" height="15"></td>
    <td width="160" height="15"> 
      <div id="quarts" > 
        <?php echo $clubA4002; ?>
      </div>
    </td>
    <td width="30" height="15"> 
      <div id="quarts" > 
        <?php echo $A4002;  ?>
      </div>
    </td>
    <td width="21" height="15">&nbsp;</td>
    <td width="160" align="left" height="15"></td>
    <td width="30" height="15">&nbsp;</td>
    <td width="22" height="15">&nbsp;</td>
    <td width="160" height="15">&nbsp;</td>
    <td width="30" height="15">&nbsp;</td>
    <td width="21" height="15">&nbsp;</td>
  </tr>
  <tr> 
    <td width="160"> 
      <div id="quarts" > 
        <?php echo $clubA8003; ?>
      </div>
    </td>
    <td width="30"> 
      <div id="quarts" > 
        <?php echo $A8003; ?>
      </div>
    </td>
    <td width="32">&nbsp;</td>
    <td width="160">&nbsp;</td>
    <td width="30">&nbsp;</td>
    <td width="21">&nbsp;</td>
    <td width="160" align="left"><font size="2" face="Arial, Helvetica, sans-serif"><b><i><strong> 
      <?php//	 echo $demi1; ?>
      </strong></i></b></font> </td>
    <td width="30"> </td>
    <td width="22">&nbsp;</td>
    <td width="160">&nbsp;</td>
    <td width="30">&nbsp;</td>
    <td width="21">&nbsp;</td>
  </tr>
  <tr> 
    <td width="160"> 
      <div id="quarts" > 
        <?php	 echo $clubA8004; ?>
      </div>
    </td>
    <td width="30"> 
      <div id="quarts" > 
        <?php echo $A8004; ?>
      </div>
    </td>
    <td width="32">&nbsp;</td>
    <td width="160"></td>
    <td width="30">&nbsp;</td>
    <td width="21">&nbsp;</td>
    <td width="160"> 
      <div id="quarts" > 
        <?php echo $clubA2001; ?>
      </div>
    </td>
    <td width="30"> 
      <div id="quarts" > 
        <?php echo $A2001; ?>
      </div>
    </td>
    <td width="22">&nbsp;</td>
    <td width="160">&nbsp;</td>
    <td width="30">&nbsp;</td>
    <td width="21">&nbsp;</td>
  </tr>
  <tr> 
    <td width="160" height="22"></td>
    <td width="30" height="22"></td>
    <td width="32" height="22">&nbsp;</td>
    <td width="160" height="22">&nbsp;</td>
    <td width="30" height="22">&nbsp;</td>
    <td width="21" height="22">&nbsp;</td>
    <td width="160" align="left" height="22"> 
      <div id="quarts" > 
        <?php echo $clubA2002; ?>
      </div>
    </td>
    <td width="30" height="22"> 
      <div id="quarts" > 
        <?php echo $A2002; ?>
      </div>
    </td>
    <td width="22" height="22">&nbsp;</td>
    <td colspan="3" height="22">&nbsp;</td>
  </tr>
  <tr> 
    <td width="160" height="22"> 
      <div id="quarts" > 
        <?php	 echo $clubA8005; ?>
      </div>
    </td>
    <td width="30" height="22"> 
      <div id="quarts" > 
        <?php echo $A8005; ?>
      </div>
    </td>
    <td width="32" height="22">&nbsp;</td>
    <td width="160" height="22"><font size="2" face="Arial, Helvetica, sans-serif"><b><i><strong> 
      <?php//	 echo $quart2; ?>
      </strong></i></b></font></td>
    <td width="30" height="22">&nbsp;</td>
    <td width="21" height="22">&nbsp;</td>
    <td width="160" align="left" height="22">&nbsp;</td>
    <td width="30" height="22">&nbsp;</td>
    <td width="22" height="22">&nbsp;</td>
    <td colspan="3" height="22">&nbsp;</td>
  </tr>
  <tr> 
    <td width="160" height="22"> 
      <div id="quarts" > 
        <?php	 echo $clubA8006; ?>
      </div>
    </td>
    <td width="30" height="22"> 
      <div id="quarts" > 
        <?php echo $A8006; ?>
      </div>
    </td>
    <td width="32" height="22">&nbsp;</td>
    <td width="160" height="22"> 
      <div id="quarts" > 
        <?php echo $clubA4003;?>
      </div>
    </td>
    <td width="30" height="22"> 
      <div id="quarts" > 
        <?php echo $A4003;  ?>
      </div>
    </td>
    <td width="21" height="22">&nbsp;</td>
    <td width="160" align="left" height="22">&nbsp;</td>
    <td width="30" height="22">&nbsp;</td>
    <td width="22" height="22">&nbsp;</td>
    <td colspan="3" height="22"></td>
  </tr>
  <tr> 
    <td width="160" height="11"> </td>
    <td width="30" height="11"> </td>
    <td width="32">&nbsp;</td>
    <td width="160"> 
      <div id="quarts" > 
        <?php echo $clubA4004;?>
      </div>
    </td>
    <td width="30"> 
      <div id="quarts" > 
        <?php 	echo $A4004;  ?>
      </div>
    </td>
    <td width="21">&nbsp;</td>
    <td width="160" align="left">&nbsp;</td>
    <td width="30">&nbsp;</td>
    <td width="22">&nbsp;</td>
    <td width="160"><font size="2" face="Arial, Helvetica, sans-serif"><b><i><strong> 
      <?php// echo $finale; ?>
      </strong></i></b></font> </td>
    <td width="30"> </td>
    <td width="21">&nbsp;</td>
  </tr>
  <tr> 
    <td width="160" height="11"> 
      <div id="quarts" > 
        <?php echo $clubA8007; ?>
      </div>
    </td>
    <td width="30" height="11"> 
      <div id="quarts" > 
        <?php echo $A8007; ?>
      </div>
    </td>
    <td width="32" height="11">&nbsp;</td>
    <td width="160" height="11">&nbsp;</td>
    <td width="30" height="11">&nbsp;</td>
    <td width="21" height="11">&nbsp;</td>
    <td width="160" height="11" align="left">&nbsp;</td>
    <td width="30" height="11">&nbsp;</td>
    <td width="22" height="11">&nbsp;</td>
    <td width="160" height="11"> 
      <div id="quarts" > 
        <?php echo $clubA1001;  ?>
      </div>
    </td>
    <td width="30" height="11"> 
      <div id="quarts" > 
        <?php echo $A1001; ?>
      </div>
    </td>
    <td width="21" height="11">&nbsp;</td>
  </tr>
  <tr> 
    <td width="160" height="16"> 
      <div id="quarts" > 
        <?php echo $clubA8008; ?>
      </div>
    </td>
    <td width="30" height="16"> 
      <div id="quarts" > 
        <?php echo $A8008; ?>
      </div>
    </td>
    <td width="32" height="16">&nbsp;</td>
    <td width="160" height="16">&nbsp;</td>
    <td width="30" height="16">&nbsp;</td>
    <td width="21" height="16">&nbsp;</td>
    <td width="160" align="left" height="16">&nbsp;</td>
    <td width="30" height="16">&nbsp;</td>
    <td height="16">&nbsp; </td>
    <td height="16"> 
      <div id="quarts" > 
        <?php echo $clubA1002;  ?>
      </div>
    </td>
    <td height="16"> 
      <div id="quarts" > 
        <?php echo $A1002;  ?>
      </div>
    </td>
    <td height="16">&nbsp;</td>
  </tr>
  <tr> 
    <td width="160" height="27"> </td>
    <td width="30" height="27">&nbsp; </td>
    <td width="32" height="27">&nbsp;</td>
    <td width="160" height="27">&nbsp;</td>
    <td width="30" height="27">&nbsp;</td>
    <td width="21" height="27">&nbsp;</td>
    <td width="160" align="left" height="27">&nbsp;</td>
    <td width="30" height="27">&nbsp;</td>
    <td colspan="4" height="27"> </td>
  </tr>
  <tr valign="top"> 
    <td width="160" height="14"> 
      <div id="quarts" > 
        <?php echo $clubA8009; ?>
      </div>
    </td>
    <td width="30" height="14"> 
      <div id="quarts" > 
        <?php echo $A8009; ?>
      </div>
    </td>
    <td width="32" height="14">&nbsp;</td>
    <td width="160" height="14">&nbsp;</td>
    <td width="30" height="14">&nbsp;</td>
    <td width="21" height="14">&nbsp;</td>
    <td width="160" height="14" align="left"></td>
    <td width="30" height="14">&nbsp;</td>
    <td colspan="4" height="14">&nbsp;</td>
  </tr>
  <tr valign="top"> 
    <td width="160" height="6"> 
      <div id="quarts" > 
        <?php echo $clubA8010; ?>
      </div>
    </td>
    <td width="30" height="6"> 
      <div id="quarts" > 
        <?php echo $A8010; ?>
      </div>
    </td>
    <td width="32" height="6">&nbsp;</td>
    <td width="160" height="6"><font size="2" face="Arial, Helvetica, sans-serif"> 
      <b><i><strong> 
      <?php//	 echo $quart3; ?>
      </strong></i></b><strong> </strong> </font></td>
    <td width="30" height="6">&nbsp;</td>
    <td width="21" height="6">&nbsp;</td>
    <td width="160" height="6" align="left"></td>
    <td width="30" height="6">&nbsp;</td>
    <td colspan="4">&nbsp; </td>
  </tr>
  <tr> 
    <td width="160"> </td>
    <td width="30"> </td>
    <td width="32">&nbsp;</td>
    <td width="160"> 
      <div id="quarts" > 
        <?php echo $clubA4005;?>
      </div>
    </td>
    <td width="30"> 
      <div id="quarts" > 
        <?php echo $A4005;  ?>
      </div>
    </td>
    <td width="21">&nbsp;</td>
    <td width="160" align="left">&nbsp;</td>
    <td width="30">&nbsp;</td>
    <td colspan="4">&nbsp;</td>
  </tr>
  <tr> 
    <td width="160" height="20"> 
      <div id="quarts" > 
        <?php	 echo $clubA8011; ?>
      </div>
    </td>
    <td width="30" height="20"> 
      <div id="quarts" > 
        <?php	 echo $A8011; ?>
      </div>
    </td>
    <td width="32" height="20">&nbsp;</td>
    <td width="160" height="20"> 
      <div id="quarts" > 
        <?php	 echo $clubA4006; ?>
      </div>
    </td>
    <td width="30" height="20"> 
      <div id="quarts" > 
        <?php 	echo $A4006; ?>
      </div>
    </td>
    <td width="21" height="20">&nbsp;</td>
    <td width="160" align="left" height="20"></td>
    <td width="30" height="20">&nbsp;</td>
    <td colspan="4">&nbsp;</td>
  </tr>
  <tr> 
    <td width="160" height="18"> 
      <div id="quarts" > 
        <?php echo $clubA8012; ?>
      </div>
    </td>
    <td width="30" height="18"> 
      <div id="quarts" > 
        <?php echo $A8012; ?>
      </div>
    </td>
    <td width="32" height="18">&nbsp;</td>
    <td width="160" height="18">&nbsp;</td>
    <td width="30" height="18">&nbsp;</td>
    <td width="21" height="18">&nbsp;</td>
    <td width="160" align="left" height="18"><font size="2" face="Arial, Helvetica, sans-serif"><b><i><strong> 
      <?php// echo $demi2; ?>
      </strong></i></b></font></td>
    <td width="30" height="18">&nbsp;</td>
    <td height="18" colspan="4"> 
      <div align="center"> </div>
    </td>
  </tr>
  <tr> 
    <td width="160">&nbsp;</td>
    <td width="30">&nbsp;</td>
    <td width="32">&nbsp;</td>
    <td width="160">&nbsp;</td>
    <td width="30">&nbsp;</td>
    <td width="21">&nbsp;</td>
    <td width="160" align="left"> 
      <div id="quarts" > 
        <?php echo $clubA2003; ?>
      </div>
    </td>
    <td width="30"> 
      <div id="quarts" > 
        <?php echo $A2003; ?>
      </div>
    </td>
    <td colspan="4">&nbsp;</td>
  </tr>
  <tr> 
    <td width="160"> 
      <div id="quarts" > 
        <?php echo $clubA8013; ?>
      </div>
    </td>
    <td width="30"> 
      <div id="quarts" > 
        <?php echo $A8013; ?>
      </div>
    </td>
    <td width="32">&nbsp;</td>
    <td width="160">&nbsp;</td>
    <td width="30">&nbsp;</td>
    <td width="21">&nbsp;</td>
    <td width="160" align="left"> 
      <div id="quarts" > 
        <?php echo $clubA2004; ?>
      </div>
    </td>
    <td width="30"> 
      <div id="quarts" > 
        <?php echo $A2004; ?>
      </div>
    </td>
    <td colspan="4">&nbsp;</td>
  </tr>
  <tr> 
    <td width="160"> 
      <div id="quarts" > 
        <?php echo $clubA8014; ?>
      </div>
    </td>
    <td width="30"> 
      <div id="quarts" > 
        <?php echo $A8014; ?>
      </div>
    </td>
    <td width="32">&nbsp;</td>
    <td width="160"> <strong><font size="2" face="Arial, Helvetica, sans-serif"><b><i><strong> 
      <?php//	 echo $quart4; ?>
      </strong></i></b></font> </strong></td>
    <td width="30">&nbsp;</td>
    <td width="21">&nbsp;</td>
    <td width="160" align="left"> </td>
    <td width="30"> </td>
    <td colspan="4">&nbsp;</td>
  </tr>
  <tr> 
    <td width="160"> </td>
    <td width="30">&nbsp; </td>
    <td width="32">&nbsp;</td>
    <td width="160"> 
      <div id="quarts" > 
        <?php echo $clubA4007; ?>
      </div>
    </td>
    <td width="30"> 
      <div id="quarts" > 
        <?php echo $A4007;  ?>
      </div>
    </td>
    <td width="21">&nbsp;</td>
    <td width="160" align="left">&nbsp;</td>
    <td width="30">&nbsp;</td>
    <td colspan="4">&nbsp;</td>
  </tr>
  <tr> 
    <td width="160" height="20"> 
      <div id="quarts" > 
        <?php echo $clubA8015; ?>
      </div>
    </td>
    <td width="30" height="20"> 
      <div id="quarts" > 
        <?php echo $A8015; ?>
      </div>
    </td>
    <td width="32" height="20">&nbsp;</td>
    <td width="160" height="20"> 
      <div id="quarts" > 
        <?php echo $clubA4008; ?>
      </div>
    </td>
    <td width="30" height="20"> 
      <div id="quarts" > 
        <?php echo $A4008; ?>
      </div>
    </td>
    <td width="21" height="20">&nbsp;</td>
    <td width="160" align="left" height="20">&nbsp;</td>
    <td width="30" height="20">&nbsp;</td>
    <td colspan="4" height="20">&nbsp;</td>
  </tr>
  <tr> 
    <td width="160" height="20"> 
      <div id="quarts" > 
        <?php echo $clubA8016; ?>
      </div>
    </td>
    <td width="30" height="20"> 
      <div id="quarts" > 
        <?php echo $A8016; ?>
      </div>
    </td>
    <td width="32" height="20">&nbsp;</td>
    <td width="160" height="20">&nbsp;</td>
    <td width="30" height="20">&nbsp;</td>
    <td width="21" height="20">&nbsp;</td>
    <td width="160" align="left" height="20">&nbsp;</td>
    <td width="30" height="20">&nbsp;</td>
    <td colspan="4" height="20">&nbsp;</td>
  </tr>
  <tr> 
    <td colspan="12"> 
      <hr />
    </td>
  </tr>
  <tr> 
    <td colspan="12" height="22"> 
      <div align="center"> 
        <?php require("../../pub/pub1.php"); ?>
      </div>
    </td>
  </tr>
</table>
