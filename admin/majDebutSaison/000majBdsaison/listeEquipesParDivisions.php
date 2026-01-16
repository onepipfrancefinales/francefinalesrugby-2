<?php
// non du fichier à creer
$fichier = "top14.csv";

//chemin du stockage du fichier à créer
$chemin=dirname(__FILE__)."/fichiers/";

// chemin complet
$cheminComplet = $chemin . $fichier;

//affichage des chemins
echo "chemin dirname : ".$chemin;echo "<br/>";
echo "fichier : " . $fichier;echo "<br/>";
echo "Chemin complet : ".$cheminComplet;echo "<br/>";

// caractère de séparation du fichier
$caratereSeparation =";";
 /*     
// ouverture  et lecture de la première ligne du fichier
$fp = fopen("$cheminComplet", 'r+');
           
$ligne1 = fgets($fp);
$liste = explode( $caratereSeparation,$ligne1);
$id = $liste[0];

// affichage de la 1re ligne
echo "1 -- ".$id; echo "<br />";

// lecture et affichage des autres lignes
$i=2;
while (!feof($fp)) {
	$ligne = fgets($fp, 4096);
	$liste = explode($caratereSeparation, $ligne);

	if (isset($liste[0]))
		$id = $liste[0];

	if ($id > 0) {
		echo $i . " -- " . $id;
		echo "<br/>";
		$i = $i + 1;
	}
}
*/
echo "-------------------------------";echo "<br/>";

//division136
// Génération de fichiers de type CSV contenant les ID des équipes composants la division passée en 
// parametre.
function ListeEquipesParDivision($division, $nomFichier, $bdd)
{

	if ($division == 135)
	$division136 = $division + 1;

	$div = substr($division, 0, 2);
	$div1 = $division +1 ;
	$div2 = $division +2 ;
	$div3 = $division +3 ;
	$div4 = $division +4 ;
	$div5 = $division +5 ;
	$div6 = $division +6 ;
	$div7 = $division +7 ;
	$div8 = $division +8 ;
	$div9 = $division +9 ;

	//echo "div10 : ".$div1;echo "<br/>";
	//echo "div : " . $div;echo "<br/>";

	echo "Division : " . $division;

	$tabEquipes = array();
if ($division == 110) {	$tabLigues = array("pro"); $where = " id_champ LIKE '%$division%' AND id < '2300000' ";}
elseif ($division == 120) {	$tabLigues = array("pro"); $where = " id_champ LIKE '%$division%' AND id < '2300000' ";}
elseif ($division == 130) {	$tabLigues = array("pro"); $where = " id_champ LIKE '%$division%' AND id < '2300000' ";}
elseif ($division == 135) {	$tabLigues = array("pro"); $where = " id_champ LIKE '%$division%'  OR id_champ LIKE '%$division136%' AND id < '2300000' ";}
elseif ($division == 140) {	$tabLigues = array("pro"); $where = " id_champ LIKE '%$div%' AND id < '2300000' ";}
elseif ($division == 150) {$tabLigues = array( "pro"); $where = " id_champ LIKE '%$div%' AND id < '2300000' ";}
elseif ($division == 160) {$tabLigues = array( "fed3NE");$where = " id_champ LIKE '%$div%' AND id < '2300000' ";} 
else {	$tabLigues = array("au", "ca", "ab", "pl", "idf");
	$where = "  id_champ LIKE  '%$div1%' OR 
				id_champ LIKE  '%$div2%' OR 
				id_champ LIKE  '%$div3%' OR 
				id_champ LIKE  '%$div4%' OR 
				id_champ LIKE  '%$div5%' OR 
				id_champ LIKE  '%$div6%' OR 
				id_champ LIKE  '%$div7%' OR 
				id_champ LIKE  '%$div8%' OR
				id_champ LIKE  '%$div9%' AND
				 id < '2300000' ";}
	
	foreach($tabLigues as $ligue){
	$php_equipes = "php" . $ligue . "_equipes";
	
	$requete = $bdd->query("SELECT id_club
						FROM $php_equipes
						WHERE  $where");

	While ($row = $requete->fetch() )
			{ 
			$tabEquipes[] = $row[0];
			}	
	}
	
//chemin du stockage du fichier à créer
$chemin=dirname(__FILE__)."/fichiers/";
// chemin complet
$cheminComplet = $chemin . $nomFichier;
	echo $cheminComplet;
// caractère de séparation du fichier
$caratereSeparation =";";

foreach ($tabEquipes as $equipe) {
	
	$fh = fopen("$cheminComplet", 'w') ;
		foreach ($tabEquipes as $equipe){	
		
			$stringData = $equipe." \n";
			fwrite($fh, $stringData);	
		}
	fclose($fh);
	}
}


echo "<h3>";
echo "Génération des fichiers pour alimenter les colonnes de la tables bdsaison";
echo "</h3>";
echo "( colonnes terr_ et france_  et la colonne encours)";
echo "<br/>";

require '../../../connect/connexion6.php';
ListeEquipesParDivision("110","top14.csv", $bdd);echo "<br/>";
ListeEquipesParDivision("120","ProD2.csv", $bdd);echo "<br/>";
ListeEquipesParDivision("130","Nat1.csv", $bdd);echo "<br/>";
ListeEquipesParDivision("135","Nat2.csv", $bdd);echo "<br/>";
ListeEquipesParDivision("140","Fed1.csv", $bdd);echo "<br/>";
ListeEquipesParDivision("150","Fed2.csv", $bdd);echo "<br/>";
ListeEquipesParDivision("160","Fed3.csv", $bdd);echo "<br/>";
ListeEquipesParDivision("170", "Reg1.csv", $bdd);echo "<br/>";
ListeEquipesParDivision("180", "Reg2.csv", $bdd);echo "<br/>";
ListeEquipesParDivision("190", "Reg3.csv", $bdd);echo "<br/>";
echo "<br/>";
echo "-------------------------------";echo "<br/>";


/*
$tabEquipes = array();

$codeLigue = 20;
$debut = $codeLigue * 10000 + 170;
$fin = $codeLigue * 10000 + 179;

$requete = $bdd->query("SELECT id
						FROM phpab_equipes
						WHERE id_champ LIKE '%17%'	");

 While ($row = $requete->fetch() )
		{ 
		$tabEquipes[] = $row[0];
		}

foreach ($tabEquipes as $equipe) {

	echo $equipe;
	echo "<br/>";
}
*/
/*
$fh = fopen("$cheminComplet", 'w') ;
		foreach ($tabEquipes as $equipe){
		$stringData = $equipe." \n";
		fwrite($fh, $stringData);
	
}
fclose($fh);
echo "les données ont étées écrites dans le fichir ".$fichier;echo "<br/>";
*/
?>

<a href="/admin/majDebutSaison/majBdsaison/majTableBdsaison.php">Retour accueil Maj Bdsaison</a>