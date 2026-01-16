<?php
$tabTrigrammeLigue =   array("ARA" , "BFC", "BRE", "CVL", "COR", "GES", "HDF", "IDF", "NOR", "NAQ", "OCC", "PCA", "PDL" );
$tabLigue =   array(10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 22, 21);
$tabDivision = array([110,"TOP14","Top 14"], [120,"PROD2", "Pro D2"], [130,"NAT1", "Nationale 1"], [135,"NAT2", "Nationale 2"], [140,"FED1", "Fédérale 1"], [150,"FED2", "Fédérale 2"],[160,"FED3", "Fédérale 3"], [170,"REG1", "Régionale 1"], [180,"REG2", "Régionale 2"], [190,"REG3",  "Régionale 3"]);
$tabNomDivision = array ("TOP14", "PROD2", "NAT1", "NAT2", "FED1", "FED2", "FED3",  "REG1", "REG2", "REG3");

foreach ($tabLigue as $idLigue) {

  if ($idLigue == 10)
    $sigleLigue = "ARA";
  elseif ($idLigue == 11)
    $sigleLigue = "BFC";
  elseif ($idLigue == 12)
    $sigleLigue = "BRE";
  elseif ($idLigue == 13)
    $sigleLigue = "CVL";
  elseif ($idLigue == 14)
    $sigleLigue = "COR";
  elseif ($idLigue == 15)
    $sigleLigue = "GES";
  elseif ($idLigue == 16)
    $sigleLigue = "HDF";
  elseif ($idLigue == 17)
    $sigleLigue = "IDF";
  elseif ($idLigue == 18)
    $sigleLigue = "NOR";
  elseif ($idLigue == 19)
    $sigleLigue = "NAQ";
  elseif ($idLigue == 20)
    $sigleLigue = "OCC";
  elseif ($idLigue == 21)
    $sigleLigue = "PDL";
  elseif ($idLigue == 22)
    $sigleLigue = "PCA";

structureLigue($idLigue, $bdd); ${$sigleLigue."110"} = $d110;
                                ${$sigleLigue."120"} = $d120; 
                                ${$sigleLigue."130"} = $d130;
                                ${$sigleLigue."135"} = $d135;
                                ${$sigleLigue."140"} = $d140; 
                                ${$sigleLigue."150"} = $d150;
                                ${$sigleLigue."160"} = $d160;
                                ${$sigleLigue."170"} = $d170;
                                ${$sigleLigue."180"} = $d180; 
                                ${$sigleLigue."190"} = $d190;

                             
}
// totaux par ligues
foreach ($tabTrigrammeLigue as $trigrammeLigue) {

${"totaux".$trigrammeLigue} = ${$trigrammeLigue."110"} + ${$trigrammeLigue."120"} + ${$trigrammeLigue."130"} + ${$trigrammeLigue."135"} + ${$trigrammeLigue."140"} 
                            + ${$trigrammeLigue."150"} + ${$trigrammeLigue."160"} + ${$trigrammeLigue."170"} + ${$trigrammeLigue."180"} + ${$trigrammeLigue."190"};

}

//${$trigrammeLigue."110"}


$TOP14 = $ARA110 + $BFC110 + $BRE110 + $CVL110 + $COR110 + $GES110 + $HDF110 + $IDF110 + $NOR110 + $NAQ110 + $OCC110 + $PDL110 + $PCA110;
$PROD2 = $ARA120 + $BFC120 + $BRE120 + $CVL120 + $COR120 + $GES120 + $HDF120 + $IDF120 + $NOR120 + $NAQ120 + $OCC120 + $PDL120 + $PCA120;
$NAT1  = $ARA130 + $BFC130 + $BRE130 + $CVL130 + $COR130 + $GES130 + $HDF130 + $IDF130 + $NOR130 + $NAQ130 + $OCC130 + $PDL130 + $PCA130;
$NAT2  = $ARA135 + $BFC135 + $BRE135 + $CVL135 + $COR135 + $GES135 + $HDF135 + $IDF135 + $NOR135 + $NAQ135 + $OCC135 + $PDL135 + $PCA135;

