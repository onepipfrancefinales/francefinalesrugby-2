<?php
if (isset($bdcomiteClub)) $$bdcomiteClub = $bdcomiteClub;
else $bdcomiteClub = '-';

$anneemoins = $annee - 1;
$anneeplus = $annee + 1;

require("../../phasesfinalesterr2019/fonctionspfterrESDL2019.php");
quartsAR2019($comite, $division, $annee, $bdd);
traitementScores(4001, 4008, $bdd);
traitementScores(1001, 1002, $bdd);
afficheLieux($division, $annee, $comite, $bdd);
champion($comite, $clubA1001, $clubA1002, $A1001, $A1002, $bdd);
//afficheDivisionChampion($division);
afficheDivisionChampionLigue($division, $annee);
?>


<head>

  <link rel="stylesheet" type="text/css" href="../../phasesfinalesterr/champTerr.css">

</head>


<body>
  <table width="1000" border="0" height="500" cellspacing="0">
    <tr>
      <td></td>
      <td></td>
      <td> <div class="affichageTitre">Quarts de finale AR</div> </td>
     <td width="25"></td> 
      <td></td>
      <td></td>
      <td colspan="2"> <div class="affichageTitre">Demi finale</div> </td>
      <td></td>
      <td></td>
      <td colspan="2"> <div class="affichageTitre">Finale</div></td>
      <td></td>
   
      <td height="1"  width="12"></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td> </td>
      <td></td>
      <td class="size2 styleArial italic  alignLeft bold"> <?php echo $D4000; ?></td>
      <td></td>
      <td></td>
      <td></td>
      <td colspan="2"  class="size2 styleArial italic  alignLeft bold"><?php echo $D2000; ?></td>
      <td></td>
      <td></td>
      <td colspan="2" class="size2 styleArial italic  alignLeft bold"> <?php echo $D1000; ?></td>
     
      <td></td>
      <td ></td>
      <td></td>
    </tr>
    <tr>
      <td width="29" height ="25"></td>
      <td width="139"></td>
      <td width="25"></td>
      <td></td>
      <td width="73"></td>
      <td width="70"></td>
      <td></td>
      <td></td>
      <td width="25"></td>
      <td width="148"></td>
      <td width="50"></td>
      <td width="50"></td>
      <td></td>
      <td width="257"></td>
    </tr>    <tr>
      <td width="29"> </td>
      <td width="139"></td>
      <td width="144"> <div class="affichageEquipe"><?php echo $clubA4001; ?></div> </td>
      <td ><div class="affichagePts"><?php echo $pts4001; ?> </td>
      <td > <div class="affichageGA"><?php echo $GA4001; ?></div></td>
        <td rowspan="8"><img src="../../images/accolade.png" width="8" height="121"></td> 
      <td></td>
      <td width="62"></td>
      <td width="25"></td>
      <td></td>
      <td width="148"></td>
      <td width="50"></td>
      <td width="50"></td>
      <td></td>
      <td width="257"></td>
    </tr>
    <tr>
      <td width="29"></td>
      <td width="139"></td>
      <td width="144">
        <div class="affichageEquipe">
          <?php echo $clubA4002; ?>
        </div>
      </td>
      <td>
        <div class="affichagePts"><?php echo $pts4002; ?>
      </td>
      <td width="73">
        <div class="affichageGA">
          <?php echo $GA4002;  ?>
        </div>
      </td>
      <td></td>
      <td></td>
      <td width="25"></td>
      <td width="25"></td>
      <td width="148"></td>
      <td width="50"></td>
      <td width="50"></td>
      <td></td>
      <td width="257"></td>
    </tr>
    <tr>
      <td width="29"> </td>
      <td width="139"></td>
      <td width="25"></td>
      <td ></td>
      <td width="73"></td>
      <td></td>
      <td></td>
      <td width="25"></td>
      <td width="148"></td>
      <td width="50"></td>
      <td width="50"></td>
      <td></td>
      <td width="257"></td>
    </tr>
    <tr>
      <td width="29"> </td>
      <td width="139"></td>
      <td width="25"></td>
      <td ></td>
      <td width="73"></td>
      <td>
        <div class="affichageEquipe">
          <?php echo $clubA2001; ?>
        </div>
      </td>
      <td>
        <div class="affichageGA">
          <?php echo $A2001; ?>
        </div>
      </td>
         <td rowspan="15"><img src="../../images/accolade.png" width="8" height="228">  
      </td>

      <td width="50"></td>
      <td width="50"></td>
      <td></td>
      <td width="257"></td>
    </tr>
    <tr>
      <td width="29"></td>
      <td width="139"></td>
      <td width="25"></td>
      <td ></td>
      <td width="73"></td>
      <td>
        <div class="affichageEquipe">
          <?php echo $clubA2002; ?>
        </div>
      </td>
      <td>
        <div class="affichageGA">
          <?php echo $A2002; ?>
        </div>
      </td>
      <td width="148"></td>
      <td width="50"></td>
      <td width="50"></td>
      <td></td>
      <td width="257"></td>
    </tr>
    <tr>
      <td width="29"> </td>
      <td width="139"></td>
      <td width="25"></td>
      <td  class="size2 styleArial italic alignLeft bold"><?php echo $L4003; ?></td>
      <td width="73"></td>
      <td></td>
      <td></td>
      <td width="148"></td>
      <td width="50"></td>
      <td width="50"></td>
      <td></td>
      <td width="257"></td>
    </tr>
    <tr>
      <td width="29"> </td>
      <td width="139"></td>
      <td >
        <div class="affichageEquipe">
          <?php echo $clubA4003; ?>
        </div>
      </td>
      <td width="25">
        <div class="affichagePts"><?php echo $pts4003; ?>
      </td>
      <td width="73">
        <div class="affichageGA">
          <?php echo $GA4003;  ?>
        </div>
      </td>
      <td></td>
      <td></td>
      <td width="25"></td>
      <td width="148"></td>
      <td width="50"></td>
      <td width="50"></td>
      <td></td>
      <td width="257"></td>
    </tr>
    <tr>
      <td width="29"> </td>
      <td width="139"></td>
      <td >
        <div class="affichageEquipe">
          <?php echo $clubA4004; ?>
        </div>
      </td>
      <td width="25">
        <div class="affichagePts"><?php echo $pts4004; ?>
      </td>
      <td width="73">
        <div class="affichageGA">
          <?php echo $GA4004;  ?>
        </div>
      </td>
      <td></td>
      <td></td>
      <td width="148" class="size2 styleArial italic alignLeft bold"><?php echo $L1001; ?></td>
      <td width="50"> </td>
      <td width="25"></td>
      <td width="50"></td>
      <td></td>
      <td width="257"></td>
    </tr>
    <tr>
      <td width="29"> </td>
      <td width="139"></td>
      <td ></td>
      <td width="25"></td>
      <td width="73"></td>
      <td width="70"></td>
      <td></td>
      <td></td>
      <td width="148">
        <div class="affichageEquipe">
          <?php echo $clubA1001;  ?>
        </div>
      </td>
      <td width="50">
        <div class="affichageGA">
          <?php echo $A1001; ?>
        </div>
      </td>
      <td width="50"></td>
      <td></td>
      <td width="257"></td>
    </tr>
    <tr>
      <td width="29"> </td>
      <td width="139"></td>
      <td ></td>
      <td width="25"></td>
      <td width="73"></td>
      <td width="70"></td>
      <td></td>
      <td></td>
      <td width="148">
        <div class="affichageEquipe">
          <?php echo $clubA1002;  ?>
        </div>
      </td>
      <td width="50">
        <div class="affichageGA">
          <?php echo $A1002;  ?>
        </div>
      </td>
      <td width="50"></td>
      <td></td>
      <td width="257"></td>
    </tr>
    <tr>
      <td width="29"> </td>
      <td width="139"></td>
      <td ></td>
      <td width="25"></td>
      <td width="73"></td>
      <td width="70"></td>
      <td></td>
      <td></td>
      <td width="148"></td>
      <td width="50"></td>
      <td width="50"></td>
      <td></td>
      <td width="257"></td>
    </tr>
    <tr valign="top">
      <td width="29"> </td>
      <td width="139"></td>
      <td ></td>
      <td width="73"></td>
      <td width="70"></td>
      <td width="25"></td>
      <td></td>
      <td></td>
      <td width="148"></td>
      <td width="50"></td>
      <td width="50"></td>
      <td></td>
      <td width="257"></td>
    </tr>
    <tr valign="top">
      <td width="29"> </td>
      <td width="139"></td>
      <td width="25"></td>
      <td  class="size2 styleArial italic  alignLeft bold"><?php echo $L4005; ?></td>
      <td width="73"></td>
      <td width="70"></td>
      <td></td>
      <td></td>
      <td colspan="2">
        <div align="center">
          <font face="Arial, Helvetica, sans-serif" size="3"><b>Champion
              <i>
                <?php echo $annee; ?>
              </i> </b></font>
        </div>
      </td>
      <td width="50"></td>
      <td></td>
      <td width="257"></td>
    </tr>
    <tr>
      <td width="29"> </td>
      <td width="139"></td>
      <td >
        <div class="affichageEquipe">
          <?php echo $clubA4005; ?>
        </div>
      </td>
      <td width="25">
        <div class="affichagePts"><?php echo $pts4005; ?>
      </td>
      <td width="73">
        <div class="affichageGA">
          <?php echo $GA4005;  ?>
        </div>
      </td>
      <td rowspan="8"><img src="../../images/accolade.png" width="8" height="121"></td> 
      <td colspan="2"></td>
      

      <td colspan="2"> <div align="center"><b><font color="#000000" size="3" face="Arial, Helvetica, sans-serif"> <?php	 echo $division; ?>
      </font></b></div></td>
      <td width="257"></td>
    </tr>
    <tr>
      <td width="29" > </td>
      <td width="139" ></td>
      <td  >
        <div class="affichageEquipe">
          <?php echo $clubA4006; ?>
        </div>
      </td>
      <td width="25">
        <div class="affichagePts"><?php echo $pts4006; ?>
      </td>
      <td width="73" >
        <div class="affichageGA">
          <?php echo $GA4006; ?>
        </div>
      </td>
      <td ></td>
      <td ></td>
      <td colspan="2" height="37" rowspan="5">
        <div align="center"><img src="<?php echo $champLogo;  ?>" width="100" height="100"></div>
      </td>
      <td width="50" ></td>
      <td ></td>
      <td width="257" ></td>
    </tr>
    <tr>
      <td width="29"> </td>
      <td width="139"></td>
      <td ></td>
      <td width="25"></td>
      <td width="73"></td>
      <td>
        <font size="2" face="Arial, Helvetica, sans-serif"><b><i><strong>
                <?php //echo $L2003; 
                ?>
              </strong></i></b></font>
      </td>
      <td></td>
      <td width="50"></td>
      <td height="1"></td>
      <td width="257"></td>
    </tr>
    <tr>
      <td width="29"></td>
      <td width="139"></td>
      <td ></td>
      <td width="25"></td>
      <td width="73"></td>
      <td>
        <div class="affichageEquipe">
          <?php echo $clubA2003; ?>
        </div>
      </td>
      <td>
        <div class="affichageGA">
          <?php echo $A2003; ?>
        </div>
      </td>
      <td width="50"></td>
      <td height="1"></td>
      <td width="257"></td>
    </tr>
    <tr>
      <td width="29"> </td>
      <td width="139"></td>
      <td ></td>
      <td width="25"></td>
      <td width="73"></td>
      <td>
        <div class="affichageEquipe">
          <?php echo $clubA2004; ?>
        </div>
      </td>
      <td>
        <div class="affichageGA">
          <?php echo $A2004; ?>
        </div>
      </td>
      <td width="50"></td>
      <td></td>
      <td width="257"></td>
    </tr>
    <tr>
      <td width="29"> </td>
      <td width="139"></td>
      <td width="25"></td>
      <td > <strong>
          <font size="2" face="Arial, Helvetica, sans-serif"><b><i><strong>
                  <?php echo $L4007; ?>
                </strong></i></b></font>
        </strong></td>
      <td width="73"></td>
      <td> </td>
      <td> </td>
      <td width="25"></td>
      <td width="50"></td>
      <td></td>
      <td width="257"></td>
    </tr>
    <tr>
      <td width="29"> </td>
      <td width="139"></td>
      <td >
        <div class="affichageEquipe">
          <?php echo $clubA4007; ?>
        </div>
      </td>
      <td width="25">
        <div class="affichagePts"><?php echo $pts4007; ?>
      </td>
      <td width="73"> <div class="affichageGA"> <?php echo $GA4007;  ?>  </div> </td>
      <td colspan="2"></td>
      <td width="25"></td>
      <td rowspan="2" colspan="2">
        <div align="center"><b>
            <font color="#000000" size="5" face="Arial, Helvetica, sans-serif">
              <?php echo $champion;   ?>
            </font>
          </b></div>
      </td>
      <td width="50"></td>
      <td ></td>
      <td width="257"></td>
    </tr>
    <tr>
      <td width="29"> </td>
      <td width="139"></td>
      <td >
        <div class="affichageEquipe">
          <?php echo $clubA4008; ?>
        </div>
      </td>
      <td width="25">
        <div class="affichagePts"><?php echo $pts4008; ?>
      </td>
      <td width="73">
        <div class="affichageGA">
          <?php echo $GA4008; ?>
        </div>
      </td>
      <td></td>
      <td></td>
      <td width="25"></td>
      <td width="50"></td>
      <td></td>
      <td width="257"></td>
    </tr>
    <tr>
      <td > </td>
      <td width="139" ></td>
      <td  ></td>
      <td width="25"></td>
      <td width="73" ></td>
      <td width="70" ></td>
      <td ></td>
      <td ></td>
      <td width="25" ></td>
      <td width="148" ></td>
      <td width="50" ></td>
      <td width="50" ></td>
      <td ></td>
      <td width="257" ></td>
    </tr>
    <tr>
      <td width="29"></td>
      <td width="139"></td>
      <td ></td>
      <td width="25"></td>
      <td width="73"></td>
      <td width="70"></td>
      <td></td>
      <td></td>
      <td width="25"></td>
      <td width="148"></td>
      <td width="50"></td>
      <td width="50"></td>
      <td height="76"></td>
      <td width="257"></td>
    </tr>
    <tr>
      <td width="29"></td>
      <td width="139"></td>
      <td ></td>
      <td width="25"></td>
      <td width="73"></td>
      <td width="70"></td>
      <td></td>
      <td></td>
      <td width="25"></td>
      <td width="148"></td>
      <td width="50"></td>
      <td width="50"></td>
      <td height="151"></td>
      <td width="257"></td>
    </tr>
    <tr>
      <td colspan="15">
        <hr />
      </td>
    </tr>
    <tr>
      <td colspan="15">

      </td>
    </tr>
  </table>