<?php 
$champ2 = $_GET['champ2'];
//echo $champ2;echo "<br />";
echo "Traitement de la demande.";
include ("entetePage.php"); 
require '../../fonctions.php';
//********* Recheche du club (E) *********
require ("../../connect/connexion1.php") ; 
//echo $idFfr;echo "<br />";
infosclub($idFfr, $bdd);
/*
echo "<br>";
echo $sigleComite;echo "<br>";
echo $id;echo "<br>";
echo $nomChampion;echo "<br>";
echo $numLigue;echo "<br>";
echo "<br>";
*/
require ("../../connect/connexion6.php") ; 

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
		
/*
echo "<br />";
	echo "bddComite : ".$bddComite;
	echo "<br />";
	echo "comite : ".$comite;
	echo "<br />";
	echo "id : ".$id;
	echo "<br />";
*/	
	require ("../../connect/connexion6.php") ;
	$comite_equipes = "php".''.$bddComite.''."_equipes";
//echo "comite_equipes : ".$comite_equipes;
//echo "<br />";	
//********************************	


if (isset($_GET['champ2'])) $champ2 =$_GET['champ2'];else $champ2=990110;
/*
echo "champ2 : ".substr($champ2,-3,3);echo "<br />";
//echo "journee : ".$journee;echo "<br />";
echo "id : ".$id;echo "<br />";
echo "------------------";echo "<br />";
echo substr($champ2,3,3); echo "<br />";
echo "------------------";echo "<br />";
*/


if (substr($champ2,3,3) > 230 )
{
 $id = $id + 90000000;
}

echo "<hr />";
//echo "id : ".$id;echo "<br />";
	

	$reponse = $bdd->query (" SELECT id_champ
								FROM $comite_equipes
								WHERE id = '$id' ");
	while ($donnees = $reponse->fetch())
		{
		$poule = $donnees['id_champ'];
		}	

			echo "<br />";
			//echo "poule : ".$poule;


//********* Recheche de la journee (J) *********


$phpcomite_journees="php".''.$bddComite.''."_journees";
//echo $phpcomite_journees;echo "<br />";

				$nbreDeJournee=$bdd->query("	SELECT MAX(numero)
							FROM $phpcomite_journees
							WHERE id_champ=$poule");
				
				$nbreDeJournee=$nbreDeJournee->fetch();
																				
$derniereJournee=$nbreDeJournee[0];
//echo "Nombre de journee : ".''.$derniereJournee;

?>
<p align="center"> 
<?php
$phpcomite_matchs= "php".''.$bddComite.''."_matchs";				
	
$journeeMini = ($poule * 100) + 1;
$journeeMaxi = ($poule * 100 ) + $derniereJournee; 
//echo $journeeMini;echo "<br />";
//echo $journeeMaxi;echo "<br />";
			
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
							//	echo $journee; echo "<br />";
								}
//var_dump ($journee);
//echo "journee : ".$journee;																										
if ($journee == NULL)
 $journee=$journeeMini;
else
$journee=$journee+1;

$journeeActuelle=substr($journee,-2);

//echo "journée : ".$journee;echo "<br />";
//echo "journée actuelle : ".$journeeActuelle;echo "<br />";
?>
  <font size="5"> <b> 
  <?php// echo $nomChampion; ?>
   </b></font></p>
<div align="center"> 
  <?php 
 // $logo = substr($id,-5);
 // {print("<img src=\"/images/blasons200_200/$logo.gif\" >");}

 ?>
 
  <hr />

	</div>
	

<!-- Internet -->
<!--	
	<meta http-equiv="refresh" content="0;URL=http://resultats.franceserv.com/retour.php?E=<?php echo $id; ?>&bddC=<?php echo $bddComite; ?>&C=<?php echo $comite; ?>&J=<?php echo $journee; ?>&JMAX=<?php echo $derniereJournee; ?>">
-->
<!--  local -->

 <meta http-equiv="refresh" content="0;URL=/resultatsFranceservCom/retour.php?E=<?php echo $id; ?>&bddC=<?php echo $bddComite; ?>&C=<?php echo $comite; ?>&J=<?php echo $journee; ?>&JMAX=<?php echo $derniereJournee; ?>">


	<!--
	<p align="center"> <font face="Arial, Helvetica, sans-serif" size="3"><a href="http://resultats.franceserv.com/retour.php?E=<?php echo $id; ?>&bddC=<?php echo $bddComite; ?>&C=<?php echo $comite; ?>&J=<?php echo $journee; ?>&JMAX=<?php echo $derniereJournee; ?>"><font color="#000000"><b>Mise 
	  &agrave; jour Equipe Une </b></font></a></font> <br>
-->
	<?php
	//******** Modif des variableS pour les equipes II  *******
/*	
	$id = $id + 90000000;
	
	//echo "poule : ".$poule;echo "<br />";
	if (substr($poule,3,3) < 180)
	{
		$id = $id + 90000000;
	$journee = $journee + 10000;
	}
	else
	{
	$journee = $journee + 900000;
	}
	//echo "journee : ".$journee;
	*/
?>	
<!--
<p align="center"><font face="Arial, Helvetica, sans-serif" size="3"><a href="http://resultats.franceserv.com/retour.php?E=<?php echo $id; ?>&bddC=<?php echo $bddComite; ?>&C=<?php echo $comite; ?>&J=<?php echo $journee; ?>&JMAX=<?php echo $derniereJournee;?>"><font color="#000000"><b>Mise 
  &agrave; jour Equipe II </b></font></a></font></p>
-->
</body>
</html>
