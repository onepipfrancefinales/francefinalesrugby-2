<?php if (isset($_GET['comite'])){$comite=$_GET['comite'];} ?>
<?php if (isset($_GET['champion'])){$champion=$_GET['champion'];} ?>
<?php if (isset($_GET['champion30'])){$champion30=$_GET['champion30'];} ?>

<?php 
if ($comite=="f1" OR $comite=="fed2"  OR $comite=="fed3NE" OR $comite=="fed3GS" OR $comite=="fem" )
	{
	$taille= "T".''.$champion30;
	}
else
	{
	$taille= "T".''.$champion;
	}

?>
<?php $phpcomite_divisions= "php".''.$comite.''."_divisions";?> 
<?php  $id=$champion - 1;?>
<?php include("../saison.php");?>

<!DOCTYPE html>
<head> 
<title>Honneur</title>
<link rel="stylesheet" type="text/css" href="menu_smart2.css">  
<link type="text/css" rel="stylesheet" href="10.css"> 

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
	if ($comite=="fem" OR $comite=="bal" OR $comite=="teu" OR $comite=="phl" )
				require ("../connect/connection4.php");	
	elseif ($comite=="pl" OR $comite=="mpy" OR $comite=="pr" OR $comite=="br" OR  $comite=="f1" OR $comite=="fed2"  OR $comite=="fed3NE"  OR $comite=="fed3GS"  )
				require ("../connect/connection3.php");	
	else
				require ("../connect/connection2.php");
		
		
$query = "	SELECT nom
			FROM $phpcomite_divisions
			WHERE id = $champion ";
				$result = mysql_query($query) or die (mysql_error());
						 while($row = mysql_fetch_array($result))
							{                             
							$poule=$row[0];
							}		
						
							
require ("../connect/connection2.php");				
$query = "	SELECT $taille, nom
			FROM tailleSmart
			WHERE comite = '$comite' ";
				$result = mysql_query($query) or die (mysql_error());
						 while($row = mysql_fetch_array($result))
							{                             
							$height=$row[0];
							$comiteEnLettres=$row[1];
							}
							
		if ($champion > 170 && $champion < 230 OR $champion > 270 ) 							   
			{
				echo "Comité".' '.$comiteEnLettres;
				echo "<br />";
				echo $poule; 
			}
		else
			{
			 	echo "Championnat de France";
			  	echo "<br />";
			  	echo $poule;
			 }
?>
		
		
				
    </td>
  </tr>
</table>
<p>
<?php//include("texte_defilant.htm"); ?>
<?php	include("../pub/pub20.php"); ?>
</p>
<?php require ("pf-terr/phaseFinale.php");?>
<hr />
<?php 
if ($comite=="mpy")
	require ("menus/menuMpy.php");
//elseif ($comite=="f1")
//	require ("menus/menuFed1.php");
elseif ($comite=="fed2")
	require ("menus/menuFed2.php");
elseif ($comite=="fed3NE" OR $comite=="fed3GS")
	require ("menus/menuFed3.php");
elseif ($comite=="fem")
	require ("menus/menuFem.php");	
else
	require ("menus/menuA.php");?>
<div align="center">
<object data="http://francefinalesrugby.franceserv.com/Phpleague/php<?php echo $comite; ?>/consult2/classement_matchs.php?champ=<?php echo $champion;?>"
 			frameborder="no"  height="<?php echo $height; ?>"  width="100%" type="text/html" align="top">
  </object> 
  
  <id class="calendrier"><a href="calendrier.php?champ=<?php echo $champion; ?>&comite=<?php echo $comite;?>" target="_blank">-- 
  Calendrier complet --</a><br>
 </id> <br>
  <?php	include("infos_centre.php"); ?>
</div>
<hr />
<?php include("../pub/pub25.php"); ?>
<br>
<?php $heightJourneePlus=$height/2.2; ?>
<object data="http://francefinalesrugby.franceserv.com/Phpleague/php<?php echo $comite;?>/consult/classement_journeesupp.php?champ=<?php echo $champion;?>"
			frameborder="no" height="<?php echo $heightJourneePlus; ?>" width="100%" type="text/html" align="top">
  </object> 
  <hr />
<?php include("../pub/pub20.php"); ?>
<br>
<?php require ("bas.php");?>
<hr />
<?php  include("../pub/pub20.php"); ?>
</body>
</html>
