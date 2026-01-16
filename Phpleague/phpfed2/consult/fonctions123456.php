<?php
//***********************************************************************/
// phpfed2eague : gestionnaire de championnat                              */
// ============================================                         */
//                                                                      */
// Version : 0.82                                                       */
// Copyright (c) 2004    Alexis MANGIN                                  */
// http://phpfed2eague.univert.org                                         */
//                                                                      */
// This program is free software. You can redistribute it and/or modify */
// it under the terms of the GNU General Public License as published by */
// the Free Software Foundation; either version 2 of the License.       */
//                                                                      */
//***********************************************************************/
// Support technique : http://phpfed2eague.univert.org/forum               */
//                                                                      */
//***********************************************************************/

function ENTETE2()
{
 ?>
      </td>
    </tr>
  </table>
</div>
<br />
<?php
}

// nombres de journees d un championnat
function nb_journees($id_champ, $idconnect)
         {
			 
         $result=$idconnect->query("SELECT id FROM phpfed2_equipes WHERE id_champ='$id_champ'");
        // $result=mysql_query($query);
         $nb_equipes=mysqli_num_rows( $result );
         $nb_journees=((($nb_equipes)*2)-2) ;
         return("$nb_journees");
         }

// Nombres d equipes dans un championnat
function nb_equipes($id_champ, $idconnect)
         {	 
         $result=$idconnect->query("	SELECT id 
									 FROM phpfed2_equipes 
									 WHERE id_champ='$id_champ'");
        
         $nb_equipes=mysqli_num_rows( $result );
         return("$nb_equipes");
         }

function aff_journee($champ, $numero, $legende, $idconnect)
{

 // cellule d'affichage des derniers résultats
 $color=0;
 $result=$idconnect->query("
	 SELECT cldom.nom as cldom,
			clext.nom as clext, 
            phpfed2_journees.date_prevue,
			cldom.id as cliddom,
			clext.id as clidext,
			date_reelle
			
     FROM phpfed2_equipes as dom,
		  phpfed2_equipes as ext,
		  phpfed2_matchs,
		  phpfed2_journees,
          phpfed2_clubs as cldom,
		  phpfed2_clubs as clext
		  
     WHERE phpfed2_matchs.id_equipe_dom=dom.id
     AND phpfed2_matchs.id_equipe_ext=ext.id
     AND phpfed2_journees.id_champ='$champ'
     AND phpfed2_journees.numero='$numero'
     AND dom.id_club=cldom.id
     AND ext.id_club=clext.id
     AND phpfed2_matchs.id_journee=phpfed2_journees.id
     AND cldom.nom!='exempte'
     AND clext.nom!='exempte'
     ORDER BY date_reelle asc");
      
//mise en forme tableau oppositions
     echo "<table align=\"center\" class=\"tablephpfed22\"  width=\"100%\" cellspacing=\"1\" cellpadding=\"1\"><tr><td><table cellspacing=\"0\" align=\"center\" width=\"100%\" cellpadding=\"1\">\n";
     $x=1;
     $minute = 0;
     $heure = 0;
     $jour = 0;
     $mois = 0;
     $annee = 0;

 while ($row=mysqli_fetch_array($result))
 {
  $clubs_nom = stripslashes($row[0]);
  $clubs_nom1 = stripslashes($row[1]);

  if ($x==1)
    {
     echo "<tr class=\"trphpfed23\">\n<th colspan=\"5\"><b>".$legende." ". $numero."</b></th>\n</tr>";
    }

	$DebMarqueur1 = "";
    $FinMarqueur1 = "";
 	
    $DebMarqueur2 = "";
    $FinMarqueur2 = "";

    $bgcolor="#FFFFFF";

    if (($color%2)==0) {$classe="ligne1";} else {$classe="ligne2";}

    //echo "<tr bgcolor=\"$bgcolor\" class=\"trphpfed2\">";

    //if (($minute==substr($row[5],14,2)) and ($heure==substr($row[5],11,2)) and ($jour==substr($row[5],8,2)) and ($mois==substr($row[5],5,2)) and ($annee==substr($row[5],0,4)))
    if (!($annee==substr($row[5],0,4)) or !($mois==substr($row[5],5,2)) or !($jour==substr($row[5],8,2)) or !($minute==substr($row[5],14,2)) or !($heure==substr($row[5],11,2)))
     {
      $minute = substr($row[5],14,2); // on récupère la minute
      $heure = substr($row[5],11,2); // on récupère l'heure
      $jour = substr($row[5],8,2); // on récupère le jour
      $mois = substr($row[5],5,2); // puis le mois
      $annee = substr($row[5],0,4); // et l'annee
 
	  setlocale(LC_TIME, 'fr_FR.utf8','fra');
      $t= mktime($heure,$minute,0,$mois,$jour,$annee);
   
	  echo "<tr class=\"date\"><td colspan=\"5\" align=\"center\">";

      echo ucfirst(strftime("%A ",$t));
      echo strftime("%d %B ",$t);
      echo strftime("- %Hh%M",$t);
      echo "</td></tr>";

      $color_cell=$bgcolor;
     }

  echo "<tr class=\"$classe\">";

	//suppression des liens sur les scores
	
  echo "<td align=\"right\" width=\"40%\">".$DebMarqueur1.$clubs_nom.$FinMarqueur1."</td><td align=\"center\"> - </a></td><td align=\"left\" width=\"40%\">".$DebMarqueur2.$clubs_nom1.$FinMarqueur2."</td>";
  echo "</tr>\n";
  $x++;
  $color+=1;
 }

 echo "</table></td></tr></table>\n<br />\n";
}



?>
