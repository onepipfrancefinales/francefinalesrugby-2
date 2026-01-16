<?php
//echo "reel : ".$effectifReel;
//echo "joueurs : ".$effectifJoueurs;
for ($i=1; $i<=$effectifReel; $i++) 
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
    <td height="41" width="13"  bgcolor="#000000"><div align="center"><b><font face="Arial, Helvetica, sans-serif" size="4"><font color="#FFFFFF">A</font></font></b></div></td>
    <td colspan="3" height="41" ><div align="center">Equipe <b>:<font face="Arial, Helvetica, sans-serif"><?php echo $clubA;?></font></b></div></td>
    <td rowspan="2" height="73" bgcolor="#CCCCCC"  width="17"><div align="center"></div></td>
    <td height="41" width="14" bgcolor="#000000" ><div align="center"><b><font face="Arial, Helvetica, sans-serif" size="4"><font color="#FFFFFF">B</font></font></b></div></td>
    <td height="41" colspan="3" bgcolor="#FFFFFF" ><div align="center">Equipe <b>:<font face="Arial, Helvetica, sans-serif"><?php	 echo $clubB;	?></font></b></div></td>
    <td rowspan="2" height="73" bgcolor="#CCCCCC"  width="24"><div align="center"></div></td>
  </tr>
  <tr> 
    <td height="367" rowspan="24"  width="13"></td>
    <td width="27" height="25" ><div id="Taille"><div align="center">N&deg; </div></div></td>
    <td width="186" height="25" ><div id="Taille">NOM (lettres capitales)</div> </td>
    <td width="138" height="25" ><div id="Taille">N&deg;de licence</div> </td>
    <td height="380" bgcolor="#FFFFFF"  rowspan="24" width="14"></td>
    <td height="25" width="27"><div id="Taille"><div align="right">N&deg; </div></div></td>
    <td height="25" width="186"><div id="Taille">NOM lettres capitales) </div></td>
    <td height="25" width="138"><div id="Taille"> N&deg;de licence </div></td>
  </tr>
  
 <?php 
  for ($poste=1; $poste<=23 ; $poste++){?>
	  <tr valign="middle" align="center"> 
		<td width="27"  class="Taille"><?php echo $poste;?></td>
		<td width="186" class="Taillebold"> 
			<?php //***********    Nom  des joueurs    ************ 
			for ($i=1; $i<=$effectifReel ; $i++){
			if (${"M".$i}==$poste){echo $tabJoueur[$i-1]; ${"idPerso".$poste}= $i;}
			}?></td>
	   
		<td width="138"  class="Taille">
			<?php //***********   Licence des joueurs    ************ 
			for ($i=1; $i<=$effectifReel ; $i++){
			if (${"M".$i}==$poste){echo $tabLicence[$i-1];}}?></td>
			
		<td width="17" bgcolor="#CCCCCC"></td>
		<td width="27" class="Taille"><?php echo $poste;?></td>
		<td width="186" ></td>
		<td width="138" ></td>
		<td width="24" bgcolor="#CCCCCC"></td>
	  </tr>
	  <?php 
	}
 ?>
   
 <tr> 
    <td colspan="2" height="24" >&nbsp;</td>
    <td colspan="2" height="24"  valign="top"><div align="center"><font face="Arial, Helvetica, sans-serif" size="2">Capitaine : N&deg; </font></div></td>
    <td width="33" bgcolor="#CCCCCC" height="24"  valign="top"></td>
    <td colspan="2" bgcolor="#FFFFFF" height="24" ></td>
    <td colspan="2" bgcolor="#FFFFFF" height="24" ><div align="center"><font face="Arial, Helvetica, sans-serif" size="2">Capitaine : N&deg; <?php echo $capitaine; ?></font></div></td>
    <td width="29" bgcolor="#CCCCCC" height="24" ></td>
  </tr>
</table>  

 
 


