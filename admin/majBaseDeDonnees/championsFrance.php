<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset=UTF-8>
</head>

<body>






	<a href="accueil.php">retour Accueil </a>
	<?php
	require '../../connect/connexion1.php';
	if (isset($_GET['annee']))
		$annee = $_GET['annee'];
	if (isset($_GET['division']))
		$division = $_GET['division'];
	else
		$division = 110;
	//$annee = $saison;
	
	//$annee=2022;
	if ($annee < 2023)
		$anneePlus = 0;
	else
		$anneePlus = $annee;

	require 'choixDivision.php';


	// intitulé 
	
	$pff32me = "32me de finale du champ de France";
	$pff16me = "16me de finale du champ de France";
	$pff08me = "8me de finale du champ de France";
	$pff04me = "Quart de finale du champ de France";
	$pff02me = "Demi finale du champ de France";
	$pffVice = "Vice champion de France";
	$pffCham = "Champion de France";

//	if (isset($nomDivision));	else	$nomDivision = "";

	$reponse = $bdd->query("SELECT division, annee
								FROM bddivisions
								WHERE id = $division  
								ORDER BY `annee` ASC");

	while ($row = $reponse->fetch()) {
		$nomDivision = $row[0];
	}

	//	nbre d'iteration
	$requete = $bdd->query("SELECT COUNT(*) 		   
		      FROM bddivisions		
			   WHERE id = $division");

	$nb_equipe = $requete->fetch();

	echo "<br />";
	echo "nb_equipe : " . $nb_equipe[0];
	echo "<br />";
	echo "id_division : " . $division;
	echo "<br />";
	echo "nom division : " . $nomDivision;
	echo "<br />";
	echo "-------------";
	echo "<br />";
	// calcul de la variable : $anneePlus
	if ($nb_equipe[0] > 1) {

		$requete = $bdd->query("SELECT MAX(annee) 
	FROM bddivisions
	WHERE id = $division");

		$annee_max = $requete->fetch();
		echo "annee_max : " . $annee_max[0];
		echo "<br />";

	} else {

		$annee_max = 0;
		echo "annee_max :  0";
		echo "<br />";
	}


	// si sup > 1 prendre  annee la plus importante
/*
$reponse = $bdd->query("SELECT division
								FROM bddivisions
								WHERE id = $division and annee = $annee_max ");
									
			while ($row = $reponse->fetch() )
				{ 
				$nomDivision = $row[0];
				}

*/


	//***** SENIORS **********
	

	require("../../phases_finales2019/fonctionsChampFrance2019.php");
	trenteDeuxieme2019($division, $annee, $bdd);

	$tabEquipe = array();
	$tab32me = array();
	$tab32meElim = array();
	$tab16me = array();
	$tab16meElim = array();
	$tab8me = array();
	$tab8meElim = array();
	$tab4me = array();
	$tab4meElim = array();
	$tab2me = array();
	$tab2meElim = array();
	$tabFinale = array();
	$tabFinaleElim = array();
	$tabFinaleChamp = array();

	echo "<br />";
	for ($i = 1; $i <= 64; $i++) {
		if ($i < 10)
			$equipe = "E0" . $i;
		else
			$equipe = "E" . $i;

		if (isset($equipe))
			;
		else
			$equipe = 0;

		$reponse = $bdd->query("SELECT $equipe, type
								FROM bdpffrance
								WHERE id = $division and saison = $annee ");

		while ($row = $reponse->fetch()) {
			$tabEquipe[] = $row[0];
			$type = $row[1];
		}
	}

	echo "<br/>";
	echo "type : " . $type;
	echo "<br />";
	echo "<br />";
	echo "<hr/>";
	/*
	   echo substr($type, 1, 2);
	   echo "<br />";
	   echo substr($type, 3, 2);
	   echo "<br />";
	   echo substr($type, 5, 2);
	   echo "<br />";
	   echo substr($type, 7, 2);
	   echo "<br />";
	   echo substr($type, 9, 2);
	   echo "<br />";
	   */
	/*
	   echo "Tableau des equipes engagées";
	   echo "<br/>";
	   for ($i = 0; $i <= 63; $i++)	
	   {	echo  $tabEquipe[$i];echo "<br />";}
	   echo "<br/>";
	   echo "---*-*-*-*-*-*-*-*-*-*-*-*";
	   echo "<br/>";
	   */



	if (substr($type, 1, 2) == 64 or substr($type, 1, 2) == 32) {
		for ($i = 0; $i <= 63; $i++)
			array_push($tab32me, $tabEquipe[$i]);
	} elseif (substr($type, 3, 2) == 32 or substr($type, 3, 2) == 16) {
		for ($i = 0; $i <= 31; $i++)
			array_push($tab16me, $tabEquipe[$i]);
	} elseif (substr($type, 5, 2) == 16 or substr($type, 5, 2) == 8) {
		for ($i = 0; $i <= 15; $i++)
			array_push($tab8me, $tabEquipe[$i]);
	} elseif (substr($type, 7, 2) == 8 or substr($type, 7, 2) == 4) {
		for ($i = 0; $i <= 7; $i++)
			array_push($tab4me, $tabEquipe[$i]);
	} elseif (substr($type, 9, 2) == 4 or substr($type, 9, 2) == 2) {
		for ($i = 0; $i <= 3; $i++)
			array_push($tab2me, $tabEquipe[$i]);
	}

	for ($club32me = 3201; $club32me < 3265; $club32me++) {
		if (isset(${"clubA" . $club32me}))
			;
		else
			${"clubA" . $club32me} = 0;
	}
	// traitement des 32me de finale
	
	for (
		$club32me = 3201, $club16me = 1601, $club1 = 0, $club2 = 1;
		$club32me < 3265, $club16me < 1633, $club1 < 65, $club2 < 65;
		$club32me = $club32me + 2, $club16me++, $club1 = $club1 + 2, $club2 = $club2 + 2
	) {

		if (isset($tab32me[$club1]))
			;
		else
			$tab32me[$club1] = 0;
		if (isset($tab32me[$club2]))
			;
		else
			$tab32me[$club2] = 0;

		if (${"clubA" . $club32me} == ${"clubA" . $club16me}) {
			//echo $tabEquipe[$club2];
			array_push($tab32meElim, $tab32me[$club2]);
			array_push($tab16me, $tab32me[$club1]);
		} else {
			//echo $tabEquipe[$club1];
			array_push($tab32meElim, $tab32me[$club1]);
			array_push($tab16me, $tab32me[$club2]);
		}
	}


	// traitement des 16me de finale
	for ($club16me = 1601, $club8me = 8001, $club1 = 0, $club2 = 1; $club16me < 1633, $club8me < 8017, $club1 < 33, $club2 < 33; $club16me = $club16me + 2, $club8me++, $club1 = $club1 + 2, $club2 = $club2 + 2) {

		if (isset($tab16me[$club1]))
			;
		else
			$tab16me[$club1] = 0;
		if (isset($tab16me[$club2]))
			;
		else
			$tab16me[$club2] = 0;

		if (${"clubA" . $club16me} == ${"clubA" . $club8me}) {
			//echo $tabEquipe[$club2];
			array_push($tab16meElim, $tab16me[$club2]);
			array_push($tab8me, $tab16me[$club1]);
		} else {
			//echo $tabEquipe[$club1];
			array_push($tab16meElim, $tab16me[$club1]);
			array_push($tab8me, $tab16me[$club2]);
		}
	}

	// traitement des 8me de finale
	for ($club8me = 8001, $club4me = 4001, $club1 = 0, $club2 = 1; $club8me < 8017, $club4me < 4008, $club1 < 17, $club2 < 17; $club8me = $club8me + 2, $club4me++, $club1 = $club1 + 2, $club2 = $club2 + 2) {

		if (isset($tab8me[$club1]))
			;
		else
			$tab8me[$club1] = 0;
		if (isset($tab8me[$club2]))
			;
		else
			$tab8me[$club2] = 0;

		if (${"clubA" . $club8me} == ${"clubA" . $club4me}) {
			//echo $tabEquipe[$club2];
			array_push($tab8meElim, $tab8me[$club2]);
			array_push($tab4me, $tab8me[$club1]);
		} else {
			//echo $tabEquipe[$club1];
			array_push($tab8meElim, $tab8me[$club1]);
			array_push($tab4me, $tab8me[$club2]);
		}
	}

	// traitement des quarts de finale
	for ($club4me = 4001, $club2me = 2001, $club1 = 0, $club2 = 1; $club4me < 4009, $club2me < 2005, $club1 < 9, $club2 < 9; $club4me = $club4me + 2, $club2me++, $club1 = $club1 + 2, $club2 = $club2 + 2) {
		if (${"clubA" . $club4me} == ${"clubA" . $club2me}) {
			//echo $tabEquipe[$club2];
			array_push($tab4meElim, $tab4me[$club2]);
			array_push($tab2me, $tab4me[$club1]);
		} else {
			//echo $tabEquipe[$club1];
			array_push($tab4meElim, $tab4me[$club1]);
			array_push($tab2me, $tab4me[$club2]);
		}
	}

	// traitement des demies
	for ($club2me = 2001, $club1me = 1001, $club1 = 0, $club2 = 1; $club2me < 2005, $club1me < 1003, $club1 < 4, $club2 < 4; $club2me = $club2me + 2, $club1me++, $club1 = $club1 + 2, $club2 = $club2 + 2) {
		if (${"clubA" . $club2me} == ${"clubA" . $club1me}) {
			array_push($tab2meElim, $tab2me[$club2]);
			array_push($tabFinale, $tab2me[$club1]);
		} else {
			array_push($tab2meElim, $tab2me[$club1]);
			array_push($tabFinale, $tab2me[$club2]);
		}
	}

	// traitement du champion
	if ($A1001 > $A1002) {
		$champion = $tabFinale[0];
		$viceChampion = $tabFinale[1];
		$score1 = $A1001;
		$score2 = $A1002;
		array_push($tabFinaleElim, $tabFinale[1]);
		array_push($tabFinaleChamp, $tabFinale[0]);
	} else {
		$champion = $tabFinale[1];
		$viceChampion = $tabFinale[0];
		$score1 = $A1002;
		$score2 = $A1001;
		array_push($tabFinaleElim, $tabFinale[0]);
		array_push($tabFinaleChamp, $tabFinale[1]);
	}


	if (substr($type, 1, 2) == 32 or substr($type, 1, 2) == 64)
		$max = 64;
	elseif (substr($type, 3, 2) == 16 or substr($type, 3, 2) == 32)
		$max = 32;
	elseif (substr($type, 5, 2) == 8 or substr($type, 5, 2) == 16)
		$max = 16;
	elseif (substr($type, 7, 2) == 4 or substr($type, 7, 2) == 8)
		$max = 8;
	elseif (substr($type, 9, 2) == 2 or substr($type, 9, 2) == 4)
		$max = 4;
	?>
	<table>
		<tr>
			<td align="center"> Equipes engagées</td>
			<td align="center"> Eliminées <br /> en 32me</td>
			<td align="center"> Eliminées <br /> en 16me</td>
			<td align="center"> Eliminées <br /> en 8me</td>
			<td align="center"> Eliminées <br /> en Quarts</td>
			<td align="center"> Eliminées <br /> en demies</td>
			<td align="center"> Vice champion</td>
			<td align="center">Champion</td>
		</tr>
		<tr>
			<td align="center">
				<?php echo $max; ?>
			</td>
			<td align="center">
				<?php echo count($tab32meElim); ?>
			</td>
			<td align="center">
				<?php echo count($tab16meElim); ?>
			</td>
			<td align="center">
				<?php echo count($tab8meElim); ?>
			</td>
			<td align="center">
				<?php echo count($tab4meElim); ?>
			</td>
			<td align="center">
				<?php echo count($tab2meElim); ?>
			</td>
			<td align="center">
				<?php echo count($tabFinaleElim); ?>
			</td>
			<td align="center">
				<?php echo count($tabFinaleChamp); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php $tabNomEquipe = array();
				foreach ($tabEquipe as $idEquipe) {
					if (isset($idEquipe))
						;
					else
						$idEquipe = 0;
					$reponse = $bdd->query("SELECT nom_1
						FROM bdclubs
						WHERE id = $idEquipe ");

					while ($row = $reponse->fetch()) {
						$tabNomEquipe[] = $row[0];
					}
				}

				for ($i = 0; $i < $max; $i++) {

					echo $tabEquipe[$i] . " " . $tabNomEquipe[$i] . "<br/>";
				} ?>
			</td>
			<td>
				<?php
				//Eliminées en 32me	
				if (substr($type, 1, 2) == 32 or substr($type, 1, 2) == 64) {
					$tabNomEquipe = array();
					foreach ($tab32meElim as $idEquipe) {
						$reponse = $bdd->query("SELECT nom_1
						FROM bdclubs
						WHERE id = $idEquipe ");
						while ($row = $reponse->fetch()) {
							$tabNomEquipe[] = $row[0];
						}
					}
					for ($i = 0; $i < 32; $i++) {
						echo $tab32meElim[$i] . " " . $tabNomEquipe[$i] . "<br/>";
					}
				} ?>
			</td>
			<td>
				<?php
				if (substr($type, 3, 2) == 16 or substr($type, 3, 2) == 32) {
					//Eliminées en 16me
					$tabNomEquipe = array();
					foreach ($tab16meElim as $idEquipe) {
						$reponse = $bdd->query("SELECT nom_1
						FROM bdclubs
						WHERE id = $idEquipe ");
						while ($row = $reponse->fetch()) {
							$tabNomEquipe[] = $row[0];
						}
					}
					for ($i = 0; $i < 16; $i++) {
						echo $tab16meElim[$i] . " " . $tabNomEquipe[$i] . "<br/>";
					}
				} ?>
			</td>
			<td>
				<?php
				if (substr($type, 5, 2) == 8 or substr($type, 5, 2) == 16) {

					//Eliminées en 8me	
					$tabNomEquipe = array();
					foreach ($tab8meElim as $idEquipe) {
						$reponse = $bdd->query("SELECT nom_1
						FROM bdclubs
						WHERE id = $idEquipe ");
						while ($row = $reponse->fetch()) {
							$tabNomEquipe[] = $row[0];
						}
					}
					for ($i = 0; $i < 8; $i++) {
						echo $tab8meElim[$i] . " " . $tabNomEquipe[$i] . "<br/>";
					}
				}
				?>
			</td>
			<td>
				<?php
				//Eliminées en quarts	
				$tabNomEquipe = array();
				foreach ($tab4meElim as $idEquipe) {
					$reponse = $bdd->query("SELECT nom_1
						FROM bdclubs
						WHERE id = $idEquipe ");
					while ($row = $reponse->fetch()) {
						$tabNomEquipe[] = $row[0];
					}
				}
				for ($i = 0; $i < 4; $i++) {
					echo $tab4meElim[$i] . " " . $tabNomEquipe[$i] . "<br/>";
				} ?>
			</td>
			<td>
				<?php $tabNomEquipe = array();
				foreach ($tab2meElim as $idEquipe) {
					$reponse = $bdd->query("SELECT nom_1
						FROM bdclubs
						WHERE id = $idEquipe ");
					while ($row = $reponse->fetch()) {
						$tabNomEquipe[] = $row[0];
					}
				}
				for ($i = 0; $i < 2; $i++) {
					echo $tab2meElim[$i] . " " . $tabNomEquipe[$i] . "<br/>";
				} ?>
			</td>
			<td>
				<?php
				$reponse = $bdd->query("SELECT nom_1
						FROM bdclubs
						WHERE id = $viceChampion ");
				while ($row = $reponse->fetch()) {
					$nomEquipeVice = $row[0];
				}
				echo $viceChampion . " " . $nomEquipeVice; ?>
			</td>
			<td>
				<?php
				$reponse = $bdd->query("SELECT nom_1
						FROM bdclubs
						WHERE id = $champion ");
				while ($row = $reponse->fetch()) {
					$nomEquipeChamp = $row[0];
				}
				echo $champion . " " . $nomEquipeChamp; ?>
			</td>
		</tr>


	</table>
	<hr />
	<form name="form1" method="post"
		action="championsFrance.php?division=<?php echo $division; ?>&annee=<?php echo $annee; ?>&enreg=true">
		<input type="submit" name="Submit" value="Enregistrer en base">
	</form>
	<?php


	if (isset($_GET['enreg']))
		$enreg = $_GET['enreg'];
	else
		$enreg = false;

	if ($enreg == true) {

		echo "Enregistrement des 32me, de 16me; des quarts; des demies et de la finale
dans la table bdsaison";
		echo "<br/>";

		echo "<br/>";


		// ENREGISTREMENTS DANS LA TABLE BDSAISONS

		if ($division < 170)
		//110,120,130,135,140,150,160
			$colonneACompleter = "terr_" . $annee;
		else
			// 170,180,190,200,210,220, 230,240,250,260,270
			$colonneACompleter = "france_" . $annee;



		$tabEliminees = [$tab32meElim, $tab16meElim, $tab8meElim, $tab4meElim, $tab2meElim, $tabFinaleElim];
		foreach ($tabEliminees as $eliminees) {
			echo "<br/>";
			if (count($eliminees) == 32)
				$message = $pff32me . ' ' . $nomDivision;
			elseif (count($eliminees) == 16)
				$message = $pff16me . ' ' . $nomDivision;
			elseif (count($eliminees) == 8)
				$message = $pff08me . ' ' . $nomDivision;
			elseif (count($eliminees) == 4)
				$message = $pff04me . ' ' . $nomDivision;
			elseif (count($eliminees) == 2)
				$message = $pff02me . ' ' . $nomDivision;
			elseif (count($eliminees) == 1)
				$message = $pffVice . ' ' . $nomDivision;
			//	elseif (count($eliminees) == 1)  $message = "Champion de France".' '.$nomDivision;
			echo "<br/>";


			foreach ($eliminees as $equipe) {

				$equipeIdReduit = substr($equipe, 2, 5);
				//	echo $equipeIdReduit.' '.$message;	echo "<br/>";
	
				$bdd->exec("UPDATE bdsaisons
			SET $colonneACompleter = '$message'
			WHERE id = '$equipeIdReduit'");

				echo $equipeIdReduit . " " . $message . "<br/>";
			}

		}
		echo "<br/>";
		echo "<br/>";
		
		//  traitement du champion
		
		//echo "--------------";
		//echo "<br/>";
		/*
		echo "message : " . $message;
		echo "<br/>";
		echo "champion : " . $tabFinaleChamp[0];
		echo "<br/>";
		echo "division : " . $nomDivision;
		echo "<br/>";
		echo "colonne à completer :" . $colonneACompleter;
		echo "<br/>";
		*/
		$equipeIdReduit = substr($tabFinaleChamp[0], 2, 5);
		
		/*
		echo "Equipe réduit : " . $equipeIdReduit;
		echo "<br/>";
		echo "--------------";
		echo "<br/>";
*/
		//	echo $equipeIdReduit.' '.$message.' '.$nomDivision;	echo "<br/>";
		$message = "Champion de France";
		$messageChampion = $message . ' ' . $nomDivision;

		$bdd->exec("UPDATE bdsaisons
			SET $colonneACompleter = '$messageChampion'
			WHERE id = '$equipeIdReduit'  ");


		echo substr($tabFinaleChamp[0], 2, 5) . ' ' . $message . ' ' . $nomDivision;
		echo "<hr/>";




		$idLigue1 = substr($tabFinaleChamp[0], 0, 2);
		$idLigue2 = substr($tabFinaleElim[0], 0, 2);

		$reponse = $bdd->query("SELECT sigle
						FROM bdligue
						WHERE id = '$idLigue1' ");
		while ($row = $reponse->fetch()) {
			$ligue1 = $row[0];
		}
		$reponse = $bdd->query("SELECT sigle
						FROM bdligue
						WHERE id = '$idLigue2' ");
		while ($row = $reponse->fetch()) {
			$ligue2 = $row[0];
		}

		$clubChampion = $tabFinaleChamp[0];
		$clubViceChampion = $tabFinaleElim[0];
		$titreNational = "de France";
		$idLigue = substr($tabFinaleChamp[0], 0, 2);
		$id1 = ($annee * 1000000) + (990 * 1000) + $division;
		$id2 = $id1 + 1;

		$division = substr($division, -3);
		$ligue1 = "(" . $ligue1 . ")";
		$ligue2 = "(" . $ligue2 . ")";




// ENREGISTREMENT DANS LES TABLES BDSENIORS I ET II, BDFEM ET BDJEUNES

		//equipe 1 bdequipe1 (110,120,135,140,150,160,170,180,190,200,210,220)
		if ($division < 225) {

			echo "<br/>";
			echo " Enregistrement de la finale dans la table bdequipeI ";
			echo "<br/>";

			echo "<br/>";
			echo $id1 . ';' . $annee . ';' . $nomDivision . ';' . "Champion" . ';' . $nomEquipeChamp . ';' . $nomEquipeChamp . ';' . $nomEquipeChamp . ';'
			 . '(' . $ligue1 . ')' . ';' . $nomEquipeVice . ';' . '(' . $ligue2 . ")" . ';' . $score1 . ';' . $score2 . ';' . $titreNational . ';' . substr($division, -3) . ';' . substr($division, -3) . ';' . "A", 'commentaire';
			echo "<br />";
			echo $id2 . ';' . $annee . ';' . $nomDivision . ';' . "Vice champion" . ';' . $nomEquipeVice . ';' . $nomEquipeVice . ';' . $nomEquipeVice . ';'
			 . ';' . ';' . '(' . $ligue2 . ")" . ';' . $score1 . ';' . $score2 . ';' . $titreNational . ';' . substr($division, -3) . ';' . substr($division, -3) . ';' . "A", 'commentaire';

			$bdd->exec("INSERT INTO  bdequipe1
			VALUES ( '$id1', '$annee', '$nomDivision', 'Champion', '$nomEquipeChamp', '$nomEquipeChamp', '$nomEquipeChamp',
			'$ligue1', '$nomEquipeVice', '$ligue2', '$score1', '$score2', '$titreNational', '$division', '$division', 'A', ''),
			
			 ( '$id2', '$annee', '$nomDivision', 'Vice champion', '$nomEquipeVice', '$nomEquipeVice', '$nomEquipeVice',
			'$ligue2', '-', '-', '$score1', '$score2', '$titreNational', '$division', '$division', 'A', '')
			 ");

		} elseif ($division > 220 and $division < 280 ) {


			echo "<br/>";
			echo " Enregistrement de la finale dans la table bdequipe2 ";
			echo "<br/>";
			//equipe 2 bdequipe2 (225,230,240,250,260,270)
	
			echo $id1 . ';' . $annee . ';' . $nomDivision . ';' . "Champion" . ';' . $nomEquipeChamp . ';' . $nomEquipeChamp . ';' . $nomEquipeChamp . ';' . '(' . $ligue1 . ')' . ';' . $nomEquipeVice . ';' . '(' . $ligue2 . ")" . ';' . $score1 . ';' . $score2 . ';' . $titreNational . ';' . substr($division, -3) . ';' . substr($division, -3) . ';' . "B", 'commentaire';
			echo "<br />";
			echo $id2 . ';' . $annee . ';' . $nomDivision . ';' . "Vice champion" . ';' . $nomEquipeVice . ';' . $nomEquipeVice . ';' . $nomEquipeVice . ';' . ';' . ';' . '(' . $ligue2 . ")" . ';' . $score1 . ';' . $score2 . ';' . $titreNational . ';' . substr($division, -3) . ';' . substr($division, -3) . ';' . "B", 'commentaire';

			$bdd->exec("INSERT INTO  bdequipe2
			VALUES ( '$id1', '$annee', '$nomDivision', 'Champion', '$nomEquipeChamp', '$nomEquipeChamp', '$nomEquipeChamp',
			'$ligue1', '$nomEquipeVice', '$ligue2', '$score1', '$score2', '$titreNational', '$division', '$division', 'B', ''),
			
			 ( '$id2', '$annee', '$nomDivision', 'Vice champion', '$nomEquipeVice', '$nomEquipeVice', '$nomEquipeVice',
			'$ligue2', '-', '-', '$score1', '$score2', '$titreNational', '$division', '$division', 'B', '')
			 ");



		} elseif ($division > 270 and $division < 320) {
			echo "<br/>";
			echo " Enregistrement de la finale dans la table bdfem ";
			echo "<br/>";
			//fem bdfem (280,285,290,295)
	
			echo $id1 . ';' . $annee . ';' . $nomDivision . ';' . "Champion" . ';' . $nomEquipeChamp . ';' . $nomEquipeChamp . ';' . $nomEquipeChamp . ';' . '(' . $ligue1 . ')' . ';' . $nomEquipeVice . ';' . '(' . $ligue2 . ")" . ';' . $score1 . ';' . $score2 . ';' . $titreNational . ';' . substr($division, -3) . ';' . substr($division, -3) . ';' . "F". ';' . 'commentaire';
			echo "<br />";
			echo $id2 . ';' . $annee . ';' . $nomDivision . ';' . "Vice champion" . ';' . $nomEquipeVice . ';' . $nomEquipeVice . ';' . $nomEquipeVice . ';' . ';' . ';' . '(' . $ligue2 . ")" . ';' . $score1 . ';' . $score2 . ';' . $titreNational . ';' . substr($division, -3) . ';' . substr($division, -3) . ';' . "F". ';' . 'commentaire';

			$bdd->exec("INSERT INTO  bdfem
			VALUES ( '$id1', '$annee', '$nomDivision', 'Champion', '$nomEquipeChamp', '$nomEquipeChamp', '$nomEquipeChamp',
			'$ligue1', '$nomEquipeVice', '$ligue2', '$score1', '$score2', '$titreNational', '$division', '$division', 'F', ''),
			
			 ( '$id2', '$annee', '$nomDivision', 'Vice champion', '$nomEquipeVice', '$nomEquipeVice', '$nomEquipeVice',
			'$ligue2', '-', '-', '$score1', '$score2', '$titreNational', '$division', '$division', 'F', '')
			 ");

		} elseif ($division > 320 and $division < 380) {
		
			echo " Enregistrement de la finale dans la table bdjeunes ";
			echo "<br/>";
			//jeunes bdjeunes (juniors --> 325, 330 ----- cadets --> 360, 365, 370)
			if ($division < 360)	$constante = "D";	else	$constante = "E";
		
			echo $id1 . ';' . $annee . ';' . $nomDivision . ';' . "Champion" . ';' . $nomEquipeChamp . ';' . $nomEquipeChamp . ';' . $nomEquipeChamp . ';' . '(' . $ligue1 . ')' . ';' . $nomEquipeVice . ';' . '(' . $ligue2 . ")" . ';' . $score1 . ';' . $score2 . ';' . $titreNational . ';' . substr($division, -3) . ';' . substr($division, -3) . ';' . $constante.';'. 'commentaire';
			echo "<br />";
			echo $id2 . ';' . $annee . ';' . $nomDivision . ';' . "Vice champion" . ';' . $nomEquipeVice . ';' . $nomEquipeVice . ';' . $nomEquipeVice . ';' . ';' . ';' . '(' . $ligue2 . ")" . ';' . $score1 . ';' . $score2 . ';' . $titreNational . ';' . substr($division, -3) . ';' . substr($division, -3) . ';' . $constante .';'. 'commentaire';

			$bdd->exec("INSERT INTO  bdjeunes
			VALUES ( '$id1', '$annee', '$nomDivision', 'Champion', '$nomEquipeChamp', '$nomEquipeChamp', '$nomEquipeChamp',
			'$ligue1', '$nomEquipeVice', '$ligue2', '$score1', '$score2', '$titreNational', '$division', '$division', '$constante', ''),
			
			 ( '$id2', '$annee', '$nomDivision', 'Vice champion', '$nomEquipeVice', '$nomEquipeVice', '$nomEquipeVice',
			'$ligue2', '-', '-', '$score1', '$score2', '$titreNational', '$division', '$division','$constante', '')
			 ");

		}
	}
	?>

</body>

</html>