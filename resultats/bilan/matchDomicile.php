<?php
$equipe=$_GET['equipe'];
$bd=$_GET['phpComite'];

//$bd="phplm";
$bd_clmnt_cache = $bd.''."_clmnt_cache";


if ( $bd == "phpmpy"  or  $bd == "phppl" OR $bd == "phpbr" OR $bd == "phptest" OR $bd == "phppr" OR $bd == "phpf1" OR $bd == "phpfed2" OR $bd == "phpfed3NE" OR $bd == "phpfed3GS")
	require ("../../connection3.php"); 

else
	require ("../../connection2.php");  

$reponse = mysql_query("SELECT DOMJOUES, DOMG, DOMP, DOMN
						FROM $bd_clmnt_cache
						WHERE ID_EQUIPE=$equipe"); 
							While ($donnees = mysql_fetch_array($reponse) )
							{ 
							 $pointsMarques= $donnees['BUTSPOUR'];
							 $pointsPris= $donnees['BUTSCONTRE'];
							 $joues = $donnees['JOUES'];
							
							$matchDomicile = $donnees['DOMJOUES'];
							$victoireDomicile  = $donnees['DOMG'];
							$defaiteDomicile  = $donnees['DOMP'];
							$nulDomicile  = $donnees['DOMN'];
							
							}
//echo "victoire".''.$victoireDomicile;
//echo "defaite".''.$defaiteDomicile;			

//$victoireDomicile=4;
//$defaiteDomicile=4;

require_once("include_path_inc.php");

require_once("jpgraph.php");
require_once("jpgraph_pie.php");



if 	($victoireDomicile !=0 and $defaiteDomicile !=0 and $nulDomicile !=0)
		$donnees = array($victoireDomicile,$defaiteDomicile,$nulDomicile);

elseif 	($victoireDomicile !=0 and $nulDomicile !=0)
				$donnees = array($victoireDomicile,$nulDomicile);
				
elseif ($victoireDomicile !=0 and $defaiteDomicile !=0)
				$donnees =  array($victoireDomicile,$defaiteDomicile);
				
elseif ($defaiteDomicile !=0 and $nulDomicile !=0)
				$donnees = array($defaiteDomicile,$nulDomicile);	

	

$largeur = 200;
$hauteur = 240;

// Initialisation du graphique
$graphe = new PieGraph($largeur, $hauteur);

// Creation du camembert
$camembert = new PiePlot($donnees);
// Ajout du camembert au graphique
$graphe->add($camembert);


if ($victoireDomicile !=0 and $defaiteDomicile !=0 and $nulDomicile !=0 )
$camembert->SetSliceColors(array('green', 'red', 'orange'));

elseif ($victoireDomicile !=0 and $nulDomicile !=0)
$camembert->SetSliceColors(array('green', 'orange'));

elseif ($victoireDomicile !=0 and $defaiteDomicile !=0)
$camembert->SetSliceColors(array('green', 'red'));

elseif ($defaiteDomicile !=0 and $nulDomicile !=0)
$camembert->SetSliceColors(array( 'red', 'orange'));


// Ajout du titre du graphique
//$graphe->title->set("Nbre de match : $matchDomicile " );

if ($victoireDomicile !=0 and $defaiteDomicile !=0 and $nulDomicile !=0)
$camembert->SetLegends(array('Gagné','Perdu', 'Nul'));	

elseif ($victoireDomicile !=0 and $nulDomicile !=0)
$camembert->SetLegends(array('Gagné','Nul'));

elseif ($victoireDomicile !=0 and $defaiteDomicile !=0)
$camembert->SetLegends(array('Gagné','Perdu'));

elseif ($defaiteDomicile !=0 and $nulDomicile !=0)
$camembert->SetLegends(array('Perdu', 'Nul'));


// Affichage du graphique
$graphe->stroke();
?>