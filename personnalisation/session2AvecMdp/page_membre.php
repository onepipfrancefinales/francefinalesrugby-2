<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link type="text/css" rel="stylesheet" href="../../smart/10.css"> 
<meta name=viewport content="width=device-width, initial-scale=1">
<link type="text/css" rel="stylesheet" href="CSS.css">
</head>

<body>
<table class="borderWidth1 width100PC">
  <tr> 
    <td class="h22"> France Finales Rugby </td>
  </tr>
  <tr> 
    <td class="h12" height="39"> Mise à jour des résultats</td>
  </tr>
</table>

<?php include "entetePage.php"; 
require '../../fonctions.php';
//********* Recheche du club (E) *********
require "../../connect/connexion1.php" ; 
infosclub($idFfr, $bdd);

require "../../connect/connexion6.php" ; 
appartientA('pro', $id,  $bdd);
$resultatPro = $resultat;

appartientA('fed3NE', $id,  $bdd);
$resultatFed3NE = $resultat;

if ( $resultatPro == 1)
{$bddComite="pro"; $comite="pro";}

elseif ( $resultatFed3NE == 1)
{$bddComite="fed3NE";$comite="fed3NE";}

elseif ($numLigue == 15 OR $numLigue == 17 OR $numLigue == 18 OR $numLigue == 22)
	{
	if ($numLigue == 15)
		{$bddComite="idf";$comite="al";}
	elseif ($numLigue == 17)
		{$bddComite="idf";$comite="idf";}
	elseif ($numLigue == 18)
		{$bddComite="idf";$comite="n";}
	elseif ($numLigue == 22)
		{$bddComite="idf";$comite="pr";}
	}	
elseif ($numLigue == 11 OR $numLigue == 12 OR $numLigue == 13 OR $numLigue == 16 OR $numLigue == 21)
	{
	if ($numLigue == 11)
		{$bddComite="pl";$comite="bg";}
	elseif ($numLigue ==12)
		{$bddComite="pl"; $comite="br";}
	elseif ($numLigue ==13)
		{$bddComite="pl"; $comite="ce";}
	elseif ($numLigue ==16)
		{$bddComite="pl"; $comite="fl";}
	elseif ($numLigue ==21)
		{$bddComite="pl"; $comite="pl";}
	}	
elseif ($numLigue ==10)
	{$bddComite="au"; $comite="au";}
elseif ($numLigue == 19)
	{$bddComite="ca"; $comite="ca";}
elseif ($numLigue ==20)
	{$bddComite="ab"; $comite="ab";}
	
	
	require ("../../connect/connexion6.php") ;
	$comite_equipes = "php".''.$bddComite.''."_equipes";
	
	$reponse = $bdd->query (" SELECT id_champ
								FROM $comite_equipes
								WHERE id = '$id' ");
	while ($donnees = $reponse->fetch())
		{
		$poule = $donnees['id_champ'];
		}	

//********* Recheche de la journee (J) *********
$phpcomite_journees="php".''.$bddComite.''."_journees";

				$nbreDeJournee=$bdd->query("	SELECT MAX(numero)
							FROM $phpcomite_journees
							WHERE id_champ=$poule");
				
				$nbreDeJournee=$nbreDeJournee->fetch();
																				
$derniereJournee=$nbreDeJournee[0];

$phpcomite_matchs= "php".''.$bddComite.''."_matchs";				
	
$journeeMini = ($poule * 100) + 1;
$journeeMaxi = ($poule * 100 ) + $derniereJournee; 
			
	if (isset($journee)) $journee = $journee ; else $journee =""; 			
	$result =$bdd->query("	SELECT DISTINCT id_journee
							FROM $phpcomite_matchs
							WHERE id_journee Between  $journeeMini AND $journeeMaxi 
							AND buts_dom IS NOT NULL 
							AND buts_ext IS NOT NULL 
							ORDER BY id_journee ");
														
							
							while ($row = $result->fetch())
								{
								$journee = $row[0];
								//echo $journee; echo "<br />";
								}
																									
if ($journee == NULL)
 $journee=$journeeMini;
else
$journee=$journee+1;
$journeeActuelle=substr($journee,-2);
?>

<div class="marginAuto size5 center"> 
  
 <b> <?php echo $nomChampion; ?></b> 
   
<br>
  <?php 
  $logo = substr($id,-5);
  {print("<img src=\"/images/blasons200_200/$logo.gif\" >");}	?>
  
  <hr />

	</div>
	
	<p class="center size3 style">
		<a href="/resultatsFranceservCom/retourAvecMdp.php?E=<?php echo $id; ?>&bddC=<?php echo $bddComite; ?>&C=<?php echo $comite; ?>&J=<?php echo $journee; ?>&JMAX=<?php echo $derniereJournee; ?>">
		<b>Mise à jour Equipe Une </b></a> <br>
	  <?php
	//******** Modif des variableS pour les equipes II  *******
	
	$id = $id + 90000000;
	
	//echo "poule : ".$poule;echo "<br />";
	if (substr($poule,3,3) < 180)
	{
	$journee = $journee + 10000;
	}
	else
	{
	$journee = $journee + 900000;
	}
	//echo "journee : ".$journee;
?>	

<p class="center size3 style">
	<a href="/resultatsFranceservCom/retourAvecMdp.php?E=<?php echo $id; ?>&bddC=<?php echo $bddComite; ?>&C=<?php echo $comite; ?>&J=<?php echo $journee; ?>&JMAX=<?php echo $derniereJournee;?>"><b>
	Mise à jour Equipe II </b></p>
</body>
</html>
