<?php
session_start();
echo "index.php : user -".$_SESSION['user']; echo "<br>";
echo "index.php : mot_de_passe -".$_SESSION['mot_de_passe'];

if (isset($_REQUEST['page'])) {$page=$_REQUEST['page'];} else {$page='';}
if (isset($_REQUEST['gr_champ'])) {$gr_champ=$_REQUEST['gr_champ'];} else {$gr_champ='';}
if (isset($_REQUEST['user_pseudo'])) {$user_pseudo=$_REQUEST['user_pseudo'];} else {$user_pseudo='';}
if (isset($_REQUEST['user_id'])) {$user_id=$_REQUEST['user_id'];} else {$user_id='';}
if (isset($_GET['mode'])) $mode = $_GET['mode'];else {$mode='';}
if ($mode == "smart")
{
  ?>
<table class="width98PC" border="1">
    <tr>
      <td class="h22 width5PC"><a href="/smart/sommaire.php"><img src="../../../images/smart/flecheGauche.jpg" width="27" height="20" alt="fléche retour"></a></td>
      <td class="h22 width95PC"> France Finales Rugby </td>
    </tr>
    <tr>
        <td colspan="2" class="h12">Ligues régionales <br> Concours de pronostiques</td>
    </tr>
</table>

<?php
}

  ?>

<p>&nbsp;</p>
<p>&nbsp;</p>

<?php 

echo "user_pseudo : ".$user_pseudo; echo "<br>";
echo "user_id : ".$user_id; echo "<br>";
echo "gr_champ : ".$gr_champ; echo "<br>";
echo "pageA : ".$page; echo "<br>";
echo "<br>";
include ("avant.php");

 ?>
<table width="100%" class="marginAuto borderNone">
  <tr> 
    <td colspan="2" class="center bold">
      <?php

   
include("haut.inc.php");
include("menu.inc.php");  // Affichage du menu identifié / non identifié
 //  echo "<h2>"."championnats ".$gr_champ_nom."<br>"."Pays de la Loire"."</h2>";

///if ($page == "profil") {
 // echo "<br>";
 // echo "<div class=\"size3 bold\">"."MON PROFIL"."</div>" ;
 //echo "<br>";
//}
?>


    </td>
  </tr> 

<?php
//if ($page == "baremes") { echo "<br>";echo "<br>";echo "<br>";echo "<br>";}
if ($page != "profil") {
  ?>
  <tr> 
    <td width="100%" class="center" > 
 
      <?php
     //   echo "<h2>"."championnats "; 
     //   nom_championnat ($gr_champ, $idconnect); 
     //   echo "<br>"."Pays de la Loire"."</h2>"; 
      //  include("pronos.inc.htm");?>
     </td>
    </tr>
      <?php } 
      
      ?>
 
      <tr> 
    <td width="100%" class="center background003366"  height="100%" > 
      <?php
if (isset($_REQUEST['action'])) {$action=$_REQUEST['action'];} else {$action='';}

if (isset($_POST['message'])) {$message=$_POST['message'];} else {$message='';}
if (isset($_POST['ancien_mdp'])) {$ancien_mdp=$_POST['ancien_mdp'];} else {$ancien_mdp='';}
if (isset($_POST['nouveau_mdp'])) {$nouveau_mdp=$_POST['nouveau_mdp'];} else {$nouveau_mdp='';}
if (isset($_POST['nouveau_mdp2'])) {$nouveau_mdp2=$_POST['nouveau_mdp2'];} else {$nouveau_mdp2='';}
if (isset($_POST['mail'])) {$mail=$_POST['mail'];} else {$mail='';}


//if (isset($_POST['annee'])) {$annee=$_POST['annee'];} else {$annee='';}
//if (isset($_POST['mois'])) {$mois=$_POST['mois'];} else {$mois='';}
//if (isset($_POST['jour'])) {$jour=$_POST['jour'];} else {$jour='';}
//if (isset($_POST['site'])) {$site=$_POST['site'];} else {$site='';}

//if (isset($_POST['nom'])) {$nom=$_POST['nom'];} else {$nom='';}
//if (isset($_POST['prenom'])) {$prenom=$_POST['prenom'];} else {$prenom='';}
//if (isset($_POST['adresse'])) {$adresse=$_POST['adresse'];} else {$adresse='';}
//if (isset($_POST['code_postal'])) {$code_postal=$_POST['code_postal'];} else {$code_postal='';}
//if (isset($_POST['ville'])) {$ville=$_POST['ville'];} else {$ville='';}
//if (isset($_POST['pays'])) {$pays=$_POST['pays'];} else {$pays='';}
//if (isset($_POST['profession'])) {$profession=$_POST['profession'];} else {$profession='';}
//if (isset($_POST['mobile'])) {$mobile=$_POST['mobile'];} else {$mobile='';}
if (isset($_REQUEST['confirm'])) {$confirm=$_REQUEST['confirm'];} else {$confirm='';}

// inscription

