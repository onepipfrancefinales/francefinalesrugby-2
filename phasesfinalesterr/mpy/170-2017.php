 <?php $annee=$_GET['variable_1']; ?>

<head>
<link rel="stylesheet" type="text/css" href="../style2.css">
<meta name="description"
content="tous les champions de france de rugby, ffr,FFR, presentation de tous les clubs de rugby francais, Champions des differents comit&egrave;s territoriaux, Tous les championnats de rugby, f&egrave;d&egrave;rale 2, f&egrave;d&egrave;rale 3, f&egrave;d&egrave;rale 1, top 14.">
<meta name="keywords"
content="Brennus,Comite Midi Pyrenees de Rugby,ffr,FFR,Comite territoriaux de rugby,Stade toulousain,Bourgogne,FanceFinalesRugby,Rugby,championnat de france de rugby,Française,honneur,promotion honneur,Sport,Ballon,Ovale,">
<meta name="classification" content="Sport,Rugby">
<meta name="resource-type" content="document">
<meta name="copyright" content="Comite Midi Pyrenees de Rugby">
<meta name="author" content="Equipe Onepip">
<meta name="robots" content="All">
<title>Honneur</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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


<body bgcolor="#EAECEB">
<?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); 
mysql_select_db("onepip-france-db3"); 
?>
<?php
//-------------Récupération des variables--------------------
 
$comite=mpy;
$id=170;

$phpcomite_clubs=("php".''.$comite.''."_clubs");
$phpcomite_annee=("php".''.$comite.''."_pf".''.$annee);

$bdcomiteClub=("php".''.$comite.''."_clubs");
$bdcomiteAnnee=("php".''.$comite.''."_pf".''.$annee);
?>
<?php require ("../fonctions_phases_finalesMPY22.php"); ?>
<p>&nbsp;</p>
<div id="Layer1" style="position:absolute; width:381px; height:65px; z-index:14; left: 1010px; top: 1px"><a href="http://forumda.forumsactifs.net/index.htm" target="_blank"> 
  <?php    include("../../pub2.php"); ?>
  </a></div>
<p><br>
</p>
<p><br>
</p>
<div id="Layer7" style="position:absolute; width:1000px; height:88px; z-index:13; left: -2px; top: 70px"> 
  <table width="100%" border="0" height="30">
    <tr valign="top" align="center"> 
      <td bgcolor="#EAECEB" height="39" align="left" width="375" valign="middle"> 
        <p align="center"> 
          <?php
   
    
	include("../../pub7.php"); ?>
        </p>
      </td>
      <td valign="middle" bgcolor="#EAECEB" height="39" align="left"> 
        <div align="center"><font size="5"><b><b><font size="5"><b><font color="#FF0000" size="2"> 
          <?php $anneemoins = $annee-1;?>
          <?php $anneeplus = $annee+1;?>
          </font></b></font></b><font color="#000000" size="2"><a href="http://francefinalesrugby.franceserv.com/phasesfinalesterr/mpy/pagehonneur.php?variable_1=<?php echo $anneemoins;?>" target="_top"><font size="6" color="#FF0000">&lt;&lt;</font></a></font></b></font><font color="#000000" size="2"><font size="5" color="#EAECEB">nnnne</font> 
          </font><a href="http://francefinalesrugby.franceserv.com/phasesfinalesterr/mpy/pagehonneur.php?variable_1=<?php echo $anneeplus;?>"target="_top"><font color="#FF0000" size="6"><b>&gt;&gt;</b></font></a></div>
        </td>
      <td width="375" bgcolor="#EAECEB" height="39" align="left" valign="middle"> 
        <div align="center"> 
          <?php	include("../../pub8.php"); ?>   </div>
      </td>
    </tr>
    <tr valign="top" align="center"> 
      <td colspan="3" bgcolor="#006699" height="31"><font size="5"><b><font color="#FFCC00"> 
        <? echo "Finales territoriales du comit&egrave; des Pyr&egrave;n&egrave;es $annee";?>
        </font></b></font></td>
    </tr>
  </table>
