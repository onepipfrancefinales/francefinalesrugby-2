<?php
$bdcomiteClub = $comite.''."_clubs";
$entree=1601; $sortie=1616;

require ("../../connect1/connection2.php") ;
require ("../../phasesfinalesterr2019/fonctionspfterrESDL2019.php");
huitiemeAR2019($comite, $division, $annee, $bdd);

traitementScores ($entree, $sortie, $bdd);
afficheLieux ($division, $annee, $comite, $bdd);
?><head>

<link rel="stylesheet" type="text/css" href="../../phasesfinalesterr2019/qualification/qualification.css">
<link rel="stylesheet" type="text/css" href="../champTerr.css">

</head>



<table  border="0" align="left" height="500" cellspacing="0" width="91">
  <tr> 
    <td width="43"></td>
    <td width="25"></td>
    <td width="21"></td>
    <td width="1"></td>
    <td width="52"></td>
    <td width="17"></td>
    <td width="1"></td>
    <td width="5"></td>
    <td width="40"></td>
    <td width="17"></td>
    <td width="1"></td>
    <td width="69"></td>
    <td width="17"></td>
    <td width="1"></td>
    
    <td height="166" valign="top" rowspan="28" width="17"> 
      <?php  
	     if ($annee ==2020)
			{
		include("../../phasesfinalesterr2019/qualification/Qph.php"); 
		}
		else
		{
		 require("../../pub/pub10.php");   
		  } 
		    ?>
    </td>
  </tr>
  <tr> 
    <td width="43"> 
      <div class="affichageTitre" >8me de finale </div>
    </td>
    <td width="25"></td>
    <td width="21"></td>
    <td width="1"></td>
    <td colspan="2"> 
      <div class="affichageTitre" >Quarts de finale<br>
        AR</div>
    </td>
    <td width="1"></td>
    <td width="5"></td>
    <td width="40"> 
      <div class="affichageTitre" >Demi finale</div>
    </td>
    <td width="17"></td>
    <td width="1"></td>
    <td width="69"> 
      <div class="affichageTitre" >Finale</div>
    </td>
    <td width="17"></td>
    <td width="1"></td>
  </tr>
  <tr> 
    <td width="43" height="13">&nbsp;</td>
    <td width="25" height="18">&nbsp;</td>
    <td width="21" height="18">&nbsp;</td>
    <td width="1"></td>
    <td width="52"></td>
    <td width="17"></td>
    <td width="1"></td>
    <td width="5"></td>
    <td width="40"></td>
    <td width="17"></td>
    <td width="1"></td>
    <td width="69"></td>
    <td width="17"></td>
    <td width="1"></td>
  </tr>
  <tr> 
    <td width="43" height="13">&nbsp;</td>
    <td width="25" height="18"> 
     
    </td>
    <td width="21" height="18"> 
     
    </td>
    <td width="1"></td>
    <td width="52"></td>
    <td width="17"></td>
    <td width="1"></td>
    <td width="5"></td>
    <td width="40"></td>
    <td width="17"></td>
    <td width="1"></td>
    <td width="69"></td>
    <td width="17"></td>
    <td width="1"></td>
  </tr>
  <tr> 
    <td width="43" height="13"> 
      <div class="affichageEquipe" > 
        <?php	 echo $clubA8001; ?>
      </div>
    </td>
    <td width="25" height="18"> 
      <div class="affichageGA" > 
        <?php echo $A8001; ?>
      </div>
    </td>
    <td width="21" height="18"> 
     
    </td>
    <td width="1" height="18">&nbsp;</td>
    <td width="52" height="18"> <font size="2" face="Arial, Helvetica, sans-serif"><b><i> 
      <strong> 
      <?php	 echo $L4001; ?>
      </strong></i></b></font> </td>
    <td width="17" height="18"> 
      <div class="affichagePts" >Pts</div>
    </td>
    <td width="1" height="18"> 
      <div class="affichageGA" >Ga</div>
    </td>
    <td width="5" height="18">&nbsp;</td>
    <td width="40" height="18" align="left">&nbsp;</td>
    <td width="17" height="18">&nbsp;</td>
    <td width="1" height="18">&nbsp;</td>
    <td width="69" height="18">&nbsp;</td>
    <td width="17" height="18">&nbsp;</td>
    <td width="1" height="18">&nbsp;</td>
  </tr>
  <tr> 
    <td width="43"> 
      <div class="affichageEquipe" > 
        <?php	 echo $clubA8002; ?>
      </div>
    </td>
    <td width="25"> 
      <div class="affichageGA" > 
        <?php	 echo $A8002; ?>
      </div>
    </td>
    <td width="21"> 
      
    </td>
    <td width="1">&nbsp;</td>
    <td width="52">
