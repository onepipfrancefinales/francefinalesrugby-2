<?php
if (isset ($bdcomiteClub)) $$bdcomiteClub = $bdcomiteClub; else $bdcomiteClub='-';

$anneemoins = $annee-1;
$anneeplus = $annee+1;

require ("../../phasesfinalesterr2019/fonctionspfterrESDL2019.php");
quarts2019($comite, $division, $annee, $bdd);
traitementScores (4001, 4008, $bdd);
traitementScores (1001, 1002, $bdd);
afficheLieux ($division, $annee, $comite, $bdd);
champion ($comite, $clubA1001, $clubA1002, $A1001, $A1002, $bdd);
//afficheDivisionChampion($division);
afficheDivisionChampionLigue($division,$annee);
?>


<head>

<link rel="stylesheet" type="text/css" href="../../phasesfinalesterr/champTerr.css">

</head>


<body>
<table width="1000" border="0" height="500" cellspacing="0">
  <tr> 
    <td width="29" ></td>
    <td width="139" ></td>
    <td colspan="2" > 
      <div class="affichageTitre" >Quarts de finale</div>
    </td>
    <td width="70" ></td>
    <td colspan="2" > 
      <div class="affichageTitre" >Demi finale</div>
    </td>
    <td width="72" ></td>
    <td colspan="2" > 
      <div class="affichageTitre" >Finale</div>
    </td>
    <td width="50" ></td>
    <td height="1" bgcolor="#000000" width="12"></td>
    <td   valign="top" rowspan="27"><font size="2" face="Arial, Helvetica, sans-serif"><b><i><strong> 
      <?php require("../../pub/pub6.php"); ?>
      </strong></i></b></font></td>
    <td width="257" ></td>
  </tr>
  <tr> 
    <td width="29" > </td>
    <td width="139" ></td>
    <td width="144" class="size2 styleArial italic  alignLeft bold"> <?php echo $D4000; ?></td>
    <td width="73" ></td>
    <td width="70" ></td>
    <td width="137" class="size2 styleArial italic  alignLeft bold"><?php echo $D2000; ?></td>
    <td width="62" ></td>
    <td width="72" ></td>
    <td width="148" class="size2 styleArial italic  alignLeft bold"> <?php echo $D1000; ?></td>
    <td width="50" ></td>
    <td width="50" ></td>
    <td height="0" bgcolor="#000000" width="12"></td>
    <td width="257" ></td>
  </tr>
  <tr> 
    <td width="29"></td>
    <td width="139"></td>
    <td width="144">&nbsp;</td>
    <td width="73">&nbsp;</td>
    <td width="70"></td>
    <td width="137"></td>
    <td width="62"></td>
    <td width="72"></td>
    <td width="148"></td>
    <td width="50"></td>
    <td width="50"></td>
    <td height="0" ></td>
    <td width="257"></td>
  </tr>
  <tr> 
    <td width="29"> </td>
    <td width="139"></td>
    <td width="144"><div class="affichageEquipe" ><?php echo $clubA4001; ?></div></td>
    <td width="73"><div class="affichageGA" > <?php echo $A4001; ?> </div> </td>
    <td rowspan="8"><img src="../../images/accolade.png" width="8" height="121"></td>
    <td width="137"></td>
    <td width="62"></td>
    <td width="72"></td>
    <td width="148"></td>
    <td width="50"></td>
    <td width="50"></td>
    <td height="0"></td>
    <td width="257"></td>
  </tr>
  <tr> 
    <td width="29" ></td>
    <td width="139" ></td>
    <td width="144" > 
      <div class="affichageEquipe" > 
        <?php echo $clubA4002; ?>
      </div>
    </td>
    <td width="73" > 
      <div class="affichageGA" > 
        <?php echo $A4002;  ?>
      </div>
    </td>
    <td width="137" ></td>
    <td width="62" ></td>
    <td width="72" ></td>
    <td width="148" ></td>
    <td width="50" ></td>
    <td width="50" ></td>
    <td height="0" ></td>
    <td width="257" ></td>
  </tr>
  <tr> 
    <td width="29"> </td>
    <td width="139"></td>
    <td width="144"></td>
    <td width="73"></td>
    <td width="137"><font size="2" face="Arial, Helvetica, sans-serif"><b><i></i></b></font> 
    </td>
    <td width="62"> </td>
    <td width="72"></td>
    <td width="148"></td>
    <td width="50"></td>
    <td width="50"></td>
    <td height="0" ></td>
    <td width="257"></td>
  </tr>
  <tr> 
    <td width="29"> </td>
    <td width="139"></td>
    <td width="144"></td>
    <td width="73"></td>
    <td width="137"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA2001; ?>
      </div>
    </td>
    <td width="62"> 
      <div class="affichageGA" > 
        <?php echo $A2001; ?>
      </div>
    </td>
    <td rowspan="15"><img src="../../images/accolade.png" width="8" height="228"> 
    </td>
    <td width="148"></td>
    <td width="50"></td>
    <td width="50"></td>
    <td height="0" ></td>
    <td width="257"></td>
  </tr>
  <tr> 
    <td width="29" ></td>
    <td width="139" ></td>
    <td width="144" ></td>
    <td width="73" ></td>
    <td width="137" > 
      <div class="affichageEquipe" > 
        <?php echo $clubA2002; ?>
      </div>
    </td>
    <td width="62" > 
      <div class="affichageGA" > 
        <?php echo $A2002; ?>
      </div>
    </td>
    <td width="148" ></td>
    <td width="50" ></td>
    <td  width="50"></td>
    <td height="0" ></td>
    <td width="257" ></td>
  </tr>
  <tr> 
    <td width="29" > </td>
    <td width="139" ></td>
    <td width="144" class="size2 styleArial italic alignLeft bold"><?php echo $L4003; ?></td>
    <td width="73" ></td>
    <td width="137" ></td>
    <td width="62" ></td>
    <td width="148" ></td>
    <td width="50" ></td>
    <td  width="50"></td>
    <td height="0" ></td>
    <td width="257" ></td>
  </tr>
  <tr> 
    <td width="29" > </td>
    <td width="139" ></td>
    <td width="144" > 
      <div class="affichageEquipe" > 
        <?php echo $clubA4003;?>
      </div>
    </td>
    <td width="73" > 
      <div class="affichageGA" > 
        <?php echo $A4003;  ?>
      </div>
    </td>
    <td width="137" ></td>
    <td width="62" ></td>
    <td width="148" ></td>
    <td width="50" ></td>
    <td  width="50"></td>
    <td height="0"></td>
    <td width="257" ></td>
  </tr>
  <tr> 
    <td width="29" > </td>
    <td width="139"></td>
    <td width="144"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA4004;?>
      </div>
    </td>
    <td width="73"> 
      <div class="affichageGA" > 
        <?php 	echo $A4004;  ?>
      </div>
    </td>
    <td width="137"></td>
    <td width="62"></td>
    <td width="148" class="size2 styleArial italic alignLeft bold"><?php echo $L1001; ?></td>
    <td width="50"> </td>
    <td width="50"></td>
    <td height="0"></td>
    <td width="257"></td>
  </tr>
  <tr> 
    <td width="29" > </td>
    <td width="139" ></td>
    <td width="144" ></td>
    <td width="73" ></td>
    <td width="70" ></td>
    <td width="137" ></td>
    <td width="62" ></td>
    <td width="148" > 
      <div class="affichageEquipe" > 
        <?php echo $clubA1001;  ?>
      </div>
    </td>
    <td width="50" > 
      <div class="affichageGA" > 
        <?php echo $A1001; ?>
      </div>
    </td>
    <td width="50" ></td>
    <td height="0" ></td>
    <td width="257" ></td>
  </tr>
  <tr> 
    <td width="29" > </td>
    <td width="139" ></td>
    <td width="144" ></td>
    <td width="73" ></td>
    <td width="70" ></td>
    <td width="137" ></td>
    <td width="62" ></td>
    <td  width="148"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA1002;  ?>
      </div>
    </td>
    <td  width="50"> 
      <div class="affichageGA" > 
        <?php echo $A1002;  ?>
      </div>
    </td>
    <td  width="50"></td>
    <td height="0" ></td>
    <td  width="257"></td>
  </tr>
  <tr> 
    <td width="29" > </td>
    <td width="139" ></td>
    <td width="144" ></td>
    <td width="73" ></td>
    <td width="70" ></td>
    <td width="137" ></td>
    <td width="62" ></td>
    <td width="148" ></td>
    <td width="50" ></td>
    <td  width="50"></td>
    <td height="0"></td>
    <td width="257" ></td>
  </tr>
  <tr valign="top"> 
    <td width="29" > </td>
    <td width="139" ></td>
    <td width="144" ></td>
    <td width="73" ></td>
    <td width="70" ></td>
    <td width="137" ></td>
    <td width="62" ></td>
    <td width="148" ></td>
    <td width="50" ></td>
    <td  width="50"></td>
    <td height="0" ></td>
    <td width="257" ></td>
  </tr>
  <tr valign="top"> 
    <td width="29" > </td>
    <td width="139" ></td>
    <td width="144" class="size2 styleArial italic  alignLeft bold"><?php echo $L4005; ?></td>
    <td width="73" ></td>
    <td width="70" ></td>
    <td width="137" ></td>
    <td width="62" ></td>
    <td colspan="2"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif" size="3"><b>Champion 
        <i> 
        <?php echo $annee; ?>
        </i> </b></font></div>
    </td>
    <td width="50"></td>
    <td height="0" ></td>
    <td width="257"></td>
  </tr>
  <tr> 
    <td width="29"> </td>
    <td width="139"></td>
    <td width="144"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA4005;?>
      </div>
    </td>
    <td width="73"> 
      <div class="affichageGA" > 
        <?php echo $A4005;  ?>
      </div>
    </td>
    <td rowspan="8"><img src="../../images/accolade.png" width="8" height="121"></td>
    <td width="137"></td>
    <td width="62"></td>
   
    <td colspan="2" width="50"> <div align="center"><b><font color="#000000" size="3" face="Arial, Helvetica, sans-serif"> <?php	 echo $division; ?>
    </font></b></div>
  </td>
    
    <td width="257"></td>
  </tr>
  <tr> 
    <td width="29" height="9" > </td>
    <td width="139" height="9" ></td>
    <td width="144" height="9" > 
      <div class="affichageEquipe" > 
        <?php	 echo $clubA4006; ?>
      </div>
    </td>
    <td width="73" height="9" > 
      <div class="affichageGA" > 
        <?php	echo $A4006; ?>
      </div>
    </td>
    <td width="137" height="9" ></td>
    <td width="62" height="9" ></td>
    <td colspan="2" height="37" rowspan="5"> 
      <div align="center"><img src="<?php echo $champLogo;  ?>" width="100" height="100"></div>
    </td>
    <td width="50" height="9"></td>
    <td height="9" ></td>
    <td width="257" height="9"></td>
  </tr>
  <tr> 
    <td width="29" > </td>
    <td width="139" ></td>
    <td width="144" ></td>
    <td width="73" ></td>
    <td width="137" ><font size="2" face="Arial, Helvetica, sans-serif"><b><i><strong> 
      <?php //echo $L2003; ?>
      </strong></i></b></font></td>
    <td width="62" ></td>
    <td  width="50"></td>
    <td height="1" ></td>
    <td  width="257"></td>
  </tr>
  <tr> 
    <td width="29" ></td>
    <td width="139" ></td>
    <td width="144" ></td>
    <td width="73" ></td>
    <td width="137" > 
      <div class="affichageEquipe" > 
        <?php echo $clubA2003; ?>
      </div>
    </td>
    <td width="62" > 
      <div class="affichageGA" > 
        <?php echo $A2003; ?>
      </div>
    </td>
    <td  width="50"></td>
    <td height="1" ></td>
    <td width="257" ></td>
  </tr>
  <tr> 
    <td width="29" > </td>
    <td width="139" ></td>
    <td width="144" ></td>
    <td width="73" ></td>
    <td width="137" > 
      <div class="affichageEquipe" > 
        <?php echo $clubA2004; ?>
      </div>
    </td>
    <td width="62" > 
      <div class="affichageGA" > 
        <?php echo $A2004; ?>
      </div>
    </td>
    <td width="50" ></td>
    <td></td>
    <td width="257" ></td>
  </tr>
  <tr> 
    <td width="29"> </td>
    <td width="139"></td>
    <td width="144"> <strong><font size="2" face="Arial, Helvetica, sans-serif"><b><i><strong> 
      <?php echo $L4007; ?>
      </strong></i></b></font> </strong></td>
    <td width="73"></td>
    <td width="137"> </td>
    <td width="62"> </td>
    <td width="72"></td>
    <td width="50"></td>
    <td  ></td>
    <td width="257" ></td>
  </tr>
  <tr> 
    <td width="29"> </td>
    <td width="139"></td>
    <td width="144"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA4007; ?>
      </div>
    </td>
    <td width="73"> 
      <div class="affichageGA" > 
        <?php echo $A4007;  ?>
      </div>
    </td>
    <td width="137"></td>
    <td width="62"></td>
    <td width="72"></td>
    <td rowspan="2" colspan="2"> 
      <div align="center"><b><font color="#000000" size="5" face="Arial, Helvetica, sans-serif"> 
        <?php  echo $champion;   ?>
        </font></b></div>
    </td>
    <td width="50"></td>
    <td height="9" ></td>
    <td width="257"></td>
  </tr>
  <tr> 
    <td width="29"  > </td>
    <td width="139"  ></td>
    <td width="144"  > 
      <div class="affichageEquipe" > 
        <?php echo $clubA4008; ?>
      </div>
    </td>
    <td width="73"  > 
      <div class="affichageGA" > 
        <?php echo $A4008; ?>
      </div>
    </td>
    <td width="137"  ></td>
    <td width="62"  ></td>
    <td width="72"  ></td>
    <td  width="50" ></td>
    <td  ></td>
    <td width="257"  ></td>
  </tr>
  <tr> 
    <td width="29" height="3" > </td>
    <td width="139" height="3" ></td>
    <td width="144" height="3" ></td>
    <td width="73" height="3" ></td>
    <td width="70" height="3" ></td>
    <td width="137" height="3" ></td>
    <td width="62" height="3" ></td>
    <td width="72" height="3" ></td>
    <td width="148" height="3" ></td>
    <td width="50" height="3" ></td>
    <td  width="50" height="3"></td>
    <td height="3" ></td>
    <td width="257" height="3" ></td>
  </tr>
  <tr> 
    <td width="29" ></td>
    <td width="139" ></td>
    <td width="144" ></td>
    <td width="73" ></td>
    <td width="70" ></td>
    <td width="137" ></td>
    <td width="62" ></td>
    <td width="72" ></td>
    <td width="148" ></td>
    <td width="50" ></td>
    <td  width="50"></td>
    <td height="76"></td>
    <td width="257" ></td>
  </tr>
  <tr> 
    <td width="29" ></td>
    <td width="139" ></td>
    <td width="144" ></td>
    <td width="73" ></td>
    <td width="70" ></td>
    <td width="137" ></td>
    <td width="62" ></td>
    <td width="72" ></td>
    <td width="148" ></td>
    <td width="50" ></td>
    <td  width="50"></td>
    <td height="151" ></td>
    <td width="257" ></td>
  </tr>
  <tr> 
    <td colspan="14"> 
      <hr />
    </td>
  </tr>
  <tr> 
    <td colspan="14" > 
    
    </td>
  </tr>
</table>
