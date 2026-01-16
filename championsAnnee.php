<?php
require 'saison.php';


echo "debutSaison : ".$debutSaison."<br>";
echo "finSaison : ".$finSaison."<br>";


//$saison  = $_GET['saison'];
$saison  = $debutSaison;
require('connect/connexion1.php');

if ($mode != "smart")
	$adresse = "/phases_finales2019/affichagePhasesFinales/pagePhaseFinale.php";
else {
	$adresse = "/smart/pf/pagePhaseFinale.php";
}

?>

<table class="marginAuto border borderSpacing" width="100%">
	<tr class="size6 style">
		<td colspan="3" class="style">Champions de France <?php echo $debutSaison; ?><br></b></td>
	</tr>
	<tr class="size5 backgroundBlue colorWhite">
		<td colspan="3" class="styleDivision">Séniors I</td>
	</tr>
	<tr class="size4">
		<td width="35%">Top 14 :</td>
		<td width="51%" class="style"><?php championAnnee($saison, 110, $bdd);?></b></td>
		<td width="13%">
			<a href="<?php echo $adresse; ?>?division=110&annee=<?php echo $saison; ?>" title="Consulter les phases finales de la division"><img src="/favicon.ico"></a>
		</td>
	</tr>

	<tr class="size4 backgroundGray ">
		<td class="styleDivision">Pro D2 :</td>
		<td class="style size4"><?php championAnnee($saison, 120, $bdd);?></td>
		<td><a href="<?php echo $adresse; ?>?division=120&annee=<?php echo $saison; ?>" title="Consulter les phases finales de la division"><img src="/favicon.ico"></a></td>
	</tr>
	<tr class="size4 ">
		<td class="styleDivision">Nationale :</td>
		<td class="style size4"><?php championAnnee($saison, 130, $bdd);?></td>
		<td><a href="<?php echo $adresse; ?>?division=130&annee=<?php echo $saison; ?>" title="Consulter les phases finales de la division"><img src="/favicon.ico"></a></td>
	</tr>
	<tr class="size4 backgroundGray">
		<td class="styleDivision">Nationale 2 :</td>
		<td class="style size4"><?php championAnnee($saison, 135, $bdd);?></td>
		<td><a href="<?php echo $adresse; ?>?division=135&annee=<?php echo $saison; ?>" title="Consulter les phases finales de la division"><img src="/favicon.ico"></a></td>
	</tr>
	<tr class="size4">
		<td class="styleDivision">Fédérale 1 :</td>
		<td class="style size4"><?php championAnnee($saison, 140, $bdd);?></td>
		<td><a href="<?php echo $adresse; ?>?division=140&annee=<?php echo $saison; ?>" title="Consulter les phases finales de la division"><img src="/favicon.ico"></a></td>
	</tr>
	<tr class="size4 backgroundGray">
		<td class="styleDivision">Fédérale 2 :</td>
		<td class="style size4"><?php championAnnee($saison, 150, $bdd);?></td>
		<td class="cursor"> <a href="<?php echo $adresse; ?>?division=150&annee=<?php echo $saison; ?>" title="Consulter les phases finales de la division"><img src="/favicon.ico"></a></td>
	</tr>
	<tr class="size4">
		<td class="styleDivision">Fédérale 3 :</td>
		<td class="style size4"><?php championAnnee($saison, 160, $bdd);?></td>
		<td><a href="<?php echo $adresse; ?>?division=160&annee=<?php echo $saison; ?>" title="Consulter les phases finales de la division"><img src="/favicon.ico"></a></td>
	</tr>
	<tr class="size4 backgroundGray">
		<td class="styleDivision">Régionale 1 :</td>
		<td class="style size4"><?php championAnnee($saison, 170, $bdd);?></td>
		<td><a href="<?php echo $adresse; ?>?division=170&annee=<?php echo $saison; ?>" title="Consulter les phases finales de la division"><img src="/favicon.ico"></a></td>
	</tr>
	<tr class="size4">
		<td class="styleDivision">Régionale 2 :</td>
		<td class="style size4"><?php championAnnee($saison, 180, $bdd);?></td>
		<td><a href="<?php echo $adresse; ?>?division=180&annee=<?php echo $saison; ?>" title="Consulter les phases finales de la division"><img src="/favicon.ico"></a></td>
	</tr>
	<tr class="size4 backgroundGray">
		<td class="styleDivision">Régionale 3 :</td>
		<td class="style size4"><?php championAnnee($saison, 190, $bdd);?></td>
		<td><a href="<?php echo $adresse; ?>?division=190&annee=2<?php echo $saison; ?>024" title="Consulter les phases finales de la division"><img src="/favicon.ico"></a></td>
	</tr>
		<?php
