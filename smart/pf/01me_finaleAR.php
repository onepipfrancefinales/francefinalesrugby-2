<table class="borderDouble width90PC marginAuto">
  <tr>
    <td class="titre">Finale<br>
   <div class= "pf_lieux"><?php echo $D1ME; ?></div> 
    </td>
  </tr>
</table>
<table class="borderNone width90PC marginAuto">
  <tr> 
    <td colspan="3"><?php echo $D1ME;?></td>
  </tr>
  <tr> 
    <td ></td>
    <td class="pts">Pts</td>
    <td class="Ga">GA</td>
  </tr>
  <tr> 
    <td class="coin5"><?php echo $clubA1001;?></td>
    <td class="quarts2pts"><?php echo $A1001Pts;?></td>
    <td class="coin5pts"><?php echo $A1001;?></td>
  </tr>
  <tr> 
    <td class="coin5"><?php echo $clubA1002;?></td>
    <td class="quarts2pts"><?php echo $A1002Pts;?></td>
    <td class="coin5pts"><?php echo $A1002;?></td>
  </tr>
</table>
<tr> 
    <td class="champion">Champion de France <?php echo $annee ;?></td>
  </tr>
</table>
	
<?php
	if (is_numeric($A1001)and is_numeric($A1002))
	{
	$idEquipeCourt = substr($idEquipe,2,7);echo "<br />";
  ?>
	<img class="height100 width100 marginAuto" src="../../images/blasons200_200/<?php echo $idEquipeCourt; ?>.gif" alt="blason du champion">
<?php	
}
	?>
	<p class="equipeChamp"><?php echo $champion;?></p>
