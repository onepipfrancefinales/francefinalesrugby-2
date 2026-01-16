<?php 
$annee = $_POST['saison'];        
$annee=$_GET['variable_1'];?>
<br><br>
<p id="titre" class="colorBlack"> Finales du Championnat de France<br>
  <?php echo  $annee;?>
  </p>
<br><br>
<p class="annee">Equipes Séniors</p> 
<p class="equipe">
	
	<?php 

	require ("../../connect/connexion1.php") ; 
		
	$reponse =$bdd->query("SELECT division, champion, comite1, vice_champion, comite2, score1, score2 
						   FROM bdequipe1 
						   WHERE saison='$annee' and titre='champion'and championnat='de France'and rang<230 order by rang"); 
							while ($donnees = $reponse->fetch() )
								{ 
									?>
									<strong>
									   <?php echo $donnees['division']." : "; ?>
									</strong>  
									<?php echo $donnees['champion'] ." " .  $donnees['comite1'].  " - ". $donnees['vice_champion']." " . $donnees['comite2']."  " .$donnees['score1']. " - " . $donnees['score2']; ?>
									  
									  <br>  
									<?php
								 }
								 
	?>
</p>
<br><br>
<p class="annee">Equipes Réserves</p> 
<p class="equipe">
	<?php 
	
	$reponse = $bdd->query("SELECT division, champion, comite1, vice_champion, comite2, score1, score2  
						FROM bdequipe2 
						WHERE saison='$annee' and titre='champion' and championnat='de France'and rang<280 and rang>220 order by rang"); 
							while ($donnees = $reponse->fetch() )
								{ 
									?>
									<strong>
									   <?php echo $donnees['division']." : "; ?>
									</strong>  
									<?php echo $donnees['champion'] ." " .  $donnees['comite1'].  " - ". $donnees['vice_champion']." " . $donnees['comite2']."  " .$donnees['score1']. " - " . $donnees['score2']; ?>
									  
									  <br>  
									<?php 
								 }
								 
 	?>
</p>
<br><br>
<p class="annee"> Equipes Féminines </p>
<p class="equipe">
	<?php
	
	 $reponse = $bdd->query("SELECT division, champion, comite1, vice_champion, comite2, score1, score2  
						FROM bdfem 
						WHERE saison='$annee' and titre='champion' and championnat='de France'and rang<310 and rang>270 order by rang"); 
							while ($donnees = $reponse->fetch() )
								{ 
									?>
									<strong>
									   <?php echo $donnees['division']." : "; ?>
									</strong>  
									<?php echo $donnees['champion'] ." " .  $donnees['comite1'].  " - ". $donnees['vice_champion']." " . $donnees['comite2']."  " .$donnees['score1']. " - " . $donnees['score2']; ?>
									  
									  <br>  
									<?php 
								 }
							
						?>
</p>						
<br><br>						
<p class="annee"> Reichels & Juniors </p>
<p class="equipe">
	<?php
	
	 $reponse = $bdd->query("SELECT division, champion, comite1, vice_champion, comite2, score1, score2  
								FROM bdjeunes 
								WHERE saison='$annee' and titre='champion' and championnat='de France'and rang<360 and rang>300 order by rang"); 
									while ($donnees = $reponse->fetch() )
										{ 
											?>
											<strong>
											   <?php echo $donnees['division']." : "; ?>
											</strong>  
											<?php echo $donnees['champion'] ." " .  $donnees['comite1'].  " - ". $donnees['vice_champion']." " . $donnees['comite2']."  " .$donnees['score1']. " - " . $donnees['score2']; ?>
											  
											  <br>  
											<?php 
								 		}
								
	?>
</p>
<br><br>
<p class="annee"> Cadets </p>
<p class="equipe">
	<?php
	/********************************************************************* */
	$minRang = 360;
	$maxRang = 380;
	$table = "bdjeunes"; 
	
	
	palmaresParFinales($annee, $table, $minRang, $maxRang, $bdd);
	
	
	/*
	$tabDivision = array();
	$tabChampion = array();
	$tabComite1 = array();
	$tabViceChampion = array();
	$tabComite2 = array();
	$tabScore1 = array();
	$tabScore2 = array();



	$reponse2 = $bdd->query("SELECT division, champion, comite1, vice_champion, comite2, score1, score2 
						FROM $table
						WHERE saison='$annee' and titre = 'Champion' 
						AND rang < $maxRang and rang >= $minRang 
						AND rang2 < $maxRang and rang2 >= $minRang 
						ORDER BY rang");

	while ($donnees =  $reponse2->fetch()) {
		$tabDivision[] = $donnees['division'];
		$tabChampion[] = $donnees['champion'];
		$tabComite1[] = $donnees['comite1'];
		$tabViceChampion[] = $donnees['vice_champion'];
		$tabComite2[] = $donnees['comite2'];
		$tabScore1[] = $donnees['score1'];
		$tabScore2[] = $donnees['score2'];
	}

	$pattern = "/[0-9]{7}/i";
	$tabNomChamp = array();
	$tabNomVice = array();
	//echo count($tabDivision); echo "<br>";


	for ($i = 0; $i < count($tabDivision); $i++) {

		if (preg_match($pattern, $tabChampion[$i]) == 1) {

			$reponseCode = $bdd->query("SELECT nom_1
										FROM bdclubs 
										WHERE id=' $tabChampion[$i]' ");

			while ($donnees =  $reponseCode->fetch()) {
				$champion = $donnees['nom_1'];
			}
			array_push($tabNomChamp, $champion);
		} else {
			array_push($tabNomChamp, $tabChampion[$i]);
		}
		

		if (preg_match($pattern, $tabViceChampion[$i]) == 1) {

			$reponseCode = $bdd->query("SELECT nom_1
										FROM bdclubs 
										WHERE id=' $tabViceChampion[$i]' ");

			while ($donnees =  $reponseCode->fetch()) {
				$viceChampion = $donnees['nom_1'];
			}
			array_push($tabNomVice, $viceChampion);
		} else {
			array_push($tabNomVice, $tabViceChampion[$i]);
		}

		//echo  $tabDivision[$i] . ' : ' . $tabNomChamp[$i] . ' ' . $tabComite1[$i]. $tabNomVice[$i].$tabComite2.$tabScore1.' - '.$tabScore2;
		//echo "<br>";

		echo  $tabDivision[$i] . ' : ' . $tabNomChamp[$i] . ' ' . $tabComite1[$i].' - '. $tabNomVice[$i] . ' ' .$tabComite2[$i].' '.$tabScore1[$i].' - '.$tabScore2[$i];
		echo "<br>";
	}
	
*/











	/*
	
	
	
	
	$reponse = $bdd->query("SELECT division, champion, comite1, vice_champion, comite2, score1, score2  
						FROM bdjeunes 
						WHERE saison='$annee' and titre='champion' and championnat='de France'and rang<380 and rang>=360 order by rang"); 
							while ($donnees = $reponse->fetch() )
								{ 
									?>
									<strong>
											<?php echo $donnees['division']." : "; ?>
										</strong>  
									<?php echo $donnees['champion'] ." " .  $donnees['comite1'].  " - ". $donnees['vice_champion']." " . $donnees['comite2']."  " .$donnees['score1']. " - " . $donnees['score2']; ?>	  
									<br>  
									<?php 
								}
							
		*/					










/********************************************************************* */
?>
</p>
<br><br>
<p class="annee"> Challenges </p>
<p class="equipe">
<?php

$reponse = $bdd->query("SELECT division, champion, comite1, vice_champion, comite2, score1, score2  
						 FROM bdchallenges 
						 WHERE saison='$annee' and titre='vainqueur' and rang>370 order by rang"); 
							while ($donnees = $reponse->fetch() )
								{ 
									?>
									<strong>
										<?php echo $donnees['division']." : "; ?>
									</strong>  
									<?php echo $donnees['champion'] ." " .  $donnees['comite1'].  " - ". $donnees['vice_champion']." " . $donnees['comite2']."  " .$donnees['score1']. " - " . $donnees['score2']; ?>	  
									<br>  
									<?php 
							
							
								}
								
		 require("../../pub/pub_carre.php");	
								
 ?>
</p>