$FED1  = $ARA140 + $BFC140 + $BRE140 + $CVL140 + $COR140 + $GES140 + $HDF140 + $IDF140 + $NOR140 + $NAQ140 + $OCC140 + $PDL140 + $PCA140;
$FED2  = $ARA150 + $BFC150 + $BRE150 + $CVL150 + $COR150 + $GES150 + $HDF150 + $IDF150 + $NOR150 + $NAQ150 + $OCC150 + $PDL150 + $PCA150;
$FED3  = $ARA160 + $BFC160 + $BRE160 + $CVL160 + $COR160 + $GES160 + $HDF160 + $IDF160 + $NOR160 + $NAQ160 + $OCC160 + $PDL160 + $PCA160;

$REG1  = $ARA170 + $BFC170 + $BRE170 + $CVL170 + $COR170 + $GES170 + $HDF170 + $IDF170 + $NOR170 + $NAQ170 + $OCC170 + $PDL170 + $PCA170;
$REG2  = $ARA180 + $BFC180 + $BRE180 + $CVL180 + $COR180 + $GES180 + $HDF180 + $IDF180 + $NOR180 + $NAQ180 + $OCC180 + $PDL180 + $PCA180;
$REG3  = $ARA190 + $BFC190 + $BRE190 + $CVL190 + $COR190 + $GES190 + $HDF190 + $IDF190 + $NOR190 + $NAQ190 + $OCC190 + $PDL190 + $PCA190;

$TT = $TOP14 + $PROD2 + $NAT1 + $NAT2 + $FED1 + $FED2 + $FED3 + $REG1 + $REG2 + $REG3;
?>

<!------>

<h2 class="center colorBlack styleArial">Répartition des clubs par divisions et par ligues <br>pour la saison 2025-2026</h2>
        <table class="width95PC marginAuto" style="border: 3px  solid purple;  border-collapse: collapse">
          
          <tr class="border">
            <td class="border bold style"></td>
            <?php foreach ($tabTrigrammeLigue as $trigrammeLigue) {
               if (cssColonne($trigrammeLigue)== true)
            { echo "<td class=\"border bold style \">".$trigrammeLigue."</td>";}
            else
            { echo "<td class=\"border backgroundColonne bold style\">".$trigrammeLigue."</td>";}
            } ?>
            <td class="border bold backgroundGrey style">TOTAUX</td>
          </tr>
        
         
         
          <?php foreach ($tabDivision as $division) {    
         ?>
          <tr style="border: 1px  solid purple">
            <td class="border bold style"><?php echo $division[2]; ?></td>
            <?php foreach ($tabTrigrammeLigue as $trigrammeLigue) {
               if (cssColonne($trigrammeLigue))
            { echo "<td class=\"border\">".${$trigrammeLigue.$division[0]}."</td>";}
            else
            { echo "<td class=\"border backgroundColonne\">". ${$trigrammeLigue.$division[0]}."</td>";}
            } ?>
            <td class="border backgroundGrey bold"><?php echo ${$division[1]}; ?></td>
          </tr>
          <?php  }   
         ?>

         
          <tr class="backgroundGrey">
            <td class="border style bold">Totaux</td>
            <?php foreach ($tabTrigrammeLigue as $trigrammeLigue) {
           echo "<td class=\"border bold\">".${"totaux".$trigrammeLigue}."</td>";
            }
            ?>
               <td class="border backgroundGrey bold"><?php echo $TT; ?></td>
          </tr>
          
        </table>
        <style>
  .border {
    border: 1px solid black
  }
  .bold {
    font-weight: bold;
  }
  .backgroundGrey {
    background-color: #BFC9CA;
  }
  .backgroundColonne {
    background-color: #E5E8E8;
  }
  .style {
    font-family: Arial, Helvetica, sans-serif;
  }
</style>