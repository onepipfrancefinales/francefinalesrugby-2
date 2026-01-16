
<?php
if ($division==180 or $division ==200)
{
?>
<h2>Modalit&eacute;s de qualifications aux championnats de France 2019 </h2>
<P><a href="../../phases_finales/honneur/pagehonneur.php?variable_1=2019&annee=2019"><font color="#FF0000"><b><font face="Arial, Helvetica, sans-serif">Oppositions 
  des 32me de finales 2019 en Promotion et 2me s&eacute;rie</font></b></font></a> 
<P><font face="Arial, Helvetica, sans-serif">15 Equipes de la ligue sont engag&eacute;es 
  en championnat de France 2019.<br>
  12 directements qualifi&eacute;es en 32 de finale et 3 qualifi&eacute;es pour 
  disputer un barrage </font>
<P><font face="Arial, Helvetica, sans-serif"><b><font size="3">3 Possibilit&eacute;s 
  d'acceder aux championnats de france </font></b> </font>
<P> <font face="Arial, Helvetica, sans-serif"><b>-1-</b> Toutes les equipes qualifi&eacute;es 
  pour les quarts de finales du championnat d'occitanie (Tableau 1)<br>
  seront engag&eacute;es pour les 32me de finale (8 equipes). </font>
<P><font face="Arial, Helvetica, sans-serif">-<b>2-</b> Dans le tableau 2, les 
  &eacute;quipes &eacute;limin&eacute;es du tableau 1 se rencontreront en quarts 
  demis et finale.<br>
  </font>
<P><font face="Arial, Helvetica, sans-serif">les &eacute;quipes demi-finalistes 
  seront qualifi&eacute;es directement pour les 32me de fnales.<br>
  Les 4 &eacute;quipes &eacute;limin&eacute;es au 1er tour du tableau 2 se rencontreront. 
  Les 2 gagnants seront qualifi&eacute;s pour les barrages du championnat de france<br>
  participeront au barrages d'accession des 32me du championnat de France (4 &eacute;quipes 
  : 2 directes et 2 barrages). </font>
<P>&nbsp; 
<P><font face="Arial, Helvetica, sans-serif"><b>-3-</b>Le tableau 3 est compos&eacute; 
  des &eacute;quipes class&eacute;es de 17 &agrave; 28. elles se rencontreront 
  en barrages pour les &eacute;quipes les plus mal class&eacute;es, puis en huitit&egrave;me 
  , quarts demi et finale.<br>
  les 2 &eacute;quipes qui attteindront la finale seront qualifi&eacute;es pour 
  les barrages d'accession aux 32me de finale du champ de France (2 equipes barragistes) 
  </font>
<P>&nbsp;
<P>

<?php
}
elseif ($division==190)
{
?>
<h2>Modalit&eacute;s de qualifications aux championnats de France 2019 </h2>
<P><a href="../../phases_finales/promotion/pagepromotion.php?variable_1=2019&annee=2019"><font color="#FF0000"><b><font face="Arial, Helvetica, sans-serif">Oppositions 
  des 32me de finales 2019 en 1re s&eacute;rie</font></b></font></a> 
<P><font face="Arial, Helvetica, sans-serif">14 Equipes de la ligue sont engag&eacute;es 
  en championnat de France 2019.<br>
  12 directements qualifi&eacute;es en 32 de finale et 2 qualifi&eacute;es pour 
  disputer un barrage </font>
<P><b><font size="3" face="Arial, Helvetica, sans-serif">3 Possibilit&eacute;s 
  d'acceder aux championnats de france </font></b>
<P> <b><font face="Arial, Helvetica, sans-serif" color="#000000">-1-</font></b><font color="#000000" face="Arial, Helvetica, sans-serif"> 
  Toutes les equipes qualifi&eacute;es pour les quarts de finales du championnat 
  d'occitanie (Tableau 1)<br>
  seront engag&eacute;es pour les 32me de finale (8 equipes). </font>
<P><font color="#000000" face="Arial, Helvetica, sans-serif">-<b>2-</b> Dans le 
  tableau 2, les &eacute;quipes &eacute;limin&eacute;es du tableau 1 se rencontreront 
  en quarts demis et finale.<br>
  </font>
<P><font color="#000000" face="Arial, Helvetica, sans-serif">les &eacute;quipes 
  demi-finalistes seront qualifi&eacute;es directement pour les 32me de fnales 
  du champ de France 2019.<br>
  </font>
<P>&nbsp; 
<P><font color="#000000" face="Arial, Helvetica, sans-serif"><b>-3-</b>Le tableau 
  3 est compos&eacute; des &eacute;quipes class&eacute;es de 17 &agrave; 28. elles 
  se rencontreront en barrages pour les &eacute;quipes les plus mal class&eacute;es, 
  puis en huitit&egrave;me , quarts demi et finale.<br>
  les 2 &eacute;quipes qui attteindront la finale seront qualifi&eacute;es pour 
  les barrages d'accession aux 32me de finale du champ de France (2 equipes barragistes) 
  </font>
<P>&nbsp;
<P>


<?php


}


?>


 
  <?php
//require ("../../phasesfinalesterr2019/fonctionspfterrESDL2019.php");


quarts2019($bdcomiteClub, $division, $annee);

?>
  <br>
<P>


