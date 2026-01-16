<br><br><br>

<?php
global $numero;
 
 for ($nbreDeChoix=1; $nbreDeChoix < 5 ; $nbreDeChoix++)
		 	{
				$numero= $nbreDeChoix;
				echo "choix n ".''.$numero;

				$comiteA= "comite".''.$numero;
				$divisionA= "division".''.$numero;
				$typeA= "type".''.$numero;
				$tailleA="taille".''.$numero;
				?>

				<?php
				 include ("../../connection5.php");
				 $query = "	SELECT p.$comiteA, p.$divisionA, p.$typeA, c.nom, d.division, p.$tailleA
							FROM personnel p
							INNER JOIN comite c ON c.phpcomite = p.$comiteA
							INNER JOIN divisions d ON d.id = p.$divisionA
							
							WHERE p.id=1  ";
								$result = mysql_query($query);
								while ($row = mysql_fetch_array($result))
										{ 
										$comite= $row[0];echo "-comite= ".''.$comite;
										$id= $row[1]; echo "-id= ".''.$id;
										$type=$row[2];echo "-type= ".''.$type;
										$comiteEntier=$row[3];echo "-comite= ".''.$comiteEntier;
										$division=$row[4];echo "-division= ".''.$division;
										$taille=$row[5];echo "-taille= ".''.$taille;					
										  ?>   
										 <?php // affichage champ Réserve ou non
												if ($type==2)
														{
														require ("typeDouble.php");
														}
													else
														{
														require ("typeSimple.php");
														}	
										}
			}			
echo $type;
?>

