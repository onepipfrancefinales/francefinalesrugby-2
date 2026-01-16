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

require ("../config.php") ;
require ("../consult/fonctions.php");
ouverture ();
echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"../league.css\">";

echo "<div align=\"center\">";

if (!isset($_GET['id_match']))
   {

   }

else
 {
  $id_match=$_GET['id_match'];
  $requete="SELECT cldom.nom AS cldom, clext.nom AS clext, phpidf_journees.numero, phpidf_matchs.date_reelle, phpidf_matchs.buts_dom, phpidf_matchs.buts_ext, phpidf_matchs.date_reelle,
                   cldom.url_logo AS logo_dom, clext.url_logo AS logo_ext
            FROM phpidf_clubs AS cldom, phpidf_clubs AS clext, phpidf_equipes AS dom, phpidf_equipes AS ext, phpidf_matchs, phpidf_journees
            WHERE phpidf_matchs.id = '$id_match'
            AND phpidf_matchs.id_equipe_dom = dom.id
            AND phpidf_matchs.id_equipe_ext = ext.id
            AND dom.id_club = cldom.id
            AND ext.id_club = clext.id
            AND phpidf_matchs.id_journee = phpidf_journees.id";
  $resultats=mysql_query($requete) or die (mysql_error());
  
  $row=mysql_fetch_array($resultats);
  

  $requete1="SELECT nom, prenom, phpidf_joueurs.id as id_joueur
             FROM phpidf_joueurs, phpidf_effectif, phpidf_buteurs, phpidf_equipes, phpidf_matchs
             WHERE phpidf_joueurs.id=phpidf_effectif.id_joueur
             AND phpidf_effectif.id=phpidf_buteurs.id_effectif
             AND phpidf_buteurs.id_match='$id_match'
             AND phpidf_matchs.id_equipe_dom = phpidf_equipes.id
             AND phpidf_equipes.id=phpidf_effectif.id_equipe
             AND phpidf_matchs.id=phpidf_buteurs.id_match";
  $resultats1=mysql_query($requete1) or die (mysql_error());
  

  $requete2="SELECT nom, prenom, phpidf_joueurs.id as id_joueur
             FROM phpidf_joueurs, phpidf_effectif, phpidf_buteurs, phpidf_equipes, phpidf_matchs
             WHERE phpidf_joueurs.id=phpidf_effectif.id_joueur
             AND phpidf_effectif.id=phpidf_buteurs.id_effectif
             AND phpidf_buteurs.id_match='$id_match'
             AND phpidf_matchs.id_equipe_ext = phpidf_equipes.id
             AND phpidf_equipes.id=phpidf_effectif.id_equipe
             AND phpidf_matchs.id=phpidf_buteurs.id_match";
  $resultats2=mysql_query($requete2) or die (mysql_error());

  $i=0 ;
  while ($row1=mysql_fetch_array($resultats1))
  {
    if($i=='0') {$buteur_dom="<a href=\"joueurs.php?id_joueur=$row1[2]\">$row1[0] $row1[1]</a><br>";}
    else {$buteur_dom=$buteur_dom."<a href=\"joueurs.php?id_joueur=$row1[2]\">$row1[0] $row1[1]</a><br>";}
    $i++;
  }
   $i=0 ;
  while ($row2=mysql_fetch_array($resultats2))
  {
    if($i=='0') {$buteur_ext="<a href=\"joueurs.php?id_joueur=$row2[2]\">$row2[0] $row2[1]</a><br>";}
    else {$buteur_ext=$buteur_ext."<a href=\"joueurs.php?id_joueur=$row2[2]\">$row2[0] $row2[1]</a><br>";}
    $i++;
  }

     $minute = substr($row[6],14,2); // on récupère la minute
     $heure = substr($row[6],11,2); // on récupère l'heure
     $jour = substr($row[6],8,2); // on récupère le jour
     $mois = substr($row[6],5,2); // puis le mois
     $annee = substr($row[6],0,4); // et l'annee
     
     $logo_dom=$row["logo_dom"];
     $logo_ext=$row["logo_ext"];
     $id_joueur_dom=$row1[2];
     $id_joueur_ext=$row2[2];


                setlocale(LC_TIME, LEAGUE_LANGUAGE);
                $t= mktime($heure,$minute,0,$mois,$jour,$annee);
                
                $date= strftime("%A %d %B %Y - %Hh%M",$t);
   if (!isset($buteur_ext)) {$buteur_ext="";}
   if (!isset($buteur_dom)) {$buteur_dom="";}

   include ("match.htm");
 }

?>
</div>
<br />
<p align="right"><font face="Verdana" size="1">Powered by <a href="http://phpidfeague.univert.org" target="_blank">phpidfeague</a></font></p>
<?php
?>
