
<?php $annee=$_GET['variable_1'];?>
   
<?php
if ($annee==2012)
{
$clubA1 = 'FC Grenoble (AP)';
$clubA2001 = 'Section Paloise (BE)';
$clubA2002 = 'La Rochelle (PCH)';
$clubA2003 = 'Stade Montois (CBL)';
$clubA2004 = 'US Dax (CBL)';
}
elseif($annee==2011)
{
$clubA1 = 'Lyon OU (LY)';
$clubA2001 = 'FC Grenoble (LY)';
$clubA2002 = 'Begles Bordeaux (CA)';
$clubA2003 = 'SC Albi (MPY)';
$clubA2004 = 'Stade Montois (CBL)';
}
elseif ($annee==2010)
{
$clubA1 = 'SU Agen (PA)';
$clubA2001 = 'La Rochelle (PCH)';
$clubA2002 = 'Oyonnax (LY)';
$clubA2003 = 'Lyon OU (LY)';
$clubA2004 = 'Section Paloise (BE)';
}
elseif ($annee==2009)
{
$clubA1 = 'Racing Metro 92 (IDF)';
$clubA2001 = 'SU Agen( PA)';
$clubA2002 = 'Oyonnax (LY)';
$clubA2003 = 'La Rochelle (PCH)';
$clubA2004 = 'SC Albi (MPY)';
}
elseif ($annee==2008)
{
$clubA1 = 'RC Toulon (CAZ)';
$clubA2001 = 'Stade Montois (CBL)';
$clubA2002 = 'Lyon OU (LY)';
$clubA2003 = 'Racing Metro 92 (IDF)';
$clubA2004 = 'La Rochelle (PCH)';
}
elseif ($annee==2007)
{
$clubA1 = 'FC Auch (AB)';
$clubA2001 = 'US Dax (CBL)';
$clubA2002 = 'AS Beziers (LD)';
$clubA2003 = 'La Rochelle (PCH)';
$clubA2004 = 'RC Toulon (CAZ)';
}
elseif ($annee==2006)
{
$clubA1 = 'US Montauban (MPY)';
$clubA2001 = 'US Dax (CBL)';
$clubA2002 = 'FC Auch (AB)';
$clubA2003 = 'SC Albi (MPY)';
$clubA2004 = 'AS Beziers (LD)';
}
elseif ($annee==2005)
{
$clubA1 = 'RC Toulon (CAZ)';
$clubA2001 = 'Aurillac (CBL)';
$clubA2002 = 'US Montauban (MPY)';
$clubA2003 = 'Lyon OU (LY)';
$clubA2004 = 'Stade Montois (CBL)';
}
else
{
echo "Désolé, aucune donnée pour cette saison";
}
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
<body bgcolor="#EAECEB">
<div id="Layer2" style="position:absolute; width:1600px; height:20px; z-index:4; left: 1px; top: 651px; background-color: #FFCC66; layer-background-color: #FFCC66; border: 1px none #000000"> 
  <p align="center"><a href="http://francefinalesrugby.franceserv.com/divisions/page1serie.php"></a> 
    <?php
    // On inclut le haut de la page
   include("bas.php");
    ?>
  </p>
</div>
<div id="Layer2" style="position:absolute; width:200px; height:20px; z-index:2; left: 649px; top: 375px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
  <center>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"> 
    <b> 
    <?php echo $clubA2005;
  ?>
    </b></font> 
    <div id="Layer3" style="position:absolute; width:30px; height:20px; z-index:1; left: 200px; top: 0px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <font color="#FFCC00" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
      </b> </font> </div>
  </center>
</div>
<div id="Layer11" style="position:absolute; width:320px; height:25px; z-index:7; left: 742px; top: 251px; background-color: #FFFF00; layer-background-color: #FFFF00; border: 1px none #000000"> 
  <div align="center"><font color="#000000" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <strong> 
    <?php echo $clubA1;  ?>
    </strong></b></font></div>
</div>
<div id="Layer4" style="position:absolute; width:200px; height:20px; z-index:2; left: 650px; top: 354px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
  <center>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif "size="2"> 
    <b> 
    <?php echo $clubA2002;
  ?>
    </b></font> 
    <div id="Layer5" style="position:absolute; width:30px; height:20px; z-index:1; left: 200px; top: 0px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <font color="#FFCC00" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
      </b> </font> </div>
    </center>
