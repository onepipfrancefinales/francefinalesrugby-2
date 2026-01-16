<?php 
if (isset($_GET['id'])) $class=$_GET['id'];else $class="pas id connu";
if (isset($bdcomiteClub)) $bdcomiteClub=$_GET['bdcomiteClub'];else $bdcomiteClub="pas id connu";


$annee=$_GET['annee'];
$comite=$_GET['comite'];


//$bdcomite=("php".''.$comite);
//$bdcomiteClub= ("php".''.$comite.''."_clubs");   

$bdcomiteAnnee =("php".''.$comite.''."_pfterr"); 
$bdcomiteClub = $comite.''."_clubs";																		
require ("../../phasesfinalesterr2019/fonctionspfterrESDL2019.php");
seizieme2019 ($bdcomiteClub, $division, $annee);
 ?> 
<table align="center"
>
  <tr>
    <th>Opposit&deg; des 16me</th>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
<div align="center"></div>
<table  border="0" align="center">
  <tr> 
    <td> 
      <div class="coin4" align="center" > 
        <?php echo $clubA1601;?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="76%"> 
      <div class="coin4" align="center" > 
        <?php echo $clubA1602;?>
      </div>
    </td>
  </tr>
  <tr> 
    <td> 
      <div class="coin5" align="center"  > 
        <?php echo $clubA1603;?>
      </div>
    </td>
  </tr>
  <tr> 
    <td> 
      <div class="coin5" align="center"> 
        <?php echo $clubA1604;?>
      </div>
    </td>
  </tr>
</table>
  
<table border="0" align="center">
  <tr> 
    <td width="76%">&nbsp;</td>
  </tr>
  <tr> 
    <td> 
      <div class="coin4" align="center" > 
        <?php echo $clubA1605;?>
      </div>
    </td>
  </tr>
  <tr> 
    <td> 
      <div class="coin4" align="center" > 
        <?php echo $clubA1606;?>
      </div>
    </td>
  </tr>
  <tr> 
    <td> 
      <div class="coin5" align="center"  > 
        <?php echo $clubA1607;?>
      </div>
    </td>
  </tr>
  <tr> 
    <td> 
      <div class="coin5" align="center"> 
        <?php echo $clubA1608;?>
      </div>
    </td>
  </tr>
</table>
  
<table  border="0" align="center">
  <tr> 
    <td width="76%">&nbsp;</td>
  </tr>
  <tr> 
    <td> 
      <div class="coin4" align="center"> 
        <?php echo $clubA1609;?>
      </div>
    </td>
  </tr>
  <tr> 
    <td> 
      <div class="coin4" align="center" > 
        <?php echo $clubA1610;?>
      </div>
    </td>
  </tr>
  <tr> 
    <td> 
      <div class="coin5" align="center"> 
        <?php echo $clubA1611;?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="76%"> 
      <div class="coin5" align="center" > 
        <?php echo $clubA1612;?>
      </div>
    </td>
  </tr>
</table>
  <table  border="0" align="center">
    <tr> 
      <td width="76%">&nbsp;</td>
    </tr>
    <tr> 
      <td> 
        
      <div class="coin4" > 
        <?php echo $clubA1613;?>
      </div>
      </td>
    </tr>
    <tr> 
      <td> 
        
      <div class="coin4" > 
        <?php echo $clubA1614;?>
      </div>
      </td>
    </tr>
    <tr> 
      <td> 
        
      <div class="coin5"  > 
        <?php echo $clubA1615;?>
      </div>
      </td>
    </tr>
    <tr> 
      <td> 
        
      <div class="coin5" > 
        <?php echo $clubA1616;?>
      </div>
      </td>
    </tr>
  </table>
  <p>&nbsp;</p>
    <table  border="0" align="center">
      <tr> 
        <td width="76%">&nbsp;</td>
      </tr>
      <tr> 
        <td> 
          
      <div class="coin4" > 
        <?php echo $clubA1617;?>
      </div>
        </td>
      </tr>
      <tr> 
        <td width="76%"> 
          
      <div class="coin4" > 
        <?php echo $clubA1618;?>
      </div>
        </td>
      </tr>
      <tr> 
        <td> 
          
      <div class="coin5"  > 
        <?php echo $clubA1619;?>
      </div>
        </td>
      </tr>
      <tr> 
        <td> 
          
      <div class="coin5"> 
        <?php echo $clubA1620;?>
      </div>
        </td>
      </tr>
    </table>
    <table  border="0" align="center">
      <tr> 
        <td width="76%">&nbsp;</td>
      </tr>
      <tr> 
        <td> 
          
      <div class="coin4" > 
        <?php echo $clubA1621;?>
      </div>
        </td>
      </tr>
      <tr> 
        <td> 
          
      <div class="coin4" > 
        <?php echo $clubA1622;?>
      </div>
        </td>
      </tr>
      <tr> 
        <td> 
          
      <div class="coin5"  > 
        <?php echo $clubA1623;?>
      </div>
        </td>
      </tr>
      <tr> 
        <td> 
          
      <div class="coin5"> 
        <?php echo $clubA1624;?>
      </div>
        </td>
      </tr>
    </table>
    <table  border="0" align="center">
      <tr> 
        <td width="76%">&nbsp;</td>
      </tr>
      <tr> 
        <td> 
          
      <div class="coin4" > 
        <?php echo $clubA1625;?>
      </div>
        </td>
      </tr>
      <tr> 
        <td> 
          
      <div class="coin4" > 
        <?php echo $clubA1626;?>
      </div>
        </td>
      </tr>
      <tr> 
        <td> 
          
      <div class="coin5"> 
        <?php echo $clubA1627;?>
      </div>
        </td>
      </tr>
      <tr> 
        <td width="76%"> 
          
      <div class="coin5"> 
        <?php echo $clubA1628;?>
      </div>
        </td>
      </tr>
    </table>
    <table  border="0" align="center">
      <tr> 
        <td width="76%">&nbsp;</td>
      </tr>
      <tr> 
        <td> 
          
      <div class="coin4" > 
        <?php echo $clubA1629;?>
      </div>
        </td>
      </tr>
      <tr> 
        <td> 
          
      <div class="coin4" > 
        <?php echo $clubA1630;?>
      </div>
        </td>
      </tr>
      <tr> 
        
    <td height="11"> 
      <?php echo $clubA1631;?>
    </td>
      </tr>
      <tr> 
        <td> 
          
      <div class="coin5" > 
        <?php echo $clubA1632;?>
      </div>
        </td>
      </tr>
    </table>
 