if ($saison > 2024 ){
?>
<tr class="size4">
		<td class="styleDivision">Promotion Régionale 1 :</td>
		<td class="style size4"><?php championAnnee($saison, 175, $bdd);?></td>
		<td><a href="<?php echo $adresse; ?>?division=175&annee=<?php echo $saison; ?>" title="Consulter les phases finales de la division"><img src="/favicon.ico"></a></td>
	</tr>
	<tr class="size4 backgroundGray">
		<td class="styleDivision">Promotion Régionale 2 :</td>
		<td class="style size4"><?php championAnnee($saison, 185, $bdd);?></td>
		<td><a href="<?php echo $adresse; ?>?division=185&annee=<?php echo $saison; ?>" title="Consulter les phases finales de la division"><img src="/favicon.ico"></a></td>
	</tr>
	<tr class="size4">
		<td class="styleDivision">Promotion Régionale 3 :</td>
		<td class="style size4"><?php championAnnee($saison, 195, $bdd);?></td>
		<td><a href="<?php echo $adresse; ?>?division=195&annee=<?php echo $saison; ?>" title="Consulter les phases finales de la division"><img src="/favicon.ico"></a></td>
	</tr>
<?php
}
	?>

	<tr class="size5 backgroundBlue colorWhite">
		<td colspan="3" class="styleDivision">Séniors II</td>
	</tr>
	<tr class="size4">
		<td class="styleDivision">Espoirs Elite :</td>
		<td class="style size4"><?php championAnnee($saison, 225, $bdd);?></td>
		<td class="cursor"><a href="<?php echo $adresse; ?>?division=230&annee=<?php echo $saison; ?>" title="Consulter les phases finales de la division"><img src="/favicon.ico"></a></td>
	</tr>
	<tr class="size4 backgroundGray">
		<td class="styleDivision">Espoirs Nationaux : </td>
		<td class="style size4"><?php championAnnee($saison, 232, $bdd);?></td>
		<td><a href="<?php echo $adresse; ?>?division=235&annee=<?php echo $saison; ?>" title="Consulter les phases finales de la division"><img src="/favicon.ico"></a></td>
	</tr>
	<tr class="size4">
		<td class="styleDivision">Espoirs Fédéraux : </td>
		<td class="style size4"><?php championAnnee($saison, 245, $bdd);?></td>
		<td><a href="<?php echo $adresse; ?>?division=240&annee=<?php echo $saison; ?>" title="Consulter les phases finales de la division"><img src="/favicon.ico"></a></td>
	</tr>
	<tr class="size4 backgroundGray">
		<td class="styleDivision">Fédérale B :</td>
		<td class="style size4"><?php championAnnee($saison, 250, $bdd);?></td>
		<td><a href="<?php echo $adresse; ?>?division=250&annee=<?php echo $saison; ?>" title="Consulter les phases finales de la division"><img src="/favicon.ico"></a></td>
	</tr>
	<tr class="size4">
		<td class="styleDivision">Excellence B :</td>
		<td class="style size4"><?php championAnnee($saison, 260, $bdd);?></td>
		<td><a href="<?php echo $adresse; ?>?division=260&annee=<?php echo $saison; ?>" title="Consulter les phases finales de la division"><img src="/favicon.ico"></a></td>
	</tr>
	<tr class="size4 backgroundGray">
		<td class="styleDivision">Réserve :</td>
		<td class="style size4"><?php championAnnee($saison, 270, $bdd);?></td>
		<td><a href="<?php echo $adresse; ?>?division=270&annee=<?php echo $saison; ?>" title="Consulter les phases finales de la division"><img src="/favicon.ico"></a></td>
	</tr>
	<?php
