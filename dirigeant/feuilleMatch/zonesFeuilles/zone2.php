<table width="900" border="1" cellspacing="0">
  <tr valign="middle" align="center" > 
    <td width="99"><div align="center"><b><font face="Arial, Helvetica, sans-serif" size="4">A</font></b></div></td>
    <td width="197"><div align="center"><b><font color="#000000" face="Arial, Helvetica, sans-serif" size="2">NOM <font size="1">(lettres capitales)<font size="2"> et Pr&eacute;nom</font></font></font></b></div></td>
    <td width="133" bgcolor="#CCCCCC"><div align="center"><b><font color="#000000" face="Arial, Helvetica, sans-serif" size="2">N&deg;de licence</font></b></div></td>
    <td width="103"><div align="center"><b><font face="Arial, Helvetica, sans-serif" size="4">B</font></b></div></td>
    <td width="218"><div align="center"><b><font color="#000000" face="Arial, Helvetica, sans-serif" size="2">NOM <font size="1">(lettres capitales)<font size="2"> et Pr&eacute;nom</font></font></font></b></div></td>
    <td width="124" bgcolor="#CCCCCC"><div align="center"><b><font color="#000000" face="Arial, Helvetica, sans-serif" size="2">N&deg;de licence</font></b></div></td>
  </tr>
  <tr valign="middle" align="center" >
	<td rowspan="2" height="48" width="99"><div id="Taille">Entraineur(s)</div> </td>
    <td width="197" height="23"><div class="Taillebold"><?php   echo $nomEntraineur.' '.ucfirst(strtolower($prenomEntraineur));?></div></td>
    <td width="133" bgcolor="#CCCCCC" height="23"><div class="Taille"><?php  echo $licenceEntraineur;?></div></td>
    <td rowspan="2" height="48" width="103"><div id="Taille"> Entraineur(s)</div></td>
    <td width="218" height="23">&nbsp;</td>
    <td width="124" bgcolor="#CCCCCC" height="23">&nbsp;</td>
  </tr>
  <tr valign="middle" align="center" > 
    <td width="197" height="24"><div class="Taillebold"><?php   echo $nomEntraineur2.' '.ucfirst(strtolower($prenomEntraineur2));?></div></td>
    <td width="133" bgcolor="#CCCCCC" height="24"><div class="Taille"><?php  echo $licenceEntraineur2;?></div></td>
    <td width="218" height="24">&nbsp;</td>
    <td width="124" bgcolor="#CCCCCC" height="24">&nbsp;</td>
  </tr>
  <tr valign="middle" align="center"><td width="99" height="24"><div id="Taille">Soigneur</div></td>
    <td width="197" height="24"><div class="Taillebold"><?php   echo $nomSoigneur.' '.ucfirst(strtolower($prenomSoigneur));?></div></td>
    <td width="133" bgcolor="#CCCCCC" height="24"><div class="Taille"><?php  echo $licenceSoigneur;?></div></td>
    <td width="103" height="24"><div id="Taille"> Soigneur </div></td>
    <td width="218" height="24">&nbsp;</td>
    <td width="124" bgcolor="#CCCCCC" height="24">&nbsp;</td>
  </tr>
  <tr valign="middle" align="center" > 
    <td width="99" height="24"><div id="Taille"> Adjoint terrain </div></td>
    <td width="197" height="24"><div class="Taillebold"><?php   echo $nomAdjoint.' '.ucfirst(strtolower($prenomAdjoint));?></div></td>
    <td width="133" bgcolor="#CCCCCC" height="24"><div class="Taille"><?php  echo $licenceAdjoint;?></div></td>
    <td width="103" height="24"><div id="Taille"> Adjoint terrain</div></td>
    <td width="218" height="24">&nbsp;</td>
    <td width="124" bgcolor="#CCCCCC" height="24">&nbsp;</td>
  </tr>
  <tr valign="middle" align="center" > 
    <td width="99" height="5"><div id="Taille"> M&eacute;decin* </div></td>
    <td width="197" height="5"><div class="Taillebold"><?php echo $nomMedecin.' '.ucfirst(strtolower($prenomMedecin)); ?></div></td>
    <td width="133" bgcolor="#CCCCCC" height="5"><div class="Taille"><?php  echo $licenceMedecin;?></div></td>
    <td width="103" height="5"><div id="Taille"> M&eacute;decin </div></td>
    <td width="218" height="5">&nbsp;</td>
    <td width="124" bgcolor="#CCCCCC" height="5">&nbsp;</td>
  </tr>
</table>
<table width="900" border="0" cellspacing="0">
  <tr valign="middle" align="center" >
    <td height="24" valign="top"><font size="2">* En cas de non-pr&eacute;sence physique d'un m&eacute;decin, porter les coordonn&eacute;es t&eacute;l&eacute;phoniques 
      du m&eacute;decin de garde : .......................................................</font></td>
  </tr>
  <tr valign="middle" align="center" >
    <td height="24"><font face="Arial, Helvetica, sans-serif" size="4"><b><font color="#000000" size="3">PREPARAREUR PHYSIQUE (1DF, 2DF, 3DF, Top 8, Armelle Auclair uniquement)</font></b></font></td>
  </tr>
</table>
<table width="900" border="1" cellspacing="0">
  <tr valign="middle" align="center" > 
    <td width="99" height="24"><div id="Taille"> Equipe  A </div></td>
    <td width="193" height="24"><div class="Taillebold"><?php echo $nomPrepa.' '.ucfirst(strtolower($prenomPrepa)); ?></div></td>
    <td width="137" bgcolor="#CCCCCC" height="24"><div class="Taille"><?php echo $licencePrepa;?></div>    </td>
    <td width="103" height="24"><div id="Taille">Equipe B </div></td>
    <td width="218" height="24">&nbsp;</td>
    <td width="124" bgcolor="#CCCCCC" height="24">&nbsp;</td>
  </tr>
</table>

