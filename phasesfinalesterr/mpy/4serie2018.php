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
<p>&nbsp;</p>
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
 $anneemoins = $annee-1;
          $anneeplus = $annee+1;
    
	include("../../pub7.php"); ?>
        </p>
      </td>
      <td valign="middle" bgcolor="#EAECEB" height="29" align="left">
        <div align="center"><font size="5"><b><font size="5"><b><font size="5"><b><font size="5"><b><font color="#FF0000" size="2"> 
          
          </font></b></font></b><font color="#000000" size="2"><a href="http://francefinalesrugby.franceserv.com/phasesfinalesterr/mpy/pagereservehonneur.php?variable_1=<?php echo $anneemoins;?>" target="_top"><font size="6" color="#FF0000">&lt;&lt;</font></a></font></font></b></font><font color="#000000" size="2"><font size="5" color="#EAECEB">nnnne</font><font size="5"> 
          </font></font></b><a href="http://francefinalesrugby.franceserv.com/phasesfinalesterr/mpy/pagereservehonneur.php?variable_1=<?php echo $anneeplus;?>"target="_top"><font color="#FF0000" size="6"><b>&gt;&gt;</b></font></a></font></div>
        </td>
      <td width="375" bgcolor="#EAECEB" height="29" align="left" valign="middle"> 
        <div align="center"> 
          <?php include("../../pub8.php"); ?>
        </div>
      </td>
    </tr>
    <tr valign="top" align="center"> 
      <td colspan="3" bgcolor="#006699" height="31"><font size="5"><b><font color="#FFCC00"> 
        <? echo "Finales territoriales du comit&eacute; des Pyr&eacute;n&eacute;es $annee";?>
        </font></b></font></td>
    </tr>
  </table>
</div>
<p><br>
</p>
<div id="Layer2" style="position:absolute; width:200px; height:115px; z-index:15; left: 2px; top: 174px"> 
  <table width="1000" border="0" align="left" height="500" cellspacing="0">
    <tr> 
      <td height="13" bgcolor="#FFCC66" colspan="12"> 
        <div align="center"><i></i><i><b>4me S&eacute;rie 4me S&eacute;rie 4me 
          S&eacute;rie 4me S&eacute;rie 4me S&eacute;rie 4me S&eacute;rie 4me 
          S&eacute;rie 4me S&eacute;rie 4me S&eacute;rie 4me S&eacute;rie 4me 
          S&eacute;rie 4me S&eacute;rie 4me S&eacute;rie 4me </b></i></div>
      </td>
    </tr>
    <tr> 
      <td width="46" height="13">&nbsp;</td>
      <td width="196" height="13">&nbsp;</td>
      <td width="42" height="13">&nbsp;</td>
      <td width="33" height="13">&nbsp;</td>
      <td width="100" height="13">&nbsp;</td>
      <td width="204" align="left" height="13">&nbsp;</td>
      <td width="33" height="13">&nbsp;</td>
      <td width="33" height="13">&nbsp;</td>
      <td width="60" height="13">&nbsp;</td>
      <td width="208" height="13">&nbsp;</td>
      <td width="26" height="13">&nbsp;</td>
      <td width="9" height="13">&nbsp;</td>
    </tr>
    <tr> 
      <td width="46" height="13"> </td>
      <td colspan="3" height="13"> 
        <div id="titre2" >Quarts de finale</div>
      </td>
      <td width="100" height="13">&nbsp;</td>
      <td width="204" align="left" height="13"> 
        <div id="titre2" >Demi finale</div>
      </td>
      <td width="33" align="left" height="13">&nbsp;</td>
      <td width="33" align="left" height="13">&nbsp;</td>
      <td width="60" height="13">&nbsp;</td>
      <td width="208" height="13"> 
        <div id="titre2" >Finale</div>
      </td>
      <td width="26" height="13">&nbsp;</td>
      <td width="9" height="13">&nbsp;</td>
    </tr>
    <tr> 
      <td width="46" height="27"> 
        <?php 
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); 
mysql_select_db("onepip-france-db3");   
   ?>
      </td>
      <td width="196" height="27"> 
        <?php  
