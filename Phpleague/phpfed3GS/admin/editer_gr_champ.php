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

if ($action3=="2")
 {
 $resultats=$idconnect->query("SELECT id 
							FROM phpfed3GS_gr_championnats 
							WHERE id='$gr_champ'");
 
// if (!$resultats) die (mysql_error());
// $row=mysqli_fetch_array($resultats);
 $nb_resultats=mysqli_num_rows($resultats);

  if ($nb_resultats>0)
     { 
      //Màj des paramètres
	  
       mysqli_query($idconnect,("
	   UPDATE phpfed3GS_gr_championnats 
	   SET pts_prono_exact='$pts_prono_exact',
	       pts_prono_participation='$pts_prono_participation',
	       id_master='$id_master',
	       tps_avant_prono='$tps_avant_prono',
	       activ_prono='$activ_prono' 
	   WHERE id='$gr_champ'")) ;
     }
   else
     {
       // Insertion des paramètres dans la bdd
    
	  mysqli_query($idconnect,("
	  INSERT INTO phpfed3GS_gr_championnats (id_champ, pts_prono_exact, pts_prono_participation, id_master, tps_avant_prono) 
	  VALUES ('$champ', '$pts_prono_exact', '$pts_prono_participation', '$id_master', '$tps_avant_prono')"));
     }
 }

if ($action3=="creer" and $champ)
{
  $result=$idconnect->query("
		  SELECT * 
		  FROM phpfed3GS_gr_championnats 
		  WHERE id='$gr_champ'");
 
  while ($row=mysqli_fetch_array($result))
{
  
  $nom = isset($row['nom']) ? $row['nom'] : NULL;
  $activ_prono = isset($row['activ_prono']) ? $row['activ_prono'] : NULL;
  $pts_prono_exact = isset($row['pts_prono_exact']) ? $row['pts_prono_exact'] : NULL;
  $pts_prono_participation = isset($row['pts_prono_participation']) ? $row['pts_prono_participation'] : NULL;
  $id_master = isset($row['id_master']) ? $row['id_master'] : NULL;
  $tps_avant_prono = isset($row['tps_avant_prono']) ? $row['tps_avant_prono'] : NULL;
}
  if (isset($row["nom"])){$nom_gr_champ = $row["nom"];} else {$nom_gr_champ=0;}
  if (isset($row["activ_prono"])){$activ_prono = $row["activ_prono"];} else {$activ_prono=0;}
  if (isset($row["pts_prono_exact"])){$pts_prono_exact = $row["pts_prono_exact"];} else {$pts_prono_exact=0;}
  if (isset($row["pts_prono_participation"])){$pts_prono_participation = $row["pts_prono_participation"];} else {$pts_prono_participation=0;}
  if (isset($row["id_master"])){$id_master = $row["id_master"];} else {$id_master=0;}
  if (isset($row["tps_avant_prono"])){$tps_avant_prono = $row["tps_avant_prono"];} else {$tps_avant_prono=0;}
  
echo "nom : ".$nom_gr_champ;
    mysqli_query($idconnect,("DELETE FROM phpfed3GS_gr_championnats 
							  WHERE id = '$gr_champ'"));

     reset ($champ);
	 while ( list($cle, $val)= each($champ))
         {
		  mysqli_query($idconnect,("INSERT INTO phpfed3GS_gr_championnats (id, nom, id_champ, activ_prono, pts_prono_exact, pts_prono_participation, id_master,tps_avant_prono)
           	              VALUES ('$gr_champ', '$nom_gr_champ', '$val', '$activ_prono', '$pts_prono_exact', '$pts_prono_participation', '$id_master', '$tps_avant_prono')")) ;
		 }       

echo "nom : ".$nom_gr_champ;
}
?>


<table class=phpfed3GS width="80%">
            <tr>
              <td class=phpfed3GS2 align="center" colspan="4"><?php echo ADMIN_GR_CHAMP_EDIT." " ; affich_gr_champ ($gr_champ, $idconnect);echo "aaaa"; echo $gr_champ;?></td><td class=phpfed3GS2 align="right"><a href="#" onclick="window.open('Assistant_fr/equipes_2.htm','Assistant','toolbar=0,location=0,directories=0,status=0,scrollbars=1,resizable=0,copyhistory=0,menuBar=0,width=512,height=512');return false;"><img border="0" alt="Assistant" src="aide.gif"></a></td>
            </tr>

            <tr>
              <td align="center" class=phpfed3GS6 colspan="4"><b><?php echo ADMIN_GR_CHAMP_EDIT_2; ?></b></td>
            </tr>
            
            <tr>
              <td class=phpfed3GS3 colspan="3">
                <form method="POST" action=""><?php echo ADMIN_GR_CHAMP_EDIT_1; ?><b><?php affich_gr_champ ($gr_champ, $idconnect); echo "test2"; ?></b> : <?php champ_menu ($idconnect); ?><br /><?php echo ADMIN_EQUIPE_3; ?>
              </td>
              
              <td class=phpfed3GS3 align=right colspan="2">
                <?php $value=ADMIN_GR_CHAMP_EDIT_4; echo "<input type=\"submit\" value=\"$value\">";?>
                <input type="hidden" name="action3" value="creer">
                <input type="hidden" name="action" value="editer">
                <input type="hidden" name="page" value="groupes_championnats">
                <?php echo "<input type=\"hidden\" name=\"gr_champ\" value=\"$gr_champ\">";?>
              </td>
              
              </form>
            </tr>

            <tr>
              <td align="center" class=phpfed3GS6 colspan="4"><b><?php echo ADMIN_GR_CHAMP_EDIT_5; ?></b></td>
            </tr>
              <td class=phpfed3GS3 colspan="5" align="center"><?php  champ_gr_menu ($gr_champ, $idconnect);echo "test3"; ?></td>


              </td>
             </tr>

</table><br />

<table class=phpfed3GS width="80%">
            <tr>
              <td class=phpfed3GS2 align="center" colspan="3"><?php echo ADMIN_PARAM_MSG13." "; affich_gr_champ ($gr_champ, $idconnect);echo "test4"; ?></td>
            </tr>
            <tr>

<?php
//Affichage des donnéesdans le tableau
//$idconnect=@mysqli_connect('127.0.0.1','root','','onepip-france-db3');	
  
$result=$idconnect->query(" SELECT * 
							FROM phpfed3GS_gr_championnats 
							WHERE id='$gr_champ'");
//$resultats = mysql_query ($requete) or die ("probleme " .mysql_error());
$existant=mysqli_fetch_array($result);


echo "<form method=\"post\"  action=\"\">";

// Activer les pronostics ?
echo "<tr><td class=phpfed3GS4>";
echo "Activer les pronostics ?";
echo "<td class=phpfed3GS4>";

  if ($existant['activ_prono']=="1"){$checked1="checked"; $checked2="";}
  if ($existant['activ_prono']=="0"){$checked1=""; $checked2="checked";}
    else {$checked1="checked"; $checked2="";}

echo "<input type=\"radio\" value=\"1\" $checked1 name=\"activ_prono\">".ADMIN_RENS_17." <input type=\"radio\" value=\"0\" $checked2 name=\"activ_prono\">".ADMIN_RENS_18." </td></tr>";


// Points pour prono exact
echo "<td class=phpfed3GS3>";
echo ADMIN_PARAM_MSG9;
echo "</td><td class=phpfed3GS3>";
echo "<input type=\"text\" name=\"pts_prono_exact\" value=\"$existant[pts_prono_exact]\" size=3 maxlength=3></td></tr>";

// Points pour prono participation
echo "<tr><td class=phpfed3GS4>";
echo ADMIN_PARAM_MSG10;
echo "</td><td class=phpfed3GS4>";
echo "<input type=\"text\" name=\"pts_prono_participation\"  value=\"$existant[pts_prono_participation]\" size=3 maxlength=3></td></tr>";

// Master
echo "<tr><td class=phpfed3GS3>";
echo ADMIN_PARAM_MSG11;
echo "</td><td class=phpfed3GS3>";

$result2=$idconnect->query("SELECT pseudo, id 
							FROM phpfed3GS_membres 
							ORDER BY pseudo");

echo "<select name=\"id_master\">";
echo "<option></option>";
  while ($row2=mysqli_fetch_array($result2))
   {
     if ($row2[id]==$existant[id_master]){echo "<option value=\"$row2[id]\" selected>$row2[pseudo]</option>";}
     else echo "<option value=\"$row2[id]\">$row2[pseudo]</option>";
   }

echo "</select></td></tr>";

// Temps de validation avant match
echo "<tr><td class=phpfed3GS4>";
echo ADMIN_PARAM_MSG12;
echo "</td><td class=phpfed3GS4>";
echo "<input type=\"text\" name=\"tps_avant_prono\"  value=\"$existant[tps_avant_prono]\" size=3 maxlength=3></td></tr>";

echo "<input type=\"hidden\" name=\"action3\" value=\"2\"><input type=\"hidden\" name=\"gr_champ\" value=\"$champ\"><td colspan=2 align=\"center\"><input type=\"submit\" value=".ENVOI.">";
echo "</form>";
echo "</tr></table><br /><br />";

?>

