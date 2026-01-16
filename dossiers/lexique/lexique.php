       
        <?php //require 'sommaire.php';
        if ($sommaire == 1) {
          echo "<br/>";
          include "tabDesLettres.php";
          include "appelLettre.php";
        } elseif ($sommaire == 2)
          include("phrases_celebres.htm");
        elseif ($sommaire == 3)
          include "citation.htm";
        elseif ($sommaire == 4)
          include "expr_mediatiques.htm";
        ?>
      

