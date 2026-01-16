<?php
//***********************************************************************/
// Phpleague : gestionnaire de championnat                              */
// ============================================                         */
//                                                                      */
// Version : 0.82                                                       */
// Copyright (c) 2004    Alexis MANGIN                                  */
// http://phpleague.univert.org                                         */
//                                                                      */
// This program is free software. You can redistribute it and/or modify */
// it under the terms of the GNU General Public License as published by */
// the Free Software Foundation; either version 2 of the License.       */
//                                                                      */
//***********************************************************************/
// Support technique : http://phpleague.univert.org/forum               */
//                                                                      */
//***********************************************************************/

if (isset($_GET['debut'])) {$debut=$_GET['debut'];} else {$debut='';}

if (empty ($debut) or $debut=="0") $debut=0; $apres=1;
$fin = $debut+10;
if ($debut=="0") {$suiv="?page=pronos&amp;gr_champ=$gr_champ";}
else {$debut1=($debut-"10"); $suiv="?page=derniers_pronos&amp;debut=$debut1&amp;gr_champ=$gr_champ"; }

include ("derniers_pronos.htm");


$query="SELECT phpl_clubs.nom, CLEXT.nom, phpl_matchs.buts_dom, phpl_matchs.buts_ext, phpl_matchs.id, phpl_matchs.date_reelle, phpl_journees.numero, pts_prono_exact, pts_prono_participation
FROM phpl_clubs, phpl_clubs as CLEXT, phpl_matchs, phpl_journees, phpl_equipes, phpl_equipes as EXT, phpl_gr_championnats
WHERE phpl_clubs.id=phpl_equipes.id_club
AND CLEXT.id=EXT.id_club 
AND phpl_equipes.id=phpl_matchs.id_equipe_dom
AND EXT.id=phpl_matchs.id_equipe_ext
AND phpl_matchs.id_journee=phpl_journees.id
AND phpl_journees.id_champ=phpl_gr_championnats.id_champ
AND phpl_gr_championnats.id='$gr_champ'
AND phpl_matchs.buts_dom is not null
AND phpl_matchs.buts_ext is not null
AND phpl_clubs.nom!='exempte'
AND CLEXT.nom!='exempte'
ORDER by phpl_matchs.date_reelle desc, phpl_clubs.nom desc
LIMIT $debut, $fin ";
$i=0;
$result=mysql_query($query);
if (mysql_num_rows( $result )=="0") {echo "<tr><td colspan=6 align=center><div class=\"blanc\">Journ�e Inexistante</div></td></tr>";}
while ($row=mysql_fetch_array($result) and $i<10)
  {
$clubs_nom = stripslashes($row[0]);
$clubs_nom1 = stripslashes($row[1]);
$query2= "SELECT pronostic FROM phpl_pronostics, phpl_membres WHERE phpl_pronostics.id_match='$row[4]' AND phpl_membres.id=phpl_pronostics.id_membre AND phpl_membres.id_prono='$user_id'";
$result2=mysql_query($query2) or die ("probleme " .mysql_error());
$nb_pronos= mysql_num_rows($result2 );

if ($nb_pronos == "0") {$prono="0";}
{
  while ($row2=mysql_fetch_array($result2))
  {
    $prono=$row2["0"];
    if ($row2["0"] == ""){$prono="0";}
  }
}
  $date=format_date_fr_red($row[5]);
  echo"<tr><td><div class=\"blanc\">$row[6]</div></td>";
  echo "<td><div class=\"blanc\">$date</div></td>";
  echo "<td align=\"right\"><div class=\"blanc\">$clubs_nom</div></td>";
    
  echo "<td>";
  echo "<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" align=\"center\" width=\"50\"><tr><td>";
  if ($prono=="1")
{ ?>
             <img src="affiche_selection.gif" border="no" alt="">
             <img src="afficheN.gif" border="no" alt="">
             <img src="affiche2.gif"  border="no" alt="">
 <?php
}
  if ($prono=="N")
{  ?>
             <img src="affiche1.gif" border="no" alt="">
             <img src="affiche_selection.gif" border="no" alt="">
             <img src="affiche2.gif"  border="no" alt="">
 <?php
}
  if ($prono=="2")
{  ?>
             <img src="affiche1.gif" border="no" alt="">
             <img src="afficheN.gif" border="no" alt="">
             <img src="affiche_selection.gif"  border="no" alt="">
 <?php
}
  if ($prono=="0")
{  ?>
             <img src="affiche1.gif" border="no" alt="">
             <img src="afficheN.gif" border="no" alt="">
             <img src="affiche2.gif"  border="no" alt="">
 <?php
}
  echo "</td>\n</tr>\n</table>\n</td>\n";
  $pronos_exact=$row['pts_prono_exact']+$row['pts_prono_participation'];

  echo "<td><div class=\"blanc\">$clubs_nom1</div></td>";
  echo "<td align=\"center\"><div class=\"blanc\">$row[2]-$row[3]</div></td>";
  echo "<td align=\"center\">";
  if ($row[2]>$row[3] and $prono=="1"){echo "<img src=\"affiche_prono_correct.gif\" alt=\"\"></td><td align=\"center\"><div class=\"blanc\">$pronos_exact</div>";}
  elseif ($row[2]==$row[3] and $prono=="N"){echo "<img src=\"affiche_prono_correct.gif\" alt=\"\"></td><td align=\"center\"><div class=\"blanc\">$pronos_exact</div>";}
  elseif ($row[2]<$row[3] and $prono=="2"){echo "<img src=\"affiche_prono_correct.gif\" alt=\"\"></td><td align=\"center\"><div class=\"blanc\">$pronos_exact</div>";}
  elseif ($prono=='0'){echo "</td><td align=\"center\"><div class=\"blanc\">0</div>";}
  else {echo "<img src=\"affiche_prono_erreur.gif\" alt=\"\"></td><td align=\"center\"><div class=\"blanc\">$row[pts_prono_participation]</div>";}
  echo "</td>";
  echo "</tr>";
  $i++;
}  



echo "</table></td></tr></table>";


?>
