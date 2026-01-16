<?php
//***********************************************************************/
// phpabeague : gestionnaire de championnat                              */
// ============================================                         */
//                                                                      */
// Version : 0.82                                                       */
// Copyright (c) 2004    Alexis MANGIN                                  */
// http://phpabeague.univert.org                                         */
//                                                                      */
// This program is free software. You can redistribute it and/or modify */
// it under the terms of the GNU General Public License as published by */
// the Free Software Foundation; either version 2 of the License.       */
//                                                                      */
//***********************************************************************/
// Support technique : http://phpabeague.univert.org/forum               */
//                                                                      */
//***********************************************************************/

if (isset($_GET['debut'])) {
  $debut = $_GET['debut'];
} else {
  $debut = '';
}

if (empty($debut) or $debut == "0") $debut = 0;
$apres = 1;
$fin = $debut + 10;
if ($debut == "0") {
  $suiv = "?page=pronos&amp;gr_champ=$gr_champ";
} else {
  $debut1 = ($debut - "10");
  $suiv = "?page=derniers_pronos&amp;debut=$debut1&amp;gr_champ=$gr_champ";
}

include("derniers_pronos.htm");


$result = $idconnect->query("SELECT phpab_clubs.nom, CLEXT.nom, phpab_matchs.buts_dom, phpab_matchs.buts_ext, phpab_matchs.id, phpab_matchs.date_reelle, phpab_journees.numero, pts_prono_exact, pts_prono_participation,phpab_matchs.id_equipe_dom,phpab_matchs.id_equipe_ext
FROM phpab_clubs, phpab_clubs as CLEXT, phpab_matchs, phpab_journees, phpab_equipes, phpab_equipes as EXT, phpab_gr_championnats
WHERE phpab_clubs.id=phpab_equipes.id_club
AND CLEXT.id=EXT.id_club 
AND phpab_equipes.id=phpab_matchs.id_equipe_dom
AND EXT.id=phpab_matchs.id_equipe_ext
AND phpab_matchs.id_journee=phpab_journees.id
AND phpab_journees.id_champ=phpab_gr_championnats.id_champ
AND phpab_gr_championnats.id='$gr_champ'
AND phpab_matchs.buts_dom is not null
AND phpab_matchs.buts_ext is not null
AND phpab_clubs.nom!='exempte'
AND CLEXT.nom!='exempte'
ORDER by phpab_matchs.date_reelle desc, phpab_clubs.nom desc
LIMIT $debut, $fin ");
$i = 0;
//$result=mysql_query($query);
if (mysqli_num_rows($result) == "0") {
  echo "<tr><td colspan=6 align=center><div class=\"blanc\">Journée Inexistante</div></td></tr>";
}
while ($row = mysqli_fetch_array($result) and $i < 10) {
  $clubs_nom = stripslashes($row[0]);
  $clubs_nom1 = stripslashes($row[1]);
    $id_dom = $row[9];
    $id_ext = $row[10];
  $result2 = $idconnect->query("SELECT pronostic 
							FROM phpab_pronostics, phpab_membres 
							WHERE phpab_pronostics.id_match='$row[4]' 
							AND phpab_membres.id=phpab_pronostics.id_membre 
							AND phpab_membres.id_prono='$user_id'");
  //$result2=mysql_query($query2) or die ("probleme " .mysql_error());
  $nb_pronos = mysqli_num_rows($result2);

  if ($nb_pronos == "0") {
    $prono = "0";
  } {
    while ($row2 = mysqli_fetch_array($result2)) {
      $prono = $row2["0"];
      if ($row2["0"] == "") {
        $prono = "0";
      }
    }
  }
  $date = format_date_fr_red($row[5]);
  echo "<tr><td class=\"blanc center\">$row[6]</td>";
  echo "<td class=\"blanc center\">$date</td>";


  if ($id_dom > 90000000) {
    echo "<td align=\"right\" class=\"colorYellow\">$clubs_nom II</td>";
   }
   else
     {
    echo "<td align=\"right\" class=\"blanc\">$clubs_nom </td>";
   }

  echo "<td>";
  echo "<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" align=\"center\" width=\"50\"><tr><td>";
  if ($prono == 1) {
?>
    <img src="affiche_selection.gif" border="no" alt="">
    <img src="afficheN.gif" border="no" alt="">
    <img src="affiche2.gif" border="no" alt="">
  <?php
  }
  if ($prono == "N") {
  ?>
    <img src="affiche1.gif" border="no" alt="">
    <img src="affiche_selection.gif" border="no" alt="">
    <img src="affiche2.gif" border="no" alt="">
  <?php
  }

  if ($prono == "2") {
  ?>
    <img src="affiche1.gif" border="no" alt="">
    <img src="afficheN.gif" border="no" alt="">
    <img src="affiche_selection.gif" border="no" alt="">
  <?php
  }
  if ($prono == "0") {
  ?>
    <img src="affiche1.gif" border="no" alt="">
    <img src="afficheN.gif" border="no" alt="">
    <img src="affiche2.gif" border="no" alt="">
<?php
  }

  echo "</td>\n</tr>\n</table>\n</td>\n";
  $pronos_exact = $row['pts_prono_exact'] + $row['pts_prono_participation'];

  if ($id_ext > 90000000) {
          echo "<td class=\"colorYellow center\">$clubs_nom1 II</td>";
 }
 else
 {
          echo "<td class=\"blanc center\">$clubs_nom1</td>";
 }
  
  
  
  echo "<td  class=\"blanc center\">$row[2]-$row[3]</td>";
  echo "<td class=\"center\">";
  if ($row[2] > $row[3] and $prono == 1) {
    echo "<img src=\"affiche_prono_correct.gif\" alt=\"\"></td><td class=\"blanc center\">$pronos_exact";
  } elseif ($row[2] == $row[3] and $prono == "N") {
    echo "<img src=\"affiche_prono_correct.gif\" alt=\"\"></td><td class=\"blanc center\">$pronos_exact";
  } elseif ($row[2] < $row[3] and $prono == "2") {
    echo "<img src=\"affiche_prono_correct.gif\" alt=\"\"></td><td class=\"blanc center\">$pronos_exact";
  } elseif ($prono == '0') {
    echo "</td><td class=\"blanc center\">0";
  } else {
    echo "<img src=\"affiche_prono_erreur.gif\" alt=\"\"></td><td class=\"blanc center\">$row[pts_prono_participation]";
  }
  echo "</td>";
  echo "</tr>";
  $i++;
}

echo "</table></td></tr></table>";
?>