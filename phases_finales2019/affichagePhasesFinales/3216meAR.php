<table width="2000" border="0" align="left" height="500" cellspacing="0">
  <tr> 
    <td  bgcolor="#FFCC66" colspan="19"> 
      <div align="center"><i><b> </b></i></div>
    </td>
  </tr>
  <tr> 
    <td colspan="2"> 
      <div class="coin5-32BarrageFed3" > 
        <?php if (substr($type,0,1)== 7 and $annee > 2021){?>
        <a href="javascript:ouvrirPopup('barrages.php?annee=<?php echo $annee; ?>&division=7160','','top=10, right=10,resizable=no, directories=no, statut=no, location=no, width=330, height=600, menubar=no')"><font color="#FFFFFF">Barrages accès aux 32me</font></a> 
        <?php } ?>
      </div>
    </td>
    <td></td>
    <td colspan="2"> 
      <div class="coin5Barrage" > 
        <?php if (substr($type,0,1)== 7 and $annee == 2022){?>
        <a href="javascript:ouvrirPopup('barragesMontee.php?annee=<?php echo $annee; ?>&division=7161','','top=10, right=10,resizable=no, directories=no, statut=no, location=no, width=330, height=600, menubar=no')"><font color="#FFFFFF">Matchs de montée en Féd 2</font></a> 
        <?php } ?>
      </div>
    </td>
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
    <td></td>
  </tr>
  <tr> 
    <td colspan="2"> 
      <div class="coin5-32" >32me de finale (A/R)</div>
    </td>
    <td></td>
    <td colspan="2" > 
      <div class="coin5" >16me de finale (A/R)</div>
    </td>
    <td></td>
    <td></td>
    <td> 
      <div class="coin5" >8me de finale</div>
    </td>
    <td></td>
    <td></td>
    <td colspan="2" > <div class="coin5" >Quarts de finale</div></td>
    <td></td>
    <td colspan="2" align="left" ><div class="coin5" >Demi finale</div></td>
    <td></td>
    <td><div class="coin5" >Finale</div></td>
    <td></td>
    <td></td>
  </tr>
  <tr> 
    <td><div class="dates" ><?php echo $D32ME; ?></div></td>
    <td></td>
    <td></td>
    <td><div class="dates" ><?php echo $D16ME; ?></div></td>
    <td></td>
    <td></td>
    <td></td>
    <td><div class="dates" ><?php echo $D8ME; ?></div></td>
    <td></td>
    <td></td>
    <td><div class="dates" ><?php echo $D4ME; ?></div></td>
    <td></td>
    <td></td>
    <td><div class="dates" ><?php echo $D2ME; ?></div></td>
    <td></td>
    <td></td>
    <td><div class="dates" ><?php echo $D1ME; ?></div></td>
    <td></td>
    <td></td>
  </tr>
  <tr> 
    <td></td>
    <td> 
      <div align="center"><b><font face="Arial, Helvetica, sans-serif" size="3">Pts</font></b><font face="Arial, Helvetica, sans-serif" size="2"> 
        (GA)</font></div>
    </td>
    <td></td>
    <td> </td>
    <td valign="bottom"><b><font face="Arial, Helvetica, sans-serif" size="3">Pts</font></b></td>
    <td valign="bottom"><font face="Arial, Helvetica, sans-serif" size="2">(GA)</font></td>
    <td></td>
    <td> </td>
    <td></td>
    <td></td>
    <td> </td>
    <td></td>
    <td></td>
    <td> </td>
    <td></td>
    <td></td>
    <td> </td>
    <td></td>
    <td></td>
  </tr>
  <tr> 
    <td> 
      <div class="coin4-32" > 
        <?php echo $clubA3201; ?>
        - 
        <?php	echo $clubA3202; ?>
      </div>
    </td>
    <td> 
      <div class="coin4GA-32" > 
		<span class="Pts"><?php echo $A3201Pts;?></span> 
        <?php echo "( ".''. $A3201.''. ") -"; ?><span class="Pts"><?php echo $A3202Pts;?></span> 
        <?php echo "( ".''. $A3202.''. ")"; ?>
      </div>
    </td>
    <td  valign="middle" align="center"></td>
    <td> 
      <div class="coin4" > 
        <?php echo $clubA1601;?>
      </div>
    </td>
    <td><div class="ptsTerrain" ><?php echo $A1601Pts; ?></div></td>
    <td> 
      <div class="coin4GA" > 
        <?php echo $A1601; ?>
      </div>
    </td>
    <td rowspan="4" height="38" ><img src="../../images/accolade.png" alt ="accolade des 16me" width="8" height="82"> 
    </td>
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
    <td><div class="coin4-32" ><?php echo $clubA3203; ?> - <?php echo $clubA3204; ?></div></td>
    <td><div class="coin4GA-32" > 
	    <span class="Pts"><?php echo $A3203Pts;?></span> 
        <?php echo "( ".''. $A3203.''. ") -"; ?><span class="Pts"><?php echo $A3204Pts;?></span> 
        <?php echo "( ".''. $A3204.''. ")"; ?>
      </div>
    </td>
    <td></td>
    <td><div class="coin4" ><?php echo $clubA1602;?></div></td>
    <td><div class="ptsTerrain" ><?php echo $A1602Pts; ?></div></td>
    <td><div class="coin4GA" ><?php echo $A1602; ?></div></td>
    <td><div class="coin4" ><?php echo $clubA8001;?></div></td>
    <td><div class="coin4GA" ><?php echo $A8001; ?></div></td>
    <td rowspan="6" ><img src="../../images/accolade.png" alt ="accolade des 8me" width="8" height="127"></td>
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
    <td><div class="coin4-32" ><?php echo $clubA3205; ?> - <?php echo $clubA3206; ?></div></td>
    <td><div class="coin4GA-32" ><span class="Pts"><?php echo $A3205Pts;?></span> 
        <?php echo "( ".''. $A3205.''. ") -"; ?><span class="Pts"><?php echo $A3206Pts;?></span> 
        <?php echo "( ".''. $A3206.''. ")"; ?>
      </div>
    </td>
    <td></td>
    <td><div class="coin4"><?php echo $clubA1603;?></div></td>
    <td><div class="ptsTerrain"><?php echo $A1603Pts; ?></div></td>
    <td><div class="coin4GA"><?php echo $A1603; ?></div></td>
    <td><div class="coin4"><?php echo $clubA8002;?></div></td>
    <td><div class="coin4GA"><?php echo $A8002; ?></div></td>
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
    <td><div class="coin4-32"><?php	echo $clubA3207; ?> - <?php	echo $clubA3208; ?></div></td>
    <td><div class="coin4GA-32" ><span class="Pts"><?php echo $A3207Pts;?></span> 
        <?php echo "( ".''. $A3207.''. ") -"; ?>
		<span class="Pts"><?php echo $A3208Pts;?></span> 
        <?php echo "( ".''. $A3208.''. ")"; ?></div>
    </td>
    <td></td>
    <td><div class="coin4" ><?php echo $clubA1604;?></div></td>
    <td><div class="ptsTerrain" ><?php echo $A1604Pts; ?></div></td>
    <td><div class="coin4GA" ><?php	echo $A1604; ?></div></td>
    <td></td>
    <td></td>
    <td><div class="coin4" ><?php	echo $clubA4001; ?></div></td>
    <td><div class="coin4GA" ><?php	echo $A4001; ?></div></td>
    <td rowspan="10" height="43" ><img src="../../images/accolade.png" alt ="accolade des quarts" width="10" height="207"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr> 
    <td><div class="coin5-32" ><?php	echo $clubA3209; ?> - <?php	echo $clubA3210; ?></div></td>
    <td><div class="coin5GA-32" > <span class="Pts"><?php echo $A3209Pts;?></span> 
        <?php echo "( ".''. $A3209.''. ") -"; ?>
        <span class="Pts"><?php echo $A3210Pts;?></span> 
        <?php echo "( ".''. $A3210.''. ")"; ?>
      </div>
    </td>
    <td></td>
    <td><div class="coin5" ><?php echo $clubA1605;?></div></td>
    <td><div class="ptsTerrain5" ><?php echo $A1605Pts; ?></div></td>
    <td><div class="coin5GA" ><font size="2"><?php	echo $A1605; ?></font></div></td>
    <td rowspan="4" ><img src="../../images/accolade.png" alt ="accolade des 16me" width="8" height="82"></td>
    <td></td>
    <td></td>
    <td><div class="coin4" ><?php echo $clubA4002; ?></div></td>
    <td><div class="coin4GA" ><?php	echo $A4002; ?></div></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr> 
    <td><div class="coin5-32" ><?php echo $clubA3211; ?> - <?php	echo $clubA3212; ?></div></td>
    <td><div class="coin5GA-32" > <span class="Pts"><?php echo $A3211Pts;?></span> 
        <?php echo "( ".''. $A3211.''. ") -"; ?>
        <span class="Pts"><?php echo $A3212Pts;?></span> 
        <?php echo "( ".''. $A3212.''. ")"; ?>
      </div>
    </td>
    <td></td>
    <td><div class="coin5" ><?php echo $clubA1606;?></div></td>
    <td><div class="ptsTerrain5" ><?php echo $A1606Pts; ?></div></td>
    <td><div class="coin5GA" ><?php echo $A1606; ?></div></td>
    <td><div class="coin4" ><?php echo $clubA8003;?></div></td>
    <td><div class="coin4GA" ><?php echo $A8003; ?></div></td>
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
    <td><div class="coin5-32" ><?php	echo $clubA3213; ?> - <?php	echo $clubA3214; ?></div></td>
    <td><div class="coin5GA-32" > <span class="Pts"><?php echo $A3213Pts;?></span> 
        <?php echo "( ".''. $A3213.''. ") -"; ?>
        <span class="Pts"><?php echo $A3214Pts;?></span> 
        <?php echo "( ".''. $A3214.''. ")"; ?>
      </div>
    </td>
    <td></td>
    <td><div class="coin5" ><?php echo $clubA1607;?></div></td>
    <td><div class="ptsTerrain5" ><?php echo $A1607Pts; ?></div></td>
    <td><div class="coin5GA" ><?php	echo $A1607; ?></div></td>
    <td><div class="coin4" ><?php echo $clubA8004;?></div></td>
    <td><div class="coin4GA" ><?php	echo $A8004; ?></div></td>
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
    <td><div class="coin5-32" ><?php	echo $clubA3215; ?> - <?php	echo $clubA3216; ?></div></td>
    <td><div class="coin5GA-32" > <span class="Pts"><?php echo $A3215Pts;?></span> 
        <?php echo "( ".''. $A3215.''. ") -"; ?>
        <span class="Pts"><?php echo $A3216Pts;?></span> 
        <?php echo "( ".''. $A3216.''. ")"; ?>
      </div>
    </td>
    <td></td>
    <td><div class="coin5" ><?php echo $clubA1608;?></div></td>
    <td><div class="ptsTerrain5" ><?php	echo $A1608Pts; ?></div></td>
    <td><div class="coin5GA" ><?php	echo $A1608; ?></div></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td><div class="coin4" ><?php	echo $clubA2001; ?></div></td>
    <td><div class="coin4GA" ><?php	echo $A2001; ?></div></td>
    <td rowspan="18" ><img src="../../images/accolade.png" alt ="accolade des demi finale" width="10" height="383"></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr> 
    <td><div class="coin4-32" ><?php	echo $clubA3217; ?> - <?php	echo $clubA3218; ?></div></td>
    <td><div class="coin4GA-32" > <span class="Pts"><?php echo $A3217Pts;?></span> 
        <?php echo "( ".''. $A3217.''. ") -"; ?>
        <span class="Pts"><?php echo $A3218Pts;?></span> 
        <?php echo "( ".''. $A3218.''. ")"; ?>
      </div>
    </td>
    <td></td>
    <td><div class="coin4" ><?php echo $clubA1609; ?></div></td>
    <td><div class="ptsTerrain" ><?php echo $A1609Pts; ?></div></td>
    <td><div class="coin4GA" ><?php echo $A1609; ?></div></td>
    <td rowspan="4" ><img src="../../images/accolade.png" alt ="accolade des 16me" width="8" height="82"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td><div class="coin4" ><?php	echo $clubA2002; ?></div></td>
    <td><div class="coin4GA" ><?php echo $A2002; ?></div></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr> 
    <td><div class="coin4-32" ><?php echo $clubA3219; ?> - <?php	echo $clubA3220; ?></div></td>
    <td><div class="coin4GA-32" >
		<span class="Pts"><?php echo $A3219Pts;?></span> 
        <?php echo "( ".''. $A3219.''. ") -"; ?>
        <span class="Pts"><?php echo $A3220Pts;?></span> 
        <?php echo "( ".''. $A3220.''. ")"; ?>
      </div>
    </td>
    <td></td>
    <td><div class="coin4" ><?php echo $clubA1610; ?></div></td>
    <td><div class="ptsTerrain" ><?php echo $A1610Pts; ?></div></td>
    <td><div class="coin4GA" ><?php echo $A1610; ?></div></td>
    <td><div class="coin4" ><?php echo $clubA8005; ?></div></td>
    <td><div class="coin4GA" ><?php echo $A8005; ?></div></td>
    <td rowspan="6" ><img src="../../images/accolade.png" alt ="accolade des 8me" width="8" height="127"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr> 
    <td><div class="coin4-32" ><?php echo $clubA3221; ?> - <?php echo $clubA3222; ?></div></td>
    <td><div class="coin4GA-32" ><span class="Pts"><?php echo $A3221Pts;?></span> 
        <?php echo "( ".''. $A3221.''. ") -"; ?>
        <span class="Pts"><?php echo $A3222Pts;?></span> 
        <?php echo "( ".''. $A3222.''. ")"; ?>
      </div>
    </td>
    <td></td>
    <td><div class="coin4" ><?php echo $clubA1611; ?></div></td>
    <td><div class="ptsTerrain" ><?php echo $A1611Pts; ?></div></td>
    <td><div class="coin4GA" ><?php	echo $A1611; ?></div></td>
    <td><div class="coin4" ><?php echo $clubA8006; ?></div></td>
    <td><div class="coin4GA" ><?php echo $A8006; ?></div></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr> 
    <td><div class="coin4-32"><?php echo $clubA3223; ?> - <?php	echo $clubA3224; ?></div></td>
    <td><div class="coin4GA-32" ><span class="Pts"><?php echo $A3223Pts;?></span> 
        <?php echo "( ".''. $A3223.''. ") -"; ?>
        <span class="Pts"><?php echo $A3224Pts;?></span> 
        <?php echo "( ".''. $A3224.''. ")"; ?>
      </div>
    </td>
    <td></td>
    <td><div class="coin4" ><?php echo $clubA1612; ?></div></td>
    <td><div class="ptsTerrain" ><?php echo $A1612Pts; ?></div></td>
    <td><div class="coin4GA" ><?php echo $A1612; ?></div></td>
    <td></td>
    <td></td>
    <td><div class="coin4" ><?php echo $clubA4003; ?></div></td>
    <td><div class="coin4GA" ><?php echo $A4003; ?></div></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr> 
    <td><div class="coin5-32" ><?php echo $clubA3225; ?> - <?php	echo $clubA3226; ?></div></td>
    <td><div class="coin5GA-32" > <span class="Pts"><?php echo $A3225Pts;?></span> 
        <?php echo "( ".''. $A3225.''. ") -"; ?>
        <span class="Pts"><?php echo $A3226Pts;?></span> 
        <?php echo "( ".''. $A3226.''. ")"; ?>
      </div>
    </td>
    <td></td>
    <td><div class="coin5" ><?php echo $clubA1613; ?></div></td>
    <td><div class="ptsTerrain5" ><?php echo $A1613Pts; ?></div></td>
    <td><div class="coin5GA" ><?php echo $A1613; ?></div></td>
    <td rowspan="4" ><img src="../../images/accolade.png"alt ="accolade des 16me"  width="8" height="82"></td>
    <td></td>
    <td></td>
    <td><div class="coin4" ><?php echo $clubA4004; ?></div></td>
    <td><div class="coin4GA" ><?php	echo $A4004; ?></div></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr> 
    <td><div class="coin5-32" ><?php echo $clubA3227; ?> - <?php echo $clubA3228; ?></div></td>
    <td><div class="coin5GA-32" > <span class="Pts"><?php echo $A3227Pts;?></span> 
        <?php echo "( ".''. $A3227.''. ") -"; ?>
        <span class="Pts"><?php echo $A3228Pts;?></span> 
        <?php echo "( ".''. $A3228.''. ")"; ?>
      </div>
    </td>
    <td></td>
    <td><div class="coin5" ><?php echo $clubA1614; ?></div></td>
    <td><div class="ptsTerrain5" ><?php echo $A1614Pts; ?></div></td>
    <td><div class="coin5GA" ><?php	echo $A1614; ?></div></td>
    <td><div class="coin4" ><?php echo $clubA8007; ?></div></td>
    <td><div class="coin4GA" ><?php	echo $A8007; ?></div></td>
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
    <td><div class="coin5-32" ><?php	echo $clubA3229; ?> - <?php	echo $clubA3230; ?></div></td>
    <td><div class="coin5GA-32" > <span class="Pts"><?php echo $A3229Pts;?></span> 
        <?php echo "( ".''. $A3229.''. ") -"; ?>
        <span class="Pts"><?php echo $A3230Pts;?></span> 
        <?php echo "( ".''. $A3230.''. ")"; ?>
      </div>
    </td>
    <td></td>
    <td><div class="coin5" ><?php echo $clubA1615; ?></div></td>
    <td><div class="ptsTerrain5" ><?php echo $A1615Pts; ?></div></td>
    <td><div class="coin5GA" ><?php echo $A1615; ?></div></td>
    <td><div class="coin4" ><?php	echo $clubA8008; ?></div></td>
    <td><div class="coin4GA" ><?php echo $A8008; ?></div></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td><div class="coin4" ><?php	echo $clubA1001; ?></div></td>
    <td><div class="coin4GA" ><?php echo $A1001; ?></div></td>
    <td></td>
  </tr>
  <tr> 
    <td><div class="coin5-32" ><?php echo $clubA3231; ?> - <?php	echo $clubA3232; ?></div></td>
    <td><div class="coin5GA-32" > <span class="Pts"><?php echo $A3231Pts;?></span> 
        <?php echo "( ".''. $A3231.''. ") -"; ?>
        <span class="Pts"><?php echo $A3232Pts;?></span> 
        <?php echo "( ".''. $A3232.''. ")"; ?>
      </div>
    </td>
    <td></td>
    <td><div class="coin5" ><?php echo $clubA1616; ?></div></td>
    <td><div class="ptsTerrain5" ><?php echo $A1616Pts; ?></div></td>
    <td><div class="coin5GA" ><?php echo $A1616; ?></div></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td><div class="coin4" ><?php echo $clubA1002; ?></div></td>
    <td><div class="coin4GA" ><?php	echo $A1002; ?></div></td>
    <td></td>
  </tr>
  <tr> 
    <td><div class="coin4-32" ><?php echo $clubA3233; ?> - <?php	echo $clubA3234; ?></div></td>
    <td><div class="coin4GA-32" > <span class="Pts"><?php echo $A3233Pts;?></span> 
        <?php echo "( ".''. $A3233.''. ") -"; ?>
        <span class="Pts"><?php echo $A3234Pts;?></span> 
        <?php echo "( ".''. $A3234.''. ")"; ?>
      </div>
    </td>
    <td></td>
    <td><div class="coin4" ><?php echo $clubA1617; ?></div></td>
    <td><div class="ptsTerrain" ><?php echo $A1617Pts; ?></div></td>
    <td><div class="coin4GA" ><?php echo $A1617; ?></div></td>
    <td rowspan="4" ><img src="../../images/accolade.png"  alt ="accolade des 16me" width="8" height="82"></td>
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
    <td><div class="coin4-32" ><?php echo $clubA3235; ?> - <?php	echo $clubA3236; ?></div></td>
    <td><div class="coin4GA-32" > <span class="Pts"><?php echo $A3235Pts;?></span> 
        <?php echo "( ".''. $A3235.''. ") -"; ?>
        <span class="Pts"><?php echo $A3236Pts;?></span> 
        <?php echo "( ".''. $A3236.''. ")"; ?>
      </div>
    </td>
    <td></td>
    <td><div class="coin4" ><?php echo $clubA1618; ?></div></td>
    <td><div class="ptsTerrain" ><?php echo $A1618Pts; ?></div></td>
    <td><div class="coin4GA" ><?php echo $A1618; ?></div></td>
    <td><div class="coin4" ><?php echo $clubA8009; ?></div></td>
    <td><div class="coin4GA" ><?php	echo $A8009; ?></div></td>
    <td rowspan="6" ><img src="../../images/accolade.png" alt ="accolade des 8me" width="8" height="127"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td colspan="3" rowspan="3"><div align="center"><font size="5"><b>Champion de France <br><?php echo $annee;?></b></font></div></td>
  </tr>
  <tr> 
    <td><div class="coin4-32" ><?php echo $clubA3237; ?> - <?php	echo $clubA3238; ?></div></td>
    <td><div class="coin4GA-32" ><span class="Pts"><?php echo $A3237Pts;?></span> 
        <?php echo "( ".''. $A3237.''. ") -"; ?>
        <span class="Pts"><?php echo $A3238Pts;?></span> 
        <?php echo "( ".''. $A3238.''. ")"; ?>
      </div>
    </td>
    <td></td>
    <td><div class="coin4" ><?php echo $clubA1619; ?> </div></td>
    <td><div class="ptsTerrain" ><?php echo $A1619Pts; ?></div></td>
    <td><div class="coin4GA" ><?php	echo $A1619; ?></div></td>
    <td><div class="coin4" ><?php echo $clubA8010; ?></div></td>
    <td><div class="coin4GA" ><?php echo $A8010; ?></div></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr> 
    <td><div class="coin4-32"><?php echo $clubA3239; ?> - <?php echo $clubA3240; ?></div></td>
    <td><div class="coin4GA-32" > <span class="Pts"><?php echo $A3239Pts;?></span> 
        <?php echo "( ".''. $A3239.''. ") -"; ?>
        <span class="Pts"><?php echo $A3240Pts;?></span> 
        <?php echo "( ".''. $A3240.''. ")"; ?>
      </div>
    </td>
    <td></td>
    <td><div class="coin4" ><?php echo $clubA1620; ?></div></td>
    <td><div class="ptsTerrain" ><?php echo $A1620Pts; ?></div></td>
    <td><div class="coin4GA" ><?php echo $A1620; ?></div></td>
    <td></td>
    <td></td>
    <td><div class="coin4" ><?php echo $clubA4005; ?></div></td>
    <td><div class="coin4GA" ><?php echo $A4005; ?></div></td>
    <td rowspan="10" ><img src="../../images/accolade.png" alt ="accolade des quarts" width="10" height="207"></td>
    <td></td>
    <td></td>
  </tr>
  <tr> 
    <td><div class="coin5-32" ><?php	echo $clubA3241; ?> - <?php	echo $clubA3242; ?></div></td>
    <td><div class="coin5GA-32" ><span class="Pts"><?php echo $A3241Pts;?></span> 
        <?php echo "( ".''. $A3241.''. ") -"; ?>
        <span class="Pts"><?php echo $A3242Pts;?></span> 
        <?php echo "( ".''. $A3242.''. ")"; ?>
      </div>
    </td>
    <td></td>
    <td><div class="coin5" ><?php echo $clubA1621; ?></div></td>
    <td><div class="ptsTerrain5" ><?php echo $A1621Pts; ?></div></td>
    <td><div class="coin5GA" ><?php	echo $A1621; ?></div></td>
    <td rowspan="4" height="28" ><img src="../../images/accolade.png" alt ="accolade des 16me" width="8" height="82"></td>
    <td></td>
    <td></td>
    <td><div class="coin4" ><?php echo $clubA4006; ?></div></td>
    <td><div class="coin4GA" ><?php echo $A4006; ?></div></td>
    <td></td>
    <td></td>
    <td colspan="3" rowspan="7"  class="marginAuto"><img class="width150 height150" src="../../images/blasons200_200/<?php echo $idEquipeCourt;?>.gif" alt="blason du champion" ></td>
 
  </tr>
  <tr> 
    <td><div class="coin5-32" ><?php echo $clubA3243; ?> - <?php echo $clubA3244; ?></div></td>
    <td><div class="coin5GA-32" > <span class="Pts"><?php echo $A3243Pts;?></span> 
        <?php echo "( ".''. $A3243.''. ") -"; ?>
        <span class="Pts"><?php echo $A3244Pts;?></span> 
        <?php echo "( ".''. $A3244.''. ")"; ?>
      </div>
    </td>
    <td></td>
    <td><div class="coin5" ><?php echo $clubA1622; ?></div></td>
    <td><div class="ptsTerrain5" ><?php echo $A1622Pts; ?></div></td>
    <td><div class="coin5GA" ><?php echo $A1622; ?></div></td>
    <td><div class="coin4" ><?php echo $clubA8011; ?></div></td>
    <td><div class="coin4GA" ><?php echo $A8011; ?></div></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr> 
    <td><div class="coin5-32" ><?php echo $clubA3245; ?> - <?php	echo $clubA3246; ?></div></td>
    <td><div class="coin5GA-32" > <span class="Pts"><?php echo $A3245Pts;?></span> 
        <?php echo "( ".''. $A3245.''. ") -"; ?>
        <span class="Pts"><?php echo $A3246Pts;?></span> 
        <?php echo "( ".''. $A3246.''. ")"; ?>
      </div>
    </td>
    <td></td>
    <td><div class="coin5" ><?php echo $clubA1623; ?></div></td>
    <td><div class="ptsTerrain5" ><?php echo $A1623Pts; ?></div></td>
    <td><div class="coin5GA" ><?php echo $A1623; ?></div></td>
    <td><div class="coin4" ><?php echo $clubA8012; ?></div></td>
    <td><div class="coin4GA" ><?php echo $A8012; ?></div></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr> 
    <td><div class="coin5-32" ><?php echo $clubA3247; ?> - <?php	echo $clubA3248; ?></div></td>
    <td><div class="coin5GA-32" > <span class="Pts"><?php echo $A3247Pts;?></span> 
        <?php echo "( ".''. $A3247.''. ") -"; ?>
        <span class="Pts"><?php echo $A3248Pts;?></span> 
        <?php echo "( ".''. $A3248.''. ")"; ?>
      </div>
    </td>
    <td></td>
    <td><div class="coin5" ><?php echo $clubA1624; ?></div></td>
    <td><div class="ptsTerrain5" ><?php echo $A1624Pts; ?></div></td>
    <td><div class="coin5GA" ><?php echo $A1624; ?></div></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td><div class="coin4" ><?php echo $clubA2003; ?></div></td>
    <td><div class="coin4GA" ><?php echo $A2003; ?></div></td>
  </tr>
  <tr> 
    <td><div class="coin4-32" ><?php echo $clubA3249; ?> - <?php	echo $clubA3250; ?></div></td>
    <td><div class="coin4GA-32" > <span class="Pts"><?php echo $A3249Pts;?></span> 
        <?php echo "( ".''. $A3249.''. ") -"; ?>
        <span class="Pts"><?php echo $A3250Pts;?></span> 
        <?php echo "( ".''. $A3250.''. ")"; ?>
      </div>
    </td>
    <td></td>
    <td><div class="coin4" ><?php echo $clubA1625; ?></div></td>
    <td><div class="ptsTerrain" ><?php echo $A1625Pts; ?></div></td>
    <td><div class="coin4GA" ><?php echo $A1625; ?></div></td>
    <td rowspan="4" ><img src="../../images/accolade.png" alt ="accolade des 16me" width="8" height="82"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td><div class="coin4" ><?php echo $clubA2004; ?></div></td>
    <td><div class="coin4GA" ><?php echo $A2004; ?></div></td>
  </tr>
  <tr> 
    <td> 
      <div class="coin4-32" ><?php echo $clubA3251; ?> - <?php echo $clubA3252; ?></div></td>
    <td><div class="coin4GA-32" > <span class="Pts"><?php echo $A3251Pts;?></span> 
        <?php echo "( ".''. $A3251.''. ") -"; ?>
        <span class="Pts"><?php echo $A3252Pts;?></span> 
        <?php echo "( ".''. $A3252.''. ")"; ?>
      </div>
    </td>
    <td></td>
    <td><div class="coin4" ><?php echo $clubA1626; ?></div></td>
    <td><div class="ptsTerrain" ><?php echo $A1626Pts; ?></div></td>
    <td><div class="coin4GA" ><?php echo $A1626; ?></div></td>
    <td><div class="coin4" ><?php echo $clubA8013; ?></div></td>
    <td><div class="coin4GA" ><?php echo $A8013; ?></div></td>
    <td rowspan="6" ><img src="../../images/accolade.png" width="8" alt ="accolade des 8me" height="127"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr> 
    <td><div class="coin4-32" ><?php echo $clubA3253; ?> - <?php echo $clubA3254; ?></div></td>
    <td><div class="coin4GA-32" > <span class="Pts"><?php echo $A3253Pts;?></span> 
        <?php echo "( ".''. $A3253.''. ") -"; ?>
        <span class="Pts"><?php echo $A3254Pts;?> </span> 
        <?php echo "( ".''. $A3254.''. ")"; ?>
      </div>
    </td>
    <td></td>
    <td><div class="coin4" ><?php echo $clubA1627; ?></div></td>
    <td><div class="ptsTerrain" ><?php echo $A1627Pts; ?></div></td>
    <td><div class="coin4GA" ><?php echo $A1627; ?></div></td>
    <td><div class="coin4" ><?php echo $clubA8014; ?></div></td>
    <td><div class="coin4GA" ><?php echo $A8014; ?></div></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr> 
    <td><div class="coin4-32"><?php echo $clubA3255; ?> - <?php echo $clubA3256; ?></div></td>
    <td><div class="coin4GA-32" > <span class="Pts"><?php echo $A3255Pts;?></span> 
        <?php echo "( ".''. $A3255.''. ") -"; ?>
        <span class="Pts"><?php echo $A3256Pts;?></span> 
        <?php echo "( ".''. $A3256.''. ")"; ?>
      </div>
    </td>
    <td></td>
    <td><div class="coin4" ><?php echo $clubA1628; ?></div></td>
    <td><div class="ptsTerrain" ><?php echo $A1628Pts; ?></div></td>
    <td><div class="coin4GA" ><?php echo $A1628; ?></div></td>
    <td></td>
    <td></td>
    <td><div class="coin4" ><?php echo $clubA4007; ?></div></td>
    <td><div class="coin4GA" ><?php echo $A4007; ?></div></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr> 
    <td><div class="coin5-32" ><?php echo $clubA3257; ?> - <?php	echo $clubA3258; ?></div></td>
    <td><div class="coin5GA-32" > <span class="Pts"><?php echo $A3257Pts;?></span> 
        <?php echo "( ".''. $A3257.''. ") -"; ?>
        <span class="Pts"><?php echo $A3258Pts;?></span> 
        <?php echo "( ".''. $A3258.''. ")"; ?>
      </div>
    </td>
    <td></td>
    <td><div class="coin5" ><?php echo $clubA1629; ?></div></td>
    <td><div class="ptsTerrain5" ><?php echo $A1629Pts; ?></div></td>
    <td><div class="coin5GA" ><?php echo $A1629; ?></div></td>
    <td rowspan="4" ><img src="../../images/accolade.png" alt ="accolade des 16me" width="8" height="82"></td>
    <td></td>
    <td></td>
    <td><div class="coin4" ><?php echo $clubA4008; ?></div></td>
    <td><div class="coin4GA" ><?php	echo $A4008; ?></div></td>
    <td></td>
    <td></td>
    <td></td>
    <td colspan="3" rowspan="2" class="champ"><?php echo $champion;?></td>
  </tr>
  <tr> 
    <td><div class="coin5-32" ><?php echo $clubA3259; ?> - <?php echo $clubA3260; ?></div></td>
    <td><div class="coin5GA-32" > <span class="Pts"><?php echo $A3259Pts;?></span> 
        <?php echo "( ".''. $A3259.''. ") -"; ?>
        <span class="Pts"><?php echo $A3260Pts;?></span> 
        <?php echo "( ".''. $A3260.''. ")"; ?>
      </div>
    </td>
    <td></td>
    <td><div class="coin5" ><?php echo $clubA1630; ?></div></td>
    <td><div class="ptsTerrain5" ><?php echo $A1630Pts; ?></div></td>
    <td><div class="coin5GA" ><?php echo $A1630; ?></div></td>
    <td><div class="coin4" ><?php echo $clubA8015; ?></div></td>
    <td><div class="coin4GA" ><?php echo $A8015; ?></div></td>
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
    <td><div class="coin5-32" ><?php echo $clubA3261; ?> - <?php	echo $clubA3262; ?></div></td>
    <td><div class="coin5GA-32" > <span class="Pts"><?php echo $A3261Pts;?></span>
		<?php echo "( ".''. $A3261.''. ") -"; ?>
        <span class="Pts"><?php echo $A3262Pts;?></span> 
        <?php echo "( ".''. $A3262.''. ")"; ?>
      </div>
    </td>
    <td></td>
    <td><div class="coin5" ><?php echo $clubA1631; ?></div></td>
    <td><div class="ptsTerrain5" ><?php echo $A1631Pts; ?></div></td>
    <td><div class="coin5GA" ><?php echo $A1631; ?></div></td>
    <td><div class="coin4" ><?php echo $clubA8016; ?></div></td>
    <td><div class="coin4GA" ><?php	echo $A8016; ?></div></td>
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
    <td><div class="coin5-32" ><?php echo $clubA3263; ?> - <?php	echo $clubA3264; ?></div></td>
    <td><div class="coin5GA-32" ><span class="Pts"><?php echo $A3263Pts;?></span> 
        <?php echo "( ".''. $A3263.''. ") -"; ?>
        <span class="Pts"><?php echo $A3264Pts;?></span> 
        <?php echo "( ".''. $A3264.''. ")"; ?>
      </div>
    </td>
    <td></td>
    <td><div class="coin5" ><?php echo $clubA1632; ?></div></td>
    <td><div class="ptsTerrain5" ><?php echo $A1632Pts; ?></div></td>
    <td><div class="coin5GA" ><?php	echo $A1632; ?></div></td>
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
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr> 
    <td bgcolor="#FFCC66" ></td>
    <td bgcolor="#FFCC66" ></td>
    <td bgcolor="#FFCC66" ></td>
    <td bgcolor="#FFCC66" ></td>
    <td bgcolor="#FFCC66" ></td>
    <td bgcolor="#FFCC66" ></td>
    <td bgcolor="#FFCC66" ></td>
    <td bgcolor="#FFCC66" ></td>
    <td bgcolor="#FFCC66" ></td>
    <td bgcolor="#FFCC66" ></td>
    <td bgcolor="#FFCC66" ></td>
    <td bgcolor="#FFCC66" ></td>
    <td bgcolor="#FFCC66" ></td>
    <td bgcolor="#FFCC66" ></td>
    <td bgcolor="#FFCC66" ></td>
    <td bgcolor="#FFCC66" ></td>
    <td bgcolor="#FFCC66" ></td>
    <td></td>
    <td></td>
  </tr>
  <tr> 
    <td colspan="14"> 
      <div align="center"> </div>
    </td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
</table>
