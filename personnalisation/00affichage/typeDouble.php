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
<table width="600" >
  <tr > 
    <td > 
      <h3>Equipe I </h3>
    
      <?php 
//if ($comite=="phppro" or $comite =="phpf1" or $comite =="phpfed2" or $comite=="phpfed3NE" or $comite=="phpfed3GS" or $comite=="phpfem")
//require ("../../connect1/connection3.php");
//else
//require ("../../connect1/connection2.php");
	  $champ=$id;
	   include("../../resultats/fonctions.php");
      AffichageLogos($id, $comite);
	  require ("../../resultats/maquette.php") ; 
	  echo "<br />";
	  echo "<br />";
	  require ("../../resultats/journeeSuivante.php") ; 
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
//include("../../resultats/fonctions.php");
//AffichageLogos($id, $comite);
	  require ("../../resultats/maquette.php") ; 
	  echo "<br />";
	  echo "<br />";
      require ("../../resultats/journeeSuivante.php") ; 
	  ?>
    </td>
  </tr>
</table>
<p>&nbsp;</p>