<div class="affichageEquipe" >
        <?php echo $clubA16001; ?>
      </div>
    </td>
    <td width="17"> 
      <div class="affichagePts" > 
        <?php 	echo $A1601; ?>
      </div>
    </td>
    <td width="1"> 
      <div class="affichageGA" > 
        <?php 	echo $A4001; ?>
      </div>
    </td>
    <td width="5"></td>
    <td width="40"></td>
    <td width="17"></td>
    <td width="1"></td>
    <td width="69"></td>
    <td width="17"></td>
    <td width="1"></td>
  </tr>
  <tr> 
    <td width="43"></td>
    <td width="25"></td>
    <td width="21"></td>
    <td width="1"></td>
    <td width="52" height="15"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA16002;  ?>
      </div>
    </td>
    <td width="17" height="15"> 
      <div class="affichagePts" > 
        <?php echo $A4002;  ?>
      </div>
    </td>
    <td width="1" height="15"> 
      <div class="affichageGA" > 
        <?php 	echo $A4001; ?>
      </div>
    </td>
    <td width="5"></td>
    <td width="40"></td>
    <td width="17"></td>
    <td width="1"></td>
    <td width="69"></td>
    <td width="17"></td>
    <td width="1"></td>
  </tr>
  <tr> 
    <td width="43"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA8003; ?>
      </div>
    </td>
    <td width="25"> 
      <div class="affichageGA" > 
        <?php echo $A8003; ?>
      </div>
    </td>
    <td width="21"> 
      
    </td>
    <td width="1"></td>
    <td width="52"></td>
    <td width="17"></td>
    <td width="1"></td>
    <td width="5"></td>
    <td width="40" align="left"><font size="2" face="Arial, Helvetica, sans-serif"><b><i><strong> 
      <?php echo $L2001; ?>
      </strong></i></b></font> </td>
    <td width="17"></td>
    <td width="1"></td>
    <td width="69"></td>
    <td width="17"></td>
    <td width="1">&nbsp;</td>
  </tr>
  <tr> 
    <td width="43"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA8004; ?>
      </div>
    </td>
    <td width="25"> 
      <div class="affichageGA" > 
        <?php echo $A8004; ?>
      </div>
    </td>
    <td width="21"> 
     
    </td>
    <td width="1">&nbsp;</td>
    <td width="52"></td>
    <td width="17">&nbsp;</td>
    <td width="1">&nbsp;</td>
    <td width="5">&nbsp;</td>
    <td width="40"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA2001; ?>
      </div>
    </td>
    <td width="17"> 
      <div class="affichageGA" > 
        <?php echo $A2001; ?>
      </div>
    </td>
    <td width="1"></td>
    <td width="69"></td>
    <td width="17"></td>
    <td width="1"></td>
  </tr>
  <tr> 
    <td width="43"></td>
    <td width="25"></td>
    <td width="21"></td>
    <td width="1"></td>
    <td width="52" height="22">&nbsp;</td>
    <td width="17" height="22">&nbsp;</td>
    <td width="1" height="22">&nbsp;</td>
    <td width="5" height="22">&nbsp;</td>
    <td width="40" align="left" height="22"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA2002; ?>
      </div>
    </td>
    <td width="17" height="22"> 
      <div class="affichageGA" > 
        <?php echo $A2002; ?>
      </div>
    </td>
    <td width="1"></td>
    <td width="69"></td>
    <td width="17"></td>
    <td width="1"></td>
  </tr>
  <tr> 
    <td width="43" height="22"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA8005; ?>
      </div>
    </td>
    <td width="25" height="22"> 
      <div class="affichageGA" > 
        <?php echo $A8005; ?>
      </div>
    </td>
    <td width="21" height="22"> 
      
    </td>
    <td width="1" height="22">&nbsp;</td>
    <td width="52" height="22"><font size="2" face="Arial, Helvetica, sans-serif"><b><i><strong> 
      <?php	 echo $L4003; ?>
      </strong></i></b></font></td>
    <td width="17"></td>
    <td width="1"></td>
    <td width="5"></td>
    <td width="40"></td>
    <td width="17"></td>
    <td width="1"></td>
    <td width="69"></td>
    <td width="17"></td>
    <td width="1"></td>
  </tr>
  <tr> 
    <td width="43" height="22"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA8006; ?>
      </div>
    </td>
    <td width="25" height="22"> 
      <div class="affichageGA" > 
        <?php echo $A8006; ?>
      </div>
    </td>
    <td width="21" height="22"> 
      
    </td>
    <td width="1" height="22">&nbsp;</td>
    <td width="52" height="22">