</div>
<br>
<br>
<table width="1000" border="0" align="left" height="500" cellspacing="0">
  <tr> 
    <td height="13" bgcolor="#FFCC66" colspan="13"> 
      <div align="center"><i><b>Honneur Honneur Honneur Honneur Honneur Honneur 
        Honneur Honneur Honneur Honneur Honneur Honneur Honneur Honneur Honneur</b></i></div>
    </td>
  </tr>
  <tr> 
    <td width="44" height="13">&nbsp;</td>
    <td width="185" height="13">&nbsp;</td>
    <td width="27" height="13">&nbsp;</td>
    <td width="26" height="13">&nbsp;</td>
    <td width="30" height="13">&nbsp;</td>
    <td width="81" height="13">&nbsp;</td>
    <td width="201" align="left" height="13">&nbsp;</td>
    <td width="28" height="13">&nbsp;</td>
    <td width="33" height="13">&nbsp;</td>
    <td width="47" height="13">&nbsp;</td>
    <td width="213" height="13">&nbsp;</td>
    <td width="40" height="13">&nbsp;</td>
    <td width="19" height="13">&nbsp;</td>
  </tr>
  <tr> 
    <td width="44" height="13"> </td>
    <td colspan="3" height="13"> 
      <div id="titre2" >Quarts de finale A/R</div>
    </td>
    <td width="30" height="13">&nbsp;</td>
    <td width="81" height="13">&nbsp;</td>
    <td width="201" align="left" height="13"> 
      <div id="titre2" >Demi finale A/R</div>
    </td>
    <td width="28" align="left" height="13">&nbsp;</td>
    <td width="33" align="left" height="13">&nbsp;</td>
    <td width="47" height="13">&nbsp;</td>
    <td width="213" height="13"> 
      <div id="titre2" >Finale</div>
    </td>
    <td width="40" height="13">&nbsp;</td>
    <td width="19" height="13">&nbsp;</td>
  </tr>
  <tr> 
    <td width="44" height="26"> </td>
    <td width="185" height="26">&nbsp; </td>
    <td width="27" height="26">&nbsp;</td>
    <td width="26" height="26">&nbsp;</td>
    <td width="30" height="26">&nbsp;</td>
    <td width="81" height="26">&nbsp;</td>
    <td width="201" align="left" height="26">&nbsp; </td>
    <td width="28" height="26">&nbsp;</td>
    <td width="33" height="26">&nbsp;</td>
    <td width="47" height="26">&nbsp;</td>
    <td width="213" height="26">&nbsp;</td>
    <td width="40" height="26">&nbsp;</td>
    <td width="19" height="26">&nbsp;</td>
  </tr>
  <tr> 
    <td width="44" height="25">&nbsp;</td>
    <td colspan="3" height="25"> 
      <?php 
//	clubA4001 ($bdcomiteClub, $id, $annee, $bdcomiteAnnee);
//	clubA4002 ($bdcomiteClub, $id, $annee, $bdcomiteAnnee);
//	clubA4003 ($bdcomiteClub, $id, $annee, $bdcomiteAnnee);
//	clubA4004 ($bdcomiteClub, $id, $annee, $bdcomiteAnnee);
?>
      <?php 
