<script >

function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
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



$adresse ="../../00copies_mel/liste/franceAB.php?suiviLigue=";

?>


<fieldset class="fieldsetG"> <legend class="legendG" > 
<a href="franceABGenererBdd.php" > Inserer en bdd (toutes les tables)</a>
        </fieldset > 

<fieldset class="fieldsetG"> <legend class="legendG" > 
       Suivi des équipes engagées en championnats de france 2025 par ligue </legend><br>
        <select class="inputG" name="select" onChange="MM_jumpMenu('parent',this,0)" size="1"  title="Recherche par ligue">
          <option selected>Par ligue</option>
          <option value="<?php echo $adresse;?>suiviChampFranceARA">Auvergne Rhône Alpes</option>
          <option value="<?php echo $adresse;?>suiviChampFranceBFC">Bourgogne Franche Comté</option>
          <option value="<?php echo $adresse;?>suiviChampFranceBRE">Bretagne</option>
          <option value="<?php echo $adresse;?>suiviChampFranceCVL">Centre Val de Loire</option>
          <option value="<?php echo $adresse;?>suiviChampFranceGES">Grand Est</option>
          <option value="<?php echo $adresse;?>suiviChampFranceHDF">Hauts de France</option>
          <option value="<?php echo $adresse;?>suiviChampFranceIDF">Ile de France</option>
          <option value="<?php echo $adresse;?>suiviChampFranceNOR">Normandie</option>
          <option value="<?php echo $adresse;?>suiviChampFranceNAQ">Nouvelle Aquitaine</option>
          <option value="<?php echo $adresse;?>suiviChampFranceOCC">Occitanie</option>
          <option value="<?php echo $adresse;?>suiviChampFrancePDL">Pays de la Loire</option>
          <option value="<?php echo $adresse;?>suiviChampFrancePCA">Provence Alpes Côte d'Azur</option>
        </select>
        </fieldset > 
      <br>
       <br>

<?php

if (isset($_GET['suiviLigue'])) $suiviLigue = $_GET['suiviLigue'];else  $suiviLigue = "suiviChampFranceNOR";


echo $suiviLigue;

if ($suiviLigue == "suiviChampFranceARA" )
{$debut = 1000000; $fin = 1100000;}
elseif ($suiviLigue == "suiviChampFranceBFC" )
{$debut = 1100000; $fin = 1200000;}
elseif ($suiviLigue == "suiviChampFranceBRE" )
{$debut = 1200000; $fin = 1300000;}
elseif ($suiviLigue == "suiviChampFranceCVL" )
{$debut = 1300000; $fin = 1400000;}
elseif ($suiviLigue == "suiviChampFranceGES" )
{$debut = 1500000; $fin = 1600000;}
elseif ($suiviLigue == "suiviChampFranceHDF" )
{$debut = 1600000; $fin = 1700000;}
elseif ($suiviLigue == "suiviChampFranceIDF" )
{$debut = 1700000; $fin = 1800000;}
elseif ($suiviLigue == "suiviChampFranceNOR" )
{$debut = 1800000; $fin = 1900000;}
elseif ($suiviLigue == "suiviChampFranceNAQ" )
{$debut = 1900000; $fin = 2000000;}
elseif ($suiviLigue == "suiviChampFranceOCC" )
{$debut = 2000000; $fin = 2100000;}
elseif ($suiviLigue == "suiviChampFrancePDL" )
{$debut = 2100000; $fin = 2200000;}
elseif ($suiviLigue == "suiviChampFrancePCA" )
{$debut = 2200000; $fin = 2300000;}




require('../../connect/connexion1.php');

// vidage de la table
echo "suiviLigue : ".$suiviLigue;
$bdd->exec("TRUNCATE $suiviLigue");
$bdd->exec("delete FROM suiviChampFrance WHERE idclub between $debut and $fin");

//$division = "160";
//$annee = 3024;
$annee = 2025;

//***** SENIORS **********

require("../../phases_finales2019/fonctionsChampFrance2019.php");
?>


<table  width="500" border="1" cellspacing="0" bordercolor="#000000" align="center">
  <tr>
    <td colspan="2"  bgcolor="#FFCC33" class="size5 bold">
      Compétitions séniors
    </td>
  </tr>
</table>


<?php
//$tabDivisions = array('140','150','160'); //seniors Une
$tabDivisions = array('110','120','130','135','140','150','160','170','180','190','225','230','245','250','260','270','9180','280','285','290','295','365','360','370','325','330'); //seniors Une

