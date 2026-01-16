<br>

	<?php

	echo "<h1 class=\"bold center\"> Titres nationaux du comité </h1>"; 
	echo "<div class=\"center\">";
		print("<img src=\"/images/comites/$sigle.jpg\" border=\"0\">");
	echo "</div>";
	?>



<?php
if ($mode == "smart") {

	function palmaresParLigue($sigle, $table, $categorie, $bdd)
	{
		$tabSaison = array();
		$tabDivision = array();
		$tabChampion = array();

		$reponse = $bdd->query("SELECT saison, division, champion  
						FROM $table 
						WHERE comite1='$sigle' 
						AND titre='champion' 
						AND rang2 > 100 
						AND categorie='$categorie' 
						ORDER by saison DESC, rang ASC");
		while ($donnees = $reponse->fetch()) {
			$tabSaison[] = $donnees['saison'];
			$tabDivision[] = $donnees['division'];
			$tabChampion[] = $donnees['champion'];
		}


		$pattern = "/[0-9]{7}/i";
		$tabNom = array();

		for ($i = 0; $i < count($tabChampion); $i++) {

			if (preg_match($pattern, $tabChampion[$i]) == 1) {

				$reponseCode = $bdd->query("SELECT nom_1
										FROM bdclubs 
										WHERE id=' $tabChampion[$i]' ");

				while ($donnees =  $reponseCode->fetch()) {
					$champion = $donnees['nom_1'];
				}

				array_push($tabNom, $champion);
			} else {
				array_push($tabNom, $tabChampion[$i]);
			}
			
			echo "<div class= \"size3  syleArial\">";
			echo  $tabSaison[$i] . " Champion de France " .  $tabDivision[$i] . ' : ' . "</div>";
			echo  "<div class =\"bold center\">" . $tabNom[$i] . "</div>";
			echo "<br>";
		}
	}
}
?>
<!-- palmares Equipes I -- categorie A -->
<h1 class="bold alignLeft"> Equipes Séniors </h1>
<?php palmaresParLigue($sigle, "bdequipe1", "A", $bdd);?>
?>

<br /><br />

<!-- palmares Equipes II -- categorie B -->
<h1 class="bold alignLeft"> Equipes II</h1>
<?php palmaresParLigue($sigle, "bdequipe2",  "B", $bdd); ?>
<br /><br />

<!-- palmares Feminines -- categorie F -->
<h1 class="bold alignLeft"> Equipes Féminines </h1>
<?php palmaresParLigue($sigle, "bdfem", "F", $bdd); ?>
<br /><br />

<!-- palmares Juniors -- categorie D -->
<h1 class="bold alignLeft"> Reichels & Juniors </h1>
<?php palmaresParLigue($sigle, "bdjeunes", "D", $bdd); ?>
<br /><br />

<!-- palmares Cadets -- categorie E -->
<h1 class="bold alignLeft">Cadets </h1>
<?php palmaresParLigue($sigle,  "bdjeunes",  "E", $bdd); ?>

<br /><br />
<!-- palmares Challenges -- categorie C -->
<h1 class="bold alignLeft">Challenges </h1>
<?php palmaresParLigue($sigle, "bdjeunes",  "C", $bdd);
$reponse = $bdd->query("SELECT saison, division, champion  
						FROM bdchallenges 
						WHERE comite1='$sigle'and titre='vainqueur' and categorie='c' 
						ORDER BY saison DESC");
while ($donnees = $reponse->fetch()) {
?><h4>
		<?php echo $donnees['saison']; ?>
		Vainqueur du challenge
		<?php echo $donnees['division']; ?>
		:
		<strong><?php echo $donnees['champion']; ?></strong>
	</h4>
<?php
}

if ($mode =="smart") {
?>
<style>

h1 {font-size: 23px;}

</style>
<?php
}
?>