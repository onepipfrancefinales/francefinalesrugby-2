	<?php
    require '../../connect/connexion1.php';
		$reponse = $bdd->query(" SELECT COUNT(*)
					FROM bdequipe1
					WHERE id = '$id1'");

		$row=$reponse->fetch();
		$cpte= $row[0]; 
		//echo $cpte;
						echo "<br />";

 if (isset($ligueP))    ;    else   $ligueP = "inconnu";
			$ligueP = "(" . $ligue . ")";		

		if ($A1001>$A1002){	
		echo $id1 . ';' . $annee . ';' . $nomDivision. ';' . 'Champion'.';'.$clubA1001.';'.$clubA1001.';'.';'.'('.$ligue.')'.';'.$clubA1002.';'.'('.$ligue.")".';'.$A1001.';'.$A1002.';'.$nomLigue.';'.$div.';'.$constante.';'."A";
		echo "<br/>"; 
		echo $id2 . ';' . $annee . ';' . $nomDivision . ';' .'Vice champion' . ';' . $clubA1002 . ';' . $clubA1002 . ';' . ';' . ';' . ';' . '(' . $ligue . ")" . ';' . $A1002 . ';' . $A1001 . ';' . $nomLigue . ';' . $div . ';' . $constante . ';' . "A";

       
			

		if ($cpte == 1){

		$bdd->exec("UPDATE bdequipe1
			SET  id='$id1', saison='$annee', division='$nomDivision', titre='Champion', champion='$clubA1001', entente='$clubA1001', champion_entente = ' ', comite1 ='$ligueP',
			vice_champion='$clubA1002', comite2='$ligueP', score1='$A1001',	score2='$A1002', championnat ='$nomLigue', rang='$div',	rang2='$constante', categorie='$div'
			WHERE id = $id1");

		$bdd->exec("UPDATE bdequipe1
			SET id='$id2',	saison='$annee', division='$nomDivision', titre='Vice champion', champion='$clubA1002', entente='$clubA1002',	champion_entente=' ', comite1='$ligueP',
			vice_champion=' ',	      comite2='$ligueP', score1='$A1002', score2='$A1001', championnat='$nomLigue', rang= '$div', rang2='$constante', categorie='$div'
			WHERE id = $id2");

		} 	
		else
	 {
		$bdd->exec("INSERT INTO bdequipe1
			VALUES ( '$id1','$annee',	'$nomDivision',	'Champion',	'$clubA1001','$clubA1001',' ','$ligueP',
			'$clubA1002', '$ligueP',	'$A1001',	'$A1002',	'$nomLigue','$div',	'$constante','$div')");

		$bdd->exec("INSERT INTO bdequipe1
			VALUES ( 	'$id2',		'$annee','$nomDivision','Vice champion','$clubA1002','$clubA1002',	' ','$ligueP',
			' ',	'$ligueP','$A1002','$A1001','$nomLigue', '$div','$constante','$div')");

	}		
} 
else 
{
	echo $id1.';'.$annee.';'.$nomDivision.';'.'Champion'.';'.$clubA1002.';'.$clubA1002.';'.';'.'('.$ligue.')'.';'.$clubA1001.';'.'('.$ligue.")".';'.$A1002.';'.$A1001.';'.$nomLigue.';'.$div.';'.$constante.';'."A";
	echo "<br/>";
	echo $id2.';'.$annee.';'.$nomDivision.';'.$vice.';'.$clubA1001.';'.$clubA1001.';'.';'.';'.';'.'('.$ligue.")".';'.$A1001.';'.$A1002.';'.$nomLigue.';'.$div.';'.$constante.';'."A";


	if ($cpte == 1){

		$bdd->exec("UPDATE bdequipe1
			SET  id='$id1',saison='$annee',	division='$nomDivision',	titre='Champion',	champion='$clubA1002', entente='$clubA1002', champion_entente=' ',comite1 ='$ligueP',
			vice_champion='$clubA1001', comite2='$ligueP',	score1='$A1002',	score2='$A1001',	championnat ='$nomLigue',rang='$div',	rang2='$constante',categorie='$div'
			WHERE id = $id1");

		$bdd->exec("UPDATE bdequipe1
			SET  	id='$id2',		saison='$annee',division='$nomDivision',titre='Vice champion',champion='$clubA1001',entente='$clubA1001',	champion_entente=' ',comite1='$ligueP',
			vice_champion=' ',	comite2='$ligueP',score1='$A1001', score2='$A1002',championnat='$nomLigue',rang= '$div',rang2='$constante',categorie='$div'
			WHERE id = $id2");

	} else {

		$bdd->exec("INSERT INTO bdequipe1
			VALUES ('$id1',		'$annee',		'$nomDivision',	'Champion',	'$clubA1002',	'$clubA1002',	' ','$ligueP',
			'$clubA1001',	'$ligueP',	'$A1002',	'$A1001',	'$nomLigue',	'$div',	'$constante','$div')");

		$bdd->exec("INSERT INTO bdequipe1
			VALUES ( 	'$id2',	'$annee',	'$nomDivision',	'Vice champion', '$clubA1001',	'$clubA1001',	' ', '$ligueP',
			'',	'$ligueP',	'$A1001', '$A1002','$nomLigue',	'$div',	'$constante','$div')");

	}		
	
}