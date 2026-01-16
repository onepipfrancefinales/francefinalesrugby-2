


<?php $annee=$_GET['variable_1'];?>

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
<body bgcolor="#DFDFDF">
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
          </font></b></font><font color="#000000" size="2"><a href="http://francefinalesrugby.franceserv.com/phasesfinalesterr/mpy/page4serie.php?variable_1=<?php echo $anneemoins;?>" target="_top"><font size="5" color="#000000">&lt;&lt;</font></a></font><font color="#000000" size="2"><font size="5" color="#EAECEB"></font></font></b></font></b></font><font color="#000000" size="2"><font size="5" color="#EAECEB">nnnnne</font><font size="5"> 
          </font></font><a href="http://francefinalesrugby.franceserv.com/phasesfinalesterr/mpy/page4serie.php?variable_1=<?php echo $anneeplus;?>"target="_top"><font color="#000000">&gt;&gt;</font></a></b></font></div>
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
        <? echo "Finales territoriales du comit&egrave; des Pyr&egrave;n&egrave;es ";?>
        </font></b></font></td>
    </tr>
  </table>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 92px; top: 435px; background-image:    url(../../phases_finales/unique3.jpg); layer-background-image:    url(../../phases_finales/unique3.jpg); border: 1px none #000000"> 
  <div align="center"> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php require ("../connect1.php") ; ?>
    <?  
$query = "SELECT Phpmpy_pf$annee.id,Phpmpy_pf$annee.clubA8005, Phpmpy_clubs.nom, Phpmpy_clubs.url_logo FROM Phpmpy_pf$annee, Phpmpy_clubs WHERE Phpmpy_pf$annee.clubA8005=Phpmpy_clubs.id and Phpmpy_pf$annee.id='220'";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {                 
                 "$row[2]";       
		      
		$clubA8005=$row[2];
		$logo8005=$row[3];
		echo $clubA8005;

		
		?>
    <?php
 
 }
