

  <?php
  if ($smart == 1 or $mode == "smart") 
    echo "<h1 class=\"size5\">Palmarès</h1>";
  else
    echo "<h1>Palmarès</h1>";
 


  if ($smart == 1 or $mode == "smart")
    require("../../connect/connexion1.php");
  else
    require("../connect/connexion1.php");

//echo "idEquipe :".$id_equipe; echo "<br>";
//echo "europe :".  "<br>";
  //****************     Palmares européens      *******************************
 
  $table = "bdeurope";
  nbreTitreEU($id_equipe, $bdd);
  if ($nombreTitreEU > 0) {
    if ($smart == true or $mode == "smart")
      echo "<h2 class=\"size4\"> Titres Européens </h2>";
    else

      echo "<h2> Titres Européens </h2>";
  }
    
  ?>
  <div id="palmares" class="center">
    <?php palmaresEU($id_equipe, $bdd);  ?>
  </div>

  <?php
  //echo "fin europe :".  "<br>";
  //****************     Palmares équipes Unes      *******************************
  //echo "equipe1 :".  "<br>";
  $table = "bdequipe1";
  $categorie = "A";


/*
echo "nomChampion1 : ".$nomChampion.  "<br>";
echo "id_equipe1 : ".$id_equipe.  "<br>";

*/

  nbreTitre($nomChampion, $id_equipe, $table, $categorie, $bdd);
  $nbreTitreChampion = $nombreTitre;

//echo "nbreTitreChampion".$nbreTitreChampion.  "<br>";;



  nbreTitre($clubNom1, $id_equipe,$table, $categorie, $bdd);
  $nbreTitreFusion1 = $nombreTitre;

  nbreTitre($clubNom2, $id_equipe, $table, $categorie, $bdd);
  $nbreTitreFusion2 = $nombreTitre;

  nbreTitre($clubNom3, $id_equipe, $table, $categorie, $bdd);
  $nbreTitreFusion3 = $nombreTitre;

  nbreTitre($clubNom4, $id_equipe, $table, $categorie, $bdd);
  $nbreTitreFusion4 = $nombreTitre;

//echo "equipe1-fin :".  "<br>";

  if ($nbreTitreChampion > 0 or $nbreTitreFusion1 > 0 or $nbreTitreFusion2 > 0 or $nbreTitreFusion3 > 0 or $nbreTitreFusion4 > 0) {
    if ($smart == true or $mode == "smart")
      echo "<h2 class=\"size4\"> Equipe Une </h2>";
    else {
    ?>
    <div id="palmares" class="center">
    <?php  echo "<h2> Equipe Une </h2>";  ?>
      </div>
      <?php
  } 
 } ?>
  <div id="palmares" class="center">
    <?php
 //   palmares($nomChampion, $table, $categorie, $bdd);
//    echo "-----"."<br>";
    palmaresParClub($nomChampion, $id_equipe, $table, $categorie, $bdd);
    fusionDeClubsEquipe1($nouveauClub, $nouveauClub, $bdd); ?>
  </div>

  <?php
  //****************     Palmares équipes II      *******************************

  $table = "bdequipe2";
  $categorie = "B";
  nbreTitre($nomChampion, $id_equipe, $table, $categorie, $bdd);
  $nbreTitreChampion = $nombreTitre;

  nbreTitre($clubNom1, $id_equipe,$table, $categorie, $bdd);
  $nbreTitreFusion1 = $nombreTitre;

  nbreTitre($clubNom2, $id_equipe,$table, $categorie, $bdd);
  $nbreTitreFusion2 = $nombreTitre;

  nbreTitre($clubNom3, $id_equipe,$table, $categorie, $bdd);
  $nbreTitreFusion3 = $nombreTitre;

  nbreTitre($clubNom4, $id_equipe,$table, $categorie, $bdd);
  $nbreTitreFusion4 = $nombreTitre;

  if ($nbreTitreChampion > 0 or $nbreTitreFusion1 > 0 or $nbreTitreFusion2 > 0 or $nbreTitreFusion3 > 0 or $nbreTitreFusion4 > 0) {
    if ($smart == true or $mode == "smart")
      echo "<h2 class=\"size4\"> Equipe II </h2>";
    else
      echo "<h2> Equipe II </h2>";
  } ?>
  <div id="palmares" class="center">
    <?php 
    // palmares($nomChampion, $table, $categorie, $bdd); 
    // echo "-----"."<br>";
    palmaresParClub($nomChampion, $id_equipe, $table, $categorie, $bdd);
    ?>
    <?php fusionDeClubsEquipe2($nouveauClub, $nouveauClub, $bdd); ?>
  </div>

  <?php
  //****************     Palmares challenges      *******************************
  $table = "bdchallenges";
  $categorie = "C";
  nbreTitre($nomChampion, $id_equipe, $table, $categorie, $bdd);
  $nbreTitreChampion = $nombreTitre;

  nbreTitre($clubNom1, $id_equipe, $table, $categorie, $bdd);
  $nbreTitreFusion1 = $nombreTitre;

  nbreTitre($clubNom2, $id_equipe, $table, $categorie, $bdd);
  $nbreTitreFusion2 = $nombreTitre;

  nbreTitre($clubNom3, $id_equipe, $table, $categorie, $bdd);
  $nbreTitreFusion3 = $nombreTitre;

  nbreTitre($clubNom4, $id_equipe, $table, $categorie, $bdd);
  $nbreTitreFusion4 = $nombreTitre;

  if ($nbreTitreChampion > 0 or $nbreTitreFusion1 > 0 or $nbreTitreFusion2 > 0 or $nbreTitreFusion3 > 0 or $nbreTitreFusion4 > 0) {
    if ($smart == true or $mode == "smart")
      echo "<h2 class=\"size4\"> Challenges Nationaux </h2>";
    else
      echo "<h2> Challenges Nationaux </h2>";
  } ?>
  <div id="palmares" class="center">
    <?php 
    //  palmares($nomChampion, $table, $categorie, $bdd); 
    // echo "-----"."<br>";
