<?php if (isset($_GET['division'])) $division=$_GET['division'];else $id="pas division connu";?>
<?php if (isset($nomDivision)) $$nomDivision=$nomDivision;else $nomDivision="pas id connu";?>
<head>
 <link rel="stylesheet" type="text/css" href="../pf/AA2.css"> 
<meta name="description"
content="tous les champions de france de rugby, ffr,FFR, presentation de tous les clubs de rugby francais, Champions des differents comités territoriaux, Tous les championnats de rugby, fédérale 2, fédérale 3, fédérale 1, top 14.">
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
<body bgcolor="#CCCCCC">
<?php 

$annee=$_GET['annee'];
$comite=$_GET['comite'];



$bdcomiteClubs= ("php".''.$comite.''."_clubs"); 

$bdcomiteAnnee =("php".''.$comite.''."_pfterr");

 	require ("../../connect/connection5.php");

//Nom du comité
		$reponse =mysql_query ("	SELECT nom
									FROM comite
									WHERE comite='$comite'");
	
										while($row = mysql_fetch_array($reponse))
											{                 	
											$comiteToutesLettres=$row[0];
											}
											
//*************  Recherche de la Division  *********************

$reponse =mysql_query ("	SELECT division
							FROM divisions
							WHERE id='$division'");
								while($row = mysql_fetch_array($reponse))
										{                 	
										$nomDivision=$row[0];
										}
																					
?>
<table width="100%" border="1">
  <tr> 
    <td bgcolor="#006699" colspan="2"> 
      <div id="titre-haut">France Finales Rugby</div>
    </td>
  </tr>
  <tr> 
    <td bgcolor="#FFFFFF" colspan="2" height="2"> 
      <div id="titre"> Champ 
        <?php echo $comiteToutesLettres ; ?>
        <br>
        <?php echo $nomDivision; ?>
        <?php echo $annee; ?>
        </div>
    </td>
  </tr>
</table>

