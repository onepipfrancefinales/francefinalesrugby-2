

<?php $annee=$_GET['variable_1'];?>
<?php $comite="idf";
?><head>

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
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="../style2.css">
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
$bdcomiteClub=("php".''.$comite.''."_clubs");
$bdcomiteAnnee=("php".''.$comite.''."_pf".''.$annee);
?>


<?php require ("../fonctionspf.php");?>
<?php require ("../connect2.php") ; ?>

<p>&nbsp;</p>
<p><br>
</p>
<div id="Layer7" style="position:absolute; width:1000px; height:88px; z-index:13; left: -2px; top: 70px"> 
  <table width="100%" border="0" height="30">
    <tr valign="top" align="center"> 
      <td bgcolor="#EAECEB" height="29" align="left" width="375" valign="middle"> 
        <p align="center"> 
          <?php
    
    
	include("../../pub7.php"); ?>
        </p>
      </td>
      <td valign="middle" bgcolor="#EAECEB" height="29" align="left"> 
        <div align="center"><font size="5"><b><font color="#FF0000" size="2"> 
          <?php $anneemoins = $annee-1;?>
          <?php $anneeplus = $annee+1;?>
          <font color="#000000" size="2"><a href="http://francefinalesrugby.franceserv.com/phasesfinalesterr/idf/page2serie.php?variable_1=<?php echo $anneemoins;?>" target="_top"><font size="6" color="#FF0000">&lt;&lt;</font></a></font></font></b></font><font color="#000000" size="2"><font size="5" color="#EAECEB">nnnne</font><font size="5"> 
          </font></font><a href="http://francefinalesrugby.franceserv.com/phasesfinalesterr/idf/page2serie.php?variable_1=<?php echo $anneeplus;?>"target="_top"><font color="#FF0000" size="6"><b>&gt;&gt;</b></font></a></div>
      </td>
      <td width="375" bgcolor="#EAECEB" height="29" align="left" valign="middle"> 
        <div align="center"> 
          <?php
  
    
	include("../../pub8.php"); ?>
        </div>
      </td>
    </tr>
    <tr valign="top" align="center"> 
      <td colspan="3" bgcolor="#006699" height="31"><font size="5"><b><font color="#FFCC00"> 
        <? echo "Finales territoriales du comité Ile de France $annee";?>
        </font></b></font></td>
    </tr>
  </table>
</div>
<div id="Layer1" style="position:absolute; width:500px; height:442px; z-index:1; left: 1017px; top: 77px"> 
  <p align="center">&nbsp;</p>
  <p align="center"> 
    <?php include ("../FMfinale.php");?>
  </p>
