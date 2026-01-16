<script>
  function MM_jumpMenu(targ, selObj, restore) { //v3.0
    eval(targ + ".location='" + selObj.options[selObj.selectedIndex].value + "'");
    if (restore) selObj.selectedIndex = 0;
  }
</script>
<html>

<head>
  <title>Untitled Document</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <link type="text/css" rel="stylesheet" href="suiviFinales.css" />
  <link rel="stylesheet" type="text/css" href="../../ligne1.css">
</head>

<?php
$adresse = "../../00copies_mel/liste/franceABdebutDeSaison.php?suiviLigue=";
?>

<fieldset class="fieldsetG">
  <legend class="legendG">
    <a href="franceABGenererBdd.php"> Inserer en bdd (toutes les tables)</a>
</fieldset>

<fieldset class="fieldsetG">
  <legend class="legendG">
    Présentation des equipes engagées en championnat pour la saison 2025-2026 </legend><br>
  <select class="inputG" name="select" onChange="MM_jumpMenu('parent',this,0)" size="1" title="Recherche par ligue">
    <option selected>Par ligue</option>
    <option value="<?php echo $adresse; ?>equipesARA">Auvergne Rhône Alpes</option>
    <option value="<?php echo $adresse; ?>equipesARA&suiviComite=1010">ARA -- Alpes</option>
    <option value="<?php echo $adresse; ?>equipesARA&suiviComite=1013">ARA -- Auvergne</option>
    <option value="<?php echo $adresse; ?>equipesARA&suiviComite=1022">ARA -- Drome Ardéche</option>
    <option value="<?php echo $adresse; ?>equipesARA&suiviComite=1028">ARA -- Lyonnais</option>
    <option value="<?php echo $adresse; ?>equipesBFC">Bourgogne Franche Comté</option>
    <option value="<?php echo $adresse; ?>equipesBRE">Bretagne</option>
    <option value="<?php echo $adresse; ?>equipesCVL">Centre Val de Loire</option>
    <option value="<?php echo $adresse; ?>equipesGES">Grand Est</option>
    <option value="<?php echo $adresse; ?>equipesHDF">Hauts de France</option>
    <option value="<?php echo $adresse; ?>equipesIDF">Ile de France</option>
    <option value="<?php echo $adresse; ?>equipesNOR">Normandie</option>
    <option value="<?php echo $adresse; ?>equipesNAQ">Nouvelle Aquitaine</option>
    <option value="<?php echo $adresse; ?>equipesNAQ&suiviComite=1914">NAQ -- Béarn</option>
    <option value="<?php echo $adresse; ?>equipesNAQ&suiviComite=1919">NAQ -- Cote basque Landes</option>
    <option value="<?php echo $adresse; ?>equipesNAQ&suiviComite=1920">NAQ -- Cote d"Argent</option>
    <option value="<?php echo $adresse; ?>equipesNAQ&suiviComite=1927">NAQ -- Limousin</option>
    <option value="<?php echo $adresse; ?>equipesNAQ&suiviComite=1932">NAQ -- Périgord Agenais</option>
    <option value="<?php echo $adresse; ?>equipesNAQ&suiviComite=1933">NAQ -- Poitou Charente</option>
    <option value="<?php echo $adresse; ?>equipesOCC">Occitanie</option>
    <option value="<?php echo $adresse; ?>equipesOCC&suiviComite=2012">OCC -- Armagnac Bigorre</option>
    <option value="<?php echo $adresse; ?>equipesOCC&suiviComite=2026">OCC -- Languedoc</option>
    <option value="<?php echo $adresse; ?>equipesOCC&suiviComite=2029">OCC -- Midi Pyrénées</option>
    <option value="<?php echo $adresse; ?>equipesOCC&suiviComite=2035">OCC -- Pays catalan</option>
    <option value="<?php echo $adresse; ?>equipesPDL">Pays de la Loire</option>
    <option value="<?php echo $adresse; ?>equipesPCA">Provence Alpes Côte d'Azur</option>
  </select>
