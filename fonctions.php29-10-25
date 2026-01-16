 <?php
	function appartientA($bddComite, $idEquipe,  $bdd)
	{

		global $resultat;
		$php_equipes = "php" . $bddComite . "_equipes";

		$reponse = $bdd->query("SELECT COUNT(id) 
						FROM $php_equipes
						WHERE id='$idEquipe'");

		while ($row = $reponse->fetch()) {
			$resultat = $row[0];
		}

		echo $resultat;
	}






	//*******************************************************	
	//********  Données contenu dans la table bdclubs  ******
	//*******************************************************
	function affichageSaisonEnCours($equipe, $bdd)
	{
		$equipe = substr($equipe, 2, 5);
		//	echo $equipe;
		global $saisonEnCours, $saisonEnCoursChiffre;

		$requete = $bdd->query(" SELECT bddivisions.division, bdsaisons.en_cours 
		   FROM bdsaisons 
		   INNER JOIN bddivisions
		   WHERE bdsaisons.id = '$equipe'
		   AND bdsaisons.en_cours = bddivisions.id 
		   AND bddivisions.cle = bddivisions.id * 1000 ");

		while ($row = $requete->fetch()) {
			$saisonEnCours = $row[0];
			$saisonEnCoursChiffre = $row[1];
		}
		/*
	$requete =$bdd->query( "SELECT en_cours 
	FROM bdsaisons 	
	WHERE id ='29164' ");
   
While ($row = $requete->fetch())
{ 
$saisonEnCours=$row[0];
//$saisonEnCoursChiffre=$row[1];
}
*/

		//echo "test methode";
		//	echo $saisonEnCours;
		//echo $saisonEnCoursChiffre;
	}

	function rechercheClubParId($idRecherche, $bdd)
	{
		global  $nomLong, $idFfr, $nomUsuel;


		$requete = $bdd->query("SELECT sigle,  idffr, nom_1
							FROM bdclubs  
							WHERE id ='$idRecherche'
							 and type='M' ");

		while ($row = $requete->fetch()) {
			$nomLong = $row[0];
			$idFfr = $row[1];
			$nomUsuel = $row[2];
		}
	}





	function infosclub($chaine, $bdd)
	{
		global $nomLong, $comite, $id, $sigleComite, $nomChampion, $numLigue, $code, $idFfr, $statut;

		global $chaine2;
		if (is_numeric($chaine)) {
			if (strlen($chaine) == 7) {
				$chaine2 = substr($chaine, -5);
			} else {
				$chaine2 = $chaine;
			}

			$requete = $bdd->query("SELECT sigle, siglecomite, id, nom_1 , ligue, comite, idffr
						FROM bdclubs  
						WHERE substr(id,-5) = $chaine2 and  type ='M' ");
		} else {
			$chaine2 = $chaine;
			$requete = $bdd->query("SELECT sigle, siglecomite, id, nom_1 , ligue, comite, idffr, fusion
							FROM bdclubs  
							WHERE (nom_1 ='$chaine2'
							OR nom_2 ='$chaine2'
							OR nom_3 ='$chaine2'
							OR nom_4 ='$chaine2'
							OR sigle ='$chaine2'
							OR idffr ='$chaine2') and type='M' ");
		}

		if (isset($id)) $id = $id;
		else $id = 0;
		if (isset($code)) $code = $code;
		else $code = 0;
		if (isset($numLigue)) $numLigue = $numLigue;
		else $numLigue = 0;


		while ($row = $requete->fetch()) {
			$nomLong = $row[0];
			$sigleComite = $row[1];
			$id = $row[2];
			$nomChampion = $row[3];
			$numLigue = $row[4];
			$idFfr = $row[6];
			$code = substr($id, -5);
			$statut = $row[7];
		}
	}

	//*******************************************************	
	//**************   Nom de la Ligue **********************
	//*******************************************************

	function nomLiguePalm($numLigue, $bdd)
	{
		if ($numLigue > 0) {
			global $nomLigue;
			$requete = $bdd->query("SELECT nom
							FROM bdligue
							WHERE id=$numLigue");
			while ($row = $requete->fetch()) {
				$nomLigue = $row[0];
			}
		}
	}
	//*******************************************************	
	//**************   Nom du comité  **********************
	//*******************************************************

	function nomComite($sigle, $id, $bdd)
	{
		global $idComite, $nomComite, $sigleComite, $appartenanceLigue, $nbreClubs;

		$reponse = $bdd->query("SELECT id, nom, sigle, sigleLigue, nbre_club
						FROM bdcomite 
						WHERE sigle='$sigle' OR id = '$id'");
		while ($row = $reponse->fetch()) {
			$idComite = $row[0];
			$nomComite = $row[1];
			$sigleComite = $row[2];
			$appartenanceLigue = $row[3];
			$nbreClubs = $row[4];
		}
	}

	//*******************************************************	
	//********  Données contenues dans la table infoclub  ******
	//*******************************************************

	function bdInfosClub($code, $bdd)
	{
		global $dateCreation, $president, $vicePresident, $tresorier, $secretaire, $contact, $siege, $idFFR,
			$adresse2, $cp, $ville,	$tel, $nomStade,	$adresseStade, $cpStade, $villeStade,
			$telStade, $capacite, $site, $courriel, $correspondant,	$sigle, $couleurs, $vicePresident,
			$nomEntente, $niveau, $info1,	$info2, $info3, $info4, $info5;

		$reponse = $bdd->query("
			 SELECT * 
			 FROM infosclub
			 WHERE id= '$code' ");

		while ($donnees = $reponse->fetch()) {
			$president = $donnees['A1601'];
			$secretaire = $donnees['A1602'];
			$contact = $donnees['A1603'];
			$siege = $donnees['A1604'];
			$adresse2 = $donnees['A1605'];
			$cp = $donnees['A1606'];
			$ville = $donnees['A1607'];
			$tel = $donnees['A1608'];
			$nomStade = $donnees['A1609'];
			$adresseStade = $donnees['A1610'];
			$cpStade = $donnees['A1611'];
			$villeStade = $donnees['A1612'];
			$telStade = $donnees['A1613'];
			$capacite = $donnees['A1614'];
			$vicePresident = $donnees['A1615'];
			$courriel = $donnees['A1616'];
			$correspondant = $donnees['A1617'];
			$sigle = $donnees['A1618'];
			$couleurs = $donnees['A1619'];
			$site = $donnees['A1620'];
			$info1 = $donnees['A1621'];
			$info2 = $donnees['A1622'];
			$info3 = $donnees['A1623'];
			$dateCreation = $donnees['A1624'];
			$idFFR = $donnees['A1625'];
			$info4 = $donnees['A1626'];
			$info5 = $donnees['A1627'];
			$tresorier =	$donnees['A1630'];
			$nomEntente = $donnees['A1631'];
			$niveau = $donnees['A1632'];
		}
	}

	//**********************************************************

	function saisons($code, $annee, $bdd)
	{

		for ($i = 2007; $i <= $annee; $i++) {
			global ${"terr" . $i};
			global ${"france" . $i};


			$reponse = $bdd->query("
			SELECT * 
			FROM bdsaisons 
			WHERE id='$code'");

			while ($donnees = $reponse->fetch()) {
				${"terr" . $i} = $donnees['terr_' . $i];
				${"france" . $i} = $donnees['france_' . $i];
			}
		}
	}

	//*****************************************
	function nbreTitre($nomChampion,  $id_equipe, $table, $categorie, $bdd)
	{
		$nbTitre = array();
		global $nombreTitre;
		$nbTitre = $bdd->query("SELECT COUNT(*)
					  FROM $table  
					  WHERE categorie='$categorie' AND (entente='$nomChampion' OR entente='$id_equipe')  ");

		$nbTitre = $nbTitre->fetch();
		$nombreTitre = $nbTitre[0];
	}

	//************************************************

	function palmares($nomChampion, $table, $categorie, $bdd)
	{
		$reponse = $bdd->query("SELECT *
						FROM $table
						WHERE entente='$nomChampion' and categorie='$categorie'  
						ORDER BY saison desc");

		while ($donnees = $reponse->fetch()) {
			echo $donnees['saison'] . ' ' . $donnees['titre'] . ' ' . $donnees['championnat'] . ' ' . $donnees['division']
				. "<br />";
		}
	}



	function palmaresParClub($nomChampion, $id_equipe, $table, $categorie, $bdd)
	{
		$reponse = $bdd->query("SELECT saison, titre, championnat, division
								FROM $table
								WHERE categorie='$categorie' AND (entente='$id_equipe' OR entente='$nomChampion')   
		ORDER BY saison desc");

		while ($donnees = $reponse->fetch()) {
			echo $donnees['saison'] . ' ' . $donnees['titre'] . ' ' . $donnees['championnat'] . ' ' . $donnees['division']
				. "<br />";
		}
	}

	function palmaresParClubLigne($nomChampion, $id_equipe, $table, $categorie, $bdd)
	{
		$reponse = $bdd->query("SELECT saison, championnat, division, champion, vice_champion
								FROM bdjeunesligne
								WHERE categorie='$categorie' 
								AND (entente='$id_equipe' OR entente='$nomChampion' or vice_champion='$id_equipe' OR vice_champion='$nomChampion')   
								ORDER BY saison desc");



		while ($donnees = $reponse->fetch()) {
			if ($donnees['champion'] == $nomChampion or $donnees['champion'] == $id_equipe)
				echo $donnees['saison'] . ' ' . "Champion" . ' ' . $donnees['championnat'] . ' ' . $donnees['division'] . "<br />";
			else
				echo $donnees['saison'] . ' ' . "Vice champion" . ' ' . $donnees['championnat'] . ' ' . $donnees['division'] . "<br />";
		}
	}






	//**************************************************

	/*****Europe  */

	//************************************************ */

	function nbreTitreEU($nomChampion, $bdd)
	{
		$nbTitreEU = array();
		global $nombreTitreEU;

		$nbTitreEU = $bdd->query("
		   SELECT COUNT(*)
		   FROM bdeurope  
		   WHERE champion='$nomChampion' 
		   AND categorie='EU' ");

		$nbTitreEU = $nbTitreEU->fetch();
		$nombreTitreEU = $nbTitreEU[0];
	}

	//**********************************************

	function palmaresEU($id_equipe, $bdd)
	{

		$reponse1 = $bdd->query("SELECT nom_1
		FROM bdclubs
		WHERE id=$id_equipe");
		while ($donnees = $reponse1->fetch()) {
			$nomChampion = $donnees['nom_1'];
		}

		$reponse = $bdd->query("SELECT *
						FROM bdeurope
						WHERE champion='$id_equipe'  or champion='$nomChampion' 
						ORDER BY saison desc");

		while ($donnees = $reponse->fetch()) {
			$saison = $donnees['saison'];
			$titre = $donnees['titre'];
			$division = $donnees['division'];

			echo $saison . ' ' . $titre . ' ' . $division . '' . "<br />";
		}
	}
	?>