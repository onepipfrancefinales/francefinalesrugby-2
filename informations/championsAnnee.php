<?php //$annee = $_POST['saison']; ?>
<?php require ("../connect/connexion1.php") ; 
// require ("../.saison.php") ; 
$annee = 2024;
 echo "Champions de France ".$annee;
?>
<p class="annee"><b>Equipes séniors</b></p> 
<p class="equipe"><br>
  <?php $reponse = $bdd->query("	SELECT division, champion, comite1
									FROM bdequipe1 
									WHERE saison='$annee' and titre='champion' and championnat='de France'and rang<225 order by rang"); 
										while ($donnees =  $reponse->fetch()  )
											{ 
												echo $donnees['division']." : ".  $donnees['champion']."  ". $donnees['comite1'];
												echo "<br/>";
											}
	?>
</p>

<br/>
<p class="annee"><b>Equipes Réserves</b><br>
</p> 
<p class="equipe"><br>
  <?php $reponse = $bdd->query("	SELECT division, champion, comite1 
									FROM bdequipe2 
									WHERE saison='$annee' and titre='champion' and championnat='de France' and rang<280 and rang>220 
									ORDER BY rang"); 
										while ($donnees = $reponse->fetch() )
											{ 
												echo $donnees['division']." : ".  $donnees['champion']."  ". $donnees['comite1'];
												echo "<br/>";
											 }
	?>
</p>
<br/>
<br/>
<p class="annee"><b>Equipes Féminines</b></p> 
<p class="equipe">
<br/>
  	<?php $reponse = $bdd->query("SELECT division, champion, comite1 
						FROM bdfem 
						WHERE saison='$annee'and titre='champion' and categorie='F' order by rang"); 
										while ($donnees =  $reponse->fetch() )
											{ 
												echo $donnees['division']." : ".  $donnees['champion']."  ". $donnees['comite1'];
												echo "<br/>";
											 }
	?>
</p>	
  <br/><br/>
 <p class="annee"><b>Reichels & Juniors</b></p> 
  <br/>
<p class="equipe"> 
	<?php $reponse = $bdd->query("	SELECT division, champion, comite1 
									FROM bdjeunes 
									WHERE saison='$annee' and titre='champion' and rang<360 and rang>300 order by rang"); // Requ�te SQL
										while ($donnees =  $reponse->fetch() )
											{ 
											echo $donnees['division']." : ".  $donnees['champion']."  ". $donnees['comite1'];
											echo "<br/>";
											 }

	?>
</p>
<br/><br/>
<p class="annee"><b>Cadets</b></p>  
  <br/>
<p class="equipe">  
	<?php $reponse = $bdd->query("	SELECT division, champion, comite1 
									FROM bdjeunes 
									WHERE saison='$annee' and titre='champion' and rang<380 and rang>=360 and rang2<380 and rang2>=360 order by rang"); // Requ�te SQL
											while ($donnees =  $reponse->fetch() )
														{ 
															echo $donnees['division']." : ".  $donnees['champion']."  ". $donnees['comite1'];
															echo "<br/>";	
															
														 }

	?>
</p>
  <br/><br/>

 




