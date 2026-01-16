<?php
// On d�marre la session (ceci est indispensable dans toutes les pages de notre section membre)
session_start ();

// On r�cup�re nos variables de session
if (isset($_SESSION['login']) && isset($_SESSION['pwd']) && isset($_SESSION['id'])) {

	// On teste pour voir si nos variables ont bien �t� enregistr�es
	echo '<html>';
	echo '<head>';
	echo '<title>Page de notre section membre</title>';
	echo '</head>';

	echo '<body>';?>
<table width="500" border="0" bgcolor="#99CCFF" align="center">
  <tr>
   	 	<td>
			<?php
				echo 'Votre login est '.$_SESSION['login'].' et votre Mdp '.$_SESSION['id'].'.';
				echo $_SESSION['id'];
				echo '<br />';
			?>
		</td>
		<td>
	 		
      <p align="center"><a href="../affichage/pagePerso.php"><font color="#FF0000">ma 
        page</font></a></p>
		</td>
		
    <td> 
      <?php
				// On affiche un lien pour fermer notre session
				echo '<a href="./logout.php">D&eacute;connection</a>';
				}
				else {
					echo 'Les variables ne sont pas d�clar�es.';
				}
			?>
    </td>
  	</tr>
</table>

<?php

$nom=$_SESSION['login'];
$mdp=$_SESSION['pwd'];
$id=$_SESSION['id'];

echo $nom; echo "<br />";
echo $mdp; echo "<br />";
echo $id; echo "<br />";
echo "------------------------";
?>

<?php $reponse=$_POST['reponse'];
echo "<br />";
echo "choix : " .''.$reponse;
?>
<?php

if ($reponse==1)
	{
		$comite=$_GET['comite'];
		$division=$_GET['division'];
		
		
		echo "<br />";
		
		echo "comite : ".''. $comite; ?>
		  
		<br />
		<?php	echo "division : ".''. $division;	?>
		<br />
		<?php	echo "type : ".''. $type;	?>
		<br />
		<?php	echo "taille : ".''. $taille1; ?>
		<br />
		
		<?php //**********  D�termination de la valeur de la variable $type   **********
		
		$phpComiteDivisions = $comite.''."_divisions";
		echo $phpComiteDivisions;
		
//************** Choix de la base de donn�e**********		
		
		if ( $comite == "phpf1" OR $comite == "phpfed2" OR  $comite == "phpfed3NE" OR $comite == "phpfed3GS"  OR
			 $comite == "phpbr" OR $comite == "phpmpy"  OR  $comite == "phppl"     OR $comite == "phppro"     OR  $comite == "phppr")
				include ("../../connection3.php");
		elseif ($comite == "phpfem")
				include ("../../connection4.php");
		else
				include ("../../connection2.php");		
				
				
		$query = "	SELECT id, nom
					FROM $phpComiteDivisions
					WHERE id = $division";
					
						$result = mysql_query($query);
							while ($row = mysql_fetch_array($result))
									{ 
									$division=$row[0];
									$divisionEnLettres= $row[1];
									} ?>
						<br />		
						<?php
						echo "---------------";
						echo "<br />";
						echo "Division : ".''.$divisionEnLettres;
						echo "<br />";
						echo "Code de la division : ".''.$division;
						
						?>
				<br />	<br />
				<?php		
						$query = "	SELECT id, nom
									FROM $phpComiteDivisions
									where id=($division + 100) OR (id=$division + 9000) ";
										$result = mysql_query($query);
											while ($row = mysql_fetch_array($result))
													{ 
													$division2=$row[0]; echo $division2;
													//$comite= $row[1];
													//echo $comite; ?>
													<br />
											<?php	} 
											
					if ($division2 > 0)
						{
						$type = 2;
						}
					else
						{	
						$type = 1;	
						echo "type : ".''.$type;	
						}
			
		
		}
else
		{
			header ('location: http://francefinalesrugby.franceserv.com/personnalisation/admin/pageConnection.php');	
		}
		?>
				
				
				
				
				<br />		

<?php echo "------------------";?>	
<?php
//**************  Ecriture dans la table           ****************
echo "<br />";
//require ("bdEffacer.php")
?>
<?php


//$id=$_GET['id'];
//$comite=$_GET['comite'];
//echo $comite;
//echo "<br />";

//echo $id;
?>

<?php //************   Ecriture dans la table   ********

