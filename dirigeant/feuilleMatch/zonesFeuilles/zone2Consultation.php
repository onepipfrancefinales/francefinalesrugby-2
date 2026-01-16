
<table width="900" border="1" cellspacing="0" cellpadding="0">
  <tr bordercolor="#000000"> 
    <td width="93" height="24"> 
      <div align="center"><b><font face="Arial, Helvetica, sans-serif" size="4">A</font></b></div>
    </td>
    <td width="207" height="24"> 
      <div align="center"><b><font color="#000000" face="Arial, Helvetica, sans-serif" size="2">NOM 
        <font size="1">(lettres capitales)<font size="2"> et Pr&eacute;nom</font></font></font></b></div>
    </td>
    <td width="134" height="24" bordercolor="#000000" bgcolor="#CCCCCC"> 
      <div align="center"><b><font color="#000000" face="Arial, Helvetica, sans-serif" size="2">N&deg;de 
        licence</font></b></div>
    </td>
    <td width="92" height="24"> 
      <div align="center"><b><font face="Arial, Helvetica, sans-serif" size="4">B</font></b></div>
    </td>
    <td width="212" height="24"> 
      <div align="center"><b><font color="#000000" face="Arial, Helvetica, sans-serif" size="2">NOM 
        <font size="1">(lettres capitales)<font size="2"> et Pr&eacute;nom</font></font></font></b></div>
    </td>
    <td width="148" height="24" bgcolor="#CCCCCC"> 
      <div align="center"><b><font color="#000000" face="Arial, Helvetica, sans-serif" size="2">N&deg;de 
        licence</font></b></div>
    </td>
  </tr>
  <tr bordercolor="#000000"> 
    <td rowspan="2" height="48" width="99" align="center" valign="middle"> 
      <div class="TailleGauche">Entraineur(s)</div>
    </td>
    <td width="197" height="23" align="center" valign="middle"> 
      <div class="Taillebold"> 
        <?php   echo $nomEntraineur.' '.$prenomEntraineur;?>
      </div>
    </td>
    <td width="133" bgcolor="#CCCCCC" height="23" align="center" valign="middle"> 
      <div class="Taille"> 
        <?php  echo substr($licenceEntraineur,0,4).' '.substr($licenceEntraineur,4,2).' '.substr($licenceEntraineur,6,1).' '.substr($licenceEntraineur,-6); ?>
      </div>
    </td>
    <td rowspan="2" height="48" width="92"><div class="TailleGauche">Entraineur(s)</div></td>
    <td width="210" height="24" bordercolor="#333333"> 
      <div class="Taillebold"> 
        <?php   echo $nomEntraineurB.' '.$prenomEntraineurB;?>
      </div>
    </td>
    <td width="154" height="24" bgcolor="#CCCCCC" bordercolor="#333333"> 
      <div class="Taille"> 
        <?php  echo substr($licenceEntraineurB,0,4).' '.substr($licenceEntraineurB,4,2).' '.substr($licenceEntraineurB,6,1).' '.substr($licenceEntraineurB,-6); ?>
      </div>
    </td>
  </tr>
  <tr > 
    <td width="197" height="24" align="center" valign="middle"> 
      <div class="Taillebold"> 
        <?php   echo $nomEntraineur2.' '.$prenomEntraineur2;?>
      </div>
    </td>
    <td width="133" bgcolor="#CCCCCC" height="24" align="center" valign="middle"> 
      <div class="Taille"> 
        <?php  echo substr($licenceEntraineur2,0,4).' '.substr($licenceEntraineur2,4,2).' '.substr($licenceEntraineur2,6,1).' '.substr($licenceEntraineur2,-6); ?>
      </div>
    </td>
    <td width="210" height="24" bordercolor="#333333"> 
      <div class="Taillebold"> 
        <?php   echo $nomEntraineur2B.' '.$prenomEntraineur2B;?>
      </div>
    </td>
    <td width="154" height="24" bgcolor="#CCCCCC" bordercolor="#333333"> 
      <div class="Taille"> 
        <?php  echo substr($licenceEntraineur2B,0,4).' '.substr($licenceEntraineur2B,4,2).' '.substr($licenceEntraineur2B,6,1).' '.substr($licenceEntraineur2B,-6); ?>
      </div>
    </td>
  </tr>
  <tr > 
    <td width="99" height="24" align="center" valign="middle"> 
      <div class="TailleGauche">Soigneur</div>
    </td>
    <td width="197" height="24" align="center" valign="middle"> 
      <div class="Taillebold"> 
        <?php   echo $nomSoigneur.' '.$prenomSoigneur;?>
      </div>
    </td>
    <td width="133" bgcolor="#CCCCCC" height="24" align="center" valign="middle"> 
      <div class="Taille"> 
        <?php  echo substr($licenceSoigneur,0,4).' '.substr($licenceSoigneur,4,2).' '.substr($licenceSoigneur,6,1).' '.substr($licenceSoigneur,-6); ?>
      </div>
    </td>
    <td width="92" height="24"><div class="TailleGauche">Soigneur</div></td>
    <td width="210" height="24" bordercolor="#333333"> 
      <div class="Taillebold"> 
        <?php   echo $nomSoigneurB.' '.$prenomSoigneurB;?>
      </div>
    </td>
    <td width="154" height="24" bgcolor="#CCCCCC" bordercolor="#333333"> 
      <div class="Taille"> 
        <?php  echo substr($licenceSoigneurB,0,4).' '.substr($licenceSoigneurB,4,2).' '.substr($licenceSoigneurB,6,1).' '.substr($licenceSoigneurB,-6); ?>
      </div>
    </td>
  </tr>
  <tr > 
    <td width="99" height="24" align="center" valign="middle"> 
      <div class="TailleGauche"> Adjoint terrain </div>
    </td>
    <td width="197" height="24" align="center" valign="middle"> 
      <div class="Taillebold"> 
        <?php   echo $nomAdjoint.' '.$prenomAdjoint;?>
      </div>
    </td>
    <td width="133" bgcolor="#CCCCCC" height="24" align="center" valign="middle"> 
      <div class="Taille"> 
        <?php  echo substr($licenceAdjoint,0,4).' '.substr($licenceAdjoint,4,2).' '.substr($licenceAdjoint,6,1).' '.substr($licenceAdjoint,-6); ?>
      </div>
    </td>
    <td width="92" height="24"><div class="TailleGauche">Adjoint 
      terrain</div></td>
    <td width="210" height="24" bordercolor="#333333"> 
      <div class="Taillebold"> 
        <?php   echo $nomAdjointB.' '.$prenomAdjointB;?>
      </div>
    </td>
    <td width="154" height="24" bgcolor="#CCCCCC" bordercolor="#333333"> 
      <div class="Taille"> 
        <?php  echo substr($licenceAdjointB,0,4).' '.substr($licenceAdjointB,4,2).' '.substr($licenceAdjointB,6,1).' '.substr($licenceAdjointB,-6); ?>
      </div>
    </td>
  </tr>
  <tr > 
    <td width="99" height="5" align="center" valign="middle"> 
      <div class="TailleGauche"> M&eacute;decin*</div>
    </td>
    <td width="197" height="5" align="center" valign="middle"> 
      <div class="Taillebold"> 
        <?php echo $nomMedecin.' '.$prenomMedecin; ?>
      </div>
    </td>
    <td width="133" bgcolor="#CCCCCC" height="5" align="center" valign="middle"> 
      <div class="Taille"> 
        <?php  echo substr($licenceMedecin,0,4).' '.substr($licenceMedecin,4,2).' '.substr($licenceMedecin,6,1).' '.substr($licenceMedecin,-6); ?>
      </div>
    </td>
    <td width="92" height="24"><div class="TailleGauche">M&eacute;decin</div></td>
    <td width="210" height="24" bordercolor="#333333"> 
      <div class="Taillebold"> 
        <?php   echo $nomMedecinB.' '.$prenomMedecinB;?>
      </div>
    </td>
    <td width="154" height="24" bgcolor="#CCCCCC" bordercolor="#333333"> 
      <div class="Taille"> 
        <?php  echo substr($licenceMedecinB,0,4).' '.substr($licenceMedecinB,4,2).' '.substr($licenceMedecinB,6,1).' '.substr($licenceMedecinB,-6); ?>
      </div>
    </td>
  </tr>
