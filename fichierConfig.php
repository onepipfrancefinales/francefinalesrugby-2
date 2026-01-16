<?php

GLOBAL $tableauFed1, $tableauFed1B,
 $tableauFed2, $tableauFed2B,
 $tableauARA1, $tableauARA2, $tableauARA3, $tableauRES_ARA1, $tableauRES_ARA2,
 $tableauNAQ1, $tableauNAQ2, $tableauNAQ3, $tableauRES_NAQ1, $tableauRES_NAQ2,
 $tableauOCC1, $tableauOCC2, $tableauOCC3, $tableauRES_OCC1, $tableauRES_OCC2,
 $tableauBFC, $tableauBRE, $tableauCVL, $tableauHDF, $tableauPDL,
 $tableauGES, $tableauIDF, $tableauNOR, $tableauPCA;
$tabId ;


/**** tableaux des poules par divisions *******/
//Pro
$tableau110 = array (990110, 990120, 990130, 990135, 990136);
//Fédérale 1

$tableauFed1 = array(990141, 990142, 990143, 990144);
$tableauFed1B = array(990241, 990242, 990243, 990244);	
//fédérale2

$tableauFed2 = array(990151, 990152, 990153, 990154,990155, 990156, 990157, 990158);
$tableauFed2B = array(990251, 990252, 990253, 990254,990255, 990256, 990257, 990258);
//Fédérale 3 - Poule 1 à 8
$tableauSmartFed3 = array(991161, 991162, 991163, 991164, 991165, 991166, 991167, 991168,
						  992161, 992162, 992163, 992164, 992165, 992166, 992167, 992168);

$tableauSmartResFed3 = array(991261, 991262, 991263, 991264, 991265, 991266, 991267, 991268,
							 992261, 992262, 992263, 992264, 992265, 992266, 992267, 992268);


$tableauFed3_1 = array(991161, 991162, 991163, 991164, 991165, 991166, 991167, 991168);
//Fédérale 3 - Poule 9 à 16
$tableauFed3_2 = array(992161, 992162, 992163, 992164, 992165, 992166, 992167, 992168);		

//POULES TESTS
$tableauFed3_1Test = array(771161, 771162, 771163, 771164, 771165, 771166, 771167, 771168);
//Fédérale 3 - Poule 9 à 16
$tableauFed3_2Test = array(772161, 772162, 772163, 772164, 772165, 772166, 772167, 772168);		

//feminines
$tableauFem = array(880281, 880285, 880291, 880292, 880293, 880294);	

//ARA
$tableauARA1 = array(100171, 100172, 100173, 100174 );
$tableauARA2 = array(100181, 100182, 100183, 100184, 100185, 100186);
$tableauARA3 = array(100191, 100192, 100193, 100194, 100195, 100196, 100197);
$tableauRES_ARA1= array(100271, 100272, 100273, 100274);
$tableauRES_ARA2= array(109181, 109182, 109183, 109184, 109185, 109186);

//NAQ
$tableauNAQ1 = array(190171, 190172, 190173, 190174);
$tableauNAQ2 = array(190181, 190182, 190183, 190184, 190185, 190186);
$tableauNAQ3 = array(190191, 190192, 190193, 190194);
$tableauPromoNAQ3 = array(190201, 190202, 190203, 190204,  190205, 190206);
$tableauRES_NAQ1= array(190271, 190272, 190273, 190274);
$tableauRES_NAQ2= array(199181, 199182, 199183, 199184, 199185, 199186);

//OCC
$tableauOCC1= array(200171, 200172, 200173, 200174);
$tableauOCC2= array(200181, 200182, 200183, 200184, 200185, 200186, 200187, 200188);
$tableauOCC3= array(200191, 200192, 200193, 200194, 200195, 200196, 200197, 200198);
$tableauRES_OCC1= array(200271, 200272, 200273, 200274);
$tableauRES_OCC2= array(209181, 209182, 209183, 209184, 209185, 209186, 209187, 209188);

//***************      TABLE PL   ***********************************

//Bourgogne Franche Comté
$tableauBFC = array(110171, 110172, 110181, 110182,  110191, 110192);
//Bretagne
$tableauBRE = array(120171, 120181, 120191, 120192, 120193);
//Centre Val de Loire
$tableauCVL = array(130171, 130181, 130191, 130192);
//Hauts De France
$tableauHDF = array(160171, 160181, 160185, 160191);
//Pays De la Loire
$tableauPDL = array(210171, 210181, 210191);

//*************   TABLE IDF   *************************

//Grand ESt
$tableauGES = array(150171, 150181, 150182, 150191, 150192, 150193);
//Ile De France
$tableauIDF = array(170171, 170172, 170181, 170182, 170183, 170191, 170192, 170193, 170194);
// Normandi
$tableauNOR = array(180171, 180181, 180191, 180192, 180193);
// Provence alpes Cotes d'Azur
$tableauPCA = array(220171, 220181, 220182, 220191, 220192, 220193  );
   
/*****  Mise à jour des bases de données ********/

// liste des lignes a rajouter aux tables bdpffrance, bdpffrance_2 et bdpffrance_dates
// pour chaque nouvelle saison.

$tabId = array(110, 115, 120, 130, 135, 140, 150, 160, 170, 180, 190,
								   240, 250, 260, 270,
									280, 285, 290);
									
?>