<?php
 if (isset ($_GET['division'])) $division = $_GET['division']; else $division = "Variable Division non déclarée";


//echo $division;
//$division=170;
?><head>
<link rel="stylesheet" type="text/css" href="qualification.css">
</head>


<?php
require '../../connect/connexion2.php';

//$bdcomiteClub = $comite.''."_clubs";
require ("fonction_Qualification.php");
classementParPoule($comite, $division);

?> 




<table width="192" border="0" align="left" height="500" cellspacing="0">
  <tr> 
    <th colspan="2" height="13">Qualifi&eacute;es en 8me</th>
  </tr>
  <tr> 
    <td width="38" height="13">&nbsp;</td>
    <td width="262" height="13">&nbsp;</td>
  </tr>
  <tr> 
    <td width="38" height="13"> 
      <div class="rangTitre" >Rang </div>
    </td>
    <td width="262" height="13"> 
      <div class="rangTitre" >Qualifi&eacute;s en 8me</div>
    </td>
  </tr>
  <tr> 
    <td colspan="2" height="13">Classement de la Poule 1</td>
  </tr>
  <tr> 
    <td width="38" height="13"> 
      <div class="rang" >1</div>
    </td>
    <td width="262" height="13"> 
      <div class="equipeQ" > 
        <?php	echo $clubA1P1; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="38"> 
      <div class="rang" >2 </div>
    </td>
    <td width="262"> 
      <div class="equipeQ" > 
        <?php	echo $clubA2P1; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="38" height="16"> 
      <div class="rang" >3 </div>
    </td>
    <td width="262" height="16"> 
      <div class="equipeQ" > 
        <?php	echo $clubA3P1; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="38" height="9"> 
      <div class="rang" >4 </div>
    </td>
    <td width="262" height="9"> 
      <div class="equipeQ" > 
        <?php	echo $clubA4P1; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td colspan="2">Classement de la Poule 2</td>
  </tr>
  <tr> 
    <td width="38"> 
      <div class="rang" >1</div>
    </td>
    <td width="262" height="13"> 
      <div class="equipeQ" > 
        <?php	echo $clubA1P2; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="38" height="24"> 
      <div class="rang" >2</div>
    </td>
    <td width="262"> 
      <div class="equipeQ" > 
        <?php	echo $clubA2P2; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="38" height="11"> 
      <div class="rang" >3</div>
    </td>
    <td width="262" height="16"> 
      <div class="equipeQ" > 
        <?php	echo $clubA3P2; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="38"> 
      <div class="rang" >4</div>
    </td>
    <td width="262" height="9"> 
      <div class="equipeQ" > 
        <?php	echo $clubA4P2; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td colspan="2" height="23">Classement de la Poule 3</td>
  </tr>
  <tr> 
    <td width="38" height="23"> 
      <div class="rang" >1</div>
    </td>
    <td width="262" height="13"> 
      <div class="equipeQ" > 
        <?php	echo $clubA1P3; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="38" height="22"> 
      <div class="rang" >2</div>
    </td>
    <td width="262"> 
      <div class="equipeQ" > 
        <?php	echo $clubA2P3; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="38" height="25"> 
      <div class="rang" >3</div>
    </td>
    <td width="262" height="16"> 
      <div class="equipeQ" > 
        <?php	echo $clubA3P3; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="38" height="22"> 
      <div class="rang" >4</div>
    </td>
    <td width="262" height="9"> 
      <div class="equipeQ" > 
        <?php	echo $clubA4P3; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td colspan="2">Classement de la Poule 4</td>
  </tr>
  <tr> 
    <td width="38"> 
      <div class="rang" >1</div>
    </td>
    <td width="262" height="13"> 
      <div class="equipeQ" > 
        <?php	echo $clubA1P4; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="38"> 
      <div class="rang" >2</div>
    </td>
    <td width="262"> 
      <div class="equipeQ" > 
        <?php	echo $clubA2P4; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="38" height="14"> 
      <div class="rang" >2</div>
    </td>
    <td width="262" height="16"> 
      <div class="equipeQ" > 
        <?php	echo $clubA3P4; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="38" height="20"> 
      <div class="rang" >4</div>
    </td>
    <td width="262" height="9"> 
      <div class="equipeQ" > 
        <?php	echo $clubA4P4; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="38" height="17">&nbsp;</td>
    <td width="262" height="17">&nbsp;</td>
  </tr>
</table>