//include ("../../connection5.php");
mysql_connect("sql.franceserv.fr", "onepip-france", "Lavelan1969&"); 
mysql_select_db("onepip-france_db5"); 
?>
<?php
$query = "	SELECT id, nom, mdp, prenom, 	comite1, division1, type1, taille1,
											comite2, division2, type2, taille2,
											comite3, division3, type3, taille3,
											comite4, division4, type4, taille4,
											comite5, division5, type5, taille5
			FROM personnel
			WHERE id ='$id'";
			
				$result = mysql_query($query);
				while ($row = mysql_fetch_array($result))
					{ 
					$id			= $row[0];	
					$nom		= $row[1];
					$mdp		= $row[2];
					$prenom		= $row[3];
					
					$comite1	= $row[4];
					$division1	= $row[5];
					$type1		= $row[6];
					$taille1	= $row[7];
					
					$comite2	= $row[8];
					$division2	= $row[9];
					$type2		= $row[10];
					$taille2	= $row[11];
					
					$comite3	= $row[12];
					$division3	= $row[13];	
					$type3		= $row[14];
					$taille3	= $row[15];
					
					$comite4	= $row[16];
					$division4	= $row[17];
					$type4		= $row[18];
					$taille4	= $row[19];
					
					$comite5	= $row[20];
					$division5	= $row[21];
					$type5		= $row[22];
					$taille5	= $row[23];
					
					}
					
	echo $id.' '.$nom  .' '.$mdp  .' '.$prenom  .' '.$comite1  .' '.$division1.' '.$type1.' '.$taille1
												.' '.$comite2  .' '.$division2.' '.$type2.' '.$taille2
												.' '.$comite3  .' '.$division3.' '.$type3.' '.$taille3
												.' '.$comite4  .' '.$division4.' '.$type4.' '.$taille4
												.' '.$comite5  .' '.$division5.' '.$type5.' '.$taille5;				
?>
<br />
<?php $comite=$_GET['comite'];
echo $comite;    
if ($comite1 == "NULL")
	{
	$comite1	=$comite;
	$division1	=$division; 
	$type1		=$type;
	$taille1	=$taille;
	
	
	}
elseif ($comite1 !="NULL" AND $comite2 == "NULL")	
	{
	$comite2	=$comite;
	$division2	=$division; 
	$type2		=$type;
	$taille2	=$taille;
	}
elseif ($comite1 !="NULL" AND $comite2 != "NULL" AND $comite3 == "NULL")	
	{
	$comite3	=$comite;
	$division3	=$division; 
	$type3		=$type;
	$taille3	=$taille;
	}
elseif ($comite1 !="NULL" AND $comite2 != "NULL" AND $comite3 != "NULL" AND $comite4 == "NULL")	
	{
	$comite4	=$comite;
	$division4	=$division; 
	$type4		=$type;
	$taille4	=$taille;
	}
	
elseif ($comite1 !="NULL" AND $comite2 != "NULL" AND $comite3 != "NULL" AND $comite4 != "NULL" AND $comite5 == "NULL")	
	{
	$comite5	=$comite;
	$division5	=$division; 
	$type5		=$type;
	$taille5	=$taille;
	}
	
else
	{
	echo "vous n'avez plus d'espace disponible";
	}
	?>
	<br />
	<?php
echo $id.' '.$nom  .' '.$mdp  .' '.$prenom  .' '.$comite1  .' '.$division1.' '.$type1.' '.$taille1
											.' '.$comite2  .' '.$division2.' '.$type2.' '.$taille2
											.' '.$comite3  .' '.$division3.' '.$type3.' '.$taille3
											.' '.$comite4  .' '.$division4.' '.$type4.' '.$taille4
											.' '.$comite5  .' '.$division5.' '.$type5.' '.$taille5;	



 $sql = "	UPDATE personnel
 			SET id='$id',nom='$nom',mdp='$mdp',prenom='$prenom',comite1='$comite1' , division1='$division1' , type1='$type1' , taille1='$taille1',
																comite2='$comite2' , division2='$division2' , type2='$type2' , taille2='$taille2',
																comite3='$comite3' , division3='$division3' , type3='$type3' , taille3='$taille3',
																comite4='$comite4' , division4='$division4' , type4='$type4' , taille4='$taille4',
																comite5='$comite5' , division5='$division5' , type5='$type5' , taille5='$taille5'
			WHERE id='$id'";	
		
		


$requete = mysql_query( $sql )   ;
header ('location: http://francefinalesrugby.franceserv.com/personnalisation/admin/pageChoix.php#zone4');
 
  ?>