$query = "	SELECT  phpmpy_clubs.nom, phpmpy_clubs.url_logo 
			FROM phpmpy_pf$annee, phpmpy_clubs 
			WHERE phpmpy_pf$annee.clubA4001=phpmpy_clubs.id AND phpmpy_pf$annee.id='220'";
				$result = mysql_query($query);
         		while($row = mysql_fetch_array($result))
					 {                                  
						$clubA4001=$row[0];
						$logo4001=$row[1];	
					 }
       ?>
        <?php  
$query = "	SELECT  phpmpy_clubs.nom, phpmpy_clubs.url_logo 
			FROM phpmpy_pf$annee, phpmpy_clubs 
			WHERE phpmpy_pf$annee.clubA4002=phpmpy_clubs.id and phpmpy_pf$annee.id='220'";
				$result = mysql_query($query);
						 while($row = mysql_fetch_array($result))
						 {                                  
							$clubA4002=$row[0];
							$logo4002=$row[1];
		
 						}
?>
        <?php  
$query = "SELECT  phpmpy_clubs.nom, phpmpy_clubs.url_logo 
FROM phpmpy_pf$annee, phpmpy_clubs 
WHERE phpmpy_pf$annee.clubA4003=phpmpy_clubs.id and phpmpy_pf$annee.id='220'";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {                                  
		$clubA4003=$row[0];
		$logo4003=$row[1];
		
 }
       ?>
        <?php  
$query = "SELECT  phpmpy_clubs.nom, phpmpy_clubs.url_logo 
		FROM phpmpy_pf$annee, phpmpy_clubs 
		WHERE phpmpy_pf$annee.clubA4004=phpmpy_clubs.id and phpmpy_pf$annee.id='220'";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {                                  
		$clubA4004=$row[0];
		$logo4004=$row[1];
		
 }
       ?>
        <?php  
$query = "SELECT  phpmpy_clubs.nom, phpmpy_clubs.url_logo 
		FROM phpmpy_pf$annee, phpmpy_clubs
			WHERE phpmpy_pf$annee.clubA4005=phpmpy_clubs.id and phpmpy_pf$annee.id='220'";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {                                  
		$clubA4005=$row[0];
		$logo4005=$row[1];
		
 }
       ?>
        <?php  
$query = "	SELECT  phpmpy_clubs.nom, phpmpy_clubs.url_logo 
			FROM phpmpy_pf$annee, phpmpy_clubs 
			WHERE phpmpy_pf$annee.clubA4006=phpmpy_clubs.id and phpmpy_pf$annee.id='220'";
				$result = mysql_query($query);
						while($row = mysql_fetch_array($result))
							 {                                  
							$clubA4006=$row[0];
							$logo4006=$row[1];
							
							}
?>
        <?php  
$query = "	SELECT  phpmpy_clubs.nom, phpmpy_clubs.url_logo 
			FROM phpmpy_pf$annee, phpmpy_clubs 
			WHERE phpmpy_pf$annee.clubA4007=phpmpy_clubs.id and phpmpy_pf$annee.id='220'";
				$result = mysql_query($query);
						 while($row = mysql_fetch_array($result))
						 {                                  
							$clubA4007=$row[0];
							$logo4007=$row[1];
		
 						}
?>
        <?php  
