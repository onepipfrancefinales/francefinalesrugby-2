
<table width="2000" border="0"  height="500" cellspacing="" align="center">
  <tr> 
  <td  bgcolor="#FFCC66" align="center" colspan="16" height="2"></td>
  </tr>
  <tr> 
    <td   id="cal"  width="200"> 
      <?php if($annee < 2019)
		{
		?>
      <a href="../affichagePhasesFinales/pagebarrages.php?annee=<?php echo $annee;?>&division=990">Barrages 
      s&eacute;ries Territoriales</a> 
      <?php
		}
		?>
      <div class="coin5-32BarrageFed2" > 
        <?php if (substr($type,0,1)== 7 and $annee > 2021){?>
        <a href="javascript:ouvrirPopup('barrages.php?annee=<?php echo $annee; ?>&division=7250','','top=10, right=10,resizable=no, directories=no, statut=no, location=no, width=330, height=600, menubar=no')"><font color="#FFFFFF">Barrages accès aux 16me<br />
        </font></a> </div>
      <?php } ?>
    </td>
    <td width="31"></td>
    <td width="15"></td>
    <td width="200"></td>
    <td width="31"></td>
    <td width="15"></td>
    <td width="200"></td>
    <td width="31"></td>
    <td width="15"></td>
    <td width="200"></td>
    <td width="31"></td>
    <td width="15"></td>
    <td width="200"></td>
    <td width="31"></td>
   <td width="15"></td>
	<td width="200"></td>
  </tr>
  <tr> 
    <td class="coin5">16me de finale </td>
    <td></td>
    <td></td>
    <td class="coin5">8me de finale </td>
    <td></td>
    <td></td>
    <td class="coin5">Quarts de finale </td>
    <td></td>
    <td></td>
    <td class="coin5">Demi finale </td>
    <td></td>
    <td></td>
    <td class="coin5">Finale </td>
    <td></td>
    <td></td>
	 <td></td>
  </tr>
  <tr> 
    <td class="dates"><?php echo $D16ME;?></td>
    <td></td>
    <td></td>
    <td class="dates"><?php echo $D8ME;?></td>
    <td></td>
    <td></td>
    <td class="dates"><?php echo $D4ME;?></td>
    <td></td>
    <td></td>
    <td class="dates"><?php echo $D2ME;?></td>
    <td></td>
    <td></td>
    <td class="dates"><?php echo $D1ME;?></td>
    <td></td>
    <td></td>
	  <td></td>
   
  </tr>
  <tr> 
    <td> </td>
	<td> </td>
	<td> </td>
	<td colspan="2" align="right">	<?php if ($division == 270) echo "A jour";?> </td>
	<td> </td>
	<td colspan="2" align="right"><?php if ($division == 270) echo "A jour";?> </td>
	<td> </td>
	<td colspan="2" align="right"><?php if ($division == 270) echo "Non à jour";?> </td>
	<td> </td>
	<td> </td>
	<td> </td>
	<td> </td>
	  <td></td>
  
  </tr>
  <tr> 
    <td class="coin4"><?php echo $clubA1601;?></td>
    <td class="coin4pts"><?php echo $A1601;?></td>
    <td colspan="3"></td>
    <td rowspan="8"><img class="width8 height163" src="../../images/accolade.png"></td>
    <td colspan="9"></td>
	  <td></td>
   
  </tr>
  <tr> 
    <td class="coin4"><?php echo $clubA1602;?></td>
    <td class="coin4pts"><?php echo $A1602;?></td>
    <td></td>
    <td class="coin4"><?php echo $clubA8001;?></td>
    <td class="coin4pts"><?php echo $A8001;?></td>
    <td colspan="10"></td>
  </tr>
  <tr> 
    <td class="coin4"><?php echo $clubA1603;?></td>
    <td class="coin4pts"><?php echo $A1603;?></td>
    <td></td>
    <td class="coin4"><?php echo $clubA8002;?></td>
    <td class="coin4pts"><?php echo $A8002;?></td>
    <td colspan="2"></td>
    <td rowspan="12"><img class="width8 height236" src="../../images/accolade.png"></td>
    <td colspan="6"></td>
	 <td></td>
   
  </tr>
  <tr> 
    <td class="coin4"><?php echo $clubA1604; ?></td>
    <td class="coin4pts"><?php echo $A1604;?></td>
    <td colspan="3"></td>
    <td class="coin4"><?php echo $clubA4001;?></td>
    <td class="coin4pts"><?php echo $A4001;?></td>
    <td colspan="6"></td>
	 <td></td>
    
  </tr>
  <tr> 
    <td class="coin5"><?php echo $clubA1605;?></td>
    <td class="coin5pts"><?php echo $A1605;?></td>
    <td colspan="3"></td>
    <td class="coin4"><?php echo $clubA4002;?></td>
    <td class="coin4pts"><?php echo $A4002;?></td>
    <td colspan="6"></td>
	 <td></td>
    
  </tr>
  <tr> 
    <td class="coin5"><?php echo $clubA1606;?></td>
    <td class="coin5pts"><?php echo $A1606;?></td>
    <td></td>
    <td class="coin4"><?php echo $clubA8003;?></td>
    <td class="coin4pts"><?php echo $A8003;?></td>
    <td colspan="2"></td>
    <td colspan="6"></td>
	 <td></td>
    
  </tr>
  <tr> 
    <td class="coin5"><?php echo $clubA1607;?></td>
    <td class="coin5pts"><?php echo $A1607;?></td>
    <td></td>
    <td class="coin4"><?php echo $clubA8004;?></td>
    <td class="coin4pts"><?php echo $A8004;?></td>
    <td colspan="2"></td>
    <td></td>
    <td></td>
    <td rowspan="20"><img class="width8 height426" src="../../images/accolade.png"></td>
    <td colspan="3"></td>
	
  </tr>
  <tr> 
    <td class="coin5"><?php echo $clubA1608;?></td>
    <td class="coin5pts"><?php echo $A1608;?></td>
    <td colspan="3"></td>
    <td colspan="2"></td>
    <td class="coin4"><?php echo $clubA2001;?></td>
    <td class="coin4pts"><?php echo $A2001;?></td>
    <td colspan="3"></td>
	<td></td>
    
  </tr>
  <tr> 
    <td class="coin4"><?php echo $clubA1609;?></td>
    <td class="coin4pts"><?php echo $A1609;?></td>
    <td colspan="3"></td>
    <td rowspan="8"><img class="width8 height163" src="../../images/accolade.png"></td>
    <td colspan="2"></td>
    <td class="coin4"><?php echo $clubA2002;?></td>
    <td class="coin4pts"><?php echo $A2002;?></td>
    <td colspan="3"></td>
	 <td></td>
  </tr>
  <tr> 
    <td class="coin4"><?php echo $clubA1610; ?></td>
    <td class="coin4pts"><?php echo $A1610;?></td>
    <td></td>
    <td class="coin4"><?php echo $clubA8005;?></td>
    <td class="coin4pts"><?php echo $A8005;?></td>
    <td colspan="2"></td>
    <td colspan="2"></td>
    <td colspan="3"></td>
	 <td></td>	
  </tr>
  <tr> 
    <td class="coin4"><?php echo $clubA1611;?></td>
    <td class="coin4pts"><?php echo $A1611;?></td>
    <td></td>
    <td class="coin4"><?php echo $clubA8006;?></td>
    <td class="coin4pts"><?php echo $A8006;?></td>
    <td colspan="2"></td>
    <td colspan="2"></td>
    <td colspan="3"></td>
	 <td></td>
  </tr>
  <tr> 
    <td class="coin4"><?php echo $clubA1612;?></td>
    <td class="coin4pts"><?php echo $A1612;?></td>
    <td colspan="3"></td>
    <td class="coin4"><?php echo $clubA4003;?></td>
    <td class="coin4pts"><?php echo $A4003;?></td>
    <td colspan="2"></td>
    <td colspan="3"></td>
	<td></td>
  </tr>
  <tr> 
    <td class="coin5"><?php echo $clubA1613;?></td>
    <td class="coin5pts"><?php echo $A1613;?></td>
    <td colspan="3"></td>
    <td class="coin4"><?php echo $clubA4004;?></td>
    <td class="coin4pts"><?php echo $A4004;?></td>
    <td colspan="2"></td>
    <td colspan="3"></td>
	<td></td>
  </tr>
  <tr> 
    <td class="coin5"><?php echo $clubA1614;?></td>
    <td class="coin5pts"><?php echo $A1614;?></td>
    <td></td>
    <td class="coin4"><?php echo $clubA8007;?></td>
    <td class="coin4pts"><?php echo $A8007;?></td>
    <td colspan="2"></td>
     <td></td>
	  <td></td>
    <td></td>
  <td></td>
   <td></td>
  <td></td>
 </tr>
  <tr> 
    <td class="coin5"><?php echo $clubA1615;?></td>
    <td class="coin5pts"><?php echo $A1615;?></td>
    <td></td>
    <td class="coin4"><?php echo $clubA8008;?></td>
    <td class="coin4pts"><?php echo $A8008;?></td>
	<td colspan="4" ></td>
	<td></td>
    <td class="coin4"><?php echo $clubA1001;?></td>
    <td class="coin4pts"><?php echo $A1001;?></td>
  <td> </td>
		<td></td>
  </tr>
  <tr> 
    <td class="coin5"><?php  echo $clubA1616; ?></td>
    <td class="coin5pts"><?php echo $A1616;?></td>
    <td colspan="3"></td>
	 
	
   <td ></td>
	<td ></td>
  <td ></td>
  <td></td>
	 <td></td>
	
	<td class="coin4"><?php echo $clubA1002;?></td>
    <td class="coin4pts"><?php echo $A1002;?></td>
   <td></td>
   <td></td>
  </tr>
  <tr> 
    <td class="coin4"><?php echo $clubA1617;?></td>
    <td class="coin4pts"><?php echo $A1617;?></td>
    <td colspan="3"></td>
    <td rowspan="8"><img class="width8 height163" src="../../images/accolade.png"></td>
    
		<td colspan="4" ></td>
		<td></td>
   <td></td>
		
		<td></td>
   <td></td>
	<td></td>
 	
	
	
  </tr>
  <tr> 
    <td class="coin4" height="2"><?php echo $clubA1618; ?></td>
    <td class="coin4pts" height="2"><?php echo $A1618;?></td>
    <td height="2"></td>
    <td class="coin4" height="2"><?php echo $clubA8009;?></td>
    <td class="coin4pts" height="2"><?php echo $A8009;?></td>
    <td colspan="5" height="2"></td>
    <td colspan="3" class="titre" rowspan="3"><?php echo "Champion de France ".$annee;?><br/><?php echo $nomDivision;?></td>
  <td></td>
  </tr>
  <tr> 
    <td class="coin4"><?php echo $clubA1619;?></td>
    <td class="coin4pts"><?php echo $A1619;?></td>
    <td></td>
    <td class="coin4"><?php echo $clubA8010;?></td>
    <td class="coin4pts"><?php echo $A8010;?></td>
    <td colspan="2"></td>
    <td rowspan="12"><img class="width8 height236" src="../../images/accolade.png"></td>
    <td colspan="2"></td>
