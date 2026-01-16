<?php
require("../../connect/connexion1.php");

/*
if ($division < 230) {
	$table = "bdequipe1";
	$titre = "Champions de France";
} elseif ($division < 280) {
	$table = "bdequipe2";
	$titre = "Champions de France";
} elseif ($division < 310) {
	$table = "bdfem";
	$titre = "Championnes de France";
} elseif ($division < 380) {
	$table = "bdjeunesligne";
	$titre = "Champions de France";
} elseif ($division < 500) {
	$table = "bdchallenges";
	$titre = "Challenge de ";
} elseif ($division == 500) {
	$table = "bdequipe1";
	$titre = "Champion de France ";
}

$reponse = $bdd->query("SELECT division
						FROM bddivisions 
						WHERE id='$division'
						ORDER BY cle DESC ");
while ($donnees =  $reponse->fetch()) {
	$nomDivision = $donnees['division'];
}
*/


/******************************************************** */

//chgmntNomDivision (110, "bdequipe1", $bdd);

/**************************************************** */

//palmaresParDivision($division, $table, $bdd);
chgmntNomDivisionligne($division, $table, $bdd, false);


//$table = "bdjeunesligne";
/*
$tabSaison = array();
$tabChampion = array();
$tabComite = array();
$tabCommentaire = array();
$france = "de France";
$essor = "du challenge de l\'Essor";
$duManoir = "du challenge Yves du Manoir";
$esperance = "du challenge de l\'Espérance";
$beguere = "du challenge Beguere";
$amitie = "du challenge de l\'amitié";
$espoir = "du challenge de l\'espoir";


//AND rang2 = $division  AND saison between $anneeCreation and $anneeMax

$reponse = $bdd->query("SELECT saison, champion, comite1, commentaire
						FROM $table
						WHERE rang = $division
						AND rang2 = $division  AND saison between $anneeCreation and $anneeMax
						AND (championnat = '$france'  OR  championnat = '$essor' OR championnat = '$duManoir'  OR championnat = '$esperance'   OR championnat = '$amitie'  OR championnat = '$espoir'     )
						ORDER BY saison DESC");

while ($donnees =  $reponse->fetch()) {
	$tabSaison[] = $donnees['saison'];
	$tabChampion[] = $donnees['champion'];
	$tabComite[] = $donnees['comite1'];
	$tabCommentaire[] = $donnees['commentaire'];
}


$pattern = "/[0-9]{7}/i";
$tabNom = array();
$pasDeChampionnat = "Pas de championnat";
$covid = "Pas de titre décerné";


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
}

for ($i = 0; $i < count($tabChampion); $i++) {
	if ($tabChampion[$i] == $pasDeChampionnat || $tabChampion[$i] == $covid) {
		echo  "<h4 style = \"background-color : #C5C6C7; width:300px; margin: 0px auto\">";
		echo  $tabSaison[$i] . ' : ' . $tabNom[$i] . ' ' . $tabComite[$i];
		echo "</h4>";echo "<br>";
	} else {
		echo "<h4>";
		echo  $tabSaison[$i] . ' : ' . $tabNom[$i] . ' ' . $tabComite[$i];

		if (strlen($tabCommentaire[$i]) > 0) { ?>
			<sup class="infobulle" aria-label="<?php echo $tabCommentaire[$i]; ?>"><img src="../../images/info.gif" height="15" width="15"></sup>
			</h4>
<?php
		}
	}
}
*/

echo "<br>";
echo "<br>";
?>
<style>
	.infobulle {
		position: relative;
		/* les .infobulle deviennent référents */
		cursor: help;
	}

	/* on génère un élément :after lors du survol et du focus :*/

	.infobulle:hover::after,
	.infobulle:focus::after {
		content: attr(aria-label);
		/* on affiche aria-label */
		position: absolute;
		/*top: -3.4em;*/
		left: 70%;
		transform: translate(0px, 0px);
		/* on centre horizontalement  */
		z-index: 0;
		/* pour s'afficher au dessus des éléments en position relative */
		/* white-space: nowrap;  /* on interdit le retour à la ligne */
		border-color: black;
		border-style: solid;
		border-width: 1px;
		background: #5ec1ff;
		text-align: left;
	}
</style>