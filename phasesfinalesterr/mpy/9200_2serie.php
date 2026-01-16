 <?php $annee=$_GET['variable_1'];?>
<head>

<link rel="stylesheet" type="text/css" href="../style2.css">
<?php $annee=$_GET['variable_1'];?>
<meta name="description"
content="tous les champions de france de rugby, ffr,FFR, presentation de tous les clubs de rugby francais, Champions des differents comit&egrave;s territoriaux, Tous les championnats de rugby, f&egrave;d&egrave;rale 2, f&egrave;d&egrave;rale 3, f&egrave;d&egrave;rale 1, top 14.">
<meta name="keywords"
content="Brennus,Comite Midi Pyrenees de Rugby,ffr,FFR,Comite territoriaux de rugby,Stade toulousain,Bourgogne,FanceFinalesRugby,Rugby,championnat de france de rugby,Française,honneur,promotion honneur,Sport,Ballon,Ovale,">
<meta name="classification" content="Sport,Rugby">
<meta name="resource-type" content="document">
<meta name="copyright" content="Comite Midi Pyrenees de Rugby">
<meta name="author" content="Equipe Onepip">
<meta name="robots" content="All">
<title>1re S&egrave;rie</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

</head>


<body bgcolor="#EAECEB">
<p>&nbsp;</p>
<div id="Layer1" style="position:absolute; width:381px; height:65px; z-index:14; left: 1010px; top: 1px"><a href="http://forumda.forumsactifs.net/index.htm" target="_blank"><font color="#000000"> 
  <?php
    // On inclut le haut de la page
    include("../../pub2.php");
    ?>
  </font></a></div>
<p><br>
</p>
<p><br>
</p>
<div id="Layer7" style="position:absolute; width:1000px; height:88px; z-index:13; left: -2px; top: 70px"> 
  <table width="100%" border="0" height="30">
    <tr valign="top" align="center"> 
      <td bgcolor="#EAECEB" height="29" align="left" width="375" valign="middle"> 
        <p align="center"> 
          <?php
    // On inclut le haut de la page
    
	include("../../pub7.php"); ?>
        </p>
      </td>
      <td valign="middle" bgcolor="#EAECEB" height="29" align="left">
        <div align="center"><font size="5"><b><font size="5"><b><font size="5"><b><font size="5"><b><font color="#FF0000" size="2"> 
          <?php $anneemoins = $annee-1;?>
          <?php $anneeplus = $annee+1;?>
          </font></b></font></b><font color="#000000" size="2"><a href="http://francefinalesrugby.franceserv.com/phasesfinalesterr/mpy/pagereserve2serie.php?variable_1=<?php echo $anneemoins;?>" target="_top"><font size="6" color="#FF0000">&lt;&lt;</font></a></font></font></b></font><font color="#000000" size="2"><font size="5" color="#EAECEB">nnnne</font><font size="5"> 
          </font></font></b><a href="http://francefinalesrugby.franceserv.com/phasesfinalesterr/mpy/pagereserve2serie.php?variable_1=<?php echo $anneeplus;?>"target="_top"><font color="#FF0000" size="6"><b>&gt;&gt;</b></font></a></font></div>
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
        </font><font size="5"><b><font size="5"><b><font color="#FFCC00"> </font><font size="5"><b><font color="#FFCC00">
        <?php echo "Championnat des Pyr&eacute;n&eacute;es $annee : R&eacute;serve 2me S&eacute;rie";?>
        </font></b></font></b></font></b></font></b></font></td>
    </tr>
  </table>