$query = "SELECT  phpmpy_clubs.nom, phpmpy_clubs.url_logo 
		FROM phpmpy_pf$annee, phpmpy_clubs 
		WHERE phpmpy_pf$annee.clubA4008=phpmpy_clubs.id and phpmpy_pf$annee.id='220'";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {                                		      
		$clubA4008=$row[0];
		$logo4008=$row[1];
				 
 			}
       ?>
      </td>
      <td width="42" height="27">&nbsp;</td>
      <td width="33" height="27">&nbsp;</td>
      <td width="100" height="27">&nbsp;</td>
      <td width="204" align="left" height="27">&nbsp; </td>
      <td width="33" height="27">&nbsp;</td>
      <td width="33" height="27">&nbsp;</td>
      <td width="60" height="27">&nbsp;</td>
      <td width="208" height="27">&nbsp;</td>
      <td width="26" height="27">&nbsp;</td>
      <td width="9" height="27">&nbsp;</td>
    </tr>
    <tr> 
      <td width="46" height="25"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        </b></font> </td>
      <td width="196" height="25"><font size="2" face="Arial, Helvetica, sans-serif"><b><i> 
        <?php

$requete = "SELECT  A4001, A4002, A4003, A4004, A4005, A4006, A4007, A4008 , 
					A2001, A2002, A2003, A2004, A1001, A1002,
					Quart1, Quart2, Quart3, Quart4
			FROM phpmpy_pf$annee 
			WHERE id='220' "; 
$resultat = mysql_query ($requete);
while ($row = mysql_fetch_array($resultat))
{ 

     
	  
	   $A4001=$row[0];
	   $A4002=$row[1];
	   $A4003=$row[2];
	   $A4004=$row[3];
	   $A4005=$row[4];
	   $A4006=$row[5];
	   $A4007=$row[6];
	   $A4008=$row[7];
	 
	   $A2001=$row[8];
	   $A2002=$row[9];
	   $A2003=$row[10];
	   $A2004=$row[11];
	   
	   $A1001=$row[12];
	   $A1001=$row[13];
	 
	$Q1= $row[14];
  	$Q2= $row[15];
  	$Q3= $row[16];
  	$Q4= $row[17];
 
 }
echo $Q1;
?>
        </i></b></font></td>
      <td width="42" height="25">&nbsp;</td>
      <td width="33" height="25">&nbsp;</td>
      <td width="100" height="25">&nbsp;</td>
      <td width="204" height="25" align="left">&nbsp;</td>
      <td width="33" height="25">&nbsp;</td>
      <td width="33" height="25">&nbsp;</td>
      <td width="60" height="25">&nbsp;</td>
      <td width="208" height="25">&nbsp;</td>
      <td width="26" height="25">&nbsp;</td>
      <td width="9" height="25">&nbsp;</td>
    </tr>
    <tr> 
      <td width="46"> </td>
      <td width="196"> 
        <div id="quarts" > 
          <?php  echo $clubA4001; ?>
        </div>
      </td>
      <td width="42"> 
        <div id="quarts" > 
          <?php echo $A4001;  ?>
        </div>
      </td>
      <td width="30"> </td>
      <td width="100">&nbsp;</td>
      <td width="204" align="left">&nbsp;</td>
      <td width="33">&nbsp;</td>
      <td width="33">&nbsp;</td>
      <td width="60">&nbsp;</td>
      <td width="208">&nbsp;</td>
      <td width="26">&nbsp;</td>
      <td width="9">&nbsp;</td>
    </tr>
    <tr> 
      <td width="46" height="15"> </td>
      <td width="196" height="15"> 
        <div id="quarts" > 
          <?php echo $clubA4002;  ?>
        </div>
      </td>
      <td width="42" height="15"> 
        <div id="quarts" > 
          <?php echo $A4002;  ?>
        </div>
      </td>
      <td width="30" height="15"> </td>
      <td width="100" height="15">&nbsp;</td>
      <td width="204" align="left" height="15"><font size="2" face="Arial, Helvetica, sans-serif"> 
        <strong> 
        <?php

$reponse = mysql_query("SELECT * FROM phpmpy_pf$annee WHERE id='220' "); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 

       echo $donnees['Demi1'];
     
 
 }

