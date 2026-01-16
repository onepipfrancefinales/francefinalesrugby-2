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
        <body class=phpidf>
<?php

if (!isset($_REQUEST['champ']))
       {
         demande_champ ();
       }
else
{
$champ = $_REQUEST['champ'];
// Nom du champ
$query2="SELECT nom FROM phpidf_divisions, phpidf_championnats where id_division=phpidf_divisions.id";
$result2=(mysql_query($query2));
while ($row=mysql_fetch_array($result2))
       {
       $nom=$row[0];
       }

// SELECTION DES PARAMETRES
$query="select * FROM phpidf_parametres where id_champ='$champ' ";
$result=(mysql_query($query));
while ($row=mysql_fetch_array($result))
       {
       $id_equipe_fetiche=$row['id_equipe_fetiche'];
       }

// NOM de EQUIPE FAVORITE a partir de son id
$result=(mysql_query("SELECT nom FROM phpidf_clubs, phpidf_equipes WHERE phpidf_equipes.id='$id_equipe_fetiche' AND phpidf_clubs.id=phpidf_equipes.id_club"));
while ($row=mysql_fetch_array($result))
       {
       $equipe_fetiche= stripslashes($row[0]);

       }

$query="SELECT max(phpidf_journees.numero) FROM phpidf_journees, phpidf_matchs where phpidf_journees.id=phpidf_matchs.id_journee and buts_dom is not NULL and phpidf_journees.id_champ='$champ' and (id_equipe_ext='$id_equipe_fetiche' or id_equipe_dom='$id_equipe_fetiche')";
                      $result=mysql_query($query);

                               while ($row=mysql_fetch_array($result))
                               { $numero=$row[0];
                                 
$query1="SELECT logodom.url_logo as logodom, logoext.url_logo as logoext, phpidf_matchs.buts_dom, phpidf_matchs.buts_ext, phpidf_journees.date_prevue, logodom.id as logoiddom, logoext.id as logoidext
                FROM phpidf_equipes as dom, phpidf_equipes as ext, phpidf_matchs, phpidf_journees, phpidf_clubs as logodom, phpidf_clubs as logoext
                WHERE phpidf_matchs.id_equipe_dom=dom.id
                        AND phpidf_matchs.id_equipe_ext=ext.id
                        AND phpidf_journees.id_champ='$champ'
                        AND phpidf_journees.numero='$numero'
                        AND dom.id_club=logodom.id
                        AND ext.id_club=logoext.id
                        AND phpidf_matchs.id_journee=phpidf_journees.id
                        AND (phpidf_matchs.id_equipe_ext='$id_equipe_fetiche'
                        OR phpidf_matchs.id_equipe_dom='$id_equipe_fetiche' )";
        $result=mysql_query($query1) or die ("probleme " .mysql_error());
         echo "<TABLE class=phpidf cellspacing=\"0\" align=\"center\" >";
        $legende="ème journée de $nom";

             while ($row=mysql_fetch_array($result))
             {
             $domproba= $row[2];
             $extproba= $row[3];

                $date = ereg_replace('^([0-9]{2,4})-([0-9]{1,2})-([0-9]{1,2})$','\\3/\\2/\\1', $row[4]);
                echo "<TR class=phpidf><TH class=phpidf colspan=5 text-align=\"center\"><b>". $numero."".$legende." le ".$date."</b></th></tr>";
                


                $bgcolor="#FFFFFF";

                
                echo "<TR class=phpidf bgcolor=$bgcolor width=\"100%\">";
                echo "<TD class=phpidf align=\"right\" width=\"41%\">";
                echo "<a href=\"club.php?id_clubs=$row[5]&champ=$champ\"><img border=0 src=\"$row[0]\" width=40 height=50></a>";
                echo "</td><TD class=phpidf align=\"center\">".$domproba."</td><TD class=phpidf>-</td><TD class=phpidf>".$extproba."</td>";
                echo "<TD class=phpidf align=\"left\" width=\"41%\">";
                echo "<a href=\"club.php?id_clubs=$row[5]&champ=$champ\"><img border=0 src=\"$row[1]\" width=40 height=50></a>";
                echo "</td></tr>";
             }
        echo "</table>";
                               }
echo "<br /><br />";
$query="SELECT max(phpidf_journees.numero) from phpidf_journees, phpidf_matchs where phpidf_journees.id=phpidf_matchs.id_journee and buts_dom is not NULL and phpidf_journees.id_champ='$champ' and (id_equipe_ext='$id_equipe_fetiche' or id_equipe_dom='$id_equipe_fetiche')";
                      $result=mysql_query($query);

                               while ($row=mysql_fetch_array($result))
                               { $numero=$row[0]+1;
                                 
$query1="SELECT logodom.url_logo as logodom, logoext.url_logo as logoext, phpidf_matchs.buts_dom, phpidf_matchs.buts_ext, phpidf_journees.date_prevue, logodom.id as logoiddom, logoext.id as logoidext
                FROM phpidf_equipes as dom, phpidf_equipes as ext, phpidf_matchs, phpidf_journees, phpidf_clubs as logodom, phpidf_clubs as logoext
                WHERE phpidf_matchs.id_equipe_dom=dom.id
                        AND phpidf_matchs.id_equipe_ext=ext.id
                        AND phpidf_journees.id_champ='$champ'
                        AND phpidf_journees.numero='$numero'
                        AND dom.id_club=logodom.id
                        AND ext.id_club=logoext.id
                        AND phpidf_matchs.id_journee=phpidf_journees.id
                        AND (phpidf_matchs.id_equipe_ext='$id_equipe_fetiche'
                        OR phpidf_matchs.id_equipe_dom='$id_equipe_fetiche' )";
        $result=mysql_query($query1) or die (mysql_error()) ;
         echo "<TABLE class=phpidf cellspacing=\"0\" align=\"center\" >";
        $x=1;
        $legende="ème journée de $nom";
        
             while ($row=mysql_fetch_array($result))
             {
             $domproba= $row[2];
             $extproba= $row[3];


             if ($x==1)
                {
                $date = ereg_replace('^([0-9]{2,4})-([0-9]{1,2})-([0-9]{1,2})$','\\3/\\2/\\1', $row[4]);
                echo "<TR class=phpidf ><TH class=phpidf colspan=5 text-align=\"center\"><b> ". $numero."".$legende." le ".$date."</b></th></tr>";
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
                        

                echo "<TR class=phpidf bgcolor=$bgcolor width=\"100%\">";
                echo "<TD class=phpidf align=\"right\" width=\"41%\">";
                echo "<a href=\"club.php?id_clubs=$row[5]&champ=$champ\"><img border=0 src=\"$row[0]\" width=40 height=50></a>";
                echo "</td><TD class=phpidf align=\"center\">".$domproba."</td><TD class=phpidf>-</td><TD class=phpidf>".$extproba."</td>";
                echo "<TD class=phpidf align=\"left\" width=\"41%\">";
                echo "<a href=\"club.php?id_clubs=$row[5]&champ=$champ\"><img border=0 src=\"$row[1]\" width=40 height=50></a>";
                echo "</td></tr>";                
                $x++;
             }

        echo "</table>";
 }                              }
?>
