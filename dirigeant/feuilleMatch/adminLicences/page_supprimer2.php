<head>
<title>Suppression d'une licence</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<?php 

if (isset ($_GET['comite'])) $comite = $_GET['comite'];					else $comite = "Variable code comite d&eacute;clar&eacute;e";
if (isset ($_GET['equipe'])) $equipe = $_GET['equipe'];					else $equipe= "Variable equipe non d&eacute;clar&eacute;e";
if (isset ($_GET['connect'])) $connect = $_GET['connect'];				else $connect= "Variable connect non d&eacute;clar&eacute;e";
if (isset ($_POST['id'])) $idSaisie = $_POST['id'];else $idSaisie= "Variable id non d&eacute;clar&eacute;e";

echo "id saisie : ".$idSaisie;
$indicatifJoueur =1*1000;
		$indicatifDirigeant =5*1000;
		$equipe1000 = $equipe * 10000;
		$id = $equipe1000 + $indicatifJoueur + $idSaisie;


echo $id;
?>


<tr>
    
  <td width="17%">&nbsp; </td>
    
  <td width="83%"> 
    <table width="100%" border="0">
      <tr>
        <td width="7%"><?php require 'sommaire.php'; ?></td>
        <td width="93%"> <p><b><font size="4" face="Arial, Helvetica, sans-serif">Licence supprim&eacute</font></b></p>
 

<?php 

$bdcomite=("php".''.$comite.''."_joueurs");

require   "../../../connect/connexion2.php";


//verification de la saisie

$reponse = $bdd->query("SELECT COUNT(id)
						FROM $bdcomite 
						WHERE id='$id'");  	
								while ($row = $reponse->fetch() )
									{
									$verif_id = $row[0];
									}
									
									
	

			
if ($verif_id == 1)
{






	//****** Récupération et affichage des infos de la licence à  supprimer

	 $reponse = $bdd->query("	SELECT nom, prenom,licence, id_perso 
								FROM $bdcomite
								WHERE id = $id");
								
									while ($row = $reponse->fetch() )
										{
										$nom=$row[0];
										$prenom=$row[1];
										$licence=$row[2];
										$id_perso=$row[3];
										}
	 

	echo "Nom : ".' '.$nom."<br />";
	echo  "Pr&eacute;nom : ".' '.$prenom."<br />";
	echo  "Licence N&deg; ".' '.$licence."<br />";
	  
	//***** Modification (suppression) de la licence   **********

	$nom = "";
	$nom_cache="zsupprime";
	$prenom="";
	$comiteZero=0;


	$phpComite_joueurs = "php".$comite."_joueurs";

	   $req = $bdd->prepare("	UPDATE  $phpComite_joueurs
								SET   	nom =:nom,
										nom_cache =:nom_cache,
										prenom =:prenom,
										comite =:comite
			
								WHERE  id =:id");
			   
		 $req->execute(array(	'nom' => $nom,
								'nom_cache' => $nom_cache,
								'prenom' => $prenom,
								'comite' => $comiteZero,
	 
								'id' => $id	)) 
																	
						or die(print_r($req->errorInfo()));	

	$reponse->closeCursor(); 
	?>
	</td>
      </tr>
    </table>
	
	<?php
}

else
{
	echo "traitement impossible, erreur de saisie";
}
?>	
	
   
	</body>
 </html>