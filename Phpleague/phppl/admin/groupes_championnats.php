<?php
//***********************************************************************/
// phppleague : gestionnaire de championnat                              */
// ============================================                         */
//                                                                      */
// Version : 0.82                                                       */
// Copyright (c) 2004    Alexis MANGIN                                  */
// http://phppleague.univert.org                                         */
//                                                                      */
// This program is free software. You can redistribute it and/or modify */
// it under the terms of the GNU General Public License as published by */
// the Free Software Foundation; either version 2 of the License.       */
//                                                                      */
//***********************************************************************/
// Support technique : http://phppleague.univert.org/forum               */
//                                                                      */
//***********************************************************************/
if (isset($_GET['ligue'])) {$ligue=$_GET['ligue'];} else {$ligue='';}
if (isset($_GET['gr_champ'])) {$gr_champ=$_GET['gr_champ'];} else {$gr_champ='';}
if (isset($_POST['action2'])) {$action2=$_POST['action2'];} else {$action2='';}
if (isset($_POST['nom_group'])) {$nom_group=$_POST['nom_group'];} else {$nom_group='';}
if (isset($_GET['confirm'])) {$confirm=$_GET['confirm'];} else {$confirm='';}
if (isset($_POST['action3'])) {$action3=$_POST['action3'];} else {$action3='';}
if (isset($_POST['champ'])) {$champ=$_POST['champ'];} else {$champ='';}

if (isset($_POST['pts_prono_exact'])) {$pts_prono_exact=$_POST['pts_prono_exact'];} else {$pts_prono_exact='';}
if (isset($_POST['pts_prono_participation'])) {$pts_prono_participation=$_POST['pts_prono_participation'];} else {$pts_prono_participation='';}
if (isset($_POST['id_master'])) {$id_master=$_POST['id_master'];} else {$id_master='';}
if (isset($_POST['tps_avant_prono'])) {$tps_avant_prono=$_POST['tps_avant_prono'];} else {$tps_avant_prono='';}
if (isset($_POST['activ_prono'])) {$activ_prono=$_POST['activ_prono'];} else {$activ_prono='';}


// Insertion en table de la création d'un groupe de championnats
if ($action2=="creer" and isset($nom_group) and $action=="creer")
{ 
  echo "ligue : ".$ligue; echo "<br>";
  $ligueFin = $ligue + 10000;
  echo "ligueFin : ".$ligueFin;echo "<br>";
  $resultats=$idconnect->query(" SELECT MAX(id)
							  FROM phppl_gr_championnats 
							  WHERE id BETWEEN '$ligue' AND '$ligueFin' ");

 while($row = mysqli_fetch_array($resultats))
      {
        $maxId = $row[0];
}
echo "maxId : ".$maxId; echo "<br>";
$newId = $maxId + 1 ;
echo "newId : ".$newId;echo "<br>";
  mysqli_query ($idconnect,("INSERT INTO phppl_gr_championnats (id, nom) VALUES ('$newId','$nom_group')"));
}

// Suppression d'un groupe de championnat
if ($confirm=="ok" and $gr_champ and $action=="supp")
{
  mysqli_query($idconnect,("DELETE FROM phppl_gr_championnats WHERE id ='$gr_champ' "));
}
?>

<br /><font class=phppl><?php echo GR_LEAGUE; ?></font><br /><br />

<table class=phppl width="90%">
            <tr>
              <td class=phppl2><?php echo MENU_ID; ?></td>
              <td class=phppl2><?php echo MENU_NOM; ?></td>
              <td class=phppl2></td>
            </tr>
              <?php // affich_gr_championnats ($gr_champ, $action, $idconnect); ?>
            <?php affich_gr_championnats ($ligue, $gr_champ, $action, $idconnect); ?>
          
            <tr>
              <td class=phppl5 align="right" colspan="4">
			    <a href="?page=groupes_championnats&action=creer&ligue=<?php echo $ligue;?>"> 
			   
          <?php echo ADMIN_GR_CHAMP_CREER;?></a>
			  </td>
            </tr>

          </table>
<br /><br />
<?php
// affichage le l'action engagée
if ($action=="supp" and $gr_champ){ include ("supp_gr_champ.php"); }

if ($action=="creer") {include("creer_gr_champ.php");}

if ($action=="editer") {include("editer_gr_champ.php");}

if ($action=="generer") {include("generer_gr.php");}

?>
