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

 

 
 
 
 
<table width="192" border="0" align="left" height="500" cellspacing="0">
  <tr> 
    <th colspan="2" height="13">Qualifi&eacute;s pour les 16me</th>
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
      <div class="rangTitre" >Qualifi&eacute;s en 16me </div>
    </td>
  </tr>
  <tr> 
    <td colspan="2" height="13">Classement des 3me de poule</td>
  </tr>
  <tr> 
    <td width="38" height="13"> 
      <div class="rang" >17</div>
    </td>
    <td width="262" height="13"> 
      <div class="equipeQ" > 
        <?php	echo $club17; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="38"> 
      <div class="rang" >18</div>
    </td>
    <td width="262"> 
      <div class="equipeQ" > 
        <?php	echo $club18; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="38" height="16"> 
      <div class="rang" >19</div>
    </td>
    <td width="262" height="16"> 
      <div class="equipeQ" > 
        <?php	echo $club19; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="38" height="9"> 
      <div class="rang" >20</div>
    </td>
    <td width="262" height="9"> 
      <div class="equipeQ" > 
        <?php	echo $club20; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="38"> 
      <div class="rang" >21</div>
    </td>
    <td width="262"> 
      <div class="equipeQ" > 
        <?php	echo $club21; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="38" height="24"> 
      <div class="rang" >22</div>
    </td>
    <td width="262" height="24"> 
      <div class="equipeQ" > 
        <?php	echo $club22; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="38" height="11"> 
      <div class="rang" >23</div>
    </td>
    <td width="262" height="11"> 
      <div class="equipeQ" > 
        <?php	echo $club23; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="38"> 
      <div class="rang" >24</div>
    </td>
    <td width="262"> 
      <div class="equipeQ" > 
        <?php	echo $club24; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td colspan="2" height="23">Classement des 4me de poule</td>
  </tr>
  <tr> 
    <td width="38" height="23"> 
      <div class="rang" >25</div>
    </td>
    <td width="262" height="23"> 
      <div class="equipeQ" > 
        <?php	echo $club25; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="38" height="22"> 
      <div class="rang" >26</div>
    </td>
    <td width="262" height="22"> 
      <div class="equipeQ" > 
        <?php	echo $club26; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="38" height="25"> 
      <div class="rang" >27</div>
    </td>
    <td width="262" height="25"> 
      <div class="equipeQ" > 
        <?php	echo $club27; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="38" height="22"> 
      <div class="rang" >28</div>
    </td>
    <td width="262" height="22"> 
      <div class="equipeQ" > 
        <?php	echo $club28; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="38"> 
      <div class="rang" >29</div>
    </td>
    <td width="262"> 
      <div class="equipeQ" > 
        <?php	echo $club29; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="38"> 
      <div class="rang" >30</div>
    </td>
    <td width="262"> 
      <div class="equipeQ" > 
        <?php	echo $club30; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="38" height="14"> 
      <div class="rang" >31</div>
    </td>
    <td width="262" height="14"> 
      <div class="equipeQ" > 
        <?php	echo $club31; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="38" height="20"> 
      <div class="rang" >32</div>
    </td>
    <td width="262" height="20"> 
      <div class="equipeQ" > 
        <?php	echo $club32; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td colspan="2" height="20">Classement des 5me de poule</td>
  </tr>
  <tr> 
    <td width="38" height="20"> 
      <div class="rang" >33</div>
    </td>
    <td width="262" height="20"> 
      <div class="equipeQ" > 
        <?php	echo $club33; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="38" height="20"> 
      <div class="rang" >34</div>
    </td>
    <td width="262" height="20"> 
      <div class="equipeQ" > 
        <?php	echo $club34; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="38" height="20"> 
      <div class="rang" >35</div>
    </td>
    <td width="262" height="20"> 
      <div class="equipeQ" > 
        <?php	echo $club35; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="38" height="20"> 
      <div class="rang" >36</div>
    </td>
    <td width="262" height="20"> 
      <div class="equipeQ" > 
        <?php	echo $club36; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="38" height="20"> 
      <div class="rang" >37</div>
    </td>
    <td width="262" height="20"> 
      <div class="equipeQ" > 
        <?php	echo $club37; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="38" height="20"> 
      <div class="rang" >38</div>
    </td>
    <td width="262" height="20"> 
      <div class="equipeQ" > 
        <?php	echo $club38; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="38" height="20"> 
      <div class="rang" >39</div>
    </td>
    <td width="262" height="20"> 
      <div class="equipeQ" > 
        <?php	echo $club39; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="38" height="20"> 
      <div class="rang" >40</div>
    </td>
    <td width="262" height="20"> 
      <div class="equipeQ" > 
        <?php	echo $club40; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td colspan="2" height="20">Classement des 6me de poule</td>
  </tr>
  <tr> 
    <td width="38" height="20"> 
      <div class="rang" >41</div>
    </td>
    <td width="262" height="20"> 
      <div class="equipeQ" > 
        <?php	echo $club41; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="38" height="20"> 
      <div class="rang" >42</div>
    </td>
    <td width="262" height="20"> 
      <div class="equipeQ" > 
        <?php	echo $club42; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="38" height="20"> 
      <div class="rang" >43</div>
    </td>
    <td width="262" height="20"> 
      <div class="equipeQ" > 
        <?php	echo $club43; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="38" height="20"> 
      <div class="rang" >44</div>
    </td>
    <td width="262" height="20"> 
      <div class="equipeQ" > 
        <?php	echo $club44; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="38" height="20"> 
      <div class="rang" >45</div>
    </td>
    <td width="262" height="20"> 
      <div class="equipeQ" > 
        <?php	echo $club45; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="38" height="20"> 
      <div class="rang" >46</div>
    </td>
    <td width="262" height="20"> 
      <div class="equipeQ" > 
        <?php	echo $club46; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="38" height="20"> 
      <div class="rang" >47</div>
    </td>
    <td width="262" height="20"> 
      <div class="equipeQ" > 
        <?php	echo $club47; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="38" height="20"> 
      <div class="rang" >48</div>
    </td>
    <td width="262" height="20"> 
      <div class="equipeQ" > 
        <?php	echo $club48; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="38" height="17">&nbsp;</td>
    <td width="262" height="17">&nbsp;</td>
  </tr>
</table>
