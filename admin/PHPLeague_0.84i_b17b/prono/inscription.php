<?php

if (!$go == 1)
{

?>

<form method="post" action="?page=inscription" id="inscription">
	<table class="Large100P">
		<thead>
			<tr>
				<th colspan="2"><?php echo FormatText(PRONO_INSCRIPTION_TITRE); ?></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><label for="pseudo"><?php echo FormatText(PRONO_CLASSEMENT_PSEUDO); ?></label></td>
				<td><input type="text" name="pseudo" id="pseudo" size="30" maxlength="20" /></td>
			</tr>
			<tr>
				<td><label for="mail"><?php echo FormatText(PRONO_PROFIL_MAIL); ?></label></td>
				<td><input type="text" name="mail" id="mail" size="30" maxlength="40" /></td>
			</tr>
			<tr>
				<td><label for="mdp"><?php echo FormatText(PRONO_MENU_MDP); ?></label></td>
				<td><input type="password" name="mdp" id="mdp" size="30" maxlength="20" /></td>
			</tr>
			<tr>
				<td><label for="mdp2"><?php echo FormatText(PRONO_INSCRIPTION_MDP); ?></label></td>
				<td><input type="password" name="mdp2" id="mdp2" size="30" maxlength="20" /></td>
			</tr>
		</tbody>
		<tfoot>
			<tr>
				<td>&nbsp;</td>
				<td>
					<input type="hidden" name="go" id="go" value="1" />
					<input type="submit" value="<?php echo FormatText(ENVOI); ?>" />
				</td>
			</tr>
		</tfoot>
	</table>
</form>

<?php

}
elseif ($go == 1)
{
	$pseudo = addslashes($pseudo);

	// On vérifie que le pseudo n'est pas utilisé
	$requete   = "SELECT * FROM phpl_membres where pseudo='$pseudo'";
	$resultat  = mysql_query($requete);
	$nb_pseudo = mysql_num_rows($resultat);

	if ($nb_pseudo >= 1)
	{
		$message.= '<tr><td>&bull; '.FormatText(PRONO_INSCRIPTION_PSEUDO_UTILISE).'</td><tr>'."\n";
	}
	elseif (strlen($pseudo) < 4 OR strlen($pseudo) > 20)
	{
		$message.= '<tr><td>&bull; '.FormatText(PRONO_INSCRIPTION_PSEUDO_TAILLE).'</td><tr>'."\n";
	}
	else
	{
		$pseudo_verif = 'ok';
	}

	// On vérifie que le mail
	$requete  = "SELECT * FROM phpl_membres where mail='$mail'";
	$resultat = mysql_query($requete);
	$nb_mail  = mysql_num_rows($resultat);

	if ($nb_mail >= 1)
	{
		$message.= '<tr><td>&bull; '.FormatText(PRONO_INSCRIPTION_MAIL_UTILISE).'</td><tr>'."\n";
	}
	else
	{
		$mail_verif = 'ok';
	}

	if (empty($mail))
	{
		$message.= '<tr><td>&bull; '.FormatText(PRONO_INSCRIPTION_MAIL_VIDE).'</td><tr>'."\n";
	}
	else
	{
		$mail_ok = eregi("^[_\.0-9a-z-]+@([0-9a-z-]+\.)+[a-z]{2,4}$", $mail);

		if (!$mail_ok)
		{
			$message.= '<tr><td>&bull; '.FormatText(PRONO_INSCRIPTION_MAIL_INVALIDE_1.' '.$mail.' '.PRONO_INSCRIPTION_MAIL_INVALIDE_2).'</td><tr>'."\n";
		}
		else
		{
			$email_verif = 'ok';
		}
	}

	if (empty($mdp) OR empty($mdp2))
	{
		$message.= '<tr><td>&bull; '.FormatText(PRONO_INSCRIPTION_JS_MDP).'</td><tr>'."\n";
	}
	elseif ($mdp !== $mdp2)
	{
		$message.= '<tr><td>&bull; '.FormatText(PRONO_INSCRIPTION_JS_DIFF).'</td><tr>'."\n";
	}
	elseif (strlen($mdp) < 4 OR strlen($mdp) > 20)
	{
		$message.= '<tr><td>&bull; '.FormatText(PRONO_INSCRIPTION_PSEUDO_TAILLE).'</td><tr>'."\n";
	}
	else
	{
		$mdp_verif = 'ok';
	}

	if ($email_verif == 'ok' AND $pseudo_verif == 'ok' AND $mdp_verif == 'ok' AND $mail_verif == 'ok')
	{
		$taille  = 19;
		$lettres = 'abcdefghijklmnopqrstuvwxyz0123456789';

		srand(time());

		for ($i=0; $i<$taille; $i++)
		{
			$id_prono.= substr($lettres, (rand()%(strlen($lettres))), 1);
		}

		$mdpcrypt = md5($mdp);

		$date_naissance = $annee.'-'.$mois.'-'.$jour;
		$adresse        = $adresse1.' '.$adresse2;

		if (!empty($mobile1) AND !empty($mobile2) AND !empty($mobile3) AND !empty($mobile4) AND !empty($mobile5))
		{
			$mobile = $mobile1.'-'.$mobile2.'-'.$mobile3.'-'.$mobile4.'-'.$mobile5;
		}

		mysql_query("INSERT INTO phpl_membres (pseudo, id_prono, mot_de_passe, mail, nom_site, nom, prenom, adresse, code_postal, ville, pays, date_naissance, profession, mobile )
               VALUES ('$pseudo', '$id_prono', '$mdpcrypt', '$mail', '$site', '$nom', '$prenom', '$adresse', '$code_postal', '$ville', '$pays', '$date_naissance', '$profession', '$mobile' )") or die ("probleme " .mysql_error());

		$requete   = "SELECT id FROM phpl_membres WHERE id_prono='$id_prono'";
		$result    = mysql_query($requete);
		$row       = mysql_fetch_array($result);
		$id_membre = $row[0];

		mysql_query("INSERT INTO phpl_pronostics (id_membre, id_champ) VALUES ('$id_membre', '$gr_champ')");

		$requete        = "SELECT pseudo, mail, nom_site, url_site FROM phpl_membres WHERE admin='1'";
		$result         = mysql_query($requete);
		$row            = mysql_fetch_array($result);
		$pseudo_admin   = $row[0];
		$mail_admin     = $row[1];
		$nom_site_admin = $row[2];
		$url_site_admin = $row[3];  

		$headers = 'From: '.$nom_site_admin.' <'.$mail_admin.'>'."\r\n";
		$headers.= 'Reply-To: '.$nom_site_admin.' <'.$mail_admin.'>'."\r\n";
		$headers.= 'MIME-Version: 1.0'."\r\n";
		$headers.= 'Content-Type: text/html; charset="iso-8859-1"'."\r\n";
		$headers.= 'Content-Transfer-Encoding: 8bit'."\r\n";
		$headers.= 'X-Priority: 1'."\r\n";
		$to      = $pseudo.' <'.$mail.'>';
		$sujet   = "Inscription aux pronostics sur $nom_site_admin";
		$message = "<html>

<head>
<title>Phpleague</title>
</head>

<body>
<p>Bonjour et bienvenue au concours de pronostics.</p>
<p>Vous venez de vous inscrire au jeu concours de pronostics du site <a href=\"$url_site_admin\">$nom_site_admin</a>.</p>
<p>Voici les informations qui vous permettront d'accéder à votre compte :</p>
<p>Pseudo : $pseudo<br />Mot de passe : $mdp</p>
<p><strong><u>Attention</u><br />Votre mot de passe est crypté dans notre base de donnée il est donc inutile de nous le réclamer en cas de perte.</strong></p>
<p>Bonne chance !</p>
<p>$pseudo_admin</p>
<hr />
<p>Ce script a été créé par <a href=\"http://www.multiastuces.com\">PHPLeague</a> &bull; Gestionnaire de championnats sportifs et de pronostics.</p>

</body>

</html>";

		$email = @mail($to, $sujet, $message, $headers);

		if ($email)
		{
			echo '			<p class="TxtCenter">'.FormatText(PRONO_INSCRIPTION_SUCCES).'</p>
			<p class="TxtCenter"><a href="">'.FormatText(PRONO_INSCRIPTION_CONNEXION).'</a></p>'."\n\n";
		}
		else 
		{
			echo '			<p class="TxtCenter">'.FormatText(PRONO_INSCRIPTION_ECHOUE).'</p>
			<p class="TxtCenter"><a href="index.php">'.FormatText('Connexion !').'</a></p>'."\n\n";
		}
	}
	else
	{
		echo '<table class="Large100P">
	<thead>
		<tr>
			<th>Information</th>
		</tr>
	</thead>
	<tbody>
		'.$message.'
	</tbody>
	<tfoot>
		<tr>
			<td><a href="javascript:history.back(1)">'.FormatText(RETOUR).'</a></td>
		</tr>
	</tfoot>
</table>'."\n\n";
	}
}

?>