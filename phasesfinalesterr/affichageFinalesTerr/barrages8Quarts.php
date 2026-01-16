<?php
//if (isset ($_GET['variable_1'])) $annee = $_GET['variable_1']; else $variable_1='-'; 
if (isset ($_GET['division'])) $division = $_GET['division']; else $division='-';

if (isset ($barrage)) $barrage = $barrage; else $barrage='-';
if (isset ($quart1)) $quart1 = $quart1; else $quart1='-';
if (isset ($quart2)) $quart2 = $quart2; else $quart2='-';
if (isset ($quart3)) $quart3 = $quart3; else $quart3='-';
if (isset ($quart4)) $quart4 = $quart4; else $quart4='-';

if (isset ($demi1)) $demi1 = $demi1; else $demi1='-';
if (isset ($demi2)) $demi2 = $demi2; else $demi2='-';

if (isset ($finale)) $finale = $finale; else $finale='-';

if (isset ($clubA8001)) $clubA8001 = $clubA8001; else $clubA8001='-'; 
if (isset ($clubA8002)) $clubA8002 = $clubA8002; else $clubA8002='-'; 
if (isset ($clubA8003)) $clubA8003 = $clubA8003; else $clubA8003='-'; 
if (isset ($clubA8004)) $clubA8004 = $clubA8004; else $clubA8004='-'; 
if (isset ($clubA8005)) $clubA8005 = $clubA8005; else $clubA8005='-'; 
if (isset ($clubA8006)) $clubA8006 = $clubA8006; else $clubA8006='-'; 
if (isset ($clubA8007)) $clubA8007 = $clubA8007; else $clubA8007='-'; 
if (isset ($clubA8008)) $clubA8008 = $clubA8008; else $clubA8008='-'; 




if (isset ($A8001)) $A8001 = $A8001; else $A8001='-'; 
if (isset ($A8002)) $A8002 = $A8002; else $A8002='-'; 
if (isset ($A8003)) $A8003 = $A8003; else $A8003='-'; 
if (isset ($A8004)) $A8004 = $A8004; else $A8004='-'; 
if (isset ($A8005)) $A8005 = $A8005; else $A8005='-'; 
if (isset ($A8006)) $A8006 = $A8006; else $A8006='-'; 
if (isset ($A8007)) $A8007 = $A8007; else $A8007='-'; 
if (isset ($A8008)) $A8008 = $A8008; else $A8008='-'; 


if (isset ($clubA4001)) $clubA4001 = $clubA4001; else $clubA4001='-'; 
if (isset ($clubA4002)) $clubA4002 = $clubA4002; else $clubA4002='-'; 
if (isset ($clubA4003)) $clubA4003 = $clubA4003; else $clubA4003='-'; 
if (isset ($clubA4004)) $clubA4004 = $clubA4004; else $clubA4004='-'; 
if (isset ($clubA4005)) $clubA4005 = $clubA4005; else $clubA4005='-'; 
if (isset ($clubA4006)) $clubA4006 = $clubA4006; else $clubA4006='-'; 
if (isset ($clubA4007)) $clubA4007 = $clubA4007; else $clubA4007='-'; 
if (isset ($clubA4008)) $clubA4008 = $clubA4008; else $clubA4008='-'; 


if (isset ($A4001)) $A4001 = $A4001; else $A4001='-'; 
if (isset ($A4002)) $A4002 = $A4002; else $A4002='-'; 
if (isset ($A4003)) $A4003 = $A4003; else $A4003='-'; 
if (isset ($A4004)) $A4004 = $A4004; else $A4004='-'; 
if (isset ($A4005)) $A4005 = $A4005; else $A4005='-'; 
if (isset ($A4006)) $A4006 = $A4006; else $A4006='-'; 
if (isset ($A4007)) $A4007 = $A4007; else $A4007='-'; 
if (isset ($A4008)) $A4008 = $A4008; else $A4008='-'; 


