   <br><br><br><br>
   <h2 class="styleArial"> Nous avons trouvé <?php echo $nbreDeClub; ?> clubs évoluant ou ayant évolué à
           <br>
           <span class="colorRed size6"> <?php echo ucFirst($chaine); ?></span>.
   </h2>

   <br> <br> <br>
   <p class="colorBlack styleArial size4"> Vous pouvez affiner votre recherche en sélectionnant
           <br> une équipe présente ci-dessous
   </p>
   <br> <br> <br>
   <?php



        for ($i = 0; $i < $nbreDeClub; $i++) {

                $logo[$i] = substr($tabId[$i], 2, 5);
                if ($tabType[$i] == "F") $complement = " (féminines)";

        ?>
           <div class="afficheEquipe styleArial bold center">

                   <?php
                        if ($mode == "smart")
                                $adresse = "../../images/blasons200_200";
                        else
                                $adresse = "../images/blasons200_200";

                        echo "<a href=\"pageclub00.php?champion=$tabId[$i]\"><img src=\"$adresse/$logo[$i].gif\" height=\"25\" width=\"25\">
        <a href=\"pageclub00.php?champion=$tabId[$i]\" target=\"_top\">$tabClubs[$i] $complement</a>"; ?>
           </div>
   <?php     }


        ?>
        <br>
        <br><br>