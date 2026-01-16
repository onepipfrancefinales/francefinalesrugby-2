<?php

global $tableau110,$tableau141, $tableau241, $tableau151, $tableau151, $tabId ;


/**** tableaux des poules par divisions *******/
//Pro
$tableau110 = array (990110, 990120, 990130, 990135, 990136);
//Fédérale 1
$tableau141 = array(990141, 990142, 990143, 990144);	
//Espoir Fédérale1
$tableau241 = array(990141, 990242, 990243, 990244);	
//fédérale2
$tableau151 = array(990151, 990152, 990153, 990154,990155, 990156, 990157, 990158);	
//Fédérale B
$tableau151 = array(990251, 990252, 990253, 990254,990255, 990256, 990257, 990258);	
//Fédérale 3 - Poule 1 à 10
$tableau1161 = array(991160, 991161, 991162, 991163, 991164, 991165, 991166, 991167, 991168, 991169);
//Fédérale 3 - Poule 11 à 20
$tableau2161 = array(992160, 992161, 992162, 992163, 992164, 992165, 992166, 992167, 992168, 992169);					 
//Excellence B - Poules 1 à 10
$tableau1261 = array(991260, 991261, 991262, 991263, 991264, 991265, 991266, 991267, 991268, 991269,); 
//Excelence B - Poules 11 à 20
$tableau2261 = array(992260, 992261, 992262, 992263, 992264, 992265, 992266, 992267, 992268, 992269);




//fem
if ($champRecup == 816285)
	$tableau = array(816281, 816282, 816285, 816191,816192, 816193, 816194);	




/*****  Mise à jour des bases de données ********/



// liste des lignes a rajouter aux tables bdpffrance, bdpffrance_2 et bdpffrance_dates
// pour chaque nouvelle saison.

$tabId = array(110, 120, 130, 135, 140, 150, 160, 170, 180, 190,
								   240, 250, 260, 270,
									280, 285, 290);
									
?>