<table wclassth="1000" border="0" align="left"  cellspacing="0"  >
  <tr> 
    <td colspan="14"  > 
      <h2><font size="4">Tableau 2</font></h2>
    </td>
  </tr>
  <tr> 
    <td wclassth="160" width="1"  ></td>
    <td wclassth="30" width="1"  ></td>
    <td wclassth="32" width="1"  ></td>
    <td wclassth="160" width="5"  >&nbsp;</td>
    <td wclassth="160" colspan="2"  ></td>
    <td wclassth="21" width="81"  >&nbsp;</td>
    <td wclassth="160"  align="left" >&nbsp;</td>
    <td wclassth="160"  align="left" >&nbsp;</td>
    <td wclassth="22" width="86"  >&nbsp;</td>
    <td wclassth="160" width="5"  >&nbsp;</td>
    <td wclassth="160" colspan="2"  >&nbsp;</td>
    <td wclassth="21" width="47"  ></td>
  </tr>
  <tr> 
    <td wclassth="160" width="1"  ></td>
    <td wclassth="30" width="1"  ></td>
    <td wclassth="32" width="1"  ></td>
    <td wclassth="160" width="5"  >&nbsp;</td>
    <td wclassth="160" colspan="2"  > </td>
    <td wclassth="21" width="81"  > 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><font face="Arial, Helvetica, sans-serif"><font size="2"><font size="2"><i><b><i><font size="2" face="Arial, Helvetica, sans-serif"><strong>1er 
        tour</strong></font> </i></b></i></font></font></font></font></div>
    </td>
    <td wclassth="160"  align="left" > 
      <div align="center"><b><i><font face="Arial, Helvetica, sans-serif" size="2">2me 
        tour</font></i></b></div>
    </td>
    <td wclassth="160"  align="left" > 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><font face="Arial, Helvetica, sans-serif"><font size="2"><font size="2"><i><b><i><font face="Arial, Helvetica, sans-serif" size="2">3me 
        tour</font></i></b></i></font></font></font></font></div>
    </td>
    <td wclassth="22" width="86"  > 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><font face="Arial, Helvetica, sans-serif"><font size="2"><font size="2"><i><b><i></i></b></i></font></font></font></font></div>
    </td>
    <td wclassth="160" width="5"  > 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><font face="Arial, Helvetica, sans-serif"><font size="2"><font size="2"><i><b></b></i></font></font></font></font></div>
    </td>
    <td wclassth="160" colspan="2"  > 
      <div align="center"><b><i></i></b></div>
    </td>
    <td wclassth="21" width="47"  ></td>
  </tr>
  <tr> 
    <td wclassth="160" width="1"  ></td>
    <td wclassth="30" width="1"  > 
    <td wclassth="32" width="1"  > </td>
    <td wclassth="160" width="5"  >&nbsp;</td>
    <td wclassth="160" width="40"  > </td>
    <td wclassth="30" width="20"  > </td>
    <td wclassth="21" width="81"  > 
      <div class="affichageEquipeTab" > 
        <?php 
		$division = $division +1 ;

