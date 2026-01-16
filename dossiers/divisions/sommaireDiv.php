  <?php 
if ($mode=="smart")
$adresse="smartPage.php";
else
$adresse="pageEvolutionsDivisions.php";
?> 
  
  <h1 class= "bold styleArial center">Evolution compétitons <br>
  (Des origines à aujourd'hui)<br>

<span class="size3 styleArial">Compétitions donnant droit à <br>un titre de champion de France</span>
</h1>  
  <table class=" marginAuto" >
    <tr>
      <td class = "size3">
      <a class="colorBlack styleArial center" href=<?php echo $adresse."?page=divisions&type=seniors1&mode=".$mode; ?>>Séniors</a></td>
      <td class = "size3">
      <a  class="colorBlack styleArial center" href=<?php echo $adresse."?page=divisions&type=feminines&mode=".$mode; ?>>Féminines</a></td>
      <td class = "size3">
      <a  class="colorBlack styleArial center" href=<?php echo $adresse."?page=divisions&type=seniors2&mode=".$mode; ?>>Réserves</a></td>
   
   <?php if ($mode == "smart") {
        echo "</tr>";
        echo "<tr>";
    }
    ?>

      <td class = "size3">
      <a class="colorBlack styleArial center" href=<?php echo $adresse."?page=divisions&type=jeunes&mode=".$mode; ?>>Jeunes</a></td>
      <td class = "size3">
      <a  class="colorBlack styleArial center" href=<?php echo $adresse."?page=divisions&type=espoirs&mode=".$mode; ?>>Espoirs</a></td>    
      <td class = "size3">
     
    </tr>
  </table>
 <br>
  