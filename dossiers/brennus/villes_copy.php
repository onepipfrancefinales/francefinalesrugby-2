

<table width="1000" class="borderWidth1 marginAuto">
<tr bgcolor="#0099FF" bordercolor="#000000">
    <td colspan="8" height="88" class="center size7 bold colorWhite styleCursive">Les villes</td>
  </tr>
  <tr class="backgroundWhite" bordercolor="#000000">
    <td colspan="8" height="40">
    </td>
  </tr>
  <tr class="backgroundWhite" bordercolor="#000000">
    <td colspan="8" height="40"><p class="size5 styelArial bold center"><?php echo $countVilles ;?> villes<br><br></p>
    </td>
  </tr>
  <tr class="center bold styleCursive size3 colorWhite backgroundBlack"> 
    <td height="41" width="200" class="borderWidth1">Villes</td>
    <td height="41" width="169" class="borderWidth1"> Nombre de finales accueillies </td>
    <td height="41" width="369" class="borderWidth1">Editions</td>
    <td height="41" width="300" class="borderWidth1">Stades</td>
  </tr>
  <?php for ($i=0; $i< $countVilles ; $i++) { ?>
  <tr> 
    <td class="borderWidth1 size4 styleArial"><?php echo $listeVilles[$i];?></td>
    <td class="borderWidth1 size4 styleArial"><?php finalesParVille($listeVilles[$i], $bdd);?></td>
    <td class="borderWidth1 size4 styleArial"><?php //echo $listeVilles[$i];?></td>
    <td class="borderWidth1 size4 styleArial"> <?php countStadesParVille($listeVilles[$i], $bdd);stadesParVille($listeVilles[$i], $countStadesParVille, $bdd);?></td>
  </tr>
  <?php
 }
 ?>
</table>

<br><br>