<?php
require "../../connect/connexion1.php";
require "fonctionsBrennus.php";

//nbreEdition($bdd);
villes($bdd);
stades($bdd);
//test($bdd);
//stadesParVille('Toulouse',3, $bdd);
//listeSaisonsStade($idStade,$countSaisonStade, $bdd);
//champFrance($bdd);
?>


<html>
<head>
<title>Bouclier de Brennus : Les stades</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link type="text/css" rel="stylesheet" href="../../ligne1.css">

</head>

<body class="backgroundBlack" text="#000000">

<table width="1000" class="borderWidth1 marginAuto borderColorBlack">
  <tr> 
    <td bgcolor="#FFFFFF" valign="top"> 
      
        <?php
      
      // echo "nombre d'édition : ". $nbreEdition;echo "<br>";
      //  echo "nombre de villes :".$countVilles;echo "<br>";
      //    echo "nombre de stades :".$countStades;echo "<br>";
      //  echo "liste des villes : ";echo "<br>";
      //  foreach ($tabVilles as $ville) {
      // echo $ville;echo "<br>";
      ///  }
     
     
      //echo "liste des stades : ";echo "<br>";
      //   foreach ($tabStades as $stade) {
      // echo $stade;echo "<br>";
      //  }
     /*
     echo "**************************";echo "<br>";
     echo $ville0.$countVille0;echo "<br>";
     echo $ville1.$countVille1;echo "<br>";
     echo $ville2.$countVille2;echo "<br>";
     echo $ville3.$countVille3;echo "<br>";
     echo $ville4.$countVille4;echo "<br>";
     echo $ville5.$countVille5;echo "<br>";
     echo $ville6.$countVille6;echo "<br>";
     echo $ville7.$countVille7;echo "<br>";
     echo $ville8.$countVille8;echo "<br>";
     echo $ville9.$countVille9;echo "<br>";
     echo $ville10.$countVille10;echo "<br>";
     echo $ville11.$countVille11;echo "<br>";
     echo $ville12.$countVille12;echo "<br>";
     echo $ville13.$countVille13;echo "<br>";
     echo $ville14.$countVille14;echo "<br>";
     echo "**************************";
     */
    include("haut.php");
    
        
   
   // include("stades.php");
    include("stades_copy.php");
    ?>
    </td>
  </tr>
  </table>
</body>
<footer>
  <?php include "piedDePage.php";?>
</footer>
</html>