//	clubA4005 ($bdcomiteClub, $id, $annee, $bdcomiteAnnee);
//	clubA4006 ($bdcomiteClub, $id, $annee, $bdcomiteAnnee);
//	clubA4007 ($bdcomiteClub, $id, $annee, $bdcomiteAnnee);
//	clubA4008 ($bdcomiteClub, $id, $annee, $bdcomiteAnnee);
?>
      <font size="2" face="Arial, Helvetica, sans-serif"><b><i><strong> 
      <?php	 echo $quart1; ?>
      </strong></i></b></font> </td>
    <td width="30" height="25">&nbsp;</td>
    <td width="81" height="25">&nbsp;</td>
    <td width="201" height="25" align="left">&nbsp;</td>
    <td width="28" height="25">&nbsp;</td>
    <td width="33" height="25">&nbsp;</td>
    <td width="47" height="25">&nbsp;</td>
    <td width="213" height="25">&nbsp;</td>
    <td width="40" height="25">&nbsp;</td>
    <td width="19" height="25">&nbsp;</td>
  </tr>
  <tr> 
    <td width="44"> </td>
    <td width="185"> 
      <div id="quarts" > 
        <?php echo $clubA4001;?>
      </div>
    </td>
    <td width="27"> 
      <div id="quartspts" >2</div>
    </td>
    <td width="26"> 
      <div id="quarts" >23</div>
    </td>
    <td width="30">&nbsp;</td>
    <td width="81">&nbsp;</td>
    <td width="201" align="left">&nbsp;</td>
    <td width="28">&nbsp;</td>
    <td width="33">&nbsp;</td>
    <td width="47">&nbsp;</td>
    <td width="213">&nbsp;</td>
    <td width="40">&nbsp;</td>
    <td width="19">&nbsp;</td>
  </tr>
  <tr> 
    <td width="44" height="23"> </td>
    <td width="185" height="23"> 
      <div id="quarts" > 
        <?php echo $clubA4002;?>
      </div>
    </td>
    <td width="27" height="23"> 
      <div id="quartspts" >8</div>
    </td>
    <td width="26" height="23"> 
      <div id="quarts" >33</div>
    </td>
    <td width="30" height="23">&nbsp;</td>
    <td width="81" height="23">&nbsp;</td>
    <td colspan="3" align="left" height="23"> 
      <?php 
		
if ($A8001+$A8002>6)
{	
	
	if ($A8001>$A8002 or ($A8001==$A8002 and $A4001>$A4002))		
		{	
		$clubA2001= $clubA4001;
		$logo2001= $logo4001;
		}
	else
		{
		$clubA2001= $clubA4002;
		$logo2001= $logo4002;
		}   
}

else
{
$clubA2001= "-";
}


?>
      <?php 
		
if ($A8003+$A8004>6)
{	
	
	if ($A8003>$A8004 or ($A8003==$A8004 and $A4003>$A4004))		
		{	
		$clubA2002= $clubA4003;
		$logo2002= $logo4003;
		}
	else
		{
		$clubA2002= $clubA4004;
		$logo2002= $logo4004;
		}   
}

else
{
$clubA2002="-";
}
?>
      <?php 
		
if ($A8005+$A8006>6)
{	
	
	if ($A8005>$A8006 or ($A8005==$A8006 and $A4005>$A4006))		
		{	
		$clubA2003= $clubA4005;
		$logo2003= $logo4005;
		}
	else
		{
		$clubA2003= $clubA4006;
		$logo2003= $logo4006;
		}   
}

else
{
$clubA2003= "-";
}
?>
      <?php 
		
if ($A8008+$A8008>6)
{	
	
	if ($A8007>$A8008 or ($A8007==$A8008 and $A4007>$A4008))		
		{	
		$clubA2004= $clubA4007;
		$logo2004= $logo4007;
		}
	else
		{
		$clubA2004= $clubA4008;
		$logo2004= $logo4008;
		}   
}

