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
$nouvelleEntite = $statut;
//echo "fin europe :".  "<br>";
//****************     Palmares équipes Unes      *******************************

$table = "bdequipe1";
$categorie = "A";
//echo "nomChampion : ".$clubFusion;
//echo "test equipe1 : ".affichageCategorie($nomChampion, $clubNom1, $clubNom2, $clubNom3, $clubNom4, $id_equipe, $table, $categorie, $bdd);
if (affichageCategorie($nomChampion, $clubNom1, $clubNom2, $clubNom3, $clubNom4, $id_equipe, $table, $categorie, $bdd)) {
  if ($smart == true or $mode == "smart")
    echo "<h2 class=\"size4\"> Equipe Une </h2>";
  else {
?>
    <div id="palmares" class="center">
      <?php echo "<h2> Equipe Une </h2>";  ?>
    </div>
<?php
  }
} ?>
<div id="palmares" class="center">
  <?php
  palmaresParClub($nomChampion, $id_equipe, $table, $categorie, $bdd);
/*
echo "nomChampion : ".$nomChampion. "<br>";
echo "id_equipe : ".$id_equipe. "<br>";
echo "nouvelleEntite : ".$nouvelleEntite. "<br>";
*/

  if ($nouvelleEntite == $id_equipe) {
    fusionDeClubsEquipe($statut, "bdequipe1", $categorie, $bdd);
    echo "<div id=\"palmares\" class=\"center\">";

    foreach ($tabPalmEquipe1 as $valeur) {
      echo ($valeur . "<br>");
    }
    echo "<div>";
  }
      ?>
</div>

<?php
//****************     Palmares équipes II      *******************************

$table = "bdequipe2";
$categorie = "B";
////echo "test equipe2 : ".affichageCategorie($nomChampion, $clubNom1, $clubNom2, $clubNom3, $clubNom4, $id_equipe, $table, $categorie, $bdd);
 if (affichageCategorie($nomChampion, $clubNom1, $clubNom2, $clubNom3, $clubNom4, $id_equipe, $table, $categorie, $bdd)) {
  if ($smart == true or $mode == "smart")
    echo "<h2 class=\"size4\"> Equipe II </h2>";
  else {
    ?>
     <div id="palmares" class="center">
      <?php  echo "<h2> Equipe II </h2>"; ?>
     </div>
     <?php
  }
} ?>
<div id="palmares" class="center">
  <?php
  palmaresParClub($nomChampion, $id_equipe, $table, $categorie, $bdd);

  if ($nouvelleEntite == $id_equipe) {
    fusionDeClubsEquipe($statut, "bdequipe2", $categorie, $bdd);
    echo "<div id=\"palmares\" class=\"center\">";

    foreach ($tabPalmEquipe1 as $valeur) {
      echo ($valeur . "<br>");
    }
    echo "<div>";
  } ?>
</div>

<?php
//****************     Palmares challenges      *******************************

$table = "bdchallenges";
$categorie = "C";
//echo "test challenge : ".affichageCategorie($nomChampion, $clubNom1, $clubNom2, $clubNom3, $clubNom4, $id_equipe, $table, $categorie, $bdd);

if (affichageCategorie($nomChampion, $clubNom1, $clubNom2, $clubNom3, $clubNom4, $id_equipe, $table, $categorie, $bdd)) {
  if ($smart == true or $mode == "smart")
    echo "<h2 class=\"size4\"> Challenges Nationaux </h2>";
  else {
?>
    <div id="palmares" class="center">
  <?php  echo "<h2> Challenges Nationaux </h2>"; ?>
    </div>
    <?php
  }
} ?>

<div id="palmares" class="center">
  <?php
  palmaresParClub($nomChampion, $id_equipe, $table, $categorie, $bdd);

  if ($nouvelleEntite == $id_equipe) {
    fusionDeClubsEquipe($statut, 'bdchallenges', $categorie, $bdd);
    echo "<div id=\"palmares\" class=\"center\">";

    foreach ($tabPalmEquipe1 as $valeur) {
      echo ($valeur . "<br>");
    }
    echo "<div>";
  } ?>
</div>

<?php
//****************     Palmares Reichels & Juniors      *******************************

$table = "bdjeunes";
$categorie = "D";
//echo "test juniors : ".affichageCategorie($nomChampion, $clubNom1, $clubNom2, $clubNom3, $clubNom4, $id_equipe, $table, $categorie, $bdd);
if (affichageCategorie($nomChampion, $clubNom1, $clubNom2, $clubNom3, $clubNom4, $id_equipe, $table, $categorie, $bdd)) {
  if ($smart == true or $mode == "smart")
    echo "<h2 class=\"size4\"> Reichels & Juniors </h2>";
  else {
    ?>
<div id="palmares" class="center">
  <?php  echo "<h2> Reichels & Juniors </h2>"; ?>
</div>
<?php
  }
} ?>
<div id="palmares" class="center">
  <?php 
  palmaresParClub($nomChampion, $id_equipe, $table, $categorie, $bdd);

  if ($nouvelleEntite == $id_equipe) {
    fusionDeClubsEquipe($statut, "bdjeunes", $categorie, $bdd);
    echo "<div id=\"palmares\" class=\"center\">";
    foreach ($tabPalmEquipe1 as $valeur) {
      echo ($valeur . "<br>");
    }
    echo "<div>";
  }
  ?>
</div>
<?php

//****************     Palmares cadets      *******************************

$table = "bdjeunes";
$categorie = "E";
//echo "test cadets : ".affichageCategorie($nomChampion, $clubNom1, $clubNom2, $clubNom3, $clubNom4, $id_equipe, $table, $categorie, $bdd);

if (affichageCategorie($nomChampion, $clubNom1, $clubNom2, $clubNom3, $clubNom4, $id_equipe, $table, $categorie, $bdd)) {
  if ($smart == true or $mode == "smart")
    echo "<h2 class=\"size4\"> Cadets </h2>";
  else {
    ?>
<div id="palmares" class="center">
  <?php  echo "<h2> Cadets </h2>"; ?>
</div>
<?php
  }
} ?>
<div id="palmares" class="center">
  <?php
  palmaresParClub($nomChampion, $id_equipe, $table, $categorie, $bdd);

if ($nouvelleEntite == $id_equipe) {
    fusionDeClubsEquipe($statut, "bdjeunes", $categorie, $bdd);
    echo "<div id=\"palmares\" class=\"center\">";

    foreach ($tabPalmEquipe1 as $valeur) {
      echo ($valeur . "<br>");
    }
    echo "<div>";
    }
  ?>
</div>
<br><br><br>
<br>
<hr width="70%" style="color:red; height:1px ">