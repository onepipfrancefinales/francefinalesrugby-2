
<?php $annee=$_GET['variable_1'];?>
   
<?php
if ($annee==2002)
{
$clubA1 = 'Mont de Marsan (CBL';
$clubA2001 = 'FC Grenoble (LY)';

}

else
{
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
<div id="Layer11" style="position:absolute; width:320px; height:25px; z-index:7; left: 742px; top: 251px; background-color: #FFFF00; layer-background-color: #FFFF00; border: 1px none #000000"> 
  <div align="center"><font color="#000000" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <strong><font color="#FF0000" size="5">
    <?php echo $clubA1;  ?>
    </font></strong></b></font></div>
</div>
<div id="Layer11" style="position:absolute; width:320px; height:25px; z-index:7; left: 751px; top: 361px; background-color: #FFFF00; layer-background-color: #FFFF00; border: 1px none #000000"> 
  <div align="center"> <font face="Lucida Handwriting" size="4"><b>Accession au 
    Top 16</b></font><font color="#000000" face="Geneva, Arial, Helvetica, san-serif" size="2"><b><strong><br>
    <br>
    <font color="#FF0000" size="5"> 
    <?php echo $clubA1;  ?>
    </font> </strong></b></font> 
    <p><font color="#FF0000" face="Geneva, Arial, Helvetica, san-serif" size="5"><b> 
      <?php 

	
	echo $clubA2001;
  ?>
      </b></font></p>
  </div>
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
<div id="Layer2" style="position:absolute; width:1600px; height:20px; z-index:4; left: 0px; top: 175px; background-color: #FFCC66; layer-background-color: #FFCC66; border: 1px none #000000">
  <div align="center"><i><b>Pro D2 Pro D2 Pro D2 Pro D2 Pro D2 Pro D2 Pro D2 Pro 
    D2 Pro D2 Pro D2 Pro D2 Pro D2 Pro D2 Pro D2 Pro D2 Pro D2 Pro D2 Pro D2 Pro 
    D2 Pro D2 Pro D2 Pro D2 Pro D2 Pro D2 Pro D2 Pro D2 Pro D2 Pro D2 Pro D2 </b></i></div>
</div>
</body>

</html>
