<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link type="text/css" rel="stylesheet" href="../feuilledestyle2.css"/>
<link type="text/css" rel="stylesheet" href="../feuilledestyle.css"/>
<link rel="stylesheet" href="print.css" type="text/css" media="print" />
</head>
<?php 

if (isset ($_POST['championnat'])) $championnat = $_POST['championnat']; $championnat ="Variable championnat non d&eacute;clar&eacute;e";

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
 if (isset ($_GET['id_equipe']))  $id_equipe = $_GET['id_equipe']; 
 
$bdcomite=("php".''.$comite.''."_joueurs");
$bdfeuilleA=("php".''.$comite.''."_feuilleA");
$bdfeuilleB=("php".''.$comite.''."_feuilleB");


echo "equipeA:".$equipeA;
require   "../../../connect/connexion2.php";
require ("../fonctions.php");
//require ("../fonctionsA.php");
//require ("../fonctionsB.php");
require   "../../../connect/connexion1.php";
AffichageEquipeA($equipeA, $bdd);
AffichageEquipeB($equipeB, $bdd);
require   "../../../connect/connexion2.php";
feuilleMatch($code_match, $comite, $bdd);
?>


<table width="841" border="0">
  <tr> 
    <td valign="top">  <?php include ("zone0Consultation.php"); ?> </td>
  </tr>
  <tr>
    <td valign="top"></td>
  </tr>
  <tr> 
    <td valign="top">
      <?php 
//*********	  ZONE 1 ************************
	if ($comite == "f1" or $comite == "fed2" or $comite == "fed3GS" or $comite == "fed3NE")
		{
		 require 'zone1ConsultationFed.php';
		}
	else
	  {
	  require 'zone1ConsultationLigue.php';
		}
	
	include ("zone1Com.php");
?>
    </td>
  </tr>
  <tr> 
    <td valign="top" height="2"> 
      <?php
	//*********	  ZONE 2 ************************

	$equipe = $equipeA;
	infosEntraineur($comite, $equipe, $entraineur, $bdd);	
	infosEntraineur2($comite, $equipe, $entraineur2, $bdd);	  
	infosSoigneur($comite, $equipe, $soigneur, $bdd);
	infosAdjoint($comite, $equipe, $adjoint, $bdd);
	infosMedecin($comite, $equipe, $medecin, $bdd);
	infosPrepa($comite, $equipe, $prepa, $bdd);

	$equipe = $equipeB;
	infosEntraineurB($comite, $equipe, $entraineurB,  $bdd );
	infosEntraineur2B($comite, $equipe, $entraineur2B, $bdd);	  
	infosSoigneurB($comite, $equipe, $soigneurB, $bdd);
	infosAdjointB($comite, $equipe, $adjointB, $bdd);
	infosMedecinB($comite, $equipe, $medecinB, $bdd);
	infosPrepaB($comite, $equipe, $prepaB, $bdd);
	
	 include ("zone2Consultation.php"); ?>
    </td>
  </tr>
  <tr> 
    <td valign="top"> 
      <?php 
	  //*********	  ZONE 3 ************************
	$equipe = $equipeA; 
	//echo "numjuge : ".$numeroJuge;
	 infosJugeTouche($comite, $equipe, $numeroJuge, $code_match,  $bdd);
	  
	  $equipe = $equipeB;
	  infosJugeToucheB($comite, $equipe, $numeroJugeB, $code_match,  $bdd);
	  include ("zone3Consultation.php"); ?>
    </td>
  </tr>
  <tr> 
    <td valign="top" height="17"> 
      <?php 
	  //*********	  ZONE 4 ************************
	  
	  $equipe=$equipeA;
	  infosDopage($comite, $equipe, $dopage, $bdd);
	  
	  include ("zone4Consultation.php"); ?>
    </td>
  </tr>
  <tr> 
    <td valign="top"> 
      <?php 
	  //*********	  ZONE 5 ************************
	   $equipe = $equipeA;
	  infosResponsable($comite, $equipe, $responsable, $bdd);
	  
	  $equipe = $equipeB;
	 // echo "RESPONSABLE".$responsableB;
	  $responsable = $responsableB;
	  infosResponsableB($comite, $equipe, $responsable, $bdd);

	  include ("zone5Consultation.php"); ?>
    </td>
  </tr>
  <tr> 
    <td valign="top" width="835">&nbsp; </td>
  </tr>
  <tr> 
    <td valign="top" width="835">&nbsp; </td>
  </tr>
</table>
<table width="842" border="0" height="145">
  <tr > 
    <td valign="top" align="left" colspan="2"> 
      <hr />
    </td>
  </tr>
  <tr > 
    <td valign="top" align="left" width="552">&nbsp;</td>
    <td valign="top" align="left" width="280">&nbsp;</td>
  </tr>
  <tr > 
    <td valign="top" align="left" width="552" bgcolor="#CCCCCC"> 
      <?php
	$equipe = $_GET['equipe'];
	
	// echo $equipe; ?>
      <h4><a href="../connexion/page_liste_compet1.php?type=S1&id_equipe=<?php echo $id_equipe; ?>&equipe=<?php echo $equipe; ?>&comite=<?php echo $comite ; ?>&connect=<?php echo $connect ;?>" target="_top">Retour 
        &agrave; accueil</a></h4>
    </td>
    <td valign="top" align="left" width="280" bgcolor="#CCCCCC"> 
      <h4><a href="../connexion/deconnexion.php"><font face="Arial, Helvetica, sans-serif"><b>DECONNEXION</b></font></a></h4>
    </td>
  </tr>
  <tr > 
    <td valign="top" align="left" width="552" bgcolor="#FFFFFF">&nbsp;</td>
    <td valign="top" align="left" width="280" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr > 
    <td valign="top" align="left" width="552" bgcolor="#CCCCCC" height="45"> 
      <h4> 
        <div align="center"> 
          <form>
            <input type="button" value="Imprimer" onClick="window.print()" name="Bouton2">
          </form>
        </div>
      </h4>
    </td>
    <td valign="top" align="left" width="280" height="45">
<div align="center"></div>
    </td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>
