<?php

if (empty($mail))
{

?>

	<form method="post" action="?page=perdu_mdp">
		<table class="Large100P">
			<thead>
				<tr>
					<th><?php echo FormatText(PRONO_OUBLIE_PERDU); ?></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>
						<?php echo FormatText(PRONO_OUBLIE_TEXTE_1); ?><br />
						<input type="text" name="mail" size="30" maxlength="40" />
						<input type="submit" name="submit" value="<?php echo FormatText(ENVOI); ?>" />
					</td>
			</tbody>
		</table>
	</form>

<?php

}
elseif (!empty($mail))
{
	$taille  = 8;
	$lettres = 'abcdefghijklmnopqrstuvwxyz0123456789';

	srand(time());

	for ($i=0; $i<$taille; $i++)
	{
		$new_mot_de_passe.= substr($lettres, (rand()%(strlen($lettres))), 1);
	}

	$new_mot_de_passe_crypt = md5($new_mot_de_passe);

	mysql_query("UPDATE phpl_membres SET mot_de_passe='$new_mot_de_passe_crypt' WHERE mail='$mail'");

	$query   = mysql_query("SELECT pseudo, mail FROM phpl_membres WHERE mail='$mail'");
	$requete = "SELECT pseudo, mail, nom_site, url_site FROM phpl_membres WHERE admin='1'";
	$result  = mysql_query($requete);
	$row     = mysql_fetch_array($result);

	$pseudo_admin   = $row[0];
	$mail_admin     = $row[1];
	$nom_site_admin = $row[2];
	$url_site_admin = $row[3];

	if (list($pseudo, $mail) = mysql_fetch_array($query))
	{                                                                                            
		$to      = "$pseudo <$mail>";
		$sujet   = "Votre mot de passe pour les pronostics de $nom_site_admin";
		$message = "<html>
<head>
<title>Phpleague</title>
</head>
<body>
<p><font face=\"Verdana\" size=\"2\">Bonjour,</font></p>
<p><font face=\"Verdana\" size=\"2\">Vous avez demandé à recevoir un nouveau mot
de passe pour accéder aux pronostics du site <a href=\"$url_site_admin\">$nom_site_admin</a>.</font></p>
<p><font face=\"Verdana\" size=\"2\">Votre pseudo : $pseudo</font></p>
<p><font face=\"Verdana\" size=\"2\">Voici votre nouveau mot de passe : $new_mot_de_passe</font></p>
<p><font face=\"Verdana\" size=\"2\">--------------------------------------------------------------------</font></p>
<p><font face=\"Verdana\" size=\"2\">Ce script a été créé par <a href=\"http://www.multiastuces.com\">Phpleague</a> : Gestionnaire de championnats sportifs et de pronostics !</font></p>
</body>
</html>";

		$from  = "Content-Type: text/html; charset=\"iso-8859-15\"\nFrom: $mail_admin\n";
		$email = mail($to, $sujet, $message, $from);

		if ($email)
		{
			echo "<div align=\"center\"><font face=\"Verdana\" size=\"1\">".PRONO_OUBLIE_TEXTE_2." :<br /><br /><b>$mail</b><br /><br />Vous allez le recevoir dans un instant.</font></div>";
		}
		else
		{
			echo "<div align=\"center\"><font face=\"Verdana\" size=\"1\">".PRONO_OUBLIE_TEXTE_3."</font></div><br />";
		}
	}
}

?>