?>
        <?php 
	
	if ( $A4005> $A4006 )
	{
	$clubA2003=$clubA4005;
	}
	else
	{
	$clubA2003=$clubA4006;
	}
	
	
	
  ?>
        <?php 
	
	if ( $A4007> $A4008 )
	{
	$clubA2004=$clubA4007;
	}
	else
	{
	$clubA2004=$clubA4008;
	}
	
	
	
  ?>
        </strong></font></td>
      <td width="33" height="15">&nbsp;</td>
      <td width="33" height="15">&nbsp;</td>
      <td width="60" height="15">&nbsp;</td>
      <td width="208" height="15">&nbsp;</td>
      <td width="26" height="15">&nbsp;</td>
      <td width="9" height="15">&nbsp;</td>
    </tr>
    <tr> 
      <td width="46">&nbsp;</td>
      <td width="196">&nbsp;</td>
      <td width="42">&nbsp;</td>
      <td width="30">&nbsp;</td>
      <td width="100">&nbsp;</td>
      <td width="204" align="left"> 
        <div id="quarts" > 
          <?php 
	
	if ( $A4001> $A4002)
	{
	$clubA2001=$clubA4001;
	}
	else
	{
	$clubA201=$clubA4002;
	}
	
	
	echo $clubA2001;
  ?>
        </div>
      </td>
      <td width="33"> 
        <div id="quarts" > 
          <?php echo $A2001;  ?>
        </div>
      </td>
      <td width="33">&nbsp;</td>
      <td width="60">&nbsp;</td>
      <td width="208">&nbsp;</td>
      <td width="26">&nbsp;</td>
      <td width="9">&nbsp;</td>
    </tr>
    <tr> 
      <td width="46">&nbsp;</td>
      <td width="196"><font size="2" face="Arial, Helvetica, sans-serif"><strong> 
        </strong></font><font size="2" face="Arial, Helvetica, sans-serif"><b><i> <?php echo $Q2; ?>
        </i></b></font></td>
      <td width="42">&nbsp;</td>
      <td width="30">&nbsp;</td>
      <td width="100">&nbsp;</td>
      <td width="204"> 
        <div id="quarts" > 
          <?php 
	
	if ( $A4003> $A4004 )
	{
	$clubA2002=$clubA4003;
	}
	else
	{
	$clubA2002=$clubA4004;
	}
	
	
	echo $clubA2002;
  ?>
        </div>
      </td>
      <td width="33"> 
        <div id="quarts" > 
          <?php echo $A2002;  ?>
        </div>
      </td>
      <td width="33">&nbsp;</td>
      <td width="60">&nbsp;</td>
      <td width="208">&nbsp;</td>
      <td width="26">&nbsp;</td>
      <td width="9">&nbsp;</td>
    </tr>
    <tr> 
      <td width="46" height="17"> </td>
      <td width="196" height="17"> 
        <div id="quarts" >
          <?php  echo $clubA4003; ?>
        </div>
      </td>
      <td width="42" height="17"> 
        <div id="quarts" > 
          <?php echo $A4003; ?>
        </div>
      </td>
      <td width="30" height="17"> </td>
      <td width="100" height="17">&nbsp;</td>
      <td width="204" align="left" height="17">&nbsp;</td>
      <td width="33" height="17">&nbsp;</td>
      <td width="33" height="17">&nbsp;</td>
      <td width="60" height="17">&nbsp;</td>
      <td width="208" height="17"><font size="2" face="Arial, Helvetica, sans-serif"><b><i> 
        <strong>Le 22 Avril</strong></i></b></font></td>
      <td width="26" height="17">&nbsp;</td>
      <td width="9" height="17">&nbsp;</td>
    </tr>
    <tr> 
      <td width="46" height="11"> </td>
      <td width="196"> 
        <div id="quarts" > 
          <?php echo $clubA4004; ?>
        </div>
      </td>
      <td width="42"> 
        <div id="quarts" > 
          <?php  echo $A4004; ?>
        </div>
      </td>
      <td width="30"> </td>
      <td width="100">&nbsp;</td>
      <td width="204" align="left">&nbsp;</td>
      <td width="33">&nbsp;</td>
      <td width="33">&nbsp;</td>
      <td width="60">&nbsp;</td>
      <td width="208"> 
        <div id="quarts" > 
          <?php 
	
	if ( $A2001> $A2002 )
	{
	$clubA1001=$clubA2001;
	}
	else
	{
	$clubA1001=$clubA2002;
	}
	
	
	echo $clubA1001;
  ?>
          <?php 
	
	if ( $A2003> $A2004 )
	{
	$clubA1002=$clubA2003;
	}
	else
	{
	$clubA1002=$clubA2004;
	}
	
	

  ?>
        </div>
      </td>
      <td width="26"> 
        <div id="quarts" > 
          <?php
