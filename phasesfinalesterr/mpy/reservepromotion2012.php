<?php $annee=$_GET['variable_1'];?>
<?php
if ($annee==2012)
{
$clubA8001 = 'Portet sur Garonne ';
$clubA8002 = 'Seilh Fenouillet';
$clubA8017 = 'Lavelanet ';
$clubA8007 = 'Toulouse Lalande ';
$clubA8003 = 'L Isle sur Tarn ';
$clubA8008 = 'Villeneuve du Pareage ';
$clubA8005 = 'La Tour du Crieu ';
$clubA8011 = 'Brassac ';
$clubA8004 = 'L Union ';
$clubA8013 = 'Daumazan ';
$clubA8006 = 'Ramonville  ';
$clubA8015 = 'Vielmur ';
$clubA4001 = 'Villeneuve du Pareage ';
$clubA4008 = 'Lunion ';
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

<div id="Layer4" style="position:absolute; width:1px; height:76px; z-index:6; left: 270px; top: 417px; background-color: #FF0000; layer-background-color: #FF0000; border: 1px none #000000"></div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 5px; top: 293px; background-image:    url(../../phases_finales/unique30.jpg); layer-background-image:    url(../../phases_finales/unique30.jpg); border: 1px none #000000"> 
  <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php
	
	echo $clubA8017;
	
	?>
    </b></font></b></font></b></font> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:    url(../../phases_finales/result20.jpg); layer-background-image:    url(../../phases_finales/result20.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php require ("../connect1.php") ; ?>
        <?php 
$reponse = mysql_query("SELECT * FROM Phpmpy_pf$annee WHERE id='9180'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A8004= $donnees['A8004'];?>
        <?php echo $A8004;?>
        <?php
}
mysql_close();
?>
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:    url(../../phases_finales/unique30.jpg); layer-background-image:    url(../../phases_finales/unique30.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        <?php
	
	echo $clubA8007;
	
	?>
        </b></font> </b></font></b></font> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:    url(../../phases_finales/result20.jpg); layer-background-image:    url(../../phases_finales/result20.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php require ("../connect1.php") ; ?>
        <?
$reponse = mysql_query("SELECT * FROM Phpmpy_pf$annee WHERE id='9180'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A8003= $donnees['A8003'];?>
        <?php echo $A8003;?>
        <?php
}
mysql_close();
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 231px; top: 21px; background-image:    url(../../phases_finales/result20.jpg); layer-background-image:    url(../../phases_finales/result20.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php require ("../connect1.php") ; ?>
        <?php 
$reponse = mysql_query("SELECT * FROM Phpmpy_pf$annee WHERE id='9180'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $B8004= $donnees['B8004'];?>
        <?php echo $B8004;?>
        <?php
}
mysql_close();
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font> </b></font> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 230px; top: 1px; background-image:    url(../../phases_finales/result20.jpg); layer-background-image:    url(../../phases_finales/result20.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php require ("../connect1.php") ; ?>
        <?
$reponse = mysql_query("SELECT * FROM Phpmpy_pf$annee WHERE id='9180'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $B8003= $donnees['B8003'];?>
        <?php echo $B8003;?>
        <?php
}
mysql_close();
?>
        </b></font></div>
    </div>
  </div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 4px; top: 400px; background-image:    url(../../phases_finales/unique30.jpg); layer-background-image:    url(../../phases_finales/unique30.jpg); border: 1px none #000000"> 
  <div align="center"><b><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php
	
	echo $clubA8005;
	
	?>
    </b></font> </b> </font></b> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:    url(../../phases_finales/result20.jpg); layer-background-image:    url(../../phases_finales/result20.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php require ("../connect1.php") ; ?>
        <?php 
$reponse = mysql_query("SELECT * FROM Phpmpy_pf$annee WHERE id='9180'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A8008= $donnees['A8008'];?>
        <?php echo $A8008;?>
        <?php
}
mysql_close();
?>
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:    url(../../phases_finales/unique30.jpg); layer-background-image:    url(../../phases_finales/unique30.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        <?php
	
	echo $clubA8011;
	
	?>
        </b></font></b></font> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:    url(../../phases_finales/result20.jpg); layer-background-image:    url(../../phases_finales/result20.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php require ("../connect1.php") ; ?>
        <?
$reponse = mysql_query("SELECT * FROM Phpmpy_pf$annee WHERE id='9180'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A8007= $donnees['A8007'];?>
        <?php echo $A8007;?>
        <?php
}
mysql_close();
?>
        </b></font></div>
    </div>
    <b><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font></b> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 231px; top: 21px; background-image:    url(../../phases_finales/result20.jpg); layer-background-image:    url(../../phases_finales/result20.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php require ("../connect1.php") ; ?>
        <?php 
$reponse = mysql_query("SELECT * FROM Phpmpy_pf$annee WHERE id='9180'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $B8008= $donnees['B8008'];?>
        <?php echo $B8008;?>
        <?php
}
mysql_close();
?>
        </b></font></div>
    </div>
    <b><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font></b> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 230px; top: 1px; background-image:    url(../../phases_finales/result20.jpg); layer-background-image:    url(../../phases_finales/result20.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php require ("../connect1.php") ; ?>
        <?
$reponse = mysql_query("SELECT * FROM Phpmpy_pf$annee WHERE id='9180'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $B8007= $donnees['B8007'];?>
        <?php echo $B8007;?>
        <?php
}
mysql_close();
?>
        </b></font></div>
    </div>
    <b><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font></b> <b><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font></b></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 3px; top: 342px; background-image:    url(../../phases_finales/unique30.jpg); layer-background-image:    url(../../phases_finales/unique30.jpg); border: 1px none #000000"> 
  <div align="center"><b><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php
	
	echo $clubA8003;
	
	?>
    </b></font></b></font> </b> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:    url(../../phases_finales/result20.jpg); layer-background-image:    url(../../phases_finales/result20.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php require ("../connect1.php") ; ?>
        <?php 
$reponse = mysql_query("SELECT * FROM Phpmpy_pf$annee WHERE id='9180'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A8006= $donnees['A8006'];?>
        <?php echo $A8006;?>
        <?php
}
mysql_close();
?>
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:    url(../../phases_finales/unique30.jpg); layer-background-image:    url(../../phases_finales/unique30.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        <?php
	
	echo $clubA8008;
	
	?>
        </b></font></b></font> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:    url(../../phases_finales/result20.jpg); layer-background-image:    url(../../phases_finales/result20.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php require ("../connect1.php") ; ?>
        <?
$reponse = mysql_query("SELECT * FROM Phpmpy_pf$annee WHERE id='9180'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A8005= $donnees['A8005'];?>
        <?php echo $A8005;?>
        <?php
}
mysql_close();
?>
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 231px; top: 21px; background-image:    url(../../phases_finales/result20.jpg); layer-background-image:    url(../../phases_finales/result20.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php require ("../connect1.php") ; ?>
        <?php 
$reponse = mysql_query("SELECT * FROM Phpmpy_pf$annee WHERE id='9180'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $B8006 =$donnees['B8006'];?>
        <?php echo $B8006;?>
        <?php
}
mysql_close();
?>
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 230px; top: 1px; background-image:    url(../../phases_finales/result20.jpg); layer-background-image:    url(../../phases_finales/result20.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php require ("../connect1.php") ; ?>
        <?
$reponse = mysql_query("SELECT * FROM Phpmpy_pf$annee WHERE id='9180'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $B8005= $donnees['B8005'];?>
        <?php echo $B8005;?>
        <?php
}
?>
        </b></font></div>
    </div>
  </div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 3px; top: 458px; background-image:    url(../../phases_finales/unique30.jpg); layer-background-image:    url(../../phases_finales/unique30.jpg); border: 1px none #000000"> 
  <div align="center"><b><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php
	
	echo $clubA8004;
	
	?>
    </b></font> </b> </font></b> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:    url(../../phases_finales/result20.jpg); layer-background-image:    url(../../phases_finales/result20.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php require ("../connect1.php") ; ?>
        <?php 
$reponse = mysql_query("SELECT * FROM Phpmpy_pf$annee WHERE id='9180'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A8010= $donnees['A8010'];?>
        <?php echo $A8010;?>
        <?php
}
mysql_close();
?>
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:    url(../../phases_finales/unique30.jpg); layer-background-image:    url(../../phases_finales/unique30.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        <?php
	
	echo $clubA8013;
	
	?>
        </b></font></b></font></b></font> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:    url(../../phases_finales/result20.jpg); layer-background-image:    url(../../phases_finales/result20.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php require ("../connect1.php") ; ?>
        <?
$reponse = mysql_query("SELECT * FROM Phpmpy_pf$annee WHERE id='9180'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A8009= $donnees['A8009'];?>
        <?php echo $A8009;?>
        <?php
}
mysql_close();
?>
        </b></font></div>
    </div>
    <b><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font></b> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 231px; top: 21px; background-image:    url(../../phases_finales/result20.jpg); layer-background-image:    url(../../phases_finales/result20.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php require ("../connect1.php") ; ?>
        <?php 
$reponse = mysql_query("SELECT * FROM Phpmpy_pf$annee WHERE id='9180'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $B8010= $donnees['B8010'];?>
        <?php echo $B8010;?>
        <?php
}
mysql_close();
?>
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 230px; top: 1px; background-image:    url(../../phases_finales/result20.jpg); layer-background-image:    url(../../phases_finales/result20.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php require ("../connect1.php") ; ?>
        <?
$reponse = mysql_query("SELECT * FROM Phpmpy_pf$annee WHERE id='9180'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $B8009= $donnees['B8009'];?>
        <?php echo $B8009;?>
        <?php
}
mysql_close();
?>
        </b></font></div>
    </div>
    <b><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font></b> <b><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font></b> <b><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font></b></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 5px; top: 514px; background-image:    url(../../phases_finales/unique30.jpg); layer-background-image:    url(../../phases_finales/unique30.jpg); border: 1px none #000000"> 
  <div align="center"><b><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php 
	echo $clubA8006;
	  ?>
    </b></font> </b> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:    url(../../phases_finales/result20.jpg); layer-background-image:    url(../../phases_finales/result20.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php require ("../connect1.php") ; ?>
        <?php 
$reponse = mysql_query("SELECT * FROM Phpmpy_pf$annee WHERE id='9180'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A8012= $donnees['A8012'];?>
        <?php echo $A8012;?>
        <?php
}
mysql_close();
?>
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:    url(../../phases_finales/unique30.jpg); layer-background-image:    url(../../phases_finales/unique30.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        <?php 
	echo $clubA8015;
	  ?>
        </b></font> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:    url(../../phases_finales/result20.jpg); layer-background-image:    url(../../phases_finales/result20.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php require ("../connect1.php") ; ?>
        <?
$reponse = mysql_query("SELECT * FROM Phpmpy_pf$annee WHERE id='9180'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A8011= $donnees['A8011'];?>
        <?php echo $A8011;?>
        <?php
}
mysql_close();
?>
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 231px; top: 21px; background-image:    url(../../phases_finales/result20.jpg); layer-background-image:    url(../../phases_finales/result20.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php require ("../connect1.php") ; ?>
        <?php 
$reponse = mysql_query("SELECT * FROM Phpmpy_pf$annee WHERE id='9180'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $B8012 = $donnees['B8012'];?>
        <?php echo $B8012;?>
        <?php
}
mysql_close();
?>
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 230px; top: 1px; background-image:    url(../../phases_finales/result20.jpg); layer-background-image:    url(../../phases_finales/result20.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php require ("../connect1.php") ; ?>
        <?
$reponse = mysql_query("SELECT * FROM Phpmpy_pf$annee WHERE id='9180'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $B8011= $donnees['B8011'];?>
        <?php echo $B8011;?>
        <?php
}
?>
        </b></font></div>
    </div>
  </div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 4px; top: 242px; background-image:    url(../../phases_finales/unique30.jpg); layer-background-image:    url(../../phases_finales/unique30.jpg); border: 1px none #000000"> 
  <div align="center"><b><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php
	
	echo $clubA8001;
	
	?>
    </b></font> </b> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:    url(../../phases_finales/result20.jpg); layer-background-image:    url(../../phases_finales/result20.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php require ("../connect1.php") ; ?>
        <?php 
$reponse = mysql_query("SELECT * FROM Phpmpy_pf$annee WHERE id='9180'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A8002= $donnees['A8002'];?>
        <?php echo $A8002;?>
        <?php
}
mysql_close();
?>
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:    url(../../phases_finales/unique30.jpg); layer-background-image:    url(../../phases_finales/unique30.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        <?php
	
	echo $clubA8002;
	
	?>
        </b></font> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:    url(../../phases_finales/result20.jpg); layer-background-image:    url(../../phases_finales/result20.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php require ("../connect1.php") ; ?>
        <?
$reponse = mysql_query("SELECT * FROM Phpmpy_pf$annee WHERE id='9180'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A8001= $donnees['A8001'];?>
        <?php echo $A8001;?>
        <?php
}
mysql_close();
?>
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 231px; top: 21px; background-image:    url(../../phases_finales/result20.jpg); layer-background-image:    url(../../phases_finales/result20.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php require ("../connect1.php") ; ?>
        <?php 
$reponse = mysql_query("SELECT * FROM Phpmpy_pf$annee WHERE id='9180'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $B8002= $donnees['B8002'];?>
        <?php echo $B8002;?>
        <?php
}
mysql_close();
?>
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 230px; top: 1px; background-image:    url(../../phases_finales/result20.jpg); layer-background-image:    url(../../phases_finales/result20.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php require ("../connect1.php") ; ?>
        <?
$reponse = mysql_query("SELECT * FROM Phpmpy_pf$annee WHERE id='9180'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $B8001= $donnees['B8001'];?>
        <?php echo $B8001;?>
        <?php
}
?>
        </b></font></div>
    </div>
  </div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 297px; top: 248px; background-image:    url(../../phases_finales/unique3.jpg); layer-background-image:    url(../../phases_finales/unique3.jpg); border: 1px none #000000"> 
  <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b>
    <?php
	
	echo $clubA4001;
	
	?>
    </b></font> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:    url(../../phases_finales/result2.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php require ("../connect1.php") ; ?>
        <?
$reponse = mysql_query("SELECT * FROM Phpmpy_pf$annee WHERE id='9180'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A4002= $donnees['A4002'];?>
        <?php echo $A4002;?>
        <?php
}
mysql_close();
?>
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:    url(../../phases_finales/unique3.jpg); layer-background-image:    url(../../phases_finales/unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        <?php 
if ($B8001+$B8002>0)
{	
	
	if (($A8001+$B8001)> ($A8002+$B8002))
	{
	$clubA4002=$clubA8001;
	}
	else
	{
	$clubA4002=$clubA8002;
	}
}
else
{
echo "";	
}	
	
	echo $clubA4002;
  ?>
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:    url(../../phases_finales/result2.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php require ("../connect1.php") ; ?>
        <?
$reponse = mysql_query("SELECT * FROM Phpmpy_pf$annee WHERE id='9180'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A4001= $donnees['A4001'];?>
        <?php echo $A4001;?>
        <?php
}
mysql_close();
?>
        </b></font></div>
    </div>
  </div>
  
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 297px; top: 317px; background-image:    url(../../phases_finales/unique3.jpg); layer-background-image:    url(../../phases_finales/unique3.jpg); border: 1px none #000000"> 
  <div align="center"><b><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b>
    <?php 
if ($B8003+$B8004>0)
{	
	
	if (($A8003+$B8003)>($A8004+$B8004))
	{
	$clubA4003=$clubA8017;
	}
	else
	{
	$clubA4003=$clubA8007;
	}
}
else
{
echo "";	
}	
	
	echo $clubA4003;
  ?>
    </b></font> </b> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:    url(../../phases_finales/result2.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM Phpmpy_pf$annee WHERE id='9180'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A4004= $donnees['A4004'];?>
        <?php echo $A4004;?>
        <?php
}
mysql_close();
?>
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:    url(../../phases_finales/unique3.jpg); layer-background-image:    url(../../phases_finales/unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        <?php 
if ($B8005+$B8006>0)
{	
	
	if (($A8005+$B8005)> ($A8006+$b8006))
	{
	$clubA4004=$clubA8003;
	}
	else
	{
	$clubA4004=$clubA8007;
	}
}
else
{
echo "";	
}	
	
	echo $clubA4004;
  ?>
        </b></font> </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:    url(../../phases_finales/result2.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php require ("../connect1.php") ; ?>
        <?
$reponse = mysql_query("SELECT * FROM Phpmpy_pf$annee WHERE id='9180'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A4003= $donnees['A4003'];?>
        <?php echo $A4003;?>
        <?php
}
mysql_close();
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 304px; top: 436px; background-image:    url(../../phases_finales/unique3.jpg); layer-background-image:    url(../../phases_finales/unique3.jpg); border: 1px none #000000"> 
  <div align="center"><b><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b>
    <?php 
if ($B8007+$B8008>0)
{	
	
	if ($A8007+$B8007> $A8008+$B8008)
	{
	$clubA4005=$clubA8005;
	}
	else
	{
	$clubA4005=$clubA8011;
	}
}
else
{
echo "";	
}	
	
	echo $clubA4005;
  ?>
    </b></font></b></font> </b> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:    url(../../phases_finales/result2.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php require ("../connect1.php") ; ?>
        <?
$reponse = mysql_query("SELECT * FROM Phpmpy_pf$annee WHERE id='9180'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A4006= $donnees['A4006'];?>
        <?php echo $A4006;?>
        <?php
}
mysql_close();
?>
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:    url(../../phases_finales/unique3.jpg); layer-background-image:    url(../../phases_finales/unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b>
        <?php 
if ($B8009+$B8010>0)
{	
	
	if ($A8009+$B8009> $A8010+$B8010)
	{
	$clubA4006=$clubA8004;
	}
	else
	{
	$clubA4006=$clubA8013;
	}
}
else
{
echo "";	
}	
	
	echo $clubA4006;
  ?>
        </b></font> </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:    url(../../phases_finales/result2.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php require ("../connect1.php") ; ?>
        <?
$reponse = mysql_query("SELECT * FROM Phpmpy_pf$annee WHERE id='9180'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A4005= $donnees['A4005'];?>
        <?php echo $A4005;?>
        <?php
}
mysql_close();
?>
        </b></font></div>
    </div>
  </div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 303px; top: 507px; background-image:    url(../../phases_finales/unique3.jpg); layer-background-image:    url(../../phases_finales/unique3.jpg); border: 1px none #000000"> 
  <div align="center"><b><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"></font></b><b><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font> </b> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php 
if ($B8011+$B8012>0)
{	
	
	if ($A8011> $A8012)
	{
	$clubA4007=$clubA8006;
	}
	else
	{
	$clubA4007=$clubA8015;
	}
}
else
{
echo "";	
}	
	
	echo $clubA4007;
  ?>
    </b></font></b></font> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:    url(../../phases_finales/result2.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php require ("../connect1.php") ; ?>
        <?
$reponse = mysql_query("SELECT * FROM Phpmpy_pf$annee WHERE id='9180'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A4008= $donnees['A4008'];?>
        <?php echo $A4008;?>
        <?php
}
mysql_close();
?>
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:    url(../../phases_finales/unique3.jpg); layer-background-image:    url(../../phases_finales/unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        <?php 
	echo $clubA4008;
	  ?>
        </b></font></b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:    url(../../phases_finales/result2.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php require ("../connect1.php") ; ?>
        <?
$reponse = mysql_query("SELECT * FROM Phpmpy_pf$annee WHERE id='9180'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A4007= $donnees['A4007'];?>
        <?php echo $A4007;?>
        <?php
}
mysql_close();
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font><b><font color="#FFFFFF"></font></b></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 532px; top: 291px; background-image:    url(../../phases_finales/unique3.jpg); layer-background-image:    url(../../phases_finales/unique3.jpg); border: 1px none #000000"> 
  <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:    url(../../phases_finales/result2.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php require ("../connect1.php") ; ?>
        <?
$reponse = mysql_query("SELECT * FROM Phpmpy_pf$annee WHERE id='9180'");

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
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:    url(../../phases_finales/unique3.jpg); layer-background-image:    url(../../phases_finales/unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        <?php 
if ($A4003+$A4004>0)
{	
	
	if ($A4003> $A4004)
	{
	$clubA2002=$clubA4003;
	}
	else
	{
	$clubA2002=$clubA4004;
	}
}
else
{
echo "";	
}	
	
	echo $clubA2002;
  ?>
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:    url(../../phases_finales/result2.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php require ("../connect1.php") ; ?>
        <?
$reponse = mysql_query("SELECT * FROM Phpmpy_pf$annee WHERE id='9180'");

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
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php 
if ($A4001+$A4002>0)
{	
	
	if ($A4001> $A4002)
	{
	$clubA2001=$clubA4001;
	}
	else
	{
	$clubA2001=$clubA4002;
	}
}
else
{
echo "";	
}	
	
	echo $clubA2001;
  ?>
    </b></font> </div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 540px; top: 467px; background-image:    url(../../phases_finales/unique3.jpg); layer-background-image:    url(../../phases_finales/unique3.jpg); border: 1px none #000000"> 
  <div align="center"> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:    url(../../phases_finales/result2.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php require ("../connect1.php") ; ?>
        <?php	 
$reponse = mysql_query("SELECT * FROM Phpmpy_pf$annee WHERE id='9180'");

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
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:    url(../../phases_finales/unique3.jpg); layer-background-image:    url(../../phases_finales/unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        <?php 
if ($A4007+$A4008>0)
{	
	
	if ($A4007> $A4008)
	{
	$clubA2004=$clubA4007;
	}
	else
	{
	$clubA2004=$clubA4008;
	}
}
else
{
echo "";	
}	
	
	echo $clubA2004;
  ?>
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:    url(../../phases_finales/result2.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php require ("../connect1.php") ; ?>
        <?php 
$reponse = mysql_query("SELECT * FROM Phpmpy_pf$annee WHERE id='9180'");

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
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php 
if ($A4005+$A4006>0)
{	
	
	if ($A4005> $A4006)
	{
	$clubA2003=$clubA4005;
	}
	else
	{
	$clubA2003=$clubA4006;
	}
}
else
{
echo "";	
}	
	
	echo $clubA2003;
  ?>
    </b></font><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 740px; top: 330px; background-image:    url(../../phases_finales/unique3.jpg); layer-background-image:    url(../../phases_finales/unique3.jpg); border: 1px none #000000"> 
  <div align="center">
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:    url(../../phases_finales/result2.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php require ("../connect1.php") ; ?>
        <?php	 
$reponse = mysql_query("SELECT * FROM Phpmpy_pf$annee WHERE id='9180'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A1002= $donnees['A1002'];?>
        <?php echo $A1002;?>
        <?php
}
mysql_close();
?>
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:    url(../../phases_finales/unique3.jpg); layer-background-image:    url(../../phases_finales/unique3.jpg); border: 1px none #000000"> 
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
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:    url(../../phases_finales/result2.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php require ("../connect1.php") ; ?>
        <?php 
$reponse = mysql_query("SELECT * FROM Phpmpy_pf$annee WHERE id='9180'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A1001= $donnees['A1001'];?>
        <?php echo $A1001;?>
        <?php
}
mysql_close();
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php 
if ($A2001+$A2002>0)
{	
	
	if ($A2001> $A2002)
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
    </b></font> </div>
</div>
<div id="Layer3" style="position:absolute; width:160px; height:20px; z-index:5; left: 782px; top: 194px; background-image:    url(../../phases_finales/titre.jpg); layer-background-image:    url(../../phases_finales/titre.jpg); border: 1px none #000000"> 
  <div align="center"><font color="#FFFFFF"><b>Finale</b></font></div>
</div>
<div id="Layer3" style="position:absolute; width:160px; height:20px; z-index:5; left: 575px; top: 195px; background-image:    url(../../phases_finales/titre.jpg); layer-background-image:    url(../../phases_finales/titre.jpg); border: 1px none #000000"> 
  <div align="center"><font color="#FFFFFF"><b>Demi finale</b></font></div>
</div>
<div id="Layer3" style="position:absolute; width:160px; height:20px; z-index:5; left: 320px; top: 195px; background-image:    url(../../phases_finales/titre.jpg); layer-background-image:    url(../../phases_finales/titre.jpg); border: 1px none #000000"> 
  <div align="center"><font color="#FFFFFF"><b>Quarts de finale</b></font></div>
</div>
<div id="Layer2" style="position:absolute; width:1000px; height:20px; z-index:4; left: 0px; top: 151px; background-color: #FFCC66; layer-background-color: #FFCC66; border: 1px none #000000">
  <div align="center"><i><b>R&eacute;serve Promotion honneur R&eacute;serve Promotion 
    honneur R&eacute;serve Promotion honneur R&eacute;serve Promotion honneur 
    R&eacute;serve Promotion honneur R&eacute;se</b></i></div>
</div>
   
	   
<div id="Layer3" style="position:absolute; width:160px; height:20px; z-index:5; left: 46px; top: 195px; background-image:    url(../../phases_finales/titre2.jpg); layer-background-image:    url(../../phases_finales/titre.jpg); border: 1px none #000000"> 
  <div align="center"><font color="#FFFFFF"><b><font color="#000000">Barrages</font></b></font></div>
</div>
<div id="Layer4" style="position:absolute; width:1px; height:102px; z-index:6; left: 530px; top: 252px; background-color: #FF0000; layer-background-color: #FF0000; border: 1px none #000000"></div>
<div id="Layer5" style="position:absolute; width:1000px; height:65px; z-index:7; left: 0px; top: 82px"> 
  <table width="100%" border="0" height="30">
    <tr valign="top" align="center"> 
      <td colspan="12" bgcolor="006699" height="28"><font size="5"><b><font color="#FFCC00"> 
        <? echo "Championnat des Pyr&egrave;n&egrave;es";?>
        </font><font size="5" color="#FFCC00"><b>
        <?php echo $annee;?>
        </b></font><font color="#FFCC00">: 
        <? echo "Reserve Promotion Honneur";?>
        </font></b></font></td>
    </tr>
    <tr valign="top" align="center"> 
      <td colspan="12" bgcolor="#EAECEB" height="28"> 
        <p><font size="5" color="#FFCC00"><b> </b></font><font size="5"><b><font size="5"><b><font size="5"><b><font size="5"><b><font color="#FF0000" size="2"> 
          <?php $anneemoins = $annee-1;?>
          <?php $anneeplus = $annee+1;?>
          </font></b></font><font color="#000000" size="2"><a href="http://francefinalesrugby.franceserv.com/phasesfinalesterr/mpy/pagereservepromotion.php?variable_1=<?php echo $anneemoins;?>" target="_top"><font size="5" color="#000000">&lt;&lt;</font></a></font><font color="#000000" size="2"><font size="5" color="#EAECEB"></font></font></b></font></b></font><font color="#000000" size="2"><font size="5" color="#EAECEB">nnnnne</font><font size="5"> 
          </font></font><a href="http://francefinalesrugby.franceserv.com/phasesfinalesterr/mpy/pagereservepromotion.php?variable_1=<?php echo $anneeplus;?>"target="_top"><font color="#000000">&gt;&gt;</font></a></b></font><font size="2" color="#FF0000"><b> 
          </b></font></p>
      </td>
    </tr>
  </table>
</div>

 
  
<div id="Layer4" style="position:absolute; width:1px; height:76px; z-index:6; left: 270px; top: 303px; background-color: #FF0000; layer-background-color: #FF0000; border: 1px none #000000"></div>
<div id="Layer4" style="position:absolute; width:1px; height:102px; z-index:6; left: 537px; top: 441px; background-color: #FF0000; layer-background-color: #FF0000; border: 1px none #000000"></div>
<div id="Layer4" style="position:absolute; width:0px; height:86px; z-index:6; left: 274px; top: 419px; background-color: #FF0000; layer-background-color: #FF0000; border: 1px none #000000"></div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p align="center">&nbsp;</p>
<div id="Layer2" style="position:absolute; width:245px; height:28px; z-index:10; left: 728px; top: 388px"> 
  <div align="center"><font color="#000000" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
    <font size="6" color="#FF0000"> 
    <?php 
if ($A1001+$A1002>0)
{	
	
	if ($A1001> $A1002)
	{
	$clubC1000=$clubA1001;
	}
	else
	{
	$clubC1000=$clubA1002;
	}
}
else
{
echo "";	
}	
	
	echo $clubC1000;
  ?>
    </font></b></font></div>
</div>
<div id="Layer6" style="position:absolute; width:98px; height:60px; z-index:11; left: 801px; top: 475px"><font color="#000000" face="Geneva, Arial, Helvetica, san-serif"size="4"><b> 
  </b></font><font color="#000000" face="Geneva, Arial, Helvetica, san-serif"size="4"><b> 
  <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion à MySQL
mysql_select_db("onepip-france-db1"); // S&egrave;lection de la base onepip
$query = "SELECT Phpmpy_clubs.id, nom, url_logo FROM Phpmpy_clubs WHERE Phpmpy_clubs.id='29109'";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))

   {
				  
				 
       
	   echo "<img src=\"$row[2]\">";
	  
 	?>
  <?php
 
 }

mysql_close(); // D&egrave;connexion de MySQL
?>
  </b></font><font color="#FFFFFF" face="Geneva, arial, Helvetica, san-serif"size="2"><b> 
  </b></font></div>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
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
<p>&nbsp;</p>
