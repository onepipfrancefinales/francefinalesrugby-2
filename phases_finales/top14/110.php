<?php
$variable_1 = $_GET['variable_1']; 
//$champ = $_GET['champ']; 
$annee=$variable_1;
$annee2=$annee.''."_2";
$id = 110;
?>
<head> 
 <link rel="stylesheet" type="text/css" href="../2.css">


<meta name="description"
content="tous les champions de france de rugby, ffr,FFR, presentation de tous les clubs de rugby francais, Champions des differents comités territoriaux, Tous les championnats de rugby, fédérale 2, fédérale 3, fédérale 1, top 14.">
<meta name="keywords"
content="Brennus,Comite Midi Pyrenees de Rugby,ffr,FFR,Comite territoriaux de rugby,Stade toulousain,Bourgogne,FanceFinalesRugby,Rugby,championnat de france de rugby,Française,honneur,promotion honneur,Sport,Ballon,Ovale,">
<meta name="classification" content="Sport,Rugby">
<meta name="resource-type" content="document">
<meta name="copyright" content="Comite Midi Pyrenees de Rugby">
<meta name="author" content="Equipe Onepip">
<meta name="robots" content="All">
<title>Top14</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

</head>



<?php


require ("../fonctionsPhasesFinalesPro.php");


?>


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
<body link="#FFFFFF">
<table width="1490" border="0">
  <tr> 
    <td colspan="12" bgcolor="#FFCC66"> 
      <div align="center"><i><b> Top 14 Top 14 Top 14 Top 14 Top 14 Top 14 Top 
        14 Top 14 Top 14 Top 14 Top 14 Top 14 Top 14 Top 14 Top 14 Top 14 Top 
        14 Top 14 Top 14 Top 14 Top 14 Top 14 Top 14 Top 14 Top 14 Top 14 Top 
        14 Top 14</b></i></div>
    </td>
  </tr>
  <tr> 
    <td width="121">&nbsp;</td>
    <td colspan="2">&nbsp;</td>
    <td width="158">&nbsp;</td>
    <td width="83">&nbsp;</td>
    <td width="269">&nbsp;</td>
    <td colspan="4">&nbsp;</td>
    <td width="37">&nbsp;</td>
    <td width="118">&nbsp;</td>
  </tr>
  <tr> 
    <td colspan="4" bgcolor="#000000"> 
      <div align="center"><font face="Lucida Handwriting" size="4" color="#FFFFFF"><b>SAISON 
        REGULIERE 
        <?php $annee=$_GET['variable_1'];?>
        <?php echo $annee;?>
        </b></font></div>
    </td>
    <td width="83">&nbsp;</td>
    <td colspan="6" bgcolor="#000000"> 
      <div align="center"><font face="Lucida Handwriting" size="4"><b><font color="#FFFFFF">PHASE 
        FINALE</font></b></font> </div>
    </td>
    <td width="118">&nbsp;</td>
  </tr>
  <tr> 
    <td width="121">&nbsp;</td>
    <td width="131">&nbsp;</td>
    <td width="131">&nbsp;</td>
    <td width="158">&nbsp;</td>
    <td width="83">&nbsp;</td>
    <td width="269">&nbsp;</td>
    <td width="41">&nbsp;</td>
    <td width="85">&nbsp;</td>
    <td width="21">&nbsp;</td>
    <td width="245">&nbsp;</td>
    <td width="37">&nbsp;</td>
    <td width="118">&nbsp;</td>
  </tr>
  <tr> 
    <td colspan="4" rowspan="14" valign="top"> 
      <?php 

