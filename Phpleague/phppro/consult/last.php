<?php
//***********************************************************************/
// phpproeague : gestionnaire de championnat                              */
// ============================================                         */
//                                                                      */
// Version : 0.82                                                       */
// Copyright (c) 2004    Alexis MANGIN                                  */
// http://phpproeague.univert.org                                         */
//                                                                      */
// This program is free software. You can redistribute it and/or modify */
// it under the terms of the GNU General Public License as published by */
// the Free Software Foundation; either version 2 of the License.       */
//                                                                      */
//***********************************************************************/
// Support technique : http://phpproeague.univert.org/forum               */
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


if (!isset($_REQUEST['champ']))
       {
         demande_champ ();
       }
else
{
$champ = $_REQUEST['champ'];
// Nom du champ
$query2="SELECT nom from phppro_divisions, phppro_championnats where id_division=phppro_divisions.id";
$result2=(mysql_query($query2));
while ($row=mysql_fetch_array($result2))
       {
       $nom=$row[0];
       }

// SELECTION DES PARAMETRES
$query="select * from phppro_parametres where id_champ='$champ' ";
$result=(mysql_query($query));
while ($row=mysql_fetch_array($result))
       {
       $id_equipe_fetiche=$row['id_equipe_fetiche'];
       }

// NOM de EQUIPE FAVORITE a partir de son id
$result=(mysql_query("SELECT nom FROM phppro_clubs, phppro_equipes WHERE phppro_equipes.id='$id_equipe_fetiche' AND phppro_clubs.id=phppro_equipes.id_club"));
while ($row=mysql_fetch_array($result))
       {
       $equipe_fetiche=stripslashes($row[0]);
       }

$query="SELECT max(phppro_journees.numero) from phppro_journees, phppro_matchs where phppro_journees.id=phppro_matchs.id_journee and buts_dom is not NULL and phppro_journees.id_champ='$champ' and (id_equipe_ext='$id_equipe_fetiche' or id_equipe_dom='$id_equipe_fetiche')";
                      $result=mysql_query($query);

                               while ($row=mysql_fetch_array($result))
                               { $numero=$row[0];
                                 
$query1="SELECT cldom.nom as cldom, clext.nom as clext, phppro_matchs.buts_dom, phppro_matchs.buts_ext , phppro_journees.date_prevue, cldom.id as cliddom, clext.id as clidext, phppro_matchs.date_reelle
                FROM phppro_equipes as dom, phppro_equipes as ext, phppro_matchs, phppro_journees, phppro_clubs as cldom, phppro_clubs as clext
                WHERE phppro_matchs.id_equipe_dom=dom.id
                        AND phppro_matchs.id_equipe_ext=ext.id
                        AND phppro_journees.id_champ='$champ'
                        AND phppro_journees.numero='$numero'
                        AND dom.id_club=cldom.id
                        AND ext.id_club=clext.id
                        AND phppro_matchs.id_journee=phppro_journees.id
                        AND (phppro_matchs.id_equipe_ext='$id_equipe_fetiche'
                        OR phppro_matchs.id_equipe_dom='$id_equipe_fetiche' )";
        $result=mysql_query($query1);
         echo "<TABLE cellspacing=\"0\" align=\"center\" width=\"50%\">";
        $x=1;
        $legende="ème journée de $nom";

             while ($row=mysql_fetch_array($result))
             {
      $row[0] = stripslashes($row[0]);
      $row[1] = stripslashes($row[1]);
             $domproba= $row[2];
             $extproba= $row[3];
            
              if ($x==1)
                {
                //$date = ereg_replace('^([0-9]{2,4})-([0-9]{1,2})-([0-9]{1,2})$','\\3/\\2/\\1', $row[4]);
                $date_reelle = $row[7];
                $minute = substr($date_reelle,14,2); // on récupère la minute
                $heure = substr($date_reelle,11,2); // on récupère l'heure
                $jour = substr($date_reelle,8,2); // on récupère le jour
                $mois = substr($date_reelle,5,2); // puis le mois
                $annee = substr($date_reelle,0,4); // et l'annee
                echo "<TR ><TH colspan=5 text-align=\"center\"><b> ". $numero."".$legende." le ".$jour."/".$mois."/".$annee."".CONSULT_CLMNT_MSG5."".$heure."h".$minute."</b></th></tr>";
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
                
                $bgcolor="FFFFFF";

                echo "<TR bgcolor=$bgcolor width=\"100%\"><TD class=phppro align=\"center\" width=\"40%\"><a href=\"club.php?id_clubs=$row[5]&champ=$champ\">".$DebMarqueur1.$row[0].$FinMarqueur1."</a><TD class=phppro align=\"center\">".$domproba."<TD class=phppro align=\"center\">-<TD>".$extproba."<TD align=\"center\" width=\"40%\"><a href=\"club.php?id_clubs=$row[6]&champ=$champ\">".$DebMarqueur2.$row[1].$FinMarqueur2."</a>";
                $x++;
             }
        echo "</table>";
                               }
echo "<br /><br />";
}
?>
