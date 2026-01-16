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
?>
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Language" content="fr">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="GENERATOR" content="Microsoft FrontPage 4.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<title>Ligue Bourgogne France Comté - Administration</title>
<link rel="stylesheet" type="text/css" href="style.css">

</head>

<body topmargin="0" leftmargin="0" class="phppro">

<?php
require ("../config.php") ;
require ("fonctions.php");
ouverture ();
if (isset($_GET['ligue'])) $ligue = $_GET['ligue']; else $ligue ="AAAA";
if (isset($_GET['champ'])) $codeLigue = $_GET['champ']; else $codeLigue ="AAAA";
?>

<div align="center">
  <center>
  <table cellspacing="0" width="100%" height="100%" cellpadding="0">
    <tr>
      <td colspan="1" align="center" height="100"  bgcolor="#C0C0C0"></td>
        <td colspan="1" background="haut.gif" valign="middle" align="center" style="border-bottom-style: dashed;border-bottom-width : 1px; border-color:#3b487f">
          <font class="phppro">Ligue 


      <?php 
		 switch ($codeLigue or $ligue){

      case ($codeLigue >= 100000 and $codeLigue < 110000):
			echo  "Auvergne Rhône Alpes - Administration";
      $ligue = 100000;
			break;
					
			case (($codeLigue >= 110000 and $codeLigue < 120000) or ($ligue >= 110000 and $ligue < 120000)):
			echo  "Bourgogne Franche Comté - Administration";
      $ligue = 110000;
			break;

			  case (($codeLigue >= 120000 and $codeLigue < 130000) or ($ligue >= 120000 and $ligue < 130000)):
			echo  "Bretagne - Administration";
      $ligue = 120000;
			break;
			
			  case (($codeLigue >= 130000 and $codeLigue < 140000) or ($ligue >= 130000 and $ligue < 140000)):
			echo  "Centre Val de Loire - Administration";
      $ligue = 130000;
			break;

      case ($codeLigue >= 140000 and $codeLigue < 150000):
			echo  "Corse - Administration";
      $ligue = 140000;
			break;

      case ($codeLigue >= 150000 and $codeLigue < 160000):
			echo  "Grand Est - Administration";
      $ligue = 150000;
			break;

        case (($codeLigue >= 160000 and $codeLigue < 170000) or ($ligue >= 160000 and $ligue < 170000)):
			echo  "Haut de France - Administration";
      $ligue = 160000;
			break;

			case ($codeLigue >= 170000 and $codeLigue < 180000):
			echo "Ile de France - Administration";
      $ligue = 170000;
			break;

      case ($codeLigue >= 180000 and $codeLigue < 190000):
			echo  "Normandie - Administration";
      $ligue = 180000;
			break;

      case ($codeLigue >= 190000 and $codeLigue < 200000):
			echo  "Nouvelle Aquitaine - Administration";
      $ligue = 190000;
			break;

      case ($codeLigue >= 200000 and $codeLigue < 210000):
			echo  "Occitanie - Administration";
      $ligue = 200000;
			break;

      case (($codeLigue >= 210000 and $codeLigue < 220000) or ($ligue >= 210000 and $ligue < 220000)):
			echo  "Pays de la Loire - Administration";
      $ligue = 210000;
			break;

      case ($codeLigue >= 220000 and $codeLigue < 230000):
      echo "Provence Alpes Côte d'Azur - Administration";
      $ligue = 220000;
      break;
     
      case ($codeLigue >= 880000 and $codeLigue < 890000):
      echo "Compétitions Féminines - Administration";
      $ligue = 880280;
      break;

        case ($codeLigue >= 990110 and $codeLigue < 990140):
      echo "Compétitions Pro - Administration";
      $ligue =990110;
      break;

       case ($codeLigue >= 990140 and $codeLigue < 990150 OR $codeLigue >= 990240 and $codeLigue < 990250):
      echo "Compétitions Fédérale 1 - Administration";
      $ligue = 990140;
      break;

       case ($codeLigue >= 990150 and $codeLigue < 990160 OR $codeLigue >= 990250 and $codeLigue < 990260):
      echo "Compétitions Fédérale 2 - Administration";
      $ligue = 990150;
      break;
	
		 }
     /*
     switch ($ligue){

      case ($ligue >= 100000 and $ligue < 110000):
			echo  "Auvergne Rhône Alpes - Administration";
      $ligue = 100000;
			break;
					
			case ($ligue >= 110000 and $ligue < 120000):
			echo  "Bourgogne Franche Comté - Administration";
      $ligue = 110000;
			break;

			case ($ligue >= 120000 and $ligue < 130000):
			echo  "Bretagne - Administration";
      $ligue = 120000;
			break;
			
			case ($ligue >= 130000 and $ligue < 140000):
			echo  "Centre Val de Loire - Administration";
      $ligue = 130000;
			break;

      case ($ligue >= 140000 and $ligue < 150000):
			echo  "Corse - Administration";
      $ligue = 140000;
			break;

      case ($ligue >= 150000 and $ligue < 160000):
			echo  "Grand Est - Administration";
      $ligue = 150000;
			break;

      case ($ligue >= 160000 and $ligue < 170000):
			echo  "Haut de France - Administration";
      $ligue = 160000;
			break;

			case ($ligue >= 170000 and $ligue < 180000):
			echo "Ile de France - Administration";
      $ligue = 170000;
			break;

      case ($ligue >= 180000 and $ligue < 190000):
			echo  "Normandie - Administration";
      $ligue = 180000;
			break;

      case ($ligue >= 190000 and $ligue < 200000):
			echo  "Nouvelle Aquitaine - Administration";
      $ligue = 190000;
			break;

      case ($ligue >= 200000 and $ligue < 210000):
			echo  "Occitanie - Administration";
      $ligue = 200000;
			break;

      case ($ligue >= 210000 and $ligue < 220000):
			echo  "Pays de la Loire - Administration";
      $ligue = 210000;
			break;

      case ($ligue >= 220000 and $ligue < 230000):
      echo "Provence Alpes Côte d'Azur - Administration";
      $ligue = 220000;
      break;
	
		 }
      */
		//$ligue = substr($codeLigue,0,2);
		?>  

        </font></td>
      <td bgcolor="#C0C0C0" style="border-bottom-style: dashed;border-bottom-width : 1px; border-color:#3b487f"></td>
    </tr>
    <tr>
      <td class="phppro3" width="12%" valign="top" style="border-right-style: dashed;border-right-width : 1px; border-color:#3b487f">
      <a href="?page=championnat&action=resultats&champ=<?php echo $ligue; ?>&ligue=<?php echo $ligue; ?>"><?php echo LEAGUE; ?></a><br /><br />
      <a href="?page=groupes_championnats&ligue=<?php echo $ligue; ?>&champ=<?php echo $codeLigue; ?>"><?php echo "Groupes championnats"; ?></a><br /><br />
      <a href="?page=fiches_clubs"><?php echo MENU_FICHES_CLUBS; ?></a><br /><br />
      <a href="?page=mini_classement"><?php echo ADMIN_MINI_1; ?></a><br /><br />
      <a href="?page=membres"><?php echo MENU_MEMBRES; ?></a><br /><br />
     <!--  <a href="?page=credits"><?php echo MENU_CREDITS; ?></a><br /><br /> -->
      <a href="logout.php"><?php echo "Logout"; ?></a><br />
      </td>
      <td valign="top" colspan="2"><div align="center">

     <?php
     if (isset($_COOKIE['user'])) {$user_pseudo=$_COOKIE['user'];} else {$user_pseudo='';}
     if (isset($_COOKIE['mot_de_passe'])) {$user_mdp=$_COOKIE['mot_de_passe'];} else {$user_mdp='';}
     if (isset($_GET['identification'])) {$identification=$_GET['identification'];} else {$identification='';}
     if (isset($_POST['action'])) {$action=$_POST['action'];} else {$action='';}
     if (isset($_GET['action'])) {$action=$_GET['action'];} else {$action='';}
     if (isset($_REQUEST['actionc'])) {$actionc=$_REQUEST['actionc'];} else {$actionc='';}
     if (isset($_REQUEST['go'])) {$go=$_REQUEST['go'];} else {$go='';}
     if (isset($_REQUEST['ga'])) {$ga=$_REQUEST['ga'];} else {$ga='';}
     if (isset($_REQUEST['id'])) {$id=$_REQUEST['id'];} else {$id='';}
     if (isset($_GET['page'])) {$page=$_GET['page'];} else {$page='';}


     if (isset($_GET['page'])){$page=$_GET['page'];}
     else {$page="accueil";}

