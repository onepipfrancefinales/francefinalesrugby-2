<?php

if (VerifSession($user_pseudo, $user_mdp) == 1)
{
	if ($action == 'supp' AND !$confirm == 'oui')
	{
		echo '	<p class="TxtCenter">'.FormatText(PRONO_PROFIL_SUR).' <b>'.$user_pseudo.'</b>.</p>
	<p class="TxtCenter">[ <a href="index.php?page=profil&amp;action=supp&amp;confirm=oui">'.FormatText(ADMIN_RENS_17).'</a> ] [ <a href="index.php">'.FormatText(ADMIN_RENS_18).'</a> ]</p>'."\n\n";
	}
	elseif ($action == 'supp' AND $confirm == 'oui')
	{
		$user_pseudo = addslashes($user_pseudo);
		$requete     = "SELECT id FROM phpl_membres WHERE pseudo='$user_pseudo'";
		$result      = mysql_query($requete);
		$row         = mysql_fetch_array($result);

		mysql_query("DELETE FROM phpl_pronostics WHERE id_membre='$row[0]'");
		mysql_query("DELETE FROM phpl_membres WHERE id='$row[0]'");
		mysql_query("DELETE FROM phpl_clmnt_pronos WHERE id_membre='$row[0]'");

		//header('location: logout.php');

		echo '	<p class="TxtCenter">'.FormatText(PRONO_PROFIL_SUPP).'</p>'."\n\n";
	}
	else
	{
		$user_pseudo = addslashes($user_pseudo);

		if ($action == 1)
		{
			$query  = "SELECT mot_de_passe FROM phpl_membres WHERE id_prono='$user_id' and pseudo='$user_pseudo'";
			$result = mysql_query($query);

			while ($row = mysql_fetch_array($result))
			{
				$mot_de_passe_correct = $row['0'];
			}

			$ancien_mdp_crypt = md5($ancien_mdp);
			$date_naissance   = $annee.'-'.$mois.'-'.$jour;

			if (!empty($mobile1) AND !empty($mobile2) AND !empty($mobile3) AND !empty($mobile4) AND !empty($mobile5))
			{
				$mobile = $mobile1.'-'.$mobile2.'-'.$mobile3.'-'.$mobile4.'-'.$mobile5;
			}

			if (empty($ancien_mdp) AND empty($nouveau_mdp) AND empty($nouveau_mdp2))
			{
				mysql_query("UPDATE phpl_membres
							SET nom_site='$site',
								mail='$mail',
								nom='$nom',
								prenom='$prenom',
								adresse='$adresse',
								code_postal='$code_postal',
								ville='$ville',
								pays='$pays',
								date_naissance='$date_naissance',
								profession='$profession',
								mobile='$mobile'
							WHERE id_prono='$user_id'
							AND pseudo='$user_pseudo'");

				$message.= "profil mis à jour";
			}
			elseif (empty($ancien_mdp))
			{
				$message.= PRONO_PROFIL_ANCIEN_MDP;
			}
			elseif (empty($nouveau_mdp))
			{
				$message.= PRONO_PROFIL_MDP_2_FOIS;
			}
			elseif (empty($nouveau_mdp2))
			{
				$message.= PRONO_PROFIL_MDP_2_FOIS_2;
			}
			elseif ($nouveau_mdp != $nouveau_mdp2)
			{
				$message.= PRONO_PROFIL_MDP_DIFF;
			}
			elseif ($ancien_mdp_crypt != $mot_de_passe_correct)
			{
				$message.= PRONO_PROFIL_MDP_ERREUR;
			}
			elseif (!empty($ancien_mdp) AND !empty($nouveau_mdp) AND !empty($nouveau_mdp2))
			{
				echo $row['0'];

			if ($ancien_mdp_crypt = $mot_de_passe_correct AND $nouveau_mdp = $nouveau_mdp2)
			{
				$nouveau_mdp_crypt = md5($nouveau_mdp2);

				mysql_query("UPDATE phpl_membres SET nom_site='$site', mail='$mail', mot_de_passe='$nouveau_mdp_crypt', nom='$nom', prenom='$prenom', adresse='$adresse', code_postal='$code_postal', ville='$ville', pays='$pays', date_naissance='$date_naissance', profession='$profession', mobile='$mobile'  WHERE id_prono='$user_id' and pseudo='$user_pseudo'");

				$message.= 'Profil mis à jour';
			}
		}
	}

	if (!empty($message))
	{
		echo '<p>'.FormatText($message).'</p>'."\n";
	}

	$query = "SELECT pseudo, mot_de_passe, mail, nom_site, nom, prenom, adresse, code_postal, ville, pays, date_naissance, profession, mobile  FROM phpl_membres WHERE pseudo='$user_pseudo' AND id_prono = '$user_id' ";
	$result = mysql_query($query);
	$row    = mysql_fetch_array($result);

?>

<form method="post" action="" id="profil">
	<table class="Large100P">
		<thead>
			<tr>
				<th colspan="2"><?php echo FormatText(PRONO_PROFIL_TITRE).' '.$user_pseudo; ?></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><?php echo FormatText(PRONO_CLASSEMENT_PSEUDO); ?></td>
				<td><?php echo $row['pseudo']; ?></td>
			</tr>
			<tr>
				<td><?php echo FormatText(PRONO_PROFIL_ANCIEN_MDP_2); ?></td>
				<td><input type="password" name="ancien_mdp" size="30" /></td>
			</tr>
			<tr>
				<td><?php echo FormatText(PRONO_PROFIL_NOUVEAU_MDP); ?></td>
				<td><input type="password" name="nouveau_mdp" size="30" /></td>
			</tr>
			<tr>
				<td><?php echo FormatText(PRONO_PROFIL_NOUVEAU_MDP_2); ?></td>
				<td><input type="password" name="nouveau_mdp2" size="30" /></td>
			</tr>
			<tr>
				<td><?php echo FormatText(PRONO_PROFIL_MAIL); ?></td>
				<td><input type="text" name="mail" size="30" value="<?php echo $row['mail']; ?>" /></td>
			</tr>
		</tbody>
		<tfoot>
			<tr>
				<td><a href="index.php?page=profil&amp;action=supp"><?php echo FormatText(PRONO_PROFIL_SUPP_2); ?></a></td>
				<td>
					<input type="hidden" name="page" value="profil" />
					<input type="hidden" name="action" value="1" />
					<input type="submit" value="<?php echo FormatText(ENVOI); ?>" />
				</td>
			</tr>
		</tfoot>
	</table>
</form>

<?php

	}
}

?>