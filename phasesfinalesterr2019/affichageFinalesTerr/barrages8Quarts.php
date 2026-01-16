<head>
<link rel="stylesheet" type="text/css" href="../style2.css">
<meta name="description"
content="tous les champions de france de rugby, ffr,FFR, presentation de tous les clubs de rugby francais, Champions des differents comit&egrave;s territoriaux, Tous les championnats de rugby, f&egrave;d&egrave;rale 2, f&egrave;d&egrave;rale 3, f&egrave;d&egrave;rale 1, top 14.">
<meta name="keywords"
content="Brennus,Comite Midi Pyrenees de Rugby,ffr,FFR,Comite territoriaux de rugby,Stade toulousain,Bourgogne,FanceFinalesRugby,Rugby,
championnat de france de rugby,Française,honneur,promotion honneur,Sport,Ballon,Ovale,">
<meta name="classification" content="Sport,Rugby">
<meta name="resource-type" content="document">
<meta name="copyright" content="Comite Midi Pyrenees de Rugby">
<meta name="author" content="Equipe Onepip">
<meta name="robots" content="All">
<title>1re S&egrave;rie</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

</head>


<body bgcolor="#EAECEB">
<?php
$annee=$_GET['variable_1'];
$comite=$_GET['comite'];
$page=$_GET['page'];
$division=$_GET['division'];

$anneemoins = $annee-1;
$anneeplus = $annee+1;

$bdcomiteClub=("php".''.$comite.''."_clubs");
//$bdcomiteAnnee=("php".''.$comite.''."_pfterr");
$bdcomiteAnnee=("php".''.$comite.''."_pf".''.$annee);
//echo $bdcomiteAnnee;
?>

<?php 
require ("../fonctionspfMPY.php"); 
require ("../../connect/choixDeLaBase.php");
   ?>
<div id="Layer1" style="position:absolute; width:331px; height:65px; z-index:14; left: 1126px; top: 1px"><a href="http://forumda.forumsactifs.net/index.htm" target="_blank"><font color="#000000"> 
  <?php //	require("../../pub/pub2.php"); ?>
  </font></a></div>
<table width="76%" border="0" height="30">
  <tr valign="top" align="center"> 
    <td bgcolor="#EAECEB" height="29" align="left" width="258" valign="middle"> 
      <p align="center"> 
        <?php 	require("../../pub/pub7.php"); ?>
      </p>
    </td>
    <td valign="middle" bgcolor="#EAECEB" height="29" align="left" width="470"> 
      <div align="center"><a href="http://francefinalesrugby.franceserv.com/phasesfinalesterr/affichageFinalesTerr/pageAffichage.php?page=<?php echo $page; ?>&comite=<?php echo $comite; ?>&division=<?php echo $division; ?>&variable_1=<?php echo $anneemoins;?>" target="_top"><font size="6" color="#FF0000"><b>&lt;&lt;</b></font></a><font size="5" color="#EAECEB">nnnne</font><font size="5"> 
        </font><a href="http://francefinalesrugby.franceserv.com/phasesfinalesterr/affichageFinalesTerr/pageAffichage.php?page=<?php echo $page; ?>&comite=<?php echo $comite; ?>&division=<?php echo $division; ?>&variable_1=<?php echo $anneeplus;?>"target="_top"><font color="#FF0000" size="6"><b>&gt;&gt;</b></font></a></div>
    </td>
    <td width="256" bgcolor="#EAECEB" height="29" align="left" valign="middle"> 
      <div align="center"> 
        <?php 	require("../../pub/pub8.php"); ?>
      </div>
    </td>
  </tr>
  <tr valign="top" align="center"> 
    <td colspan="3" bgcolor="#006699" height="31"><font size="5"><b><font color="#FFCC00"> 
      </font><font size="5"><b><font color="#FFCC00"> 
      <?php echo "Championnat des Pyr&eacute;n&eacute;es".' '.$annee.' '." : ".'  '.$division;?>
      </font></b></font></b></font></td>
  </tr>
