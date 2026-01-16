<?php 
 require ("../../connect/connexion5.php");
 //Nom du comité
	$reponse = $bdd->query(" SELECT nomLigue
							 FROM comite
							 WHERE comite='$comite'");
	
										while ($row = $reponse->fetch() )
											{ $ligueToutesLettres=$row[0];	}
								//echo $ligueToutesLettres;
								
//*************  Recherche de la Division  *********************
//$division3 = substr($division,3,6);
require ("../../connect/connexion1.php");


$reponse = $bdd->query("	SELECT division
								FROM bddivisions
								WHERE id= substr('$division' ,3,6) AND actif = 1");
									while ($row = $reponse->fetch() )
											{ $nomDivision2=$row[0]; }																			
?>
<table class="width95PC borderWidth1 marginAuto">
  <tr> 
     <td width= "5%" class="h22" height="20"><a href="../sommaire.php"><img class="width27 height20" src="../../images/smart/flecheGauche.jpg" ></a></td>
	<td  class="h22  width95PC" height="20"> France Finales Rugby </td>
    </td>
  </tr>
  <tr> 
    <td colspan="2" colspan="2" height="2" 
      class="titre backgroundWhite colorBlack"> Ligue  <?php echo $ligueToutesLettres ;?>
        <br>
		Phases finales <?php echo $annee;?>
		<br>
        <?php echo $nomDivision2;?> 
    </td>
  </tr>
</table>