<html>
  <head>
<title>modification de donn�es en PHP :: partie2</title>
<meta name=viewport content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
<p> 
  <?php $id=$_GET['id']; ?>
  <?php //$niv=$_GET['niv']; ?>
  <?php // $id=$_POST['id']; ?>
  <?php //echo $id; ?>
  <?php // echo $niv; ?>
 
<?php $annee=$_GET['annee']; ?>
<?php $annee=$annee; ?>
<?php $annee2=($annee.''."_2");
echo $annee.' '.$annee_2  ?> 
 
 
 
  <?php require ("../../phases_finales/fonctions_phases_finales.php");?>
</p>

<form name="insertion" action="clubs32me2.php?annee=<?php echo $annee; ?>" method="POST">
  <b><font size="4"> 
  <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "Lavelan1969&"); 
mysql_select_db("onepip-france-db1"); 
?>
  </font></b> <b><font size="4"> 
  <?php
  
 
  $requete = mysql_query( "SELECT id ,	E01, E02, E03, E04, E05, E06, E07, E08, E09, E10, E11, E12, E13, E14, E15, E16,
  										E17, E18, E19, E20, E21, E22, E23, E24, E25, E26, E27, E28, E29, E30, E31, E32,
  									  	E33, E34, E35, E36, E37, E38, E39, E40, E41, E42, E43, E44, E45, E46, E47, E48,
										E49, E50, E51, E52, E53, E54, E55, E56, E57, E58, E59, E60, E61, E62, E63, E64 
						  FROM bdpf$annee  
						  WHERE  id = ".$id ) ;

  if( $result = mysql_fetch_object( $requete ) )
  {
  ?>
  <?php
 }
mysql_close(); 
?>
  </font></b> 
  <input type="hidden" name="id" value="<?php echo($id) ;?>">
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
          <input type="text" name="E01" value="<?php echo($result->E01) ;?>" size="3">
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
          <input type="text" name="E02" value="<?php echo($result->E02) ;?>" size="3">
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
          <input type="text" name="E03" value="<?php echo($result->E03) ;?>" size="3">
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
          <input type="text" name="E04" value="<?php echo($result->E04) ;?>" size="3">
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
          <input type="text" name="E05" value="<?php echo($result->E05) ;?>" size="3">
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
          <input type="text" name="E06" value="<?php echo($result->E06) ;?>" size="3">
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
          <input type="text" name="E07" value="<?php echo($result->E07) ;?>" size="3">
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
          <input type="text" name="E08" value="<?php echo($result->E08) ;?>" size="3">
        </div>
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="82">9</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3209; ?>
        </font> </td>
      <td width="131"> 
        <input type="text" name="E09" value="<?php echo($result->E09) ;?>" size="3">
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="82">10</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3210; ?>
        </font> </td>
      <td width="131"> 
        <input type="text" name="E10" value="<?php echo($result->E10) ;?>" size="3">
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="82">11</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3211; ?>
        </font> </td>
      <td width="131"> 
        <input type="text" name="E11" value="<?php echo($result->E11) ;?>" size="3">
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="82">12</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3212; ?>
        </font> </td>
      <td width="131"> 
        <input type="text" name="E12" value="<?php echo($result->E12) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="82">13</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3213; ?>
        </font> </td>
      <td width="131"> 
        <input type="text" name="E13" value="<?php echo($result->E13) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="82">14</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3214; ?>
        </font> </td>
      <td width="131"> 
        <input type="text" name="E14" value="<?php echo($result->E14) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="82">15</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3215; ?>
        </font> </td>
      <td width="131"> 
        <input type="text" name="E15" value="<?php echo($result->E15) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="82">16</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3216; ?>
        </font> </td>
      <td width="131"> 
        <input type="text" name="E16" value="<?php echo($result->E16) ;?>" size="3">
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="82">17</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3217; ?>
        </font> </td>
      <td width="131"> 
        <input type="text" name="E17" value="<?php echo($result->E17) ;?>" size="3">
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="82">18</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3218; ?>
        </font> </td>
      <td width="131"> 
        <input type="text" name="E18" value="<?php echo($result->E18) ;?>" size="3">
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="82">19</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3219; ?>
        </font> </td>
      <td width="131"> 
        <input type="text" name="E19" value="<?php echo($result->E19) ;?>" size="3">
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="82">20</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3220; ?>
        </font> </td>
      <td width="131"> 
        <input type="text" name="E20" value="<?php echo($result->E20) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="82">21</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3221; ?>
        </font> </td>
      <td width="131"> 
        <input type="text" name="E21" value="<?php echo($result->E21) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="82">22</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3222; ?>
        </font> </td>
      <td width="131"> 
        <input type="text" name="E22" value="<?php echo($result->E22) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="82">23</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3223; ?>
        </font> </td>
      <td width="131"> 
        <input type="text" name="E23" value="<?php echo($result->E23) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="82">24</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3224; ?>
        </font> </td>
      <td width="131"> 
        <input type="text" name="E24" value="<?php echo($result->E24) ;?>" size="3">
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="82">25</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3225; ?>
        </font> </td>
      <td width="131"> 
        <input type="text" name="E25" value="<?php echo($result->E25) ;?>" size="3">
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="82">26</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3226; ?>
        </font> </td>
      <td width="131"> 
        <input type="text" name="E26" value="<?php echo($result->E26) ;?>" size="3">
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="82">27</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3227; ?>
        </font> </td>
      <td width="131"> 
        <input type="text" name="E27" value="<?php echo($result->E27) ;?>" size="3">
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="82">28</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3228; ?>
        </font> </td>
      <td width="131"> 
        <input type="text" name="E28" value="<?php echo($result->E28) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="82">29</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3229; ?>
        </font> </td>
      <td width="131"> 
        <input type="text" name="E29" value="<?php echo($result->E29) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="82">30</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3230; ?>
        </font> </td>
      <td width="131"> 
        <input type="text" name="E30" value="<?php echo($result->E30) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="82">31</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3231; ?>
        </font> </td>
      <td width="131"> 
        <input type="text" name="E31" value="<?php echo($result->E31) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="82">32</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3232; ?>
        </font> </td>
      <td width="131"> 
        <input type="text" name="E32" value="<?php echo($result->E32) ;?>" size="3">
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="82">33</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3233; ?>
        </font></td>
      <td width="131"> 
        <input type="text" name="E33" value="<?php echo($result->E33) ;?>" size="3">
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="82">34</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3234; ?>
        </font></td>
      <td width="131"> 
        <input type="text" name="E34" value="<?php echo($result->E34) ;?>" size="3">
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="82">35</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3235; ?>
        </font></td>
      <td width="131"> 
        <input type="text" name="E35" value="<?php echo($result->E35) ;?>" size="3">
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="82">36</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3236; ?>
        </font></td>
      <td width="131"> 
        <input type="text" name="E36" value="<?php echo($result->E36) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="82">37</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3237; ?>
        </font></td>
      <td width="131"> 
        <input type="text" name="E37" value="<?php echo($result->E37) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="82">38</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3238; ?>
        </font></td>
      <td width="131"> 
        <input type="text" name="E38" value="<?php echo($result->E38) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="82">39</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3239; ?>
        </font></td>
      <td width="131"> 
        <input type="text" name="E39" value="<?php echo($result->E39) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="82">40</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3240; ?>
        </font></td>
      <td width="131"> 
        <input type="text" name="E40" value="<?php echo($result->E40) ;?>" size="3">
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="82">41</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3241; ?>
        </font></td>
      <td width="131"> 
        <input type="text" name="E41" value="<?php echo($result->E41) ;?>" size="3">
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="82">42</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3242; ?>
        </font></td>
      <td width="131"> 
        <input type="text" name="E42" value="<?php echo($result->E42) ;?>" size="3">
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="82">43</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3243; ?>
        </font></td>
      <td width="131"> 
        <input type="text" name="E43" value="<?php echo($result->E43) ;?>" size="3">
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="82">44</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3244; ?>
        </font></td>
      <td width="131"> 
        <input type="text" name="E44" value="<?php echo($result->E44) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="82">45</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3245; ?>
        </font></td>
      <td width="131"> 
        <input type="text" name="E45" value="<?php echo($result->E45) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="82">46</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3246; ?>
        </font></td>
      <td width="131"> 
        <input type="text" name="E46" value="<?php echo($result->E46) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="82">47</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3247; ?>
        </font></td>
      <td width="131"> 
        <input type="text" name="E47" value="<?php echo($result->E47) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="82">48</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3248; ?>
        </font></td>
      <td width="131"> 
        <input type="text" name="E48" value="<?php echo($result->E48) ;?>" size="3">
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="82">49</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3249; ?>
        </font></td>
      <td width="131"> 
        <input type="text" name="E49" value="<?php echo($result->E49) ;?>" size="3">
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="82">50</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3250; ?>
        </font></td>
      <td width="131"> 
        <input type="text" name="E50" value="<?php echo($result->E50) ;?>" size="3">
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="82">51</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3251; ?>
        </font></td>
      <td width="131"> 
        <input type="text" name="E51" value="<?php echo($result->E51) ;?>" size="3">
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="82">52</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3252; ?>
        </font></td>
      <td width="131"> 
        <input type="text" name="E52" value="<?php echo($result->E52) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="82">53</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3253; ?>
        </font></td>
      <td width="131"> 
        <input type="text" name="E53" value="<?php echo($result->E53) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="82">54</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3254; ?>
        </font></td>
      <td width="131"> 
        <input type="text" name="E54" value="<?php echo($result->E54) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="82">55</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3255; ?>
        </font></td>
      <td width="131"> 
        <input type="text" name="E55" value="<?php echo($result->E55) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="82">56</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3256; ?>
        </font></td>
      <td width="131"> 
        <input type="text" name="E56" value="<?php echo($result->E56) ;?>" size="3">
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="82">57</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3257; ?>
        </font></td>
      <td width="131"> 
        <input type="text" name="E57" value="<?php echo($result->E57) ;?>" size="3">
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="82">58</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3258; ?>
        </font></td>
      <td width="131"> 
        <input type="text" name="E58" value="<?php echo($result->E58) ;?>" size="3">
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="82">59</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3259; ?>
        </font></td>
      <td width="131"> 
        <input type="text" name="E59" value="<?php echo($result->E59) ;?>" size="3">
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="82">60</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3260; ?>
        </font></td>
      <td width="131"> 
        <input type="text" name="E60" value="<?php echo($result->E60) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="82">61</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3261; ?>
        </font></td>
      <td width="131"> 
        <input type="text" name="E61" value="<?php echo($result->E61) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="82">62</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3262; ?>
        </font></td>
      <td width="131"> 
        <input type="text" name="E62" value="<?php echo($result->E62) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="82">63</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3263; ?>
        </font></td>
      <td width="131"> 
        <input type="text" name="E63" value="<?php echo($result->E63) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="82">64</td>
      <td width="267"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3264; ?>
        </font></td>
      <td width="131"> 
        <input type="text" name="E64" value="<?php echo($result->E64) ;?>" size="3">
      </td>
    </tr>
    <tr align="center" valign="top" bgcolor="#FF0000"> 
      <td valign="middle" height="36"><a href="http://francefinalesrugby.franceserv.com/admin/Maj_champ_france/superaccueil.php" target="_top"><b></b> 
        </a></td>
      <td colspan="2" height="36"> 
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
