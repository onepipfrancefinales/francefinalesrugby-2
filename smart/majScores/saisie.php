<?php 
if (isset($_GET['codeEquipe'])) $codeEquipe=$_GET['codeEquipe']; 
if (isset($_GET['comite'])) $comite=$_GET['comite']; 
if (isset($_GET['bddComite'])) $bddComite=$_GET['bddComite'];
if (isset($_GET['journee'])) $journee=$_GET['journee'];
if (isset($_GET['maxJournee'])) $maxJournee=$_GET['maxJournee'];else $maxJournee='22';
echo "Traitement de la demande.";
echo "<hr />";
$phpcomite_matchs = "php".''.$bddComite.''."_matchs"; 
$phpcomite_clubs = "php".''.$bddComite.''."_clubs"; 

/*
echo "equipe :".$codeEquipe;echo "<br />";
echo "bddComite :".$bddComite;echo "<br />";
echo "comite :".$comite; echo "<br />";
echo "journee :".$journee; echo "<br />";
echo "journee max : ".$maxJournee;echo "<br />";
echo $phpcomite_matchs;echo "<br />";

*/
$dateDuJour = date("Y-m-d H:mm:ss");

require ("../../connect/connexion6.php");

if (isset($score1)) $score1 = $score1; else $score1 = 0;
if (isset($score2)) $score2 = $score2; else $score2 = 0;

$reponseTest =$bdd->query( "
				SELECT buts_dom, buts_ext, date_reelle
				FROM $phpcomite_matchs
				WHERE id_journee='$journee'and ( id_equipe_dom='$codeEquipe' or id_equipe_ext='$codeEquipe')"); 
	
		while ($row = $reponseTest->fetch() )
				{ 
				 $score1 = $row[0];
				 $score2 = $row[1];
				 $dateMatch = $row[2];
				}
//echo "<br />";
//echo "score 1 : ".$score1;	echo "<br />"; 
//echo "score 2 : ".$score2;echo "<br />";
//echo "date match : ".$dateMatch;echo "<br />";
			
			
	if (($score1 + $score2) > 0) 
	{ 
?>	
		 <meta http-equiv="refresh" content="0; URL=validation3.php?comite=<?php echo $comite;?>&bddComite=<?php echo $bddComite;?>&maxJournee=<?php echo $maxJournee;?>&journee=<?php echo $journee;?>&codeEquipe=<?php echo $codeEquipe;?>">
		 <?php
		 }		
	else 
	{ 
	?>
		 <meta http-equiv="refresh" content="0; URL=saisie1.php?comite=<?php echo $comite;?>&bddComite=<?php echo $bddComite;?>&maxJournee=<?php echo $maxJournee;?>&journee=<?php echo $journee;?>&codeEquipe=<?php echo $codeEquipe;?>">
		 <?php
		 }	
	
	?>