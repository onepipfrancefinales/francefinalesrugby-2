<?php
if (isset($_GET['pageRecords'])) $pageRecords = $_GET['pageRecords'];
?>






  <table width="1000" class="borderWidth1 marginAuto borderColorBlack">
   
  <tr bgcolor="#0099FF" bordercolor="#000000">
    <td colspan="8" height="88" class="center size7 bold colorWhite styleCursive">Les records</td>
  </tr>
  <tr class="backgroundWhite" bordercolor="#000000">
    <td colspan="8" height="40"><p class="size4 ">Prochainement</p>
    </td>
  </tr>
  <!--  
  <tr bgcolor="#FFFFFF">
      <td colspan="2" valign="top" height="24">

        <?php //include("hautRecords.php");            ?>

      </td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td width="200" valign="top" height="81">
-->    
            <?php // include("gauche.php"); ?>
         
     
      </td>
      <td width="800" height="81" valign="top">

        <?php
        /*
        //echo "nombre de finales :";
        //echo "nombre de champions :";
        //echo "nombre d'édition :";

        require '../../connect/connexion1.php';
        require 'fonctions.php';

        if ($pageRecords == "nbreEditions")
          require 'nbre_editions.php';
        elseif ($pageRecords == "champions")
          require 'champions.php';
        elseif ($pageRecords == "participations")
          require 'participations.php';
        elseif ($pageRecords == "queFinaliste")
          require 'queFinaliste.php';
        elseif ($pageRecords == "series")
          require 'series.php';
        elseif ($pageRecords == "joueurs_titres")
          require 'joueurs_titres.php';
        elseif ($pageRecords == "nbre_titres")
          require 'nbre_titres.php';
        elseif ($pageRecords == "jamaisGagne")
          require 'jamaisGagne.php';
        elseif ($pageRecords == "entraineurs")
          require 'entraineurs.php';
        elseif ($pageRecords == "capitaines")
          require 'capitaines.php';
          */
        ?>
      </td>
    </tr>
  </table>