</div>
<p><br>
</p>
<table width="1000" border="0" align="left" height="500" cellspacing="0">
  <tr> 
    <td width="30" height="13">&nbsp;</td>
    <td width="30" height="13">&nbsp;</td>
    <td width="30" height="13">&nbsp;</td>
    <td width="137" height="13">&nbsp;</td>
    <td width="39" height="13">&nbsp;</td>
    <td width="39" height="13">&nbsp;</td>
    <td width="51" height="13">&nbsp;</td>
    <td width="196" height="13">&nbsp;</td>
    <td width="40" height="13">&nbsp;</td>
    <td width="36" height="13">&nbsp;</td>
    <td width="93" align="left" height="13">&nbsp;</td>
    <td width="19" height="13">&nbsp;</td>
    <td width="12" height="13">&nbsp;</td>
    <td width="125" height="13">&nbsp;</td>
    <td width="19" height="13">&nbsp;</td>
    <td width="98" height="13">&nbsp;</td>
  </tr>
  <tr> 
    <td width="30" height="13">&nbsp;</td>
    <td width="30" height="13">&nbsp;</td>
    <td width="30" height="13">&nbsp;</td>
    <td width="137" height="13"> 
      <div id="titre2">Demi finale</div>
    </td>
    <td width="39" height="13">&nbsp;</td>
    <td width="39" height="13">&nbsp;</td>
    <td width="51" height="13">&nbsp;</td>
    <td width="196" height="13"> 
      <div id="titre2">Finale</div>
    </td>
    <td width="40" height="13">&nbsp;</td>
    <td width="36" height="13">&nbsp;</td>
    <td width="93" align="left" height="13"> </td>
    <td colspan="4" align="left" height="13" bgcolor="#FFFF00"> 
      <div id="palmares" > Palmar&egrave;s 
     <?php
 			echo $annee;    
	 ?>
     </div>
       
       
    </td>
    <td width="98" height="13">&nbsp;</td>
  </tr>
  <tr valign="top"> 
    <td height="12" colspan="16"><font size="1" color="#EAECEB">-</font></td>
  </tr>
  <tr> 
    <td height="18" colspan="3" bgcolor="#FF9933"> 
      <div align="center"><b><font face="Arial, Helvetica, sans-serif"><i><font size="2">2me 
        S&eacute;rie</font></i></font></b></div>
    </td>
    <td height="18" width="137"> 
      <?php $id='200';
		demiFinaleA ($bdcomiteClub, $id, $annee, $bdcomiteAnnee);
       	demiFinaleB ($bdcomiteClub, $id, $annee, $bdcomiteAnnee);
	   	demiFinaleC ($bdcomiteClub, $id, $annee, $bdcomiteAnnee);
	   	demiFinaleD ($bdcomiteClub, $id, $annee, $bdcomiteAnnee);
		scoreDemi ( $id, $annee, $bdcomiteAnnee)
		
		?>
    </td>
    <td width="39" height="18">&nbsp;</td>
    <td width="39" height="18">&nbsp;</td>
    <td width="51" height="18">&nbsp;</td>
    <td width="196" height="18">&nbsp;</td>
    <td width="40" height="18">&nbsp;</td>
    <td width="36" height="18">&nbsp;</td>
    <td width="93" align="left" height="18">&nbsp;</td>
    <td width="19" height="18">&nbsp;</td>
    <td width="12" height="18">&nbsp;</td>
    <td width="125" height="18">&nbsp;</td>
    <td width="19" height="18">&nbsp;</td>
    <td width="98" height="18">&nbsp;</td>
  </tr>
  <tr> 
    <td colspan="16" align="left" valign="top" height="2"><font size="1" color="#EAECEB">-</font></td>
  </tr>
  <tr> 
    <td width="30" align="left" valign="bottom" height="16">&nbsp;</td>
    <td colspan="3" align="left" valign="bottom" height="16"> 
      <div id="quarts" > 
        <?php echo $clubA ?>
      </div>
    </td>
    <td width="39" valign="bottom" height="16"> 
      <div id="quarts" > 
       
        <?php
	 echo $scoreA;
 
 ?>
        
      </div>
    </td>
    <td width="39" height="16"> </td>
    <td width="51" height="16">&nbsp;</td>
    <td width="196" height="16"> 
      <div align="center"> 
        <?php 
if ($scoreA+$scoreB>0)
{	
	
	if ($scoreA>$scoreB)
		{
		$finaliste1=$clubA;
		}
	else
		{
		$finaliste1=$clubB;
		}
}
else
		{
		$finaliste1= "-";	
		}	
	
	
  ?>
        <?php 
  if ($scoreA>$scoreB)
		{
		$logof1=$logoA;
		}
	else
		{
		$logof1=$logoB;
		}
	 ?>
        <?php 
if ($scoreC+$scoreD>0)
{	
	
	if ($scoreC>$scoreD)
		{
		$finaliste2=$clubC;
		}
	else
		{
		$finaliste2=$clubD;
		}
}
else
	{
	$finaliste2= "-";	
	}	
	
	
  ?>
        <?php 
  if ($scoreC>$scoreD)
		{
		$logof2=$logoC;
		}
	else
		{
		$logof2=$logoD;
		}
?>
      </div>
    </td>
    <td width="40" height="16">&nbsp;</td>
    <td width="36" height="16">&nbsp;</td>
    <td colspan="2" align="left" height="66" rowspan="6"> 
      <div align="center"> 
        <?php 