</div>
<br>
<br>
<table width="1000" border="0" align="left" height="500" cellspacing="0">
  <tr> 
    <td height="13" bgcolor="#FFCC66" colspan="12"><i><b>R&eacute;serve 2me S&eacute;rie 
      R&eacute;serve 2me S&eacute;rie R&eacute;serve 2me S&eacute;rie R&eacute;serve 
      2me S&eacute;rie R&eacute;serve 2me S&eacute;rie R&eacute;serve 2me S&eacute;rie 
      R&eacute;serve 2me S&eacute;rie R&eacute;serve 2me S&eacute;rie</b></i></td>
  </tr>
  <tr> 
    <td width="160" height="13">&nbsp;</td>
    <td width="30" height="13">&nbsp;</td>
    <td width="32" height="13">&nbsp;</td>
    <td width="160" height="13">&nbsp;</td>
    <td width="30" height="13">&nbsp;</td>
    <td width="21" height="13">&nbsp;</td>
    <td width="160" align="left" height="13">&nbsp;</td>
    <td width="30" height="13">&nbsp;</td>
    <td width="22" height="13">&nbsp;</td>
    <td width="160" height="13">&nbsp;</td>
    <td width="30" height="13">&nbsp;</td>
    <td width="21" height="13">&nbsp;</td>
  </tr>
  <tr> 
    <td width="160" height="13"> 
      <div id="titre2" >Barrages</div>
    </td>
    <td width="30" height="13">&nbsp;</td>
    <td width="32" height="13">&nbsp;</td>
    <td width="160" height="13"> 
      <div id="titre2" >Quarts de finale</div>
    </td>
    <td width="30" height="13">&nbsp;</td>
    <td width="21" height="13">&nbsp;</td>
    <td width="160" align="left" height="13"> 
      <div id="titre2" >Demi finale</div>
    </td>
    <td width="30" align="left" height="13">&nbsp;</td>
    <td width="22" height="13">&nbsp;</td>
    <td width="160" height="13"> 
      <div id="titre2" >Finale</div>
    </td>
    <td width="30" height="13">&nbsp;</td>
    <td width="21" height="13">&nbsp;</td>
  </tr>
  <tr> 
    <td width="160" height="26"> 
      <?php 
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion à MySQL
mysql_select_db("onepip-france-db3"); // S&egrave;lection de la base onepip	   
$query = "SELECT  phpmpy_clubs.nom, phpmpy_clubs.url_logo FROM phpmpy_pf$annee, phpmpy_clubs WHERE phpmpy_pf$annee.clubA8005=phpmpy_clubs.id and phpmpy_pf$annee.id='9200'";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {                 	      
		$clubA8005=$row[0];
		$logo8005=$row[1];
				
 }
       ?>
      <?php  
$query = "SELECT phpmpy_clubs.nom, phpmpy_clubs.url_logo FROM phpmpy_pf$annee, phpmpy_clubs WHERE phpmpy_pf$annee.clubA8006=phpmpy_clubs.id and phpmpy_pf$annee.id='9200'";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {                                        		      
		$clubA8006=$row[0];
		$logo8006=$row[1];
				 
 }

       ?>
      <?php  
$query = "SELECT  phpmpy_clubs.nom, phpmpy_clubs.url_logo FROM phpmpy_pf$annee, phpmpy_clubs WHERE phpmpy_pf$annee.clubA8007=phpmpy_clubs.id and phpmpy_pf$annee.id='9200'";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {                                        		      
		$clubA8007=$row[0];
		$logo8007=$row[1];
						 
 }
       ?>
      <?php  
$query = "SELECT phpmpy_clubs.nom, phpmpy_clubs.url_logo FROM phpmpy_pf$annee, phpmpy_clubs WHERE phpmpy_pf$annee.clubA8008=phpmpy_clubs.id and phpmpy_pf$annee.id='9200'";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {                                      		      
		$clubA8008=$row[0];
		$logo8008=$row[1];
				
 }

       ?>
      <?php
$reponse = mysql_query("SELECT A8005, A8006, A8007, A8008 FROM phpmpy_pf$annee WHERE id='9200'");
while ($donnees = mysql_fetch_array($reponse) )
{ 
 $A8005= $donnees['A8005'];
 $A8006= $donnees['A8006'];
 $A8007= $donnees['A8007'];
 $A8008= $donnees['A8008'];   
}
?>
    </td>
    <td width="30" height="26"> </td>
    <td width="32" height="26">&nbsp;</td>
    <td width="160" height="26"> 
      <?php  
$query = "SELECT  phpmpy_clubs.nom, phpmpy_clubs.url_logo FROM phpmpy_pf$annee, phpmpy_clubs WHERE phpmpy_pf$annee.clubA4005=phpmpy_clubs.id and phpmpy_pf$annee.id='9200'";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {                                  
		$clubA4005=$row[0];
		$logo4005=$row[1];
		
 }
       ?>
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
      <?php 