</fieldset>
<br>
<br>

<?php

if (isset($_GET['suiviLigue'])) $suiviLigue = $_GET['suiviLigue'];
else  $suiviLigue = "";
if (isset($_GET['suiviComite'])) $suiviComite = $_GET['suiviComite'];
else  $suiviComite = "";



if ($suiviLigue == "equipesARA") {
  $phpEquipes = "phpau_equipes";
  $phpClubs = "phpau_clubs";
  $indiceLigue = 10;
} elseif ($suiviLigue == "equipesBFC") {
  $phpEquipes = "phppl_equipes";
  $phpClubs = "phppl_clubs";
  $indiceLigue = 11;
} elseif ($suiviLigue == "equipesBRE") {
  $phpEquipes = "phppl_equipes";
  $phpClubs = "phppl_clubs";
  $indiceLigue = 12;
} elseif ($suiviLigue == "equipesCVL") {
  $phpEquipes = "phppl_equipes";
  $phpClubs = "phppl_clubs";
  $indiceLigue = 13;
} elseif ($suiviLigue == "equipesGES") {
  $phpEquipes = "phpidf_equipes";
  $phpClubs = "phpidf_clubs";
  $indiceLigue = 15;
} elseif ($suiviLigue == "equipesHDF") {
  $phpEquipes = "phppl_equipes";
  $phpClubs = "phppl_clubs";
  $indiceLigue = 16;
} elseif ($suiviLigue == "equipesIDF") {
  $phpEquipes = "phpidf_equipes";
  $phpClubs = "phpidf_clubs";
  $indiceLigue = 17;
} elseif ($suiviLigue == "equipesNOR") {
  $phpEquipes = "phpidf_equipes";
  $phpClubs = "phpidf_clubs";
  $indiceLigue = 18;
} elseif ($suiviLigue == "equipesNAQ") {
  $phpEquipes = "phpca_equipes";
  $phpClubs = "phpca_clubs";
  $indiceLigue = 19;
} elseif ($suiviLigue == "equipesOCC") {
  $phpEquipes = "phpab_equipes";
  $phpClubs = "phpab_clubs";
  $indiceLigue = 20;
} elseif ($suiviLigue == "equipesPDL") {
  $phpEquipes = "phppl_equipes";
  $phpClubs = "phppl_clubs";
  $indiceLigue = 21;
} elseif ($suiviLigue == "equipesPCA") {
  $phpEquipes = "phpidf_equipes";
  $phpClubs = "phpidf_clubs";
  $indiceLigue = 22;
}


echo "suivi ligue : " . $suiviLigue;
echo "<br>";
echo "suivi comite : " . $suiviComite;
echo "<br>";
echo "phpEquipes : " . $phpEquipes;
echo "<br>";
echo "phpClubs : " . $phpClubs;
echo "<br>";

require('../../connect/connexion6.php');


?>


<table width="500" border="1" cellspacing="0" bordercolor="#000000" align="center">
  <tr>
    <td colspan="2" bgcolor="#FFCC33"> <font size="5" face="Arial, Helvetica, sans-serif"><b> Championnats régionaux</b></font> </td>
  </tr>
</table>

<?php
//phpab_clubs.nom
$phpClubs_nom = $phpClubs . ".nom";
//phpab_clubs.id
$phpClubs_id = $phpClubs . ".id";
//phpab_equipes.id_club
$phpEquipes_id = $phpEquipes . ".id";


// Compétitions régionales
$tabCompetitions = array('170', '180', '190');

