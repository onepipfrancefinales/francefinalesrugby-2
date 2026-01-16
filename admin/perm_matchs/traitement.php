<?php
$id = $_GET['id'];
$comite = $_GET['comite'];
$idMatch = $_GET['idMatch'];
$phpcomite_matchs=$comite.''."_matchs";
$phpcomite_journees=$comite.''."_journees";
$phpcomite_divisions=$comite.''."_divisions";
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
<?php if (  $comite=="phpf1"  OR  $comite=="phpfed2" OR  $comite=="phpfed3NE" OR  $comite=="phpfed3GS"   )
				require ("../../connect/connection3.php") ; 
else
				require ("../../connect/connection2.php") ; 
   
  ?>
  
  <?php
$query ="					SELECT id, id_equipe_dom, id_equipe_ext, buts_dom, buts_ext, id_journee
							FROM $phpcomite_matchs
							WHERE id=$idMatch";
								$result=mysql_query($query);
								while ($row = mysql_fetch_array($result))
									{
									$idMatch= $row[0];
									$equipeDom= $row[1];
									$equipeExt= $row[2];
									$scoreDom= $row[3];
									$scoreExt= $row[4];
									$journee= $row[5];
									}
									?>


<?php

//echo $phpcomite_journees;echo "<br>";
echo "Division : ".''.$id;echo "<br>";
// Nombre de journées
$query ="					SELECT max(numero)
							FROM $phpcomite_journees
							WHERE id_champ=$id";
								$result=mysql_query($query);
								while ($row = mysql_fetch_array($result))
									{
									$nbreDeJournee = $row[0];
									echo "Nombre de journee : ".''.$nbreDeJournee;
									
									}
							
								
								?>

<?php

//Modification Equipe Une - Situation Initiale

echo "<hr>";
echo "EQUIPE UNE"; echo "<br>";
echo "situation initiale"; echo "<br>";
echo $idMatch.'   '.$equipeDom.'  -  '.$equipeExt.' : '.$scoreDom.' - '.$scoreExt.'*** journee : '.$journee;
echo "<hr>";
?>


<?php
//Modification Journée ALLER
echo "<hr>";
echo "journee ALLER Modifier"; echo "<br>";


if (isset($scoreDom)) $scoreExtModifAller=$scoreDom;
if (isset($scoreExt)) $scoreDomModifAller=$scoreExt;


$equipeDomModifAller = $equipeExt;
$equipeExtModifAller = $equipeDom;
//$scoreDomModifAller = $scoreExt;
//$scoreExtModifAller = $scoreDom;

echo $idMatch.'   '.$equipeDomModifAller.'  -  '.$equipeExtModifAller.' : '.$scoreDomModifAller.' - '.$scoreExtModifAller.'*** journee : '.$journee;
echo "<hr>";

?>


<?php
echo "<hr>";
echo "journee RETOUR Modifier"; echo "<br>";

//if (isset($scoreDom)) $scoreExtModifRetour=$scoreDom;
//if (isset($scoreExt)) $scoreDomModifRetour=$scoreExt;

$equipeDomModifRetour=$equipeDom;
$equipeExtModifRetour=$equipeExt;
$scoreDomModifRetour='NULL';
$scoreExtModifRetour='NULL';
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
echo " ***journee : ".' '.$journeeRetour;
echo "<hr>";



?>
<?php
//****    Modification de la table Matchs  ***********
 include ("modifTable.php");

?>


<p><a href="accueil.php">Retour</a></p>

</body>
</html>