if ($A1001+$A1002>0)
{	
	
	if ($A1001> $A1002)
	{
	echo "<img src=\"$logof1\">";
	}
	else
	{
	echo "<img src=\"$logof2\">";
	}
}
else
{
echo "";	
}	
		
	

  ?>
      </div>
    </td>
    <td width="12" height="16">&nbsp;</td>
    <td width="125" height="16">&nbsp;</td>
    <td width="19" height="16">&nbsp;</td>
    <td width="98" height="16">&nbsp;</td>
  </tr>
  <tr> 
    <td width="30" height="18" valign="top">&nbsp;</td>
    <td colspan="3" height="18" valign="top"> 
      <div id="quarts" > 
        <?php echo $clubB ?>
      </div>
    </td>
    <td width="39" height="18" valign="top"> 
      <div id="quarts" > 
        <?php
	 echo $scoreB;
  ?>
        </div>
    </td>
    <td width="39" height="18" valign="top"> </td>
    <td width="51" height="18" valign="top">&nbsp;</td>
    <td width="196" height="18" valign="top"><font color="#000000" face="Geneva, Arial, Helvetica, san-serif"size="4"><b> 
      </b></font></td>
    <td width="40" height="18" valign="bottom">&nbsp;</td>
    <td height="18" valign="bottom">&nbsp;</td>
    <td colspan="4" height="94" rowspan="4"> 
      <div align="center"><b><font size="6" face="Arial, Helvetica, sans-serif"> 
        <?php 
if ($A1001+$A1002>0)
{	
	
	if ($A1001> $A1002)
		{
		$champion=$finaliste1;
		}
	else
		{
		$champion=$finaliste2;
		}
}
else
{
echo "";	
}	
		
	echo $champion;
	
  ?>
        </font></b></div>
    </td>
  </tr>
  <tr> 
    <td height="20" valign="top" width="30">&nbsp;</td>
    <td height="20" valign="top" colspan="4">&nbsp;</td>
    <td height="20" valign="top" width="39">&nbsp;</td>
    <td height="20" valign="top" width="51">&nbsp;</td>
    <td width="196" height="20" valign="bottom"> 
      <div id="quarts" > 
        <?php 

	echo $finaliste1;
  ?>
      </div>
    </td>
    <td width="40" height="20" valign="bottom"> 
      <div id="quarts" > 
        <?php

        echo $A1001;
		
	
		?>
      </div>
    </td>
    <td width="36" height="20" valign="bottom">&nbsp;</td>
  </tr>
  <tr> 
    <td width="30" height="2" valign="top">&nbsp;</td>
    <td colspan="3" align="left" valign="bottom" height="2"> 
      <div id="quarts" > 
        <?php echo $clubC ?>
      </div>
    </td>
    <td width="39" valign="bottom" height="2"> 
      <div id="quarts" > 
    
        <?php
	 echo $scoreC;
 
 ?>
        
      </div>
    </td>
    <td width="39" height="2" valign="top"> </td>
    <td width="51" height="2" valign="top">&nbsp;</td>
    <td width="196" height="2" valign="top"> 
      <div id="quarts" > 
        <?php 

	echo $finaliste2;
  ?>
      </div>
    </td>
    <td width="40" height="2" valign="top"> 
      <div id="quarts" > 
        <?php

        echo $A1002;
	
		?>
      </div>
    </td>
    <td width="36" height="2" valign="top">&nbsp;</td>
  </tr>
  <tr> 
    <td height="2" width="30" valign="top"> 
      <div align="center"></div>
    </td>
    <td colspan="3" align="left" height="2" valign="top"> 
      <div id="quarts" > 
        <?php echo $clubD ?>
      </div>
    </td>
    <td width="39" height="2" valign="top"> 
      <div id="quarts" > 
     
        <?php
	 echo $scoreD;

 ?>
      </div>
    </td>
    <td width="39" height="2" valign="top"> </td>
    <td width="51" height="2" valign="top">&nbsp;</td>
    <td width="196" height="2" valign="top">&nbsp;</td>
    <td width="40" height="2" valign="top">&nbsp;</td>
    <td height="2" valign="top">&nbsp;</td>
  </tr>
  <tr> 
    <td width="30" align="left" valign="bottom" height="2">&nbsp;</td>
    <td colspan="3" align="left" valign="top" height="2">&nbsp; </td>
    <td width="39" valign="top" height="2">&nbsp;</td>
    <td width="39" height="2">&nbsp;</td>
    <td width="51" height="2">&nbsp;</td>
    <td width="196" height="2">&nbsp;</td>
    <td width="40" height="2">&nbsp;</td>
    <td width="36" height="2">&nbsp;</td>
    <td width="12" height="2">&nbsp;</td>
    <td width="125" height="2">&nbsp;</td>
    <td width="19" height="2">&nbsp;</td>
    <td width="98" height="2">&nbsp;</td>
  </tr>
  <tr> 
    <td colspan="3" bgcolor="#FF9933" height="6"> 
      <div id"entete"> 
        <div align="center"><font size="2"><b><font face="Arial, Helvetica, sans-serif"><i>3<font size="2">me 
          S&eacute;rie</font></i></font></b></font></div>
      </div>
    </td>
    <td width="137" height="6">
      <?php $id='210';
		demiFinaleA ($bdcomiteClub, $id, $annee, $bdcomiteAnnee);
       	demiFinaleB ($bdcomiteClub, $id, $annee, $bdcomiteAnnee);
	   	demiFinaleC ($bdcomiteClub, $id, $annee, $bdcomiteAnnee);
	   	demiFinaleD ($bdcomiteClub, $id, $annee, $bdcomiteAnnee);
		scoreDemi ( $id, $annee, $bdcomiteAnnee)
		
		?>
    </td>
    <td width="39" height="6">&nbsp;</td>
    <td width="39" height="6">&nbsp;</td>
    <td width="51" height="6">&nbsp;</td>
    <td width="196" height="6">&nbsp; </td>
    <td width="40" height="6">&nbsp;</td>
    <td width="36" height="6">&nbsp;</td>
    <td width="93" align="left" height="6">&nbsp;</td>
    <td width="19" height="6">&nbsp;</td>
    <td width="12" height="6">&nbsp;</td>
    <td width="125" height="6">&nbsp;</td>
    <td width="19" height="6">&nbsp;</td>
    <td width="98" height="6">&nbsp;</td>
  </tr>
  <tr> 
    <td colspan="16" align="left" valign="top" height="12"><font size="1" color="#EAECEB">-</font></td>
  </tr>
  <tr> 
    <td width="30" align="left" valign="bottom" height="7">&nbsp;</td>
    <td colspan="3" align="left" valign="bottom" height="7"> 
      <div id="quarts" >
        <?php echo $clubA ?>
      </div>
    </td>
    <td width="39" valign="bottom" height="7"> 
      <div id="quarts" > 
        <?php
	 echo $scoreA;
 
 ?>
      </div>
    </td>
    <td width="39" height="7">&nbsp;</td>
    <td width="51" height="7">&nbsp;</td>
    <td width="196" height="7"> 
      <?php 
