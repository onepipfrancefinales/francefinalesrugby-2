<?php

 if (isset ($_GET['division'])) $division = $_GET['division']; else $division = "Variable Division non déclarée";
 if (isset ($_GET['comite'])) $comite = $_GET['comite']; else $comite = "Variable comite non déclarée";
 ?>
 
 
 <!--
 <head>
<link rel="stylesheet" type="text/css" href="qualification.css">

</head>

-->
<?php
//$bdcomiteClub = $comite.''."_clubs";
require ("fonction_Qualification.php");
classementParPoints8poules($comite, $division);

?> 

 

 
 
 
 
<table width="192" border="0" align="left" height="399" cellspacing="0">
  <tr> 
    <th colspan="2" height="13">Equipes Qualifi&eacute;es</th>
  </tr>
  <tr> 
    <td width="38" height="13">&nbsp;</td>
    <td width="262" height="13">&nbsp;</td>
  </tr>
  <tr> 
    <td width="38" height="13"> 
      <div class="rangTitre" >Rang </div>
    </td>
    <td width="262" height="13"><div class="rangTitre" >Qualifi&eacute;s en 8me </div></td>
  </tr>
  <tr> 
    <td colspan="2" height="13">Classement des 1er de poule</td>
  </tr>
  <tr> 
    <td width="38" height="13"> 
      <div class="rang" >1</div>
    </td>
    <td width="262" height="13"> 
      <div class="equipeQ" > 
        <?php	echo $club1; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="38"> 
      <div class="rang" >2 </div>
    </td>
    <td width="262"> 
      <div class="equipeQ" > 
        <?php	echo $club2; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="38" height="16"> 
      <div class="rang" >3 </div>
    </td>
    <td width="262" height="16"> 
      <div class="equipeQ" > 
        <?php	echo $club3; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="38" height="9"> 
      <div class="rang" >4 </div>
    </td>
    <td width="262" height="9"> 
      <div class="equipeQ" > 
        <?php	echo $club4; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="38"> 
      <div class="rang" >5 </div>
    </td>
    <td width="262"> 
      <div class="equipeQ" > 
        <?php	echo $club5; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="38" height="24"> 
      <div class="rang" >6 </div>
    </td>
    <td width="262" height="24"> 
      <div class="equipeQ" > 
        <?php	echo $club6; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="38" height="11"> 
      <div class="rang" >7 </div>
    </td>
    <td width="262" height="11"> 
      <div class="equipeQ" > 
        <?php	echo $club7; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="38" height="8"> 
      <div class="rang" >8</div>
    </td>
    <td width="262" height="8"> 
      <div class="equipeQ" > 
        <?php	echo $club8; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td colspan="2" height="23">Classement des 2me de poule</td>
  </tr>
  <tr> 
    <td width="38" height="23"> 
      <div class="rang" >9</div>
    </td>
    <td width="262" height="23"> 
      <div class="equipeQ" > 
        <?php	echo $club9; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="38" height="22"> 
      <div class="rang" >10</div>
    </td>
    <td width="262" height="22"> 
      <div class="equipeQ" > 
        <?php	echo $club10; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="38" height="25"> 
      <div class="rang" >11</div>
    </td>
    <td width="262" height="25"> 
      <div class="equipeQ" > 
        <?php	echo $club11; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="38" height="22"> 
      <div class="rang" >12</div>
    </td>
    <td width="262" height="22"> 
      <div class="equipeQ" > 
        <?php	echo $club12; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="38" height="18"> 
      <div class="rang" >13</div>
    </td>
    <td width="262" height="18"> 
      <div class="equipeQ" > 
        <?php	echo $club13; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="38" height="20"> 
      <div class="rang" >14</div>
    </td>
    <td width="262" height="20"> 
      <div class="equipeQ" > 
        <?php	echo $club14; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="38" height="2"> 
      <div class="rang" >15</div>
    </td>
    <td width="262" height="2"> 
      <div class="equipeQ" > 
        <?php	echo $club15; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="38" height="20"> 
      <div class="rang" >16</div>
    </td>
    <td width="262" height="20"> 
      <div class="equipeQ" > 
        <?php	echo $club16; ?>
      </div>
    </td>
  </tr>
</table>
