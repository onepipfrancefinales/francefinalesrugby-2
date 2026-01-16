<?php
if (isset ($bdcomiteClub)) $$bdcomiteClub = $bdcomiteClub; else $bdcomiteClub='-';

$anneemoins = $annee-1;
$anneeplus = $annee+1;

require ("../fonctionspfterrESDL.php");
quarts($bdcomiteClub, $division, $annee, $bdd);
?>


<head>

<link rel="stylesheet" type="text/css" href="../champTerr.css">

</head>




<body bgcolor="#EAECEB">
<table width="1000" border="0" align="left" height="500" cellspacing="0">
  <tr> 
    <td height="13" bgcolor="#FFCC66" colspan="11"><i><b> 
      <?php affichage($division); ?>
      </b></i></td>
  </tr>
  <tr> 
    <td width="30" height="18"> </td>
    <td width="32" height="18">&nbsp;</td>
    <td width="160" height="18"> <font size="2" face="Arial, Helvetica, sans-serif"><b><i> 
      <strong> 
      <?php echo $L4001; ?>
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
    <td width="30"> </td>
    <td width="32">&nbsp;</td>
    <td width="160"><div class="affichageEquipe" ><?php echo $clubA4001; ?></div></td>
    <td width="30"><div class="affichageGA" ><?php echo $A4001; ?></div></td>
    <td width="21">&nbsp;</td>
    <td width="160" align="left">&nbsp;</td>
    <td width="30">&nbsp;</td>
    <td width="22">&nbsp;</td>
    <td width="160">&nbsp;</td>
    <td width="30">&nbsp;</td>
    <td width="21">&nbsp;</td>
  </tr>
  <tr> 
    <td width="30" height="15"></td>
    <td width="32" height="15"></td>
    <td width="160" height="15"><div class="affichageEquipe" ><?php echo $clubA4002; ?></div></td>
    <td width="30" height="15"><div class="affichageGA" ><?php echo $A4002;  ?></div></td>
    <td width="21" height="15">&nbsp;</td>
    <td width="160" align="left" height="15"></td>
    <td width="30" height="15">&nbsp;</td>
    <td width="22" height="15">&nbsp;</td>
    <td width="160" height="15">&nbsp;</td>
    <td width="30" height="15">&nbsp;</td>
    <td width="21" height="15">&nbsp;</td>
  </tr>
  <tr> 
    <td width="30"> </td>
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
    <td width="30"> </td>
    <td width="32">&nbsp;</td>
    <td width="160"></td>
    <td width="30">&nbsp;</td>
    <td width="21">&nbsp;</td>
    <td width="160"><div id="quarts" ><?php echo $clubA2001; ?></div></td>
    <td width="30"><div id="quarts" ><?php echo $A2001; ?></div></td>
    <td width="22">&nbsp;</td>
    <td width="160">&nbsp;</td>
    <td width="30">&nbsp;</td>
    <td width="21">&nbsp;</td>
  </tr>
  <tr> 
    <td width="30" height="22"></td>
    <td width="32" height="22">&nbsp;</td>
    <td width="160" height="22">&nbsp;</td>
    <td width="30" height="22">&nbsp;</td>
    <td width="21" height="22">&nbsp;</td>
    <td width="160" align="left" height="22"><div id="quarts" ><?php echo $clubA2002; ?></div></td>
    <td width="30" height="22"><div id="quarts" ><?php echo $A2002; ?></div></td>
    <td width="22" height="22">&nbsp;</td>
    <td colspan="3" height="22">&nbsp;</td>
  </tr>
  <tr> 
    <td width="30" height="22"> </td>
    <td width="32" height="22">&nbsp;</td>
    <td width="160" height="22"><font size="2" face="Arial, Helvetica, sans-serif"><b><i><strong><?php echo $L4003; ?></strong></i></b></font></td>
    <td width="30" height="22">&nbsp;</td>
    <td width="21" height="22">&nbsp;</td>
    <td width="160" align="left" height="22">&nbsp;</td>
    <td width="30" height="22">&nbsp;</td>
    <td width="22" height="22">&nbsp;</td>
    <td colspan="3" height="22">&nbsp;</td>
  </tr>
  <tr> 
    <td width="30" height="22"> </td>
    <td width="32" height="22">&nbsp;</td>
    <td width="160" height="22"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA4003;?>
      </div>
    </td>
    <td width="30" height="22"> 
      <div class="affichageGA" > 
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
    <td width="30" height="11"> </td>
    <td width="32">&nbsp;</td>
    <td width="160"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA4004;?>
      </div>
    </td>
    <td width="30"> 
      <div class="affichageGA" > 
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
    <td width="30" height="11"> </td>
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
    <td width="30" height="16"> </td>
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
    <td width="30" height="14"> </td>
    <td width="32" height="14">&nbsp;</td>
    <td width="160" height="14">&nbsp;</td>
    <td width="30" height="14">&nbsp;</td>
    <td width="21" height="14">&nbsp;</td>
    <td width="160" height="14" align="left"></td>
    <td width="30" height="14">&nbsp;</td>
    <td colspan="4" height="14">&nbsp;</td>
  </tr>
  <tr valign="top"> 
    <td width="30" height="6"> </td>
    <td width="32" height="6">&nbsp;</td>
    <td width="160" height="6"><font size="2" face="Arial, Helvetica, sans-serif"> 
      <b><i><strong> 
      <?php echo $L4005; ?>
      </strong></i></b><strong> </strong> </font></td>
    <td width="30" height="6">&nbsp;</td>
    <td width="21" height="6">&nbsp;</td>
    <td width="160" height="6" align="left"></td>
    <td width="30" height="6">&nbsp;</td>
    <td colspan="4"> 
      <?php logo ($bdcomiteClub, $champion); ?>
    </td>
  </tr>
  <tr> 
    <td width="30"> </td>
    <td width="32">&nbsp;</td>
    <td width="160"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA4005;?>
      </div>
    </td>
    <td width="30"> 
      <div class="affichageGA" > 
        <?php echo $A4005;  ?>
      </div>
    </td>
    <td width="21">&nbsp;</td>
    <td width="160" align="left">&nbsp;</td>
    <td width="30">&nbsp;</td>
    <td colspan="4">&nbsp;</td>
  </tr>
  <tr> 
    <td width="30" height="20"> </td>
    <td width="32" height="20">&nbsp;</td>
    <td width="160" height="20"><div class="affichageEquipe" ><?php echo $clubA4006; ?></div></td>
    <td width="30" height="20"><div class="affichageGA" ><?php 	echo $A4006; ?></div></td>
    <td width="21" height="20">&nbsp;</td>
    <td width="160" align="left" height="20"></td>
    <td width="30" height="20">&nbsp;</td>
    <td colspan="4">&nbsp;</td>
  </tr>
  <tr> 
    <td width="30" height="18"> </td>
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
    <td width="30" height="20">&nbsp;</td>
    <td width="32" height="20">&nbsp;</td>
    <td width="160" height="20">&nbsp;</td>
    <td width="30" height="20">&nbsp;</td>
    <td width="21" height="20">&nbsp;</td>
    <td width="160" align="left" height="20"> 
      <div id="quarts" > 
        <?php echo $clubA2003; ?>
      </div>
    </td>
    <td width="30" height="20"> 
      <div id="quarts" > 
        <?php echo $A2003; ?>
      </div>
    </td>
    <td colspan="4" height="20">&nbsp;</td>
  </tr>
  <tr> 
    <td width="30"> </td>
    <td width="32">&nbsp;</td>
    <td width="160">&nbsp;</td>
    <td width="30">&nbsp;</td>
    <td width="21">&nbsp;</td>
    <td width="160" align="left"><div id="quarts" ><?php echo $clubA2004; ?></div></td>
    <td width="30"><div id="quarts" ><?php echo $A2004; ?></div></td>
    <td colspan="4">&nbsp;</td>
  </tr>
  <tr> 
    <td width="30"> </td>
    <td width="32">&nbsp;</td>
    <td width="160"> <strong><font size="2" face="Arial, Helvetica, sans-serif"><b><i><strong> 
      <?php echo $L4007; ?></strong></i></b></font> </strong></td>
    <td width="30">&nbsp;</td>
    <td width="21">&nbsp;</td>
    <td width="160" align="left"> </td>
    <td width="30"> </td>
    <td colspan="4">&nbsp;</td>
  </tr>
  <tr> 
    <td width="30">&nbsp; </td>
    <td width="32">&nbsp;</td>
    <td width="160"><div class="affichageEquipe" ><?php echo $clubA4007; ?></div></td>
    <td width="30"><div class="affichageGA" ><?php echo $A4007;  ?></div></td>
    <td width="21">&nbsp;</td>
    <td width="160" align="left">&nbsp;</td>
    <td width="30">&nbsp;</td>
    <td colspan="4">&nbsp;</td>
  </tr>
  <tr> 
    <td width="30" height="20"> </td>
    <td width="32" height="20">&nbsp;</td>
    <td width="160" height="20"><div class="affichageEquipe" ><?php echo $clubA4008; ?> </div></td>
    <td width="30" height="20"><div class="affichageGA" ><?php echo $A4008; ?></div></td>
    <td width="21" height="20">&nbsp;</td>
    <td width="160" align="left" height="20">&nbsp;</td>
    <td width="30" height="20">&nbsp;</td>
    <td colspan="4" height="20">&nbsp;</td>
  </tr>
  <tr> 
    <td width="30" height="20"> </td>
    <td width="32" height="20">&nbsp;</td>
    <td width="160" height="20">&nbsp;</td>
    <td width="30" height="20">&nbsp;</td>
    <td width="21" height="20">&nbsp;</td>
    <td width="160" align="left" height="20">&nbsp;</td>
    <td width="30" height="20">&nbsp;</td>
    <td colspan="4" height="20">&nbsp;</td>
  </tr>
  <tr> 
    <td colspan="11"><hr /></td>
  </tr>
  <tr> 
    <td colspan="11" height="22"> 
      <?php require("../../pub/pub1.php"); ?>
    </td>
  </tr>
</table>
