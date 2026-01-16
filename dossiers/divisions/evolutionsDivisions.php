
        <?php

        include "sommaireDiv.php";

        if ($type == "seniors1")
          include "evolDivSeniors1.php";
        else if ($type == "feminines")
          include "evolDivFeminines.php";
        else if ($type == "jeunes")
          include "evolDivJeunes.php";
        else if ($type == "espoirs")
          include "evolDivEspoirs.php";
        else if ($type == "seniors2")
          include "evolDivSeniors2.php";

        ?>
