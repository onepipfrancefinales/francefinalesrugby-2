<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Fédérale 2</title>
</head>
<body>
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

include ("avant.php");

require ("../config.php") ;
require ("../consult/fonctions.php");



ouverture ();
ENTETE2 ();


if (!isset($_REQUEST['champ']))
{
    demande_champ ();
}
else
{
$champ=$_REQUEST['champ'];


$requete=$idconnect->query("SELECT id_equipe_fetiche, phppro_divisions.nom, phppro_saisons.annee, (phppro_saisons.annee)+1
                      FROM phppro_parametres, phppro_championnats, phppro_divisions, phppro_saisons 
                      WHERE id_champ='$champ'
                      AND phppro_championnats.id='$champ'
                      AND phppro_divisions.id=phppro_championnats.id_division
                      AND phppro_saisons.id=phppro_championnats.id_saison");

while ($row=mysqli_fetch_array($result))
  {
   $id_equipe_fetiche=$row['id_equipe_fetiche'];
   echo "<div align=\"center\"><h4>".$row[1]."  ".$row[2]."/".$row[3]."</h4></div>";
  }
$color=0;

$nb_equipe=nb_equipes($champ);

$resultats2=$idconnect->query("SELECT phppro_clubs.nom, CLEXT.nom, phppro_matchs.buts_dom, phppro_matchs.buts_ext, phppro_matchs.id, phppro_matchs.date_reelle
             FROM phppro_clubs, phppro_clubs as CLEXT, phppro_matchs, phppro_journees, phppro_equipes, phppro_equipes as EXT 
             WHERE phppro_clubs.id=phppro_equipes.id_club 
             AND CLEXT.id=EXT.id_club
             AND phppro_equipes.id=phppro_matchs.id_equipe_dom 
             AND EXT.id=phppro_matchs.id_equipe_ext 
             AND phppro_matchs.id_journee=phppro_journees.id
             AND phppro_journees.id_champ='$champ'
             AND (CLEXT.nom='exempte' or phppro_clubs.nom='exempte')
             ORDER by phppro_journees.numero");
             
             
//$resultats2=mysql_query($requete2) or die (mysql_error());    
$i=0;
while ($row2=mysqli_fetch_array($resultats2))
  {
   $row2[0] = stripslashes($row2[0]);
   $row2[1] = stripslashes($row2[1]);
   $resultats_0[$i] = $row2[0];  $resultats_1[$i] = $row2[1];
   $i++;
  }

$result=$idconnect->query("SELECT phppro_journees.numero, phppro_journees.date_prevue, cldom.nom, clext.nom, phppro_matchs.buts_dom, phppro_matchs.buts_ext, dom.id, ext.id
        FROM phppro_journees, phppro_equipes as dom, phppro_equipes as ext, phppro_matchs, phppro_clubs as cldom, phppro_clubs as clext
        WHERE phppro_journees.id_champ='$champ'
        AND phppro_matchs.id_equipe_dom=dom.id
        AND phppro_matchs.id_equipe_ext=ext.id
        AND dom.id_club=cldom.id
        AND ext.id_club=clext.id
        AND phppro_matchs.id_journee=phppro_journees.id
        AND cldom.nom!='exempte'
        AND clext.nom!='exempte'
        ORDER BY phppro_journees.numero");
        
//$result=mysql_query($query);

echo "<table width=\"100%\" align=\"center\"><tr><td>";
$journee_milieu=(nb_journees($champ)/2);
$journee=0;
$x=2;
$i=0;

while ($row=mysqli_fetch_array($result))
{
   $row[2] = stripslashes($row[2]);
   $row[3] = stripslashes($row[3]);

        if (($journee=="0"))
            { 
              $date = ereg_replace('^([0-9]{2,4})-([0-9]{1,2})-([0-9]{1,2})$','\\3/\\2/\\1', $row[1]);
              ?>
<br><table class="tablephppro2" cellspacing="0" width="100%" align="center">
              
<tr class="trphppro3"><td colspan="3" align="center"><b>
              
<?php echo ADMIN_COHERENCE_MSG2." ".$row[0].CONSULT_MATCHS_MSG2.$date."</b></td></tr>";
            }
        elseif (!($journee==$row[0]))
            {   
                echo "</table><br>";
                
                if ($journee==$journee_milieu) {echo "</td><td align=\"center\">";}
                $date = ereg_replace('^([0-9]{2,4})-([0-9]{1,2})-([0-9]{1,2})$','\\3/\\2/\\1', $row[1]);
                ?>
                
<table class="tablephppro2" cellspacing="0" width="100%" align="center">
<tr class="trphppro3"><td colspan="3" align="center"><b>
<?php echo ADMIN_COHERENCE_MSG2." ".$row[0].CONSULT_MATCHS_MSG2.$date."</b></td></tr>";
                $x=2;
            }


        $classe="ligne2";
        if (($color%2)==0) $classe="ligne1";
        
echo "<tr class=\"$classe\">";

        if ($row[6]==$id_equipe_fetiche) 
        {
          ?>
 <td class="cld1"><b><?php print $row[2]; ?></b></td>
          <?php
        }
        else
        {
          ?>
 <td class="cld1"><?php print $row[2]; ?></td>
          <?php
        }

        ?>
 <td align="center">
<?php echo $row[4]." - ".$row[5]."</td>";

        if ($row[7]==$id_equipe_fetiche)
        { 
          ?>
 <td class="cld2"><b>
<?php echo "$row[3]</b></td></tr>";
        }
else { echo "<td class=\"cld2\">".$row[3]."</td></tr>";  }


        if ($x==($nb_equipe/2))
         {
           if (($color%2)==0) {$classe="ligne2";} else {$classe="ligne1";}
           if (isset($resultats_0[$i]) and $resultats_0[$i]=='exempte') {echo "<tr class=$classe><td colspan=3>".ADMIN_RESULTS_1." : $resultats_1[$i]</td></tr>";}
           if (isset($resultats_1[$i]) and $resultats_1[$i]=='exempte') {echo "<tr class=$classe><td colspan=3>".ADMIN_RESULTS_1." : $resultats_0[$i]</td></tr>";}
          $i++;
         }
        
        $color++;
        $journee=$row[0];
        $x++;
} 
    
echo "</table></td></tr></table>";
}

?>
<br />
        <p align="right">&nbsp;</p>
<?php

include ("apres.php");

?>
