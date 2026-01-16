<?php $annee=$_GET['variable_1'];?>

<script language="JavaScript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>
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
<body bgcolor="#E8E8E8">
<div id="Layer6" style="position:absolute; width:98px; height:60px; z-index:11; left: 636px; top: 283px"><font color="#000000" face="Geneva, Arial, Helvetica, san-serif"size="3"><b><font color="#000000" face="Geneva, Arial, Helvetica, san-serif"size="4"><b> 
  </b></font><font color="#000000" face="Geneva, Arial, Helvetica, san-serif"size="3"><b><font size="4"> 
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
  </font></b></font><font size="4"> </font></b></font></div>
<div id="Layer2" style="position:absolute; width:219px; height:28px; z-index:10; left: 767px; top: 300px"> 
  <div align="center"><font color="#000000" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
    <font size="4"> <font color="#000000" face="Geneva, Arial, Helvetica, san-serif"size="3"><b><font size="4"><font size="6"> 
    <font color="#FF0000">SCUF</font></font></font></b></font></font></b></font></div>
</div>
<div id="Layer6" style="position:absolute; width:98px; height:60px; z-index:11; left: 643px; top: 419px"><font color="#000000" face="Geneva, Arial, Helvetica, san-serif"size="3"><b><font color="#000000" face="Geneva, Arial, Helvetica, san-serif"size="4"><b> 
  </b></font><font color="#000000" face="Geneva, Arial, Helvetica, san-serif"size="3"><b><font color="#000000" face="Geneva, Arial, Helvetica, san-serif"size="3"><b><font size="4"> 
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
  </font></b></font></b></font><font size="4"> </font></b></font></div>
<div id="Layer2" style="position:absolute; width:216px; height:28px; z-index:10; left: 775px; top: 439px"> 
  <div align="center"><font color="#000000" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
    <font size="4"> <font color="#000000" face="Geneva, Arial, Helvetica, san-serif"size="3"><b><font size="4"><font size="6" color="#FF0000">Mantes 
    Limay </font></font></b></font></font></b></font></div>
</div>
<div id="Layer7" style="position:absolute; width:1000px; height:88px; z-index:13; left: -2px; top: 70px"> 
  <table width="100%" border="0" height="30">
    <tr valign="top" align="center"> 
      <td rowspan="2" bgcolor="#EAECEB" height="45" align="left" width="375" valign="top"> 
        <p align="center"><font size="5"><b><font size="5"><b><font size="5"><b><font size="5"><b><font color="#FF0000" size="2"> 
          </font></b></font></b></font></b></font> 
          <?php
    // On inclut le haut de la page
    
	include("../../pub7.php"); ?>
          </b></font></p>
      </td>
      <td width="197" bgcolor="#EAECEB" height="29" align="left"> 
        <div align="center"><font size="5"><b><font size="5"><b><font size="5"><b><font size="5"><b><font color="#FF0000" size="2"> 
          <?php $anneemoins = $annee-1;?>
          <?php $anneeplus = $annee+1;?>
          </font></b></font><font color="#000000" size="2"><a href="http://francefinalesrugby.franceserv.com/phasesfinalesterr/idf/pagereserve.php?variable_1=<?php echo $anneemoins;?>" target="_top"><font size="5" color="#000000">&lt;&lt;</font></a></font><font color="#000000" size="2"><font size="5" color="#EAECEB"></font></font></b></font></b></font><font color="#000000" size="2"><font size="5" color="#EAECEB">nnnnne</font><font size="5"> 
          </font></font><a href="http://francefinalesrugby.franceserv.com/phasesfinalesterr/idf/pagereserve.php?variable_1=<?php echo $anneeplus;?>"target="_top"><font color="#000000">&gt;&gt;</font></a></b></font></div>
      </td>
      <td width="375" bgcolor="#EAECEB" height="45" align="left" rowspan="2" valign="top"> 
        <div align="center"> 
          <p><font size="2" color="#FF0000"><b> 
            <?php
    // On inclut le haut de la page
    
	include("../../pub8.php"); ?>
            </b></font></p>
        </div>
      </td>
    </tr>
    <tr valign="top" align="center"> 
      <td bgcolor="#EAECEB" height="7" align="left"> 
        <div align="center"></div>
      </td>
    </tr>
    <tr valign="top" align="center"> 
      <td colspan="3" bgcolor="#006699" height="31"><font size="5"><b><font color="#FFCC00"> 
        </font><font size="5"><b><font color="#FFCC00"> 
        <? echo "Finales territoriales du comité Ile de France $annee";?>
        </font></b></font><font color="#FFCC00"> </font></b></font></td>
    </tr>
  </table>
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<div id="Layer3" style="position:absolute; width:160px; height:20px; z-index:5; left: 61px; top: 170px; background-image:    url(../../phases_finales/titre.jpg); layer-background-image:    url(../../phases_finales/titre.jpg); border: 1px none #000000"> 
  <div align="center"><font color="#FFFFFF"><b>Demi finale</b></font></div>
