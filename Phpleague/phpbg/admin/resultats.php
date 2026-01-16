<?php
//***********************************************************************/
// phpbgeague : gestionnaire de championnat                              */
// ============================================                         */
//                                                                      */
// Version : 0.82                                                       */
// Copyright (c) 2004    Alexis MANGIN                                  */
// http://phpbgeague.univert.org                                         */
//                                                                      */
// This program is free software. You can redistribute it and/or modify */
// it under the terms of the GNU General Public License as published by */
// the Free Software Foundation; either version 2 of the License.       */
//                                                                      */
//***********************************************************************/
// Support technique : http://phpbgeague.univert.org/forum               */
//                                                                      */
//***********************************************************************/

//$idconnect=@mysqli_connect('127.0.0.1','root','','onepip-france-db3');	
//$idconnect=@mysqli_connect('sql.franceserv.fr','onepip-france','lavelan09','onepip-france-db3');	  
  

if (empty ($numero))
{   

  $resultats=$idconnect->query("  SELECT max(phpbg_journees.numero) 
								  from phpbg_journees, phpbg_matchs 
								  where phpbg_journees.id=phpbg_matchs.id_journee 
								  and buts_dom is not NULL 
								  and phpbg_journees.id_champ='$champ'");
   
     while ($row=mysqli_fetch_array($resultats))
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
           $requete="UPDATE phpbg_matchs SET phpbg_matchs.buts_dom='$val_butd', phpbg_matchs.buts_ext='$val_butv', phpbg_matchs.date_reelle='$date_us'
                     WHERE phpbg_matchs.id='$val_matchs_id'";

       
  $resultats4=$idconnect->query("SELECT pts_prono_exact, pts_prono_participation 
								 FROM phpbg_gr_championnats 
								 WHERE id_champ='$champ'");

           while ($row4=mysqli_fetch_array($resultats4))
           {
              $pts_prono_exact=$row4[0];
              $pts_prono_participation=$row4[1];
              $points_prono_exact=$pts_prono_exact + $pts_prono_participation ;
           }

      
  $resultats2=$idconnect->query("SELECT pronostic, id_membre 
								 FROM phpbg_pronostics WHERE id_match='$val_matchs_id'");
          
           while ($row2=mysqli_fetch_array($resultats2))
           {
              if ($val_butd>$val_butv and $row2[0]=="1"){$query3="UPDATE phpbg_pronostics SET points='$points_prono_exact', participation='1' WHERE id_membre='$row2[1]' AND id_match='$val_matchs_id'";}
              elseif ($val_butd==$val_butv and $row2[0]=="N"){$query3="UPDATE phpbg_pronostics SET points='$points_prono_exact', participation='1' WHERE id_membre='$row2[1]' AND id_match='$val_matchs_id'";}
              elseif ($val_butd<$val_butv and $row2[0]=="2"){$query3="UPDATE phpbg_pronostics SET points='$points_prono_exact', participation='1' WHERE id_membre='$row2[1]' AND id_match='$val_matchs_id'";}
              else 
			  {
			   mysqli_query ($idconnect, ("UPDATE phpbg_pronostics 
						SET points='$pts_prono_participation', participation='1' 
						WHERE id_membre='$row2[1]' 
						AND id_match='$val_matchs_id'"));
						}
              //mysql_query($query3) or die (mysqli_error()));
             }
           
         }
    
       elseif (($val_butv=='') or ($val_butd==''))
       {
          mysqli_query ($idconnect, ("UPDATE phpbg_matchs 
					SET phpbg_matchs.buts_dom=NULL, phpbg_matchs.buts_ext=NULL, phpbg_matchs.date_reelle='$date_us'
                    WHERE phpbg_matchs.id='$val_matchs_id' ")) ;	
  
  $resultats2=$idconnect->query("SELECT pronostic, id_membre FROM phpbg_pronostics WHERE id_match='$val_matchs_id'");
         
         while ($row2=mysqli_fetch_array($resultats2))
         { 
            mysqli_query ($idconnect, ("UPDATE phpbg_pronostics 
			SET points = '0', participation='0' 
			WHERE id_membre='$row2[1]' AND id_match='$val_matchs_id'") or die (mysqli_error()));
         } 
       }
     mysqli_query($idconnect, $requete);
     }     
  }

?>

<table class=phpbg width="80%">
            <tr>
              <td class=phpbg2 align="center" colspan="3"><?php echo ADMIN_RESULTS_TITRE." "; affich_champ ($champ, $idconnect); ?></td>
            </tr>
            <tr>
              <td align="center"><?php journees ($champ, $numero, $action, $idconnect);?><br /><br />
              </td>
              </tr>
              <tr>
              <td>
              <table align=center cellspacing="0" width="100%">
              <form method="post" action="">
              
       <?php
       resultats ($champ, $numero, $idconnect);
       ?>  
    </form>

              


</td>
            </tr>
</table>
<br /><br />