if ($scoreA+$scoreB>0)
{	
	
	if ($scoreA>$scoreB)
		{
		$finaliste1=$clubA;
		}
	else
		{
		$finaliste1=$clubB;
		}
}
else
		{
		$finaliste1= "-";	
		}	
	
	
  ?>
      <?php 
  if ($scoreA>$scoreB)
		{
		$logof1=$logoA;
		}
	else
		{
		$logof1=$logoB;
		}
	 ?>
      <?php 
if ($scoreC+$scoreD>0)
{	
	
	if ($scoreC>$scoreD)
		{
		$finaliste2=$clubC;
		}
	else
		{
		$finaliste2=$clubD;
		}
}
else
	{
	$finaliste2= "-";	
	}	
	
	
  ?>
      <?php 
  if ($scoreC>$scoreD)
		{
		$logof2=$logoC;
		}
	else
		{
		$logof2=$logoD;
		}
?>
    </td>
    <td width="40" height="7">&nbsp;</td>
    <td width="36" height="7">&nbsp;</td>
    <td colspan="2" align="left" height="77" rowspan="6"> 
      <div align="center"> <font color="#000000" face="Geneva, Arial, Helvetica, san-serif"size="4"><b>
        <?php 
if ($A1001+$A1002>0)
{	
	
	if ($A1001> $A1002)
	{
	echo "<img src=\"$logof1\">";
	}
	else
	{
	echo "<img src=\"$logof2\">";
	}
}
else
{
echo "";	
}	
		
	

  ?>
        </b></font></div>
    </td>
    <td width="12" height="7">&nbsp;</td>
    <td width="125" height="7">&nbsp;</td>
    <td width="19" height="7">&nbsp;</td>
    <td width="98" height="7">&nbsp;</td>
  </tr>
  <tr> 
    <td width="30" height="23" valign="top">&nbsp;</td>
    <td colspan="3" height="23" valign="top"> 
      <div id="quarts" >
        <?php echo $clubB ?>
      </div>
    </td>
    <td width="39" height="23" valign="top"> 
      <div id="quarts" > 
        <?php
	 echo $scoreB;
  ?>
      </div>
    </td>
    <td width="39" height="23">&nbsp;</td>
    <td width="51" height="23">&nbsp;</td>
    <td rowspan="2" height="32" valign="bottom" width="196"> 
      <div id="quarts" >
        <?php 

	echo $finaliste1;
  ?>
      </div>
    </td>
    <td rowspan="2" height="32" valign="bottom" width="40"> 
      <div id="quarts" >
        <?php

        echo $A1001;
		
	
		?>
      </div>
    </td>
    <td width="36" height="23">&nbsp;</td>
    <td colspan="4" height="49" rowspan="4"> 
      <div align="center"><font size="6"><b><font face="Arial, Helvetica, sans-serif"> 
        </font><font color="#000000" face="Geneva, Arial, Helvetica, san-serif"size="3"><b><font color="#000000" face="Geneva, Arial, Helvetica, san-serif"size="3"><b><font size="6"> 
        </font><font color="#000000" face="Geneva, Arial, Helvetica, san-serif"size="3"><b><font color="#000000" face="Geneva, Arial, Helvetica, san-serif"size="3"><b><font color="#000000" face="Geneva, Arial, Helvetica, san-serif"size="3"><b><font size="6" face="Arial, Helvetica, sans-serif">
        <?php 
