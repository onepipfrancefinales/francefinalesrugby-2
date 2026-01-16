<!--
<body bgcolor="#FFFFFF" text="#000000">
-->
<?php



// Traitement des données reçues
if ($champLigue == 10){
  $cptePhp = "phpau";
 $titre = "Auvergne Rhône Alpes";}
elseif ($champLigue == 19){
  $cptePhp = "phpca";
 $titre = "Nouvelle Aquitaine";}
elseif ($champLigue == 20){
  $titre = "Occitanie";
  $cptePhp = "phpab";}
elseif ($champLigue == 11 || $champLigue == 12 || $champLigue == 13 || $champLigue == 16|| $champLigue == 21) {
  $cptePhp = "phppl";
   if ($champLigue == 11)
     $titre = "Bourgogne France Comté";
     elseif ($champLigue == 12)
     $titre = "Bretagne";
     elseif ($champLigue == 13)
     $titre = "Centre val de Loire";
     elseif ($champLigue == 16)
     $titre = "Haut de France";
     elseif ($champLigue == 21)
     $titre = "Pays de la Loire";
   
    }
elseif ($champLigue == 15 || $champLigue == 17 ||  $champLigue == 18 || $champLigue == 22) {
  $cptePhp = "phpidf";
if ($champLigue == 15)
     $titre = "Grand Est";
      elseif ($champLigue == 17)
     $titre = "Ile de France";
     elseif ($champLigue == 18)
      $titre = "Normandie";
     elseif ($champLigue == 22)
     $titre = "Provence Alpes Côte d'Azur";
    }

?>
<p class="colorRed size7 bold">
  Concours pronostics <br>
ligue <?php echo $titre; ?></p>


<!--
<object data="/Test/<?php echo $cptePhp; ?>/prono/index.php?champLigue=<?php echo $champLigue; ?>"
  height="1500" width="100%">
</object>
-->

<object data="/Phpleague/<?php echo $cptePhp; ?>/prono/index.php?champLigue=<?php echo $champLigue; ?>"
  height="1500" width="100%">
</object>

  


    

