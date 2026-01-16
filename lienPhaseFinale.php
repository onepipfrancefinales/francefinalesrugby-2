<?php 
$champ2 =substr($champ,0,2);
$division =$champ2*10;

?>
<table class="marginAuto width95PC">
<tr>
 <td class="france"><a href="pf_terr/phase_finale.php?comite=<?php echo $comite; ?>&bddComite=<?php echo $bddComite; ?>&annee=<?php echo $finSaison -1;?>&division=<?php echo substr($champ,0,5).'0';?>"> 
		Phases finales régionales <?php echo $datePhasesFinales;?>
	</a></td>
</tr>
<tr>
 <td height="5"></td>
</tr>
<tr>
 <td class="franceBleu"><a href="palmares/pagePalmTerr.php?comite=<?php echo $comite; ?>&bddComite=<?php echo $bddComite; ?>&champ=<?php echo $champ ;?>"> 
 		Palmarès régional</a></td>
</tr>
</table>

