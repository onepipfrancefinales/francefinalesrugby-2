<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<?php 


if (isset($_POST['nom'])) $nom = $_POST['nom']; else $nom="";
if (isset($_POST['nom_cache'])) $nom_cache = $_POST['nom_cache']; else $nom_cache="";
if (isset($_POST['prenom'])) $prenom = $_POST['prenom']; else $prenom="";
if (isset($_POST['licence'])) $licence = $_POST['licence']; else  $licence="";
if (isset($_POST['type_licence'])) $type_licence = $_POST['type_licence']; else  $type_licence="";
if (isset($_POST['premiereLigne'])) $premiereLigne = $_POST['premiereLigne']; else $premiereLigne="";


if (isset ($_GET['comite'])) $comite = $_GET['comite'];					else $comite = "Variable code comite d&eacute;clar&eacute;e";
if (isset ($_GET['equipe'])) $equipe = $_GET['equipe'];					else $equipe= "Variable equipe non d&eacute;clar&eacute;e";
?>


<table width="100%" border="0">
  <tr>
    <td valign="top" width="200"> 
      <?php include "sommaire.php"; ?>
    </td>
    <td valign="top" width="83%"> 
    
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><b><font size="4" face="Arial, Helvetica, sans-serif">L'ajout d' un licenci&eacute; 
  a &eacute;t&eacute; correctement effectu&eacute;</font></b></p>
<p>&nbsp;</p>
<p>&nbsp;</p>






<?php

if (isset($nb)) $nb = $nb; else $nb="";

//echo $equipe;
//echo $comite;
//echo $connect;
//echo $bdcomite;




// **** traitement du Nom ****** 
$nom=str_replace(' ','-',$nom);
$nom = strtoupper ($nom);

// **** traitement du Prénom ****** 
$prenom=str_replace(' ','-',$prenom);
$prenom = strtoupper(substr($prenom, 0, 1)).strtolower(substr($prenom, 1));

// **** traitement du numéro de la licence ****** 
$annee = substr($licence,0,4);
$deux = substr($licence,4,2);
$un = substr($licence,6,1);
$fin = substr($licence,7,6);

//echo $annee;echo "<br />";
//echo $deux;echo "<br />";
//echo $un;echo "<br />";
//echo $fin;echo "<br />";

$licenceAffichage = $annee." ".$deux." ".$un." ".$fin;

require   "../../../connect/connexion6.php";

//****************************************************************************
//******** ATTENTION REFAIRE LE CALCUL DU NBRE DE LICENCIE
//*****************************************************************************



require '../fonctions.php';
calculEffectif ($comite, $equipe, $bdd);
echo "zezeze".$effectifReel;
$idPerso=$effectifReel;

$date_naissance = '2019';

$type_licence = "JOU";
$premiereLigne = "";


$equipe1000 = $equipe * 1000;
$id = $equipe1000 + $idPerso;
echo "zzzzz".$id;
echo $nom.' '.$prenom;
echo "<br />";
echo "Num&eacute;ro de licence :".' '.$licence;




if ($connect == "connection2")
{
	$bdd = new mysqli("localhost", "root","" , "onepip-france-db2");
 
	//if ($bdd->connect_error)
	//	{
	//	die("Connection failed: " . $bdd->connect_error);
	//	}

$phpComite_joueurs = "php".$comite."_joueurs";
$sql =" INSERT INTO $phpComite_joueurs (nom,    nom_cache, 	prenom,	date_naissance, licence, 	type_licence, 	premiereLigne, comite,	club,fonction, 	id_perso,id) 
						VALUES    ('$nom','$nom','$prenom','$date_naissance','$licence','JOU','0','1','$equipe','1','$idPerso','$id')";


if ($bdd->query($sql) === TRUE) {
	echo "<br />";
    echo "Nouvelle licence cr&eacute;&eacute;e avec succ&egrave;s";
} else {
    echo "Error: " . $sql . "<br>" . $bdd->error;
}
 
$bdd->close(); 



	
}
else
{

$bdd = new mysqli("localhost", "root","" , "onepip-france-db3");
 
  //if ($bdd->connect_error)
//	{
 //   die("Connection failed: " . $bdd->connect_error);
//	} 

$phpComite_joueurs = "php".$comite."_joueurs";
$sql =" INSERT INTO $phpComite_joueurs (nom,    nom_cache, 	prenom,	date_naissance, licence, 	type_licence, 	premiereLigne, comite,	club,fonction, 	id_perso,id) 
						VALUES    ('$nom','$nom','$prenom','$date_naissance','$licence','DIR','0','1','$equipe','1','$idPerso','$id')";


if ($bdd->query($sql) === TRUE) {
	echo "<br />";
    echo "Nouvelle licence cr&eacute;&eacute;e avec succ&egrave;s";
} else {
    echo "Error: " . $sql . "<br>" . $bdd->error;
}
 
$bdd->close(); 


}	


/*

$phpComite_joueurs = "php".$comite."_joueurs";
$sql =" INSERT INTO $phpComite_joueurs (nom,    nom_cache, 	prenom,	date_naissance, licence, 	type_licence, 	premiereLigne, comite,	club,fonction, 	id_perso,id) 
						VALUES    ('$nom','$nom','$prenom','','$licence','','0','1','$equipe','1','$idPerso','$id')";


if ($bdd->query($sql) === TRUE) {
	echo "<br />";
    echo "Nouvelle licence cr&eacute;&eacute;e avec succ&egrave;s";
} else {
    echo "Error: " . $sql . "<br>" . $bdd->error;
}
 
$bdd->close(); 

*/





/*
//echo $licence;
//echo $tutorat;
//echo $couleur;


	$req = $bdd->prepare('INSERT INTO blibli (			nom, 
														nom_cache, 
														prenom,
														date_naissance,
														position_terrain, 
														type_licence, 
														premiereLigne, 
														comite, 
														club, 
														photo, 
														id_perso, 
														id
														)
														
						  VALUES (	:nom, 
						  			:nom_cache, 
									:prenom, 
									:date_naissance, 
									:position_terrain, 
									:type_licence, 
									:premiereLigne, 
									:comite, 
									:club, 
									:photo, 
									:id_perso, 
									:id)');
		   
			 $req->execute(array(
							'nom' => $nom,
							'nom_cache' => $nom_cache,
							'prenom' => $prenom,
							'date_naissance' => $date_naissance,
							'position_terrain' => $position_terrain,
							'type_licence' => $type_licence,
							'premiereLigne' => $premiereLigne,
							'comite' => $comite,
							'club' => $club,
							'photo' => $photo,
							'id_perso' => $id_perso,
							'id' => $id
							)) ;		
		
		

echo 'Le jeu a bien été ajouté !';
  if ($req)
               {
             echo 'Enregistrement effectue';
            }
            else
                {
             echo 'Mauvais enregistrement!';
             }

			 
*/			 
			 ?>



    </td>
  </tr>
</table>
</body>
</html>
