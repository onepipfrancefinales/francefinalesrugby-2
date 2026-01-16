
<table class="width95PC center borderWidth1">
  <tr> 
    <td class="titre">Demi finale <br><span class="center size2 bold italic styleArial"><?php echo $D2000; ?></span>
    </td>
  </tr>
</table>

<table  class="width95PC center borderNone">
  <tr> 
    <td width="79%">&nbsp;</td>
    <td width="21%">&nbsp;</td>
  </tr>
  <tr> 
    <td class="coin4"><?php echo $clubA2001;?></td>
    <td class="coin4"><?php echo $A2001;?></td>
  </tr>
  <tr> 
    <td class="coin4"><?php if ($clubA2001=="-") echo "-";	else echo $clubA2002 ;?></td>
    <td class="coin4"><?php echo $A2002;?></td>
  </tr>
  <tr> 
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr> 
    <td class="coin4"><?php echo $clubA2003;?></td>
    <td class="coin4"><?php echo $A2003;?></td>
  </tr>
  <tr> 
    <td class="coin4"><?php if ($clubA2003=="-") echo "-";	else echo $clubA2004 ;?></td>
    <td class="coin4"><?php echo $A2004;?></td>
  </tr>
</table>
<br>

<table  class="width95PC center borderWidth1">
  <tr>
    <td class="titre"> Finale  <br><span class="center size2 bold italic styleArial"><?php echo $D1000; ?></span></td>
  </tr>
</table>

<table  class="width95PC center borderNone">
  <tr> 
    <td width="79%">&nbsp; </td>
    <td width="21%">&nbsp;</td>
  </tr>
  <tr> 
    <td class="coin5"><?php echo $clubA1001;?></td>
    <td class="coin5"><?php echo $A1001;?></td>
  </tr>
  <tr> 
    <td class="coin5"><?php echo $clubA1002;?></td>
    <td class="coin5"><?php echo $A1002;?></td>
  </tr>
</table>
<br>
<table class="width95PC center borderWidth1">
  <tr> 
    <td class="titre backgroundRed">Champion <?php echo $nomDivision2.' <br> '.$annee ;?></td>
  </tr>
</table>
<br>
<table class="width95PC center borderNone">
  <tr>
    <td class="center"><img src="<?php echo $champLogo;?>" width="100" height="100"></td>
  </tr>
  <tr> 
    <td class="coin5" class="titre"><?php echo $champion;?></td>
  </tr>
  </tr>
    <td>&nbsp; </td>
  </tr>
</table>
