<?php
//$id = $_GET['id'];
//$comite = $_GET['comite'];
//$idMatch = $_GET['idMatch'];
//$phpcomite_matchs=$comite.''."_matchs";
//$phpcomite_journees=$comite.''."_journees";
?>
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body bgcolor="#FFFFFF" text="#000000">
<?php
//Situation Initiale
//echo $comite;echo "<br />";
//echo $idMatch;echo "<br />";

?>
<?php if ( $comite=="phpf1"  OR  $comite=="phpfed2" OR  $comite=="phpfed3NE" OR  $comite=="phpfed3GS" )
				require ("../../connect/connection3.php") ; 
else
				require ("../../connect/connection2.php") ; 
   
  ?>
  ________
  <br/>
  <?php
echo $idReserve;echo "<br />";
echo $journee;echo "<br />";
echo $equipeDom;echo "<br />";
echo "<br />";
$query ="					SELECT id, id_equipe_dom, id_equipe_ext, buts_dom, buts_ext, id_journee
							FROM $phpcomite_matchs
							WHERE id_equipe_dom=$equipeDom + 900000 AND id_journee=$journee+10000";
										$result=mysql_query($query);
								while ($row = mysql_fetch_array($result))
									{
									$idMatchR= $row[0];
									$equipeDomR= $row[1];
									$equipeExtR= $row[2];
									$scoreDomR= $row[3];
									$scoreExtR= $row[4];
									$journeeR= $row[5];
									}
									?>



<?php

//Modification Equipe Une - Situation Initiale

echo "<hr>";
echo "EQUIPE RESERVE"; echo "<br>";
echo "situation initiale"; echo "<br>";
echo $idMatchR.'   '.$equipeDomR.'  -  '.$equipeExtR.' : '.$scoreDomR.' - '.$scoreExtR.' journee : '.$journeeR;
echo "<hr>";
?>


<?php
//Modification Journée ALLER
echo "<hr>";
echo "journee ALLER Modifier"; echo "<br>";

$equipeDomModifAller=$equipeExt;
$equipeExtModifAller=$equipeDom;
$scoreDomModifAller=$scoreExt;
$scoreExtModifAller=$scoreDom;

echo $idMatch.'   '.$equipeDomModifAller.'  -  '.$equipeExtModifAller.' : '.$scoreDomModifAller.' - '.$scoreExtModifAller.' journee : '.$journee;
echo "<hr>";

?>


<?php
echo "<hr>";
echo "journee RETOUR Modifier"; echo "<br>";

$equipeDomModifRetour=$equipeDom;
$equipeExtModifRetour=$equipeExt;
//$scoreDomModifRetour='NULL';
//$scoreExtModifRetour='NULL';
//echo $equipeDom;
//echo $equipeExt;

$query ="					SELECT id
							FROM $phpcomite_matchs
							WHERE id_equipe_dom=$equipeExt AND id_equipe_ext=$equipeDom    ";
										$result=mysql_query($query);
								while ($row = mysql_fetch_array($result))
									{
									$idMatchRetour= $row[0];
									}

echo $idMatchRetour.'   '.$equipeDomModifRetour.'  -  '.$equipeExtModifRetour.' : '.$scoreDomModifRetour.' - '.$scoreExtModifRetour;
$journeeRetour =$journee+($nbreDeJournee/2);
echo " journee : ".' '.$journeeRetour;
echo "<hr>";



?>


<p><a href="accueil.php">Retour</a></p>

</body>
</html>
