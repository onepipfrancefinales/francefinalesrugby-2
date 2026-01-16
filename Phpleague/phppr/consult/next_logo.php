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
?>
<link rel="stylesheet" type="text/css" href="../league.css">
<?php
require ("../config.php") ;
require ("fonctions.php");
ouverture ();

echo "<STYLE>";
require ("../league.css");
echo "</STYLE>";
?>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <body class=phppr>
<?php

if (!isset($_REQUEST['champ']))
       {
         demande_champ ();
       }
else
{
$champ = $_REQUEST['champ'];
// Nom du champ
$query2="SELECT nom from phppr_divisions, phppr_championnats WHERE id_division=phppr_divisions.id";
$result2=(mysql_query($query2));
while ($row=mysql_fetch_array($result2))
       {
       $nom=$row[0];
       }

// SELECTION DES PARAMETRES
$query="SELECT * FROM phppr_parametres WHERE id_champ='$champ' ";
$result=(mysql_query($query));
while ($row=mysql_fetch_array($result))
       {
       $id_equipe_fetiche=$row['id_equipe_fetiche'];
       }

// NOM de EQUIPE FAVORITE a partir de son id
$result=(mysql_query("SELECT nom FROM phppr_clubs, phppr_equipes where phppr_equipes.id='$id_equipe_fetiche' AND phppr_clubs.id=phppr_equipes.id_club"));
while ($row=mysql_fetch_array($result))
       {
       $equipe_fetiche=$row[0];
       }

$query="SELECT max(phppr_journees.numero) FROM phppr_journees, phppr_matchs where phppr_journees.id=phppr_matchs.id_journee and buts_dom is not NULL and phppr_journees.id_champ='$champ' and (id_equipe_ext='$id_equipe_fetiche' or id_equipe_dom='$id_equipe_fetiche')";
                      $result=mysql_query($query);

                               while ($row=mysql_fetch_array($result))
                               { $numero=$row[0];
                                 
$query1="SELECT logodom.url_logo as logodom, logoext.url_logo as logoext, phppr_matchs.buts_dom, phppr_matchs.buts_ext, phppr_journees.date_prevue, logodom.id as logoiddom, logoext.id as logoidext
                FROM phppr_equipes as dom, phppr_equipes as ext, phppr_matchs, phppr_journees, phppr_clubs as logodom, phppr_clubs as logoext
                WHERE phppr_matchs.id_equipe_dom=dom.id
                        AND phppr_matchs.id_equipe_ext=ext.id
                        AND phppr_journees.id_champ='$champ'
                        AND phppr_journees.numero='$numero'
                        AND dom.id_club=logodom.id
                        AND ext.id_club=logoext.id
                        AND phppr_matchs.id_journee=phppr_journees.id
                        AND (phppr_matchs.id_equipe_ext='$id_equipe_fetiche'
                        OR phppr_matchs.id_equipe_dom='$id_equipe_fetiche' )";
        $result=mysql_query($query1) or die (mysql_error()) ;
         echo "<TABLE class=phppr cellspacing=\"0\" align=\"center\" >";
        $x=1;
        $legende="ème journée de $nom";
        
             while ($row=mysql_fetch_array($result))
             {
             $domproba= $row[2];
             $extproba= $row[3];


             if ($x==1)
                {
                $date = ereg_replace('^([0-9]{2,4})-([0-9]{1,2})-([0-9]{1,2})$','\\3/\\2/\\1', $row[4]);
                echo "<TR class=phppr ><TH class=phppr colspan=5 text-align=\"center\"><b> ". $numero."".$legende." le ".$date."</b></th></tr>";
                }
                
                $bgcolor="#FFFFFF";

                echo "<TR class=phppr bgcolor=$bgcolor width=\"100%\">";
                echo "<TD class=phppr align=\"right\" width=\"41%\">";
                echo "<a href=\"club.php?id_clubs=$row[5]&champ=$champ\"><img border=0 src=\"$row[logodom]\" width=40 height=50></a>";
                echo "</td><TD class=phppr align=\"center\">".$domproba."</td><TD class=phppr>-</td><TD class=phppr>".$extproba."</td>";
                echo "<TD class=phppr align=\"left\" width=\"41%\">";
                echo "<a href=\"club.php?id_clubs=$row[5]&champ=$champ\"><img border=0 src=\"$row[logoext]\" width=40 height=50></a>";
                echo "</td></tr>";                
                $x++;
             }

        echo "</table>";
 }                              }
echo "<br /><br />";
$query="SELECT max(phppr_journees.numero) FROM phppr_journees, phppr_matchs where phppr_journees.id=phppr_matchs.id_journee and buts_dom is not NULL and phppr_journees.id_champ='$champ' and (id_equipe_ext='$id_equipe_fetiche' or id_equipe_dom='$id_equipe_fetiche')";
                      $result=mysql_query($query);

                               while ($row=mysql_fetch_array($result))
                               { $numero=$row[0]+1;
                                 
$query1="SELECT logodom.url as logodom, logoext.url as logoext, phppr_matchs.buts_dom, phppr_matchs.buts_ext, phppr_journees.date_prevue, logodom.id as logoiddom, logoext.id as logoidext
                FROM phppr_equipes as dom, phppr_equipes as ext, phppr_matchs, phppr_journees, phppr_logo as logodom, phppr_logo as logoext
                WHERE phppr_matchs.id_equipe_dom=dom.id
                      AND phppr_matchs.id_equipe_ext=ext.id
                      AND phppr_journees.id_champ='$champ'
                      AND phppr_journees.numero='$numero'
                      AND dom.id_club=logodom.id_club
                      AND ext.id_club=logoext.id_club
                      AND phppr_matchs.id_journee=phppr_journees.id
                      AND (dom.id='$id_equipe_fetiche' OR ext.id='$id_equipe_fetiche')";
        $result=mysql_query($query1) or die (mysql_error()) ;
         echo "<TABLE class=phppr cellspacing=\"0\" align=\"center\" >";
        $x=1;
        $legende="ème journée de $nom";

             while ($row=mysql_fetch_array($result))
             { echo "r";
             $domproba= $row[2];
             $extproba= $row[3];


             if ($x==1)
                {
                $date = ereg_replace('^([0-9]{2,4})-([0-9]{1,2})-([0-9]{1,2})$','\\3/\\2/\\1', $row[4]);
                echo "<TR class=phppr ><TH class=phppr colspan=5 text-align=\"center\"><b> ". $numero."".$legende." le ".$date."</b></th></tr>";
                }
                

                $bgcolor="#FFFFFF";
                        

                echo "<TR class=phppr bgcolor=$bgcolor width=\"100%\">";
                echo "<TD class=phppr align=\"right\" width=\"41%\">";
                echo "<a href=\"club.php?id_clubs=$row[5]&champ=$champ\"><img border=0 src=\"$row[0]\" width=40 height=50></a>";
                echo "</td><TD class=phppr align=\"center\">".$domproba."</td><TD class=phppr>-</td><TD class=phppr>".$extproba."</td>";
                echo "<TD class=phppr align=\"left\" width=\"41%\">";
                echo "<a href=\"club.php?id_clubs=$row[5]&champ=$champ\"><img border=0 src=\"$row[1]\" width=40 height=50></a>";
                echo "</td></tr>";                
                $x++;
             }

        echo "</table>";
 }                              
?>
