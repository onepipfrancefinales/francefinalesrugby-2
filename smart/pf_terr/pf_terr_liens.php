
<?php if ($annee == 2024) {
$anneeLien = 2025;
}
else {
$anneeLien = 2024;
}
?>;

<div class="backgroundWhite">
<table class="center width95PC borderNone backgroundWhite" >
 <tr>
<td colspan="3" class = " btnAutreSaison center "> <a class ="colorWhite" href="../pf_terr/phase_finale.php?division=<?php echo substr($division,0,2).'0170';?>&annee=<?php echo $anneeLien; ?>&bddComite=<?php echo $bddComite;?>&comite=<?php echo $comite;?>">Phases finales <?php echo $anneeLien; ?>  </td>

 </tr>

<tr> 
    <td class="coin8"><a href="../pf_terr/phase_finale.php?division=<?php echo substr($division,0,2).'0170';?>&annee=<?php echo $annee; ?>&bddComite=<?php echo $bddComite;?>&comite=<?php echo $comite;?>">Régionale 1</a></td>
    <td class="coin8"><a href="../pf_terr/phase_finale.php?division=<?php echo substr($division,0,2).'0180';?>&annee=<?php echo $annee; ?>&bddComite=<?php echo $bddComite;?>&comite=<?php echo $comite;?>">Régionale 2</a></td>
    <td class="coin8"><a href="../pf_terr/phase_finale.php?division=<?php echo substr($division,0,2).'0190';?>&annee=<?php echo $annee; ?>&bddComite=<?php echo $bddComite;?>&comite=<?php echo $comite;?>">Régionale 3</a></td>
    </tr>
<tr> 	
	<td class="coin8"><a href="../pf_terr/phase_finale.php?division=<?php echo substr($division,0,2).'0270';?>&annee=<?php echo $annee; ?>&bddComite=<?php echo $bddComite;?>&comite=<?php echo $comite;?>">Réserve Rég 1 </a></td>
    <td class="coin8"><a href="../pf_terr/phase_finale.php?division=<?php echo substr($division,0,2).'9180';?>&annee=<?php echo $annee; ?>&bddComite=<?php echo $bddComite;?>&comite=<?php echo $comite;?>">Réserve Rég 2</a></td>
    <td class="coin9"><a href="../pf_terr/phase_finale.php?division=<?php echo substr($division,0,2).'0295';?>&annee=<?php echo $annee; ?>&bddComite=<?php echo $bddComite;?>&comite=<?php echo $comite;?>"> Féminines </a></td>
  </tr>
  
</table>

</div>
