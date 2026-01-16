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

if(empty($mail)){include ("perdu_mdp.htm");;}
elseif (!empty($mail))
{
$taille = 8;
        $lettres = "abcdefghijklmnopqrstuvwxyz0123456789";
	srand(time());
	for ($i=0;$i<$taille;$i++)
	{
	$new_mot_de_passe.=substr($lettres,(rand()%(strlen($lettres))),1);
	}
$new_mot_de_passe_crypt=md5($new_mot_de_passe);

mysqli_query($idconnect, ("UPDATE phpfed3NE_membres SET mot_de_passe='$new_mot_de_passe_crypt' WHERE mail='$mail'"));

$query =$idconnect->query("	SELECT pseudo, mail 
							FROM phpfed3NE_membres 
							WHERE mail='$mail'");

$result =$idconnect->query("SELECT pseudo, mail, nom_site, url_site 
							FROM phpfed3NE_membres 
							WHERE admin='1'");
							
 // $result=mysql_query($requete) or die ("probleme " .mysql_error());
  $row=mysqli_fetch_array($result);
  $pseudo_admin=$row[0];
  $mail_admin=$row[1];
  $nom_site_admin=$row[2];
  $url_site_admin=$row[3];
if (list($pseudo, $mail) = mysqli_fetch_array($query))
{                                                                                            
$to="$pseudo <$mail>";
$sujet="Votre mot de passe pour les pronostics de $nom_site_admin";
$message="<html>
<head>
<title>phpfed3NEeague</title>
</head>
<body>
<p><font face=\"Verdana\" size=\"2\">Bonjour,</font></p>
<p><font face=\"Verdana\" size=\"2\">Vous avez demandé à recevoir un nouveau mot
de passe pour accéder aux pronostics du site <a href=\"$url_site_admin\">$nom_site_admin</a>.</font></p>
<p><font face=\"Verdana\" size=\"2\">Votre pseudo : $pseudo</font></p>
<p><font face=\"Verdana\" size=\"2\">Voici votre nouveau mot de passe : $new_mot_de_passe</font></p>
<p><font face=\"Verdana\" size=\"2\">--------------------------------------------------------------------</font></p>
<p><font face=\"Verdana\" size=\"2\">Ce script a été créé par <a href=\"http://phpfed3NEeague.univert.org\">phpfed3NEeague</a> : Gestionnaire de championnats sportifs et de pronostics !</font></p>
</body>
</html>";
  $from="Content-Type: text/html; charset=\"iso-8859-15\"\nFrom: $mail_admin\n";
$email=mail($to,$sujet,$message,$from);
if($email)echo"<div align=\"center\"><font face=\"Verdana\" size=\"1\">".PRONO_OUBLIE_TEXTE_2." :<br /><br /><b>$mail</b><br /><br />Vous allez le recevoir dans un instant.</font></div>";
else echo"<div align=\"center\"><font face=\"Verdana\" size=\"1\">".PRONO_OUBLIE_TEXTE_3."</font></div><br />";
}
}
?>
