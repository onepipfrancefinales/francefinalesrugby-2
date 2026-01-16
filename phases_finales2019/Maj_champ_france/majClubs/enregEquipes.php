<html>
<head>
<title>modification de donn�es en PHP :: partie2</title>
<meta name=viewport content="width=device-width, initial-scale=1">
</head>
<p> 
<?php  		
$division = $_GET["division"] ;
$type = $_GET["type"] ;
$annee = $_GET["annee"]; 

echo "Annee : ".$annee; echo "<br />";
echo "Division : ". $division;  echo "<br />";
echo "Type : ".$type;echo "<br />";

 
require ("../../../connect/connexion1.php");
//$bdpfAnnee = "bdpf".$annee;


//********** Barrages ********************		 
if (substr($division,0,1)==7)	{	
echo" azerty";
	echo  "test".$clubA3201;echo  "test".$clubA3202;echo  "test".$clubA3203;echo  "test".$clubA3204;
	echo  "test".$clubA6401;echo  "test".$club64202;echo  "test".$clubA6403;echo  "test".$clubA6404;
	echo "<br>";echo "<br>";
	echo  $tabClubs[0]; echo  $tabClubs[1];
	
	for ($i=1; $i<10; $i++)
		{ 
		$clubA="clubA320".$i;
		if (isset($_POST[$clubA]))  ${"clubA32".($i)}= $_POST[$clubA];else   ${"clubA320".($i)} ="-";
		}
	for ($i=10; $i<65; $i++)
		{ 
		$clubA="clubA32".$i;
		if (isset($_POST[$clubA]))   ${"clubA32".($i)} = $_POST[$clubA];else   ${"clubA32".($i)} ="-";
		}

	$requete=$bdd->exec("	UPDATE bdpffrance
            		SET  E01='$clubA3201', E02='$clubA3202', E03='$clubA3203', E04='$clubA3204',
						 E05='$clubA3205', E06='$clubA3206', E07='$clubA3207', E08='$clubA3208',
						 E09='$clubA3209', E10='$clubA3210', E11='$clubA3211', E12='$clubA3212',
						 E13='$clubA3213', E14='$clubA3214', E15='$clubA3215', E16='$clubA3216'
						 
						 
					/*	 
						 ,
						 
						 E17='$clubA6417', E18='$clubA6418', E19='$clubA6419', E20='$clubA6420',
						 E21='$clubA6421', E22='$clubA6422', E23='$clubA6423', E24='$clubA6424',
						 E25='$clubA6425', E26='$clubA6426', E27='$clubA6427', E28='$clubA6428',
						 E29='$clubA6429', E30='$clubA6430', E31='$clubA6431', E32='$clubA6432',
						 
						 E33='$clubA6433', E34='$clubA6434', E35='$clubA6435', E36='$clubA6436',
						 E37='$clubA6437', E38='$clubA6438', E39='$clubA6439', E40='$clubA6440',
						 E41='$clubA6441', E42='$clubA6442', E43='$clubA6443', E44='$clubA6444',
						 E45='$clubA6445', E46='$clubA6446', E47='$clubA6447', E48='$clubA6448',
						 
						 E49='$clubA6449', E50='$clubA6450', E51='$clubA6451', E52='$clubA6452',
						 E53='$clubA6453', E54='$clubA6454', E55='$clubA6455', E56='$clubA6456',
						 E57='$clubA6457', E58='$clubA6458', E59='$clubA6459', E60='$clubA6460',
						 E61='$clubA6461', E62='$clubA6462', E63='$clubA6463', E64='$clubA6464'
	*/
					WHERE id = '$division' and saison = '$annee'");			
	
echo "tesst2";

}


//********** 32me de finale (32) ********************		 
if (substr ($type,1,2) == '32' or substr ($type,1,2) == '64')
	{	
	for ($i=1; $i<10; $i++)
		{ 
		$clubA ="clubA320".$i;
		if (isset($_POST[$clubA]))   ${"clubA320".($i)} = $_POST[$clubA];else   ${"clubA320".($i)} ="-";
		}
	for ($i=10; $i<65; $i++)
		{ 
		$clubA="clubA32".$i;
		if (isset($_POST[$clubA]))   ${"clubA32".($i)} = $_POST[$clubA];else   ${"clubA32".($i)} ="-";
		}

	$requete=$bdd->exec("	UPDATE bdpffrance
            		SET  E01='$clubA3201', E02='$clubA3202', E03='$clubA3203', E04='$clubA3204',
						 E05='$clubA3205', E06='$clubA3206', E07='$clubA3207', E08='$clubA3208',
						 E09='$clubA3209', E10='$clubA3210', E11='$clubA3211', E12='$clubA3212',
						 E13='$clubA3213', E14='$clubA3214', E15='$clubA3215', E16='$clubA3216',
						 
						 E17='$clubA3217', E18='$clubA3218', E19='$clubA3219', E20='$clubA3220',
						 E21='$clubA3221', E22='$clubA3222', E23='$clubA3223', E24='$clubA3224',
						 E25='$clubA3225', E26='$clubA3226', E27='$clubA3227', E28='$clubA3228',
						 E29='$clubA3229', E30='$clubA3230', E31='$clubA3231', E32='$clubA3232',
						 
						 E33='$clubA3233', E34='$clubA3234', E35='$clubA3235', E36='$clubA3236',
						 E37='$clubA3237', E38='$clubA3238', E39='$clubA3239', E40='$clubA3240',
						 E41='$clubA3241', E42='$clubA3242', E43='$clubA3243', E44='$clubA3244',
						 E45='$clubA3245', E46='$clubA3246', E47='$clubA3247', E48='$clubA3248',
						 
						 E49='$clubA3249', E50='$clubA3250', E51='$clubA3251', E52='$clubA3252',
						 E53='$clubA3253', E54='$clubA3254', E55='$clubA3255', E56='$clubA3256',
						 E57='$clubA3257', E58='$clubA3258', E59='$clubA3259', E60='$clubA3260',
						 E61='$clubA3261', E62='$clubA3262', E63='$clubA3263', E64='$clubA3264'
	
					WHERE id = '$division' and saison = '$annee'");			
	}

//********** Seizieme finale (16) ********************		 
elseif (substr ($type,3,2) == '16' OR substr ($type,3,2) == '32')

	{
		if (isset($_POST['A1601']))   $A1601 = $_POST['A1601'];else   $A1601 ="-";
		if (isset($_POST['A1602']))   $A1602 = $_POST['A1602'];else   $A1602 ="-";
		//echo $A1601;echo $A1602;
	for ($i=1; $i<10; $i++)
		{ 
		$clubA="clubA160".$i;
		if (isset($_POST[$clubA]))   ${"clubA160".($i)} = $_POST[$clubA];else   ${"clubA160".($i)} ="-";
		}
	for ($i=10; $i<33; $i++)
		{ 
		$clubA="clubA16".$i;
		if (isset($_POST[$clubA]))   ${"clubA16".($i)} = $_POST[$clubA];else   ${"clubA16".($i)} ="-";
		}

	$requete=$bdd->exec("	UPDATE bdpffrance
            		SET  E01='$clubA1601', E02='$clubA1602', E03='$clubA1603', E04='$clubA1604',
						 E05='$clubA1605', E06='$clubA1606', E07='$clubA1607', E08='$clubA1608',
						 E09='$clubA1609', E10='$clubA1610', E11='$clubA1611', E12='$clubA1612',
						 E13='$clubA1613', E14='$clubA1614', E15='$clubA1615', E16='$clubA1616',
						 
						 E17='$clubA1617', E18='$clubA1618', E19='$clubA1619', E20='$clubA1620',
						 E21='$clubA1621', E22='$clubA1622', E23='$clubA1623', E24='$clubA1624',
						 E25='$clubA1625', E26='$clubA1626', E27='$clubA1627', E28='$clubA1628',
						 E29='$clubA1629', E30='$clubA1630', E31='$clubA1631', E32='$clubA1632'
							
					WHERE id = '$division' and saison = '$annee'" );
	
	}		 

//********** Huitième  de finale   ********************
elseif (substr ($type,5,2) == '08' OR substr ($type,5,2) == '16')
	{
		if (isset($clubA8001)) $clubA8001=$clubA8001;else $clubA8001="--";echo $clubA8001;
for ($i=1; $i<10; $i++)
		{ 
		$clubA="clubA800".$i;
		if (isset($_POST[$clubA]))   ${"clubA800".($i)} = $_POST[$clubA];else   ${"clubA800".($i)} ="-";
		
		//echo $clubA;
		}
	for ($i=10; $i<17; $i++)
		{ 
		$clubA="clubA80".$i;
		if (isset($_POST[$clubA]))   ${"clubA80".($i)} = $_POST[$clubA];else   ${"clubA80".($i)} ="-";
		}
		//echo $clubA8001;
	 $requete=$bdd->exec("UPDATE bdpffrance
            		SET  E01='$clubA8001', E02='$clubA8002', E03='$clubA8003', E04='$clubA8004',
						 E05='$clubA8005', E06='$clubA8006', E07='$clubA8007', E08='$clubA8008',
						 E09='$clubA8009', E10='$clubA8010', E11='$clubA8011', E12='$clubA8012',
						 E13='$clubA8013', E14='$clubA8014', E15='$clubA8015', E16='$clubA8016'
					WHERE id = '$division' and saison = '$annee'" );	
	}		 

//************** Quarts de finale ********************************
elseif (substr ($type,7,2) == '04' OR substr ($type,7,2) == '08')
	{		
	for ($i=1; $i<9; $i++)
		{ 
		$clubA="clubA400".$i;
		if (isset($_POST[$clubA]))   ${"clubA400".($i)} = $_POST[$clubA];else   ${"clubA400".($i)} ="-";
		}

	 $requete=$bdd->exec("UPDATE bdpffrance
            		SET   E01='$clubA4001', E02='$clubA4002', E03='$clubA4003', E04='$clubA4004',
						  E05='$clubA4005', E06='$clubA4006', E07='$clubA4007', E08='$clubA4008'
					WHERE id = '$division' and saison = '$annee'" );
	}

//************** Demi finale ********************************						
elseif (substr ($type,9,2) == '02' OR substr ($type,9,2) == '22' OR substr ($type,9,2) == '42' OR substr ($type,9,2) == '41')					

	{	
	if (isset ($_POST['clubA2001'])) $clubA2001 = $_POST['clubA2001']; else $clubA2001="-";
	if (isset ($_POST['clubA2002'])) $clubA2002 = $_POST['clubA2002']; else $clubA2002="-";
	if (isset ($_POST['clubA2003'])) $clubA2003 = $_POST['clubA2003']; else $clubA2003="-";
	if (isset ($_POST['clubA2004'])) $clubA2004 = $_POST['clubA2004']; else $clubA2004="-";

	$requete=$bdd->exec("UPDATE bdpffrance
						 SET E01='$clubA2001', E02='$clubA2002',E03='$clubA2003', E04='$clubA2004'
						 WHERE id = '$division' and saison = '$annee'");
	}

//**********  Finale ********************
elseif (substr ($type,10,1) == '1' OR substr ($type,10,1) == '2')

   {
    echo "finale";	
  
	if (isset ($_POST['clubA1001'])) $clubA1001 = $_POST['clubA1001']; else $clubA1001="-";
	if (isset ($_POST['clubA1002'])) $clubA1002 = $_POST['clubA1002']; else $clubA1002="-";

	$requete=$bdd->exec(" UPDATE bdpffrance
						  SET  E01='$clubA1001', E02='$clubA1002'
						  WHERE id= '$division' and saison = '$annee'") ;	
	
	echo $clubA1001.' - '.$clubA1002;
	}
			
/* Message de suivi du traitement */
echo "<br />";
if($requete)
	{
	 echo("La modification (".$division.") a été correctement effectuée");
	 echo "<br />";
	}
else
	{
	 echo("La modification (".$division.") a échoué") ;
	 echo "<br />";
	}

?>

<p></p>
  
<p><a href="../majClubs/saisieEquipe.php?type=<?php echo $type; ?>&annee=<?php echo $annee; ?>&division=<?php echo $division; ?>">Retour 
  Modification meme comite</a>
<p>&nbsp;
<p>&nbsp; 
<p><a href="../accueilMAJ.php?annee=<?php echo $annee; ?>">Retour accueil</a> 
<p>&nbsp;

</html>