<div class="affichageEquipe" >
        <?php echo $clubA16003;  ?>
      </div>
    </td>
    <td width="17" height="22"> 
      <div class="affichagePts" > 
        <?php echo $A4003;  ?>
      </div>
    </td>
    <td width="1" height="22"> 
      <div class="affichageGA" > 
        <?php 	echo $A4001; ?>
      </div>
    </td>
    <td width="5"></td>
    <td width="40"></td>
    <td width="17"></td>
    <td width="1"></td>
    <td width="69"></td>
    <td width="17"></td>
    <td width="1"></td>
  </tr>
  <tr> 
    <td width="43"></td>
    <td width="25"></td>
    <td width="21"></td>
    <td width="1"></td>
    <td width="52"> 
      <div class="affichageEquipe" > 
        <?php 	echo $clubA16004;  ?>
      </div>
    </td>
    <td width="17"> 
      <div class="affichagePts" > 
        <?php 	echo $A4004;  ?>
      </div>
    </td>
    <td width="1"> 
      <div class="affichageGA" > 
        <?php 	echo $A4001; ?>
      </div>
    </td>
    <td width="5"></td>
    <td width="40"></td>
    <td width="17"></td>
    <td width="1"></td>
    <td width="69"><font size="2" face="Arial, Helvetica, sans-serif"><b><i><strong> 
      <?php // echo $finale; ?>
      </strong></i></b></font> </td>
    <td width="17"> </td>
    <td width="1">&nbsp;</td>
  </tr>
  <tr> 
    <td width="43"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA8007; ?>
      </div>
    </td>
    <td width="25"> 
      <div class="affichageGA" > 
        <?php echo $A8007; ?>
      </div>
    </td>
    <td width="21"> 
     
    </td>
    <td width="1"></td>
    <td width="52"></td>
    <td width="17"></td>
    <td width="1"></td>
    <td width="5"></td>
    <td width="40"></td>
    <td width="17"></td>
    <td width="1"></td>
    <td width="69"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA1001;  ?>
      </div>
    </td>
    <?php echo $A1001; ?>
    <td width="17"> 
      <div class="affichageGA" > 
        <?php echo $A1001;  ?>
      </div>
    </td>
    <td width="1"></td>
  </tr>
  <tr> 
    <td width="43"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA8008; ?>
      </div>
    </td>
    <td width="25"> 
      <div class="affichageGA" > 
        <?php echo $A8008; ?>
      </div>
    </td>
    <td width="21"> 
     
    </td>
    <td width="1"></td>
    <td width="52"></td>
    <td width="17"></td>
    <td width="1"></td>
    <td width="5"></td>
    <td width="40"></td>
    <td width="17"></td>
    <td width="1"></td>
    <td width="69"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA1002;  ?>
      </div>
    </td>
    <td width="17"> 
      <div class="affichageGA" > 
        <?php echo $A1002;  ?>
      </div>
    </td>
    <td width="1"></td>
  </tr>
  <tr> 
    <td width="43"></td>
    <td width="25"></td>
    <td width="21"></td>
    <td width="1"></td>
    <td width="52"></td>
    <td width="17"></td>
    <td width="1"></td>
    <td width="5"></td>
    <td width="40"></td>
    <td width="17"></td>
    <td width="1"></td>
    <td width="69"></td>
    <td width="17"></td>
    <td width="1"></td>
  </tr>
  <tr valign="top"> 
    <td width="43">&nbsp;</td>
    <td width="25">&nbsp;</td>
    <td width="21">&nbsp;</td>
    <td width="1"></td>
    <td width="52"></td>
    <td width="17"></td>
    <td width="1"></td>
    <td width="5"></td>
    <td width="40"></td>
    <td width="17"></td>
    <td width="1"></td>
    <td width="69"></td>
    <td width="17"></td>
    <td width="1"></td>
  </tr>
  <tr valign="top"> 
    <td width="43"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA8009; ?>
      </div>
    </td>
    <td width="25"> 
      <div class="affichageGA" > 
        <?php echo $A8009; ?>
      </div>
    </td>
    <td width="21"> 
    
    </td>
    <td width="1"></td>
    <td width="52"></td>
    <td width="17"></td>
    <td width="1"></td>
    <td width="5"></td>
    <td width="40"></td>
    <td width="17"></td>
    <td width="1"></td>
    <td colspan="2"><font face="Arial, Helvetica, sans-serif" size="3"><b>Champion 
      <i><strong> 
      <?php // echo $nomDivision; ?>
      </strong></i></b></font></td>
    <td width="1"></td>
  </tr>
  <tr valign="top"> 
    <td width="43"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA8010; ?>
      </div>
    </td>
    <td width="25"> 
      <div class="affichageGA" > 
        <?php echo $A8010; ?>
      </div>
    </td>
    <td width="21"> </td>
    <td width="1"></td>
    <td width="52" height="6"><font size="2" face="Arial, Helvetica, sans-serif"> 
      <b><i><strong> 
      <?php	 echo $L4005; ?>
      </strong></i></b><strong> </strong> </font></td>
    <td width="17"></td>
    <td width="1"></td>
    <td width="5"></td>
    <td width="40"></td>
    <td width="17"></td>
    <td width="1"></td>
    <td colspan="2"></td>
    <td width="1"></td>
  </tr>
  <tr> 
    <td width="43"></td>
    <td width="25"></td>
    <td width="21"></td>
    <td width="1"></td>
    <td width="52"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA16005;?>
      </div>
    </td>
    <td width="17"> 
      <div class="affichagePts" > 
        <?php echo $A4005;  ?>
      </div>
    </td>
    <td width="1"> 
      <div class="affichageGA" > 
        <?php 	echo $A1605; ?>
      </div>
    </td>
    <td width="5"></td>
    <td width="40"></td>
    <td width="17"></td>
    <td width="1"></td>
    <td colspan="2" rowspan="4"> 
      <div align="center"><img src="<?php // echo $champLogo;  ?>"></div>
    </td>
    <td width="1"></td>
  </tr>
  <tr> 
    <td width="43"> 
      <div class="affichageEquipe" > 
        <?php	 echo $clubA8011; ?>
      </div>
    </td>
    <td width="25"> 
      <div class="affichageGA" > 
        <?php	 echo $A8011; ?>
      </div>
    </td>
    <td width="21"> </td>
    <td width="1" height="20">&nbsp;</td>
    <td width="52"> 
      <div class="affichageEquipe" > 
        <?php	 echo $clubA16006; ?>
      </div>
    </td>
    <td width="17"> 
      <div class="affichagePts" > 
        <?php 	echo $A4006; ?>
      </div>
    </td>
    <td width="1"> 
      <div class="affichageGA"> 
        <?php 	echo $A1606; ?>
      </div>
    </td>
    <td width="5"></td>
    <td width="40"></td>
    <td width="17"></td>
    <td width="1"></td>
    <td width="1"></td>
  </tr>
  <tr> 
    <td width="43"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA8012; ?>
      </div>
    </td>
    <td width="25"> 
      <div class="affichageGA" > 
        <?php echo $A8012; ?>
      </div>
    </td>
    <td width="21"> </td>
    <td width="1"></td>
    <td width="52"></td>
    <td width="17"></td>
    <td width="1"></td>
    <td width="5"></td>
    <td width="40" align="left" height="18"><font size="2" face="Arial, Helvetica, sans-serif"><b><i><strong> 
      <?php echo $L2003; ?>
      </strong></i></b></font></td>
    <td width="17" height="18">&nbsp;</td>
    <td height="18" width="1"> 
      <div align="center"> </div>
    </td>
    <td width="1"></td>
  </tr>
  <tr> 
    <td width="43"></td>
    <td width="25"></td>
    <td width="21"></td>
    <td width="1"></td>
    <td width="52"></td>
    <td width="17"></td>
    <td width="1"></td>
    <td width="5"></td>
    <td width="40"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA2003; ?>
      </div>
    </td>
    <td width="17"> 
      <div class="affichageGA" > 
        <?php echo $A2003; ?>
      </div>
    </td>
    <td width="1"></td>
    <td width="1"></td>
  </tr>
  <tr> 
    <td width="43"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA8013; ?>
      </div>
    </td>
    <td width="25"> 
      <div class="affichagePts" > 
        <?php echo $A8013; ?>
      </div>
    </td>
    <td width="21"> </td>
    <td width="1"></td>
    <td width="52"></td>
    <td width="17"></td>
    <td width="1"></td>
    <td width="5"></td>
    <td width="40"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA2004; ?>
      </div>
    </td>
    <td width="17"> 
      <div class="affichageGA" > 
        <?php echo $A2004; ?>
      </div>
    </td>
    <td width="1"></td>
    <td colspan="2" rowspan="2"> 
      <div align="center"><b><font color="#000000" size="5" face="Arial, Helvetica, sans-serif"> 
        <?php  echo $champion;   ?>
        </font></b></div>
    </td>
    <td width="1"></td>
  </tr>
  <tr> 
    <td width="43"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA8014; ?>
      </div>
    </td>
    <td width="25"> 
      <div class="affichagePts" > 
        <?php echo $A8014; ?>
      </div>
    </td>
    <td width="21"> </td>
    <td width="1"> 
    <td width="52"> <strong><font size="2" face="Arial, Helvetica, sans-serif"><b><i><strong> 
      <?php echo $L4007; ?>
      </strong></i></b></font> </strong></td>
    <td width="17"></td>
    <td width="1"></td>
    <td width="5"></td>
    <td width="40"></td>
    <td width="17"></td>
    <td width="1"></td>
    <td width="1"></td>
  </tr>
  <tr> 
    <td width="43"></td>
    <td width="25"></td>
    <td width="21"></td>
    <td width="1"></td>
    <td width="52"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA1607; ?>
      </div>
    </td>
    <td width="17"> 
      <div class="affichagePts" > 
        <?php echo $A4007;  ?>
      </div>
    </td>
    <td width="1"> 
      <div class="affichageGA" > 
        <?php 	echo $A1607; ?>
      </div>
    </td>
    <td width="5"></td>
    <td width="40"></td>
    <td width="17"></td>
    <td width="1"></td>
    <td width="69"></td>
    <td width="17"></td>
    <td width="1"></td>
  </tr>
  <tr> 
    <td width="43"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA8015; ?>
      </div>
    </td>
    <td width="25"> 
      <div class="affichagePts" > 
        <?php echo $A8015; ?>
      </div>
    </td>
    <td width="21"> </td>
    <td width="1" height="20">&nbsp;</td>
    <td width="52"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA16008; ?>
      </div>
    </td>
    <td width="17"> 
      <div class="affichagePts" > 
        <?php echo $A4008; ?>
      </div>
    </td>
    <td width="1"> 
      <div class="affichageGA" > 
        <?php 	echo $A1608; ?>
      </div>
    </td>
    <td width="5"></td>
    <td width="40"></td>
    <td width="17"></td>
    <td width="1"></td>
    <td width="69"></td>
    <td width="17"></td>
    <td width="1"></td>
    <td width="0"></td>
  </tr>
  <tr> 
    <td width="43"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA8016; ?>
      </div>
    </td>
    <td width="25"> 
      <div class="affichagePts" > 
        <?php echo $A8016; ?>
      </div>
    </td>
    <td width="21"> </td>
    <td width="1"></td>
    <td width="52"></td>
    <td width="17"></td>
    <td width="1"></td>
    <td width="5"></td>
    <td width="40"></td>
    <td width="17"></td>
    <td width="1"></td>
    <td width="69"></td>
    <td width="17"></td>
    <td width="1"></td>
    <td width="0"></td>
  </tr>
  <tr> 
    <td colspan="16">&nbsp;</td>
  </tr>
  <tr bgcolor="#FFCC66"> 
    <td colspan="16">&nbsp; </td>
  </tr>
  <tr> 
    <td colspan="16" height="22"> 
      <div align="center"> 
        <?php require("../../pub/pub1.php"); ?>
      </div>
    </td>
  </tr>
</table>
