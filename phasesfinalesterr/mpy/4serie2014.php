


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
        <? echo "Finales territoriales du comité des Pyrénées $annee";?>
        </font></b></font></td>
    </tr>
  </table>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 4px; top: 248px; background-image:    url(../../phases_finales/unique30.jpg); layer-background-image:    url(../../phases_finales/unique3.jpg); border: 1px none #000000"> 
  <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php require ("../connect1.php") ; ?>
    <?  
$query = "SELECT Phpmpy_pf$annee.id,Phpmpy_pf$annee.clubA8001, Phpmpy_clubs.nom, Phpmpy_clubs.url_logo FROM Phpmpy_pf$annee, Phpmpy_clubs WHERE Phpmpy_pf$annee.clubA8001=Phpmpy_clubs.id and Phpmpy_pf$annee.id='220'";
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
mysql_close(); // Déconnexion de MySQL
       ?>
    </b></font> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:    url(../../phases_finales/result20.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
      
	   
 <?php require ("../connect1.php") ; ?> 
 <?
$reponse = mysql_query("SELECT * FROM Phpmpy_pf$annee WHERE id='220'");

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
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: -1px; top: 21px; background-image:    url(../../phases_finales/unique30.jpg); layer-background-image:    url(../../phases_finales/unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        <?php require ("../connect1.php") ; ?>
        <?  
$query = "SELECT Phpmpy_pf$annee.id,Phpmpy_pf$annee.clubA8002, Phpmpy_clubs.nom, Phpmpy_clubs.url_logo FROM Phpmpy_pf$annee, Phpmpy_clubs WHERE Phpmpy_pf$annee.clubA8002=Phpmpy_clubs.id and Phpmpy_pf$annee.id='220'";
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
mysql_close(); // Déconnexion de MySQL
       ?>
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:    url(../../phases_finales/result20.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
      
 <?php require ("../connect1.php") ; ?> 
  <?
$reponse = mysql_query("SELECT * FROM Phpmpy_pf$annee WHERE id='220'");

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
    
  </div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 7px; top: 315px; background-image:    url(../../phases_finales/unique30.jpg); layer-background-image:    url(../../phases_finales/unique3.jpg); border: 1px none #000000"> 
  <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
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
mysql_close(); // Déconnexion de MySQL
       ?>
    </b></font> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:    url(../../phases_finales/result20.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
       <?php require ("../connect1.php") ; ?>
	  <?php 
$reponse = mysql_query("SELECT * FROM Phpmpy_pf$annee WHERE id='220'");

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
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:    url(../../phases_finales/unique30.jpg); layer-background-image:    url(../../phases_finales/unique3.jpg); border: 1px none #000000"> 
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
mysql_close(); // Déconnexion de MySQL
       ?>
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:    url(../../phases_finales/result20.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
       
 <?php require ("../connect1.php") ; ?>
 <?
$reponse = mysql_query("SELECT * FROM Phpmpy_pf$annee WHERE id='220'");

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
    
  </div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 7px; top: 435px; background-image:    url(../../phases_finales/unique30.jpg); layer-background-image:    url(../../phases_finales/unique3.jpg); border: 1px none #000000"> 
  <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
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
mysql_close(); // Déconnexion de MySQL
       ?>
    </b></font> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:    url(../../phases_finales/result20.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
     <?php require ("../connect1.php") ; ?>
 <?
$reponse = mysql_query("SELECT * FROM Phpmpy_pf$annee WHERE id='220'");

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
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:    url(../../phases_finales/unique30.jpg); layer-background-image:    url(../../phases_finales/unique3.jpg); border: 1px none #000000"> 
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
mysql_close(); // Déconnexion de MySQL
       ?>
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:    url(../../phases_finales/result20.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
     <?php require ("../connect1.php") ; ?>
 <?
$reponse = mysql_query("SELECT * FROM Phpmpy_pf$annee WHERE id='220'");

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
    
  </div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 8px; top: 506px; background-image:    url(../../phases_finales/unique30.jpg); layer-background-image:    url(../../phases_finales/unique3.jpg); border: 1px none #000000"> 
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
mysql_close(); // Déconnexion de MySQL
       ?>
    </b></font> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:    url(../../phases_finales/result20.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
       <?php require ("../connect1.php") ; ?>
 <?
$reponse = mysql_query("SELECT * FROM Phpmpy_pf$annee WHERE id='220'");

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
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:    url(../../phases_finales/unique30.jpg); layer-background-image:    url(../../phases_finales/unique3.jpg); border: 1px none #000000"> 
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
mysql_close(); // Déconnexion de MySQL
       ?>
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:    url(../../phases_finales/result20.jpg); layer-background-image:    url(../../phases_finales/result20.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
      <?php require ("../connect1.php") ; ?>
 <?
$reponse = mysql_query("SELECT * FROM Phpmpy_pf$annee WHERE id='220'");

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
    
  </div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 244px; top: 248px; background-image:    url(../../phases_finales/unique3.jpg); layer-background-image:    url(../../phases_finales/unique3.jpg); border: 1px none #000000"> 
  <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php require ("../connect1.php") ; ?>
    <?  
$query = "SELECT Phpmpy_pf$annee.id,Phpmpy_pf$annee.clubA4001, Phpmpy_clubs.nom, Phpmpy_clubs.url_logo FROM Phpmpy_pf$annee, Phpmpy_clubs WHERE Phpmpy_pf$annee.clubA4001=Phpmpy_clubs.id and Phpmpy_pf$annee.id='220'";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {                 
                 "$row[2]";       
		      
		$clubA4001=$row[2];
		$logo4001=$row[3];
		echo $clubA4001;

		
		?>
    <?php
 
 }
mysql_close(); // Déconnexion de MySQL
       ?>
    </b></font> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:    url(../../phases_finales/result2.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        
		<?php require ("../connect1.php") ; ?>
 <?
$reponse = mysql_query("SELECT * FROM Phpmpy_pf$annee WHERE id='220'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A4002= $donnees['A4002'];?>
        <?php echo $A4002;?>
        <?php
}
mysql_close();
?>
   </b></font></div> </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:    url(../../phases_finales/unique3.jpg); layer-background-image:    url(../../phases_finales/unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        <?php 
if ($A8001+$A8002>0)
{	
	
	if ($A8001> $A8002)
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
        <?php 
	
	
	if ($A8001> $A8002)
	{
	$logo4002=$logo8001;
	}
	else
	{
	$logo4002=$logo8002;
	}

  ?>
       
	    </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:    url(../../phases_finales/result2.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
     
		<?php require ("../connect1.php") ; ?>
 <?
$reponse = mysql_query("SELECT * FROM Phpmpy_pf$annee WHERE id='220'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A4001= $donnees['A4001'];?>
        <?php echo $A4001;?>
        <?php
}
mysql_close();
?>
		
  </b></font></div>  </div>
    
  </div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 243px; top: 317px; background-image:    url(../../phases_finales/unique3.jpg); layer-background-image:    url(../../phases_finales/unique3.jpg); border: 1px none #000000"> 
  <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php require ("../connect1.php") ; ?>
    <?  
$query = "SELECT Phpmpy_pf$annee.id,Phpmpy_pf$annee.clubA4003, Phpmpy_clubs.nom, Phpmpy_clubs.url_logo FROM Phpmpy_pf$annee, Phpmpy_clubs WHERE Phpmpy_pf$annee.clubA4003=Phpmpy_clubs.id and Phpmpy_pf$annee.id='220'";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {                 
                 "$row[2]";       
		      
		$clubA4003=$row[2];
		$logo4003=$row[3];
		echo $clubA4003;

		
		?>
    <?php
 
 }
mysql_close(); // Déconnexion de MySQL
       ?>
    </b></font> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:    url(../../phases_finales/result2.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        
		<?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM Phpmpy_pf$annee WHERE id='220'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A4004= $donnees['A4004'];?>
        <?php echo $A4004;?>
        <?php
}
mysql_close();
?>
  </b></font></div>  </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:    url(../../phases_finales/unique3.jpg); layer-background-image:    url(../../phases_finales/unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        <?php 
if ($A8003+$A8004>0)
{	
	
	if ($A8003>$A8004)
	{
	$clubA4004=$clubA8003;
	}
	else
	{
	$clubA4004=$clubA8004;
	}
}
else
{
echo "";	
}	
	
	echo $clubA4004;
  ?>
        <?php 
	
	
	if ($A8003>$A8004)
	{
	$logo4004=$logo8003;
	}
	else
	{
	$logo4004=$logo8004;
	}

  ?>
        </b> </font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:    url(../../phases_finales/result2.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php require ("../connect1.php") ; ?>
        <?
$reponse = mysql_query("SELECT * FROM Phpmpy_pf$annee WHERE id='220'");

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
    
  </div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 244px; top: 435px; background-image:    url(../../phases_finales/unique3.jpg); layer-background-image:    url(../../phases_finales/unique3.jpg); border: 1px none #000000"> 
  <div align="center"> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php require ("../connect1.php") ; ?>
    <?  
$query = "SELECT Phpmpy_pf$annee.id,Phpmpy_pf$annee.clubA4005, Phpmpy_clubs.nom, Phpmpy_clubs.url_logo FROM Phpmpy_pf$annee, Phpmpy_clubs WHERE Phpmpy_pf$annee.clubA4005=Phpmpy_clubs.id and Phpmpy_pf$annee.id='220'";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {                 
                 "$row[2]";       
		      
		$clubA4005=$row[2];
		$logo4005=$row[3];
		echo $clubA4005;

		
		?>
    <?php
 
 }
mysql_close(); // Déconnexion de MySQL
       ?>
    </b></font> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:    url(../../phases_finales/result2.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
      
	<?php require ("../connect1.php") ; ?>
 <?
$reponse = mysql_query("SELECT * FROM Phpmpy_pf$annee WHERE id='220'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A4006= $donnees['A4006'];?>
        <?php echo $A4006;?>
        <?php
}
mysql_close();
?>
   </b></font></div> </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:    url(../../phases_finales/unique3.jpg); layer-background-image:    url(../../phases_finales/unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        <?php 
if ($A8005+$A8006>0)
{	
	
	if ($A8005> $A8006)
	{
	$clubA4006=$clubA8005;
	}
	else
	{
	$clubA4006=$clubA8006;
	}
}
else
{
echo "";	
}	
	
	echo $clubA4006;
  ?>
        <?php 
	
	
	if ($A8005> $A8006)
	{
	$logo4006=$logo8005;
	}
	else
	{
	$logo4006=$logo8006;
	}

  ?>
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:    url(../../phases_finales/result2.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php require ("../connect1.php") ; ?>
        <?
$reponse = mysql_query("SELECT * FROM Phpmpy_pf$annee WHERE id='220'");

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
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 245px; top: 507px; background-image:    url(../../phases_finales/unique3.jpg); layer-background-image:    url(../../phases_finales/unique3.jpg); border: 1px none #000000"> 
  <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php require ("../connect1.php") ; ?>
    <?  
$query = "SELECT Phpmpy_pf$annee.id,Phpmpy_pf$annee.clubA4007, Phpmpy_clubs.nom, Phpmpy_clubs.url_logo FROM Phpmpy_pf$annee, Phpmpy_clubs WHERE Phpmpy_pf$annee.clubA4007=Phpmpy_clubs.id and Phpmpy_pf$annee.id='220'";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {                 
                 "$row[2]";       
		      
		$clubA4007=$row[2];
		$logo4007=$row[3];
		echo $clubA4007;

		
		?>
    <?php
 
 }
mysql_close(); // Déconnexion de MySQL
       ?>
    </b></font> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:    url(../../phases_finales/result2.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
       
		<?php require ("../connect1.php") ; ?>
 <?
$reponse = mysql_query("SELECT * FROM Phpmpy_pf$annee WHERE id='220'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A4008= $donnees['A4008'];?>
        <?php echo $A4008;?>
        <?php
}
mysql_close();
?>
 </b></font></div>   </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:    url(../../phases_finales/unique3.jpg); layer-background-image:    url(../../phases_finales/unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        <?php 
if ($A8007+$A8008>0)
{	
	
	if ($A8007> $A8008)
	{
	$clubA4008=$clubA8007;
	}
	else
	{
	$clubA4008=$clubA8008;
	}
}
else
{
echo "";	
}	
	
	echo $clubA4008;
  ?>
        <?php 

	
	if ($A8007> $A8008)
	{
	$logo4008=$logo8007;
	}
	else
	{
	$logo4008=$logo8008;
	}

  ?>
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:    url(../../phases_finales/result2.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
       
		<?php require ("../connect1.php") ; ?>
 <?
$reponse = mysql_query("SELECT * FROM Phpmpy_pf$annee WHERE id='220'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A4007= $donnees['A4007'];?>
        <?php echo $A4007;?>
        <?php
}
mysql_close();
?>
   </b></font></div> </div>
    
  </div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 493px; top: 291px; background-image:    url(../../phases_finales/unique3.jpg); layer-background-image:    url(../../phases_finales/unique3.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:    url(../../phases_finales/result2.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
       
		<?php require ("../connect1.php") ; ?>
 <?
$reponse = mysql_query("SELECT * FROM Phpmpy_pf$annee WHERE id='220'");

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
        <?php 
	
	
	if ($A4003> $A4004)
	{
	$logo2002=$logo4003;
	}
	else
	{
	$logo2002=$logo4004;
	}

  ?>
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:    url(../../phases_finales/result2.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
       <?php require ("../connect1.php") ; ?>
 <?
$reponse = mysql_query("SELECT * FROM Phpmpy_pf$annee WHERE id='220'");

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
    <?php 
	
	
	if ($A4001> $A4002)
	{
	$logo2001=$logo4001;
	}
	else
	{
	$logo2001=$logo4002;
	}

  ?>
    </b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 491px; top: 470px; background-image:    url(../../phases_finales/unique3.jpg); layer-background-image:    url(../../phases_finales/unique3.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:    url(../../phases_finales/result2.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
       
	 <?php require ("../connect1.php") ; ?>
<?php	 
$reponse = mysql_query("SELECT * FROM Phpmpy_pf$annee WHERE id='220'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A2004= $donnees['A2004'];?>
        <?php echo $A2004;?>
        <?php
}
mysql_close();
?>
  </b></font></div>  </div>
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
        <?php 
	
	
	if ($A4007> $A4008)
	{
	$logo2004=$logo4007;
	}
	else
	{
	$logo2004=$logo4008;
	}

  ?>
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:    url(../../phases_finales/result2.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
          <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM Phpmpy_pf$annee WHERE id='220'");

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
    <?php 
	
	
	if ($A4005> $A4006)
	{
	$logo2003=$logo4005;
	}
	else
	{
	$logo2003=$logo4006;
	}

  ?>
    </b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 741px; top: 328px; background-image:    url(../../phases_finales/unique3.jpg); layer-background-image:    url(../../phases_finales/unique3.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:    url(../../phases_finales/result2.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM Phpmpy_pf$annee WHERE id='220'");

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
        <?php 
	
	
	if ($A2003> $A2004)
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
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM Phpmpy_pf$annee WHERE id='220'");

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
    <?php 
	
	
	if ($A2001> $A2002)
	{
	$logo1001=$logo2001;
	}
	else
	{
	$logo1001=$logo2002;
	}

  ?>
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
<div id="Layer2" style="position:absolute; width:1000px; height:20px; z-index:4; left: 0px; top: 166px; background-color: #FFCC66; layer-background-color: #FFCC66; border: 1px none #000000"><i><b>4me 
  S&eacute;rie 4me S&eacute;rie 4me S&eacute;rie 4me S&eacute;rie 4me S&eacute;rie 
  4me S&eacute;rie 4me S&eacute;rie 4me S&eacute;rie 4me S&eacute;rie 4me S&eacute;rie 
  4me S&eacute;rie 4me S&eacute;rie 4me S&eacute;rie 4me S&eacute;rie 4me </b></i></div>
   
	   
<div id="Layer4" style="position:absolute; width:1px; height:102px; z-index:6; left: 478px; top: 439px; background-color: #FF0000; layer-background-color: #FF0000; border: 1px none #000000"></div>
<div id="Layer3" style="position:absolute; width:160px; height:20px; z-index:5; left: 46px; top: 195px; background-image:    url(../../phases_finales/titre.jpg); layer-background-image:    url(../../phases_finales/titre.jpg); border: 1px none #000000"> 
  <div align="center"><font color="#FFFFFF"><b>Barrages</b></font></div>
</div>
<div id="Layer4" style="position:absolute; width:1px; height:177px; z-index:6; left: 728px; top: 315px; background-color: #FF0000; layer-background-color: #FF0000; border: 1px none #000000"></div>
<div id="Layer4" style="position:absolute; width:1px; height:102px; z-index:6; left: 476px; top: 252px; background-color: #FF0000; layer-background-color: #FF0000; border: 1px none #000000"></div>
<div id="Layer7" style="position:absolute; width:200px; height:15px; z-index:12; left: 743px; top: 311px"><font size="2" face="Arial, Helvetica, sans-serif"> 
  <b><i> 
  <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion à MySQL
mysql_select_db("onepip-france-db1"); // Sélection de la base onepip
$reponse = mysql_query("SELECT * FROM Phpmpy_pf$annee WHERE id='220' "); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
  <strong> 
  <?php echo $donnees['Finale'];?>
  <?php
 
 }
mysql_close(); // Déconnexion de MySQL
?>
  </strong></i></b></font></div>
<div id="Layer7" style="position:absolute; width:200px; height:15px; z-index:12; left: 246px; top: 231px"><font size="2" face="Arial, Helvetica, sans-serif"> 
  <b><i> 
  <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion à MySQL
mysql_select_db("onepip-france-db1"); // Sélection de la base onepip
$reponse = mysql_query("SELECT * FROM Phpmpy_pf$annee WHERE id='220' "); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
  <strong> 
  <?php echo $donnees['Quart1'];?>
  <?php
 
 }
mysql_close(); // Déconnexion de MySQL
?>
  </strong></i></b></font></div>
<div id="Layer7" style="position:absolute; width:193px; height:15px; z-index:12; left: 246px; top: 419px"><font size="2" face="Arial, Helvetica, sans-serif"> 
  <b><i> 
  <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion à MySQL
mysql_select_db("onepip-france-db1"); // Sélection de la base onepip
$reponse = mysql_query("SELECT * FROM Phpmpy_pf$annee WHERE id='220' "); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
  <strong> 
  <?php echo $donnees['Quart3'];?>
  <?php
 
 }
mysql_close(); // Déconnexion de MySQL
?>
  </strong></i></b></font></div>
<div id="Layer7" style="position:absolute; width:200px; height:15px; z-index:12; left: 492px; top: 453px"><font size="2" face="Arial, Helvetica, sans-serif"> 
  <b><i> 
  <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion à MySQL
mysql_select_db("onepip-france-db1"); // Sélection de la base onepip
$reponse = mysql_query("SELECT * FROM Phpmpy_pf$annee WHERE id='220' "); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
  <strong> 
  <?php echo $donnees['Demi2'];?>
  <?php
 
 }
mysql_close(); // Déconnexion de MySQL
?>
  </strong></i></b></font></div>
<div id="Layer7" style="position:absolute; width:200px; height:15px; z-index:12; left: 493px; top: 274px"><font size="2" face="Arial, Helvetica, sans-serif"> 
  <b><i> 
  <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion à MySQL
mysql_select_db("onepip-france-db1"); // Sélection de la base onepip
$reponse = mysql_query("SELECT * FROM Phpmpy_pf$annee WHERE id='220' "); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
  <strong> 
  <?php echo $donnees['Demi1'];?>
  <?php
 
 }
mysql_close(); // Déconnexion de MySQL
?>
  </strong></i></b></font></div>
<div id="Layer7" style="position:absolute; width:200px; height:15px; z-index:12; left: 244px; top: 301px"><font size="2" face="Arial, Helvetica, sans-serif"> 
  <b><i> 
  <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion à MySQL
mysql_select_db("onepip-france-db1"); // Sélection de la base onepip
$reponse = mysql_query("SELECT * FROM Phpmpy_pf$annee WHERE id='220' "); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
  <strong> 
  <?php echo $donnees['Quart2'];?>
  <?php
 
 }
mysql_close(); // Déconnexion de MySQL
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
<div id="Layer7" style="position:absolute; width:193px; height:15px; z-index:12; left: 245px; top: 491px"><font size="2"> 
  <b><font face="Arial, Helvetica, sans-serif"><i> 
  <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion à MySQL
mysql_select_db("onepip-france-db1"); // Sélection de la base onepip
$reponse = mysql_query("SELECT * FROM Phpmpy_pf$annee WHERE id='220' "); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
  <strong> </strong></i></font><font size="2" face="Arial, Helvetica, sans-serif"><i><strong> 
  <?php echo $donnees['Quart4'];?>
  </strong></i></font><font face="Arial, Helvetica, sans-serif"><i><strong> 
  <?php
 
 }
mysql_close(); // Déconnexion de MySQL
?>
  </strong></i></font></b></font></div>
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
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
