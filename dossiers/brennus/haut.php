<table  class="backgroundWhite " border="0">
  <tr> 
    <td colspan="4" class="center"><img src="images/brennus/brennusGrand.jpg" width="100%" ></td>
  </tr>
  <tr class="center bold"> 
    <td class="size4"><a href="pagesBrennus.php?page=accueil&mode=<?php echo $mode;?>">Accueil</a></td>
    <td class="size4"><a href="pagesBrennus.php?page=finales&mode=<?php echo $mode;?>">Toutes les finales</a></td>
    <td class="size4"><a href="pagesBrennus.php?page=records&mode=<?php echo $mode;?>">Les records</a></td>
    <td class="size4"><a href="pagesBrennus.php?page=premieres&mode=<?php echo $mode;?>">les premières fois</a></td>
  </tr>
  <tr class="center bold"> 
    <td width="238" height="25"></td>
    <td width="243" class="size4"><a href="pagesBrennus.php?page=brennus&mode=<?php echo $mode;?>">Le Brennus</a></td>
    <td width="243" class="size4"><a href="pagesBrennus.php?page=stades&mode=<?php echo $mode;?>"><b>Les stades</a></td>
    <td width="244" class="size4"><a href="pagesBrennus.php?page=villes&mode=<?php echo $mode;?>"><b>Les Villes</a></td>
  </tr>
  <tr class="backgroundBlack"> 
   <?php if ($mode=="smart") { ?>
  <td colspan="4" class="center size4"><a class="bold colorWhite" href="../../smart/sommaire.php">Retour sur l'appli France Finales Rugby</a></td>
  <?php } else { ?>
    <td colspan="4" class="center size4"><a class="bold colorWhite" href="/index.php">Retour sur le site France Finales Rugby</a></td>
    <?php }  ?>
  </tr>
</table>

