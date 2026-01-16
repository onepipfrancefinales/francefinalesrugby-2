<?php
$tabTrigrammeLigue =   array("ARA" , "BFC", "BRE", "CVL", "COR", "GES", "HDF", "IDF", "NOR", "NAQ", "OCC", "PCA", "PDL" );
$tabLigue =   array(10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 22, 21);
$tabDivision = array([280,"ELITE1","Elite 1"], [285,"ELITE2", "Elite 2"], [290,"FED1", "Fédérale 1"], [295,"FED2", "Fédérale 2"], [300,"REGX", "Rég à X"]);
$tabNomDivision = array ("ELITE1", "ELITE2", "FED1", "FED2", "REGX");

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

structureLigue($idLigue, $bdd); ${$sigleLigue."280"} = $d280;
                                ${$sigleLigue."285"} = $d285; 
                                ${$sigleLigue."290"} = $d290;
                                ${$sigleLigue."295"} = $d295;
                                ${$sigleLigue."300"} = $d300; 
                              

                             
}
// totaux par ligues
foreach ($tabTrigrammeLigue as $trigrammeLigue) {

${"totaux".$trigrammeLigue} = ${$trigrammeLigue."280"} + ${$trigrammeLigue."285"} + ${$trigrammeLigue."290"} + ${$trigrammeLigue."295"} + ${$trigrammeLigue."300"}; 
                           

}

//${$trigrammeLigue."280"}



$ELITE1 = $ARA280 + $BFC280 + $BRE280 + $CVL280 + $COR280 + $GES280 + $HDF280 + $IDF280 + $NOR280 + $NAQ280 + $OCC280 + $PDL280 + $PCA280;
$ELITE2 = $ARA285 + $BFC285 + $BRE285 + $CVL285 + $COR285 + $GES285 + $HDF285 + $IDF285 + $NOR285 + $NAQ285 + $OCC285 + $PDL285 + $PCA285;
$FED1  = $ARA290 + $BFC290 + $BRE290 + $CVL290 + $COR290 + $GES290 + $HDF290 + $IDF290 + $NOR290 + $NAQ290 + $OCC290 + $PDL290 + $PCA290;





$ARA295 = 0;
$BFC295 = 0;
$BRE295 = 4;
$CVL295 = 3;
$COR295 = 0;
$GES295 = 0;
$HDF295 = 3;
$IDF295 = 25;
$NOR295 = 1;
$NAQ295 = 29;
$OCC295 = 33;
$PDL295 = 3;
$PCA295 = 8;





$FED2  = $ARA295 + $BFC295 + $BRE295 + $CVL295 + $COR295 + $GES295 + $HDF295 + $IDF295 + $NOR295 + $NAQ295 + $OCC295 + $PDL295 + $PCA295;


$ARA300 = 0;
$BFC300 = 14;
$BRE300 = 8;
$CVL300 = 6;
$COR300 = 0;
$GES300 = 11;
$HDF300 = 12;
$IDF300 = 12;
$NOR300 = 0;
$NAQ300 = 52;
$OCC300 = 40;
$PDL300 = 0;
$PCA300 = 8;

$REGX  = $ARA300 + $BFC300 + $BRE300 + $CVL300 + $COR300 + $GES300 + $HDF300 + $IDF300 + $NOR300 + $NAQ300 + $OCC300 + $PDL300 + $PCA300;




$TT = $ELITE1 + $ELITE2 + $FED1 + $FED2 + $REGX;
?>

<!------>

<h2 class="center colorBlack styleArial"><!--Répartition des clubs par divisions et par ligues <br>pour la saison 2025-2026--></h2>
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