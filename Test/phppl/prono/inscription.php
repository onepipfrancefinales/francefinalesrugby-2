<?php
session_start();
if (isset($_GET['champ'])) $champ = $_GET['champ'];else $champ = 0;
if (isset($_REQUEST['champLigue'])) $champLigue = $_REQUEST['champLigue'];else $champLigue = 0;


if (isset($_POST['pseudo'])) $testpseudo = $_POST['pseudo'];
if (isset($_POST['mail'])) $testmail = $_POST['mail'];
if (isset($_POST['mdp'])) $testmdp = $_POST['mdp'];
if (isset($_POST['nom'])) $EquipeSuivi = $_POST['nom'];
/*
echo "<br>";
echo "champLigue : ".$champLigue; echo "<br>";
echo "pseudo : ".$pseudo; echo "<br>";
echo "EquipeSuivi : ".$EquipeSuivi; echo "<br>";
*/
/*
$tabTables = array('phpau', 'phpab', 'phpca', 'phppl', 'phpidf', 'phpfed3NE', 'phppro');					   
foreach ($tabTables as $table) {
  //phppl_pronostics

  $tableMembres = $table . "_membres";

}
*/
if (!$go == "1") {
  include("inscription.htm");
} elseif ($go == "1") {
  $pseudo = addslashes($pseudo);
 $EquipeSuivi = addslashes($EquipeSuivi);
  // On vérifie que le pseudo n'est pas utilisé
  $resultat = $idconnect->query("SELECT * 
                                 FROM phppl_membres 
                                 WHERE pseudo='$pseudo'");
                                 
  //$resultat=mysql_query($requete);
  $nb_pseudo = mysqli_num_rows($resultat);
  if ($nb_pseudo >= 1) {
    $message .= PRONO_INSCRIPTION_PSEUDO_UTILISE . "<br />";
  } elseif (strlen($pseudo) < 4 or strlen($pseudo) > 20) {
    $message .= PRONO_INSCRIPTION_PSEUDO_TAILLE . "<br />";
  } else {
    $pseudo_verif = "ok";
  }

  // On vérifie que le mail
  $resultat = $idconnect->query("
					SELECT * 
					FROM phppl_membres 
					WHERE mail='$mail'");


  $nb_mail = mysqli_num_rows($resultat);
  if ($nb_mail >= 1) {
    $message .= PRONO_INSCRIPTION_MAIL_UTILISE . "<br />";
  } else {
    $mail_verif = "ok";
  }

  if (empty($mail)) {
    $message .= PRONO_INSCRIPTION_MAIL_VIDE . "\n<br />\n";
  } else //l'email a ete entree, on la verifie
  {
    //verification de la syntaxe
    $mail_ok = preg_match(" /^[^\W][a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$/ ", $mail);


    if (!$mail_ok) {
      $message .= PRONO_INSCRIPTION_MAIL_INVALIDE_1 . " \"$mail\ " . PRONO_INSCRIPTION_MAIL_INVALIDE_2 . "\n<br />\n";
    } else {
      $email_verif = "ok";
    }
  }

  if (empty($mdp) or empty($mdp2)) {
    $message .= PRONO_INSCRIPTION_JS_MDP . "\n<br />\n";
  } elseif ($mdp !== $mdp2) {
    $message .= PRONO_INSCRIPTION_JS_DIFF . "\n<br />\n";
  } elseif (strlen($mdp) < 4 or strlen($mdp) > 20) {
    $message .= PRONO_INSCRIPTION_PSEUDO_TAILLE . "<br />";
  } else {
    $mdp_verif = "ok";
  }



  if ($email_verif == "ok" and $pseudo_verif == "ok" and $mdp_verif == "ok" and $mail_verif == "ok") {
    $taille = 19;
    $lettres = "abcdefghijklmnopqrstuvwxyz0123456789";
    srand(time());
    for ($i = 0; $i < $taille; $i++) {
      $id_prono .= substr($lettres, (rand() % (strlen($lettres))), 1);
    }

    $mdpcrypt = md5($mdp);


    $date_naissance = $annee . "-" . $mois . "-" . $jour;
    $adresse = $adresse1 . " " . $adresse2;
    if (!empty($mobile1) and !empty($mobile2) and !empty($mobile3) and !empty($mobile4) and !empty($mobile5)) {
      $mobile = $mobile1 . "-" . $mobile2 . "-" . $mobile3 . "-" . $mobile4 . "-" . $mobile5;
    }

    //mysqli_query($idconnect, ("INSERT INTO phppl_membres (pseudo, id_prono, mot_de_passe, mail, nom_site, nom, prenom, adresse, code_postal, ville, pays, date_naissance, profession, mobile, ip, last_connect, admin )
    //             VALUES ('$pseudo', '$id_prono', '$mdpcrypt', '$mail', '$site', '$nom', '$prenom', '$adresse', '$code_postal', '$ville', '$mdp', '$date_naissance', '$profession', '$mobile','$ip','$last_connect','1' )"));

//$tabTables =        array('phpau', 'phpab', 'phpca', 'phppl', 'phpidf', 'phpfed3NE', 'phppro');
$tabTables = array('phpau', 'phpab', 'phpca', 'phpidf', 'phppl', 'phpfed3NE', 'phppro');		
foreach ($tabTables as $table) {
  //phppl_pronostics
  $tableMembres = $table . "_membres";
 
    mysqli_query($idconnect, ("INSERT INTO $tableMembres (pseudo, id_prono, mot_de_passe, mail, nom_site, nom, prenom, adresse, ville, pays, admin )
                             VALUES ('$pseudo', '$id_prono', '$mdpcrypt', '$mail', '$pseudo', '$nom', '$pseudo', '$pseudo',  '$EquipeSuivi', '$mdp','1' )"));

}
    $result = $idconnect->query("SELECT id 
                             FROM phppl_membres 
                             WHERE id_prono='$id_prono'");
    $row = mysqli_fetch_array($result);
    $id_membre = $row[0];

    mysqli_query($idconnect, ("INSERT INTO phppl_pronostics (id_membre, id_champ) 
							              VALUES ('$id_membre', '$gr_champ')"));

    $result = $idconnect->query("SELECT pseudo, mail, nom_site, url_site 
                               FROM phppl_membres 
                               WHERE pseudo='$pseudo' 
                               AND admin='1'");

    $row = mysqli_fetch_array($result);
    $pseudo_admin = $row[0];
    $mail_admin = $row[1];
    //  $nom_site_admin=$row[2];
    // $url_site_admin=$row[3];  



    $to = "$pseudo <$mail>";

    $sujet = "France Finales Rugby (Pronostics)";

    $message = "
    <html><head><title>Inscription à France Finales Prono</title></head><body>
<p><font size=\"3\" face=\"Verdana\" color=\"#000000\">Bonjour et bienvenue sur France Finales Rugby, </font></p>
<p><font size=\"3\" face=\"Verdana\" color=\"#000000\">Vous venez de vous inscrire aux jeux de pronostics dédiés aux compétitions de votre ligue.</font></p>
<p><font size=\"3\" face=\"Verdana\" color=\"#000000\">Voici les informations qui vous
permettront de vous connecter :</font></p>
<p><font face=\"Verdana\" size=\"3\" color=\"#000000\">Login :&nbsp;  $pseudo 
<br />
Mot de passe :  $mdp </font></p>

<p><font face=\"Verdana\" size=\"3\" color=\"#000000\">Vous pouvez également consulter stats, classements complets, calendriers, les différents palmarès,<br>
 historiques des saisons, etc...en consultant <a href=\"https://francefinalesrugby.fr\">France Finales Rugby</a> 
<br />
Sportivement</font></p>
<br />
<p><font face=\"Verdana\" size=\"3\" color=\"#000000\">France Finales Rugby<br>
80 Avenue du 11 novembre<br>
31230 L'Isle en Dodon<br>
</font></p>
<br />
<p><font face=\"Verdana\" size=\"2\" color=\"#000000\">Pour tous contatcts</font><br>
<font face=\"Verdana\" size=\"3\" color=\"#000000\"><a href=\"mailto:mailto:francefinalesrugby@free.fr\">francefinalesrugby@free.fr</a></font>
</body></html>";


    $from = "Content-Type: text/html; charset=\"utf-8\"\nFrom: $mail_admin\n";

    $email = @mail($to, $sujet, $message, $from);
    if ($email) {
      echo "<table align=\"center\">";
      echo "<tr><td colspan=\"2\" align=\"center\"> <font color=\"#ffffff\">" . PRONO_INSCRIPTION_SUCCES . "</font><br /><a class=\"colorWhite\" href=\"index.php?page=pronos&champLigue=$champLigue&user=$pseudo&mot_de_passe=$mdpcrypt\">" ."</font></a></td></tr>";
   // echo "<tr><td colspan=\"2\" align=\"center\"> <font color=\"#ffffff\">" . PRONO_INSCRIPTION_SUCCES . "</font><br /><a class=\"colorWhite\" href=\"index.php?page=pronos&champLigue=$champLigue&user=$pseudo&mot_de_passe=$mdpcrypt\">" . PRONO_INSCRIPTION_CONNEXION . "</font></a></td></tr>";
      echo "</table>";
    } else {
      echo "<table align=\"center\">";
      echo "<tr><td colspan=\"2\" align=\"center\"> <font color=\"#ffffff\">" . PRONO_INSCRIPTION_ECHOUE . "</font><br /><a href=\"/Test/phppl/prono/index.php?page=inscription\"><font color=\"#FFFFFF\">Connexion !</font></a></td></tr>";
      echo "</table>";
    }
  } else {
    echo "<table align=\"center\">";
    echo "<tr><td colspan=\"2\" align=\"center\"> <font color=\"#ffffff\">$message<br /><a href=\"/Test/phppl/prono/index.php?page=inscription&champ=$champ&champLigue=$champLigue\"></font></font>" . "Réessayer" . "</a></td></tr>";
    echo "</table>";
  }
}
