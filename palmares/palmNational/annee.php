
<?php require("../../connect/connexion1.php"); ?>
<p class="annee">Equipes séniors</p>
<p class="equipe"><br>
	<?php palmaresParAnnee($annee, "bdequipe1", 0, 225, $bdd); ?>
</p>

<br>
<p class="annee">Equipes Réserves<br>
</p>
<p class="equipe"><br>
	<?php palmaresParAnnee($annee, "bdequipe2", 220, 280, $bdd);?>
	<?php palmaresParAnnee($annee, "bdequipe2", 9180, 9180, $bdd);?>
</p>
<br>
<br>
<p class="annee">Equipes Féminines</p>
<p class="equipe">
	<br>
	<?php palmaresParAnnee($annee, "bdfem", 280, 300, $bdd)	?>
</p>
<br><br>
<p class="annee">Reichels & Juniors</p>
<br>
<p class="equipe">
	<?php palmaresParAnnee($annee, "bdjeunes", 300, 360, $bdd)	?>
</p>
<br><br>
<p class="annee">Cadets</p>
<br>
<p class="equipe">
	<?php
	// Base de données modifiées
	palmaresParAnnee($annee, "bdjeunes" , 360, 380, $bdd);
	//palmaresParAnneeligne($annee, "bdjeunesligne", 360, 380, $bdd);

	?>
</p>
<br><br>

<?php if ($annee<2017)
{
	?>
<p class="annee"> Challenges</p>
<br>
<p class="equipe">
	
	<?php 
	palmaresParAnneeligne($annee, "bdchallengesligne", 370, 480, $bdd);
	?>



</p>

<?php
}
?>
<br>