if (isset ($clubA2001)) $clubA2001 = $clubA2001; else $clubA2001='-'; 
if (isset ($clubA2002)) $clubA2002 = $clubA2002; else $clubA2002='-'; 
if (isset ($clubA2003)) $clubA2003 = $clubA2003; else $clubA2003='-'; 
if (isset ($clubA2004)) $clubA2004 = $clubA2004; else $clubA2004='-'; 
if (isset ($A2001)) $A2001 = $A2001; else $A2001='-'; 
if (isset ($A2002)) $A2002 = $A2002; else $A2002='-'; 
if (isset ($A2003)) $A2003 = $A2003; else $A2003='-'; 
if (isset ($A2004)) $A2004 = $A2004; else $A2004='-'; 


if (isset ($clubA1001)) $clubA1001 = $clubA1001; else $clubA1001='-'; 
if (isset ($clubA1002)) $clubA1002 = $clubA1002; else $clubA1002='-'; 
if (isset ($A1001)) $A1001 = $A1001; else $A1001='-'; 
if (isset ($A1002)) $A1002 = $A1002; else $A1002='-'; 

?>

<head>

<link rel="stylesheet" type="text/css" href="../champTerr.css">

</head>
<body bgcolor="#EAECEB">
<?php
//$annee=$_GET['variable_1'];
$comite=$_GET['comite'];
$page=$_GET['page'];
//$division=$_GET['division'];

$anneemoins = $annee-1;
$anneeplus = $annee+1;

$bdcomiteClub=("php".''.$comite.''."_clubs");
//$bdcomiteAnnee=("php".''.$comite.''."_pfterr");
$bdcomiteAnnee=("php".''.$comite.''."_pf".''.$annee);

?>
<?php 
require ("../fonctionspfMPY.php"); 
//require ("../../connect/connection2.php");
  barragesQuarts($annee, $bdd)
  
   ?>
   
<table width="1000" border="0" height="30">
  <tr valign="top" align="center"> 
    <td bgcolor="#EAECEB" height="29" align="left" width="258" valign="middle"> 
      <p align="center"> 
        <?php 	require("../../pub/pub7.php"); ?>
      </p>
    </td>
    <td valign="middle" bgcolor="#EAECEB" height="29" align="left" width="470"> 
      <div align="center"><a href="/phasesfinalesterr/affichageFinalesTerr/pageAffichage.php?page=<?php echo $page; ?>&comite=<?php echo $comite; ?>&division=<?php echo $division; ?>&annee=<?php echo $anneemoins;?>" target="_top"><font size="6" color="#FF0000"><b>&lt;&lt;</b></font></a><font size="5" color="#EAECEB">nnnne</font><font size="5"> 
        </font><a href="/phasesfinalesterr/affichageFinalesTerr/pageAffichage.php?page=<?php echo $page; ?>&comite=<?php echo $comite; ?>&division=<?php echo $division; ?>&annee=<?php echo $anneeplus;?>"target="_top"><font color="#FF0000" size="6"><b>&gt;&gt;</b></font></a></div>
    </td>
    <td width="256" bgcolor="#EAECEB" height="29" align="left" valign="middle"> 
      <div align="center"> 
        <?php 	require("../../pub/pub8.php"); ?>
      </div>
    </td>
  </tr>
  <tr valign="top" align="center"> 
    <td colspan="3" height="31">
      <div class="bandeau1"> <?php echo "Phases finales du champ territorial du comit&eacute; Midi Pyr&eacute;n&eacute;es".' '.$annee; ?>
      </div>
    </td>
  </tr>
