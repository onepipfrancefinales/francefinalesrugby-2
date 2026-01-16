<?php

require ("fonctions.php");
require("../config.php");

ouverture ();

if (!isset($gr_champ) or empty($gr_champ))
   {
    $resultat=$idconnect->query("SELECT phppl_gr_championnats.nom
								 FROM phppl_gr_championnats 
								 WHERE phppl_gr_championnats.activ_prono = '1' 
								 ORDER by id desc");

    $row= mysqli_fetch_array($resultat);
     
    $gr_champ = $row[0]; 
  
   }
  ?>