if ($saison > 2024 ){
?>
<tr class="size4">
		<td class="styleDivision">Réserve rég 2:</td>
		<td class="style size4"><?php championAnnee($saison, 9180, $bdd);?></td>
		<td><a href="<?php echo $adresse; ?>?division=9180&annee=<?php echo $saison; ?>" title="Consulter les phases finales de la division"><img src="/favicon.ico"></a></td>
	</tr>
<?php
}
	?>
	<tr class="size5 backgroundBlue colorWhite">
		<td colspan="3" class="styleDivision">Feminines</td>
	</tr>
	<tr class="size4">
		<td class="styleDivision">Elite 1 :</td>
		<td class="style size4"><?php championAnnee($saison, 280, $bdd);?></td>
		<td><a href="<?php echo $adresse; ?>?division=280&annee=<?php echo $saison; ?>" title="Consulter les phases finales de la division"><img src="/favicon.ico"></a></td>
	</tr>
	<tr class="size4 backgroundGray">
		<td class="styleDivision">Elite 2 :</td>
		<td class="style size4"><?php championAnnee($saison, 285, $bdd);?></td>
		<td><a href="<?php echo $adresse; ?>?division=285&annee=<?php echo $saison; ?>" title="Consulter les phases finales de la division"><img src="/favicon.ico"></a></td>
	</tr>
	<tr class="size4">
		<td class="styleDivision">Fédérale 1 :</td>
		<td class="style size4"><?php championAnnee($saison, 290, $bdd);?></td>
		<td><a href="<?php echo $adresse; ?>?division=290&annee=<?php echo $saison; ?>" title="Consulter les phases finales de la division"><img src="/favicon.ico"></a></td>
	</tr>
	<tr class="size4 backgroundGray">
		<td class="styleDivision">Fédérale 2 :</td>
		<td class="style size4"><?php championAnnee($saison, 295, $bdd);?></td>
		<td><a href="<?php echo $adresse; ?>?division=295&annee=<?php echo $saison; ?>" title="Consulter les phases finales de la division"><img src="/favicon.ico"></a></td>
	</tr>

	<tr class="size5 backgroundBlue colorWhite">
		<td colspan="3" class="styleDivision">Jeunes</td>
	</tr>
	<tr>
		<td colspan="3" class="style styleDivision colorRed styleItalic">Juniors (-18ans)</b></td>
	</tr>
	<tr class="size4 backgroundGray">
		<td class="styleDivision">Crabos :</td>
		<td class="style size4"><?php championAnnee($saison, 325, $bdd);?></td>
		<td><a href="<?php echo $adresse; ?>?division=325&annee=<?php echo $saison; ?>" title="Consulter les phases finales de la division"><img src="/favicon.ico"></a></td>
	</tr>
	<tr class="size4">
		<td class="styleDivision">U18 : </td>
		<td class="style size4"><?php championAnnee($saison, 330, $bdd);?></td>
		<td><a href="<?php echo $adresse; ?>?division=330&annee=<?php echo $saison; ?>" title="Consulter les phases finales de la division"><img src="/favicon.ico"></a></td>
	</tr class="size5">
	<?php
	if ($saison > 2024 ){
?>
<tr class="size4">
		<td class="styleDivision">Régionale 1 U18 :</td>
		<td class="style size4"><?php championAnnee($saison, 335, $bdd);?></td>
		<td><a href="<?php echo $adresse; ?>?division=9180&annee=<?php echo $saison; ?>" title="Consulter les phases finales de la division"><img src="/favicon.ico"></a></td>
	</tr>
<?php
}
?>
	<td colspan="3" class="style styleDivision colorRed styleItalic">Cadets (-16ans)</b></td>
	</tr>
	<tr class="size4 backgroundGray">
		<td class="styleDivision">Alamercery :</td>
		<td class="style size4"><?php championAnnee($saison, 360, $bdd);?></td>
		<td><a href="<?php echo $adresse; ?>?division=360&annee=<?php echo $saison; ?>" title="Consulter les phases finales de la division"><img src="/favicon.ico"></a></td>
	</tr>
	<tr class="size4">
		<td class="styleDivision">Gaudermen :</td>
		<td class="style size4"><?php championAnnee($saison, 365, $bdd);?></td>
		<td><a href="<?php echo $adresse; ?>?division=365&annee=<?php echo $saison; ?>" title="Consulter les phases finales de la division"><img src="/favicon.ico"></a></td>
	</tr>
	<tr class="size4 backgroundGray">
		<td class="styleDivision">U16 : </td>
		<td class="style size4"><?php championAnnee($saison, 370, $bdd);?></td>
		<td><a href="<?php echo $adresse; ?>?division=370&annee=<?php echo $saison; ?>" title="Consulter les phases finales de la division"><img src="/favicon.ico"></a></td>
	</tr>
	<?php
	if ($saison > 2024 ){
?>
<tr class="size4">
		<td class="styleDivision">Régionale 1 U16 :</td>
		<td class="style size4"><?php championAnnee($saison, 375, $bdd);?></td>
		<td><a href="<?php echo $adresse; ?>?division=9180&annee=<?php echo $saison; ?>" title="Consulter les phases finales de la division"><img src="/favicon.ico"></a></td>
	</tr>
<?php
}
?>
</table>

<style>
	.style {
		font-family: Arial, Helvetica, sans-serif;
		font-weight: bold;
	}

	.styleDivision {
		font-family: Arial, Helvetica, sans-serif;
	}

	.styleItalic {
		font-style: italic;
	}
</style>


<?php 
function championAnnee($saison, $division, $bdd)
{
  
   $tabDivisionSeniors = array('110', '120', '130', '135', '140', '150', '160', '170', '180', '190');
   $listeDivisionsFeminines = array('280', '285', '290', '295'); 
   $listeDivisionsReserves = array('225', '232', '235', '245','250', '260', '270', '9180'); 
   $listeDivisionsJeunes = array( '365', '360', '370', '325', '330'); 

if(in_array($division,$tabDivisionSeniors))
  $table = "bdequipe1";
else if(in_array($division,$listeDivisionsFeminines))
  $table =  "bdfem";
else if(in_array($division,$listeDivisionsReserves))
  $table =  "bdequipe2";
else if(in_array($division,$listeDivisionsJeunes))
  $table =  "bdjeunes";

global $champion, $comite;

	$reponse = $bdd->query("SELECT champion, comite1 
						FROM $table
						WHERE saison='$saison' and titre = 'champion' 
						AND rang = '$division'
						AND championnat='de France'");

	while ($donnees =  $reponse->fetch()) {
	
		$champion = $donnees['champion'];
		$comite = $donnees['comite1'];
	}

	echo $champion.' '.$comite;
}

?>