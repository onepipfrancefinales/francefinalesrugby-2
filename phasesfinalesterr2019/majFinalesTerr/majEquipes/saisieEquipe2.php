<html>
<head>
<title>modification de données en PHP :: partie2</title>
<meta name=viewport content="width=device-width, initial-scale=1">
</head>
<p> 
  <?php  		
$division = $_GET["division"] ;
$type = $_GET["type"] ;
$comite = $_GET["comite"]; 
$annee = $_GET["annee"]; 
$bdcomite_pfterr_e = "php".''.$comite.''."_pfterr_e"; 


//$comite = "php".''.$comite;
echo $annee; echo "<br />";
echo $division;  echo "<br />";
echo $comite; echo "<br />";
echo $type;echo "<br />";
echo $bdcomite_pfterr_e;echo "<br />";
echo "<br>";
require ("../../../connect/connexion6.php");
				
//finale
if (isset ($_POST['clubA1001'])) $clubA1001 = $_POST['clubA1001']; else $clubA1001='0';
if (isset ($_POST['clubA1002'])) $clubA1002 = $_POST['clubA1002']; else $clubA1002='0';

//demi
if (isset ($_POST['clubA2001'])) $clubA2001 = $_POST['clubA2001']; else $clubA2001='0';
if (isset ($_POST['clubA2002'])) $clubA2002 = $_POST['clubA2002']; else $clubA2002='0';
if (isset ($_POST['clubA2003'])) $clubA2003 = $_POST['clubA2003']; else $clubA2003='0';
if (isset ($_POST['clubA2004'])) $clubA2004 = $_POST['clubA2004']; else $clubA2004='0';

//quarts
if (isset ($_POST['clubA4001'])) $clubA4001 = $_POST['clubA4001']; else $clubA4001='0';
if (isset ($_POST['clubA4002'])) $clubA4002 = $_POST['clubA4002']; else $clubA4002='0';
if (isset ($_POST['clubA4003'])) $clubA4003 = $_POST['clubA4003']; else $clubA4003='0';
if (isset ($_POST['clubA4004'])) $clubA4004 = $_POST['clubA4004']; else $clubA4004='0';
if (isset ($_POST['clubA4005'])) $clubA4005 = $_POST['clubA4005']; else $clubA4005='0';
if (isset ($_POST['clubA4006'])) $clubA4006 = $_POST['clubA4006']; else $clubA4006='0';
if (isset ($_POST['clubA4007'])) $clubA4007 = $_POST['clubA4007']; else $clubA4007='0';
if (isset ($_POST['clubA4008'])) $clubA4008 = $_POST['clubA4008']; else $clubA4008='0';

//Huiti�me
if (isset ($_POST['clubA8001'])) $clubA8001 = $_POST['clubA8001']; else $clubA8001='0';
if (isset ($_POST['clubA8002'])) $clubA8002 = $_POST['clubA8002']; else $clubA8002='0';
if (isset ($_POST['clubA8003'])) $clubA8003 = $_POST['clubA8003']; else $clubA8003='0';
if (isset ($_POST['clubA8004'])) $clubA8004 = $_POST['clubA8004']; else $clubA8004='0';
if (isset ($_POST['clubA8005'])) $clubA8005 = $_POST['clubA8005']; else $clubA8005='0';
if (isset ($_POST['clubA8006'])) $clubA8006 = $_POST['clubA8006']; else $clubA8006='0';
if (isset ($_POST['clubA8007'])) $clubA8007 = $_POST['clubA8007']; else $clubA8007='0';
if (isset ($_POST['clubA8008'])) $clubA8008 = $_POST['clubA8008']; else $clubA8008='0';


if (isset ($_POST['clubA8009'])) $clubA8009 = $_POST['clubA8009']; else $clubA8009='0';
if (isset ($_POST['clubA8010'])) $clubA8010 = $_POST['clubA8010']; else $clubA8010='0';
if (isset ($_POST['clubA8011'])) $clubA8011 = $_POST['clubA8011']; else $clubA8011='0';
if (isset ($_POST['clubA8012'])) $clubA8012 = $_POST['clubA8012']; else $clubA8012='0';
if (isset ($_POST['clubA8013'])) $clubA8013 = $_POST['clubA8013']; else $clubA8013='0';
if (isset ($_POST['clubA8014'])) $clubA8014 = $_POST['clubA8014']; else $clubA8014='0';
if (isset ($_POST['clubA8015'])) $clubA8015 = $_POST['clubA8015']; else $clubA8015='0';
if (isset ($_POST['clubA8016'])) $clubA8016 = $_POST['clubA8016']; else $clubA8016='0';
 
