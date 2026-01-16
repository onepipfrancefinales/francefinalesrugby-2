<html>
  <head>
<title>modification de donn�es en PHP :: partie2</title>
<meta name=viewport content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
<p> 


   <?php
require ("../../../phasesFinales/fonctionListeEquipes.php");
?>
   <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "Lavelan1969&"); 
mysql_select_db("onepip-france-db1"); 
?>
  
</p>

<form name="insertion" action="transfertBD.php?annee=<?php echo $annee;?>&champ=<?php echo $champ;?>&type=<?php echo $type;?>" method="POST">
  <b><font size="4"> 

  </font></b> <b><font size="4"> 
  <?php
  
 
  $requete = mysql_query( "SELECT id ,	E101, E102, E103, E104, E105, E106, E107, E108, E109, E110, E111, E112, E113, E114, E115, E116,
  										E117, E118, E119, E120, E121, E122, E123, E124, E125, E126, E127, E128, E129, E130, E131, E132,
  									  	E133, E134, E135, E136, E137, E138, E139, E140, E141, E142, E143, E144, E145, E146, E147, E148,
										E149, E150, E151, E152, E153, E154, E155, E156, E157, E158, E159, E160, E161, E162, E163, E164 
						  FROM bdpfClubs 
						  WHERE  division = $champ and annee = $annee") ;

  if( $result = mysql_fetch_object( $requete ) )
  {
  ?>
  <?php
 }
mysql_close(); 
?>
  </font></b> 
  <input type="hidden" name="champ" value="<?php echo($champ) ;?>">
  <table border="0" cellspacing="2" cellpadding="2" width="500">
    <tr align="center"> 
      <td colspan="3"> </td>
    </tr>
    <tr align="center"> 
      <td colspan="3" height="32"><font color="#FF0000"><b><font size="7" face="Arial, Helvetica, sans-serif"> 
        <?php echo $division; ?>
        </font><font size="5" face="Arial, Helvetica, sans-serif"> <font color="#000000"> 
        ( 
        <?php echo $id; ?>
        )</font></font></b></font> <font color="#FF0000"><b><font size="5" face="Arial, Helvetica, sans-serif"><font color="#000000"> 
        <?php echo $annee; ?>
        </font></font></b></font></td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="82">1</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3201; ?>
        </font></td>
      <td width="131"> 
        <div align="center"> 
          <input type="text" name="clubA3201" value="<?php echo($result->E101) ;?>" size="3">
        </div>
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="82">2</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3202; ?>
        </font> </td>
      <td width="131"> 
        <div align="center"> 
          <input type="text" name="clubA3202" value="<?php echo($result->E102) ;?>" size="3">
        </div>
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="82">3</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3203; ?>
        </font> </td>
      <td width="131"> 
        <div align="center"> 
          <input type="text" name="clubA3203" value="<?php echo($result->E103) ;?>" size="3">
        </div>
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="82">4</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3204; ?>
        </font> </td>
      <td width="131"> 
        <div align="center"> 
          <input type="text" name="clubA3204" value="<?php echo($result->E104) ;?>" size="3">
        </div>
      </td>
    </tr>
    <tr align="center"> 
      <td width="82">5</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3205; ?>
        </font> </td>
      <td width="131"> 
        <div align="center"> 
          <input type="text" name="clubA3205" value="<?php echo($result->E105) ;?>" size="3">
        </div>
      </td>
    </tr>
    <tr align="center"> 
      <td width="82">6</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3206; ?>
        </font> </td>
      <td width="131"> 
        <div align="center"> 
          <input type="text" name="clubA3206" value="<?php echo($result->E106) ;?>" size="3">
        </div>
      </td>
    </tr>
    <tr align="center"> 
      <td width="82">7</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3207; ?>
        </font> </td>
      <td width="131"> 
        <div align="center"> 
          <input type="text" name="clubA3207" value="<?php echo($result->E107) ;?>" size="3">
        </div>
      </td>
    </tr>
    <tr align="center"> 
      <td width="82">8</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3208; ?>
        </font> </td>
      <td width="131"> 
        <div align="center"> 
          <input type="text" name="clubA3208" value="<?php echo($result->E108) ;?>" size="3">
        </div>
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="82">9</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3209; ?>
        </font> </td>
      <td width="131"> 
        <input type="text" name="clubA3209" value="<?php echo($result->E109) ;?>" size="3">
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="82">10</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3210; ?>
        </font> </td>
      <td width="131"> 
        <input type="text" name="clubA3210" value="<?php echo($result->E110) ;?>" size="3">
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="82">11</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3211; ?>
        </font> </td>
      <td width="131"> 
        <input type="text" name="clubA3211" value="<?php echo($result->E111) ;?>" size="3">
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="82">12</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3212; ?>
        </font> </td>
      <td width="131"> 
        <input type="text" name="clubA3212" value="<?php echo($result->E112) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="82">13</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3213; ?>
        </font> </td>
      <td width="131"> 
        <input type="text" name="clubA3213" value="<?php echo($result->E113) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="82">14</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3214; ?>
        </font> </td>
      <td width="131"> 
        <input type="text" name="clubA3214" value="<?php echo($result->E114) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="82">15</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3215; ?>
        </font> </td>
      <td width="131"> 
        <input type="text" name="clubA3215" value="<?php echo($result->E115) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="82">16</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3216; ?>
        </font> </td>
      <td width="131"> 
        <input type="text" name="clubA3216" value="<?php echo($result->E116) ;?>" size="3">
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="82">17</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3217; ?>
        </font> </td>
      <td width="131"> 
        <input type="text" name="clubA3217" value="<?php echo($result->E117) ;?>" size="3">
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="82">18</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3218; ?>
        </font> </td>
      <td width="131"> 
        <input type="text" name="clubA3218" value="<?php echo($result->E118) ;?>" size="3">
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="82">19</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3219; ?>
        </font> </td>
      <td width="131"> 
        <input type="text" name="clubA3219" value="<?php echo($result->E119) ;?>" size="3">
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="82">20</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3220; ?>
        </font> </td>
      <td width="131"> 
        <input type="text" name="clubA3220" value="<?php echo($result->E120) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="82">21</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3221; ?>
        </font> </td>
      <td width="131"> 
        <input type="text" name="clubA3221" value="<?php echo($result->E121) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="82">22</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3222; ?>
        </font> </td>
      <td width="131"> 
        <input type="text" name="clubA3222" value="<?php echo($result->E122) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="82">23</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3223; ?>
        </font> </td>
      <td width="131"> 
        <input type="text" name="clubA3223" value="<?php echo($result->E123) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="82">24</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3224; ?>
        </font> </td>
      <td width="131"> 
        <input type="text" name="clubA3224" value="<?php echo($result->E124) ;?>" size="3">
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="82">25</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3225; ?>
        </font> </td>
      <td width="131"> 
        <input type="text" name="clubA3225" value="<?php echo($result->E125) ;?>" size="3">
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="82">26</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3226; ?>
        </font> </td>
      <td width="131"> 
        <input type="text" name="clubA3226" value="<?php echo($result->E126) ;?>" size="3">
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="82">27</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3227; ?>
        </font> </td>
      <td width="131"> 
        <input type="text" name="clubA3227" value="<?php echo($result->E127) ;?>" size="3">
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="82">28</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3228; ?>
        </font> </td>
      <td width="131"> 
        <input type="text" name="clubA3228" value="<?php echo($result->E128) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="82">29</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3229; ?>
        </font> </td>
      <td width="131"> 
        <input type="text" name="clubA3229" value="<?php echo($result->E129) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="82">30</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3230; ?>
        </font> </td>
      <td width="131"> 
        <input type="text" name="clubA3230" value="<?php echo($result->E130) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="82">31</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3231; ?>
        </font> </td>
      <td width="131"> 
        <input type="text" name="clubA3231" value="<?php echo($result->E131) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="82">32</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3232; ?>
        </font> </td>
      <td width="131"> 
        <input type="text" name="clubA3232" value="<?php echo($result->E132) ;?>" size="3">
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="82">33</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3233; ?>
        </font></td>
      <td width="131"> 
        <input type="text" name="clubA3233" value="<?php echo($result->E133) ;?>" size="3">
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="82">34</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3234; ?>
        </font></td>
      <td width="131"> 
        <input type="text" name="clubA3234" value="<?php echo($result->E134) ;?>" size="3">
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="82">35</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3235; ?>
        </font></td>
      <td width="131"> 
        <input type="text" name="clubA3235" value="<?php echo($result->E135) ;?>" size="3">
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="82">36</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3236; ?>
        </font></td>
      <td width="131"> 
        <input type="text" name="clubA3236" value="<?php echo($result->E136) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="82">37</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3237; ?>
        </font></td>
      <td width="131"> 
        <input type="text" name="clubA3237" value="<?php echo($result->E137) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="82">38</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3238; ?>
        </font></td>
      <td width="131"> 
        <input type="text" name="clubA3238" value="<?php echo($result->E138) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="82">39</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3239; ?>
        </font></td>
      <td width="131"> 
        <input type="text" name="clubA3239" value="<?php echo($result->E139) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="82">40</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3240; ?>
        </font></td>
      <td width="131"> 
        <input type="text" name="clubA3240" value="<?php echo($result->E140) ;?>" size="3">
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="82">41</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3241; ?>
        </font></td>
      <td width="131"> 
        <input type="text" name="clubA3241" value="<?php echo($result->E141) ;?>" size="3">
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="82">42</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3242; ?>
        </font></td>
      <td width="131"> 
        <input type="text" name="clubA3242" value="<?php echo($result->E142) ;?>" size="3">
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="82">43</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3243; ?>
        </font></td>
      <td width="131"> 
        <input type="text" name="clubA3243" value="<?php echo($result->E143) ;?>" size="3">
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="82">44</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3244; ?>
        </font></td>
      <td width="131"> 
        <input type="text" name="clubA3244" value="<?php echo($result->E144) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="82">45</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3245; ?>
        </font></td>
      <td width="131"> 
        <input type="text" name="clubA3245" value="<?php echo($result->E145) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="82">46</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3246; ?>
        </font></td>
      <td width="131"> 
        <input type="text" name="clubA3246" value="<?php echo($result->E146) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="82">47</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3247; ?>
        </font></td>
      <td width="131"> 
        <input type="text" name="clubA3247" value="<?php echo($result->E147) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="82">48</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3248; ?>
        </font></td>
      <td width="131"> 
        <input type="text" name="clubA3248" value="<?php echo($result->E148) ;?>" size="3">
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="82">49</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3249; ?>
        </font></td>
      <td width="131"> 
        <input type="text" name="clubA3249" value="<?php echo($result->E149) ;?>" size="3">
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="82">50</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3250; ?>
        </font></td>
      <td width="131"> 
        <input type="text" name="clubA3250" value="<?php echo($result->E150) ;?>" size="3">
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="82">51</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3251; ?>
        </font></td>
      <td width="131"> 
        <input type="text" name="clubA3251" value="<?php echo($result->E151) ;?>" size="3">
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="82">52</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3252; ?>
        </font></td>
      <td width="131"> 
        <input type="text" name="clubA3252" value="<?php echo($result->E152) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="82">53</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3253; ?>
        </font></td>
      <td width="131"> 
        <input type="text" name="clubA3253" value="<?php echo($result->E153) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="82">54</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3254; ?>
        </font></td>
      <td width="131"> 
        <input type="text" name="clubA3254" value="<?php echo($result->E154) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="82">55</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3255; ?>
        </font></td>
      <td width="131"> 
        <input type="text" name="clubA3255" value="<?php echo($result->E155) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="82">56</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3256; ?>
        </font></td>
      <td width="131"> 
        <input type="text" name="clubA3256" value="<?php echo($result->E156) ;?>" size="3">
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="82">57</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3257; ?>
        </font></td>
      <td width="131"> 
        <input type="text" name="clubA3257" value="<?php echo($result->E157) ;?>" size="3">
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="82">58</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3258; ?>
        </font></td>
      <td width="131"> 
        <input type="text" name="clubA3258" value="<?php echo($result->E158) ;?>" size="3">
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="82">59</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3259; ?>
        </font></td>
      <td width="131"> 
        <input type="text" name="clubA3259" value="<?php echo($result->E159) ;?>" size="3">
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="82">60</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3260; ?>
        </font></td>
      <td width="131"> 
        <input type="text" name="clubA3260" value="<?php echo($result->E160) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="82">61</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3261; ?>
        </font></td>
      <td width="131"> 
        <input type="text" name="clubA3261" value="<?php echo($result->E161) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="82">62</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3262; ?>
        </font></td>
      <td width="131"> 
        <input type="text" name="clubA3262" value="<?php echo($result->E162) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="82">63</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3263; ?>
        </font></td>
      <td width="131"> 
        <input type="text" name="clubA3263" value="<?php echo($result->E163) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="82">64</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3264; ?>
        </font></td>
      <td width="131"> 
        <input type="text" name="clubA3264" value="<?php echo($result->E164) ;?>" size="3">
      </td>
    </tr>
    <tr align="center" valign="top" bgcolor="#FF0000"> 
      <td valign="middle" height="36" colspan="3"><a href="http://francefinalesrugby.franceserv.com/admin/Maj_champ_france/superaccueil.php" target="_top"><b></b> 
        </a> 
        <input type="submit" value="modifier" name="submit">
      </td>
    </tr>
    <tr align="center" valign="top" bgcolor="#00FFFF"> 
      <td valign="middle" height="36" colspan="3"><a href="http://francefinalesrugby.franceserv.com/admin/sadmin2.php" target="_top"><b><font face="Arial, Helvetica, sans-serif">Retour 
        &agrave; l'accueil</font></b></a></td>
    </tr>
  </table>
</form>

<p>&nbsp;</p>
