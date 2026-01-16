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


if ($action2=="creer" and isset($nom_club))
{
 
 echo "nom_club ".$nom_club;
 $nom_club = addslashes($nom_club);
 echo "<br />";echo "nom_club ".$nom_club;
 mysqli_query($idconnect,("INSERT INTO phppro_clubs (nom) values ('$nom_club')")) ;
}

if ($action2=="supp" and isset($club))
{  
   reset ($club);
	 while ( list($cle, $val)= each($club))
         {
	mysqli_query($idconnect,("DELETE FROM phppro_clubs WHERE id ='$val'")) ;
	mysqli_query($idconnect,("DELETE FROM phppro_donnee WHERE id_clubs ='$val'")) ;
         }
}

if ($action3=="supp")
{
         reset ($club);
	 while ( list ($cle, $val)= each ($club))
         {
		 mysqli_query($idconnect,("DELETE FROM phppro_equipes WHERE id='$val'")) ;
         }
}

if ($action3=="creer")
{
         reset ($club);
	 while ( list($cle, $val)= each($club))
         {
	mysqli_query($idconnect,("INSERT INTO phppro_equipes (id_champ,id_club) values ('$champ','$val')"));
         }
}

?>

<table class=phppro width="80%">
            <tr>
              <td class=phppro2 align="center" colspan="3"><?php echo ADMIN_CLUBS_CREE; ?><td class=phppro2 align="right"><a href="#" onclick="window.open('Assistant_fr/equipes_1.htm','Assistant','toolbar=0,location=0,directories=0,status=0,scrollbars=1,resizable=0,copyhistory=0,menuBar=0,width=512,height=512');return false;"><img border="0" alt="Assistant" src="aide.gif"></a>
            </tr>

            <tr>
              <td align="center" class=phppro6 colspan="4"><b><?php echo ADMIN_RENS_7; ?></b></td>
            </tr>
            
            <tr>
              <td class=phppro3 colspan="2">
                <form method="post" action=""><?php echo ADMIN_CLUB_NOM." "; ?><input type="texte" name="nom_club">
              </td>
              
              <td class=phppro3 align=right colspan="2">
                <?php $value=ADMIN_CHAMP_CREER_3; echo "<input type=\"submit\" value=\"$value\">";?>
                <input type="hidden" name="action2" value="creer">
                <input type="hidden" name="action" value="equipes">
                <input type="hidden" name="page" value="championnat">
                <?php echo "<input type=\"hidden\" name=\"champ\" value=\"$champ\">";?>
              </td>
              
              </form>
            </tr>
            
            <tr>
              <td align="center" class=phppro6 colspan="4"><b><?php echo ADMIN_RENS_8; ?></b></td>
            </tr>
              <td class=phppro3 colspan="2"><form method="post" action=""><?php echo ADMIN_EQUIPE_1." "; clubs_menu ($idconnect); ?></td>

              <td class=phppro3 align=right colspan="2">
                <?php $value=ADMIN_RENS_8; echo "<input type=\"submit\" value=\"$value\">";?>
                <input type="hidden" name="action2" value="supp">
                <input type="hidden" name="action" value="equipes">
                <input type="hidden" name="page" value="championnat">
                <?php echo "<input type=\"hidden\" name=\"champ\" value=\"$champ\">";?>
                </form>
              </td>
             </tr>

</table><br />



<table class=phppro width="80%">
            <tr>
              <td class=phppro2 align="center" colspan="4"><?php echo ADMIN_EQUIPE_TITRE." " ; affich_champ ($champ, $idconnect); ?></td><td class=phppro2 align="right"><a href="#" onclick="window.open('Assistant_fr/equipes_2.htm','Assistant','toolbar=0,location=0,directories=0,status=0,scrollbars=1,resizable=0,copyhistory=0,menuBar=0,width=512,height=512')"><img border="0" alt="Assistant" src="aide.gif"></a></td>
            </tr>

            <tr>
              <td align="center" class=phppro6 colspan="4"><b><?php echo ADMIN_RENS_7; ?></b></td>
            </tr>
            
            <tr>
              <td class=phppro3 colspan="3">
                <form method="post" action=""><?php echo ADMIN_GR_CHAMP_EDIT_1; ?> <b><?php affich_champ ($champ, $idconnect); ?></b> : <?php clubs_menu ($idconnect); ?><br /><?php echo ADMIN_EQUIPE_3; ?>
              </td>
              
              <td class=phppro3 align=right colspan="2">
                <?php $value=ADMIN_RENS_7; echo "<input type=\"submit\" value=\"$value\">";?>
                <input type="hidden" name="action3" value="creer">
                <input type="hidden" name="action" value="equipes">
                <input type="hidden" name="page" value="championnat">
                <?php echo "<input type=\"hidden\" name=\"champ\" value=\"$champ\">";?>
              </td>
              
              </form>
            </tr>
            
            <tr>
              <td align="center" class=phppro6 colspan="4"><b><?php echo ADMIN_RENS_8; ?></b></td>
            </tr>
              <td class=phppro3 colspan="2"><form method="post" action=""><?php echo ADMIN_EQUIPE_4; ?> <b><?php affich_champ ($champ, $idconnect); ?></b> : <?php equipes_menu ($champ, $idconnect); print nb_equipes($champ, $idconnect);?> clubs</td>
                     
              <td class=phppro3 align=right colspan="3">
               <?php $value=ADMIN_RENS_8; echo "<input type=\"submit\" value=\"$value\">";?>
                <input type="hidden" name="action3" value="supp">
                <input type="hidden" name="action" value="equipes">
                <input type="hidden" name="page" value="championnat">
                <?php echo "<input type=\"hidden\" name=\"champ\" value=\"$champ\">";?>
                </form>
              </td>
             </tr>

</table><br />