foreach ($tabDivisions as $division)
{

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
if (($division == 160  and  ($A3201Pts + $A3202Pts > 6))
or ($A3201 !='-' and $A3202 !='-' and $A3203 !='-' and $A3204 !='-' and $A3205 !='-' and $A3206 !='-' and $A3207 !='-' and $A3208 !='-' and 
    $A3209 !='-' and $A3210 !='-' and $A3211 !='-' and $A3212 !='-' and $A3213 !='-' and $A3214 !='-' and $A3215 !='-' and $A3232 !='-' and
    $A3217 !='-' and $A3218 !='-' and $A3219 !='-' and $A3220 !='-' and $A3221 !='-' and $A3222 !='-' and $A3223 !='-' and $A3224 !='-' and 
    $A3225 !='-' and $A3226 !='-' and $A3227 !='-' and $A3228 !='-' and $A3229 !='-' and $A3230 !='-' and $A3231 !='-' and $A3232 !='-' and
    $A3233 !='-' and $A3234 !='-' and $A3235 !='-' and $A3236 !='-' and $A3237 !='-' and $A3238 !='-' and $A3239 !='-' and $A3240 !='-' and 
    $A3241 !='-' and $A3242 !='-' and $A3243 !='-' and $A3244 !='-' and $A3245 !='-' and $A3246 !='-' and $A3247 !='-' and $A3248 !='-' and
    $A3249 !='-' and $A3250 !='-' and $A3251 !='-' and $A3252 !='-' and $A3253 !='-' and $A3254 !='-' and $A3255 !='-' and $A3256 !='-' and 
    $A3257 !='-' and $A3258 !='-' and $A3259 !='-' and $A3260 !='-' and $A3261 !='-' and $A3262 !='-' and $A3263 !='-' and $A3264 !='-'
)) {

for (
  $club32me = 3201, $club16me = 1601, $club1 = 0, $club2 = 1;  $club32me < 3265, $club16me < 1633, $club1 < 65, $club2 < 65;  $club32me = $club32me + 2, $club16me++, $club1 = $club1 + 2, $club2 = $club2 + 2) {
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
 if (($division != 150 and $division == 160  and ($A1601Pts + $A1602Pts > 6)) 
 or  ($division != 160 and $division == 150  and ($A1601Pts + $A1602Pts > 6))  
 or  ($division != 150 and $division != 160 and $A1601 !='-' and $A1602 !='-' and $A1603 !='-' and $A1604 !='-' and $A1605 !='-' and $A1606 !='-' and $A1607 !='-' and $A1608 !='-' and 
    $A1609 !='-' and $A1610 !='-' and $A1611 !='-' and $A1612 !='-' and $A1613 !='-' and $A1614 !='-' and $A1615 !='-' and $A1616 !='-' and
    $A1617 !='-' and $A1618 !='-' and $A1619 !='-' and $A1620 !='-' and $A1621 !='-' and $A1622 !='-' and $A1623 !='-' and $A1624 !='-' and 
    $A1625 !='-' and $A1626 !='-' and $A1627 !='-' and $A1628 !='-' and $A1629 !='-' and $A1630 !='-' and $A1631 !='-' and $A1632 !='-'
)) {
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
if (($division == 140 and ($A8001Pts + $A8002Pts > 6)) 
//or  ($division == 150 and ($A8001Pts + $A8002Pts > 6)) 
or  ($division != 140 and  $A8001 !='-' and $A8002 !='-' and $A8003 !='-' and $A8004 !='-' and $A8005 !='-' and $A8006 !='-' and $A8007 !='-' and $A8008 !='-' and 
$A8009 !='-' and $A8010 !='-' and $A8011 !='-' and $A8012 !='-' and $A8013 !='-' and $A8014 !='-' and $A8015 !='-' and $A8016 !='-'
//)
)) {
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

if (($division == 140  and ($A4001Pts + $A4002Pts > 6))
or ($division != 140 and $A4001 !='-' and $A4002 !='-' and $A4003 !='-' and $A4004 !='-' and $A4005 !='-' and $A4006 !='-' and $A4007 !='-' and $A4008 !='-')) {
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
if ($A2001 !='-' and $A2002 !='-' and $A2003 !='-' and $A2004 !='-') {
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
} else if ($A1001 < $A1002){
  $champion = $tabFinale[1];
  $viceChampion = $tabFinale[0];
  $score1 = $A1002;
  $score2 = $A1001;
  array_push($tabFinaleElim, $tabFinale[0]);
  array_push($tabFinaleChamp, $tabFinale[1]);
}

foreach ($tabEquipeLigue as $equipeLigue) {


if (in_array($equipeLigue, $tab32meElim))
//$parcours= "Eliminée en 32me de finale";
$parcours= "990032";
else if (in_array($equipeLigue, $tab16meElim))
//$parcours= "Eliminée en 16me de finale";
$parcours = "990016";
else if (in_array($equipeLigue, $tab8meElim))
//$parcours= "Eliminée en 8me de finale";
$parcours = "990008";
else if (in_array($equipeLigue, $tab4meElim))
//$parcours= "Eliminée en quart de finale";
$parcours = "990004";
else if (in_array($equipeLigue, $tab2meElim))
//$parcours= "Eliminée en demi finale";
$parcours = "990002";
elseif (in_array($equipeLigue, $tabFinaleElim))
//$parcours= "Vice champion de France";
$parcours = "990001";
elseif (in_array($equipeLigue, $tabFinaleChamp))
//$parcours= "Champion de France";
$parcours = "990000";
else $parcours = "980000 ";

  //echo $division; elimination($equipeLigue);  echo elimination($equipeLigue); echo "<br>";

$tabMonteeEnFed3 = array (1010026,1010060,1013053,1013063,1028047,1115005,1124007,1216047,1317045,1511030,1623051,
1725109,1725127,1725188,1830034,1914004,1919052,1920062,1920080,1933044,1932041,2012041,2026061,2029090,2029107,
2029130,2035017,2131047,2234016,2234065,2027050);

$tabMonteeEnR1 = array (1013050,1013054,1022029,1022033,1028008,1028060,1124022,1216056,1317026,1525144,1623031,1725021,1725025,1725164,
1830020,1914007,1919048,1920040,1927015,1932028,1933017,2026047,2026058,2029045,2029077,2029098,2029100,2029129,2035023,2131012,
2221016,2234042,);

    $tabMonteeEnR2 = array( 1933061,2131036,1216045,1013012,1317014,1028064,1830005,1216074,1927060,2029195,2029188,1914014,2029171,2026031,
      2029147,1920056,2012005,2026072,1920059,1920025,2029125,1725208,1022051,2026017,1115006,1013034,1511007,1725062,1625065,1623012,
      1725207,2034091,2234098,2026102,2012039,2029196,2221053,1010017,2026089,1028049
    );

$montee = 0;

if (($division == 170 and in_array($equipeLigue, $tabMonteeEnFed3))

OR ($division==180 and in_array($equipeLigue, $tabMonteeEnR1))

OR ($division==190 and in_array($equipeLigue, $tabMonteeEnR2))
 
OR ($division == 160 and $parcours < 990016) //Féd3

OR ($division == 150 and $parcours < 990008) //Féd2

OR ($division == 140 and $parcours < 990004) //Féd1
/*
OR ($division == 135 and $parcours < 990000) //Nat2
OR ($division == 130 and $parcours < 990000) //Nat
OR ($division == 120 and $parcours < 990000) //Pro D2
*/
// Feminines
or ($division == 295 and $parcours < 990008) //Fédétale 2
// or ($division == 290 and $parcours < 990001) //Fédétale 1
// or ($division == 285 and $parcours < 990001) //Elite 2

)
$montee = 1;

	$bdd->exec("INSERT INTO $suiviLigue
				  VALUES ('$division', '$parcours', '$equipeLigue','$montee')");   
  $bdd->exec("INSERT INTO suiviChampFrance
				  VALUES ('','$annee','$division', '$parcours', '$equipeLigue','$montee')");   

}
?>

  <table width="500" border="1" cellspacing="0" bordercolor="#000000" align="center">
  <tr>
    <td colspan="2" class="size5 bold">
      <?php intituleDivision($division,$bdd) ; ?>
   <br>
    </td>
  </tr>
 
  <?php
  
  foreach ($tabEquipeLigue as $equipeLigue) {

 
  ?>
    <tr class="styleArial">
      <td width="250">

        <?php
        elimination($equipeLigue);
        ?>
      </td>
      <td width="250" <?php if (in_array($equipeLigue, $tabFinaleChamp))  echo 'bgcolor=\"#009900\"' ;?>>
      <?php 
      if (in_array($equipeLigue, $tabFinaleChamp)) { echo "<b>"."<font color=\"#FFFFFF\">"; nomEquipe($equipeLigue,$bdd);  echo "</b>"."</font>";}
   
   else if (in_array($equipeLigue, $tab32meElim) or in_array($equipeLigue, $tab16meElim) or in_array($equipeLigue, $tab8meElim) or in_array($equipeLigue, $tab4meElim)
   or in_array($equipeLigue, $tab2meElim) )
   { echo  "<b>"."<font color=\"#000000\">";   nomEquipe($equipeLigue,$bdd);   echo "</b>"."</font>";}

   
   else 
   { echo "<font color=\"#FF0000\">";   nomEquipe($equipeLigue,$bdd);  echo "</font>";}
   }

  
    ?>
     
    </td>
    </tr>
  <?php
  }

function nomEquipe($equipeLigue,$bdd) {
  $reponse = $bdd->query("SELECT nom_1
								FROM bdclubs
								WHERE id = $equipeLigue");
  while ($row = $reponse->fetch()) {
            echo $row[0];
  }
}
function intituleDivision($division,$bdd) {
  $reponse = $bdd->query("SELECT division
								FROM bddivisions
								WHERE id = $division AND actif= '1'");
  while ($row = $reponse->fetch()) {
            echo $row[0];
  }
}

function elimination($equipeLigue) {
  global $tab32meElim,$tab16meElim, $tab8meElim, $tab4meElim, $tab2meElim, $tabFinaleElim, $tabFinaleChamp;
  
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
  echo "990000";
 else echo " "; 
}
  ?>
</table>
