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

include ("avant.php");
require ("../config.php") ;
require ("../consult/fonctions.php");
ouverture ();
ENTETE2 ();

//Choix du championnat
if (!isset($_REQUEST['champ']))
{
        demande_champ ();
}

// Choix du club
elseif (!isset($_REQUEST['id_clubs']))
{
$champ = $_REQUEST['champ'];

$result= $idconnect->query("SELECT phpab_clubs.id, phpab_clubs.nom, id_champ, id_club
							FROM phpab_clubs, phpab_equipes
							WHERE phpab_equipes.id_champ='$champ' and phpab_equipes.id_club=phpab_clubs.id
							ORDER BY nom");
//$result=mysql_query($query);

echo "<div align=\"center\"><font color=\"#000000\" size=\"2\"><u>".DETAILEQ_TITRE."</u></font>";
echo "<form action=\"\" method=\"get\">";

echo DETAILEQ_1;
echo "<select name=\"id_clubs\">";
echo "<option value=\"0\"> </option>";

      while($row = mysqli_fetch_array($result))
      {
      $row[1] = stripslashes($row[1]);
      $a=$row[1]+1;
      echo (" <option value=\"$row[0]\">$row[1]");
      echo ("</option>\n");
      }
echo "</select>";
$button=ENVOI;
echo "<input type=\"submit\" value=\"$button\">";
echo "<input type=\"hidden\" name=\"champ\" value=\"$champ\">";
echo "</form></div>";
}

// Le choix du club étant fait on affiche la fiche du club
else
{
$id_clubs = $_REQUEST['id_clubs'];
$champ = $_REQUEST['champ'];

$result= $idconnect->query("SELECT id, url_logo 
							FROM phpab_clubs 
							WHERE id='$id_clubs'");
//$result = mysql_query($query);

$row = mysqli_fetch_array($result);
        
echo "<div align=\"center\"><img src=\"$row[1]\" alt=\"\"></div><br /><br /><br /><br />";
        
$result= $idconnect->query("SELECT phpab_classe.nom, phpab_classe.id 
							FROM phpab_classe 
							order by rang");
//$result=mysql_query ($query);

        while($row = mysqli_fetch_array($result))
        {
        echo "<table class=\"tablephpab2\" cellspacing=\"0\" align=\"center\" width=\"90%\">";
        echo "<tr class=\"trphpab3\"><td align=\"center\"><b>$row[0]</b></td></tr>";
        $id_classe=$row[1];
        echo "<tr><td><table cellspacing=\"0\"><tr class=\"trphpab\"><td>";
        $aff_rens=aff_rens ($id_classe, $id_clubs);
        echo "$aff_rens";
        echo "</td></tr></table></td></tr></table>\n";
        echo "<br /><br /><br /><br />\n";
        }

echo "<table class=\"tablephpab2\" cellspacing=\"0\" align=\"center\" width=\"90%\"><tr class=\"trphpab3\"><td align=\"center\"><b>Effectif</b></td></tr><tr><td>";

$result= $idconnect->query("SELECT phpab_equipes.id 
							FROM phpab_equipes, phpab_clubs 
							WHERE phpab_clubs.id='$id_clubs' 
							AND id_champ='$champ' 
							AND phpab_clubs.id=phpab_equipes.id_club");
//$result = mysql_query($query);
        
$row = mysqli_fetch_array($result);
        
        $equipe=$row[0];
        
$resultats= $idconnect->query("SELECT position_terrain
							FROM phpab_joueurs
							GROUP BY position_terrain desc");

//$resultats=mysql_query($requete) or die (mysql_error());

while ($row=mysqli_fetch_array($resultats))
{ $row[0]=addslashes($row[0]);
 $resultats1 = $idconnect->query("SELECT nom, prenom, phpab_joueurs.id
									FROM phpab_joueurs, phpab_effectif
									WHERE phpab_joueurs.id=phpab_effectif.id_joueur
									AND phpab_effectif.id_equipe='$equipe'
									AND position_terrain='$row[0]'");
 //$resultats1=mysql_query($requete1) or die (mysql_error());
 
 if (!$row[0]=="") {$row[0]=stripslashes($row[0]);echo "<b>$row[0]</b> : ";}
 
 while ($row1=mysqli_fetch_array($resultats1))
  {
   echo "<a href=\"#\" onclick=\"window.open('joueurs.php?id_joueur=$row1[2]','Fichejoueur','toolbar=0,location=0,directories=0,status=0,scrollbars=1,resizable=0,copyhistory=0,menuBar=0,width=560,height=320');return false;\">$row1[1] $row1[0]</a> ";
  }
  echo "<br>";
}


echo"</td></tr></table><br /><br /><br />";


echo "<table class=\"tablephpab2\" cellspacing=\"0\" align=\"center\" width=\"90%\"><tr class=\"trphpab3\"><td align=\"center\"><b>".CONSULT_CLUB_4."</b></td></tr>";
        echo "<tr><td><center><img src=\"graph.php?equipe=$equipe\" alt=\"\"></center></td></tr>";


echo"</table><br /><br /><br />";

echo "<table class=\"tablephpab2\" cellspacing=\"0\" align=\"center\" width=\"90%\"><tr class=\"trphpab3\" align=\"center\"><td><b>".CONSULT_CLUB_3."</b></td></tr>";

$result= $idconnect->query("SELECT annee, phpab_divisions.nom, phpab_championnats.id, phpab_equipes.id
							FROM phpab_saisons, phpab_championnats, phpab_divisions, phpab_clubs, phpab_equipes
							WHERE phpab_equipes.id_champ=phpab_championnats.id
							AND id_division=phpab_divisions.id
							AND phpab_clubs.id=id_club
							AND phpab_equipes.id_club='$id_clubs'
							AND phpab_saisons.id=phpab_championnats.id_saison 
							order by annee desc");
//$result = mysql_query($query);
        
        while($row = mysqli_fetch_array($result))
        {
        echo "<tr><td></td></tr>";
        echo "<tr class=\"trphpab2\"><td align=\"center\">$row[0]/". ($row[0]+1)." ($row[1])</td></tr>";
        echo "<tr><td align=\"center\"><a href=\"classement.php?champ=$row[2]&amp;type=G%E9n%E9ral\">".CONSULT_CLUB_1."</a> - <a href=\"detaileq.php?champ=$row[2]&amp;id_equipe=$row[3]\">".CONSULT_CLUB_2."</a> - <a href=\"#\" onclick=\"window.open('graph.php?equipe=$row[3]','Stats','toolbar=0,location=0,directories=0,status=0,scrollbars=0,resizable=0,copyhistory=0,menuBar=0,width=560,height=320');return false;\">".CONSULT_CLUB_4."</a><br /><br /></td></tr>\n";

        }
echo"</table><br /><br />";

$result= $idconnect->query("SELECT phpab_clubs.id, phpab_clubs.nom, id_champ, id_club
							FROM phpab_clubs, phpab_equipes
							WHERE phpab_equipes.id_champ='$champ' and phpab_equipes.id_club=phpab_clubs.id
							ORDER BY nom");
//$result=mysql_query($query);

echo "<div align=\"center\"><form action=\"\" method=\"get\" onsubmit=\"\">";
echo "&nbsp;";
echo "&nbsp;";
//echo ADMIN_EQUIPE_2;

echo "<select name=\"id_clubs\">";
echo "<option value=\"0\"> </option>";

      while($row = mysqli_fetch_array($result))
      {
      $row[1] = stripslashes($row[1]);
      $a=$row[1]+1;
      echo (" <option value=\"$row[0]\">$row[1]");
      echo ("</option>\n");
      }
echo "</select>";



$button=ENVOI;
echo "<input type=\"submit\" value=\"$button\">";
echo "<input type=\"hidden\" name=\"champ\" value=\"$champ\">";
echo "</form>";

echo "<a href=\"";
if (isset($_SERVER['HTTP_REFERER'])) {print $_SERVER['HTTP_REFERER'];}
else {echo "club.php";}
echo "\"><b>".RETOUR."</b></a></div>";

}
?>
<br />
<p align="right"><font face="Verdana" size="1">Powered by <a href="http://phpabeague.univert.org" target="_blank">phpabeague</a></font></p>

<?php
include ("apres.php");
?>

