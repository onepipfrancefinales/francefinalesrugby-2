
<?php 
session_start ();
echo 'Votre login est '.$_SESSION['login'].' et votre Mdp '.$_SESSION['id'].'.'; 
echo $_SESSION['id'];
echo '<br />'; ?>

<table align="center" bgcolor="#99ccff" border="0" width="500">
  <tbody>
    <tr>
		  <td> 
		  </td>

		  <td>
			<p align="center">
			<a href="../affichage/pagePerso.php"><font color="#ff0000">ma page</font></a></p>
		  </td>

		  <td> 
			<a href="./logout.php">D&eacute;connection</a>
		 </td>
    </tr>
  </tbody>
</table>

<?php $nom=$_SESSION['login']; $mdp=$_SESSION['pwd']; $id=$_SESSION['id']; 
echo $nom; 
echo "<br />"; 
echo $mdp; 
echo "<br />"; 
echo $id; 
echo "<br />"; 
echo "------------------------"; ?>
<?php
//************ recuperation de la réponse    ************

 $reponse=$_GET['reponse']; 

 if ($reponse==1)
		{
			$comite=$_GET['comite']; 
			$division=$_GET['division'];
		
			?>
			
			<br /> 
			<?php echo "Réponse : ".''. $reponse; ?><br>
			<?php echo "comite : ".''. $comite; ?><br>
			<?php echo "division : ".''. $division; ?> <br>
			
			<?php //recuperation de la valeur $taille
			
			$tailleEnT = "T".''.$division;
			include ("../../connect1/connection5.php"); 
			
			$result =$bdd->query( " SELECT $tailleEnT
						FROM taille
						WHERE phpcomite='$comite'") ; 
			//$result = mysql_query($query); 
			while ($row = $result->fetch())
							{ 
							$taille=$row[0]; 
							}
			
			
			echo "taille : ".''. $taille; ?> <br>

			<?php //********** Détermination de la valeur de la variable $type ********** 

			$phpComiteDivisions = $comite.''."_divisions"; 
			echo $phpComiteDivisions; ?>
			
			<?php 
			if ($comite=="phpf1" OR	$comite=="phpfed2" OR  $comite=="phpfed3NE" OR $comite=="phpfed3GS" OR $comite=="phppro" OR $comite=="phpfem") 
					include ("../../connect1/connection3.php"); 
			else 
					include ("../../connect1/connection2.php"); ?>
			<?php 
			$result = $bdd->query(" 	SELECT id, nom 
						FROM $phpComiteDivisions 
						WHERE id = $division"); 
								//$result = mysql_query($query); 
								while ($row = $result->fetch())
										{ 
										$division=$row[0]; 
										$divisionEnLettres= $row[1]; 
										}
					
					
					?>


			<br>

			<?php 
			echo "---------------"; 
			echo "<br />";
			echo "Division : ".''.$divisionEnLettres; 
			echo "<br />"; 
			echo "Code de la division : ".''.$division; ?>
			<br>

			<br>

			<?php 
			$result =$bdd->query( " SELECT id, nom 
						FROM $phpComiteDivisions 
						WHERE id=($division + 100) OR (id=$division + 9000) "); 
			//$result = mysql_query($query); 
			while ($row = $result->fetch())
							{ 
							$division2=$row[0]; 
							echo $division2; 
							}
			?>
							<br>
		<?php 
							


						 if ($division2 > 0)
								{ 
								$type = 2;
								echo "type : ".''.$type;
								} 
							else 
								{ 
								$type = 1; 
								echo "type : ".''.$type;
								} 
		} 
 else
		{ 
		
		//echo "erreur";
		//header ('location: pageConnection.php');
		} 
		?>
<br>

<?php echo "------------------";?>
<?php //************** Ecriture dans la table **************** 


echo "<br />"; 
//require ("bdEffacer.php") ?>
<?php 
$id=$_SESSION['id']; 
global $id;
echo $id;echo $comite; 
echo "<br />"; 

 ?>
<?php //************ Lecture de la table  ******** 

include ("../../connect1/connection5.php"); 
 ?>
 
 <?php 
 $result = $bdd->query(" SELECT id, nom, mdp, prenom, 	comite1, division1, type1, taille1, 
												comite2, division2, type2, taille2, 
												comite3, division3, type3, taille3, 
												comite4, division4, type4, taille4, 
												comite5, division5, type5, taille5 
				FROM personnel WHERE id ='$id'"); 
				
//$result = mysql_query($query); 
while ($row = $result->fetch())
	{ 
	$id = $row[0]; 
	$nom = $row[1]; 
	$mdp = $row[2]; 
	$prenom = $row[3]; 
	$comite1 = $row[4];		$division1 = $row[5]; 	$type1 = $row[6]; 	$taille1 = $row[7]; 
	$comite2 = $row[8]; 	$division2 = $row[9]; 	$type2 = $row[10]; 	$taille2 = $row[11]; 
	$comite3 = $row[12]; 	$division3 = $row[13]; 	$type3 = $row[14]; 	$taille3 = $row[15]; 
	$comite4 = $row[16]; 	$division4 = $row[17]; 	$type4 = $row[18]; 	$taille4 = $row[19];
	$comite5 = $row[20]; 	$division5 = $row[21]; 	$type5 = $row[22]; 	$taille5 = $row[23]; 
	} 
	
echo $id.' '.$nom .' '.$mdp .' '.$prenom .' '.$comite1 .' '.$division1.' '.$type1.' '.$taille1 .' '.
											  $comite2 .' '.$division2.' '.$type2.' '.$taille2 .' '.
											  $comite3 .' '.$division3.' '.$type3.' '.$taille3 .' '.
											  $comite4 .' '.$division4.' '.$type4.' '.$taille4 .' '.
											  $comite5 .' '.$division5.' '.$type5.' '.$taille5; 
?> 
<br>
<?php 
echo "test de id :----:  ";echo $id; ?> 
<br>
<?php 
echo "test de comite :----:  ";echo $comite; ?> 
<br>
<?php echo "test de division :----:  ";echo $division;?> 
<br> 
<?php echo "test de type :----:  ";echo $type; ?> 
<br>

<br /><br />

<?php 
if ($comite1 == "php") 
		{ 
		$comite1 =$comite; 
		$division1 =$division; 
		$type1 =$type; 
		$taille1 =$taille;
		} 
 elseif ( $comite1 != "php" AND $comite2 == "php")
		 { 
		 $comite2 =$comite; 
		 $division2 =$division;
		 $type2 =$type; 
		 $taille2 =$taille; 
		 } 
 elseif ($comite1 != "php" AND $comite2 != "php" AND $comite3 == "php")
		{
		 $comite3 =$comite;
		 $division3 =$division;
		 $type3 =$type;
		 $taille3 =$taille;
		 }
elseif ($comite1 !="php" AND $comite2 != "php" AND $comite3 != "php" AND $comite4 == "php")
		 {
		 $comite4 =$comite;
		 $division4 =$division;
		 $type4 =$type;
		 $taille4 =$taille; 
		 }
elseif ($comite1 != "php" AND $comite2 != "php" AND $comite3 != "php" AND $comite4 != "php" AND $comite5 == "php")
		 { 
		 $comite5 =$comite;
		 $division5 =$division;
		 $type5 =$type;
		 $taille5 =$taille;
		 }
 else 
		{ 
		echo "vous n'avez plus d'espace disponible"; 
		} 
?>
<br><br><br>

<?php 																					
$bdd->exec( "UPDATE personnel 
		SET id='$id', nom='$nom', mdp='$mdp', prenom='$prenom',	comite1='$comite1' , division1='$division1' , type1='$type1' , taille1='$taille1',
																comite2='$comite2' , division2='$division2' , type2='$type2' , taille2='$taille2',
																comite3='$comite3' , division3='$division3' , type3='$type3' , taille3='$taille3', 
																comite4='$comite4' , division4='$division4' , type4='$type4' , taille4='$taille4', 
																comite5='$comite5' , division5='$division5' , type5='$type5' , taille5='$taille5' 
		WHERE id='$id' ") ; 
																				
																				
//$requete = mysql_query( $sql ) ; 
?>
<?php
echo "Relecture après modif de la base";
?><br>
<?php echo $id.' '.$nom .' '.$mdp .' '.$prenom .' '.$comite1 .' '.$division1.' '.$type1.' '.$taille1 .' '.
													$comite2 .' '.$division2.' '.$type2.' '.$taille2 .' '.
													$comite3 .' '.$division3.' '.$type3.' '.$taille3 .' '.
													$comite4 .' '.$division4.' '.$type4.' '.$taille4 .' '.
													$comite5 .' '.$division5.' '.$type5.' '.$taille5; 


header ('location: pageChoix.php#zone4'); 

//mysql_close();
?> 
</body>
</html>
