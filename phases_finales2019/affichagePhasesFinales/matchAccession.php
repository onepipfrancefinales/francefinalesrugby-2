<?php
echo "<br/>";
$annee = $_GET['annee'];
$division = $_GET['division'];

if ($division == 120) {
  $division = "115";
  $typeBarrage = "Barrage d'accession au Top 14";
  $division2 ="Pro D2";
  $division1 ="Top 14";
} else if ($division == 130) {
  $division = "125";
  $typeBarrage = "Barrage d'accession en Pro D2";
  $division2 ="Nationale";
  $division1 ="Pro D2";
} else if ($division == 135) {
  $division = "137";
  $typeBarrage = "Barrage d'accession en Nationale";
  $division2 ="Nationale 2";
  $division1 ="Nationale";
}

require '../../connect/connexion1.php';
accessMatch($division, $annee, $bdd);
?>

<table width="1490" class="borderNone">
  <tr>
    <td colspan="5"></td>
    <td width="269"></td>
    <td width="41"></td>
    <td width="85" ></td>
    <td width="21" ></td>
    <td width="245"  class= "alignLeft"><?php echo $D1ME ?></td>
    <td width="37"></td>
    <td width="118"></td>
  </tr>
  <tr>
    <td colspan="5"></td>
    <td class="coin4"><?php echo $typeBarrage; ?></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="coin4"><?php echo $equipeDom; ?></td>
    <td class="coin4pts"><?php echo $scoreDom; ?></td>
    <td></td>
  </tr>
  <tr>
    <td colspan="9"></td>
    <td class="coin4"><?php echo $equipeExt; ?></td>
    <td class="coin4pts"><?php echo $scoreExt; ?></td>
    <td></td>
  </tr>
  <tr>
    <td colspan="12" height="25"></td>
  </tr>
  <tr>
    <td colspan="5"></td>
    <td colspan="7">
<?php

  if ($scoreDom > $scoreExt & ($scoreDom + $scoreExt > 0)) {
        echo "<div class=\"alignLeft styleArial center size3 bold\">". $equipeDom . " accéde au " .$division1.
         "<br>" . $equipeExt . " relégué en " .$division2."</div>";
      } else {
         echo "<div class=\"alignleft styleArial center size3 bold\">". $equipeDom . " maintenu en " .$division1.
        "<br>". $equipeExt . " maintenu en ". $division2."</div>";
      }
        
?>

    </td>
  </tr>
  
  <tr>
    <td colspan="12" height="25"></td>
  </tr>
  
  
  <tr>
    <td colspan="12" bgcolor="#FFCC66"></td>
  </tr>
</table>

