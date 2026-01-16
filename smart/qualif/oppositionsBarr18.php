<?php
 if (isset($_GET['division'])) $division=$_GET['division'];else $division="pas id connu";
 if (isset($_GET['comite'])) $comite=$_GET['comite'];else $comite="pas id connu";
 if (isset($_GET['annee'])) $annee=$_GET['annee'];else $annee="pas id connu";
$bdcomiteClub = $comite.''."_clubs";
require ("../../phasesfinalesterr2019/fonctionspfterrESDL2019.php");
huitiemeEtBarrages2019 ($bdcomiteClub, $division, $annee)
													
?> 
<table  border="0" align="center">
  <tr> 
    <th colspan="2">Oppositions</th>
  </tr>
  <tr> 
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr> 
    <td>Barrages</td>
    <td>8me</td>
  </tr>
</table>
<table  border="0" align="center">
  <tr> 
    <td height="22"> 
      <div class="equipeB1" > 
        <?php  echo $clubA1601;?>
      </div>
    </td>
    <td  height="22"> 
      <div class="coin4"  > 
        <?php echo $clubA8001;?>
      </div>
    </td>
  </tr>
  <tr> 
    <td > 
      <div class="equipeB1" > 
        <?php  echo $clubA1602;?>
      </div>
    </td>
    <td > 
      <div class="coin4"  > 
        <?php echo $clubA8002;?>
      </div>
    </td>
  </tr>
  <tr> 
    <td > </td>
    <td > 
      <div class="coin5"  > 
        <?php echo $clubA8003;?>
      </div>
    </td>
  </tr>
  <tr> 
    <td > </td>
    <td > 
      <div class="coin5"  > 
        <?php echo $clubA8004;?>
      </div>
    </td>
  </tr>
</table>
  <table  border="0" align="center">
    <tr> 
      <td height="19">&nbsp;</td>
      <td height="19">&nbsp;</td>
    </tr>
    <tr> 
      <td  height="2"> 
        <div class="equipeB1" > 
          <?php  echo $clubA1603;?>
        </div>
      </td>
      <td  height="2"> 
        <div class="coin4"  > 
          <?php echo $clubA8005;?>
        </div>
      </td>
    </tr>
    <tr> 
      <td > 
        <div class="equipeB1" > 
          <?php  echo $clubA1604;?>
        </div>
      </td>
      <td> 
        <div class="coin4"  > 
          <?php echo $clubA8006;?>
        </div>
      </td>
    </tr>
    <tr> 
      <td > </td>
      <td> 
        <div class="coin5"  > 
          <?php echo $clubA8007;?>
        </div>
      </td>
    </tr>
    <tr> 
      <td > </td>
      <td> 
        <div class="coin5"  > 
          <?php echo $clubA8008;?>
        </div>
      </td>
    </tr>
  </table>
  <table  border="0" align="center">
    <tr> 
      <td> </td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td > 
        <div class="equipeB1" > 
          <?php  echo $clubA1605;?>
        </div>
      </td>
      <td > 
        <div class="coin4"  > 
          <?php echo $clubA8009;?>
        </div>
      </td>
    </tr>
    <tr> 
      <td > 
        <div class="equipeB1" > 
          <?php  echo $clubA1606;?>
        </div>
      </td>
      <td> 
        <div class="coin4"  > 
          <?php echo $clubA8010;?>
        </div>
      </td>
    </tr>
    <tr> 
      <td > </td>
      <td> 
        <div class="coin5"  > 
          <?php echo $clubA8011;?>
        </div>
      </td>
    </tr>
    <tr> 
      <td > </td>
      <td> 
        <div class="coin5"  > 
          <?php echo $clubA8012;?>
        </div>
      </td>
    </tr>
  </table>
  <table  border="0" align="center">
    <tr> 
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td > 
        <div class="equipeB1" > 
          <?php  echo $clubA1607;?>
        </div>
      </td>
      <td > 
        <div class="coin4"  > 
          <?php echo $clubA8013;?>
        </div>
      </td>
    </tr>
    <tr> 
      <td > 
        <div class="equipeB1" > 
          <?php  echo $clubA1608;?>
        </div>
      </td>
      <td> 
        <div class="coin4"  > 
          <?php echo $clubA8014;?>
        </div>
      </td>
    </tr>
    <tr> 
      <td > </td>
      <td> 
        <div class="coin5"  > 
          <?php echo $clubA8015;?>
        </div>
      </td>
    </tr>
    <tr> 
      <td > </td>
      <td> 
        <div class="coin5"  > 
          <?php echo $clubA8016;?>
        </div>
      </td>
    </tr>
  </table>
  