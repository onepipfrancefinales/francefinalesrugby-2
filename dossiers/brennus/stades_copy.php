<table width="1000" class="borderWidth1 marginAuto" >
<tr bgcolor="#0099FF" bordercolor="#000000">
    <td colspan="8" height="88" class="center size7 bold colorWhite styleCursive">Les stades</td>
  </tr>
 <tr class="backgroundWhite" bordercolor="#000000">
    <td colspan="8" height="40">
    </td>
  </tr>
  <tr class="backgroundWhite" bordercolor="#000000">
    <td colspan="8" height="40"><p class="size5 styelArial bold center"><?php echo $countStades ;?> Enceintes sportives <br><br></p>
    </td>
  </tr>

  <tr class="center bold styleCursive size3 colorWhite backgroundBlack"> 
    <td class="center" width="230"> Stades </td>
    <td class="center" width="98"> Lieux </td>
    <td class="center" width="98"> Nombre de finales accueillies </td>
    <td class="center" width="157"> Editions </td>
    <td class="center" width="300"> Photos</td>
  </tr>
 
  <?php for ($i=0; $i< $countStades ; $i++) { ?>
  
  <tr class="borderWidth1"> 
    <td height="162" width="200" class="borderWidth1 marginAuto size4 styleArial"><?php echo $nomStade[$i]."<br>".$com[$i]; ?> </td>
    <td height="162" width="98" class="borderWidth1 marginAuto size4 styleArial"><?php echo $nomVille[$i]; ?></td>
    <td height="162" width="78" class="borderWidth1 marginAuto size4 styleArial"> <?php countSaisonsStade($i+1, $bdd); echo $countSaisonsStade; ?> </td>
    <td height="162" width="200" class="borderWidth1 marginAuto size3 styleArial"><?php listeSaisonsStade($i+1, $countSaisonStade, $bdd); ?></td>
    <td height="162" width="300" class="borderWidth1 marginAuto"><img src="images/stades/<?php echo $i+1;?>.jpg" width="300" height="150"></td>
  </tr>
 <?php
 }
 ?>
</table>

<br><br>

<!--------------------------------------->



<br><br>