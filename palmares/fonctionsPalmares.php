<?php
// Les fonction nomDivision($rang, $bdd) et function palmaresFrance($rang, $annee, $bdd) ont été copiées
// du dossier smart

function nomDivisionMax($rang, $bdd)
{
	global $division, $anneeMax;

	$reponse = $bdd->query("SELECT MAX(annee) 
						FROM bddivisions
						WHERE id='$rang'");

	$row = $reponse->fetch();
	$anneeMax = $row[0];

	$reponse = $bdd->query("SELECT division
						FROM bddivisions
						WHERE id= '$rang' and annee ='$anneeMax'");
	while ($donnees = $reponse->fetch()) {
		$division = $donnees['division'];
	}
}


function nomDivision($rang, $bdd)
{
	global $division;
	$reponse = $bdd->query("SELECT division
						FROM bddivisions
						WHERE id= '$rang'  ");
	while ($donnees = $reponse->fetch()) {
		$division = $donnees['division'];
	}
}


function palmaresFrance($rang, $annee, $bdd)
{
	global $tabSaison, $tabChampion, $tabComite, $intervalleAnneeChampion;

	if ($rang > 100 && $rang < 225)
		$table = "bdequipe1";
	elseif ($rang > 225 && $rang < 275)
		$table = "bdequipe2";
	elseif ($rang > 275 && $rang < 305)
		$table = "bdfem";
	elseif ($rang > 305 && $rang < 375)
		$table = "bdjeunes";
	elseif ($rang > 375 && $rang < 455)
		$table = "bdchallenges";


	$reponse = $bdd->query("SELECT Min(saison)
						FROM $table
							WHERE championnat='de France' and rang=$rang and (titre='champion'  or titre='vainqueur')
							ORDER BY saison DESC");

	$row = $reponse->fetch();
	$minAnneeChampion = $row[0];


	$tabSaison = array();
	$tabChampion = array();
	$tabComite = array();

	$intervalleAnneeChampion = $annee - $minAnneeChampion;

	for ($i = $minAnneeChampion; $i <= $annee; $i++) {
		$reponse = $bdd->query("SELECT saison, champion, comite1, division 
							FROM $table
							WHERE championnat='de France' and rang=$rang and (titre='champion'  or titre='vainqueur')
							ORDER BY saison DESC");

		while ($donnees = $reponse->fetch()) {
			$tabSaison[] = $donnees['saison'];
			$tabChampion[] = $donnees['champion'];
			$tabComite[] = $donnees['comite1'];
		}
		$reponse->closeCursor();
	}
}

//**************************************************************************** */


function nomComite($sigle, $id, $bdd)
{

	global $idComite, $nomComite, $sigleComite,  $appartenanceLigue;

	$reponse = $bdd->query("SELECT id, nom, sigle, sigleLigue 
						FROM bdcomite 
						WHERE sigle='$sigle' OR id = '$id'");

	while ($row = $reponse->fetch()) {
		$idComite = $row[0];
		$nomComite = $row[1];
		$sigleComite = $row[2];
		$appartenanceLigue = $row[3];
	}
}

function nomLigue($idLigue, $sigleLigue, $bdd)
{
	global $idLigue, $nomLigue, $sigleLigue;
	$reponse = $bdd->query("SELECT id, nom, sigle
						FROM bdligue 
						WHERE sigle='$sigleLigue' OR id='$idLigue'");
	while ($row = $reponse->fetch()) {
		$idLigue = $row[0];
		$nomLigue = $row[1];
		$sigleLigue = $row[2];
	}
}


//***********************************************************************/
//   Palmares Ligues (après la saison 2017-2018 et la saison 2021-2022) 
//	 Palmarès ligues (après la saison 2022 -- réformes des divisions)                                   */
//***********************************************************************/

function palmaresLigues($comite, $rang, $bdd, $anneeReforme)
{
	$nbre = 0;
	if ($anneeReforme == true) {

		$anneeRef = 2022;
		// Recherche de la derniere année enregistrée
		$reponse = $bdd->query("SELECT MAX(saison)
							FROM bdequipe1
							WHERE rang = 
							'$rang' 
							AND comite1 ='$comite' 
							AND championnat != 'de France' 
							AND titre ='Champion'
							AND saison > '2022'");
	} else {
		$anneeRef = 2018;
		$reponse = $bdd->query("SELECT MAX(saison)
							FROM bdequipe1
							WHERE rang='$rang' 
							AND comite1 ='$comite' 
							AND championnat != 'de France' 
							AND titre ='Champion'
							AND saison BETWEEN '2018' AND '2022'");
	}


	while ($row = $reponse->fetch()) {
		$maxAnnee = $row[0];
	}

	//echo $maxAnnee;
	// déclaration des toutes les variables en variables globales soit( $honneur2018, $honneur2017, $honneur2016,....)

	$tabPalmaresHonneur = array();
	for ($i = $maxAnnee; $i > $anneeRef; $i--) {

		global ${"honneur" . ($i)};


		// requete permettant de r�cup�rer les champions du comit� demand�
		$reponse = $bdd->query("SELECT  champion
							FROM bdequipe1
							WHERE  saison=$i and rang='$rang' and comite1 ='$comite' and championnat != 'de France' and titre='Champion'
							ORDER BY saison");

		while ($row = $reponse->fetch()) {
			$tabPalmaresHonneur[] = $row[0];
		}
		// affectation  des variables  
		//echo $i; //echo "<br>";
		//echo $nbre; echo "<br>";

		if (isset($tabPalmaresHonneur[$nbre])) ${"honneur" . ($i)} = $tabPalmaresHonneur[$nbre];
		else ${"honneur" . ($i)} = '-';
		echo substr(${"honneur" . ($i)}, 0, 20);
		echo "<br><hr>";
		$nbre = $nbre + 1;
	}
}

//****************************************************************************
function saisonLigues($rang, $comite, $bdd, $reforme)
{

	global $maxAnnee;
	$nbre = 0;
	// Recherche de la derniere ann�e enregistr�e

	$tabSaison = array();
	//echo $reforme;
	if ($reforme == true) {

		$anneeRef = 2022;

		$reponse = $bdd->query("SELECT MAX(saison)
				FROM bdequipe1
				WHERE rang='$rang' 
				AND comite1 ='$comite' 
				AND championnat != 'de France' 
				AND titre='Champion'
				AND saison > '2022'");
	} else {
		$anneeRef = 2018;
		$reponse = $bdd->query("SELECT MAX(saison)
				FROM bdequipe1
				WHERE rang='$rang' 
				AND comite1 ='$comite' 
				AND championnat != 'de France' 
				AND titre='Champion'
				AND saison BETWEEN '2018' AND '2022'");
	}

	while ($row = $reponse->fetch()) {
		$maxAnnee = $row[0];
	}
	//echo $maxAnnee;
	// déclaration des toutes les variables en variables globales soit( $honneur2018, $honneur2017, $honneur2016,....)



	for ($i = $maxAnnee; $i > $anneeRef; $i--) {
		global ${"saison" . ($i)};
		// requete permettant de récupèrer les champions du comité demandé
		$reponse = $bdd->query("SELECT  champion
				 FROM bdequipe1
				 WHERE  saison=$i and rang='$rang' and comite1 ='$comite' and championnat != 'de France' and titre='Champion'
				 order by saison");
		while ($row = $reponse->fetch()) {
			$tabSaison[] = $row[0];
		}
		// affectation  des variables  
		//echo $i; //echo "<br>";
		//echo $nbre; echo "<br>";

		if (isset($tabSaison[$nbre])) ${"saison" . ($i)} = $tabSaison[$nbre];
		else ${"saison" . ($i)} = '-';
		echo $i;
		echo "<br><hr>";

		$nbre = $nbre + 1;
	}
}

function palmaresLigues2($comite, $rang, $bdd, $reforme)
{


	$nbre = 0;
	// Recherche de la derniere année enregistrée

	if ($reforme == true) {
		$anneeRef = 2022;
		$reponse = $bdd->query("SELECT MAX(saison)
				FROM bdequipe2
				WHERE rang='$rang'  
				AND comite1 ='$comite' 
				AND championnat != 'de France' 
				AND titre='Champion'
				AND saison > '2022'");
	} else {
		$anneeRef = 2018;
		$reponse = $bdd->query("SELECT MAX(saison)
				FROM bdequipe2
				WHERE rang='$rang'  
				AND comite1 ='$comite' 
				AND championnat != 'de France' 
				AND titre='Champion'
				AND saison BETWEEN '2018' AND '2022'");
	}



	while ($row = $reponse->fetch()) {
		$maxAnnee = $row[0];
	}

	// déclaration des toutes les variables en variables globales soit( $honneur2018, $honneur2017, $honneur2016,....)
	for ($i = $maxAnnee; $i > $anneeRef; $i--) {
		global ${"honneur" . ($i)};
		// requete permettant de récupèrer les champions de la ligue demandé
		$reponse = $bdd->query("SELECT  champion
				 FROM bdequipe2
				 WHERE  saison=$i and (rang='$rang' or rang='$rang + 9000') and comite1 ='$comite' and championnat != 'de France' and titre='Champion'
				 order by saison");
		while ($row = $reponse->fetch()) {
			$tabPalmaresHonneur[] = $row[0];
		}
		// affectation  des variables  
		//echo $i; //echo "<br>";
		//echo $nbre; echo "<br>";	
		if (isset($tabPalmaresHonneur[$nbre])) ${"honneur" . ($i)} = $tabPalmaresHonneur[$nbre];
		else ${"honneur" . ($i)} = '-';
		echo ${"honneur" . ($i)};
		echo "<br><hr>";
		$nbre = $nbre + 1;
	}
}


function saisonLigues2($rang, $comite, $bdd, $reforme)
{
	$nbre = 0;
	// Recherche de la derniere année enregistrée
	if ($reforme == false) {
		$anneeRef = 2018;
		$reponse = $bdd->query("SELECT MAX(saison)
				FROM bdequipe2
				WHERE (rang='$rang' or rang='$rang+9000') 
				AND comite1 ='$comite' 
				AND championnat != 'de France' 
				AND titre='Champion'
				AND saison BETWEEN '2018' AND '2022'");
	}


	while ($row = $reponse->fetch()) {
		$maxAnnee = $row[0];
	}

	// déclaration des toutes les variables en variables globales soit( $honneur2018, $honneur2017, $honneur2016,....)
	for ($i = $maxAnnee; $i > $anneeRef; $i--) {

		global ${"honneur" . ($i)};


		// requete permettant de récupèrer les champions du comité demandé
		$reponse = $bdd->query("SELECT  champion
				 FROM bdequipe2
				 WHERE  saison=$i and (rang='$rang' or rang='$rang+9000') and comite1 ='$comite' and championnat != 'de France' and titre='Champion'
				 order by saison");
		while ($row = $reponse->fetch()) {
			$tabPalmaresHonneur[] = $row[0];
		}
		// affectation  des variables  
		//echo $i; //echo "<br>";
		//echo $nbre; echo "<br>";

		if (isset($tabPalmaresHonneur[$nbre])) ${"honneur" . ($i)} = $tabPalmaresHonneur[$nbre];
		else ${"honneur" . ($i)} = '-';
		echo $i;
		echo "<br><hr>";
		$nbre = $nbre + 1;
	}
}

function palmaresParFinales($annee, $table, $minRang, $maxRang, $bdd)
{

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



	for ($i = 0; $i < count($tabDivision); $i++) {

		// traitement du champion
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

		// traitement du vice champion
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

		echo  '<strong>' . $tabDivision[$i] . ' : ' . '</strong>' . $tabNomChamp[$i] . ' ' . $tabComite1[$i] . ' - ' . $tabNomVice[$i] . ' ' . $tabComite2[$i] . ' ' . $tabScore1[$i] . ' - ' . $tabScore2[$i];
		echo "<br>";
	}
}

function palmaresParAnnee($annee, $table, $minRang, $maxRang, $bdd)
{

	$tabDivision = array();
	$tabChampion = array();
	$tabComite = array();

	$reponse = $bdd->query("SELECT division, champion, comite1 
						FROM $table
						WHERE saison='$annee' and titre = 'champion' 
						AND championnat='de France'
						AND rang < $maxRang and rang >= $minRang 
						AND rang2 < $maxRang and rang2 >= $minRang 
						ORDER BY rang");

	while ($donnees =  $reponse->fetch()) {
		$tabDivision[] = $donnees['division'];
		$tabChampion[] = $donnees['champion'];
		$tabComite[] = $donnees['comite1'];
	}

	$pattern = "/[0-9]{7}/i";
	$tabNom = array();

	for ($i = 0; $i < count($tabDivision); $i++) {

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
		echo  "<span class = \"bold\" >".$tabDivision[$i] . ' : '."</span>" . $tabNom[$i] . ' ' . $tabComite[$i];
		echo "<br>";
	}
}


function palmaresParAnneeligne($annee, $table, $minRang, $maxRang, $bdd)
{
	$tabDivision = array();
	$tabChampion = array();
	$tabComite = array();

	$reponse = $bdd->query("SELECT division, champion, comite1 
						FROM $table
						WHERE saison = '$annee' 
						AND (championnat='de France' OR championnat='Challenge')
						AND rang < $maxRang and rang >= $minRang 
						AND rang2 < $maxRang and rang2 >= $minRang 
						ORDER BY rang");

	while ($donnees =  $reponse->fetch()) {
		$tabDivision[] = $donnees['division'];
		$tabChampion[] = $donnees['champion'];
		$tabComite[] = $donnees['comite1'];
	}

	$pattern = "/[0-9]{7}/i";
	$tabNom = array();

	for ($i = 0; $i < count($tabDivision); $i++) {

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
		echo "<span class=\"bold\">". $tabDivision[$i] . ' : '."</span>" . $tabNom[$i] . ' ' . $tabComite[$i];
		echo "<br>";
	}
}


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


function anneeCreationNomDivision($division, $bdd)
{

	$anneeCreationDivision = 0;

	$reponse = $bdd->query("SELECT MAX(annee)
	FROM bddivisions
	WHERE  id ='$division'
	AND cle < 10000 ");

	while ($row = $reponse->fetch()) {
		$anneeCreationDivision = $row[0];
	}
	return $anneeCreationDivision;
}



function chgmntNomDivision($division, $base, $bdd, $smart)
{
	global $tabNomDivision, $tabAnnee;
	$tabCle[] = array();
	$tabNomDivision = array();
	$tabAnnee = array();

	$reponse = $bdd->query("SELECT cle, division, annee
							FROM bddivisions
							WHERE  id ='$division'
							ORDER BY cle DESC ");

	while ($donnees =  $reponse->fetch()) {
		$tabCle[] = $donnees['cle'];
		$tabNomDivision[] = $donnees['division'];
		$tabAnnee[] = $donnees['annee'];
	}

	if (anneeCreationNomDivision($division, $bdd) != 0)
		$anneeMax = anneeCreationNomDivision($division, $bdd);
	else
{
	if (date('m', time()) > 01 and date('m', time()) <= 6) {


	$anneeMax = date('Y', time()) -1;
}
	else
	$anneeMax = date('Y', time()) ;

}


//echo " annee max :" .$anneeMax;

	/**************************************** */

	if ($division == 390)
		$titre = "Vainqueurs de la ";
	else if ($division >= 379)
		$titre = "Vainqueurs du challenge";
	else
		$titre = "Champions de France";


		
	//*************************************************************************** */
	//    Periode 1 ---intervalle entre le creation et le 1er changement de nom   */
	//*************************************************************************** */	


	if ($smart != true)
		echo "<h1>" . $titre . "<br>" . $tabNomDivision[0] . "<h1>";
	else
		echo "<h2 align=\"center\">" . $titre . "<br>" . $tabNomDivision[0] . "<h2>";

	palmaresParDivisionParAnnee($division, $base, $tabAnnee[0], $anneeMax, $bdd);


	//*************************************************************************** */
	//    Période 2 à count($tabNomDivision): nombre de période pour la division  traitée
	//*************************************************************************** */

	//echo "count :".count($tabNomDivision);
	for ($i = 0; $i < count($tabNomDivision) - 1; $i++) {


		if ($smart != true)
			echo "<h1>" . $titre . "<br>" . $tabNomDivision[$i + 1] . "<h1>";
		else
			echo "<h2 align=\"center\">" . $titre . "<br>" . $tabNomDivision[$i + 1] . "<h2>";

		if ($division == 230  and $tabAnnee[$i] == 1931) {
?>
			<table class="marginAuto center styleArial" width="95%">
				<tr>
					<th width="10%"></th>
					<th class="size4" width="30%">Equipe seconde</th>
					<th class="size4" width="30%">Equipe troisième</th>
					<th class="size4" width="30%">Equipe quatrième</th>
				</tr>
			</table>
			<hr>
			<?php
		}

		$anneeMax = $tabAnnee[$i];
		/*
		echo $division;
		echo "<br>";
		echo $base;
		echo "<br>";
		echo "anneeMax : ".$anneeMax;
		echo "<br>";
		echo "tabAnnee[$i] : ".$tabAnnee[$i+1];
		echo "<br>";
	*/

		palmaresParDivisionParAnnee($division, $base, $tabAnnee[$i + 1], $anneeMax - 1, $bdd);

		//	palmaresParDivisionLigne($division, $base, $tabAnnee[$i + 1], $anneeMax, $bdd);
	}
}

function chgmntNomDivisionligne($division, $base, $bdd, $smart)
{
	global $tabNomDivision, $tabAnnee;
	$tabCle = array();
	$tabNomDivision = array();
	$tabAnnee = array();

	$reponse = $bdd->query("SELECT cle, division, annee
							FROM bddivisions
							WHERE  id ='$division'
							ORDER BY cle DESC ");

	while ($donnees =  $reponse->fetch()) {
		$tabCle[] = $donnees['cle'];
		$tabNomDivision[] = $donnees['division'];
		$tabAnnee[] = $donnees['annee'];
	}

		if (anneeCreationNomDivision($division, $bdd) != 0)
		$anneeMax = anneeCreationNomDivision($division, $bdd);
	else
{
	if (date('m', time()) > 01 and date('m', time()) <= 6) {


	$anneeMax = date('Y', time()) -1;
}
	else
	$anneeMax = date('Y', time()) ;

}


if ($division == 390)
$titre = "Vainqueurs de la ";
else if ($division >= 379)
$titre = "Vainqueurs du challenge";
else
$titre = "Champions de France";

//*************************************************************************** */
	//    Periode 1 ---intervalle entre le creation et le 1er chahgement de nom   */
	//*************************************************************************** */	

	if ($smart == true)
		echo "<div class=\"bold size4 styleArial center\" style=\" margin : 15px\">" . $titre . "<br>" . "<br>" . $tabNomDivision[0] . "</div>";
	else
		echo "<h1>" . $titre . "<br>" . $tabNomDivision[0] . "<h1>";



	palmaresParDivisionLigne($division,  $base, $tabAnnee[0], $anneeMax, $bdd, $smart);

	//*************************************************************************** */
	//    Période 2 à count($tabNomDivision): nombre de période pour la division  traitée
	//*************************************************************************** */

	for ($i = 0; $i < count($tabNomDivision) - 1; $i++) {
		echo "<br>";

		if ($smart == true)
			echo "<div class=\"bold size4 styleArial center\" >" . $titre . "</div>" . "<br>" . "<div class=\"bold size4 styleArial center\">" . $tabNomDivision[$i + 1] . "</div>";
		else
			echo "<h1>" . $titre . "<br>" . $tabNomDivision[$i + 1] . "<h1>";

			if ($division == 230  and $tabAnnee[$i] == 1931) {
				?>
							<table class="marginAuto center styleArial" width="95%">
								<tr>
									<th width="10%"></th>
									<th class="size4" width="30%">Equipe seconde</th>
									<th class="size4" width="30%">Equipe troisième</th>
									<th class="size4" width="30%">Equipe quatrième</th>
								</tr>
							</table>
							<hr>
							<?php
						}



			$anneeMax = $tabAnnee[$i];

		palmaresParDivisionLigne($division, $base, $tabAnnee[$i + 1], $anneeMax - 1, $bdd, $smart);
	}
}




// palmaresParDivisionParAnnee($division, $base, $tabAnnee[$i + 1], $tabAnnee[$i], $bdd);
function palmaresParDivisionParAnnee($division, $table, $anneeCreation, $anneeMax, $bdd)
{

	global $tabSaison, $tabChampion, $tabComite;

	$tabSaison = array();
	$tabChampion = array();
	$tabComite = array();
	$france = "de France";
	$essor = "du challenge de l\'Essor";
	$duManoir = "du challenge Yves du Manoir";
	$esperance = "du challenge de l\'Espérance";
	$beguere = "du challenge Beguere";
	$amitie = "du challenge de l\'amitié";
	$espoir = "du challenge de l\'espoir";
	$coupe = "de la coupe de France";

	$reponse = $bdd->query("SELECT saison, champion, comite1 
						FROM $table
						WHERE rang = $division
						AND rang2 = $division  AND saison between $anneeCreation and $anneeMax
						AND (championnat = '$france'  OR  championnat = '$essor' OR championnat = '$duManoir'  OR championnat = '$esperance'   OR championnat = '$amitie' 
						 OR championnat = '$espoir'    OR championnat = '$coupe' )
						AND (titre ='champion' OR titre = 'Vainqueur')
						ORDER BY saison DESC");

	while ($donnees =  $reponse->fetch()) {
		$tabSaison[] = $donnees['saison'];
		$tabChampion[] = $donnees['champion'];
		$tabComite[] = $donnees['comite1'];
	}

//echo $tabSaison[0];
//echo $tabChampion[0];
//echo $tabComite[0];

	$periode = $anneeMax - $anneeCreation;
	$pasDeChampionnat = "Pas de championnat";
	$covid = "Pas de titre décerné";
	$pasDeChallenge = "Challenge non disputé";

	// ----------  Division Nationale B --------

	if ($division == 230) {

		for ($i = 0; $i < $periode; $i++) {

			if ($tabSaison[$i] >= 1932 or $tabSaison[$i] <= 1902) {
				echo "<h4>";
				echo  $tabSaison[$i] . ' : ' . $tabChampion[$i] . ' ' . $tabComite[$i];
				echo "</h4>";
			} else {
			?>


				<table class="marginAuto styleArial" width="95%">
					<tr>


						<td width="10%">
							<?php
							echo "<h4 style=\" margin: 7px\">";
							echo  $tabSaison[$i] . ':';
							echo "</h4>";
							?>

						</td>

						<td width="30%">

							<?php

							echo "<h4 style=\" margin: 7px\">";
							echo  $tabChampion[$i] . ' ' . $tabComite[$i];
							echo "</h4>";
							?>
						</td>
						<td width="30%">
							<?php
							$reponse = $bdd->query("SELECT saison, champion, comite1 
						FROM $table
						WHERE rang = 233
						AND rang2 = 233  
						AND championnat = '$france'       
						AND titre ='Champion' 
						ORDER BY saison DESC");

							while ($donnees =  $reponse->fetch()) {
								$tabSaison[] = $donnees['saison'];
								$tabChampion3[] = $donnees['champion'];
								$tabComite3[] = $donnees['comite1'];
							}

							echo "<h4 style=\" margin: 7px\">";
							echo  $tabChampion3[$i] . ' ' . $tabComite3[$i];
							echo "</h4>";
							?>
						</td>
						<td width="30%">
							<?php


							$reponse = $bdd->query("SELECT saison, champion, comite1 
						FROM $table
						WHERE rang = 234
						AND rang2 = 234  
						AND championnat = '$france'       
						AND titre ='Champion' 
						ORDER BY saison DESC");

							while ($donnees =  $reponse->fetch()) {
								$tabSaison4[] = $donnees['saison'];
								$tabChampion4[] = $donnees['champion'];
								$tabComite4[] = $donnees['comite1'];
							}
							echo "<h4 style=\" margin:7px\">";
							echo $tabChampion4[$i] . ' ' . $tabComite4[$i];
							echo "</h4>";
							?>
						</td>
					</tr>
				</table>

				<?php
			}
		}
	} else {

		for ($i = 0; $i <= $periode; $i++) {

			if ($tabChampion[$i] == $pasDeChampionnat || $tabChampion[$i] == $covid    || $tabChampion[$i] == $pasDeChallenge) {
				echo "<h4 style = \"background-color : #C5C6C7; width:300px; margin: 0px auto\">";

				echo  $tabSaison[$i] . ' : ' . $tabChampion[$i] . ' ' . $tabComite[$i];
				echo "</h4>";
				echo "<br>";
			} else {

				echo "<h4>";
				echo  $tabSaison[$i] . ' : ' . $tabChampion[$i] . ' ' . $tabComite[$i];
				echo "</h4>";
			}
		}
	}
}


function palmaresParDivisionLigne($division, $table, $anneeCreation, $anneeMax, $bdd, $smart)

{
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
	$coupe = "de la coupe de France";
	$challenge ="Challenge";


	//AND rang2 = $division  AND saison between $anneeCreation and $anneeMax

	$reponse = $bdd->query("SELECT saison, champion, comite1, commentaire
						FROM $table
						WHERE rang = $division
						AND rang2 = $division  AND saison between $anneeCreation and $anneeMax
						AND (championnat = '$france'  OR  championnat = '$essor' OR championnat = '$duManoir'  OR championnat = '$esperance'   OR championnat = '$amitie'  OR championnat = '$espoir'
						OR championnat = '$coupe'   OR championnat = '$challenge'  )
						ORDER BY saison DESC");

	while ($donnees =  $reponse->fetch()) {
		$tabSaison[] = $donnees['saison'];
		$tabChampion[] = $donnees['champion'];
		$tabComite[] = $donnees['comite1'];
		$tabCommentaire[] = $donnees['commentaire'];
	}


	$pattern = "/[0-9]{7}/i";
	$tabNom = array();
	$periode = $anneeMax - $anneeCreation;
	$pasDeChampionnat = "Pas de championnat";
	$covid = "Pas de titre décerné";
	$pasDeChallenge = "Challenge non disputé";


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

	for ($i = 0; $i <= $periode; $i++) {
		if ($tabChampion[$i] == $pasDeChampionnat || $tabChampion[$i] == $covid || $tabChampion[$i] == $pasDeChallenge) {
			echo  "<h4 style = \"background-color : #C5C6C7; width:300px; margin: 0px auto\">";
			echo  $tabSaison[$i] . ' : ' . $tabNom[$i] . ' ' . $tabComite[$i];
			echo "</h4>";
			echo "<br>";
		} else {
			if ($smart == true) {
				echo "<div style=\" margin : 15px; font-size: 18px\" class=\"center styleArial\">";
				echo  $tabSaison[$i] . ' : ' . $tabNom[$i] . ' ' . $tabComite[$i];
				echo "</div>";
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
	}
}

function palmaresParDivision($division, $table, $bdd)
{
	$tabSaison = array();
	$tabChampion = array();
	$tabComite = array();

	$reponse = $bdd->query("SELECT saison, champion, comite1 
						FROM $table
						WHERE championnat='de France' 
						AND rang=$division 
						AND rang2=$division  AND saison < 2019
						AND (titre='champion'  OR titre ='Vainqueur')
						ORDER BY saison DESC");

	while ($donnees =  $reponse->fetch()) {
		$tabSaison[] = $donnees['saison'];
		$tabChampion[] = $donnees['champion'];
		$tabComite[] = $donnees['comite1'];


		if ($donnees['saison'] == '2018' and $division == '330') {
			echo "<h1><font color=\"#000000\">";
			echo "Jules Balandrade";
			echo "<br />";
			echo "</font></h1>";
		} elseif ($donnees['saison'] == '2018' and $division == '370') {
			echo "<h1><font color=\"#000000\">";
			echo "Jean Teulière";
			echo "<br />";
			echo "</font></h1>";
		}
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
		echo  $tabSaison[$i] . ' : ' . $tabNom[$i] . ' ' . $tabComite[$i];
		echo "</h4>";
	}
}



?>





<?php
//***********************************************************************/
//                  Palmares Comités (Avant la saison 2018-2019)                                    */
//***********************************************************************/

function palmares($comite, $rang, $bdd, $debut, $fin)
{
	$nbre = 0;
	// déclaration des toutes les variables en variables globales soit( $honneur2018, $honneur2017, $honneur2016,....)

	$tabPalmaresHonneur = array();
	for ($i = $debut; $i > $fin; $i--) {

		global ${"honneur" . ($i)};


		// requete permettant de récupèrer les champions du comité demandé
		$reponse = $bdd->query("SELECT  champion
							FROM bdequipe1
							WHERE  saison=$i 
							AND rang='$rang' 
							AND comite1 ='$comite' 
							AND championnat != 'de France' 
							AND titre='Champion'
							ORDER BY saison");

		while ($row = $reponse->fetch()) {
			$tabPalmaresHonneur[] = $row[0];
		}
		// affectation  des variables  		
		if (isset($tabPalmaresHonneur[$nbre])) ${"honneur" . ($i)} = $tabPalmaresHonneur[$nbre];
		else ${"honneur" . ($i)} = '-';
		echo substr(${"honneur" . ($i)}, 0, 20);
		echo "<br><hr>";
		$nbre = $nbre + 1;
	}
}


//****************************************************************************
function saison($rang, $comite, $bdd, $debut, $fin)
{
	$nbre = 0;
	// Recherche de la derniere année enregistrée

	$tabSaison = array();

	//echo $maxAnnee;
	// d�claration des toutes les variables en variables globales soit( $honneur2018, $honneur2017, $honneur2016,....)

	for ($i = $debut; $i > $fin; $i--) {
		global ${"saison" . ($i)};
		// requete permettant de r�cup�rer les champions du comit� demand�
		$reponse = $bdd->query("SELECT  champion
				 FROM bdequipe1
				 WHERE  saison=$i and rang='$rang' and comite1 ='$comite' and championnat != 'de France' and titre='Champion'
				 order by saison");
		while ($row = $reponse->fetch()) {
			$tabSaison[] = $row[0];
		}

		if (isset($tabSaison[$nbre])) ${"saison" . ($i)} = $tabSaison[$nbre];
		else ${"saison" . ($i)} = '-';
		echo $i;
		echo "<br><hr>";

		$nbre = $nbre + 1;
	}
}



function palmares2($comite, $rang, $bdd)
{
	$nbre = 0;
	// Recherche de la derniere ann�e enregistr�e
	$reponse = $bdd->query("SELECT MAX(saison)
				FROM bdequipe2
				WHERE rang='$rang' 
				AND comite1 ='$comite' 
				AND championnat != 'de France' 
				AND titre='Champion'
				AND saison < '2021'");
	while ($row = $reponse->fetch()) {
		$maxAnnee = $row[0];
	}

	//echo $maxAnnee;
	// d�claration des toutes les variables en variables globales soit( $honneur2018, $honneur2017, $honneur2016,....)

	$tabPalmaresHonneur = array();
	for ($i = $maxAnnee; $i > 1990; $i--) {
		global ${"honneur" . ($i)};

		// requete permettant de r�cup�rer les champions du comit� demand�
		$reponse = $bdd->query("SELECT  champion
							FROM bdequipe2
							WHERE  saison=$i 
							AND rang='$rang' AND rang2='2'
							AND comite1 ='$comite' 
							AND championnat != 'de France' 
							AND titre='Champion'
							ORDER BY saison");

		while ($row = $reponse->fetch()) {
			$tabPalmaresHonneur[] = $row[0];
		}
		// affectation  des variables  
		//echo $i; //echo "<br>";
		//echo $nbre; echo "<br>";
		//echo $tabPalmaresHonneur[20];		
		if (isset($tabPalmaresHonneur[$nbre])) ${"honneur" . ($i)} = $tabPalmaresHonneur[$nbre];
		else ${"honneur" . ($i)} = '-';
		echo substr(${"honneur" . ($i)}, 0, 30);
		echo "<br><hr>";
		$nbre = $nbre + 1;
	}
}


function saison2($rang, $comite, $bdd)
{
	$nbre = 0;

	// Recherche de la derniere année enregistr�e
	$reponse = $bdd->query("SELECT MAX(saison)
				FROM bdequipe2
				WHERE (rang='$rang' or rang='$rang + 9000') 
				AND comite1 ='$comite' 
				AND championnat != 'de France' 
				AND titre='Champion'
				AND saison < '2021'");
	while ($row = $reponse->fetch()) {
		$maxAnnee = $row[0];
	}

	// Déclaration des toutes les variables en variables globales soit( $honneur2018, $honneur2017, $honneur2016,....)

	$tabPalmaresHonneur = array();

	for ($i = $maxAnnee; $i > 1990; $i--) {

		global ${"honneur" . ($i)};


		// requete permettant de récupérer les champions du comité demandé
		$reponse = $bdd->query("SELECT  champion
				 FROM bdequipe2
				 WHERE  saison=$i 
				 and (rang='$rang' or rang='$rang + 9000') 
				 and comite1 ='$comite' 
				 and championnat != 'de France' 
				 and titre='Champion'
				 order by saison");
		while ($donnees = $reponse->fetch()) {
			$tabPalmaresHonneur[] = $row[0];
		}
		// affectation  des variables  
		//echo $i; //echo "<br>";
		//echo $nbre; echo "<br>";

		if (isset($tabPalmaresHonneur[$nbre])) ${"honneur" . ($i)} = $tabPalmaresHonneur[$nbre];
		else ${"honneur" . ($i)} = '-';
		echo $i;
		echo "<br><hr>";
		$nbre = $nbre + 1;
	}
}


function championsEurope($rang, $bdd)
{

	$pattern = "/[0-9]{7}/i";

	$reponse = $bdd->query("SELECT * 
FROM bdeurope 
WHERE rang='$rang'and titre='Vainqueur' 
ORDER BY saison DESC");



	while ($donnees =  $reponse->fetch()) {

		$saison = $donnees['saison'];
		$champion = $donnees['champion'];
		$comite = $donnees['comite1'];

		if (preg_match($pattern, $champion) == 1) {
			//echo preg_match($pattern, $champion);

			$reponseCode = $bdd->query("SELECT nom_1
	FROM bdclubs 
	WHERE id='$champion' ");

			while ($donnees =  $reponseCode->fetch()) {

				$champion = $donnees['nom_1'];
			}
		}
?>


		<div class="size4 styleArial center">
			<?php echo $saison . ' ' . $champion . ' ' . $comite; ?>
		</div> <br>
<?php
	}
}
?>