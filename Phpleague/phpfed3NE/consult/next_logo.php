<?php
//***********************************************************************/
// phpfed3NEeague : gestionnaire de championnat                              */
// ============================================                         */
//                                                                      */
// Version : 0.82                                                       */
// Copyright (c) 2004    Alexis MANGIN                                  */
// http://phpfed3NEeague.univert.org                                         */
//                                                                      */
// This program is free software. You can redistribute it and/or modify */
// it under the terms of the GNU General Public License as published by */
// the Free Software Foundation; either version 2 of the License.       */
//                                                                      */
//***********************************************************************/
// Support technique : http://phpfed3NEeague.univert.org/forum               */
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
        <body class=phpfed3NE>
<?php

if (!isset($_REQUEST['champ']))
       {
         demande_champ ();
       }
else
{
$champ = $_REQUEST['champ'];
// Nom du champ
$query2="SELECT nom from phpfed3NE_divisions, phpfed3NE_championnats WHERE id_division=phpfed3NE_divisions.id";
$result2=(mysql_query($query2));
while ($row=mysql_fetch_array($result2))
       {
       $nom=$row[0];
       }

// SELECTION DES PARAMETRES
$query="SELECT * FROM phpfed3NE_parametres WHERE id_champ='$champ' ";
$result=(mysql_query($query));
while ($row=mysql_fetch_array($result))
       {
       $id_equipe_fetiche=$row['id_equipe_fetiche'];
       }

// NOM de EQUIPE FAVORITE a partir de son id
$result=(mysql_query("SELECT nom FROM phpfed3NE_clubs, phpfed3NE_equipes where phpfed3NE_equipes.id='$id_equipe_fetiche' AND phpfed3NE_clubs.id=phpfed3NE_equipes.id_club"));
while ($row=mysql_fetch_array($result))
       {
       $equipe_fetiche=$row[0];
       }

$query="SELECT max(phpfed3NE_journees.numero) FROM phpfed3NE_journees, phpfed3NE_matchs where phpfed3NE_journees.id=phpfed3NE_matchs.id_journee and buts_dom is not NULL and phpfed3NE_journees.id_champ='$champ' and (id_equipe_ext='$id_equipe_fetiche' or id_equipe_dom='$id_equipe_fetiche')";
                      $result=mysql_query($query);

                               while ($row=mysql_fetch_array($result))
                               { $numero=$row[0];
                                 
$query1="SELECT logodom.url_logo as logodom, logoext.url_logo as logoext, phpfed3NE_matchs.buts_dom, phpfed3NE_matchs.buts_ext, phpfed3NE_journees.date_prevue, logodom.id as logoiddom, logoext.id as logoidext
                FROM phpfed3NE_equipes as dom, phpfed3NE_equipes as ext, phpfed3NE_matchs, phpfed3NE_journees, phpfed3NE_clubs as logodom, phpfed3NE_clubs as logoext
                WHERE phpfed3NE_matchs.id_equipe_dom=dom.id
                        AND phpfed3NE_matchs.id_equipe_ext=ext.id
                        AND phpfed3NE_journees.id_champ='$champ'
                        AND phpfed3NE_journees.numero='$numero'
                        AND dom.id_club=logodom.id
                        AND ext.id_club=logoext.id
                        AND phpfed3NE_matchs.id_journee=phpfed3NE_journees.id
                        AND (phpfed3NE_matchs.id_equipe_ext='$id_equipe_fetiche'
                        OR phpfed3NE_matchs.id_equipe_dom='$id_equipe_fetiche' )";
        $result=mysql_query($query1) or die (mysql_error()) ;
         echo "<TABLE class=phpfed3NE cellspacing=\"0\" align=\"center\" >";
        $x=1;
        $legende="ème journée de $nom";
        
             while ($row=mysql_fetch_array($result))
             {
             $domproba= $row[2];
             $extproba= $row[3];


             if ($x==1)
                {
                $date = ereg_replace('^([0-9]{2,4})-([0-9]{1,2})-([0-9]{1,2})$','\\3/\\2/\\1', $row[4]);
                echo "<TR class=phpfed3NE ><TH class=phpfed3NE colspan=5 text-align=\"center\"><b> ". $numero."".$legende." le ".$date."</b></th></tr>";
                }
                
                $bgcolor="#FFFFFF";

                echo "<TR class=phpfed3NE bgcolor=$bgcolor width=\"100%\">";
                echo "<TD class=phpfed3NE align=\"right\" width=\"41%\">";
                echo "<a href=\"club.php?id_clubs=$row[5]&champ=$champ\"><img border=0 src=\"$row[logodom]\" width=40 height=50></a>";
                echo "</td><TD class=phpfed3NE align=\"center\">".$domproba."</td><TD class=phpfed3NE>-</td><TD class=phpfed3NE>".$extproba."</td>";
                echo "<TD class=phpfed3NE align=\"left\" width=\"41%\">";
                echo "<a href=\"club.php?id_clubs=$row[5]&champ=$champ\"><img border=0 src=\"$row[logoext]\" width=40 height=50></a>";
                echo "</td></tr>";                
                $x++;
             }

        echo "</table>";
 }                              }
