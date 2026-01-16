<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<?php $doubleBase = $_GET['doubleBase'];?>
<?php $equipeDemandeuse = $_GET['equipe'];?>
<?php $comite = $_GET['comite'];?>
<?php $connect = $_GET['connect'];?>


<?php $equipeInvitee = $_POST['equipeInvitee'];?>
<?php $equipePositionA = $_POST['equipePositionA'];?>



<?php echo "doubleBase :";?><?php echo $doubleBase;?><?php echo "<br />";?>
<?php echo "demandeur :";?><?php echo $equipeDemandeuse;?><?php echo "<br />";?>
<?php echo "demandeur Comite : ".''.$comiteDemandeuse;?><?php echo "<br />";?>
<?php echo "connection : ".''.$connect?><?php echo "<br />";?>
<?php echo "<br />";?>

<?php echo "Equipe invitee : ".''.$equipeInvitee ?><?php echo "<br />";?>
<?php echo "positionA : ".''.$equipePositionA ?><?php echo "<br />";?>




<?php 
//****** Elements ajoutés pour le FM libre ********

mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); 
mysql_select_db("onepip-france-db1"); 


$reponse = mysql_query("	SELECT id 
							FROM bdclubs 
							WHERE idffr='$equipeInvitee'");  
								While ($donnees = mysql_fetch_array($reponse) )
									{ 
								  	$idEquipeInvitee = $donnees['id'];
									}
									
									
//******* l'equpe invite appartient telle a la meme ligue ?********


require ("../../../$connect.php") ;
$bdcomite_equipes="php".''.$comite.''."_equipes";

$reponse =  mysql_query (" SELECT id_champ
						   FROM $bdcomite_equipes
						   WHERE id='$idEquipeInvitee'");
								While ($donnees = mysql_fetch_array($reponse) )
									{ 
								  	$champEquipeInvitee = $donnees['id_champ'];
									}

echo "champ= ".''.$champEquipeInvitee;


if ($champEquipeInvitee > 0)

{

	$doubleBase=0;
	if ( $equipeInvitee == $equipePositionA )
			{
			$equipe = $equipeDemandeuse;
			$equipeA = $idEquipeInvitee;
			$equipeB = $equipeDemandeuse;
			}
		else
			{
			$equipe = $equipeDemandeuse;
			$equipeA = $equipeDemandeuse; 
			$equipeB = $idEquipeInvitee;
			}
	
		echo $equipe; echo "<br />";
		echo $equipeA; echo "<br />";
		echo $equipeB; echo "<br />";
	
	//***************************************************
	//***************************************************
	
	


	// **** Elements obligatoires ******
	$id_equipe = $_GET['id_equipe'];
	
	
	// ***** rechercher de l'id du match  ******
	$comite = $_GET['comite'];
	$connect = $_GET['connect'];

	require ("../../../$connect.php") ;
	
	$bdcomiteFeuilleA=("php".''.$comite.''."_feuilleA");
	$bdcomiteFeuilleB=("php".''.$comite.''."_feuilleB");
	
	$nb=mysql_query("	SELECT MAX(id) 
						FROM $bdcomiteFeuilleA");
						
					$idMax=mysql_fetch_array($nb);
	
	
	$idMax=$idMax[0];
	$code_match = $idMax +1;
	echo $idMax;
	echo $code_match;
	
	
	$sqlA="INSERT INTO $bdcomiteFeuilleA (id, equipe_dom, equipe_ext)
						VALUES ($code_match, $equipeA, $equipeB)";					
	mysql_query ($sqlA) or die ('Erreur SQL !'.$sqlA.'<br />'.mysql_error());
	
	
	$sqlB="INSERT INTO $bdcomiteFeuilleB (id, equipe_dom, equipe_ext )
						VALUES ($code_match, $equipeA, $equipeB)";				
	mysql_query ($sqlB) or die ('Erreur SQL !'.$sqlB.'<br />'.mysql_error());
	
	echo $code_match;
	
	echo $comite;
	echo $connect;
	?>
	
	
	<?php 
	// **** Elements optionnels ******
	$championnat = $_POST['championnat'];
	$code_div = $_GET['code_div'];
	$date = $_GET['date'];
	?>
	
	
	<?php
	// $fanionOuReserve=$equipeA ;
	$bdcomite=("php".''.$comite.''."_joueurs");?>




	
	<?php 
	$nb=mysql_query("	SELECT COUNT(photo) 
						FROM $bdcomite
						WHERE club=$equipe AND photo='1' AND comite ='1' "); 
								$nb=mysql_fetch_array($nb);


	$effectif=$nb[0];
	//echo $effectif;
	
	
	
	?>
	<?php// echo $code_match ;?>
	<?php //echo $fanionOuReserve ;?>
	<?php// echo $championnat;?>
	<?php// echo $equipe ;?>
	<?php //echo $equipeA ;?>
	<?php //echo $equipeB ;?>
	 <?php //echo $connect ;?>
	
	<?php //echo $comite ;?>


	
	<?php// echo $equipeA ;?>
	<?php// echo $equipeB ;?>
	<table width="100%" border="0">
	  <tr valign="top"> 
    <td valign="top" width="188"> 
      <?php include "../adminLicences/sommaire.php"; ?>
    </td>
    <td> 
     <?php
	 if ($effectif<=60)
	 	include ("select_joueur60.php"); 
	 elseif ($effectif<=80)
	 	include ("select_joueur80.php"); 
	 else
	   	include ("select_joueur.php"); 
	   ?>
    </td>
  	</tr>
	</table>
	
<?php
}
	
	
	else
		
	
{
	$doubleBase=1;
	echo "<br />";
	echo "club choisi n'apartient pas a la meme ligue";echo "<br />";
	echo "-------------";echo "<br />";
	echo "equipeinvitee : ".''.$equipeInvitee; echo "<br />";
	echo "code equipe invitee : ".''. $idEquipeInvitee;echo "<br />";
	
	// recherche  de l'equipe invitee a partir de son identifiant Ligue
	
	
	$identifiantLigue = substr($idEquipeInvitee,0,2);
	echo "code ligue equipe invitee : ".''.$identifiantLigue;echo "<br />";
	
	
	
	mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); 
	mysql_select_db("onepip-france_db5"); 
	
	$query = mysql_query (" SELECT comite
							FROM ligue
							WHERE	codeLigue = $identifiantLigue	");
	
							While ($donnees = mysql_fetch_array($query) )
									{ 
								  	$lettreLigueInvitee = $donnees['comite'];
									}
	
	echo "code lettre equipe invitee: ".''.$lettreLigueInvitee; echo "<br />";
	
// test de la présence de l'équipe invitee dans sa ligue

	$connectInvitee="connection2";
	
	
	
	mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); 
	mysql_select_db("onepip-france-db2");
	
	$bdcomite = "php".''.$lettreLigueInvitee.''."_equipes";
	echo "<br />";
	//echo $bdcomite;
	
	$query = mysql_query ("	SELECT id 
							FROM $bdcomite
							WHERE id = $idEquipeInvitee	");
	
					While ($donnees = mysql_fetch_array($query) )
									{ 
								  	$testIdEquipeInvitee = $donnees['id'];
									}
	
	
					if ($testIdEquipeInvitee>0)
					{
					echo "present dans cette ligue";echo "<br />";
					echo $testIdEquipeInvitee;echo "<br />";
					
					
					
					}
					else
					{
						
					echo "NON present dans cette ligue ".''.$comite;echo "<br />";	
					}
	
	echo "--------------"; echo "<br />";
	
	
	
	
	// TEST de la presence en fedEDERALE (1,	2, 3)
	
	
	$connectInvitee = "connection3";
	require ("../../../$connectInvitee.php") ;
	
	
			//test de la presence e fed3GS
			
	$comiteInvite = "fed3GS";
	$bdcomite_equipes="php".''.$comiteInvite.''."_equipes";
	
	$query=mysql_query ("	SELECT	id_champ
							FROM $bdcomite_equipes
							WHERE id = '$idEquipeInvitee'");
							
							while ($donnees =mysql_fetch_array($query))
									{
									$champEquipeInviteefed3GS = $donnees['id_champ'];	
									}
							
				if ($champEquipeInviteefed3GS > 0)
					{
					echo "le club invite evolue en LIGUE ";	echo $comiteInvite; echo "<br />";		
					$champEquipeInvitee=$champEquipeInviteefed3GS;
					
					if ( $equipeInvitee == $equipePositionA )
							{
							$equipe = $equipeDemandeuse;
							$equipeA = $idEquipeInvitee;
							$comiteA = $comiteInvite;
							$connectA = $connectInvitee;
							$equipeB = $equipeDemandeuse;
							$comiteB = $comite;
							$connectB = $connect;
							}
							else
							{
							$equipe = $equipeDemandeuse;
							$equipeA = $equipeDemandeuse; 
							$comiteA = $comite;
							$connectA = $connect;
							
							$equipeB = $idEquipeInvitee;
							$comiteB = $comiteInvite;
							$connectB = $connectInvitee;
							}
					}
				else
					{
					echo "NON present dans cette ligue ".''.$comiteInvite;echo "<br />";	
					}
							
		


//test de la presence e fed3NE
			
	$comiteInvite = "fed3NE";
	$bdcomite_equipes="php".''.$comiteInvite.''."_equipes";
	
	$query=mysql_query ("	SELECT	id_champ
							FROM $bdcomite_equipes
							WHERE id = '$idEquipeInvitee'");
							
							while ($donnees =mysql_fetch_array($query))
									{
									$champEquipeInviteefed3NE = $donnees['id_champ'];	
									}
							
				if ($champEquipeInviteefed3NE > 0)
					{
					echo "le club inivte evolue en LIGUE ";	echo $comiteInvite; echo "<br />";		
					$champEquipeInvitee=$champEquipeInviteefed3NE;
					
					if ( $equipeInvitee == $equipePositionA )
							{
							$equipe = $equipeDemandeuse;
							$equipeA = $idEquipeInvitee;
							$comiteA = $comiteInvite;
							$connectA = $connectInvitee;
							$equipeB = $equipeDemandeuse;
							$comiteB = $comite;
							$connectB = $connect;
							}
							else
							{
							$equipe = $equipeDemandeuse;
							$equipeA = $equipeDemandeuse; 
							$comiteA = $comite;
							$connectA = $connect;
							
							$equipeB = $idEquipeInvitee;
							$comiteB = $comiteInvite;
							$connectB = $connectInvitee;
							}
					}
				else
					{
					echo "NON present dans cette ligue ".''.$comiteInvite;echo "<br />";	
					}
					
					
					
		//test de la presence e fed2
			
	$comiteInvite = "fed2";
	$bdcomite_equipes="php".''.$comiteInvite.''."_equipes";
	
	$query=mysql_query ("	SELECT	id_champ
							FROM $bdcomite_equipes
							WHERE id = '$idEquipeInvitee'");
							
							while ($donnees =mysql_fetch_array($query))
									{
									$champEquipeInviteefed2 = $donnees['id_champ'];	
									}
							
				if ($champEquipeInviteefed2 > 0)
					{
					echo "le club inivte evolue en LIGUE ";	echo $comiteInvite; echo "<br />";		
					$champEquipeInvitee=$champEquipeInviteefed2;
					
					if ( $equipeInvitee == $equipePositionA )
							{
							$equipe = $equipeDemandeuse;
							$equipeA = $idEquipeInvitee;
							$comiteA = $comiteInvite;
							$connectA = $connectInvitee;
							$equipeB = $equipeDemandeuse;
							$comiteB = $comite;
							$connectB = $connect;
							}
							else
							{
							$equipe = $equipeDemandeuse;
							$equipeA = $equipeDemandeuse; 
							$comiteA = $comite;
							$connectA = $connect;
							
							$equipeB = $idEquipeInvitee;
							$comiteB = $comiteInvite;
							$connectB = $connectInvitee;
							}
					}
				else
					{
					echo "NON present dans cette ligue ".''.$comiteInvite;echo "<br />";	
					}			

//test de la presence e f1
			
	$comiteInvite = "f1";
	$bdcomite_equipes="php".''.$comiteInvite.''."_equipes";
	
	$query=mysql_query ("	SELECT	id_champ
							FROM $bdcomite_equipes
							WHERE id = '$idEquipeInvitee'");
							
							while ($donnees =mysql_fetch_array($query))
									{
									$champEquipeInviteef1 = $donnees['id_champ'];	
									}
							
				if ($champEquipeInviteef1 > 0)
					{
					echo "le club inivte evolue en LIGUE ";	echo $comiteInvite; echo "<br />";		
					$champEquipeInvitee=$champEquipeInviteef1;
					
					if ( $equipeInvitee == $equipePositionA )
							{
							$equipe = $equipeDemandeuse;
							$equipeA = $idEquipeInvitee;
							$comiteA = $comiteInvite;
							$connectA = $connectInvitee;
							$equipeB = $equipeDemandeuse;
							$comiteB = $comite;
							$connectB = $connect;
							}
							else
							{
							$equipe = $equipeDemandeuse;
							$equipeA = $equipeDemandeuse; 
							$comiteA = $comite;
							$connectA = $connect;
							
							$equipeB = $idEquipeInvitee;
							$comiteB = $comiteInvite;
							$connectB = $connectInvitee;
							}
					}
				else
					{
					echo "NON present dans cette ligue ".''.$comiteInvite;echo "<br />";	
					}			



		// TEST de la presence en LIGUE REGIONALES
	
	
	$connectInvitee = "connection2";
	require ("../../../$connectInvitee.php") ;
	
	
			//test de la presence eN ab
			
	$comiteInvite = "ab";
	$bdcomite_equipes="php".''.$comiteInvite.''."_equipes";
	
	$query=mysql_query ("	SELECT	id_champ
							FROM $bdcomite_equipes
							WHERE id = '$idEquipeInvitee'");
							
							while ($donnees =mysql_fetch_array($query))
									{
									$champEquipeInviteeab = $donnees['id_champ'];	
									}
							
				if ($champEquipeInviteeab > 0)
					{
					echo "le club inivte evolue en LIGUE ";	echo $comiteInvite; echo "<br />";		
					
					
					if ( $equipeInvitee == $equipePositionA )
							{
							$equipe = $equipeDemandeuse;
							$equipeA = $idEquipeInvitee;
							$comiteA = $comiteInvite;
							$connectA = $connectInvitee;
							$equipeB = $equipeDemandeuse;
							$comiteB = $comite;
							$connectB = $connect;
							}
							else
							{
							$equipe = $equipeDemandeuse;
							$equipeA = $equipeDemandeuse; 
							$comiteA = $comite;
							$connectA = $connect;
							
							$equipeB = $idEquipeInvitee;
							$comiteB = $comiteInvite;
							$connectB = $connectInvitee;
							}
					}
				else
					{
					echo "NON present dans cette ligue ".''.$comiteInvite;echo "<br />";	
					}
		
		
		
		
		
		
							
		echo "<br />";					
		echo "-------------";echo "<br />";
		
		echo "Partie A:";echo "<br />";
		echo "Equipe : ".''.$equipeA;echo "<br />";
		echo "comite : ".''.$comiteA;echo "<br />";
		echo "connection : ".''.$connectA;echo "<br />";echo "<br />";
		echo "Partie B:";echo "<br />";
		echo "Equipe : ".''.$equipeB;echo "<br />";
		echo "comite : ".''.$comiteB;echo "<br />";
		echo "connection : ".''.$connectB;echo "<br />";
		
		echo "-------------";echo "<br />";
		

	
	// ******** recherche de l'id du match  (code_match)*******

			// **Equipe A
			
			require ("../../../$connectA.php") ;
			
			$bdcomiteFeuilleAEquipeA = "php".''.$comiteA.''."_feuilleA";
			$bdcomiteFeuilleBEquipeA = "php".''.$comiteA.''."_feuilleB";
			
			
			$query = mysql_query ("SELECT MAX(id)
									FROM $bdcomiteFeuilleAEquipeA	");
									
									$idMaxA=mysql_fetch_array($query);
			
			$code_matchA = $idMaxA[0]+1;
			echo "codeA".''.$code_matchA;
			$doubleBase=1;echo "<br />";
			echo $doubleBase;
			// **Equipe B

			require ("../../../$connectB.php") ;
			
			$bdcomiteFeuilleAEquipeB = "php".''.$comiteB.''."_feuilleA";
			$bdcomiteFeuilleBEquipeB = "php".''.$comiteB.''."_feuilleB";
			
			$query = mysql_query ("SELECT MAX(id)
									FROM $bdcomiteFeuilleAEquipeB	");
									
									$idMaxB=mysql_fetch_array($query);
			$code_matchB = $idMaxB[0]+1;
			echo "codeB".''.$code_matchB;
			
				
				
				
				if ($code_matchA >= $code_matchB)
					$code_match = $code_matchA;
				else
					$code_match = $code_matchB;
				
				
					echo "retenu".''.$code_match;
			echo "------------";echo "<br />";

			echo $code_match;echo "<br />";
		
					
		// Création des tuples dans les deux bases de données

		//Base de données EquipeA
		
		require ("../../../$connectA.php") ;
		
		$sqlAEquipeA = "INSERT INTO $bdcomiteFeuilleAEquipeA (id, equipe_dom, equipe_ext, doubleBase, comiteInvite, connectInvitee)
						VALUES ('$code_match', '$equipeA', '$equipeB', '1',  '$comiteB', '$connectB' )";
		mysql_query ($sqlAEquipeA);
		
		$sqlBEquipeA = "INSERT INTO $bdcomiteFeuilleBEquipeA (id, equipe_dom, equipe_ext, doubleBase, comiteInvite, connectInvitee)
						VALUES ($code_match, $equipeA, $equipeB, '1', '$comiteB', '$connectB')";
		mysql_query ($sqlBEquipeA);
		
		//Base de données Equipe B
		
		require ("../../../$connectB.php") ;
					
		$sqlAEquipeB = "INSERT INTO $bdcomiteFeuilleAEquipeB (id, equipe_dom, equipe_ext, doubleBase, comiteInvite, connectInvitee)
						VALUES ($code_match, $equipeA, $equipeB, '1', '$comiteA', '$connectA')";
		mysql_query ($sqlAEquipeB);
		
		
		$sqlBEquipeB = "INSERT INTO $bdcomiteFeuilleBEquipeB (id, equipe_dom, equipe_ext, doubleBase, comiteInvite, connectInvitee)
						VALUES ($code_match, $equipeA, $equipeB, '1', '$comiteA', '$connectA')";
		mysql_query ($sqlBEquipeB);			
					
		?>
<tr valign="top"> 
    <td valign="top" width="188"> 
      <?php// include "../adminLicences/sommaire.php"; ?>
    </td>
    <td> 
     <?php
//	 if ($effectif<=60)
//	 	include ("select_joueur60.php"); 
//	 elseif ($effectif<=80)
//	 	include ("select_joueur80.php"); 
//	 else
//	   	include ("select_joueur.php"); 
	   
echo $doubleBase;		
}
?>

<meta http-equiv="refresh" content="0;URL=http://francefinalesrugby.franceserv.com/admin/feuilleMatch/connexion/page_liste_compet1.php?comite=<?php echo $comite; ?>&connect=<?php echo $connect; ?>&equipe=<?php echo $equipe; ?>&id_equipe=<?php echo $id_equipe; ?>">
 
</html>