else
{
$clubA2004= "-";

}
?>
      <font size="2" face="Arial, Helvetica, sans-serif"><b><i><strong> 
      <?php	 echo $demi1; ?>
      </strong></i></b></font> </td>
    <td width="47" height="23">&nbsp;</td>
    <td width="213" height="23">&nbsp;</td>
    <td width="40" height="23">&nbsp;</td>
    <td width="19" height="23">&nbsp;</td>
  </tr>
  <tr> 
    <td width="44" height="17">&nbsp;</td>
    <td width="185" height="17">&nbsp;</td>
    <td width="27" height="17">&nbsp;</td>
    <td width="26" height="17">&nbsp;</td>
    <td width="30" height="17">&nbsp;</td>
    <td width="81" height="17">&nbsp;</td>
    <td width="201" align="left" height="17"> 
      <div id="quarts" > 
        <?php echo $clubA4002;?>
      </div>
    </td>
    <td width="28" height="17"> 
      <div id="quartspts" > 5</div>
    </td>
    <td width="33" height="17"> 
      <div id="quarts" > 18</div>
    </td>
    <td width="47" height="17">&nbsp;</td>
    <td width="213" height="17">&nbsp;</td>
    <td width="40" height="17">&nbsp;</td>
    <td width="19" height="17">&nbsp;</td>
  </tr>
  <tr> 
    <td width="44">&nbsp;</td>
    <td width="185">&nbsp;</td>
    <td width="27">&nbsp;</td>
    <td width="26">&nbsp;</td>
    <td width="30">&nbsp;</td>
    <td width="81">&nbsp;</td>
    <td width="201"> 
      <div id="quarts" > 
        <?php echo $clubA4004;?>
      </div>
    </td>
    <td width="28"> 
      <div id="quartspts" > 5</div>
    </td>
    <td width="33"> 
      <div id="quarts" > 16</div>
    </td>
    <td width="47">&nbsp;</td>
    <td width="213">&nbsp;</td>
    <td width="40">&nbsp;</td>
    <td width="19">&nbsp;</td>
  </tr>
  <tr> 
    <td width="44" height="22"> </td>
    <td width="185" height="22"> 
      <div id="quarts" > 
        <?php echo $clubA4003;?>
      </div>
    </td>
    <td width="27" height="22"> 
      <div id="quartspts" >4</div>
    </td>
    <td width="26" height="22"> 
      <div id="quarts" >37</div>
    </td>
    <td width="30" height="22">&nbsp;</td>
    <td width="81" height="22">&nbsp;</td>
    <td width="201" align="left" height="22">&nbsp;</td>
    <td width="28" height="22">&nbsp;</td>
    <td width="33" height="22">&nbsp;</td>
    <td width="47" height="22">&nbsp;</td>
    <td colspan="3" height="22"> 
      <?php 
		
if ($B2001+$B2002>6)
{	
	
	if ($B2001>$B2002 or ($B2001==$B2002 and $A2001>$A2002))		
		{	
		$clubA1001= $clubA2001;
		$logo1001= $logo2001;
		}
	else
		{
		$clubA1001= $clubA2002;
		$logo1001= $logo2002;
		}   
}

else
{
$clubA1001= "-";
}
?>
      <?php 
		
if ($B2003+$B2004>6)
{	
	
	if ($B2003>$B2004 or ($B2003==$B2004 and $A2003>$A2004))		
		{	
		$clubA1002= $clubA2003;
		$logo1002= $logo2003;
		}
	else
		{
		$clubA1002= $clubA2004;
		$logo1002= $logo2004;
		}   
}

