<h5>
<?php 
if ($id < 170)
	{
	 echo $division; 
	}
else
	{
	echo "Comit&eacute; " .''.$comiteEntier.''." : ".''.$division; 
	}
?>
</h5>
<table width="600" >
  <tr > 
    <td > 
      <h3>Equipe I </h3>
    
      <?php require ("maquette.php") ; ?>
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
		?>
      <?php require ("maquette.php") ; ?>
    </td>
  </tr>
</table>
<p>&nbsp;</p>
