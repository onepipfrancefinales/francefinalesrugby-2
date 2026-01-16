<a href="accueil.php">retour Accueil </a>
<?php

require 'choixDivision.php';



if (isset($_GET['division'])) $division = $_GET['division'];
echo "Division : ".$division;

//***** SENIORS **********
 $annee=2019;
//$division='210';


	

	
	require '../../connect1/connection1.php';
	require ("../../phases_finales2019/fonctionsChampFrance2019.php"); 
	
	trenteDeuxieme2019 ($division, $annee, $bdd);
	
	?>

<H2>Champion </H2>


	<?php 
	if ($A1001 > $A1002)
	echo $clubAB1001;
	else
	echo $clubAB1002;
	
	
	?>



<H2>Finale </H2>
<br />
	<?php
	$tadId1 = array();
	
	
	
	echo "<br />";
	for ($i=1001,$j=0; $i <=1002, $j <=1; $i++, $j++)
		{
		$reponse = $bdd->query("SELECT id
								FROM bdclubs2019
								WHERE nom_1 = '${"clubAB".$i}' ");
									while ($row = $reponse->fetch() )
												{ 
												$tabId1[] = $row[0].' '.${"clubAB".$i};
												}
			echo $tabId1[$j]."<br />";
		}
	
	

	echo "<br />";
	?>
<H2>Demi finale </H2>
	<?php
if ($A8001 !=="-" and $A8002 !=="-")
	{	
	$tadId2 = array();
	
	
	for ($i=2001,$j=0; $i <=2004, $j <=3; $i++, $j++)
		{
		$reponse = $bdd->query("SELECT id
								FROM bdclubs2019
								WHERE nom_1 = '${"clubAB".$i}' ");
									while ($row = $reponse->fetch() )
												{ 
												$tabId2[] = $row[0].' '.${"clubAB".$i};
												}
		//echo $tabId2[$j]."<br />";
		}
		
		
	$result=array_diff($tabId2,$tabId1);echo "<br />";
	sort ($result);
	print_r ($result);echo "<br />";
	
	
	echo "<br />";
	
	
	for ($i=0; $i<=3; $i++)
	{
	//------- affichage----
	if (isset ($result[$i]))
	echo $result[$i]."<br />";
	}	
		
	
}	
	
	echo "<br />";
	echo "<br />";




//------Quarts de finale----------------------

?>
<H2>Quarts de finale </H2>
<?php

if ($A4001 !=="-" and $A4002 !=="-")
	{	
$tadId4 = array();

for ($i=4001,$j=0; $i <=4008, $j <=7 ; $i++, $j++)
	{
	$reponse = $bdd->query("SELECT id
							FROM bdclubs2019
							WHERE nom_1 = '${"clubAB".$i}' ");
								while ($row = $reponse->fetch() )
											{ 
											$tabId4[] = $row[0].' '.${"clubAB".$i};
											}
		//echo $tabId4[$j].' '.${"clubAB".$i}."<br />";
	}

	$result=array_diff($tabId4,$tabId2);echo "<br />";
	sort ($result);
	print_r ($result);echo "<br />";
	
	echo "<br />";
	
	for ($i=0; $i<=7; $i++)
	{
	//------- affichage----
	if (isset ($result[$i]))
	
	echo $result[$i]."<br />";
	}

}



?>
<H2>Huitieme finale </H2>
	<?php	
	
if ($A8001 !=="-" and $A8002 !=="-")
	{	
	
	$tadId8 = array();
	for ($i=8001,$j=0; $i <=8016, $j <=15 ; $i++, $j++)
		{
		$reponse = $bdd->query("SELECT id
								FROM bdclubs2019
								WHERE nom_1 = '${"clubAB".$i}' ");
									while ($row = $reponse->fetch() )
												{ 
												$tabId8[] = $row[0].' '.${"clubAB".$i};
												
												}
			//echo $tabId8[$j]."<br />";
		}
	$result=array_diff($tabId8,$tabId4);echo "<br />";
	sort ($result);
	print_r ($result);echo "<br />";
	
	echo "<br />";
	
	for ($i=0; $i<=15; $i++)
	{
	if (isset ($result[$i]))
	echo $result[$i]."<br />";
	}		
}		
		
		
	?>
<H2>Seizieme de finale </H2>
	<?php	

	
	if ($A1601 !=="-" and $A1602 !=="-")
	{		
		
	$tadId16 = array();

	for ($i=1601,$j=0; $i <=1632, $j <=31 ; $i++, $j++)
		{
		$reponse = $bdd->query("SELECT id
								FROM bdclubs2019
								WHERE nom_1 = '${"clubAB".$i}' ");
									while ($row = $reponse->fetch() )
												{ 
												$tabId16[] = $row[0].' '.${"clubAB".$i};
												}
		//	echo $tabId16[$j]."<br />";
		}
	
	
	$result=array_diff($tabId16,$tabId8);echo "<br />";
	sort ($result);
	print_r ($result);echo "<br />";
	
	
	echo "<br />";
	
	
	for ($i=0; $i<=31; $i++)
	{
	
	if (isset ($result[$i]))
	echo $result[$i]."<br />";
	}		
	
}	
	
		



?>

<H2>Trente deuxieme de finale </H2>
<?php	


if ($A3201 !=="-" and $A3202 !=="-")
{


$tabId32 = array();


for ($i=3201,$j=0; $i <=3264, $j <=63 ; $i++, $j++)
	{
	$reponse = $bdd->query("SELECT id
								FROM bdclubs2019
								WHERE nom_1 = '${"clubAB".$i}' ");
									while ($row = $reponse->fetch() )
												{ 
												$tabId32[] = $row[0].' '.${"clubAB".$i};
												}
		//	echo $tabId32[$j]."<br />";
	}



	$result=array_diff($tabId32,$tabId16);echo "<br />";
	sort ($result);
	print_r ($result);echo "<br />";


	echo "<br />";


	for ($i=0; $i<=63; $i++)
	{
	if (isset ($result[$i]))
	echo $result[$i]."<br />";
	}	
}	
	

	
?>











 
