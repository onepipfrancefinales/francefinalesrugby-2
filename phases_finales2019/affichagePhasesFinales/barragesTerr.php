
<?php
$annee = $_GET['annee']; 
$division = $_GET['division']; 
//echo $division; 
?>


<link rel="stylesheet" type="text/css" href="2.css">

</head>

<?php
require ("../../connect/connexion1.php");
require ("../fonctionsChampFrance2019.php");
trenteDeuxieme2019 ($division, $annee);
?>

<table width="1600" border="0">
  <tr> 
    <td width="186">&nbsp;</td>
    <td width="42">&nbsp;</td>
    <td width="16">&nbsp;</td>
    <td width="204">&nbsp;</td>
    <td width="40">&nbsp;</td>
    <td width="17">&nbsp;</td>
    <td width="194">&nbsp;</td>
    <td width="45">&nbsp;</td>
    <td width="11">&nbsp;</td>
    <td width="212">&nbsp;</td>
    <td width="25">&nbsp;</td>
    <td width="12">&nbsp;</td>
    <td width="179">&nbsp;</td>
    <td width="42">&nbsp;</td>
    <td width="26">&nbsp;</td>
    <td width="190">&nbsp;</td>
    <td width="45">&nbsp;</td>
    <td width="40">&nbsp;</td>
  </tr>
  <tr> 
    <td width="186"> </td>
    <td colspan="14"> 
      <div class="cal"><b><font color="#000000" face="Arial, Helvetica, sans-serif" size="5">Barrages 
        d'accession au Championnat de France 
        <?php echo $annee;?>
        </font></b></div>
    </td>
    <td width="190">&nbsp;</td>
    <td width="45">&nbsp;</td>
    <td width="40">&nbsp;</td>
  </tr>
  <tr> 
    <td width="186" height="22"><b></b></td>
    <td width="42" height="22">&nbsp;</td>
    <td width="16" height="22">&nbsp;</td>
    <td width="204" height="22">&nbsp;</td>
    <td width="40" height="22">&nbsp;</td>
    <td width="17" height="22">&nbsp;</td>
    <td width="194" height="22">&nbsp;</td>
    <td width="45" height="22">&nbsp;</td>
    <td width="11" height="22">&nbsp;</td>
    <td width="212" height="22">&nbsp;</td>
    <td width="25" height="22">&nbsp;</td>
    <td width="12" height="22">&nbsp;</td>
    <td width="179" height="22">&nbsp;</td>
    <td width="42" height="22">&nbsp;</td>
    <td width="26" height="22">&nbsp;</td>
    <td width="190" height="22">&nbsp;</td>
    <td width="45" height="22">&nbsp;</td>
    <td width="40" height="22">&nbsp;</td>
  </tr>
  <tr> 
    <td colspan="18" bgcolor="#FF9933"><b></b> 
      <div align="center"><b><font color="#000000" face="Arial, Helvetica, sans-serif" size="4">Honneur</font></b></div>
    </td>
  </tr>
  <tr> 
    <td width="186"> 
      <div class="coin4" > 
        <?php	echo $clubA3201; ?>
      </div>
    </td>
    <td width="42"> 
      <div class="coin4" > 
        <?php  echo $A3201;     ?>
      </div>
    </td>
    <td width="16">&nbsp;</td>
    <td width="204"> 
      <div class="coin4" > 
        <?php	echo $clubA3203; ?>
      </div>
    </td>
    <td width="40"> 
      <div class="coin4" > 
        <?php
		 echo $A3203;  
        
        ?>
      </div>
    </td>
    <td width="17">&nbsp;</td>
    <td width="194"> 
      <div class="coin4" > 
        <?php	echo $clubA3205; ?>
      </div>
    </td>
    <td width="45"> 
      <div class="coin4" > 
        <?php
		 echo $A3205; 
       
        ?>
      </div>
    </td>
    <td width="11">&nbsp;</td>
    <td width="212"> 
      <div class="coin4" > 
        <?php	echo $clubA3207; ?>
      </div>
    </td>
    <td width="25"> 
      <div class="coin4" > 
        <?php if ($A3207+$A3208==0)
		echo "-";
		else
		{
		 echo $A3207; 
        }
        ?>
      </div>
    </td>
    <td width="12">&nbsp;</td>
    <td width="179"> 
      <div class="coin4" > 
        <?php	echo $clubA3209; ?>
      </div>
    </td>
    <td width="42"> 
      <div class="coin4" > 
        <?php if ($A3209+$A3210==0)
		echo "-";
		else
		{
		 echo $A3209;
        }
        ?>
      </div>
    </td>
    <td width="26">&nbsp;</td>
    <td width="190"> 
      <div class="coin4" > 
        <?php	echo $clubA3211; ?>
      </div>
    </td>
    <td width="45"> 
      <div class="coin4" > 
        <?php if ($A3211+$A3212==0)
		echo "-";
		else
		{
		 echo $A3211;
        }
        ?>
      </div>
    </td>
    <td width="40">&nbsp;</td>
  </tr>
  <tr> 
    <td width="186"> 
      <div class="coin4" > 
        <?php	echo $clubA3202; ?>
      </div>
    </td>
    <td width="42"> 
      <div class="coin4" > 
        <?php
		echo $A3202; 
       
        ?>
      </div>
    </td>
    <td width="16">&nbsp;</td>
    <td width="204"> 
      <div class="coin4" > 
        <?php	echo $clubA3204; ?>
      </div>
    </td>
    <td width="40"> 
      <div class="coin4" > 
        <?php 
		 echo $A3204;  
        
        ?>
      </div>
    </td>
    <td width="17">&nbsp;</td>
    <td width="194"> 
      <div class="coin4" > 
        <?php	echo $clubA3206; ?>
      </div>
    </td>
    <td width="45"> 
      <div class="coin4" > 
        <?php 
		 echo $A3206; 
       
        ?>
      </div>
    </td>
    <td width="11">&nbsp;</td>
    <td width="212"> 
      <div class="coin4" > 
        <?php	echo $clubA3208; ?>
      </div>
    </td>
    <td width="25"> 
      <div class="coin4" > 
        <?php if ($A3207+$A3208==0)
		echo "-";
		else
		{
		 echo $A3208; 
        }
        ?>
      </div>
    </td>
    <td width="12">&nbsp;</td>
    <td width="179"> 
      <div class="coin4" > 
        <?php	echo $clubA3210; ?>
      </div>
    </td>
    <td width="42"> 
      <div class="coin4" > 
        <?php if ($A3209+$A3210==0)
		echo "-";
		else
		{
		 echo $A3210;
        }
        ?>
      </div>
    </td>
    <td width="26">&nbsp;</td>
    <td width="190"> 
      <div class="coin4" > 
        <?php	echo $clubA3212; ?>
      </div>
    </td>
    <td width="45"> 
      <div class="coin4" > 
        <?php if ($A3211+$A3212==0)
		echo "-";
		else
		{
		 echo $A3212;
        }
        ?>
      </div>
    </td>
    <td width="40">&nbsp;</td>
  </tr>
  <tr> 
    <td width="186">&nbsp;</td>
    <td width="42">&nbsp;</td>
    <td width="16">&nbsp;</td>
    <td width="204">&nbsp;</td>
    <td width="40">&nbsp;</td>
    <td width="17">&nbsp;</td>
    <td width="194">&nbsp;</td>
    <td width="45">&nbsp;</td>
    <td width="11">&nbsp;</td>
    <td width="212">&nbsp;</td>
    <td width="25">&nbsp;</td>
    <td width="12">&nbsp;</td>
    <td width="179">&nbsp;</td>
    <td width="42">&nbsp;</td>
    <td width="26">&nbsp;</td>
    <td width="190">&nbsp;</td>
    <td width="45">&nbsp;</td>
    <td width="40">&nbsp;</td>
  </tr>
  <tr> 
    <td colspan="18" bgcolor="#FF9933"> 
      <div align="center"><b></b></div>
      <div align="center"><font color="#000000"><b><font face="Arial, Helvetica, sans-serif" size="4">Promotion 
        Honneur</font></b></font></div>
    </td>
  </tr>
  <tr> 
    <td width="186"> 
      <div class="coin5" > 
        <?php	echo $clubA3213; ?>
      </div>
    </td>
    <td width="42"> 
      <div class="coin5" > 
        <?php if ($A3213+$A3214==0)
		echo "-";
		else
		{
		 echo $A3213; 
        }
        ?>
      </div>
    </td>
    <td width="16">&nbsp;</td>
    <td width="204"> 
      <div class="coin5" > 
        <?php	echo $clubA3215; ?>
      </div>
    </td>
    <td width="40"> 
      <div class="coin5" > 
        <?php 
		 echo $A3215; 
        
        ?>
      </div>
    </td>
    <td width="17">&nbsp;</td>
    <td width="194"> 
      <div class="coin5" > 
        <?php	echo $clubA3217; ?>
      </div>
    </td>
    <td width="45"> 
      <div class="coin5" > 
        <?php if ($A3217+$A3218==0)
		echo "-";
		else
		{
		 echo $A3217; 
        }
        ?>
      </div>
    </td>
    <td width="11">&nbsp;</td>
    <td width="212"> 
      <div class="coin5" > 
        <?php	echo $clubA3219; ?>
      </div>
    </td>
    <td width="25"> 
      <div class="coin5" > 
        <?php if ($A3219+$A3220==0)
		echo "-";
		else
		{
		 echo $A3219; 
        }
        ?>
      </div>
    </td>
    <td width="12">&nbsp;</td>
    <td width="179"> 
      <div class="coin5" > 
        <?php	echo $clubA3221; ?>
      </div>
    </td>
    <td width="42"> 
      <div class="coin5" > 
        <?php if ($A3221+$A3222==0)
		echo "-";
		else
		{
		 echo $A3221; 
        }
        ?>
      </div>
    </td>
    <td width="26">&nbsp;</td>
    <td width="190"> 
      <div class="coin5" > 
        <?php	echo $clubA3223; ?>
      </div>
    </td>
    <td width="45"> 
      <div class="coin5" > 
        <?php if ($A3223+$A3224==0)
		echo "-";
		else
		{
		 echo $A3223; 
        }
        ?>
      </div>
    </td>
    <td width="40">&nbsp;</td>
  </tr>
  <tr> 
    <td width="186"> 
      <div class="coin5" > 
        <?php	echo $clubA3214; ?>
      </div>
    </td>
    <td width="42"> 
      <div class="coin5" > 
        <?php if ($A3213+$A3214==0)
		echo "-";
		else
		{
		 echo $A3214; 
        }
        ?>
      </div>
    </td>
    <td width="16">&nbsp;</td>
    <td width="204"> 
      <div class="coin5" > 
        <?php	echo $clubA3216; ?>
      </div>
    </td>
    <td width="40"> 
      <div class="coin5" > 
        <?php 
		 echo $A3216; 
       
        ?>
      </div>
    </td>
    <td width="17">&nbsp;</td>
    <td width="194"> 
      <div class="coin5" > 
        <?php	echo $clubA3218; ?>
      </div>
    </td>
    <td width="45"> 
      <div class="coin5" > 
        <?php if ($A3217+$A3218==0)
		echo "-";
		else
		{
		 echo $A3218; 
        }
        ?>
      </div>
    </td>
    <td width="11">&nbsp;</td>
    <td width="212"> 
      <div class="coin5" > 
        <?php	echo $clubA3220; ?>
      </div>
    </td>
    <td width="25"> 
      <div class="coin5" > 
        <?php if ($A3219+$A3220==0)
		echo "-";
		else
		{
		 echo $A3220; 
        }
        ?>
      </div>
    </td>
    <td width="12">&nbsp;</td>
    <td width="179"> 
      <div class="coin5" > 
        <?php	echo $clubA3222; ?>
      </div>
    </td>
    <td width="42"> 
      <div class="coin5" > 
        <?php if ($A3221+$A3222==0)
		echo "-";
		else
		{
		 echo $A3222; 
        }
        ?>
      </div>
    </td>
    <td width="26">&nbsp;</td>
    <td width="190"> 
      <div class="coin5" > 
        <?php	echo $clubA3224; ?>
      </div>
    </td>
    <td width="45"> 
      <div class="coin5" > 
        <?php if ($A3223+$A3224==0)
		echo "-";
		else
		{
		 echo $A3224; 
        }
        ?>
      </div>
    </td>
    <td width="40">&nbsp;</td>
  </tr>
  <tr> 
    <td width="186">&nbsp;</td>
    <td width="42">&nbsp;</td>
    <td width="16">&nbsp;</td>
    <td width="204">&nbsp;</td>
    <td width="40">&nbsp;</td>
    <td width="17">&nbsp;</td>
    <td width="194">&nbsp;</td>
    <td width="45">&nbsp;</td>
    <td width="11">&nbsp;</td>
    <td width="212">&nbsp;</td>
    <td width="25">&nbsp;</td>
    <td width="12">&nbsp;</td>
    <td width="179">&nbsp;</td>
    <td width="42">&nbsp;</td>
    <td width="26">&nbsp;</td>
    <td width="190">&nbsp;</td>
    <td width="45">&nbsp;</td>
    <td width="40">&nbsp;</td>
  </tr>
  <tr> 
    <td colspan="18" bgcolor="#FF9933"><b></b> 
      <div align="center"><b><font color="#000000" face="Arial, Helvetica, sans-serif" size="4">1re 
        S&eacute;rie</font></b></div>
    </td>
  </tr>
  <tr> 
    <td width="186"> 
      <div class="coin4" > 
        <?php	echo $clubA3225; ?>
      </div>
    </td>
    <td width="42"> 
      <div class="coin4" > 
        <?php if ($A3225+$A3226==0)
		echo "-";
		else
		{
		 echo $A3225; 
        }
        ?>
      </div>
    </td>
    <td width="16">&nbsp;</td>
    <td width="204"> 
      <div class="coin4" > 
        <?php	echo $clubA3227; ?>
      </div>
    </td>
    <td width="40"> 
      <div class="coin4" > 
        <?php 
		 echo $A3227;  
       
        ?>
      </div>
    </td>
    <td width="17">&nbsp;</td>
    <td width="194"> 
      <div class="coin4" > 
        <?php	echo $clubA3229; ?>
      </div>
    </td>
    <td width="45"> 
      <div class="coin4" > 
        <?php if ($A3229+$A3230==0)
		echo "-";
		else
		{
		 echo $A3229; 
        }
        ?>
      </div>
    </td>
    <td width="11">&nbsp;</td>
    <td width="212"> 
      <div class="coin4" > 
        <?php	echo $clubA3231; ?>
      </div>
    </td>
    <td width="25"> 
      <div class="coin4" > 
        <?php if ($A3231+$A3232==0)
		echo "-";
		else
		{
		 echo $A3231; 
        }
        ?>
      </div>
    </td>
    <td width="12">&nbsp;</td>
    <td width="179"> 
      <div class="coin4" > 
        <?php	echo $clubA3233; ?>
      </div>
    </td>
    <td width="42"> 
      <div class="coin4" > 
        <?php if ($A3233+$A3234==0)
		echo "-";
		else
		{
		 echo $A3233;  
        }
        ?>
      </div>
    </td>
    <td width="26">&nbsp;</td>
    <td width="190"> 
      <div class="coin4" > 
        <?php	echo $clubA3235; ?>
      </div>
    </td>
    <td width="45"> 
      <div class="coin4" > 
        <?php if ($A3235+$A3236==0)
		echo "-";
		else
		{
		 echo $A3235;  
        }
        ?>
      </div>
    </td>
    <td width="40">&nbsp;</td>
  </tr>
  <tr> 
    <td width="186" height="17"> 
      <div class="coin4" > 
        <?php	echo $clubA3226; ?>
      </div>
    </td>
    <td width="42" height="17"> 
      <div class="coin4" > 
        <?php if ($A3225+$A3226==0)
		echo "-";
		else
		{
		 echo $A3226; 
        }
        ?>
      </div>
    </td>
    <td width="16" height="17">&nbsp;</td>
    <td width="204" height="17"> 
      <div class="coin4" > 
        <?php	echo $clubA3228; ?>
      </div>
    </td>
    <td width="40" height="17"> 
      <div class="coin4" > 
        <?php 
		 echo $A3228;  
       
        ?>
      </div>
    </td>
    <td width="17" height="17">&nbsp;</td>
    <td width="194" height="17"> 
      <div class="coin4" > 
        <?php	echo $clubA3230; ?>
      </div>
    </td>
    <td width="45" height="17"> 
      <div class="coin4" > 
        <?php if ($A3229+$A3230==0)
		echo "-";
		else
		{
		 echo $A3230; 
        }
        ?>
      </div>
    </td>
    <td width="11" height="17">&nbsp;</td>
    <td width="212" height="17"> 
      <div class="coin4" > 
        <?php	echo $clubA3232; ?>
      </div>
    </td>
    <td width="25" height="17"> 
      <div class="coin4" > 
        <?php if ($A3231+$A3232==0)
		echo "-";
		else
		{
		 echo $A3232; 
        }
        ?>
      </div>
    </td>
    <td width="12" height="17">&nbsp;</td>
    <td width="179" height="17"> 
      <div class="coin4" > 
        <?php	echo $clubA3234; ?>
      </div>
    </td>
    <td width="42" height="17"> 
      <div class="coin4" > 
        <?php echo $A3234;   ?>
      </div>
    </td>
    <td width="26" height="17">&nbsp;</td>
    <td width="190" height="17"> 
      <div class="coin4" > 
        <?php	echo $clubA3236; ?>
      </div>
    </td>
    <td width="45" height="17"> 
      <div class="coin4" > 
        <?php if ($A3235+$A3236==0)
		echo "-";
		else
		{
		 echo $A3236;  
        }
        ?>
      </div>
    </td>
    <td width="40" height="17">&nbsp;</td>
  </tr>
  <tr> 
    <td width="186" height="2">&nbsp;</td>
    <td width="42" height="2">&nbsp;</td>
    <td width="16" height="2">&nbsp;</td>
    <td width="204" height="2">&nbsp;</td>
    <td width="40" height="2">&nbsp;</td>
    <td width="17" height="2">&nbsp;</td>
    <td width="194" height="2">&nbsp;</td>
    <td width="45" height="2">&nbsp;</td>
    <td width="11" height="2">&nbsp;</td>
    <td width="212" height="2">&nbsp;</td>
    <td width="25" height="2">&nbsp;</td>
    <td width="12" height="2">&nbsp;</td>
    <td width="179" height="2">&nbsp;</td>
    <td width="42" height="2">&nbsp;</td>
    <td width="26" height="2">&nbsp;</td>
    <td width="190" height="2">&nbsp;</td>
    <td width="45" height="2">&nbsp;</td>
    <td width="40" height="2">&nbsp;</td>
  </tr>
