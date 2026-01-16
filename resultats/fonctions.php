<?php

/*************************************************************************
 **************************************************************************

ATTENTION LIGNE 1744, MODIFIER LES COMMENTAIRES AVANT TOUT TRANSFERT FTP
faire une recherche sur       $bdd = new PDO
 **************************************************************************
 **************************************************************************
 */

function listePoule($champ, $bddComite, $bdd)
{
	$tabDivisions = array();
	$php_championnats = "php" . $bddComite . "_championnats";


	$champMini = (substr($champ, 0, 2)) * 10000;
	//echo $champMini;
	$champMax = $champMini + 10000;
	//echo $champMax;	
	$requete = $bdd->query("SELECT COUNT(id)
						FROM $php_championnats		
						WHERE id_division between '$champMini' and '$champMax' ");

	$row = $requete->fetch();
	$nbreDivisions = $row[0];

	//bddecho $nbreDivisions;	

	global $tabDivisions;
	$requete = $bdd->query("SELECT id
						FROM $php_championnats		
						WHERE id_division between '$champMini' and '$champMax' order by id_division ASC");

	while ($row = $requete->fetch()) {
		$tabDivisions[] = $row[0];
	}

	for ($i = 0; $i <= $nbreDivisions - 1; $i++) {
		$tabDivisions[$i];
		echo "<br>";
	}
}


function maj($champ, $smart, $comite, $bdd)
{

	if ($comite == "phpfed3ne" or $comite == "phpfed3NE")
		$bddComite = substr($comite, 3, 7);
	else
		$bddComite = substr($comite, 3, 3);

	if ($bddComite == "bg" or $bddComite == "br" or $bddComite == "ce" or $bddComite == "fl")
		$bddComite = "pl";
	elseif ($bddComite == "al" or $bddComite == "n" or $bddComite == "pr")
		$bddComite = "idf";

	$dateDuJour = date("Y-m-d H:i:s");
	$dateDuJourPlusUn = date("Y-m-d H:i:s", strtotime("+1 day"));
	$dateDuJourMoinsUn = date("Y-m-d H:i:s", strtotime("-1 day"));
	$php_journees = "php" . $bddComite . "_journees";


	//echo $champ;echo "<br>";
	//echo $dateDuJour;echo "<br>";
	//echo "<br>";
	//echo $dateDuJourMoinsUn;echo "<br>";
	//echo $dateDuJour;echo "<br>";
	//echo $dateDuJourPlusUn;echo "<br>";
	//echo $php_journees;echo "<br>";


	$requete = $bdd->query("	
				SELECT COUNT(id)
				FROM $php_journees
				WHERE date_prevue between '$dateDuJourMoinsUn' and '$dateDuJourPlusUn'
				AND id_champ = $champ
				");

	$row = $requete->fetch();
	$journeePrevue = $row[0];
	//echo "journee prevue : ". $journeePrevue;echo "<br>";
	//echo "champ : ".$champ;
	if ($journeePrevue > 0 and ($champ < 990110 or $champ > 990130)) {
?>
		<div align="center">
			<?php if ($smart == true) { ?>
				<a href="../personnalisation/session2/index.php?comite=<?php echo $comite; ?>&bddComite=<?php echo $bddComite; ?>&champ=<?php echo $champ; ?>">
					<font face="Arial, Helvetica, sans-serif" size="3" color="#FF0000">Mettre à jour les résultats</font>
				</a>
			<?php } else { ?>

				<a href="javascript:ouvrirPopup('../personnalisation/session2/index.php?comite=<?php echo $comite; ?>&bddComite=<?php echo $bddComite; ?>&champ=<?php echo $champ; ?>','', 'top=10, right=10,resizable=no, directories=no, statut=no, location=no, width=600, height=700, menubar=no  ')">
					<font color="#FF0000">Mettre à jour les résultats</font>
				</a>

			<?php } ?>
		</div>
		</font>

		<?php
		echo "<br>";
	}
}
//fonction
function affichage($champ, $champ2, $comite, $bdd)
{
	if ($champ2 > 0) {
		echo "<table class=\"width750\">";
		echo "<tr> ";
		echo "<td colspan=\"2\"> ";
		AffichageLogos($champ, $comite, false, $bdd);
		echo "</td> ";
		echo "</tr > ";



		echo "<tr> ";
		echo "<td class=\"verticalAlign\"> ";
		echo "<h3 class=\"center \">Equipe I </h3>";
		aff_journee($champ, $bdd);
		//	maj($champ, false, $comite, $bdd);
		clmnt($champ, false, $bdd);
		aff_journeeSupp($champ,  $bdd);
		echo "</td>";

		echo "<td class=\"verticalAlign\">";
		echo "<h3 class=\"center\">Equipe II</h3>";
		aff_journee($champ2, $bdd);
		if (substr($champ, 3, 2) > 17)
			$champ = $champ + 9000;
		else $champ = $champ + 100;
		//	maj($champ, false, $comite, $bdd);
		clmnt($champ2, false, $bdd);
		aff_journeeSupp($champ2,  $bdd);
		echo "</td>";
		echo "</tr>";
		echo "</table>";
		//messages déroulant
		//echo "<p class=\"ressource\">". messages ($champ);  </."</p>";

	} else {
		AffichageLogos($champ, $comite, false, $bdd);
		aff_journee($champ, $bdd);
		//	maj($champ, false, $comite, $bdd);
		clmnt($champ, false, $bdd);
		aff_journeeSupp($champ,  $bdd);
		//echo "<p class=\"ressource\">". messages ($champ);  </."</p>";
		// journeesReportees($comite, $champ, $bdd); 
	}
}



function affichageFacebook($champ, $comite, $bdd)
{

	//AffichageLogos($champ, $comite, false, $bdd);
	//aff_journee($champ, $bdd);
	//maj($champ, false, $comite, $bdd);
	clmntbdpl($champ, false, $bdd);
	//aff_journeeSupp($champ,  $bdd);
	//echo "<p class=\"ressource\">". messages ($champ);  </."</p>";
	// journeesReportees($comite, $champ, $bdd); 


}


function clmntbdpl($champ, $smart, $bdd)
{

	// echo "champtest".substr($champ,0,2);
	if (substr($champ, 2, 1) == 1 or substr($champ, 2, 1) == 2)
		$php = "phpfed3NE";
	elseif ($champ > 816140 and $champ < 990259)
		$php = "phppro";
	elseif (substr($champ, 0, 2) == 15 or substr($champ, 0, 2) == 17 or substr($champ, 0, 2) == 18 or substr($champ, 0, 2) == 22)
		$php = "phpidf";
	else
		$php = "phppl";


	$php_parametres = $php . "_parametres";
	$php_equipes = $php . "_equipes";
	$php_clmnt_cache = $php . "_clmnt_cache";



	//  $comite ="phppl";
	$lien = "oui";
	$type = "GENERAL";
	$legende = "";

	//barèmes du championnat
	$res = $bdd->query("SELECT accession, barrage, relegation 
				   FROM $php_parametres 
				   WHERE ID_CHAMP='$champ' 
					");

	while ($row = $res->fetch()) {
		$accession = $row[0];
		$barrage = $row[1];
		$relegation =  $row[2];
	}
	//echo $accession;echo "<br>";
	//echo $barrage;echo "<br>"; 
	//echo $relegation;echo "<br>";

	$res = $bdd->query("SELECT count(*) 
						 FROM $php_equipes 
						 WHERE id_champ='$champ'");

	$nb_equipes = $res->fetch();

	echo "<table class=\"tablephppl2\" align=\"center\" cellspacing=\"0\" width=\"16%\"><tr class=\"trphppl3\"><th colspan=\"11\">" . $legende . "</th></tr>\n";
	echo "<tr class=\"trphppl3\">

  <th align=\"center\">" . CLMNT_POSITION . "</th>
  <th align=\"left\">" . CLMNT_EQUIPE . "</th>
  <th align=\"left\">" . CLMNT_POINTS . "</th>
  <th align=\"left\">" . CLMNT_JOUES . "</th>
  </tr>\n";

	//if (isset ($legende)) $legende =$legende;else $legende= "";
	// if ($debut=="1" and $fin==$nb_journees)
	// {
	$nom = array();
	$points = array();
	$joues = array();
	$id_equipe = array();

	$res = $bdd->query("SELECT NOM, POINTS, JOUES, ID_EQUIPE 
								FROM $php_clmnt_cache 
								WHERE ID_CHAMP='$champ' 
								ORDER BY POINTS DESC, PEN DESC, DIFF DESC, BUTSPOUR DESC , BUTSCONTRE 
								ASC, NOM");

	// echo "<table class=\"tablephppl2\" align=\"center\" cellspacing=\"0\" width=\"16%\"><tr class=\"trphppl3\"><th colspan=\"11\">".$legende."</th></tr>\n";
	// echo "<tr class=\"trphppl3\>";

	$pl = 1;

	while ($row = $res->fetch()) {
		if ($row['NOM'] == EXEMPT) {
			continue;
		}
		if ($pl <= $accession) {
			echo "<tr class=\"accession\">";
		} elseif ($pl <= $barrage) {
			echo "<tr class=\"barrage\">";
		} elseif ($pl == $nb_equipes[0] - 1 and $relegation > 1) {
			echo "<tr class=\"relegation\">";
		} elseif ($pl == $nb_equipes[0] and $relegation > 0) {
			echo "<tr class=\"relegation\">";
		} elseif (($pl % 2) == 0) {
			echo "<tr class=\"ligne1\">";
		} else {
			echo "<tr class=\"ligne2\">";
		}

		//colonne 1
		echo "<td><div align=\"center\"><font color=\"#000000\"> $pl</font> </div></td>";
		$pl++;
		$x = 0;

		while ($x < 3) {
			//colonne 2/3 et 4
			echo "<td><div align=\"left\">";

			if ($x == 0) {
				if ($smart == true)
					echo $row[$x];
				else
					echo $row[$x];
			} else {
				echo floatval($row[$x]);
			}
			echo "</div></td>";
			$x++;
		}
		echo "</div></tr>\n";
	}
	echo "</table>";
	echo "<br>";
}

//**********************************Affichage de toutes les  rencontres par ligues **************

function affichageTitreCompet($date, $champ, $ligue, $comite, $bdd)
{

	if ($champ > 816000 and $champ < 816300) {
		$champ = 816216;
		$champMax = 816300;
		$categorie = "Féminines ";
	} elseif ($champ > 990000 and $champ < 990140) {
		$champ = 990110;
		$champMax = 990140;
		$categorie = "Pro  - pré pro";
	} elseif ($champ > 990140 and $champ < 990170) {
		$champ = 990140;
		$champMax = 990170;
		$categorie = "Fédérales";
	} elseif ($champ > 100170 and $champ < 220200) {
		$champ = 100170;
		$champMax = 220200;
		$categorie = "Régionales";
	}
	// echo "<br>";

	//echo "<br>";

	$php_journees = $comite . "_journees";
	$dateMax =  date('Y-m-d', strtotime($date . ' + 2 days')); // On ajoute 2 jours
	$dateMin = date('Y-m-d', strtotime($date . ' - 4 days')); // On ajoute 2 jours 

	if (isset($numero));
	else $numero = 0;

	$res3 = $bdd->query("SELECT COUNT(*)
					FROM $php_journees
					WHERE $php_journees.date_prevue between '$dateMin' and '$dateMax'
					AND $php_journees.id_champ between '$champ' and '$champMax'");

	$nb_equipe = $res3->fetch();

	// echo $row[0];
	//echo "nbre equipe : ".$nb_equipe[0];

	echo "<table width=\"750\">";
	echo "<tr valign=\"top\"> ";
	echo "<td> ";
	echo "<h4 class=\"perso\" align=\"center\">" . $categorie . "</h4>";
	//echo "<h3 align=\"center\">".$division ."</h3>";
	// affJourneeOppLigue($date, $champ, $comite, $ligue, $bdd);
	// affichageFacebook($champ, $comite, $bdd);	
	echo "</td>";

	echo "<td>";
	echo "<h3 align=\"center\">Equipe II</h3>";
	echo "</td>";
	echo "</tr>";
	echo "</table>";
}


function affichageOppositionsPro($page, $date, $champ, $ligue, $comite, $bdd)
{


	$php_journees = $comite . "_journees";
	$dateMax =  date('Y-m-d', strtotime($date . ' + 2 days')); // On ajoute 2 jours
	$dateMin = date('Y-m-d', strtotime($date . ' - 5 days')); // On ajoute 2 jours 

	if (isset($numero));
	else $numero = 0;

	$res3 = $bdd->query("SELECT $php_journees.numero
					FROM $php_journees
					WHERE $php_journees.date_prevue between '$dateMin' and '$dateMax'
					AND $php_journees.id_champ = '$champ'");

	while ($row = $res3->fetch()) {
		$numero = $row[0];
	}


	if ($numero > 0) {
		//echo "champ : ".substr($champ,3,2);
		//echo "champ : ".$champ;echo "<br>";

		if ($page == "presentation") {
			if (substr($champ, 3, 3) == 281 or substr($champ, 3, 3) == 282)
				$division = "Elite 1";
			elseif (substr($champ, 3, 3) == 285)
				$division = "Elite 2";
			elseif (substr($champ, 4, 1) == 9)
				$division = "Fem Fédérale 1";
			elseif (substr($champ, 3, 2) == 14)
				$division = "Fédérale 1 - Espoir Féd 1 ";
			elseif (substr($champ, 3, 2) == 15)
				$division = "Fédérale 2 - Fédérale B";
			elseif (substr($champ, 3, 2) == 16)
				$division = "Fédérale 3 - Excellence B";
		} elseif ($page == "resultats") {
			if (substr($champ, 3, 3) == 281 or substr($champ, 3, 3) == 282)
				$division = "Elite 1";
			elseif (substr($champ, 3, 3) == 285)
				$division = "Elite 2";
			elseif (substr($champ, 4, 1) == 9)
				$division = "Fem Fédérale 1";
			elseif (substr($champ, 3, 2) == 14)
				$division = "Fédérale 1  ";
			elseif (substr($champ, 3, 2) == 15)
				$division = "Fédérale 2 ";
			elseif (substr($champ, 3, 2) == 16)
				$division = "Fédérale 3 ";
			elseif (substr($champ, 3, 2) == 24)
				$division = "Espoir Féd 1 ";
			elseif (substr($champ, 3, 2) == 25)
				$division = "Fédérale B";
			elseif (substr($champ, 3, 2) == 26)
				$division = "Excellence B";
		}




		if (substr($champ, 4, 1) == 1)
			$division = "Top 14";
		elseif (substr($champ, 4, 1) == 2)
			$division = "Pro D2";
		elseif (substr($champ, 4, 2) == 30)
			$division = "Nationale ";
		elseif (substr($champ, 4, 2) == 35  or substr($champ, 4, 2) == 36)
			$division = "Nationale 2";


		if ($champ < 990000)
			$categorie = "Féminines ";
		elseif ($champ > 990000 and $champ < 990140)
			$categorie = "Pro  - pré pro";
		elseif ($champ > 990140 and $champ < 990170)
			$categorie = "Pro  - Fédérale";
		elseif ($champ > 990170 and $champ < 990200)
			$categorie = "Régionale";

		$ligueMax = $ligue + 100000;

		//echo "champ : ".$champ;echo "<br>";//
		//echo "base : ".$comite;echo "<br>";
		//echo "ligue : ".$ligue;echo "<br>";
		//echo "ligueMax : ".$ligueMax;echo "<br>";

		// echo "ligue :".$ligue;echo "<br>";
		//	echo "comite :".$comite;echo "<br>";
		//	echo "champ :".$champ;echo "<br>"; 

		//if ($ligue == 1100000	){

		if ($champ ==  816216) {
			$tabChampBFC = array(816216);
		} elseif ($champ ==  816285) {
			$tabChampBFC = array(816285);
		} elseif ($champ ==  816291) {
			$tabChampBFC = array(816291);
		} elseif ($champ ==  816292) {
			$tabChampBFC = array(816292);
		} elseif ($champ ==  816293) {
			$tabChampBFC = array(816293);
		} elseif ($champ ==  816294) {
			$tabChampBFC = array(816294);
		}




		if ($champ ==  990110) {
			$tabChampBFC = array(990110);
		} elseif ($champ ==  990120) {
			$tabChampBFC = array(990120);
		} elseif ($champ ==  990130) {
			$tabChampBFC = array(990130);
		} elseif ($champ ==  990135) {
			$tabChampBFC = array(990135);
		} elseif ($champ ==  990136) {
			$tabChampBFC = array(990136);
		}
		//}

		//BFC
		if ($ligue == 1100000) {
			if ($champ ==  990141) {
				$tabChampBFC = array(990141);
			} elseif ($champ ==  990241) {
				$tabChampBFC = array(990241);
			} elseif ($champ ==  990151) {
				$tabChampBFC = array(990151);
			} elseif ($champ ==  990251) {
				$tabChampBFC = array(990251);
			}
		}
		//BRE
		elseif ($ligue == 1200000) {
			if ($champ ==  990141) {
				$tabChampBFC = array(990141);
			} elseif ($champ ==  990241) {
				$tabChampBFC = array(990241);
			} elseif ($champ ==  990151) {
				$tabChampBFC = array(990158);
			} elseif ($champ ==  990251) {
				$tabChampBFC = array(990258);
			}
		}
		//CVL
		if ($ligue == 1300000) {
			if ($champ ==  990141) {
				$tabChampBFC = array(990141);
			} elseif ($champ ==  990241) {
				$tabChampBFC = array(990241);
			} elseif ($champ ==  990151) {
				$tabChampBFC = array(990157);
			} elseif ($champ ==  990251) {
				$tabChampBFC = array(990257);
			}
		}
		//NOR
		elseif ($ligue == 1160000) {
			if ($champ ==  990141) {
				$tabChampBFC = array(990141);
			} elseif ($champ ==  990241) {
				$tabChampBFC = array(990241);
			} elseif ($champ ==  990151) {
				$tabChampBFC = array(990158);
			} elseif ($champ ==  990251) {
				$tabChampBFC = array(990258);
			}
		}
		//PDL
		elseif ($ligue == 2100000) {
			if ($champ ==  990141) {
				$tabChampBFC = array(990144);
			} elseif ($champ ==  990241) {
				$tabChampBFC = array(990244);
			} elseif ($champ ==  990151) {
				$tabChampBFC = array(990157);
			} elseif ($champ ==  990251) {
				$tabChampBFC = array(990257);
			}
		}


		echo "<table width=\"750\">";
		echo "<tr valign=\"top\"> ";
		echo "<td > ";





		if ($champ > 816100) {

			echo "<h3 class =\"test1\" align=\"center\">" . $division . "</h3>";
			// foreach ($tabChampBFC as $champ)
			//	{ 


			if ($page == "presentation") {
				// féminines	 
				if (substr($champ, 3, 3) == 216) {
					echo "<img src=\"../images/logos_divisions/216.png\" border=\"0\" height=\"60\" width=\"90\">";
				} elseif (substr($champ, 3, 3) == 285) {
					echo "<img src=\"../images/logos_divisions/285.png\" border=\"0\" height=\"60\" width=\"90\">";
				} elseif (substr($champ, 3, 2) == 29) {
					echo "<img src=\"../images/logos_divisions/290.png\" border=\"0\" height=\"60\" width=\"90\">";
				}

				//pro
				elseif (substr($champ, 3, 2) == 11) {
					echo "<img src=\"../images/logos_divisions/110.png\" border=\"0\" height=\"60\" width=\"60\">";
				} elseif (substr($champ, 3, 2) == 12) {
					echo "<img src=\"../images/logos_divisions/120.png\" border=\"0\" height=\"60\" width=\"60\">";
				} elseif (substr($champ, 3, 3) == 130) {
					echo "<img src=\"../images/logos_divisions/130.png\" border=\"0\" height=\"60\" width=\"90\">";
				} elseif (substr($champ, 3, 3) == 135) {
					echo "<img src=\"../images/logos_divisions/135.png\" border=\"0\" height=\"60\" width=\"90\">";
				}
				//fédérales 1 et 2
				elseif (substr($champ, 3, 2) == 14) {
					echo "<img src=\"../images/logos_divisions/140.png\" border=\"0\" height=\"60\" width=\"90\">";
					echo "<img src=\"../images/logos_divisions/240.png\" border=\"0\" height=\"60\" width=\"90\">";
				} elseif (substr($champ, 3, 2) == 15) {
					echo "<img src=\"../images/logos_divisions/150.png\" border=\"0\" height=\"60\" width=\"90\">";
					echo "<img src=\"../images/logos_divisions/250.png\" border=\"0\" height=\"60\" width=\"90\">";
				}
			} else {
				//feminines
				if (substr($champ, 3, 3) == 216) {
					echo "<img src=\"../images/logos_divisions/216.png\" border=\"0\" height=\"60\" width=\"90\">";
				} elseif (substr($champ, 3, 3) == 285) {
					echo "<img src=\"../images/logos_divisions/285.png\" border=\"0\" height=\"60\" width=\"90\">";
				} elseif (substr($champ, 3, 2) == 29) {
					echo "<img src=\"../images/logos_divisions/290.png\" border=\"0\" height=\"60\" width=\"90\">";
				}
				//pro	 
				elseif (substr($champ, 3, 2) == 11) {
					echo "<img src=\"../images/logos_divisions/110.png\" border=\"0\" height=\"60\" width=\"60\">";
				} elseif (substr($champ, 3, 2) == 12) {
					echo "<img src=\"../images/logos_divisions/120.png\" border=\"0\" height=\"60\" width=\"60\">";
				} elseif (substr($champ, 3, 3) == 130) {
					echo "<img src=\"../images/logos_divisions/130.png\" border=\"0\" height=\"60\" width=\"90\">";
				} elseif (substr($champ, 3, 3) == 135) {
					echo "<img src=\"../images/logos_divisions/135.png\" border=\"0\" height=\"60\" width=\"90\">";
				}

				// federales 1 et2

				elseif (substr($champ, 3, 2) == 14)
					echo "<img src=\"../images/logos_divisions/140.png\" border=\"0\" height=\"60\" width=\"90\">";
				elseif (substr($champ, 3, 2) == 24)
					echo "<img src=\"../images/logos_divisions/240.png\" border=\"0\" height=\"60\" width=\"90\">";

				if (substr($champ, 3, 2) == 15)
					echo "<img src=\"../images/logos_divisions/150.png\" border=\"0\" height=\"60\" width=\"90\">";
				elseif (substr($champ, 3, 2) == 25)
					echo "<img src=\"../images/logos_divisions/250.png\" border=\"0\" height=\"60\" width=\"90\">";
				//if ($champ > 990140)
				//echo "<font size=\"4\" align=\"center\"><b>"."Poule ".substr($champ,-1)."</font></b>";
			}
			//if ($page=="resultats") {echo "<font size=\"4\" align=\"center\"><b>"."Poule ".substr($champ,-1)."</font></b>";}

			if ($page == "presentation") {


				affJourneeOppLigue($date, $champ, $comite, $ligue, $bdd);
			} else {

				foreach ($tabChampBFC as $champ) {
					if ($champ > 990140)
						echo "<font size=\"4\" align=\"center\"><b>" . "Poule " . substr($champ, -1) . "</font></b>";


					affJourneeOppLigue($date, $champ, $comite, $ligue, $bdd);
					if ($champ > 990140) { //echo "champ : ".$champ;
						affichageFacebook($champ, $comite, $bdd);
					}
				}
			}
		}
		echo "</td>";

		echo "<td>";
		echo "<h3 class =\"test1\" align=\"center\">Equipe II</h3>";
		echo "</td>";
		echo "</tr>";
		echo "</table>";
	}
}


function affichageOppositionsLigueNE($page, $date, $champ, $ligue, $comite, $bdd)
{

	$php_journees = $comite . "_journees";
	$dateMax =  date('Y-m-d', strtotime($date . ' + 2 days')); // On ajoute 2 jours
	$dateMin = date('Y-m-d', strtotime($date . ' - 4 days')); // On ajoute 2 jours 



	if (isset($numero));
	else $numero = 0;

	$res3 = $bdd->query("SELECT $php_journees.numero
					FROM $php_journees
					WHERE $php_journees.date_prevue between '$dateMin' and '$dateMax'
					AND $php_journees.id_champ = '$champ'");

	while ($row = $res3->fetch()) {
		$numero = $row[0];
	}

	if ($numero > 0) {
		if ($page == "presentation") {
			if (substr($champ, 3, 2) == 16)
				$division = "Fédérale 3 - Excellence B";
		} elseif ($page == "resultats") {
			if (substr($champ, 3, 2) == 16)
				$division = "Fédérale 3 ";
			elseif (substr($champ, 3, 2) == 26)
				$division = "Excellence B";
		}

		$ligueMax = $ligue + 100000;

		//echo "champ : ".$champ;echo "<br>";
		//echo "base : ".$comite;echo "<br>";
		//echo "ligue : ".$ligue;echo "<br>";
		//echo "ligueMax : ".$ligueMax;echo "<br>";


		echo "<table width=\"750\">";
		echo "<tr valign=\"top\"> ";
		echo "<td> ";

		echo "<h3 class =\"test1\" align=\"center\">" . $division . "</h3>";



		if ($ligue == 1100000) {
			if ($champ ==  991161) {
				$tabChampBFC = array(991163, 991164, 992166, 992167);
			} elseif ($champ ==  991261) {
				$tabChampBFC = array(991263, 991264, 992266, 992267);
			}
		} elseif ($ligue == 1200000) {
			if ($champ ==  991161) {
				$tabChampBFC = array(992169);
			} elseif ($champ ==  991261) {
				$tabChampBFC = array(992269);
			}
		} elseif ($ligue == 1300000) {
			if ($champ ==  991161) {
				$tabChampBFC = array(992167, 992168);
			} elseif ($champ ==  991261) {
				$tabChampBFC = array(992267, 992268);
			}
		} elseif ($ligue == 1160000) {
			if ($champ ==  991161) {
				$tabChampBFC = array(992160);
			} elseif ($champ ==  991261) {
				$tabChampBFC = array(992260);
			}
		} elseif ($ligue == 2100000) {
			if ($champ ==  991161) {
				$tabChampBFC = array(992168, 992169);
			} elseif ($champ ==  991261) {
				$tabChampBFC = array(992268, 992269);
			}
		}



		if ($page == "presentation") {
			echo "<table align=\"center\">";
			echo "<tr>";
			echo "<td>";

			echo "<img src=\"../images/logos_divisions/160.png\" border=\"0\" height=\"60\" width=\"90\">";

			echo "<img src=\"../images/logos_divisions/260.png\" border=\"0\" height=\"60\" width=\"90\">";
			echo "</td>";
			echo "<td> <font size=\"4\"><b>";
			echo "</b></font></td>";
			echo "</tr>";
			echo "</table>";
			affJourneeOppLigueNE($date, $champ, $comite, $ligue, $bdd);

			echo "</td>";

			echo "<td>";
			echo "<h3 class =\"test1\" align=\"center\">Equipe II</h3>";
			echo "</td>";
			echo "</tr>";
			echo "</table>";
		} else {


			foreach ($tabChampBFC as $champ) {

				echo "<table align=\"center\">";
				echo "<tr>";
				echo "<td>";
				if (substr($champ, 3, 1) == 1)
					echo "<img src=\"../images/logos_divisions/160.png\" border=\"0\" height=\"60\" width=\"90\">";
				elseif (substr($champ, 3, 1) == 2)
					echo "<img src=\"../images/logos_divisions/260.png\" border=\"0\" height=\"60\" width=\"90\">";
				echo "</td>";

				if ($champ > 992000) {
					if (substr($champ, -1) == 0) $numChamp = 20;
					else $numChamp = substr($champ, -1) + 10;
				}
				echo "<td> <font size=\"4\"><b>" . "Poule " . $numChamp . "</b></font></td>";
				echo "</tr>";
				echo "</table>";

				affJourneeOppLigueNE($date, $champ, $comite, $ligue, $bdd);
				affichageFacebook($champ, $comite, $bdd);
			}
			echo "</td>";

			echo "<td>";
			echo "<h3 class =\"test1\" align=\"center\">Equipe II</h3>";
			echo "</td>";
			echo "</tr>";
			echo "</table>";
		}
	}
}








function affichageOppositionsLigueBFC($page, $date, $champ, $ligue, $comite, $bdd)
{

	$php_journees = $comite . "_journees";
	$dateMax =  date('Y-m-d', strtotime($date . ' + 2 days')); // On ajoute 2 jours
	$dateMin = date('Y-m-d', strtotime($date . ' - 2 days')); // On ajoute 2 jours 






	if (isset($numero));
	else $numero = 0;

	$res3 = $bdd->query("SELECT $php_journees.numero
					FROM $php_journees
					WHERE $php_journees.date_prevue between '$dateMin' and '$dateMax'
					AND $php_journees.id_champ = '$champ'");

	while ($row = $res3->fetch()) {
		$numero = $row[0];
	}


	if ($numero > 0) {

		if ($page == "presentation") {
			if (substr($champ, 2, 3) == '017')
				$division = "Régionale 1 - Réserve rég 1";
			elseif (substr($champ, 2, 3) == '018')
				$division = "Régionale 2 - Réserve rég 2";
			elseif (substr($champ, 2, 3) == '019')
				$division = "Régionale 3";
		} elseif ($page == "resultats") {
			if (substr($champ, 2, 3) == '017')
				$division = "Régionale 1";
			elseif (substr($champ, 2, 3) == '018')
				$division = "Régionale 2";
			elseif (substr($champ, 2, 3) == '019')
				$division = "Régionale 3";
			elseif (substr($champ, 2, 3) == '027')
				$division = "Réserve Régionale 1";
			elseif (substr($champ, 2, 3) == '918')
				$division = "Réserve Régionale 2";
		}
		//echo "champ : ".substr($champ,3,3);	
		//$ligue = $champ;
		$ligueMax = $ligue + 100000;

		//echo "champ : ".$champ;echo "<br>";
		//echo "base : ".$comite;echo "<br>";
		//echo "ligue : ".$ligue;echo "<br>";
		//echo "ligueMax : ".$ligueMax;echo "<br>";




		echo "<table width=\"750\">";
		echo "<tr valign=\"top\"> ";
		echo "<td> ";

		echo "<h3 class =\"test1\" align=\"center\">" . $division . "</h3>";


		echo "<table align=\"center\">";
		echo "<tr>";
		echo "<td>";
		if ($page == "presentation") {
			if (substr($champ, 2, 3) == '017') {
				echo "<img src=\"../images/logos_divisions/170.png\" border=\"0\" height=\"60\" width=\"90\">";
				echo "<img src=\"../images/logos_divisions/270.png\" border=\"0\" height=\"60\" width=\"90\">";
			} elseif (substr($champ, 2, 3) == '018') {
				echo "<img src=\"../images/logos_divisions/116.png\" border=\"0\" height=\"60\" width=\"90\">";
				echo "<img src=\"../images/logos_divisions/9116.png\" border=\"0\" height=\"60\" width=\"90\">";
			} elseif (substr($champ, 2, 3) == '019')
				echo "<img src=\"../images/logos_divisions/190.png\" border=\"0\" height=\"60\" width=\"90\">";
		} else {
			if (substr($champ, 2, 3) == '017')
				echo "<img src=\"../images/logos_divisions/170.png\" border=\"0\" height=\"60\" width=\"90\">";
			elseif (substr($champ, 2, 3) == '018')
				echo "<img src=\"../images/logos_divisions/116.png\" border=\"0\" height=\"60\" width=\"90\">";
			elseif (substr($champ, 2, 3) == '019')
				echo "<img src=\"../images/logos_divisions/190.png\" border=\"0\" height=\"60\" width=\"90\">";
			elseif (substr($champ, 2, 3) == '027')
				echo "<img src=\"../images/logos_divisions/270.png\" border=\"0\" height=\"60\" width=\"90\">";
			elseif (substr($champ, 2, 3) == '918')
				echo "<img src=\"../images/logos_divisions/9116.png\" border=\"0\" height=\"60\" width=\"90\">";
		}
		echo "</td>";
		echo "<td> <font size=\"4\"><b>";
		//affichage des numéros de poules	
		if ($page == "resultats") {
			echo "Poule " . substr($champ, -1);
		}
		echo "</b></font></td>";
		echo "</tr>";
		echo "</table>";



		if ($page == "presentation")
			affJourneeOppLigueBFC($date, $champ, $comite, $ligue, $bdd);
		else {
			//echo "champ1 : ".$champ;echo "<br>";
			affJourneeOppLigueBFC($date, $champ, $comite, $ligue, $bdd);
			//echo "champ2 : ".$champ;echo "<br>";
			//	echo "ligue : ".$ligue;echo "<br>";
			//echo "comite : ".$comite;echo "<br>";
			//echo "champ : ".$champ;echo "<br>";
			affichageFacebook($champ, $comite, $bdd);
		}

		echo "</td>";

		echo "<td>";
		echo "<h3 class =\"test1\" align=\"center\">Equipe II</h3>";
		echo "</td>";
		echo "</tr>";
		echo "</table>";
	}
}

//******************************************************
//******************************************************
function messages($champ)
{

	//phppro
	$messagePro_110 = "";
	$messagePro_120 = "";
	$messagePro_130 = "";

	$messageFed1_141 = "";
	$messageFed1_142 = "";
	$messageFed1_143 = "";
	$messageFed1_144 = "";

	$messageFed2_151 = "";
	$messageFed2_152 = "";
	$messageFed2_153 = "";
	$messageFed2_154 = "";
	$messageFed2_155 = "";
	$messageFed2_156 = "";
	$messageFed2_157 = "";
	$messageFed2_158 = "";

	$messageFem_216 = "";
	$messageFem_285 = "";
	$messageFem_143 = "";
	$messageFem_144 = "";

	//phpfed3NE

	$messageFed3_1161 = "";
	$messageFed3_1162 = "";
	$messageFed3_1163 = "";
	$messageFed3_1164 = "";
	$messageFed3_1165 = "";
	$messageFed3_1166 = "";
	$messageFed3_1167 = "";
	$messageFed3_1168 = "";

	$messageFed3_2161 = "";
	$messageFed3_2162 = "";
	$messageFed3_2163 = "";
	$messageFed3_2164 = "";
	$messageFed3_2165 = "";
	$messageFed3_2166 = "";
	$messageFed3_2167 = "";
	$messageFed3_2168 = "";

	//phpab


	if ($champ == 200171)
		echo "azerty";

	$messageAb_172 = "";
	$messageAb_173 = "";
	$messageAb_174 = "";

	$messageAb_181 = "";
	$messageAb_182 = "";
	$messageAb_183 = "";
	$messageAb_184 = "";

	$messageAb_191 = "";
	$messageAb_192 = "";
	$messageAb_193 = "";
	$messageAb_194 = "";


	//phpau

	$messageAu_171 = "";
	$messageAu_172 = "";
	$messageAu_173 = "";
	$messageAu_174 = "";

	$messageAu_181 = "";
	$messageAu_182 = "";
	$messageAu_183 = "";
	$messageAu_184 = "";

	$messageAu_191 = "";
	$messageAu_192 = "";
	$messageAu_193 = "";
	$messageAu_194 = "";

	//phpca

	$messageCa_171 = "";
	$messageCa_172 = "";
	$messageCa_173 = "";
	$messageCa_174 = "";

	$messageCa_181 = "";
	$messageCa_182 = "";
	$messageCa_183 = "";
	$messageCa_184 = "";

	$messageCa_191 = "";
	$messageCa_192 = "";
	$messageCa_193 = "";
	$messageCa_194 = "";


	//phpidf
	$messageIdf_171 = "";
	$messageIdf_172 = "";
	$messageIdf_181 = "";
	$messageIdf_182 = "";
	$messageIdf_191 = "";
	$messageIdf_192 = "";
	$messageIdf_201 = "";
	$messageIdf_202 = "";
	$messageIdf_211 = "";
	$messageIdf_212 = "";
	$messageIdf_213 = "";




	//phppl

	$messagePr_171 = "";
	$messagePr_181 = "";
	$messagePr_191 = "";
	$messagePr_201 = "";
}




function evolutionResultats($equipe, $comite, $champ, $bdd)
{


	$php_matchs = $comite . "_matchs";
	$php_journees = $comite . "_journees";

	$requete = $bdd->query("SELECT MAX(numero)
						FROM $php_journees		
						WHERE id_champ = '$champ'");

	$row = $requete->fetch();
	$maxJournee = $row[0];

	$premiereJournee = $champ * 100 + 1;
	$derniereJournee = $champ . $maxJournee;

	$tabEquipeDom = array();
	$tabEquipeExt = array();
	$tabButs_dom = array();
	$tabButs_ext = array();

	for ($id_journee = $premiereJournee; $id_journee <= $derniereJournee; $id_journee++) {
		$requete = $bdd->query("SELECT id_equipe_dom, id_equipe_ext, buts_dom, buts_ext
						FROM $php_matchs
						WHERE id_journee = '$id_journee'
						AND (id_equipe_dom = '$equipe' OR id_equipe_ext = '$equipe')
						ORDER BY id ASC
						");

		while ($row = $requete->fetch()) {
			$tabEquipeDom[] = $row[0];
			$tabEquipeExt[] = $row[1];
			$tabButs_dom[] = $row[2];
			$tabButs_ext[] = $row[3];
		}
	}
	echo "<table width=\"100%\"
>";
	echo "<tr>";
	for ($i = 0; $i < $maxJournee; $i++) {

		echo "<td>";
		echo "J";
		echo $i + 1;


		if (isset($tabButs_dom[$i]));
		else $tabButs_dom[$i] = 0;
		if (isset($tabButs_ext[$i]));
		else $tabButs_ext[$i] = 0;
		if (isset($tabEquipeDom[$i]));
		else $tabEquipeDom[$i] = "";
		if (isset($tabEquipeExt[$i]));
		else $tabEquipeExt[$i] = "";

		is_numeric($tabButs_dom[$i]);
		is_numeric($tabButs_ext[$i]);
		is_string($tabEquipeDom[$i]);
		is_string($tabEquipeExt[$i]);
		//echo $i+1;  
		if ($tabButs_dom[$i] + $tabButs_ext[$i] > 0) {
			$resultat = $tabButs_dom[$i] - $tabButs_ext[$i];

			if ("$tabEquipeDom[$i]" === "$equipe" and $tabButs_dom[$i] > $tabButs_ext[$i]) {
				print("<img src=\"/resultats/bilan/gagnedream.jpg\"  height=\"25\" width=\"25\">");
			}

			if ("$tabEquipeDom[$i]" === "$equipe" and $tabButs_dom[$i] < $tabButs_ext[$i]) {
				print("<img src=\"/resultats/bilan/perdudream.jpg\"  height=\"25\" width=\"25\">");
			}

			if ("$tabEquipeExt[$i]" === "$equipe" and $tabButs_dom[$i] < $tabButs_ext[$i]) {
				echo ("<img src=\"/resultats/bilan/gagnedream.jpg\"  height=\"25\" width=\"25\">");
			}

			if ("$tabEquipeExt[$i]" === "$equipe"	and $tabButs_dom[$i] > $tabButs_ext[$i]) {
				echo ("<img src=\"/resultats/bilan/perdudream.jpg\"  height=\"25\" width=\"25\">");
			}

			if ($resultat == 0) {
				echo ("<img src=\"/resultats/bilan/nulldream.jpg\"  height=\"25\" width=\"25\">");
			}
		} else {
			echo ("<img src=\"/resultats/bilan/rien.jpg\"  height=\"25\" width=\"25\">");
		}

		echo "</td>";
	}
	echo "</tr>";
	echo "</table>";
}

function evolutionResultatsSmart($equipe, $comite, $champ, $bdd)
{

	$php_matchs = $comite . "_matchs";
	$php_journees = $comite . "_journees";

	$requete = $bdd->query("SELECT MAX(numero)
						FROM $php_journees		
						WHERE id_champ = '$champ'");

	$row = $requete->fetch();
	$maxJournee = $row[0];

	$premiereJournee = $champ * 100 + 1;
	$derniereJournee = $champ . $maxJournee;

	$tabEquipeDom = array();
	$tabEquipeExt = array();
	$tabButs_dom = array();
	$tabButs_ext = array();

	for ($id_journee = $premiereJournee; $id_journee <= $derniereJournee; $id_journee++) {
		$requete = $bdd->query("SELECT id_equipe_dom, id_equipe_ext, buts_dom, buts_ext
						FROM $php_matchs
						WHERE id_journee = '$id_journee'
						AND (id_equipe_dom = '$equipe' OR id_equipe_ext = '$equipe')
						ORDER BY id ASC
						");

		while ($row = $requete->fetch()) {
			$tabEquipeDom[] = $row[0];
			$tabEquipeExt[] = $row[1];
			$tabButs_dom[] = $row[2];
			$tabButs_ext[] = $row[3];
		}
	}
	// echo "maxjournée : ".$maxJournee;
	$demiMaxJournee = $maxJournee / 2;
	// echo $demiMaxJournee;

	echo "<table  class=\"center width90PC marginAuto\">";

	//******phase Aller******

	echo "<tr>";
	echo "<td colspan=\"3\" class=\"alignGauche\">";
	echo "<b>";
	echo "Phase aller : ";
	echo "</b>";
	echo "</td>";
	echo "</tr>";
	echo "<tr>";
	for ($i = 0; $i < $demiMaxJournee; $i++) {
		echo "<td class=\"center\">";
		echo "J";
		echo $i + 1;
		echo "</td>";
	}
	echo "</tr>";
	echo "<tr>";
	for ($i = 0; $i < $demiMaxJournee; $i++) {

		echo "<td class=\"center\">";
		//echo "J";
		//echo $i+1;


		if (isset($tabButs_dom[$i]));
		else $tabButs_dom[$i] = 0;
		if (isset($tabButs_ext[$i]));
		else $tabButs_ext[$i] = 0;
		if (isset($tabEquipeDom[$i]));
		else $tabEquipeDom[$i] = "";
		if (isset($tabEquipeExt[$i]));
		else $tabEquipeExt[$i] = "";

		is_numeric($tabButs_dom[$i]);
		is_numeric($tabButs_ext[$i]);
		is_string($tabEquipeDom[$i]);
		is_string($tabEquipeExt[$i]);
		//echo $i+1;  
		if ($tabButs_dom[$i] + $tabButs_ext[$i] > 0) {
			$resultat = $tabButs_dom[$i] - $tabButs_ext[$i];

			if ("$tabEquipeDom[$i]" === "$equipe" and $tabButs_dom[$i] > $tabButs_ext[$i]) {
				print("<img class=\"height25 width27\" src=\"/resultats/bilan/gagnedream.jpg\" alt=\"affichage\" >");
			}

			if ("$tabEquipeDom[$i]" === "$equipe" and $tabButs_dom[$i] < $tabButs_ext[$i]) {
				print("<img class=\"height25 width27\" src=\"/resultats/bilan/perdudream.jpg\" alt=\"affichage\" >");
			}

			if ("$tabEquipeExt[$i]" === "$equipe" and $tabButs_dom[$i] < $tabButs_ext[$i]) {
				echo ("<img class=\"height25 width27\" src=\"/resultats/bilan/gagnedream.jpg\" alt=\"affichage\" >");
			}

			if ("$tabEquipeExt[$i]" === "$equipe"	and $tabButs_dom[$i] > $tabButs_ext[$i]) {
				echo ("<img class=\"height25 width27\" src=\"/resultats/bilan/perdudream.jpg\" alt=\"affichage\" >");
			}

			if ($resultat == 0) {
				echo ("<img class=\"height25 width27\" src=\"/resultats/bilan/nulldream.jpg\" alt=\"affichage\" >");
			}
		} else {
			echo ("<img class=\"height25 width27\" src=\"/resultats/bilan/rien.jpg\" >");
		}

		echo "</td>";
	}
	echo "</tr>";
	echo "<tr>";
	echo "<td height=\"2\"></td>";
	echo "</tr>";
	echo "<tr>";
	/******  phase Retour******/
	echo "<td colspan=\"3\"class=\"alignGauche\">";
	echo "<b>";
	echo "Phase retour : ";
	echo "<b>";
	echo "</td>";
	echo "</tr>";
	echo "<tr>";
	for ($i = $demiMaxJournee; $i < $maxJournee; $i++) {
		echo "<td class=\"center\">";
		echo "J";
		echo $i + 1;
		echo "</td>";
	}
	echo "</tr>";
	echo "<tr>";
	for ($i = $demiMaxJournee; $i < $maxJournee; $i++) {

		echo "<td class=\"center\">";
		//echo "J";
		//echo $i+1;


		if (isset($tabButs_dom[$i]));
		else $tabButs_dom[$i] = 0;
		if (isset($tabButs_ext[$i]));
		else $tabButs_ext[$i] = 0;
		if (isset($tabEquipeDom[$i]));
		else $tabEquipeDom[$i] = "";
		if (isset($tabEquipeExt[$i]));
		else $tabEquipeExt[$i] = "";

		is_numeric($tabButs_dom[$i]);
		is_numeric($tabButs_ext[$i]);
		is_string($tabEquipeDom[$i]);
		is_string($tabEquipeExt[$i]);
		//echo $i+1;  
		if ($tabButs_dom[$i] + $tabButs_ext[$i] > 0) {
			$resultat = $tabButs_dom[$i] - $tabButs_ext[$i];

			if ("$tabEquipeDom[$i]" === "$equipe" and $tabButs_dom[$i] > $tabButs_ext[$i]) {
				print("<img class=\"height25 width27\" src=\"/resultats/bilan/gagnedream.jpg\" alt=\"affichage\">");
			}

			if ("$tabEquipeDom[$i]" === "$equipe" and $tabButs_dom[$i] < $tabButs_ext[$i]) {
				print("<img class=\"height25 width27\" src=\"/resultats/bilan/perdudream.jpg\" alt=\"affichage\">");
			}

			if ("$tabEquipeExt[$i]" === "$equipe" and $tabButs_dom[$i] < $tabButs_ext[$i]) {
				echo ("<img class=\"height25 width27\" src=\"/resultats/bilan/gagnedream.jpg\" alt=\"affichage\">");
			}

			if ("$tabEquipeExt[$i]" === "$equipe"	and $tabButs_dom[$i] > $tabButs_ext[$i]) {
				echo ("<img class=\"height25 width27\" src=\"/resultats/bilan/perdudream.jpg\" alt=\"affichage\">");
			}

			if ($resultat == 0) {
				echo ("<img class=\"height25 width27\" src=\"/resultats/bilan/nulldream.jpg\" alt=\"affichage\">");
			}
		} else {
			echo ("<img class=\"height25 width27\" src=\"/resultats/bilan/rien.jpg\" alt=\"affichage\" >");
		}

		echo "</td>";
	}
	echo "</tr>";



	echo "</table>";
}
//*************************************************************************************************
function journeesReportees($comite, $champ, $bdd)
{
	$tabEquipeDom = array();
	$tabEquipeExt = array();
	$tabButsDom = array();
	$tabButsExt = array();
	$tabDateReelle = array();
	$datePrevue = array();
	$tabJournee = array();
	$tabId_journee = array();
	$dateDuJour1 = date('D d M Y ');
	$dateDuJour = date('Y-m-d H:i:s');

	$dateDuJourUS = date('Y-m-d H:i:s');
	$dateDuJourFR = date('d-m-Y H:i:s');

	$dateDuJourPlusUn = date('Y-m-d H:i:s', strtotime($dateDuJour . '+ 1 days'));
	$php_clubs = $comite . "_clubs";
	$php_matchs = $comite . "_matchs";
	$php_journees = $comite . "_journees";
	//echo $dateDuJour;
	//**************   traitement  *************************	
	//test sur la présence de rencontres en retard
	if (isset($numeroJournee));
	else  $numeroJournee = 0;
	if (isset($derniereJournee));
	else  $derniereJournee = 0;



	$premiereJournee = $champ * 100 + 1;
	//echo "dateDuJour: ".$dateDuJour; echo "<br>";
	//echo "championnat: ".$champ;
	//	echo "1re journee: ".$premiereJournee;
	$requete = $bdd->query("SELECT numero, id
							FROM $php_journees
							WHERE date_prevue < '$dateDuJour'
							AND id_champ = '$champ'
							ORDER BY numero asc");

	while ($row = $requete->fetch()) {

		$numeroJournee = $row[0];
		$derniereJournee = $row[1];
	}
	//var_dump($numeroJournee);

	echo "<br>";
	//echo "num de journee : ".$numeroJournee;echo "<br>";
	//	echo "derniereJournee : ".$derniereJournee;echo "<br>";
	//	echo "date du jour : ".$dateDuJour;echo "<br>";
	$dateDuJourSansHeure = substr($dateDuJour, 0, 10);
	//	echo $dateDuJourSansHeure;echo "<br>";
	//echo "date du jour : ".$dateDuJourPlusUn;echo "<br>";

	//changement de la date US en FR
	if ($numeroJournee > 0 and $derniereJournee > 0) {

		$DateTime = DateTime::createFromFormat('Y-m-d', $dateDuJourSansHeure);
		$dateDuJourFR = $DateTime->format('d-M-Y');
		//echo "jourFR : ".$dateDuJourFR; echo "<br>";


		$annee = substr($dateDuJourFR, 7, 4);
		echo "<br>";
		$nbreMatchsReportes = array();

		$requete = $bdd->query("SELECT COUNT(*)
							FROM $php_matchs
							WHERE  id_journee between '$premiereJournee' and '$derniereJournee'
							AND date_reelle > '$dateDuJour'
							AND buts_dom IS NULL
							AND buts_ext IS NULL");

		$nbreMatchsReportes = $requete->fetch();

		if ($nbreMatchsReportes[0] > 0) {

		?>
			<table class="marginAuto width90PC tablephpab2  ">
				<tr>
					<td>
						<table class="marginAuto width100PC borderSpacing">
							<tr>
								<td class="colorYellow background3B487F">
									<b> <?php echo "Journée(s) reportée(s) au " . $dateDuJourFR;	?></b>
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
			<?php
		}



		$idJourneeMin = $champ * 100 + 1;
		$idJourneeMax = $champ * 100 + 22;
		//echo $idJourneeMin.' - '.$idJourneeMax;echo "<br>";
		if (isset($id_champ));
		for ($i = 0, $id_journee = $idJourneeMin; $i < 23, $id_journee < $idJourneeMax; $i++, $id_journee++) {
			//echo "id_journee : ".$id_journee;echo "<br>";
			///echo $id_champ;echo "<br>";
			$id_champ = substr($id_journee, 0, 6);
			//echo "id_champ : ".$id_champ;echo "<br>";
			// récuperation des dates prévues
			$requete = $bdd->query("SELECT date_prevue
							FROM $php_journees
							WHERE id_champ = $id_champ
							ORDER BY numero ASC");

			while ($row = $requete->fetch()) {
				$datePrevue[] = $row[0];
			}

			// récupération de l'equipe qui reçoit et de la date de report
			$requete = $bdd->query("SELECT $php_clubs.nom, $php_matchs.date_reelle, $php_matchs.buts_dom, $php_matchs.buts_ext 
							FROM $php_matchs
							INNER JOIN $php_clubs ON $php_clubs.id = substr($php_matchs.id_equipe_dom,-7)
							WHERE $php_matchs.id_journee = '$id_journee'
							AND $php_matchs.date_reelle > '$dateDuJour'
							AND $php_matchs.buts_dom IS NULL
							AND $php_matchs.buts_ext IS NULL
							ORDER BY id_journee ASC
							");

			while ($row = $requete->fetch()) {
				${"tabEquipeDom" . $id_journee}[] = $row[0];
				${"tabDateReelle" . $id_journee}[] = substr($row[1], 0, 10);
				${"tabButsDom" . $id_journee}[] = $row[2];
				${"tabButsExt" . $id_journee}[] = $row[3];
			}

			// récupération de l'equipe qui se déplace
			$requete = $bdd->query("SELECT $php_clubs.nom
						FROM $php_matchs
						INNER JOIN $php_clubs ON $php_clubs.id = substr($php_matchs.id_equipe_ext,-7)
						WHERE $php_matchs.id_journee = '$id_journee'
						AND $php_matchs.date_reelle > '$dateDuJour'
						AND $php_matchs.buts_dom IS NULL
						AND $php_matchs.buts_ext IS NULL
						ORDER BY id_journee ASC
						");

			while ($row = $requete->fetch()) {
				${"tabEquipeExt" . $id_journee}[] = $row[0];
			}

			//echo "date Du JourUS :".$dateDuJourUS;	echo "<br>";	
			//echo "date Du JourFR :".$dateDuJourFR;	echo "<br>";echo "<br>";	
			//echo "date Du Jour : ".$dateDuJour;echo "-- < ---";	
			$date1 = date("Y-m-d 07:00:00");
			//echo "date1 : ".$date1;echo "<br>";
			//echo "date prevue : ".$datePrevue[$i];echo "<br>";
			//echo $test = date ("$datePrevue[$i] 18:00:00");
			$test = date("$datePrevue[$i] 18:00:00");
			//if ($datePrevue[$i]< $date1 )
			if ($test < $date1) {
				$cpte = 0;
				for ($x = 0; $x < 7; $x++) {
					if (isset(${"tabEquipeDom" . $id_journee}[$x])) ${"tabEquipeDom" . $id_journee}[$x] = ${"tabEquipeDom" . $id_journee}[$x];
					else ${"tabEquipeDom" . $id_journee}[$x] = NULL;

					if (${"tabEquipeDom" . $id_journee}[$x] == NULL) {
						$cpte = $cpte + 1;
					}
				}
				if ($cpte < 7) {
			?>
					<table class="marginAuto width90PC background3B487F">
						<tr class="backgroundGray">
							<th class="size2 colorBlack center">

								<?php
								$j = $i + 1;
								$datePrevue[$j];

								echo "journée n° " . $j . " prévue le " . substr($datePrevue[$i], 8, 2) . "-" . substr($datePrevue[$j], 5, 2) . "-" . substr($datePrevue[$j], 0, 4);

								?>

							</th>
						</tr>
						<tr class="backgroundWhite">
							<td class="size2 colorBlack center">

								<?php
								for ($k = 0; $k < 7; $k++) {
									if (isset(${"tabEquipeDom" . $id_journee}[$k])) ${"tabEquipeDom" . $id_journee}[$k] = ${"tabEquipeDom" . $id_journee}[$k];
									else ${"tabEquipeDom" . $id_journee}[$k] = NULL;
									if (isset(${"tabEquipeExt" . $id_journee}[$k])) ${"tabEquipeExt" . $id_journee}[$k] = ${"tabEquipeExt" . $id_journee}[$k];
									else ${"tabEquipeExt" . $id_journee}[$k] = NULL;
									if (isset(${"tabButsDom" . $id_journee}[$k])) ${"tabButsDom" . $id_journee}[$k] = ${"tabButsDom" . $id_journee}[$k];
									else ${"tabButsDom" . $id_journee}[$k] = NULL;
									if (isset(${"tabButsExt" . $id_journee}[$k])) ${"tabButsExt" . $id_journee}[$k] = ${"tabButsExt" . $id_journee}[$k];
									else ${"tabButsExt" . $id_journee}[$k] = NULL;
									if (isset(${"tabDateReelle" . $id_journee}[$k])) ${"tabDateReelle" . $id_journee}[$k] = ${"tabDateReelle" . $id_journee}[$k];
									else ${"tabDateReelle" . $id_journee}[$k] = '';

									if (${"tabEquipeDom" . $id_journee}[$k] != NULL) {
										$DateTime = DateTime::createFromFormat('Y-m-d', ${"tabDateReelle" . $id_journee}[$k]);
										$dateFR = $DateTime->format('d-M-Y');

										echo ${"tabEquipeDom" . $id_journee}[$k] . " - " . ${"tabEquipeExt" . $id_journee}[$k] . " reportée au " . $dateFR;
										echo "<br>";
									}
								}
								?>
							</td>
						</tr>
					</table>
			<?php

				}
			}
		}
	}
}


function perequation($comite, $champ, $bdd)
{
	$tabEquipeDom = array();
	$tabEquipeExt = array();
	$tabButsDom = array();
	$tabButsExt = array();
	$tabDateReelle = array();
	$datePrevue = array();
	$tabJournee = array();
	$tabId_journee = array();
	$dateDuJour1 = date('D d M Y ');
	$dateDuJour = date('Y-m-d H:i:s');

	$dateDuJourUS = date('Y-m-d H:i:s');
	$dateDuJourFR = date('d-m-Y H:i:s');

	$dateDuJourPlusUn = date('Y-m-d H:i:s', strtotime($dateDuJour . '+ 1 days'));
	$php_clubs = $comite . "_clubs";
	$php_matchs = $comite . "_matchs";
	$php_journees = $comite . "_journees";


	if (isset($numeroJournee));
	else  $numeroJournee = 0;
	if (isset($derniereJournee));
	else  $derniereJournee = 0;


	//**************   traitement  *************************	
	//test sur la présence de rencontres en retard

	$premiereJournee = $champ * 100 + 1;
	//	echo "1re journee: ".$premiereJournee;
	$requete = $bdd->query("SELECT numero, id
							FROM $php_journees
							WHERE date_prevue < '$dateDuJour'
							AND id_champ = '$champ'
							ORDER BY numero asc");

	while ($row = $requete->fetch()) {
		$numeroJournee = $row[0];
		$derniereJournee = $row[1];
	}
	echo "<br>";

	if ($numeroJournee > 0 and $derniereJournee > 0) {

		$dateDuJourSansHeure = substr($dateDuJour, 0, 10);


		//changement de la date US en FR
		$DateTime = DateTime::createFromFormat('Y-m-d', $dateDuJourSansHeure);
		$dateDuJourFR = $DateTime->format('d-M-Y');
		//echo "jourFR : ".$dateDuJourFR; echo "<br>";
		$annee = substr($dateDuJourFR, 7, 4);
		echo "<br>";
		$nbreMatchsReportes = array();
		$requete = $bdd->query("SELECT COUNT(*)
							FROM $php_matchs
							WHERE  id_journee between '$premiereJournee' and '$derniereJournee'
							AND date_reelle = '0000-00-00 00:00:00'
							AND buts_dom IS NULL
							AND buts_ext IS NULL");

		$perequation = $requete->fetch();

		if ($perequation[0] > 0) {
			?>
			<table class="marginAuto width90PC ">
				<tr>
					<td class="backgroundRed size3 colorYellow center">
						<b> Rencontre(s) soumise(s) à Péréquation(s) </b>
					</td>
				</tr>
			</table>
			<?php
		}



		$idJourneeMin = $champ * 100 + 1;
		$idJourneeMax = $champ * 100 + 22;
		//echo $idJourneeMin.' - '.$idJourneeMax;echo "<br>";

		if (isset($id_champ));
		for ($i = 0, $id_journee = $idJourneeMin; $i < 23, $id_journee < $idJourneeMax; $i++, $id_journee++) {

			$id_champ = substr($id_journee, 0, 6);

			$requete = $bdd->query("SELECT date_prevue
							FROM $php_journees
							WHERE id_champ = $id_champ
							ORDER BY numero ASC");

			while ($row = $requete->fetch()) {
				$datePrevue[] = $row[0];
			}

			// récupération de l'equipe qui reçoit et de la date de report
			$requete = $bdd->query("SELECT $php_clubs.nom, $php_matchs.date_reelle, $php_matchs.buts_dom, $php_matchs.buts_ext 
							FROM $php_matchs
							INNER JOIN $php_clubs ON $php_clubs.id = substr($php_matchs.id_equipe_dom,-7)
							WHERE $php_matchs.id_journee = '$id_journee'
							AND $php_matchs.date_reelle = '0000-00-00 00:00:00'
							AND $php_matchs.buts_dom IS NULL
							AND $php_matchs.buts_ext IS NULL
							ORDER BY id_journee ASC
							");

			while ($row = $requete->fetch()) {
				${"tabEquipeDom" . $id_journee}[] = $row[0];
				${"tabDateReelle" . $id_journee}[] = substr($row[1], 0, 10);
				${"tabButsDom" . $id_journee}[] = $row[2];
				${"tabButsExt" . $id_journee}[] = $row[3];
			}

			// récupération de l'equipe qui se déplace
			$requete = $bdd->query("SELECT $php_clubs.nom
						FROM $php_matchs
						INNER JOIN $php_clubs ON $php_clubs.id = substr($php_matchs.id_equipe_ext,-7)
						WHERE $php_matchs.id_journee = '$id_journee'
						AND $php_matchs.date_reelle = '0000-00-00 00:00:00'
						AND $php_matchs.buts_dom IS NULL
						AND $php_matchs.buts_ext IS NULL
						ORDER BY id_journee ASC
						");

			while ($row = $requete->fetch()) {
				${"tabEquipeExt" . $id_journee}[] = $row[0];
			}

			//echo "date Du JourUS :".$dateDuJourUS;	echo "<br>";	
			//echo "date Du JourFR :".$dateDuJourFR;	echo "<br>";echo "<br>";	
			//echo "date Du Jour : ".$dateDuJour;echo "-- < ---";	
			$date1 = date("Y-m-d 07:00:00");
			//echo "date1 : ".$date1;echo "<br>";
			//echo "date prevue : ".$datePrevue[$i];echo "<br>";
			//echo $test = date ("$datePrevue[$i] 18:00:00");
			$test = date("$datePrevue[$i] 18:00:00");
			//if ($datePrevue[$i]< $date1 )
			if ($test < $date1) {
				$cpte = 0;
				for ($x = 0; $x < 7; $x++) {
					if (isset(${"tabEquipeDom" . $id_journee}[$x])) ${"tabEquipeDom" . $id_journee}[$x] = ${"tabEquipeDom" . $id_journee}[$x];
					else ${"tabEquipeDom" . $id_journee}[$x] = NULL;

					if (${"tabEquipeDom" . $id_journee}[$x] == NULL) {
						$cpte = $cpte + 1;
					}
				}
				if ($cpte < 7) {
			?>
					<table class="marginAuto width90PC">
						<tr class="backgroundGray">
							<th class="center size3">

								<?php
								$j = $i + 1;
								$datePrevue[$j];

								echo "journée n° " . $j . " prévue le " . substr($datePrevue[$i], 8, 2) . "-" . substr($datePrevue[$j], 5, 2) . "-" . substr($datePrevue[$j], 0, 4);

								?>

							</th>
						</tr>
						<tr class="backgroundWhite">
							<td class="center size3">

								<?php
								for ($k = 0; $k < 7; $k++) {
									if (isset(${"tabEquipeDom" . $id_journee}[$k])) ${"tabEquipeDom" . $id_journee}[$k] = ${"tabEquipeDom" . $id_journee}[$k];
									else ${"tabEquipeDom" . $id_journee}[$k] = NULL;
									if (isset(${"tabEquipeExt" . $id_journee}[$k])) ${"tabEquipeExt" . $id_journee}[$k] = ${"tabEquipeExt" . $id_journee}[$k];
									else ${"tabEquipeExt" . $id_journee}[$k] = NULL;
									if (isset(${"tabButsDom" . $id_journee}[$k])) ${"tabButsDom" . $id_journee}[$k] = ${"tabButsDom" . $id_journee}[$k];
									else ${"tabButsDom" . $id_journee}[$k] = NULL;
									if (isset(${"tabButsExt" . $id_journee}[$k])) ${"tabButsExt" . $id_journee}[$k] = ${"tabButsExt" . $id_journee}[$k];
									else ${"tabButsExt" . $id_journee}[$k] = NULL;
									if (isset(${"tabDateReelle" . $id_journee}[$k])) ${"tabDateReelle" . $id_journee}[$k] = ${"tabDateReelle" . $id_journee}[$k];
									else ${"tabDateReelle" . $id_journee}[$k] = '';

									if (${"tabEquipeDom" . $id_journee}[$k] != NULL) {
										$DateTime = DateTime::createFromFormat('Y-m-d', ${"tabDateReelle" . $id_journee}[$k]);
										$dateFR = $DateTime->format('d-M-Y');
										echo ${"tabEquipeDom" . $id_journee}[$k] . " - " . ${"tabEquipeExt" . $id_journee}[$k];
									}
								}
								?>
							</td>
						</tr>
					</table>
			<?php
				}
			}
		}
	}
}

// affichage des logos
function AffichageLogos($champ, $comite, $smart, $bdd)
{
	$tabNbreEquipe = array();
	$nombreEquipe = array();
	$php_equipes = $comite . "_equipes";

	$requete = $bdd->query("
			SELECT COUNT(id_champ) as nb
			FROM $php_equipes
			WHERE id_champ =$champ");

	$nombre = $requete->fetch();
	$nombreEquipe = $nombre['nb'];

	$requete = $bdd->query("
			SELECT id_club
			FROM $php_equipes
			WHERE id_champ =$champ");

	while ($row = $requete->fetch()) {
		$tabNbreEquipe[] = $row[0];
	}
	$requete->closeCursor();

	//Recheche des noms des clubs						
	for ($i = 0; $i < $nombreEquipe; $i++) {
		$tabSigleEquipe = array();




		//choix de la connexion (local pou en ligne); 
		require("../saison.php");

		//	if ($localHost  == true)

		//		$bdd = new PDO('mysql:host=127.0.0.1;dbname=onepip-france-db1;charset=utf8', 'root', '');
		//	else
		$bdd =  new PDO('mysql:host=sql.franceserv.fr;dbname=onepip-france-db1;charset=utf8', 'onepip-france', 'Lavelan1969&');

		$requete = $bdd->query("
				SELECT sigle
				FROM bdclubs
				WHERE id =$tabNbreEquipe[$i]");

		while ($row = $requete->fetch()) {
			${"sigleEquipe" . ($i)} = $row[0];
		}
		$requete->closeCursor();
		//echo ${"sigleEquipe".($i)};
	}

	for ($j = 0; $j < $nombreEquipe; $j++) {
		$tabNbreEquipe[$j] = substr($tabNbreEquipe[$j], -5);

		//echo substr($tabNbreEquipe[$j],2,1);
		if (substr($tabNbreEquipe[$j], 2, 1) != 5) {
			if ($smart == true) {
				$mode = "smart";
				$dim = 38;
				$lien = "/smart/ficheClubs/pageFicheClubs.php?champion=";
			} else {
				$mode = "noSmart";
				$dim = 68;
				$lien = "/consultation/pageclub00.php?champion=";
			}
			?>

			<a style="text-decoration:none;" href="<?php echo $lien . $tabNbreEquipe[$j] . '&mode=' . $mode . '&page=recherche'; ?>">
				<img src="/images/blasons200_200/<?php echo $tabNbreEquipe[$j]; ?>.gif" height="<?php echo $dim; ?>" width="<?php echo $dim; ?>" alt="texte" title="<?php echo ${"sigleEquipe" . ($j)}; ?>">
			</a>

<?php
		}
	}
}


?>

<?php

// Affichage de l'equipe et moyenne de la Meilleure attaque
function meilleureAttaque($phpComite, $champ, $bdd)
{
	global $nomMeilleureAttaque, $moyenneMeilleureAttaque;
	$bd_clmnt_cache = $phpComite . "_clmnt_cache";

	$reponse = $bdd->query("
		 SELECT NOM, JOUES, BUTSPOUR
		 FROM $bd_clmnt_cache 
		 WHERE ID_champ=$champ
		 ORDER BY BUTSPOUR ASC");

	while ($row = $reponse->fetch()) {
		$nomMeilleureAttaque = $row[0];
		$jouesMeilleureAttaque = $row[1];
		$pointsMeilleureAttaque = $row[2];
	}

	$moyenneMeilleureAttaque = $pointsMeilleureAttaque / $jouesMeilleureAttaque;
}


function tableauMeilleureAttaqueDefense($phpComite, $champ, $bdd)

{
	$tableauNomMeilleureAttaque = array();
	$tableauNbrePointsMarques = array();
	$tableauNomMeilleureDefense = array();
	$tableauNbrePointsPris = array();

	global $tableauNomMeilleureAttaque, $tableauNbrePointsMarques, $tableauNomMeilleureDefense, $tableauNbrePointsPris;


	$bd_clmnt_cache = $phpComite . "_clmnt_cache";

	$reponse = $bdd->query("
		 SELECT NOM, JOUES, BUTSPOUR
		 FROM $bd_clmnt_cache 
		 WHERE ID_champ=$champ
		 AND NOM !='Exempt'
		 ORDER BY BUTSPOUR DESC");

	while ($row = $reponse->fetch()) {
		$tableauNomMeilleureAttaque[] = $row[0];
		$tableauNbrePointsMarques[] = $row[2];
	}

	$reponse = $bdd->query("
		 SELECT NOM, JOUES, BUTSCONTRE
		 FROM $bd_clmnt_cache 
		 WHERE ID_champ=$champ
		AND NOM !='Exempt'
		 ORDER BY BUTSCONTRE ASC");

	while ($row = $reponse->fetch()) {
		$tableauNomMeilleureDefense[] = $row[0];
		$tableauNbrePointsPris[] = $row[2];
	}
}


// Affichage de l'equipe et moyenne de la meilleure défense	
function meilleureDefense($phpComite, $champ, $bdd)
{
	global $nomMeilleureDefense, $moyenneMeilleureDefense;

	$bd_clmnt_cache = $phpComite . "_clmnt_cache";


	$reponse = $bdd->query("
		 SELECT NOM, JOUES, BUTSCONTRE
		 FROM $bd_clmnt_cache 
		 WHERE ID_champ=$champ
		 AND NOM != 'Exempt'
		 ORDER BY BUTSCONTRE DESC");

	while ($row = $reponse->fetch()) {
		$nomMeilleureDefense = $row[0];
		$jouesMeilleureDefense = $row[1];
		$pointsMeilleureDefense = $row[2];
	}
	if ($jouesMeilleureDefense > 0)
		$moyenneMeilleureDefense = $pointsMeilleureDefense / $jouesMeilleureDefense;
	else
		$moyenneMeilleureDefense = 0;
}

//  nom de la division

function nomDivision($phpComite, $champ, $bdd)
{
	global $division;
	$bd_divisions = $phpComite . "_divisions";
	$reponse = $bdd->query("
		SELECT nom
		FROM $bd_divisions
		WHERE id='$champ'");

	while ($donnees = $reponse->fetch()) {
		$division = $donnees['nom'];
	}
}

//   Recherche du nombre de clubs dans la poule pour un compétition données
function nombreEquipe($phpComite, $champ, $bdd)
{
	global $heightClassement, $heightCalendrier, $nbreEquipes;

	$bd_equipes = $phpComite . "_equipes";

	$reponse = $bdd->query("SELECT count(id) 
							FROM $bd_equipes
							WHERE id_champ='$champ'");
	$nbreEquipes = $reponse->fetch();

	$nbreEquipes = $nbreEquipes[0];

	$heightClassement = ($nbreEquipes * 20) + 25;
	$heightCalendrier = ((($nbreEquipes * 25) / 2) + 25) * ((($nbreEquipes * 2) - 2) / 2);
}

//   Affichage du nom du club
function nomClub($equipe, $bdd)
{
	global $nom, $ancienComite;

	$reponse = $bdd->query("SELECT sigle, comite
						FROM bdclubs 
						WHERE id=$equipe OR id=$equipe - 90000000");
	while ($donnees = $reponse->fetch()) {
		$nom = $donnees['sigle'];
		$ancienComite = $donnees['comite'];
	}
}


//  Affichage du nom de la ligue
function nomLigue($equipe, $bdd)
{
	global $nomLigue;
	$numLigue = substr($equipe, 0, 2);
	$reponse = $bdd->query("
		    SELECT nom
		    FROM bdligue 
		    WHERE id='$numLigue'");
	while ($donnees = $reponse->fetch()) {
		$nomLigue = $donnees['nom'];
	}
}

//   Affichage des 5 dernières saison (régional + France)
function affichage5Saisons($debutSaison, $equipe, $champ, $phpComite, $bdd)
{
	//echo "saison".$saison;
	//if (isset ($terrMoins1)); //$joues=$joues; else $joues = 0;
	//$terrMoins1
	global $terrMoins1, $terrMoins2, $terrMoins3, $terrMoins4, $terrMoins5,
		$franceMoins1, $franceMoins2, $franceMoins3, $franceMoins4, $franceMoins5,
		$logoEquipe;

	$saisonMoins1 = $debutSaison - 1;
	$saisonMoins2 = $debutSaison - 2;
	$saisonMoins3 = $debutSaison - 3;
	$saisonMoins4 = $debutSaison - 4;
	$saisonMoins5 = $debutSaison - 5;

	//echo "</br>";
	//echo $saisonMoins1."-".$saisonMoins2."-".$saisonMoins3."-".$saisonMoins4."-".$saisonMoins5;

	$comite = substr($phpComite, 3);

	if ($equipe > 90000000) {
		$logoEquipe = $equipe - 90000000;
	} else {
		$logoEquipe = $equipe;
	}

	$equipeComite = substr($equipe, -5);
	$reponse = $bdd->query("
			SELECT id, terr_$saisonMoins1, terr_$saisonMoins2, terr_$saisonMoins3, terr_$saisonMoins4, terr_$saisonMoins5,
					france_$saisonMoins1, france_$saisonMoins2, france_$saisonMoins3, france_$saisonMoins4, france_$saisonMoins5
			FROM bdsaisons 
			WHERE id=$equipeComite");

	while ($row = $reponse->fetch()) {
		$terrMoins1 = $row[1];
		$terrMoins2 =  $row[2];
		$terrMoins3 =  $row[3];
		$terrMoins4 =  $row[4];
		$terrMoins5 =  $row[5];
		$franceMoins1 =  $row[6];
		$franceMoins2 =  $row[7];
		$franceMoins3 =  $row[8];
		$franceMoins4 =  $row[9];
		$franceMoins5 =  $row[10];
	}
}

// Traitement des scores (nbre de victoires , meilleure défense, meilleure attaque etc..)
function traitementDesScores($equipe, $phpComite, $bdd)
{
	global  $pointsMarques, $pointsPris, $joues,
		$pointsMarquesDomicile, $pointsMarquesExterieur, $pointsPrisDomicile, $pointsPrisExterieur,
		$matchDomicile,	$victoireDomicile,	$defaiteDomicile, $nulDomicile,
		$matchExterieur, $victoireExterieur, $defaiteExterieur, $nulExterieur;

	$bd_clmnt_cache = $phpComite . '' . "_clmnt_cache";

	$reponse = $bdd->query("SELECT *
						FROM $bd_clmnt_cache 
						WHERE ID_EQUIPE='$equipe'");
	while ($donnees = $reponse->fetch()) {
		$pointsMarques = $donnees['BUTSPOUR'];
		$pointsPris = $donnees['BUTSCONTRE'];
		$joues = $donnees['JOUES'];

		$pointsMarquesDomicile = $donnees['DOMBUTSPOUR'];
		$pointsMarquesExterieur = $donnees['EXTBUTSPOUR'];
		$pointsPrisDomicile = $donnees['DOMBUTSCONTRE'];
		$pointsPrisExterieur = $donnees['EXTBUTSCONTRE'];

		$matchDomicile = $donnees['DOMJOUES'];
		$victoireDomicile  = $donnees['DOMG'];
		$defaiteDomicile  = $donnees['DOMP'];
		$nulDomicile  = $donnees['DOMN'];

		$matchExterieur = $donnees['EXTJOUES'];
		$victoireExterieur  = $donnees['EXTG'];
		$defaiteExterieur  = $donnees['EXTP'];
		$nulExterieur = $donnees['EXTN'];
	}
}
?>