quarts2019($bdcomiteClub, $division, $annee);
		echo $clubA4001; ?>
      </div>
      <div class="affichageGATab" > 
        <?php echo $A4001;  ?>
      </div>
      <div class="affichageEquipeTab" > 
        <?php echo $clubA4002; ?>
      </div>
      <div class="affichageGATab" > 
        <?php echo $A4002;  ?>
      </div>
    </td>
    <td wclassth="160" align="left" width="59"  ></td>
    <td wclassth="30" width="50"  ></td>
    <td wclassth="22" width="86"  ></td>
    <td wclassth="160" width="5"  ></td>
    <td wclassth="160" width="22"  ></td>
    <td wclassth="30" width="101"  ></td>
    <td wclassth="21" width="47"  ></td>
  <tr> 
    <td wclassth="160"   height="7" width="1"></td>
    <td wclassth="30"   height="7" width="1"></td>
    <td wclassth="32"   height="7" width="1"></td>
    <td wclassth="160"   height="7" width="5">&nbsp;</td>
    <td wclassth="160"   height="7" width="40"> </td>
    <td wclassth="30"  height="7" width="20"> </td>
    <td wclassth="21"   height="7" width="81"></td>
    <td wclassth="160" align="left"   height="7" width="59"></td>
    <td wclassth="30"   height="7" width="50"></td>
    <td wclassth="22"   height="7" width="86"></td>
    <td wclassth="160"   height="7" width="5"></td>
    <td wclassth="160"   height="7" width="22"></td>
    <td wclassth="30"   height="7" width="101"></td>
    <td wclassth="21"   height="7" width="47"></td>
  </tr>
  <tr> 
    <td wclassth="160" width="1"  ></td>
    <td wclassth="30" width="1"  ></td>
    <td wclassth="32" width="1"  ></td>
    <td wclassth="160" width="5"  ></td>
    <td wclassth="160" width="40"  ></td>
    <td wclassth="30" width="20"  ></td>
    <td wclassth="21" width="81"  ></td>
    <td wclassth="160" width="59"  > 
      <div class="equipeB" > 
        <?php echo $clubA2001; ?>
      </div>
      <div class="scoreBarrage2" > 
        <?php 	echo $A2001;  ?>
      </div>
      <div class="equipeB" > 
        <?php echo $clubA2002; ?>
      </div>
      <div class="scoreBarrage2" > 
        <?php 	echo $A2002;  ?>
      </div>
    </td>
    <td wclassth="30" width="50"  >&nbsp; </td>
    <td wclassth="22" width="86"  ></td>
    <td wclassth="160" width="5"  ></td>
    <td wclassth="160" width="22"  ></td>
    <td wclassth="30" width="101"  ></td>
    <td wclassth="21" width="47"  ></td>
  </tr>
  <tr valign="top"> 
    <td wclassth="160" width="1"  ></td>
    <td wclassth="30" width="1"  ></td>
    <td wclassth="32" width="1"  ></td>
    <td wclassth="160" width="5"  ></td>
    <td wclassth="160" width="40"  ></td>
    <td wclassth="30" width="20"  ></td>
    <td wclassth="21" width="81"  ></td>
    <td wclassth="160" align="left" width="59"  > </td>
    <td wclassth="30" width="50"  > </td>
    <td wclassth="22" width="86"  ></td>
    <td width="5"  ></td>
    <td width="22"  ></td>
    <td width="101"  ></td>
    <td width="47"  ></td>
  </tr>
  <tr> 
    <td wclassth="160" width="1"  ></td>
    <td wclassth="30" width="1"  ></td>
    <td wclassth="32" width="1"  ></td>
    <td wclassth="160" width="5"  >&nbsp;</td>
    <td wclassth="160" width="40"  > </td>
    <td wclassth="30" width="20"  > </td>
    <td wclassth="21" width="81"  > 
      <div class="affichageEquipeTab" > 
        <?php echo $clubA4003;?>
      </div>
      <div class="affichageGATab" > 
        <?php echo $A4003;  ?>
      </div>
      <div class="affichageEquipeTab" > 
        <?php echo $clubA4004;?>
      </div>
      <div class="affichageGATab" > 
        <?php echo $A4004;  ?>
      </div>
    </td>
    <td wclassth="160" align="left" width="59"  ></td>
    <td wclassth="30" width="50"  ></td>
    <td wclassth="22" width="86"  ></td>
    <td width="5"  ></td>
    <td width="22"  ></td>
    <td width="101"  ></td>
    <td width="47"  ></td>
  </tr>
  <tr> 
    <td wclassth="160" width="1"  ></td>
    <td wclassth="30" width="1"  ></td>
    <td wclassth="32" width="1" ></td>
    <td wclassth="160" width="5" >&nbsp;</td>
    <td wclassth="160" width="40" > </td>
    <td wclassth="30" width="20" > </td>
    <td wclassth="21" width="81" ></td>
    <td wclassth="160" align="left" width="59" ></td>
    <td wclassth="30" width="50" ></td>
    <td wclassth="22" width="86" ></td>
    <td wclassth="160" width="5" >&nbsp;</td>
    <td wclassth="160" width="22" ><font size="2" face="Arial, Helvetica, sans-serif"><b><i><strong> 
      </strong></i></b></font> </td>
    <td wclassth="30" width="101"  ></td>
    <td wclassth="21" width="47" ></td>
  </tr>
  <tr> 
    <td width="1"   ></td>
    <td width="1"  ></td>
    <td width="1"   ></td>
    <td width="5"   ></td>
    <td width="40"   ></td>
    <td wclassth="30" width="20"  ></td>
    <td wclassth="21" width="81"  ></td>
    <td wclassth="160"  align="left" width="59" ></td>
    <td wclassth="30" width="50"  > 
      <div class="equipeQ" > 
        <?php
		finale2019($bdcomiteClub, $division, $annee);
		 echo $clubA1001;  ?>
      </div>
      <div class="affichageGAQ" > 
        <?php 	echo $A1001;  ?>
      </div>
      <div class="equipeQ" > 
        <?php echo $clubA1002;  ?>
      </div>
      <div class="affichageGAQ" > 
        <?php 	echo $A1002;  ?>
      </div>
    </td>
    <td wclassth="22" width="86"  ></td>
    <td wclassth="160" width="5"  >&nbsp;</td>
    <td wclassth="160" width="22"  > </td>
    <td wclassth="30" width="101"  > </td>
    <td wclassth="21" width="47"  ></td>
  </tr>
  <tr> 
    <td wclassth="160" width="1"  ></td>
    <td wclassth="30" width="1"  ></td>
    <td wclassth="32" width="1"  ></td>
    <td wclassth="160" width="5"  ></td>
    <td wclassth="160" width="40"  ></td>
    <td wclassth="30" width="20"  ></td>
    <td wclassth="21" width="81"  ></td>
    <td wclassth="160" align="left" width="59"  ></td>
    <td wclassth="30" width="50"  ></td>
    <td width="86"  > </td>
    <td width="5"  >&nbsp;</td>
    <td width="22"  > </td>
    <td width="101"   > </td>
    <td width="47"  ></td>
  </tr>
  <tr> 
    <td wclassth="160" width="1"  ></td>
    <td wclassth="30" width="1"  ></td>
    <td wclassth="32" width="1"  ></td>
    <td wclassth="160" width="5"  >&nbsp;</td>
    <td wclassth="160" width="40"  > </td>
    <td wclassth="30" width="20"  > </td>
    <td wclassth="21" width="81"  ></td>
    <td wclassth="160" align="left" width="59"  ></td>
    <td wclassth="30" width="50"  ></td>
    <td width="86"  ></td>
    <td width="5"  ></td>
    <td width="22"  ></td>
    <td wclassth="30" width="101"  ></td>
    <td width="47"  ></td>
  </tr>
  <tr> 
    <td wclassth="160" width="1"  ></td>
    <td wclassth="30" width="1"  ></td>
    <td wclassth="32" width="1"  ></td>
    <td wclassth="160" width="5"  >&nbsp;</td>
    <td wclassth="160" width="40"  > </td>
    <td wclassth="30" width="20"  > </td>
    <td wclassth="21" width="81"  > 
      <div class="affichageEquipeTab" > 
        <?php echo $clubA4005;?>
      </div>
      <div class="affichageGATab" > 
        <?php echo $A4005;  ?>
      </div>
      <div class="affichageEquipeTab" > 
        <?php	 echo $clubA4006; ?>
      </div>
      <div class="affichageGATab" > 
        <?php echo $A4006;  ?>
      </div>
    </td>
    <td wclassth="160" align="left" width="59"  ></td>
    <td wclassth="30" width="50"  ></td>
    <td width="86"  ></td>
    <td width="5"  ></td>
    <td width="22"  ></td>
    <td width="101"  ></td>
    <td width="47"  ></td>
  </tr>
  <tr> 
    <td wclassth="160" width="1"  ></td>
    <td wclassth="30" width="1"  ></td>
    <td wclassth="32" width="1"  ></td>
    <td wclassth="160" width="5"  ></td>
    <td wclassth="160" width="40"  ></td>
    <td wclassth="30" width="20"  ></td>
    <td wclassth="21" width="81"  ></td>
    <td wclassth="160" align="left" width="59"  > 
      <div class="equipeB" > 
        <?php 	echo $clubA2003;  ?>
      </div>
      <div class="scoreBarrage2" > 
        <?php 	echo $A2003;  ?>
      </div>
      <div class="equipeB" > 
        <?php echo $clubA2004; ?>
      </div>
      <div class="scoreBarrage2" > 
        <?php 	echo $A2004;  ?>
      </div>
    </td>
    <td wclassth="30" width="50"  > </td>
    <td width="86"  ></td>
    <td width="5"  ></td>
    <td width="22"  ></td>
    <td width="101"  ></td>
    <td width="47"  ></td>
  </tr>
  <tr> 
    <td wclassth="160" width="1"  ></td>
    <td wclassth="30" width="1"  ></td>
    <td wclassth="32" width="1"  ></td>
    <td wclassth="160" width="5"  ></td>
    <td wclassth="160" width="40"  ></td>
    <td wclassth="30" width="20"  ></td>
    <td wclassth="21" width="81"  ></td>
    <td width="59"   > </td>
    <td width="50"   > </td>
    <td width="86"  ></td>
    <td width="5"  ></td>
    <td width="22"  ></td>
    <td width="101"  ></td>
    <td width="47"  ></td>
  </tr>
  <tr> 
    <td wclassth="160" width="1"  ></td>
    <td wclassth="30" width="1"  ></td>
    <td wclassth="32" width="1"  ></td>
    <td wclassth="160" width="5"  >&nbsp;</td>
    <td wclassth="160" width="40"  > </td>
    <td wclassth="30" width="20"  > </td>
    <td wclassth="21" width="81"  > 
      <div class="affichageEquipeTab" > 
        <?php echo $clubA4007; ?>
      </div>
      <div class="affichageGATab" > 
        <?php echo $A4007;  ?>
      </div>
      <div class="affichageEquipeTab" > 
        <?php echo $clubA4008; ?>
      </div>
      <div class="affichageGATab" > 
        <?php echo $A4008; ?>
      </div>
    </td>
    <td wclassth="160" align="left" width="59"  ></td>
    <td wclassth="30" width="50"  ></td>
    <td width="86"  ></td>
    <td width="5"  ></td>
    <td width="22"  ></td>
    <td width="101"  ></td>
    <td width="47"  ></td>
  </tr>
  <tr> 
    <td wclassth="160" width="1"  ></td>
    <td wclassth="30" width="1"  ></td>
    <td wclassth="32" width="1"  ></td>
    <td wclassth="160" width="5"  >&nbsp;</td>
    <td wclassth="160" width="40"  > </td>
    <td wclassth="30" width="20"  > </td>
    <td wclassth="21" width="81"  ></td>
    <td wclassth="160" align="left" width="59"  ></td>
    <td wclassth="30" width="50"  ></td>
    <td width="86"  ></td>
    <td width="5"  ></td>
    <td width="22"  ></td>
    <td width="101"  ></td>
    <td width="47"  ></td>
  </tr>
  <tr> 
    <td wclassth="160" width="1"  ></td>
    <td wclassth="30" width="1"  ></td>
    <td wclassth="32" width="1"  ></td>
    <td wclassth="160" width="5"  >&nbsp;</td>
    <td wclassth="160" width="40"  >&nbsp;</td>
    <td wclassth="30" width="20"  >&nbsp;</td>
    <td wclassth="21" width="81"  ></td>
    <td wclassth="160" align="left" width="59"  ></td>
    <td width="50"></td>
    <td width="86"  ></td>
    <td width="5"  ></td>
    <td width="22"  ></td>
    <td width="101"  ></td>
    <td width="47"  ></td>
  </tr>
  <tr> 
    <td wclassth="160" width="1"  ></td>
    <td wclassth="30" width="1"  ></td>
    <td wclassth="32" width="1"  ></td>
    <td wclassth="160" width="5"  >&nbsp;</td>
    <td wclassth="160" width="40"  >&nbsp;</td>
    <td wclassth="30" width="20"  >&nbsp;</td>
    <td wclassth="21" width="81"  ></td>
    <td wclassth="160" align="left" width="59"  ></td>
    <td wclassth="30" width="50"  ></td>
    <td width="86"  ></td>
    <td width="5"  ></td>
    <td width="22"  ></td>
    <td width="101"  ></td>
    <td width="47"  ></td>
  </tr>
  <tr> 
    <td width="1" height="2"  ></td>
    <td width="1" height="2"   ></td>
    <td wclassth="32" width="1" height="2"  ></td>
    <td wclassth="160" width="5" height="2"  ></td>
    <td wclassth="160" width="40" height="2"  ></td>
    <td wclassth="30" width="20" height="2"  ></td>
    <td wclassth="21" width="81" height="2"  ></td>
    <td wclassth="160" align="left" width="59" height="2"  ></td>
    <td wclassth="30" width="50" height="2"  ></td>
    <td width="86" height="2"  ></td>
    <td width="5" height="2"  ></td>
    <td width="22" height="2"  ></td>
    <td width="101" height="2"  ></td>
    <td width="47" height="2"  ></td>
  </tr>
