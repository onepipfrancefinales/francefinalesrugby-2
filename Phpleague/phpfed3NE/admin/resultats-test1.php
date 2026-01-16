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

//$idconnect=@mysqli_connect('127.0.0.1','root','','onepip-france-db3');	
//$idconnect=@mysqli_connect('sql.franceserv.fr','onepip-france','lavelan09','onepip-france-db3');	  
  
//echo "numero :".$numero;echo "<br />";
if (empty ($numero))
{   

  $resultats=$idconnect->query("  SELECT max(phpfed3NE_journees.numero) 
								  from phpfed3NE_journees, phpfed3NE_matchs 
								  where phpfed3NE_journees.id=phpfed3NE_matchs.id_journee 
								  and buts_dom is not NULL 
								  and phpfed3NE_journees.id_champ='$champ'");
   
     while ($row=mysqli_fetch_array($resultats))
       {
         $numero=$row[0];
       }
       if ($numero=="") {$numero="1";}
  }
if (empty ($numero)){$numero=1;}
echo "action : ".$action;echo "<br />";
echo "----------------    ";
echo "voir admin/resultats-> pronostic";
echo "<br />";

for ($i = 0; $i < 5; $i++) {

echo "i".$i;
echo "A" . $matchs_id[$i];echo "<br />";
  echo "B" . $date_reelle[$i];echo "<br />";
   echo "C" . $butd[$i];echo "<br />";
    echo "D" . $butv[$i];echo "<br />";
    echo "--------------------";
  
}
  echo "<br />";echo "<br />";
  
  echo "aa" . $matchs_id[0];echo "<br />";
  echo "bb" . $date_reelle[0];echo "<br />";
   echo "bb" . $butd[0];echo "<br />";
    echo "bb" . $butv[0];echo "<br />";
  
 echo "<br />";echo "<br />";
  echo "aa" . $matchs_id[1];echo "<br />";
  echo "bb" . $date_reelle[1];echo "<br />";
   echo "bb" . $butd[1];echo "<br />";
    echo "bb" . $butv[1];echo "<br />";
//}
echo "--------------------";
if ($action2=="1")
  {
     reset ($date_reelle);
     reset ($butd);
     reset ($butv);
     reset ($matchs_id);
 
    if ( !(($butd=='') or ($butv=='')))
       {
     // for ($i = 0; $i < 5; $i++) {
        echo "debut Etape 1 : affichages des scores" . "<br />";
        //Insertion des données dans la table matchs
        mysqli_query($idconnect, ("UPDATE phpfed3NE_matchs  SET 
                                      buts_dom='5', 
                                  WHERE id=' 9911611701'"));



      
    
    echo "debut Etape 1.1 : affichages des scores" . "<br />";
    
     echo "<br />";echo "<br />";
    echo "id" . $matchs_id[$i];echo "<br />";
  echo "date" . $date_reelle[$i];echo "<br />";
   echo "domicile" . $butd[$i];echo "<br />";
    echo "exterieur" . $butv[$i];echo "<br />";
  
 echo "<br />";echo "<br />";
  
      echo "debut Etape 1.2 : affichages des scores" . "<br />";
    
    
    
   // }
					 
		
         }
    
       elseif (($butv=='') or ($butd==''))
       {

         for ($i = 0; $i < 5; $i++) {
        echo "debut Etape 2 : absences des scores"."<br />";  

 mysqli_query ($idconnect, ("UPDATE phpfed3NE_matchs 
					SET phpfed3NE_matchs.buts_dom = NULL, phpfed3NE_matchs.buts_ext = NULL, phpfed3NE_matchs.date_reelle='$date_reelle[$i]'
                    WHERE phpfed3NE_matchs.id ='$matchs_id[$i]' ")) ;	
 
       }
       }
	  
     }     
  
?>

<table class=phpfed3NE width="80%">
  <tr>
    <td class=phpfed3NE2 align="center" colspan="3"><?php echo ADMIN_RESULTS_TITRE." "; affich_champ ($champ, $idconnect); ?></td>
  </tr>
  <tr>
    <td align="center"><?php journees ($champ, $numero, $action, $idconnect);?><br /><br /></td>
  </tr>
  <tr>
    <td>			  
	 <table align=center cellspacing="0" width="100%">
	   <form method="post" action="">         
         <?php resultats ($champ, $numero, $idconnect); ?>  
       </form>
   </td>
  </tr>
</table>
<br /><br />
