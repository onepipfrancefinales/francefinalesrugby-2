<?php
if ($mode == "smart")
  $adresse = "smartPage.php";
else
  $adresse = "pageLexique.php";
?>
<br>
<table width="80%" cellpadding="1" class="marginAuto">
  <tr>
    <td class="som"><a class="colorWhite" href=<?php echo $adresse . "?page=lexique&sommaire=1&lettre=0&mode=" . $mode; ?>>Lexique</a></td>
    <td class="som"><a class="colorWhite" href=<?php echo $adresse . "?page=lexique&sommaire=2&mode=" . $mode; ?>>Phrases célebres</a></td>
    <td class="som"><a class="colorWhite" href=<?php echo $adresse . "?page=lexique&sommaire=3&mode=" . $mode; ?>>Citations</a></td>
    <td class="som"><a class="colorWhite" href=<?php echo $adresse . "?page=lexique&sommaire=4&mode=" . $mode; ?>>Expressions<br>médiatiques</a></td>
  </tr>
</table>
<br>
<hr />