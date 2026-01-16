
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
?></h5>
  <?php  
   $champ=$id;
	   
  AffichageLogos($id, $comite);
  echo "<br />";
	  echo "<br />";?>

<table width="600" >
  <tr > 
    <td > 
      <h3>Equipe I </h3>
    
      <?php 
      echo "<br />";
	  echo "<br />";
	  require ("../resultats/maquette.php") ; 
	  echo "<br />";
	  echo "<br />";
	  require ("../resultats/journeeSuivante.php") ; 
		?>
    </td>
    <td > 
      <h3>Equipe II</h3>
      <?php 
		
		 if ($id < 180)
					{
					$ajustement=100;
					$id=$id + $ajustement;
					}
				else
			  		{
					$ajustement=9000;
					$id=$id + $ajustement ; 
					}
		
	  $champ=$id;
		
	  require ("../resultats/maquette.php") ; 
	  echo "<br />";
	  echo "<br />";
      require ("../resultats/journeeSuivante.php") ; 
	  ?>
    </td>
  </tr>
</table>
<p>&nbsp;</p>
