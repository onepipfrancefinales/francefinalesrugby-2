
<h5>
<?php 
if ($id < 170)
	{
	 echo $division; 
	}
else
	{
	echo "Ligue " .''.$comiteEntier.''." : ".''.$division; 
	}
?>
</h5>

<p> 
  <?php 
  $champ=$id;
  require ("../../resultats/maquetteUnique.php") ; 
  echo "<br />";
  echo "<br />";
  require ("../../resultats/journeeSuivante.php") ; 
  
  ?>
</p>


