<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="stat.css">
</head>
<?php
//if ($connect == "connection2")
require   "../../../connect/connection2.php";
//else
//require   "../../../connect/connection3.php";
$comite = "ab";
$equipe = 2029076;
$code_match1 = 279;
$code_match2 =280;
require '../fonctions.php';
nom_joueur ($comite, $equipe, $bdd);



$tabIdJoueur = array();
for ($match= 279; $match < 282; $match++)
{
// de N1 à N 23
	for($poste=1; $poste<24; $poste++)
	{ 
	
	
	$reponse = $bdd->query("SELECT *
						FROM phpab_feuilleB
						WHERE id=$match AND (equipe_ext =$equipe  or equipe_dom =$equipe)
						ORDER BY id"); 
										while ($donnees = $reponse->fetch() )
											{ 
											
											$tabIdJoueur[]=$donnees['N'.$poste];  
											}
											//echo "N".$poste." : ".$tabIdJoueur[$poste-1];echo "<br />";
	}
}



//echo $N1;

echo $tabIdJoueur[0];echo "<br />";
echo $tabIdJoueur[1];echo "<br />";
echo $tabIdJoueur[2];echo "<br />";
echo $tabIdJoueur[3];echo "<br />";
echo $tabIdJoueur[4];echo "<br />";
echo $tabIdJoueur[5];echo "<br />";
echo "////////////";echo "<br />";
//compo journee 1
for ($match=1; $match<3; $match++)
	{
	
		
		for ($poste=1; $poste<24; $poste++)
			{
			${"J".$match}.${"N".$poste} = $tabIdJoueur[$poste-1];
			echo ${"J".$match}.${"N".$poste};echo "<br />";
			
			
			
			//echo "J".$match".N".$poste." :".${"J".$match}.${"N".$poste};echo "<br />";
			}


	}


echo "////////////";echo "<br />";
for ($poste=1; $poste<24; $poste++)

{
${"J1N".$poste} = $tabIdJoueur[$poste-1];
//echo "J1N".$poste." :".${"J1N".$poste};echo "<br />";
}


echo "////////////";echo "<br />";

//compo journee 2
for ($poste=1, $i=23; $poste<24, $i<46; $poste++, $i++)

{
${"J2N".$poste} = $tabIdJoueur[$i];
//echo "J2N".$poste." :".${"J2N".$poste};echo "<br />";
}
echo "////////////";echo "<br />";

//compo journee 3
for ($poste=1, $i=46; $poste<23, $i<69; $poste++, $i++)

{
${"J3N".$poste} = $tabIdJoueur[$i];
//echo "J3N".$poste." :".${"J3N".$poste};echo "<br />";
}

echo  $J1N1;echo "<br />";
echo  $J1N2;echo "<br />";

?>
<body bgcolor="#FFFFFF" text="#000000">
<table width="96%" border="1" height="113">
   <tr> 
    	<td>
		<!-- première Colonne -->
		</td>
		<?php 
		
  		for ($journee=1; $journee<19; $journee++)
		{
		?>
			<td>
			<!-- deuxième colonne -->
			<?php echo $journee; ?>
			</td>
		<?php
		}
		?>
		
			<td>
			Totaux
			</td>
  </tr>
  
  
  
	<?php 
  	for ($i=1; $i < 55; $i++)
	{
	?>
  <tr> 
  
		
    	<td>
		<!-- première colonne -->
		<?php 
		//liste de tous les licenciés
		echo ${"tabNom".$i}.' '.${"tabPrenom".$i}.' '.${"tabId_perso".$i}; ?>
		</td>
		<?php 
		for ($journee=1; $journee<19; $journee++)
		{
		?>
		<td class="cellule">
				<?php 
				for ($poste=1; $poste<23; $poste++)
					{
					if (${"J1N".$poste} == ${"tabId_perso".$i} and $journee==1)  if ($poste>0)
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
					if (${"J2N".$poste} == ${"tabId_perso".$i} and $journee==2)  echo "N".$poste;
					if (${"J3N".$poste} == ${"tabId_perso".$i} and $journee==3)  echo "N".$poste; 					
					}
				
				?>
		</td>
		<?php
		}
		?>
		<td>
		somme de la ligne
		</td>
		
	<?php
		}
		?>
		
		
  </tr>
		<td>
		<!-- première Colonne -->
		Totaux
		</td>
		<?php 
		
  		for ($journee=1; $journee<19; $journee++)
		{
		?>
			<td>
			
			
			</td>
		<?php
		}
		?>
		
			<td>
			
			</td>
   <tr>
  	
   </tr>
</table>
</body>
</html>
