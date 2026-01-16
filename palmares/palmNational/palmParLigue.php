<br ><br>

<?php
echo "<h1><p> <strong> Titres nationaux de la ligue <br />".$nomLigue."</strong></p></h1>";

{print("<img src=\"../../images/ligues/$sigleLigue.jpg\" border=\"0\">");}

$sigle = "(".$sigleLigue.")"; 



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
		echo "<h4>";
		echo  $tabSaison[$i] . " Champion de France " .  $tabDivision[$i] . ' : ' . "<strong>" . $tabNom[$i] . "</strong>";
		echo "</h4>";
	}
}
}
?>

<br><br><br>
<h1>
	<?php echo " <strong> Equipes Séniors</strong>"; ?>  
</h1>
<?php
 // *******         Affichage du palmares A             **********************
 $table = "bdequipe1";
 $categorie ="A";
 
 palmaresParLigue($sigle, $table, $categorie, $bdd);
?>

<br /><br />
<h1>
	<?php echo "<strong> Equipes II </strong>";?>
</h1>

<?php //*******************       Palmares de la categorie B      *******************
$table = "bdequipe2";
$categorie ="B";

palmaresParLigue($sigle, $table, $categorie, $bdd);
 ?>
<br /><br />
<h1>
	<?php echo "<strong> Equipes Féminines </strong>";?>
</h1>
<?php
//*********      palmares de la categorie F     ****************
$table = "bdfem";
$categorie ="F";

palmaresParLigue($sigle, $table, $categorie, $bdd);
?>
<br><br>
<h1>
<?php echo " <strong> Reichels & Juniors <BR/></strong>";?>
</h1>

<?php
//********   Palmares de la categorie D  **********
$table = "bdjeunes";
$categorie ="D";

palmaresParLigue($sigle, $table, $categorie, $bdd);
?>

											
<br><br >

<h1>						 
<?php echo " <strong> Cadets </strong>"; ?>
</h1>

<?php
//********* palmares de la categorie E ********
$table = "bdjeunes";
$categorie ="E";

palmaresParLigue($sigle, $table, $categorie, $bdd);
?>
<br><br >										 
