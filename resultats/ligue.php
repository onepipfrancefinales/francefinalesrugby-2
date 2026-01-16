<?php
echo "<br/>";


?>
<?php
require ("connection.php") ;
 ?>
<?php $terr_annee =("terr_".''.$saison);?>
   <?php //echo $terr_annee;?>
<?php

$reponse = mysql_query("SELECT * 
						FROM bdcomite 
						WHERE sigle='$sigle' "); 
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
<h1>Ligue   <?php echo $donnees['nom'];?> </h1>


<?php 

{print("<img src=\"http://francefinalesrugby.franceserv.com/images/comites/$sigle.jpg\" border=\"0\" target=_top>");}
?>



<br/><br/><br/>
<p class="texteGras">Président : </p>

<p class="texte">
<?php echo $donnees['president'];?><br />
 
  <?php echo $donnees['batiment'];?>
  <br />
<?php echo $donnees['adresse'];?><br />
<?php echo $donnees['CP'].' '. $donnees['ville'];?><br />
 </p>
<br>
<br>
<p class="texteGras">Contacts </p>
<p class="texte"> 
<b>Tél :</b>   <?php echo $donnees['tel']; ?>
  <br />
  <b>Fax :</b> 
  <?php echo $donnees['fax']; ?>
  <br />
 


<?php
  }
?>
<br/>

  <b> Site Internet :</b> 
  
<?php
$query = "	SELECT bdcomite.nom, sigle, site, contact 
			FROM bdcomite 
			WHERE bdcomite.sigle='$sigle'";
				$result = mysql_query($query);
				while($row = mysql_fetch_array($result))
							{			  
							echo "</b> <a href=\"$row[2]\" target=_blank >$row[2]</a>";
							echo "<br>";?>
							 <b>courriel :</b> 
							<?php
							echo "</b> <a href=\"$row[3]\">$row[3]</a>";
							echo "<br>"; 
							}
 
