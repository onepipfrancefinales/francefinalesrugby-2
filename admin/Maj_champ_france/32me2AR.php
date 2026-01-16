<html>
  <head>
<title>modification de donn�es en PHP :: partie2</title>
<meta name=viewport content="width=device-width, initial-scale=1">
</head>
<body>
<?php $niv=$_GET['niv']; ?>
<?php// $id=$_POST['id']; ?>

<?php $annee=$_GET['annee']; ?>
<?php $annee=$annee; ?>



<?php $annee2 ="bdpf".''.$annee.''."_2";  ?> 
<?php  $id=160; ?>
<?php  $id2=130; ?>
<?php echo $id; ?>
<?php echo $niv; ?>
<?php echo $annee; ?>
<?php require ("../../phases_finales/fonctions_phases_finalesAR.php");?>
>
<form name="insertion" action="32me3AR.php" method="POST">
  <b><font size="4"> 
  <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "Lavelan1969&"); 
mysql_select_db("onepip-france-db1"); 
?>
  </font></b> <b><font size="4"> 
   <?php
  
 
  $requete = mysql_query( "SELECT id ,A3201, A3202, A3203, A3204 ,A3205, A3206, A3207, A3208, A3209, A3210, A3211, A3212, A3213, A3214, A3215, A3216,
  	                                  A3217, A3218, A3219, A3220 ,A3221, A3222, A3223, A3224, A3225, A3226, A3227, A3228, A3229, A3230, A3231, A3232, 
									  A3233, A3234, A3235, A3236 ,A3237, A3238, A3239, A3240, A3241, A3242, A3243, A3244, A3245, A3246, A3247, A3248, 
									  A3249, A3250, A3251, A3252 ,A3253, A3254, A3255, A3256, A3257, A3258, A3259, A3260, A3261, A3262, A3263, A3264 
									  FROM bdpf2018 WHERE  id = ".$id ) ;
 

  if( $result = mysql_fetch_object( $requete ) )
  {
  }
  ?>
  
  
  
  
  
  
  <?php
  
 
  $requete2 = mysql_query( "SELECT id ,A3201, A3202, A3203, A3204 ,A3205, A3206, A3207, A3208, A3209, A3210, A3211, A3212, A3213, A3214, A3215, A3216,
  	                                   A3217, A3218, A3219, A3220 ,A3221, A3222, A3223, A3224, A3225, A3226, A3227, A3228, A3229, A3230, A3231, A3232, 
									   A3233, A3234, A3235, A3236 ,A3237, A3238, A3239, A3240, A3241, A3242, A3243, A3244, A3245, A3246, A3247, A3248, 
									   A3249, A3250, A3251, A3252 ,A3253, A3254, A3255, A3256, A3257, A3258, A3259, A3260, A3261, A3262, A3263, A3264 
									  FROM bdpf2018 WHERE  id = ".$id2 ) ;
 

  if( $result2 = mysql_fetch_object( $requete2 ) )
  {
  ?>
  <?php
 }
mysql_close(); // D�connexion de MySQL
?>
  </font></b> 
   <input type="hidden" name="id" value="<?php echo($id) ;?>">
  <input type="hidden" name2="id2" value2="<?php echo($id2) ;?>">
  <table border="0" cellspacing="0" cellpadding="10" width="100%">
    <tr align="center"> 
      <td colspan="4"> </td>
    </tr>
    <tr align="center"> 
      <td colspan="4" height="32" bgcolor="#FF0000"><b><font size="4" face="Arial, Helvetica, sans-serif">32me 
        de Finale 
        <?php echo $division; ?>
        ( 
        <?php echo $id; ?>
        ) </font></b> </td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif">1</font></td>
      <td width="200" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3201; ?>
        </font> </td>
      <td width="25" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="192" bgcolor="#CCCCCC"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3202; ?>
        </font></td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="200" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A3201" value="<?php echo($result->A3201) ;?>" size="3">
        - Aller( 
        <?php	echo $A3201; ?>
        ) </font></td>
      <td width="25" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="192" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A3202" value="<?php echo($result->A3202) ;?>" size="3">
        - Aller( 
        <?php	echo $A3202; ?>
        )</font></td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="200" bgcolor="#CCCCCC"> <font face="Arial, Helvetica, sans-serif"> 
        Pts 
        <input type="text" name="Apts3201" value="<?php echo($result2->A3201) ;?>" size="2">
        <br>
        </font></td>
      <td width="25" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="192" bgcolor="#CCCCCC"> <font face="Arial, Helvetica, sans-serif"> 
        Pts 
        <input type="text" name="Apts3202" value="<?php echo($result2->A3202) ;?>" size="2">
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="24"><font face="Arial, Helvetica, sans-serif">2</font></td>
      <td width="200"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3203; ?>
        </font></td>
      <td width="25"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="192"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3204; ?>
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="200"><font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A3203" value="<?php echo($result->A3203) ;?>" size="3">
        - Aller( 
        <?php	echo $A3203; ?>
        ) </font></td>
      <td width="25">&nbsp;</td>
      <td width="192"><font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A3204" value="<?php echo($result->A3204) ;?>" size="3">
        - Aller( 
        <?php	echo $A3204; ?>
        )</font></td>
    </tr>
    <tr align="center"> 
      <td width="24"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="200"><font face="Arial, Helvetica, sans-serif">Pts 
        <input type="text" name="Apts3203" value="<?php echo($result2->A3203) ;?>" size="2">
        </font></td>
      <td width="25"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="192"> <font face="Arial, Helvetica, sans-serif"> Pts 
        <input type="text" name="Apts3204" value="<?php echo($result2->A3204) ;?>" size="2">
        </font></td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif">3</font></td>
      <td width="200" bgcolor="#CCCCCC"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3205; ?>
        </font></td>
      <td width="25" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="192" bgcolor="#CCCCCC"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3206; ?>
        </font></td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="200" height="51"><font face="Arial, Helvetica, sans-serif">
        <input type="text" name="A3205" value="<?php echo($result->A3205) ;?>" size="3">
        - Aller( 
        <?php	echo $A3205; ?>
        ) </font></td>
      <td width="25" height="51">&nbsp;</td>
      <td width="192" height="51"><font face="Arial, Helvetica, sans-serif">
        <input type="text" name="A3206" value="<?php echo($result->A3206) ;?>" size="3">
        - Aller( 
        <?php	echo $A3206; ?>
        ) </font></td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="200" height="51"> <font face="Arial, Helvetica, sans-serif"> 
        Pts 
        <input type="text" name="Apts3205" value="<?php echo($result2->A3205) ;?>" size="2">
        </font></td>
      <td width="25" height="51"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="192" height="51"> <font face="Arial, Helvetica, sans-serif"> 
        Pts 
        <input type="text" name="Apts3206" value="<?php echo($result2->A3206) ;?>" size="2">
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="24"><font face="Arial, Helvetica, sans-serif">4</font></td>
      <td width="200"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3207; ?>
        </font></td>
      <td width="25"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="192"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3208; ?>
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="200"><font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A3207" value="<?php echo($result->A3207) ;?>" size="3">
        - Aller( 
        <?php	echo $A3207; ?>
        ) </font></td>
      <td width="25">&nbsp;</td>
      <td width="192"><font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A3208" value="<?php echo($result->A3208) ;?>" size="3">
        - Aller( 
        <?php	echo $A3208; ?>
        ) </font></td>
    </tr>
    <tr align="center"> 
      <td width="24"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="200"> <font face="Arial, Helvetica, sans-serif"> Pts 
        <input type="text" name="Apts3207" value="<?php echo($result2->A3207) ;?>" size="2">
        </font></td>
      <td width="25"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="192"> <font face="Arial, Helvetica, sans-serif"> Pts 
        <input type="text" name="Apts3208" value="<?php echo($result2->A3208) ;?>" size="2">
        </font></td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif">5</font></td>
      <td width="200" bgcolor="#CCCCCC"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3209; ?>
        </font></td>
      <td width="25" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="192" bgcolor="#CCCCCC"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3210; ?>
        </font></td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="200"><font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A3209" value="<?php echo($result->A3209) ;?>" size="3">
        - Aller( 
        <?php	echo $A3209; ?>
        )</font></td>
      <td width="25">&nbsp;</td>
      <td width="192"><font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A3210" value="<?php echo($result->A3210) ;?>" size="3">
        - Aller( 
        <?php	echo $A3210; ?>
        ) </font></td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="200"> <font face="Arial, Helvetica, sans-serif"> <br>
        Pts 
        <input type="text" name="Apts3209" value="<?php echo($result2->A3209) ;?>" size="2">
        </font></td>
      <td width="25"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="192"> <font face="Arial, Helvetica, sans-serif"> <br>
        Pts 
        <input type="text" name="Apts3210" value="<?php echo($result2->A3210) ;?>" size="2">
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="24"><font face="Arial, Helvetica, sans-serif">6</font></td>
      <td width="200"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3211; ?>
        </font></td>
      <td width="25"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="192"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3212; ?>
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="24"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="200"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A3211" value="<?php echo($result->A3211) ;?>" size="3">
        - Aller( 
        <?php	echo $A3211; ?>
        ) </font></td>
      <td width="25"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="192"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A3212" value="<?php echo($result->A3212) ;?>" size="3">
        - Aller( 
        <?php	echo $A3212; ?>
        ) </font></td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="200"><font face="Arial, Helvetica, sans-serif">Pts 
        <input type="text" name="Apts3211" value="<?php echo($result2->A3211) ;?>" size="2">
        </font></td>
      <td width="25">&nbsp;</td>
      <td width="192"><font face="Arial, Helvetica, sans-serif">Pts 
        <input type="text" name="Apts3212" value="<?php echo($result2->A3212) ;?>" size="2">
        </font></td>
    </tr>
    <tr align="center"> 
      <td rowspan="2" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif">7</font></td>
      <td width="200" bgcolor="#CCCCCC"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3213; ?>
        </font></td>
      <td width="25" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="192" bgcolor="#CCCCCC"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3214; ?>
        </font></td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="200"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A3213" value="<?php echo($result->A3213) ;?>" size="3">
        - Aller( 
        <?php	echo $A3213; ?>
        ) </font></td>
      <td width="25"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="192"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A3214" value="<?php echo($result->A3214) ;?>" size="3">
        - Aller( 
        <?php	echo $A3214; ?>
        ) </font></td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="200" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif">Pts 
        <input type="text" name="Apts3213" value="<?php echo($result2->A3213) ;?>" size="2">
        </font></td>
      <td width="25" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="192" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif">Pts 
        <input type="text" name="Apts3214" value="<?php echo($result2->A3214) ;?>" size="2">
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="24"><font face="Arial, Helvetica, sans-serif">8</font></td>
      <td width="200"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3215; ?>
        </font></td>
      <td width="25"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="192"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3216; ?>
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="24"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="200"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A3215" value="<?php echo($result->A3215) ;?>" size="3">
        - Aller( 
        <?php	echo $A3215; ?>
        ) </font></td>
      <td width="25"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="192"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A3216" value="<?php echo($result->A3216) ;?>" size="3">
        - Aller( 
        <?php	echo $A3216; ?>
        ) </font></td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="200"><font face="Arial, Helvetica, sans-serif">Pts 
        <input type="text" name="Apts3215" value="<?php echo($result2->A3215) ;?>" size="2">
        </font></td>
      <td width="25">&nbsp;</td>
      <td width="192"><font face="Arial, Helvetica, sans-serif">Pts 
        <input type="text" name="Apts3216" value="<?php echo($result2->A3216) ;?>" size="2">
        </font></td>
    </tr>
    <tr align="center"> 
      <td rowspan="2" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif">9</font></td>
      <td width="200" bgcolor="#CCCCCC"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3217; ?>
        </font></td>
      <td width="25" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="192" bgcolor="#CCCCCC"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3218; ?>
        </font></td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="200"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A3217" value="<?php echo($result->A3217) ;?>" size="3">
        - Aller( 
        <?php	echo $A3217; ?>
        ) </font></td>
      <td width="25"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="192"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A3218" value="<?php echo($result->A3218) ;?>" size="3">
        - Aller( 
        <?php	echo $A3218; ?>
        ) </font></td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="200" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif">Pts 
        <input type="text" name="Apts3217" value="<?php echo($result2->A3217) ;?>" size="2">
        </font></td>
      <td width="25" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="192" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif">Pts 
        <input type="text" name="Apts3218" value="<?php echo($result2->A3218) ;?>" size="2">
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="24"><font face="Arial, Helvetica, sans-serif">10</font></td>
      <td width="200"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3219; ?>
        </font></td>
      <td width="25"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="192"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3220; ?>
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="24"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="200"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A3219" value="<?php echo($result->A3219) ;?>" size="3">
        - Aller( 
        <?php	echo $A3219; ?>
        ) </font></td>
      <td width="25"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="192"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A3220" value="<?php echo($result->A3220) ;?>" size="3">
        - Aller( 
        <?php	echo $A3220; ?>
        ) </font></td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="200"><font face="Arial, Helvetica, sans-serif">Pts 
        <input type="text" name="Apts3219" value="<?php echo($result2->A3219) ;?>" size="2">
        </font></td>
      <td width="25">&nbsp;</td>
      <td width="192"><font face="Arial, Helvetica, sans-serif">Pts 
        <input type="text" name="Apts3220" value="<?php echo($result2->A3220) ;?>" size="2">
        </font></td>
    </tr>
    <tr align="center"> 
      <td rowspan="2" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif">11</font></td>
      <td width="200" bgcolor="#CCCCCC"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3221; ?>
        </font></td>
      <td width="25" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="192" bgcolor="#CCCCCC"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3222; ?>
        </font></td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="200"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A3221" value="<?php echo($result->A3221) ;?>" size="3">
        - Aller( 
        <?php	echo $A3221; ?>
        ) </font></td>
      <td width="25"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="192"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A3222" value="<?php echo($result->A3222) ;?>" size="3">
        - Aller( 
        <?php	echo $A3222; ?>
        ) </font></td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="200" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif">Pts 
        <input type="text" name="Apts3221" value="<?php echo($result2->A3221) ;?>" size="2">
        </font></td>
      <td width="25" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="192" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif">Pts 
        <input type="text" name="Apts3222" value="<?php echo($result2->A3222) ;?>" size="2">
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="24"><font face="Arial, Helvetica, sans-serif">12</font></td>
      <td width="200"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3223; ?>
        </font></td>
      <td width="25"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="192"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3224; ?>
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="24"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="200"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A3223" value="<?php echo($result->A3223) ;?>" size="3">
        - Aller( 
        <?php	echo $A3223; ?>
        ) </font></td>
      <td width="25"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="192"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A3224" value="<?php echo($result->A3224) ;?>" size="3">
        - Aller( 
        <?php	echo $A3224; ?>
        ) </font></td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="200"><font face="Arial, Helvetica, sans-serif">Pts 
        <input type="text" name="Apts3223" value="<?php echo($result2->A3223) ;?>" size="2">
        </font></td>
      <td width="25">&nbsp;</td>
      <td width="192"><font face="Arial, Helvetica, sans-serif">Pts 
        <input type="text" name="Apts3224" value="<?php echo($result2->A3224) ;?>" size="2">
        </font></td>
    </tr>
    <tr align="center"> 
      <td rowspan="2" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif">13</font></td>
      <td width="200" bgcolor="#CCCCCC"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3225; ?>
        </font></td>
      <td width="25" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="192" bgcolor="#CCCCCC"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3226; ?>
        </font></td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="200"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A3225" value="<?php echo($result->A3225) ;?>" size="3">
        - Aller( 
        <?php	echo $A3225; ?>
        ) </font></td>
      <td width="25"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="192"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A3226" value="<?php echo($result->A3226) ;?>" size="3">
        - Aller( 
        <?php	echo $A3226; ?>
        ) </font></td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="200" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif">Pts 
        <input type="text" name="Apts3225" value="<?php echo($result2->A3225) ;?>" size="2">
        </font></td>
      <td width="25" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="192" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif">Pts 
        <input type="text" name="Apts3226" value="<?php echo($result2->A3226) ;?>" size="2">
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="24"><font face="Arial, Helvetica, sans-serif">14</font></td>
      <td width="200"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3227; ?>
        </font></td>
      <td width="25"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="192"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3228; ?>
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="24"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="200"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A3227" value="<?php echo($result->A3227) ;?>" size="3">
        - Aller( 
        <?php	echo $A3227; ?>
        ) </font></td>
      <td width="25"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="192"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A3228" value="<?php echo($result->A3228) ;?>" size="3">
        - Aller( 
        <?php	echo $A3228; ?>
        ) </font></td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="200"><font face="Arial, Helvetica, sans-serif">Pts 
        <input type="text" name="Apts3227" value="<?php echo($result2->A3227) ;?>" size="2">
        </font></td>
      <td width="25">&nbsp;</td>
      <td width="192"><font face="Arial, Helvetica, sans-serif">Pts 
        <input type="text" name="Apts3228" value="<?php echo($result2->A3228) ;?>" size="2">
        </font></td>
    </tr>
    <tr align="center"> 
      <td rowspan="2" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif">15</font></td>
      <td width="200" bgcolor="#CCCCCC"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3229; ?>
        </font></td>
      <td width="25" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="192" bgcolor="#CCCCCC"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3230; ?>
        </font></td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="200"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A3229" value="<?php echo($result->A3229) ;?>" size="3">
        - Aller( 
        <?php	echo $A3229; ?>
        ) </font></td>
      <td width="25"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="192"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A3230" value="<?php echo($result->A3230) ;?>" size="3">
        - Aller( 
        <?php	echo $A3230; ?>
        ) </font></td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="200" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif">Pts 
        <input type="text" name="Apts3229" value="<?php echo($result2->A3229) ;?>" size="2">
        </font></td>
      <td width="25" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="192" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif">Pts 
        <input type="text" name="Apts3230" value="<?php echo($result2->A3230) ;?>" size="2">
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="24"><font face="Arial, Helvetica, sans-serif">16</font></td>
      <td width="200"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3231; ?>
        </font></td>
      <td width="25"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="192"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3232; ?>
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="24"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="200"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A3231" value="<?php echo($result->A3231) ;?>" size="3">
        - Aller( 
        <?php	echo $A3231; ?>
        ) </font></td>
      <td width="25"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="192"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A3232" value="<?php echo($result->A3232) ;?>" size="3">
        - Aller( 
        <?php	echo $A3232; ?>
        ) </font></td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="200"><font face="Arial, Helvetica, sans-serif">Pts 
        <input type="text" name="Apts3231" value="<?php echo($result2->A3231) ;?>" size="2">
        </font></td>
      <td width="25">&nbsp;</td>
      <td width="192"><font face="Arial, Helvetica, sans-serif">Pts 
        <input type="text" name="Apts3232" value="<?php echo($result2->A3232) ;?>" size="2">
        </font></td>
    </tr>
    <tr align="center"> 
      <td rowspan="2" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif">17</font></td>
      <td width="200" bgcolor="#CCCCCC"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3233; ?>
        </font></td>
      <td width="25" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="192" bgcolor="#CCCCCC"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3234; ?>
        </font></td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="200"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A3233" value="<?php echo($result->A3233) ;?>" size="3">
        - Aller( 
        <?php	echo $A3233; ?>
        ) </font></td>
      <td width="25"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="192"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A3234" value="<?php echo($result->A3234) ;?>" size="3">
        - Aller( 
        <?php	echo $A3234; ?>
        ) </font></td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="200" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif">Pts 
        <input type="text" name="Apts3233" value="<?php echo($result2->A3233) ;?>" size="2">
        </font></td>
      <td width="25" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="192" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif">Pts 
        <input type="text" name="Apts3234" value="<?php echo($result2->A3234) ;?>" size="2">
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="24"><font face="Arial, Helvetica, sans-serif">18</font></td>
      <td width="200"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3235; ?>
        </font></td>
      <td width="25"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="192"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3236; ?>
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="24"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="200"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A3235" value="<?php echo($result->A3235) ;?>" size="3">
        - Aller( 
        <?php	echo $A3235; ?>
        ) </font></td>
      <td width="25"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="192"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A3236" value="<?php echo($result->A3236) ;?>" size="3">
        - Aller( 
        <?php	echo $A3236; ?>
        ) </font></td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="200"><font face="Arial, Helvetica, sans-serif">Pts 
        <input type="text" name="Apts3235" value="<?php echo($result2->A3235) ;?>" size="2">
        </font></td>
      <td width="25">&nbsp;</td>
      <td width="192"><font face="Arial, Helvetica, sans-serif">Pts 
        <input type="text" name="Apts3236" value="<?php echo($result2->A3236) ;?>" size="2">
        </font></td>
    </tr>
    <tr align="center"> 
      <td rowspan="2" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif">19</font></td>
      <td width="200" bgcolor="#CCCCCC"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3237; ?>
        </font></td>
      <td width="25" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="192" bgcolor="#CCCCCC"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3238; ?>
        </font></td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="200"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A3237" value="<?php echo($result->A3237) ;?>" size="3">
        - Aller( 
        <?php	echo $A3237; ?>
        ) </font></td>
      <td width="25"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="192"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A3238" value="<?php echo($result->A3238) ;?>" size="3">
        - Aller( 
        <?php	echo $A3238; ?>
        ) </font></td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="200" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif">Pts 
        <input type="text" name="Apts3237" value="<?php echo($result2->A3237) ;?>" size="2">
        </font></td>
      <td width="25" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="192" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif">Pts 
        <input type="text" name="Apts3238" value="<?php echo($result2->A3238) ;?>" size="2">
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="24"><font face="Arial, Helvetica, sans-serif">20</font></td>
      <td width="200"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3239; ?>
        </font></td>
      <td width="25"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="192"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3240; ?>
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="24"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="200"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A3239" value="<?php echo($result->A3239) ;?>" size="3">
        - Aller( 
        <?php	echo $A3239; ?>
        ) </font></td>
      <td width="25"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="192"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A3240" value="<?php echo($result->A3240) ;?>" size="3">
        - Aller( 
        <?php	echo $A3240; ?>
        ) </font></td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="200"><font face="Arial, Helvetica, sans-serif">Pts 
        <input type="text" name="Apts3239" value="<?php echo($result2->A3239) ;?>" size="2">
        </font></td>
      <td width="25">&nbsp;</td>
      <td width="192"><font face="Arial, Helvetica, sans-serif">Pts 
        <input type="text" name="Apts3240" value="<?php echo($result2->A3240) ;?>" size="2">
        </font></td>
    </tr>
    <tr align="center"> 
      <td rowspan="2" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif">21</font></td>
      <td width="200" bgcolor="#CCCCCC"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3241; ?>
        </font></td>
      <td width="25" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="192" bgcolor="#CCCCCC"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3242; ?>
        </font></td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="200"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A3241" value="<?php echo($result->A3241) ;?>" size="3">
        - Aller( 
        <?php	echo $A3241; ?>
        ) </font></td>
      <td width="25"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="192"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A3242" value="<?php echo($result->A3242) ;?>" size="3">
        - Aller( 
        <?php	echo $A3242; ?>
        ) </font></td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="200" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif">Pts 
        <input type="text" name="Apts3241" value="<?php echo($result2->A3241) ;?>" size="2">
        </font></td>
      <td width="25" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="192" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif">Pts 
        <input type="text" name="Apts3242" value="<?php echo($result2->A3242) ;?>" size="2">
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="24"><font face="Arial, Helvetica, sans-serif">22</font></td>
      <td width="200"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3243; ?>
        </font></td>
      <td width="25"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="192"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3244; ?>
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="24"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="200"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A3243" value="<?php echo($result->A3243) ;?>" size="3">
        - Aller( 
        <?php	echo $A3243; ?>
        ) </font></td>
      <td width="25"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="192"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A3244" value="<?php echo($result->A3244) ;?>" size="3">
        - Aller( 
        <?php	echo $A3244; ?>
        ) </font></td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="200"><font face="Arial, Helvetica, sans-serif">Pts 
        <input type="text" name="Apts3243" value="<?php echo($result2->A3243) ;?>" size="2">
        </font></td>
      <td width="25">&nbsp;</td>
      <td width="192"><font face="Arial, Helvetica, sans-serif">Pts 
        <input type="text" name="Apts3244" value="<?php echo($result2->A3244) ;?>" size="2">
        </font></td>
    </tr>
    <tr align="center"> 
      <td rowspan="2" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif">23</font></td>
      <td width="200" bgcolor="#CCCCCC"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3245; ?>
        </font></td>
      <td width="25" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="192" bgcolor="#CCCCCC"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3246; ?>
        </font></td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="200"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A3245" value="<?php echo($result->A3245) ;?>" size="3">
        - Aller( 
        <?php	echo $A3245; ?>
        ) </font></td>
      <td width="25"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="192"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A3246" value="<?php echo($result->A3246) ;?>" size="3">
        - Aller( 
        <?php	echo $A3246; ?>
        ) </font></td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="200" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif">Pts 
        <input type="text" name="Apts3245" value="<?php echo($result2->A3245) ;?>" size="2">
        </font></td>
      <td width="25" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="192" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif">Pts 
        <input type="text" name="Apts3246" value="<?php echo($result2->A3246) ;?>" size="2">
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="24"><font face="Arial, Helvetica, sans-serif">24</font></td>
      <td width="200"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3247; ?>
        </font></td>
      <td width="25"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="192"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3248; ?>
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="24"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="200"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A3247" value="<?php echo($result->A3247) ;?>" size="3">
        - Aller( 
        <?php	echo $A3247; ?>
        ) </font></td>
      <td width="25"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="192"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A3248" value="<?php echo($result->A3248) ;?>" size="3">
        - Aller( 
        <?php	echo $A3248; ?>
        ) </font></td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="200"><font face="Arial, Helvetica, sans-serif">Pts 
        <input type="text" name="Apts3247" value="<?php echo($result2->A3247) ;?>" size="2">
        </font></td>
      <td width="25">&nbsp;</td>
      <td width="192"><font face="Arial, Helvetica, sans-serif">Pts 
        <input type="text" name="Apts3248" value="<?php echo($result2->A3248) ;?>" size="2">
        </font></td>
    </tr>
    <tr align="center"> 
      <td rowspan="2" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif">25</font></td>
      <td width="200" bgcolor="#CCCCCC"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3249; ?>
        </font></td>
      <td width="25" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="192" bgcolor="#CCCCCC"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3250; ?>
        </font></td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="200"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A3249" value="<?php echo($result->A3249) ;?>" size="3">
        - Aller( 
        <?php	echo $A3249; ?>
        ) </font></td>
      <td width="25"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="192"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A3250" value="<?php echo($result->A3250) ;?>" size="3">
        - Aller( 
        <?php	echo $A3250; ?>
        ) </font></td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="200" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif">Pts 
        <input type="text" name="Apts3249" value="<?php echo($result2->A3249) ;?>" size="2">
        </font></td>
      <td width="25" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="192" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif">Pts 
        <input type="text" name="Apts3250" value="<?php echo($result2->A3250) ;?>" size="2">
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="24"><font face="Arial, Helvetica, sans-serif">26</font></td>
      <td width="200"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3251; ?>
        </font></td>
      <td width="25"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="192"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3252; ?>
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="24"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="200"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A3251" value="<?php echo($result->A3251) ;?>" size="3">
        - Aller( 
        <?php	echo $A3251; ?>
        ) </font></td>
      <td width="25"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="192"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A3252" value="<?php echo($result->A3252) ;?>" size="3">
        - Aller( 
        <?php	echo $A3252; ?>
        ) </font></td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="200"><font face="Arial, Helvetica, sans-serif">Pts 
        <input type="text" name="Apts3251" value="<?php echo($result2->A3251) ;?>" size="2">
        </font></td>
      <td width="25">&nbsp;</td>
      <td width="192"><font face="Arial, Helvetica, sans-serif">Pts 
        <input type="text" name="Apts3252" value="<?php echo($result2->A3252) ;?>" size="2">
        </font></td>
    </tr>
    <tr align="center"> 
      <td rowspan="2" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif">27</font></td>
      <td width="200" bgcolor="#CCCCCC"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3253; ?>
        </font></td>
      <td width="25" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="192" bgcolor="#CCCCCC"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3254; ?>
        </font></td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="200"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A3253" value="<?php echo($result->A3253) ;?>" size="3">
        - Aller( 
        <?php	echo $A3253; ?>
        ) </font></td>
      <td width="25"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="192"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A3254" value="<?php echo($result->A3254) ;?>" size="3">
        - Aller( 
        <?php	echo $A3254; ?>
        ) </font></td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="200" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif">Pts 
        <input type="text" name="Apts3253" value="<?php echo($result2->A3253) ;?>" size="2">
        </font></td>
      <td width="25" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="192" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif">Pts 
        <input type="text" name="Apts3254" value="<?php echo($result2->A3254) ;?>" size="2">
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="24"><font face="Arial, Helvetica, sans-serif">28</font></td>
      <td width="200"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3255; ?>
        </font></td>
      <td width="25"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="192"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3256; ?>
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="24"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="200"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A3255" value="<?php echo($result->A3255) ;?>" size="3">
        - Aller( 
        <?php	echo $A3255; ?>
        ) </font></td>
      <td width="25"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="192"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A3256" value="<?php echo($result->A3256) ;?>" size="3">
        - Aller( 
        <?php	echo $A3256; ?>
        ) </font></td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="200"><font face="Arial, Helvetica, sans-serif">Pts 
        <input type="text" name="Apts3255" value="<?php echo($result2->A3255) ;?>" size="2">
        </font></td>
      <td width="25">&nbsp;</td>
      <td width="192"><font face="Arial, Helvetica, sans-serif">Pts 
        <input type="text" name="Apts3256" value="<?php echo($result2->A3256) ;?>" size="2">
        </font></td>
    </tr>
    <tr align="center"> 
      <td rowspan="2" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif">29</font></td>
      <td width="200" bgcolor="#CCCCCC"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3257; ?>
        </font></td>
      <td width="25" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="192" bgcolor="#CCCCCC"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3258; ?>
        </font></td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="200"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A3257" value="<?php echo($result->A3257) ;?>" size="3">
        - Aller( 
        <?php	echo $A3257; ?>
        ) </font></td>
      <td width="25"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="192"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A3258" value="<?php echo($result->A3258) ;?>" size="3">
        - Aller( 
        <?php	echo $A3258; ?>
        ) </font></td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="200" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif">Pts 
        <input type="text" name="Apts3257" value="<?php echo($result2->A3257) ;?>" size="2">
        </font></td>
      <td width="25" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="192" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif">Pts 
        <input type="text" name="Apts3258" value="<?php echo($result2->A3258) ;?>" size="2">
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="24"><font face="Arial, Helvetica, sans-serif">30</font></td>
      <td width="200"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3259; ?>
        </font></td>
      <td width="25"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="192"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3260; ?>
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="24"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="200"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A3259" value="<?php echo($result->A3259) ;?>" size="3">
        - Aller( 
        <?php	echo $A3259; ?>
        ) </font></td>
      <td width="25"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="192"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A3260" value="<?php echo($result->A3260) ;?>" size="3">
        - Aller( 
        <?php	echo $A3260; ?>
        ) </font></td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="200"><font face="Arial, Helvetica, sans-serif">Pts 
        <input type="text" name="Apts3259" value="<?php echo($result2->A3259) ;?>" size="2">
        </font></td>
      <td width="25">&nbsp;</td>
      <td width="192"><font face="Arial, Helvetica, sans-serif">Pts 
        <input type="text" name="Apts3260" value="<?php echo($result2->A3260) ;?>" size="2">
        </font></td>
    </tr>
    <tr align="center"> 
      <td rowspan="2" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif">31</font></td>
      <td width="200" bgcolor="#CCCCCC"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3261; ?>
        </font></td>
      <td width="25" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="192" bgcolor="#CCCCCC"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3262; ?>
        </font></td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="200"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A3261" value="<?php echo($result->A3261) ;?>" size="3">
        - Aller( 
        <?php	echo $A3261; ?>
        ) </font></td>
      <td width="25"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="192"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A3262" value="<?php echo($result->A3262) ;?>" size="3">
        - Aller( 
        <?php	echo $A3262; ?>
        ) </font></td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="200" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif">Pts 
        <input type="text" name="Apts3261" value="<?php echo($result2->A3261) ;?>" size="2">
        </font></td>
      <td width="25" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="192" bgcolor="#CCCCCC"><font face="Arial, Helvetica, sans-serif">Pts 
        <input type="text" name="Apts3262" value="<?php echo($result2->A3262) ;?>" size="2">
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="24"><font face="Arial, Helvetica, sans-serif">32</font></td>
      <td width="200"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3263; ?>
        </font></td>
      <td width="25"><font face="Arial, Helvetica, sans-serif">-</font></td>
      <td width="192"> <font face="Arial, Helvetica, sans-serif"> 
        <?php	echo $clubA3264; ?>
        </font></td>
    </tr>
    <tr align="center"> 
      <td width="24"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="200"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A3263" value="<?php echo($result->A3263) ;?>" size="3">
        - Aller( 
        <?php	echo $A3263; ?>
        ) </font></td>
      <td width="25"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="192"> <font face="Arial, Helvetica, sans-serif"> 
        <input type="text" name="A3264" value="<?php echo($result->A3264) ;?>" size="3">
        - Aller( 
        <?php	echo $A3264; ?>
        ) </font></td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="200"><font face="Arial, Helvetica, sans-serif">Pts 
        <input type="text" name="Apts3263" value="<?php echo($result2->A3263) ;?>" size="2">
        </font></td>
      <td width="25">&nbsp;</td>
      <td width="192"><font face="Arial, Helvetica, sans-serif">Pts 
        <input type="text" name="Apts3264" value="<?php echo($result2->A3264) ;?>" size="2">
        </font></td>
    </tr>
    <tr align="center" valign="top"> 
      <td colspan="4" bgcolor="#FF0000"> 
        <input type="submit" value="modifier" name="submit">
      </td>
    </tr>
  </table>  
</form>

<p>&nbsp;</p>
