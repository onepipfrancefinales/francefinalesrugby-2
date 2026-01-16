<?php
$annee=2019;

echo "<br />";	
echo "<br />";	
echo "<br />";	
echo "*********************Seniors *************************";
echo "<br />";	

  require '../../connect1/connection1.php';
  require ("../../phases_finales2019/fonctionsChampFrance2019.php"); 


//**************     SENIORS    *****************************
//for ($division =110; $division<280	; $division = $division+10)
//{

$division =120;
trenteDeuxieme2019 ($division, $annee, $bdd);
	
echo $division;

$reponse = $bdd->query("SELECT id, sigleComite
						FROM bdclubs2019
						WHERE nom_1 = '$clubAB1001' ");
									while ($row = $reponse->fetch() )
												{ 
												$id1 = $row[0];
												$ligue1= $row[1];
												}
												
$reponse = $bdd->query("SELECT id, sigleComite
						FROM bdclubs2019
						WHERE nom_1 ='$clubAB1002' ");
									while ($row = $reponse->fetch() )
												{ 
												$id2 = $row[0];
												$ligue2= $row[1];
												}
												
												
$reponse = $bdd->query("SELECT division
						FROM bddivisions
						WHERE id ='$division' ");
									while ($row = $reponse->fetch() )
												{ 
												$nomDivision = $row[0];
												
												}												
												


												
												
												
if ($A1001 > $A1002)
	{
		
	$clubChampion=$clubAB1001;
	$comiteChamp=$ligue1;
	$scoreFinale1=$A1001;
	$clubViceChampion=$clubAB1002;
	$comiteVice=$ligue2;
	$scoreFinale2=$A1002;
	}
	else
	{
	$clubChampion=$clubAB1002;
	$comiteChamp=$ligue2;
	$scoreFinale1=$A1002;
	$clubViceChampion=$clubAB1001;
	$comiteVice=$ligue1;
	$scoreFinale2=$A1001;
	}
	$id1 =($annee*1000000)+(990*1000)+$division;
	$id2 = $id1 + 1;
	

	
	echo $id1.';'.$annee.';'.$nomDivision.';'."Champion".';'.$clubChampion.';'.$clubChampion.';'.";".$comiteChamp.';'.$clubViceChampion.';'.$comiteVice.';'.$scoreFinale1.';'.$scoreFinale2.''.";de France".';'.$division.';'.$division.''.";A";
	echo "<br />";	
	echo $id2.';'.$annee.';'.$nomDivision.';'."Vice Champion".';'.$clubViceChampion.';'.$clubViceChampion.';'.";".$comiteVice.';'."-".';'."-".';'.$scoreFinale1.';'.$scoreFinale2.';'."de France".';'.$division.''.';'.''.$division.';'."A";
	echo "<br />";	
	echo "<br />";	
	echo "<br />";	
	
	
	echo "**************************************************";
	echo "<br />";		
echo "<br />";	
//}








  
for ($division =110; $division<280	; $division = $division+10)
{
	
	
trenteDeuxieme2019 ($division, $annee, $bdd);
echo "<br />";		
echo $division;
echo "<br />";	

$reponse = $bdd->query("SELECT id, sigleComite
						FROM bdclubs2019
						WHERE nom_1 = '$clubAB1001' ");
									while ($row = $reponse->fetch() )
												{ 
												$id1 = $row[0];
												$ligue1= $row[1];
												}
												
$reponse = $bdd->query("SELECT id, sigleComite
						FROM bdclubs2019
						WHERE nom_1 ='$clubAB1002' ");
									while ($row = $reponse->fetch() )
												{ 
												$id2 = $row[0];
												$ligue2= $row[1];
												}
												
												
$reponse = $bdd->query("SELECT division
						FROM bddivisions
						WHERE id ='$division' ");
									while ($row = $reponse->fetch() )
												{ 
												$nomDivision = $row[0];
												
												}												
												


												
												
												
if ($A1001 > $A1002)
	{
		
	$clubChampion=$clubAB1001;
	$comiteChamp=$ligue1;
	$scoreFinale1=$A1001;
	$clubViceChampion=$clubAB1002;
	$comiteVice=$ligue2;
	$scoreFinale2=$A1002;
	}
	else
	{
	$clubChampion=$clubAB1002;
	$comiteChamp=$ligue2;
	$scoreFinale1=$A1002;
	$clubViceChampion=$clubAB1001;
	$comiteVice=$ligue1;
	$scoreFinale2=$A1001;
	}
	$id1 =($annee*1000000)+(990*1000)+$division;
	$id2 = $id1 + 1;
	

	
	echo $id1.';'.$annee.';'.$nomDivision.';'."Champion".';'.$clubChampion.';'.$clubChampion.';'.";".$comiteChamp.';'.$clubViceChampion.';'.$comiteVice.';'.$scoreFinale1.';'.$scoreFinale2.''.";de France".';'.$division.';'.$division.''.";A";
	echo "<br />";	
	echo $id2.';'.$annee.';'.$nomDivision.';'."Vice Champion".';'.$clubViceChampion.';'.$clubViceChampion.';'.";".$comiteVice.';'."-".';'."-".';'.$scoreFinale1.';'.$scoreFinale2.';'."de France".';'.$division.''.';'.''.$division.';'."A";
	echo "<br />";	
	
	
	
	
	
		

}

echo "<br />";	
echo "<br />";	
echo "<br />";	
echo "*********************Feminines *************************";
echo "<br />";	
//**************     feminines    *****************************
  
for ($division =280; $division<300	; $division = $division+5)
{
	
	
trenteDeuxieme2019 ($division, $annee, $bdd);
	


$reponse = $bdd->query("SELECT id, sigleComite
						FROM bdclubs2019
						WHERE nom_1 = '$clubAB1001' ");
									while ($row = $reponse->fetch() )
												{ 
												$id1 = $row[0];
												$ligue1= $row[1];
												}
												
$reponse = $bdd->query("SELECT id, sigleComite
						FROM bdclubs2019
						WHERE nom_1 ='$clubAB1002' ");
									while ($row = $reponse->fetch() )
												{ 
												$id2 = $row[0];
												$ligue2= $row[1];
												}
												
												
$reponse = $bdd->query("SELECT division
						FROM bddivisions
						WHERE id ='$division' ");
									while ($row = $reponse->fetch() )
												{ 
												$nomDivision = $row[0];
												
												}												
											
if ($A1001 > $A1002)
	{
		
	$clubChampion=$clubAB1001;
	$comiteChamp=$ligue1;
	$scoreFinale1=$A1001;
	$clubViceChampion=$clubAB1002;
	$comiteVice=$ligue2;
	$scoreFinale2=$A1002;
	}
	else
	{
	$clubChampion=$clubAB1002;
	$comiteChamp=$ligue2;
	$scoreFinale1=$A1002;
	$clubViceChampion=$clubAB1001;
	$comiteVice=$ligue1;
	$scoreFinale2=$A1001;
	}
	$id1 =($annee*1000000)+(990*1000)+$division;
	$id2 = $id1 + 1;
	

	
	echo $id1.';'.$annee.';'.$nomDivision.';'."Champion".';'.$clubChampion.';'.$clubChampion.';'.";".$comiteChamp.';'.$clubViceChampion.';'.$comiteVice.';'.$scoreFinale1.';'.$scoreFinale2.''.";de France".';'.$division.';'.$division.''.";A";
	echo "<br />";	
	echo $id2.';'.$annee.';'.$nomDivision.';'."Vice Champion".';'.$clubViceChampion.';'.$clubViceChampion.';'.";".$comiteVice.';'."-".';'."-".';'.$scoreFinale1.';'.$scoreFinale2.';'."de France".';'.$division.''.';'.''.$division.';'."A";
	echo "<br />";	

}
echo "<br />";	
echo "<br />";	
echo "<br />";	
echo "*********************Jeunes *************************";
echo "<br />";	
//**************     Jeunes    *****************************
  
for ($division =320; $division<370	; $division = $division+10)
{
	
trenteDeuxieme2019 ($division, $annee, $bdd);
	
$reponse = $bdd->query("SELECT id, sigleComite
						FROM bdclubs2019
						WHERE nom_1 = '$clubAB1001' ");
									while ($row = $reponse->fetch() )
												{ 
												$id1 = $row[0];
												$ligue1= $row[1];
												}
												
$reponse = $bdd->query("SELECT id, sigleComite
						FROM bdclubs2019
						WHERE nom_1 ='$clubAB1002' ");
									while ($row = $reponse->fetch() )
												{ 
												$id2 = $row[0];
												$ligue2= $row[1];
												}
																								
$reponse = $bdd->query("SELECT division
						FROM bddivisions
						WHERE id ='$division' ");
									while ($row = $reponse->fetch() )
												{ 
												$nomDivision = $row[0];
												
												}												

																																		
if ($A1001 > $A1002)
	{
		
	$clubChampion=$clubAB1001;
	$comiteChamp=$ligue1;
	$scoreFinale1=$A1001;
	$clubViceChampion=$clubAB1002;
	$comiteVice=$ligue2;
	$scoreFinale2=$A1002;
	}
	else
	{
	$clubChampion=$clubAB1002;
	$comiteChamp=$ligue2;
	$scoreFinale1=$A1002;
	$clubViceChampion=$clubAB1001;
	$comiteVice=$ligue1;
	$scoreFinale2=$A1001;
	}
	$id1 =($annee*1000000)+(990*1000)+$division;
	$id2 = $id1 + 1;
	

echo $id1.';'.$annee.';'.$nomDivision.';'."Champion".';'.$clubChampion.';'.$clubChampion.';'.";".$comiteChamp.';'.$clubViceChampion.';'.$comiteVice.';'.$scoreFinale1.';'.$scoreFinale2.''.";de France".';'.$division.';'.$division.''.";A";
echo "<br />";	
echo $id2.';'.$annee.';'.$nomDivision.';'."Vice Champion".';'.$clubViceChampion.';'.$clubViceChampion.';'.";".$comiteVice.';'."-".';'."-".';'.$scoreFinale1.';'.$scoreFinale2.';'."de France".';'.$division.''.';'.''.$division.';'."A";
echo "<br />";	

}

?>
 
