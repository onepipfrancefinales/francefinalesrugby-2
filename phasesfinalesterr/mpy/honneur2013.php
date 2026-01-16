


<?php $annee=$_GET['variable_1'];?>
<?php
if ($annee==2013)
{
$clubA8001 = 'Saint Girons';
$clubA8002 = 'Saint Orens';

$clubA8005 = 'Laroque d Olmes';
$clubA8006 = 'La Salvetat Plaisance';




$clubA8007 = 'Saint Gaudens';
$clubA8008 = 'Caussade';
$clubA8003= 'Rieumes';
$clubA8004 = 'Negrepelisse';
}
?>

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
          </font></b></font><font color="#000000" size="2"><a href="http://francefinalesrugby.franceserv.com/phasesfinalesterr/mpy/pagehonneur.php?variable_1=<?php echo $anneemoins;?>" target="_top"><font size="5" color="#000000">&lt;&lt;</font></a></font><font color="#000000" size="2"><font size="5" color="#EAECEB"></font></font></b></font></b></font><font color="#000000" size="2"><font size="5" color="#EAECEB">nnnnne</font><font size="5"> 
          </font></font><a href="http://francefinalesrugby.franceserv.com/phasesfinalesterr/mpy/pagehonneur.php?variable_1=<?php echo $anneeplus;?>"target="_top"><font color="#000000">&gt;&gt;</font></a></b></font></div>
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
        <? echo "Finales territoriales du comit&egrave; des Pyr&egrave;n&egrave;es $annee";?>
        </font></b></font></td>
    </tr>
  </table>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 93px; top: 240px; background-image:    url(../../phases_finales/unique3.jpg); layer-background-image:    url(../../phases_finales/unique3.jpg); border: 1px none #000000"> 
  <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b>
    <?php echo $clubA8001;?></b> </font> 
  <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"> 
    </font> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:    url(../../phases_finales/result2.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        
		<?php require ("../connect1.php") ; ?>
 <?
$reponse = mysql_query("SELECT * FROM Phpmpy_pf$annee WHERE id='170'");

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
        <?php echo $clubA8002;?>
     </b></font><font face="Geneva, Arial, Helvetica, san-serif" size="2" color="#FFFFFF"></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:    url(../../phases_finales/result2.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
     
		<?php require ("../connect1.php") ; ?>
 <?
$reponse = mysql_query("SELECT * FROM Phpmpy_pf$annee WHERE id='170'");

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
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 95px; top: 328px; background-image:    url(../../phases_finales/unique3.jpg); layer-background-image:    url(../../phases_finales/unique3.jpg); border: 1px none #000000"> 
   <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b>
    <?php echo $clubA8003;?>
    </b></font> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:    url(../../phases_finales/result2.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        
		<?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM Phpmpy_pf$annee WHERE id='170'");

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
        <?php echo $clubA8004;?>
     </b></font><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:    url(../../phases_finales/result2.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php require ("../connect1.php") ; ?>
        <?
$reponse = mysql_query("SELECT * FROM Phpmpy_pf$annee WHERE id='170'");

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
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 96px; top: 435px; background-image:    url(../../phases_finales/unique3.jpg); layer-background-image:    url(../../phases_finales/unique3.jpg); border: 1px none #000000"> 
   <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b>
    <?php echo $clubA8005;?>
    </b></font> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:    url(../../phases_finales/result2.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
      
	<?php require ("../connect1.php") ; ?>
 <?
$reponse = mysql_query("SELECT * FROM Phpmpy_pf$annee WHERE id='170'");

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
        <?php echo $clubA8006;?>
        </b></font><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:    url(../../phases_finales/result2.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php require ("../connect1.php") ; ?>
        <?
$reponse = mysql_query("SELECT * FROM Phpmpy_pf$annee WHERE id='170'");

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
<div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"></font> 
     
  <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"> 
    </font> </div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 415px; top: 291px; background-image:    url(../../phases_finales/unique3.jpg); layer-background-image:    url(../../phases_finales/unique3.jpg); border: 1px none #000000"> 
  <div align="center"><font face="Geneva, Arial, Helvetica, san-serif" size="2" color="#FFFFFF"><b>
    <?php echo $clubA8001;?>
    </b></font> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:    url(../../phases_finales/result2.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
       
		<?php require ("../connect1.php") ; ?>
 <?
$reponse = mysql_query("SELECT * FROM Phpmpy_pf$annee WHERE id='170'");

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
        <?php echo $clubA8004;?>
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:    url(../../phases_finales/result2.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
       <?php require ("../connect1.php") ; ?>
 <?
$reponse = mysql_query("SELECT * FROM Phpmpy_pf$annee WHERE id='170'");

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
    </b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 423px; top: 490px; background-image:    url(../../phases_finales/unique3.jpg); layer-background-image:    url(../../phases_finales/unique3.jpg); border: 1px none #000000"> 
  <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b>
    <?php echo $clubA8005;?>
    </b></font> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:    url(../../phases_finales/result2.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
       
	 <?php require ("../connect1.php") ; ?>
<?php	 
$reponse = mysql_query("SELECT * FROM Phpmpy_pf$annee WHERE id='170'");

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
        <?php echo $clubA8007;?>
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:    url(../../phases_finales/result2.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
          <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM Phpmpy_pf$annee WHERE id='170'");

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
    </b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 710px; top: 388px; background-image:    url(../../phases_finales/unique3.jpg); layer-background-image:    url(../../phases_finales/unique3.jpg); border: 1px none #000000"> 
  <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b>
    <?php echo $clubA8004;?>
    </b></font> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:    url(../../phases_finales/result2.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM Phpmpy_pf$annee WHERE id='170'");

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
        <?php echo $clubA8007;?>
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:    url(../../phases_finales/result2.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db1");
$reponse = mysql_query("SELECT * FROM Phpmpy_pf$annee WHERE id='170'");

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
    </b></font></div>
</div>
<div id="Layer3" style="position:absolute; width:160px; height:20px; z-index:5; left: 733px; top: 188px; background-image:    url(../../phases_finales/titre.jpg); layer-background-image:    url(../../phases_finales/titre.jpg); border: 1px none #000000"> 
  <div align="center"><font color="#FFFFFF"><b>Finale</b></font></div>
</div>
<div id="Layer3" style="position:absolute; width:160px; height:20px; z-index:5; left: 454px; top: 186px; background-image:    url(../../phases_finales/titre.jpg); layer-background-image:    url(../../phases_finales/titre.jpg); border: 1px none #000000"> 
  <div align="center"><font color="#FFFFFF"><b>Demi finale</b></font></div>
</div>
<div id="Layer3" style="position:absolute; width:160px; height:20px; z-index:5; left: 114px; top: 185px; background-image:    url(../../phases_finales/titre.jpg); layer-background-image:    url(../../phases_finales/titre.jpg); border: 1px none #000000"> 
  <div align="center"><font color="#FFFFFF"><b>Quarts de finale</b></font></div>
</div>
<div id="Layer2" style="position:absolute; width:1000px; height:20px; z-index:4; left: 0px; top: 159px; background-color: #FFCC66; layer-background-color: #FFCC66; border: 1px none #000000"> 
  <div align="center"><i><b>Honneur Honneur Honneur Honneur Honneur Honneur Honneur 
    Honneur Honneur Honneur Honneur Honneur Honneur Honneur</b></i></div>
</div>
   
	   
<div id="Layer4" style="position:absolute; width:1px; height:102px; z-index:6; left: 345px; top: 452px; background-color: #FF0000; layer-background-color: #FF0000; border: 1px none #000000"></div>
<div id="Layer4" style="position:absolute; width:1px; height:102px; z-index:6; left: 341px; top: 252px; background-color: #FF0000; layer-background-color: #FF0000; border: 1px none #000000"></div>
<div id="Layer7" style="position:absolute; width:200px; height:15px; z-index:12; left: 691px; top: 364px"><font size="2" face="Arial, Helvetica, sans-serif"> 
  <b><i> 
  <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion à MySQL
mysql_select_db("onepip-france-db1"); // S&egrave;lection de la base onepip
$reponse = mysql_query("SELECT * FROM Phpmpy_pf$annee WHERE id='170' "); // Requête SQL
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
<div id="Layer7" style="position:absolute; width:200px; height:15px; z-index:12; left: 70px; top: 217px"><font size="2" face="Arial, Helvetica, sans-serif"> 
  <b><i> 
  <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion à MySQL
mysql_select_db("onepip-france-db1"); // S&egrave;lection de la base onepip
$reponse = mysql_query("SELECT * FROM Phpmpy_pf$annee WHERE id='170' "); // Requête SQL
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
<div id="Layer7" style="position:absolute; width:193px; height:15px; z-index:12; left: 68px; top: 416px"><font size="2" face="Arial, Helvetica, sans-serif"> 
  <b><i> 
  <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion à MySQL
mysql_select_db("onepip-france-db1"); // S&egrave;lection de la base onepip
$reponse = mysql_query("SELECT * FROM Phpmpy_pf$annee WHERE id='170' "); // Requête SQL
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
<div id="Layer7" style="position:absolute; width:200px; height:15px; z-index:12; left: 400px; top: 468px"><font size="2" face="Arial, Helvetica, sans-serif"> 
  <b><i> 
  <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion à MySQL
mysql_select_db("onepip-france-db1"); // S&egrave;lection de la base onepip
$reponse = mysql_query("SELECT * FROM Phpmpy_pf$annee WHERE id='170' "); // Requête SQL
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
<div id="Layer7" style="position:absolute; width:200px; height:15px; z-index:12; left: 390px; top: 270px"><font size="2" face="Arial, Helvetica, sans-serif"> 
  <b><i> 
  <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion à MySQL
mysql_select_db("onepip-france-db1"); // S&egrave;lection de la base onepip
$reponse = mysql_query("SELECT * FROM Phpmpy_pf$annee WHERE id='170' "); // Requête SQL
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
<div id="Layer7" style="position:absolute; width:200px; height:15px; z-index:12; left: 72px; top: 306px"><font size="2" face="Arial, Helvetica, sans-serif"> 
  <b><i> 
  <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion à MySQL
mysql_select_db("onepip-france-db1"); // S&egrave;lection de la base onepip
$reponse = mysql_query("SELECT * FROM Phpmpy_pf$annee WHERE id='170' "); // Requête SQL
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
<div id="Layer2" style="position:absolute; width:234px; height:28px; z-index:10; left: 728px; top: 439px"> 
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
		
	echo "";
	
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
<div id="Layer6" style="position:absolute; width:98px; height:60px; z-index:11; left: 795px; top: 525px"> 
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
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 96px; top: 530px; background-image:    url(../../phases_finales/unique3.jpg); layer-background-image:    url(../../phases_finales/unique3.jpg); border: 1px none #000000">
  <div align="center"><font color="#FFFFFF" size="2" face="Arial, Helvetica, sans-serif"><b>Saint 
    Gaudens</b></font> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:    url(../../phases_finales/result2.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php require ("../connect1.php") ; ?>
        <?
$reponse = mysql_query("SELECT * FROM Phpmpy_pf$annee WHERE id='170'");

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
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        <?php echo $clubA8008;?>
       </b></font><font face="Geneva, Arial, Helvetica, san-serif" size="2" color="#FFFFFF"></font></div>
      </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:    url(../../phases_finales/result2.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php require ("../connect1.php") ; ?>
        <?
$reponse = mysql_query("SELECT * FROM Phpmpy_pf$annee WHERE id='170'");

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
  </div>
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<div id="Layer7" style="position:absolute; width:193px; height:15px; z-index:12; left: 66px; top: 503px"><font size="2"> 
  <b><font face="Arial, Helvetica, sans-serif"><i> 
  <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion à MySQL
mysql_select_db("onepip-france-db1"); // S&egrave;lection de la base onepip
$reponse = mysql_query("SELECT * FROM Phpmpy_pf$annee WHERE id='170' "); // Requête SQL
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