/*pas de verif du mdp et user php7*/
   if (VerifSession ($user_pseudo,$user_mdp, $idconnect)=="1" or VerifSession ($user_pseudo,$user_mdp, $idconnect)=="0")
                {
       if ($page=="championnat") {include ("championnat.php");}
       elseif ($page=="groupes_championnats") {include ("groupes_championnats.php");}
       elseif ($page=="mini_classement") {include ("mini_classement.php");}
       elseif ($page=="fiches_clubs") {include ("fiches_clubs.php");}
       elseif ($page=="membres") {include ("membres.php");}
       elseif ($page=="credits") {include ("credits.htm");}
       elseif ($page=="accueil") {include ("accueil.htm");}
       else {include ("accueil.htm");}
                }
       elseif ($identification == "non") {echo "Veuillez renseigner tous les champs !";}
       elseif ($identification == "non2") {echo "Identifiants erron�s !";}
    
       else {echo "<br /><br /><br /><br />";include ("menu.non-identifie.htm");}
     
     ?>
      </div></td>
      <td  width="1%" style="border-left-style: dashed;border-left-width : 1px; border-color:#3b487f">&nbsp;</td>
    </tr>
    <tr>
    <td bgcolor="C0C0C0"></td>
      <td width="100%" colspan="2" height="10" style="border-top-style: dashed;border-top-width : 1px; border-color:#3b487f">&nbsp;</td>
      <td></td>
    </tr>
    <tr>
      <td class="phppro" height="10" colspan="1"><img border="0" src="bouton.gif" width="111" height="25">
        </td>
      <td class="phppro" colspan="3" width="70%" height="10" colspan="2" align="right">
        </td>
    </tr>
  </table>
  </center>
</div>

</body>

</html>
