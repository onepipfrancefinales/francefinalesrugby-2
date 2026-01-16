
<?php
if (isset($_GET['tableAConsulter'])) $tableAConsulter = $_GET['tableAConsulter']; else $tableAConsulter = "  NON FOURNI  ";
echo $tableAConsulter;
echo "<br/>";
?>
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body bgcolor="#FFFFFF" text="#000000">
<hr />
<?php
require ("../../connect1/connection2.php"); 


//***** affichage de la table _saisons ******


if (substr($tableAConsulter,-7) == "saisons")
{
echo "id".'    '."annee"."<br />";
$requete=$bdd->query("SELECT * FROM $tableAConsulter 
					 ");

while ($row = $requete->fetch())
		{ 
			$id = $row[0];
			$annee = $row[1];		 

		echo $id.'    '.$annee."<br />";
		}
		?>
<a href="accueil.php">retour accueil</a>	
<?php		
}
//***** affichage de la table _equipes ******

elseif (substr($tableAConsulter,-7) == "equipes")
{
echo "id".'______ ____'."id_champ"."___"."id_club"."___"."penalite"."<br />";

$requete=$bdd->query("SELECT * FROM $tableAConsulter 
					order by id_champ");
while ($row = $requete->fetch())
		{ 
			$id = $row[0];
			$id_champ = $row[1];		 
			$id_club = $row[2];
			$penalite= $row[3];
		echo $id.'____    '.$id_champ.'___ ___    '.$id_club.' ______   '.$penalite."<br />";
		}
		?>
<a href="accueil.php">retour accueil</a>	
<?php		
}

//***** affichage de la table _journees ******
elseif (substr($tableAConsulter,-8) == "journees")
{
echo "id".'_______    '."date prevue"."_____ _________"."id"."_________"."id_champ"."<br />";

$requete=$bdd->query("SELECT * FROM $tableAConsulter 
					order by id_champ");

while ($row = $requete->fetch())
		{ 
			$numero = $row[0];
			$date_prevue = $row[1];	
			$id = $row[2];
			$id_champ = $row[3];			
		
		echo $id.'____    '.$date_prevue.'___ ___    '.$id.' ______   '.$id_champ."<br />";
		}
	?>
<a href="accueil.php">retour accueil</a>	
<?php
}
//***** affichage de la table _divisions ******
elseif (substr($tableAConsulter,-9) == "divisions")
{
echo "id".'    '."annee"."<br />";

$requete=$bdd->query("SELECT * FROM $tableAConsulter 
					");

while ($row = $requete->fetch())
		{ 
			$id = $row[0];
			$nom = $row[1];	
			$codeFFR = $row[2];			
		
		echo $id.'_______    '.$nom.'______'.$codeFFR."<br />";
		}	
		?>
<a href="accueil.php">retour accueil</a>	
<?php
}

//***** affichage de la table _championnats ******
elseif (substr($tableAConsulter,-12) == "championnats")
{
echo "id".'_______    '."id_division"."_____"."id_saison"."<br />";

$requete=$bdd->query("SELECT * FROM $tableAConsulter 
					order by id");

while ($row = $requete->fetch())
		{ 
			$id = $row[0];
			$id_division = $row[1];		 
			$id_saison = $row[2];	
		
		echo $id.'_______    '.$id_division."_________".$id_saison."<br />";
		}	
		?>
<a href="accueil.php">retour accueil</a>	
<?php
}
//***** affichage de la table _clubs ******
elseif (substr($tableAConsulter,-5) == "clubs")
{
echo "id".' ____   '."nom"."___________________"."url_logo"."<br />";

$requete=$bdd->query("SELECT * FROM $tableAConsulter 
					order by id");

while ($row = $requete->fetch())
		{ 
			$id = $row[0];
			$nom = $row[1];		 
			$url_logo = $row[2];	
		
		echo $id.'    '.$nom."_________".$url_logo."<br />";
		}
		?>
<a href="accueil.php">retour accueil</a>	
<?php		
	
}

//***** affichage de la table _parametres ******
elseif (substr($tableAConsulter,-10) == "parametres")
{
echo "id_champ"."____"."pts_victoire"."____    "."pts_nul"."___ ___    "."pts_defaite"." ______   "."accession"."________"."barrage"."_______"."relegation"."<br />";

$requete=$bdd->query("SELECT * FROM $tableAConsulter 
					order by id_champ");

while ($row = $requete->fetch())
		{ 
			$id_champ = $row[0];
			$pts_victoire = $row[1];	
			$pts_nul = $row[2];
			$pts_defaite= $row[3];
			$accession = $row[4];
			$barrage = $row[5];
			$relegation = $row[6];
						
		
		
		echo $id_champ.'___________    '.$pts_victoire.'______ _____'.$pts_nul.' ______ ______   '.$pts_defaite.' ____ ________   '.$accession.' ______ ______   '.$barrage.' _____ ______   '.$relegation."<br />";
		}
		?>
<a href="accueil.php">retour accueil</a>	
<?php		
	
}

//***** affichage de la table _matchs ******
elseif (substr($tableAConsulter,-6) == "matchs")
{
echo "id"."_________________"."id_equipe_dom"."____    "."id_equipe_ext"."___ ________    "."date_reelle"." ______ _______   "."id_journee"."__  ________"."but_dom"."_________"."but_ext"."<br />";

$requete=$bdd->query("SELECT * FROM $tableAConsulter 
					order by id_journee");


while ($row = $requete->fetch())
		{ 
			$id = $row[0];
			$id_equipe_dom = $row[1];	
			$id_equipe_ext = $row[2];
			$date_reelle= $row[3];
			$id_journee = $row[4];
			$but_dom = $row[5];
			$but_ext = $row[6];	 
		
		
		echo $id.'_________    '.$id_equipe_dom.'______ _____'.$id_equipe_ext.' ______ _____   '.$date_reelle.' ____ ___ __   '.$id_journee.' ______ ______   '.$but_dom.' _____ ______   '.$but_ext."<br />";
		}	
		?>
<a href="accueil.php">retour accueil</a>	
<?php
}
else
{
echo "table non trouvée";
}

?>
</body>
</html>