if ($A1001+$A1002>0)
{	
	
	if ($A1001> $A1002)
		{
		$champion=$finaliste1;
		}
	else
		{
		$champion=$finaliste2;
		}
}
else
{
echo "";	
}	
		
	echo $champion;
	
  ?>
        </font><font size="6"> </font></b></font></b></font></b></font></b></font></b></font></b></font></div>
    </td>
  </tr>
  <tr> 
    <td width="30" height="9" valign="top">&nbsp;</td>
    <td colspan="3" height="9" valign="top">&nbsp;</td>
    <td width="39" height="9" valign="top">&nbsp;</td>
    <td width="39" height="9">&nbsp;</td>
    <td width="51" height="9">&nbsp;</td>
    <td width="36" height="9">&nbsp;</td>
  </tr>
  <tr> 
    <td width="30">&nbsp;</td>
    <td colspan="3" align="left" valign="bottom"> 
      <div id="quarts" >
        <?php echo $clubC ?>
      </div>
    </td>
    <td width="39" valign="bottom"> 
      <div id="quarts" > 
        <?php
	 echo $scoreC;
 
 ?>
      </div>
    </td>
    <td width="39">&nbsp;</td>
    <td width="51">&nbsp;</td>
    <td rowspan="2" valign="top" width="196"> 
      <div id="quarts" >
        <?php 

	echo $finaliste2;
  ?>
      </div>
    </td>
    <td rowspan="2" valign="top" width="40"> 
      <div id="quarts" >
        <?php

        echo $A1002;
	
		?>
      </div>
    </td>
    <td width="36">&nbsp;</td>
  </tr>
  <tr> 
    <td width="30" align="left" valign="bottom" height="2">&nbsp;</td>
    <td colspan="3" align="left" height="2" valign="top"> 
      <div id="quarts" >
        <?php echo $clubD ?>
      </div>
    </td>
    <td width="39" height="2" valign="top"> 
      <div id="quarts" > 
        <?php
	 echo $scoreD;

 ?>
      </div>
    </td>
    <td width="39" height="2">&nbsp;</td>
    <td width="51" height="2">&nbsp;</td>
    <td width="36" height="2">&nbsp;</td>
  </tr>
  <tr> 
    <td width="30" align="left" height="18" valign="top">&nbsp;</td>
    <td colspan="3" align="left" height="18" valign="top">&nbsp; </td>
    <td width="39" height="18" valign="top">&nbsp;</td>
    <td width="39" height="18">&nbsp;</td>
    <td width="51" height="18">&nbsp;</td>
    <td width="196" height="18">&nbsp;</td>
    <td width="40" height="18">&nbsp;</td>
    <td width="36" height="18">&nbsp;</td>
    <td width="12" height="18">&nbsp;</td>
    <td width="125" height="18">&nbsp;</td>
    <td width="19" height="18">&nbsp;</td>
    <td width="98" height="18">&nbsp;</td>
  </tr>
  <tr> 
    <td colspan="3" height="21" bgcolor="#FF9933"> 
      <div align="center"><b><font face="Arial, Helvetica, sans-serif"><i><font size="2"><b><font face="Arial, Helvetica, sans-serif"><i>4<font size="2">me 
        S&eacute;rie</font></i></font></b></font></i></font></b></div>
    </td>
    <td width="137" height="21">
      <?php $id='220';
		demiFinaleA ($bdcomiteClub, $id, $annee, $bdcomiteAnnee);
       	demiFinaleB ($bdcomiteClub, $id, $annee, $bdcomiteAnnee);
	   	demiFinaleC ($bdcomiteClub, $id, $annee, $bdcomiteAnnee);
	   	demiFinaleD ($bdcomiteClub, $id, $annee, $bdcomiteAnnee);
		scoreDemi ( $id, $annee, $bdcomiteAnnee)
		
		?>
    </td>
    <td width="39" height="21">&nbsp;</td>
    <td width="39" height="21">&nbsp;</td>
    <td width="51" height="21">&nbsp;</td>
    <td width="196" height="21">&nbsp; </td>
    <td width="40" height="21">&nbsp;</td>
    <td width="36" height="21">&nbsp;</td>
    <td width="93" align="left" height="21">&nbsp;</td>
    <td width="19" height="21">&nbsp;</td>
    <td width="12" height="21">&nbsp;</td>
    <td width="125" height="21">&nbsp;</td>
    <td width="19" height="21">&nbsp;</td>
    <td width="98" height="21">&nbsp;</td>
  </tr>
  <tr> 
    <td align="left" height="11"><font size="1" color="#EAECEB">-</font></td>
    <td align="left" height="11">&nbsp;</td>
    <td align="left" height="11">&nbsp;</td>
    <td align="left" height="11">&nbsp;</td>
    <td align="left" height="11">&nbsp;</td>
    <td align="left" height="11">&nbsp;</td>
    <td align="left" height="11">&nbsp;</td>
    <td align="left" height="11">&nbsp; </td>
    <td align="left" height="11">&nbsp;</td>
    <td align="left" height="11">&nbsp;</td>
    <td colspan="2" align="left" height="11" rowspan="6"> 
      <div align="center"> <font color="#000000" face="Geneva, Arial, Helvetica, san-serif"size="4"><b>
        <?php 
