<?php $annee=$_GET['variable_1'];?>
 
<?php

$clubA2001 = 'Stade Francais (IDF)';
$clubA2002 = 'Stade Toulousain (MPY)';
$clubA2003 = 'Biarritz Olympique (CBL)';
$clubA2004 = 'CS Bourgoin Jallieu (LY)';

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
<div id="Layer2" style="position:absolute; width:1600px; height:20px; z-index:4; left: 1px; top: 651px; background-color: #FFCC66; layer-background-color: #FFCC66; border: 1px none #000000"> 
  <p align="center"><a href="http://francefinalesrugby.franceserv.com/divisions/page1serie.php"></a> 
    <?php
    // On inclut le haut de la page
   include("bas.php");
    ?>
  </p>
</div>
<div id="Layer2" style="position:absolute; width:200px; height:20px; z-index:2; left: 642px; top: 330px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
  <center>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"> 
    <b> 
    <?php echo $clubA2001;
  ?>
    </b></font> 
    <div id="Layer3" style="position:absolute; width:30px; height:20px; z-index:1; left: 200px; top: 0px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <font color="#FFCC00" face="Geneva, Arial, Helvetica, san-serif"size="3"><b>23 
      </b> </font> </div>
  </center>
</div>
<div id="Layer4" style="position:absolute; width:200px; height:20px; z-index:2; left: 641px; top: 350px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
  <center>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif "size="2"> 
    <b> 
    <?php echo $clubA2002;
  ?>
    </b></font> 
    <div id="Layer5" style="position:absolute; width:30px; height:20px; z-index:1; left: 200px; top: 0px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <font color="#FFCC00" face="Geneva, Arial, Helvetica, san-serif"size="3"><b>18 
      </b> </font> </div>
    </center>
</div>
<div id="Layer6" style="position:absolute; width:200px; height:20px; z-index:2; left: 642px; top: 445px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
  <center>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"> 
    <b> 
    <?php echo $clubA2003;
  ?>
    </b></font> 
    <div id="Layer7" style="position:absolute; width:30px; height:20px; z-index:1; left: 200px; top: 0px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <font color="#FFCC00" face="Geneva, Arial, Helvetica, san-serif"size="3"><b>32 
      </b> </font> </div>
    </center>
  
</div>
<div id="Layer2" style="position:absolute; width:200px; height:20px; z-index:2; left: 642px; top: 465px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
  <center>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"> 
    <b> 
    <?php echo $clubA2004;
  ?>
    </b></font> 
    <div id="Layer3" style="position:absolute; width:30px; height:20px; z-index:1; left: 200px; top: 0px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <font color="#FFCC00" face="Geneva, Arial, Helvetica, san-serif"size="3"><b>27</b> 
      </font> </div>
  </center>
  
</div>
<div id="Layer2" style="position:absolute; width:200px; height:20px; z-index:2; left: 930px; top: 380px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
  <center>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b>
    <?php echo $clubA2001;
  ?>
    </b></font> 
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        <?php 
if ($A2003+$A2004>0)
{	
	
	if ($A2003> $A2004)
	{
	$clubA1002=$clubA2003;
	}
	else
	{
	$clubA1002=$clubA2004;
	}
}
else
{
echo "";	
}	
	
	echo $clubA1002;
  ?>
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFCC00" face="Geneva, Arial, Helvetica, san-serif"size="3"><b>31 
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"> 
    </font> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFCC00" face="Geneva, Arial, Helvetica, san-serif"size="3"><b>31 
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b> </font> 
  </center>
</div>
<div id="Layer2" style="position:absolute; width:200px; height:20px; z-index:2; left: 930px; top: 400px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
  <center>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b>
    <?php echo $clubA2003;
  ?>
    </b></font> 
  </center>
</div>
<div id="Layer8" style="position:absolute; width:200px; height:30px; z-index:3; left: 792px; top: 260px"><font face="Lucida Handwriting" size="4"><b>PHASE 
  FINALE</b></font> </div>
<div id="Layer9" style="position:absolute; width:400px; height:35px; z-index:4; left: 146px; top: 206px"><font face="Lucida Handwriting" size="4"><b>SAISON 
  REGULIERE 
  <?php $annee=$_GET['variable_1'];?>
  <?php echo $annee;?>
  </b></font></div>
<?php $annee=$_GET['variable_1'];?>
<?php echo $annee;?>
<div id="Layer1" style="position:absolute; width:550px; height:293px; z-index:5; left: 29px; top: 246px"> 
  <?php 

{print("<img src=\"http://francefinalesrugby.franceserv.com/phases_finales/top14/classement/top14_$annee.jpg\" border=\"0\">");}
?>
</div>
<div id="Layer10" style="position:absolute; width:550px; height:76px; z-index:6; left: 30px; top: 540px">(<font size="2">C 
  ) Champion en titre, (P) Equipes Promues <br>
  Qualification aux phases finales<br>
  Qualification en H Cup<br>
  Equipes rel&eacute;gu&eacute;s<br>
  </font> </div>
<div id="Layer2" style="position:absolute; width:1600px; height:20px; z-index:4; left: 3px; top: 175px; background-color: #FFCC66; layer-background-color: #FFCC66; border: 1px none #000000"> 
  <div align="center"><i><b>Top 14 Top 14 Top 14 Top 14 Top 14 Top 14 Top 14 Top 
    14 Top 14 Top 14 Top 14 Top 14 Top 14 Top 14 Top 14 Top 14 Top 14 Top 14 Top 
    14 Top 14 Top 14 Top 14 Top 14 Top 14 Top 14 Top 14 Top 14 Top 14 Top 14 Top 
    14 Top 14 Top 14</b></i></div>
</div>
<div id="Layer4" style="position:absolute; width:2px; height:160px; z-index:6; left: 880px; top: 332px; background-color: #FF0000; layer-background-color: #FF0000; border: 1px none #000000"></div>
<div id="Layer11" style="position:absolute; width:320px; height:25px; z-index:7; left: 914px; top: 490px; background-color: #FFFF00; layer-background-color: #FFFF00; border: 1px none #000000"> 
  <div align="center"> <font color="#000000" face="Geneva, Arial, Helvetica, san-serif" size="2"><b></b></font><font color="#000000" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
    <font size="5" color="#FF0000"> 
    <?php 
	
	
	echo $clubA2003;
  ?>
    </font></b></font></div>
</div>
<div id="Layer11" style="position:absolute; width:306px; height:33px; z-index:7; left: 920px; top: 444px; background-color: #EAECEB; layer-background-color: #EAECEB; border: 1px none #000000"> 
  <div align="center"> <font size="4"><b><font size="5">Champion de France 
    <?php echo $annee;?>
    </font></b> </font></div>
</div>
<div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 1160px; top: 402px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
  <div align="center"><font color="#FFCC00" face="Geneva, Arial, Helvetica, san-serif"size="3"><b>34</b></font></div>
</div>
<div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 1161px; top: 381px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
  <div align="center"><font color="#FFCC00" face="Geneva, Arial, Helvetica, san-serif"size="3"><b>31 
    </b></font></div>
</div>
<div id="Layer12" style="position:absolute; width:67px; height:16px; z-index:8; left: 1145px; top: 357px">
  <div align="center"><font size="1">Prolongation</font></div>
</div>
</body>

</html>
