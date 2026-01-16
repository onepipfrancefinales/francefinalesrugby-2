<?php

$table = $_GET['table'];

require '../../connect/connexion1.php';

if ($table == "bdClubs") {
	
	echo "<h2>" . "Table bdclubs" . "</h2>";

	// Récupèration des données

	if (isset($_POST['id'])) $id = $_POST['id'];
	if (isset($_POST['nom_1'])) $nom_1 = $_POST['nom_1'];
	if (isset($_POST['nom_2'])) $nom_2 = $_POST['nom_2'];
	if (isset($_POST['nom_3'])) $nom_3 = $_POST['nom_3'];
	if (isset($_POST['nom_4'])) $nom_4 = $_POST['nom_4'];
	if (isset($_POST['fusion'])) $fusion = $_POST['fusion'];
	if (isset($_POST['idffr'])) $idffr = $_POST['idffr'];
	if (isset($_POST['type'])) $type = $_POST['type'];
	if (isset($_POST['sigle'])) $sigle = $_POST['sigle'];
	if (isset($_POST['ligue'])) $ligue = $_POST['ligue'];
	if (isset($_POST['siglecomite'])) $sigleComite = $_POST['siglecomite'];
	if (isset($_POST['comite'])) $comite = $_POST['comite'];


	// affichage des données	

	echo "1- id :" . $id;
	echo "<br />";
	echo "2- nom_1 : " . $nom_1;
	echo "<br />";
	echo "3- nom_2 : " . $nom_2;
	echo "<br />";
	echo "4- nom_3 : " . $nom_3;
	echo "<br />";
	echo "5- nom_4 : " . $nom_4;
	echo "<br />";
	echo "6- fusion : " . $fusion;
	echo "<br />";
	echo "7- idffr :" . $idffr;
	echo "<br />";
	echo "8- type: " . $type;
	echo "<br />";
	echo "9- sigle: " . $sigle;
	echo "<br />";
	echo "10- ligue : " . $ligue;
	echo "<br />";
	echo "11- siglecomite : " . $sigleComite;
	echo "<br />";
	echo "12- comite : " . $comite;
	echo "<br />";


// Insertion dans la table bdclubs
	
$bdd->exec("UPDATE bdclubs
			SET nom_1='$nom_1',nom_2='$nom_2',nom_3='$nom_3',nom_4='$nom_4',
				   fusion='$fusion',idffr= '$idffr', type ='$type',sigle ='$sigle', ligue='$ligue',
				   siglecomite= '$sigleComite', comite='$comite'
			WHERE id ='$id'");


} else if ($table == "infosClub") {


	echo  "<h2>" . "Table infosClub" . "</h2>";
	
	// Récupèration des données
	if (isset($_POST['id'])) $id = $_POST['id'];
	if (isset($_POST['club'])) $club = $_POST['club'];
	if (isset($_POST['ligue'])) $ligue = $_POST['ligue'];
	if (isset($_POST['equipe_fem'])) $equipe_fem = $_POST['equipe_fem'];

	if (isset($_POST['A1601'])) $A1601 = $_POST['A1601']; // président
	if (isset($_POST['A1602'])) $A1602 = $_POST['A1602']; // secrétaire
	if (isset($_POST['A1603'])) $A1603 = $_POST['A1603']; // contact
	if (isset($_POST['A1604'])) $A1604 = $_POST['A1604']; // siège
	if (isset($_POST['A1605'])) $A1605 = $_POST['A1605']; // adresse
	if (isset($_POST['A1606'])) $A1606 = $_POST['A1606']; // Code postal
	if (isset($_POST['A1607'])) $A1607 = $_POST['A1607']; // ville
	if (isset($_POST['A1608'])) $A1608 = $_POST['A1608']; // tél
	if (isset($_POST['A1609'])) $A1609 = $_POST['A1609'];

	if (isset($_POST['A1610'])) $A1610 = $_POST['A1610'];
	if (isset($_POST['A1611'])) $A1611 = $_POST['A1611'];
	if (isset($_POST['A1612'])) $A1612 = $_POST['A1612'];
	if (isset($_POST['A1613'])) $A1613 = $_POST['A1613'];
	if (isset($_POST['A1614'])) $A1614 = $_POST['A1614'];
	if (isset($_POST['A1615'])) $A1615 = $_POST['A1615'];
	if (isset($_POST['A1616'])) $A1616 = $_POST['A1616'];
	if (isset($_POST['A1617'])) $A1617 = $_POST['A1617'];
	if (isset($_POST['A1618'])) $A1618 = $_POST['A1618']; // sigle
	if (isset($_POST['A1619'])) $A1619 = $_POST['A1619']; // couleur

	if (isset($_POST['A1620'])) $A1620 = $_POST['A1620']; // site internet
	if (isset($_POST['A1621'])) $A1621 = $_POST['A1621']; // commentaire 1
	if (isset($_POST['A1622'])) $A1622 = $_POST['A1622']; // commentaire 2
	if (isset($_POST['A1623'])) $A1623 = $_POST['A1623']; // commentaire 3
	if (isset($_POST['A1624'])) $A1624 = $_POST['A1624']; // création club
	if (isset($_POST['A1625'])) $A1625 = $_POST['A1625'];
	if (isset($_POST['A1626'])) $A1626 = $_POST['A1626'];
	if (isset($_POST['A1627'])) $A1627 = $_POST['A1627'];
	if (isset($_POST['A1628'])) $A1628 = $_POST['A1628'];
	if (isset($_POST['A1629'])) $A1629 = $_POST['A1629'];

	if (isset($_POST['A1630'])) $A1630 = $_POST['A1630']; // Trésorier
	if (isset($_POST['A1631'])) $A1631 = $_POST['A1631'];
	if (isset($_POST['A1632'])) $A1632 = $_POST['A1632'];




	echo "<br />";
	echo "<br />";
	echo "<hr />";

	//Affichage des données
	$idReduit = substr($id, -5);
	echo "1- id :" . $idReduit;
	echo "<br />";
	echo "2- Club : " . $club;
	echo "<br />";
	echo "3- ligue : " . $ligue;
	echo "<br />";
	echo "4- equipe_fem : " . $equipe_fem;
	echo "<br />";
	echo "5- A1601 : " . $A1601;
	echo "<br />";
	echo "6- A1602 : " . $A1602;
	echo "<br />";
	echo "7- A1603 : " . $A1603;
	echo "<br />";
	echo "8- A1604 : " . $A1604;
	echo "<br />";
	echo "9- A1605 : " . $A1605;
	echo "<br />";
	echo "10- A1606 : " . $A1606;
	echo "<br />";
	echo "11- A1607 : " . $A1607;
	echo "<br />";
	echo "12- A1608 : " . $A1608;
	echo "<br />";
	echo "13- A1609 : " . $A1609;
	echo "<br />";
	echo "14- A1610 : " . $A1610;
	echo "<br />";
	echo "15- A1611 : " . $A1611;
	echo "<br />";
	echo "16- A1612 : " . $A1612;
	echo "<br />";
	echo "17- A1613 : " . $A1613;
	echo "<br />";
	echo "18- A1614 : " . $A1614;
	echo "<br />";
	echo "19- A1615 : " . $A1615;
	echo "<br />";
	echo "20- A1616 : " . $A1616;
	echo "<br />";
	echo "21- A1617 : " . $A1617;
	echo "<br />";
	echo "22- A1618 : " . $A1618;
	echo "<br />";
	echo "23- A1619 : " . $A1619;
	echo "<br />";
	echo "24- A1620 : " . $A1620;
	echo "<br />";
	echo "25- A1621 : " . $A1621;
	echo "<br />";
	echo "26- A1622 : " . $A1622;
	echo "<br />";
	echo "27- A1623 : " . $A1623;
	echo "<br />";
	echo "28- A1624 : " . $A1624;
	echo "<br />";
	echo "29- A1625 : " . $A1625;
	echo "<br />";
	echo "30- A1626 : " . $A1626;
	echo "<br />";
	echo "31- A1627 : " . $A1627;
	echo "<br />";
	echo "32- A1628 : " . $A1628;
	echo "<br />";
	echo "33- A1629 : " . $A1629;
	echo "<br />";
	echo "34- A1630 : " . $A1630;
	echo "<br />";
	echo "35- A1631 : " . $A1631;
	echo "<br />";
	echo "36- A1632 : " . $A1632;
	echo "<br />";

	
	// Insertion des données en base
	
$bdd->exec("UPDATE infosclub
			SET  club='$club', ligue='$ligue',equipe_fem='$equipe_fem',
				  			     A1601='$A1601', A1602='$A1602', A1603='$A1603', A1604='$A1604', A1605='$A1605', A1606='$A1606', A1607='$A1607', A1608='$A1608', A1609='$A1609',
				 A1610='$A1610', A1611='$A1611', A1612='$A1612', A1613='$A1613', A1614='$A1614', A1615='$A1615', A1616='$A1616', A1617='$A1617', A1618='$A1618', A1619='$A1619',
				 A1620='$A1620', A1621='$A1621', A1622='$A1622', A1623='$A1623', A1624='$A1624', A1625='$A1625', A1626='$A1626', A1627='$A1627', A1628='$A1628', A1629='$A1629',
				 A1630='$A1630', A1631='$A1631', A1632='$A1632' 
			WHERE id ='$idReduit' ");

} else if ($table == "bdfusion") {

	echo  "<h2>" . "Table bdfusion" . "</h2>";

	// récupèration des données
	if (isset($_POST['idReduit'])) $idReduit = $_POST['idReduit'];
	if (isset($_POST['idffr'])) $idffr = $_POST['idffr'];
	if (isset($_POST['nom'])) $nom = $_POST['nom'];
	if (isset($_POST['logo'])) $logo = $_POST['logo'];
	if (isset($_POST['annee'])) $annee = $_POST['annee'];
	if (isset($_POST['fusion1'])) $fusion1 = $_POST['fusion1'];
	if (isset($_POST['fusion2'])) $fusion2 = $_POST['fusion2'];
	if (isset($_POST['fusion3'])) $fusion3 = $_POST['fusion3'];

	// affichages des données
	echo "1- idReduit :" . $idReduit;
	echo "<br />";
	echo "2- idffr : " . $idffr;
	echo "<br />";
	echo "3- nom : " . $nom;
	echo "<br />";
	echo "4- logo : " . $logo;
	echo "<br />";
	echo "5- annee : " . $annee;
	echo "<br />";
	echo "6- fusion1 : " . $fusion1;
	echo "<br />";
	echo "7- fusion2 :" . $fusion2;
	echo "<br />";
	echo "8- fusion3: " . $fusion3;
	echo "<br />";


	// Enregistrement des données


$reponse = $bdd->query("UPDATE bdfusion
						SET nom='$nom', logo='$logo', annee='$annee',  fusion1='$fusion1',  fusion2='$fusion2', fusion3='$fusion3' 
						WHERE  idffr='$idffr'"); 
        



	echo "<hr />";
} else if ($table == "bdsaisons") {


	echo  "<h2>" . "Table bdsaisons" . "</h2>";
	/*
$bdd->exec("INSERT INTO bdsaisons
			VALUES('$id',  '$vide','$vide','$vide','$ligue','$vide','$vide','$vide','$vide','$vide',
				   '$vide','$vide','$vide','$vide','$vide','$vide','$vide','$vide','$vide','$vide',
				   '$vide','$vide','$videInt','$vide','$vide','$vide','$vide','$vide','$vide','$vide',
				   '$vide','$vide','$vide','$vide','$vide','$vide','$vide','$vide'  )");
*/
	
}
echo "<hr />";
echo "<hr />";
echo "Insertions effectuées";

require '../majScores/bas.php';