if ($A1001+$A1002>0)
{	
	
	if ($A1001> $A1002)
	{
	echo "<img src=\"$logof1\">";
	}
	else
	{
	echo "<img src=\"$logof2\">";
	}
}
else
{
echo "";	
}	
		
	

  ?>
        </b></font></div>
    </td>
    <td align="left" height="11">&nbsp;</td>
    <td align="left" height="11">&nbsp;</td>
    <td align="left" height="11">&nbsp;</td>
    <td align="left" height="11">&nbsp;</td>
  </tr>
  <tr> 
    <td width="30" align="left" valign="bottom">&nbsp;</td>
    <td colspan="3" align="left" valign="bottom"> 
      <div id="quarts" >
        <?php echo $clubA ?>
      </div>
    </td>
    <td width="39" valign="bottom"> 
      <div id="quarts" > 
        <?php
	 echo $scoreA;
 
 ?>
      </div>
    </td>
    <td width="39" valign="top">&nbsp;</td>
    <td width="51" valign="top">&nbsp;</td>
    <td width="196" valign="top"> 
      <?php 
if ($scoreA+$scoreB>0)
{	
	
	if ($scoreA>$scoreB)
		{
		$finaliste1=$clubA;
		}
	else
		{
		$finaliste1=$clubB;
		}
}
else
		{
	$finaliste1= "-";	
		}	
	
	
  ?>
      <?php 
  if ($scoreA>$scoreB)
		{
		$logof1=$logoA;
		}
	else
		{
		$logof1=$logoB;
		}
	 ?>
      <?php 
if ($scoreC+$scoreD>0)
{	
	
	if ($scoreC>$scoreD)
		{
		$finaliste2=$clubC;
		}
	else
		{
		$finaliste2=$clubD;
		}
}
else
	{
	$finaliste2= "-";	
	}	
	
	
  ?>
      <?php 
  if ($scoreC>$scoreD)
		{
		$logof2=$logoC;
		}
	else
		{
		$logof2=$logoD;
		}
