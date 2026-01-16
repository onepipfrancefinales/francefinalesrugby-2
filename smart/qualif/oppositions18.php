<?php
if (isset($_GET['id'])) $id=$_GET['id'];else $id="pas id connu";
if (isset($bdcomiteClub)) $bdcomiteClub=$_GET['bdcomiteClub'];else $bdcomiteClub="pas id connu";
$annee=$_GET['annee'];
$comite=$_GET['comite'];
$division=$id;
 

//$bdcomite=("php".''.$comite);
$bdcomiteClubs= ("php".''.$comite.''."_clubs"); 

//$phpcomite_clubs=$bdcomiteClubs;  
//$phpcomite_annee=$bdcomiteAnnee;  

$bdcomiteAnnee =("php".''.$comite.''."_pfterr");
 
require ("../../phasesfinalesterr2019/fonctionspfterrESDL2019.php");
huitieme2019 ($bdcomiteClub, $division, $annee);
																			
 ?>
 

  
<table  border="0" align="center">
  <tr> 
    <th width="76%">Opposit&deg; des 8me</th>
  </tr>
  <tr> 
    <td width="76%">&nbsp;</td>
  </tr>
  <tr> 
    <td> 
      <div class="coin4" > 
        <?php  echo $clubA8001;?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="76%"> 
      <div class="coin4" > 
        <?php  echo $clubA8002;?>
      </div>
    </td>
  </tr>
  <tr> 
    <td> 
      <div class="coin5"  > 
        <?php  echo $clubA8003;?>
      </div>
    </td>
  </tr>
  <tr> 
    <td> 
      <div class="coin5"> 
        <?php  echo $clubA8004;?>
      </div>
    </td>
  </tr>
  <tr> 
    <td>&nbsp;</td>
  </tr>
  <tr> 
    <td> 
      <div class="coin4" > 
        <?php  echo $clubA8005;?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="76%"> 
      <div class="coin4" > 
        <?php  echo $clubA8006;?>
      </div>
    </td>
  </tr>
  <tr> 
    <td> 
      <div class="coin5"  > 
        <?php  echo $clubA8007;?>
      </div>
    </td>
  </tr>
  <tr> 
    <td> 
      <div class="coin5"> 
        <?php  echo $clubA8008;?>
      </div>
    </td>
  </tr>
  <tr> 
    <td>&nbsp;</td>
  </tr>
  <tr> 
    <td> 
      <div class="coin4" > 
        <?php  echo $clubA8009;?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="76%"> 
      <div class="coin4" > 
        <?php  echo $clubA8010;?>
      </div>
    </td>
  </tr>
  <tr> 
    <td> 
      <div class="coin5"  > 
        <?php  echo $clubA8011;?>
      </div>
    </td>
  </tr>
  <tr> 
    <td> 
      <div class="coin5"> 
        <?php  echo $clubA8012;?>
      </div>
    </td>
  </tr>
  <tr> 
    <td>&nbsp;</td>
  </tr>
  <tr> 
    <td> 
      <div class="coin4" > 
        <?php  echo $clubA8013;?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="76%"> 
      <div class="coin4" > 
        <?php  echo $clubA8014;?>
      </div>
    </td>
  </tr>
  <tr> 
    <td> 
      <div class="coin5"  > 
        <?php  echo $clubA8015;?>
      </div>
    </td>
  </tr>
  <tr> 
    <td> 
      <div class="coin5"> 
        <?php  echo $clubA8016;?>
      </div>
    </td>
  </tr>
  <tr> 
    <td>&nbsp;</td>
  </tr>
</table>
  
