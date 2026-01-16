<html>
<?php
$variable_1 = $_GET['variable_1']; 
$annee=$variable_1;
$annee2=$annee.''."_2";
$id = 990; 
?>

<head>
<title>Untitled Document</title>

<link rel="stylesheet" type="text/css" href="2.css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script language="JavaScript">
<!--
function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);
// -->
</script>
</head>

<?php

require ("fonctions_phases_finales.php");
?>




<body bgcolor="#EAECEB" text="#000000">
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
  </b></font> </p>
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
      <div id="cal"><b><font color="#000000" face="Arial, Helvetica, sans-serif" size="5">Barrages 
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
    <td colspan="17" bgcolor="#FF9933"><b></b> 
      <div align="center"><b><font color="#000000" face="Arial, Helvetica, sans-serif" size="4">Honneur</font></b></div>
    </td>
    <td width="40">&nbsp;</td>
  </tr>
  <tr> 
    <td width="186"> 
      <div id="coin4" > 
        <?php	echo $clubA3201; ?>
      </div>
    </td>
    <td width="42"> 
      <div id="coin4" > 
        <?php if ($A3201+$A3202==0)
		echo "-";
		else
		{
		 echo $A3201;
        }
        ?>
      </div>
    </td>
    <td width="16">&nbsp;</td>
    <td width="204"> 
      <div id="coin4" > 
        <?php	echo $clubA3203; ?>
      </div>
    </td>
    <td width="40"> 
      <div id="coin4" > 
        <?php if ($A3203+$A3204==0)
		echo "-";
		else
		{
		 echo $A3203;  
        }
        ?>
      </div>
    </td>
    <td width="17">&nbsp;</td>
    <td width="194"> 
      <div id="coin4" > 
        <?php	echo $clubA3205; ?>
      </div>
    </td>
    <td width="45"> 
      <div id="coin4" > 
        <?php if ($A3205+$A3206==0)
		echo "-";
		else
		{
		 echo $A3205; 
        }
        ?>
      </div>
    </td>
    <td width="11">&nbsp;</td>
    <td width="212"> 
      <div id="coin4" > 
        <?php	echo $clubA3207; ?>
      </div>
    </td>
    <td width="25"> 
      <div id="coin4" > 
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
      <div id="coin4" > 
        <?php	echo $clubA3209; ?>
      </div>
    </td>
    <td width="42"> 
      <div id="coin4" > 
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
      <div id="coin4" > 
        <?php	echo $clubA3211; ?>
      </div>
    </td>
    <td width="45"> 
      <div id="coin4" > 
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
      <div id="coin4" > 
        <?php	echo $clubA3202; ?>
      </div>
    </td>
    <td width="42"> 
      <div id="coin4" > 
        <?php if ($A3201+$A3202==0)
		echo "-";
		else
		{
		echo $A3202; 
        }
        ?>
      </div>
    </td>
    <td width="16">&nbsp;</td>
    <td width="204"> 
      <div id="coin4" > 
        <?php	echo $clubA3204; ?>
      </div>
    </td>
    <td width="40"> 
      <div id="coin4" >
        <?php if ($A3203+$A3204==0)
		echo "-";
		else
		{
		 echo $A3204;  
        }
        ?>
      </div>
    </td>
    <td width="17">&nbsp;</td>
    <td width="194"> 
      <div id="coin4" > 
        <?php	echo $clubA3206; ?>
      </div>
    </td>
    <td width="45"> 
      <div id="coin4" >
        <?php if ($A3205+$A3206==0)
		echo "-";
		else
		{
		 echo $A3206; 
        }
        ?>
      </div>
    </td>
    <td width="11">&nbsp;</td>
    <td width="212"> 
      <div id="coin4" > 
        <?php	echo $clubA3208; ?>
      </div>
    </td>
    <td width="25"> 
      <div id="coin4" >
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
      <div id="coin4" > 
        <?php	echo $clubA3210; ?>
      </div>
    </td>
    <td width="42"> 
      <div id="coin4" >
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
      <div id="coin4" > 
        <?php	echo $clubA3212; ?>
      </div>
    </td>
    <td width="45"> 
      <div id="coin4" >
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
    <td colspan="17" bgcolor="#FF9933"> 
      <div align="center"><b></b></div>
      <div align="center"><font color="#000000"><b><font face="Arial, Helvetica, sans-serif" size="4">Promotion 
        Honneur</font></b></font></div>
    </td>
    <td width="40">&nbsp;</td>
  </tr>
  <tr> 
    <td width="186"> 
      <div id="coin5" > 
        <?php	echo $clubA3213; ?>
      </div>
    </td>
    <td width="42"> 
      <div id="coin5" > 
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
      <div id="coin5" > 
        <?php	echo $clubA3215; ?>
      </div>
    </td>
    <td width="40"> 
      <div id="coin5" > 
        <?php if ($A3215+$A3216==0)
		echo "-";
		else
		{
		 echo $A3215; 
        }
        ?>
      </div>
    </td>
    <td width="17">&nbsp;</td>
    <td width="194"> 
      <div id="coin5" > 
        <?php	echo $clubA3217; ?>
      </div>
    </td>
    <td width="45"> 
      <div id="coin5" > 
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
      <div id="coin5" > 
        <?php	echo $clubA3219; ?>
      </div>
    </td>
    <td width="25"> 
      <div id="coin5" > 
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
      <div id="coin5" > 
        <?php	echo $clubA3221; ?>
      </div>
    </td>
    <td width="42"> 
      <div id="coin5" > 
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
      <div id="coin5" > 
        <?php	echo $clubA3223; ?>
      </div>
    </td>
    <td width="45"> 
      <div id="coin5" > 
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
      <div id="coin5" > 
        <?php	echo $clubA3214; ?>
      </div>
    </td>
    <td width="42"> 
      <div id="coin5" >
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
      <div id="coin5" > 
        <?php	echo $clubA3216; ?>
      </div>
    </td>
    <td width="40"> 
      <div id="coin5" >
        <?php if ($A3215+$A3216==0)
		echo "-";
		else
		{
		 echo $A3216; 
        }
        ?>
      </div>
    </td>
    <td width="17">&nbsp;</td>
    <td width="194"> 
      <div id="coin5" > 
        <?php	echo $clubA3218; ?>
      </div>
    </td>
    <td width="45"> 
      <div id="coin5" > 
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
      <div id="coin5" > 
        <?php	echo $clubA3220; ?>
      </div>
    </td>
    <td width="25"> 
      <div id="coin5" >
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
      <div id="coin5" > 
        <?php	echo $clubA3222; ?>
      </div>
    </td>
    <td width="42"> 
      <div id="coin5" >
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
      <div id="coin5" > 
        <?php	echo $clubA3224; ?>
      </div>
    </td>
    <td width="45"> 
      <div id="coin5" >
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
    <td colspan="17" bgcolor="#FF9933"><b></b> 
      <div align="center"><b><font color="#000000" face="Arial, Helvetica, sans-serif" size="4">1re 
        S&eacute;rie</font></b></div>
    </td>
    <td width="40">&nbsp;</td>
  </tr>
  <tr> 
    <td width="186"> 
      <div id="coin4" > 
        <?php	echo $clubA3225; ?>
      </div>
    </td>
    <td width="42"> 
      <div id="coin4" > 
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
      <div id="coin4" > 
        <?php	echo $clubA3227; ?>
      </div>
    </td>
    <td width="40"> 
      <div id="coin4" > 
        <?php if ($A3227+$A3228==0)
		echo "-";
		else
		{
		 echo $A3227;  
        }
        ?>
      </div>
    </td>
    <td width="17">&nbsp;</td>
    <td width="194"> 
      <div id="coin4" > 
        <?php	echo $clubA3229; ?>
      </div>
    </td>
    <td width="45"> 
      <div id="coin4" > 
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
      <div id="coin4" > 
        <?php	echo $clubA3231; ?>
      </div>
    </td>
    <td width="25"> 
      <div id="coin4" > 
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
      <div id="coin4" > 
        <?php	echo $clubA3233; ?>
      </div>
    </td>
    <td width="42"> 
      <div id="coin4" > 
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
      <div id="coin4" > 
        <?php	echo $clubA3235; ?>
      </div>
    </td>
    <td width="45"> 
      <div id="coin4" > 
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
      <div id="coin4" > 
        <?php	echo $clubA3226; ?>
      </div>
    </td>
    <td width="42" height="17"> 
      <div id="coin4" >
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
      <div id="coin4" > 
        <?php	echo $clubA3228; ?>
      </div>
    </td>
    <td width="40" height="17"> 
      <div id="coin4" >
        <?php if ($A3227+$A3228==0)
		echo "-";
		else
		{
		 echo $A3228;  
        }
        ?>
      </div>
    </td>
    <td width="17" height="17">&nbsp;</td>
    <td width="194" height="17"> 
      <div id="coin4" > 
        <?php	echo $clubA3230; ?>
      </div>
    </td>
    <td width="45" height="17"> 
      <div id="coin4" >
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
      <div id="coin4" > 
        <?php	echo $clubA3232; ?>
      </div>
    </td>
    <td width="25" height="17"> 
      <div id="coin4" >
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
      <div id="coin4" > 
        <?php	echo $clubA3234; ?>
      </div>
    </td>
    <td width="42" height="17"> 
      <div id="coin4" >
        <?php if ($A3233+$A3234==0)
		echo "-";
		else
		{
		 echo $A3234;  
        }
        ?>
      </div>
    </td>
    <td width="26" height="17">&nbsp;</td>
    <td width="190" height="17"> 
      <div id="coin4" > 
        <?php	echo $clubA3236; ?>
      </div>
    </td>
    <td width="45" height="17"> 
      <div id="coin4" >
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
</body>
</html>
