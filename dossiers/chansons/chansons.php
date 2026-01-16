 
        <?php
echo "chanson : ".$chanson;


        echo "<br>";
        include "introChansons.php";
        echo "<br>";
        echo "<hr>";
        echo "<hr>";
        echo "<br>";

        switch ($chanson) {
          case "51j":
            require 'titres/51JeTaime.htm';
            break;
          case "bal":
            require 'titres/baliBalo.htm';
            break;
          case "cdl":
            require "titres/chevaliersDeLaTableRonde.htm";
            break;
          case "fan":
            require "titres/fanchon.htm";
            break;
          case "ieu":
            require "titres/ilEstUnCoinDeFrance.htm";
            break;
          case "ldd":
             require "titres/laDigueDuCul.htm";
            break;
          case "lar":
            require "titres/larirette.htm";
            break;
          case "lsa":
            require "titres/laSalope.htm";
            break;
            //------------------------------------------------------
          case "fdm":
            require "titres/fetesDeMauleon.htm";
            break;
          case "lco":
            require "titres/copainsDabord.htm";
            break;
          case "lch":
            require "titres/leChasseur.htm";
            break;
          case "iws":
            require "titres/iWillSurvive.htm";
            break;
          case "lld":
            require "titres/lesLacsDuConnemara.htm";
            break;
          }
       ?>