else
{
$clubA1002= "-";
}
?>
      <font size="2" face="Arial, Helvetica, sans-serif"><b><i><strong> 
      <?php	 echo $finale; ?>
      </strong></i></b></font> </td>
  </tr>
  <tr> 
    <td width="44" height="24"> </td>
    <td width="185" height="24"> 
      <div id="quarts" > 
        <?php echo $clubA4004;?>
      </div>
    </td>
    <td width="27" height="24"> 
      <div id="quartspts" >5</div>
    </td>
    <td width="26" height="24"> 
      <div id="quarts" >57</div>
    </td>
    <td width="30" height="24">&nbsp;</td>
    <td width="81" height="24">&nbsp;</td>
    <td width="201" align="left" height="24">&nbsp;</td>
    <td width="28" height="24">&nbsp;</td>
    <td width="33" height="24">&nbsp;</td>
    <td width="47" height="24">&nbsp;</td>
    <td width="213" height="24"> 
      <div id="quarts" > 
        <?php echo $clubA4002;?>
      </div>
    </td>
    <td width="40" height="24"> 
      <div id="quarts" >16 
        <?// echo $A1001;  ?>
      </div>
    </td>
    <td width="19" height="24">&nbsp;</td>
  </tr>
  <tr> 
    <td width="44" height="11"> </td>
    <td width="185" height="11">&nbsp;</td>
    <td width="27" height="11">&nbsp;</td>
    <td width="26" height="11">&nbsp;</td>
    <td width="30" height="11">&nbsp;</td>
    <td width="81" height="11">&nbsp;</td>
    <td width="201" height="11" align="left">&nbsp;</td>
    <td width="28" height="11">&nbsp;</td>
    <td width="33" height="11">&nbsp;</td>
    <td width="47" height="11">&nbsp;</td>
    <td width="213" height="11"> 
      <div id="quarts" > 
        <?php echo $clubA4005;?>
      </div>
    </td>
    <td width="40" height="11"> 
      <div id="quarts" >3 
        <?// echo $A1002;  ?>
      </div>
    </td>
    <td width="19" height="11">&nbsp;</td>
  </tr>
  <tr> 
    <td width="44" height="12">&nbsp;</td>
    <td width="185" height="12">&nbsp;</td>
    <td width="27" height="12">&nbsp;</td>
    <td width="26" height="12">&nbsp;</td>
    <td width="30" height="12">&nbsp;</td>
    <td width="81" height="12">&nbsp;</td>
    <td width="201" align="left" height="12">&nbsp;</td>
    <td width="28" height="12">&nbsp;</td>
    <td width="33" height="12">&nbsp;</td>
    <td rowspan="4" width="47"> 
      <div align="center"><font color="#000000" face="Geneva, Arial, Helvetica, san-serif"size="3"><b><font size="6"> 
        </font></b></font></div>
      <div align="center"></div>
    </td>
    <td rowspan="4" colspan="2"> 
      <div align="center"><font color="#000000" face="Geneva, Arial, Helvetica, san-serif"size="3"><b><font size="6"> 
        <?php 
if ($A1001+$A1002>0)
{	
	
	if ($A1001> $A1002)
	{
	$clubA1000=$clubA1001;
	}
	else
	{
	$clubA1000=$clubA1002;
	}
}
else
{
echo "";	
}	
		
	echo $clubA1000;
	
  ?>
        Vall&eacute;e de Girou</font></b></font></div>
    </td>
    <td rowspan="4" width="19">&nbsp;</td>
  </tr>
  <tr valign="top"> 
    <td width="44" height="6">&nbsp;</td>
    <td width="185" height="6">&nbsp;</td>
    <td width="27" height="6">&nbsp;</td>
    <td width="26" height="6">&nbsp;</td>
    <td width="30" height="6"> 
      <div align="center"><b>t.a.b</b></div>
    </td>
    <td width="81" height="6">&nbsp;</td>
    <td width="201" height="6" align="left">&nbsp;</td>
    <td width="28" height="6">&nbsp;</td>
    <td width="33" height="6">&nbsp;</td>
  </tr>
  <tr> 
    <td width="44" height="5"> </td>
    <td width="185" height="5"> 
      <div id="quarts" > 
        <?php echo $clubA4005;?>
      </div>
    </td>
    <td width="27" height="5"> 
      <div id="quartspts" >5</div>
    </td>
    <td width="26" height="5"> 
      <div id="quarts" >24</div>
    </td>
    <td width="30" height="5"> 
      <div id="quarts" >4</div>
    </td>
    <td width="81" height="5"> </td>
    <td width="201" align="left" height="5">&nbsp;</td>
    <td width="28" height="5">&nbsp;</td>
    <td width="33" height="5">&nbsp;</td>
  </tr>
  <tr> 
    <td width="44" height="20"> </td>
    <td width="185" height="20"> 
      <div id="quarts" > 
        <?php echo $clubA4006;?>
      </div>
    </td>
    <td width="27" height="20"> 
      <div id="quartspts" >5</div>
    </td>
    <td width="26" height="20"> 
      <div id="quarts" >24</div>
    </td>
    <td width="30" height="20"> 
      <div id="quarts" >5</div>
    </td>
    <td width="81" height="20"> </td>
    <td width="201" align="left" height="20">&nbsp;</td>
    <td width="28" height="20">&nbsp;</td>
    <td width="33" height="20">&nbsp;</td>
  </tr>
  <tr> 
    <td width="44">&nbsp;</td>
    <td width="185">&nbsp;</td>
    <td width="27">&nbsp;</td>
    <td width="26">&nbsp;</td>
    <td width="30">&nbsp;</td>
    <td width="81">&nbsp;</td>
    <td width="201" align="left"> 
      <div id="quarts" > 
        <?php echo $clubA4005;?>
      </div>
    </td>
    <td width="28"> 
      <div id="quartspts" > 8</div>
    </td>
    <td width="33"> 
      <div id="quarts" > 48</div>
    </td>
    <td rowspan="5" width="47"> 
      <div align="center"> </div>
      <div align="center"></div>
    </td>
    <td rowspan="5" colspan="2"> 
      <div align="center"> 
        <?php 
