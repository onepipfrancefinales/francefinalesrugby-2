<?php

//nbre équipes engagées
$typeBarrage='2';

if ($division == 120) {
$divisionBarrage = 7115;
$typeDivision = "Top 14";
$typeDivision2 = "Pro D2";
}
else if ($division == 130){
$divisionBarrage = 7125;
$typeDivision = "Pro D2";
$typeDivision2 = "Nationale";
}
else if ($division == 135){
$divisionBarrage = 7137;
$typeDivision = "Nationale";
$typeDivision2 = "Nationale 2";
}

$clubA1001 ="-";
$clubA1002 ="-";
$A1001 ="-";
$A1002 ="-";

//echo "typeBarrage : ".$typeBarrage;echo "<br>";
//echo "divisionBarrage : ".$divisionBarrage;echo "<br>";




barragesEquipes($typeBarrage, $divisionBarrage, $annee, $bdd);
barragesScores($typeBarrage, $divisionBarrage, $annee, $bdd);







//echo "A1001 ".$clubA1001;echo "<br>";
//echo "A1002 ".$clubA1002;echo "<br>";

if ($A1001 =="-" & $A1002 == "-") {
$clubA1001 ="Finaliste  ".$typeDivision2 ;
$clubA1002 ="Avant dernier $typeDivision" ;
}
/*
if ($A1001 + $A1002 > 0 & $A1001 > $A1002)
$messageInfo = $clubA1001 ." accéde ". $typeDivision . "<br>" .
               $clubA1002  ." retrogradé en  ". $typeDivision;  

else 
$messageInfo = $clubA1002 ." maintenu en ". $typeDivision . "<br>" .
               $clubA1002  ." retrogradé en  ". $typeDivision;  

*/
?>
<table width="90%" class="borderDouble" >
  <tr>
    <td class="titre"><?php echo "Barrage d'accession ". $typeDivision; ?><br />
    <div class="center size2 styleArial italic"><?php echo $D0ME; ?></div>
    </td>
  </tr>
</table>
<br />
<table width="90%" class="borderNone">
  <tr>
    <td colspan="2"><?php //echo $D0ME;?>
  </td>
  </tr>
  <tr>
    <td class="coin5"><?php echo $clubA1001; ?></td>
    <td class="coin5pts"><?php echo $A1001; ?></td>
  </tr>
  <tr>
    <td class="coin5"><?php echo $clubA1002; ?></td>
    <td class="coin5pts"><?php echo $A1002; ?></td>
  </tr>
  <tr>
    <td colspan="2" height="25"></td>
  </tr>
</table>
<?php


/*
if ($A1001 + $A1002 > 0 & $A1001 > $A1002)
$messageInfo = $clubA1001 ." accéde ". $typeDivision;
else 
$messageInfo =  $clubA1002 ." est maintenu en ". $typeDivision;
*/


//echo "<div class=\"center\">". $messageInfo . "</div>";

?>
