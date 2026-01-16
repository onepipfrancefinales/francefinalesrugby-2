

<?php 
$modaliteSaison = "Modalités de qualification de la saison ".$debutSaison.' - '.$finSaison;

if ($division == 140)
{
  ?>
<table class="marginAuto width500">
          <tr>
            <td>
              <h4 class="bulleReglement">
                <a href="javascript:ouvrirPopup('reglements<?php echo $debutSaison.'_'.$finSaison;?>.php?cmt=<?php echo $cmt; ?>','','top=10, right=10,resizable=no, directories=no, statut=no, location=no, width=580, height=600, menubar=no')"> <?php echo $modaliteSaison;?></a>
              </h4>
              <h4 class="bulleReparGeo colorBlack">
                <a href="javascript:ouvrirPopup('cartographie/<?php echo $debutSaison.'_'.$finSaison;?>/carteFed1.bmp','','top=10, right=10,resizable=no, directories=no, statut=no, location=no, width=530, height=600, menubar=no')">
                  Répartition géographique des clubs de Fédérale 1
                </a>
              </h4>
            </td>
          </tr>
</table>
<?php
}
else if ($division==150)
{
?>

<!--fed2  -->
 <table class="marginAuto width500">
            <tr>
              <td>
                <h4 class="bulleReparGeo">
                  <a href="javascript:ouvrirPopup('cartographie/<?php echo $debutSaison.'_'.$finSaison;?>/carteFed2.bmp','','top=10, right=10,resizable=no, directories=no, statut=no, location=no, width=530, height=600, menubar=no')">
                  Répartition géographique des clubs de Fédérale 2
                  </a>

                </h4>
                <h4 class="bulleReglement">
                  <a href="javascript:ouvrirPopup('reglements<?php echo $debutSaison.'_'.$finSaison;?>.php?cmt=<?php echo $cmt; ?>','','top=10, right=10,resizable=no, directories=no, statut=no, location=no, width=580, height=600, menubar=no')"> <?php echo $modaliteSaison;?></a>
                </h4>

              </td>
            </tr>
          </table>
<?php
}

else if ($division== 160)
{
?>

<!--fed3  -->
<table class="marginAuto width500">
          <tr>
            <td>
              <h4 class="bulleReglement">
                <a href="javascript:ouvrirPopup('reglements<?php echo $debutSaison.'_'.$finSaison;?>.php?cmt=<?php echo $cmt; ?>','','top=10, right=10,resizable=no, directories=no, statut=no, location=no, width=580, height=600, menubar=no')"> <?php echo $modaliteSaison;?></a>
              </h4>
              <h4 class="bulleReparGeo">
                <a href="javascript:ouvrirPopup('cartographie/<?php echo $debutSaison.'_'.$finSaison;?>/carteFed3.bmp','','top=10, right=10,resizable=no, directories=no, statut=no, location=no, width=530, height=600, menubar=no')">Répartition géographique des clubs de Fédérale 3</a>
              </h4>
            </td>
          </tr>
        </table>
<?php
}
?> 