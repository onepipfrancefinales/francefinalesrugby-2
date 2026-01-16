<?php 



if (isset ($_GET['annee'])) $annee = $_GET['annee']; else $annee='-'; 
if (isset ($_GET['division'])) $division = $_GET['division']; else $division='-'; 
if (isset ($_GET['comite'])) $comite = $_GET['comite']; else $comite='-'; 
if (isset ($_GET['page'])) $page = $_GET['page']; else $page='-'; 

echo $annee;
echo $comite; 



if ($annee < 2019)
		//require ("pageAffichageAvantLigue.php");
		header ('location: /phasesfinalesterr/affichageFinalesTerr/pageAffichage.php?annee='.$annee."&comite=".$comite."&page=".$page);
else
		//require ("pageAffichageApresLigue.php");
		header ('location: /phasesfinalesterr2019/affichageFinalesTerr/pageAffichageApresLigue.php?annee='.$annee."&comite=".$comite."&page=".$page);

?>