$query = "SELECT  phpmpy_clubs.nom, phpmpy_clubs.url_logo FROM phpmpy_pf$annee, phpmpy_clubs WHERE phpmpy_pf$annee.clubA4007=phpmpy_clubs.id and phpmpy_pf$annee.id='9200'";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {                                		      
		$clubA4007=$row[0];
		$logo4007=$row[1];
				 
 }
       ?>
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
      <?php
$reponse = mysql_query("SELECT A4005, A4006, A4007, A4008 FROM phpmpy_pf$annee WHERE id='9200'");
while ($donnees = mysql_fetch_array($reponse) )
{ 
 $A4005= $donnees['A4005'];
 $A4006= $donnees['A4006'];
 $A4007= $donnees['A4007'];
 $A4008= $donnees['A4008'];   
}
?>
    </td>
    <td width="30" height="26">&nbsp;</td>
    <td width="21" height="26">&nbsp;</td>
    <td width="160" align="left" height="26"> 
      <?php
$reponse = mysql_query("SELECT A2001, A2002, A2003, A2004 FROM phpmpy_pf$annee WHERE id='9200'");
while ($donnees = mysql_fetch_array($reponse) )
{ 
 $A2001= $donnees['A2001'];
 $A2002= $donnees['A2002'];
 $A2003= $donnees['A2003'];
 $A2004= $donnees['A2004'];   
}
?>
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
    </td>
    <td width="30" height="26">&nbsp;</td>
    <td width="22" height="26">&nbsp;</td>
    <td width="160" height="26">&nbsp;</td>
    <td width="30" height="26">&nbsp;</td>
    <td width="21" height="26">&nbsp;</td>
  </tr>
  <tr> 
    <td width="160" height="25"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      </b></font> </td>
    <td width="30" height="25"> </td>
    <td width="32" height="25">&nbsp;</td>
    <td width="160" height="25"><font size="2" face="Arial, Helvetica, sans-serif"><b><i> 
      <?php

$reponse = mysql_query("SELECT Quart1 
						FROM phpmpy_pf$annee WHERE id='9200' "); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
      <strong> 
      <?php echo $donnees['Quart1'];?>
      <?php
 
 }

?>
      </strong> </i></b></font></td>
    <td width="30" height="25">&nbsp;</td>
    <td width="21" height="25">&nbsp;</td>
    <td width="160" height="25" align="left">&nbsp;</td>
    <td width="30" height="25">&nbsp;</td>
    <td width="22" height="25">&nbsp;</td>
    <td width="160" height="25">&nbsp;</td>
    <td width="30" height="25">&nbsp;</td>
    <td width="21" height="25">&nbsp;</td>
  </tr>
  <tr> 
    <td width="160"> 
      <div id="barrage" > 
        <?php  
$query = "SELECT  phpmpy_clubs.nom, phpmpy_clubs.url_logo FROM phpmpy_pf$annee, phpmpy_clubs WHERE phpmpy_pf$annee.clubA8001=phpmpy_clubs.id and phpmpy_pf$annee.id='9200'";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {                         		      
		$clubA8001=$row[0];
		$logo8001=$row[1];
		 }
       ?>
        <?php  
$query = "SELECT phpmpy_clubs.nom, phpmpy_clubs.url_logo FROM phpmpy_pf$annee, phpmpy_clubs WHERE phpmpy_pf$annee.clubA8002=phpmpy_clubs.id and phpmpy_pf$annee.id='9200'";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {                                    		      
		$clubA8002=$row[0];
		$logo8002=$row[1];
		
 }

       ?>
        <?php 
$query = "SELECT phpmpy_clubs.nom, phpmpy_clubs.url_logo FROM phpmpy_pf$annee, phpmpy_clubs WHERE phpmpy_pf$annee.clubA8003=phpmpy_clubs.id and phpmpy_pf$annee.id='9200'";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {                 
      
		$clubA8003=$row[0];
		$logo8003=$row[1];
		
 }
       ?>
        <?php  
