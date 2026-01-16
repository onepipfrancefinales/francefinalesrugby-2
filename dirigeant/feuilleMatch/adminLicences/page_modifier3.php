<html>
<head>
<title>Modification de licence</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<?php 

if (isset ($_POST['championnat'])) $championnat = $_POST['championnat'];  else $championnat ="Variable championnat non d&eacute;clar&eacute;e";
if (isset ($_GET['code_div'])) $code_div = $_GET['code_div'];			else $code_div= "Variable code_div non d&eacute;clar&eacute;e";
if (isset ($_GET['code_match'])) $code_match = $_GET['code_match'];		else $code_match = "Variable code_match non d&eacute;clar&eacute;e";
if (isset ($_GET['date'])) $date = $_GET['date'];						else $date= "Variable date non d&eacute;clar&eacute;e";
if (isset ($_GET['comite'])) $comite = $_GET['comite'];					else $comite = "Variable code comite d&eacute;clar&eacute;e";
if (isset ($_GET['equipe'])) $equipe = $_GET['equipe'];					else $equipe= "Variable equipe non d&eacute;clar&eacute;e";
if (isset ($_GET['equipeA'])) $equipeA = $_GET['equipeA'];				else $equipeA= "Variable code equipeA d&eacute;clar&eacute;e";
if (isset ($_GET['equipeB'])) $equipeB = $_GET['equipeB'];				else $equipeB= "Variable equipeB non d&eacute;clar&eacute;e";
if (isset ($_GET['terrain'])) $terrain = $_GET['terrain'];				else $terrain= "Variable terrain non d&eacute;clar&eacute;e";
if (isset ($_GET['connect'])) $connect = $_GET['connect'];				else $connect= "Variable connect non d&eacute;clar&eacute;e";
if (isset ($_GET['type']))  $type = $_GET['type'];						else $type= "Variable type non d&eacute;clar&eacute;e";
if (isset ($_GET['id']))  $idSaisie = $_GET['id'];						else $id= "Variable id non d&eacute;clar&eacute;e";



if (isset ($_POST['premiereLigne']))  $premiereLigne = $_POST['premiereLigne'];	else $premiereLigne= "Variable type non d&eacute;clar&eacute;e";
if (isset ($_POST['nom']))  $nom = $_POST['nom']; else $nom= "Variable nom non d&eacute;clar&eacute;e";
if (isset ($_POST['prenom']))  $prenom = $_POST['prenom'];	else $prenom= "Variable prenom non d&eacute;clar&eacute;e";
if (isset ($_POST['licence']))  $licence = $_POST['licence']; else $licence= "Variable type non d&eacute;clar&eacute;e";
if (isset ($_POST['type_licence']))  $type_licence = $_POST['type_licence']; else $type_licence= "Variable type_licence non d&eacute;clar&eacute;e";






$nom_cache = $nom;

?>
 
<table width="100%" border="0">
  <tr>
    <td valign="top" width="200"> 
      <?php include "sommaire.php"; ?>
    </td>
    <td valign="top" width="83%"> 
     
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <?php
  
  $indicatifJoueur =1*1000;
		$indicatifDirigeant =5*1000;
		$equipe1000 = $equipe * 10000;
		$id = $equipe1000 + $indicatifJoueur + $idSaisie;
  echo $id;
require   "../../../connect/connexion2.php";

$phpComite_joueurs = "php".$comite."_joueurs";

 
  $req = $bdd->prepare("	UPDATE $phpComite_joueurs  
							SET   	nom =:nom,	
									nom_cache =:nom_cache,
									prenom =:prenom,
									licence =:licence,
									type_licence =:type_licence
  
							WHERE  id =:id");
		   
			 $req->execute(array(   'nom' => $nom,
									'nom_cache' => $nom_cache,
								    'prenom' => $prenom,
									'licence' => $licence,
									'type_licence' => $type_licence,
									
									
									'id' => $id
									));	
						
 ?>
  
  <br/>
  Les nouvelles informations sont :

  <font size="6"> <br/>
  <br/>
  <br/>
  <?php echo $nom;?>  <?php echo $prenom;?>
  <br/>
  <br/>
      </font><font size="6">N&deg; de licence : 
      <?php echo $licence;?>
      <br/>
  Couleur de licence : 
  <?php echo $type_licence;?>
  <br/>
 <!-- Premi&egrave;re ligne : -->
  <?php// echo $premiereLigne;?>
  </font><b><font size="6"><br/>
  <br/>
  <br/>
  </font> </b>
<p> 
  

<p>&nbsp;

    </td>
  </tr>
</table>
</body>
</html>
