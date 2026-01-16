 
<?php if ($annee == 2024) 
  $anneeLien = 2025;
  else 
  $anneeLien = 2024;
 
if ($annee >=  2024 )
{
  ?>
<table class = "width98PC marginAuto borderNone ">
  <tr>
  <td colspan="6" class = " btnAutreSaison center "> <a class ="colorWhite" href="pagePhaseFinale.php?division=<?php echo $division;?>&annee=<?php echo $anneeLien;?>&divFem=<?php echo $divFem;?>">Phases finales <?php echo $anneeLien; ?> 
 </td>
  </tr>
  <tr> 
    <td class="coin8"><a href="pagePhaseFinale.php?division=110&annee=<?php echo $annee;?>">Top 14</a></td>
    <td class="coin8"><a href="pagePhaseFinale.php?division=120&annee=<?php echo $annee;?>">ProD2</a></td>
    <td class="coin8"><a href="pagePhaseFinale.php?division=130&annee=<?php echo $annee;?>">Nat 1</a></td>
	  <td class="coin8"><a href="pagePhaseFinale.php?division=135&annee=<?php echo $annee;?>">Nat 2</a></td>
    <td class="coin9"><a href="pagePhaseFinale.php?division=280&annee=<?php echo $annee;?>&divFem=femElite1">Elites Fem</a></td>
    <td class="coin9"><a href="pagePhaseFinale.php?division=290&annee=<?php echo $annee;?>&divFem=femFed1">Féd fem</a></td>
  </tr>
  <tr> 
    <td class="coin8"><a href="pagePhaseFinale.php?division=140&annee=<?php echo $annee;?>">Féd1</a></td>
    <td class="coin8"><a href="pagePhaseFinale.php?division=150&annee=<?php echo $annee;?>">Féd2</a></td>
    <td class="coin8"><a href="pagePhaseFinale.php?division=160&annee=<?php echo $annee;?>">Féd3</a></td>
    <td class="coin8"><a href="pagePhaseFinale.php?division=170&annee=<?php echo $annee;?>">Rég 1</a></td>
    <td class="coin8"><a href="pagePhaseFinale.php?division=180&annee=<?php echo $annee;?>">Rég 2</a></td>
    <td class="coin8"><a href="pagePhaseFinale.php?division=190&annee=<?php echo $annee;?>">Rég 3</a></td>
  </tr>
  <tr> 
    <td class="coinEspoirs"><a href="pagePhaseFinale.php?division=225&annee=<?php echo $annee;?>">Esp Elites</a></td>
    <td class="coinEspoirs"><a href="pagePhaseFinale.php?division=230&annee=<?php echo $annee;?>">Esp Nat</a></td>
    <td class="coinEspoirs"><a href="pagePhaseFinale.php?division=245&annee=<?php echo $annee;?>">Esp Féd</a></td>
    <td class="coinEquipe2"><a href="pagePhaseFinale.php?division=250&annee=<?php echo $annee;?>">FédB</a></td>
    <td class="coinEquipe2"><a href="pagePhaseFinale.php?division=260&annee=<?php echo $annee;?>">Exc B</a></td>
    <td class="coinEquipe2"><a href="pagePhaseFinale.php?division=270&annee=<?php echo $annee;?>">Réserve</a></td>
  </tr>
</table>
 <?php 
}
else
{
  ?>
<table class = "width98PC marginAuto">
  <tr> 
    <td class="coin8"><a href="pagePhaseFinale.php?division=110&annee=<?php echo $annee;?>">Top 14</a></td>
    <td class="coin8"><a href="pagePhaseFinale.php?division=120&annee=<?php echo $annee;?>">ProD2</a></td>
    <td class="coin9"><a href="pagePhaseFinale.php?division=216&annee=<?php echo $annee;?>">Elite 1</a></td>
    <td class="coin9"><a href="pagePhaseFinale.php?division=285&annee=<?php echo $annee;?>">Elite 2</a></td>
    <td class="coin9"><a href="pagePhaseFinale.php?division=290&annee=<?php echo $annee;?>">Féd 1</a></td>
    <td class="coin9"><a href="pagePhaseFinale.php?division=295&annee=<?php echo $annee;?>">Féd 2</a></td>
  </tr>
  <tr> 
    <td class="coin8"><a href="pagePhaseFinale.php?division=140&annee=<?php echo $annee;?>">Féd1</a></td>
    <td class="coin8"><a href="pagePhaseFinale.php?division=150&annee=<?php echo $annee;?>">Féd2</a></td>
    <td class="coin8"><a href="pagePhaseFinale.php?division=160&annee=<?php echo $annee;?>">Féd3</a></td>
    <td class="coin8"><a href="pagePhaseFinale.php?division=250&annee=<?php echo $annee;?>">FédB</a></td>
    <td class="coin8"><a href="pagePhaseFinale.php?division=260&annee=<?php echo $annee;?>">ExcB</a></td>
    <td class="coin8"><a href="pagePhaseFinale.php?division=270&annee=<?php echo $annee;?>">Rés</a></td>
  </tr>
  <tr> 
    <td class="coin8"><a href="pagePhaseFinale.php?division=170&annee=<?php echo $annee;?>">H</a></td>
    <td class="coin8"><a href="pagePhaseFinale.php?division=116&annee=<?php echo $annee;?>">PH</a></td>
    <td class="coin8"><a href="pagePhaseFinale.php?division=190&annee=<?php echo $annee;?>">1S</a></td>
    <td class="coin8"><a href="pagePhaseFinale.php?division=200&annee=<?php echo $annee;?>">2S</a></td>
    <td class="coin8"><a href="pagePhaseFinale.php?division=210&annee=<?php echo $annee;?>">3S</a></td>
    <td class="coin8"><a href="pagePhaseFinale.php?division=220&annee=<?php echo $annee;?>">4S</a></td>
  </tr>
</table>
<?php
}
?>