$query = "	SELECT  phpmpy_clubs.nom, phpmpy_clubs.url_logo 
			FROM phpmpy_pf$annee, phpmpy_clubs 
			WHERE phpmpy_pf$annee.clubA8004=phpmpy_clubs.id and phpmpy_pf$annee.id='9200'";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {                      
		$clubA8004=$row[0];
		$logo8004=$row[1];
		
 }

       ?>
        <?php
$reponse = mysql_query("SELECT A8001, A8002, A8003, A8004 
						FROM phpmpy_pf$annee 
						WHERE id='9200'");
while ($donnees = mysql_fetch_array($reponse) )
{ 
 $A8001= $donnees['A8001'];
 $A8002= $donnees['A8002'];
 $A8003= $donnees['A8003'];
 $A8004= $donnees['A8004'];   
}
?>
        <?php  echo $clubA8001;?>
      </div>
    </td>
    <td width="30"> 
      <div id="barrage" > 
        <?php echo $A8001; ?>
      </div>
    </td>
    <td width="32">&nbsp;</td>
    <td width="160"> 
      <div id="quarts" > 
        <?php  
$query = "	SELECT phpmpy_clubs.nom, phpmpy_clubs.url_logo 
			FROM phpmpy_pf$annee, phpmpy_clubs 
			WHERE phpmpy_pf$annee.clubA4001=phpmpy_clubs.id and phpmpy_pf$annee.id='9200'";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {                                            
		$clubA4001=$row[0];
		$logo4001=$row[1];
		
		
 }

       ?>
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
        <?php  
$query = "	SELECT phpmpy_clubs.nom, phpmpy_clubs.url_logo 
			FROM phpmpy_pf$annee, phpmpy_clubs 
			WHERE phpmpy_pf$annee.clubA4003=phpmpy_clubs.id and phpmpy_pf$annee.id='9200'";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {                            		      
		$clubA4003=$row[0];
		$logo4003=$row[1];
		
 }
       ?>
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
        <?php
$reponse = mysql_query("SELECT A4001, A4002, A4003, A4004 FROM phpmpy_pf$annee WHERE id='9200'");
while ($donnees = mysql_fetch_array($reponse) )
{ 
 $A4001= $donnees['A4001'];
 $A4002= $donnees['A4002'];
 $A4003= $donnees['A4003'];
 $A4004= $donnees['A4004'];   
}
?>
        <?php echo $clubA4001;  ?>
      </div>
    </td>
    <td width="30"> 
      <div id="quarts" > 
        <?php echo $A4001;  ?>
      </div>
    </td>
    <td width="21">&nbsp;</td>
    <td width="160" align="left">&nbsp;</td>
    <td width="30">&nbsp;</td>
    <td width="22">&nbsp;</td>
    <td width="160">&nbsp;</td>
    <td width="30">&nbsp;</td>
    <td width="21">&nbsp;</td>
  </tr>
  <tr> 
    <td width="160" height="15"> 
      <div id="barrage" > 
        <?php  echo $clubA8002;?>
      </div>
    </td>
    <td width="30" height="15"> 
      <div id="barrage" > 
        <?php echo $A8002;?>
      </div>
    </td>
    <td width="32" height="15">&nbsp;</td>
    <td width="160" height="15"> 
      <div id="quarts" > 
        <?php echo $clubA4002;  ?>
      </div>
    </td>
    <td width="30" height="15"> 
      <div id="quarts" > 
        <?php echo $A4002;  ?>
      </div>
    </td>
    <td width="21" height="15">&nbsp;</td>
    <td width="160" align="left" height="15"><font size="2" face="Arial, Helvetica, sans-serif"> 
      <strong> 
      <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion à MySQL