</div>
<div id="Layer3" style="position:absolute; width:160px; height:20px; z-index:5; left: 378px; top: 169px; background-image:    url(../../phases_finales/titre.jpg); layer-background-image:    url(../../phases_finales/titre.jpg); border: 1px none #000000"> 
  <div align="center"><font color="#FFFFFF"><b>Finale</b></font></div>
</div>
<p>&nbsp; </p>
<p>&nbsp;</p>
<div id="Layer2" style="position:absolute; width:183px; height:20px; z-index:4; left: 7px; top: 203px; background-color: #FFCC66; layer-background-color: #FFCC66; border: 1px none #000000"> 
  <div align="center"><i><b>R&eacute;serve Honneur</b></i></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 27px; top: 241px; background-image:    url(../../phases_finales/unique3.jpg); layer-background-image:    url(../../phases_finales/unique3.jpg); border: 1px none #000000"> 
  <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php require ("../connect2.php") ; ?>
    <?  
$query = "SELECT phpidf_pf$annee.id,phpidf_pf$annee.clubA1001, phpidf_clubs.nom, phpidf_clubs.url_logo FROM phpidf_pf$annee, phpidf_clubs WHERE phpidf_pf$annee.clubA1001=phpidf_clubs.id and phpidf_pf$annee.id='270'";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {                 
                 "$row[2]";       
		      
		$clubA1001=$row[2];
		$logo1001=$row[3];
		echo $clubA1001;

		
		?>
    <?php
 
 }