?>
    </td>
    <td width="40" valign="top">&nbsp;</td>
    <td width="36" valign="top">&nbsp;</td>
    <td width="12">&nbsp;</td>
    <td width="125">&nbsp;</td>
    <td width="19">&nbsp;</td>
    <td width="98">&nbsp;</td>
  </tr>
  <tr> 
    <td width="30" height="20" valign="top">&nbsp;</td>
    <td colspan="3" height="20" valign="top"> 
      <div id="quarts" >
        <?php echo $clubB ?>
      </div>
    </td>
    <td width="39" height="20" valign="top"> 
      <div id="quarts" > 
        <?php
	 echo $scoreB;
  ?>
      </div>
    </td>
    <td width="39" height="20" valign="top">&nbsp;</td>
    <td width="51" height="20" valign="top">&nbsp;</td>
    <td width="196" height="20" valign="top">&nbsp;</td>
    <td width="40" height="20" valign="top">&nbsp;</td>
    <td width="36" height="20" valign="top">&nbsp;</td>
    <td colspan="4" height="96" rowspan="4"> 
      <div align="center"><b><font color="#000000" face="Geneva, Arial, Helvetica, san-serif"size="3"><b><font size="6"> 
        </font><font color="#000000" face="Geneva, Arial, Helvetica, san-serif"size="3"><b><font color="#000000" face="Geneva, Arial, Helvetica, san-serif"size="3"><b><font size="6"> 
        </font><font color="#000000" face="Geneva, Arial, Helvetica, san-serif"size="3"><b><font color="#000000" face="Geneva, Arial, Helvetica, san-serif"size="3"><b><font color="#000000" face="Geneva, Arial, Helvetica, san-serif"size="3"><b><font size="6" face="Arial, Helvetica, sans-serif">
        <?php 
if ($A1001+$A1002>0)
{	
	
	if ($A1001> $A1002)
		{
		$champion=$finaliste1;
		}
	else
		{
		$champion=$finaliste2;
		}
}
else
{
echo "";	
}	
		
	echo $champion;
	
  ?>
        </font><font size="6"> </font></b></font></b></font></b></font></b></font></b></font></b></font></b></div>
    </td>
  </tr>
  <tr> 
    <td width="30" height="2" valign="top">&nbsp;</td>
    <td colspan="3" height="2" valign="top">&nbsp;</td>
    <td width="39" height="2" valign="top">&nbsp;</td>
    <td width="39" height="2" valign="top">&nbsp;</td>
    <td width="51" height="2" valign="top">&nbsp;</td>
    <td width="196" height="2" valign="bottom"> 
      <div id="quarts" >
        <?php 

	echo $finaliste1;
  ?>
      </div>
    </td>
    <td width="40" height="2" valign="bottom"> 
      <div id="quarts" >
        <?php

        echo $A1001;
		
	
		?>
      </div>
    </td>
    <td width="36" height="2" valign="top">&nbsp;</td>
  </tr>
  <tr> 
    <td width="30" height="2">&nbsp;</td>
    <td colspan="3" align="left" valign="bottom" height="2"> 
      <div id="quarts" >
        <?php echo $clubC ?>
      </div>
    </td>
    <td width="39" valign="bottom" height="2"> 
      <div id="quarts" > 
        <?php
	 echo $scoreC;
 
 ?>
      </div>
    </td>
    <td width="39" height="2" valign="top">&nbsp;</td>
    <td width="51" height="2" valign="top">&nbsp;</td>
    <td width="196" valign="top" height="2"> 
      <div id="quarts" >
        <?php 

	echo $finaliste2;
  ?>
      </div>
    </td>
    <td width="40" valign="top" height="2"> 
      <div id="quarts" >
        <?php

        echo $A1002;
	
		?>
      </div>
    </td>
    <td width="36" height="2" valign="top">&nbsp;</td>
  </tr>
  <tr> 
    <td width="30" align="left" valign="bottom" height="2">&nbsp;</td>
    <td colspan="3" align="left" valign="top" height="2"> 
      <div id="quarts" >
        <?php echo $clubD ?>
      </div>
    </td>
    <td width="39" valign="top" height="2"> 
      <div id="quarts" > 
        <?php
	 echo $scoreD;

 ?>
      </div>
    </td>
    <td width="39" height="2" valign="top">&nbsp;</td>
    <td width="51" height="2" valign="top">&nbsp;</td>
    <td width="196" height="2" valign="top">&nbsp;</td>
    <td width="40" height="2" valign="top">&nbsp;</td>
    <td width="36" height="2" valign="top">&nbsp;</td>
  </tr>
  <tr> 
    <td colspan="16">____________________________________________________________________________________________________________________________</td>
  </tr>
  <tr> 
    <td colspan="16"> 
      <div align="center"> 
        <?php
    // On inclut le haut de la page
    
	include("../../pub1.php"); ?>
      </div>
    </td>
  </tr>
</table>




<br>