mysql_select_db("onepip-france-db3"); 
$reponse = mysql_query("SELECT Demi1 
						FROM phpmpy_pf$annee 
						WHERE id='9200' "); // Requête SQL
		while ($donnees = mysql_fetch_array($reponse) )
				{ 
				echo $donnees['Demi1'];
				}

?>
      </strong> </font></td>
    <td width="30" height="15">&nbsp;</td>
    <td width="22" height="15">&nbsp;</td>
    <td width="160" height="15">&nbsp;</td>
    <td width="30" height="15">&nbsp;</td>
    <td width="21" height="15">&nbsp;</td>
  </tr>
  <tr> 
    <td width="160">&nbsp;</td>
    <td width="30">&nbsp;</td>
    <td width="32">&nbsp;</td>
    <td width="160">&nbsp;</td>
    <td width="30">&nbsp;</td>
    <td width="21">&nbsp;</td>
    <td width="160" align="left"> 
      <div id="quarts" > 
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
      </div>
    </td>
    <td width="30"> 
      <div id="quarts" > 
        <?php echo $A2001; ?>
      </div>
    </td>
    <td width="22">&nbsp;</td>
    <td width="160">&nbsp;</td>
    <td width="30">&nbsp;</td>
    <td width="21">&nbsp;</td>
  </tr>
  <tr> 
    <td width="160">&nbsp;</td>
    <td width="30">&nbsp;</td>
    <td width="32">&nbsp;</td>
    <td width="160"><font size="2" face="Arial, Helvetica, sans-serif"><strong> 
      <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion à MySQL
mysql_select_db("onepip-france-db3"); // S&egrave;lection de la base onepip
$reponse = mysql_query("SELECT * FROM phpmpy_pf$annee WHERE id='9200' "); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{      
       echo $donnees['Quart2'];
}
?>
      </strong></font><font size="2" face="Arial, Helvetica, sans-serif"><b><i> 
      </i></b></font></td>
    <td width="30">&nbsp;</td>
    <td width="21">&nbsp;</td>
    <td width="160"> 
      <div id="quarts" > 
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
      </div>
    </td>
    <td width="30"> 
      <div id="quarts" > 
        <?php echo $A2002;  ?>
      </div>
    </td>
    <td width="22">&nbsp;</td>
    <td width="160">&nbsp;</td>
    <td width="30">&nbsp;</td>
    <td width="21">&nbsp;</td>
  </tr>
  <tr> 
    <td width="160" height="24"> 
      <div id="barrage" > 
        <?php 	echo $clubA8003;?>
      </div>
    </td>
    <td width="30" height="24"> 
      <div id="barrage" > 
        <?php echo $A8003; ?>
      </div>
    </td>
    <td width="32" height="24">&nbsp;</td>
    <td width="160" height="24"> 
      <div id="quarts" > 
        <?php  echo $clubA4003; ?>
      </div>
    </td>
    <td width="30" height="24"> 
      <div id="quarts" > 
        <?php echo $A4003; ?>
      </div>
    </td>
    <td width="21" height="24">&nbsp;</td>
    <td width="160" align="left" height="24">&nbsp;</td>
    <td width="30" height="24">&nbsp;</td>
    <td width="22" height="24">&nbsp;</td>
    <td colspan="3" height="24"><font size="2" face="Arial, Helvetica, sans-serif"><b><i> 
      <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion à MySQL
mysql_select_db("onepip-france-db3"); // S&egrave;lection de la base onepip
$reponse = mysql_query("SELECT * FROM phpmpy_pf$annee WHERE id='9200' "); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
      <strong> 
      <?php echo $donnees['Finale'];?>
      <?php
 
 }

?>
      </strong></i></b></font></td>
  </tr>
  <tr> 
    <td width="160" height="11"> 
      <div id="barrage" > 
        <?php  echo $clubA8004;?>
      </div>
    </td>
    <td width="30" height="11"> 
      <div id="barrage" > 
        <?php echo $A8004; ?>
      </div>
    </td>
    <td width="32">&nbsp;</td>
    <td width="160"> 
      <div id="quarts" > 
        <?php echo $clubA4004; ?>
      </div>
    </td>
    <td width="30"> 
      <div id="quarts" > 
        <?php  echo $A4004; ?>
      </div>
    </td>
    <td width="21">&nbsp;</td>
    <td width="160" align="left">&nbsp;</td>
    <td width="30">&nbsp;</td>
    <td width="22">&nbsp;</td>
    <td width="160"> 
      <div id="quarts" > 
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
      </div>
    </td>
    <td width="30"> 
      <div id="quarts" > 
        <?php
