<html>
<head>
<title>Feuille de match</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link type="text/css" rel="stylesheet" href="../feuilledestyle2.css"/>
<link type="text/css" rel="stylesheet" href="../feuilledestyle.css"/>
<link type="text/css" rel="stylesheet" href="../feuilleMatch.css"/>
<link rel="stylesheet" href="print.css" type="text/css" media="print" />
</head>
<?php 

if (isset ($_POST['championnat'])) $championnat = $_POST['championnat']; $championnat ="Variable championnat non d&eacute;clar&eacute;e";

if (isset ($_GET['code_div'])) $code_div = $_GET['code_div'];			else $code_div= "Variable code_div non d&eacute;clar&eacute;e";
if (isset ($_GET['code_match'])) $code_match = $_GET['code_match'];		else $code_match = "Variable code_match non d&eacute;clar&eacute;e";
if (isset ($_GET['date'])) $date = $_GET['date'];						else $date= "Variable date non d&eacute;clar&eacute;e";
if (isset ($_GET['comite'])) $comite = $_GET['comite'];					else $comite = "Variable code comite d&eacute;clar&eacute;e";
if (isset ($_GET['id_equipe'])) $id_equipe = $_GET['id_equipe'];		else $id_equipe= "Variable equipe non d&eacute;clar&eacute;e";
if (isset ($_GET['equipe'])) $equipe = $_GET['equipe'];					else $equipe= "Variable equipe non d&eacute;clar&eacute;e";
if (isset ($_GET['equipeA'])) $equipeA = $_GET['equipeA'];				else $equipeA= "Variable code equipeA d&eacute;clar&eacute;e";
if (isset ($_GET['equipeB'])) $equipeB = $_GET['equipeB'];				else $equipeB= "Variable equipeB non d&eacute;clar&eacute;e";
if (isset ($_GET['terrain'])) $terrain = $_GET['terrain'];				else $terrain= "Variable terrain non d&eacute;clar&eacute;e";
if (isset ($_GET['connect'])) $connect = $_GET['connect'];				else $connect= "Variable connect non d&eacute;clar&eacute;e";
if (isset ($_GET['type']))  $type = $_GET['type'];						else $type= "Variable type non d&eacute;clar&eacute;e";
 
 
require ("../fonctionJoueurs.php");
require ("../fonctions.php");
require   "../../../connect/connexion1.php";
AffichageEquipeA($equipeA, $bdd);
AffichageEquipeB($equipeB, $bdd);


require   "../../../connect/connexion2.php";
calculEffectif ($comite, $equipe, $bdd);
feuilleMatch($code_match, $comite, $bdd);

$bdcomite=("php".''.$comite.''."_joueurs");?>


<table width="780" border="0" align="left">
  <tr> 
    <td valign="top" align="left" colspan="2"> 
<?php 
//*******************************************************************//
//*                                                					*//
//*  						--   ZONE 0  --                         *//
//*                              Entete                             *// 
//*******************************************************************//  

if (isset ($organisateur))	 $organisateur = $organisateur; else $organisateur = ""; 
if (isset ($tel))	 $tel = $tel; else $tel = ""; 
if (isset ($id))	 $id = $id; else $id = ""; 
if (isset ($_GET['date']))$datecomplete = $_GET['date']; else $datecomplete ="";

$date= substr($datecomplete,0,10);
echo "zone0";
if ($terrain=="dom")
	include "zone0.php"; 
else 
	include "zone0B.php";
?>
    </td>
  </tr>
  <tr> 
    <td valign="top" align="left" colspan="2"> 
<?php
//*******************************************************************//
//*                                                					*//
//*  						--   ZONE 1  --                         *//
//*                         Feuille de match                        *// 
//*******************************************************************//        
echo "zone1";
if (isset ($_POST['capitaine'])) $capitaine = $_POST['capitaine']; else  $capitaine ="";  
	  if ($terrain=="dom")
	  			{
				if ($comite == "f1" or $comite == "fed2" or $comite == "fed3NE" or $comite == "fed3GS")
					{
					include ("zone1Fed.php"); 
					include ("zone1Com.php"); 
					}
					else
					{
					include ("zone1Ligue.php"); 
					include ("zone1Com.php"); 	
					}
				}
	  		else 
				{
					if ($comite == "f1" or $comite == "fed2" or $comite == "fed3NE" or $comite == "fed3GS")
					{
					include ("zone1BFed.php");
					include ("zone1Com.php");
					}
					else
					{
					include ("zone1BLigue.php");
					include ("zone1Com.php");
					}	
				}
			
?>	   
    </td>
  </tr>
  <tr> 
    <td valign="top" height="21" align="left" colspan="2"> 
<?php
//*******************************************************************//
//*                                                					*//
//*  						--   ZONE 2  --                         *//
//*                         Staff technique	                        *// 
//*******************************************************************//   

//********   recuperation des données issues de saisie *********
echo "zone2";    
if (isset ($_POST['ent'])) $entraineur= $_POST['ent']; else $entraineur="";
if (isset ($_POST['ent2'])) $entraineur2= $_POST['ent2'];else $entraineur2="";
if (isset ($_POST['adj'])) $adjoint= $_POST['adj']; else $adjoint="";

if (isset ($_POST['med'])) $medecin= $_POST['med'];else $medecin="";
if (isset ($_POST['soi'])) $soigneur= $_POST['soi'];else $soigneur="";
	
if (isset ($_POST['pre'])) $prepa= $_POST['pre'];else $prepa="";	  
 echo "zone2"; 