</table>

<?php
//require ("../../phasesfinalesterr2019/fonctionspfterrESDL2019.php");
$division = $division + 1 ;

huitiemeEtBarrages2019($bdcomiteClub, $division, $annee);

?>
<br/>




<table  border="0" align="left"  cellspacing="0" >
  <tr> 
    <td colspan="16"> 
      <h2><font size="4">Tableau 3</font></h2>
    </td>
    <td  bgcolor="#000000" width="18" height="10"></td>
    <td rowspan="19" valign="top" width="18"> 
      <?php
require '../../phasesfinalesterr2019/qualification/QTableau4.php';
?>
    </td>
  </tr>
  <tr> 
    <td wclassth="160" width="1" ></td>
    <td wclassth="160" width="1" ></td>
    <td wclassth="160" width="24"  ></td>
    <td wclassth="160" width="22" ></td>
    <td wclassth="160" width="50" ></td>
    <td wclassth="30" width="17" ></td>
    <td wclassth="32" width="34" ></td>
    <td wclassth="160" width="25"  ></td>
    <td wclassth="30" width="28" ></td>
    <td wclassth="21" width="24" ></td>
    <td wclassth="160"  align="left" width="27" ></td>
    <td wclassth="30" width="26"  ></td>
    <td wclassth="22" width="6" ></td>
    <td wclassth="160" width="36"  ></td>
    <td wclassth="30" width="17"  ></td>
    <td wclassth="21" width="18" ></td>
    <td wclassth="21" width="18" bgcolor="#000000" ></td>
  </tr>
  <tr> 
    <td wclassth="160" width="1" >&nbsp;</td>
    <td wclassth="160" width="1" >&nbsp;</td>
    <td wclassth="160" colspan="2"  >&nbsp;</td>
    <td wclassth="160" colspan="2" >&nbsp;</td>
    <td wclassth="32" width="34" >&nbsp;</td>
    <td wclassth="160" colspan="2"  >&nbsp;</td>
    <td wclassth="21" width="24" >&nbsp;</td>
    <td wclassth="160"  align="left" colspan="2" >&nbsp;</td>
    <td wclassth="22" width="6" >&nbsp;</td>
    <td wclassth="160" colspan="2"  >&nbsp;</td>
    <td wclassth="21" width="18" >&nbsp;</td>
    <td wclassth="21" width="18" bgcolor="#000000" ></td>
  </tr>
  <tr> 
    <td wclassth="160" width="1" >&nbsp;</td>
    <td wclassth="160" width="1" >&nbsp;</td>
    <td wclassth="160"  > 
      <div align="center"><font size="2" face="Arial, Helvetica, sans-serif"><i></i></font></div>
    </td>
    <td wclassth="160" colspan="3"  > 
      <div align="center"><font size="2" face="Arial, Helvetica, sans-serif"><i><b>1er 
        tour</b></i></font></div>
    </td>
    <td wclassth="32" width="34" > 
      <div align="center"><b><i><font size="2"><font size="2"><font face="Arial, Helvetica, sans-serif"></font></font></font></i></b></div>
    </td>
    <td wclassth="160" colspan="2"  > 
      <div align="center"><font size="2" face="Arial, Helvetica, sans-serif"><i><b>2me 
        tour</b></i></font></div>
    </td>
    <td wclassth="21" width="24" > 
      <div align="center"><b><i><font size="2"><font size="2"><font face="Arial, Helvetica, sans-serif"></font></font></font></i></b></div>
    </td>
    <td wclassth="160"  align="left" colspan="2" > 
      <div align="center"><font size="2" face="Arial, Helvetica, sans-serif"><i><b>3me 
        tour</b></i></font></div>
    </td>
    <td wclassth="22" width="6" > 
      <div align="center"><b><i><font size="2"><font size="2"><font face="Arial, Helvetica, sans-serif"></font></font></font></i></b></div>
    </td>
    <td wclassth="160" colspan="2"  > 
      <div align="center"><font size="2" face="Arial, Helvetica, sans-serif"><i><b>4me 
        tour</b></i></font></div>
    </td>
    <td wclassth="21" width="18" > 
      <div align="center"></div>
    </td>
    <td wclassth="21" width="18" bgcolor="#000000" ></td>
  </tr>
  <tr> 
    <td wclassth="160" width="1" >&nbsp;</td>
    <td wclassth="160" width="1" >&nbsp;</td>
    <td wclassth="160" width="24"  > </td>
    <td wclassth="160" width="22" > </td>
    <td wclassth="160" width="50" > </td>
    <td wclassth="30" width="17" > </td>
    <td wclassth="32" width="34" ></td>
    <td wclassth="160" width="25"  > <font size="2" face="Arial, Helvetica, sans-serif"><b><i> 
      <strong> </strong></i></b></font> </td>
    <td wclassth="30" width="28" ></td>
    <td wclassth="21" width="24" ></td>
    <td wclassth="160"  align="left" width="27" ></td>
    <td wclassth="30" width="26"  ></td>
    <td wclassth="22" width="6" ></td>
    <td wclassth="160" width="36"  ></td>
    <td wclassth="30" width="17"  ></td>
    <td wclassth="21" width="18" ></td>
    <td wclassth="21" width="18" bgcolor="#000000" ></td>
  </tr>
  <tr> 
    <td wclassth="160" width="1">&nbsp;</td>
    <td wclassth="160" width="1">&nbsp;</td>
    <td wclassth="160" width="24" > </td>
    <td wclassth="160" colspan="3"> 
	
      <div class="affichageEquipeTab" > 
        <?php	
		$division = $division +2 ;

		huitieme2019($bdcomiteClub, $division, $annee);
		 echo $clubA8003; ?>
      </div>
      <div class="affichageGATab" > 
        <?php	 echo $A8003; ?>
      </div>
      <div class="affichageEquipeTab" > 
        <?php	 echo $clubA8004; ?>
      </div>
      <div class="affichageGATab" > 
        <?php	 echo $A8004; ?>
      </div>
    </td>
    <td wclassth="32" width="34"></td>
    <td wclassth="160" colspan="2" > 
      <div class="affichageEquipeTab" > 
        <?php echo $clubA4001; ?>
      </div>
      <div class="affichageGATab" > 
        <?php 	echo $A4001; ?>
      </div>
      <div class="affichageEquipeTab" > 
        <?php echo $clubA4002; ?>
      </div>
      <div class="affichageGATab" > 
        <?php echo $A4002;  ?>
      </div>
    </td>
    <td wclassth="21" width="24"></td>
    <td wclassth="160" align="left" width="27" ></td>
    <td wclassth="30" width="26" ></td>
    <td wclassth="22" width="6"></td>
    <td wclassth="160" width="36" ></td>
    <td wclassth="30" width="17" ></td>
    <td wclassth="21" width="18"></td>
    <td wclassth="21" width="18" bgcolor="#000000"></td>
  </tr>
  <tr> 
    <td wclassth="160" width="1" ></td>
    <td wclassth="160" width="1" ></td>
    <td wclassth="160" width="24"  ></td>
    <td wclassth="160" width="22" ></td>
    <td wclassth="160" width="50" > </td>
    <td wclassth="30" width="17" > </td>
    <td wclassth="32" width="34" ></td>
    <td wclassth="160" width="25"  > </td>
    <td wclassth="30" width="28" > </td>
    <td wclassth="21" width="24" ></td>
    <td wclassth="160" align="left" width="27"  ></td>
    <td wclassth="30" width="26"  ></td>
    <td wclassth="22" width="6" ></td>
    <td wclassth="160" width="36"  ></td>
    <td wclassth="30" width="17"  ></td>
    <td wclassth="21" width="18" ></td>
    <td wclassth="21" width="18" bgcolor="#000000" ></td>
  </tr>
  <tr> 
    <td wclassth="160" width="1">&nbsp;</td>
    <td wclassth="160" width="1">&nbsp;</td>
    <td wclassth="160" width="24" >&nbsp;</td>
    <td wclassth="160" width="22">&nbsp;</td>
    <td wclassth="160" width="50">&nbsp;</td>
    <td wclassth="30" width="17">&nbsp;</td>
    <td wclassth="32" width="34"></td>
    <td wclassth="160" width="25" ></td>
    <td wclassth="30" width="28"></td>
    <td wclassth="21" width="24"></td>
    <td wclassth="160" align="left" width="27" ><font size="2" face="Arial, Helvetica, sans-serif"><b><i><strong> 
      </strong></i></b></font> </td>
    <td wclassth="30" width="26" > </td>
    <td wclassth="22" width="6"></td>
    <td wclassth="160" width="36" ></td>
    <td wclassth="30" width="17" ></td>
    <td wclassth="21" width="18"></td>
    <td wclassth="21" width="18" bgcolor="#000000"></td>
  </tr>
  <tr> 
    <td wclassth="160" width="1">&nbsp;</td>
    <td wclassth="160" width="1">&nbsp;</td>
    <td wclassth="160" width="24" >&nbsp;</td>
    <td wclassth="160" width="22">&nbsp;</td>
    <td wclassth="160" width="50">&nbsp;</td>
    <td wclassth="30" width="17">&nbsp;</td>
    <td wclassth="32" width="34"></td>
    <td wclassth="160" width="25" ></td>
    <td wclassth="30" width="28"></td>
    <td wclassth="21" width="24"></td>
    <td wclassth="160" colspan="2" > 
      <div class="affichageEquipeTab" > 
        <?php echo $clubA2001; ?>
      </div>
      <div class="affichageGATab" > 
        <?php echo $A2001; ?>
      </div>
      <div class="affichageEquipeTab" > 
        <?php echo $clubA2002; ?>
      </div>
      <div class="affichageGATab" > 
        <?php echo $A2002; ?>
      </div>
    </td>
    <td wclassth="22" width="6"></td>
    <td wclassth="160" width="36" ></td>
    <td wclassth="30" width="17" ></td>
    <td wclassth="21" width="18"></td>
    <td wclassth="21" width="18" bgcolor="#000000"></td>
  </tr>
  <tr> 
    <td wclassth="160" width="1" ></td>
    <td wclassth="160" width="1" ></td>
    <td wclassth="160" width="24"  ></td>
    <td wclassth="160" width="22" ></td>
    <td wclassth="160" width="50" ></td>
    <td wclassth="30" width="17" ></td>
    <td wclassth="32" width="34" ></td>
    <td wclassth="160" width="25"  ></td>
    <td wclassth="30" width="28" ></td>
    <td wclassth="21" width="24" ></td>
    <td wclassth="160" align="left" colspan="2"  > </td>
    <td wclassth="22" width="6" ></td>
    <td width="36"  ></td>
    <td width="17"  ></td>
    <td width="18" ></td>
    <td width="18" bgcolor="#000000" ></td>
  </tr>
  <tr> 
    <td wclassth="160" width="1" >&nbsp;</td>
    <td wclassth="160" width="1" >&nbsp;</td>
    <td wclassth="160" width="24"  > </td>
    <td wclassth="160" width="22" > </td>
    <td wclassth="160" width="50" >&nbsp;</td>
    <td wclassth="30" width="17" >&nbsp;</td>
    <td wclassth="32" width="34" ></td>
    <td wclassth="160" width="25"  ><font size="2" face="Arial, Helvetica, sans-serif"><b><i><strong> 
      </strong></i></b></font></td>
    <td wclassth="30" width="28" ></td>
    <td wclassth="21" width="24" ></td>
    <td wclassth="160" align="left" width="27"  ></td>
    <td wclassth="30" width="26"  ></td>
    <td wclassth="22" width="6" ></td>
    <td width="36"  ></td>
    <td width="17"  ></td>
    <td width="18" ></td>
    <td width="18" bgcolor="#000000" ></td>
  </tr>
  <tr> 
    <td wclassth="160" width="1" >&nbsp;</td>
    <td wclassth="160" width="1" >&nbsp;</td>
    <td wclassth="160" width="24" > </td>
    <td wclassth="160" colspan="3"> 
      <div class="affichageEquipeTab" > 
        <?php	 echo $clubA8007; ?>
      </div>
      <div class="affichageGATab" > 
        <?php echo $A8007; ?>
      </div>
      <div class="affichageEquipeTab" > 
        <?php echo $clubA8008;?>
      </div>
      <div class="affichageGATab" > 
        <?php echo $A8008;  ?>
      </div>
    </td>
    <td wclassth="32" width="34" > </td>
    <td wclassth="160" colspan="2"  > 
      <div class="affichageEquipeTab" > 
        <?php	 echo $clubA4003; ?>
      </div>
      <div class="affichageGATab" > 
        <?php	 echo $A4003; ?>
      </div>
      <div class="affichageEquipeTab" > 
        <?php echo $clubA4004;?>
      </div>
      <div class="affichageGATab" > 
        <?php 	echo $A4004;  ?>
      </div>
    </td>
    <td wclassth="21" width="24" ></td>
    <td wclassth="160" align="left" width="27"  ></td>
    <td wclassth="30" width="26"  ></td>
    <td wclassth="22" width="6" ></td>
    <td width="36"  ></td>
    <td width="17"  ></td>
    <td width="18" ></td>
    <td width="18" bgcolor="#000000" ></td>
  </tr>
  <tr> 
    <td wclassth="160" width="1" ></td>
    <td wclassth="160" width="1" ></td>
    <td wclassth="160" width="24"  ></td>
    <td wclassth="160" width="22" ></td>
    <td wclassth="160" width="50" > </td>
    <td wclassth="30" width="17" > </td>
    <td wclassth="32" width="34"></td>
    <td wclassth="160" width="25" > </td>
    <td wclassth="30" width="28"> </td>
    <td wclassth="21" width="24"></td>
    <td wclassth="160" align="left" width="27" ></td>
    <td wclassth="30" width="26" ></td>
    <td wclassth="22" width="6"></td>
    <td wclassth="160" width="36" ><font size="2" face="Arial, Helvetica, sans-serif"><b><i><strong> 
      </strong></i></b></font> </td>
    <td wclassth="30" width="17" > </td>
    <td wclassth="21" width="18"></td>
    <td wclassth="21" width="18" bgcolor="#000000"></td>
  </tr>
  <tr> 
    <td wclassth="160" width="1" >&nbsp;</td>
    <td wclassth="160" width="1" >&nbsp;</td>
    <td wclassth="160" width="24"  >&nbsp;</td>
    <td wclassth="160" width="22" >&nbsp;</td>
    <td wclassth="160" width="50" > </td>
    <td wclassth="30" width="17" > </td>
    <td wclassth="32" width="34" ></td>
    <td wclassth="160" width="25"  ></td>
    <td wclassth="30" width="28" ></td>
    <td wclassth="21" width="24" ></td>
    <td wclassth="160"  align="left" width="27" ></td>
    <td wclassth="30" width="26"  ></td>
    <td wclassth="22" width="6" ></td>
    <td wclassth="160" width="36"  ></td>
    <td wclassth="30" width="17"  ></td>
    <td wclassth="21" width="18" ></td>
    <td wclassth="21" width="18" bgcolor="#000000" ></td>
  </tr>
  <tr> 
    <td wclassth="160" width="1" >&nbsp;</td>
    <td wclassth="160" width="1" >&nbsp;</td>
    <td wclassth="160" width="24"  >&nbsp;</td>
    <td wclassth="160" width="22" >&nbsp;</td>
    <td wclassth="160" width="50" >&nbsp;</td>
    <td wclassth="30" width="17" >&nbsp;</td>
    <td wclassth="32" width="34" ></td>
    <td wclassth="160" width="25"  ></td>
    <td wclassth="30" width="28" ></td>
    <td wclassth="21" width="24" ></td>
    <td wclassth="160" align="left" width="27"  ></td>
    <td wclassth="30" width="26"  ></td>
    <td width="6" ></td>
    <td width="36"  ></td>
    <td  align="left" width="17" ></td>
    <td width="18" ></td>
    <td width="18" bgcolor="#000000" ></td>
  </tr>
  <tr> 
    <td wclassth="160" width="1" ></td>
    <td wclassth="160" width="1" ></td>
    <td wclassth="160" width="24"  ></td>
    <td wclassth="160" width="22" ></td>
    <td wclassth="160" width="50" ></td>
    <td wclassth="30" width="17" ></td>
    <td wclassth="32" width="34" ></td>
    <td wclassth="160" width="25"  ></td>
    <td wclassth="30" width="28" ></td>
    <td wclassth="21" width="24" ></td>
    <td wclassth="160" align="left" width="27"  ></td>
    <td wclassth="30" width="26"  ></td>
    <td wclassth="22" width="6" ></td>
    <td wclassth="160"  bordercolor="#FFFFFF" width="36" > 
      <div class="equipeB" > 
        <?php echo $clubA1001;  ?>
      </div>
    </td>
    <td wclassth="30"  align="left" width="17" > 
      <div class="scoreBarrage2" > 
        <?php 	echo $A1001;  ?>
      </div>
    </td>
    <td width="18" ></td>
    <td width="18" bgcolor="#000000" ></td>
  </tr>
  <tr valign="top"> 
    <td wclassth="160" width="1" >&nbsp;</td>
    <td wclassth="160" width="1" >&nbsp;</td>
    <td wclassth="160" width="24"  > </td>
    <td wclassth="160" width="22" > </td>
    <td wclassth="160" width="50" >&nbsp;</td>
    <td wclassth="30" width="17" >&nbsp;</td>
    <td wclassth="32" width="34" ></td>
    <td wclassth="160" width="25"  ></td>
    <td wclassth="30" width="28" ></td>
    <td wclassth="21" width="24" ></td>
    <td wclassth="160"  align="left" width="27" ></td>
    <td wclassth="30" width="26"  ></td>
    <td width="6" > </td>
    <td width="36"  > 
      <div class="equipeB" > 
        <?php echo $clubA1002;  ?>
      </div>
    </td>
    <td  align="left" width="17" > 
      <div class="scoreBarrage2" > 
        <?php 	echo $A1002;  ?>
      </div>
    </td>
    <td width="18" ></td>
    <td width="18" bgcolor="#000000" ></td>
  </tr>
  <tr valign="top"> 
    <td wclassth="160" width="1" >&nbsp;</td>
    <td wclassth="160" width="1" >&nbsp;</td>
    <td wclassth="160" width="24" > </td>
    <td wclassth="160" width="22"> </td>
    <td wclassth="160" width="50" > </td>
    <td wclassth="30" width="17" > </td>
    <td wclassth="32" width="34" ></td>
    <td wclassth="160" width="25"  ><font size="2" face="Arial, Helvetica, sans-serif"> 
      <b><i><strong> </strong></i></b><strong> </strong> </font></td>
    <td wclassth="30" width="28" ></td>
    <td wclassth="21" width="24" ></td>
    <td wclassth="160"  align="left" width="27" ></td>
    <td wclassth="30" width="26"  ></td>
    <td width="6"> </td>
    <td width="36" ></td>
    <td width="17" ></td>
    <td width="18"></td>
    <td width="18" bgcolor="#000000"></td>
  </tr>
  <tr> 
    <td wclassth="160" width="1"></td>
    <td wclassth="160" width="1"></td>
    <td wclassth="160" width="24"  ></td>
    <td wclassth="160" colspan="3" > 
      <div class="affichageEquipeTab" > 
        <?php	 echo $clubA8011; ?>
      </div>
      <div class="affichageGATab" > 
        <?php	 echo $A8011; ?>
      </div>
      <div class="affichageEquipeTab" > 
        <?php	 echo $clubA8012; ?>
      </div>
      <div class="affichageGATab" > 
        <?php	 echo $A8012; ?>
      </div>
    </td>
    <td wclassth="32" width="34"></td>
    <td wclassth="160" colspan="2" > 
      <div class="affichageEquipeTab" > 
        <?php echo $clubA4005;?>
      </div>
      <div class="affichageGATab" > 
        <?php echo $A4005;  ?>
      </div>
      <div class="affichageEquipeTab" > 
        <?php	 echo $clubA4006; ?>
      </div>
      <div class="affichageGATab" > 
        <?php 	echo $A4006; ?>
      </div>
    </td>
    <td wclassth="21" width="24"></td>
    <td wclassth="160" align="left" width="27" ></td>
    <td wclassth="30" width="26" ></td>
    <td width="6"></td>
    <td width="36" ></td>
    <td width="17" ></td>
    <td width="18"></td>
    <td width="18" bgcolor="#000000"></td>
  </tr>
  <tr> 
    <td wclassth="160" height="20" width="1">&nbsp;</td>
    <td wclassth="160" height="20" width="1">&nbsp;</td>
    <td wclassth="160" height="20" width="24" >&nbsp;</td>
    <td wclassth="160" height="20" width="22">&nbsp;</td>
    <td wclassth="160" height="20" width="50"> </td>
    <td wclassth="30" height="20" width="17"> </td>
    <td wclassth="32" height="20" width="34"></td>
    <td wclassth="160" height="20" width="25" > </td>
    <td wclassth="30" height="20" width="28"> </td>
    <td wclassth="21" height="20" width="24"></td>
    <td wclassth="160" align="left" height="20" width="27" ></td>
    <td wclassth="30" height="20" width="26" ></td>
    <td width="6"></td>
    <td width="36" ></td>
    <td width="17" ></td>
    <td width="18"></td>
    <td width="18" bgcolor="#000000"></td>
    <td width="18"></td>
  </tr>
  <tr> 
    <td wclassth="160" width="1" >&nbsp;</td>
    <td wclassth="160" width="1" >&nbsp;</td>
    <td wclassth="160" width="24"  >&nbsp;</td>
    <td wclassth="160" width="22" >&nbsp;</td>
    <td wclassth="160" width="50" >&nbsp;</td>
    <td wclassth="30" width="17" >&nbsp;</td>
    <td wclassth="32" width="34" ></td>
    <td wclassth="160" width="25"  ></td>
    <td wclassth="30" width="28" ></td>
    <td wclassth="21" width="24" ></td>
    <td wclassth="160" align="left" width="27"  ><font size="2" face="Arial, Helvetica, sans-serif"><b><i><strong> 
      </strong></i></b></font></td>
    <td wclassth="30" width="26"  ></td>
    <td width="6" > 
      <div align="center"> </div>
    </td>
    <td width="36"  ></td>
    <td width="17"  ></td>
    <td width="18" ></td>
    <td width="18" bgcolor="#000000" ></td>
    <td width="18" ></td>
  </tr>
  <tr> 
    <td wclassth="160" width="1"></td>
    <td wclassth="160" width="1"></td>
    <td wclassth="160" width="24" ></td>
    <td wclassth="160" width="22"></td>
    <td wclassth="160" width="50"></td>
    <td wclassth="30" width="17"></td>
    <td wclassth="32" width="34"></td>
    <td wclassth="160" width="25" ></td>
    <td wclassth="30" width="28"></td>
    <td wclassth="21" width="24"></td>
    <td wclassth="160" align="left" width="27" > 
      <div class="affichageEquipeTab" > 
        <?php echo $clubA2003; ?>
      </div>
      <div class="affichageGATab" > 
        <?php echo $A2003; ?>
      </div>
      <div class="affichageEquipeTab" > 
        <?php echo $clubA2004; ?>
      </div>
      <div class="affichageGATab" > 
        <?php echo $A2004; ?>
      </div>
    </td>
    <td wclassth="30" width="26" > </td>
    <td width="6"></td>
    <td width="36" ></td>
    <td width="17" ></td>
    <td width="18"></td>
    <td width="18" bgcolor="#000000"></td>
    <td width="18"></td>
  </tr>
  <tr> 
    <td wclassth="160" width="1">&nbsp;</td>
    <td wclassth="160" width="1">&nbsp;</td>
    <td wclassth="160" width="24"  > </td>
    <td wclassth="160" width="22" > </td>
    <td wclassth="160" width="50">&nbsp;</td>
    <td wclassth="30" width="17">&nbsp;</td>
    <td wclassth="32" width="34"></td>
    <td wclassth="160" width="25" ></td>
    <td wclassth="30" width="28"></td>
    <td wclassth="21" width="24"></td>
    <td wclassth="160" align="left" width="27" > </td>
    <td wclassth="30" width="26" > </td>
    <td width="6"></td>
    <td width="36" ></td>
    <td width="17" ></td>
    <td width="18"></td>
    <td width="18" bgcolor="#000000"></td>
    <td width="18"></td>
  </tr>
  <tr> 
    <td wclassth="160" width="1">&nbsp;</td>
    <td wclassth="160" width="1">&nbsp;</td>
    <td wclassth="160" width="24" > </td>
    <td wclassth="160" width="22"> </td>
    <td wclassth="160" width="50"> </td>
    <td wclassth="30" width="17"> </td>
    <td wclassth="32" width="34"></td>
    <td wclassth="160" width="25" > <strong><font size="2" face="Arial, Helvetica, sans-serif"><b><i><strong> 
      </strong></i></b></font> </strong></td>
    <td wclassth="30" width="28"></td>
    <td wclassth="21" width="24"></td>
    <td wclassth="160" align="left" width="27" > </td>
    <td wclassth="30" width="26" > </td>
    <td width="6"></td>
    <td width="36" ></td>
    <td width="17" ></td>
    <td width="18"></td>
    <td width="18" bgcolor="#000000"></td>
    <td width="18"></td>
  </tr>
  <tr> 
    <td wclassth="160" width="1"></td>
    <td wclassth="160" width="1"></td>
    <td wclassth="160" width="24"  ></td>
    <td wclassth="160" colspan="3" > 
      <div class="affichageEquipeTab" > 
        <?php	 echo $clubA8015; ?>
      </div>
      <div class="affichageGATab" > 
        <?php	 echo $A8015; ?>
      </div>
      <div class="affichageEquipeTab" > 
        <?php echo $clubA8016; ?>
      </div>
      <div class="affichageGATab" > 
        <?php echo $A8016; ?>
      </div>
    </td>
    <td wclassth="32" width="34"></td>
    <td wclassth="160" colspan="2" > 
      <div class="affichageEquipeTab" > 
        <?php echo $clubA4007; ?>
      </div>
      <div class="affichageGATab" > 
        <?php echo $A4007;  ?>
      </div>
      <div class="affichageEquipeTab" > 
        <?php echo $clubA4008; ?>
      </div>
      <div class="affichageGATab" > 
        <?php echo $A4008; ?>
      </div>
    </td>
    <td wclassth="21" width="24"></td>
    <td wclassth="160" align="left" width="27" ></td>
    <td wclassth="30" width="26" ></td>
    <td width="6"></td>
    <td width="36" ></td>
    <td width="17" ></td>
    <td width="18"></td>
    <td width="18" bgcolor="#000000"></td>
    <td width="18"></td>
  </tr>
  <tr> 
    <td wclassth="160" height="20" width="1">&nbsp;</td>
    <td wclassth="160" height="20" width="1">&nbsp;</td>
    <td wclassth="160" height="20" width="24" >&nbsp;</td>
    <td wclassth="160" height="20"> </td>
    <td wclassth="160" height="20"></td>
    <td wclassth="160" height="20"></td>
    <td wclassth="32" height="20" width="34"></td>
    <td wclassth="160" height="20" width="25" > </td>
    <td wclassth="30" height="20" width="28"> </td>
    <td wclassth="21" height="20" width="24"></td>
    <td wclassth="160" align="left" height="20" width="27" ></td>
    <td wclassth="30" height="20" width="26" ></td>
    <td height="20" width="6"></td>
    <td height="20" width="36" ></td>
    <td height="20" width="17" ></td>
    <td height="20" width="18"></td>
    <td height="20" width="18" bgcolor="#000000"></td>
    <td height="20" width="18"></td>
  </tr>
  <tr> 
    <td wclassth="160" height="20" width="1">&nbsp;</td>
    <td wclassth="160" height="20" width="1">&nbsp;</td>
    <td wclassth="160" height="20" width="24" >&nbsp;</td>
    <td wclassth="160" height="20" width="22">&nbsp;</td>
    <td wclassth="160" height="20" width="50"> </td>
    <td wclassth="30" height="20" width="17"> </td>
    <td wclassth="32" height="20" width="34"></td>
    <td wclassth="160" height="20" width="25" ></td>
    <td wclassth="30" height="20" width="28"></td>
    <td wclassth="21" height="20" width="24"></td>
    <td wclassth="160" align="left" height="20" width="27" ></td>
    <td wclassth="30" height="20" width="26" ></td>
    <td height="20" width="6"></td>
    <td height="20" width="36" ></td>
    <td height="20" width="17" ></td>
    <td height="20" width="18"></td>
    <td height="20" width="18" bgcolor="#000000"></td>
    <td height="20" width="18"></td>
  </tr>
  <tr> 
    <td width="1" >&nbsp;</td>
    <td width="1" >&nbsp;</td>
    <td colspan="14"  > 
      <div align="center"> </div>
    </td>
    <td width="18" bgcolor="#000000" ></td>
    <td width="18" ></td>
  </tr>
</table>
<hr/>
<hr/>
<div align="center"> 
        <?php require("../../pub/pub1.php"); ?>
      </div>
