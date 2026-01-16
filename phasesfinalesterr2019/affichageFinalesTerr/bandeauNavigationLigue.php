<?php

$anneeplus = $annee +1;
$anneemoins = $annee -1;
?>


<table >
  <tr > 
    <td class="pub"   > 
      <?php //	require("../../pub/pub7.php"); ?>
    </td>
    <td class="chevron" > <a href="/phasesfinalesterr/affichageFinalesTerr/pageAffichage.php?page=<?php echo $page; ?>&comite=<?php echo $comite; ?>&annee=<?php echo $anneemoins;?>&id=<?php echo $id;?>" target="_top" title="Phases finales de la saison <?php echo $anneemoins; ?>">&lt;&lt;</a>nne 
      <a href="/phasesfinalesterr/affichageFinalesTerr/pageAffichage.php?page=<?php echo $page; ?>&comite=<?php echo $comite; ?>&annee=<?php echo $anneeplus;?>&id=<?php echo $id;?>" target="_top" title="Phases finales de la saison <?php echo $anneeplus; ?>">&gt;&gt;</a> 
    </td>
    <td class="pub" > 
      <?php//	require("../../pub/pub8.php"); ?>
    </td>
  </tr>
  <tr > 
    <td class="ligneComiteA" colspan="3" > 
      <?php
	//	Traitement des comités (ab - ld - mpy - r) ==> Ligue Occitanie
	if (($comite == 'ab' or $comite == 'ld' or $comite == 'mpy' or $comite == 'r' )and ($annee < 2109 ))
		{
		include("menuOccitanie.php");
		}
	//	Traitement des comités (au - ly - ap - da ) ==> Ligue Auvergne Rhone Alpes	
	if ($comite == 'au' or $comite == 'ly' or $comite == 'da' or $comite == 'ap' )
		{
		include("menuAuvergneRhoneAlpes.php");
		}	
	//	Traitement des comités (be - ca - cbl - lm - pa - pch ) ==> Ligue nouvelle Aquitaine		 
	if ($comite == 'be' or $comite == 'ca' or $comite == 'cbl' or $comite == 'lm' or $comite == 'pa' or $comite == 'pch' )
		{
		include("menuNouvelleAquitaine.php");
		}
		
?>
    </td>
  </tr>
  <tr > 
    <td class="ligneComite" colspan="3" > 
      <?php 	if ($annee > 2018)
				$texte = "r&eacute;gionales de la ligue";
			else
				$texte = "territoriales du comit&eacute;";
		 echo "Finales $texte   $annee";		
     //  echo "Finales $texte  $comiteNom $annee";
	  ?>
    </td>
  </tr>
</table>

