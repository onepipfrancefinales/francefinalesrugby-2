<?php
//***********************************************************************/
// phpidfeague : gestionnaire de championnat                              */
// ============================================                         */
//                                                                      */
// Version : 0.82                                                       */
// Copyright (c) 2004    Alexis MANGIN                                  */
// http://phpidfeague.univert.org                                         */
//                                                                      */
// This program is free software. You can redistribute it and/or modify */
// it under the terms of the GNU General Public License as published by */
// the Free Software Foundation; either version 2 of the License.       */
//                                                                      */
//***********************************************************************/
// Support technique : http://phpidfeague.univert.org/forum               */
//                                                                      */
//***********************************************************************/


function affich_championnats($champ, $action, $idconnect)
{
  global  $nomLigue;
  if ($champ >= 100000 and $champ < 110000) {
    $valLigueMin = 100000;
    $valLigueMax = 110000;
  } elseif ($champ >= 110000 and $champ < 120000) {
    $valLigueMin = 110000;
    $valLigueMax = 120000;
  } elseif ($champ >= 120000 and $champ < 130000) {
    $valLigueMin = 120000;
    $valLigueMax = 130000;
  } elseif ($champ >= 130000 and $champ < 140000) {
    $valLigueMin = 130000;
    $valLigueMax = 140000;
  } elseif ($champ >= 150000 and $champ < 160000) {
    $valLigueMin = 150000;
    $valLigueMax = 160000;
  } elseif ($champ >= 160000 and $champ < 170000) {
    $valLigueMin = 160000;
    $valLigueMax = 170000;
  } elseif ($champ >= 170000 and $champ < 180000) {
    $valLigueMin = 170000;
    $valLigueMax = 180000;
  } elseif ($champ >= 180000 and $champ < 190000) {
    $valLigueMin = 180000;
    $valLigueMax = 190000;
  } elseif ($champ >= 190000 and $champ < 200000) {
    $valLigueMin = 190000;
    $valLigueMax = 200000;
  } elseif ($champ >= 200000 and $champ < 210000) {
    $valLigueMin = 200000;
    $valLigueMax = 210000;
  } elseif ($champ >= 210000 and $champ < 220000) {
    $valLigueMin = 210000;
    $valLigueMax = 220000;
  } elseif ($champ >= 220000 and $champ < 230000) {
    $valLigueMin = 220000;
    $valLigueMax = 230000;
  }
  $resultats = $idconnect->query("SELECT phpidf_championnats.id, phpidf_divisions.nom, phpidf_saisons.annee 
            FROM phpidf_championnats, phpidf_divisions, phpidf_saisons 
            WHERE phpidf_championnats.id_division=phpidf_divisions.id
            AND phpidf_championnats.id_saison=phpidf_saisons.id 
			AND	phpidf_divisions.id between $valLigueMin  and $valLigueMax 
			ORDER BY id, nom");


  $i = 0;
  while ($row = mysqli_fetch_array($resultats)) {
    $saison = $row[2] + 1;
    $gras_fin = "</b>";

    for ($i = 1; $i <= 9; $i++) {
      //echo "sg";
      $gras = "gras_$i";
      $$gras = "</b>";
    }

    if ($action == "equipes" and $champ == "$row[0]") {
      $gras_1 = "<b>";
    } elseif ($action == "dates" and $champ == $row[0]) {
      $gras_2 = "<b>";
    } elseif ($action == "matchs" and $champ == $row[0]) {
      $gras_3 = "<b>";
    } elseif ($action == "parametres" and $champ == $row[0]) {
      $gras_4 = "<b>";
    } elseif ($action == "resultats" and $champ == $row[0]) {
      $gras_5 = "<b>";
    } elseif ($action == "generer" and $champ == $row[0]) {
      $gras_7 = "<b>";
    }


    if ($champ == "$row[0]") {
      $class = "phpidf7";
    } elseif (($i % 2) == 0) {
      $class = "phpidf3";
    } else {
      $class = "phpidf4";
    }

    echo "<tr>";
    echo "<td class='$class'>$row[0]</td>";
    echo "<td class='$class'>$row[1]</td>";
    echo "<td class='$class'>$row[2]/$saison</td>";
    echo "<td class='$class' align=\"right\" width=\"75%\">";

    echo " $gras_1<a href=\"?page=championnat&action=equipes&champ=$row[0]\">[" . EQUIPE . "]</a>$gras_fin";
    echo " $gras_2<a href=\"?page=championnat&action=dates&champ=$row[0]\">[" . DATE . "]</a>$gras_fin";
    //   echo " $gras_3<a href=\"?page=championnat&action=matchs&champ=$row[0]\">[".MATCH."]$gras_fin</a>";
    echo " $gras_4<a href=\"?page=championnat&action=parametres&champ=$row[0]\">[" . PARAMETRE . "]$gras_fin</a>";
    echo " $gras_5<a href=\"?page=championnat&action=resultats&champ=$row[0]\">[" . RESULT . "]$gras_fin</a>";
    echo " $gras_7<a href=\"?page=championnat&action=generer&champ=$row[0]\">[" . GENERER . "]$gras_fin</a>";
    echo "</tr>";
    $i++;
  }
}

function affich_championnatsMAJ($champ, $action, $idconnect)
{
  $resultats = $idconnect->query("SELECT id
								FROM phpidf_championnats 
								WHERE id='$champ' ");
  $i = 0;
  while ($row = mysqli_fetch_array($resultats)) {
    //$saison=$row[2]+1;
    $gras_fin = "</b>";

    for ($i = 1; $i <= 9; $i++) {
      $gras = "gras_$i";
      $gras = "</b>";
    }

    if ($action == "equipes" and $champ == "$row[0]") {
      $gras_1 = "<b>";
    } elseif ($action == "dates" and $champ == $row[0]) {
      $gras_2 = "<b>";
    } elseif ($action == "matchs" and $champ == $row[0]) {
      $gras_3 = "<b>";
    } elseif ($action == "parametres" and $champ == $row[0]) {
      $gras_4 = "<b>";
    } elseif ($action == "resultats" and $champ == $row[0]) {
      $gras_5 = "<b>";
    }
    // elseif ($action=="generer" and $champ==$row[0]){$gras_7="<b>";}


    if ($champ == "$row[0]") {
      $class = "phpidf7";
    } elseif (($i % 2) == 0) {
      $class = "phpidf3";
    } else {
      $class = "phpidf4";
    }

    echo "<tr>";
    // echo "<td class='$class'>$row[0]</td>";
    // echo "<td class='$class'>$row[1]</td>";
    // echo "<td class='$class'>$row[2]/$saison</td>";
    echo "<td class='$class' align=\"center\" width=\"50%\">";

    // echo " $gras_1<a href=\"?page=championnat&action=equipes&champ=$row[0]\">[".EQUIPE."]</a>$gras_fin";
    //echo " $gras_2<a href=\"?page=championnat&action=dates&champ=$row[0]\">[".DATE."]</a>$gras_fin";
    // echo " $gras_3<a href=\"?page=championnat&action=matchs&champ=$row[0]\">[".MATCH."]$gras_fin</a>";
    //echo " $gras_4<a href=\"?page=championnat&action=parametres&champ=$row[0]\">[".PARAMETRE."]$gras_fin</a>";
    // echo " $gras_5<a href=\"?page=championnat&action=resultats&champ=$row[0]\">[".RESULT."]$gras_fin</a>";
    echo " <b><a href=\"index6.php?page=championnat&action=generer&champ=$champ\">[" . GENERER . "]</b></a>";
    echo "</tr>";
    // $i++;
  }
}


function affich_gr_championnats($ligue, $gr_champ, $action, $idconnect)
{

  $ligueFin = $ligue + 10000;
  $resultats = $idconnect->query("  SELECT DISTINCT id, nom 
								   FROM phpidf_gr_championnats 
                   WHERE id BETWEEN '$ligue' AND '$ligueFin'
								   ORDER by nom asc");

  $i = 0;
  while ($row = mysqli_fetch_array($resultats)) {
    $gras_fin = "</b>";

    for ($i = 1; $i <= 8; $i++) {
      $gras = "gras_$i";
      $$gras = "</b>";
    }

    if ($action == "editer" and $gr_champ == "$row[0]") {
      $gras_1 = "<b>";
    }

    if ($gr_champ == "$row[0]") {
      $class = "phpidf7";
    } elseif (($i % 2) == 0) {
      $class = "phpidf3";
    } else {
      $class = "phpidf4";
    }

    echo "<tr>";
    echo "<td class='$class'>$row[0]</td>";
    echo "<td class='$class'>$row[1]</td>";
    echo "<td class='$class' align=\"right\" width=\"75%\">";

    // echo " $gras_1<a href=\"?page=groupes_championnats&action=editer&gr_champ=$row[0]\">[".EDITER."]</a>$gras_fin";
    //  echo " $gras_1<a href=\"?page=groupes_championnats&action=generer&gr_champ=$row[0]\">[".ADMIN_GR_CHAMP_GENERER."]</a>$gras_fin";
    //  echo " $gras_1<a href=\"?page=groupes_championnats&action=supp&gr_champ=$row[0]\">[".ADMIN_RENS_8."]$gras_fin</a></td>";
    echo " $gras_1<a href=\"?page=groupes_championnats&action=editer&ligue=$ligue&gr_champ=$row[0]\">[" . EDITER . "]</a>$gras_fin";
    echo " $gras_2<a href=\"?page=groupes_championnats&action=generer&ligue=$ligue&gr_champ=$row[0]\">[" . ADMIN_GR_CHAMP_GENERER . "]</a>$gras_fin";
    echo " $gras_8<a href=\"?page=groupes_championnats&action=supp&ligue=$ligue&gr_champ=$row[0]\">[" . ADMIN_RENS_8 . "]$gras_fin</a></td>";

    echo "</tr>";
    $i++;
  }
}



function affich_champ($champ, $idconnect)
{
  $resultats = $idconnect->query("SELECT phpidf_divisions.nom, phpidf_saisons.annee 
              FROM phpidf_championnats, phpidf_divisions, phpidf_saisons
              WHERE phpidf_championnats.id_division=phpidf_divisions.id 
              AND phpidf_championnats.id_saison=phpidf_saisons.id 
              AND phpidf_championnats.id='$champ' ORDER by annee desc");

  while ($row = mysqli_fetch_array($resultats)) {
    $saison = $row[1] + 1;
    echo "$row[0] $row[1]/$saison";
  }
}

function affich_gr_champ($gr_champ, $idconnect)
{
  $resultats = $idconnect->query(" SELECT nom 
								  FROM phpidf_gr_championnats 
								  WHERE id='$gr_champ'");

  while ($row = mysqli_fetch_array($resultats)) {
    //echo " le groupe de championnats suivant : ";
    echo $row[0];
    //echo "tttt";
  }
  // echo "tttt";
}

function divisions_menu($idconnect)
{
  $result = $idconnect->query(" SELECT phpidf_divisions.id, phpidf_divisions.nom 
							  FROM phpidf_divisions 
							  ORDER by nom");

  echo "<select name=division>";
  echo "<option></option>";
  while ($row = mysqli_fetch_array($result)) {
    echo ("<option value=\"$row[0]\">$row[1]\n");
    echo ("</option>\n");
  }
  echo "</select>";
}

function saisons_menu($idconnect)
{
  $result = $idconnect->query(" SELECT phpidf_saisons.id, phpidf_saisons.annee 
							  FROM phpidf_saisons 
							  ORDER by annee");

  echo "<select name=saison>";
  echo "<option></option>";
  while ($row = mysqli_fetch_array($result)) {
    $saison1 = $row[1] + 1;
    echo ("<option value=\"$row[0]\">$row[1]/$saison1\n");
    echo ("</option>\n");
  }
  echo "</select>";
}

function clubs_menu($idconnect)
{
  $result = $idconnect->query(" SELECT phpidf_clubs.id, phpidf_clubs.nom 
							  FROM phpidf_clubs 
							  ORDER by nom");

  echo "<select name=\"club[]\" multiple size=\"8\">";
  while ($row = mysqli_fetch_array($result)) {
    $row[1] = stripslashes($row[1]);
    echo ("<option value=\"$row[0]\">$row[1]\n");
    echo ("</option>\n");
  }
  echo "</select>";
}

function champ_menu($idconnect)
{
  $result = $idconnect->query(" 
		 SELECT phpidf_championnats.id, phpidf_divisions.nom, phpidf_saisons.annee, (phpidf_saisons.annee)+1 
		 FROM phpidf_championnats, phpidf_divisions, phpidf_saisons 
		 WHERE phpidf_divisions.id=phpidf_championnats.id_division 
		 AND phpidf_saisons.id=phpidf_championnats.id_saison 
		 ORDER by annee desc, phpidf_divisions.nom");

  echo "<select name=\"champ[]\" multiple size=\"8\">";
  while ($row = mysqli_fetch_array($result)) {
    echo ("<option value=\"$row[0]\">$row[1] $row[2]/$row[3]\n");
    echo ("</option>\n");
  }
  echo "</select>";
}
function champ_menu_par_ligue($ligue, $idconnect)
{
  // echo "ligue : ".$ligue; echo "<br>";
  $ligueMax = $ligue + 10000;
  //  echo "ligueMax : ". $ligueMax;echo "<br>";
  $result = $idconnect->query(" 
		 SELECT phpidf_championnats.id, phpidf_divisions.nom, phpidf_saisons.annee, (phpidf_saisons.annee)+1 
		 FROM phpidf_championnats, phpidf_divisions, phpidf_saisons 
		 WHERE phpidf_divisions.id = phpidf_championnats.id_division 
		 AND phpidf_saisons.id= phpidf_championnats.id_saison 
     AND  phpidf_divisions.id between '$ligue' AND $ligueMax 
		 ORDER by annee desc, phpidf_divisions.nom");

  echo "<select name=\"champ[]\" multiple size=\"8\">";
  while ($row = mysqli_fetch_array($result)) {
    echo ("<option value=\"$row[0]\">$row[1] $row[2]/$row[3]\n");
    echo ("</option>\n");
  }
  echo "</select>";
}

function equipes_menu($champ, $idconnect)
{
  $result = $idconnect->query(" SELECT phpidf_equipes.id, phpidf_clubs.nom 
							  FROM phpidf_clubs, phpidf_equipes 
							  WHERE id_champ='$champ' 
							  AND phpidf_clubs.id=phpidf_equipes.id_club 
							  ORDER by nom");

  echo "<select name=\"club[]\" multiple size=\"8\">";
  while ($row = mysqli_fetch_array($result)) {
    $row[1] = stripslashes($row[1]);
    echo ("<option value=\"$row[0]\">$row[1]\n");
    echo ("</option>\n");
  }
  echo "</select>";
}

function champ_gr_menu($gr_champ, $idconnect)
{
  echo "<select name=\"champ[]\" multiple size=\"8\">";

  $result = $idconnect->query(" SELECT id_champ 
							  FROM phpidf_gr_championnats 
							  WHERE id = '$gr_champ'");

  while ($row = mysqli_fetch_array($result)) {
    $result2 = $idconnect->query(" 
					SELECT phpidf_championnats.id, phpidf_divisions.nom, phpidf_saisons.annee, (phpidf_saisons.annee)+1 
					 FROM phpidf_championnats, phpidf_divisions, phpidf_saisons 
					 WHERE phpidf_divisions.id=phpidf_championnats.id_division 
					 AND phpidf_saisons.id=phpidf_championnats.id_saison 
					 AND phpidf_championnats.id='$row[0]'  
					 ORDER by annee desc, phpidf_divisions.nom");
    while ($row2 = mysqli_fetch_array($result2)) {
      echo ("<option value=\"$row2[0]\">$row2[1] $row2[2]/$row2[3]\n");
      echo ("</option>\n");
    }
  }
  echo "</select>";
}

function journees($champ, $numero, $action, $idconnect)
{
  $resultats = $idconnect->query("  SELECT numero, id 
								  FROM phpidf_journees 
								  WHERE id_champ='$champ' 
								  ORDER BY numero");

  while ($row = mysqli_fetch_array($resultats)) {
    if ($numero == $row[0]) {
      echo "<b><a href=\"?page=championnat&action=$action&champ=$champ&id_journee=$row[1]&numero=$row[0]\">$row[0]</a></b> ";
    } else {
      echo "<a href=\"?page=championnat&action=$action&id_journee=$row[1]&champ=$champ&numero=$row[0]\">$row[0]</a> ";
    }
  }
}

function format_date_fr($date)
{
  list($annee, $mois, $jour) = explode("-", substr($date, 0, 10));
  list($heure, $minute, $seconde) = explode(":", substr($date, 11, 7));
  return $jour . "/" . $mois . "/" . $annee . " " . $heure . ":" . $minute;
}

function resultats($champ, $numero, $idconnect)
{
  $resultats = $idconnect->query("SELECT phpidf_clubs.nom, CLEXT.nom, phpidf_matchs.buts_dom, phpidf_matchs.buts_ext, phpidf_matchs.id, phpidf_matchs.date_reelle
             FROM phpidf_clubs, phpidf_clubs as CLEXT, phpidf_matchs, phpidf_journees, phpidf_equipes, phpidf_equipes as EXT
             WHERE phpidf_clubs.id=phpidf_equipes.id_club
             AND CLEXT.id=EXT.id_club
             AND phpidf_equipes.id=phpidf_matchs.id_equipe_dom
             AND EXT.id=phpidf_matchs.id_equipe_ext
             AND phpidf_matchs.id_journee=phpidf_journees.id
             AND phpidf_journees.numero='$numero'
             AND phpidf_journees.id_champ='$champ'
             AND CLEXT.nom!='exempte'
             AND phpidf_clubs.nom!='exempte'
             ORDER BY date_reelle asc");

  $i = 0;
  while ($row = mysqli_fetch_array($resultats)) {
    $row[0] = stripslashes($row[0]);
    $row[1] = stripslashes($row[1]);
    if (($i % 2) == 0) {
      $class = "phpidf3";
    } else {
      $class = "phpidf4";
    }
    $date_fr = format_date_fr($row[5]);
    echo "<tr><td class=$class>$row[0]";
    echo "<td class=$class><input type=\"text\" size=\"3\" name=\"butd[]\" value=\"$row[2]\"></td>";
    echo "<td class=$class><input type=\"text\" size=\"3\" name=\"butv[]\" value=\"$row[3]\">";
    echo "<input type=\"hidden\" name=\"matchs_id[]\" value=\"$row[4]\"></td>";
    echo "<td class=$class>$row[1]</td>";
    echo "<td class=$class><input type=\"text\" size=\"16\" name=\"date_reelle[]\" value=\"$date_fr\" maxlength=\"16\"></td>";
    $matchs_id[] = $row[4];
    $i++;
  }


  $resultats3 = $idconnect->query(" SELECT phpidf_clubs.nom, CLEXT.nom, phpidf_matchs.buts_dom, phpidf_matchs.buts_ext, phpidf_matchs.id, phpidf_matchs.date_reelle 
								  FROM phpidf_clubs, phpidf_clubs as CLEXT, phpidf_matchs, phpidf_journees, phpidf_equipes, phpidf_equipes as EXT 
								  WHERE phpidf_clubs.id=phpidf_equipes.id_club 
								  AND CLEXT.id=EXT.id_club 
								  AND phpidf_equipes.id=phpidf_matchs.id_equipe_dom 
								  AND EXT.id=phpidf_matchs.id_equipe_ext 
								  AND phpidf_matchs.id_journee=phpidf_journees.id 
								  AND phpidf_journees.numero='$numero' 
								  AND phpidf_journees.id_champ='$champ' 
								  AND (CLEXT.nom='exempte' or phpidf_clubs.nom='exempte')");


  while ($row3 = mysqli_fetch_array($resultats3)) {
    $row3[0] = stripslashes($row3[0]);
    $row3[1] = stripslashes($row3[1]);
    if (($i % 2) == 0) {
      $class = "phpidf3";
    } else {
      $class = "phpidf4";
    }
    if ($row3[0] == 'exempte') {
      echo "<tr><td colspan=6  class=$class>" . ADMIN_RESULTS_1 . " : $row3[1]</td></tr>";
    }
    if ($row3[1] == 'exempte') {
      echo "<tr><td colspan=6  class=$class>" . ADMIN_RESULTS_1 . " : $row3[0]</td></tr>";
    }
  }


  echo "</tr><td colspan=\"5\" align=\"center\">";
  echo "<input type=\"hidden\" name=\"champ\" value=\"$champ\">";

  $numero = $numero + 1;
  echo "<input type=\"hidden\" name=\"numero\" value=\"$numero\">";
  echo "<input type=\"hidden\" name=\"action\" value=\"resultats\">";
  echo "<input type=\"hidden\" name=\"action2\" value=\"1\">";
  $button = ENVOI;
  echo "<input type=\"submit\" value=$button>";
  echo "</td></tr></table>";
}

function nb_equipes($id_champ, $idconnect)
{
  $result = $idconnect->query(" SELECT id 
							  FROM phpidf_equipes 
							  WHERE id_champ='$id_champ'");

  //if (!$result) die mysql_error();
  $nb_equipes = mysqli_num_rows($result);
  return ("$nb_equipes");
}

function format_date_us($date)
{
  list($jour, $mois, $annee) = explode("/", substr($date, 0, 10));
  list($heure, $minute) = explode(":", substr($date, 10, 22));

  $seconde = "00";
  return $annee . "-" . $mois . "-" . $jour . " " . $heure . ":" . $minute . ":" . $seconde;
}

function date_us_vers_fr($dateUS) // $dateUS=AAAA-MM-JJ
{
  //$elementsdate=chunk_split($dateUS , 2 , "-");
  $elementsdate = explode("-", $dateUS);
  $jour = $elementsdate[2];
  $mois = $elementsdate[1];
  $annee = $elementsdate[0];
  return $dateFR = $jour . $mois . $annee;
}

function date_fr_vers_us($dateFR)
{
  if ($dateFR) {
    $elementsdate = chunk_split($dateFR, 2, "-");
    $elementsdate = explode("-", $elementsdate);

    $annee = $elementsdate[2] . $elementsdate[3];
    $mois = $elementsdate[1];
    $jour = $elementsdate[0];
    $dateUS = $annee . "-" . $mois . "-" . $jour;
    return $dateUS;
  } else return "00000000";
}

function nom_club($id_equipe, $idconnect)
{
  $result = $idconnect->query(" SELECT nom 
							  FROM phpidf_clubs, phpidf_equipes 
							  WHERE phpidf_clubs.id=phpidf_equipes.id_club 
							  and phpidf_equipes.id='$id_equipe'");

  $row = mysqli_fetch_array($result);
  $nom_club = stripslashes($row[0]);
  return ("$nom_club");
}

function nb_journees($id_champ, $idconnect)
{
  $result = $idconnect->query(" SELECT id 
							  FROM phpidf_equipes 
							  WHERE id_champ='$id_champ'");

  $nb_equipes = mysqli_num_rows($result);
  $nb_journees = ((($nb_equipes) * 2) - 2);
  return ("$nb_journees");
}

function nb_matchs($numero, $champ, $idconnect)
{
  $result = $idconnect->query("select * 
							 from phpidf_matchs, phpidf_journees 
							 where phpidf_matchs.id_journee=phpidf_journees.id 
							 and phpidf_journees.numero=$numero 
							 and phpidf_journees.id_champ=$champ");

  $nb_matchs = mysqli_num_rows($result);
  return ("$nb_matchs");
}

// *** REMPLI LA TABLE CLMNT
function db_clmnt($champ, $debut, $fin, $cache, $idconnect)
{
  $nb_requete = 0;
  if ($cache == "1") {
    mysqli_query($idconnect, ("DELETE FROM phpidf_clmnt_cache WHERE ID_CHAMP='$champ'")) or die(mysqli_error($idconnect));
  } else {
    mysqli_query($idconnect, ("DELETE FROM phpidf_clmnt")) or die(mysqli_error($idconnect));
  }
  $nb_requete++;

  if (!$fin) {
    $fin = (nb_equipes($champ) * 2) - 2;
  }
  if (!$debut) {
    $debut = 1;
  }

  // SELECTION DES PARAMETRES

  $result = $idconnect->query("SELECT pts_victoire, pts_nul, pts_defaite 
							   FROM phpidf_parametres 
							   WHERE id_champ='$champ'");
  $nb_requete++;

  while ($row = mysqli_fetch_array($result)) {
    $pts_victoire = $row['pts_victoire'];
    $pts_nul = $row['pts_nul'];
    $pts_defaite = $row['pts_defaite'];
  }
  // RESULTATS domicile :
  // victoires domicile

  $dom = $idconnect->query("SELECT dom.id, count(dom.id), phpidf_clubs.nom, sum(buts_dom), sum(buts_ext) 
						  FROM phpidf_equipes as dom, phpidf_clubs, phpidf_matchs, phpidf_journees, phpidf_championnats
						  WHERE dom.id_champ='$champ'
						  AND dom.id_club=phpidf_clubs.id
						  AND dom.id=phpidf_matchs.id_equipe_dom
						  AND buts_dom > buts_ext
						  AND phpidf_championnats.id=phpidf_journees.id_champ
						  AND phpidf_journees.id=phpidf_matchs.id_journee
						  AND phpidf_journees.numero>='$debut'
						  AND phpidf_journees.numero<='$fin'
						  GROUP by phpidf_clubs.nom ");
  $nb_requete++;

  while ($row = mysqli_fetch_array($dom)) {
    $clmnt[$row[2]]['GDOM'] = $row[1];
    if (!isset($clmnt[$row[2]]['BUTSDOMPOUR'])) {
      $clmnt[$row[2]]['BUTSDOMPOUR'] = $row[3];
    } else {
      $clmnt[$row[2]]['BUTSDOMPOUR'] += $row[3];
    }
    if (!isset($clmnt[$row[2]]['BUTSDOMCONTRE'])) {
      $clmnt[$row[2]]['BUTSDOMCONTRE'] = $row[4];
    } else {
      $clmnt[$row[2]]['BUTSDOMCONTRE'] += $row[4];
    }
  }

  // Defaites domicile

  $dom = $idconnect->query("
		 SELECT dom.id, count(dom.id), phpidf_clubs.nom, sum(buts_dom), sum(buts_ext) 
	     FROM phpidf_equipes as dom, phpidf_clubs, phpidf_matchs, phpidf_journees, phpidf_championnats
		 WHERE dom.id_champ='$champ'
         AND dom.id_club=phpidf_clubs.id
         AND dom.id=phpidf_matchs.id_equipe_dom
         AND buts_dom < buts_ext
         AND phpidf_championnats.id=phpidf_journees.id_champ
         AND phpidf_journees.id=phpidf_matchs.id_journee
         AND phpidf_journees.numero>='$debut'
         AND phpidf_journees.numero<='$fin'
         GROUP by phpidf_clubs.nom ");

  $nb_requete++;


  while ($row = mysqli_fetch_array($dom)) {
    $clmnt[$row[2]]['PDOM'] = $row[1];
    if (!isset($clmnt[$row[2]]['BUTSDOMPOUR'])) {
      $clmnt[$row[2]]['BUTSDOMPOUR'] = $row[3];
    } else {
      $clmnt[$row[2]]['BUTSDOMPOUR'] += $row[3];
    }
    if (!isset($clmnt[$row[2]]['BUTSDOMCONTRE'])) {
      $clmnt[$row[2]]['BUTSDOMCONTRE'] = $row[4];
    } else {
      $clmnt[$row[2]]['BUTSDOMCONTRE'] += $row[4];
    }
  }

  // Nuls domicile

  $dom = $idconnect->query("
		 SELECT dom.id, count(dom.id), phpidf_clubs.nom, sum(buts_dom), sum(buts_ext) 
		 FROM phpidf_equipes as dom, phpidf_clubs, phpidf_matchs, phpidf_journees, phpidf_championnats
		 WHERE dom.id_champ='$champ'
         AND dom.id_club=phpidf_clubs.id
         AND dom.id=phpidf_matchs.id_equipe_dom
         AND buts_dom = buts_ext
         AND buts_dom is not null
         AND buts_ext is not null
         AND phpidf_championnats.id=phpidf_journees.id_champ
         AND phpidf_journees.id=phpidf_matchs.id_journee
         AND phpidf_journees.numero>='$debut'
         AND phpidf_journees.numero<='$fin'
         GROUP by phpidf_clubs.nom ");

  while ($row = mysqli_fetch_array($dom)) {
    $clmnt[$row[2]]['NDOM'] = $row[1];
    if (!isset($clmnt[$row[2]]['BUTSDOMPOUR'])) {
      $clmnt[$row[2]]['BUTSDOMPOUR'] = $row[3];
    } else {
      $clmnt[$row[2]]['BUTSDOMPOUR'] += $row[3];
    }
    if (!isset($clmnt[$row[2]]['BUTSDOMCONTRE'])) {
      $clmnt[$row[2]]['BUTSDOMCONTRE'] = $row[4];
    } else {
      $clmnt[$row[2]]['BUTSDOMCONTRE'] += $row[4];
    }
  }

  $result = $idconnect->query("SELECT phpidf_clubs.nom 
							 FROM phpidf_clubs, phpidf_equipes, phpidf_championnats
							 WHERE phpidf_equipes.id_champ=phpidf_championnats.id
							 AND phpidf_championnats.id='$champ'
							 AND phpidf_equipes.id_club=phpidf_clubs.id");

  //$result=mysqli_query($idconnect, $query) or die (mysqli_error($idconnect));

  // while($row= mysqli_fetch_array($result))
  //     { $equipe= $row[0];

  //	 echo $equipe;echo "<br />";
  //	 }



  // RESULTATS EXTERIEURS :
  // victoires exterieur	

  $dom = $idconnect->query("SELECT ext.id, count(ext.id), phpidf_clubs.nom, sum(buts_ext), sum(buts_dom) FROM phpidf_equipes as ext, phpidf_clubs, phpidf_matchs, phpidf_journees, phpidf_championnats
WHERE ext.id_champ='$champ'
      AND ext.id_club=phpidf_clubs.id
      AND ext.id=phpidf_matchs.id_equipe_ext
      AND buts_ext > buts_dom
      AND phpidf_championnats.id=phpidf_journees.id_champ
      AND phpidf_journees.id=phpidf_matchs.id_journee
      AND phpidf_journees.numero>='$debut'
      AND phpidf_journees.numero<='$fin'
      GROUP by phpidf_clubs.nom ");

  while ($row = mysqli_fetch_array($dom)) {
    $clmnt[$row[2]]['GEXT'] = $row[1];
    if (!isset($clmnt[$row[2]]['BUTSEXTPOUR'])) {
      $clmnt[$row[2]]['BUTSEXTPOUR'] = $row[3];
    } else {
      $clmnt[$row[2]]['BUTSEXTPOUR'] += $row[3];
    }
    if (!isset($clmnt[$row[2]]['BUTSEXTCONTRE'])) {
      $clmnt[$row[2]]['BUTSEXTCONTRE'] = $row[4];
    } else {
      $clmnt[$row[2]]['BUTSEXTCONTRE'] += $row[4];
    }
  }


  // Defaites exterieur	

  $dom = $idconnect->query("SELECT ext.id, count(ext.id), phpidf_clubs.nom, sum(buts_ext), sum(buts_dom) FROM phpidf_equipes as ext, phpidf_clubs, phpidf_matchs, phpidf_journees, phpidf_championnats
		WHERE ext.id_champ='$champ'
      AND ext.id_club=phpidf_clubs.id
      AND ext.id=phpidf_matchs.id_equipe_ext
      AND buts_ext < buts_dom
      AND phpidf_championnats.id=phpidf_journees.id_champ
      AND phpidf_journees.id=phpidf_matchs.id_journee
      AND phpidf_journees.numero>='$debut'
      AND phpidf_journees.numero<='$fin'
      GROUP by phpidf_clubs.nom ");

  while ($row = mysqli_fetch_array($dom)) {
    $clmnt[$row[2]]['PEXT'] = $row[1];
    if (!isset($clmnt[$row[2]]['BUTSEXTPOUR'])) {
      $clmnt[$row[2]]['BUTSEXTPOUR'] = $row[3];
    } else {
      $clmnt[$row[2]]['BUTSEXTPOUR'] += $row[3];
    }
    if (!isset($clmnt[$row[2]]['BUTSEXTCONTRE'])) {
      $clmnt[$row[2]]['BUTSEXTCONTRE'] = $row[4];
    } else {
      $clmnt[$row[2]]['BUTSEXTCONTRE'] += $row[4];
    }
  }

  $dom = $idconnect->query("SELECT ext.id, count(ext.id), phpidf_clubs.nom, sum(buts_ext), sum(buts_dom) FROM phpidf_equipes as ext, phpidf_clubs, phpidf_matchs, phpidf_journees, phpidf_championnats
	  WHERE ext.id_champ='$champ'
      AND ext.id_club=phpidf_clubs.id
      AND ext.id=phpidf_matchs.id_equipe_ext
      AND buts_ext = buts_dom
      AND buts_dom is not null
      AND buts_ext is not null
      AND phpidf_championnats.id=phpidf_journees.id_champ
      AND phpidf_journees.id=phpidf_matchs.id_journee
      AND phpidf_journees.numero>='$debut'
      AND phpidf_journees.numero<='$fin'
      GROUP by phpidf_clubs.nom ");

  while ($row = mysqli_fetch_array($dom)) {
    $clmnt[$row[2]]['NEXT'] = $row[1];
    if (!isset($clmnt[$row[2]]['BUTSEXTPOUR'])) {
      $clmnt[$row[2]]['BUTSEXTPOUR'] = $row[3];
    } else {
      $clmnt[$row[2]]['BUTSEXTPOUR'] += $row[3];
    }
    if (!isset($clmnt[$row[2]]['BUTSEXTCONTRE'])) {
      $clmnt[$row[2]]['BUTSEXTCONTRE'] = $row[4];
    } else {
      $clmnt[$row[2]]['BUTSEXTCONTRE'] += $row[4];
    }
  }

  // TABLEAU DE CLASSEMENT

  $result = $idconnect->query("SELECT phpidf_clubs.nom, phpidf_equipes.penalite, phpidf_equipes.id, phpidf_equipes.pts_admin, phpidf_equipes.jour_pere
							 FROM phpidf_clubs, phpidf_equipes, phpidf_championnats
							 WHERE phpidf_equipes.id_champ=phpidf_championnats.id
							 AND phpidf_championnats.id='$champ'
							 AND phpidf_equipes.id_club=phpidf_clubs.id");

  //$result=mysqli_query($idconnect, $query) or die (mysqli_error($idconnect));
  /*
	while($row= mysqli_fetch_array($result))
    { 
     $equipe= $row[0];$penalite= $row[1];$equipeId= $row[2];
	 echo $equipe.' '.$penalite.' '.$equipeId;echo "<br />";
	}
	*/
  //mysqlY_query("LOCK TABLE phpidf_clmnt WRITE, phpidf_equipes WRITE, phpidf_clubs WRITE") or die (mysql_error());
  /*
    if (mysqli_num_rows($result)==0)
    {
	   // $idconnect=@mysqli_connect('127.0.0.1','root','','onepip-france-db3');	
  
		$result=$idconnect->query("SELECT phpidf_clubs.nom, phpidf_equipes.id 
            FROM phpidf_clubs, phpidf_equipes, phpidf_championnats
            WHERE phpidf_equipes.id_champ=phpidf_championnats.id
            AND phpidf_championnats.id='$champ'
            AND phpidf_equipes.id_club=phpidf_clubs.id");

		$result=mysqli_query($query) or die (mysqli_error());
    }
	*/
  while ($row = mysqli_fetch_array($result)) {
    $NOM = $row['nom'];
    $ID_EQUIPE = $row['id'];
    $PEN = $row['penalite'];
    $JOURPERE = $row['jour_pere'];
    $PTS_ADMIN = $row['pts_admin'];
    $ID_CHAMP = $champ;
    $DOMJOUES = $clmnt[$NOM]['GDOM'] + $clmnt[$NOM]['NDOM'] + $clmnt[$NOM]['PDOM'];
    $EXTJOUES = $clmnt[$NOM]['GEXT'] + $clmnt[$NOM]['NEXT'] + $clmnt[$NOM]['PEXT'];
    $JOUES = $EXTJOUES + $DOMJOUES + $JOURPERE;
    $DOMPOINTS = (($clmnt[$NOM]['GDOM']) * $pts_victoire) + (($clmnt[$NOM]['NDOM']) * $pts_nul) + (($clmnt[$NOM]['PDOM']) * $pts_defaite);
    $EXTPOINTS = (($clmnt[$NOM]['GEXT']) * $pts_victoire) + (($clmnt[$NOM]['NEXT']) * $pts_nul) + (($clmnt[$NOM]['PEXT']) * $pts_defaite);

    if ($JOURPERE == 0)
      $POINTS = $DOMPOINTS + $EXTPOINTS + $PEN + $PTS_ADMIN;
    else
      $POINTS = $DOMPOINTS + $EXTPOINTS + $PEN + $PTS_ADMIN + ((($DOMPOINTS + $EXTPOINTS + $PEN) / ($EXTJOUES + $DOMJOUES)) * $JOURPERE);


    $G = $clmnt[$NOM]['GEXT'] + $clmnt[$NOM]['GDOM'];
    $N = $clmnt[$NOM]['NEXT'] + $clmnt[$NOM]['NDOM'];
    $P = $clmnt[$NOM]['PEXT'] + $clmnt[$NOM]['PDOM'];

    if (isset($clmnt[$NOM]['GDOM'])) $DOMG = ($clmnt[$NOM]['GDOM']);
    else $DOMG = 0;
    if (isset($clmnt[$NOM]['NDOM'])) $DOMN = ($clmnt[$NOM]['NDOM']);
    else $DOMN = 0;
    if (isset($clmnt[$NOM]['PDOM'])) $DOMP = ($clmnt[$NOM]['PDOM']);
    else $DOMP = 0;
    if (isset($clmnt[$NOM]['GEXT'])) $EXTG = ($clmnt[$NOM]['GEXT']);
    else $EXTG = 0;
    if (isset($clmnt[$NOM]['NEXT'])) $EXTN = ($clmnt[$NOM]['NEXT']);
    else $EXTN = 0;
    if (isset($clmnt[$NOM]['PEXT'])) $EXTP = ($clmnt[$NOM]['PEXT']);
    else $EXTP = 0;
    $BUTSPOUR = $clmnt[$NOM]['BUTSEXTPOUR'] + $clmnt[$NOM]['BUTSDOMPOUR'];
    if (isset($clmnt[$NOM]['BUTSDOMPOUR'])) $DOMBUTSPOUR = $clmnt[$NOM]['BUTSDOMPOUR'];
    else $DOMBUTSPOUR = 0;
    if (isset($clmnt[$NOM]['BUTSEXTPOUR'])) $EXTBUTSPOUR = $clmnt[$NOM]['BUTSEXTPOUR'];
    else $EXTBUTSPOUR = 0;
    $BUTSCONTRE = $clmnt[$NOM]['BUTSEXTCONTRE'] + $clmnt[$NOM]['BUTSDOMCONTRE'];
    if (isset($clmnt[$NOM]['BUTSDOMCONTRE'])) $DOMBUTSCONTRE = $clmnt[$NOM]['BUTSDOMCONTRE'];
    else $DOMBUTSCONTRE = 0;
    if (isset($clmnt[$NOM]['BUTSEXTCONTRE'])) $EXTBUTSCONTRE = $clmnt[$NOM]['BUTSEXTCONTRE'];
    else $EXTBUTSCONTRE = 0;
    $DIFF = $BUTSPOUR - $BUTSCONTRE;
    $DOMDIFF = $DOMBUTSPOUR - $DOMBUTSCONTRE;
    $EXTDIFF = $EXTBUTSPOUR - $EXTBUTSCONTRE;
    $NOM = addslashes($row['nom']);


    if ($cache == "1") {
      mysqli_query($idconnect, ("INSERT INTO phpidf_clmnt_cache(NOM, POINTS, JOUES, JOURPERE,  G, N, P, BUTSPOUR, BUTSCONTRE, DIFF, PEN,PTS_ADMIN,  DOMPOINTS, DOMJOUES, DOMG, DOMN, DOMP, DOMBUTSPOUR, DOMBUTSCONTRE, DOMDIFF, EXTPOINTS, EXTJOUES, EXTG, EXTN, EXTP, EXTBUTSPOUR, EXTBUTSCONTRE, EXTDIFF, ID_EQUIPE, ID_CHAMP) 
									  VALUES('$NOM','$POINTS','$JOUES',$JOURPERE, '$G','$N','$P','$BUTSPOUR','$BUTSCONTRE','$DIFF','$PEN', '$PTS_ADMIN',  '$DOMPOINTS','$DOMJOUES','$DOMG','$DOMN','$DOMP','$DOMBUTSPOUR','$DOMBUTSCONTRE','$DOMDIFF','$EXTPOINTS','$EXTJOUES','$EXTG','$EXTN','$EXTP','$EXTBUTSPOUR','$EXTBUTSCONTRE','$EXTDIFF','$ID_EQUIPE','$ID_CHAMP')"));
    } else {
      mysqli_query($idconnect, ("INSERT INTO phpidf_clmnt(NOM, POINTS, JOUES, JOURPERE, G, N, P, BUTSPOUR, BUTSCONTRE, DIFF, PEN, PTS_ADMIN, DOMPOINTS, DOMJOUES, DOMG, DOMN, DOMP, DOMBUTSPOUR, DOMBUTSCONTRE, DOMDIFF, EXTPOINTS, EXTJOUES, EXTG, EXTN, EXTP, EXTBUTSPOUR, EXTBUTSCONTRE, EXTDIFF, ID_EQUIPE, ID_CHAMP) 
									  VALUES('$NOM','$POINTS','$JOUES',$JOURPERE, '$G','$N','$P','$BUTSPOUR','$BUTSCONTRE','$DIFF','$PEN', '$PTS_ADMIN', '$DOMPOINTS','$DOMJOUES','$DOMG','$DOMN','$DOMP','$DOMBUTSPOUR','$DOMBUTSCONTRE','$DOMDIFF','$EXTPOINTS','$EXTJOUES','$EXTG','$EXTN','$EXTP','$EXTBUTSPOUR','$EXTBUTSCONTRE','$EXTDIFF','$ID_EQUIPE','$ID_CHAMP')"));
    }
  }

  // echo "cache fin : ".$cache;  
  if ($cache == "1") {
    $requete = "DELETE FROM phpidf_clmnt_cache WHERE nom='exempte'";
  } else {
    $requete = "DELETE FROM phpidf_clmnt WHERE nom='exempte'";
  }

  //$resultat=mysqli_query($idconnect,$requete) or die (mysqli_error($idconnect));
  //mysql_query("UNLOCK TABLES") or die (mysql_error());


  //echo "fin";//echo "<br />"; 
}

// Nombres de renseignement dans cette classe � partir de l'id_classe  (utilis� dans phpidf_classe.php)
function nb_classe($data, $idconnect)
{
  $result = $idconnect->query("SELECT id FROM phpidf_rens WHERE id_classe='$data'");
  //if (!$result) die mysql_error();
  $nb_classe = mysqli_num_rows($result);
  return ("$nb_classe");
}

// Nombres de classes enregistr�es (ulilis� dans phpidf_classe.php)
function nb_classe2($idconnect)
{
  $result = $idconnect->query("SELECT * FROM phpidf_classe");
  //if (!$result) die mysql_error();
  $nb_classe2 = mysqli_num_rows($result);
  return ("$nb_classe2");
}

// Nombres de renseignements class�s (utilis� dans admin/rens.php)
function nb_rens($idconnect)
{
  $result = $idconnect->query("SELECT id FROM phpidf_rens where id_classe>'0'");
  $nb_rens = mysqli_num_rows($result);
  return ("$nb_rens");
}

// Nombres de renseignements enregistr�s (utilis� dans rens.php)
function nb_rens2($idconnect)
{
  $result = $idconnect->query("SELECT * FROM phpidf_rens");
  $nb_rens2 = mysqli_num_rows($result);
  return ("$nb_rens2");
}

// id du renseignement � partir du nom du rens (utilis� dans rens.php)
function rens2($rens, $idconnect)
{
  $result = $idconnect->query("select id, nom from phpidf_rens where nom='$rens'");
  //if (!$result) die mysql_error();
  $row = mysqli_fetch_array($result);
  $rens2 = $row[0];
  return ("$rens2");
}

// Affichage des renseignements (utilis� dans gestequipes.php
function aff_rens($id_classe, $id_clubs, $idconnect)
{
  $result = $idconnect->query("SELECT phpidf_donnee.id, phpidf_donnee.nom, id_rens, id_clubs, phpidf_rens.id, phpidf_rens.nom, phpidf_rens.id_classe, phpidf_clubs.id, etat, phpidf_donnee.url, phpidf_rens.url
							 FROM phpidf_donnee, phpidf_rens, phpidf_clubs
							 WHERE id_clubs='$id_clubs'
							 AND id_clubs=phpidf_clubs.id
							 AND id_rens=phpidf_rens.id
							 AND id_classe='$id_classe'
							 AND etat='1' 
							 order by rang");

  $nb_rens = mysqli_num_rows($result);

  if ($nb_rens == "0") {
    echo "<center>" . ADMIN_EQUIPE_8 . "</center>";
  }

  while ($row = mysqli_fetch_array($result)) {
    $donnee_nom = stripslashes($row[1]);
    $rens_nom = stripslashes($row[5]);

    if (empty($row[9]) and empty($row[10])) {
      echo "<b>$rens_nom :</b> $donnee_nom <br />";
    } elseif (empty($row[9])) {
      echo "<b><a href=\"$row[10]\">$rens_nom</a> :</b> $donnee_nom<br />";
    } elseif (empty($row[10])) {
      echo "<b>$rens_nom :</b> <a href=\"$row[9]\">$donnee_nom</a><br />";
    } else {
      echo "<b><a href=\"$row[10]\">$rens_nom</a> :</b> <a href=\"$row[9]\">$donnee_nom</a><br />";
    }
  }
}

function VerifSession($user_pseudo, $user_mdp, $idconnect)
{
  $user_pseudo = "onepip";
  $user_mdp = "lavelan";
  if ($user_pseudo and $user_mdp) {
    $result = $idconnect->query(" SELECT mot_de_passe, id_prono 
									FROM phpidf_membres 
									WHERE pseudo='onepip' 
									and admin='1'");

    $row = mysqli_fetch_array($result);

    if ($row["mot_de_passe"] == $user_mdp) {
      $a = 1;
    } else {
      $a = 0;
    }

    //session_start();
  } else {
    $a = 1;
  }
  return ("$a");
}