</div>
<div id="Layer6" style="position:absolute; width:200px; height:20px; z-index:2; left: 642px; top: 489px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
  <center>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"> 
    <b> 
    <?php echo $clubA2004;
  ?>
    </b></font> 
    <div id="Layer7" style="position:absolute; width:30px; height:20px; z-index:1; left: 200px; top: 0px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <font color="#FFCC00" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
      </b> </font> </div>
    </center>
  
</div>
<div id="Layer2" style="position:absolute; width:200px; height:20px; z-index:2; left: 642px; top: 468px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
  <center>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"> 
    <b> 
    <?php echo $clubA2003;
  ?>
    </b></font> 
    <div id="Layer3" style="position:absolute; width:30px; height:20px; z-index:1; left: 200px; top: 0px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <font color="#FFCC00" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
      </b> </font> </div>
  </center>
</div>
<div id="Layer2" style="position:absolute; width:200px; height:20px; z-index:2; left: 927px; top: 412px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
  <center>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFCC00" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFCC00" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"> 
    </font> 
  </center>
</div>
<div id="Layer11" style="position:absolute; width:320px; height:25px; z-index:7; left: 907px; top: 512px; background-color: #FFFF00; layer-background-color: #FFFF00; border: 1px none #000000"> 
  <div align="center"> <font color="#000000" face="Geneva, Arial, Helvetica, san-serif" size="2"><b><strong><i>Accession 
    au top 14</i></strong></b></font><font color="#000000" face="Geneva, Arial, Helvetica, san-serif" size="2"><b><strong> 
    <br>
    <br>
    </strong></b></font><font color="#000000" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
    <?php 

	
	echo $clubA2000;
  ?>
    </b></font></div>
</div>
<div id="Layer8" style="position:absolute; width:366px; height:30px; z-index:3; left: 709px; top: 215px"> 
  <div align="center"><font face="Lucida Handwriting" size="4"><b>Champion de 
    France Pro D2</b></font></div>
</div>
<div id="Layer9" style="position:absolute; width:335px; height:35px; z-index:4; left: 141px; top: 204px"><font face="Lucida Handwriting" size="4"><b><font color="#000000">SAISON</font> 
  REGULIERE 
  <?php $annee=$_GET['variable_1'];?>
  <?php echo $annee;?>
  </b></font></div>

<div id="Layer1" style="position:absolute; width:550px; height:293px; z-index:5; left: 28px; top: 240px"> 
  <?php 

{print("<img src=\"http://francefinalesrugby.franceserv.com/phases_finales/prod2/classement/pro_$annee.jpg\" border=\"0\">");}
?>
</div>
<div id="Layer10" style="position:absolute; width:359px; height:52px; z-index:6; left: 32px; top: 535px"><font size="2"> 
  (P) Equipes Promues <br>
  Qualification aux phases finales<br>
  Equipes rel&eacute;gu&eacute;s<br>
  </font> </div>
<div id="Layer8" style="position:absolute; width:469px; height:25px; z-index:3; left: 668px; top: 313px"> 
  <div align="center"><font face="Lucida Handwriting" size="4"><b>Phase finale 
    pour l'accession au Top 14</b></font></div>
</div>
<div id="Layer2" style="position:absolute; width:1600px; height:20px; z-index:4; left: 0px; top: 175px; background-color: #FFCC66; layer-background-color: #FFCC66; border: 1px none #000000">
  <div align="center"><i><b>Pro D2 Pro D2 Pro D2 Pro D2 Pro D2 Pro D2 Pro D2 Pro 
    D2 Pro D2 Pro D2 Pro D2 Pro D2 Pro D2 Pro D2 Pro D2 Pro D2 Pro D2 Pro D2 Pro 
    D2 Pro D2 Pro D2 Pro D2 Pro D2 Pro D2 Pro D2 Pro D2 Pro D2 Pro D2 Pro D2 </b></i></div>
</div>
<font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> </b></font> 
<font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b><font color="#000000"></font><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
</b></font></b></font></b></font> 
</body>

</html>
