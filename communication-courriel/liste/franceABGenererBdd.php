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




require('../../connect/connexion1.php');
//require("../../phases_finales2019/fonctionsChampFrance2019.php");

 $tabSuiviChampFFR = array("suiviChampFranceARA", "suiviChampFranceBFC", "suiviChampFranceBRE", "suiviChampFranceCVL", "suiviChampFranceGES");
 foreach ($tabSuiviChampFFR as $suiviLigue) { 

  echo $suiviLigue; echo "<br>";

  if ($suiviLigue == "suiviChampFranceARA") {
    $debut = 1000000;
    $fin = 1100000;
  } elseif ($suiviLigue == "suiviChampFranceBFC") {
    $debut = 1100000;
    $fin = 1200000;
  } elseif ($suiviLigue == "suiviChampFranceBRE") {
    $debut = 1200000;
    $fin = 1300000;
  } elseif ($suiviLigue == "suiviChampFranceCVL") {
    $debut = 1300000;
    $fin = 1400000;
  } elseif ($suiviLigue == "suiviChampFranceGES") {
    $debut = 1500000;
    $fin = 1600000;
  } elseif ($suiviLigue == "suiviChampFranceHDF") {
    $debut = 1600000;
    $fin = 1700000;
  } elseif ($suiviLigue == "suiviChampFranceIDF") {
    $debut = 1700000;
    $fin = 1800000;
  } elseif ($suiviLigue == "suiviChampFranceNOR") {
    $debut = 1800000;
    $fin = 1900000;
  } elseif ($suiviLigue == "suiviChampFranceNAQ") {
    $debut = 1900000;
    $fin = 2000000;
  } elseif ($suiviLigue == "suiviChampFranceOCC") {
    $debut = 2000000;
    $fin = 2100000;
  } elseif ($suiviLigue == "suiviChampFrancePDL") {
    $debut = 2100000;
    $fin = 2200000;
  } elseif ($suiviLigue == "suiviChampFrancePCA") {
    $debut = 2200000;
    $fin = 2300000;
  }

//require('../../connect/connexion1.php');
if ($suiviLigue=="suiviChampFranceARA")
 require("../../phases_finales2019/fonctionsChampFrance2019.php");

  // vidage de la table
  echo "vidage de la table : " . $suiviLigue; echo "<br>";
  $bdd->exec("TRUNCATE $suiviLigue");
  //$division = "160";
  //$annee = 3024;
  $annee = 2025;

  $pff32me = "32me de finale du champ de France";
  $pff16me = "16me de finale du champ de France";
  $pff08me = "8me de finale du champ de France";
  $pff04me = "Quart de finale du champ de France";
  $pff02me = "Demi finale du champ de France";
  $pffVice = "Vice champion de France";
  $pffCham = "Champion de France";

  //***** SENIORS **********
  //$tabDivision = array(110,120,130,140,150,160,170,180,190);
  echo "passage 0"; echo "<br>";

  echo "passage 1"; echo "<br>";
  //$tabDivisions = array('140','150','160'); //seniors Une
  $tabDivisions = array('110', '120', '130', '135', '140', '150', '160', '170', '180', '190', '225', '245', '250', '260', '270', '9180', '280', '285', '290', '295', '365', '360', '370', '325', '330'); //seniors Une
  // $tabDivisions = array('230','235','240','250','260','270','9180'); // seniors deux
  // $tabDivisions = array('280','285','290','295'); // feminines
  // $tabDivisions = array('365','360','370','325','330'); // jeunes
  
  foreach ($tabDivisions as $division) {
echo "traitement division : " . $division; 
    $tabEquipe = array();
    $tabEquipeLigue = array();
    $tab32me = array();
    $tab32meElim = array();
    $tab16me = array();
    $tab16meElim = array();
    $tab8me = array();
    $tab8meElim = array();
    $tab4me = array();
    $tab4meElim = array();
    $tab2me = array();
    $tab2meElim = array();
    $tabFinale = array();
    $tabFinaleElim = array();
    $tabFinaleChamp = array();


    trenteDeuxieme2019($division, $annee, $bdd);

    for ($i = 1; $i <= 64; $i++) {
      if ($i < 10)
        $equipe = "E0" . $i;
      else
        $equipe = "E" . $i;

      if (isset($equipe));
      else
        $equipe = 0;

      $reponse = $bdd->query("SELECT $equipe, type
								FROM bdpffrance
								WHERE id = $division 
                AND  saison = $annee ");

      while ($row = $reponse->fetch()) {
        $tabEquipe[] = $row[0];
        $type = $row[1];
      }
    }

    for ($i = 0; $i <= count($tabEquipe); $i++) {
      if ($tabEquipe[$i] > $debut and $tabEquipe[$i] < $fin) {
        array_push($tabEquipeLigue, $tabEquipe[$i]);
      }
    }

    sort($tabEquipeLigue);
    foreach ($tabEquipeLigue as $value)
      //echo $value;

      if (substr($type, 1, 2) == 64 or substr($type, 1, 2) == 32) {
        for ($i = 0; $i <= 63; $i++)
          array_push($tab32me, $tabEquipe[$i]);
      } elseif (substr($type, 3, 2) == 32 or substr($type, 3, 2) == 16) {
        for ($i = 0; $i <= 31; $i++)
          array_push($tab16me, $tabEquipe[$i]);
      } elseif (substr($type, 5, 2) == 16 or substr($type, 5, 2) == 8) {
        for ($i = 0; $i <= 15; $i++)
          array_push($tab8me, $tabEquipe[$i]);
      } elseif (substr($type, 7, 2) == 8 or substr($type, 7, 2) == 4) {
        for ($i = 0; $i <= 7; $i++)
          array_push($tab4me, $tabEquipe[$i]);
      } elseif (substr($type, 9, 2) == 4 or substr($type, 9, 2) == 2) {
        for ($i = 0; $i <= 3; $i++)
          array_push($tab2me, $tabEquipe[$i]);
      }


    // traitement des 32me de finale
    if (
      $A3201 != '-' and $A3202 != '-' and $A3203 != '-' and $A3204 != '-' and $A3205 != '-' and $A3206 != '-' and $A3207 != '-' and $A3208 != '-' and
      $A3209 != '-' and $A3210 != '-' and $A3211 != '-' and $A3212 != '-' and $A3213 != '-' and $A3214 != '-' and $A3215 != '-' and $A3232 != '-' and
      $A3217 != '-' and $A3218 != '-' and $A3219 != '-' and $A3220 != '-' and $A3221 != '-' and $A3222 != '-' and $A3223 != '-' and $A3224 != '-' and
      $A3225 != '-' and $A3226 != '-' and $A3227 != '-' and $A3228 != '-' and $A3229 != '-' and $A3230 != '-' and $A3231 != '-' and $A3232 != '-' and
      $A3233 != '-' and $A3234 != '-' and $A3235 != '-' and $A3236 != '-' and $A3237 != '-' and $A3238 != '-' and $A3239 != '-' and $A3240 != '-' and
      $A3241 != '-' and $A3242 != '-' and $A3243 != '-' and $A3244 != '-' and $A3245 != '-' and $A3246 != '-' and $A3247 != '-' and $A3248 != '-' and
      $A3249 != '-' and $A3250 != '-' and $A3251 != '-' and $A3252 != '-' and $A3253 != '-' and $A3254 != '-' and $A3255 != '-' and $A3256 != '-' and
      $A3257 != '-' and $A3258 != '-' and $A3259 != '-' and $A3260 != '-' and $A3261 != '-' and $A3262 != '-' and $A3263 != '-' and $A3264 != '-'
    ) {


      for (
        $club32me = 3201, $club16me = 1601, $club1 = 0, $club2 = 1;
        $club32me < 3265, $club16me < 1633, $club1 < 65, $club2 < 65;
        $club32me = $club32me + 2, $club16me++, $club1 = $club1 + 2, $club2 = $club2 + 2
      ) {
        if (${"clubA" . $club32me} == ${"clubA" . $club16me}) {
          array_push($tab32meElim, $tab32me[$club2]);
          array_push($tab16me, $tab32me[$club1]);
        } else {
          array_push($tab32meElim, $tab32me[$club1]);
          array_push($tab16me, $tab32me[$club2]);
        }
      }
    }

    // traitement des 16me de finale
    if (
      $A1601 != '-' and $A1602 != '-' and $A1603 != '-' and $A1604 != '-' and $A1605 != '-' and $A1606 != '-' and $A1607 != '-' and $A1608 != '-' and
      $A1609 != '-' and $A1610 != '-' and $A1611 != '-' and $A1612 != '-' and $A1613 != '-' and $A1614 != '-' and $A1615 != '-' and $A1616 != '-' and
      $A1617 != '-' and $A1618 != '-' and $A1619 != '-' and $A1620 != '-' and $A1621 != '-' and $A1622 != '-' and $A1623 != '-' and $A1624 != '-' and
      $A1625 != '-' and $A1626 != '-' and $A1627 != '-' and $A1628 != '-' and $A1629 != '-' and $A1630 != '-' and $A1631 != '-' and $A1632 != '-'
    ) {
      for ($club16me = 1601, $club8me = 8001, $club1 = 0, $club2 = 1; $club16me < 1633, $club8me < 8017, $club1 < 33, $club2 < 33; $club16me = $club16me + 2, $club8me++, $club1 = $club1 + 2, $club2 = $club2 + 2) {
        if (${"clubA" . $club16me} == ${"clubA" . $club8me}) {
          //echo $tabEquipe[$club2];
          array_push($tab16meElim, $tab16me[$club2]);
          array_push($tab8me, $tab16me[$club1]);
        } else {
          //echo $tabEquipe[$club1];
          array_push($tab16meElim, $tab16me[$club1]);
          array_push($tab8me, $tab16me[$club2]);
        }
      }
    }
    // traitement des 8me de finale
    if (
      $A8001 != '-' and $A8002 != '-' and $A8003 != '-' and $A8004 != '-' and $A8005 != '-' and $A8006 != '-' and $A8007 != '-' and $A8008 != '-' and
      $A8009 != '-' and $A8010 != '-' and $A8011 != '-' and $A8012 != '-' and $A8013 != '-' and $A8014 != '-' and $A8015 != '-' and $A8016 != '-'
    ) {
      for ($club8me = 8001, $club4me = 4001, $club1 = 0, $club2 = 1; $club8me < 8017, $club4me < 4008, $club1 < 17, $club2 < 17; $club8me = $club8me + 2, $club4me++, $club1 = $club1 + 2, $club2 = $club2 + 2) {
        if (${"clubA" . $club8me} == ${"clubA" . $club4me}) {
          //echo $tabEquipe[$club2];
          array_push($tab8meElim, $tab8me[$club2]);
          array_push($tab4me, $tab8me[$club1]);
        } else {
          //echo $tabEquipe[$club1];
          array_push($tab8meElim, $tab8me[$club1]);
          array_push($tab4me, $tab8me[$club2]);
        }
      }
    }
    // traitement des quarts de finale
    if ($A4001 != '-' and $A4002 != '-' and $A4003 != '-' and $A4004 != '-' and $A4005 != '-' and $A4006 != '-' and $A4007 != '-' and $A4008 != '-') {
      for ($club4me = 4001, $club2me = 2001, $club1 = 0, $club2 = 1; $club4me < 4009, $club2me < 2005, $club1 < 9, $club2 < 9; $club4me = $club4me + 2, $club2me++, $club1 = $club1 + 2, $club2 = $club2 + 2) {
        if (${"clubA" . $club4me} == ${"clubA" . $club2me}) {
          //echo $tabEquipe[$club2];
          array_push($tab4meElim, $tab4me[$club2]);
          array_push($tab2me, $tab4me[$club1]);
        } else {
          //echo $tabEquipe[$club1];
          array_push($tab4meElim, $tab4me[$club1]);
          array_push($tab2me, $tab4me[$club2]);
        }
      }
    }
    // traitement des demies
    if ($A2001 != '-' and $A2002 != '-' and $A2003 != '-' and $A2004 != '-') {
      for ($club2me = 2001, $club1me = 1001, $club1 = 0, $club2 = 1; $club2me < 2005, $club1me < 1003, $club1 < 4, $club2 < 4; $club2me = $club2me + 2, $club1me++, $club1 = $club1 + 2, $club2 = $club2 + 2) {
        if (${"clubA" . $club2me} == ${"clubA" . $club1me}) {
          array_push($tab2meElim, $tab2me[$club2]);
          array_push($tabFinale, $tab2me[$club1]);
        } else {
          array_push($tab2meElim, $tab2me[$club1]);
          array_push($tabFinale, $tab2me[$club2]);
        }
      }
    }

    // traitement du champion

    if ($A1001 > $A1002) {
      $champion = $tabFinale[0];
      $viceChampion = $tabFinale[1];
      $score1 = $A1001;
      $score2 = $A1002;
      array_push($tabFinaleElim, $tabFinale[1]);
      array_push($tabFinaleChamp, $tabFinale[0]);
    } else if ($A1001 < $A1002) {
      $champion = $tabFinale[1];
      $viceChampion = $tabFinale[0];
      $score1 = $A1002;
      $score2 = $A1001;
      array_push($tabFinaleElim, $tabFinale[0]);
      array_push($tabFinaleChamp, $tabFinale[1]);
    }

    foreach ($tabEquipeLigue as $equipeLigue) {

      if (in_array($equipeLigue, $tab32meElim))
        $parcours = "Eliminée en 32me de finale";
      else if (in_array($equipeLigue, $tab16meElim))
        $parcours = "Eliminée en 16me de finale";
      else if (in_array($equipeLigue, $tab8meElim))
        $parcours = "Eliminée en 8me de finale";
      else if (in_array($equipeLigue, $tab4meElim))
        $parcours = "Eliminée en quart de finale";
      else if (in_array($equipeLigue, $tab2meElim))
        $parcours = "Eliminée en demi finale";
      elseif (in_array($equipeLigue, $tabFinaleElim))
        $parcours = "Vice champion de France";
      elseif (in_array($equipeLigue, $tabFinaleChamp))
        $parcours = "Champion de France";
      else $parcours = " ";

      //echo $division; elimination($equipeLigue);  echo elimination($equipeLigue); echo "<br>";

      $bdd->exec("INSERT INTO $suiviLigue
				  VALUES ('$division', '$parcours', '$equipeLigue','1')");
    }
  }
}

function elimination($equipeLigue)
{
  global $tab32meElim, $tab16meElim, $tab8meElim, $tab4meElim, $tab2meElim, $tabFinaleElim, $tabFinaleChamp;

  if (in_array($equipeLigue, $tab32meElim))
    echo "Eliminée en 32me de finale";
  else if (in_array($equipeLigue, $tab16meElim))
    echo "Eliminée en 16me de finale";
  else if (in_array($equipeLigue, $tab8meElim))
    echo "Eliminée en 8me de finale";
  else if (in_array($equipeLigue, $tab4meElim))
    echo "Eliminée en quart de finale";
  else if (in_array($equipeLigue, $tab2meElim))
    echo "Eliminée en demi finale";
  else if (in_array($equipeLigue, $tabFinaleElim))
    echo "Vice champion de France";
  else if (in_array($equipeLigue, $tabFinaleChamp))
    echo "Champion de France";
  else echo " ";
}
?>
</table>