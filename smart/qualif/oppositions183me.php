<?php
 if (isset ($_GET['division'])) $division = $_GET['division']; else $division = "Variable Division non d�clar�e";
 if (isset ($_GET['comite'])) $comite = $_GET['comite']; else $comite = "Variable comite non d�clar�e";
 ?>

<table width="95%" border="0" align="center" height="399" cellspacing="0">
  <tr> 
    <td colspan="5" height="13">Oppositions des 8me de finale</td>
  </tr>
  <tr> 
    <td width="40%" height="13">Oppositions</td>
    <td width="4%" height="13">&nbsp;</td>
    <td width="1%" height="13" bgcolor="#000000">&nbsp;</td>
    <td width="5%" height="13"> 
      <div class="rang" >Rang </div>
    </td>
    <td width="50%" height="13">Qualifiés en 8me </td>
  </tr>
  <tr> 
    <td height="13" width="40%">&nbsp;</td>
    <td height="13" width="4%">&nbsp;</td>
    <td height="13" width="1%" bgcolor="#000000">&nbsp;</td>
    <td colspan="2" height="13">Classement des 1er de poule</td>
  </tr>
  <tr> 
    <td width="40%"> 
      <div id="coin4" > 
        <?php echo $clubA8001;?>
      </div>
    </td>
    <td width="4%" height="13">&nbsp;</td>
    <td width="1%" height="13" bgcolor="#000000">&nbsp;</td>
    <td width="5%" height="13"> 
      <div class="rang" >1</div>
    </td>
    <td width="50%" height="13"> 
      <div class="equipeQ" > 
        <?php	echo $club1; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="40%"> 
      <div id="coin4" > 
        <?php  echo $clubA8002;?>
      </div>
    </td>
    <td width="4%">&nbsp;</td>
    <td width="1%" bgcolor="#000000">&nbsp;</td>
    <td width="5%"> 
      <div class="rang" >2 </div>
    </td>
    <td width="50%"> 
      <div class="equipeQ" > 
        <?php	echo $club2; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="40%"> 
      <div id="coin5"  > 
        <?php  echo $clubA8003;?>
      </div>
    </td>
    <td width="4%" height="16">&nbsp;</td>
    <td width="1%" height="16" bgcolor="#000000">&nbsp;</td>
    <td width="5%" height="16"> 
      <div class="rang" >3 </div>
    </td>
    <td width="50%" height="16"> 
      <div class="equipeQ" > 
        <?php	echo $club3; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="40%"> 
      <div id="coin5"> 
        <?php  echo $clubA8004;?>
      </div>
    </td>
    <td width="4%" height="9">&nbsp;</td>
    <td width="1%" height="9" bgcolor="#000000">&nbsp;</td>
    <td width="5%" height="9"> 
      <div class="rang" >4 </div>
    </td>
    <td width="50%" height="9"> 
      <div class="equipeQ" > 
        <?php	echo $club4; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="40%">&nbsp;</td>
    <td width="4%">&nbsp;</td>
    <td width="1%" bgcolor="#000000">&nbsp;</td>
    <td width="5%"> 
      <div class="rang" >5 </div>
    </td>
    <td width="50%"> 
      <div class="equipeQ" > 
        <?php	echo $club5; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="40%"> 
      <div id="coin4" > 
        <?php  echo $clubA8005;?>
      </div>
    </td>
    <td width="4%" height="24">&nbsp;</td>
    <td width="1%" height="24" bgcolor="#000000">&nbsp;</td>
    <td width="5%" height="24"> 
      <div class="rang" >6 </div>
    </td>
    <td width="50%" height="24"> 
      <div class="equipeQ" > 
        <?php	echo $club6; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="40%"> 
      <div id="coin4" > 
        <?php  echo  $clubA8006;?>
      </div>
    </td>
    <td width="4%" height="11">&nbsp;</td>
    <td width="1%" height="11" bgcolor="#000000">&nbsp;</td>
    <td width="5%" height="11"> 
      <div class="rang" >7 </div>
    </td>
    <td width="50%" height="11"> 
      <div class="equipeQ" > 
        <?php	echo $club7; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="40%"> 
      <div id="coin5"  > 
        <?php echo  $clubA8007;?>
      </div>
    </td>
    <td width="4%" height="8">&nbsp;</td>
    <td width="1%" height="8" bgcolor="#000000">&nbsp;</td>
    <td width="5%" height="8"> 
      <div class="rang" >8</div>
    </td>
    <td width="50%" height="8"> 
      <div class="equipeQ" > 
        <?php	echo $club8; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="40%"> 
      <div id="coin5"> 
        <?php echo  $clubA8008;?>
      </div>
    </td>
    <td height="23" width="4%">&nbsp;</td>
    <td height="23" width="1%" bgcolor="#000000">&nbsp;</td>
    <td colspan="2" height="23">Classement des 2me de poule</td>
  </tr>
  <tr> 
    <td width="40%" height="23">&nbsp;</td>
    <td width="4%" height="23">&nbsp;</td>
    <td width="1%" height="23" bgcolor="#000000">&nbsp;</td>
    <td width="5%" height="23"> 
      <div class="rang" >9</div>
    </td>
    <td width="50%" height="23"> 
      <div class="equipeQ" > 
        <?php	echo $club9; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="40%"> 
      <div id="coin4" > 
        <?php  echo $clubA8009;?>
      </div>
    </td>
    <td width="4%" height="22">&nbsp;</td>
    <td width="1%" height="22" bgcolor="#000000">&nbsp;</td>
    <td width="5%" height="22"> 
      <div class="rang" >10</div>
    </td>
    <td width="50%" height="22"> 
      <div class="equipeQ" > 
        <?php	echo $club10; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="40%" height="25"> 
      <div id="coin4" > 
        <?php  echo $clubA8010;?>
      </div>
    </td>
    <td width="4%" height="25">&nbsp;</td>
    <td width="1%" height="25" bgcolor="#000000">&nbsp;</td>
    <td width="5%" height="25"> 
      <div class="rang" >11</div>
    </td>
    <td width="50%" height="25"> 
      <div class="equipeQ" > 
        <?php	echo $club11; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="40%"> 
      <div id="coin5"  > 
        <?php  echo $clubA8011;?>
      </div>
    </td>
    <td width="4%" height="22">&nbsp;</td>
    <td width="1%" height="22" bgcolor="#000000">&nbsp;</td>
    <td width="5%" height="22"> 
      <div class="rang" >12</div>
    </td>
    <td width="50%" height="22"> 
      <div class="equipeQ" > 
        <?php	echo $club12; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="40%"> 
      <div id="coin5"> 
        <?php  echo $clubA8012;?>
      </div>
    </td>
    <td width="4%" height="18">&nbsp;</td>
    <td width="1%" height="18" bgcolor="#000000">&nbsp;</td>
    <td width="5%" height="18"> 
      <div class="rang" >13</div>
    </td>
    <td width="50%" height="18"> 
      <div class="equipeQ" > 
        <?php	echo $club13; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="40%" height="20">&nbsp;</td>
    <td width="4%" height="20">&nbsp;</td>
    <td width="1%" height="20" bgcolor="#000000">&nbsp;</td>
    <td width="5%" height="20"> 
      <div class="rang" >14</div>
    </td>
    <td width="50%" height="20"> 
      <div class="equipeQ" > 
        <?php	echo $club14; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="40%"> 
      <div id="coin4" > 
        <?php  echo $clubA8009;?>
      </div>
    </td>
    <td width="4%" height="2">&nbsp;</td>
    <td width="1%" height="2" bgcolor="#000000">&nbsp;</td>
    <td width="5%" height="2"> 
      <div class="rang" >15</div>
    </td>
    <td width="50%" height="2"> 
      <div class="equipeQ" > 
        <?php	echo $club15; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="40%" height="25"> 
      <div id="coin4" > 
        <?php  echo $clubA8010;?>
      </div>
    </td>
    <td width="4%" height="20">&nbsp;</td>
    <td width="1%" height="20" bgcolor="#000000">&nbsp;</td>
    <td width="5%" height="20"> 
      <div class="rang" >16</div>
    </td>
    <td width="50%" height="20"> 
      <div class="equipeQ" > 
        <?php	echo $club16; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="40%"> 
      <div id="coin5"  > 
        <?php  echo $clubA8011;?>
      </div>
    </td>
    <td width="4%" height="20">&nbsp;</td>
    <td width="1%" height="20" bgcolor="#000000">&nbsp;</td>
    <td width="5%" height="20">&nbsp;</td>
    <td width="50%" height="20">&nbsp;</td>
  </tr>
  <tr> 
    <td width="40%"> 
      <div id="coin5"> 
        <?php  echo $clubA8012;?>
      </div>
    </td>
    <td width="4%" height="20">&nbsp;</td>
    <td width="1%" height="20" bgcolor="#000000">&nbsp;</td>
    <td width="5%" height="20">&nbsp;</td>
    <td width="50%" height="20">&nbsp;</td>
  </tr>
  <tr> 
    <td width="40%" height="20">&nbsp;</td>
    <td width="4%" height="20">&nbsp;</td>
    <td width="1%" height="20" bgcolor="#000000">&nbsp;</td>
    <td width="5%" height="20">&nbsp;</td>
    <td width="50%" height="20">&nbsp;</td>
  </tr>
  <tr> 
    <td width="40%" height="20">&nbsp;</td>
    <td width="4%" height="20">&nbsp;</td>
    <td width="1%" height="20">&nbsp;</td>
    <td width="5%" height="20">&nbsp;</td>
    <td width="50%" height="20">&nbsp;</td>
  </tr>
</table>