$reponse = mysql_query("SELECT A1001 FROM phpmpy_pf$annee WHERE id='220'");
while ($donnees = mysql_fetch_array($reponse) )
{ 
 $A1001= $donnees['A1001'];
 echo $A1001;     
}
?>
        </div>
      </td>
      <td width="9">&nbsp;</td>
    </tr>
    <tr> 
      <td width="46" height="11"> </td>
      <td width="196" height="11">&nbsp;</td>
      <td width="42" height="11">&nbsp;</td>
      <td width="30" height="11">&nbsp;</td>
      <td width="100" height="11">&nbsp;</td>
      <td width="204" height="11" align="left">&nbsp;</td>
      <td width="33" height="11">&nbsp;</td>
      <td width="33" height="11">&nbsp;</td>
      <td width="60" height="11">&nbsp;</td>
      <td width="208" height="11"> 
        <div id="quarts" >
          <?php 
	
	
	
	
	echo $clubA1002;
  ?>
        </div>
      </td>
      <td width="26" height="11"> 
        <div id="quarts" > 
          <?php
$reponse = mysql_query("SELECT A1002 FROM phpmpy_pf$annee WHERE id='220'");
while ($donnees = mysql_fetch_array($reponse) )
{ 
 $A1002= $donnees['A1002'];
 echo $A1002;     
}
?>
        </div>
      </td>
      <td width="9" height="11">&nbsp;</td>
    </tr>
    <tr> 
      <td width="46">&nbsp;</td>
      <td width="196">&nbsp; </td>
      <td width="42">&nbsp;</td>
      <td width="30">&nbsp;</td>
      <td width="100">&nbsp;</td>
      <td width="204" align="left">&nbsp;</td>
      <td width="33">&nbsp;</td>
      <td width="33">&nbsp;</td>
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
      <td width="46" height="6"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        </b></font> </td>
      <td width="196" height="6"><font size="2" face="Arial, Helvetica, sans-serif"> 
        <b><i>
        <?php echo $Q3; ?>
        </i></b><strong> </strong> </font></td>
      <td width="42" height="6">&nbsp;</td>
      <td width="30" height="6">&nbsp;</td>
      <td width="100" height="6">&nbsp;</td>
      <td width="204" height="6" align="left"><font color="#000000" face="Geneva, Arial, Helvetica, san-serif"size="4"><b> 
        </b></font></td>
      <td width="33" height="6">&nbsp;</td>
      <td width="33" height="6">&nbsp;</td>
    </tr>
    <tr> 
      <td width="46"> </td>
      <td width="196"> 
        <div id="quarts" > 
          <?php 	echo $clubA4005;?>
        </div>
      </td>
      <td width="42"> 
        <div id="quarts" > 
          <?php echo $A4005; ?>
        </div>
      </td>
      <td width="30"> </td>
      <td width="100">&nbsp;</td>
      <td width="204" align="left">&nbsp;</td>
      <td width="33">&nbsp;</td>
      <td width="33">&nbsp;</td>
    </tr>
    <tr> 
      <td width="46" height="20"> </td>
      <td width="196" height="20"> 
        <div id="quarts" > 
          <?php 	echo $clubA4006;?>
        </div>
      </td>
      <td width="42" height="20"> 
        <div id="quarts" > 
          <?php echo $A4006;?>
        </div>
      </td>
      <td width="30" height="20"> </td>
      <td width="100" height="20">&nbsp;</td>
      <td width="204" align="left" height="20"><font size="2" face="Arial, Helvetica, sans-serif"> 
        <strong> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion à MySQL
