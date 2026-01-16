<?php if (isset($_GET['comite'])){$comite=$_GET['comite'];} ?>
<?php if (isset($_GET['champion'])){$champion=$_GET['champion'];} ?>
<?php if (isset($_GET['champion30'])){$champion30=$_GET['champion30'];} ?>

<?php 
/*
if ($comite=="pro" OR $comite=="f1" OR $comite=="fed2"  OR $comite=="fed3NE" OR $comite=="fed3GS" OR $comite=="fem" )
	{
	$taille= "T".''.$champion30;
	}
else
	{
	$taille= "T".''.$champion;
	}
*/
?>
<?php // $phpcomite_divisions= "php".''.$comite.''."_divisions";?> 
<?php // $id=$champion - 1;?>
<?php // include("../saison.php");?>

<?php 
	
/*	
	if ($comite=="fem" OR $comite=="bal" OR $comite=="teu" OR $comite=="phl" )
				require ("../connect/connection4.php");	
	elseif (  $comite=="pro" OR  $comite=="f1" OR $comite=="fed2"  OR $comite=="fed3NE"  OR $comite=="fed3GS"  )
				require ("../connect/connection3.php");	
	else
				require ("../connect/connection2.php");
		
		
*/		
						
							
//require ("../connect/connection2.php");			
	
/*	
	if ($comite == "be")
	 	$comite= "br";
	elseif ($comite == "pa")
		$comite= "pr";
	elseif ($comite == "ld")
		$comite= "pl";
		else
		$comite= $comite;
	*/
	
	?>


<!DOCTYPE html><head> 
<title>Honneur</title>
<link rel="stylesheet" type="text/css" href="../menu_smart2.css">  
<link type="text/css" rel="stylesheet" href="../10.css"> 

<meta name="description" 
content="tous les champions de france de rugby, ffr,FFR, presentation de tous les clubs de rugby francais, Champions des differents comites territoriaux, Tous les championnats de rugby, federale 2, federale 3, federale 1, top 14.">
<meta name="keywords"
content="Brennus,Comite Midi Pyrenees de Rugby,ffr,FFR,Comite territoriaux de rugby,Stade toulousain,Bourgogne,FanceFinalesRugby,Rugby,championnat de france de rugby,Francaise,honneur,promotion honneur,Sport,Ballon,Ovale,">
<meta name="classification" content="Sport,Rugby">
<meta name="resource-type" content="document">
<meta name="copyright" content="Comite Midi Pyrenees de Rugby">
<meta name="author" content="Equipe Onepip">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="robots" content="All">
<meta name=viewport content="width=device-width, initial-scale=1">
</head>

<body bgcolor="#CCCCCC">
<table width="100%" border="1">
  <tr> 
    <td class="h22"> 
      France Finales Rugby
    </td>
  </tr>
  <tr> 
    <td class="h12"> 
      <?php
/*

$query = "	SELECT $taille, ligue
			FROM tailleSmart
			WHERE comite = '$comite' ";
				$result = mysql_query($query) or die (mysql_error());
						 while($row = mysql_fetch_array($result))
							{                             
							$height=$row[0];
							$ligueEnLettres=$row[1];
							}
							
		if ($comite == "br")
	 	$comite= "be";
	elseif ($comite == "pr")
		$comite= "pa";
	elseif ($comite == "pl")
		$comite= "ld";
		else
		$comite= $comite;					
							
		if ($champion > 279 AND $champion < 300 ) 							   
			{
				echo "Championnat de France";
				echo "<br />";
				echo $poule; 
			}					
		elseif ($champion > 170 and $champion < 230 ) 							   
			{
				echo "Ligue".' '.$ligueEnLettres;
				echo "<br />";
				echo $poule; 
			}
		elseif ($champion > 270 and $champion < 9210 ) 							   
			{
				echo "Ligue".' '.$ligueEnLettres;
				echo "<br />";
				echo $poule; 
			}
		
		
		
		else
			
			{
			 	echo "Championnat de France";
			  	echo "<br />";
			  	echo $poule;
			 }
*/			 
?>
       </td>
  </tr>
</table>

<p>&nbsp; </p>

<div align="center">
<object data="/Phpleague/phpab/prono/indexSmart.php"  type="text/html" height="900" width="100%"/>  
  </object> <id class="calendrier"></id><br>
</div>
<br>
<br>
<?php //require ("../bas.php");?>
</body>
</html>