//Seizi�me
/*
for ($i = 1601; $i > 1633; $i++)
{if (isset ($_POST['"clubA".($i)'])) ${"clubA".($i)} = $_POST['clubA.($i)']; else ${"clubA".($i)}='0';}
*/

if (isset ($_POST['clubA1601'])) $clubA1601 = $_POST['clubA1601']; else $clubA1601='0';
if (isset ($_POST['clubA1602'])) $clubA1602 = $_POST['clubA1602']; else $clubA1602='0';
if (isset ($_POST['clubA1603'])) $clubA1603 = $_POST['clubA1603']; else $clubA1603='0';
if (isset ($_POST['clubA1604'])) $clubA1604 = $_POST['clubA1604']; else $clubA1604='0';
if (isset ($_POST['clubA1605'])) $clubA1605 = $_POST['clubA1605']; else $clubA1605='0';
if (isset ($_POST['clubA1606'])) $clubA1606 = $_POST['clubA1606']; else $clubA1606='0';
if (isset ($_POST['clubA1607'])) $clubA1607 = $_POST['clubA1607']; else $clubA1607='0';
if (isset ($_POST['clubA1608'])) $clubA1608 = $_POST['clubA1608']; else $clubA1608='0';

if (isset ($_POST['clubA1609'])) $clubA1609 = $_POST['clubA1609']; else $clubA1609='0';
if (isset ($_POST['clubA1610'])) $clubA1610 = $_POST['clubA1610']; else $clubA1610='0';
if (isset ($_POST['clubA1611'])) $clubA1611 = $_POST['clubA1611']; else $clubA1611='0';
if (isset ($_POST['clubA1612'])) $clubA1612 = $_POST['clubA1612']; else $clubA1612='0';
if (isset ($_POST['clubA1613'])) $clubA1613 = $_POST['clubA1613']; else $clubA1613='0';
if (isset ($_POST['clubA1614'])) $clubA1614 = $_POST['clubA1614']; else $clubA1614='0';
if (isset ($_POST['clubA1615'])) $clubA1615 = $_POST['clubA1615']; else $clubA1615='0';
if (isset ($_POST['clubA1616'])) $clubA1616 = $_POST['clubA1616']; else $clubA1616='0';

if (isset ($_POST['clubA1617'])) $clubA1617 = $_POST['clubA1617']; else $clubA1617='0';
if (isset ($_POST['clubA1618'])) $clubA1618 = $_POST['clubA1618']; else $clubA1618='0';
if (isset ($_POST['clubA1619'])) $clubA1619 = $_POST['clubA1619']; else $clubA1619='0';
if (isset ($_POST['clubA1620'])) $clubA1620 = $_POST['clubA1620']; else $clubA1620='0';
if (isset ($_POST['clubA1621'])) $clubA1621 = $_POST['clubA1621']; else $clubA1621='0';
if (isset ($_POST['clubA1622'])) $clubA1622 = $_POST['clubA1622']; else $clubA1622='0';
if (isset ($_POST['clubA1623'])) $clubA1623 = $_POST['clubA1623']; else $clubA1623='0';
if (isset ($_POST['clubA1624'])) $clubA1624 = $_POST['clubA1624']; else $clubA1624='0';
if (isset ($_POST['clubA1625'])) $clubA1625 = $_POST['clubA1625']; else $clubA1625='0';
if (isset ($_POST['clubA1626'])) $clubA1626 = $_POST['clubA1626']; else $clubA1626='0';
if (isset ($_POST['clubA1627'])) $clubA1627 = $_POST['clubA1627']; else $clubA1627='0';
if (isset ($_POST['clubA1628'])) $clubA1628 = $_POST['clubA1628']; else $clubA1628='0';
if (isset ($_POST['clubA1629'])) $clubA1629 = $_POST['clubA1629']; else $clubA1629='0';
if (isset ($_POST['clubA1630'])) $clubA1630 = $_POST['clubA1630']; else $clubA1630='0';
if (isset ($_POST['clubA1631'])) $clubA1631 = $_POST['clubA1631']; else $clubA1631='0';
if (isset ($_POST['clubA1632'])) $clubA1632 = $_POST['clubA1632']; else $clubA1632='0';