echo "<br /><br />";
$query="SELECT max(phpfed3NE_journees.numero) FROM phpfed3NE_journees, phpfed3NE_matchs where phpfed3NE_journees.id=phpfed3NE_matchs.id_journee and buts_dom is not NULL and phpfed3NE_journees.id_champ='$champ' and (id_equipe_ext='$id_equipe_fetiche' or id_equipe_dom='$id_equipe_fetiche')";
                      $result=mysql_query($query);

                               while ($row=mysql_fetch_array($result))
                               { $numero=$row[0]+1;
                                 
$query1="SELECT logodom.url as logodom, logoext.url as logoext, phpfed3NE_matchs.buts_dom, phpfed3NE_matchs.buts_ext, phpfed3NE_journees.date_prevue, logodom.id as logoiddom, logoext.id as logoidext
                FROM phpfed3NE_equipes as dom, phpfed3NE_equipes as ext, phpfed3NE_matchs, phpfed3NE_journees, phpfed3NE_logo as logodom, phpfed3NE_logo as logoext
                WHERE phpfed3NE_matchs.id_equipe_dom=dom.id
                      AND phpfed3NE_matchs.id_equipe_ext=ext.id
                      AND phpfed3NE_journees.id_champ='$champ'
                      AND phpfed3NE_journees.numero='$numero'
                      AND dom.id_club=logodom.id_club
                      AND ext.id_club=logoext.id_club
                      AND phpfed3NE_matchs.id_journee=phpfed3NE_journees.id
                      AND (dom.id='$id_equipe_fetiche' OR ext.id='$id_equipe_fetiche')";
        $result=mysql_query($query1) or die (mysql_error()) ;
         echo "<TABLE class=phpfed3NE cellspacing=\"0\" align=\"center\" >";
        $x=1;
        $legende="ème journée de $nom";

             while ($row=mysql_fetch_array($result))
             { echo "r";
             $domproba= $row[2];
             $extproba= $row[3];


             if ($x==1)
                {
                $date = ereg_replace('^([0-9]{2,4})-([0-9]{1,2})-([0-9]{1,2})$','\\3/\\2/\\1', $row[4]);
                echo "<TR class=phpfed3NE ><TH class=phpfed3NE colspan=5 text-align=\"center\"><b> ". $numero."".$legende." le ".$date."</b></th></tr>";
                }
                

                $bgcolor="#FFFFFF";
                        

                echo "<TR class=phpfed3NE bgcolor=$bgcolor width=\"100%\">";
                echo "<TD class=phpfed3NE align=\"right\" width=\"41%\">";
                echo "<a href=\"club.php?id_clubs=$row[5]&champ=$champ\"><img border=0 src=\"$row[0]\" width=40 height=50></a>";
                echo "</td><TD class=phpfed3NE align=\"center\">".$domproba."</td><TD class=phpfed3NE>-</td><TD class=phpfed3NE>".$extproba."</td>";
                echo "<TD class=phpfed3NE align=\"left\" width=\"41%\">";
                echo "<a href=\"club.php?id_clubs=$row[5]&champ=$champ\"><img border=0 src=\"$row[1]\" width=40 height=50></a>";
                echo "</td></tr>";                
                $x++;
             }

        echo "</table>";
 }                              
?>
