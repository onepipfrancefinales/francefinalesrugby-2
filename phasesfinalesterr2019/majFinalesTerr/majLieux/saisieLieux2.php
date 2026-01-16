<html>
<head>
<title>modification de donn�es en PHP :: partie2</title>
<meta name=viewport content="width=device-width, initial-scale=1">
</head>
<p> 

<?php // ******************   R�cup�ration des variables   ***************** 
 
 $type=$_GET['type']; 
 $annee=$_GET['annee']; 
 $comite=$_GET['comite'];
 $division=$_GET['division'];
  
 // ***************** Test des variables r�cup�r�es ****************
  echo "ligue : ".$comite; echo "<br />";
  echo "type : ".$type; echo "<br />";
  echo "annee : ".$annee; echo "<br />";
  echo "division : ".$division; echo "<br />";
   
   
 require '../../../connect/connexion6.php';  
require ("../../fonctionspfterrESDL2019.php"); 
 $comite_pfterr_ld="php".$comite."_pfterr_ld";
 
 echo $comite_pfterr_ld;
 echo "<br/>"." <br/>";

	//lieux	

	$L8001 = $_POST['L8001'];  	$L8003 = $_POST['L8003'];	$L8005 = $_POST['L8005'];  	$L8007 = $_POST['L8007'];
	$L8009 = $_POST['L8009'];  	$L8011 = $_POST['L8011'];	$L8013 = $_POST['L8013'];  	$L8015 = $_POST['L8015'];
	
	$L4001 = $_POST['L4001'];  	$L4003 = $_POST['L4003'];	$L4005 = $_POST['L4005'];  	$L4007 = $_POST['L4007'];
		
	$L2001 = $_POST['L2001'];  	$L2003 = $_POST['L2003'];		
	$L1001 = $_POST['L1001'];
	
	//Dates
	if (isset($_POST['D8000'])) $D8000 = $_POST['D8000'];else $D8000 = "";	
	if (isset($_POST['D4000'])) $D4000 = $_POST['D4000'];else $D4000 = "";
	if (isset($_POST['D2000'])) $D2000 = $_POST['D2000'];else $D2000 = "";
	if (isset($_POST['D1000'])) $D1000 = $_POST['D1000'];else $D1000 = "";
 
 
echo $D8000; echo "<br />";
echo $D4000; echo "<br />";
echo $D2000; echo "<br />";
echo $D1000; echo "<br />";

		$req = $bdd->prepare("	UPDATE $comite_pfterr_ld
								SET		L8001 =:L8001,	L8003 =:L8003,	L8005 =:L8005,		L8007 =:L8007,
										L8009 =:L8009,	L8011 =:L8011,	L8013 =:L8013,		L8015 =:L8015,
										L4001 =:L4001,	L4003 =:L4003,	L4005 =:L4005,		L4007 =:L4007,
										L2001 =:L2001,	L2003 =:L2003,	L1001 =:L1001,
										
										D8000 =:D8000,	D4000 =:D4000,	D2000 =:D2000,		D1000 =:D1000
															
								WHERE  division =:division and annee =:annee");

		$req->execute(array('L8001' =>$L8001, 'L8003' =>$L8003,	 'L8005' =>$L8005,	 'L8007' =>$L8007,
		    				'L8009' =>$L8009, 'L8011' =>$L8011,  'L8013' =>$L8013,	 'L8015' =>$L8015,
							'L4001' =>$L4001, 'L4003' =>$L4003,	 'L4005' =>$L4005,	 'L4007' =>$L4007,
							'L2001' =>$L2001, 'L2003' =>$L2003,	 'L1001' =>$L1001,
							
							'D8000' =>$D8000, 'D4000' =>$D4000,	 'D2000' =>$D2000,	 'D1000' =>$D1000, 
						
						'division' => $division, 'annee' => $annee	))	
						
						 or die(print_r($req->errorInfo()))	;

 

    if($req)
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

  </p>

 
  
<p><a href="saisieLieux.php?comite=<?php echo $comite; ?>&type=<?php echo $type; ?>&annee=<?php echo $annee; ?>&division=<?php echo $division; ?>">Retour 
  Modification meme comite</a>
<p>&nbsp;
<p>&nbsp; 
<p><a href="/phasesfinalesterr2019/majFinalesTerr/accueilMAJ.php?annee=<?php echo $annee; ?>">Retour accueil</a> 
<p>&nbsp;

</html>