</table>
<table width="1000" border="0" align="left" height="500" cellspacing="0">
  <tr> 
    <td height="13" colspan="13"> 
      <h2 > 
        <?php affichage($division); ?>
      </h2>
    </td>
  </tr>
  <tr> 
    <td width="99" height="13"></td>
    <td width="187" height="13"></td>
    <td width="30" height="13">&nbsp;</td>
    <td width="58" height="13">&nbsp;</td>
    <td width="153" height="13">&nbsp;</td>
    <td width="44" height="13">&nbsp;</td>
    <td width="72" height="13">&nbsp;</td>
    <td width="121" align="left" height="13">&nbsp;</td>
    <td width="36" height="13">&nbsp;</td>
    <td width="54" height="13">&nbsp;</td>
    <td width="116" height="13">&nbsp;</td>
    <td width="55" height="13">&nbsp;</td>
    <td width="330" height="13">&nbsp;</td>
  </tr>
  <tr> 
    <td width="99" height="13">&nbsp;</td>
    <td width="187" height="13"> 
      <div class="affichageTitre" >Barrages</div>
    </td>
    <td width="30" height="13">&nbsp;</td>
    <td width="58" height="13">&nbsp;</td>
    <td width="153" height="13"> 
      <div class="affichageTitre" >Quarts de finale</div>
    </td>
    <td width="44" height="13">&nbsp;</td>
    <td width="72" height="13">&nbsp;</td>
    <td width="121" align="left" height="13"> 
      <div class="affichageTitre" >Demi finale</div>
    </td>
    <td width="36" align="left" height="13">&nbsp;</td>
    <td width="54" height="13">&nbsp;</td>
    <td width="116" height="13"> 
      <div class="affichageTitre" >Finale</div>
    </td>
    <td width="55" height="13">&nbsp;</td>
    <td width="330" height="13">&nbsp;</td>
  </tr>
  <tr> 
    <td width="99" height="26"></td>
    <td width="187" height="26"> </td>
    <td width="30" height="26"> </td>
    <td width="58" height="26">&nbsp;</td>
    <td width="153" height="26">&nbsp; </td>
    <td width="44" height="26">&nbsp;</td>
    <td width="72" height="26">&nbsp;</td>
    <td width="121" align="left" height="26">&nbsp; </td>
    <td width="36" height="26">&nbsp;</td>
    <td width="54" height="26">&nbsp;</td>
    <td width="116" height="26">&nbsp;</td>
    <td width="55" height="26">&nbsp;</td>
    <td width="330" height="26">&nbsp;</td>
  </tr>
  <tr> 
    <td width="99" height="18">&nbsp;</td>
    <td width="187" height="18"><font size="2" face="Arial, Helvetica, sans-serif"><b><i><strong> 
      <?php echo $barrage; ?>
      </strong></i></b></font><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      </b></font> </td>
    <td width="30" height="18"> </td>
    <td width="58" height="18">&nbsp;</td>
    <td width="153" height="18"> <font size="2" face="Arial, Helvetica, sans-serif"><b><i> 
      <strong> 
      <?php	 echo $quart1; ?>
      </strong></i></b></font> </td>
    <td width="44" height="18">&nbsp;</td>
    <td width="72" height="18">&nbsp;</td>
    <td width="121" height="18" align="left">&nbsp;</td>
    <td width="36" height="18">&nbsp;</td>
    <td width="54" height="18">&nbsp;</td>
    <td width="116" height="18">&nbsp;</td>
    <td width="55" height="18">&nbsp;</td>
    <td width="330" height="18">&nbsp;</td>
  </tr>
  <tr> 
    <td width="99">&nbsp;</td>
    <td width="187"> 
      <div class="affichageBarrage" > 
        <?php echo $clubA8001;?>
      </div>
    </td>
    <td width="30"> 
      <div class="scoreBarrage" > 
        <?php  echo $A8001;?>
      </div>
    </td>
    <td width="58">&nbsp;</td>
    <td width="153"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA4001; ?>
      </div>
    </td>
    <td width="44"> 
      <div class="affichageGA" > 
        <?php 	echo $A4001; ?>
      </div>
    </td>
    <td width="72">&nbsp;</td>
    <td width="121" align="left">&nbsp;</td>
    <td width="36">&nbsp;</td>
    <td width="54">&nbsp;</td>
    <td width="116">&nbsp;</td>
    <td width="55">&nbsp;</td>
    <td width="330">&nbsp;</td>
  </tr>
  <tr> 
    <td width="99" height="15">&nbsp;</td>
    <td width="187" height="15"> 
      <div class="affichageBarrage" > 
        <?php echo $clubA8002;?>
      </div>
    </td>
    <td width="30" height="15"> 
      <div class="scoreBarrage" > 
        <?php echo $A8002;  ?>
      </div>
    </td>
    <td width="58" height="15">&nbsp;</td>
    <td width="153" height="15"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA4002; ?>
      </div>
    </td>
    <td width="44" height="15"> 
      <div class="affichageGA" > 
        <?php echo $A4002;  ?>
      </div>
    </td>
    <td width="72" height="15">&nbsp;</td>
    <td width="121" align="left" height="15"> <font size="2" face="Arial, Helvetica, sans-serif"><b><i> 
      <strong> 
      <?php	 echo $demi1; ?>
      </strong></i></b></font> </td>
    <td width="36" height="15">&nbsp;</td>
    <td width="54" height="15">&nbsp;</td>
    <td width="116" height="15">&nbsp;</td>
    <td width="55" height="15">&nbsp;</td>
    <td width="330" height="15">&nbsp;</td>
  </tr>
  <tr> 
    <td width="99">&nbsp;</td>
    <td width="187">&nbsp;</td>
    <td width="30">&nbsp;</td>
    <td width="58">&nbsp;</td>
    <td width="153">&nbsp;</td>
    <td width="44">&nbsp;</td>
    <td width="72">&nbsp;</td>
    <td width="121" align="left"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA2001; ?>
      </div>
    </td>
    <td width="36"> 
      <div class="affichageGA" > 
        <?php echo $A2001; ?>
      </div>
    </td>
    <td width="54">&nbsp;</td>
    <td width="116">&nbsp;</td>
    <td width="55">&nbsp;</td>
    <td width="330">&nbsp;</td>
  </tr>
  <tr> 
    <td width="99">&nbsp;</td>
    <td width="187">&nbsp;</td>
    <td width="30">&nbsp;</td>
    <td width="58">&nbsp;</td>
    <td width="153"><font size="2" face="Arial, Helvetica, sans-serif"><b><i><strong> 
      <?php	 echo $quart2; ?>
      </strong></i></b></font></td>
    <td width="44">&nbsp;</td>
    <td width="72">&nbsp;</td>
    <td width="121"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA2002; ?>
      </div>
    </td>
    <td width="36"> 
      <div class="affichageGA" > 
        <?php echo $A2002; ?>
      </div>
    </td>
    <td width="54">&nbsp;</td>
    <td width="116">&nbsp;</td>
    <td width="55">&nbsp;</td>
    <td width="330">&nbsp;</td>
  </tr>
  <tr> 
    <td width="99" height="22">&nbsp;</td>
    <td width="187" height="22"> 
      <div class="affichageBarrage" > 
        <?php echo $clubA4003; ?>
      </div>
    </td>
    <td width="30" height="22"> 
      <div class="scoreBarrage" > 
        <?php echo $A8003;  ?>
      </div>
    </td>
    <td width="58" height="22">&nbsp;</td>
    <td width="153" height="22"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA4003;?>
      </div>
    </td>
    <td width="44" height="22"> 
      <div class="affichageGA" > 
        <?php echo $A4003;  ?>
      </div>
    </td>
    <td width="72" height="22">&nbsp;</td>
    <td width="121" align="left" height="22">&nbsp;</td>
    <td width="36" height="22">&nbsp;</td>
    <td width="54" height="22">&nbsp;</td>
    <td colspan="3" height="22"><font size="2" face="Arial, Helvetica, sans-serif"><b><i> 
      <strong> 
      <?php	 echo $finale; ?>
      </strong></i></b></font></td>
  </tr>
  <tr> 
    <td width="99" height="11">&nbsp;</td>
    <td width="187" height="11"> 
      <div class="affichageBarrage" > 
        <?php echo $clubA8004; ?>
      </div>
    </td>
    <td width="30" height="11"> 
      <div class="scoreBarrage" > 
        <?php echo $A8004;  ?>
      </div>
    </td>
    <td width="58">&nbsp;</td>
    <td width="153"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA4004;?>
      </div>
    </td>
    <td width="44"> 
      <div class="affichageGA" > 
        <?php 	echo $A4004;  ?>
      </div>
    </td>
    <td width="72">&nbsp;</td>
    <td width="121" align="left">&nbsp;</td>
    <td width="36">&nbsp;</td>
    <td width="54">&nbsp;</td>
    <td width="116"> 
      <div class="affichageEquipe" > 
        <?php 	echo $clubA1001; ?>
      </div>
    </td>
    <td width="55"> 
      <div class="affichageGA" > 
        <?php echo $A1001; ?>
      </div>
    </td>
    <td width="330">&nbsp;</td>
  </tr>
  <tr> 
    <td width="99" height="11"></td>
    <td width="187" height="11"> </td>
    <td width="30" height="11"> </td>
    <td width="58" height="11">&nbsp;</td>
    <td width="153" height="11">&nbsp;</td>
    <td width="44" height="11">&nbsp;</td>
    <td width="72" height="11">&nbsp;</td>
    <td width="121" height="11" align="left">&nbsp;</td>
    <td width="36" height="11">&nbsp;</td>
    <td width="54" height="11">&nbsp;</td>
    <td width="116" height="11"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA1002; ?>
      </div>
    </td>
    <td width="55" height="11"> 
      <div class="affichageGA" > 
        <?php echo $A1002; ?>
      </div>
    </td>
    <td width="330" height="11">&nbsp;</td>
  </tr>
  <tr> 
    <td width="99">&nbsp;</td>
    <td width="187">&nbsp;</td>
    <td width="30">&nbsp;</td>
    <td width="58">&nbsp;</td>
    <td width="153">&nbsp;</td>
    <td width="44">&nbsp;</td>
    <td width="72">&nbsp;</td>
    <td width="121" align="left">&nbsp;</td>
    <td width="36">&nbsp;</td>
    <td colspan="4" rowspan="4"> 
      <div align="center"><font color="#000000" face="Geneva, Arial, Helvetica, san-serif"size="3"><b><font size="6"> 
        </font><font color="#000000" face="Geneva, Arial, Helvetica, san-serif"size="3"><b><font size="6"> 
        <?php 
		
		  //echo $nom1000; ?>
        </font></b></font></b></font></div>
      <div align="center"></div>
    </td>
  </tr>
  <tr valign="top"> 
    <td width="99" height="6"></td>
    <td width="187" height="6"></td>
    <td width="30" height="6"> </td>
    <td width="58" height="6">&nbsp; </td>
    <td width="153" height="6"><font size="2" face="Arial, Helvetica, sans-serif"> 
      <b><i><strong> 
      <?php	 echo $quart3; ?>
      </strong></i></b> </font></td>
    <td width="44" height="6">&nbsp;</td>
    <td width="72" height="6">&nbsp;</td>
    <td width="121" height="6" align="left"></td>
    <td width="36" height="6">&nbsp;</td>
  </tr>
  <tr> 
    <td width="99">&nbsp;</td>
    <td width="187"> 
      <div class="affichageBarrage" > 
        <?php	 echo $clubA8005; ?>
      </div>
    </td>
    <td width="30"> 
      <div class="scoreBarrage" > 
        <?php echo $A8005;  ?>
      </div>
    </td>
    <td width="58">&nbsp;</td>
    <td width="153"> 
      <div class="affichageEquipe" > 
        <?php	 echo $clubA4005; ?>
      </div>
    </td>
    <td width="44"> 
      <div class="affichageGA" > 
        <?php 	echo $A4005;          ?>
      </div>
    </td>
    <td width="72">&nbsp;</td>
    <td width="121" align="left">&nbsp;</td>
    <td width="36">&nbsp;</td>
  </tr>
  <tr> 
    <td width="99" height="20">&nbsp;</td>
    <td width="187" height="20"> 
      <div class="affichageBarrage" > 
        <?php echo $clubA8006;  ?>
      </div>
    </td>
    <td width="30" height="20"> 
      <div class="scoreBarrage" > 
        <?php echo $A8006; ?>
      </div>
    </td>
    <td width="58" height="20">&nbsp;</td>
    <td width="153" height="20"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA4006; ?>
      </div>
    </td>
    <td width="44" height="20"> 
      <div class="affichageGA" > 
        <?php echo $A4006;  ?>
      </div>
    </td>
    <td width="72" height="20">&nbsp;</td>
    <td width="121" align="left" height="20"><font size="2" face="Arial, Helvetica, sans-serif"> 
      <b><i><strong> 
      <?php	 echo $demi2; ?>
      </strong></i></b><strong> </strong></font></td>
    <td width="36" height="20">&nbsp;</td>
  </tr>
  <tr> 
    <td width="99">&nbsp;</td>
    <td width="187">&nbsp;</td>
    <td width="30">&nbsp;</td>
    <td width="58">&nbsp;</td>
    <td width="153">&nbsp;</td>
    <td width="44">&nbsp;</td>
    <td width="72">&nbsp;</td>
    <td width="121" align="left"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA2003; ?>
      </div>
    </td>
    <td width="36"> 
      <div class="affichageGA" > 
        <?php	echo $A2003; ?>
      </div>
    </td>
    <td rowspan="5" colspan="4"> 
      <div align="center"> 
        <?php 	//echo "<img src=\"$logo1000\">";?>
      </div>
      <div align="center"></div>
    </td>
  </tr>
  <tr> 
    <td width="99" height="16">&nbsp;</td>
    <td width="187" height="16">&nbsp;</td>
    <td width="30" height="16">&nbsp;</td>
    <td width="58" height="16">&nbsp;</td>
    <td width="153" height="16"><font size="2" face="Arial, Helvetica, sans-serif"> <b><i> 
    <strong>   <?php	 echo $quart4; ?></strong> </font>
    </td>
    <td width="44" height="16">&nbsp;</td>
    <td width="72" height="16">&nbsp;</td>
    <td width="121" align="left" height="16"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA2004; ?>
      </div>
    </td>
    <td width="36" height="16"> 
      <div class="affichageGA" > 
        <?php echo $A2004;  ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="99">&nbsp;</td>
    <td width="187"> 
      <div class="affichageBarrage" > 
        <?php echo $clubA8007; ?>
      </div>
    </td>
    <td width="30"> 
      <div class="scoreBarrage" > 
        <?php echo $A8007; ?>
      </div>
    </td>
    <td width="58">&nbsp;</td>
    <td width="153"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA4007; ?>
      </div>
    </td>
    <td width="44"> 
      <div class="affichageGA" > 
        <?php echo $A4007;  ?>
      </div>
    </td>
    <td width="72">&nbsp;</td>
    <td width="121" align="left">&nbsp;</td>
    <td width="36">&nbsp;</td>
  </tr>
  <tr> 
    <td width="99" height="11">&nbsp;</td>
    <td width="187" height="11"> 
      <div class="affichageBarrage" > 
        <?php echo $clubA8008; ?>
      </div>
    </td>
    <td width="30" height="11"> 
      <div class="scoreBarrage" > 
        <?php echo $A8008; ?>
      </div>
    </td>
    <td width="58">&nbsp;</td>
    <td width="153"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA4008; ?>
      </div>
    </td>
    <td width="44"> 
      <div class="affichageGA" > 
        <?php echo $A4008; ?>
      </div>
    </td>
    <td width="72">&nbsp;</td>
    <td width="121" align="left">&nbsp;</td>
    <td width="36">&nbsp;</td>
  </tr>
  <tr> 
    <td width="99"></td>
    <td width="187"> </td>
    <td width="30"> </td>
    <td width="58">&nbsp;</td>
    <td width="153">&nbsp;</td>
    <td width="44">&nbsp;</td>
    <td width="72">&nbsp;</td>
    <td width="121" align="left">&nbsp;</td>
    <td width="36">&nbsp;</td>
  </tr>
  <tr> 
    <td colspan="13"> 
      <hr />
    </td>
  </tr>
  <tr> 
    <td colspan="13" height="22"> 
      <div align="center"> 
        <?php 	require("../../pub/pub1.php"); ?>
      </div>
    </td>
  </tr>
</table>