?>
</p> 
<?php
$reponse = mysql_query("SELECT * 
						FROM bdcomite 
						WHERE sigle='$sigle' "); 
							while ($donnees = mysql_fetch_array($reponse) )
							{ 
							?>
							  <br/>
							  <br/>
  
  
							 <hr /> 
							<p align="center"> 
							  <?php
								
							   // include("pub2.php");
								echo"<br/>";
								?>
							  
							<hr />
							<h1> Présentation du comité :</h1>
							<p class="texte">
							Le comité  se compose  des <?php echo $donnees['nbre_dep'];?> départements  suivants :
							<br />
							<?php
							echo $donnees['dep1'].'<br/>'. $donnees['dep2'].'<br/>'.$donnees['dep3'].'<br/>'.$donnees['dep4'].'<br/>'.$donnees['dep5'].'<br/>'. $donnees['dep6'].' '.$donnees['dep7'].' '.$donnees['dep8'].' '.$donnees['dep9'].' '. $donnees['dep10'].' '.$donnees['dep11'].' '.$donnees['dep12'];
							?>
							</P>
							<?php
							
							echo"<br/>";
							echo "----------------------------------------------------------";
							echo"<br/>";
							?>
							
							<p class="texte">
							  Quelques chiffres :
							  </p>
							
							<?php 
							 $nb_equipe_tt=mysql_query("SELECT SUM(Nbre) 
														FROM bdsaisons 
														WHERE siglecomite='$sigle'"); 
							 $nb_equipe_tt=mysql_fetch_array($nb_equipe_tt);
							// echo "$nb_equipe_tt[0]"; 
							?>
							<p class="texte18">
							<?php
							
							
							echo 
							"<strong> Nbre de clubs : </strong>".' '.$nb_equipe_tt[0].'<br/><br/>'
							.'<strong> Effectif sénior : </strong>'.' '.$donnees['nbre_senior'].'<br/>'
							.'<strong> Effectif Féminin : </strong>'.' '.$donnees['nbre_feminine'].'<br/>'
							.'<strong> Effectif Jeune : </strong>'.' '.$donnees['nbre_jeune'].'<br/>'
							.'<strong> Effectif dirigeant : </strong>'.' '.$donnees['nbre_dirigeant'].'<br/><br/>';
							
							}
							?>
</p>

<?php 
 $nb_equipe_pro=mysql_query("	SELECT SUM(Nbre) 
 								FROM bdsaisons 
								WHERE siglecomite='$sigle' and($terr_annee= 'Top 14'or $terr_annee= 'Pro D2')");
 $nb_equipe_pro=mysql_fetch_array($nb_equipe_pro);
// echo "$nb_equipe_pro[0]"; 
?>
<?php 
 $nb_equipe_fed1=mysql_query("SELECT SUM(Nbre) from bdsaisons where $terr_annee= 'Federale 1' and siglecomite='$sigle' and type = 'masc'"); 
 $nb_equipe_fed1=mysql_fetch_array($nb_equipe_fed1);
// echo "$nb_equipe_fed1[0]"; 
?>
<?php 
 $nb_equipe_fed2=mysql_query("SELECT SUM(Nbre) from bdsaisons where $terr_annee= 'Federale 2' and siglecomite='$sigle' and type = 'masc'"); 
 $nb_equipe_fed2=mysql_fetch_array($nb_equipe_fed2);
 //echo "$nb_equipe_fed2[0]"; 
?>
<?php 
 $nb_equipe_fed3=mysql_query("SELECT SUM(Nbre) from bdsaisons where $terr_annee= 'Federale 3' and siglecomite='$sigle' and type = 'masc'"); 
 $nb_equipe_fed3=mysql_fetch_array($nb_equipe_fed3);
 //echo "$nb_equipe_fed3[0]"; 
?>
<?php 
 $nb_equipe_fem=mysql_query("SELECT SUM(Nbre) from bdsaisons where  siglecomite='$sigle' and type = 'fem'"); 
 $nb_equipe_fem=mysql_fetch_array($nb_equipe_fem);
 //echo "$nb_equipe_fem[0]"; 
?>

<?php 
 $nb_equipe_terr=$nb_equipe_tt[0]-( $nb_equipe_fem[0]+$nb_equipe_fed3[0]+$nb_equipe_fed2[0]+$nb_equipe_fed1[0]+$nb_equipe_pro[0]);
?>

<p class="texte18">
<?php 
echo
"<strong>Nbre de clubs professionnels :</strong> ".' '.$nb_equipe_pro[0].'<br/>'
.'<strong> Nbre de clubs en fédérale 1 :</strong>'.' '.$nb_equipe_fed1[0].'<br/>'
.'<strong> Nbre de clubs en fédérale 2 :</strong>'.' '.$nb_equipe_fed2[0].'<br/>'
.'<strong> Nbre de clubs en fédérale 3 :</strong>'.' '.$nb_equipe_fed3[0].'<br/>'
.'<strong> Nbre de clubs dans les compétitions territoriales : </strong>'.' '. $nb_equipe_terr.'<br/>'.'<br/>'

.'<strong> Nbre de clubs féminins: </strong>'.' '.$nb_equipe_fem[0].'<strong> dont </strong>'.'  '.$donnees['fem_elite'].' en élite'.'<br/><br/>';
?>
</p>

<br/>
<hr />
<br/>


<h1>Palmarès Sélections territoriales</h1>
  

<br>
<br>
<hr />

<p align="center"> 
  <?php    //include("pub2.php");
    echo"<br/>";
	?>
  <font color="#FF0000"> <br>
  _______________________________________________________</font> </p>
<br>

<br>
<h1>Palmarès national </h1>
<h3> (Les dix derniers titres du comité)</h3>


<p class="texte18">
<?php

$reponse = mysql_query("SELECT saison,championnat, division, champion 
						FROM bdequipe1 
						WHERE comite1='$sigle'and titre='Champion' and  championnat='de France' 
						ORDER BY saison DESC limit 0,10"); 
									while ($donnees = mysql_fetch_array($reponse) )
									{ ?>
										<?php echo $donnees['saison'].' Champion '. $donnees['championnat'].' '.$donnees['division'].' : <strong> '.$donnees['champion'].'</strong>' ; ?>
										<?php
										 echo "<br />";
									} 
?>

<?php   echo "<br />"; ?>
</p>

 <p class="lien">      
	  <?php

echo "<a href=page_palm_comite.php?variable_1=$sigle > Tous les champions nationaux du comite </a> ";
?>
   
</p>

<br />
<hr />
<br />

<h1>Palmarès Territorial 
    <?php  $saison1=$saison-1;  ?>
   <?php echo "$saison1";  ?> <?php// echo "$saison";  ?></h1>


 

<p class="texte18">
<?php

$reponse = mysql_query("SELECT champion, championnat, division 
						FROM bdequipe1 
						WHERE comite1='$sigle' and titre='Champion' and rang <'225' and rang >'165' 
										and saison='$saison1' and rang2='1' 
										and categorie='A'
						ORDER BY rang "); 

								while ($donnees = mysql_fetch_array($reponse) )
											{ 
												?>
												Champion 
												<?php echo $donnees['championnat'];  ?> <?php echo $donnees['division'];  ?>
												: <strong> 
												<?php echo $donnees['champion']; ?>
												</strong> 
												<?php
												 echo "<br/>";
											 }
 
?>
<strong> 
<?php
echo "<br/>";
echo "Equipe II";
echo "<br/>";
?>
</strong> 

<?php

 


$reponse = mysql_query("SELECT champion, championnat, division
						FROM bdequipe2 
						WHERE comite1='$sigle'and titre='Champion' and saison='$saison1' and categorie='B' 
						ORDER BY rang "); 
echo"<br />";
 

		while ($donnees = mysql_fetch_array($reponse) )
				{ 
					?>
					Champion 
					<?php echo $donnees['championnat'];  ?> <?php echo $donnees['division'];  ?>
					: <strong> 
					<?php echo $donnees['champion']; ?>
					</strong> 
					<?php
					 echo "<br/>";
				 } 
?>
</p>
<?php
echo "<br/>";
?>
 
 <p class="lien">     <?php
echo "<a href=palm_terr2tableau.php?variable_1=$sigle target=_blank> Tous les champions territoriaux du comite </a> ";
?>
      </p> 
<p align="center"><br>
  <font color="#FF0000"><br>
  <hr /></font> <br>
  <br>
  <?php  //  include("pub4.php");
    ?>
  <br>
<font color="#FF0000">_______________________________________________________</font> 
<p>&nbsp;</p>
<h1>Clubs du comité</h1>
<br />
 
<h3>Clubs professionnels :</h3>
  
<p class="afficheEquipe"> 

  <?php
	$query = "	SELECT bdsaisons.id, bdclubs.nom_1
				FROM bdsaisons, bdclubs 
				WHERE bdsaisons.code_bdsaison=bdclubs.code and bdsaisons.siglecomite='$sigle' and ($terr_annee ='Top 14' or $terr_annee ='Pro D2')";
	$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         		{                 
                  
				  
				  //echo "<img src=\"$row[2]\">";
				  $codeEquipe=$row[0];
				  echo "<img src=http://francefinalesrugby.franceserv.com/images/blasons25_25/$codeEquipe.gif>";
				  
				 
	echo "<a href=\"http://francefinalesrugby.franceserv.com/pageclub00.php?champion=$codeEquipe\">$row[1]</a>";
				//  echo "<a href=\"$row[3]\">$row[1]</a>";
      			  echo "<br />";
				}
	 ?>
</p>
<h3>Fédérale 1 :</h3> 
<p class="afficheEquipe">
  <?php $query = "	SELECT bdsaisons.id, bdclubs.nom_1
					FROM bdsaisons, bdclubs 
					WHERE bdsaisons.code_bdsaison=bdclubs.code and bdsaisons.siglecomite='$sigle' and ($terr_annee like 'Federale 1%'  OR $terr_annee like 'Fédérale%')";
						$result = mysql_query($query);
						 while($row = mysql_fetch_array($result))
								{                        
									//echo "<img src=\"$row[2]\">";
									 $codeEquipe=$row[0];
									echo "<img src=http://francefinalesrugby.franceserv.com/images/blasons25_25/$codeEquipe.gif>";
									echo "<a href=\"http://francefinalesrugby.franceserv.com/pageclub00.php?champion=$codeEquipe\">$row[1]</a>";
				//  echo "<a href=\"$row[3]\">$row[1]</a>";
									echo "<br>";
								}
			 ?>
</p>
<h3>Fédérale 2 :</h3> 
<p class="afficheEquipe"> 
	<?php $query = "	SELECT bdsaisons.id, bdclubs.nom_1
						FROM bdsaisons, bdclubs 
						WHERE bdsaisons.code_bdsaison=bdclubs.code and bdsaisons.siglecomite='$sigle' and ($terr_annee='Federale 2' OR $terr_annee='Fédérale 2') ";
							$result = mysql_query($query);
							while($row = mysql_fetch_array($result))
								{                        
								//	echo "<img src=\"$row[2]\">";
									 $codeEquipe=$row[0];
									echo "<img src=http://francefinalesrugby.franceserv.com/images/blasons25_25/$codeEquipe.gif>";
									echo "<a href=\"http://francefinalesrugby.franceserv.com/pageclub00.php?champion=$codeEquipe\">$row[1]</a>";
				//  echo "<a href=\"$row[3]\">$row[1]</a>";
									echo "<br>";
					 
								}
	 ?>
</p>

<h3>Fédérale 3 :</h3> 
<p class="afficheEquipe">

		<?php $query = "	SELECT bdsaisons.id, bdclubs.nom_1
							FROM bdsaisons, bdclubs 
							WHERE bdsaisons.code_bdsaison=bdclubs.code and bdsaisons.siglecomite='$sigle' and ($terr_annee='Federale 3' OR $terr_annee = 'Fédérale 3')";
		$result = mysql_query($query);
				 while($row = mysql_fetch_array($result))
					{                         
					//	echo "<img src=\"$row[2]\">";
						 $codeEquipe=$row[0];
						echo "<img src=http://francefinalesrugby.franceserv.com/images/blasons25_25/$codeEquipe.gif>";
						echo "<a href=\"http://francefinalesrugby.franceserv.com/pageclub00.php?champion=$codeEquipe\">$row[1]</a>";
				//  echo "<a href=\"$row[3]\">$row[1]</a>";
						echo "<br>";
				
					 }
					 
	?>
</p>
<br />
<h3>
  <?php if ($sigle=="(BE)")
		echo "Honneur/ Promotion honneur / 1re Série :";
		else
		echo "Honneur/ Promotion honneur :" ?>
</h3> 
<p class="afficheEquipe">

		<?php $query = "SELECT bdsaisons.id, bdclubs.nom_1
						FROM bdsaisons, bdclubs 
						WHERE bdsaisons.code_bdsaison=bdclubs.code AND bdsaisons.siglecomite='$sigle' AND $terr_annee like 'Honneur%' ";
		$result = mysql_query($query);
				 while($row = mysql_fetch_array($result))
				 {                          
					//echo "<img src=\"$row[2]\">";
					 $codeEquipe=$row[0];
					echo "<img src=http://francefinalesrugby.franceserv.com/images/blasons25_25/$codeEquipe.gif>";
					echo "<a href=\"http://francefinalesrugby.franceserv.com/pageclub00.php?champion=$codeEquipe\">$row[1]</a>";
				//  echo "<a href=\"$row[3]\">$row[1]</a>";
					echo "<br>";
				 }		 
	 ?>
</p>
<br />
<br />
<h3>
  <?php if ($sigle=="(BE)")
		echo "";
		else
		echo "1re / 2me Série :"?>
</h3> 
 <p class="afficheEquipe">

		<?php $query = "SELECT bdsaisons.id, bdclubs.nom_1
						FROM bdsaisons, bdclubs 
						WHERE bdsaisons.code_bdsaison=bdclubs.code AND bdsaisons.siglecomite='$sigle' AND ($terr_annee like '1re%' OR $terr_annee like '2me%'  OR  $terr_annee like '%1re%')";
							$result = mysql_query($query);
							 while($row = mysql_fetch_array($result))
								 {                     	 
								//	echo "<img src=\"$row[2]\">";
									$codeEquipe=$row[0];
									echo "<img src=http://francefinalesrugby.franceserv.com/images/blasons25_25/$codeEquipe.gif>";
									echo "<a href=\"http://francefinalesrugby.franceserv.com/pageclub00.php?champion=$codeEquipe\">$row[1]</a>";
				//  echo "<a href=\"$row[3]\">$row[1]</a>";
									echo "<br />";
								 }
 		?>
</p>
<br />
<h3>
  <?php if ($sigle=="(BE)")
		echo "2me / 3me / 4me Série :";
		else
		echo "3me / 4me Série :"?>
</h3> 
<p class="afficheEquipe">
	<?php $query = "	SELECT bdsaisons.id, bdclubs.nom_1
						FROM bdsaisons, bdclubs 
						WHERE bdsaisons.code_bdsaison=bdclubs.code and bdsaisons.siglecomite='$sigle' and ($terr_annee like '%3me%' OR $terr_annee like '%4me%')";
							$result = mysql_query($query);
			 				while($row = mysql_fetch_array($result))
								{                 		 
								 //echo "<img src=\"$row[2]\">";
								  $codeEquipe=$row[0];
								echo "<img src=http://francefinalesrugby.franceserv.com/images/blasons25_25/$codeEquipe.gif>";
								echo "<a href=\"http://francefinalesrugby.franceserv.com/pageclub00.php?champion=$codeEquipe\">$row[1]</a>";
				//  echo "<a href=\"$row[3]\">$row[1]</a>";
								 echo "<br>";
								}
	mysql_close(); 	?>
</p>
<p>&nbsp;</p>
<h3>Equipes féminines :</h3>
<p class="afficheEquipe">
  <?php require ("connection4.php") ; ?>
  <?php
	$query = "	SELECT nom_1, url, logo
				FROM bdclubs 
				WHERE siglecomite='$sigle' ";
					$result = mysql_query($query);
         			while($row = mysql_fetch_array($result))
						{                 
						  echo "<img src=\"$row[1]\">";
						  echo "<a href=\"$row[2]\">$row[0]</a>";
						  echo "<br />";
						}
	 mysql_close();	?>
</p>
<p>&nbsp;</p>
<hr /><hr />
<h3>Clubs ayant fusionn&eacutes : </h3>
<p> 
  <?php require ("connection.php") ;?>
  <?php

//$query = "	SELECT bdsaisons.id, bdclubs.nom_1, bdclubs.url, bdclubs.logo, bdclubs.url, bdclubs.fusion 
//			FROM bdsaisons, bdclubs 
//			WHERE bdsaisons.code_bdsaison=bdclubs.code and bdsaisons.siglecomite='$sigle' and (terr_2014='F' )";
//				$result = mysql_query($query);
//				while($row = mysql_fetch_array($result))
//						{                                    
//						echo "<img src=\"$row[4]\">";
//						echo "  </b> <a href=\"$row[3]\">$row[1]</a>    ($row[5])";
//						echo "<br>";
//						}
//mysql_close(); ?>
  <?php
//echo "<br/>";
echo "<br/>";
?>
</p>
<h3>Clubs en sommeils : </h3>
<p>


<?php require ("connection.php") ; ?>
<?php
// $query = "	SELECT bdsaisons.id, bdclubs.nom_1, bdclubs.url, bdclubs.logo, bdclubs.url 
// 			FROM bdsaisons, bdclubs 
//			WHERE bdsaisons.code_bdsaison=bdclubs.code and bdsaisons.siglecomite='$sigle' and (terr_2014='S' )";
// $result = mysql_query($query);
//         while($row = mysql_fetch_array($result))
        		//	{                  
				//   echo "  </b> <a href=\"$row[3]\">$row[1]</a>,";
				//	}
//	mysql_close(); ?>
 
<?php
// echo "<br/>";
// echo "<br/>";
// echo "<br/>";
// echo "<br/>";
?>



<?php  // include("pub_carre.php");  ?>

	
