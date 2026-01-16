<?php
//echo "reel : ".$effectifReel;
//echo "joueurs : ".$effectifJoueurs;
for ($i=1; $i<= 100; $i++) 
{
if (isset ($_POST['M'.$i])) ${"M".$i} = $_POST['M'.$i]; else ${"M".$i} = "";
}

for ($i=1 ; $i<24 ; $i++)
{
if (isset (${"joueur".$i})) ${"joueur".$i} = ${"joueur".$i}; else ${"joueur".$i}="";
if (isset (${"nLicence".$i})) ${"nLicence".$i} = ${"nLicence".$i}; else ${"nLicence".$i}="";
if (isset (${"idPerso".$i})) ${"idPerso".$i} = ${"idPerso".$i}; else ${"idPerso".$i}="";
}
?>
<table width="900" border="1" cellspacing="0"  cellpadding="0" align="left" height="500">
  <tr> 
    <td height="41" width="18"  bgcolor="#000000"><div align="center"><b><font face="Arial, Helvetica, sans-serif" size="4"><font color="#FFFFFF">A</font> </font></b></div></td>
    <td colspan="3" height="41" ><div align="center">Equipe <b>:<font face="Arial, Helvetica, sans-serif"><?php echo $clubA;?></font></b></div></td>
    <td height="38" bgcolor="#CCCCCC"  rowspan="2" width="33"><div align="center"></div></td>
    <td height="41" width="19" bgcolor="#000000" ><div align="center"><b><font face="Arial, Helvetica, sans-serif" size="4"><font color="#FFFFFF">B</font> </font></b></div></td>
    <td height="41" colspan="3" bgcolor="#FFFFFF" ><div align="center">Equipe <b>:<font face="Arial, Helvetica, sans-serif"><?php	 echo $clubB;	?></font></b></div></td>
    <td height="38" bgcolor="#CCCCCC"  rowspan="2" width="29"><div align="center"></div></td>
  </tr>
  <tr> 
    <td height="384" rowspan="24"  width="18"></td>
    <td width="16" height="24" ><div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif" size="2">N&deg;</font></div></td>
    <td width="144" height="24" class="Taille">NOM (lettres capitales)</td>
    <td width="183" height="24" class="Taille">N&deg;de licence</td>
    <td height="384" bgcolor="#FFFFFF"  rowspan="24" width="19"><div align="center"><font size="2" face="Arial, Helvetica, sans-serif"></font></div></td>
    <td height="24" width="17" bgcolor="#FFFFFF" ><div align="center"><font face="Arial, Helvetica, sans-serif">N&deg;</font></div></td>
    <td height="24" width="166" class="Taille">NOM (lettres capitales)</div></td>
    <td height="24" width="146" class="Taille">N&deg;de licence</div></td>
  </tr>
  
 <?php 
  for ($poste=1; $poste<=23 ; $poste++){?> 
	  <tr >
		<td width="16" height="24" valign="middle" class ="Taille"><?php echo $poste;?></td>
		<td width="144" height="24" valign="top"></td>
		<td width="183" height="24" valign="top"></td>
		<td width="33" bgcolor="#CCCCCC"></td>
		<td width="17"  height="24" valign="middle" class="Taille"><?php echo $poste;?></td>
		<td width="166" height="24" valign="middle" class="Taillebold">
			<?php  //***********    Nom du joueur     ************
			for ($i=1; $i<=$effectifReel ; $i++){
				if (${"M".$i}==$poste){	echo $tabJoueur[$i-1];	${"idPerso".$poste}= $i;	}}	?></td>
		
		<td width="146"  height="24" class="Taille">
			<?php  //***********    N° licence du joueur     ************
			for ($i=1; $i<=$effectifReel ; $i++){
				if (${"M".$i}==$poste){	echo $tabLicence[$i-1];}} ?></div></td>

		<td width="29" bgcolor="#CCCCCC" height="24" valign="middle">&nbsp;</td>
	  </tr>
	  <?php 
	}
 ?> 

  <tr> 
    <td colspan="2" height="24" >&nbsp;</td>
    <td colspan="2" height="24"  valign="top"> <div align="center"><font face="Arial, Helvetica, sans-serif" size="2">Capitaine : N&deg; <b> </b></font></div></td>
    <td width="33" bgcolor="#CCCCCC" height="24"  valign="top">&nbsp;</td>
    <td colspan="2" bgcolor="#FFFFFF" height="24" >&nbsp;</td>
    <td colspan="2" bgcolor="#FFFFFF" height="24" ><div align="center"><font face="Arial, Helvetica, sans-serif" size="2">Capitaine :<b> </b> N&deg; <?php echo $capitaine; ?><b> </b><b> </b></font></div></td>
    <td width="29" bgcolor="#CCCCCC" height="24" >&nbsp;</td>
  </tr>
</table>

