<html>
<head>
<title>Championnat territorial des Pyrénées</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
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

if (!isset($_REQUEST['champ']))
   {
       demande_champ ();
   }


// Choix du club
elseif (!isset($_REQUEST['id_equipe']))
{
$champ = $_REQUEST['champ'];

echo "<div align=\"center\"><font size=\"3\">".DETAILEQ_TITRE."</font><br /><br />";

demande_equipe($champ);
echo "</div>";
}

else
{
$champ = $_REQUEST['champ'];
$id_equipe = $_REQUEST['id_equipe'];

$result= $idconnect->query("SELECT id 
							FROM phpab_equipes 
							WHERE id_champ='$champ' 
							AND id='$id_equipe'");
//$result = mysql_query($query);
while ($row=mysqli_fetch_array($result))
    {
    $id_equipe=$row[0];
    }
$result= $idconnect->query("SELECT phpab_clubs.nom 
							FROM phpab_clubs, phpab_equipes 
							WHERE phpab_equipes.id='$id_equipe' 
							AND phpab_equipes.id_club=phpab_clubs.id");
//$result = mysql_query($query);
while ($row=mysqli_fetch_array($result))
    {
    $club = stripslashes($row[0]);

    }
$color=0;
$result= $idconnect->query("SELECT phpab_divisions.nom, phpab_saisons.annee, (phpab_saisons.annee)+1 
							FROM phpab_championnats, phpab_divisions, phpab_saisons 
							WHERE phpab_championnats.id='$champ' 
							AND phpab_divisions.id=phpab_championnats.id_division 
							AND phpab_saisons.id=phpab_championnats.id_saison");
//$result = mysql_query($query);
    while ($row=mysqli_fetch_array($result))
    {
          echo "<div align=\"center\"><h5>";
          echo $row[0];
          echo "  ";
          echo $row[1];
          echo "/";
          echo $row[2];
          echo "</h5></div>";
    }
echo "<div align=\"center\"><b>[ <font class=\"victoire\">".VICTOIRE."</font> | <font class=\"nul\">".NUL."</font> | <font class=\"defaite\">".DEFAITE."</font> ]</b></div><br />";
echo "<table class=\"tablephpab2\" align=\"center\" cellspacing=\"0\"  width=\"100%\">";


$result= $idconnect->query("SELECT phpab_journees.numero, cldom.nom, clext.nom, phpab_matchs.buts_dom, phpab_matchs.buts_ext, phpab_matchs.date_reelle, phpab_matchs.id
        FROM phpab_equipes as dom, phpab_equipes as ext, phpab_matchs, phpab_journees, phpab_clubs as cldom  , phpab_clubs as clext
        WHERE phpab_matchs.id_equipe_dom=dom.id
        AND phpab_matchs.id_equipe_ext=ext.id
        AND (phpab_matchs.id_equipe_ext='$id_equipe'
        OR phpab_matchs.id_equipe_dom='$id_equipe')
        AND phpab_journees.id_champ='$champ'
        AND dom.id_club=cldom.id
        AND ext.id_club=clext.id
        AND phpab_matchs.id_journee=phpab_journees.id
        ORDER BY phpab_journees.numero");
//$result=mysql_query($query1);

echo "<tr class=\"trphpab3\"><td align=\"center\"><b>".JOURNEE."</b></td><td width=\"5%\"></td><td width=\"30%\" ><b>".DATE."</b></td><td colspan=\"5\"></td></tr>";
        while ($row=mysqli_fetch_array($result))
        {
      $row[1] = stripslashes($row[1]);
      $row[2] = stripslashes($row[2]);
	
	 if (($color%2)==0) {$classe="ligne1";} else {$classe="ligne2";}

	 $color+=1;
         echo "<tr class=\"$classe\">\n";
         echo "<td align=\"center\"><b>$row[0]</b></td>\n";
         echo "<td></td>";
         echo "<td>";

                $minute = substr($row[5],14,2); // on récupère la minute
                $heure = substr($row[5],11,2); // on récupère l'heure
                $jour = substr($row[5],8,2); // on récupère le jour
                $mois = substr($row[5],5,2); // puis le mois
                $annee = substr($row[5],0,4); // et l'annee



               setlocale(LC_TIME, 'fr_FR.utf8','fra');
                $t= mktime($heure,$minute,0,$mois,$jour,$annee);
                echo strftime("%A %d %B ",$t);
              //  echo strftime("- %Hh%M",$t);

                                
         echo "</td>";

                if ($row[1]=='exempte' or $row[2]=='exempte'){echo "<td align=\"right\">".ADMIN_RESULTS_1."</td><td colspan=\"5\"></td>";}
                else
                {

                echo "<td align=\"right\">";
                if ($row[3]<>'' and $row[1]==$club)
                {
                  if ($row[3]>$row[4]) echo "<font class=\"victoire\">";
                  if ($row[3]<$row[4]) echo "<font class=\"defaite\">";
                  if ($row[3]==$row[4]) echo "<font class=\"nul\">";
                  echo "<b>"; 
                }
                echo $row[1];
                
                if ($row[3]<>'' and $row[1]==$club) {echo "</b></font>";}
                
                echo "</td>";
                echo "<td align=\"center\"><a href=\"#\" onclick=\"window.open('match.php?id_match=$row[6]','Fichematch','toolbar=0,location=0,directories=0,status=0,scrollbars=1,resizable=0,copyhistory=0,menuBar=0,width=560,height=320');return false;\">$row[3] - $row[4]</a>";
                echo "</td><td align=\"left\">";
                if ($row[4]<>'' and $row[2]==$club)
                {
                 if ($row[3]<$row[4]) echo "<font class=\"victoire\">";
                 if ($row[3]>$row[4]) echo "<font class=\"defaite\">";
                 if ($row[3]==$row[4]) echo "<font class=\"nul\">";
                 echo "<b>"; 
                }
                
                echo $row[2];
                if ($row[4]<>'' and $row[2]==$club) {echo "</b></font>";}
                echo "</td></tr>";
                }
        }
echo "</table><br />";
if (isset($_SERVER["HTTP_REFERER"])) {$referer=$_SERVER["HTTP_REFERER"];} else {$referer="classement.php?champ=$champ&amp;type=Général";}
echo "<div align=\"center\"><a href=\"$referer\"><b>".RETOUR."</b></a></div><br />";
}
?>
<br />
<p align="right"><font face="Verdana" size="1"></font></p>
<?php
 include ("apres.php");
?>