</table>
<table width="900" border="0" cellspacing="0">
  <tr valign="middle" align="center" >
    <td height="9" valign="top"><font size="2">* En cas de non-pr&eacute;sence 
      physique d'un m&eacute;decin, porter les coordonn&eacute;es t&eacute;l&eacute;phoniques 
      du m&eacute;decin de garde : .......................................................</font></td>
  </tr>
  <tr valign="middle" align="center" > 
    <td height="24"><font face="Arial, Helvetica, sans-serif" size="4"><b><font color="#000000" size="3">PREPARAREUR 
      PHYSIQUE (1DF, 2DF, 3DF, Top 8, Armelle Auclair uniquement)</font></b></font></td>
  </tr>
</table>
<table width="900" border="1" cellspacing="0">
  <tr valign="middle" align="center" > 
    <td width="97" height="24"> 
      <div class="TailleGauche"> Equipe A </div>
    </td>
    <td width="202" height="24"> 
      <div class="Taillebold"> 
        <?php echo $nomPrepa.' '.$prenomPrepa; ?>
      </div>
    </td>
    <td width="130" bgcolor="#CCCCCC" height="24"> 
      <div class="Taille"> 
        <?php  echo substr($licencePrepa,0,4).' '.substr($licencePrepa,4,2).' '.substr($licencePrepa,6,1).' '.substr($licencePrepa,-6); ?>
      </div>
    </td>
    <td width="89" height="24"> 
      <div class="TailleGauche">Equipe 
      B </div></td>
    <td width="204" height="24" bordercolor="#333333"> 
      <div class="Taillebold"> 
        <?php   echo $nomPrepaB.' '.$prenomPrepaB;?>
      </div>
    </td>
    <td width="152" height="24" bgcolor="#CCCCCC" bordercolor="#333333"> 
      <div class="Taille"> 
        <?php  echo substr($licencePrepaB,0,4).' '.substr($licencePrepaB,4,2).' '.substr($licencePrepaB,6,1).' '.substr($licencePrepaB,-6); ?>
      </div>
    </td>
  </tr>
</table>
</body>
</html>