</table>
<br>
<table width="1000" border="0" align="left" height="500" cellspacing="0">
  <tr> 
    <td height="13" bgcolor="#FFCC66" colspan="12"> 
      <div align="center"><i><b>
        <?php affichage($division); ?>
        </b></i></div>
    </td>
  </tr>
  <tr> 
    <td width="160" height="13"></td>
    <td width="30" height="13">&nbsp;</td>
    <td width="32" height="13">&nbsp;</td>
    <td width="160" height="13">&nbsp;</td>
    <td width="30" height="13">&nbsp;</td>
    <td width="21" height="13">&nbsp;</td>
    <td width="160" align="left" height="13">&nbsp;</td>
    <td width="30" height="13">&nbsp;</td>
    <td width="22" height="13">&nbsp;</td>
    <td width="160" height="13">&nbsp;</td>
    <td width="30" height="13">&nbsp;</td>
    <td width="21" height="13">&nbsp;</td>
  </tr>
  <tr> 
    <td width="160" height="13"> 
      <div id="titre2" >Barrages</div>
    </td>
    <td width="30" height="13">&nbsp;</td>
    <td width="32" height="13">&nbsp;</td>
    <td width="160" height="13"> 
      <div id="titre2" >Quarts de finale</div>
    </td>
    <td width="30" height="13">&nbsp;</td>
    <td width="21" height="13">&nbsp;</td>
    <td width="160" align="left" height="13"> 
      <div id="titre2" >Demi finale</div>
    </td>
    <td width="30" align="left" height="13">&nbsp;</td>
    <td width="22" height="13">&nbsp;</td>
    <td width="160" height="13"> 
      <div id="titre2" >Finale</div>
    </td>
    <td width="30" height="13">&nbsp;</td>
    <td width="21" height="13">&nbsp;</td>
  </tr>
  <tr> 
    <td width="160" height="26"> 
      
    </td>
    <td width="30" height="26"> </td>
    <td width="32" height="26">&nbsp;</td>
    <td width="160" height="26">&nbsp; </td>
    <td width="30" height="26">&nbsp;</td>
    <td width="21" height="26">&nbsp;</td>
    <td width="160" align="left" height="26">&nbsp; </td>
    <td width="30" height="26">&nbsp;</td>
    <td width="22" height="26">&nbsp;</td>
    <td width="160" height="26">&nbsp;</td>
    <td width="30" height="26">&nbsp;</td>
    <td width="21" height="26">&nbsp;</td>
  </tr>
  <tr> 
    <td width="160" height="18"><font size="2" face="Arial, Helvetica, sans-serif"><b><i><strong> 
      <?php echo $barrage; ?>
      </strong></i></b></font><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      </b></font> </td>
    <td width="30" height="18"> </td>
    <td width="32" height="18">&nbsp;</td>
    <td width="160" height="18"> <font size="2" face="Arial, Helvetica, sans-serif"><b><i> 
      <strong> 
      <?php	 echo $quart1; ?>
      </strong></i></b></font> </td>
    <td width="30" height="18">&nbsp;</td>
    <td width="21" height="18">&nbsp;</td>
    <td width="160" height="18" align="left">&nbsp;</td>
    <td width="30" height="18">&nbsp;</td>
    <td width="22" height="18">&nbsp;</td>
    <td width="160" height="18">&nbsp;</td>
    <td width="30" height="18">&nbsp;</td>
    <td width="21" height="18">&nbsp;</td>
  </tr>
  <tr> 
    <td width="160"> 
      <div id="barrage" >
        <?php echo $clubA8001;?>
      </div>
    </td>
    <td width="30"> 
      <div id="barrage" > 
        <?php  echo $A8001;?>
      </div>
    </td>
    <td width="32">&nbsp;</td>
    <td width="160"> 
      <div id="quarts" > 
        <?php echo $clubA4001; ?>
      </div>
    </td>
    <td width="30"> 
      <div id="quarts" > 
        <?php 	echo $A4001; ?>
      </div>
    </td>
    <td width="21">&nbsp;</td>
    <td width="160" align="left">&nbsp;</td>
    <td width="30">&nbsp;</td>
    <td width="22">&nbsp;</td>
    <td width="160">&nbsp;</td>
    <td width="30">&nbsp;</td>
    <td width="21">&nbsp;</td>
  </tr>
  <tr> 
    <td width="160" height="15"> 
      <div id="barrage" > 
        <?php echo $clubA8002;?>
      </div>
    </td>
    <td width="30" height="15"> 
      <div id="barrage" > 
        <?php echo $A8002;  ?>
      </div>
    </td>
    <td width="32" height="15">&nbsp;</td>
    <td width="160" height="15"> 
      <div id="quarts" > 
        <?php echo $clubA4002; ?>
      </div>
    </td>
    <td width="30" height="15"> 
      <div id="quarts" > 
        <?php echo $A4002;  ?>
      </div>
    </td>
    <td width="21" height="15">&nbsp;</td>
    <td width="160" align="left" height="15"> <font size="2" face="Arial, Helvetica, sans-serif"><b><i> 
      <strong> 
      <?php	 echo $demi1; ?>
      </strong></i></b></font> </td>
    <td width="30" height="15">&nbsp;</td>
    <td width="22" height="15">&nbsp;</td>
    <td width="160" height="15">&nbsp;</td>
    <td width="30" height="15">&nbsp;</td>
    <td width="21" height="15">&nbsp;</td>
  </tr>
  <tr> 
    <td width="160">&nbsp;</td>
    <td width="30">&nbsp;</td>
    <td width="32">&nbsp;</td>
    <td width="160">&nbsp;</td>
    <td width="30">&nbsp;</td>
    <td width="21">&nbsp;</td>
    <td width="160" align="left"> 
      <div id="quarts" > 
        <?php echo $clubA2001; ?>
      </div>
    </td>
    <td width="30"> 
      <div id="quarts" > 
        <?php echo $A2001; ?>
      </div>
    </td>
    <td width="22">&nbsp;</td>
    <td width="160">&nbsp;</td>
    <td width="30">&nbsp;</td>
    <td width="21">&nbsp;</td>
  </tr>
  <tr> 
    <td width="160">&nbsp;</td>
    <td width="30">&nbsp;</td>
    <td width="32">&nbsp;</td>
    <td width="160"><font size="2" face="Arial, Helvetica, sans-serif"><b><i><strong> 
      <?php	 echo $quart2; ?>
      </strong></i></b></font></td>
    <td width="30">&nbsp;</td>
    <td width="21">&nbsp;</td>
    <td width="160"> 
      <div id="quarts" > 
        <?php echo $clubA2002; ?>
      </div>
    </td>
    <td width="30"> 
      <div id="quarts" > 
        <?php echo $A2002; ?>
      </div>
    </td>
    <td width="22">&nbsp;</td>
    <td width="160">&nbsp;</td>
    <td width="30">&nbsp;</td>
    <td width="21">&nbsp;</td>
  </tr>
  <tr> 
    <td width="160" height="22"> 
      <div id="barrage" > 
        <?php echo $clubA4003; ?>
      </div>
    </td>
    <td width="30" height="22"> 
      <div id="barrage" > 
        <?php echo $A8003;  ?>
      </div>
    </td>
    <td width="32" height="22">&nbsp;</td>
    <td width="160" height="22"> 
      <div id="quarts" > 
        <?php echo $clubA4003;?>
      </div>
    </td>
    <td width="30" height="22"> 
      <div id="quarts" > 
        <?php echo $A4003;  ?>
      </div>
    </td>
    <td width="21" height="22">&nbsp;</td>
    <td width="160" align="left" height="22">&nbsp;</td>
    <td width="30" height="22">&nbsp;</td>
    <td width="22" height="22">&nbsp;</td>
    <td colspan="3" height="22"><font size="2" face="Arial, Helvetica, sans-serif"><b><i> 
      <strong> 
      <?php	 echo $finale; ?>
      </strong></i></b></font></td>
  </tr>
  <tr> 
    <td width="160" height="11"> 
      <div id="barrage" > 
        <?php echo $clubA8004; ?>
      </div>
    </td>
    <td width="30" height="11"> 
      <div id="barrage" > 
        <?php echo $A8004;  ?>
      </div>
    </td>
    <td width="32">&nbsp;</td>
    <td width="160"> 
      <div id="quarts" > 
        <?php echo $clubA4004;?>
      </div>
    </td>
    <td width="30"> 
      <div id="quarts" > 
        <?php 	echo $A4004;  ?>
      </div>
    </td>
    <td width="21">&nbsp;</td>
    <td width="160" align="left">&nbsp;</td>
    <td width="30">&nbsp;</td>
    <td width="22">&nbsp;</td>
    <td width="160"> 
      <div id="quarts" > 
        <?php 	echo $clubA1001; ?>
      </div>
    </td>
    <td width="30"> 
      <div id="quarts" > 
        <?php echo $A1001; ?>
      </div>
    </td>
    <td width="21">&nbsp;</td>
  </tr>
  <tr> 
    <td width="160" height="11"> </td>
    <td width="30" height="11"> </td>
    <td width="32" height="11">&nbsp;</td>
    <td width="160" height="11">&nbsp;</td>
    <td width="30" height="11">&nbsp;</td>
    <td width="21" height="11">&nbsp;</td>
    <td width="160" height="11" align="left">&nbsp;</td>
    <td width="30" height="11">&nbsp;</td>
    <td width="22" height="11">&nbsp;</td>
    <td width="160" height="11"> 
      <div id="quarts" > 
        <?php echo $clubA1002; ?>
      </div>
    </td>
    <td width="30" height="11"> 
      <div id="quarts" > 
        <?php echo $A1002; ?>
      </div>
    </td>
    <td width="21" height="11">&nbsp;</td>
  </tr>
  <tr> 
    <td width="160">&nbsp;</td>
    <td width="30">&nbsp;</td>
    <td width="32">&nbsp;</td>
    <td width="160">&nbsp;</td>
    <td width="30">&nbsp;</td>
    <td width="21">&nbsp;</td>
    <td width="160" align="left">&nbsp;</td>
    <td width="30">&nbsp;</td>
    <td colspan="4" rowspan="4"> 
      <div align="center"><font color="#000000" face="Geneva, Arial, Helvetica, san-serif"size="3"><b><font size="6"> 
        </font><font color="#000000" face="Geneva, Arial, Helvetica, san-serif"size="3"><b><font size="6">
        <?php echo $champion; ?>
        </font></b></font></b></font></div>
      <div align="center"></div>
    </td>
  </tr>
  <tr valign="top"> 
    <td width="160" height="6"></td>
    <td width="30" height="6"> </td>
    <td width="32" height="6">&nbsp; </td>
    <td width="160" height="6"><font size="2" face="Arial, Helvetica, sans-serif"> 
      <b><i><strong> 
      <?php	 echo $quart3; ?>
      </strong></i></b><strong> </strong> </font></td>
    <td width="30" height="6">&nbsp;</td>
    <td width="21" height="6">&nbsp;</td>
    <td width="160" height="6" align="left"></td>
    <td width="30" height="6">&nbsp;</td>
  </tr>
  <tr> 
    <td width="160"> 
      <div id="barrage" > 
        <?php	 echo $clubA8005; ?>
      </div>
    </td>
    <td width="30"> 
      <div id="barrage" > 
        <?php echo $A8005;  ?>
      </div>
    </td>
    <td width="32">&nbsp;</td>
    <td width="160"> 
      <div id="quarts" > 
        <?php	 echo $clubA4005; ?>
      </div>
    </td>
    <td width="30"> 
      <div id="quarts" > 
        <?php 	echo $A4005;          ?>
      </div>
    </td>
    <td width="21">&nbsp;</td>
    <td width="160" align="left">&nbsp;</td>
    <td width="30">&nbsp;</td>
  </tr>
  <tr> 
    <td width="160" height="20"> 
      <div id="barrage" > 
        <?php echo $clubA8006;  ?>
      </div>
    </td>
    <td width="30" height="20"> 
      <div id="barrage" > 
        <?php echo $A8006; ?>
      </div>
    </td>
    <td width="32" height="20">&nbsp;</td>
    <td width="160" height="20"> 
      <div id="quarts" > 
        <?php echo $clubA4006; ?>
      </div>
    </td>
    <td width="30" height="20"> 
      <div id="quarts" > 
        <?php echo $A4006;  ?>
      </div>
    </td>
    <td width="21" height="20">&nbsp;</td>
    <td width="160" align="left" height="20"><font size="2" face="Arial, Helvetica, sans-serif"> 
      <b><i><strong> 
      <?php	 echo $demi2; ?>
      </strong></i></b><strong> </strong></font></td>
    <td width="30" height="20">&nbsp;</td>
  </tr>
  <tr> 
    <td width="160">&nbsp;</td>
    <td width="30">&nbsp;</td>
    <td width="32">&nbsp;</td>
    <td width="160">&nbsp;</td>
    <td width="30">&nbsp;</td>
    <td width="21">&nbsp;</td>
    <td width="160" align="left"> 
      <div id="quarts" > 
        <?php echo $clubA2003; ?>
      </div>
    </td>
    <td width="30"> 
      <div id="quarts" > 
        <?php	echo $A2003; ?>
      </div>
    </td>
    <td rowspan="5" colspan="4"> 
      <div align="center"> 
        <?php 	echo $champLogo;?>
      </div>
      <div align="center"></div>
    </td>
  </tr>
  <tr> 
    <td width="160" height="16">&nbsp;</td>
    <td width="30" height="16">&nbsp;</td>
    <td width="32" height="16">&nbsp;</td>
    <td width="160" height="16"> 
      <?php	 echo $quart4; ?>
    </td>
    <td width="30" height="16">&nbsp;</td>
    <td width="21" height="16">&nbsp;</td>
    <td width="160" align="left" height="16"> 
      <div id="quarts" > 
        <?php echo $clubA2004; ?>
      </div>
    </td>
    <td width="30" height="16"> 
      <div id="quarts" > 
        <?php echo $A2004;  ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="160"> 
      <div id="barrage" > 
        <?php echo $clubA8007; ?>
      </div>
    </td>
    <td width="30"> 
      <div id="barrage" > 
        <?php echo $A8007; ?>
      </div>
    </td>
    <td width="32">&nbsp;</td>
    <td width="160"> 
      <div id="quarts" > 
        <?php echo $clubA4007; ?>
      </div>
    </td>
    <td width="30"> 
      <div id="quarts" > 
        <?php echo $A4007;  ?>
      </div>
    </td>
    <td width="21">&nbsp;</td>
    <td width="160" align="left">&nbsp;</td>
    <td width="30">&nbsp;</td>
  </tr>
  <tr> 
    <td width="160" height="11"> 
      <div id="barrage" > 
        <?php echo $clubA8008; ?>
      </div>
    </td>
    <td width="30" height="11"> 
      <div id="barrage" > 
        <?php echo $A8008; ?>
      </div>
    </td>
    <td width="32">&nbsp;</td>
    <td width="160"> 
      <div id="quarts" > 
        <?php echo $clubA4008; ?>
      </div>
    </td>
    <td width="30"> 
      <div id="quarts" > 
        <?php echo $A4008; ?>
      </div>
    </td>
    <td width="21">&nbsp;</td>
    <td width="160" align="left">&nbsp;</td>
    <td width="30">&nbsp;</td>
  </tr>
  <tr> 
    <td width="160"> </td>
    <td width="30"> </td>
    <td width="32">&nbsp;</td>
    <td width="160">&nbsp;</td>
    <td width="30">&nbsp;</td>
    <td width="21">&nbsp;</td>
    <td width="160" align="left">&nbsp;</td>
    <td width="30">&nbsp;</td>
  </tr>
  <tr> 
    <td colspan="12"><hr /></td>
  </tr>
  <tr> 
    <td colspan="12" height="22"> 
      <div align="center"> 
        <?php 	require("../../pub/pub1.php"); ?>
      </div>
    </td>
  </tr>
</table>