</table>




<?php
$division = 995; 
require ("../../connect/connexion1.php");
trenteDeuxieme2019 ($division, $annee);
?>




<table width="1600" border="0">
  <tr> 
    <td colspan="18" bgcolor="#FF9933"> 
      <div align="center"><b><font color="#000000" face="Arial, Helvetica, sans-serif" size="4">2me 
        S&eacute;rie 
        <?php  $id = 995; 
?>
        </font></b></div>
    </td>
  </tr>
  <tr> 
    <td width="190"> 
      <div class="coin5" > 
        <?php	echo $clubA3201; ?>
      </div>
    </td>
    <td width="33"> 
      <div class="coin5" > 
        <?php if ($A3201+$A3202==0)
		echo "-";
		else
		{
		 echo $A3201;
        }
        ?>
      </div>
    </td>
    <td width="36">&nbsp;</td>
    <td width="189"> 
      <div class="coin5" > 
        <?php	echo $clubA3203; ?>
      </div>
    </td>
    <td width="43"> 
      <div class="coin5" > 
        <?php if ($A3203+$A3204==0)
		echo "-";
		else
		{
		 echo $A3203;  
        }
        ?>
      </div>
    </td>
    <td width="28">&nbsp;</td>
    <td width="185"> 
      <div class="coin5" > 
        <?php	echo $clubA3205; ?>
      </div>
    </td>
    <td width="44"> 
      <div class="coin5" > 
        <?php if ($A3205+$A3206==0)
		echo "-";
		else
		{
		 echo $A3205; 
        }
        ?>
      </div>
    </td>
    <td width="21">&nbsp;</td>
    <td width="177"> 
      <div class="coin5" > 
        <?php	echo $clubA3207; ?>
      </div>
    </td>
    <td width="43"> 
      <div class="coin5" > 
        <?php if ($A3207+$A3208==0)
		echo "-";
		else
		{
		 echo $A3207; 
        }
        ?>
      </div>
    </td>
    <td width="24">&nbsp;</td>
    <td width="190"> 
      <div class="coin5" > 
        <?php	echo $clubA3209; ?>
      </div>
    </td>
    <td width="38"> 
      <div class="coin5" > 
        <?php if ($A3209+$A3210==0)
		echo "-";
		else
		{
		 echo $A3209;
        }
        ?>
      </div>
    </td>
    <td width="13">&nbsp;</td>
    <td width="200"> 
      <div class="coin5" > 
        <?php	echo $clubA3211; ?>
      </div>
    </td>
    <td width="36"> 
      <div class="coin5" > 
        <?php if ($A3211+$A3212==0)
		echo "-";
		else
		{
		 echo $A3211;
        }
        ?>
      </div>
    </td>
    <td width="36">&nbsp;</td>
  </tr>
  <tr> 
    <td width="190"> 
      <div class="coin5" > 
        <?php	echo $clubA3202; ?>
      </div>
    </td>
    <td width="33"> 
      <div class="coin5" > 
        <?php if ($A3201+$A3202==0)
		echo "-";
		else
		{
		echo $A3202; 
        }
        ?>
      </div>
    </td>
    <td width="36">&nbsp;</td>
    <td width="189"> 
      <div class="coin5" > 
        <?php	echo $clubA3204; ?>
      </div>
    </td>
    <td width="43"> 
      <div class="coin5" > 
        <?php if ($A3203+$A3204==0)
		echo "-";
		else
		{
		 echo $A3204;  
        }
        ?>
      </div>
    </td>
    <td width="28">&nbsp;</td>
    <td width="185"> 
      <div class="coin5" > 
        <?php	echo $clubA3206; ?>
      </div>
    </td>
    <td width="44"> 
      <div class="coin5" > 
        <?php if ($A3205+$A3206==0)
		echo "-";
		else
		{
		 echo $A3206; 
        }
        ?>
      </div>
    </td>
    <td width="21">&nbsp;</td>
    <td width="177"> 
      <div class="coin5" > 
        <?php	echo $clubA3208; ?>
      </div>
    </td>
    <td width="43"> 
      <div class="coin5" > 
        <?php if ($A3207+$A3208==0)
		echo "-";
		else
		{
		 echo $A3208; 
        }
        ?>
      </div>
    </td>
    <td width="24">&nbsp;</td>
    <td width="190"> 
      <div class="coin5" > 
        <?php	echo $clubA3210; ?>
      </div>
    </td>
    <td width="38"> 
      <div class="coin5" > 
        <?php if ($A3209+$A3210==0)
		echo "-";
		else
		{
		 echo $A3210;
        }
        ?>
      </div>
    </td>
    <td width="13">&nbsp;</td>
    <td width="200"> 
      <div class="coin5" > 
        <?php	echo $clubA3212; ?>
      </div>
    </td>
    <td width="36"> 
      <div class="coin5" > 
        <?php if ($A3211+$A3212==0)
		echo "-";
		else
		{
		 echo $A3212;
        }
        ?>
      </div>
    </td>
    <td width="36">&nbsp;</td>
  </tr>
  <tr> 
    <td width="190">&nbsp;</td>
    <td width="33">&nbsp;</td>
    <td width="36">&nbsp;</td>
    <td width="189">&nbsp;</td>
    <td width="43">&nbsp;</td>
    <td width="28">&nbsp;</td>
    <td width="185">&nbsp;</td>
    <td width="44">&nbsp;</td>
    <td width="21">&nbsp;</td>
    <td width="177">&nbsp;</td>
    <td width="43">&nbsp;</td>
    <td width="24">&nbsp;</td>
    <td width="190">&nbsp;</td>
    <td width="38">&nbsp;</td>
    <td width="13">&nbsp;</td>
    <td width="200">&nbsp;</td>
    <td width="36">&nbsp;</td>
    <td width="36">&nbsp;</td>
  </tr>
  <tr> 
    <td colspan="18" bgcolor="#FF9933">
      <div align="center"><b><font color="#000000" face="Arial, Helvetica, sans-serif" size="4">3me 
        S&eacute;rie</font></b></div>
    </td>
  </tr>
  <tr> 
    <td width="190"> 
      <div class="coin4" > 
        <?php	echo $clubA3213; ?>
      </div>
    </td>
    <td width="33"> 
      <div class="coin4" > 
        <?php if ($A3213+$A3214==0)
		echo "-";
		else
		{
		 echo $A3213; 
        }
        ?>
      </div>
    </td>
    <td width="36">&nbsp;</td>
    <td width="189"> 
      <div class="coin4" > 
        <?php	echo $clubA3215; ?>
      </div>
    </td>
    <td width="43"> 
      <div class="coin4" > 
        <?php if ($A3215+$A3216==0)
		echo "-";
		else
		{
		 echo $A3215; 
        }
        ?>
      </div>
    </td>
    <td width="28">&nbsp;</td>
    <td width="185"> 
      <div class="coin4" > 
        <?php	echo $clubA3217; ?>
      </div>
    </td>
    <td width="44"> 
      <div class="coin4" > 
        <?php if ($A3217+$A3218==0)
		echo "-";
		else
		{
		 echo $A3217; 
        }
        ?>
      </div>
    </td>
    <td width="21">&nbsp;</td>
    <td width="177"> 
      <div class="coin4" > 
        <?php	echo $clubA3219; ?>
      </div>
    </td>
    <td width="43"> 
      <div class="coin4" > 
        <?php if ($A3219+$A3220==0)
		echo "-";
		else
		{
		 echo $A3219; 
        }
        ?>
      </div>
    </td>
    <td width="24">&nbsp;</td>
    <td width="190"> 
      <div class="coin4" > 
        <?php	echo $clubA3221; ?>
      </div>
    </td>
    <td width="38"> 
      <div class="coin4" > 
        <?php if ($A3221+$A3222==0)
		echo "-";
		else
		{
		 echo $A3221; 
        }
        ?>
      </div>
    </td>
    <td width="13">&nbsp;</td>
    <td width="200"> 
      <div class="coin4" > 
        <?php	echo $clubA3223; ?>
      </div>
    </td>
    <td width="36"> 
      <div class="coin4" > 
        <?php if ($A3223+$A3224==0)
		echo "-";
		else
		{
		 echo $A3223; 
        }
        ?>
      </div>
    </td>
    <td width="36">&nbsp;</td>
  </tr>
  <tr> 
    <td width="190"> 
      <div class="coin4" > 
        <?php	echo $clubA3214; ?>
      </div>
    </td>
    <td width="33"> 
      <div class="coin4" > 
        <?php if ($A3213+$A3214==0)
		echo "-";
		else
		{
		 echo $A3214; 
        }
        ?>
      </div>
    </td>
    <td width="36">&nbsp;</td>
    <td width="189"> 
      <div class="coin4" > 
        <?php	echo $clubA3216; ?>
      </div>
    </td>
    <td width="43"> 
      <div class="coin4" > 
        <?php if ($A3215+$A3216==0)
		echo "-";
		else
		{
		 echo $A3216; 
        }
        ?>
      </div>
    </td>
    <td width="28">&nbsp;</td>
    <td width="185"> 
      <div class="coin4" > 
        <?php	echo $clubA3218; ?>
      </div>
    </td>
    <td width="44"> 
      <div class="coin4" > 
        <?php if ($A3217+$A3218==0)
		echo "-";
		else
		{
		 echo $A3218; 
        }
        ?>
      </div>
    </td>
    <td width="21">&nbsp;</td>
    <td width="177"> 
      <div class="coin4" > 
        <?php	echo $clubA3220; ?>
      </div>
    </td>
    <td width="43"> 
      <div class="coin4" > 
        <?php if ($A3219+$A3220==0)
		echo "-";
		else
		{
		 echo $A3220; 
        }
        ?>
      </div>
    </td>
    <td width="24">&nbsp;</td>
    <td width="190"> 
      <div class="coin4" > 
        <?php	echo $clubA3222; ?>
      </div>
    </td>
    <td width="38"> 
      <div class="coin4" > 
        <?php if ($A3221+$A3222==0)
		echo "-";
		else
		{
		 echo $A3222; 
        }
        ?>
      </div>
    </td>
    <td width="13">&nbsp;</td>
    <td width="200"> 
      <div class="coin4" > 
        <?php	echo $clubA3224; ?>
      </div>
    </td>
    <td width="36"> 
      <div class="coin4" > 
        <?php if ($A3223+$A3224==0)
		echo "-";
		else
		{
		 echo $A3224; 
        }
        ?>
      </div>
    </td>
    <td width="36">&nbsp;</td>
  </tr>
  <tr> 
    <td width="190">&nbsp;</td>
    <td width="33">&nbsp;</td>
    <td width="36">&nbsp;</td>
    <td width="189">&nbsp;</td>
    <td width="43">&nbsp;</td>
    <td width="28">&nbsp;</td>
    <td width="185">&nbsp;</td>
    <td width="44">&nbsp;</td>
    <td width="21">&nbsp;</td>
    <td width="177">&nbsp;</td>
    <td width="43">&nbsp;</td>
    <td width="24">&nbsp;</td>
    <td width="190">&nbsp;</td>
    <td width="38">&nbsp;</td>
    <td width="13">&nbsp;</td>
    <td width="200">&nbsp;</td>
    <td width="36">&nbsp;</td>
    <td width="36">&nbsp;</td>
  </tr>
  <tr> 
    <td colspan="18" bgcolor="#FF9933">
      <div align="center"><b><font color="#000000" face="Arial, Helvetica, sans-serif" size="4">4me 
        S&eacute;rie</font></b></div>
    </td>
  </tr>
  <tr> 
    <td width="190"> 
      <div class="coin5" > 
        <?php	echo $clubA3225; ?>
      </div>
    </td>
    <td width="33"> 
      <div class="coin5" > 
        <?php if ($A3225+$A3226==0)
		echo "-";
		else
		{
		 echo $A3225; 
        }
        ?>
      </div>
    </td>
    <td width="36">&nbsp;</td>
    <td width="189"> 
      <div class="coin5" > 
        <?php	echo $clubA3227; ?>
      </div>
    </td>
    <td width="43"> 
      <div class="coin5" > 
        <?php if ($A3227+$A3228==0)
		echo "-";
		else
		{
		 echo $A3227;  
        }
        ?>
      </div>
    </td>
    <td width="28">&nbsp;</td>
    <td width="185"> 
      <div class="coin5" > 
        <?php	echo $clubA3229; ?>
      </div>
    </td>
    <td width="44"> 
      <div class="coin5" > 
        <?php if ($A3229+$A3230==0)
		echo "-";
		else
		{
		 echo $A3229; 
        }
        ?>
      </div>
    </td>
    <td width="21">&nbsp;</td>
    <td width="177"> 
      <div class="coin5" > 
        <?php	echo $clubA3231; ?>
      </div>
    </td>
    <td width="43"> 
      <div class="coin5" > 
        <?php if ($A3231+$A3232==0)
		echo "-";
		else
		{
		 echo $A3231; 
        }
        ?>
      </div>
    </td>
    <td width="24">&nbsp;</td>
    <td width="190"> 
      <div class="coin5" > 
        <?php	echo $clubA3233; ?>
      </div>
    </td>
    <td width="38"> 
      <div class="coin5" > 
        <?php if ($A3233+$A3234==0)
		echo "-";
		else
		{
		 echo $A3233;  
        }
        ?>
      </div>
    </td>
    <td width="13">&nbsp;</td>
    <td width="200"> 
      <div class="coin5" > 
        <?php	echo $clubA3235; ?>
      </div>
    </td>
    <td width="36"> 
      <div class="coin5" > 
        <?php if ($A3235+$A3236==0)
		echo "-";
		else
		{
		 echo $A3235;  
        }
        ?>
      </div>
    </td>
    <td width="36">&nbsp;</td>
  </tr>
  <tr> 
    <td width="190"> 
      <div class="coin5" > 
        <?php	echo $clubA3226; ?>
      </div>
    </td>
    <td width="33"> 
      <div class="coin5" > 
        <?php if ($A3225+$A3226==0)
		echo "-";
		else
		{
		 echo $A3226; 
        }
        ?>
      </div>
    </td>
    <td width="36">&nbsp;</td>
    <td width="189"> 
      <div class="coin5" > 
        <?php	echo $clubA3228; ?>
      </div>
    </td>
    <td width="43"> 
      <div class="coin5" > 
        <?php if ($A3227+$A3228==0)
		echo "-";
		else
		{
		 echo $A3228;  
        }
        ?>
      </div>
    </td>
    <td width="28">&nbsp;</td>
    <td width="185"> 
      <div class="coin5" > 
        <?php	echo $clubA3230; ?>
      </div>
    </td>
    <td width="44"> 
      <div class="coin5" > 
        <?php if ($A3229+$A3230==0)
		echo "-";
		else
		{
		 echo $A3230; 
        }
        ?>
      </div>
    </td>
    <td width="21">&nbsp;</td>
    <td width="177"> 
      <div class="coin5" > 
        <?php	echo $clubA3232; ?>
      </div>
    </td>
    <td width="43"> 
      <div class="coin5" > 
        <?php if ($A3231+$A3232==0)
		echo "-";
		else
		{
		 echo $A3232; 
        }
        ?>
      </div>
    </td>
    <td width="24">&nbsp;</td>
    <td width="190"> 
      <div class="coin5" > 
        <?php	echo $clubA3234; ?>
      </div>
    </td>
    <td width="38"> 
      <div class="coin5" > 
        <?php if ($A3233+$A3234==0)
		echo "-";
		else
		{
		 echo $A3234;  
        }
        ?>
      </div>
    </td>
    <td width="13">&nbsp;</td>
    <td width="200"> 
      <div class="coin5" > 
        <?php	echo $clubA3236; ?>
      </div>
    </td>
    <td width="36"> 
      <div class="coin5" > 
        <?php if ($A3235+$A3236==0)
		echo "-";
		else
		{
		 echo $A3236;  
        }
        ?>
      </div>
    </td>
    <td width="36">&nbsp;</td>
  </tr>
  <tr> 
    <td width="190">&nbsp;</td>
    <td width="33">&nbsp;</td>
    <td width="36">&nbsp;</td>
    <td width="189">&nbsp;</td>
    <td width="43">&nbsp;</td>
    <td width="28">&nbsp;</td>
    <td width="185">&nbsp;</td>
    <td width="44">&nbsp;</td>
    <td width="21">&nbsp;</td>
    <td width="177">&nbsp;</td>
    <td width="43">&nbsp;</td>
    <td width="24">&nbsp;</td>
    <td width="190">&nbsp;</td>
    <td width="38">&nbsp;</td>
    <td width="13">&nbsp;</td>
    <td width="200">&nbsp;</td>
    <td width="36">&nbsp;</td>
    <td width="36">&nbsp;</td>
  </tr>
  <tr> 
    <td width="190">&nbsp;</td>
    <td width="33">&nbsp;</td>
    <td width="36">&nbsp;</td>
    <td width="189">&nbsp;</td>
    <td width="43">&nbsp;</td>
    <td width="28">&nbsp;</td>
    <td width="185">&nbsp;</td>
    <td width="44">&nbsp;</td>
    <td width="21">&nbsp;</td>
    <td width="177">&nbsp;</td>
    <td width="43">&nbsp;</td>
    <td width="24">&nbsp;</td>
    <td width="190">&nbsp;</td>
    <td width="38">&nbsp;</td>
    <td width="13">&nbsp;</td>
    <td width="200">&nbsp;</td>
    <td width="36">&nbsp;</td>
    <td width="36">&nbsp;</td>
  </tr>
</table>
</body>
</html>

