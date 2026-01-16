<?php
//***********************************************************************/
// phpfed3GSeague : gestionnaire de championnat                              */
// ============================================                         */
//                                                                      */
// Version : 0.82                                                       */
// Copyright (c) 2004    Alexis MANGIN                                  */
// http://phpfed3GSeague.univert.org                                         */
//                                                                      */
// This program is free software. You can redistribute it and/or modify */
// it under the terms of the GNU General Public License as published by */
// the Free Software Foundation; either version 2 of the License.       */
//                                                                      */
//***********************************************************************/
// Support technique : http://phpfed3GSeague.univert.org/forum               */
//                                                                      */
//***********************************************************************/

function ENTETE2()
{
 ?>

<div align="center"> 
  <?php
}


// nombres de journees d un championnat
function nb_journees($id_champ, $idconnect)
         {
		
         $reponse=$idconnect->query("SELECT id FROM phpfed3GS_equipes WHERE id_champ='$id_champ'");
         //$result=mysql_query($query);
         $nb_equipes=$reponse->num_rows;
         $nb_journees=((($nb_equipes)*2)-2) ;
         return("$nb_journees");
         }

// Nombres d equipes dans un championnat
function nb_equipes($id_champ, $idconnect)
         {
		
         $reponse=$idconnect->query("SELECT id FROM phpfed3GS_equipes WHERE id_champ='$id_champ'");
       //  $result=mysql_query($query);
         $nb_equipes=$reponse->num_rows;
         return("$nb_equipes");
         }