infosEntraineur($comite, $equipe, $entraineur, $bdd);	
infosEntraineur2($comite, $equipe, $entraineur2, $bdd);	  
infosSoigneur($comite, $equipe, $soigneur, $bdd);
infosAdjoint($comite, $equipe, $adjoint, $bdd);
infosMedecin($comite, $equipe, $medecin, $bdd);
infosPrepa($comite, $equipe, $prepa, $bdd);	
		
if ($terrain=="dom")
	  include "zone2.php"; 
else 
	  include "zone2B.php"; 
	  
 
?>
    </td>
  </tr>
  <tr> 
    <td valign="top" align="left" colspan="2"> 
<?php
//*******************************************************************//
//*                                                					*//
//*  						--   ZONE 3  --                         *//
//*                        Arbitre de touche						*// 
//********************************************************************* 
echo "zone3";
if (isset ($_POST['numeroJuge'])) $numeroJuge = $_POST['numeroJuge']; else  $numeroJuge ="**";
 
		  if ($terrain=="dom")
	   	{
		$numeroJugeB = $numeroJuge;
	   	infosJugeTouche($comite, $equipe, $numeroJugeB, $code_match,  $bdd);
	  	include "zone3.php"; 
	   	}
	  else 
	   	{
		$numeroJugeB = $numeroJuge;
  		 infosJugeToucheB($comite, $equipe, $numeroJugeB, $code_match,  $bdd);
		 include "zone3B.php";
	   	}
?>
    </td>
  </tr>
  <tr> 
    <td valign="top" align="left" colspan="2"> 
      <?php	
//*******************************************************************//
//*                                                					*//
//*  						--   ZONE 4  --                         *//
//*                      Controle Anti dopage						*// 
//*******************************************************************//        
echo "zone4";
if (isset ($_POST['dop'])) $dopage= $_POST['dop']; else $dopage="";
  
infosDopage($comite, $equipe, $dopage, $bdd);	  
		  
	   if ($terrain=="dom")
	  include "zone4.php"; 
	  else 
	  include "zone4B.php"; ?>
    </td>
  </tr>
  <tr> 
    <td valign="top" align="left" colspan="2"> 
      
<?php 
//*******************************************************************//
//*                                                					*//
//*  						--   ZONE 5  --                         *//
//*                      Visas des responsables                     *// 
//*******************************************************************//        
	echo "zone5";  	  
if (isset ($_POST['res'])) $responsable = $_POST['res']; else  $responsable ="";
 
	  if ($terrain=="dom")
	  {
	  infosResponsable($comite, $equipe, $responsable, $bdd);
	  include "zone5.php"; 
	  }
	  else 
	  {
	  infosResponsableB($comite, $equipe, $responsable, $bdd);
	  include "zone5B.php"; 
	  }
echo "zone6";
	  require '../fonctionEnreg.php';
echo "zone7";	  
	 ?>
    </td>
  </tr>
  <tr> 
    <td valign="top" align="left" colspan="2">&nbsp;</td>
  </tr>
  <tr > 
    <td valign="top" align="left" colspan="2"><hr /></td>
  </tr>
  <tr > 
    <td valign="top" align="left" width="374">&nbsp;</td>
    <td valign="top" align="left" width="396">&nbsp;</td>
  </tr>
  <tr > 
    <td valign="top" align="left" width="374" bgcolor="#CCCCCC" height="23"> 
      <h4><a href="../adminFeuilles/page_select_joueurs.php?terrain=dom&equipe=<?php echo $equipe; ?>&equipeB=<?php echo $equipeB; ?>&equipeA=<?php echo $equipeA; ?>&type=<?php echo $type; ?>&php=php&connect=<?php echo $connect ;?>&comite=<?php echo $comite ; ?>&code_match=<?php echo $code_match; ?>&date=<?php echo $date; ?>">Modifier 
        la feuille de match</a></h4>
    </td>
    <td valign="top" align="left" width="396" bgcolor="#CCCCCC" height="23"> 
      <h4><a href="effacerUneFeuilleMatch.php?terrain=<?php echo $terrain; ?>&type=<?php echo $type; ?>&connect=<?php echo $connect; ?>&code_match=<?php echo $code_match; ?>&comite=<?php echo $comite; ?>&equipe=<?php echo $equipe; ?>&id_equipe=<?php echo $id_equipe; ?>">Effacer </a></h4>
    </td>
  </tr>
  <tr > 
    <td id="impression" width="374" height="12">&nbsp;</td>
    <td id="impression" width="396" height="12"></td>
  </tr>
  <tr > 
    <td valign="top" align="left" width="374" height="44"> 
      <h4> 
        <div id="impression"> 
          <form>
            <input type="button" value="Imprimer" onClick="window.print()" name="Bouton2">
          </form>
        </div>
      </h4>
    </td>
    <td valign="top" align="left" width="396" height="44"> 
      <h4><a href="../connexion/page_liste_compet1.php?type=S1&id_equipe=<?php echo $id_equipe; ?>&equipe=<?php echo $equipe; ?>&comite=<?php echo $comite ; ?>&connect=<?php echo $connect ;?>" target="_top">Retour 
        &agrave; accueil</a></h4>
    </td>
  </tr>
  <tr > 
    <td id="impression" width="374">&nbsp;</td>
    <td width="396"> 
      <h4><a href="../connexion/deconnexion.php">D&eacute;connexion</a></h4>
    </td>
  </tr>
      </table>
   </body>
</html>
