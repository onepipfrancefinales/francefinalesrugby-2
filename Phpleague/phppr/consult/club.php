<?php
//***********************************************************************/
// phppreague : gestionnaire de championnat                              */
// ============================================                         */
//                                                                      */
// Version : 0.82                                                       */
// Copyright (c) 2004    Alexis MANGIN                                  */
// http://phppreague.univert.org                                         */
//                                                                      */
// This program is free software. You can redistribute it and/or modify */
// it under the terms of the GNU General Public License as published by */
// the Free Software Foundation; either version 2 of the License.       */
//                                                                      */
//***********************************************************************/
// Support technique : http://phppreague.univert.org/forum               */
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

$result= $idconnect->query("SELECT phppr_clubs.id, phppr_clubs.nom, id_champ, id_club
							FROM phppr_clubs, phppr_equipes
							WHERE phppr_equipes.id_champ='$champ' and phppr_equipes.id_club=phppr_clubs.id
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
							FROM phppr_clubs 
							WHERE id='$id_clubs'");
//$result = mysql_query($query);

$row = mysqli_fetch_array($result);
        
echo "<div align=\"center\"><img src=\"$row[1]\" alt=\"\"></div><br /><br /><br /><br />";
        
$result= $idconnect->query("SELECT phppr_classe.nom, phppr_classe.id 
							FROM phppr_classe 
							order by rang");
//$result=mysql_query ($query);

        while($row = mysqli_fetch_array($result))
        {
        echo "<table class=\"tablephppr2\" cellspacing=\"0\" align=\"center\" width=\"90%\">";
        echo "<tr class=\"trphppr3\"><td align=\"center\"><b>$row[0]</b></td></tr>";
        $id_classe=$row[1];
        echo "<tr><td><table cellspacing=\"0\"><tr class=\"trphppr\"><td>";
        $aff_rens=aff_rens ($id_classe, $id_clubs);
        echo "$aff_rens";
        echo "</td></tr></table></td></tr></table>\n";
        echo "<br /><br /><br /><br />\n";
        }

echo "<table class=\"tablephppr2\" cellspacing=\"0\" align=\"center\" width=\"90%\"><tr class=\"trphppr3\"><td align=\"center\"><b>Effectif</b></td></tr><tr><td>";

$result= $idconnect->query("SELECT phppr_equipes.id 
							FROM phppr_equipes, phppr_clubs 
							WHERE phppr_clubs.id='$id_clubs' 
							AND id_champ='$champ' 
							AND phppr_clubs.id=phppr_equipes.id_club");
//$result = mysql_query($query);
        
$row = mysqli_fetch_array($result);
        
        $equipe=$row[0];
        
$resultats= $idconnect->query("SELECT position_terrain
							FROM phppr_joueurs
							GROUP BY position_terrain desc");

//$resultats=mysql_query($requete) or die (mysql_error());

while ($row=mysqli_fetch_array($resultats))
{ $row[0]=addslashes($row[0]);
 $resultats1 = $idconnect->query("SELECT nom, prenom, phppr_joueurs.id
									FROM phppr_joueurs, phppr_effectif
									WHERE phppr_joueurs.id=phppr_effectif.id_joueur
									AND phppr_effectif.id_equipe='$equipe'
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


echo "<table class=\"tablephppr2\" cellspacing=\"0\" align=\"center\" width=\"90%\"><tr class=\"trphppr3\"><td align=\"center\"><b>".CONSULT_CLUB_4."</b></td></tr>";
        echo "<tr><td><center><img src=\"graph.php?equipe=$equipe\" alt=\"\"></center></td></tr>";


echo"</table><br /><br /><br />";

echo "<table class=\"tablephppr2\" cellspacing=\"0\" align=\"center\" width=\"90%\"><tr class=\"trphppr3\" align=\"center\"><td><b>".CONSULT_CLUB_3."</b></td></tr>";

$result= $idconnect->query("SELECT annee, phppr_divisions.nom, phppr_championnats.id, phppr_equipes.id
							FROM phppr_saisons, phppr_championnats, phppr_divisions, phppr_clubs, phppr_equipes
							WHERE phppr_equipes.id_champ=phppr_championnats.id
							AND id_division=phppr_divisions.id
							AND phppr_clubs.id=id_club
							AND phppr_equipes.id_club='$id_clubs'
							AND phppr_saisons.id=phppr_championnats.id_saison 
							order by annee desc");
//$result = mysql_query($query);
        
        while($row = mysqli_fetch_array($result))
        {
        echo "<tr><td></td></tr>";
        echo "<tr class=\"trphppr2\"><td align=\"center\">$row[0]/". ($row[0]+1)." ($row[1])</td></tr>";
        echo "<tr><td align=\"center\"><a href=\"classement.php?champ=$row[2]&amp;type=G%E9n%E9ral\">".CONSULT_CLUB_1."</a> - <a href=\"detaileq.php?champ=$row[2]&amp;id_equipe=$row[3]\">".CONSULT_CLUB_2."</a> - <a href=\"#\" onclick=\"window.open('graph.php?equipe=$row[3]','Stats','toolbar=0,location=0,directories=0,status=0,scrollbars=0,resizable=0,copyhistory=0,menuBar=0,width=560,height=320');return false;\">".CONSULT_CLUB_4."</a><br /><br /></td></tr>\n";

        }
echo"</table><br /><br />";

$result= $idconnect->query("SELECT phppr_clubs.id, phppr_clubs.nom, id_champ, id_club
							FROM phppr_clubs, phppr_equipes
							WHERE phppr_equipes.id_champ='$champ' and phppr_equipes.id_club=phppr_clubs.id
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
<p align="right"><font face="Verdana" size="1">Powered by <a href="http://phppreague.univert.org" target="_blank">phppreague</a></font></p>

<?php
include ("apres.php");
?>

