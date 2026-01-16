<?php
//***********************************************************************/
// Phpleague : gestionnaire de championnat                              */
// ============================================                         */
//                                                                      */
// Version : 0.82                                                       */
// Copyright (c) 2004    Alexis MANGIN                                  */
// http://phpleague.univert.org                                         */
//                                                                      */
// This program is free software. You can redistribute it and/or modify */
// it under the terms of the GNU General Public License as published by */
// the Free Software Foundation; either version 2 of the License.       */
//                                                                      */
//***********************************************************************/
// Support technique : http://phpleague.univert.org/forum               */
//                                                                      */
//***********************************************************************/

if (empty ($numero))
{   $requete="SELECT max(phpl_journees.numero) from phpl_journees, phpl_matchs where phpl_journees.id=phpl_matchs.id_journee and buts_dom is not NULL and phpl_journees.id_champ='$champ'";
    $resultats=mysql_query($requete);
     while ($row=mysql_fetch_array($resultats))
       {
         $numero=$row[0];
       }
       if ($numero=="") {$numero="1";}
  }
if (empty ($numero)){$numero=1;}


if ($action2=="1")
  {
    
     reset ($date_reelle);
     reset ($butd);
     reset ($butv);
     reset ($matchs_id);
     
	 while ( list ($cle, $val_date_reelle)= each ($date_reelle) and list ($cle, $val_butd)= each ($butd) and list ($cle, $val_butv)= each ($butv) and list ($cle, $val_matchs_id)= each ($matchs_id))
         {
           
            $date_us=format_date_us($val_date_reelle);
       if ( !(($val_butd=='') or ($val_butv=='')))
         {
           $requete="UPDATE phpl_matchs SET phpl_matchs.buts_dom='$val_butd', phpl_matchs.buts_ext='$val_butv', phpl_matchs.date_reelle='$date_us'
                     WHERE phpl_matchs.id='$val_matchs_id'";

           $requete4="SELECT pts_prono_exact, pts_prono_participation FROM phpl_gr_championnats WHERE id_champ='$champ'";
           $resultats4=mysql_query($requete4) or die (mysql_error());

           while ($row4=mysql_fetch_array($resultats4))
           {
              $pts_prono_exact=$row4[0];
              $pts_prono_participation=$row4[1];
              $points_prono_exact=$pts_prono_exact + $pts_prono_participation ;
           }

           $requete2="SELECT pronostic, id_membre FROM phpl_pronostics WHERE id_match='$val_matchs_id'";
           $resultats2=mysql_query($requete2) or die (mysql_error());
           while ($row2=mysql_fetch_array($resultats2))
           {
              if ($val_butd>$val_butv and $row2[0]=="1"){$query3="UPDATE phpl_pronostics SET points='$points_prono_exact', participation='1' WHERE id_membre='$row2[1]' AND id_match='$val_matchs_id'";}
              elseif ($val_butd==$val_butv and $row2[0]=="N"){$query3="UPDATE phpl_pronostics SET points='$points_prono_exact', participation='1' WHERE id_membre='$row2[1]' AND id_match='$val_matchs_id'";}
              elseif ($val_butd<$val_butv and $row2[0]=="2"){$query3="UPDATE phpl_pronostics SET points='$points_prono_exact', participation='1' WHERE id_membre='$row2[1]' AND id_match='$val_matchs_id'";}
              else {$query3="UPDATE phpl_pronostics SET points='$pts_prono_participation', participation='1' WHERE id_membre='$row2[1]' AND id_match='$val_matchs_id'";}
              mysql_query($query3) or die (mysql_error());
            }
           
         }
    
    
    

       elseif (($val_butv=='') or ($val_butd==''))
       {
         $requete="UPDATE phpl_matchs SET phpl_matchs.buts_dom=NULL, phpl_matchs.buts_ext=NULL, phpl_matchs.date_reelle='$date_us'
                   WHERE phpl_matchs.id='$val_matchs_id' " ;
         $requete2="SELECT pronostic, id_membre FROM phpl_pronostics WHERE id_match='$val_matchs_id'";
         $resultats2=mysql_query($requete2) or die (mysql_error());
         while ($row2=mysql_fetch_array($resultats2))
         { 
            mysql_query("UPDATE phpl_pronostics SET points = '0', participation='0' WHERE id_membre='$row2[1]' AND id_match='$val_matchs_id'") or die (mysql_error());
         } 
       }
     mysql_query($requete);
     }     
  }

?>

<table class=phpl width="80%">
            <tr>
              <td class=phpl2 align="center" colspan="3"><? echo ADMIN_RESULTS_TITRE." "; affich_champ ($champ); ?></td>
            </tr>
            <tr>
              <td align="center"><? journees ($champ, $numero, $action);?><br /><br />
              </td>
              </tr>
              <tr>
              <td>
              <table align=center cellspacing="0" width="100%">
              <form method="post" action="">
              
       <?
       resultats ($champ, $numero);
       ?>  
    </form>

              


</td>
            </tr>
</table>
<br /><br />
