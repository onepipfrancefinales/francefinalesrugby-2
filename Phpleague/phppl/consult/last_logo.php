<?php
//***********************************************************************/
// phppleague : gestionnaire de championnat                              */
// ============================================                         */
//                                                                      */
// Version : 0.82                                                       */
// Copyright (c) 2004    Alexis MANGIN                                  */
// http://phppleague.univert.org                                         */
//                                                                      */
// This program is free software. You can redistribute it and/or modify */
// it under the terms of the GNU General Public License as published by */
// the Free Software Foundation; either version 2 of the License.       */
//                                                                      */
//***********************************************************************/
// Support technique : http://phppleague.univert.org/forum               */
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
        <body class=phppl>
<?php

if (!isset($_REQUEST['champ']))
       {
         demande_champ ();
       }
else
{
$champ = $_REQUEST['champ'];
// Nom du champ
$query2="SELECT nom FROM phppl_divisions, phppl_championnats where id_division=phppl_divisions.id";
$result2=(mysql_query($query2));
while ($row=mysql_fetch_array($result2))
       {
       $nom=$row[0];
       }

// SELECTION DES PARAMETRES
$query="select * FROM phppl_parametres where id_champ='$champ' ";
$result=(mysql_query($query));
while ($row=mysql_fetch_array($result))
       {
       $id_equipe_fetiche=$row['id_equipe_fetiche'];
       }

// NOM de EQUIPE FAVORITE a partir de son id
$result=(mysql_query("SELECT nom FROM phppl_clubs, phppl_equipes WHERE phppl_equipes.id='$id_equipe_fetiche' AND phppl_clubs.id=phppl_equipes.id_club"));
while ($row=mysql_fetch_array($result))
       {
       $equipe_fetiche= stripslashes($row[0]);

       }

$query="SELECT max(phppl_journees.numero) FROM phppl_journees, phppl_matchs where phppl_journees.id=phppl_matchs.id_journee and buts_dom is not NULL and phppl_journees.id_champ='$champ' and (id_equipe_ext='$id_equipe_fetiche' or id_equipe_dom='$id_equipe_fetiche')";
                      $result=mysql_query($query);

                               while ($row=mysql_fetch_array($result))
                               { $numero=$row[0];
                                 
$query1="SELECT logodom.url_logo as logodom, logoext.url_logo as logoext, phppl_matchs.buts_dom, phppl_matchs.buts_ext, phppl_journees.date_prevue, logodom.id as logoiddom, logoext.id as logoidext
                FROM phppl_equipes as dom, phppl_equipes as ext, phppl_matchs, phppl_journees, phppl_clubs as logodom, phppl_clubs as logoext
                WHERE phppl_matchs.id_equipe_dom=dom.id
                        AND phppl_matchs.id_equipe_ext=ext.id
                        AND phppl_journees.id_champ='$champ'
                        AND phppl_journees.numero='$numero'
                        AND dom.id_club=logodom.id
                        AND ext.id_club=logoext.id
                        AND phppl_matchs.id_journee=phppl_journees.id
                        AND (phppl_matchs.id_equipe_ext='$id_equipe_fetiche'
                        OR phppl_matchs.id_equipe_dom='$id_equipe_fetiche' )";
        $result=mysql_query($query1) or die ("probleme " .mysql_error());
         echo "<TABLE class=phppl cellspacing=\"0\" align=\"center\" >";
        $legende="ème journée de $nom";

             while ($row=mysql_fetch_array($result))
             {
             $domproba= $row[2];
             $extproba= $row[3];

                $date = ereg_replace('^([0-9]{2,4})-([0-9]{1,2})-([0-9]{1,2})$','\\3/\\2/\\1', $row[4]);
                echo "<TR class=phppl><TH class=phppl colspan=5 text-align=\"center\"><b>". $numero."".$legende." le ".$date."</b></th></tr>";
                


                $bgcolor="#FFFFFF";

                
                echo "<TR class=phppl bgcolor=$bgcolor width=\"100%\">";
                echo "<TD class=phppl align=\"right\" width=\"41%\">";
                echo "<a href=\"club.php?id_clubs=$row[5]&champ=$champ\"><img border=0 src=\"$row[0]\" width=40 height=50></a>";
                echo "</td><TD class=phppl align=\"center\">".$domproba."</td><TD class=phppl>-</td><TD class=phppl>".$extproba."</td>";
                echo "<TD class=phppl align=\"left\" width=\"41%\">";
                echo "<a href=\"club.php?id_clubs=$row[5]&champ=$champ\"><img border=0 src=\"$row[1]\" width=40 height=50></a>";
                echo "</td></tr>";
             }
        echo "</table>";
                               }
echo "<br /><br />";
$query="SELECT max(phppl_journees.numero) from phppl_journees, phppl_matchs where phppl_journees.id=phppl_matchs.id_journee and buts_dom is not NULL and phppl_journees.id_champ='$champ' and (id_equipe_ext='$id_equipe_fetiche' or id_equipe_dom='$id_equipe_fetiche')";
                      $result=mysql_query($query);

                               while ($row=mysql_fetch_array($result))
                               { $numero=$row[0]+1;
                                 
$query1="SELECT logodom.url_logo as logodom, logoext.url_logo as logoext, phppl_matchs.buts_dom, phppl_matchs.buts_ext, phppl_journees.date_prevue, logodom.id as logoiddom, logoext.id as logoidext
                FROM phppl_equipes as dom, phppl_equipes as ext, phppl_matchs, phppl_journees, phppl_clubs as logodom, phppl_clubs as logoext
                WHERE phppl_matchs.id_equipe_dom=dom.id
                        AND phppl_matchs.id_equipe_ext=ext.id
                        AND phppl_journees.id_champ='$champ'
                        AND phppl_journees.numero='$numero'
                        AND dom.id_club=logodom.id
                        AND ext.id_club=logoext.id
                        AND phppl_matchs.id_journee=phppl_journees.id
                        AND (phppl_matchs.id_equipe_ext='$id_equipe_fetiche'
                        OR phppl_matchs.id_equipe_dom='$id_equipe_fetiche' )";
        $result=mysql_query($query1) or die (mysql_error()) ;
         echo "<TABLE class=phppl cellspacing=\"0\" align=\"center\" >";
        $x=1;
        $legende="ème journée de $nom";
        
             while ($row=mysql_fetch_array($result))
             {
             $domproba= $row[2];
             $extproba= $row[3];


             if ($x==1)
                {
                $date = ereg_replace('^([0-9]{2,4})-([0-9]{1,2})-([0-9]{1,2})$','\\3/\\2/\\1', $row[4]);
                echo "<TR class=phppl ><TH class=phppl colspan=5 text-align=\"center\"><b> ". $numero."".$legende." le ".$date."</b></th></tr>";
                }
                
                if ($row[0]==$equipe_fetiche )
                {
                $DebMarqueur1 = "<b>";
                $FinMarqueur1 = "</b>";
                }
                        
                else
                {
                $DebMarqueur1 = "";
                $FinMarqueur1 = "";
                }
                
                if ($row[1]==$equipe_fetiche )
                {
                $DebMarqueur2 = "<b>";
                $FinMarqueur2 = "</b>";
                }

                else
                {
                $DebMarqueur2 = "";
                $FinMarqueur2 = "";
                }

                $bgcolor="#FFFFFF";
                        

                echo "<TR class=phppl bgcolor=$bgcolor width=\"100%\">";
                echo "<TD class=phppl align=\"right\" width=\"41%\">";
                echo "<a href=\"club.php?id_clubs=$row[5]&champ=$champ\"><img border=0 src=\"$row[0]\" width=40 height=50></a>";
                echo "</td><TD class=phppl align=\"center\">".$domproba."</td><TD class=phppl>-</td><TD class=phppl>".$extproba."</td>";
                echo "<TD class=phppl align=\"left\" width=\"41%\">";
                echo "<a href=\"club.php?id_clubs=$row[5]&champ=$champ\"><img border=0 src=\"$row[1]\" width=40 height=50></a>";
                echo "</td></tr>";                
                $x++;
             }

        echo "</table>";
 }                              }
?>
