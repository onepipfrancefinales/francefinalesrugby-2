  <?php
  if ($codeFusion > 0)
  $nouveauClub = $codeFusion;

 if ($nouveauClub != 0 && ($nouveauClub != $fusion1 || $nouveauClub != $fusion2 || $nouveauClub != $fusion3 || $nouveauClub != $fusion4 )) {
  ?>
    <div class="size3 styleArial center">
      <?php
      echo "<br>";
      echo "Fusion en " . $anneeFusion . " avec le(s) club(s) de " . "<br>";

      if ($equipe == $fusion1) {
        echo $clubFusion2 . "<br>" . $clubFusion3 . "<br>" . $clubFusion4;
      } elseif ($equipe == $fusion2) {
        echo $clubFusion1 . "<br>" . $clubFusion3 . "<br>" . $clubFusion4;
      } elseif ($equipe == $fusion3) {
        echo $clubFusion2 . "<br>" . $clubFusion3 . "<br>" . $clubFusion4;
      }  elseif ($equipe == $fusion4) {
        echo $clubFusion1 . "<br>" . $clubFusion2 . "<br>" . $clubFusion3;
      }

      echo "<br>";
      echo "pour donner naissance au club" . "<br>";
      echo "<br>";

      if ($mode == "smart") {
        $URL = "/smart/ficheClubs/pageFicheClubs.php?mode=smart&champion=";
      } else {
        $URL = "/consultation/pageclub00.php?champion=";
      }


      ?>
    </div>
    <div id="saisonEnCours" class="colorBlack"> <a class="colorBlack" href=<?php echo $URL . substr($nouveauClub, -5); ?>><?php echo $nouveauNomClub; ?></a> </div><br>



  <?php
  } else {
    if ($mode == "smart")
      echo "<h1 class=\"size4\">" . "Saison " . $debutSaison . '  - ' . $finSaison . "</h1>";
    else
      echo "<h1>" . "Saison " . $debutSaison . ' - ' . $finSaison . "</h1>";

  ?>

    <div id="saisonEnCours">
      <?php
      if ($saisonEnCoursChiffre > 0)  echo "- " . $saisonEnCours . " -";
      else echo "-";
      ?>
    </div>
    <br>
  <?php
  }
  ?>
  <hr width="70%" style="color:red; height:1px ">


  <?php

  if ($mode == "smart")
    echo "<h1 class=\"size4\">Saisons précédentes</h1>";
  else
    echo "<h1>Saisons précédentes</h1>";
  ?>

  <table width="<?php echo $width; ?>" class="borderSpacing marginAuto">


    <?php



    $min = 1;
    $max = 15;

    if ($fusion == true) {
      $max = $finSaison - $anneeFusion;
    }
    if ($statut > 0) $nouveauClub = $statut;
   if ($nouveauClub != 0 && ($nouveauClub != $fusion1 || $nouveauClub != $fusion2 || $nouveauClub != $fusion3)) {
      $min = $finSaison - $anneeFusion;
    }

    if ($nouveauClub != 0 && ($nouveauClub != $fusion1 || $nouveauClub != $fusion2 || $nouveauClub != $fusion3)) {
      $min = $finSaison - $anneeFusion;
    }

    for ($i = $min; $i < $max; $i = $i + 2) {
    ?>
      <tr>
        <td class="saisonImpaire" width="20%"> Saison </td>
        <td class="saisonImpaireNG" width="80%"> <?php $saisonRetro = $finSaison - $i;
                                                  echo ${"terr" . $saisonRetro}; ?> </td>
      </tr>
      <tr>
        <?php

        $debut = ($debutSaison - $i);
        $fin = $finSaison - $i;
        if ($mode == "smart")
          echo   " <td class=\"saisonImpaire\"> $debut  $fin</td>";
        else
          echo  " <td class=\"saisonImpaire\">$debut - $fin</td>";
        ?>
        <td class="saisonImpaireNG"> <?php echo ${"france" . $saisonRetro}; ?>
        </td>
      </tr>
      <tr>
        <td class="saisonImpaire">&nbsp;</td>
        <td class="saisonImpaireNG">&nbsp;</td>
      </tr>

      <!--Saison N-2 -->
      <tr>
        <td class="saisonPaire center"> Saison </td>
        <td class="saisonPaireNG"> <?php $saisonRetro = $finSaison - ($i + 1);
                                    echo ${"terr" . $saisonRetro}; ?> </td>
      </tr>
      <tr>
        <?php

        $debut = $debutSaison - ($i + 1);
        $fin = $finSaison - ($i + 1);
        if ($mode == "smart")
          echo  "<td class=\"saisonPaire center\"> $debut $fin </td>";
        else
          echo "<td class=\"saisonPaire\"> $debut - $fin </td>";
        ?>
        <td class="saisonPaireNG"> <?php echo ${"france" . $saisonRetro}; ?> </td>
      </tr>
      <tr>
        <td class="saisonPaire">&nbsp;</td>
        <td class="saisonPaireNG">&nbsp;</td>
      </tr>

    <?php

    }
    ?>
  </table>
  <br><br><br>
  </html>