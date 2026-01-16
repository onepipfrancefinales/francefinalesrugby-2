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
//require ("fonction_Qualification.php");
//classementParPoints8poules($comite, $division);

?> 

 

 
 
 
 
<table  border="0" align="left" height="500" cellspacing="0">
  <tr> 
    <th colspan="2" height="13">Qualifi&eacute;s pour tableau 3</th>
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
      <div class="rangTitre" ></div>
    </td>
  </tr>
  <tr> 
    <td colspan="2" height="13">Classement des 5me de poule</td>
  </tr>
  <tr> 
    <td width="38" height="14"> 
      <div class="rang" >17</div>
    </td>
    <td width="262" height="14"> 
      <div class="equipeQ" > 
        <?php	echo $club17; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="38" height="24"> 
      <div class="rang" >18</div>
    </td>
    <td width="262" height="24"> 
      <div class="equipeQ" > 
        <?php	echo $club18; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="38" height="11"> 
      <div class="rang" >19</div>
    </td>
    <td width="262" height="11"> 
      <div class="equipeQ" > 
        <?php	echo $club19; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="38" height="2"> 
      <div class="rang" >20</div>
    </td>
    <td width="262" height="2"> 
      <div class="equipeQ" > 
        <?php	echo $club20; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td colspan="2" height="23">Classement des 6me de poule</td>
  </tr>
  <tr> 
    <td width="38" height="22"> 
      <div class="rang" >21</div>
    </td>
    <td width="262" height="22"> 
      <div class="equipeQ" > 
        <?php	echo $club21; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="38" height="25"> 
      <div class="rang" >22</div>
    </td>
    <td width="262" height="25"> 
      <div class="equipeQ" > 
        <?php	echo $club22; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="38" height="22"> 
      <div class="rang" >23</div>
    </td>
    <td width="262" height="22"> 
      <div class="equipeQ" > 
        <?php	echo $club23; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="38" height="36"> 
      <div class="rang" >24</div>
    </td>
    <td width="262" height="36"> 
      <div class="equipeQ" > 
        <?php	echo $club24; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td colspan="2" height="14">Classement des 7me de poule</td>
  </tr>
  <tr> 
    <td width="38" height="14"> 
      <div class="rang" >25</div>
    </td>
    <td width="262" height="14"> 
      <div class="equipeQ" > 
        <?php	echo $club25; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="38" height="20"> 
      <div class="rang" >26</div>
    </td>
    <td width="262" height="20"> 
      <div class="equipeQ" > 
        <?php	echo $club26; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="38" height="20"> 
      <div class="rang" >27</div>
    </td>
    <td width="262" height="20"> 
      <div class="equipeQ" > 
        <?php	echo $club27; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="38" height="20"> 
      <div class="rang" >28</div>
    </td>
    <td width="262" height="20"> 
      <div class="equipeQ" > 
        <?php	echo $club28; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="38" height="20">&nbsp;</td>
    <td width="262" height="20">&nbsp;</td>
  </tr>
</table>
