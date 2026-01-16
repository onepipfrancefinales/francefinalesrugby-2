<html>
<head>
<title>Feuille de match</title>
<meta http-equiv="Content-Type" content="text/html"; charset="UTF-8">
<link type="text/css" rel="stylesheet" href="../feuilledestyle2.css"/>
<link type="text/css" rel="stylesheet" href="../formulaire.css"/>
</head>
<?php 

if (isset ($_POST['championnat'])) $championnat = $_POST['championnat']; else $championnat = "Variable championnat non d&eacute;clar&eacute;e";

if (isset ($_GET['code_div'])) $code_div = $_GET['code_div'];			else $code_div = "Variable code_div non d&eacute;clar&eacute;e";
if (isset ($_GET['code_match'])) $code_match = $_GET['code_match'];		else $code_match = "Variable code_match non d&eacute;clar&eacute;e";
if (isset ($_GET['date'])) $date = $_GET['date'];						else $date = "Variable date non d&eacute;clar&eacute;e";
if (isset ($_GET['comite'])) $comite = $_GET['comite'];					else $comite = "Variable code comite d&eacute;clar&eacute;e";
if (isset ($_GET['equipe'])) $equipe = $_GET['equipe'];					else $equipe = "Variable equipe non d&eacute;clar&eacute;e";
if (isset ($_GET['equipeA'])) $equipeA = $_GET['equipeA'];				else $equipeA = "Variable code equipeA d&eacute;clar&eacute;e";
if (isset ($_GET['equipeB'])) $equipeB = $_GET['equipeB'];				else $equipeB = "Variable equipeB non d&eacute;clar&eacute;e";
if (isset ($_GET['terrain'])) $terrain = $_GET['terrain'];				else $terrain = "Variable terrain non d&eacute;clar&eacute;e";
if (isset ($_GET['connect'])) $connect = $_GET['connect'];				else $connect = "Variable connect non d&eacute;clar&eacute;e";
if (isset ($_GET['type']))  $type = $_GET['type'];						else $type = "Variable type non d&eacute;clar&eacute;e";

if (isset ($_GET['clubC'])) $clubC = $_GET['clubC'];				else $clubC = "Variable clubC non d&eacute;clar&eacute;e";




//if ($connect == "connexion2")
//require   "../../../connect/connexion2.php";
//else
require   "../../../connect/connexion6.php";


$bdcomite= "php".$comite."_joueurs";

require '../fonctions.php';
require '../fonctionJoueurs.php';

calculEffectif ($comite, $equipe, $bdd);

require   "../../../connect/connexion1.php";
AffichageEquipeA($equipeA, $bdd);
AffichageEquipeB($equipeB, $bdd);




//if ($connect == "connexion2")
//require   "../../../connect/connexion2.php";
//else
require   "../../../connect/connexion6.php";


//echo "code match :".$code_match;
//echo "<br />";
$bdfeuille_matchA = "php".''.$comite.''."_feuilleA";
//echo $bdfeuille_matchA;
$reponse = $bdd->query("SELECT doubleBase
						FROM $bdfeuille_matchA
						WHERE id = $code_match ");

		while ($donnees = $reponse->fetch() )
			{
			$doubleBase = $donnees['doubleBase'];	
			}


//echo "doubleBase : ".''.$doubleBase;

$fanionOuReserve=$equipeA ;
$bdcomite=("php".''.$comite.''."_joueurs");

// echo $code_match ;
//echo $fanionOuReserve ;
// echo $championnat;
// echo $equipe ;
// echo $equipeA ;
// echo $equipeB ;
//echo $connect ;
//echo $comite ;
// echo "------------------";
// $connectInvitee = $_GET['connectInvitee'];
// $comiteInvite = $_GET['comiteInvite'];
// echo $doubleBase ;
// echo $connectInvitee;
// echo $comiteInvite ;
// echo "------------------";
//if ($equipeA>90000000)
//$equipeA=($equipeA-90000000);
//else
//$equipeA=$equipeA;
//if ($equipeB>90000000)
//$equipeB=($equipeB-90000000);
//else
//$equipeB=$equipeB;
// echo $equipeA ;
// echo $equipeB ;

?>
<table width="100%" border="0">
  <tr valign="top"> 
    <td valign="top" width="188"><?php include "../adminLicences/sommaire.php"; ?></td>
    <td><?php if ($effectifJoueurs<=60)
			include ("select_joueur60.php"); 
		elseif ($effectifJoueurs<=80)
			include ("select_joueur80.php"); 
		else
			include ("select_joueur.php");  
	   ?>
    </td>
  </tr>
   </table>
  </body>
</html>
