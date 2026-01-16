<?php
$bddComite = $_GET['bddComite'];
$codeEquipe = $_GET['codeEquipe'];
$comite = $_GET['comite'];
$journee = $_GET['journee'];
$maxJournee = $_GET['maxJournee'];
if (isset($_GET['score1'])) $score1 = $_GET['score1'];
else $score1 = "";
if (isset($_GET['score2'])) $score2 = $_GET['score2'];
else $score2 = "";

require("../../connect/connexion6.php");
require 'fonctions.php';
nomChampionnat($codeEquipe, $journee, $bddComite, $bdd);
?>


<!DOCTYPE HTML>
<html lang="fr">

<head>
	<title>Untitled Document</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link type="text/css" rel="stylesheet" href="majScore.css">
	<link type="text/css" rel="stylesheet" href="../../personnalisation/session2AvecMdp/CSS.css">

</head>

<body>
	<table class="marginAuto width95PC borderWidth1">
		<tr>
			<td class="h22">France Finales Rugby</td>
		</tr>
		<tr>
			<td class="h12"> Mise à jours des résultats <br />
				<?php echo $nomChampionnat; ?>
			</td>
		</tr>
	</table>

	<?php

	/*
echo $codeEquipe;echo "<br />";
echo $journee;echo "<br />";
echo $bddComite;echo "<br />";
*/
	//if (isset($codeEquipe1)) $codeEquipe1 = $codeEquipe1; 
	//if (isset($codeEquipe2)) $codeEquipe2 = $codeEquipe2; 

	if (strlen($codeEquipe) == 7) {
		affichageEquipeUne($journee, $codeEquipe, $bddComite, $bdd);
	} else {
		affichageEquipeDeux($journee, $codeEquipe, $bddComite, $bdd);
	}



	//require ("toutesJourneesRetour.php");

	require("toutesJournees.php");

	$exempt1 = substr($codeEquipe1, -3, 1);
	//echo $exempt1;

	$exempt2 = substr($codeEquipe2, -3, 1);
	//echo $exempt2;

	?>

	<p class="equipe">


		<?php
		setlocale(LC_TIME, 'french');
		$date = new DateTime($dateBrute);
		echo "Dimanche" . ' ' . $date->format('d M Y');
		$numeroJournee = substr("$journee", -2);

		echo "<br>";
		echo $numeroJournee . '' . "me journée";

		$dateDuJour = date("d M Y");
		$dateDuJourPlusUn = date("d M Y", strtotime("+1 day"));
		$dateDuJourMoinsUn = date("d M Y", strtotime("-1 day"));

		echo "<br>";
		//echo $dateDuJourMoinsUn;echo "<br>";
		//echo $dateDuJour;echo "<br>";
		//echo $dateDuJourPlusUn;echo "<br>";

		?>

	</p>
	<?php
	//if (  $date->format('d M Y') == $dateDuJourMoinsUn  OR   $date->format('d M Y') == $dateDuJour    OR  $date->format('d M Y') == $dateDuJourPlusUn  )
	if ($dateDuJour == $dateDuJour) {
	?>
		<form id="form" name="form" method="post" action="validation.php?equipe1=<?php echo $equipe1; ?>&equipe2=<?php echo $equipe2; ?>&codeEquipe=<?php echo $codeEquipe; ?>&codeEquipe1=<?php echo $codeEquipe1; ?>&codeEquipe2=<?php echo $codeEquipe2; ?>&journee=<?php echo $journee; ?>&comite=<?php echo $comite; ?>&bddComite=<?php echo $bddComite; ?>&nomChampionnat=<?php echo $nomChampionnat; ?>&maxJournee=<?php echo $maxJournee; ?>">
		<?php
	} else {
		?>
			<form id="form" name="form" method="post" action="erreurJournee.php?codeEquipe=<?php echo $codeEquipe; ?>&comite=<?php echo $comite; ?>&bddComite=<?php echo $bddComite; ?>&journee=<?php echo $journee; ?>&nomChampionnat=<?php echo $nomChampionnat; ?>&maxJournee=<?php echo $maxJournee; ?>">
			<?php
		}
			?>

			<fieldset class="marginAuto width90PC">
				<legend> Score de la rencontre</legend>
				<table class="marginAuto width100PC">
					<tr>
						<td class="equipe" width="80%">
							<?php echo $equipe1;

							if (strlen($codeEquipe) == 8) {
							?>
								<id class="equipeII">
									<?php echo "( Equipe II )"; ?>
								</id>
							<?php
							} else {
								echo "";
							}
							?>
						</td>
						<?php
						if ($exempt1 == 5 or $exempt2 == 5) {
						?>
							<td class="equipe" width="20%"> </td>
						<?php
						} else {
						?>
							<td class="equipe" width="20%"> <input id="input" name="score1" value="" size="3" type="text" required> </td>
						<?php
						}
						?>
					</tr>

					<tr>
						<td class="equipe" width="80%">

							<?php echo $equipe2;
							if (strlen($codeEquipe) == 8) {
							?>
								<id class="equipeII">
									<?php echo "( Equipe II )";	?>
								</id>
							<?php
							} else {
								echo "";
							}

							?>
						</td>
						<?php
						if ($exempt1 == 5 or $exempt2 == 5) {		?>
							<td class="equipe" width="20%"> </td>
						<?php
						} else { ?>
							<td class="equipe" width="20%"> <input id="input" name="score2" value="" size="3" type="text" required> </td>
						<?php
						} ?>
					</tr>
				</table>
			</fieldset>

			<fieldset class="marginAuto width90PC">
				<legend> Bonus Offensif (si nécessaire)</legend>
				<table class="marginAuto width100PC">

					<tr>
						<td class="equipe" width="80%">
							<?php echo $equipe1; ?> </td>
						<?php
						if ($exempt1 == 5 or $exempt2 == 5) {
						?>
							<td class="equipe" width="20%"> </td>
						<?php
						} else {
						?>
							<td width="20%"> <input name="bonusOffEquipe1" value="1" type="checkbox"> </td><?php
						}
						?>
					</tr>

					<tr>
						<td class="equipe" width="80%">
							<?php echo $equipe2; ?>
						</td>

						<?php
						if ($exempt1 == 5 or $exempt2 == 5) { ?>
							<td class="equipe" width="20%"> </td>
						<?php
						} else {
						?>
							<td width="20%"> <input name="bonusOffEquipe2" value="1" type="checkbox"> </td>
						<?php
						} ?>
					</tr>
				</table>

			</fieldset>

			<fieldset id="test" class="marginAuto width90PC">
				<legend> Bonus Défensif</legend>
				<table width="100%">
					<td class="equipe" width="80%"> Les bonus défensifs sont gérés	automatiquement </td>
				</table>
			</fieldset>
			<?php
			if ($exempt1 == 5 or $exempt2 == 5) {
			?>
				<td class="equipe" width="20%"> </td>
			<?php
			} else {
			?>

				<p class="center">
					<input id="valider" name="Submit2" value="Valider" type="submit">
				<?php
			}
				?>
				</p>
			</form>
			<hr />
			<table class="marginAuto" >
				<tr>
					<td bgcolor="#CCCCCC" class=" style size3 colorBlack">
						<a href="../../index.php">Retour à l'appli</a>
					</td>
				</tr>
			</table>
</body>

</html>