palmaresParClub($nomChampion, $id_equipe, $table, $categorie, $bdd); ?>
  </div>

  <?php
  //****************     Palmares Reichels & Juniors      *******************************
  $table = "bdjeunes";
  $categorie = "D";
   nbreTitre($nomChampion, $id_equipe, $table, $categorie, $bdd);
  $nbreTitreChampion = $nombreTitre;

  nbreTitre($clubNom1, $id_equipe, $table, $categorie, $bdd);
  $nbreTitreFusion1 = $nombreTitre;

  nbreTitre($clubNom2, $id_equipe, $table, $categorie, $bdd);
  $nbreTitreFusion2 = $nombreTitre;

  nbreTitre($clubNom3, $id_equipe, $table, $categorie, $bdd);
  $nbreTitreFusion3 = $nombreTitre;

  nbreTitre($clubNom4, $id_equipe, $table, $categorie, $bdd);
  $nbreTitreFusion4 = $nombreTitre;

  if ($nbreTitreChampion > 0 or $nbreTitreFusion1 > 0 or $nbreTitreFusion2 > 0 or $nbreTitreFusion3 > 0 or $nbreTitreFusion4 > 0) {
    if ($smart == true or $mode == "smart")
      echo "<h2 class=\"size4\"> Reichels & Juniors </h2>";
    else
      echo "<h2> Reichels & Juniors </h2>";
  } ?>
  <div id="palmares" class="center">
  <?php palmaresParClub($nomChampion, $id_equipe, $table, $categorie, $bdd);  
 // echo "----------"; echo "<br>";
 // $table = "bdjeunesligne";
 // palmaresParClubLigne($nomChampion, $id_equipe, $table, $categorie, $bdd); ?>
  
  
  
  <?php // palmares($nomChampion, $table, $categorie, $bdd); ?>
    <?php fusionDeClubsJeunes($nouveauClub, $nouveauClub, $bdd); ?>
  </div>

  <?php
  //****************     Palmares cadets      *******************************
  $table = "bdjeunes";
  $categorie = "E";
  
 nbreTitre($nomChampion, $id_equipe, $table, $categorie, $bdd);
  $nbreTitreChampion = $nombreTitre;

  nbreTitre($clubNom1, $id_equipe, $table, $categorie, $bdd);
  $nbreTitreFusion1 = $nombreTitre;

  nbreTitre($clubNom2, $id_equipe, $table, $categorie, $bdd);
  $nbreTitreFusion2 = $nombreTitre;

  nbreTitre($clubNom3, $id_equipe, $table, $categorie, $bdd);
  $nbreTitreFusion3 = $nombreTitre;

  nbreTitre($clubNom4, $id_equipe, $table, $categorie, $bdd);
  $nbreTitreFusion4 = $nombreTitre;

  if ($nbreTitreChampion > 0 or $nbreTitreFusion1 > 0 or $nbreTitreFusion2 > 0 or $nbreTitreFusion3 > 0 or $nbreTitreFusion4 > 0) {
    if ($smart == true or $mode == "smart")
      echo "<h2 class=\"size4\"> Cadets </h2>";
    else
      echo "<h2> Cadets </h2>";
  } ?>
  <div id="palmares" class="center">
    <?php 
    palmaresParClub($nomChampion, $id_equipe, $table, $categorie, $bdd);  
  // echo "----------"; echo "<br>";
  // $table = "bdjeunesligne";
  // palmaresParClubLigne($nomChampion, $id_equipe, $table, $categorie, $bdd); ?>
  </div>
  <br><br>

  <div id="palmares" class="center">
  
  
  </div>

  <br>
  <?php //fusionDeClubs ($nouveauClub, $nouveauClub, $bdd);
  ?>
  <br>
  <hr width="70%" style="color:red; height:1px ">



