<table border="0"  height="500" >
  <tr> 
    <td bgcolor="#FFCC66" colspan="17">  </td>
  </tr>
  <tr> 
    <td  colspan="17"></td>
  </tr>
  <tr> 
    <td class="coin5-32BarrageFed2">
      <?php if (substr($type,0,1)== 7){?> 
	  <a href="javascript:ouvrirPopup('barrages.php?annee=<?php echo $annee; ?>&division=<?php echo $division+7000;?>','','top=10, right=10,resizable=no, directories=no, statut=no, location=no, width=330, height=650, menubar=no')">Barrages accès aux 16me</a>	
	<!--  </a> -->
      <?php } ?>
    </td>
    <td></td>
    <td></td>
    <td></td>
    <td><div class="coin5Barrage" > 
        <?php if (substr($type,0,1)== 7 and $annee == 2022){?>
        <a href="javascript:ouvrirPopup('barragesMontee.php?annee=<?php echo $annee; ?>&division=7155','','top=10, right=10,resizable=no, directories=no, statut=no, location=no, width=330, height=600, menubar=no')"><font color="#FFFFFF">Matchs de montée en Féd 1</font></a> 
        <?php } ?>
      </div></td>
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
    <td class="coin5">16me de finale A/R</td>
    <td></td>
    <td></td>
    <td></td>
    <td class="coin5">8me de finale A/R</td>
    <td></td>
    <td></td>
    <td></td>
    <td class="coin5">Quarts de finale</td>
    <td></td>
    <td></td>
    <td class="coin5">Demi finale</td>
    <td></td>
    <td></td>
    <td class="coin5">Finale</td>
    <td></td>
    <td></td>
  </tr>
  <tr> 
    <td colspan="2" class="dates"><?php	echo $D16ME;?></td>
    <td></td>
    <td></td>
    <td colspan="2" class="dates"><?php	echo $D8ME;?></td>
    <td></td>
    <td></td>
    <td class="dates"><?php	echo $D4ME;?></td>
    <td></td>
    <td></td>
    <td class="dates"><?php	echo $D2ME;?></td>
    <td></td>
    <td></td>
    <td class="dates"><?php	echo $D1ME;?></td>
    <td></td>
    <td></td>
  </tr>
  <tr> 
    <td></td>
    <td class="Libelle_pts">Pts</td>
    <td class="Ga">GA</td>
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
    <td class="coin4"><?php echo $clubA1601;?></td>
    <td class="ptsTerrain"><?php echo $A1601Pts;?></td>
    <td class="coin4GA"><?php echo $A1601;?></td>
    <td></td>
    <td></td>
    <td class="Libelle_pts">Pts</td>
    <td class="Ga">GA</td>
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
    <td class="coin4"><?php echo $clubA1602;?></td>
    <td class="ptsTerrain"><?php echo $A1602Pts;?></td>
    <td class="coin4GA"><?php echo $A1602;?></td>
    <td></td>
    <td class="coin4"><?php echo $clubA8001;?></td>
    <td class="ptsTerrain"><?php echo $A8001Pts;?></td>
    <td class="coin4GA"><?php echo $A8001;?></td>
    <td rowspan="6"><img src="../../images/accolade.png" width="8" height="127"></td>
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
    <td class="coin4"><?php	echo $clubA1603;?></td>
    <td class="ptsTerrain"><?php echo $A1603Pts;?></td>
    <td class="coin4GA"><?php echo $A1603;?></td>
    <td></td>
    <td class="coin4"><?php echo $clubA8002;?></td>
    <td class="ptsTerrain"><?php echo $A8002Pts;?></td>
    <td class="coin4GA"><?php echo $A8002;?></td>
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
    <td class="coin4"><?php echo $clubA1604;?></td>
    <td class="ptsTerrain"><?php echo $A1604Pts;?></td>
    <td class="coin4GA"><?php echo $A1604;?></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="coin4"><?php echo $clubA4001;?></td>
    <td class="coin4GA"><?php echo $A4001;?></td>
    <td rowspan="10" height="45" ><img src="../../images/accolade.png" height="207" width="10"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr> 
    <td class="coin5"><?php echo $clubA1605;?></td>
    <td class="ptsTerrain5"><?php echo $A1605Pts;?></td>
    <td class="coin5GA"><?php echo $A1605;?></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="coin4"><?php echo $clubA4002;?></td>
    <td class="coin4GA"><?php echo $A4002;?></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr> 
    <td class="coin5"><?php echo $clubA1606;?></td>
    <td class="ptsTerrain5"><?php echo $A1606Pts;?></td>
    <td class="coin5GA"><?php echo $A1606;?></td>
    <td></td>
    <td class="coin4"><?php echo $clubA8003;?></td>
    <td class="ptsTerrain"><?php echo $A8003Pts;?></td>
    <td class="coin4GA"><?php echo $A8003;?></td>
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
    <td class="coin5"><?php echo $clubA1607;?></td>
    <td class="ptsTerrain5"><?php echo $A1607Pts;?></td>
    <td class="coin5GA"><?php echo $A1607;?></td>
    <td></td>
    <td class="coin4"><?php echo $clubA8004;?></td>
    <td class="ptsTerrain"><?php	echo $A8004Pts;?></td>
    <td class="coin4GA"><?php	echo $A8004;?></td>
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
    <td class="coin5"><?php echo $clubA1608;?></td>
    <td class="ptsTerrain5"><?php echo $A1608Pts;?></td>
    <td class="coin5GA"><?php echo $A1608;?></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="coin4"><?php	echo $clubA2001;?></td>
    <td class="coin4GA"><?php	echo $A2001;?></td>
    <td rowspan="18"><img src="../../images/accolade.png" height="383" width="10"></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr> 
    <td class="coin4"><?php echo $clubA1609;?></td>
    <td class="ptsTerrain"><?php echo $A1609Pts;?></td>
    <td class="coin4GA"><?php echo $A1609;?></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="coin4"><?php	echo $clubA2002;?></td>
    <td class="coin4GA"><?php echo $A2002;?></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr> 
    <td class="coin4"><?php echo $clubA1610;?></td>
    <td class="ptsTerrain"><?php echo $A1610Pts;?></td>
    <td class="coin4GA"><?php echo $A1610;?></td>
    <td></td>
    <td class="coin4"><?php echo $clubA8005;?></td>
    <td class="ptsTerrain"><?php echo $A8005Pts;?></td>
    <td class="coin4GA"><?php echo $A8005;?></td>
    <td rowspan="6"><img src="../../images/accolade.png" width="10" height="127"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr> 
    <td class="coin4"><?php echo $clubA1611;?></td>
    <td class="ptsTerrain"><?php echo $A1611Pts;?></td>
    <td class="coin4GA"><?php echo $A1611;?></td>
    <td></td>
    <td class="coin4"><?php echo $clubA8006;?></td>
    <td class="ptsTerrain"><?php echo $A8006Pts;?></td>
    <td class="coin4GA"><?php echo $A8006;?></td>
    <td> </td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr> 
    <td class="coin4"><?php echo $clubA1612;?></td>
    <td class="ptsTerrain"><?php echo $A1612Pts;?></td>
    <td class="coin4GA"><?php echo $A1612;?></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="coin4"><?php echo $clubA4003;?></td>
    <td class="coin4GA"><?php echo $A4003;?></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr> 
    <td class="coin5"><?php echo $clubA1613;?></td>
    <td class="ptsTerrain5"><?php echo $A1613Pts;?></td>
    <td class="coin5GA"><?php echo $A1613;?></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="coin4"><?php echo $clubA4004;?></td>
    <td class="coin4GA"><?php echo $A4004;?></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr> 
    <td class="coin5"><?php echo $clubA1614;?></td>
    <td class="ptsTerrain5"><?php echo $A1614Pts;?></td>
    <td class="coin5GA"><?php echo $A1614;?></td>
    <td></td>
    <td class="coin4"><?php echo $clubA8007;?></td>
    <td class="ptsTerrain"><?php echo $A8007Pts;?></td>
    <td class="coin4GA"><?php echo $A8007;?></td>
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
    <td class="coin5"><?php echo $clubA1615;?></td>
    <td class="ptsTerrain5"><?php echo $A1615Pts;?></td>
    <td class="coin5GA"><?php echo $A1615;?></td>
    <td></td>
    <td class="coin4"><?php echo $clubA8008;?></td>
    <td class="ptsTerrain"><?php echo $A8008Pts;?></td>
    <td class="coin4GA"><?php echo $A8008;?></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="coin4"><?php	echo $clubA1001;?></td>
    <td class="coin4GA"><?php echo $A1001;?></td>
    <td></td>
  </tr>
  <tr> 
    <td class="coin5"><?php	echo $clubA1616;?></td>
    <td class="ptsTerrain5"><?php echo $A1616Pts;?></td>
    <td class="coin5GA"><?php echo $A1616;?></td>
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
    <td class="coin4"><?php	echo $clubA1002;?></td>
    <td class="coin4GA"><?php echo $A1002;?></td>
    <td></td>
  </tr>
  <tr> 
    <td class="coin4"><?php echo $clubA1617;?></td>
    <td class="ptsTerrain"><?php echo $A1617Pts;?></td>
    <td class="coin4GA"><?php echo $A1617;?></td>
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
    <td class="coin4"><?php echo $clubA1618;?></td>
    <td class="ptsTerrain"><?php echo $A1618Pts;?></td>
    <td class="coin4GA"><?php echo $A1618;?></td>
    <td></td>
    <td class="coin4"><?php echo $clubA8009;?></td>
    <td class="ptsTerrain"><?php echo $A8009Pts;?></td>
    <td class="coin4GA"><?php echo $A8009;?></td>
    <td rowspan="6"><img src="../../images/accolade.png" width="8" height="127"></td>
    <td></td>
    <td></td>
    <td width="22"></td>
    <td></td>
    <td></td>
    <td colspan="3" rowspan="3"> <font size="5"><b>Champion de France <br><?php echo $annee;?></b></font></td>
  </tr>
  <tr> 
    <td class="coin4"><?php echo $clubA1619;?></td>
    <td class="ptsTerrain"><?php echo $A1619Pts;?></td>
    <td class="coin4GA"><?php echo $A1619;?></td>
    <td></td>
    <td class="coin4"><?php echo $clubA8010;?></td>
    <td class="ptsTerrain"><?php echo $A8010Pts;?></td>
    <td class="coin4GA"><?php echo $A8010;?></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr> 
    <td class="coin4"><?php echo $clubA1620;?></td>
    <td class="ptsTerrain"><?php echo $A1620Pts;?></td>
    <td class="coin4GA"><?php echo $A1620;?></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="coin4"><?php echo $clubA4005;?></td>
    <td class="coin4GA"><?php echo $A4005;?></td>
    <td rowspan="10" width="22"><img src="../../images/accolade.png" height="207" width="10"></td>
    <td></td>
    <td></td>
  </tr>
  <tr> 
    <td class="coin5"><?php echo $clubA1621;?></td>
    <td class="ptsTerrain5"><?php echo $A1621Pts;?></td>
    <td class="coin5GA"><?php echo $A1621;?></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="coin4"><?php echo $clubA4006;?></td>
    <td class="coin4GA"><?php echo $A4006;?></td>
    <td></td>
    <td></td>
    <td colspan="3" height="50" rowspan="4" class="marginAuto"><img class="width150 height150" src="../../images/blasons200_200/<?php echo $idEquipeCourt;?>.gif" alt="blason du champion">  </td>
  </tr>
  <tr> 
    <td class="coin5"><?php echo $clubA1622;?></td>
    <td class="ptsTerrain5"><?php echo $A1622Pts;?></td>
    <td class="coin5GA"><?php echo $A1622;?></td>
    <td></td>
    <td class="coin4"><?php echo $clubA8011;?></td>
    <td class="ptsTerrain"><?php echo $A8011Pts;?></td>
    <td class="coin4GA"><?php echo $A8011;?></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr> 
    <td class="coin5"><?php echo $clubA1623;?></td>
    <td class="ptsTerrain5"><?php echo $A1623Pts;?></td>
    <td class="coin5GA"><?php echo $A1623;?></td>
    <td></td>
    <td class="coin4"><?php echo $clubA8012;?></td>
    <td class="ptsTerrain"><?php echo $A8012Pts;?></td>
    <td class="coin4GA"><?php echo $A8012;?></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr> 
    <td class="coin5"><?php echo $clubA1624;?></td>
    <td class="ptsTerrain5"><?php echo $A1624Pts;?></td>
    <td class="coin5GA"><?php echo $A1624;?></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="coin4"><?php	echo $clubA2003;?></td>
    <td class="coin4GA"><?php echo $A2003;?>
    </td>
  </tr>
  <tr> 
    <td class="coin4"><?php echo $clubA1625;?></td>
    <td class="ptsTerrain"><?php echo $A1625Pts;?></td>
    <td class="coin4GA"><?php echo $A1625;?></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="coin4"><?php	echo $clubA2004;?></td>
    <td class="coin4GA"><?php echo $A2004;?></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr> 
    <td class="coin4"><?php echo $clubA1626;?></td>
    <td class="ptsTerrain"><?php echo $A1626Pts;?></td>
    <td class="coin4GA"><?php echo $A1626;?></td>
    <td></td>
    <td class="coin4"><?php echo $clubA8013;?></td>
    <td class="ptsTerrain"><?php echo $A8013Pts;?></td>
    <td class="coin4GA"><?php echo $A8013;?></td>
    <td rowspan="6"><img src="../../images/accolade.png" width="8" height="127"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td colspan="3" rowspan="2" class="champ"><?php echo $champion;?></td>
  </tr>
  <tr> 
    <td class="coin4"><?php echo $clubA1627;?></td>
    <td class="ptsTerrain"><?php echo $A1627Pts;?></td>
    <td class="coin4GA"><?php echo $A1627;?></td>
    <td> </td>
    <td class="coin4"><?php echo $clubA8014;?></td>
    <td class="ptsTerrain"><?php echo $A8014Pts;?></td>
    <td class="coin4GA"><?php echo $A8014;?></td>
    <td> </td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr> 
    <td class="coin4"><?php echo $clubA1628;?></td>
    <td class="ptsTerrain"><?php echo $A1628Pts;?></td>
    <td class="coin4GA"><?php echo $A1628;?></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="coin4"><?php echo $clubA4007;?></td>
    <td class="coin4GA"><?php echo $A4007;?></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr> 
    <td class="coin5"><?php echo $clubA1629;?></td>
    <td class="ptsTerrain5"><?php echo $A1629Pts;?></td>
    <td class="coin5GA"><?php echo $A1629;?></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="coin4"><?php echo $clubA4008;?></td>
    <td class="coin4GA"><?php echo $A4008;?></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr> 
    <td class="coin5"><?php echo $clubA1630;?></td>
    <td class="ptsTerrain5"><?php echo $A1630Pts;?></td>
    <td class="coin5GA"><?php echo $A1630;?></td>
    <td></td>
    <td class="coin4"><?php echo $clubA8015;?></td>
    <td class="ptsTerrain"><?php echo $A8015Pts;?></td>
    <td class="coin4GA"><?php echo $A8015;?></td>
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
    <td class="coin5"><?php echo $clubA1631;?></td>
    <td class="ptsTerrain5"><?php echo $A1631Pts;?></td>
    <td class="coin5GA"><?php echo $A1631;?></td>
    <td></td>
    <td class="coin4"><?php echo $clubA8016;?></td>
    <td class="ptsTerrain"><?php echo $A8016Pts;?></td>
    <td class="coin4GA"><?php echo $A8016;?></td>
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
    <td class="coin5"><?php echo $clubA1632;?></td>
    <td class="ptsTerrain5"><?php echo $A1632Pts;?></td>
    <td class="coin5GA"><?php echo $A1632;?></td>
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
    <td colspan="17" bgcolor="#FFCC66"></td>
  </tr>
  <tr> 
    <td colspan="17"> </td>
  </tr>
</table>
