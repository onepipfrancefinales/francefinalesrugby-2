<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body bgcolor="#FFFFFF" text="#000000">

</body>
</html>

 <? function champ ($bdcomite, $id, $annee)
 {
 
global $clubchamp;
global $logochamp;


$bdcomiteAnnee= ("bdpf".''.$annee);
$bdcomiteclubs= ($bdcomite);
   
$query = "SELECT bdclubs.nom_1,  bdclubs.url100_100 FROM $bdcomiteAnnee, bdclubs WHERE bdclubs.code=$bdcomiteAnnee.E05 and $bdcomiteAnnee.id=$id";
$result = mysql_query($query) or die (mysql_error());
         while($row = mysql_fetch_array($result))
         	{                             
			$clubchamp=$row[0];
			$logochamp=$row[1];
			
			}		   
 }
 ?>  
 
 
<? 
function demiFinaleA ($bdcomite, $id, $annee)
 {
global $clubA;
global $logoA;
global $scoreA; 
 
 
$bdcomiteAnnee= ("bdpf".''.$annee);
$bdcomiteclubs= ($bdcomite);
   
$query = "SELECT bdclubs.nom_1,  bdclubs.logo, $bdcomiteAnnee.A2001 FROM $bdcomiteAnnee, bdclubs WHERE bdclubs.code=$bdcomiteAnnee.E01 and $bdcomiteAnnee.id=$id";
$result = mysql_query($query) or die (mysql_error());
         while($row = mysql_fetch_array($result))
         	{                             
			$clubA=$row[0];
			$logoA=$row[1];
			$scoreA=$row[2];
			}		   
 }
 ?> 
  
<? function demiFinaleB ($bdcomite, $id, $annee)
 {
global $clubB;
global $logoB;
global $scoreB; 
 
 
 
$bdcomiteAnnee= ("bdpf".''.$annee);
$bdcomiteclubs= ($bdcomite);
   
$query = "SELECT bdclubs.nom_1,  bdclubs.logo, $bdcomiteAnnee.A2002 FROM $bdcomiteAnnee, bdclubs WHERE bdclubs.code=$bdcomiteAnnee.E02 and $bdcomiteAnnee.id=$id";
$result = mysql_query($query) or die (mysql_error());
         while($row = mysql_fetch_array($result))
         	{                             
			$clubB=$row[0];
			$logoB=$row[1];
			$scoreB=$row[2];
			}		   
 }
 ?>  
 
 <? function demiFinaleC ($bdcomite, $id, $annee)
 {
global $clubC;
global $logoC;
global $scoreC; 
 
 
$bdcomiteAnnee= ("bdpf".''.$annee);
$bdcomiteclubs= ($bdcomite);
   
$query = "SELECT bdclubs.nom_1,  bdclubs.logo, $bdcomiteAnnee.A2003 FROM $bdcomiteAnnee, bdclubs WHERE bdclubs.code=$bdcomiteAnnee.E03 and $bdcomiteAnnee.id=$id";
$result = mysql_query($query) or die (mysql_error());
         while($row = mysql_fetch_array($result))
         	{                             
			$clubC=$row[0];
			$logoC=$row[1];
			$scoreC=$row[2];
			}		   
 }
 ?>  
 
 <? function demiFinaleD ($bdcomite, $id, $annee)
 {
 
global $clubD;
global $logoD;
global $scoreD; 

$bdcomiteAnnee= ("bdpf".''.$annee);
$bdcomiteclubs= ($bdcomite);
   
$query = "SELECT bdclubs.nom_1,  bdclubs.logo, $bdcomiteAnnee.A2004 FROM $bdcomiteAnnee, bdclubs WHERE bdclubs.code=$bdcomiteAnnee.E04 and $bdcomiteAnnee.id=$id";
$result = mysql_query($query) or die (mysql_error());
         while($row = mysql_fetch_array($result))
         	{                             
			$clubD=$row[0];
			$logoD=$row[1];
			$scoreD=$row[2];
			}		   
 }
 ?>  
 
 