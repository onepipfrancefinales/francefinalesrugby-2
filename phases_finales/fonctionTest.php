<?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); 
mysql_select_db("onepip-france-db1"); 


$id = 285;
$annee = 2018;
?>

<?php
$type=4;

if ($type==4)
$tabEquipe = array();
for ($i=101; $i<109; $i++)
	 	{
		$equipeCode="bdpfClubs".''.".E".''.$i;
			$query = "	SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, $equipeCode
						FROM bdclubs, bdpfClubs
						WHERE bdclubs.code=$equipeCode and bdpfClubs.id=$id "; 
			$result = mysql_query($query) or die(mysql_error());
			while ($row = mysql_fetch_array($result) )
				{ 
				$nom = $row[1];
				$nom16 = substr($nom,0,16);
				$tabEquipe[] =$nom16.' '.$row[2];
				}
	
		}
	
$clubA4001 = $tabEquipe[0];
$clubA4002 = $tabEquipe[1];
$clubA4003 = $tabEquipe[2];
$clubA4004 = $tabEquipe[3];
$clubA4005 = $tabEquipe[4];
$clubA4006 = $tabEquipe[5];
$clubA4007 = $tabEquipe[6];
$clubA4008 = $tabEquipe[7];
?>


<?php // ----8me-----Quarts----Demi------Finale-------
$query = "	SELECT id, A8001, A8002, A8003, A8004, A8005, A8006, A8007, A8008, A8009, A8010, A8011, A8012, A8013, A8014, A8015, A8016,
					   A4001, A4002, A4003, A4004, A4005, A4006, A4007, A4008,A2001, A2002, A2003, A2004, A1001, A1002 
			FROM bdpf$annee2 
			WHERE id=$id "; 
			
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$A8001 = $row[1];
	$A8002 = $row[2];
	$A8003 = $row[3];
	$A8004 = $row[4];
	$A8005 = $row[5];
	$A8006 = $row[6];
	$A8007 = $row[7];
	$A8008 = $row[8];
	$A8009 = $row[9];
	$A8010 = $row[10];
	$A8011 = $row[11];
	$A8012 = $row[12];
	$A8013 = $row[13];
	$A8014 = $row[14];
	$A8015 = $row[15];
	$A8016 = $row[16];
	
	
	$A4001 = $row[17];
	$A4002 = $row[18];
	$A4003 = $row[19];
	$A4004 = $row[20];
	$A4005 = $row[21];
	$A4006 = $row[22];
	$A4007 = $row[23];
	$A4008 = $row[24];
	
	$A2001 = $row[25];
	$A2002 = $row[26];
	$A2003 = $row[27];
	$A2004 = $row[28];
	
	$A1001 = $row[29];
	$A1002 = $row[30];
	
	
	}
 
?>


<?php //------Demi--------
$clubA="-";

        if ($A4001+$A4002>0)  if ($A4001>$A4002)	$clubA2001= $clubA4001;	else	$clubA2001= $clubA4002;  else $clubA2001=$clubA;?>
<?php   if ($A4003+$A4004>0)  if ($A4003>$A4004)	$clubA2002= $clubA4003;	else	$clubA2002= $clubA4004;  else $clubA2002=$clubA;?>

<?php   if ($A4005+$A4006>0)  if ($A4005>$A4006)	$clubA2003= $clubA4005;	else	$clubA2003= $clubA4006;  else $clubA2003=$clubA;?>								  
<?php   if ($A4007+$A4008>0)  if ($A4007>$A4008)	$clubA2004= $clubA4007;	else	$clubA2004= $clubA4008;  else $clubA2004=$clubA;?>								  
								  
 <?php	//------Finale--------							  
        if ($A2001+$A2002>0)  if ($A2001>$A2002)	$clubA1001= $clubA2001;	else	$clubA1001= $clubA2002;  else $clubA1001=$clubA;?>
<?php   if ($A2003+$A2004>0)  if ($A2003>$A2004)	$clubA1002= $clubA2003;	else	$clubA1002= $clubA2004;  else $clubA1002=$clubA;?>

<?php //------Champion--------
        if ($A1001+$A1002>0)  if ($A1001>$A1002)	$clubA1000= $clubA1001;	else	$clubA1000= $clubA1002;  else $clubA1000=$clubA;?>

								  
<?php
//****** 8me de finale
if ($A8001+$A8002==0) {$A8001="-";	$A8002="-";  $pts2A3233="-";	$pts2A3234="-"; }
if ($A8003+$A8004==0) {$A8003="-";	$A8004="-";  $pts2A3235="-";	$pts2A3236="-"; }
if ($A8005+$A8006==0) {$A8005="-";	$A8006="-";  $pts2A3237="-";	$pts2A3238="-"; }
if ($A8007+$A8008==0) {$A8007="-";	$A8008="-";  $pts2A3239="-";	$pts2A3240="-"; }
if ($A8001+$A8002==0) {$A8009="-";	$A8010="-";  $pts2A3241="-";	$pts2A3242="-"; }
if ($A8003+$A8004==0) {$A8011="-";	$A8012="-";  $pts2A3243="-";	$pts2A3244="-"; }
if ($A8005+$A8006==0) {$A8013="-";	$A8014="-";  $pts2A3245="-";	$pts2A3246="-"; }
if ($A8007+$A8008==0) {$A8015="-";	$A8016="-";  $pts2A3247="-";	$pts2A3248="-"; }



if ($A4001+$A4002==0) {$A4001="-";	$A4002="-"; }
if ($A4003+$A4004==0) {$A4003="-";	$A4004="-"; }
if ($A4005+$A4006==0) {$A4005="-";	$A4006="-"; }
if ($A4007+$A4008==0) {$A4007="-";	$A4008="-"; }

if ($A2001+$A2002==0) {$A2001="-";	$A2002="-"; }
if ($A2003+$A2004==0) {$A2003="-";	$A2004="-"; }
 
   
if ($A1001+$A1002==0) {$A1001="-";	$A1002="-"; }   
   
   
?>