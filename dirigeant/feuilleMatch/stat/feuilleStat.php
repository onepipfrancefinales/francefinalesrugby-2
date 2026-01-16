<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="stat.css">
<link rel="stylesheet" type="text/css" href="../feuilledestyle2.css">
</head>


<?php
if (isset($_GET['comite'])) $comite = $_GET['comite']; else $comite ="-";
if (isset($_GET['equipe'])) $equipe = $_GET['equipe']; else $equipe ="-";


if ($comite == "f1" or $comite == "fed2" or $comite == "fed3NE" or $comite == "fed3GS")
require   "../../../connect/connexion3.php";
else
require   "../../../connect/connexion2.php";




require '../fonctions.php';
calculEffectif ($comite, $equipe, $bdd);
nom_joueur ($comite, $equipe, $bdd, $effectifJoueurs);


//journee minimum
$phpComite_matchsfm = "php".$comite."_matchsfm";
$phpComite_feuilleA = "php".$comite."_feuilleA";
$phpComite_feuilleB = "php".$comite."_feuilleB";
echo $phpComite_feuilleA;

$reponse = $bdd->query("SELECT MIN(id)
						FROM $phpComite_matchsfm
						WHERE id_equipe_ext =$equipe  or id_equipe_dom =$equipe"); 
										while ($row= $reponse->fetch() )
											{ 
											$idJourneeMin=$row[0];  
											}
											
// journee max											
$reponse = $bdd->query("SELECT Max(id)
						FROM $phpComite_matchsfm
						WHERE id_equipe_ext =$equipe  or id_equipe_dom =$equipe"); 
										while ($row= $reponse->fetch() )
											{ 
											$idJourneeMax=$row[0];
											}

											
//suppression des matchs de l'id journee (deux derniers chiffre)
echo "<br />";									
echo "min : ".$idJourneeMin = substr($idJourneeMin,0,8);echo "<br />";
echo "max : ".$idJourneeMax = substr($idJourneeMax,0,8);echo "<br />";
echo "<br />";
$tabIdJoueur = array();


	$journee1 = $idJourneeMin;
	for ($i =1; $i< 6 ; $i++)
	{
		$match = ($idJourneeMin *100) + $i;
				
			// Requete pour determiner la table et l'argument a utiliser
			if (isset ($equipeDom)) $equipeDom = $equipeDom ;else $equipeDom=0;
			$reponse = $bdd->query("SELECT equipe_dom
									FROM $phpComite_feuilleA
									WHERE id=$match AND equipe_dom = $equipe"); 
													while ($row = $reponse->fetch() )
														{ 
														$equipeDom=$row[0];  
														}
				if ($equipeDom >0)
					{
					$phpComite_feuilleAB =$phpComite_feuilleA;
					$choix = "equipe_dom";
					}
				else
					{
					$phpComite_feuilleAB =$phpComite_feuilleB;
					$choix = "equipe_ext";
					}
	
				// de N1 A  N 23
				for($poste=1; $poste<24; $poste++)
				{ 
				
				$reponse = $bdd->query("SELECT *
									FROM $phpComite_feuilleAB
									WHERE id=$match AND $choix = $equipe"); 
													while ($donnees = $reponse->fetch() )
														{ 
															$tabIdJoueur[]=$donnees['N'.$poste];  
														}
											
	if (isset ($tabIdJoueur[$poste-1])) ${"M".$match."N".$poste} = $tabIdJoueur[$poste-1];else ${"M".$match."N".$poste} ="";

	
	}

	}
  
//}

// ------ journee2 --------
unset ($equipeDom);
$tabIdJoueur = array();
	$journee2 = $journee1+1;
	echo $equipe;echo "<br>";
	for ($i =1; $i< 6 ; $i++)
	{
	$matchJ2 = ($journee2 *100) + $i;
//	echo $matchJ2;echo "<br>";
	
		
				if (isset ($equipeDom)) $equipeDom = $equipeDom ;else $equipeDom=0;
				$reponse = $bdd->query("SELECT equipe_dom
									FROM $phpComite_feuilleA
									WHERE id=$matchJ2 AND equipe_dom = $equipe"); 
													while ($row = $reponse->fetch() )
														{ 
														$equipeDom=$row[0];  
														}
													
				
				if ($equipeDom >0)
					{
					$phpComite_feuilleAB =$phpComite_feuilleA;
					$choix = "equipe_dom";
					}
				else
					{
					$phpComite_feuilleAB =$phpComite_feuilleB;
					$choix = "equipe_ext";
					}
				
				
				// de N1 A  N 23
				for($poste=1; $poste<24; $poste++)
				{ 
				$reponse = $bdd->query("SELECT *
									FROM $phpComite_feuilleAB
									WHERE id=$matchJ2 AND $choix = $equipe"); 
													while ($donnees = $reponse->fetch() )
														{ 
														$tabIdJoueur[]=$donnees['N'.$poste];  
														}
														
														
														
	if (isset ($tabIdJoueur[$poste-1])) ${"M".$matchJ2."N".$poste} = $tabIdJoueur[$poste-1];else ${"M".$matchJ2."N".$poste} ="";
				}
	}	
	ECHO "eeeee".$matchJ2;
	echo "</br>";
// ------ journee3 --------
unset ($equipeDom);
$tabIdJoueur = array();
	$journee3 = $journee1+2;

	for ($i =1; $i< 6 ; $i++)
	{
		$matchJ3 = ($journee3 *100) + $i;
		echo $matchJ3;
// Requete pour determiner la table et l'argument a utiliser
			if (isset ($equipeDom)) $equipeDom = $equipeDom ;else $equipeDom=0;
			$reponse = $bdd->query("SELECT equipe_dom
									FROM $phpComite_feuilleA
									WHERE id=$matchJ3 AND equipe_dom = $equipe"); 
													while ($row = $reponse->fetch() )
														{ 
														$equipeDom=$row[0];  
														}
														echo "<br>";
				echo "zzzzzz journee3 ".$equipeDom;
				echo "<br>";
				
				if ($equipeDom >0)
					{
					$phpComite_feuilleAB =$phpComite_feuilleA;
					$choix = "equipe_dom";
					}
				else
					{
					$phpComite_feuilleAB =$phpComite_feuilleB;
					$choix = "equipe_ext";
					}
				
				
				
				
				
				// de N1 A  N 23
				for($poste=1; $poste<24; $poste++)
				{ 
				$reponse = $bdd->query("SELECT *
									FROM $phpComite_feuilleAB
									WHERE id=$matchJ3 AND $choix = $equipe"); 
													while ($donnees = $reponse->fetch() )
														{ 
															$tabIdJoueur[]=$donnees['N'.$poste];  
														}								
	if (isset ($tabIdJoueur[$poste-1])) ${"M".$matchJ3."N".$poste} = $tabIdJoueur[$poste-1];else ${"M".$matchJ3."N".$poste} ="";
				}
				
	}
// ------ journee4 --------
unset ($equipeDom);
$tabIdJoueur = array();
	$journee4 = $journee1+3;

	for ($i =1; $i< 6 ; $i++)
	{
		$matchJ4 = ($journee4 *100) + $i;
				
				// Requete pour determiner la table et l'argument a utiliser
			if (isset ($equipeDom)) $equipeDom = $equipeDom ;else $equipeDom=0;
			$reponse = $bdd->query("SELECT equipe_dom
									FROM $phpComite_feuilleA
									WHERE id=$matchJ4 AND equipe_dom = $equipe"); 
													while ($row = $reponse->fetch() )
														{ 
														$equipeDom=$row[0];  
														}
				if ($equipeDom >0)
					{
					$phpComite_feuilleAB =$phpComite_feuilleA;
					$choix = "equipe_dom";
					}
				else
					{
					$phpComite_feuilleAB =$phpComite_feuilleB;
					$choix = "equipe_ext";
					}
				
				
				
				
				// de N1 A  N 23
				for($poste=1; $poste<24; $poste++)
				{ 
				$reponse = $bdd->query("SELECT *
									FROM $phpComite_feuilleAB
									WHERE id=$matchJ4 AND $choix = $equipe"); 
													while ($donnees = $reponse->fetch() )
														{ 
															$tabIdJoueur[]=$donnees['N'.$poste];  
														}								
	if (isset ($tabIdJoueur[$poste-1])) ${"M".$matchJ4."N".$poste} = $tabIdJoueur[$poste-1];else ${"M".$matchJ4."N".$poste} ="";
				}
	}  
// ------ journee5 --------
unset ($equipeDom);
$tabIdJoueur = array();
	$journee5 = $journee1+4;

	for ($i =1; $i< 6 ; $i++)
	{
		$matchJ5 = ($journee5 *100) + $i;
	// Requete pour determiner la table et l'argument a utiliser
			if (isset ($equipeDom)) $equipeDom = $equipeDom ;else $equipeDom=0;
			$reponse = $bdd->query("SELECT equipe_dom
									FROM $phpComite_feuilleA
									WHERE id=$matchJ5 AND equipe_dom = $equipe"); 
													while ($row = $reponse->fetch() )
														{ 
														$equipeDom=$row[0];  
														}
				if ($equipeDom >0)
					{
					$phpComite_feuilleAB =$phpComite_feuilleA;
					$choix = "equipe_dom";
					}
				else
					{
					$phpComite_feuilleAB =$phpComite_feuilleB;
					$choix = "equipe_ext";
					}
	
	
	
	
	
	
				// de N1 A  N 23
				for($poste=1; $poste<24; $poste++)
				{ 
				$reponse = $bdd->query("SELECT *
									FROM $phpComite_feuilleAB
									WHERE id=$matchJ5 AND $choix = $equipe"); 
													while ($donnees = $reponse->fetch() )
														{ 
															$tabIdJoueur[]=$donnees['N'.$poste];  
														}								
	if (isset ($tabIdJoueur[$poste-1])) ${"M".$matchJ5."N".$poste} = $tabIdJoueur[$poste-1];else ${"M".$matchJ5."N".$poste} ="";
				}
	}
// ------ journee6 --------
unset ($equipeDom);
$tabIdJoueur = array();
	$journee6 = $journee1+5;


	for ($i =1; $i< 6 ; $i++)
	{
		$matchJ6 = ($journee6 *100) + $i;
			

// Requete pour determiner la table et l'argument a utiliser
			if (isset ($equipeDom)) $equipeDom = $equipeDom ;else $equipeDom=0;
			$reponse = $bdd->query("SELECT equipe_dom
									FROM $phpComite_feuilleA
									WHERE id=$matchJ6 AND equipe_dom = $equipe"); 
													while ($row = $reponse->fetch() )
														{ 
														$equipeDom=$row[0];  
														}
				if ($equipeDom >0)
					{
					$phpComite_feuilleAB =$phpComite_feuilleA;
					$choix = "equipe_dom";
					}
				else
					{
					$phpComite_feuilleAB =$phpComite_feuilleB;
					$choix = "equipe_ext";
					}




			// de N1 A  N 23
				for($poste=1; $poste<24; $poste++)
				{ 
				$reponse = $bdd->query("SELECT *
									FROM $phpComite_feuilleAB
									WHERE id=$matchJ6 AND $choix = $equipe"); 
													while ($donnees = $reponse->fetch() )
														{ 
															$tabIdJoueur[]=$donnees['N'.$poste];  
														}								
	if (isset ($tabIdJoueur[$poste-1])) ${"M".$matchJ6."N".$poste} = $tabIdJoueur[$poste-1];else ${"M".$matchJ6."N".$poste} ="";
				}
	}
// ------ journee7--------
unset ($equipeDom);
$tabIdJoueur = array();
	$journee7 = $journee1+6;

	for ($i =1; $i< 6 ; $i++)
	{
		$matchJ7 = ($journee7 *100) + $i;
			

// Requete pour determiner la table et l'argument a utiliser
			if (isset ($equipeDom)) $equipeDom = $equipeDom ;else $equipeDom=0;
			$reponse = $bdd->query("SELECT equipe_dom
									FROM $phpComite_feuilleA
									WHERE id=$matchJ7 AND equipe_dom = $equipe"); 
													while ($row = $reponse->fetch() )
														{ 
														$equipeDom=$row[0];  
														}
				if ($equipeDom >0)
					{
					$phpComite_feuilleAB =$phpComite_feuilleA;
					$choix = "equipe_dom";
					}
				else
					{
					$phpComite_feuilleAB =$phpComite_feuilleB;
					$choix = "equipe_ext";
					}




			// de N1 A  N 23
				for($poste=1; $poste<24; $poste++)
				{ 
				$reponse = $bdd->query("SELECT *
									FROM $phpComite_feuilleAB
									WHERE id=$matchJ7 AND $choix = $equipe"); 
													while ($donnees = $reponse->fetch() )
														{ 
															$tabIdJoueur[]=$donnees['N'.$poste];  
														}								
	if (isset ($tabIdJoueur[$poste-1])) ${"M".$matchJ7."N".$poste} = $tabIdJoueur[$poste-1];else ${"M".$matchJ7."N".$poste} ="";
				}
	}
// ------ journee8 --------
unset ($equipeDom);
$tabIdJoueur = array();
	$journee8 = $journee1+7;

	for ($i =1; $i< 6 ; $i++)
	{

		$matchJ8 = ($journee8 *100) + $i;
			
// Requete pour determiner la table et l'argument a utiliser
			if (isset ($equipeDom)) $equipeDom = $equipeDom ;else $equipeDom=0;
			$reponse = $bdd->query("SELECT equipe_dom
									FROM $phpComite_feuilleA
									WHERE id=$matchJ8 AND equipe_dom = $equipe"); 
													while ($row = $reponse->fetch() )
														{ 
														$equipeDom=$row[0];  
														}
				if ($equipeDom >0)
					{
					$phpComite_feuilleAB =$phpComite_feuilleA;
					$choix = "equipe_dom";
					}
				else
					{
					$phpComite_feuilleAB =$phpComite_feuilleB;
					$choix = "equipe_ext";
					}


			// de N1 A  N 23
				for($poste=1; $poste<24; $poste++)
				{ 
				$reponse = $bdd->query("SELECT *
									FROM $phpComite_feuilleAB
									WHERE id=$matchJ8 AND $choix = $equipe"); 
													while ($donnees = $reponse->fetch() )
														{ 
															$tabIdJoueur[]=$donnees['N'.$poste];  
														}								
	if (isset ($tabIdJoueur[$poste-1])) ${"M".$matchJ8."N".$poste} = $tabIdJoueur[$poste-1];else ${"M".$matchJ8."N".$poste} ="";
				}
	}
// ------ journee9--------
unset ($equipeDom);
$tabIdJoueur = array();
	$journee9 = $journee1+8;

	for ($i =1; $i< 6 ; $i++)
	{
		$matchJ9 = ($journee9 *100) + $i;
			

// Requete pour determiner la table et l'argument a utiliser
			if (isset ($equipeDom)) $equipeDom = $equipeDom ;else $equipeDom=0;
			$reponse = $bdd->query("SELECT equipe_dom
									FROM $phpComite_feuilleA
									WHERE id=$matchJ9 AND equipe_dom = $equipe"); 
													while ($row = $reponse->fetch() )
														{ 
														$equipeDom=$row[0];  
														}
				if ($equipeDom >0)
					{
					$phpComite_feuilleAB =$phpComite_feuilleA;
					$choix = "equipe_dom";
					}
				else
					{
					$phpComite_feuilleAB =$phpComite_feuilleB;
					$choix = "equipe_ext";
					}



			// de N1 A  N 23
				for($poste=1; $poste<24; $poste++)
				{ 
				$reponse = $bdd->query("SELECT *
									FROM $phpComite_feuilleAB
									WHERE id=$matchJ9 AND $choix = $equipe"); 
													while ($donnees = $reponse->fetch() )
														{ 
															$tabIdJoueur[]=$donnees['N'.$poste];  
														}								
	if (isset ($tabIdJoueur[$poste-1])) ${"M".$matchJ9."N".$poste} = $tabIdJoueur[$poste-1];else ${"M".$matchJ9."N".$poste} ="";
				}
	}
	
// ------ journee10 --------
unset ($equipeDom);
$tabIdJoueur = array();
	$journee10 = $journee1+9;

	for ($i =1; $i< 6 ; $i++)
	{
		$matchJ10 = ($journee10 *100) + $i;
		
		
		// Requete pour determiner la table et l'argument a utiliser
			if (isset ($equipeDom)) $equipeDom = $equipeDom ;else $equipeDom=0;
			$reponse = $bdd->query("SELECT equipe_dom
									FROM $phpComite_feuilleA
									WHERE id=$matchJ10 AND equipe_dom = $equipe"); 
													while ($row = $reponse->fetch() )
														{ 
														$equipeDom=$row[0];  
														}
				if ($equipeDom >0)
					{
					$phpComite_feuilleAB =$phpComite_feuilleA;
					$choix = "equipe_dom";
					}
				else
					{
					$phpComite_feuilleAB =$phpComite_feuilleB;
					$choix = "equipe_ext";
					}
		
		
				// de N1 A  N 23
				for($poste=1; $poste<24; $poste++)
				{ 
				$reponse = $bdd->query("SELECT *
									FROM $phpComite_feuilleAB
									WHERE id=$matchJ10 AND $choix = $equipe"); 
													while ($donnees = $reponse->fetch() )
														{ 
															$tabIdJoueur[]=$donnees['N'.$poste];  
														}								
	if (isset ($tabIdJoueur[$poste-1])) ${"M".$matchJ10."N".$poste} = $tabIdJoueur[$poste-1];else ${"M".$matchJ10."N".$poste} ="";
				}
	}	
	
// ------ journee11 --------
unset ($equipeDom);
$tabIdJoueur = array();
	$journee11 = $journee1+10;

	for ($i =1; $i< 6 ; $i++)
	{
		$matchJ11 = ($journee11 *100) + $i;
		
		
		// Requete pour determiner la table et l'argument a utiliser
			if (isset ($equipeDom)) $equipeDom = $equipeDom ;else $equipeDom=0;
			$reponse = $bdd->query("SELECT equipe_dom
									FROM $phpComite_feuilleA
									WHERE id=$matchJ11 AND equipe_dom = $equipe"); 
													while ($row = $reponse->fetch() )
														{ 
														$equipeDom=$row[0];  
														}
				if ($equipeDom >0)
					{
					$phpComite_feuilleAB =$phpComite_feuilleA;
					$choix = "equipe_dom";
					}
				else
					{
					$phpComite_feuilleAB =$phpComite_feuilleB;
					$choix = "equipe_ext";
					}
		
				// de N1 A  N 23
				for($poste=1; $poste<24; $poste++)
				{ 
				$reponse = $bdd->query("SELECT *
									FROM $phpComite_feuilleAB
									WHERE id=$matchJ11 AND $choix = $equipe"); 
													while ($donnees = $reponse->fetch() )
														{ 
															$tabIdJoueur[]=$donnees['N'.$poste];  
														}								
	if (isset ($tabIdJoueur[$poste-1])) ${"M".$matchJ11."N".$poste} = $tabIdJoueur[$poste-1];else ${"M".$matchJ11."N".$poste} ="";
				}
	}	
// ------ journee12 --------
unset ($equipeDom);
$tabIdJoueur = array();
	$journee12 = $journee1+11;

	for ($i =1; $i< 6 ; $i++)
	{
		$matchJ12 = ($journee12 *100) + $i;
		
		
		// Requete pour determiner la table et l'argument a utiliser
			if (isset ($equipeDom)) $equipeDom = $equipeDom ;else $equipeDom=0;
			$reponse = $bdd->query("SELECT equipe_dom
									FROM $phpComite_feuilleA
									WHERE id=$matchJ12 AND equipe_dom = $equipe"); 
													while ($row = $reponse->fetch() )
														{ 
														$equipeDom=$row[0];  
														}
				if ($equipeDom >0)
					{
					$phpComite_feuilleAB =$phpComite_feuilleA;
					$choix = "equipe_dom";
					}
				else
					{
					$phpComite_feuilleAB =$phpComite_feuilleB;
					$choix = "equipe_ext";
					}
		
				// de N1 A  N 23
				for($poste=1; $poste<24; $poste++)
				{ 
				$reponse = $bdd->query("SELECT *
									FROM $phpComite_feuilleAB
									WHERE id=$matchJ12 AND $choix = $equipe"); 
													while ($donnees = $reponse->fetch() )
														{ 
															$tabIdJoueur[]=$donnees['N'.$poste];  
														}								
	if (isset ($tabIdJoueur[$poste-1])) ${"M".$matchJ12."N".$poste} = $tabIdJoueur[$poste-1];else ${"M".$matchJ12."N".$poste} ="";
				}
	}	
// ------ journee13 --------
unset ($equipeDom);
$tabIdJoueur = array();
	$journee13 = $journee1+12;

	for ($i =1; $i< 6 ; $i++)
	{
		$matchJ13 = ($journee13 *100) + $i;
		
		
		// Requete pour determiner la table et l'argument a utiliser
			if (isset ($equipeDom)) $equipeDom = $equipeDom ;else $equipeDom=0;
			$reponse = $bdd->query("SELECT equipe_dom
									FROM $phpComite_feuilleA
									WHERE id=$matchJ13 AND equipe_dom = $equipe"); 
													while ($row = $reponse->fetch() )
														{ 
														$equipeDom=$row[0];  
														}
				if ($equipeDom >0)
					{
					$phpComite_feuilleAB =$phpComite_feuilleA;
					$choix = "equipe_dom";
					}
				else
					{
					$phpComite_feuilleAB =$phpComite_feuilleB;
					$choix = "equipe_ext";
					}
		
				// de N1 A  N 23
				for($poste=1; $poste<24; $poste++)
				{ 
				$reponse = $bdd->query("SELECT *
									FROM $phpComite_feuilleAB
									WHERE id=$matchJ13 AND $choix = $equipe"); 
													while ($donnees = $reponse->fetch() )
														{ 
															$tabIdJoueur[]=$donnees['N'.$poste];  
														}								
	if (isset ($tabIdJoueur[$poste-1])) ${"M".$matchJ13."N".$poste} = $tabIdJoueur[$poste-1];else ${"M".$matchJ13."N".$poste} ="";
				}
	}
// ------ journee14 --------
unset ($equipeDom);
$tabIdJoueur = array();
	$journee14 = $journee1+13;

	for ($i =1; $i< 6 ; $i++)
	{
		$matchJ14 = ($journee14 *100) + $i;
		
		
		// Requete pour determiner la table et l'argument a utiliser
			if (isset ($equipeDom)) $equipeDom = $equipeDom ;else $equipeDom=0;
			$reponse = $bdd->query("SELECT equipe_dom
									FROM $phpComite_feuilleA
									WHERE id=$matchJ14 AND equipe_dom = $equipe"); 
													while ($row = $reponse->fetch() )
														{ 
														$equipeDom=$row[0];  
														}
				if ($equipeDom >0)
					{
					$phpComite_feuilleAB =$phpComite_feuilleA;
					$choix = "equipe_dom";
					}
				else
					{
					$phpComite_feuilleAB =$phpComite_feuilleB;
					$choix = "equipe_ext";
					}
		
				// de N1 A  N 23
				for($poste=1; $poste<24; $poste++)
				{ 
				$reponse = $bdd->query("SELECT *
									FROM $phpComite_feuilleAB
									WHERE id=$matchJ14 AND $choix = $equipe"); 
													while ($donnees = $reponse->fetch() )
														{ 
															$tabIdJoueur[]=$donnees['N'.$poste];  
														}								
	if (isset ($tabIdJoueur[$poste-1])) ${"M".$matchJ14."N".$poste} = $tabIdJoueur[$poste-1];else ${"M".$matchJ14."N".$poste} ="";
				}
	}

// ------ journee15 --------
unset ($equipeDom);
$tabIdJoueur = array();
	$journee15 = $journee1+14;

	for ($i =1; $i< 6 ; $i++)
	{
		$matchJ15 = ($journee15 *100) + $i;
		
		
		
		// Requete pour determiner la table et l'argument a utiliser
			if (isset ($equipeDom)) $equipeDom = $equipeDom ;else $equipeDom=0;
			$reponse = $bdd->query("SELECT equipe_dom
									FROM $phpComite_feuilleA
									WHERE id=$matchJ15 AND equipe_dom = $equipe"); 
													while ($row = $reponse->fetch() )
														{ 
														$equipeDom=$row[0];  
														}
				if ($equipeDom >0)
					{
					$phpComite_feuilleAB =$phpComite_feuilleA;
					$choix = "equipe_dom";
					}
				else
					{
					$phpComite_feuilleAB =$phpComite_feuilleB;
					$choix = "equipe_ext";
					}
				// de N1 A  N 23
				for($poste=1; $poste<24; $poste++)
				{ 
				$reponse = $bdd->query("SELECT *
									FROM $phpComite_feuilleAB
									WHERE id=$matchJ15 AND $choix = $equipe"); 
													while ($donnees = $reponse->fetch() )
														{ 
															$tabIdJoueur[]=$donnees['N'.$poste];  
														}								
	if (isset ($tabIdJoueur[$poste-1])) ${"M".$matchJ15."N".$poste} = $tabIdJoueur[$poste-1];else ${"M".$matchJ15."N".$poste} ="";
				}
	}

// ------ journee16 --------
unset ($equipeDom);
$tabIdJoueur = array();
	$journee16 = $journee1+15;

	for ($i =1; $i< 6 ; $i++)
	{
		$matchJ16 = ($journee16 *100) + $i;
		
		
		// Requete pour determiner la table et l'argument a utiliser
			if (isset ($equipeDom)) $equipeDom = $equipeDom ;else $equipeDom=0;
			$reponse = $bdd->query("SELECT equipe_dom
									FROM $phpComite_feuilleA
									WHERE id=$matchJ16 AND equipe_dom = $equipe"); 
													while ($row = $reponse->fetch() )
														{ 
														$equipeDom=$row[0];  
														}
				if ($equipeDom >0)
					{
					$phpComite_feuilleAB =$phpComite_feuilleA;
					$choix = "equipe_dom";
					}
				else
					{
					$phpComite_feuilleAB =$phpComite_feuilleB;
					$choix = "equipe_ext";
					}
				// de N1 A  N 23
				for($poste=1; $poste<24; $poste++)
				{ 
				$reponse = $bdd->query("SELECT *
									FROM $phpComite_feuilleAB
									WHERE id=$matchJ16 AND $choix = $equipe"); 
													while ($donnees = $reponse->fetch() )
														{ 
															$tabIdJoueur[]=$donnees['N'.$poste];  
														}								
	if (isset ($tabIdJoueur[$poste-1])) ${"M".$matchJ16."N".$poste} = $tabIdJoueur[$poste-1];else ${"M".$matchJ16."N".$poste} ="";
				}
	}

// ------ journee17--------
unset ($equipeDom);
$tabIdJoueur = array();
	$journee17 = $journee1+16;

	for ($i =1; $i< 6 ; $i++)
	{
		$matchJ17 = ($journee17 *100) + $i;
		
		// Requete pour determiner la table et l'argument a utiliser
			if (isset ($equipeDom)) $equipeDom = $equipeDom ;else $equipeDom=0;
			$reponse = $bdd->query("SELECT equipe_dom
									FROM $phpComite_feuilleA
									WHERE id=$matchJ17 AND $choix = $equipe"); 
													while ($row = $reponse->fetch() )
														{ 
														$equipeDom=$row[0];  
														}
				if ($equipeDom >0)
					{
					$phpComite_feuilleAB =$phpComite_feuilleA;
					$choix = "equipe_dom";
					}
				else
					{
					$phpComite_feuilleAB =$phpComite_feuilleB;
					$choix = "equipe_ext";
					}
				// de N1 A  N 23
				for($poste=1; $poste<24; $poste++)
				{ 
				$reponse = $bdd->query("SELECT *
									FROM $phpComite_feuilleAB
									WHERE id=$matchJ17 AND $choix = $equipe"); 
													while ($donnees = $reponse->fetch() )
														{ 
															$tabIdJoueur[]=$donnees['N'.$poste];  
														}								
	if (isset ($tabIdJoueur[$poste-1])) ${"M".$matchJ17."N".$poste} = $tabIdJoueur[$poste-1];else ${"M".$matchJ17."N".$poste} ="";
				}
	}

// ------ journee18 --------
unset ($equipeDom);
$tabIdJoueur = array();
	$journee18 = $journee1+17;

	for ($i =1; $i< 6 ; $i++)
	{
		$matchJ18 = ($journee18 *100) + $i;
		
		
		// Requete pour determiner la table et l'argument a utiliser
			if (isset ($equipeDom)) $equipeDom = $equipeDom ;else $equipeDom=0;
			$reponse = $bdd->query("SELECT equipe_dom
									FROM $phpComite_feuilleA
									WHERE id=$matchJ18 AND equipe_dom = $equipe"); 
													while ($row = $reponse->fetch() )
														{ 
														$equipeDom=$row[0];  
														}
				if ($equipeDom >0)
					{
					$phpComite_feuilleAB =$phpComite_feuilleA;
					$choix = "equipe_dom";
					}
				else
					{
					$phpComite_feuilleAB =$phpComite_feuilleB;
					$choix = "equipe_ext";
					}
				// de N1 A  N 23
				for($poste=1; $poste<24; $poste++)
				{ 
				$reponse = $bdd->query("SELECT *
									FROM $phpComite_feuilleAB
									WHERE id=$matchJ18 AND $choix = $equipe"); 
													while ($donnees = $reponse->fetch() )
														{ 
															$tabIdJoueur[]=$donnees['N'.$poste];  
														}								
	if (isset ($tabIdJoueur[$poste-1])) ${"M".$matchJ18."N".$poste} = $tabIdJoueur[$poste-1];else ${"M".$matchJ18."N".$poste} ="";
				}
	}
	
/*

echo "<br />";
echo "j1N1 : ".$M1301710102N1;
echo "<br />";
echo "j1N2 : ".$M1301710102N2;
echo "<br />";
echo "j1N3 : ".$M1301710102N3;
echo "<br />";
echo "j1N4 : ".$M1301710102N4;
echo "<br />";
echo "j1N5 : ".$M1301710102N5;

echo "<br />";
echo "<br />";
echo "j2N1 ".$M1301710202N1;echo "<br />";
echo "j2N2 ".$M1301710202N2;echo "<br />";
echo "j2N3 ".$M1301710202N3;echo "<br />";
echo "j2N4 ".$M1301710202N4;echo "<br />";
echo "j2N5 ".$M1301710202N5;echo "<br />";
echo "<br />";
echo "<br />";
echo "j3N1 ".$M1301710302N1;echo "<br />";
echo "j3N2 ".$M1301710302N2;echo "<br />";
echo "j3N2 ".$M1301710302N3;echo "<br />";
echo "j3N2 ".$M1301710302N4;echo "<br />";
echo "j3N2 ".$M1301710302N5;echo "<br />";
echo "<br />";

*/


?>




<!------
------>
<table width="" border="1" height="113">
  <tr> 
    <td width="15%" height="20">&nbsp;</td>
    <td class="cellule" width="3%" height="20"> 
      J1 
    <td class="cellule" width="3%" height="20"> 
      J2
    </td>
    <td class="cellule" width="3%" height="20"> 
     J3
    </td>
    <td class="cellule" width="3%" height="20"> 
      J4
    </td>
    <td class="cellule" width="2%" height="20"> 
      J5
    </td>
    <td class="cellule" width="2%" height="20"> 
     J6
    </td>
    <td class="cellule" width="2%" height="20"> 
      J7
    </td>
    <td class="cellule" width="2%" height="20"> 
     J8
    </td>
    <td class="cellule" width="2%" height="20"> 
     J9
    </td>
    <td class="cellule" width="2%" height="20"> 
     J10
    </td>
    <td class="cellule" width="2%" height="20"> 
     J11
    </td>
    <td class="cellule" width="2%" height="20"> 
      J12
    </td>
    <td class="cellule" width="2%" height="20"> 
      J13
    </td>
    <td class="cellule" width="2%" height="20"> 
      J14
    </td>
    <td class="cellule" width="2%" height="20"> 
     J15
    </td>
    <td class="cellule" width="2%" height="20"> 
      J16
    </td>
    <td class="cellule" width="2%" height="20"> 
     J17
    </td>
    <td class="cellule" width="2%" height="20"> 
      J18
    </td>
    <td class="cellule" width="5%" height="20">Totaux</td>
  </tr>
  <?php 
  	for ($i=1; $i < $effectifJoueurs; $i++)
	{
		
	?>
  <tr> 
    <td width="15%"> 
		<div class="listeJoueurs">
      <!-- premiÃ¨re colonne -->
      <?php 
			//liste de tous les licenciÃ©s
			//echo ${"tabNom".$i}.' '.${"tabPrenom".$i}.' '.${"tabId_perso".$i}; 
			  echo ${"tabNom".$i}.' '.${"tabPrenom".$i}; ?>
			  </div>
    </td>
    <td class="cellule" width="3%"> 
      <!-- deuxieme colonne : journée 1-->
      <?php 
				for ($poste=1; $poste<24; $poste++)
			{		
				if ( (${"M".$match."N".$poste}) == ${"tabId_perso".$i}) 
					{
						
						if ($poste<16)
							{
							//var_dump(${"M".$match."N".$poste});  echo "<br>";
							//var_dump(${"tabId_perso".$i});
							?>
      <id class="equipe1Titu"> 
      <?php
							}
							else
							{
							?>
      <id class="equipe1Rempla"> 
      <?php
							}
							?>
      <?php
								echo "N".$poste; 
								for ($j=1; $j<15; $j++) {
								if (${"M".$match."N".$poste} == ${"tabId_perso".$i} ) ${"j".$j}= 1;else ${"j".$j}=0;
								}
							?>
      </id> 
      <?php	
					}
				else
					{
					echo "";
					}
			}
			?>
     
    </td>
    <td class="cellule" width="3%"> 
      <!-- troisiem colonne : journée 2 -->
      <?php 
				for ($poste=1; $poste<24; $poste++)
			{		
				if ( (${"M".$matchJ2."N".$poste}) == ${"tabId_perso".$i}) 
					{
					if ($poste<16)
							{
							?>
      <id class="equipe1Titu"> 
      <?php
							}
							else
							{
							?>
      <id class="equipe1Rempla"> 
      <?php
							}
							?>
      <?php
								echo "N".$poste;
							?>
      </id> 
      <?php
					}
				else
					{
					echo "";
					}
			}
			?>
     
    </td>
    <td class="cellule"  width="3%"> 
      <!-- QUATRIEME colonne : journée 3-->
      <?php 
				for ($poste=1; $poste<24; $poste++)
			{		
				if ( (${"M".$matchJ3."N".$poste}) == ${"tabId_perso".$i}) 
					{
					if ($poste<16)
							{
							?>
      <id class="equipe1Titu"> 
      <?php
							}
							else
							{
							?>
      <id class="equipe1Rempla"> 
      <?php
							}
							?>
      <?php
								echo "N".$poste;
							?>
      </id> 
      <?php
					}
				else
					{
					echo "";
					}
			}
			?>
     
    </td>
    <td class="cellule" width="3%"> 
      <!-- QUATRIEME colonne : journée 4-->
      <?php 
				for ($poste=1; $poste<24; $poste++)
			{		
				if ( (${"M".$matchJ4."N".$poste}) == ${"tabId_perso".$i}) 
					{
					if ($poste<16)
							{
							?>
      <id class="equipe1Titu"> 
      <?php
							}
							else
							{
							?>
      <id class="equipe1Rempla"> 
      <?php
							}
							?>
      <?php
								echo "N".$poste;
							?>
      </id> 
      <?php
					}
				else
					{
					echo "";
					}
			}
			?>
      
    </td>
    <td class="cellule" width="2%"> 
      <!-- QUATRIEME colonne : journée 5-->
      <?php 
				for ($poste=1; $poste<24; $poste++)
			{		
				if ( (${"M".$matchJ5."N".$poste}) == ${"tabId_perso".$i}) 
					{
					if ($poste<16)
							{
							?>
      <id class="equipe1Titu"> 
      <?php
							}
							else
							{
							?>
      <id class="equipe1Rempla"> 
      <?php
							}
							?>
      <?php
								echo "N".$poste;
							?>
      </id> 
      <?php
					}
				else
					{
					echo "";
					}
			}
			?>
      
    </td>
    <td class="cellule" width="2%"> 
      <!-- QUATRIEME colonne : journée 6-->
      <?php 
				for ($poste=1; $poste<24; $poste++)
			{		
				if ( (${"M".$matchJ6."N".$poste}) == ${"tabId_perso".$i}) 
					{
					if ($poste<16)
							{
							?>
      <id class="equipe1Titu"> 
      <?php
							}
							else
							{
							?>
      <id class="equipe1Rempla"> 
      <?php
							}
							?>
      <?php
								echo "N".$poste;
							?>
      </id> 
      <?php
					}
				else
					{
					echo "";
					}
			}
			?>
     
    </td>
    <td class="cellule" width="2%"> 
      <!-- QUATRIEME colonne : journée 7-->
      <?php 
				for ($poste=1; $poste<24; $poste++)
			{		
				if ( (${"M".$matchJ7."N".$poste}) == ${"tabId_perso".$i}) 
					{
					if ($poste<16)
							{
							?>
      <id class="equipe1Titu"> 
      <?php
							}
							else
							{
							?>
      <id class="equipe1Rempla"> 
      <?php
							}
							?>
      <?php
								echo "N".$poste;
							?>
      </id> 
      <?php
					}
				else
					{
					echo "";
					}
			}
			?>
      
    </td>
    <td class="cellule" width="2%"> 
      <!-- QUATRIEME colonne : journée 8-->
      <?php 
				for ($poste=1; $poste<24; $poste++)
			{		
				if ( (${"M".$matchJ8."N".$poste}) == ${"tabId_perso".$i}) 
					{
					if ($poste<16)
							{
							?>
      <id class="equipe1Titu"> 
      <?php
							}
							else
							{
							?>
      <id class="equipe1Rempla"> 
      <?php
							}
							?>
      <?php
								echo "N".$poste;
							?>
      </id> 
      <?php
					}
				else
					{
					echo "";
					}
			}
			?>
      
    </td>
    <td class="cellule" width="2%"> 
      <!-- QUATRIEME colonne : journée 9-->
      <?php 
				for ($poste=1; $poste<24; $poste++)
			{		
				if ( (${"M".$matchJ9."N".$poste}) == ${"tabId_perso".$i}) 
					{
					if ($poste<16)
							{
							?>
      <id class="equipe1Titu"> 
      <?php
							}
							else
							{
							?>
      <id class="equipe1Rempla"> 
      <?php
							}
							?>
      <?php
								echo "N".$poste;
							?>
      </id> 
      <?php
					}
				else
					{
					echo "";
					}
			}
			?>
     
    </td>
    <td class="cellule" width="2%"> 
      <!-- QUATRIEME colonne : journée 10-->
      <?php 
				for ($poste=1; $poste<24; $poste++)
			{		
				if ( (${"M".$matchJ10."N".$poste}) == ${"tabId_perso".$i}) 
					{
					if ($poste<16)
							{
							?>
      <id class="equipe1Titu"> 
      <?php
							}
							else
							{
							?>
      <id class="equipe1Rempla"> 
      <?php
							}
							?>
      <?php
								echo "N".$poste;
							?>
      </id> 
      <?php
					}
				else
					{
					echo "";
					}
			}
			?>
      
    </td>
    <td class="cellule" width="2%"> 
      <!-- QUATRIEME colonne : journée 11-->
      <?php 
				for ($poste=1; $poste<24; $poste++)
			{		
				if ( (${"M".$matchJ11."N".$poste}) == ${"tabId_perso".$i}) 
					{
					if ($poste<16)
							{
							?>
      <id class="equipe1Titu"> 
      <?php
							}
							else
							{
							?>
      <id class="equipe1Rempla"> 
      <?php
							}
							?>
      <?php
								echo "N".$poste;
							?>
      </id> 
      <?php
					}
				else
					{
					echo "";
					}
			}
			?>
      
    </td>
    <td class="cellule" width="2%"> 
      <!-- QUATRIEME colonne : journée 12-->
      <?php 
				for ($poste=1; $poste<24; $poste++)
			{		
				if ( (${"M".$matchJ14."N".$poste}) == ${"tabId_perso".$i}) 
					{
					if ($poste<16)
							{
							?>
      <id class="equipe1Titu"> 
      <?php
							}
							else
							{
							?>
      <id class="equipe1Rempla"> 
      <?php
							}
							?>
      <?php
								echo "N".$poste;
							?>
      </id> 
      <?php
					}
				else
					{
					echo "";
					}
			}
			?>
     
    </td>
    <td class="cellule" width="2%"> 
      <!-- QUATRIEME colonne : journée 13-->
      <?php 
				for ($poste=1; $poste<24; $poste++)
			{		
				if ( (${"M".$matchJ13."N".$poste}) == ${"tabId_perso".$i}) 
					{
					if ($poste<16)
							{
							?>
      <id class="equipe1Titu"> 
      <?php
							}
							else
							{
							?>
      <id class="equipe1Rempla"> 
      <?php
							}
							?>
      <?php
								echo "N".$poste;
							?>
      </id> 
      <?php
					}
				else
					{
					echo "";
					}
			}
			?>
      
    </td>
    <td class="cellule" width="2%"> 
      <!-- QUATRIEME colonne : journée 14-->
      <?php 
				for ($poste=1; $poste<24; $poste++)
			{		
				if ( (${"M".$matchJ14."N".$poste}) == ${"tabId_perso".$i}) 
					{
					if ($poste<16)
							{
							?>
      <id class="equipe1Titu"> 
      <?php
							}
							else
							{
							?>
      <id class="equipe1Rempla"> 
      <?php
							}
							?>
      <?php
								echo "N".$poste;
							?>
      </id> 
      <?php
					}
				else
					{
					echo "";
					}
			}
			?>
    
    </td>
    <td class="cellule" idth="2%"> 
      <!-- QUATRIEME colonne : journée 15-->
      <?php 
				for ($poste=1; $poste<24; $poste++)
			{		
				if ( (${"M".$matchJ15."N".$poste}) == ${"tabId_perso".$i}) 
					{
					if ($poste<16)
							{
							?>
      <id class="equipe1Titu"> 
      <?php
							}
							else
							{
							?>
      <id class="equipe1Rempla"> 
      <?php
							}
							?>
      <?php
								echo "N".$poste;
							?>
      </id> 
      <?php
					}
				else
					{
					echo "";
					}
			}
			?>
     
    </td>
    <td class="cellule" width="2%"> 
      <!-- QUATRIEME colonne : journée 16-->
      <?php 
				for ($poste=1; $poste<24; $poste++)
			{		
				if ( (${"M".$matchJ16."N".$poste}) == ${"tabId_perso".$i}) 
					{
					if ($poste<16)
							{
							?>
      <id class="equipe1Titu"> 
      <?php
							}
							else
							{
							?>
      <id class="equipe1Rempla"> 
      <?php
							}
							?>
      <?php
								echo "N".$poste;
							?>
      </id> 
      <?php
					}
				else
					{
					echo "";
					}
			}
			?>
      
    </td>
    <td class="cellule" width="2%"> 
      <!-- QUATRIEME colonne : journée 17-->
      <?php 
				for ($poste=1; $poste<24; $poste++)
			{		
				if ( (${"M".$matchJ17."N".$poste}) == ${"tabId_perso".$i}) 
					{
					if ($poste<16)
							{
							?>
      <id class="equipe1Titu"> 
      <?php
							}
							else
							{
							?>
      <id class="equipe1Rempla"> 
      <?php
							}
							?>
      <?php
								echo "N".$poste;
							?>
      </id> 
      <?php
					}
				else
					{
					echo "";
					}
			}
			?>
      
    </td>
    <td class="cellule" width="2%"> 
      <!-- QUATRIEME colonne : journée 18-->
      <?php 
				for ($poste=1; $poste<24; $poste++)
			{		
				if ( (${"M".$matchJ18."N".$poste}) == ${"tabId_perso".$i}) 
					{
					if ($poste<16)
							{
							?>
      <id class="equipe1Titu"> 
      <?php
							}
							else
							{
							?>
      <id class="equipe1Rempla"> 
      <?php
							}
							?>
      <?php
								echo "N".$poste;
							?>
      </id> 
      <?php
					}
				else
					{
					echo "";
					}
			}
			?>
    
    </td>
    <td class="cellule" width="5%">
	<?php //echo ${"tabId_perso".$i}; 
	$idJoueur= ${"tabId_perso".$i}; 
	//echo "idJoueur : ".$idJoueur;
	//echo "-".$j1;
	nbreDeMatch($comite, $equipe, $idJoueur, $bdd);
	echo "- ";
	//echo $numero1;
	if ($numero1==$idJoueur)
	{
	$nbreMatch= $nbreMatch +1;
	echo $nbreMatch;
	}
	
	?>
	</td>
    <?php
			
	}	
					
	?>
  </tr>
  <tr> 
    <td width="15%"> 
      <!-- premiÃ¨re Colonne -->
      Totaux </td>
    <td class="cellule" width="3%">&nbsp; </td>
    <td class="cellule" width="3%">&nbsp; </td>
    <td class="cellule" width="3%">&nbsp; </td>
    <td class="cellule" width="3%">&nbsp; </td>
    <td class="cellule" width="2%">&nbsp; </td>
    <td class="cellule" width="2%">&nbsp; </td>
    <td class="cellule" width="2%">&nbsp;</td>
    <td class="cellule" width="2%">&nbsp; </td>
    <td class="cellule" width="2%">&nbsp; </td>
    <td class="cellule" width="2%">&nbsp; </td>
    <td class="cellule" width="2%">&nbsp; </td>
    <td class="cellule" width="2%">&nbsp; </td>
    <td class="cellule" width="2%">&nbsp; </td>
    <td class="cellule" width="2%">&nbsp; </td>
    <td class="cellule" width="2%">&nbsp; </td>
    <td class="cellule" width="2%">&nbsp; </td>
    <td class="cellule" width="2%">&nbsp; </td>
    <td class="cellule" width="2%">&nbsp; </td>
    <td class="cellule" width="5%">&nbsp;</td>
</table>
</body>
</html>