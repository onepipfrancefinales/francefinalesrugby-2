<h2>
	<?php
	echo "Mise &agrave; jour des types de phase finales";
	if (isset($_GET['annee'])) $annee = $_GET['annee'];
	else $annee = "-";
	echo "<br>";
	echo  "annee : " . $annee;
	?>
</h2>
<h2>&nbsp;</h2>
<p><a href="accueilMAJ.php">retour page accueil</a> </p>
<table>
	<tr>
		<td>Pas de finale</td>
		<td>0</td>
	</tr>
	<tr>
		<td>Finale</td>
		<td>1</td>
	</tr>
	<tr>
		<td>Demi ... finale </td>
		<td>2</td>
	</tr>
	<tr>
		<td>Demi finale AR / Finale </td>
		<td>3</td>
	</tr>
	<tr>
		<td>Quarts .... FINALE</td>
		<td>14</td>
	</tr>
	<tr>
		<td>Barrages / Quarts/ demi / Finale </td>
		<td>13</td>
	</tr>
	<tr>
		<td>QuartsAR / DemiAR / Finale</td>
		<td>15</td>
	</tr>
	<tr>
		<td>Seizième ..... Finale</td>
		<td>16</td>
	</tr>
	<tr>
		<td>Barrage / Quarts / Demi / finale</td>
		<td>17</td>
	</tr>

	<tr>
		<td>Huitième ..... Finale</td>
		<td>18</td>
	</tr>
	<tr>
		<td>Huitième AR / Quarts / Demi / Finale</td>
		<td>19</td>
	</tr>
	<table>
		<h2>
			<?php
			//$bdpf="bdpf".$annee;
			$anneeMoins1 = $annee - 1;
			echo  "Saison : " . $anneeMoins1 . " - " . $annee; ?></h2>
		<?php
		$tab = array(10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22);
		// $tab = array (10, 11);
		foreach ($tab as $ligue) {
			require '../../connect/connexion1.php';
			$reponse = $bdd->query("SELECT nom
    					   	FROM bdligue
							WHERE  id = '$ligue'");

			while ($donnees = $reponse->fetch()) {
				$nomLigue = $donnees['nom'];
			}

			if (isset($bdpf)) $bdpf = $bdpf;
			else $bdpf = "erreur";
			if (isset($codeLigue)) $codeLigue = $codeLigue;
			else $codeLigue = "erreur";

			if ($ligue == '11' or $ligue == '12' or $ligue == '13' or $ligue == '16' or $ligue == '21') {
				$bdpf = 'phppl_pfterr_e';
			}
			if ($ligue == '11') $codeLigue = '110000';
			elseif ($ligue == '12') $codeLigue = '120000';
			elseif ($ligue == '13') $codeLigue = '130000';
			elseif ($ligue == '16') $codeLigue = '160000';
			elseif ($ligue == '21') $codeLigue = '210000';

			elseif ($ligue == '15' or $ligue == '17' or $ligue == '18' or $ligue == '22') {
				$bdpf = 'phpidf_pfterr_e';
			}
			if ($ligue == '15') $codeLigue = '150000';
			elseif ($ligue == '17') $codeLigue = '170000';
			elseif ($ligue == '18') $codeLigue = '180000';
			elseif ($ligue == '22') $codeLigue = '220000';

			elseif ($ligue == '10') {
				$bdpf = 'phpau_pfterr_e';
				$codeLigue = '100000';
			} elseif ($ligue == '19') {
				$bdpf = 'phpca_pfterr_e';
				$codeLigue = '190000';
			} elseif ($ligue == '20') {
				$bdpf = 'phpab_pfterr_e';
				$codeLigue = '200000';
			}

			echo "<b>" . $nomLigue . "</b>";
			echo "<br />";
			echo "<br />";

		/*	--- Séniors I ---  */
			

			require '../../connect/connexion6.php';
			$debut = $codeLigue + '170';
			$fin = $codeLigue + '190';
			echo $debut . ' - ' . $fin .' -  '. "Equipe 1";
			for ($i = $debut; $i <= $fin; $i = $i + 10) {
			 ?>
				<form name="insertion" action="validCodeFFR.php?division=<?php echo $i; ?>&bdpf=<?php echo $bdpf; ?>&annee=<?php echo $annee; ?>" method="POST">
					<?php
					$reponse = $bdd->query("SELECT type 
    					   	FROM $bdpf
							WHERE  division = '$i' AND annee=$annee");

					while ($donnees = $reponse->fetch()) {
						$type = $donnees['type'];
					}
					?>
					<p><?php echo $i; ?>
						<input type="text" name="type" value="<?php echo $type; ?>">
						<input type="submit" value="modifier" name="submit">
					</p>
				</form>
			 <?php
			}
			

		/*	--- Séniors 2 ---*/

			require '../../connect/connexion6.php';
			$rreg1 = $codeLigue + 270;
			$rreg2 = $codeLigue + 9180;
			echo $rreg1 . ' - ' . $rreg2.'  - '. "Equipe II";

			$tab = array($rreg1, $rreg2);
			foreach ($tab as $i) {
				?>
				<form name="insertion" action="validCodeFFR.php?division=<?php echo $i; ?>&bdpf=<?php echo $bdpf; ?>&annee=<?php echo $annee; ?>" method="POST">
					<?php
					$reponse = $bdd->query("SELECT type 
    					   	FROM $bdpf
							WHERE  division = '$i' AND annee=$annee");

					while ($donnees = $reponse->fetch()) {
						$type = $donnees['type'];
					}

					?>
					<p><?php echo $i; ?>
						<input type="text" name="type" value="<?php echo $type; ?>">
						<input type="submit" value="modifier" name="submit">
					</p>
				</form>
			 <?php
			}



/*	--- Féminines ---*/

require '../../connect/connexion6.php';
$freg1 = $codeLigue + 295;
$freg2 = $codeLigue + 300;
echo $freg1 . ' - ' . $freg2.' -  '. "Féminins";

$tab = array($freg1, $freg2);
foreach ($tab as $i) {
	?>
	<form name="insertion" action="validCodeFFR.php?division=<?php echo $i; ?>&bdpf=<?php echo $bdpf; ?>&annee=<?php echo $annee; ?>" method="POST">
		<?php
		$reponse = $bdd->query("SELECT type 
				   FROM $bdpf
				WHERE  division = '$i' AND annee=$annee");

		while ($donnees = $reponse->fetch()) {
			$type = $donnees['type'];
		}

		?>
		<p><?php echo $i; ?>
			<input type="text" name="type" value="<?php echo $type; ?>">
			<input type="submit" value="modifier" name="submit">
		</p>
	</form>
 <?php
}



			echo "<hr />" . "<hr />";
		}
		?>
	
		<hr />
		<hr />
		<p><a href="accueilMAJ.php">retour page accueil</a> </p>