<td></td>
 </tr>
  <tr> 
    <td class="coin4" height="2"><?php echo $clubA1620;?></td>
    <td class="coin4pts" height="2"><?php echo $A1620;?></td>
    <td colspan="3" height="2"></td>
    <td class="coin4" height="2"><?php echo $clubA4005;?></td>
    <td class="coin4pts" height="2"><?php echo $A4005;?></td>
    <td colspan="2" height="2"></td>
	 <td></td>
  </tr>
  <tr> 
    <td class="coin5"><?php echo $clubA1621;?></td>
    <td class="coin5pts"><?php echo $A1621;?></td>
    <td colspan="3"></td>
    <td class="coin4"><?php echo $clubA4006;?></td>
    <td class="coin4pts"><?php echo $A4006;?></td>
    <td colspan="2"></td>
    <td colspan="3" rowspan="7" align="center"> <img src="../../images/blasons200_200/<?php echo $idEquipeCourt;?>.gif" width="150" height="150"></td>
    <td  ></td>
  </tr>
  <tr> 
    <td class="coin5"><?php echo $clubA1622;?></td>
    <td class="coin5pts"><?php echo $A1622;?></td>
    <td></td>
    <td class="coin4"><?php echo $clubA8011;?></td>
    <td class="coin4pts"><?php echo $A8011;?></td>
    <td colspan="2"></td>
    <td colspan="2"></td>
	 <td  ></td>
  </tr>
  <tr> 
    <td class="coin5"><?php echo $clubA1623;?></td>
    <td class="coin5pts"><?php echo $A1623;?></td>
    <td></td>
    <td class="coin4"><?php echo $clubA8012;?></td>
    <td class="coin4pts"><?php echo $A8012;?></td>
    <td colspan="2"></td>
    <td colspan="2"></td>
	 <td  ></td> 
  </tr>
  <tr> 
    <td class="coin5"><?php echo $clubA1624;?></td>
    <td class="coin5pts"><?php echo $A1624;?></td>
    <td colspan="3"></td>
    <td colspan="2"></td>
    <td class="coin4"><?php echo $clubA2003;?></td>
    <td class="coin4pts"><?php echo $A2003;?></td>
	 <td  ></td>
  </tr>
  <tr> 
    <td class="coin4"><?php echo $clubA1625;?></td>
    <td class="coin4pts"><?php echo $A1625;?></td>
    <td colspan="3"></td>
    <td rowspan="8"><img class="width8 height163" src="../../images/accolade.png"></td>
    <td colspan="2"></td>
    <td class="coin4"><?php echo $clubA2004;?></td>
    <td class="coin4pts"><?php echo $A2004;?></td>
	 <td  ></td>

  </tr>
  <tr> 
    <td class="coin4"><?php echo $clubA1626; ?></td>
    <td class="coin4pts"><?php echo $A1626;?></td>
    <td></td>
    <td class="coin4"><?php echo $clubA8013;?></td>
    <td class="coin4pts"><?php echo $A8013;?></td>
    <td colspan="2"></td>
    <td colspan="2"></td>
	 <td  ></td>	 
  </tr>
  <tr> 
    <td class="coin4"><?php echo $clubA1627;?></td>
    <td class="coin4pts"><?php echo $A1627;?></td>
    <td></td>
    <td class="coin4"><?php echo $clubA8014;?></td>
    <td class="coin4pts"><?php echo $A8014;?></td>
    <td colspan="2"></td>
    <td colspan="3" ></td>
	<td></td> 
  </tr>
  <tr> 
    <td class="coin4"><?php echo $clubA1628;?></td>
    <td class="coin4pts"><?php echo $A1628;?></td>
    <td colspan="3"></td>
    <td class="coin4"><?php echo $clubA4007;?></td>
    <td class="coin4pts"><?php echo $A4007;?></td>
    <td colspan="3"></td>
    <td colspan="3" rowspan="2" class="champ"><?php echo $champion;?></td>
	<td></td> 
  </tr>
  <tr> 
    <td class="coin5"><?php echo $clubA1629;?></td>
    <td class="coin5pts"><?php echo $A1629;?></td>
    <td colspan="3"></td>
    <td class="coin4"><?php echo $clubA4008;?></td>
    <td class="coin4pts"><?php echo $A4008;?></td>
    <td colspan="3"></td>
	 <td  ></td>
  </tr>
  <tr> 
    <td class="coin5"><?php  echo $clubA1630; ?></td>
    <td class="coin5pts"><?php echo $A1630;?> </td>
    <td></td>
    <td class="coin4"><?php echo $clubA8015;?></td>
    <td class="coin4pts"><?php echo $A8015;?></td>
    <td colspan="2"></td>
    <td colspan="6"></td>
	<td></td>	
  </tr>
  <tr> 
    <td class="coin5"><?php echo $clubA1631;?></td>
    <td class="coin5pts"><?php echo $A1631;?><td> 
    <td class="coin4"><?php echo $clubA8016;?></td>
    <td class="coin4pts"><?php echo $A8016;?></td>
    <td></td>
    <td colspan="8"></td>
	<td></td>	 
  </tr>
  <tr> 
    <td class="coin5"><?php echo $clubA1632;?></td>
    <td class="coin5pts"><?php echo $A1632;?></td>
    <td colspan="3"></td>
    <td colspan="9"></td>
	<td></td>
  </tr>
  <tr> 
    <td colspan="14"></td>
  </tr>
  <tr> 
    <td bgcolor="#FFCC66" colspan="15"></td>
  </tr>
</table>
