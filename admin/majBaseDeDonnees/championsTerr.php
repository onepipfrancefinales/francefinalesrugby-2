
<?php
//annee+ligue*100+division=>2019100170/2019100171
require ("../../connect/connection2.php");
require ("../../phasesfinalesterr2019/fonctionspfterrESDL2019.php");


$ligue = array('au','ab','bg','ce','fl');
foreach ($ligue as $valeur)
{
echo $valeur;
	
}

$annee=2019;
$comite ='au';
$PV=";";
$ligue="(ARA)";
$numLigue =10;
$rang2 = 1;
$categorie ="A";
$champ="Auvergne Rhone Alpes";
for ($i=170; $i<230; $i=$i+10)
{

$division=$i;

if ($division == 170)
	$nomChamp ="Honneur";
elseif ($division == 180)
	$nomChamp ="Promotion honneur";
elseif ($division == 190)
	$nomChamp ="1re serie";
elseif ($division == 200)
	$nomChamp ="2me serie";
elseif ($division == 210)
	$nomChamp ="3me serie";
elseif ($division == 220)
	$nomChamp ="4me serie";

	

$id1 =($annee*1000000)+ ($numLigue*10000) +$division;
$id2 =($annee*1000000)+ ($numLigue*10000) +$division + 1;	




huitieme2019 ($comite, $division, $annee);





if ($A1001>$A1002)
	{
	echo $id1.$PV.$annee.$PV.$nomChamp.$PV."Champion".$PV.$clubA1001.$PV.$ligue.$clubA1002.$PV.$ligue.$PV.$A1001.$PV.$A1002.$PV.$champ.$PV.$division.$PV.$rang2.$PV.$categorie."<br />";
	echo $id2.$PV.$annee.$PV.$nomChamp.$PV."Vice champion".$PV.$clubA1002.$PV.$ligue.$PV.$PV.$ligue.$PV.$A1001.$PV.$A1002.$PV.$champ.$PV.$division.$PV.$rang2.$PV.$categorie."<br />";
	echo "<br />";
	}
else 
	{
	echo $id1.$PV.$annee.$PV.$nomChamp.$PV."Champion".$PV.$clubA1002.$PV.$ligue.$clubA1001.$PV.$ligue.$PV.$A1002.$PV.$A1001.$PV.$champ.$PV.$division.$PV.$rang2.$PV.$categorie."<br />";
	echo $id2.$PV.$annee.$PV.$nomChamp.$PV."Vice champion".$PV.$clubA1001.$PV.$ligue.$PV.$PV.$ligue.$PV.$A1002.$PV.$A1001.$PV.$champ.$PV.$division.$PV.$rang2.$PV.$categorie."<br />";
	echo "<br />";
	}
	
}
?>
 
