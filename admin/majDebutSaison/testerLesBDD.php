<?php
// liste des bases
require '../../connect/connexion6.php';
$tabLigue = array( 'pro', 'fed3NE', 'ab', 'au', 'ca', 'idf', 'pl');

	foreach ($tabLigue as $ligue)
	{
	
	 $tableMatch = 'php'.$ligue.'_matchs';
	
	 $requete = $bdd->query("SELECT COUNT(id)
						FROM $tableMatch		
						WHERE id < 100
						"); 

	$row = $requete->fetch();
	$nbreLigneErreur = $row[0];	
	
	
	echo "$ligue".' : '.$nbreLigneErreur.'<br />';
	 
	 
	 
	if ($nbreLigneErreur > 0)
	{
	 
		$id = array();
		$id_equipe_dom = array();
		$id_equipe_ext =array();
		$id_journee = array();
	 
	 
	 
	
	 $reponse = $bdd->query("	
				SELECT id, id_equipe_dom, id_equipe_ext, id_journee
				FROM $tableMatch
				WHERE id < 100
				 "); 
										
	  while ($row = $reponse->fetch() )
		{ 
		 $id[] = $row[0];
		 $id_equipe_dom[] = $row[1];
		 $id_equipe_ext[] = $row[2];
		 $id_journee[] = $row[3];
		}
	 
	 for ($i = 0; $i < $nbreLigneErreur; $i++)
	 {
	echo $ligue.' : '.$id[$i].' - '.$id_equipe_dom[$i].' - '.$id_equipe_ext[$i].' - '.$id_journee[$i];echo "<br />";
	 }
	
	}
	
	
	
	}



//affichages
?>