$reponse = mysql_query("SELECT A1001 FROM phpmpy_pf$annee WHERE id='9200'");
while ($donnees = mysql_fetch_array($reponse) )
{ 
 $A1001= $donnees['A1001'];
 echo $A1001;     
}
?>
      </div>
    </td>
    <td width="21">&nbsp;</td>
  </tr>
  <tr> 
    <td width="160" height="11"> </td>
    <td width="30" height="11"> </td>
    <td width="32" height="11">&nbsp;</td>
    <td width="160" height="11">&nbsp;</td>
    <td width="30" height="11">&nbsp;</td>
    <td width="21" height="11">&nbsp;</td>
    <td width="160" height="11" align="left">&nbsp;</td>
    <td width="30" height="11">&nbsp;</td>
    <td width="22" height="11">&nbsp;</td>
    <td width="160" height="11"> 
      <div id="quarts" > 
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
      </div>
    </td>
    <td width="30" height="11"> 
      <div id="quarts" > 
        <?php
$reponse = mysql_query("SELECT A1002 FROM phpmpy_pf$annee WHERE id='9200'");
while ($donnees = mysql_fetch_array($reponse) )
{ 
 $A1002= $donnees['A1002'];
 echo $A1002;     
}
?>
      </div>
    </td>
    <td width="21" height="11">&nbsp;</td>
  </tr>
  <tr> 
    <td width="160">&nbsp;</td>
    <td width="30">&nbsp;</td>
    <td width="32">&nbsp;</td>
    <td width="160">&nbsp;</td>
    <td width="30">&nbsp;</td>
    <td width="21">&nbsp;</td>
    <td width="160" align="left">&nbsp;</td>
    <td width="30">&nbsp;</td>
    <td colspan="4" rowspan="4"> 
      <div align="center"><font color="#000000" face="Geneva, Arial, Helvetica, san-serif"size="3"><b><font size="6"> 
        </font></b></font></div>
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
        </font></b></font></div>
      <div align="center"></div>
    </td>
  </tr>
  <tr valign="top"> 
    <td width="160" height="6"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
      </b></font> </td>
    <td width="30" height="6"> </td>
    <td width="32" height="6">&nbsp; </td>
    <td width="160" height="6"><font size="2" face="Arial, Helvetica, sans-serif"> 
      <strong> 
      <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion à MySQL
mysql_select_db("onepip-france-db3"); // S&egrave;lection de la base onepip
$reponse = mysql_query("SELECT * FROM phpmpy_pf$annee WHERE id='9200' "); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{    
       echo $donnees['Quart3']; 
 }

?>
      </strong> </font></td>
    <td width="30" height="6">&nbsp;</td>
    <td width="21" height="6">&nbsp;</td>
    <td width="160" height="6" align="left"><font color="#000000" face="Geneva, Arial, Helvetica, san-serif"size="4"><b> 
      </b></font></td>
    <td width="30" height="6">&nbsp;</td>
  </tr>
  <tr> 
    <td width="160"> 
      <div id="barrage" > 
        <?php  echo $clubA8005;?>
      </div>
    </td>
    <td width="30"> 
      <div id="barrage" > 
        <?php echo $A8005; ?>
      </div>
    </td>
    <td width="32">&nbsp;</td>
    <td width="160"> 
      <div id="quarts" > 
        <?php 	echo $clubA4005;?>
      </div>
    </td>
    <td width="30"> 
      <div id="quarts" > 
        <?php echo $A4005; ?>
      </div>
    </td>
    <td width="21">&nbsp;</td>
    <td width="160" align="left">&nbsp;</td>
    <td width="30">&nbsp;</td>
  </tr>
  <tr> 
    <td width="160" height="20"> 
      <div id="barrage" > 
        <?php  	echo $clubA8006;   ?>
      </div>
    </td>
    <td width="30" height="20"> 
      <div id="barrage" > 
        <?php echo $A8006; ?>
      </div>
    </td>
    <td width="32" height="20">&nbsp;</td>
    <td width="160" height="20"> 
      <div id="quarts" > 
        <?php 	echo $clubA4006;?>
      </div>
    </td>
    <td width="30" height="20"> 
      <div id="quarts" > 
        <?php echo $A4006;?>
      </div>
    </td>
    <td width="21" height="20">&nbsp;</td>
    <td width="160" align="left" height="20"><font size="2" face="Arial, Helvetica, sans-serif"> 
      <strong> 
      <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion à MySQL
