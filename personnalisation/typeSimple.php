
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
<?php  
   $champ=$id;
	   
  AffichageLogos($id, $comite);
  echo "<br />";
	  echo "<br />";?>
<p> 
  <?php 
  
  require ("../resultats/maquetteUnique.php") ; 
  echo "<br />";
  echo "<br />";
  require ("../resultats/journeeSuivante.php") ; 
  
  ?>
</p>


