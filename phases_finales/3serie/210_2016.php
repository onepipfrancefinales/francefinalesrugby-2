<?php
$variable_1 = $_GET['variable_1'];  
$annee=$variable_1;
$annee2=$annee.''."_2";
$id = 210; 
?><head>

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
<title>1re Série</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

</head>
<?php


require ("../fonctions_phases_finales.php");


?>

 


<body bgcolor="#EAECEB">
<table width="1500" border="0" align="left" height="500" cellspacing="0">
  <tr> 
    <td height="20" bgcolor="#FFCC66" colspan="16"> 
      <div align="center"><i><b>3me S&eacute;rie 3me S&eacute;rie 3me S&eacute;rie 
        3me S&eacute;rie 3me S&eacute;rie 3me S&eacute;rie 3me S&eacute;rie 3me 
        S&eacute;rie 3me S&eacute;rie 3me S&eacute;rie 3me S&eacute;rie 3me S&eacute;rie 
        3me S&eacute;rie 3me S&eacute;rie 3me S&eacute;rie 3me S&eacute;rie 3me 
        S&eacute;rie 3me S&eacute;rie 3me S&eacute;rie 3me S&eacute;rie 3me S&eacute;rie 
        </b></i></div>
    </td>
  </tr>
  <tr> 
    <td width="198" height="13"> 
      <div id="cal"><a href="../pagebarrages.php?variable_1=<?php echo $annee;?>">Barrages 
        s&eacute;ries Territoriales</a></div>
    </td>
    <td width="36" height="13">&nbsp;</td>
    <td width="32" height="13">&nbsp;</td>
    <td width="198" height="13">&nbsp;</td>
    <td width="41" height="13">&nbsp;</td>
    <td width="22" height="13">&nbsp;</td>
    <td width="201" height="13">&nbsp;</td>
    <td width="31" height="13">&nbsp;</td>
    <td width="18" height="13">&nbsp;</td>
    <td width="201" align="left" height="13">&nbsp;</td>
    <td width="23" height="13">&nbsp;</td>
    <td width="11" height="13">&nbsp;</td>
    <td width="198" height="13">&nbsp;</td>
    <td width="21" height="13">&nbsp;</td>
    <td width="21" height="13">&nbsp;</td>
    <td width="21" height="13">&nbsp;</td>
  </tr>
  <tr> 
    <td width="198" height="13"> 
      <div id="coin5" >16me de finale</div>
    </td>
    <td width="36" height="13">&nbsp;</td>
    <td width="32" height="13">&nbsp;</td>
    <td width="198" height="13"> 
      <div id="coin5" >8me de finale</div>
    </td>
    <td width="41" height="13">&nbsp;</td>
    <td width="22" height="13">&nbsp;</td>
    <td width="201" height="13"> 
      <div id="coin5" >Quarts de finale</div>
    </td>
    <td width="31" height="13">&nbsp;</td>
    <td width="18" height="13">&nbsp;</td>
    <td width="201" align="left" height="13"> 
      <div id="coin5" >Demi finale</div>
    </td>
    <td width="23" height="13">&nbsp;</td>
    <td width="11" height="13">&nbsp;</td>
    <td width="198" height="13"> 
      <div id="coin5" >Finale</div>
    </td>
    <td width="21" height="13">&nbsp;</td>
    <td width="21" height="13">&nbsp;</td>
    <td width="21" height="13">&nbsp;</td>
  </tr>
  <tr> 
    <td width="198" height="13">&nbsp;</td>
    <td width="36" height="13">&nbsp;</td>
    <td width="32" height="13">&nbsp;</td>
    <td width="198" height="13">&nbsp;</td>
    <td width="41" height="13">&nbsp;</td>
    <td width="22" height="13">&nbsp;</td>
    <td width="201" height="13">&nbsp;</td>
    <td width="31" height="13">&nbsp;</td>
    <td width="18" height="13">&nbsp;</td>
    <td width="201" align="left" height="13">&nbsp;</td>
    <td width="23" height="13">&nbsp;</td>
    <td width="11" height="13">&nbsp;</td>
    <td width="198" height="13">&nbsp;</td>
    <td width="21" height="13">&nbsp;</td>
    <td width="21" height="13">&nbsp;</td>
    <td width="21" height="13">&nbsp;</td>
  </tr>
  <tr> 
    <td width="198" height="12"> 
      <div id="coin4" > 
        <?php
	
	echo $clubA1601;
	 ?>
      </div>
    </td>
    <td width="36" height="12"> 
      <div id="coin4" > 
        <?php 
	   if( $A1601+ $A1602>0)
	   echo $A1601; 
       else
	   echo "-";?>
      </div>
    </td>
    <td width="32" height="12">&nbsp;</td>
    <td width="198" height="12">&nbsp;</td>
    <td width="41" height="12">&nbsp;</td>
    <td width="22" height="12">&nbsp;</td>
    <td width="201" height="12">&nbsp;</td>
    <td width="31" height="12">&nbsp;</td>
    <td width="18" height="12">&nbsp;</td>
    <td width="201" align="left" height="12">&nbsp;</td>
    <td width="23" height="12">&nbsp;</td>
    <td width="11" height="12">&nbsp;</td>
    <td width="198" height="12">&nbsp;</td>
    <td width="21" height="12">&nbsp;</td>
    <td width="21" height="12">&nbsp;</td>
    <td width="21" height="12">&nbsp;</td>
  </tr>
  <tr> 
    <td width="198"> 
      <div id="coin4" > 
        <?php
	
	echo $clubA1602;
	 ?>
      </div>
    </td>
    <td width="36"> 
      <div id="coin4" > 
        <?php 
	   if( $A1601+ $A1602>0)
	   echo $A1602; 
       else
	   echo "-";?>
      </div>
    </td>
    <td width="32">&nbsp;</td>
    <td width="198"> 
      <div id="coin4" > 
        <?php
	
	echo $clubA8001;
	 ?>
      </div>
    </td>
    <td width="41"> 
      <div id="coin4" > 
        <?php	echo $A8001; ?>
      </div>
    </td>
    <td rowspan="6"><img src="../../images/accolade.png" width="8" height="127"></td>
    <td width="201">&nbsp;</td>
    <td width="31">&nbsp;</td>
    <td width="18">&nbsp;</td>
    <td width="201" align="left">&nbsp;</td>
    <td width="23">&nbsp;</td>
    <td width="11">&nbsp;</td>
    <td width="198">&nbsp;</td>
    <td width="21">&nbsp;</td>
    <td width="21">&nbsp;</td>
    <td width="21">&nbsp;</td>
  </tr>
  <tr> 
    <td width="198" height="16"> 
      <div id="coin4" > 
        <?php
	
	echo $clubA1603;
	?>
      </div>
    </td>
    <td width="36" height="16"> 
      <div id="coin4" > 
        <?php 
	   if( $A1603+ $A1604>0)
	   echo $A1603; 
       else
	   echo "-";?>
      </div>
    </td>
    <td width="32" height="16"> </td>
    <td width="198" height="16"> 
      <div id="coin4" > 
        <?php
	
	echo $clubA8002;
	 ?>
      </div>
    </td>
    <td width="41" height="16"> 
      <div id="coin4" > 
        <?php	echo $A8002; ?>
      </div>
    </td>
    <td width="201" height="16">&nbsp;</td>
    <td width="31" height="16">&nbsp;</td>
    <td width="18" height="16">&nbsp;</td>
    <td width="201" height="16" align="left">&nbsp;</td>
    <td width="23" height="16">&nbsp;</td>
    <td width="11" height="16">&nbsp;</td>
    <td width="198" height="16">&nbsp;</td>
    <td width="21" height="16">&nbsp;</td>
    <td width="21" height="16">&nbsp;</td>
    <td width="21" height="16">&nbsp;</td>
  </tr>
  <tr> 
    <td width="198" height="9"> 
      <div id="coin4" > 
        <?php

	echo $clubA1604;
	?>
      </div>
    </td>
    <td width="36" height="9"> 
      <div id="coin4" > 
        <?php 
	   if( $A1603+ $A1604>0)
	   echo $A1604; 
       else
	   echo "-";?>
      </div>
    </td>
    <td width="32" height="9">&nbsp;</td>
    <td width="198" height="9"> </td>
    <td width="41" height="9"> </td>
    <td width="201" height="9"> 
      <div id="coin4" > 
        <?php	echo $clubA4001; ?>
      </div>
    </td>
    <td width="31" height="9"> 
      <div id="coin4" > 
        <?php	echo $A4001; ?>
      </div>
    </td>
    <td rowspan="10" height="45"><img src="../../images/accolade.png" width="10" height="207"></td>
    <td width="201" align="left" height="9">&nbsp;</td>
    <td width="23" height="9">&nbsp;</td>
    <td width="11" height="9">&nbsp;</td>
    <td width="198" height="9">&nbsp;</td>
    <td width="21" height="9">&nbsp;</td>
    <td width="21" height="9">&nbsp;</td>
    <td width="21" height="9">&nbsp;</td>
  </tr>
  <tr> 
    <td width="198"> 
      <div id="coin5" > 
        <?php
	
	echo $clubA1605;
	?>
      </div>
    </td>
    <td width="36"> 
      <div id="coin5" > 
        <?php 
	   if( $A1605+ $A1606>0)
	   echo $A1605; 
       else
	   echo "-";?>
      </div>
    </td>
    <td width="32">&nbsp;</td>
    <td width="198">&nbsp;</td>
    <td width="41">&nbsp;</td>
    <td width="201"> 
      <div id="coin4" > 
        <?php	echo $clubA4002; ?>
      </div>
    </td>
    <td width="31"> 
      <div id="coin4" > 
        <?php	echo $A4002; ?>
      </div>
    </td>
    <td width="201" align="left">&nbsp;</td>
    <td width="23">&nbsp;</td>
    <td width="11">&nbsp;</td>
    <td width="198">&nbsp;</td>
    <td width="21">&nbsp;</td>
    <td width="21">&nbsp;</td>
    <td width="21">&nbsp;</td>
  </tr>
  <tr> 
    <td width="198"> 
      <div id="coin5" > 
        <?php
	
	echo $clubA1606;
	?>
      </div>
    </td>
    <td width="36"> 
      <div id="coin5" > 
        <?php 
	   if( $A1605+ $A1606>0)
	   echo $A1606; 
       else
	   echo "-";?>
      </div>
    </td>
    <td width="32">&nbsp;</td>
    <td width="198"> 
      <div id="coin4" > 
        <?php
	
	echo $clubA8003;
	 ?>
      </div>
    </td>
    <td width="41"> 
      <div id="coin4" > 
        <?php	echo $A8003; ?>
      </div>
    </td>
    <td width="201">&nbsp;</td>
    <td width="31">&nbsp;</td>
    <td width="201" align="left">&nbsp;</td>
    <td width="23">&nbsp;</td>
    <td width="11">&nbsp;</td>
    <td width="198">&nbsp;</td>
    <td width="21">&nbsp;</td>
    <td width="21">&nbsp;</td>
    <td width="21">&nbsp;</td>
  </tr>
  <tr> 
    <td width="198" height="11"> 
      <div id="coin5" > 
        <?php
	
	echo $clubA1607;
	 ?>
      </div>
    </td>
    <td width="36" height="11"> 
      <div id="coin5" > 
        <?php 
	   if( $A1607+ $A1608>0)
	   echo $A1607; 
       else
	   echo "-";?>
      </div>
    </td>
    <td width="32" height="11">&nbsp;</td>
    <td width="198" height="11"> 
      <div id="coin4" > 
        <?php
	
	echo $clubA8004;
	 ?>
      </div>
    </td>
    <td width="41" height="11"> 
      <div id="coin4" > 
        <?php	echo $A8004; ?>
      </div>
    </td>
    <td width="201" height="11">&nbsp;</td>
    <td width="31" height="11">&nbsp;</td>
    <td width="201" height="11" align="left">&nbsp;</td>
    <td width="23" height="11">&nbsp;</td>
    <td width="11" height="11">&nbsp;</td>
    <td width="198" height="11">&nbsp;</td>
    <td width="21" height="11">&nbsp;</td>
    <td width="21" height="11">&nbsp;</td>
    <td width="21" height="11">&nbsp;</td>
  </tr>
  <tr> 
    <td width="198"> 
      <div id="coin5" > 
        <?php
	
	echo $clubA1608;
	 ?>
      </div>
    </td>
    <td width="36"> 
      <div id="coin5" > 
        <?php 
	   if( $A1607+ $A1608>0)
	   echo $A1608; 
       else
	   echo "-";?>
      </div>
    </td>
    <td width="32">&nbsp;</td>
    <td width="198">&nbsp;</td>
    <td width="41">&nbsp;</td>
    <td width="22">&nbsp;</td>
    <td width="201">&nbsp;</td>
    <td width="31">&nbsp;</td>
    <td width="201" align="left"> 
      <div id="coin4" > 
        <?php	echo $clubA2001; ?>
      </div>
    </td>
    <td width="23"> 
      <div id="coin4" > 
        <?php	echo $A2001; ?>
      </div>
    </td>
    <td rowspan="18"><img src="../../images/accolade.png" width="10" height="383"></td>
    <td width="198">&nbsp;</td>
    <td width="21">&nbsp;</td>
    <td width="21">&nbsp;</td>
    <td width="21">&nbsp;</td>
  </tr>
  <tr> 
    <td width="198"> 
      <div id="coin4" > 
        <?php	echo $clubA1609; ?>
      </div>
    </td>
    <td width="36"> 
      <div id="coin4" > 
        <?php	echo $A1609; ?>
      </div>
    </td>
    <td width="32">&nbsp;</td>
    <td width="198">&nbsp;</td>
    <td width="41">&nbsp;</td>
    <td width="22">&nbsp;</td>
    <td width="201">&nbsp;</td>
    <td width="31">&nbsp;</td>
    <td width="201"> 
      <div id="coin4" > 
        <?php	echo $clubA2002; ?>
      </div>
    </td>
    <td width="23"> 
      <div id="coin4" > 
        <?php	echo $A2002; ?>
      </div>
    </td>
    <td width="198">&nbsp;</td>
    <td width="21">&nbsp;</td>
    <td width="21">&nbsp;</td>
    <td width="21">&nbsp;</td>
  </tr>
  <tr> 
    <td width="198"> 
      <div id="coin4" > 
        <?php	echo $clubA1610; ?>
      </div>
    </td>
    <td width="36"> 
      <div id="coin4" > 
        <?php	echo $A1610; ?>
      </div>
    </td>
    <td width="32">&nbsp;</td>
    <td width="198"> 
      <div id="coin4" > 
        <?php	echo $clubA8005; ?>
      </div>
    </td>
    <td width="41"> 
      <div id="coin4" > 
        <?php	echo $A8005; ?>
      </div>
    </td>
    <td rowspan="6"><img src="../../images/accolade.png" width="8" height="127"></td>
    <td width="201">&nbsp;</td>
    <td width="31">&nbsp;</td>
    <td width="201" align="left">&nbsp;</td>
    <td width="23">&nbsp;</td>
    <td width="198">&nbsp;</td>
    <td width="21">&nbsp;</td>
    <td width="21">&nbsp;</td>
    <td width="21">&nbsp;</td>
  </tr>
  <tr> 
    <td width="198" height="25"> 
      <div id="coin4" > 
        <?php	echo $clubA1611; ?>
      </div>
    </td>
    <td width="36" height="25"> 
      <div id="coin4" > 
        <?php	echo $A1611; ?>
      </div>
    </td>
    <td width="32" height="25"> </td>
    <td width="198" height="25"> 
      <div id="coin4" > 
        <?php	echo $clubA8006; ?>
      </div>
    </td>
    <td width="41" height="25"> 
      <div id="coin4" > 
        <?php	echo $A8006; ?>
      </div>
    </td>
    <td width="201" height="25">&nbsp;</td>
    <td width="31" height="25">&nbsp;</td>
    <td width="201" height="25" align="left">&nbsp;</td>
    <td width="23" height="25">&nbsp;</td>
    <td width="198" height="25">&nbsp;</td>
    <td width="21" height="25">&nbsp;</td>
    <td width="21" height="25">&nbsp;</td>
    <td width="21" height="25">&nbsp;</td>
  </tr>
  <tr> 
    <td width="198"> 
      <div id="coin4" > 
        <?php	echo $clubA1612; ?>
      </div>
    </td>
    <td width="36"> 
      <div id="coin4" > 
        <?php	echo $A1612; ?>
      </div>
    </td>
    <td width="32">&nbsp;</td>
    <td width="198"> </td>
    <td width="41"> </td>
    <td width="201"> 
      <div id="coin4" > 
        <?php	echo $clubA4003; ?>
      </div>
    </td>
    <td width="31"> 
      <div id="coin4" > 
        <?php	echo $A4003; ?>
      </div>
    </td>
    <td width="201" align="left">&nbsp;</td>
    <td width="23">&nbsp;</td>
    <td width="198">&nbsp;</td>
    <td width="21">&nbsp;</td>
    <td width="21">&nbsp;</td>
    <td width="21">&nbsp;</td>
  </tr>
  <tr> 
    <td width="198"> 
      <div id="coin5" > 
        <?php	echo $clubA1613; ?>
      </div>
    </td>
    <td width="36"> 
      <div id="coin5" > 
        <?php	echo $A1613; ?>
      </div>
    </td>
    <td width="32">&nbsp;</td>
    <td width="198">&nbsp;</td>
    <td width="41">&nbsp;</td>
    <td width="201"> 
      <div id="coin4" > 
        <?php	echo $clubA4004; ?>
      </div>
    </td>
    <td width="31"> 
      <div id="coin4" > 
        <?php	echo $A4004; ?>
      </div>
    </td>
    <td width="201" align="left">&nbsp;</td>
    <td width="23">&nbsp;</td>
    <td width="198">&nbsp;</td>
    <td width="21">&nbsp;</td>
    <td width="21">&nbsp;</td>
    <td width="21">&nbsp;</td>
  </tr>
  <tr> 
    <td width="198"> 
      <div id="coin5" > 
        <?php	echo $clubA1614; ?>
      </div>
    </td>
    <td width="36"> 
      <div id="coin5" > 
        <?php	echo $A1614; ?>
      </div>
    </td>
    <td width="32">&nbsp;</td>
    <td width="198"> 
      <div id="coin4" > 
        <?php	echo $clubA8007; ?>
      </div>
    </td>
    <td width="41"> 
      <div id="coin4" > 
        <?php	echo $A8007; ?>
      </div>
    </td>
    <td width="201">&nbsp;</td>
    <td width="31">&nbsp;</td>
    <td width="18">&nbsp;</td>
    <td width="201" align="left">&nbsp;</td>
    <td width="23">&nbsp;</td>
    <td width="198">&nbsp;</td>
    <td width="21">&nbsp;</td>
    <td width="21"> 
      <div align="center"><b><font face="Arial, Helvetica, sans-serif" size="2">T.a.b</font></b>.</div>
    </td>
    <td width="21">&nbsp;</td>
  </tr>
  <tr> 
    <td width="198" height="11"> 
      <div id="coin5" > 
        <?php	echo $clubA1615; ?>
      </div>
    </td>
    <td width="36" height="11"> 
      <div id="coin5" > 
        <?php	echo $A1615; ?>
      </div>
    </td>
    <td width="32" height="11">&nbsp;</td>
    <td width="198" height="11"> 
      <div id="coin4" > 
        <?php	echo $clubA8008; ?>
      </div>
    </td>
    <td width="41" height="11"> 
      <div id="coin4" > 
        <?php	echo $A8008; ?>
      </div>
    </td>
    <td width="201" height="11">&nbsp;</td>
    <td width="31" height="11">&nbsp;</td>
    <td width="18" height="11">&nbsp;</td>
    <td width="201" height="11" align="left">&nbsp;</td>
    <td width="23" height="11">&nbsp;</td>
    <td width="198" height="11"> 
      <div id="coin4" > 
        <?php	echo $clubA1001; ?>
      </div>
    </td>
    <td width="21" height="11">
      <div id="coin4" > 
        <?php	echo $A1001; ?>
      </div>
    </td>
    <td width="21" height="11"> 
      <div id="coin4" >2 </div>
    </td>
    <td width="21" height="11">&nbsp;</td>
  </tr>
  <tr> 
    <td width="198" height="20"> 
      <div id="coin5" > 
        <?php	echo $clubA1616; ?>
      </div>
    </td>
    <td width="36" height="20"> 
      <div id="coin5" > 
        <?php	echo $A1616; ?>
      </div>
    </td>
    <td width="32" height="20">&nbsp;</td>
    <td width="198" height="20">&nbsp;</td>
    <td width="41" height="20">&nbsp;</td>
    <td width="22" height="20">&nbsp;</td>
    <td width="201" height="20">&nbsp;</td>
    <td width="31" height="20">&nbsp;</td>
    <td width="18" height="20">&nbsp;</td>
    <td width="201" align="left" height="20">&nbsp;</td>
    <td width="23" height="20">&nbsp;</td>
    <td width="198" height="20"> 
      <div id="coin4" > 
        <?php	echo $clubA1002; ?>
      </div>
    </td>
    <td width="21" height="20"> 
      <div id="coin4" > 
        <?php	echo $A1002; ?>
      </div>
    </td>
    <td width="21" height="20"> 
      <div id="coin4" >4 </div>
    </td>
    <td width="21" height="20">&nbsp;</td>
  </tr>
  <tr> 
    <td width="198"> 
      <div id="coin4" > 
        <?php	echo $clubA1617; ?>
      </div>
    </td>
    <td width="36"> 
      <div id="coin4" > 
        <?php	echo $A1617; ?>
      </div>
    </td>
    <td width="32">&nbsp;</td>
    <td width="198">&nbsp;</td>
    <td width="41">&nbsp;</td>
    <td width="22">&nbsp;</td>
    <td width="201">&nbsp;</td>
    <td width="31">&nbsp;</td>
    <td width="18">&nbsp;</td>
    <td width="201" align="left">&nbsp;</td>
    <td width="23">&nbsp;</td>
    <td width="198">&nbsp;</td>
    <td width="21">&nbsp;</td>
    <td width="21">&nbsp;</td>
    <td width="21">&nbsp;</td>
  </tr>
  <tr> 
    <td width="198"> 
      <div id="coin4" > 
        <?php	echo $clubA1618; ?>
      </div>
    </td>
    <td width="36"> 
      <div id="coin4" > 
        <?php	echo $A1618; ?>
      </div>
    </td>
    <td width="32">&nbsp;</td>
    <td width="198"> 
      <div id="coin4" > 
        <?php	echo $clubA8009; ?>
      </div>
    </td>
    <td width="41"> 
      <div id="coin4" > 
        <?php	echo $A8009; ?>
      </div>
    </td>
    <td rowspan="6"><img src="../../images/accolade.png" width="8" height="127"></td>
    <td width="201">&nbsp;</td>
    <td width="31">&nbsp;</td>
    <td width="18">&nbsp;</td>
    <td width="201" align="left">&nbsp;</td>
    <td width="23">&nbsp;</td>
    <td colspan="4" rowspan="3"> 
      <div align="center"><font size="5"><b>Champion de France<br>
        3me S&eacute;rie 
        <?php echo $annee;?>
        </b></font></div>
    </td>
  </tr>
  <tr> 
    <td width="198" height="25"> 
      <div id="coin4" > 
        <?php	echo $clubA1619; ?>
      </div>
    </td>
    <td width="36" height="25"> 
      <div id="coin4" > 
        <?php	echo $A1619; ?>
      </div>
    </td>
    <td width="32" height="25"> </td>
    <td width="198" height="25"> 
      <div id="coin4" > 
        <?php	echo $clubA8010; ?>
      </div>
    </td>
    <td width="41" height="25"> 
      <div id="coin4" > 
        <?php	echo $A8010; ?>
      </div>
    </td>
    <td width="201" height="25">&nbsp;</td>
    <td width="31" height="25">&nbsp;</td>
    <td width="18" height="25">&nbsp;</td>
    <td width="201" height="25" align="left">&nbsp;</td>
    <td width="23" height="25">&nbsp;</td>
  </tr>
  <tr> 
    <td width="198"> 
      <div id="coin4" > 
        <?php	echo $clubA1620; ?>
      </div>
    </td>
    <td width="36"> 
      <div id="coin4" > 
        <?php	echo $A1620; ?>
      </div>
    </td>
    <td width="32">&nbsp;</td>
    <td width="198"> </td>
    <td width="41"> </td>
    <td width="201"> 
      <div id="coin4" > 
        <?php	echo $clubA4005; ?>
      </div>
    </td>
    <td width="31"> 
      <div id="coin4" > 
        <?php	echo $A4005; ?>
      </div>
    </td>
    <td rowspan="10"><img src="../../images/accolade.png" width="10" height="207"></td>
    <td width="201" align="left">&nbsp;</td>
    <td width="23">&nbsp;</td>
  </tr>
  <tr> 
    <td width="198" height="17"> 
      <div id="coin5" > 
        <?php	echo $clubA1621; ?>
      </div>
    </td>
    <td width="36" height="17"> 
      <div id="coin5" > 
        <?php	echo $A1621; ?>
      </div>
    </td>
    <td width="32" height="17">&nbsp;</td>
    <td width="198" height="17">&nbsp;</td>
    <td width="41" height="17">&nbsp;</td>
    <td width="201" height="17"> 
      <div id="coin4" > 
        <?php	echo $clubA4006; ?>
      </div>
    </td>
    <td width="31" height="17"> 
      <div id="coin4" > 
        <?php	echo $A4006; ?>
      </div>
    </td>
    <td width="201" align="left" height="17">&nbsp; </td>
    <td width="23" height="17">&nbsp;</td>
    <td colspan="4" height="50" rowspan="4" bgcolor="#FFFF00"> 
      <div align="center"><b><font color="#FF0000" size="5" face="Arial, Helvetica, sans-serif"> 
        <?php 
		
		echo $clubA1000;
		?>
        </font></b></div>
    </td>
  </tr>
  <tr> 
    <td width="198"> 
      <div id="coin5" > 
        <?php	echo $clubA1622; ?>
      </div>
    </td>
    <td width="36"> 
      <div id="coin5" > 
        <?php	echo $A1622; ?>
      </div>
    </td>
    <td width="32">&nbsp;</td>
    <td width="198"> 
      <div id="coin4" > 
        <?php	echo $clubA8011; ?>
      </div>
    </td>
    <td width="41"> 
      <div id="coin4" > 
        <?php	echo $A8011; ?>
      </div>
    </td>
    <td width="201">&nbsp;</td>
    <td width="31">&nbsp;</td>
    <td width="201" align="left">&nbsp;</td>
    <td width="23">&nbsp;</td>
  </tr>
  <tr> 
    <td width="198" height="11"> 
      <div id="coin5" > 
        <?php	echo $clubA1623; ?>
      </div>
    </td>
    <td width="36" height="11"> 
      <div id="coin5" > 
        <?php	echo $A1623; ?>
      </div>
    </td>
    <td width="32" height="11">&nbsp;</td>
    <td width="198" height="11"> 
      <div id="coin4" > 
        <?php	echo $clubA8012; ?>
      </div>
    </td>
    <td width="41" height="11"> 
      <div id="coin4" > 
        <?php	echo $A8012; ?>
      </div>
    </td>
    <td width="201" height="11">&nbsp;</td>
    <td width="31" height="11">&nbsp;</td>
    <td width="201" height="11" align="left">&nbsp;</td>
    <td width="23" height="11">&nbsp;</td>
  </tr>
  <tr> 
    <td width="198"> 
      <div id="coin5" > 
        <?php	echo $clubA1624; ?>
      </div>
    </td>
    <td width="36"> 
      <div id="coin5" > 
        <?php	echo $A1624; ?>
      </div>
    </td>
    <td width="32">&nbsp;</td>
    <td width="198">&nbsp;</td>
    <td width="41">&nbsp;</td>
    <td width="22">&nbsp;</td>
    <td width="201">&nbsp;</td>
    <td width="31">&nbsp;</td>
    <td width="201" align="left"> 
      <div id="coin4" > 
        <?php	echo $clubA2003; ?>
      </div>
    </td>
    <td width="23"> 
      <div id="coin4" > 
        <?php	echo $A2003; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="198"> 
      <div id="coin4" > 
        <?php	echo $clubA1625; ?>
      </div>
    </td>
    <td width="36"> 
      <div id="coin4" > 
        <?php	echo $A1625; ?>
      </div>
    </td>
    <td width="32">&nbsp;</td>
    <td width="198">&nbsp;</td>
    <td width="41">&nbsp;</td>
    <td width="22">&nbsp;</td>
    <td width="201">&nbsp;</td>
    <td width="31">&nbsp;</td>
    <td width="201" align="left"> 
      <div id="coin4" > 
        <?php	echo $clubA2004; ?>
      </div>
    </td>
    <td width="23"> 
      <div id="coin4" > 
        <?php	echo $A2004; ?>
      </div>
    </td>
    <td width="198">&nbsp;</td>
    <td width="21">&nbsp;</td>
    <td width="21">&nbsp;</td>
    <td width="21">&nbsp;</td>
  </tr>
  <tr> 
    <td width="198"> 
      <div id="coin4" > 
        <?php	echo $clubA1626; ?>
      </div>
    </td>
    <td width="36"> 
      <div id="coin4" > 
        <?php	echo $A1626; ?>
      </div>
    </td>
    <td width="32">&nbsp;</td>
    <td width="198"> 
      <div id="coin4" > 
        <?php	echo $clubA8013; ?>
      </div>
    </td>
    <td width="41"> 
      <div id="coin4" > 
        <?php	echo $A8013; ?>
      </div>
    </td>
    <td rowspan="6"><img src="../../images/accolade.png" width="8" height="127"></td>
    <td width="201">&nbsp;</td>
    <td width="31">&nbsp;</td>
    <td width="201" align="left">&nbsp;</td>
    <td width="23">&nbsp;</td>
    <td width="11">&nbsp;</td>
    <td width="198">&nbsp;</td>
    <td width="21">&nbsp;</td>
    <td width="21">&nbsp;</td>
    <td width="21">&nbsp;</td>
  </tr>
  <tr> 
    <td width="198" height="10"> 
      <div id="coin4" > 
        <?php	echo $clubA1627; ?>
      </div>
    </td>
    <td width="36" height="10"> 
      <div id="coin4" > 
        <?php	echo $A1627; ?>
      </div>
    </td>
    <td width="32" height="10"> </td>
    <td width="198" height="10"> 
      <div id="coin4" > 
        <?php	echo $clubA8014; ?>
      </div>
    </td>
    <td width="41" height="10"> 
      <div id="coin4" > 
        <?php	echo $A8014; ?>
      </div>
    </td>
    <td width="201" height="10">&nbsp;</td>
    <td width="31" height="10">&nbsp;</td>
    <td width="201" height="10" align="left">&nbsp;</td>
    <td width="23" height="10">&nbsp;</td>
    <td width="11" height="10">&nbsp;</td>
    <td width="198" height="10">&nbsp;</td>
    <td width="21" height="10">&nbsp;</td>
    <td width="21" height="10">&nbsp;</td>
    <td width="21" height="10">&nbsp;</td>
  </tr>
  <tr> 
    <td width="198"> 
      <div id="coin4" > 
        <?php	echo $clubA1628; ?>
      </div>
    </td>
    <td width="36"> 
      <div id="coin4" > 
        <?php	echo $A1628; ?>
      </div>
    </td>
    <td width="32">&nbsp;</td>
    <td width="198"> </td>
    <td width="41"> </td>
    <td width="201"> 
      <div id="coin4" > 
        <?php	echo $clubA4007; ?>
      </div>
    </td>
    <td width="31"> 
      <div id="coin4" > 
        <?php	echo $A4007; ?>
      </div>
    </td>
    <td width="201" align="left">&nbsp;</td>
    <td width="23">&nbsp;</td>
    <td width="11">&nbsp;</td>
    <td width="198">&nbsp;</td>
    <td width="21">&nbsp;</td>
    <td width="21">&nbsp;</td>
    <td width="21">&nbsp;</td>
  </tr>
  <tr> 
    <td width="198"> 
      <div id="coin5" > 
        <?php	echo $clubA1629; ?>
      </div>
    </td>
    <td width="36"> 
      <div id="coin5" > 
        <?php	echo $A1629; ?>
      </div>
    </td>
    <td width="32">&nbsp;</td>
    <td width="198">&nbsp;</td>
    <td width="41">&nbsp;</td>
    <td width="201"> 
      <div id="coin4" > 
        <?php	echo $clubA4008; ?>
      </div>
    </td>
    <td width="31"> 
      <div id="coin4" > 
        <?php	echo $A4008; ?>
      </div>
    </td>
    <td width="201" align="left">&nbsp;</td>
    <td width="23">&nbsp; </td>
    <td width="11">&nbsp;</td>
    <td width="198">&nbsp;</td>
    <td width="21">&nbsp;</td>
    <td width="21">&nbsp;</td>
    <td width="21">&nbsp;</td>
  </tr>
  <tr> 
    <td width="198" height="5"> 
      <div id="coin5" > 
        <?php	echo $clubA1630; ?>
      </div>
    </td>
    <td width="36" height="5"> 
      <div id="coin5" > 
        <?php	echo $A1630; ?>
      </div>
    </td>
    <td width="32" height="5">&nbsp;</td>
    <td width="198" valign="bottom" height="5"> 
      <div id="coin4" > 
        <?php	echo $clubA8015; ?>
      </div>
    </td>
    <td width="41" valign="bottom" height="5"> 
      <div id="coin4" > 
        <?php	echo $A8015; ?>
      </div>
    </td>
    <td width="201" height="5">&nbsp;</td>
    <td width="31" height="5">&nbsp;</td>
    <td width="18" height="5">&nbsp;</td>
    <td width="201" align="left" height="5">&nbsp;</td>
    <td width="23" height="5">&nbsp;</td>
    <td width="11" height="5">&nbsp;</td>
    <td width="198" height="5">&nbsp;</td>
    <td width="21" height="5">&nbsp;</td>
    <td width="21" height="5">&nbsp;</td>
    <td width="21" height="5">&nbsp;</td>
  </tr>
  <tr> 
    <td width="198" height="14" valign="top"> 
      <div id="coin5" > 
        <?php	echo $clubA1631; ?>
      </div>
    </td>
    <td width="36" height="14" valign="top"> 
      <div id="coin5" > 
        <?php	echo $A1631; ?>
      </div>
    </td>
    <td width="32" height="14">&nbsp;</td>
    <td width="198" height="14" valign="top"> 
      <div id="coin4" > 
        <?php	echo $clubA8016; ?>
      </div>
    </td>
    <td width="41" height="14" valign="top"> 
      <div id="coin4" > 
        <?php	echo $A8016; ?>
      </div>
    </td>
    <td width="201" height="14">&nbsp;</td>
    <td width="31" height="14">&nbsp;</td>
    <td width="18" height="14">&nbsp;</td>
    <td width="201" height="14" align="left">&nbsp;</td>
    <td width="23" height="14">&nbsp;</td>
    <td width="11" height="14">&nbsp;</td>
    <td width="198" height="14">&nbsp;</td>
    <td width="21" height="14">&nbsp;</td>
    <td width="21" height="14">&nbsp;</td>
    <td width="21" height="14">&nbsp;</td>
  </tr>
  <tr> 
    <td width="198" height="2" valign="top"> 
      <div id="coin5" > 
        <?php	echo $clubA1632; ?>
      </div>
    </td>
    <td width="36" height="2" valign="top"> 
      <div id="coin5" > 
        <?php	echo $A1632; ?>
      </div>
    </td>
    <td width="32" height="2">&nbsp;</td>
    <td width="198" height="2">&nbsp;</td>
    <td width="41" height="2">&nbsp;</td>
    <td width="22" height="2">&nbsp;</td>
    <td width="201" height="2">&nbsp;</td>
    <td width="31" height="2">&nbsp;</td>
    <td width="18" height="2">&nbsp;</td>
    <td width="201" align="left" height="2">&nbsp;</td>
    <td width="23" height="2">&nbsp;</td>
    <td width="11" height="2">&nbsp;</td>
    <td width="198" height="2">&nbsp;</td>
    <td width="21" height="2">&nbsp;</td>
    <td width="21" height="2">&nbsp;</td>
    <td width="21" height="2">&nbsp;</td>
  </tr>
  <tr> 
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td width="21">&nbsp;</td>
    <td width="21">&nbsp;</td>
    <td width="21">&nbsp;</td>
  </tr>
  <tr> 
    <td colspan="16" bgcolor="#FFCC66">&nbsp;</td>
  </tr>
</table>
