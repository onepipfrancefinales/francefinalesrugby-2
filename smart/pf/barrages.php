<?php
barragesEquipes($typeBarrage, $divisionBarrage, $annee, $bdd);
barragesScores($typeBarrage, $divisionBarrage, $annee, $bdd);
?>

<!-- Construction du tableau -->

<table class="borderDouble width90PC marginAuto">
  <tr>
    <td class="titre"> Barrages<br>
      <div class="pf_lieux"><?php echo $D64ME; ?></div>
    </td>

  </tr>
</table>
<table class="borderNone width90PC marginAuto">
  <tr>
    <td colspan="2"><br /></td>
  </tr>

  <?php
  for ($i = 6401, $j = 6403; $i <= 6400 + $nbreEquipes, $j <= 6402 + $nbreEquipes; $i = $i + 4, $j = $j + 4) {
  ?>
    <tr>
      <td class="coin6"><?php echo ${"clubA" . $i}; ?></td>
      <td class="coin6pts"><?php echo ${"A" . $i}; ?></td>
    </tr>
    <tr>
      <td class="coin6"> <?php echo ${"clubA" . ($i + 1)}; ?></td>
      <td class="coin6pts"><?php echo ${"A" . ($i + 1)}; ?> </td>
    </tr>
    <tr>

      <td class="coin7"><?php echo ${"clubA" . ($j)}; ?></td>
      <td class="coin7pts"><?php echo ${"A" . ($j)}; ?></td>
    </tr>
    <tr>
      <td class="coin7"> <?php echo ${"clubA" . ($j + 1)}; ?></td>
      <td class="coin7pts"><?php echo ${"A" . ($j + 1)}; ?> </td>
    </tr>


  <?php
  }
  ?>
</table>