//Récupération des valeurs des champs Equipes:

//**********  Finale ********************

if ($type==1)
 {
	//verifClubsPresents($comite,'1001' ,'1002', $bdd);
	$requete = $bdd->prepare("UPDATE $bdcomite_pfterr_e
						SET	type =:type,	clubA1001 =:clubA1001,	clubA1002 =:clubA1002
							
						WHERE  division =:division and annee=:annee");

	$requete->execute(array('type' =>$type,'clubA1001' =>$clubA1001,'clubA1002' =>$clubA1002,
						
						'division' => $division, 'annee' => $annee	))	
						
						 or die(print_r($requete->errorInfo()))	;
 }
		
//************** Demi finale ********************************						
					
if ($type==2 OR $type==3)
 {
	//verifClubsPresents($comite,'2001' ,'2004', $bdd);
	$requete = $bdd->prepare("UPDATE $bdcomite_pfterr_e
						SET	type =:type,	clubA2001 =:clubA2001,	clubA2002 =:clubA2002,
											clubA2003 =:clubA2003,	clubA2004 =:clubA2004
						WHERE  division =:division and annee=:annee");

	$requete->execute(array('type' =>$type	,'clubA2001' =>$clubA2001,'clubA2002' =>$clubA2002,
										 'clubA2003' =>$clubA2003,'clubA2004' =>$clubA2004,
						'division' => $division, 'annee' => $annee	))	
						or die(print_r($requete->errorInfo()))	;	
 
 }

//************** Quarts de finale ********************************
elseif ($type==14 OR $type==15)
 {	
	//verifClubsPresents($comite,'4001' ,'4008', $bdd);
	//for ($i=4001; $i<4009 ; $i ++)	
	//	{echo ${"clubA".($i)}."<br />";}
				
	$requete = $bdd->prepare("
			UPDATE $bdcomite_pfterr_e
			SET	type =:type,	clubA4001 =:clubA4001,	clubA4002 =:clubA4002,
								clubA4003 =:clubA4003,	clubA4004 =:clubA4004,
								clubA4005 =:clubA4005,	clubA4006 =:clubA4006,
								clubA4007 =:clubA4007,	clubA4008 =:clubA4008			
			WHERE  division =:division and annee=:annee");

	 $requete->execute(array('type' =>$type	,
					'clubA4001' =>$clubA4001,'clubA4002' =>$clubA4002,
					'clubA4003' =>$clubA4003,'clubA4004' =>$clubA4004,
					'clubA4005' =>$clubA4005,'clubA4006' =>$clubA4006,
					'clubA4007' =>$clubA4007,'clubA4008' =>$clubA4008,
					'division' => $division, 'annee' => $annee	))		
					or die(print_r($requete->errorInfo()))	;
 }

//********** Quarts de finale avec 8 barragistes ********************
elseif ($type==13)
 {
//	verifClubsPresents($comite,'1601' ,'1608', $bdd);
//	verifClubsPresents($comite,'4001' ,'4001', $bdd);
//	verifClubsPresents($comite,'4003' ,'4003', $bdd);
//	verifClubsPresents($comite,'4005' ,'4005', $bdd);
//	verifClubsPresents($comite,'4007' ,'4007', $bdd);
		
	$requete = $bdd->prepare("UPDATE $bdcomite_pfterr_e
						SET	type =:type,	clubA1601 =:clubA1601,	clubA1602 =:clubA1602,
											clubA1603 =:clubA1603,	clubA1604 =:clubA1604,
											clubA1605 =:clubA1605,	clubA1606 =:clubA1606,
											clubA1607 =:clubA1607,	clubA1608 =:clubA1608,	
											
											clubA4001 =:clubA4001,	clubA4003 =:clubA4003,
											clubA4005 =:clubA4005,	clubA4007 =:clubA4007
						WHERE  division =:division and annee=:annee");

	$requete->execute(array('type' =>$type	,'clubA1601' =>$clubA1601,'clubA1602' =>$clubA1602,
											 'clubA1603' =>$clubA1603,'clubA1604' =>$clubA1604,
											 'clubA1605' =>$clubA1605,'clubA1606' =>$clubA1606,
											 'clubA1607' =>$clubA1607,'clubA1608' =>$clubA1608,
		
											 'clubA4001' =>$clubA4001,'clubA4003' =>$clubA4003,
											 'clubA4005' =>$clubA4005,'clubA4007' =>$clubA4007,
						'division' => $division, 'annee' => $annee	))	
						 or die(print_r($requete->errorInfo()))	;
 }
		 	 
//********** Huiti�me  de finale  (18) ********************

elseif ($type==18 or $type==19)
 {
		verifClubsPresents($comite,'8001' ,'8016', $bdd);
		
		$requete = $bdd->prepare("	UPDATE $bdcomite_pfterr_e
								SET	type =:type,	clubA8001 =:clubA8001,	clubA8002 =:clubA8002,
													clubA8003 =:clubA8003,	clubA8004 =:clubA8004,
													clubA8005 =:clubA8005,	clubA8006 =:clubA8006,
													clubA8007 =:clubA8007,	clubA8008 =:clubA8008,
											
													clubA8009 =:clubA8009,	clubA8010 =:clubA8010,
													clubA8011 =:clubA8011,	clubA8012 =:clubA8012,
													clubA8013 =:clubA8013,	clubA8014 =:clubA8014,
													clubA8015 =:clubA8015,	clubA8016 =:clubA8016
															
								WHERE  division =:division and annee =:annee");

		$requete->execute(array('type' =>$type	,'clubA8001' =>$clubA8001,'clubA8002' =>$clubA8002,
											 'clubA8003' =>$clubA8003,'clubA8004' =>$clubA8004,
											 'clubA8005' =>$clubA8005,'clubA8006' =>$clubA8006,
											 'clubA8007' =>$clubA8007,'clubA8008' =>$clubA8008,
		
											 'clubA8009' =>$clubA8009,'clubA8010' =>$clubA8010,
											 'clubA8011' =>$clubA8011,'clubA8012' =>$clubA8012,
											 'clubA8013' =>$clubA8013,'clubA8014' =>$clubA8014,
											 'clubA8015' =>$clubA8015,'clubA8016' =>$clubA8016,
		
						'division' => $division, 'annee' => $annee	))	
						
						 or die(print_r($requete->errorInfo()))	;

 }		 

//********** Huiti�me  de finale avec 8 barragistes  (17)  ********************

elseif ($type==17)
		{
		echo $clubA8016; echo $clubA8016;
	//	verifClubsPresents($comite,'1601' ,'1608', $bdd);
	//	verifClubsPresents($comite,'8001' ,'8016', $bdd);
	/*	for ($i=1601; $i<1609 ; $i ++)	
			{	
			echo ${"clubA".($i)};echo "<br />";
			}
		echo "<br />";
		for ($i=8001; $i<8017 ; $i ++)	
			{	
			echo ${"clubA".($i)}; echo ${"id".($i)};echo "<br />";
			}
	*/		
			
	$requete = $bdd->prepare("	UPDATE $bdcomite_pfterr_e
								SET	type =:type,	clubA1601 =:clubA1601,	clubA1602 =:clubA1602,
													clubA1603 =:clubA1603,	clubA1604 =:clubA1604,
													clubA1605 =:clubA1605,	clubA1606 =:clubA1606,
													clubA1607 =:clubA1607,	clubA1608 =:clubA1608,

													clubA8001 =:clubA8001,	clubA8002 =:clubA8002,
													clubA8003 =:clubA8003,	clubA8004 =:clubA8004,
													clubA8005 =:clubA8005,	clubA8006 =:clubA8006,
													clubA8007 =:clubA8007,	clubA8008 =:clubA8008,
											
													clubA8009 =:clubA8009,	clubA8010 =:clubA8010,
													clubA8011 =:clubA8011,	clubA8012 =:clubA8012,
													clubA8013 =:clubA8013,	clubA8014 =:clubA8014,
													clubA8015 =:clubA8015,	clubA8016 =:clubA8016
															
								WHERE  division =:division and annee =:annee");

	$requete->execute(array('type' =>$type	,'clubA1601' =>$clubA1601,'clubA1602' =>$clubA1602,
											 'clubA1603' =>$clubA1603,'clubA1604' =>$clubA1604,
											 'clubA1605' =>$clubA1605,'clubA1606' =>$clubA1606,
											 'clubA1607' =>$clubA1607,'clubA1608' =>$clubA1608,
		
											 'clubA8001' =>$clubA8001,'clubA8002' =>$clubA8002,
											 'clubA8003' =>$clubA8003,'clubA8004' =>$clubA8004,
											 'clubA8005' =>$clubA8005,'clubA8006' =>$clubA8006,
											 'clubA8007' =>$clubA8007,'clubA8008' =>$clubA8008,
		
											 'clubA8009' =>$clubA8009,'clubA8010' =>$clubA8010,
											 'clubA8011' =>$clubA8011,'clubA8012' =>$clubA8012,
											 'clubA8013' =>$clubA8013,'clubA8014' =>$clubA8014,
											 'clubA8015' =>$clubA8015,'clubA8016' =>$clubA8016,
		
						'division' => $division, 'annee' => $annee	))	
						 or die(print_r($requete->errorInfo()))	;
 }
 
//********** Seizieme finale (16) ********************		 
elseif ($type==16)
 {
  for ($i = 1601; $i < 1633; $i++)
		{if (${"clubA".($i)}=="-") ${"clubA".($i)}= 0;}	
	
	//verifClubsPresents($comite,'1601' ,'1632', $bdd);
	
  $requete=$bdd->exec("UPDATE $bdcomite_pfterr_e
    	    SET  clubA1601='$clubA1601', clubA1602='$clubA1602', clubA1603='$clubA1603', clubA1604='$clubA1604',	
				 clubA1605='$clubA1605', clubA1606='$clubA1606', clubA1607='$clubA1607', clubA1608='$clubA1608',	
				 clubA1609='$clubA1609', clubA1610='$clubA1610', clubA1611='$clubA1611', clubA1612='$clubA1612',	
				 clubA1613='$clubA1613', clubA1614='$clubA1614', clubA1615='$clubA1615', clubA1616='$clubA1616',
				 
				 clubA1617='$clubA1617', clubA1618='$clubA1618', clubA1619='$clubA1619', clubA1620='$clubA1620',	
				 clubA1621='$clubA1621', clubA1622='$clubA1622', clubA1623='$clubA1623', clubA1624='$clubA1624',	
				 clubA1625='$clubA1625', clubA1626='$clubA1626', clubA1627='$clubA1627', clubA1628='$clubA1628',	
				 clubA1629='$clubA1629', clubA1630='$clubA1630', clubA1631='$clubA1631', clubA1632='$clubA1632'
	
		  	WHERE division = '$division' and annee='$annee' " );
	
 }
 
// résultat de la requ�te		 	
	if($requete)
		{echo("La modification type".' '.$type.' '."a été correctement effectuée");}
	else
		{echo("La modification a échoué") ;}


function verifClubsPresents($comite ,$debut ,$fin, $bdd)
{	
 for ($i = $debut; $i <= $fin; $i++)
 {	
	global ${'clubA'.$i};
	$test= ${'clubA'.$i};

	 $bddComite_clubs ="php".$comite."_clubs";
	
	$reponse = $bdd->query("SELECT COUNT(id)
				FROM $bddComite_clubs
				WHERE  id = '$test' ");		
				$donnees = $reponse->fetch();
				
    $idPresent = $donnees[0];				
	if ( $idPresent == 0)
	{
	echo "L équipe ".$test." n'est pas présente dans la table php_clubs"."<br />" ;
	${'clubA'.$i} ='99999';
	
	}
  }
}




?>
 
  </p>
<p> 
 
<?php echo "<a href=/phasesfinalesterr2019/majFinalesTerr/majEquipes/saisieEquipe.php?comite=$comite&annee=$annee ;> Retour m&ecirc;me comité</a>" ; ?>


<p>
<p>
<p>
<p><a href="../../accueilMAJ.php">accueil </a> 
</html>