if ($A1001+$A1002>0)
{	
	
	if ($A1001> $A1002)
	{
	echo "<img src=\"$logo1001\">";
	}
	else
	{
	echo "<img src=\"$logo1002\">";
	}
}
else
{
echo "";	
}	
		
	

  ?>
      </div>
      <div align="center"></div>
    </td>
    <td rowspan="5" width="19">&nbsp;</td>
  </tr>
  <tr> 
    <td width="44">&nbsp;</td>
    <td width="185">&nbsp; </td>
    <td width="27">&nbsp;</td>
    <td width="26">&nbsp;</td>
    <td width="30">&nbsp;</td>
    <td width="81">&nbsp;</td>
    <td width="201" align="left"> 
      <div id="quarts" > 
        <?php echo $clubA4007;?>
      </div>
    </td>
    <td width="28"> 
      <div id="quartspts" > 1</div>
    </td>
    <td width="33"> 
      <div id="quarts" > 33</div>
    </td>
  </tr>
  <tr> 
    <td width="44"> </td>
    <td width="185"> 
      <div id="quarts" > 
        <?php echo $clubA4007;?>
      </div>
    </td>
    <td width="27"> 
      <div id="quartspts" >8</div>
    </td>
    <td width="26"> 
      <div id="quarts" >44</div>
    </td>
    <td width="30">&nbsp;</td>
    <td width="81">&nbsp;</td>
    <td width="201" align="left">&nbsp;</td>
    <td width="28">&nbsp;</td>
    <td width="33">&nbsp;</td>
  </tr>
  <tr> 
    <td width="44" height="11"> </td>
    <td width="185"> 
      <div id="quarts" > 
        <?php echo $clubA4008;?>
      </div>
    </td>
    <td width="27"> 
      <div id="quartspts" >1</div>
    </td>
    <td width="26"> 
      <div id="quarts" >28</div>
    </td>
    <td width="30">&nbsp;</td>
    <td width="81">&nbsp;</td>
    <td width="201" align="left">&nbsp;</td>
    <td width="28">&nbsp;</td>
    <td width="33">&nbsp;</td>
  </tr>
  <tr> 
    <td width="44"> </td>
    <td width="185">&nbsp;</td>
    <td width="27">&nbsp;</td>
    <td width="26">&nbsp;</td>
    <td width="30">&nbsp;</td>
    <td width="81">&nbsp;</td>
    <td width="201" align="left">&nbsp;</td>
    <td width="28">&nbsp;</td>
    <td width="33">&nbsp;</td>
  </tr>
  <tr> 
    <td width="44">&nbsp;</td>
    <td width="185">&nbsp;</td>
    <td width="27">&nbsp;</td>
    <td width="26">&nbsp;</td>
    <td width="30">&nbsp;</td>
    <td width="81">&nbsp;</td>
    <td width="201">&nbsp;</td>
    <td width="28">&nbsp;</td>
    <td width="33">&nbsp;</td>
    <td width="47">&nbsp;</td>
    <td width="213">&nbsp;</td>
    <td width="40">&nbsp;</td>
    <td width="19">&nbsp;</td>
  </tr>
  <tr> 
    <td colspan="13"> 
      <hr />
    </td>
  </tr>
  <tr> 
    <td height="22" colspan="13"> 
      <div align="center"> 
        <?php
    // On inclut le haut de la page
    
	include("../../pub1.php"); ?>
      </div>
    </td>
  </tr>
</table>