mysql_close(); // Déconnexion de MySQL
       ?>
    </b></font><font color="#FFFFFF" face="Geneva, arial, Helvetica, san-serif"size="2"></font> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:    url(../../phases_finales/result2.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, arial, Helvetica, san-serif"size="3"><b> 
        <?php require ("../connect2.php") ; ?>
        <?
$reponse = mysql_query("SELECT * FROM phpidf_pf$annee WHERE id='270'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A2001= $donnees['A2001'];?>
        <?php echo $A2001;?>
        <?php
}
mysql_close();
?>
        </b></font></div>
    </div>
    
  </div>
  <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:    url(../../phases_finales/unique3.jpg); layer-background-image:    url(../../phases_finales/unique3.jpg); border: 1px none #000000"> 
    <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      <?php require ("../connect2.php") ; ?>
      <?  
$query = "SELECT phpidf_pf$annee.id,phpidf_pf$annee.clubA1002, phpidf_clubs.nom, phpidf_clubs.url_logo FROM phpidf_pf$annee, phpidf_clubs WHERE phpidf_pf$annee.clubA1002=phpidf_clubs.id and phpidf_pf$annee.id='270'";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {                 
                 "$row[2]";       
		      
		$clubA1002=$row[2];
		$logo1002=$row[3];
		echo $clubA1002;

		
		?>
      <?php
 
 }
mysql_close(); // Déconnexion de MySQL
       ?>
      </b></font><font color="#FFFFFF" face="Geneva, arial, Helvetica, san-serif"size="2"></font> 
      <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:    url(../../phases_finales/result2.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
        <div align="center"><font color="#FFFFFF" face="Geneva, arial, Helvetica, san-serif"size="3"><b> 
          <?php require ("../connect2.php") ; ?>
          <?
$reponse = mysql_query("SELECT * FROM phpidf_pf$annee WHERE id='270'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
          <?php $A2002= $donnees['A2002'];?>
          <?php echo $A2002;?>
          <?php
}
mysql_close();
?>
          </b></font></div>
      </div>
      
    </div>
  </div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 28px; top: 288px; background-image:    url(../../phases_finales/unique3.jpg); layer-background-image:    url(../../phases_finales/unique3.jpg); border: 1px none #000000"> 
  <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php require ("../connect2.php") ; ?>
    <?  
$query = "SELECT phpidf_pf$annee.id,phpidf_pf$annee.clubA1001, phpidf_clubs.nom, phpidf_clubs.url_logo FROM phpidf_pf$annee, phpidf_clubs WHERE phpidf_pf$annee.clubA1003=phpidf_clubs.id and phpidf_pf$annee.id='270'";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {                 
                 "$row[2]";       
		      
		$clubA1003=$row[2];
		$logo1003=$row[3];
		echo $clubA1003;

		
		?>
    <?php
 
 }
mysql_close(); // Déconnexion de MySQL
       ?>
    </b></font><font color="#FFFFFF" face="Geneva, arial, Helvetica, san-serif"size="2"></font> 
    <font color="#FFFFFF" face="Geneva, arial, Helvetica, san-serif"size="2"></font> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:    url(../../phases_finales/result2.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, arial, Helvetica, san-serif"size="3"><b> 
        <?php require ("../connect2.php") ; ?>
        <?php	 
$reponse = mysql_query("SELECT * FROM phpidf_pf$annee WHERE id='270'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A2004= $donnees['A2004'];?>
        <?php echo $A2004;?>
        <?php
}
mysql_close();
?>
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:    url(../../phases_finales/result2.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, arial, Helvetica, san-serif"size="3"><b> 
        <?php require ("../connect2.php") ; ?>
        <?php
$reponse = mysql_query("SELECT * FROM phpidf_pf$annee WHERE id='270'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A2003= $donnees['A2003'];?>
        <?php echo $A2003;?>
        <?php
}
mysql_close();
?>
        </b></font></div>
    </div>
    
  </div>
  <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:    url(../../phases_finales/unique3.jpg); layer-background-image:    url(../../phases_finales/unique3.jpg); border: 1px none #000000"> 
    <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      <?php require ("../connect2.php") ; ?>
      <?  
$query = "SELECT phpidf_pf$annee.id,phpidf_pf$annee.clubA1004, phpidf_clubs.nom, phpidf_clubs.url_logo FROM phpidf_pf$annee, phpidf_clubs WHERE phpidf_pf$annee.clubA1004=phpidf_clubs.id and phpidf_pf$annee.id='270'";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {                 
                 "$row[2]";       
		      
		$clubA1004=$row[2];
		$logo1004=$row[3];
		echo $clubA1004;

		
		?>
      <?php
 
 }
mysql_close(); // Déconnexion de MySQL
       ?>
      </b></font><font color="#FFFFFF" face="Geneva, arial, Helvetica, san-serif"size="2"></font> 
      <font color="#FFFFFF" face="Geneva, arial, Helvetica, san-serif"size="2"><b> 
      </b></font> </div>
  </div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 335px; top: 284px; background-image:    url(../../phases_finales/unique3.jpg); layer-background-image:    url(../../phases_finales/unique3.jpg); border: 1px none #000000"> 
  <div align="center"><font color="#FFFFFF" face="Geneva, arial, Helvetica, san-serif"size="2"><b>SCUF 
    <?php 
if ($A2001+$A2002>0)
{	
	
	if ($A2001 > $A2002)
	{
	$clubA1001=$clubA2001;
	}
	else
	{
	$clubA1001=$clubA2002;
	}
}
else
{
echo "";	
}	
	
	echo $clubA1001;
  ?>
    <?php 
  if ($A2001>$A2002)
	{
	$logo1001=$logo2001;
	}
	else
	{
	$logo1001=$logo2002;
	}
	 ?>
    </b></font> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:    url(../../phases_finales/result2.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, arial, Helvetica, san-serif"size="3"><b>03 
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:    url(../../phases_finales/unique3.jpg); layer-background-image:    url(../../phases_finales/unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, arial, Helvetica, san-serif"size="2"><b>Montesson 
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
        <?php 
  if ($A2003>$A2004)
	{
	$logo1002=$logo2003;
	}
	else
	{
	$logo1002=$logo2004;
	}
	 ?>
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:    url(../../phases_finales/result2.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, arial, Helvetica, san-serif"size="3"><b>21 
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, arial, Helvetica, san-serif"size="2"><b> 
    </b></font></div>
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<div id="Layer2" style="position:absolute; width:219px; height:20px; z-index:4; left: 6px; top: 362px; background-color: #FFCC66; layer-background-color: #FFCC66; border: 1px none #000000"> 
  <div align="center"><i><b>R&eacute;serve Promotion Honneur</b></i></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 29px; top: 394px; background-image:    url(../../phases_finales/unique3.jpg); layer-background-image:    url(../../phases_finales/unique3.jpg); border: 1px none #000000"> 
  <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php require ("../connect2.php") ; ?>
    <?  
$query = "SELECT phpidf_pf$annee.id,phpidf_pf$annee.clubA1001, phpidf_clubs.nom, phpidf_clubs.url_logo FROM phpidf_pf$annee, phpidf_clubs WHERE phpidf_pf$annee.clubA1001=phpidf_clubs.id and phpidf_pf$annee.id='9180'";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {                 
                 "$row[2]";       
		      
		$clubA1001=$row[2];
		$logo1001=$row[3];
		echo $clubA1001;

		
		?>
    <?php
 
 }
mysql_close(); // Déconnexion de MySQL
       ?>
    </b></font><font color="#FFFFFF" face="Geneva, arial, Helvetica, san-serif"size="2"></font> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:    url(../../phases_finales/result2.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, arial, Helvetica, san-serif"size="3"><b> 
        <?php require ("../connect2.php") ; ?>
        <?
$reponse = mysql_query("SELECT * FROM phpidf_pf$annee WHERE id='9180'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A2001= $donnees['A2001'];?>
        <?php echo $A2001;?>
        <?php
}
mysql_close();
?>
        </b></font></div>
    </div>
  </div>
  <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:    url(../../phases_finales/unique3.jpg); layer-background-image:    url(../../phases_finales/unique3.jpg); border: 1px none #000000"> 
    <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      <?php require ("../connect2.php") ; ?>
      <?  
$query = "SELECT phpidf_pf$annee.id,phpidf_pf$annee.clubA1002, phpidf_clubs.nom, phpidf_clubs.url_logo FROM phpidf_pf$annee, phpidf_clubs WHERE phpidf_pf$annee.clubA1002=phpidf_clubs.id and phpidf_pf$annee.id='9180'";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {                 
                 "$row[2]";       
		      
		$clubA1002=$row[2];
		$logo1002=$row[3];
		echo $clubA1002;

		
		?>
      <?php
 
 }
mysql_close(); // Déconnexion de MySQL
       ?>
      </b></font><font color="#FFFFFF" face="Geneva, arial, Helvetica, san-serif"size="2"></font> 
      <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:    url(../../phases_finales/result2.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
        <div align="center"><font color="#FFFFFF" face="Geneva, arial, Helvetica, san-serif"size="3"><b> 
          <?php require ("../connect2.php") ; ?>
          <?
$reponse = mysql_query("SELECT * FROM phpidf_pf$annee WHERE id='9180'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
          <?php $A2002= $donnees['A2002'];?>
          <?php echo $A2002;?>
          <?php
}
mysql_close();
?>
          </b></font></div>
      </div>
    </div>
  </div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 335px; top: 425px; background-image:    url(../../phases_finales/unique3.jpg); layer-background-image:    url(../../phases_finales/unique3.jpg); border: 1px none #000000"> 
  <div align="center"><font color="#FFFFFF" face="Geneva, arial, Helvetica, san-serif"size="2"><b>Paris 
    Massif Central 
    <?php 
if ($A2001+$A2002>0)
{	
	
	if ($A2001 > $A2002)
	{
	$clubA1001=$clubA2001;
	}
	else
	{
	$clubA1001=$clubA2002;
	}
}
else
{
echo "";	
}	
	
	echo $clubA1001;
  ?>
    <?php 
  if ($A2001>$A2002)
	{
	$logo1001=$logo2001;
	}
	else
	{
	$logo1001=$logo2002;
	}
	 ?>
    </b></font> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:    url(../../phases_finales/result2.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, arial, Helvetica, san-serif"size="3"><b>13 
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:    url(../../phases_finales/unique3.jpg); layer-background-image:    url(../../phases_finales/unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, arial, Helvetica, san-serif"size="2"><b>Mantes 
        Limay 
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
        <?php 
  if ($A2003>$A2004)
	{
	$logo1002=$logo2003;
	}
	else
	{
	$logo1002=$logo2004;
	}
	 ?>
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:    url(../../phases_finales/result2.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, arial, Helvetica, san-serif"size="3"><b>08 
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, arial, Helvetica, san-serif"size="2"><b> 
    </b></font></div>
</div>
<p>&nbsp;</p>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 30px; top: 438px; background-image:    url(../../phases_finales/unique3.jpg); layer-background-image:    url(../../phases_finales/unique3.jpg); border: 1px none #000000"> 
  <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php require ("../connect2.php") ; ?>
    <?  
$query = "SELECT phpidf_pf$annee.id,phpidf_pf$annee.clubA1003, phpidf_clubs.nom, phpidf_clubs.url_logo FROM phpidf_pf$annee, phpidf_clubs WHERE phpidf_pf$annee.clubA1003=phpidf_clubs.id and phpidf_pf$annee.id='9180'";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {                 
                 "$row[2]";       
		      
		$clubA1003=$row[2];
		$logo1003=$row[3];
		echo $clubA1003;

		
		?>
    <?php
 
 }
mysql_close(); // Déconnexion de MySQL
       ?>
    </b></font><font color="#FFFFFF" face="Geneva, arial, Helvetica, san-serif"size="2"></font> 
    <font color="#FFFFFF" face="Geneva, arial, Helvetica, san-serif"size="2"></font> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:    url(../../phases_finales/result2.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, arial, Helvetica, san-serif"size="3"><b> 
        <?php require ("../connect2.php") ; ?>
        <?php	 
$reponse = mysql_query("SELECT * FROM phpidf_pf$annee WHERE id='9180'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A2004= $donnees['A2004'];?>
        <?php echo $A2004;?>
        <?php
}
mysql_close();
?>
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:    url(../../phases_finales/result2.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, arial, Helvetica, san-serif"size="3"><b> 
        <?php require ("../connect2.php") ; ?>
        <?php
$reponse = mysql_query("SELECT * FROM phpidf_pf$annee WHERE id='9180'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A2003= $donnees['A2003'];?>
        <?php echo $A2003;?>
        <?php
}
mysql_close();
?>
        </b></font></div>
    </div>
  </div>
  <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:    url(../../phases_finales/unique3.jpg); layer-background-image:    url(../../phases_finales/unique3.jpg); border: 1px none #000000"> 
    <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      <?php require ("../connect2.php") ; ?>
      <?  
$query = "SELECT phpidf_pf$annee.id,phpidf_pf$annee.clubA1004, phpidf_clubs.nom, phpidf_clubs.url_logo FROM phpidf_pf$annee, phpidf_clubs WHERE phpidf_pf$annee.clubA1004=phpidf_clubs.id and phpidf_pf$annee.id='9180'";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {                 
                 "$row[2]";       
		      
		$clubA1004=$row[2];
		$logo1004=$row[3];
		echo $clubA1004;

		
		?>
      <?php
 
 }
mysql_close(); // Déconnexion de MySQL
       ?>
      </b></font><font color="#FFFFFF" face="Geneva, arial, Helvetica, san-serif"size="2"></font> 
      <font color="#FFFFFF" face="Geneva, arial, Helvetica, san-serif"size="2"><b> 
      </b></font> </div>
  </div>
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<div id="Layer6" style="position:absolute; width:994px; height:55px; z-index:8; left: 1px; top: 610px"> 
  <table width="100%">
    <tr> 
      <td valign="top" height="3">___________________________________________________________________________________________________________________________</td>
    </tr>
    <tr> 
      <td height="85"> 
        <div align="center"> 
          <?php
    // On inclut le haut de la page
    
	include("../../pub1.php"); ?>
        </div>
      </td>
    </tr>
  </table>
</div>
<div id="Layer5" style="position:absolute; width:683px; height:76px; z-index:14; left: 304px; top: 527px; background-color: #FFFFCC; layer-background-color: #FFFFCC; border: 1px none #000000"> 
  <div align="center"><a href="../../resultats/IDF/Comm_presse_finales2015.pdf" target="_top"><font color="#000000"><b><font face="Arial, Helvetica, sans-serif">Programme 
    complet des Finales territoriales d'ile de France qui auront lieu le 26 Avril 
    au</font></b></font></a><font face="Arial, Helvetica, sans-serif"><br>
    <font color="#FF0000" size="4"><b><br>
    <font size="5">Rugby Club Vall&eacute;e de Montmorency</font></b></font><br>
    (Andilly &#150; Enghien &#150; Groslay &#150; Margency &#150; Montmorency 
    - Soisy)</font></div>
</div>
<p>&nbsp;</p>
