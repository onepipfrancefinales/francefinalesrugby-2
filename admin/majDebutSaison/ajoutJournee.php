<!DOCTYPE html>
<html lang="fr">

<head>



	<link type="text/css" rel="stylesheet" href="../../ligne1.css">
	<title><?php echo $champReg; ?> Maj des résultats </title>
	<meta name="description"
		content=" Résulats des compétitions territoriales du comité Armagnac Bigorre. Calendriers, résultats et statistiques de l'honneur � la 4me Série, équipes II comprises. Egalement disponible les phases finales territoriales des années précédentes et les palmares territoriaux des difféerentes divisions du comité. ">
	<meta name="classification" content="Sport,Rugby">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="resource-type" content="document">
	<meta name="copyright" content="Comite Midi Pyrenees de Rugby">
	<meta name="author" content="Equipe Onepip">
	<meta name="robots" content="All">
</head>

<body>
	<div class="alignementGauche">



		<?php
		//récuperation des variables
		require 'testmethodebonus.php';
		if (isset($_GET['bddComitePlusId'])) $bddComitePlusId = $_GET['bddComitePlusId'];
		else $bddComitePlusId = "";
		echo "bddComitePlusId : " . $bddComitePlusId;
		echo "<br />";

		$ligue000000 = substr($bddComitePlusId, -2);
		$ligue = substr($bddComitePlusId, 0, 5);

		if ($ligue == "phppr")
			$ligue = "phppro";
		elseif ($ligue == "phpfe")
			$ligue = "phpfed3NE";
		elseif ($ligue == "phpid")
			$ligue = "phpidf";
		else
			$ligue = $ligue;

		if (isset($_GET['base'])) $base = $_GET['base'];
		else $base = "";
		if (isset($_POST['fichier'])) $test = $_POST['fichier'];
		else $test = "erreur";

		$base = "matchs";

		echo "Ligue : " . $ligue;
		echo "<br />";
		echo "Base : " . $base;
		echo "<br />";
		$dest = '/admin/majDebutSaison/fichiers/';
		echo "chemin de stockage : " . $dest;
		echo "<br/>";

		$cheminn = dirname(__FILE__) . "/fichiers/";
		echo "chemin dirname : " . $cheminn;
		echo "<br/>";

		echo "chemin absolu du fichier : " . $cheminn;
		echo "<br/>";
		//echo "nom du fichier : ".['fichier']['name'];echo "<br/>";
		//echo "taille du fichier : ".$_FILES['fichier']['size'];echo "<br/>";
		//echo "nom du fichier(basemane) :".basename($_FILES['fichier']['name']);
		echo "<br/>";
		$fichier = $_FILES['fichier']['name'];
		$fichierChemin = $_FILES['fichier']['tmp_name'];


		//**********   Recherche du  caractère de séparation  **********************

		//$fichierA = fopen("$cheminn", 'r+');
		//Recuperation de la 1re ligne du fichier
		//$fichierLigne = fgets($fichierA, 4096); 


		//recherche des caractere de séparation

		$caratereSeparation = ",";
		$chemin_fichier = $_SERVER["DOCUMENT_ROOT"] . $dest;
		echo "<br/>";

		//************************************
		//echo $_FILES['fichier'];


		echo "????? : " . $cheminn . $fichier;
		if (!isset($erreur)) //S'il n'y a pas d'erreur, on upload
		{
			echo "<br/>";
			var_dump($_FILES['fichier']['tmp_name']);
			echo "<br/>";
			var_dump($fichier);
			echo "<br/>";
			var_dump($dest);
			echo "<br/>";

			if (move_uploaded_file($_FILES['fichier']['tmp_name'], $cheminn . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
			{
				echo 'Upload effectu&eacute; avec succès !';
				echo "<br/>";
				//	echo "----------------------------";
				echo "<br/>";
			} else //Sinon (la fonction renvoie FALSE).
			{
				echo 'Echec de l\'upload !';
				echo "<br/>";
			}
		} else {
			echo $erreur;
		}
		echo "fichier à exploité : " . $fichier;
		echo "<br/>";
		//echo"---------------------------------------------";
		echo "<br/>";
		//echo"---------------------------------------------";
		echo "<br/>";
		// ****** Connexion à la base ******

		echo "bdd utilisée : " . $ligue;
		echo "<br/>";
		require '../../connect/connexion6.php';

		$tableMatch = $ligue . "_matchs";
		$tableJournees = $ligue . "_journees";
		$tableEquipe = $ligue . "_equipes";
		$tableEquipesresultat = $ligue . "_equipesresultat";

		echo "<br />";
		echo $tableMatch . "<br />";
		//----------------------------------------------



		//**************************************************
		//               Traitement des résultats
		//**************************************************
		//--------------------------------------------


		//****************************************

		//**********************************************//
		//**********************************************// 
		//           Etude de la première ligne
		//**********************************************//
		//**********************************************//
		// lecture de la première ligne
		$fp = fopen("$cheminn$fichier", "r");
		$ligne1 = fgets($fp);

		$liste = explode($caratereSeparation, $ligne1);
		$id = $liste[0];
		$id_equipe_dom = $liste[1];
		$id_equipe_ext = $liste[2];
		$date_reelle = $liste[3];
		$id_journee = $liste[4];
		$buts_dom = $liste[5];
		$buts_ext = $liste[6];


		$journee =  substr($id_journee, -2);
		$competition = substr($id, 3, 3);
		$journeeDebut = $id_journee;
		$journeeFin = $journeeDebut + 21;

		echo "*************** Données du fichier ***************";
		echo "<br />";
		echo "id : " . $id;
		echo "<br />";
		echo "compétition : " . $competition;
		echo "<br />";
		echo "journée : " . $journee;
		echo "<br />";


		$buts_dom = intval($buts_dom);
		$buts_ext = intval($buts_ext);
		//******* traitements des scores    ******	
		echo "<br />";
		echo 'données du fichier : ' . $id . ' - ' . $id_equipe_dom . ' - ' . $id_equipe_ext . ' - ' . $date_reelle . ' - ' . $id_journee . ' - ' . $buts_dom . ' - ' . $buts_ext;
		echo "<br>";
		echo "<br>";
		//*******************************************************************
		//*******************************************************************
		//*******************************************************************
		//*******************************************************************
		//*******************************************************************


		//confection des variables pour la requête
		echo "***************   variables de la requete   ******************";
		echo "<br>";

		$codeLigue = substr($id, 0, 2);
		$debutPoule = substr($id, 2, 3);
		echo "<br>";
		echo "debut de poule : " . $debutPoule;
		echo "<br>";

		if (isset($debutPouleTraite)) $debutPouleTraite = $debutPouleTraite;
		else $debutPouleTraite = 0;
		if (isset($finPouleTraite)) $finPouleTraite = $finPouleTraite;
		else $finPouleTraite = 0;


		if ($ligue == "phppro" or $ligue == "phpfed3NE"  or $ligue == "phpfed3ne") {
			echo "Choix de la division";

			//FED1
			if (substr($id, 0, 6) == 990141) {
				$debutPouleTraite = 99014101;
				$finPouleTraite =   99014922;
			} elseif (substr($id, 0, 6) == 990241) {
				$debutPouleTraite = 99024101;
				$finPouleTraite =   99024922;
			}
			//FED2
			elseif (substr($id, 0, 6) == 990151) {
				$debutPouleTraite = 99015101;
				$finPouleTraite =   99015922;
			} elseif (substr($id, 0, 6) == 990251) {
				$debutPouleTraite = 99025101;
				$finPouleTraite =   99025922;
			}

			//FED2 test
			elseif (substr($id, 0, 6) == 990651) {
				$debutPouleTraite = 99065101;
				$finPouleTraite =   99065322;
				//$finPouleTraite =   99065922;
			} elseif (substr($id, 0, 6) == 990751) {
				$debutPouleTraite = 99075101;
				$finPouleTraite =   99075922;
			}

			//FED3NE - Poule 1 à 9
			elseif (substr($id, 0, 6) == 991161) {
				$debutPouleTraite = 99116101;
				$finPouleTraite =   99116922;
			}
			//FED3NE - Poule 10 à 18	
			elseif (substr($id, 0, 6) == 992161) {
				$debutPouleTraite = 99216101;
				$finPouleTraite =   99216922;
			}
			//Excellence B - Poule 1 à 9
			elseif (substr($id, 0, 6) == 991261) {
				$debutPouleTraite = 99126101;
				$finPouleTraite =   99126922;
			}
			//Excellence B - Poule 10 à 18
			elseif (substr($id, 0, 6) == 992261) {
				$debutPouleTraite = 99226101;
				$finPouleTraite =   99226922;
			}


			//FEMININES
			elseif (substr($id, 0, 6) == 880281) {
				$debutPouleTraite = 88028101;
				$finPouleTraite =   88028522;
			} elseif (substr($id, 0, 6) == 880291) {
				$debutPouleTraite = 88029101;
				$finPouleTraite =   88029522;
			}
		} elseif ($ligue == "phpab" or $ligue == "phpca"  or $ligue == "phpau") {

			//ARA
			if (substr($id, 0, 6) == 100171) {
				$debutPouleTraite = 10017101;
				$finPouleTraite = 10017922;
			} elseif (substr($id, 0, 6) == 100181) {
				$debutPouleTraite = 10018101;
				$finPouleTraite = 10018922;
			} elseif (substr($id, 0, 6) == 100191) {
				$debutPouleTraite = 10019101;
				$finPouleTraite = 10019922;
			} elseif (substr($id, 0, 6) == 100271) {
				$debutPouleTraite = 10027101;
				$finPouleTraite =   10027922;
			} elseif (substr($id, 0, 6) == 109181) {
				$debutPouleTraite = 10918101;
				$finPouleTraite =   10918922;
			}

			// NAQ
			elseif (substr($id, 0, 6) == 190171) {
				$debutPouleTraite = 19017101;
				$finPouleTraite = 19017922;
			} elseif (substr($id, 0, 6) == 190181) {
				$debutPouleTraite = 19018101;
				$finPouleTraite = 19018922;
			} elseif (substr($id, 0, 6) == 190191) {
				$debutPouleTraite = 19019101;
				$finPouleTraite = 19020922;
			} elseif (substr($id, 0, 6) == 190271) {
				$debutPouleTraite = 19027101;
				$finPouleTraite =   19027922;
			} elseif (substr($id, 0, 6) == 199181) {
				$debutPouleTraite = 19918101;
				$finPouleTraite =   19918922;
			}

			// OCC
			elseif (substr($id, 0, 6) == 200171) {
				$debutPouleTraite = 20017101;
				$finPouleTraite = 20017922;
			} elseif (substr($id, 0, 6) == 200181) {
				$debutPouleTraite = 20018101;
				$finPouleTraite = 20018922;
			} elseif (substr($id, 0, 6) == 200191) {
				$debutPouleTraite = 20019101;
				$finPouleTraite = 20020922;
			} elseif (substr($id, 0, 6) == 200271) {
				$debutPouleTraite = 20027101;
				$finPouleTraite =   20027922;
			} elseif (substr($id, 0, 6) == 209181) {
				$debutPouleTraite = 20918101;
				$finPouleTraite =   20918922;
			}
		} elseif ($ligue == "phpidf" or $ligue == "phppl") {

			//******   TABLE PL   *****************

			//BFC
			if (substr($id, 0, 6) == 110171) {
				$debutPouleTraite = 11017101;
				$finPouleTraite = 11022122;
			} elseif (substr($id, 0, 6) == 110271) {
				$debutPouleTraite = 11027101;
				$finPouleTraite = 11919122;
			}
			//BRE
			elseif (substr($id, 0, 6) == 120171) {
				$debutPouleTraite = 12017101;
				$finPouleTraite = 12018122;
			} elseif (substr($id, 0, 6) == 120191) {
				$debutPouleTraite = 12019101;
				$finPouleTraite = 12022122;
			} elseif (substr($id, 0, 6) == 120271) {
				$debutPouleTraite = 12027101;
				$finPouleTraite = 12919122;
			}
			//CVL
			elseif (substr($id, 0, 6) == 130171) {
				$debutPouleTraite = 13017101;
				$finPouleTraite = 13022122;
			} elseif (substr($id, 0, 6) == 130271) {
				$debutPouleTraite = 13027101;
				$finPouleTraite = 13919122;
			}
			//HDF
			elseif (substr($id, 0, 6) == 160171) {
				$debutPouleTraite = 16017101;
				$finPouleTraite = 16017822;
			} elseif (substr($id, 0, 6) == 160181) {
				$debutPouleTraite = 16018101;
				$finPouleTraite = 16018822;
			} elseif (substr($id, 0, 6) == 160191) {
				$debutPouleTraite = 16019101;
				$finPouleTraite = 16019822;
			} elseif (substr($id, 0, 6) == 160271) {
				$debutPouleTraite = 16027101;
				$finPouleTraite = 16027822;
			} elseif (substr($id, 0, 6) == 169181) {
				$debutPouleTraite = 16918101;
				$finPouleTraite = 16918822;
			}

			//PDL
			elseif (substr($id, 0, 6) == 210171) {
				$debutPouleTraite = 21017101;
				$finPouleTraite = 21022122;
			} elseif (substr($id, 0, 6) == 210271) {
				$debutPouleTraite = 12027101;
				$finPouleTraite = 21919122;
			}

			//******   TABLE IDF    *****************

			//GES
			elseif (substr($id, 0, 6) == 150171) {
				$debutPouleTraite = 15017101;
				$finPouleTraite = 15022122;
			} elseif (substr($id, 0, 6) == 150271) {
				$debutPouleTraite = 15027101;
				$finPouleTraite = 15919122;
			}
			//IDF
			elseif (substr($id, 0, 6) == 170171) {
				$debutPouleTraite = 17017101;
				$finPouleTraite = 17022122;
			} elseif (substr($id, 0, 6) == 170271) {
				$debutPouleTraite = 17027101;
				$finPouleTraite = 17919122;
			}
			//NOR
			elseif (substr($id, 0, 6) == 180171) {
				$debutPouleTraite = 18017101;

				$finPouleTraite =   19000000;
				//  $finPouleTraite = 18022122;
			} elseif (substr($id, 0, 6) == 116271) {
				$debutPouleTraite = 11627101;
				$finPouleTraite = 18919122;
			}
			//PCA
			elseif (substr($id, 0, 6) == 220171) {
				$debutPouleTraite = 22017101;
				$finPouleTraite = 22022122;
			} elseif (substr($id, 0, 6) == 220271) {
				$debutPouleTraite = 22027101;
				$finPouleTraite = 22919122;
			}
		}


		echo "<br/>";

		$journeeTraitee = $journee;
		$journeeDebut = $debutPouleTraite;
		$journeeFin = $journeeDebut + 21;

		echo "id réduit :" . substr($id, 0, 6);
		echo "<br>";
		echo "journeeTraitee : " . $journeeTraitee;
		echo "<br>";
		echo "debutPouleTraite : " . $debutPouleTraite;
		echo "<br>";
		echo "finPouleTraite : " . $finPouleTraite;
		echo "<br>";

		//****************************************
		//*******lecture de la table Matchs ******	
		//****************************************
		echo "<br>";
		echo "<br>";
		echo "***********************  Lecture des données en table    **********************";
		echo "<br>";
		require '../../connect/connexion6.php';

		if (isset($id_equipe_domBdd)) $id_equipe_domBdd = $id_equipe_domBdd;
		else $id_equipe_domBdd = NULL;
		if (isset($id_equipe_ExtBdd)) $id_equipe_ExtBdd = $id_equipe_ExtBdd;
		else $id_equipe_ExtBdd = NULL;
		if (isset($id_journeeBdd)) $id_journeeBdd = $id_journeeBdd;
		else $id_journeeBdd = 0;
		if (isset($buts_domBdd)) $buts_domBdd = $buts_domBdd;
		else $buts_domBdd = 0;
		if (isset($buts_extBdd)) $buts_extBdd = $buts_extBdd;
		else $buts_extBdd = 0;


		$idBdd = array();
		$id_equipe_domBdd = array();
		$id_equipe_extBdd  = array();
		$id_journeeBdd = array();
		$buts_domBdd = array();
		$buts_extBdd = array();

		//Nbre de lignes

		$requete = $bdd->query("SELECT COUNT(id)
						FROM $tableMatch
						WHERE substr(id_journee,-2) like '%$journeeTraitee%'
						and id_journee between '$debutPouleTraite' and '$finPouleTraite' ");


		$row = $requete->fetch();
		$nbreLignes = $row[0];


		echo "<br>";
		echo "********************                    *************************";
		echo "<br>";
		echo "<br>";
		echo "Championnat" . ' ' . "journée " . substr($id_journee, 6, 2);
		echo "<br />";
		echo "nombre de lignes traitées : " . $nbreLignes;
		echo "<br />";
		echo "<br>";
		echo "<br>";
		echo "***********    lecture des lignes du fichier     ********* ";
		echo "<br>";
		echo "<br>";


		$i = 0;
		$compteur_int = 0;
		while (!feof($fp)) {
			$ligne = fgets($fp, 4096);
			$liste = explode($caratereSeparation, $ligne);

			if (isset($liste[0])) $id = $liste[0];
			if (isset($liste[1])) $id_equipe_dom = $liste[1];
			if (isset($liste[2])) $id_equipe_ext = $liste[2];
			if (isset($liste[3])) $date_reelle = $liste[3];
			if (isset($liste[4])) $id_journee = $liste[4];
			if (isset($liste[5])) $buts_dom = $liste[5];
			if (isset($liste[6])) $buts_ext = $liste[6];


			//	echo $ligne[$i];echo "<br>";
			//	echo "affichage des données du fichier"."<br>";
			//echo $id." ".$id_equipe_dom." ".$id_equipe_ext." ".$date_reelle." ".$id_journee." ".buts_dom." ".."<br>";
			//	echo "testTest : ".$liste[0]."<br>";
			//echo "testcount : ".count($liste[])."<br>";
			//	echo "testTest : ".$liste[0]."<br>";
			//affichage des donnéesdans le fichier
			/*
			cho "affichage des données dans le fichier"."<br>";
			for ($i=0; $i<$nbreLignes; $i++)
				{echo  $id[$i] ."  ".
				 $id_equipe_dom[$i]."  ".
				 $id_equipe_ext[$i]."  ".
		 		$date_reelle[$i]."  ". 
				 $id_journee[$i]."  ".
				 $buts_dom[$i] ." - ".
				 $buts_ext[$i]."<br>";
				}
 				 */
			$journee = "J" . substr($id_journee, -2);
			$competition = substr($id, 3, 3);

			//echo "debut de poule : ".$debutPouleTraite; echo "<br>";
			///echo "fin de poule : ".$finPouleTraite; echo "<br>";




			if ($id > 0) {
				//echo "Ligne du Fichier(triée) : ". $id." ".$id_equipe_dom." ".$id_equipe_ext." ".$date_reelle." ".$id_journee." ".$buts_dom." ".$buts_ext;


				$buts_dom = intval($buts_dom);
				$buts_ext = intval($buts_ext);

				$reponse = $bdd->query("	
				SELECT id, id_equipe_dom, id_equipe_ext, date_reelle, id_journee, buts_dom, buts_ext
				FROM $tableMatch
				WHERE substr(id_journee,-2) like '%$journeeTraitee%'
				and id_journee between '$debutPouleTraite' and '$finPouleTraite'
				order by id_equipe_dom
				 ");

				while ($row = $reponse->fetch()) {
					$idBdd[] = $row[0];
					$id_equipe_domBdd[] = $row[1];
					$id_equipe_extBdd[] = $row[2];
					$date_reelleBdd[] = $row[3];
					$id_journeeBdd[] = $row[4];
					$buts_domBdd[] = $row[5];
					$buts_extBdd[] = $row[6];
				}

				//affichage des données en base
				/*
				echo "affichage des données en base"."<br>";
				for ($i=0; $i<$nbreLignes; $i++)
				{echo  $idBdd[$i] ."  ".
				 $id_equipe_domBdd[$i]."  ".
				 $id_equipe_extBdd[$i]."  ".
				 $date_reelleBdd[$i]."  ". 
				 $id_journeeBdd[$i]."  ".
				 $buts_domBdd[$i] ." - ".
				 $buts_extBdd[$i]."<br>";
				}
				*/

				if ($buts_domBdd[$i] + $buts_extBdd[$i]  > 0 and $buts_dom + $buts_ext == 0) {



					//echo" ------  test 1 : scores inscrits en base et non présents dans le fichier -------------";
					/*

				echo "<br>";
				echo $i . ' - '. $id . ' ' . "test1  : ". $ligne. "<br>";
				echo ("buts_domBdd : ".$buts_domBdd[$i]); echo ("  buts_dom: ".$buts_dom);echo "<br>";
				echo ("buts_extBdd : ".$buts_extBdd[$i]); echo ("  buts_ext: ".$buts_ext);echo "<br>";
				*/
				} elseif ($buts_domBdd[$i] + $buts_extBdd[$i] == 0 and  $buts_dom + $buts_ext > 0) {

					/*
				echo "<br>";
				echo"------ test 2 : Pas de scores en base  et  scores présents dans le fichier --------";echo "<br>";
					echo $i . ' - '. $ligne;echo "<br>";
				echo ("buts_domBdd : ".$buts_domBdd[$i]); echo ("  buts_dom: ".$buts_dom);echo "<br>";
				echo ("buts_extBdd : ".$buts_extBdd[$i]); echo ("  buts_ext: ".$buts_ext);echo "<br>";
				*/

					//			echo "comparaisons Ok Ok";
					//		echo "<br>";

					$bdd->exec("UPDATE $tableMatch
			  SET  date_reelle ='$date_reelle', buts_dom = '$buts_dom', buts_ext = '$buts_ext' ,  id_journee = '$id_journee'
			  WHERE id_equipe_dom = '$id_equipe_dom' AND id_equipe_ext = '$id_equipe_ext' ");
					//sleep(1);
					// echo "enreg Ok". "<br>";

					//recherche la présence de la rencontre retour	 

					$requete = $bdd->query("SELECT COUNT(id)
					FROM $tableMatch
					WHERE id_equipe_dom = '$id_equipe_ext' AND id_equipe_ext = '$id_equipe_dom' AND id_journee = '$id_journee'");
					$row = $requete->fetch();
					$presence = $row[0];

					//			echo "Présence de la rencontre retour : " . $presence;
					//echo "----------";echo "<br>";
					if ($presence == 1) {

						$idChampRetour =  substr($id_journee, 0, 6,);

						//				echo "<br>";
						//				echo "Modifier l'id_journée .";
						//				echo "<br>";
						//				echo "id_equipe_ext : " . $id_equipe_ext; echo "<br>";
						//				echo "id_equipe_dom : " . $id_equipe_dom; echo "<br>";
						echo "id_journee : " . $id_journee;
						echo "<br>";
						//				echo "idChampRetour : " . $idChampRetour;echo "<br>";

						$requete = $bdd->query("SELECT COUNT(id)
				FROM $tableJournees
				WHERE  id_champ = '$idChampRetour'");

						$row = $requete->fetch();
						$nombreDeJournees = $row[0];

						echo "nombreDeJournees : " . $nombreDeJournees;
						//echo "<br>";

						//	echo "<br>";

						$idJourneeRetour = $id_journee + ($nombreDeJournees / 2);
						echo "idJourneeRetour : " . $idJourneeRetour;

						$numero = substr($idJourneeRetour, -2);
						echo "numero : " . $numero;
						//echo "<br>";
						$bdd->exec("UPDATE $tableMatch
			  SET   id_journee = '$idJourneeRetour'
			  WHERE id_equipe_dom = '$id_equipe_ext' AND id_equipe_ext = '$id_equipe_dom' ");

						echo "idChampRetour : " . $idChampRetour;
						//echo "<br>";
						//TODO	 traiter la journée à sélectionner		
						//	$numero = 12;

						$reponse = $bdd->query("SELECT date_prevue
					FROM $tableJournees
					WHERE id_champ = '$idChampRetour' and numero = '$numero'");


						while ($row = $reponse->fetch()) {
							$dateRetour = $row[0];
						}

						echo "dateRetour : " . $dateRetour;



						//TODO Modifier la lheure en fonction du champiuonnat traité (premi)


						$dateReelleRetour = date('Y-m-d 15:i:s', strtotime($dateRetour));
						echo "dateReelleRetour : " . $dateReelleRetour;
						//echo "<br>";


						$bdd->exec("UPDATE $tableMatch
			  SET   date_reelle = '$dateReelleRetour'
			  WHERE id_journee = '$idJourneeRetour' ");

						//}
					}
				} elseif ($buts_domBdd[$i] + $buts_extBdd[$i] != 0 and  $buts_dom + $buts_ext != 0) {
					/*
				echo "<br>";
				echo " -------  test 3 scores présents en base et dans le fichier -------";echo "<br>";
				echo "fichier : ".$i . ' - '. $ligne;echo "<br>";
				*/
					//echo $id_equipe_domBdd[$i] ."--". $id_equipe_dom."-".$buts_extBdd[$i].'-'.$buts_ext;echo "<br>";
					/*
				echo  "bdd xx : ".$i ." ".$idBdd[$i] ."  ".
				 $id_equipe_domBdd[$i]."  ".
				 $id_equipe_extBdd[$i]."  ".
				 $date_reelleBdd[$i]."  ". 
				 $id_journeeBdd[$i]."  ".
		 		$buts_domBdd[$i] ." - ".
				 $buts_extBdd[$i];
				*/
					///	echo "<br>";
					//	echo "<br>";
					/*

						echo "<br>";echo "<br>";
						echo $i ."--". $id_journee;echo "<br>";
						echo $id_equipe_domBdd[$i] ."--". $id_equipe_dom;echo "<br>";
						echo $buts_domBdd[$i].'-'.$buts_dom ;echo "<br>";
						echo $buts_extBdd[$i].'-'.$buts_ext;echo "<br>";
						echo "<br>";
					*/
					//	echo $i . ' - '. $id . ' ' . "test3 : ". $ligne. "<br>";
					//	echo ("buts_domBdd : ".$buts_domBdd[$i]); echo ("  buts_dom: ".$buts_dom);echo "<br>";
					//	echo ("buts_extBdd : ".$buts_extBdd[$i]); echo ("  buts_ext: ".$buts_ext);echo "<br>";

				}
				//  ----- test 4  transformation des scores 0-0 en NULL-NULL  et  Verification de la date de la rencontre   ----------------------

				elseif ($buts_dom + $buts_ext == 0) {


					//echo" test 4  transformation des scores 0-0 en NULL-NULL  et  Verification de la date de la rencontre "."<br>";

					//	echo $i . ' - '. $id . ' ' . "test4 : ". $ligne." --- bdd --- ". $date_reelleBdd[$i]." --- fichier --- ".$date_reelle;
					/*
				echo "<br>";
				echo " -------  test 4 pas de scores en base et pas de scroe dans le fichier -------";echo "<br>";
				echo $i . ' - '. $ligne;echo "<br>";
		
				echo "<br>";
				*/

					if ($date_reelleBdd[$i] != $date_reelle) {
						$bdd->exec("UPDATE $tableMatch
				SET   date_reelle = '$date_reelle'
				WHERE id_equipe_dom = '$id_equipe_dom' 
				AND id_equipe_ext = '$id_equipe_ext'  ");

						//echo $i . ' - '. $id . ' ' . "test4 : ". $ligne." --- bdd --- ". $date_reelleBdd[$i]." --- fichier --- ".$date_reelle." rencontre reportée"."<br>";
						//echo $i . ' - '. $id . ' ' . "test4 : ". $ligne." rencontre reportée au " .$date_reelle."<br>";
					} else {



						//	echo $i . ' - '. $id . ' ' . "test4 : ". $ligne." --- bdd --- ". $date_reelleBdd[$i]." --- fichier --- ".$date_reelle."<br>";
					}
					//	echo ("buts_domBdd : ".$buts_domBdd[$i]); echo ("  buts_dom: ".$buts_dom);echo "<br>";
					//	echo ("buts_extBdd : ".$buts_extBdd[$i]); echo ("  buts_ext: ".$buts_ext);echo "<br>";


				}


				/********************************************************************* */

				//2-traitement du bonus défensif

				$bonusDef = 8;

				//cas 2.1 : récupération des données dans la table equipesresultats pour l'équipe qui se déplace
				$equipeTraitee = $id_equipe_ext;
				bonusDeLaJournee($equipeTraitee, $id_journee, $ligue, $bdd);

				//Bonus défensif pour l'équipe qui se déplace
				if ($buts_dom > $buts_ext and (($buts_dom - $buts_ext) < $bonusDef) and $bonusDeLaJournee == 0) {
					$equipeTraitee = $id_equipe_ext;
					bonusDefensif($equipeTraitee, $id_journee, $ligue, $bdd);
				}

				//cas 2.2 : récupération des données dans la table equipesresultats pour l'équipe qui reçoit
				$equipeTraitee = $id_equipe_dom;
				bonusDeLaJournee($equipeTraitee, $id_journee, $ligue, $bdd);

				//Bonus défensif pour l'équipe qui  recoit
				if (($buts_dom < $buts_ext) and (($buts_ext - $buts_dom) < $bonusDef) and $bonusDeLaJournee == 0) {
					$equipeTraitee = $id_equipe_dom;
					bonusDefensif($equipeTraitee, $id_journee, $ligue, $bdd);
				}


				//**************************************************************** */

				// 3-traitement du bonus offensif

				// Bonus offensif impossible faute d'ecart suffisant
				/*
				 si cumul des scores <= 20  
 				ET
 				présence d'un score (scoreDom ou scoreExt) = à 5, 7, 8, et 11
 				PAS DE BONUS OFFENSIF POSSIBLE
				*/

				echo $buts_dom . '-' . $buts_ext;
				$tabScoresMini = array(3, 5, 7, 8, 11);
				echo "<br>";
				foreach ($tabScoresMini as $scoreMini) {
					//echo "scoreMini ; ".$scoreMini;
				}

				//	  if ($buts_dom + $buts_ex < 20 and  ((in_array($buts_dom,$tabScoresMini)==true ) OR in_array($buts_ext,$tabScoresMini)==true))



				$bonusOff = 24;

				//cas 3.1 : récupération des données dans la table equipesresultats pour l'équipe qui se déplace
				$equipeTraitee = $id_equipe_ext;
				bonusDeLaJournee($equipeTraitee, $id_journee, $ligue, $bdd);

				//Bonus offensif pour l'équipe qui se déplace	
				if (($buts_dom < $buts_ext) and (($buts_ext - $buts_dom) > $bonusOff) and $bonusDeLaJournee == 0) {
					$equipeTraitee = $id_equipe_ext;
					bonusOffensif($equipeTraitee, $id_journee, $ligue, $bdd);
				}

				//cas 3.2 : récupération des données dans la table equipesresultats pour l'équipe qui reçoit	
				$equipeTraitee = $id_equipe_dom;
				bonusDeLaJournee($equipeTraitee, $id_journee, $ligue, $bdd);

				//Bonus offensif pour l'équipe qui reçoit
				if (($buts_dom > $buts_ext) and ($buts_dom - $buts_ext) > $bonusOff and $bonusDeLaJournee == 0) {
					$equipeTraitee = $id_equipe_dom;
					bonusOffensif($equipeTraitee, $id_journee, $ligue, $bdd);
				}

				//Traitement d'un forfait ou MEI (-2 de bonus)
				if ($buts_dom == 0 and $buts_ext == 25 and $bonusDeLaJournee > -1) {
					//echo "forfait dom";
					//echo "<br />";
					//echo $buts_dom . ' - ' . $buts_ext . ' - ' . $bonusDeLaJournee;
					//echo "<br />";
					$equipeTraitee = $id_equipe_dom;
					forfait($equipeTraitee, $id_journee, $ligue, $bdd);
				}

				if ($buts_dom == 25 and $buts_ext == 0 and $bonusDeLaJournee >= 0) {
					//echo "forfait ext3";
					//echo "<br />";
					//echo $buts_dom.' - '.$buts_ext.' - '.$bonusDeLaJournee;
					//echo "<br />";
					$equipeTraitee = $id_equipe_ext;
					forfait($equipeTraitee, $id_journee, $ligue, $bdd);
				}
















				$i = $i + 1;
			}
		}

		//echo "------------------------ fin de programme ----------------";
		//echo "<br/>";

		echo $journeeDebut;
		global $champRecup;
		echo "<br/>";
		$champRecup = substr($journeeDebut, 0, 6);
		echo "champRecup : xxxx " . $champRecup;
		echo "<br />";
		echo "ligue : " . $ligue;
		echo "<br />";
		require "../../Phpleague/$ligue/admin/genererSansIhm.php";
		echo "1111";
		require '../majScores/bas.php';
		echo "1";
		?>
	</div>
</body>

</html>