mysql_select_db("onepip-france-db3"); // S&egrave;lection de la base onepip	  
$reponse = mysql_query("SELECT * FROM phpmpy_pf$annee WHERE id='9200' "); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
      
       echo $donnees['Demi2'];  
 }
?>
      </strong></font></td>
    <td width="30" height="20">&nbsp;</td>
  </tr>
  <tr> 
    <td width="160">&nbsp;</td>
    <td width="30">&nbsp;</td>
    <td width="32">&nbsp;</td>
    <td width="160">&nbsp;</td>
    <td width="30">&nbsp;</td>
    <td width="21">&nbsp;</td>
    <td width="160" align="left"> 
      <div id="quarts" > 
        <?php echo $clubA2003;  ?>
      </div>
    </td>
    <td width="30"> 
      <div id="quarts" > 
        <?php echo $A2003; ?>
      </div>
    </td>
    <td rowspan="5" colspan="4"> 
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
  </tr>
  <tr> 
    <td width="160">&nbsp;</td>
    <td width="30">&nbsp;</td>
    <td width="32">&nbsp;</td>
    <td width="160"> <strong> 
      <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion à MySQL
mysql_select_db("onepip-france-db3"); // S&egrave;lection de la base onepip
$reponse = mysql_query("SELECT * FROM phpmpy_pf$annee WHERE id='9200' "); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{     
       echo $donnees['Quart4'];
 }
?>
      </strong></td>
    <td width="30">&nbsp;</td>
    <td width="21">&nbsp;</td>
    <td width="160" align="left"> 
      <div id="quarts" > 
        <?php 	echo $clubA2004; ?>
      </div>
    </td>
    <td width="30"> 
      <div id="quarts" > 
        <?php echo $A2004; ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="160"> 
      <div id="barrage" > 
        <?php echo $clubA8007;?>
      </div>
    </td>
    <td width="30"> 
      <div id="barrage" > 
        <?php echo $A8007; ?>
      </div>
    </td>
    <td width="32">&nbsp;</td>
    <td width="160"> 
      <div id="quarts" > 
        <?php  echo $clubA4007; ?>
      </div>
    </td>
    <td width="30"> 
      <div id="quarts" > 
        <?php echo $A4007; ?>
      </div>
    </td>
    <td width="21">&nbsp;</td>
    <td width="160" align="left">&nbsp;</td>
    <td width="30">&nbsp;</td>
  </tr>
  <tr> 
    <td width="160" height="11"> 
      <div id="barrage" > 
        <?php echo $clubA8008;?>
      </div>
    </td>
    <td width="30" height="11"> 
      <div id="barrage" > 
        <?php echo $A8008; ?>
      </div>
    </td>
    <td width="32">&nbsp;</td>
    <td width="160"> 
      <div id="quarts" > 
        <?php	echo $clubA4008; ?>
      </div>
    </td>
    <td width="30"> 
      <div id="quarts" > 
        <?php echo $A4008; ?>
      </div>
    </td>
    <td width="21">&nbsp;</td>
    <td width="160" align="left">&nbsp;</td>
    <td width="30">&nbsp;</td>
  </tr>
  <tr> 
    <td width="160"> </td>
    <td width="30"> </td>
    <td width="32">&nbsp;</td>
    <td width="160">&nbsp;</td>
    <td width="30">&nbsp;</td>
    <td width="21">&nbsp;</td>
    <td width="160" align="left">&nbsp;</td>
    <td width="30">&nbsp;</td>
  </tr>
  <tr> 
    <td colspan="12">____________________________________________________________________________________________________________________________</td>
  </tr>
  <tr> 
    <td colspan="12" height="22"> 
      <div align="center"> 
        <?php
    // On inclut le haut de la page
    
	include("../../pub1.php"); ?>
      </div>
    </td>
  </tr>
</table>
