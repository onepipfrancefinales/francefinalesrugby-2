<?php

 if (isset ($_GET['division'])) $division = $_GET['division']; else $division = "Variable Division non déclarée";

 ?>
 <!--
 <head>
<link rel="stylesheet" type="text/css" href="qualification.css">
</head>
-->

<?php
//$bdcomiteClub = $comite.''."_clubs";
require ("fonction_Qualification.php");
classementParPoints5poules($comite, $division);

?> 


 
 
<table width="196" align="left" height="444" cellspacing="0">
  <tr> 
    <td width="35"> </td>
    <td width="261"> </td>
  </tr>
  <tr> 
    <th colspan="2">Equipes Qualifi&eacute;es</th>
  </tr>
  <tr> 
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr> 
    <td><div class="rangTitre" >Rang</div></td>
    <td><div class="rangTitre" >8me et barrages</div></td>
  </tr>
  <tr> 
    <td colspan="2">Classement des 1er de poule</td>
  </tr>
  <tr> 
    <td width="35"> 
      <div class="rang" >1</div>
    </td>
    <td width="261"> 
      <div class="equipeQ" > 
        <?php	echo $club1; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="35"> 
      <div class="rang" >2 </div>
    </td>
    <td width="261"> 
      <div class="equipeQ" > 
        <?php	echo $club2; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="35"> 
      <div class="rang" >3 </div>
    </td>
    <td width="261"> 
      <div class="equipeQ" > 
        <?php	echo $club3; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="35"> 
      <div class="rang" >4 </div>
    </td>
    <td width="261"> 
      <div class="equipeQ" > 
        <?php	echo $club4; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="35"> 
      <div class="rang" >5 </div>
    </td>
    <td width="261"> 
      <div class="equipeQ" > 
        <?php	echo $club5; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="35"> </td>
    <td width="261"> </td>
  </tr>
  <tr> 
    <td colspan="2">Classement des 2me de poule</td>
  </tr>
  <tr> 
    <td width="35"> 
      <div class="rang" >6 </div>
    </td>
    <td width="261"> 
      <div class="equipeQ" > 
        <?php	echo $club6; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="35"> 
      <div class="rang" >7 </div>
    </td>
    <td width="261"> 
      <div class="equipeQ" > 
        <?php	echo $club7; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="35"> 
      <div class="rang" >8</div>
    </td>
    <td width="261"> 
      <div class="equipeQ" > 
        <?php	echo $club8; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="35"> 
      <div class="rang" >9</div>
    </td>
    <td width="261"> 
      <div class="equipeQ" > 
        <?php	echo $club9; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="35"> 
      <div class="rang" >10</div>
    </td>
    <td width="261"> 
      <div class="equipeQ" > 
        <?php	echo $club10; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="35"> </td>
    <td width="261"> </td>
  </tr>
  <tr> 
    <td colspan="2">Classement des 3me de poule</td>
  </tr>
  <tr> 
    <td width="35"> 
      <div class="rang" >11</div>
    </td>
    <td width="261"> 
      <div class="equipeQ" > 
        <?php	echo $club11; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="35"> 
      <div class="rang" >12</div>
    </td>
    <td width="261"> 
      <div class="equipeQ" > 
        <?php	echo $club12; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="35"> </td>
    <td width="261"> </td>
  </tr>
  <tr> 
    <td width="35"> </td>
    <td width="261"> 
      <div align="center"><b><font face="Arial, Helvetica, sans-serif">Barragistes</font></b></div>
    </td>
  </tr>
  <tr> 
    <td width="35"> 
      <div class="rang" >13</div>
    </td>
    <td width="261"> 
      <div class="equipeB" > 
        <?php	echo $club13; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="35"> 
      <div class="rang" >14</div>
    </td>
    <td width="261"> 
      <div class="equipeB" > 
        <?php	echo $club14; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="35"> 
      <div class="rang" >15</div>
    </td>
    <td width="261"> 
      <div class="equipeB" > 
        <?php	echo $club15; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="35"> </td>
    <td width="261"> </td>
  </tr>
  <tr> 
    <td colspan="2">Classement des 4me de poule</td>
  </tr>
  <tr> 
    <td width="35"> 
      <div class="rang" >16</div>
    </td>
    <td width="261"> 
      <div class="equipeB" > 
        <?php	echo $club16; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="35"> 
      <div class="rang" >17</div>
    </td>
    <td width="261"> 
      <div class="equipeB" > 
        <?php	echo $club17; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="35"> 
      <div class="rang" >18</div>
    </td>
    <td width="261"> 
      <div class="equipeB" > 
        <?php	echo $club18; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="35"> 
      <div class="rang" >19</div>
    </td>
    <td width="261"> 
      <div class="equipeB" > 
        <?php	echo $club19; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="35" height="19"> 
      <div class="rang" >20</div>
    </td>
    <td width="261" height="19"> 
      <div class="equipeB" > 
        <?php	echo $club20; ?>
      </div>
    </td>
  </tr>
</table>