{print("<img src=\"classement/top14_$annee.jpg\" border=\"0\">");}
?>
    </td>
    <td width="83">&nbsp;</td>
    <td colspan="6"> 
      <div id="coin5" >Barrages</div>
    </td>
    <td width="118">&nbsp;</td>
  </tr>
  <tr> 
    <td width="83">&nbsp;</td>
    <td width="269">&nbsp;</td>
    <td width="41">&nbsp;</td>
    <td width="85">&nbsp;</td>
    <td width="21">&nbsp;</td>
    <td width="245">&nbsp;</td>
    <td width="37">&nbsp;</td>
    <td width="118">&nbsp;</td>
  </tr>
  <tr> 
    <td width="83">&nbsp; </td>
    <td width="269"> 
      <div id="coin4" > 
        <?php
	
	echo $clubA4001;
	 ?>
      </div>
    </td>
    <td width="41"> 
      <div id="coin4" > 
        <?php
	if ($A4001 + $A4002 == 0)
	echo "-";
	else
	echo $A4001	;
	 ?>
      </div>
    </td>
    <td width="85">&nbsp;</td>
    <td width="21">&nbsp;</td>
    <td width="245"> 
      <div id="coin4" > 
        <?php
	
	echo $clubA4003;
	 ?>
      </div>
    </td>
    <td width="37"> 
      <div id="coin4" > 
        <?php
	if ($A4003 + $A4004 == 0)
	echo "-";
	else
	echo $A4003;
	 ?>
      </div>
    </td>
    <td width="118">&nbsp;</td>
  </tr>
  <tr> 
    <td width="83">&nbsp;</td>
    <td width="269"> 
      <div id="coin4" > 
        <?php
	
	echo $clubA4002;
	 ?>
      </div>
    </td>
    <td width="41"> 
      <div id="coin4" > 
        <?php
	if ($A4001 + $A4002 == 0)
	echo "-";
	else
	echo $A4002;
	 ?>
      </div>
    </td>
    <td width="85">&nbsp;</td>
    <td width="21">&nbsp;</td>
    <td width="245"> 
      <div id="coin4" > 
        <?php
	
	echo $clubA4004;
	 ?>
      </div>
    </td>
    <td width="37"> 
      <div id="coin4" > 
        <?php
	if ($A4003 + $A4003 == 0)
	echo "-";
	else
	echo $A4004;
	 ?>
      </div>
    </td>
    <td width="118">&nbsp;</td>
  </tr>
  <tr> 
    <td width="83">&nbsp;</td>
    <td width="269">&nbsp;</td>
    <td width="41">&nbsp;</td>
    <td width="85">&nbsp;</td>
    <td width="21">&nbsp;</td>
    <td width="245">&nbsp;</td>
    <td width="37">&nbsp;</td>
    <td width="118">&nbsp;</td>
  </tr>
  <tr> 
    <td width="83">&nbsp;</td>
    <td width="269">&nbsp;</td>
    <td width="41">&nbsp;</td>
    <td width="85">&nbsp;</td>
    <td width="21">&nbsp;</td>
    <td width="245">&nbsp;</td>
    <td width="37">&nbsp;</td>
    <td width="118">&nbsp;</td>
  </tr>
  <tr> 
    <td width="83">&nbsp;</td>
    <td width="269"> 
      <div id="coin5" >Demi finale</div>
    </td>
    <td width="41">&nbsp;</td>
    <td width="85">&nbsp;</td>
    <td width="21">&nbsp;</td>
    <td width="245"> 
      <div id="coin5" >Finale</div>
    </td>
    <td width="37">&nbsp;</td>
    <td width="118">&nbsp;</td>
  </tr>
  <tr> 
    <td width="83">&nbsp;</td>
    <td width="269">&nbsp;</td>
    <td width="41">&nbsp;</td>
    <td width="85">&nbsp;</td>
    <td width="21">&nbsp;</td>
    <td width="245">&nbsp;</td>
    <td width="37">&nbsp;</td>
    <td width="118">&nbsp;</td>
  </tr>
  <tr> 
    <td width="83" height="8">&nbsp;</td>
    <td width="269" height="8"> 
      <div id="coin4" > 
        <?php
	
	echo $clubA2001;
	 ?>
      </div>
    </td>
    <td width="41" height="8"> 
      <div id="coin4" > 
        <?php
	if ($A4001 + $A4002 == 0)
	echo "-";
	else
	echo $A2001	;
	 ?>
      </div>
    </td>
    <td rowspan="6" width="85"><img src="../../images/accolade.png" width="8" height="120"></td>
    <td width="21" height="8">&nbsp;</td>
    <td width="245" height="8">&nbsp;</td>
    <td width="37" height="8">&nbsp;</td>
    <td width="118" height="8">&nbsp;</td>
  </tr>
  <tr> 
    <td width="83" height="5">&nbsp;</td>
    <td width="269" height="5"> 
      <div id="coin4" > 
        <?php
	if ($A4001 + $A4002 == 0)
	echo "-";
	else
	echo $clubA2002;
	 ?>
      </div>
    </td>
    <td width="41" height="5"> 
      <div id="coin4" > 
        <?php
	if ($A4001 + $A4002 == 0)
	echo "-";
	else
	echo $A2002;
	 ?>
      </div>
    </td>
    <td width="21" height="5">&nbsp;</td>
    <td width="245" height="5"> 
      <div id="coin4" > 
        <?php
	if ($A2001 + $A2002 == 0)
	echo "-";
	else
	echo $clubA1001;
	 ?>
      </div>
    </td>
    <td width="37" height="5"> 
      <div id="coin4" > 
        <?php
	if ($A1001 + $A1002 == 0)
	echo "-";
	else
	echo $A1001	;
	 ?>
      </div>
    </td>
    <td width="118" height="5">&nbsp;</td>
  </tr>
  <tr> 
    <td width="83" height="10">&nbsp;</td>
    <td width="269" height="10">&nbsp;</td>
    <td width="41" height="10">&nbsp;</td>
    <td width="21" height="10">&nbsp;</td>
    <td width="245" height="10"> 
      <div id="coin4" > 
        <?php
	if ($A2003 + $A2004 == 0)
	echo "-";
	else
	echo $clubA1002;
	 ?>
      </div>
    </td>
    <td width="37" height="10"> 
      <div id="coin4" > 
        <?php
	if ($A1001 + $A1002 == 0)
	echo "-";
	else
	echo $A1002;
	 ?>
      </div>
    </td>
    <td width="118" height="10">&nbsp;</td>
  </tr>
  <tr> 
    <td width="83" height="20">&nbsp;</td>
    <td width="269" height="20">&nbsp;</td>
    <td width="41" height="20">&nbsp;</td>
    <td width="21" height="20">&nbsp;</td>
    <td width="245" height="20">&nbsp;</td>
    <td width="37" height="20">&nbsp;</td>
    <td width="118" height="20">&nbsp;</td>
  </tr>
  <tr> 
    <td width="83">&nbsp;</td>
    <td width="269"> 
      <div id="coin4" > 
        <?php
	
	echo $clubA2003;
	 ?>
      </div>
    </td>
    <td width="41"> 
      <div id="coin4" > 
        <?php
	if ($A4003 + $A4004 == 0)
	echo "-";
	else
	echo $A2003;
	 ?>
      </div>
    </td>
    <td colspan="4" rowspan="2"> 
      <div align="center"><b><font size="5">Champion de France</font><font size="5"> 
        <?php
	
	echo $annee;
	 ?>
        </font></b> </div>
    </td>
  </tr>
  <tr> 
    <td width="83" height="5">&nbsp;</td>
    <td width="269" height="5"> 
      <div id="coin4" > 
        <?php
		if ($A4003 + $A4004 == 0)
	echo "-";
	else
	
	echo $clubA2004;
	 ?>
      </div>
    </td>
    <td width="41" height="5"> 
      <div id="coin4" > 
        <?php
	if ($A4003 + $A4004 == 0)
	echo "-";
	else
	echo $A2004;
	 ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td colspan="4" valign="top">&nbsp;</td>
    <td width="83">&nbsp;</td>
    <td width="269">&nbsp;</td>
    <td width="41">&nbsp;</td>
    <td width="85">&nbsp;</td>
    <td rowspan="3" colspan="4" bgcolor="#FFFF00"> 
      <div align="center"><b><font color="#FF0000" size="5" face="Arial, Helvetica, sans-serif"> 
        <?php 
		
		echo $clubA1000;
		?>
        </font></b></div>
    </td>
  </tr>
  <tr> 
    <td colspan="4" valign="top">&nbsp;</td>
    <td width="83">&nbsp;</td>
    <td width="269">&nbsp;</td>
    <td width="41">&nbsp;</td>
    <td width="85">&nbsp;</td>
  </tr>
  <tr> 
    <td colspan="4" valign="top">&nbsp;</td>
    <td width="83">&nbsp;</td>
    <td width="269">&nbsp;</td>
    <td width="41">&nbsp;</td>
    <td width="85">&nbsp;</td>
  </tr>
  <tr> 
    <td colspan="4" valign="top">&nbsp;</td>
    <td width="83">&nbsp;</td>
    <td width="269">&nbsp;</td>
    <td width="41">&nbsp;</td>
    <td width="85">&nbsp;</td>
    <td width="21">&nbsp;</td>
    <td width="245">&nbsp;</td>
    <td width="37">&nbsp;</td>
    <td width="118">&nbsp;</td>
  </tr>
  <tr> 
    <td colspan="12" height="22" bgcolor="#FFCC66"> 
      <div align="center"> 
        <?php
  
   include("../bas.php");
    ?>
      </div>
    </td>
  </tr>
</table>
