
<table  class="borderDouble width90PC marginAuto">
  <tr>
    <td class="titre">Finale<br>
   <div class= "pf_lieux"><?php echo $D1ME; ?></div> </td>
  </tr>
</table>
<br>
<table class="borderNone width90PC marginAuto">
  <tr> 
    <td colspan="2"></td>
    
  </tr>
  <tr> 
    <td class=<?php echo $cssEquipe; ?>><?php echo $clubA1001;?></td>
    <td class=<?php echo $cssScore; ?>><?php echo $A1001;?></td>
  </tr>
  <tr> 
    <td class=<?php echo $cssEquipe; ?>><?php echo $clubA1002;?></td>
    <td class=<?php echo $cssScore; ?>><?php echo $A1002;?></td>
  </tr>
</table>
<br>
<table   class="borderWidth1 width90PC marginAuto">
  <tr> 
    <td class="champion">Champion de France <?php echo $annee ;?>
  <br> <?php
  if ($champ == "280")  echo "Elite 1";
  else if ($champ == "285") echo "Elite 2";
  else if ($champ == "290") echo "Féminines Fédérale 1";
  else if ($champ == "295") echo "Féminines Fédérale 2";
  else echo $nomDivision ;?></td>
  </tr>
</table>
<p>
<?php
//echo "idEquipe : ".$idEquipe;
	if (is_numeric($A1001)and is_numeric($A1002))
	{
	$idEquipeCourt = substr($idEquipe,2,7);echo "<br>";
  ?>
 
<img class="height100 width100 marginAuto" src="../../images/blasons200_200/<?php echo $idEquipeCourt; ?>.gif" alt="blason du champion">

<?php	
}
	?></p>
	<p class="equipeChamp"><?php echo $champion;?></p>
