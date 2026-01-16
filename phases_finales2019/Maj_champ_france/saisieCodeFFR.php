<h2> 
  <?php
 echo "Mise &agrave; jour de la colonne type de la table bdpffrance";
 if (isset($_GET['annee'])) $annee = $_GET['annee']; else $annee ="-";
echo "<br>";

 ?>
</h2>
<h2>&nbsp;</h2>
 <p><a href="accueilMAJ.php">retour page accueil</a> </p>
<h2> <?php 

$bdpf="bdpffrance";
$anneeMoins1 = $annee - 1;
 echo  "Saison : ".$anneeMoins1." - ".$annee;?></h2>
 S&eacute;niors I 
  <?php
  require '../../connect/connexion1.php';
  for ($i=110; $i<=190; $i=$i+10)
  {
	  
  ?>
	<form name="insertion" action="validCodeFFR.php?division=<?php echo $i; ?>&annee=<?php echo $annee; ?>" method="POST">
  <?php 
  	$reponse = $bdd->query("SELECT type 
    					   	FROM $bdpf
							WHERE  id = '$i'" ) ;
								
	while ($donnees = $reponse->fetch() )
		{
		 $type = $donnees['type'];
 		} 
  	?>
  
  <p><?php echo $i ; ?>
    <input type="text" name="type" value="<?php echo $type ;?>">
    <input type="submit" value="modifier" name="submit">
    </p>  
   
	</form>
 
<?php  
}
?>
<hr />
S&eacute;niors 2 
<?php
  require '../../connect/connexion1.php';
  
  $tab = array (225);
  foreach ($tab as $i)
  {
  ?>
<form name="insertion" action="validCodeFFR.php?division=<?php echo $i; ?>&annee=<?php echo $annee; ?>" method="POST">
  <?php 
  	$reponse = $bdd->query("SELECT  type 
    					   		 FROM $bdpf
								WHERE  id = '$i'" ) ;			
  						while ($donnees = $reponse->fetch() )
									{
									$type = $donnees['type'];
 									}
  	?>

  <p><?php echo $i ; ?>
    <input type="text" name="type" value="<?php echo $type ;?>">
    <input type="submit" value="modifier" name="submit">
    </p>  
   
</form>
 <?php  
}

  
  
  
  for ($i=230; $i<=270; $i=$i+10)
  {
  ?>
<form name="insertion" action="validCodeFFR.php?division=<?php echo $i; ?>&annee=<?php echo $annee; ?>" method="POST">
  <?php 
  		$reponse = $bdd->query("SELECT  type 
    					   		 FROM $bdpf
								WHERE  id = '$i'" ) ;			
  						while ($donnees = $reponse->fetch() )
									{
									$type = $donnees['type'];
 									}
  	?>

  <p><?php echo $i ; ?>
    <input type="text" name="type" value="<?php echo $type ;?>">
    <input type="submit" value="modifier" name="submit">
    </p>  
   
	</form>
 
<?php  
}
?>
<hr />
F&eacute;minines 
<?php
  require '../../connect/connexion1.php';
  for ($i=280; $i<=295; $i=$i+5)
  {
  ?>
<form name="insertion" action="validCodeFFR.php?division=<?php echo $i; ?>&annee=<?php echo $annee; ?>" method="POST">
  <?php 
  		$reponse = $bdd->query("SELECT  type 
    					   		 FROM $bdpf
								WHERE  id = '$i'" ) ;			
  							while ($donnees = $reponse->fetch() )
									{
									$type = $donnees['type'];
 									}
  	?>

  <p><?php echo $i ; ?>
    <input type="text" name="type" value="<?php echo $type ;?>">
    <input type="submit" value="modifier" name="submit">
    </p>  
   
	</form>
 <?php  
}
?>
<hr />
Jeunes 
<?php
  require '../../connect/connexion1.php';
  $tab = array (320, 325, 330, 340, 360, 365, 370);
  foreach ($tab as $i)
  {
  ?>
<form name="insertion" action="validCodeFFR.php?division=<?php echo $i; ?>&annee=<?php echo $annee; ?>" method="POST">
  <?php 
  	$reponse = $bdd->query("SELECT  type 
    					   		 FROM $bdpf
								WHERE  id = '$i'" ) ;			
  						while ($donnees = $reponse->fetch() )
									{
									$type = $donnees['type'];
 									}
  	?>

  <p><?php echo $i ; ?>
    <input type="text" name="type" value="<?php echo $type ;?>">
    <input type="submit" value="modifier" name="submit">
    </p>  
   
</form>
 <?php  
}
?>
<hr />
Autres, barrages 
<?php
  require '../../connect/connexion1.php';
  $tab = array (7140,7150, 7160,7240, 7250,7260);
  foreach ($tab as $i)
  {
  ?>
<form name="insertion" action="validCodeFFR.php?division=<?php echo $i; ?>&annee=<?php echo $annee; ?>" method="POST">
  <?php 
  	$reponse = $bdd->query("SELECT  type 
    					   		 FROM $bdpf
								WHERE  id = '$i'" ) ;			
  		while ($donnees = $reponse->fetch() )
			{
			$type = $donnees['type'];
			}
  	?>

  <p><?php echo $i ; ?>
    <input type="text" name="type" value="<?php echo $type ;?>">
    <input type="submit" value="modifier" name="submit">
    </p>  
   
</form>
 <?php  
}
?>

<hr />
<p><a href="accueilMAJ.php">retour page accueil</a> </p>