foreach ($tabCompetitions as $competition) {

  if ($competition == 170) {
    $debut = ($indiceLigue * 10) . "171";
    $fin = ($indiceLigue * 10) . "179";
    $nomDivision = "Régionale 1";
  }
  if ($competition == 180) {
    $debut = ($indiceLigue * 10) . "181";
    $fin = ($indiceLigue * 10) . "189";
    $nomDivision = "Régionale 2";
  }

  if ($competition == 190) {
    $debut = ($indiceLigue * 10) . "191";
    $fin = ($indiceLigue * 10) . "199";
    $nomDivision = "Régionale 3";
  }

  ${"tabClubsReg" . $competition} = array();

  $reponse = $bdd->query("SELECT $phpClubs_nom
								FROM $phpEquipes, $phpClubs
								WHERE $phpEquipes_id = $phpClubs_id
                AND id_champ between  '$debut' AND '$fin'
                AND $phpEquipes_id LIKE  '$suiviComite%%%'
                ");

  while ($row = $reponse->fetch()) {
    ${"tabClubsReg" . $competition}[] = $row[0];
  }
?>

  <br><br>
  <table width="500" border="1" align="center">
    <tr>
      <td colspan="2"><font face="Arial, Helvetica, sans-serif" size="4"><b><?php echo $nomDivision; ?></b></font></td>
    </tr><?php foreach (${"tabClubsReg" . $competition} as ${"clubReg" . $competition}) {
            echo "<tr align=\"center\">";
            echo "<td width=\"70%\">" . "<font size =\"3\" face=\"Arial, Helvetica, sans-serif\">" . ${"clubReg" . $competition} . "</font>" . "</td>";
            echo "<td width=\"30%\">" . "<font size =\"3\" face=\"Arial, Helvetica, sans-serif\">" . $nomDivision . "</font>". "</td>";
            echo "</tr>";
          }
          ?>
  </table>
<?php
}
?>

<br><br>

<table width="500" border="1" cellspacing="0" bordercolor="#000000" align="center">
  <tr align="center">
    <td colspan="2" bgcolor="#FFCC33">
      <font size="5" face="Arial, Helvetica, sans-serif"><b>Championnats nationaux</b></font></td>
  </tr>
</table>


<?php
/*********************** CHAMPIONNATS NATIONAUX  ********************* */

$indiceLigueDebut =     $indiceLigue * 100000;
$indiceLigueFin = ($indiceLigue + 1) * 100000;

$tabCompetitions = array('160', '150', '140', '135', '130', '120', '110');

foreach ($tabCompetitions as $competition) {

  if ($competition == 110) {
    $debut = "990110";
    $fin = "990115";
    $nomCompetition = "Top 14";
  } else if ($competition == 120) {
    $debut = "990120";
    $fin = "990125";
    $nomCompetition = "Pro D2";
  } else if ($competition == 130) {
    $debut = "990130";
    $fin = "990132";
    $nomCompetition = "Nationale";
  } else if ($competition == 135) {
    $debut = "990135";
    $fin = "990138";
    $nomCompetition = "Nationale 2";
  } else if ($competition == 140) {
    $debut = "990141";
    $fin = "990149";
    $nomCompetition = "Fédérale 1";
  } else if ($competition == 150) {
    $debut = "990151";
    $fin = "990159";
    $nomCompetition = "Fédérale 2";
  } else if ($competition == 160) {
    $debut = "991161";
    $fin = "992169";
    $nomCompetition = "Fédérale 3";
  }

  // traitement
  //echo "debut :".$indiceLigueDebut;echo "<br>";
  //echo "fin : ".$indiceLigueFin;echo "<br>";
  ${"tabClubsReg" . $competition} = array();

  if ($competition == 160) {

    $reponse = $bdd->query("SELECT phpfed3NE_clubs.nom
								FROM phpfed3NE_equipes, phpfed3NE_clubs
								WHERE phpfed3NE_equipes.id_club = phpfed3NE_clubs.id
                AND phpfed3NE_equipes.id_champ between  '$debut' AND '$fin'
                AND phpfed3NE_equipes.id_club between '$indiceLigueDebut' AND '$indiceLigueFin'
                AND phpfed3NE_equipes.id_club LIKE  '$suiviComite%%%'
               ");
  } else {
    $reponse = $bdd->query("SELECT phppro_clubs.nom
								FROM phppro_equipes, phppro_clubs
								WHERE phppro_equipes.id_club = phppro_clubs.id
                AND phppro_equipes.id_champ between  '$debut' AND '$fin'
                AND phppro_equipes.id_club between '$indiceLigueDebut' AND '$indiceLigueFin'
                AND phppro_equipes.id_club LIKE  '$suiviComite%%%'
                
               ");
  }
  while ($row = $reponse->fetch()) {
    ${"tabClubsReg" . $competition}[] = $row[0];
  }
?>

  <?php
  // affichage 

  if ($competition == 160) {
    ${"tabClubsReg" . $competition} = array_unique(${"tabClubsReg" . $competition});
  }

  if (count(${"tabClubsReg" . $competition}) > 0) {
    echo "<br>" . "<br>";
  ?>
    <table width="500" border="1" align="center">
      <tr>
        <td colspan="2">
          <font face="Arial, Helvetica, sans-serif" size="4"><b><?php echo $nomCompetition; ?></b></font>
        </td>

      </tr><?php foreach (${"tabClubsReg" . $competition} as ${"clubReg" . $competition}) {
              echo "<tr align=\"center\">";
              echo "<td width=\"70%\">" . "<font size =\"3\" face=\"Arial, Helvetica, sans-serif\">" . ${"clubReg" . $competition} . "</font>" . "</td>";
              echo "<td width=\"30%\">" . "<font size =\"3\" face=\"Arial, Helvetica, sans-serif\">" . $nomCompetition . "</font>" . "</td>";
              echo "</tr>";
            }
            ?>
    </table>
<?php
  }
}
/*********************** CHAMPIONNATS FEMININS  ********************* */
?>
<br><br>

<table width="500" border="1" cellspacing="0" bordercolor="#000000" align="center">
  <tr>
    <td colspan="2" bgcolor="#FFCC33">
      <font size="5" face="Arial, Helvetica, sans-serif"><b >Championnats féminins  </b></font></td>
  </tr>
</table>

<br><br>

<?php
$tabCompetitions = array('280', '285', '290', '295');
foreach ($tabCompetitions as $competition) {


  if ($competition == 280) {
    $debut = "880281";
    $fin = "880282";
    $nomCompetition = "Elite 1";
  } else if ($competition == 285) {
    $debut = "880285";
    $fin = "880289";
    $nomCompetition = "Elite 2 ";
  } else if ($competition == 290) {
    $debut = "880291";
    $fin = "880295";
    $nomCompetition = "Fédérale 1";
  }
 
 // echo $competition;
 // echo "<br>";
 // echo "suiviComite : " . $suiviComite;
 // echo "<br>";

  $reponse = $bdd->query("SELECT phppro_clubs.nom
								FROM phppro_equipes, phppro_clubs
								WHERE phppro_equipes.id_club = phppro_clubs.id
                AND phppro_equipes.id_champ between  '$debut' AND '$fin'
                AND phppro_equipes.id_club between '$indiceLigueDebut' AND '$indiceLigueFin'
               AND phppro_equipes.id_club LIKE  '$suiviComite%%%'
               ");

  while ($row = $reponse->fetch()) {
    ${"tabClubsReg" . $competition}[] = $row[0];
  }

  if (count(${"tabClubsReg" . $competition}) > 0) { ?>
    <table width="500" border="1" align="center">
      <tr>
        <td colspan="2">
          <font face="Arial, Helvetica, sans-serif" size="4"><b><?php echo $nomCompetition; ?></b></font>
        </td>

      </tr><?php foreach (${"tabClubsReg" . $competition} as ${"clubReg" . $competition}) {
              echo "<tr align=\"center\">";
              echo "<td width=\"70%\">" . "<font size =\"3\" face=\"Arial, Helvetica, sans-serif\">" . ${"clubReg" . $competition} . "</font>" . "</td>";
              echo "<td width=\"30%\">" . "<font size =\"3\" face=\"Arial, Helvetica, sans-serif\">" . "aa" . "</font>" . "</td>";
              echo "</tr>";
            }
            ?>
    </table>
<?php
  }
}
?>