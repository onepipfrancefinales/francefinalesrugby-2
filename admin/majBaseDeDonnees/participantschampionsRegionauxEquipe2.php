<a href="accueil.php">retour Accueil<br></a>
<br>
<h1 text-align="center">Mise à jour des tables bdSaison / bdequipe1 / bdequipe2</h1>
<br/>
<?php

$tabLigue = array();
echo "Ligue(s) sélectionnée(s) : "."<br/>";

if (isset($_POST['selection'])){
	if(!empty($_POST['tabLigue'])){
		foreach ($_POST['tabLigue'] as $ligue) {
			
			echo $ligue."<br/>";}
		}
	}

require '../../connect/connexion6.php';
require ("../../phasesfinalesterr2019/fonctionspfterrESDL2019.php"); 

if (isset($type))
	;
else
	$type = 0;	
	$annee = '2024';	

//$tabLigue  = //
//$tabLigue  = array('CVL', 'OCC', 'PDL');	
//$tabLigue  = array('BRE');
//$tabLigue  = array('OCC');	

if (isset($_POST['selection'])){
	if(!empty($_POST['tabLigue'])){
		foreach ($_POST['tabLigue'] as $ligue) {

            $tabDivision2 = array(270, 9180, 9190, 9200);
	foreach ($tabDivision2 as $division2)
	{	
		if ($ligue == "ARA")
			{$division = 10 * 10000 + $division2;	$comite = "au";	$nomLigue = "ARA"; }
		elseif ($ligue == 'NAQ')
			{$division = 19 * 10000 + $division2; $comite = "ca"; $nomLigue = "Nouvelle Aquitaine";}
		elseif ($ligue == 'OCC') 
			{$division = 20 * 10000 + $division2; $comite = "ab";$nomLigue = "Occitanie";}
			
		elseif ($ligue == 'BFC')
			{$division = 11 * 10000 + $division2; $comite = "pl";$nomLigue = "Bourgogne Franche Comté";}
		elseif ($ligue == 'BRE')
			{$division = 12 * 10000 + $division2; $comite = "pl";$nomLigue = "Bretagne";}
		elseif ($ligue == 'CVL')
			{$division = 13 * 10000 + $division2; $comite = "pl";$nomLigue = "Centre Val de Loire";}
		elseif ($ligue == 'HDF')
			{$division = 16 * 10000 + $division2; $comite = "pl";$nomLigue = "Hauts de France";}
		elseif ($ligue == 'PDL')
			{$division = 21 * 10000 + $division2; $comite = "pl";$nomLigue = "Pays de Loire";}

		elseif ($ligue == 'GES')
			{$division = 15 * 10000 + $division2; $comite = "idf";$nomLigue = "Grand Est";}
		elseif ($ligue == 'IDF')
			{$division = 17 * 10000 + $division2; $comite = "idf";$nomLigue = "Ile de France";}
		elseif ($ligue == 'NOR')
			{$division = 18 * 10000 + $division2; $comite = "idf";$nomLigue = "Normandie";}
		elseif ($ligue == 'PCA')
			{$division = 22 * 10000 + $division2; $comite = "idf";$nomLigue = "PCA";}

	 $div = substr($division, -4);
     $terr_annee = "terr_" . $annee;	


	 if ($annee > 2022) {
						if ($div == 270)
							$nomDivision = "Rés Régionale 1";
						elseif ($div == 9180)
							$nomDivision = "Rés Régionale 2";
					
					}
					else
					{
						if ($div == 270)
							$nomDivision = "Rés Honneur";
						elseif ($div == 9180)
							$nomDivision = "Rés Promotion";
						elseif ($div == 9190)
							$nomDivision = "Rés 1re série";
						elseif ($div == 9200)
							$nomDivision = "Rés 2me série";
					}


			$champ = "Champion ".$nomDivision.' ligue '. $nomLigue.' '.$annee;
			$vice ="Vice champion ".$nomDivision.' ligue '. $nomLigue.' '.$annee;
			$f2me = "Demi finaliste champ. ".$nomDivision.' ligue '. $nomLigue.' '.$annee;
			$f4me = "Quart de finale champ. ".$nomDivision.' ligue '. $nomLigue.' '.$annee;
			$f8me = "8me de finale champ. ".$nomDivision.' ligue '. $nomLigue.' '.$annee;
			$f16me = "16me de finale champ. ".$nomDivision.' ligue '. $nomLigue.' '.$annee;
	
	 $id1 =($annee*1000000) + $division;
	 $id2 = $id1 + 1;	
	 $constante = 2;
			
	 //Recherche du type de phase finale
	 $phpComite_pfterr_e = "php".$comite."_pfterr_e";
	 //echo $phpComite_pfterr_e; echo "<br/>";
	
	 require '../../connect/connexion6.php';
	 $reponse = $bdd->query(" SELECT type
					FROM $phpComite_pfterr_e
					WHERE division = $division and annee = $annee");
			while ($row = $reponse->fetch() )
				{ 
				$type = $row[0];
				}

     ?>

		<font color="#FF0000" size="5"><b> 
		<?php
		echo "<br/>";
		echo "-------     ".$ligue.' - '.$division.' '."-----------".''."<br/>";	
		echo "type : ".$type.' -- '.$phpComite_pfterr_e."<br/>";	
							
		?>	
		</b></font>	
				
		<?php

		if ($type == 16 or $type == 17)
				{
		seizieme2019 ($comite, $division, $annee, $bdd);
					
		echo "<br/>";echo "<br/>";			
					
			if (isset($clubA1001))	; else $clubA1001 = "NC";
							if (isset($clubA1002))	; else $clubA1002 = "NC";
							if (isset($A1001))	; else $A1001 = "NC";
							if (isset($A1002))	; else $A1002 = "NC";

					//	echo $id1;echo "<br/>";
		
			require "insertionBdequipe2.php";
	
	/*-----------------------------*/	
	/*
		require '../../connect/connexion1.php';
		$reponse = $bdd->query(" SELECT COUNT(*)
					FROM bdequipe2
					WHERE id = '$id1'");

		$row=$reponse->fetch();
		$cpte= $row[0]; 
		//echo $cpte;
						echo "<br />";


		if ($A1001>$A1002){	
		echo $id1.';'.$annee.';'.$nomDivision.';'.$champ.';'.$clubA1001.';'.$clubA1001.';'.';'.'('.$ligue.')'.';'.$clubA1002.';'.'('.$ligue.")".';'.$A1001.';'.$A1002.';'.$nomLigue.';'.$div.';'.$constante.';'."A";
		echo "<br/>";
		echo $id2 . ';' . $annee . ';' . $nomDivision . ';' . $vice . ';' . $clubA1002 . ';' . $clubA1002 . ';' . ';' . ';' . ';' . '(' . $ligue . ")" . ';' . $A1002 . ';' . $A1001 . ';' . $nomLigue . ';' . $div . ';' . $constante . ';' . "A";
		
	
			$ligueP = "(" . $ligue . ")";		
			

		if ($cpte == 1){

		$bdd->exec("UPDATE bdequipe2
			SET  id='$id1', saison='$annee', division='$nomDivision', titre='$champ', champion='$clubA1001', entente='$clubA1001', champion_entente = ' ', comite1 ='$ligueP',
			vice_champion='$clubA1002', comite2='$ligueP', score1='$A1001',	score2='$A1002', championnat ='$nomLigue', rang='$div',	rang2='$constante', categorie='$div'
			WHERE id = $id1");

		$bdd->exec("UPDATE bdequipe2
			SET id='$id2',	saison='$annee', division='$nomDivision', titre='$vice', champion='$clubA1002', entente='$clubA1002',	champion_entente=' ', comite1='$ligueP',
			vice_champion=' ',	      comite2='$ligueP', score1='$A1002', score2='$A1001', championnat='$nomLigue', rang= '$div', rang2='$constante', categorie='$div'
			WHERE id = $id2");

		} 	
		else
	 {
		$bdd->exec("INSERT INTO bdequipe2
			VALUES ( '$id1','$annee',	'$nomDivision',	'$champ',	'$clubA1001','$clubA1001',' ','$ligueP',
			'$clubA1002', '$ligueP',	'$A1001',	'$A1002',	'$nomLigue','$div',	'$constante','$div')");

		$bdd->exec("INSERT INTO bdequipe2
			VALUES ( 	'$id2',		'$annee','$nomDivision','$vice','$clubA1002','$clubA1002',	' ','$ligueP',
			' ',	'$ligueP','$A1002','$A1001','$nomLigue', '$div','$constante','$div')");

	}		
} 
else 
{
	echo $id1.';'.$annee.';'.$nomDivision.';'.$champ.';'.$clubA1002.';'.$clubA1002.';'.';'.'('.$ligue.')'.';'.$clubA1001.';'.'('.$ligue.")".';'.$A1002.';'.$A1001.';'.$nomLigue.';'.$div.';'.$constante.';'."A";
	echo "<br/>";
	echo $id2.';'.$annee.';'.$nomDivision.';'.$vice.';'.$clubA1001.';'.$clubA1001.';'.';'.';'.';'.'('.$ligue.")".';'.$A1001.';'.$A1002.';'.$nomLigue.';'.$div.';'.$constante.';'."A";


	if ($cpte == 1){

		$bdd->exec("UPDATE bdequipe2
			SET  id='$id1',saison='$annee',	division='$nomDivision',	titre='$champ',	champion='$clubA1002', entente='$clubA1002', champion_entente=' ',comite1 ='$ligueP',
			vice_champion='$clubA1001', comite2='$ligueP',	score1='$A1002',	score2='$A1001',	championnat ='$nomLigue',rang='$div',	rang2='$constante',categorie='$div'
			WHERE id = $id1");

		$bdd->exec("UPDATE bdequipe2
			SET  	id='$id2',		saison='$annee',division='$nomDivision',titre='$vice',champion='$clubA1001',entente='$clubA1001',	champion_entente=' ',comite1='$ligueP',
			vice_champion=' ',	comite2='$ligueP',score1='$A1001', score2='$A1002',championnat='$nomLigue',rang= '$div',rang2='$constante',categorie='$div'
			WHERE id = $id2");

	} else {

		$bdd->exec("INSERT INTO bdequipe2
			VALUES ('$id1',		'$annee',		'$nomDivision',	'$champ',	'$clubA1002',	'$clubA1002',	' ','$ligueP',
			'$clubA1001',	'$ligueP',	'$A1002',	'$A1001',	'$nomLigue',	'$div',	'$constante','$div')");

		$bdd->exec("INSERT INTO bdequipe2
			VALUES ( 	'$id2',	'$annee',	'$nomDivision',	'$vice', '$clubA1001',	'$clubA1001',	' ', '$ligueP',
			'',	'$ligueP',	'$A1001', '$A1002','$nomLigue',	'$div',	'$constante','$div')");

	}		
	
}
*/
/*--------------------------------*/
echo "<br/>";
					echo "---------------------------------";			
					echo "<br/>";
	//$terr_annee = "terr_" . $annee;				
	if ($A1001>$A1002){
	echo "<h2>".$champ."</h2>";	
		echo $id1001.' - '.$clubA1001.' '.$champ . "<br/>";
	echo "<h2>".$vice."</h2>";	
		echo $id1002 . ' - ' . $clubA1002. ' '.$vice  . "<br/>";

		$idReduit = substr($id1001, -5);				
		$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$champ'	WHERE id = '$idReduit'");

		$idReduit = substr($id1002, -5);	
		$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$vice'	WHERE id = '$idReduit'");

	} else {
	echo "<h2>".$champ."</h2>";	
		echo $id1002.' - '.$clubA1002.' '.$champ . "<br/>";
	echo "<h2>".$vice."</h2>";	
		echo $id1001.' - '.$clubA1001. ' '.$vice .  "<br/>";

		$idReduit = substr($id1002, -5);					
		$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$champ'	WHERE id = '$idReduit'");

		$idReduit = substr($id1001, -5);	
		$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$vice'	WHERE id = '$idReduit'");
	}

	echo "<h2>".$f2me."</h2>";	
			
				if ($clubA1001 == $clubA2001){	
				echo $id2002 . ' - ' . $clubA2002.'  '.$f2me."<br/>";
				$idReduit = substr($id2002, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f2me'	WHERE id = '$idReduit'");}
				 else {
				echo $id2001 . ' - ' . $clubA2001 . '  '.$f2me."<br/>";;
				$idReduit = substr($id2001, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f2me'	WHERE id = '$idReduit'");}
					
				if ($clubA1002 == $clubA2003) {
				echo $id2004 . ' - ' . $clubA2004 . '  '.$f2me."<br/>";
				$idReduit = substr($id2004, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f2me'	WHERE id = '$idReduit'");} 
				else {
				echo $id2003 . ' - ' . $clubA2003 . '  '.$f2me."<br/>";
				$idReduit = substr($id2003, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f2me'	WHERE id = '$idReduit'");}
				
				
	echo "<h2>".$f4me."</h2>";			
				
				if ($clubA2001 == $clubA4001){
				echo $id4002 . ' - ' . $clubA4002. '  '. $f4me."<br/>";
				$idReduit = substr($id4002, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f4me'	WHERE id = '$idReduit'");
				} else{
				echo $id4001 . '- ' . $clubA4001 . '  '. $f4me."<br/>";
				$idReduit = substr($id4001, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f4me'	WHERE id = '$idReduit'"); 
				}
				//******************************** */
				if ($clubA2002 == $clubA4003){
				echo $id4004 . ' - ' . $clubA4004 . '  '; echo $f4me."<br/>";
				$idReduit = substr($id4004, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f4me'	WHERE id = '$idReduit'"); 	
				} else{
				echo $id4003 . '- ' . $clubA4003 . '  '; echo $f4me."<br/>";
				$idReduit = substr($id4003, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f4me'	WHERE id = '$idReduit'"); 
				}
				//******************************** */
				if ($clubA2003 == $clubA4005){
				echo $id4006 . ' - ' . $clubA4006 . '  '. $f4me."<br/>";
				$idReduit = substr($id4006, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f4me'	WHERE id = '$idReduit'"); 
				} else{
				echo $id4005 . '- ' . $clubA4005 . '  '. $f4me."<br/>";
				$idReduit = substr($id4005, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f4me'	WHERE id = '$idReduit'"); 
				}
				//******************************** */
				if ($clubA2004 == $clubA4007) {
				echo $id4008 . ' - ' . $clubA4008 . '  '. $f4me."<br/>";
				$idReduit = substr($id4008, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f4me'	WHERE id = '$idReduit'"); 
				} else {
				echo $id4007 . '- ' . $clubA4007 . '  '. $f4me . "<br/>";
				$idReduit = substr($id4007, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f4me'	WHERE id = '$idReduit'"); 
				}

echo "<h2>".$f8me."</h2>";	
		
				if ($clubA4001 == $clubA8001) {
				echo $id8002 . ' - ' . $clubA8002 . '  '.$f8me. "<br/>";
				$idReduit = substr($id8002, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f8me'	WHERE id = '$idReduit'"); 
				}
				else 
				{
				echo $id8001.' - '.$clubA8001.'  '. $f8me."<br/>";
				$idReduit = substr($id8001, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f8me'	WHERE id = '$idReduit'"); 
			}
				//******************************** */
				if ($clubA4002 ==  $clubA8003) {
				echo $id8004.' - '.$clubA8004. '  '.$f8me. "<br/>"; 
				$idReduit = substr($id8004, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f8me'	WHERE id = '$idReduit'"); }
				else 
				{
				echo $id8003.' - '.$clubA8003.'  '. $f8me."<br/>";
				$idReduit = substr($id8003, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f8me'	WHERE id = '$idReduit'"); }
				//******************************** */
				if ($clubA4003 ==  $clubA8005) {
				echo $id8006.' - '.$clubA8006. '  '.$f8me. "<br/>"; 
				$idReduit = substr($id8006, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f8me'	WHERE id = '$idReduit'"); } 
				else 
				{
				echo $id8005.' - '.$clubA8005.'  '. $f8me."<br/>";
				$idReduit = substr($id8005, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f8me'	WHERE id = '$idReduit'"); }
				//******************************** */
				if ($clubA4004 ==  $clubA8007) {
				echo $id8008.' - '.$clubA8008. '  '.$f8me. "<br/>"; 
				$idReduit = substr($id8008, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f8me'	WHERE id = '$idReduit'"); }
				else 
				{
				echo $id8007.' - '.$clubA8007.'  '. $f8me."<br/>";
				$idReduit = substr($id8007, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f8me'	WHERE id = '$idReduit'"); }
				//******************************** */
				if ($clubA4005 ==  $clubA8009) {
				echo $id8010.' - '.$clubA8010. '  '.$f8me. "<br/>"; 
				$idReduit = substr($id8010, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f8me'	WHERE id = '$idReduit'"); }
				 else 
				 {echo $id8009.' - '.$clubA8009.'  '. $f8me."<br/>";
				$idReduit = substr($id8009, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f8me'	WHERE id = '$idReduit'"); }
				//******************************** */
				if ($clubA4006 ==  $clubA8011) {
				echo $id8012.' - '.$clubA8012. '  '.$f8me. "<br/>"; 
				$idReduit = substr($id8012, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f8me'	WHERE id = '$idReduit'"); }
				 else 
				 {
				echo $id8011.' - '.$clubA8011.'  '. $f8me."<br/>";
				$idReduit = substr($id8011, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f8me'	WHERE id = '$idReduit'"); }
				//******************************** */
				if ($clubA4007 ==  $clubA8013) {
				echo $id8014.' - '.$clubA8014. '  '.$f8me. "<br/>"; 
				$idReduit = substr($id8014, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f8me'	WHERE id = '$idReduit'"); }
				else 
				{echo $id8013.' - '.$clubA8013.'  '. $f8me."<br/>";
				$idReduit = substr($id8013, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f8me'	WHERE id = '$idReduit'"); }
				//******************************** */
				if ($clubA4008 ==  $clubA8015) {
				echo $id8016.' - '.$clubA8016. '  '.$f8me. "<br/>"; 
				$idReduit = substr($id8016, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f8me'	WHERE id = '$idReduit'");  }
				else 
				{
				echo $id8015.' - '.$clubA8015.'  '.$f8me."<br/>";
				$idReduit = substr($id8015, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f8me'	WHERE id = '$idReduit'"); }
						
	echo "<h2>".$f16me."</h2>";	
			
				if ($clubA8001 ==  $clubA1601) 
				{
				echo $id1602.'  '.$clubA1602.'  '.$f16me."<br/>"; 
				$idReduit = substr($id1602, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f16me'	WHERE id = '$idReduit'");}
				else 
				{
				echo $id1601.'  '.$clubA1601.'  '.$f16me."<br/>"; 
				$idReduit = substr($id1601, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f16me'	WHERE id = '$idReduit'");}
				//******************************** */
				if ($clubA8002 ==  $clubA1603) {
				echo $id1604.'  '.$clubA1604.'  '.$f16me."<br/>"; 
				$idReduit = substr($id1604, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f16me'	WHERE id = '$idReduit'");} 
				else 
				{
				echo $id1603.'  '.$clubA1603.' '.$f16me."<br/>";
				$idReduit = substr($id1603, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f16me'	WHERE id = '$idReduit'");}
				//******************************** */
				if ($clubA8003 ==  $clubA1605) {
				echo $id1606.'  '.$clubA1606.' '.$f16me."<br/>";
				$idReduit = substr($id1606, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f16me'	WHERE id = '$idReduit'");} 
				else
				 {
				echo $id1605.'  '.$clubA1605.' '.$f16me."<br/>";
				$idReduit = substr($id1605, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f16me'	WHERE id = '$idReduit'");
				}
				//******************************** */
				if ($clubA8004 ==  $clubA1607) {
				echo $id1608.'  '.$clubA1608.'  '.$f16me."<br/>";  
				$idReduit = substr($id1608, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f16me'	WHERE id = '$idReduit'");
				}
				else 
				{echo $id1607.'  '.$clubA1607.' '.$f16me."<br/>";
				$idReduit = substr($id1607, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f16me'	WHERE id = '$idReduit'");}
				//******************************** */
				if ($clubA8005 ==  $clubA1609) {
				echo $id1610.'  '.$clubA1610.'  '.$f16me."<br/>"; 
				$idReduit = substr($id1610, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f16me'	WHERE id = '$idReduit'");
				} 
				else 
				{echo $id1609.'  '.$clubA1609.' '.$f16me."<br/>";
				$idReduit = substr($id1609, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f16me'	WHERE id = '$idReduit'");}
				//******************************** */
				if ($clubA8006 ==  $clubA1611) {
				echo $id1612.'  '.$clubA1612.' '.$f16me."<br/>";
				$idReduit = substr($id1612, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f16me'	WHERE id = '$idReduit'");}
				 else 
				 {
				echo $id1611.'  '.$clubA1611.' '.$f16me."<br/>";
				$idReduit = substr($id1611, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f16me'	WHERE id = '$idReduit'");
				}
					
				//******************************** */
				if ($clubA8007 ==  $clubA1613)
				 {
				echo $id1614.'  '.$clubA1614.'  '.$f16me."<br/>"; 
				$idReduit = substr($id1614, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f16me'	WHERE id = '$idReduit'");
				 }
				else 
				{
				echo $id1613.'  '.$clubA1613.' '.$f16me."<br/>";
				$idReduit = substr($id1613, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f16me'	WHERE id = '$idReduit'");
				}
				//******************************** */
				if ($clubA8008 ==  $clubA1615) {
				echo $id1616.'  '.$clubA1616.'  '.$f16me."<br/>"; 
				$idReduit = substr($id1616, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f16me'	WHERE id = '$idReduit'");
				} 
				else 
				{echo $id1615.'  '.$clubA1615.' '.$f16me."<br/>";
				$idReduit = substr($id1615, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f16me'	WHERE id = '$idReduit'");
				}
				//******************************** */
				if ($clubA8009 ==  $clubA1617) {
				echo $id1618.'  '.$clubA1618.'  '.$f16me."<br/>"; 
				$idReduit = substr($id1618, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f16me'	WHERE id = '$idReduit'");
				}
				else 
				{
				echo $id1617.'  '.$clubA1617.' '.$f16me."<br/>";
				$idReduit = substr($id1617, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f16me'	WHERE id = '$idReduit'");
				}
				//******************************** */
				if ($clubA8010 ==  $clubA1619) {
				echo $id1620.'  '.$clubA1620.' '.$f16me."<br/>";
				$idReduit = substr($id1620, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f16me'	WHERE id = '$idReduit'");
				} 
				else 
				{
				echo $id1619.'  '.$clubA1619.'  '.$f16me."<br/>"; 
				$idReduit = substr($id1619, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f16me'	WHERE id = '$idReduit'");
				}
				//******************************** */
				if ($clubA8011 ==  $clubA1621) {
				echo $id1622.'  '.$clubA1622.'  '.$f16me."<br/>"; 
				$idReduit = substr($id1622, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f16me'	WHERE id = '$idReduit'");
			 	}
				else {
				echo $id1621.'  '.$clubA1621.' '.$f16me."<br/>";
				$idReduit = substr($id1621, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f16me'	WHERE id = '$idReduit'");
				}
				//******************************** */
				if ($clubA8012 ==  $clubA1623) {
				echo $id1624.'  '.$clubA1624.' '.$f16me."<br/>";
				$idReduit = substr($id8015, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f16me'	WHERE id = '$idReduit'");
			}
				else 
				{
				echo $id1623.'  '.$clubA1623.' '.$f16me."<br/>";
				$idReduit = substr($id1623, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f16me'	WHERE id = '$idReduit'");
				}
				//******************************** */
				if ($clubA8013 ==  $clubA1625) {
				echo $id1626.'  '.$clubA1626.'  '.$f16me."<br/>"; 
				$idReduit = substr($id1626, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f16me'	WHERE id = '$idReduit'");
				}
				 else 
				{
				echo $id1625.'  '.$clubA1625.' '.$f16me."<br/>";
				$idReduit = substr($id1625, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f16me'	WHERE id = '$idReduit'");
				}
				//******************************** */
				if ($clubA8014 ==  $clubA1628) {
				echo $id1628.'  '.$clubA1628.'  '.$f16me."<br/>"; 
				$idReduit = substr($id1628, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f16me'	WHERE id = '$idReduit'");
				}
				else 
				{
				echo $id1627.'  '.$clubA1627.' '.$f16me."<br/>";
				$idReduit = substr($id1627, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f16me'	WHERE id = '$idReduit'");
				}
				//******************************** */
				if ($clubA8015 ==  $clubA1629) {
				echo $id1630.'  '.$clubA1630.'  '.$f16me."<br/>"; 
				$idReduit = substr($id1630, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f16me'	WHERE id = '$idReduit'");
			 	}
				else 
				{echo $id1629.'  '.$clubA1629.' '.$f16me."<br/>";
				$idReduit = substr($id1629, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f16me'	WHERE id = '$idReduit'");
				}
				//******************************** */
				if ($clubA8016 ==  $clubA1631) {
				echo $id1632.' - '.$clubA1632.'  '.$f16me."<br/>"; 
				$idReduit = substr($id1632, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f16me'	WHERE id = '$idReduit'");
				}
				 else 
				{
				echo $id1631.'  '.$clubA1631.'  '.$f16me."<br/>"; 
				$idReduit = substr($id1631, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f16me'	WHERE id = '$idReduit'");
				}
				

			}	
	 
		elseif ($type == 18 or $type == 19 )
			{
			huitieme2019 ($comite, $division, $annee, $bdd);
			require '../../connect/connexion1.php';
			 			echo "<br/>";echo "<br/>";			
							 
	
	
	require "insertionBdequipe2.php";
	
	
						/*
						if ($A1001>$A1002){	
	echo $id1.';'.$annee.';'.$nomDivision.';'.$champ.';'.$clubA1001.';'.$clubA1001.';'.';'.'('.$ligue.')'.';'.$clubA1002.';'.'('.$ligue.")".';'.$A1001.';'.$A1002.';'.$nomLigue.';'.$div.';'.$constante.';'."A";
	echo "<br/>";
	echo $id2 . ';' . $annee . ';' . $nomDivision . ';' . $vice . ';' . $clubA1002 . ';' . $clubA1002 . ';' . ';' . ';' . ';' . '(' . $ligue . ")" . ';' . $A1002 . ';' . $A1001 . ';' . $nomLigue . ';' . $div . ';' . $constante . ';' . "A";
	} else {
	echo $id1.';'.$annee.';'.$nomDivision.';'.$champ.';'.$clubA1002.';'.$clubA1002.';'.';'.'('.$ligue.')'.';'.$clubA1001.';'.'('.$ligue.")".';'.$A1002.';'.$A1001.';'.$nomLigue.';'.$div.';'.$constante.';'."A";
	echo "<br/>";
	echo $id2.';'.$annee.';'.$nomDivision.';'.$vice.';'.$clubA1001.';'.$clubA1001.';'.';'.';'.';'.'('.$ligue.")".';'.$A1001.';'.$A1002.';'.$nomLigue.';'.$div.';'.$constante.';'."A";
	}
	*/
	if ($A1001>$A1002){
	echo "<h2>" . $champ."</h2>";
		echo $id1001.' - '.$clubA1001.' '.$champ .  "<br/>";
		$idReduit = substr($id1001, -5);
		$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$champ'	WHERE id = '$idReduit'");
	echo "<h2>" . $vice."</h2>";
		echo $id1002 . ' - ' . $clubA1002. ' '.$vice .  "<br/>";
		$idReduit = substr($id1002, -5);
		$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$vice'	WHERE id = '$idReduit'");
	} else {
	echo "<h2>" . $champ."</h2>";
		echo $id1002.' - '.$clubA1002.' '.$champ .  "<br/>";
		$idReduit = substr($id1002, -5);
		$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$champ'	WHERE id = '$idReduit'");
	echo "<h2>" . $vice."</h2>";
		echo $id1001.' - '.$clubA1001. ' '.$vice . "<br/>";
		$idReduit = substr($id2002, -5);
		$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$vice'	WHERE id = '$idReduit'");
	}
					
	echo "<h2>".$f2me."</h2>";		
					
				if ($clubA1001 == $clubA2001){	
					echo $id2002 . ' - ' . $clubA2002.'  '.$f2me. "<br/>";
					$idReduit = substr($id2002, -5);
					$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f2me'	WHERE id = '$idReduit'");}
				 else {
					echo $id2001 . ' - ' . $clubA2001 .'  '.$f2me. "<br/>";
					$idReduit = substr($id2001, -5);
					$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f2me'	WHERE id = '$idReduit'");}


				if ($clubA1002 == $clubA2003) {
				echo $id2004 . ' - ' . $clubA2004 .'  '.$f2me. "<br/>";
				$idReduit = substr($id2004, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f2me'	WHERE id = '$idReduit'");} 
				else {
				echo $id2003 . ' - ' . $clubA2003 .'  '.$f2me. "<br/>";
				$idReduit = substr($id2003, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f2me'	WHERE id = '$idReduit'");}
				
	echo "<h2>".$f4me."</h2>";			

				if ($clubA2001 == $clubA4001){
				echo $id4002 . ' - ' . $clubA4002 . '  '.$f4me."<br/>";
				$idReduit = substr($id4002, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f4me'	WHERE id = '$idReduit'");
				}
				else{
				echo $id4001 . '- ' . $clubA4001 . '  '.$f4me."<br/>";
				$idReduit = substr($id4001, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f4me'	WHERE id = '$idReduit'"); 
				}
				//******************************** */
				if ($clubA2002 == $clubA4003){
				echo $id4004 . ' - ' . $clubA4004 . '  '. $f4me."<br/>";
				$idReduit = substr($id4004, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f4me'	WHERE id = '$idReduit'"); 	
				}
				else{
				echo $id4003 . '- ' . $clubA4003 . '  '. $f4me."<br/>";
				$idReduit = substr($id4003, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f4me'	WHERE id = '$idReduit'"); 
				}
				//******************************** */
				if ($clubA2003 == $clubA4005){
				echo $id4006 . ' - ' . $clubA4006 . '  '. $f4me."<br/>";
				$idReduit = substr($id4006, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f4me'	WHERE id = '$idReduit'"); 
				}
				else{
				echo $id4005 . '- ' . $clubA4005 . '  '. $f4me."<br/>";
				$idReduit = substr($id4005, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f4me'	WHERE id = '$idReduit'"); 
				}
				//******************************** */
				if ($clubA2004 == $clubA4007) {
				echo $id4008 . ' - ' . $clubA4008 . '  '. $f4me."<br/>";
				$idReduit = substr($id4008, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f4me'	WHERE id = '$idReduit'"); 
				} else {
				echo $id4007 . '- ' . $clubA4007 . '  '. $f4me . "<br/>";
				$idReduit = substr($id4007, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f4me'	WHERE id = '$idReduit'"); 
				}

	echo "<h2>".$f8me."</h2>";					
	
						if ($clubA4001 == $clubA8001) {
				echo $id8002 . ' - ' . $clubA8002 . '  '.$f8me. "<br/>";
				$idReduit = substr($id8002, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f8me'	WHERE id = '$idReduit'"); 
				}
				else 
				{
				echo $id8001.' - '.$clubA8001.'  '. $f8me."<br/>";
				$idReduit = substr($id8001, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f8me'	WHERE id = '$idReduit'"); 
			}
				//******************************** */
				if ($clubA4002 ==  $clubA8003) {
				echo $id8004.' - '.$clubA8004. '  '.$f8me. "<br/>"; 
				$idReduit = substr($id8004, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f8me'	WHERE id = '$idReduit'"); }
				else 
				{
				echo $id8003.' - '.$clubA8003.'  '. $f8me."<br/>";
				$idReduit = substr($id8003, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f8me'	WHERE id = '$idReduit'"); }
				//******************************** */
				if ($clubA4003 ==  $clubA8005) {
				echo $id8006.' - '.$clubA8006. '  '.$f8me. "<br/>"; 
				$idReduit = substr($id8006, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f8me'	WHERE id = '$idReduit'"); } 
				else 
				{
				echo $id8005.' - '.$clubA8005.'  '. $f8me."<br/>";
				$idReduit = substr($id8005, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f8me'	WHERE id = '$idReduit'"); }
				//******************************** */
				if ($clubA4004 ==  $clubA8007) {
				echo $id8008.' - '.$clubA8008. '  '.$f8me. "<br/>"; 
				$idReduit = substr($id8008, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f8me'	WHERE id = '$idReduit'"); }
				else 
				{
				echo $id8007.' - '.$clubA8007.'  '. $f8me."<br/>";
				$idReduit = substr($id8007, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f8me'	WHERE id = '$idReduit'"); }
				//******************************** */
				if ($clubA4005 ==  $clubA8009) {
				echo $id8010.' - '.$clubA8010. '  '.$f8me. "<br/>"; 
				$idReduit = substr($id8010, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f8me'	WHERE id = '$idReduit'"); }
				 else 
				 {echo $id8009.' - '.$clubA8009.'  '. $f8me."<br/>";
				$idReduit = substr($id8009, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f8me'	WHERE id = '$idReduit'"); }
				//******************************** */
				if ($clubA4006 ==  $clubA8011) {
				echo $id8012.' - '.$clubA8012. '  '.$f8me. "<br/>"; 
				$idReduit = substr($id8012, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f8me'	WHERE id = '$idReduit'"); }
				 else 
				 {
				echo $id8011.' - '.$clubA8011.'  '. $f8me."<br/>";
				$idReduit = substr($id8011, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f8me'	WHERE id = '$idReduit'"); }
				//******************************** */
				if ($clubA4007 ==  $clubA8013) {
				echo $id8014.' - '.$clubA8014. '  '.$f8me. "<br/>"; 
				$idReduit = substr($id8014, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f8me'	WHERE id = '$idReduit'"); }
				else 
				{echo $id8013.' - '.$clubA8013.'  '. $f8me."<br/>";
				$idReduit = substr($id8013, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f8me'	WHERE id = '$idReduit'"); }
				//******************************** */
				if ($clubA4008 ==  $clubA8015) {
				echo $id8016.' - '.$clubA8016. '  '.$f8me. "<br/>"; 
				$idReduit = substr($id8016, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f8me'	WHERE id = '$idReduit'");  }
				else 
				{
				echo $id8015.' - '.$clubA8015.'  '.$f8me."<br/>";
				$idReduit = substr($id8015, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f8me'	WHERE id = '$idReduit'"); }

			}
	
		elseif ($type == 14)
			{
			quarts2019 ($comite, $division, $annee, $bdd);
			require '../../connect/connexion1.php';
						echo "<br/>";echo "<br/>";	
						
						

		require "insertionBdequipe2.php";				
	/*						 
	if ($A1001>$A1002){	
	echo $id1.';'.$annee.';'.$nomDivision.';'.$champ.';'.$clubA1001.';'.$clubA1001.';'.';'.'('.$ligue.')'.';'.$clubA1002.';'.'('.$ligue.")".';'.$A1001.';'.$A1002.';'.$nomLigue.';'.$div.';'.$constante.';'."A";
	echo "<br/>";
	echo $id2 . ';' . $annee . ';' . $nomDivision . ';' . $vice . ';' . $clubA1002 . ';' . $clubA1002 . ';' . ';' . ';' . ';' . '(' . $ligue . ")" . ';' . $A1002 . ';' . $A1001 . ';' . $nomLigue . ';' . $div . ';' . $constante . ';' . "A";
	} else {
	echo $id1.';'.$annee.';'.$nomDivision.';'.$champ.';'.$clubA1002.';'.$clubA1002.';'.';'.'('.$ligue.')'.';'.$clubA1001.';'.'('.$ligue.")".';'.$A1002.';'.$A1001.';'.$nomLigue.';'.$div.';'.$constante.';'."A";
	echo "<br/>";
	echo $id2.';'.$annee.';'.$nomDivision.';'.$vice.';'.$clubA1001.';'.$clubA1001.';'.';'.';'.';'.'('.$ligue.")".';'.$A1001.';'.$A1002.';'.$nomLigue.';'.$div.';'.$constante.';'."A";
	}
	*/
	if ($A1001>$A1002){
echo "<h2>".$champ."</h2>";
		echo $id1001.' - '.$clubA1001.' '.$champ . ' ' . $nomLigue . "<br/>";
		$idReduit = substr($id1001, -5);
		$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$champ'	WHERE id = '$idReduit'");		
echo "<h2>".$vice."</h2>";
		echo $id1002 . ' - ' . $clubA1002. ' '.$vice . ' ' . $nomLigue . "<br/>";
		$idReduit = substr($id1002, -5);
		$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$vice'	WHERE id = '$idReduit'");			
	} else {

echo "<h2>".$champ."</h2>";
		echo $id1002.' - '.$clubA1002.' '.$champ . ' ' . $nomLigue . "<br/>";
		$idReduit = substr($id2002, -5);
		$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$champ'	WHERE id = '$idReduit'");			
echo "<h2>".$vice."</h2>";
		echo $id1001.' - '.$clubA1001. ' '.$vice . ' ' . $nomLigue . "<br/>";
		$idReduit = substr($id1001, -5);
		$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$vice'	WHERE id = '$idReduit'");
					
	}
	
	echo "<h2>".$f2me."</h2>";			
			
			if ($clubA1001 == $clubA2001){	
				echo $id2002 . ' - ' . $clubA2002.'  '.$f2me."<br/>";
				$idReduit = substr($id2002, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f2me'	WHERE id = '$idReduit'");}
				 else {
				echo $id2001 . ' - ' . $clubA2001 . '  '.$f2me."<br/>";;
				$idReduit = substr($id2001, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f2me'	WHERE id = '$idReduit'");}
					
				if ($clubA1002 == $clubA2003) {
				echo $id2004 . ' - ' . $clubA2004 . '  '.$f2me."<br/>";
				$idReduit = substr($id2004, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f2me'	WHERE id = '$idReduit'");} 
				else {
				echo $id2003 . ' - ' . $clubA2003 . '  '.$f2me."<br/>";
				$idReduit = substr($id2003, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f2me'	WHERE id = '$idReduit'");}
				
	echo "<h2>".$f4me."</h2>";	

				if ($clubA2001 == $clubA4001){
				echo $id4002 . ' - ' . $clubA4002 . '  '.$f4me."<br/>";
				$idReduit = substr($id4002, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f4me'	WHERE id = '$idReduit'");
				}
				else{
				echo $id4001 . '- ' . $clubA4001 . '  '.$f4me."<br/>";
				$idReduit = substr($id4001, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f4me'	WHERE id = '$idReduit'"); 
				}
				//******************************** */
				if ($clubA2002 == $clubA4003){
				echo $id4004 . ' - ' . $clubA4004 . '  '. $f4me."<br/>";
				$idReduit = substr($id4004, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f4me'	WHERE id = '$idReduit'"); 	
				}
				else{
				echo $id4003 . '- ' . $clubA4003 . '  '. $f4me."<br/>";
				$idReduit = substr($id4003, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f4me'	WHERE id = '$idReduit'"); 
				}
				//******************************** */
				if ($clubA2003 == $clubA4005){
				echo $id4006 . ' - ' . $clubA4006 . '  '. $f4me."<br/>";
				$idReduit = substr($id4006, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f4me'	WHERE id = '$idReduit'"); 
				}
				else{
				echo $id4005 . '- ' . $clubA4005 . '  '. $f4me."<br/>";
				$idReduit = substr($id4005, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f4me'	WHERE id = '$idReduit'"); 
				}
				//******************************** */
				if ($clubA2004 == $clubA4007) {
				echo $id4008 . ' - ' . $clubA4008 . '  '. $f4me."<br/>";
				$idReduit = substr($id4008, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f4me'	WHERE id = '$idReduit'"); 
				} else {
				echo $id4007 . '- ' . $clubA4007 . '  '. $f4me . "<br/>";
				$idReduit = substr($id4007, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f4me'	WHERE id = '$idReduit'"); 
				}
			}

			elseif ( $type == 15)
			{
			quartsDemiAR2019 ($comite, $division, $annee, $bdd);
			require '../../connect/connexion1.php';
						echo "<br/>";echo "<br/>";		
						
			require "insertionBdequipe2.php";			

	/*						 
	if ($A1001>$A1002){	
	echo $id1.';'.$annee.';'.$nomDivision.';'.$champ.';'.$clubA1001.';'.$clubA1001.';'.';'.'('.$ligue.')'.';'.$clubA1002.';'.'('.$ligue.")".';'.$A1001.';'.$A1002.';'.$nomLigue.';'.$div.';'.$constante.';'."A";
	echo "<br/>";
	echo $id2 . ';' . $annee . ';' . $nomDivision . ';' . $vice . ';' . $clubA1002 . ';' . $clubA1002 . ';' . ';' . ';' . ';' . '(' . $ligue . ")" . ';' . $A1002 . ';' . $A1001 . ';' . $nomLigue . ';' . $div . ';' . $constante . ';' . "A";
	} else {
	echo $id1.';'.$annee.';'.$nomDivision.';'.$champ.';'.$clubA1002.';'.$clubA1002.';'.';'.'('.$ligue.')'.';'.$clubA1001.';'.'('.$ligue.")".';'.$A1002.';'.$A1001.';'.$nomLigue.';'.$div.';'.$constante.';'."A";
	echo "<br/>";
	echo $id2.';'.$annee.';'.$nomDivision.';'.$vice.';'.$clubA1001.';'.$clubA1001.';'.';'.';'.';'.'('.$ligue.")".';'.$A1001.';'.$A1002.';'.$nomLigue.';'.$div.';'.$constante.';'."A";
	}
	*/
	if ($A1001>$A1002){
echo "<h2>" . $champ. "</h2>";
		echo $id1001.' - '.$clubA1001.' '.$champ .  "<br/>";
		$idReduit = substr($id1001, -5);
		$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$champ'	WHERE id = '$idReduit'");			
echo "<h2>" .$vice . "</h2>";
		echo $id1002 . ' - ' . $clubA1002. ' '.$vice .  "<br/>";
		$idReduit = substr($id1002, -5);
		$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$vice'	WHERE id = '$idReduit'");	
	} else {
echo "<h2>" . $champ. "</h2>";
		echo $id1002.' - '.$clubA1002.' '.$champ . "<br/>";
		$idReduit = substr($id1002, -5);
		$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$champ'	WHERE id = '$idReduit'");		
echo "<h2>" .$vice . "</h2>";	
		echo $id1001.' - '.$clubA1001. ' '.$vice . "<br/>";
		$idReduit = substr($id1001, -5);
		$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$vice'	WHERE id = '$idReduit'");
					
	}

	echo "<h2>".$f2me."</h2>";			
		
				if ($clubA1001 == $clubA2001){	
					echo $id2002 . ' - ' . $clubA2002.'  '.$f2me."<br/>";
					$idReduit = substr($id2002, -5);
					$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f2me'	WHERE id = '$idReduit'");}
				 else {
					echo $id2001 . ' - ' . $clubA2001 . '  '.$f2me."<br/>";
					$idReduit = substr($id2001, -5);
					$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f2me'	WHERE id = '$idReduit'");}
					

				if ($clubA1002 == $clubA2003) {
				echo $id2004 . ' - ' . $clubA2004 . '  '.$f2me."<br/>";
				$idReduit = substr($id2004, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f2me'	WHERE id = '$idReduit'");} 
				else {
				echo $id2003 . ' - ' . $clubA2003 . '  '.$f2me."<br/>";
				$idReduit = substr($id2003, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f2me'	WHERE id = '$idReduit'");}
				
		echo "<h2>".$f4me."</h2>";	
				if ($clubA2001 == $clubA4001){
				echo $id4002 . ' - ' . $clubA4002 . '  '.$f4me."<br/>";
				$idReduit = substr($id4002, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f4me'	WHERE id = '$idReduit'");
				}
				else{
				echo $id4001 . '- ' . $clubA4001 . '  '.$f4me."<br/>";
				$idReduit = substr($id4001, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f4me'	WHERE id = '$idReduit'"); 
				}
				//******************************** */
				if ($clubA2002 == $clubA4003){
				echo $id4004 . ' - ' . $clubA4004 . '  '. $f4me."<br/>";
				$idReduit = substr($id4004, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f4me'	WHERE id = '$idReduit'"); 	
				}
				else{
				echo $id4003 . '- ' . $clubA4003 . '  '. $f4me."<br/>";
				$idReduit = substr($id4003, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f4me'	WHERE id = '$idReduit'"); 
				}
				//******************************** */
				if ($clubA2003 == $clubA4005){
				echo $id4006 . ' - ' . $clubA4006 . '  '. $f4me."<br/>";
				$idReduit = substr($id4006, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f4me'	WHERE id = '$idReduit'"); 
				}
				else{
				echo $id4005 . '- ' . $clubA4005 . '  '. $f4me."<br/>";
				$idReduit = substr($id4005, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f4me'	WHERE id = '$idReduit'"); 
				}
				//******************************** */
				if ($clubA2004 == $clubA4007) {
				echo $id4008 . ' - ' . $clubA4008 . '  '. $f4me."<br/>";
				$idReduit = substr($id4008, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f4me'	WHERE id = '$idReduit'"); 
				} else {
				echo $id4007 . '- ' . $clubA4007 . '  '. $f4me . "<br/>";
				$idReduit = substr($id4007, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f4me'	WHERE id = '$idReduit'"); 
				}
			
			}

elseif ( $type == 3)
			{
			demiAR2019($comite, $division, $annee, $bdd);
			require '../../connect/connexion1.php';
			echo "<br/>";echo "<br/>";	
		// Enregistrement des données en table Bdequipe2	
			require "insertionBdequipe2.php";

// Enregistrement des données en table bdsaison
if ($A1001>$A1002){
	echo "<h2>" . $champ . "</h2>";
		echo $id1001.' - '.$clubA1001.' '.$champ. "<br/>";
		$idReduit = substr($id1001, -5);
		$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$champ'	WHERE id = '$idReduit'");				
	echo "<h2>" . $vice . "</h2>";
		echo $id1002 . ' - ' . $clubA1002. ' '.$vice  . "<br/>";
		$idReduit = substr($id1002, -5);
		$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$vice'	WHERE id = '$idReduit'");			
	} else {

	echo "<h2>" . $champ. "</h2>";
		echo $id1002.' - '.$clubA1002.' '.$champ. "<br/>";
		$idReduit = substr($id1002, -5);
		$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$champ'	WHERE id = '$idReduit'");			
	echo "<h2>" . $vice. "</h2>";	
		echo $id1001.' - '.$clubA1001. ' '.$vice . "<br/>";
		$idReduit = substr($id1001, -5);
		$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$vice'	WHERE id = '$idReduit'");				
	}

echo "<h2>".$f2me."</h2>";	
			
				if ($clubA1001 == $clubA2001){	
					echo $id2002 . ' - ' . $clubA2002.'  '.$f2me."<br/>";
					$idReduit = substr($id2002, -5);
					$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f2me'	WHERE id = '$idReduit'");}
				 else {
					echo $id2001 . ' - ' . $clubA2001 .'  '.$f2me."<br/>";
					$idReduit = substr($id2001, -5);
					$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f2me'	WHERE id = '$idReduit'");}
					

				if ($clubA1002 == $clubA2003) {
				echo $id2004 . ' - ' . $clubA2004 . '  '.$f2me."<br/>";
				$idReduit = substr($id2004, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f2me'	WHERE id = '$idReduit'");
			} else {
				echo $id2003 . ' - ' . $clubA2003 .'  '.$f2me."<br/>";
				$idReduit = substr($id2003, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f2me'	WHERE id = '$idReduit'");
			}
									
			}

		elseif ($type == 2)
			{
			demi2019($comite, $division, $annee, $bdd);
			require '../../connect/connexion1.php';
					
			require "insertionBdequipe2.php";		
	
	echo "<br/>";echo "<br/>";		
	
			/*					 
	if ($A1001>$A1002){	
	echo $id1.';'.$annee.';'.$nomDivision.';'.$champ.';'.$clubA1001.';'.$clubA1001.';'.';'.'('.$ligue.')'.';'.$clubA1002.';'.'('.$ligue.")".';'.$A1001.';'.$A1002.';'.$nomLigue.';'.$div.';'.$constante.';'."A";
	echo "<br/>";
	echo $id2 . ';' . $annee . ';' . $nomDivision . ';' . $vice . ';' . $clubA1002 . ';' . $clubA1002 . ';' . ';' . ';' . ';' . '(' . $ligue . ")" . ';' . $A1002 . ';' . $A1001 . ';' . $nomLigue . ';' . $div . ';' . $constante . ';' . "A";
	} else {
	echo $id1.';'.$annee.';'.$nomDivision.';'.$champ.';'.$clubA1002.';'.$clubA1002.';'.';'.'('.$ligue.')'.';'.$clubA1001.';'.'('.$ligue.")".';'.$A1002.';'.$A1001.';'.$nomLigue.';'.$div.';'.$constante.';'."A";
	echo "<br/>";
	echo $id2.';'.$annee.';'.$nomDivision.';'.$vice.';'.$clubA1001.';'.$clubA1001.';'.';'.';'.';'.'('.$ligue.")".';'.$A1001.';'.$A1002.';'.$nomLigue.';'.$div.';'.$constante.';'."A";
	}
	*/
	if ($A1001>$A1002){
	echo "<h2>" . $Champ . "</h2>";
		echo $id1001.' - '.$clubA1001.' '.$champ . "<br/>";
		$idReduit = substr($id1001, -5);
		$bdd->exec("UPDATE bdsaisons SET '$terr_annee' = '$champ'	WHERE id = '$idReduit'");
	echo "<h2>" . $vice . "</h2>";
		echo $id1002 . ' - ' . $clubA1002. ' '.$vice  . "<br/>";
		$idReduit = substr($id1002, -5);
		$bdd->exec("UPDATE bdsaisons SET '$terr_annee' = '$vice'	WHERE id = '$idReduit'");
	} else {
	echo "<h2>" . $champ . "</h2>";
		echo $id1002.' - '.$clubA1002.' '.$champ . "<br/>";
		$idReduit = substr($id1002, -5);
		$bdd->exec("UPDATE bdsaisons SET '$terr_annee' = '$champ'	WHERE id = '$idReduit'");
	echo "<h2>" . $vice . "</h2>";	
		echo $id1001.' - '.$clubA1001. ' '.$vice . "<br/>";
		$idReduit = substr($id1001, -5);
		$bdd->exec("UPDATE bdsaisons SET '$terr_annee' = '$vice'	WHERE id = '$idReduit'");
	}

echo "<h2>".$f2me."</h2>";	

				if ($clubA1001 == $clubA2001){	
					echo $id2002 . ' - ' . $clubA2002.'  '.$f2me."<br/>";
					$idReduit = substr($id2002, -5);
					$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f2me'	WHERE id = '$idReduit'");}
				 else {
					echo $id2001 . ' - ' . $clubA2001 .'  '.$f2me."<br/>";
					$idReduit = substr($id2001, -5);
					$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f2me'	WHERE id = '$idReduit'");}

				if ($clubA1002 == $clubA2003) {
				echo $id2004 . ' - ' . $clubA2004 .'  '.$f2me."<br/>";
				$idReduit = substr($id2004, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f2me'	WHERE id = '$idReduit'");} 
				else {
				echo $id2003 . ' - ' . $clubA2003 .'  '.$f2me."<br/>";
				$idReduit = substr($id2003, -5);
				$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$f2me'	WHERE id = '$idReduit'");}
				
			}
			
		elseif ($type == 1)
			{
				finale2019($comite, $division, $annee, $bdd);
				require '../../connect/connexion1.php';
				echo "<br/>";echo "<br/>";			
				require "insertionBdequipe2.php";	
	/*					 
	if ($A1001>$A1002){	
	echo $id1.';'.$annee.';'.$nomDivision.';'.$champ.';'.$clubA1001.';'.$clubA1001.';'.';'.'('.$ligue.')'.';'.$clubA1002.';'.'('.$ligue.")".';'.$A1001.';'.$A1002.';'.$nomLigue.';'.$div.';'.$constante.';'."A";
	echo "<br/>";
	echo $id2 . ';' . $annee . ';' . $nomDivision . ';' . $vice . ';' . $clubA1002 . ';' . $clubA1002 . ';' . ';' . ';' . ';' . '(' . $ligue . ")" . ';' . $A1002 . ';' . $A1001 . ';' . $nomLigue . ';' . $div . ';' . $constante . ';' . "A";
	} else {
	echo $id1.';'.$annee.';'.$nomDivision.';'.$champ.';'.$clubA1002.';'.$clubA1002.';'.';'.'('.$ligue.')'.';'.$clubA1001.';'.'('.$ligue.")".';'.$A1002.';'.$A1001.';'.$nomLigue.';'.$div.';'.$constante.';'."A";
	echo "<br/>";
	echo $id2.';'.$annee.';'.$nomDivision.';'.$vice.';'.$clubA1001.';'.$clubA1001.';'.';'.';'.';'.'('.$ligue.")".';'.$A1001.';'.$A1002.';'.$nomLigue.';'.$div.';'.$constante.';'."A";
	}
*/
	if ($A1001>$A1002){
	
	echo "<h2>" . $champ. "</h2>";
		echo $id1001.' - '.$clubA1001.' '.$champ  . "<br/>";					
		$idReduit = substr($id1001, -5);
		$bdd->exec("UPDATE bdsaisons SET $terr_annee = '$champ'	WHERE id = '$idReduit'");
	echo "<h2>" . $vice. "</h2>";
		echo $id1002 . ' - ' . $clubA1002. ' '.$vice . "<br/>";
		$idReduit = substr($id1002, -5);
		$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$vice'	WHERE id = '$idReduit'");
		} else {
							
	echo "<h2>" . $champ . "</h2>";
		echo $id1002 . ' - ' . $clubA1002 . ' ' . $champ . "<br/>";
		$idReduit = substr($id1002, -5);
		$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$champ'	WHERE id = '$idReduit'");
	echo "<h2>" . $vice . "</h2>";
		echo $id1001 . ' - ' . $clubA1001 . ' ' . $vice . "<br/>";
		$idReduit = substr($id1001, -5);
		$bdd->exec("UPDATE bdsaisons	SET  $terr_annee = '$vice'	WHERE id = '$idReduit'");	
		}
	} else {
			echo "traitement impossible";
			}		
	}	
}
}
}		
	?>
<br />












 