if (isset($_POST['go'])) {$go=$_POST['go'];} else {$go='';}
if (isset($_POST['mdp_verif'])) {$mdp_verif=$_POST['mdp_verif'];} else {$mdp_verif='';}
if (isset($_POST['pseudo'])) {$pseudo=$_POST['pseudo'];} else {$pseudo='';}
if (isset($_POST['email_verif'])) {$email_verif=$_POST['email_verif'];} else {$email_verif='';}
if (isset($_POST['pseudo_verif'])) {$pseudo_verif=$_POST['pseudo_verif'];} else {$pseudo_verif='';}
if (isset($_POST['mail_verif'])) {$mail_verif=$_POST['mail_verif'];} else {$mail_verif='';}
if (isset($_POST['mdp'])) {$mdp=$_POST['mdp'];} else {$mdp='';}
if (isset($_POST['mdp2'])) {$mdp2=$_POST['mdp2'];} else {$mdp2='';}
if (isset($_POST['id_prono'])) {$id_prono=$_POST['id_prono'];} else {$id_prono='';}


//if (isset($_POST['adresse1'])) {$adresse1=$_POST['adresse1'];} else {$adresse1='';}
//if (isset($_POST['adresse2'])) {$adresse2=$_POST['adresse2'];} else {$adresse2='';}

//Pronos

if (isset($_POST['f_prono_0'])) {$f_prono_0=$_POST['f_prono_0'];} else {$f_prono_0='';}
if (isset($_POST['f_prono_1'])) {$f_prono_1=$_POST['f_prono_1'];} else {$f_prono_1='';}
if (isset($_POST['f_prono_2'])) {$f_prono_2=$_POST['f_prono_2'];} else {$f_prono_2='';}
if (isset($_POST['f_prono_3'])) {$f_prono_3=$_POST['f_prono_3'];} else {$f_prono_3='';}
if (isset($_POST['f_prono_4'])) {$f_prono_4=$_POST['f_prono_4'];} else {$f_prono_4='';}
if (isset($_POST['f_prono_5'])) {$f_prono_5=$_POST['f_prono_5'];} else {$f_prono_5='';}
if (isset($_POST['f_prono_6'])) {$f_prono_6=$_POST['f_prono_6'];} else {$f_prono_6='';}
if (isset($_POST['f_prono_7'])) {$f_prono_7=$_POST['f_prono_7'];} else {$f_prono_7='';}
if (isset($_POST['f_prono_8'])) {$f_prono_8=$_POST['f_prono_8'];} else {$f_prono_8='';}
if (isset($_POST['f_prono_9'])) {$f_prono_9=$_POST['f_prono_9'];} else {$f_prono_9='';}
if (isset($_POST['id_match_0'])) {$id_match_0=$_POST['id_match_0'];} else {$id_match_0='';}
if (isset($_POST['id_match_1'])) {$id_match_1=$_POST['id_match_1'];} else {$id_match_1='';}
if (isset($_POST['id_match_2'])) {$id_match_2=$_POST['id_match_2'];} else {$id_match_2='';}
if (isset($_POST['id_match_3'])) {$id_match_3=$_POST['id_match_3'];} else {$id_match_3='';}
if (isset($_POST['id_match_4'])) {$id_match_4=$_POST['id_match_4'];} else {$id_match_4='';}
if (isset($_POST['id_match_5'])) {$id_match_5=$_POST['id_match_5'];} else {$id_match_5='';}
if (isset($_POST['id_match_6'])) {$id_match_6=$_POST['id_match_6'];} else {$id_match_6='';}
if (isset($_POST['id_match_7'])) {$id_match_7=$_POST['id_match_7'];} else {$id_match_7='';}
if (isset($_POST['id_match_8'])) {$id_match_8=$_POST['id_match_8'];} else {$id_match_8='';}
if (isset($_POST['id_match_9'])) {$id_match_9=$_POST['id_match_9'];} else {$id_match_9='';}

// Classements
if (isset($_GET['type'])) {$type=$_GET['type'];} else {$type='';}

//Perdu mdp
if (isset($_POST['new_mot_de_passe'])) {$new_mot_de_passe=$_POST['new_mot_de_passe'];} else {$new_mot_de_passe='';}

/*
if (!isset($_GET['page'])) {
  include ("accueil.htm");}
else{$page= $_GET['page'];
*/
if (isset($_GET['page'])) $page= $_GET['page'];else $page = "erreur_login";


if ($page=="pronos" and $connecte=="oui") {include ("pronos1.php");}
elseif ($page=="derniers_pronos" and $connecte=="oui") {include ("derniers_pronos.php");}
elseif ($page=="profil" and $connecte=="oui") {include ("profil.php");}
elseif ($page=="mes_resultats" and $connecte=="oui") {include ("mes_resultats.php");}
elseif ($page=="baremes" and $connecte=="oui") {include ("baremes.php");}
elseif ($page=="classement") {include ("classement.htm");}
elseif ($page=="inscription") {include ("inscription.php");}
elseif ($page=="erreur_login") {include ("erreur_login.php");}
elseif ($page=="perdu_mdp") {include ("perdu_mdp.php");}
else {include ("accueil.htm");}

      
?>
    </td>
  </tr>
  <tr> 
    <td width="100%" colspan="2"> 
      <?php


//include("../bas.inc.php");
?>
    </td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
 

<?php

if ($mode == "smart")
{
require '../../../smart/smartFooter.php';
}

  ?>