mysql_select_db("onepip-france-db3"); // S&egrave;lection de la base onepip	  
$reponse = mysql_query("SELECT * FROM phpmpy_pf$annee WHERE id='220' "); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
      
       echo $donnees['Demi2'];  
 }
?>
        </strong></font></td>
      <td width="33" height="20">&nbsp;</td>
      <td width="33" height="20">&nbsp;</td>
    </tr>
    <tr> 
      <td width="46">&nbsp;</td>
      <td width="196">&nbsp;</td>
      <td width="42">&nbsp;</td>
      <td width="30">&nbsp;</td>
      <td width="100">&nbsp;</td>
      <td width="204" align="left"> 
        <div id="quarts" > 
          <?php 	echo $clubA2003;?>
        </div>
      </td>
      <td width="33"> 
        <div id="quarts" > 
          <?php echo $A2003;  ?>
        </div>
      </td>
      <td width="33">&nbsp;</td>
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
      <td width="46">&nbsp;</td>
      <td width="196"> <strong><font size="2" face="Arial, Helvetica, sans-serif"><b><i>
        <?php echo $Q4; ?>
        </i></b></font> </strong></td>
      <td width="42">&nbsp;</td>
      <td width="30">&nbsp;</td>
      <td width="100">&nbsp;</td>
      <td width="204" align="left"> 
        <div id="quarts" > 
          <?php  echo $clubA4007; ?>
        </div>
      </td>
      <td width="33"> 
        <div id="quarts" > 
          <?php echo $A2004;  ?>
        </div>
      </td>
      <td width="33">&nbsp;</td>
    </tr>
    <tr> 
      <td width="46"> </td>
      <td width="196"> 
        <div id="quarts" > 
          <?php  echo $clubA4007; ?>
        </div>
      </td>
      <td width="42"> 
        <div id="quarts" > 
          <?php echo $A4007; ?>
        </div>
      </td>
      <td width="30"> </td>
      <td width="100">&nbsp;</td>
      <td width="204" align="left">&nbsp;</td>
      <td width="33">&nbsp;</td>
      <td width="33">&nbsp;</td>
    </tr>
    <tr> 
      <td width="46" height="11"> </td>
      <td width="196"> 
        <div id="quarts" > 
          <?php	echo $clubA4008; ?>
        </div>
      </td>
      <td width="42"> 
        <div id="quarts" > 
          <?php echo $A4008; ?>
        </div>
      </td>
      <td width="30"> </td>
      <td width="100">&nbsp;</td>
      <td width="204" align="left">&nbsp;</td>
      <td width="33">&nbsp;</td>
      <td width="33">&nbsp;</td>
    </tr>
    <tr> 
      <td width="46"> </td>
      <td width="196">&nbsp;</td>
      <td width="42">&nbsp;</td>
      <td width="33">&nbsp;</td>
      <td width="100">&nbsp;</td>
      <td width="204" align="left">&nbsp;</td>
      <td width="33">&nbsp;</td>
      <td width="33">&nbsp;</td>
    </tr>
    <tr> 
      <td colspan="12"> 
        <div align="right">____________________________________________________________________________________________________________________________</div>
      </td>
    </tr>
    <tr> 
      <td height="22" colspan="12"> 
        <div align="center"> 
          <?php
    // On inclut le haut de la page
    
	include("../../pub1.php"); ?>
        </div>
      </td>
    </tr>
  </table>
</div>
<div id="Layer1" style="position:absolute; width:381px; height:65px; z-index:14; left: 1010px; top: 1px"><a href="http://forumda.forumsactifs.net/index.htm" target="_blank"><font color="#000000"> 
  <?php
    // On inclut le haut de la page
    include("../../pub2.php");
    ?>
  </font></a></div>
