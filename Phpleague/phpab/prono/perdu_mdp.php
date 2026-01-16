<?php
//***********************************************************************/
// phpabeague : gestionnaire de championnat                              */
// ============================================                         */
//                                                                      */
// Version : 0.82                                                       */
// Copyright (c) 2004    Alexis MANGIN                                  */
// http://phpabeague.univert.org                                         */
//                                                                      */
// This program is free software. You can redistribute it and/or modify */
// it under the terms of the GNU General Public License as published by */
// the Free Software Foundation; either version 2 of the License.       */
//                                                                      */
//***********************************************************************/
// Support technique : http://phpabeague.univert.org/forum               */
//                                                                      */
//***********************************************************************/

if(empty($mail)){include ("perdu_mdp.htm");}
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

mysqli_query($idconnect, ("UPDATE phpab_membres 
						  SET mot_de_passe='$new_mot_de_passe_crypt' 
						  WHERE mail='$mail'"));

$result1 =$idconnect->query("	SELECT pseudo, mail 
							FROM phpab_membres 
							WHERE mail='$mail'");
 $row=mysqli_fetch_array($result1);
$pseudo= $row[0];



$result =$idconnect->query("SELECT pseudo, mail, nom_site, url_site 
							FROM phpab_membres 
							WHERE admin = '1'");
							
  $row=mysqli_fetch_array($result);
  $pseudo_admin=$row[0];
  $mail_admin=$row[1];
  $nom_site_admin=$row[2];
  $url_site_admin=$row[3];


//if (list($pseudo, $mail) = mysqli_fetch_array($query))
//{                                                                                            
$to="$pseudo <$mail>";
$sujet="Votre mot de passe pour les pronostics de $pseudo";
$message="<html><head><title>phpabeague</title></head><body>
<p><font face=\"Verdana\" size=\"3\">Bonjour,</font></p>
<p><font face=\"Verdana\" size=\"3\">Vous avez demandé à recevoir un nouveau mot
de passe pour acceder aux pronostics du site France Finales Rugby</p>
<p><font face=\"Verdana\" size=\"3\">Votre pseudo : $pseudo</font></p>
<p><font face=\"Verdana\" size=\"3\">Voici votre nouveau mot de passe : $new_mot_de_passe</font></p>
<p><font face=\"Verdana\" size=\"3\">Retour à la page de connexion : <a href=\"https://francefinalesrugby.fr/Test/phpab/prono/index.php\">En cliquant ici</a></font></p>
<P>Sportivement.</p>
<P>L'équipe France finales Rugby</p>
<p><font face=\"Verdana\" size=\"3\">--------------------------------------------------------------------</font></p>

<p><font face=\"Verdana\" size=\"3\">Ce script a été créé par <a href=\"https://francefinalesrugby.fr\">France Finales Rugby.</a> <br> Site dédié aux compétitons du rugby Francais</font></p>
</body>
</html>";
$from="Content-Type: text/html; charset=\"utf-8\"\nFrom: $mail_admin\n";
$email=mail($to,$sujet,$message,$from);
if($email)echo"<div align=\"center\"><font face=\"Verdana\" color=\"#FFFFFF\" size=\"3\">".PRONO_OUBLIE_TEXTE_2." :<br /><br /><b>$mail</b><br /><br />Vous allez le recevoir dans un instant.</font></div>";
else echo"<div align=\"center\"><font face=\"Verdana\"  color=\"#FFFFFF\" size=\"3\">".PRONO_OUBLIE_TEXTE_3."</font></div><br />";
////}
}
?>