function aff_journee($champ, $numero, $legende, $proba, $fiches_clubs, $id_equipe_fetiche)
         {

    // cellule d'affichage des derniers résultats
      // cellule d'affichage des derniers résultats
  $color=0;
        $reponse=$idconnect->query("SELECT cldom.nom as cldom, clext.nom as clext, phpfed3GS_matchs.buts_dom, phpfed3GS_matchs.buts_ext,
                        phpfed3GS_journees.date_prevue, cldom.id as cliddom, clext.id as clidext, date_reelle,
                        dom.id as eqdom, ext.id as eqext, phpfed3GS_matchs.id as id_match
                FROM phpfed3GS_equipes as dom, phpfed3GS_equipes as ext, phpfed3GS_matchs, phpfed3GS_journees,
                     phpfed3GS_clubs as cldom, phpfed3GS_clubs as clext
                WHERE phpfed3GS_matchs.id_equipe_dom=dom.id
                        AND phpfed3GS_matchs.id_equipe_ext=ext.id
                        AND phpfed3GS_journees.id_champ='$champ'
                        AND phpfed3GS_journees.numero='$numero'
                        AND dom.id_club=cldom.id
                        AND ext.id_club=clext.id
                        AND phpfed3GS_matchs.id_journee=phpfed3GS_journees.id
                        AND cldom.nom!='exempte'
                        AND clext.nom!='exempte'
                        ORDER BY date_reelle asc");
       // $result=mysql_query($query1) or die (mysql_error());
//mise en forme tableau oppositions
        echo "<table align=\"center\" class=\"tablephpfed3GS2\" width=\"100%\" cellspacing=\"1\" cellpadding=\"1\"><tr><td><table cellspacing=\"0\" align=\"center\" width=\"100%\" cellpadding=\"1\">\n";
        $x=1;
        $minute = 0;
        $heure = 0;
        $jour = 0;
        $mois = 0;
        $annee = 0;

              while ($row=mysqli_fetch_array($reponse))
             {
             $clubs_nom = stripslashes($row[0]);
             $clubs_nom1 = stripslashes($row[1]);
             $domproba= $row[2];
             $extproba= $row[3];
                if ($row['buts_dom']=='' and $row['buts_ext']=='' and $proba==1 and $numero>=4)
                {
                $result2=$idconnect->query("SELECT DOMBUTSPOUR, DOMG, DOMN, DOMP, DOMBUTSCONTRE FROM phpfed3GS_clmnt_cache WHERE ID_EQUIPE='$row[eqdom]'");
                //$result2=mysql_query($query2);
                      while ($row2=mysqli_fetch_array($result2))
                      { 
                      $dom_buts=($row2['DOMBUTSPOUR']);
                      $dom_joues=($row2['DOMG']+$row2['DOMN']+$row2['DOMP']);
                      $ext_buts=($row2['DOMBUTSCONTRE']);
                      $ext_joues=($row2['DOMG']+$row2['DOMN']+$row2['DOMP']);
                      }

                $result2=$idconnect->query("SELECT EXTG, EXTN, EXTP, EXTBUTSCONTRE, EXTBUTSPOUR 
											FROM phpfed3GS_clmnt_cache 
											WHERE ID_EQUIPE='$row[eqext]'");
                //$result2=mysql_query($query2);
                      while ($row2=mysqli_fetch_array($result2))
                      {
                      $dom_joues+=($row2['EXTG']+$row2['EXTN']+$row2['EXTP']);
                      $ext_joues+=$row2['EXTG']+$row2['EXTN']+$row2['EXTP'];
                      $dom_buts+=($row2['EXTBUTSCONTRE']);
                      $ext_buts+=($row2['EXTBUTSPOUR']);
                      $dom_buts=intval((($dom_buts)/$dom_joues));
                      $ext_buts=intval((($ext_buts)/$ext_joues));
                      }

                $domproba="<i><font size=\"1\">".$dom_buts."</font></i>";
                $extproba="<i><font size=\"1\">".$ext_buts."</font></i>";
                }

                if ($x==1)
                {
                echo "<tr class=\"trphpfed3GS3\">\n<th colspan=\"5\"><b>".$legende." ". $numero."</b></th>\n</tr>";
                }



                if ($row['eqdom']==$id_equipe_fetiche )
                {
                $DebMarqueur1 = "<b>";
                $FinMarqueur1 = "</b>";
                }

                else
                {
                $DebMarqueur1 = "";
                $FinMarqueur1 = "";
                }

                if ($row['eqext']==$id_equipe_fetiche )
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

                if (($color%2)==0) {$classe="ligne1";} else {$classe="ligne2";}


                //echo "<tr bgcolor=\"$bgcolor\" class=\"trphpfed3GS\">";

                //if (($minute==substr($row[7],14,2)) and ($heure==substr($row[7],11,2)) and ($jour==substr($row[7],8,2)) and ($mois==substr($row[7],5,2)) and ($annee==substr($row[7],0,4)))
                if (!($annee==substr($row[7],0,4)) or !($mois==substr($row[7],5,2)) or !($jour==substr($row[7],8,2)) or !($minute==substr($row[7],14,2)) or !($heure==substr($row[7],11,2)))
                {

                $minute = substr($row[7],14,2); // on récupère la minute
                $heure = substr($row[7],11,2); // on récupère l'heure
                $jour = substr($row[7],8,2); // on récupère le jour
                $mois = substr($row[7],5,2); // puis le mois
                $annee = substr($row[7],0,4); // et l'annee



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


                $activ_prono=0;
//suppression des liens sur les scores
                if ($fiches_clubs=="1" and $activ_prono=="1")
                {
                echo "<td align=\"right\" width=\"40%\">".$DebMarqueur1.$clubs_nom.$FinMarqueur1."</a></td><td align=\"center\">".$domproba." - ".$extproba."</td><td align=\"left\" width=\"40%\">".$DebMarqueur2.$clubs_nom1.$FinMarqueur2."</a></td>";
                }

                if ($fiches_clubs=="1" and $activ_prono=="0")
                {
                echo "<td align=\"right\" width=\"40%\">".$DebMarqueur1.$clubs_nom.$FinMarqueur1."</a></td><td align=\"center\">".$domproba." - ".$extproba."</a></td><td align=\"left\" width=\"40%\">".$DebMarqueur2.$clubs_nom1.$FinMarqueur2."</a></td>";
                }

                elseif (!$fiches_clubs=="1" and $activ_prono=="1")
                {
                echo "<td align=\"right\" width=\"40%\">".$DebMarqueur1.$clubs_nom.$FinMarqueur1."</td><td align=\"center\">>".$domproba." - ".$extproba."</a></td><td align=\"left\" width=\"40%\">".$DebMarqueur2.$clubs_nom1.$FinMarqueur2."</td>";
                }

                elseif (!$fiches_clubs=="1" and $activ_prono=="0")
                {
                echo "<td align=\"right\" width=\"40%\">".$DebMarqueur1.$clubs_nom.$FinMarqueur1."</td><td align=\"center\">".$domproba." - ".$extproba."</a></td><td align=\"left\" width=\"40%\">".$DebMarqueur2.$clubs_nom1.$FinMarqueur2."</td>";
                }

                echo "</tr>\n";
                $x++;
                $color+=1;

              }

  $resultats=$idconnect->query("SELECT phpfed3GS_clubs.nom, CLEXT.nom, phpfed3GS_matchs.buts_dom, phpfed3GS_matchs.buts_ext,
            phpfed3GS_matchs.id, phpfed3GS_matchs.date_reelle
            FROM phpfed3GS_clubs, phpfed3GS_clubs as CLEXT, phpfed3GS_matchs, phpfed3GS_journees, phpfed3GS_equipes, phpfed3GS_equipes as EXT
            WHERE phpfed3GS_clubs.id=phpfed3GS_equipes.id_club
            AND CLEXT.id=EXT.id_club
            AND phpfed3GS_equipes.id=phpfed3GS_matchs.id_equipe_dom
            AND EXT.id=phpfed3GS_matchs.id_equipe_ext
            AND phpfed3GS_matchs.id_journee=phpfed3GS_journees.id
            AND phpfed3GS_journees.numero='$numero'
            AND phpfed3GS_journees.id_champ='$champ'
            AND (CLEXT.nom='exempte' or phpfed3GS_clubs.nom='exempte')");
  //$resultats=mysql_query($requete) or die (mysql_error());

  while ($row=mysqli_fetch_array($resultats))
  {   
   $row[0] = stripslashes($row[0]);
   $row[1]= stripslashes($row[1]);
    if (($color%2)==0) {$bgcolor1="#e5e5e5";} else {$bgcolor1="#FFFFFF";}
    if ($row[0]=='exempte') {echo "<tr bgcolor=\"$bgcolor1\" class=\"trphpfed3GS\"><td colspan=\"7\">".ADMIN_RESULTS_1." : $row[1]</td></tr>";}
    if ($row[1]=='exempte') {echo "<tr bgcolor=\"$bgcolor1\" class=\"trphpfed3GS\"><td colspan=\"7\" >".ADMIN_RESULTS_1." : $row[0]</td></tr>";}
  }
        echo "</table></td></tr></table>\n<br />\n";
        }


// *** REMPLI LA TABLE CLMNT
function db_clmnt($champ, $debut, $fin, $cache)
{
  $nb_requete=0;
  if($cache=="1"){ mysql_query("DELETE FROM phpfed3GS_clmnt_cache WHERE ID_CHAMP='$champ'") or die (mysql_error());}
  else{ mysql_query("DELETE FROM phpfed3GS_clmnt") or die (mysql_error());}
          $nb_requete++;

          if (!$fin){$fin=(nb_equipes($champ)*2)-2;}
          if (!$debut){$debut=1;}

// SELECTION DES PARAMETRES
$query="SELECT pts_victoire, pts_nul, pts_defaite FROM phpfed3GS_parametres WHERE id_champ='$champ'";
$nb_requete++;
$result=(mysql_query($query)) or die (mysql_error()) ;
      while ($row=mysql_fetch_array($result) )
      {
      $pts_victoire=$row['pts_victoire'];
      $pts_nul=$row['pts_nul'];
      $pts_defaite=$row['pts_defaite'];
      }

// victoires domicile
$query="SELECT dom.id, count(dom.id), phpfed3GS_clubs.nom, sum(buts_dom), sum(buts_ext) FROM phpfed3GS_equipes as dom, phpfed3GS_clubs, phpfed3GS_matchs, phpfed3GS_journees, phpfed3GS_championnats
WHERE dom.id_champ='$champ'
      AND dom.id_club=phpfed3GS_clubs.id
      AND dom.id=phpfed3GS_matchs.id_equipe_dom
      AND buts_dom > buts_ext
      AND phpfed3GS_championnats.id=phpfed3GS_journees.id_champ
      AND phpfed3GS_journees.id=phpfed3GS_matchs.id_journee
      AND phpfed3GS_journees.numero>='$debut'
      AND phpfed3GS_journees.numero<='$fin'
      GROUP by phpfed3GS_clubs.nom ";
      $nb_requete++;
$dom = mysql_query($query) or die (mysql_error());
     while($row= mysql_fetch_array($dom))
     {
     $clmnt[$row[2]]['GDOM']=$row[1];
      if (!isset($clmnt[$row[2]]['BUTSDOMPOUR'])) {$clmnt[$row[2]]['BUTSDOMPOUR']=$row[3];}
      else{$clmnt[$row[2]]['BUTSDOMPOUR']+=$row[3];}
      if (!isset($clmnt[$row[2]]['BUTSDOMCONTRE'])) {$clmnt[$row[2]]['BUTSDOMCONTRE']=$row[4];}
      else{$clmnt[$row[2]]['BUTSDOMCONTRE']+=$row[4];}
     }

// Defaites domicile
$query="SELECT dom.id, count(dom.id), phpfed3GS_clubs.nom, sum(buts_dom), sum(buts_ext) FROM phpfed3GS_equipes as dom, phpfed3GS_clubs, phpfed3GS_matchs, phpfed3GS_journees, phpfed3GS_championnats
WHERE dom.id_champ='$champ'
      AND dom.id_club=phpfed3GS_clubs.id
      AND dom.id=phpfed3GS_matchs.id_equipe_dom
      AND buts_dom < buts_ext
      AND phpfed3GS_championnats.id=phpfed3GS_journees.id_champ
      AND phpfed3GS_journees.id=phpfed3GS_matchs.id_journee
      AND phpfed3GS_journees.numero>='$debut'
      AND phpfed3GS_journees.numero<='$fin'
      GROUP by phpfed3GS_clubs.nom ";

       $dom = mysql_query($query) or die (mysql_error());

     while($row= mysql_fetch_array($dom))
     {
     $clmnt[$row[2]]['PDOM']=$row[1];
      if (!isset($clmnt[$row[2]]['BUTSDOMPOUR'])) {$clmnt[$row[2]]['BUTSDOMPOUR']=$row[3];}
      else{$clmnt[$row[2]]['BUTSDOMPOUR']+=$row[3];}
      if (!isset($clmnt[$row[2]]['BUTSDOMCONTRE'])) {$clmnt[$row[2]]['BUTSDOMCONTRE']=$row[4];}
      else{$clmnt[$row[2]]['BUTSDOMCONTRE']+=$row[4];}
     }
// Nuls domicile
$query="SELECT dom.id, count(dom.id), phpfed3GS_clubs.nom, sum(buts_dom), sum(buts_ext) FROM phpfed3GS_equipes as dom, phpfed3GS_clubs, phpfed3GS_matchs, phpfed3GS_journees, phpfed3GS_championnats
WHERE dom.id_champ='$champ'
      AND dom.id_club=phpfed3GS_clubs.id
      AND dom.id=phpfed3GS_matchs.id_equipe_dom
      AND buts_dom = buts_ext
      AND buts_dom is not null
      AND buts_ext is not null
      AND phpfed3GS_championnats.id=phpfed3GS_journees.id_champ
      AND phpfed3GS_journees.id=phpfed3GS_matchs.id_journee
      AND phpfed3GS_journees.numero>='$debut'
      AND phpfed3GS_journees.numero<='$fin'
      GROUP by phpfed3GS_clubs.nom ";

$dom = mysql_query($query) or die (mysql_error());

     while($row= mysql_fetch_array($dom))
     {
     $clmnt[$row[2]]['NDOM']=$row[1];
      if (!isset($clmnt[$row[2]]['BUTSDOMPOUR'])) {$clmnt[$row[2]]['BUTSDOMPOUR']=$row[3];}
      else{$clmnt[$row[2]]['BUTSDOMPOUR']+=$row[3];}
      if (!isset($clmnt[$row[2]]['BUTSDOMCONTRE'])) {$clmnt[$row[2]]['BUTSDOMCONTRE']=$row[4];}
      else{$clmnt[$row[2]]['BUTSDOMCONTRE']+=$row[4];}
     }
// Resultats à domicile
$query="SELECT phpfed3GS_clubs.nom FROM phpfed3GS_clubs, phpfed3GS_equipes, phpfed3GS_championnats
WHERE phpfed3GS_equipes.id_champ=phpfed3GS_championnats.id
      AND phpfed3GS_championnats.id='$champ'
      AND phpfed3GS_equipes.id_club=phpfed3GS_clubs.id";

$result=mysql_query($query) or die (mysql_error());

        
// RESULTATS EXTERIEURS :
// victoires exterieur
$query="SELECT ext.id, count(ext.id), phpfed3GS_clubs.nom, sum(buts_ext), sum(buts_dom) FROM phpfed3GS_equipes as ext, phpfed3GS_clubs, phpfed3GS_matchs, phpfed3GS_journees, phpfed3GS_championnats
WHERE ext.id_champ='$champ'
      AND ext.id_club=phpfed3GS_clubs.id
      AND ext.id=phpfed3GS_matchs.id_equipe_ext
      AND buts_ext > buts_dom
      AND phpfed3GS_championnats.id=phpfed3GS_journees.id_champ
      AND phpfed3GS_journees.id=phpfed3GS_matchs.id_journee
      AND phpfed3GS_journees.numero>='$debut'
      AND phpfed3GS_journees.numero<='$fin'
      GROUP by phpfed3GS_clubs.nom ";

$dom = mysql_query($query) or die (mysql_error());;


     while($row= mysql_fetch_array($dom))
     {
     $clmnt[$row[2]]['GEXT']=$row[1];
      if (!isset($clmnt[$row[2]]['BUTSEXTPOUR'])) {$clmnt[$row[2]]['BUTSEXTPOUR']=$row[3];}
      else{$clmnt[$row[2]]['BUTSEXTPOUR']+=$row[3];}
      if (!isset($clmnt[$row[2]]['BUTSEXTCONTRE'])) {$clmnt[$row[2]]['BUTSEXTCONTRE']=$row[4];}
      else{$clmnt[$row[2]]['BUTSEXTCONTRE']+=$row[4];}

     }
// Defaites exterieur
$query="SELECT ext.id, count(ext.id), phpfed3GS_clubs.nom, sum(buts_ext), sum(buts_dom) FROM phpfed3GS_equipes as ext, phpfed3GS_clubs, phpfed3GS_matchs, phpfed3GS_journees, phpfed3GS_championnats
WHERE ext.id_champ='$champ'
      AND ext.id_club=phpfed3GS_clubs.id
      AND ext.id=phpfed3GS_matchs.id_equipe_ext
      AND buts_ext < buts_dom
      AND phpfed3GS_championnats.id=phpfed3GS_journees.id_champ
      AND phpfed3GS_journees.id=phpfed3GS_matchs.id_journee
      AND phpfed3GS_journees.numero>='$debut'
      AND phpfed3GS_journees.numero<='$fin'
      GROUP by phpfed3GS_clubs.nom ";

$dom=mysql_query($query) or die (mysql_error());
                    
      While($row= mysql_fetch_array($dom))
      {
      $clmnt[$row[2]]['PEXT']=$row[1];
      if (!isset($clmnt[$row[2]]['BUTSEXTPOUR'])) {$clmnt[$row[2]]['BUTSEXTPOUR']=$row[3];}
      else{$clmnt[$row[2]]['BUTSEXTPOUR']+=$row[3];}
      if (!isset($clmnt[$row[2]]['BUTSEXTCONTRE'])) {$clmnt[$row[2]]['BUTSEXTCONTRE']=$row[4];}
      else{$clmnt[$row[2]]['BUTSEXTCONTRE']+=$row[4];}
      }

// Nuls exterieur
$query="SELECT ext.id, count(ext.id), phpfed3GS_clubs.nom, sum(buts_ext), sum(buts_dom) FROM phpfed3GS_equipes as ext, phpfed3GS_clubs, phpfed3GS_matchs, phpfed3GS_journees, phpfed3GS_championnats
WHERE ext.id_champ='$champ'
      AND ext.id_club=phpfed3GS_clubs.id
      AND ext.id=phpfed3GS_matchs.id_equipe_ext
      AND buts_ext = buts_dom
      AND buts_dom is not null
      AND buts_ext is not null
      AND phpfed3GS_championnats.id=phpfed3GS_journees.id_champ
      AND phpfed3GS_journees.id=phpfed3GS_matchs.id_journee
      AND phpfed3GS_journees.numero>='$debut'
      AND phpfed3GS_journees.numero<='$fin'
      GROUP by phpfed3GS_clubs.nom ";


$dom=mysql_query($query) or die (mysql_error());;

      while($row= mysql_fetch_array($dom))
      {
      $clmnt[$row[2]]['NEXT']=$row[1];
      if (!isset($clmnt[$row[2]]['BUTSEXTPOUR'])) {$clmnt[$row[2]]['BUTSEXTPOUR']=$row[3];}
      else{$clmnt[$row[2]]['BUTSEXTPOUR']+=$row[3];}
      if (!isset($clmnt[$row[2]]['BUTSEXTCONTRE'])) {$clmnt[$row[2]]['BUTSEXTCONTRE']=$row[4];}
      else{$clmnt[$row[2]]['BUTSEXTCONTRE']+=$row[4];}
      }
                 
// TABLEAU DE CLASSEMENT
$query="SELECT phpfed3GS_clubs.nom, phpfed3GS_equipes.penalite, phpfed3GS_equipes.id
        FROM phpfed3GS_clubs, phpfed3GS_equipes, phpfed3GS_championnats
        WHERE phpfed3GS_equipes.id_champ=phpfed3GS_championnats.id
        AND phpfed3GS_championnats.id='$champ'
        AND phpfed3GS_equipes.id_club=phpfed3GS_clubs.id";

$result=mysql_query($query) or die (mysql_error());

//mysql_query("LOCK TABLE phpfed3GS_clmnt WRITE, phpfed3GS_equipes WRITE, phpfed3GS_clubs WRITE") or die (mysql_error());

    if (mysql_num_rows($result)==0)
    {
    $query="SELECT phpfed3GS_clubs.nom, phpfed3GS_equipes.id 
            FROM phpfed3GS_clubs, phpfed3GS_equipes, phpfed3GS_championnats
            WHERE phpfed3GS_equipes.id_champ=phpfed3GS_championnats.id
            AND phpfed3GS_championnats.id='$champ'
            AND phpfed3GS_equipes.id_club=phpfed3GS_clubs.id";

    $result=mysql_query($query) or die (mysql_error());
    }

    while($row = mysql_fetch_array($result))
    {
    $NOM=$row['nom'];
    $DOMJOUES=$clmnt[$NOM]['GDOM']+$clmnt[$NOM]['NDOM'] + $clmnt[$NOM]['PDOM'];
    $EXTJOUES=$clmnt[$NOM]['GEXT']+$clmnt[$NOM]['NEXT'] + $clmnt[$NOM]['PEXT'];
    $JOUES=$EXTJOUES + $DOMJOUES;
    $DOMPOINTS=(($clmnt[$NOM]['GDOM'])*$pts_victoire) + (($clmnt[$NOM]['NDOM'])*$pts_nul) + (($clmnt[$NOM]['PDOM'])*$pts_defaite);
    $EXTPOINTS=(($clmnt[$NOM]['GEXT'])*$pts_victoire) + (($clmnt[$NOM]['NEXT'])*$pts_nul) + (($clmnt[$NOM]['PEXT'])*$pts_defaite);
    $POINTS= $DOMPOINTS+ $EXTPOINTS + $row['penalite'];
    $G=($clmnt[$NOM]['GEXT'])+($clmnt[$NOM]['GDOM']);
    $N=($clmnt[$NOM]['NEXT'])+($clmnt[$NOM]['NDOM']);
    $P=$clmnt[$NOM]['PEXT'] + $clmnt[$NOM]['PDOM'];
    $DOMG=($clmnt[$NOM]['GDOM']);
    $DOMN=($clmnt[$NOM]['NDOM']);
    $DOMP=$clmnt[$NOM]['PDOM'];
    $EXTG=($clmnt[$NOM]['GEXT']);
    $EXTN=($clmnt[$NOM]['NEXT']);
    $EXTP=$clmnt[$NOM]['PEXT'];
    $BUTSPOUR=$clmnt[$NOM]['BUTSEXTPOUR'] + $clmnt[$NOM]['BUTSDOMPOUR'];
    $DOMBUTSPOUR=$clmnt[$NOM]['BUTSDOMPOUR'];
    $EXTBUTSPOUR=$clmnt[$NOM]['BUTSEXTPOUR'];
    $BUTSCONTRE=$clmnt[$NOM]['BUTSEXTCONTRE'] + $clmnt[$NOM]['BUTSDOMCONTRE'];
    $DOMBUTSCONTRE= $clmnt[$NOM]['BUTSDOMCONTRE'];
    $EXTBUTSCONTRE=$clmnt[$NOM]['BUTSEXTCONTRE'] ;
    $DIFF=$BUTSPOUR - $BUTSCONTRE;
    $DOMDIFF=$DOMBUTSPOUR-$DOMBUTSCONTRE;
    $EXTDIFF=$EXTBUTSPOUR - $EXTBUTSCONTRE;
    $PEN = $row['penalite'];
    $NOM=addslashes($row['nom']);

    $question="INSERT INTO ";

    if($cache=="1"){$question.="phpfed3GS_clmnt_cache ";}
    else{$question.="phpfed3GS_clmnt ";}
            
    $question.="SET NOM='$NOM',
          ID_EQUIPE='$row[id]',
          ID_CHAMP='$champ',
          POINTS='$POINTS',
          DOMPOINTS='$DOMPOINTS',
          EXTPOINTS='$EXTPOINTS',
          JOUES= '$JOUES',
          DOMJOUES= '$DOMJOUES',
          EXTJOUES= '$EXTJOUES',
          G='$G',
          DOMG='$DOMG',
          EXTG='$EXTG',
          N='$N',
          DOMN='$DOMN',
          EXTN='$EXTN',
          P='$P',
          DOMP='$DOMP',
          EXTP='$EXTP',
          BUTSPOUR='$BUTSPOUR',
          DOMBUTSPOUR='$DOMBUTSPOUR',
          EXTBUTSPOUR='$EXTBUTSPOUR',
          BUTSCONTRE='$BUTSCONTRE',
          DOMBUTSCONTRE='$DOMBUTSCONTRE',
          EXTBUTSCONTRE='$EXTBUTSCONTRE',
          DIFF='$DIFF',
          DOMDIFF='$DOMDIFF',
          EXTDIFF='$EXTDIFF',
          PEN='$PEN'";
          $result2=mysql_query($question) or die(mysql_error());

    }
    
if($cache=="1"){$requete="DELETE FROM phpfed3GS_clmnt_cache WHERE nom='exempte'" or die (mysql_error());}
else{$requete="DELETE FROM phpfed3GS_clmnt WHERE nom='exempte'" or die (mysql_error());}

$resultat=mysql_query($requete) or die (mysql_error());
//mysql_query("UNLOCK TABLES") or die (mysql_error());
}

function clmnt($legende, $type, $accession, $barrage, $relegation, $champ, $requete, $lien, $id_equipe_fetiche)
{
echo "<table class=\"tablephpfed3GS2\" align=\"center\" cellspacing=\"0\" width=\"95%\"><tr class=\"trphpfed3GS3\"><th colspan=\"11\">".$legende."</th></tr>\n";
echo "<tr class=\"trphpfed3GS3\">
<th align=\"center\">".CLMNT_POSITION."</th>
<th align=\"left\">".CLMNT_EQUIPE."</th>
<th align=\"left\">".CLMNT_POINTS."</th>\n";
echo "<th align=\"left\">".CLMNT_JOUES."</th>
<th align=\"left\">".CLMNT_VICTOIRES."</th>
<th align=\"left\">".CLMNT_NULS."</th>
<th align=\"left\">".CLMNT_DEFAITES."</th>
<th align=\"left\">".CLMNT_BUTSPOUR."</th>
<th align=\"left\">".CLMNT_BUTSCONTRE."</th>
<th align=\"left\">".CLMNT_DIFF."</th>
<th align=\"left\">".CLMNT_PEN."</th>
<th align=\"left\"></th></tr>\n";

$result=mysqli_query($requete) or die (mysql_error());
$pl=1;

      while ($row=mysql_fetch_array($result))
      {
                        if ($row['NOM']==EXEMPT){continue;}
                        if ($pl<=$accession and $type==GENERAL){echo "<tr class=\"accession\">";}
                        elseif ($pl<=$barrage and $type==GENERAL){echo "<tr class=\"barrage\">";}
                        elseif ($pl>$relegation and $type==GENERAL){echo "<tr class=\"relegation\">";}
                        elseif (($pl%2)==0){echo "<tr class=\"ligne1\">";}
                      	else{echo "<tr class=\"ligne2\">";}

        echo "<td align=\"center\">$pl</td>";
        $pl++;
        $x=0;


              while($x<10)
               {
               echo "<td>";

                   if ($x==0)
                    {
                     if ($row['ID_EQUIPE']==$id_equipe_fetiche){echo "<b>";}

                     if ($lien=='non'){echo "$row[$x]";}
                     else {echo "<a href=\"detaileq.php?champ=$champ&amp;id_equipe=".$row['ID_EQUIPE']."\">$row[$x]</a>";
                     if ($row['ID_EQUIPE']==$id_equipe_fetiche){echo "</b>";}
                     }
                     }

                     else print $row[$x];
                     echo "</td>";
                     $x++;
                     }
             echo "<td align=\"right\">";
             $leg=CONSULT_CLUB_4;
             if ($type==GENERAL){echo "<a href=\"#\" onclick=\"window.open('graph.php?equipe=".$row['ID_EQUIPE']."','Stats','toolbar=0,location=0,directories=0,status=0,scrollbars=0,resizable=0,copyhistory=0,menuBar=0,width=560,height=320');return false;\"><img src=\"graph.gif\" border=\"0\" alt=\"$leg\"></a>";}
             echo "</td></tr>\n";
            }
        echo "</table>";
}


function Buteur($legende, $requete, $type, $EquipeFetiche, $champ, $debut, $fin, $equipe, $complet)
{
echo "<table class=\"tablephpfed3GS2\" align=\"center\" cellspacing=\"0\" width=\"80%\" bgcolor=\"#FFFFFF\"><tr class=\"trphpfed3GS3\"><th colspan=\"11\">".$legende."<br /></th></tr>\n";
echo "<tr class=\"trphpfed3GS3\"><th>".CLMNT_POSITION."</th><th align=\"left\">".MENU_NOM."</th><th align=\"left\">".TEAM."</th><th align=\"left\">".ADMIN_JOUEURS_2."</th></tr>\n";
$resultats=mysql_query($requete) or die (mysql_error());
$pl=1;
$total="-1";
      while ($row=mysql_fetch_array($resultats))
      {
        
        $joueurs_nom=stripslashes($row["NomJoueur"]);
        $joueurs_prenom=stripslashes($row["PrenomJoueur"]);
        $row["nom"]=stripslashes($row["nom"]);
      echo "<tr class=\"trphpfed3GS2\">";
      echo "<td align=\"center\">";
      if ($total>$row["Total"] or ($pl=="1")){ print $pl;} else {echo "-";}
      $pl++;
      echo "</td>";
      $Test="NON";
      $array = explode(",",$EquipeFetiche);

      if (sizeof($array)==1)
      {
      if ($row['idClub']==$array[0]){$Test="OUI";}
      }

      else
      {
              for ($i="0"; $i < sizeof($array); $i++)
              {
              if ("'$row[idClub]'"==$array[$i]){$Test="OUI";}
              }
       }

       if ($Test=="OUI")
       {
       echo "<td><b><a href=\"#\" onclick=\"window.open('joueurs.php?id_joueur=$row[id_joueur]','Fichejoueur','toolbar=0,location=0,directories=0,status=0,scrollbars=1,resizable=0,copyhistory=0,menuBar=0,width=560,height=320');return false;\">".$joueurs_nom." ".$joueurs_prenom."</a></b></td>" ;
       echo "<td><b>".$row["nom"]."</b></td>" ;
       echo "<td><b>".$row["Total"]."</b></td></tr>\n" ;
       }

       else
       {
       echo "<td><a href=\"#\" onclick=\"window.open('joueurs.php?id_joueur=$row[id_joueur]','Fichejoueur','toolbar=0,location=0,directories=0,status=0,scrollbars=1,resizable=0,copyhistory=0,menuBar=0,width=560,height=320');return false;\">".$joueurs_nom." ".$joueurs_prenom."</a></td>";
       echo "<td>".$row["nom"]."</td>";
       echo "<td>".$row["Total"]."</td></tr>\n";
       }
       $total=$row["Total"];
}
if (!isset($complet)) {echo "<tr><td align=\"right\" colspan=\"4\"><a href=\"buteur.php?champ=$champ&amp;complet=1&amp;type=$type&amp;equipe=$equipe&amp;debut=$debut&amp;fin=$fin\">".PRONO_CLASSEMENT_COMPLET."</a></td></tr>";}
echo "</table>";
}


/////////////////////////////////////////////////////////////////////////////////////////////////
// Titre       : Add-on Gestion des clubs (fiches clubs), mini-classement,                     //
//               statistiques, amélioration de la gestion des buteurs pour phpfed3GSeague.          //
// Auteur      : Alexis MANGIN                                                                 //
// Email       : Alexis@univert.org                                                            //
// Url         : http://www.univert.org                                                        //
// Démo        : http://phpfed3GSeague.univert.org/demo.php                                         //
// Description : Edition, gestion, fiches phpfed3GS_clubs, statistiques, mini-classement...         //
// Version     : 0.71 (29/03/2003)                                                             //
//                                                                                             //
//                                                                                             //
// L'Univert   : Retrouvez quotidiennement l'actualité des Verts ainsi que de                  //
//               nombreuses autres rubriques consacrées à l'AS Saint-Etienne. Mais             //
//               L'Univert c'est avant tout la présentation d'un club devenu légende.          //
//                                                                                             //
/////////////////////////////////////////////////////////////////////////////////////////////////


// Affichage renseignements utilisée dans consult/club.php
function aff_rens ($id_classe, $id_clubs)
{
$query="SELECT phpfed3GS_donnee.id, phpfed3GS_donnee.nom, id_rens, id_clubs, phpfed3GS_rens.id, phpfed3GS_rens.nom, phpfed3GS_rens.id_classe, phpfed3GS_clubs.id, etat, phpfed3GS_donnee.url, phpfed3GS_rens.url
FROM phpfed3GS_donnee, phpfed3GS_rens, phpfed3GS_clubs
WHERE id_clubs='$id_clubs'
      AND id_clubs=phpfed3GS_clubs.id
      AND id_rens=phpfed3GS_rens.id
      AND id_classe='$id_classe'
      AND etat='1' order by rang";
$result = mysql_query ($query) or die(mysql_error());
$nb_rens=mysql_num_rows($result);

         if ($nb_rens=="0"){echo "<center>".ADMIN_EQUIPE_8."</center>";}

         while($row = mysql_fetch_array($result))
         {

                    if (empty ($row[9]) and empty ($row[10])){$donnee_nom=stripslashes($row[1]);echo "<b>$row[5] :</b> $donnee_nom <br />";}
                    elseif (empty ($row[9])){echo "<b><a href=\"$row[10]\">$row[5]</a> :</b> $row[1]<br />";}
                    elseif (empty ($row[10])){echo "<b>$row[5] :</b> <a href=\"$row[9]\">$row[1]</a><br />";}
                    else {echo "<b><a href=\"$row[10]\">$row[5]</a> :</b> <a href=\"$row[9]\">$row[1]</a><br />";}          
        }
        }


function clmntmini($legendemini, $typemini, $accessionmini, $barragemini, $relegationmini,  $champmini, $requetemini, $nb_dessusmini, $nb_dessousmini, $lienmini, $phpfed3GSEAGUE_RACINE, $id_equipe_fetiche)
{

echo "<table class=tablephpfed3GS2 align=\"center\" cellspacing=\"0\" width=\"200\"><tr class=trphpfed3GS3><th colspan=10>".$legendemini;
echo "<tr class=trphpfed3GS3>";
echo "<th align=\"center\">".CLMNT_POSITION."";
echo "<th align=\"left\">".CLMNT_EQUIPE."";
echo "<th align=\"left\">".CLMNT_POINTS."";
echo "<th align=\"center\">".CLMNT_JOUES."";
$result=mysql_query($requetemini) or die (mysql_error());
$pl=1;
$pl2=1;

       while ($row=mysql_fetch_array($result))
      {
        if ($row['ID_EQUIPE']==$id_equipe_fetiche)
        {
       $av=$pl2-$nb_dessusmini;
       $ap=$pl2+$nb_dessousmini;
        }
       $pl2++;
       }


$result=mysql_query($requetemini) or die (mysql_error());
      while ($row=mysql_fetch_array($result))
      {

if ($pl<=$ap and $pl>=$av)
{          
                        if ($row['NOM']==EXEMPT){continue;}
                        elseif ($pl<=$accessionmini and $typemini==GENERAL){echo "<TR class=accession>";}  //accession
                        elseif ($pl<=$barragemini and $typemini==GENERAL){echo "</tr><TR class=barrage>";}  //barrage
                        elseif ($pl>$relegationmini and $typemini==GENERAL){echo "</tr><TR class=relegation>";} //relegation
                        elseif (($pl%2)==0){echo "<TR class=ligne1>";}
                        else {echo "<TR class=ligne2>";}


        echo "<TD align=center>";
        print $pl;
        $pl++;
        $x=0;

               while($x<3)   // nb de colones
               {
               echo "<td align=\"left\">";

                    
                    if ($x==0)
                    {
                     if ($row['ID_EQUIPE']==$id_equipe_fetiche){echo "<b>";}
                     if ($lienmini=='non'){echo "$row[$x]";}
                     else {echo "<a href=\"".$phpfed3GSEAGUE_RACINE."consult/detaileq.php?champ=$champmini&amp;id_equipe=".$row['ID_EQUIPE']."\" target=\"_parent\">$row[$x]</a>";}
                     if ($row['ID_EQUIPE']==$id_equipe_fetiche){echo "</b>";}
                     }

                     else print $row[$x];
                     $x++;

                     }
     
            }
elseif ($pl>$ap){$pl++;}
elseif ($pl<$av){$pl++;}
    }
echo "</table>";
}

function clmnt_barre($legende, $type, $accession, $barrage, $relegation,  $champ, $requete, $lien, $id_equipe_fetiche)
{
echo "<table class=\"tablephpfed3GS2\" align=\"center\" cellspacing=\"0\" width=\"80%\"><tr class=\"trphpfed3GS3\"><th colspan=\"11\">".$legende;
echo "</th></tr>\n<tr class=\"trphpfed3GS3\">
<th align=\"center\">".CLMNT_POSITION."</th>
<th align=\"left\">".CLMNT_EQUIPE."</th>
<th align=\"left\">".CLMNT_POINTS."</th>\n";
echo "<th align=\"left\">".CLMNT_JOUES."</th>
<th align=\"left\">".CLMNT_VICTOIRES."</th>
<th align=\"left\">".CLMNT_NULS."</th>
<th align=\"left\">".CLMNT_DEFAITES."</th>
<th align=\"left\">".CLMNT_BUTSPOUR."</th>
<th align=\"left\">".CLMNT_BUTSCONTRE."</th>
<th align=\"left\">".CLMNT_DIFF."</th>
<th align=\"left\">".CLMNT_PEN."</th>
<th align=\"left\"></th></tr>\n";

$result=mysql_query($requete) or die (mysql_error());
$pl=1;
$action=0;
      while ($row=mysql_fetch_array($result))
      {      
                if ($row['NOM']==EXEMPT){continue;}
                if ($pl==$accession and $type==GENERAL){$action=1;}
                if (($pl%2)==0)
                {
                     echo "<tr class=\"ligne1\">";
                }
                else
                {
                     echo "<tr class=\"ligne2\">";
                }
                if ($pl==$relegation and $type==GENERAL){$action=1;}
                if ($pl==$barrage and $type==GENERAL){$action=1;}

        echo "<td align=\"center\">";
        print $pl;
        echo "</td>";
        $pl++;
        $x=0;

               while($x<10)
               {
               echo "<td>";

                    //if ($row[$x]==$equipe_fetiche){echo "<b>";}
                    if ($x==0)
                    {
                     if ($row['ID_EQUIPE']==$id_equipe_fetiche){echo "<b>";}

                     if ($lien=='non'){echo "$row[$x]";}
                     else {echo "<a href=\"detaileq.php?champ=$champ&amp;id_equipe=".$row['ID_EQUIPE']."\">$row[$x]</a>";}
                     if ($row['ID_EQUIPE']==$id_equipe_fetiche){echo "</b>";}

                     }


                     else print $row[$x];
                     $x++;

                     echo "</td>";
                     }
          echo "<td align=\"right\">";
          $leg=CONSULT_CLUB_4;
          if ($type==GENERAL){echo "<a href=\"#\" onclick=\"window.open('graph.php?equipe=".$row['ID_EQUIPE']."','Stats','toolbar=0,location=0,directories=0,status=0,scrollbars=0,resizable=0,copyhistory=0,menuBar=0,width=560,height=320');return false;\"><img src=\"graph.gif\" border=\"0\" alt=\"$leg\"></a>";}
             echo "</td></tr>";
             echo"";
          if ($action==0){echo "<tr><td bgcolor=\"#000000\" colspan=\"11\" height=\"1\"></td></tr>";$action=0;}
          if ($action==1){echo"<tr><td bgcolor=\"#000000\" colspan=\"11\"><img height=\"2\" src=\"pix.gif\" width=\"1\" border=\"0\" alt=\"\"></td></tr>";$action=0;}
            echo "";
        }
        echo "</table>\n";
   }

function clmntmini_barre($legendemini, $typemini, $accessionmini, $barragemini, $relegationmini,  $champmini, $requetemini, $nb_dessusmini, $nb_dessousmini, $lienmini, $phpfed3GSEAGUE_RACINE, $id_equipe_fetiche)
{
echo "<table class=tablephpfed3GS2 align=\"center\" cellspacing=\"0\" width=\"200\"><tr class=trphpfed3GS3><th colspan=10>".$legendemini;
echo "<tr class=trphpfed3GS3>";
echo "<th align=center>".CLMNT_POSITION."";
echo "<th align=left>".CLMNT_EQUIPE."";
echo "<th align=center>".CLMNT_POINTS."";
echo "<th align=\"left\">".CLMNT_JOUES."";
$result=mysql_query($requetemini) or die (mysql_error());
$pl=1;


$pl2=1;

        while ($row=mysql_fetch_array($result))
      {
        if ($row['ID_EQUIPE']==$id_equipe_fetiche)
        {

       $av=$pl2-$nb_dessusmini;
       $ap=$pl2+$nb_dessousmini;

        }
$pl2++;
}


$result=mysql_query($requetemini) or die (mysql_error());
      while ($row=mysql_fetch_array($result))
      {




if ($pl<=$ap and $pl>=$av)
{
        if ($row['NOM']==EXEMPT){continue; $action=0;}
        if ($pl==$accessionmini){$action=1;}
        if (($pl%2)==0)
        {
             echo "<tr class=ligne1>";
             $action=0;
        }
        else
        {
             echo "<tr class=ligne2>";
             $action=0;
        }
        if ($pl==$relegationmini){$action=1;}
        if ($pl==$barragemini){$action=1;}
        
        echo "<td align=center>";
        print $pl;
        $pl++;
        $x=0;
                        
               while($x<3) // nb de colone
               {
               echo "<td>";
                    
                    if ($x==0)
                    {
                     if ($row['ID_EQUIPE']==$id_equipe_fetiche){echo "<b>";} 
                     if ($lienmini=='non'){echo "$row[$x]";}
                     else {echo "<a href=\"".$phpfed3GSEAGUE_RACINE."consult/detaileq.php?champ=$champmini&amp;id_equipe=".$row['ID_EQUIPE']."\" target=\"_parent\">$row[$x]</a>";}
                     if ($row['ID_EQUIPE']==$id_equipe_fetiche){echo "</b>";}
                    }
                     else print $row[$x];
                     $x++;
             }
     if ($action==1  and $typemini==GENERAL){echo"<tr><td bgcolor=\"#000000\" colspan=\"11\"><img height=\"2\" src=\"pix.gif\" width=\"1\" border=\"0\" alt=\"\"></td></tr>";$action=0;}
     elseif ($typemini==GENERAL){echo"<tr><td bgcolor=\"#000000\" colspan=\"10\" height=\"1\"></td></tr>";$action=0;}

            }
elseif ($pl>$ap){$pl++;}
elseif ($pl<$av){$pl++;}
}


echo "</table>";
}

function clmntred($legendemini, $typemini, $accessionmini, $barragemini, $relegationmini, $champmini, $requetemini, $lienmini, $phpfed3GSEAGUE_RACINE, $id_equipe_fetiche)
{
echo "<table class=tablephpfed3GS2 align=\"center\" cellspacing=\"0\"  width=\"200\"><tr class=trphpfed3GS3><th colspan=10>".$legendemini;
echo "<tr class=trphpfed3GS3>
<th align=\"center\">".CLMNT_POSITION."
<th align=\"center\">".CLMNT_EQUIPE."
<th align=\"left\">".CLMNT_POINTS."
<th align=\"center\">".CLMNT_JOUES."";
$result=mysql_query($requetemini) or die (mysql_error());
$pl=1;
      
      while ($row=mysql_fetch_array($result))
      {
                        if ($row['NOM']==EXEMPT){continue;}
                        if ($pl<=$accessionmini and $typemini==GENERAL){echo "<tr class=accession>";}
                        elseif ($pl<=$barragemini and $typemini==GENERAL){echo "</tr><tr class=barrage>";}
                        elseif ($pl>$relegationmini and $typemini==GENERAL){echo "</tr><tr class=relegation>";}
                        elseif (($pl%2)==0){echo "<tr class=ligne1>";}
                      	else{echo "<tr class=ligne2>";}

                      	

        echo "<td align=center>";
        print $pl;
        $pl++;
        $x=0;
        
              while($x<3)
               {
               echo "<td>";

      
                    
                    if ($x==0)
                    {
                     if ($row['ID_EQUIPE']==$id_equipe_fetiche){echo "<b>";}
                     if ($lienmini=='non'){echo "$row[$x]";}
                     else 
                      {
                        echo "<a href=\"".$phpfed3GSEAGUE_RACINE."consult/detaileq.php?champ=$champmini&amp;id_equipe=".$row['ID_EQUIPE']."\" target=\"_parent\">$row[$x]</a>";
                      }
                     if ($row['ID_EQUIPE']==$id_equipe_fetiche){echo "</b>";} 
                     }
                     
                     else print $row[$x];
                     $x++;
                     }
            }

        echo "</table>";
}

function clmnt_barrered($legendemini, $typemini, $accessionmini, $barragemini, $relegationmini,  $champmini, $requetemini, $lienmini, $phpfed3GSEAGUE_RACINE, $id_equipe_fetiche)
{
//mise en forme du mini classement
echo "<table class=tablephpfed3GS2 align=\"center\"  cellspacing=\"0\" width=\"95%\"><tr class=trphpfed3GS3><th colspan=10>".$legendemini;
echo "<tr class=trphpfed3GS3>
<th align=\"center\">".CLMNT_POSITION."
<th align=\"center\">".CLMNT_EQUIPE."
<th align=\"left\">".CLMNT_POINTS."
<th align=\"center\">".CLMNT_JOUES."";

$result=mysql_query($requetemini) or die (mysql_error());
$pl=1;
$action=0;
      while ($row=mysql_fetch_array($result))
      {
                if ($row['NOM']==EXEMPT){continue;}
                if ($pl==$accessionmini and $typemini==GENERAL){$action=1;}
                if (($pl%2)==0)
                {
                     echo "<tr class=ligne1>";
                }
                else
                {
                     echo "<tr class=ligne2>";
                }
                //if ($pl==($accession+1) and $type==GENERAL){$action=1;} // Si vous souhaitez encadrer le premier non promu
                if ($pl==$relegationmini and $typemini==GENERAL){$action=1;}
                if ($pl==$barragemini and $typemini==GENERAL){$action=1;}

        echo "<td align=center>";
        print $pl;
        $pl++;
        $x=0;



              while($x<3)
               {
               echo "<td>";
                    

                    
                    if ($x==0)
                    {
                   //  if ($row['ID_EQUIPE']==$id_equipe_fetiche){echo "<b>";}
                     if ($lienmini=='non'){echo "$row[$x]";}
                   //  else {echo "<a href=\"".$phpfed3GSEAGUE_RACINE."consult/detaileq.php?champ=$champmini&amp;id_equipe=".$row['ID_EQUIPE']."\" target=\"_parent\">$row[$x]</a>";}
                   //  if ($row['ID_EQUIPE']==$id_equipe_fetiche){echo "</b>";}
                     }

                     else print $row[$x];
                     $x++;
          
                 }
          if ($action==0){echo"<tr><td bgcolor=\"#000000\" colspan=\"10\" height=\"1\"></td></tr>";$action=0;}
          if ($action==1){echo"<tr><td bgcolor=\"#000000\" colspan=\"11\"><img height=\"2\" src=\"pix.gif\" width=\"1\" border=\"0\" alt=\"\"></td></tr>";$action=0;}


        }
        echo "</table>";
   }

function demande_champ ()
{
// pour quel championnat ?
  ?>
</div>
<form method="get" action=""><div align="center">
       <h4>
       
  <?php print ADMIN_TAPVERT_MSG2; ?>
  
       </h4>
       <select name="champ">
       <option value="0"> </option>
  
  <?php       
       $query = "SELECT phpfed3GS_divisions.nom, phpfed3GS_saisons.annee, phpfed3GS_championnats.id
                 FROM phpfed3GS_championnats, phpfed3GS_divisions, phpfed3GS_saisons
                 WHERE phpfed3GS_championnats.id_division=phpfed3GS_divisions.id
                 AND phpfed3GS_championnats.id_saison=phpfed3GS_saisons.id
                 ORDER BY phpfed3GS_saisons.annee DESC, phpfed3GS_championnats.id";

       $result = mysql_query($query) or die (mysql_error());

           while ($row = mysql_fetch_array($result))
           {
               echo ("<option value=\"$row[2]\">$row[0]\n $row[1]/". ($row[1]+1)."\n");
               echo ("</option>\n");
           }
       $button=ENVOI;
  ?>
        </select>

        <?php
        if (isset($value)){ echo "value=$value";echo "<input type=\"hidden\" name=\"type\" value=\"$value\">";}
        ?>

        <input type="submit" value="<?php print $button; ?>"></div></form>
  <?php
}

function demande_equipe($champ)
{
  $requete = "SELECT phpfed3GS_clubs.nom, id_champ, phpfed3GS_equipes.id
              FROM phpfed3GS_clubs, phpfed3GS_equipes
              WHERE phpfed3GS_equipes.id_champ='$champ' and phpfed3GS_clubs.id=phpfed3GS_equipes.id_club
              ORDER BY nom";
$resultat = mysql_query($requete) or die (mysql_error());

echo "<form method=\"get\" action=\"\">";

echo "<select name=\"id_equipe\">";
echo "option value=\"0\"> </option>";

      while($row = mysql_fetch_array($resultat))
      {
      $row[0] = stripslashes($row[0]);
      $a=$row[1]+1;
      echo (" <option value=\"$row[2]\">$row[0]");
      echo ("</option>\n");
      }
echo "</select>";
$button=ENVOI;
echo "<input type=\"hidden\" name=\"champ\" value=\"$champ\">";
echo "<input type=\"submit\" value=\"$button\">";
echo "</form>";
}

?>