mysql_close(); // D&egrave;connexion de MySQL
       ?>
    </b></font> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:    url(../../phases_finales/result2.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b>22 
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:    url(../../phases_finales/unique3.jpg); layer-background-image:    url(../../phases_finales/unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        <?php require ("../connect1.php") ; ?>
        <?  
$query = "SELECT Phpmpy_pf$annee.id,Phpmpy_pf$annee.clubA8006, Phpmpy_clubs.nom, Phpmpy_clubs.url_logo FROM Phpmpy_pf$annee, Phpmpy_clubs WHERE Phpmpy_pf$annee.clubA8006=Phpmpy_clubs.id and Phpmpy_pf$annee.id='220'";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {                 
                 "$row[2]";       
		      
		$clubA8006=$row[2];
		$logo8006=$row[3];
		echo $clubA8006;

		
		?>
        <?php
 
 }
mysql_close(); // D&egrave;connexion de MySQL
       ?>
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:    url(../../phases_finales/result2.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b>5 
        </b></font></div>
    </div>
    
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 230px; top: 1px; background-image:    url(../../phases_finales/result2.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b>19 
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 230px; top: 21px; background-image:    url(../../phases_finales/result2.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b>52 
        </b></font></div>
    </div>
  </div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 91px; top: 507px; background-image:    url(../../phases_finales/unique3.jpg); layer-background-image:    url(../../phases_finales/unique3.jpg); border: 1px none #000000"> 
  <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b>
    <?php require ("../connect1.php") ; ?>
    <?  
$query = "SELECT Phpmpy_pf$annee.id,Phpmpy_pf$annee.clubA8007, Phpmpy_clubs.nom, Phpmpy_clubs.url_logo FROM Phpmpy_pf$annee, Phpmpy_clubs WHERE Phpmpy_pf$annee.clubA8007=Phpmpy_clubs.id and Phpmpy_pf$annee.id='220'";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {                 
                 "$row[2]";       
		      
		$clubA8007=$row[2];
		$logo8007=$row[3];
		echo $clubA8007;

		
		?>
    <?php
 
 }
mysql_close(); // D&egrave;connexion de MySQL
       ?>
    </b></font> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 201px; top: 21px; background-image:    url(../../phases_finales/result2.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b>16</b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:    url(../../phases_finales/unique3.jpg); layer-background-image:    url(../../phases_finales/unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        <?php require ("../connect1.php") ; ?>
        <?  
$query = "SELECT Phpmpy_pf$annee.id,Phpmpy_pf$annee.clubA8008, Phpmpy_clubs.nom, Phpmpy_clubs.url_logo FROM Phpmpy_pf$annee, Phpmpy_clubs WHERE Phpmpy_pf$annee.clubA8008=Phpmpy_clubs.id and Phpmpy_pf$annee.id='220'";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {                 
                 "$row[2]";       
		      
		$clubA8008=$row[2];
		$logo8008=$row[3];
		echo $clubA8008;

		
		?>
        <?php
 
 }
mysql_close(); // D&egrave;connexion de MySQL
       ?>
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 201px; top: 1px; background-image:    url(../../phases_finales/result2.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b>15</b></font></div>
    </div>
    
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 233px; top: 1px; background-image:    url(../../phases_finales/result2.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b>00 
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 233px; top: 21px; background-image:    url(../../phases_finales/result2.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b>24 
        </b></font></div>
    </div>
  </div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 93px; top: 325px; background-image:    url(../../phases_finales/unique3.jpg); layer-background-image:    url(../../phases_finales/unique3.jpg); border: 1px none #000000"> 
  <div align="center"> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php require ("../connect1.php") ; ?>
    <?  
$query = "SELECT Phpmpy_pf$annee.id,Phpmpy_pf$annee.clubA8003, Phpmpy_clubs.nom, Phpmpy_clubs.url_logo FROM Phpmpy_pf$annee, Phpmpy_clubs WHERE Phpmpy_pf$annee.clubA8003=Phpmpy_clubs.id and Phpmpy_pf$annee.id='220'";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {                 
                 "$row[2]";       
		      
		$clubA8003=$row[2];
		$logo8003=$row[3];
		echo $clubA8003;

		
		?>
    <?php
 
 }
mysql_close(); // D&egrave;connexion de MySQL
       ?>
    </b></font> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:    url(../../phases_finales/result2.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b>9</b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:    url(../../phases_finales/unique3.jpg); layer-background-image:    url(../../phases_finales/unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        <?php require ("../connect1.php") ; ?>
        <?  
$query = "SELECT Phpmpy_pf$annee.id,Phpmpy_pf$annee.clubA8004, Phpmpy_clubs.nom, Phpmpy_clubs.url_logo FROM Phpmpy_pf$annee, Phpmpy_clubs WHERE Phpmpy_pf$annee.clubA8004=Phpmpy_clubs.id and Phpmpy_pf$annee.id='220'";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {                 
                 "$row[2]";       
		      
		$clubA8004=$row[2];
		$logo8004=$row[3];
		echo $clubA8004;

		
		?>
        <?php
 
 }
mysql_close(); // D&egrave;connexion de MySQL
       ?>
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:    url(../../phases_finales/result2.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b>17</b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 230px; top: 1px; background-image:    url(../../phases_finales/result2.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b>10 
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 230px; top: 21px; background-image:    url(../../phases_finales/result2.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b>14 
        </b></font></div>
    </div>
  </div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 92px; top: 247px; background-image:    url(../../phases_finales/unique3.jpg); layer-background-image:    url(../../phases_finales/unique3.jpg); border: 1px none #000000"> 
  <div align="center"> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php require ("../connect1.php") ; ?>
    <?  
$query = "SELECT Phpmpy_pf$annee.id,Phpmpy_pf$annee.clubA8005, Phpmpy_clubs.nom, Phpmpy_clubs.url_logo FROM Phpmpy_pf$annee, Phpmpy_clubs WHERE Phpmpy_pf$annee.clubA8001=Phpmpy_clubs.id and Phpmpy_pf$annee.id='220'";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {                 
                 "$row[2]";       
		      
		$clubA8001=$row[2];
		$logo8001=$row[3];
		echo $clubA8001;

		
		?>
    <?php
 
 }
mysql_close(); // D&egrave;connexion de MySQL
       ?>
    </b></font> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:    url(../../phases_finales/result2.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b>16 
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:    url(../../phases_finales/unique3.jpg); layer-background-image:    url(../../phases_finales/unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        <?php require ("../connect1.php") ; ?>
        <?  
$query = "SELECT Phpmpy_pf$annee.id,Phpmpy_pf$annee.clubA8006, Phpmpy_clubs.nom, Phpmpy_clubs.url_logo FROM Phpmpy_pf$annee, Phpmpy_clubs WHERE Phpmpy_pf$annee.clubA8002=Phpmpy_clubs.id and Phpmpy_pf$annee.id='220'";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {                 
                 "$row[2]";       
		      
		$clubA8002=$row[2];
		$logo8002=$row[3];
		echo $clubA8002;

		
		?>
        <?php
 
 }
mysql_close(); // D&egrave;connexion de MySQL
       ?>
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:    url(../../phases_finales/result2.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b>13 
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 230px; top: 1px; background-image:    url(../../phases_finales/result2.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b>6 
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 230px; top: 21px; background-image:    url(../../phases_finales/result2.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b>16 
        </b></font></div>
    </div>
  </div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 455px; top: 291px; background-image:    url(../../phases_finales/unique3.jpg); layer-background-image:    url(../../phases_finales/unique3.jpg); border: 1px none #000000"> 
  <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b>Boulogne 
    sur Gesse</b></font> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:    url(../../phases_finales/result2.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b>12 
        </b></font></div>	
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:    url(../../phases_finales/unique3.jpg); layer-background-image:    url(../../phases_finales/unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b>RC 
        Rougier </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:    url(../../phases_finales/result2.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b>20 
        </b></font></div>
    </div>
    
  </div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 457px; top: 470px; background-image:    url(../../phases_finales/unique3.jpg); layer-background-image:    url(../../phases_finales/unique3.jpg); border: 1px none #000000"> 
  <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b>Valence 
    d'Albi</b></font> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:    url(../../phases_finales/result2.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b>6 
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:    url(../../phases_finales/unique3.jpg); layer-background-image:    url(../../phases_finales/unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b>Montans</b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:    url(../../phases_finales/result2.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b>30 
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 741px; top: 328px; background-image:    url(../../phases_finales/unique3.jpg); layer-background-image:    url(../../phases_finales/unique3.jpg); border: 1px none #000000"> 
  <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b>Boulogne 
    sur Gesse</b></font> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:    url(../../phases_finales/result2.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b>19 
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:    url(../../phases_finales/unique3.jpg); layer-background-image:    url(../../phases_finales/unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b>Valence 
        d'Albi </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:    url(../../phases_finales/result2.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b>10 
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font></div>
</div>
<div id="Layer3" style="position:absolute; width:160px; height:20px; z-index:5; left: 761px; top: 195px; background-image:    url(../../phases_finales/titre.jpg); layer-background-image:    url(../../phases_finales/titre.jpg); border: 1px none #000000"> 
  <div align="center"><font color="#FFFFFF"><b>Finale</b></font></div>
</div>
<div id="Layer3" style="position:absolute; width:160px; height:20px; z-index:5; left: 511px; top: 196px; background-image:    url(../../phases_finales/titre.jpg); layer-background-image:    url(../../phases_finales/titre.jpg); border: 1px none #000000"> 
  <div align="center"><font color="#FFFFFF"><b>Demi finale</b></font></div>
</div>
<div id="Layer3" style="position:absolute; width:160px; height:20px; z-index:5; left: 269px; top: 195px; background-image:    url(../../phases_finales/titre.jpg); layer-background-image:    url(../../phases_finales/titre.jpg); border: 1px none #000000"> 
  <div align="center"><font color="#FFFFFF"><b>Quarts de finale</b></font></div>
</div>
<div id="Layer2" style="position:absolute; width:1000px; height:20px; z-index:4; left: 0px; top: 164px; background-color: #FFCC66; layer-background-color: #FFCC66; border: 1px none #000000"><i><b>4me 
  S&eacute;rie 4me S&eacute;rie 4me S&eacute;rie 4me S&eacute;rie 4me S&eacute;rie 
  4me S&eacute;rie 4me S&eacute;rie 4me S&eacute;rie 4me S&eacute;rie 4me S&eacute;rie 
  4me S&eacute;rie 4me S&eacute;rie 4me S&eacute;rie 4me S&eacute;rie 4me </b></i></div>
   
	   
<div id="Layer4" style="position:absolute; width:1px; height:102px; z-index:6; left: 390px; top: 439px; background-color: #FF0000; layer-background-color: #FF0000; border: 1px none #000000"></div>
<div id="Layer4" style="position:absolute; width:1px; height:177px; z-index:6; left: 711px; top: 315px; background-color: #FF0000; layer-background-color: #FF0000; border: 1px none #000000"></div>
<div id="Layer4" style="position:absolute; width:1px; height:102px; z-index:6; left: 398px; top: 252px; background-color: #FF0000; layer-background-color: #FF0000; border: 1px none #000000"></div>
<div id="Layer7" style="position:absolute; width:200px; height:15px; z-index:12; left: 743px; top: 311px"><font size="2" face="Arial, Helvetica, sans-serif"> 
  <b><i> 
  <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion à MySQL
mysql_select_db("onepip-france-db1"); // S&egrave;lection de la base onepip
$reponse = mysql_query("SELECT * FROM Phpmpy_pf$annee WHERE id='220' "); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
  <strong> 
  <?php echo $donnees['Finale'];?>
  <?php
 
 }
mysql_close(); // D&egrave;connexion de MySQL
?>
  </strong></i></b></font></div>
<div id="Layer7" style="position:absolute; width:200px; height:15px; z-index:12; left: 135px; top: 221px"><font size="2" face="Arial, Helvetica, sans-serif"> 
  <b><i> 
  <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion à MySQL
mysql_select_db("onepip-france-db1"); // S&egrave;lection de la base onepip
$reponse = mysql_query("SELECT * FROM Phpmpy_pf$annee WHERE id='220' "); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
  <strong> 
  <?php echo $donnees['Quart1'];?>
  <?php
 
 }
mysql_close(); // D&egrave;connexion de MySQL
?>
  </strong></i></b></font></div>
<div id="Layer7" style="position:absolute; width:193px; height:15px; z-index:12; left: 131px; top: 411px"><font size="2" face="Arial, Helvetica, sans-serif"> 
  <b><i> 
  <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion à MySQL
mysql_select_db("onepip-france-db1"); // S&egrave;lection de la base onepip
$reponse = mysql_query("SELECT * FROM Phpmpy_pf$annee WHERE id='220' "); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
  <strong> 
  <?php echo $donnees['Quart3'];?>
  <?php
 
 }
mysql_close(); // D&egrave;connexion de MySQL
?>
  </strong></i></b></font></div>
<div id="Layer7" style="position:absolute; width:200px; height:15px; z-index:12; left: 446px; top: 453px"><font size="2" face="Arial, Helvetica, sans-serif"> 
  <b><i> 
  <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion à MySQL
mysql_select_db("onepip-france-db1"); // S&egrave;lection de la base onepip
$reponse = mysql_query("SELECT * FROM Phpmpy_pf$annee WHERE id='220' "); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
  <strong> 
  <?php echo $donnees['Demi2'];?>
  <?php
 
 }
mysql_close(); // D&egrave;connexion de MySQL
?>
  </strong></i></b></font></div>
<div id="Layer7" style="position:absolute; width:200px; height:15px; z-index:12; left: 439px; top: 274px"><font size="2" face="Arial, Helvetica, sans-serif"> 
  <b><i> 
  <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion à MySQL
mysql_select_db("onepip-france-db1"); // S&egrave;lection de la base onepip
$reponse = mysql_query("SELECT * FROM Phpmpy_pf$annee WHERE id='220' "); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
  <strong> 
  <?php echo $donnees['Demi1'];?>
  <?php
 
 }
mysql_close(); // D&egrave;connexion de MySQL
?>
  </strong></i></b></font></div>
<div id="Layer7" style="position:absolute; width:200px; height:15px; z-index:12; left: 137px; top: 301px"><font size="2" face="Arial, Helvetica, sans-serif"> 
  <b><i> 
  <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion à MySQL
mysql_select_db("onepip-france-db1"); // S&egrave;lection de la base onepip
$reponse = mysql_query("SELECT * FROM Phpmpy_pf$annee WHERE id='220' "); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
  <strong> 
  <?php echo $donnees['Quart2'];?>
  <?php
 
 }
mysql_close(); // D&egrave;connexion de MySQL
?>
  </strong></i></b></font></div>
<div id="Layer2" style="position:absolute; width:234px; height:28px; z-index:10; left: 727px; top: 391px"> 
  <div align="center"><font color="#000000" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
    <font size="6"> 
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
    </font></b></font></div>
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><font size="2" face="Arial, Helvetica, sans-serif"><b><i> </i></b></font></p>
<p><font size="2" face="Arial, Helvetica, sans-serif"><b><i> </i></b></font></p>
<p><font size="2" face="Arial, Helvetica, sans-serif"><b><i> </i></b></font></p>
<p><font size="2" face="Arial, Helvetica, sans-serif"><b><i> </i></b></font></p>
<p>
<div id="Layer6" style="position:absolute; width:98px; height:60px; z-index:11; left: 793px; top: 447px"> 
  <div align="center"><font color="#000000" face="Geneva, Arial, Helvetica, san-serif"size="4"><b> 
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
    </b></font></div>
</div>
<p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<div id="Layer7" style="position:absolute; width:193px; height:15px; z-index:12; left: 130px; top: 491px"><font size="2"> 
  <b><font face="Arial, Helvetica, sans-serif"><i> 
  <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion à MySQL
mysql_select_db("onepip-france-db1"); // S&egrave;lection de la base onepip
$reponse = mysql_query("SELECT * FROM Phpmpy_pf$annee WHERE id='220' "); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
  <strong> </strong></i></font><font size="2" face="Arial, Helvetica, sans-serif"><i><strong> 
  <?php echo $donnees['Quart4'];?>
  </strong></i></font><font face="Arial, Helvetica, sans-serif"><i><strong> 
  <?php
 
 }
mysql_close(); // D&egrave;connexion de MySQL
?>
  </strong></i></font></b></font></div>
<div id="Layer7" style="position:absolute; width:200px; height:103px; z-index:12; left: 1px; top: 580px"> 
  <table width="1000" height="95">
    <tr align="center" valign="middle"> 
      <td colspan="4" height="33"> 
        <div align="left"><img src="../ligne1.jpg" width="950" height="4"> </div>
      </td>
    </tr>
    <tr> 
      <td colspan="2" height="11" valign="top"> 
        <?php
    // On inclut le haut de la page
    
	include("../pub4.php"); ?>
        <div align="left"></div>
      </td>
      <td colspan="2" height="11" valign="top"> 
        <?php
    // On inclut le haut de la page
    
	include("../pub4.php"); ?>
        <div align="left"></div>
      </td>
    </tr>
  </table>
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
