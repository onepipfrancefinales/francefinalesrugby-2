<?php
function rechercheInfosDesClubs($chaine)
{
global $code; global $id; global $ligue;

require ("../connect/connexion.php") ;
if ($chaine>0)
	{
	echo " numerique";

	$reponse = $bdd->query("SELECT  id, type, code,sigle
				FROM bdclubs  
				WHERE  id='$chaine' OR code='$chaine'  OR idffr='$chaine'  ");  
							While ($row = $reponse->fetch() )
									{ 
									  	$code=$row[0];
										$id=$row[0];
										$ligue=$row[1];	 
									}	
	echo $code;
	echo "<br />";
	echo $ligue;
	echo "FIN";	
	}
else
	{
	echo "ooooooo".$chaine;
	echo "non numerique";

	echo "1 :".$code;
	echo "2 :".$id;
	echo "3 :".$ligue;
	$reponse = $bdd->query("SELECT  id, type, code
							FROM bdclubs  
							WHERE  nom_1='$chaine' OR nom_2='$chaine' OR sigle='$chaine' OR nom_3='$chaine' OR nom_4='$chaine' OR idffr='$chaine' ");  
							While ($row = $reponse->fetch() )
									{ 
									  	$code=$row[0];
										$id=$row[0];
										$ligue=$row[1];	 
									}	
	echo $code;
	echo "<br />";
	echo $ligue;
	echo "FIN";
	}	
}

function nbreClubsComite()
{
	
global $nbre;	
	
	
$cleComite = array('(al)','(ab)','(au)','(be)','(bg)','(ce)','(c)','(cbl)','(ca)','(caz)','(da)','(fl)','(fc)','(idf)','(ld)','(lm)','(ly)','(mpy)','(n)','(pl)','(pa)','(pch)','(pr)','(pc)');
$nbre = array();
require ("../connect/connexion1.php") ;	
foreach($cleComite as $comite) 
  {

	$reponse = $bdd->query("SELECT COUNT(id)
							FROM bdclubs  
							WHERE  siglecomite ='$comite)'");  

				$nbre = $reponse->fetch();
  }

}


function rechercheInfosLigues($idLigue, $bdd)
{
if (isset($comite5)) $comite5 = $comite5;
if (isset($comite6)) $comite6 = $comite6;	
	
	
global $idLigue, $nomLigue, $sigleLigue, $nbreFeminines, $nbreFemininesJeunes,	$nbreSeniors ,	$nbreJeunes ,$nbreDirigeants ,
	   $nbreClubs,	$president ,$batiment ,	$adresse ,	$cp , $ville , $site ,  $tel , $fax  ,
	   $comite1,	$comite2,	$comite3,	$comite4,	$comite5,	$comite6;

$reponse = $bdd->query("SELECT *
						FROM bdligue 
						WHERE id='$idLigue' "); 
	while ($donnees = $reponse->fetch())
				{ 
				//$idLigue = $donnees[0];
				$nomLigue = $donnees[1];
				$sigleLigue = $donnees[2];
				$nbreFeminines = $donnees[3];					
				$nbreFemininesJeunes = $donnees[4];
				$nbreSeniors = $donnees[5];
				$nbreJeunes = $donnees[6];
				$nbreDirigeants = $donnees[7];
				$nbreClubs = $donnees[8];
				$president = $donnees[9];
				$batiment = $donnees[10];
				$adresse = $donnees[11];
				$cp = $donnees[12];
				$ville = $donnees[13];
				$site = $donnees[14];
				$tel = $donnees[15];
				$fax = $donnees[16];
				//$courriel = $donnees[16];
				//$clubs = $donnees[17];
				//$licencies = $donnees[18];
				//$site = $donnees[19];
				$comite1 = $donnees[18];
				$comite2 = $donnees[19];
				$comite3 = $donnees[20];
				$comite4 = $donnees[21];
				$comite5 = $donnees[22];
				$comite6 = $donnees[23];
				
				}
}

function structureLigue($idLigue, $bdd)
{	

global $d110,$d120,$d130,$d140,$d150,$d160,$d170,$d171,$d180,$d181,$d190,$d191,$d200,$d210,$d215,$d220;	
	
$tabDivision = array('110','120','130','140','150','160','170','171','180','181','190','191','200','210','215','220');
$nbre = array();
$tabNbre = array();
foreach($tabDivision as $division) 
   {
	$reponse = $bdd->query("SELECT COUNT(*)
							FROM bdsaisons 
							WHERE en_cours = '$division'
							AND ligue='$idLigue' ");  

	$nbre = $reponse->fetch();
	$tabNbre[]= $nbre[0];
	}
	
	$d110 = $tabNbre[0];
	$d120 = $tabNbre[1];
	$d130 = $tabNbre[2];
	$d140 = $tabNbre[3];
	$d150 = $tabNbre[4];
	$d160 = $tabNbre[5];
	$d170 = $tabNbre[6];
	$d171 = $tabNbre[7];
	$d180 = $tabNbre[8];
	$d181 = $tabNbre[9];
	$d190 = $tabNbre[10];
	$d191 = $tabNbre[11];
	$d200 = $tabNbre[12];
	$d210 = $tabNbre[13];
	$d215 = $tabNbre[14];
	$d220 = $tabNbre[15];
}
?>
