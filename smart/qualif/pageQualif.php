<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-utf-8">
<link type="text/css" rel="stylesheet" href="qualifSmart.css">
 <link rel="stylesheet" type="text/css" href="../10.css"> 

<meta name="description"
content="rugby amateur, champions de france de rugby, ffr,FFR, presentation de tous les clubs de rugby francais, Champions des differents comités territoriaux, Tous les championnats de rugby, fédérale 2, fédérale 3, fédérale 1, top 14.">
<meta name="keywords"
content="Brennus,Comite Midi Pyrenees de Rugby,ffr,FFR,Comite territoriaux de rugby,Stade toulousain,Bourgogne,FanceFinalesRugby,Rugby,championnat de france de rugby,Française,honneur,promotion honneur,Sport,Ballon,Ovale,">
<meta name="classification" content="Sport,Rugby">
<meta name="resource-type" content="document">
<meta name="copyright" content="Comite Midi Pyrenees de Rugby">
<meta name="author" content="Equipe Onepip">
<meta name="robots" content="All">
<title>Championnat de France</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name=viewport content="width=device-width, initial-scale=1">
</head>
<body bgcolor="#FFFFFF" text="#000000">
<?php include("../entete.php"); ?>

<?php include("pf_terr_liens.php"); ?>
<br>
<?php include("../../pub/pub20.php"); ?>
<br>

<table width="95%" align="center">
  <tr>
    <td width="52%"> 
      <?php
	  //---------------Récuperation du type dans la base--------------

require ("../../connect/connection2.php") ; 
$bdcomite_pfterr="php".''.$comite."_pfterr";	
		$bdcomite_pfterr=$bdcomite_pfterr.''."_e";
		
		$reponse =mysql_query ("	    SELECT type 
										FROM $bdcomite_pfterr
										WHERE division=$division AND annee=$annee");
		
								while($row = mysql_fetch_array($reponse))
									{                 	
									$type=$row[0];
									}
	  
	//  echo $type;
	  
	   if ($type =='17')
	   		{
	  		include("oppositionsBarr18.php"); 
			}
	  	elseif ($type == '18')
	  		{
	  		include("oppositions18.php"); 
			}
		elseif ($type == '16')
			{
			include("oppositions16.php"); 
			}
		?>
    </td>
    <td width="3%" bgcolor="#000000">&nbsp; </td>
    <td valign="top" width="45%"> 
      <?php
	if ($division==170)
	  		{
			include "../../phasesfinalesterr2019/qualification/QHonneur.php";
	  		}
	elseif ($division==180 OR $division==190 OR $division==200)
	  		{
	   		include "../../phasesfinalesterr2019/qualification/Qph.php";	
			}
	elseif ($division==210)
	  		{
	   		include "../../phasesfinalesterr2019/qualification/Q3me.php";	
			}
	elseif ($division==220)
	  		{	
			include "../../phasesfinalesterr2019/qualification/Q4me.php";
			}
	elseif ($division==270)
			{		
			include "../../phasesfinalesterr2019/qualification/QreserveH.php";
			}
		
	  ?>
    </td>
  </tr>
</table>
<br>
<?php	include("../../pub/pub20.php"); ?>
<br>
<?php	require "../bas2.php"; ?>
</body>
</html>
